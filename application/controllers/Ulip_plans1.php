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
	public function index(){
		echo "hi";
	}
	
	 public function common_method($topicSlugName,$articleSlug){
		 
       $this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$topicSlug = secure_input_data($topicSlugName);
		  $articleSlug = secure_input_data($articleSlug);

		//Clean incoming data
		$guideTopicCode = $this->security->xss_clean($topicSlug);
		  $guideArticleSlug = $this->security->xss_clean($artSlug);
		// Get article full details
		$this->data['articlesInfo'] = $this->insurance_guide_model->get_article_details($articleSlug);
		//Insurance guide topic
		$articleTitle	= 	'';
		$topicName		=	'';
		$entry_id		=	0;
		$viewed_count 	=	0;
		$page_bread_crumb='';
		$trackingInfo   =	array();	
		if(count($this->data['articlesInfo'])>0){
			$articleInfo 	=	$this->data['articlesInfo'];
			$articleTitle 	=	$articleInfo->article_title;
			$topicName		=	$articleInfo->topic_title;
			$entry_id		=	$articleInfo->entry_id;
			$viewed_count	=	(int)$articleInfo->viewed_count;
			$page_bread_crumb=$articleInfo->breadcrumb;

			$datePublished 	=	date('Ymd', $articleInfo->entry_date);
			$dateModified 	=	date('Ymd', $articleInfo->edit_date);
			$description 	=	$articleInfo->short_description;
			$short_description 	=	$articleInfo->short_description;
			$headline 		=	$articleInfo->article_title;
			
			$button_text 		=	$articleInfo->button_text;
			$button_url 		=	$articleInfo->button_url;
			
			$imgURL 		=	str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $articleInfo->article_image);
			$imgName 		=	str_replace('{filedir_12}', '', $articleInfo->article_image);
			
			if (!empty($articleInfo->article_share_image)) {
                $shareImageURL = str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $articleInfo->article_share_image);
            } else if (!empty($articleInfo->article_image)) {
                $shareImageURL = str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $articleInfo->article_image);
            } else {
                $shareImageURL = "";
            } 
		    $this->data['shareImageURL'] = $shareImageURL; 	
			
			$imgHeight 		=	'425px';
			$imgWidth 		=	'745px';
			$pageTitle 		=	'Kotak Life Insurance - Insurance Guide - '.$topicName.' - '.$articleTitle;
			$trackingInfo 	=	array(	'entry_id' => $entry_id, 
										'date_published' => $datePublished,
										'date_modified' => $dateModified,
										'description' => $description,
										'headline' => $headline,
										'img_url' => $imgURL,
										'img_name' => $imgName,
										'img_height' => $imgHeight,
										'img_width' => $imgWidth,
										'page_title' => $pageTitle,
										'org_name' => ORG_NAME,
										'org_img_url' => ORG_IMG_URL,
										'org_content_url' => ORG_CONTENT_URL,
										'org_img_alt' => ORG_IMG_ALT,
										'short_description' => $short_description,
										'button_text' => $button_text,
										'button_url' => $button_url
										);
										
		} else {
			
			show_404();
		}

		$this->data['trackingInfo'] = json_encode($trackingInfo);

		// To update viewed count
		$viewed_count	=	$viewed_count + 1;
		$this->insurance_guide_model->update_view_count($entry_id, $viewed_count);
		
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
		
		//echo "<pre>";
		//print_r($this->data['articleRePlansInfo']);
		//die;

		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Insurance Guide', base_url(ULIP_PLAN_LINK));
		$this->breadcrumb->add_crumb($topicName, base_url('insurance-guide/'.$guideTopicCode));
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
	}		
	

	public function benefits_of_ulip_in_hindi(){
		echo "ec";exit;
		$data=$this->common_method('wealth-creation','benefits-of-ulip-in-hindi');
				$this->template->load('template/template', 'ulip_plan/benefits-of-ulip-in-hindi', $data);

		$this->template->load('template/template', 'ulip_plan/benefits_of_ulip_in_hindi', $data);

	}


	public function what_is_ulip_plan(){
		//$data=$this->common_method('wealth-creation','what-is-ulip-and-its-benefits');
		//$this->template->load('template/template', 'ulip_plan/what-is-ulip-and-its-benefits', $data);
	}
	public function how_ulip_works(){
		$data=$this->common_method('retirement','what-is-sum-assuredin-a-unit-linked-insurance-plan');
		$this->template->load('template/template', 'ulip_plan/how-does-ulip-work-in-india', $data);
	}
	public function ulip_renewal(){
		$data=$this->common_method('wealth-creation','what-is-ulip-renewal');
		$this->template->load('template/template', 'ulip_plan/benefits-of-ulip-in-hindi', $data);
	}
	public function ulip_nav(){
		$data=$this->common_method('wealth-creation','how-is-ulip-nav-calculated-how-is-the-return-calculated-in-ulip');var_dump($data);
		$this->template->load('template/template', 'ulip_plan/benefits-of-ulip-in-hindi', $data);
	}
	public function how_is_cagr_calculated_in_ulip()
    { 
     		$data=$this->common_method('wealth-creation','how-is-cagr-calculated-in-ulip');

		//Load the view file
		$this->template->load('template/template', 'ulip_plan/how-is-cagr-calculated-in-ulip', $this->data);
    }
	

public function importance_of_portfolio_management()
    { 
            		$data=$this->common_method('wealth-creation','importance-of-portfolio-management');

		//Load the view file
		$this->template->load('template/template', 'ulip_plan/importance-of-portfolio-management', $this->data);
    }


