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
  $actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
?>
<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome-4.7.0.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
<style>
  .reddiv{display: none;}@media(max-width:480px){.reddiv{display:block  !important;}}
.owl-controls{position:relative; bottom:-2rem}
@media(max-width:480px){
	.owl-controls{ bottom:0rem}
}
.disclaimerDetl h3 span:after{content:none;}
<?php if ($_SERVER['REQUEST_URI']=="/ulip-plans/kotak-e-invest" ||  $_SERVER['REQUEST_URI']=="/ulip-plans/kotak-tulip" )  { ?>
.custom-icon.mobilechat{display:none}
<?php } ?>
</style>

<script>
let pageName = "<?php echo $planMainInfo->title?>";
		lmSMTObj.page("page",
    {
       /* "pageProps":{
            "name": <?php echo $planMainInfo->title?>
        } */
		"title":pageName
    },
        function () {}
    );
</script>
<!-- Section Start -->
<section> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
		<?php echo $this->breadcrumb->output();?>
      </ul>
    </div>
  </article>
  <!-- breadcrumb End --> 
  
  <!-- midWrapper Start -->
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1><?php echo isset($planMainInfo->title) ? $planMainInfo->title : '' ?></h1>
			
		                               <div class="dd-btn-flex blog-detail">
								 
		</div>
       
		 <?php 
		if(isset($planMainInfo->plan_buy_online_url) && $planMainInfo->plan_buy_online_url != '') { ?>
      <!-- midWrapper Start -->
        <?php
          //GA code Variables
          $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' buy online' : '';
          $labelGA =  'buy online';
          
          //GA code Variables
          ?>
          <a rel="follow" href="<?=$planMainInfo->plan_buy_online_url;?>" target="_blank" class="redBtn" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});"><?=$planMainInfo->plan_buy_online_title?></a>

                  
  <?php  }  else {  ?>
  <a rel="follow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=productpage" target="_blank" class="redBtn">Buy Online</a>
  <?php  }    ?>
  
