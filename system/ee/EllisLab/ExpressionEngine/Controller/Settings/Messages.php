<?php

namespace EllisLab\ExpressionEngine\Controller\Settings;

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use CP_Controller;

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2003 - 2016, EllisLab, Inc.
 * @license		https://expressionengine.com/license
 * @link		https://ellislab.com
 * @since		Version 3.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * ExpressionEngine CP Messaging Settings Class
 *
 * @package		ExpressionEngine
 * @subpackage	Control Panel
 * @category	Control Panel
 * @author		EllisLab Dev Team
 * @link		https://ellislab.com
 */
class Messages extends Settings {

	public function __construct()
	{
		parent::__construct();

		if ( ! ee()->cp->allowed_group('can_access_members', 'can_admin_design'))
		{
			show_error(lang('unauthorized_access'));
		}
	}

	/**
	 * General Settings
	 */
	public function index()
	{
		$current = ee()->config->item('prv_msg_upload_path');
		$directory = ee('Model')->get('UploadDestination')->filter('server_path', $current)->first();

		$vars['sections'] = array(
			array(
				array(
					'title' => 'prv_msg_max_chars',
					'fields' => array(
						'prv_msg_max_chars' => array('type' => 'text')
					)
				),
				array(
					'title' => 'prv_msg_html_format',
					'fields' => array(
						'prv_msg_html_format' => array(
							'type' => 'select',
							'choices' => array(
								'safe' => lang('html_safe'),
								'none' => lang('html_none'),
								'all' => lang('html_all')
							)
						)
					)
				),
				array(
					'title' => 'prv_msg_auto_links',
					'desc' => 'prv_msg_auto_links_desc',
					'fields' => array(
						'prv_msg_auto_links' => array('type' => 'yes_no')
					)
				),
			),
			'url_path_settings_title' => array(
				array(
					'title' => 'prv_msg_upload_url',
					'desc' => 'prv_msg_upload_url_desc',
					'fields' => array(
						'prv_msg_upload_url' => array(
							'type' => 'text',
							'value' => ($directory) ? $directory->url : str_replace('avatars', 'pm_attachments', ee()->config->item('avatar_url', '', TRUE)),
							'required' => TRUE
						)
					)
				),
				array(
					'title' => 'prv_msg_upload_path',
					'desc' => 'prv_msg_upload_path_desc',
					'fields' => array(
						'prv_msg_upload_path' => array(
							'type' => 'text',
							'required' => TRUE
						)
					)
				),
			),
			'attachment_settings' => array(
				array(
					'title' => 'prv_msg_max_attachments',
					'fields' => array(
						'prv_msg_max_attachments' => array('type' => 'text')
					)
				),
				array(
					'title' => 'prv_msg_attach_maxsize',
					'desc' => 'prv_msg_attach_maxsize_desc',
					'fields' => array(
						'prv_msg_attach_maxsize' => array('type' => 'text')
					)
				),
				array(
					'title' => 'prv_msg_attach_total',
					'desc' => 'prv_msg_attach_total_desc',
					'fields' => array(
						'prv_msg_attach_total' => array('type' => 'text')
					)
				),
			)
		);

		ee()->form_validation->set_rules(array(
			array(
				'field' => 'prv_msg_max_chars',
				'label' => 'lang:prv_msg_max_chars',
				'rules' => 'integer'
			),
			array(
				'field' => 'prv_msg_upload_url',
				'label' => 'lang:prv_msg_upload_url',
				'rules' => 'required'
			),
			array(
				'field' => 'prv_msg_upload_path',
				'label' => 'lang:prv_msg_upload_path',
				'rules' => 'required|strip_tags|valid_xss_check|file_exists|writable'
			),
			array(
				'field' => 'prv_msg_max_attachments',
				'label' => 'lang:prv_msg_max_attachments',
				'rules' => 'integer'
			),
			array(
				'field' => 'prv_msg_attach_maxsize',
				'label' => 'lang:prv_msg_attach_maxsize',
				'rules' => 'integer'
			),
			array(
				'field' => 'prv_msg_attach_total',
				'label' => 'lang:prv_msg_attach_total',
				'rules' => 'integer'
			)
		));

		ee()->form_validation->validateNonTextInputs($vars['sections']);

		$base_url = ee('CP/URL')->make('settings/messages');

		if (AJAX_REQUEST)
		{
			ee()->form_validation->run_ajax();
			exit;
		}
		elseif (ee()->form_validation->run() !== FALSE)
		{
			$directory_settings = array(
				'prv_msg_upload_path' => ee()->input->post('prv_msg_upload_path'),
				'prv_msg_attach_maxsize' => ee()->input->post('prv_msg_attach_maxsize'),
			);

			unset($vars['sections'][0]['url_path_settings_title'][0]);

			if ($this->saveSettings($vars['sections']) && $this->updateUploadDirectory($directory_settings))
			{
				ee()->view->set_message('success', lang('preferences_updated'), lang('preferences_updated_desc'), TRUE);
			}

			ee()->functions->redirect($base_url);
		}
		elseif (ee()->form_validation->errors_exist())
		{
			ee()->view->set_message('issue', lang('settings_save_error'), lang('settings_save_error_desc'));
		}

		ee()->view->ajax_validate = TRUE;
		ee()->view->base_url = $base_url;
		ee()->view->cp_page_title = lang('messaging_settings');
		ee()->view->save_btn_text = 'btn_save_settings';
		ee()->view->save_btn_text_working = 'btn_saving';

		ee()->cp->render('settings/form', $vars);
	}

	/**
	 * Update the upload preferences for the associated upload directory
	 *
	 * @param mixed $data
	 * @access private
	 * @return void
	 */
	private function updateUploadDirectory($data)
	{
		$current = ee()->config->item('prv_msg_upload_path');
		$directory = ee('Model')->get('UploadDestination')->filter('server_path', $current)->first();
		if ( ! $directory)
		{
			$directory = ee('Model')->make('UploadDestination');
			$directory->name = 'PM Attachments';
			$directory->Module = ee('Model')->get('Module')->filter('module_name', 'Member')->first();
		}
		$directory->url = ee()->input->post('prv_msg_upload_url');
		$directory->server_path = $data['prv_msg_upload_path'];
		$directory->max_size = $data['prv_msg_attach_maxsize'];
		$directory->save();

		return TRUE;
	}
}
// END CLASS

// EOF
