<?php
function isMobile()
{
    return preg_match(
        '/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i',
        $_SERVER['HTTP_USER_AGENT']
    );
}
if (isMobile()) {
    $actual_link =
    (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
        ? 'https'
        : 'https') . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$temp = [];
$temp = explode('/', $actual_link);

if ($temp[3] == 'main') {
    redirect(base_url());
}
    // Do something for only mobile users
} else {
    $actual_link =
        (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
            ? 'https'
            : 'https') . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $temp = [];
    $temp = explode('/', $actual_link);

    if ($temp[3] == 'main') {
        redirect(base_url());
    }
    // Do something for only desktop users
}
$categoryGA=$actionGA=$labelGA=$eventGA='';

?>
<style>
    .hid {
        opacity: unset !important;
    }

    footer{top:0 !important;}

 

</style>


<link rel="stylesheet" href="assets/css/term-insurance.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />





<div class="online-term-plan-bg">
    <!-- <section class="form" id="terminsurance">
        <div class="midWrapper">

        <ul class="breadcrumb-ulip">
                    <li><a href="https://www.kotaklife.com/">Home&gt;</a></li>
                    <li class="active"><a href="javascript:void(0);">Term Insurance</a></li>
                </ul>
            <div class="row">
                <div class="col-md-8">
                    <h1 class="termTitle term">TERM INSURANCE</h1>
                    <p class="termDesc">Term insurance offers financial protection and safety to your family in case of your demise. Term insurance plans are one of the most affordable life insurance plans. It is the most crucial financial instrument that you must have in your portfolio. <span id="dots">...</span><span id="more"> You pay the insurer a premium to ensure financial cover (known as sum assured) that goes to your family (or nominee) if you pass away during the policy term. </span><span style="color:#ed3237;cursor:pointer;font-weight:600" onclick="readMoreFD()" id="myBtn">Read more</span></p>

                    <div class="termblog-sick1">
                        <div>
                            <div id="term-blogs1">
                                <div class="borderspace">
                                    <p class="life"><span class="cr">₹ 3 </span><span class="colorred">Cr</span> life cover at ₹35/day</p>
                                </div>
                                <div class="borderspace">
                                    <p class="life"><span class="cr">₹ 3 </span><span class="colorred">Cr</span> life cover at ₹35/day</p>
                                </div>
                                <div class="borderspace">
                                    <p class="life"><span class="cr">₹ 3 </span><span class="colorred">Cr</span> life cover at ₹35/day</p>
                                </div>
                            </div>
                            <form id="applyform" class="applyform" method="post">
                                <div class="row space">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter full name">
                                            <label id="fname-error" class="errors">Enter your full name</label>
                                            <div id="name-error-container" class="error-container"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="number" class="form-label">Mobile number</label>
                                            <input type="text" class="form-control" id="number" name="number" placeholder="Enter mobile number">
                                            <div id="number-error-container" class="error-container"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-3 customspace">
                                        <div class="d-flex mb-1">
                                            <p class="pe-1 form-label">Gender</p>
                                        </div>
                                        <div class="gen_switch">
                                            <div class="form-check">
                                                <input class="form-check-input gen_radio" type="radio" name="gender" id="genderMale" value="male" checked>
                                                <label class="form-check-label gen_label" for="genderMale">
                                                    <img src="/assets/images/term-insurance/check.svg" alt="" class="checkmark"> Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input gen_radio" type="radio" name="gender" id="genderFemale" value="female">
                                                <label class="form-check-label gen_label" for="genderFemale">
                                                    <img src="/assets/images/term-insurance/check.svg" alt="" class="checkmark"> Female
                                                </label>
                                            </div>
                                        </div>
                                        <div id="gender-error-container" class="error-container"></div>
                                    </div>
                                    <div class="col-md-3 customspace">
                                        <div class="d-flex mb-1">
                                            <p class="pe-1 form-label">Tobacco user</p>
                                        </div>
                                        <div class="gen_switch">
                                            <div class="form-check form-check-inline width-space">
                                                <input class="form-check-input gen_radio" type="radio" name="tobacco" id="tobaccoYes" value="yes">
                                                <label class="form-check-label gen_label" for="tobaccoYes">
                                                    <img src="/assets/images/term-insurance/check.svg" alt="" class="checkmark"> Yes
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline width-space">
                                                <input class="form-check-input gen_radio" type="radio" name="tobacco" id="tobaccoNo" value="no" checked>
                                                <label class="form-check-label gen_label" for="tobaccoNo">
                                                    <img src="/assets/images/term-insurance/check.svg" alt="" class="checkmark"> No
                                                </label>
                                            </div>
                                        </div>
                                        <div id="tobacco-error-container" class="error-container"></div>
                                    </div>
                                    <div class="col-md-3 customspace">
                                        <div class="form-group position-relative mb-3 calender_img">
                                            <p class="form-label">Date of birth:</p>
                                            <div class="input-container">
                                                <input type="text" id="date" class="form-control" name="date" placeholder="(DD-MM-YY)" readonly>
                                                <div class="calendar_img"></div>
                                            </div>
                                            <div id="date-error-container" class="error-container"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 customspace">
                                        <div class="position-relative mb-2">
                                            <label for="state" class="form-label">Annual Income</label>
                                            <select class="single-select" name="state" id="state">
                                                <option value=""></option>
                                                <option value="AL">
                                                    < 3 Lakhs</option>
                                                       
                                                <option value="WY">3-5 Lakhs</option>
                                                <option value="WY">5-7 Lakhs</option>
                                                <option value="WY">7-10 Lakhs</option>
                                                <option value="WY">10 Lakhs+</option>
                                            </select>
                                            <div id="state-error-container" class="error-container"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 customspace pos-rel">
                                        <div class="form-check_box">
                                            <input class="form-check-input check_box" type="checkbox" id="flexCheckDefault" name="checkbox">
                                        </div>
                                        <p class="ps-3 para">By sharing above details, I agree to KLI and its representatives contacting me through call, SMS, email or WhatsApp even if I am registered under NDNC. I also agree that I have read and understood the <a href="" class="policy">Privacy policy</a> and agree to abide by the same</p>
                                    </div>
                                </div>
                                <div id="checkbox-error-container" class="error-container"></div>
                                <div class="submitdiv"><button class="submit" type="submit">Get a Personalized Quote</button></div>
                            </form>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">
                    <div class="term-new term-image"></div>
                </div>
            </div>
        </div>
    </section> -->

    <div class="term-design">

        <section id="topSection">
            <div class="midWrapper">
            <ul class="breadcrumb-ulip">
                    <li><a href="https://www.kotaklife.com/">Home&gt;</a></li>
                    <li class="active"><a href="javascript:void(0);">Term Insurance</a></li>
                </ul>

                <div class="row">
                    <div class="coll-md-6">
                       <h1 class="termTitle">TERM INSURANCE</h1>
                        <p class="termDesc">Term insurance offers financial protection and safety to your family in case of your demise. Term insurance plans are one of the most affordable life insurance plans.  <span id="dots">...</span><span id="morecont">It is the most crucial financial instrument that you must have in your portfolio. You pay the insurer a premium to ensure financial cover (known as sum assured) that goes to your family (or nominee) if you pass away during the policy term.</span><span style="color: #ED3237 ;cursor: pointer;font-weight: 600;" onclick="readMoreBmi()" id="myBtn"> Read more</span></p>
            
                    </div>
                    <div class="coll-md-6">

                    </div>

                </div>
                
                
            </div>
        </section>


        <section class="product-graycard">
            <div class="midWrapper">
                <div class="row">
                    <div class="coll-md-6">
                        <h2 class="whatIsTerm-title">Our Popular Life Cover Options</h2>
                   
                          <div class="productCards-container">
                              <div class="productCards">
                                  <!-- <div class="productName-banner">
                                      <p>Kotak e-Term</p>
                                      <div class="kotak-term-logo"></div>
                                  </div> -->
      
                                  <div class="productCard">
                                         <div>
                                         <!-- <div class="bestimg term-image"></div> -->
                                           
                                            <p class="best"><span class="bestimg term-image">Bestseller</span></p>

                                         </div>
                                      <p class="productCard1-title"><sup>₹</sup><span>1cr</span>life cover</p>
                                      <p class="productCard1-title2">@<b>₹15</b>/day</p><a class="buyNow-cta" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=mainbanner3" target="_blank">Buy Now</a>
                                  </div>
      
                                  <div class="productCard">
                                      <p class="productCard1-title"><sup>₹</sup><span>1.5Cr</span>life cover</p>
                                      <p class="productCard1-title2">@<b>₹22</b>/day</p><a class="buyNow-cta" target="_blank" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=mainbanner2">Buy Now</a>
                                  </div>
                                  <div class="productCard">
                                      <p class="productCard1-title"><sup>₹</sup><span>2Cr</span>life cover</p>
                                      <p class="productCard1-title2">@<b>₹30</b>/day</p><a class="buyNow-cta" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=mainbanner1" target="_blank">Buy Now</a>
                                  </div>
                              </div>
                          </div>
               

                    </div>
                    <div class="coll-md-6">
                        

                    </div>


                    

                </div>

            </div>
        </section>

<section class="form-int">
    <div id="newform">
                            <div class="dynamicform" >

                            </div>

                        </div>
