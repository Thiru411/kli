<?php
  //GA code Variables
  $categoryGA = '';
  if(get_cookie('kotak_customer_type')){
    if(get_cookie('kotak_customer_type') == 'new_customer') {
      $categoryGA = "new customers";
    } elseif (get_cookie('kotak_customer_type') == 'existing_customer') {
      $categoryGA = "existing customers";
    }
  }else{
    $categoryGA = "new customers";
  }
  $actionGA = 'insurance plan riders';
  //GA code Variables
?>
<!-- Section Start -->
<style>
.rider-list{display:flex; flex-wrap:wrap;}
    #faqsWrapDiv .para-p{padding-top: 0;}
    ul.riderUL li .detail{width: 65%;}
 </style>
<section> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
		<?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <!-- breadcrumb End --> 
  
  
  <!-- midWrapper Start -->
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Life Insurance Plan Riders</h1>
		<a rel="follow" href="<?=base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=Riders&utm_content=Riders" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event Insurance Plan Riders', 'category': 'new customers', 'action': 'Insurance Plan Riders', 'label': 'buy online1'});">Buy Online</a>
        <p>You do your maximum to give your loves ones the life and luxuries they wish for. Now you can give them a little more protection as well! Kotak Term Insurance gives you the flexibility to customize and enhance your cover with a set of riders which you may opt for alongwith your basic policy and shape your policy to suit your individual needs. </p> 
        <p>Your do your maximum to give your loves ones the life and luxuries they wish for. Now you can give them a little more protection as well! Kotak Term Insurance gives you the flexibility to customize and enhance your cover with a set of riders which you may opt for alongwith your basic policy and shape your policy to suit your individual needs. </p> 
		<p>Term Insurance with riders offered by Kotak Life may be availed of at the time of purchasing the plan, at nominal cost. The maximum amount of benefit you can avail is equal to the Basic Sum Assured and the benefit depends on the rider selected. However, the aggregate premium on all value- adds should not exceed 30% of the basic premium. </p>
        <a href="<?php echo base_url() ?>" class="kliBack"><span>Back</span></a> </div>
    </div>
  </article>
 <!---------------accordin starts here-------------->
