<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LifeAdvisor extends CI_Controller {
	private $data = array();
	function __construct(){
		parent::__construct();
	
		//Load Libraries
		$this->load->database();
		$this->load->helper('common'); //for checking menu active
		$this->load->model('LifeAdvisor_model');
		
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Life Insurance', base_url());
		$this->data['CSS_FILES'] = unserialize(CSS_FILES);
		//array_push($this->data['CSS_FILES'], 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css');
		
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		//array_push($this->data['JS_FILES'], 'https://code.highcharts.com/highcharts.js', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', 'assets/js/life-advisor.js');
		
		$this->load->model('requestlifeadvisor_model');
		$this->data['cities'] = $this->requestlifeadvisor_model->get_cities();
		
		if(get_cookie('kotak_customer_type')){
			$cusType = get_cookie('kotak_customer_type');
		}else{
			$cusType = "new_customer";
		}
		
		if($cusType == "new_customer"){
			$gaCat = "New Customer";
		}else if($cusType == "existing_customer"){
			$gaCat = "Existing Customer";
		}else if($cusType == "life_advisor"){
			$gaCat = "Life Advisor";
		}
		$this->data['gaCat'] = $gaCat;
	}
	
	public function HiringProcess(){
		$pgtitle = 'Hiring Process';
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', 'life_advisor/HiringProcess_view', $this->data);
	}
	
	public function CareerAsLifeAdvisor(){
		array_push($this->data['JS_FILES'], 'assets/js/life-advisor.js');
		$pgtitle = 'Career as Life Advisor';
		
		$this->data['successStories'] = $this->LifeAdvisor_model->get_SuccessStories();
		$this->data['executiveAdvisors'] = $this->LifeAdvisor_model->get_ExecutiveAdvisors();
		$this->data['homeVideos'] = $this->LifeAdvisor_model->get_HomeVideos();
		
		//$this->data['successStories'] = "";
		//$this->data['executiveAdvisors'] = "";
		
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', 'life_advisor/CareerAsLifeAdvisor_view', $this->data);
	}
	
	public function MoreExecutiveAdvisors(){
		array_push($this->data['JS_FILES'], 'assets/js/life-advisor.js');
		$pgtitle = 'Our Executive Advisors';
		//$this->data['executiveAdvisors'] = $this->LifeAdvisor_model->get_ExecutiveAdvisors();
		//$this->data['executiveAdvisorsCount'] = count($this->LifeAdvisor_model->get_ExecutiveAdvisors());
		$this->breadcrumb->add_crumb('Career as Life Advisor', base_url('career-as-life-advisor'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', 'life_advisor/ExecutiveAdvisorsDetails_view_new', $this->data);
	}
	
	public function LifeAdvisorFaqs(){
		array_push($this->data['JS_FILES'], 'assets/js/life-advisor.js');
		$pgtitle = 'FAQs';
		//$this->data['lifeAdvisorFAQ'] = $this->LifeAdvisor_model->get_LifeAdvisorFAQs();
		/* added by binu  jan 12, above line commented*/
		$lifeAdvisorFaqInfos = $this->LifeAdvisor_model->get_LifeAdvisorFAQs();
        $finalInfo = array();
        if (count($lifeAdvisorFaqInfos)) {
            $i = 0;
            foreach ($lifeAdvisorFaqInfos as $faq) {               
                $finalInfo[$i]['question'] = $faq->question;
                $finalInfo[$i]['answer'] = $faq->answer;
                $finalInfo[$i]['schemadescription'] = strip_tags($faq->answer);
                $finalInfo[$i]['org_name'] = ORG_NAME;
                $finalInfo[$i]['org_img_url'] = ORG_IMG_URL;
                $finalInfo[$i]['org_content_url'] = ORG_CONTENT_URL;
                $finalInfo[$i]['org_img_alt'] = ORG_IMG_ALT;
                $i++;
            }
        }
        $this->data['lifeAdvisorFAQ'] = $finalInfo;
		/* added by binu  jan 12, ends here */
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', 'life_advisor/Faqs_view', $this->data);
	}
	
	public function LifeAdvisorSearch() {
		array_push($this->data['JS_FILES'], 'assets/js/life-advisor.js');
		$pgtitle = 'Know and Verify Life Advisor';
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', 'life_advisor/Search_view', $this->data);
	}
}