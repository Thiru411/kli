<!doctype html>
<html lang="en">

<head>
    <script>
        dataLayer = []

    </script>
    <script>
        ! function(e, t, a, n, g) {
            e[n] = e[n] || [], e[n].push({
                "gtm.start": (new Date).getTime(),
                event: "gtm.js"
            });
            var m = t.getElementsByTagName(a)[0],
                r = t.createElement(a);
            r.async = !0, r.src = "https://www.googletagmanager.com/gtm.js?id=GTM-NH7ZFB6", m.parentNode.insertBefore(r, m)
        }(window, document, "script", "dataLayer")

    </script> <?php
		if(get_cookie('kotak_customer_type')){
		$customerType = get_cookie('kotak_customer_type');
	}else{
		$customerType = "new_customer";
	}
	 ?> <?php
$actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 /* echo "mamatha".$actual_link_url;*/
 if($actual_link_url==base_url()."online-plans/online-protection-plans")
 {
	 $redirectURL = base_url()."online-plans/online-term-insurance-plans/";
	 redirect("$redirectURL");
 }
if($actual_link_url==base_url()."online-plans/online-protection-plans/kotak-e-term-plan-online")
 {
	 $redirectURL = base_url()."online-plans/online-term-insurance-plans/kotak-e-term-plan-online";
	 redirect($redirectURL);
 }   ?>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="canonical" href="<?=base_url()?>">
    <link rel="stylesheet" href="<?=base_url()?>assets/mobile/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,700&display=swap" rel="stylesheet" as="style">
    <link rel="stylesheet" href="<?=base_url()?>assets/mobile/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mobile/css/slick.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mobile/css/slick-theme.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/mobile/css/custom-min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kotak Life</title>
    <script type="text/javascript">
        window.lmSMTObj = window.lmSMTObj || [];
        for (var methods = ["init", "page", "track", "identify"], i = 0; i < methods.length; i++) lmSMTObj[methods[i]] = function(e) {
            return function() {
                lmSMTObj.push([e].concat(Array.prototype.slice.call(arguments)))
            }
        }(methods[i]);
        lmSMTObj.init("zedwk69067jcajamagoj");
        var a = document.createElement("script");
        a.type = "text/javascript", a.async = !0, a.src = "//cdn25.lemnisk.co/ssp/st/6238.js";
        var b = document.getElementsByTagName("script")[0];
        b.parentNode.insertBefore(a, b);
        let page_name = "Kotak Life Insurance";
        console.log("PageName" + page_name), lmSMTObj.page({
            pageProps: {
                name: page_name
            }
        }, (function() {}));

    </script>
    <style>
        .home-header .yourwell {
            padding-top: 35px !important;
        }

        .custom-icon {
            width: 130px;
            height: auto
        }

        .secure-mobile-content {
            margin-top: 1rem;
            padding-left: 10px;
            padding-right: 10px;
            position: absolute;
            top: 90px;
            width: 250px
        }

        .secure-first {
            top: 90px
        }

        .secure-second {
            top: 70px;
            width: 260px
        }

        .secure-third {
            top: 70px;
            width: 230px
        }

        .secure-mobile-content h3 {
            color: #000;
            font-size: 20px;
            margin-bottom: .5rem;
            color: #da251c !important
        }

        .secure-mobile-content p.fnt-24 {
            font-size: 14px !important
        }

        .secure-mobile-content p {
            color: #000;
            font-size: 12px;
            line-height: 16px;
            margin-top: 5px
        }

        .aft-banner {
            margin-left: 10px
        }

        .home-header {
            display: none;
        }

        .home-header:first-child {
            display: block;
        }

    </style>
</head>

