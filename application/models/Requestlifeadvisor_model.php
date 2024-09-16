<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Requestlifeadvisor_model extends CI_Model  {
	
	function __construct() {
        parent::__construct();
    }
	
	//get Cities
	public function get_cities() {
		return  $this->db->select('title')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(array('kotak_channel_titles.channel_id'			=>		CITIES_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'			=>		SITE_ID,
								  'kotak_channel_titles.status'				=>		'open'))
					->get()->result();
	}
	
	public function insert_request($postData, $postDataChannelTitle) {
		$insertedChannelEntryId = $this->_insert_channel_title($postDataChannelTitle);
		if(isset($insertedChannelEntryId) && $insertedChannelEntryId != null && $insertedChannelEntryId > 0) {
			$postData['entry_id'] = $insertedChannelEntryId;
			$this->db->insert('kotak_channel_data', $postData);
			return $this->db->affected_rows() > 0;
		} else {
			return FALSE;
		}
	}
	
	public function _insert_channel_title($postDataChannelTitle) {
		$this->db->insert('kotak_channel_titles', $postDataChannelTitle);
		return $this->db->insert_id();
	}
	
	//get Plans
	public function get_plans(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('kotak_channel_fields.field_id'			=>		REQUEST_LIFE_ADVISOR_PLANS_ID, 
								  'kotak_channel_fields.site_id'			=>		SITE_ID,
								  'kotak_channel_fields.field_name'			=>		'choice_of_plan'))
					->get()->row();
	}
	

	//get Group Plans
	public function get_group_plans() {
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('kotak_channel_fields.field_id'			=>		REQUEST_A_RELATIONSHIP_MANAGER_PLANS_ID, 
								  'kotak_channel_fields.site_id'			=>		SITE_ID,
								  'kotak_channel_fields.field_name'			=>		'rarm_plan_interested'))
					->get()->row();
	}

	//get employee Count values
	public function get_employee_count_values() {
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('kotak_channel_fields.field_id'			=>		REQUEST_A_RELATIONSHIP_MANAGER_EMPLOYEE_COUNT_ID, 
								  'kotak_channel_fields.site_id'			=>		SITE_ID,
								  'kotak_channel_fields.field_name'			=>		'rarm_employee_count'))
					->get()->row();
	}
	
}
	
	