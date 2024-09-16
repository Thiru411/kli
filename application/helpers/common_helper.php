<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('check_menu_active')){
    function check_menu_active($segment, $urlSegment, $flag=""){
		//load instance to get the config values in helper
		$ci=& get_instance();
		
		if($ci->uri->segment($segment) && $urlSegment != '' && $ci->uri->segment($segment) == $urlSegment){
			if($segment == 1) {
				if($flag == 1){
					echo 'selected';
				}else{
					echo 'activeMenu';
				}
			} else {
				echo 'selected';
			}
		}
    }
}

if (! function_exists('is_home')) {
    function is_home(){
		//load instance to get the config values in helper
		$ci=& get_instance();
		
		if(!$ci->uri->segment(1)) {
			echo 'activeMenu';
		 }
    }   
}

if (! function_exists('read_more_description')) {
    function read_more_description($str){
		$str 	=	strlen($str) >= READ_MORE_DESCRIPION_LENGTH? substr($str, 0, READ_MORE_DESCRIPION_LENGTH).'...' : $str;
		return $str;
    }
}

if (! function_exists('check_customer_type')) {//echo "testingcustomertype";
	//Check cookie: whether existing or new customer
    function check_customer_type() {
		
		$customer =  'new_customer'; //initially set it to New Customer
		if(get_cookie('kotak_customer_type')) {
			$customerTypeCookie = get_cookie('kotak_customer_type');
			if($customerTypeCookie == 'new_customer' || $customerTypeCookie == 'existing_customer' ) {
				$customer = $customerTypeCookie; // set only if new_customer or existing_customer
			}
			if($customerTypeCookie == 'life_advisor'){
				$customer = "life_advisor";
			}
		}
		return $customer;
    }   
}


if( !function_exists('secure_input_data') ){
	function secure_input_data($input) {
		$ci=& get_instance();
		$input 	=	(string)$input;
		return substr($ci->db->escape($input), 1, -1);
	}
}

