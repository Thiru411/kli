<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kotaktv_Model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	  
	public function get_category(){
			return  $this->db->select('sk_category_id, category_name, category_status, created_date, created_time, tran_date_time')
					->from('kotak_tv_category')
					->where(array('category_status'	=>	1))
					->order_by("sk_category_id", "asc")
					->get()->result();
	}
	
	public function get_pdfContent($entry_id){
			$entry_id = secure_input_data($entry_id);
			return  $this->db->select('col_id_34 as pdfTitle, col_id_35 as pdfDate, col_id_36 as pdfURL, col_id_37 as pdfyear')
					->from('kotak_channel_grid_field_236')
					->where(array('entry_id'	=>	$entry_id))
					->order_by("row_order", "asc")
					->get()->result();
	}
	
}