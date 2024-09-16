<!-- Section Start -->
<section> 
  <article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  
  <!-- midWrapper Start -->
  <article class="">
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Pay My Premium</h1>
		<!-- midWrapper Start -->
                    <a href="https://care.kotaklifeinsurance.com/prelogin"  rel="nofollow" target="_blank" class="redBtn" onclick="">Pay Online</a> 
					<p>If you don't have an insurance, click below to explore or calculate premium.</p>
                <div class="centerDiv">  
                    <a data-action="click" data-label="Know More" data-category="pay-my-premium" data-event="event button" href="<?=base_url()?>online-plans/online-term-insurance-plans/" class="redBtn ga_banner_track">Know More</a>            
                    <a rel="nofollow" data-action="click" data-label="Calculate Premium" data-category="pay-my-premium" data-event="event button" href="<?=base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=calculate_premium&utm_content=pay-premium&lead_group=kotak_organic" class="link ga_banner_track" target="_blank">Calculate Premium</a>
                </div>
        <!-- midWrapper End -->
        <p>Kotak Life Insurance simplifies your premium payment process to ensure that your payments are on time. Choose the most convenient payment option for you and pay with a few clicks.</p>
        <p>Choose from the following options:</p>
        <a href="<?=base_url()?>how-do-i/" class="kliBack"><span>Back</span></a> </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- FAQs Start -->
  <article class="faqsWrap faqsWrap01 ">
    <div class="midWrapper"> 
      <!-- Accord Start -->
      <ul class="accordUL">
		<?php if($payPremium){ foreach($payPremium as $dt){ ?>
		<li>
          <h3 onClick="dataLayer.push({'event':'event payment options', 'category':'<?php echo $gaCat;?>', 'action':'pay my premium','label':'pay|<?php echo $dt->paymentMode ;?> '});"><span><?php echo $dt->paymentMode ;?></span></h3>
          <div class="accordDesc">
            <?php echo $dt->paymentInfo ;?>
          </div>
        </li>		
		<?php }} ?>
      </ul>
      
      <!-- Accord End -->
      
      <h2>Pay Premium FAQs</h2>
	  <div class="headDesc">
	  <p>Get answers to all your Premium Payment related questions right here.</p>
	  </div>
      <!-- Accord Start -->
      <ul class="accordUL" id="payMyPremiumFaqs">
		<?php //if($payPremiumFAQ){ foreach($payPremiumFAQ as $dt){ ?>
		<!--<li>
          <h3><span><?php //echo $dt->faqQuestion;?></span></h3>
          <div class="accordDesc">
            <?php //echo $dt->faqAnswer;?>
          </div>
        </li>-->
		<?php //}} ?>
		
      </ul>
      <!-- Accord End --> 
      <a onClick="dataLayer.push({'event':'event load faq', 'category':'<?php echo $gaCat;?>', 'action':'pay my premium','label':'load more pay premium faqs'});" href="javascript:;" class="link" alt="pmpFAQ"  id="load_more">Load more Pay premium FAQs</a> </div>
  </article>
  <!-- FAQs End --> 
  
  <!-- midWrapper Start -->
  <article class="buyPlan buyPlan01">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Need help for paying premium?</h2>
      </div>
      <div class="tollFree ">
        <div class="needBox">
          <h3 class="callon">Call on toll free number <a href="javascript:;">1800 209 8800</a><span>(8:00 am to 10:00pm)</span></h3>
          <p>Call the toll free number for help regarding premium payments.</p>
        </div>
        <div class="needBox">
            <h3 class="whatsapp-chat">Get details of your policy on WhatsAp</h3>
            <p>Send a "Hi" to 93210 03007, from your registered mobile number.<br></p>
        </div>
		<div class="needBox">
            <h3 class="customer_service_contact"> Get in touch with our Customer Care team</h3>
            <p><a class="customer_service_btn customer_service"  href="https://care.kotaklifeinsurance.com/webform" target="_blank">Click Here</a></p>
        </div>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
</section>
<!-- Section End --> 
<script>

var formType = "Pay My Premium";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataFaqs = <?php echo json_encode($payPremiumFAQ);?>;
var jsonDataAppForm = "";
var form_flag="pmpFAQ";

var annualFundPer = "";
var fundPerformance = "";
</script>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script> 

	   $(document).on("click", ".active", function(){
        setTimeout(function() {
        $('.active').removeClass();
        $('.accordDesc').hide();
                   
        }, 500);
  
    }); 
</script>