<?php //echo "testing".$planMainInfo->title?>		
        <?php echo isset($planMainInfo->plan_description) ? $planMainInfo->plan_description : '' ?>
      </div>          
	  <?php if(sizeof($planHowItWorksInfo) > 0) { ?>
      <!-- How it works start -->
      <div class="howWorksWrap">
      	<h2>How it works</h2>        
        <ul class="howWorksUL">
			<?php foreach($planHowItWorksInfo as $detail) { ?>
        	<li>
				<?php if(isset($detail->image) && $detail->image != '') { ?>
            	<img data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->image) ?>" class="img01 lazy" alt="insurence plan" />
				<?php } ?>
                <?php echo isset($detail->description) ? $detail->description : '' ?>            
            </li>
        	<?php } ?>
        </ul>
      </div>
      <!-- How it works end -->
	  <?php } ?>
      
	  <?php if(sizeof($planKeyFeaturesAndBenefits) > 0) { ?>
      <div class="boxWrap">
		<!--   <h2>Key features</h2>-->
		<?php if($planMainInfo->title!="Kotak Fortune Maximiser"){?>
		<h2>Key Features</h2>
		<?php } else {?><h2>Key Features</h2><?php }?>
        <!--Carousel Start -->
        <ul class="innerUL owlCarousel">
		<?php foreach($planKeyFeaturesAndBenefits as $detail) { ?>
          <li>
			<?php if(isset($detail->image) && $detail->image != '') { ?>
            <div class="img"><img class="lazy" data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->image) ?>" alt="<?php echo isset($detail->title) ? $detail->title : '' ?>"></div>
			<?php } ?>
			<h4><?php echo isset($detail->title) ? $detail->title : '' ?></h4> 
            <p class="discp"><?php echo isset($detail->description) ? $detail->description : '' ?></p> 
          </li>
		<?php } ?>
        </ul>
        <!--Carousel End --> 
      </div>
	  <?php } ?>   

		<?php if($planAdditionalBenefits) { ?>
      <div class="boxWrap">
		<!--   <h2>Key features</h2>-->
		<?php if($planMainInfo->title!="Kotak Fortune Maximiser"){?>
		<h2>Additional Benefits</h2>
		<?php } else {?><h2>Additional Benefits</h2><?php }?>
        <!--Carousel Start -->
        <ul class="innerUL owlCarousel">
		<?php foreach($planAdditionalBenefits as $detail) { ?>
          <li>
			<?php if(isset($detail->benefit_image) && $detail->benefit_image != '') { ?>
            <div class="img"><img class="lazy" data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->benefit_image) ?>" alt="<?php echo isset($detail->benefit_title) ? $detail->benefit_title : '' ?>"></div>
			<?php } ?>
			<h4><?php echo isset($detail->benefit_title) ? $detail->benefit_title : '' ?></h4> 
            <p class="discp"><?php echo isset($detail->benefit_description) ? $detail->benefit_description : '' ?></p> 
          </li>
		<?php } ?>
        </ul>
        <!--Carousel End --> 
      </div>
	  <?php } ?>  

	  
      <?php if(sizeof($planEligibilityInfo) > 0) { ?>
      <div class="eligibility">
		<div class="topDesc">  
			<h2>Eligibility</h2>
      <?php if(isset($planMainInfo->plan_eligibility_title) && $planMainInfo->plan_eligibility_title != "") { ?>
			<p><?php echo isset($planMainInfo->plan_eligibility_title) ? $planMainInfo->plan_eligibility_title : '' ?></p>
      <?php } ?>
		</div>
        <ul class="eligibilityUL eligibilityUL01">
			<?php 
				$count = 0;
				foreach($planEligibilityInfo as $detail) {
					$count++;
			?>
			  <li <?php echo ($count % 2 == 1) ? '' : 'class="sLi"' ?>>
			  <?php if(isset($detail->image) && $detail->image != '') { ?>
			  <img data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->image) ?>" alt="Eligibility" class="imgIcon lazy">
			  <?php } ?>
				<div class="desc">
				  <?php echo isset($detail->description) ? $detail->description : '' ?>  
				</div>
			  </li>
			<?php } ?>
        </ul>
      </div>
	  <?php } ?>
    </div>
  </article>
  <!-- midWrapper End -->   
	<?php if(sizeof($planAdditionalProtectionRidersInfo) > 0) { ?>
	<!-- midWrapper Start -->
  <article class="ridersW">
    <div class="midWrapper">
      <div class="boxWrap boxWrapRider">
		<div class="topDesc">
        <h2>Additional Protection with Optional Riders</h2>
		</div>
        <!--Carousel Start -->
        <ul class="innerUL owlCarousel">
			<?php foreach($planAdditionalProtectionRidersInfo as $detail) { ?>
          <li>
			<?php if(isset($detail->image) && $detail->image != '') { ?>
            <div class="img"><img class="lazy" alt="Additional Protection with Optional Riders" data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->image) ?>"></div>
			<?php } ?>
            <h4><?php echo isset($detail->title) ? $detail->title : '' ?></h4>
            <p><?php echo isset($detail->description) ? $detail->description : '' ?></p>
            <?php if(isset($detail->pdf_file) && $detail->pdf_file != '') { ?>
              <?php
                //GA code Variables
                $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' download' : '';
                $labelGA =  isset($detail->title) ? 'download|' . strtolower($detail->title) : '';
                //GA code Variables
              ?>
            <a target="_blank" href="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->pdf_file) ?>" class="pdfIcon" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Download</a>
            <?php } ?>
          </li>
			<?php } ?>
        </ul>
        <!--Carousel End --> 
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  <?php } ?>
  
  <?php if(isset($planMainInfo->plan_calculate_premium_title) && $planMainInfo->plan_calculate_premium_title != '' && isset($planMainInfo->plan_calculate_premium_url) && $planMainInfo->plan_calculate_premium_url != '') { ?>
  <!-- midWrapper Start -->
  <article class="calcPremium">
    <div class="midWrapper">
      <div class="topDesc">
        <img class="lazy" data-src="<?php echo base_url()?>assets/images/calculate-premium-icon.png"  alt="Calculate premium">
        <p><?php echo isset($planMainInfo->plan_calculate_premium_title) ? $planMainInfo->plan_calculate_premium_title : '' ?></p>
        <?php
          //GA code Variables
          $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' calculate premium' : '';
          $labelGA =  'calculate premium';
          //GA code Variables
        ?>
        <a rel="follow" href="<?php echo isset($planMainInfo->plan_calculate_premium_url) ? $planMainInfo->plan_calculate_premium_url : '' ?>" target="_blank" class="redBtn redBtn01" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Calculate premium</a> 
      </div>
    </div>
  </article>
  <!-- midWrapper End -->
  <?php } ?>  
  <?php if(sizeof($planDownloadsInfo) > 0) { ?>
  <!-- midWrapper Start -->
  <article class="download">
    <div class="midWrapper">
      <h2>Downloads</h2>
      <p><?php echo isset($planMainInfo->plan_downloads_title) ? $planMainInfo->plan_downloads_title : '' ?></p>
      <ul class="downloadUL">
		<?php foreach($planDownloadsInfo as $detail) { ?>
		<?php if(isset($detail->file) && $detail->file != '') { ?>
             <?php
                //GA code Variables
                $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' brochure' : '';
                $labelGA =  'download brochure';
                //GA code Variables
              ?>
            <li><a target="_blank" href="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->file) ?>" class="<?php echo (isset($detail->filetype) && $detail->filetype == 'pdf') ? 'pdfIcon' : 'formIcon' ?>" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});"><span><?php echo isset($detail->title) ? $detail->title : '' ?></span></a></li>
		<?php } ?>
		<?php } ?>
      </ul>
    </div>
  </article>
  <!-- midWrapper End -->
  <?php } ?>  
  <?php if ($mainPlanType == 'Online Plans') { ?>
    <?php if(isset($planMainInfo->plan_buy_online_title) && $planMainInfo->plan_buy_online_title != '' && isset($planMainInfo->plan_buy_online_url) && $planMainInfo->plan_buy_online_url != '') { ?>
    <!-- midWrapper Start -->
    <article class="calcPremium">
      <div class="midWrapper">
        <div class="topDesc">
          <p><?php echo isset($planMainInfo->plan_buy_online_title) ? $planMainInfo->plan_buy_online_title : '' ?></p>
          <?php
            //GA code Variables
            $eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' buy online' : '';
            $labelGA =  'buy online2';
            //GA code Variables
          ?>
          <a href="<?php echo isset($planMainInfo->plan_buy_online_url) ? $planMainInfo->plan_buy_online_url : '' ?>" target="_blank" class="redBtn" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Buy Online</a> 
        </div>
      </div>
       <img src="<?php echo base_url()?>assets/images/premCal_img.png"  alt="Buy Online">
    </article>
    <!-- midWrapper End -->
    <?php } ?>
  <?php } ?>    
   <!---------------accordin starts here-------------->
  <?php 
  
  $page_title="";  
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  
  $temp=array();
  $temp=explode("/",$actual_link);
  $page_title=$temp[2];
      
          if($page_title=="kotak-health-shield")
          { ?>
  <article class="faqsWrap" id="faqsWrapDiv">
    <div class="midWrapper">
    <h2 class="h2bold">FAQs</h2>
      <!-- Accord Start -->
        <ul class="accordUL" id="faqs-div">
        <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?">
		<h3 class=""><span>Is a medical test compulsory for Kotak Health Shield?</span></h3>
		<div class="accordDesc" style="display: none;">
			<p>Since coverage for pre-existing diseases does not apply to Kotak Health Shield, a declaration of health can suffice to buy the plan. However, this critical illness insurance plan provides payouts on the first diagnosis of the diseases covered under the policy. Hence, to claim the insured sum, you must submit a medical test report confirming the diagnosis. </p>
		</div>
		</li>		
		<li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?">
		<h3 class=""><span>What is the Accidental Death benefit in Kotak Health Shield?</span></h3>
		<div class="accordDesc" style="display: none;">
		<p>The Accidental Death benefit provides a lump-sum payout to your nominee in case of an unfortunate fatality within 120 days of an accident. An accident here is defined as an unexpected and unintentional incident caused by an external, violent and visible agent. </p></div>
		</li>
    <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?">
	  	<h3 class=""><span>What are the major exclusions of the Kotak Health Shield?</span></h3>
        <div class="accordDesc" style="display: none;">
        <p>Under this medical policy, the insurer is not liable to provide payouts if the health claim arises due to:</p>
        <ul class="bullet">
        <li>Active participation in warfare, civil unrests, riots, or unlawful acts including terrorism, kidnapping, assault, and other violent activities</li>
        <li>Intentional injury</li>
        <li>Intake of narcotics or drugs without a medical practitioner’s prescription  </li>
        </ul>
        <p>The conditions mentioned above also apply to claims under the Personal Accident Shield cover. Also, such claims will not be valid if the death or disability results from:</p>
        <ul class="bullet">
        <li>Hazardous sports or hobbies</li>
        <li>Flying in an aircraft other than as a passenger on a licensed airline</li>
        <li>Suicide or self-inflicted injury</li>
        <li>Nuclear/ radioactive/ ionising radiation</li>
        <li>Disease due to infection by germs</li>
        </ul>
        </div>
		</li>
    <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?">
		<h3 class=""><span>Does Kotak Health Shield have cashless hospitalisation?</span></h3>
		<div class="accordDesc" style="display: none;">
			<p>Health plan insurance policies provide cashless treatment only on admission at hospitals having tie-ups with the insurance company.  Kotak Health Shield does not limit you to undergo treatment only at such network hospitals. Instead, it provides a lump-sum payout upfront on the detection of diseases covered under the plan. You can use this sum to undergo treatment at any medical care centre of your choice.</p>
		</div>
		</li>
    <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?">
		<h3 class=""><span>Where can I buy the Kotak Health Shield Plan?</span></h3>
		<div class="accordDesc" style="display: none;">
			<p>You can contact a Life Advisor for Kotak Health Shield health insurance online by filling up the request form at the official website. You can also call on the toll-free number 1800 209 8800 between 8:00 am and 10:00 pm to get help with buying the plan.</p>
		</div>
		</li>

    <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?">
		<h3 class=""><span>What is a Waiver of Premium?</span></h3>
		<div class="accordDesc" style="display: none;">
			<p>Ill health can result in income loss, making the premiums for your health insurance policy a burden. Kotak Health Shield dispenses with the need for paying premiums to keep your health cover in-force after the diagnosis of the listed medical conditions. With the optional premium waiver benefit, after raising a valid claim, you need not pay the premiums for the next three years to keep your coverage active.</p>
		</div>
		</li>
    <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?">
		<h3 class=""><span>Does the Kotak Health Shield Plan offer tax benefits?</span></h3>
		<div class="accordDesc" style="display: none;">
			<p>You can claim deductions from your taxable income for premiums you pay for your Kotak Health Shield health policy. The deductions are subject to the conditions under Section 80D of the Income Tax Act, 1961. The payouts are also tax-exempt.</p>
		</div>
		</li>
    <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?">
		<h3 class=""><span>What are the documents required to buy Kotak Health Shield Plan?</span></h3>
		<div class="accordDesc" style="display: none;">
			<p>You need the following documents to get financial cover against critical illnesses with the Kotak Health Shield Plan:</p>
      <ul class="bullet">
      <li><b>Identity proof:</b> PAN Card/ Passport/ Driving License/ Aadhaar Card/ Voter ID</li>
      <li><b>Address proof: </b>Aadhaar Card/ Passport/ Driving License/ Voter ID/ Ration Card</li>
      <li><b>Date of Birth proof:</b> Birth Certificate/ PAN Card/ Aadhaar Card/ Voter Card/ Passport/ Driving License</li>
      <li><b>Passport-sized photo</b></li>
</li>
      </ul>
		</div>
		</li>

        </ul>
      <!-- Accord End -->       
      <div class="noRecord" style="display: none;"></div>      
    </div>
  </article>
  <?php } ?>
  <!---------------accordin starts here-------------->
  <?php 
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
  ?> 
  <!-- midWrapper Start-->
  <?php if(isset($planMainInfo->plan_disclaimer) && $planMainInfo->plan_disclaimer != '') { ?>
  <article class="disclaimer">
    <div class="midWrapper">
      <?php
        //GA code Variables
        $eventGA = 'event read about';
        $labelGA =  'read about tab';
        //GA code Variables
      ?>
      <h3 onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});"><span>Read about Tax benefits & Plan Disclaimer</span></h3>
      <div class="disclaimerDetl" style="display:block !important;">
	  <?php echo  str_replace("Kotak Mahindra Old Mutual Life Insurance Ltd.","Kotak Mahindra Life Insurance Company Ltd.",$planMainInfo->plan_disclaimer); ?>
        <?php //echo $planMainInfo->plan_disclaimer; ?>
      </div>	 	  
    </div>
  </article>
  <?php } ?>	 
  <!-- midWrapper End --> 
  <?php if(sizeof($similarPlans) > 0) { ?>
  <!-- midWrapper Start-->
  <article class="similarPlan">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Similar plans</h2>
      </div>
      <ul class="planUL similerPlanCarousel">
		<?php foreach($similarPlans as $detail) { ?>
        <li>		
			<?php if(isset($detail->plan_image) && $detail->plan_image != '') { ?>			
			<img alt="Icon for employee benefit" title="Icon for employee benefit" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_image) ?>">
      
			<?php }else{?>
        <img alt="Icon for employee benefit" title="Icon for employee benefit" src="assets/images/uploads/insurance-plans/benifits-other-advantages.png">

       <?php  }?>
			<h3><?php echo isset($detail->title) ? $detail->title : '' ?></h3>
			<p><?php echo isset($detail->plan_description) ? $detail->plan_description : '' ?></p>
      <?php
        //GA code Variables
        $eventGA = 'event similar plans';
        $labelGA =  isset($detail->title) ? 'similar plan|'.strtolower($detail->title) : '';
        //GA code Variables
      ?>
			<a href="<?php echo isset($detail->url_title) ? base_url('ulip-plans/'.$detail->url_title) : '' ?>" class="links" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know more</a>

    
  
		</li>
    <?php } ?>

      </ul>
    </div>
  </article>
  <!-- midWrapper End -->
  <?php } ?>
  
