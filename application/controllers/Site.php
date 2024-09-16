<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index 
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//data variable
	private $data = array(); 
	public $CI=null;
	function __construct(){
		parent::__construct();

		//Load Libraries
		$this->load->database();

		$this->load->helper('common'); //for checking menu active

		//Load the common CSS files
		$this->data['CSS_FILES'] = unserialize(CSS_FILES);
		$this->load->helper('file');

		//Load the common JS files
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		$this->data['Mobile_JS_FILES'] = unserialize(Mobile_JS_FILES);
		
		$this->load->model('requestlifeadvisor_model');
		
		$this->data['cities'] = $this->requestlifeadvisor_model->get_cities();
		
		if(get_cookie('kotak_customer_type')){$cusType = get_cookie('kotak_customer_type');}else{$cusType = "new_customer";}
		
		if($cusType == "new_customer"){$gaCat = "New Customer";
		}else if($cusType == "existing_customer"){$gaCat = "Existing Customer";
		}else if($cusType == "life_advisor"){$gaCat = "Life Advisor";}
		$this->data['gaCat'] = $gaCat;
		$this->CI=& get_instance();
	}
	
	
	
	/* ====================zip File upload======================  */ 
 
public function verify_my_advisor($Slug) {
		 
	 $pgtitle = 'Know and Verify Life Advisor';
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		
		
		//$this->template->load('template/template', 'dmrm/'.$Slug, $this->data);
		
		 
		if (is_file(APPPATH.'views/dmrm/' . $Slug . ".php"))
		    {
		       $this->template->load('template/template', 'dmrm/'.$Slug, $this->data);
		    }
		    else
		{
		 show_404();
		}  		
	} 
	 
//public function fupload() {  $this->load->view("fupload"); }   

 
 public function fupload1() {  
if(isset($_FILES["zip_file"]["name"])) { 
$filename = $_FILES["zip_file"]["name"]; 
$filename = $_FILES["zip_file"]["name"]; 
 $source = $_FILES["zip_file"]["tmp_name"]; 
 $type = $_FILES["zip_file"]["type"]; 
 $name = explode(".", $filename);
 $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed'); 
 foreach($accepted_types as $mime_type) { 
	if($mime_type == $type) { 
		$okay = true; break; 
		}  
		
	} 
 $continue = strtolower($name[1]) == 'zip' ? true : false; 
 if(!$continue) 
	{   
		$message = "The file you are trying to upload is not a .zip file. Please try again."; 
	}  
 /* PHP current path */ 
 $path = dirname(__FILE__).'/';   // absolute path to the directory where zipper.php is in  
 $filenoext = basename ($filename, '.zip');  // absolute path to the directory where zipper.php is in (lowercase)  
 $filenoext = basename ($filenoext, '.ZIP');  // absolute path to the directory where zipper.php is in (when uppercase)   
 $targetdir = $path . $filenoext; // target directory  
 $targetzip = $path . $filename; // target zip file   
 /* create directory if not exists', otherwise overwrite */  
 /* target directory is same as filename without extension */  
 if (is_dir($targetdir))  $this->rmdir_recursive($targetdir);   
 mkdir($targetdir, 0777);   
 /* here it is really happening */ 
 if(move_uploaded_file($source, $targetzip)) { 
 $zip = new ZipArchive(); 
 $x = $zip->open($targetzip);   // open the zip file to extract 
 if ($x === true) 
  { 
	$zip->extractTo($targetdir); // place in the directory with same name   
	$zip->close();  
	unlink($targetzip); 
}   
 $message = "Your .zip file was uploaded and unpacked."; 
 } else {  
 $message = "There was a problem with the upload. Please try again.";
 }
 redirect("site/fupload");
 } 
 } 
 
 function rmdir_recursive($dir)
 { 
 foreach(scandir($dir) as $file) { 
 if ('.' === $file || '..' === $file) continue; 
 if (is_dir("$dir/$file"))
	 $this->rmdir_recursive("$dir/$file"); 
 else unlink("$dir/$file"); 
 }
 rmdir($dir);
 } 

