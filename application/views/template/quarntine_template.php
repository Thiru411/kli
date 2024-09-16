 <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <!-- <link href="css/slick.css" rel="stylesheet"/> -->
    <!-- <link href="css/slick-theme.css" rel="stylesheet"/> -->
    <link rel="stylesheet" type="text/css" href="assets/quartine/style.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<link rel="stylesheet" href=base_url."/assets/css/custom_tabs.css">
 <style>
    .container-secc{max-width: 1180px;margin: 0 auto;}
    /*.banner-img{width: 100%;height: 400px;background-repeat: no-repeat;background-size: cover;}*/
    .banner-content{margin-top: 45px; padding: 40px 15px;}
	 /* banner-content{background-color: #000; margin-top: 90px; padding: 40px 15px;}*/
    .banner-slider p{font-size: 20px;font-weight: 400;max-width:700px;margin: 0 auto;
	/*.banner-slider p{font-size: 20px;font-weight: 400;max-width:700px;color: #fff;margin: 0 auto;*/
    padding-top: 15px;padding-bottom:20px;}
    .banner-slider p a{color: #194a81;text-decoration: none;font-weight: 700;}
    .text-center{text-align: center;}
    .task {margin:20px 0;border-collapse: collapse;border-spacing: 0;width: 100%;border: 1px solid #ddd !important;}
    .w3-display-topright:hover{background-color: #fff !important;}
    .w3-display-topright{    height: 55px;
    width: 55px;
    font-size: 30px;
    padding: 5px 5px;
    background-color: #fff;
    border-radius: 50%;right: -24px;
    top: -24px;}
    .task th, td {padding: 20px 8px;border: 1px solid #ddd !important;}
    .task p{margin: 0;font-weight: 600;font-size: 14px;color: #5e6061;}
    .task h6{margin: 0;font-size: 16px;padding-top: 3px;font-weight: 500;}
    .task td{text-align: center;}
    .d--flex{display: flex;flex-wrap: wrap;}
    .head-content .tasks{margin: 0 auto;}
    .head-content .tasks img{height: 50px;}
    .head-content{background: #da251c;padding: 10px;height:unset;}
    .kotak--logo img{height: 40px;}
    .click-to-view{cursor: pointer;color:#f00}
    .splash-pop{position: absolute;top: 0;}
    /* The  	 (background) */
    /*.modal1 { display: none;position: fixed;z-index: 1;padding-top: 100px;left: 0;top: 0;width: 100%;overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);}*/
   .modal1 { display: none;position: fixed;z-index: 1;padding-top: 100px;left: 0;top: 0;width: 100%;height: 100%;overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);}
   .modal-content1 {margin: auto;padding: 20px;}
	/*.modal-content1 {background-color: #fefefe;margin: auto;padding: 20px;border: 1px solid #888;width: 80%;}*/
    .close {color: #FFF;float: right;font-size: 28px;font-weight: bold;}
    .close:hover, .close:focus {color: #000;text-decoration: none;cursor: pointer;}
    .modal-img{width: 100%;height: auto;}

    @media screen and (max-width: 768px) {
        .desktop-table{display: none;}
        .mobile-table{display: block;}
        .banner-content {padding-top: 10px !important;}
        .banner-slider p {font-size: 17px;}
        .banner-content img{width: 100%;}
        .container-secc{margin: 0 15px;}
        .task th, td {padding: 15px 2px !important;}
		.task p{font-size: 10px;}
    .task h6{font-size: 10px;}
    }

    @media screen and (max-width: 425px) {
       .head-content img{height: 35px;}
    }

    @media screen and (min-width: 768px) {
        .desktop-table{display: block;}
        .mobile-table{display: none;}
		.modal-img{height: auto;}
		
    }
</style>
<style>
.connect-withus{
	display:flex ! important;
	justify-content:center;
	width:100% ! important;
}
</style>
<?php $this->load->view('template/header'); ?>

<?= $contents ?>


<?php //$this->load->view('template/footer'); ?>

	<!--Footer Start -->
	<ul class="shareUL connect-withus">	
        <li>Connect with us</li>
        <li><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'facebook'});" href="https://www.facebook.com/kotaklife/" target="_blank" class="">facebook</a></li>
        <li><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'twitter'});" href="https://twitter.com/Kotak_Life" target="_blank" class="twt">twitter</a></li>
        <li><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'LinkedIn'});" href="https://www.linkedin.com/company/13638973" target="_blank" class="linkedin">LinkedIn</a></li>
        <li><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'Youtube'});" href="https://www.youtube.com/kotaklifeinsuranceofficial" target="_blank" class="youtube">Youtube</a></li>
    </ul>
