 <?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HowDoI extends CI_Controller {
	private $data = array();
	function __construct(){
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('common');
		$this->load->model('WhyKotakLife_model');
		$this->load->model('HowDoI_model');
		$this->load->model('fund_performance_model');
		$this->load->model('requestlifeadvisor_model');
		
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Life Insurance', base_url());
		$this->data['CSS_FILES'] = unserialize(CSS_FILES);
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		array_push($this->data['JS_FILES'], 'assets/js/how-do-i.js');
		
		// if(get_cookie('kotak_customer_type')){
		// 	$cusType = get_cookie('kotak_customer_type');
		// }else{
		// 	$cusType = "new_customer";
		// }
		
		// if($cusType == "new_customer"){
		// 	$gaCat = "New Customer";
		// }else if($cusType == "existing_customer"){
		// 	$gaCat = "Existing Customer";
		// }else if($cusType == "life_advisor"){
		// 	$gaCat = "Life Advisor";
		// }
		// $this->data['gaCat'] = $gaCat;
		
	}
	
	public function deathClaim(){
		$pgtitle = 'Death Claim';
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', 'how_do_i/FileClaimLanding_view', $this->data);
	}
	
	public function fileClaim(){
		$pgtitle = 'File a Claim';
		$claimSection = "Individual Claim";
		$this->data['list'] = $this->HowDoI_model->get_claimList(HDI_FILE_CLAIM,$claimSection);
		$this->data['faqsQA'] = $this->HowDoI_model->get_fileClaimFAQs(HDI_FILE_CLAIM_FAQs,$claimSection);
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['convonixSettings'] = get_qapage_schema_code("How Do I File a Claim", "At Kotak Life Insurance, filing a claim is simple and hassle-free. You just need to gather all related documents for filing the claim. Submit these documents to us and you'll get a confirmation on SMS for filing a claim.");
		$this->template->load('template/template', 'how_do_i/FileClaimIndivisual_view', $this->data);
	}
	
	public function fileGroupClaim(){
		$pgtitle = 'File a Claim';
		$claimSection = "Group Claim";
		$this->data['list'] = $this->HowDoI_model->get_claimList(HDI_FILE_CLAIM,$claimSection);
		$this->data['faqsQA'] = $this->HowDoI_model->get_fileClaimFAQs(HDI_FILE_CLAIM_FAQs,$claimSection);
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Kotak Life Insurance ensures that your Group Claim is simplified to the core.");
		$this->template->load('template/template', 'how_do_i/FileClaim_view', $this->data);
	}
	
	public function claims($entry_id){
		$urlSlug = $this->uri->segment(2);
		switch ($urlSlug){
			case "file-claim":
				$pageType = 'File Claim';
				break;
			default:
				//show_404();
		}
		
		$this->data['data'] = $this->HowDoI_model->get_claimDetails(HDI_FILE_CLAIM,$entry_id);
		if($this->data['data']){
			$this->data['pdfSection'] = $this->HowDoI_model->get_plan_eligibility_info($entry_id);
			$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
			$this->breadcrumb->add_crumb($pageType);
			$this->template->set('title', $pageType);
			
			if (!empty($this->data['data'][0]->claimType)) {
				$claimQuestion = $this->data['data'][0]->claimType;
			} else {
				$claimQuestion = "File Claim";
			}

			if (!empty($this->data['data'][0]->claimDescription)) {
				$claimAnswer = $this->data['data'][0]->claimDescription;
			} else {
				$claimAnswer = "At Kotak Life Insurance, filing a claim is simple and hassle-free.";
			}
			
			$this->data['convonixSettings'] = get_qapage_schema_code($claimQuestion, $claimAnswer);
			
			$this->template->load('template/template', 'how_do_i/FileClaimLanding_view', $this->data);
		}else {
		//	show_404();
		}
	}
	
	public function HowDoI_home(){
		$pgtitle = 'How Do I';
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', 'how_do_i/HowDoI_view', $this->data);
	}
	
	/*Get Policy Brochure*/
	public function getPolicyBrochure(){
		$pgtitle = 'Get Policy Brochure';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyBrochureTab();
		$this->data['downloadBrochure'] = $this->HowDoI_model->get_policyBrochure(HDI_DOWNLOAD_POLICY_BROCHURE,"Protection Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		 $this->data['convonixSettings'] = get_qapage_schema_code("How Do I Get Policy Brochure", "You can know everything about your life insurance policy before applying for it. You can get detailed product brochures from our list of plans and download the brochure that suits your plan. This includes brochures for Protection Plans, Savings & Investments Plans, Child Plans and Retirement Plans.");
		$this->template->load('template/template', 'how_do_i/GetPolicyBrochure_view', $this->data);
	}
	public function getPolicyBrochureSavingsInvestment(){
		$pgtitle = 'Get Policy Brochure';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyBrochureTab();
		$this->data['downloadBrochure'] = $this->HowDoI_model->get_policyBrochure(HDI_DOWNLOAD_POLICY_BROCHURE,"Savings & Investments Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Know everything about your life insurance policy before applying for it. Download detailed brochures below.");
		$this->template->load('template/template', 'how_do_i/GetPolicyBrochureSavingsInvestments_view', $this->data);
	}
	public function getPolicyBrochureChildPlans(){
		$pgtitle = 'Get Policy Brochure';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyBrochureTab();
		$this->data['downloadBrochure'] = $this->HowDoI_model->get_policyBrochure(HDI_DOWNLOAD_POLICY_BROCHURE,"Child Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Know everything about your life insurance policy before applying for it. Download detailed brochures below.");
		$this->template->load('template/template', 'how_do_i/GetPolicyBrochureChildPlans_view', $this->data);
	}
	public function getPolicyBrochureRetirementPlans(){
		$pgtitle = 'Get Policy Brochure';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyBrochureTab();
		$this->data['downloadBrochure'] = $this->HowDoI_model->get_policyBrochure(HDI_DOWNLOAD_POLICY_BROCHURE,"Retirement Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['gaCat']="";

		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Know everything about your life insurance policy before applying for it. Download detailed brochures below.");
		$this->template->load('template/template', 'how_do_i/GetPolicyBrochureRetirementPlans_view', $this->data);
	}
	/*Get Policy Brochure*/
	public function getPolicyBrochureHealthPlans(){
		$pgtitle = 'Get Policy Brochure';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyBrochureTab();
		$this->data['downloadBrochure'] = $this->HowDoI_model->get_policyBrochure(HDI_DOWNLOAD_POLICY_BROCHURE,"Health Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['gaCat']="";

		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Know everything about your life insurance policy before applying for it. Download detailed brochures below.");
		$this->template->load('template/template', 'how_do_i/GetPolicyBrochureHealthPlans_view', $this->data);
	}
	
	/*Check Policy Specimen*/
	public function checkPolicyDocumentSpecimen(){
		$pgtitle = 'Check Policy Document Specimen';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyDocumentSpecimenTab();
		$this->data['policyDocSpecimen'] = $this->HowDoI_model->get_policyDocumnetSpecimen(HDI_DOWNLOAD_POLICY_DOCUMENT_SPECIMEN,"Protection Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['gaCat']="";

		  $this->data['convonixSettings'] = get_qapage_schema_code("How Do I Check Policy Document Specimen", "You can check your policy document specimen before filling the form. Browse from the  list of specimens for Protection Plans, Savings & Investment Plans, Retirement Plans, Child Plans, Group Plans and Riders forms.");
		$this->template->load('template/template', 'how_do_i/CheckPolicyDocumentSpecimen_view', $this->data);
	}
	public function checkPolicyDocumentSpecimenSavingsInvestments(){
		$pgtitle = 'Check Policy Document Specimen';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyDocumentSpecimenTab();
		$this->data['policyDocSpecimen'] = $this->HowDoI_model->get_policyDocumnetSpecimen(HDI_DOWNLOAD_POLICY_DOCUMENT_SPECIMEN,"Savings & Investment Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['gaCat']="";

		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Filling a policy document is fairly easy. Yet, have a look at the specimen to help you fill the form correctly.");
		$this->template->load('template/template', 'how_do_i/CheckPolicyDocumentSpecimenSavingsInvestment_view', $this->data);
	}
	public function checkPolicyDocumentSpecimenRetirementPlans(){
		$pgtitle = 'Check Policy Document Specimen';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyDocumentSpecimenTab();
		$this->data['policyDocSpecimen'] = $this->HowDoI_model->get_policyDocumnetSpecimen(HDI_DOWNLOAD_POLICY_DOCUMENT_SPECIMEN,"Retirement Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['gaCat']="";

		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Filling a policy document is fairly easy. Yet, have a look at the specimen to help you fill the form correctly.");
		$this->template->load('template/template', 'how_do_i/CheckPolicyDocumentSpecimenRetirementPlans_view', $this->data);
	}
	public function checkPolicyDocumentSpecimenChildPlans(){
		$pgtitle = 'Check Policy Document Specimen';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyDocumentSpecimenTab();
		$this->data['policyDocSpecimen'] = $this->HowDoI_model->get_policyDocumnetSpecimen(HDI_DOWNLOAD_POLICY_DOCUMENT_SPECIMEN,"Child Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['gaCat']="";

		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Filling a policy document is fairly easy. Yet, have a look at the specimen to help you fill the form correctly.");
		$this->template->load('template/template', 'how_do_i/CheckPolicyDocumentSpecimenChildPlans_view', $this->data);
	}
	public function checkPolicyDocumentSpecimenGroupPlans(){
		$pgtitle = 'Check Policy Document Specimen';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyDocumentSpecimenTab();
		$this->data['policyDocSpecimen'] = $this->HowDoI_model->get_policyDocumnetSpecimen(HDI_DOWNLOAD_POLICY_DOCUMENT_SPECIMEN,"Group Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->data['gaCat']="";

		$this->template->set('title', $pgtitle);
		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Filling a policy document is fairly easy. Yet, have a look at the specimen to help you fill the form correctly.");
		$this->template->load('template/template', 'how_do_i/CheckPolicyDocumentSpecimenGroupPlans_view', $this->data);
	}
	public function checkPolicyDocumentSpecimenRiders(){
		$pgtitle = 'Check Policy Document Specimen';
		//$this->data['tabs'] = $this->HowDoI_model->bind_policyDocumentSpecimenTab();
		$this->data['policyDocSpecimen'] = $this->HowDoI_model->get_policyDocumnetSpecimen(HDI_DOWNLOAD_POLICY_DOCUMENT_SPECIMEN,"Riders");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['gaCat']="";

		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Filling a policy document is fairly easy. Yet, have a look at the specimen to help you fill the form correctly.");
		$this->template->load('template/template', 'how_do_i/CheckPolicyDocumentSpecimenRiders_view', $this->data);
	}
	
	public function checkPolicyDocumentSpecimenWithdrawnProducts() {
		$pgtitle = 'Check Policy Document Specimen';        
		$this->data['policyDocSpecimen'] = $this->HowDoI_model->get_policyDocumnetSpecimen(HDI_DOWNLOAD_POLICY_DOCUMENT_SPECIMEN, "Withdrawn Products");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->data['gaCat']="";

		$this->template->set('title', $pgtitle);
		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Filling a policy document is fairly easy. Yet, have a look at the specimen to help you fill the form correctly.");
		$this->template->load('template/template', 'how_do_i/CheckPolicyDocumentSpecimenWithdrawnProducts_view', $this->data);
	}
	
	
	public function checkPolicyDocumentSpecimenHealthPlans(){
		$pgtitle = 'Check Policy Document Specimen';
		$this->data['gaCat']="";

		//$this->data['tabs'] = $this->HowDoI_model->bind_policyDocumentSpecimenTab();
		$this->data['policyDocSpecimen'] = $this->HowDoI_model->get_policyDocumnetSpecimen(HDI_DOWNLOAD_POLICY_DOCUMENT_SPECIMEN,"Health Plans");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Filling a policy document is fairly easy. Yet, have a look at the specimen to help you fill the form correctly.");
		$this->template->load('template/template', 'how_do_i/CheckPolicyDocumentSpecimenHealthPlans_view', $this->data);
	}
	/*Check Policy Specimen*/
	
	/*Download Application Forms*/
	public function downloadApplicationForm(){
		$pgtitle = 'Download Application Form';
		$this->data['applicationForms'] = $this->HowDoI_model->get_applicationForms(HDI_DOWNLOAD_APPLICATION_FORM,"Proposal Form");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
        $this->data['gaCat']="";
		$this->data['convonixSettings'] = get_qapage_schema_code("How Do I Download Application Forms", "You can browse from list of forms here and download forms that suit your requirements. These includes, proposal form, policy servicing forms, request for major revival of policy forms and riders forms");
		$this->template->load('template/template', 'how_do_i/DownloadApplicationForm_view', $this->data);
	}
	
	public function applicationFormRiders(){
		$pgtitle = 'Download Application Form';
		$this->data['applicationForms'] = $this->HowDoI_model->get_applicationForms(HDI_DOWNLOAD_APPLICATION_FORM,"Riders");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
          $this->data['gaCat']="";
		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Browse through the list below and download forms that suit your requirements.Riders");
		$this->template->load('template/template', 'how_do_i/DownloadApplicationFormRiders_view', $this->data);
	}
	public function applicationFormPolicyServing(){
		$pgtitle = 'Download Application Form';
		$this->data['applicationForms'] = $this->HowDoI_model->get_applicationForms(HDI_DOWNLOAD_APPLICATION_FORM,"Policy Servicing Form");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
          $this->data['gaCat']="";
		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Browse through the list below and download forms that suit your requirements.Policy Servicing Forms");
		$this->template->load('template/template', 'how_do_i/DownloadApplicationFormPolicyServing_view', $this->data);
	}
	public function applicationFormMajorRevival(){
		$pgtitle = 'Download Application Form';
		//$this->data['tabs'] = $this->HowDoI_model->bind_applicationFormTab();
		$this->data['applicationForms'] = $this->HowDoI_model->get_applicationForms(HDI_DOWNLOAD_APPLICATION_FORM,"Request for Major Revival of Policy Forms");
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
          $this->data['gaCat']="";
		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Browse through the list below and download forms that suit your requirements.Request for Major Revival of Policy Forms");
		$this->template->load('template/template', 'how_do_i/DownloadApplicationFormMajorRevival_view', $this->data);
	}
	/*Download Application Forms*/
	
	public function fundUpdate($year = 0){
		/*$pgtitle = 'Fund Update';
		$this->data['fpYearDD'] = $this->HowDoI_model->bind_yearDD();
		$this->data['annualFundPerformance'] = $this->HowDoI_model->get_AnnaulFundPerformance(HDI_ANNUAL_FUND_PERFORMANCE);
		$this->data['fundPerformance'] = $this->HowDoI_model->get_FundPerformance(HDI_FUND_PERFORMANCE);
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', 'how_do_i/FundUpdate_view', $this->data);*/
		
		
		if($year == 0){
			//$year = date('Y') - 1;
			$year = date('Y');
		}
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('How Do I', base_url(HDI_MODULE_LINK));
		$this->breadcrumb->add_crumb('Fund Update');
		
		//Set template Title
		$this->template->set('title', 'How Do I - Fund Update');

		// Get Module Info
		$moduleCode = $this->uri->segment(2);
		//$moduleCode = "fund-update";
		$this->data['moduleInfo'] = $this->fund_performance_model->get_module_details($moduleCode);
		$this->data['moduleFrom'] = $this->uri->segment(1);
		// Redirect to Landing Page if Module not exists
		// if(count($this->data['moduleInfo']) == 0){
		// 	redirect(base_url(HDI_MODULE_LINK), 'refresh');
		// }
	

		if(count((array)$this->data['moduleInfo'])==0){
			 	redirect(base_url(HDI_MODULE_LINK), 'refresh');
			}
		$this->data['year']	=	$year;
		$this->data['years']=	array();
		for($i = 2013; $i <= date('Y') ; $i++){
			$this->data['years'][$i] = $i;
		}

		$this->data['yearRecord']	=	$this->fund_performance_model->get_fp_updates($year, 'year');
		$this->data['monthRecords']	=	$this->fund_performance_model->get_fp_updates($year, 'month');
		//$this->data['jscript'] = "<script>var form_flag=''; var jsonDataFaqs=''; var json='';</script>";
		//Load the view file
		$this->data['convonixSettings'] = get_qapage_schema_code("How Do I Browse Fund Updates", "To browse fund update for a year, select for annual and monthly fund performance for the year list. You can then download annual performance report or monthly reports depending on your need. The investment objective of our funds is to ensure that returns on policyholder’s funds are consistent with the protection, safety and liquidity of such funds, while ensuring that the liabilities in respect of each of the funds are supported by a diversified pool of investments and assets, held under the respective fund wherein the asset classes, asset allocation and asset selection are compliant with the nature of liabilities, investment objective for each of the funds, IRDAI Investment Regulations and Insurance Act.");
		$this->template->load('template/template', 'fund_performance/fund_update_landing_view', $this->data);
	}
	
	public function understandStagesOfApplication(){
		$pgtitle = 'Track My Proposal Status';
		$this->data['stagesApplicationData'] = $this->HowDoI_model->get_StagesOfApplications(HDI_UNDERSTAND_STAGES_OF_APPLICATION);
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['convonixSettings'] = get_qapage_schema_code("How Do I Understand the Stages of My Application", "There are various stages of your insurance application. Kotak Life Insurance has simplified the way to apply for a policy - divided into four steps. Firstly, you need to fill your details of the application and submit it. You'll receive a verification call after submitting the documents. You may be next required to go through medical examination as a part of process. Lastly all documents and reports are sent for verification and then the proposal is processed.");
		$this->template->load('template/template', 'how_do_i/UnderstandStagesOfApplication_view', $this->data);
	}
	
	public function payMyPremium(){
		
		
		$pgtitle = 'Pay My Premium';
		$this->data['payPremium'] = $this->HowDoI_model->get_payMyPremium(HDI_PAY_MY_PREMIUM);
		$this->data['payPremiumFAQ'] = $this->HowDoI_model->get_payMyPremiumFAQ(HDI_PAY_MY_PREMIUM_FAQS);
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['gaCat']="";
		 $this->data['convonixSettings'] = get_qapage_schema_code("How Do I Pay My Premium", "Kotak Life Insurance simplifies your options for premium payment process to ensure that your payments are on time. Choose the most convenient payment option for you and pay with a few clicks from the following options.Payment through National Electronic Fund Transfer (NEFT), Electronic Clearing Services (ECS), Standing Instruction, Direct Debit, Credit Card, Online Payment through Internet Banking, Payment through Mobile via Immediate Payment Service (IMPS), Payment through Bill Desk, Electronic Bill Payment, Kotak Mahindra Bank ATM Drop Boxes, Payment at Kotak Branch Offices");
		$this->template->load('template/template', 'how_do_i/PayMyPremium_view', $this->data);
	}
	
	public function manageMyPolicy(){
		$pgtitle = 'Manage My Policy';
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['convonixSettings'] = get_qapage_schema_code("How Do I Manage My Policy", "You can manage your policy with easy processes and be assured of faster response. Kotak Life Insurance supports you in every way throughout the policy period. Minor changes in the policy can be done online, while major changes will require physical branch forms.");
		$this->template->load('template/template', 'how_do_i/ManageMyPolicy_view', $this->data);
	}
	
	public function locateKotakBranch(){
		$this->load->model('site_model');
		$this->data['gaCat']=array();
	$this->data['stateslist'] = $this->site_model->get_locationdetails_for_map();
	$this->data['bindStates'] = $this->site_model->get_States();
		$pgtitle = 'Locate a Kotak Life Branch';
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		 $this->data['convonixSettings'] = get_qapage_schema_code("How Do I Locate a Kotak Life branch", "Kotak Life branches are spread across cities and towns of India. Enter your location and walk in to talk to our executives. Select state and city or type pin of the city. The map will show the nearest location of Kotak Life branch in your city.");
		$this->template->load('template/template', 'how_do_i/LocateKotakBranch_view', $this->data);
	}
	
	public function applyForLifeInsurancePlan(){
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');
		$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities();
		$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS);
		$choiceOfPlans = $this->requestlifeadvisor_model->get_plans();
		$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
		
		$pgtitle = 'Apply for a Life Insurance Plan';
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		 $this->data['convonixSettings'] = get_qapage_schema_code("How Do I Apply for a Life Insurance Plan", "You can apply for Life Insurance Plan online or through life advisor. Kotak e-Term Plan is an online plan that has been specially designed to let you give that assurance to your family with multiple plan options. Through life advisor, you'll be in guidance of experienced personnel who will help you to understand your needs and are trained to help you choose the right plan.");
		$this->template->load('template/template', 'how_do_i/ApplyForLifeInsurancePlan_view', $this->data);
	}
	
 
	public function registerForEcs(){
		$pgtitle = 'Register For Ecs';
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->template->load('template/template', 'how_do_i/registerfor-ecs', $this->data);
	}
     public function individual_claim(){
         
    $pgtitle = 'File a Claim';
		$claimSection = "Group Claim";
		$this->data['list'] = $this->HowDoI_model->get_claimList(HDI_FILE_CLAIM,$claimSection);
		$this->data['faqsQA'] = $this->HowDoI_model->get_fileClaimFAQs(HDI_FILE_CLAIM_FAQs,$claimSection);
		$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['gaCat']=0;
		$this->data['convonixSettings'] = get_qapage_schema_code($pgtitle, "Kotak Life Insurance ensures that your Group Claim is simplified to the core.");
		//$this->template->load('template/template', 'how_do_i/FileClaim_view', $this->data);     
         
	//$this->template->set('title', 'Individual Claim');
	//$this->load->helper('form');
	$this->template->load('template/template', 'how_do_i/individual_claim', $this->data);

}
	 
public function checkMysurrendervalue(){
	$this->data['gaCat']="";

	$pgtitle = 'Check My Policy Annexures';
	$this->data['applicationForms'] = $this->HowDoI_model->get_applicationForms_surrender(HDI_SURRENDER_APPLICATION_FORM,"Savings");
	$this->breadcrumb->add_crumb('How Do I', base_url('how-do-i'));
	$this->breadcrumb->add_crumb($pgtitle);
	$this->template->set('title', $pgtitle);
	$this->data['gaCat']="";
	$this->data['convonixSettings'] = get_qapage_schema_code("How Do I Download Application Forms", "You can browse from list of forms here and download forms that suit your requirements. These includes, proposal form, policy servicing forms, request for major revival of policy forms and riders forms");
	$this->template->load('template/template', 'how_do_i/surrendermyvalue', $this->data);
}
	
}