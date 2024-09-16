<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Happy_you extends CI_Controller {
	public $DB2;

		//data variable
        private $data = array();
	
        function __construct(){
            parent::__construct();
    
            //Load Libraries
            $this->load->database();
			$this->DB2= $this->load->database("second_db", TRUE);

            $this->load->helper('security'); //for xss clean up
            $this->load->helper('common'); //for checking menu active
          //  $this->load->model('happy_you_model');
            
            //Load Initial Breadcrumbs
            $this->breadcrumb->clear();
            $this->breadcrumb->add_crumb('Life Insurance', site_url());
            
            //Load the common CSS files
            $this->data['CSS_FILES'] = unserialize(CSS_FILES);
            
            //Load the common JS files
            $this->data['JS_FILES'] = unserialize(JS_FILES);
            //Load module specific JS File
            array_push($this->data['JS_FILES'], '', 'assets/js/social-share.js');
        }
	
	public function index(){
			$this->load->model('insurance_guide_model');

			$topicSlug="happy-you";

			$this->data['articlescount ']='';
	
			//clean incoming data
			$guideTopicCode = $topicSlug;
	
			// Get insurance guide topic details
			
	
			// Get other 4 random insurance guide topics
			$this->data['randomTopicInfo'] = $this->insurance_guide_model->get_other_random_topics($guideTopicCode);
	
			//Add the breadcrumbs
			//$this->breadcrumb->add_crumb('Happy You', base_url(HAPPY_YOU_MODULE_LINK));
			$this->breadcrumb->add_crumb('HappyYou');
			
			//Set template title
			//$this->template->set('title', 'Happy You - '.$topicName);
				$this->data['topicSlug']=$topicSlug;
			$this->data['articlescount']	= 	count($this->insurance_guide_model->get_articles_by_topic_count($topicSlug));
	
			//Load the view file
			$this->template->load('template/template', 'happyyouview/happyyoulanding_page', $this->data);
			
	}
	
	public function happy_you_blog(){
		 $articleSlug=$this->uri->segment(2);
        $this->data=$this->commmon_method_for_happy_you('protection',$articleSlug);
        $this->template->load('template/template', 'happyyouview/happyyouguidedetail', $this->data);
	}
	
	function commmon_method_for_happy_you($topicSlug,$articleSlug){
		$this->data['planAdditionalBenefits']=array();
		$this->load->model('insurance_guide_model'); 
       $this->load->model('site_model');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		 $topicSlug = secure_input_data($topicSlug);
		   $articleSlug = secure_input_data($articleSlug);
		//Clean incoming data
		$guideTopicCode = $this->security->xss_clean($topicSlug);
		// Get article full details
		$this->data['articlesInfo'] = $this->insurance_guide_model->get_articles_for_happy_you($articleSlug);
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

										
		} else {
			
			show_404();
		}

		$this->data['trackingInfo'] = json_encode($trackingInfo);

		// To update viewed count
		$viewed_count	=	$viewed_count + 1;
		
		$this->insurance_guide_model->update_view_count_happy_you($entry_id, $viewed_count);
		
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
		$this->data['writters'] = $this->insurance_guide_model->get_reviewdetails('Happy You Blog');
		

		//echo "<pre>";
		//print_r($this->data['articleRePlansInfo']);
		//die;

		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('HappyYou', base_url(HAPPY_YOU_MODULE_LINK));
		//$this->breadcrumb->add_crumb($topicName, base_url('insurance-guide/'.$guideTopicCode));
		//$this->breadcrumb->add_crumb($articleTitle);
		$bread_crumb="";
		if($page_bread_crumb!=""){$bread_crumb=$page_bread_crumb;}
		else{$bread_crumb=$articleTitle;}
		$this->breadcrumb->add_crumb($bread_crumb);

		//Set template Title
		$this->template->set('title', 'HappyYou - '.$topicName.' - '.$articleTitle);
			$this->data['CategoryName']=$topicName;
			
		//Load the view file
		
		return $this->data;
		//var_dump($this->data['articlesInfo']);
			
		//Load the view file
    }
	
}