public function minimum_lock_in_period_for_ulip()
    { 
            		$data=$this->common_method('retirement','minimum-lock-in-period-for-ulip');

		//Load the view file
		$this->template->load('template/template', 'ulip_plan/importance-of-portfolio-management', $this->data);
    }

public function benefits_of_ulip()
    { 
        $data=$this->common_method('retirement','minimum-lock-in-period-for-ulip');
		$this->template->load('template/template', 'ulip_plan/importance-of-portfolio-management', $this->data);
    }


    public function common_method_plans($categorySlug,$urlSlug){
	 $categorySlug = secure_input_data($categorySlug);
		$urlSlug1 = secure_input_data($urlSlug);
		
		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');

		//clean incoming data
		$categoryURLSlug = $this->security->xss_clean($categorySlug);
		$urlSlug = $this->security->xss_clean($urlSlug);
	  
		if(strlen($urlSlug) > 0 && $urlSlug != "") {
			 
			//Check If url slug is available
			$planMainInfo = $this->insuranceplan_model->get_plan_main_info($urlSlug1);
			$this->data['plan_url_schema']=$planMainInfo->plan_url_schema;
			if(isset($planMainInfo->plan_type_id)) {
				$planTypeInfo = $this->insuranceplan_model->get_plan_type_info_from_ID($planMainInfo->plan_type_id);
			} 
			if(isset($planMainInfo->entry_id) && isset($planTypeInfo->entry_id) && $planTypeInfo->entry_id > 0 && $categoryURLSlug == $planTypeInfo->plan_type_slug && $planTypeInfo->plan_main_type == 'Online Plans') {
				$this->data['planMainInfo'] = $planMainInfo; //get Insurance Main Info				
				$this->data['planHowItWorksInfo'] = $this->insuranceplan_model->get_plan_how_it_works_info($planMainInfo->entry_id); //get How it Works Gird Data	
				$this->data['planKeyFeaturesAndBenefits'] = $this->insuranceplan_model->get_plan_key_features_and_benefits_info($planMainInfo->entry_id); //get Features and Benefits Gird Data
				$this->data['planEligibilityInfo'] = $this->insuranceplan_model->get_plan_eligibility_info($planMainInfo->entry_id); //get Eligibility Gird Data
				$this->data['planAdditionalProtectionRidersInfo'] = $this->insuranceplan_model->get_plan_additional_protection_riders_info($planMainInfo->entry_id); //get Protection Riders Gird Data
				$this->data['planDownloadsInfo'] = $this->insuranceplan_model->get_plan_downloads_info($planMainInfo->entry_id); //get Downloads Gird Data
				$this->data['similarPlans'] = $this->insuranceplan_model->get_similar_plans($planTypeInfo->entry_id, $planMainInfo->entry_id); //get Similar Plans
				$this->data['planCategoryURL'] = $planTypeInfo->plan_type_slug; //Plan Category URL
				$this->data['mainPlanType'] = 'Online Plans'; //used for checking the Main Plan Type
				$this->data['mainPlanURL'] = OP_MODULE_LINK; //used for similar plan URL

				//Convonix Seo Stuff
				$convonixSettingsArray = array(
									"@context"			=>	ORG_CONTEXT, 
            						"@type" 			=> 	ORG_TYPE_PRODUCT,
            						"description"		=> 	isset($planMainInfo->plan_description) ? strip_tags($planMainInfo->plan_description) : '',
									"name"				=> 	isset($planMainInfo->title) ? $planMainInfo->title : '',
									"image"				=> 	(isset($planMainInfo->plan_image) && $planMainInfo->plan_image != '') ? str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $planMainInfo->plan_image) : "",
									"brand" 			=> 	array("@type"		=> ORG_TYPE_ORGANIZATION,
							  								 	  "name"		=> ORG_NAME)
           						);
				$this->data['convonixSettings'] = json_encode($convonixSettingsArray, JSON_UNESCAPED_SLASHES);
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
	
	
	public function kotak_invest_maxima()
	{
		$data=$this->common_method_plans('savings-and-investments-plans','kotak-invest-maxima');
		$this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
	
	} 
	
	
	
	public function kotak_single_invest_plus()
	{
		$data=$this->common_method_plans('savings-and-investments-plans','kotak_single_invest_plus');
		$this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
	
	} 
	
	
	
	public function kotak_single_invest_advantage()
	{
		$data=$this->common_method_plans('savings-and-investments-plans','kotak_single_invest_advantage');
		$this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
	
	} 
	
	
	public function kotak_platinum_plan()
	{
		$data=$this->common_method_plans('savings-and-investments-plans','kotak_platinum_plan');
		$this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
	
	} 
	
	
	public function kotak_ace_investment_plan()
	{
		$data=$this->common_method_plans('savings-and-investments-plans','kotak_ace_investment_plan');
		$this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
	
	} 
	
	
	

	
	
	public function kotak_wealth_optima_plan()
	{
		$data=$this->common_method_plans('savings-and-investments-plans','kotak_wealth_optima_plan');
		$this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$this->template->load('template/template', 'ulip_plan/kotak_invest_maxima', $data);
	
	} 
	
	
	
	
	
	public function kotak_e_invest()
    { 
	
			$data=$this->common_method_plans('online-term-insurance-plans','kotak-invest-maxima');
			
        $this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$this->template->load('template/template', 'insurance_plan/kotak-e-invest', $data);
    }
	
	public function how_ulip_works()
    { 
			$data=$this->common_method('retirement','how_ulip_works');
		$this->template->load('template/template', 'insurance_plan/kotak-e-invest', $data);
    }

}
?>
