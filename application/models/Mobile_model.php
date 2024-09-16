<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile_Model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
 
	/*Need base calculator*/
	 
	public function bind_needDD_mobile(){
		
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>243))
					->get()->row(); 
	}
	
	public function bind_ageGroupDDMobile(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>244))
					->get()->row();
	}
	  
}