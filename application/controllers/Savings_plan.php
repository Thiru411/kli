<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Savings_plan extends CI_Controller {
	
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
	
	public function kotak_assured_savings_plan(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-assured-savings-plan');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }

    function kotak_guaranteed_savings_plan_online(){
        $data=$this->commmon_method_online_plans('savings-plan','kotak-guaranteed-savings-plan-online');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
    function kotak_guaranteed_fortune_builder(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-guaranteed-fortune-builder');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
    function kotak_fortune_maximiser(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-fortune-maximiser');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_assured_income_accelerator(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-assured-income-accelerator');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_get_assured_income_now(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-get-assured-income-now');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_health_maximiser(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-health-maximiser');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_premier_endowment_plan(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-premier-endowment-plan');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_premier_life_plan(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-premier-life-plan');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_pos_bachat_bima(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-pos-bachat-bima');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_sampoorn_bima_micro_insurance_plan(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-sampoorn-bima-micro-insurance-plan');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_premier_income_plan(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-premier-income-plan');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_smartlife_plan(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-smartlife-plan');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_classic_endowment_plan(){
        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-classic-endowment-plan');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function kotak_premier_moneyback_plan(){

        $data=$this->commmon_method_insurance_plans('savings-and-investments-plans','kotak-premier-moneyback-plan');
		$this->template->load('template/template', 'savings-plan/saving-insurance-detail', $data);
    }
	function what_is_savings_plan(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }
	function tips_to_plan_your_savings(){
      $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }
	/* function eight_important_things_to_remember_while_investing_in_a_savings_plan(){
        $data=$this->commmon_method_insurance_guides('savingstax','important-things-to-remember-while-investing-in-a-savings-plan');
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }*/
	
function eight_important_things_to_remember_while_investing_in_a_savings_plan(){
       $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }
	function how_to_create_wealth_through_a_savings_plan(){
     $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }
	function complete_savings_plan_for_low_income_earners(){
     $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }
	function how_to_boost_your_savings_with_guaranteed_results(){
     $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }
	function what_are_deferred_savings_plans(){
		$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }
	function importance_of_savings_plan_you_need_to_know(){
			$articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }
	function best_savings_plan_for_the_middle_class_in_india(){
        $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }
	function who_should_invest_in_savings_plan(){
 $articleSlug=$this->uri->segment(2);
        $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
        $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
    }

	function what_is_savings_plan_in_hindi(){
		$articleSlug=$this->uri->segment(2);
			   $data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
			   $this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
		   }


		   public function top_benefits_of_savings_plan(){
			$articleSlug=$this->uri->segment(2);
			$data=$this->commmon_method_insurance_guides('savingstax',$articleSlug);
			$this->template->load('template/template', 'savings-plan/saving-insurance-guide.php', $data);	
	 
		   }
	

    function commmon_method_online_plans($categorySlug,$urlSlug){
        //clean incoming data
		$categoryURLSlug = $this->security->xss_clean($categorySlug);
		$urlSlug = $this->security->xss_clean($urlSlug);
		$this->data['plan_url_schema']=array();
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
				$this->data['planEligibilityInfo'] = $this->insuranceplan_model->get_plan_eligibility_info($planMainInfo->entry_id); //get Eligibility Gird Data
				$this->data['planAdditionalProtectionRidersInfo'] = $this->insuranceplan_model->get_plan_additional_protection_riders_info($planMainInfo->entry_id); //get Protection Riders Gird Data
				$this->data['planDownloadsInfo'] = $this->insuranceplan_model->get_plan_downloads_info($planMainInfo->entry_id); //get Downloads Gird Data
				$this->data['similarPlans'] = $this->insuranceplan_model->get_similar_plans($planTypeInfo->entry_id, $planMainInfo->entry_id,$planMainInfo->plan_type); //get Similar Plans
				$this->data['planCategoryURL'] = $planTypeInfo->plan_type_slug; //Plan Category URL
				$this->data['mainPlanType'] = 'Savings Plan'; //used for checking the Main Plan Type
				
				$this->data['mainPlanURL'] = SP_MODULE_LINK; //used for similar plan URL

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
				$this->breadcrumb->add_crumb('Savings Plan', base_url(SP_MODULE_LINK));
				$this->breadcrumb->add_crumb($planMainInfo->title);
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
    }


    function commmon_method_insurance_plans($categorySlug,$urlSlug){
    	
		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');

		//clean incoming data
		$categoryURLSlug = $this->security->xss_clean($categorySlug);
		$urlSlug = $this->security->xss_clean($urlSlug); 
		//echo "hi";die;
		$this->data['plan_url_schema']=array();

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
				$this->data['mainPlanType'] = 'Savings Plan'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = SP_MODULE_LINK; //used for similar plan URL
		
				/* Life Advisor */
				$this->data['planType'] = $planTypeInfo->plan_type_name; //Plan Name
				$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
				$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
				$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
				$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
				
				//Add the Breadcrumbs
				//$this->breadcrumb->add_crumb('Life Insurance Plan & Policy', base_url(IP_MODULE_LINK));
	//			$this->breadcrumb->add_crumb('Life Insurance Plan & Policy', base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-assured-savings-plan'));
				$this->breadcrumb->add_crumb('Savings Plan', base_url(SP_MODULE_LINK));
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
				$convonixSettingsArray = array(
									"@context"			=>	ORG_CONTEXT, 
            						//"@type" 			=> 	ORG_TYPE_PRODUCT,
            						"description"		=> 	isset($planMainInfo->plan_description) ? strip_tags($planMainInfo->plan_description) : '',
									"name"				=> 	isset($planMainInfo->title) ? $planMainInfo->title : '',
									"image"				=> 	(isset($planMainInfo->plan_image) && $planMainInfo->plan_image != '') ? str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $planMainInfo->plan_image) : "",
									"brand" 			=> 	array("@type"		=> ORG_TYPE_ORGANIZATION,
							  								 	  "name"		=> ORG_NAME)
           						);
				//$this->data['convonixSettings'] = json_encode($convonixSettingsArray, JSON_UNESCAPED_SLASHES);
				
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

       $this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$topicSlug = secure_input_data($topicSlug);
		  $articleSlug = secure_input_data($articleSlug);
		//Clean incoming data
		$guideTopicCode = $this->security->xss_clean($topicSlug);
		$dateModified="";

		// Get article full details
		$this->data['articlesInfo'] = $this->insurance_guide_model->get_articles_for_savings_plan($articleSlug);
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
		
		$this->insurance_guide_model->update_view_count_savings_plan($entry_id, $viewed_count);
		
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
		$this->breadcrumb->add_crumb('Savings Plan', base_url('savings-plan'));
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
	public function index(){

		$this->load->model('insurance_guide_model');
		$urlSlug = 'savingstax';
		$topicSlug = secure_input_data($urlSlug);
		$guideTopicCode = $this->security->xss_clean($topicSlug);
		$this->data['topicInfo'] = $this->insurance_guide_model->get_guide_topic_details($guideTopicCode);
		$topicName = '';
		if($this->data['topicInfo']){
			$topicName = $this->data['topicInfo']->title;
		} else {
			show_404();
		}
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
		$this->template->load('template/template', 'savings-plan/gsp', $this->data);
	}
   }