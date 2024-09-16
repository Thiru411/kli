<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function insert_request($postData) {       
        if (!empty($postData)) {
            $this->db->insert('kotak_eterm_campaign', $postData);
            return $this->db->affected_rows() > 0;
        } else {
            return FALSE;
        }
    }

}
