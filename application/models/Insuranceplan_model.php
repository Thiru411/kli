<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Insuranceplan_model extends CI_Model  {
	
	function __construct() {
        parent::__construct();
        $ci =& get_instance();
		$ci->load->helper('common');
    }
	
	
	//get Insurance Main Info
	public function get_plan_main_info($urlSlug) {
		$urlSlug = secure_input_data($urlSlug);
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_14 as plan_type, field_id_15 as plan_description, field_id_18 as plan_eligibility_title, field_id_21 as plan_calculate_premium_title, field_id_22 as plan_calculate_premium_url, field_id_23 as plan_downloads_title, kotak_relationships.child_id as plan_type_id, field_id_264 as plan_buy_online_title, field_id_265 as plan_buy_online_url, field_id_40 as plan_image, field_id_312 as plan_disclaimer,field_id_328 as plan_url_schema')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->join('kotak_relationships', 'kotak_channel_data.entry_id = kotak_relationships.parent_id')
					->where(array('kotak_channel_titles.channel_id'		=>		INSURANCE_PLANS_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'		=>		SITE_ID, 
								  'kotak_channel_titles.url_title'		=>		$urlSlug, 
								  'kotak_channel_titles.status'			=>		'open',
								  'kotak_relationships.field_id'		=>		INSURANCE_PLANS_TYPE_RELATIONSHIP))
					->get()->row();
	}
	
	//get Insurance Type Name and Slug
	public function get_plan_type_info_from_ID($plan_type_id) {
		$plan_type_id = secure_input_data( $plan_type_id );
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title as plan_type_name, url_title as plan_type_slug, field_id_252 as plan_main_type')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(array('kotak_channel_titles.channel_id'		=>		INSURANCE_PLANS_TYPE_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'		=>		SITE_ID, 
								  'kotak_channel_titles.entry_id'		=>		$plan_type_id, 
								  'kotak_channel_titles.status'			=>		'open'))
					->get()->row();
	}
	
	
	//get How it Works Grid Data
	public function get_plan_how_it_works_info($entryId) {
		$entryId = secure_input_data( $entryId );
		return  $this->db->select('col_id_15 as image, col_id_16 as description')
					->from('kotak_channel_grid_field_16')
					->where(array('entry_id'	=>	$entryId))
					->order_by("row_order", "asc")
					->get()->result();
	}
	
	
	//get Features and Benefits Grid Data
	public function get_plan_key_features_and_benefits_info($entryId) {
		$entryId = secure_input_data( $entryId );
		return  $this->db->select('col_id_17 as image, col_id_18 as title, col_id_19 as description')
					->from('kotak_channel_grid_field_17')
					->where(array('entry_id'	=>	$entryId))
					->order_by("row_order", "asc")
					->get()->result();
	}
	
	
	//get Features and Benefits Grid Data
	public function get_plan_additional_benefits_info($entryId) {
		$entryId = secure_input_data( $entryId );
		return  $this->db->select('col_id_41 as benefit_image, col_id_42 as benefit_title, col_id_43 as benefit_description')
					->from('kotak_channel_grid_field_351')
					->where(array('entry_id'	=>	$entryId))
					->order_by("row_order", "asc")
					->get()->result();
	}
	
	
	
	//get Eligibility Grid Data
	public function get_plan_eligibility_info($entryId) {
		$entryId = secure_input_data( $entryId );
		return  $this->db->select('col_id_20 as image, col_id_21 as description')
					->from('kotak_channel_grid_field_19')
					->where(array('entry_id'	=>	$entryId))
					->order_by("row_order", "asc")
					->get()->result();
	}
	
	
	//get Protection Riders Grid Data
	public function get_plan_additional_protection_riders_info($entryId) {
		$entryId = secure_input_data( $entryId );
		return  $this->db->select('col_id_22 as image, col_id_23 as title, col_id_24 as description, col_id_40 as pdf_file')
					->from('kotak_channel_grid_field_20')
					->where(array('entry_id'	=>	$entryId))
					->order_by("row_order", "asc")
					->get()->result();
	}
	
	
	//get Downloads Grid Data
	public function get_plan_downloads_info($entryId) {
		$entryId = secure_input_data( $entryId );
		return  $this->db->select('col_id_25 as file, col_id_26 as title, col_id_27 as file_type')
					->from('kotak_channel_grid_field_24')
					->where(array('entry_id'	=>	$entryId))
					->order_by("row_order", "asc")
					->get()->result();
	}
	
	
	//get Insurance Type Info
	////, field_id_337 as plans_schema
	public function get_plan_type_info($urlSlug) {
		$urlSlug = secure_input_data( $urlSlug );
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_41 as insurance_type_description, field_id_42 as insurance_type_image, field_id_43 as insurance_type_plan_title, field_id_44 as insurance_type_plan_description, field_id_46 as plan_type_our_plans_title, field_id_252 as plan_main_type, field_id_266 as plan_type_video')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(array('kotak_channel_titles.channel_id'		=>		INSURANCE_PLANS_TYPE_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'		=>		SITE_ID, 
								  'kotak_channel_titles.url_title'		=>		$urlSlug, 
								  'kotak_channel_titles.status'			=>		'open'))
					->get()->row();
	}
	
	
	//get Plan Info
	public function get_insurance_type_plan_info($entryId) {
		$entryId = secure_input_data( $entryId );
		return  $this->db->select('col_id_28 as image, col_id_29 as title')
					->from('kotak_channel_grid_field_45')
					->where(array('entry_id'	=>	$entryId))
					->order_by("row_order", "asc")
					->get()->result();
	}
	
	
	//get Plans of a particular type for listing page 
	public function get_plans($planTypeCode) {
		$planTypeCode = secure_input_data( $planTypeCode );
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_39 as plan_description, field_id_40 as plan_image, field_id_265 as buy_online_url')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->join('kotak_relationships', 'kotak_channel_data.entry_id = kotak_relationships.parent_id')
					->where(array('kotak_channel_titles.channel_id'			=>		INSURANCE_PLANS_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'			=>		SITE_ID, 
								  'kotak_relationships.child_id'			=>		$planTypeCode,
								  'kotak_channel_titles.status'				=>		'open',
								  'kotak_relationships.field_id'			=>		INSURANCE_PLANS_TYPE_RELATIONSHIP))
					->get()->result();
	}
	
	
	//get Plans
	public function get_main_plans($planMainType) {
		$planMainType = secure_input_data( $planMainType );
		
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_41 as insurance_type_description, field_id_47 as plan_type_small_image, field_id_48 as plan_type_big_image, field_id_252 as plan_main_type, field_id_340 as btn_url, field_id_341 as btn_title,field_id_349 sequency_by')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(array('kotak_channel_titles.channel_id'		=>		INSURANCE_PLANS_TYPE_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'		=>		SITE_ID,
								  'kotak_channel_titles.status'			=>		'open',
								  'kotak_channel_data.field_id_252'		=>		$planMainType))
								 ->order_by('field_id_349',"asc")
					->get()->result();
		/*if($planMainType=="Online Plans"){
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_41 as insurance_type_description, field_id_47 as plan_type_small_image, field_id_48 as plan_type_big_image, field_id_252 as plan_main_type, field_id_340 as btn_url, field_id_341 as btn_title')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(array('kotak_channel_titles.channel_id'		=>		INSURANCE_PLANS_TYPE_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'		=>		SITE_ID,
								  'kotak_channel_titles.status'			=>		'open',
								  'kotak_channel_data.field_id_252'		=>		$planMainType))
								 ->order_by('field_id_349',"asc")
					->get()->result();
		}else if($planMainType=="Insurance Plans"){
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_41 as insurance_type_description, field_id_47 as plan_type_small_image, field_id_48 as plan_type_big_image, field_id_252 as plan_main_type, field_id_340 as btn_url, field_id_341 as btn_title,field_id_349 sequency_by')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(array('kotak_channel_titles.channel_id'		=>		INSURANCE_PLANS_TYPE_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'		=>		SITE_ID,
								  'kotak_channel_titles.status'			=>		'open',
								  'kotak_channel_data.field_id_252'		=>		$planMainType))
								 ->order_by('field_id_349',"asc")
					->get()->result();
		}
		else{
			return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_41 as insurance_type_description, field_id_47 as plan_type_small_image, field_id_48 as plan_type_big_image, field_id_252 as plan_main_type, field_id_340 as btn_url, field_id_341 as btn_title')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(array('kotak_channel_titles.channel_id'		=>		INSURANCE_PLANS_TYPE_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'		=>		SITE_ID,
								  'kotak_channel_titles.status'			=>		'open',
								  'kotak_channel_data.field_id_252'		=>		$planMainType))
					->get()->result();
		}*/
		
	}
	//only health plans
	/*public function get_main_healthplans($planMainType) {
		$planMainType = secure_input_data( $planMainType );
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_41 as insurance_type_description, field_id_47 as plan_type_small_image, field_id_48 as plan_type_big_image, field_id_252 as plan_main_type')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(array('kotak_channel_titles.channel_id'		=>		INSURANCE_PLANS_TYPE_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'		=>		SITE_ID,
								  'kotak_channel_titles.status'			=>		'open',
								  'url_title'		=>      'health-plans',
								  'kotak_channel_data.field_id_252'		=>		$planMainType))
					->get()->result();
	}
	*/
	
	//get Similar Plans
	public function get_similar_plans($planTypeCode, $currentId,$plantype) {
		$planTypeCode = secure_input_data( $planTypeCode );
		$currentId = secure_input_data( $currentId );
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_39 as plan_description, field_id_40 as plan_image')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->join('kotak_relationships', 'kotak_channel_data.entry_id = kotak_relationships.parent_id')
					->where_not_in('kotak_channel_titles.entry_id', $currentId)
					->where(array('kotak_channel_titles.channel_id'			=>		INSURANCE_PLANS_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'			=>		SITE_ID, 
								  'kotak_relationships.child_id'			=>		$planTypeCode, 
								  'kotak_channel_titles.status'				=>		'open',
								  'kotak_channel_data.field_id_14'=>$plantype,
								  'kotak_relationships.field_id'			=>		INSURANCE_PLANS_TYPE_RELATIONSHIP))
					->get()->result();
	}
