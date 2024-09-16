<style>
.buyPlan {
    padding: 0px 0px 50px 0;
}
.buyPlan .tollFree .needBox:nth-child(2){
    border-right: 1px solid #bfc1c1;
    padding-left: 0;
} 
.buyPlan p {
    width: 100%;
    font-size: 1.6em;
    padding-left: 43px;
    box-sizing: border-box;
}

.buyPlan h3 {
    position: relative;
    width: 100%;
    float: left;
    font-weight: 400;
    color: #5e6061;
    padding-left: 50px;
    margin-bottom: 20px;
    box-sizing: border-box;
    text-align: center;
}
    .buyPlan01 h3 h3 {
    margin-bottom: 0;
    font-size: 2.2em;
    margin-bottom: 15px;
}
    .buyPlan h3:after{content: none;}
    .needBox h3{text-align: left;}
    .needBox{width:33% !important;} /*text-align: center;*/
.touchpoints .tollFree {
    width: 100% !important;
    display: flex;
}
.buyPlan01 .tollFree {
    float: none;
    margin: 30px auto 25px auto;
    padding-left: 0;
    width: 100%;
   
}
    .linkWrap{text-align: center;}
    .linkWrap .link{display: inline-block; float: none; margin-bottom: 20px;}
    @media only screen and (max-width: 480px){
        .linkWrap{width: 100%; margin: 0 !important;}
        .linkWrap .link{width: 100%; margin-bottom: 15px !important;}
        .buyPlan h3,  .buyPlan p{}
        .buyPlan01 .tollFree{width: 100% !important; margin-top: 0;  display: inline-block;}
    }
  
  /* ashwini reddy new css start */
