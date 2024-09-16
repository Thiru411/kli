<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Term_insurance extends CI_Controller {
	
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
				array_push($this->data['JS_FILES'], 'assets/js/insurance-guide.js', 'assets/js/social-share.js');


	}
	public function kotak_e_term(){
        $data=$this->commmon_method_insurance_plans('protection-plans','kotak-e-term','Kotak e-Term');
        $this->template->load('template/template', 'term-insurance/term-insurance-detail', $data);
    }
	public function kotak_term_plan(){
        $data=$this->commmon_method_online_plans('online-term-insurance-plans','kotak-term-plan','Kotak Term Plan');
        $this->template->load('template/template', 'term-insurance/term-insurance-detail', $data);
    }
    public function kotak_saral_jeevan_bima(){
        $data=$this->commmon_method_insurance_plans('protection-plans','kotak-saral-jeevan-bima','Kotak Saral Jeevan Bima');
        $this->template->load('template/template', 'term-insurance/term-insurance-detail', $data);
    }

    function kotak_protect_india(){
        $data=$this->commmon_method_online_plans('online-term-insurance-plans','kotak-protect-india','Kotak Protect India');
        $this->template->load('template/template', 'term-insurance/term-insurance-detail', $data);
    }
    function critical_illness(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
	  function term_insurance_premium_calculator(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function disability_insurance(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function claim_settlement_ratio(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function term_insurance_for_housewife(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);    
		$this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
   function one_crore_term_insurance(){
	    $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function term_insurance_for_senior_citizens(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('about-life-insurance',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function term_insurance_for_self_employed(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function term_plan_with_return_of_premium(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function whole_life_insurance(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('about-life-insurance',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function term_insurance_benefits(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function term_insurance_for_nri(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function covid_19_term_insurance(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function term_insurance_age_limit(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function what_is_term_insurance(){
        $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function single_premium_term_insurance(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('about-life-insurance',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function term_insurance_tax_benefits(){
        $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    function term_insurance_for_smokers(){
        $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
	function medical_test_for_term_insurance(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
	 function two_crore_term_insurance(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
		$this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
	 }
	 

function fifty_lakh_term_insurance(){
        $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
	function five_crore_term_insurance(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
	function term_insurance_terminology(){
      $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
	function term_insurance_for_women(){
        $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
	
	
	
	
		function seventyfive_lakh_term_insurance(){
				$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
				 $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
			 }
		function one_five_crore_term_insurance(){
				$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
				 $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
			 }


function term_insurance_grace_period(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
	function smart_term_plan(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }

	function term_insurance_and_maturity_benefits(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
   
    	function what_is_term_insurance_in_hindi(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('protection',$articleSlug);
        $this->template->load('template/template', 'term-insurance/term-insurance-detail-view', $data);	
    }
    
    
    
    
















    function commmon_method_online_plans($categorySlug,$urlSlug,$breadcumbslug){
        //clean incoming data
		$categoryURLSlug = $this->security->xss_clean($categorySlug);
		$urlSlug = $this->security->xss_clean($urlSlug);
		
		if(strlen($urlSlug) > 0 && $urlSlug != "") {
			//Check If url slug is available
			$planMainInfo = $this->insuranceplan_model->get_plan_main_info($urlSlug);
			if(!empty($planMainInfo)){
			$this->data['plan_url_schema']=$planMainInfo->plan_url_schema;
			if(isset($planMainInfo->plan_type_id)) {
				$planTypeInfo = $this->insuranceplan_model->get_plan_type_info_from_ID($planMainInfo->plan_type_id);
			} 
			if(isset($planMainInfo->entry_id) && isset($planTypeInfo->entry_id) && $planTypeInfo->entry_id > 0 && $categoryURLSlug == $planTypeInfo->plan_type_slug) {
				$this->data['planMainInfo'] = $planMainInfo; //get Insurance Main Info				
				$this->data['planHowItWorksInfo'] = $this->insuranceplan_model->get_plan_how_it_works_info($planMainInfo->entry_id); //get How it Works Gird Data	
				$this->data['planKeyFeaturesAndBenefits'] = $this->insuranceplan_model->get_plan_key_features_and_benefits_info($planMainInfo->entry_id); //get Features and Benefits Gird Data
				$this->data['planEligibilityInfo'] = $this->insuranceplan_model->get_plan_eligibility_info($planMainInfo->entry_id); //get Eligibility Gird Data
				$this->data['planAdditionalProtectionRidersInfo'] = $this->insuranceplan_model->get_plan_additional_protection_riders_info($planMainInfo->entry_id); //get Protection Riders Gird Data
				$this->data['planDownloadsInfo'] = $this->insuranceplan_model->get_plan_downloads_info($planMainInfo->entry_id); //get Downloads Gird Data
				$this->data['similarPlans'] = $this->insuranceplan_model->get_similar_plans($planTypeInfo->entry_id, $planMainInfo->entry_id,$planMainInfo->plan_type); //get Similar Plans
				$this->data['planCategoryURL'] = $planTypeInfo->plan_type_slug; //Plan Category URL
				$this->data['mainPlanType'] = 'Term Insurance'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = TI_MODULE_LINK; //used for similar plan URL

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
				//if($planMainInfo->title!='Kotak Guaranteed Savings Plan')
												//$this->breadcrumb->add_crumb('Online Plans', base_url(OP_MODULE_LINK));
	
			//}
				$this->breadcrumb->add_crumb('Term Insurance Plans', base_url(TI_MODULE_LINK));
				$this->breadcrumb->add_crumb($breadcumbslug);
				$this->data['planAdditionalBenefits']=array();
				//Set template Title
				$this->template->set('title', $planMainInfo->title);
				//Load the view file
				return $this->data;
			} else {
				//404 Page
				show_404();
			}
		} else {
			//404 Page
			show_404();
		}
	}else{
		
	}
    }


    function commmon_method_insurance_plans($categorySlug,$urlSlug,$breadcumbslug){
    	
		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');

		//clean incoming data
		$categoryURLSlug = $this->security->xss_clean($categorySlug);
		$urlSlug = $this->security->xss_clean($urlSlug); 
		//echo "hi";die;
		if(strlen($urlSlug) > 0 && $urlSlug != "") {
			//Check If url slug is available
			$planMainInfo = $this->insuranceplan_model->get_plan_main_info($urlSlug);
			$this->data['plan_url_schema']=$planMainInfo->plan_url_schema;
			if(isset($planMainInfo->plan_type_id)) {
				$planTypeInfo = $this->insuranceplan_model->get_plan_type_info_from_ID($planMainInfo->plan_type_id);
			}
			if(isset($planMainInfo->entry_id) && isset($planTypeInfo->entry_id) && $planTypeInfo->entry_id > 0 && $categoryURLSlug == $planTypeInfo->plan_type_slug) {
				$this->data['planMainInfo'] = $planMainInfo; //get Insurance Main Info		
				$this->data['planHowItWorksInfo'] = $this->insuranceplan_model->get_plan_how_it_works_info($planMainInfo->entry_id); //get How it Works Gird Data	
				$this->data['planKeyFeaturesAndBenefits'] = $this->insuranceplan_model->get_plan_key_features_and_benefits_info($planMainInfo->entry_id); //get Features and Benefits Gird Data
				
				$this->data['planAdditionalBenefits'] = $this->insuranceplan_model->get_plan_additional_benefits_info($planMainInfo->entry_id); //get additional Benefits Gird Data
				
				$this->data['planEligibilityInfo'] = $this->insuranceplan_model->get_plan_eligibility_info($planMainInfo->entry_id); //get Eligibility Gird Data
				$this->data['planAdditionalProtectionRidersInfo'] = $this->insuranceplan_model->get_plan_additional_protection_riders_info($planMainInfo->entry_id); //get Protection Riders Gird Data
				$this->data['planDownloadsInfo'] = $this->insuranceplan_model->get_plan_downloads_info($planMainInfo->entry_id); //get Downloads Gird Data
				$this->data['similarPlans'] = $this->insuranceplan_model->get_similar_plans($planTypeInfo->entry_id, $planMainInfo->entry_id,$planMainInfo->plan_type); //get Similar Plans
				$this->data['planCategoryURL'] = $planTypeInfo->plan_type_slug; //Plan Category URL
				$this->data['mainPlanType'] = 'Term Insurance'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = TI_MODULE_LINK; //used for similar plan URL
		
				/* Life Advisor */
				$this->data['planType'] = $planTypeInfo->plan_type_name; //Plan Name
				$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
				$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
				$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
				$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
				
				//Add the Breadcrumbs
				//$this->breadcrumb->add_crumb('Life Insurance Plan & Policy', base_url(IP_MODULE_LINK));
	//			$this->breadcrumb->add_crumb('Life Insurance Plan & Policy', base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-assured-savings-plan'));
				$this->breadcrumb->add_crumb($planTypeInfo->plan_type_name, base_url(TI_MODULE_LINK));
				$this->breadcrumb->add_crumb($breadcumbslug);

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
				$convonixSettingsArray = array(
									"@context"			=>	ORG_CONTEXT, 
            						//"@type" 			=> 	ORG_TYPE_PRODUCT,
            						"description"		=> 	isset($planMainInfo->plan_description) ? strip_tags($planMainInfo->plan_description) : '',
									"name"				=> 	isset($planMainInfo->title) ? $planMainInfo->title : '',
									"image"				=> 	(isset($planMainInfo->plan_image) && $planMainInfo->plan_image != '') ? str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $planMainInfo->plan_image) : "",
									"brand" 			=> 	array("@type"		=> ORG_TYPE_ORGANIZATION,
							  								 	  "name"		=> ORG_NAME)
           						);
			//	$this->data['convonixSettings'] = json_encode($convonixSettingsArray, JSON_UNESCAPED_SLASHES);
				
				//Set template Title
				$this->template->set('title', $planMainInfo->title);
				//Load the view file
				return $this->data;
			} else {
				//404 Page
				show_404();
			}
		} else {
			//404 Page
			show_404();
		}
    }


    public function commmon_method_insurance_guides($topicSlug,$articleSlug){
		$this->data['planAdditionalBenefits']=array();
		$this->load->model('insurance_guide_model'); 
$dateModified='';
       $this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$topicSlug = secure_input_data($topicSlug);
		  $articleSlug = secure_input_data($articleSlug);
		  $this->data['latest_slug']="";
		  $this->data['latest_slug']=$articleSlug;
		//Clean incoming data
		$guideTopicCode = $this->security->xss_clean($topicSlug);
		// Get article full details
		$this->data['articlesInfo'] = $this->insurance_guide_model->get_articles_for_term_insurance($articleSlug);
		$articleTitle	= 	'';
		$topicName		=	'';
		$entry_id		=	0;
		$viewed_count 	=	0;
		$page_bread_crumb='';
		$trackingInfo   =	array();	
		if($this->data['articlesInfo']){

			 $articleInfo 	=	$this->data['articlesInfo'];
			$articleTitle 	=	$articleInfo->article_title;
			 $entry_id 	=	$articleInfo->entry_id;


			$this->data['blogTitle']=$articleTitle;
			
			$topicName		=	$articleInfo->article_title;
			$viewed_count 	=	$articleInfo->viewed_counts;

			if($articleInfo->updated_on){
				$dateModified 	=	$articleInfo->updated_on;
				}else{
					$dateModified=$articleInfo->edit_date;
				}						
		} else {
			
			show_404();
		}
		$this->data['dateModified']=$dateModified;

		$this->data['trackingInfo'] = json_encode($trackingInfo);

		// To update viewed count
		$viewed_count	=	$viewed_count + 1;
		
		$this->insurance_guide_model->update_view_count_term_insurance($entry_id, $viewed_count);
		
		/**********New Blog Page*****/
// Get also read articles list info within same topic
		$this->data['alsoReadArticlesInfo'] = $this->insurance_guide_model->get_also_read_articles_new($guideTopicCode, $entry_id);
		$this->data['alsoReadArticlesInfoAll'] = $this->insurance_guide_model->get_also_read_articles_all($guideTopicCode, $entry_id);
/**********New Blog Page*****/


		// Get previous article info within same topic
		$this->data['previousArticleInfo'] = $this->insurance_guide_model->get_prev_next_article($guideTopicCode, $entry_id, 'previous');

		// Get next article info within same topic
		$this->data['nextArticleInfo'] = $this->insurance_guide_model->get_prev_next_article($guideTopicCode, $entry_id, 'next');

		// Get tag lists of this article
		$this->data['articleTagsInfo'] = $this->insurance_guide_model->get_article_tags($entry_id);

		// Get related plan lists of this article
		$this->data['articleRePlansInfo'] = $this->insurance_guide_model->get_article_related_plans($entry_id);
		
		$this->data['articleetermPlansInfo'] = $this->insurance_guide_model->get_article_related_eterm_plans($entry_id);
		$this->data['writters'] = $this->insurance_guide_model->get_reviewdetails('Normal Blog');

		//echo "<pre>";
		//print_r($this->data['articleRePlansInfo']);
		//die;

		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Term Insurance Plans', base_url(TI_MODULE_LINK));
		//$this->breadcrumb->add_crumb($topicName, base_url('insurance-guide/'.$guideTopicCode));
		//$this->breadcrumb->add_crumb($articleTitle);
		$bread_crumb="";
		if($page_bread_crumb!=""){$bread_crumb=$page_bread_crumb;}
		else{$bread_crumb=$articleTitle;}
		$this->breadcrumb->add_crumb($bread_crumb);

		//Set template Title
		$this->template->set('title', 'Insurance Guide - '.$topicName.' - '.$articleTitle);
			$this->data['CategoryName']=$topicName;
			
		//Load the view file
		
		return $this->data;
		//var_dump($this->data['articlesInfo']);
			
		//Load the view file
	}
	function index(){
        $this->load->model('insuranceplan_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$this->template->load('template/template', 'term-insurance/term-plan', $this->data);
  }
 
}