</section>
        <section class="newamith">
  <div class="fullBg">
    <div class="authorBox">
      <div class="authorDetails">
        <div class="blogsTooltip">
          <div class="authorName">
            <div class="authorImg">
              <img src="/assets/images/term-insurance/amit_raje.png" alt="Amit Raje" />
            </div>
            <div class="nameTitle">
              <div>
                <!-- <img src="assets/images/contract.png" alt="Written By" /> -->
                Written By: <br>
              </div>
              <b class="nameTag">Amit Raje</b>
            </div>
          </div>
          <span class="tooltiptext">
            <p><b>Amit Raje</b> is an experienced marketer who has worked in various Fintechs and leading Financial companies in India. With focused experience in Digital, Amit has pioneered multiple digital commerce in India. Now, close to two decades later, he is the vice president and head of the D2C business department. He masters the skill of strategic management, also being certified in it from IIMA. He has challenged his challenges and contributed his efforts in this journey of digital transformation.</p>
            <p>
              <a href="https://in.linkedin.com/in/amit-raje-digitalexpert" class="linkedin" target="_blank">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </p>
          </span>
        </div>
        <div class="vSeperation"></div>

        <div class="blogsTooltip">
          <div class="authorName">
            <div class="authorImg">
              <img src="/assets/images/term-insurance/prasad.png" alt="Prasad Pimple" />
            </div>
            <div class="nameTitle">
              <div>
                <!-- <img src="assets/images/contract.png" alt="Written By" /> -->
                Reviewed By: <br>
              </div>
              <b class="nameTag">Prasad Pimple</b>
            </div>
          </div>
          <span class="tooltiptext">
            <p><b>Prasad Pimple</b> has a decade-long experience in the Life insurance sector and as EVP, Kotak Life heads Digital Business. He is responsible for developing user-friendly product journeys, creating consumer awareness and helping consumers in identifying need for life insurance solutions. He has 20+ years of experience in creating and building business verticals across Insurance, Telecom and Banking sectors</p>
            <p>
              <a href="https://in.linkedin.com/in/prasad-pimple-54ba489" class="linkedin" target="_blank">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </p>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="tableofContent">
        <div class="midWrapper">
            <span class="tocText">Table of Contents</span>
            <div class="contenttable show-more-height">
                <div>

                      <a href="<?php echo $actual_link ?>#whatIsTermInsurance" class="tocContent"><span>What is a Term Insurance?</span></a>
                      <a href="<?php echo $actual_link ?>#termInsuranceCalculator" class="tocContent"><span>Term Insurance Calculator </span></a>
                      <a href="<?php echo $actual_link ?>#onlinePlans" class="tocContent"><span>Online Insurance Plans from Kotak Life Insurance</span></a>
                      <a href="<?php echo $actual_link ?>#best-ulip-plan" class="tocContent"><span>Offline Insurance Plans from Kotak Life Insurance</span></a>
                      <a href="<?php echo $actual_link ?>#benefitsOfTerm" class="tocContent"><span>Benefits of Term Insurance</span></a>
                      <a href="<?php echo $actual_link ?>#factorsAffecting" class="tocContent"><span>Factors Affecting Term Insurance </span></a>
                      <a href="<?php echo $actual_link ?>#whyChooseKotak" class="tocContent"><span>Why Choose Kotak Life?</span></a>
                      <a href="<?php echo $actual_link ?>#typeOfTerm" class="tocContent"><span>Types of Term Insurance Plans</span></a>
                      <a href="<?php echo $actual_link ?>#featureOfTerm" class="tocContent"><span>Types of Term Insurance Plans</span></a>
                      <a href="<?php echo $actual_link ?>#whyBuyTerm" class="tocContent"><span>Why Should You Buy a Term Insurance Plan?</span></a>
                      <a href="<?php echo $actual_link ?>#whoShouldBuy" class="tocContent"><span>Who Should Buy a Term Insurance Policy?</span></a>
                      <a href="<?php echo $actual_link ?>#whoShouldBuy" class="tocContent"><span>Testimonials for Kotak Term Insurance Policy</span></a>

                     <!-- <a href="<?php echo $actual_link ?>#topSection" class="tocContent"><span>Term Insurance</span></a>
                     <a href="<?php echo $actual_link ?>#whyChooseKotak" class="tocContent"><span>What are the Features of a Term Plan?</span></a>
                     <a href="<?php echo $actual_link ?>#whatIsTermInsuranceRider" class="tocContent"><span>Why Do You Need Term Insurance with Rider?</span></a>
                     <a href="<?php echo $actual_link ?>#differenceBtwnLifeandTerm" class="tocContent"><span>Difference Between Life Insurance and Term Insurance</span></a>
                     <a href="<?php echo $actual_link ?>#payoutOption" class="tocContent"><span>What are the Payout Options in Term Life Insurance?</span></a>
                     <a href="<?php echo $actual_link ?>#insuranceTerminology" class="tocContent"><span>What is a Term Insurance Plan?</span></a> -->

                     <!-- <a href="<?php echo $actual_link ?>#whatIsTermInsurance" class="tocContent"><span>What is a Term Insurance?</span></a>
                     <a href="<?php echo $actual_link ?>#howToChooseBestTerm" class="tocContent"><span>How to Choose the Best Term Insurance Plan?</span></a>
                     <a href="<?php echo $actual_link ?>#whyYouNeedTerm" class="tocContent"><span> Why do you need Term Insurance? </span></a> -->
                       <!-- <a href="<?php echo $actual_link ?>#terminsurance" class="tocContent"><span>Term Insurance</span></a> -->

                </div>
                <div>
                <a href="<?php echo $actual_link ?>#howToChooseBestTerm" class="tocContent"><span>How to Choose the Best Term Insurance Plan?</span></a>
                <a href="<?php echo $actual_link ?>#whyYouNeedTerm" class="tocContent"><span> Why do you need Term Insurance? </span></a> 
                <a href="<?php echo $actual_link ?>#termPlanSecure" class="tocContent"><span>How Does a Term Plan Secure Your Family’s Future?</span></a>
                <a href="<?php echo $actual_link ?>#howToBuyTerm" class="tocContent"><span>How to Buy Term Insurance Plan Online?</span></a>
                <a href="<?php echo $actual_link ?>#whyBuyTermOnline" class="tocContent"><span>Why Buy a Term Plan Online?</span></a>
                <a href="<?php echo $actual_link ?>#termInsuranceRider" class="tocContent"><span>What is a Term Insurance Rider?</span></a>
                <a href="<?php echo $actual_link ?>#rightTimeToBuy" class="tocContent"><span>When is the Right Time to Buy Term Insurance?</span></a>
                <a href="<?php echo $actual_link ?>#payoutOptions" class="tocContent"><span>Payout Options in Term Life Insurance?</span></a>
                <a href="<?php echo $actual_link ?>#howMuchPlanCover" class="tocContent"><span>How Much Term Insurance Plan Cover Do You Need?</span></a>
                <a href="<?php echo $actual_link ?>#document-required-term-insurance" class="tocContent"><span>Documents Required for Term Insurance?</span></a>
                <a href="<?php echo $actual_link ?>#insuranceTerminology" class="tocContent"><span>Term Insurance Terminology</span></a>
                <a href="<?php echo $actual_link ?>#term-insurance-faqs" class="tocContent"><span>Term Insurance Frequently Asked Questions</span></a>

                <!-- <a href="<?php echo $actual_link ?>#howToBuyTerm" class="tocContent"><span>Term Insurance Plan Variants</span></a>
                <a href="<?php echo $actual_link ?>#whyBuyTerm" class="tocContent"><span>How to Choose a Term Insurance Plan?</span></a>
                <a href="<?php echo $actual_link ?>#whyBuyTerm" class="tocContent"><span>How Does a Term Plan Work?</span></a>
                <a href="<?php echo $actual_link ?>#factorsInfluence" class="tocContent"><span>What Factors Can Influence Term Insurance Premiums?</span></a> -->


                </div>
                <a id="readMoreContent" class="tocReadMore">Read More</a>
            </div>
        </div>
    </section>







        <section class="hid" id="whatIsTermInsurance">
            <div class="midWrapper">
                <div class="whatIsTerm-grid">
                    <div>
                        <h2 class="whatIsTerm-title">What is a Term Insurance?</h2>
                        <p class="whatIsTerm-desc">Term insurance plans offer your family much-needed financial security after you, in exchange for a specified premium amount. In case of an unfortunate demise of the life insured during the policy term, the insurer provides a death benefit payout to the nominee, called as life cover, to manage their expenses.</p><br>
                        <p class="whatIsTerm-desc">Term insurance policy is a popular choice for individuals seeking all-around coverage at affordable premiums. These plans can be useful if the financial security and the protection of loved ones is utmost consideration. </p><br>
                        <p class="whatIsTerm-desc">Find out more about<a href="https://www.kotaklife.com/term-insurance/what-is-term-insurance" class="inline-links">What is Term Insurance?</a></p>
                    </div>
                    <div class="whatIsTerm-img term-image"></div>
                </div>
            </div>
        </section>
        <section class="term-blog mt-30">
            <div class="midWrapper">
                <div class="termblog-sick" id="term-blogs">
                    <div>
                        <a class="term-blg" href="https://www.kotaklife.com/term-insurance/2-crore-term-insurance">2 Crore Term Insurance</a>
                    </div>
                    <div>
                        <a class="term-blg" href="https://www.kotaklife.com/term-insurance/1-crore-term-insurance" target="_blank">1 Crore Term Insurance </a>
                    </div>
                    <div>
                        <a class="term-blg" href="https://www.kotaklife.com/term-insurance/1-5-crore-term-insurance" target="_blank">1.5 Crore Term Insurance</a>
                    </div>
                    <div><a class="term-blg" href="https://www.kotaklife.com/term-insurance/5-crore-term-insurance" target="_blank">5 Crore Term Insurance</a></div>
                    <div><a class="term-blg" href="https://www.kotaklife.com/term-insurance/75-lakh-term-insurance" target="_blank">75 Lakh Term Insurance</a></div>
                    <div><a class="term-blg" href="https://www.kotaklife.com/term-insurance/50-lakh-term-insurance" target="_blank">50 Lakh Term Insurance</a></div>
                </div>
            </div>
        </section>
        <section class="hid" id="termInsuranceCalculator">
            <div class="midWrapper">
                <h2 class="termInsuranceCalc-title">Term Insurance Calculator</h2>
                <p class="termInsuranceCalc-desc">Whether you are a first-time buyer or looking to reassess your existing coverage, you need the necessary insights to effectively utilize a term insurance calculator in your insurance planning journey. To utilize an insurance calculator for term insurance, simply follow these straightforward steps:</p>
                <div class="termInsuranceCalc-grid">
                    <div>
                        <div class="termInsuranceCalc-list">
                            <div class="tp-sprites itc-icon"></div>
                            <div>
                                <h3 class="termInsuranceCalc-subTitle">Find a Reliable Term Insurance Calculator</h3>
                                <p class="termInsuranceCalc-subDesc">Use a reliable calculator from Kotak Life Insurance to start with the calculation.</p>
                            </div>
                        </div>
                        <div class="termInsuranceCalc-list">
                            <div class="tp-sprites itc-icon"></div>
                            <div>
                                <h3 class="termInsuranceCalc-subTitle">Enter Your Basic Information</h3>
                                <p class="termInsuranceCalc-subDesc">Once you have selected a calculator, enter your basic information, such as age, gender, and annual income. This data assists the calculator in estimating your insurance needs and premiums.</p>
                            </div>
                        </div>
                        <div class="termInsuranceCalc-list">
                            <div class="tp-sprites itc-icon"></div>
                            <div>
                                <h3 class="termInsuranceCalc-subTitle">Select the Coverage Amount and Term</h3>
                                <p class="termInsuranceCalc-subDesc">Choose the desired coverage amount and term to determine the appropriate level of term insurance. The coverage amount represents the sum your family will receive in the event of your untimely passing, while the term refers to the duration of the policy.</p>
                            </div>
                        </div>
                        <div class="termInsuranceCalc-list">
                            <div class="tp-sprites itc-icon"></div>
                            <div>
                                <h3 class="termInsuranceCalc-subTitle">Calculate Premium</h3>
                                <p class="termInsuranceCalc-subDesc">After entering your information and selecting the coverage amount and term, the calculator will provide an estimate of the policy premium. This premium should be an indication of how much a term insurance can cost you. This is just an indication and not the final premium.</p>
                            </div>
                        </div>
                    </div>
                    <div class="termInsuranceCalc-img term-image"></div>
                </div>
                <div class="termInsuranceCalc-cta"><a href="https://kli-uat.irepo.in/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=redbutton1">Calculate Premium Now</a></div>
            </div>
        </section>
        <section class="hid online-product terminsuranceplans" id="onlinePlans">
            <div class="midWrapper">
                <h2 class="onlinePlans-title">Online Insurance Plans from Kotak Life Insurance</h2>
                <div class="onlinePlans-card">
                    <div class="titleDownload">
                        <h3 class="onlinePlans-subTitle">Kotak e-Term</h3>
                        <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf" download="Brochure"><button name="brochure" class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button></a></div>
                    </div>
                    <div class="onlinePlans-grid">
                        <div>
                            <ul>
                                <li>Life Cover till 85 years for Life & Life Secure Option</li>
                                <li>Option to exit the policy with a premium refund at the age of 60*</li>
                                <li>Special Rates for Women</li>
                                <li>3 Payout Options</li>
                                <li>Special Rates for Non-Tobacco Users</li>
                                <li>Free Medical Check Up every 5th year**</li>
                            </ul>
                            <div class="view-Cta">
                                <div class="viewPlans"><a class="text-left" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-e-term">Know More</a></div>
                                <div class="onlinePlans-cta"><a rel="nofollow" target="_blank" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card">Get Quote</a></div>
                            </div>
                            <div class="d-flex">
                                <p class="terms-tc">Ref. No. KLI/22-23/E-BB/2435</p>
                                <p class="terms-tc"><a target="_blank" href="https://www.kotaklife.com/insurance-guide/about-life-insurance/termsconditions" class="inline-links">T&amp;C</a></p>
                            </div>
                        </div>
                        <div class="etem term-image"></div>
                    </div>
                </div>
                <div>
                         <!-- <div class="onlinePlans-card  ">
                             <div class="titleDownload">
                                 <h3 class="onlinePlans-subTitle">Kotak Protect India</h3>
                                 <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Protect_India_Brochure1.pdf" download="Brochure"><button name="brochure" class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button></a></div>
                             </div>
                             <div class="online-kpi">
                                 <ul class=" protectgrid">
                                     <li>Provides the younger generation with a convenient and affordable life insurance option</li>
                                     <li>Offers unlimited access to primary care physicians, specialist doctor consultations, and the Wellbeing App at no extra charge</li>
                                     <li>Enables tax savings through Section 80C and Section 10(10D)</li>
                                 </ul>
                                 <div class="view-Cta1">
                                     <div class="onlinePlans-cta"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-protect-india">Get Quote</a></div>
                                 </div>
                             </div>
                         </div> -->
                         <div class="onlinePlans-card">
                             <div class="titleDownload">
                                 <h3 class="onlinePlans-subTitle">Kotak Gen2Gen Protect </h3>
                                 <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Gen2Gen_Protect.pdf" download="Brochure"><button name="brochure" class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button></a></div>
                             </div>
                             <div class="online-kpi">
                                 <ul >
                                     <li>100% Return of Premium</li>
                                     <li>Life ROP and Legacy ROP plan options</li>
                                     <li>Cover 2 generations under 1 plan</li>
                                     <li>Additional 5% life cover for female lives</li>
                                     <li>Enhanced Protection with Riders</li>
                                     <li>Tax Benefits u/s 80C and 10(10d)</li>
                
                                 </ul>
                                
                                 <div class="view-Cta">
                                <div class="viewPlans"><a class="text-left" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-gen2gen-protect">Know More</a></div>
                                <div class="onlinePlans-cta"><a rel="nofollow" target="_blank" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card">Get Quote</a></div>
                                 </div>
                             </div>
                         </div>
                </div>
                

            </div>
        </section>
        <!-- <section class="hid" class="e-invest btn-eterms pt-0 onlinekotak-term" id="best-ulip-plan">
            <div class="midWrapper" id=''>
                <div class="">
                    <h3 class="offlineTxt">Offline Insurance Plans from Kotak Life Insurance</h3>
                </div>
                <div class="row">
                    <div class="coll-md-4">
                        <div class="kotak-e-term-plan kota-termplan-two">
                            <div class="feats-sec">
                                <div class="d-flex">
                                    <div class="neweterm">
                                        <h3 class="onlinePlans-subTitle">Kotak Term Plan</h3>
                                    </div>
                                    <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-term-plan-brochure.pdf" download="Brochure"><button class="broch-btn want-to-btn sep-btn brochure"></button></a></div>
                                </div>
                                <div class="roww mg-30 kotaksavcard list-1">
                                    <div class="coll-md-12 w-100">
                                        <div class="ds-flex side">
                                            <ol class="">
                                                <li class="spec-wid spec-wid-2">Low cost term plan</li>
                                                <li class="spec-wid">Optional rider options to enhance protection</li>
                                                <li class="spec-wid">Tax benefits under Section 80C and 10 (10D)</li>
                                                <li class="spec-wid">Multiple premium payment options</li>
                                            </ol>
                                        </div>
                                        <div class="feats-buy text-left"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-term-plan">Know More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coll-md-4">
                        <div class="kotak-e-term-plan kota-termplan-two"><div class="feats-sec">
                                <div class="d-flex">
                                    <div class="neweterm">
                                        <h3 class="onlinePlans-subTitle">Kotak Saral Jeevan Bima</h3>
                                    </div>
                                    <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-jeevan-bima-17-march-2021.pdf" download="Brochure"><button class="broch-btn want-to-btn sep-btn brochure"></button></a></div>
                                </div>
                                <div class="roww mg-30 kotaksavcard list-1">
                                    <div class="coll-md-12 w-100">
                                        <div class="ds-flex side">
                                            <ol class="">
                                                <li class="spec-wid spec-wid-2">Long Term Coverage</li>
                                                <li class="spec-wid">Special Rates for Women</li>
                                                <li class="spec-wid">Tax Benefits Under Section 80C</li>
                                                <li class="spec-wid">Multiple Premium Payment modes</li>
                                            </ol>
                                        </div>
                                        <div class="feats-buy text-left"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-saral-jeevan-bima">Know More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coll-md-4">
                        <div class="kotak-e-term-plan kota-termplan-two"><div class="feats-sec">
                                <div class="d-flex">
                                    <div class="neweterm">
                                        <h3 class="onlinePlans-subTitle">Kotak Health Maximiser</h3>
                                    </div>
                                    <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Health-Maximiser-Brochure-Final.pdf" download="Brochure"><button class="broch-btn want-to-btn sep-btn brochure"></button></a></div>
                                </div>
                                <div class="roww mg-30 kotaksavcard list-1">
                                    <div class="coll-md-12 w-100">
                                        <div class="ds-flex side">
                                            <ol class="">
                                                <li class="spec-wid spec-wid-2">Provides Life cover along with Health Cover</li>
                                                <li class="spec-wid">Hassle Free Issuance with Minimal Documentation</li>
                                                <li class="spec-wid">Tax Benefits# under Sec 80C and 80D </li>
                                                <li class="spec-wid">Cashless Transactions in over 7800+ Network Hospitals**</li>
                                                <li class="spec-wid">Flexibility to choose your policy and premium payment terms</li>
                                                <li class="spec-wid">Preferred premium rates for female lives</li>
                                                <li class="spec-wid">Lifelong coverage irrespective of any claims under the policy</li>
                                            </ol>
                                        </div>
                                        <div class="feats-buy text-left"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-health-maximiser">Know More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="hid ulip-offline" id="offlinePlans">
            <div class="midWrapper">
                <div class="roww bestsavgsp">
                    <div class="coll-md-3">
                        <span class="onlineplan">Offline plan</span>
                        <ul class="onlinegsp h-361  new-onlinegsp">
                            <li class="opc2 accelclr">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Protect India</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc3">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Term Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc4">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Saral Jeevan Bima</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc5">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Health Maximiser</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="coll-md-9">
                    <div class="kotaksavcard accelcard op2 accelblock">
                            <div class="d-flex">
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Protect India</h3></div>
                                <!-- <div class="ml-auto tooltip">
                                    <a class="broch-btn want-to-btn brochers " href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakInvestMaxima.pdf" download="Brochure" title="Kotak Invest Maxima"></a>
                                    <span class="tooltiptext">Download Brochure</span>
                                </div> -->
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Protect_India_Brochure1.pdf" download="Brochure"><button name="brochure" class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button></a></div>

                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class=" newspacechange">
                                       <li>Provides the younger generation with a convenient and affordable life insurance option</li>
                                       <li>Offers unlimited access to primary care physicians, specialist doctor consultations, and the Wellbeing App at no extra charge</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Enables tax savings through Section 80C and Section 10(10D)</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-invest-maxima" class="gspview" title="View Kotak Invest Maxima">View Kotak Invest Maxima</a></div> -->
                            <div class="view-Cta1">
                                     <div class="onlinePlans-cta"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-protect-india">Get Quote</a></div>
                                 </div>
                        </div>
                        <div class="kotaksavcard accelcard op3">
                            <div class="d-flex">
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Term Plan</h3></div>
                                <!-- <div class="ml-auto tooltip">
                                    <a
                                        target="_blank"
                                        class="broch-btn want-to-btn brochers"
                                        href="https://www.kotaklife.com/assets/images/uploads/how_do_i/KotakSingleInvestPlus.pdf"
                                        title="Kotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest Plus"
                                        download="Brochure"
                                    ></a>
                                    <span class="tooltiptext">Download Brochure</span>
                                </div> -->
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-term-plan-brochure.pdf" download="Brochure"><button class="broch-btn want-to-btn sep-btn brochure"></button></a></div>

                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Low cost term plan</li>
                                        <li>Optional rider options to enhance protection</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Tax benefits under Section 80C and 10 (10D)</li>
                                        <li>Multiple premium payment options</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-plus" class="gspview" title="View Kotak Single Invest Plus">View Kotak Single Invest Plus</a></div> -->
                            <div class="feats-buy text-left"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-term-plan">Know More</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op4">
                            <div class="d-flex">
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Saral Jeevan Bima</h3></div>
                                <!-- <div class="ml-auto tooltip">
                                    <a
                                        target="_blank"
                                        class="broch-btn want-to-btn brochers"
                                        href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf"
                                        title="Kotak Single Invest Advantage"
                                        download="Brochure"
                                    ></a>
                                    <span class="tooltiptext">Download Brochure</span>
                                </div> -->
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-jeevan-bima-17-march-2021.pdf" download="Brochure"><button class="broch-btn want-to-btn sep-btn brochure"></button></a></div>

                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Long Term Coverage</li>
                                        <li>Special Rates for Women</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Tax Benefits Under Section 80C</li>
                                        <li>Multiple Premium Payment modes</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="gspview" title="View Kotak Single Invest Advantage">View Kotak Single Invest Advantage</a></div> -->
                            <div class="feats-buy text-left"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-saral-jeevan-bima">Know More</a></div>

                        </div>
                        <div class="kotaksavcard accelcard op5">
                            <div class="d-flex">
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Health Maximiser</h3></div>
                                <!-- <div class="ml-auto tooltip">
                                    <a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-platinum-sales-brochure.pdf" title="Kotak Platinum Plan" download="Brochure"></a>
                                    <span class="tooltiptext">Download Brochure</span>
                                </div> -->
                                <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Health-Maximiser-Brochure-Final.pdf" download="Brochure"><button class="broch-btn want-to-btn sep-btn brochure"></button></a></div>

                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Provides Life cover along with Health Cover </li>
                                        <li>Hassle Free Issuance with Minimal Documentation</li>
                                        <li>Tax Benefits# under Sec 80C and 80D</li>
                                        <li>Cashless Transactions in over 7800+ Network Hospitals**</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Flexibility to choose your policy and premium payment terms</li>
                                        <li>Preferred premium rates for female lives</li>
                                        <li>Lifelong coverage irrespective of any claims under the policy</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-platinum-plan" class="gspview" title="View Kotak Platinum Plan">View Kotak Platinum Plan</a></div> -->
                            <div class="feats-buy text-left"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-health-maximiser">Know More</a></div>

                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </section>


        <section class="mobile-feat gspmobile-feat hide-desktop saving-off mobile-ulip-accord">
            <div class="midWrapper">
                <span class="onlineplan">Offline plan</span>
                <div class="gspaccbor">
                    <div class="accordion-div acc-div-mob accordion-btns">
                        <div class="bor">
                            <button name="tulip" class="accordion bor-top-zero" role="heading" aria-level="3"><p class="bor-top-rad">Kotak Protect India</p></button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tulip" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Provides the younger generation with a convenient and affordable life insurance option</li>
                                                   <li>Offers unlimited access to primary care physicians, specialist doctor consultations, and the Wellbeing App at no extra charge</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Enables tax savings through Section 80C and Section 10(10D)</li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- <div class="ml-auto tooltip">
                                                <a
                                                    class="broch-btn want-to-btn brochers"
                                                    href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_T.U__.L__.I__.P_Brochure_19__.12__.2023_KL3__.pdf"
                                                    download="Brochure"
                                                ></a>
                                            </div> -->
                                            <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Protect_India_Brochure1.pdf" download="Brochure"><button name="brochure" class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button></a></div>

                                        </div>
                                        <!-- <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-tulip" class="gspview">View Kotak T.U.L.I.P</a></div> -->
                                        <div class="view-Cta1">
                                     <div class="onlinePlans-cta"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-protect-india">Get Quote</a></div>
                                 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor">
                            <button name="assured" class="accordion" role="heading" aria-level="3"><p class="bor-top-rad">Kotak Term Plan</p></button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="London" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Low cost term plan</li>
                                        <li>Optional rider options to enhance protection/li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Tax benefits under Section 80C and 10 (10D)</li>
                                        <li>Multiple premium payment options</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakInvestMaxima.pdf" download="Brochure"></a></div> -->
                                            <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-term-plan-brochure.pdf" download="Brochure"><button class="broch-btn want-to-btn sep-btn brochure"></button></a></div>

                                        </div>
                                        <!-- <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-invest-maxima" class="gspview">View Kotak Invest Maxima</a></div> -->
                                        <div class="feats-buy text-left"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-term-plan">Know More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor">
                            <button name="premier" class="accordion"><p>Kotak Saral Jeevan Bima</p></button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Paris" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                    <li>Long Term Coverage</li>
                                                     <li>Special Rates for Women</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                <ul>
                                                    <li>Tax Benefits Under Section 80C</li>
                                                    <li>Multiple Premium Payment modes</li>
                                                </ul>
                                               </div>
                                            </div>
                                            <!-- <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/how_do_i/KotakSingleInvestPlus.pdf" download="Brochure"></a></div> -->
                                            <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-jeevan-bima-17-march-2021.pdf" download="Brochure"><button class="broch-btn want-to-btn sep-btn brochure"></button></a></div>

                                        </div>
                                        <!-- <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-plus" class="gspview">View Kotak Single Invest Plus</a></div> -->
                                        <div class="feats-buy text-left"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-saral-jeevan-bima">Know More</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor">
                            <button name="Premier" class="accordion"><p>Kotak Health Maximiser</p></button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tokyo" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>One-time investment</li>
                                                        <li>Choice of 3 investment strategies</li>
                                                        <li>Loyalty Additions to give boost to your wealth</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- <div class="ml-auto tooltip">
                                                <a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf" download="Brochure"></a>
                                            </div> -->
                                            <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Health-Maximiser-Brochure-Final.pdf" download="Brochure"><button class="broch-btn want-to-btn sep-btn brochure"></button></a></div>

                                        </div>
                                        <!-- <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="gspview">View Kotak Single Invest Advantage</a></div> -->
                                        <div class="feats-buy text-left"><a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-health-maximiser">Know More</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="benefitsOfTerm">
            <div class="midWrapper">
                <h2 class="benefitsOfTerm-title">Benefits of Term Insurance</h2>
                <p class="benefitsOfTerm-desc">Term insurance is a crucial aspect of financial planning, providing individuals with peace of mind and protection against unexpected events. Term insurance offers a range of benefits, let us find out more about them here.</p>
                <div class="textCenter benefit-img term-image mt10"></div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Affordable Premiums</h3>
                        <p class="benefitsOfTerm-subDesc">One of the primary advantages of term insurance is its affordability. Term insurance policies are typically less expensive compared to other types of life insurance. By focusing solely on providing coverage for a specific term, these life insurance policies offer peace of mind and stay light on pockets.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Flexibility</h3>
                        <p class="benefitsOfTerm-subDesc">Term insurance offers exceptional flexibility in terms of policy duration and coverage amounts. You can choose the term length that aligns with their needs. Plus, you get the option to adjust the coverage amount over time, ensuring that the policy remains relevant as your financial circumstances evolve.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Pure Risk Coverage</h3>
                        <p class="benefitsOfTerm-subDesc">Term insurance provides a straightforward and transparent solution to protect your loved ones and provide them with financial stability and security in case of an unforeseen tragedy. Being a pure risk product, you don’t have to pay heavy premiums since the life cover is fixed for the premium you pay.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Additional Life Coverage</h3>
                        <p class="benefitsOfTerm-subDesc">Term insurance serves as an additional life coverage option to complement existing life insurance policies. For individuals who already have permanent life insurance coverage, purchasing an additional term insurance policy can help bridge any gaps in coverage during critical life stages.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Future Planning</h3>
                        <p class="benefitsOfTerm-subDesc">It can be used as a tool to create a stable income source, pay off estate taxes, or settle outstanding debts, ensuring that the financial burden does not fall on the shoulders of the surviving family members. By carefully strategizing the duration and coverage amount of a term insurance policy, individuals can secure a financial legacy for their loved ones.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle"> Critical Illness Protection</h3>
                        <p class="benefitsOfTerm-subDesc">Many term insurance policies come with the option to add critical illness riders. These riders provide coverage against life-threatening diseases such as cancer, heart attack, and stroke. In the event of a critical illness diagnosis, the policyholder receives a lump sum amount to cover medical expenses, ensuring that the family’s finances are not depleted by high treatment costs.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Disability Support and Benefits</h3>
                        <p class="benefitsOfTerm-subDesc">Term insurance policies can also include riders that provide benefits in case of accidental disability. If the policyholder becomes permanently disabled due to an accident, these riders offer financial support, helping to cover living expenses and medical costs during recovery.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Financial Security in Case of Unfortunate Events</h3>
                        <p class="benefitsOfTerm-subDesc">In the event of the policyholder's untimely demise, term insurance provides a lump sum payment to the beneficiaries. This financial security can help the family maintain their standard of living, cover day-to-day expenses, pay off debts, and secure the future of dependents.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle"> Tax Benefits</h3>
                        <p class="benefitsOfTerm-subDesc">Premiums paid towards term insurance policies are eligible for tax deductions under Section 80C of the Income Tax Act. Additionally, the death benefit received by the beneficiaries is exempt from taxes under Section 10(10D), providing a dual tax advantage.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Death Benefit</h3>
                        <p class="benefitsOfTerm-subDesc">The primary benefit of term insurance is the death benefit. If the policyholder passes away during the term of the policy, the designated beneficiaries receive a lump sum amount. This death benefit can be crucial in helping the family cope with financial challenges and ensuring their long-term financial well-being.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Survival Benefits</h3>
                        <p class="benefitsOfTerm-subDesc">Although traditional term insurance does not offer survival benefits, some plans provide a return of premium option. In these plans, if the policyholder survives the policy term, they receive back all the premiums paid, adding a savings element to the pure risk coverage.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Whole Life Cover</h3>
                        <p class="benefitsOfTerm-subDesc">Certain term insurance plans can be extended to offer coverage up to 99 or 100 years of age, effectively functioning as <a class="inline-links" href="https://www.kotaklife.com/term-insurance/whole-life-insurance"> whole life insurance</a>. This ensures lifelong protection and peace of mind, knowing that your beneficiaries will receive the death benefit regardless of when you are not around anymore.</p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Riders and Add-ons</h3>
                        <p class="benefitsOfTerm-subDesc">Term insurance policies can be enhanced with various riders and add-ons to suit individual needs. Common riders include accidental death benefit, waiver of premium, and income benefit rider. These additional features provide extra layers of security and financial protection, ensuring comprehensive coverage for all eventualities.</p>
                    </div>
                </div>
                <div class="factorsAffecting-banner">
                    <h3>Get a life cover of ₹1.5 Cr. @ ₹22/day only</h3>
                    <div class="factorsAffecting-cta"><a href="https://kli-uat.irepo.in/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner1">Buy Term Insurance</a></div>
                </div>
                <div class="mt-50">
                    <div class="term-video-part">
                        <div class="iframe-responsive" id="kotVideo"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="factorsAffecting">
            <div class="midWrapper">
                <h2 class="factorsAffecting-title">Factors Affecting Term Insurance</h2>
                <p class="factorsAffecting-desc">When choosing the right term insurance, the policyholder must understand the factors that come into play when determining the premium and<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/protection/eligibility-criteria-for-buying-term-insurance-in-india">eligibility for term insurance.</a>Understanding these factors is crucial for individuals seeking to purchase a term insurance policy that suits their needs.</p>
                <div class="factorsAffecting-grid">
                    <div class="factorsAffecting-list">
                        <div class="factorsAffecting-img tp-sprites fati-icon1"></div>
                        <div>
                            <h3 class="factorsAffecting-subTitle">Coverage Amount</h3>
                            <p class="factorsAffecting-subDesc">Assess your financial obligations, including outstanding debts, future expenses, and income replacement needs, to determine the appropriate coverage amount. Ensure that the death benefit is sufficient to provide your beneficiaries with a comfortable financial cushion.</p>
                        </div>
                    </div>
                    <div class="factorsAffecting-list">
                        <div class="factorsAffecting-img tp-sprites fati-icon2"></div>
                        <div>
                            <h3 class="factorsAffecting-subTitle">Term Length</h3>
                            <p class="factorsAffecting-subDesc">Consider your financial goals, age, and specific commitments when choosing the term length. The policy should ideally cover the duration during which your family is financially dependent on you or when your obligations are most significant.</p>
                        </div>
                    </div>
                    <div class="factorsAffecting-list">
                        <div class="factorsAffecting-img tp-sprites fati-icon3"></div>
                        <div>
                            <h3 class="factorsAffecting-subTitle">Premium Affordability</h3>
                            <p class="factorsAffecting-subDesc">Evaluate your budget and ensure that the premium payments fit comfortably within your financial means. Although term insurance is generally affordable, it is crucial to select a policy that you can sustainably pay for over the entire term.</p>
                        </div>
                    </div>
                    <div class="factorsAffecting-list">
                        <div class="factorsAffecting-img tp-sprites fati-icon4"></div>
                        <div>
                            <h3 class="factorsAffecting-subTitle">Claim settlement ratio<sup>^</sup></h3>
                            <p class="factorsAffecting-subDesc">Ensure that you check the claim settlement ratio<sup>^</sup>of the term insurance you choose. This is the ratio of claims settled vs. claims requested. For example, a 97% claim settlement ratio<sup>^</sup>indicates that out of 100 claims raised, 97 were settled. The claim settlement ratio^ of Kotak Life Insurance is 98.25%</p>
                        </div>
                    </div>
                </div>
                <div class="factorsAffecting-banner">
                    <h3>Make your family stronger financially, after you with Kotak e-Term.</h3>
                    <div class="factorsAffecting-cta"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner2">Get Quote</a></div>
                </div>
            </div>
        </section>
        <!-- <section class="hid" id="termInsuranceOptions">
            <div class="midWrapper">
                <h2 class="termInsuranceOptions-title">Term Insurance Plan Options</h2>
                <p class="termInsuranceOptions-desc">Term insurance plans are designed to offer pure life coverage for a specific duration, known as the policy term. If the insured individual passes away during this period, the nominee will receive the death benefit payout.</p><br>
                <p class="termInsuranceOptions-desc">While traditional term insurance plans offer straightforward coverage, insurers have recognized the need for customization and flexibility to meet the diverse needs of policyholders. As a result, they have introduced a range of term insurance plan variants that offer additional features and benefits beyond basic life coverage.</p>
                <div class="termInsuranceOptions-table">
                    <table>
                        <tr>
                            <th style="width:35%">Plan variants</th>
                            <th>Benefits in Brief</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td class="tp-right-icon">
                                    <div class="tp-sprites td-bti-icon"></div>
                                    <p>Basic term insurance</p>
                                </td>
                                <td>For a low premium, you can get a death benefit in the form of a lump sum</td>
                            </tr>
                            <tr>
                                <td class="tp-right-icon">
                                    <div class="tp-sprites td-bti-icon"></div>
                                    <p>Monthly/annual income term insurance</p>
                                </td>
                                <td>Regular, consistent income for the family, as well as a death benefit</td>
                            </tr>
                            <tr>
                                <td class="tp-right-icon">
                                    <div class="tp-sprites td-bti-icon"></div>
                                    <p>TROP (Return of Premium) Plans</p>
                                </td>
                                <td>This strategy involves maturity benefits, wherein the premiums paid to secure the policy are refunded if the life insured remains alive throughout the designated policy period.</td>
                            </tr>
                            <tr>
                                <td class="tp-right-icon">
                                    <div class="tp-sprites td-bti-icon"></div>
                                    <p>Convertible Term Plan</p>
                                </td>
                                <td>You have the option to transform this term policy into alternate plans, such as an endowment plan or a whole-life plan in the future.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section> -->
      
        <section class="hid" id="whyChooseKotak">
            <div class="midWrapper">
                <div class="whyChooseKotak-grid">
                    <div>
                        <h2 class="whyChooseKotak-title">Why Choose Kotak Life?</h2>
                        <p class="whyChooseKotak-desc">Kotak Life Insurance is a trusted and one of the fastest-developing names in the Indian <a href=" https://www.kotaklife.com" class="inline-links">life insurance</a> industry. </p><br>
                        <p class="whyChooseKotak-desc">Here are some additional features that make Kotak Life the perfect option to choose from:</p>
                        <ul class="whyChooseKotak-list">
                            <li>Professional Approach: Kotak Life has a team of experienced and qualified professionals who are committed to providing excellent customer service.</li>
                            <li>Efficient Cost Management: We are committed to efficient cost management, which allows us to offer competitive premiums.</li>
                            <li>Continuous Zeal for Improvement: We are constantly striving to improve our products and services for customer satisfaction.</li>
                        </ul>
                        <p class="whyChooseKotak-desc">If you are looking for top-notch customer service and easily manageable plans, you are thinking Kotak Life.</p>
                    </div>
                    <div class="whychosse-img term-image"></div>
                </div>
                <!-- <div class="whyChooseKotak-cta"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=redbutton2">Buy Kotak e-Term Online</a></div> -->
            </div>
        </section>

        <section id="fullWBanner" class="bgBlue hid">
            <div class="blueBg">
                <div class="midWrapper">
                    <div class="blueBg-grid">
                        <div class="textLeft">
                            <h3 class="blueBg-title">Choose the plan that works best for your family’s financial future.</h3>
                            <div class="termPlan-cta2" style="text-align:left"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner3">Buy Kotak e-Term online!</a></div>
                        </div>
                        <div class="blueBg-img term-image"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="typeOfTerm">
            <div class="midWrapper">
                <h2 class="typeOfTerm-title">Types of Term Insurance Plans</h2>
                <p class="typeOfTerm-desc">While term insurance is a straightforward concept, there are various types of term plans available in the market, each tailored to meet different needs and preferences. Understanding these variations will help you choose a term insurance plan that aligns with your financial goals and protects your family's well-being. So, here are four term insurance types available while opting for a pure life cover policy:</p>
                <div class="typeOfTerm-cards">
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon1"></div>
                        <h3 class="typeOfTerm-subTitle">Basic Term Insurance Policy</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">The basic term insurance offers pure life coverage, ensuring that your beneficiary receives the death benefit in the unfortunate event of your untimely demise. There are no maturity benefits provided if you survive the policy term.</p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon2"></div>
                        <h3 class="typeOfTerm-subTitle">Increasing Term Insurance Plan</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">An increasing term plan is a dynamic policy where the sum assured amount progressively grows over the years. The death benefit may have a maximum cap on the sum assured's increasing amount. This policy, like the basic term policy, does not provide any maturity benefits but does offer life coverage.</p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon3"></div>
                        <h3 class="typeOfTerm-subTitle">Decreasing Term Insurance Plan</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">In decreasing term plans, the death benefit gradually decreases as the policy term approaches its expiration. These plans typically have lower premiums as they are primarily designed to cover specific debts or loans.</p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon4"></div>
                        <h3 class="typeOfTerm-subTitle">Term Policy with Return of Premium (TROP)</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">With a TROP plan, you are eligible to receive a refund of all the premiums paid throughout the policy term after the plan expires. In addition to providing life coverage, this policy also offers a maturity benefit by returning all your premiums if you survive the policy term.</p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon1"></div>
                        <h3 class="typeOfTerm-subTitle">Term Insurance with Critical Illness Cover</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">Term insurance with critical illness cover includes a rider that provides a lump sum payout if the policyholder is diagnosed with a specified critical illness such as cancer, heart attack, or stroke. This additional coverage helps manage the high costs associated with treatment and recovery, offering financial relief during a challenging time.</p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon2"></div>
                        <h3 class="typeOfTerm-subTitle">Term Insurance with Accidental Death Cover</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">This type of term insurance includes an accidental death rider, which provides an additional payout if the policyholder dies due to an accident. The accidental death benefit is typically a multiple of the basic sum assured, offering extra financial protection for the policyholder’s family in the event of an accidental death.</p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon3"></div>
                        <h3 class="typeOfTerm-subTitle">Term Insurance with Limited Pay</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">Term insurance with limited pay allows policyholders to pay premiums for a shorter duration while enjoying coverage for the full policy term. For instance, you might pay premiums for 10 years, but the coverage continues for 20 or 30 years. This option is beneficial for those who want to limit their premium payment period while ensuring long-term protection.</p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon4"></div>
                        <h3 class="typeOfTerm-subTitle">Group Term Life Insurance Plan</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">Group term life insurance plans are typically offered by employers or associations to their employees or members. These plans provide life coverage at lower premiums due to the group nature of the policy. Group term insurance is a cost-effective way to offer financial security to a large number of people under a single plan.</p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon1"></div>
                        <h3 class="typeOfTerm-subTitle"> Pure Protection Term Plans</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">Pure protection term plans focus solely on providing life coverage without any additional benefits or savings components. These plans are designed to offer maximum coverage at the lowest possible premium, making them ideal for individuals seeking comprehensive protection without any investment element.</p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon2"></div>
                        <h3 class="typeOfTerm-subTitle">Term Insurance with Wellness Benefits</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">Some term insurance policies now come with wellness benefits that incentivize healthy living. These benefits may include discounts on premiums for maintaining a healthy lifestyle, regular health check-ups, and participation in wellness programs. Such policies encourage policyholders to stay healthy, which can lead to lower healthcare costs and longer life expectancy.</p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon3"></div>
                        <h3 class="typeOfTerm-subTitle">Term Insurance with Health Benefits</h3>
                        <hr class="typeOfTerm-hr">
                        <p class="typeOfTerm-subDesc">Term insurance policies with health benefits offer coverage for medical expenses related to hospitalization, surgery, and other health-related costs. These policies often come with riders that provide a lump sum payout or reimbursement for medical expenses incurred due to illness or injury, ensuring comprehensive financial protection.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="featureOfTerm">
            <div class="midWrapper">
                <h2 class="featureOfTerm-title">Features of Term Insurance Plan</h2>
                <p class="featureOfTerm-desc">When it comes to securing the financial future of your loved ones, a term plan is a reliable and affordable life insurance option. Unlike other<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/about-life-insurance/types-of-life-insurance-policies">types of life insurance policies,</a>term insurance cover offers pure protection and a higher coverage amount at a lower premium. Delve into the significant features of a term plan that make it an attractive choice for many individuals.</p>
                <div class="featureOfTerm-cards">
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Multiple Payment Modes</h3>
                            <p class="featureOfTerm-subDesc">While the low premiums already make these plans lucrative, different payment methods add to the benefits and satisfy and suit a wider range of policy buyers. Depending on their convenience, they can either pay the premiums yearly, half-yearly, quarterly, monthly or as a single payment.</p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Policy Terms and Premiums</h3>
                            <p class="featureOfTerm-subDesc">The premium, or the amount paid to the insurance company, is usually lower compared to other<a class="inline-links" href="https://www.kotaklife.com">life insurance</a>products due to the absence of investment components. Moreover, opting for a term plan at a younger age often results in lower premiums.</p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Liability protection</h3>
                            <p class="featureOfTerm-subDesc">Term insurance provides significant protection against liabilities such as home loans, personal loans, and other debts. In the event of the policyholder’s untimely demise, the death benefit can be used to settle outstanding debts, preventing financial burden on the surviving family members.</p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Save Tax U/S 80C & 80D (Income Tax Act, 1961)</h3>
                            <p class="featureOfTerm-subDesc">In addition to Section 80C, premiums paid for riders that cover health-related expenses, such as critical illness riders, are eligible for tax deductions under <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/savingstax/section-80-d-deduction-of-income-tax-act">Section 80D</a>. This provides further tax savings and makes term insurance a tax-efficient investment.</p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Premiums Returned on Survival</h3>
                            <p class="featureOfTerm-subDesc">Some term insurance plans offer the return of premium (ROP) feature, where the policyholder receives back all the premiums paid if they survive the policy term. This option combines the benefits of pure risk coverage with a savings component, ensuring that the policyholder gets a return on their investment.</p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">High Maturity Age</h3>
                            <p class="featureOfTerm-subDesc">Many term insurance plans offer coverage up to a high maturity age, such as 75 or even 100 years. This ensures long-term financial protection and peace of mind, knowing that your loved ones will be financially secure regardless of when you pass away.</p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle"> Cover against critical illnesses</h3>
                            <p class="featureOfTerm-subDesc">Term insurance plans with critical illness cover provide a lump sum payout if the policyholder is diagnosed with a specified critical illness. This payout can be used to cover medical expenses, loss of income, and other financial needs during the recovery period, ensuring comprehensive financial support during a health crisis.</p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Return of Premium on Maturity</h3>
                            <p class="featureOfTerm-subDesc">Policies with the return of premium on maturity feature offer the policyholder a refund of all premiums paid if they survive the policy term. This feature provides a financial cushion and adds a savings element to the pure protection offered by term insurance.</p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Accidental Death and Disability Cover</h3>
                            <p class="featureOfTerm-subDesc">Accidental death and disability cover riders provide additional benefits in case of accidental death or disability. The accidental death rider offers an extra payout, while the disability rider provides financial support in the event of permanent or temporary disability, helping cover medical expenses and loss of income.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="whyBuyTerm">
            <div class="midWrapper">
                <div class="whyBuyTerm-grid">
                    <div>
                        <h2 class="whyBuyTerm-title">Why Should You Buy a Term Insurance Plan?</h2>
                        <p class="whyBuyTerm-desc">Life is uncertain and cannot be predicted at any point. You never know when an unfortunate incident may occur and leave your loved ones without any financial security. You should prepare your family for a such a scenario and a term insurance plan can help you do so.</p><br>
                        <p class="whyBuyTerm-desc">While it is natural to focus on investments that provide immediate returns, neglecting the<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/about-life-insurance/important-features-of-a-term-insurance-plan">importance of a term insurance plan</a>can leave one's family vulnerable to financial uncertainties. You can ensure your loved ones are shielded from the financial burdens after you by taking a term plan.</p><br>
                        <p class="whyBuyTerm-desc">A best term insurance plan is the one that can help you take care of all your commitments in one life cover. Therefore, aim at having a life cover of at least 10 times your annual income. It can be more, but not less than that.</p><br>
                        <p class="whyBuyTerm-desc">A term life insurance plan is a vital financial tool that offers comprehensive protection and ensures the financial well-being of your family. Its affordability, flexibility, and tax benefits make it an attractive choice for individuals seeking financial security.</p>
                    </div>
                    <div class="whyBuyTermglid-img term-image"></div>
                </div>
            </div>
        </section>
        <section class="hid" id="whoShouldBuy">
            <div class="midWrapper">
                <h2 class="whoShouldBuy-title">Who Should Buy a Term Insurance Policy?</h2>
                <p class="whoShouldBuy-desc">Any individual who has financial dependents should avail of a term insurance policy. This would generally include parents, single women or men who have senior parents, professionals with debts or loans, persons that are nearing retirement, etc.</p><br>
                <p class="whoShouldBuy-desc">When you buy a term insurance plan, you also get tax benefits under<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction">Section 80C</a>and<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know">Section 10(10D)</a>of the Income Tax Act, 1961, thus reducing your taxable income. Here is a detailed version of who should buy a term plan:</p>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon1"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Parents</h3>
                        <p class="whoShouldBuy-subDesc">As parents, your spouse, children, and your parents are dependent on you. With the help of the sum assured payout, you can ensure the safe future of your children and also provide aid to your parents. You can be stress-free about the financial condition of your loved ones after getting a term life insurance plan..</p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon2"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Professionals</h3>
                        <p class="whoShouldBuy-subDesc">You may have availed of a certain education loan to go abroad and study. But if something were to happen to you, your parents shouldn’t bear the brunt of the debt. The sum assured of the term plan can be used to clear off your study loan.</p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon3"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Retirees</h3>
                        <p class="whoShouldBuy-subDesc">If you are going to retire soon and have dependents or debts, term insurance is the perfect way to safeguard your interests. The death benefit would be enough to pay off any debts and also provide financial assistance to the dependent members.</p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon4"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Taxpayers</h3>
                        <p class="whoShouldBuy-subDesc">Individuals who are looking for some tax savings that give beneficial returns can opt for term insurance. Investing in a term plan is the perfect way to get tax benefits and earn a life cover. Premiums paid for term insurance policies are deductible under Section 80C of the Income Tax Act of 1961.</p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon5"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Working Women</h3>
                        <p class="whoShouldBuy-subDesc">Women these days support their families not just emotionally but also financially. They can safeguard the future of their family with a term plan to ensure their family and the dreams of little ones are secured even in their absence.</p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon1"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Young Individuals</h3>
                        <p class="whoShouldBuy-subDesc">Young individuals, especially those just starting their careers, can lock in lower premium rates by purchasing term insurance early. With fewer health issues and lower risk profiles, young policyholders can benefit from affordable premiums while securing long-term financial protection for their future families and dependents.</p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon2"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Self-employed</h3>
                        <p class="whoShouldBuy-subDesc">Self-employed individuals often lack the benefit of employer-provided life insurance. For them, a term insurance policy is essential to provide financial stability to their families in case of an unexpected demise. It ensures that their family is not left burdened with business debts and other financial obligations.</p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon3"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Non-resident Indian (NRI)</h3>
                        <p class="whoShouldBuy-subDesc">NRIs, who have families or financial interests in India, should consider term insurance to protect their loved ones back home. Term insurance can provide a financial safety net that ensures their family’s financial needs are met, regardless of their geographical location.</p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon4"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Senior Citizens</h3>
                        <p class="whoShouldBuy-subDesc">Senior citizens can also benefit from term insurance, particularly those who still have dependents or wish to leave behind a financial legacy. While premiums may be higher, term insurance can help cover final expenses, outstanding debts, and provide financial support to surviving family members.</p>
                    </div>
                </div>
                <div class="whoShouldBuy-cta"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=redbutton3">Safeguard Your Family's Future -Buy Kotak e-Term</a></div>
            </div>
        </section>
        <section class="hid" id="testimonial">
            <div class="midWrapper">
                <div class="testimonial-bg">
                    <h3 class="testimonial-title">Testimonials</h3>
                    <div class="saving-testimonial savetest">
                        <div>
                            <div class="custom-review">
                                <p>My experience with Kotak e-Term Plan from filling the proposal form to policy issuance has been smoother. Uploading document is generally challenging, but it was quite easier with Kotak Life. Their portal is responsive and intuitive. Keep up the good work!</p>
                                <p class="stes-head">- Mukund Solanke</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>Buying a term plan was long due for me. I found Kotak Life, logged in on their website and I got a call from their agent. I checked my eligibility through their portal, got a quote for the premium and I was in. My family’s financial security was now in my hands. Now my life is stress-free.</p>
                                <p class="stes-head">- Rahul Gupta</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>Buying a term plan online sounded like a challenge as I am not used to buying critical insurance plans online. I came across Kotak Life when someone at work recommended to buy their Kotak e-Term plan. The plan is very simple, offered me plan options and I knew exactly that this was the right plan for me.</p>
                                <p class="stes-head">- Pranjal Gusain</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>I have a good financial portfolio but there was one thing missing, a term plan. I wanted to buy term plan was to ensure my spouse’s financial future and keep her ready for any financial liabilities in my absence. After considering different plans, I finalized Kotak e-Term plan since it aligned perfectly with what I was looking for.</p>
                                <p class="stes-head">- Shehzan Merchant</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>Be it my family’s financial future or my little one’s happiness, Kotak e-Term plan helped me secure all of it in one insurance plan. They have affordable premiums, good life cover and some rider options that helped me manage many things at once. I strongly recommend you to buy a Kotak e-Term plan asap.</p>
                                <p class="stes-head">- Apurva Amod Gadikar</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>I was looking for a term plan when I came across Kotak e-Term plan and used their portal to calculate premium. They have a simple portal where you enter the information and get a quote. Beyond that, I just enjoyed the fact that their journey is easy to follow and their call centre team assists if you are stuck somewhere.</p>
                                <p class="stes-head">- Anil Kumar G</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>Kotak e-Term plan was one of the recommended term plan while I was researching about the same. The service by the call centre agents was good. Also, their online portal is perfect. The Kotak e-Term plan helped me to become stress-free about any financial liability that might fall on my family, after me.</p>
                                <p class="stes-head">- Apurva Amod Gadikar</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>Kotak e-Term plan was a term plan I came across in an ad while surfing social media. I could not find a better term plan. It is affordable and they have good service centre agents who help you with everything kindly and patiently. Buy a term plan if you want to live a stress-free life, save taxes and ensure your family’s finance is in good hands.</p>
                                <p class="stes-head">- Rajaganesh Rj</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>A term plan is one of the insurance policies everyone should have, as per me. I bought Kotak e-Term plan and paying premiums for a year or more. The best part is it offered me flexible premium payment options that aligned with my financial commitments. Plus, they have different plan options that makes it easier for choosing the right cover as per your needs.</p>
                                <p class="stes-head">- Jayant Mohanrao Gaikwad</p>
                            </div>
                        </div>
                    </div><span class="pagingInfo-review-tes d-flex playfair_font justify-content-center"></span>
                </div>
            </div>
        </section>
        <section class="hid" id="howToChooseBestTerm">
            <div class="midWrapper">
                <h2 class="bestTerm-title">How to Choose the Best Term Insurance Plan?</h2>
                <p class="bestTerm-desc">When it comes to securing the financial future of your loved ones, term insurance is an invaluable tool. It provides a cost-effective way to protect your family from unforeseen circumstances. However, with numerous insurance providers and policy options available in the market, selecting the best term insurance plan can be a daunting task.</p><br>
                <p class="bestTerm-desc">There are several factors that you need to check and compare before opting for a term insurance policy from a particular insurer. Here are some that you need to consider before buying a policy:</p>
                <div class="bestTerm-cards">
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">1</div>
                        <h3 class="bestTerm-subTitle">Assess Your Insurance Needs</h3>
                        <p class="bestTerm-subDesc">The first step in choosing the best term insurance plan is to evaluate your insurance requirements. Consider factors such as your age, income, financial liabilities, future goals, and the number of dependents.</p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">2</div>
                        <h3 class="bestTerm-subTitle">Compare Multiple Plans</h3>
                        <p class="bestTerm-subDesc">To find the best term insurance plan, it is crucial to compare a variety of plans and offers. Look for reputable plans that have a track record of prompt claim settlement and other benefits.</p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">3</div>
                        <h3 class="bestTerm-subTitle">Determine the Policy Tenure</h3>
                        <p class="bestTerm-subDesc">Term insurance plans offer coverage for a specific duration, known as the policy tenure. Basis different factors like your age, financial responsibilities, and long-term financial goals, choose a policy tenure that adequately covers your dependents' needs, such as education expenses or mortgage payments.</p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">4</div>
                        <h3 class="bestTerm-subTitle">Evaluate the Sum Assured</h3>
                        <p class="bestTerm-subDesc">The sum assured is the amount that your nominees will receive in the event of your demise. It should be sufficient to cover your family's financial obligations, including outstanding debts, future expenses, and income replacement.</p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">5</div>
                        <h3 class="bestTerm-subTitle">Understand the Premium Structure</h3>
                        <p class="bestTerm-subDesc">Term insurance plans come with different premium payment options, such as single, quarterly, annual, semi-annual, or monthly premiums. Consider your cash flow and affordability while selecting the premium payment frequency.</p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">6</div>
                        <h3 class="bestTerm-subTitle">Read the Policy Terms and Conditions</h3>
                        <p class="bestTerm-subDesc">Carefully read and understand the terms and conditions of the term insurance plan before making a purchase. Pay attention to factors such as policy exclusions, waiting periods, and claim settlement procedures.</p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">7</div>
                        <h3 class="bestTerm-subTitle">Check the Claim Settlement Ratio<sup>^</sup></h3>
                        <p class="bestTerm-subDesc">The claim settlement ratio<sup>^</sup>of an insurance company reflects the percentage of claims successfully resolved by the insurer out of the total number of claims received. Currently, Kotak Life Insurance boasts an impressive claim settlement ratio^ of 98.25% for FY 2022-23.</p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">8</div>
                        <h3 class="bestTerm-subTitle">Assess Additional Riders</h3>
                        <p class="bestTerm-subDesc">Term insurance plans often offer additional riders or add-ons that can enhance coverage. Common riders include critical illness cover, accidental death benefit, waiver of premium, and disability cover. Evaluate these riders and consider adding them to your term insurance plan for added protection.</p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">9</div>
                        <h3 class="bestTerm-subTitle">Check Solvency Ratio<sup>*</sup></h3>
                        <p class="bestTerm-subDesc">The solvency ratio<sup>*</sup>is a critical factor to consider when selecting a term insurance plan. It reflects an insurance company's ability to meet its financial obligations, and indicates its financial strength and stability. For the year 2022-23, Kotak Life Insurance had a solvency ratio<sup>*</sup>of 2.83%.</p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">10</div>
                        <h3 class="bestTerm-subTitle">Consider Service Quality and Online Availability</h3>
                        <p class="bestTerm-subDesc">Evaluate the insurer’s service quality, including customer support, claim process efficiency, and ease of access to policy information. Opt for insurers that offer robust online services, such as premium payment, policy renewal, and claim filing, to make managing your policy convenient and hassle-free.</p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">11</div>
                        <h3 class="bestTerm-subTitle"> Look for a Term Insurance Plan with Multiple Payout Options</h3>
                        <p class="bestTerm-subDesc">Some term insurance plans offer multiple payout options, such as lump-sum payment, monthly income, or a combination of both. Choose a payout option that best suits your family’s financial needs and preferences. For instance, a monthly income option can help manage daily expenses, while a lump-sum payment can be used to settle debts or make large investments.</p>
                    </div>
                </div>

                <div class="factorsAffecting-banner">
                    <h3>Get your premium back, while securing your family’s financial security</h3>
                    <div class="factorsAffecting-cta"><a href="">Get Quote</a></div>
                </div>
            </div>
        </section>

      
        <section class="hid" id="whyYouNeedTerm">
            <div class="midWrapper">
                <h2 class="whyYouNeedTerm-title">Why do you need Term Insurance?</h2>
                <!-- <p class="whyYouNeedTerm-desc">Understanding how a term insurance plan, also known as a base term insurance policy, works is essential for individuals seeking financial protection for their loved ones and the fulfilment of outstanding obligations.</p><br>
                <p class="whyYouNeedTerm-desc">Here is how a term plan works:</p>
                <div class="whyYouNeedTerm-cards">
                    <div class="whyYouNeedTerm-card">
                        <div class="whyneed-sprites why-icon1"></div>
                        <h3 class="whyYouNeedTerm-subTitle">Determining the Coverage Amount</h3>
                        <p class="whyYouNeedTerm-subDesc">The coverage amount, also known as the sum assured, is the maximum benefit that will be paid out to your beneficiaries upon your demise. It should be determined based on your current and future financial obligations, such as outstanding loans, education expenses, daily living costs.</p>
                    </div>
                    <div class="whyYouNeedTerm-card">
                        <div class="whyneed-sprites why-icon2"></div>
                        <h3 class="whyYouNeedTerm-subTitle">Selecting the Policy Term</h3>
                        <p class="whyYouNeedTerm-subDesc">Choose a policy term that aligns with your financial goals and the time during which your dependents will be most financially vulnerable.</p>
                    </div>
                    <div class="whyYouNeedTerm-card">
                        <div class="whyneed-sprites why-icon3"></div>
                        <h3 class="whyYouNeedTerm-subTitle">Paying the Premium</h3>
                        <p class="whyYouNeedTerm-subDesc">Premiums for term insurance plans are usually lower compared to other types of life insurance policies. The premium amount is determined based on factors such as your age, health condition, lifestyle habits, policy term, and coverage amount.</p>
                    </div>
                </div> -->
                <p class="whyYouNeedTerm-desc">One of the most crucial ways to safeguard your loved ones' financial future is by investing in term insurance. Term insurance offers a straightforward and affordable way to provide financial security to your family in the event of your untimely demise.</p>
               
                <div class="whyYouNeedTerm-cards">
                    <div class="whyYouNeedTerm-card">
                        <div class="whyneed-sprites why-icon1"></div>
                        <h3 class="whyYouNeedTerm-subTitle"> To Protect Your Family</h3>
                        <p class="whyYouNeedTerm-subDesc">The primary purpose of term insurance is to provide financial protection to your family. In the unfortunate event of your death, the policy ensures that your family does not face financial hardships. The death benefit can be used to cover daily living expenses, children's education, and other essential costs, helping your loved ones maintain their standard of living and achieve their long-term goals. Term insurance offers peace of mind, knowing that your family will be financially secure even in your absence.</p>
                    </div>
                    <div class="whyYouNeedTerm-card">
                        <div class="whyneed-sprites why-icon2"></div>
                        <h3 class="whyYouNeedTerm-subTitle">To Protect Your Assets</h3>
                        <p class="whyYouNeedTerm-subDesc">Term insurance can also play a crucial role in protecting your assets. If you have significant financial liabilities such as a home loan, car loan, or personal loans, the death benefit from a term insurance policy can be used to pay off these debts. This ensures that your family is not burdened with debt repayments and can retain ownership of valuable assets like your home or car. By safeguarding your assets, term insurance helps preserve your family's financial stability and legacy.</p>
                    </div>
                    <div class="whyYouNeedTerm-card">
                        <div class="whyneed-sprites why-icon3"></div>
                        <h3 class="whyYouNeedTerm-subTitle">To Cope with New Lifestyle Risks</h3>
                        <p class="whyYouNeedTerm-subDesc">Modern lifestyles come with a range of new risks and uncertainties, such as critical illnesses, accidents, and changing economic conditions. Term insurance policies often offer riders and add-ons that provide coverage for these risks. For instance, critical illness riders offer a lump sum payout if you are diagnosed with a serious illness, helping cover medical expenses and loss of income. Accidental death and disability riders provide additional benefits in case of accidental injuries. These supplementary coverages ensure comprehensive protection, allowing you to cope with unexpected challenges without depleting your savings.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="termPlanSecure">
            <div class="midWrapper">
                <div class="termPlanSecure-grid">
                    <div>
                        <h2 class="termPlanSecure-title">How Does a Term Plan Secure Your Family’s Future?</h2>
                        <p class="termPlanSecure-desc">With the uncertainties we face today, like the deadly COVID-19 pandemic, having a<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/protection/protection-for-your-family">term plan for a family</a>is even more crucial. It helps your family handle the financial difficulties that may arise if they were to lose their main source of income.</p><br>
                        <p class="termPlanSecure-desc">Additionally, it can assist in paying off any debts, such as car loans or home mortgages making your family free from liabilities after you.</p>
                    </div>
                    <div class="termsecure-img term-image"></div>
                </div>
            </div>
        </section>
        <section class="hid" id="howToBuyTerm">
            <div class="midWrapper">
                <h2 class="howToBuyTerm-title">How to Buy Term Insurance Plan Online?</h2>
                <p class="howToBuyTerm-desc">In today's digital age, the convenience and accessibility of online platforms have revolutionized the way we shop for various products and services, including insurance. Buying term insurance plans online has become increasingly popular due to its simplicity and efficiency.</p>
                <!-- <div class="howToBuyTerm-img mobNone term-image"></div> -->
                <!-- desktop code infographic remove now text -->
                <div  class="desktop-code">


                
                      <div class="benefitsOfTerm-list">
                         <div class="benefitsOfTerm-arrow bti-icon"></div>
                            <div>
                                <h3 class="benefitsOfTerm-subTitle">Step 1: Calculate Your Sum Assured</h3>
                                <p class="benefitsOfTerm-subDesc">The first step in buying a term insurance plan online is to determine the sum assured, which is the amount your beneficiaries will receive in the event of your death. To calculate the appropriate sum assured, consider factors such as:</p>
                                <ul class="whyChooseKotak-list ul-left">
                                    <li class="spacebottom"><b>Your Current Income:</b> A general rule of thumb is to opt for a sum assured that is 10-15 times your annual income.</li>
                                    <li  class="spacebottom"><b>Outstanding Debts:</b> Include any existing liabilities like home loans, car loans, and personal loans.</li>
                                    <li  class="spacebottom"><b>Future Financial Goals:</b> Account for future expenses such as children's education, marriage, and retirement planning.</li>
                                    <li  class="spacebottom"><b>Living Expenses:</b> Estimate the monthly living expenses of your family to ensure they can maintain their standard of living.</li>
                                </ul>
        
                                <p class="benefitsOfTerm-subDesc using">Using online calculators available on insurance company website can help you arrive at a precise figure for the sum assured.</p>
                                
                            </div>
                       </div>

                       <div class="benefitsOfTerm-list">
                         <div class="benefitsOfTerm-arrow bti-icon"></div>
                            <div>
                                <h3 class="benefitsOfTerm-subTitle">Step 2: Select Your Benefits and Request a Quote</h3>
                                <p class="benefitsOfTerm-subDesc">Once you have calculated the sum assured, the next step is to choose the benefits and additional riders that suit your needs. Common riders include:</p>
                                <ul class="whyChooseKotak-list ul-left">
                                    <li class="spacebottom"><b> Critical Illness Cover:</b> Provides a lump sum payout if diagnosed with a critical illness.</li>
                                    <li  class="spacebottom"><b>Accidental Death Benefit:</b>  Offers additional coverage in case of death due to an accident.</li>
                                    <li  class="spacebottom"><b> Waiver of Premium:</b> Ensures that future premiums are waived off in case of disability or critical illness.</li>
                                    <li  class="spacebottom"><b>Income Benefit Rider:</b>  Provides a regular income to the family for a specified period.</li>
                                </ul>
        
                                <p class="benefitsOfTerm-subDesc using">After selecting the necessary benefits and riders, request a quote from multiple insurers. Online comparison tools can help you compare premium rates, coverage features, and policy benefits from different insurance providers.</p>
                                
                            </div>
                       </div>

                       <div class="benefitsOfTerm-list">
                         <div class="benefitsOfTerm-arrow bti-icon"></div>
                            <div>
                                <h3 class="benefitsOfTerm-subTitle">Step 3: Fill in the Details and Pay the Premium</h3>
                                <p class="benefitsOfTerm-subDesc">Once you have chosen the best term insurance plan that fits your requirements, proceed with the application process:</p>
                                <ul class="whyChooseKotak-list ul-left">
                                    <li class="spacebottom"><b> Fill in Personal and Medical Details:</b>  Complete the online application form with your personal details such as name, age, gender, contact information, and address. You will also need to provide information about your health, lifestyle habits (e.g., smoking, drinking), and medical history. Some insurers might require a medical examination based on your age and the sum assured.</li>
                                    <li  class="spacebottom"><b>Upload Documents: </b>You may need to upload scanned copies of necessary documents such as identity proof, address proof, age proof, and income proof. Common documents include Aadhaar card, PAN card, passport, utility bills, salary slips, or income tax returns.</li>
                                    <li  class="spacebottom"><b> Review and Confirm:</b> Carefully review the details entered in the application form to ensure accuracy. Any discrepancies can lead to delays in policy issuance or claim settlements.</li>
                                    <li  class="spacebottom"><b>Pay the Premium: </b> Choose your preferred payment mode (credit card, debit card, net banking, or UPI) and pay the premium. Most insurers offer secure online payment gateways to facilitate smooth transactions.</li>
                                    <li  class="spacebottom"><b>Receive Policy Documents:</b> Once the premium payment is successful, you will receive a confirmation email along with the policy documents. These documents will include the policy schedule, terms and conditions, and the certificate of insurance. Keep these documents safe for future reference.</li>
                                </ul>
        
                                
                            </div>
                       </div>




                </div>







                <div class="mobblock deskNone stepsToBuy">
                    <ul>
                        <li>
                            <h3 class="mb-10">Step</h3>
                            <p class="stepsToBuySpan">01</p>
                            <p>Visit the Kotak Life Insurance website<a href="https://www.kotaklife.com/term-insurance" class="inLine-links">https://www.kotaklife.com/term-insurance</a></p>
                        </li>
                        <li>
                            <h3 class="mb-10">Step</h3>
                            <p class="stepsToBuySpan">02</p>
                            <p>Click on the CTA - Calculate Premium! It will redirect you to the application form.</p>
                        </li>
                        <li>
                            <h3 class="mb-10">Step</h3>
                            <p class="stepsToBuySpan">03</p>
                            <p>Fill out the necessary information like name, phone number, annual income etc.</p>
                        </li>
                        <li>
                            <h3 class="mb-10">Step</h3>
                            <p class="stepsToBuySpan">04</p>
                            <p>Click on proceed to get the right term insurance plan on your registered email ID.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="hid" id="whyBuyTermOnline">
            <div class="midWrapper">
                <h2 class="whyBuyTermOnline-title">Why Buy a Term Plan Online?</h2>
                <p class="whyBuyTermOnline-desc">Buying insurance policies online, particularly term plans, has become increasingly popular due to its convenience, affordability, and a plethora of other benefits.</p>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon1"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Convenience</h3>
                        <p class="whyBuyTermOnline-subDesc">One of the most significant advantages of purchasing a term plan online is the convenience it offers. You can browse through various plans, features, and premiums at your own pace and from the comfort of your home.</p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon2"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Transparency</h3>
                        <p class="whyBuyTermOnline-subDesc">Buying a term plan online eliminates any ambiguity or miscommunication that may arise when dealing with agents. Online insurance platforms provide comprehensive details about the policy terms, conditions, coverage, and exclusions.</p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon3"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Cost-effective</h3>
                        <p class="whyBuyTermOnline-subDesc">When you buy a term plan online, you often eliminate the need for intermediaries, such as agents or brokers. This cuts down on administrative costs and commissions that are typically included in offline policies.</p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon4"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Easy Comparison</h3>
                        <p class="whyBuyTermOnline-subDesc">You can evaluate various factors such as coverage, premium, claim settlement ratio<sup>^</sup>, solvency ratio<sup>*</sup>, customer reviews, and ratings all in one place. This makes it easier to find a term plan that best suits your requirements and budget.<br>Kotak Life Insurance provides a remarkable 98.25% claim settlement ratio<sup>^</sup>and a solvency ratio<sup>*</sup>of 2.83.</p>
                    </div>
                </div>
                <!-- <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon5"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Effortless Documentation</h3>
                        <p class="whyBuyTermOnline-subDesc">The online process of buying a term plan is hassle-free and minimizes the paperwork involved. You can fill out the application form, submit the required documents, and make the premium payment online. The entire process is streamlined and can be completed within a few minutes.</p>
                    </div>
                </div> -->
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon6"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Faster Policy Issuance</h3>
                        <p class="whyBuyTermOnline-subDesc">Offline insurance policies typically involve a lengthy documentation and verification process, which can lead to delays in policy issuance. Once you complete the online application and the necessary verification checks are done, the policy documents are generated instantly or within a short period.</p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon7"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">24/7 Availability of information</h3>
                        <p class="whyBuyTermOnline-subDesc">Another significant advantage of buying a term plan online is the round-the-clock availability of information and services. You can access insurance websites or mobile apps at any time, allowing you to research, purchase, or manage your policy at your convenience.</p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon1"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle"> Add ons</h3>
                        <p class="whyBuyTermOnline-subDesc">Online insurance platforms offer a variety of add-ons and riders that you can customize according to your needs. These may include critical illness cover, accidental death benefit, waiver of premium, and more. The ability to easily add these riders ensures that you can tailor your policy to provide comprehensive coverage.</p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon2"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Comprehensive Features</h3>
                        <p class="whyBuyTermOnline-subDesc">Term plans available online often come with comprehensive features designed to meet diverse needs. You can find policies that offer flexible premium payment options, high sum assured, return of premium, and multiple payout options. The wide range of features ensures that you can select a policy that aligns perfectly with your financial goals and requirements.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="termInsuranceRider">
            <div class="midWrapper">
                <h2 class="termInsuranceRider-title">What is a Term Insurance Rider?</h2>
                <p class="termInsuranceRider-desc">A<a class="inline-links" hre="https://www.kotaklife.com/insurance-guide/protection/understanding-term-insurance-riders">term insurance rider</a>, also known as a term life insurance rider, is an additional feature or provision that can be attached to a primary life insurance policy. It offers additional coverage for a specified period, known as the "term," in exchange for an additional premium.</p>
                <div class="termInsuranceRider-grid">
                    <div class="termInsuranceRidergrid-img term-image"></div>
                    <div>
                        <div class="mt20">
                            <h3 class="termInsuranceRider-subTitle">Waiver of Premium Due to Permanent Disability</h3>
                            <p class="termInsuranceRider-subDesc">It keeps your life insurance coverage valid even if you are unable to pay your premiums. This policy has the effect of waiving all future premiums in the event of permanent disability, but the policy benefits continue for the duration of the policy.</p>
                        </div>
                        <div class="mt20">
                            <h3 class="termInsuranceRider-subTitle">Critical Illness Cover</h3>
                            <p class="termInsuranceRider-subDesc">Under this rider, you pay an additional premium to be covered if you are diagnosed with any of the critical illnesses listed in the policy document. This benefit functions similarly to an income replacement plan, can be used to cover both medical and domestic expenses.</p>
                        </div>
                        <div class="mt20">
                            <h3 class="termInsuranceRider-subTitle">Accidental Death Benefit</h3>
                            <p class="termInsuranceRider-subDesc">You pay an additional sum for this benefit to cover your family in the event of accidental death. When you choose accidental death benefit coverage, the insurer Will pay the nominee an additional death benefit sum assured which is over and above your basic death sum assured.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="hid" id="whatIsTermInsuranceRider">
            <div class="midWrapper">
                <h2 class="whatIsTermInsuranceRider-title">Why Do You Need Term Insurance with Rider?</h2>
                <p class="whatIsTermInsuranceRider-desc">When it comes to securing the financial well-being of your loved ones, having the right insurance coverage is crucial. Term insurance with a rider is an excellent choice for individuals seeking comprehensive protection that goes beyond basic coverage.</p><br>
                <p class="whatIsTermInsuranceRider-desc">Here are three important reasons why you need term insurance:</p>
                <div class="whatIsTermInsuranceRider-flex">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="whatIsTermInsuranceRider-subTitle">To Protect Your Family</h3>
                        <p class="whatIsTermInsuranceRider-subDesc">Your family relies on you both emotionally and financially. You may want to support your parents' retirement savings or pay for your child's college education. In our term plan with riders option, we ensure that in the unfortunate event of the policyholder's demise, the nominee will receive an additional death benefit sum assured, which is distinct from and supplementary to the basic death sum assured.</p>
                    </div>
                </div>
                <div class="whatIsTermInsuranceRider-flex">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="whatIsTermInsuranceRider-subTitle">To Protect Your Assets</h3>
                        <p class="whatIsTermInsuranceRider-subDesc">When we buy things using borrowed money and make monthly payments to pay off these debts, it's important to consider what happens if something unexpected happens to us during this time. If you have a term insurance plan with riders, the payout from this plan can be a vital support for your family.</p>
                    </div>
                </div>
                <div class="whatIsTermInsuranceRider-flex">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="whatIsTermInsuranceRider-subTitle">To Cope with New Lifestyle Risks</h3>
                        <p class="whatIsTermInsuranceRider-subDesc">Every day, we hear about the increase in diseases related to our lifestyle and the occurrence of serious illnesses like heart disease and cancer. Your term plan can provide some financial assistance if you face such a diagnosis, helping you with the costs of treatment and recovery.</p>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="hid" id="rightTimeToBuy">
            <div class="midWrapper">
                <h2 class="rightTimeToBuy-title">When is the Right Time to Buy Term Insurance?</h2>
                <h4 class="rightTimeToBuy-subHead">The sooner, the better!</h4>
                <p class="rightTimeToBuy-desc">The right time to buy term insurance is right now. As you get older, your risks of developing lifestyle diseases rise, as do your insurance expenses. When you get a term plan at a young age, you get an insurance policy with a low premium. As a result, it may be prudent to purchase term life insurance when you are young.</p>
                <div class="rightTimeToBuy-bg term-image">
                    <div class="rightTimeToBuy-content-odd">
                        <h3 class="rightTimeToBuy-subTitle">Dependents and Financial Responsibilities</h3>
                        <p class="rightTimeToBuy-subDesc">The primary purpose of term insurance is to provide financial support to your dependents if something were to happen to you. Therefore, the right time to buy term insurance is typically when you have dependents or financial responsibilities.</p>
                    </div>
                </div>
                <div class="rightTimeToBuy-bg2 term-image">
                    <div class="rightTimeToBuy-content-even">
                        <h3 class="rightTimeToBuy-subTitle">Age and Health</h3>
                        <p class="rightTimeToBuy-subDesc">Generally, the younger and healthier you are when you purchase a policy, the lower your premiums will be. Insurance companies consider age and health as risk factors, and the likelihood of developing health issues increases with age. By purchasing term insurance at a younger age, you can lock in lower premiums for the duration of the policy term.</p>
                    </div>
                </div>
                <div class="rightTimeToBuy-bg3 term-image">
                    <div class="rightTimeToBuy-content-odd">
                        <h3 class="rightTimeToBuy-subTitle">Financial Stability and Debt</h3>
                        <p class="rightTimeToBuy-subDesc">If you have substantial debts such as a mortgage, car loans, or student loans, it is wise to consider buying term insurance. In the event of your passing, these debts can become a burden on your family. Term insurance ensures that your loved ones are not burdened with financial liabilities and can continue to meet their financial obligations.</p>
                    </div>
                </div>
                <div class="rightTimeToBuy-bg4 term-image">
                    <div class="rightTimeToBuy-content-even">
                        <h3 class="rightTimeToBuy-subTitle">Life Milestones</h3>
                        <p class="rightTimeToBuy-subDesc">Certain life milestones often trigger the need for term insurance. For example, getting married, starting a family or buying a house are significant event that increase your finacial responsibilities. These milestones often indicate a change in your life circumstances, and it's crucial to reassess your life insurance needs accordingly.</p>
                    </div>
                </div>
                <div class="rightTimeToBuy-bg5 term-image">
                    <div class="rightTimeToBuy-content-odd">
                        <h3 class="rightTimeToBuy-subTitle">Long-Term Financial Planning</h3>
                        <p class="rightTimeToBuy-subDesc">Term insurance can also be used as a tool for long-term<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-is-financial-planning">financial planning.</a>If you have a specific financial goal, such as ensuring your child's education or leaving a legacy, purchasing a term insurance policy can help you achieve those goals.</p>
                    </div>
                </div>
                <div class="factorsAffecting-banner">
                    <h3>Get ₹2 Cr. life cover @₹30/day!</h3>
                    <div class="factorsAffecting-cta"><a href="https://kli-uat.irepo.in/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner5">Buy Now</a></div>
                </div>
            </div>
        </section>
        <section id="payoutOptions" class="hid">
            <div class="midWrapper">
                <div class="payoutCards">
                    <div class="payoutCardsBlank">
                        <h2 class="payoutCard-subHead">Payout Options in Term Life Insurance?</h2>
                        <p class="payoutCard-subDesc">When it comes to securing the financial future of our loved ones, term life insurance provides valuable protection. However, understanding the various payout options available is crucial in making an informed decision. For your term insurance coverage, you can choose one of the following payout options:</p>
                    </div>
                    <div class="payoutCard">
                        <div class="pay-sprites pay-icon1"></div>
                        <h3 class="payoutCard-subTitle">One-Time Lump-Sum Payout</h3>
                        <p class="payoutCard-subDesc">If you choose this option, your nominee will get the entire amount owed to them in a single payment. If the total sum assured is ₹2 Crore, for example, your nominee will receive the entire amount once their claim is accepted.</p>
                    </div>
                    <div class="payoutCard">
                        <div class="pay-sprites pay-icon2"></div>
                        <h3 class="payoutCard-subTitle">One-Time Lump-Sum Payment with Fixed Monthly /Annual Payouts</h3>
                        <p class="payoutCard-subDesc">In this option, the nominee will receive a portion of the sum assured as a lump sum, and the remaining sum will be distributed in monthly/annual instalments.</p>
                    </div>
                    <div class="payoutCard">
                        <div class="pay-sprites pay-icon2"></div>
                        <h3 class="payoutCard-subTitle">One-Time Lump-Sum Payment with Increasing Monthly Payout</h3>
                        <p class="payoutCard-subDesc">Another payout option available in term life insurance is a one-time lump-sum payment with increasing monthly payouts. In this arrangement, the beneficiaries receive a portion of the death benefit as a lump sum, along with regular monthly payments that increase over time. This option helps address inflation and rising living expenses by providing a higher payout amount in the later years.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="howMuchPlanCover" class="hid">
            <div class="midWrapper">
                <h2 class="howMuchPlanCover-title">How Much Term Insurance Plan Cover Do You Need?</h2>
                <p class="howMuchPlanCover-desc">A term plan offers a fixed coverage amount, known as the term insurance cover or term plan cover, for a specific period of time. Determining the right amount of coverage can be a daunting task.</p>
                <div class="howMuchPlanCover-flex">
                    <div class="benefitsOfTerm-arrow bright-icon"></div>
                    <div>
                        <h3 class="howMuchPlanCover-subTitle">Assess Your Financial Obligations</h3>
                        <p class="howMuchPlanCover-subDesc">The first step in determining the appropriate term insurance cover is to evaluate your financial obligations. Consider your outstanding loans, such as a home loan or a car loan, and calculate the total amount that needs to be repaid.</p>
                    </div>
                </div>
                <div class="howMuchPlanCover-flex">
                    <div class="benefitsOfTerm-arrow bright-icon"></div>
                    <div>
                        <h3 class="howMuchPlanCover-subTitle">Consider Future Expenses</h3>
                        <p class="howMuchPlanCover-subDesc">Apart from immediate financial obligations and income replacement, it is important to consider future expenses. This includes your children's education, marriage, or any other major life events. Calculate the estimated costs of these expenses and include them in your term insurance coverage.</p>
                    </div>
                </div>
                <div class="howMuchPlanCover-flex">
                    <div class="benefitsOfTerm-arrow bright-icon"></div>
                    <div>
                        <h3 class="howMuchPlanCover-subTitle">Account for Inflation</h3>
                        <p class="howMuchPlanCover-subDesc">Inflation erodes the purchasing power of money over time. To counter the impact of inflation, it is recommended to consider inflation-adjusted term insurance coverage. Estimate the future value of your financial obligations and income replacement needs based on projected inflation rates.</p>
                    </div>
                </div>
                <div class="howMuchPlanCover-flex">
                    <div class="benefitsOfTerm-arrow bright-icon"></div>
                    <div>
                        <h3 class="howMuchPlanCover-subTitle">Evaluate Existing Insurance Coverage</h3>
                        <p class="howMuchPlanCover-subDesc">If you already have other life insurance policies, such as a traditional life insurance plan or employee group insurance, evaluate the coverage amount provided by these policies. Deduct the existing coverage from the total term insurance cover required to determine the additional coverage you need.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="differenceBtwnLifeandTerm">
            <div class="midWrapper">
                <h2 class="termVsLife-title">Difference Between Life Insurance and Term Insurance</h2>
                <p class="termVsLife-desc">Life insurance and term insurance are two common forms of insurance that provide coverage in the event of an individual's death. However, these policies differ significantly in terms of coverage duration, premiums, and potential benefits.</p><br>
                <p class="termVsLife-desc">Understanding the dissimilarities between life insurance and term insurance is crucial when considering which option best suits your needs. It is time to explore the distinctions between these two types of insurance and explore their unique features.</p>
                <div class="termVsLife-table">
                    <table>
                        <tr>
                            <th style="width:20%">Plan variants</th>
                            <th>Term Insurance</th>
                            <th>Life Insurance</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td class="tp-right-icon">
                                    <div class="tp-sprites td-bti-icon"></div>
                                    <p>Tenure</p>
                                </td>
                                <td>The tenure of term insurance ranges from 5-67 years. Kotak e-Term covers a maximum of 85 years.</td>
                                <td>The tenure of life insurance ranges from 10 to 50 years and can go up to 100 years of the life insured’s age in the case of whole life insurance.</td>
                            </tr>
                            <tr>
                                <td class="tp-right-icon">
                                    <div class="tp-sprites td-bti-icon"></div>
                                    <p>Coverage</p>
                                </td>
                                <td>Covers the premature death of the life insured within the tenure specified in the policy document.</td>
                                <td>Covers both premature death, and survival till the maturity of the policy</td>
                            </tr>
                            <tr>
                                <td class="tp-right-icon">
                                    <div class="tp-sprites td-bti-icon"></div>
                                    <p>Premium</p>
                                </td>
                                <td>Premiums are low and affordable, usually considered the cheapest insurance plan in India.</td>
                                <td>Since coverage is for life, the premiums are higher compared to term plans.</td>
                            </tr>
                            <tr>
                                <td class="tp-right-icon">
                                    <div class="tp-sprites td-bti-icon"></div>
                                    <p>Death Benefit</p>
                                </td>
                                <td>Death benefit is payable only if the life insured passes away during the tenure of the policy.</td>
                                <td>Death benefit is payable under both conditions: policyholder survives till maturity or passes away during the tenure.</td>
                            </tr>
                            <tr>
                                <td class="tp-right-icon">
                                    <div class="tp-sprites td-bti-icon"></div>
                                    <p>Paid-Up Value</p>
                                </td>
                                <td>Does not acquire any paid-up or surrender value.</td>
                                <td>When premiums are discontinued, a paid-up value is acquired. If the policyholder surrenders the policy, a surrender value is paid.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="tr">
                        <p class="alsoRead"><img width="20" height="23" class="readalso" src="assets/images/term-insurance/also-read.png" alt=""> Also Read:<a href="https://www.kotaklife.com/insurance-guide/protection/term-insurance-vs-life-insurance" class="inline-links">Term Insurance vs Life Insurance</a></p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- <section id="factorsInfluence">
            <div class="midWrapper">
                <h2 class="factorsInfluence-title">What Factors Can Influence Term Insurance Premiums?</h2>
                <p class="factorsInfluence-desc">One of the key considerations when purchasing term insurance is the premium, the amount paid by the policyholder to maintain coverage. Understanding the factors that can influence term insurance premiums is crucial for making informed decisions and finding the most suitable coverage at an affordable cost.</p>
                <div class="factorsInfluence-cards">
                    <div class="factorsInfluence-card">
                        <div class="factor-sprites fact-icon1"></div>
                        <h3 class="factorsInfluence-subTitle">Health and Medical History</h3>
                        <p class="factorsInfluence-subDesc">Health is a significant consideration for insurance providers when calculating premiums. Applicants with pre-existing medical conditions or a history of serious illnesses may face higher premiums.</p>
                    </div>
                    <div class="factorsInfluence-card">
                        <div class="factor-sprites fact-icon2"></div>
                        <h3 class="factorsInfluence-subTitle">Age and Life Expectancy</h3>
                        <p class="factorsInfluence-subDesc">Age plays a crucial role in term insurance premiums. Younger individuals typically pay lower premiums than older individuals. This is because younger individuals are statistically less likely to develop health issues or pass away during the policy term.</p>
                    </div>
                    <div class="factorsInfluence-card">
                        <div class="factor-sprites fact-icon3"></div>
                        <h3 class="factorsInfluence-subTitle">Lifestyle Habits</h3>
                        <p class="factorsInfluence-subDesc">Insurance providers often consider an individual's lifestyle habits when determining premiums. Certain habits, such as smoking, excessive alcohol consumption, or drug use, can significantly impact premiums. These habits are associated with higher health risks, leading to increased premiums.</p>
                    </div>
                    <div class="factorsInfluence-card">
                        <div class="factor-sprites fact-icon4"></div>
                        <h3 class="factorsInfluence-subTitle">Profession</h3>
                        <p class="factorsInfluence-subDesc">The nature of one's profession can also affect term insurance premiums. Certain occupations may involve higher risks, such as working in hazardous environments or engaging in dangerous activities.</p>
                    </div>
                    <div class="factorsInfluence-card">
                        <div class="factor-sprites fact-icon5"></div>
                        <h3 class="factorsInfluence-subTitle">Underwriting and Insurer's Policies</h3>
                        <p class="factorsInfluence-subDesc">Each insurance company has its underwriting guidelines and policies that determine premium rates. Factors such as their risk tolerance, claims experience, and business strategies can influence the premiums they offer.</p>
                    </div>
                    <div class="factorsInfluence-card">
                        <div class="factor-sprites fact-icon6"></div>
                        <h3 class="factorsInfluence-subTitle">Policy Duration and Coverage Amount</h3>
                        <p class="factorsInfluence-subDesc">The longer the term, the greater the risk for the insurer, as it increases the likelihood of the life insured’s passing away during the policy's duration. Similarly, higher coverage amounts mean greater financial exposure for the insurance company, resulting in higher premiums.</p>
                    </div>
                </div>
                <div class="factorsInfluence-cta"><a href="https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=redbutton4">Calculate Premium</a></div>
            </div>
        </section> -->
        <!-- <section id="payoutOption">
            <div class="midWrapper">
                <h2 class="payoutOptions-title">What are the Payout Options in Term Life Insurance?</h2>
                <div class="payoutOptions-grid">
                    <div class="payoutOptions-first">
                        <p class="payoutOptions-desc">One of the key considerations when choosing a term life insurance policy is understanding the payout options available to beneficiaries. In the event of the life insured’s death, the payout ensures financial security for loved ones left behind.</p>
                        <div class="payout-img term-image"></div>
                    </div>
                    <div class="payoutOptions-second">
                        <div class="payoutOptions-flex">
                            <div>
                                <h3 class="payoutOptions-subTitle">Lump Sum Payment</h3>
                                <p class="payoutOptions-subDesc">The most common and straightforward payout option in term life insurance is the lump sum payment. With this option, the entire death benefit amount is paid out to the beneficiaries in one go. This provides a significant sum of money that can be used to cover immediate expenses, such as funeral costs, outstanding debts, and daily living expenses.</p>
                            </div>
                            <div>
                                <h3 class="payoutOptions-subTitle">Instalment Payments</h3>
                                <p class="payoutOptions-subDesc">Some term life insurance policies offer the option of receiving the death benefit through instalment payments. Instead of a single lump sum, beneficiaries receive a predetermined amount at regular intervals, such as monthly or annually.</p>
                            </div>
                            <div>
                                <h3 class="payoutOptions-subTitle">Family Income Benefit</h3>
                                <p class="payoutOptions-subDesc">Another payout option available in term life insurance is the family income benefit. Under this arrangement, instead of receiving a lump sum or instalment payments, the beneficiaries receive a regular income for a specified period.</p>
                            </div>
                            <div>
                                <h3 class="payoutOptions-subTitle">Accidental Death Benefit</h3>
                                <p class="payoutOptions-subDesc">Some term life insurance policies offer an additional payout option known as an accidental death benefit. If the life insured dies due to an accident, this provision ensures an additional payment in addition to the regular death benefit.</p>
                            </div>
                        </div>
                        <div class="mt20">
                            <h3 class="payoutOptions-subTitle">Return of Premium</h3>
                            <p class="payoutOptions-subDesc">Although not a traditional payout option, some term life insurance policies include a return of premium feature. With this option, if the life insured outlives the term of the policy, they receive a refund of the premiums paid throughout the policy term.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="whyinvest mobile-whyinvest" id="document-required-term-insurance">
            <div class="midWrapper">
                <div class="roww m-0">
                    <div class="coll-md-7">
                        <h2 class="mb-20 term-tags savtxt mt-mob-28 gspwhattxt fnt-24">Documents required for Term Insurance?</h2>
                        <p class="mb-20">With any insurance policy, there are certain documents required to avail yourself of term insurance coverage. Understanding and preparing the necessary documents in advance can streamline the application process and ensure a smooth experience.</p>
                        <div class="gsp-buy document-ulips">
                            <p>A recent picture of the  life insured</p>
                            <p>PAN duplicate</p>
                            <p><b>Proof of address</b>- This can be any of the following: Aadhaar (front and back)/Driving License/Passport (front and back)</p>
                            <p><b>Income evidence</b>- Keep in mind that your income proof should match your claimed annual income. Additionally, for salaried applicants: Last three months' pay stubs/form 16/last three years' ITR/last six months' bank statement where salary is credited Non-salaried applicants should: ITR for the previous three years with the income computation.</p>
                        </div>
                    </div>
                    <div class="coll-md-5 text-center documentsRequired">
                        <div class="w-90 document-img term-image"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="insuranceTerminology">
            <div class="midWrapper">
                <h2 class="insuranceTerminology-title">Term Insurance Terminology</h2>
                <p class="insuranceTerminology-desc">While term insurance offers simplicity and affordability, navigating through the terminology associated with term insurance can sometimes be confusing for policyholders.</p>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon1"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Sum Assured (coverage)</h3>
                        <p class="insuranceTerminology-subDesc">In technical words, 'Sum Assured' refers to the amount that the insurer agrees to pay in the case of the insured person's death or the occurrence of any other covered event.</p><br>
                        <p class="insuranceTerminology-subDesc">The sum assured is the amount paid to the nominee by the life insurance company if the covered individual dies within the policy's term. The policyholder selects the sum assured at the time of purchase.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon2"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Nominee</h3>
                        <p class="insuranceTerminology-subDesc">The 'nominee' is the person (legal heir) named by the policyholder to whom the life insurance company would pay the sum assured and other benefits in the event of an untimely death. The nominee could be the life insured’s wife, child, parents, or others.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon3"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Policy Tenure</h3>
                        <p class="insuranceTerminology-subDesc">The 'policy tenure' refers to the length of time that the policy offers life insurance coverage. Depending on the type of life insurance plan and its terms and circumstances, the policy tenure might range from one year to 100 years or whole life. It is frequently referred to as a policy term or policy duration.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon4"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Maturity Age</h3>
                        <p class="insuranceTerminology-subDesc">The maturity age of the life guaranteed is the age at which the policy ceases or terminates. This is similar to policy tenure, but it expresses how long the plan will be in effect in a different way. Essentially, the life insurance company declares the maximum age at which the life insured will receive life insurance coverage.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon5"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Premium</h3>
                        <p class="insuranceTerminology-subDesc">The premium is the amount you pay to keep your life insurance policy active and continue to receive coverage. If you are unable to pay the premium by the due date or even within the grace period, the insurance will be canceled.</p><br>
                        <p class="insuranceTerminology-subDesc">There are several ways to pay the premium:</p>
                        <ul class="insuranceTerminology-list">
                            <li>regular payments</li>
                            <li>limited payment terms</li>
                            <li>single payments</li>
                        </ul>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon6"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Premium Payment Term</h3>
                        <p class="insuranceTerminology-subDesc">You can pay your life insurance premium whenever convenient.</p>
                        <ul class="insuranceTerminology-list">
                            <li><b>Regular Premium Payment</b>- You can pay premiums on a monthly, quarterly, half-yearly, or yearly basis throughout the insurance term.</li>
                            <li><b>Premium Payment for a Limited Period</b>- You can select to pay premiums for a set period of time. In this case, you may not until the conclusion of the policy term, but for a set number of years. For example, ten years, fifteen years, twenty years, and so on.</li>
                            <li><b>Single Premium Payment</b>- You can also pay the premium for the entire period of the plan in one lump sum.</li>
                        </ul>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon7"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Riders:</h3>
                        <p class="insuranceTerminology-subDesc">Riders are paid-for extras that extend the scope of the base life insurance policy. Riders are purchased at the time of purchase or on the anniversary of the insurance. Riders of various varieties can be purchased in addition to the standard plan. However, the quantity and type of riders will vary by insurance.</p><br>
                        <p class="insuranceTerminology-subDesc">Furthermore, the terms and conditions of each insurance may differ. Here is a list of some well-known riders provided by life insurance providers.</p>
                        <ul class="insuranceTerminology-list">
                            <li>Accidental Death Benefit Rider</li>
                            <li>Accidental Total and Permanent Disability Benefit Rider</li>
                            <li>Critical Illness Cover</li>
                            <li>Premium Waiver</li>
                        </ul>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon8"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Lapse</h3>
                        <p class="insuranceTerminology-subDesc">A policy lapses when the policyholder fails to pay the premiums within the grace period specified in the policy. When a policy lapses, the coverage terminates, and the death benefit is no longer payable.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon9"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Grace Period</h3>
                        <p class="insuranceTerminology-subDesc">The grace period is the specified period after a premium payment is due during which the policy remains in force, even if the premium has not been paid. If the premium is not paid within the grace period, the policy may lapse.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon10"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Surrender Value</h3>
                        <p class="insuranceTerminology-subDesc">Term insurance policies typically do not have a surrender value. However, some insurers offer term policies with a return of premium (ROP) feature, where a portion or the entire premium paid is refunded if the life insured survives the term.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon11"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Underwriting</h3>
                        <p class="insuranceTerminology-subDesc">Underwriting is the process through which an insurance company assesses the risk associated with insuring an individual and determines the premium rate. It involves evaluating the applicant's health, lifestyle, occupation, and other relevant factors.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon12"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Convertible Term Insurance</h3>
                        <p class="insuranceTerminology-subDesc">Convertible term insurance gives the policyholder the option to convert their term insurance policy into a permanent life insurance policy, such as whole life or universal life insurance, without the need for a medical examination. This provides flexibility and long-term coverage options.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon13"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Beneficiary</h3>
                        <p class="insuranceTerminology-subDesc">A beneficiary is a person or entity designated by the policyholder to receive the death benefit in the event of the insured's passing. Beneficiaries can be individuals, such as family members or friends, or organizations, such as charities or trusts.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon14"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Term Length</h3>
                        <p class="insuranceTerminology-subDesc">Term length refers to the duration of the insurance coverage provided by the policy. Options may be available depending on the insurance provider.</p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon15"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Insured</h3>
                        <p class="insuranceTerminology-subDesc">The insured is the person whose life is covered by the term insurance policy. In the event of their death during the term, the beneficiaries will receive the death benefit.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="what-policy-period" id="term-insurance-faqs">
            <div class="midWrapper">
                <h2 class="mb-20 term-tags fnt-24">Term Insurance Frequently Asked Questions</h2>
                <div class="accordion-div accordion-btns mt-mob-15">
                    <div class="bor">
                        <div class="accordion bor-top-zero"><span>1</span>
                            <h3>Why must you have term insurance coverage?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Term insurance provides financial security to your family in case of your untimely demise, ensuring their financial stability and fulfilling their future needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>2</span>
                            <h3>What is the age limit to buy a term insurance plan?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The age limit to buy a term insurance plan is typically from 18 to 65 years, depending on the insurance company's policy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>3</span>
                            <h3>When is the right time to buy term insurance?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The right time to buy term insurance is as early as possible, ideally when you have dependents or financial responsibilities, to benefit from lower premiums and longer coverage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>4</span>
                            <h3>Why is it good to invest in a term insurance plan?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Term insurance is a cost-effective way to provide substantial life coverage, protecting your loved ones financially and providing peace of mind.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>5</span>
                            <h3>Can natural death be covered in a term plan?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Yes, natural death is generally covered in a term plan unless specified otherwise in the policy terms and conditions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>6</span>
                            <h3>Can you have two-term insurance policies?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Yes, it is possible to have multiple term insurance policies to increase the overall coverage amount, as long as you disclose the existing policies to the insurance companies</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>7</span>
                            <h3>How to avail tax benefits on a term plan?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Term insurance premiums are eligible for tax benefits under Section 80C of the Income Tax Act up to a certain limit. Consult a tax professional or refer to the tax regulations for specific details.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>8</span>
                            <h3>How to calculate the premium for term insurance?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The premium for term insurance is calculated based on factors such as age, coverage amount, policy term, and the applicant's health and lifestyle. Insurance companies provide online premium calculators for accurate estimates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>9</span>
                            <h3>How to make term insurance premiums online?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Term insurance premiums can be paid online through various modes such as net banking, debit or credit cards, UPI, or digital wallets on the insurance company's website or mobile app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>10</span>
                            <h3>Does a term insurance plan pay for suicidal death in India?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>In most cases, term insurance plans cover suicidal death after the policy has been in force for a specified period, usually one year from the policy start date. Policy terms may vary, so refer to the policy documents for specific details.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>11</span>
                            <h3>Is there a term insurance plan for smokers?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Yes, some insurance companies offer term insurance plans specifically designed for smokers, taking into account the increased health risks associated with smoking.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>12</span>
                            <h3>Between term insurance and traditional life insurance, which plan is beneficial?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Term insurance is generally more cost-effective and provides pure life coverage, while traditional life insurance combines insurance with savings or investment components. The choice depends on your specific needs and financial goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>13</span>
                            <h3>What is a critical illness rider?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>A critical illness rider is an additional benefit that can be added to a term insurance plan. It provides a lump sum payout if the life insured is diagnosed with a specified critical illness covered under the rider.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>14</span>
                            <h3>What are the payment options in a term insurance plan?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Payment options in a term insurance plan typically include annual, semi-annual, quarterly, or monthly premium payment modes, depending on the insurance company's offerings.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>15</span>
                            <h3>Should I buy a term insurance plan online or offline?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Buying a term insurance plan online is convenient, offers a wider range of options, and may have lower premiums. However, the choice between online and offline depends on your preference and comfort level.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>16</span>
                            <h3>Who determines the term insurance premium?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The insurance company determines the term insurance premium based on various factors such as age, coverage amount, policy term, medical history, occupation, and lifestyle habits.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>17</span>
                            <h3>Can I use a term plan for wealth creation?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Term insurance primarily provides financial protection in the event of the life insured’s death and does not offer wealth creation features. Consider other investment or insurance options for wealth creation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>18</span>
                            <h3>How to process term insurance claims?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>To process a term insurance claim, the nominee or legal beneficiary needs to inform the insurance company, submit the required documents, such as the death certificate, policy documents, and claim form, and cooperate with the insurer during the claim settlement process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>19</span>
                            <h3>What happens to the term insurance policy if the life insured dies?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>In the event of the life insured’s death during the policy term, the term insurance policy pays the death benefit (sum assured) to the nominee or legal beneficiary mentioned in the policy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>20</span>
                            <h3>What happens to my term plan coverage when the policy term ends?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Once the policy term ends, the coverage provided by the term plan ceases, and there are no further benefits payable unless the policy includes a return of premium or survival benefit feature.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>21</span>
                            <h3>What happens if the life insured survives the policy term?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>If the life insured survives the policy term, there are no maturity or survival benefits payable under a traditional term insurance plan unless it includes a return of premium or survival benefit feature.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>22</span>
                            <h3>Will I get any maturity benefit/survival benefit at the end of my policy term?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>In a pure-term insurance plan, there is typically no maturity or survival benefit payable at the end of the policy term unless the policy includes a return of premium or survival benefit feature.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>23</span>
                            <h3>What if the appointed nominee dies during the policy term?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>If the appointed nominee dies during the policy term, the policyholder should update the nomination by providing a new nominee to ensure that the death benefit is paid to the appropriate beneficiary.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>24</span>
                            <h3>Is it possible for a term plan claim to be rejected?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Yes, a term plan claim can be rejected if the insurance company finds that the policyholder provided incorrect information, concealed important facts, or the cause of death is excluded from the policy coverage. Providing accurate information is crucial to avoid claim rejection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>25</span>
                            <h3>Does the insured's gender matter in a term insurance policy?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The insured's gender can affect the premium amount in a term insurance policy since women generally have lower mortality rates compared to men. Insurance companies factor in gender-based mortality tables while determining premiums.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>26</span>
                            <h3>What happens if I do not die? Will I get my money back at the end of the term insurance policy?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>In a traditional term insurance plan without a return of premium feature, if the life insured does not die during the policy term, there is no maturity benefit or money refunded at the end of the term insurance policy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>27</span>
                            <h3>Should I take riders with term insurance?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Taking riders with term insurance depends on your specific needs and requirements. Riders can provide additional coverage for critical illnesses, accidental death, disability, etc., but they come at an extra cost.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>28</span>
                            <h3>What is the premium for riders?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The premium for riders varies based on factors such as the type of rider, coverage amount, the age of the insured, and the term of the rider. Insurance companies provide specific details about rider premiums.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>29</span>
                            <h3>What are the benefits of purchasing a rider?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Purchasing a rider provides additional coverage beyond the basic term insurance plan, addressing specific risks or needs. It offers financial protection in case of critical illnesses, disabilities, or accidents, enhancing the overall coverage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>30</span>
                            <h3>What if I become an NRI after purchasing a term plan?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>If you become a Non-Resident Indian (NRI) after purchasing a term plan, you generally remain covered under the policy. However, it is essential to inform the insurance company about your change in residency status for smooth policy servicing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>31</span>
                            <h3>Should you opt for limited pay or a regular pay-term insurance plan?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The choice between limited pay and regular pay-term insurance plans depends on your financial capacity and preferences. Limited pay plans require higher premium payments for a shorter duration, while regular pay plans spread the premium payments over the policy term.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>32</span>
                            <h3>Can a term plan be used for the repayment of financial liabilities?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Yes, a term plan can be used to cover financial liabilities such as loans, mortgages, or other debts. The sum assured can be utilized by the nominee to repay the outstanding liabilities in the event of the life insured’s death.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>33</span>
                            <h3>Is it necessary to buy a rider with term insurance?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Buying a rider with term insurance is not mandatory but recommended. It depends on your individual needs and preferences. Riders provide additional coverage and benefits beyond the basic term insurance policy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>34</span>
                            <h3>How is term insurance different from life insurance?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Term insurance provides coverage for a specific term or duration, typically without any savings or investment component. Life insurance, on the other hand, combines insurance coverage with a savings or investment component, offering both protection and wealth accumulation features.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <section class="rating-section ratingHtml">
            <div class="midWrapper">
                <div class="container">
                    <div class="feedback-container">
                        <div class="share-side">
                            <div class="text-center">
                                <h2 class="overall-ratingtxt">Overall ratings</h2>
                                <p class="votedCount-text">Rated by<span class="votedCount">32032</span>Customers</p>
                            </div>
                            <div class="stars-bg">
                                <div class="rating-img"></div>
                                <p class="actual-ratings">4.7</p>
                            </div>
                        </div>
                        <div class="verticalBorder"></div>
                        <div class="review-side">
                            <div class="rating-widget">
                                <div class="rating-stars text-left">
                                    <p class="infoText">Thank you for your feedback!</p>
                                    <div class="stars-btn">
                                        <form id="my_radio_box">
                                            <div class="rating">
                                                <input type="radio" name="rating" value="Excellent" id="rating-5" checked="checked" disabled="disabled" /><label for="rating-5"></label>
                                                <input type="radio" name="rating" value="Best" id="rating-4" disabled="disabled" /><label for="rating-4"></label>
                                                <input type="radio" name="rating" value="Good" id="rating-3" disabled="disabled" /><label for="rating-3"></label>
                                                <input type="radio" name="rating" value="Fair" id="rating-2" disabled="disabled" /><label for="rating-2"></label>
                                                <input type="radio" name="rating" value="Satifactory" id="rating-1" disabled="disabled" /><label for="rating-1"></label>
                                            </div>
                                        </form>
                                        <div class="submitDiv" style="display: none;"><button type="submit" class="submitBtn">Submit Rating</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="votedcheck d-block"></div>
                    </div>
                </div>
            </div>
        </section>



        <section class="terms new-terms" id="terms-conditions">
            <div class="midWrapper"><button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits and Plan Disclaimer</button>
                <div class="content-col mb-0 tab-align li-disc terms-para">
                    <p class="pl-0">Tax Benefits and Disclaimers</p>
                    <p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p>
                    <p class="pl-0 space-2"><b>Claim Settlement and Solvency ratio<sup>*</sup>disclaimer:</b></p>
                    <p><sup>^</sup>Figures arrived are basis the company’s latest annual audited figures for Individual Policy Claims for 2023-24</p><a rel="nofollow" class="mb-15" href="https://www.kotak.com/content/dam/Kotak/investor-relation/Financial-Result/QuarterlyReport/FY-2023/q4/Investor-Presentation/Q4FY23-Investor-Presentation.pdf">*https://www.kotak.com/content/dam/Kotak/investor-relation/Financial-Result/QuarterlyReport/FY-2023/q4/Investor-Presentation/Q4FY23-Investor-Presentation.pdf</a>

                        <p class="pl-0 space-2"><b>Get 2 Crore Life Cover @₹30/day<sup>*</sup> Disclaimer:</b></p>
                    <p class="pl-0">≈The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.2 Crore. The per day premium is Rs.30 [Rs. 10,800 Annualized Premium / 365 days = Rs. 29.59].</p>   
                   
                    <p class="pl-0 space-2"><b>Get 1 Crore Life Cover @₹15/day<sup>*</sup> Disclaimer:</b></p>
                    <p class="pl-0">≈The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.1 Crore. The per day premium is Rs.15 [Rs. 5,400 Annualized Premium / 365 days = Rs. 14.79].</p>
                    <p class="pl-0 space-2"><b>Get 1.5 Crore Life Cover @₹22day<sup>*</sup> Disclaimer:</b></p>
                    <p class="pl-0">

                        ≈The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.1.5 Crore. The per day premium is Rs.22 [Rs. 8,100 Annualized Premium / 365 days = Rs. 22.19].</p>
                   
                    <p class="pl-0">The Above premium figures are exclusive of Goods and Services Tax and cess. Goods and Services Tax and Cess thereon, shall be charged as per the prevalent tax laws over and above the said premiums. The channel selected is Online.</p>
                    <p class="pl-0"><b>Kotak Gen2Gen Protect -</b> UIN: 107N132V01, Form No: N132, Kotak Permanent Disability Benefit Rider - UIN: 107B002V03, Form No.: B002, Kotak Critical Illness Plus Benefit Rider - 107B020V01, Form No.: B020, Kotak Accidental Death Benefit Rider - UIN: 107B001V03, Form No: B001. A Non-Linked Non-Participating Individual Savings Life Insurance Plan. Please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure. You may avail of tax benefits as per the Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. You are advised to consult your Tax Advisor for details. Goods and Services Tax and Cess, as applicable shall be levied over and above premium amount shown here as per applicable tax laws.</p>
                    <p class="pl-0"><b>Kotak e-Term:</b>UIN:107N129V02, Form No: N104, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No: B002, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form No: B020. This is a non-participating pure protection plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
                    <p class="pl-0"><b>Kotak Protect India</b>- UIN: 107N130V01, Form No: N130. This is a non-participating, pure protection, life insurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                    <p class="pl-0"><b>Kotak Term Plan:</b>UIN:107N005V06, Form No: N005, Kotak Accidental Death Benefit Rider UIN: 107B001V03, Form No: B001, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No: B002, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form No: B020. This is a non-unit linked, non-participating, term plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
                    <p class="pl-0"><b>Kotak Saral Jeevan Bima:</b>UIN:107N120V01, Form No: N120. This is a Non-Linked Non-participating Individual Pure Risk Premium Life Insurance Plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                   
                    <p  class="pl-0"><b>Kotak Health Maximiser -</b> UIN: KOTHLIP24026V012324 is a Combi Product with both protection & health benefits. It is a jointly offered product of Kotak Mahindra Life Insurance Company Limited and Kotak Mahindra General Insurance Company Limited, where protection benefits are being offered by Kotak Mahindra Life Insurance Company Ltd. under Kotak Term Plan - UIN 107N005V06, Form No. N005 and health benefits are being offered by Kotak Mahindra General Insurance Company Ltd under Kotak Health Premier – UIN KOTHLIP23109V042223. The risks of this product are distinct and are accepted by respective companies. Please refer to the Policy Document for specific details on all terms, conditions and exclusions. For more options on plans, coverages, features, premium paying term, eligibility, etc. please get in touch with the Company Representative. Please know the associated risk and applicable charges from your insurance agent or the intermediary or the policy document of the insurer. **Data as on May 2023. #Tax laws are subject to amendments from time to time. The customer is advised to take an independent view from a tax consultant. Tax benefits are subject to conditions specified under Section 80C and Section 80D of the Income-tax Act, 1961. The tax benefit is applicable as per the Income Tax Act, of 1961</p>
                    <p  class="pl-0">The Above premium figures are exclusive of Goods and Services Tax and cess. Goods and Services Tax and Cess thereon, shall be charged as per the prevalent tax laws over and above the said premiums.</p>
                   
                      <p>*Get your premiums back through Special Exit Value, under your policy, if your policy term is:</p>
                    <p>40 years: Earlier of 25th policy year OR during the policy year, when you attain 60 years</p>
                    <p>> 40 years: Earlier of 30th policy year OR during the policy year, when you attain 60 years</p>
                    <p>5%  Discount on Salary Infographic Disclaimer:</p>
                    <p>The 5% discount is only on the first year of the policy.</p>
                    <p>**Free Medical Checkup every 5th year starting from 5th policy year onwards</p>
                    <p>Tax benefit is applicable as per the Income Tax Act, 1961. Tax laws are subject to amendments from time to time. Customer is advised to take an independent view from tax consultant.</p>
                    <p class="pl-0 space-2"><b>Section 41-</b></p>
                    <p class="pl-0">Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: (1) No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. (2) Any person making default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.</p>
                    <p class="pl-0 space-2"><b>Section 45-</b></p>
                    <p class="pl-0">Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details: Read more about section38_39_45_of_insurance_act_1938.</p>
                    <p class="pl-0 space-2"><b>Regd. Office:</b></p>
                    <p class="pl-0">Kotak Mahindra Life Insurance Company Ltd. Reg No. 107 | CIN: U66030MH2000PLC1285038th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Toll Free: 1800 209 8800 (8 am to 10 pm) | Website: https://www.kotaklife.com | Email: kli.in/WECARE Ref No: KLI/24-25/E-WEB/627</p>
                    <p class="pl-0 space-2"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS /FRAUDULENT OFFERS</b></p>
                    <p class="pl-0">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
                    <p class="pl-0">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    setTimeout(function () {
        $("#term-blogs").slick({
            infinite: !1,
            arrows: !0,
            dots: !1,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [{ breakpoint: 1024, settings: { slidesToShow: 2, slidesToScroll: 1 }, breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } }],
        });
    }, 8000);