public function get_similar_planssuportinpages($planTypeCode, $currentId,$plantype){
	$planTypeCode = secure_input_data( $planTypeCode );
		$currentId = secure_input_data( $currentId );
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_39 as plan_description, field_id_40 as plan_image')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->join('kotak_relationships', 'kotak_channel_data.entry_id = kotak_relationships.parent_id')
					->where_not_in('kotak_channel_titles.entry_id', $currentId)
					->where(array('kotak_channel_titles.channel_id'			=>		INSURANCE_PLANS_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'			=>		SITE_ID, 
								 // 'kotak_relationships.child_id'			=>		$planTypeCode, 
								  'kotak_channel_titles.status'				=>		'open',
								  'kotak_channel_data.field_id_14'=>$plantype,
								  'kotak_relationships.field_id'			=>		INSURANCE_PLANS_TYPE_RELATIONSHIP))
					->get()->result();
}
	//get Riders 
	public function get_all_riders($riderType) {
		$riderType = secure_input_data( $riderType );
		return  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_232 as rider_icon_image, field_id_233 as rider_type, field_id_234 as rider_description, field_id_235 as rider_pdf')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(array('kotak_channel_titles.channel_id'		=>		RIDERS_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'		=>		SITE_ID,
								  'field_id_233'						=>		$riderType,
								  'kotak_channel_titles.status'			=>		'open'))
					->get()->result();
	}
	
}
