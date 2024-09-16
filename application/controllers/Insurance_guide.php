<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_guide extends CI_Controller {
	
	//data variable
	private $data = array();
	
	function __construct(){
		parent::__construct();

		//Load Libraries
		$this->load->database();
		$this->load->helper('security'); //for xss clean up
		$this->load->helper('common'); //for checking menu active
		$this->load->model('insurance_guide_model');
		
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
	
	
	
	
	
public function insurance_guide_landing() {

	$this->data['article_details']="";
	//echo "hi";exit();
	// Get Most Recent articles of the Week
	$this->data['recentArticlesInfo'] = $this->insurance_guide_model->get_recent_articles();
	
	// Get Most Recent articles of the Week
	$this->data['topicsInfo'] = $this->insurance_guide_model->get_all_topics();
	//var_dump($this->data['topicsInfo']);exit;

	//Add the Breadcrumbs
	$this->breadcrumb->add_crumb('Insurance Guide');
	
	//Set template Title
	$this->template->set('title', 'Insurance Guide');
	 
	$sort_by	=	'kcd.entry_id';
	$searchArticle="";
	$category='about-life-insurance';
	$articlesInfo 	= 	$this->insurance_guide_model->get_articles_by_topics($category, $sort_by, $searchArticle);
	$baseUrl=base_url();
	$article_data=$article_data1=$article_data2=$article_data3=$article_data4=$article_data5=$article_data6="";
	if(count($articlesInfo)){
		$i = 0;
		foreach ($articlesInfo as $article) {
			 
			$getdata[$i]['title']			=$title=	$article->title;
			$getdata[$i]['topic_url_title']	=$topic_url_title=	$article->topic_url_title;
			$getdata[$i]['article_title']	=$article_title=	$article->article_title;
			$getdata[$i]['url_title']		=$url_title=	$article->url_title;
			$getdata[$i]['short_description']	= $short_description = $article->short_description;
			$getdata[$i]['article_image']	=$article_image=	str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $article->article_image); 
			$getdata[$i]['viewed_count']	=$viewed_count=	number_format($article->viewed_count);
			$getdata[$i]['posted_date']		=$posted_date=	date(ARTICLE_DATE_FORMAT1, $article->posted_date);
			$readMoreUrl="";
			$readMoreUrl=base_url().'insurance-guide/' .$topic_url_title . '/' . $url_title;

		 $article_data="<div class='blogs-section'>
		 <div class='section-main'>";
			if($i==1){
				$article_data1="<div class='main-blog'>
				 <a href='$readMoreUrl'>
			 <img src='$article_image' alt='centre blog' />
			 <h2 class='main-blog-title'>$article_title</h2>
			 <p class='main-blog-date'>$posted_date<span>$viewed_count Views</span></p>
			 <p class='main-blog-desc'>$short_description</p>
			 </a>
			 <a href='$readMoreUrl' class='blogs-read_more'>Read More</a>
		   </div></div>";
		}
		if($i==2){
		$article_data2="<div class='section-right'>
		   <div class='right-Blog'>
			 <a href='$readMoreUrl'>
			   <h2 class='right-Blog_title'>$article_title</h2>
			   <p class='main-blog-dates'>$posted_date<span class='dots'></span>$viewed_count Views</p>
			 </a>
		   </div>";
		}
		if($i==3){
		$article_data3="<div class='right-Blog'>
			 <a href='$readMoreUrl'>
			   <h2 class='right-Blog_title'>$article_title</h2>
			   <p class='main-blog-dates'>$posted_date  <span class='dots'></span>$viewed_count Views</p>
			 </a>
		   </div>";
		}
		if($i==4){
			if($category=="protection")
			{	
				$article_data4="<div class='right-Blog'>
			 <div class='right-Blog_card'>
			 <a href=$baseUrl>
			   <img src='assets/images/insurance-guide/TermInsurance.png' alt='Blogs' />
			   <h2 class='right-blog_sidetitle'>Term Insurance Plans</h2>
			   </a>
			   <div class='rightSide-readMore'>
				 <p class='right-blog_sidedesc'>A plan that safeguards your life against unfortunate and uncertain incidents.</p>
				 <a href=$baseUrl term-insurance class='rightblogs-read_more'>Read More</a>
			   </div>
			 </div>
		   </div>";
			}
			else if($category=="wealth-creation")
			{	
				$article_data4="<div class='right-Blog'>
			 <div class='right-Blog_card'>
			  <a href=$baseUrl>
			   <img src='assets/images/insurance-guide/ULIP.png' alt='Blogs' />
			   <h2 class='right-blog_sidetitle'>ULIP</h2>
			   </a>
			   <div class='rightSide-readMore'>
				 <p class='right-blog_sidedesc'>Get safe, market-linked returns with Kotak ULIP plans.</p>
				 <a href=$baseUrl ulip-plans class='rightblogs-read_more'>Read More</a>
			   </div>
			 </div>
		   </div>";
			}
			else if($category=="savingstax")
			{	
				$article_data4=="<div class='right-Blog'>
			 <div class='right-Blog_card'>
			 <a href=$baseUrl>
			   <img src='assets/images/insurance-guide/Savings.png' alt='Blogs' />
			   <h2 class='right-blog_sidetitle'>Savings Plan</h2>
			   </a>
			   <div class='rightSide-readMore'>
				 <p class='right-blog_sidedesc'>A plan that provides guaranteed returns.</p>
				 <a href=$baseUrl savings-plan class='rightblogs-read_more'>Read More</a>
			   </div>
			 </div>
		   </div>";
			}
			else if($category=="retirement")
			{	
				$article_data4="<div class='right-Blog'>
			 <div class='right-Blog_card'>
			  <a href=$baseUrl.insurance-plans/retirement-plans>
			   <img src='assets/images/insurance-guide/RetirementPlans.png' alt='Blogs' />
			   <h2 class='right-blog_sidetitle'>Retirement</h2>
			   </a>
			   <div class='rightSide-readMore'>
				 <p class='right-blog_sidedesc'>Invest for a prosperous and safe retirement life.</p>
				 <a href=$baseUrl.insurance-plans/retirement-plans class='rightblogs-read_more'>Read More</a>
			   </div>
			 </div>
		   </div>";
			}
			else if($category=="health-insurance")
			{	
				$article_data4="<div class='right-Blog'>
			 <div class='right-Blog_card'>
			  <a href=$baseUrl.ulip-plans>
			   <img src='assets/images/insurance-guide/healthplan.png' alt='Blogs' />
			   <h2 class='right-blog_sidetitle'>ULIP</h2>
			   </a>
			   <div class='rightSide-readMore'>
				 <p class='right-blog_sidedesc'>Get safe, market-linked returns with Kotak ULIP plans.</p>
				 <a href=$baseUrl.ulip-plans class='rightblogs-read_more'>Read More</a>
			   </div>
			 </div>
		   </div>";
			}
			else if($category=="government-schemes")
			{	
				$article_data4="<div class='right-Blog'>
			 <div class='right-Blog_card'>
			  <a href=$baseUrl.term-insurance>
			   <img src='assets/images/insurance-guide/TermInsurance.png' alt='Blogs' />
			   <h2 class='right-blog_sidetitle'>Term Insurance Plans</h2>
			   </a>
			   <div class='rightSide-readMore'>
				 <p class='right-blog_sidedesc'>A plan that safeguards your life against unfortunate and uncertain incidents.</p>
				 <a href=$baseUrl.term-insurance class='rightblogs-read_more'>Read More</a>
			   </div>
			 </div>
		   </div>";
			}
			else if($category=="about-life-insurance")
			{	
				$article_data4="<div class='right-Blog'>
			 <div class='right-Blog_card'>
			  <a href=$baseUrl/term-insurance>
			   <img src='assets/images/insurance-guide/TermInsurance.png' alt='Blogs' />
			   <h2 class='right-blog_sidetitle'>Term Insurance Plans</h2>
			   </a>
			   <div class='rightSide-readMore'>
				 <p class='right-blog_sidedesc'>A plan that safeguards your life against unfortunate and uncertain incidents.</p>
				 <a href=$baseUrl/term-insurance class='rightblogs-read_more'>Read More</a>
			   </div>
			 </div>
		   </div>";
			}
			
		
		}
		// if($i==4){
		// $article_data4="<div class='right-Blog'>
		// 	 <div class='right-Blog_card'>
		// 	   <img
		// 		 src='$article_image'
		// 		 alt='Blogs' />
		// 	   <h2 class='right-blog_sidetitle'>$article_title</h2>
		// 	   <div class='rightSide-readMore'>
		// 		 <p class='right-blog_sidedesc'>$short_description</p>
		// 		 <a href='$readMoreUrl' class='rightblogs-read_more'>Read More</a>
		// 	   </div>
		// 	 </div>
		//    </div>";
		// }

		$article_data5="</div>
	   </div>";	
	   $article_data6=$article_data.$article_data1.$article_data2.$article_data3.$article_data4.$article_data5;			
			$i++;
		}		
	}
	   
	$this->data['article_details']=$article_data6; 

	//echo $article_data6;exit;
	////Load the view file
	$this->template->load('template/template', 'insurance_guide/insurance_guide_landing_view', $this->data);
		
}

	//Insurance Guide Topic detail & listing
	public function insurance_guide_topic_details($topicSlug) {

		 $topicSlug = secure_input_data($topicSlug);
		$this->data['articlescount ']='';

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

		// Get other 4 random insurance guide topics
		$this->data['randomTopicInfo'] = $this->insurance_guide_model->get_other_random_topics($guideTopicCode);

		//Add the breadcrumbs
		$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb($topicName);
		
		//Set template title
		$this->template->set('title', 'Insurance Guide - '.$topicName);
			$this->data['topicSlug']=$topicSlug;
		$this->data['articlescount']	= 	count($this->insurance_guide_model->get_articles_by_topic_count($topicSlug));

		//Load the view file
		$this->template->load('template/template', 'insurance_guide/insurance_guide_topic_detail_view', $this->data);
			
	}


	//Insurance Guide Tag articles
	public function insurance_guide_tag_articles($tagSlug) {
		$tagSlug = secure_input_data($tagSlug);

		//clean incoming data
		$guideTagCode = $this->security->xss_clean($tagSlug);

		// Get Tag Info
		$this->data['tagInfo'] = $this->insurance_guide_model->get_guide_tag_details($guideTagCode);

		//Insurance Tag Name
		$tagName = '';
		if(count($this->data['tagInfo'])){
			$tagName = $this->data['tagInfo']->title;
		} else {
			show_404();
		}

		//Add the breadcrumbs
		$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb($tagName);
		
		//Set template title
		$this->template->set('title', 'Insurance Guide - Tag - '.$tagName);

		//Load the view file
		$this->template->load('template/template', 'insurance_guide/insurance_guide_tag_articles_view', $this->data);
			
	}
	
	/*public function termsconditions(){
		
		
	} */
	
	
	//Insurance guide article detail
	public function insurance_guide_article_details($topicSlug, $articleSlug) {
		$this->data['category'] ='';
		$this->data['brochure_link'] ='';
		$this->data['features'] ='';
		$this->data['know_more_link'] ='';
		
		$this->data['buy_plan_link'] ='';

		$this->data['ref_no'] ='';

/*******New Blog Page*******/
//echo "kartheek".$this->uri->segment(3);
		if($this->uri->segment(3)=='termsconditions')
		{
			if($this->uri->segment(2)=='current-affairs' || $this->uri->segment(2)=='book-summary'){
				show_404();

			}else if($this->uri->segment(2)=='gen2gen'){
				$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
			$this->breadcrumb->add_crumb(ucwords(str_replace('-',' ',$topicSlug)), base_url(IG_MODULE_LINK).'/'.$topicSlug);
			$this->breadcrumb->add_crumb('Terms and Conditions');
			$this->template->load('template/template', 'insurance_guide/termsconditionsgen2gen', $this->data);

			}
			else{
		//echo $this->uri->segment(3);exit;
			$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
			$this->breadcrumb->add_crumb(ucwords(str_replace('-',' ',$topicSlug)), base_url(IG_MODULE_LINK).'/'.$topicSlug);
			$this->breadcrumb->add_crumb('Terms and Conditions');
			

			$this->template->load('template/template', 'insurance_guide/termsconditions', $this->data);
			}
		}else{

			
/*******New Blog Page*******/
  
		$topicSlug = secure_input_data($topicSlug);
		$articleSlug = secure_input_data($articleSlug);
		
		

		//Clean incoming data
		$guideTopicCode = $this->security->xss_clean($topicSlug);
		$guideArticleSlug = $this->security->xss_clean($articleSlug);
		//echo $this->uri->segment(2);
		
		
		// Get article full details
		 $this->data['articlesInfo'] = $this->insurance_guide_model->get_article_details($guideArticleSlug); 
		 
		 //Insurance guide topic
		$articleTitle	= 	'';
		$topicName		=	'';
		$entry_id		=	0;
		$viewed_count 	=	0;
		$this->data['blogTitle']="";
		
		$dateModified="";
		$button_text=$button_url=$utm_urls=$page_bread_crumb=$summary=$button_2_text=$button_2_url=$button_1_text=$button_1_url=$also_read_blogs=$similar_articles='';
		$trackingInfo   =	array();	
		if($this->data['articlesInfo']){
			$articleInfo 	=	$this->data['articlesInfo'];
			$articleTitle 	=	$articleInfo->article_title;

			$this->data['blogTitle']=$articleTitle;
			
			$topicName		=	$articleInfo->topic_title;
			$entry_id		=	$articleInfo->entry_id;
			$viewed_count	=	(int)$articleInfo->viewed_count;
			$page_bread_crumb=$articleInfo->breadcrumb;
			$reviewwritten		=	$articleInfo->reviewwritten;

			$summary=$articleInfo->summary;
			$button_1_text=$articleInfo->button_1_text;
			$button_1_url=$articleInfo->button_1_url;
			$button_2_text=$articleInfo->button_2_text;
			$button_2_url=$articleInfo->button_2_url;
			$also_read_blogs=$articleInfo->also_read_blogs;
			$utm_urls=$articleInfo->utmurls;
			//$similar_articles=$articleInfo->similar_articles;


			$datePublished 	=	date('Ymd', $articleInfo->entry_date);
			//$dateModified 	=	date('Ymd', $articleInfo->edit_date);
			if($articleInfo->updated_on){
			$dateModified 	=	$articleInfo->updated_on;
			}else{
				$dateModified=$articleInfo->edit_date;
			}
			$description 	=	$articleInfo->short_description;
			$headline 		=	$articleInfo->article_title;
			
			
			
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
										'reviewwritten' => $reviewwritten,
										'img_url' => $imgURL,
										'img_name' => $imgName,
										'img_height' => $imgHeight,
										'img_width' => $imgWidth,
										'page_title' => $pageTitle,
										'org_name' => ORG_NAME,
										'org_img_url' => ORG_IMG_URL,
										'org_content_url' => ORG_CONTENT_URL,
										'org_img_alt' => ORG_IMG_ALT);
										
		 $clean_category = strtolower(str_replace(" ",'-',$articleInfo->topic_title));
		 $clean_category = str_replace(array('&',"'",'-'),'',$clean_category);
		$clean_slug = str_replace(array('&',"'",'-'),'',$this->uri->segment(2));
		if($clean_slug!=$clean_category){
			//echo "testing Kotak".$articleInfo->topic_title
			show_404();
		}
		} else {
			show_404();
		}

		$this->data['trackingInfo'] = json_encode($trackingInfo);

		// To update viewed count
		$viewed_count	=	$viewed_count + 1;
		$this->insurance_guide_model->update_view_count($entry_id, $viewed_count);

		
		$this->data['getutmParameters']= $this->insurance_guide_model->getutmParameters('Blogs');
		 $utm_source=$utm_medium=$utm_campaign=$utm_content="";
		 if($this->data['getutmParameters']){
			$info 	=	$this->data['getutmParameters'];
			 $utm_source=$info->utm_source;
				$utm_medium=$info->utm_medium;
				$utm_campaign=$info->utm_campaign;
				$utm_content=$info->utm_content;
		}
		 
		$btn_utm=base_url().$utm_urls."?utm_source=".$utm_source."&utm_medium=".$utm_medium."&utm_campaign=".$utm_campaign."&utm_content=".$articleSlug;
		$this->data['btn_utm']="";
		$this->data['btn_utm']=$btn_utm;
		
		//$this->data[''];
		/**********New Blog Page*****/
// Get also read articles list info within same topic
		$this->data['alsoReadArticlesInfo'] = $this->insurance_guide_model->get_also_read_articles_new($guideTopicCode, $entry_id);
		$this->data['alsoReadArticlesInfoAll'] = $this->insurance_guide_model->get_also_read_articles_all($guideTopicCode, $entry_id);
/**********New Blog Page*****/

		// Get also read articles list info within same topic
		$this->data['alsoReadArticlesInfo'] = $this->insurance_guide_model->get_also_read_articles($guideTopicCode, $entry_id);

		// Get previous article info within same topic
		$this->data['previousArticleInfo'] = $this->insurance_guide_model->get_prev_next_article($guideTopicCode, $entry_id, 'previous');

		// Get next article info within same topic
		$this->data['nextArticleInfo'] = $this->insurance_guide_model->get_prev_next_article($guideTopicCode, $entry_id, 'next');

		$this->data['writters'] = "";//$this->insurance_guide_model->get_reviewdetails('Normal Blog');

		// Get tag lists of this article
		$this->data['articleTagsInfo'] = $this->insurance_guide_model->get_article_tags($entry_id);

		// Get related plan lists of this article
		$this->data['articleRePlansInfo'] = $this->insurance_guide_model->get_article_related_plans($entry_id);
			
		$this->data['articleetermPlansInfo'] = $this->insurance_guide_model->get_article_related_eterm_plans($entry_id);
		
		
		 
		
		 $this->data['dateModified']=$dateModified;
		//echo "<pre>";
		//print_r($this->data['articleRePlansInfo']);
		//die;

		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb($topicName, base_url('insurance-guide/'.$guideTopicCode));
		//$this->breadcrumb->add_crumb($articleTitle) ;
		$bread_crumb="";
		if($page_bread_crumb!=""){$bread_crumb=$page_bread_crumb;}
		else{$bread_crumb=$articleTitle;}
		$this->breadcrumb->add_crumb($bread_crumb);

		//Set template Title
		$this->template->set('title', 'Insurance Guide - '.$topicName.' - '.$articleTitle);
        $this->data['CategoryName']=$topicName;
		//Load the view file
        $this->template->load('template/template', 'insurance_guide/insurance_guide_detail_view', $this->data);	
		
		//$this->template->load('template/template', 'insurance_guide/insurance_guide_detail_view', $this->data);
	   }
	}

	//Glossary Landing
	public function glossary_landing() {
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb('Glossary');
		$sort_by	=	'kcd.entry_id';
		$this->data['latestblogs']=$this->insurance_guide_model->get_articles_for_glossary('0', $sort_by,'2');
		$sort_by = 'kcd.field_id_162';
		$this->data['popularblogs']=$this->insurance_guide_model->get_articles_for_glossary('0', $sort_by,'3');		;

		//Set template Title
		$this->template->set('title', 'Insurance Guide - Glossary');
		
		//Load the view file
		$this->template->load('template/template', 'insurance_guide/glossary_landing_view', $this->data);
			
	}

	//Faq Landing
	/*
	public function faqs_landing() {
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb('Policy FAQs');
		
		//Set template Title
		$this->template->set('title', 'Insurance Guide - Policy FAQs');
		
		//Load the view file
		$this->template->load('template/template', 'insurance_guide/faqs_landing_view', $this->data);
			
	}
	*/
	public function faqs_landing() {
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb('General FAQs');
		
		//Set template Title
		$this->template->set('title', 'Insurance Guide - General FAQs');
		
		//Load the view file
		$this->template->load('template/template', 'insurance_guide/faqs_landing_view', $this->data);
			
	}
	
	public function policy_related_faqs() {
	
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb('Policy Related FAQs');
	
		//Set template Title
		$this->template->set('title', 'Insurance Guide - Policy Related FAQs');
	
		//Load the view file
		$this->template->load('template/template', 'insurance_guide/policy_related_faqs', $this->data);
			
	}
    
    public function super_hero_blog() {
	
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb('Super Hero Blog');
	
		//Set template Title
		$this->template->set('title', 'Insurance Guide - Super Hero Blog');
	
		//Load the view file
		$this->template->load('template/template', 'super_hero_blog/super_hero_blog', $this->data);
			
	}
    
      public function super_hero_blog_details() {
	
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb('Super Hero Blog Details');
	
		//Set template Title
		$this->template->set('title', 'Insurance Guide - Super Hero Blog Details');
	
		//Load the view file
		$this->template->load('template/template', 'super_hero_blog/super_hero_blog_details', $this->data);
			
	}
	
