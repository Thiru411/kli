<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fund_performance_model extends CI_Model  {
	
	function __construct() {
        parent::__construct();
    }
	
	// Get all modules
	public function get_all_modules(){
		return  $this->db->select('kct.title, kct.url_title, kcd.field_id_185 as short_description, kcd.field_id_187 as icon_image, kcd.field_id_188 as banner_image')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'	=>		FUND_PERFORMANCE_MODULE_CHANNEL_ID, 
								  'kct.site_id'		=>		SITE_ID,
								  'kct.status'		=>		'open'))
					->order_by("kcd.entry_id", "asc")
					->get()->result();
	}

	// Get all Fund Performance Updates
	public function get_fp_updates($year, $type){

		if($type == 'year'){
			return 	$this->db->select('kct.title, kcd.field_id_111 as short_description, kcd.field_id_196 as thumb_image, kcd.field_id_197 as pdf_file, kcd.field_id_330 as pdf_file_link')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'	=>	FUND_PERFORMANCE_UPDATE_CHANNEL_ID, 
								  'kct.site_id'		=>	SITE_ID,
								  'kcd.field_id_198'=>	$year,
								  'kcd.field_id_199'=>	0,
								  'kct.status'		=>	'open'))
					->get()->row();
		} else {
			return 	$this->db->select('kct.title, kcd.field_id_196 as thumb_image, kcd.field_id_197 as pdf_file, kcd.field_id_330 as pdf_file_link, CONVERT(kcd.field_id_199, UNSIGNED INTEGER) AS month_number ')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'	=>	FUND_PERFORMANCE_UPDATE_CHANNEL_ID, 
								  'kct.site_id'		=>	SITE_ID,
								  'kcd.field_id_198'=>	$year,
								  'kcd.field_id_199 != '=>	0,
								  'kct.status'		=>	'open'))
					->order_by("month_number", "asc")
					->get()->result();
			//->where("(kcd.field_id_198 = $year AND kcd.field_id_199 > 3) OR (kcd.field_id_198 = ($year+1) AND kcd.field_id_199 <= 3 AND kcd.field_id_199 != 0) ", NULL, FALSE)
		}
	}
	
	public function get_latest_nav_reports_excel($urltype,$type, $start, $end){
		/*return	$this->db->select('ksct.title, kcd.field_id_192 as nav_value, kcd.field_id_194 as fp_date, kcd.field_id_251 as fp_next_date, kscd.field_id_189 as scheme_id')
					->from('kotak_channel_titles as ksct')
					->join('kotak_channel_data as kscd', 'kscd.entry_id = ksct.entry_id')
					->join('kotak_relationships as kr', 'kr.child_id = kscd.entry_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kcdt', 'kcdt.entry_id = kcd.entry_id')
					->where(array(	'ksct.channel_id'	=>		FUND_PERFORMANCE_SCHEMES_CHANNEL_ID, 
									'kr.field_id'		=>		FUND_PERFORMANCE_SCHEME_RELATIONSHIP,
								  	'ksct.site_id'		=>		SITE_ID,								  
								  	'kscd.field_id_190'	=> 		'scheme',
									'ksct.url_title'	=>		$urltype,
								  	'ksct.status'		=>		'open',
									'kcdt.status'		=>		'open',
									'kcd.field_id_192!=' => 0))
					->where( "kcd.field_id_194 BETWEEN $start AND $end", NULL, FALSE )
					->order_by("kscd.field_id_191", "asc")
					->get()->result();  */
					
					
					
					if($type == '') {
			return array();	
		} else if($type == 'scheme') {
			return	$this->db->select('ksct.title, kcd.field_id_192 as nav_value, kcd.field_id_194 as fp_date, kcd.field_id_251 as fp_next_date, kscd.field_id_189 as scheme_id')
					->from('kotak_channel_titles as ksct')
					->join('kotak_channel_data as kscd', 'kscd.entry_id = ksct.entry_id')
					->join('kotak_relationships as kr', 'kr.child_id = kscd.entry_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kcdt', 'kcdt.entry_id = kcd.entry_id')
					->where(array(	'ksct.channel_id'	=>		FUND_PERFORMANCE_SCHEMES_CHANNEL_ID, 
									'kr.field_id'		=>		FUND_PERFORMANCE_SCHEME_RELATIONSHIP,
								  	'ksct.site_id'		=>		SITE_ID,								  
								  	'kscd.field_id_190'	=> 		$type,
									'ksct.url_title'	=>		$urltype,
								  	'ksct.status'		=>		'open',
									'kcdt.status'		=>		'open',
									'kcd.field_id_192!=' => 0))
					->where( "kcd.field_id_194 BETWEEN $start AND $end", NULL, FALSE )
					->order_by("kscd.field_id_191", "asc")
					->get()->result();
		} else if($type == 'fund') {
			return	$this->db->select('ksct.title, kcd.field_id_192 as nav_value, kcd.field_id_194 as fp_date, kcd.field_id_251 as fp_next_date, kscd.field_id_189 as scheme_id')
					->from('kotak_channel_titles as ksct')
					->join('kotak_channel_data as kscd', 'kscd.entry_id = ksct.entry_id')
					->join('kotak_relationships as kr', 'kr.child_id = kscd.entry_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kcdt', 'kcdt.entry_id = kcd.entry_id')
					->where(array(	'ksct.channel_id'	=>		FUND_PERFORMANCE_SCHEMES_CHANNEL_ID, 
									'kr.field_id'		=>		FUND_PERFORMANCE_SCHEME_RELATIONSHIP,
								  	'ksct.site_id'		=>		SITE_ID,								  
								  	'kscd.field_id_190'	=> 		$type,
									'ksct.url_title'	=>		$urltype,
								  	'ksct.status'		=>		'open',
									'kcdt.status'		=>		'open',
									'kcd.field_id_192!=' => 0))
					->where( "kcd.field_id_194 BETWEEN $start AND $end", NULL, FALSE )
					->order_by("kscd.field_id_191", "asc")
					->get()->result();
		} else {
			return	$this->db->select('ksct.title, kcd.field_id_192 as nav_value, kcd.field_id_193 as nifty_value, kcd.field_id_194 as fp_date, kcd.field_id_251 as fp_next_date, kscd.field_id_189 as scheme_id')
					->from('kotak_channel_titles as ksct')
					->join('kotak_channel_data as kscd', 'kscd.entry_id = ksct.entry_id')
					->join('kotak_relationships as kr', 'kr.child_id = kscd.entry_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kcdt', 'kcdt.entry_id = kcd.entry_id')
					->where(array(	'ksct.channel_id'	=>		FUND_PERFORMANCE_SCHEMES_CHANNEL_ID, 
									'kr.field_id'		=>		FUND_PERFORMANCE_SCHEME_RELATIONSHIP,
								  	'ksct.site_id'		=>		SITE_ID,
								  	'ksct.url_title'	=> 		$type,
									'ksct.url_title'	=>		$urltype,
								  	'ksct.status'		=>		'open',
									'kcdt.status'		=>		'open'))
					->where( "kcd.field_id_194 BETWEEN $start AND $end", NULL, FALSE )
					->order_by("kcd.field_id_194", "asc")
					->get()->result();
		}
		
	}


	// Get Update records details
	public function get_latest_nav_reports($type, $start, $end){

		if($type == '') {
			return array();	
		} else if($type == 'scheme') {
			return	$this->db->select('ksct.title, kcd.field_id_192 as nav_value, kcd.field_id_194 as fp_date, kcd.field_id_251 as fp_next_date, kscd.field_id_189 as scheme_id')
					->from('kotak_channel_titles as ksct')
					->join('kotak_channel_data as kscd', 'kscd.entry_id = ksct.entry_id')
					->join('kotak_relationships as kr', 'kr.child_id = kscd.entry_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kcdt', 'kcdt.entry_id = kcd.entry_id')
					->where(array(	'ksct.channel_id'	=>		FUND_PERFORMANCE_SCHEMES_CHANNEL_ID, 
									'kr.field_id'		=>		FUND_PERFORMANCE_SCHEME_RELATIONSHIP,
								  	'ksct.site_id'		=>		SITE_ID,								  
								  	'kscd.field_id_190'	=> 		$type,
								  	'ksct.status'		=>		'open',
									'kcdt.status'		=>		'open',
									'kcd.field_id_192!=' => 0))
					->where( "kcd.field_id_194 BETWEEN $start AND $end", NULL, FALSE )
					->order_by("kscd.field_id_191", "asc")
					->get()->result();
		} else if($type == 'fund') {
			return	$this->db->select('ksct.title, kcd.field_id_192 as nav_value, kcd.field_id_194 as fp_date, kcd.field_id_251 as fp_next_date, kscd.field_id_189 as scheme_id')
					->from('kotak_channel_titles as ksct')
					->join('kotak_channel_data as kscd', 'kscd.entry_id = ksct.entry_id')
					->join('kotak_relationships as kr', 'kr.child_id = kscd.entry_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kcdt', 'kcdt.entry_id = kcd.entry_id')
					->where(array(	'ksct.channel_id'	=>		FUND_PERFORMANCE_SCHEMES_CHANNEL_ID, 
									'kr.field_id'		=>		FUND_PERFORMANCE_SCHEME_RELATIONSHIP,
								  	'ksct.site_id'		=>		SITE_ID,								  
								  	'kscd.field_id_190'	=> 		$type,
								  	'ksct.status'		=>		'open',
									'kcdt.status'		=>		'open',
									'kcd.field_id_192!=' => 0))
					->where( "kcd.field_id_194 BETWEEN $start AND $end", NULL, FALSE )
					->order_by("kscd.field_id_191", "asc")
					->get()->result();
		} else {
			return	$this->db->select('ksct.title, kcd.field_id_192 as nav_value, kcd.field_id_193 as nifty_value, kcd.field_id_194 as fp_date, kcd.field_id_251 as fp_next_date, kscd.field_id_189 as scheme_id')
					->from('kotak_channel_titles as ksct')
					->join('kotak_channel_data as kscd', 'kscd.entry_id = ksct.entry_id')
					->join('kotak_relationships as kr', 'kr.child_id = kscd.entry_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kcdt', 'kcdt.entry_id = kcd.entry_id')
					->where(array(	'ksct.channel_id'	=>		FUND_PERFORMANCE_SCHEMES_CHANNEL_ID, 
									'kr.field_id'		=>		FUND_PERFORMANCE_SCHEME_RELATIONSHIP,
								  	'ksct.site_id'		=>		SITE_ID,
								  	'ksct.url_title'	=> 		$type,
								  	'ksct.status'		=>		'open',
									'kcdt.status'		=>		'open'))
					->where( "kcd.field_id_194 BETWEEN $start AND $end", NULL, FALSE )
					->order_by("kcd.field_id_194", "asc")
					->get()->result();
		}
	}


	// Get topic details
	public function get_nav_recent_date($type){
		return	$this->db->select('kcd.field_id_194 as fp_date, kcd.field_id_251 as next_fp_date')
					->from('kotak_channel_titles as ksct')
					->join('kotak_channel_data as kscd', 'kscd.entry_id = ksct.entry_id')
					->join('kotak_relationships as kr', 'kr.child_id = kscd.entry_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kcdt', 'kcdt.entry_id = kcd.entry_id')
					->where(array(	'ksct.channel_id'	=>		FUND_PERFORMANCE_SCHEMES_CHANNEL_ID,
									'kr.field_id'		=>		FUND_PERFORMANCE_SCHEME_RELATIONSHIP,
								  	'ksct.site_id'		=>		SITE_ID,								  
								  	'kscd.field_id_190'	=> 		$type,
								  	'ksct.status'		=>		'open',
									'kcdt.status'		=>		'open'))
					->order_by("kcd.field_id_194", "desc")
					->get()->row();
	}

	// Get topic details
	public function get_module_details($moduleSlug){
		return  $this->db->select('kct.title, kcd.field_id_186 as description, kcd.field_id_311 as inside_banner_image')
						->from('kotak_channel_titles as kct')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
						->where(array('kct.channel_id'	=>	FUND_PERFORMANCE_MODULE_CHANNEL_ID, 
									  'kct.site_id'		=>	SITE_ID,
									  'kct.url_title'	=>	$moduleSlug,
									  'kct.status'		=>	'open'))
						->get()->row();	
	}

	// Get all Shemes for dropdown
	public function get_all_schemes(){
		return  $this->db->select('kct.title, kct.url_title, kcd.field_id_190 as type,kcd.field_id_189 as scheme_id')
						->from('kotak_channel_titles as kct')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
						->where(array('kct.channel_id'	=>	FUND_PERFORMANCE_SCHEMES_CHANNEL_ID, 
									  'kct.site_id'		=>	SITE_ID,
									  'kcd.field_id_238'=>	'1',
									  'kct.status'		=>	'open'))
						->order_by("kct.title", "asc") 
						->get()->result();	
	}

	// Get all Shemes for dropdown
	public function get_scheme_details($schemeSlug){
		return  $this->db->select('kct.title, kct.url_title, kcd.field_id_190 as scheme_type,kcd.field_id_189 as scheme_id')
						->from('kotak_channel_titles as kct')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
						->where(array('kct.channel_id'	=>	FUND_PERFORMANCE_SCHEMES_CHANNEL_ID, 
									  'kct.site_id'		=>	SITE_ID,
									  'kct.url_title'	=>	$schemeSlug,
									  'kct.status'		=>	'open'))
						->get()->row();	
	}

	//Get faqs details
	/*public function get_faqs($keyword = '', $offset = 0){
		$this->db->select('kct.title, kcd.field_id_269 as description, kcd.entry_id')
						->from('kotak_channel_titles as kct')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
						->where(array( 	'kct.channel_id'=>	FUND_PERFORMANCE_FAQS_CHANNEL_ID, 
										'kct.site_id'	=>	SITE_ID,
										'kct.status'	=>	'open'))
						->order_by("kct.entry_id", "asc")
						->limit(FAQS_LIMIT, $offset);
		if(!empty($keyword)){
			$this->db->where(" ( kct.title LIKE '%$keyword%' ESCAPE '!' OR kcd.field_id_269 LIKE '%$keyword%' ESCAPE '!') ");
		}

		return $this->db->get()->result();
	}*/
	public function get_faqs($keyword = '', $offset = 0){
		$this->db->select('kct.title, kcd.field_id_175 as description, kcd.field_id_337 as faqs_type, kcd.entry_id')
		->from('kotak_channel_titles as kct')
		->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
		->where(array( 'kct.channel_id'=>	INSURANCE_GUIDE_FAQS_CHANNEL_ID,
				'kct.site_id'	=>	SITE_ID,
				'kct.status'	=>	'open',
				'kcd.field_id_337'=>'Policy Related FAQ',
				'kcd.field_id_337!='=>''))
				->order_by("kct.entry_id", "asc")
				->limit(FAQS_LIMIT, $offset);
		if(!empty($keyword)){
			$this->db->where(" ( kct.title LIKE '%$keyword%' ESCAPE '!' OR kcd.field_id_175 LIKE '%$keyword%' ESCAPE '!') ");
		}
	
		return $this->db->get()->result();
	}
	public function get_faqs_general($keyword = '', $offset = 0){
		$this->db->select('kct.title, kcd.field_id_175 as description, kcd.field_id_337 as faqs_type, kcd.entry_id')
		->from('kotak_channel_titles as kct')
		->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
		->where(array( 'kct.channel_id'=>	INSURANCE_GUIDE_FAQS_CHANNEL_ID,
				'kct.site_id'	=>	SITE_ID,
				'kct.status'	=>	'open',
				'kcd.field_id_337'=>'General FAQ',
				'kcd.field_id_337!='=>''))
				->order_by("kct.entry_id", "asc")
				->limit(FAQS_LIMIT, $offset);
		if(!empty($keyword)){
			$this->db->where(" ( kct.title LIKE '%$keyword%' ESCAPE '!' OR kcd.field_id_175 LIKE '%$keyword%' ESCAPE '!') ");
		}
	
		return $this->db->get()->result();
	}

	
}