<footer>
  <div class="midWrapper">
    
    
    <div class="footerBox">
    <ul class="footerLinksUL">
    	<li class="footerHead">Policy Governance</li>
		<li><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Service TATs'});" class="secondLI <?php check_menu_active(2, 'service-tat') ?>" href="<?php echo base_url().'grievance-redressal/service-tat'; ?>">Service TATs</a></li>
    	<li><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'irdai-handbook'});" class="<?php check_menu_active(2, 'irdai-handbook') ?>" href="<?php echo base_url().'grievance-redressal/irdai-handbook'; ?>">IRDAI Handbook </a></li>
    	<li><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'customer-bulletin'});" class="<?php check_menu_active(2, 'customer-bulletin') ?>" href="<?php echo base_url().'grievance-redressal/customer-bulletin'; ?>">Customer Bulletin</a></li>
    	<li><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'fatca'});" class="<?php check_menu_active(2, 'fatca') ?>" href="<?php echo base_url().'grievance-redressal/fatca'; ?>">FATCA</a></li>
    	<li><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'aml-guidelines'});" class="<?php check_menu_active(2, 'aml-guidelines') ?>" href="<?php echo base_url().'grievance-redressal/aml-guidelines'; ?>"> AML Guidelines</a></li>
    </ul>
    <ul class="footerLinksUL footerLinksUL02">
        <li><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Sitemap'});" href="<?php echo base_url();?>sitemap">Sitemap</a></li>
        <li><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Website Feedback'});" href="<?php echo base_url();?>website-feedback"> Website Feedback</a></li>
    </ul>
    </div>
    <div class="midWrapper">
	<div class="plans ">
		<div class="incurance">
			<ul class="plan-list">
				<h6>All Life Insurance Plans</h6>
				<li><a href=base_url."/insurance-plans/protection-plans"> Protection Plans </a></li>
				<li><a href=base_url."/insurance-plans/child-plans">Child Plan</a></li>
				<li><a href=base_url."/insurance-plans/savings-and-investments-plans">Savings and Investment Plans</a></li>
				<li><a href=base_url."/insurance-plans/retirement-plans">Retirement Plans</a></li>
				<li><a href=base_url."/insurance-plans/insurance-plan-riders">Insurance Riders</a></li>
			</ul>
			<ul class="plan-list">
				<h6>Online Plans</h6>
				<li><a href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-online">Term Insurance</a></li>
				<li><a href=base_url."/online-plans/online-savings-plans/kotak-e-assured-savings-plan">Online Savings Plan</a></li>
				
			</ul>
			<ul class="plan-list">
				<h6>Term Insurance</h6>
				<li><a href=base_url."/einsurance/OnlineTerm.aspx?PID=EON">Term Insurance Caluclater</a></li>
				<li><a href=base_url."/insurance-guide/protection/what-is-term-insurance">What is Term Insurance Plan</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/tax-benefit-of-investing-in-term-plan">Tax benefits of Term Insurance</a></li>
				<li><a href=base_url."/insurance-guide/about-life-insurance/can-nri-buy-term-insurance-in-india">Term Insurance for NRIs</a></li>
				
			</ul>
		</div>
		<div class="articles">
			<ul class="plan-list">
				<h6>Life Insurance Articles</h6>
				<li><a href=base_url."/insurance-guide/about-life-insurance/what-is-life-insurance ">What is Life Insurance</a></li>
				<li><a href=base_url."/insurance-guide/about-life-insurance/types-of-life-insurance ">Types of Life Insurance</a></li>
				<li><a href=base_url."/insurance-guide/about-life-insurance/types-of-insurance-policies">Types of Insurance Policies</a></li>
				<li><a href=base_url."/insurance-guide/about-life-insurance/buy-term-insurance-under-the-mwp-act-married-womens-property-act">MWP Act on Insurance</a></li>
				<li><a href=base_url."/insurance-guide/about-life-insurance/Importance-of-claim-settlement-ratio-before-buying-life-insurance">Clain Settlement Ratio</a></li>
			
			</ul>
			<ul class="plan-list">
				<h6>Tax Related Articles</h6>
				<li><a href=base_url."/insurance-guide/savingstax/what-is-tds-tax-deducted-at-source">What is TDS?</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction">Section 80C</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/section-80-d-deduction-of-income-tax-act">Section 80D</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know">Section 10(10D)</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/income-tax-deductions-list">Income Tax Deductions and Exemption</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/new-income-tax-slabs-in-india">Income TAx Slabs 2019-20</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/gst-on-life-insurance-premium">GST on Life Insurance</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/guide-to-form-16-form-16-a-and-16-b">Fom 16</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/what-is-itr-1-form-and-how-to-download-it">ITR 1</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/what-is-itr-2-form">ITR 2</a></li>
				<li><a href=base_url."/insurance-guide/savingstax/what-is-itr-5-form">ITR 5</a></li>
			</ul>
		</div>
		<div class="links">
			<ul class="plan-list">
				<h6>Quick Links</h6>
				<li><a href=base_url."/how-do-i/pay-my-premium">Pay My Premium</a></li>
				<li><a href="https://customer.kotaklifeinsurance.com/ocm">File a Claim</a></li>
				<li><a href=base_url."/how-do-i/manage-my-policy">Manage My Policy</a></li>
				<li><a href=base_url."/how-do-i/download-application-form">Download Application Form</a></li>
				<li><a href=base_url."/how-do-i/get-policy-brochure">Get Product Brochure</a></li>
				<li><a href=base_url."/how-do-i/check-policy-document-specimen">Check Policy Document Specimen</a></li>
				<li><a href=base_url."/how-do-i/fund-update">Fund Updates</a></li>
				<li><a href=base_url."/how-do-i/understand-stages-of-application">Understand the Stages of My Application</a></li>
				<li><a href=base_url."/how-do-i/locate-kotak-branches">Locate a Kotak Life Branch</a></li>
				<li><a href=base_url."/kotakWebBI/">Premium Caluclator</a></li>
			</ul>
		</div>
	</div>