/* ====================zip File upload======================  */
/* ====================  new corona  home page ======================  */
	public function UpdatesCovid19()
	{
		$this->load->model('site_model');
		
		array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
		
		$this->template->set('title', 'Home');
		$this->load->helper('form');
		
		$this->data['needDD'] = $this->site_model->bind_needDD();
		$this->data['ageGroupDD'] = $this->site_model->bind_ageGroupDD();
		
		 
			$this->template->load('template/template', 'site/home_new', $this->data);
		 
	}
	public function Quarantine2020()
	{
		$this->load->model('site_model');
	
		array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
	
		$this->template->set('title', 'Home');
		$this->load->helper('form');
	
		$this->data['needDD'] = $this->site_model->bind_needDD();
		$this->data['ageGroupDD'] = $this->site_model->bind_ageGroupDD();
	
			
		$this->template->load('template/quarntine_template', 'site/quarntine', $this->data);
			
	}
	/* ==================== new corona  home page ======================  */

	public function feedback(){
		array_push($this->data['JS_FILES'], 'assets/js/jquery-ui.js');
		array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
		array_push($this->data['CSS_FILES'], 'assets/css/jquery-ui.css');
		
		$this->breadcrumb->add_crumb('Life Insurance', base_url());
		$this->breadcrumb->add_crumb('Feedback Form');
		$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
		//$this->data = "";
		$this->template->set('title', 'Feedback Form');
		$this->template->load('template/template', 'site/WebsiteFeedback_view', $this->data);
	}
	
	public function disclaimer_page_gsp(){
	/*$this->load->model('site_model');
    array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
    $this->template->set('title', 'Home');
    $this->load->helper('form');  
	
	$this->load->view('others/disclaimer-page-gsp',$this->data); */
	
	echo "hgfdfgh";
		
	}
	
	public function footerLinks($pageSlug){
		if($pageSlug=="disclaimer"){
			$pgtitle = "Disclaimer";
			$viewName = "others/disclaimer";
		}else if($pageSlug=="disclaimer-page-gsp"){
			$pgtitle = "Disclaimer GSP";
			$viewName = "others/disclaimer-page-gsp";
		}else if($pageSlug=="disclaimer-page-kasp"){
			$pgtitle = "Disclaimer KASP";
			$viewName = "others/disclaimer-page-kasp";
			
		}else if($pageSlug=="disclaimer-page-kap"){
		$pgtitle = "Disclaimer KAP";
		$viewName = "others/disclaimer-page-kap";
		
		}else if($pageSlug=="disclaimer-page-ulip"){
			$pgtitle = "Disclaimer Ulip";
		$viewName = "others/disclaimer-page-ulip";
			
		}else if($pageSlug=='disclaimer-tulip'){
			$pgtitle = "Disclaimer TULIP";
			$viewName = "others/disclaimer-page-tulip";
		}else if($pageSlug=="privacy-policy"){
			$pgtitle = "Privacy Policy";
			$viewName = "others/privacy-policy";
		}else if($pageSlug=="corporate-partners"){
			$pgtitle = "Corporate Partners";
			$viewName = "others/corporate-partners";
		}
		else if($pageSlug=="aspreckoner"){
			$pgtitle = "ASP Reckoner";
			$viewName = "others/aspreckoner";
		}
		else if($pageSlug=="customer-notice-archives"){
			$pgtitle = "Customer Notice Archives";
			$viewName = "others/customer-notice-archives";
		}else if($pageSlug=="do-not-call-registry"){
			$this->load->model('requestlifeadvisor_model');
			$pgtitle = "Do Not Call Registry";
			$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
			$viewName = "others/do_not_call_registry_view";
		}else if($pageSlug=="agents-terminated-due-malpractices"){
			array_push($this->data['JS_FILES'], 'assets/js/life-advisor.js');
			$this->load->model('site_model');
			$this->data['agentsDetails'] = $this->site_model->agentsTerminated();
			$pgtitle = "Agents Terminated due to malpractices";
			$viewName = "life_advisor/AgentsTerminated_view";
		}else if($pageSlug=="key-persons"){
			$pgtitle = "Key Persons";
			$viewName = "others/key-persons";
		}else if($pageSlug=="regional-forms"){
			array_push($this->data['JS_FILES'], 'assets/js/life-advisor.js');
			$this->load->model('site_model');
			$this->data['languagesDD'] = $this->site_model->bind_languages();
			$this->data['formData'] = $this->site_model->getFormsByLanguage();
			
			$pgtitle = "Policy Servicing Forms in Regional Languages";
			$viewName = "others/PolicyServicingForms_view";
		}else{
			$pgtitle = "";
			show_404();
		}
		
		$this->breadcrumb->add_crumb('Home', base_url());
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', $viewName, $this->data);
	}
	
	
	public function sitemap(){
		$this->breadcrumb->add_crumb('Home', base_url());
		$this->breadcrumb->add_crumb('Sitemap');
		$this->template->set('title', 'Sitemap');
		$this->template->load('template/template', 'site/sitemap', $this->data);
	}
	
	public function index(){
		
		
		$this->load->library('user_agent');
		if($this->agent->is_mobile()){
			$this->checkDevice();
			//$this->desktop_index();
		}else{
			$this->desktop_index();
		}
	}

	public function desktop_index(){
		
		$this->load->model('site_model');
		
		array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
		
		$this->template->set('title', 'Home');
		$this->load->helper('form');
		
		$this->data['needDD'] = $this->site_model->bind_needDD();
		$this->data['ageGroupDD'] = $this->site_model->bind_ageGroupDD();
		
		if(!isset($_COOKIE['kotak_customer_type'])){
			$customerType="";
		}else{
			$customerType = get_cookie('kotak_customer_type');
		}
		
		//Convonix Seo Stuff
		// $convonixSettingsArray = array(
		// 	"@context"			=>	ORG_CONTEXT, 
		// 	"@type" 			=> 	"Website",
		// 	"url" 				=> 	ORG_WEBSITE_URL,
		// 	"inLanguage"		=>	"en-in",
		// 	"isFamilyFriendly"	=>	"Yes",
		// 	"keywords"			=>	KLI_KEYWORDS,
		// 	"description"		=>	"Kotak Life Insurance, one of the leading insurance companies in India; offers life insurance plans, child plans, pension plans, investment & savings plans and more!",
		// 	"name"				=>	ORG_NAME,
		// 	"url"				=> 	ORG_WEBSITE_URL,
		// 	"sameAs"			=>	ORG_WIKIPEDIA,	         			
		// 	 "image" => [
        //         array("@type" => "ImageObject",
		// 		   "url" => ORG_IMG_URL,
        //             "contentUrl" => ORG_CONTENT_URL,
        //             "name" => ORG_IMG_ALT)
        //     ],
		// 	  "author" => [
        //         array(
        //             "@type" => "InsuranceAgency",
        //             "name" => ORG_NAME,
        //             "telephone" => "1800 209 8800",
        //             "address" => array(
        //                 "@type" => "PostalAddress",
        //                 "addressLocality" => "Mumbai, India",
        //                 "postalCode" => "400051",
        //                 "streetAddress" => "C- 12, G- Block, BKC, Bandra (E)"
        //             ),
        //             "email" => "clientservicedesk(at)kotak.com",
        //             "faxNumber" => "+91 22 67425650",
        //             "priceRange" => "100 to 1000000",
		// 			//"logo" =>ORG_IMG_URL
        //             "logo" => [
        //                 array(
        //                     "@type" => "ImageObject",
        //                     "Url" => ORG_IMG_URL,
        //                     "contentUrl" => ORG_CONTENT_URL,
        //                     "name" => ORG_IMG_ALT
        //                 )
        //             ],
		// 			"image" =>ORG_IMG_URL
        //         )
        //     ] 			
		// );
		$convonixSettingsArray='{
			"@context": "https://schema.org/",
			"@type": "WebSite",
			"name": "Kotak Life Insurance",
			"url": "https://kli-uat.irepo.in/",
			"potentialAction": {
			  "@type": "SearchAction",
			  "target": "https://kli-uat.irepo.in/search?q={search_term_string}",
			  "query-input": "required name=search_term_string"
			}
		  }</script>';
			$convonixSettingsArray=$convonixSettingsArray.'   <script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "Organization",
				"name": "Kotak Life Insurance",
				"url": "https://kli-uat.irepo.in/",
				"logo": "https://kli-uat.irepo.in/assets/images/kotak-logo.png",
				"contactPoint": {
				  "@type": "ContactPoint",
				  "telephone": "1800 209 8800",
				  "contactType": "customer service",
				  "contactOption": "TollFree",
				  "areaServed": "IN"
				},
				"sameAs": [
				  "https://www.facebook.com/kotaklife/",
				  "https://twitter.com/Kotak_Life",
				  "https://in.linkedin.com/company/kotak_life",
				  "https://www.youtube.com/kotaklifeinsuranceofficial",
				  "https://www.instagram.com/kotak.lifeinsurance/"
				]
			  }';
		$this->data['convonixSettings'] = $convonixSettingsArray;
		if($customerType=="existing_customer"){
			$this->template->load('template/template', 'site/home_exiting_view', $this->data);
		}else if($customerType=="new_customer" || $customerType==""){
			$this->template->load('template/template', 'site/home_view', $this->data);
		}else if($customerType=="life_advisor"){
			array_push($this->data['JS_FILES'], 'assets/js/life-advisor.js');
			$this->load->model('LifeAdvisor_model');
			$this->data['successStories'] = $this->LifeAdvisor_model->get_SuccessStories();
			//print_r($this->data['successStories']);
			//die;
			$this->template->load('template/template', 'site/home_life_advisor_view', $this->data);
		}
	}
	public function existing_customer()
	{
		$this->load->model('site_model');
		
		array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
		
		$this->template->set('title', 'Home');
		$this->load->helper('form');
		$customerType="existing_customer";
		if($customerType=="existing_customer"){ 
			$this->template->load('template/template', 'site/home_exiting_view', $this->data);
		}
	}
	public function life_advisor()
	{
		
		$customerType="life_advisor";
		if($customerType=="life_advisor"){
			array_push($this->data['JS_FILES'], 'assets/js/life-advisor.js');
			$this->load->model('LifeAdvisor_model');
			$this->data['successStories'] = $this->LifeAdvisor_model->get_SuccessStories();
			 
			$this->template->load('template/template', 'site/home_life_advisor_view', $this->data);
		}
	}
	public function checkDevice(){ 
		$this->load->model('mobile_model');
		$this->load->helper('form');
		
		$data['needDDMobile'] = $this->mobile_model->bind_needDD_mobile();		
		$data['bind_ageGroupDDMobile'] = $this->mobile_model->bind_ageGroupDDMobile(); 		
		
		/*if(!isset($_COOKIE['kotak_customer_type'])){
			$customerType="";
		}else{
			$customerType = get_cookie('kotak_customer_type');
		}*/
		$this->template->load('template/template_mobile_home', 'site/mobile_home',$data);
	}
	/*
public function checkDevice(){
		$this->data = "";
		
	//	array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
		
		$this->load->model('Site_model');
	//	$this->data['needDD'] = $this->Site_model->bind_needDD();
		//var_dump($this->data['needDD']);exit;
	//	$this->data['ageGroupDD'] = $this->site_model->bind_ageGroupDD();
		
		//$this->template->load('template/template_mobile', 'site/mobile_home', $this->data);
		redirect(base_url()."main");
	}*/
	
	/*
public function checkDevice(){
		$this->data = "";
		$this->template->load('template/template_mobile', 'site/home_mobile_view', $this->data);
		//redirect(base_url()."main");
	}*/