if (! function_exists('seo_configuration')){
    function seo_configuration(){
		
		//load instance to get the config values in helper
		$ci=& get_instance();

		//Load the site model file to get the db information access
		$ci->load->model('site_model');

		//$request_uri = str_replace('/kotak-stage/', '', $_SERVER['REQUEST_URI']);
		 $request_uri = parse_url(substr($_SERVER['REQUEST_URI'],1));
		$request_uri=$request_uri['path'];
		  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 
 $url_schema="";
		
		//To get the segement values
		$segment = $request_uri;
		$meta_title = '';
		$meta_description = '';
		$meta_keywords = '';
		$page_schema="";
		$page_lan_link="";
				
		
		$meta_response=array();
		$meta_data = array();
		
		$meta_data['bread_crumb_schema']="";
		if(!empty($segment)){
			$meta_response = $ci->site_model->getSEOInformation($segment);
		} 
		


		if(empty($meta_response)){
			$meta_response = $ci->site_model->getSEOInformation('home');
		}

		if(!empty($meta_response)){
			$meta_title = isset($meta_response->meta_title)? $meta_response->meta_title : '';
			$meta_description = isset($meta_response->meta_description)? $meta_response->meta_description : '';
			$meta_keywords = isset($meta_response->meta_keywords)? $meta_response->meta_keywords : '';
			$page_schema = isset($meta_response->page_schema)? $meta_response->page_schema : '';
			
			$meta_canonical_url = isset($meta_response->meta_canonical_url)? $meta_response->meta_canonical_url : '';
			$page_lan_link = isset($meta_response->page_lan_link)? $meta_response->page_lan_link : '';
			
			
		
		if($meta_canonical_url!='')		
		{
			$meta_canonical_url = $meta_canonical_url;
		}
		else{
			$meta_canonical_url = current_url();
		}
			if(($actual_link==base_url()."insurance-plans") || ($actual_link==base_url()."insurance-plans"))
			{ $url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Life Insurance Plans',
							'url':insurance-plans',
							'category':'Life Insurance',
							'description':'Kotak Life Insurance offers a range of insurance plans such as protection, child, retirement, pension, savings & investment plans that best suit your needs. Click now to choose!',
							'brand':'Kotak Life Insurance'
							}
							},";				
			}
			else if(($actual_link==base_url()."insurance-plans/protection-plans") || ($actual_link==base_url()."insurance-plans/protection-plans"))
			{
				$url_schema="{
								'@context': 'https://schema.org',
								'@graph':
								{
								'@type':'FinancialProduct',
								'name':'Protection Plans',
								'url':insurance-plans/protection-plans',
								'category':'Life Insurance',
								'description':'Learn how an life protection plans help you secure your loved one &apos; s future against life &apos; s uncertainties, choose from a range of protection plans offered by Kotak Life Insurance.',
								'brand':'Kotak Life Insurance'
								}
								},";
			
			}
			else if(($actual_link==base_url()."insurance-plans/savings-and-investments-plans") || ($actual_link==base_url()."insurance-plans/savings-and-investments-plans"))
			{
				$url_schema="{
								'@context': 'https://schema.org',
								'@graph':
								{
								'@type':'FinancialProduct',
								'name':'Savings & Investment Plans',
								'url':insurance-plans/savings-and-investments-plans',
								'category':'Life Insurance',
								'description':'Life insurance investment plans by Kotak Life will help you meet your financial goals with assuming growth. Click here to know more about different life insurance and saving plans',
								'brand':'Kotak Life Insurance'
								}
								},";
					
			}
			else if(($actual_link==base_url()."insurance-plans/retirement-plans") || ($actual_link==base_url()."insurance-plans/retirement-plans"))
			{
				$url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Retirement Plans',
							'url':insurance-plans/retirement-plans',
							'category':'Life Insurance',
							'description':'Kotak Life Insurance offers a host of retirement plans and pension plans for your retirement planning so that your future is safe and you have financial stability during your old age.',
							'brand':'Kotak Life Insurance'
							}
							},";
					
			}
			else if(($actual_link==base_url()."insurance-plans/child-plans") || ($actual_link==base_url()."insurance-plans/child-plans"))
			{
				$url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Child Plans',
							'url':insurance-plans/child-plans',
							'category':'Life Insurance',
							'description':'Kotak Life Insurance &apos; s child life insurance plans and child plans provide protection and financial support for your children &apos; s future. Get an insurance policy for your child now!',
							'brand':'Kotak Life Insurance'
							}
							},";
					
			}
			else if(($actual_link==base_url()."group-plans") || ($actual_link==base_url()."group-plans"))
			{
				$url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Group Plans',
							'url':insurance-plans',
							'category':'Group Life Insurance Plans',
							'description':'Group life insurance plans by Kotak Life Insurance provide protective life cover to groups like borrowers of credit institutions or employees of an organization.',
							'brand':'Kotak Life Insurance'
							}
							},";
					
			}
			else if(($actual_link==base_url()."group-plans/group-gratuity-leave-encashment") || ($actual_link==base_url()."group-plans/group-gratuity-leave-encashment"))
			{
				$url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Group Gratuity Leave Encashment Plans',
							'url':group-plans/group-gratuity-leave-encashment',
							'category':'Group Life Insurance Plans',
							'description':'Kotak Leave Encashment Group Plan helping employees fund their Leave encashment liabilities. Click here to know features and benefit!',
							'brand':'Kotak Life Insurance'
							}
							},";
					
			}
			else if(($actual_link==base_url()."group-plans/group-term") || ($actual_link==base_url()."group-plans/group-term"))
			{
				$url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Group Term Plans',
							'url':group-plans/group-term',
							'category':'Group Life Insurance Plans',
							'description':'Kotak Term Group Plan offers life cover to the employees of an organization and ensures financial security to family members in case of an unfortunate event.',
							'brand':'Kotak Life Insurance'
							}
							},";
					
			}
			else if(($actual_link==base_url()."group-plans/group-superannuation") || ($actual_link==base_url()."group-plans/group-superannuation"))
			{
				$url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Group Superannuation Plans',
							'url':group-plans/group-superannuation',
							'category':'Group Life Insurance Plans',
							'description':'Types of group superannuation plans for employees of Kotak life insurance. Easy protection for entire group click here to know more!',
							'brand':'Kotak Life Insurance'
							}
							},";
					
			}
			
			else if(($actual_link==base_url()."group-plans/group-credit") || ($actual_link==base_url()."group-plans/group-credit"))
			{
				$url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Group Credit Plans',
							'url':group-plans/group-credit',
							'category':'Group Life Insurance Plans',
							'description':'Types of group credit life insurance plan for employees & their families with attractive benefits. Click here for features & benefits!',
							'brand':'Kotak Life Insurance'
							}
							},";
					
			}			
			else if(($actual_link==base_url()."online-plans/online-term-insurance-plans") || ($actual_link==base_url()."online-plans/online-term-insurance-plans"))
			{
				$url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Online Protection Plans',
							'url':online-plans/online-term-insurance-plans',
							'category':'Life Insurance',
							'description':'Kotak provides online best term insurance plan with complete protection to family when you &apos; re not around. Check out the key features & benefits today!',
							'brand':'Kotak Life Insurance'
							}
							},";
					
			}
			else if(($actual_link==base_url()."online-plans/online-term-insurance-plans/kotak-e-term-plan-online") || ($actual_link==base_url()."online-plans/online-term-insurance-plans/kotak-e-term-plan-online"))
			{  
				$url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Kotak E-Term Plan',
							'url':online-plans/online-term-insurance-plans/kotak-e-term-plan-online',
							'category':'Term Insurance',
							'description':'Term Insurance by Kotak Life is a term plan with high level of protection @ ₹9/day*. Know what is term insurance and its benefits before you buy term plan online.',
							'brand':'Kotak Life Insurance'
							}
							},";
					
			}
			else if(($actual_link==base_url()."online-plans/online-savings-plans") || ($actual_link==base_url()."online-plans/online-savings-plans"))
			{
				$url_schema="{
							'@context': 'https://schema.org',
							'@graph':
							{
							'@type':'FinancialProduct',
							'name':'Online Savings Plans',
							'url':online-plans/online-savings-plans',
							'category':'Life Insurance',
							'description':'Click here to understand online life insurance as a tax saving scheme. Kotak offers online life insurance saving plan comes under an 80ccd tax exemption gives protection to the family as well as improves investment.',
							'brand':'Kotak Life Insurance'
							}
							},";
					
			}
			else if(($actual_link==base_url()."how-do-i/registerfor-ecs") || ($actual_link==base_url()."how-do-i/registerfor-ecs"))
			{
				$meta_title="How to Register for ECS? – Register for Auto-Debit through Net Banking";
    $meta_description="Register for Auto-Debit via your Net Banking in 3 easy steps. Insert your Policy number and DOB to initiate to register for ECS and never miss a due date.";
	
					
			}
			
			else {$url_schema="";}
		}
