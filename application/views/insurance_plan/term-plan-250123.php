<?php
function isMobile()
{
    return preg_match(
        '/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i',
        $_SERVER['HTTP_USER_AGENT']
    );
}
if (isMobile()) {
    // Do something for only mobile users
} else {
    $actual_link =
        (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
            ? 'https'
            : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $temp = [];
    $temp = explode('/', $actual_link);

    if ($temp[3] == 'main') {
        redirect(base_url());
    }
    // Do something for only desktop users
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/path/to/dist/css/image-zoom.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
<style>
 html{scroll-behavior:smooth}.fancybox__caption{display:none}.d--flex{display:flex}.splash-close img{height:20px;opacity:.2;cursor:pointer;transition:.6s}.splash-close img:hover{opacity:unset;transition:.6s}.splash-close{width:30px;margin:0 0 0 auto}.splash p{margin:0}.splash-content{width:65%;font-size:18px;margin:0 auto;background-color:#fff;padding:16px 18px;border-radius:11px;margin-top:201px}.overlay-black{position:absolute;top:0;bottom:0;left:0;right:0;background-color:rgba(0,0,0,.2);z-index:-1}#splash{position:fixed;top:0;z-index:10;left:0;bottom:0;width:100%;height:100vh;background-color:rgba(0,0,0,.5)}#splash a{color:red}.tooltip{position:relative;display:inline-block;top:-9px;right:-20px}.tooltip .tooltiptext{visibility:hidden;width:100px;background-color:#000;color:#fff;text-align:center;border-radius:6px;padding:5px 0;right:33px;top:-2px;position:absolute;z-index:1}.feats-sec{position:relative}.kota-termplan-two .tooltip{top:3px;position:absolute;right:-14px}@media (max-width:640px){.mt-102{margin-top:45px!important;top:0}}@media screen and (max-width:768px){.splash{display:block}.splash-content{width:85%;font-size:15px;margin:0 auto;background-color:#fff;padding:16px 18px;border-radius:11px;margin-top:30px}}@media screen and (min-width:768px){.splash{display:block}}@media only screen and (max-width:1024px){section{margin-top:0}}.get-btn{padding:3px 30px 3px 29px;border-radius:15px;background-color:#00387e!important;color:#fff!important;font-size:22px;font-weight:100;position:absolute;bottom:40px;right:315px}.position-relative{position:relative!important}.remv:after,.remv:before{content:none!important}
</style>
<div class="online-term-plan-bg">
 <!-- Section Start -->
 <div class="term-design">
  <section class="term-design-banner top-161 mt-102 mtt-102">
   <div class="midWrapper">
    <ul class="breadcrumb-ulip">
     <li>
      <a href=base_url."/">Home></a>
     </li>
     <li>
      <a href=base_url."/online-plans">Online Plans></a>
     </li>
     <li class="active">
      <a href="#">Term Insurance</a>
     </li>
    </ul>
    <div class="roww">
     <div class="coll-md-5  w-term-45 my-auto d-block d-md-none">
      <img src="assets/images/term-plan-img/term-famil-secure-webp.webp" alt="term-family-source" class="">
     </div>
     <div class="coll-md-7 w-term-55">
      <h1 class="mob-nowwrap new-term-banner-h1">Term Insurance</h1>
      <p>Your family’s well-being depends on you. Ensure a good lifestyle for your family by securing them financially with Kotak e-Term Plan. <br> Get 1 Cr. Sum Assured @₹17/day*. </p>
      <div class="roww">
       <div class="coll-md-4 mr-20  mr-mob-0 w-mob-ban-100 cal-prem">
        <a href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance" class="want-to-knw banner-knw">Know More</a>
       </div>
       <div class="coll-md-5 w-mob-ban-100 cal-prem">
        <a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=headbanner" class="in-buy banner-buy">Calculate Premium</a>
       </div>
      </div>
     </div>
     <div class="coll-md-5  w-term-45 my-auto d-none d-md-block">
      <img src="assets/images/term-plan-img/term-famil-secure-webp.webp" alt="Term Insurance Plan" title="Term Insurance" class="">
     </div>
    </div>
   </div>
  </section>
  <section class="what-ulips">
   <div class="midWrapper">
    <div class="what-ulip-tabs">
     <div id="what_is_a_term_insurance_plan" class="what-plan">
      <div class="roww term-spacg m-0 what-spac align-item-center">
       <div class="coll-md-4 align-self-center text-center pr-1">
        <img src="assets/images/online-term-insurance-plan/term-insurance.png" alt="Term Insurance Definition" title="Term Insurance Definition" class="">
       </div>
       <div class="coll-md-8">
        <h2 class="mb-20 term-mob-spac term-tags fnt-24 ml-5">What is a Term Insurance Plan? </h2>
        <p class="mb-20 mx-650"> Term insurance is a pure life insurance product which provides financial coverage to the policyholder and their nominees in exchange for a specified premium amount. In case of an unfortunate demise of the policyholder during this timeframe, the insurer provides a lump sum payout to the nominee, called life cover, to manage their expenses. </p>
        <p class="mx-650"> When you buy term insurance, you can be assured that your family and dependents will be financially secure in your absence. This helps your family fulfil their future needs like higher education, marriage, buying a house etc. </p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="benefits bene term-bene position-relative">
   <div class="midWrapper" id="benefits_of_term_insurance">
    <div class="wht-should mb-20">
     <h2 class="mb-35 mb-mob-34 term-tags fnt-24">Why Should You Buy Term Insurance Plan?</h2>
     <p>Life is uncertain and cannot be predicted at any point. You never know when an unfortunate incident may occur and leave your loved ones without any financial security. Such a situation can result in your family’s dependency on a close relative or may lead your spouse and children to hunt for new jobs to make ends meet. </p>
     <p>Let us say that you are the only earning member of the family with a monthly income of ₹ 50,000. Your family consists of your spouse, who is a homemaker, and two children, one of which is completing their primary education, and the other will soon begin college. Your family is living a comfortable life with all their basic necessities being met without any financial issues. </p>
     <p>Now, if you were to pass away, your family would still require ₹35,000 - 40,000 to manage their expenses. But due to a lack of financial backup, they would have to depend on someone else. In this case, if you had bought a term insurance policy, your family would have been self-sufficient, and your children could complete their education without any worries.</p>
     <p>A <b>best term insurance plan</b> is not the one that market tags best, but the one that can help you take care of all your commitments in one life cover. Therefore, aim at having a life cover of at least 10 times of your annual income. It can be more, but not less than that. </p>
     <p>Term plans give out a lump sum amount to safeguard your loved ones and take care of all their needs. May it be the education of your children or paying off any loans, the death benefit amount assists you in taking care of such payments.</p>
    </div>
   </div>
   <section class="ensure term-insure term-day" id="ensure-day">
    <div class="midWrapper">
     <div class="roww">
      <div class="coll-md-10 move align-self-center mr-32 txt-mob-center">
       <h2 class="parttxt" style="color:#fff!important; font-size:21px!important;letter-spacing: 0.42px!important;font-weight:700!important;">Get 1.5 Crore Life Cover @₹26/day*.</h2>
      </div>
      <div class="coll-md-2  mt-auto mb-auto ml-mob-initial mll-mob-initial w-mob-150 txt-mob-center">
       <a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner1" target="_blank" class="en-btn mt-12 inknw">Buy Now</a>
      </div>
     </div>
    </div>
   </section>
   <div class="midWrapper" id="benefits_of_term_insurance">
    <div class="wht-should mb-20"></div>
    <h2 class="mb-20 mb-mob-34 term-tags fnt-24"> Who Should Buy a Term Insurance Policy? </h2>
    <p class="mb-20">Any individual who has financial dependents or wants to leave their family a legacy should avail of a term insurance policy. This would generally include parents, single women or men that have senior parents, professionals with debts or loans, persons that are nearing retirement, etc., who can buy online term insurance. When you buy a <b>term insurance plan</b>, you also get tax benefits under <a href=base_url."/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction">Section 80C</a> and <a href=base_url."/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know">Section 10 (10D) </a>of the Income Tax Act, 1961, thus reducing your taxable income. Here is a detailed version of who should buy a term plan: </p>
    <!--slick counter html ^-->
    <div class="bene-slick term-bene-slick1 terminsur">
     <div>
      <div class="roww bene-para">
       <div class="term-insur">
        <img src="assets/images/online-term-insurance-plan/parents.svg" alt="parents" class="">
       </div>
       <div class="coll-md-11">
        <h3>Parents</h3>
        <p>As parents, your spouse, children, and your own parents are dependent on you. With the help of the sum assured payout, you can ensure the future of your children and also provide aid to your parents. You can be worry-free about the financial condition of your loved ones after getting a term life insurance plan.</p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="term-insur">
        <img src="assets/images/online-term-insurance-plan/profetional.svg" alt="professional" class="">
       </div>
       <div class="coll-md-11">
        <h3>Professionals </h3>
        <p>You may have availed a certain education loan to go abroad and study. But if something were to happen to you, your parents shouldn’t bear the brunt of the debt. The sum assured of the term plan can be used to clear off your study loan.</p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="term-insur">
        <img src="assets/images/online-term-insurance-plan/reties.png" alt="retires" class="">
       </div>
       <div class="coll-md-11">
        <h3>Retirees </h3>
        <p>If you are going to retire soon and have dependents or debts, term insurance is the perfect way to safeguard your interests. The death benefit would be enough to pay off any debts and also provide financial assistance to the dependent members. </p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="term-insur">
        <img src="assets/images/online-term-insurance-plan/tax-payeer.png" alt="tax-payeer" class="">
       </div>
       <div class="coll-md-11">
        <h3>Taxpayers </h3>
        <p>Individuals who are looking for some tax savings that give beneficial returns can opt for term insurance. Investing in a term plan is the perfect way to get tax benefits and earn a life cover. Premiums paid for term insurance policies are deductible under Section 80C of the Income Tax Act of 1961.</p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="term-insur">
        <img src="assets/images/online-term-insurance-plan/working-womens.svg" alt="working-womens" class="">
       </div>
       <div class="coll-md-11">
        <h3>Working Women </h3>
        <p>Women these days support their families not just emotionally but also financially. They can safeguard the future of their family with a term plan to ensure their family and dreams of little ones are secured even in their absence.</p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="term-insur">
        <img src="assets/images/online-term-insurance-plan/parents.png" alt="parents" class="">
       </div>
       <div class="coll-md-11">
        <h3>Parents</h3>
        <p>Parents are constantly concerned about their children's future. A term plan gives parents peace of mind. They could be confident that their child will be financially secure even if something were to happen to them. They never have to worry about their child abandoning their aspirations since they provide a financial safety net.</p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="term-insur">
        <img src="assets/images/online-term-insurance-plan/professionals-new.svg" alt="professional" class="">
       </div>
       <div class="coll-md-11">
        <h3>Professionals new to work force</h3>
        <p>When you are new to work force, it is the best time to invest in a term insurance. You have limited liabilities and responsibilities. It will not just ensure a lower premium, but also safeguard your parents and loved ones’ future in case of your death.</p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="ensure term-insure">
   <div class="midWrapper position-relative">
    <div class="roww">
     <h2 class="fnt-24 clr-fff mb-20">Customer Reviews </h2>
     <span class="pagingInfo-review d-flex playfair_font justify-content-center"></span>
     <div class="reviewslick">
      <div>
       <div class="custom-review">
        <p class="remv" style="font-size:20px;">
         <b>Faster Policy Issuance </b>
        </p>
        <p>My experience with Kotak e-Term Plan from filling the proposal form to policy issuance has been smoother. Uploading document is generally challenging, but it was quite easier with Kotak Life. Their portal is responsive and intuitive. Keep up the good work! </p>
        <div class="custom-rating float-right d-flex mt-30">
         <div class="p-img">
          <img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="profile">
         </div>
         <div class="c-name">
          <p class="remv" style="font-size:20px;">
           <b>Mukund Solanke </b>
          </p>
          <img src="assets/images/online-term-insurance-plan/rating.png" alt="rating">
         </div>
        </div>
       </div>
      </div>
      <div>
       <div class="custom-review">
        <p class="remv" style="font-size:20px;">
         <b>Excellent experience </b>
        </p>
        <!--/Lock-in Period  -->
        <p> Buying a term plan was long due for me. I found Kotak Life, logged in on their website and I got a call from their agent. I checked my eligibility through their portal, got a quote for the premium and I was in. My family’s financial security was now in my hands. Now my life is stress-free. </p>
        <div class="custom-rating float-right d-flex mt-30">
         <div class="p-img">
          <img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="profile-photo">
         </div>
         <div class="c-name">
          <p class="remv" style="font-size:20px;">
           <b>Rahul Gupta</b>
          </p>
          <img src="assets/images/online-term-insurance-plan/rating.png" alt="rating">
         </div>
        </div>
       </div>
      </div>
      <div>
       <div class="custom-review">
        <p class="remv" style="font-size:20px;">
         <b>Wonderful Journey </b>
        </p>
        <!--/Lock-in Period  -->
        <p> Buying a term plan online sounded like a challenge as I am not used to buying critical insurance plans online. I came across Kotak Life when someone at work recommended to buy their Kotak e-Term plan. The plan is very simple, offered me plan options and I knew exactly that this was the right plan for me. </p>
        <div class="custom-rating float-right d-flex mt-30">
         <div class="p-img">
          <img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="profile-photo">
         </div>
         <div class="c-name">
          <p class="remv" style="font-size:20px;">
           <b>Pranjal Gusain </b>
          </p>
          <img src="assets/images/online-term-insurance-plan/rating.png" alt="rating">
         </div>
        </div>
       </div>
      </div>
      <div>
       <div class="custom-review">
        <p class="remv" style="font-size:20px;">
         <b>Excellent Assistance </b>
        </p>
        <!--/Lock-in Period  -->
        <p> I have a good financial portfolio but there was one thing missing, a term plan. I wanted to buy term plan was to ensure my spouse’s financial future and keep her ready for any financial liabilities in my absence. After considering different plans, I finalized Kotak e-Term plan since it aligned perfectly with what I was looking for. </p>
        <div class="custom-rating float-right d-flex mt-30">
         <div class="p-img">
          <img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="profile-photo">
         </div>
         <div class="c-name">
          <p class="remv" style="font-size:20px;">
           <b>Shehzan Merchant</b>
          </p>
          <img src="assets/images/online-term-insurance-plan/rating.png" alt="rating">
         </div>
        </div>
       </div>
      </div>
      <div>
       <div class="custom-review">
        <p class="remv" style="font-size:20px;">
         <b>Smooth and hassle-free experience </b>
        </p>
        <!--/Lock-in Period  -->
        <p> Be it my family’s financial future or my little one’s happiness, Kotak e-Term plan helped me secure all of it in one insurance plan. They have affordable premiums, good life cover and some rider options that helped me manage many things at once. I strongly recommend you to buy a Kotak e-Term plan asap. </p>
        <div class="custom-rating float-right d-flex mt-30">
         <div class="p-img">
          <img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="profile-photo">
         </div>
         <div class="c-name">
          <p class="remv" style="font-size:20px;">
           <b>Apurva Amod Gadikar</b>
          </p>
          <img src="assets/images/online-term-insurance-plan/rating.png" alt="rating">
         </div>
        </div>
       </div>
      </div>
      <div>
       <div class="custom-review">
        <p class="remv" style="font-size:20px;">
         <b>Excellent policy servicing </b>
        </p>
        <!--/Lock-in Period  -->
        <p> I was looking for a term plan when I came across Kotak e-Term plan and used their portal to calculate premium. They have a simple portal where you enter the information and get a quote. Beyond that, I just enjoyed the fact that their journey is easy to follow and their call centre team assists if you are stuck somewhere. </p>
        <div class="custom-rating float-right d-flex mt-30">
         <div class="p-img">
          <img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="profile">
         </div>
         <div class="c-name">
          <p class="remv" style="font-size:20px;">
           <b>Anil Kumar G</b>
          </p>
          <img src="assets/images/online-term-insurance-plan/rating.png" alt="rating">
         </div>
        </div>
       </div>
      </div>
      <div>
       <div class="custom-review">
        <p class="remv" style="font-size:20px;">
         <b>Fast and easy </b>
        </p>
        <!--/Lock-in Period  -->
        <p> Kotak e-Term plan was one of the recommended term plan while I was researching about the same. The service by the call centre agents was good. Also, their online portal is perfect. The Kotak e-Term plan helped me to become stress-free about any financial liability that might fall on my family, after me. </p>
        <div class="custom-rating float-right d-flex mt-30">
         <div class="p-img">
          <img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="profile-photo">
         </div>
         <div class="c-name">
          <p class="remv" style="font-size:20px;">
           <b>Apurva Amod Gadikar</b>
          </p>
          <img src="assets/images/online-term-insurance-plan/rating.png" alt="rating">
         </div>
        </div>
       </div>
      </div>
      <div>
       <div class="custom-review">
        <p class="remv" style="font-size:20px;">
         <b>Good service </b>
        </p>
        <!--/Lock-in Period  -->
        <p> Kotak e-Term plan was a term plan I came across in an ad while surfing social media. I could not find a better term plan. It is affordable and they have good service centre agents who help you with everything kindly and patiently. Buy a term plan if you want to live a stress-free life, save taxes and ensure your family’s finance is in good hands. </p>
        <div class="custom-rating float-right d-flex mt-30">
         <div class="p-img">
          <img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="profiles">
         </div>
         <div class="c-name">
          <p class="remv" style="font-size:20px;">
           <b>Rajaganesh Rj </b>
          </p>
          <img src="assets/images/online-term-insurance-plan/rating.png" alt="rating">
         </div>
        </div>
       </div>
      </div>
      <div>
       <div class="custom-review">
        <p class="remv" style="font-size:20px;">
         <b>Recommended to everyone </b>
        </p>
        <!--/Lock-in Period  -->
        <p> A term plan is one of the insurance policies everyone should have, as per me. I bought Kotak e-Term plan and paying premiums for a year or more. The best part is it offered me flexible premium payment options that aligned with my financial commitments. Plus, they have different plan options that makes it easier for choosing the right cover as per your needs. </p>
        <div class="custom-rating float-right d-flex mt-30">
         <div class="p-img">
          <img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="profile-photo">
         </div>
         <div class="c-name">
          <p class="remv" style="font-size:20px;">
           <b>Jayant Mohanrao Gaikwad </b>
          </p>
          <img src="assets/images/online-term-insurance-plan/rating.png" alt="rating">
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="varfac mt-30 mb-35 best-term-plan" id="various_factors">
   <div class="midWrapper position-relative mt-30">
    <h2 class="mb-20 term-tags fnt-24">How to Choose the Best Term Insurance Plan?</h2>
    <p>There are several factors that you need to check and compare before opting for a term insurance policy from a particular insurer. Here are some that you need to consider before buying a policy:</p>
    <!--slick counter html v-->
    <span class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>
    <!--slick counter html ^-->
    <div class="factorsslick best-term-plan">
     <div>
      <div class="typescard">
       <div class="slide-line">
        <img src="assets/images/online-term-insurance-plan/claim-settled.svg" class="" alt="Objective" title="Objective">
       </div>
       <p class="remv" style="font-size:18px;">
        <b>Claim Settlement Ratio^</b>
       </p>
       <p>Claim Settlement Ratio^ tells you how many claims have been settled from the number of claims filed for that particular year.</p>
      </div>
     </div>
     <div>
      <div class="typescard">
       <div class="slide-line">
        <img src="assets/images/online-term-insurance-plan/solvency-ratio.svg" class="" alt="Premium Payment/Lock-in Period" title="Premium Payment/Lock-in Period">
       </div>
       <p class="remv" style="font-size:18px;">
        <b>Solvency Ratio^</b>
       </p>
       <!--/Lock-in Period  -->
       <p>Solvency ratio^ is a measure of your insurance provider’s financial strength. A higher solvency ratio proves the company to be more trustworthy.</p>
      </div>
     </div>
     <div>
      <div class="typescard">
       <div class="slide-line">
        <img src="assets/images/online-term-insurance-plan/rider-benefits.svg" class="" alt="Charges Involved" title="Charges Involved">
       </div>
       <p class="remv" style="font-size:18px;">
        <b>Rider Benefits </b>
       </p>
       <p>Insurance riders like critical illness, accidental death, and permanent disability, among others, should be available to be added to your term life insurance plan.</p>
      </div>
     </div>
     <div>
      <div class="typescard">
       <div class="slide-line">
        <img src="assets/images/online-term-insurance-plan/product-details.svg" class="" alt="Monthly Expenditure" title="Monthly Expenditure">
       </div>
       <p class="remv" style="font-size:18px;">
        <b>Product Details</b>
       </p>
       <p>You should go through the terms and conditions, benefits, etc., of the policy from various insurers to find the best term insurance plan for you.</p>
      </div>
     </div>
     <div>
      <div class="typescard">
       <div class="slide-line">
        <img src="assets/images/online-term-insurance-plan/claim-settled.svg" class="" alt="Knowledge of Funds" title="Knowledge of Funds">
       </div>
       <p class="remv" style="font-size:18px;">
        <b>Medical History</b>
       </p>
       <p>Applicants must take a medical exam before acquiring term insurance policy. Medical tests help insurers determine an accurate risk cover for the insured basis the medical history.</p>
      </div>
     </div>
     <div>
      <div class="typescard">
       <div class="slide-line">
        <img src="assets/images/online-term-insurance-plan/solvency-ratio.svg" class="" alt="Inflation" title="Inflation">
       </div>
       <p class="remv" style="font-size:18px;">
        <b>Timely Decision </b>
       </p>
       <p>A term life insurance policy offers financial protection to your family in case of uncertainty. This helps you lead a stress-free life knowing that your family’s financial stability is secured.</p>
      </div>
     </div>
     <div>
      <div class="typescard">
       <div class="slide-line">
        <img src="assets/images/online-term-insurance-plan/rider-benefits.svg" class="" alt="Risk Factors" title="Risk Factors">
       </div>
       <p class="remv" style="font-size:18px;">
        <b>Long-term benefits over short-term gains </b>
       </p>
       <p>Policy term differs from one insurance company to the next. So, pick a time frame that works best for you. Don’t compare term insurance with short-term gain instruments as it only offers maturity benefits.</p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="features feat gspfeatnew termbenif" id="features_of_ulip">
   <div class="midWrapper">
    <h2 class="mb-35 mb-mob-22 term-tags fnt-24">Benefits of Term Insurance </h2>
    <div class="">
     <div>
      <div class="roww">
       <div class="coll-30">
        <div class="savingsfeat">
         <img src="assets/images/online-term-insurance-plan/high-coverage.svg" alt="high-coverage" class="">
         <h3>High Coverage at Affordable Premiums </h3>
         <p>Term insurance is crucial for your financial portfolio as it protects your family with a death benefit at very affordable premiums.</p>
        </div>
       </div>
       <div class="coll-30">
        <div class="savingsfeat">
         <img src="assets/images/online-term-insurance-plan/finanical-security.png" alt="financial" class="">
         <h3>Financial Security</h3>
         <p>Term insurance offers death benefits as a lump sum amount to the family of the policyholder. The family can use this amount to secure their child’s future or pay off any loans that might act as liabilities in the future. </p>
        </div>
       </div>
       <div class="coll-30">
        <div class="savingsfeat">
         <img src="assets/images/online-term-insurance-plan/long-term.svg" alt="long-term" class="">
         <h3> Long-Term Insurance Coverage </h3>
         <p>Term insurance offers long-term protection that starts from 5 years and extends to 75 years. It is recommended that you opt for term insurance at an early age since the premium amount is lower at an early age and offers extended protection. </p>
        </div>
       </div>
       <div class="coll-30">
        <div class="savingsfeat">
         <img src="assets/images/online-term-insurance-plan/tax-saving.png" alt="tax-saving" class="">
         <h3>Tax saving</h3>
         <p class="para-height-less">All term insurance premiums are eligible for tax exemptions under section 80C and the death benefit is eligible under Section 10 (10D). </p>
        </div>
       </div>
       <div class="coll-30">
        <div class="savingsfeat">
         <img src="assets/images/online-term-insurance-plan/cover-major.svg" alt="cover-major" class="">
         <h3>Cover for Major Illness</h3>
         <p class="para-height-less">Critical illnesses like cancer, brain tumor, blindness and loss of limbs can be very emotionally and financially difficult for both the individual and their family members. </p>
        </div>
       </div>
       <div class="coll-30">
        <div class="savingsfeat">
         <img src="assets/images/online-term-insurance-plan/protection-disability.svg" alt="protection-disability" class="">
         <h3> Protection from Disability </h3>
         <p class="para-height-less">Disability of any form might cause loss of income for an extended period of time. Therefore, by opting for a term plan, the nominee can keep the policy in force by waiving off future premiums for the insured in case of such a scenario. </p>
        </div>
       </div>
       <div class="coll-30">
        <div class="savingsfeat">
         <img src="assets/images/online-term-insurance-plan/flexibility.svg" alt="flexibility" class="">
         <h3> Flexibility in Paying Premiums </h3>
         <p class="para-height-less">You can choose premium payment options based on your requirements and financial commitments. You can go for monthly and yearly premiums. If you have a bigger corpus for the investment, you can go for the limited pay premium option. </p>
        </div>
       </div>
       <div class="coll-66">
        <div class="savingsfeat">
         <img src="assets/images/online-term-insurance-plan/secure-yourself.svg" alt="secure-yourself" class="">
         <h3>Secure Yourself against Accidental Death</h3>
         <p class="para-height-less">Accidents have become one of the major reasons for human deaths over the last few years. It is better to opt for protection against accidental death so your family is secure financially even after you. </p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="ensure term-insure" id="ensure">
   <div class="midWrapper">
    <div class="roww">
     <div class="coll-md-10 move align-self-center mr-32 txt-mob-center">
      <h2 class="parttxt" style="color:#fff!important; font-size:21px!important;letter-spacing: 0.42px!important;font-weight:700!important;">Invest in Kotak e-Term plan now. GET A CALL BACK</h2>
     </div>
     <div class="coll-md-2  mt-auto mb-auto ml-mob-initial mll-mob-initial w-mob-150 txt-mob-center">
      <a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner2" target="_blank" class="en-btn mt-12 inknw">Buy Now</a>
     </div>
    </div>
   </div>
  </section>
  <section class="features feat termplans-feture">
   <div class="midWrapper" id="what_are_the_features_of_term_plans">
    <div class="roww bor-fet-mob">
     <div class="coll-md-12 align-self-center">
      <div class="tab-detail mb-0 text-main tab-align">
       <h2 class="mb-29 term-tags fnt-24">What are the features of Term plan?</h2>
       <img class="d-block d-md-none" src="assets/images/online-term-insurance-plan/fetaure-term.png" alt="fetaure-term" class="">
       <p class="pl-0 mobile-pera">Term Plan comes with a good set of advantages and features. If you are looking forward to buying a term plan, these features can help you decide. Some of the primary features that make term plans the most attractive option include: </p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="why-buy btn-whys mb-35 mobile-why">
   <div class="midWrapper" id=" why_should_you_buy_term_insurance_plan">
    <div class="roww">
     <div class="coll-md-5 align-self-center mb-mob-34">
      <img src="assets/images/online-term-insurance-plan/fetaure-term.png" alt="Term Insurance Plan Features" title="Term Insurance Plan Features" class="d-none d-md-block">
     </div>
     <div class="coll-md-7">
      <div class="new-term-head">
       <h3 style="font-size:18px">
        <b>Affordable Premiums</b>
       </h3>
       <p>These plans come with a minimal premium cost that policy buyer must pay to receive a considerably large coverage. </p>
       <h3 style="font-size:18px">
        <b>Multiple Payment Modes</b>
       </h3>
       <p>While the low premiums already make these plans lucrative, different payment methods not only add to the benefits but also satisfy and suit a wider range of policy buyers. Depending on their convenience, they can either pay the premiums regularly, half-yearly, or annually. </p>
       <h3 style="font-size:18px">
        <b>Tax Benefits</b>
       </h3>
       <p>Earning individuals with the responsibility of running their house deal with tax payment concerns. However, investing in a term plan helps them by offering tax benefits under Section 80C of the Income Tax Act, of 1961. </p>
       <h3 style="font-size:18px">
        <b>Satisfactory Sum Assured</b>
       </h3>
       <p>Term plans are simple and low-cost and allow you to obtain the requisite sum assured at minimal premiums. </p>
       <p class="moretext"> For example: You are the only earning member of the family with a monthly income of Rs. 50,000. Your family consists of your spouse, who is a homemaker, and two children, of which one is completing their primary education and the other will soon begin college. Your family is living a comfortable life with all their basic necessities being met without any financial issues. </p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="e-invest btn-eterms  cat-e-invest mobile-invest" id="best_ulip_plan1">
   <div class="midWrapper">
    <h2 class="mb-30">Kotak Life offers a set of Term Insurance plans. You can check them out below: </h2>
    <h2 class="onlineplan" style="margin-bottom:-4px;">Term Insurance Plans</h2>
    <div class="kotak-e-term-plan kota-termplan">
     <div class="">
      <div></div>
     </div>
     <div class="feats-sec">
      <div class="d-flex ">
       <div class="neweterm">
        <h3>Kotak e-Term Plan </h3>
       </div>
       <div class="ml-auto tooltip">
        <a href=base_url."/assets/images/uploads/insurance-plans/Kotak_e-Term_Plan_Brochure_-_Online_-_20th_Jan_2022.pdf" download="Brochure">
         <button class="broch-btn want-to-btn sep-btn">
          <img src="assets/images/gspdownload.svg" alt="gspdownload" class="">
         </button>
        </a>
        <span class="tooltiptext">Download Brochure</span>
       </div>
      </div>
      <div class="roww mg-30 kotaksavcard multtask list-1 ">
       <div class="coll-md-5">
        <div class="ds-flex side">
         <ol class="">
          <li class="spec-wid spec-wid-2">Nominal Cost</li>
          <li class="spec-wid">Flexible Payouts</li>
          <li class="spec-wid">Tax Savings</li>
         </ol>
         <ol>
          <ol class=" side-1">
           <li class="spec-wid spec-wid-2 mar-top-sec">Multiple Plan Options</li>
           <li class="spec-wid-2">Critical illness Riders</li>
           <li class="spec-wid-2">Long Term Coverage </li>
          </ol>
         </ol>
        </div>
        <div class="feats-want">
         <a class="text-left mb-10" target="_blank" href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance">View Kotak e-Term Plan </a>
        </div>
        <div class="feats-buy">
         <a rel="nofollow" target="_blank" href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card">Calculate Premium </a>
        </div>
       </div>
       <div class="coll-md-6 mar-side-left d-none d-md-block">
        <img src="assets/images/online-term-insurance-plan/kotak-e-term.svg" alt="Kotak E-Term Plan" title="Kotak E-Term Plan" class="mob-heiht">
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="e-invest btn-eterms pt-0 onlinekotak-term" id="best_ulip_plan">
   <div class="midWrapper">
    <div class="row">
     <div class="coll-md-6">
      <div class="kotak-e-term-plan kota-termplan-two">
       <div class="">
        <div></div>
       </div>
       <div class="feats-sec">
        <div class="d-flex ">
         <div class="neweterm">
          <h3>Kotak Term Plan </h3>
         </div>
         <div class="ml-auto tooltip">
          <a href=base_url."/assets/images/uploads/insurance-plans/kotak-term-plan-brochure.pdf" download="Brochure">
           <button class="broch-btn want-to-btn sep-btn">
            <img src="assets/images/gspdownload.svg" alt="gspdownload" class="">
           </button>
          </a>
          <span class="tooltiptext">Download Brochure</span>
         </div>
        </div>
        <div class="roww mg-30 kotaksavcard list-1 ">
         <div class="coll-md-12 w-100">
          <div class="ds-flex side">
           <ol class="">
            <li class="spec-wid spec-wid-2">Low cost term plan </li>
            <li class="spec-wid">Optional rider options to enhance protection </li>
            <li class="spec-wid">Tax benefits under Section 80C and 10 (10D)</li>
            <li class="spec-wid">Multiple premium payment options</li>
           </ol>
          </div>
          <div class="feats-buy text-center">
           <a rel="nofollow" target="_blank" href=base_url."/insurance-plans/protection-plans/kotak-term-plan">View Kotak Term Plan </a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="coll-md-6">
      <div class="kotak-e-term-plan kota-termplan-two">
       <div class="">
        <div></div>
       </div>
       <div class="feats-sec">
        <div class="d-flex ">
         <div class="neweterm">
          <h3>Kotak Saral Jeevan Bima </h3>
         </div>
         <div class="ml-auto tooltip">
          <a href=base_url."/assets/images/uploads/insurance-plans/kotak-saral-jeevan-bima-17-march-2021.pdf" download="Brochure">
           <button class="broch-btn want-to-btn sep-btn">
            <img src="assets/images/gspdownload.svg" alt="gspdownload" class="img-size">
           </button>
          </a>
          <span class="tooltiptext">Download Brochure</span>
         </div>
        </div>
        <div class="roww mg-30 kotaksavcard list-1 ">
         <div class="coll-md-12 w-100">
          <div class="ds-flex side">
           <ol class="">
            <li class="spec-wid spec-wid-2">Long Term Coverage</li>
            <li class="spec-wid">Special Rates for Women</li>
            <li class="spec-wid">Tax Benefits Under Section 80C</li>
            <li class="spec-wid">Multiple Premium Payment modes</li>
           </ol>
          </div>
          <div class="feats-buy text-center">
           <a rel="nofollow" target="_blank" href=base_url."/insurance-plans/protection-plans/kotak-saral-jeevan-bima">View Kotak Saral Jeevan Bima </a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="difference-bwn table-different">
   <!--modal ^-->
   <div class="midWrapper" id="difference_between_term_insurance_and_life_insurance">
    <div class="d-flex mobile-d-flex">
     <div>
      <h2 class="term-tags fnt-24">Difference between Life Insurance and Term Insurance</h2>
     </div>
     <div class="ml-auto">
      <a href="assets/images/termm.png" class="modalbtn inf inf-dif" data-fancybox="gallery" data-caption="Optional caption"> Infographic View </a>
     </div>
    </div>
    <div>
     <table>
      <tr>
       <th class="w-10">Parameter</th>
       <th class="w-50">Term Insurance</th>
       <th class="w-40">Life Insurance</th>
      </tr>
      <tr>
       <td>Tenure</td>
       <td>The tenure of a term insurance ranges from 5-30 years. Kotak e-Term Plan covers for a maximum of 57 years.</td>
       <td>The tenure of a term insurance ranges from 10 to 50 years, can go up to 100 years of policyholder's age in case of whole life insurance</td>
      </tr>
      <tr>
       <td>Coverage</td>
       <td>Covers premature death of the policyholder within the tenure specified in the policy document.</td>
       <td>Covers both premature and survival till the maturity of the policy</td>
      </tr>
      <tr>
       <td>Premium </td>
       <td>Premiums are low and affordable, usually considered the cheapest insurance plan in India.</td>
       <td>Since coverage is for life, the premiums are higher compared to term plans.</td>
      </tr>
      <tr>
       <td>Death Benefit</td>
       <td>Death benefit is payable only if the policyholder passes away during the tenure of the policy.</td>
       <td>Death benefit is payable under both conditions: policyholder survives till maturity or passes away during the tenure.</td>
      </tr>
      <tr>
       <td>Maturity Benefit</td>
       <td>Usually, maturity benefit is not payable.</td>
       <td>Maturity benefit is payable under the most types of life insurance plans.</td>
      </tr>
      <tr>
       <td>Paid-Up Value</td>
       <td>Does not acquire any paid-up or surrender value</td>
       <td>When premiums are discontinued, a paid-up value is acquired. If the policyholder surrenders the policy, a surrender value is paid.</td>
      </tr>
     </table>
    </div>
   </div>
  </section>
  <section class="term-types type-term-plan">
   <div class="midWrapper" id="types_of_term_insurance_plans">
    <h2 class="term-tags fnt-24">Types of Term Insurance Plans </h2>
    <p class="fst-16 mtb-20">There are four types of term insurance plan options available while opting for a pure life cover policy:</p>
    <div class="roww">
     <div class="coll-md-6">
      <div class="type-card mr-16">
       <img src="assets/images/online-term-insurance-plan/insurance-policy.png" alt="insurance-policy">
       <h3>Basic Term Insurance Policy </h3>
       <p>The basic term policy provides you with a pure life cover wherein the beneficiary will get the death benefit in the event of your untimely death. You do not get any maturity benefits if you survive the policy term.</p>
      </div>
     </div>
     <div class="coll-md-6">
      <div class="type-card">
       <img src="assets/images/online-term-insurance-plan/insurance-plan.png" alt="insurance-plan">
       <h3> Increasing Term Insurance Plan </h3>
       <p>Increasing term insurance is a plan where the sum assured amount keeps on growing as the years go on. The death benefit may have a maximum cap on the amount to which the sum assured can increase. Such a policy also has no maturity benefit and grants you a life cover. </p>
      </div>
     </div>
     <div class="coll-md-6">
      <div class="type-card mr-16">
       <img src="assets/images/online-term-insurance-plan/decreasing-plan.png" alt="decreasing-plan">
       <h3>Decreasing Term Insurance Plan </h3>
       <p>In decreasing term plans, the amount of death benefit keeps on decreasing as the policy term comes closer to expiry. The premiums of such a plan are lower as such a policy is bought to cover certain debts or loans.</p>
      </div>
     </div>
     <div class="coll-md-6">
      <div class="type-card">
       <img src="assets/images/online-term-insurance-plan/return-policy.png" alt="return-policy">
       <h3>Term Policy with Return of Premium (TROP) </h3>
       <p>In return for a premium plan, the premiums paid throughout the policy term are refunded to you after the plan expires. The policy gives you a life cover and also returns all of your premiums upon term survival as a maturity benefit.</p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="ensure term-insure" id="ensure-day">
   <div class="midWrapper">
    <div class="roww">
     <div class="coll-md-10 move align-self-center mr-32 txt-mob-center">
      <h2 class="parttxt" style="color:#fff!important; font-size:21px!important;letter-spacing: 0.42px!important;font-weight:700!important;">Get 8.9%* discount for buying term plan online.</h2>
     </div>
     <div class="coll-md-2  mt-auto mb-auto ml-mob-initial mll-mob-initial w-mob-150 txt-mob-center">
      <a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner3" target="_blank" class="en-btn mt-12 inknw">Calculate Priemium</a>
     </div>
    </div>
   </div>
  </section>
  <section class="how-buy position-relative stepnumber-term ">
   <div class="midWrapper mb-50" id="how_to_buy_term_insurance_plan_online">
    <h2 class="mb-20 term-tags fnt-24">How to Buy Term Insurance Plan Online? </h2>
    <p class="fst-18 mx-1021 mb-35">Buying Term insurance doesn’t have to be cumbersome and complicated. Follow these simple steps to get your term insurance online without any hassle:</p>
    <div class="how-slicks">
     <div>
      <div class="roww">
       <div class="coll-md-1 text-center">
        <p class="mb-10">Step</p>
        <p class="fst-18 steps-number color-white">1</p>
       </div>
       <div class="coll-md-11 mt-mob-24">
        <h3>Estimate the Premium</h3>
        <p>You can visit the <a href=base_url."/buy-online-term-insurance/" class="sec-anc">term insurance calculator</a> page to understand the premium amount that you can pay on a regular basis. This will also allow you to calculate the requisite sum assured against the premium to be paid. </p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww">
       <div class="coll-md-1 text-center">
        <p class="mb-10">Step</p>
        <p class="fst-18 steps-number color-white">2</p>
       </div>
       <div class="coll-md-11 mt-mob-24">
        <h3>Fill the Application Form </h3>
        <p>You can now visit an insurer’s website to buy an online term insurance policy and simply fill in your personal details on the form.</p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww">
       <div class="coll-md-1 text-center">
        <p class="mb-10">Step</p>
        <p class="fst-18 steps-number color-white">3</p>
       </div>
       <div class="coll-md-11 mt-mob-24">
        <h3>Add Riders </h3>
        <p>After entering your information, you can add insurance rider benefits to the plans which are available.</p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww">
       <div class="coll-md-1 text-center">
        <p class="mb-10">Step</p>
        <p class="fst-18 steps-number color-white">4</p>
       </div>
       <div class="coll-md-11 mt-mob-24">
        <h3>Other Information </h3>
        <p>Choose other elements of the policy like premium payment frequency, policy term, etc., before proceeding to the payment page.</p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww">
       <div class="coll-md-1 text-center">
        <p class="mb-10">Step</p>
        <p class="fst-18 steps-number color-white">5</p>
       </div>
       <div class="coll-md-11 mt-mob-24">
        <h3>Make Payment </h3>
        <p>After you have selected the payment frequency, you will be able to see the premium you would need to pay regularly. Proceed to the final page and make the payment and submit the documents that are required by the insurer.</p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  </section>
  <section class="ensure term-insure" id="ensure-day">
   <div class="midWrapper">
    <div class="roww">
     <div class="coll-md-10 move align-self-center mr-32 txt-mob-center">
      <h2 class="parttxt" style="color:#fff!important; font-size:21px!important;letter-spacing: 0.42px!important;font-weight:700!important;">Don’t want higher premiums on term insurance? Buy Early to Save More</h2>
     </div>
     <div class="coll-md-2  mt-auto mb-auto ml-mob-initial mll-mob-initial w-mob-150 txt-mob-center">
      <a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner4" target="_blank" class="en-btn mt-12 inknw">Get Quote</a>
     </div>
    </div>
   </div>
  </section>
  <section class="benefits  bene term-bene position-relative term_related term-bg-insurance">
   <div class="midWrapper" id="benefits_of_term_insurances">
    <h2 class="mb-31 mb-mob-34 term-tags fnt-24">Term Insurance Terminology</h2>
    <div class="bene-slick term-bene-slicks ">
     <div>
      <div class="roww bene-para">
       <div class="coll-md-1">
        <img src="assets/images/13-layers.svg" alt="layers" class="">
       </div>
       <div class="coll-md-11">
        <h3>Sum assured (coverage): </h3>
        <p class="para_divide">Life insurance is intended to provide the insured with a death benefit. When purchasing a life insurance policy, the financial loss that may result from the death of the person assured is typically chosen as a life cover. In technical words, 'Sum Assured' refers to the amount that the insurer agrees to pay in the case of the insured person's death or the occurrence of any other covered event. </p>
        <p>When comparing policies online, purchasing a life insurance policy, or reading the policy page, you may come across the word "sum assured." The sum assured is the amount paid to the nominee by the life insurance company if the covered individual dies within the policy's term. The policyholder selects the sum assured at the time of purchase. </p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="coll-md-1">
        <img src="assets/images/5-layers.svg" alt="layers" class="">
       </div>
       <div class="coll-md-11">
        <h3>Nominee:</h3>
        <p>The 'nominee' is the person (legal heir) named by the policyholder to whom the life insurance company would pay the sum assured and other benefits in the event of an untimely death. The nominee could be the policyholder's wife, child, parents, or others. If the life assured dies within the policy's term, the nominee must file a claim for life insurance.</p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="coll-md-1">
        <img src="assets/images/19-layers.svg" alt="layers" class="">
       </div>
       <div class="coll-md-11">
        <h3>Policy tenure:</h3>
        <p class="para_divide">The 'policy tenure' refers to the length of time that the policy offers life insurance coverage. Depending on the type of life insurance plan and its terms and circumstances, the policy tenure might range from one year to 100 years or whole life. It is frequently referred to as a policy term or policy duration. </p>
        <p>The policy duration determines how long the organisation will provide risk coverage. In the case of whole life insurance plans, however, the life coverage lasts until the person assured dies. </p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="coll-md-1">
        <img src="assets/images/7-layers.svg" alt="layers" class="">
       </div>
       <div class="coll-md-11">
        <h3>Maturity age:</h3>
        <p>The maturity age of the life guaranteed is the age at which the policy ceases or terminates. This is similar to policy tenure, but it expresses how long the plan will be in effect in a different way. Essentially, the life insurance company declares the maximum age at which the life insured will receive life insurance coverage. For example, suppose you are 30 years old and choose a term plan with a maturity age of 65 years. That means the policy will cover you until you reach the age of 65, which means the maximum policy tenure for a 30-year-old is 35 years. </p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="coll-md-1">
        <img src="assets/images/9-layers.svg" alt="layers" class="">
       </div>
       <div class="coll-md-11">
        <h3>Premium:</h3>
        <p class="para_divide">The premium is the amount you pay to keep your life insurance policy active and continue to receive coverage. If you are unable to pay the premium by the due date or even within the grace period, the insurance will be cancelled. </p>
        <p>There are several ways to pay the premium: regular payments, limited payment terms, and single payments. </p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="coll-md-1">
        <img src="assets/images/5-layers (1).svg" alt="layers" class="">
       </div>
       <div class="coll-md-11">
        <h3>Premium payment term:</h3>
        <p class="para_divide">You can pay your life insurance premium whenever convenient. Regular Premium Payment - You can pay premiums on a monthly, quarterly, half-yearly, or yearly basis throughout the insurance term. Premium Payment for a Limited Period - You can select to pay premiums for a set period of time. In this case, you may not until the conclusion of the policy term, but for a set number of years. For example, ten years, fifteen years, twenty years, and so on. </p>
        <p>Single Premium Payment - You can also pay the premium for the entire period of the plan in one lump sum. </p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="coll-md-1">
        <img src="assets/images/8-layers.svg" alt="layers" class="">
       </div>
       <div class="coll-md-11">
        <h3>Riders:</h3>
        <p class="para_divide">Riders are paid-for extras that extend the scope of the base life insurance policy. Riders are purchased at the time of purchase or on the anniversary of the insurance. Riders of various varieties can be purchased in addition to the standard plan. However, the quantity and type of riders will vary by insurance. </p>
        <p class="para_divide">Furthermore, the terms and conditions of each insurance may differ. Here is a list of some well-known riders provided by life insurance providers.</p>
        <ul class="li_font">
         <li>Accidental Death Benefit Rider</li>
         <li>Accidental Total and Permanent Disability Benefit Rider</li>
         <li>Critical Illness Cover</li>
         <li>Premium Waiver</li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="right_time_to_buy">
   <div class="midWrapper">
    <h2 class=" mb-mob-34 term-tags fnt-24">When is the Right Time to buy Term Insurance?</h2>
    <p class="fst-18 mx-1021 mb-35">The best time to purchase a term insurance policy is as soon as possible.</p>
    <p class="fst-18 mx-1021 mb-35">As you get older, your risks of developing lifestyle diseases rise, as do your insurance expenses. When you get a term plan at a young age, you get an insurance policy with a low premium. As a result, it may be prudent to purchase term life insurance when you are young. Furthermore, it will give you and your family extended coverage and financial stability from a young age.</p>
    <div class="roww">
     <div class="coll-33">
      <div class="lum_sum1">
       <h3 class=" mb-mob-34 term-tags fnt-24">Payout options in Term Life Insurance?</h3>
       <p class="para_buy">For your term insurance coverage, you can choose one of the following payout options:</p>
      </div>
     </div>
     <div class="coll-33">
      <div class="lum_sum">
       <img src="assets/images/6-layers.svg" alt="layers" class="">
       <h3>One-Time Lump-Sum Payout</h3>
       <p>If you choose this option, your nominee will get the entire amount owed to them in a single payment. If the total sum assured is ₹2 Cr., for example, your nominee will receive the entire amount once their claim is accepted. </p>
      </div>
     </div>
     <div class="coll-33">
      <div class="lum_sum">
       <img src="assets/images/18-layers.svg" alt="layers" class="">
       <h3>One-Time Lump-Sum Payment with Fixed Monthly /Annual Payouts</h3>
       <p>In this option, the nominee will receive a portion of the sum assured as a lump-sum and the remaining sum will be distributed in monthly/annual instalments. </p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="varfac mt-30 mb-50 term-insur-family" id="various_factors">
   <div class="midWrapper position-relative mt-30">
    <h2 class="mb-20 term-tags">Why do you need Term Insurance? </h2>
    <p>Despite the numerous features and benefits of term insurance policies, some consumers are unsure how these policies will affect them. Here are three important reasons why you need term insurance:</p>
    <!--slick counter html ^-->
    <div class="factor-ulip secure-slicks best-term-plan row">
     <div class="coll-md-4 fact-bg">
      <div class="typescard">
       <div class="slide-line">
        <img src="assets/images/online-term-insurance-plan/family.png" class="" alt="Objective" title="Objective">
       </div>
       <h3>To Protect Your Family</h3>
       <p>Your family is emotionally and financially dependent on you. You might wish to help your parents save for retirement or pay for your child’s college tuition. Even if you were to die, the payout from a term plan might help your family realise their goals.</p>
      </div>
     </div>
     <div class="coll-md-4 fact-bg">
      <div class="typescard">
       <div class="slide-line">
        <img src="assets/images/online-term-insurance-plan/protect.png" class="" alt="Premium Payment/Lock-in Period" title="Premium Payment/Lock-in Period">
       </div>
       <h3> To Protect Your Assets</h3>
       <!--/Lock-in Period  -->
       <p> We all take loans to buy assets and pay EMIs to complete these payments. If something was to happen to you in the meantime, your family would be under the pressure of this liability. A term plan payout can help them take care of these liabilities. </p>
      </div>
     </div>
     <div class="coll-md-4 fact-bg">
      <div class="typescard">
       <div class="slide-line">
        <img src="assets/images/online-term-insurance-plan/save-life.png" class="" alt="Charges Involved" title="Charges Involved">
       </div>
       <h3>To Cope with New Lifestyle Risks</h3>
       <p> Every day, we read about the rise in lifestyle diseases and the occurrence of serious disorders like heart disease and cancer. Your term plan can provide some financial assistance as you deal with such a diagnosis and prepare for rehabilitation and recuperation. </p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="features feat bg-eb gspfeatnew insurance-prem" id="insurance-premium">
   <div class="midWrapper">
    <h2 class="term-tags">What factors can influence term insurance premiums? </h2>
    <p class="mb-35 mb-mob-22">Your term insurance premium is determined by a number of factors, including</p>
    <div class="">
     <div>
      <div class="roww">
       <div class="coll-30">
        <div class="savingsfeat">
         <h3>
          <span class="red-num">1</span>Health and Medical History
         </h3>
         <p>When you buy a term plan, you must answer medical history questions and supply information about your family members. Heart attacks and kidney failure can be passed down from parents to children. If you or a member of your family has a history of certain health issues, your premium may rise. </p>
        </div>
       </div>
       <div class="coll-30">
        <div class="savingsfeat">
         <h3>
          <span class="red-num">2</span>Age
         </h3>
         <p>Young and healthy people are deemed low risk. Thus, their rates are cheaper than those who are older and may have health issues. </p>
        </div>
       </div>
       <div class="coll-30">
        <div class="savingsfeat">
         <h3>
          <span class="red-num">3</span>Lifestyle Habits
         </h3>
         <p>Individuals who regularly participate in adventure sports, consume alcohol and smoke or consume tobacco in other forms are considered high risk. As a result, insurance firms charge them greater premiums. To avoid having your nominee's claim rejected later, you must honestly state these circumstances while applying for term insurance. </p>
        </div>
       </div>
       <div class="coll-30">
        <div class="savingsfeat">
         <h3>
          <span class="red-num">4</span>Profession
         </h3>
         <p class="para-height-less">Certain people have occupations that put them in dangerous situations every day. Sailors, pilots, and individuals who operate with hazardous products may have to pay greater rates than their less dangerous colleagues. </p>
        </div>
       </div>
       <div class="coll-30">
        <div class="savingsfeat">
         <h3>
          <span class="red-num">5</span>Gender
         </h3>
         <p class="para-height-less">According to studies, women lives longer than males. As a result, insurance firms frequently offer women lower premium rates because they may outlive men of the same age.</p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="benefits bene term-bene term-rider position-relative mt-50 term-plain-rider">
   <div class="midWrapper" id="term-rider">
    <h2 class="mb-20 mb-mob-34 term-tags fnt-24"> What is Term Rider? </h2>
    <!--slick counter html v-->
    <p class="mb-20">A term insurance rider is add-on protection that may be purchased in addition to the base plan. Riders are available for an extra fee in addition to the premium and can be selected based on your needs. A terminal disease rider, a critical sickness benefit, an accidental death benefit, and a permanent disability rider are all examples of riders.</p>
    <p>So, what are the different life insurance riders?</p>
    <!--slick counter html ^-->
    <div class="bene-slick term-bene-slicks mt-30">
     <div>
      <div class="roww bene-para">
       <div class="rider-img">
        <img src="assets/images/online-term-insurance-plan/terminal-illuness.png" alt="terminal-illuness" class="">
       </div>
       <div class="coll-md-11">
        <h3>Terminal illness rider: </h3>
        <p>Terminal Illness is defined as a high likelihood of death within the next six months as determined by medical practitioners who specialise in the field. Terminal illnesses are not only life-threatening, but they can also have a substantial financial impact. The terminal illness benefit is offered with all plan types and includes coverage for AIDS. In the event of a terminal illness, the full death benefit is paid. </p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="rider-img">
        <img src="assets/images/online-term-insurance-plan/parement-dia.png" alt="parement-dia" class="">
       </div>
       <div class="coll-md-11">
        <h3>Waiver of premium due to permanent disability: </h3>
        <p>It keeps your life insurance coverage valid even if you are unable to pay your premiums. This policy has the effect of waiving all future premiums in the event of permanent disability, but the policy benefits continue for the duration of the policy.</p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="rider-img">
        <img src="assets/images/online-term-insurance-plan/critical-illuness.png" alt="critical-illuness" class="">
       </div>
       <div class="coll-md-11">
        <h3>Critical illness cover: </h3>
        <p>Under this rider, you pay an additional fee to be covered if you are diagnosed with any of the critical illnesses listed in the policy agreement. The benefit, which functions similarly to an income replacement plan, can be used to cover both medical and domestic expenses. Though the critical illnesses covered by the insurance may differ from one insurer to the next, the rider covers some ailments such as cancer, heart attack, brain tumour, and others. </p>
       </div>
      </div>
     </div>
     <div>
      <div class="roww bene-para">
       <div class="rider-img">
        <img src="assets/images/online-term-insurance-plan/accedent-illuness.png" alt="accedent-illuness" class="">
       </div>
       <div class="coll-md-11">
        <h3>Accidental death benefit: </h3>
        <p>You pay an additional sum for this benefit to cover your family in the event of accidental death. When you choose accidental death benefit coverage, the insurer may pay your nominee up to double the sum assured. </p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="whyinvest mobile-whyinvest" id="document_in_ulips">
   <div class="midWrapper">
    <div class="roww  m-0">
     <div class="coll-md-5 text-center">
      <img src="assets/images/online-term-insurance-plan/document-term-insurance.svg" class="mt-mob-23" alt="Documents required to Buy Term Insurance" title="Documents required to Buy Term Insurance">
     </div>
     <div class="coll-md-7">
      <h2 class="mb-35 term-tags savtxt mt-mob-28 gspwhattxt fnt-24">Documents required for Term Insurance?</h2>
      <div class="gsp-buy document-ulips">
       <p> A recent picture of the policyholder </p>
       <p>PAN duplicate</p>
       <p>
        <b>Proof of address</b> - This can be any of the following: Aadhaar (front and back)/Driving License/Passport (front and back)
       </p>
       <p>
        <b>Income evidence </b> - Keep in mind that your income proof should match your claimed annual income. Additionally, for salaried applicants: Last three months' pay stubs/form 16/last three years' ITR/last six months' bank statement where salary is credited Non-salaried applicants should: ITR for the previous three years with the income computation.
       </p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="who-buy">
   <div class="midWrapper" id="who_should_buy_a_term_insurance_policy">
    <h2 class="mb-35 mb-mob-20 term-tags fnt-24">How does Term Plan work?</h2>
    <div class="roww mb-mob-25">
     <div class="coll-md-7">
      <ul class="mx-621 plan-works">
       <li>Under the specified term insurance plan, a lump sum amount is payable to your family in the event of the policyholder's death.</li>
       <li>You can choose to receive term insurance benefits in the form of regular monthly /annual income or a lump sum payment based on the variant selected.</li>
       <li>Riders can be added to the base term insurance plan to provide enhanced benefits in the event of accidental death, disability, or critical illness for a low cost.</li>
      </ul>
     </div>
     <div class="coll-md-5 align-self-center">
      <img src="assets/images/online-term-insurance-plan/plan-work.svg" alt="How Term life Insurance works" title="How Term life Insurance works" class="mt-neg-7">
     </div>
    </div>
   </div>
  </section>
  <section class="whyinvest term-secur-family" id="document_terms">
   <div class="midWrapper">
    <div class="roww  m-0 align-item-center">
     <div class="coll-md-5 text-center">
      <img class="d-none d-md-block" src="assets/images/online-term-insurance-plan/term-plan-secure.jpg" class="mt-mob-23" alt="Secure Your family with Term" title="Secure Your family with Term">
     </div>
     <div class="coll-md-7">
      <div class="document-term-family">
       <h2 class="mb-20 term-tags savtxt mt-mob-28 gspwhattxt fnt-24">How does a term plan secure your family’s future</h2>
       <div class="gsp-buy ">
        <p> You are accountable for the general well-being of your spouse, parents, and children as an earning member of your family. Purchasing term insurance is critical to ensuring that your duties to your loved ones are met even when you are not here. In today's fast-paced world, with mounting uncertainties such as COVID-19 disease, every family requires financial security through a term plan to deal with the financial burden of losing a loved one, particularly the breadwinner. It also assists the family in repaying any debts, such as a vehicle loan or a home loan.</p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="whyinvest pb-0 term-keyfeat">
   <div class="midWrapper">
    <div class="roww  m-0">
     <div class="coll-md-5">
      <h2 class="mb-35 term-tags savtxt mt-mob-28 gspwhattxt fnt-24">Key Features</h2>
      <div class="gsp-buy document-ulips fnt-incr">
       <p>Term insurance provides the following benefits:</p>
       <p> Long-term life insurance </p>
       <p>Flexibility in premium payment and benefits payout</p>
       <p>The entry age is 18 years old.</p>
       <p>Higher coverage- low premiums</p>
       <p>Online purchases that are both quick and secure</p>
       <p>Additional coverage for critical illness</p>
       <p>Additional coverage for accidental disability</p>
       <p>Tax savings and Death benefit</p>
      </div>
     </div>
     <div class="coll-md-7">
      <h2 class="mb-35 term-tags savtxt mt-mob-28 gspwhattxt fnt-24">Term Insurance Plan Variants</h2>
      <div class="difference-bwn keyfeat">
       <table>
        <tr>
         <th class="w-50">Plan Variants</th>
         <th class="w-50">Benefits in Brief</th>
        </tr>
        <tr>
         <td>Basic Term Insurance</td>
         <td>For a low premium, you can get a death benefit in the form of a lump sum.</td>
        </tr>
        <tr>
         <td>Monthly /Annual Income Term Insurance</td>
         <td>Regular, consistent income for the family, as well as a death benefit</td>
        </tr>
        <tr>
         <td>Monthly / Annual Income Increases with Term Insurance</td>
         <td>Increasing family income while also providing a death benefit</td>
        </tr>
        <tr>
         <td>Term Plan with Premium Refund</td>
         <td>Return of premiums paid in case of survival till end of policy term. Death benefit throughout insurance period</td>
        </tr>
       </table>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="how-much ">
   <section class="ensure term-insure term-day" id="ensure-days">
    <div class="midWrapper">
     <div class="roww">
      <div class="coll-md-10 move align-self-center mr-32 txt-mob-center">
       <h2 class="parttxt" style="color:#fff!important; font-size:21px!important;letter-spacing: 0.42px!important;font-weight:700!important;">Buy a term insurance plan that fits your requirements.</h2>
      </div>
      <div class="coll-md-2  mt-auto mb-auto ml-mob-initial mll-mob-initial w-mob-150 txt-mob-center">
       <a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner5" target="_blank" class="en-btn mt-12 inknw">Check Eligibility</a>
      </div>
     </div>
    </div>
   </section>
   <div class="midWrapper" id="how_much_term_insurance_plan_cover_do_you_need">
    <h2 class="mb-20 term-tags fnt-24">How Much Term Insurance Plan Cover Do You Need? </h2>
    <div class="roww">
     <div class="coll-md-7 mb-mob-30 w-mob-100">
      <p class="mx-632 fst-18">You can calculate the amount of coverage you require with the concept of Human Life Value (HLV). HLV calculates the economic loss your family will suffer in case of an unfortunate incident. It considers certain aspects like your current age and proposed retirement age, present total savings, monthly expenses, future expenditures like buying a home, higher education for your children, etc., and debts like home loans, etc. Such a concept is beneficial in determining the life insurance coverage that would be needed to ensure your family’s financial security in your absence. You can also use the insurance coverage calculator by entering your details and proceeding to estimate the sum assured for your policy.</p>
     </div>
     <div class="coll-md-5 align-self-center text-center w-mob-100">
      <img src="assets/images/online-term-insurance-plan/need-coverage.svg" alt="How Much Term Insurance Cover You Need" title="How Much Term Insurance Cover You Need" class="mt-neg-7">
     </div>
    </div>
   </div>
  </section>
  <section class="covid-content bg-eb mb-30">
   <div class="midWrapper mt-30">
    <div class="covid-cont">
     <h2 class="mb-20 term-tags fnt-24"> Why Do You Need to Buy Term Insurance during Covid-19? </h2>
     <p>We live in a time when health problems and financial difficulties are all too common. Covid-19 has only emphasised the significance of a stable future for families. Such difficulties are frequently painful and expensive for sufferers.</p>
     <p>The calculated cost of medical therapy can reach lakhs of rupees from the detection of Covid-19 in a patient to the end of their routine treatment. If sadly, the earning member dies, this can result in significant financial strain. A term insurance policy can successfully help the policyholder's family relieve this stress.</p>
     <p> The number of life insurance claims has increased significantly in the last two years as a result of the Covid-19 crisis. In order to mitigate the impact of this worldwide disaster, insurers have spread out their portfolios. However, this may result in a rise in term plan rates. Nowadays, having a term plan worth at least ₹50 lakhs is required to protect your dependents in the event of a medical emergency.</p>
     <p>As a result, it is critical to obtain term insurance as early in life as feasible. Delaying this purchase not only exposes your loved ones but also becomes a larger price later as the cost of the premium rises with age. Ideally, the greatest time to get a term plan is in your 20s or 30s, when you may choose from a wide range of term plans at the most affordable pricing. </p>
    </div>
   </div>
  </section>
  <section class="term-blog">
   <div class="midWrapper">
    <div class="term-blog ">
     <h2 class="mb-20 term-tags fnt-24">Term Insurance Related Blogs </h2>
     <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck term-bene-slick" id="articles-div">
      <li style="height: 434px;">
       <div class="img">
        <div class="reportBox">
         <a href=base_url."/insurance-guide/protection/types-of-life-insurance-policies-in-hindi-" class="rem-pos-an">
          <img src="assets/images/uploads/insurance-guides/articles/Enhancing-personal-wealth-and-protection1.jpg" alt="Topic Icon">
         </a>
         <div class="detail">
          <ul class="dateInfo">
           <li>25th Oct 2022</li>
           <li>
            <a href="javascript:;" class="views">2,425</a>
           </li>
          </ul>
          <h3 id="ptext3">भारत में जीवन बीमा कितने प्रकार के होते हैं?</h3>
          <p id="ptext4">क्या आप इस बात पर बहस कर रहे हैं कि आपके लिए किस प्रकार का बीमा सबसे अच्छा होगा? भारत में उपलब्ध विभिन्न बीमा विकल्पों के बारे में जानें और निर्धारित करें कि कौन सा बीमा आपकी ज़रूरतों को पूरा करता है।</p>
          <div class="d-flex w-100 justify-content-end">
           <a href=base_url."/insurance-guide/tag/life-insurance-plan" class="some-text">Life insurance plan</a>
           <a href=base_url."/insurance-guide/protection/types-of-life-insurance-policies-in-hindi-" class="links">Read more</a>
          </div>
         </div>
        </div>
       </div>
      </li>
      <li style="height: 434px;">
       <div class="img">
        <div class="reportBox">
         <a href=base_url."/insurance-guide/protection/how-to-buy-a-term-life-insurance-online-in-hindi" class="rem-pos-an">
          <img src="assets/images/uploads/insurance-guides/articles/Protection-for-your-family4.jpg" alt="Topic Icon">
         </a>
         <div class="detail">
          <ul class="dateInfo">
           <li>25th Oct 2022</li>
           <li>
            <a href="javascript:;" class="views">2,436</a>
           </li>
          </ul>
          <h3 id="ptext3">जीवन बीमा पॉलिसी लेने की प्रक्रिया क्या है?</h3>
          <p id="ptext4">ऑनलाइन जीवन बीमा खरीदारी काफी किफायती है। जानिए आपको ऑनलाइन बीमा क्यों खरीदना चाहिए. इस लेख के माध्यम से जानिए टर्म लाइफ इंश्योरेंस ऑनलाइन कैसे खरीदें</p>
          <div class="d-flex w-100 justify-content-end">
           <a href=base_url."/insurance-guide/tag/life-insurance-plan" class="some-text">Life insurance plan</a>
           <a href=base_url."/insurance-guide/protection/how-to-buy-a-term-life-insurance-online-in-hindi" class="links">Read more</a>
          </div>
         </div>
        </div>
       </div>
      </li>
      <li style="height: 434px;">
       <div class="img">
        <div class="reportBox">
         <a href=base_url."/insurance-guide/protection/insurance-policy-for-housewife-in-india-in-hindi" class="rem-pos-an">
          <img src="assets/images/uploads/insurance-guides/articles/Customising-investments-to-manage-your-wealth.jpg" alt="Topic Icon">
         </a>
         <div class="detail">
          <ul class="dateInfo">
           <li>11th Oct 2022</li>
           <li>
            <a href="javascript:;" class="views">2,260</a>
           </li>
          </ul>
          <h3 id="ptext3">भारत में गृहणियों के लिए टर्म इंश्योरेंस</h3>
          <p id="ptext4">गृहणियों के लिए टर्म प्लान के साथ, आप अपनी अनुपस्थिति में अपने परिवार की भावनात्मक और वित्तीय भलाई को रोक सकते हैं। यहां आपको भारत में गृहिणियों के लिए बीमा के बारे में जानने की जरूरत है।</p>
          <div class="d-flex w-100 justify-content-end">
           <a href=base_url."/insurance-guide/tag/life-insurance-plan" class="some-text">Life insurance plan</a>
           <a href=base_url."/insurance-guide/protection/insurance-policy-for-housewife-in-india-in-hindi" class="links">Read more</a>
          </div>
         </div>
        </div>
       </div>
      </li>
     </ul>
     <div class="load-more mt-30 w-100 float-left">
      <a class="l-more" href=base_url."/insurance-guide/about-life-insurance">Load More</a>
     </div>
    </div>
   </div>
  </section>
  <section class="what-policy-period" id="what_policy_period_should_you_opt_for">
   <div class="midWrapper">
    <h2 class="mb-20 term-tags fnt-24">What Policy Period should you opt for? </h2>
    <p class="fst-18 mx-1030 mb-27">A term insurance policy tenure starts from 5 years to a maximum of 40-45 years to cover you from unforeseen incidents. Some insurers also provide a life cover that is valid until you reach 99 years of age if you have dependents that would need financial aid in your absence. While deciding your policy period, you should consider the number of dependents you have, any debts or loans present in your name, etc. After this, you should consider how many years it would take for your dependents to become self-sufficient and the repayment tenure of your debts. You will be able to come up with the policy term you should choose to secure your loved ones.</p>
   </div>
  </section>
  <!-- term_insurance_faqs -->
  <section class="what-policy-period" id="term_insurance_faqs">
   <div class="midWrapper">
    <h2 class="mb-20 term-tags fnt-24">Term Insurance Frequently Asked Questions </h2>
    <div class="accordion-div accordion-btns mt-mob-15">
     <div class="bor">
      <div class="accordion bor-top-zero" role="heading" aria-level="3">
       <span>1</span>
       <h3>What is a term insurance plan? What are its benefits</h3>
      </div>
      <div class="panel tab-detail mb-0 tab-align">
       <p> Term insurance Plan is a policy which provides pure protection to your family in the event of your death. It is the most basic type of life insurance plan that is available in the market. You are able to avail higher life coverage at an affordable premium and also add riders to maximize your coverage. Read more about <a href=base_url."/insurance-guide/protection/what-is-term-insurance" class="sec-anc">term life insurance plans and its features.</a>
       </p>
      </div>
     </div>
     <div class="bor">
      <div class="accordion">
       <span>2</span>
       <h3>What are the tax benefits of a term insurance plan? </h3>
      </div>
      <div class="panel tab-detail mb-0 tab-align">
       <div class="">
        <p>A major advantage of investing in the best-term insurance plan is the tax benefit offered by the Income Tax Act 1961. The ITA offers numerous exemptions and deductions, thus reducing taxpayers’ liability where the insurance premiums can be claimed under Section 80C , and the death benefit can be availed as tax-free under Section 10 (10D). Read more to know about term insurance-related income tax deductions you can claim.</p>
       </div>
      </div>
     </div>
     <div class="bor">
      <div class="accordion">
       <span>3</span>
       <h3>How does a term insurance policy work?</h3>
      </div>
      <div class="panel tab-detail mb-0 tab-align">
       <div class="">
        <p> Term insurance operates on principles of pure insurance. While being simple and low-cost, it is a very effective mode of insurance wherein the assured person is covered against the risks of mortality. The premium depends upon the sum assured and the age of the assured person. The younger the person, the lower the premium because the insurance company perceives the risk of mortality, i.e. death of a young and healthy person, to be very less. Know more about. <a href=base_url."/insurance-guide/protection/how-does-term-life-insurance-work-learn-the-benefits" class="sec-anc">how a term life insurance plan works.</a>
        </p>
       </div>
      </div>
     </div>
     <div class="bor">
      <div class="accordion">
       <span>4</span>
       <h3>Is buying a term life insurance plan worth it?</h3>
      </div>
      <div class="panel tab-detail mb-0 tab-align">
       <div class="">
        <p>Yes, a term policy is worth it as the plan provides you with a life cover at an affordable premium when compared to other policies. You are also able to add rider benefits to maximize your coverage and secure yourself from certain unfortunate conditions. Know more about the <a href=base_url."/insurance-guide/protection/is-it-worth-investing-in-insurance" class="sec-anc">pros of buying term life insurance online.</a>
        </p>
       </div>
      </div>
     </div>
     <div class="bor">
      <div class="accordion">
       <span>5</span>
       <h3>What is the premium for a term insurance plan?</h3>
      </div>
      <div class="panel tab-detail mb-0 tab-align">
       <div class="">
        <p>The premium of a term insurance plan depends on various factors like age, gender, health reports, past medical history, and lifestyle habits, among others. After you add riders to your plan, select the sum assured, choose the payment frequency, and the tenure of your policy, you will get the final premium payable. Know much to pay by <a href=base_url."/buy-online-term-insurance/" class="sec-anc"> calculating the premium for term life insurance online. </a>
        </p>
       </div>
      </div>
     </div>
     <div class="bor">
      <div class="accordion">
       <span>6</span>
       <h3>How to pay term insurance plan premium online?</h3>
      </div>
      <div class="panel tab-detail mb-0 tab-align">
       <div class="">
        <p>You can pay your term insurance plan premium online modes via net banking and debit/credit card, among others. Read more about <a href=base_url."/how-do-i/pay-my-premium" class="sec-anc">online premium payment options.</a>
        </p>
       </div>
      </div>
     </div>
     <div class="bor">
      <div class="accordion">
       <span>7</span>
       <h3>How much should be the ideal coverage for a term life insurance plan?</h3>
      </div>
      <div class="panel tab-detail mb-0 tab-align">
       <div class="">
        <p>The amount of coverage varies from person to person and depends on how many dependents you have. Before you assign a vague number to your sum assured, <a href=base_url."/insurance-guide/about-life-insurance/what-is-human-life-value-and-a-human-life-value-calculator" class="sec-anc">know how much coverage you need.</a>
        </p>
       </div>
      </div>
     </div>
     <div class="bor">
      <div class="accordion">
       <span>8</span>
       <h3> Is there a term insurance plan for smokers?</h3>
      </div>
      <div class="panel tab-detail mb-0 tab-align">
       <div class="">
        <p> If you are a smoker, then you are not only spending money on cigarettes, but you are also increasing your chances of an early demise. One thing that insurance providers know is that smoking habits can have different effects on different people. Therefore, the term insurance plan for smokers comes in three different categories. Know more about the <a href=base_url."/insurance-guide/about-life-insurance/how-do-term-insurance-plans-differ-for-smokers" class="sec-anc">term plan for smokers.</a>
        </p>
       </div>
      </div>
     </div>
     <div class="bor">
      <div class="accordion">
       <span>9</span>
       <h3>What kind of deaths are not covered in a term life insurance policy?</h3>
      </div>
      <div class="panel tab-detail mb-0 tab-align">
       <div class="">
        <p>While opting for a term plan, it is important to know the kind of deaths that don’t get covered in your plan in order to ensure that your family’s insurance claim is not rejected. Some of them are suicide, death during childbirth, death due to certain dangerous activity, etc. Get detailed information about the <a href=base_url."/insurance-guide/about-life-insurance/different-kind-of-deaths-that-are-not-covered-in-a-term-insurance-plan" class="sec-anc">deaths not covered under term life insurance plan. </a>
        </p>
       </div>
      </div>
     </div>
     <div class="span-mar">
      <div class="bor">
       <div class="accordion">
        <span>10</span>
        <h3> Does a term insurance plan pay for suicidal death in India?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p> Suicidal death is not covered in the first year of the policy term and starts getting included in the cover after the second year. If the policy holder commits suicide in the first year, then the claim gets rejected and no death benefit is paid out. Read more about the <a href=base_url."/insurance-guide/about-life-insurance/does-life-insurance-pay-for-suicidal-death" class="sec-anc">insurance cover for death by suicide </a>and the terms and conditions regarding it. </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>11</span>
        <h3>Between term a insurance and traditional life insurance, which plan is beneficial? </h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>Traditional life insurances provide you with a maturity benefit along with a life cover whereas term insurance plans give you pure life cover at affordable premiums. To compare the two plans better and choose between them, read about <a href=base_url."/insurance-guide/about-life-insurance/what-should-one-consider-buying-term-insurance-or-traditional-life-insuranc" class="sec-anc">‘Term Insurance v/s Traditional Life Insurance’. </a>
         </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>12</span>
        <h3>What is a term insurance calculator?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>
          <a href=base_url."/buy-online-term-insurance/" class="sec-anc">A term insurance calculator </a>determines the premium rate that you will have to pay regularly to secure a term plan. The premium amount to be paid depends on several factors like your age, health records, the sum assured, and the policy term. The term insurance premium calculator helps you learn the future needs of your family and choose the best term plan available in the market to fit your budget. Read all about <a href=base_url."/insurance-guide/protection/all-about-term-insurance-calculator" class="sec-anc">term life insurance calculator and its benefits.</a>
         </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>13</span>
        <h3>What are riders in a term insurance plan?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>
          <a href=base_url."/insurance-plans/insurance-plan-riders" class="sec-anc">Riders in insurance</a> are basically contingent add-ons or supplementary benefits granted over and above a primary term policy in the event of an unforeseen incidence. They aim at expanding or amending the basic life insurance coverage at an additional cost. This means that they offer extended financial cover above the primary sum assured in a life insurance policy. You can avail a critical illness rider, accidental death rider, and a permanent disability rider with Kotak e-Term. Read more about the <a href=base_url."/insurance-guide/protection/what-are-insurance-riders-and-how-to-choose-them-in-a-term-plan" class="sec-anc">different types of insurance riders. </a>
         </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>14</span>
        <h3>What is a critical illness rider?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>A rider is an additional benefit on your term insurance plan, and it will come into play in case of a specific eventuality, like getting diagnosed with a critical illness. You will receive a lump sum upon diagnosis of one of the covered illnesses which will act as a tool for income replacement and to take care of the medical expenses. Read more about the <a href=base_url."/insurance-guide/about-life-insurance/benefits-of-term-insurance-with-critical-illness-rider" class="sec-anc"> benefits of critical illness rider </a> with term plan. </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>15</span>
        <h3>How to choose the right term insurance plan?  </h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>When it comes to identifying the best term plan, one must always consider and evaluate several factors like solvency ratio, claim settlement ratio, and insurance riders. Learn how to choose the right policy here and get the best term insurance plan. Read more about <a href=base_url."/insurance-guide/protection/how-to-identify-term-insurance-according-to-your-needs" class="sec-anc">how to choose the best term policy </a> and get the best term life insurance plan </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>16</span>
        <h3>What should be the ideal policy term for a term plan?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>Once you have decided that you want to buy online term insurance policy, you need to choose the right policy term. The policy period should be as long as the period your family will require to gain financial independence. Read more to know <a href=base_url."/insurance-guide/protection/how-to-identify-term-insurance-according-to-your-needs" class="sec-anc">how to pick the right policy tenure. </a>
         </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>17</span>
        <h3>When is the right time to buy a term insurance plan?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>The right time to buy a term life insurance is when you are younger. In your early twenties and thirties, the premiums are cheaper due to younger age and a healthier lifestyle. Know the benefits of <a href=base_url."/insurance-guide/about-life-insurance/why-one-must-buy-term-insurance-before-25-years" class="sec-anc">buying a term plan before 25. </a>
         </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>18</span>
        <h3>What are the payment options in a term insurance plan?  
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>There are various premium payment frequencies and modes of payment for term insurance plan. Such options enable you to make payments as per your convenience. Read more about the numerous <a href=base_url."/insurance-guide/about-life-insurance/various-term-insurance-premium-payment-options-available-in-india" class="sec-anc">insurance premium payment options </a> you can avail. </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>19</span>
        <h3> Should I buy a term insurance plan online or offline?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>You can buy term insurance plan via both online and offline mode. To purchase a term plan online, you can visit and proceed to <a href=base_url."/buy-online-term-insurance/" class="sec-anc"> buy term insurance online</a> by submitting your details. For offline mode, you can visit the nearest Kotak Life branch and connect with the concerned person. </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>20</span>
        <h3>Who determines the term insurance premium? </h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>Term insurance premium is calculated by statistics and calculation based on the risk factors. You can calculate the premium of your term plan online based on factors below: </p>
         <ul>
          <li>Age </li>
          <li>Gender </li>
          <li> Occupation </li>
          <li> Geographical location </li>
          <li> Height and Weight </li>
          <li> Lifestyle habits </li>
          <li> Self-medical history </li>
          <li> Family medical history </li>
         </ul>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>21</span>
        <h3> Why is smoking/nicotine consumption a determinant in term insurance premium calculation?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>Smoking or nicotine consumption is a determinant in term policy premium calculation because such products tend to harm the insured. This will make the insured more vulnerable and likely increase the risk of the person filing for a claim. Hence, term insurance plans have a higher premium for smokers.</p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>22</span>
        <h3> Can I buy multiple term plans?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>Yes, you can buy multiple term insurance policies at any given time from the same or different insurance provider.</p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>23</span>
        <h3>Can I use a term plan for wealth creation?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>A term plan is structured only to provide a death benefit and not a return on the investment. This said, term plan is a financial tool for risk assessment. The premiums only serve the purpose of providing financial assistance to the family in the absence of the insured. Hence, it is not ideal for wealth creation. However, the family/nominee can use the death benefit to pay off all kinds of expenses or debts. </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>24</span>
        <h3>How to process term insurance claim?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>Affected families or the nominee can <a href="https://customer.kotaklifeinsurance.com/ocm" class="sec-anc"> file an online term plan claim </a>with minimal documentation as listed below: 1. Original policy documents 2. Death certificate 3. Age proof of the insured 4. Cancelled cheque by the beneficiary 5. KYC of the beneficiary 6. Cause-of-death certificate 7. Post-mortem report and Police FIR for unnatural deaths 8. Hospital records and confirmation for death due to illness </p>
         <ul>
          <li>Original policy documents </li>
          <li> Death certificate </li>
          <li>Age proof of the insured</li>
          <li>Cancelled cheque by the beneficiary</li>
          <li> KYC of the beneficiary </li>
          <li> Cause-of-death certificate</li>
          <li> Post-mortem report and Police FIR for unnatural deaths</li>
          <li>Hospital records and confirmation for death due to illness</li>
         </ul>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>25</span>
        <h3>What happens to the term insurance policy if the policyholder dies </h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>In case the policyholder dies within the specified period while the term plan is active, the death benefit is paid to the nominee</p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>26</span>
        <h3> What happens to my term plan coverage when the policy term ends?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>If the insured has outlived the specified period of the Kotak e-Term Insurance, there is no benefit paid. Hence, the insurance policy is terminated. </p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>27</span>
        <h3>What happens if the policyholder survives the policy term?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>There is no benefit paid in case the policyholder survives the said term of the Kotak e-Term Plan.</p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>28</span>
        <h3> Will I get any maturity benefit/survival benefit at the end of my policy term? </h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p> No, in case of thea pure term insurance plan, there is no cash benefit paid at maturity. The policy provides death benefit at the demise of the insured in the given period.</p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>29</span>
        <h3>What if the appointed nominee dies during the policy term?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>If the appointed nominee dies, the policyholder can submit the required documentation proof and name a new nominee.</p>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>30</span>
        <h3>Is it possible for a term plan claim to be rejected?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p>Yes, a term plan claim can be rejected in the following conditions:</p>
         <ul>
          <li>Incorrect information</li>
          <li>Hidden medical history</li>
          <li>Incomplete or wrong employment details</li>
          <li> Not disclosing current and existing policies</li>
          <li> Non-payment of premiums</li>
          <li> Lack of a nominee</li>
         </ul>
        </div>
       </div>
      </div>
      <div class="bor">
       <div class="accordion">
        <span>31</span>
        <h3>Does the insured’s gender matter in a term insurance policy?</h3>
       </div>
       <div class="panel tab-detail mb-0 tab-align">
        <div class="">
         <p> Yes. Most insurance plans offer lower premium rates to women than men. </p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="terms new-terms">
   <div class="midWrapper">
    <button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits & Plan Disclaimer</button>
    <div class="content-col mb-0 tab-align li-disc terms-para">
     <p class="pl-0"> Tax Benefits & Disclaimers</p>
     <p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p>
     <p class="pl-0">
      <b> Claim Settlement & Solvency ratio disclaimer^:</b>
     </p>
     <a rel="nofollow" class="mb-15" href="https://www.kotak.com/bank/mailers/annualreport/pdf/Kotak-IAR-FY22.pdf"> *https://www.kotak.com/bank/mailers/annualreport/pdf/Kotak-IAR-FY22.pdf</a>
     <p class="pl-0">
      <b>8.9% Discount:</b>
     </p>
     <p class="pl-0"> @An additional discount of 8.9% in the 1st policy year will be applicable for customers purchasing through Online mode. The above discount is applicable for the following scenarios: Sum Assured of Rs. 3 Crore, Life Plan Option with Level Recurring Payout Option, non-smoker for: ( Subject to Underwriting conditions.”</p>
     <p class="pl-0">1.18 years male, Policy Term / Premium Payout Term: 36 / 36 Years; </p>
     <p class="pl-0">2.20 years male, Policy Term / Premium Payout Term: 15 / 10 Years; </p>
     <p class="pl-0">3.21 years female, Policy Term / Premium Payout Term: 40 / Pay till 60 Years. </p>
     <p class="pl-0">
      <b>Get 1 Cr. Sum Assured @₹17/day* Disclaimer: </b>
     </p>
     <p class="pl-0"> *The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.1 Crore. The per day premium is Rs.17 [Rs. 6,300 Annualized Premium / 365 days = Rs. 17.26].</p>
     <p class="pl-0">Get 1.5 Crore Life Cover @₹26/day* Disclaimer: </p>
     <p class="pl-0">≈The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.1.5 Crore. The per day premium is Rs.26 [Rs. 9,450 Annualized Premium / 365 days = Rs. 25.89].</p>
     <p class="pl-0">
      <b> Terms & Conditions:</b>
     </p>
     <p class="pl-0"> Kotak e-Term Plan UIN No.: 107N104V03, Form No. N104, Kotak Critical Illness Plus Benefit Rider UIN No.: 107B020V01, Form No.: B020. This is a non-participating, pure protection oriented plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure. </p>
     <p class="pl-0">The Above premium figures are exclusive of Goods and Services Tax and cess. Goods and Services Tax and Cess thereon, shall be charged as per the prevalent tax laws over and above the said premiums.</p>
     <p class="pl-0">Section 41-</p>
     <p class="pl-0">Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: (1) No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. (2) Any person making default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.</p>
     <p class="pl-0">Section 45-</p>
     <p class="pl-0">Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details: Read more about section38_39_45_of_insurance_act_1938.</p>
     <p class="pl-0">
      <b>Regd. Office:</b>
     </p>
     <p class="pl-0">Kotak Mahindra Life Insurance Company Ltd. Reg No. 107 | CIN: U66030MH2000PLC1285038th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Toll Free: 1800 209 8800 (8 am to 10 pm) | Website: https://www.kotaklife.com | Email: kli.in/WECARE Ref No: KLI/22-23/E-WEB/1620</p>
     <p class="pl-0">BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS /FRAUDULENT OFFERS</p>
     <p class="pl-0">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
     <p class="pl-0">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
    </div>
   </div>
  </section>
 </div>
</div>
<script>
    var acc = document.getElementsByClassName("collapsible");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
     </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
    var cg_json="",cg_json1="",cg_json2="",cb_json="";function getSegment(){var needSegment;"Term Insurance Protection Plans"==$("#needSegment").val()&&(=base_url."/OnlineTermInsurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=homepage",window.open(,"_blank"))}function close_popup(){$(".steps.step01").addClass("selected")}function openCity(evt,cityName){var i,tabcontent,tablinks;for(tabcontent=document.getElementsByClassName("tabcontent"),i=0;i<tabcontent.length;i++)tabcontent[i].style.display="none";for(tablinks=document.getElementsByClassName("tablinks"),i=0;i<tablinks.length;i++)tablinks[i].className=tablinks[i].className.replace(" active","");document.getElementById(cityName).style.display="inline-block",evt.currentTarget.className+=" active"}var acc=document.getElementsByClassName("collapsible"),i;for(i=0;i<acc.length;i++)acc[i].addEventListener("click",(function(){this.classList.toggle("active");var panel=this.nextElementSibling;"block"===panel.style.display?panel.style.display="none":panel.style.display="block"}));function myFunction(){var dots=document.getElementById("dots"),moreText=document.getElementById("more"),btnText=document.getElementById("myBtn");"none"===dots.style.display?(dots.style.display="inline",btnText.innerHTML="Read more",moreText.style.display="none"):(dots.style.display="none",btnText.innerHTML="Read less",moreText.style.display="inline")}document.getElementById("modal_btn").onclick=function(){document.getElementById("modal").style.display="block"},document.getElementById("close_btn").onclick=function(){document.getElementById("modal").style.display="none"};
    </script>