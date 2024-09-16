<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financial_tools_calculators extends CI_Controller {
	
	//data variable
	private $data = array();
	
	function __construct() {
		parent::__construct();

		//Load Libraries
		$this->load->database();
		$this->load->helper('security'); //for xss clean up
		$this->load->helper('common'); //for checking menu active
		//$this->load->model('insuranceplan_model');

		
		//Load Initial Breadcrumbs
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Life Insurance', site_url());
		
		//Load the common CSS files
		$this->data['CSS_FILES'] = unserialize(CSS_FILES);
		
		//Load the common JS files
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		$this->load->model('insurance_guide_model');

		array_push($this->data['JS_FILES'], 'assets/js/insurance-guide.js', 'assets/js/social-share.js');
	}
	public function ulip_calculator()
    {
       //$this->load->model('Financial_tools_calculators');
        $this->template->set('title', 'ULIP Calculator');
        $this->load->helper('form');
		$this->template->load('template/template', 'calculator/investment', $this->data);

    }
	
	public function retirement_calculator()
    {
		$topicSlug = secure_input_data('retirement');

		//clean incoming data
		$guideTopicCode = $this->security->xss_clean($topicSlug);

		// Get insurance guide topic details
		$this->data['topicInfo'] = $this->insurance_guide_model->get_guide_topic_details($guideTopicCode);

		//Insurance guide topic
		$topicName = '';
		if($this->data['topicInfo']){
			$topicName = $this->data['topicInfo']->title;
		} else {
			show_404();
		}
       //$this->load->model('Financial_tools_calculators');
        $this->template->set('title', 'Retirement');
        $this->load->helper('form');
		$this->template->load('template/template', 'calculator/retirement', $this->data);
	//	array_push($this->data['JS_FILES'], 'assets/js/insurance-guide.js', 'assets/js/social-share.js');

    }
		public function income_tax_calculator()
    {
       //$this->load->model('Financial_tools_calculators');
        $this->template->set('title', 'Income Tax');
        $this->load->helper('form');
		$this->template->load('template/template', 'calculator/income-tax', $this->data);

    }
	
public function compound_interest_calculator()
    {
		
       //$this->load->model('Financial_tools_calculators');
        $this->template->set('title', 'Compound Interest');
        $this->load->helper('form');
		$this->template->load('template/template', 'calculator/compound-interest', $this->data);

    }
public function sip_calculator()
    {
		
       //$this->load->model('Financial_tools_calculators');
        $this->template->set('title', 'SIP Calculator');
        $this->load->helper('form');
		$this->template->load('template/template', 'calculator/sip-calculator', $this->data);

    }
	public function bmi_calculator()
    {
		
       //$this->load->model('Financial_tools_calculators');
        $this->template->set('title', 'BMI Calculator');
        $this->load->helper('form');
		$this->template->load('template/template', 'calculator/bmi-calculator', $this->data);

    }
	public function hra_calculator()
    {
		
       //$this->load->model('Financial_tools_calculators');
        $this->template->set('title', 'HRA Calculator');
        $this->load->helper('form');
		$this->template->load('template/template', 'calculator/hra-calculator', $this->data);

    }
	public function fd_calculator()
	{
		 $this->template->set('title', 'FD Calculator');
		 $this->load->helper('form');
		 $this->template->load('template/template', 'calculator/fd-calculator', $this->data);
 
	 }
	 public function rd_calculator()
	 {
		
		  $this->template->set('title', 'RD Calculator');
		  $this->load->helper('form');
		  $this->template->load('template/new-template', 'calculator/rd-calculator',$this->data);
  
	  }
	  public function gratuity_calculator()
	  {
		  
		  $this->template->set('title', 'Gratuity Calculator');
		  $this->load->helper('form');
		  $this->template->load('template/template', 'calculator/gratuity-calculator', $this->data);
  
	  }
	  public function ppf_calculator()
	  {
		  
		  $this->template->set('title', 'PPF Calculator');
		  $this->load->helper('form');
		  $this->template->load('template/template', 'calculator/ppf-calculator', $this->data);
  
	  }
	  public function dummy_calculator()
	  {
		$this->load->library('common');
		 $actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  
		$url = explode('/', $actual_link_url);
		 $lastPart = array_pop($url);
	 $endpoint=base_url().'api/'.$lastPart;
	$headers = array('Content-Type:application/json');
	$makecall = $this->common->callAPI('GET', $endpoint, array(), $headers);
	$result = json_decode($makecall);
	$status=$result->status;  
	if($status==200)
	{
		if($result->data->user_details!="")
		{
			//$i=1;
			foreach($result->data->user_details as $info)

			{ 
				$this->data['contents']=$info->content;
				$this->data['seo']=$info->seo;
				$this->data['schema']=$info->schema;
			}
		}
	}
		 
		  $this->template->load('template/new-template', 'calculator/dummy-calculator', $this->data);
  
	  }
	  public function index()
	  {
		  
		  $this->template->set('title', '');
		  $this->load->helper('form');
		  $this->template->load('template/template', 'calculator/financial-tools-calculator', $this->data);
  
	  }public function dass_21_calculator()
	  {
		  
		  $this->template->set('title', 'PPF Calculator');
		  $this->load->helper('form');
		  $this->template->load('template/template', 'calculator/dass-calculator', $this->data);
  
	  }
	  
	  public function term_insurance_calculator()
	  {
		  
		  $this->template->set('title', 'Term Insurance Calculator');
		  $this->load->helper('form');
		  $this->template->load('template/template', 'calculator/term-insurance-calculator', $this->data);
  
	  }
	  
}