<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ulip_plans extends CI_Controller {
	
	//data variable
	private $data = array();
	
	function __construct(){
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
		$this->breadcrumb->add_crumb('Life Insurance', site_url());
		
		//Load the common CSS files
		$this->data['CSS_FILES'] = unserialize(CSS_FILES);
		
		//Load the common JS files
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/insurance-guide.js', 'assets/js/social-share.js');
		
	}
	
	
	public function common_method($topicSlugName,$articleSlug){
		$this->data['planAdditionalBenefits']=array();
		$this->load->model('insurance_guide_model'); 

       $this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$topicSlug = secure_input_data($topicSlugName);
		  $articleSlug = secure_input_data($articleSlug);
		  $dateModified='';
		//Clean incoming data
		$guideTopicCode = $this->security->xss_clean($topicSlug);
		// Get article full details
		$this->data['articlesInfo'] = $this->insurance_guide_model->get_articles_for_ulip($articleSlug);
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
		
		$this->insurance_guide_model->update_view_count_ulip($entry_id, $viewed_count);
		
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
		$this->breadcrumb->add_crumb('Ulip Plans', base_url(ULIP_PLAN_LINK));
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
		
	
	public function what_is_ulip_plan(){
		       $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $data);
	}
	
	public function how_ulip_works(){
		$articleSlug=$this->uri->segment(2);
		$data=$this->common_method('retirement',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $data);
	}
	
	public function ulip_renewal(){
		  $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $data);
	}
	public function ulip_nav(){
	  $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $data);
	}
	
	public function best_investment_options_for_females()
    {
		  $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $data);
	}
	
	public function benefits_of_ulip_in_hindi()
    { 
	  $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $data);
	}
	public function ulip_returns_in_5_years()
    { 
	  $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $data);
	}
	 
	 public function ulip_returns_in_15_years()
    { 
	  $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $data);
	}
	public function ulip_returns_in_20_years()
    { 
	  $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $data);
	}
	
	public function how_is_cagr_calculated_in_ulip()
    { 
     		  $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);

		//Load the view file
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $this->data);
    }
	
	 public function ulip_returns_in_10_years()
    { 
	  $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $data);
	}
public function importance_of_portfolio_management()
    { 
          $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		//Load the view file
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $this->data);
    }
	
public function minimum_lock_in_period_for_ulip()
    { 
           $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		//Load the view file
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $this->data);
    }
	
public function benefits_of_ulip()
    { 
         $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $this->data);
    }

public function sum_assured_in_unit_linked_insurance_plan()
    { 
         $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $this->data);
    }
