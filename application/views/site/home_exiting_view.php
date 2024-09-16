<style>
    .d--flex {
        display: flex
    }

    .splash-close img {
        height: 20px;
        opacity: .2;
        cursor: pointer;
        transition: .6s
    }

    .splash-close img:hover {
        opacity: unset;
        transition: .6s
    }

    .splash-close {
        width: 30px;
        margin: 0 0 0 auto
    }

    .splash p {
        margin: 0
    }

    .splash-content {
        width: 65%;
        font-size: 18px;
        margin: 0 auto;
        background-color: #fff;
        padding: 16px 18px;
        border-radius: 11px;
        margin-top: 201px
    }

    .overlay-black {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, .2);
        z-index: -1
    }

    #splash {
        position: fixed;
        top: 0;
        z-index: 10;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, .5)
    }
   

    #splash a {
        color: red
    }

    @media screen and (max-width:768px) {
        .splash {
            display: none
        }

        .splash {
            display: block
        }

        .splash-content {
            width: 85%;
            font-size: 15px;
            margin: 0 auto;
            background-color: #fff;
            padding: 16px 18px;
            border-radius: 11px;
            margin-top: 30px
        }
    }

    @media screen and (min-width:768px) {
        .splash {
            display: block
        }

        .review_btn {
            margin-top: 15rem !important
        }
    }

    .needCalculatorWrap .step01 .selectbg {
        width: 310px;
        float: initial;
        margin: 15px 0 0 15px
    }

    .budet-2023 h2 {
        color: #000 !important
    }

    .budet-2023 {
        width: 80%;
        margin: 14rem 0 0 9rem
    }

    .budget-banner {
        width: 100% !important
    }

    .budet-content {
        padding-left: 25rem !important
    }

    .budet-content h2 {
        color: #fff !important
    }

    ul.bannerUL li .bannerCont {
        width: 45% !important
    }

    .btn-mobile-view:hover {
        border: 1px solid #da251c !important
    }

    .tax-btn {
        border: 1px solid #da251c !important;
        background: 0 0 !important;
        color: #da251c !important
    }

    .tax-btn:hover {
        background: #da251c !important;
        color: #fff !important
    }

    .tax-h2 {
        color: #08315f !important;
        font-size: 26px !important;
        line-height: 35px !important;
        font-weight: 600 !important;
        margin-top: 8rem !important
    }

    .space-bot {
        font-size: 12px !important
    }

    .life_join_us .rhsBoxDetails {
        background: 0 0 !important
    }

    .junebanner .kgfc-h2 {
        font-size: 45px;
        font-weight: 600;
        line-height: 50px;
        margin-bottom: 0;
        font-family: Lato-Bold;
        margin-top: 20px;
    }

    @media screen and (max-width:1367px) {
        .junebanner .kgfc-h2 {
            font-size: 36px;
            line-height: 36px
        }

        .kgbf-bans .kgfc-h2,
        .kgbf-bans .lifecover-h2 {
            font-size: 34px !important;
            width: 70%
        }
    }

    .f-cover a {
        display: inline-block;
        background: none !important;
    }
    .yourweel{    padding-top: 33px !important;}
    @media screen and (max-width:480px) {
        /* .happyyou-groups img{position: relative;} */
    .mobile-view .position_text{
   
    color: #3bbfc4 !important;
    text-align: left;
    font-size: 23px;
    font-weight: 600;
    line-height: 30px;
    margin-bottom: 0.5rem;
    padding: 0px 15px;
    letter-spacing: 0.3px;
 
    max-width: 250px;}
  
    .mobile-view .iso-app {
  
    background-size: 424px !important;
    background-position: -310px -414px !important;
    background-color:inherit !important;
}
.mobile-view .goo-app {
   
    background-size: 364px !important;
    background-position:-264px -200px !important;
   margin-left: -24px;
    background-color:inherit !important;
    width: 100px;
}
.mobile-view .happyou-content .happy-app-download {
    justify-content: center; margin-bottom: 7rem; }
   .happyou-excit{position: absolute; top:80px;}
        .happy-app-download{padding-top: 0;}
}
   