<body>
    <iframe title="iframe section" width="1" height="1" id="__tvc_uuid_frame"></iframe>
    <?php include_once ('mobile-header-nav.php');?> <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered search_sec">
            <div class="modal-content"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <div class="searchBox"><input type="text" name="searchTxt" id="searchTxt" placeholder="Search here" class="search_here"><a class="search_btn" id="searchResBtn" name="searchResBtn"><img class="lzy_img" alt="search" data-src="assets/images/searchIcon.png"></a></div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="online-but d-flex"><button type="button" class="buy-online btn-online" onclick="btn_online()">Buy Online</button>
            <a href="<?=base_url()?>how-do-i/pay-my-premium" class="m-premium">Pay Premium</a>
            <a href="<?=base_url()?>why-kotak-life/contact-us#contact-us-main" data="Contact Us" class="contact" onclick='dataLayer.push({event:"event right side menu",category:"New Customer",action:"Contact Us",label:"click"})'>Contact Us</a>
        </div>
        <div class="buy-life dd-none buy-online-new-sec">
            <div class="float-right"><img data-src="assets/mobile/images/cancel.png" alt="cancel" class="lzy_img img-fluid cross-red"></div>
            <div class="buy-life-new">
                <p class="buy-head">Buy a Life Insurance Plan in a few clicks</p>
                <p class="now-txt hide-mobile">Now you can buy life insurance plan online. </p>
                <div class="buy-life-slick">


                    <div>
                        <div class="buy-slick-card buy-slick-card-br">
                            <div class="d-flex">
                                <div class="mr-14">
                                    <div class="buy-imgs3">

                                    </div>
                                </div>
                                <div class="">
                                    <p class="p-txt">Kotak e-Invest</p>
                                    <p class="lcthree">Insurance and Investment in one plan.

                                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href="ulip-plans/kotak-e-invest" class="hide-desktop knw-mobile">Know more</a>
                                    </p>

                                </div>
                            </div>
                            <div class="d-flex buy-online-links">
                                <div>
                                    <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href="ulip-plans/kotak-e-invest" class="hide-mobile">Know More</a>
                                </div>
                                <div>
                                    <a rel="nofollow" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Invest Plan'});" href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_ulip" class="term-anc"> Invest and Insure Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="buy-slick-card buy-slick-card-br">
                            <div class="d-flex">
                                <div class="mr-14">
                                    <div class="buy-imgs">

                                    </div>
                                    <!-- <img alt="" src="assets/images/buy-life-img1.svg"> -->
                                </div>
                                <div class="">
                                    <p class="p-txt">Kotak e-Term</p>
                                    <p class="lcthree"> Protect your family's financial future.
                                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href="term-insurance/kotak-e-term" class="hide-desktop knw-mobile">Know more</a>
                                    </p>

                                </div>
                            </div>
                            <div class="d-flex buy-online-links">
                                <div>
                                    <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href="term-insurance/kotak-term-plan" class="hide-mobile">Know More</a>
                                </div>
                                <div>
                                    <a rel="nofollow" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_eterm" class="term-anc">Get Your Term Plan Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="buy-slick-card buy-slick-card-br ">
                            <div class="d-flex">
                                <div class="mr-14">
                                    <div class="buy-imgs7">

                                    </div>
                                </div>
                                <div class="">
                                    <p class="p-txt"> Kotak Guaranteed Fortune Builder
                                    </p>
                                    <p class="lcthree no-margin"> A plan that offers guaranteed income for your future goals.
                                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Lifetime Income Plan'});" href="online-plans/savings-plan/kotak-guaranteed-fortune-builder-online" class="hide-desktop knw-mobile">Know more</a>
                                    </p>

                                </div>
                            </div>
                            <div class="d-flex buy-online-links">
                                <div>
                                    <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Lifetime Income Plan'});" href="online-plans/savings-plan/kotak-guaranteed-fortune-builder-online" class="hide-mobile">Know More</a>
                                </div>
                                <div>
                                    <a rel="nofollow" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Invest Plan'});" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_kgfb" class="term-anc">Get Guaranteed Income Now</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div>
                        <div class="buy-slick-card buy-slick-card-br">
                            <div class="d-flex">
                                <div class="mr-14">
                                    <div class="buy-imgs">

                                    </div>
                                </div>
                                <div class="">
                                    <p class="p-txt">Kotak T.U.L.I.P</p>
                                    <p class="lcthree">A plan that works like a term plan, and Earns like ULIP Plan

                                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href="ulip-plans/kotak-tulip" class="hide-desktop knw-mobile">Know more</a>
                                    </p>

                                </div>
                            </div>
                            <div class="d-flex buy-online-links">
                                <div>
                                    <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href="ulip-plans/kotak-tulip" class="hide-mobile">Know More</a>
                                </div>
                                <div>
                                    <a rel="nofollow" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Invest Plan'});" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=sticky_tulip" class="term-anc"> Get Kotak T.U.L.I.P Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="buy-slick-card buy-slick-card-br">
                            <div class="d-flex">
                                <div class="mr-14">
                                    <div class="buy-imgs1">

                                    </div>
                                </div>
                                <div class="">
                                    <p class="p-txt">Kotak Assured Savings Plan</p>
                                    <p class="lcthree">A plan that offer guaranteed returns and financial protection for your family.
                                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href="savings-plan/kotak-assured-savings-plan" class="hide-desktop knw-mobile">Know more</a>
                                    </p>

                                </div>
                            </div>
                            <div class="d-flex buy-online-links">
                                <div>
                                    <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href="savings-plan/kotak-assured-savings-plan" class="hide-mobile">Know More</a>
                                </div>
                                <div>
                                    <a rel="nofollow" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_kasp" class="term-anc">Get Assured Returns Now</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div>
                        <div class="buy-slick-card buy-slick-card-br ">
                            <div class="d-flex">
                                <div class="mr-14">
                                    <div class="buy-imgs8">

                                    </div>
                                </div>
                                <div class="">
                                    <p class="p-txt">Kotak Assured Pension
                                    </p>
                                    <p class="lcthree no-margin">A plan that offers immediate or deferred stream of income
                                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Assured Pension'});" href="insurance-plans/retirement-plans/kotak-assured-pension" class="hide-desktop knw-mobile">Know more</a>
                                    </p>

                                </div>
                            </div>
                            <div class="d-flex buy-online-links">
                                <div>
                                    <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Assured Pension'});" href="insurance-plans/retirement-plans/kotak-assured-pension" class="hide-mobile">Know More</a>
                                </div>
                                <div>
                                    <a rel="nofollow" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak Assured Pension'});" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_kap" class="term-anc">Get Steady Income
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div>
                        <div class="buy-slick-card buy-slick-card-br">
                            <div class="d-flex">
                                <div class="mr-14">
                                    <div class="buy-imgs5">

                                    </div>
                                </div>
                                <div class="">
                                    <p class="p-txt">Kotak Lifetime Income Plan</p>
                                    <p class="lcthree">Retirement years are the golden years of life.
                                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Lifetime Income Plan'});" href="online-plans/retirement-pension-plans/kotak-lifetime-income-plan" class="hide-desktop knw-mobile">Know more</a>
                                    </p>

                                </div>
                            </div>
                            <div class="d-flex buy-online-links">
                                <div>
                                    <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Lifetime Income Plan'});" href="online-plans/retirement-pension-plans/kotak-lifetime-income-plan" class="hide-mobile">Know More</a>
                                </div>
                                <div>
                                    <!-- <a rel="nofollow" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Invest Plan'});" href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_annuity" class="term-anc">Get Lifetime Income Now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="buy-slick-card buy-slick-card-br buyhealth">
                            <div class="d-flex">
                                <div class="mr-14">
                                    <div class="buy-imgs2">

                                    </div>
                                </div>
                                <div class="">
                                    <p class="p-txt">Kotak Guaranteed Savings Plan </p>
                                    <p class="lcthree">A plan that offers long term savings and life cover.
                                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Guaranteed Savings Plan'});" href="online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="hide-desktop knw-mobile">Know more</a>
                                    </p>

                                </div>
                            </div>
                            <div class="d-flex buy-online-links">
                                <div>
                                    <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Guaranteed Savings Plan'});" href="savings-plan/kotak-guaranteed-savings-plan-online" class="hide-mobile">Know More</a>
                                </div>
                                <div>
                                    <a rel="nofollow" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak Guaranteed Savings Plan'});" href="https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_gsp" class="term-anc">Get Guaranteed Returns Now</a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>






            </div>
        </div>
    </section>
    <section class="kotak-life" style="width:100%">
       <img class="blur lzy_img" style="width:100%;margin-top:4rem" data-src="assets/images/banner/MobileBanners/Protect-India-Display-Banners-mobile1.jpg">
        <div class="slider" id="myHomeBanner" style="display:none">
            <div class="home-header">
                <div id="bp_6238_DmpSlotId164"></div>
            </div>

            <div class="home-header mt-space">
                <div class="heightspace">
                    <div class="slideBox kgfb-mobile-slider tulip-mobile-slider">
                        <div class="heightspace">
                        <p class="mob-text bluecolor ">In this policy, the investment risk in the investment portfolio is borne by the policyholder.</p>
                        <div class="content-absolute">
                                <a href=" https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=homepagebanner">
                                <!-- <h3 class="fnt-light1 gen2genmob1">Term plan se kayi zyada Ab mile returns ka bhi fayda</h3> -->
                                <!-- <h3 class="fnt-light1 gen2genmob1">Ab mile returns ka bhi fayda</h3> -->
                                <h3 class="kgfc-h2 fnt-light kayi">‘Kayi Zyada’ <span class="news">exciting news! </span></h3>

                                 
                           
                            <div class="sprite-div">
                                <div class="inifisprite infilogosprite"></div>
                            </div>

                            <p class="kotaktulipnew">Kotak <span class="tulipnewone">T.U.L.I.P</span></p>
                            <!-- <div class="mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/tulip-mobile-slider.webp" class="img-fluid lazy"></div> -->
                            <div class="get-lifecover">
                                <div class="life-gr">
                                    <!-- <div class="life-points">
                                <p>Works like a Term Plan. Earns like a ULIP.</p>
                            </div> -->
                                    <p class="worksmob">is voted the ‘Product of the Year’</p>
                                </div>
                            </div>
                            </a>
                             </div>
                            <!-- <div class="nfo-list w-100  mobile-btn button-bottom">
                                <a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=homepagebanner" class="nfo-btn nowinvest" target="_blank" tabindex="0">BUY NOW</a>
                                <a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=homepagebanner" class=" know1" target="_blank" tabindex="0">KNOW MORE</a>

                            </div> -->
                            <div class=" w-100 mobile-btn">

                           
                            <a class=" knowgrander" href="https://www.kotaklife.com/ulip-plans/kotak-tulip">KNOW MORE</a>
 <a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=homepagebanner" class="nfo-btn bbbb-grander" target="_blank" tabindex="0">BUY NOW</a>
                        </div>
                        </div>
                        <div class="mobile-ban1 mbans">
                        <div class="mobile-banners mbans-tulip"></div>
                       <!-- <img data-src="<?=base_url()?>assets/images/banner/MobileBanners/tulipmobile1.webp" class="img-fluid lazy">-->
                        </div>
                        <div class="tc-sl">
                            <p class="newcontentgen tulip-tc">
                                <span class="tandc">* T&amp;C Apply</span>
                                <span class="refer">Ref. No. : KLI/24-25/E-WEB/536</span>
                            </p>

                        </div>
                        <p class=" newtulipspace"> The Linked Insurance Products do not offer any liquidity during the first five years of the contract. The policyholder will not be able to withdraw or surrender the monies invested in Unit Linked Insurance Products completely or partially till the end of the fifth year.</p>


                    </div>
                </div>
            </div>
            <div class="home-header mt-space">

                             <div class="slideBox kgfb-mobile-slider tulip-mobile-slider">
                                 <div class="heightspace cr-slide">
                                     <div class="content-absolute fnt-light">
                                        <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=homepagebanner&utm_content=lifecover">
                                         <p class="mob-text bluecolor "> </p>
                                         <!-- <h3 >Get <span class="text-blue"> ₹1Cr. </span> Life cover at <span class="text-blue">₹15 </span> per day with <span class="text-blue"> Kotak e-term</span></h3> -->
                                         <h3 class="newfontfamily new-one"><span class="text-red"><b>₹1Cr</b> Life cover at</span><span class="text-red"> <b>₹15</b>/day</span></h3>
                                         <h3 class="newfontfamily newblue"><span class="text-blue get"> Get Kotak e-term</span></h3>
                                         <div class="sprite-div1crore">
                                             <div class="inifisprite infilogosprite1white"></div>
                                         </div>
                                         </a>
                                     </div>
                                     <!-- <div class="inifity-logo cr-infinty">
                                     <img src="<?=base_url()?>assets/images/banner/DesktopBanners/infinity-red.webp" alt="Kotak Life Insurance">
                                 </div> -->
                             
                             
                                     <div class=" w-100  mobile-btn">
                             
                                         
                                         <a href="https://www.kotaklife.com/term-insurance/kotak-e-term" class="know1">KNOW MORE</a>
                                         <a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=homepagebanner&utm_content=lifecover" class="nfo-btn bbbb" target="_blank" tabindex="0">BUY ONLINE</a>
                                         <!-- <a class=" know">Know More</a> -->
                             
                                     </div>
                                 </div>
                             </div>
                             <div class="mbans">
                             <div class="mobile-banners mbans-crs"></div>
                             
                             </div>
                             <p class="newcontentgen">
                                 <span class="tandc">* T&amp;C Apply</span>
                                 <span class="refer">Ref.No.: KLI/23-24/E-BB/2502</span>
                             </p>
                             
                             
                             
                             </div>