</div>
    <div class="btmDesc">
      <p>BEWARE OF SPURIOUS / FRAUD PHONE CALLS<br>	     
        IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.
	  </p>
      <p>Beware of spurious emails with ficticious/fraudulent offers. Persons receiving such emails mentioning Kotak Life are requested to highlight the same immediately to kli.riskcontrol@kotak.com with "Spurious Email" in the subject line.</p>
	  <p><b>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. (formerly known as Kotak Mahindra Old Mutual Life Insurance Ltd.) under license.</b></p>
      <p>Kotak Mahindra Life Insurance Company Ltd.,<br>Regd. Office: 8<sup>th</sup> Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai - 400 051. Website: www.www.kotaklife.com I Email:kli.in/WECARE I Toll Free No.: 1800 209 8800.<br>
<br>
Registered with Insurance Regulatory & Development Authority (IRDAI) as Life Insurance Company. Regn. No. 107. CIN : U66030MH2000PLC128503
</p>
    </div>
    <ul class="btmlinks">
      <li class="<?php check_menu_active(2, 'corporate-governance') ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Public Disclosure'});" href="<?php echo base_url(WKL_MODULE_LINK.'/corporate-governance') ?>">Public Disclosure</a></li>
	  <li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Unclaimed Amount Due to Policyholders'});" href="https://customer.kotaklifeinsurance.com/CP/customerunclaimamount.aspx" target="_blank">Unclaimed Amount Due to Policyholders</a></li>
      <li class="<?php check_menu_active(1, 'disclaimer', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Disclaimer'});" href="<?php echo base_url();?>disclaimer">Disclaimer</a></li>
      <li class="<?php check_menu_active(1, 'privacy-policy', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Privacy Policy'});" href="<?php echo base_url();?>privacy-policy">Privacy Policy</a></li>
      <li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'IRDAI'});" href="www.policyholder.gov.in/" rel="nofollow" target="_blank">IRDAI</a></li>
      <li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Insurance Ombudsman'});" href="https://www.irdai.gov.in/ADMINCMS/cms/NormalData_Layout.aspx?page=PageNo234&mid=7.2" rel="nofollow" target="_blank">Insurance Ombudsman</a></li>
      <li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Kotak Mahindra Bank'});" href="http://www.kotak.com" target="_blank">Kotak Mahindra Bank</a></li>
      <li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Life Insurance Council'});" href="https://www.lifeinscouncil.org/code/Default.aspx" rel="nofollow" target="_blank">Life Insurance Council</a></li>
      <!--<li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Commission Deferment Policy'});" href="<?php echo base_url();?>assets/images/uploads/why_kotak/commission_deferment.pdf" target="_blank">Commission Deferment Policy</a></li>-->
      <li class="<?php check_menu_active(1, 'corporate-partners', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Corporate Partners'});" href="<?php echo base_url();?>corporate-partners">Corporate Partners</a></li>
	  <li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Corporate Partners Login'});" href="https://cp.mykotaklife.com/Login/LoginCPR.aspx" target="_blank">Corporate Partners Login</a></li>
      <li class="<?php check_menu_active(1, 'do-not-call-registry', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Do Not Call Registry'});" href="<?php echo base_url();?>do-not-call-registry">Do Not Call Registry</a></li>
      <!--<li class="<?php check_menu_active(1, 'customer-notice-archives', 1) ?>"><a href="<?php echo base_url();?>customer-notice-archives">Customer Notice Archives</a></li>-->
	  <li class="<?php check_menu_active(1, 'agents-terminated-due-malpractices', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Agents Terminated'});" href="<?php echo base_url();?>agents-terminated-due-malpractices">Agents Terminated</a></li>
      <li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Grievance Redressal System'});" href="https://customer.kotaklifeinsurance.com/policymanager/grievance/GrievanceRedressalMain.aspx" target="_blank">Grievance Redressal System</a></li>
      <!--<li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Accredited Training Institute Complaints'});" href="https://customer.kotaklifeinsurance.com/policymanager/ComplaintRegistration/ComplaintRegistration.aspx" target="_blank">Accredited Training Institute Complaints</a></li>-->
      <!--<li><a href="javascript:;">Monthly unit reconciliation of ULIP portfolio</a></li>-->
      <li class="<?php check_menu_active(1, 'key-persons', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Key Persons'});" href="<?php echo base_url();?>key-persons">Key Persons</a></li>
	  <li class="<?php check_menu_active(1, 'key-persons', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'List of our GST registration numbers'});" href="<?php echo base_url();?>assets/images/uploads/why_kotak/list-of-our-gstin-registration-numbers.pdf"  target="_blank">List of our GST registration numbers</a></li>
	  <li class="<?php check_menu_active(1, 'regional-forms', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Policy Servicing Forms in Regional Languages'});" href="<?php echo base_url();?>regional-forms">Policy Servicing Forms in Regional Languages</a></li>
	  
    </ul>
      <p>© <?php echo date("Y"); ?> Kotak Mahindra Group. All rights reserved.</p>
  </div>
     