</style>
<section class="home">
    <article class="banner">
        <ul class="bannerUL exiting-banner new_exit" id="homeBanner">

            <!--
        <li>
                <div class="desktop-view">
                    <div class="vidDiv get24-banner"><img src="<?=base_url()?>assets/images/banner/DesktopBanners/get-24-7.webp" alt="Eye Foundation" class="posterImg"></div>
                     <div class="slideBox overlay-none junebanner kgbf-bans get24">
                        <div class="midWrapper">
                            <div class="bannerCont kotack-protect">
                                <div class="vCenterWrap top-text">
                                    <h2 class="kgfc-h2 text-blue"><span  class="pera-red">Get 24/7 support</span> for all your policy related  <span class="pera-red"> queries with KAYA</span></h2>
                                   
                                    <div class="get-infinty"><img src="<?=base_url()?>assets/images/banner/infinity.webp" alt="Eye Foundation"></div>
                                    <div class="k-tulip-bg get-let"><p>Click <span>"Let's chat"</span> to begin</p></div>
                                   <div class="nfo-list"><a data-action="KayaBannerChat" href="javascript:void(0)" class="nfo-btn"  data-category="banner|existing customers" data-event="event banner" onclick="openChat()">Let's Chat</a></div>  
                                </div>
                                  
                           
                            </div>
                            <p class="fnt-14 space-bot">Ref no. - KLI/23-24/E-WEB/1899</p>
                        </div>
                    </div>
                </div>
                <div class="mobile-view">
                    <div class="home-header sec-slider get24 get-premiun">
                        <div>
                          <div class="slideBox kgfb-mobile-slider">
                                <div class="content-absolute">
                                    <h3 class="text-blue"><span class="pera-red">Get 24/7 support</span> <span>for all your policy related </span><span class="pera-red">queries with KAYA</span> </h3>
                                </div>
                            </div>
                             <div class="get-infinty"><img src="<?=base_url()?>assets/images/banner/infinity.webp" alt="Eye Foundation"></div>
                              <div class="k-tulip-bg get-let"><p>Click <span>"Let's chat"</span> to begin</p></div>
                               <div class="nfo-list"><a data-action="KayaBannerChat" href="javascript:void(0)" class="nfo-btn"  data-category="banner|existing customers" data-event="event banner" onclick="openChat()">Let's Chat</a></div>
                            <div class="mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/get-24-mobile.webp" class="img-fluid lazy"></div>
                           
                        </div>
                    </div>
                </div>
            </li>
             <li>
                <div class="desktop-view get24-banner">
                    <div class="vidDiv get24-banner"><img src="<?=base_url()?>assets/images/banner/DesktopBanners/pay-renewal.webp" alt="Eye Foundation" class="posterImg"></div>
                     <div class="slideBox overlay-none junebanner kgbf-bans get24 get-premiun">
                        <div class="midWrapper">
                            <div class="bannerCont kotack-protect">
                                <div class="vCenterWrap top-text">
                                    <h2 class="kgfc-h2 text-blue"><span  class="pera-red">Pay your renewal premium</span> <br> online from anywhere with  <span class="pera-red"> just a few clicks!</span></h2>
                                   
                                    <div class="get-infinty pay-infinty"><img src="<?=base_url()?>assets/images/banner/infinity.webp" alt="Eye Foundation"></div>
                                    <div class="get-stay">
                                        <p>Stay <span>Invested</span> <img src="<?=base_url()?>assets/images/banner/left-line.webp" alt="Stay Invested"></p>
                                        <p><img src="<?=base_url()?>assets/images/banner/right-line.webp" alt="Stay Protected">Stay <span> Protected</span> </p>
                                    </div>
                                   <div class="nfo-list"><a href="https://care.kotaklifeinsurance.com/prelogin#" class="nfo-btn" target="_blank">Pay Premium</a></div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="mobile-view get24-banner">
                    <div class="home-header sec-slider get24 get-premiun renival-pay">
                        <div>
                            <div class="slideBox kgfb-mobile-slider">
                                <div class="content-absolute">
                                    <h3 class="text-blue"><span  class="pera-red">Pay your renewal premium</span> <span>online from anywhere with</span>  <span class="pera-red"> just a few clicks!</span></h3>
                                </div>
                            </div>
                            <div class="get-infinty"><img src="<?=base_url()?>assets/images/banner/infinity.webp" alt="Eye Foundation"></div>
                              <div class="get-stay">
                                        <p>Stay <span>Invested</span> <img src="<?=base_url()?>assets/images/banner/left-line.webp" alt="Stay Invested"></p>
                                        <p><img src="<?=base_url()?>assets/images/banner/right-line.webp" alt="Stay Protected">Stay <span> Protected</span> </p>
                                    </div>
                                    <div class="nfo-list"><a href="https://care.kotaklifeinsurance.com/prelogin#" class="nfo-btn" target="_blank">Pay Premium</a></div>
                        <div class="mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/payprem-mobile.webp" class="img-fluid lazy"></div>
                        </div>
                    </div>
                </div>
            </li>
