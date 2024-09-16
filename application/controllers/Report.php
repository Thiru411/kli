<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller 
{
	
    public function __construct()
	{
	    
            
		parent::__construct();		
		 
		//$this->load->library('session');
		$this->load->model('report_model','reports');
		$this->load->helper('url');
	} 
	
	/**
	*
	* User Glossary Report
	*=====================
	*/
	

	public function user_glossary_report_landing()
	{
		//list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':' , base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));
		
        if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != "onlineleads" || $_SERVER['PHP_AUTH_PW'] != "glossary") {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }
	
		//Set template Title
		$title = 'User Glossary Report Details';
		$this->data['title'] = $title;
		$this->template->set('title', $title);
		//Load the view file
		$this->template->load('template/admin_template', 'reports/user_glossary_report', $this->data);
	}

	public function user_glossary_report_page()
	{
		$list = $this->reports->get_ug_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $reports) {
			$no++;
			$row = array();
			$row[] = $reports->entry_id;
			$row[] = $reports->name;
			$row[] = $reports->email;
			$row[] = $reports->keyword;
			$row[] = $reports->entry_date;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->reports->count_ug_all(),
						"recordsFiltered" => $this->reports->count_ug_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function user_glossary_export_CSV()
	{
		@ini_set( 'max_execution_time', '0' );
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "User_Glossary_Reports_" . date("d-m-Y h:i:s"). ".csv";
		$result = $this->reports->export_ug_data();
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}
    
	/*=====================*/
	
	
	/**
	*
	* Life Advisor Report
	*=====================
	*/
	public function life_advisor_report_landing()
	{
		if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'onlineleads' || $_SERVER['PHP_AUTH_PW'] != 'advisorrecruitment') {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }
		//Set template Title
		$title = 'Request Life Advisor Report Details';
		$this->data['title'] = $title;
		$this->template->set('title', $title);
		//Load the view file
		$this->template->load('template/admin_template', 'reports/life_advisor_report', $this->data);
	}

	public function life_advisor_report_page()
	{
		$list = $this->reports->get_la_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $reports) {
			$no++;
			$row = array();
			$row[] = $reports->entry_id;
			$row[] = $reports->name;
			$row[] = $reports->phone;
			$row[] = $reports->city;
			$row[] = $reports->customer;
			$row[] = $reports->plan;
			$row[] = $reports->entry_date;
			//$row[] = $reports->pincode;
			
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->reports->count_la_all(),
						"recordsFiltered" => $this->reports->count_la_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	
	
	public function life_advisor_export_CSV()
	{
		@ini_set( 'max_execution_time', '0' );
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Life_Advisor_Reports_" . date("d-m-Y h:i:s"). ".csv";
		//$result = $this->reports->export_la_data();
		$result = $this->reports->export_lifeadvisor_data();
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}
    
	/*=====================*/
	
	
	/**
	*
	* Request a Relationship Manager Report
	*=====================
	*/
	public function relationship_manager_report_landing()
	{
		if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'onlineleads' || $_SERVER['PHP_AUTH_PW'] != 'group') {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }
		
		//Set template Title
		$title = 'Request a Relationship Manager Report Details';
		$this->data['title'] = $title;
		$this->template->set('title', $title);
		//Load the view file
		$this->template->load('template/admin_template', 'reports/relationship_manager_report', $this->data);
	}

	public function relationship_manager_report_page()
	{
		$list = $this->reports->get_rm_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $reports) {
			$no++;
			$row = array();
			$row[] = $reports->entry_id;
			$row[] = $reports->name;
			$row[] = $reports->phone;
			$row[] = $reports->email;
			$row[] = $reports->city;
			$row[] = $reports->company_name;
			$row[] = $reports->plan;
			$row[] = $reports->entry_date;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->reports->count_rm_all(),
						"recordsFiltered" => $this->reports->count_rm_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function relationship_manager_export_CSV()
	{
		@ini_set( 'max_execution_time', '0' );
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Relationship_Manager_Reports_" . date("d-m-Y h:i:s"). ".csv";
		$result = $this->reports->export_rm_data();
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}
    
	/*=====================*/
	
	
	/**
	*
	* Contact Us Report
	*=====================
	*/
	public function contact_us_report_landing()
	{
		if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'onlineleads' || $_SERVER['PHP_AUTH_PW'] != 'onlinequery') {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }
		
		//Set template Title
		$title = 'Contact Us Report Details';
		$this->data['title'] = $title;
		$this->template->set('title', $title);
		//Load the view file
		$this->template->load('template/admin_template', 'reports/contact_us_report', $this->data);
	}
	
    public function contact_us_report_landing_new() {
        if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'onlineleads' || $_SERVER['PHP_AUTH_PW'] != 'onlinequery') {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }

        //Set template Title
        $title = 'Contact Us Report Details';
        $this->data['title'] = $title;
        $this->template->set('title', $title);
        //Load the view file
        $this->template->load('template/admin_template', 'reports/contact_us_report_new', $this->data);
    }

	public function contact_us_report_page()
	{
		$list = $this->reports->get_cu_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $reports) {
			$no++;
			$row = array();
			$row[] = $reports->entry_id;
			$row[] = $reports->feedback_type;
			$row[] = $reports->name;
			$row[] = $reports->email;
			$row[] = $reports->phone;
			$row[] = $reports->feedback;
			$row[] = $reports->entry_date;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->reports->count_cu_all(),
						"recordsFiltered" => $this->reports->count_cu_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	public function contact_us_report_page_new() {
        $list = $this->reports->get_cu_datatables_new();
		$this->load->helper('string');
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $reports) {
            $no++;
            $row = array();
            $row[] = $reports->policyno;
            $row[] = $reports->dob;
            $row[] = $reports->contactno;
            $row[] = $reports->emailid;
            $row[] = $reports->srgrouptitle;
            $row[] = $reports->srtypetitle;
            if (!empty($reports->feedback)) {
                $feedbackdata = strip_slashes($reports->feedback);
                $row[] = "$feedbackdata";
            } else {
                $row[] = "";
            }
			$row[] = str_replace('{filedir_23}', "//MUM-BO-S070/SubmitedDocument/", $reports->filepath);
            $row[] = str_replace('{filedir_23}', base_url() . 'assets/images/uploads/contactus/', $reports->filepath);
            $row[] = $reports->srresponse;
            $row[] = $reports->entry_date;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->reports->count_cu_all_new(),
            "recordsFiltered" => $this->reports->count_cu_filtered_new(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
	
	
	public function contact_us_export_CSV()
	{
		@ini_set( 'max_execution_time', '0' );
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Contact_Us_Reports_" . date("d-m-Y h:i:s"). ".csv";
		$result = $this->reports->export_cu_data();
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}
	
	public function contact_us_export_CSV_new() {
        @ini_set('max_execution_time', '0');
        $this->load->dbutil();
		$this->load->helper('string');
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Contact_Us_Reports_" . date("d-m-Y h:i:s") . ".csv";
        $result = $this->reports->export_cu_data_new();
        // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        // force_download($filename, $data);       
        $filename = "sr_report.csv";
		header("Content-Description: File Transfer");
        header('Content-Disposition: attachment; filename=' . $filename);
        header('Content-type: application/csv');
        $fp = fopen('php://output', 'w');
        fputcsv($fp, array('policyno', 'dob', 'contactno', 'emailid', 'srgrouptitle', 'srtypetitle', 'feedback', 'Server Path', 'srresponse', 'createddate'));
        foreach ($result as $reports) {
            $row = array();
            $row[] = $reports->policyno;
            $row[] = $reports->dob;
            $row[] = $reports->contactno;
            $row[] = $reports->emailid;
            $row[] = $reports->srgrouptitle;
            $row[] = $reports->srtypetitle;
            if (!empty($reports->feedback)) {
                $feedbackdata = strip_slashes($reports->feedback);
                $row[] = "$feedbackdata";
            } else {
                $row[] = "";
            }
            $row[] = str_replace('{filedir_23}', "//MUM-BO-S218/SubmitedDocument/", $reports->filepath);            
            $row[] = $reports->srresponse;
            $row[] = $reports->entry_date;
            fputcsv($fp, $row);
        }
        fclose($fp);        
        exit;
    }
    
	/*=====================*/
	
	
	/**
	*
	* Do not call registry Report
	*=====================
	*/
	public function donotcall_registry_report_landing()
	{
		if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'onlineleads' || $_SERVER['PHP_AUTH_PW'] != 'donotcall') {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }
		//Set template Title
		$title = 'Do Not Call Registry Report Details';
		$this->data['title'] = $title;
		$this->template->set('title', $title);
		//Load the view file
		$this->template->load('template/admin_template', 'reports/donotcall_registry_report', $this->data);
	}

	public function donotcall_registry_report_page()
	{
		$list = $this->reports->get_dr_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $reports) {
			$no++;
			$row = array();
			$row[] = $reports->entry_id;
			$row[] = $reports->name;
			$row[] = $reports->phone;			
			$row[] = $reports->email;
			$row[] = $reports->city;
			$row[] = $reports->entry_date;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->reports->count_dr_all(),
						"recordsFiltered" => $this->reports->count_dr_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function donotcall_registry_export_CSV()
	{
		@ini_set( 'max_execution_time', '0' );
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Do_Not_Call_Registry_Reports_" . date("d-m-Y h:i:s"). ".csv";
		$result = $this->reports->export_dr_data();
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}
    
	/*=====================*/
	
	
	/**
	*
	* Website Feedback Report
	*=====================
	*/
	public function website_feedback_report_landing()
	{
		if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'websitefeedback' || $_SERVER['PHP_AUTH_PW'] != 'websitefeedback@kli!@#') {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }
		//Set template Title
		$title = 'Website Feedback Report Details';
		$this->data['title'] = $title;
		$this->template->set('title', $title);
		//Load the view file
		$this->template->load('template/admin_template', 'reports/website_feedback_report', $this->data);
	}

	public function website_feedback_report_page()
	{
		$list = $this->reports->get_wf_datatables();
		$data = array();
		$no = $_POST['start'];
				
		foreach ($list as $reports) {
			$no++;
			$row = array();
			$row[] = $reports->entry_id;
			$row[] = $reports->meet_your_needs;
			$row[] = $reports->easy_to_find;
			$row[] = $reports->time_taken;
			$row[] = $reports->visually_appealing;
			$row[] = $reports->easy_to_understand;
			$row[] = $reports->recommend_website;
			$row[] = $reports->name;					
			$row[] = $reports->email;
			$row[] = $reports->phone;
			$row[] = $reports->city;
			$row[] = $reports->entry_date;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->reports->count_wf_all(),
						"recordsFiltered" => $this->reports->count_wf_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function website_feedback_export_CSV()
	{
		@ini_set( 'max_execution_time', '0' );
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Website_Feedback_Reports_" . date("d-m-Y h:i:s"). ".csv";
		$result = $this->reports->export_wf_data();
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}
    
	/*=====================*/
	
	
	/**
	*
	* I am looking For Report
	*=====================
	*/
	public function iamlooking_for_report_landing()
	{
		if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'onlineleads' || $_SERVER['PHP_AUTH_PW'] != 'needcalc') {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }
		//Set template Title
		$title = 'Looking For Report Details';
		$this->data['title'] = $title;
		$this->template->set('title', $title);
		//Load the view file
		$this->template->load('template/admin_template', 'reports/iamlooking_for_report', $this->data);
	}

	public function iamlooking_for_report_page()
	{
		$list = $this->reports->get_if_datatables();
		$data = array();
		$no = $_POST['start'];
				
		foreach ($list as $reports) {
			$no++;
			$row = array();
			$row[] = $reports->entry_id;
			$row[] = $reports->segment;
			$row[] = $reports->age_group;
			$row[] = $reports->name;					
			$row[] = $reports->phone;
			$row[] = $reports->city;
			$row[] = $reports->entry_date;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->reports->count_if_all(),
						"recordsFiltered" => $this->reports->count_if_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function iamlooking_for_export_CSV()
	{
		@ini_set( 'max_execution_time', '0' );
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "I_AM_Looking_For_Reports_" . date("d-m-Y h:i:s"). ".csv";
		//$result = $this->reports->export_if_data();
		$result = $this->reports->export_if_data_lookingfor();
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}
    
	/*=====================*/
	
	
	/**
	*
	* Get Call Report
	*=====================
	*/
	public function get_call_report_landing()
	{
		if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'onlineleads' || $_SERVER['PHP_AUTH_PW'] != 'getacall') {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }
		//Set template Title
		$title = 'Get A Call Report Details';
		$this->data['title'] = $title;
		$this->template->set('title', $title);
		//Load the view file
		$this->template->load('template/admin_template', 'reports/get_call_report', $this->data);
	}

	public function get_call_report_page()
	{
		$list = $this->reports->get_gc_datatables();
		$data = array();
		$no = $_POST['start'];
				
		foreach ($list as $reports) {
			$no++;
			$row = array();
			$row[] = $reports->entry_id;
			$row[] = $reports->name;
			$row[] = $reports->phone;
			$row[] = $reports->email;					
			$row[] = $reports->query;
			$row[] = $reports->entry_date;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->reports->count_gc_all(),
						"recordsFiltered" => $this->reports->count_gc_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function get_call_export_CSV()
	{
		@ini_set( 'max_execution_time', '0' );
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Get_A_Call_" . date("d-m-Y h:i:s"). ".csv";
		$result = $this->reports->export_gc_data();
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}
    
	/*=====================*/
	
	/**
	*
	* Life Advisor Join us Report
	**/
	
	public function get_life_advisor_joinus_report(){
		 if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'onlineleads' || $_SERVER['PHP_AUTH_PW'] != 'advisorrecruitment') {
            header('WWW-Authenticate: Basic realm="MyProject"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }
		//Set template Title
		$title = 'Life Advisor Join Us Report Details';
		$this->data['title'] = $title;
		$this->template->set('title', $title);
		//Load the view file
		$this->template->load('template/admin_template', 'reports/life_advisor_joinus_report', $this->data);
	}
	
	/**
	* 
	* Loading the data in the Grid by ajax	
	*/
    public function get_life_advisor_joinus_report_page()
	{
		$list = $this->reports->get_lifeadvisor_joinus_datatables();	
		$data = array();
		$no = $_POST['start'];
				
		foreach ($list as $reports) {
			$no++;
			$row = array();
			$row[] = $reports->entry_id;
			$row[] = $reports->name;
			$row[] = $reports->dob;
			$row[] = $reports->phone;
			$row[] = $reports->email;					
			$row[] = $reports->city;
			$row[] = $reports->pincode;
			$row[] = $reports->entry_date;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->reports->count_lifeadvisor_joinus_all(),
						"recordsFiltered" => $this->reports->count_lifeadvisor_joinus_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	/**
	* @Download Action from the Grid
	* Exporting the life advisor information into CSV file	
	*/
	

	public function get_life_advisor_joinus_export_CSV()
	{
		@ini_set( 'max_execution_time', '0' );
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Life_Advisor_Joinus_" . date("d-m-Y h:i:s"). ".csv";
		$result = $this->reports->export_lifeadvisor_joinus_data();
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}
	/*=====================*/	
	
	public function campaign_report() {

        if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != "cvmteam" || $_SERVER['PHP_AUTH_PW'] != "etermplanteam") {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }

        //Set template Title
        $title = 'Campaign Report Details';
        $this->data['title'] = $title;
        $this->template->set('title', $title);
        //Load the view file
        $this->template->load('template/admin_template', 'reports/user_campaign_report', $this->data);
    }
	
	 public function thatswhy1_report() {
        if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != "cvmteam" || $_SERVER['PHP_AUTH_PW'] != "thatswhy1") {
            header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
            header('HTTP/1.0 401 Unauthorized');
            die('Access Denied');
        }

        //Set template Title
        $title = 'Thastwhy1 Campaign Report Details';
        $this->data['title'] = $title;
        $this->template->set('title', $title);
        //Load the view file
        $this->template->load('template/admin_template', 'reports/user_thatswhy1_report', $this->data);
    }
	
	public function thatswhy2_report() {
		if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != "cvmteam" || $_SERVER['PHP_AUTH_PW'] != "thatswhy2") {
			header('WWW-Authenticate: Basic realm="Kotak Life Insurance"');
			header('HTTP/1.0 401 Unauthorized');
			die('Access Denied');
		}
		//Set template Title
		$title = 'Thatswhy2 Campaign Report Details';
		$this->data['title'] = $title;
		$this->template->set('title', $title);
		//Load the view file
		$this->template->load('template/admin_template', 'reports/user_thatswhy2_report', $this->data);
	}

    public function campaign_report_page($camapign_nam) {
        $list = $this->reports->get_campaign_datatables($camapign_nam);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $reports) {
			$type = ($reports->type==0)?"ONLINE":"CALLBACK";
            $no++;
            $row = array();
            $row[] = $reports->entry_id;
            $row[] = $reports->name;
            $row[] = $reports->mobile;
            $row[] = $reports->city;
            $row[] = $reports->source;
            $row[] = $reports->utmsource;
            $row[] = $reports->utmmedium;
			$row[] = $reports->utmcampaign;
			$row[] = $type;
			$row[] = $reports->utmkeyword;
			$row[] = $reports->device;			
            $row[] = $reports->entry_date;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->reports->count_campaign_all($camapign_nam),
            "recordsFiltered" => $this->reports->count_campaign_filtered($camapign_nam),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function campaign_export_CSV($camapign_nam) {
        @ini_set('max_execution_time', '0');
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Campaign_Reports_" . date("d-m-Y h:i:s") . ".csv";
        $result = $this->reports->export_campaign_data($camapign_nam);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }
	
}