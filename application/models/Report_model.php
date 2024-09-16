<?php

class Report_Model extends CI_Model 
{
	
	var $channel_titles_table = 'kotak_channel_titles';
	var $channel_data_table = 'kotak_channel_data';
	
	// ******************** 
	// User Glossary Report
	var $column_ug_order = array('kotak_channel_titles.entry_id', 'kotak_channel_data.field_id_167', 'kotak_channel_data.field_id_168', 'kotak_channel_data.field_id_169', 'kotak_channel_titles.entry_date'); //set column field database for datatable orderable
	var $column_ug_search = array('kotak_channel_data.field_id_167', 'kotak_channel_data.field_id_168', 'kotak_channel_data.field_id_169'); //set column field database for datatable searchable
	var $ug_order = array('channel_titles_table.entry_id' => 'desc'); // default order 
	// ********************
	
	
	// ********************
	// Life Advisor Report
	var $column_la_order = array('kotak_channel_titles.entry_id', 'kotak_channel_data.field_id_86', 'kotak_channel_data.field_id_87', 'kotak_channel_data.field_id_89', 'kotak_channel_data.field_id_90','kotak_channel_data.field_id_91', 'kotak_channel_titles.entry_date'); //set column field database for datatable orderable
	var $column_la_search = array('kotak_channel_data.field_id_86', 'kotak_channel_data.field_id_87', 'kotak_channel_data.field_id_89', 'kotak_channel_data.field_id_90','kotak_channel_data.field_id_91', 'kotak_channel_titles.entry_date'); //set column field database for datatable searchable
	var $la_order = array('channel_titles_table.entry_id' => 'desc'); // default order 
	// ********************
	
	
	// ********************
	// Request a relationship Manager Report
	var $column_rm_order = array('kotak_channel_titles.entry_id', 'kotak_channel_data.field_id_257', 'kotak_channel_data.field_id_258', 'kotak_channel_data.field_id_259', 'kotak_channel_data.field_id_260', 'kotak_channel_data.field_id_261', 'kotak_channel_data.field_id_262', 'kotak_channel_data.field_id_263', 'kotak_channel_titles.entry_date'); //set column field database for datatable orderable
	var $column_rm_search = array('kotak_channel_data.field_id_257', 'kotak_channel_data.field_id_258', 'kotak_channel_data.field_id_259', 'kotak_channel_data.field_id_260', 'kotak_channel_data.field_id_261', 'kotak_channel_data.field_id_262', 'kotak_channel_data.field_id_263', 'kotak_channel_titles.entry_date'); //set column field database for datatable searchable
	var $rm_order = array('channel_titles_table.entry_id' => 'desc'); // default order 
	// ********************
	
	
	// ********************
	// Contact Us Report
	var $column_cu_order = array('kotak_channel_titles.entry_id', 'kotak_channel_data.field_id_130', 'kotak_channel_data.field_id_131', 'kotak_channel_data.field_id_132', 'kotak_channel_data.field_id_133', 'kotak_channel_data.field_id_134', 'kotak_channel_titles.entry_date'); //set column field database for datatable orderable
	var $column_cu_search = array('kotak_channel_data.field_id_130', 'kotak_channel_data.field_id_131', 'kotak_channel_data.field_id_132', 'kotak_channel_data.field_id_133', 'kotak_channel_data.field_id_134'); //set column field database for datatable searchable
	var $cu_order = array('channel_titles_table.entry_id' => 'desc'); // default order 
	
	var $column_cu_order_new = array('ktct.entry_id', 'kcd.field_id_320', 'kcd.field_id_321', 'kcd.field_id_133', 'kcd.field_id_132', 'kct.title', 'kct2.title', 'kcd.field_id_134', 'kcd.field_id_326', 'kcd.field_id_327', 'ktct.entry_date'); //set column field database for datatable orderable
    var $column_cu_search_new = array('kcd.field_id_320', 'kcd.field_id_321', 'kcd.field_id_133', 'kcd.field_id_132', 'kct.title', 'kct2.title', 'kcd.field_id_327'); //set column field database for datatable searchable
    var $cu_order_new = array('ktct.entry_id' => 'desc'); // default order
	// ********************
	
	
	// ********************
	// Do Not Call Registry Report
	var $column_dr_order = array('kotak_channel_titles.entry_id', 'kotak_channel_data.field_id_307', 'kotak_channel_data.field_id_308', 'kotak_channel_data.field_id_309', 'kotak_channel_data.field_id_310', 'kotak_channel_titles.entry_date'); //set column field database for datatable orderable
	var $column_dr_search = array('kotak_channel_data.field_id_307', 'kotak_channel_data.field_id_308', 'kotak_channel_data.field_id_309', 'kotak_channel_data.field_id_310'); //set column field database for datatable searchable
	var $dr_order = array('channel_titles_table.entry_id' => 'desc'); // default order 
	// ********************
	