if(($actual_link==base_url()."insurance-plans/health-plans/kotak-health-shield") || ($actual_link==base_url()."insurance-plans/health-plans/kotak-health-shield"))
{
	$meta_title="Kotak Health Shield Plan - Kotak Life Health Insurance";
    $meta_description="A critical illness insurance policy called Kotak Health Shield covers the majority of life-threatening health conditions that are common in india. VIsit Kotak Life Insurance to know more.";
	$meta_keywords="Health Insurance Plans, best health insurance, online health insurance, types of health insurance, health insurance, health insurance policy ";
}
		
		

		$meta_data['meta_title'] = $meta_title;
		$meta_data['meta_description'] = $meta_description;
		$meta_data['meta_keywords'] = $meta_keywords;
		$meta_data['meta_canonical_url'] = $meta_canonical_url;
		$meta_data['page_schema']=$page_schema;
		$meta_data['url_schema']=$url_schema;
		$meta_data['page_lan_link']=$page_lan_link;
		if($actual_link!=base_url()."online-plans/retirement-pension-plans/kotak-lifetime-income-plan"){

		if (isset($ci->breadcrumb->breadcrumb) && !empty($ci->breadcrumb->breadcrumb)) {
            $meta_data['bread_crumb_schema'] = bread_crumb_schema_code($ci->breadcrumb->breadcrumb);
        } else {
            $meta_data['bread_crumb_schema'] = bread_crumb_schema_code();
        }
	}
		return $meta_data;
    }

}