public function ulip_for_child_education()
    { 
		//$articleSlug=$this->uri->segment(2);

          $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $this->data);
    }
	
	
	public function ulip_for_retirement()
    { 
		//$articleSlug=$this->uri->segment(2);

         $articleSlug=$this->uri->segment(2);
		$data=$this->common_method('wealth-creation',$articleSlug);
		$this->template->load('template/template', 'ulip_plan/what_is_ulip_plan', $this->data);
    }
	
	
	
    public function common_method_plans($categorySlug,$urlSlug,$planType){
		$this->data['planAdditionalBenefits']=array(); 
	  $categorySlug = secure_input_data($categorySlug);
		$urlSlug = secure_input_data($urlSlug);
				//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');

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
 
			if(isset($planMainInfo->entry_id) && isset($planTypeInfo->entry_id) && $planTypeInfo->entry_id > 0 && $categoryURLSlug == $planTypeInfo->plan_type_slug) {
				$this->data['planMainInfo'] = $planMainInfo; //get Insurance Main Info				
				$this->data['planHowItWorksInfo'] = $this->insuranceplan_model->get_plan_how_it_works_info($planMainInfo->entry_id); //get How it Works Gird Data	
				$this->data['planKeyFeaturesAndBenefits'] = $this->insuranceplan_model->get_plan_key_features_and_benefits_info($planMainInfo->entry_id); //get Features and Benefits Gird Data
				$this->data['planEligibilityInfo'] = $this->insuranceplan_model->get_plan_eligibility_info($planMainInfo->entry_id); //get Eligibility Gird Data
				$this->data['planAdditionalProtectionRidersInfo'] = $this->insuranceplan_model->get_plan_additional_protection_riders_info($planMainInfo->entry_id); //get Protection Riders Gird Data
				$this->data['planDownloadsInfo'] = $this->insuranceplan_model->get_plan_downloads_info($planMainInfo->entry_id); //get Downloads Gird Data
				$this->data['similarPlans'] = $this->insuranceplan_model->get_similar_plans($planTypeInfo->entry_id, $planMainInfo->entry_id,$planMainInfo->plan_type); //get Similar Plans
				

				$this->data['planCategoryURL'] = $planTypeInfo->plan_type_slug; //Plan Category URL
				$this->data['mainPlanType'] = 'Ulips Plan'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = UP_MODULE_LINK; //used for similar pl

				//Convonix Seo Stuff
				/*$convonixSettingsArray = array(
									"@context"			=>	ORG_CONTEXT, 
            						"@type" 			=> 	ORG_TYPE_PRODUCT,
            						"description"		=> 	isset($planMainInfo->plan_description) ? strip_tags($planMainInfo->plan_description) : '',
									"name"				=> 	isset($planMainInfo->title) ? $planMainInfo->title : '',
									"image"				=> 	(isset($planMainInfo->plan_image) && $planMainInfo->plan_image != '') ? str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $planMainInfo->plan_image) : "",
									"brand" 			=> 	array("@type"		=> ORG_TYPE_ORGANIZATION,
							  								 	  "name"		=> ORG_NAME)
           						);
				$this->data['convonixSettings'] = json_encode($convonixSettingsArray, JSON_UNESCAPED_SLASHES);*/
				//var_dump($this->data);exit;
				
				//Add the Breadcrumbs
				$this->breadcrumb->add_crumb('Ulip Plans', base_url(ULIP_PLAN_LINK));
			//	$this->breadcrumb->add_crumb($planTypeInfo->plan_type_name, base_url(OP_MODULE_LINK.'/'.$planTypeInfo->plan_type_slug));
				$this->breadcrumb->add_crumb($planMainInfo->title);
				
				//Set template Title
				$this->template->set('title', $planMainInfo->title);
				return $this->data;
				//Add the Breadcrumbs
				
		}  else {
				//404 Page
				show_404();
		}}else {
			//404 Page
			show_404();
		}
	}
	
	public function kotak_e_invest()
    { 
	 
		$data=$this->common_method_plans('ulip-plan','kotak-e-invest','Online Plans');		 
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
    }

 public function kotak_invest_maxima()
    { 
	 
		$data=$this->common_method_plans('savings-and-investments-plans','kotak-invest-maxima','Insurance Plans');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
    }
	
	
 public function kotak_single_invest_plus()
    { 
		$data=$this->common_method_plans('savings-and-investments-plans','kotak-single-invest-plus','Insurance Plans');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
    } 
	
	
 public function kotak_single_invest_advantage()
    { 	 
		$data=$this->common_method_plans('savings-and-investments-plans','kotak-single-invest-advantage','Insurance Plans');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
    } 
	
	public function kotak_tulip(){
        $data=$this->common_method_plans('savings-and-investments-plans','kotak-tulip','Insurance Plans');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
    }
	public function kotak_platinum_plan()
    { 	 
		$data=$this->common_method_plans('savings-and-investments-plans','kotak-platinum-plan','Insurance Plans');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
    } 
	
	public function kotak_ace_investment_plan()
    { 	 
		$data=$this->common_method_plans('savings-and-investments-plans','kotak-ace-investment-plan','Insurance Plans');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
    }  
	public function kotak_wealth_optima_plan()
    { 	 
		$data=$this->common_method_plans('savings-and-investments-plans','kotak-wealth-optima-plan','Insurance Plans');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
    } 
	
}
