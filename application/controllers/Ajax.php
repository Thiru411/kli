<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		//Load Libraries
		$this->load->helper('common');

		$this->load->database();

	}
	
	public function feedback_cities($city){
		//$opt = "";
		$city = $this->input->post('city');
		$result = $this->WhyKotakLife_model->get_MapResult(FEEDBACK_FORM,$city);
		echo json_encode($data);
	}
	
	//Do Not Call Registry Start
	public function do_not_call_registry_submit(){
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		
		$this->load->library('form_validation');
		$this->load->helper('security'); // to xss_clean
		$this->load->model('requestlifeadvisor_model');
		$this->form_validation->set_rules('dnd_full_name', 'Your Name', 'trim|required|xss_clean|callback_name_format_check|max_length[30]');
		$this->form_validation->set_rules('dnd_mobile_number', 'Contact Number', 'trim|required|xss_clean|numeric|exact_length[10]');
		$this->form_validation->set_rules('dnd_email_id', 'Email ID', 'required|xss_clean|valid_email|max_length[256]');
		$this->form_validation->set_rules('dnd_city', 'Select City', 'required|xss_clean|callback__check_selected_city|callback_name_format_check|max_length[20]');
	//	$this->form_validation->set_rules('g-recaptcha-response', 'Captcha Check', 'required|xss_clean|callback__check_recaptcha');
		//$this->form_validation->set_rules('allowCallsDND', 'Terms and Conditions', 'required|xss_clean|callback__check_selected_terms|callback_name_format_check');

		if($this->form_validation->run() == FALSE) {
			foreach($this->form_validation->error_array() as $field_name => $error_message) {
				$data['inputerror'][] = $field_name;
				$data['error_string'][] = $error_message;
			}
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		
		$currentTime = time();
		$postData = array(
			'site_id' 					=> SITE_ID,
			'channel_id'				=> DO_NOT_CALL_REGISTRY,
			'field_id_307'    			=>  secure_input_data($this->input->post('dnd_full_name')),
			'field_id_308' 				=>  secure_input_data($this->input->post('dnd_mobile_number')),
			'field_id_309'   			=>  secure_input_data($this->input->post('dnd_email_id')),
			'field_id_310' 				=>  secure_input_data($this->input->post('dnd_city')),
			);
		$postDataChannelTitle = array(
			'site_id' 					=> SITE_ID,
			'channel_id'				=> DO_NOT_CALL_REGISTRY,
			'author_id' 				=> AUTHOR_ID,
			'ip_address' 				=> $this->input->ip_address(),
			'title' 					=> secure_input_data($this->input->post('dnd_full_name')),
			'url_title' 				=> str_replace(' ', '-', strtolower(secure_input_data($this->input->post('dnd_full_name')))) . '-' . time(),
			'status' 					=> 'open',
			'versioning_enabled' 		=> 'n',
			'allow_comments' 			=> 'n',
			'sticky' 					=> 'n',
			'entry_date' 				=> $currentTime,
			'year' 						=> date('Y', $currentTime),
			'month' 					=> date('m', $currentTime),
			'day' 						=> date('d', $currentTime),
			'expiration_date' 			=> 0,
			'comment_expiration_date' 	=> 0,
			'edit_date' 				=> $currentTime,
		);
		
		$insertId = $this->requestlifeadvisor_model->insert_request($postData, $postDataChannelTitle);
		if(isset($insertId) && $insertId > 0 && $insertId) {
			$data['status_message'] = 'Our Life Advisor will contact you at the earliest.';
			$data['status'] = TRUE;
		} else {
			$data['status_message'] = 'Something went wrong. Please try again later!';
			$data['status'] = FALSE;
		}
		
		echo json_encode($data);
		exit();
	}
	//Do Not Call Registry End
	
	public function join_us_submit(){
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		
		$this->load->library('form_validation');
		$this->load->helper('security'); // to xss_clean
		$this->load->model('Site_model');
		$this->form_validation->set_rules('JoinUs_yourName', 'Your Name', 'trim|required|xss_clean|max_length[30]');
		$this->form_validation->set_rules('JoinUs_dob', 'Date of Birth', 'trim|required|xss_clean|max_length[30]');
		$this->form_validation->set_rules('JoinUs_mobileNumber', 'Your Mobile Number', 'trim|required|numeric|xss_clean|exact_length[10]');
		$this->form_validation->set_rules('JoinUs_email', 'Email ID', 'trim|required|xss_clean|valid_email|max_length[256]');
		$this->form_validation->set_rules('JoinUs_city', 'Your City', 'trim|required|xss_clean|callback_name_format_check|max_length[50]');
		$this->form_validation->set_rules('JoinUs_pincode', 'Your Pincode', 'trim|required|numeric|xss_clean|exact_length[6]');
	//	$this->form_validation->set_rules('g-recaptcha-response', 'Captcha Check', 'required|xss_clean|callback__check_recaptcha');
		
		
		if($this->form_validation->run() == FALSE){
			//Field validation failed.
			foreach($this->form_validation->error_array() as $field_name => $error_message) {
				$data['inputerror'][] = $field_name;
				$data['error_string'][] = $error_message;
			}
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		
		$currentTime = time();
		$postData = array(
			//actually data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> CHNL_JOIN_US,
			'field_id_281'    			=>  secure_input_data($this->input->post('JoinUs_yourName')),
			'field_id_282'   			=>  secure_input_data($this->input->post('JoinUs_dob')),
			'field_id_283' 				=>  secure_input_data($this->input->post('JoinUs_mobileNumber')),
			'field_id_284' 				=>  secure_input_data($this->input->post('JoinUs_email')),
			'field_id_285' 				=>  secure_input_data($this->input->post('JoinUs_city')),
			'field_id_286' 				=>  secure_input_data($currentTime),
			'field_id_329' 				=>  secure_input_data($this->input->post('JoinUs_pincode'))
			);
		$postDataChannelTitle = array(
			//channel title data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> CHNL_JOIN_US,
			'author_id' 				=> AUTHOR_ID,
			'ip_address' 				=> $this->input->ip_address(),
			'title' 					=> secure_input_data($currentTime.$this->input->post('JoinUs_yourName')),
			'url_title' 				=> str_replace(' ', '-', strtolower($currentTime.$this->input->post('JoinUs_yourName'))),
			'status' 					=> 'open',
			'versioning_enabled' 		=> 'n',
			'allow_comments' 			=> 'n',
			'sticky' 					=> 'n',
			'entry_date' 				=> secure_input_data($currentTime),
			'year' 						=> date('Y', $currentTime),
			'month' 					=> date('m', $currentTime),
			'day' 						=> date('d', $currentTime),
			'expiration_date' 			=> 0,
			'comment_expiration_date' 	=> 0,
			'edit_date' 				=> secure_input_data($currentTime),
		);
		
		$insertId = $this->Site_model->insert_getACallDetails($postData, $postDataChannelTitle);
		if(isset($insertId) && $insertId > 0 && $insertId){
			$data['status_message'] = 'Successfully submitted your details.';
			$data['status'] = TRUE;
		} else {
			$data['status_message'] = 'Something went wrong. Please try again later!';
			$data['status'] = FALSE;
		}
		
		echo json_encode($data);
		exit();
	}
	
	public function feedback_submit(){
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		
		$this->load->library('form_validation');
		$this->load->helper('security'); // to xss_clean
		$this->load->model('Site_model');
		$this->form_validation->set_rules('feedback_name', 'Your Name', 'trim|required|xss_clean|callback_name_format_check|max_length[30]');
		$this->form_validation->set_rules('feedback_email', 'Email ID', 'trim|required|xss_clean|max_length[256]');
		//$this->form_validation->set_rules('g-recaptcha-response', 'Captcha Check', 'required|xss_clean|callback__check_recaptcha');
		
		if($this->form_validation->run() == FALSE) {
			//Field validation failed.
			foreach($this->form_validation->error_array() as $field_name => $error_message) {
				$data['inputerror'][] = $field_name;
				$data['error_string'][] = $error_message;
			}
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		
		$currentTime = time();
		$postData = array(
			//actually data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> FEEDBACK_FORM,
			'field_id_270'    			=>  secure_input_data($this->input->post('rd_question1')),
			'field_id_271'   			=>  secure_input_data($this->input->post('rd_question2')),
			'field_id_272' 				=>  secure_input_data($this->input->post('rd_question3')),
			'field_id_273' 				=>  secure_input_data($this->input->post('rd_question4')),
			'field_id_274' 				=>  secure_input_data($this->input->post('rd_question5')),
			'field_id_275' 				=>  secure_input_data($this->input->post('feedback_ratings')),
			'field_id_276' 				=>  secure_input_data($this->input->post('feedback_comments_to_improve')),
			'field_id_277' 				=>  secure_input_data($this->input->post('feedback_name')),
			'field_id_278' 				=>  secure_input_data($this->input->post('feedback_email')),
			'field_id_279' 				=>  secure_input_data($this->input->post('feedback_mobile_number')),
			'field_id_280' 				=>  secure_input_data($this->input->post('feedback_city')),
			);
		$postDataChannelTitle = array(
			//channel title data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> FEEDBACK_FORM,
			'author_id' 				=> AUTHOR_ID,
			'ip_address' 				=> $this->input->ip_address(),
			'title' 					=> secure_input_data($currentTime.$this->input->post('yourName')),
			'url_title' 				=> str_replace(' ', '-', strtolower($currentTime.$this->input->post('yourName'))),
			'status' 					=> 'open',
			'versioning_enabled' 		=> 'n',
			'allow_comments' 			=> 'n',
			'sticky' 					=> 'n',
			'entry_date' 				=> secure_input_data($currentTime),
			'year' 						=> date('Y', $currentTime),
			'month' 					=> date('m', $currentTime),
			'day' 						=> date('d', $currentTime),
			'expiration_date' 			=> 0,
			'comment_expiration_date' 	=> 0,
			'edit_date' 				=> secure_input_data($currentTime),
		);
		
		$insertId = $this->Site_model->insert_needBaseDetails($postData, $postDataChannelTitle);
		if(isset($insertId) && $insertId > 0 && $insertId){
			$data['status_message'] = 'Successfully submitted your details.';
			$data['status'] = TRUE;
		} else {
			$data['status_message'] = 'Something went wrong. Please try again later!';
			$data['status'] = FALSE;
		}
		
		echo json_encode($data);
		exit();
	}
	
	public function get_call_submit(){
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		//array_push($this->data['JS_FILES'], 'assets/js/jquery.validate.js');
		//array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
		
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		
		$this->load->library('form_validation');
		$this->load->helper('security'); // to xss_clean
		$this->load->model('Site_model');
		$this->form_validation->set_rules('yourName', 'Your Name', 'trim|required|xss_clean|callback_name_format_check|max_length[30]');
		$this->form_validation->set_rules('yourMobileNumber', 'Your Mobile Number', 'trim|required|xss_clean|numeric|exact_length[10]');
		$this->form_validation->set_rules('yourEmailId', 'Email ID', 'trim|required|xss_clean|valid_email|max_length[256]');
		$this->form_validation->set_rules('yourQuery', 'Feedback', 'trim|required|xss_clean|callback_name_format_check|max_length[500]');
		//$this->form_validation->set_rules('g-recaptcha-response', 'Captcha Check', 'required|xss_clean|callback__check_recaptcha');
		
		if($this->form_validation->run() == FALSE) {
			//Field validation failed.
			foreach($this->form_validation->error_array() as $field_name => $error_message) {
				$data['inputerror'][] = $field_name;
				$data['error_string'][] = $error_message;
			}
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		
		$currentTime = time();
		$postData = array(
			//actually data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> GET_A_CALL,
			'field_id_253'    			=>  secure_input_data($this->input->post('yourName')),
			'field_id_254'   			=>  secure_input_data($this->input->post('yourMobileNumber')),
			'field_id_255' 				=>  secure_input_data($this->input->post('yourEmailId')),
			'field_id_256' 				=>  secure_input_data($this->input->post('yourQuery')),
			);
		$postDataChannelTitle = array(
			//channel title data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> GET_A_CALL,
			'author_id' 				=> AUTHOR_ID,
			'ip_address' 				=> $this->input->ip_address(),
			'title' 					=> secure_input_data($currentTime.$this->input->post('yourName')),
			'url_title' 				=> secure_input_data(str_replace(' ', '-', strtolower($currentTime.$this->input->post('yourName')))),
			'status' 					=> 'open',
			'versioning_enabled' 		=> 'n',
			'allow_comments' 			=> 'n',
			'sticky' 					=> 'n',
			'entry_date' 				=> secure_input_data($currentTime),
			'year' 						=> date('Y', $currentTime),
			'month' 					=> date('m', $currentTime),
			'day' 						=> date('d', $currentTime),
			'expiration_date' 			=> 0,
			'comment_expiration_date' 	=> 0,
			'edit_date' 				=> secure_input_data($currentTime),
		);
		
		$insertId = $this->Site_model->insert_getACallDetails($postData, $postDataChannelTitle);
		if(isset($insertId) && $insertId > 0 && $insertId){
			$data['status_message'] = 'Successfully submitted your details.';
			$data['status'] = TRUE;
		} else {
			$data['status_message'] = 'Something went wrong. Please try again later!';
			$data['status'] = FALSE;
		}
		
		echo json_encode($data);
		exit();
	}
	
	public function needBaseCalRes(){
		$this->load->model('Site_model');
		$this->load->model('insuranceplan_model');
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		
		$this->load->library('form_validation');
		$this->load->helper('security'); // to xss_clean
		
		$this->form_validation->set_rules('needSegment', 'Name', 'trim|required|xss_clean|callback_name_format_check|max_length[30]');
		$this->form_validation->set_rules('ageGroup', 'Age Group', 'trim|required|xss_clean|max_length[30]');
		$this->form_validation->set_rules('name', 'City', 'trim|required|xss_clean|callback_name_format_check|max_length[30]');
		$this->form_validation->set_rules('pincode', 'Pincode', 'trim|required|xss_clean|callback_name_format_check|max_length[30]');
		$this->form_validation->set_rules('number', 'Customer', 'required|xss_clean|numeric|exact_length[10]|callback_name_format_check');
		
		$needSegment = secure_input_data($this->input->post('needSegment'));
		if($needSegment=="Child"){ $needSegment= "Child Marriage";}
		$ageGroup = secure_input_data($this->input->post('ageGroup'));
		//$ageGroup = str_replace('to', '-', $ageGroup);
		if (strpos($ageGroup, 'to') !== false) {
			$ageGroup = str_replace('to', '-', $ageGroup);
		}
		if (strpos($ageGroup, 'and') !== false) {
			$ageGroup = str_replace('and', '&', $ageGroup);
		}
		$name = secure_input_data($this->input->post('name'));
		$number = secure_input_data($this->input->post('number'));
		$city = secure_input_data($this->input->post('custcity'));
		$pincode = secure_input_data($this->input->post('pincode'));
		
		$currentTime = time();
		$postData = array(
			//actually data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> NEED_BASE_CALCULATOR_USER_DETAILS,
			'field_id_247'    			=>  $needSegment,
			'field_id_248' 				=>  $ageGroup,
			'field_id_246'   			=>  $name,
			'field_id_249' 				=>  $number,
			'field_id_250' 				=>  $this->input->ip_address(),
			'field_id_252' 				=>  $city,
			'field_id_338' 				=>  $pincode,
			);
			
		$postDataChannelTitle = array(
			//channel title data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> NEED_BASE_CALCULATOR_USER_DETAILS,
			'author_id' 				=> AUTHOR_ID,
			'ip_address' 				=> $this->input->ip_address(),
			'title' 					=> $currentTime.$name,
			'url_title' 				=> str_replace(' ', '-', strtolower($currentTime.$name)),
			'status' 					=> 'open',
			'versioning_enabled' 		=> 'n',
			'allow_comments' 			=> 'n',
			'sticky' 					=> 'n',
			'entry_date' 				=> $currentTime,
			'year' 						=> date('Y', $currentTime),
			'month' 					=> date('m', $currentTime),
			'day' 						=> date('d', $currentTime),
			'expiration_date' 			=> 0,
			'comment_expiration_date' 	=> 0,
			'edit_date' 				=> $currentTime,
		);
		
		$insertId = $this->Site_model->insert_needBaseDetails($postData,$postDataChannelTitle);
		if(isset($insertId) && $insertId > 0 && $insertId) {
			$data['status_message'] = 'Successfully submitted your request.';
			$data['status'] = TRUE;
		} else {
			$data['status_message'] = 'Something went wrong. Please try again later!';
			$data['status'] = FALSE;
		}
		
		$res = $this->Site_model->get_needBaseResult($ageGroup,$needSegment);
		//echo $this->db->last_query();
		//die;
		echo json_encode($res);
	}
	
	//Request A Life Advisor Submit
	public function request_a_life_advisor_submit() {
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		
		$this->load->library('form_validation');
		$this->load->helper('security'); // to xss_clean
		$this->load->model('requestlifeadvisor_model');
		$this->form_validation->set_rules('customer_name', 'Name', 'trim|required|xss_clean|callback_name_format_check|max_length[30]');
		$this->form_validation->set_rules('pincode', 'Pincode', 'trim|required|xss_clean|callback_name_format_check|max_length[10]');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required|xss_clean|numeric|exact_length[10]');
		$this->form_validation->set_rules('city', 'City', 'required|xss_clean|callback__check_selected_city|callback_name_format_check|max_length[20]');
		$this->form_validation->set_rules('customer', 'Customer', 'required|xss_clean|callback__check_selected_customer|callback_name_format_check|max_length[50]');
		$this->form_validation->set_rules('plan_selected', 'Plan Type', 'required|xss_clean|callback__check_selected_plan|callback_name_format_check|max_length[50]');
		//$this->form_validation->set_rules('g-recaptcha-response', 'Captcha Check', 'required|xss_clean|callback__check_recaptcha');
		$this->form_validation->set_rules('terms', 'Terms and Conditions', 'required|xss_clean|callback__check_selected_terms|callback_name_format_check');

		if($this->form_validation->run() == FALSE) {
			//Field validation failed.
			foreach($this->form_validation->error_array() as $field_name => $error_message) {
				$data['inputerror'][] = $field_name;
				$data['error_string'][] = $error_message;
			}
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		
		$currentTime = time();
		$postData = array(
			//actually data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> REQUEST_LIFE_ADVISOR_CHANNEL_ID,
			'field_id_86'    			=>  secure_input_data($this->input->post('customer_name')),
			'field_id_87' 				=>  secure_input_data($this->input->post('mobile_number')),
			'field_id_89'   			=>  secure_input_data($this->input->post('city')),
			'field_id_90' 				=>  secure_input_data($this->input->post('customer')),
			'field_id_91'   			=>  secure_input_data($this->input->post('plan_selected')),
			'field_id_338'   			=>  secure_input_data($this->input->post('pincode')),
			);
		$postDataChannelTitle = array(
			//channel title data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> REQUEST_LIFE_ADVISOR_CHANNEL_ID,
			'author_id' 				=> AUTHOR_ID,
			'ip_address' 				=> $this->input->ip_address(),
			'title' 					=> secure_input_data($this->input->post('customer_name')),
			'url_title' 				=> str_replace(' ', '-', strtolower(secure_input_data($this->input->post('customer_name')))) . '-' . time(),
			'status' 					=> 'open',
			'versioning_enabled' 		=> 'n',
			'allow_comments' 			=> 'n',
			'sticky' 					=> 'n',
			'entry_date' 				=> $currentTime,
			'year' 						=> date('Y', $currentTime),
			'month' 					=> date('m', $currentTime),
			'day' 						=> date('d', $currentTime),
			'expiration_date' 			=> 0,
			'comment_expiration_date' 	=> 0,
			'edit_date' 				=> $currentTime,
		);
		
		$insertId = $this->requestlifeadvisor_model->insert_request($postData, $postDataChannelTitle);
		if(isset($insertId) && $insertId > 0 && $insertId) {
			$data['status_message'] = 'Our Life Advisor will contact you at the earliest.';
			$data['status'] = TRUE;
		} else {
			$data['status_message'] = 'Something went wrong. Please try again later!';
			$data['status'] = FALSE;
		}
		
		echo json_encode($data);
		exit();
	}
	
	//Check whether a valid city
	function _check_selected_city($city) {
		$cities = $this->requestlifeadvisor_model->get_cities(); //get Cities
		if(sizeof($cities) > 0) {
			foreach($cities as $cityObject) {
				if($cityObject->title === $city) {
					return TRUE;
				}
			}
			$this->form_validation->set_message('_check_selected_city', 'Please select a City from the Dropdown.');
			return FALSE;
		}
	}
	
	//check customer type
	function _check_selected_customer($customer){
		$customers = unserialize(CUSTOMERS); //getting the customer type array from constants.php
		if(in_array($customer, $customers)) {
			return TRUE;
		} else {
			$this->form_validation->set_message('_check_selected_customer', 'Please select a Customer Type from the Dropdown.');
			return FALSE;
		}
	}
	
	//check whether terms and condition is selected
	function _check_selected_terms($terms) {
		if($terms == 'on') {
			return TRUE;
		} else {
			$this->form_validation->set_message('_check_selected_terms', 'Please accept the Terms and Conditons.');
			return FALSE;
		}
	}
	
	//check plan type
	function _check_selected_plan($plan_selected) {
		$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
		$plans = explode("\n", $choiceOfPlans->field_list_items);
		if(in_array($plan_selected, $plans)) {
			return TRUE;
		} else {
			$this->form_validation->set_message('_check_selected_plan', 'Please select a Plan Type from the Dropdown.');
			return FALSE;
		}
	}

	//check group plan type
	function _check_selected_group_plan($plan_selected) {
		$choiceOfPlans = $this->requestlifeadvisor_model->get_group_plans(); //get Group Plans
		$plans = explode("\n", $choiceOfPlans->field_list_items);
		if(in_array($plan_selected, $plans)) {
			return TRUE;
		} else {
			$this->form_validation->set_message('_check_selected_group_plan', 'Please select a Plan Type from the Dropdown.');
			return FALSE;
		}
	}

	//check employee count
	function _check_selected_employee_count($employee_count) {
		$employeeCountListObject = $this->requestlifeadvisor_model->get_employee_count_values(); //get Employee Count Values
		$employeeCountList = explode("\n", $employeeCountListObject->field_list_items);
		if(in_array($employee_count, $employeeCountList)) {
			return TRUE;
		} else {
			$this->form_validation->set_message('_check_selected_employee_count', 'Please select the Member Count from the Dropdown.');
			return FALSE;
		}
	}
	
	function _check_recaptcha($g_recaptcha_response) {
		//your site secret key
        $secret = GOOGLE_RECAPTHA_SECRET; //'6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
		$options=array(
			'ssl'=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
		),
		/*	'ssl'=>array(
				'cafile'            => 'D:/kotak/apache/conf/kotak.pem',
				'verify_peer'       => true,
				'verify_peer_name'  => true,
			),*/
			'http' => array(
					'proxy' => '192.168.201.77:8080',
					'request_fulluri' => true,
			)
		);
		$context = stream_context_create( $options );
        //get verify response data
        //$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$g_recaptcha_response);
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$g_recaptcha_response,  FILE_TEXT, $context);
		$responseData = json_decode($verifyResponse);
        if($responseData->success) {
			return TRUE;
		} else {
			$this->form_validation->set_message('_check_recaptcha', 'Robot verfication failed. Please try again.');
			return FALSE;
		}
	}


	//Request a Relationship Manager Submit
	public function request_a_relationship_manager_submit() {
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		$this->load->library('form_validation');
		$this->load->helper('security'); // to xss_clean
		$this->load->model('requestlifeadvisor_model');
		$this->form_validation->set_rules('customer_name', 'Name', 'trim|required|xss_clean|callback_name_format_check|max_length[30]');
		$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required|xss_clean|callback_name_format_check|max_length[40]');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|xss_clean|valid_email|max_length[256]');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required|xss_clean|numeric|exact_length[10]');
		$this->form_validation->set_rules('city', 'City', 'required|xss_clean|callback__check_selected_city|callback_name_format_check|max_length[30]');
		$this->form_validation->set_rules('employee_count', 'Member Count', 'required|xss_clean|callback__check_selected_employee_count|callback_name_format_check|max_length[50]');
		$this->form_validation->set_rules('plan_selected', 'Plan Type', 'required|xss_clean|callback__check_selected_group_plan|callback_name_format_check|max_length[50]');
		//$this->form_validation->set_rules('g-recaptcha-response', 'Captcha Check', 'required|xss_clean|callback__check_recaptcha');
		$this->form_validation->set_rules('terms', 'Terms and Conditions', 'required|xss_clean|callback__check_selected_terms|callback_name_format_check');

		if($this->form_validation->run() == FALSE) {
			//Field validation failed.
			foreach($this->form_validation->error_array() as $field_name => $error_message) {
				$data['inputerror'][] = $field_name;
				$data['error_string'][] = $error_message;
			}
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		
		$currentTime = time();
		$postData = array(
			//actually data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> REQUEST_A_RELATIONSHIP_MANAGER_CHANNEL_ID,
			'field_id_257'    			=>  secure_input_data($this->input->post('customer_name')),
			'field_id_258' 				=>  secure_input_data($this->input->post('mobile_number')),
			'field_id_259'    			=>  secure_input_data($this->input->post('email')),
			'field_id_260'   			=>  secure_input_data($this->input->post('city')),
			'field_id_261'    			=>  secure_input_data($this->input->post('company_name')),
			'field_id_262'    			=>  secure_input_data($this->input->post('employee_count')),
			'field_id_263'   			=>  secure_input_data($this->input->post('plan_selected')),
			);
		$postDataChannelTitle = array(
			//channel title data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> REQUEST_A_RELATIONSHIP_MANAGER_CHANNEL_ID,
			'author_id' 				=> AUTHOR_ID,
			'ip_address' 				=> $this->input->ip_address(),
			'title' 					=> secure_input_data($this->input->post('customer_name')),
			'url_title' 				=> str_replace(' ', '-', strtolower(secure_input_data($this->input->post('customer_name')))) . '-' . time(),
			'status' 					=> 'open',
			'versioning_enabled' 		=> 'n',
			'allow_comments' 			=> 'n',
			'sticky' 					=> 'n',
			'entry_date' 				=> $currentTime,
			'year' 						=> date('Y', $currentTime),
			'month' 					=> date('m', $currentTime),
			'day' 						=> date('d', $currentTime),
			'expiration_date' 			=> 0,
			'comment_expiration_date' 	=> 0,
			'edit_date' 				=> $currentTime,
		);
		
		$insertId = $this->requestlifeadvisor_model->insert_request($postData, $postDataChannelTitle);
		if(isset($insertId) && $insertId > 0 && $insertId) {
			$data['status_message'] = 'Our Relationship Manager will contact you at the earliest.';
			$data['status'] = TRUE;
		} else {
			$data['status_message'] = 'Something went wrong. Please try again later!';
			$data['status'] = FALSE;
		}
			
		echo json_encode($data);
		exit();
	}

	
	public function contact_us_submit(){
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		
		$this->load->library('form_validation');
		$this->load->helper('security'); // to xss_clean
		$this->load->model('WhyKotakLife_model');
		$this->form_validation->set_rules('generalFeedback', 'General Feedback', 'trim|required|xss_clean|callback_name_format_check|max_length[50]');
		$this->form_validation->set_rules('contactNumber', 'Mobile Number', 'trim|required|xss_clean|numeric|exact_length[10]|callback_name_format_check');
		$this->form_validation->set_rules('fullName', 'Full Name', 'trim|required|xss_clean|callback_name_format_check|max_length[100]');
		$this->form_validation->set_rules('emailID', 'Email ID', 'trim|required|xss_clean|max_length[256]');
		$this->form_validation->set_rules('feedback', 'Feedback', 'trim|required|xss_clean|callback_name_format_check|max_length[500]');
	//	$this->form_validation->set_rules('g-recaptcha-response', 'Captcha Check', 'required|xss_clean|callback__check_recaptcha');
		
		if($this->form_validation->run() == FALSE) {
			//Field validation failed.
			foreach($this->form_validation->error_array() as $field_name => $error_message) {
				$data['inputerror'][] = $field_name;
				$data['error_string'][] = $error_message;
			}
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		
		$currentTime = time();
		$postData = array(
			//actually data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> CONTACT_US_CHANNEL_ID,
			'field_id_130'    			=>  secure_input_data($this->input->post('generalFeedback')),
			'field_id_131'   			=>  secure_input_data($this->input->post('fullName')),
			'field_id_132' 				=>  secure_input_data($this->input->post('emailID')),
			'field_id_133' 				=>  secure_input_data($this->input->post('contactNumber')),
			'field_id_134'   			=>  secure_input_data($this->input->post('feedback')),
			);
		$postDataChannelTitle = array(
			//channel title data
			'site_id' 					=> SITE_ID,
			'channel_id'				=> CONTACT_US_CHANNEL_ID,
			'author_id' 				=> AUTHOR_ID,
			'ip_address' 				=> secure_input_data($this->input->ip_address()),
			'title' 					=> secure_input_data($this->input->post('fullName')),
			//'title' 					=> 'Darshan',
			'url_title' 				=> str_replace(' ', '-', strtolower($this->input->post('fullName'))),
			'status' 					=> 'open',
			'versioning_enabled' 		=> 'n',
			'allow_comments' 			=> 'n',
			'sticky' 					=> 'n',
			'entry_date' 				=> $currentTime,
			'year' 						=> date('Y', $currentTime),
			'month' 					=> date('m', $currentTime),
			'day' 						=> date('d', $currentTime),
			'expiration_date' 			=> 0,
			'comment_expiration_date' 	=> 0,
			'edit_date' 				=> $currentTime,
		);
		
		$insertId = $this->WhyKotakLife_model->insert_request_contactUs($postData, $postDataChannelTitle);
		if(isset($insertId) && $insertId > 0 && $insertId) {
			$data['status_message'] = 'Thank you. Our representative will respond to you at the earliest.';
			$data['status'] = TRUE;
		} else {
			$data['status_message'] = 'Something went wrong. Please try again later!';
			$data['status'] = FALSE;
		}
			
		echo json_encode($data);
		exit();
	}

	//Load more articles data
	public function load_more_articles() {

		$success 		= 	FALSE;
		$getdata 		= 	array();
		$message 		= 	"Some Technical Error has Occurred. Please Try Again!";
		$data 			= 	json_decode(file_get_contents("php://input"));
		$nextDataCount	=	0;
		$newhtmldata='';
		if (isset($data->page) AND isset($data->sortType) AND isset($data->topicSlug) AND isset($data->searchArticle)) {

			// Load Model
			$this->load->model('insurance_guide_model');

			$pageNo 		= 	(int)secure_input_data($data->page);
			$sortType 		= 	secure_input_data($data->sortType);
			$topicSlug 		= 	secure_input_data($data->topicSlug);
			$searchArticle 	= 	secure_input_data($data->searchArticle);
			$url 	= 	secure_input_data($data->url);
			$position = strpos($url, 'financial-tools-calculators');

			if($position!=false){$article_limit=4;}else{$article_limit=ARTICLES_LIMIT;}
			$offset			=	$pageNo * $article_limit;

			$sort_by	=	'kcd.entry_id';
			if($sortType == 'viewed'){
				$sort_by = 'kcd.field_id_162';
			}
			if(($url=='online-plans/savings-plan') || ($url=='online-plans/online-term-insurance-plans') || ($url=='online-plans/ulip-plan') || ($url=='term-insurance'))
			{
				$articlesInfo 	= 	$this->insurance_guide_model->get_articles_by_topic_plan($topicSlug, $offset, $sort_by, $searchArticle);
			}else{
				$articlesInfo 	= 	$this->insurance_guide_model->get_articles_by_topic($topicSlug, $offset, $sort_by, $searchArticle,$article_limit);
			}
			
			$newhtmldata="";$entry_id		=	0;
			if(count($articlesInfo)){
				$i = 0;
				foreach ($articlesInfo as $article) {
					$getdata[$i]['title']			=$title=	$article->title;
					$getdata[$i]['topic_url_title']	=$topic_url_title=	$article->topic_url_title;
					$getdata[$i]['article_title']	=$article_title=	$article->article_title;
					$getdata[$i]['url_title']		=$url_title=	$article->url_title;
					$getdata[$i]['short_description']	= $short_description = $article->short_description;
					$getdata[$i]['article_image']	=$article_image=	str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $article->article_image); 
					$getdata[$i]['viewed_count']	=$viewed_count=	number_format($article->viewed_count);
					$getdata[$i]['posted_date']		=$posted_date=	date(ARTICLE_DATE_FORMAT, $article->posted_date);
					$this->data['articlesInfo'] = $this->insurance_guide_model->get_article_details($url_title);
					if($this->data['articlesInfo']){
						$articleInfo 	=	$this->data['articlesInfo']; 
						$entry_id		=	$articleInfo->entry_id;
					}
					$counttag=0;
					$articleTagsInfo = $this->insurance_guide_model->get_article_tags($entry_id);
					$counttag=sizeof($articleTagsInfo);
					$tag_info="";					
					if($articleTagsInfo)
					{  
							$k=1;
							foreach ($articleTagsInfo as $tag) {								
							$tag_url=site_url('insurance-guide/tag/'.$tag->tag_url_title);
							$tag_info=$tag_info."<a href='$tag_url' class='some-text'>#$tag->tag_title</a>";
							if($k>2){break;}
							$k++;	 
							}
					}
				
				$topic_name ="";
				$actionGA = $pageType = 'tag' ? 'tag' : strtolower($title);
				$labelGA = 'read more|' . strtolower($title);
				$dynamicActionGA = $actionGA;
				$baseUrl=base_url();
				$eventGA = "event insurance guide read more";
				$categoryGA = 'new customers';
				$readMoreUrl="";
				$readMoreUrl=$baseUrl.'insurance-guide/' .$topic_url_title . '/' . $url_title;
				
				$newhtmldata=$newhtmldata."<li><div class='img'>
						<div class='reportBox'><a href='$readMoreUrl' class='rem-pos-an'>
						<img src='$article_image' alt='Topic Icon'></a>
						<div class='detail'>$topic_name<ul class='dateInfo'>
						<li>$posted_date</li>
						<li><a href='javascript:;' class='views'>$viewed_count</a></li></ul>
						<h3 id='ptext3'>$article_title</h3><p id='ptext4'>$short_description</p>
						<a href='$readMoreUrl' class='links '  onclick='dataLayer.push({\'event\': \'' . $eventGA . '\', \'category\': \'' . $categoryGA . '\', \'action\': \'' . $actionGA. '\', \'label\': \'' .$labelGA. '\'});\'>Read more</a>
						</div></div></li>";
				
				
					$i++;
				}
			}

			/*Get next page data count */
			$nextOffset		=	($pageNo + 1) * ARTICLES_LIMIT;
			$nextData 		=	$this->insurance_guide_model->get_articles_by_topic($topicSlug, $nextOffset, $sort_by, $searchArticle,$article_limit);
			$nextDataCount	=	count($nextData);

			if(count($getdata))
				$message = "Records loaded successfully.";
			else
				$message = NO_RECORDS_FOUND;
			
			$success = TRUE;
		} else {
			$message = "Required field was missing!";
		}

		$response = array('success' => $success, 'message' => $message, 'data'=>$getdata, 'nextDataCount' => $nextDataCount,'newhtmldata'=>$newhtmldata);
		echo json_encode($response); die;	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	//Load more Tag articles data
	public function load_more_tag_articles() {

		$success 		= 	FALSE;
		$getdata 		= 	array();
		$message 		= 	"Some Technical Error has Occurred. Please Try Again!";
		$data 			= 	json_decode(file_get_contents("php://input"));
		$nextDataCount	=	0;
		if (isset($data->page) AND isset($data->sortType) AND isset($data->topicSlug) AND isset($data->searchArticle)) {

			// Load Model
			$this->load->model('insurance_guide_model');

			$pageNo 		= 	(int)secure_input_data($data->page);
			$sortType 		= 	secure_input_data($data->sortType);
			$tagSlug 		= 	secure_input_data($data->topicSlug);
			$searchArticle 	= 	secure_input_data($data->searchArticle);
			$offset			=	$pageNo * ARTICLES_LIMIT;

			$sort_by	=	'kcd.entry_id';
			if($sortType == 'viewed'){
				$sort_by = 'kcd.field_id_162';
			}

			$articlesInfo 	= 	$this->insurance_guide_model->get_articles_by_tag($tagSlug, $offset, $sort_by, $searchArticle);
			if(count($articlesInfo)){
				$i = 0;
				foreach ($articlesInfo as $article) {
					$getdata[$i]['title']			=	$article->title;
					$getdata[$i]['topic_url_title']	=	$article->topic_url_title;
					$getdata[$i]['article_title']	=	$article->article_title;
					$getdata[$i]['url_title']		=	$article->url_title;
					$getdata[$i]['short_description']	=	read_more_description($article->short_description);
					$getdata[$i]['article_image']	=	str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $article->article_image);
					$getdata[$i]['viewed_count']	=	number_format($article->viewed_count);
					$getdata[$i]['posted_date']		=	date(ARTICLE_DATE_FORMAT, $article->posted_date);
					$i++;
				}
			}

			/*Get next page data count */
			$nextOffset		=	($pageNo + 1) * ARTICLES_LIMIT;
			$nextData 		=	$this->insurance_guide_model->get_articles_by_tag($tagSlug, $nextOffset, $sort_by, $searchArticle);
			$nextDataCount	=	count($nextData);

			if(count($getdata))
				$message = "Records loaded successfully.";
			else
				$message = NO_RECORDS_FOUND;
			
			$success = TRUE;
		} else {
			$message = "Required field was missing!";
		}

		$response = array('success' => $success, 'message' => $message, 'data'=>$getdata, 'nextDataCount' => $nextDataCount);
		echo json_encode($response); die;	
	}

	// Load more glossary data
	public function load_more_glossary() {

		$success 		= 	FALSE;
		$getdata 		= 	array();
		$message 		= 	"Some Technical Error has Occurred. Please Try Again!";
		$data 			= 	json_decode(file_get_contents("php://input"));
		$nextDataCount	=	0;
		if (isset($data->page) AND isset($data->keyword)) {

			// Load Model
			$this->load->model('insurance_guide_model');

			$pageNo 	= 	(int)secure_input_data($data->page);
			$offset		=	$pageNo * GLOSSARY_LIMIT;
			$keyword 	= 	secure_input_data($data->keyword);

			$glossaryInfo 	= 	$this->insurance_guide_model->get_glossaries($keyword, $offset);
			$getdata		=	json_decode(json_encode($glossaryInfo), True);

			/*Get next page data count */
			$nextOffset		=	($pageNo + 1) * GLOSSARY_LIMIT;
			$nextData 		=	$this->insurance_guide_model->get_glossaries($keyword, $nextOffset);
			$nextDataCount	=	count($nextData);
			
			if(count($getdata))
				$message = "Records loaded successfully.";
			else
				$message = NO_RECORDS_FOUND;
			$success = TRUE;
		} else {
			$message = "Required field was missing!";
		}

		$response = array('success' => $success, 'message' => $message, 'data'=>$getdata, 'nextDataCount' => $nextDataCount);
		echo json_encode($response); die;	
	}


	// Load more FAQs data
	public function load_more_faqs() {

		$success 		= 	FALSE;
		$getdata 		= 	array();
		$message 		= 	"Some Technical Error has Occurred. Please Try Again!";
		$data 			= 	json_decode(file_get_contents("php://input"));
		$nextDataCount	=	0;
		if (isset($data->page) AND isset($data->keyword)) {

			// Load Model
			$this->load->model('insurance_guide_model');

			$pageNo 	= 	(int)secure_input_data($data->page);
			$offset		=	$pageNo * FAQS_LIMIT;
			$keyword 	= 	secure_input_data($data->keyword);

			
			//$faqInfo 	= 	$this->insurance_guide_model->get_faqs($keyword, $offset);
			$faqType    =   (int)secure_input_data($data->faqType);
			if($faqType > 1){
			$faqInfo 	= 	$this->insurance_guide_model->get_faqs($keyword, $offset);
			}
			else {
				$faqInfo 	= 	$this->insurance_guide_model->get_faqs_general($keyword, $offset);
			}
			
			$finalInfo 	=	array();
			if(count($faqInfo)){
				$i = 0;
				foreach ($faqInfo as $faq) {
					$finalInfo[$i]['entry_id'] = $faq->entry_id;
					$finalInfo[$i]['title'] = $faq->title;
					$finalInfo[$i]['description'] = $faq->description;
					$finalInfo[$i]['schemadescription'] = strip_tags($faq->description);
					$finalInfo[$i]['org_name'] = ORG_NAME;
					$finalInfo[$i]['org_img_url'] = ORG_IMG_URL;
					$finalInfo[$i]['org_content_url'] = ORG_CONTENT_URL;
					$finalInfo[$i]['org_img_alt'] = ORG_IMG_ALT;
					$i++;
				}
			}
			$getdata		=	json_decode(json_encode($finalInfo), True);

			/*Get next page data count */
			$nextOffset		=	($pageNo + 1) * FAQS_LIMIT;
			//$nextData 		=	$this->insurance_guide_model->get_faqs($keyword, $nextOffset);
			if($faqType > 1){
			   $nextData 		=	$this->insurance_guide_model->get_faqs($keyword, $nextOffset);
			}
			else {
				$nextData 		=	$this->insurance_guide_model->get_faqs_general($keyword, $nextOffset);
			}
			
			$nextDataCount	=	count($nextData);
			
			if(count($getdata))
				$message = "Records loaded successfully.";
			else
				$message = NO_RECORDS_FOUND;
			$success = TRUE;
		} else {
			$message = "Required field was missing!";
		}

		$response = array('success' => $success, 'message' => $message, 'data'=>$getdata, 'nextDataCount' => $nextDataCount);
		echo json_encode($response); die;	
	}

	// Load more Investment Fund FAQs data
	public function load_more_investment_fund_faqs() {

		$success 		= 	FALSE;
		$getdata 		= 	array();
		$message 		= 	"Some Technical Error has Occurred. Please Try Again!";
		$data 			= 	json_decode(file_get_contents("php://input"));
		$nextDataCount	=	0;
		if (isset($data->page) AND isset($data->keyword)) {

			// Load Model
			$this->load->model('fund_performance_model');

			$pageNo 	= 	(int)secure_input_data($data->page);
			$offset		=	$pageNo * FAQS_LIMIT;
			$keyword 	= 	secure_input_data($data->keyword);

			$faqType    =  (int)secure_input_data($data->faqType);
			
			//$faqInfo 	= 	$this->fund_performance_model->get_faqs($keyword, $offset);
			if($faqType > 1){
			$faqInfo 	= 	$this->fund_performance_model->get_faqs($keyword, $offset);
			}
			else {
			 $faqInfo 	= 	$this->fund_performance_model->get_faqs_general($keyword, $offset);
			}
			
			$finalInfo 	=	array();
			if(count($faqInfo)){
				$i = 0;
				foreach ($faqInfo as $faq) {
					$finalInfo[$i]['entry_id'] = $faq->entry_id;
					$finalInfo[$i]['title'] = $faq->title;
					$finalInfo[$i]['description'] = $faq->description;
					$finalInfo[$i]['schemadescription'] = strip_tags($faq->description);
					$finalInfo[$i]['org_name'] = ORG_NAME;
					$finalInfo[$i]['org_img_url'] = ORG_IMG_URL;
					$finalInfo[$i]['org_content_url'] = ORG_CONTENT_URL;
					$finalInfo[$i]['org_img_alt'] = ORG_IMG_ALT;
					$i++;
				}
			}

			$getdata		=	json_decode(json_encode($finalInfo), True);

			/*Get next page data count */
			$nextOffset		=	($pageNo + 1) * FAQS_LIMIT;
			//$nextData 		=	$this->fund_performance_model->get_faqs($keyword, $nextOffset);
			if($faqType > 1){
			       $nextData 		=	$this->fund_performance_model->get_faqs($keyword, $nextOffset);
			}
			else {
				$nextData 		=	$this->fund_performance_model->get_faqs_general($keyword, $nextOffset);
			}
			
			$nextDataCount	=	count($nextData);
			
			if(count($getdata))
				$message = "Records loaded successfully.";
			else
				$message = NO_RECORDS_FOUND;
			$success = TRUE;
		} else {
			$message = "Required field was missing!";
		}

		$response = array('success' => $success, 'message' => $message, 'data'=>$getdata, 'nextDataCount' => $nextDataCount);
		echo json_encode($response); die;	
	}

	public function add_users_glossary_word(){
		$success 	= 	FALSE;
		$message 	= 	"Some Technical Error has Occurred. Please Try Again!";
		$form_error	=	array();
		$data 		= 	$this->input->post();
		if (isset($data['name']) AND isset($data['email']) AND isset($data['keyword'])) {

			// Load Model
			$this->load->model('site_model');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[50]|callback_name_format_check|max_length[30]');
			$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|max_length[256]');
			$this->form_validation->set_rules('keyword', 'Word', 'trim|required|max_length[50]|callback_name_format_check|max_length[100]');
		
			if($this->form_validation->run() == FALSE) {
				//Field validation failed.
				$form_error	=	$this->form_validation->error_array();
			} else {

				$name 	=	secure_input_data($this->security->xss_clean($data['name']));
				$email 	=	secure_input_data($this->security->xss_clean($data['email']));
				$keyword=	secure_input_data($this->security->xss_clean($data['keyword']));

				$insertdata = array(
								"title" => $name,
								"url_title" => strtolower(str_replace(" ", "-", $name)).'-'. time(),
								"field_id_167" => $name,
								"field_id_168" => $email,
								"field_id_169" => $keyword,
								"channel_id" => INSURANCE_GUIDE_USERS_GLOSSARY_CHANNEL_ID);

				$insert_id = $this->site_model->save_channel_enty($insertdata);

				if($insert_id){
					$message = "Thank you for your suggestion. We will update you once the word is added in the Glossary.";
					$success = TRUE;
				} else{
					$message = "Unable to save. Please try sometime.";
				}
			}

		} else {
			$message = "Required field was missing!";
		}

		$response = array('success' => $success, 'message' => $message, 'form_error'=>$form_error);
		echo json_encode($response); die;
	}

	public function name_format_check($str, $param) {
		if (!preg_match("/^[a-zA-Z'0-9 _-]*$/", $str)) {
			$this->form_validation->set_message('name_format_check', 'The %s field may only contain alpha-numeric characters and white space.');
			return false;
		}
		return true;
	}
	
	// Load latest NAV data
	public function load_latest_nav_data() {

		$success 		= 	FALSE;
		$getdata 		= 	array();
		$message 		= 	"Some Technical Error has Occurred. Please Try Again!";
		$data 			= 	json_decode(file_get_contents("php://input"));
		$slug=$endDate=$startDate='';
		$schemeRecords=array();
		$nextDataCount	=	0;
		if (isset($data->tab)) {		

			// Load Model
			$this->load->model('fund_performance_model');

			/* Latest NAV Scheme Section */
			$srecentdata	=	$this->fund_performance_model->get_nav_recent_date('scheme');
			$fundRecords	=	array();
			$sLastDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT, time());
			$sNextDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT, time());
			if(count((array)$srecentdata)!=0){
				$recent_date 	= 	$srecentdata->fp_date;
				$start 			= 	strtotime(date('Y-m-d 00:00:00', $recent_date));
				$end 			= 	strtotime(date('Y-m-d 23:59:59', $recent_date));
				$schemeRecords	=	$this->fund_performance_model->get_latest_nav_reports('scheme', $start, $end);
				$sLastDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT,  $recent_date);
				$sNextDate 		= 	!empty($srecentdata->next_fp_date)? date(FUND_PERFORMANCE_DATE_FORMAT, $srecentdata->next_fp_date) : '';
			}
			$this->data['schemeRecords']= 	$schemeRecords;
			$this->data['sLastDate']	= 	$sLastDate;
			$this->data['sNextDate']	= 	$sNextDate;

			$this->data['pdfReportURL']	=	base_url(FP_MODULE_LINK.'/nav-performance/pdf-report/'.$slug.'/'.$startDate.'/'.$endDate);


			/* Latest NAV Fund Section */
			$frecentdata	=	$this->fund_performance_model->get_nav_recent_date('fund');
			$fundRecords	=	array();
			$fLastDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT, time());
			$fNextDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT, time());
			if(count((array)$frecentdata)){
				$recent_date 	= 	$frecentdata->fp_date;
				$start 			= 	strtotime(date('Y-m-d 00:00:00', $recent_date));
				$end 			= 	strtotime(date('Y-m-d 23:59:59', $recent_date));
				$fundRecords	=	$this->fund_performance_model->get_latest_nav_reports('fund', $start, $end);
				$fLastDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT,  $recent_date);
				$fNextDate 		= 	!empty($frecentdata->next_fp_date)? date(FUND_PERFORMANCE_DATE_FORMAT, $frecentdata->next_fp_date) : '';
			}
			$this->data['fundRecords']	= 	$fundRecords;
			$this->data['fLastDate']	= 	$fLastDate;
			$this->data['fNextDate']	= 	$fNextDate;
			
			//$cur_date=date('Y-m-d'); 
			//$sNextDate1 = date('F d,Y', strtotime($cur_date . ' +1 day'));
			
			$getdata = array(	'schemeRecords' => $schemeRecords,
										'sLastDate' => $sLastDate,
										'sNextDate' => $sNextDate,
										'fundRecords' => $fundRecords,
										'fLastDate' => $fLastDate,
										'fNextDate' => $fNextDate);
			if(count($getdata))
				$message = "Records loaded successfully.";
			else
				$message = NO_RECORDS_FOUND;
			$success = TRUE;
		} else {
			$message = "Required field was missing!";
		}

		$response = array('success' => $success, 'message' => $message, 'data'=>$getdata);
		echo json_encode($response); die;	
	}
	
	public function load_scheme_lists(){
		$success 		= 	FALSE;
		$getdata 		= 	array();
		$message 		= 	"Some Technical Error has Occurred. Please Try Again!";
		$data 			= 	json_decode(file_get_contents("php://input"));
		$nextDataCount	=	0;
		if (isset($data->tab)) {

			// Load Model
			$this->load->model('fund_performance_model');

			/* Latest NAV Scheme Section */
			$schemes = $this->fund_performance_model->get_all_schemes();
			$scheme_data = array();
			$this->data['schemes'] = array(""=>"Select Scheme or Fund");
			$i = 0;
			foreach ($schemes as $scheme) {
				$scheme_data[$i]['url_title'] = $scheme->url_title;
				$scheme_data[$i]['title'] =   ucwords($scheme->title);
				$scheme_data[$i]['scheme_id'] =   ucwords($scheme->scheme_id);
				$i++;
			}
			if(count($scheme_data))
				$message = "Records loaded successfully.";
			else
				$message = NO_RECORDS_FOUND;
			$success = TRUE;
		} else {
			$message = "Required field was missing!";
		}

		$response = array('success' => $success, 'message' => $message, 'data'=>$scheme_data);
		echo json_encode($response); die;
	}
	
	public function search_life_advisor() {
		
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        $this->load->library('form_validation');
        $this->load->helper('security'); // to xss_clean 
		$this->form_validation->set_rules('searchLifeAdvisor', 'Agent ID', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            foreach ($this->form_validation->error_array() as $field_name => $error_message) {
                $data['inputerror'][] = $field_name;
                $data['error_string'][] = $error_message;
            }
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        } else {
           $searchData = secure_input_data($this->input->post('searchLifeAdvisor'));
           $params = array(
                'Request' => array(
                    'AgentNumber' => $searchData
                )
            );
            $data_string = json_encode($params);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_URL, $this->config->item("lifeadvisor_search_api"));
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
			
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
            );
            $response = curl_exec($ch);
            curl_close($ch);
            if (!empty($response)) {
                $ResponseData = json_decode($response, true);
                if ((strtolower($ResponseData['Response']['IsSuccess']) == "y") && (!empty($ResponseData['Response']['AgentNumber']))) {
                    $responseHtml = "";
                    $responseHtml = '<div class="searchAdvisorsResult" >';
                    $responseHtml .="<h2>Result for " . $ResponseData['Response']['AgentNumber'] . "</h2>";
                    $responseHtml .='<div class="advisorsWrap">';

                    if (!empty($ResponseData['Response']['PhotoBytes']) && ($ResponseData['Response']['PhotoBytes']!="null")) {                     
                       
                       $responseHtml .='<img src="data:image/jpeg;base64,'. (($ResponseData['Response']['PhotoBytes'])) . '" class="advisorsImg" />';                        
                    } else {
                       $responseHtml .='<img src="' . base_url() . 'assets/images/lifeadvisor_thumb.png" class="advisorsImg" />';
                    }
                    $responseHtml .='<ul class="advisorsList">';
                    if (!empty($ResponseData['Response']['AgentName'])) {
                        $responseHtml .='<li>Name: <span>' . $ResponseData['Response']['AgentName'] . '</span></li>';
                    }
                    if (!empty($ResponseData['Response']['AgentNumber'])) {
                        $responseHtml .='<li>Agent ID: <span>' . $ResponseData['Response']['AgentNumber'] . '</span></li>';
                    }
                    if (!empty($ResponseData['Response']['Gender'])) {
                        $responseHtml .='<li>Gender: <span>' . $ResponseData['Response']['Gender'] . '</span></li>';
                    }
                    if (!empty($ResponseData['Response']['AgentStatus'])) {
                        $responseHtml .='<li>Agent status: <span>' . $ResponseData['Response']['AgentStatus'] . '</span></li>';
                    }
                    if (!empty($ResponseData['Response']['Type'])) {
                        $responseHtml .='<li>Type: <span>' . $ResponseData['Response']['Type'] . '</span></li>';
                    }
                    if (!empty($ResponseData['Response']['AppointmentDate'])) {
                        $responseHtml .='<li>Date of Appointment: <span>' . $ResponseData['Response']['AppointmentDate'] . '</span></li>';
                    }
                    if (!empty($ResponseData['Response']['ValidTill'])) {
                        $responseHtml .='<li>Valid till: <span>' . $ResponseData['Response']['ValidTill'] . '</span></li>';
                    }
                    $responseHtml .='</ul></div></div>';
                    $data['status_message'] = $responseHtml;
                    $data['status'] = TRUE;
                } else {
                    $data['status_message'] = '<div class="resultNotfound"><h2>Record for '.$searchData.' not found, Please enter correct Agent ID.</h2></div>';
                    $data['status'] = TRUE;
                }
            } else {
                $data['status_message'] = '<div class="resultNotfound"><h2>Something went wrong. Please try again later!</h2></div>';
                $data['status'] = FALSE;
            }
        }
        echo json_encode($data);
        exit();
    }

	  // Load more executive advisor data
    public function load_more_executive() {

        $success = FALSE;
        $getdata = array();
        $message = "Some Technical Error has Occurred. Please Try Again!";
        $data = json_decode(file_get_contents("php://input"));
        $nextDataCount = 0;
        if (isset($data->page) AND isset($data->keyword)) {
            $this->load->model('LifeAdvisor_model');
            $pageNo = (int) secure_input_data($data->page);
            $offset = $pageNo * EXECUTIVEADVISOR_LIMIT;
            $keyword = secure_input_data($data->keyword);
           
            $executiveInfo = $this->LifeAdvisor_model->get_OurExcutiveAdvisors($keyword, $offset);
            $getdata = json_decode(json_encode($executiveInfo), True);

            /* Get next page data count */
            $nextOffset = ($pageNo + 1) * EXECUTIVEADVISOR_LIMIT;
            $nextData = $this->LifeAdvisor_model->get_OurExcutiveAdvisors($keyword, $nextOffset);
            $nextDataCount = count($nextData);

            if (count($getdata))
                $message = "Records loaded successfully.";
            else
                $message = NO_RECORDS_FOUND;
            $success = TRUE;
        } else {
            $message = "Required field was missing!";
        }

        $response = array('success' => $success, 'message' => $message, 'data' => $getdata, 'nextDataCount' => $nextDataCount);
        echo json_encode($response);
        die;
    }
	
	public function load_more_articles_for_happy_you() {

		$success 		= 	FALSE;
		$getdata 		= 	array();
		$message 		= 	"Some Technical Error has Occurred. Please Try Again!";
		$data 			= 	json_decode(file_get_contents("php://input"));
		$nextDataCount	=	0;
		$newhtmldata='';
		if (isset($data->page) AND isset($data->sortType) AND isset($data->topicSlug) AND isset($data->searchArticle)) {
		
			// Load Model
			$this->load->model('insurance_guide_model');
		
			$pageNo 		= 	(int)secure_input_data($data->page);
			$sortType 		= 	secure_input_data($data->sortType);
			$topicSlug 		= 	secure_input_data($data->topicSlug);
			$searchArticle 	= 	secure_input_data($data->searchArticle);
			$url 	= 	secure_input_data($data->url);
			$article_limit=ARTICLES_LIMIT;
			$offset			=	$pageNo * $article_limit;
		
			$sort_by	=	'kcd.entry_id';
			if($sortType == 'viewed'){
				$sort_by = 'kcd.field_id_432';
			}
			
				$articlesInfo 	= 	$this->insurance_guide_model->get_articles_by_topic_for_happy($topicSlug, $offset, $sort_by, $searchArticle,$article_limit);
			$newhtmldata="";$entry_id		=	0;
			if($articlesInfo){
				$i = 0;
				foreach ($articlesInfo as $article) {
					/*$getdata[$i]['title']			=	$article->title;
					$getdata[$i]['topic_url_title']	=	$article->topic_url_title;
					$getdata[$i]['article_title']	=	$article->article_title;
					$getdata[$i]['url_title']		=	$article->url_title;
					$getdata[$i]['short_description']	=	read_more_description($article->short_description);
					$getdata[$i]['article_image']	=	str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $article->article_image); 
					$getdata[$i]['viewed_count']	=	number_format($article->viewed_count);
					$getdata[$i]['posted_date']		=	date(ARTICLE_DATE_FORMAT, $article->posted_date);*/
					
					$getdata[$i]['title']			=$title=	$article->title;
					$getdata[$i]['topic_url_title']	=$topic_url_title=	$article->topic_url_title;
					$getdata[$i]['article_title']	=$article_title=	$article->article_title;
					$getdata[$i]['url_title']		=$url_title=	$article->url_title;
					$getdata[$i]['short_description']	= $short_description = $article->short_description;
					$getdata[$i]['article_image']	=$article_image=	str_replace('{filedir_11}', 'assets/images/uploads/insurance-guides/topics/images/', $article->article_image); 
					$getdata[$i]['viewed_count']	=$viewed_count=	number_format($article->viewed_counts);
					$getdata[$i]['posted_date']		=$posted_date=	date(ARTICLE_DATE_FORMAT, $article->posted_date);
					
					 
				
					
					$this->data['articlesInfo'] = $this->insurance_guide_model->get_article_details($url_title);
					if($this->data['articlesInfo']){
						$articleInfo 	=	$this->data['articlesInfo']; 
						$entry_id		=	$articleInfo->entry_id;
					}
					$counttag=0;
					$articleTagsInfo = $this->insurance_guide_model->get_article_tags($entry_id);
					$counttag=sizeof($articleTagsInfo);
					$tag_info="";					
					if($articleTagsInfo)
					{  
							$k=1;
							foreach ($articleTagsInfo as $tag) {								
							$tag_url=site_url('insurance-guide/tag/'.$tag->tag_url_title);
							$tag_info=$tag_info."<a href='$tag_url' class='some-text'>#$tag->tag_title</a>";
							if($k>2){break;}
							$k++;	 
							}
					}
					/*if(strlen($tag_info)>30){$tag_info=substr($tag_info,0,28)."...";}
					else{$tag_info=substr($tag_info,0,38);}*/
				$topic_name ="";// $pageType = 'tag' ? '<h4>' . $title. '</h4>' : '';
				$actionGA = $pageType = 'tag' ? 'tag' : strtolower($title);
				$labelGA = 'read more|' . strtolower($title);
				$dynamicActionGA = $actionGA;
				$baseUrl=base_url();
				$eventGA = "event insurance guide read more";
				$categoryGA = 'new customers';
				$readMoreUrl="";
				$readMoreUrl=$baseUrl.'happy-you'.'/' . $url_title;
				
				$newhtmldata=$newhtmldata."<li><div class='img'>
						<div class='reportBox'><a href='$readMoreUrl' class='rem-pos-an'>
						<img src='$article_image' alt='Topic Icon'></a>
						<div class='detail'>$topic_name<ul class='dateInfo'>
						<li>$posted_date</li>
						<li><a href='javascript:;' class='views'>$viewed_count</a></li></ul>
						<h3 id='ptext3'>$article_title</h3><p id='ptext4'>$short_description</p>
						<a href='$readMoreUrl' class='links '  onclick='dataLayer.push({\'event\': \'' . $eventGA . '\', \'category\': \'' . $categoryGA . '\', \'action\': \'' . $actionGA. '\', \'label\': \'' .$labelGA. '\'});\'>Read more</a>
						</div></div></li>";
				
				
					$i++;
				}
			}
		
			/*Get next page data count */
			$nextOffset		=	($pageNo + 1) * ARTICLES_LIMIT;
			$nextData 		=	$this->insurance_guide_model->get_articles_by_topic($topicSlug, $nextOffset, $sort_by, $searchArticle,$article_limit);
			$nextDataCount	=	count($nextData);
		
			if(count($getdata))
				$message = "Records loaded successfully.";
			else
				$message = NO_RECORDS_FOUND;
			
			$success = TRUE;
		} else {
			$message = "Required field was missing!";
		}
		
		$response = array('success' => $success, 'message' => $message, 'data'=>$getdata, 'nextDataCount' => $nextDataCount,'newhtmldata'=>$newhtmldata);
		echo json_encode($response); die;	
		}
	
	
}