/*	public function checkDevice(){
		$this->data = "";
		
		$this->load->model('site_model');
		
		array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
		
		$this->data['needDD'] = $this->site_model->bind_needDD();
		$this->data['ageGroupDD'] = $this->site_model->bind_ageGroupDD();
		
		$this->template->load('template/template_mobile', 'site/mobile_home', $this->data);
		//redirect(base_url()."main");
	}*/
	public function switch_customer(){
		$this->data = "";
		$this->template->load('template/template_mobile', 'site/home_mobile_view', $this->data);
	}
	
	public function GrievanceRedressal($pageSlug){
		$this->load->model('site_model');
		array_push($this->data['JS_FILES'], 'assets/js/moment.js');
		array_push($this->data['JS_FILES'], 'assets/js/corporate-governance.js');
		if($pageSlug=="service-tat"){
			$pgtitle = "Service Tats";
			$viewName = "site/ServiceTats_view";
			$this->data['serviceTats'] = $this->site_model->get_ServiceTats(GRIEVANCE_REDRESSAL);
		}else if($pageSlug=="irdai-handbook"){
			$pgtitle = "IRDAI Handbook";
			$viewName = "site/IrdaiHandbook_view";
			$this->data['irdaiHandbooks'] = $this->site_model->get_pdfContent(230);
		}else if($pageSlug=="customer-bulletin"){
			$pgtitle = "Customer Bulletin";
			$viewName = "site/CustomerBulletin_view";
			$this->data['costomerBulletin'] = $this->site_model->get_pdfContent(231);
			$years = $this->site_model->get_customerBulletinDD();
			$dataa = json_decode($years->years, true);
			$this->data['years'] = $dataa['field_list_items'];
		}else if($pageSlug=="fatca"){
			$pgtitle = "FATCA";
			$viewName = "site/Facta_view";
			$this->data['factaQA'] = $this->site_model->get_factaQA();
		}else if($pageSlug=="aml-guidelines"){
			$pgtitle = "AML Guidelines";
			$viewName = "site/AmlGuidelines_view";
			$this->data['amlGuidelines'] = $this->site_model->get_pdfContent(236);
		}else{
			$pgtitle = "";
			show_404();
		}
		
		$this->breadcrumb->add_crumb('Home', base_url());
		//$this->breadcrumb->add_crumb('Grievance Redressal', "javascript:;");
		$this->breadcrumb->add_crumb('Grievance Redressal', base_url('grievance-redressal/service-tat'));
		
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', $viewName, $this->data);
	}


	public function search() {
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Home', base_url());
		$this->breadcrumb->add_crumb('Search');
		
		//Set template Title
		$this->template->set('title', 'Search');
		$this->template->load('template/template', 'site/search_view', $this->data);
	}

	public function error_page_404(){
		$this->template->set('title', 'error');
		$this->template->load('template/template', 'site/show_404');

	}
public function testing() {
$this->load->view('testing');
}
public function advisor_details()
    {
       // array_push($this->data['JS_FILES'], 'assets/js/advisor.js');
		 array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');
		 
		/*array_push($this->data['JS_FILES'], 'assets/advisor/js/jquery-3.5.1.slim.js');
		 array_push($this->data['JS_FILES'], 'assets/advisor/js/popper.min.js');
		 array_push($this->data['JS_FILES'], 'assets/advisor/js/bootstrapValidator.min.js');
		 array_push($this->data['JS_FILES'], 'assets/advisor/js/jquery.rateyo.min.js');*/
		 
		
	  
	  
       $pgtitle = 'Know your Life Advisor';
         $this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
        $this->breadcrumb->add_crumb($pgtitle);
        $this->template->set('title', $pgtitle);  
          
        $this->template->load('template/template', 'advisors/advisor-details', $this->data);        
    }
	
	public function fit4sure_privacy_policy() {
    //Add the Breadcrumbs
    $this->breadcrumb->add_crumb('Home', base_url());
    $this->breadcrumb->add_crumb('Fit4Sure Privacy Policy');
    
    //Set template Title
    $this->template->set('title', 'Fit4Sure Privacy Policy');
    $this->template->load('template/template', 'others/fit4sure-privacy-policy', $this->data);
}




	public function fit4sure() {
    //Add the Breadcrumbs
    $this->breadcrumb->add_crumb('Home', base_url());
    $this->breadcrumb->add_crumb('Fit4Sure');
    
    //Set template Title
    $this->template->set('title', 'Fit4Sure');
    $this->template->load('template/template', 'others/fit4sure', $this->data);
}




public function eterm() {
    //Add the Breadcrumbs
    $this->breadcrumb->add_crumb('Home', base_url());
    $this->breadcrumb->add_crumb('E-Term');
    
    //Set template Title
    $this->template->set('title', 'E-Term');
    $this->template->load('template/template_product', 'site/eterm', $this->data);
}

public function eterm_oldDesign() {
    //Add the Breadcrumbs
    $this->breadcrumb->add_crumb('Home', base_url());
    $this->breadcrumb->add_crumb('E-Term');
    
    //Set template Title
    $this->template->set('title', 'E-Term');
    $this->template->load('template/template_product', 'site/eterm_oldDesign', $this->data);
}


	
public function gsp() {
    //Add the Breadcrumbs
    $this->breadcrumb->add_crumb('Home', base_url());
    $this->breadcrumb->add_crumb('GSP');
    
    //Set template Title
    $this->template->set('title', 'GSP');
    $this->template->load('template/template', 'others/gsp', $this->data);
}

public function homepage(){
	
	//$this->data = "";  
	
	$this->load->model('mobile_model');
				$this->load->helper('form');
 
		
		//array_push($this->data['Mobile_JS_FILES'], 'assets/mobile/js/need_base_cal.js');
		
		$data['needDDMobile'] = $this->mobile_model->bind_needDD_mobile();
		
		$data['bind_ageGroupDDMobile'] = $this->mobile_model->bind_ageGroupDDMobile();
		
		//echo json_encode($data['bind_ageGroupDDMobile']);exit;
		
		
	$this->template->load('template/template_mobile_home', 'site/mobile_home',$data);
		//redirect(base_url()."main");
	
	}