<div class="home-header sec-slider raising_star h-inc">

                <a class="newred" href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=homepagebanner" target="_blank">
                    <div class="heightspace mtop">
                        <div class="slideBox kgfb-mobile-slider">
                            <p class="mob-text bluecolor ">In this policy, the investment risk in the investment portfolio is borne by the policyholder.</p>
                            <div class="content-absolute msli-space">
                                <h3 class="redcolor fnt-weight-light fnt-26">Give your children the freedom to choose their dreams</h3>
                                <p class="whitee text-blue withone ">With <span class="fortune-pera1"> Kotak e-Invest 'Rising Star' option</span></p>
                            </div>
                            <div class="inifity-logo1">
                                <img class="infi" src="<?=base_url()?>assets/images/banner/MobileBanners/infinity-red.webp" alt="Kotak Life Insurance">
                            </div>
                        </div>

                        <div class="fund-icons sads">
                            <div class="d-flex child-flx">
                                <div class="f-cover">
                                    <div class="familysprite  fam1"></div>
                                    <h3 class="bluecolor">Free fund switches<sup>2</sup></h3>
                                </div>
                                <div class="f-cover">
                                    <div class="familysprite  fam2"></div>
                                    <h3 class="bluecolor">100% premium allocation</h3>
                                </div>
                                <div class="f-cover">
                                    <div class="familysprite  fam3"></div>
                                    <h3 class="bluecolor">Partial withdrawals<sup>1</sup></h3>
                                </div>


                            </div>
                        </div>
                        <div class=" w-100 mobile-btn">

                           
                            <a href="https://www.kotaklife.com/ulip-plans/kotak-e-invest" class="know">KNOW MORE</a>
                             <a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=homepagebanner" class="nfo-btn bbbb" target="_blank" tabindex="0">BUY ONLINE</a>

                        </div>
                    </div>
                </a>
                <div class="mobile-ban1 mbans">
                <div class="mobile-banners mbans-einvest"></div>
               <!-- <img data-src="<?=base_url()?>assets/images/banner/MobileBanners/grandermobile.webp" class="img-fluid lazy">-->
                </div>
                <p class="newcontentgen e-invest-tc">
                    <span class="tandc">* T&amp;C Apply</span>
                    <span class="refer">Ref.No.: KLI/23-24/E-BB/553</span>
                </p>
            </div>



            <div class="home-header mt-space">

                <div class="slideBox kgfb-mobile-slider tulip-mobile-slider genslider">
                    <div class="heightspace">
                        <p class="mob-text bluecolor "></p>
                        <div class="content-absolute fnt-light">
                            <!-- <h3 >Get <span class="text-blue"> ₹1Cr. </span> Life cover at <span class="text-blue">₹15 </span> per day with <span class="text-blue"> Kotak e-term</span></h3> -->
                            <h3 class="newfontfamily fnt-light gen2genmob ">Ek plan ki suraksha do generations ki raksha<sup class="star">*</sup></h3>
                            <!-- <h3 class="newfontfamily fnt-light gen2genmob">do generations ki raksha<sup class="star">*</sup></h3> -->
                            <p class="intro fnt-light">INTRODUCING</p>
                            <h3 class="kotakgenmob fnt-light">Kotak GEN<span class="genblue">2</span>GEN<span class="genblue"> Protect</span> </h3>


                        </div>

                        <div class=" w-100 mobile-btn">

                           
                            <a href="https://www.kotaklife.com/term-insurance/kotak-gen2gen-protect" class="know">KNOW MORE</a>
                             <a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=homepagebanner" class="nfo-btn bbbb1" target="_blank" tabindex="0">BUY NOW</a>

                        </div>
                    </div>
                   
                     <div class="mbans">
                     <div class="mobile-banners mbans-gen"></div>
                    <!-- <img data-src="<?=base_url()?>assets/images/banner/MobileBanners/gen2genbanmob.webp" class="img-fluid lazy rcbimg">-->
                    </div>
                     
                    <p class="ptext">*On opting Legacy ROP option, this plan provides life cover to the parent & after that to the identified child up to the specified age.</p>




                </div>

                <p class="newcontentgen">
                    <span class="tandc"># T&amp;C Apply</span>
                    <span class="refer">KLI/24-25/E-BB/243 </span>
                </p>
            </div>
            
            <div class="home-header sec-slider raising_star h-inc">

                <a class="newred" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=homepagebanner" target="_blank">
                    <div class="heightspace mtop">
                        <div class="slideBox kgfb-mobile-slider">
                            <p class="mob-text bluecolor ">In this policy, the investment risk in the investment portfolio is borne by the policyholder.</p>
                            <div class="content-absolute msli-space">
                                <h3 class="fnt-lightgrander  gen2gengrandermob">Guarantee their dreams, make them grander</h3>
                                <!-- <h3 class="fnt-lightgrander gen2gengrandermob"> make them grander</h3> -->
                            </div>
                            <p class="granderfont"><span class="with-css">With</span> Kotak Guaranteed Fortune Builder</p>

                            <div class="sprite-div1">
                                <div class="inifisprite infilogosprite1"></div>
                            </div>
                        </div>
                        <!-- <div class="mobile-ban1 raising-mobile-ban1"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/newgrander.webp" class="img-fluid lazy"></div> -->
                        <div class="fund-icons gaun-icon">
                            <div class="d-flex child-flx">
                                <div class="f-cover">
                                    <div class="familysprite  fam1"></div>
                                    <h3 class="taxmob">Life Cover<sup>2</sup></h3>
                                </div>
                                <div class="f-cover">
                                    <div class="familysprite  fam2"></div>
                                    <h3 class="taxmob">Guaranteed<sup>@</sup> return</h3>
                                </div>
                                <div class="f-cover">
                                    <div class="familysprite  fam3"></div>
                                    <h3 class="taxmob">Tax benefits<sup>*</sup></h3>
                                </div>


                            </div>
                        </div>
                        <div class=" w-100 mobile-btn">

                            
                            <a class=" knowgrander" href="https://www.kotaklife.com/savings-plan/kotak-guaranteed-fortune-builder">KNOW MORE</a>
                            <a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=homepagebanner&utm_content=startup_investnow" class="nfo-btn bbbb-grander" target="_blank" tabindex="0">INVEST NOW</a>

                        </div>
                    </div>

                    <div class="mobile-ban1 mbans">
                    <!--<img data-src="<?=base_url()?>assets/images/banner/MobileBanners/newgrander.webp" class="img-fluid lazy">-->
                      <div class="mobile-banners mbans-eterm"></div>
                    </div>
                    <p class="newcontentgen e-invest-tc">
                        <span class="tandc">* T&amp;C Apply</span>
                        <span class="refer">Ref.No.: KLI/24-25/E-WB/464</span>
                    </p>


                </a>

            </div>









            <!-- gentogen -->



            <!-- gentogen end -->




           





            <!--div class="home-header mt-space">
                <div>
                    <div class="slideBox kgfb-mobile-slider">
                        <div class="content-absolute">
                            <h3 class="text-blue">Fund your start-up with<br>guaranteed regular income</h3>
                            <p class="fnt-24 text-blue">Buy<span class="pera-red"><b>Kotak Guaranteed<br>Fortune Builder</b></span>now.</p>
                        </div>
                        <div class="mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/slider-banner1.webp" class="img-fluid lazy"></div>
                        <div class="invest-box">
                            <div class="pay-get">
                                <div class="head-box">
                                    <h3>Pay</h3>
                                </div>
                                <div class="payvalue">
                                    <h3>&#x20b9;1,00,000</h3>
                                    <p>p.a for 10 years</p>
                                </div>
                            </div>
                            <div class="pay-get">
                                <div class="head-box">
                                    <h3>Get</h3>
                                </div>
                                <div class="payvalue">
                                    <h3>&#x20b9;1,19,449</h3>
                                    <p>p.a for 25 years after 11<em>th</em>year</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="red-btn"><a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=homepagebanner&utm_content=startup_investnow" target="_blank">Invest Now</a></div>
                </div>
            </div-->










           




            <!-- <div class="home-header mt-space">
                <div>
                    <div class="slideBox kgfb-mobile-slider tulip-mobile-slider">
                        <div class="content-absolute">
                            <h3 >Get <span class="text-blue">₹1Cr.</span>Life cover at <span class="text-blue">₹15</span>per day with <span class="text-blue"> Kotak e-term</span></h3>
                            
                        </div>
                   <div class="inifity-logo">
                        <img src="<?=base_url()?>assets/images/banner/DesktopBanners/Infinity-logo.webp" alt="Kotak Life Insurance">
                    </div>
                    
                        <div class=""><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/rcbmob.webp" class="img-fluid lazy rcbimg"></div>
                     
                   <div class=" w-100 tulip-btn">
                   <a class=" know">Know More</a>
                     <a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=homepagebanner" class="nfo-btn bbbb" target="_blank" tabindex="0">Invest Now</a>
                     
                    </div>
                </div>
            </div>
            </div> -->

            <!-- <div class="home-header mt-space">
                <div>
                    <div class="slideBox kgfb-mobile-slider tulip-mobile-slider">
                        <div class="content-absolute">
                            <h3 >Give your children the freedom to choose their dreams</h3>
                            <p class="fnt-24 text-blue">With <span  class="text-blue">Kotak e-Invest 'Rising Star' option</span> </p>
                        </div>

                      
                           
                           <ul class="new-ul">
                               <div class="firstli" >
                                 <div class="kinvestnew newinfi"></div>
                                 <li class="fnt-24 text-blue" style="font-size: 14px; white-space: nowrap;">100% premium allocation</li>
                               </div>
                               <div class="secondli" >
                                 <div class="kinvestnew newinfi1"></div>
                                 <li class="fnt-24 text-blue" style="font-size: 14px; white-space: nowrap;">Life cover</li>
                               </div>
                           </ul>

                            <ul class="new-ul newspace">
                              <div class="firstli" >
                                <div class="kinvestnew newinfi1"></div>
                                <li class="fnt-24 text-blue" style="font-size: 14px; white-space: nowrap;">Free fund switches<sup>2</sup></li>
                              </div>
                              <div class="secondli" >
                                <div class="kinvestnew newinfi"></div>
                                <li class="fnt-24 text-blue" style="font-size: 14px; white-space: nowrap;">Partial withdrawals<sup>1</sup></li>
                              </div>
                            </ul>
                     







                              <div class="inifity-logo">
                                   <img src="<?=base_url()?>assets/images/banner/DesktopBanners/Infinity-logo.webp" alt="Kotak Life Insurance">
                               </div>
                               
                                   <div class=" new-ban"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/fammob.webp" class="img-fluid lazy fam"></div>
                                 
                                 <div class=" w-100 tulip-btn">
                                 <a class=" know">Know More</a>
                                   <a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=homepagebanner" class="nfo-btn bbbb" target="_blank" tabindex="0">Invest Now</a>
                                  
                                  </div>
                   </div>
              </div>
            </div>
 -->







            <!-- <div class="home-header sec-slider raising_star">
                <div>
                 <a class="newred" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=homepagebanner" target="_blank">

                    <div class="slideBox kgfb-mobile-slider">
                    <p class="mob-text ">In this policy, the investment risk in the investment portfolio is borne by the policyholder.</p>
                        <div class="content-absolute">
                            <h3 class="text-white">Give your children the freedom to choose their dreams.</h3>
                            <p class="fnt-24 text-blue">Buy<span class="pera-yellow"> With <b> Kotak e-Invest <br> 'Rising Star' </b> </span>option.</p>
                        </div>
                    </div>
                    <div class="mobile-ban raising-mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/raising-mobile-banner.png" class="img-fluid lazy"></div>
                    <div class="fund-icons">
                        <div class="d-flex child-flx">
                          <div class="f-cover">
                                <div class="raising-icon rai1"></div>
                                <h3>Free fund switches<sup>2</sup></h3>
                            </div>
                            <div class="f-cover">
                                <div class="raising-icon rai2"></div>
                                <h3>100% premium allocation</h3>
                            </div>
                            <div class="f-cover">
                                <div class="raising-icon rai3"></div>
                                <h3>Partial withdrawals<sup>1</sup></h3>
                            </div>
                            <div class="f-cover">
                                <div class="raising-icon rai3"></div>
                                <h3>Life cover</h3>
                            </div>
                           
                        </div>
                    </div>
                    <div class="red-btn raising_btn"><a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=homepagebanner&utm_content=children_investnow" target="_blank">Invest Now</a>
                      <a href="https://www.kotaklife.com/term-insurance/kotak-e-term" class="knowmore_raising">Know More</a>
                    </div>
                    <p class="ban-top_white"><span>* T&C Apply</span><span> Ref.No.: KLI/22-23/E-BB/2345</span></p>
                 </a>
                </div>
            </div> -->
            <!-- <div class="home-header">
                <div>
                    <div class="slideBox kgfb-mobile-slider">
                        <div class="content-absolute">
                            <h3 class="text-blue">Get<b>&#x20b9;1Cr life cover</b>with the option to get all your<b>premiums back.</b></h3>
                            <p class="fnt-24 blue-text third-pera">Secure your family with<br><span class="pera-red"><b>Kotak e-Term</b></span></p>
                        </div>
                    </div>
                    <div class="mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/slider-banner3.webp" class="img-fluid lazy"></div>
                    <div class="get-lifecover">
                        <div class="life-gr">
                            <div class="life-points">
                                <div class="life-icon li1"></div>
                                <p>Enhance protection through optional rider</p>
                            </div>
                        </div>
                        <div class="life-gr">
                            <div class="life-points">
                                <div class="life-icon li2"></div>
                                <p>Online discount up to 7.5% on premium</p>
                            </div>
                        </div>
                        <div class="life-gr">
                            <div class="life-points">
                                <div class="life-icon li3"></div>
                                <p>Free medical checkup every 5<sup>th</sup>policy term<sup>**</sup></p>
                            </div>
                        </div>
                    </div>
                    <div class="red-btn lifecover-btn mt-0"><a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" href="https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=homepagebanner&utm_content=premiumback_investnow" target="_blank">Buy Online</a></div>
                </div>
            </div> -->
            <div class="home-header happybg">
                <div>
                    <!--<img data-src="<?=base_url()?>assets/images/banner/MobileBanners/pandamob.webp" class="img-fluid lazy life-img">-->

                    <div class="spacenew">
                        <div class="happyyousprite happysprite"></div>
                    </div>
                    <h3 class="text-blue position_text yourwell">Your wellbeing partner, install happiness</h3>
                    <div class="slideBox kgfb-mobile-slider">
                        <div class="happy-content">

                            <!-- <p class="fnt-24 blue-text">It is designed to help you set goals, grab rewards and win at life..</p> -->
                            <div class="happy-app-download"><a rel="nofollow" class="iso-app" href="https://apps.apple.com/in/app/happyyou-by-kotak/id6448199779?utm_source=KLI&utm_medium=KLI+website&utm_campaign=HY+appstore&utm_id=Website-+HY+App+store" target="_blanck"></a><a rel="nofollow" class="goo-app" href="https://play.google.com/store/apps/details?id=com.wyh.happyyou&referrer=utm_source%3DKLI%26utm_medium%3DKLI%2BWebsite%26utm_campaign%3DHY%2BPlaystore" target="_blanck"></a></div>
                            <div class="mobile-ban1 mbans">
                            <!--<img data-src="<?=base_url()?>assets/images/banner/MobileBanners/happyyou-panda.webp" class="img-fluid lazy">-->
                             <div class="mobile-banners mbans-happy"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="home-header sec-slider">
                <div>
                    <div class="slideBox kgfb-mobile-slider">
                        <div class="content-absolute">
                            <h3 class="text-blue">Service touchpoints for all your needs</h3>
                            <p class="fnt-24 text-blue">At Kotak Life, when it comes to reaching us, <b>ease hai... hamesha!</b></p>
                        </div>
                    </div>
                    <div class="mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/irdai-mobile.webp" class="img-fluid lazy"></div>
                    <div class="fund-icons">
                        <div class="d-flex child-flx irda-group">
                            <div class="f-cover">
                                <div class="irdai-icon id1"></div>
                                <h3>Email</h3>
                            </div>
                            <div class="f-cover">
                                <div class="irdai-icon id2"></div>
                                <h3>WhatsApp</h3>
                            </div>
                            <div class="f-cover">
                                <div class="irdai-icon id3"></div>
                                <h3>Kaya</h3>
                            </div>
                           
                        </div>
                        <div class="d-flex child-flx irda-group">
                         <div class="f-cover">
                                <div class="irdai-icon id4"></div>
                                <h3>Online policy</h3>
                            </div>
                            <div class="f-cover">
                                <div class="irdai-icon id5"></div>
                                <h3>Branches</h3>
                            </div>
                            <div class="f-cover">
                                <div class="irdai-icon id6"></div>
                                <h3>Service agent</h3>
                            </div>
                        </div>
                    </div>
                    <div class="red-btn"><a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" href="#" target="_blank">Invest Now</a></div>
                </div>
            </div> -->
            <!-- <div class="home-header">
                <div>
                    <div class="slideBox kgfb-mobile-slider">
                        <div class="content-absolute">
                            <h3 class="text-blue">Start Small, Finish Big</h3>
                        </div>
                    </div>
                    <div class="mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/nfo-mobile.webp" class="img-fluid lazy life-img"></div>
                    <div class="bannerCont nfo-web">
                        <div class="vCenterWrap top-text">
                            <h2 class="lifecover-h2 text-blue fnt-45 text-center">available with</h2>
                            <div class="nfo-content">
                                <div class="nfo-list">
                                    <h3>Kotak Platinum</h3><a href="https://www.kotaklife.com/ulip-plans/kotak-platinum-plan" class="nfo-btn" target="_blank">Invest Now</a>
                                </div>
                                <div class="nfo-list">
                                    <h3>Kotak Invest Maxima</h3><a href="https://www.kotaklife.com/ulip-plans/kotak-invest-maxima" class="nfo-btn" target="_blank">Invest Now</a>
                                </div>
                                <div class="nfo-list">
                                    <h3>Kotak Wealth Optima Plan</h3><a href="https://www.kotaklife.com/ulip-plans/kotak-wealth-optima-plan" class="nfo-btn" target="_blank">Invest Now</a>
                                </div>
                                <div class="nfo-list">
                                    <h3>Kotak Single Invest Advantage</h3><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="nfo-btn" target="_blank">Invest Now</a>
                                </div>
                            </div>
                            <p class="nfo-get text-blue">Get the dual advantage of Investment Growth & Life Insurance cover</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <section class="life-need1 position-relative">
        <form class="form-horizontal" action="" method="POST" id="myform">
            <fieldset id="account_information" class="">
                <section class="life-need">
                    <div class="container">
                        <h2 class="life-header text-center mb-3 pb-1">Know Your Life's Need</h2>
                        <p class="life-cont mb-5">Everything you buy today is tailor-made to your needs. Why should your insurance policies be any different?</p>
                        <div class="life-box">
                            <h3 class="lifetext">I AM LOOKING</h3>
                            <div class="form-group need_group steps"><select class="selectpicker" id="needSegment1" title="Choose your need here" required name="needSegment" onchange="getSegment()">
                                    <option value="" style="display:none">Choose your need here</option>
                                    <optgroup label="To Buy">/<option value="Term Insurance Plan">Term Insurance Plan</option>
                                    <option value="Kotak Gen2Gen Protect">Kotak Gen2Gen Protect</option>
                                        <option value="Kotak Guaranteed Fortune Builder">Kotak Guaranteed Fortune Builder</option>
                                        <option value="ULIP Plan">ULIP Plan</option>
                                        <option value="Assured Savings Plan">Kotak Assured Savings Plan</option>
                                        <!-- <option value="Kotak Lifetime Income Plan">Kotak Lifetime Income Plan</option> -->
                                        <option value="Guaranteed Savings Plan">Kotak Guaranteed Savings Plan</option>
                                        <option value="Assured Pension">Kotak Assured Pension </option>
                                    </optgroup>
                                    <optgroup label="For Information">
                                        <option value="About Term Insurance Plan">About Term Insurance Plan</option>
                                        <option value="About ULIP Plans">About ULIP Plans</option>
                                        <option value="About Savings Plans">About Savings Plans</option>
                                        <option value="About Health Insurance">About Health Insurance</option>
                                        <option value="About Retirement Plans">About Retirement Plans</option>
                                    </optgroup>
                                </select></div>
                        </div>
                    </div>
                </section>
            </fieldset>
            <fieldset id="company_information" class="">
                <div class="number d-flex">
                    <li class="number_li">1</li>
                    <li class="number_li" style="color:#5e6061">2</li>
                    <li class="number_li">3</li>
                </div>
                <div class="container mt-5">
                    <div class="kotak-click2">
                        <div class="prev-step"><a href="javascript:void(0)" class="prev">Back</a></div>
                        <p class="click2-content mb-4">Tell us something about you to suggest proper plan for you.</p>
                        <p class="click2-content mb-4">*All fields Mandatory</p>
                        <form>
                            <div class="form-group mb-3"><input type="text" required class="form-control" title="Name required." id="custName" placeholder="Your Name " name="custName"></div>
                            <div class="form-group mb-3 age_group"><select required class="selectpicker" id="ageGroup" title="Choose your age group" name="ageGroup">
                                    <option>Choose your age group</option> <?php $years=$bind_ageGroupDDMobile->field_list_items;
