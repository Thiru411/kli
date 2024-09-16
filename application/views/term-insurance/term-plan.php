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
    footer {
        top: 0 !important;
    }
    .rhsFixed_Wrapper {
        border-top: 0;
    }
</style>
<link rel="stylesheet" href="assets/css/term-insurance.css" /><link rel="stylesheet" href="assets/css/slick.css" /><link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="online-term-plan-bg">
    <div class="term-design">
        <section id="topSection">
            <div class="midWrapper">
                <ul class="breadcrumb-ulip">
                    <li><a href="https://www.kotaklife.com/" aria-label="home">Home&gt;</a></li>
                    <li class="active"><a href="javascript:void(0);" aria-label="Term Insurance">Term Insurance</a></li>
                </ul>
                <div class="row">
                    <div class="coll-md-5">
                        <h1 class="termTitle">TERM INSURANCE</h1>
                        <p class="termDesc">
                            Term insurance is one of the most important and simplest types of life insurance. It offers your family financial protection and safety in case of your unfortunate demise. It is the most crucial financial
                            instrument that you must have.
                        </p>
                        <p class="termDesc pay">You pay the insurer a specific amount of premium to ensure the financial cover (known as sum assured) that goes to your family (or nominee) if you pass away during the policy term.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-graycard">
            <div class="midWrapper">
                <div class="row">
                    <div class="coll-md-5">
                        <h2 class="whatIsTerm-title">Our Popular Life Cover Options</h2>
                        <div class="productCards-container">
                            <div class="productCards">
                                <div class="productCard">
                                    <div>
                                        <p class="best"><span class="bestimg term-image">Bestseller</span></p>
                                    </div>
                                    <p class="productCard1-title"><sup>₹</sup><span>1cr</span><span class="pr-span">life cover</span></p>
                                    <p class="productCard1-title2">@<b>₹15</b>/day</p>
                                    <a
                                        class="buyNow-cta"
                                        aria-label="Buy-now"
                                        href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=mainbanner3"
                                        target="_blank"
                                    >
                                        Buy Now
                                    </a>
                                </div>
                                <div class="productCard">
                                    <p class="productCard1-title"><sup>₹</sup><span>1.5Cr</span><span class="pr-span">life cover</span></p>
                                    <p class="productCard1-title2">@<b>₹22</b>/day</p>
                                    <a
                                        class="buyNow-cta"
                                        aria-label="Buy-now"
                                        target="_blank"
                                        href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=mainbanner2"
                                    >
                                        Buy Now
                                    </a>
                                </div>
                                <div class="productCard">
                                    <p class="productCard1-title"><sup>₹</sup><span>2Cr</span><span class="pr-span">life cover</span></p>
                                    <p class="productCard1-title2">@<b>₹30</b>/day</p>
                                    <a
                                        class="buyNow-cta"
                                        aria-label="buy-now"
                                        href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=mainbanner1"
                                        target="_blank"
                                    >
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coll-md-7">
                        <div id="newform">
                            <div class="dynamicform"><div id="applyform"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newamith">
            <div class="fullBg">
                <div class="authorBox">
                    <div class="authorDetails">
                        <div class="blogsTooltip">
                            <div class="authorName">
                                <div class="authorImg"><img src="/assets/images/term-insurance/amit_raje.png" alt="Amit Raje" /></div>
                                <div class="nameTitle">
                                    <div>Written By:<br /></div>
                                    <b class="nameTag">Amit Raje</b>
                                </div>
                            </div>
                            <span class="tooltiptext">
                                <p>
                                    <b>Amit Raje</b>is an experienced marketer who has worked in various Fintechs and leading Financial companies in India. With focused experience in Digital, Amit has pioneered multiple digital commerce in
                                    India. Now, close to two decades later, he is the vice president and head of the D2C business department. He masters the skill of strategic management, also being certified in it from IIMA. He has
                                    challenged his challenges and contributed his efforts in this journey of digital transformation.
                                </p>
                                <p>
                                    <a href="https://in.linkedin.com/in/amit-raje-digitalexpert" class="linkedin" aria-label="" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </p>
                            </span>
                        </div>
                        <div class="vSeperation"></div>
                        <div class="blogsTooltip">
                            <div class="authorName">
                                <div class="authorImg"><img src="/assets/images/term-insurance/prasad.png" alt="Prasad Pimple" /></div>
                                <div class="nameTitle">
                                    <div>Reviewed By:<br /></div>
                                    <b class="nameTag">Prasad Pimple</b>
                                </div>
                            </div>
                            <span class="tooltiptext">
                                <p>
                                    <b>Prasad Pimple</b>has a decade-long experience in the Life insurance sector and as EVP, Kotak Life heads Digital Business. He is responsible for developing user-friendly product journeys, creating
                                    consumer awareness and helping consumers in identifying need for life insurance solutions. He has 20+ years of experience in creating and building business verticals across Insurance, Telecom and Banking
                                    sectors
                                </p>
                                <p>
                                    <a href="https://in.linkedin.com/in/prasad-pimple-54ba489" class="linkedin" target="_blank" aria-label=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="term-version">
                    <div class="benefitsOfTerm-arrow version"></div>
                    <p class="current-font">
                        Last updated on<span><?=date("M d,Y",strtotime("yesterday"))?></span>
                    </p>
                </div>
            </div>
        </section>
        <section id="tableofContent">
            <div class="midWrapper">
                <span class="tocText">Table of Contents</span>
                <div class="contenttable show-more-height">
                    <div>
                        <a aria-label="what is term insurance" href="<?php echo $actual_link ?>#whatIsTermInsurance" class="tocContent"><span>What is Term Insurance?</span></a>
                        <a aria-label="term insurance calcalurate" href="<?php echo $actual_link ?>#termInsuranceCalculator" class="tocContent"><span>Term Insurance Calculator</span></a>
                        <a aria-label="online plan" href="<?php echo $actual_link ?>#onlinePlans" class="tocContent"><span>Online Insurance Plans from Kotak Life Insurance</span></a>
                        <a aria-label="Best Ulip Plan" href="<?php echo $actual_link ?>#best-ulip-plan" class="tocContent"><span>Offline Insurance Plans from Kotak Life Insurance</span></a>
                        <a aria-label="Benefits of term" href="<?php echo $actual_link ?>#benefitsOfTerm" class="tocContent"><span>Benefits of Term Insurance</span></a>
                        <a aria-label="Factors Affection" href="<?php echo $actual_link ?>#factorsAffecting" class="tocContent"><span>Factors Affecting Term Insurance</span></a>
                        <a aria-label="whychoose kotak" href="<?php echo $actual_link ?>#whyChooseKotak" class="tocContent"><span>Why Choose Kotak Life?</span></a>
                        <a aria-label="Typeofterm" href="<?php echo $actual_link ?>#typeOfTerm" class="tocContent"><span>Types of Term Insurance Plans</span></a>
                        <a aria-label="Feature of term" href="<?php echo $actual_link ?>#featureOfTerm" class="tocContent"><span>Features of Term Insurance Plans</span></a>
                        <a aria-label="Why Buy Term" href="<?php echo $actual_link ?>#whyBuyTerm" class="tocContent"><span>Why Should You Buy a Term Insurance Plan?</span></a>
                        <a aria-label="Who should buy" href="<?php echo $actual_link ?>#whoShouldBuy" class="tocContent"><span>Who Should Buy a Term Insurance Policy?</span></a>
                        <a aria-label="who should buy" href="<?php echo $actual_link ?>#whoShouldBuy" class="tocContent"><span>Testimonials for Kotak Term Insurance Policy</span></a>
                    </div>
                    <div>
                        <a aria-label="" href="<?php echo $actual_link ?>#howToChooseBestTerm" class="tocContent"><span>How to Choose the Best Term Insurance Plan?</span></a>
                        <a aria-label="Why you need" href="<?php echo $actual_link ?>#whyYouNeedTerm" class="tocContent"><span>Why do you need Term Insurance?</span></a>
                        <a aria-label="Term plan secure" href="<?php echo $actual_link ?>#termPlanSecure" class="tocContent"><span>How Does a Term Plan Secure Your Family’s Future?</span></a>
                        <a aria-label="how to buy" href="<?php echo $actual_link ?>#howToBuyTerm" class="tocContent"><span>How to Buy Term Life Insurance Plan Online?                        </span></a>
                        <a aria-label="Whybuy term onlione" href="<?php echo $actual_link ?>#whyBuyTermOnline" class="tocContent"><span>Why Buy a Term Plan Online?</span></a>
                        <a aria-label="Term insurance Rider" href="<?php echo $actual_link ?>#termInsuranceRider" class="tocContent"><span>What is a Term Insurance Rider?</span></a>
                        <a aria-label="Right Time to buy" href="<?php echo $actual_link ?>#rightTimeToBuy" class="tocContent"><span>When is the Right Time to Buy Term Insurance?</span></a>
                        <a aria-label="Payout Options" href="<?php echo $actual_link ?>#payoutOptions" class="tocContent"><span>Payout Options in Term Life Insurance?</span></a>
                        <a aria-label="How much plan" href="<?php echo $actual_link ?>#howMuchPlanCover" class="tocContent"><span>How Much Term Insurance Plan Cover Do You Need?</span></a>
                        <a aria-label="Document Required" href="<?php echo $actual_link ?>#document-required-term-insurance" class="tocContent"><span>Documents Required for Term Insurance?</span></a>
                        <a aria-label="Insurance Terminology" href="<?php echo $actual_link ?>#insuranceTerminology" class="tocContent"><span>Term Insurance Terminology</span></a>
                        <a aria-label="Term Insurance FAQ" href="<?php echo $actual_link ?>#term-insurance-faqs" class="tocContent"><span>Term Insurance Frequently Asked Questions</span></a>
                    </div>
                    <a aria-label="read more" id="readMoreContent" class="tocReadMore">Read More</a>
                </div>
            </div>
        </section>
        <section class="hid" id="whatIsTermInsurance">
            <div class="midWrapper">
                <div class="whatIsTerm-grid">
                    <div>
                        <h2 class="whatIsTerm-title">What is Term Insurance?</h2>
                        <p class="whatIsTerm-desc">
                        Term insurance is one of the many types of life insurance that offers you coverage for a certain number of years or months, which can also be called a term. This type of life insurance provides your family with much-needed financial security in case of an unfortunate event in exchange for a certain premium amount. In case the life insured's unfortunate death occurs during the policy term, the insurer provides the death benefit payout to the nominee, also called a life cover, which helps manage their expenses. 
                        </p>
                        <br />
                        <p class="whatIsTerm-desc">
                            A term insurance policy is a very popular choice for people seeking all-around coverage at affordable premiums. These plans can be very useful if the financial security & the protection of your loved ones are
                            your utmost consideration.
                        </p>
                        <br />
                        <p class="whatIsTerm-desc">For example, a healthy 25-year-old non-smoker healthy male has to pay Rs.1,350 (inc tax) per month over 35 years for 1 crore term insurance.
                        </p>
                        <p class="whatIsTerm-desc">Find out more about<a aria-label="What is terminsurance" href="https://www.kotaklife.com/term-insurance/what-is-term-insurance" class="inline-links">What is Term Insurance?</a></p>
                    </div>
                    <div class="whatIsTerm-img term-image"></div>
                </div>
            </div>
            <div class="term-blog mt-30 new-saving-supporting pb-0">
                <div class="midWrapper">
                    <div class="termblog-sick" id="term-blogs">
                        <div>
                            <a aria-label="2 Crore" class="term-blg" href="https://www.kotaklife.com/term-insurance/2-crore-term-insurance">2 Crore Term Insurance<span class="suport-arrow"></span></a>
                        </div>
                        <div>
                            <a aria-label="1 Crore term" class="term-blg" href="https://www.kotaklife.com/term-insurance/1-crore-term-insurance" target="_blank">1 Crore Term Insurance<span class="suport-arrow"></span></a>
                        </div>
                        <div>
                            <a aria-label="1.5 Crore" class="term-blg" href="https://www.kotaklife.com/term-insurance/1-5-crore-term-insurance" target="_blank">1.5 Crore Term Insurance<span class="suport-arrow"></span></a>
                        </div>
                        <div>
                            <a aria-label="" class="term-blg" href="https://www.kotaklife.com/term-insurance/5-crore-term-insurance" target="_blank">5 Crore Term Insurance<span class="suport-arrow"></span></a>
                        </div>
                        <div>
                            <a aria-label="75Lakh" class="term-blg" href="https://www.kotaklife.com/term-insurance/75-lakh-term-insurance" target="_blank">75 Lakh Term Insurance<span class="suport-arrow"></span></a>
                        </div>
                        <div>
                            <a aria-label="50lakh" class="term-blg" href="https://www.kotaklife.com/term-insurance/50-lakh-term-insurance" target="_blank">50 Lakh Term Insurance<span class="suport-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid bg-fff" id="termInsuranceCalculator">
            <div class="midWrapper">
                <h2 class="termInsuranceCalc-title">Term Insurance Calculator</h2>
                <p class="termInsuranceCalc-desc">
                When you are buying term insurance for the first time or trying to evaluate your existing coverage, you need the necessary insights to use the term insurance calculator effectively as part of your insurance planning. For using an insurance calculator to calculate your term insurance coverage, you can follow these simple steps:

                </p>
                <div class="termInsuranceCalc-grid">
                    <div>
                        <div class="termInsuranceCalc-list">
                            <div class="tp-sprites itc-icon"></div>
                            <div>
                                <h3 class="termInsuranceCalc-subTitle">Choose a reliable Term Insurance Calculator
                                </h3>
                                <p class="termInsuranceCalc-subDesc">Start with the coverage calculation by using a reliable calculator from Kotak Life Insurance.</p>
                            </div>
                        </div>
                        <div class="termInsuranceCalc-list">
                            <div class="tp-sprites itc-icon"></div>
                            <div>
                                <h3 class="termInsuranceCalc-subTitle">Enter Your Basic Details</h3>
                                <p class="termInsuranceCalc-subDesc">
                                After selecting a calculator, enter your basic details such as age, gender, and annual income. This helps the calculator estimate how much life coverage you will need and consequently how much premium you should pay.

                                </p>
                            </div>
                        </div>
                        <div class="termInsuranceCalc-list">
                            <div class="tp-sprites itc-icon"></div>
                            <div>
                                <h3 class="termInsuranceCalc-subTitle">Select The Coverage Amount And Term
                                </h3>
                                <p class="termInsuranceCalc-subDesc">
                                Determine the right amount of term insurance by choosing the coverage amount and term that suits it best. The coverage amount is basically the sum payable to one’s family upon his or her demise while the term represents the duration of the plan.
                                </p>
                            </div>
                        </div>
                        <div class="termInsuranceCalc-list">
                            <div class="tp-sprites itc-icon"></div>
                            <div>
                                <h3 class="termInsuranceCalc-subTitle">Calculate Premium</h3>
                                <p class="termInsuranceCalc-subDesc">
                                On entering your personal details together with adjusting the coverage amount and term selected, the policy premium estimated by the calculator will be displayed. This premium must give an idea on how much is term insurance going to cost you. This is just an estimation and it does not signify the final rate of premium.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="termInsuranceCalc-img term-image"></div>
                </div>
                <div class="termInsuranceCalc-cta">
                    <a aria-label="Kotek e-term" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=redbutton1">Calculate Premium Now</a>
                </div>
            </div>
        </section>
        <section class="hid online-product terminsuranceplans" id="onlinePlans">
            <div class="midWrapper">
                <h2 class="onlinePlans-title">Online Insurance Plans from Kotak Life Insurance</h2>
                <div class="onlinePlans-card">
                    <div class="titleDownload">
                        <h3 class="onlinePlans-subTitle">Kotak e-Term</h3>
                        <div class="ml-auto tooltip">
                            <a aria-label="" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf" download="Brochure">
                                <button name="brochure" class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure" value="" type=""></button>
                            </a>
                        </div>
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
                                <div class="viewPlans"><a aria-label="trm insurance" class="text-left" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-e-term">Know More</a></div>
                                <div class="onlinePlans-cta">
                                    <a rel="nofollow" target="_blank" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card">
                                        Get Quote
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex"></div>
                        </div>
                        <div class="etem term-image"></div>
                    </div>
                </div>
                <div>
                    <div class="onlinePlans-card">
                        <div class="titleDownload">
                            <h3 class="onlinePlans-subTitle">Kotak Gen2Gen Protect</h3>
                            <div class="ml-auto tooltip">
                                <a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Gen2Gen_Protect.pdf" download="Brochure">
                                    <button name="brochure" class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button>
                                </a>
                            </div>
                        </div>
                        <div class="online-kpi">
                            <ul>
                                <li>100% Return of Premium</li>
                                <li>Life ROP and Legacy ROP plan options</li>
                                <li>Cover 2 generations under 1 plan</li>
                                <li>Additional 5% life cover for female lives</li>
                                <li>Enhanced Protection with Riders</li>
                                <li>Tax Benefits u/s 80C and 10(10d)</li>
                            </ul>
                            <div class="view-Cta">
                                <div class="viewPlans"><a aria-label="" class="text-left" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-gen2gen-protect">Know More</a></div>
                                <div class="onlinePlans-cta">
                                    <a
                                        aria-label=""
                                        rel="nofollow"
                                        target="_blank"
                                        href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card"
                                    >
                                        Get Quote
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid ulip-offline newprod" id="offlinePlans">
            <div class="midWrapper">
                <div class="roww bestsavgsp">
                    <div class="coll-md-3">
                        <span class="onlineplan">Offline plan</span>
                        <ul class="onlinegsp h-361 new-onlinegsp">
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
                                <div class="ml-auto tooltip">
                                    <a aria-label="" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Protect_India_Brochure1.pdf" download="Brochure">
                                        <button name="brochure" class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button>
                                    </a>
                                </div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="newspacechange">
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
                            <div class="view-Cta1">
                                <div class="onlinePlans-cta new_cta1"><a aria-label="" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-protect-india">Get Quote</a></div>
                            </div>
                        </div>
                        <div class="kotaksavcard accelcard op3">
                            <div class="d-flex">
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Term Plan</h3></div>
                                <div class="ml-auto tooltip">
                                    <a aria-label="" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-term-plan-brochure.pdf" download="Brochure">
                                        <button class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button>
                                    </a>
                                </div>
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
                            <div class="feats-buy text-left new-feats"><a aria-label="" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-term-plan">Know More</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op4">
                            <div class="d-flex">
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Saral Jeevan Bima</h3></div>
                                <div class="ml-auto tooltip">
                                    <a aria-label="" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-jeevan-bima-17-march-2021.pdf" download="Brochure">
                                        <button class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button>
                                    </a>
                                </div>
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
                            <div class="feats-buy text-left new-feats"><a aria-label="" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-saral-jeevan-bima">Know More</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op5">
                            <div class="d-flex">
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Health Maximiser</h3></div>
                                <div class="ml-auto tooltip">
                                    <a aria-label="" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Health-Maximiser-Brochure-Final.pdf" download="Brochure">
                                        <button class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button>
                                    </a>
                                </div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Provides Life cover along with Health Cover</li>
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
                            <div class="feats-buy text-left new-feats"><a aria-label="" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-health-maximiser">Know More</a></div>
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
                                            <div class="ml-auto tooltip">
                                                <a aria-label="" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Protect_India_Brochure1.pdf" download="Brochure">
                                                    <button name="brochure" class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="view-Cta1">
                                            <div class="onlinePlans-cta"><a aria-label="" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-protect-india">Get Quote</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor">
                            <button name="assured" class="accordion" role="heading" aria-level="3"><p class="bor-top-rad rad-top">Kotak Term Plan</p></button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="London" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Low cost term plan</li>
                                                        <li>Optional rider options to enhance protection/li></li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Tax benefits under Section 80C and 10 (10D)</li>
                                                        <li>Multiple premium payment options</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip">
                                                <a aria-label="" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-term-plan-brochure.pdf" download="Brochure">
                                                    <button class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="feats-buy text-left"><a aria-label="" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-term-plan">Know More</a></div>
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
                                            <div class="ml-auto tooltip">
                                                <a aria-label="" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-saral-jeevan-bima-17-march-2021.pdf" download="Brochure">
                                                    <button class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="feats-buy text-left"><a aria-label="" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-saral-jeevan-bima">Know More</a></div>
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
                                            <div class="ml-auto tooltip">
                                                <a aria-label="" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Health-Maximiser-Brochure-Final.pdf" download="Brochure">
                                                    <button class="broch-btn want-to-btn sep-btn brochure" aria-label="brochure"></button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="feats-buy text-left"><a aria-label="" target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-health-maximiser">Know More</a></div>
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
                <p class="benefitsOfTerm-desc">
                Term insurance plays a crucial role in financial planning giving you peace of mind and safeguarding against unexpected events. Let's dive into the benefits of term insurance and how it can boost your financial security.
                </p>
                <div class="textCenter benefit-img term-image mt10"></div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Affordable Premiums</h3>
                        <p class="benefitsOfTerm-subDesc">
                        A standout benefit of term insurance is its cost-effectiveness. It costs less than other life insurance options. Because it aims to cover you for a specific period of time, also known as a term, it offers the security you need without breaking the bank.

                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Flexibility</h3>
                        <p class="benefitsOfTerm-subDesc">
                        Term insurance gives you a lot of flexibility to customize both how long your policy lasts and how much it covers. You can pick a term that suits your needs and tweak the coverage amount whenever you want. This means your policy can keep up with your changing financial situation.

                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Pure Risk Coverage</h3>
                        <p class="benefitsOfTerm-subDesc">
                        Term insurance offers a simple way to safeguard your family & provide them with financial stability. As a pure-risk product, it comes with lower premiums because the life cover stays fixed based on what you pay.

                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Additional Life Coverage</h3>
                        <p class="benefitsOfTerm-subDesc">
                        If you've got existing life insurance already, term insurance can act as additional coverage to complement your existing policy. Purchasing additional term insurance can help cover any gaps in your coverage during important life stages giving you more peace of mind.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Future Planning</h3>
                        <p class="benefitsOfTerm-subDesc">
                        You can use term insurance to create a steady income source, pay off estate taxes, or clear outstanding debts. This makes sure your family doesn't struggle if something happens to you. With smart planning, you can leave a financial legacy for your loved ones.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Coverage for Critical Illnesses
                        </h3>
                        <p class="benefitsOfTerm-subDesc">
                        Many term insurance plans let you add extra protection for major health issues. These add-ons pay out money if you get diseases like cancer, have a heart attack, or suffer a stroke. You can get a lump sum amount to help you with hospital bills, which keeps your family's money safe.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Disability Support and Benefits</h3>
                        <p class="benefitsOfTerm-subDesc">
                        Some term insurance policies come with extra riders that provide you benefits if an accident leaves you unable to work. If you end up with a lifelong disability from an accident, these add-ons provide you with financial support to help pay for your daily needs and medical care during recovery.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Financial Security in Case of Unfortunate Events</h3>
                        <p class="benefitsOfTerm-subDesc">
                        If the insured person passes away during the policy period, term insurance provides a lump sum payment to the beneficiaries. This money helps your family to maintain their standard of living, pay off any existing debts, and make sure they're okay in the future.

                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Tax Benefits</h3>
                        <p class="benefitsOfTerm-subDesc">
                        The money you pay for term insurance can lower your taxes under Section 80C of the Income Tax Act. Plus, the money your family gets if you die isn't taxed under Section 10(10D). These tax breaks make term insurance even more helpful.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Death Benefit</h3>
                        <p class="benefitsOfTerm-subDesc">
                        Term insurance's primary benefit is the death benefit. If you die during the term, your beneficiaries get a lump sum payment. This money can help your family handle money issues and secure their future.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Survival Benefits</h3>
                        <p class="benefitsOfTerm-subDesc">
                        Although traditional term insurance policies don't pay out if you live longer than the policy, some plans do. These policies come with a "return of premium" choice, which pays you back all the money you paid in premiums if you outlive the policy term. This adds a way to save money and also have basic coverage.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Whole Life Cover</h3>
                        <p class="benefitsOfTerm-subDesc">
                        You can stretch some term insurance plans to cover you until you're 99 or 100 years of age, making them work like
                            <a aria-label="" class="inline-links" href="https://www.kotaklife.com/term-insurance/whole-life-insurance">whole life insurance</a>. This gives you lifelong protection so you know your beneficiaries will get the death benefit no matter when you pass away.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfTerm-list">
                    <div class="benefitsOfTerm-arrow bti-icon"></div>
                    <div>
                        <h3 class="benefitsOfTerm-subTitle">Riders and Add-ons</h3>
                        <p class="benefitsOfTerm-subDesc">
                        You can customize term insurance policies with different riders and add-ons to suit your specific needs. Some common riders include accidental death benefit, waiver of premium, and income benefit rider. These extra riders add more layers of protection making sure you are fully covered for any situation.
                        </p>
                    </div>
                </div>
                <div class="factorsAffecting-banner">
                    <h3>Get a life cover of ₹1.5 Cr. @ ₹22/day only</h3>
                    <div class="factorsAffecting-cta">
                        <a aria-label="" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=getalifecoverof15cr">Buy Term Insurance</a>
                    </div>
                </div>
                <div class="mt-50">
                    <div class="term-video-part"><div class="iframe-responsive" id="kotVideo"></div></div>
                </div>
            </div>
        </section>
        <section class="hid" id="factorsAffecting">
            <div class="midWrapper">
                <h2 class="factorsAffecting-title">Factors Affecting Term Insurance</h2>
                <p class="factorsAffecting-desc">
                When choosing the right term insurance for you, you must understand the factors that are necessary when determining the premium & 
                    <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/protection/eligibility-criteria-for-buying-term-insurance-in-india">eligibility for term insurance.</a>plans. Understanding these factors is crucial for individuals seeking to purchase a term insurance policy that suits their needs.
                </p>
                <div class="factorsAffecting-grid">
                    <div class="factorsAffecting-list">
                        <div class="factorsAffecting-img tp-sprites fati-icon1"></div>
                        <div>
                            <h3 class="factorsAffecting-subTitle">Coverage Amount</h3>
                            <p class="factorsAffecting-subDesc">
                            Have a look at your financial obligations, like any debts, future expenses, or any income replacement needs which will help you determine the right coverage amount for you. Make sure the death benefit is enough to provide your loved ones the best financial cushion.
                            </p>
                        </div>
                    </div>
                    <div class="factorsAffecting-list">
                        <div class="factorsAffecting-img tp-sprites fati-icon2"></div>
                        <div>
                            <h3 class="factorsAffecting-subTitle">Term Length</h3>
                            <p class="factorsAffecting-subDesc">
                            When picking the term length, consider your financial goals, age, and specific responsibilities. The policy should ideally cover the time when your family depends on you financially or when your financial obligations are the highest.
                            </p>
                        </div>
                    </div>
                    <div class="factorsAffecting-list">
                        <div class="factorsAffecting-img tp-sprites fati-icon3"></div>
                        <div>
                            <h3 class="factorsAffecting-subTitle">Premium Affordability</h3>
                            <p class="factorsAffecting-subDesc">
                            Have a look at your budget and make sure the premiums are within your budget. Even though term insurance can be very affordable, it's very important for you to choose a policy that you can make regular & consistent payments throughout the term.

                            </p>
                        </div>
                    </div>
                    <div class="factorsAffecting-list">
                        <div class="factorsAffecting-img tp-sprites fati-icon4"></div>
                        <div>
                            <h3 class="factorsAffecting-subTitle">Claim settlement ratio<sup>^</sup></h3>
                            <p class="factorsAffecting-subDesc">
                            Please check the claim settlement ratio<sup>^</sup>of the term insurance policy you're considering. This ratio shows you how many claims are settled compared to the number of claims made. A 97% <a class="inline-links" href="https://www.kotaklife.com/term-insurance/claim-settlement-ratio"> claim settlement ratio</a><sup>^</sup>means 97 out of the total 100 claims were settled by the insurance organization. Kotak Life Insurance has a great claim settlement ratio^ of 98.25%.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="factorsAffecting-banner">
                    <h3>Make your family stronger financially, after you with Kotak e-Term.</h3>
                    <div class="factorsAffecting-cta">
                        <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=makeyourfamilystronger">Get Quote</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="whyChooseKotak">
            <div class="midWrapper">
                <div class="whyChooseKotak-grid">
                    <div>
                        <h2 class="whyChooseKotak-title">Why Choose Kotak Life?</h2>
                        <p class="whyChooseKotak-desc">Kotak Life Insurance is one of the most trusted and fastest-developing names in the Indian<a href="https://www.kotaklife.com" class="inline-links">life insurance</a>industry.</p>
                        <br />
                        <p class="whyChooseKotak-desc">Added features that make Kotak Life the best choice to choose from are as follows:</p>
                        <ul class="whyChooseKotak-list">
                            <li>Professional Approach:  Kotak Life consists of a workforce that is professional, experienced, and highly qualified in terms of providing quality customer service.
                            </li>
                            <li> Cost Management:  We believe in efficiently managing costs and have therefore succeeded in offering very competitive premiums</li>
                            <li>Constant Zeal for Improvement: We are always trying to improve our products and services to satisfy our customers.
                            </li>
                        </ul>
                        <p class="whyChooseKotak-desc">If you are looking for top-notch customer service and easily manageable plans, you are thinking Kotak Life.
                        </p>
                    </div>
                    <div class="whychosse-img term-image"></div>
                </div>
            </div>
        </section>
        <section id="fullWBanner" class="bgBlue hid">
            <div class="blueBg">
                <div class="midWrapper">
                    <div class="blueBg-grid">
                        <div class="textLeft">
                            <h3 class="blueBg-title">Choose the plan that works best for your family’s financial future.</h3>
                            <div class="termPlan-cta2" style="text-align: left;">
                                <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=choosetheplanthatworksbest">
                                    Buy Kotak e-Term online!
                                </a>
                            </div>
                        </div>
                        <div class="blueBg-img term-image"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="typeOfTerm">
            <div class="midWrapper">
                <h2 class="typeOfTerm-title">Types of Term Insurance Plans</h2>
                <p class="typeOfTerm-desc">
                There are several types of term insurance plans available in the market to suit different people’s needs and requirements. Knowing these variations can help you choose the<a class="inline-links" href="https://www.kotaklife.com/term-insurance/what-is-term-insurance">term insurance</a>that could meet your financial goals and bring peace of mind to you and your family. Here are the various types of term insurance policies available while opting for pure life cover.

                </p>
                <div class="typeOfTerm-cards">
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon1"></div>
                        <h3 class="typeOfTerm-subTitle">Basic Term Insurance Policy</h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        Basic term insurance also known as pure term insurance offers your beneficiary the death benefit in the event of any untimely death. This policy does not include maturity benefits at the end of the term if you survive the policy term.
                        </p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon2"></div>
                        <h3 class="typeOfTerm-subTitle">Increasing Term Insurance Plan</h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        An increasing term plan is a type of dynamic policy, where the sum assured amount grows progressively over the years. The death benefit can have an upper cap on the sum assured's growing amount. This policy, just like the basic term policy, does not give any maturity benefits but does have life coverage.

                        </p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon3"></div>
                        <h3 class="typeOfTerm-subTitle">Decreasing Term Insurance Plan</h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        In decreasing term policies, the death benefit amount goes on declining gradually as the policy term is about to end. Such policies usually have affordable premiums because their core purpose is to cover some specific debt or loans.
                        </p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon4"></div>
                        <h3 class="typeOfTerm-subTitle">Term Policy with Return of Premium (TROP)</h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        In a TROP plan, you can get back all the premiums paid, throughout the policy term, after the plan expires. All the premiums are returned to you under this arrangement. TROP plans also provide a maturity benefit, apart from life coverage being provided if you survive the policy term.

                        </p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon1"></div>
                        <h3 class="typeOfTerm-subTitle">Term Insurance with Critical Illness Cover</h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        Term insurance with critical illness cover has a rider upon which the policyholder or the beneficiary is given a lump sum in case a person gets diagnosed with a critical illness such as cancer, heart attack or stroke. This can help cover the heavy costs of medical treatment for critical illnesses one may have to go through, providing a cushion of financial relief during these difficult times.
                        </p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon2"></div>
                        <h3 class="typeOfTerm-subTitle">Term Insurance with Accidental Death Cover</h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        This type of term insurance may have an added feature of accidental death rider wherein the policyholder receives an additional payout if the cause of death is an accident. The accidental death benefit is usually a multiple of the basic sum assured and, therefore, gives additional financial protection to the policyholder's family in the case of an accidental death.

                        </p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon3"></div>
                        <h3 class="typeOfTerm-subTitle">Limited Pay Term Insurance
                        </h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        Limited pay term insurance is a policy where the policyholder pays premiums for a short duration of time while he is covered for a longer duration till the end of the term. For example: You shall pay the premium only for 10 years, but you will be covered either for 20 or 30 years. No doubt, such a plan will definitely be very useful for a person who wants to pay premiums for a shorter duration but also enjoys long-term protection.
                        </p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon4"></div>
                        <h3 class="typeOfTerm-subTitle">Group Term Life Insurance Plan</h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        Group term life insurance plans refer to those that are normally provided by employers or different associations to their staff or employees. It is a means by which life coverage is provided at relatively lower premiums on account of its group nature. Group term insurance is an effective means to provide financial security to many under a single insurance plan.
                        </p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon1"></div>
                        <h3 class="typeOfTerm-subTitle">Pure Protection Term Plans</h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        Pure Protection term plans basically focus on providing life coverage with no additional benefits or savings component. The plans are designed to offer maximum coverage at the least possible premium which makes them perfect for people looking for comprehensive protection without any investment element.
                        </p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon2"></div>
                        <h3 class="typeOfTerm-subTitle">Term Insurance with Wellness Benefits</h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        Some term insurance policies of today have wellness benefits that encourage a healthy lifestyle.  Some of these benefits may include discounts given on premiums payable for maintaining a healthy lifestyle, periodic health checkups, and engagement in wellness programs. These policies not only motivate people to have a healthy lifestyle but also lower their health expenses thereby increasing their life expectancy.
                        </p>
                    </div>
                    <div class="typeOfTerm-card">
                        <div class="ttp-sprites ttip-icon3"></div>
                        <h3 class="typeOfTerm-subTitle">Term Insurance with Health Benefits</h3>
                        <hr class="typeOfTerm-hr" />
                        <p class="typeOfTerm-subDesc">
                        The term insurance policies with health benefits normally provide health protection for hospitalization expenses, including surgeries & other health or medical related costs. These policies are also offered with riders, whereby a lump sum or reimbursement of medical expenses is offered in the case of the policyholder being ill or injured, thereby providing comprehensive financial protection.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="featureOfTerm">
            <div class="midWrapper">
                <h2 class="featureOfTerm-title">Features of Term Insurance Plan</h2>
                <p class="featureOfTerm-desc">
                Though purchasing a term insurance cover is one of the most affordable options to provide your dependents with financial security, it is indeed a responsible move to safeguard their financial future. Unlike any other
                    <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/about-life-insurance/types-of-life-insurance-policies">types of life insurance policies</a>, the term insurance policy provides pure protection coupled with a higher sum assured at a lower premium. Read on to learn more about the important features of the term plan that make it attractive to most people.
                </p>
                <div class="featureOfTerm-cards">
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Multiple Payment Modes</h3>
                            <p class="featureOfTerm-subDesc">
                            While the low premiums already make these plans lucrative, different payment methods add to the benefits and satisfy and suit a wider range of policy buyers. They may pay the premiums yearly, half-yearly, quarterly, or monthly, depending upon their convenience, and even as a single payment.
                            </p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Policy Terms and Premiums</h3>
                            <p class="featureOfTerm-subDesc">
                            Because term insurance premiums usually do not have any investment components, the premium one pays for buying a term insurance plan is normally less, unlike other life insurance products. Again, when one purchases a term plan while young, in most cases it results in cheaper premiums.
                            </p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Protection from Liability
                            </h3>
                            <p class="featureOfTerm-subDesc">
                            Term insurance offers massive coverage against liabilities such as home loans, personal loans, and other debts due. In the case of the untimely demise of the policyholder, this death benefit shall be used to help pay pending debts and hence save your surviving family members from the financial burden.
                            </p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Save Tax U/S 80C & 80D Income Tax Act, 1961</h3>
                            <p class="featureOfTerm-subDesc">
                            Other than Section 80C, the premium that is paid for any rider that covers health-related expenses such as Critical illness riders is allowed as a deduction under
                                <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/savingstax/section-80-d-deduction-of-income-tax-act">Section 80D</a>. This then provides additional tax savings and makes a term insurance investment tax efficient.


                            </p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Refund of Premiums on Survival
                            </h3>
                            <p class="featureOfTerm-subDesc">
                            Some term insurance plans have this return of premium feature whereby, if the policyholder outlives the policy term, then all premiums that he had paid are returned. The option brings together the advantages related to pure risk coverage with a savings element so that the policyholder is guaranteed to get a return on his investment.
                            </p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">High Maturity Age</h3>
                            <p class="featureOfTerm-subDesc">
                            Most of the term insurance plans extend coverage up to a considerably high maturity age of 75 or even 100 years. This thus ensures long-term financial protection, peace of mind, and financial security for your loved ones, irrespective of when the event of death may occur.
                            </p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Critical illness cover
                            </h3>
                            <p class="featureOfTerm-subDesc">
                            These plans provide a term insurance plan that offers a lump sum payout on the occurrence of any of the critical illnesses specified in the policy document. Such a payout can be availed to compensate for loss of income, medical expenses, and other financial expenses throughout the recovery period. That is to say, one gets comprehensive financial support during times of health crisis.
                            </p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Return of Premium on Maturity</h3>
                            <p class="featureOfTerm-subDesc">
                            Policies with the return of premium on maturity feature return all the premiums paid if the policyholder survives the policy term. This provides a financial cushion and a certain savings element that was lacking in pure protection given by term insurance.
                            </p>
                        </div>
                    </div>
                    <div class="featureOfTerm-card">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="featureOfTerm-subTitle">Accidental Death and Disability Cover</h3>
                            <p class="featureOfTerm-subDesc">
                            The accidental death and disability cover riders provide extra benefits in the event of death or disability due to an accident. The accidental death rider provides an additional payout, while an accidental disability rider allows one to seek financial support in cases of permanent or temporary disability through the coverage of treatment expenses, and loss of income.
                            </p>
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
                        <p class="whyBuyTerm-desc">
                        Life is very uncertain and cannot be predicted. You may never know when an unfortunate incident may happen & leave your loved ones without any financial security. You should prepare your family for a such a situation and a term insurance plan can help you do so.
                        </p>
                        <br />
                        <p class="whyBuyTerm-desc">
                        While it is normal to focus on investments that provide immediate returns, neglecting the
                            <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/about-life-insurance/important-features-of-a-term-insurance-plan">importance of a term insurance plan</a>can leave a person’s family vulnerable to financial uncertainties. You can ensure your loved ones are shielded from the financial burdens after you by taking a term plan.
                            A best term insurance plan is the one that can help you take care of all your commitments in one life cover. Therefore, aim at having a life cover of at least 10 times your annual income. You can opt for coverage more than 10 times your annual income, but you should never opt for coverage less than that.

                        </p>
                        <br />
                        <p class="whyBuyTerm-desc">
                        A term life insurance plan is a very important financial tool that offers comprehensive protection and ensures the financial safety & well-being of your family. Its affordability, flexibility, and tax benefits make it the best choice for people seeking financial security.
                        </p>
                        <!-- <br />
                        <p class="whyBuyTerm-desc">
                            A term life insurance plan is a vital financial tool that offers comprehensive protection and ensures the financial well-being of your family. Its affordability, flexibility, and tax benefits make it an
                            attractive choice for individuals seeking financial security.
                        </p> -->
                    </div>
                    <div class="whyBuyTermglid-img term-image"></div>
                </div>
            </div>
        </section>
        <section class="hid" id="whoShouldBuy">
            <div class="midWrapper">
                <h2 class="whoShouldBuy-title">Who Should Buy a Term Insurance Policy?</h2>
                <p class="whoShouldBuy-desc">
                Any person with financial dependents should definitely go for a term insurance policy. This would, in general, include parents, single women or men having senior parents, professionals with debts or loans, people nearing retirement, etc.
                </p>
                <br />
                <p class="whoShouldBuy-desc">
                   Purchasing a term insurance plan also brings for you tax benefits under
                    <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction">Section 80C</a>and
                    <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know">Section 10(10D)</a>of the Income Tax Act, 1961. This is in conjunction with reducing your taxable income. Here is a detailed version of who should buy a term plan:

                </p>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon1"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Parents</h3>
                        <p class="whoShouldBuy-subDesc">
                        As parents, your spouse, children, and your parents may be financially dependent on you. You can help secure the future of your children, take care of your parents, and pay outstanding dues. Be assured that, once you get a term life insurance plan, you can be free of stress about the financial condition of your loved ones.
                        </p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon2"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Professionals</h3>
                        <p class="whoShouldBuy-subDesc">
                        You might have availed of some education loan to go abroad and study. But in the event of your death, your parents shouldn't bear the brunt of the debt. The sum assured of the term plan can be used to clear off your study loan.
                        </p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon3"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Retirees</h3>
                        <p class="whoShouldBuy-subDesc">
                        Term insurance is a perfect way to safeguard interests in case of death if you are going to retire soon and have dependents or debts. Not only the death benefit would be sufficient to pay back any kind of debt, but will also help your family member financially.
                        </p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon4"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Taxpayers</h3>
                        <p class="whoShouldBuy-subDesc">
                        People who seek some tax savings that give beneficial returns can opt for term insurance. The investment in a term plan is the perfect way of getting tax benefits & earning a life cover. The premium paid for the term insurance policies is deductible under Section 80C of the Income Tax Act, 1961.
                        </p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon5"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Working Women</h3>
                        <p class="whoShouldBuy-subDesc">
                        Today, women support families not only emotionally but also financially. They can secure the future of their family with a term plan so their family members and the dreams of little ones are secured, even in their absence.
                        </p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon1"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Young Individuals</h3>
                        <p class="whoShouldBuy-subDesc">
                        By purchasing term insurance early, individuals, especially young professionals at the threshold of their careers, can lock in lower rates in premium payments. At a young age, most policyholders have fewer health issues and lower risk profiles, hence they can benefit from affordable premiums with a view of securing long-term financial protection for their future families and dependents.
                        </p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon2"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Self-employed</h3>
                        <p class="whoShouldBuy-subDesc">
                        Most of the self-employed people cannot avail of the benefit of life insurance offered by the employer. For such a person, the term insurance policy is a must to keep his family on a sound financial footing in case of untimely death. It shall definitely ensure his family is left burdened with business liabilities and other financial burdens. 
                        </p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon3"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Non-resident Indian (NRI)</h3>
                        <p class="whoShouldBuy-subDesc">
                        A term insurance policy is essentially a must for NRIs with families or other financial interests in India to ensure protection for loved ones back home. The term insurance provides a financial safety net that can take care of family needs from anywhere in the world.
                        </p>
                    </div>
                </div>
                <div class="whoShouldBuy-flex">
                    <div class="who-sprites who-icon4"></div>
                    <div>
                        <h3 class="whoShouldBuy-subTitle">Senior Citizens</h3>
                        <p class="whoShouldBuy-subDesc">
                        This will also help senior citizens who still have dependents or who want to leave behind a financial legacy. Though the premium payable would be more, term insurance can definitely address final expenses and outstanding debts, while also helping with financial support for the surviving family.
                        </p>
                    </div>
                </div>
                <div class="whoShouldBuy-cta">
                    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=redbutton3">Safeguard Your Family's Future -Buy Kotak e-Term</a>
                </div>
            </div>
        </section>
        <section class="hid" id="testimonial">
            <div class="midWrapper">
                <div class="testimonial-bg">
                    <h3 class="testimonial-title">Testimonials</h3>
                    <div class="saving-testimonial savetest">
                        <div>
                            <div class="custom-review">
                                <p>
                                My experience with Kotak e-Term Plan from filling the proposal form to policy issuance has been smoother. Uploading document is generally challenging, but it was quite easier with Kotak Life. Their portal is responsive and intuitive. Keep up the good work.

                                </p>
                                <p class="stes-head">- Mukund Solanke</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                Buying a term plan was long due for me. I found Kotak Life, logged in on their website and I got a call from their agent. I checked my eligibility through their portal, got a quote for the premium and I was in. My family's financial security was now in my hands. Now my life is stress-free.
                                </p>
                                <p class="stes-head">- Rahul Gupta</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                Buying a term plan online sounded like a challenge as I am not used to buying critical insurance plans online. I came across Kotak Life when someone at work recommended to buy their Kotak e-Term plan. The plan is very simple, offered me plan options and I knew exactly that this was the right plan for me.
                                </p>
                                <p class="stes-head">- Pranjal Gusain</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                I have a good financial portfolio but there was one thing missing, a term plan. I wanted to buy term plan was to ensure my spouse's financial future and keep her ready for any financial liabilities in my absence. After considering different plans, I finalized Kotak e-Term plan since it aligned perfectly with what I was looking for.
                                </p>
                                <p class="stes-head">- Shehzan Merchant</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                Be it my family's financial future or my little one's happiness, Kotak e-Term plan helped me secure all of it in one insurance plan. They have affordable premiums, good life cover and some rider options that helped me manage many things at once. I strongly recommend you to buy a Kotak e-Term plan asap.
                                </p>
                                <p class="stes-head">- Apurva Amod Gadikar</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                I was looking for a term plan when I came across Kotak e-Term plan and used their portal to calculate premium. They have a simple portal where you enter the information and get a quote. Beyond that, I just enjoyed the fact that their journey is easy to follow and their call centre team assists if you are stuck somewhere.
                                </p>
                                <p class="stes-head">- Anil Kumar G</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                Kotak e-Term plan was one of the recommended term plan while I was researching about the same. The service by the call centre agents was good. Also, their online portal is perfect. The Kotak e-Term plan helped me to become stress-free about any financial liability that might fall on my family, after me.
                                </p>
                                <p class="stes-head">- Apurva Amod Gadikar</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                Kotak e-Term plan was a term plan I came across in an ad while surfing social media. I could not find a better term plan. It is affordable and they have good service centre agents who help you with everything kindly and patiently. Buy a term plan if you want to live a stress-free life, save taxes and ensure your family's finance is in good hands.
                                </p>
                                <p class="stes-head">- Rajaganesh Rj</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                A term plan is one of the insurance policies everyone should have, as per me. I bought Kotak e-Term plan and paying premiums for a year or more. The best part is it offered me flexible premium payment options that aligned with my financial commitments. Plus, they have different plan options that makes it easier for choosing the right cover as per your needs.
                                </p>
                                <p class="stes-head">- Jayant Mohanrao Gaikwad</p>
                            </div>
                        </div>
                    </div>
                    <span class="pagingInfo-review-tes d-flex playfair_font justify-content-center"></span>
                </div>
            </div>
        </section>
        <section class="hid" id="howToChooseBestTerm">
            <div class="midWrapper">
                <h2 class="bestTerm-title">How to Choose the Best Term Insurance Plan?</h2>
                <p class="bestTerm-desc">
                Term insurance is very important for ensuring the sound financial future of your loved ones. It offers a cost-effective way of protecting your family from all unexpected situations. With so many insurance companies and innumerable policy options available in the market, choosing the best term insurance plan seems to be a difficult and confusing task.
                </p>
                <br />
                <p class="bestTerm-desc">There are various factors that you need to check and compare before choosing a term insurance policy from a particular insurer. Here are some factors that you should consider before buying a policy:</p>
                <div class="bestTerm-cards">
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">1</div>
                        <h3 class="bestTerm-subTitle"> Assessment of Your Insurance Needs</h3>
                        <p class="bestTerm-subDesc">
                        The first step to buying the right term insurance plan is to assess your needs. Your needs have to be assessed based on your age, income, financial liabilities, future goals, and the number of dependents.
                        </p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">2</div>
                        <h3 class="bestTerm-subTitle">Compare Multiple Plans</h3>
                        <p class="bestTerm-subDesc">
                        One can get the best term life insurance in India only by comparing several plans and their offers. One needs to look out for only those plans that are credible and have a record of settling claims pretty quickly, other than other benefits.
                        </p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">3</div>
                        <h3 class="bestTerm-subTitle"> Decide the Policy Tenure
                        </h3>
                        <p class="bestTerm-subDesc">
                        Term insurance plans offer coverage for a specific period, called the policy tenure. Depending on aspects like your age, financial liabilities & long-term financial goals, you should choose a policy tenure that gives your dependents adequate coverage to fulfill their needs, like education or mortgage payments.
                        </p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">4</div>
                        <h3 class="bestTerm-subTitle">Check the Sum Assured</h3>
                        <p class="bestTerm-subDesc">
                        Sum assured refers to the amount your nominees would get if you pass away. It should be such that with this money, all your family liabilities like loans, future liabilities, and income replacement would be done away with.

                        </p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">5</div>
                        <h3 class="bestTerm-subTitle">Check the Premium Payment Structure
                        </h3>
                        <p class="bestTerm-subDesc">
                        Term insurance policies have many premium paying options, including single, quarterly, yearly, half-yearly, or even monthly payment plans. Cross-check your cash flows and affordability before arriving at premium payment intervals.
                        </p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">6</div>
                        <h3 class="bestTerm-subTitle">Read the Policy Terms and Conditions</h3>
                        <p class="bestTerm-subDesc">
                        Read through the terms and conditions of the plan of term insurance carefully and understand them before proceeding to buy it. Look out for factors like policy exclusions, waiting periods, and claim settlement procedures.
                        </p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">7</div>
                        <h3 class="bestTerm-subTitle">Check the Claim Settlement Ratio<sup>^</sup></h3>
                        <p class="bestTerm-subDesc">
                        This is the ratio where the percentage of claims settled successfully by the insurer is taken against the number of claims received by the insurer. As of date, Kotak Life Insurance enjoys a very good Claim Settlement Ratio<sup>^</sup>of 98.25% for the FY 2022-23.

                        </p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">8</div>
                        <h3 class="bestTerm-subTitle">Assess Riders Available
                        </h3>
                        <p class="bestTerm-subDesc">
                        Term life insurance plans could come with a number of riders or add-ons for additional coverage. Some common ones are critical illness coverage, accidental death benefit, waiver of premiums, and disability cover. Look up these riders to see which one, or more, you would like to add to your term life insurance plan.
                        </p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">9</div>
                        <h3 class="bestTerm-subTitle">Check Solvency Ratio<sup>*</sup></h3>
                        <p class="bestTerm-subDesc">
                        The solvency ratio<sup>*</sup> is another avenue that one must not ignore while taking a term policy. It represents the insurance company's ability to meet monetary demands and financial strength or stability. In the fiscal year 2022-2023, Kotak Life Insurance's solvency ratio<sup>*</sup> stands at 2.83%.
                        </p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">10</div>
                        <h3 class="bestTerm-subTitle">Consider Quality of Service and Online Availability</h3>
                        <p class="bestTerm-subDesc">
                        Access the insurance provider’s service quality such as customer support, efficiency in the process of claim, and ease of accessibility to information of the policies. You should choose the insurance companies that support the policyholders with online services, such as making payments for premiums, renewing policies, and filing claims, through which you can easily and conveniently manage your policy.
                        </p>
                    </div>
                    <div class="bestTerm-card">
                        <div class="bestTerm-no">11</div>
                        <h3 class="bestTerm-subTitle">Opt for a Term Insurance Plan with Multiple Payout Options
                        </h3>
                        <p class="bestTerm-subDesc">
                        Some of the term insurance policies offer multiple payout options such as such as lump-sum payment, monthly income, or a combination of both. You can benefit from choosing the payout option that best fits your financial needs. For example: a monthly payout option can help in managing your daily/ monthly expenses whereas a lump-sum payout option can help you pay off your debts or make large investments.
                        </p>
                    </div>
                </div>
                <div class="factorsAffecting-banner">
                    <h3>Get your premium back, while securing your family’s financial security</h3>
                    <div class="factorsAffecting-cta">
                        <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=getyourpremiumback">Get Quote</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="whyYouNeedTerm">
            <div class="midWrapper">
                <h2 class="whyYouNeedTerm-title">Why do you need Term Insurance?</h2>
                <p class="whyYouNeedTerm-desc">
                Purchasing term insurance is one of the most important ways to protect a loved one's financial future. It's an easy and inexpensive way of securing your family against financial loss in case of some unfortunate event of death.

                </p>
                <div class="whyYouNeedTerm-cards">
                    <div class="whyYouNeedTerm-card">
                        <div class="whyneed-sprites why-icon1"></div>
                        <h3 class="whyYouNeedTerm-subTitle">For Protecting Your Family
                        </h3>
                        <p class="whyYouNeedTerm-subDesc">
                        The general purpose of a term insurance policy is to buy financial protection for your family. In case of an unfortunate event of death, the policy ensures that your family does not have to go through any financial hardships. The death benefit can be used to cover daily living expenditures and also reimburse the child's education and other valuable expenses that might have occurred in living with the standard or in achieving long-term aims and aspirations. It assures peace of mind in the sense that even in your absence, your family will be financially safeguarded.
                        </p>
                    </div>
                    <div class="whyYouNeedTerm-card">
                        <div class="whyneed-sprites why-icon2"></div>
                        <h3 class="whyYouNeedTerm-subTitle">For Protecting your Assets</h3>
                        <p class="whyYouNeedTerm-subDesc">
                        Term insurance can readily help you protect assets of very high value. Supposing you have large financial liabilities such as a home loan, car loan, or personal loan; in such a situation, the death benefit from a term insurance policy can be utilized to pay off such debts. This makes sure that your family does not fall under the responsibility of paying back the sum; therefore, they can retain all possessions-small or big, like your house or your car. By protecting one's assets, the term policy allows one to secure his family's finances and his legacy.
                        </p>
                    </div>
                    <div class="whyYouNeedTerm-card">
                        <div class="whyneed-sprites why-icon3"></div>
                        <h3 class="whyYouNeedTerm-subTitle">To Help You Face New Lifestyle Risks</h3>
                        <p class="whyYouNeedTerm-subDesc">
                        The new lifestyle opens up a variety of risks and uncertainties it, like critical illness, accidents, and fluctuating economic conditions. It is because term insurance policies come with riders and add-ons that provide coverage against these risks. For instance, critical illness riders will give a lump sum if you get diagnosed with some serious illness, thereby covering treatment and the loss of income. Accidental death and disability riders provide additional benefits in cases of accidental injuries. These optional coverages can help you to get full protection that can let you survive sudden eventualities without much depletion of your savings.

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="termPlanSecure">
            <div class="midWrapper">
                <div class="termPlanSecure-grid">
                    <div>
                        <h2 class="termPlanSecure-title">How Does a Term Plan Secure Your Family’s Future?</h2>
                        <p class="termPlanSecure-desc">
                            Considering today's uncertainties, including the deadly pandemic COVID-19, a
                            <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/protection/protection-for-your-family"> term plan for a family </a>could be all the more important. It helps your family handle the financial difficulties that may arise if they were to lose their main source of income.

                        </p>
                        <br />
                        <p class="termPlanSecure-desc">Further, this shall aid in repaying all other liabilities, such as car loans and a home mortgage; hence, it will keep your family free from liabilities after you.</p>
                    </div>
                    <div class="termsecure-img term-image"></div>
                </div>
            </div>
        </section>
        <section class="hid" id="howToBuyTerm">
            <div class="midWrapper">
                <h2 class="howToBuyTerm-title">How to Buy Term Life Insurance Plan Online?
                </h2>
                <p class="howToBuyTerm-desc">
                The ease and reach of online platforms in today's digital world have revolutionized the way one shops for products and services, including insurance. One of the most well-detected methods for buying a term life policy is online because it is easy and hassle-free.
                </p>
                <div class="">
                    <div class="benefitsOfTerm-list">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="benefitsOfTerm-subTitle">Step 1: Calculate Your Sum Assured</h3>
                            <p class="benefitsOfTerm-subDesc">
                            The first step towards buying a term life policy online is the sum assured amount, which is actually the amount your nominees are supposed to get in case of your unfortunate demise during the tenure of this policy. Now, the points to consider while calculating the correct sum assured amount are as follows:
                            </p>
                            <ul class="whyChooseKotak-list ul-left">
                                <li class="spacebottom"><b>Your Current Income:</b>As a rule of thumb, go for the sum assured amount that should be 10-15 times your current annual income.
                                </li>
                                <li class="spacebottom"><b>Outstanding Liabilities:</b>Include all outstanding liabilities in the form of housing, automobile, and personal loans.
                                </li>
                                <li class="spacebottom"><b>Long-term Goals:</b>Account for future expenses that may include children's education, marriage, and retirement planning.
                                </li>
                                <li class="spacebottom"><b>Expenses on Living:</b> You need to estimate the monthly living expenses of your family so that they can have a decent standard of living.
                                </li>
                            </ul>
                            <p class="benefitsOfTerm-subDesc using">Many insurance company websites offer online calculators that help you arrive at an accurate figure for the sum assured.</p>
                        </div>
                    </div>
                    <div class="benefitsOfTerm-list">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="benefitsOfTerm-subTitle">Step 2: Select Your Benefits and Get a Quote
                            </h3>
                            <p class="benefitsOfTerm-subDesc">Once the sum assured is calculated, you will have to choose the benefits and additional riders that best fit your needs. Some of the common riders are as follows:</p>
                            <ul class="whyChooseKotak-list ul-left">
                                <li class="spacebottom"><b>Critical Illness Cover:</b>It pays a lump sum if the insured person is diagnosed with a critical illness.</li>
                                <li class="spacebottom"><b>Accidental Death Benefit:</b>This rider provides an additional amount if the death happens due to an accident.</li>
                                <li class="spacebottom"><b>Waiver of Premium:</b>It ensures that in case of disability or critical illness, all future premiums are waived off.
                                </li>
                                <li class="spacebottom"><b>Income Benefit Rider:</b>This rider provides your family with a regular income for a specified period.</li>
                            </ul>
                            <p class="benefitsOfTerm-subDesc using">
                            Once you select the benefits and riders you require, obtain a quote from more than one insurer. You can compare premium rates, coverage features, and the benefits of various policies using online comparison tools.

                            </p>
                        </div>
                    </div>
                    <div class="benefitsOfTerm-list">
                        <div class="benefitsOfTerm-arrow bti-icon"></div>
                        <div>
                            <h3 class="benefitsOfTerm-subTitle">Step 3:  Fill in the Details and Pay the Premium
                            </h3>
                            <p class="benefitsOfTerm-subDesc">After you have identified the most appropriate term insurance plan for your requirements, apply as follows:</p>
                            <ul class="whyChooseKotak-list ul-left">
                                <li class="spacebottom">
                                    <b>Enter Personal and Medical Details:</b> Fill up the online application form with your details regarding name, age, gender, contact details, and address. You have to mention the health conditions, lifestyle habits like smoking and drinking, and medical history. Some insurers may ask for a medical check-up as per your age and sum assured amount.

                                </li>
                                <li class="spacebottom">
                                    <b>Upload Documents:</b> You would most likely need to upload scanned copies of the required proof of identity, residential proof, age proof, and income proof documents in digital format. These generally consist of an Aadhaar card, PAN card, passport, utility bills, salary slips, and income tax returns. 
                                </li>
                                <li class="spacebottom">
                                    <b>Review and Confirm:</b> Ensure that each detail entered in the form is appropriate and accurate. Failure to do so may lead to delayed issuance of the policy or, in the worst case, no settlement of the claims.
                                </li>
                                <li class="spacebottom">
                                    <b>Pay the Premium:</b>Choose the mode of payment you prefer-credit card, debit card, net banking, or UPI-and pay the premium. Most insurers do have safe and secure online payment gateways for ease of transactions.

                                </li>
                                <li class="spacebottom">
                                    <b>Receive Policy Documents:</b> Upon successful premium payment, a confirmation mail will be generated and the policy documents will be sent to you. This will contain the policy schedule, terms and conditions, and the certificate of insurance. Keep these documents safe for future reference.



                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="mobblock deskNone stepsToBuy">
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
                </div> -->
            </div>
        </section>
        <section class="hid" id="whyBuyTermOnline">
            <div class="midWrapper">
                <h2 class="whyBuyTermOnline-title">Why Buy a Term Plan Online?</h2>
                <p class="whyBuyTermOnline-desc">Online purchase of insurance policies, especially term plans, has become quite popular because of its convenience, affordability, and many other benefits.</p>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon1"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Convenience</h3>
                        <p class="whyBuyTermOnline-subDesc">
                        The biggest benefit of buying a term plan online is the associated convenience factor. You may go through the plans, features, and the premium quotes at your own convenience and from the comfort of your home.
                        </p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon2"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Transparency</h3>
                        <p class="whyBuyTermOnline-subDesc">
                        Online purchase of a term plan removes every possibility of ambiguity or miscommunication that arises due to agents. The online insurance platforms provide detailed information regarding the policy terms, conditions, coverage, and exclusions of the policies.
                        </p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon3"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Cost-effective</h3>
                        <p class="whyBuyTermOnline-subDesc">
                        When you buy a term plan online, more often than not, you do away with the intermediaries, be it an agent or broker. This brings down the cost of administration and the commissions that are usually built into the offline policies.
                        </p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon4"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Easy Comparison</h3>
                        <p class="whyBuyTermOnline-subDesc">
                        You can easily look up and compare the coverage, premium, claim settlement ratio<sup>^</sup>, solvency ratio<sup>*</sup>,customer reviews, and ratings, all under one roof. It will help in making it easy to shortlist on a term plan that caters most to your requirements and budget.</p>
                        <p class="whyBuyTermOnline-subDesc"> Kotak Life Insurance offers up to an outstanding 98.25% claim settlement ratio<sup>*</sup> of 2.83.


                        </p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon6"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Faster Policy Issuance</h3>
                        <p class="whyBuyTermOnline-subDesc">
                        In the case of an offline insurance policy, much documentation and verification work is involved, which might cause some delay in issuing the policy. Once you fill up the online application and the required verification checks are completed, the policy documents are generated instantaneously or at best in a very short period of time.


                        </p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon7"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">24/7 Availability of information</h3>
                        <p class="whyBuyTermOnline-subDesc">
                        Another major benefit associated with buying a term plan online is that information and services are available throughout the day. You can log in to websites or mobile applications of insurance companies any time you want to read about, purchase, or manage your insurance policy.
                        </p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon1"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Add ons</h3>
                        <p class="whyBuyTermOnline-subDesc">
                        There are many add-ons and riders available on online insurance platforms that you could personalize based on your needs. Critical illness cover, accidental death benefit, waiver of premium, and a lot more can be added. Easy addition of such riders would make sure that you would be able to tinker with a policy for sure to ensure comprehensive coverage.
                        </p>
                    </div>
                </div>
                <div class="whyBuyTermOnline-flex">
                    <div class="wbuy-sprites wbuy-icon2"></div>
                    <div>
                        <h3 class="whyBuyTermOnline-subTitle">Comprehensive Features</h3>
                        <p class="whyBuyTermOnline-subDesc">
                        Online term plans mostly come with comprehensive features so as to cater to diverse requirements. You will get flexible premium payment options, high sum assured, return of premium options, and multiple payout options—all of which shall ensure that you get to pick a policy in perfect sync with your financial goals and requirements.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="termInsuranceRider">
            <div class="midWrapper">
                <h2 class="termInsuranceRider-title">What is a Term Insurance Rider?</h2>
                <p class="termInsuranceRider-desc">
                    A<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/protection/understanding-term-insurance-riders">term insurance rider</a>also referred to as the term life insurance rider, is an extra feature or provision which can be attached or added to the primary life insurance policy, providing extra coverage for a specific period of time called the "term" upon payment of an extra premium.

                </p>
                <div class="termInsuranceRider-grid">
                    <div class="termInsuranceRidergrid-img term-image"></div>
                    <div>
                        <div class="mt20">
                            <h3 class="termInsuranceRider-subTitle">Waiver of Premium Due to Permanent Disability</h3>
                            <p class="termInsuranceRider-subDesc">
                            This will help you keep your life insurance coverage valid, even though you might not be able to pay your premiums. This policy has the effect of waiving all future premiums in the event of permanent disability, but the policy benefits continue for the duration of the policy.
                            </p>
                        </div>
                        <div class="mt20">
                            <h3 class="termInsuranceRider-subTitle">Critical Illness Cover</h3>
                            <p class="termInsuranceRider-subDesc">
                            This rider has an additional premium payment that can be paid in case one is diagnosed with any of the <a class="inline-links" href="https://www.kotaklife.com/term-insurance/critical-illness">critical illnesses</a> stated therein in a policy document. This benefit is very similar to an income replacement plan, and the proceeds can be used to cover both medical and domestic expenses.

                            </p>
                        </div>
                        <div class="mt20">
                            <h3 class="termInsuranceRider-subTitle">Accidental Death Benefit</h3>
                            <p class="termInsuranceRider-subDesc">
                            You pay an additional premium for this benefit to cover your family in the event of accidental death. When you opt for an accidental death benefit cover, the insurer will pay the nominee an additional death benefit sum assured which is over and above your basic death sum assured.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="rightTimeToBuy">
            <div class="midWrapper">
                <h2 class="rightTimeToBuy-title">When is the Right Time to Buy Term Insurance?</h2>
                <h4 class="rightTimeToBuy-subHead">The Earlier, the Better! 
                </h4>
                <p class="rightTimeToBuy-desc">
                The best time for buying term assurance is now. As you grow older, the likelihood of you falling victim to lifestyle-related diseases grows, and so does your insurance cost. The earlier you get a term plan, the earlier you secure an insurance policy at a smaller premium. Consequently, you may want to consider getting term life insurance plans early in life.
                </p>
                <div class="rightTimeToBuy-bg term-image">
                    <div class="rightTimeToBuy-content-odd">
                        <h3 class="rightTimeToBuy-subTitle">Dependents and Financial Responsibilities</h3>
                        <p class="rightTimeToBuy-subDesc">
                        A term insurance policy is primarily for providing financial support for your dependents upon your death. So the correct time for a term insurance product is generally when you have dependents or financial responsibilities.
                        </p>
                    </div>
                </div>
                <div class="rightTimeToBuy-bg2 term-image">
                    <div class="rightTimeToBuy-content-even">
                        <h3 class="rightTimeToBuy-subTitle">Age and Health</h3>
                        <p class="rightTimeToBuy-subDesc">
                        Generally, the younger and healthier you are when buying a policy, the less you are likely to pay in premiums. Age and health are factors insurers use as risk variables, where the risk of health problems increases with age. When you purchase term insurance at an earlier age, you will have the opportunity to secure lower premiums for the policy term.
                        </p>
                    </div>
                </div>
                <div class="rightTimeToBuy-bg3 term-image">
                    <div class="rightTimeToBuy-content-odd">
                        <h3 class="rightTimeToBuy-subTitle">Financial Stability and Debt</h3>
                        <p class="rightTimeToBuy-subDesc">
                        If you have big debts, such as a mortgage, car loans, or student loans, it is prudent to buy some term insurance. These debts can prove to be a burden for your family in your demise. Term insurance will make sure that in your absence, your family is not left with financial liabilities and is able to meet all their commitments.
                        </p>
                    </div>
                </div>
                <div class="rightTimeToBuy-bg4 term-image">
                    <div class="rightTimeToBuy-content-even">
                        <h3 class="rightTimeToBuy-subTitle">Life Milestones</h3>
                        <p class="rightTimeToBuy-subDesc">
                        Certain life milestones often trigger the need for term insurance. Getting married, having a baby, and purchasing a house are some significant events that increase your financial responsibilities. Most of the time, these also signify a change in the circumstances of your life, and it is extremely important to reassess your needs with regard to life insurance.
                        </p>
                    </div>
                </div>
                <div class="rightTimeToBuy-bg5 term-image">
                    <div class="rightTimeToBuy-content-odd">
                        <h3 class="rightTimeToBuy-subTitle">Long-Term Financial Planning</h3>
                        <p class="rightTimeToBuy-subDesc">
                        It may also be used for the purpose of long-term<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-is-financial-planning">financial planning</a>. Any kind of financial goal, like securing a child's education or building your legacy; all of these goals can be achieved by purchasing a term insurance policy.

                        </p>
                    </div>
                </div>
                <div class="factorsAffecting-banner">
                    <h3>Get ₹2 Cr. life cover @₹30/day!</h3>
                    <div class="factorsAffecting-cta">
                        <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=get2crlifecover">Buy Now</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="payoutOptions" class="hid">
            <div class="midWrapper">
                <div class="payoutCards">
                    <div class="payoutCardsBlank">
                        <h2 class="payoutCard-subHead">Payout Options in Term Life Insurance?</h2>
                        <p class="payoutCard-subDesc">
                        When it comes to protection regarding the financial future of our loved ones, term life insurance offers indispensable security. You would need to understand different available payout options in order to arrive at a suitable decision. You can choose one of the following payout options for your term insurance cover: 
                        </p>
                    </div>
                    <div class="payoutCard">
                        <div class="pay-sprites pay-icon1"></div>
                        <h3 class="payoutCard-subTitle">One-Time Lump-Sum Payout</h3>
                        <p class="payoutCard-subDesc">
                        If you choose this option, your nominee shall receive the outstanding amount in one installment. If the total sum assured is ₹2 Crore, for example, the entire amount will be paid to your nominee once their claim has been processed.
                        </p>
                    </div>
                    <div class="payoutCard">
                        <div class="pay-sprites pay-icon2"></div>
                        <h3 class="payoutCard-subTitle">One-Time Lump-Sum Payment with Fixed Monthly /Annual Payouts</h3>
                        <p class="payoutCard-subDesc">In this option, a certain percentage of the sum assured will be paid to the nominee as a lump sum, and the remaining amount will be paid out in monthly/annual installments.</p>
                    </div>
                    <div class="payoutCard">
                        <div class="pay-sprites pay-icon2"></div>
                        <h3 class="payoutCard-subTitle">One-Time Lump-Sum Payment with Increasing Monthly Payout</h3>
                        <p class="payoutCard-subDesc">
                        Another payout option available in term life insurance is a one-time lump sum with increasing monthly payouts. A part of the death benefit would be provided to the beneficiaries as a lump sum, accompanied by regular monthly payments which increase with time. In doing so, it provides a higher amount in the later years of payout, thus catering to inflation and increased living costs.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="howMuchPlanCover" class="hid">
            <div class="midWrapper">
                <h2 class="howMuchPlanCover-title">How Much Term Insurance Plan Cover Do You Need?</h2>
                <p class="howMuchPlanCover-desc">
                The Term Insurance policy offers a fixed amount of coverage, commonly referred to as term insurance cover or term plan cover, for a limited period of time. Choosing the right amount of coverage for a person is always a highly difficult decision.
                </p>
                <div class="howMuchPlanCover-flex">
                    <div class="benefitsOfTerm-arrow bright-icon"></div>
                    <div>
                        <h3 class="howMuchPlanCover-subTitle">Calculate Your Financial Liabilities
                        </h3>
                        <p class="howMuchPlanCover-subDesc">
                        The first step to determining the right term insurance cover is to assess your financial liabilities. Consider the various loans that you have, such as a home loan or car loan, and add up the total amount that has to be repaid.

                        </p>
                    </div>
                </div>
                <div class="howMuchPlanCover-flex">
                    <div class="benefitsOfTerm-arrow bright-icon"></div>
                    <div>
                        <h3 class="howMuchPlanCover-subTitle">Assess your future expenses
                        </h3>
                        <p class="howMuchPlanCover-subDesc">
                        Apart from immediate liabilities and loss of income, expenses in the future need to be kept in mind. This would include education, marriage, or other important milestones of your children. Estimate the costs associated with such expenses and adequately cover them under your term insurance.
                        </p>
                    </div>
                </div>
                <div class="howMuchPlanCover-flex">
                    <div class="benefitsOfTerm-arrow bright-icon"></div>
                    <div>
                        <h3 class="howMuchPlanCover-subTitle">Factor in Inflation
                        </h3>
                        <p class="howMuchPlanCover-subDesc">
                        Inflation is a process through which the value of money decreases over time. There should be a consideration for including inflation-adjusted term insurance coverage to help offset such wealth erosion. Estimate the future value of your financial obligations and income replacement needs based on projected inflation rates.
                        </p>
                    </div>
                </div>
                <div class="howMuchPlanCover-flex">
                    <div class="benefitsOfTerm-arrow bright-icon"></div>
                    <div>
                        <h3 class="howMuchPlanCover-subTitle">Review Your Current Insurance Coverage
                        </h3>
                        <p class="howMuchPlanCover-subDesc">
                        In case you already have some other life insurance policies, such as a traditional life insurance plan or employee group insurance, calculate the sum assured available in those policies. Now subtract the existing coverage from the total term insurance cover that you need to arrive at the additional coverage that you need.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="whyinvest mobile-whyinvest" id="document-required-term-insurance">
            <div class="midWrapper">
                <div class="roww m-0">
                    <div class="coll-md-7">
                        <h2 class="mb-20 term-tags savtxt mt-mob-28 gspwhattxt fnt-24">Documents required for Term Insurance?</h2>
                        <p class="mb-20">
                        There are a certain set of documents in any insurance policy that one needs to avail of term insurance coverage. These documents need to be understood and prepared in advance so that the application process is smooth.
                        </p>
                        <div class="gsp-buy document-ulips">
                            <p>A recent picture of the life-insured
                            </p>
                            <p>PAN duplicate</p>
                            <p><b>Proof of address</b>- This can be any of the following: Aadhaar (front and back)/Driving License/Passport (front and back)</p>
                            <p>
                                <b>Income evidence</b>- Keep in mind that your income proof should match your claimed annual income. Additionally, for salaried applicants: Last three months' pay stubs/form 16/last three years' ITR/last six months' bank statement where salary is credited Non-salaried applicants should: ITR for the previous three years with the income computation.

                            </p>
                        </div>
                    </div>
                    <div class="coll-md-5 text-center documentsRequired"><div class="w-90 document-img term-image"></div></div>
                </div>
            </div>
        </section>
        <section id="insuranceTerminology">
            <div class="midWrapper">
                <h2 class="insuranceTerminology-title">Term Insurance Terminology</h2>
                <p class="insuranceTerminology-desc">While the term insurance offers simplicity and affordability, some of the terminology used in term insurance often can be confusing to the policyholders. </p>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon1"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Sum Assured (coverage)</h3>
                        <p class="insuranceTerminology-subDesc">
                        In technical words, 'Sum Assured' refers to the amount that the insurer agrees to pay in the case of the insured person's death or the occurrence of any other covered event.
                        </p>
                        <br />
                        <p class="insuranceTerminology-subDesc">
                        The sum assured is what a life insurer pays the nominee in case of the death of the covered individual during the term of the policy. The sum assured selection occurs at the time of buying an insurance plan. 
                        </p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon2"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Nominee</h3>
                        <p class="insuranceTerminology-subDesc">
                        The 'nominee' is the person whom the policyholder names as his legal heir, to whom the life insurance company would pay the sum assured and other benefits in case of untimely death. The nominee could be the wife, child, parents of the life insured, or whosoever he desires.
                        </p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon3"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Policy Tenure</h3>
                        <p class="insuranceTerminology-subDesc">
                        'Policy tenure' is the period for which it provides life insurance coverage. Depending on the type of life insurance plan and its terms and circumstances, policy tenure may vary from one year to 100 years or even for whole life. It is commonly known as policy term or policy duration.
                        </p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon4"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Maturity Age</h3>
                        <p class="insuranceTerminology-subDesc">
                        The maturity age of the life guaranteed is the age at which the policy stops or terminates. This is very much like the policy tenure, but it expresses how long the plan shall be in effect in a different way. Essentially, the life insurance company declares the maximum age at which the life insured shall be provided with life insurance coverage.
                        </p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon5"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Premium</h3>
                        <p class="insuranceTerminology-subDesc">
                        The premium is what you pay to continue holding your life insurance policy in force and remaining covered. Provided you cannot pay the premium by the due date or even within the grace period, then the insurance shall be canceled.
                        </p>
                        <br />
                        <p class="insuranceTerminology-subDesc">There are various options for paying the premium, such as: </p>
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
                            <li><b>Regular Premium Payment</b>- You can pay premiums monthly, quarterly, half-yearly, or yearly for the entire duration of the insurance.</li>
                            <li>
                                <b>Premium Payment for a Limited Period</b>- You can opt to pay the premium only for a specified period. Here you may not necessarily pay premium till the completion of the policy term, but for a definite number of years. For example, ten years, fifteen years, twenty years, etc.
                            </li>
                            <li><b>Single Premium Payment</b>- The premium for the whole period of the plan can also be paid in lump sum.</li>
                        </ul>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon7"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Riders:</h3>
                        <p class="insuranceTerminology-subDesc">
                        Riders are paid-for extras that help extend the scope of the basic life insurance policy. The riders are purchased at the time of purchase or on the anniversary day of insurance. Various types of riders may be purchased in addition to the standard plan. However, the quantity and type of riders will vary by insurance.
                        </p>
                        <br />
                        <p class="insuranceTerminology-subDesc">More importantly, the terms and conditions of each insurance may be different. Here are some of the common riders available from life insurance providers.</p>
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
                        <p class="insuranceTerminology-subDesc">
                        A policy lapses if the premium is due and the policyholder fails to pay it within the grace period mentioned in the policy. The coverage ceases if a policy lapses and the death benefit is not payable.
                        </p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon9"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Grace Period</h3>
                        <p class="insuranceTerminology-subDesc">
                        The grace period refers to the time after a premium payment falls due and the policy is still in force with coverage; that is, even if the premium has not been paid. Provided that the premium is unpaid at the end of this grace period, the policy may lapse.
                        </p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon10"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Surrender Value</h3>
                        <p class="insuranceTerminology-subDesc">
                        There is no surrender value applicable in any term insurance policy. Some insurers do offer a return of premium under their term policies, wherein either part or the full premium paid gets returned in case the life insured survives the term. 

                        </p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon11"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Underwriting</h3>
                        <p class="insuranceTerminology-subDesc">
                        Underwriting is the process through which an insurance company evaluates the risk of the individual to be insured and the premium rate to be charged. In other words, underwriting involves assessing several aspects of the applicant's health, lifestyle, occupation, etc., and determining the premium rate accordingly.
                        </p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon12"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Convertible Term Insurance</h3>
                        <p class="insuranceTerminology-subDesc">
                        Convertible term insurance provides for a term life insurance policy to be converted to a permanent life insurance policy such as a whole life, or universal life insurance policy without the need to undergo a medical examination. In effect, this makes the product flexible, with provisions that provide for its long-term coverage.
                        </p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon13"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Beneficiary</h3>
                        <p class="insuranceTerminology-subDesc">
                        A beneficiary is an entity or person whom the policyholder nominates to receive the death benefit in case of the death of the insured. Beneficiaries may involve family members, friends, or even a charity and trust organization.
                        </p>
                    </div>
                </div>
                <div class="insuranceTerminology-flex">
                    <div class="assured-sprites assu-icon14"></div>
                    <div>
                        <h3 class="insuranceTerminology-subTitle">Term Length</h3>
                        <p class="insuranceTerminology-subDesc">The term length refers to the period an insurance policy provides coverage to the insured individual. This may have options available depending on the provider of the insurance.
                        </p>
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
                        <div class="accordion bor-top-zero">
                            <span>1</span>
                            <h3>Why do you need term insurance? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class=""><p>Term insurance is bought to secure your family financially in case of your untimely death. It will make sure that the future of your family is settled, and all their needs are properly met.</p></div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>2</span>
                            <h3>What is the age limit to purchase a term insurance plan? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class=""><p>The maximum age limit to purchase a term insurance plan varies between 18 years and 65 years, but it depends on the policy of the insurance company.</p></div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>3</span>
                            <h3>When is the right time to buy term insurance? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class=""><p>The best time to buy term insurance is as early as possible, optimally when one has dependents or financial responsibilities, to benefit from low rates and long-term coverage.</p></div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>4</span>
                            <h3>Why is it good to invest in a term insurance plan? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class=""><p>The reason is it is an excellent cost-effective way of delivering substantial life insurance coverage, reducing the possibility of financial instability for your dependents.</p></div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>5</span>
                            <h3>Can natural death be covered under a term plan?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class=""><p>Yes, it is generally covered under term plans unless it is specified otherwise in the terms and conditions of the policy.</p></div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>6</span>
                            <h3>Can you have two-term insurance policies? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class=""><p>Yes, you can opt for more than one term insurance policy to expand the overall sum assured, provided you disclose the existing policies to the insurance companies.</p></div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>7</span>
                            <h3>How can I avail tax benefits on a term plan? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Premiums payable towards a term insurance plan are eligible for a tax benefit under section 80C of the Income Tax Act, 1961, the maximum limit of which is governed by the income tax laws. Consult a tax professional or refer to the tax regulations for specific details.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>8</span>
                            <h3>How can the premium of term insurance be estimated? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                A term insurance premium basically depends on the factors of age, sum assured, policy tenure, and health and lifestyle of the applicant. The online premium calculators provided by the insurance companies facilitate accurate estimates

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>9</span>
                            <h3>How to pay term insurance premiums online? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class=""><p>One can pay term insurance premiums online using net banking, debit or credit cards, UPI, or any digital wallet on the website or mobile app of the insurance company.</p></div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>10</span>
                            <h3>Does a term insurance plan pay out for death by suicide in India? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                Most term insurance plans will have suicidal death covered under a policy after a certain period from the inception date of the policy, which is usually one year from the date of commencement of the policy. The policy terms can vary. Check your policy document for the specific details.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>11</span>
                            <h3>Is there a term plan for smokers? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class=""><p>Yes, some insurers specifically provide term plans for smokers, keeping in view the higher health risks that smoking brings to the table.</p></div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>12</span>
                            <h3>Which insurance plan is more beneficial, term insurance or traditional life insurance? </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                While term insurance is generally more cost-effective and provides pure life coverage, traditional life insurance plans combine insurance with savings or investing in some products. In many cases, it will depend on your needs and financial goals.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>13</span>
                            <h3> What is a critical illness rider?
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                It is an added advantage to be attached to a term insurance plan wherein the policyholder is provided with a lump sum amount if the life insured on that policy is diagnosed with any covered critical illness.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>14</span>
                            <h3>What are the payment options in a term insurance plan?
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class=""><p> The options in a term insurance plan could be either on an annual, semi-annual, quarterly, or monthly premium paying basis, as per the insurance company's offerings.
                            </p></div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>15</span>
                            <h3>Shall I buy a term insurance plan online or offline?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                A person can buy a term insurance plan online. It is convenient. More often, it is sold with more variety and at lower premiums as compared to offline. But the choice between online and offline would again depend on your preference and comfort level.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>16</span>
                            <h3>Who decides the premium for term insurance?
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class=""><p>The term insurance premium is decided by the insurance company, taking into consideration different factors, including age, coverage, policy tenure, medical background, occupation, and lifestyle habits.
                            </p></div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>17</span>
                            <h3>Can I use the term plan for creating wealth? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                When you take a term plan, it is for giving financial protection to your family in case of your death. It yields no returns. For creating wealth, search for insurance or other savings instruments.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>18</span>
                            <h3>How to process the term insurance claims?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                The process of claiming the term insurance will need the nominee or legal beneficiary to inform the insurance company, submit all documents that prove the incidence of death through a death certificate, policy documents, and a duly completed claim form to the insurer, and completion of assessment or investigation processes and settlement of the claim dues.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>19</span>
                            <h3>What happens to the term insurance policy if the life insured dies?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>If the life assured passes away within the policy tenure, the term insurance policy will pay back the death benefit, or the sum assured, to the nominee or legal beneficiary as chosen by the policyholder.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>20</span>
                            <h3>What happens to my term plan coverage when the policy term ends?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Once the policy term is over, the coverage provided under the term plan ceases and there are no further benefits payable under the term life plan unless specially mentioned in the policy through return of premium or survival benefit feature.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>21</span>
                            <h3>What happens if the life insured survives the policy term?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                If on survival the policyholder lives or sees the age of the cover end, in a pure term insurance plan there would be no benefits payable for maturity or survival except the return of premium provided on survival of the term.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>22</span>
                            <h3>Will I get any maturity benefit/survival benefit at the end of my policy term?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p> In a pure-term insurance plan, usually, no amount of benefit would be payable on maturity or survival at the end of the policy term unless specifically included under the return of premium/survival benefit feature in a policy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>23</span>
                            <h3>What if the nominee, who has been appointed, dies while holding the policy?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>If the nominated person dies while holding the policy during the period the policy term is running, then the policyholder shall make a fresh nomination in favor of another person to ensure that the sum assured in case of death is paid to the appropriate beneficiary.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>24</span>
                            <h3> Can your term plan claim be rejected?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                               
                                Yes, the term plan claim can be rejected in case the insurance company finds that the policyholder has given any wrong information or hidden some important facts, or the cause of death is under their exclusion in the policy coverage. The key to avoiding the rejection of the claim is making a disclosure of facts at the time of buying the policy.
                               
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>25</span>
                            <h3>Does the insured's gender matter in a term insurance policy?
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                The gender of the insured does matter in a term insurance policy, wherein the gender of the insured could affect the quantum of applicable premium, as a principle; the mortality rates for women are lesser compared to that for men. Hence, the insurance companies take into consideration gender-based mortality tables while deciding the premiums.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>26</span>
                            <h3>What if I do not die? Will I get my money back at the end of the term insurance policy? </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                In a traditional term insurance plan without a return of premium feature, if the life insured does not die during the policy term, there is no maturity benefit or money refunded at the end of the term insurance policy.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>27</span>
                            <h3>Should I opt for riders with term insurance? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                Riders with term insurance depend on your specific needs and requirements. Riders would add some features to your policy such as additional coverage of critical illnesses, accidental death, disability, and many others but they will come for an additional cost.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>28</span>
                            <h3>What is the premium for riders? 
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                The premium for riders is entirely dependent on the type of rider, the sum insured, the age of the insured, and the term of the rider.  Insurance companies provide specific details about rider premiums.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>29</span>
                            <h3> What are the benefits of purchasing a rider? </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                               
                                 If you buy a rider, it increases the coverage of a basic term insurance plan by certain specific risks or requirements. It financially secures the person from critical illness, disability, and accident occurrence, thus making the overall coverage of the rider more advantageous.
                                 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>30</span>
                            <h3> What if I become an NRI after buying a term plan?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                               
                                 Generally, if you become a Non-Resident Indian after buying a term plan, you remain covered by the policy. It is, however, extremely important to inform the insurance company of the change in the residential status to have such details recorded for smooth policy servicing.
                                
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>31</span>
                            <h3>Should you opt for limited pay or a regular pay-term insurance plan?
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                The decision to purchase a limited pay or a regular pay-term policy depends on the financial capacity and preference. Limited pay plans require higher premium payments for a shorter duration, while regular pay plans spread the premium payments over the policy term.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>32</span>
                            <h3>Can I use a term plan for the repayment of financial liabilities?
                            </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                Yes, a term plan can be used to cover financial liabilities such as loans, mortgages, or any other debt your family has to take care of. The sum insured can be used to repay the outstanding liabilities in the case of the life insured's death.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>33</span>
                            <h3>Is it necessary to buy a rider with term insurance?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                There is no compulsion to buy a rider with term insurance. It is purely optional and depends upon the needs and choice of a policyholder. Riders are add-ons that provide additional coverage and benefits in addition to the basic term insurance policy.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>34</span>
                            <h3>How is term insurance different from life insurance?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                Term insurance provides coverage for a specific term or duration, typically without any savings or investment component. Life insurance, on the other hand, combines insurance coverage with a savings or investment component, offering both protection and wealth accumulation features.
                                </p>
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
            <div class="midWrapper">
                <button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits and Plan Disclaimer</button>
                <div class="content-col mb-0 tab-align li-disc terms-para">
                    <p class="pl-0">Tax Benefits and Disclaimers</p>
                    <p class="pl-0">
                    Tax benefits are subject to conditions specified under section 10(10D) and section 80C of the Income-tax Act, 1961. Tax benefits are subject to change as per tax laws. Tax laws are subject to amendments from time to time. Customer is advised to take an independent view from tax consultant.
                    </p>
                    <p class="pl-0 space-2"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS / FRAUDULENT OFFERS</b></p>
                    <p class="pl-0">IRDAI or its officials do not involve in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
                    <p class="pl-0">The example is for a non-smoker healthy male aged 25 year old; Plan: Life; Payout Options: Immediate Payout; PPT: 35 years (pay till age 60); PT: 50 years (cover till age 75); Salaried or non-salaried : Non-salaried</p>
                    <p class="pl-0 space-2"><b>Claim Settlement and Solvency ratio<sup>*</sup> disclaimer:</b></p>
                    <p><sup>^</sup>Figures arrived are basis the company’s latest annual audited figures for Individual Policy Claims for 2023-24</p>
                    <a rel="nofollow" class="mb-15" href="https://www.kotak.com/content/dam/Kotak/investor-relation/Financial-Result/QuarterlyReport/FY-2023/q4/Investor-Presentation/Q4FY23-Investor-Presentation.pdf">
                        *https://www.kotak.com/content/dam/Kotak/investor-relation/Financial-Result/QuarterlyReport/FY-2023/q4/Investor-Presentation/Q4FY23-Investor-Presentation.pdf
                    </a>
                    <p class="pl-0 space-2"><b>Get 2 Crore Life Cover @₹30/day<sup>*</sup>Disclaimer:</b></p>
                    <p class="pl-0">
                        ≈The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on
                        Death of Rs.2 Crore. The per day premium is Rs.30 [Rs. 10,800 Annualized Premium / 365 days = Rs. 29.59].
                    </p>
                    <p class="pl-0 space-2"><b>Get 1 Crore Life Cover @₹15/day<sup>*</sup>Disclaimer:</b></p>
                    <p class="pl-0">
                    ≈The above illustration is for a 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.1 Crore. The per day premium is Rs.15 [Rs. 5,400 Annualized Premium / 365 days = Rs. 14.79].

                    </p>
                    <p class="pl-0 space-2"><b>Get 1.5 Crore Life Cover @₹22day<sup>*</sup>Disclaimer:</b></p>
                    <p class="pl-0">
                    ≈The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.1.5 Crore. The per day premium is Rs.22 [Rs. 8,100 Annualized Premium / 365 days = Rs. 22.19].

                    </p>
                    <p class="pl-0">
                    The Above premium figures are exclusive of Goods and Services Tax and cess. Goods and Services Tax and Cess thereon, shall be charged as per the prevalent tax laws over and above the said premiums. The channel selected is Online.
                    </p>
                    <p class="pl-0">
                        <b>Kotak Gen2Gen Protect -</b>UIN: 107N132V01, Form No: N132, Kotak Permanent Disability Benefit Rider - UIN: 107B002V03, Form No.: B002, Kotak Critical Illness Plus Benefit Rider - 107B020V01, Form No.: B020, Kotak Accidental Death Benefit Rider - UIN: 107B001V03, Form No: B001. A Non-Linked Non-Participating Individual Savings Life Insurance Plan. Please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure. You may avail of tax benefits as per the Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. You are advised to consult your Tax Advisor for details. Goods and Services Tax and Cess, as applicable shall be levied over and above premium amount shown here as per applicable tax laws.

                    </p>
                    <p class="pl-0">
                        <b>Kotak e-Term:</b>UIN:107N129V02, Form No. N129, Kotak Critical Illness Plus Benefit Rider UIN No.: 107B020V01, Form No.: B020, Kotak Permanent Disability Benefit Rider UIN No.: 107B002V03, Form No: B002. This is a non-participating pure protection plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.
                    </p>
                    <p class="pl-0">
                        <b>Kotak Protect India</b>- UIN:107N130V01, Form No: N130. This is a non-participating, pure protection, life insurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.


                    </p>
                    <p class="pl-0">
                        <b>Kotak Term Plan:</b>UIN:107N005V06, Form No: N005, Kotak Accidental Death Benefit Rider UIN: 107B001V03, Form No: B001, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No: B002, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form No: B020. This is a non-unit linked, non-participating, term plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure. 

                    </p>
                    <p class="pl-0">
                        <b>Kotak Saral Jeevan Bima:</b>UIN:107N120V01, Form No: N120. This is a Non-Linked Non-participating Individual Pure Risk Premium Life Insurance Plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.


                    </p>
                    <p class="pl-0">
                        <b>Kotak Health Maximiser -</b>UIN:  KOTHLIP24026V012324 is a Combi Product with both protection & health benefits. It is a jointly offered product of Kotak Mahindra Life Insurance Company Limited and Kotak Mahindra General Insurance Company Limited, where protection benefits are being offered by Kotak Mahindra Life Insurance Company Ltd. under Kotak Term Plan - UIN 107N005V06, Form No. N005 and health benefits are being offered by Kotak Mahindra General Insurance Company Ltd under Kotak Health Premier – UIN KOTHLIP23109V042223. The risks of this product are distinct and are accepted by respective companies. Please refer to the Policy Document for specific details on all terms, conditions and exclusions. For more options on plans, coverages, features, premium paying term, eligibility, etc. please get in touch with the Company Representative. Please know the associated risk and applicable charges from your insurance agent or the intermediary or the policy document of the insurer. **Data as on May 2023. #Tax laws are subject to amendments from time to time. The customer is advised to take an independent view from a tax consultant. Tax benefits are subject to conditions specified under Section 80C and Section 80D of the Income-tax Act, 1961. The tax benefit is applicable as per the Income Tax Act, of 1961

                    </p>
                    <p class="pl-0">The Above premium figures are exclusive of Goods and Services Tax and cess. Goods and Services Tax and Cess thereon, shall be charged as per the prevalent tax laws over and above the said premiums.</p>
                    <p>*Get your premiums back through Special Exit Value, under your policy, if your policy term is:</p>
                    <p>40 years: Earlier of 25th policy year OR during the policy year, when you attain 60 years</p>
                    <p>> 40 years: Earlier of 30th policy year OR during the policy year, when you attain 60 years</p>
                    <p>5% Discount on Salary Infographic Disclaimer:</p>
                    <p>The 5% discount is only on the first year of the policy.</p>
                    <p>**Free Medical Checkup every 5th year starting from 5th policy year onwards</p>
                    <p>Tax benefit is applicable as per the Income Tax Act, 1961. Tax laws are subject to amendments from time to time. Customer is advised to take an independent view from tax consultant.</p>
                    <p class="pl-0 space-2"><b>Section 41-</b></p>
                    <p class="pl-0">
                        Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: (1) No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or
                        continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any
                        person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. (2) Any person making default in
                        complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.
                    </p>
                    <p class="pl-0 space-2"><b>Section 45-</b></p>
                    <p class="pl-0">
                        Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details: Read more about
                        section38_39_45_of_insurance_act_1938.
                    </p>
                    <p class="pl-0 space-2"><b>Regd. Office:</b></p>
                    <p class="pl-0">
                    Kotak Mahindra Life Insurance Company Ltd. Reg No. 107 | CIN: U66030MH2000PLC1285038th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Toll Free: 1800 209 8800 (8 am to 10 pm) | Website: https://www.kotaklife.com | Email: kli.in/WECARE Ref No: KLI/24-25/E-WEB/627
                    </p>
                    
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
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [{ breakpoint: 1024, settings: { slidesToShow: 2, slidesToScroll: 1 }, breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 1 } }],
        });
    }, 8e3);
</script>
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
                        $(".votedCount").html(a.feedbackratingdetailscount + " "),
                            localStorage.setItem("term_rating", rating),
                            $(".infoText").html("Thank you for your feedback!"),
                            $(".rating").addClass("afterClick"),
                            $(".submitDiv").fadeOut("slow"),
                            $(".votedcheck").removeClass("d-none"),
                            $(".votedcheck").addClass("d-block");
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
</script>