/*	
public function kotak_tv()
{
    $this->load->model('site_model');
    array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
    $this->template->set('title', 'Home');
    $this->load->helper('form');
    $this->template->load('template/template', 'site/kotak-tv', $this->data);
}

public function kotak_tv_details()
{
    $this->load->model('site_model');
    array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
    $this->template->set('title', 'Home');
    $this->load->helper('form');
    $this->template->load('template/template', 'site/kotak-tv-details', $this->data);
}
*/
/*

public function kotak_tv()
{ 

 $this->load->model('site_model');
    array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
    $this->template->set('title', 'Home');
    $this->load->helper('form');
    		
	$this->data['categoryDetails'] = $this->site_model->get_category();
	
	$this->template->load('template/template', 'site/kotak-tv', $this->data);
 
    }  

	function product_details($category_id)
	{	  
	 $this->load->model('site_model'); 
	$productDetails= $this->site_model->get_productBycategory($category_id);
	return $productDetails;
	}
	
function getYouTubeVideoId($pageVideUrl) {
    $link = $pageVideUrl;
    $video_id = explode("?v=", $link);
    if (!isset($video_id[1])) {
        $video_id = explode("youtu.be/", $link);
    }
    $youtubeID = $video_id[1];
    if (empty($video_id[1])) $video_id = explode("/v/", $link);
    $video_id = explode("&", $video_id[1]);
    $youtubeVideoID = $video_id[0];
    if ($youtubeVideoID) {
        return $youtubeVideoID;
    } else {
        return false;
    }
}
function week_between_two_dates($date1, $date2)
{
    $first = DateTime::createFromFormat('Y-m-d', $date1);
    $second = DateTime::createFromFormat('Y-m-d', $date2);
    if($date1 > $date2) return week_between_two_dates($date2, $date1);
    return floor($first->diff($second)->days/7);
}
	public function kotak_tv_details()

    {

        $this->load->model('site_model');     

        array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$this->template->load('template/template', 'site/page2', $this->data);

         

    }*/
	
public function kotak_tv()
{ 

 $this->load->model('site_model');
    array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
    $this->template->set('title', 'Home');
    $this->load->helper('form');
    		
	$this->data['categoryDetails'] = $this->site_model->get_category();
	
	$this->template->load('template/template', 'site/kotak-tv', $this->data);
 
    }  

	function product_details($category_id)
	{  
	 $this->load->model('site_model'); 
	$productDetails= $this->site_model->get_productBycategory($category_id);
	return $productDetails;
	}
	function product_detailsByLimit($category_id,$page,$language)
	{	  
	 $this->load->model('site_model'); 
	$productDetails= $this->site_model->product_detailsByLimit($category_id,$page,$language);
	return $productDetails;
	}
	
function getYouTubeVideoId($pageVideUrl) {
    $link = $pageVideUrl;
    $video_id = explode("?v=", $link);
    if (!isset($video_id[1])) {
        $video_id = explode("youtu.be/", $link);
    }
    $youtubeID = $video_id[1];
    if (empty($video_id[1])) $video_id = explode("/v/", $link);
    $video_id = explode("&", $video_id[1]);
    $youtubeVideoID = $video_id[0];
    if ($youtubeVideoID) {
        return $youtubeVideoID;
    } else {
        return false;
    }
}
function week_between_two_dates($date1, $date2)
{
    /*$first = DateTime::createFromFormat('Y-m-d', $date1);
    $second = DateTime::createFromFormat('Y-m-d', $date2);
    if($date1 > $date2) return week_between_two_dates($date2, $date1);
    return floor($first->diff($second)->days/7);*/
	
	
    $firstDate = new DateTime($date1); 
    $secondDate = new DateTime($date2); 
    $differenceInDays = $firstDate->diff($secondDate)->days; 
    $differenceInWeeks = $differenceInDays / 7; 
    return floor($differenceInWeeks);

}
	public function kotak_tv_details()

    {

        $this->load->model('site_model');     

        array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
        $this->template->set('title', 'Home');
        $this->load->helper('form');
		$this->template->load('template/template', 'site/page2', $this->data);        

    }
 
 
public function your_needs_our_priority() {
    //Add the Breadcrumbs
    $this->breadcrumb->add_crumb('Home', base_url());
    $this->breadcrumb->add_crumb('your-needs-our-priority');
    
    //Set template Title
    $this->template->set('title', 'your-needs-our-priority');
    $this->template->load('template/template_product', 'your-needs-our-priority/index', $this->data);
}
public function cookie_test()

    {
		if(get_cookie('kotak_customer_type')){$cusType = get_cookie('kotak_customer_type');}else{$cusType = "new_customer";}
		
		if($cusType == "new_customer"){$gaCat = "New Customer";
		}else if($cusType == "existing_customer"){$gaCat = "Existing Customer";
		}else if($cusType == "life_advisor"){$gaCat = "Life Advisor";}
		echo "customerType".$customerType."===".$gaCat;
		//$this->template->load('template/template', 'site/cookie_test', $this->data);        

    }
 function get_views(){
	$v=1;
	$v_link = secure_input_data($this->input->post('videolink'));
	$views = secure_input_data($this->input->post('views'));
	 $views_count = $v+$views;
	$this->load->model('site_model');
	$this->site_model->updateviewcount($views_count,$v_link);
 }
 
 
public function disclaimer_page()
{ 
    $this->load->model('site_model');
    array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
    $this->template->set('title', 'Home');
    $this->load->helper('form');    		
	$this->template->load('template/template', 'site/disclaimer', $this->data);
 } 
 
 
