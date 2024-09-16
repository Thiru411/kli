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
  $actionGA = isset($planMainInfo->title) ? strtolower($planMainInfo->title) : '';
  //GA code Variables
  $actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; 
?>
<link href=assets/css/owl.carousel.css rel=stylesheet>
<style>
  .newnone{display: none;}
  @media(max-width:480px) {
    .newnone{display: block !important;}
  }
    .owl-controls {
        position: relative;
        bottom: -2rem
    }

    @media(max-width:480px) {
        .owl-controls {
            bottom: 0
        }
    }

    .disclaimerDetl h3 span:after {
        content: none
    }

    <?php if ($_SERVER['REQUEST_URI']=="/online-plans/retirement-pension-plans/kotak-lifetime-income-plan") {
        ?>.disclaimer h3:before {
            -webkit-transform: rotate(0) !important;
            transform: rotate(0) !important
        }

        .disclaimer h3.active:before {
            -webkit-transform: rotate(-90deg) !important;
            transform: rotate(-90deg) !important
        }

        <?php
    }

    ?><?php if ($_SERVER['REQUEST_URI']=="/insurance-plans/savings-and-investments-plans/kotak-guaranteed-savings-plan") {
        ?>.tableClass td {
            padding: 10px !important;
        }

        <?php
    }

    ?>
    <?php if ($_SERVER['REQUEST_URI']=="/retirement-and-pension-plans/kotak-assured-pension" ||  $_SERVER['REQUEST_URI']=="/retirement-and-pension-plans/kotak-lifetime-income-plan" )  { ?>
.custom-icon.mobilechat{display:none}
<?php } ?>
</style>
<script>
    let pageName = "<?php echo $planMainInfo->title?>";
    lmSMTObj.page("page", {
            /* "pageProps":{
                 "name":<?php echo $planMainInfo->title?>} */
            "title": pageName
        },
        function() {}
    );
