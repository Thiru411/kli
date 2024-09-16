<section> 
  <article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
	
  <!-- midWrapper Start -->
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>File a Claim</h1>
        <a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a></div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- Insurance Guide Start -->
  <div class="tabWrap">
      <ul class="fundTabUL fundTabUL01">
        <li><a onClick="dataLayer.push({'event':'event claim tabs', 'category':'<?php echo $gaCat;?>', 'action':'file a claim','label':'tab|individual claim'});" href="https://customer.kotaklifeinsurance.com/ocm" target="_blank">Individual claim</a></li>
        <li><a onClick="dataLayer.push({'event':'event claim tabs', 'category':'<?php echo $gaCat;?>', 'action':'file a claim','label':'tab|group claim'});" href="https://customer.kotaklifeinsurance.com/ocm/cp_trackclaimgroup" class="selected">group claim</a></li>
      </ul>
  </div>
  
  <article class="navWrapper">
    <div class="midWrapper"> 
      
      <!-- TAB Start -->
      <!--div class="claimWrapper">
        <p>Kotak Life Insurance ensures that your Group Claim is simplified to the core.</p>
        <div class="vidWrap">
        	<h3>View the video to know how it works.</h3>
            <div class="vidBox">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/F7ckOpNJSXg?rel=0&amp;autoplay=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
      </div-->
      <!-- TAB End --> 
      
      <!-- Other Navigation Start -->
      <ul class="reportUL landingUL01">
	  <?php if($list){ foreach($list as $dt){ ?>
        <li>
          <div class="reportBox"> <img src="<?php echo str_replace('{filedir_17}', base_url().'assets/images/uploads/how_do_i/', $dt->smallImg) ?>">
            <h3><?php echo $dt->claimType ;?></h3>
            <p><?php echo $dt->claimShortDesc ;?></p>
            <a onClick="dataLayer.push({'event':'event claim know more', 'category':'<?php echo $gaCat;?>', 'action':'file a claim','label':'know more|<?php echo $dt->claimType ;?>'});" href="<?php echo base_url()."how-do-i/file-claim/claims/".$dt->entry_id ;?>" class="link">Know more</a> </div>
        </li>
	  <?php }} ?>
        <!--<li>
          <div class="reportBox"> <img src="images/howdoi-img02.png">
            <h3>Critical Illness Claim</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <a href="javascript:;" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img src="images/howdoi-img01.png">
            <h3>Permanent Disability Claim</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <a href="javascript:;" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img src="images/howdoi-img02.png">
            <h3>Waiver of Premium Claim</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <a href="javascript:;" class="link">Know more</a> </div>
        </li>
        <li>
          <div class="reportBox"> <img src="images/howdoi-img01.png">
            <h3>Ill Health Claim</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <a href="javascript:;" class="link">Know more</a> </div>
        </li>-->
      </ul>
      <!-- Other Navigation End--> 
      
    </div>
  </article>
  
  <!-- Insurance Guide End --> 
  
  
  <!-- FAQs Start -->
  <article class="faqsWrap faqsWrap01">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Claim FAQs</h2>
      </div>
      <!-- Accord Start -->
      <ul class="accordUL" id="payMyPremiumFaqs">
	  
      </ul>
      <!-- Accord End --> 
      <a onClick="dataLayer.push({'event':'event load faq', 'category':'<?php echo $gaCat;?>', 'action':'file a claim','label':'load more pay premium faqs'});" href="javascript:;" class="link" alt="pmpFAQ"  id="load_more">Load more Pay premium FAQs</a> </div>
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
        <div class="needBox needBoxLast">
          <h3 class="mailus">OR Mail to <a  onClick="dataLayer.push({'event':'event need help email', 'category':'<?php echo $gaCat;?>', 'action':'file a claim','label':'email click'});" href="mailTo:kli.in/WECARE">kli.in/WECARE</a></h3>
          <p>Kindly mail us at the above email and we will respond to you at the earliest.</p>
        </div>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
</section>
<!-- Section End --> 
<script>
var formType = "File a claim";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataFaqs = <?php echo json_encode($faqsQA);?>;
var jsonDataAppForm = "";
var form_flag="pmpFAQ";

var annualFundPer = "";
var fundPerformance = "";
</script>
