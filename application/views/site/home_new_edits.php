<link rel="stylesheet" href="<?=base_url?>/assets/custom_tabs.css">
<style type="text/css">
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
<section class="home"> 
<!-- Banner Start -->
  
  <article class="banner">
		<ul class="bannerUL" id="homeBanner">
		<li>
				<div class="vidDiv">
					<img src="<?=base_url()?>assets/images/opm-kma.png" alt="Kotak Life Insurance" class="posterImg" /> <img alt="" class="mobileBannerImg" /> </div>
				<div class="slideBox">
					<div class="midWrapper">
						<div class="bannerCont">
							<div class="vCenterWrap">
								<h2>Our <strong>Online Policy Manager</strong> is available for you 24/7 to service your policy and pay your premiums</h2>
								<p>Due to the COVID-19 outbreak, we have temporarily closed our branches for your safety and well-being.</p>
								<a data-action="OPM" data-label="Log In" data-category="banner|new customers" data-event="event banner" href="care.kotaklifeinsurance.com" class="link ga_banner_track">Log In</a> </div>
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
			
			 
			<li>
				<div class="vidDiv">			
					<img src="<?=base_url()?>assets/quarntine/images/board.png" alt="Performance of Frontline Equity Fund" title="Performance of Frontline Equity Fund"" class="posterImg" /> <img src="<?=base_url()?>assets/images/HOME-KMA-MOBILE-3.jpg" alt="Kotak Life Insurance" class="mobileBannerImg" /> </div>
				<div class="slideBox">
					<div class="midWrapper">
						<div class="bannerCont">
							<div class="vCenterWrap">
								<h2>Promise to leave a legacy that will outlive you</h2>
								<p>Secure a happy future with <strong>Kotak Premier Life Plan</strong></p>
							<a data-action="kotak premier life plan" data-label="know more" data-category="banner|life advisors" data-event="event banner" href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-premier-life-plan" class="link ga_banner_track">Know more</a> </div>								
						</div>
					</div>
				</div>
			</li>
		</ul>
		<ul class="sliderNav">
		</ul>
	</article>
	
  <!-- Banner End --> 
  
  
  <!-- FAQ  Starts -->
   
  <article class="faqsWrap" id="faqsWrapDiv">
  
    <div class="midWrapper">
    <div class="headDesc">
        <h1>Policy FAQs</h1>
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
  
  
   <!-- Testimonials Start -->
  <article class="altColor howDoWrap">
    <div class="midWrapper">
      <div class="midWrap">
        <div class="midCont"> <img src="<?=base_url()?>assets/images/how-do-i.png">
          <div class="cont">
            <h2>How do I asasas</h2>
            <p>Kotak Life Insurance has simplified the way you choose a policy, apply for a claim and more. Browse through the links below to know more about each.</p>
          </div>
        </div>
        <div class="howdoUL_wrap">
          <ul class="howdoUL">
		    
			 <li><a data-action="how do i" data-label="pay my premium" data-event="event existing customers homepage sections" href="<?php echo base_url(HDI_MODULE_LINK . '/pay-my-premium') ?>" class="payOnline active ga_track"><span>Pay <br>My Premium</span></a></li>
             <li><a data-action="how do i" data-label="file a claim" data-event="event existing customers homepage sections"  href="https://customer.kotaklifeinsurance.com/ocm" target="_blank" class="KMBankATMDropBox ga_track"><span>File a Claim</span></a></li>
             <li><a data-action="how do i" data-label="manage my policy" data-event="event existing customers homepage sections" href="<?php echo base_url(HDI_MODULE_LINK . '/manage-my-policy') ?>" class="branchOffices ga_track"><span>Manage <br>My Policy</span></a></li>
             <li><a data-action="how do i" data-label="locate kotak branches" data-event="event existing customers homepage sections"  href="<?php echo base_url(HDI_MODULE_LINK . '/locate-kotak-branches') ?>" class="ECS_NACH ga_track"><span>Locate a Kotak Life branch</span></a></li>
            
          </ul>
          <div class="viewAll">  <a class="ga_track" data-action="how do i" data-label="view all" data-event="event existing customers homepage sections" href="<?php echo base_url(HDI_MODULE_LINK); ?>">View All</a> </div>
        </div>
      </div>
    </div>
  </article>
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