$pieces = preg_split('/[\n]+/', $years);
foreach($pieces as $date){
if (strpos($date, '-') !== false) {
$dateV = str_replace('-', 'to', $date);
}
if (strpos($date, '&') !== false) {
$dateV = str_replace('&', 'and', $date);
}
echo "<option value='{$dateV}'>$date</option>";
}
?>
                                </select></div>
                            <div class="form-group mb-3"><input type="number" required class="form-control" title="Number required." id="custNumber" name="custNumber" placeholder="Mobile Number "></div>
                            <div class="form-group mb-3"><input type="text" required class="form-control" title="City required." id="custCity" name="custCity" placeholder="Your City "></div>
                            <div class="form-group mb-3"><input type="text" required class="form-control" title="Pincode required." id="pincode" name="pincode" placeholder="Pincode "></div><a href="javascript:" id="nextResBtn" data-label="next click" data-action="form 1b" data-event="event I am looking for" class="btn next link">Next</a>
                        </form>
                    </div>
                </div>
            </fieldset>
            <fieldset id="personal_information" class="">
                <div class="number d-flex">
                    <li class="number_li">1</li>
                    <li class="number_li">2</li>
                    <li class="number_li" style="color:#5e6061">3</li>
                </div>
                <div class="container mt-5">
                    <div class="kotak-click2">
                        <div class="prev-step"><a href="javascript:void(0)" class="prev">Back</a></div>
                        <div class="save-chat" id="success_data"></div>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
    <section class="kotak-insurance">
        <div class="container">
            <h2 class="insurance-header text-center">Why Kotak Life Insurance?</h2>
            <p class="insurance-content">Kotak Mahindra Life Insurance Company Ltd. is one of the fastest growing insurance companies in India, covering over 46 million lives nationwide. It delivers outstanding value to its customers through high customer empathy and understanding, lifetime of exceptional service and a suite of insurance products.</p><a href="<?php echo base_url()?>why-kotak-life" class="view-more">View More</a>
            <div class="text-center"><img data-src="assets/mobile/images/insurance.png" alt="insurance" class="img-fluid insurance-img lzy_img" width="200px" height="238px"></div>
        </div>
    </section>
    <section class="insurance">
        <div class="pad-ins">
            <div class="text-center">
                <h2 class="insurance-text">Insurance Guide</h2>
            </div>
            <p class="kotak-ins">Kotak Life Insurance helps you understand the various benefits of life insurance for you, wealth creation, protection, retirement and savings. Find out how you can make the most of every plan.</p>
        </div>
        <div class="slick-num position-relative">
            <div class="family-slick bx-sd">
                <div>
                    <div class="card">
                        <div class="">
                            <div class="text-center mb-15">
                                <div class="home-blog hb1"></div>
                            </div>
                            <h2 class="family-text">Protection</h2>
                            <p class="kotak-ins">A secure future for your family is of utmost importance to you. That’s why Kotak Life Insurance offers you a choice of plans for your unique needs.</p><a href="<?php echo base_url()?>insurance-guide/protection" class="links-read">Read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <div class="">
                            <div class="text-center mb-15">
                                <div class="home-blog hb2"></div>
                            </div>
                            <h2 class="family-text">Wealth Creation</h2>
                            <p class="kotak-ins">You work hard with commitment to ensure that you and your loved ones achieve your dreams of living in abundance. Here’s how life insurance can help.</p><a href="<?php echo base_url()?>insurance-guide/wealth-creation" class="links-read">Read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <div class="">
                            <div class="text-center mb-15">
                                <div class="home-blog hb3"></div>
                            </div>
                            <h2 class="family-text">Retirement</h2>
                            <p class="kotak-ins">After a fulfilling life of working hard, all you look forward to is a comfortable retired life. And Kotak Life Insurance is every ready to help you.</p><a href="<?php echo base_url()?>insurance-guide/retirement" class="links-read">Read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <div class="">
                            <div class="text-center mb-15">
                                <div class="home-blog hb4"></div>
                            </div>
                            <h2 class="family-text">About Life Insurance</h2>
                            <p class="kotak-ins">Life insurance has multiple benefits for you, your loved ones and your dreams for future. Choose the plans that complement your needs and for a happy life.</p><a href="<?php echo base_url()?>insurance-guide/about-life-insurance" class="links-read">Read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <div class="">
                            <div class="text-center mb-15">
                                <div class="home-blog hb5"></div>
                            </div>
                            <h2 class="family-text">Savings & Tax</h2>
                            <p class="kotak-ins">Payments towards life insurance are eligible for tax redemption. Ensure that you take the right steps to save up on taxes.</p><a href="<?php echo base_url()?>insurance-guide/savingstax" class="links-read">Read more</a>
                        </div>
                    </div>
                </div>
            </div><input type="text" class="slick-input" id="txtAcrescimo">
            <p class="slick-input-six">/6</p>
        </div>
    </section>
    <section class="how">
        <div class="text-center">
            <div><img data-src="assets/mobile/images/how-img.png" alt="sl" class="img-fluid lzy_img" width="217px" height="228px"></div>
            <h5 class="how-text">How do I</h5>
            <p class="kotak-life">Kotak Life Insurance has simplified the way you choose a policy, apply for a claim and more. Browse through the links below to know more about each.</p>
            <div class="pay">
                <div class="row no-gutters mx-250">
                    <div class="col-md-6 col"><a href="<?php echo base_url()?>how-do-i/pay-my-premium">
                            <div class="how-circle">
                                <div class="how-icon file-icon1"></div>
                                <h6 class="pay-text">Pay<br>My Premium</h6>
                            </div>
                        </a></div>
                    <div class="col-md-6 col"><a rel="nofollow" href="https://customer.kotaklifeinsurance.com/ocm">
                            <div class="how-circle">
                                <div class="how-icon file-icon2"></div>
                                <h6 class="pay-text">File a Claim</h6>
                            </div>
                        </a></div>
                </div>
                <div class="row no-gutters mx-250 mb-25">
                    <div class="col-md-6 col"><a href="<?php echo base_url()?>how-do-i/manage-my-policy">
                            <div class="how-circle">
                                <div class="how-icon file-icon3"></div>
                                <h6 class="pay-text">Manage<br>My Policy</h6>
                            </div>
                        </a></div>
                    <div class="col-md-6 col"><a href="<?php echo base_url()?>how-do-i/locate-kotak-branches">
                            <div class="how-circle">
                                <div class="how-icon file-icon4"></div>
                                <h6 class="pay-text">Locate a Kotak Life Branch</h6>
                            </div>
                        </a></div>
                </div><a href="<?php echo base_url()?>how-do-i" class="view">View All</a>
            </div>
        </div>
    </section>
    <section class="top-0">
     <div class="popular_list">
            <div class="midWrapper">
                <div class="polular-searches">
                    <h6 class="popular-title">popular searches</h6>
                    <div class="popular-search-anc">
                        <ul>
                            <li><a href="<?=base_url()?>term-insurance/critical-illness">Critical illness</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/government-schemes/what-is-sukanya-samriddhi-yojana">Sukanya samriddhi yojana</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/income-tax-deductions-list">Income tax slab</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/what-is-tds-tax-deducted-at-source">Tds</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/about-life-insurance/types-of-insurance-policies">Types of insurance</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/how-to-claim-a-tax-refund">Tds refund</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/what-is-itr-1-form-and-how-to-download-it">Itr 1</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/section-80-d-deduction-of-income-tax-act">80d deduction</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/what-is-tds-tax-deducted-at-source">What is tds</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/protection/term-insurance-vs-life-insurance">Term insurance vs life insurance</a></li>
                            <li><a href="<?=base_url()?>ulip-plans/what-is-ulip-plan">Ulip meaning</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/about-life-insurance/role-of-irda-in-insurance-sector-in-india">Irdai full form</a></li>
                            <li><a href="<?=base_url()?>term-insurance/one-crore-term-insurance">1 crore term insurance</a></li>
                            <li><a href="<?=base_url()?>">Life insurance</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/wealth-creation/how-to-invest-money-in-ulip">Invest in ulip</a></li>
                            <li><a href="<?=base_url()?>ulip-plans">Ulip</a></li>
                            <li><a href="<?=base_url()?>term-insurance/what-is-term-insurance">What is term insurance</a></li>
                            <li><a href="<?=base_url()?>insurance-plans/retirement-plans">Retirement plan</a></li>
                            <!-- <li><a href="<?=base_url()?>insurance-plans/child-plans">Child plans</a></li> -->
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/income-tax-deductions-list">80c deduction list</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/government-schemes/pmjjby-application-status-certificate-download-and-claim-check">Pmjjby certificate download</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/what-is-income-tax-return-itr-how-to-file-income-tax-returns">What is itr</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/section-80-d-deduction-of-income-tax-act">Section 80d of income tax act</a></li>
                            <li><a href="<?=base_url()?>insurance-plans/insurance-plan-riders">Insurance riders</a></li>
                            <li><a href="<?=base_url()?>term-insurance">Term insurance</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/what-is-hra-and-how-hra-exemption-is-calculated">Hra full form</a></li>
                            <li><a href="<?=base_url()?>savings-plan">Savings plans</a></li>
                            <li><a href="<?=base_url()?>ulip-plans/importance-of-portfolio-management">Importance of portfolio</a></li>
                            <li><a href="<?=base_url()?>savings-plan/kotak-guaranteed-savings-plan-online">Guaranteed savings plan</a></li>
                            <li><a href="<?=base_url()?>savings-plan/kotak-assured-savings-plan">Assured savings plan</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/what-is-endowment-plan">Endowment meaning</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction">Section 80C tax benefits</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </section>
    <footer class="new-footer">
       
        <div class="footer-menu">
            <div class="midWrapper">
                <div class="plans roww">
                    <div class="incurance w-footer-20">
                        <h6 class="footer-title"><a href="<?= base_url() ?>insurance-plans">Life Insurance Plans</a></h6>
                        <ul class="plan-list">
                            <li><a href="<?=base_url()?>term-insurance/">Term Insurance Plans</a>
                                <ul class="footer-sub-menu">
                                <li><a href="https://www.kotaklife.com/term-insurance/kotak-gen2gen-protect" target="_blank">Kotak Gen2Gen Protect</a></li>

                                    <li><a href="<?=base_url()?>term-insurance/kotak-e-term" target="_blank">Kotak e-Term</a></li>
                                    <li><a href="<?=base_url()?>term-insurance/kotak-protect-india" target="_blank">Kotak Protect India</a></li>
                                    <li>
                                    <a href="<?=base_url()?>term-insurance/what-is-term-insurance" target="_blank">What is Term Insurance</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/1-crore-term-insurance" target="_blank">1 Crore Term Insurance</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/1-5-crore-term-insurance" target="_blank">1.5 Crore Term Insurance</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/claim-settlement-ratio" target="_blank">Claim Settlement Ratio</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/term-plan-with-return-of-premium" target="_blank">Term Insurance Return of Premium</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/critical-illness" target="_blank">Critical Illness</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/whole-life-insurance" target="_blank">Whole Life Insurance</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/term-insurance-benefits" target="_blank">Benefits of Term Insurance</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/term-insurance-for-housewife" target="_blank">Term insurance for Housewife</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/term-insurance-for-nri" target="_blank">Term Insurance for NRI</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/term-insurance-for-women" target="_blank">Term Insurance for Women</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/term-insurance-for-self-employed" target="_blank">Term Insurance for Self Employed</a>
                                </li>
                                </ul>
                            </li>
                            <li><a href="<?=base_url()?>ulip-plans">ULIP Plan</a>
                                <ul class="footer-sub-menu">
                                    <li><a href="<?=base_url()?>ulip-plans/kotak-e-invest">Kotak e-Invest</a></li>
                                    <li>
                                        <a href="<?=base_url()?>ulip-plans/kotak-tulip"> Kotak T.U.L.I.P</a>
                                    </li>
                                    <li>
                                    <a href="<?= base_url() ?>ulip-plans/what-is-ulip-plan">What is ULIP</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/benefits-of-ulip">Benefits of ULIP</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/ulip-returns-in-10-years">ULIP returns in 10 Years</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/ulip-returns-in-15-years">ULIP returns in 15 Years</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/ulip-returns-in-20-years">ULIP returns in 20 Years</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/ulip-returns-in-25-years">ULIP returns in 25 Years</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/ulip-returns-in-30-years">ULIP returns in 30 Years</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/ulip-returns-in-35-years">ULIP returns in 35 Years</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/ulip-returns-in-40-years">ULIP returns in 40 Years</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/ulip-returns-in-5-years">ULIP returns in 5 Years</a>
                                </li>
                                </ul>
                            </li>
                            <li><a href="<?=base_url()?>guaranteed-wealth-builder/">Guaranteed Wealth Builder Plans</a>
                                <ul class="footer-sub-menu sub-bot-2">
                                    <li><a href="<?=base_url()?>savings-plan/kotak-assured-savings-plan">Kotak Assured Savings Plan</a></li>
                                    <li><a href="<?=base_url()?>savings-plan/kotak-guaranteed-fortune-builder">Kotak Guaranteed Fortune Builder</a></li>
                                </ul>
                            </li>
                            <li> <a href="<?= base_url() ?>investment-plans">Investment Plans</a>
                            <ul class="footer-sub-menu">
                            <li>
                                    <a href="https://www.kotaklife.com/investment-plans/capital-guarantee-solution">Capital Guarantee Solution</a>
                                </li>
                                <li>
                                    <a href="https://www.kotaklife.com/investment-plans/recurring-deposit">Recurring Deposit</a>
                                </li>
                                <li>
                                    <a href="https://www.kotaklife.com/investment-plans/10-year-investment-plan">10 Year Investment PLan</a>
                                </li>
                                <li>
                                    <a href="https://www.kotaklife.com/investment-plans/10-lakh-investment-plan">10 Lakh Investment PLan</a>
                                </li>
                                <li>
                                    <a href="https://www.kotaklife.com/investment-plans/30-lakh-investment-plan">30 Lakh Investment PLan</a>
                                </li>
                                <li>
                                    <a href="https://www.kotaklife.com/investment-plans/50-lakh-investment-plan">50 Lakh Investment PLan</a>
                                </li>
                                <li>
                                    <a href="https://www.kotaklife.com/investment-plans/15-lakh-investment-plan">15 Lakh Investment PLan</a>
                                </li>
                                <li>
                                    <a href="https://www.kotaklife.com/investment-plans/5-lakh-investment-plan">5 Lakh Investment PLan</a>
                                </li>

                            </ul>
                        </li>
                        </ul>
                    </div>

                    <div class="incurance w-footer-20">
                        <ul class="plan-list desk-margin">
                            <li><a href="<?=base_url()?>savings-plan">Savings Plans</a>
                                <ul class="footer-sub-menu mobile-margin-0">
                                    <li><a href="<?=base_url()?>savings-plan/kotak-guaranteed-savings-plan-online">Kotak Guaranteed Savings Plan</a></li>
                                    <li><a href="<?=base_url()?>online-plans/savings-plan/kotak-guaranteed-fortune-builder-online">Kotak Guaranteed Fortune Builder</a></li>
                                    <li>
                                    <a href="<?= base_url() ?>savings-plan/kotak-get-assured-income-now">Kotak Get Assured Income Now</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>savings-plan/what-is-savings-plan">What is Savings Plan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>savings-plan/tips-to-plan-your-savings">Tips to Plan Your Savings</a>
                                </li>
                               
                                </ul>
                            </li>
                        </ul>
                        <ul class="plan-list desk-margin mobile-show">
                            <li><a href="<?=base_url()?>insurance-plans/retirement-plans">Retirement Plans</a>
                                <ul class="footer-sub-menu sub-bot-2">
                                    <li><a href="online-plans/retirement-pension-plans/kotak-lifetime-income-plan">Kotak Lifetime Income Plan</a></li>
                                    <li><a href="insurance-plans/retirement-plans/kotak-assured-pension">Kotak Assured Pension</a></li>
                                    <li><a href="<?=base_url()?>retirement-and-pension-plans/annuity-in-nps">Annuity in NPS</a></li>
                                <li><a href="<?=base_url()?>retirement-and-pension-plans/1-crore-retirement-plan">1 Crore Retirement Plan</a></li>
                                <li><a href="<?=base_url()?>retirement-and-pension-plans/10-year-retirement-plan">10 Year Retirement Plan</a></li>
                                <li><a href="<?=base_url()?>retirement-and-pension-plans/5-year-retirement-plan">5 Year Retirement Plan</a></li>


                                </ul>
                            </li>
                            <li><a href="<?=base_url()?>insurance-guide/health-insurance">Health Insurance Plans</a></li>

                            <!-- <li><a href="<?=base_url()?>insurance-plans/child-plans">Child Plan</a></li> -->
                        </ul>
                    </div>
                    <div class="incurance w-footer-20 desktop-show">
                        <ul class="plan-list desk-margin">
                            <li><a href="<?=base_url()?>insurance-plans/retirement-plans">Retirement Plans</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/health-insurance">Health Insurance Plans</a></li>
                            
                            <!-- <li><a href="<?=base_url()?>insurance-plans/child-plans">Child Plan</a></li> -->
                        </ul>
                    </div>
                    <div class="incurance w-footer-20 no-padding-top">
                        <h6 class="footer-title"><a href="<?= base_url() ?>financial-tools-calculators">CALCULATORS</a></h6>
                        <ul class="plan-list fnt-14">
                            <li><a href="<?=base_url()?>financial-tools-calculators/ulip-calculator">ULIP Calculator</a></li>
                            <li><a href="<?=base_url()?>financial-tools-calculators/compound-interest-calculator">Compound Interest Calculator</a></li>
                            <li><a href="<?=base_url()?>financial-tools-calculators/retirement-calculator">Retirement Planing Calculator</a></li>
                            <li> <a href="<?=base_url()?>financial-tools-calculators/sip-calculator">SIP Calculator </a></li>

                            <li> <a href="<?= base_url() ?>financial-tools-calculators/bmi-calculator">BMI Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/hra-calculator">HRA Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/fd-calculator">FD Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/rd-calculator">RD Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/gratuity-calculator">Gratuity Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/ppf-calculator">PPF Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/dass-21-calculator">DASS 21 Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/term-insurance-calculator">Term insurance Calculator </a></li>

                            <!--li><a href="<?=base_url()?>financial-tools-calculators/income-tax-calculator">Income Tax Calculator</a></li-->
                        </ul>
                    </div>
                    <div class="incurance w-footer-20 no-padding-top">
                        <h6 class="footer-title">Buy Online</h6>
                        <ul class="plan-list fnt-14">
                            <li><a rel="nofollow" href="https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=footer" target="_blank">Buy Term Insurance Online</a></li>
                            <li> <a   href=" https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=footer" target="_blank">Buy Kotak Gen2Gen Protect</a> </li>
                            <li><a rel="nofollow" href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=footer" target="_blank">Invest in ULIP Plan</a></li>
                            <li><a rel="nofollow" href="https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=kgsp_organic&utm_medium=website&utm_campaign=footer" target="_blank">Invest in Guaranteed Savings Plan</a></li>
                            <li><a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=footer" target="_blank">Invest in Assured Savings Plan</a></li>
                            <li><a rel="nofollow" href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=footer">Invest in Lifetime Income Plan</a></li>
                            <li><a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=footer">Invest in Kotak Guaranteed Fortune Builder</a></li>
                            <li><a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=footer">Buy Kotak Assured Pension</a></li>
                            <li><a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=footer">Buy Kotak T.U.L.I.P</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-menu footer-menu-list">
            <div class="midWrapper">
                <div class="plans roww">
                    <div class="incurance w-footer-20">
                        <h6 class="footer-title"><a href="<?= base_url() ?>insurance-guide">Insurance Guide</a></h6>
                        <ul class="plan-list">
                            <li><a href="<?=base_url()?>insurance-guide/about-life-insurance">About Life Insurance</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/protection">Term Insurance Guide</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/wealth-creation">Wealth Creation</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/retirement">Retirement</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/savingstax">Savings & Tax</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/government-schemes">Government Schemes</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/health-insurance">Health Insurance</a></li>
                            <li><a href="<?=base_url()?>insurance-guide/glossary">Glossary</a></li>
                        </ul>
                    </div>
                    <div class="incurance w-footer-20">
                        <h6 class="footer-title">HOW DO I?</h6>
                        <ul class="plan-list">
                            <li><a href="<?=base_url()?>how-do-i/pay-my-premium">Pay My Premium</a></li>
                            <li><a rel="nofollow" href="https://customer.kotaklifeinsurance.com/ocm">File a Claim</a></li>
                            <li><a href="<?=base_url()?>how-do-i/manage-my-policy">Manage My Policy</a></li>
                            <li><a href="<?=base_url()?>how-do-i/download-application-form">Download Application Form</a></li>
                            <li><a href="<?=base_url()?>how-do-i/get-policy-brochure">Get Product Brochure</a></li>
                            <li><a href="<?=base_url()?>how-do-i/check-policy-document-specimen">Check Policy Document Specimen</a></li>
                            <li><a href="<?=base_url()?>how-do-i/fund-update">Fund Updatee</a></li>
                            <li><a href="<?=base_url()?>how-do-i/locate-kotak-branches">Locate a Kotak Life Branch</a></li>
                            <li><a href="<?=base_url()?>how-do-i/understand-stages-of-application">Track My Proposal Status</a></li>
                        </ul>
                    </div>
                    <div class="incurance w-footer-20">
                        <h6 class="footer-title">Group Plans</h6>
                        <ul class="plan-list">
                            <li><a href="<?=base_url()?>group-plans/group-gratuity-leave-encashment">Group Gratuity/Leave Encashment</a></li>
                            <li><a href="<?=base_url()?>group-plans/group-superannuation">Group Superannuation</a></li>
                            <li><a href="<?=base_url()?>group-plans/group-term">Group Term</a></li>
                            <li><a href="<?=base_url()?>group-plans/group-credit">Group Credit</a></li>
                            <li><a href="<?=base_url()?>group-plans">veiw all plans</a></li>
                        </ul>
                    </div>
                    <div class="incurance w-footer-20">
                        <h6 class="footer-title">About Us</h6>
                        <ul class="plan-list">
                            <li><a href="<?=base_url()?>why-kotak-life/corporate-governance">Corporate Governance</a></li>
                            <li><a href="<?=base_url()?>why-kotak-life/csr">CSR</a></li>
                            <li><a href="<?=base_url()?>why-kotak-life/media-center">Media Center</a></li>
                            <li><a href="<?=base_url()?>why-kotak-life/career">Career</a></li>
                            <li><a href="<?=base_url()?>why-kotak-life/contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-content">
            <div class="midWrapper">
                <div class="social-list">
                    <div class="d-flex dsocial">
                        <div class="social-space">
                            <p class="w-auto so-cont">Connect with us</p>
                            <ul class="d-flex social-data">
                                <li><a rel="nofollow" href="https://www.facebook.com/kotaklife/?utm_source=website&utm_medium=FB_icon&utm_campaign=HR_session" class="facebbok" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a rel="nofollow" href="https://twitter.com/Kotak_Life?utm_source=website&utm_medium=TW_icon&utm_campaign=HR_session" class="twitter" target="_blank">
                                        <svg style="padding: 6px 6px; fill:#fff;" class="new-twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1">
                                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                        </svg>
                                    </a></li>
                                <li><a rel="nofollow" href="https://www.linkedin.com/company/kotak_life/" class="linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a rel="nofollow" href="https://www.youtube.com/kotaklifeinsuranceofficial" class="youtube" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a rel="nofollow" href="https://www.instagram.com/kotak.lifeinsurance/?utm_source=website&utm_medium=IG_icon&utm_campaign=HR_session" class="instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="glogo">
                            <div class="glogo-group">
                                <div class="add-download">
                                    <p>Download the HappyYou by Kotak Mobile App</p><a rel="nofollow" class="app-store" href="https://apps.apple.com/in/app/happyyou/id6448199779?utm_source=KLI&amp;utm_medium=KLI+website&amp;utm_campaign=HY+appstore&amp;utm_id=Website-+HY+App+store" target="_blanck"></a><a rel="nofollow" class="google-store" href="https://play.google.com/store/apps/details?id=com.wyh.happyyou&amp;referrer=utm_source%3DKLI%26utm_medium%3DKLI%2BWebsite%26utm_campaign%3DHY%2BPlaystore" target="_blanck"></a>
                                </div>
                                <div class="g20"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-disclaimer">
            <div class="midWrapper">
                <div class="footerBox footer-policy-box">
                    <ul class="footerLinksUL">
                        <li class="footerHead">Policy Governance</li>
                        <li><a onclick='dataLayer.push({event:"event footer 1",category:"footer",action:"footer a",label:"Service TATs"})' class="secondLI" href="<?=base_url()?>grievance-redressal/service-tat">Service TATs</a></li>
                        <li><a onclick='dataLayer.push({event:"event footer 1",category:"footer",action:"footer a",label:"irdai-handbook"})' class="" href="<?=base_url()?>grievance-redressal/irdai-handbook">IRDAI Handbook</a></li>
                        <li><a onclick='dataLayer.push({event:"event footer 1",category:"footer",action:"footer a",label:"customer-bulletin"})' class="" href="<?=base_url()?>grievance-redressal/customer-bulletin">Customer Bulletin</a></li>
                        <li><a onclick='dataLayer.push({event:"event footer 1",category:"footer",action:"footer a",label:"fatca"})' class="" href="<?=base_url()?>grievance-redressal/fatca">FATCA</a></li>
                        <li><a onclick='dataLayer.push({event:"event footer 1",category:"footer",action:"footer a",label:"aml-guidelines"})' class="" href="<?=base_url()?>grievance-redressal/aml-guidelines">AML Guidelines</a></li>
                    </ul>
                    <ul class="footerLinksUL footerLinksUL02">
                        <li><a onclick='dataLayer.push({event:"event footer 1",category:"footer",action:"footer a",label:"Sitemap"})' href="<?=base_url()?>sitemap">Sitemap</a></li>
                        <li><a onclick='dataLayer.push({event:"event footer 1",category:"footer",action:"footer a",label:"Website Feedback"})' href="<?=base_url()?>website-feedback">Website Feedback</a></li>
                    </ul>
                </div>
                <div class="btmDesc new-beware">
                <h6 class="footer-title">BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS / FRADULENT OFFERS</h6>