public function einvest_disclaimer()
{ 
    $this->load->model('site_model');
    array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
    $this->template->set('title', 'Home');
    $this->load->helper('form');    		
	$this->template->load('template/template', 'site/einvestdisclaimer', $this->data);
 } 
 
 public function tax_saving_solutions()
    {
		$data['segment'] = $segment;
        $this->breadcrumb->add_crumb('Insurance Guide', base_url(IG_MODULE_LINK));
		$this->breadcrumb->add_crumb('Terms & Conditions');
		$this->template->set('title', 'Insurance Guide - Terms & Conditions');
		//$this->template->load('template/template', 'insurance-guide/tax-saving', $this->data);
		$this->template->load('template/template', 'insurance_guide/tax-saving', $this->data);
	}
	

	public function leadcapture(){
			$this->template->set('title', 'Error Page');
			$this->load->helper('form');
			$this->template->load('template/template', 'site/leadcapture', $this->data);
		
	}
	
	public function seo_test(){
			$this->template->set('title', 'Error Page');
			$this->load->helper('form');
			$this->template->load('template/template_seo', 'site/seo-test', $this->data);
		
	}
	
	public function details_products(){
		$temp1='';
			$paginations=$this->input->post('paginations');
		  $catname=$this->input->post('catname');
		  $language=$this->input->post('language');
		  if($language=='Select Language'){
			  $language='';
		  }
		  $this->load->model('site_model');
		  	   
		 
		   
		   $productDetails= $this->site_model->product_detailsByLimit($catname,$paginations,$language);

		  // echo "==count=".$TotalResults;
		  if($productDetails){
		$n=1;
		foreach($productDetails as $pinfo)
{
	$j=1;
	$thumbURL='';
				 
				   if($j>1){$jclass="mt-139";} 
				    $cur_date=date('Y-m-d');
				   $no_weeks=$this->week_between_two_dates($cur_date, $pinfo->created_date);

		   $video_link=$pinfo->video_link;
		   if($video_link!=''){
		  $temp=explode('https://youtu.be/',$video_link); 

		  $video_id='https://www.youtube.com/watch?v='.$temp[1];
		  $youtubeID = $this->getYouTubeVideoId($video_id);
		  $thumbURL = 'https://img.youtube.com/vi/' . $youtubeID . '/mqdefault.jpg';
		   }
	  $temp1=$temp1.'<div class="w-33" id="content_data">';
	  
		  
		  
		  $temp1=$temp1.'<div class="cards mr-57">';
			   if($catname!="Live"){
			  $temp1=$temp1.'<div class="position-relative">
				  <img src="'.$thumbURL.'" class="prod-img1">';
				  if($catname=="Live"){$temp1=$temp1.'<a href="#" class="live-bg"> <img src="assets/images/kotak-tv/live-white.png" class="live-imgg-side">Live</a>'; }
				  
				  $temp1=$temp1.'<a data-fancybox href="'.$pinfo->video_link.'" class="js-video-btn video-circle video-circle--lg">
					  <div class="video-circle__button play-btn" data-tag="play-button" onclick="view_count('.$n.',' .$catname.','. $pinfo->views.','.$pinfo->video_link.')">
						  <img src="assets/images/kotak-tv/play-icon.png" class="prod-img1">
					  </div>
				  </a>						
			  </div>';
			   } 
			  $temp1=$temp1.'<p>'.substr($pinfo->description,0,75).'</p>';
			   if($catname=="Live"){
			   } else {
				  $temp1=$temp1.'<div class="dd-fflex">
				  <h6 id="views_num '.$n. $catname.'>'; if($pinfo->views!=''){$temp1=$temp1.$pinfo->views;}else{$temp1=$temp1.'0';}$temp1=$temp1.'Views</h6>
				  <h6 class="dot">'.$no_weeks.'week ago</h6>
				  <h6 class="dot">'.$pinfo->time_in_sec.'</h6>
			  </div>';
			   } 
		 $temp1=$temp1.' </div>
		  
	  
	  </div>
	  </div>
	  </div>';
	   $n++;} $temp1=$temp1.'<div class="'.$catname.($paginations+1).' dd-fflex">';
	    }     
	   
		$productDetails1= $this->site_model->product_detailsByLimit($catname,$paginations+1,$language);
		if($productDetails1){
			$nextrec='1';
		}else{
			$nextrec='0';

		}

	if($productDetails){ 
		echo json_encode(array("product_details"=>$temp1,'status'=>1,'nextrec'=>$nextrec));
	}else{ 
		echo json_encode(array("product_details"=>$temp1,'status'=>0,'nextrec'=>$nextrec));

	}
}



function product_detailsByLimit111(){
			  $this->load->model('site_model');

	$catname=$this->input->post('catname');
	 $language=$this->input->post('language');
	$paginations=$this->input->post('paginations');
		$productDetails= $this->site_model->product_detailsByLimit($catname,$paginations,$language);
	  if($productDetails){
		$n=1;
		foreach($productDetails as $pinfo)
{
	$j=1;
	$thumbURL='';
				 
				   if($j>1){$jclass="mt-139";} 
				    $cur_date=date('Y-m-d');
				   $no_weeks=$this->week_between_two_dates($cur_date, $pinfo->created_date);

		   $video_link=$pinfo->video_link;
		   if($video_link!=''){
		  $temp=explode('https://youtu.be/',$video_link); 

		  $video_id='https://www.youtube.com/watch?v='.$temp[1];
		  $youtubeID = $this->getYouTubeVideoId($video_id);
		  $thumbURL = 'https://img.youtube.com/vi/' . $youtubeID . '/mqdefault.jpg';
		   }
	  $temp1=$temp1.'<div class="w-33" id="content_data">';
	  
		  
		  
		  $temp1=$temp1.'<div class="cards mr-57">';
			   if($catname!="Live"){
			  $temp1=$temp1.'<div class="position-relative">
				  <img src="'.$thumbURL.'" class="prod-img1">';
				  if($catname=="Live"){$temp1=$temp1.'<a href="#" class="live-bg"> <img src="assets/images/kotak-tv/live-white.png" class="live-imgg-side">Live</a>'; }
				  
				  $temp1=$temp1.'<a data-fancybox href="'.$pinfo->video_link.'" class="js-video-btn video-circle video-circle--lg">
					  <div class="video-circle__button play-btn" data-tag="play-button" onclick="view_count('.$n.',' .$catname.','. $pinfo->views.','.$pinfo->video_link.')">
						  <img src="assets/images/kotak-tv/play-icon.png" class="prod-img1">
					  </div>
				  </a>						
			  </div>';
			   } 
			  $temp1=$temp1.'<p>'.substr($pinfo->description,0,75).'</p>';
			   if($catname=="Live"){
			   } else {
				  $temp1=$temp1.'<div class="dd-fflex">
				  <h6 id="views_num '.$n. $catname.'>'; if($pinfo->views!=''){$temp1=$temp1.$pinfo->views;}else{$temp1=$temp1.'0';}$temp1=$temp1.'Views</h6>
				  <h6 class="dot">'.$no_weeks.'week ago</h6>
				  <h6 class="dot">'.$pinfo->time_in_sec.'</h6>
			  </div>';
			   } 
		 $temp1=$temp1.' </div>
		  
	  
	  </div>
	  </div>
	  </div>';
	   $n++;} $temp1=$temp1.'<div class="'.$catname.($paginations+1).' dd-fflex">';
	    }     
	   
		$productDetails1= $this->site_model->product_detailsByLimit($catname,$paginations+1,$language);
		if($productDetails1){
			$nextrec='1';
		}else{
			$nextrec='0';

		}

	if($productDetails){
		echo json_encode(array("product_details"=>$temp1,'status'=>1,'nextrec'=>$nextrec));
	}else{
		echo json_encode(array("product_details"=>$temp1,'status'=>0,'nextrec'=>$nextrec));

	}
  }
	public function happyyou_privacy_policy(){
			$this->template->set('title', 'Error Page');
			$this->load->helper('form');
			$this->template->load('template/template', 'site/happyyou_privacy_policy', $this->data);
		
	}
	
	public function disclaimer_page_kgfb(){
			$this->template->set('title', 'Error Page');
			$this->load->helper('form');
			$this->template->load('template/template', 'site/disclaimer_kgfb', $this->data);
		
	}

	public function happyyou(){
		$this->template->set('title', 'Error Page');
		$this->load->helper('form');
		$this->template->load('template/template', 'site/happyyou', $this->data);
	
}