	// ********************
	// Website Feedback Report
	var $column_wf_order = array('kotak_channel_titles.entry_id', 'kotak_channel_data.field_id_271', 'kotak_channel_data.field_id_272', 'kotak_channel_data.field_id_273', 'kotak_channel_data.field_id_274', 'kotak_channel_data.field_id_275', 'kotak_channel_data.field_id_276', 'kotak_channel_data.field_id_277', 'kotak_channel_data.field_id_278', 'kotak_channel_data.field_id_279', 'kotak_channel_data.field_id_279', 'kotak_channel_titles.entry_date'); //set column field database for datatable orderable
	var $column_wf_search = array('kotak_channel_data.field_id_271', 'kotak_channel_data.field_id_272', 'kotak_channel_data.field_id_273', 'kotak_channel_data.field_id_274', 'kotak_channel_data.field_id_275', 'kotak_channel_data.field_id_276', 'kotak_channel_data.field_id_277', 'kotak_channel_data.field_id_278', 'kotak_channel_data.field_id_279', 'kotak_channel_data.field_id_279'); //set column field database for datatable searchable
	var $wf_order = array('channel_titles_table.entry_id' => 'desc'); // default order 
	// ********************
	
	
	// ********************
	// I am looking for Report
	var $column_if_order = array('kotak_channel_titles.entry_id', 'kotak_channel_data.field_id_247', 'kotak_channel_data.field_id_248', 'kotak_channel_data.field_id_246', 'kotak_channel_data.field_id_249', 'kotak_channel_titles.entry_date'); //set column field database for datatable orderable
	var $column_if_search = array('kotak_channel_data.field_id_247', 'kotak_channel_data.field_id_248', 'kotak_channel_data.field_id_246', 'kotak_channel_data.field_id_249'); //set column field database for datatable searchable
	var $if_order = array('channel_titles_table.entry_id' => 'desc'); // default order 
	// ********************
	
	
	// ********************
	// Get A Call Report
	var $column_gc_order = array('kotak_channel_titles.entry_id', 'kotak_channel_data.field_id_253', 'kotak_channel_data.field_id_254', 'kotak_channel_data.field_id_255', 'kotak_channel_data.field_id_256', 'kotak_channel_titles.entry_date'); //set column field database for datatable orderable
	var $column_gc_search = array('kotak_channel_data.field_id_253', 'kotak_channel_data.field_id_254', 'kotak_channel_data.field_id_255', 'kotak_channel_data.field_id_256',); //set column field database for datatable searchable
	var $gc_order = array('channel_titles_table.entry_id' => 'desc'); // default order 
	// ********************
	
	// ********************
	// Life Advisor Join Us Report
	var $column_lifeadvisor_joinus_order = array('kotak_channel_titles.entry_id', 'kotak_channel_data.field_id_281', 'kotak_channel_data.field_id_282','kotak_channel_data.field_id_283', 'kotak_channel_data.field_id_284', 'kotak_channel_data.field_id_285', 'kotak_channel_titles.entry_date'); //set column field database for datatable orderable
	
	var $column_lifeadvisor_joinus_search = array('kotak_channel_data.field_id_281', 'kotak_channel_data.field_id_282','kotak_channel_data.field_id_283', 'kotak_channel_data.field_id_284', 'kotak_channel_data.field_id_285',); //set column field database for datatable searchable
	