<?php 
  
  $page_title="";  
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  
  $temp=array();
  $temp=explode("/",$actual_link);
  $page_title=$temp[4];
      
          if($page_title=="insurance-plan-riders")
          { ?>
          <article class="faqsWrap" id="faqsWrapDiv">
			<div class="midWrapper para-p">
			 	<h2 class="h2bold paraa-p">What are insurance riders?</h2>
         <p>Insurance riders are provisions in a policy, which add benefits to or alter the terms of the basic insurance contract.Insurance riders provide an opportunity to enhance the coverage a standard life insurance policy. Riders come at an additional cost but are extremely important because a general life cover only provides financial coverage in case of death of the insured. However, the uncertainties in life are not only limited to death but can include other events such as permanent disability,critical illness rider and others. In case, the rider eventuality occurs, the basic life cover remains intact, and only the rider insurance benefit is granted to the insured.</p>
         <p class="paraa-p">Kotak Life offers a range of attractive insurance riders with their life insurance plans. You can buy Kotak insurance riders at a nominal addition to your life insurance premium at the time of plan purchase. </p>
         <p class="paraa-p">Kotak life insurance riders are also very helpful if insurers desire a customised policy with specific coverage of events. Choosing the preferred riders can help create a life insurance policy that best matches the policyholder’s needs.Riders in insurance help insurers increase savings by not purchasing an additional policy for their specific requirements. It also allows insurers to purchase different coverage at a later time. </p>
         <h2 class="h2bold paraa-p"> What are the Major Riders Available with Kotak Life Insurance? </h2>
         <p>There are different types of riders in insurance. Some of the popular ones include:</p> 
        	<ul class="bullet">
					<li><b><a href='<?=base_url()?>assets/images/uploads/riders/pdfs/Accidental_Death_Benefit_Rider_Brochure1.pdf'>Kotak Accidental Death Benefit Rider </a> that offers an added death benefit for accidental death:</b> 
                  Kotak’s standard insurance policy provides comprehensive protection for the death of the insured. However, with an accidental death benefit rider, the nominee of the policy becomes entitled to receive an additional amount, over and above the sum assured, if the insured dies due to an accident during the rider term. </li>
          <li><b><a href='<?=base_url()?>assets/images/uploads/riders/pdfs/Kotak_Term_Benefit_Rider_Brochure-2July_2020.pdf'>Kotak Accidental Death Benefit Rider </a> to enhance the sum assured of the basic cover: </b> 
          This is a pure protection insurance rider that enhances the existing policy, providing complete protection until the end of the base plan term. The rider sum is payable to the nominee in case of death of the insured. </li>
          <li><b><a href='<?=base_url()?>assets/images/uploads/riders/pdfs/Kotak_Permanent_Disability_Benefit_Rider_Brochure4.pdf'>Kotak Accidental Death Benefit Rider </a> for financial assistance in case of permanent disability: </b> 
                  This rider provides financial assistance to the insured and the family in case of total or permanent disability, arising due to an accident. Reliable insurers pay a percentage of the rider sum assured over five years.</li>
          <li><b><a href='<?=base_url()?>assets/images/uploads/riders/pdfs/Kotak_Critical_Illness_Plus_Benefit_Rider_Brochure2.pdf'>Kotak  Critical Illness Plus Rider </a> to protect against critical ailments</b> 
                  This rider financially protects the insured on being diagnosed with a pre-specified critical illness, listed in the policy. Some of the common critical ailments include cancer, heart diseases, kidney failure, key organ transplant, and others.</li>
				</ul>

        <h2 class="h2bold paraa-p">How to Buy a Life Insurance Rider?</h2>
			<p>Insurance riders are offered separately from the standard insurance policy. However, these riders can be clubbed with the plan for improved coverage. At Kotak Life, we offer insurance riders at affordable rates at the time of purchase of the basic plan. The policyholder can select the appropriate insurance riders, such as accidental death, critical illness, etc. However, the riders in insurance can only be bought at the inception of the policy or any policy anniversary.</p>
      <p class="paraa-p">Kotak life insurance riders allow the policyholder to boost the coverage of the policy and make it more reliable. </p>

      <h3 class="h2bold paraa-p new-h3">What is Critical Illness Rider?</h3>
			<p>A critical illness can affect general life and also cause a significant burden on the financial health of a person. Given the lifestyle, food choices and the general momentum of life, the risk of a person contracting a critical illness has increased manifold today. In such circumstances, a general life insurance policy only provides limited coverage. However, with the help of critical illness rider, the policy can be extended to protect in case of critical illnesses.</p>
      <p class="paraa-p">Critical illness rider financially protects the insured and the family, if the insured is diagnosed with a pre-specified critical illness. Kotak Critical Illness Plus Rider offers coverage against 37 critical illnesses. Some of the most popular ones include cancer, open chest CABG, loss of limbs, deafness, loss of speech, major organ or bone marrow transplant, brain surgery and others. In the event of diagnosis of any of the listed critical illnesses, the rider ensures a lump sum payout.</p>
      <p class="paraa-p">By getting a critical illness rider, insurers can relieve themselves of the financial burden in demanding times. The rider benefits can be used to pay for treatment, indirect expenses, surgeries, etc. Moreover, the benefit also substitutes the loss of income due to illness. It helps the family pay household bills, loan EMIs, etc. Read the rider brochure carefully for detailed coverage guidelines.</p>


      <h3 class="h2bold paraa-p new-h3">What is Accidental Death Benefit Rider?</h3>
      <p>Given the uncertainty of life, it is good to get as much protection as possible. Policyholders should always aim to maximise their plan coverage. One such effective method to enhance a standard insurance policy is <a href="<?=base_url()?>assets/images/uploads/riders/pdfs/Accidental_Death_Benefit_Rider_Brochure1.pdf">Kotak Accidental Death Benefit Rider</a>. This rider benefit is payable to the nominee in case the life insured dies due to an accidental cause during the term of the accidental death insurance rider. In such a case, the nominee receives the accidental death insurance benefit over and above the basic sum assured in the policy.</p>
      <p class="paraa-p">For example, a person has an existing insurance plan of ₹X lakhs. He does not have impending liabilities and can afford an additional accidental cover. So, for more security, he purchases an accidental death insurance rider. Now in case, if the life insured dies due to an event classified as accidental, the nominee will receive ₹X lakhs + accidental death insurance rider benefit. Hence, with the help of accidental death insurance rider, policyholders can get additional financial protection in case of unfortunate accidental death. Read the rider brochure carefully for detailed coverage guidelines.</p>


      <h3 class="h2bold paraa-p new-h3">What is Permanent Disability Rider?</h3>
      <p>Among various riders in insurance, permanent disability rider is one of the most popular ones. <a href="<?=base_url()?>assets/images/uploads/riders/pdfs/Kotak_Permanent_Disability_Benefit_Rider_Brochure4.pdf">Kotak Permanent Disability Benefit</a> insurance rider aims to provide financial aid to the insured and the family, in case of an unfortunate event leading to a total or permanent disability of the insured life. However, the total or permanent disability must have been caused due to an accident. Generally, insurance providers offer to pay a percentage of the rider sum assured over five years. But to be eligible for the claim, the type of disability and the event must conform to the terms of the policy.</p>
      <p class="paraa-p">Permanent disability insurance rider benefits can act as an income substitute for the period of disability of the insured. The sum received can be used to cover treatment costs, household expenses, loan repayments, credit card bills, children’s education, and so on. Read the rider brochure carefully for detailed coverage guidelines.</p>


			<h2 class="h2bold paraa-p">What are the Benefits of Opting for Life Insurance Riders?</h2>
			<p>Some of the benefits of life insurance riders include:</p>
				<ul class="bullet">
					<li><b>Best way to get extra coverage without buying a separate policy:</b> Insurance riders can be attached to a standard policy for comprehensive financial coverage against uncertainties. </li>
					<li><b>Affordable than a new policy altogether:</b> Insurance riders are more cost-effective than a separate insurance policy.</li>
					<li><b>Flexibility to choose the cover required:</b> Riders in insurance can be added as per the preference and needs of the policyholder. This ensures the policy is customised and cost-effective. Riders can be added to a <a href="<?=base_url()?>">life insurance </a>plan, <a href="<?=base_url()?>term-insurance">term plan</a>,<a href="<?=base_url()?>/ulip-plans"> ULIP </a>, whole life plan, etc.</li>
					<li><b>Tax benefits as per existing laws:</b> All tax benefits that apply to a life insurance policy are also applicable to any additional rider insurance purchased with the policy.</li>
				</ul>
			 
				</ul>
								<!-- Accord End --> 
			</div>
		  </article>
			<script type="application/ld+json">

{

"@context": "https://schema.org",

"@type": "FAQPage",

"mainEntity": [{

"@type": "Question",

"name": "What are insurance riders",

"acceptedAnswer": {

"@type": "Answer",

"text": "What are insurance riders?

Insurance riders are provisions in a policy, which add benefits to or alter the terms of the basic insurance contract. Insurance riders provide an opportunity to enhance the coverage a standard life insurance policy. Riders come at an additional cost but are extremely important because a general life cover only provides financial coverage in case of death of the insured. However, the uncertainties in life are not only limited to death but can include other events such as permanent disability, critical illness rider and others. In case, the rider eventuality occurs, the basic life cover remains intact, and only the rider insurance benefit is granted to the insured.

Kotak Life offers a range of attractive insurance riders with their life insurance plans. You can buy Kotak insurance riders at a nominal addition to your life insurance premium at the time of plan purchase.

Kotak life insurance riders are also very helpful if insurers desire a customised policy with specific coverage of events. Choosing the preferred riders can help create a life insurance policy that best matches the policyholder’s needs. Riders in insurance help insurers increase savings by not purchasing an additional policy for their specific requirements. It also allows insurers to purchase different coverage at a later time."

}

},{

"@type": "Question",

"name": "What are the Major Riders Available with Kotak Life Insurance?",

"acceptedAnswer": {

"@type": "Answer",

"text": "What are insurance riders?

Insurance riders are provisions in a policy, which add benefits to or alter the terms of the basic insurance contract. Insurance riders provide an opportunity to enhance the coverage a standard life insurance policy. Riders come at an additional cost but are extremely important because a general life cover only provides financial coverage in case of death of the insured. However, the uncertainties in life are not only limited to death but can include other events such as permanent disability, critical illness rider and others. In case, the rider eventuality occurs, the basic life cover remains intact, and only the rider insurance benefit is granted to the insured.

Kotak Life offers a range of attractive insurance riders with their life insurance plans. You can buy Kotak insurance riders at a nominal addition to your life insurance premium at the time of plan purchase.

Kotak life insurance riders are also very helpful if insurers desire a customised policy with specific coverage of events. Choosing the preferred riders can help create a life insurance policy that best matches the policyholder’s needs. Riders in insurance help insurers increase savings by not purchasing an additional policy for their specific requirements. It also allows insurers to purchase different coverage at a later time.

<h2>What are the Major Riders Available with Kotak Life Insurance?</h2>

There are different types of riders in insurance. Some of the popular ones include:

Kotak Accidental Death Benefit Rider that offers an added death benefit for accidental death: Kotak’s standard insurance policy provides comprehensive protection for the death of the insured. However, with an accidental death benefit rider, the nominee of the policy becomes entitled to receive an additional amount, over and above the sum assured, if the insured dies due to an accident during the rider term.Kotak Accidental Death Benefit Rider to enhance the sum assured of the basic cover: This is a pure protection insurance rider that enhances the existing policy, providing complete protection until the end of the base plan term. The rider sum is payable to the nominee in case of death of the insured.Kotak Accidental Death Benefit Rider for financial assistance in case of permanent disability: This rider provides financial assistance to the insured and the family in case of total or permanent disability, arising due to an accident. Reliable insurers pay a percentage of the rider sum assured over five years.Kotak Critical Illness Plus Rider to protect against critical ailments This rider financially protects the insured on being diagnosed with a pre-specified critical illness, listed in the policy. Some of the common critical ailments include cancer, heart diseases, kidney failure, key organ transplant, and others."

}

},{

"@type": "Question",

"name": "How to Buy a Life Insurance Rider?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Insurance riders are offered separately from the standard insurance policy. However, these riders can be clubbed with the plan for improved coverage. At Kotak Life, we offer insurance riders at affordable rates at the time of purchase of the basic plan. The policyholder can select the appropriate insurance riders, such as accidental death, critical illness, etc. However, the riders in insurance can only be bought at the inception of the policy or any policy anniversary.

Kotak life insurance riders allow the policyholder to boost the coverage of the policy and make it more reliable."

}

},{

"@type": "Question",

"name": "What is Critical Illness Rider?",

"acceptedAnswer": {

"@type": "Answer",

"text": "A critical illness can affect general life and also cause a significant burden on the financial health of a person. Given the lifestyle, food choices and the general momentum of life, the risk of a person contracting a critical illness has increased manifold today. In such circumstances, a general life insurance policy only provides limited coverage. However, with the help of critical illness rider, the policy can be extended to protect in case of critical illnesses.

Critical illness rider financially protects the insured and the family, if the insured is diagnosed with a pre-specified critical illness. Kotak Critical Illness Plus Rider offers coverage against 37 critical illnesses. Some of the most popular ones include cancer, open chest CABG, loss of limbs, deafness, loss of speech, major organ or bone marrow transplant, brain surgery and others. In the event of diagnosis of any of the listed critical illnesses, the rider ensures a lump sum payout.

By getting a critical illness rider, insurers can relieve themselves of the financial burden in demanding times. The rider benefits can be used to pay for treatment, indirect expenses, surgeries, etc. Moreover, the benefit also substitutes the loss of income due to illness. It helps the family pay household bills, loan EMIs, etc. Read the rider brochure carefully for detailed coverage guidelines."

}

},{

"@type": "Question",

"name": "What is Accidental Death Benefit Rider?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Given the uncertainty of life, it is good to get as much protection as possible. Policyholders should always aim to maximise their plan coverage. One such effective method to enhance a standard insurance policy is Kotak Accidental Death Benefit Rider. This rider benefit is payable to the nominee in case the life insured dies due to an accidental cause during the term of the accidental death insurance rider. In such a case, the nominee receives the accidental death insurance benefit over and above the basic sum assured in the policy.

For example, a person has an existing insurance plan of ₹X lakhs. He does not have impending liabilities and can afford an additional accidental cover. So, for more security, he purchases an accidental death insurance rider. Now in case, if the life insured dies due to an event classified as accidental, the nominee will receive ₹X lakhs + accidental death insurance rider benefit. Hence, with the help of accidental death insurance rider, policyholders can get additional financial protection in case of unfortunate accidental death. Read the rider brochure carefully for detailed coverage guidelines."

}

},{

"@type": "Question",

"name": "What is Permanent Disability Rider?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Among various riders in insurance, permanent disability rider is one of the most popular ones. Kotak Permanent Disability BenefitM insurance rider aims to provide financial aid to the insured and the family, in case of an unfortunate event leading to a total or permanent disability of the insured life. However, the total or permanent disability must have been caused due to an accident. Generally, insurance providers offer to pay a percentage of the rider sum assured over five years. But to be eligible for the claim, the type of disability and the event must conform to the terms of the policy.

Permanent disability insurance rider benefits can act as an income substitute for the period of disability of the insured. The sum received can be used to cover treatment costs, household expenses, loan repayments, credit card bills, children’s education, and so on. Read the rider brochure carefully for detailed coverage guidelines."

}

},{

"@type": "Question",

"name": "What are the Benefits of Opting for Life Insurance Riders?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Some of the benefits of life insurance riders include:

Best way to get extra coverage without buying a separate policy: Insurance riders can be attached to a standard policy for comprehensive financial coverage against uncertainties. Affordable than a new policy altogether: Insurance riders are more cost-effective than a separate insurance policy.Flexibility to choose the cover required: Riders in insurance can be added as per the preference and needs of the policyholder. This ensures the policy is customised and cost-effective. Riders can be added to a life insurance plan, term plan, ULIP, whole life plan, etc.Tax benefits as per existing laws: All tax benefits that apply to a general insurance policy are also applicable to any additional rider insurance purchased with the policy."

}

}]

}