</footer>
<!--Footer End -->
<script type="text/javascript">
var base_url = '<?php echo base_url(); ?>';
var google_recaptcha_key = '<?php echo GOOGLE_RECAPTHA_KEY; ?>';
</script>
<?php 
	if (isset($JS_FILES) && sizeof($JS_FILES) > 0) { 
		foreach ($JS_FILES as $jsfile) {
?>
<script src="<?php echo $jsfile ?>" type="text/javascript" language="javascript"></script>
<?php			
		}
	}
?>
<div class="overlay"></div>

<?php 
$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$basename = pathinfo($url_path, PATHINFO_BASENAME);
if($basename == "career-as-life-advisor"){?>
<script src="http://www.youtube.com/player_api"></script>
<?php } ?>


<script type="text/javascript">
function clearOldRef() {
    var arr = [];
    for (var i = 0; i < localStorage.length; i++) {
      if (localStorage.key(i).indexOf('SAVED_TASKS') == -1) {
        arr.push(localStorage.key(i));
      }
    }
    for (var i = 0; i < arr.length; i++) {
      localStorage.removeItem(arr[i]);
    }
    var cookies = document.cookie.split(";");
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i];
      var eqPos = cookie.indexOf("=");
      var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
      document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
  }
  clearOldRef();

 var haptikInitSettings = {
'primary-color': '#da251c',
'secondary-color': '#f4f4f4',
'widget-positioning': 'bottom-right',
'font-sizes': { 'primary': 14, 'secondary': 18 },
'typography': 'Lato',
'header-text': { 'text': 'Virtual Assistant', 'status-text': true}, 
'composer-placeholder': 'Type your message...',
'header-icon': 'https://haptikappimg.haptikapi.com/uploads/c438367db350eb514589257c20384663.png?w=1991&h=1962',
'business-id': 978,
'client-id': '763005ee8f30a91f3ab9ab35d15411315c256e46',
'base-url': 'https://kli.haptikapi.com',
'session-timeout': 360000000,
<!--'mode': 'fsm',-->
'custom-button': true,
'ignore-storage': true,
'chat-bubble-text-desktop': "I'm Online",
'chat-bubble-text-mobile': "_NONE_" 
 };
</script>
<script type="text/javascript" charset="UTF-8" src="https://toolassets.haptikapi.com/js-sdk/js/haptik-sdk-loader.js"></script> 
<script>
function openChat() {
HaptikSDK.expandWidget()
}
</script>
<script type="text/javascript">  
	$(function(){
	   setTimeout(function() {
	      $('#splash').fadeOut(500);
	   }, 6000);
	});
</script>
</body>
</html>