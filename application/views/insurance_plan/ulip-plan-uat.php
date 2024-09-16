<?php
function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if (isMobile()) {
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $temp = array();
$temp = explode("/", $actual_link);

if ($temp[3] == "main") {
  redirect(base_url());
}
    // Do something for only mobile users
} else {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $temp = array();
    $temp = explode("/", $actual_link);

    if ($temp[3] == "main") {
        redirect(base_url());
    }
    // Do something for only desktop users
}

?>
<link rel="stylesheet" href="assets/css/fancybox-4.0.css">
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/investment.css">
<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">
<style>
    html {
        scroll-behavior: smooth
    }

    footer,
    section {
        position: static
    }

    .tooltiptext a {
        padding: 20px
    }

    .roww.mg-15 {
        padding-bottom: 15px
    }

</style>
<section>
    <div class="midWrapper">
        <ul class="breadcrumb-ulip newbread-ulip">
            <li><a href="<?=base_url()?>" title="Life Insurance&gt">Life Insurance&gt;</a></li>
            <li class="active"><a href="javascript:void(0)" title="ULIP Plans">ULIP Plans</a></li>
        </ul>
    </div>
</section>
<div class="ulip-sections">
    <div class="term-design">
        <section id="topSection">
            <div class="midWrapper">
                <div class="topSectionGrid">
                    <div>
                        <p class="termsText">In ULIP, the investment risk in the investment portfolio is borne by the policyholder</p>
                        <h1 class="topSection-title">Unit-Linked Insurance Plans (ULIP)</h1>
                        <p class="topSection-desc">Unit-Linked Insurance Plans (ULIPs) is a life insurance category that offers an opportunity to grow your money over the long term and protect your family through life cover. These plans are popular among investors because they help in seeking financial security and long-term capital growth.</p><br>
                        <p class="topSection-desc">With the potential for wealth creation, tax advantages, and flexibility in fund allocation, ULIPs offer individuals a comprehensive and customizable approach to financial planning and protection.</p>
                    </div>
                    <div class="ulipCard"><img src="assets/images/ulip-plan/UlipPlan.svg" alt="Ulip">
                        <h2 class="ulipCard-title">Create wealth & endure financial protection</h2>
                        <div class="ulipCard-investTitle">Invest in</div>
                        <div class="centerButton"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=leadtoken" class="ulipCard-cta">Kotak e-invest <img src="assets/images/ulip-plan/rightArrow.svg"></a></div>
                     
                    </div>
                    <div class="topSection-img"><img src="assets/images/ulip-plan/ulipBanner.svg" alt="Ulip Banner"></div>
                </div>
            </div>
        </section>
        <section id="authorSection" class="uliptool-points">
            <div class="fullBg">
                <div class="midWrapper">
                    <div class="authorBox">
                        <div class="authorDetails">
                            <div class="blogsTooltipSavings">
                                <div class="authorName">
                                    <div class="authorImg sa-author1"></div>
                                    <div class="nameTitle">
                                        <div>Written By :<br></div><b class="nameTag">Amit Raje</b>
                                    </div>
                                </div><span class="tooltiptext"><b>Amit Raje</b>is an experienced marketer who has worked in various Fintechs and leading Financial companies in India. With focused experience in Digital, Amit has pioneered multiple digital commerce in India. Now, close to two decades later, he is the vice president and head of the D2C business department. He masters the skill of strategic management, also being certified in it from IIMA. He has challenged his challenges and contributed his efforts in this journey of digital transformation.<a href="https://www.linkedin.com/in/amit-raje-digitalexpert/?utm_source=share&amp;utm_campaign=share_via&amp;utm_content=profile&amp;utm_medium=android_app" class="linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
                            </div>
                            <div class="vSeperation"></div>
                            <div class="blogsTooltipSavings tol2">
                                <div class="authorName">
                                    <div class="authorImg sa-author2"></div>
                                    <div class="nameTitle">
                                        <div>Reviewed By :<br></div><b class="nameTag">Prasad Pimple</b>
                                    </div>
                                </div><span class="tooltiptext"><b>Prasad Pimple</b>has a decade-long experience in the Life insurance sector and as EVP, Kotak Life heads Digital Business. He is responsible for developing user friendly product journeys, creating consumer awareness and helping consumers in identifying need for life insurance solutions. He has 20+ years of experience in creating and building business verticals across Insurance, Telecom and Banking sectors<a href="https://www.linkedin.com/in/prasad-pimple-54ba489/?utm_source=share&amp;utm_campaign=share_via&amp;utm_content=profile&amp;utm_medium=android_app" class="linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tableofContent">
            <div class="midWrapper"><span class="tocText">Table of Contents</span>
                <div class="contenttable show-more-height">
                    <div><a href="<?php echo $actual_link ?>#whatareulips" class="tocContent"><span>What are ULIPs or Unit Linked Insurance Plans?</span></a><a href="<?php echo $actual_link ?>#keyFeatureofUlip" class="tocContent"><span>What are Some Key Features of ULIPs?</span></a><a href="<?php echo $actual_link ?>#ulipCalculator" class="tocContent"><span>What is a ULIP Calculator?</span></a><a href="<?php echo $actual_link ?>#benefitsOfUlip" class="tocContent"><span>What are the Benefits of ULIPs?</span></a><a href="<?php echo $actual_link ?>#whyChooseKotakUlip" class="tocContent"><span>Why Choose Kotak Life ULIP Policy?</span></a><a href="<?php echo $actual_link ?>#manageUlipFunds" class="tocContent"><span>How to Manage ULIP Funds?</span></a><a href="<?php echo $actual_link ?>#whatIsUlipNav" class="tocContent"><span>What is ULIP NAV?</span></a><a href="<?php echo $actual_link ?>#howToFindBestUlipPlan" class="tocContent"><span>How to Find the Best ULIP Plans?</span></a><a href="<?php echo $actual_link ?>#whichUlipfundsAreBest" class="tocContent"><span>Which ULIP Funds are Best Suited for You?</span></a><a href="<?php echo $actual_link ?>#ulipVsMutualFunds" class="tocContent"><span>ULIP vs Other Investment Options</span></a><a href="<?php echo $actual_link ?>#claimTaxBenefits" class="tocContent"><span>How to Claim Tax Benefits on ULIPs?</span></a><a href="<?php echo $actual_link ?>#ulip-faqs" class="tocContent"><span>FAQs</span></a></div>
                    <div><a href="<?php echo $actual_link ?>#bestUlipsPlans" class="tocContent"><span>ULIP Plans from Kotak Life Insurance</span></a><a href="<?php echo $actual_link ?>#importanceOfUlip" class="tocContent"><span>Importance of ULIP in Personal Finance</span></a><a href="<?php echo $actual_link ?>#howDoesUlipWork" class="tocContent"><span>How Does a ULIP Work?</span></a><a href="<?php echo $actual_link ?>#typesOfUlip" class="tocContent"><span>Types of ULIPs</span></a><a href="<?php echo $actual_link ?>#typeOfUlipFunds" class="tocContent"><span>What Type of Funds Do ULIP Plans Include?</span></a><a href="<?php echo $actual_link ?>#typesOfUlipCharge" class="tocContent"><span>Type of ULIP Charges</span></a><a href="<?php echo $actual_link ?>#testimonial" class="tocContent"><span>Testimonial</span></a><a href="<?php echo $actual_link ?>#whyInvestinUlip" class="tocContent"><span>Why Should You Invest in ULIPs?</span></a><a href="<?php echo $actual_link ?>#variousFactorsConsiderBuyingUlip" class="tocContent"><span>What are the Various Factors to Consider Before Buying ULIPs?</span></a><a href="<?php echo $actual_link ?>#ulipWealthCreation" class="tocContent"><span>Benefits of ULIP for Wealth Creation</span></a><a href="<?php echo $actual_link ?>#mythsOfUlip" class="tocContent"><span>Myths About Investing in ULIPs</span></a></div><a id="readMoreContent" class="tocReadMore">Read More</a>
                </div>
            </div>
        </section>
        <section class="hid" id="whatareulips">
            <div class="greyBg">
                <div class="midWrapper">
                    <div class="whatareulips-grid">
                        <div>
                            <h2 class="whatareulips-title">What are ULIPs or Unit Linked Insurance Plans?</h2>
                            <p class="whatareulips-desc">ULIP stands for Unit Linked Insurance Plans, the financial product that allow you to build wealth and cover your loved ones financially. In ULIPs, a portion of your premium is allocated to your life cover, while the remainder is allocated to a shared pool of money known as a fund. This fund is then invested in equities, debts, or a combination of the two. The performance of the fund you choose determines your returns.</p>
                        </div>
                        <div class="whatIsSavingsPlan-img">
                            <div class="savings-videos">
                                <div class="iframe-responsive"><iframe id="kotakVideo" title="Benefits of ULIP | यूलिप के फायदे | Kotak Life" frameborder="0" controls="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                                <style>
                                    .ytp-copylink-button {
                                        display: none !important
                                    }

                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid ulip-online-plan" id="bestUlipsPlans">
            <div class="midWrapper">
                <h2 class="bestUlips-title">ULIP Plans from Kotak Life Insurance</h2>
                <p class="bestUlips-desc">Kotak Life offers several ULIP plans that best meets your requirement. You can understand the benefits, features, and investment strategies associated with these ULIP plans. The following are our top recommendations.</p>
                <div class="kotak-e-term-plan" style="margin-top:50px"><span class="onlineplan offlineplan">Online plan</span>
                    <div class="feats-sec kotat-online">
                        <div class="d-flex neweterm">
                            <h3>Kotak e-Invest</h3>
                            <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/assets/brochure/Kotak_e-Invest_-_Brochure1.PDF" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" foxified="">
                                            <defs>
                                                <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                    <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                    <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                </mask>
                                                <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                    <feoffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feoffset>
                                                    <fegaussianblur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></fegaussianblur>
                                                </filter>
                                                <clippath id="d63ic">
                                                    <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                </clippath>
                                            </defs>
                                            <g>
                                                <g>
                                                    <g filter="url(#d63ia)">
                                                        <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                        <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </g>
                                                    <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                    </g>
                                                    <g>
                                                        <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                    </g>
                                                    <g>
                                                        <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></button></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30 kotaksavcard list-1">
                            <div class="coll-md-6">
                                <div class="ds-flex side">
                                    <ol class="ulip-kotak-life ulip-ol">
                                        <li class="spec-wid spec-wid-2">Return of Mortality Charges</li>
                                        <li class="spec-wid">Enhanced Protection with riders</li>
                                        <li class="spec-wid">Multiple Plan Options</li>
                                    </ol>
                                    <ol class="side-1 ulip-kotak-life">
                                        <li class="spec-wid spec-wid-2 mar-top-sec">Zero Premium Allocation Charges</li>
                                        <li class="spec-wid-2">Tax Savings</li>
                                    </ol>
                                </div>
                                <div class="mt10"><a class="viewPlans" target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-e-invest" title="View Kotak e-Invest">View Kotak e-Invest</a></div>
                                <div class="ulip-cta"><a rel="nofollow" target="_blank" href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card" title="invest in ULIP">Invest in ULIP</a></div>
                            </div>
                            <div class="coll-md-5 mar-side-left"><img src="assets/images/ulip-plan/Kotak-e-Invest.png" alt="Kotak e-Invest"></div>
                        </div>
                    </div>
                </div>
                <div class="kotak-e-term-plan" style="margin-top:50px"><span class="onlineplan offlineplan">Online plan</span>
                    <div class="feats-sec kotat-online">
                        <div class="d-flex neweterm">
                            <h3>Kotak T.U.L.I.P</h3>
                            <div class="ml-auto tooltip"><a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_T.U__.L__.I__.P_Brochure_19__.12__.2023_KL3__.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" foxified="">
                                            <defs>
                                                <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                    <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                    <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                </mask>
                                                <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                    <feoffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feoffset>
                                                    <fegaussianblur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></fegaussianblur>
                                                </filter>
                                                <clippath id="d63ic">
                                                    <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                </clippath>
                                            </defs>
                                            <g>
                                                <g>
                                                    <g filter="url(#d63ia)">
                                                        <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)"></path>
                                                        <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </g>
                                                    <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)"></path>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"></path>
                                                    </g>
                                                    <g>
                                                        <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path>
                                                    </g>
                                                    <g>
                                                        <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></button></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30 kotaksavcard list-1">
                            <div class="coll-md-12 w-100">
                                <div class="ds-flex side">
                                    <ol class="ulip-kotak-life ulip-ol tulip-ol">
                                        <li class="spec-wid spec-wid-2">High Sum assured multiple for higher life cover</li>
                                        <li class="spec-wid">2X return of premium allocation charges</li>
                                        <li class="spec-wid">3X return of mortality charges</li>
                                    </ol>
                                    <ol class="side-1 ulip-kotak-life tulip-ol">
                                        <li class="spec-wid spec-wid-2 mar-top-sec">Loyalty additions</li>
                                        <li class="spec-wid-2">Flexibility to choose a short or long premium payment term</li>
                                        <li class="spec-wid-2">Multiple investment strategies</li>
                                    </ol>
                                </div>
                                <div class="mt20"><a class="viewPlans" target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-tulip" title="View Kotak Tulip">View Kotak T.U.L.I.P</a></div>
                                <div class="ulip-cta tulip-cta"><a rel="nofollow" target="_blank" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=product_card" title="invest in ULIP">Invest in T.U.L.I.P</a></div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid ulip-offline" id="offlinePlans">
            <div class="midWrapper">
                <div class="roww bestsavgsp">
                    <div class="coll-md-3"><span class="onlineplan">Offline plan</span>
                        <ul class="onlinegsp h-361">

                            <li class="opc2 accelclr">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Invest Maxima</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc3">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Single Invest Plus</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc4">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Single Invest Advantage</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc5">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Platinum Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc6">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Ace Investment</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc7">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Wealth Optima Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="coll-md-9">

                        <div class="kotaksavcard accelcard op2 accelblock">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Invest Maxima</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakInvestMaxima.pdf" download="Brochure" title="Kotak Invest Maxima"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul class="">
                                        <li>Zero premium allocation charges</li>
                                        <li>Choice of portfolio strategies and fund types</li>
                                        <li>A variety of policy term and premium payment terms are available.</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Partial withdrawals</li>
                                        <li>Rewards on long-term investment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-invest-maxima" class="gspview" title="View Kotak Invest Maxima">View Kotak Invest Maxima</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op3">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Single Invest Plus</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/how_do_i/KotakSingleInvestPlus.pdf" title="Kotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest Plus" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Single premium policy</li>
                                        <li>Joint life cover for two family members</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Loyalty Additions to enhance fund growth</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-plus" class="gspview" title="View Kotak Single Invest Plus">View Kotak Single Invest Plus</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op4">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Single Invest Advantage</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf" title="Kotak Single Invest Advantage" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul>
                                        <li>One-time investment</li>
                                        <li>Choice of 3 investment strategies</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Loyalty Additions to give boost to your wealth</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="gspview" title="View Kotak Single Invest Advantage">View Kotak Single Invest Advantage</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op5">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Platinum Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-platinum-sales-brochure.pdf" title="Kotak Platinum Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Choice of Three fund-management strategies</li>
                                        <li>Survival units to enhance your fund value</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Limited premium payment term</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-platinum-plan" class="gspview" title="View Kotak Platinum Plan">View Kotak Platinum Plan</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op6">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Ace Investment</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-ace-investment-brochure.pdf" title="Kotak Ace Investment" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Choice of three investment strategies</li>
                                        <li>Flexibility to add Top-up premium</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Multiple premium payment period options</li>
                                        <li>Option to make partial withdrawal</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-ace-investment-plan" class="gspview" title="View Kotak Ace Investment">View Kotak Ace Investment</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op7">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Wealth Optima Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Wealth-Optima-Plan-Brochure-Unit-Linked-Insurance-Plan.pdf" title="Kotak Wealth Optima Plan" download="Brochure"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-15">
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Choice of two investment strategies</li>
                                        <li>Enhances fund growth through Yearly Additions post Lock-in period</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Options to be covered till 99 years</li>
                                        <li>Boosts long term savings through Wealth Boosters</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-wealth-optima-plan" class="gspview" title="View Kotak Wealth Optima Plan">View Kotak Wealth Optima Plan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mobile-feat gspmobile-feat hide-desktop saving-off">
            <div class="midWrapper"><span class="onlineplan">Offline plan</span>
                <div class="gspaccbor">
                    <div class="accordion-div acc-div-mob accordion-btns mt-mob-15">
                        <div class="bor"><button name="tulip" class="accordion bor-top-zero" role="heading" aria-level="3">
                                <p class="bor-top-rad">KOTAK T.U.L.I.P</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tulip" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>High Sum assured multiple for higher life cover</li>
                                                        <li>2X return of premium allocation charges</li>
                                                        <li>3X return of mortality charges</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Loyalty additions</li>
                                                        <li>Flexibility to choose a short or long premium payment term</li>
                                                        <li>Multiple investment strategies</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_T.U__.L__.I__.P_Brochure_19__.12__.2023_KL3__.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/savings-plan/kotak-tulip" class="gspview">View Kotak T.U.L.I.P</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="assured" class="accordion" role="heading" aria-level="3">
                                <p class="bor-top-rad">KOTAK INVEST MAXIMA</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="London" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Zero premium allocation charges</li>
                                                        <li>Choice of portfolio strategies and fund types</li>
                                                        <li>A variety of policy term and premium payment terms are available.</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Partial withdrawals</li>
                                                        <li>Rewards on long-term investment</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakInvestMaxima.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-invest-maxima" class="gspview">View Kotak Invest Maxima</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="premier" class="accordion">
                                <p>Kotak Single Invest Plus</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Paris" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Single premium policy</li>
                                                        <li>Joint life cover for two family members</li>
                                                        <li>Loyalty Additions to enhance fund growth</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/how_do_i/KotakSingleInvestPlus.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-plus" class="gspview">View Kotak Single Invest Plus</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="Premier" class="accordion">
                                <p>Kotak Single Invest Advantage</p>
                            </button>
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
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="gspview">View Kotak Single Invest Advantage</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="accordion" class="accordion">
                                <p>Kotak Platinum Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="four" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Choice of Three fund-management strategies</li>
                                                        <li>Survival units to enhance your fund value</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Limited premium payment term</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-platinum-sales-brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-platinum-plan" class="gspview">View Kotak Platinum Plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="smartlife" class="accordion">
                                <p>Kotak Ace Investment</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="five" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Choice of three investment strategies</li>
                                                        <li>Flexibility to add Top-up premium</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Multiple premium payment period options</li>
                                                        <li>Option to make partial withdrawal</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-ace-investment-brochure.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-ace-investment-plan" class="gspview">View Kotak Ace Investment</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button name="Premier" class="accordion">
                                <p>Kotak Wealth Optima Plan</p>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="six" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Choice of two investment strategies</li>
                                                        <li>Options to be covered till 99 years</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Enhanced life coverage on higher premiums and for females</li>
                                                          <li>Boosts long term savings through Wealth Boosters</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Wealth-Optima-Plan-Brochure-Unit-Linked-Insurance-Plan.pdf" download="Brochure"></a></div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-wealth-optima-plan" class="gspview">View Kotak Wealth Optima Plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="keyFeatureofUlip">
            <div class="greyBg">
                <div class="midWrapper">
                    <h2 class="keyFeatureofUlip-title">What are some key features of ULIPs?</h2>
                    <p class="keyFeatureofUlip-desc">ULIPs present an alternative to traditional insurance policies by providing policyholders with the opportunity to invest their premiums in a diverse range of funds, including equity, debt, or a combination of both.</p>
                    <div class="keyFeatureofUlip-cards">
                        <div class="keyFeatureofUlip-card">
                            <div class="keyfeat-icon kf1"></div>
                            <h3 class="keyFeatureofUlip-subTitle">Allocation of Premium</h3>
                            <p class="keyFeatureofUlip-subDesc">ULIPs allow you to choose investment channels based on your risk tolerance. You can go aggressive with equities, cautious with debt funds, or mix it up with balanced funds to get the best of both worlds. You can also allocate your premiums towards funds of your preference and depending on your risk appetite.</p>
                        </div>
                        <div class="keyFeatureofUlip-card">
                            <div class="keyfeat-icon kf2"></div>
                            <h3 class="keyFeatureofUlip-subTitle">Switching of Funds</h3>
                            <p class="keyFeatureofUlip-subDesc">You can move or switch from one fund to another if the performance of your chosen funds does not meet your expectations or if the market conditions change. As a result, you can ensure that your returns are well-balanced and beat the volatility of the market.</p>
                        </div>
                        <div class="keyFeatureofUlip-card">
                            <div class="keyfeat-icon kf3"></div>
                            <h3 class="keyFeatureofUlip-subTitle">Withdrawal Options</h3>
                            <p class="keyFeatureofUlip-subDesc">You can make partial withdrawals from your funds after the five-year lock-in term if necessary. The insurance providers set the maximum withdrawal amount and the number of withdrawals that are permitted.</p>
                        </div>
                        <div class="keyFeatureofUlip-card">
                            <div class="keyfeat-icon kf4"></div>
                            <h3 class="keyFeatureofUlip-subTitle">Additional Top-ups</h3>
                            <p class="keyFeatureofUlip-subDesc">You can add additional money in the form of Top-Up Premiums over and above your existing premium, which will give you an additional Top-Up Sum Assured.</p>
                        </div>
                        <div class="keyFeatureofUlip-card">
                            <div class="keyfeat-icon kf5"></div>
                            <h3 class="keyFeatureofUlip-subTitle">Tax Savings</h3>
                            <p class="keyFeatureofUlip-subDesc">ULIPs are like other life insurance instruments with the difference that you get to invest and secure your family financially both under one plan. Since it is a life insurance product, you also get tax benefits.</p>
                        </div>
                        <div class="keyFeatureofUlip-cardStatic">
                            <h3 class="keyFeatureofUlip-subTitlestatic">Diversify your<br>investment portfolio with<br><b>Kotak e-Invest.</b></h3>
                            <div class="keyFeatureofUlip-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=featuresofulip">Get Started with ULIPs</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="importanceOfUlip">
            <div class="midWrapper">
                <h2 class="importanceOfUlip-title">Importance of ULIP in Personal Finance</h2>
                <p class="importanceOfUlip-desc">Combining the benefits of insurance and investment, ULIP is a versatile tool to secure your financial future. Let’s understand the importance of ULIP in personal finance.</p>
                <div class="importanceOfUlip-flex">
                    <div class="ul-arrow"></div>
                    <div>
                        <h3 class="importanceOfUlip-subTitle">Dual Benefit of Insurance and Investment</h3>
                        <p class="importanceOfUlip-subDesc">One of the key<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/advantages-and-disadvantages-of-ulip">advantages of ULIPs</a>is the unique combination of insurance and investment. Unlike traditional insurance policies that provide only protection, ULIPs offer a dual benefit by simultaneously providing life coverage and a platform to grow wealth.</p>
                    </div>
                </div>
                <div class="importanceOfUlip-flex">
                    <div class="ul-arrow"></div>
                    <div>
                        <h3 class="importanceOfUlip-subTitle">Flexibility and Control</h3>
                        <p class="importanceOfUlip-subDesc">ULIPs provide you a high degree of flexibility and control over your investments. You can choose the level of life cover you require based on your financial goals and risk appetite. ULIPs offer the option to switch between different investment funds according to market conditions or personal preferences for optimal returns.</p>
                    </div>
                </div>
                <div class="importanceOfUlip-flex">
                    <div class="ul-arrow"></div>
                    <div>
                        <h3 class="importanceOfUlip-subTitle">Long-Term Wealth Creation</h3>
                        <p class="importanceOfUlip-subDesc">ULIPs are well-suited for long-term investment horizon. By staying invested over an extended period, you can harness the power of compounding to build significant wealth. They can serve as an effective tool for achieving long-term life goals like buying a house, funding education, or planning for retirement.</p>
                    </div>
                </div>
                <div class="importanceOfUlip-flex">
                    <div class="ul-arrow"></div>
                    <div>
                        <h3 class="importanceOfUlip-subTitle">Tax Efficiency</h3>
                        <p class="importanceOfUlip-subDesc">The premiums paid towards ULIPs are eligible for tax deductions under Section 80C of the Income Tax Act, 1961, up to a specified limit. Additionally, the maturity proceeds and death benefit received from ULIPs are usually tax-free under<a href="https://www.kotaklife.com/insurance-guide/savingstax/what-is-section-10d-of-the-income-tax-act" class="inline-links">Section 10(10D),</a>subject to new tax rules.</p>
                    </div>
                </div>
                <div class="importanceOfUlip-flex">
                    <div class="ul-arrow"></div>
                    <div>
                        <h3 class="importanceOfUlip-subTitle">Customization and Riders</h3>
                        <p class="importanceOfUlip-subDesc">ULIPs offer a range of customization options to cater to individual requirements. You can opt for additional riders such as permanent disability benefit and accidental death benefit, among others, to enhance the protection offered by ULIP. These riders provide an added layer of security and can be tailored to address specific risks and concerns.</p>
                    </div>
                </div>
                <div class="importanceOfUlip-flexB new_change">
                    <p>Enjoy safe, market-linked returns with Kotak e-Invest!</p><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=importance">Enhance Your Personal Finance</a>
                </div>
            </div>
        </section>
        <section class="hid ulip-cat-cal" id="ulipCalculator">
            <div class="greyBg">
                <div class="midWrapper">
                    <h2 class="ulipCalculator-title">What is a ULIP Calculator?</h2>
                    <p class="ulipCalculator-desc">ULIP calculator is an online tool provided by insurance companies to estimate potential returns and policy premiums based on various investment scenarios. It helps individuals assess and compare different ULIP plans offered by insurers.</p><br>
                    <p class="ulipCalculator-desc">ULIPs come with different features and benefits, making it complicated for individuals to select the right plan. This is where a ULIP calculator comes in handy. Here are the steps to use a unit-linked insurance plan calculator.</p>
                    <div class="row mrow-0 mt20">
                        <div class="col-lg-7 m-p-0">
                            <div class="card">
                                <div class="text_center">
                                    <div class="radio_tabs"><input id="regularInvestment" type="radio" value="regularInvestment" name="investmentTabs" checked="checked" class="radio_tab"><label for="regularInvestment">Regular Investment</label><input id="oneTimeInvestment" type="radio" value="oneTimeInvestment" name="investmentTabs" class="radio_tab"><label for="oneTimeInvestment">One-time Investment</label></div>
                                </div>
                                <div class="range-wrap">
                                    <div class="goal-wrap">
                                        <p class="goal-title">Investment Amount<span class="sublabel sublableMonthly">(Monthly)</span></p>
                                        <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="amtInvestInput" name="amtInvestInput" type="text" value="1,00,000" maxlength="11" class="form-control comma"></div>
                                    </div>
                                    <div class="slider-wrap"><input id="amtInvestRange" name="amtInvestRange" type="range" value="100000" min="1000" max="10000000" class="range-control"></div>
                                    <div class="invest-amt">
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                    </div>
                                    <div class="value-wrap">
                                        <div class="min"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 k</span></div>
                                        <div class="max"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 Cr</span></div>
                                    </div>
                                </div>
                                <div class="range-wrap">
                                    <div class="goal-wrap">
                                        <p class="goal-title">Investment Tenure<span class="sublabel">(Years)</span></p>
                                        <div class="input-wrap year-wrap"><input id="yearsInvestInput" name="yearsInvestInput" type="text" value="10" maxlength="2" class="form-control"><span>Years</span></div>
                                    </div>
                                    <div class="slider-wrap"><input id="yearsInvestRange" name="yearsInvestRange" type="range" value="10" min="1" max="30" class="range-control"></div>
                                    <div class="invest-amt">
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                    </div>
                                    <div class="value-wrap">
                                        <div class="min"><span class="amount">1&nbsp;</span><span>Year</span></div>
                                        <div class="max"><span class="amount">30&nbsp;</span><span>Years</span></div>
                                    </div>
                                </div>
                                <div class="range-wrap">
                                    <div class="goal-wrap">
                                        <p class="goal-title">Interest Rate<span class="sublabel">(P.A.)</span></p>
                                        <div class="input-wrap percent-wrap"><input id="interestrateInput" name="interestrateInput" type="text" value="9" maxlength="2" class="form-control"><span>%</span></div>
                                    </div>
                                    <div class="slider-wrap"><input id="interestrateRange" name="interestrateRange" type="range" value="9" min="1" max="15" class="range-control"></div>
                                    <div class="invest-amt">
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                    </div>
                                    <div class="value-wrap">
                                        <div class="min"><span class="amount">1&nbsp;</span><span>%</span></div>
                                        <div class="max"><span class="amount">15&nbsp;</span><span>%</span></div>
                                    </div>
                                    <p class="note sublabel">Sensex has given 10% return from 2010 - 2020</p>
                                </div>
                                <div id="periodic_investment" class="range-wrap">
                                    <div class="goal-wrap">
                                        <p class="goal-title">Existing Investment<span class="sublabel">(optional)</span></p>
                                        <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="periodicInput" name="periodicInput" type="text" value="0" maxlength="11" class="form-control comma"></div>
                                    </div>
                                    <div class="slider-wrap"><input id="periodicRange" name="periodicRange" type="range" value="0" min="0" max="10000000" class="range-control"></div>
                                    <div class="invest-amt">
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                    </div>
                                    <div class="value-wrap">
                                        <div class="min"><span class="rupee">&#8377;&nbsp;</span><span class="amount">0</span></div>
                                        <div class="max"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 Cr</span></div>
                                    </div>
                                </div>
                                <div id="existing_investment" class="range-wrap">
                                    <div class="goal-wrap">
                                        <p class="goal-title">Periodic Investment<span class="sublabel">(optional)</span></p>
                                        <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="extistingInvestmentInput" name="extistingInvestmentInput" type="text" value="0" maxlength="11" class="form-control comma"></div>
                                    </div>
                                    <div class="slider-wrap"><input id="extistingInvestmentRange" name="extistingInvestmentRange" type="range" value="0" min="0" max="10000000" class="range-control"></div>
                                    <div class="invest-amt">
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                        <div class="amt-slot">|</div>
                                    </div>
                                    <div class="value-wrap">
                                        <div class="min"><span class="rupee">&#8377;&nbsp;</span><span class="amount">0</span></div>
                                        <div class="max"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 Cr</span></div>
                                    </div>
                                </div><button id="calculate" name="calculate" class="btn_block btn_primary">Calculate</button>
                            </div>
                        </div>
                        <div class="col-lg-5 m-p-0">
                            <div class="card card_middle new">
                                <div class="card_body">
                                    <p class="card_title">You may get<br><span class="amt_return">&#8377;&nbsp;<span id="yourReturn"></span></span></p>
                                    <div class="investment_result">
                                        <p class="mb-0">If you invest&nbsp;<span class="invested_val"><b>&#8377;&nbsp;</b><span id="totalInvested"></span></span>&nbsp;<br></p>
                                        <p class="oneTimeResult"><span class="regular_span">for&nbsp;</span><span class="years_val"></span>&nbsp;Years at&nbsp;<span id="percent_val"></span>% p.a.</p>
                                    </div>
                                    <div id="legend" class="legend_text"></div><canvas id="investment_chart" height="240" class="investment_chart"></canvas><a rel="nofollow" target="_blank" href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=calculators&utm_campaign=l2category_page&utm_content=investnow" class="btn_primary" title="Investment Return">Invest Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="readMoreTxt">Read more about -<a href="<?=base_url()?>financial-tools-calculators/ulip-calculator" class="inline-links">ULIP Calculator</a></div>
                </div>
            </div>
        </section>
        <section class="hid" id="calculatingUlip">
            <div class="midWrapper">
                <h3 class="calculatingUlip-title">Calculating ULIP Returns Using the Power of Compounding</h3>
                <p class="calculatingUlip-desc">Let us now see the power of compounding in different case scenarios:</p>
                <div class="calculatingUlip-grid">
                    <div>
                        <ul class="calculatingUlip-Monthly">
                            <li class="calculatingUlip-monthlyList">Monthly Contribution</li>
                            <li>₹2,40,000</li>
                            <li>₹1,25,000</li>
                            <li>₹82,000</li>
                            <li>₹67,000</li>
                            <li>₹42,000</li>
                            <li>₹30,000</li>
                            <li>₹15,000</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="calculatingUlip-investment">
                            <li class="calculatingUlip-investmentList">Investment Period</li>
                            <li>10 Years</li>
                            <li>10 Years</li>
                            <li>15 Years</li>
                            <li>20 Years</li>
                            <li>15 Years</li>
                            <li>20 Years</li>
                            <li>30 Years</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="calculatingUlip-estimated">
                            <li class="calculatingUlip-estimatedList">Estimated Returns at 4%</li>
                            <li>₹3,53,39,953</li>
                            <li>₹1,84,06,226</li>
                            <li>₹2,01,79,420</li>
                            <li>₹2,45,73,900</li>
                            <li>₹1,03,35,801</li>
                            <li>₹1,10,03,239</li>
                            <li>₹1,04,10,741</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="calculatingUlip-returns">
                            <li class="calculatingUlip-returnsList">Estimated Returns at 8%</li>
                            <li>₹4,39,07,048</li>
                            <li>₹2,28,68,254</li>
                            <li>₹2,83,75,134</li>
                            <li>₹3,94,64,368</li>
                            <li>₹1,45,33,605</li>
                            <li>₹1,76,70,612</li>
                            <li>₹2,23,55,392</li>
                        </ul>
                    </div>
                </div>
                <div class="calculatingUlip-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=powerofcomp">Unlock ULIP's Compounding Potential</a></div>
            </div>
        </section>
        <section class="hid" id="howDoesUlipWork">
            <div class="midWrapper">
                <h2 class="howDoesUlipWork-title">How Does a ULIP Work?</h2>
                <p class="howDoesUlipWork-desc">ULIP operates at the crossroads of insurance and investment, allowing policyholders to navigate the dual objectives of securing their future and optimizing their financial growth.</p>
                <div class="howDoesUlipWork-flex">
                    <div class="howDoesUlipWork-bg1">
                        <div class="howDoesUlipWork-content-left">
                            <p>Choose the level of life insurance premium payment option, premium amount, and policy duration to match your financial security and savings goals.</p>
                        </div>
                    </div>
                    <div class="howDoesUlipWork-bg2">
                        <div class="howDoesUlipWork-content-right">
                            <p>Your nominee will receive the sum assured in the event of an unfortunate event during the policy term to realize their ambitions.</p>
                        </div>
                    </div>
                    <div class="howDoesUlipWork-bg3">
                        <div class="howDoesUlipWork-content-left">
                            <p>Dependingon your selections, the remainder of your premium is invested in the stock market using equity, debt, or hybrid funds.</p>
                        </div>
                    </div>
                    <div class="howDoesUlipWork-bg4">
                        <div class="howDoesUlipWork-content-right4">
                            <p>Equity invests your funds in stocks. Debt funds invest your money in safer instruments like bonds.</p>
                        </div>
                    </div>
                    <div class="howDoesUlipWork-bg5">
                        <div class="howDoesUlipWork-content-left">
                            <p>Your choice of an upfront, lumpsum payment or recurring payments on an annual, half-yearly, quarterly or monthly basis.</p>
                        </div>
                    </div>
                    <div class="howDoesUlipWork-bg6">
                        <div class="howDoesUlipWork-content-right6">
                            <p>Your life insurance is paid for in part with your premium.</p>
                        </div>
                    </div>
                </div>
                <div class="howDoesUlipWork-flexB">
                    <p>Do not wait ; start growing your wealth with Kotak e-Invest.</p><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=howulipworks">Take the first step</a>
                </div>
            </div>
        </section>
        <section class="hid" id="benefitsOfUlip">
            <div class="midWrapper">
                <h2 class="benefitsOfUlip-title">What are the Benefits of ULIPs?</h2>
                <div class="benefitsOfUlip-img"><img src="assets/images/ulip-plan/benefitsofulip.png" alt="Benefits of Ulip"></div>
                <p class="benefitsOfUlip-desc">Building a corpus to ensure a safe and secure future for your loved ones and yourself holds critical importance, and Unit Linked Insurance Plans have the potential to help you with that. They have several advantages, as mentioned below:</p>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi1"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Flexibility to Choose a Cover Amount</h3>
                        <p class="benefitsOfUlip-subDesc">You can choose your Life Cover amount as you desire in Unit Linked Insurance Policies. Most ULIPs offer a life cover of 7 times your yearly premium, which is the minimum. You can choose a life cover value of up to 25 times your yearly premium, depending on the type of plan you choose.</p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi2"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Flexibility to Choose the Type of Investment</h3>
                        <p class="benefitsOfUlip-subDesc">One of the most compelling aspects of ULIPs is the freedom to choose the investment type. This flexibility ensures that investors can personalize their ULIPs according to their unique requirements.</p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi3"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Financial goal plans</h3>
                        <p class="benefitsOfUlip-subDesc">ULIPs are designed to help you achieve your financial objectives, such as increasing your wealth,<a class="inline-links" href="https://www.kotaklife.com/insurance-plans/retirement-plans">planning for retirement,</a>or preparing for your child's future education plans. These plans also provide you with the assurance that your premium payments are contributing to the achievement of your long-term monetary objectives.</p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi4"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Maturity Benefit</h3>
                        <p class="benefitsOfUlip-subDesc">When your policy matures, you receive the accumulated fund value, which is a culmination of your invested premiums and market-linked returns.</p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi5"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Death Benefit</h3>
                        <p class="benefitsOfUlip-subDesc">ULIPs offer a comprehensive death benefit that guarantees your family's financial well-being in the event of your untimely demise. Your nominees will receive the proceeds basis the terms and conditions of your ULIP policy.</p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi6"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Loyalty Additions</h3>
                        <p class="benefitsOfUlip-subDesc">Loyalty additions in ULIPs are extra units added to your policy at specific intervals, rewarding you for staying invested over the years. This feature not only enhances the growth potential of your investment but also demonstrates the insurer's commitment to your financial success.</p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi7"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Wealth Boosters</h3>
                        <p class="benefitsOfUlip-subDesc">As you continue your ULIP journey, you'll encounter the concept of wealth boosters. These are additional units allocated to your policy on achieving certain milestones, such as completing five years or more of the policy term.</p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi8"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Dynamic Fund Allocation</h3>
                        <p class="benefitsOfUlip-subDesc">With dynamic fund allocation, you can switch between different funds offered by the insurer, such as equity, debt, or balanced funds. This strategic maneuvering allows you to optimize your returns and adapt to changing market dynamics.</p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi9"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Tax Advantages</h3>
                        <p class="benefitsOfUlip-subDesc">At different stages of your life insurance policy, you may be eligible for tax benefits as per the Income Tax Act of 1961.</p>
                        <ul class="benefitsOfUlip-list">
                            <li><b>Advantage of Entry:</b>Under Section 80C, you gain tax savings on your premium payments.</li>
                            <li><b>Advantage of Exit:</b>You can also get a tax-exempt Maturity Benefit if you meet the Section 10 (10D) requirements.</li>
                        </ul>
                    </div>
                </div>
                <div class="benefitsOfUlip-flexR">
                    <p>Invest in your dreams with Kotak Life Insurance ULIP plans.</p><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=benefitsofulip">Buy Now</a>
                </div>
            </div>
        </section>
        <section class="hid" id="typesOfUlip">
            <div class="midWrapper">
                <h2 class="typesOfUlip-title">Types of ULIP Funds</h2>
                <p class="typesOfUlip-desc">With ULIPs, individuals can secure their financial future while participating in the growth potential of the market. However, it is important to understand that not all<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/type-of-ulip-investments-in-india">types of ULIPs</a>are the same.</p>
                <div class="typesOfUlip-flex">
                    <div class="fund-tick"></div>
                    <div>
                        <h3 class="typesOfUlip-subTitle">Equity-based ULIPs</h3>
                        <p class="typesOfUlip-subDesc">Equity-based ULIPs invest a significant portion of your premium in equity-related instruments such as stocks and equity mutual funds. These plans are suitable for individuals seeking long-term capital appreciation and are willing to withstand short-term market fluctuations. Equity-based ULIPs offer potentially high returns, but they also come with a higher level of risk.</p>
                    </div>
                </div>
                <div class="typesOfUlip-flex">
                    <div class="fund-tick"></div>
                    <div>
                        <h3 class="typesOfUlip-subTitle">Debt-based ULIPs</h3>
                        <p class="typesOfUlip-subDesc">Debt-based ULIPs, as the name suggests, primarily invest in fixed-income instruments such as government bonds, corporate bonds, and fixed deposits. These plans are relatively less risky compared to equity-based ULIPs and are ideal for individuals seeking stable returns with a lower risk appetite. Debt-based ULIPs are generally recommended for conservative investors who prioritize capital preservation.</p>
                    </div>
                </div>
                <div class="typesOfUlip-flex">
                    <div class="fund-tick"></div>
                    <div>
                        <h3 class="typesOfUlip-subTitle">ULIPs with Multiple Fund Options</h3>
                        <p class="typesOfUlip-subDesc">Some ULIPs offer multiple fund options, allowing policyholders to choose from a range of investment strategies based on their risk tolerance and investment goals. These options may include diversified equity funds, sector-specific funds, debt funds, and even a combination of different funds. ULIPs with multiple fund options provide flexibility and allow investors to switch between funds as per market conditions or their changing financial objectives.</p>
                    </div>
                </div>
                <div class="typesOfUlip-flex">
                    <div class="fund-tick"></div>
                    <div>
                        <h3 class="typesOfUlip-subTitle">Retirement ULIPs</h3>
                        <p class="typesOfUlip-subDesc">Retirement ULIPs are designed specifically to help individuals build a retirement corpus. These plans offer a combination of insurance and investment benefits, allowing policyholders to secure their retirement while potentially earning returns. Retirement ULIPs typically have a longer lock-in period and provide the option of systematic withdrawals or annuity payouts after maturity.</p>
                    </div>
                </div>
                <div class="typesOfUlip-flex">
                    <div class="fund-tick"></div>
                    <div>
                        <h3 class="typesOfUlip-subTitle">Child ULIPs</h3>
                        <p class="typesOfUlip-subDesc">Child ULIPs are tailored to meet the future financial needs of your child, such as education expenses or marriage. These plans provide a life cover for the parent and offer investment options that align with the child's milestones. Child ULIPs often come with a built-in feature that waives future premiums in case of the policyholder's demise, ensuring that the child's financial goals are not compromised.</p>
                    </div>
                </div>
                <div class="typesOfUlip-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=typesofulip">Explore More</a></div>
            </div>
        </section>
        <section class="hid" id="whyChooseKotakUlip">
            <div class="midWrapper">
                <h2 class="whyChooseKotakUlip-title">Why Choose Kotak Life ULIP Policy?</h2>
                <p class="whyChooseKotakUlip-desc">Kotak Life ULIP Policy offers a compelling proposition for individuals seeking a comprehensive life insurance solution that also provides the opportunity for wealth creation. With its wide range of investment options, transparency, flexibility, life insurance coverage, and tax benefits, Kotak Life has emerged as a preferred choice among investors.</p>
                <div class="whyChooseKotakUlip-grid">
                    <div class="whyChooseKotakUlip-cards">
                        <div class="ulip-policy-icon upi1"></div>
                        <h3 class="whyChooseKotakUlip-subTitle">Customized Investment Options</h3>
                        <p class="whyChooseKotakUlip-subDesc">Kotak e-Invest allows you to choose from a wide range of funds based on your risk appetite and financial goals. Whether you prefer a conservative approach or are willing to take on higher risks for potentially higher returns, It also provides a variety of funds, including equity funds, debt funds, and balanced funds ensuring your investment stays aligned to your aspirations.</p>
                    </div>
                    <div class="whyChooseKotakUlip-cards">
                        <div class="ulip-policy-icon upi2"></div>
                        <h3 class="whyChooseKotakUlip-subTitle">Transparency and Flexibility</h3>
                        <p class="whyChooseKotakUlip-subDesc">The policyholder receives regular updates on the performance of their investments, enabling them to make informed decisions. Additionally, it allows you to switch between funds based on market conditions and changing investment preferences, ensuring that your money is invested in the most suitable avenues at all times. This flexibility sets Kotak e-Invest apart from traditional insurance policies and empowers you to manage your investments actively.</p>
                    </div>
                    <div class="whyChooseKotakUlip-cards">
                        <div class="ulip-policy-icon upi3"></div>
                        <h3 class="whyChooseKotakUlip-subTitle">Life Insurance Coverage</h3>
                        <p class="whyChooseKotakUlip-subDesc">Along with the investment component, Kotak e-Invest also offers comprehensive life insurance coverage. This means that in the unfortunate event of the policyholder's demise, the nominated beneficiaries will receive the sum assured, ensuring that their financial security remains intact. The dual benefit of insurance and investment makes Kotak Life e-Invest a holistic solution for protecting your loved ones while building wealth simultaneously.</p>
                    </div>
                    <div class="whyChooseKotakUlip-cards">
                        <div class="ulip-policy-icon upi4"></div>
                        <h3 class="whyChooseKotakUlip-subTitle">Wealth Creation Potential</h3>
                        <p class="whyChooseKotakUlip-subDesc">By staying invested for the long haul, you can benefit from the power of compounding and potentially achieve your<a href="https://www.kotaklife.com/insurance-guide/wealth-creation/planning-financial-goals-and-objectives-of-financial-planning" class="inline-links">financial goals,</a>such as funding your child's education, buying a dream home, or enjoying a comfortable retirement.</p>
                    </div>
                </div>
                <div class="whyChooseKotakUlip-cards mt20">
                    <div class="ulip-policy-icon upi5"></div>
                    <h3 class="whyChooseKotakUlip-subTitle">Tax Benefits</h3>
                    <p class="whyChooseKotakUlip-subDesc">The premiums paid towards the policy are eligible for tax deductions under Section 80C of the Income Tax Act, subject to certain limits. Additionally, the maturity proceeds and death benefit received by the policyholder or the nominee are tax-exempt under Section 10(10D). These tax advantages enhance the overall returns on your investment and contribute to your financial planning strategy.</p>
                </div>
                <div class="whyChooseKotakUlip-flexR">
                    <p>Enjoy the dual benefits of protection and growth with Kotak e-Invest.</p><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=whychoose">Invest today</a>
                </div>
            </div>
        </section>
        <section class="hid" id="typeOfUlipFunds">
            <div class="midWrapper">
                <h2 class="typeOfUlipFunds-title">What Type of Funds Do ULIP Plans Include?</h2>
                <p class="typeOfUlipFunds-desc">Whether you are a seasoned investor or someone exploring ULIP funds for the first time, understanding the different fund options available within ULIPs can help you make informed decisions and optimize your investment strategy.</p>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii1"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Equity Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">Equity funds are known for their potential to generate high returns by investing predominantly in stocks and equities. ULIPs offer a range of equity funds with varying degrees of exposure to different market segments and provides an opportunity for wealth creation.</p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii2"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Debt Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">Debt funds, also known as fixed-income funds, invest in fixed-income securities such as government bonds, corporate bonds, and debentures. These funds are relatively less risky compared to equity funds and provide stable returns over time.</p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii3"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Balanced Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">Balanced funds, as the name suggests, aim to strike a balance between equity and debt. These funds allocate a certain portion of the investment in equities for capital appreciation and the remaining portion in debt instruments for stability.</p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii4"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Money Market Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">Money market funds invest in short-term fixed-income instruments. These funds focus on capital preservation and liquidity. Money market funds in ULIPs are ideal for investors with a very low-risk tolerance or those seeking short-term parking of funds.</p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii5"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Sector-Specific Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">Some ULIPs also offer sector-specific funds that concentrate their investments in specific sectors or industries, such as technology, healthcare, or energy. These funds are suitable for investors who have a strong conviction about a particular sector's growth prospects.</p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=ulipfunds">Invest now</a></div>
            </div>
        </section>
        <section class="hid" id="manageUlipFunds">
            <div class="midWrapper">
                <h2 class="manageUlipFunds-title">How to Manage ULIP Funds?</h2>
                <p class="manageUlipFunds-desc">Do you have trouble managing your ULIP funds? Or are you not sure how to handle them in the best way possible? The following are some important considerations with regard to the management of ULIP funds:</p>
                <div class="manageUlipFunds-grid">
                    <div>
                        <ul class="manageUlipFunds-list">
                            <li>Numerous ULIPs permit routine transfers of funds from debt to equity ULIPs. If you pay an annual premium, you can begin investing in a debt fund and then choose to switch to an equity fund gradually. It would resemble Systematic Transfer Plans (STP), which have grown to be incredibly popular. You should absolutely think about adopting it to reduce your investment risk.</li>
                            <li>You must get ready for a<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/best-long-term-savings-investment-plans-in-india">long-term investment</a>because ULIPs have a five-year lock- in period.</li>
                            <li>The performance and future prospects of ULIP funds must be reviewed on a regular basis. If an asset class in your ULIP fund has underperformed or is overvalued, you should change it. You would need to migrate from an equity ULIP fund to a debt ULIP fund in order to achieve the same. There will not be any taxes to pay. There might be some fees but bear in mind that many ULIPs give investors a set number of free switches each year.</li>
                            <li>There are several ULIPs that have a lifecycle-based strategy. Based on the investor's age, this method automatically distributes their funds between equity and debt. If you decide to invest in ULIPs for your retirement, you may easily adopt this method.</li>
                        </ul>
                    </div>
                    <div class="manageUlipFunds-img"><img src="assets/images/ulip-plan/ManageULIPFunds.svg" alt="How to manage Ulip funds"></div>
                </div>
                <p class="manageUlipFunds-desc">If you are waiting for the ideal moment to buy ULIP, you should be aware that this moment never comes. Your chances of reaching your objectives are enhanced the earlier you begin investing in ULIPs.</p>
                <div class="manageUlipFunds-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=powerofcomp">Leveraging the power of compounding</a></div>
            </div>
        </section>
        <section class="hid" id="typesOfUlipCharge">
            <div class="midWrapper">
                <h2 class="typesOfUlipCharge-title">Types of ULIP Charges</h2>
                <p class="typesOfUlipCharge-desc">While ULIPs provide a versatile investment avenue, it is crucial to understand the various charges associated with them to make informed decisions.</p>
                <div class="typesOfUlipCharge-flex">
                    <div class="typesOfUlipCharge-card">
                        <h3 class="typesOfUlipCharge-subTitle">Premium Allocation</h3>
                        <p class="typesOfUlipCharge-subDesc">These charges are a percentage of the premiums. The net premium is then allocated at the Net Asset Value (NAV) prevailing on the date of receipt of the premium.</p>
                    </div>
                    <div class="typesOfUlipCharge-card">
                        <h3 class="typesOfUlipCharge-subTitle">Policy Administrative Fees</h3>
                        <p class="typesOfUlipCharge-subDesc">A fee is charged for the policy's management. This charge is applicable each month, and it depends on the premium band.</p>
                    </div>
                    <div class="typesOfUlipCharge-card">
                        <h3 class="typesOfUlipCharge-subTitle">Fund Management</h3>
                        <p class="typesOfUlipCharge-subDesc">These fees are imposed as a percentage of the fund value and are capped by IRDAI at 1.5% annually. These go toward administering your funds.</p>
                    </div>
                    <div class="typesOfUlipCharge-card">
                        <h3 class="typesOfUlipCharge-subTitle">Discontinuance or Surrender</h3>
                        <p class="typesOfUlipCharge-subDesc">If the ULIP plan is terminated early, within the first four years, a discontinuation fee is assessed. There are no surrender fees assessed after the fifth year.</p>
                    </div>
                    <div class="typesOfUlipCharge-card">
                        <h3 class="typesOfUlipCharge-subTitle">Partial Withdrawal Charge</h3>
                        <p class="typesOfUlipCharge-subDesc">Investors have the opportunity to exit the ULIP plan early after the first five years if necessary. Partial withdrawal is subject to penalties per the terms of the policy.</p>
                    </div>
                    <div class="typesOfUlipCharge-card">
                        <h3 class="typesOfUlipCharge-subTitle">Mortality Charge</h3>
                        <p class="typesOfUlipCharge-subDesc">These fees are imposed by the insurer to provide death coverage to the insured and are calculated after taking into account age, health conditions, and the insurer's mortality table.</p>
                    </div>
                    <div class="typesOfUlipCharge-card">
                        <h3 class="typesOfUlipCharge-subTitle">Switching Charges</h3>
                        <p class="typesOfUlipCharge-subDesc">Investors are permitted a set number of free-fund switches each year without incurring any fees. After this, every switch is subject to fees ranging from ₹100 to ₹500, depending on your insurer.</p>
                    </div>
                </div>
                <div class="typesOfUlipCharge-flexB">
                    <p>Embrace the potential of long-term wealth creation with Kotak e-Invest.</p><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=typesofcharges">Invest now</a>
                </div>
            </div>
        </section>
        <section class="hid" id="whatIsUlipNav">
            <div class="midWrapper">
                <h2 class="whatIsUlipNav-title">What is ULIP NAV?</h2>
                <p class="whatIsUlipNav-desc">A fund's Net Asset Value (NAV) is calculated as the asset value per unit less the liability value. You can monitor the performance of your fund using this value. A fundamental understanding of ULIP operation is necessary to comprehend<a class="inline-links" href="https://www.kotaklife.com/ulip-plans/ulip-nav">ULIP NAV.</a></p><br>
                <p class="whatIsUlipNav-desc">Like you, several other investors pay the insurance company the premium for a ULIP. The insurer then gathers the premium from each of these investors to produce a single sizable investment sum that is invested in a range of market instruments. Sizable and varied investments aid good returns.</p><br>
                <p class="whatIsUlipNav-desc">The number of units that each investor receives depends on the premium they pay. Net Asset Value, or NAV, is the measure of each unit's value. Each investor's portion of the total investment is represented by the number of units they own. The proceeds are then divided based on the number of units.</p>
                <div class="whatIsUlipNav-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=ulipnav">Invest now</a></div>
            </div>
        </section>
        <section id="testimonial">
            <div class="midWrapper">
                <div class="testimonial-bg">
                    <h3 class="testimonial-title">Testimonials</h3>
                    <div class="saving-testimonial savetest">
                        <div>
                            <div class="custom-review">
                                <p>When I was planning for my child's future, my friends recommended me about investing in ULIP. The benefits that ULIP offer were very well aligned with my requirements. This is why I started researching and came to know about Kotak e-Invest plan. I went through their online portal and got to know the premiums, returns and everything. I realized that Kotak ULIP plans was the best plan for me, and I bought it.</p>
                                <p class="stes-head">-Mr. Ambadas Sulakhe</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>ULIPs are new-age investment instruments that offer tax benefits and market-linked returns. I read about it online and started to think about my investments. I thought this could be a good addition to my financial portfolio. They offer market-linked returns with no Capital gain taxes. And I could easily optimize my returns by choosing the funds wisely. So, I decided to start my Kotak ULIP plan.</p>
                                <p class="stes-head">- Mr. Darpan V Mehta</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>Investments have always helped me achieve my difficult life goals. So, I make sure that every month I invest in the right instruments. Just when I was looking for a new investment option, I came across Kotak ULIP plan. They have various plan options; premium payment mode is flexible which is perfect for me. The plan aligned with my requirements and offered excellent returns which makes this one a best ULIP plan for me.</p>
                                <p class="stes-head">- Ms Munera Janvekar</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>Kotak ULIP plan is one of the best investment instruments I decided to invest my hard-earned money in. It gives me various fund options that help me manage my portfolio and make sure that my investment is optimized all the time. This way, I can gain returns when the market is high and go for debt funds when the markets go down. A win-win. If you are looking for such a plan, I recommend you to invest in Kotak ULIP plan.</p>
                                <p class="stes-head">- Mr Sujitbhai Ashokbhai Kanjariya</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>I was looking for investing a sum of amount that can give me good returns over the long term. I came across Kotak ULIP plan and decided to give it a try. I logged in to understand the plan and their call center executive helped me understand everything about the plan. I went ahead with the plan and the plan is giving me good returns and I can monitor them year on year. If you are looking for a long term investment with solid returns, I recommend you to invest in Kotak ULIP plan.</p>
                                <p class="stes-head">- Ms Neeti Garg</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>My friends recommended me to invest in an ULIP plan when they came to know that I am planning to buy a house in the future. I went online, spoke to my friends and came across Kotak ULIP plan. I registered on their portal where they showed me all plans, premiums and returns upfront. I completed the application process upload documents and made my payment. I was happy to make this decision as I can now monitor my returns and make a fund switching decision when required.</p>
                                <p class="stes-head">- Mr Santosh Kumar</p>
                            </div>
                        </div>
                    </div><span class="pagingInfo-review-tes d-flex playfair_font justify-content-center"></span>
                </div>
            </div>
        </section>
        <section class="hid" id="howToFindBestUlipPlan">
            <div class="midWrapper">
                <h2 class="bestUlipPlan-title">How to Find the Best ULIP Plans?</h2>
                <p class="bestUlipPlan-desc">With a plethora of options available in the market, finding the best ULIP plan can be a daunting task. Let us now explore some essential factors to consider when searching for the best ULIP plans.</p>
                <div class="bestUlipPlan-flex">
                    <div class="bestUlipPlan-card">
                        <div class="bu-card-icon buci1"></div>
                        <h3 class="bestUlipPlan-subTitle">Understand the Features and Benefits</h3>
                        <p class="bestUlipPlan-subDesc">Features and perks offered by various different plans vary. To choose the plan that best helps them achieve their financial objectives, you should be well-versed with the features and benefits provided by the ones accessible on the market.</p>
                    </div>
                    <div class="bestUlipPlan-card">
                        <div class="bu-card-icon buci2"></div>
                        <h3 class="bestUlipPlan-subTitle">Identify the Insurance Objectives</h3>
                        <p class="bestUlipPlan-subDesc">The choice of the plan that fulfils your financial ambitions and offers financial security to your family depends on the clarity of your investing and insurance objectives.</p>
                    </div>
                    <div class="bestUlipPlan-card">
                        <div class="bu-card-icon buci3"></div>
                        <h3 class="bestUlipPlan-subTitle">Decide Your Goals</h3>
                        <p class="bestUlipPlan-subDesc">Before deciding which ULIP plan to purchase; it is essential to evaluate your investing objectives. The availability of numerous fund options enables investors to investigate and evaluate their investment horizon and insurance goals for selecting the optimum strategy.</p>
                    </div>
                    <div class="bestUlipPlan-card">
                        <div class="bu-card-icon buci4"></div>
                        <h3 class="bestUlipPlan-subTitle">Claim Settlement Ratio</h3>
                        <p class="bestUlipPlan-subDesc">The claim settlement ratio shows what portion of all claims received by a company were ultimately resolved. The credibility of the insurance increases with the percentage.</p>
                    </div>
                </div>
                <div class="bestUlipPlan-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bestulip">Buy ULIP Online</a></div>
            </div>
        </section>
        <section class="hid" id="whyInvestinUlip">
            <div class="greyBg">
                <div class="midWrapper">
                    <div class="whyInvestinUlip-grid">
                        <div class="whyInvestinUlip-img"><img src="assets/images/ulip-plan/investInUlip.svg" alt="Why should you invest in Ulip"></div>
                        <div>
                            <h2 class="whyInvestinUlip-title">Why Should You Invest in ULIPs?</h2>
                            <p class="whyInvestinUlip-desc">Unit Linked Insurance Plans offer superior returns in multiple asset groups than the majority of insurance products. Depending on the performance of the fund, the policyholder can switch between debt and equity to ensure that the returns are positive and beneficial.</p><br>
                            <p class="whyInvestinUlip-desc">In case of ULIPs, the life cover provided is ten times the amount of annual premium payments, which in turn, makes the insured unsusceptible to market volatility. The insured gets liquidity benefits, transparency, returns, etc., which works in their favor. Therefore, investing in a ULIP makes for a smart decision!</p>
                            <div class="whyInvestinUlip-cta"><a href="">Invest in ULIP</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="whichUlipfundsAreBest">
            <div class="midWrapper">
                <h2 class="whichUlipfundsAreBest-title">Which ULIP Funds are Best Suited for You?</h2>
                <p class="whichUlipfundsAreBest-desc">If you are eager to understand which ULIP funds align with your financial objectives and risk tolerance, let us dive in and explore the options that can potentially help you achieve your investment goals while securing your loved ones' future.</p>
                <div class="whichUlipfundsAreBest-flex">
                    <div class="wfa-icon"></div>
                    <div>
                        <h3 class="whichUlipfundsAreBest-subTitle">Equity</h3>
                        <p class="whichUlipfundsAreBest-subDesc"><a href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-are-equity-mutual-funds" class="inline-links">Equity funds</a>are for people who have a high-risk appetite. Equity funds and their performance is based on the ups and downs of the market. You can opt for equity funds if you have a good risk appetite and want to create some wealth in the long term.</p>
                    </div>
                </div>
                <div class="whichUlipfundsAreBest-flex">
                    <div class="wfa-icon"></div>
                    <div>
                        <h3 class="whichUlipfundsAreBest-subTitle">Debt</h3>
                        <p class="whichUlipfundsAreBest-subDesc">Investments made using borrowed money ULIPs are geared toward debt instruments. Debentures, government bonds,<a href="https://www.kotaklife.com/insurance-guide/wealth-creation/corporate-bonds-types-and-benefits" class="inline-links">corporate bonds,</a>and fixed-income bonds fall under this category. These devices are safer since they carry low to moderate risk.</p>
                    </div>
                </div>
                <div class="whichUlipfundsAreBest-flex">
                    <div class="wfa-icon"></div>
                    <div>
                        <h3 class="whichUlipfundsAreBest-subTitle">Cash funds</h3>
                        <p class="whichUlipfundsAreBest-subDesc">Funds which invest in bank-owned money market funds are called as cash funds. These instruments have a very low-risk profile. As a result, of all ULIP categories, they offer the lowest returns. Risk-averse investors have the option of choosing cash funds ULIPs.</p>
                    </div>
                </div>
                <div class="whichUlipfundsAreBest-flex">
                    <div class="wfa-icon"></div>
                    <div>
                        <h3 class="whichUlipfundsAreBest-subTitle">Balanced funds</h3>
                        <p class="whichUlipfundsAreBest-subDesc">ULIPs give investors the choice to invest in both equities and debt instruments in order to balance risk and profit. The remainder of the fund is invested in equity, while a portion is assigned to debt instruments with set interest rates.</p>
                    </div>
                </div>
                <div class="whichUlipfundsAreBest-flexR">
                    <p>Multiply your wealth with Kotak e-Invest.</p><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=suitedulip">Invest today</a>
                </div>
            </div>
        </section>
        <section class="hid ulip-fact-slider" id="variousFactorsConsiderBuyingUlip">
            <div class="midWrapper position-relative mb-50">
                <h2 class="factorsConsiderUlip-title">What are the various factors to consider before buying ULIPs?</h2>
                <p class="factorsConsiderUlip-desc">ULIPs are life insurance products that are not the same as conventional insurance policies. Here are some factors that must be considered before choosing a Unit Linked Insurance Plan.</p><span class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>
                <div class="factorsslick mt20">
                    <div>
                        <div class="factorsConsiderUlip-card">
                            <h3 class="factorsConsiderUlip-subTitle">Financial Objectives</h3>
                            <p class="factorsConsiderUlip-subDesc">Before buying ULIPs, it is essential to identify your financial goals. Different ULIPs cater to distinct goals, such as wealth creation, tax planning, or income generation. Evaluate the plan's features, to ensure they complement your financial objectives.</p>
                        </div>
                    </div>
                    <div>
                        <div class="factorsConsiderUlip-card">
                            <h3 class="factorsConsiderUlip-subTitle">Risk Appetite</h3>
                            <p class="factorsConsiderUlip-subDesc">Evaluate your risk tolerance, considering your age, financial responsibilities, and ability to withstand market fluctuations. Your risk appetite will help determine the allocation of funds within your ULIP plan.</p>
                        </div>
                    </div>
                    <div>
                        <div class="factorsConsiderUlip-card">
                            <h3 class="factorsConsiderUlip-subTitle">Charges and Fees</h3>
                            <p class="factorsConsiderUlip-subDesc">Some common charges include premium allocation charges, policy administration charges, fund management charges, and mortality charges. Take note of the structure and magnitude of these charges, as they can significantly impact the long-term growth of your investment.</p>
                        </div>
                    </div>
                    <div>
                        <div class="factorsConsiderUlip-card">
                            <h3 class="factorsConsiderUlip-subTitle">Fund Performance and Track Record</h3>
                            <p class="factorsConsiderUlip-subDesc">Evaluate the track record and performance of the ULIP's underlying funds. Examine the historical returns, consistency, and risk-adjusted performance of the funds over different market cycles.</p>
                        </div>
                    </div>
                    <div>
                        <div class="factorsConsiderUlip-card">
                            <h3 class="factorsConsiderUlip-subTitle">Flexibility and Liquidity</h3>
                            <p class="factorsConsiderUlip-subDesc">Consider the flexibility and liquidity options provided by the ULIP. Look for features such as the ability to switch between funds, change the premium payment frequency, or increase or decrease the sum assured.</p>
                        </div>
                    </div>
                </div>
                <div class="factorsConsiderUlip-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=factors">Invest now</a></div>
            </div>
        </section>
        <section class="hid" id="stepsToBuyUlip">
            <div class="greyBg">
                <div class="midWrapper">
                    <h2 class="stepsToBuyUlip-title">Steps to Buy ULIP Online</h2>
                    <p class="stepsToBuyUlip-desc">To purchase unit-linked insurance plans online, follow these simple steps:</p>
                    <div class="stepsToBuyUlip-img mobNone"><img src="assets/images/ulip-plan/stepsToBuy.jpg" alt="ULIP Plans"></div>
                    <div class="mobblock deskNone stepsToBuyUlip">
                        <ul>
                            <li>
                                <p class="mb-10">Step</p>
                                <p class="stepsToBuyUlipSpan">01</p>
                                <p>Visit Kotak’s website<a href="https://www.kotaklife.com/savings-plan" class="inLine-links">https://www.kotaklife.com/ulip-plan</a></p>
                            </li>
                            <li>
                                <p class="mb-10">Step</p>
                                <p class="stepsToBuyUlipSpan">02</p>
                                <p>Click on the<b>“Invest in ULIP!”</b>It will redirect you to the application form.</p>
                            </li>
                            <li>
                                <p class="mb-10">Step</p>
                                <p class="stepsToBuyUlipSpan">03</p>
                                <p>Fill all the necessary details like name, number, annual income and click on check returns.</p>
                            </li>
                            <li>
                                <p class="mb-10">Step</p>
                                <p class="stepsToBuyUlipSpan">04</p>
                                <p>Once you click on the check returns, it will redirect you to another page to select your fund strategy, personal details like annual income, occupation, PAN card number and other details and also know your maturity value.</p>
                            </li>
                            <li>
                                <p class="mb-10">Step</p>
                                <p class="stepsToBuyUlipSpan">05</p>
                                <p>Fill in the necessary details, submit the documents required, and pay the premium.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="stepsToBuyUlip-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=steps2buy">Buy ULIP online</a></div>
                </div>
            </div>
        </section>
        <section class="ulip-docq docreq p0 hid hide" id="documentsRequiredForUlip">
            <div class="midWrapper">
                <h2 class="documentsRequiredForUlip-title">What are the Documents Required to Buy ULIPs?</h2>
                <p class="documentsRequiredForUlip-desc">Before purchasing a ULIP, the following documents must be kept handy -</p>
                <div class="roww mt20">
                    <div class="coll-40 align-self-center documentsRequiredForUlip-img"><img src="assets/images/ulip-plan/documentsRequired.svg" alt="Documents Required to buy Ulip"></div>
                    <div class="coll-60">
                        <ul>
                            <li>
                                <h3>Age proof</h3>
                                <p>This can be verified through a passport, voter’s ID, or driving license.</p>
                            </li>
                            <li>
                                <h3>Identity proof</h3>
                                <p>For this, a PAN card is mandatory.</p>
                            </li>
                            <li>
                                <h3>Address proof</h3>
                                <p>The address can be verified through a passport, voter’s ID, or driving license.</p>
                            </li>
                            <li>
                                <h3>Income proof</h3>
                                <p class="mx-524">For this, you will need to provide salary slips, income tax statements, bank statements, etc.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="ulipVsMutualFunds">
            <div class="midWrapper">
                <h2 class="ulipVsMf-title">ULIP vs Mutual Funds(MF) vs Fixed Deposits(FD)</h2>
                <p class="ulipVsMf-desc">The popular choices often compared are Unit Linked Insurance Plans (ULIPs) and other traditional investment instruments. Let’s compare the features benefits, of ULIPs compared to mutual funds & fixed deposits.</p>
                <div class="ulipVsMf-grid">
                    <div>
                        <ul class="ulipVsMf-aspect">
                            <li class="ulipVsMf-aspectsList">Aspects</li>
                            <li>Returns</li>
                            <li>Risk Profile</li>
                            <li>Tax Benefits</li>
                            <li>Maturity Benefit</li>
                            <li>Lock-in Period</li>
                            <li>Ideal For</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="ulipVsMf-ulip">
                            <li class="ulipVsMf-ulipList">ULIP <span class="geen-tick"></span></li>
                            <li>Market-linked</li>
                            <li>Moderate to High</li>
                            <li>EEE (Exempt-Exempt-Exempt) status</li>
                            <li>Sum assured + Fund value</li>
                            <li>5 years</li>
                            <li>Long-term financial goals</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="ulipVsMf-mf">
                            <li class="ulipVsMf-mfList">Mutual Funds</li>
                            <li>Market-linked</li>
                            <li>Moderate to High</li>
                            <li>Tax-efficient</li>
                            <li>NA</li>
                            <li>Varies</li>
                            <li>Long-term goals</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="ulipVsMf-fixed">
                            <li class="ulipVsMf-fixedList">Fixed Deposits</li>
                            <li>Fixed</li>
                            <li>Low to Moderate</li>
                            <li>TDS on interest</li>
                            <li>Principal + Interest</li>
                            <li>Varies</li>
                            <li>Short-term goals</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="ulipWealthCreation">
            <div class="midWrapper">
                <h2 class="ulipWealthCreation-title">ULIP for Wealth Creation</h2>
                <p class="ulipWealthCreation-desc">When an individual invests in a ULIP, the insurance provider allocates units based on the prevailing Net Asset Value (NAV) of the fund. The NAV changes with the performance of the underlying assets, reflecting the fund's growth.</p>
                <h3 class="ulipWealthCreation-subtitle">Benefits of ULIP for wealth creation</h3>
                <div class="ulipWealthCreation-flex">
                    <div class="ulipWealthCreation-card">
                        <div class="uwc-icon uwc1"></div>
                        <h3 class="ulipWealthCreation-subTitle">Diversification</h3>
                        <p class="ulipWealthCreation-subDesc">ULIPs provide access to various asset classes, including equities, bonds, and money market instruments. This diversification reduces the risk associated with investing in a single asset class and enhances the potential for higher returns.</p>
                    </div>
                    <div class="ulipWealthCreation-card">
                        <div class="uwc-icon uwc2"></div>
                        <h3 class="ulipWealthCreation-subTitle">Flexibility</h3>
                        <p class="ulipWealthCreation-subDesc">Policyholders have the flexibility to switch between different funds based on market conditions and their changing financial goals. For instance, during times of market volatility, one can switch from equity funds to debt funds to protect gains.</p>
                    </div>
                    <div class="ulipWealthCreation-card">
                        <div class="uwc-icon uwc3"></div>
                        <h3 class="ulipWealthCreation-subTitle">Tax Benefits</h3>
                        <p class="ulipWealthCreation-subDesc">ULIPs offer tax benefits under Section 80C of the Income Tax Act, allowing individuals to claim deductions on the premiums paid, up to a specified limit. Moreover, the maturity proceeds received on the policy are tax-free under Section 10(10D) of the Income Tax Act.</p>
                    </div>
                    <div class="ulipWealthCreation-card">
                        <div class="uwc-icon uwc4"></div>
                        <h3 class="ulipWealthCreation-subTitle">Long-Term Wealth Accumulation</h3>
                        <p class="ulipWealthCreation-subDesc">The<a href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-is-lock-in-period-in-ulip" class="inline-links">lock-in period of ULIPs</a>encourages long-term investing, which is a crucial element in building substantial wealth. Staying invested for an extended period enables compounding to work its magic and generate significant returns.</p>
                    </div>
                    <div class="ulipWealthCreation-card">
                        <div class="uwc-icon uwc5"></div>
                        <h3 class="ulipWealthCreation-subTitle">Life Insurance Coverage</h3>
                        <p class="ulipWealthCreation-subDesc">Apart from being an investment vehicle, ULIPs also provide life insurance coverage, which ensures financial protection for the policyholder's family in case of any unfortunate eventuality.</p>
                    </div>
                    <div class="ulipWealthCreation-staticCard"><img src="assets/images/ulip-plan/BenefitsULIPwealthcreation.svg">
                        <div class="ulipWealthCreation-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=growwealth">Start Growing Your Wealth Now</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="claimTaxBenefits">
            <div class="greyBg">
                <div class="midWrapper">
                    <h2 class="claimTaxBenefits-title">How to Claim Tax Benefits on ULIPs?</h2>
                    <p class="claimTaxBenefits-desc">Offering a unique combination of investment and insurance, ULIPs provide policyholders with the opportunity to grow their wealth while ensuring financial protection. One of the key advantages of ULIPs is the tax benefits they offer.</p>
                    <div class="claimTaxBenefits-flex">
                        <div class="fund-tick"></div>
                        <div>
                            <h3 class="claimTaxBenefits-subTitle">Deduction Under Section 80C</h3>
                            <p class="claimTaxBenefits-subDesc">ULIP premiums are eligible for a tax deduction under<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/savingstax/income-tax-deductions-list">Section 80C</a>of the Income Tax Act 1961. As per the current tax laws, the maximum deduction allowed under this section is ₹1.5 lakh per financial year. However, it is important to note that the deduction applies to the premium paid and not to the entire amount invested in the ULIP.</p>
                        </div>
                    </div>
                    <div class="claimTaxBenefits-flex">
                        <div class="fund-tick"></div>
                        <div>
                            <h3 class="claimTaxBenefits-subTitle">Tax-Exempt Maturity</h3>
                            <p class="claimTaxBenefits-subDesc">One of the significant advantages of ULIPs is that the maturity proceeds, including the investment gains, are tax-exempt under Section 10(10D) of the Income Tax Act, subject to certain conditions. To avail of this benefit, the annual premium should not exceed 10% of the sum assured. If the premium exceeds this limit, the tax benefit may not be available.</p>
                        </div>
                    </div>
                    <div class="claimTaxBenefits-flex">
                        <div class="fund-tick"></div>
                        <div>
                            <h3 class="claimTaxBenefits-subTitle">Switching of Funds</h3>
                            <p class="claimTaxBenefits-subDesc">ULIPs provide the flexibility to switch between different funds based on market conditions or investment preferences. The best part is that these switches do not attract any tax liability. You can optimize your investment by taking advantage of market movements without incurring tax consequences.</p>
                        </div>
                    </div>
                    <div class="claimTaxBenefits-flex">
                        <div class="fund-tick"></div>
                        <div>
                            <h3 class="claimTaxBenefits-subTitle">Partial Withdrawals</h3>
                            <p class="claimTaxBenefits-subDesc">ULIPs also allow policyholders to make partial withdrawals from their investments, subject to certain terms and conditions. The amount withdrawn is tax-free, provided it does not exceed 20% of the fund value. Any amount above this limit may attract tax liabilities.</p>
                        </div>
                    </div>
                    <div class="claimTaxBenefits-flex">
                        <div class="fund-tick"></div>
                        <div>
                            <h3 class="claimTaxBenefits-subTitle">Continuity of Tax Benefits</h3>
                            <p class="claimTaxBenefits-subDesc">It's crucial to maintain the policy for a minimum period to avail of the tax benefits mentioned above. If the policy is discontinued within five years from the commencement date, the tax benefits already claimed will be added to your taxable income in the year of discontinuation.</p>
                        </div>
                    </div>
                    <div class="claimTaxBenefits-cta"><a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=claimtax">Start Saving on Taxes Today</a></div>
                </div>
            </div>
        </section>
        <section class="hid space" id="mythsOfUlip">
            <div class="midWrapper">
                <h2 class="mythsOfUlip-title">Myths About Investing in ULIPs</h2>
                <p class="mythsOfUlip-desc">Unit Linked Insurance Plans (ULIPs) have long been a topic of debate in the world of investments. While some investors hail them as a flexible and efficient investment avenue, others harbor skepticism and believe in several myths associated with ULIPs.</p>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 1: ULIPs are Expensive</h3>
                    <p class="mythsOfUlip-subDesc">One of the most common misconceptions about ULIPs is that they are expensive. ULIPs do have charges associated with them. Many other investment options also involve charges, such as mutual funds or<a class="inline-links" href="https://www.kotaklife.com/ulip-plans/importance-of-portfolio-management">portfolio management</a>services.</p>
                </div>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 2: ULIPs Have Poor Returns</h3>
                    <p class="mythsOfUlip-subDesc">Another myth surrounding ULIPs is that they offer poor returns compared to other investment options, such as mutual funds or direct equity. The returns from a ULIP depend on several factors, including your investment horizon, the chosen fund options, and the insurer's track record.</p>
                </div>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 3: ULIPs Lack Transparency</h3>
                    <p class="mythsOfUlip-subDesc">Some investors believe that ULIPs lack transparency, making it difficult to understand where their money is being invested. However, ULIPs are regulated by the IRDAI, which ensures that the insurance companies disclose all relevant information related to the plan.</p>
                </div>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 4: ULIPs Have a Long Lock-in Period</h3>
                    <p class="mythsOfUlip-subDesc">It is true that ULIPs have a minimum lock-in period of five years as per IRDAI regulations, this duration also provides investors with the opportunity to benefit from the power of compounding over the long term.</p>
                </div>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 5: ULIPs are Only for Life Insurance</h3>
                    <p class="mythsOfUlip-subDesc">While ULIPs do provide life insurance coverage, they also serve as investment vehicles. They offer a dual benefit of insurance protection and potential wealth creation through market-linked returns.</p>
                </div>
            </div>
        </section>
        <section class="hid" class="what-policy-period how-buy-cat" id="ulip-faqs">
            <div class="midWrapper">
                <h2 class="mb-20 term-tags fnt-24">Unit Linked Insurance Plans (ULIP) FAQs</h2>
                <div class="accordion-div accordion-btns accordion-btns-gsp mt-mob-15">
                    <div class="bor">
                        <div class="accordion bor-top-zero" role="heading" aria-level="3"><span>1.</span>
                            <h3>What is ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <p>Unit Linked Insurance Plans, or ULIPs, are a combination of insurance and investment options. These plans provide both life insurance and also a means of accumulating wealth.</p>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>2.</span>
                            <h3>What is the maturity benefit for ULIPs?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The<a href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-are-the-maturity-benefits-in-a-ulip-plan" title="ULIP maturity benefit" class="clr-blu">ULIP maturity benefit</a>is the sum paid by the insurance company to the insured if he or she lives through the policy's maturity period. The maturity benefit amount is equal to the fund value.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>3.</span>
                            <h3>What is the death benefit for ULIPs?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The<a class="clr-blu" href="https://www.kotaklife.com/insurance-guide/retirement/what-is-the-death-claim-payable-in-the-case-of-ulip" title="death benefit in ULIP">death benefit in ULIP</a>is the sum paid to the policyholder's nominee in the unfortunate event of the policyholder's death during the policy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>4.</span>
                            <h3>How can one cancel a ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>By submitting a surrender request to your insurer and paying certain charges, you can<a class="clr-blu" href="https://www.kotaklife.com/insurance-guide/wealth-creation/how-to-cancel-ulip-policy" title="cancel your ULIP policy">cancel your ULIP policy.</a>When you surrender the policy, you will be offered the surrender value on the surrender date. However, you will not receive this money until your policy's five-year lock-in period has ended, if surrender is done within the lock-in period. Though you can terminate the coverage at any time throughout the policy's term, experts suggest investing for at least 10 years to get a decent corpus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>5.</span>
                            <h3>What is the fund value in ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Every policyholder has the choice of investing in one of several funds, depending on their risk tolerance and market trends. The<a class="clr-blu" href="https://www.kotaklife.com/insurance-guide/retirement/what-is-fund-value-in-ulip" title="fund value in ULIP">fund value in ULIP</a>is the total monetary value of the units owned by the policyholder. On any given day, it can be calculated by multiplying the net asset value (NAV) of each unit by the number of units held by the policyholder. Further, the fund's value can fluctuate depending on the daily NAV.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>6.</span>
                            <h3>What is the full form of ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Unit Linked Insurance Plan is the full name of this insurance product. A ULIP is an insurance strategy that combines investing opportunities to help you reach your long-term objectives with a life insurance component to help you provide for your family in the event of the unthinkable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>7.</span>
                            <h3>Are ULIP plans safe?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Since there is a five-year lock-in term, it is advisable to assess your personal financial situation and ambitions because the insurance provider would charge if the plan is cancelled before the lock-in time has expired.<a class="clr-blu" href="https://www.kotaklife.com/insurance-guide/retirement/how-safe-is-it-to-invest-in-ulip-plans" title="ULIPS are thus only a safe choice for long-term investments.">ULIPS are thus only a safe choice for long-term investments.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>8.</span>
                            <h3>In ULIP plans, can I do partial withdrawal?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Only when the first five policy years are complete and not before are<a class="clr-blu" href="https://www.kotaklife.com/insurance-guide/retirement/what-is-partial-withdrawal-in-ulips" title="partial withdrawals in ULIP plans">partial withdrawals in ULIP plans</a>permitted. Only when all past-due premiums have been paid on time and the policy is still in effect is partial withdrawal permitted. For partial withdrawals, there is a minimum restriction of ₹10,000.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>9.</span>
                            <h3>Is GST applicable on ULIPs?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>GST is additionally charged at 18% for life insurance policies purchased through Unit-Linked Insurance Plans (or ULIPs). This includes fund administration fees as well as GST costs associated with premium payments.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>10.</span>
                            <h3>Can I stop paying premium for my ULIP after some years?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p><a class="clr-blu" href="https://www.kotaklife.com/insurance-guide/retirement/what-happens-if-i-stop-paying-ulip-premium-after-first-premium" title="If you fall behind on the premium payments">If you fall behind on the premium payments,</a>your ULIP provider won't impose any penalties during the lock-in period. The only restriction is that you are unable to withdraw the funds until the lock-in term of five years has elapsed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>11.</span>
                            <h3>What is the right time to invest in ULIPs?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>When you are working toward your objectives, whatever they may be, and have a reliable income and few responsibilities, it is an<a class="clr-blu" href="https://www.kotaklife.com/insurance-guide/wealth-creation/is-this-the-right-time-to-invest-in-ulip" title="excellent time to invest in ULIPs">excellent time to invest in ULIPs.</a>You aren't required to invest the same amount each year, and you can even change your premium allocation each year.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>12.</span>
                            <h3>How do I maximize my ULIP return?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The greatest method to increase the<a class="clr-blu" href="https://www.kotaklife.com/insurance-guide/wealth-creation/tips-to-improve-ulip-gains" title="profits on your ULIP investments">profits on your ULIP investments</a>is to diversify your holdings across various asset classes. This will assist you in building a diverse portfolio so that, in the event of a loss in one asset class, it can be offset by gains in a different asset class.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>13.</span>
                            <h3>Is there a lock-in period for ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Plans for unit-linked insurance include a 5-year lock-in term. After the<a class="clr-blu" href="https://www.kotaklife.com/insurance-guide/retirement/what-is-lock-in-period-in-ulip" title="lock-in period">lock-in period,</a>it is usually advisable to keep the investment in ULIPs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>14.</span>
                            <h3>How can I track my ULIP funds?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p><a class="clr-blu" href="https://www.kotaklife.com/financial-tools-calculators/ulip-calculator" title="Calculating profits from a ULIP investment">Calculating profits from a ULIP investment</a>requires investors to take into account the premium and the duration for which the premium is paid. Investors must compare the starting NAV and the current NAV of the scheme in order to compute absolute return, also known as point-to-point return. The steps to calculate the absolute return are listed below.</p>
                                <ul class="list-disk">
                                    <li>Add the initial NAV to the current NAV.</li>
                                    <li>Subtract the value from the starting NAV.</li>
                                    <li>The result acquired in step 2 is multiplied by 100 to produce a percent value.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>15.</span>
                            <h3>How much return is guaranteed in ULIPs?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>If you invest in an average ULIP plan for at least ten years, you can expect an annual return of 10–12%. This is the main justification for why ULIPs are regarded as the best investments for long-term holders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>16.</span>
                            <h3>How are units allotted under a ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Each policyholder's money is collected by the insurer, who then invests it in the funds they have chosen. After the money has been invested, the total corpus is divided into "units" with a set face value. Then, according to the amount contributed, 'Units' are distributed to each investor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>17.</span>
                            <h3>Can I increase the premiums for a ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>A policyholder can contribute additional funds to his or her ULIP over and above the regular premiums they already pay – this is called as “Top-Up”. Paying an additional premium will raise the investment component of a successful ULIP, allowing you to benefit from it.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>18.</span>
                            <h3>Can I purchase a ULIP with only a one-time payment?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>ULIP makes a little investment to protect your life, while the remaining funds are placed in the stock market. Policyholders in ULIP have the option of paying the premiums either monthly (regularly) or annually (single).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="rating-section ratingHtml"></section>
        <section class="terms new-terms how-much ulip-terms" id="terms_conditions">
            <div class="midWrapper"><button type="button" name="tax-benefits" class="collapsible terms-txt whitespace-initial">Read about Tax benefits &amp; Plan Disclaimer</button>
                <div class="content-col mb-0 tab-align li-disc terms-para">
                    <div type="" class="terms-conditions">Terms and Conditions for ULIPs</div>
                    <div class="ulipterms">
                        <p>You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p>
                        <p>The calculation is generated on the basis of information provided and does not constitute an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the advised to go through the sales brochure before conducting any sale.</p>
                        <h3 class="fw-bold up-grace" style="font-weight:700!important">Grace Period</h3>
                        <ul>
                            <li>There is a Grace Period of 30 days for the annual, half-yearly and quarterly mode, and 15 days for the monthly mode from the due date for payment of premium.</li>
                            <li>The policy stays in force during the Grace Period.</li>
                        </ul>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight:700!important">Partial Withdrawals</h3>
                        <p>Some ULIP instruments offer you an option of partial withdrawals. There are various conditions under which this can be done, but it varies from product to product.</p>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight:700!important">Rider Details</h3>
                        <p>Applicable Rider Charges will be deducted from the Fund value if the Riders are chosen. There are different rider options that can enhance your protection and it is recommended that you check them out.</p>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight:700!important">Free Look Period</h3>
                        <p>If the policyholder does not agree to the terms and conditions mentioned in the policy document, he/she can always return the policy. This can only be done within 15-30 days of accepting the policy depending on the channel through which the policy was bought. This period is called free-look period and the insurance company should refund the premium to the policyholder.</p>
                    </div>
                    <div class="ulipterms">
                        <p class="fw-bold new" style="font-weight:700!important">There are a few charges which can be deducted before the refund-</p>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight:700!important">Goods and Services Tax and Cess</h3>
                        <p>Goods and Services Tax and Cess, as applicable shall be levied on all applicable charges as per the prevailing tax laws and/or any other laws. In case of any statutory levies, cess, duties etc., as may be levied by the Government of India from time to time. The Company reserves its right to recover such statutory charges from the policyholder(s) by deduction from the fund value.</p>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight:700!important">Tax Benefit</h3>
                        <p>Tax benefits are subject to conditions specified under the Income-tax Act, 1961. Tax laws are subject to amendments from time to time. Customer is advised to take an independent view from tax consultant.</p>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight:700!important">Risk Factors:</h3>
                        <p>The Unit Linked Insurance Products do not offer any liquidity during the first five years of the contract. The policyholder will not be able to surrender /withdraw the monies invested in Unit Linked Insurance Products completely or partially till the end of the fifth year from inception. Unit Linked Life Insurance products are different from the traditional insurance products and are subject to the risk factors. In ULIP, the investment risk in the investment portfolio is borne by the policyholder. Please know the associated risks and the applicable charges (along with the possibility of increase in charges), from your Insurance agent or the Intermediary or policy document of the insurer. The premium paid in Unit Linked Life Insurance policies are subject to investment risks associated with capital markets and the NAVs of the units may go up or down based on the performance of fund and factors influencing the capital market and the insured is responsible for his/her decisions. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure.</p>
                        <p><b>Kotak e-Invest</b> UIN - 107L121V01, Form No. - L121. Kotak Accidental Death Benefit Rider (Linked) UIN - 107A017V01 Form No: A017, Kotak Permanent Disability Benefit Rider (Linked) UIN -107A018V01 Form No: A018. This is an individual Unit-linked Non-participating Endowment Life Insurance Plan. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure.</p>

                        <p>
                            <b>Kotak T.U.L.I.P</b> UIN No.: 107L131V01 Form No.: L131, Kotak Accidental Death Protection Rider (Linked)
                            UIN No.:107A021V01, Form No.: A021. Kotak Critical Illness Benefit Rider (Linked)UIN No.:107A022V01
                            Form No.: A22. This is a non-participating unit linked endowment plan. This product is available for sale
                            through online mode. For more details on risk factors, terms and conditions please read sales brochure
                            carefully before concluding a sale. For more details on riders please read the Rider Brochure.
                        </p>
                        <p><b>Kotak Invest Maxima</b> UIN No.: 107L073V04, Form No: L073. This is an individual, unit linked non-par life insurance plan. This website content is not a brochure and only gives the salient features of the plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
                        <p><b>Kotak Single Invest Plus</b> UIN No.: 107L075V02, Form No.: L075. This is a savings oriented unit linked endowment plan. This website content only gives the salient features of the plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
                        <p><b>Kotak Single Invest Advantage</b> UIN No.: 107L065V04, Form No.: L065. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
                        <p><b>Kotak Platinum</b> UIN No.: 107L067V06, Form No.: L067. Kotak Accidental Death Benefit Rider (Linked) UIN No.: 107A017V01 Form No.: A017. Kotak Permanent Disability Benefit Rider (Linked) UIN No.: 107A018V01 Form No.: A018. This is an individual, Unit-linked, Non-par, Endowment Life Insurance Plan. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. For details on riders please read rider brochure.</p>
                        <p><b>Kotak Ace Investment</b> UIN No.: 107L064V05, Form No.: L064. Kotak Accidental Death Benefit Rider (Linked) UIN No.: 107A017V01 Form No.: A017. Kotak Permanent Disability Benefit Rider (Linked) UIN No.: 107A018V01 Form No.: A018. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
                        <p><b>Kotak Wealth Optima Plan</b> UIN: 107L118V02, Form No: L118, Kotak Accidental Death Benefit Rider (Linked) UIN – 107A017V01 Form No: A017, Kotak Permanent Disability Benefit Rider (Linked) UIN – 107A018V01 Form No: A018. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the rider brochure.</p>
                    </div>
                    <div class="">
                        <p class="fw-bold" style="font-weight:700!important">Section 41-</p>
                        <p class="mtb-16" style="margin-bottom:16px!important">Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: (1) No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. (2) Any person making default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.</p>
                        <p class="fw-bold" style="font-weight:700!important">Section 45-</p>
                        <p class="mtb-16" style="margin-bottom:16px!important">Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details:<a href="https://www.kotaklife.coassets/images/ulip-plan/images/uploads/why_kotak/section-38-39-45-of-insurance-act-1938.pdf" target="_blank" title="section38_39_45_of_insurance_act_1938">Read more about section38_39_45_of_insurance_act_1938</a></p>
                        <p class="fw-bold" style="font-weight:700!important">BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/ FRAUDULENT OFFERS</p>
                        <p class="mtb-16" style="margin-bottom:16px!important">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.<br><br>Regd. Office: Kotak Mahindra Life Insurance Company Ltd. Reg No. 107; CIN : U66030MH2000PLC128503; Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Website: www.kotaklife.com | WhatsApp: 9321003007 | Toll Free: 1800 209 8800 | ARN No.: KLI/23-24/E-WEB/2252<br><br>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div><input type="hidden" id="pageNo" name="pageNo" value="0"> <input type="hidden" id="sortType" name="sortType" value="recent"> <input type="hidden" id="pageLimit" name="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>"> <input type="hidden" id="searchArticle" name="searchArticle" value=""> <input type="hidden" id="pageType" name="pageType" value="topic"> <input type="hidden" id="topicSlug" name="topicSlug" value="wealth-creation"> <input type="hidden" id="url" name="url" value="<?php echo $this->uri->segment('1'); ?>/<?php echo $this->uri->segment('2'); ?>">
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@graph": {
            "@type": "FinancialProduct",
            "name": "ULIP Plans",
            "url": "<?=base_url()?>/ulip-plans",
            "category": "ULIP",
            "description": "ULIP combines the benefits of protection & savings in a single plan. Gain access to all the features and benefits by investing in the Kotak e-Invest unit-linked insurance plan.",
            "brand": "Kotak Life Insurance"
        }
    },