</section>
<!-- Section End -->
      
<?php	if($_SERVER['REQUEST_URI']=="/ulip-plans/kotak-e-invest")  {?>
  <div class="reddiv">
    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=bottom_banner" class="buysticky">Start Growing Your Wealth Now</a>
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
                  <p><a class="downloadBrochure" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_E_Invest_-_Brochure.pdf"><img src="/assets/images/stickybuttonimg/Download.svg" alt="Download" /> Download Brochure</a> </p>
                </div>
              </div>
              <div class="dflexP">
                
                <div class="productPage-cta1" style="text-align: center;">
                  <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=bottom_banner" id="stickyTitleProduct-url" href="" style="margin: 5px 0;">Start Growing Your Wealth Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php } ?>

          
<?php	if($_SERVER['REQUEST_URI']=="/ulip-plans/kotak-tulip")  {?>
  <div class="reddiv">
    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=bottom_banner" class="buysticky">Build Wealth With Confidence</a>
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
                  <p><a class="downloadBrochure" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_T.U__.L__.I__.P_Brochure_19__.12__.2023_KL3__.pdf"><img src="/assets/images/stickybuttonimg/Download.svg" alt="Download" /> Download Brochure</a> </p>
                </div>
              </div>
              <div class="dflexP">
                
                <div class="productPage-cta1" style="text-align: center;">
                  <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=bottom_banner" id="stickyTitleProduct-url" href="" style="margin: 5px 0;">Build Wealth With Confidence</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php } ?>

<script>
<?php if (isset($plan_url_schema)){?>

 
<?php
echo $plan_url_schema;?>
 
 <?php } ?>
 </script>