public function superstarsave(){
	$cust_name=$this->input->post('name');
	$cust_number=$this->input->post('number');
	$cust_emailid=$this->input->post('emailid');
	$type=$this->input->post('type');
	$this->load->model('site_model');
	$where=array('cust_number'=>$cust_number,'cust_emailid'=>$cust_emailid,'typeoftab'=>$type);
	$superstardetails=$this->site_model->getRecordsDetails($where,'kotak_superstar');
	if($superstardetails==false){
		$id=$this->site_model->save(array('cust_name'=>$cust_name,'cust_number'=>$cust_number,'cust_emailid'=>$cust_emailid,'typeoftab'=>$type,'save_date'=>date('y-m-d')),'kotak_superstar');
		echo json_encode(array('status'=>'1'));

	}else{
		echo json_encode(array('status'=>'0'));
	}

}
function ratingRetrieve(){
	$this->load->model('site_model');
	  $rating=$this->input->post('rating');
	  $fixed=$this->input->post('fixed');
	  $pagename=$this->input->post('pagename');

	//  echo $rating."rating";
	$imggreen='votedcheck';
	$excellent='';$Best='';$Good='';$Fair='';$Satifactory=''; $submitdata='Was this helpful?';$submitDiv='';$disable='';
	$totalratings=$fixed;
	$display='d-none';
	$ratingdetails=$this->site_model->getRecordsDetails(array('pagename'=>$pagename),'kotak_feedback');
	$rating_count=0;
		  if(!empty($ratingdetails)){
			  foreach($ratingdetails as $row){
				  $rating_count++;
  
			  }
		  }
		  $totalratings=$fixed+$rating_count;
	 //   echo $this->session->userdata('term_plan').'ffffff';
		
	   //  $term_rating=$this->session->userdata('term_rating');
	   if($rating!="null"){
		$term_rating=$rating;

		  if($term_rating){
			$disable='disabled="disabled"';
			$display='d-block';
				$submitdata='Thank you for your feedback!';
				$submitDiv='style="display:none;"';
					if($term_rating=='Excellent'){
						$excellent='checked="checked"';
					}else if($term_rating=='Best'){
						$Best='checked="checked"';
					}else if($term_rating=='Good'){
						$Good='checked="checked"';
					}else if($term_rating=='Fair'){
						$Fair='checked="checked"';
					}else if($term_rating=='Satifactory'){
						$Satifactory='checked="checked"';
					}
				}
			}
	   $ratingHtml="<div class='midWrapper'>
	  <div class='container'> <!-- Please change Styling-->
	<div class='feedback-container'>
	  <div class='share-side'>
		<div class='text-center'>
		  <h2 class='overall-ratingtxt'>Overall ratings</h2>
		  <p class='votedCount-text'>Rated by <span class='votedCount'>$totalratings </span>Customers</p>
		</div>
		<div class='stars-bg'>
		<div class='rating-img'></div>

		  <p class='actual-ratings'>4.7</p>
		</div>
	  </div>
	  <div class='verticalBorder'></div>
	  <div class='review-side'>
		<div class='rating-widget'>
		  <!-- Rating Stars Box -->
		
					
		  <div class='rating-stars text-left'>
			<p class='infoText'>$submitdata</p>
			<div class='stars-btn'>
			  <form id='my_radio_box'>
				<div class='rating'>
				  <input type='radio' name='rating' value='Excellent' id='rating-5' $excellent $disable'>
				  <label for='rating-5'></label>
				  <input type='radio' name='rating' value='Best' id='rating-4' $Best $disable>
				  <label for='rating-4'></label>
				  <input type='radio' name='rating' value='Good' id='rating-3' $Good $disable>
				  <label for='rating-3'></label>
				  <input type='radio' name='rating' value='Fair' id='rating-2' $Fair $disable>
				  <label for='rating-2'></label>
				  <input type='radio' name='rating' value='Satifactory' id='rating-1' $Satifactory $disable>
				  <label for='rating-1'></label>
				</div>
			  </form>
			  <div class='submitDiv' $submitDiv>
				<button type='submit' class='submitBtn'>Submit Rating</button>
			  </div>
			 
			</div>
		  </div>
		</div>
	  </div>
	  <div class='$imggreen $display'>
	  </div>
	</div>
  </div>
	  </div>";
	  echo json_encode(array('ratingHtml'=>$ratingHtml));
	  
}
function feedbackrating(){
	$this->load->library('session');

	$rating=$this->input->post('rating');
	$pagename=$this->input->post('pagename');
	$fixed=$this->input->post('fixed');
	$this->load->model('site_model');
	$this->session->set_userdata($pagename, $rating);
	$rating_id=$this->site_model->save(array('rating'=>$rating,"pagename"=>$pagename),'kotak_feedback');
	
		$where=array("pagename"=>$pagename);
	$feedbackratingdetailscount=0;
	$feedbackratingdetails=$this->site_model->getRecordsDetails($where,'kotak_feedback');
	if($feedbackratingdetails){
	   $feedbackratingdetailscount=$fixed+count($feedbackratingdetails);
	}

	echo json_encode(array('feedbackratingdetailscount'=>$feedbackratingdetailscount));

}

 function thank_you(){
	$this->load->view('site/thank');
 }
 
 public function kli_boost(){
	$this->template->set('title', 'KLI BOOT');
	$this->load->helper('form');
	$this->template->load('template/template', 'site/kli_boost', $this->data);

}
    

 
public function MDvideo(){
	$this->template->set('title', 'MD Video');
	$this->load->helper('form');
	$this->template->load('template/template', 'site/MDvideo', $this->data);

}

public function testexcel()
{
$this->load->model('site_model');

$this->data['excelData'] = $this->site_model->getExcelData();

$this->load->view('others/test',$this->data);
}


public function ulip_plans(){
	$this->load->model('site_model');

	array_push($this->data['JS_FILES'], 'assets/js/insurance-guide.js', 'assets/js/social-share.js');

		$this->load->model('insuranceplan_model');
		$this->template->set('title', 'Term Plan');
		$this->load->helper('form');
		$this->template->load('template/template', 'insurance_plan/ulip-plan', $this->data);
	
}
 
 
public function investment_plans(){
	$this->load->model('site_model');

	array_push($this->data['JS_FILES'], 'assets/js/insurance-guide.js', 'assets/js/social-share.js');

		$this->load->model('insuranceplan_model');
		$this->template->set('title', 'Investment Plan');
		$this->load->helper('form');
		$this->template->load('template/template', 'insurance_plan/investment-plans', $this->data);
	
}
 