public function knowledgevault()
    {
		$segment = $this->uri->segment(3);
		if(($segment=='') || ($segment==null)){$segment='about-life-insurance';}
	    if(($segment=='term-insurance')){$segment='protection';}
		if($segment=='savings-&-tax'){$segment='savingstax';}
		$data['segment'] = $segment;
        $this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb('Knowledge Vault');
		$this->template->set('title', 'Insurance Guide - knowledge vault');
		
		//All topics of insurance guide
		$this->data['topicsInfo'] = $this->insurance_guide_model->get_all_topics();
		
		
		//Each topic related articles
		$topicSlug = $segment;
		$data['articlesInfo'] = $articlesInfo = $this->insurance_guide_model->get_articles_by_topic_knowledgevault($topicSlug);
		
		if(count($articlesInfo))
		{
			$i = 0;$main = array(); $temp_what_sub = array();$temp_how_sub = array();
			$temp_why_sub = array();$temp_which_sub = array();$temp_vs_sub =array();
			$temp_can_sub = array();$temp_do_sub = array();$temp_is_sub = array();
			$temp_tips_sub = array();
			foreach ($articlesInfo as $article) 
			{
				$knowledgevault = $article->knowledgevault;
				if($knowledgevault == 'What')
				{
					$temp_what = array();
					$temp_what['article_title'] = $article->article_title;
					$temp_what['url_title'] = $article->url_title; 
					$temp_what['topic_url_title'] = $article->topic_url_title; 
					$temp_what_sub[] = $temp_what;
				}
				if($knowledgevault == 'How')
				{
					$temp_how = array();
					$temp_how['article_title'] = $article->article_title;
					$temp_how['url_title'] = $article->url_title;
					$temp_how['topic_url_title'] = $article->topic_url_title;
					$temp_how_sub[] = $temp_how;
				}
				if($knowledgevault == 'Why')
				{
					$temp_why = array();
					$temp_why['article_title'] = $article->article_title;
					$temp_why['url_title'] = $article->url_title;
					$temp_why['topic_url_title'] = $article->topic_url_title;
					$temp_why_sub[] = $temp_why;
				}
				if($knowledgevault == 'Which')
				{
					$temp_which = array();
					$temp_which['article_title'] = $article->article_title;
					$temp_which['url_title'] = $article->url_title;
					$temp_which['topic_url_title'] = $article->topic_url_title;
					$temp_which_sub[] = $temp_which;
				}
				if($knowledgevault == 'vs.')
				{
					$temp_vs = array();
					$temp_vs['article_title'] = $article->article_title;
					$temp_vs['url_title'] = $article->url_title;
					$temp_vs['topic_url_title'] = $article->topic_url_title;
					$temp_vs_sub[] = $temp_vs;
				}
				if($knowledgevault == 'Can')
				{
					$temp_can = array();
					$temp_can['article_title'] = $article->article_title;
					$temp_can['url_title'] = $article->url_title;
					$temp_can['topic_url_title'] = $article->topic_url_title;
					$temp_can_sub[] = $temp_can;
				}
				if($knowledgevault == 'Do')
				{
					$temp_do = array();
					$temp_do['article_title'] = $article->article_title;
					$temp_do['url_title'] = $article->url_title;
					$temp_do['topic_url_title'] = $article->topic_url_title;
					$temp_do_sub[] = $temp_do;
				}
				if($knowledgevault == 'Tips')
				{
					$temp_tips = array();
					$temp_tips['article_title'] = $article->article_title;
					$temp_tips['url_title'] = $article->url_title;
					$temp_tips['topic_url_title'] = $article->topic_url_title;
					$temp_tips_sub[] = $temp_tips;
				}
				if($knowledgevault == 'Is')
				{
					$temp_is = array();
					$temp_is['article_title'] = $article->article_title;
					$temp_is['url_title'] = $article->url_title;
					$temp_is['topic_url_title'] = $article->topic_url_title;
					$temp_is_sub[] = $temp_is;
				}
			}
			$this->data['what_array'] = $temp_what_sub;
			$this->data['how_array'] = $temp_how_sub;
			$this->data['why_array'] = $temp_why_sub;
			$this->data['which_array'] = $temp_which_sub;
			$this->data['vs_array'] = $temp_vs_sub;
			$this->data['tips_array'] = $temp_tips_sub;
			$this->data['can_array'] = $temp_can_sub;
			$this->data['do_array'] = $temp_do_sub;
			$this->data['is_array'] = $temp_is_sub;
			
			if($segment=='term-insurance'){$data['selected_name'] = 'Term Insurance';}
			else if($segment=='wealth-creation'){$data['selected_name'] = 'Wealth Creation';}
			else if($segment=='term-insurance'){$data['selected_name'] = 'Term Insurance';}
			else if($segment=='retirement'){$data['selected_name'] = 'Retirement';}
			else if($segment=='savings-&-tax'){$data['selected_name'] = 'Savings & Tax';}
			else if($segment=='health-insurance'){$data['selected_name'] = 'Health Insurance';}
			else if($segment=='' || $segment==null || $segment=='about-life-insurance'){$data['selected_name'] = 'About Life Insurance';}
			$this->template->load('template/template', 'insurance_guide/knowledgevault', $this->data);
			
		}else{
			show_404();
		}
		
		
    }
	
	public function insurance_guide_landing_view()
	{
		 
		$sort_by	=	'kcd.entry_id';
		$searchArticle="";
		$category=$this->input->post('category1');
		$articlesInfo 	= 	$this->insurance_guide_model->get_articles_by_topics($category, $sort_by, $searchArticle);
		$baseUrl=base_url();
		$article_data=$article_data1=$article_data2=$article_data3=$article_data4=$article_data5=$article_data6="";
		if(count($articlesInfo)){
			$i = 0;
			foreach ($articlesInfo as $article) {
				 
				$getdata[$i]['title']			=$title=	$article->title;
				$getdata[$i]['topic_url_title']	=$topic_url_title=	$article->topic_url_title;
				$getdata[$i]['article_title']	=$article_title=	$article->article_title;
				$getdata[$i]['url_title']		=$url_title=	$article->url_title;
				$getdata[$i]['short_description']	= $short_description = $article->short_description;
				$getdata[$i]['article_image']	=$article_image=	str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $article->article_image); 
				$getdata[$i]['viewed_count']	=$viewed_count=	number_format($article->viewed_count);
				$getdata[$i]['posted_date']		=$posted_date=	date(ARTICLE_DATE_FORMAT1, $article->posted_date);
				$readMoreUrl="";
				$readMoreUrl=base_url().'insurance-guide/' .$topic_url_title . '/' . $url_title;

			 $article_data="<div class='blogs-section'>
			 <div class='section-main'>";
				if($i==1){
					$article_data1="<div class='main-blog'>
                    <a href='$readMoreUrl'>
				 <img src='$article_image' alt='centre blog' />
				 <h2 class='main-blog-title'>$article_title</h2>
				 <p class='main-blog-date'>$posted_date<span>$viewed_count Views</span></p>
				 <p class='main-blog-desc'>$short_description</p></a>
				 <a href='$readMoreUrl' class='blogs-read_more'>Read More</a>
			   </div></div>";
			}
			if($i==2){
			$article_data2="<div class='section-right'>
			   <div class='right-Blog'>
				 <a href='$readMoreUrl'>
				   <h2 class='right-Blog_title'>$article_title</h2>
				   <p class='main-blog-dates'>$posted_date<span class='dots'></span>$viewed_count Views</p>
				 </a>
			   </div>";
			}
			if($i==3){
			$article_data3="<div class='right-Blog'>
				 <a href='$readMoreUrl'>
				   <h2 class='right-Blog_title'>$article_title</h2>
				   <p class='main-blog-dates'>$posted_date  <span class='dots'></span>$viewed_count Views</p>
				 </a>
			   </div>";
			}
			if($i==4){
				if($category=="protection")
				{	$protectionUrl=$baseUrl.'term-insurance';
					$article_data4="<div class='right-Blog'>
				 <div class='right-Blog_card'>
                 <a href=$protectionUrl>
				   <img src='assets/images/insurance-guide/TermInsurance.png' alt='Blogs' />
                   </a>
				   <h2 class='right-blog_sidetitle'>Term Insurance Plans</h2>
				   <div class='rightSide-readMore'>
					 <p class='right-blog_sidedesc'>A plan that safeguards your life against unfortunate and uncertain incidents.</p>
					 <a href=$protectionUrl class='rightblogs-read_more'>Read More</a>
				   </div>
				 </div>
			   </div>";
				}
				else if($category=="wealth-creation")
				{	$ulipUrl=$baseUrl.'ulip-plans';
					$article_data4="<div class='right-Blog'>
				 <div class='right-Blog_card'>
                 <a href=$ulipUrl>
				   <img src='assets/images/insurance-guide/ULIP.png' alt='Blogs' /> </a>
				   <h2 class='right-blog_sidetitle'>ULIP</h2>
				   <div class='rightSide-readMore'>
					 <p class='right-blog_sidedesc'>Get safe, market-linked returns with Kotak ULIP plans.</p>
					 <a href=$ulipUrl class='rightblogs-read_more'>Read More</a>
				   </div>
				 </div>
			   </div>";
				}
				else if($category=="savingstax")
				{	
					$savingsUrl=$baseUrl.'savings-plan';
					$article_data4="<div class='right-Blog'>
				 <div class='right-Blog_card'>
				   <a href=$savingsUrl> <img src='assets/images/insurance-guide/Savings.png' alt='Blogs' /></a>
				   <h2 class='right-blog_sidetitle'>Savings Plan</h2>
				   <div class='rightSide-readMore'>
					 <p class='right-blog_sidedesc'>A plan that provides guaranteed returns.</p>
					 <a href=$savingsUrl class='rightblogs-read_more'>Read More</a>
				   </div>
				 </div>
			   </div>";
				}
				else if($category=="retirement")
				{	
					$retirementUrl=$baseUrl.'insurance-plans/retirement-plans';
					$article_data4="<div class='right-Blog'>
				 <div class='right-Blog_card'>
				   <a href=$retirementUrl> <img src='assets/images/insurance-guide/RetirementPlans.png' alt='Blogs' /> </a>
				   <h2 class='right-blog_sidetitle'>Retirement</h2>
				   <div class='rightSide-readMore'>
					 <p class='right-blog_sidedesc'>Invest for a prosperous and safe retirement life.</p>
					 <a href=$retirementUrl class='rightblogs-read_more'>Read More</a>
				   </div>
				 </div>
			   </div>";
				}
				else if($category=="health-insurance")
				{	
					$ulip_url=$baseUrl.'ulip-plans';
					$article_data4="<div class='right-Blog'>
				 <div class='right-Blog_card'>
				  <a href=$ulip_url>  <img src='assets/images/insurance-guide/healthplan.png' alt='Blogs' /></a>
				   <h2 class='right-blog_sidetitle'>ULIP</h2>
				   <div class='rightSide-readMore'>
					 <p class='right-blog_sidedesc'>Get safe, market-linked returns with Kotak ULIP plans.</p>
					 <a href=$ulip_url class='rightblogs-read_more'>Read More</a>
				   </div>
				 </div>
			   </div>";
				}
				else if($category=="government-schemes")
				{	$govt_url=$baseUrl.'term-insurance';
					$article_data4="<div class='right-Blog'>
				 <div class='right-Blog_card'>
				   <a href=$govt_url> <img src='assets/images/insurance-guide/TermInsurance.png' alt='Blogs' /></a>
				   <h2 class='right-blog_sidetitle'>Term Insurance Plans</h2>
				   <div class='rightSide-readMore'>
					 <p class='right-blog_sidedesc'>A plan that safeguards your life against unfortunate and uncertain incidents.</p>
					 <a href=$govt_url  class='rightblogs-read_more'>Read More</a>
				   </div>
				 </div>
			   </div>";
				}
				else if($category=="about-life-insurance")
				{	$abt_url=$baseUrl.'term-insurance';
					$article_data4="<div class='right-Blog'>
				 <div class='right-Blog_card'>
				   <a href=$abt_url><img src='assets/images/insurance-guide/TermInsurance.png' alt='Blogs' /></a>
				   <h2 class='right-blog_sidetitle'>Term Insurance Plans</h2>
				   <div class='rightSide-readMore'>
					 <p class='right-blog_sidedesc'>A plan that safeguards your life against unfortunate and uncertain incidents.</p>
					 <a href=$abt_url class='rightblogs-read_more'>Read More</a>
				   </div>
				 </div>
			   </div>";
				}
			}
			$article_data5="</div>
		   </div>";	
		   $article_data6=$article_data.$article_data1.$article_data2.$article_data3.$article_data4.$article_data5;			
				$i++;
			}		
		}
		echo $article_data6;   
	}
	/*public function tax_saving_solutions()
    {
		$data['segment'] = $segment;
       // $this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb('Terms & Conditions');
		$this->template->set('title', 'Insurance Guide - Terms & Conditions');
		//$this->template->load('template/template', 'insurance-guide/tax-saving', $this->data);
		$this->template->load('template/template', 'insurance_guide/tax-saving', $this->data);
	}*/
	public function rss_xml(){
	$this->load->model('rss_model'); // Load the RSS model
	$this->data['articlesInfo'] 	= 	$this->rss_model->get_articles_by_topic("current-affairs");
	header("Content-Type: application/rss+xml");
	$this->load->view('rss/rss_view', $this->data); // Load the RSS view
	}
}
