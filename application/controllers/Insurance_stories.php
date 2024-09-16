<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_stories extends CI_Controller {
	
	//data variable
	private $data = array();
	
	function __construct(){
		parent::__construct();

		//Load Libraries
		$this->load->database();
		$this->load->helper('security'); //for xss clean up
		$this->load->helper('security'); //for xss clean up

		$this->load->helper('common'); //for checking menu active
		$this->load->model('insurance_stories_model');

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
	
	
	
	
	//Insurance Guide Landing
	public function index() {

	
		//$this->data['storyInfo'] = $this->insurance_stories_model->get_stories_all();
	//	$storyInfo= $this->insurance_stories_model->get_stories_all();
		// if(!empty($storyInfo)){
		// 	$countviews=$storyInfo[0]->field_id_363;
		// 	$entry_id=$storyInfo[0]->entry_id;
		// 	$viewed_count=$countviews+1;
		// 	$updated =$this->insurance_stories_model->update_view_count_stories($entry_id, $viewed_count);


		// }
		$this->data['storyInfo'] = $this->insurance_stories_model->get_stories_all();

		$this->data['articles'] = $this->insurance_stories_model->getarticles();
		//Add the breadcrumbs
		//$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb('Insurance Stories');
		
	
		//Load the view file
		$this->template->load('template/template', 'super_hero_blog/super_hero_blog', $this->data);
			
	}

	//Insurance Guide Landing
	 

		public function insurance_story_details($topicSlug) {
			//Add the Breadcrumbs
			//$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
			$this->breadcrumb->add_crumb('Insurance Stories',base_url(IS_MODULE_LINK));
			//Set template Title
			$this->template->set('title', 'Insurance Guide - Insurance Stories');
			$urlstory_segment = $this->uri->segment(3);
			$urlstory_segmen1t = $this->uri->segment(2);
			$get_episodes='';
			if($this->uri->segment(2)=='termsconditions') {
				$this->breadcrumb->add_crumb('Terms and Conditions'); $this->template->load('template/template', 'super_hero_blog/superherotermsconditions', $this->data); }
			else if(isset($urlstory_segment)) {
				$explodesegment=explode('-',$urlstory_segment);
				 $get_episodes=$explodesegment[0].' '.$explodesegment[1];
				// $get_episodes1=$explodesegment[0].'-'.$explodesegment[1];
				 $get_episodes2=$explodesegment[1];

			$storyInfo = $this->insurance_stories_model->get_stories_details($topicSlug);
			
			$entry_id=$storyInfo->entry_id;
			if(!empty($storyInfo)){
				$this->data['previousRecord'] = $this->insurance_stories_model->get_previous_record($storyInfo->field_id_409);
				$this->data['nextRecord'] = $this->insurance_stories_model->get_next_record($storyInfo->field_id_409);
				$countviews=$storyInfo->field_id_403;
				$entry_id=$storyInfo->entry_id;
				$viewed_count=$countviews+1;
				$title=$storyInfo->title;
				$updated =$this->insurance_stories_model->update_view_count_stories($entry_id, $viewed_count);
				$this->data['storyInfo'] = $this->insurance_stories_model->get_stories_details($topicSlug);
               $this->breadcrumb->add_crumb($title);
			$this->data['articles'] = $this->insurance_stories_model->getarticles();
			$this->data['episodes'] = $this->insurance_stories_model->get_episodes($entry_id,'');
			$this->data['episodesingle'] = $this->insurance_stories_model->get_episodes($entry_id,$get_episodes);
			
			if(!empty($this->data['episodesingle'])){
			   $storyepisode=$this->data['episodesingle'][0]->short_description;
               $this->breadcrumb->add_crumb($storyepisode);

			$this->data['episodenumber']=$get_episodes2;
			$this->data['urlstory_segmen1t']=$urlstory_segmen1t;
			$storydetails = $this->insurance_stories_model->get_stories_all();
			

			$this->template->load('template/template', 'super_hero_blog/super_hero_blog_details', $this->data);
			}else{
				show_404();
			}
			}else{
				show_404();
			}
			
			}else{
				$storyInfo = $this->insurance_stories_model->get_stories_details($topicSlug);
				
				$entry_id=$storyInfo->entry_id;
				if(!empty($storyInfo)){
				$this->data['previousRecord'] = $this->insurance_stories_model->get_previous_record($storyInfo->field_id_409);
				$this->data['nextRecord'] = $this->insurance_stories_model->get_next_record($storyInfo->field_id_409);
					
					$countviews=$storyInfo->field_id_403;
					$entry_id=$storyInfo->entry_id;
					$viewed_count=$countviews+1;
					$updated =$this->insurance_stories_model->update_view_count_stories($entry_id, $viewed_count);
		
		$this->data['storyInfo'] = $this->insurance_stories_model->get_stories_details($topicSlug);

				$this->data['articles'] = $this->insurance_stories_model->getarticles();
				$this->data['episodes'] = $this->insurance_stories_model->get_episodes($entry_id,$get_episodes);

				$this->data['episodesingle'] = $this->insurance_stories_model->get_episodes($entry_id,'Episode 1');
											if(!empty($this->data['episodesingle'])){

				$this->data['episodenumber']='';
				$this->data['urlstory_segmen1t']="";
$storydetails = $this->insurance_stories_model->get_stories_all();
			

			$this->template->load('template/template', 'super_hero_blog/super_hero_blog_details', $this->data);
							}else{
												show_404();

							}
			}else{
				show_404();
			}
				}
				
			
			
			
		}
}