	var $lifeadvisor_joinus_order = array('channel_titles_table.entry_id' => 'desc'); // default order 
	// ********************
    var $campaign_order = array('kotak_eterm_campaign.cust_id' => 'desc'); // default order 
    var $campaign_ug_order = array('kotak_eterm_campaign.cust_id', 'kotak_eterm_campaign.cust_name', 'kotak_eterm_campaign.cust_mobile', 'kotak_eterm_campaign.cust_city', 'kotak_eterm_campaign.campaign_source');
    var $campaign_ug_search = array('kotak_eterm_campaign.cust_name', 'kotak_eterm_campaign.cust_mobile','kotak_eterm_campaign.cust_city', 'kotak_eterm_campaign.campaign_source');

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	
	// ********************
	// User Glossary Report
	private function _get_ug_datatables_query() 
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id,'.
				$this->channel_data_table.'.field_id_167 as name,'.
				$this->channel_data_table.'.field_id_168 as email,'.
				$this->channel_data_table.'.field_id_169 as keyword,'.
				'(FROM_UNIXTIME('.$this->channel_titles_table.'.entry_date, "%d-%m-%Y %h:%i:%s")) as entry_date,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		INSURANCE_GUIDE_USERS_GLOSSARY_CHANNEL_ID, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
		  if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }

		$i = 0;
		foreach ($this->column_ug_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_ug_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_ug_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->ug_order))
		{
			$order = $this->ug_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_ug_datatables()
	{
		$this->_get_ug_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_ug_filtered()
	{
		$this->_get_ug_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_ug_all()
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id,'.
				$this->channel_data_table.'.field_id_167 as name,'.
				$this->channel_data_table.'.field_id_168 as email,'.
				$this->channel_data_table.'.field_id_169 as keyword,'.
				$this->channel_titles_table.'.entry_date as entry_date,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		INSURANCE_GUIDE_USERS_GLOSSARY_CHANNEL_ID, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'))
								  ->get();					  
		return $query->num_rows();
	}
	
	public function export_ug_data() {
		$this->_get_ug_datatables_query();
		return $this->db->get();
	}
	
	// ********************
	
	
	// ********************
	// Life Advisor Report
	private function _get_la_datatables_query() 
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id,'.
				$this->channel_data_table.'.field_id_86 as name,'.
				$this->channel_data_table.'.field_id_87 as phone,'.
				$this->channel_data_table.'.field_id_89 as city,'.
				$this->channel_data_table.'.field_id_90 as customer,'.
				$this->channel_data_table.'.field_id_91 as plan,'.
				'(FROM_UNIXTIME('.$this->channel_titles_table.'.entry_date, "%d-%m-%Y %h:%i:%s")) as entry_date,'.
				$this->channel_data_table.'.field_id_338 as pincode,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		REQUEST_LIFE_ADVISOR_CHANNEL_ID, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
	    if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }

		$i = 0;
		foreach ($this->column_la_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_la_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_la_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->la_order))
		{
			$order = $this->la_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}



	// Life Advisor Report
	private function _get_lifeadvisor_datatables_query() 
	{
		$this->db->select(
				$this->channel_data_table.'.field_id_91 as InterestedProductCategory,'.
				$this->channel_data_table.'.field_id_86 as FullNameofcustomer,'.
				$this->channel_data_table.'.field_id_87 as Mobileno,'.
				$this->channel_data_table.'.field_id_338 as Pincode,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		REQUEST_LIFE_ADVISOR_CHANNEL_ID, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
	    if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }

		$i = 0;
		foreach ($this->column_la_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_la_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_la_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->la_order))
		{
			$order = $this->la_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	
	function get_la_datatables()
	{
		$this->_get_la_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_la_filtered()
	{
		$this->_get_la_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_la_all()
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		REQUEST_LIFE_ADVISOR_CHANNEL_ID, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'))
								  ->get();					  
		return $query->num_rows();
	}
	
	public function export_la_data() {
		$this->_get_la_datatables_query();
		return $this->db->get();
	}
	
	public function export_lifeadvisor_data() {
		$this->_get_lifeadvisor_datatables_query();
		return $this->db->get();
	}
	
	// ********************
	
	
	// ********************
	// Realtionship Manager Report
	private function _get_rm_datatables_query() 
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id,'.
				$this->channel_data_table.'.field_id_257 as name,'.
				$this->channel_data_table.'.field_id_258 as phone,'.
				$this->channel_data_table.'.field_id_259 as email,'.
				$this->channel_data_table.'.field_id_260 as city,'.
				$this->channel_data_table.'.field_id_261 as company_name,'.
				$this->channel_data_table.'.field_id_262 as employee_count,'.
				$this->channel_data_table.'.field_id_263 as plan,'.
				'(FROM_UNIXTIME('.$this->channel_titles_table.'.entry_date, "%d-%m-%Y %h:%i:%s")) as entry_date,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		REQUEST_A_RELATIONSHIP_MANAGER_CHANNEL_ID, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
		if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }
		$i = 0;
		foreach ($this->column_rm_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_rm_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_rm_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->rm_order))
		{
			$order = $this->rm_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_rm_datatables()
	{
		$this->_get_rm_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_rm_filtered()
	{
		$this->_get_rm_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_rm_all()
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		REQUEST_A_RELATIONSHIP_MANAGER_CHANNEL_ID, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'))
								  ->get();					  
		return $query->num_rows();
	}
	
	public function export_rm_data() {
		$this->_get_rm_datatables_query();
		return $this->db->get();
	}
	
	// ********************
	
	
	// ********************
	// Contact Us Report
	private function _get_cu_datatables_query() 
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id,'.
				$this->channel_data_table.'.field_id_130 as feedback_type,'.
				$this->channel_data_table.'.field_id_131 as name,'.
				$this->channel_data_table.'.field_id_132 as email,'.
				$this->channel_data_table.'.field_id_133 as phone,'.
				$this->channel_data_table.'.field_id_134 as feedback,'.
				'(FROM_UNIXTIME('.$this->channel_titles_table.'.entry_date, "%d-%m-%Y %h:%i:%s")) as entry_date,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		CONTACT_US_CHANNEL_ID, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
		if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }
		$i = 0;
		foreach ($this->column_cu_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_cu_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_cu_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->cu_order))
		{
			$order = $this->cu_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	private function _get_cu_datatables_query_new() {
        $this->db->select(
                'ktct.entry_id as entry_id,' .
                'kcd.field_id_318 as policyno,' .
                'kcd.field_id_319 as dob,' .
                'kcd.field_id_133 as contactno,' .
                'kcd.field_id_132 as emailid,' .
                'kcd.field_id_323 as srgroups,' .
                'kct.title as srgrouptitle,' .
                'kcd.field_id_324 as srtypes,' .
                'kct2.title as srtypetitle,' .
                'kcd.field_id_134 as feedback,' .
                'kcd.field_id_325 as filepath,' .
                'kcd.field_id_326 as srresponse,' .
                '(FROM_UNIXTIME(ktct.entry_date, "%d-%m-%Y %h:%i:%s")) as entry_date,'
                , FALSE);
        $this->db->from('kotak_channel_titles as ktct');
        $this->db->join('kotak_channel_data as kcd', 'kcd.entry_id = ktct.entry_id');
        $this->db->join('kotak_relationships as kr', 'kr.parent_id = ktct.entry_id');
        $this->db->join('kotak_channel_titles as kct', 'kct.entry_id = kr.child_id');
        $this->db->join('kotak_relationships as kr2', 'kr2.parent_id = ktct.entry_id');
        $this->db->join('kotak_channel_titles as kct2', 'kct2.entry_id = kr2.child_id');
        $query = $this->db->where(array('ktct.channel_id' => CONTACT_US_CHANNEL_ID,
            'ktct.site_id' => SITE_ID,
            'kr.field_id' => SR_GROUP_FIELD_ID,
            'kr2.field_id' => SR_TYPE_FIELD_ID,
            'ktct.status' => 'open'));
        $i = 0;
        foreach ($this->column_cu_search_new as $item) { // loop column 
            if ($_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_cu_search_new) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_cu_order_new[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->cu_order_new)) {
            $order = $this->cu_order_new;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
	
	  function get_cu_datatables_new() {
        $this->_get_cu_datatables_query_new();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

	
	

	function get_cu_datatables()
	{
		$this->_get_cu_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	} 
	
	function count_cu_filtered_new() {
        $this->_get_cu_datatables_query_new();
        $query = $this->db->get();
        return $query->num_rows();
    }	

	function count_cu_filtered()
	{
		$this->_get_cu_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	public function count_cu_all_new() {
        $this->db->select('ktct.entry_id as entry_id,', FALSE);
        $this->db->from('kotak_channel_titles as ktct');
        $this->db->join('kotak_channel_data as kcd', 'kcd.entry_id = ktct.entry_id');
        $this->db->join('kotak_relationships as kr', 'kr.parent_id = ktct.entry_id');
        $this->db->join('kotak_channel_titles as kct', 'kct.entry_id = kr.child_id');
        $this->db->join('kotak_relationships as kr2', 'kr2.parent_id = ktct.entry_id');
        $this->db->join('kotak_channel_titles as kct2', 'kct2.entry_id = kr2.child_id');
        $query = $this->db->where(array('ktct.channel_id' => CONTACT_US_CHANNEL_ID,
                    'ktct.site_id' => SITE_ID,
                    'kr.field_id' => SR_GROUP_FIELD_ID,
                    'kr2.field_id' => SR_TYPE_FIELD_ID,
                    'ktct.status' => 'open'))
                ->get();
        return $query->num_rows();
    }
	

	public function count_cu_all()
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		CONTACT_US_CHANNEL_ID, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'))
								  ->get();					  
		return $query->num_rows();
	}
	
	public function export_cu_data() {
		$this->_get_cu_datatables_query();
		return $this->db->get();
	}
	public function export_cu_data_new() {
        $this->_get_cu_datatables_query_new();
       // return $this->db->get();
	   $query = $this->db->get();
        return $query->result();

    }
	
	
	// ********************
	
	
	// ********************
	// Do Not Call Registry Report
	private function _get_dr_datatables_query() 
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id,'.
				$this->channel_data_table.'.field_id_307 as name,'.
				$this->channel_data_table.'.field_id_308 as phone,'.
				$this->channel_data_table.'.field_id_309 as email,'.
				$this->channel_data_table.'.field_id_310 as city,'.
				'(FROM_UNIXTIME('.$this->channel_titles_table.'.entry_date, "%d-%m-%Y %h:%i:%s")) as entry_date,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		DO_NOT_CALL_REGISTRY, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
        if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }
		$i = 0;
		foreach ($this->column_dr_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_dr_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_dr_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->dr_order))
		{
			$order = $this->dr_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_dr_datatables()
	{
		$this->_get_dr_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_dr_filtered()
	{
		$this->_get_dr_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_dr_all()
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		DO_NOT_CALL_REGISTRY, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'))
								  ->get();					  
		return $query->num_rows();
	}
	
	public function export_dr_data() {
		$this->_get_dr_datatables_query();
		return $this->db->get();
	}
	
	// ********************

	
	// ********************
	// Website Feedback Report
	private function _get_wf_datatables_query() 
	{	
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id,'.
				$this->channel_data_table.'.field_id_271 as meet_your_needs,'.
				$this->channel_data_table.'.field_id_272 as easy_to_find,'.
				$this->channel_data_table.'.field_id_273 as time_taken,'.
				$this->channel_data_table.'.field_id_274 as visually_appealing,'.
				$this->channel_data_table.'.field_id_275 as easy_to_understand,'.
				$this->channel_data_table.'.field_id_276 as recommend_website,'.
				$this->channel_data_table.'.field_id_277 as name,'.
				$this->channel_data_table.'.field_id_278 as email,'.
				$this->channel_data_table.'.field_id_279 as phone,'.
				$this->channel_data_table.'.field_id_280 as city,'.
				'(FROM_UNIXTIME('.$this->channel_titles_table.'.entry_date, "%d-%m-%Y %h:%i:%s")) as entry_date,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		FEEDBACK_FORM, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
	    if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }

		$i = 0;
		foreach ($this->column_wf_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_wf_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_wf_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->wf_order))
		{
			$order = $this->wf_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_wf_datatables()
	{
		$this->_get_wf_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_wf_filtered()
	{
		$this->_get_wf_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_wf_all()
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		FEEDBACK_FORM, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'))
								  ->get();					  
		return $query->num_rows();
	}
	
	public function export_wf_data() {
		$this->_get_wf_datatables_query();
		return $this->db->get();
	}
	
	// ********************
	
	
	// ********************
	// I am Looking For Report
	private function _get_if_datatables_query() 
	{	
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id,'.
				$this->channel_data_table.'.field_id_247 as segment,'.
				$this->channel_data_table.'.field_id_248 as age_group,'.
				$this->channel_data_table.'.field_id_246 as name,'.
				$this->channel_data_table.'.field_id_249 as phone,'.
				$this->channel_data_table.'.field_id_252 as city,'.
				'(FROM_UNIXTIME('.$this->channel_titles_table.'.entry_date, "%d-%m-%Y %h:%i:%s")) as entry_date,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		NEED_BASE_CALCULATOR_USER_DETAILS, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
        if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }
		$i = 0;
		foreach ($this->column_if_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_if_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_if_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->if_order))
		{
			$order = $this->if_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	
	private function _get_if_datatables_query_looking_for() 
	{	
		$this->db->select(
				$this->channel_data_table.'.field_id_247 as InterestedProductCategory,'.
				$this->channel_data_table.'.field_id_246 as FullNameofcustomer,'.
				$this->channel_data_table.'.field_id_249 as Mobileno,'.
				$this->channel_data_table.'.field_id_338 as Pincode,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		NEED_BASE_CALCULATOR_USER_DETAILS, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
        if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }
		$i = 0;
		foreach ($this->column_if_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_if_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_if_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->if_order))
		{
			$order = $this->if_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	

	function get_if_datatables()
	{
		$this->_get_if_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_if_filtered()
	{
		$this->_get_if_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_if_all()
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		NEED_BASE_CALCULATOR_USER_DETAILS, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'))
								  ->get();					  
		return $query->num_rows();
	}
	
	public function export_if_data() {
		$this->_get_if_datatables_query();
		return $this->db->get();
	}
	public function export_if_data_lookingfor() {
		$this->_get_if_datatables_query_looking_for();
		return $this->db->get();
	}
	
	// ********************
	
	
	// ********************
	// Get A Call Report
	private function _get_gc_datatables_query() 
	{	
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id,'.
				$this->channel_data_table.'.field_id_253 as name,'.
				$this->channel_data_table.'.field_id_254 as phone,'.
				$this->channel_data_table.'.field_id_255 as email,'.
				$this->channel_data_table.'.field_id_256 as query,'.
				'(FROM_UNIXTIME('.$this->channel_titles_table.'.entry_date, "%d-%m-%Y %h:%i:%s")) as entry_date,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		GET_A_CALL, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
        if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }
		$i = 0;
		foreach ($this->column_gc_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_gc_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_gc_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->gc_order))
		{
			$order = $this->gc_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_gc_datatables()
	{
		$this->_get_gc_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_gc_filtered()
	{
		$this->_get_gc_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_gc_all()
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>		GET_A_CALL, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'))
								  ->get();					  
		return $query->num_rows();
	}
	
	public function export_gc_data() {
		$this->_get_gc_datatables_query();
		return $this->db->get();
	}
	
	// ********************
	
    // ********************
	// Life Advisor Join us Report	
    private function _get_life_advisor_joinus_datatables_query() 
	{	
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id,'.
				$this->channel_data_table.'.field_id_281 as name,'.
				$this->channel_data_table.'.field_id_282 as dob,'.
				$this->channel_data_table.'.field_id_283 as phone,'.
				$this->channel_data_table.'.field_id_284 as email,'.
				$this->channel_data_table.'.field_id_285 as city,'.
				$this->channel_data_table.'.field_id_329 as pincode,'.
				'(FROM_UNIXTIME('.$this->channel_titles_table.'.entry_date, "%d-%m-%Y %h:%i:%s")) as entry_date,'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>	CHNL_JOIN_US, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'));
        if ($_POST["is_date_search"] == "yes") {   
           $query = $this->db->where('kotak_channel_titles.entry_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }
		$i = 0;
		foreach ($this->column_lifeadvisor_joinus_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_lifeadvisor_joinus_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{		
		$this->db->order_by($this->column_lifeadvisor_joinus_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->lifeadvisor_joinus_order))
		{
			$order = $this->lifeadvisor_joinus_order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	
	protected function export_lifeadvisor_joinus_data() {
		$this->_get_life_advisor_joinus_datatables_query();
		return $this->db->get();
	}
	
    function get_lifeadvisor_joinus_datatables()
	{
		$this->_get_life_advisor_joinus_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function count_lifeadvisor_joinus_all()
	{
		$this->db->select(
				$this->channel_titles_table.'.entry_id as entry_id'
				, FALSE);
		$this->db->from($this->channel_titles_table);
		$this->db->join($this->channel_data_table, $this->channel_data_table.'.entry_id = '.$this->channel_titles_table.'.entry_id');
		$query = $this->db->where(array($this->channel_titles_table.'.channel_id'	=>	CHNL_JOIN_US, 
								  $this->channel_titles_table.'.site_id'			=>		SITE_ID,
								  $this->channel_titles_table.'.status'				=>		'open'))
								  ->get();					  
		return $query->num_rows();
	}
	
	function count_lifeadvisor_joinus_filtered()
	{
		$this->_get_life_advisor_joinus_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	// ********************
	
	function get_campaign_datatables($camapign_name) {
        $this->_get_campaign_datatables_query($camapign_name);
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    private function _get_campaign_datatables_query($camapign_name) {
        $this->db->select(
                'kotak_eterm_campaign.cust_id as entry_id,' .
                'kotak_eterm_campaign.cust_name as name,' .
                'kotak_eterm_campaign.cust_mobile as mobile,' .
                'kotak_eterm_campaign.cust_city as city,' .
                'kotak_eterm_campaign.campaign_source as source,' .
                'kotak_eterm_campaign.utm_source as utmsource,' .
                'kotak_eterm_campaign.utm_medium as utmmedium,' .
				'kotak_eterm_campaign.utm_campaign as utmcampaign,'.
				'kotak_eterm_campaign.campaign_type as type,' .
				'kotak_eterm_campaign.utm_keyword as utmkeyword,' .
				'kotak_eterm_campaign.device as device,' .
                'kotak_eterm_campaign.created_date as entry_date,'
                , FALSE);
        $this->db->from("kotak_eterm_campaign");

        $query = $this->db->where(array(
            'kotak_eterm_campaign.user_status' => 1,'kotak_eterm_campaign.campaign_source' => $camapign_name));

        if ($_POST["is_date_search"] == "yes") {
            $query = $this->db->where('kotak_eterm_campaign.created_date BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" ');
        }        

        $i = 0;
        foreach ($this->campaign_ug_search as $item) { // loop column 
            if ($_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->campaign_ug_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->campaign_ug_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->campaign_order)) {
            $order = $this->campaign_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function count_campaign_all($camapign_name) {
        $this->db->select(
                'kotak_eterm_campaign.cust_id as entry_id,' .
                'kotak_eterm_campaign.cust_name as name,' .
                'kotak_eterm_campaign.cust_mobile as mobile,' .
                'kotak_eterm_campaign.cust_city as city,' .
                'kotak_eterm_campaign.campaign_source as source,' .
                'kotak_eterm_campaign.utm_source as utmsource,' .
                'kotak_eterm_campaign.utm_medium as utmmedium,' .
				'kotak_eterm_campaign.utm_campaign as utmcampaign,' .
				'kotak_eterm_campaign.campaign_type as type,' .
				'kotak_eterm_campaign.utm_keyword as utmkeyword,' .
				'kotak_eterm_campaign.device as device,' .
                'kotak_eterm_campaign.created_date as entry_date,'
                , FALSE);
        $this->db->from("kotak_eterm_campaign");
        $query = $this->db->where(array('kotak_eterm_campaign.user_status' => 1,'kotak_eterm_campaign.campaign_source' => $camapign_name))->get();
        return $query->num_rows();
    }

    function count_campaign_filtered($camapign_name) {
        $this->_get_campaign_datatables_query($camapign_name);
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    public function export_campaign_data($camapign_name) {
        $this->_get_campaign_datatables_query($camapign_name);
        return $this->db->get();
    }
	
}

?>