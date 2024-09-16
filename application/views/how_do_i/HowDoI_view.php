<?php 

	if(get_cookie('kotak_customer_type')){
		$cusType = get_cookie('kotak_customer_type');
	}else{
		$cusType = "new_customer";
	}
	
	if($cusType == "new_customer"){
		$gaCat = "New Customer";
	}else if($cusType == "existing_customer"){
		$gaCat = "Existing Customer";
	}else if($cusType == "life_advisor"){
		$gaCat = "Life Advisor";
	}

	//echo "dars".$gaCat;
?>
<section>
	<article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
	<article>
    <div class="midWrapper">
		<div class="headDesc headDesc01">
			<h1>How Do I</h1>
			    
                
			<p>Kotak Life Insurance simplifies your life at every stage. Now you can browse through the links below and proceed to understand the processes and protocols at Kotak Life Insurance.</p>
			<img alt="How do I, Banner Image - Kotak Life" title="How do I, Banner Image - Kotak Life" src="<?=base_url()?>assets/images/howdoi-hd.png"> 
		</div>
		<ul class="reportUL landingUL01">
			<li>
				<div class="reportBox"> <img src="<?=base_url()?>assets/images/pay-my-premium.png" alt='Icon for Insurance Premium Payment'>
					<h3>Pay My Premium</h3>
					<p>Choose a payment option convenient to you.</p>
					<a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Pay My Premium'});" href="<?=base_url()?>how-do-i/pay-my-premium" class="link">Know more</a> 
				</div>
			</li>
      <li>
         <div class="reportBox"> <img src="<?=base_url()?>assets/images/check-policy-document-specimen.png" alt="Icon for Check Policy Document">
            <h3>Register for ECS/Autodebit</h3>
            <p>Get to know the process.</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Register for ECS '});" href="<?=base_url()?>how-do-i/registerfor-ecs" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img alt="Icon for filing an insurance claim" title="Icon for filing an insurance claim" src="<?=base_url()?>assets/images/file-claim.png">
            <h3>File a Claim</h3>
            <p>Easy and simple ways to file a claim.</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|File a Claim '});" href="https://customer.kotaklifeinsurance.com/ocm" rel="nofollow" target="_blank" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img src="<?=base_url()?>assets/images/manage-my-policy.png" alt="Icon for Manage My Policy - Kotak Life">
            <h3>Manage My Policy</h3>
            <p>Know all about managing your policy.</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Manage My Policy '});" href="<?=base_url()?>how-do-i/manage-my-policy" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img alt="Icon for Download Application Form - Kotak Life Insurance" title="Icon for Download Application Form - Kotak Life Insurance"  src="<?=base_url()?>assets/images/download-application-form.png">
            <h3>Download Application Form</h3>
            <p>A simple way to apply.</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Download Application Form '});" href="<?=base_url()?>how-do-i/download-application-form" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img alt="Icon for Downloadable PDF" title="Icon for Downloadable PDF" src="<?=base_url()?>assets/images/get-policy-brochure.png">
            <h3>Get Product Brochure</h3>
            <p>Get to know the details of the policies.</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Get Policy Brochure '});" href="<?=base_url()?>how-do-i/get-policy-brochure" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img src="<?=base_url()?>assets/images/check-policy-document-specimen.png" alt="Icon for Check Policy Document">
            <h3>Check Policy Document Specimen</h3>
            <p>Check the document for a clear view.</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Check Policy Document Specimen '});" href="<?=base_url()?>how-do-i/check-policy-document-specimen" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img alt="Icon for browsing fund updates" title="Icon for browsing fund updates" src="<?=base_url()?>assets/images/browse-fund-updates-archive.png">
            <h3>Browse Fund Updates</h3>
            <p>Stay tuned with the fund updates.</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Browse Fund Updates '});" href="<?=base_url()?>how-do-i/fund-update" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img alt="Icon for understanding stages of the application" title="Icon for understanding stages of the application" src="<?=base_url()?>assets/images/understand-stages-my-application.png">
            <h3>Understand the Stages of My Application</h3>
            <p>Get to know the process of application.</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Understand the Stages of My Application '});" href="<?=base_url()?>how-do-i/understand-stages-of-application" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img alt="Apply for a line insurance plan online at Kotak Life" title="Apply for a line insurance plan online at Kotak Life" src="<?=base_url()?>assets/images/apply-for-a-life-insurance-plan.png">
            <h3>Apply For A Life Insurance Plan</h3>
            <p>A hassle-free way to apply for a plan.</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Apply For A Life Insurance Plan '});" href="<?=base_url()?>how-do-i/apply-for-life-insurance-plan" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img src="<?=base_url()?>assets/images/locate-kotak-life-branch.png" alt="Kotak Life - Branch Locator">
            <h3>Locate a Kotak Life Branch</h3>
            <p>Find a branch closest to you.</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Locate a Kotak Life Branch '});" href="<?=base_url()?>how-do-i/locate-kotak-branches" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img alt="Icon for Download Application Form - Kotak Life Insurance" title="Icon for Download Application Form - Kotak Life Insurance"  src="<?=base_url()?>assets/images/download-application-form.png">
            <h3>Check My Policy Document Annexures</h3>
            <p>Check the document for clear view</p>
            <a onClick="dataLayer.push({'event':'event how do i know more', 'category':'<?php echo $gaCat;?>', 'action':'how do i','label':'know more|Check My Policy Document Annexures '});" href="<?=base_url()?>how-do-i/check-my-policy-document-annexures" class="link">Know more</a> </div>
        </li>
      </ul>
    </div>
  </article>
</section>
<script>
var formType = "";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataAppForm = "";
var jsonDataFaqs = "";
var form_flag = "";

var annualFundPer = "";
var fundPerformance = "";
</script>