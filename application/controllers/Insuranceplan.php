	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insuranceplan extends CI_Controller {
	
	//data variable
	private $data = array();
	
	function __construct() {
		parent::__construct();

		//Load Libraries
		$this->load->database();
		$this->load->helper('security'); //for xss clean up
		$this->load->helper('common'); //for checking menu active
		$this->load->model('insuranceplan_model');
		$this->load->model('insurance_guide_model');
		$this->load->model('requestlifeadvisor_model');
		
		//Load Initial Breadcrumbs
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Life Insurance', base_url());
		
		//Load the common CSS files
		$this->data['CSS_FILES'] = unserialize(CSS_FILES);
		
		//Load the common JS files
		$this->data['JS_FILES'] = unserialize(JS_FILES);
	}
	public function ulip_category()
    {
        $this->load->model('insuranceplan_model');
        $this->template->set('title', 'Term Plan');
        $this->load->helper('form');
		$this->template->load('template/template', 'insurance_plan/ulip-plan', $this->data);
    }
	
	
	public function term_plan()
    {
        $this->load->model('insuranceplan_model');
        $this->template->set('title', 'Term Plan');
        $this->load->helper('form');
		$this->load->model('site_model');
		$ratingdetails=$this->site_model->getRecordsDetails(array('pagename'=>'term_plan'),'kotak_feedback');
		$this->data['rating_count']=0;
		if($ratingdetails){
			$this->data['rating_count']=count($ratingdetails);
		}
		$this->template->load('template/template', 'insurance_plan/term-plan', $this->data);
    }
	
	//Plan Detail 
	public function insurance_plan_detail($categorySlug, $urlSlug) {

		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');
		$this->data['planAdditionalBenefits']='';
		//clean incoming data
		$categoryURLSlug = $this->security->xss_clean($categorySlug);
		$urlSlug = $this->security->xss_clean($urlSlug); 
		//echo "hi";die;
		if(strlen($urlSlug) > 0 && $urlSlug != "") {
			//Check If url slug is available
			$planMainInfo = $this->insuranceplan_model->get_plan_main_info($urlSlug);
			$this->data['plan_url_schema']="";

			if(isset($planMainInfo->plan_type_id)) {
				$this->data['plan_url_schema']=$planMainInfo->plan_url_schema;

				$planTypeInfo = $this->insuranceplan_model->get_plan_type_info_from_ID($planMainInfo->plan_type_id);
			}
			if(!empty($planMainInfo)) {
				$this->data['planMainInfo'] = $planMainInfo; //get Insurance Main Info		
				$this->data['planHowItWorksInfo'] = $this->insuranceplan_model->get_plan_how_it_works_info($planMainInfo->entry_id); //get How it Works Gird Data	
				$this->data['planKeyFeaturesAndBenefits'] = $this->insuranceplan_model->get_plan_key_features_and_benefits_info($planMainInfo->entry_id); //get Features and Benefits Gird Data
				
				$this->data['planAdditionalBenefits'] = $this->insuranceplan_model->get_plan_additional_benefits_info($planMainInfo->entry_id); //get additional Benefits Gird Data
				
				$this->data['planEligibilityInfo'] = $this->insuranceplan_model->get_plan_eligibility_info($planMainInfo->entry_id); //get Eligibility Gird Data
				$this->data['planAdditionalProtectionRidersInfo'] = $this->insuranceplan_model->get_plan_additional_protection_riders_info($planMainInfo->entry_id); //get Protection Riders Gird Data
				$this->data['planDownloadsInfo'] = $this->insuranceplan_model->get_plan_downloads_info($planMainInfo->entry_id); //get Downloads Gird Data
				$this->data['similarPlans'] = $this->insuranceplan_model->get_similar_plans($planTypeInfo->entry_id, $planMainInfo->entry_id,$planMainInfo->plan_type); //get Similar Plans
				$this->data['planCategoryURL'] = $planTypeInfo->plan_type_slug; //Plan Category URL
				$this->data['mainPlanType'] = 'Insurance Plans'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = IP_MODULE_LINK; //used for similar plan URL
		
				/* Life Advisor */
				$this->data['planType'] = $planTypeInfo->plan_type_name; //Plan Name
				$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
				$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
				$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
				$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
				
				//Add the Breadcrumbs
				//$this->breadcrumb->add_crumb('Life Insurance Plan & Policy', base_url(IP_MODULE_LINK));
	//			$this->breadcrumb->add_crumb('Life Insurance Plan & Policy', base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-assured-savings-plan'));
				$this->breadcrumb->add_crumb($planTypeInfo->plan_type_name, base_url(IP_MODULE_LINK.'/'.$planTypeInfo->plan_type_slug));
				$this->breadcrumb->add_crumb($planMainInfo->title);

				//Convonix Seo Stuff
				/*
									"aggregateRating" 	=> 	array("@type" 			=>	"AggregateRating",
														  	      "ratingValue" 	=>	"4.5",
														  	      "reviewCount" 	=>	"2"),
									"offers" 			=> 	array("@type" 			=> "AggregateOffer",
														  		  "highPrice" 		=> "100000000",
														  		  "lowPrice" 		=> "20000",
														  		  "priceCurrency" 	=> "INR")
				 */
				/*$convonixSettingsArray = array(
									"@context"			=>	ORG_CONTEXT, 
            						//"@type" 			=> 	ORG_TYPE_PRODUCT,
            						"description"		=> 	isset($planMainInfo->plan_description) ? strip_tags($planMainInfo->plan_description) : '',
									"name"				=> 	isset($planMainInfo->title) ? $planMainInfo->title : '',
									"image"				=> 	(isset($planMainInfo->plan_image) && $planMainInfo->plan_image != '') ? str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $planMainInfo->plan_image) : "",
									"brand" 			=> 	array("@type"		=> ORG_TYPE_ORGANIZATION,
							  								 	  "name"		=> ORG_NAME)
           						);
				$this->data['convonixSettings'] = json_encode($convonixSettingsArray, JSON_UNESCAPED_SLASHES);*/
				
				//Set template Title
				$this->template->set('title', $planMainInfo->title);
				//Load the view file
				$this->template->load('template/template', 'insurance_plan/insurance_detail_view', $this->data);
			} else {
				//404 Page
				show_404();
			}
		} else {
			//404 Page
			show_404();
		}
	}
	
	//Plan Category 
	public function insurance_plan_type_detail($urlSlug) {
		$this->data['category'] ='';
		//Load module specific JS File
		$this->data['moduleName']='';
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');
		//clean incoming data
		if($urlSlug=="retirement-plans"){
			$this->load->model('insuranceplan_model');
			$this->template->set('title', 'Retirement Plans');
			$this->load->helper('form');
			$this->template->load('template/new-template', 'insurance_plan/retirement-plans', $this->data);
		}else{
		$planTypeCode = $this->security->xss_clean($urlSlug);
		
		if(strlen($planTypeCode) > 0 && $planTypeCode != "") {
			//Check If url slug is available
			$planInfo = $this->insuranceplan_model->get_plan_type_info($planTypeCode);
		 	
			if(isset($planInfo->entry_id) && $planInfo->plan_main_type == 'Insurance Plans') {
				$this->data['planInfo'] = $planInfo; //get Insurance Type Info
				$this->data['insuraceTypePlanInfo'] = $this->insuranceplan_model->get_insurance_type_plan_info($planInfo->entry_id); //get Plan Info Gird Data
				$this->data['plans'] = $this->insuranceplan_model->get_plans($planInfo->entry_id); //get Plans Data
				$this->data['planCategoryURL'] = $planInfo->url_title; //Plan Category URL
				$this->data['planType'] = $planInfo->title; // Name of the Plan
				$this->data['plansSchema'] = "";//$planInfo->plans_schema; 
				$this->data['mainPlanType'] = 'Insurance Plans'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = IP_MODULE_LINK; //used for similar plan URL 
				
				/* Life Advisor */
				$this->data['planType'] = $planInfo->title; //Plan Name
				$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
				$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
				$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
				$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
				
				//Add the Breadcrumbs
				if($planInfo->title=='Child Insurance Plans'){
				$this->breadcrumb->add_crumb('Online Plans', base_url().'online-plans/');
				}else if($planInfo->title=='Savings Plan'){
					$this->breadcrumb->add_crumb('Life Insurance Plans', base_url().'insurance-plans/');
				
				}
				else if($planInfo->title=='Retirement and Pension Plans'){
					$this->breadcrumb->add_crumb('Life Insurance Plans', base_url().'online-plans/');
				
				}
              
                  else if($planInfo->title=='Retirement and Annuity Plans'){
					$this->breadcrumb->add_crumb('Life Insurance Plans', base_url().'online-plans/');
				}
				else{
				$this->breadcrumb->add_crumb('Life Insurance Plans', base_url());
				}
				if($planInfo->title=="Retirement and Pension Plans")
				{
					$this->breadcrumb->add_crumb('Best '.$planInfo->title);
				}
				else if($planInfo->title=="Savings and Investments Plans")
				{
					$this->breadcrumb->add_crumb('Best '.$planInfo->title);
				}
				else if($planInfo->title=="Term Insurance Protection Plans")
				{
					$this->breadcrumb->add_crumb('Best Protection Plans Term Insurance');
				}
				else if($planInfo->title=="Child Education Insurance Plans")
				{
					$this->breadcrumb->add_crumb('Best '.$planInfo->title);
				}
				else{
					$this->breadcrumb->add_crumb($planInfo->title);
				}
				
				
				//Set template Title
				$this->template->set('title', $planInfo->title);
				//Load the view file
				$this->template->load('template/template', 'insurance_plan/insurance_type_view', $this->data);
			} else {
				//404 Page
				show_404();
			}
		} else {
			//404 Page
			show_404();
		}
	}
	}
	
	//Plan Landing
	public function insurance_plan() {

		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');

		$this->data['plans'] = $this->insuranceplan_model->get_main_plans('Insurance Plans');
		$this->data['HealthPlanDetails'] ='';
		/* Life Advisor */
		$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
		$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
		$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
		$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
		$this->data['mainPlanType'] = 'Insurance Plans'; //used for checking the Main Plan Type
		$this->data['mainPlanURL'] = IP_MODULE_LINK; //used for similar plan URL
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Life Insurance Plans');
		
		//Set template Title
		$this->template->set('title', 'Insurance Plans');
		//Load the view file
		$this->template->load('template/template', 'insurance_plan/insurance_landing_view_new', $this->data);
	}

public function business_solutions() {
		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');

		$this->data['plans'] = $this->insuranceplan_model->get_main_plans('Insurance Plans');
		
		/* Life Advisor */
		$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
		$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
		$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
		$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
		$this->data['mainPlanType'] = 'Insurance Plans'; //used for checking the Main Plan Type
		$this->data['mainPlanURL'] = IP_MODULE_LINK; //used for similar plan URL
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Life Insurance Plans');
		
		//Set template Title
		$this->template->set('title', 'Insurance Plans');
		//Load the view file
		$this->template->load('template/template', 'insurance_plan/insurance_landing_view', $this->data);
	}
	//Plan Riders
	public function plan_riders() {
		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');

		$riderType = 'Insurance Plans';
		$this->data['riders'] = $this->insuranceplan_model->get_all_riders($riderType);
		
		/* Life Advisor */
		$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
		$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
		$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
		$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Life Insurance Plan & Policy', base_url(IP_MODULE_LINK));
		$this->breadcrumb->add_crumb('Insurance Plans Riders');
		
		//Set template Title
		$this->template->set('title', 'Insurance Plans Riders');
		//Load the view file
		$this->template->load('template/template', 'insurance_plan/insurance_riders_view', $this->data);
	}


	//Online Plan Landing
	public function online_plan() {

		$this->data['plans'] = $this->insuranceplan_model->get_main_plans('Online Plans');
		$this->data['HealthPlanDetails'] = $this->insuranceplan_model->get_main_plans('Insurance Plans');
		
		$this->data['mainPlanType'] = 'Online Plans'; //used for checking the Main Plan Type
		$this->data['mainPlanURL'] = OP_MODULE_LINK; //used for similar plan URL
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Online Plans');
		
		//Set template Title
		$this->template->set('title', 'Online Plans');
		//Load the view file
		$this->template->load('template/template', 'insurance_plan/insurance_landing_view', $this->data);
	}


	//Group Plan Landing
	public function group_plan() {
		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-group-plan.js');

		$this->data['plans'] = $this->insuranceplan_model->get_main_plans('Group Plans');
		
		/* Request a Relationship Manager */
		$this->data['HealthPlanDetails']='';
		$this->data['relationshipManagerCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
		$choiceOfPlans = $this->requestlifeadvisor_model->get_group_plans(); //get Group Plans
		$this->data['relationshipManagerPlans'] = explode("\n", $choiceOfPlans->field_list_items);
		$employeeCountListObject = $this->requestlifeadvisor_model->get_employee_count_values(); //get Employee Count Values
		$this->data['relationshipManagerEmployeeCount'] = explode("\n", $employeeCountListObject->field_list_items);
		$this->data['mainPlanType'] = 'Group Plans'; //used for checking the Main Plan Type
		$this->data['mainPlanURL'] = GP_MODULE_LINK; //used for similar plan URL
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Business Solutions');
		
		//Set template Title
		$this->template->set('title', 'Group Plans');
		//Load the view file
		$this->template->load('template/template', 'insurance_plan/insurance_landing_view', $this->data);
	}
 

	//Online Plan Category 
	public function online_plan_type_detail($urlSlug) {
		
		$this->data['planAdditionalBenefits']='';
		$this->data['plansSchema'] = "";
		if($urlSlug=="online-term-insurance-plans")
		{
			$urlSlug = 'protection';
			$topicSlug = secure_input_data($urlSlug);
			$guideTopicCode = $this->security->xss_clean($topicSlug);
			$this->data['topicInfo'] = $this->insurance_guide_model->get_guide_topic_details($guideTopicCode);
			$topicName = '';
			// if(count($this->data['topicInfo'])){
			// 	$topicName = $this->data['topicInfo']->title;
			// } else {
			// 	show_404();
			// }
		
			$this->data['randomTopicInfo'] = $this->insurance_guide_model->get_other_random_topics($guideTopicCode);
			$this->template->set('title', 'Insurance Plans - '.$topicName);
			$entry_id='0';
			$this->data['articleTagsInfo'] = $articleTagsInfo = $this->insurance_guide_model->get_article_tags($entry_id);
			$i = 0; 
			  foreach ($articleTagsInfo as $tag) 
			  { 
			  $link="https://kotaklife.com/insurance-guide/tag/".$tag->tag_url_title;
				  $this->data['n'] = '<a href=$link>$tag->tag_title</a>';
			  } 
			$planTypeCode = $this->security->xss_clean($urlSlug);
			
			$this->load->model('insuranceplan_model');
			$this->template->set('title', 'Term Plan');
			$this->load->helper('form');
			$this->load->model('site_model');
		$ratingdetails=$this->site_model->getRecordsDetails(array(),'kotak_feedback');
		$this->data['rating_count']=0;
		if($ratingdetails){
			$this->data['rating_count']=count($ratingdetails);
		}
			$this->template->load('template/template', 'insurance_plan/term-plan', $this->data);
		}
		else if($urlSlug=="ulip-plan")
		{
			$this->load->model('insuranceplan_model');
			$this->template->set('title', 'Term Plan');
			$this->load->helper('form');
			$this->template->load('template/template', 'insurance_plan/ulip-plan', $this->data);
		} 
		else if($urlSlug=="savings-plan")
		{			
			$urlSlug = 'savingstax';
			$topicSlug = secure_input_data($urlSlug);
			$guideTopicCode = $this->security->xss_clean($topicSlug);
			$this->data['topicInfo'] = $this->insurance_guide_model->get_guide_topic_details($guideTopicCode);
			$topicName = '';
			// if($this->data['topicInfo']){
			// 	$topicName = $this->data['topicInfo']->title;
			// } else {
			// 	show_404();
			// }
			$this->data['randomTopicInfo'] = $this->insurance_guide_model->get_other_random_topics($guideTopicCode);
			$this->template->set('title', 'Insurance Plans - '.$topicName);
			$entry_id='0';
			$this->data['articleTagsInfo'] = $articleTagsInfo = $this->insurance_guide_model->get_article_tags($entry_id);
			$i = 0; 
			  foreach ($articleTagsInfo as $tag) 
			  { 
			  $link="https://kotaklife.com/insurance-guide/tag/".$tag->tag_url_title;
				  $this->data['n'] = '<a href=$link>$tag->tag_title</a>';
			  } 
			$planTypeCode = $this->security->xss_clean($urlSlug);
			
			$this->load->model('insuranceplan_model');
			$this->template->set('title', 'Term Plan');
			$this->load->helper('form');
			$this->template->load('template/template', 'insurance_plan/gsp', $this->data);
		}
		else{
		//clean incoming data 
		$planTypeCode = $this->security->xss_clean($urlSlug);
		
		if(strlen($planTypeCode) > 0 && $planTypeCode != "") {
			//Check If url slug is available
			$planInfo = $this->insuranceplan_model->get_plan_type_info($planTypeCode);
			if(isset($planInfo->entry_id) && $planInfo->plan_main_type == 'Online Plans') {
				$this->data['planInfo'] = $planInfo; //get Insurance Type Info
				$this->data['insuraceTypePlanInfo'] = $this->insuranceplan_model->get_insurance_type_plan_info($planInfo->entry_id); //get Plan Info Gird Data
				$this->data['plans'] = $this->insuranceplan_model->get_plans($planInfo->entry_id); //get Plans Data
				$this->data['planCategoryURL'] = $planInfo->url_title; //Plan Category URL
				$this->data['planType'] = $planInfo->title; // Name of the Plan
				$this->data['mainPlanType'] = 'Online Plans'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = OP_MODULE_LINK; //used for similar plan URL 
				
				
				
				//Add the Breadcrumbs
				$this->breadcrumb->add_crumb('Online Plans', base_url(OP_MODULE_LINK));
				
				$this->breadcrumb->add_crumb($planInfo->title);
				
				//Set template Title
				$this->template->set('title', $planInfo->title);
				//Load the view file
				if($urlSlug!='online-term-insurance-plans%20'){
				$this->template->load('template/template', 'insurance_plan/insurance_type_view', $this->data);
				}
				else {
				//404 Page
				show_404();
			}
			} else {
				//404 Page
				show_404();
			}
		} else {
			//404 Page
			show_404();
		}
		}
	}


	//Group Plan Category 
	public function group_plan_type_detail($urlSlug) {
		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-group-plan.js');
		$this->data['plansSchema']='';
		//clean incoming data
		$planTypeCode = $this->security->xss_clean($urlSlug);
		
		if(strlen($planTypeCode) > 0 && $planTypeCode != "") {
			//Check If url slug is available
			$planInfo = $this->insuranceplan_model->get_plan_type_info($planTypeCode);
			if(isset($planInfo->entry_id) && $planInfo->plan_main_type == 'Group Plans') {
				$this->data['planInfo'] = $planInfo; //get Insurance Type Info
				$this->data['insuraceTypePlanInfo'] = $this->insuranceplan_model->get_insurance_type_plan_info($planInfo->entry_id); //get Plan Info Gird Data
				$this->data['plans'] = $this->insuranceplan_model->get_plans($planInfo->entry_id); //get Plans Data
				$this->data['planCategoryURL'] = $planInfo->url_title; //Plan Category URL
				$this->data['planType'] = $planInfo->title; // Name of the Plan
				$this->data['mainPlanType'] = 'Group Plans'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = GP_MODULE_LINK; //used for similar plan URL 
				
				/* Request a Relationship Manager */
				$this->data['planType'] = $planInfo->title; //Plan Name
				$this->data['relationshipManagerCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
				$choiceOfPlans = $this->requestlifeadvisor_model->get_group_plans(); //get Group Plans
				$this->data['relationshipManagerPlans'] = explode("\n", $choiceOfPlans->field_list_items);
				$employeeCountListObject = $this->requestlifeadvisor_model->get_employee_count_values(); //get Employee Count Values
				$this->data['relationshipManagerEmployeeCount'] = explode("\n", $employeeCountListObject->field_list_items);
				
				//Add the Breadcrumbs
				$this->breadcrumb->add_crumb('Group Insurance Plans', base_url(GP_MODULE_LINK));
				$this->breadcrumb->add_crumb($planInfo->title);
				
				//Set template Title
				$this->template->set('title', $planInfo->title);
				//Load the view file
				$this->template->load('template/template', 'insurance_plan/insurance_type_view', $this->data);
			} else {
				//404 Page
				show_404();
			}
		} else {
			//404 Page
			show_404();
		}
	}


	//Online Plan Detail 
	public function online_plan_detail($categorySlug, $urlSlug) {	

		//clean incoming data
		$categoryURLSlug = $this->security->xss_clean($categorySlug);
		$urlSlug = $this->security->xss_clean($urlSlug);
		$this->data['planAdditionalBenefits']='';
		if(strlen($urlSlug) > 0 && $urlSlug != "") {
			//Check If url slug is available
			$planMainInfo = $this->insuranceplan_model->get_plan_main_info($urlSlug);
			$this->data['plan_url_schema']="";

			if(isset($planMainInfo->plan_type_id)) {
				$this->data['plan_url_schema']=$planMainInfo->plan_url_schema;

				$planTypeInfo = $this->insuranceplan_model->get_plan_type_info_from_ID($planMainInfo->plan_type_id);
			} 
			if(!empty($planMainInfo)) {
				$this->data['planMainInfo'] = $planMainInfo; //get Insurance Main Info				
				$this->data['planHowItWorksInfo'] = $this->insuranceplan_model->get_plan_how_it_works_info($planMainInfo->entry_id); //get How it Works Gird Data	
				$this->data['planKeyFeaturesAndBenefits'] = $this->insuranceplan_model->get_plan_key_features_and_benefits_info($planMainInfo->entry_id); //get Features and Benefits Gird Data
				$this->data['planEligibilityInfo'] = $this->insuranceplan_model->get_plan_eligibility_info($planMainInfo->entry_id); //get Eligibility Gird Data
				$this->data['planAdditionalProtectionRidersInfo'] = $this->insuranceplan_model->get_plan_additional_protection_riders_info($planMainInfo->entry_id); //get Protection Riders Gird Data
				$this->data['planDownloadsInfo'] = $this->insuranceplan_model->get_plan_downloads_info($planMainInfo->entry_id); //get Downloads Gird Data
				$this->data['similarPlans'] = $this->insuranceplan_model->get_similar_plans($planTypeInfo->entry_id, $planMainInfo->entry_id,$planMainInfo->plan_type); //get Similar Plans
				$this->data['planCategoryURL'] = $planTypeInfo->plan_type_slug; //Plan Category URL
				$this->data['mainPlanType'] = 'Online Plans'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = OP_MODULE_LINK; //used for similar plan URL
				if($planMainInfo->title!='Kotak Lifetime Income Plan'){
				//Convonix Seo Stuff
				$convonixSettingsArray = array(
									"@context"			=>	ORG_CONTEXT, 
            						/*"@type" 			=> 	ORG_TYPE_PRODUCT,*/
            						"description"		=> 	isset($planMainInfo->plan_description) ? strip_tags($planMainInfo->plan_description) : '',
									"name"				=> 	isset($planMainInfo->title) ? $planMainInfo->title : '',
									"image"				=> 	(isset($planMainInfo->plan_image) && $planMainInfo->plan_image != '') ? str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $planMainInfo->plan_image) : "",
									"brand" 			=> 	array("@type"		=> ORG_TYPE_ORGANIZATION,
							  								 	  "name"		=> ORG_NAME)
           						);
				//$this->data['convonixSettings'] = json_encode($convonixSettingsArray, JSON_UNESCAPED_SLASHES);
				}
				//Add the Breadcrumbs
				//if($planMainInfo->title!='Kotak Guaranteed Savings Plan')
												//$this->breadcrumb->add_crumb('Online Plans', base_url(OP_MODULE_LINK));
	
			//}
				if($planTypeInfo->plan_type_slug=='online-term-insurance-plans'){
					$this->breadcrumb->add_crumb($planTypeInfo->plan_type_name, base_url('term-insurance'));

				}if($planTypeInfo->plan_type_slug=='retirement-pension-plans'){
					$this->breadcrumb->add_crumb($planTypeInfo->plan_type_name, base_url('retirement-and-pension-plans'));

				}else{
				$this->breadcrumb->add_crumb($planTypeInfo->plan_type_name, base_url(OP_MODULE_LINK.'/'.$planTypeInfo->plan_type_slug));
				}
				$this->breadcrumb->add_crumb($planMainInfo->title);
				
				//Set template Title
				$this->template->set('title', $planMainInfo->title);
				//Load the view file
				$this->template->load('template/template', 'insurance_plan/insurance_detail_view', $this->data);
			} else {
				//404 Page
				show_404();
			}
		} else {
			//404 Page
			show_404();
		}
	}


	//Group Plan Detail 
	public function group_plan_detail($categorySlug, $urlSlug) {
		$this->data['planAdditionalBenefits']='';
		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-group-plan.js');

		//clean incoming data
		$categoryURLSlug = $this->security->xss_clean($categorySlug);
		$urlSlug = $this->security->xss_clean($urlSlug);
		
		if(strlen($urlSlug) > 0 && $urlSlug != "") {
			//Check If url slug is available
			$planMainInfo = $this->insuranceplan_model->get_plan_main_info($urlSlug);
			
			
			$this->data['plan_url_schema']=$planMainInfo->plan_url_schema;
			if(isset($planMainInfo->plan_type_id)) {
				$planTypeInfo = $this->insuranceplan_model->get_plan_type_info_from_ID($planMainInfo->plan_type_id);
			}
			if(!empty($planMainInfo)) {
				$this->data['planMainInfo'] = $planMainInfo; //get Insurance Main Info				
				$this->data['planHowItWorksInfo'] = $this->insuranceplan_model->get_plan_how_it_works_info($planMainInfo->entry_id); //get How it Works Gird Data	
				$this->data['planKeyFeaturesAndBenefits'] = $this->insuranceplan_model->get_plan_key_features_and_benefits_info($planMainInfo->entry_id); //get Features and Benefits Gird Data
				$this->data['planEligibilityInfo'] = $this->insuranceplan_model->get_plan_eligibility_info($planMainInfo->entry_id); //get Eligibility Gird Data
				$this->data['planAdditionalProtectionRidersInfo'] = $this->insuranceplan_model->get_plan_additional_protection_riders_info($planMainInfo->entry_id); //get Protection Riders Gird Data
				$this->data['planDownloadsInfo'] = $this->insuranceplan_model->get_plan_downloads_info($planMainInfo->entry_id); //get Downloads Gird Data
				$this->data['similarPlans'] = $this->insuranceplan_model->get_similar_plans($planTypeInfo->entry_id, $planMainInfo->entry_id,$planMainInfo->plan_type); //get Similar Plans
				$this->data['planCategoryURL'] = $planTypeInfo->plan_type_slug; //Plan Category URL
				$this->data['mainPlanType'] = 'Group Plans'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = GP_MODULE_LINK; //used for similar plan URL

				/* Request a Relationship Manager */
				$this->data['planType'] = $planTypeInfo->plan_type_name; //Plan Name
				$this->data['relationshipManagerCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
				$choiceOfPlans = $this->requestlifeadvisor_model->get_group_plans(); //get Group Plans
				$this->data['relationshipManagerPlans'] = explode("\n", $choiceOfPlans->field_list_items);
				$employeeCountListObject = $this->requestlifeadvisor_model->get_employee_count_values(); //get Employee Count Values
				$this->data['relationshipManagerEmployeeCount'] = explode("\n", $employeeCountListObject->field_list_items);

				//Convonix Seo Stuff
				$convonixSettingsArray = array(
									"@context"			=>	ORG_CONTEXT, 
            						/*"@type" 			=> 	ORG_TYPE_PRODUCT,*/
            						"description"		=> 	isset($planMainInfo->plan_description) ? strip_tags($planMainInfo->plan_description) : '',
									"name"				=> 	isset($planMainInfo->title) ? $planMainInfo->title : '',
									"image"				=> 	(isset($planMainInfo->plan_image) && $planMainInfo->plan_image != '') ? str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $planMainInfo->plan_image) : "",
									"brand" 			=> 	array("@type"		=> ORG_TYPE_ORGANIZATION,
							  								 	  "name"		=> ORG_NAME)
           						);
				//$this->data['convonixSettings'] = json_encode($convonixSettingsArray, JSON_UNESCAPED_SLASHES);
				
				//Add the Breadcrumbs
				$this->breadcrumb->add_crumb('Group Insurance Plans', base_url(GP_MODULE_LINK));
				$this->breadcrumb->add_crumb($planTypeInfo->plan_type_name, base_url(GP_MODULE_LINK.'/'.$planTypeInfo->plan_type_slug));
				$this->breadcrumb->add_crumb($planMainInfo->title);
				
				//Set template Title
				$this->template->set('title', $planMainInfo->title);
				//Load the view file
				$this->template->load('template/template', 'insurance_plan/insurance_detail_view', $this->data);
			} else {
				//404 Page
				show_404();
			}
		} else {
			//404 Page
			show_404();
		}
	}

public function retirement_and_pension_plans(){
	
	
	$this->load->model('insuranceplan_model');
			$this->template->set('title', 'Retirement and Pension Plans');
			$this->load->helper('form');
			$this->template->load('template/new-template', 'insurance_plan/retirement-plans', $this->data);
}
public function retirement_and_pension_plans_details($urlSlug){
			//Load module specific JS File
			array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');
			$this->data['planAdditionalBenefits']='';
			//clean incoming data
			$categoryURLSlug = 'retirement-and-pension-plans';
			$urlSlug = $this->security->xss_clean($urlSlug); 
			//echo "hi";die;
			if(strlen($urlSlug) > 0 && $urlSlug != "") {
				//Check If url slug is available
				$planMainInfo = $this->insuranceplan_model->get_plan_main_info($urlSlug);
				$this->data['plan_url_schema']="";
	
				if(isset($planMainInfo->plan_type_id)) {
					$this->data['plan_url_schema']=$planMainInfo->plan_url_schema;
	
					$planTypeInfo = $this->insuranceplan_model->get_plan_type_info_from_ID($planMainInfo->plan_type_id);
				}
				if(!empty($planMainInfo)) {
					$this->data['planMainInfo'] = $planMainInfo; //get Insurance Main Info		
					$this->data['planHowItWorksInfo'] = $this->insuranceplan_model->get_plan_how_it_works_info($planMainInfo->entry_id); //get How it Works Gird Data	
					$this->data['planKeyFeaturesAndBenefits'] = $this->insuranceplan_model->get_plan_key_features_and_benefits_info($planMainInfo->entry_id); //get Features and Benefits Gird Data
					
					$this->data['planAdditionalBenefits'] = $this->insuranceplan_model->get_plan_additional_benefits_info($planMainInfo->entry_id); //get additional Benefits Gird Data
					
					$this->data['planEligibilityInfo'] = $this->insuranceplan_model->get_plan_eligibility_info($planMainInfo->entry_id); //get Eligibility Gird Data
					$this->data['planAdditionalProtectionRidersInfo'] = $this->insuranceplan_model->get_plan_additional_protection_riders_info($planMainInfo->entry_id); //get Protection Riders Gird Data
					$this->data['planDownloadsInfo'] = $this->insuranceplan_model->get_plan_downloads_info($planMainInfo->entry_id); //get Downloads Gird Data
					$this->data['similarPlans'] = $this->insuranceplan_model->get_similar_plans($planTypeInfo->entry_id, $planMainInfo->entry_id,$planMainInfo->plan_type); //get Similar Plans
					$this->data['planCategoryURL'] = $planTypeInfo->plan_type_slug; //Plan Category URL
					$this->data['mainPlanType'] = 'Insurance Plans'; //used for checking the Main Plan Type
					$this->data['mainPlanURL'] = IP_MODULE_LINK; //used for similar plan URL
			
					/* Life Advisor */
					$this->data['planType'] = $planTypeInfo->plan_type_name; //Plan Name
					$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
					$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
					$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
					$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
					
					$this->breadcrumb->add_crumb($planTypeInfo->plan_type_name, base_url('retirement-and-pension-plans'));
					$this->breadcrumb->add_crumb($planMainInfo->title);
	
				
					$this->template->set('title', $planMainInfo->title);
					$this->template->load('template/template', 'insurance_plan/retirement-plans-detail-view', $this->data);
				} else {
					show_404();
				}
			} else {
				show_404();
			}
		
}

}