public function getnearloc(){
	//array_push($this->data['JS_FILES'], 'assets/js/insurance-guide.js', 'assets/js/social-share.js');
	$this->template->set('title', 'Term Plan');
	$this->load->helper('form');
	$this->load->model('site_model');

	$this->data['stateslist'] = $this->site_model->get_locationdetails_for_map();
	$this->data['bindStates'] = $this->site_model->get_States();

	$this->template->load('template/template','site/nearest-branch',$this->data);
 }
 
 
 
 public function getnearloc1(){
	//array_push($this->data['JS_FILES'], 'assets/js/insurance-guide.js', 'assets/js/social-share.js');
	$this->template->set('title', 'Term Plan');
	$this->load->helper('form');
	$this->load->model('site_model');

	$this->data['stateslist'] = $this->site_model->get_locationdetails_for_map();
	$this->data['bindStates'] = $this->site_model->get_States();

	$this->template->load('template/template','site/nearest-branch1',$this->data);
 }
 
 public function getMapResultcities(){
	$this->load->model('site_model');

	$city = $this->input->post('cityData');
	$result = $this->site_model->get_MapResult($city);
	$arr = array();
	foreach($result as $cities){
		if (isset($cities->phonenumber) && ($cities->phonenumber != '' && $cities->phonenumber !='NA' && $cities->phonenumber!='-')) {
			$phonenumber = $cities->phonenumber;
			$stdcode = $cities->stdcode;

			if($cities->stdcode=='NA' || $cities->stdcode=='-' || $cities->stdcode==''){
				$stdcode='';
								$dailnumber=$phonenumber;

				$stdcodephone = '<span>Contact Number: ' .$phonenumber.'</span>';
				$stdcodephone1 = '<p class="kli-contact">Contact Number:</b>' .$phonenumber.'</p>';
				$stdcodephone = $stdcodephone . '<span>Secondary Number: 18002098800'.'</span>';
				$stdcodephone1 = $stdcodephone1 . '<p><b>Secondary Number:</b>18002098800</p>';
		}else{
										$dailnumber=$stdcode.$phonenumber;

						$stdcodephone = '<span>Contact Number: ' . $stdcode .'-'.$phonenumber.'</span>';
						$stdcodephone1 = '<p class="kli-contact">Contact Number:</b>' . $stdcode .'-'.$phonenumber.'</p>';
						$stdcodephone = $stdcodephone . '<span>Secondary Number: 18002098800'.'</span>';
		                $stdcodephone1 = $stdcodephone1 . '<p class="kli-contact"><b>Secondary Number:</b>18002098800</p>';

				}	} else {
										$dailnumber='18002098800';

						$stdcodephone = '<span>Contact Number: 18002098800</span>';
		                $stdcodephone1 = '<p class="kli-contact"><b>Contact Number:</b> 18002098800</></p>';

					}
					$address1 = "{$cities->brnchaddress1}, {$cities->brnchcity}, {$cities->states}-{$cities->brnchpincode}";

		$address = "{$cities->brnchaddress1}, {$cities->brnchcity}, {$cities->states}-{$cities->brnchpincode} {$stdcodephone}";
		$lat = "{$cities->latitude}";
		$lng = "{$cities->longitude}";
		
		$branchArea = "";
		$stdCode = "{$cities->stdcode}";
		$branchPhone = "{$cities->phonenumber}";	
			$brnchcity = "{$cities->brnchcity}";

		
		array_push($arr, array('address' => $address,'latitude' => $lat,'phonenumber'=>$dailnumber,'longitude' => $lng,'branchArea' => $brnchcity,'stdCode' => $stdCode,'branchPhone' => $branchPhone,'stdcodephone1'=>$stdcodephone1,'address1'=>$address1));
	}
	echo json_encode($arr);
}
 
public function getMapResultByPincodebyval(){
	$pincode = $this->input->post('pincode');
	$this->load->model('site_model');
	$result = $this->site_model->get_MapResultByPincode($pincode);
	$arr = array();
	foreach($result as $cities){
		if (isset($cities->phonenumber) && ($cities->phonenumber != '' && $cities->phonenumber !='NA' && $cities->phonenumber!='-')) {
			$phonenumber = $cities->phonenumber;
			$stdcode = $cities->stdcode;

			if($cities->stdcode=='NA' || $cities->stdcode=='-' || $cities->stdcode==''){
				$dailnumber=$phonenumber;
				$stdcode='';
				$stdcodephone = '<span>Contact Number: ' .$phonenumber.'</span>';
				$stdcodephone1 = '<p class="kli-contact">Contact Number:</b>' .$phonenumber.'</p>';
				$stdcodephone = $stdcodephone . '<span>Secondary Number: 18002098800'.'</span>';
				$stdcodephone1 = $stdcodephone1 . '<p><b>Secondary Number:</b>18002098800</p>';
		}else{
							$dailnumber=$stdcode.$phonenumber;

						$stdcodephone = '<span>Contact Number: ' . $stdcode .'-'.$phonenumber.'</span>';
						$stdcodephone1 = '<p class="kli-contact">Contact Number:</b>' . $stdcode .'-'.$phonenumber.'</p>';
						$stdcodephone = $stdcodephone . '<span>Secondary Number: 18002098800'.'</span>';
		                $stdcodephone1 = $stdcodephone1 . '<p class="kli-contact"><b>Secondary Number:</b>18002098800</p>';

				}	} else {
					$dailnumber='18002098800';
						$stdcodephone = '<span>Contact Number: 18002098800</span>';
		                $stdcodephone1 = '<p class="kli-contact"><b>Contact Number:</b> 18002098800</></p>';

					}
					$address1 = "{$cities->brnchaddress1}, {$cities->brnchcity}, {$cities->states}-{$cities->brnchpincode}";

		$address = "{$cities->brnchaddress1}, {$cities->brnchcity}, {$cities->states}-{$cities->brnchpincode} {$stdcodephone}";
		$lat = "{$cities->latitude}";
		$lng = "{$cities->longitude}";
		
		$branchArea = "";
		$stdCode = "{$cities->stdcode}";
		$branchPhone = "{$cities->phonenumber}";	
			$brnchcity = "{$cities->brnchcity}";

		
		array_push($arr, array('address' => $address,'latitude' => $lat,'phonenumber'=>$dailnumber,'longitude' => $lng,'branchArea' => $brnchcity,'stdCode' => $stdCode,'branchPhone' => $branchPhone,'stdcodephone1'=>$stdcodephone1,'address1'=>$address1));
	}
	echo json_encode($arr);
}
 
    
public function bindCitiesdetials(){
	$this->load->model('site_model');
	$opt = "";
	$state = $this->input->post('stateData');
	$bindCities = $this->site_model->get_Citiesdetails($state);
	foreach($bindCities as $value){$array1[] = $value->cities;}
	$opt .= "<option>City</option>";
	foreach($array1 as $cities){$opt .= "<option value='$cities'>$cities</option>";}
	echo json_encode($opt);
}
public function account_aggregator(){
	$this->template->set('title', 'Account Aggregator');
	$this->load->helper('form');
	$this->template->load('template/template', 'site/account-aggregator', $this->data);

}
public function new_404(){
	$this->template->set('title', '404');
	$this->load->helper('form');
	$this->template->load('template/template', 'site/404page', $this->data);
}