</script>
<section>
    <article class=breadcrumb>
        <div class=midWrapper>
            <ul><?php echo $this->breadcrumb->output();?></ul>
        </div>
    </article>
    <article>
        <div class=midWrapper>
            <div class=headDesc>
                <h1><?php echo isset($planMainInfo->title) ? $planMainInfo->title : '' ?></h1>
                <div class="blog-detail dd-btn-flex"></div>

                <?php if($_SERVER['REQUEST_URI']=='/insurance-plans/savings-and-investments-plans/kotak-health-maximiser'){?><ul style="display: flex;justify-content: center;margin-left: 39%;margin-bottom: 31px;">
                    <li style="margin-right: 33px;"><a class="formIcon" href="<?=base_url()?>assets/images/uploads/insurance-plans/Kotak-Health-Maximiser-Brochure-Final.pdf" onclick="dataLayer.push({event:&quot;event insurance plans brochure&quot;,category:&quot;new customers&quot;,action:&quot;kotak assured pension&quot;,label:&quot;download brochure&quot;})" target="_blank"><span>Download Brochure</span></a></li>

                    <li><a class="formIcon" href="<?=base_url()?>assets/images/uploads/insurance-plans/Kotak-Health-Maximiser-Product-Presentation-08052023-V03.pdf" onclick="dataLayer.push({event:&quot;event insurance plans brochure&quot;,category:&quot;new customers&quot;,action:&quot;kotak assured pension&quot;,label:&quot;download brochure&quot;})" target="_blank"><span>Product Presentation</span></a></li>
                </ul><?php }//if ($mainPlanType == 'Online Plans') 
     $eventGA='';$labelGA='';
		if(isset($planMainInfo->plan_buy_online_url) && $planMainInfo->plan_buy_online_url != '') { ?><?php
            //GA code Variables
            $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' buy online' : '';
            $labelGA =  'buy online';
            //GA code Variables
        ?>  <a class=redBtn href="<?=$planMainInfo->plan_buy_online_url?>" onclick='dataLayer.push({event:"<?php echo $eventGA; ?>",category:"<?php echo $categoryGA; ?>",action:"<?php echo $actionGA; ?>",label:"<?php echo $labelGA; ?>"})' target=_blank><?=$planMainInfo->plan_buy_online_title?></a>
        <?php } ?>
       <?php  echo isset($planMainInfo->plan_description) ? $planMainInfo->plan_description : '' ?>
            </div><?php if(sizeof($planHowItWorksInfo) > 0) { ?><div class=howWorksWrap>
                <h2>How it works</h2>
                <ul class=howWorksUL><?php foreach($planHowItWorksInfo as $detail) { ?><li><?php if(isset($detail->image) && $detail->image != '') { ?><img alt="insurence plan" class="lazy img01" data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->image) ?>"><?php } ?><?php echo isset($detail->description) ? $detail->description : '' ?></li><?php } ?></ul>
            </div><?php } ?><?php if(sizeof($planKeyFeaturesAndBenefits) > 0) { ?><div class=boxWrap><?php if($planMainInfo->title!="Kotak Fortune Maximiser"){?><h2>Key Features</h2><?php } else {?><h2>Key Features</h2><?php }?><ul class="innerUL owlCarousel"><?php foreach($planKeyFeaturesAndBenefits as $detail) { ?><li><?php if(isset($detail->image) && $detail->image != '') { ?><div class=img><img alt="<?php echo isset($detail->title) ? $detail->title : '' ?>" class=lazy data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->image) ?>"></div><?php } ?><h4><?php echo isset($detail->title) ? $detail->title : '' ?></h4>
                        <p class=discp><?php echo isset($detail->description) ? $detail->description : '' ?>
                    </li><?php } ?></ul>
            </div><?php } ?><?php if($planAdditionalBenefits) { ?><div class=boxWrap><?php if($planMainInfo->title!="Kotak Fortune Maximiser"){?><h2>Additional Benefits</h2><?php } else {?><h2>Additional Benefits</h2><?php }?><ul class="innerUL owlCarousel"><?php foreach($planAdditionalBenefits as $detail) { ?><li><?php if(isset($detail->benefit_image) && $detail->benefit_image != '') { ?><div class=img><img alt="<?php echo isset($detail->benefit_title) ? $detail->benefit_title : '' ?>" class=lazy data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->benefit_image) ?>"></div><?php } ?><h4><?php echo isset($detail->benefit_title) ? $detail->benefit_title : '' ?></h4>
                        <p class=discp><?php echo isset($detail->benefit_description) ? $detail->benefit_description : '' ?>
                    </li><?php } ?></ul>
            </div><?php } ?><?php if(sizeof($planEligibilityInfo) > 0) { ?><div class=eligibility>
                <div class=topDesc>
                    <h2>Eligibility</h2><?php if(isset($planMainInfo->plan_eligibility_title) && $planMainInfo->plan_eligibility_title != "") { ?><p style="margin-top:30px"><?php echo isset($planMainInfo->plan_eligibility_title) ? $planMainInfo->plan_eligibility_title : '' ?></p><?php } ?>
                </div>
                <ul class="eligibilityUL eligibilityUL01"><?php 
				$count = 0;
				foreach($planEligibilityInfo as $detail) {
					$count++;
			?><li<?php echo ($count % 2 == 1) ? "" : ' class="sLi"' ?>><?php if(isset($detail->image) && $detail->image != '') { ?><img alt=Eligibility class="lazy imgIcon" data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->image) ?>"><?php } ?><div class=desc><?php echo isset($detail->description) ? $detail->description : '' ?></div>
                        </li><?php } ?></ul>
            </div><?php } ?>
        </div>
    </article><?php if(sizeof($planAdditionalProtectionRidersInfo) > 0) { ?><article class=ridersW>
        <div class=midWrapper>
            <div class="boxWrap boxWrapRider">
                <div class=topDesc>
                    <h2>Additional Protection with Optional Riders</h2>
                </div>
                <ul class="innerUL owlCarousel"><?php foreach($planAdditionalProtectionRidersInfo as $detail) { ?><li><?php if(isset($detail->image) && $detail->image != '') { ?><div class=img><img alt="Additional Protection with Optional Riders" class=lazy data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->image) ?>"></div><?php } ?><h4><?php echo isset($detail->title) ? $detail->title : '' ?></h4>
                        <p><?php echo isset($detail->description) ? $detail->description : '' ?></p><?php if(isset($detail->pdf_file) && $detail->pdf_file != '') { ?><?php
                //GA code Variables
                $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' download' : '';
                $labelGA =  isset($detail->title) ? 'download|' . strtolower($detail->title) : '';
                //GA code Variables
              ?><a class=pdfIcon href="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->pdf_file) ?>" onclick='dataLayer.push({event:"<?php echo $eventGA; ?>",category:"<?php echo $categoryGA; ?>",action:"<?php echo $actionGA; ?>",label:"<?php echo $labelGA; ?>"})' target=_blank>Download</a><?php } ?>
                    </li><?php } ?></ul>
            </div>
        </div>
    </article><?php } ?><?php if(isset($planMainInfo->plan_calculate_premium_title) && $planMainInfo->plan_calculate_premium_title != '' && isset($planMainInfo->plan_calculate_premium_url) && $planMainInfo->plan_calculate_premium_url != '') { ?><article class=calcPremium>
        <div class=midWrapper>
            <div class=topDesc><img alt="Calculate premium" class=lazy data-src="<?php echo base_url()?>assets/images/calculate-premium-icon.png">
                <p><?php echo isset($planMainInfo->plan_calculate_premium_title) ? $planMainInfo->plan_calculate_premium_title : '' ?></p><?php
          //GA code Variables
          $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' calculate premium' : '';
          $labelGA =  'calculate premium';
          //GA code Variables
        ?><a class="redBtn redBtn01" href="<?php echo isset($planMainInfo->plan_broucher_url) ? $planMainInfo->plan_broucher_url : '' ?>" onclick='dataLayer.push({event:"<?php echo $eventGA; ?>",category:"<?php echo $categoryGA; ?>",action:"<?php echo $actionGA; ?>",label:"<?php echo $labelGA; ?>"})' target=_blank rel=follow>
                    Calculate premium</a>
            </div>
        </div>
    </article><?php } ?>

    <?php if($_SERVER['REQUEST_URI']!='/insurance-plans/savings-and-investments-plans/kotak-health-maximiser'){ if(sizeof($planDownloadsInfo) > 0) { ?><article class=download>
        <div class=midWrapper>
            <h2>Downloads</h2>
            <p><?php echo isset($planMainInfo->plan_downloads_title) ? $planMainInfo->plan_downloads_title : '' ?>
            <ul class=downloadUL><?php foreach($planDownloadsInfo as $detail) { ?><?php if(isset($detail->file) && $detail->file != '') { ?><?php

                //GA code Variables
                $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' brochure' : '';
                $labelGA =  'download brochure';
                //GA code Variables
                
              ?><li><a class="<?php echo (isset($detail->filetype) && $detail->filetype == 'pdf') ? 'pdfIcon' : 'formIcon' ?>" href="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->file) ?>" onclick='dataLayer.push({event:"<?php echo $eventGA; ?>",category:"<?php echo $categoryGA; ?>",action:"<?php echo $actionGA; ?>",label:"<?php echo $labelGA; ?>"})' target=_blank><span><?php echo isset($detail->title) ? $detail->title : '' ?></span></a></li><?php } ?><?php } ?></ul>
        </div>
    </article><?php }} ?><?php if ($mainPlanType == 'Online Plans') { ?><?php if(isset($planMainInfo->plan_buy_online_title) && $planMainInfo->plan_buy_online_title != '' && isset($planMainInfo->plan_buy_online_url) && $planMainInfo->plan_buy_online_url != '') { ?><article class=calcPremium>
        <div class=midWrapper>
            <div class=topDesc>
                <p><?php echo isset($planMainInfo->plan_buy_online_title) ? $planMainInfo->plan_buy_online_title : '' ?></p><?php
            //GA code Variables
            $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' buy online' : '';
            $labelGA =  'buy online2';
            //GA code Variables
          ?><a class=redBtn href="<?php echo isset($planMainInfo->plan_buy_online_url) ? $planMainInfo->plan_buy_online_url : '' ?>" onclick='dataLayer.push({event:"<?php echo $eventGA; ?>",category:"<?php echo $categoryGA; ?>",action:"<?php echo $actionGA; ?>",label:"<?php echo $labelGA; ?>"})' target=_blank>Buy Online</a>
            </div>
        </div><img alt="Buy Online" src="<?php echo base_url()?>assets/images/premCal_img.png">
    </article><?php } ?><?php } ?><?php 
  
  $page_title="";  
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  
  $temp=array();
  $temp=explode("/",$actual_link);
  
  $page_title=$temp[2];
      
          if($page_title=="kotak-health-shield")
          { ?><article class=faqsWrap id=faqsWrapDiv>
        <div class=midWrapper>
            <h2 class=h2bold>FAQs</h2>
            <ul class=accordUL id=faqs-div>
                <li class=ga_track data-action="policy faqs" data-event="event policy faq" data-label="read more|who is a life insured?">
                    <h3><span>Is a medical test compulsory for Kotak Health Shield?</span></h3>
                    <div class=accordDesc style=display:none>
                        <p>Since coverage for pre-existing diseases does not apply to Kotak Health Shield, a declaration of health can suffice to buy the plan. However, this critical illness insurance plan provides payouts on the first diagnosis of the diseases covered under the policy. Hence, to claim the insured sum, you must submit a medical test report confirming the diagnosis. 
                    </div>
                <li class=ga_track data-action="policy faqs" data-event="event policy faq" data-label="read more|who is a life insured?">
                    <h3><span>What is the Accidental Death benefit in Kotak Health Shield?</span></h3>
                    <div class=accordDesc style=display:none>
                        <p>The Accidental Death benefit provides a lump-sum payout to your nominee in case of an unfortunate fatality within 120 days of an accident. An accident here is defined as an unexpected and unintentional incident caused by an external, violent and visible agent. 
                    </div>
                <li class=ga_track data-action="policy faqs" data-event="event policy faq" data-label="read more|who is a life insured?">
                    <h3><span>What are the major exclusions of the Kotak Health Shield?</span></h3>
                    <div class=accordDesc style=display:none>
                        <p>Under this medical policy, the insurer is not liable to provide payouts if the health claim arises due to:
                        <ul class=bullet>
                            <li>Active participation in warfare, civil unrests, riots, or unlawful acts including terrorism, kidnapping, assault, and other violent activities
                            <li>Intentional injury
                            <li>Intake of narcotics or drugs without a medical practitioner’s prescription  
                        </ul>
                        <p>The conditions mentioned above also apply to claims under the Personal Accident Shield cover. Also, such claims will not be valid if the death or disability results from:
                        <ul class=bullet>
                            <li>Hazardous sports or hobbies
                            <li>Flying in an aircraft other than as a passenger on a licensed airline
                            <li>Suicide or self-inflicted injury
                            <li>Nuclear/ radioactive/ ionising radiation
                            <li>Disease due to infection by germs
                        </ul>
                    </div>
                <li class=ga_track data-action="policy faqs" data-event="event policy faq" data-label="read more|who is a life insured?">
                    <h3><span>Does Kotak Health Shield have cashless hospitalisation?</span></h3>
                    <div class=accordDesc style=display:none>
                        <p>Health plan insurance policies provide cashless treatment only on admission at hospitals having tie-ups with the insurance company.  Kotak Health Shield does not limit you to undergo treatment only at such network hospitals. Instead, it provides a lump-sum payout upfront on the detection of diseases covered under the plan. You can use this sum to undergo treatment at any medical care centre of your choice.
                    </div>
                <li class=ga_track data-action="policy faqs" data-event="event policy faq" data-label="read more|who is a life insured?">
                    <h3><span>Where can I buy the Kotak Health Shield Plan?</span></h3>
                    <div class=accordDesc style=display:none>
                        <p>You can contact a Life Advisor for Kotak Health Shield health insurance online by filling up the request form at the official website. You can also call on the toll-free number 1800 209 8800 between 8:00 am and 10:00 pm to get help with buying the plan.
                    </div>
                <li class=ga_track data-action="policy faqs" data-event="event policy faq" data-label="read more|who is a life insured?">
                    <h3><span>What is a Waiver of Premium?</span></h3>
                    <div class=accordDesc style=display:none>
                        <p>Ill health can result in income loss, making the premiums for your health insurance policy a burden. Kotak Health Shield dispenses with the need for paying premiums to keep your health cover in-force after the diagnosis of the listed medical conditions. With the optional premium waiver benefit, after raising a valid claim, you need not pay the premiums for the next three years to keep your coverage active.
                    </div>
                <li class=ga_track data-action="policy faqs" data-event="event policy faq" data-label="read more|who is a life insured?">
                    <h3><span>Does the Kotak Health Shield Plan offer tax benefits?</span></h3>
                    <div class=accordDesc style=display:none>
                        <p>You can claim deductions from your taxable income for premiums you pay for your Kotak Health Shield health policy. The deductions are subject to the conditions under Section 80D of the Income Tax Act, 1961. The payouts are also tax-exempt.
                    </div>
                <li class=ga_track data-action="policy faqs" data-event="event policy faq" data-label="read more|who is a life insured?">
                    <h3><span>What are the documents required to buy Kotak Health Shield Plan?</span></h3>
                    <div class=accordDesc style=display:none>
                        <p>You need the following documents to get financial cover against critical illnesses with the Kotak Health Shield Plan:
                        <ul class=bullet>
                            <li><b>Identity proof:</b> PAN Card/ Passport/ Driving License/ Aadhaar Card/ Voter ID
                            <li><b>Address proof: </b>Aadhaar Card/ Passport/ Driving License/ Voter ID/ Ration Card
                            <li><b>Date of Birth proof:</b> Birth Certificate/ PAN Card/ Aadhaar Card/ Voter Card/ Passport/ Driving License
                            <li><b>Passport-sized photo</b>
                        </ul>
                    </div>
            </ul>
            <div class=noRecord style=display:none></div>
        </div>
    </article><?php } ?><?php 
    if ($mainPlanType == 'Online Plans') { 
       //GA code Variables
        $eventGA = 'event email need help premium';
        $labelGA = 'email click';
       //Need help for paying premium
       $this->load->view('common/need_help_paying_premium', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA));
    } 
      if($mainPlanType == 'Insurance Plans') {
        //GA code Variables
        $eventGA = 'event need help email';
        $labelGA = 'email click';
        //Need Help Buying A Plan Block
	      $this->load->view('common/need_help_buying_a_plan', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA));
     }   
    if($mainPlanType == 'Group Plans') {
    //GA code Variables
    $eventGA = 'event need help email';
    $labelGA = 'email click'; 
    //Need Help Buying A Plan Block
    $this->load->view('common/need_help_buying_a_group_plan', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA)); 
  }
  ?><?php if(isset($planMainInfo->plan_disclaimer) && $planMainInfo->plan_disclaimer != '') { ?><article class=disclaimer>
        <div class=midWrapper><?php
        //GA code Variables
        $eventGA = 'event read about';
        $labelGA =  'read about tab';
        //GA code Variables
      ?><h3 onclick='dataLayer.push({event:"<?php echo $eventGA; ?>",category:"<?php echo $categoryGA; ?>",action:"<?php echo $actionGA; ?>",label:"<?php echo $labelGA; ?>"})'><span>Read about Tax benefits & Plan Disclaimer</span></h3>
            <div class=disclaimerDetl style=display:block!important><?php echo  str_replace("Kotak Mahindra Old Mutual Life Insurance Ltd.","Kotak Mahindra Life Insurance Company Ltd.",$planMainInfo->plan_disclaimer); ?><?php //echo $planMainInfo->plan_disclaimer; ?></div>
        </div>
    </article><?php } ?><?php if(sizeof($similarPlans) > 0) { ?><article class=similarPlan>
        <div class=midWrapper>
            <div class=topDesc>
                <h2>Similar plans</h2>
            </div>
            <ul class="planUL similerPlanCarousel"><?php foreach($similarPlans as $detail) { ?><li><?php if(isset($detail->plan_image) && $detail->plan_image != '') { ?><?php if($detail->plan_image=='{filedir_10}Kotak-Secure-Return-Employee-Benefit-Plan.png'){?><img alt="Icon for employee benefit" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Icon for employee benefit"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Sampoorn-Bima-Micro-Insurance-Plan.png'){?><img alt="Icon for Kotak Sampoorn Bima Micro Insurance Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Icon for Kotak Sampoorn Bima Micro Insurance Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-group-assure.png'){?><img alt="Kotak Life Insurance - Group Assurance" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Life Insurance - Group Assurance"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Group-Shield.png'){?><img alt="Kotak Group Shield Insurance Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Group Shield Insurance Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Group-secure-one.png'){?><img alt="Kotak Group secure one insurance policy" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Group secure one insurance policy"><?php }  else if($detail->plan_image=='{filedir_10}benifits-joint-life-cover.png'){?><img alt="Icon for benefits of joint life cover" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Icon for benefits of joint life cover"><?php }  else if($detail->plan_image=='{filedir_10}Kotak_gauranteedSavingPlan.png'){?><img alt="Gauranteed Savings Plan by Kotak Life Insurance" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Gauranteed Savings Plan by Kotak Life Insurance"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Gratuity-plus-group-plan.png'){?><img alt="Kotak Gratuity plus group plan - Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Gratuity plus group plan - Icon"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Assured-Savings-Plan1.png'){?><img alt="Kotak Assured Savings Plan - icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Assured Savings Plan - icon"><?php }  else if($detail->plan_image=='{filedir_10}keyF_01_(1).png'){?><img alt="Icon for protection in retired life" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Icon for protection in retired life"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Invest-Maxima.png'){?><img alt="Kotak Invest Maxima Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Invest Maxima Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Assured-Income-Accelerator.png'){?><img alt="Improvement in the performance of investments" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Improvement in the performance of investments"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-platinum.png'){?><img alt="Kotak Platinum" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Platinum"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Single-Invest-Plus.png'){?><img alt="Kotak Single Investment Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Single Investment Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Ace-investment.png'){?><img alt="Kotak Ace Investment" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Ace Investment"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Premier-Pension-Plan.png'){?><img alt="Kotak Premier Pension Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Premier Pension Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Premier-Endowment-Plan.png'){?><img alt="Kotak Premier Endowment Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Premier Endowment Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-POS-Bachat-Bima-ICON.png'){?><img alt="Icon for Kotak POS Bachat Bima Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Icon for Kotak POS Bachat Bima Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-SmartLife-Plan.png'){?><img alt="Icon for Kotak SmartLife Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Icon for Kotak SmartLife Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Credit-Term-group-plan.png'){?><img alt="Kotak Credit Term Group Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Credit Term Group Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-e-Lifetime-Income-Plan1.png'){?><img alt="Kotak E-Lifetime Income Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak E-Lifetime Income Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Credit-Term-group-plan.png'){?><img alt="Kotak Credit Term Group Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Credit Term Group Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Complete-Cover-Group-Plan.png'){?><img alt="Kotak Complete Cover, Group Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Complete Cover, Group Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Classic-Endowment-Plan.png'){?><img alt="Kotak Classic Endowment Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Classic Endowment Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Premier-Moneyback-Plan.png'){?><img alt="Kotak Premier Moneyback Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Premier Moneyback Plan"><?php }  else if($detail->plan_image=='{filedir_10}Leave-Encashment-group-plan.png'){?><img alt="Leave Encashment Group Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Leave Encashment Group Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Secure-Return-Superannuation-Plan.png'){?><img alt="Kotak Secure Return Superannuation Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Secure Return Superannuation Plan"><?php }  else if($detail->plan_image=='{filedir_10}disability-rider.png'){?><img alt="Icon for disability rider on Kotak Insurance Plans" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Icon for disability rider on Kotak Insurance Plans"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Secure-Return-Superannuation-Plan--2.png'){?><img alt="Kotak Secure Return Superannuation Plan - 2" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Secure Return Superannuation Plan - 2"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Premier-Life-Plan.png'){?><img alt="Kotak Premier Life Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Premier Life Plan"><?php }  else if($detail->plan_image=='{filedir_10}Other-Advantages.png'){?><img alt="Other advantages of Kotak Life Insurance" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Other advantages of Kotak Life Insurance"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Term-Plan.png'){?><img alt="Kotak Term Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Term Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak_premier_incomeplan.png'){?><img alt="Kotak Premier Income Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Premier Income Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Single-Invest-Advantage.png'){?><img alt="Kotak Single Invest Advantage Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Single Invest Advantage Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Term-Group-Plan.png'){?><img alt="Kotak Term Group Plan" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Term Group Plan"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-e-term.png'){?><img alt="Kotak e-Term" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak e-Term"><?php }  else if($detail->plan_image=='{filedir_10}group-plan-group-gratuity.png'){?><img alt="Group Gratuity Policy/Leave Encashment Plans Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Group Gratuity Policy/Leave Encashment Plans Icon"><?php }  else if($detail->plan_image=='{filedir_10}Kotak-Gratuity-group-plan.png'){?><img alt="Kotak Gratuity group plan insurance" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>" title="Kotak Gratuity group plan insurance"><?php }  else if($detail->plan_image=='{filedir_10}'){?><img alt=insurance-plans src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>"><?php }  else if($detail->plan_image=='{filedir_10}'){?><img alt=insurance-plans src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>"><?php }  else if($detail->plan_image=='{filedir_10}'){?><img alt=insurance-plans src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>"><?php }else if($detail->plan_image!='Kotak-Lifetime-Income-Plan1.png'){?><?php } else {?><img alt=insurance-plans src="assets/images/uploads/insurance-plans/Other-Advantages.png"><?php }?><?php } ?><?php if($detail->title!='Kotak Lifetime Income Plan'){?><h3><?php echo isset($detail->title) ? $detail->title : '' ?></h3>
                    <p><?php echo isset($detail->plan_description) ? $detail->plan_description : '' ?></p><?php }?><?php
        //GA code Variables
        $eventGA = 'event similar plans';
        $labelGA =  isset($detail->title) ? 'similar plan|'.strtolower($detail->title) : '';
        //GA code Variables
      ?><?php if($detail->title!='Kotak Lifetime Income Plan'){?><a class=links href="<?php echo isset($detail->url_title) ? base_url($mainPlanURL.'/'.$planCategoryURL.'/'.$detail->url_title) : '' ?>" onclick='dataLayer.push({event:"<?php echo $eventGA; ?>",category:"<?php echo $categoryGA; ?>",action:"<?php echo $actionGA; ?>",label:"<?php echo $labelGA; ?>"})'>Know more</a><?php }?>
                </li><?php } ?></ul>
        </div>
    </article><?php } ?>
</section>

<?php	if($_SERVER['REQUEST_URI']=="/retirement-and-pension-plans/kotak-assured-pension")  {?>
  <div class="reddiv newnone">
    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=bottom_banner" class="buysticky">Start Building Your Pension Fund</a>
  </div>

  
  <section id="bottomStickyProduct">
        <div class="midWrapper">
          <div class="bottomNavProduct">
            <div class="productSticky-grid">
              <div class="dflexS">
                <div class="customerCare">
                  <p> 
                    <img src="/assets/images/stickybuttonimg/call.svg" alt="Customer Care" />Talk to our expert:  <a href="tel:022-45811311">022-45811311</a>
                  </p>
                </div>
                <div class="customerCare">
                  <p><a class="downloadBrochure" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Assured_Pension_-_Brochure.pdf"><img src="/assets/images/stickybuttonimg/Download.svg" alt="Download" /> Download Brochure</a> </p>
                </div>
              </div>
              <div class="dflexP">
                
                <div class="productPage-cta1" style="text-align: center;">
                  <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=bottom_banner" id="stickyTitleProduct-url" href="" style="margin: 5px 0;">Start Building Your Pension Fund</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php } ?>
      
      
<?php	if($_SERVER['REQUEST_URI']=="/retirement-and-pension-plans/kotak-lifetime-income-plan")  {?>
  <div class="reddiv newnone">
    <!-- <a href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=bottom_banner" class="buysticky">Get Financial Security for Life</a> -->
    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=bottom_banner" class="buysticky">Get Financial Security for Life</a>

  </div>

  
  <section id="bottomStickyProduct">
        <div class="midWrapper">
          <div class="bottomNavProduct">
            <div class="productSticky-grid">
              <div class="dflexS">
                <div class="customerCare">
                  <p> 
                    <img src="/assets/images/stickybuttonimg/call.svg" alt="Customer Care" /> Talk to our expert:  <a href="tel:022-45811311">022-45811311</a>
                  </p>
                </div>
                <div class="customerCare">
                  <p><a class="downloadBrochure" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-lifetime-income-plan-brochure.pdf"><img src="/assets/images/stickybuttonimg/Download.svg" alt="Download" /> Download Brochure</a> </p>
                </div>
              </div>
              <div class="dflexP">
                
                <div class="productPage-cta1" style="text-align: center;">
                  <!-- <a href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=bottom_banner" id="stickyTitleProduct-url" href="" style="margin: 5px 0;">Get Financial Security for Life</a> -->
                  <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=bottom_banner" id="stickyTitleProduct-url" href="" style="margin: 5px 0;">Get Financial Security for Life</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php } ?>

<script>
    <?php if (isset($plan_url_schema)){?>, <?php
echo $plan_url_schema;?>, <?php } ?>
</script>