</script>	 
  
         <?php  }   ?> 
        <!---------------------accordin end here-------------->
          
  <article class="ridersWrap">
    <div class="midWrapper">
    <?php if(isset($riders) && sizeof($riders) > 0) { ?>
		<ul class="reportUL riderUL rider-list">
			<?php foreach($riders as $rider) { ?>
			<li>
			  <div class="reportBox">
			  	<?php if(isset($rider->rider_icon_image) && $rider->rider_icon_image != '') { ?>
			    <div class="img"><img class="lazy" data-src="<?php echo str_replace('{filedir_18}', base_url().'assets/images/uploads/riders/images/', $rider->rider_icon_image) ?>" /></div>
			    <?php } ?>
			    <div class="detail">
			      	<h3><?php echo isset($rider->title) ? $rider->title : '' ?></h3>
			    	<?php echo isset($rider->rider_description) ? $rider->rider_description : '' ?>
			    	<?php if(isset($rider->rider_pdf) && $rider->rider_pdf != '') { ?>
              <?php
                //GA code Variables
                $eventGA = 'event plan rider download';
                $labelGA =  isset($rider->title) ? 'download|' . strtolower($rider->title) : '';
                //GA code Variables
              ?>
			      	<a href="<?php echo str_replace('{filedir_19}', base_url().'assets/images/uploads/riders/pdfs/', $rider->rider_pdf) ?>" target="_blank" class="pdfIcon" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Download PDF</a> </div>
			      	<?php } ?>
			  </div>
			</li>
			<?php } ?>
		</ul>
	<?php } ?>
    </div>
  </article>
  
  
  
  

  <!-- midWrapper End -->
  <?php
  //GA code Variables
  $eventGA = 'event need help email';
  $labelGA = 'email click';
	//Need Help Buying A Plan Block
	$this->load->view('common/need_help_buying_a_plan', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA)); 
  ?>
</section>