public function default_url(){
	$this->load->library('common');

	 $actual_link_url = $_SERVER['REQUEST_URI'];  
	$last_segment = basename(parse_url($actual_link_url, PHP_URL_PATH));
	$this->load->model('site_model');
	$blogrecords=$this->data['blogrecords']=$this->site_model->getRecordsDetails(array('last_segment'=>$last_segment,'blogstatus'=>1),'kotak_cms_blogs');
	if($blogrecords){
	$endpoint=base_url().'api/'.$blogrecords[0]->last_segment;
	$headers = array('Content-Type:application/json');
	$makecall = $this->common->callAPI('GET', $endpoint, array(), $headers);
	$result = json_decode($makecall);
	
	if(!empty($result)){
	$status=$result->status;  
	if($status==200)
	{
		if($result->data->user_details!="")
		{
			//$i=1;
			foreach($result->data->user_details as $info)

			{ 
				$this->data['contents']=$info->content;
			
			}
		}
	}
	$breadcumbexplode = json_decode($blogrecords[0]->breadcumbs, TRUE);

if (count($breadcumbexplode) > 0) {
    foreach ($breadcumbexplode as $key => $value) {

        if (!empty($value[1])) {
            $this->breadcrumb->add_crumb($key, $value);
        } else {
            $this->breadcrumb->add_crumb($key);
        }
    }
}
		

	

	$this->template->load('template/cms-template', 'site/dummy', $this->data);
	}else{
		show_404();
	}
}else{
	show_404();

}
}


public function gen2gen_disclaimer()
{ 
    $this->load->model('site_model');
    array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
    $this->template->set('title', 'Home');
    $this->load->helper('form');    		
	$this->template->load('template/template', 'site/gen2gen', $this->data);
 } 
 function tl(){
	$this->load->model('insuranceplan_model');
	$this->template->set('title', 'Home');
	$this->load->helper('form');
	$this->template->load('template/template', 'term-insurance/term-dup', $this->data);
}
function integrationapi(){
	$coverAmt = $this->input->post('coverAmt');
     $age = $this->input->post('age');
     $gender = $this->input->post('gender');
     $tobacco = $this->input->post('tobacco');
	$curl = curl_init();
$policyterm=75-$age;
$PremiumPaymentFrequency=60-$age;
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://klibus.mykotaklife.com/IntRestServices/NPSLWAPI.svc/NPSLWPricing',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "Request": {
        "RequestInfo": {
            "UserName": "01N119650",
            "CreationDate": "'.date("Y-m-d").'",
            "CreationTime": "'.date("H:i:s").'",
            "Source": "B2C_eTerm_Web",
            "SourceInfoName": "B2C_eTerm_Web",
            "TransactionId": "9e59098a45f549e894",
            "RequestorToken": "",
            "LastSyncDate": ""
        },
        "RequestPayload": {
            "Transactions": [
                {
                    "TransactionData": {
                        "InsuredInfo": {
                            "AdvisorState": "Maharastra",
                            "CustomerState": "Maharastra",
                            "InsuredAge": "'.$age.'",
                            "InsuredGender": "'.$gender.'",
                            "IsInsuredAndPremiumPayer": "true",
                            "IsDeferred": "",
                            "IsJointLife": "",
                            "ProposerAge": "'.$age.'",
                            "ProposerGender": "'.$gender.'",
                            "SpouseAge": "",
                            "SpouseGender": "",
                            "ClientCategory": "New Customers",
                            "SalesChannel": "Individual Agents",
                            "SalariedCustomer": "No",
                            "IsExistingCustomer": "false",
                            "IsTobacoUser": "'.$tobacco.'"
                        },
                        "BasecoverandPlanInfo": [                            
                            {
                                "DistributionChannel": "ONLINE",
                                "PlanOption": "Immediate Payout",
                                "PlanOptionType": "Life",
                                "StepUpOption": "No",
                                "SumAssured": "'.$coverAmt.'",
                                "PolicyTerm": "'.$policyterm.'",
                                "PremiumPaymentTerm": "'.$PremiumPaymentFrequency.'",
                                "PremiumPaymentFrequency": "Yearly",
                                "Riderdetials": [
                                    {
                                        
                                    }
                                ]
                            }
                        ],
                        "PlanCode": "K92",
                        "Source": "B2C_eTerm_Web"
                    }
                }
            ]
        }
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/plain'
  ),
));
echo '"Request": {
	"RequestInfo": {
		"UserName": "01N119650",
		"CreationDate": "'.date("Y-m-d").'",
		"CreationTime": "'.date("H:i:s").'",
		"Source": "B2C_eTerm_Web",
		"SourceInfoName": "B2C_eTerm_Web",
		"TransactionId": "9e59098a45f549e894",
		"RequestorToken": "",
		"LastSyncDate": ""
	},
	"RequestPayload": {
		"Transactions": [
			{
				"TransactionData": {
					"InsuredInfo": {
						"AdvisorState": "Maharastra",
						"CustomerState": "Maharastra",
						"InsuredAge": "'.$age.'",
						"InsuredGender": "'.$gender.'",
						"IsInsuredAndPremiumPayer": "true",
						"IsDeferred": "",
						"IsJointLife": "",
						"ProposerAge": "'.$age.'",
						"ProposerGender": "'.$gender.'",
						"SpouseAge": "",
						"SpouseGender": "",
						"ClientCategory": "New Customers",
						"SalesChannel": "Individual Agents",
						"SalariedCustomer": "No",
						"IsExistingCustomer": "false",
						"IsTobacoUser": "'.$tobacco.'"
					},
					"BasecoverandPlanInfo": [                            
						{
							"DistributionChannel": "ONLINE",
							"PlanOption": "Immediate Payout",
							"PlanOptionType": "Life",
							"StepUpOption": "No",
							"SumAssured": "'.$coverAmt.'",
							"PolicyTerm": "'.$policyterm.'",
							"PremiumPaymentTerm": "'.$PremiumPaymentFrequency.'",
							"PremiumPaymentFrequency": "Yearly",
							"Riderdetials": [
								{
									
								}
							]
						}
					],
					"PlanCode": "K92",
					"Source": "B2C_eTerm_Web"
				}
			}
		]
	}
}';
 echo $response = curl_exec($curl);

curl_close($curl);
$responseObject=json_decode($response);	
echo $responseObject->Response->ResponsePayload->Transactions->TransactionData->Result->IsSuccess;
if($responseObject->Response->ResponsePayload->Transactions->TransactionData->Result->IsSuccess==="true") {
$totalPremiumFirstYrInclGST = $responseObject->Response->ResponsePayload->Transactions->TransactionData->BaseCoverPremiuminfo->TotalpremiumFirstYrInclGST;
if($totalPremiumFirstYrInclGST>0){
	$varresponse="<div class='calculate-bottom-section codFormResult' style=''>
    <h1>Premium Amount</h1>

    <h1>Today</h1>
    <div style='font-size: 21px;' class='premiumAmtWrp' id='premium-amount'><strong><span class='rupeesSymbol'>₹</span> $totalPremiumFirstYrInclGST </strong> <small>annually</small></div>
    
</div>";
echo $varresponse;
}else{
	$varresponse="<div class='calculate-bottom-section codFormResult' style=''>
        <div style='font-size: 21px;' class='premiumAmtWrp' id='premium-amount'><strong> $totalPremiumFirstYrInclGST </strong> <small>annually</small></div>
    
</div>";
echo $varresponse;
}
}else{
	$responsetect=$responseObject->Response->ResponsePayload->Transactions->TransactionData->Result->ErrorText;

	$varresponse="<div class='calculate-bottom-section codFormResult' style=''>
    <h1>Premium Amount</h1>

    <h1>Today</h1>
    <div style='font-size: 21px;' class='premiumAmtWrp' id='premium-amount'><strong>Female </strong> <small>annually</small></div>
    
</div>";
echo $varresponse;
}
}

}