-->








            
            <li>
                <div class="desktop-view">
                    <div class="vidDiv get24-banner"><img src="<?=base_url()?>assets/images/banner/DesktopBanners/get-24-7.webp" alt="Eye Foundation" class="posterImg"></div>
                    <div class="slideBox overlay-none junebanner kgbf-bans get24">
                        <div class="midWrapper">
                            <div class="bannerCont kotack-protect">
                                <div class="vCenterWrap top-text">
                                    <h2 class="kgfc-h2 text-blue"><span class="pera-red">Get 24/7 support </span>for all your policy related <span class="pera-red"> queries with KAYA </span></h2>
                                    <div class="get-infinty"><img src="<?=base_url()?>assets/images/banner/infinity.webp" alt="Eye Foundation"></div>
                                    <div class="k-tulip-bg get-let">
                                        <p>Click <span>"Let's chat"</span> to begin</p>
                                    </div>
                                    <div class="nfo-list"><a data-action="KayaBannerChat" href="javascript:void(0)" class="nfo-btn" data-category="banner|existing customers" data-event="event banner" onclick="openChat()">Let's Chat</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-view">
                    <div class="home-header sec-slider get24 get-premiun">
                        <div>
                            <div class="slideBox kgfb-mobile-slider">
                                <div class="content-absolute">
                                    <h3 class="text-blue"><span class="pera-red">Get 24/7 support </span><span>for all your policy related </span><span class="pera-red">queries with KAYA </span></h3>
                                </div>
                            </div>
                            <div class="get-infinty"><img src="<?=base_url()?>assets/images/banner/infinity.webp" alt="Eye Foundation"></div>
                            <div class="k-tulip-bg get-let">
                                <p>Click <span>"Let's chat" </span>to begin</p>
                            </div>
                            <div class="nfo-list"><a data-action="KayaBannerChat" href="javascript:void(0)" class="nfo-btn" data-category="banner|existing customers" data-event="event banner" onclick="openChat()">Let's Chat</a></div>
                            <div class="mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/get-24-mobile.webp" class="img-fluid lazy"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="desktop-view get24-banner">
                    <div class="vidDiv get24-banner"><img src="<?=base_url()?>assets/images/banner/DesktopBanners/pay-renewal.webp" alt="Eye Foundation" class="posterImg"></div>
                    <div class="slideBox overlay-none junebanner kgbf-bans get24 get-premiun">
                        <div class="midWrapper">
                            <div class="bannerCont kotack-protect">
                                <div class="vCenterWrap top-text">
                                    <h2 class="kgfc-h2 text-blue"><span class="pera-red">Pay your renewal premium </span><br>online from anywhere with <span class="pera-red"> just a few clicks! </span></h2>
                                    <div class="get-infinty pay-infinty"><img src="<?=base_url()?>assets/images/banner/infinity.webp" alt="Eye Foundation"></div>
                                    <div class="get-stay">
                                        <p>Stay <span>Invested </span><img src="<?=base_url()?>assets/images/banner/left-line.webp" alt="Stay Invested"></p>
                                        <p><img src="<?=base_url()?>assets/images/banner/right-line.webp" alt="Stay Protected">Stay <span>Protected </span></p>
                                    </div>
                                    <div class="nfo-list"><a href="https://care.kotaklifeinsurance.com/prelogin#" class="nfo-btn" target="_blank">Pay Premium</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-view get24-banner">
                    <div class="home-header sec-slider get24 get-premiun renival-pay">
                        <div>
                            <div class="slideBox kgfb-mobile-slider">
                                <div class="content-absolute">
                                    <h3 class="text-blue"><span class="pera-red">Pay your renewal premium </span><span>online from anywhere with </span><span class="pera-red">just a few clicks! </span></h3>
                                </div>
                            </div>
                            <div class="get-infinty"><img src="<?=base_url()?>assets/images/banner/infinity.webp" alt="Eye Foundation"></div>
                            <div class="get-stay">
                                <p>Stay <span>Invested </span><img src="<?=base_url()?>assets/images/banner/left-line.webp" alt="Stay Invested"></p>
                                <p><img src="<?=base_url()?>assets/images/banner/right-line.webp" alt="Stay Protected">Stay <span>Protected </span></p>
                            </div>
                            <div class="nfo-list"><a href="https://care.kotaklifeinsurance.com/prelogin#" class="nfo-btn" target="_blank">Pay Premium</a></div>
                            <div class="mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/payprem-mobile.webp" class="img-fluid lazy"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="desktop-view">
                    <div class="vidDiv"><img src="<?=base_url()?>assets/images/banner/DesktopBanners/IRDAI-desktop.jpg" alt="Kotak Life Insurance" class="posterImg"></div>
                    <div class="slideBox overlay-none junebanner kgbf-bans">
                        <div class="midWrapper">
                            <div class="bannerCont kotack-protect">
                                <div class="vCenterWrap top-text">
                                    <h2 class="kgfc-h2 text-blue"><b>Service touchpoints for all your needs</b></h2>
                                    <div class="secure-list secure-first">
                                        <p class="fortune-pera">At Kotak Life, when it comes to reaching us, <b>ease hai... hamesha!</b></p>
                                    </div>
                                    <div class="fund-icons">
                                        <div class="d-flex child-flx irda-group">
                                            <div class="f-cover">
                                                <a href="https://care.kotaklifeinsurance.com/weBform#" target="_blank">
                                                    <div class="irdai-icon id1"></div>
                                                    <h3>Query Form</h3>
                                                </a>
                                            </div>
                                            <div class="f-cover">
                                                <a href="https://api.whatsapp.com/send/?phone=919321003007&text=Hi" target="_blank">
                                                    <div class="irdai-icon id2"></div>
                                                    <h3>WhatsApp</h3>
                                                </a>
                                            </div>
                                            <div class="f-cover">
                                               <a data-action="KayaBannerChat" href="javascript:void(0)" data-category="banner|existing customers" data-event="event banner" onclick="openChat()">
                                                    <div class="irdai-icon id3"></div>
                                                    <h3>Kaya</h3>
                                                </a>
                                            </div>
                                            <div class="f-cover">
                                                <a href="https://care.kotaklifeinsurance.com/#" target="_blank">
                                                    <div class="irdai-icon id4"></div>
                                                    <h3>Online Policy Manager</h3>
                                                </a>
                                            </div>
                                            <div class="f-cover">
                                                <a href="https://kli.in/Branch" target="_blank">
                                                    <div class="irdai-icon id5"></div>
                                                    <h3>Branches</h3>
                                                </a>
                                            </div>
                                            <div class="f-cover">
                                                <a href="https://www.kotaklife.com/why-kotak-life/contact-us" target="_blank">
                                                    <div class="irdai-icon id6"></div>
                                                    <h3>Service agent</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="red-btn mt-0"><a data-action="teleconsultation" data-label="know more" data-category="banner|existing customers" data-event="event banner" href="https://www.kotaklife.com/digital-services/" target="_blank">Know More</a></div>
                                </div>
                                <p class="fnt-14 space-bot" style="color:#000; padding-top:2rem;position:absolute;bottom:-5rem; left:80%;font-size:16px !important;font-weight:700;">Ref no. - KLI/23-24/Comp/E-BB/202</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-view">
                    <div class="home-header sec-slider">
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
                                        <a href="https://care.kotaklifeinsurance.com/webform#" target="_blank">
                                            <div class="irdai-icon id1"></div>
                                            <h3>Query Form</h3>
                                        </a>
                                    </div>
                                    <div class="f-cover">
                                        <a href="https://api.whatsapp.com/send/?phone=919321003007&text=Hi" target="_blank">
                                            <div class="irdai-icon id2"></div>
                                            <h3>WhatsApp</h3>
                                        </a>
                                    </div>
                                    <div class="f-cover">
                                        <a data-action="KayaBannerChat" href="javascript:void(0)" data-category="banner|existing customers" data-event="event banner" onclick="openChat()">
                                            <div class="irdai-icon id3"></div>
                                            <h3>Kaya</h3>
                                        </a>
                                    </div>

                                </div>
                                <div class="d-flex child-flx irda-group">
                                    <div class="f-cover">
                                        <a href="https://care.kotaklifeinsurance.com/#" target="_blank">
                                            <div class="irdai-icon id4"></div>
                                            <h3>Online policy Manager</h3>
                                        </a>
                                    </div>
                                    <div class="f-cover">
                                        <a href="https://kli.in/Branch" target="_blank">
                                            <div class="irdai-icon id5"></div>
                                            <h3>Branches</h3>
                                        </a>
                                    </div>
                                    <div class="f-cover">
                                        <a href="https://www.kotaklife.com/why-kotak-life/contact-us" target="_blank">
                                            <div class="irdai-icon id6"></div>
                                            <h3>Service agent</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="red-btn"><a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" href="https://www.kotaklife.com/digital-services/" target="_blank">Know More</a></div>

                        </div>
                    </div>
                </div>
            </li>
            <!--li>
                <div class="vidDiv"><img src="<?=base_url()?>assets/images/POLICY-PAYMENT-LINK-MAILER_KLIC_1275x420.jpg" alt="Kotak Life Insurance" class="posterImg desktop-banner"> <img src="<?=base_url()?>assets/images/POLICY-PAYMENT-LINK-MAILER_KLIC_640x420.jpg" alt="Kotak Life Insurance" class="mobileBannerImg mobile-banner"></div>
                <div class="slideBox">
                    <div class="midWrapper">
                        <div class="bannerCont">
                            <div class="vCenterWrap">
                                <h2><strong>Now pay your renewal premium,</strong></h2>
                                <h2>online and on time</h2><a onclick='dataLayer.push({event:"event banner",category:"banner|<?php echo $gaCat;?>",action:"Premium Payment",label:"pay premium"})' href="https://care.kotaklifeinsurance.com/prelogin" target="_blank" class="link">Pay Premium</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li-->

            <li>
                <div class="desktop-view">
                    <div class="vidDiv"><img src="<?=base_url()?>assets/images/banner/DesktopBanners/eye-foundation.webp" alt="Eye Foundation" class="posterImg"></div>
                    <div class="slideBox overlay-none junebanner kgbf-bans eyefoundation">
                        <div class="midWrapper">
                            <div class="bannerCont kotack-protect">
                                <div class="vCenterWrap top-text">
                                    <h2 class="kgfc-h2 text-blue"><b>Let Your Eyes<br>Brighten Another's World</b></h2>
                                    <div class="secure-list secure-first">
                                        <p class="fortune-pera">Join the<span class="pera-red"> Eye Donation </span>Pledge</p>
                                    </div>
                                    <div class="eye-foundation"><img src="<?=base_url()?>assets/images/banner/eye-foundation-logo.webp" alt="Eye Foundation"></div>
                                    <div class="red-btn mt-0"><a data-action="teleconsultation" data-label="know more" data-category="banner|existing customers" data-event="event banner" href="https://www.mohanfoundation.org/donorcard.asp?from=kotaklife" target="_blank">Pledge Now</a></div>
                                </div>
                            </div>
                            <p class="fnt-14 space-bot">Ref no. - KLI/23-24/E-WEB/1899</p>
                        </div>
                    </div>
                </div>
                <div class="mobile-view">
                    <div class="home-header sec-slider eye-foundations">
                        <div>
                            <div class="slideBox kgfb-mobile-slider">
                                <div class="content-absolute">
                                    <h3 class="text-blue">Let Your Eyes<br>Brighten Another's World</h3>
                                    <p class="fnt-24 text-blue">Join the<span class="pera-red"> Eye Donation </span>Pledge</p>
                                </div>
                            </div>
                            <div class="eye-foundation"><img src="<?=base_url()?>assets/images/banner/eye-foundation-logo.webp" alt="Eye Foundation"></div>
                            <div class="mobile-ban"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/eye-foundation.webp" class="img-fluid lazy"></div>
                            <div class="red-btn"><a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" href="https://www.mohanfoundation.org/donorcard.asp?from=kotaklife" target="_blank">Pledge Now</a>
                                <p class="fnt-14 space-bot">Ref no. - KLI/23-24/E-WEB/1899</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>



            <li>
                <div class="home-header mobile-view">
                    <div>
                        <div class="slideBox kgfb-mobile-slider">
                            <div class="content-absolute">
                                <h3 class="text-blue">The Key to your Digital Healthcare journey</h3>
                                <p class="fnt-24 blue-text third-pera"><span class="pera-red"><b>Ayushman Bharat Health Account</b></span></p>
                            </div>
                        </div>
                        <div class="mobile-ban mt-3"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/KGFB-mobile.webp" class="img-fluid lazy"></div>
                        <div class="get-lifecover mt-3">
                            <div class="life-gr">
                                <div class="life-icon"></div>
                                <div class="life-points">
                                    <p><sup>*</sup>Hassle-free access</p>
                                </div>
                            </div>
                            <div class="life-gr">
                                <div class="life-icon"></div>
                                <div class="life-points">
                                    <p><sup>*</sup>Unified Benefits</p>
                                </div>
                            </div>
                            <div class="life-gr">
                                <div class="life-icon"></div>
                                <div class="life-points">
                                    <p><sup>*</sup>Unique & Trustable Identity</p>
                                </div>
                            </div>
                        </div>
                        <div class="red-btn lifecover-btn mt-0"><a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" href="#">Know More</a></div>
                    </div>
                </div>
                <div class="desktop-view">
                    <div class="vidDiv"><img src="<?=base_url()?>assets/images/banner/DesktopBanners/digital-health.webp" alt="Kotak Life Insurance" class="posterImg"></div>
                    <div class="slideBox overlay-none junebanner kgbf-bans third-ban">
                        <div class="midWrapper">
                            <div class="bannerCont kotack-protect exiting-product">
                                <div class="vCenterWrap top-text">
                                    <h2 class="kgfc-h2 text-blue fnt-45">The Key to your<br>Digital Healthcare journey</h2>
                                    <div class="secure-list secure-first">
                                        <p class="fortune-pera text-blue"><span class="pera-red">Ayushman Bharat Health Account</span></p>
                                    </div>
                                    <div class="get-lifecover no-line digi-helath">
                                        <div class="life-gr">
                                            <div class="life-points">
                                                <p><sup>*</sup>Hassle-free access</p>
                                            </div>
                                        </div>
                                        <div class="life-gr">
                                            <div class="life-points">
                                                <p><sup>*</sup>Unified Benefits</p>
                                            </div>
                                        </div>
                                        <div class="life-gr">
                                            <div class="life-points">
                                                <p><sup>*</sup>Unique & Trustable Identity</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="red-btn mt-0"><a data-action="teleconsultation" data-label="know more" data-category="banner|existing customers" data-event="event banner" href="#" target="_blank">Know More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="desktop-view">
                    <div class="vidDiv get24-banner"><img src="<?=base_url()?>assets/images/banner/DesktopBanners/policy_manager.webp" alt="Eye Foundation" class="posterImg"></div>
                    <div class="slideBox overlay-none junebanner kgbf-bans policy-manager">
                        <div class="midWrapper">
                            <div class="bannerCont kotack-protect">
                                <div class="vCenterWrap top-text">
                                    <h2 class="kgfc-h2 text-blue">Simplify policy management with our<span class="pera-red"> Online Policy  Manager</span></h2>
                                    <div class="get-infinty"><img src="<?=base_url()?>assets/images/banner/infinity.webp" alt="Eye Foundation"></div>
                                   <div class="get-stay get-policy">
                                        <p>Your  <span>One Stop destination</span> for <img src="<?=base_url()?>assets/images/banner/right-line.webp" alt="Stay Protected"></p>
                                        <p><img src="<?=base_url()?>assets/images/banner/left-line.webp" alt="Stay Invested">Managing your <span>policy needs</span></p>
                                    </div>
                                    <div class="nfo-list"><a href="https://care.kotaklifeinsurance.com/#" class="nfo-btn">Log in</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-view">
                    <div class="home-header sec-slider policy-manager">
                        <div>
                            <div class="slideBox kgfb-mobile-slider">
                                <div class="content-absolute">
                                    <h3 class="text-blue">Simplify policy management with our<span class="pera-red">Online Policy  Manager</span></h3>
                                </div>
                            </div>
                            <div class="get-infinty"><img src="<?=base_url()?>assets/images/banner/infinity.webp" alt="infinity"></div>
                            <div class="get-stay get-policy">
                                        <p>Your  <span>One Stop destination</span> for <img src="<?=base_url()?>assets/images/banner/right-line.webp" alt="Stay Protected"></p>
                                        <p><img src="<?=base_url()?>assets/images/banner/left-line.webp" alt="Stay Invested">Managing your <span>policy needs</span></p>
                                    </div>
                            <div class="nfo-list"><a href="https://care.kotaklifeinsurance.com/#" class="nfo-btn">Log In</a></div>
                            <div class="mobile-ban w-h-100"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/policy-manager-mobile.webp" class="img-fluid lazy"></div>
                        </div>
                    </div>
                </div>
            </li>
            <!--li>
                <div class="vidDiv"><img src="<?=base_url()?>assets/quarntine/images/banner2.png" alt="Kotak Life Insurance" class="posterImg"></div>
                <div class="slideBox">
                    <div class="midWrapper">
                        <div class="bannerCont">
                            <div class="vCenterWrap">
                                <h2>Explore the all-new<strong>Online Policy Manager</strong></h2>
                                <p>Do more than just paying your premiums online without having to visit a branch. Things are easy with us...hamesha.</p><a data-action="OPM" data-label="Log In" data-category="banner|existing customers" data-event="event banner" href="https://care.kotaklifeinsurance.com" class="link ga_banner_track">Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li-->
            <!--li>
                <div class="vidDiv"><img src="<?=base_url()?>assets/images/kaya_banner.jpg" alt="Say Hello to Kaya" class="posterImg desktop-banner"> <img src="<?=base_url()?>assets/images/kaya_banner_mobile.jpg" alt="Say Hello to Kaya" class="mobileBannerImg mobile-banner"></div>
                <div class="slideBox">
                    <div class="midWrapper">
                        <div class="bannerCont">
                            <div class="vCenterWrap">
                                <h2>Meet<strong>Kaya</strong>, your virtual assistant</h2>
                                <p>Get quick answers for your queries about your policies easily. Click on Let's Chat to get the conversation going</p><a data-action="KayaBannerChat" data-label="lets chat" data-category="banner|existing customers" data-event="event banner" class="link ga_banner_track" onclick="openChat()">Let's Chat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li-->
            <li>
                <div class="vidDiv"><img src="<?=base_url()?>assets/images/Claim-Banner-kerla.jpg" alt="Kotak Life Insurance" class="posterImg desktop-banner"> <img src="<?=base_url()?>assets/images/Claim-Banner-kerla-mobile.jpg" alt="Kotak Life Insurance" class="mobileBannerImg mobile-banner"></div>
                <div class="slideBox">
                    <div class="midWrapper">
                        <div class="bannerCont">
                            <div class="vCenterWrap">
                                <h2>Simplified Claims Settlement Process for families affected by Natural Calamities</h2>
                                <p>Reach out to our Claims Mitra at <a href="mailTo:kli.claimsmitra@kotak.com">kli.claimsmitra@kotak.com</a></p><a onclick='dataLayer.push({event:"event banner",category:"banner|<?php echo $gaCat;?>",action:"Simplified Claims",label:"Know more"})' href="<?=base_url()?>assets/images/uploads/why_kotak/Simplified-claim-settlement-process-for-families-affected.pdf" target="_blank" class="link">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>


            <li>
                      <div class="desktop-view desktop-inline">
                          <div class="vidDiv"><img src="<?=base_url()?>assets/images/banner/DesktopBanners/happyyoulifeadvisor.webp" alt="Kotak Life Insurance" class="posterImg"></div>
                          <!-- <div class="vidDiv"><img src="<?=base_url()?>assets/images/banner/DesktopBanners/happyyoulifeadvisor.webp" alt="Kotak Life Insurance" class="posterImg"></div> -->
                      
                          
                          <div class="slideBox overlay-none junebanner kgbf-bans">
                              <div class="midWrapper">
                                  <div class="happy-banner">
                                      <div class="happy-content">
                                          <h3 class="wellbeing yourweel">Make wellbeing your super power </h3>
                                          <div class="happy-app-download"><a rel="nofollow"class="iso-app" href="https://apps.apple.com/in/app/happyyou-by-kotak/id6448199779?utm_source=KLI&utm_medium=KLI+website&utm_campaign=HY+appstore&utm_id=Website-+HY+App+store" target="_blanck"></a><a rel="nofollow" class="goo-app" href="https://play.google.com/store/apps/details?id=com.wyh.happyyou&referrer=utm_source%3DKLI%26utm_medium%3DKLI%2BWebsite%26utm_campaign%3DHY%2BPlaystore" target="_blanck"></a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="mobile-view">
                          <div class="home-header">
                                      <div class="happyyou-groups"><img data-src="<?=base_url()?>assets/images/banner/MobileBanners/happylifemobile.webp" class="img-fluid lazy life-img">
                                         
                                              <div class="happyou-excit">
                                                  <h3 class="text-blue position_text">Make wellbeing your super power </h3>
                                                  <div class="happy-app-download"><a rel="nofollow" class="iso-app" href="https://apps.apple.com/in/app/happyyou-by-kotak/id6448199779?utm_source=KLI&utm_medium=KLI+website&utm_campaign=HY+appstore&utm_id=Website-+HY+App+store" target="_blanck"></a><a rel="nofollow" class="goo-app" href="https://play.google.com/store/apps/details?id=com.wyh.happyyou&referrer=utm_source%3DKLI%26utm_medium%3DKLI%2BWebsite%26utm_campaign%3DHY%2BPlaystore" target="_blanck"></a></div>
                                              </div>
                                         
                                      </div>
                                  </div>
                      </div>
   
                </li>

        </ul>
        <ul class="sliderNav"></ul>
    </article>
    <article class="altColor howDoWrap">
        <div class="midWrapper">
            <div class="midWrap">
                <div class="midCont"><img class="lazy" data-src="<?=base_url()?>assets/images/how-do-i.png">
                    <div class="cont">
                        <h2>How do I</h2>
                        <p>Kotak Life Insurance has simplified the way you choose a policy, apply for a claim and more. Browse through the links below to know more about each.</p>
                    </div>
                </div>
                <div class="howdoUL_wrap">
                    <ul class="howdoUL">
                        <li><a data-action="how do i" data-label="pay my premium" data-event="event existing customers homepage sections" href="<?php echo base_url(HDI_MODULE_LINK . '/pay-my-premium') ?>" class="payOnline active ga_track"><span>Pay<br>My Premium</span></a></li>
                        <li><a data-action="how do i" data-label="file a claim" data-event="event existing customers homepage sections" href="https://customer.kotaklifeinsurance.com/ocm" target="_blank" class="KMBankATMDropBox ga_track"><span>File a Claim</span></a></li>
                        <li><a data-action="how do i" data-label="manage my policy" data-event="event existing customers homepage sections" href="<?php echo base_url(HDI_MODULE_LINK . '/manage-my-policy') ?>" class="branchOffices ga_track"><span>Manage<br>My Policy</span></a></li>
                        <li><a data-action="how do i" data-label="locate kotak branches" data-event="event existing customers homepage sections" href="<?php echo base_url(HDI_MODULE_LINK . '/locate-kotak-branches') ?>" class="ECS_NACH ga_track"><span>Locate a Kotak Life branch</span></a></li>
                    </ul>
                    <div class="viewAll"><a class="ga_track" data-action="how do i" data-label="view all" data-event="event existing customers homepage sections" href="<?php echo base_url(HDI_MODULE_LINK); ?>">View All</a></div>
                </div>
            </div>
        </div>
    </article>
    <article class="needCalculatorWrap">
        <div class="midWrapper">
            <div class="midWrap">
                <h2>Know Your Life's Need</h2>
                <div class="contInfo">
                    <div class="leftCont">
                        <p>Everything you buy today is tailor made to your needs. Why should your insurance policies be any different?</p>
                        <div class="imgDiv"><video id="v" loop autoplay>
                                <source src="<?=base_url()?>assets/images/looking-for.mp4" type="video/mp4">
                            </video><img data-src="<?=base_url()?>assets/images/looking-for.jpg" class="lazy" alt="Know Your Life's Need"></div>
                    </div>
                    <div class="rightCont">
                        <div class="topCnt"><a href="javascript:;" class="links">Back</a>
                            <ul class="needUL">
                                <li><a href="javascript:;" class="selected">1</a></li>
                                <li><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                            </ul>
                        </div>
                        <div class="steps step01"><span>I am</span><span>looking</span>
                            <form id="needForm">
                                <div class="selectbg">
                                    <div class="selectedvalue">Choose your need here</div><select id="needSegment1" class="required" onchange="getSegment()">
                                        <option value="" style="display:none">Choose your need here</option>
                                        <optgroup label="To Buy">/<option value="Term Insurance Plan">Term Insurance Plan</option>
                                        
                                        <option value="Kotak Guaranteed Fortune Builder">Kotak Gen2Gen Protect</option>
                                            <option value="Kotak Guaranteed Fortune Builder">Kotak Guaranteed Fortune Builder</option>
                                            <option value="Kotak e-Invest">Kotak e-Invest</option>
                                            <option value="Kotak Tulip">Kotak T.U.L.I.P </option>
                                            <option value="Assured Savings Plan">Kotak Assured Savings Plan</option>
                                            <option value="Kotak Lifetime Income Plan">Kotak Lifetime Income Plan</option>
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
                                    </select>
                                    <p class="emptyError">Please select your need</p>
                                </div><a href="javascript:;" id="nextBtn" class="link ga_track_button" data-action="form 1a" data-event="event I am looking for">Next</a>
                            </form>
                        </div>
                        <div class="steps step02">
                            <form id="needFormContact">
                                <p>Tell us something about you to suggest proper plan for you.</p>
                                <ul class="step2Form">
                                    <li class="mandatoryTxt">
                                        <p>*All fields Mandatory</p>
                                    </li>
                                    <li><input type="text" id="custName" maxlength="20" class="required" placeholder="Your Name "><span class="nameRequired">Name required.</span></li>
                                    <li>
                                        <div class="selectbg">
                                            <div class="selectedvalue ageGp">Choose your age group</div><select id="ageGroup" class="required">
                                                <option selected="selected">Choose your age group</option> <?php 
							$years = $ageGroupDD->field_list_items;
							$pieces = preg_split('/[\n]+/', $years);
              $dateV='';
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
                                            </select>
                                        </div><span class="ageRequired">Age group required.</span>
                                    </li>
                                    <li><input type="text" id="custNumber" maxlength="10" onkeypress="return isNumber(event)" class="required" placeholder="Mobile Number"><span class="numberRequired">Number required.</span></li>
                                </ul><a href="javascript:;" id="nextResBtn" data-label="next click" data-action="form 1b" data-event="event I am looking for" class="link">Next</a>
                            </form>
                        </div>
                        <div class="steps step03">
                            <div class="innerLoader"><img src="<?=base_url()?>assets/images/loader.gif" alt="Kotak Loader"></div>
                            <div class="lookingWrap scroll-pane" id="lookingScroll">
                                <ul class="planUL" id="planResultUL"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="altColor whyKotak">
        <div class="midWrapper">
            <div class="midWrap">
                <h2>Why Kotak<br>Life Insurance?</h2>
                <div class="rgtCont">
                    <div class="carouselWrap">
                        <ul class="carouselUL" id="carousel_01">
                            <li>
                                <div class="contWrap">
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <p>Kotak Life Insurance is one of the fastest growing insurance companies in India, covering over 50 million lives nationwide (as on 30<sup>th</sup>June 2023). It delivers outstanding value to its customers through high customer empathy and understanding, lifetime of exceptional service and a suite of insurance products.</p><a href="<?= base_url() ?>why-kotak-life" class="links ga_track" data-action="why kli|life at kli" data-label="know more" data-event="event why kotak slider">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="sliderControlWrap hideWrap">
                            <ul class="sliderCount">
                                <li>4</li>
                                <li>5</li>
                            </ul>
                            <div class="sliderControl"><a href="javascript:;" class="prev">Prev</a><a onclick='dataLayer.push({event:"event why kotak slider",category:"<?php echo $gaCat;?>",action:"why kli|life at kli",label:"right"})' href="javascript:;" class="next">Next</a></div>
                        </div>
                    </div><img data-src="<?=base_url()?>assets/images/whyKotak_img.png" class="whyKotakImg lazy">
                </div>
            </div>
        </div>
    </article>

    <article class="insuranceGuide">
        <div class="midWrapper">
            <div class="midWrap">
                <h2>Insurance Guide</h2>
                <div class="lftCont">
                    <p>Kotak Life Insurance helps you understand the various benefits of life insurance for you, your family, wealth creation, protection, retirement and savings. Find out how you can make the most of every plan.</p>
                </div>
                <div class="rgtCont">
                    <div class="carouselWrap">
                        <ul class="carouselUL" id="carousel_02">
                            <li>
                                <div class="imgSrc"><img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-Family.jpg" alt="Insurance Family"> <img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-WealthCreation.jpg" alt="Wealth Creatioin - kotak Life"> <img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-Protection.jpg" alt="Insurance Protection - Kotak Life"> <img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-Retirement.jpg" alt="insurance retirement - Kotak Life"> <img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-AboutLifeInsurance.jpg" alt="Life Insurance - Kotak Life"> <img class="lazy" data-src="<?=base_url()?>assets/images/Insidepage-Insurance-TaxAndSaving.jpg" alt="tax saving - Kotak Life"></div>
                                <div class="contWrap">
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog e-hb1"></div>
                                            <h3>Family</h3>
                                            <p>We understand your concern for your family. And life insurance can help you take care of your family at every step of life.</p><a onclick='dataLayer.push({event:"event insurance guide slider",category:"<?php echo $gaCat;?>",action:"insurance guide|family",label:"right"})' href="<?php echo base_url(IG_MODULE_LINK.'/protection'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog hb2"></div>
                                            <h3>Wealth Creation</h3>
                                            <p>You work hard with commitment to ensure that you and your loved ones achieve your dreams of living in abundance. Here’s how life insurance can help.</p><a onclick='dataLayer.push({event:"event insurance guide slider",category:"<?php echo $gaCat;?>",action:"insurance guide|Wealth Creation",label:"right"})' href="<?php echo base_url(IG_MODULE_LINK.'/wealth-creation'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog hb1"></div>
                                            <h3>Protection</h3>
                                            <p>A secure future for your family is of utmost importance to you. That’s why Kotak Life Insurance offers you a choice of plans for your unique needs.</p><a onclick='dataLayer.push({event:"event insurance guide slider",category:"<?php echo $gaCat;?>",action:"insurance guide|Protection",label:"right"})' href="<?php echo base_url(IG_MODULE_LINK.'/protection'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog hb3"></div>
                                            <h3>Retirement</h3>
                                            <p>After a fulfilling life of working hard, all you look forward to is a comfortable retired life. And Kotak Life Insurance is every ready to help you.</p><a onclick='dataLayer.push({event:"event insurance guide slider",category:"<?php echo $gaCat;?>",action:"insurance guide|Retirement",label:"right"})' href="<?php echo base_url(IG_MODULE_LINK.'/retirement'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog hb4"></div>
                                            <h3>About Life Insurance</h3>
                                            <p>Life insurance has multiple benefits for you, your loved ones and your dreams for future. Choose the plans that complement your needs and for a happy life.</p><a onclick='dataLayer.push({event:"event insurance guide slider",category:"<?php echo $gaCat;?>",action:"insurance guide|About Life Insurance",label:"right"})' href="<?php echo base_url(IG_MODULE_LINK.'/about-life-insurance'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <div class="vCenterWrap">
                                            <div class="home-blog hb5"></div>
                                            <h3>Savings & Tax</h3>
                                            <p>Payments towards life insurance are eligible for tax redemption. Ensure that you take the right steps to save up on taxes.</p><a onclick='dataLayer.push({event:"event insurance guide slider",category:"<?php echo $gaCat;?>",action:"insurance guide|Savings & Tax",label:"right"})' href="<?php echo base_url(IG_MODULE_LINK.'/savingstax'); ?>" class="links">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="sliderControlWrap">
                            <ul class="sliderCount">
                                <li>4</li>
                                <li>5</li>
                            </ul>
                            <div class="sliderControl"><a href="javascript:;" data-label="left" class="prev">Prev</a><a href="javascript:;" data-label="right" class="next">Next</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<script>
    var cg_json = "",
        cg_json1 = "",
        cg_json2 = "",
        cb_json = "";

    function getSegment() {
        var e = $("#needSegment1").val();
        $("#selected_val_two").val(e), "Kotak Tulip" == e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Assured Pension" == e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Term Insurance Plan" == e && ($target_url = "https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Kotak e-Invest" == e && ($target_url = "https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Assured Savings Plan" == e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Guaranteed Savings Plan" == e && ($target_url = "https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Health Insurance Plan" == e && ($target_url = "https://www.kotaklife.com/buy-health-insurance-online/#/landing?utm_source=Health_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Retirement Plan" == e && ($target_url = "https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "Kotak Guaranteed Fortune Builder" == e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")), "About Term Insurance Plan" == e && ($target_url = "https://www.kotaklife.com/term-insurance", window.open($target_url, "_blank")), "About ULIP Plans" == e && ($target_url = "https://www.kotaklife.com/ulip-plans", window.open($target_url, "_blank")), "About Savings Plans" == e && ($target_url = "https://www.kotaklife.com/savings-plan", window.open($target_url, "_blank")), "About Health Insurance" == e && ($target_url = "https://www.kotaklife.com/insurance-plans/health-plans", window.open($target_url, "_blank")), "About Retirement Plans" == e && ($target_url = "https://www.kotaklife.com/insurance-plans/health-plans", window.open($target_url, "_blank")), "Kotak Lifetime Income Plan" == e && ($target_url = "https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank")),"Kotak Gen2Gen Protect"== e && ($target_url = "https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec", window.open($target_url, "_blank"))
    }

    function close_popup() {
        $(".steps.step01").addClass("selected")
    }

</script>
