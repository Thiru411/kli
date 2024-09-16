<link rel="stylesheet" href="<?=base_url()?>assets/css/custom_tabs.css">

<style>

.d--flex{display: flex;}
.splash-close img{height: 20px;opacity: 0.2;cursor: pointer;transition: 0.6s;}
.splash-close img:hover{opacity: unset;transition: 0.6s;}
.splash-close{width: 30px;margin: 0 0 0 auto;}
.splash p{margin: 0;}
.splash-content{width: 65%; font-size:20px;margin: 0 auto;background-color: #fff;padding: 16px 18px;border-radius: 11px;margin-top: 201px;}
.overlay-black{position: absolute;top: 0;bottom: 0;left: 0;right: 0;background-color: rgba(0, 0, 0, 0.2);z-index: -1;}
#splash {
    position:fixed;
    top:0;z-index:10;
    left:0;
    bottom:0;
    width:100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, .5);
}
#splash a{
    color:red
}
@media screen and (max-width: 768px) {
  .splash{display: none;}
}

@media screen and (min-width: 768px) {
  .splash{display: block;}
} 
</style>

<style>
.w3-display-topright:hover{background-color: #fff !important;}
    .w3-display-topright{    height: 55px;
    width: 55px;
    font-size: 30px;
    padding: 5px 5px;
    background-color: #fff;
    border-radius: 50%;right: -24px;
    top: -24px;}
/*
#splash {
    position:fixed;
    top:0;z-index:10;
    left:0;
    bottom:0;
    width:100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, .5);
}
#splash p{
    width: 65%; font-size:20px;margin: 0 auto;
    background-color: #fff;
    padding: 16px 18px;
    border-radius: 11px;
    margin-top: 201px;
}
#splash a{
    color:red
}
@media screen and (max-width: 768px) {
  .splash{display: none;}
}

@media screen and (min-width: 768px) {
  .splash{display: block;}
}


*/</style><style type="text/css">
.pt--0{padding-top:0  ! important;}
  .w3-bar{border-bottom: 2px solid #f2f2f2;}
  .w3-bar .w3-button{color: #fff !important;font-size: 18px;}
  .w3-bar .w3-red{background-color: #fff !important; color: #000 !important;border-bottom: 2px solid #000;font-weight: 600;}
  .w3-red, .w3-hover-red:hover{color: #000 !important;background-color: #fff !important;}
  .w3-button:hover{background-color: #fff!important;}
  .btn-cls {background-color: #da251c;
    border: 0.1rem solid #da251c;
    border-radius: .4rem;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 1.1rem;
    font-weight: 700;
    height: 3.8rem;
    letter-spacing: .1rem;
    line-height: 3.8rem;
    padding: 0 3.0rem;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    white-space: nowrap;
    }
    .btn-cls : hover {background-color: #da251c;
    border: 0.1rem solid #da251c;
    border-radius: .4rem;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 1.1rem;
    font-weight: 700;
    height: 3.8rem;
    letter-spacing: .1rem;
    line-height: 3.8rem;
    padding: 0 3.0rem;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    white-space: nowrap;
    }
</style>
<!-- Splash Message starts -->
<div id="splash" class="splash d--flex">
        <div class="overlay-black"></div>
        <div class="splash-content">
            <div class="splash-close">
                <img alt="Close buttom - Splash" title="Close buttom - Splash" src="<?php echo base_url() ?>assets/images/splash-close.png">
            </div>
            <p style="font-size:0.75em">
            In light of COVID-19, we're operating with a limited team and it may take longer than usual to address your requests. Please note, a few of our branches are temporarily closed for your safety. You can view the  list of open branches <a href="<?=base_url()?>/pdf/KotakLifeBranchList20thSep2021.pdf">here</a>. Kindly call your local branch to check their timings before visiting. <br> We encourage you to use our self-assistance IVR at <a href="tel:18002098800"> 1800 209 8800</a>, our Online Policy Manager <a href="https://care.kotaklifeinsurance.com">https://care.kotaklifeinsurance.com</a>, or our <a>web chat services</a> (bottom right corner on the home page) from the safety and comfort of your home.<br><!--In case of you still wish to speak to an customer care representative, you can call on our toll-free number  <a href="tel:18002098800">1800 209 8800</a>. (operational between 9am to 7pm from Monday to Saturday only).--> If you're a Life Advisor and wish to speak to someone for servicing, kindly reach out to Jignesh Upadhyay on <a href="tel:+919819344269">9819344269</a><!--<a href="">Your Kotak Life Premium Certificate for tax filing is ready for download.</a>-->
            </p>
        </div>
    </div>



<!-- Splash Message End -->
<section class="home"> 
<!-- Banner Start -->
  
  <article class="banner">
		<ul class="bannerUL" id="homeBanner">
		<li>
				<div class="vidDiv">
					<img src="images/desktop1260x400.jpg" alt="Kotak Life Insurance" class="posterImg" />
					 </div>
				<div class="slideBox overlay-none">
					<div class="midWrapper">
						<div class="bannerCont">
							  <div class="vCenterWrap">
								<h2 style="color:#da251c;">Telemedical  Consultation<span style="color:#08315F;"> and</span></h2> 
								<h2 style="color:#08315F"><span style="color:#da251c;">Hospitalisation Support</span> for COVID care on call</h2>
								<a data-action="teleconsultation" data-label="email" data-category="banner|existing customers" data-event="event banner" href="mailto:klicare@quantumcorphealth.com" class="link ga_banner_track btn-mobile-view">EMAIL</a>
								<a data-action="teleconsultation" data-label="call" data-category="banner|existing customers" data-event="event banner" href="tel:+912268488818" class="link ga_banner_track btn-mobile-view">CALL</a>
								<a data-action="teleconsultation" data-label="know more" data-category="banner|existing customers" data-event="event banner" href="<?=base_url()?>assets/images/uploads/why_kotak/Kotak_Life_-_Teleconsultation.pdf" class="link ga_banner_track btn-mobile-view">Know More</a> </div>
								</div>
						</div>  
					</div>
				</div>
			</li><li>
				<div class="vidDiv">
					<img src="<?=base_url()?>assets/quarntine/images/banner2.png" alt="Kotak Life Insurance" class="posterImg" /> <img alt="" class="mobileBannerImg" /> </div>
				<div class="slideBox">
					<div class="midWrapper">
						<div class="bannerCont">
							<div class="vCenterWrap">
								<h2>Our <strong>Online Policy Manager</strong> is available for you 24/7 to service your policy and pay your premiums</h2>
								<p>Due to the COVID-19 outbreak, we have temporarily closed some of our branches for your safety and well-being. Kindly call your local branch before visiting.</p>
								<a data-action="OPM" data-label="Log In" data-category="banner|new customers" data-event="event banner" href="care.kotaklifeinsurance.com" class="link ga_banner_track">Log In</a></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="vidDiv">					
					<img src="<?=base_url()?>assets/images/Claim-Banner-kerla.jpg" alt="Kotak Life Insurance" class="posterImg" /> <img src="<?=base_url()?>assets/images/Claim-Banner-kerla-mobile.jpg" alt="Kotak Life Insurance" class="mobileBannerImg" /> </div>
				<div class="slideBox">
					<div class="midWrapper">
						<div class="bannerCont">
							<div class="vCenterWrap">
								<h2>Simplified Claims Settlement Process for Families Affected by COVID-19</h2>
								<p>Reach out to our Claims Mitra at <a href="mailTo:kli.claimsmitra@kotak.com">kli.claimsmitra@kotak.com</a> or 02266057280</p>
								<a onClick="dataLayer.push({'event':'event banner', 'category':'banner|<?php echo $gaCat;?>', 'action':'Simplified Claims','label':'Know more'});" href="<?=base_url?>/assets/images/uploads/why_kotak/Simplified-Claims-Notification.pdf" target="_blank" class="link">Know more</a>
								</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<ul class="sliderNav">
		</ul>
	</article>
	
  <!-- Banner End --> 
  <article class="altColor howDoWrap">
    <div class="midWrapper">
      <div class="midWrap">
        <div class="midCont"> <img src="<?=base_url()?>assets/images/how-do-i.png">
          <div class="cont">
            <h2>How do I</h2>
            <p>Kotak Life Insurance has simplified the way you choose a policy, apply for a claim and more. Browse through the links below to know more about each from the comfort of your home.</p>
          </div>
        </div>
        <div class="howdoUL_wrap">
          <ul class="howdoUL">
		    
			 <li><a data-action="how do i" data-label="pay my premium" data-event="event existing customers homepage sections" href="<?php echo base_url(HDI_MODULE_LINK . '/pay-my-premium') ?>" class="payOnline active ga_track"><span>Pay <br>My Premium</span></a></li>
             <li><a data-action="how do i" data-label="file a claim" data-event="event existing customers homepage sections"  href="<?=base_url?>assets/images/uploads/why_kotak/Simplified-Claims-Notification.pdf" target="_blank" class="KMBankATMDropBox ga_track"><span>File a Claim</span></a></li>
             <li><a data-action="how do i" data-label="manage my policy" data-event="event existing customers homepage sections" href="<?php echo base_url(HDI_MODULE_LINK . '/manage-my-policy') ?>" class="branchOffices ga_track"><span>Manage <br>My Policy</span></a></li>
             <li><a data-action="how do i" data-label="locate kotak branches" data-event="event existing customers homepage sections"  href="<?php echo base_url(HDI_MODULE_LINK . '/locate-kotak-branches') ?>" class="ECS_NACH ga_track"><span>Locate a Kotak Life branch</span></a></li>
            
          </ul>
          <div class="viewAll">  <a class="ga_track" data-action="how do i" data-label="view all" data-event="event existing customers homepage sections" href="<?php echo base_url(HDI_MODULE_LINK); ?>">View All</a> </div>
        </div>
      </div>
    </div>
  </article>
  
  <!-- FAQ  Starts -->
  <!-- 
  <article class="faqsWrap" id="faqsWrapDiv">
  
    <div class="midWrapper pt--0">
    <div class="headDesc">
        <h1>COVID-19 Assistance</h1>
        <p>Get answers to all your policy related questions right here.</p>
         
      </div>
      
      <div class="w3-bar">
    <button class="btn-cls tablink" onclick="openCity(event,'London')">Policy</button>
    <button class="btn-cls tablink" onclick="openCity(event,'Paris')">Claims</button>
    <button class="btn-cls tablink"  onclick="openCity(event,'Tokyo')">Advisors</button>
  </div>
  
  <div id="London" class="w3-container city">
    <h2>Policy</h2>
    
    <ul class="accordUL" id="faqs-div">
        <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?"><h3><span>Who is a life insured?</span></h3><div class="accordDesc"><p>The person whose life is covered under the contract of insurance is the life insured.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a policyholder?"><h3><span>Who is a policyholder?</span></h3><div class="accordDesc"><p>The person who has entered into a contract of insurance with the insurance company is the policyholder. He is the person who is liable to pay the periodical premium to the insurance company on the policy taken.&nbsp;</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is nomination?"><h3><span>What is nomination?</span></h3><div class="accordDesc"><p>Nomination is a right conferred on the holder of the policy of life insurance on his own life to appoint a person or persons to receive the policy moneys in the event of the policy becoming a claim by death.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a nominee?"><h3><span>Who is a nominee?</span></h3><div class="accordDesc"><p>When the policy money becomes due for payment on the death of the policyholder, it can be paid only to that person who is legally entitled to give a valid and effective discharge to the corporation. If the policy bears nomination, the claim is settled in favour of the nominee. He/she is the person designated by the policyholder to receive the proceeds of an insurance policy, upon the death of the insured. The nominee does not become legally entitled to the money. He is only a trustee holding the policy moneys on behalf of the legal heirs of the policy owner.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who can nominate?"><h3><span>Who can nominate?</span></h3><div class="accordDesc"><p>Any policyholder, who is a major and the life insured under a policy, can make a nomination. Nomination is not effective in a policy taken on the life of another person.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|i have lost/misplaced my policy docket? what should i do now?"><h3><span>I have lost/misplaced my policy docket? What should I do now?</span></h3><div class="accordDesc"><p>You must intimate the nearest KLI branches immediately through a letter along with an indemnity on Rs. 200 stamp paper and Rs. 500 (plus ST and Edu cess) towards administrative charges (stamp duty paid for registration). In case the stamp duty for a particular policy amounts to more than the administrative charges collected (Rs. 500), you will need to pay an amount based on the actual stamp duty.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is maturity date?"><h3><span>What is maturity date?</span></h3><div class="accordDesc"><p>The date on which the contract of insurance policy comes to an end and on which the survival benefits are payable.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is free look period?"><h3><span>What is free look period?</span></h3><div class="accordDesc"><p>In case you wish to reconsider your decision to hold the policy, you have the option of returning the original policy to us, within 15 days from the date of receipt of the policy.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|is free look period available on all policies?"><h3><span>Is free look period available on all policies?</span></h3><div class="accordDesc"><p>Yes, free look period is available on all policies.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|can i surrender my policy before maturity?"><h3><span>Can I surrender my policy before maturity?</span></h3><div class="accordDesc"><p>You can surrender your policy before maturity. Post payout of the Surrender Value, the policy gets terminated. A policy acquires Surrender Value and payout of the surrender value will be dependent on the specific product category &amp; features.</p></div></li></ul> 
  </div>

  <div id="Paris" class="w3-container city" style="display:none">
    <h2>Claims</h2>
    <ul class="accordUL" id="faqs-div">
        <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?"><h3><span>Who is a life insured?</span></h3><div class="accordDesc"><p>The person whose life is covered under the contract of insurance is the life insured.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a policyholder?"><h3><span>Who is a policyholder?</span></h3><div class="accordDesc"><p>The person who has entered into a contract of insurance with the insurance company is the policyholder. He is the person who is liable to pay the periodical premium to the insurance company on the policy taken.&nbsp;</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is nomination?"><h3><span>What is nomination?</span></h3><div class="accordDesc"><p>Nomination is a right conferred on the holder of the policy of life insurance on his own life to appoint a person or persons to receive the policy moneys in the event of the policy becoming a claim by death.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a nominee?"><h3><span>Who is a nominee?</span></h3><div class="accordDesc"><p>When the policy money becomes due for payment on the death of the policyholder, it can be paid only to that person who is legally entitled to give a valid and effective discharge to the corporation. If the policy bears nomination, the claim is settled in favour of the nominee. He/she is the person designated by the policyholder to receive the proceeds of an insurance policy, upon the death of the insured. The nominee does not become legally entitled to the money. He is only a trustee holding the policy moneys on behalf of the legal heirs of the policy owner.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who can nominate?"><h3><span>Who can nominate?</span></h3><div class="accordDesc"><p>Any policyholder, who is a major and the life insured under a policy, can make a nomination. Nomination is not effective in a policy taken on the life of another person.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|i have lost/misplaced my policy docket? what should i do now?"><h3><span>I have lost/misplaced my policy docket? What should I do now?</span></h3><div class="accordDesc"><p>You must intimate the nearest KLI branches immediately through a letter along with an indemnity on Rs. 200 stamp paper and Rs. 500 (plus ST and Edu cess) towards administrative charges (stamp duty paid for registration). In case the stamp duty for a particular policy amounts to more than the administrative charges collected (Rs. 500), you will need to pay an amount based on the actual stamp duty.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is maturity date?"><h3><span>What is maturity date?</span></h3><div class="accordDesc"><p>The date on which the contract of insurance policy comes to an end and on which the survival benefits are payable.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is free look period?"><h3><span>What is free look period?</span></h3><div class="accordDesc"><p>In case you wish to reconsider your decision to hold the policy, you have the option of returning the original policy to us, within 15 days from the date of receipt of the policy.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|is free look period available on all policies?"><h3><span>Is free look period available on all policies?</span></h3><div class="accordDesc"><p>Yes, free look period is available on all policies.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|can i surrender my policy before maturity?"><h3><span>Can I surrender my policy before maturity?</span></h3><div class="accordDesc"><p>You can surrender your policy before maturity. Post payout of the Surrender Value, the policy gets terminated. A policy acquires Surrender Value and payout of the surrender value will be dependent on the specific product category &amp; features.</p></div></li></ul> 
  </div>

  <div id="Tokyo" class="w3-container city" style="display:none">
    <h2>Advisors</h2>
    <ul class="accordUL" id="faqs-div">
        <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?"><h3><span>Who is a life insured?</span></h3><div class="accordDesc"><p>The person whose life is covered under the contract of insurance is the life insured.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a policyholder?"><h3><span>Who is a policyholder?</span></h3><div class="accordDesc"><p>The person who has entered into a contract of insurance with the insurance company is the policyholder. He is the person who is liable to pay the periodical premium to the insurance company on the policy taken.&nbsp;</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is nomination?"><h3><span>What is nomination?</span></h3><div class="accordDesc"><p>Nomination is a right conferred on the holder of the policy of life insurance on his own life to appoint a person or persons to receive the policy moneys in the event of the policy becoming a claim by death.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a nominee?"><h3><span>Who is a nominee?</span></h3><div class="accordDesc"><p>When the policy money becomes due for payment on the death of the policyholder, it can be paid only to that person who is legally entitled to give a valid and effective discharge to the corporation. If the policy bears nomination, the claim is settled in favour of the nominee. He/she is the person designated by the policyholder to receive the proceeds of an insurance policy, upon the death of the insured. The nominee does not become legally entitled to the money. He is only a trustee holding the policy moneys on behalf of the legal heirs of the policy owner.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who can nominate?"><h3><span>Who can nominate?</span></h3><div class="accordDesc"><p>Any policyholder, who is a major and the life insured under a policy, can make a nomination. Nomination is not effective in a policy taken on the life of another person.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|i have lost/misplaced my policy docket? what should i do now?"><h3><span>I have lost/misplaced my policy docket? What should I do now?</span></h3><div class="accordDesc"><p>You must intimate the nearest KLI branches immediately through a letter along with an indemnity on Rs. 200 stamp paper and Rs. 500 (plus ST and Edu cess) towards administrative charges (stamp duty paid for registration). In case the stamp duty for a particular policy amounts to more than the administrative charges collected (Rs. 500), you will need to pay an amount based on the actual stamp duty.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is maturity date?"><h3><span>What is maturity date?</span></h3><div class="accordDesc"><p>The date on which the contract of insurance policy comes to an end and on which the survival benefits are payable.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is free look period?"><h3><span>What is free look period?</span></h3><div class="accordDesc"><p>In case you wish to reconsider your decision to hold the policy, you have the option of returning the original policy to us, within 15 days from the date of receipt of the policy.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|is free look period available on all policies?"><h3><span>Is free look period available on all policies?</span></h3><div class="accordDesc"><p>Yes, free look period is available on all policies.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|can i surrender my policy before maturity?"><h3><span>Can I surrender my policy before maturity?</span></h3><div class="accordDesc"><p>You can surrender your policy before maturity. Post payout of the Surrender Value, the policy gets terminated. A policy acquires Surrender Value and payout of the surrender value will be dependent on the specific product category &amp; features.</p></div></li></ul> 
  </div>
      
    </div>
  </article>
  
  <!--  FAQ Ends -->
  
   <!-- FAQ  Starts -->
  
  <article class="faqsWrap" id="faqsWrapDiv">
  
    <div class="midWrapper pt--0">
	
	
	
	<!----PDF----->
	
  <div class="midWrapper pt--0">
    <div class="headDesc">
        <h1>COVID-19 Healthcare Support</h1>
        <p>We are providing Telemedical Consultation and Hospitalisation Support to all our 
policyholders in this pandemic through our partnership with Quantum CorpHealth Pvt Ltd. Get 
quick and easy access to the best healthcare services at no charge by connecting via email 
or call.</p>

<p><b>Email ID:</b> <a style="color:blue" href="mailto:klicare@quantumcorphealth.com"><u>klicare@quantumcorphealth.com</u></a> &nbsp;&nbsp;&nbsp; <b>Helpline Number: 02268488818 / 62</b><br><br>
How to go about it:
    <ul class="bullet">
        <li>Send us an email with personal and medical details or call our helpline.</li>
        <li>Our team will set up an appointment for you with a certified physician in the following 
        hours:<br>
        Mon-Fri: 9.00 am to 6.00 pm<br>
        Sat: 9.00 am to 3.00 pm<br></li>
        <li>You will receive a consultation call-back from the physician. </li>
        <li>Further guidance on hospitalization will be provided.</li>
    </ul>
<p>We at Kotak Life are committed to helping our customers in every way we can during this 
pandemic situation.</p><br><br>


<p><b>Disclaimer:</b><br>
This is not to replace your healthcare professional. Kindly consult with your treating physician for further assistance 
and clinical correlation. <br><br>

<b>BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/ FRAUDULENT OFFERS</b>
IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. 
Public receiving such phone calls are requested to lodge a police complaint.<br><br>

For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a 
sale.<br><br>

<b>Kotak Mahindra Life Insurance Company Ltd.</b> Regn. No.: 107, CIN: U66030MH2000PLC128503, Regd. 
Office: 8<sup>th</sup> Floor, Plot # C-12, G-Block, BKC, Bandra(E), Mumbai-400 051. Website:<a style="color:blue" href="https://www.kotaklife.com"><u>www.kotaklife.com</u></a> | 
Email:<a style="color:blue" href="mailto:kli.in/WECARE"><u>kli.in/WECARE</u></a> | Toll Free No.: 1800 209 8800. Ref no: KLI/21-22/E-WEB/357.<br><br>

<b>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra 
Life Insurance Company Ltd. Under license</b></p>

</div>
   <!-- -PDF -->
	
	
	
    <div class="headDesc">
        <h1>COVID-19 Assistance</h1>
        <p>Get answers to all your policy related questions right here.</p>
         
      </div>
      
      <div class="w3-bar">
    <!--  <button class="btn-cls tablink" onclick="openCity(event,'London')">Policy</button> 
    <button class="btn-cls tablink"  onclick="openCity(event,'Tokyo')">Advisors</button>
    -->
    <button class="btn-cls tablink" onclick="openCity(event,'Paris')">Claims</button>
    
  </div>
  
  <!-- <div id="London" class="w3-container city" style="display:none">
    <h2>Policy</h2>
    
    <ul class="accordUL" id="faqs-div">
        <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?"><h3><span>Who is a life insured?</span></h3><div class="accordDesc"><p>The person whose life is covered under the contract of insurance is the life insured.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a policyholder?"><h3><span>Who is a policyholder?</span></h3><div class="accordDesc"><p>The person who has entered into a contract of insurance with the insurance company is the policyholder. He is the person who is liable to pay the periodical premium to the insurance company on the policy taken.&nbsp;</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is nomination?"><h3><span>What is nomination?</span></h3><div class="accordDesc"><p>Nomination is a right conferred on the holder of the policy of life insurance on his own life to appoint a person or persons to receive the policy moneys in the event of the policy becoming a claim by death.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a nominee?"><h3><span>Who is a nominee?</span></h3><div class="accordDesc"><p>When the policy money becomes due for payment on the death of the policyholder, it can be paid only to that person who is legally entitled to give a valid and effective discharge to the corporation. If the policy bears nomination, the claim is settled in favour of the nominee. He/she is the person designated by the policyholder to receive the proceeds of an insurance policy, upon the death of the insured. The nominee does not become legally entitled to the money. He is only a trustee holding the policy moneys on behalf of the legal heirs of the policy owner.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who can nominate?"><h3><span>Who can nominate?</span></h3><div class="accordDesc"><p>Any policyholder, who is a major and the life insured under a policy, can make a nomination. Nomination is not effective in a policy taken on the life of another person.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|i have lost/misplaced my policy docket? what should i do now?"><h3><span>I have lost/misplaced my policy docket? What should I do now?</span></h3><div class="accordDesc"><p>You must intimate the nearest KLI branches immediately through a letter along with an indemnity on Rs. 200 stamp paper and Rs. 500 (plus ST and Edu cess) towards administrative charges (stamp duty paid for registration). In case the stamp duty for a particular policy amounts to more than the administrative charges collected (Rs. 500), you will need to pay an amount based on the actual stamp duty.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is maturity date?"><h3><span>What is maturity date?</span></h3><div class="accordDesc"><p>The date on which the contract of insurance policy comes to an end and on which the survival benefits are payable.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is free look period?"><h3><span>What is free look period?</span></h3><div class="accordDesc"><p>In case you wish to reconsider your decision to hold the policy, you have the option of returning the original policy to us, within 15 days from the date of receipt of the policy.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|is free look period available on all policies?"><h3><span>Is free look period available on all policies?</span></h3><div class="accordDesc"><p>Yes, free look period is available on all policies.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|can i surrender my policy before maturity?"><h3><span>Can I surrender my policy before maturity?</span></h3><div class="accordDesc"><p>You can surrender your policy before maturity. Post payout of the Surrender Value, the policy gets terminated. A policy acquires Surrender Value and payout of the surrender value will be dependent on the specific product category &amp; features.</p></div></li></ul> 
  </div> -->

  <div id="Paris" class="w3-container city" >
    <h2>FAQs for COVID-19 Claims</h2>
				<ul class="accordUL" id="faqs-div">
					<li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?"><h3>
							<span>Is a claim arising out of death due to COVID-19 covered under Kotak Life policy?</span>
						</h3>
						<div class="accordDesc">
							<p>Yes, a claim arising out of death due to COVID-19 is covered under the life insurance policy issued by Kotak Life.</p>
						</div></li>
					<li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a policyholder?"><h3>
							<span>Is a claim arising out of death due to COVID-19 payable under a lapsed life insurance policy?</span>
						</h3>
						<div class="accordDesc">
							<p>No, a death claim (including COVID -19 related death claim) shall be payable only if the life insurance policy is in-force at the time of death of the Life Insured and all premiums due till the date of death have been paid  as per T&C of the Policy. 
							&nbsp;</p>
						</div></li>
					<li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is nomination?"><h3>
							<span>How can I intimate a COVID-19 death claim? </span>
						</h3>
						<div class="accordDesc">
							<p>In the unfortunate event of death of the Life Insured, the nominee can visit the nearest branch office of Kotak Life. In case the nearest branch office is closed for any reason, you may e-mail us at kli.claimsmitra@kotak.com or fill-in the claim form provided at the link https://customer.kotaklifeinsurance.com/OCM/cp_FileClaim.</p>
						</div></li>
					<li class="ga_track" data-event="event policy faq"
						data-action="policy faqs" data-label="read more|who is a nominee?"><h3>
							<span>What are the COVID-19 related death claim documents required to be submitted by the Claimant?</span>
						</h3>
						<div class="accordDesc">
							<p>The below mentioned documents are required to be submitted:</p>
							<p>(i) Claim intimation form along with your recent passport size photo of the Claimant</p> 
							<p>(ii) Death Certificate from Municipal Authorities</p> 
							<p>(iii) Copy of Cause of death Certificate issued by Doctor or Hospital Authorities & relevant test reports</p> 
							<p>(iv) KYC of the Beneficiary</p> 
							<p>(v) Cancelled cheque of Beneficiary (In case of e-mail, a scanned image of Cancelled cheque)</p> 
							<p>(ii) Original policy document (In case of e-mail, a scanned image of Policy Document may be sent).</p>
							<p> You may e-mail the documents to us at kli.claimsmitra@kotak.com.</p>
						</div></li>
					<li class="ga_track" data-event="event policy faq"
						data-action="policy faqs" data-label="read more|who can nominate?"><h3>
							<span>How can I contact the customer care representatives of Kotak Life for queries on COVID-19 death claim?</span>
						</h3>
						<div class="accordDesc">
							<p>Please feel free to call us on 022-66057280, ___ a.m. - ___ p.m. between Monday - Saturday (local charges apply) </p>
						</div></li>
					 
				</ul>
				<!-- <ul class="accordUL" id="faqs-div">
        <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?"><h3><span>Who is a life insured?</span></h3><div class="accordDesc"><p>The person whose life is covered under the contract of insurance is the life insured.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a policyholder?"><h3><span>Who is a policyholder?</span></h3><div class="accordDesc"><p>The person who has entered into a contract of insurance with the insurance company is the policyholder. He is the person who is liable to pay the periodical premium to the insurance company on the policy taken.&nbsp;</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is nomination?"><h3><span>What is nomination?</span></h3><div class="accordDesc"><p>Nomination is a right conferred on the holder of the policy of life insurance on his own life to appoint a person or persons to receive the policy moneys in the event of the policy becoming a claim by death.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a nominee?"><h3><span>Who is a nominee?</span></h3><div class="accordDesc"><p>When the policy money becomes due for payment on the death of the policyholder, it can be paid only to that person who is legally entitled to give a valid and effective discharge to the corporation. If the policy bears nomination, the claim is settled in favour of the nominee. He/she is the person designated by the policyholder to receive the proceeds of an insurance policy, upon the death of the insured. The nominee does not become legally entitled to the money. He is only a trustee holding the policy moneys on behalf of the legal heirs of the policy owner.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who can nominate?"><h3><span>Who can nominate?</span></h3><div class="accordDesc"><p>Any policyholder, who is a major and the life insured under a policy, can make a nomination. Nomination is not effective in a policy taken on the life of another person.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|i have lost/misplaced my policy docket? what should i do now?"><h3><span>I have lost/misplaced my policy docket? What should I do now?</span></h3><div class="accordDesc"><p>You must intimate the nearest KLI branches immediately through a letter along with an indemnity on Rs. 200 stamp paper and Rs. 500 (plus ST and Edu cess) towards administrative charges (stamp duty paid for registration). In case the stamp duty for a particular policy amounts to more than the administrative charges collected (Rs. 500), you will need to pay an amount based on the actual stamp duty.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is maturity date?"><h3><span>What is maturity date?</span></h3><div class="accordDesc"><p>The date on which the contract of insurance policy comes to an end and on which the survival benefits are payable.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is free look period?"><h3><span>What is free look period?</span></h3><div class="accordDesc"><p>In case you wish to reconsider your decision to hold the policy, you have the option of returning the original policy to us, within 15 days from the date of receipt of the policy.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|is free look period available on all policies?"><h3><span>Is free look period available on all policies?</span></h3><div class="accordDesc"><p>Yes, free look period is available on all policies.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|can i surrender my policy before maturity?"><h3><span>Can I surrender my policy before maturity?</span></h3><div class="accordDesc"><p>You can surrender your policy before maturity. Post payout of the Surrender Value, the policy gets terminated. A policy acquires Surrender Value and payout of the surrender value will be dependent on the specific product category &amp; features.</p></div></li></ul> --> 
  </div>

  <!-- 
  <div id="Tokyo" class="w3-container city" style="display:none">
    <h2>Advisors</h2>
    <ul class="accordUL" id="faqs-div">
        <li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a life insured?"><h3><span>Who is a life insured?</span></h3><div class="accordDesc"><p>The person whose life is covered under the contract of insurance is the life insured.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a policyholder?"><h3><span>Who is a policyholder?</span></h3><div class="accordDesc"><p>The person who has entered into a contract of insurance with the insurance company is the policyholder. He is the person who is liable to pay the periodical premium to the insurance company on the policy taken.&nbsp;</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is nomination?"><h3><span>What is nomination?</span></h3><div class="accordDesc"><p>Nomination is a right conferred on the holder of the policy of life insurance on his own life to appoint a person or persons to receive the policy moneys in the event of the policy becoming a claim by death.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who is a nominee?"><h3><span>Who is a nominee?</span></h3><div class="accordDesc"><p>When the policy money becomes due for payment on the death of the policyholder, it can be paid only to that person who is legally entitled to give a valid and effective discharge to the corporation. If the policy bears nomination, the claim is settled in favour of the nominee. He/she is the person designated by the policyholder to receive the proceeds of an insurance policy, upon the death of the insured. The nominee does not become legally entitled to the money. He is only a trustee holding the policy moneys on behalf of the legal heirs of the policy owner.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|who can nominate?"><h3><span>Who can nominate?</span></h3><div class="accordDesc"><p>Any policyholder, who is a major and the life insured under a policy, can make a nomination. Nomination is not effective in a policy taken on the life of another person.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|i have lost/misplaced my policy docket? what should i do now?"><h3><span>I have lost/misplaced my policy docket? What should I do now?</span></h3><div class="accordDesc"><p>You must intimate the nearest KLI branches immediately through a letter along with an indemnity on Rs. 200 stamp paper and Rs. 500 (plus ST and Edu cess) towards administrative charges (stamp duty paid for registration). In case the stamp duty for a particular policy amounts to more than the administrative charges collected (Rs. 500), you will need to pay an amount based on the actual stamp duty.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is maturity date?"><h3><span>What is maturity date?</span></h3><div class="accordDesc"><p>The date on which the contract of insurance policy comes to an end and on which the survival benefits are payable.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|what is free look period?"><h3><span>What is free look period?</span></h3><div class="accordDesc"><p>In case you wish to reconsider your decision to hold the policy, you have the option of returning the original policy to us, within 15 days from the date of receipt of the policy.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|is free look period available on all policies?"><h3><span>Is free look period available on all policies?</span></h3><div class="accordDesc"><p>Yes, free look period is available on all policies.</p></div></li><li class="ga_track" data-event="event policy faq" data-action="policy faqs" data-label="read more|can i surrender my policy before maturity?"><h3><span>Can I surrender my policy before maturity?</span></h3><div class="accordDesc"><p>You can surrender your policy before maturity. Post payout of the Surrender Value, the policy gets terminated. A policy acquires Surrender Value and payout of the surrender value will be dependent on the specific product category &amp; features.</p></div></li></ul> 
  </div>
   -->
      
    </div>
  </article>
  
  <!--  FAQ Ends -->
 
  
    
  <!-- Banner End --> 
  
</section>
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>