</script>
<script>
    var i, acc = document.getElementsByClassName("collapsible");
    for (i = 0; i < acc.length; i++) acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var e = this.nextElementSibling;
        "block" === e.style.display ? e.style.display = "none" : e.style.display = "block"
    })

</script>
<script>
    //lazyload
    document.addEventListener("DOMContentLoaded", function() {
        const imageObserver = new IntersectionObserver((entries, imgObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target;
                    // console.log("lazy loading ", lazyImage);
                    lazyImage.src = lazyImage.dataset.src;
                }
            })
        });
        const arr = document.querySelectorAll('img.lzy_img')
        arr.forEach((v) => {
            imageObserver.observe(v);
        })
    });
    var rating = '';
    //end lazy
    setTimeout(function() {

        $('.submitBtn').on("click", function() {
            if ($('input[name=rating]:checked').val()) {
                rating = $('input[name=rating]:checked').val()
            }
            $.ajax({
                url: "<?=base_url()?>site/feedbackrating",
                type: "post",
                data: {
                    rating: rating,
                    pagename: "ulip_plan",
                    fixed: "24800"
                },
                success: function(response) {
                    var resp1 = $.parseJSON(response);
                    var voteCount = $('.votedCount').html(resp1.feedbackratingdetailscount + ' ')
                    // localstorate.ulip_rating=rating;
                    localStorage.setItem('ulip_rating', rating);
                    var infotext = $('.infoText').html('Thank you for your feedback!')
                    $('.rating').addClass('afterClick');
                    $('.submitDiv').fadeOut('slow');
                    $('.votedcheck').removeClass('d-none');
                    $('.votedcheck').addClass('d-block');
                }
            });

        });
    }, 3000);

    $.ajax({
        url: "<?=base_url()?>site/ratingRetrieve",
        type: "post",
        data: {
            rating: localStorage.getItem('ulip_rating'),
            pagename: "ulip_plan",
            fixed: "24800"
        },
        success: function(response) {
            var resp1 = $.parseJSON(response);
            console.log(resp1)
            $('.ratingHtml').html(resp1.ratingHtml);
        }
    });

</script>
<script>
    $("#readMoreContent").click(function() {
        if ($(".contenttable").hasClass("show-more-height")) {
            $(this).text("Read Less");
            $(this).css("bottom", "-15px");
            $(".contenttable").css("borderBottom", "1px solid #dbdbdb")
        } else {
            $(this).text("Read More");
            $(this).css("bottom", "0");
            $(".contenttable").css("borderBottom", "none")
        }

        $(".contenttable").toggleClass("show-more-height");
    });

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

</script>
<script>

  const url = 'https://www.youtube.com/embed/tO9MPZ0ODjI?list=PLpZlPRDtZqPIlr6Pb8o0b56DmkuJRTPWB';

  function openUrlInFrame(url) {
    const iframe = document.getElementById('kotakVideo');
    iframe.src = url;
  }

  function onLoadAction() {
   
  }
 
  document.getElementById('kotakVideo').addEventListener('load', function() {
   
    setTimeout(onLoadAction, 400000);
  });

 
  openUrlInFrame(url);
</script>