if (!function_exists('bread_crumb_schema_code')) {

    function bread_crumb_schema_code($breadcrumbs = '') {
        if (isset($breadcrumbs) && !empty($breadcrumbs)) {
            $itemListElements = array();
            $itemListElementsCode = "";
            $breadCrumbcount = 1;
            foreach ($breadcrumbs as $breadval) {
                if (!empty($breadval['title'])) {
                    $itemListElementsCode = array(
                        "@type" => "ListItem",
                        "position" => $breadCrumbcount,
                        "item" => array(
                            "@id" => (!empty($breadval['url']) ? $breadval['url'] : current_url()),
                            "name" => $breadval['title']
                        )
                    );
                    array_push($itemListElements, $itemListElementsCode);
                    $breadCrumbcount++;
                    $itemListElementsCode = "";
                }
            }
            $convonixSettingBreadcrumb = array(
                "@context" => ORG_CONTEXT,
                "@type" => "WebPage",
                "mainEntity" => array(
                    "@type" => "BreadcrumbList",
                    "itemListElement" => $itemListElements
                )
            );
        } else {
			
            $convonixSettingBreadcrumb = array(
                "@context" => ORG_CONTEXT,
                "@type" => "WebPage",
                "mainEntity" => array(
                    "@type" => "BreadcrumbList",
                    "itemListElement" => [
                        array(
                            "@type" => "ListItem",
                            "position" => 1,
                            "item" => array(
                                "@id" => ORG_WEBSITE_URL,
                                "name" => "Home"
                            )
                        )
                    ]
                )
            );
        }
        return json_encode($convonixSettingBreadcrumb, JSON_UNESCAPED_SLASHES);
    }

}

if (!function_exists('get_qapage_schema_code')) {
    function get_qapage_schema_code($question, $answer) {
        $convonixSettingQASchema = array(
            "@context" => ORG_CONTEXT,
            "@type" => "Question",
            "text" => $question,
            "author" => [
                array(
                    "@type" => "Organization",
                    "name" => ORG_NAME,
                    "logo" => [
                        array(
                            "@type" => "ImageObject",
                            "Url" => ORG_IMG_URL,
                            "contentUrl" => "logo-image.jpg",
                            "name" => ORG_IMG_ALT
                        )
                    ],
                    "image" => ORG_IMG_URL
                )
            ],
            "acceptedAnswer" => array(
                "@type" => "Answer",
                "text" => $answer,
                "author" => [
                    array(
                        "@type" => "Organization",
                        "name" => ORG_NAME,
                        "logo" => [
                            array(
                                "@type" => "ImageObject",
                                "Url" => ORG_IMG_URL,
                                "contentUrl" => "logo-image.jpg",
                                "name" => ORG_IMG_ALT
                            )
                        ],
                        "image" => ORG_IMG_URL
                    )
                ]
            )
        );
        return json_encode($convonixSettingQASchema, JSON_UNESCAPED_SLASHES);
    }

}

if (!function_exists('get_api_data')) {
    function get_api_data($apitocall, $data, $requestOption = "POST") {
        $ch = curl_init();
        if ($requestOption == "POST") {
            curl_setopt($ch, CURLOPT_URL, $apitocall);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        } else {
            $url = $apitocall . '?' . http_build_query($data);
            curl_setopt($ch, CURLOPT_URL, $url);
        }
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $requestOption);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
        );
        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if ($err) {
            return false;
        } else {
            return $response;
        }
    }
}