<p> IRDAI or its officials do not involve in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.
</p>
                    <p>Beware of spurious emails with fictitious/fraudulent offers. Persons receiving such emails mentioning Kotak Life are requested to highlight the same immediately to<a href="mailto:kli.riskcontrol@kotak.com" class="f-mail">kli.riskcontrol@kotak.com</a>with "Spurious Email" in the subject line.</p>
                </div>
                <div class="btmDesc new-trades">
                    <p>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
                    <p>Kotak Mahindra Life Insurance Company Ltd. Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai - 400 051. Website: www.kotaklife.com I Email:kli.in/WECARE I Toll Free No.: 1800 209 8800. Registered with Insurance Regulatory & Development Authority (IRDAI) as Life Insurance Company. Regn. No. 107. CIN : U66030MH2000PLC128503</p>
                </div>
            </div>
        </div>
        <div class="new-desclaimer">
            <div class="midWrapper">
                <ul class="btmlinks">
                    <li class="<?php check_menu_active(2, 'corporate-governance') ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Public Disclosure"})' href="<?php echo base_url(WKL_MODULE_LINK . '/corporate-governance') ?>">Public Disclosure</a></li>
                    <li><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Unclaimed Amount Due to Policyholders"})' rel="nofollow" href="https://customer.kotaklifeinsurance.com/CP/customerunclaimamount.aspx" target="_blank">Unclaimed Amount Due to Policyholders</a></li>
                    <li class="<?php check_menu_active(1, 'disclaimer', 1) ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Disclaimer"})' rel="nofollow" href="<?php echo base_url(); ?>disclaimer">Disclaimer</a></li>
                    <li class="<?php check_menu_active(1, 'privacy-policy', 1) ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Privacy Policy"})' href="<?php echo base_url(); ?>privacy-policy">Privacy Policy</a></li>
                    <li><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"IRDAI Customer Education"})' href="https://www.policyholder.gov.in/" rel="nofollow" target="_blank">IRDAI Customer Education</a></li>
                    <li><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"IRDAI"})' href="https://www.irdai.gov.in/" rel="nofollow" target="_blank">IRDAI</a></li>
                    <li><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Insurance Ombudsman"})' href="https://www.irdai.gov.in/ADMINCMS/cms/NormalData_Layout.aspx?page=PageNo234&mid=7.2" rel="nofollow" target="_blank">Insurance Ombudsman</a></li>
                    <li><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Kotak Mahindra Bank"})' href="http://www.kotak.com/" rel="nofollow" target="_blank">Kotak Mahindra Bank</a></li>
                    <li><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Life Insurance Council"})' href="https://www.lifeinscouncil.org/code/Default.aspx" rel="nofollow" target="_blank">Life Insurance Council</a></li>
                    <li class="<?php check_menu_active(1, 'corporate-partners', 1) ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Corporate Partners"})' href="<?php echo base_url(); ?>corporate-partners">Corporate Partners</a></li>
                    <li><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Corporate Partners Login"})' href="https://cp.mykotaklife.com/Login/LoginCPR.aspx" rel="nofollow" target="_blank">Corporate Partners Login</a></li>
                    <li class="<?php check_menu_active(1, 'do-not-call-registry', 1) ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Do Not Call Registry"})' href="<?php echo base_url(); ?>do-not-call-registry">Do Not Call Registry</a></li>
                    <li class="<?php check_menu_active(1, 'agents-terminated-due-malpractices', 1) ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Agents Terminated"})' href="<?php echo base_url(); ?>agents-terminated-due-malpractices">Agents Terminated</a></li>
                    <li><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Grievance Redressal System"})' href="https://customer.kotaklifeinsurance.com/KGMSUI/Grievance/Information.aspx" rel="nofollow" target="_blank">Grievance Redressal System</a></li>
                    <li class="<?php check_menu_active(1, 'Bima Bharosa', 1) ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Bima Bharosa"})' href="https://bimabharosa.irdai.gov.in" rel="nofollow">Bima Bharosa</a></li>
                    <li class="<?php check_menu_active(1, 'key-persons', 1) ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Key Persons"})' href="<?php echo base_url(); ?>key-persons">Key Persons</a></li>
                    <li class="<?php check_menu_active(1, 'key-persons', 1) ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"List of our GST registration numbers"})' href="<?php echo base_url(); ?>assets/images/uploads/why_kotak/list-of-our-gstin-registration-numbers.pdf" target="_blank">List of our GST registration numbers</a></li>
                    <li class="<?php check_menu_active(1, 'regional-forms', 1) ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Policy Servicing Forms in Regional Languages"})' href="<?php echo base_url(); ?>regional-forms">Policy Servicing Forms in Regional Languages</a></li>
                    <li class="<?php check_menu_active(1, 'happyyou-privacy-policy', 1) ?>"><a onclick='dataLayer.push({event:"event footer 2",category:"footer",action:"footer b",label:"Happyyou Privacy Policy"})' href="<?php echo base_url(); ?>happyyou-privacy-policy">HappyYou by Kotak Privacy policy</a></li>
                    <li class="<?php check_menu_active(1, 'Account-Aggregator', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Account Aggregator'});" href="<?php echo base_url(); ?>account-aggregator">Account Aggregator</a></li>

                </ul>
            </div>
        </div>
        <div class="new-copyright">
            <div class="midWrapper">
                <p class="copyright">© <?php echo date("Y"); ?> Kotak Mahindra Group. All rights reserved.</p>
            </div>
        </div> <?php

  $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $basename = pathinfo($url_path, PATHINFO_BASENAME);

  $pageLink_url = "";
  $page_temp = array();
  $page_temp = explode("/", $url_path);
  if($page_temp[1]!='')
  $pageLink_url = $page_temp[1];

  //if($basename=="about-life-insurance")
  if ($pageLink_url == "insurance-guide") { ?> <div style="width:50%;padding-top:100px">
            <div style="max-width:7000px;margin:0 auto;padding:0 40px;text-align:left">
                <div id="cancel" class="pauseee--text custom-icon play-left letschat-btn" style="display:none"><i class="fa fa-pause-circle" aria-hidden="true"></i></div>
                <div id="start" class="custom-icon letschat-btn play-left"><i class="fa fa-play-circle" aria-hidden="true"></i></div><img alt="" src="https://haptikappimg.haptikapi.com/uploads/e7e7a63b44e3412e7a2932c6f4428a9f.png" onclick="openChat()" class="custom-icon letschat-btn">
            </div>
        </div> <?php } ?> <div style="">
            <div style="max-width:7000px;margin:0 auto;padding:0 40px;text-align:left"><img src="assets/images/chatexit.gif" onclick="openChat()" class="custom-icon mobilechat w-130"></div>
        </div>
    </footer>
    <script src="assets/mobile/js/jquery-3.6.0.min.js"></script>
    <script src="assets/mobile/js/bootstrap.bundle.min.js"></script>
    <script src="assets/mobile/js/bootstrap-select.min.js"></script>
    <script src="assets/mobile/js/slick.min.js"></script>
    <script src="assets/mobile/js/custom.js"></script>
    <script src="assets/mobile/js/need_base_cal.js"></script>
    <script>
        //lazt load
        document.addEventListener("DOMContentLoaded", (function() {
            const e = new IntersectionObserver(((e, t) => {
                e.forEach((e => {
                    if (e.isIntersecting) {
                        const t = e.target;
                        t.src = t.dataset.src
                    }
                }))
            }));
            document.querySelectorAll("img.lzy_img").forEach((t => {
                e.observe(t)
            }))
        }));
        //end
        $(document).ready((function() {
            $(".cross-red").click((function() {
                $(".buy-life").addClass("dd-none")
            }))
        }));
        //

        function getSegment() {
            var needSegment1 = $("#needSegment1").val();
            // var needSegment2 = $("#needSegment2").val();
            // $('#selected_val_two').val(needSegment1);alert(needSegment1);
            $('#selected_val_two').val(needSegment1);
            // $('#selected_val_three').val(needSegment2);

            if (needSegment1 == "Assured Pension") {
                $target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "Term Insurance Plan") {
                $target_url = "https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "ULIP Plan") {
                $target_url = "https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
                window.open($target_url, '_blank');
            }

            if (needSegment1 == "Assured Savings Plan") {
                $target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
                window.open($target_url, '_blank');
            }


            if (needSegment1 == "Guaranteed Savings Plan") {
                $target_url = "https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "Health Insurance Plan") {
                $target_url = "https://www.kotaklife.com/buy-health-insurance-online/#/landing?utm_source=Health_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "Retirement Plan") {
                $target_url = "https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "Kotak Guaranteed Fortune Builder") {
                $target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=top_menu";
                window.open($target_url, '_blank');
            }

            if (needSegment1 == "About Term Insurance Plan") {
                $target_url = "https://www.kotaklife.com/term-insurance";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "About ULIP Plans") {
                $target_url = "https://www.kotaklife.com/ulip-plans";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "About Savings Plans") {
                $target_url = "https://www.kotaklife.com/savings-plan";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "About Health Insurance") {
                $target_url = "https://www.kotaklife.com/insurance-plans/health-plans";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "About Retirement Plans") {
                $target_url = "https://www.kotaklife.com/insurance-plans/retirement-plans";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "Kotak Lifetime Income Plan") {
                $target_url = "https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
                window.open($target_url, '_blank');
            }
            if (needSegment1 == "Kotak Gen2Gen Protect") {
                $target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
                window.open($target_url, '_blank');
            }
        }

        function close_popup() {
            $(".steps.step01").addClass("selected")
        }

        function btn_online() {
            $(".buy-life").toggleClass("dd-none")
        }
        $("#nextResBtn").click((function() {
            var a, s = $("#custName").val(),
                e = $("#ageGroup").val(),
                n = $("#custNumber").val(),
                t = $("#custCity").val();
            s = $("#needSegment").val(), e = $("#custName").val();
            n = $("#ageGroup").val(), t = $("#custNumber").val(), a = $("#custCity").val(), pc = $("#pincode").val(), datastring = "needSegment=" + s + "&ageGroup=" + n + "&name=" + e + "&number=" + t + "&custcity=" + a + "&pincode=" + pc, $.ajax({
                url: "<?=base_url()?>need-base-calculator/result",
                type: "POST",
                data: datastring,
                dataType: "JSON",
                success: function(a) {
                    if ("Long Term Savings" == $("#needSegment").val()) {
                        var s = '<div><div> <img alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src="<?=base_url()?>assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div><div class="detail-kotak"><h3 class="kotak-assur">Kotak Assured Savings Plan</h3><p class="text-kotak">Kotak Assured Savings Plan is an affordable protection plan that enables you to accumulate wealth and strengthens your finances for the future.</p><a href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="links">Know more</a></div></div><div class="mt-40"><div> <img  alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src="<?=base_url()?>assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div><div class="detail-kotak"><h3 class="kotak-assur">Kotak Classic Endowment Plan</h3><p class="text-kotak">Kotak Classic Endowment Plan is a long term protection cum savings plan that offers protection benefit while earning bonuses during the policy term.</p><a href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-classic-endowment-plan" class="links">Know more</a></div></div><div class="mt-40"><div> <img alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src="<?=base_url()?>assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div><div class="detail-kotak"><h3 class="kotak-assur">Kotak Premier Endowment Plan</h3><p class="text-kotak">Kotak Premier Endowment Plan offers Guaranteed Additions in the first 5 policy years and also works to provide you a corpus through continued bonuses.</p><a href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-premier-endowment-plan" class="links">Know more</a></div></div><div class="mt-40 mb-20"><div> <img alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src="<?=base_url()?>assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div><div class="detail-kotak"><h3 class="kotak-assur">Kotak Premier Moneyback Plan</h3><p class="text-kotak">Kotak Premier Moneyback Plan is a limited pay plan that provides lump sum payouts at regular intervals to meet your interim financial requirements and let you offer the best to your family.</p><a href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-premier-moneyback-plan" class="links">Know more</a></div></div>';
                        $("#success_data").append(s)
                    } else {
                        s = "<div><div class='detail-kotak'>Thank you for your details. We do not have any plans matching your selection. Kindly change your selection and again or <a href=base_url.'/insurance-plans' style='color:red' target=_blank>Click here</a> to browse through our plans.</div></div>";
                        $("#success_data").append(s)
                    }
                }
            })
        })), $(document).ready((function() {
            $(".calc-click").click((function() {
                $(".rem-buy-cal").addClass("dd-block")
            }))
        })), $(document).ready((function() {
            $(".dis-red").click((function() {
                $(".rem-buy-cal").removeClass("dd-block"), $(".rem-buy-cal").addClass("dis-none")
            }))
        })), $(document).ready((function() {
            $(".cross-red").click((function() {
                $(".buy-life").addClass("dd-none")
            }))
        })), $(document).ready((function() {
            $(".close_menu").click((function() {
                $(".navbar-collapse").removeClass("show")
            }))
        })), $(document).ready((function() {
            let a = "<?php echo base_url()?>";
            $("#searchResBtn").click((function() {
                var s = $("#searchTxt").val();
                if ("Search here" == s) return !1;
                window.location.href = a + "search?q=" + s
            })), $("#searchTxt").keyup((function(a) {
                13 == a.keyCode && $("#searchResBtn").click()
            })), $("#searchResBtn404").length >= 1 && ($("#searchResBtn404").click((function() {
                var s = $("#searchTxt404").val();
                if ("Search here" == s) return !1;
                gaSearchTermTracking("event search", "search", "404 page", s.toLowerCase()), window.location.href = a + "search?q=" + s
            })), $("#searchTxt404").keyup((function(a) {
                13 == a.keyCode && $("#searchResBtn404").click()
            })))
        }));
        /*Search Result End*/

    </script>
    <script type="text/javascript" charset="UTF-8" src="https://toolassets.haptikapi.com/platform/javascript-xdk/production/loader.js"></script>
    <script>
        function clearOldRef() {
            for (var t = [], e = 0; e < localStorage.length; e++) - 1 == localStorage.key(e).indexOf("SAVED_TASKS") && t.push(localStorage.key(e));
            for (e = 0; e < t.length; e++) localStorage.removeItem(t[e]);
            var o = document.cookie.split(";");
            for (e = 0; e < o.length; e++) {
                var a = o[e],
                    c = a.indexOf("="),
                    r = c > -1 ? a.substr(0, c) : a;
                document.cookie = r + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT"
            }
        }
        clearOldRef();
        var haptikInitSettings = {
            "primary-color": "#da251c",
            "secondary-color": "#f4f4f4",
            "widget-positioning": "bottom-right",
            "font-sizes": {
                primary: 14,
                secondary: 18
            },
            typography: "Lato",
            "header-text": {
                text: "Kaya",
                "status-text": !0
            },
            "composer-placeholder": "Type your message...",
            "header-icon": "https://haptikappimg.haptikapi.com/uploads/c438367db350eb514589257c20384663.png?w=1991&h=1962",
            "business-id": 978,
            "client-id": "763005ee8f30a91f3ab9ab35d15411315c256e46",
            "base-url": "https://kli.haptikapi.com",
            "session-timeout": 36e7,
            "custom-button": !0,
            "ignore-storage": !0,
            "chat-bubble-text-desktop": "I'm Online",
            "chat-bubble-text-mobile": "_NONE_"
        };

        function openChat(t) {
            HaptikSDK.expandWidget();
            let e = $(t).attr("data-tag");
            lmSMTObj.track("chatBotClick", {
                products: [{
                    name: e
                }]
            }, (function() {}))
        }

        function productClick(t) {
            let e = $(t).attr("data-tag");
            lmSMTObj.track("productClick", {
                products: [{
                    name: e
                }]
            }, (function() {}))
        }
        $(".close_menu").click((function() {
            $(".navbar-collapse").removeClass("show")
        }));
        setInterval((function() {
            $(".blur").remove(), $("#myHomeBanner").show();
        }), 6000);

    </script>
</body>

</html>