.bread_section{background: #e9e8e9;}
.group_claim{background: white !important;}
.claim_card {
    display: flex;
    align-items: flex-start;
    flex-wrap: wrap;
    gap: 15px;
    margin: 15px 0 0;
    height: 100%;
    justify-content: center;
}
.claim-col-4:hover{box-shadow: 0 1px 30px -2px #c1c1c1 !important;
    -webkit-box-shadow: 0 1px 30px -2px #c1c1c1;}
    .click a{}
 .claim-col-4:hover .file{color: #da251c; font-weight:600;}
.claim-col-4 {
  background: white;
    border-radius: 16px;
    padding: 14px 37px;
    margin: 0 8px 0 8px;
    min-height: 292px;
  
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    /* max-width: 654px; */
    width: 310px !important;
    margin: 15px 0 0;

}
.track_div{width: 636px !important;}
.navWrapper .newmidwrap{padding: 0 0 !important;}
.claim-file{display: flex; justify-content: center;margin-top: 13px;}
.our{font-size: 20px; color: #000000;font-weight: 400px;text-align: left; font-weight: 400;   font-family: 'Lato-Regular';}
.email{font-size: 17px; color: #000000;font-weight: 400; font-family: 'Lato-Bold';}
.our_div{display: flex; padding-top: 23px;}
 .email-div{text-align: start; padding: 0 0 0 16px;}
.anchor{margin: 0px 0 0 0;font-size: 16px; text-decoration: underline;  color: #0022FF; display: inline-block;}
 .min_div{min-height: 245px;}
.file{font-size: 17px; font-weight: 400; color: black; font-family: 'Lato-Regular';    margin-right: 6px;}
.email-icon{width: 50px;}
   
.watsup-email{display: flex;}
    .you_can{width: 100%; max-width: 211px; font-size: 16px;padding: 0px 17px 6px 0; font-weight: 400;color: #000000;font-family: 'Lato-Regular';}
    .number{font-weight: bold; font-size: 17px; color: #000000;}
    .email-border{border-right: 2px solid #AFAFAF ; height: 82px;}
    .click{font-size: 16px; font-weight: 400; color: #000000; width: 100%;max-width: 150px;}
    .typingperson{height: 199px; width: 218px;  object-fit: contain;}
    .claim_sprite{background-position: -114px -247px; background-size: 114px; height: 40px; width: 50px;}
    .claimsprite-img{ background-image: url(assets/images/fileclaimsprite.webp); }
    .email_sprite{background-position: -169px -286px; background-size: 227px; height: 44px; width: 50px;}
    .watsup_sprite{background-position:5px -279px;background-size: 227px; height: 44px; width: 50px;}
    .kypa_sprite{background-position: -94px -360px; background-size: 165px; height: 44px; width: 74px;}
    .newwatsup-icon{width: 50px; height: 50px; margin-top: -5px;}
    


    @media only screen and (max-width: 1366px){
      .claim-col-4{  padding: 14px 44px; width: 310px ;}
    }
     @media only screen and (max-width: 480px){
      .text-center{align-self: center;}
      .claim-col-4{width: 100% !important;}
      .you_can{font-size: 10px;}
      .click{font-size: 10px;}
     .watsup_sprite { background-position: 6px -438px; background-size: 164px;height: 36px;  width: 61px;}
     .kypa_sprite { background-position: -116px -338px;
    background-size: 155px;
    width: 39px;}
     .newwatsup-icon {
    width: 36px !important;
    height: 36px !important;}
         .track_div, .our_div{width: 100%;}
         .watsup-email{display: block;}
         .email-border{border-right: 0; border-bottom: 1px solid #000; margin-bottom: 2rem; padding-bottom: 2rem; height: auto;}
    } 
 

 
    
    /* ashwini reddy new css end */


</style>
 <section class="bread_section"> 
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
        <li><a onClick="dataLayer.push({'event':'event claim tabs', 'category':'<?php echo $gaCat;?>', 'action':'file a claim','label':'tab|individual claim'});" href="how-do-i/individual-claim" target="_blank">Individual claim</a></li>
        <li><a onClick="dataLayer.push({'event':'event claim tabs', 'category':'<?php echo $gaCat;?>', 'action':'file a claim','label':'tab|group claim'});" href="https://customer.kotaklifeinsurance.com/ocm/cp_trackclaimgroup" class="selected group_claim">group claim</a></li>
      </ul>
  </div>
  
  <article class="navWrapper">
    <div class="midWrapper newmidwrap"> 
      
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
   
                    


<!--<link href="/OCM/Content/css/cp_home.css" rel="stylesheet">-->
<div class="linkWrap" >
<div class="claim_card">
    <div class="claim-col-4">
      <div class="text-center">
           <a href="https://www.kotaklife.com/claims/#/file-a-claim" class="flie_claim">
           
           
           <img src="<?=base_url()?>assets/images/file-a-claim/mask_group_7.webp" alt="">
           <div class="claim-file">
            <p class="file">FILE CLAIM</p>
            <!-- <img src="<?=base_url()?>assets/images/file-a-claim/mask_group_7.webp" style="width:20px;height:20px" alt=""> -->
             <div class="benefitsOfRetirement-img claim_sprite claimsprite-img"></div> 
           </div>
          
           </a>
      </div>
    </div>
     <div class="claim-col-4">
      <div  class="text-center">
          <a href="https://www.kotaklife.com/claims/#/track-update-a-claim" class="flie_claim">
          
          <img class="typingperson" src="<?=base_url()?>assets/images/file-a-claim/group_28011.webp" alt="">
          <div class="claim-file">
           <p class="file">UPDATE CLAIM</p>
          <!-- <img src="<?=base_url()?>assets/images/file-a-claim/mask_group_7.webp" style="width:20px;height:20px" alt=""> -->
          <div class="benefitsOfRetirement-img claim_sprite claimsprite-img"></div> 
           </div>
          </a>
      </div>
     </div>
       <div class="claim-col-4">
        <div   class="text-center">
            <a href="https://www.kotaklife.com/claims/#/track-update-a-claim" class="">
             <img src="<?=base_url()?>assets/images/file-a-claim/group_28020.webp" alt="">
             <div class="claim-file">
                <p class="file">TRACK CLAIM</p>
               <!-- <img src="<?=base_url()?>assets/images/file-a-claim/mask_group_7.webp" style="width:20px;height:20px" alt=""> -->
               <div class="benefitsOfRetirement-img claim_sprite claimsprite-img"></div> 
             </div>
            
             </a>
            </div>
       </div>
      <div class="claim-col-4 min_div">
        <div  class="text-center">
        <a href="https://www.kotaklife.com/claims/#/track-update-a-claim" class="">
         <p class="our">Our touchpoints</p>
         <div class="our_div">
         <!-- <img class="email-icon" src="<?=base_url()?>assets/images/file-a-claim/group_28020.webp" alt=""> -->
         <div class="benefitsOfRetirement-img email_sprite claimsprite-img"></div> 
         <div class=" email-div">
          <p class="email">Email</p>
          <a href="mailto:kli.claimsmitra@kotak.com" class="anchor">kli.claimsmitra@kotak.com</a>
         </div>
         </div>
        
         </a>
        </div>
      </div>
      <div class="claim-col-4 min_div track_div">
        <div class="text-center">
       
      
      <p class="our">Track your claim status through</p>
      <div class="watsup-email">
      <div class="our_div">
      <!-- <img class="email-icon" src="<?=base_url()?>assets/images/file-a-claim/group_28020.webp" alt=""> -->
      <!-- <div class="benefitsOfRetirement-img watsup_sprite claimsprite-img what-img"></div>  -->
      <img class="newwatsup-icon" src="<?=base_url()?>assets/images/file-a-claim/newwatsupicon.png" alt="">
      
      <div class=" email-div  email-border">
      <a class="" target="_blank" href="https://api.whatsapp.com/send/?phone=919321003007&text=Hi;" class="">
       <p class="email">WhatsApp</p>
        <p class="you_can"> Send a “Hi” to our WhatsApp number <span class="anchor">9321003007</span></p>
         </a>
      </div>
           </div>
      <div class="our_div">
      <!-- <img class="email-icon" src="<?=base_url()?>assets/images/file-a-claim/group_28020.webp" alt=""> -->
      <div class="benefitsOfRetirement-img kypa_sprite claimsprite-img"></div> 
      
      <div class=" email-div">
       <p class="email">Kaya Chat Bot</p>
       <p class="click">Click on <a class="anchor" href="https://kli.in/KAYA"> https://kli.in/KAYA</a></p>
      </div>
     
      </div>
      </div>
      
     
     
   
    
        </div>
      </div>
      
   
    </div>
</div>
<!-- <div>
    <article class="buyPlan buyPlan01 touchpoints">
        <div class="midWrapper pb-0 pt-0">
            <br>
            <h3>Our Touchpoints:</h3>
        </div>
        <div class="tollFree">
        <div class="needBox">
            <h3>WhatsApp</h3>
                <p> You can now track your claims status :</p><p> Send a “Hi” to our WhatsApp number <a href="https://api.whatsapp.com/send/?phone=919321003007&text=Hi;"> 9321003007</a></p>
                

          </div>
          <div class="needBox">
            <h3>Kaya Chat Bot</h3>
                <p>Click on Let’s Chat icon on our website – </p>
                  <p><a href="https://kli.in/">https://kli.in/</a></p>
                

          </div>
          
            <div class="needBox">
                <h3>Email</h3>
                <p>kli.claimsmitra@kotak.com</p>
            </div>

        </div>
    </article>
</div> -->
<!-- Book Claim Start -->
<div class="bookClaim">
    <div class="topDesc">
        <p>At Kotak Life Insurance, filing a claim is simple and hassle-free.</p>
    </div>    
</div>

       
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