</script>
<!--<script>
	   const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show")
            } else {
                entry.target.classList.remove("show")
            }
        });
    });

    const hiddenElement = document.querySelectorAll(".hid")
    hiddenElement.forEach((el) => {
        observer.observe(el)
    })
	</script>-->
<script>
    var i,
        acc = document.getElementsByClassName("collapsible");
    for (i = 0; i < acc.length; i++)
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var e = this.nextElementSibling;
            "block" === e.style.display ? (e.style.display = "none") : (e.style.display = "block");
        });
</script>
<script>
    setTimeout(function () {
        var e = $(
            ' <iframe id="kotakVideo" src="https://www.youtube.com/embed/cq1k0nYDe3Q" title="Basics of Term Insurance for Beginners | Insurance Fundamentals" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        );
        $("#kotVideo").append(e);
    }, 3e3);
</script>
<script>
    var rating = "";
    setTimeout(function () {
        $(".submitBtn").on("click", function () {
            $("input[name=rating]:checked").val() && (rating = $("input[name=rating]:checked").val()),
                $.ajax({
                    url: "https://www.kotaklife.com/site/feedbackrating",
                    type: "post",
                    data: { rating: rating, pagename: "term_plan", fixed: "32000" },
                    success: function (t) {
                        var a = $.parseJSON(t);
                        $(".votedCount").html(a.feedbackratingdetailscount + " ");
                        localStorage.setItem("term_rating", rating);
                        $(".infoText").html("Thank you for your feedback!");
                        $(".rating").addClass("afterClick"), $(".submitDiv").fadeOut("slow"), $(".votedcheck").removeClass("d-none"), $(".votedcheck").addClass("d-block");
                    },
                });
        });
    }, 3e3),
        $.ajax({
            url: "https://www.kotaklife.com/site/ratingRetrieveTerm",
            type: "post",
            data: { rating: localStorage.getItem("term_rating"), pagename: "term_plan", fixed: "32000", ratingCount1: "4.7" },
            success: function (t) {
                var a = $.parseJSON(t);
                console.log(a), $(".ratingHtml").html(a.ratingHtml);
            },
        });
</script>

<script>
   
    setTimeout(() => {
        $("#readMoreContent").click(function () {
            if ($(".contenttable").hasClass("show-more-height")) {
                $(this).text("Read Less");
                $(this).css("bottom", "-15px");
                $(".contenttable").css("borderBottom", "1px solid #dbdbdb");
            } else {
                $(this).text("Read More");
                $(this).css("bottom", "0");
                $(".contenttable").css("borderBottom", "none");
            }

            $(".contenttable").toggleClass("show-more-height", 400);
        });
       
    }, 1000);
    
        function readMoreBmi() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("morecont");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
    moreText.classList.remove("active");
      
  } else {
    dots.style.display = "none";
    btnText.innerHTML = " Read less";
    moreText.style.display = "inline";
        moreText.classList.add("active");
  }
}
</script>
