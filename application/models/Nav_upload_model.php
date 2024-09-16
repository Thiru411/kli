<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nav_upload_model extends CI_Model  {
	
	function __construct() {
        parent::__construct();
    }
	
    public function insert_file_record($dataarray, $table) {
        $this->db->insert($table, $dataarray);
        return $this->db->insert_id(); // Return the inserted record ID
    }
    function getRecordsQuery($sql) {
        $this->db->query($sql);
        
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id(); // Return the inserted record ID
        } else {
            return false;
        }
    }
    public function getRecords($where,$table) {
		$this->db->select("*");
		$query = $this->db->get_where($table, $where);
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
    
    // public function getRecordsquerysql($where,$table,$column,$order) {
	// 	$this->db->select("*");
	// 	$this->db->order_by($column,$order);
	// 	$query = $this->db->get_where($table, $where);
	// 	if ($query->num_rows() > 0) {
	// 		return $query->result();
	// 	}
	// 	else {
	// 		return false;
	// 	}
	// }
    public function getRecordsquerysql($sql){
        $query=$this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
}
}
?>