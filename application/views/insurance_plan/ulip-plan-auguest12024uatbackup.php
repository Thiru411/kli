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
    
} else {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $temp = array();
    $temp = explode("/", $actual_link);

    if ($temp[3] == "main") {
        redirect(base_url());
    }
   
}

?>
<style>
    .hid{opacity: unset !important;}
    a {
        padding-left: 3px;
        padding-right: 3px;
    }
    b {
        padding-right: 3px;
    }
</style>
<link rel="stylesheet" href="assets/css/fancybox-4.0.css" /><link rel="stylesheet" href="assets/css/global.css" /><link rel="stylesheet" href="assets/css/investment.css" /><link rel="stylesheet" href="assets/css/vendor/rangeslider.css" /><link rel="stylesheet" href="assets/css/term-insurance.css" />
<style>
    html {
        scroll-behavior: smooth;
    }
    footer,
    section {
        position: static;
    }
    .tooltiptext a {
        padding: 20px;
    }
    .roww.mg-15 {
        padding-bottom: 15px;
    }
    .ulipsprite-image{background-image: url('assets/images/ulip-plan/ulipsprite-smallimages.webp');}
    .ulipsprite-image1{background-image: url('/assets/images/term-insurance/term-plan-sprites.webp');}
    .ulipimage{width: 374px;
    height: 451px;
    background-position: -1325px -852px;}
    .uliplogo{width: 337px;
    height: 130px;
    background-position: -1414px -3189px;}
    .ulipdownload{width: 82px;
    height: 68px;
    background-position: -1679px -3008px;}
    .ulipperson{width: 567px;
    height: 286px;
    background-position: -23px -3024px;
    /* min-width: 376px; */
    background-size: 815px;}
    .ulipu1{height: 257px;position: relative;
    background-position: -704px -1360px;
    min-width: 568px;
    background-size: 1709px;}
    .ulipu2{height: 267px;
    position: relative;
    background-position: -650px -1012px;
    min-width: 548px;
    background-size: 1784px}
    .ulipu3{height: 257px;position: relative;
    background-position: -130px -1360px;
    min-width: 568px;
    background-size: 1709px;}
    .ulipu4{height: 267px;  position: relative; background-position: -55px -1012px; min-width: 548px; background-size: 1784px}
    .ulipu5{height: 257px;position: relative; background-position: -130px -1767px; min-width: 568px;  background-size: 1709px;}
    .ulipu6{height: 267px; position: relative; background-position: -623px -1808px; min-width: 548px;  background-size: 1784px}
    .ulipimagebenfit{width: 1290px; height: 451px; background-position: -1713px -2181px;}
    .ulipimagetyping{width: 462px; height: 451px; background-position: -1278px -1568px;}
    .piggybank{width: 395px; height: 451px; background-position: -1317px 25px;}
    .number{width: 929px; height: 789px; background-position: -62px -1px;}
    .moneybag{width: 374px;  height: 208px; background-position: -1304px -466px;}
    .newulip{margin-bottom: 30px;}
   
    
#topSection {
    border-bottom: unset !important; 
     padding-bottom: unset !important; 
     position:unset !important; 
     z-index: unset !important; 
     top: unset !important;
}
.ulip-offline .accelblock{height: 355px;}

@media screen and (max-width: 1366px){
.wfa-icon{min-width: 28px !important;}
.fund-tick {min-width: 25px !important;}
.ulipu1 {
    height: 257px;
    position: relative;
    background-position: -649px -1237px;
    min-width: 433px;
    background-size: 1572px;
}
.ulipu2 {
    height: 267px;
    position: relative;
    background-position: -650px -915px;
    min-width: 453px;
    background-size: 1644px;
}
.ulipu3 {
    height: 257px;
    position: relative;
    background-position: -118px -1233px;
    min-width: 432px;
    background-size: 1572px;
}



.ulipu4 {
    height: 267px;
    position: relative;
    background-position: -114px -865px;
    min-width: 414px;
    background-size: 1572px;
}
.ulipu6 { height: 267px; position: relative; background-position: -611px -1591px; min-width: 427px;background-size: 1581px;}
.ulipu5 { height: 257px; position: relative; background-position: -124px -1624px;  min-width: 431px;  background-size: 1572px;}
.ul-arrow {min-width: 45px;}
.ulipperson {  background-position: -17px -2375px;  background-size: 655px;}
.ulipimage { width: 329px; height: 451px;  background-position: -1357px -852px;}
.uliplogo {width: 272px; height: 130px;  background-position: -1445px -3189px;}
.ulipimagebenfit {
    width: 1322px;
    height: 451px;
    background-position: -1446px -4775px;
    background-size: 1471px;
}
.whyChooseKotakUlip-flexR a{margin-left: -9rem !important;}
}
@media screen and (max-width: 468px){
    .ulipdownload {      background-position: -1713px -3022px;}
    .tulip-cta a {width: 346px;}
    .ulip-cta a{width: 346px;}
    .ulipperson {   background-position: -16px -2143px; background-size: 582px;  height: 220px;  }
    .ulipimagebenfit {  width: 1322px; height: 140px; background-position: -1154px -4291px; background-size: 582px;}
    .whyChooseKotakUlip-flexR a {     margin-left: unset !important;  }
    .uii1,.uii2,.uii3,.uii4,.uii5 {  min-width: 63px;}
    .ulipimagetyping { width: 462px;  height: 230px;   background-position: -638px -2816px;background-size: 959px;}
    .ubi1,.ubi2,.ubi3,.ubi4,.ubi5,.ubi6,.ubi7,.ubi8,.ubi9{min-width: 69px;}
    .ulipimage{display: none;}
    .howDoesUlipWork-flex{display: none;}
    

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
                        <p class="topSection-desc">
                            Unit-Linked Insurance Plans (ULIPs) is a life insurance category that offers an opportunity to grow your money over the long term and protect your family through life cover. These plans are popular among
                            investors because they help in seeking financial security and long-term capital growth.
                        </p>
                        <br />
                        <p class="topSection-desc">
                            With the potential for wealth creation, tax advantages, and flexibility in fund allocation, ULIPs offer individuals a comprehensive and customizable approach to financial planning and protection.
                        </p>
                    </div>
                    <div class="ulipCard">
                    <div class="ulipsprite-image uliplogo"></div>
                        <!-- <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195 95" width="195" height="95">
                            <title>UlipPlan-svg</title>
                            <defs>
                                <clipPath clipPathUnits="userSpaceOnUse" id="cp1">
                                    <path d="m15.9 2.8l-7.4 10.5-7.4 10.5h6v37.7c0 14.9 12.1 27 27 27 4.3 0 8.6-1 12.4-3-10.9-2-19.4-10.5-21.5-21.4-0.2-0.8-0.4-1.7-0.4-2.6v-37.7h6l-7.4-10.5z" />
                                </clipPath>
                                <clipPath clipPathUnits="userSpaceOnUse" id="cp2"><path d="m46.49 85.5c-10.9-2-19.4-10.5-21.5-21.4 1.3 11.3 10.3 20.1 21.5 21.4z" /></clipPath>
                                <radialGradient id="g1" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="matrix(17.561,4.672,-4.672,17.561,83.55,166.225)">
                                    <stop offset="0" stop-color="#ffee00" />
                                    <stop offset="1" stop-color="#e50019" />
                                </radialGradient>
                            </defs>
                            <style>
                                .ts0 {
                                    fill: #e51828;
                                }
                                .ts1 {
                                    fill: #9d0d1a;
                                }
                                .ts2 {
                                    fill: #036;
                                }
                                .ts3 {
                                    fill: url(#g1);
                                }
                            </style>
                            <g id="Layer">
                                <g id="Layer">
                                    <path id="Layer" class="ts0" d="m80.4 72.9h28.6v10.8h-42v-65.4h13.5v54.6z" />
                                    <path id="Layer" class="ts0" d="m131.1 83.7h-13.5v-65.4h13.5z" />
                                    <path
                                        id="Layer"
                                        fill-rule="evenodd"
                                        class="ts0"
                                        d="m157.1 83.6h-13.5v-65.3h25.5c4.9 0 9.2 0.9 13 2.7 3.8 1.8 6.6 4.4 8.6 7.7 2 3.3 3 7.1 3 11.3 0 6.4-2.2 11.5-6.6 15.2-4.4 3.7-10.5 5.5-18.2 5.5h-11.8zm0-33.9h12c3.6 0 6.3-0.8 8.2-2.5 1.9-1.7 2.8-4.1 2.8-7.2 0-3.2-0.9-5.8-2.8-7.8-1.9-2-4.5-3-7.8-3.1h-12.4z"
                                    />
                                </g>
                                <path
                                    id="Path_38623"
                                    fill-rule="evenodd"
                                    class="ts0"
                                    d="m25 64.1c2.1 10.9 10.6 19.4 21.5 21.4 9-4.6 14.6-13.9 14.6-24v-36.1-3.2c0-1-0.8-1.8-1.8-1.8-1 0-1.8 0.8-1.8 1.8v10.3c0 1-0.8 1.8-1.8 1.8-1 0-1.8-0.8-1.8-1.8v-14.1c0-1-0.8-1.8-1.8-1.8-1 0-1.8 0.8-1.8 1.8v19.5c0 1-0.8 1.8-1.8 1.8-1 0-1.8-0.8-1.8-1.8v-7.1c0-1-0.8-1.8-1.8-1.8v30.8c0 5.2-4.2 9.5-9.4 9.5-5.6 1.7-9.3-1.1-10.5-5.2z"
                                />
                                <path id="Path_38624" fill-rule="evenodd" class="ts0" d="m43.6 24.6c0 1 0.8 1.8 1.8 1.8 1 0 1.8-0.8 1.8-1.8v-10.7c0-1-0.8-1.8-1.8-1.8-1 0-1.8 0.8-1.8 1.8z" />
                                <path id="Path_38625" fill-rule="evenodd" class="ts1" d="m25 64.1c2.1 10.9 10.6 19.4 21.5 21.4-7.2-2.6-13-8.1-15.9-15.2-2.7-1.1-4.8-3.4-5.6-6.2z" />
                                <g id="Group_16341">
                                    <g id="Layer">
                                        <g id="Clip-Path: Group_16340" clip-path="url(#cp1)">
                                            <g id="Group_16340"><path id="Rectangle_15225" class="ts2" d="m1.1 2.8h45.4v85.7h-45.4z" /></g>
                                        </g>
                                    </g>
                                </g>
                                <g id="Group_16343">
                                    <g id="Layer">
                                        <g id="Clip-Path: Group_16342" clip-path="url(#cp2)">
                                            <g id="Group_16342"><path id="Rectangle_15226" class="ts3" d="m19.7 84.1l6.8-25.3 25.3 6.7-6.7 25.3z" /></g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg> -->

                        <h2 class="ulipCard-title">Create wealth & endure financial protection</h2>
                        <div class="ulipCard-investTitle">Invest in</div>
                        <div class="centerButton">
                            <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=leadtoken" class="ulipCard-cta">
                                Kotak e-invest <img src="assets/images/ulip-plan/rightArrow.svg" />
                            </a>
                        </div>
                       
                    </div>
                    <div class="ulipsprite-image ulipimage"></div>
                    <!-- <div class="topSection-img"> -->
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="312" height="450">
                            <defs>
                                <clipPath id="a"><path data-name="Rectangle 19977" fill="none" d="M0 0h155.92v221.678H0z"></path></clipPath>
                                <clipPath id="b"><path data-name="Rectangle 19956" fill="none" d="M0 0h133.473v367.359H0z"></path></clipPath>
                                <clipPath id="c"><path data-name="Rectangle 19979" fill="none" d="M0 0h64.888v46.713H0z"></path></clipPath>
                            </defs>
                            <g data-name="Group 32118" transform="translate(-577 -163)">
                                <rect data-name="Rectangle 19981" width="312" height="450" rx="29" transform="translate(577 163)" fill="#eff8ff"></rect>
                                <g data-name="Group 28539" style="mix-blend-mode: luminosity; isolation: isolate;">
                                    <g data-name="Group 28538" transform="translate(702.69 207.583)" clip-path="url(#a)">
                                        <path
                                            data-name="Path 83902"
                                            d="m93.897 203.608-40.019-23.285a11.66 11.66 0 0 0-10.611 0l-15.234 8.978c-2.949 1.7-2.989 4.458-.059 6.161l40.02 23.283a11.747 11.747 0 0 0 10.635-.012l15.233-8.978c2.95-1.7 2.941-4.458.035-6.146"
                                            fill="#ddecf2"
                                        ></path>
                                        <path
                                            data-name="Path 83903"
                                            d="m92.478 199.257-37.8-22a11.013 11.013 0 0 0-10.023 0l-14.389 8.481c-2.785 1.608-2.823 4.211-.056 5.819l37.8 21.993a11.093 11.093 0 0 0 10.046-.011l14.389-8.48c2.787-1.609 2.778-4.211.033-5.806"
                                            fill="#edf6ff"
                                        ></path>
                                        <path
                                            data-name="Path 83904"
                                            d="m92.446 205.063-14.389 8.48a10.352 10.352 0 0 1-5.018 1.206 10.193 10.193 0 0 1-5.028-1.2l-37.8-21.993a3.513 3.513 0 0 1-2.055-2.876l.007 2.891a3.519 3.519 0 0 0 2.055 2.879l37.8 21.993a10.17 10.17 0 0 0 5.021 1.192 10.3 10.3 0 0 0 5.026-1.207l14.389-8.478a3.541 3.541 0 0 0 2.09-2.924l-.007-2.89a3.543 3.543 0 0 1-2.092 2.921"
                                            fill="#bad4f5"
                                        ></path>
                                        <path data-name="Path 83905" d="m79.371 202.265 5-2.9.059-20.56-5 2.907z" fill="#e9f4fb"></path>
                                        <path data-name="Path 83906" d="m49.056 164.117 30.37 17.589 5-2.907-30.371-17.589z" fill="#113a52"></path>
                                        <path data-name="Path 83907" d="m48.996 184.678 30.37 17.586.059-20.558-30.37-17.589z" fill="#fff"></path>
                                        <path
                                            data-name="Path 83908"
                                            d="M150.908 81.876 10.3.699A3.565 3.565 0 0 0 6.7.342l-5 2.9a3.579 3.579 0 0 1 3.6.357l140.608 81.184a11.055 11.055 0 0 1 5.01 8.682l-.233 124.63a3.538 3.538 0 0 1-1.477 3.242l5-2.907a3.541 3.541 0 0 0 1.477-3.242l.233-124.63a11.059 11.059 0 0 0-5.012-8.682"
                                            fill="#edf6ff"
                                        ></path>
                                        <path
                                            data-name="Path 83909"
                                            d="M145.907 84.783 5.3 3.603C2.514 1.994.241 3.263.233 6.465L0 131.094a11.1 11.1 0 0 0 5.035 8.721l140.607 81.179c2.763 1.595 5.036.3 5.044-2.9l.233-124.63a11.059 11.059 0 0 0-5.012-8.682"
                                            fill="#d9e9ff"
                                        ></path>
                                        <path data-name="Path 83910" d="m5.564 127.825 139.558 80.574v-114.9L5.564 12.921z" fill="#fff"></path>
                                        <path data-name="Path 83911" d="m46.932 116.947-.165-.1-28.428-16.408V67.661l.165.1 28.428 16.408zm-28.373-16.635 28.152 16.254v-32.27L18.559 68.039z" fill="#bedffe"></path>
                                        <path data-name="Rectangle 19971" fill="#bedffe" d="m18.394 92.34.11-.19 28.373 16.38-.11.191z"></path>
                                        <path data-name="Rectangle 19972" fill="#bedffe" d="m18.394 84.209.11-.19 28.373 16.38-.11.191z"></path>
                                        <path data-name="Rectangle 19973" fill="#bedffe" d="m18.394 76.078.11-.19 28.373 16.38-.11.191z"></path>
                                        <path data-name="Rectangle 19974" fill="#bedffe" d="M39.618 80.137h.22v32.524h-.22z"></path>
                                        <path data-name="Rectangle 19975" fill="#bedffe" d="M32.525 76.042h.22v32.524h-.22z"></path>
                                        <path data-name="Rectangle 19976" fill="#bedffe" d="M25.432 71.947h.22v32.524h-.22z"></path>
                                        <path
                                            data-name="Path 83912"
                                            d="m128.269 120.383-.053-2.547.6.346v-.1l-.6-.346-.053-2.547.6.346v-.1l-.6-.346-.053-2.549.6.347v-.1l-.6-.346-.053-2.547.6.346v-.1l-.6-.346-.054-2.547.6.346v-.1l-.6-.346-.054-2.547.6.346v-.1l-.6-.346-.053-2.547.6.346v-.1l-.6-.346-.054-2.547.6.346v-.1l-.6-.346-.053-2.547.6.346v-.1l-.6-.346-.053-2.547.6.346v-.1l-.6-.346-.054-2.547.6.346v-.1L56.623 50.149v.1l.523.3.053 2.547-.523-.3v.1l.523.3.054 2.547-.523-.3v.1l.524.3.053 2.547-.523-.3v.1l.523.3.053 2.548-.523-.3v.1l.523.3.054 2.547-.523-.3v.1l.524.3.053 2.548-.523-.3v.1l.523.3.053 2.547-.523-.3v.1l.523.3.053 2.547-.523-.3v.1l.523.3.053 2.548-.523-.3v.1l.523.3.053 2.549-.523-.3v.1l.524.3.053 2.549-.524-.3v.1l71.654 41.457v-.1zm-.3-8.024-13.944-8.068-.054-2.547 13.945 8.067zm-.056-2.648-13.949-8.069-.053-2.547 13.944 8.069zm-.056-2.649-13.944-8.069-.053-2.547 13.944 8.067zM85.504 77.425l.054 2.547-13.944-8.067-.05-2.549zm-13.946-8.17-.053-2.547 13.944 8.069.053 2.547zm14 10.818.053 2.547-13.944-8.067-.053-2.549zm.078-2.67-.053-2.549 13.944 8.068.053 2.547zm13.947 8.168.053 2.547-13.944-8.067-.053-2.549zm-13.969-2.85.053 2.547-13.942-8.063-.053-2.547zm.056 2.649.053 2.547-13.944-8.068-.054-2.547zm.024-5.219 13.944 8.069.053 2.547-13.942-8.062zm14.023 5.4-.053-2.546 13.945 8.068.053 2.549zm13.946 8.169.053 2.548L99.772 88.2l-.053-2.549zm-13.969-2.85.053 2.547-13.944-8.068-.053-2.547zm.055 2.649.053 2.547-13.938-8.07-.053-2.547zm.025-5.219 13.944 8.069.053 2.549-13.944-8.069zm14 10.717.053 2.548-13.944-8.068-.054-2.549zm.055 2.648.053 2.549-13.944-8.069-.053-2.549zm13.967 2.75-13.944-8.069-.054-2.549 13.945 8.069zm-.056-2.648-13.944-8.069-.053-2.547 13.944 8.069zm-.055-2.649-13.944-8.069-.053-2.547 13.944 8.067zm-.056-2.648-13.944-8.069-.054-2.547 13.944 8.069zm-.109-5.2.054 2.547-13.945-8.068-.053-2.547zm-13.916-.3-13.94-8.065-.053-2.549 13.944 8.069zm-.055-2.649-13.944-8.068-.053-2.549 13.944 8.069zm-.109-5.2.054 2.549-13.942-8.065-.053-2.547zm-13.916-.3L85.58 74.754l-.053-2.549 13.944 8.069zm-.055-2.649-13.942-8.067-.053-2.548 13.944 8.068zm-.109-5.2.053 2.547-13.944-8.067-.053-2.549zm-13.916-.3-13.941-8.067-.053-2.547 13.944 8.068zm-.056-2.649-13.944-8.069-.053-2.547 13.944 8.069zm-.109-5.2.053 2.547-13.941-8.065-.053-2.547zM57.258 50.615l13.944 8.068.053 2.547-13.944-8.068zm.055 2.648 13.944 8.069.053 2.547-13.946-8.068zm.055 2.649 13.944 8.068.054 2.547-13.944-8.069zm.055 2.648 13.945 8.069.053 2.547-13.943-8.071zm.056 2.649 13.944 8.068.053 2.547-13.944-8.069zm.055 2.649 13.944 8.069.054 2.547-13.943-8.069zm.056 2.648 13.944 8.068.053 2.548-13.944-8.069zm.055 2.648 13.944 8.068.053 2.547L57.7 71.705zm.055 2.649 13.944 8.068.053 2.547-13.943-8.069zm.055 2.648L71.7 82.52l.053 2.547-13.944-8.069zm.109 5.2-.053-2.547 13.944 8.067.053 2.549zm13.916.3 13.944 8.069.053 2.547-13.944-8.068zm.055 2.649 13.944 8.069.053 2.547-13.944-8.068zm.109 5.2-.053-2.547 13.945 8.069.053 2.547zm13.916.3 13.944 8.069.054 2.547-13.945-8.068zm.056 2.649 13.943 8.069.054 2.547-13.944-8.069zm.109 5.2-.053-2.547 13.944 8.069.053 2.547zm13.916.3 13.944 8.068.053 2.549-13.944-8.069zm.055 2.648 13.944 8.068.054 2.547-13.944-8.067zm.109 5.2-.054-2.549 13.945 8.068.053 2.549zm13.916.3 13.945 8.068.053 2.548-13.944-8.068zm.055 2.648 13.948 8.06.054 2.548-13.945-8.068zm.109 5.2-.053-2.547 13.944 8.067.054 2.549z"
                                            fill="#bedffe"
                                        ></path>
                                        <path
                                            data-name="Path 83913"
                                            d="M120.622 104.649a2.259 2.259 0 0 0-1.155-1.548c-.627-.362-1.127-.258-1.117.232a1.319 1.319 0 0 0 .207.615l-10.583 1.711a2.764 2.764 0 0 0-.9-.866 1.559 1.559 0 0 0-.536-.2l-6.153-9.731a.408.408 0 0 0 .155-.358 2.26 2.26 0 0 0-1.155-1.548c-.628-.363-1.128-.259-1.118.232a1.53 1.53 0 0 0 .338.81l-2.724 2.114a2.6 2.6 0 0 0-.386-.28 1.559 1.559 0 0 0-.526-.2l-9.171-13.965a.4.4 0 0 0 .194-.389 2.257 2.257 0 0 0-1.155-1.546c-.627-.363-1.129-.259-1.118.231a1.324 1.324 0 0 0 .206.61l-6.124 3.3a2.351 2.351 0 0 0-.311-.217 1.848 1.848 0 0 0-.342-.154l-2.779-7.346a.409.409 0 0 0 .479-.447 2.26 2.26 0 0 0-1.155-1.548c-.627-.362-1.127-.259-1.117.234a1.125 1.125 0 0 0 .116.435l-5.585-.664a2.72 2.72 0 0 0-.923-.9c-.448-.261-.827-.277-1.005-.089l-4.986-3.971.006.29 4.881 3.888a.5.5 0 0 0-.013.112 2.26 2.26 0 0 0 1.155 1.548c.628.363 1.128.259 1.117-.232a1.018 1.018 0 0 0-.065-.305l5.624.669a2.772 2.772 0 0 0 .833.763 1.849 1.849 0 0 0 .314.143l2.782 7.357a.405.405 0 0 0-.455.447 2.262 2.262 0 0 0 1.155 1.546c.627.363 1.128.259 1.117-.232a1.74 1.74 0 0 0-.509-1.018l6.047-3.258a2.763 2.763 0 0 0 .694.585 1.352 1.352 0 0 0 .675.212l9.134 13.909a.391.391 0 0 0-.307.432 2.254 2.254 0 0 0 1.155 1.546c.627.363 1.128.259 1.117-.231a1.685 1.685 0 0 0-.452-.952l2.7-2.095a2.652 2.652 0 0 0 .521.4 1.275 1.275 0 0 0 .731.209l6.1 9.654a.389.389 0 0 0-.3.427 2.266 2.266 0 0 0 1.155 1.549c.628.362 1.128.258 1.118-.234a1.023 1.023 0 0 0-.072-.324l10.656-1.723a2.749 2.749 0 0 0 .695.588 1.216 1.216 0 0 0 .791.205l5.318 6.074c.028-.082.053-.165.081-.247l-5.194-5.933a.422.422 0 0 0 .121-.331"
                                            fill="#bedffe"
                                        ></path>
                                        <path data-name="Path 83914" d="m74.352 111.398 1.928 1.063c.1-2.342 1.182-3.78 2.715-3.876l-.849-2.821c-2.172.165-3.7 2.257-3.794 5.635" fill="#a1c0db"></path>
                                        <path
                                            data-name="Path 83915"
                                            d="M80.882 106.456a4.93 4.93 0 0 0-2.736-.693l.849 2.821a3.5 3.5 0 0 1 1.9.489c2.573 1.418 4.684 5.428 4.7 8.937s-2.057 5.209-4.63 3.793-4.685-5.427-4.705-8.937c0-.139.007-.271.013-.405l-1.921-1.063c0 .133-.006.27 0 .409.03 4.954 3.008 10.61 6.64 12.612s6.564-.4 6.535-5.352a16.745 16.745 0 0 0-2.287-7.99 12.155 12.155 0 0 0-4.354-4.622"
                                            fill="#bedffe"
                                        ></path>
                                        <path data-name="Path 83916" d="m95.207 123.45 1.928 1.063c.1-2.342 1.182-3.782 2.714-3.876l-.848-2.822c-2.172.165-3.7 2.257-3.794 5.635" fill="#a1c0db"></path>
                                        <path
                                            data-name="Path 83917"
                                            d="M101.737 118.507a4.922 4.922 0 0 0-2.736-.693l.849 2.822a3.5 3.5 0 0 1 1.9.489c2.574 1.418 4.685 5.427 4.706 8.935s-2.057 5.211-4.63 3.793-4.685-5.425-4.706-8.936c0-.139.007-.272.013-.405l-1.928-1.063c0 .135-.006.271 0 .411.03 4.953 3.008 10.609 6.64 12.612s6.564-.4 6.535-5.354a16.745 16.745 0 0 0-2.287-7.989 12.156 12.156 0 0 0-4.354-4.622"
                                            fill="#bedffe"
                                        ></path>
                                        <path data-name="Path 83918" d="m116.062 135.501 1.928 1.062c.1-2.341 1.182-3.78 2.714-3.875l-.848-2.821c-2.172.165-3.7 2.256-3.794 5.635" fill="#a1c0db"></path>
                                        <path
                                            data-name="Path 83919"
                                            d="M122.592 130.559a4.918 4.918 0 0 0-2.736-.693l.849 2.821a3.5 3.5 0 0 1 1.9.489c2.573 1.418 4.684 5.427 4.7 8.936s-2.057 5.211-4.629 3.792-4.685-5.427-4.706-8.936c0-.139.007-.271.013-.406l-1.928-1.062c0 .135-.006.271 0 .411.03 4.953 3.008 10.609 6.64 12.612s6.564-.4 6.535-5.354a16.761 16.761 0 0 0-2.287-7.989 12.153 12.153 0 0 0-4.354-4.622"
                                            fill="#bedffe"
                                        ></path>
                                        <path data-name="Path 83920" d="m125.674 124.268-4.185-2.419.051 1.633 4.1 2.368a.083.083 0 0 0 .124-.072v-1.318a.281.281 0 0 0-.039-.131.181.181 0 0 0-.051-.061" fill="#bedffe"></path>
                                        <path data-name="Path 83921" d="m118.405 151.661 8.48 4.9v-3.406l-8.48-4.9z" fill="#bedffe"></path>
                                        <path data-name="Path 83922" d="m110.594 156.355 16.291 9.3v-2.594l-16.291-9.3z" fill="#bedffe"></path>
                                        <path data-name="Path 83923" d="m55.818 125.098 21.463 12.246v-2.6l-21.463-12.248z" fill="#bedffe"></path>
                                        <path data-name="Path 83924" d="m80.982 139.458 27.274 15.564v-2.6l-27.274-15.566z" fill="#bedffe"></path>
                                        <path data-name="Path 83925" d="m55.818 130.071 11.916 6.8v-2.6l-11.916-6.8z" fill="#bedffe"></path>
                                        <path data-name="Path 83926" d="m70.656 138.54 24.255 13.841v-2.6L70.656 135.94z" fill="#bedffe"></path>
                                        <path data-name="Path 83927" d="m97.639 153.937 21.235 12.117v-2.6l-21.235-12.118z" fill="#bedffe"></path>
                                        <path data-name="Path 83928" d="m121.407 167.499 5.478 3.127v-2.6l-5.478-3.127z" fill="#bedffe"></path>
                                        <path data-name="Path 83929" d="m55.817 135.046 71.067 40.553v-2.6l-71.067-40.555z" fill="#bedffe"></path>
                                        <path data-name="Path 83930" d="m55.818 140.019 11.916 6.8v-2.6l-11.916-6.8z" fill="#bedffe"></path>
                                        <path data-name="Path 83931" d="m70.656 148.487 24.255 13.841v-2.6l-24.255-13.841z" fill="#bedffe"></path>
                                        <path data-name="Path 83932" d="m97.639 163.884 21.235 12.118v-2.6l-21.235-12.118z" fill="#bedffe"></path>
                                        <path data-name="Path 83933" d="m121.407 177.447 5.478 3.127v-2.6l-5.478-3.127z" fill="#bedffe"></path>
                                        <path data-name="Path 83934" d="m80.982 159.353 27.274 15.563v-2.6l-27.274-15.564z" fill="#bedffe"></path>
                                        <path data-name="Path 83935" d="m55.818 144.993 21.463 12.247v-2.6l-21.463-12.247z" fill="#bedffe"></path>
                                        <path data-name="Path 83936" d="m110.594 176.25 16.291 9.3v-2.6l-16.291-9.3z" fill="#bedffe"></path>
                                        <path data-name="Path 83937" d="m96.802 139.309 8.48 4.9v-3.406l-8.48-4.9z" fill="#bedffe"></path>
                                        <path data-name="Path 83938" d="m75.203 126.955 8.479 4.9v-3.406l-8.479-4.9z" fill="#bedffe"></path>
                                        <path data-name="Path 83939" d="m53.601 114.601 8.48 4.9v-3.406l-8.48-4.9z" fill="#bedffe"></path>
                                        <path data-name="Path 83940" d="m113.314 117.32-4.186-2.418.052 1.63 4.1 2.368a.083.083 0 0 0 .124-.072v-1.317a.281.281 0 0 0-.039-.132.187.187 0 0 0-.049-.059" fill="#bedffe"></path>
                                        <path data-name="Path 83941" d="m100.954 110.369-4.181-2.418.051 1.632 4.1 2.366a.082.082 0 0 0 .123-.071v-1.317a.294.294 0 0 0-.039-.132.2.2 0 0 0-.051-.059" fill="#bedffe"></path>
                                        <path data-name="Path 83942" d="m88.593 103.419-4.184-2.417.051 1.63 4.1 2.368a.083.083 0 0 0 .124-.071v-1.318a.29.29 0 0 0-.039-.132.183.183 0 0 0-.051-.06" fill="#bedffe"></path>
                                        <path data-name="Path 83943" d="m76.234 96.469-4.185-2.417.052 1.632 4.1 2.367a.083.083 0 0 0 .124-.072v-1.318a.269.269 0 0 0-.039-.131.185.185 0 0 0-.05-.061" fill="#bedffe"></path>
                                        <path data-name="Path 83944" d="m63.874 89.521-4.185-2.417.052 1.631 4.1 2.366a.083.083 0 0 0 .124-.072v-1.317a.282.282 0 0 0-.039-.132.158.158 0 0 0-.051-.059" fill="#bedffe"></path>
                                        <path data-name="Path 83945" d="m53.496 99.352 1.928 1.062c.1-2.342 1.182-3.78 2.715-3.876l-.849-2.821c-2.172.166-3.7 2.257-3.794 5.636" fill="#a1c0db"></path>
                                        <path
                                            data-name="Path 83946"
                                            d="M60.026 94.405a4.928 4.928 0 0 0-2.736-.692l.849 2.82a3.5 3.5 0 0 1 1.9.489c2.573 1.418 4.684 5.428 4.7 8.937s-2.056 5.211-4.63 3.792-4.685-5.427-4.705-8.936c0-.14.007-.273.013-.406l-1.929-1.062c0 .134-.005.272 0 .411.03 4.953 3.008 10.609 6.64 12.611s6.564-.4 6.535-5.353a16.751 16.751 0 0 0-2.287-7.99 12.161 12.161 0 0 0-4.354-4.622"
                                            fill="#bedffe"
                                        ></path>
                                        <path data-name="Path 83947" d="m26.821 40.805-7.147-4.127v23.731l7.147 4.127z" fill="#bedffe"></path>
                                        <path data-name="Path 83948" d="m36.209 52.506-7.148-4.127v17.452l7.148 4.127z" fill="#bedffe"></path>
                                        <path data-name="Path 83949" d="m45.608 44.598-7.147-4.127v30.785l7.147 4.127z" fill="#bedffe"></path>
                                        <path data-name="Path 83950" d="m18.33 108.457 21.463 12.247v-2.6L18.33 105.862z" fill="#bedffe"></path>
                                        <path data-name="Path 83951" d="m18.33 124.558 30.15 17.093v-2.6l-30.15-17.093z" fill="#bedffe"></path>
                                        <path data-name="Path 83952" d="m18.33 116.472 24.79 14.218v-2.6l-24.79-14.215z" fill="#bedffe"></path>
                                    </g>
                                </g>
                                <g data-name="Group 28519">
                                    <g data-name="Group 28518" transform="translate(614.205 204)" clip-path="url(#b)">
                                        <path data-name="Path 83697" d="M107.653 356.959c2.784 3.779-6.752 8.161-21.3 9.79s-28.6-.115-31.382-3.893 6.752-8.161 21.3-9.79 28.6.115 31.382 3.893" fill="#c3cfdd"></path>
                                        <path data-name="Path 83698" d="M45.055 310.085c4.7 2.771 1.227 11.425-7.749 19.33s-20.058 12.067-24.755 9.3-1.227-11.425 7.749-19.33 20.058-12.067 24.755-9.3" fill="#c3cfdd"></path>
                                        <path
                                            data-name="Path 83699"
                                            d="M102.405 340.547s-17.582-.469-21.733.145c0 0-10.031 8.424-26.591 10.227v10.184s6.9 6.29 18.869 1.841v-1.381s13.653.767 20.71-1.687c0 0 13.653-2.3 14.88-11.352 0 0-.614-6.9-6.136-7.977"
                                            fill="#596a95"
                                        ></path>
                                        <path
                                            data-name="Path 83700"
                                            d="M72.951 362.944v-1.38s13.653.767 20.71-1.688c0 0 13.653-2.3 14.881-11.352a12.257 12.257 0 0 0-.747-2.988c-.368 5.548-2.386 6.869-2.386 6.869-14.16 10.45-32.648 6.727-32.648 6.727a25.074 25.074 0 0 1-18.679-1.965v3.939s6.9 6.289 18.869 1.841"
                                            fill="#203359"
                                        ></path>
                                        <path data-name="Path 83701" d="M85.497 340.418c-.408.009-.8.02-1.176.033a7.388 7.388 0 0 1 .652 4.4h.972a8.213 8.213 0 0 0-.448-4.426" fill="#203359"></path>
                                        <path data-name="Path 83702" d="M89.228 340.392h-1.194a7.4 7.4 0 0 1 .684 4.445h.972a8.207 8.207 0 0 0-.461-4.441" fill="#203359"></path>
                                        <path data-name="Path 83703" d="m92.584 340.426-1.2-.017a7.4 7.4 0 0 1 .675 4.416h.973a8.211 8.211 0 0 0-.448-4.4" fill="#203359"></path>
                                        <path
                                            data-name="Path 83704"
                                            d="M45.668 311.643c-.826-2.346-3.426-6.519-11.314-4.829 0 0-.954 9.515-8.541 11.05s-9.121 1.841-9.121 1.841l-4.6 4.755-3.989 3.427s.46 6.7 2.3 7.926 8.9 3.068 11.352 0 4.6-5.88 4.6-5.88v-1.637a95.2 95.2 0 0 0 9.051-4.449 37.512 37.512 0 0 0 5.863-4.278c4.408-4.645 4.4-7.926 4.4-7.926"
                                            fill="#596a95"
                                        ></path>
                                        <path
                                            data-name="Path 83705"
                                            d="M10.403 335.813c1.841 1.227 8.9 3.068 11.352 0s4.6-5.881 4.6-5.881v-1.636a95.2 95.2 0 0 0 9.051-4.449 37.494 37.494 0 0 0 5.863-4.278c4.408-4.645 4.4-7.926 4.4-7.926a8.533 8.533 0 0 0-.569-1.273c-1.553 5.933-4.915 8.49-4.915 8.49-6.293 5.42-15.384 8.107-15.384 8.107v1.337a53.364 53.364 0 0 1-4.545 5.631c-1.836 1.789-11.033 0-11.033 0a3.83 3.83 0 0 0 1.181 1.877"
                                            fill="#203359"
                                        ></path>
                                        <path data-name="Path 83706" d="M32.98 310.507a7.327 7.327 0 0 1 3.856 3.093l.719-.645a8.089 8.089 0 0 0-3.8-3.317z" fill="#203359"></path>
                                        <path data-name="Path 83707" d="M30.828 312.63a7.327 7.327 0 0 1 3.856 3.093l.719-.645a8.089 8.089 0 0 0-3.8-3.317z" fill="#203359"></path>
                                        <path data-name="Path 83708" d="M28.697 314.746a7.328 7.328 0 0 1 3.856 3.093l.719-.645a8.089 8.089 0 0 0-3.8-3.317z" fill="#203359"></path>
                                        <path data-name="Path 83709" d="m130.449 96.721-27.739 63.7-34.557-15.049-1.084 2.489 37.582 16.366 28.823-66.189z" fill="#203359"></path>
                                        <path data-name="Rectangle 19955" fill="#fff" d="m65.291 144.253 28.823-66.188 37.583 16.366-28.824 66.188z"></path>
                                        <path data-name="Path 83710" d="m121.15 104.796.827-1.9-28.416-12.444-.827 1.9z" fill="#cddef0"></path>
                                        <path data-name="Path 83711" d="m118.896 109.971.827-1.9-28.416-12.445-.827 1.9z" fill="#cddef0"></path>
                                        <path data-name="Path 83712" d="m116.725 114.959.827-1.9-28.416-12.445-.827 1.9z" fill="#cddef0"></path>
                                        <path data-name="Path 83713" d="m114.53 119.997.827-1.9-28.416-12.445-.827 1.9z" fill="#cddef0"></path>
                                        <path data-name="Path 83714" d="m112.201 125.347.827-1.9-28.418-12.445-.827 1.9z" fill="#cddef0"></path>
                                        <path data-name="Path 83715" d="m109.959 130.495.827-1.9L82.37 116.15l-.827 1.9z" fill="#cddef0"></path>
                                        <path data-name="Path 83716" d="m107.619 135.868.827-1.9-28.416-12.444-.827 1.9z" fill="#cddef0"></path>
                                        <path data-name="Path 83717" d="m105.256 141.287.827-1.9-28.416-12.445-.827 1.9z" fill="#cddef0"></path>
                                        <path data-name="Path 83718" d="m103.003 146.469.827-1.9-28.416-12.447-.827 1.9z" fill="#cddef0"></path>
                                        <path
                                            data-name="Path 83719"
                                            d="M121.673 131.824c.171-2.412-2.285-1.954-2.285-1.954.293 1.812-4.785 3.56-4.785 3.56-2.449 1.829-5.731-.934-5.731-.934a6.108 6.108 0 0 0 2.994-2.624 11.732 11.732 0 0 0 1.461-2.856 3.451 3.451 0 0 0 .19-.547 1.3 1.3 0 0 0-.6-1.626 1.258 1.258 0 0 0-1.167.451c-.039.051-.079.1-.121.152-1.982 2.395-7.229 4.733-7.229 4.733-3.85.781-7.368 5.8-7.862 6.82s-14.98.2-14.98.2l.374 17c3.8.011 12.153-4.31 15.045-5.87 0 0 4.2-1.754 7.78-.827 5.385 1.692 10.277.04 11.846-.236 1.5-.264 1.661-1.955 1.678-2.622l.133-.08c3.956-2.491.844-5.419.844-5.419 3.834-2.046.62-4.277.62-4.277a5.805 5.805 0 0 0 1.8-3.034"
                                            fill="#f3a984"
                                        ></path>
                                        <path
                                            data-name="Path 83720"
                                            d="M105.931 146.37c-4.369-1.87-9.877-2.01-15.734 1.923a12.871 12.871 0 0 1-8.347 2.4l.077 3.5c3.8.01 12.153-4.31 15.045-5.871 0 0 4.2-1.754 7.78-.827 5.385 1.692 10.277.041 11.846-.235a1.753 1.753 0 0 0 .807-.359c-5.558.791-7.106 1.339-11.474-.53"
                                            fill="#ce8463"
                                        ></path>
                                        <path data-name="Path 83721" d="M2.634 142.148s-.031 5.191.952 7.033c0 0 9.5 24.239 10.726 25.958 0 0 4.823-19 3.8-30.336 0 0-4.276 1.852-15.478-2.655" fill="#f3a984"></path>
                                        <path
                                            data-name="Path 83722"
                                            d="M3.582 149.181s9.5 24.24 10.726 25.958c0 0 .77-3.035 1.629-7.4-2.442-5.611-10.213-14.141-9.08-17.43a14.691 14.691 0 0 0 .4-6.52 55.024 55.024 0 0 1-4.628-1.64s-.031 5.192.952 7.033"
                                            fill="#ce8463"
                                        ></path>
                                        <path
                                            data-name="Path 83723"
                                            d="M7.808 68.976s-11.281 9.873-6.723 32.46c0 0 2.8 25.159 2.628 35.284 0 0 10.184 3.068 15.591 0 0 0-3.075-32.522-9.573-39.272 0 0-4.33-24.625-1.923-28.471"
                                            fill="#cb2329"
                                        ></path>
                                        <path
                                            data-name="Path 83724"
                                            d="M19.155 135.698a6.634 6.634 0 0 1-5.806 1.957c-6.22-1.146-9.741-5.907-9.784-7.371l-.537.523a7.655 7.655 0 0 0-1.35 3.73l-.28 3.541a8.48 8.48 0 0 0 .515 3.563c1.477 2.613 5.821 7.414 17.165 4.852l.306-4.35c.093-1.322-.1-4.614-.229-6.446"
                                            fill="#fff"
                                        ></path>
                                        <path
                                            data-name="Path 83725"
                                            d="M85.173 224.921c0-14.727-5.727-47.453-5.727-47.454s-4.933 3.46-14.559 4.457c-8.843 1.634-20.2 1.787-29.622-4.457 0 0-16.6-10.57-20.454-13.5 0 0-3.273 22.091 0 35.591s-2.091 39.681-1.455 45.818-7.954 26.182-7.136 41.318c0 0 1.227 39.273 2.454 41.318s6.955 4.091 12.273-2.045 13.452-12.274 13.886-16.774-.794-22.5 1.66-39.272c2.452-16.757 10.1-35.576 10.114-35.611 7.552 19.591 4.613 30.7 4.613 30.7s-7.363 27.409-5.727 33.954 6.545 48.682 8.591 51.954c0 0 16.244 0 26.591-10.227 0 0-4.5-34.772-4.5-45s9-56.045 9-70.772"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            data-name="Path 83726"
                                            d="M35.264 177.467c9.419 6.244 20.779 6.092 29.622 4.457a65.475 65.475 0 0 0 14.559-4.457l-1.342-15.526-.09-1.042.038-.034-1.266-26.353c-.92-1.841 1.534-23.867 1.534-23.867-.307-14.356-11.352-27.064-11.352-27.064-3.375-3.375-14.42-19.023-14.42-19.023-3.989.307-27.613-7.057-27.613-7.057a8.8 8.8 0 0 0-2.851-.12c-6.3.858-12.441 5.26-15.417 7.688a12.8 12.8 0 0 0-3.106 4.447c-6.482 16.7 1.5 35.509 9.715 50.882 9.511 17.795 1.535 43.566 1.534 43.568 3.857 2.93 20.454 13.5 20.454 13.5"
                                            fill="#ed1c24"
                                        ></path>
                                        <path
                                            data-name="Path 83727"
                                            d="M78.317 110.646C78.01 96.29 66.965 83.582 66.965 83.582c-3.375-3.375-14.42-19.022-14.42-19.022s.065 2.194.446 5.252c1.068 6.582 9.638 18.219 12.309 21.718l.125.152.006.006c.224.278.445.569.664.867 5.434 7.411 9.282 20.718 8.268 27.551-1.311 8.836.89 14.671.89 14.671l1.551.075-.21-1.652c-.213-5.172 1.724-22.553 1.724-22.553"
                                            fill="#cb2329"
                                        ></path>
                                        <path
                                            data-name="Path 83728"
                                            d="m45.105 230.773-4.792-11.393a91.176 91.176 0 0 1-.509 7.231l-.018-.008a138.143 138.143 0 0 1-2.536 14.077 81.713 81.713 0 0 1-2.867 9.275q-.217.5-.453.984a92.792 92.792 0 0 0-1.795 5.555 75.92 75.92 0 0 0-1.132 12.032c.373 10.6 1.392 30.621 3.91 38.6-.006-.955-.02-3.868 0-4.74.027-1.049.426-10.019.426-10.019a177.755 177.755 0 0 1 1.582-23.51c2.1-14.373 8.029-30.262 9.682-34.515a12.258 12.258 0 0 0-1.5-3.569"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            data-name="Path 83729"
                                            d="m79.445 177.466-1.6-20.958s-19.3-.463-30.116-8.3-2.95-32.428-2.95-32.428-13.243 27.568 1.18 37.433c0 0 1.863 2.074 6.59 3.654h.009c.662.221 1.38.432 2.157.626 2.927.979 8.111 3.191 11 7.261l.1.158.327.6c2.29 4.263 4.567 9.883 4.356 15.118z"
                                            fill="#cb2329"
                                        ></path>
                                        <path
                                            data-name="Path 83730"
                                            d="M64.875 24.277c-2.122-1.225-3.843-.247-3.843 2.186a8.463 8.463 0 0 0 3.843 6.623c2.122 1.225 3.843.247 3.843-2.186a8.462 8.462 0 0 0-3.843-6.623m0 7.52a5.984 5.984 0 0 1-2.717-4.684c0-1.72 1.217-2.412 2.717-1.546a5.984 5.984 0 0 1 2.717 4.683c0 1.72-1.217 2.412-2.717 1.546"
                                            fill="#596a95"
                                        ></path>
                                        <path
                                            data-name="Path 83731"
                                            d="M52.548 64.86s-14.916.935-27.981-6.154c0 0 2.208-9.494 2.055-11.334l15.187-11.654 8.68-11.506 6.354-11.2 3.688 2.951s4.289 4.106 3.215 8.555c0 0-2.083 4.449-1.425 6.136 0 0 2.141 4.858-.058 8.642a57.7 57.7 0 0 0-4.04 9.767l-6.29 3.989a4.834 4.834 0 0 0-.767 3.682c.307 2.454 1.381 8.131 1.381 8.131"
                                            fill="#f3a984"
                                        ></path>
                                        <path data-name="Path 83732" d="m68.001 28.681-10.707 1.558-.406 1.105 10.671-1.553z" fill="#596a95"></path>
                                        <path
                                            data-name="Path 83733"
                                            d="M26.06 50.546s-5.523-13.5-8.386-20.863S18.083 3.502 39.56.024c0 0 20.213-1.023 21.459 10.227a19.4 19.4 0 0 1-1.618 9 7.7 7.7 0 0 1 0 6.954c-1.841 3.887-3.273 11.659-1.227 12.886 0 0 2.864 2.455 4.091.2 0 0 .818 12.478-3.682 15.546 0 0-3.273 2.045-6.648-1.79a8.751 8.751 0 0 0 4.449-7.824c.153-5.829-1.816-12.579-5.894-7.67s-6.686 13.96-6.686 13.96a16.417 16.417 0 0 1-17.744-.972"
                                        ></path>
                                        <path
                                            data-name="Path 83734"
                                            d="M53.324 40.986c-.905-1.625-2.249-1.548-3 .171a5.2 5.2 0 0 0-.261.768v.011a6.86 6.86 0 0 0-.164.87 19.393 19.393 0 0 1-5.653 9.836s1.8 5.951-.888 10.143c0 0 7.114 1.851 9.234 1.771 0 0-.054-.09-.147-.256l-1.24-7.293a5.316 5.316 0 0 1 .731-3.957 8.353 8.353 0 0 1 .14-4.148 7.249 7.249 0 0 1 .61-.688 1.8 1.8 0 0 0 .478-.427 3.254 3.254 0 0 0 .44-.745 7.689 7.689 0 0 0-.278-6.055"
                                            fill="#ce8463"
                                        ></path>
                                        <path
                                            data-name="Path 83735"
                                            d="M43.013 1.458a28.241 28.241 0 0 0-7.769 1.362c-6 2.459-16.023 8.059-15.052 17.767 1.377 13.767 3.169 27.141 9.648 27.141s3.062-21.634 10.476-29.694c6.986-7.6 19.773-15.376 2.7-16.573"
                                        ></path>
                                        <path
                                            data-name="Path 83736"
                                            d="m85.418 135.269-10.164-.494a31.391 31.391 0 0 1 1.126 4.55s.959 4.621-3 10.323a46.193 46.193 0 0 1-5.859 5.6c2.967.814 10.518.943 10.518.943a7.848 7.848 0 0 0 5.594-4.1c2.589-2.4 3.431-8.457 3.7-12.583l.023-.367a4.05 4.05 0 0 0-1.942-3.872"
                                            fill="#fff"
                                        ></path>
                                        <path
                                            data-name="Path 83737"
                                            d="M55.485 68.612c-1.711-2.375-2.9-4.053-2.9-4.053-3.989.307-27.613-7.057-27.613-7.057a8.793 8.793 0 0 0-2.851-.119 24.854 24.854 0 0 0-7.947 2.71s11.269 11.146 41.311 8.519"
                                            fill="#fff"
                                        ></path>
                                    </g>
                                </g>
                                <g data-name="Group 28542" style="mix-blend-mode: luminosity; isolation: isolate;">
                                    <path data-name="Path 83979" d="m757.089 532.5 22.316 12.884 64.1-37.136-22.316-12.884z" fill="#ddecf2"></path>
                                    <path data-name="Path 83980" d="m821.207 517.307-15.036-8.739-.158-72.079 15.036 8.739z" fill="#bad4f5"></path>
                                    <path data-name="Path 83981" d="m822.22 427.133-16.207 9.356 15.036 8.739 16.21-9.36z" fill="#bad4f5"></path>
                                    <path data-name="Path 83982" d="m837.417 507.947-16.21 9.361-.158-72.079 16.21-9.361z" fill="#d9e9ff"></path>
                                    <path data-name="Path 83983" d="m800.059 529.58-15.036-8.739-.122-59.386 15.036 8.735z" fill="#bedffe"></path>
                                    <path data-name="Path 83984" d="m816.158 460.823-16.222 9.365-15.036-8.738 16.219-9.365z" fill="#d9e9ff"></path>
                                    <path data-name="Path 83985" d="m816.281 520.214-16.223 9.365-.122-59.391 16.222-9.365z" fill="#d9e9ff"></path>
                                    <path data-name="Path 83986" d="m779.014 541.702-15.036-8.739-.068-39.992 15.036 8.739z" fill="#bad4f5"></path>
                                    <path data-name="Path 83987" d="m795.156 492.349-16.21 9.361-15.036-8.739 16.21-9.361z" fill="#edf6ff"></path>
                                    <path data-name="Path 83988" d="m795.221 532.341-16.208 9.361-.069-39.992 16.21-9.361z" fill="#d9e9ff"></path>
                                </g>
                                <g data-name="Group 28544" style="mix-blend-mode: luminosity; isolation: isolate;">
                                    <g data-name="Group 28543" transform="translate(698.978 433.609)" clip-path="url(#c)">
                                        <path data-name="Path 83989" d="M55.468 14.688c12.624 7.288 12.549 19.149-.167 26.49s-33.258 7.385-45.883.1-12.549-19.149.167-26.49 33.258-7.385 45.883-.1" fill="#ddecf2"></path>
                                        <path
                                            data-name="Path 83990"
                                            d="M62.5 17.596h-3.412a22.235 22.235 0 0 0-5.488-4.332c-11.867-6.851-31.285-6.851-43.152 0a22.239 22.239 0 0 0-5.488 4.331H1.548v8.061c-.028 4.537 2.936 9.08 8.9 12.521 11.867 6.851 31.285 6.851 43.152 0 5.962-3.442 8.926-7.984 8.9-12.521z"
                                            fill="#bad4f5"
                                        ></path>
                                        <path
                                            data-name="Path 83991"
                                            d="M10.448 13.264a22.237 22.237 0 0 0-5.488 4.331H1.548v8.061c-.028 4.537 2.936 9.08 8.9 12.521.183.106.373.2.56.307v-8.125l5.858-19.921a34.329 34.329 0 0 0-6.418 2.825"
                                            fill="#a1c0db"
                                        ></path>
                                        <path data-name="Path 83992" d="M10.448 5.138c11.867-6.851 31.285-6.851 43.152 0s11.867 18.063 0 24.914-31.282 6.848-43.152 0-11.867-18.062 0-24.914" fill="#edf6ff"></path>
                                        <path data-name="Path 83993" d="M32.024 0c-7.821 0-15.643 1.713-21.576 5.138-11.867 6.851-11.867 18.063 0 24.914.183.106.374.2.56.307l21.016-10z" fill="#a1c0db"></path>
                                        <path data-name="Path 83994" d="M1.954 20.357h30.071V0c-7.822 0-15.643 1.713-21.576 5.138C3.301 9.265.491 14.972 1.954 20.357" fill="#bedffe"></path>
                                    </g>
                                </g>
                            </g>
                        </svg> -->
                    <!-- </div> -->
                   
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
                                        <div>Written By :<br /></div>
                                        <b class="nameTag">Amit Raje</b>
                                    </div>
                                </div>
                                <span class="tooltiptext">
                                    <b>Amit Raje</b>is an experienced marketer who has worked in various Fintechs and leading Financial companies in India. With focused experience in Digital, Amit has pioneered multiple digital commerce in
                                    India. Now, close to two decades later, he is the vice president and head of the D2C business department. He masters the skill of strategic management, also being certified in it from IIMA. He has
                                    challenged his challenges and contributed his efforts in this journey of digital transformation.
                                    <a href="https://www.linkedin.com/in/amit-raje-digitalexpert/?utm_source=share&amp;utm_campaign=share_via&amp;utm_content=profile&amp;utm_medium=android_app" class="linkedin" target="_blank">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
                            <div class="vSeperation"></div>
                            <div class="blogsTooltipSavings tol2">
                                <div class="authorName">
                                    <div class="authorImg sa-author2"></div>
                                    <div class="nameTitle">
                                        <div>Reviewed By :<br /></div>
                                        <b class="nameTag">Prasad Pimple</b>
                                    </div>
                                </div>
                                <span class="tooltiptext">
                                    <b>Prasad Pimple</b>has a decade-long experience in the Life insurance sector and as EVP, Kotak Life heads Digital Business. He is responsible for developing user friendly product journeys, creating
                                    consumer awareness and helping consumers in identifying need for life insurance solutions. He has 20+ years of experience in creating and building business verticals across Insurance, Telecom and Banking
                                    sectors
                                    <a href="https://www.linkedin.com/in/prasad-pimple-54ba489/?utm_source=share&amp;utm_campaign=share_via&amp;utm_content=profile&amp;utm_medium=android_app" class="linkedin" target="_blank">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
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
                        <a href="<?php echo $actual_link ?>#whatisulip" class="tocContent"><span>What is ULIP (Unit Linked Insurance Plan)?</span></a>
                        <a href="<?php echo $actual_link ?>#whydo" class="tocContent"><span>Why do you Need ULIP Plans?</span></a>
                        <a href="<?php echo $actual_link ?>#bestUlipsPlans" class="tocContent"><span>ULIP Plans from Kotak Life Insurance</span></a>
                        <a href="<?php echo $actual_link ?>#" class="tocContent"><span>What are Some Key Features of ULIPs? </span></a>
                        <a href="<?php echo $actual_link ?>#importanceOfUlip" class="tocContent"><span>Importance of ULIP in Personal Finance  </span></a>
                        <a href="<?php echo $actual_link ?>#ulipCalculator" class="tocContent"><span>What is a ULIP Calculator? </span></a>
                        <a href="<?php echo $actual_link ?>#calculatingUlip" class="tocContent"><span>Calculating ULIP Returns Using the Power of Compounding</span></a>
                        <a href="<?php echo $actual_link ?>#howDoesUlipWork" class="tocContent"><span>How Does a ULIP Work? </span></a>
                        <a href="<?php echo $actual_link ?>#benefitsOfUlip" class="tocContent"><span>What are the Benefits of ULIPs? </span></a>
                        <a href="<?php echo $actual_link ?>#whichinvestor" class="tocContent"><span>Which Investor Class Are ULIPs Most Suited for? </span></a>
                        <a href="<?php echo $actual_link ?>#charges" class="tocContent"><span>Types of ULIP Charges</span></a>
                        <a href="<?php echo $actual_link ?>#lockin" class="tocContent"><span>Lock-in Period of ULIP</span></a>
                        <a href="<?php echo $actual_link ?>#whoshould" class="tocContent"><span>Who Should Invest in ULIPs?</span></a>
                        <a href="<?php echo $actual_link ?>#" class="tocContent"><span>What is the ULIP Calculator? </span></a>
                        <a href="<?php echo $actual_link ?>#howto" class="tocContent"><span>How to Maximize ULIP Returns? </span></a>
                        <a href="<?php echo $actual_link ?>#whyChooseKotakUlip" class="tocContent"><span>Why Choose Kotak Life ULIP Policy?</span></a>
                        <a href="<?php echo $actual_link ?>#typeOfUlipFunds" class="tocContent"><span>What Type of Funds Do ULIP Plans Include?</span></a>





                    </div>
                    <div>
                        <a href="<?php echo $actual_link ?>#manageUlipFunds" class="tocContent"><span>How to Manage ULIP Funds? </span></a>
                        <a href="<?php echo $actual_link ?>#whatIsUlipNav" class="tocContent"><span>What is ULIP NAV?  </span></a>
                        <a href="<?php echo $actual_link ?>#testimonial" class="tocContent"><span>Testaments </span></a>
                        <a href="<?php echo $actual_link ?>#howToFindBestUlipPlan" class="tocContent"><span>How to Find the Best ULIP Plans?</span></a>
                        <a href="<?php echo $actual_link ?>#whyInvestinUlip" class="tocContent"><span>Why Should You Invest in ULIPs? </span></a>
                        <a href="<?php echo $actual_link ?>#whichUlipfundsAreBest" class="tocContent"><span>Which ULIP Funds are Best Suited for You?</span></a>
                        <a href="<?php echo $actual_link ?>#variousFactorsConsiderBuyingUlip" class="tocContent"><span>What are the Various Factors to Consider Before Buying ULIPs? </span></a>
                        <a href="<?php echo $actual_link ?>#stepsToBuyUlip" class="tocContent"><span>Steps to Buy ULIP Online </span></a>
                        <a href="<?php echo $actual_link ?>#document" class="tocContent"><span>What are the Documents Required to Buy ULIPs </span></a>
                        <a href="<?php echo $actual_link ?>#ulipVsMutualFunds" class="tocContent"><span>ULIP vs Mutual Funds (MF) vs Fixed Deposits (FD) </span></a>
                        <a href="<?php echo $actual_link ?>#ulipWealthCreation" class="tocContent"><span>ULIP for Wealth Creation</span></a>
                        <a href="<?php echo $actual_link ?>#claimTaxBenefits" class="tocContent"><span>How to Claim Tax Benefits on ULIPs?  </span></a>
                        <a href="<?php echo $actual_link ?>#mythsOfUlip" class="tocContent"><span>Myths About Investing in ULIPs </span></a>
                        <a href="<?php echo $actual_link ?>#ulip-faqs" class="tocContent"><span>FAQs </span></a>



                    </div>
                    <a id="readMoreContent" class="tocReadMore">Read More</a>
                </div>
            </div>
        </section>


        <section id="whatisulip" class="what-is-ulip">
            <div class="midWrapper">
                       <div>
                            <h2 class="whatareulips-title">What is ULIP (Unit Linked Insurance Plan)?  </h2>
                            <p class="whatareulips-desc">
                            ULIP means Unit Linked Insurance Plan. It is a kind of insurance tool that offers both life insurance coverage and investment opportunities in a single plan. Unlike traditional insurance plans that are focused on providing life cover, ULIPs allocate a portion of the premium towards insurance and invest the remaining amount in various market-linked funds.
                            </p>
                        </div>

            </div>
        </section>
        <section class="hid" id="whatareulips">
            <div class="greyBg">
                <div class="midWrapper">
                    <div class="whatareulips-grid">
                        <div>
                            <h2 class="whatareulips-title">What are ULIPs or Unit Linked Insurance Plans?</h2>
                            <p class="whatareulips-desc">
                                ULIP stands for Unit Linked Insurance Plans, the financial product that allow you to build wealth and cover your loved ones financially. In ULIPs, a portion of your premium is allocated to your life cover,
                                while the remainder is allocated to a shared pool of money known as a fund. This fund is then invested in equities, debts, or a combination of the two. The performance of the fund you choose determines your
                                returns.
                            </p>
                        </div>
                        <div class="whatIsSavingsPlan-img">
                            <div class="savings-videos">
                                <div class="iframe-responsive">
                                    <iframe
                                        id="kotakVideo"
                                        title="Benefits of ULIP | यूलिप के फायदे | Kotak Life"
                                        frameborder="0"
                                        controls="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen
                                    ></iframe>
                                </div>
                                <style>
                                    .ytp-copylink-button {
                                        display: none !important;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="saving-blog mt-30 newulip newalignulip">
                  <div class="midWrapper">
                    <div class="termblog-sick"  id="saving-blogs">
                       <div>
                           <a class="term-blg" href="https://www.kotaklife.com/ulip-plans/ulip-returns-in-5-years">ULIP Returns in 5 Years</a>
                       </div>
                       <div>
                           <a class="term-blg" href="https://www.kotaklife.com/ulip-plans/ulip-returns-in-10-years" target="_blank">ULIP Returns in 10 Years</a>
                       </div>
                       <div>
                           <a class="term-blg" href="https://www.kotaklife.com/ulip-plans/ulip-returns-in-15-years" target="_blank">ULIP Returns in 15 Years</a>
                       </div>
                       <div><a class="term-blg" href="https://www.kotaklife.com/ulip-plans/ulip-returns-in-20-years" target="_blank">ULIP Returns in 20 Years</a></div>
                       <div><a class="term-blg" href="https://www.kotaklife.com/ulip-plans/minimum-lock-in-period-for-ulip" target="_blank">Minimum Lock-in Period for ULIP</a></div>
                       <div><a class="term-blg" href="https://www.kotaklife.com/ulip-plans/benefits-of-ulip" target="_blank">Benefits of ULIP</a></div>
                       <div><a class="term-blg" href=" https://www.kotaklife.com/ulip-plans/how-ulip-works" target="_blank">How ULIP Works?</a></div>
                       <div><a class="term-blg" href=" https://www.kotaklife.com/ulip-plans/ulip-renewal" target="_blank">ULIP Renewal</a></div>
                    </div>
                  </div>
           </section>

           <section id="whydo" class="what-is-ulip">
                  <div class="midWrapper">
                             <div>
                                  <h2 class="whatareulips-title"> Why do you Need ULIP Plans?  </h2>
                                  <p class="whatareulips-desc">If you are someone looking for insurance and investment benefits, ULIP plans can give you both. They offer the benefits of insurance along with investment growth. These plans work by investing a portion of your premium in market-linked tools for wealth generation and the rest of the premium amount is invested in insurance. Let us take a look at other benefits of these plans:
                                      </p>
                              </div>

                               <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Dual Benefit of Insurance and Investment
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           ULIPs offer the dual benefit of insurance protection and investment growth under a single plan. As mentioned above, a portion of the premium paid towards unit-linked insurance plans goes towards providing life cover ensuring financial security for your loved ones in case of any unfortunate event. At the same time, the remaining portion is invested in various funds such as equity, debt, or a combination of both, allowing you to accumulate wealth over time.
                                           </p>
                                       </div>
                                 </div>

                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Flexibility in Investment Options   </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           One of the key attractions of unit-linked insurance plans is the flexibility they offer in their investment options. You can choose from a range of funds with varying degrees of risk and return potential as per your risk tolerance. Whether you prefer the stability of debt funds or the growth of equity funds, ULIPs provide you with the freedom to adjust your investment strategy according to your preferences.
                                           </p>
                                       </div>
                                 </div>

                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Transparency and Control  </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           Unlike traditional insurance plans, where the investment component is not transparent, unit-linked insurance plans offer complete transparency in terms of where your money is being invested. You have the freedom to track the investment performance and make changes to your fund allocation as your requirement. This level of control empowers you to optimize your returns and mitigate risks effectively. </p>
                                       </div>
                                 </div>
      
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Tax Benefits  </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           There are many attractive tax benefits of ULIPs, making them a tax-efficient investment option. The premiums paid towards ULIPs are eligible for tax deduction under Section 80C of the Income Tax Act, up to a specified limit. Moreover, the maturity proceeds and death benefits received from ULIPs are also tax-free under Section 10(10D), subject to certain conditions. </p>
                                       </div>
                                 </div>
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle"> Long-term Wealth Creation
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           Unit-linked insurance plans are best suited for long-term wealth creation. These plans encourage disciplined investing over a long period. By staying invested in these plans for a long time, you can benefit from the power of compounding. This can be used to get good returns over time. Whether you are saving for your child's education, retirement, or any other financial goal, ULIPs provide a systematic approach to wealth accumulation.</p>
                                       </div>
                                 </div>
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Cost-effective Investment Option
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">With online platforms and digitization, the costs of ULIPs have reduced, making them a cost-effective option. Traditional insurance plans involve high administrative and distribution charges, but unit-linked insurance plans offer competitive charges, and maximize the returns on your investment. They also offer an option to switch between funds without incurring additional charges, and provide flexibility at minimal costs. </p>
                                       </div>
                                 </div>
      
      
      
      
      
      
                  </div>
          </section>






        <section class="hid ulip-online-plan ulipplans" id="bestUlipsPlans">
            <div class="midWrapper">
                <h2 class="bestUlips-title">ULIP Plans from Kotak Life Insurance</h2>
                <p class="bestUlips-desc">
                Kotak Life offers several ULIP plans that best meet your requirements. You can understand the benefits, features, and investment strategies associated with these ULIP plans. The following are our top recommendations.  
                </p>
                <div class="kotak-e-term-plan" style="margin-top: 50px;">
                    <span class="onlineplan offlineplan">Online plan</span>
                    <div class="feats-sec kotat-online">
                        <div class="d-flex neweterm">
                            <h3>Kotak e-Invest</h3>
                            <div class="ml-auto tooltip">
                                <a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/assets/brochure/Kotak_e-Invest_-_Brochure1.PDF" title="Brochure" download="Brochure">
                                    <button class="broch-btn want-to-btn sep-btn" name="e-invest">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" foxified="">
                                            <defs>
                                                <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                    <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                    <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                </mask>
                                                <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                    <feoffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feoffset>
                                                    <fegaussianblur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></fegaussianblur>
                                                </filter>
                                                <clippath id="d63ic"><path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path></clippath>
                                            </defs>
                                            <g>
                                                <g>
                                                    <g filter="url(#d63ia)">
                                                        <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask='url("#d63ib")'></path>
                                                        <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </g>
                                                    <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path='url("#d63ic")'></path>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            fill="none"
                                                            stroke="#ed3237"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="20"
                                                            d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"
                                                        ></path>
                                                    </g>
                                                    <g><path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path></g>
                                                    <g><path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path></g>
                                                </g>
                                            </g>
                                        </svg> -->
                                        <div class="ulipsprite-image1 ulipdownload"></div>
                                    </button>
                                </a>
                                <span class="tooltiptext">Download Brochure</span>
                            </div>
                        </div>
                        <div class="roww mg-30 kotaksavcard list-1">
                            <div class="coll-md-6">
                                <div class="ds-flex ">
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
                                <div class="ulip-cta">
                                    <a
                                        rel="nofollow"
                                        target="_blank"
                                        href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card"
                                        title="invest in ULIP">
                                        Invest in ULIP
                                    </a>
                                </div>
                            </div>
                            <div class="coll-md-5 mar-side-left">
                            <div class="ulipsprite-image ulipperson"></div>
                                <!-- <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1039 621" width="100%">
                                    <title>Kotak-e-Invest</title>
                                    <defs>
                                        <image
                                            width="1039"
                                            height="610"
                                            id="svg-img1"
                                            href="data:image/png;base64,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"
                                        />
                                    </defs>
                                    <style></style>
                                    <use id="Background" href="#svg-img1" x="0" y="11" />
                                </svg> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kotak-e-term-plan" style="margin-top: 50px;">
                    <span class="onlineplan offlineplan">Online plan</span>
                    <div class="feats-sec kotat-online">
                        <div class="d-flex neweterm">
                            <h3>Kotak T.U.L.I.P</h3>
                            <div class="ml-auto tooltip">
                                <a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_T.U__.L__.I__.P_Brochure_19__.12__.2023_KL3__.pdf" title="Brochure" download="Brochure">
                                    <button class="broch-btn want-to-btn sep-btn" name="e-invest">
                                    <div class="ulipsprite-image1 ulipdownload"></div>
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" foxified="">
                                            <defs>
                                                <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                    <path fill="#fff" d="M8 5h44v44H8z"></path>
                                                    <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                </mask>
                                                <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                    <feoffset dy="3" in="SourceGraphic" result="FeOffset4175Out"></feoffset>
                                                    <fegaussianblur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2"></fegaussianblur>
                                                </filter>
                                                <clippath id="d63ic"><path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path></clippath>
                                            </defs>
                                            <g>
                                                <g>
                                                    <g filter="url(#d63ia)">
                                                        <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask='url("#d63ib")'></path>
                                                        <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    </g>
                                                    <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z"></path>
                                                    <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path='url("#d63ic")'></path>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            fill="none"
                                                            stroke="#ed3237"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="20"
                                                            d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0"
                                                        ></path>
                                                    </g>
                                                    <g><path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76"></path></g>
                                                    <g><path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0"></path></g>
                                                </g>
                                            </g>
                                        </svg> -->
                                    </button>
                                </a>
                                <span class="tooltiptext">Download Brochure</span>
                            </div>
                        </div>
                        <div class="roww mg-30 kotaksavcard list-1">
                            <div class="coll-md-12 w-100">
                                <div class="ds-flex side ">
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
                                <div class="ulip-cta tulip-cta">
                                    <a
                                        rel="nofollow"
                                        target="_blank"
                                        href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=product_card"
                                        title="invest in ULIP"
                                    >
                                        Invest in T.U.L.I.P
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


          



        <section class="hid ulip-offline" id="offlinePlans ">
            <div class="midWrapper">
                <div class="roww bestsavgsp">
                    <div class="coll-md-3">
                        <span class="onlineplan">Offline plan</span>
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
                                    <div>Kotak Single Invest Advantage Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc5">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Platinum </div>
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
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Invest Maxima</h3></div>
                                <div class="ml-auto tooltip">
                                    <a class="broch-btn want-to-btn brochers " href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/KotakInvestMaxima.pdf" download="Brochure" title="Kotak Invest Maxima"></a>
                                    <span class="tooltiptext">Download Brochure</span>
                                </div>
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
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Single Invest Plus</h3></div>
                                <div class="ml-auto tooltip">
                                    <a
                                        target="_blank"
                                        class="broch-btn want-to-btn brochers"
                                        href="https://www.kotaklife.com/assets/images/uploads/how_do_i/KotakSingleInvestPlus.pdf"
                                        title="Kotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest Plus"
                                        download="Brochure"
                                    ></a>
                                    <span class="tooltiptext">Download Brochure</span>
                                </div>
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
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Single Invest Advantage Plan</h3></div>
                                <div class="ml-auto tooltip">
                                    <a
                                        target="_blank"
                                        class="broch-btn want-to-btn brochers"
                                        href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf"
                                        title="Kotak Single Invest Advantage"
                                        download="Brochure"
                                    ></a>
                                    <span class="tooltiptext">Download Brochure</span>
                                </div>
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
                                        <li>Loyalty Additions to give a boost to your wealth</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="gspview" title="View Kotak Single Invest Advantage">View Kotak Single Invest Advantage</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op5">
                            <div class="d-flex">
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Platinum </h3></div>
                                <div class="ml-auto tooltip">
                                    <a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-platinum-Brochure.pdf" title="Kotak Platinum Plan" download="Brochure"></a>
                                    <span class="tooltiptext">Download Brochure</span>
                                </div>
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
                            <div class=""><a target="_blank" href="https://www.kotaklife.com/ulip-plans/kotak-platinum-plan" class="gspview" title="View Kotak Platinum Plan">View Kotak Platinum </a></div>
                        </div>
                        <div class="kotaksavcard accelcard op6">
                            <div class="d-flex">
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Ace Investment</h3></div>
                                <div class="ml-auto tooltip">
                                    <a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-ace-investment-brochure.pdf" title="Kotak Ace Investment" download="Brochure"></a>
                                    <span class="tooltiptext">Download Brochure</span>
                                </div>
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
                                <div><h3 class="accel" style="color: #036 !important; font-size: 28px !important;">Kotak Wealth Optima Plan</h3></div>
                                <div class="ml-auto tooltip">
                                    <a
                                        target="_blank"
                                        class="broch-btn want-to-btn brochers"
                                        href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Wealth-Optima-Plan-Brochure-Unit-Linked-Insurance-Plan.pdf"
                                        title="Kotak Wealth Optima Plan"
                                        download="Brochure"
                                    ></a>
                                    <span class="tooltiptext">Download Brochure</span>
                                </div>
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
        <section class="mobile-feat gspmobile-feat hide-desktop saving-off mobile-ulip-accord">
            <div class="midWrapper">
                <span class="onlineplan">Offline plan</span>
                <div class="gspaccbor">
                    <div class="accordion-div acc-div-mob accordion-btns">
                        <div class="bor">
                            <button name="tulip" class="accordion bor-top-zero" role="heading" aria-level="3"><p class="bor-top-rad">KOTAK T.U.L.I.P</p></button>
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
                                            <div class="ml-auto tooltip">
                                                <a
                                                    class="broch-btn want-to-btn brochers"
                                                    href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_T.U__.L__.I__.P_Brochure_19__.12__.2023_KL3__.pdf"
                                                    download="Brochure"
                                                ></a>
                                            </div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-tulip" class="gspview">View Kotak T.U.L.I.P</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor">
                            <button name="assured" class="accordion" role="heading" aria-level="3"><p class="bor-top-rad">KOTAK INVEST MAXIMA</p></button>
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
                        <div class="bor">
                            <button name="premier" class="accordion"><p>Kotak Single Invest Plus</p></button>
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
                        <div class="bor">
                            <button name="Premier" class="accordion"><p>Kotak Single Invest Advantage Plan</p></button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="Tokyo" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>One-time investment</li>
                                                        <li>Choice of 3 investment strategies</li>
                                                        <li>Loyalty Additions to give a boost to your wealth</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip">
                                                <a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf" download="Brochure"></a>
                                            </div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-single-invest-advantage" class="gspview">View Kotak Single Invest Advantage Plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor">
                            <button name="accordion" class="accordion"><p>Kotak Platinum </p></button>
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
                                            <div class="ml-auto tooltip">
                                                <a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-platinum-Brochure.pdf" download="Brochure"></a>
                                            </div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-platinum-plan" class="gspview">View Kotak Platinum </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor">
                            <button name="smartlife" class="accordion"><p>Kotak Ace Investment</p></button>
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
                                            <div class="ml-auto tooltip">
                                                <a class="broch-btn want-to-btn brochers" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/kotak-ace-investment-brochure.pdf" download="Brochure"></a>
                                            </div>
                                        </div>
                                        <div class=""><a href="https://www.kotaklife.com/ulip-plans/kotak-ace-investment-plan" class="gspview">View Kotak Ace Investment</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor">
                            <button name="Premier" class="accordion"><p>Kotak Wealth Optima Plan</p></button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="six" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Choice of two investment strategies</li>
                                                        <li>Options to be covered till 99 years</li>
                                                        <li>Enhances fund growth through Yearly Additions post Lock-in period</li>
                                                        <li>Boosts long term savings through Wealth Boosters</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Enhanced life coverage on higher premiums and for females</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip">
                                                <a
                                                    class="broch-btn want-to-btn brochers"
                                                    href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-Wealth-Optima-Plan-Brochure-Unit-Linked-Insurance-Plan.pdf"
                                                    download="Brochure"
                                                ></a>
                                            </div>
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
                    <p class="keyFeatureofUlip-desc">
                        ULIPs present an alternative to traditional insurance policies by providing policyholders with the opportunity to invest their premiums in a diverse range of funds, including equity, debt, or a combination of both.
                    </p>
                    <div class="keyFeatureofUlip-cards">
                        <div class="keyFeatureofUlip-card">
                            <div class="keyfeat-icon kf1"></div>
                            <h3 class="keyFeatureofUlip-subTitle">Allocation of Premium</h3>
                            <p class="keyFeatureofUlip-subDesc">
                                ULIPs allow you to choose investment channels based on your risk tolerance. You can go aggressive with equities, cautious with debt funds, or mix it up with balanced funds to get the best of both worlds. You
                                can also allocate your premiums towards funds of your preference and depending on your risk appetite.
                            </p>
                        </div>
                        <div class="keyFeatureofUlip-card">
                            <div class="keyfeat-icon kf2"></div>
                            <h3 class="keyFeatureofUlip-subTitle">Switching of Funds</h3>
                            <p class="keyFeatureofUlip-subDesc">
                                You can move or switch from one fund to another if the performance of your chosen funds does not meet your expectations or if the market conditions change. As a result, you can ensure that your returns are
                                well-balanced and beat the volatility of the market.
                            </p>
                        </div>
                        <div class="keyFeatureofUlip-card">
                            <div class="keyfeat-icon kf3"></div>
                            <h3 class="keyFeatureofUlip-subTitle">Withdrawal Options</h3>
                            <p class="keyFeatureofUlip-subDesc">
                                You can make partial withdrawals from your funds after the five-year lock-in term if necessary. The insurance providers set the maximum withdrawal amount and the number of withdrawals that are permitted.
                            </p>
                        </div>
                        <div class="keyFeatureofUlip-card">
                            <div class="keyfeat-icon kf4"></div>
                            <h3 class="keyFeatureofUlip-subTitle">Additional Top-ups</h3>
                            <p class="keyFeatureofUlip-subDesc">You can add additional money in the form of Top-Up Premiums over and above your existing premium, which will give you an additional Top-Up Sum Assured.</p>
                        </div>
                        <div class="keyFeatureofUlip-card">
                            <div class="keyfeat-icon kf5"></div>
                            <h3 class="keyFeatureofUlip-subTitle">Tax Savings</h3>
                            <p class="keyFeatureofUlip-subDesc">
                                ULIPs are like other <a href="https://www.kotaklife.com/" class="inline-links">life insurance</a> instruments with the difference that you get to invest and secure your family financially both under one plan. Since it is a life insurance product, you also get tax
                                benefits.
                            </p>
                        </div>
                        <div class="keyFeatureofUlip-cardStatic">
                            <h3 class="keyFeatureofUlip-subTitlestatic">
                                Diversify your<br />
                                investment portfolio with<br />
                                <b>Kotak e-Invest.</b>
                            </h3>
                            <div class="keyFeatureofUlip-cta">
                                <a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=featuresofulip">Get Started with ULIPs</a>
                            </div>
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
                        <p class="importanceOfUlip-subDesc">
                            One of the key<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/advantages-and-disadvantages-of-ulip">advantages of ULIPs</a>is the unique combination of insurance and
                            investment. Unlike traditional insurance policies that provide only protection, ULIPs offer a dual benefit by simultaneously providing life coverage and a platform to grow wealth.
                        </p>
                    </div>
                </div>
                <div class="importanceOfUlip-flex">
                    <div class="ul-arrow"></div>
                    <div>
                        <h3 class="importanceOfUlip-subTitle">Flexibility and Control</h3>
                        <p class="importanceOfUlip-subDesc">
                            ULIPs provide you a high degree of flexibility and control over your investments. You can choose the level of life cover you require based on your financial goals and risk appetite. ULIPs offer the option to
                            switch between different investment funds according to market conditions or personal preferences for optimal returns.
                        </p>
                    </div>
                </div>
                <div class="importanceOfUlip-flex">
                    <div class="ul-arrow"></div>
                    <div>
                        <h3 class="importanceOfUlip-subTitle">Long-Term Wealth Creation</h3>
                        <p class="importanceOfUlip-subDesc">
                            ULIPs are well-suited for long-term investment horizon. By staying invested over an extended period, you can harness the power of compounding to build significant wealth. They can serve as an effective tool for
                            achieving long-term life goals like buying a house, funding education, or planning for retirement.
                        </p>
                    </div>
                </div>
                <div class="importanceOfUlip-flex">
                    <div class="ul-arrow"></div>
                    <div>
                        <h3 class="importanceOfUlip-subTitle">Tax Efficiency</h3>
                        <p class="importanceOfUlip-subDesc">
                            The premiums paid towards ULIPs are eligible for tax deductions under Section 80C of the Income Tax Act, 1961, up to a specified limit. Additionally, the maturity proceeds and death benefit received from ULIPs
                            are usually tax-free under<a href="https://www.kotaklife.com/insurance-guide/savingstax/what-is-section-10d-of-the-income-tax-act" class="inline-links">Section 10(10D),</a>subject to new tax rules.
                        </p>
                    </div>
                </div>
                <div class="importanceOfUlip-flex">
                    <div class="ul-arrow"></div>
                    <div>
                        <h3 class="importanceOfUlip-subTitle">Customization and Riders</h3>
                        <p class="importanceOfUlip-subDesc">
                            ULIPs offer a range of customization options to cater to individual requirements. You can opt for additional riders such as permanent disability benefit and accidental death benefit, among others, to enhance the
                            protection offered by ULIP. These riders provide an added layer of security and can be tailored to address specific risks and concerns.
                        </p>
                    </div>
                </div>
                <div class="importanceOfUlip-flexB new_change">
                    <p>Enjoy safe, market-linked returns with Kotak e-Invest!</p>
                    <a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=importance">Enhance Your Personal Finance</a>
                </div>
            </div>
        </section>
        <section class="hid ulip-cat-cal ulip-cal-space" id="ulipCalculator">
            <div class="greyBg">
                <div class="midWrapper">
                    <h2 class="ulipCalculator-title">What is a ULIP Calculator?</h2>
                    <p class="ulipCalculator-desc">
                        ULIP calculator is an online tool provided by insurance companies to estimate potential returns and policy premiums based on various investment scenarios. It helps individuals assess and compare different ULIP plans
                        offered by insurers.
                    </p>
                    <br />
                    <p class="ulipCalculator-desc">
                        ULIPs come with different features and benefits, making it complicated for individuals to select the right plan. This is where a ULIP calculator comes in handy.
                        calculator.
                    </p>
                    <div class="row mrow-0 mt20">
                        <div class="col-lg-7 m-p-0">
                            <div class="card">
                                <div class="text_center">
                                    <div class="radio_tabs">
                                        <input id="regularInvestment" type="radio" value="regularInvestment" name="investmentTabs" checked="checked" class="radio_tab" /><label for="regularInvestment">Regular Investment</label>
                                        <input id="oneTimeInvestment" type="radio" value="oneTimeInvestment" name="investmentTabs" class="radio_tab" /><label for="oneTimeInvestment">One-time Investment</label>
                                    </div>
                                </div>
                                <div class="range-wrap">
                                    <div class="goal-wrap">
                                        <p class="goal-title">Investment Amount<span class="sublabel sublableMonthly">(Monthly)</span></p>
                                        <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="amtInvestInput" name="amtInvestInput" type="text" value="1,00,000" maxlength="11" class="form-control comma" /></div>
                                    </div>
                                    <div class="slider-wrap"><input id="amtInvestRange" name="amtInvestRange" type="range" value="100000" min="1000" max="10000000" class="range-control" /></div>
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
                                        <div class="input-wrap year-wrap"><input id="yearsInvestInput" name="yearsInvestInput" type="text" value="10" maxlength="2" class="form-control" /><span>Years</span></div>
                                    </div>
                                    <div class="slider-wrap"><input id="yearsInvestRange" name="yearsInvestRange" type="range" value="10" min="1" max="30" class="range-control" /></div>
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
                                        <div class="input-wrap percent-wrap"><input id="interestrateInput" name="interestrateInput" type="text" value="9" maxlength="2" class="form-control" /><span>%</span></div>
                                    </div>
                                    <div class="slider-wrap"><input id="interestrateRange" name="interestrateRange" type="range" value="9" min="1" max="15" class="range-control" /></div>
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
                                        <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="periodicInput" name="periodicInput" type="text" value="0" maxlength="11" class="form-control comma" /></div>
                                    </div>
                                    <div class="slider-wrap"><input id="periodicRange" name="periodicRange" type="range" value="0" min="0" max="10000000" class="range-control" /></div>
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
                                        <div class="input-wrap">
                                            <span class="rupee">&#8377;&nbsp;</span><input id="extistingInvestmentInput" name="extistingInvestmentInput" type="text" value="0" maxlength="11" class="form-control comma" />
                                        </div>
                                    </div>
                                    <div class="slider-wrap"><input id="extistingInvestmentRange" name="extistingInvestmentRange" type="range" value="0" min="0" max="10000000" class="range-control" /></div>
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
                                <button id="calculate" name="calculate" class="btn_block btn_primary">Calculate</button>
                            </div>
                        </div>
                        <div class="col-lg-5 m-p-0">
                            <div class="card card_middle new">
                                <div class="card_body">
                                    <p class="card_title">
                                        You may get<br />
                                        <span class="amt_return">&#8377;&nbsp;<span id="yourReturn"></span></span>
                                    </p>
                                    <div class="investment_result">
                                        <p class="mb-0">
                                            If you invest&nbsp;<span class="invested_val"><b>&#8377;&nbsp;</b><span id="totalInvested"></span></span>&nbsp;<br />
                                        </p>
                                        <p class="oneTimeResult"><span class="regular_span">for&nbsp;</span><span class="years_val"></span>&nbsp;Years at&nbsp;<span id="percent_val"></span>% p.a.</p>
                                    </div>
                                    <div id="legend" class="legend_text"></div>
                                    <canvas id="investment_chart" height="240" class="investment_chart"></canvas>
                                    <a
                                        rel="nofollow"
                                        target="_blank"
                                        href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=calculators&utm_campaign=l2category_page&utm_content=investnow"
                                        class="btn_primary"
                                        title="Investment Return"
                                    >
                                        Invest Now
                                    </a>
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
                <div class="calculatingUlip-cta">
                    <a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=powerofcomp">Unlock ULIP's Compounding Potential</a>
                </div>
            </div>
        </section>
        <section class="hid" id="howDoesUlipWork">
            <div class="midWrapper">
                <h2 class="howDoesUlipWork-title">How Does a ULIP Work?</h2>
                <p class="howDoesUlipWork-desc">ULIP operates at the crossroads of insurance and investment, allowing policyholders to navigate the dual objectives of securing their future and optimizing their financial growth.</p>
                <div class="howDoesUlipWork-flex">
                  
                    <div class="ulipsprite-image ulipu1">
                         
                        <div class="howDoesUlipWork-content-left"><p>Choose the level of life insurance, premium payment option, premium amount, and policy duration to match your financial security and savings goals.</p></div>
                    </div>
                    <div class="ulipsprite-image ulipu2">
                        <div class="howDoesUlipWork-content-right"><p>Your nominee will receive the sum assured in the event of an unfortunate event during the policy term to realize their ambitions.</p></div>
                    </div>
                    <div class="ulipsprite-image ulipu3">
                        <div class="howDoesUlipWork-content-left"><p>Depending on your selections, the remainder of your premium is invested in the stock market using equity, debt, or hybrid funds.</p></div>
                    </div>
                    <div class="ulipsprite-image ulipu4">
                        <div class="howDoesUlipWork-content-right4"><p>Equity invests your funds in stocks. Debt funds invest your money in safer instruments like bonds.</p></div>
                    </div>
                    <div class="ulipsprite-image ulipu5">
                        <div class="howDoesUlipWork-content-left"><p>Your choice of an upfront, lump sum payment or recurring payments on an annual, half-yearly, quarterly or monthly basis.</p></div>
                    </div>
                    <div class="ulipsprite-image ulipu6">
                        <div class="howDoesUlipWork-content-right6"><p>Your life insurance is paid for in part with your premium.</p></div>
                    </div>
                </div>
                <div class="howDoesUlipWork-flexB">
                    <p>Do not wait ; start growing your wealth with Kotak e-Invest.</p>
                    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=howulipworks">Take the first step</a>
                </div>
            </div>
        </section>
        <section class="hid" id="benefitsOfUlip">
            <div class="midWrapper">
                <h2 class="benefitsOfUlip-title">What are the Benefits of ULIPs?</h2>
                <div class="benefitsOfUlip-img">
                    <!-- <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1089 384" width="1089" height="384">
                        <title>benefitsofulip</title>
                        <defs>
                            <image
                                width="1089"
                                height="384"
                                id="svg-img2"
                                href="data:image/png;base64,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"
                            />
                        </defs>
                        <style></style>
                        <use id="Background" href="#svg-img2" x="0" y="0" />
                    </svg> -->
                    <div class="ulipsprite-image ulipimagebenfit"></div>
                </div>
                <p class="benefitsOfUlip-desc">
                    Building a corpus to ensure a safe and secure future for your loved ones and yourself holds critical importance, and Unit Linked Insurance Plans have the potential to help you with that. They have several advantages, as
                    mentioned below:
                </p>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi1"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Flexibility to Choose a Cover Amount</h3>
                        <p class="benefitsOfUlip-subDesc">
                            You can choose your Life Cover amount as you desire in Unit Linked Insurance Policies. Most ULIPs offer a life cover of 7 times your yearly premium, which is the minimum. You can choose a life cover value of up
                            to 25 times your yearly premium, depending on the type of plan you choose.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi2"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Flexibility to Choose the Type of Investment</h3>
                        <p class="benefitsOfUlip-subDesc">
                            One of the most compelling aspects of ULIPs is the freedom to choose the investment type. This flexibility ensures that investors can personalize their ULIPs according to their unique requirements.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi3"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Financial goal plans</h3>
                        <p class="benefitsOfUlip-subDesc">
                            ULIPs are designed to help you achieve your financial objectives, such as increasing your wealth,
                            <a class="inline-links" href="https://www.kotaklife.com/insurance-plans/retirement-plans">planning for retirement,</a>or preparing for your child's future education plans. 
                        </p>
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
                        <p class="benefitsOfUlip-subDesc">
                            ULIPs offer a comprehensive death benefit that guarantees your family's financial well-being in the event of your untimely demise. Your nominees will receive the proceeds basis the terms and conditions of your
                            ULIP policy.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi6"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Loyalty Additions</h3>
                        <p class="benefitsOfUlip-subDesc">
                            Loyalty additions in ULIPs are extra units added to your policy at specific intervals, rewarding you for staying invested over the years. This feature not only enhances the growth potential of your investment but
                            also demonstrates the insurer's commitment to your financial success.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi7"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Wealth Boosters</h3>
                        <p class="benefitsOfUlip-subDesc">
                            As you continue your ULIP journey, you'll encounter the concept of wealth boosters. These are additional units allocated to your policy on achieving certain milestones, such as completing five years or more of
                            the policy term.
                        </p>
                    </div>
                </div>
                <div class="benefitsOfUlip-flex">
                    <div class="benflx-icon ubi8"></div>
                    <div>
                        <h3 class="benefitsOfUlip-subTitle">Dynamic Fund Allocation</h3>
                        <p class="benefitsOfUlip-subDesc">
                            With dynamic fund allocation, you can switch between different funds offered by the insurer, such as equity, debt, or balanced funds. This strategic maneuvering allows you to optimize your returns and adapt to
                            changing market dynamics.
                        </p>
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
                    <p>Invest in your dreams with Kotak Life Insurance ULIP plans.</p>
                    <a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=benefitsofulip">Buy Now</a>
                </div>
            </div>
        </section>

           <section id="whichinvestor" class="what-is-ulip">
                <div class="midWrapper">
                             <div>
                                  <h2 class="whatareulips-title"> Which Investor Class Are ULIPs Most Suited for?
                                  </h2>
                                  <p class="whatareulips-desc">ULIPs are the most popular investment choice among people looking for insurance benefits with wealth accumulation. As investors, people have different tolerances for risks faced in investments. ULIPs offer something for every class of investors. Here are some popular investor classes that can benefit from ULPs.
                                      </p>
                              </div>

                               <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Individuals Who Want to Track their Investments Closely

                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           ULIPs offer the best investment options for people who want to closely track their investments. They offer flexibility to track investment performance so that you can understand how your investments are doing and change if you are not satisfied with the results. This monitoring can be done through your ULIP’s fund value, NAV, and other essential information.                                           </p>
                                       </div>
                                 </div>

                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Individuals with a Medium to Long Term Investment Horizon
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           As we all know it is good to invest for longer periods of time to get the maximum benefit out of any investment. From this point of view, ULIPs are made for longer investment periods and therefore offer good returns. If you stay long enough in your ULIP investments, you can take advantage of compounding and maximize your returns.                                           </p>
                                       </div>
                                 </div>

                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Individuals with Varying Risk Profiles </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           No matter what your risk tolerance is, ULIP has options for everyone. It offers stable returns by investing in different options. At the same time, it offers varied options for adjusting your investment if you think you are ready for higher-risk investments. This feature makes ULIPs a popular choice of investment among investors.      </p>    </div>
                                 </div>
      
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Investors Across All Stages of Life </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           No age bar applies to ULIP investments. ULIP is an ideal investment for individuals approaching retirement age or who are young investors. It provides novices with the advantage of long-term investing for wealth accumulation. For people looking for retirement solutions, ULIP’s lock-in period helps them put aside money for five years and reap the benefits of good returns after the lock-in period ends. They can even extend the investment period if their budget and timeline allow. </p>
                                       </div>
                                 </div>
                                
      
      
      
      
      
                </div>
           </section>

           <section id="charges" class="what-is-ulip">
                <div class="midWrapper">
                             <div>
                                  <h2 class="whatareulips-title"> Types of ULIP Charges
                                  </h2>
                                  <p class="whatareulips-desc">Like any financial product, ULIPs entail certain charges that policyholders need to be aware of. Let us explore the various charges associated with ULIPs:
                                      </p>
                              </div>

                               <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Policy Administration Charges


                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           Policy Administration Charges are imposed to cover the costs of managing the ULIP policy. This includes charges incurred in policy issuance, servicing, and record maintenance. These charges are deducted on a periodic basis, such as monthly, and may vary across different ULIP products and insurers. </p>
                                       </div>
                                 </div>

                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Fund Management Charges

                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           Fund management charges are required for maintaining your funds under ULIP. These charges are levied on the basis of managing your portfolio, that involves researching, analyzing and making changes to your portfolio for maximum benefits.</p>
                                       </div>
                                 </div>

                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Switching Funds Charges
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           ULIPs come with the option of switching investment funds, but this service is chargeable after a set of free switching chances. These charges can vary from insurer to insurer. No matter what the charges are, this flexibility makes ULIP a profitable option for investors.
                                                      </p>
                                                     </div>
                                 </div>
      
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Surrender Charges </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           If an investor decides to discontinue their ULIP policy before maturity or completion of the lock-in period, they must pay a sum to the insurer. Like switching charges, these charges also differ from insurer to insurer and are dependent on how long the policy has been active.

                                            </p>
                                       </div>
                                 </div>
                                
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Mortality Charges
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           In order to cover the risk of paying out the death benefit in the event that you pass away during the policy term, the insurance company deducts mortality charges. These charges vary due to variables such as sum assured, gender, age, and health status. Your choice of a higher death benefit amount (sum assured) will result in a higher mortality charge.
                                            </p>
                                       </div>
                                 </div>
                                
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Premium Allocation Charges
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           The insurer charges premium allocation charges for allocating to chosen investment funds. These charges cover the cost of sales and distribution expenses, agent commission, and underwriting costs. These charges are deducted from your premium amount, thereby reducing the allocated premium.

                                            </p>
                                       </div>
                                 </div>
                                
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Partial Withdrawal Charges</h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           Partial withdrawal charges are for investors who choose to withdraw from their ULIP policy before completing the lock-in period. Every partial withdrawal made above the free withdrawal standard (mentioned in the ULIP policy) may result in a charge from the insurance company. The costs for partial withdrawals differ amongst ULIP products and insurers.
                                            </p>
                                       </div>
                                 </div>

                                 <div class="whyChooseKotakUlip-flexR">
                                       <p>Embrace the potential of long-term wealth creation with Kotak e-Invest.</p>
                                       <a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=typesofcharges">Invest now</a>
                                   </div>
      
      
                </div>
           </section>



           <section id="lockin" class="what-is-ulip">
                <div class="midWrapper">
                             <div>
                                  <h2 class="whatareulips-title">  Lock-in Period of ULIP

                                  </h2>
                                  <p class="whatareulips-desc">The minimum amount of time that policyholders must remain invested in a ULIP before they are permitted to make any partial withdrawals, or surrender the policy, is known as the lock-in period. Policyholders are not permitted to access their invested funds during the lock-in period, and early withdrawals or surrenders may result in fines or other charges from the insurance provider.</P>
                              </div>

                               <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Duration of the Lock-in Period
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           The Insurance Regulatory and Development Authority of India (IRDAI) requires a minimum lock-in period of five years for ULIPs in India. You cannot withdraw invested funds completely or partially within the first five years from the policy's start date. Some ULIP plans may allow partial withdrawals after the five-year lock-in period. However, these withdrawals might have conditions attached, such as minimum withdrawal limits or charges. </p>
                                       </div>
                                 </div>
      
                </div>
           </section>


           <section id="whoshould" class="what-is-ulip">
                <div class="midWrapper">
                             <div>
                                  <h2 class="whatareulips-title">  Who Should Invest in ULIPs?

                                  </h2>
                                  <p class="whatareulips-desc">As investors you wish to get the maximum advantage from your ULIP plans. Let us take a look at the type of investors who can leverage maximum benefits from ULIPs:</P>
                              </div>

                              <div class="typesOfUlip-flex">
                                    <div class="fund-tick"></div>
                                    <div>
                                        <h3 class="typesOfUlip-subTitle">Long-term Investors
                                        </h3>
                                        <p class="typesOfUlip-subDesc">
                                        People willing to invest for longer periods of time can gain maximum returns from it. Longer investment periods give enough time for investments to yield excellent returns through their compounding power.
                                        </p>
                                    </div>
                                </div>
                                <div class="typesOfUlip-flex">
                                    <div class="fund-tick"></div>
                                    <div>
                                        <h3 class="typesOfUlip-subTitle">Those Seeking Insurance and Investment Combined

                                        </h3>
                                        <p class="typesOfUlip-subDesc">
                                        The combined benefits of investment and insurance in one policy is the main feature of ULIPs. They can be a perfect solution for people who don’t want to buy separate policies but want to enjoy the benefits of both.

                                        </p>
                                    </div>
                                </div>

                                <div class="typesOfUlip-flex">
                                    <div class="fund-tick"></div>
                                    <div>
                                        <h3 class="typesOfUlip-subTitle">Goal-oriented Investors

                                        </h3>
                                        <p class="typesOfUlip-subDesc">
                                        People with clear goals can gain huge benefits from ULIPs by planning their investments. ULIPs can be customized for specific needs, with their flexibility in investment options and features like fund switching.

                                        </p>
                                    </div>
                                </div>

                                <div class="typesOfUlip-flex">
                                    <div class="fund-tick"></div>
                                    <div>
                                        <h3 class="typesOfUlip-subTitle">Those Willing to Bear Market Risk

                                        </h3>
                                        <p class="typesOfUlip-subDesc">
                                        ULIP, being a market-oriented investment tool, is subject to market risks. These tools can offer excellent returns if you are ready to take risks.
                                        </p>
                                    </div>
                                </div>
                                <div class="typesOfUlip-flex">
                                    <div class="fund-tick"></div>
                                    <div>
                                        <h3 class="typesOfUlip-subTitle">Tax-savvy Investors

                                        </h3>
                                        <p class="typesOfUlip-subDesc">
                                        If you are looking for tax savings and investments, ULIPs are for you. As per the Income Tax Act, the premiums paid are subject to tax deductions up to ₹1.5 lakh under Section 80C, and the maturity proceeds are tax-free under Section 10(10D).
                                        </p>
                                    </div>
                                </div>
                </div>
           </section>

           <section id="howto" class="what-is-ulip">
                <div class="midWrapper">
                             <div>
                                  <h2 class="whatareulips-title"> How to Maximize ULIP Returns?
                                  </h2>
                                  <p class="whatareulips-desc">ULIPs are popular for being a versatile investment tool that combines insurance coverage with investment opportunities. They offer excellent returns over the long term, but this requires a strategic approach. Here are five key strategies to help you make the most of your ULIP investments.
                                      </p>
                              </div>

                               <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle"> Start Early
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           Starting early is one of the most effective ways to maximize ULIP returns. Time plays an important role in ULIP returns. Your investment earns returns on the principal amount and the accumulated gains over time. By starting early, you give your investments more time to grow, which enhances your overall returns. Even small contributions made early on can boost your ULIP amount over the long term.
                                           </p>
                                       </div>
                                 </div>

                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Regular Investment is a Must
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           Consistency is key when it comes to ULIP investments. It is necessary to make regular contributions to ensure that you take maximum advantage of your plan. You should set up a disciplined investment schedule and stick to it. Regardless of market conditions, you must invest to utilize the power of rupee-cost averaging and increase your ULIP returns. </p>
                                       </div>
                                 </div>

                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Use Various Fund Options to Your Advantage
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           To maximize your returns, you should diversify your investment with various fund options based on your risk tolerance. For example, equity funds offer higher growth potential, while debt funds provide stability and income generation. You can invest in these options as per your needs. By spreading your investment, you can reduce risk based on market conditions.</p>
                                       </div>
                                 </div>
      
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle"> Review and Analyze Portfolio Regularly
                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           Regular reviewing and analysis of portfolio is essential to make most of your ULIP investment. You should keep a track of the performance of chosen funds and assess. You must check if they align with your investment objectives and risk profile. Staying informed about market trends and economic indicators that can impact your investments is also important to make necessary changes to optimize your returns. </p>
                                       </div>
                                 </div>
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle"> Avail Tax Benefits

                                           </h3>
                                           <p class="whichUlipfundsAreBest-subDesc">
                                           ULIPs offer attractive tax benefits for policy owners. As per Section 80C of the Income Tax Act 1961, the premiums paid towards ULIPs qualify for tax deduction. Similarly, the maturity proceeds and death benefits received from ULIPs are tax-free under Section 10(10D). With these tax benefits, you can effectively reduce your tax liability and increase your ULIP returns.</p>
                                       </div>
                                 </div>
                                 
      
      
      
      
      
                </div>
          </section>




        <section class="hid" id="typesOfUlip">
            <div class="midWrapper">
                <h2 class="typesOfUlip-title">Types of ULIP Funds</h2>
                <p class="typesOfUlip-desc">
                    With ULIPs, individuals can secure their financial future while participating in the growth potential of the market. However, it is important to understand that not all
                    <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/type-of-ulip-investments-in-india">types of ULIPs</a>are the same.
                </p>
                <div class="typesOfUlip-flex">
                    <div class="fund-tick"></div>
                    <div>
                        <h3 class="typesOfUlip-subTitle">Equity-based ULIPs</h3>
                        <p class="typesOfUlip-subDesc">
                            Equity-based ULIPs invest a significant portion of your premium in equity-related instruments such as stocks and equity mutual funds. These plans are suitable for individuals seeking long-term capital
                            appreciation and are willing to withstand short-term market fluctuations. Equity-based ULIPs offer potentially high returns, but they also come with a higher level of risk.
                        </p>
                    </div>
                </div>
                <div class="typesOfUlip-flex">
                    <div class="fund-tick"></div>
                    <div>
                        <h3 class="typesOfUlip-subTitle">Debt-based ULIPs</h3>
                        <p class="typesOfUlip-subDesc">
                            Debt-based ULIPs, as the name suggests, primarily invest in fixed-income instruments such as government bonds, corporate bonds, and fixed deposits. These plans are relatively less risky compared to equity-based
                            ULIPs and are ideal for individuals seeking stable returns with a lower risk appetite. Debt-based ULIPs are generally recommended for conservative investors who prioritize capital preservation.
                        </p>
                    </div>
                </div>
                <div class="typesOfUlip-flex">
                    <div class="fund-tick"></div>
                    <div>
                        <h3 class="typesOfUlip-subTitle">ULIPs with Multiple Fund Options</h3>
                        <p class="typesOfUlip-subDesc">
                            Some ULIPs offer multiple fund options, allowing policyholders to choose from a range of investment strategies based on their risk tolerance and investment goals. These options may include diversified equity
                            funds, sector-specific funds, debt funds, and even a combination of different funds. ULIPs with multiple fund options provide flexibility and allow investors to switch between funds as per market conditions or
                            their changing financial objectives.
                        </p>
                    </div>
                </div>
                <div class="typesOfUlip-flex">
                    <div class="fund-tick"></div>
                    <div>
                        <h3 class="typesOfUlip-subTitle">Retirement ULIPs</h3>
                        <p class="typesOfUlip-subDesc">
                            Retirement ULIPs are designed specifically to help individuals build a retirement corpus. These plans offer a combination of insurance and investment benefits, allowing policyholders to secure their retirement
                            while potentially earning returns. Retirement ULIPs typically have a longer lock-in period and provide the option of systematic withdrawals or annuity payouts after maturity.
                        </p>
                    </div>
                </div>
                <div class="typesOfUlip-flex">
                    <div class="fund-tick"></div>
                    <div>
                        <h3 class="typesOfUlip-subTitle">Child ULIPs</h3>
                        <p class="typesOfUlip-subDesc">
                            Child ULIPs are tailored to meet the future financial needs of your child, such as education expenses or marriage. These plans provide a life cover for the parent and offer investment options that align with the
                            child's milestones. Child ULIPs often come with a built-in feature that waives future premiums in case of the policyholder's demise, ensuring that the child's financial goals are not compromised.
                        </p>
                    </div>
                </div>
                <div class="typesOfUlip-cta"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=typesofulip">Explore More</a></div>
            </div>
        </section>
        <section class="hid" id="whyChooseKotakUlip">
            <div class="midWrapper">
                <h2 class="whyChooseKotakUlip-title">Why Choose Kotak Life ULIP Policy?</h2>
                <p class="whyChooseKotakUlip-desc">
                    Kotak Life ULIP Policy offers a compelling proposition for individuals seeking a comprehensive life insurance solution that also provides the opportunity for wealth creation. With its wide range of investment options,
                    transparency, flexibility, life insurance coverage, and tax benefits, Kotak Life has emerged as a preferred choice among investors.
                </p>
                <div class="whyChooseKotakUlip-grid">
                    <div class="whyChooseKotakUlip-cards">
                        <div class="ulip-policy-icon upi1"></div>
                        <h3 class="whyChooseKotakUlip-subTitle">Customized Investment Options</h3>
                        <p class="whyChooseKotakUlip-subDesc">
                        With Kotak e-Invest you can choose from a wide range of funds based on your risk appetite and financial goals. It offers something for everyone, whether you prefer a conservative approach or are willing to take on higher risks for higher returns. It also provides different fund options like equity funds, debt funds, and balanced funds making sure your investment stays aligned to your goals.                        </p>
                    </div>
                    <div class="whyChooseKotakUlip-cards">
                        <div class="ulip-policy-icon upi2"></div>
                        <h3 class="whyChooseKotakUlip-subTitle">Transparency and Flexibility</h3>
                        <p class="whyChooseKotakUlip-subDesc">
                        It is necessary to keep an eye on your investments. With Kotak e-Invest, you receive regular updates on the performance of your investments. It also allows you to switch between funds based on market conditions and changing investment choices. This flexibility sets Kotak e-Invest different from traditional insurance policies and empowers you to manage your investments actively.

                        </p>
                    </div>
                    <div class="whyChooseKotakUlip-cards">
                        <div class="ulip-policy-icon upi3"></div>
                        <h3 class="whyChooseKotakUlip-subTitle">Life Insurance Coverage</h3>
                        <p class="whyChooseKotakUlip-subDesc">
                        Along with the investment component, Kotak e-Invest also offers comprehensive life insurance coverage. In the unfortunate event of the policyholder's demise, the nominated beneficiaries will receive the sum assured. This unique benefit of Kotak e-Invest ensures that the financial security of beneficiaries is not compromised at all.
                        </p>
                    </div>
                    <div class="whyChooseKotakUlip-cards">
                        <div class="ulip-policy-icon upi4"></div>
                        <h3 class="whyChooseKotakUlip-subTitle">Wealth Creation Potential</h3>
                        <p class="whyChooseKotakUlip-subDesc">
                        By staying invested for a long period, you can benefit from compounding and achieve your
                            <a href="https://www.kotaklife.com/insurance-guide/wealth-creation/planning-financial-goals-and-objectives-of-financial-planning" class="inline-links">financial goals,</a>such as funding your child's education, buying a dream home, or enjoying a comfortable retirement. Kotak e-Invest helps you fulfill all your financial goals. 

                            
                        </p>
                    </div>
                </div>
                <div class="whyChooseKotakUlip-cards mt20">
                    <div class="ulip-policy-icon upi6"></div>
                    <h3 class="whyChooseKotakUlip-subTitle">Tax Benefits</h3>
                    <p class="whyChooseKotakUlip-subDesc">
                    Tax advantages of Kotak e-Invest enhance the overall returns on your investment. The premiums you pay towards the policy are eligible for tax deductions under Section 80C of the Income Tax Act. The maturity proceeds and death benefit received by the policyholder or the nominee also qualify for tax-exempt under Section 10(10D). 
                    </p>
                </div>
                <div class="whyChooseKotakUlip-flexR">
                    <p>Enjoy the dual benefits of protection and growth with Kotak e-Invest plan.</p>
                    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=whychoose">Invest today</a>
                </div>
            </div>
        </section>
        <section class="hid" id="typeOfUlipFunds">
            <div class="midWrapper">
                <h2 class="typeOfUlipFunds-title">What Type of Funds Do ULIP Plans Include?</h2>
                <p class="typeOfUlipFunds-desc">
                    Whether you are a seasoned investor or someone exploring ULIP funds for the first time, understanding the different fund options available within ULIPs can help you make informed decisions and optimize your investment
                    strategy.
                </p>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii1"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Equity Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">
                       <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-are-equity-mutual-funds"> Equity funds</a> are for Investors with a high-risk tolerance and a long-term investment horizon (5-10 years or more). Their performance is based on the ups and downs of the market. You can opt for equity funds if you have a good risk appetite and want to create some wealth in the long term.

                        </p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii2"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Debt Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">
                        Debt funds are best suited for conservative investors looking for steady returns with lower risk. They Invest in government securities, <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/corporate-bonds-types-and-benefits">corporate bonds</a>, and other debt instruments. These devices are safer since they carry low to moderate risk.

                        </p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii2"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Cash Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">
                        Funds which invest in bank-owned money market funds are called as cash funds. These instruments have a very low-risk profile. As a result, of all ULIP categories, they offer the lowest returns. Risk-averse investors have the option of choosing cash funds ULIPs.

                        </p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii3"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Balanced Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">
                        ULIPs also offer the choice to invest in both equities and debt instruments in order to balance risk and profit. These are perfect for investors seeking a balance between risk and return. Examples of balanced funds could be equity-oriented hybrid funds.

                        </p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii4"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Money Market Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">
                        Money market funds invest in short-term fixed-income instruments. These funds focus on capital preservation and liquidity. Money market funds in ULIPs are ideal for investors with a very low-risk tolerance or those seeking short-term parking of funds.

                        </p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii5"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Sector-Specific Funds</h3>
                        <p class="typeOfUlipFunds-subDesc">
                        Some ULIPs also offer sector-specific funds that concentrate their investments in specific sectors or industries, such as technology, healthcare, or energy. These funds are suitable for investors who have a strong conviction about a particular sector's growth prospects. 
                        </p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii5"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Retirement ULIPs</h3>
                        <p class="typeOfUlipFunds-subDesc">
                        Retirement ULIPs are designed to help individuals build a retirement fund. These plans offer a combination of insurance and investment benefits, which allows policyholders to secure their retirement while potentially earning returns. These plans have a longer lock-in period and provide the option of systematic withdrawals or annuity payouts after maturity.                        </p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-flex">
                    <div class="ulip-incl-icon uii5"></div>
                    <div>
                        <h3 class="typeOfUlipFunds-subTitle">Child ULIPs</h3>
                        <p class="typeOfUlipFunds-subDesc">
                        Child ULIPs are tailored to meet the future financial needs of your child, such as education expenses or marriage. These plans provide a life cover for the parent and offer investment options that align with the goals for your child. These plans often come with a built-in feature that waives future premiums in case of the policyholder's demise, ensuring that the child's financial goals are not compromised.
                        </p>
                    </div>
                </div>
                <div class="typeOfUlipFunds-cta"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=ulipfunds">Invest now</a></div>
            </div>
        </section>
        <section class="hid" id="manageUlipFunds">
            <div class="midWrapper">
                <h2 class="manageUlipFunds-title">How to Manage ULIP Funds?</h2>
                <p class="manageUlipFunds-desc">
                Investing is not considered as a one time job done. You must keep reviewing the funds, making adjustments as the market changes and then you can expect excellent returns from it. But if you find it difficult to manage ULIPs, the following are some important considerations with regard to the management of ULIP funds:

                </p>
                <div class="manageUlipFunds-grid">
                    <div>
                        <ul class="manageUlipFunds-list">
                            <li>
                            Various ULIPs allow routine transfers of funds from debt to equity ULIPs. You have to pay an annual premium, and you can begin investing in a debt fund. You can also choose to switch to an equity fund gradually if you want. This is something like Systematic Transfer Plans (STP), which is popular among investors.
                            </li>
                            <li>
                            You must be prepared for a <a class="linline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/best-long-term-savings-investment-plans-in-india">long-term investment</a> because ULIPs have a five-year lock-in period and you can only withdraw from it after the lock-in period is over. Partial or withdrawal before maturity is permissible under specific conditions.

                            </li>
                            <li>
                            It is necessary to review the performance and future prospects of ULIP funds on a regular basis. You can switch between funds, if an asset is underperforming. For example, migrating from an equity ULIP fund to a debt ULIP fund. There might be some fees but there are also some set number of free switches each year.

                            </li>
                            <li>
                            Many ULIPs have a lifecycle-based strategy, based on the investor's age. This method involves automatically distributing their funds between equity and debt for maximum returns. If you decide to invest in ULIPs for your retirement, you can easily go for this method.

                            </li>
                        </ul>
                    </div>
                    <div class="manageUlipFunds-img">
                        <div class="ulipsprite-image ulipimagetyping"></div>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="409.229" height="404.301" viewBox="0 0 409.229 404.301">
                            <defs>
                                <clipPath id="clip-path"><rect id="Rectangle_15840" data-name="Rectangle 15840" width="409.229" height="404.301" fill="none"></rect></clipPath>
                                <clipPath id="clip-path-2"><rect id="Rectangle_15830" data-name="Rectangle 15830" width="2.777" height="0.293" fill="none"></rect></clipPath>
                                <clipPath id="clip-path-6"><rect id="Rectangle_15845" data-name="Rectangle 15845" width="60.461" height="47.553" fill="none"></rect></clipPath>
                            </defs>
                            <g id="Group_32138" data-name="Group 32138" transform="translate(-807 -12422.699)">
                                <rect id="Rectangle_15829" data-name="Rectangle 15829" width="89.281" height="115.775" transform="translate(807.247 12440.949)" fill="#ebebeb"></rect>
                                <g id="Group_17338" data-name="Group 17338" transform="translate(807 12422.699)">
                                    <g id="Group_17337" data-name="Group 17337" clip-path="url(#clip-path)">
                                        <path
                                            id="Path_41211"
                                            data-name="Path 41211"
                                            d="M6.729,118.2a.75.75,0,0,1,.446.067,1.422,1.422,0,0,1,.777,1.011,1.326,1.326,0,0,1-.127.94,1.607,1.607,0,0,1-.858.736,1.652,1.652,0,0,1-1.3-.042,2.2,2.2,0,0,1-1.021-1.04,3.31,3.31,0,0,1,.343-3.2,3.379,3.379,0,0,1,1.365-1.263,2.09,2.09,0,0,1,.978-.212,1.975,1.975,0,0,1,.981.322,3.468,3.468,0,0,1,1.231,1.667,7.184,7.184,0,0,1,.426,2.1,7.8,7.8,0,0,1-1.028,4.331,27.775,27.775,0,0,1-2.672,3.557,10.5,10.5,0,0,0-2.023,3.505,4.89,4.89,0,0,0,.228,3.546A2.8,2.8,0,0,0,7,135.775a2.259,2.259,0,0,0,1.276-.4,1.758,1.758,0,0,0,.676-.968,2.367,2.367,0,0,0-.341-1.877,1.587,1.587,0,0,0-.98-.718,1.105,1.105,0,0,0-.324-.03.357.357,0,0,1-.115-.008c0-.005.037-.013.112-.021a.955.955,0,0,1,.337,0,1.612,1.612,0,0,1,1.062.711,2.47,2.47,0,0,1,.406,1.984,1.929,1.929,0,0,1-.724,1.077,2.445,2.445,0,0,1-1.381.46,3.042,3.042,0,0,1-1.552-.391,2.983,2.983,0,0,1-1.2-1.254,5.121,5.121,0,0,1-.273-3.733A10.657,10.657,0,0,1,6.046,127a28.182,28.182,0,0,0,2.641-3.523,7.541,7.541,0,0,0,1-4.171,6.929,6.929,0,0,0-.4-2.015,3.2,3.2,0,0,0-1.117-1.542,1.69,1.69,0,0,0-1.7-.1A3.147,3.147,0,0,0,5.194,116.8a3.1,3.1,0,0,0-.362,2.984,2.017,2.017,0,0,0,.915.962,1.484,1.484,0,0,0,1.163.056,1.465,1.465,0,0,0,.793-.649,1.214,1.214,0,0,0,.137-.85,1.387,1.387,0,0,0-.69-.981,1.71,1.71,0,0,0-.421-.12"
                                            transform="translate(-0.395 -12.083)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41212"
                                            data-name="Path 41212"
                                            d="M7.571,104.7a.753.753,0,0,1-.446-.066,1.425,1.425,0,0,1-.777-1.012,1.33,1.33,0,0,1,.126-.94,1.612,1.612,0,0,1,.859-.736,1.652,1.652,0,0,1,1.3.042,2.205,2.205,0,0,1,1.021,1.039,3.311,3.311,0,0,1-.343,3.205A3.379,3.379,0,0,1,7.946,107.5a2.09,2.09,0,0,1-.978.212,1.975,1.975,0,0,1-.981-.322,3.468,3.468,0,0,1-1.231-1.667,7.155,7.155,0,0,1-.426-2.1A7.8,7.8,0,0,1,5.358,99.29,27.776,27.776,0,0,1,8.03,95.733a10.5,10.5,0,0,0,2.023-3.505,4.89,4.89,0,0,0-.228-3.546A2.8,2.8,0,0,0,7.3,87.131a2.259,2.259,0,0,0-1.276.4,1.761,1.761,0,0,0-.676.968,2.367,2.367,0,0,0,.341,1.877,1.584,1.584,0,0,0,.98.718,1.105,1.105,0,0,0,.324.03.357.357,0,0,1,.115.008c0,.005-.037.013-.112.021a.956.956,0,0,1-.337,0,1.609,1.609,0,0,1-1.062-.711,2.47,2.47,0,0,1-.406-1.984,1.929,1.929,0,0,1,.724-1.077,2.451,2.451,0,0,1,1.381-.46,3.045,3.045,0,0,1,1.552.391,2.983,2.983,0,0,1,1.2,1.254,5.121,5.121,0,0,1,.273,3.733,10.657,10.657,0,0,1-2.058,3.609,28.008,28.008,0,0,0-2.641,3.523,7.541,7.541,0,0,0-1,4.171,6.9,6.9,0,0,0,.4,2.015,3.2,3.2,0,0,0,1.117,1.542,1.69,1.69,0,0,0,1.7.1,3.147,3.147,0,0,0,1.269-1.159,3.1,3.1,0,0,0,.362-2.984,2.021,2.021,0,0,0-.915-.962A1.484,1.484,0,0,0,7.39,102.1a1.465,1.465,0,0,0-.793.649,1.214,1.214,0,0,0-.137.85,1.387,1.387,0,0,0,.69.981,1.659,1.659,0,0,0,.421.12"
                                            transform="translate(-0.453 -9.118)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41213" data-name="Path 41213" d="M8.313,112.332a.908.908,0,1,1-.908-.908.907.907,0,0,1,.908.908" transform="translate(-0.682 -11.688)" fill="#e0e0e0"></path>
                                        <path id="Path_41214" data-name="Path 41214" d="M8.755,85.31a.908.908,0,1,1-.908-.908.908.908,0,0,1,.908.908" transform="translate(-0.728 -8.853)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41215"
                                            data-name="Path 41215"
                                            d="M7.172,50.083a1.649,1.649,0,0,0,.421-.12,1.388,1.388,0,0,0,.69-.984,1.218,1.218,0,0,0-.137-.852,1.461,1.461,0,0,0-.794-.652,1.484,1.484,0,0,0-1.165.057,2.026,2.026,0,0,0-.913.968,3.118,3.118,0,0,0,.363,2.991,3.144,3.144,0,0,0,1.27,1.162,1.687,1.687,0,0,0,1.7-.1A3.223,3.223,0,0,0,9.727,51a6.952,6.952,0,0,0,.4-2.018,7.573,7.573,0,0,0-1-4.178,28.3,28.3,0,0,0-2.641-3.534,10.691,10.691,0,0,1-2.058-3.617A5.155,5.155,0,0,1,4.7,33.91,2.982,2.982,0,0,1,5.9,32.652a3.032,3.032,0,0,1,1.553-.395,2.443,2.443,0,0,1,1.384.461A1.929,1.929,0,0,1,9.556,33.8a2.479,2.479,0,0,1-.405,1.987,1.611,1.611,0,0,1-1.062.714.915.915,0,0,1-.338,0,.349.349,0,0,1-.112-.021.393.393,0,0,1,.115-.008,1.146,1.146,0,0,0,.325-.03,1.585,1.585,0,0,0,.98-.721,2.378,2.378,0,0,0,.34-1.882,1.759,1.759,0,0,0-.676-.969,2.253,2.253,0,0,0-1.277-.4,2.8,2.8,0,0,0-2.53,1.561,4.919,4.919,0,0,0-.225,3.553A10.5,10.5,0,0,0,6.713,41.09a27.839,27.839,0,0,1,2.672,3.568A7.832,7.832,0,0,1,10.413,49a7.16,7.16,0,0,1-.425,2.1A3.475,3.475,0,0,1,8.76,52.773a1.952,1.952,0,0,1-.983.325,2.053,2.053,0,0,1-.979-.212A3.366,3.366,0,0,1,5.431,51.62a3.329,3.329,0,0,1-.345-3.211,2.2,2.2,0,0,1,1.02-1.043,1.646,1.646,0,0,1,1.3-.045,1.614,1.614,0,0,1,.86.738A1.338,1.338,0,0,1,8.394,49a1.429,1.429,0,0,1-.777,1.015.753.753,0,0,1-.446.066"
                                            transform="translate(-0.441 -3.384)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41216"
                                            data-name="Path 41216"
                                            d="M7.443,63.62a1.624,1.624,0,0,0-.422.121,1.386,1.386,0,0,0-.69.984,1.219,1.219,0,0,0,.137.852,1.472,1.472,0,0,0,.794.652,1.487,1.487,0,0,0,1.165-.058,2.027,2.027,0,0,0,.912-.967,3.113,3.113,0,0,0-.363-2.991,3.146,3.146,0,0,0-1.27-1.163,1.688,1.688,0,0,0-1.7.106A3.223,3.223,0,0,0,4.887,62.7a6.923,6.923,0,0,0-.4,2.019,7.572,7.572,0,0,0,1,4.178,28.231,28.231,0,0,0,2.642,3.533,10.692,10.692,0,0,1,2.057,3.618,5.152,5.152,0,0,1-.269,3.74,2.984,2.984,0,0,1-1.195,1.259,3.031,3.031,0,0,1-1.552.395,2.447,2.447,0,0,1-1.384-.461,1.93,1.93,0,0,1-.724-1.079,2.474,2.474,0,0,1,.405-1.988A1.613,1.613,0,0,1,6.525,77.2a.965.965,0,0,1,.338,0c.075.01.114.017.112.022a.387.387,0,0,1-.115.008,1.108,1.108,0,0,0-.324.03,1.588,1.588,0,0,0-.981.721,2.379,2.379,0,0,0-.339,1.882,1.764,1.764,0,0,0,.677.97,2.243,2.243,0,0,0,1.276.4A2.8,2.8,0,0,0,9.7,79.679a4.91,4.91,0,0,0,.225-3.553A10.509,10.509,0,0,0,7.9,72.613a27.8,27.8,0,0,1-2.671-3.567A7.834,7.834,0,0,1,4.2,64.707a7.155,7.155,0,0,1,.426-2.1A3.475,3.475,0,0,1,5.854,60.93a1.97,1.97,0,0,1,.983-.325,2.081,2.081,0,0,1,.978.211,3.386,3.386,0,0,1,1.367,1.267,3.33,3.33,0,0,1,.346,3.211,2.211,2.211,0,0,1-1.021,1.044,1.65,1.65,0,0,1-1.3.045,1.619,1.619,0,0,1-.86-.738,1.345,1.345,0,0,1-.126-.942A1.43,1.43,0,0,1,7,63.687a.75.75,0,0,1,.446-.067"
                                            transform="translate(-0.439 -6.357)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41217" data-name="Path 41217" d="M8.755,58.2a.908.908,0,1,0-.908.909.909.909,0,0,0,.908-.909" transform="translate(-0.728 -6.009)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41218"
                                            data-name="Path 41218"
                                            d="M90.915,118.2a.75.75,0,0,1,.446.067,1.422,1.422,0,0,1,.777,1.011,1.33,1.33,0,0,1-.126.94,1.609,1.609,0,0,1-.859.736,1.652,1.652,0,0,1-1.3-.042,2.2,2.2,0,0,1-1.021-1.04,3.31,3.31,0,0,1,.343-3.2,3.379,3.379,0,0,1,1.365-1.263,2.093,2.093,0,0,1,.978-.212,1.975,1.975,0,0,1,.981.322,3.468,3.468,0,0,1,1.231,1.667,7.155,7.155,0,0,1,.426,2.1,7.792,7.792,0,0,1-1.028,4.331,27.774,27.774,0,0,1-2.672,3.557,10.5,10.5,0,0,0-2.023,3.505,4.89,4.89,0,0,0,.228,3.546,2.8,2.8,0,0,0,2.529,1.551,2.259,2.259,0,0,0,1.276-.4,1.758,1.758,0,0,0,.676-.968,2.367,2.367,0,0,0-.341-1.877,1.587,1.587,0,0,0-.98-.718,1.105,1.105,0,0,0-.324-.03.357.357,0,0,1-.115-.008c0-.005.037-.013.112-.021a.955.955,0,0,1,.337,0,1.612,1.612,0,0,1,1.062.711,2.47,2.47,0,0,1,.406,1.984,1.929,1.929,0,0,1-.724,1.077,2.442,2.442,0,0,1-1.381.46,3.044,3.044,0,0,1-1.552-.391,2.983,2.983,0,0,1-1.2-1.254,5.121,5.121,0,0,1-.273-3.733A10.657,10.657,0,0,1,90.232,127a28.008,28.008,0,0,0,2.641-3.523,7.541,7.541,0,0,0,1-4.171,6.9,6.9,0,0,0-.4-2.015,3.2,3.2,0,0,0-1.117-1.542,1.69,1.69,0,0,0-1.7-.1A3.147,3.147,0,0,0,89.38,116.8a3.1,3.1,0,0,0-.362,2.984,2.017,2.017,0,0,0,.915.962,1.484,1.484,0,0,0,1.163.056,1.465,1.465,0,0,0,.793-.649,1.214,1.214,0,0,0,.137-.85,1.387,1.387,0,0,0-.69-.981,1.71,1.71,0,0,0-.421-.12"
                                            transform="translate(-9.225 -12.083)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41219"
                                            data-name="Path 41219"
                                            d="M91.757,104.7a.753.753,0,0,1-.446-.066,1.425,1.425,0,0,1-.777-1.012,1.326,1.326,0,0,1,.127-.94,1.607,1.607,0,0,1,.858-.736,1.652,1.652,0,0,1,1.3.042,2.205,2.205,0,0,1,1.021,1.039,3.311,3.311,0,0,1-.343,3.205,3.379,3.379,0,0,1-1.365,1.263,2.093,2.093,0,0,1-.978.212,1.972,1.972,0,0,1-.981-.322,3.463,3.463,0,0,1-1.231-1.667,7.184,7.184,0,0,1-.426-2.1,7.8,7.8,0,0,1,1.028-4.331,27.775,27.775,0,0,1,2.672-3.557,10.5,10.5,0,0,0,2.023-3.505,4.89,4.89,0,0,0-.228-3.546,2.8,2.8,0,0,0-2.529-1.551,2.259,2.259,0,0,0-1.276.4,1.761,1.761,0,0,0-.676.968,2.367,2.367,0,0,0,.341,1.877,1.584,1.584,0,0,0,.98.718,1.105,1.105,0,0,0,.324.03.357.357,0,0,1,.115.008c0,.005-.037.013-.112.021a.956.956,0,0,1-.337,0,1.609,1.609,0,0,1-1.062-.711,2.47,2.47,0,0,1-.406-1.984,1.929,1.929,0,0,1,.724-1.077,2.451,2.451,0,0,1,1.381-.46,3.045,3.045,0,0,1,1.552.391,2.983,2.983,0,0,1,1.2,1.254A5.121,5.121,0,0,1,94.5,92.3a10.657,10.657,0,0,1-2.058,3.609A28.1,28.1,0,0,0,89.8,99.434a7.541,7.541,0,0,0-1,4.171,6.9,6.9,0,0,0,.4,2.015,3.2,3.2,0,0,0,1.117,1.542,1.69,1.69,0,0,0,1.7.1,3.147,3.147,0,0,0,1.269-1.159,3.1,3.1,0,0,0,.362-2.984,2.021,2.021,0,0,0-.915-.962,1.484,1.484,0,0,0-1.163-.056,1.465,1.465,0,0,0-.793.649,1.214,1.214,0,0,0-.137.85,1.387,1.387,0,0,0,.69.981,1.649,1.649,0,0,0,.421.12"
                                            transform="translate(-9.283 -9.118)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41220" data-name="Path 41220" d="M92.5,112.332a.908.908,0,1,1-.908-.908.907.907,0,0,1,.908.908" transform="translate(-9.512 -11.688)" fill="#e0e0e0"></path>
                                        <path id="Path_41221" data-name="Path 41221" d="M92.941,85.31a.908.908,0,1,1-.908-.908.908.908,0,0,1,.908.908" transform="translate(-9.559 -8.853)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41222"
                                            data-name="Path 41222"
                                            d="M91.358,50.083a1.649,1.649,0,0,0,.421-.12,1.388,1.388,0,0,0,.69-.984,1.218,1.218,0,0,0-.137-.852,1.461,1.461,0,0,0-.794-.652,1.484,1.484,0,0,0-1.165.057,2.026,2.026,0,0,0-.913.968,3.427,3.427,0,0,0,1.634,4.152,1.687,1.687,0,0,0,1.7-.1A3.223,3.223,0,0,0,93.913,51a6.952,6.952,0,0,0,.4-2.018,7.573,7.573,0,0,0-1-4.178,28.3,28.3,0,0,0-2.641-3.534,10.691,10.691,0,0,1-2.058-3.617,5.154,5.154,0,0,1,.269-3.741,2.982,2.982,0,0,1,1.195-1.259,3.032,3.032,0,0,1,1.553-.395,2.443,2.443,0,0,1,1.384.461,1.929,1.929,0,0,1,.724,1.079,2.479,2.479,0,0,1-.405,1.987,1.611,1.611,0,0,1-1.062.714.915.915,0,0,1-.338,0,.349.349,0,0,1-.112-.021.393.393,0,0,1,.115-.008,1.143,1.143,0,0,0,.325-.03,1.585,1.585,0,0,0,.98-.721,2.378,2.378,0,0,0,.34-1.882,1.756,1.756,0,0,0-.677-.969,2.248,2.248,0,0,0-1.276-.4,2.8,2.8,0,0,0-2.53,1.561,4.923,4.923,0,0,0-.225,3.553A10.5,10.5,0,0,0,90.9,41.09a27.84,27.84,0,0,1,2.672,3.568A7.832,7.832,0,0,1,94.6,49a7.159,7.159,0,0,1-.425,2.1,3.475,3.475,0,0,1-1.227,1.674,1.952,1.952,0,0,1-.983.325,2.053,2.053,0,0,1-.979-.212,3.366,3.366,0,0,1-1.367-1.266,3.329,3.329,0,0,1-.345-3.211,2.2,2.2,0,0,1,1.02-1.043,1.646,1.646,0,0,1,1.3-.045,1.614,1.614,0,0,1,.86.738A1.338,1.338,0,0,1,92.58,49a1.429,1.429,0,0,1-.777,1.015.753.753,0,0,1-.446.066"
                                            transform="translate(-9.272 -3.384)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41223"
                                            data-name="Path 41223"
                                            d="M91.629,63.62a1.634,1.634,0,0,0-.421.121,1.386,1.386,0,0,0-.69.984,1.219,1.219,0,0,0,.137.852,1.468,1.468,0,0,0,.794.652,1.485,1.485,0,0,0,1.165-.058,2.024,2.024,0,0,0,.913-.967,3.115,3.115,0,0,0-.363-2.991,3.146,3.146,0,0,0-1.27-1.163,1.688,1.688,0,0,0-1.7.106A3.225,3.225,0,0,0,89.073,62.7a6.952,6.952,0,0,0-.4,2.019,7.573,7.573,0,0,0,1,4.178,28.226,28.226,0,0,0,2.641,3.533,10.7,10.7,0,0,1,2.058,3.618,5.152,5.152,0,0,1-.269,3.74,2.984,2.984,0,0,1-1.195,1.259,3.032,3.032,0,0,1-1.553.395,2.449,2.449,0,0,1-1.384-.461,1.935,1.935,0,0,1-.724-1.079,2.481,2.481,0,0,1,.405-1.988,1.613,1.613,0,0,1,1.062-.713.96.96,0,0,1,.337,0c.076.01.114.017.113.022a.392.392,0,0,1-.115.008,1.111,1.111,0,0,0-.325.03,1.586,1.586,0,0,0-.98.721,2.379,2.379,0,0,0-.34,1.882,1.764,1.764,0,0,0,.677.97,2.247,2.247,0,0,0,1.276.4,2.8,2.8,0,0,0,2.53-1.56,4.923,4.923,0,0,0,.225-3.553,10.509,10.509,0,0,0-2.023-3.513,27.891,27.891,0,0,1-2.672-3.567,7.833,7.833,0,0,1-1.028-4.339,7.184,7.184,0,0,1,.425-2.1A3.481,3.481,0,0,1,90.04,60.93a1.97,1.97,0,0,1,.983-.325,2.085,2.085,0,0,1,.979.211,3.386,3.386,0,0,1,1.367,1.267,3.329,3.329,0,0,1,.345,3.211,2.206,2.206,0,0,1-1.02,1.044,1.65,1.65,0,0,1-1.3.045,1.612,1.612,0,0,1-.86-.738,1.336,1.336,0,0,1-.126-.942,1.428,1.428,0,0,1,.776-1.015.753.753,0,0,1,.447-.067"
                                            transform="translate(-9.27 -6.357)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41224" data-name="Path 41224" d="M92.941,58.2a.908.908,0,1,0-.908.909.909.909,0,0,0,.908-.909" transform="translate(-9.559 -6.009)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41225"
                                            data-name="Path 41225"
                                            d="M41.131,142.133a1.634,1.634,0,0,0-.121-.421,1.386,1.386,0,0,0-.984-.69,1.219,1.219,0,0,0-.852.137,1.468,1.468,0,0,0-.652.794,1.485,1.485,0,0,0,.058,1.165,2.02,2.02,0,0,0,.967.913A3.429,3.429,0,0,0,43.7,142.4a1.688,1.688,0,0,0-.106-1.7,3.225,3.225,0,0,0-1.549-1.115,6.952,6.952,0,0,0-2.019-.4,7.573,7.573,0,0,0-4.178,1,28.224,28.224,0,0,0-3.533,2.641,10.7,10.7,0,0,1-3.618,2.058,5.152,5.152,0,0,1-3.74-.269,2.984,2.984,0,0,1-1.259-1.195,3.032,3.032,0,0,1-.395-1.553,2.449,2.449,0,0,1,.461-1.384,1.935,1.935,0,0,1,1.079-.724,2.478,2.478,0,0,1,1.987.405,1.611,1.611,0,0,1,.714,1.063.934.934,0,0,1,0,.337q-.013.114-.021.113a.392.392,0,0,1-.008-.115,1.111,1.111,0,0,0-.03-.325,1.588,1.588,0,0,0-.721-.98,2.379,2.379,0,0,0-1.882-.34,1.761,1.761,0,0,0-.97.677,2.248,2.248,0,0,0-.4,1.277,2.8,2.8,0,0,0,1.56,2.529,4.923,4.923,0,0,0,3.553.225,10.509,10.509,0,0,0,3.513-2.023,27.891,27.891,0,0,1,3.567-2.672,7.833,7.833,0,0,1,4.339-1.028,7.2,7.2,0,0,1,2.1.424,3.486,3.486,0,0,1,1.674,1.228,1.97,1.97,0,0,1,.325.983,2.075,2.075,0,0,1-.212.979,3.378,3.378,0,0,1-1.266,1.367,3.329,3.329,0,0,1-3.211.345,2.206,2.206,0,0,1-1.044-1.02,1.646,1.646,0,0,1-.044-1.3,1.607,1.607,0,0,1,.738-.86,1.336,1.336,0,0,1,.942-.126,1.429,1.429,0,0,1,1.015.777.751.751,0,0,1,.067.446"
                                            transform="translate(-2.444 -14.568)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41226"
                                            data-name="Path 41226"
                                            d="M69.51,141.863a.757.757,0,0,1-.068.446,1.423,1.423,0,0,1-1.015.777,1.333,1.333,0,0,1-.941-.126,1.608,1.608,0,0,1-.738-.86,1.642,1.642,0,0,1,.045-1.3,2.205,2.205,0,0,1,1.044-1.02,3.325,3.325,0,0,1,3.21.345,3.386,3.386,0,0,1,1.267,1.367,2.063,2.063,0,0,1,.211.979,1.969,1.969,0,0,1-.324.983,3.487,3.487,0,0,1-1.674,1.227,7.172,7.172,0,0,1-2.1.425,7.836,7.836,0,0,1-4.339-1.028,28.007,28.007,0,0,1-3.566-2.672A10.509,10.509,0,0,0,57,139.381a4.919,4.919,0,0,0-3.553.225,2.8,2.8,0,0,0-1.56,2.53,2.247,2.247,0,0,0,.4,1.276,1.764,1.764,0,0,0,.97.677,2.379,2.379,0,0,0,1.882-.34,1.586,1.586,0,0,0,.721-.98,1.113,1.113,0,0,0,.03-.325.392.392,0,0,1,.008-.115c.005,0,.013.037.022.112a.988.988,0,0,1,0,.338,1.613,1.613,0,0,1-.713,1.063,2.48,2.48,0,0,1-1.987.405,1.934,1.934,0,0,1-1.08-.724,2.449,2.449,0,0,1-.461-1.384,3.032,3.032,0,0,1,.395-1.553,2.989,2.989,0,0,1,1.259-1.195,5.15,5.15,0,0,1,3.739-.269,10.69,10.69,0,0,1,3.619,2.058,28.161,28.161,0,0,0,3.533,2.641,7.574,7.574,0,0,0,4.179,1,6.946,6.946,0,0,0,2.018-.4,3.23,3.23,0,0,0,1.55-1.116,1.688,1.688,0,0,0,.1-1.7,3.153,3.153,0,0,0-1.162-1.271,3.121,3.121,0,0,0-2.991-.363,2.022,2.022,0,0,0-.966.913,1.523,1.523,0,0,0,.593,1.958,1.222,1.222,0,0,0,.853.137,1.386,1.386,0,0,0,.984-.69,1.682,1.682,0,0,0,.121-.421"
                                            transform="translate(-5.421 -14.569)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41227" data-name="Path 41227" d="M49.247,141.065a.908.908,0,1,0,.91.908.91.91,0,0,0-.91-.908" transform="translate(-5.07 -14.797)" fill="#e0e0e0"></path>
                                        <path id="Path_41228" data-name="Path 41228" d="M81.391,141.065a.908.908,0,1,0,.909.908.91.91,0,0,0-.909-.908" transform="translate(-8.442 -14.797)" fill="#e0e0e0"></path>
                                        <path id="Path_41229" data-name="Path 41229" d="M18.692,141.065a.908.908,0,1,0,.909.908.909.909,0,0,0-.909-.908" transform="translate(-1.865 -14.797)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41230"
                                            data-name="Path 41230"
                                            d="M41.131,27.566a1.634,1.634,0,0,0-.121-.421,1.386,1.386,0,0,0-.984-.69,1.219,1.219,0,0,0-.852.137,1.521,1.521,0,0,0-.593,1.958,2.018,2.018,0,0,0,.967.914,3.117,3.117,0,0,0,2.991-.363A3.152,3.152,0,0,0,43.7,27.83a1.687,1.687,0,0,0-.106-1.7,3.225,3.225,0,0,0-1.549-1.115,6.952,6.952,0,0,0-2.019-.4,7.573,7.573,0,0,0-4.178,1,28.225,28.225,0,0,0-3.533,2.641A10.7,10.7,0,0,1,28.7,30.307a5.152,5.152,0,0,1-3.74-.269A2.984,2.984,0,0,1,23.7,28.842a3.032,3.032,0,0,1-.395-1.553,2.449,2.449,0,0,1,.461-1.384,1.935,1.935,0,0,1,1.079-.724,2.478,2.478,0,0,1,1.987.405,1.611,1.611,0,0,1,.714,1.062.934.934,0,0,1,0,.337q-.013.114-.021.113a.393.393,0,0,1-.008-.115,1.111,1.111,0,0,0-.03-.325,1.588,1.588,0,0,0-.721-.98,2.379,2.379,0,0,0-1.882-.34,1.764,1.764,0,0,0-.97.676,2.252,2.252,0,0,0-.4,1.277,2.8,2.8,0,0,0,1.56,2.53,4.923,4.923,0,0,0,3.553.225,10.509,10.509,0,0,0,3.513-2.023A27.891,27.891,0,0,1,35.7,25.352a7.833,7.833,0,0,1,4.339-1.028,7.2,7.2,0,0,1,2.1.424,3.486,3.486,0,0,1,1.674,1.228,1.97,1.97,0,0,1,.325.983,2.075,2.075,0,0,1-.212.979A3.37,3.37,0,0,1,42.668,29.3a3.325,3.325,0,0,1-3.211.345,2.2,2.2,0,0,1-1.044-1.02,1.646,1.646,0,0,1-.044-1.3,1.607,1.607,0,0,1,.738-.86,1.336,1.336,0,0,1,.942-.126,1.43,1.43,0,0,1,1.015.776.753.753,0,0,1,.067.447"
                                            transform="translate(-2.444 -2.55)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41231"
                                            data-name="Path 41231"
                                            d="M69.51,27.295a.757.757,0,0,1-.068.446,1.423,1.423,0,0,1-1.015.777,1.333,1.333,0,0,1-.941-.126,1.6,1.6,0,0,1-.738-.86,1.642,1.642,0,0,1,.045-1.3,2.206,2.206,0,0,1,1.044-1.02,3.328,3.328,0,0,1,3.21.345,3.386,3.386,0,0,1,1.267,1.367,2.063,2.063,0,0,1,.211.979,1.969,1.969,0,0,1-.324.983,3.487,3.487,0,0,1-1.674,1.227,7.172,7.172,0,0,1-2.1.425,7.836,7.836,0,0,1-4.339-1.028,28.007,28.007,0,0,1-3.566-2.672A10.509,10.509,0,0,0,57,24.813a4.923,4.923,0,0,0-3.553.225,2.8,2.8,0,0,0-1.56,2.53,2.247,2.247,0,0,0,.4,1.276,1.764,1.764,0,0,0,.97.677,2.379,2.379,0,0,0,1.882-.34,1.584,1.584,0,0,0,.721-.98,1.111,1.111,0,0,0,.03-.325.392.392,0,0,1,.008-.115c.005,0,.013.037.022.113a.982.982,0,0,1,0,.337,1.613,1.613,0,0,1-.713,1.062,2.48,2.48,0,0,1-1.987.405,1.934,1.934,0,0,1-1.08-.724,2.449,2.449,0,0,1-.461-1.384,3.032,3.032,0,0,1,.395-1.553,2.989,2.989,0,0,1,1.259-1.195,5.15,5.15,0,0,1,3.739-.269,10.69,10.69,0,0,1,3.619,2.058,28.16,28.16,0,0,0,3.533,2.641,7.574,7.574,0,0,0,4.179,1,6.946,6.946,0,0,0,2.018-.4,3.234,3.234,0,0,0,1.55-1.115,1.689,1.689,0,0,0,.1-1.7A3.427,3.427,0,0,0,67.926,25.4a2.02,2.02,0,0,0-.966.914,1.522,1.522,0,0,0,.593,1.958,1.222,1.222,0,0,0,.853.137,1.386,1.386,0,0,0,.984-.69,1.682,1.682,0,0,0,.121-.421"
                                            transform="translate(-5.421 -2.552)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41232" data-name="Path 41232" d="M49.247,26.5a.908.908,0,1,0,.91.908.909.909,0,0,0-.91-.908" transform="translate(-5.07 -2.779)" fill="#e0e0e0"></path>
                                        <path id="Path_41233" data-name="Path 41233" d="M81.391,26.5a.908.908,0,1,0,.909.908.909.909,0,0,0-.909-.908" transform="translate(-8.442 -2.779)" fill="#e0e0e0"></path>
                                        <path id="Path_41234" data-name="Path 41234" d="M18.692,26.5a.908.908,0,1,0,.909.908.909.909,0,0,0-.909-.908" transform="translate(-1.865 -2.779)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41235"
                                            data-name="Path 41235"
                                            d="M78.123,125.038s-.005-.149-.008-.437,0-.715-.008-1.273c0-1.124-.009-2.782-.015-4.937-.009-4.314-.021-10.612-.036-18.58-.016-15.923-.039-38.511-.066-65.193l.133.133-63.472.013h-.007l.147-.147c-.011,33.916-.021,65.264-.029,90.419l-.118-.118,46.176.062,12.788.03,3.358.013c.76,0,1.157.013,1.157.013s-.38.009-1.132.013l-3.335.013-12.762.03-46.249.062h-.118v-.118c-.008-25.155-.018-56.5-.028-90.419v-.146h.153l63.472.013h.133v.133c-.027,26.718-.05,49.336-.066,65.28-.015,7.955-.027,14.244-.036,18.55-.006,2.143-.013,3.791-.016,4.91q0,.827-.007,1.259c0,.281-.008.421-.008.421"
                                            transform="translate(-1.521 -3.616)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41236"
                                            data-name="Path 41236"
                                            d="M98.48,20.472a20.018,20.018,0,0,0-2.328,1.291,25.841,25.841,0,0,0-4.679,4.394c-1.656,1.9-3.029,3.732-4.078,5.015-.521.645-.964,1.151-1.282,1.491a3.309,3.309,0,0,1-.534.487,3.418,3.418,0,0,1,.449-.563c.289-.361.705-.883,1.2-1.543,1.006-1.313,2.353-3.168,4.021-5.08a23.234,23.234,0,0,1,4.785-4.373,7.463,7.463,0,0,1,.976-.56l.412-.209c.131-.055.255-.095.364-.135a3.4,3.4,0,0,1,.69-.214"
                                            transform="translate(-8.977 -2.147)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41237"
                                            data-name="Path 41237"
                                            d="M98.8,148.8a3.467,3.467,0,0,1-.491-.54l-1.277-1.515c-1.084-1.273-2.624-3-4.429-4.8s-3.537-3.334-4.814-4.415c-.607-.508-1.115-.934-1.52-1.272a3.458,3.458,0,0,1-.541-.49,3.478,3.478,0,0,1,.61.4c.384.27.925.68,1.582,1.2a59.973,59.973,0,0,1,9.272,9.241c.524.655.935,1.195,1.207,1.577a3.526,3.526,0,0,1,.4.61"
                                            transform="translate(-8.992 -14.242)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41238"
                                            data-name="Path 41238"
                                            d="M0,148.651a3.424,3.424,0,0,1,.361-.628c.246-.4.627-.952,1.119-1.625a39.93,39.93,0,0,1,9.3-9.05c.686-.474,1.252-.84,1.654-1.074a3.385,3.385,0,0,1,.638-.344,3.525,3.525,0,0,1-.576.439c-.382.263-.929.653-1.6,1.147a47.292,47.292,0,0,0-9.253,9.007c-.511.653-.916,1.19-1.19,1.565a3.433,3.433,0,0,1-.455.563"
                                            transform="translate(0 -14.258)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41239"
                                            data-name="Path 41239"
                                            d="M.249,20.472a3.394,3.394,0,0,1,.534.475c.372.359.84.811,1.4,1.349,1.179,1.138,2.839,2.675,4.681,4.369s3.486,3.26,4.63,4.439c.572.588,1.028,1.072,1.331,1.418a3.328,3.328,0,0,1,.452.552,3.292,3.292,0,0,1-.534-.474l-1.395-1.349c-1.18-1.138-2.84-2.676-4.683-4.37s-3.485-3.26-4.629-4.438C1.46,21.854,1,21.371.7,21.025a3.322,3.322,0,0,1-.452-.553"
                                            transform="translate(-0.026 -2.147)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41240"
                                            data-name="Path 41240"
                                            d="M96.052,23.454c.081,0,.147,24.545.147,54.814s-.066,54.819-.147,54.819-.147-24.538-.147-54.819.066-54.814.147-54.814"
                                            transform="translate(-10.06 -2.46)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41241"
                                            data-name="Path 41241"
                                            d="M85.067,23.154c0,.081-18.324.147-40.922.147s-40.926-.065-40.926-.147,18.321-.146,40.926-.146,40.922.065,40.922.146"
                                            transform="translate(-0.338 -2.413)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41242"
                                            data-name="Path 41242"
                                            d="M3.485,131.32c-.081,0-.147-24.148-.147-53.93s.066-53.936.147-53.936S3.632,47.6,3.632,77.39s-.066,53.93-.147,53.93"
                                            transform="translate(-0.35 -2.46)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41243"
                                            data-name="Path 41243"
                                            d="M86.6,146.2c0,.081-18.1.147-40.416.147S5.76,146.28,5.76,146.2s18.094-.147,40.42-.147,40.416.066,40.416.147"
                                            transform="translate(-0.604 -15.32)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41244"
                                            data-name="Path 41244"
                                            d="M80.3,126.718s-.005-.157-.008-.457-.005-.747-.009-1.332c0-1.175-.012-2.91-.021-5.165-.012-4.514-.03-11.109-.051-19.457-.03-16.682-.073-40.365-.123-68.386l.132.132-68.664-.245.147-.147v.1c.1,35.6.2,68.539.279,95.144l-.119-.119,49.761-.077,13.8-.008,3.625,0c.821,0,1.25.01,1.25.01s-.412.01-1.224.016l-3.6.024-13.774.069-49.834.2h-.119v-.119c-.093-26.605-.209-59.545-.334-95.144v-.251h.148l68.664.274h.132v.132c0,28.057-.007,51.769-.01,68.472-.008,8.335-.014,14.921-.019,19.427-.005,2.244-.009,3.969-.012,5.139q-.005.866-.007,1.318c0,.294-.007.44-.007.44"
                                            transform="translate(-1.197 -3.306)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <g id="Group_17336" data-name="Group 17336" transform="translate(10.323 33.753)" opacity="0.2">
                                            <g id="Group_17335" data-name="Group 17335">
                                                <g id="Group_17334" data-name="Group 17334" clip-path="url(#clip-path-2)">
                                                    <path
                                                        id="Path_41245"
                                                        data-name="Path 41245"
                                                        d="M14.31,37.854A3.419,3.419,0,0,1,12.921,38a3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                                        transform="translate(-11.533 -37.708)"
                                                        fill="#e0e0e0"
                                                    ></path>
                                                </g>
                                            </g>
                                        </g>
                                        <path
                                            id="Path_41246"
                                            data-name="Path 41246"
                                            d="M17.891,137.823c-.086.009-.169-.478-.147-1.062s.071-1.045.147-1.054.169.478.146,1.062-.07,1.045-.146,1.054"
                                            transform="translate(-1.861 -14.235)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41247"
                                            data-name="Path 41247"
                                            d="M15.4,137.855c-.086.009-.169-.478-.147-1.062s.071-1.045.147-1.054.169.478.146,1.062-.07,1.045-.146,1.054"
                                            transform="translate(-1.6 -14.238)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41248"
                                            data-name="Path 41248"
                                            d="M20.711,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.111-1.025.162.451.182,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-2.153 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41249"
                                            data-name="Path 41249"
                                            d="M23.3,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.111-1.025.162.451.182,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-2.424 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41250"
                                            data-name="Path 41250"
                                            d="M25.882,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-2.695 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41251"
                                            data-name="Path 41251"
                                            d="M28.468,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-2.967 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41252"
                                            data-name="Path 41252"
                                            d="M31.054,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-3.238 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41253"
                                            data-name="Path 41253"
                                            d="M33.64,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-3.509 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41254"
                                            data-name="Path 41254"
                                            d="M36.226,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-3.78 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41255"
                                            data-name="Path 41255"
                                            d="M38.811,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-4.052 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41256"
                                            data-name="Path 41256"
                                            d="M41.4,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-4.323 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41257"
                                            data-name="Path 41257"
                                            d="M43.983,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-4.594 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41258"
                                            data-name="Path 41258"
                                            d="M46.569,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-4.865 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41259"
                                            data-name="Path 41259"
                                            d="M49.155,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-5.137 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41260"
                                            data-name="Path 41260"
                                            d="M51.741,137.726c-.081,0-.163-.452-.183-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.11,1.025"
                                            transform="translate(-5.408 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41261"
                                            data-name="Path 41261"
                                            d="M54.326,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-5.679 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41262"
                                            data-name="Path 41262"
                                            d="M56.912,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-5.95 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41263"
                                            data-name="Path 41263"
                                            d="M59.5,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.111-1.025.162.451.182,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-6.221 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41264"
                                            data-name="Path 41264"
                                            d="M62.083,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.111-1.025.162.451.182,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-6.493 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41265"
                                            data-name="Path 41265"
                                            d="M64.669,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.111-1.025.162.451.182,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-6.764 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41266"
                                            data-name="Path 41266"
                                            d="M67.255,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.111-1.025.162.451.182,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-7.035 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41267"
                                            data-name="Path 41267"
                                            d="M69.841,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-7.306 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41268"
                                            data-name="Path 41268"
                                            d="M72.427,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-7.578 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41269"
                                            data-name="Path 41269"
                                            d="M75.013,137.726c-.081,0-.163-.452-.183-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.11,1.025"
                                            transform="translate(-7.849 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41270"
                                            data-name="Path 41270"
                                            d="M77.6,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-8.12 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41271"
                                            data-name="Path 41271"
                                            d="M80.184,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-8.391 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41272"
                                            data-name="Path 41272"
                                            d="M82.77,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.111-1.025.162.451.182,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-8.663 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41273"
                                            data-name="Path 41273"
                                            d="M85.356,137.726c-.081,0-.162-.452-.182-1.015s.03-1.022.11-1.025.163.451.183,1.015-.03,1.022-.111,1.025"
                                            transform="translate(-8.934 -14.233)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41274" data-name="Path 41274" d="M88,134.948a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -14.14)" fill="#e0e0e0"></path>
                                        <path id="Path_41275" data-name="Path 41275" d="M88,132.069a5.155,5.155,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -13.838)" fill="#e0e0e0"></path>
                                        <path id="Path_41276" data-name="Path 41276" d="M88,129.191a5.154,5.154,0,0,1-2.443,0,5.155,5.155,0,0,1,2.443,0" transform="translate(-8.974 -13.536)" fill="#e0e0e0"></path>
                                        <path id="Path_41277" data-name="Path 41277" d="M88,126.312a5.155,5.155,0,0,1-2.443,0,5.185,5.185,0,0,1,2.443,0" transform="translate(-8.974 -13.234)" fill="#e0e0e0"></path>
                                        <path id="Path_41278" data-name="Path 41278" d="M88,123.434a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -12.932)" fill="#e0e0e0"></path>
                                        <path id="Path_41279" data-name="Path 41279" d="M88,120.556a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -12.63)" fill="#e0e0e0"></path>
                                        <path id="Path_41280" data-name="Path 41280" d="M88,117.677a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -12.328)" fill="#e0e0e0"></path>
                                        <path id="Path_41281" data-name="Path 41281" d="M88,114.8a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -12.026)" fill="#e0e0e0"></path>
                                        <path id="Path_41282" data-name="Path 41282" d="M88,111.921a5.155,5.155,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -11.724)" fill="#e0e0e0"></path>
                                        <path id="Path_41283" data-name="Path 41283" d="M88,109.042a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -11.422)" fill="#e0e0e0"></path>
                                        <path id="Path_41284" data-name="Path 41284" d="M88,106.164a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -11.121)" fill="#e0e0e0"></path>
                                        <path id="Path_41285" data-name="Path 41285" d="M88,103.285a5.154,5.154,0,0,1-2.443,0,5.185,5.185,0,0,1,2.443,0" transform="translate(-8.974 -10.819)" fill="#e0e0e0"></path>
                                        <path id="Path_41286" data-name="Path 41286" d="M88,100.407a5.154,5.154,0,0,1-2.443,0,5.185,5.185,0,0,1,2.443,0" transform="translate(-8.974 -10.517)" fill="#e0e0e0"></path>
                                        <path id="Path_41287" data-name="Path 41287" d="M88,97.529a5.154,5.154,0,0,1-2.443,0,5.155,5.155,0,0,1,2.443,0" transform="translate(-8.974 -10.215)" fill="#e0e0e0"></path>
                                        <path id="Path_41288" data-name="Path 41288" d="M88,94.65a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -9.913)" fill="#e0e0e0"></path>
                                        <path id="Path_41289" data-name="Path 41289" d="M88,91.772a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -9.611)" fill="#e0e0e0"></path>
                                        <path id="Path_41290" data-name="Path 41290" d="M88,88.893a5.155,5.155,0,0,1-2.443,0,5.185,5.185,0,0,1,2.443,0" transform="translate(-8.974 -9.309)" fill="#e0e0e0"></path>
                                        <path id="Path_41291" data-name="Path 41291" d="M88,86.015a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -9.007)" fill="#e0e0e0"></path>
                                        <path id="Path_41292" data-name="Path 41292" d="M88,83.137a5.154,5.154,0,0,1-2.443,0,5.155,5.155,0,0,1,2.443,0" transform="translate(-8.974 -8.705)" fill="#e0e0e0"></path>
                                        <path id="Path_41293" data-name="Path 41293" d="M88,80.258a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -8.403)" fill="#e0e0e0"></path>
                                        <path id="Path_41294" data-name="Path 41294" d="M88,77.38a5.155,5.155,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -8.101)" fill="#e0e0e0"></path>
                                        <path id="Path_41295" data-name="Path 41295" d="M88,74.5a5.154,5.154,0,0,1-2.443,0A5.154,5.154,0,0,1,88,74.5" transform="translate(-8.974 -7.799)" fill="#e0e0e0"></path>
                                        <path id="Path_41296" data-name="Path 41296" d="M88,71.623a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -7.497)" fill="#e0e0e0"></path>
                                        <path id="Path_41297" data-name="Path 41297" d="M88,68.745a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -7.196)" fill="#e0e0e0"></path>
                                        <path id="Path_41298" data-name="Path 41298" d="M88,65.866a5.155,5.155,0,0,1-2.443,0,5.185,5.185,0,0,1,2.443,0" transform="translate(-8.974 -6.894)" fill="#e0e0e0"></path>
                                        <path id="Path_41299" data-name="Path 41299" d="M88,62.988a5.155,5.155,0,0,1-2.443,0,5.185,5.185,0,0,1,2.443,0" transform="translate(-8.974 -6.592)" fill="#e0e0e0"></path>
                                        <path id="Path_41300" data-name="Path 41300" d="M88,60.11a5.154,5.154,0,0,1-2.443,0,5.155,5.155,0,0,1,2.443,0" transform="translate(-8.974 -6.29)" fill="#e0e0e0"></path>
                                        <path id="Path_41301" data-name="Path 41301" d="M88,57.231a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -5.988)" fill="#e0e0e0"></path>
                                        <path id="Path_41302" data-name="Path 41302" d="M88,54.353a5.154,5.154,0,0,1-2.443,0,5.155,5.155,0,0,1,2.443,0" transform="translate(-8.974 -5.686)" fill="#e0e0e0"></path>
                                        <path id="Path_41303" data-name="Path 41303" d="M88,51.474a5.154,5.154,0,0,1-2.443,0,5.185,5.185,0,0,1,2.443,0" transform="translate(-8.974 -5.384)" fill="#e0e0e0"></path>
                                        <path id="Path_41304" data-name="Path 41304" d="M88,48.6a5.154,5.154,0,0,1-2.443,0A5.154,5.154,0,0,1,88,48.6" transform="translate(-8.974 -5.082)" fill="#e0e0e0"></path>
                                        <path id="Path_41305" data-name="Path 41305" d="M88,45.718a5.155,5.155,0,0,1-2.443,0,5.185,5.185,0,0,1,2.443,0" transform="translate(-8.974 -4.78)" fill="#e0e0e0"></path>
                                        <path id="Path_41306" data-name="Path 41306" d="M88,42.839a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -4.478)" fill="#e0e0e0"></path>
                                        <path id="Path_41307" data-name="Path 41307" d="M88,39.961a5.154,5.154,0,0,1-2.443,0,5.185,5.185,0,0,1,2.443,0" transform="translate(-8.974 -4.176)" fill="#e0e0e0"></path>
                                        <path id="Path_41308" data-name="Path 41308" d="M88,37.083a5.154,5.154,0,0,1-2.443,0,5.154,5.154,0,0,1,2.443,0" transform="translate(-8.974 -3.874)" fill="#e0e0e0"></path>
                                        <path id="Path_41309" data-name="Path 41309" d="M88,34.2a5.155,5.155,0,0,1-2.443,0A5.154,5.154,0,0,1,88,34.2" transform="translate(-8.974 -3.572)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41310"
                                            data-name="Path 41310"
                                            d="M85.153,34.351a2.615,2.615,0,0,1-.147-1.207,2.607,2.607,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-8.917 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41311"
                                            data-name="Path 41311"
                                            d="M82.41,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-8.629 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41312"
                                            data-name="Path 41312"
                                            d="M79.668,34.351a2.615,2.615,0,0,1-.147-1.207,2.607,2.607,0,0,1,.147-1.206,2.607,2.607,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-8.341 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41313"
                                            data-name="Path 41313"
                                            d="M76.926,34.351a2.615,2.615,0,0,1-.147-1.207,2.607,2.607,0,0,1,.147-1.206,2.607,2.607,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-8.054 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41314"
                                            data-name="Path 41314"
                                            d="M74.184,34.351a2.6,2.6,0,0,1-.148-1.207,2.587,2.587,0,0,1,.148-1.206,2.628,2.628,0,0,1,.146,1.206,2.636,2.636,0,0,1-.146,1.207"
                                            transform="translate(-7.766 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41315"
                                            data-name="Path 41315"
                                            d="M71.441,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.607,2.607,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-7.478 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41316"
                                            data-name="Path 41316"
                                            d="M68.7,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-7.191 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41317"
                                            data-name="Path 41317"
                                            d="M65.957,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.607,2.607,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-6.903 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41318"
                                            data-name="Path 41318"
                                            d="M63.214,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.607,2.607,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-6.615 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41319"
                                            data-name="Path 41319"
                                            d="M60.472,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.614,2.614,0,0,1,.146,1.206,2.622,2.622,0,0,1-.146,1.207"
                                            transform="translate(-6.328 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41320"
                                            data-name="Path 41320"
                                            d="M57.73,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-6.04 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41321"
                                            data-name="Path 41321"
                                            d="M54.988,34.351a2.608,2.608,0,0,1-.148-1.207,2.6,2.6,0,0,1,.148-1.206,2.628,2.628,0,0,1,.146,1.206,2.636,2.636,0,0,1-.146,1.207"
                                            transform="translate(-5.752 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41322"
                                            data-name="Path 41322"
                                            d="M52.245,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-5.465 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41323"
                                            data-name="Path 41323"
                                            d="M49.5,34.351a2.615,2.615,0,0,1-.147-1.207,2.607,2.607,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-5.177 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41324"
                                            data-name="Path 41324"
                                            d="M46.761,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.607,2.607,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-4.89 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41325"
                                            data-name="Path 41325"
                                            d="M44.018,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.607,2.607,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-4.602 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41326"
                                            data-name="Path 41326"
                                            d="M41.276,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.607,2.607,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-4.314 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41327"
                                            data-name="Path 41327"
                                            d="M38.534,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-4.027 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41328"
                                            data-name="Path 41328"
                                            d="M35.791,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-3.739 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41329"
                                            data-name="Path 41329"
                                            d="M33.049,34.351a2.615,2.615,0,0,1-.147-1.207,2.607,2.607,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-3.451 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41330"
                                            data-name="Path 41330"
                                            d="M30.307,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.614,2.614,0,0,1,.146,1.206,2.622,2.622,0,0,1-.146,1.207"
                                            transform="translate(-3.164 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41331"
                                            data-name="Path 41331"
                                            d="M27.565,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-2.876 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41332"
                                            data-name="Path 41332"
                                            d="M24.822,34.351a2.615,2.615,0,0,1-.147-1.207,2.607,2.607,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-2.588 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41333"
                                            data-name="Path 41333"
                                            d="M22.08,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-2.301 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41334"
                                            data-name="Path 41334"
                                            d="M19.338,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-2.013 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41335"
                                            data-name="Path 41335"
                                            d="M16.595,34.351a2.615,2.615,0,0,1-.147-1.207,2.608,2.608,0,0,1,.147-1.206,2.608,2.608,0,0,1,.147,1.206,2.615,2.615,0,0,1-.147,1.207"
                                            transform="translate(-1.725 -3.35)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41336"
                                            data-name="Path 41336"
                                            d="M14.31,35.562a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -3.715)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41337"
                                            data-name="Path 41337"
                                            d="M14.31,40.147a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147A3.419,3.419,0,0,1,12.921,40a3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -4.196)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41338"
                                            data-name="Path 41338"
                                            d="M14.31,42.44a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -4.436)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41339"
                                            data-name="Path 41339"
                                            d="M14.31,44.732a3.4,3.4,0,0,1-1.388.147,3.4,3.4,0,0,1-1.388-.147,3.428,3.428,0,0,1,1.388-.146,3.428,3.428,0,0,1,1.388.146"
                                            transform="translate(-1.21 -4.677)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41340"
                                            data-name="Path 41340"
                                            d="M14.31,47.025a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -4.917)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41341"
                                            data-name="Path 41341"
                                            d="M14.31,49.318a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -5.158)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41342"
                                            data-name="Path 41342"
                                            d="M14.31,51.611a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -5.398)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41343"
                                            data-name="Path 41343"
                                            d="M14.31,53.9a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -5.639)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41344"
                                            data-name="Path 41344"
                                            d="M14.31,56.2a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -5.879)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41345"
                                            data-name="Path 41345"
                                            d="M14.31,58.489a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -6.12)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41346"
                                            data-name="Path 41346"
                                            d="M14.31,60.782a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -6.36)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41347"
                                            data-name="Path 41347"
                                            d="M14.31,63.074a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -6.601)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41348"
                                            data-name="Path 41348"
                                            d="M14.31,65.367a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -6.841)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41349"
                                            data-name="Path 41349"
                                            d="M14.31,67.66a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -7.082)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41350"
                                            data-name="Path 41350"
                                            d="M14.31,69.952a3.4,3.4,0,0,1-1.388.147,3.4,3.4,0,0,1-1.388-.147,3.428,3.428,0,0,1,1.388-.146,3.428,3.428,0,0,1,1.388.146"
                                            transform="translate(-1.21 -7.322)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41351"
                                            data-name="Path 41351"
                                            d="M14.31,72.245a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -7.563)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41352"
                                            data-name="Path 41352"
                                            d="M14.31,74.538a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.428,3.428,0,0,1,1.388-.146,3.428,3.428,0,0,1,1.388.146"
                                            transform="translate(-1.21 -7.803)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41353"
                                            data-name="Path 41353"
                                            d="M14.31,76.831a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -8.044)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41354"
                                            data-name="Path 41354"
                                            d="M14.31,79.123a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -8.284)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41355"
                                            data-name="Path 41355"
                                            d="M14.31,81.416a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -8.525)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41356"
                                            data-name="Path 41356"
                                            d="M14.31,83.709a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -8.765)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41357"
                                            data-name="Path 41357"
                                            d="M14.31,86a3.419,3.419,0,0,1-1.388.147A3.419,3.419,0,0,1,11.533,86a3.419,3.419,0,0,1,1.388-.147A3.419,3.419,0,0,1,14.31,86"
                                            transform="translate(-1.21 -9.006)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41358"
                                            data-name="Path 41358"
                                            d="M14.31,88.294a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -9.246)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41359"
                                            data-name="Path 41359"
                                            d="M14.31,90.587a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -9.487)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41360"
                                            data-name="Path 41360"
                                            d="M14.31,92.88a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -9.727)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41361"
                                            data-name="Path 41361"
                                            d="M14.31,95.172a3.4,3.4,0,0,1-1.388.147,3.4,3.4,0,0,1-1.388-.147,3.428,3.428,0,0,1,1.388-.146,3.428,3.428,0,0,1,1.388.146"
                                            transform="translate(-1.21 -9.968)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41362"
                                            data-name="Path 41362"
                                            d="M14.31,97.465a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -10.208)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41363"
                                            data-name="Path 41363"
                                            d="M14.31,99.758a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -10.449)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41364"
                                            data-name="Path 41364"
                                            d="M14.31,102.051a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -10.689)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41365"
                                            data-name="Path 41365"
                                            d="M14.31,104.343a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -10.93)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41366"
                                            data-name="Path 41366"
                                            d="M14.31,106.636a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -11.17)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41367"
                                            data-name="Path 41367"
                                            d="M14.31,108.929a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -11.411)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41368"
                                            data-name="Path 41368"
                                            d="M14.31,111.221a3.4,3.4,0,0,1-1.388.147,3.4,3.4,0,0,1-1.388-.147,3.428,3.428,0,0,1,1.388-.146,3.428,3.428,0,0,1,1.388.146"
                                            transform="translate(-1.21 -11.651)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41369"
                                            data-name="Path 41369"
                                            d="M14.31,113.514a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -11.892)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41370"
                                            data-name="Path 41370"
                                            d="M14.31,115.807a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.429,3.429,0,0,1,1.388-.146,3.429,3.429,0,0,1,1.388.146"
                                            transform="translate(-1.21 -12.132)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41371"
                                            data-name="Path 41371"
                                            d="M14.31,118.1a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -12.373)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41372"
                                            data-name="Path 41372"
                                            d="M14.31,120.392a3.4,3.4,0,0,1-1.388.147,3.4,3.4,0,0,1-1.388-.147,3.428,3.428,0,0,1,1.388-.146,3.428,3.428,0,0,1,1.388.146"
                                            transform="translate(-1.21 -12.613)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41373"
                                            data-name="Path 41373"
                                            d="M14.31,122.685a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -12.854)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41374"
                                            data-name="Path 41374"
                                            d="M14.31,124.978a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.428,3.428,0,0,1,1.388-.146,3.428,3.428,0,0,1,1.388.146"
                                            transform="translate(-1.21 -13.094)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41375"
                                            data-name="Path 41375"
                                            d="M14.31,127.271a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -13.335)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41376"
                                            data-name="Path 41376"
                                            d="M14.31,129.563a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.419,3.419,0,0,1,1.388-.147,3.419,3.419,0,0,1,1.388.147"
                                            transform="translate(-1.21 -13.575)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41377"
                                            data-name="Path 41377"
                                            d="M14.31,131.856a3.419,3.419,0,0,1-1.388.147,3.419,3.419,0,0,1-1.388-.147,3.428,3.428,0,0,1,1.388-.146,3.428,3.428,0,0,1,1.388.146"
                                            transform="translate(-1.21 -13.816)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41378"
                                            data-name="Path 41378"
                                            d="M14.31,134.149a3.4,3.4,0,0,1-1.388.147,3.4,3.4,0,0,1-1.388-.147A3.428,3.428,0,0,1,12.921,134a3.428,3.428,0,0,1,1.388.146"
                                            transform="translate(-1.21 -14.056)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <rect id="Rectangle_15831" data-name="Rectangle 15831" width="63.049" height="90.467" transform="translate(13.188 31.006)" fill="#fff"></rect>
                                        <path id="Path_41379" data-name="Path 41379" d="M14.579,45.978c10.7,12.733,23.316,26.1,33.572,39.2L14.629,94.132Z" transform="translate(-1.529 -4.823)" fill="#f5f5f5"></path>
                                        <path id="Path_41380" data-name="Path 41380" d="M14.691,96.485l.038,33.677,63.408-.489L77.9,82.82Q46.209,89.25,14.691,96.485" transform="translate(-1.541 -8.687)" fill="#fafafa"></path>
                                        <rect id="Rectangle_15832" data-name="Rectangle 15832" width="63.396" height="66.085" transform="translate(123.979 0.019)" fill="#e0e0e0"></rect>
                                        <rect id="Rectangle_15833" data-name="Rectangle 15833" width="63.396" height="66.085" transform="translate(119.686 0.019)" fill="#455a64"></rect>
                                        <rect id="Rectangle_15834" data-name="Rectangle 15834" width="63.435" height="66.124" transform="translate(119.666 -0.001)" fill="#f5f5f5"></rect>
                                        <rect id="Rectangle_15835" data-name="Rectangle 15835" width="46.351" height="48.317" transform="translate(128.208 8.904)" fill="#fff"></rect>
                                        <path
                                            id="Path_41381"
                                            data-name="Path 41381"
                                            d="M142.241,64.285a7.549,7.549,0,0,1-1.144,1.33c-.74.781-1.78,1.839-2.947,2.987s-2.238,2.172-3.027,2.9a7.439,7.439,0,0,1-1.34,1.115,7.419,7.419,0,0,1,1.138-1.324c.74-.781,1.783-1.841,2.953-2.993s2.243-2.177,3.034-2.9a7.272,7.272,0,0,1,1.334-1.11"
                                            transform="translate(-14.033 -6.743)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41382"
                                            data-name="Path 41382"
                                            d="M195.015,64.152a7.587,7.587,0,0,1,1.33,1.144c.781.74,1.839,1.78,2.987,2.946s2.172,2.239,2.9,3.029a7.3,7.3,0,0,1,1.115,1.339,7.381,7.381,0,0,1-1.324-1.138c-.781-.74-1.841-1.783-2.993-2.953s-2.177-2.243-2.9-3.034a7.271,7.271,0,0,1-1.11-1.334"
                                            transform="translate(-20.456 -6.729)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41383"
                                            data-name="Path 41383"
                                            d="M194.874,9.113a7.587,7.587,0,0,1,1.144-1.33c.74-.781,1.78-1.839,2.946-2.987s2.239-2.172,3.028-2.9a7.4,7.4,0,0,1,1.34-1.115,7.382,7.382,0,0,1-1.138,1.324c-.74.781-1.783,1.841-2.953,2.993S197,7.277,196.207,8a7.272,7.272,0,0,1-1.334,1.11"
                                            transform="translate(-20.441 -0.082)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41384"
                                            data-name="Path 41384"
                                            d="M142.113,9.232a7.589,7.589,0,0,1-1.33-1.144c-.781-.74-1.839-1.78-2.987-2.946s-2.172-2.238-2.9-3.029A7.346,7.346,0,0,1,133.783.774a7.43,7.43,0,0,1,1.324,1.138c.781.74,1.841,1.783,2.993,2.953S140.277,7.107,141,7.9a7.271,7.271,0,0,1,1.11,1.334"
                                            transform="translate(-14.033 -0.081)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41385"
                                            data-name="Path 41385"
                                            d="M189.433,58.24a2,2,0,0,1-.01-.235c0-.166-.006-.388-.011-.675,0-.606-.012-1.477-.021-2.608-.011-2.289-.027-5.619-.047-9.847-.022-8.462-.054-20.518-.091-34.952l.179.178-46.221.027h0l.2-.2c-.011,17.734-.021,34.325-.03,48.317l-.175-.176,33.469.09,9.4.046,2.488.021.643.01a2.09,2.09,0,0,1,.224.01,1.479,1.479,0,0,1-.2.01l-.624.01-2.453.021-9.361.046-33.582.09h-.176V58.24c-.009-13.992-.019-30.583-.03-48.317V9.717h.209l46.221.027h.179v.179c-.038,14.482-.069,26.577-.091,35.067-.02,4.211-.036,7.527-.047,9.807-.009,1.116-.016,1.976-.021,2.573,0,.279-.008.495-.011.655a1.641,1.641,0,0,1-.01.215"
                                            transform="translate(-15 -1.019)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41386"
                                            data-name="Path 41386"
                                            d="M159.253,48.124a10.255,10.255,0,0,1-.456-13.487c1.288-1.479,3-2.557,4.194-4.114,2.583-3.369,2.547-8.676,6.143-10.934,2.624-1.647,6.391-.707,8.306,1.728a8.8,8.8,0,0,1,.832,8.809c-.917,2.095-2.513,3.875-3.169,6.066-.67,2.24-.287,4.7-.983,6.928-.84,2.7-3.693,4.4-6.342,5.382a11.886,11.886,0,0,1-8.526-.378"
                                            transform="translate(-16.415 -1.968)"
                                            fill="#f5f5f5"
                                        ></path>
                                        <path
                                            id="Path_41387"
                                            data-name="Path 41387"
                                            d="M172.03,26.7a8.375,8.375,0,0,1-.448,1.277c-.31.814-.8,1.976-1.438,3.4A94.934,94.934,0,0,1,164.415,42.1a94.9,94.9,0,0,1-7.063,9.909c-.986,1.2-1.81,2.16-2.4,2.8a8.46,8.46,0,0,1-.943.97,8.162,8.162,0,0,1,.82-1.076c.553-.67,1.339-1.652,2.294-2.877a115.052,115.052,0,0,0,6.939-9.945,114.846,114.846,0,0,0,5.815-10.638c.672-1.4,1.2-2.541,1.556-3.334a8.445,8.445,0,0,1,.6-1.214"
                                            transform="translate(-16.154 -2.8)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41388"
                                            data-name="Path 41388"
                                            d="M163.427,36.052A15.583,15.583,0,0,1,163.8,38.5c.183,1.524.41,3.651.645,6.052l-.31-.158,1-.585c2.317-1.352,4.426-2.555,5.963-3.408a19.441,19.441,0,0,1,2.53-1.307,19.132,19.132,0,0,1-2.382,1.561c-1.5.918-3.585,2.162-5.9,3.514l-1,.582-.28.163-.03-.322c-.223-2.4-.4-4.533-.509-6.065a15.568,15.568,0,0,1-.1-2.47"
                                            transform="translate(-17.14 -3.782)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41389"
                                            data-name="Path 41389"
                                            d="M176.221,31.735a7.617,7.617,0,0,1-1.562.875c-.987.492-2.363,1.147-3.893,1.846l-.477.218-.249.113L170,34.517c-.242-1.543-.437-2.922-.558-3.917a6.6,6.6,0,0,1-.115-1.615,6.592,6.592,0,0,1,.394,1.571c.2.983.439,2.353.69,3.9l-.292-.156.476-.218c1.531-.7,2.925-1.311,3.944-1.735a7.669,7.669,0,0,1,1.685-.608"
                                            transform="translate(-17.759 -3.04)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <rect id="Rectangle_15836" data-name="Rectangle 15836" width="9.25" height="43.651" transform="translate(253.984 356.864)" fill="#ebebeb"></rect>
                                        <rect id="Rectangle_15837" data-name="Rectangle 15837" width="9.249" height="43.651" transform="translate(332.583 356.864)" fill="#ebebeb"></rect>
                                        <rect id="Rectangle_15838" data-name="Rectangle 15838" width="116.685" height="10.794" transform="translate(238.684 301.988)" fill="#ebebeb"></rect>
                                        <path id="Path_41390" data-name="Path 41390" d="M379.524,394.066l-104.933.227V349.436H379.524Z" transform="translate(-28.803 -36.654)" fill="#ebebeb"></path>
                                        <path
                                            id="Path_41391"
                                            data-name="Path 41391"
                                            d="M383.34,349.411c0,.115-26.123.209-58.34.209s-58.345-.094-58.345-.209,26.117-.21,58.345-.21,58.34.094,58.34.21"
                                            transform="translate(-27.971 -36.629)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41392"
                                            data-name="Path 41392"
                                            d="M379.184,399.525c0,.116-23.319.209-52.079.209s-52.084-.093-52.084-.209,23.315-.209,52.084-.209,52.079.093,52.079.209"
                                            transform="translate(-28.848 -41.886)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41393"
                                            data-name="Path 41393"
                                            d="M371.861,385.959s-.009-.179-.014-.516-.008-.842-.014-1.489c-.008-1.318-.019-3.246-.034-5.74-.018-5-.043-12.256-.075-21.363l.138.138-87.623.072h-.005l.209-.209c0,10.112,0,19.924-.006,29.109l-.2-.2,62.674.094,18.315.057,4.92.026,1.277.013c.288,0,.442.013.442.013s-.136.009-.417.013l-1.253.013-4.877.026-18.268.057-62.813.094h-.2v-.2c0-9.185,0-19-.007-29.109v-.21h.216l87.623.073H372v.138c-.032,9.143-.057,16.43-.075,21.446-.015,2.481-.026,4.4-.034,5.71-.006.636-.011,1.123-.014,1.465s-.014.488-.014.488"
                                            transform="translate(-29.792 -37.409)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41394" data-name="Path 41394" d="M287.744,385.128a14.482,14.482,0,0,1-3.35,3.595,14.482,14.482,0,0,1,3.35-3.595" transform="translate(-29.83 -40.397)" fill="#e0e0e0"></path>
                                        <path id="Path_41395" data-name="Path 41395" d="M287.729,360.695a15.925,15.925,0,0,1-3.472-3.811,15.924,15.924,0,0,1,3.472,3.811" transform="translate(-29.816 -37.434)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41396"
                                            data-name="Path 41396"
                                            d="M381.848,356.976A7.625,7.625,0,0,1,379.939,359a11.959,11.959,0,0,1-2.184,1.705,7.626,7.626,0,0,1,1.908-2.021,11.958,11.958,0,0,1,2.184-1.705"
                                            transform="translate(-39.624 -37.444)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41397" data-name="Path 41397" d="M381.694,388.95a18.019,18.019,0,0,1-3.937-3.818,18.017,18.017,0,0,1,3.937,3.818" transform="translate(-39.624 -40.397)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41398"
                                            data-name="Path 41398"
                                            d="M368.331,382.59s-.008-.132-.013-.378-.008-.62-.013-1.091c-.007-.971-.018-2.382-.031-4.213-.016-3.676-.04-9.028-.071-15.792l.128.128-80.216.082h0l.209-.21c0,7.381,0,14.578,0,21.474l-.2-.2,57.242.093,16.848.058,4.54.028,1.181.013c.267,0,.41.013.41.013s-.125.009-.384.013l-1.156.013-4.5.027-16.8.058-57.385.093h-.2v-.2c0-6.9,0-14.093,0-21.474v-.209h.214l80.216.081h.129v.128c-.03,6.8-.055,12.174-.071,15.868-.013,1.819-.024,3.221-.031,4.185-.005.461-.01.815-.013,1.068s-.013.354-.013.354"
                                            transform="translate(-30.199 -37.857)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41399"
                                            data-name="Path 41399"
                                            d="M339.955,370.746a8.525,8.525,0,0,0-2.154-.98,6.931,6.931,0,0,0-2.129-.33h-5.905a6.8,6.8,0,0,0-4.7,1.819,3.863,3.863,0,0,0-.7.851,2.427,2.427,0,0,0,.23,2.887c.759.712,2.309.365,2.437-.668a2.563,2.563,0,0,0,2.719,2.414,3.449,3.449,0,0,0,2.9-2.519,2.3,2.3,0,0,0,4.587.348c.729.95,1.807,1.836,3.051,1.433a2.2,2.2,0,0,0,1.413-1.579,3.543,3.543,0,0,0-1.746-3.676"
                                            transform="translate(-33.985 -38.752)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41400"
                                            data-name="Path 41400"
                                            d="M331.169,369.4a8.263,8.263,0,0,0-3.792,5.211c-.05,0-.088-.392.032-1.01a5.881,5.881,0,0,1,2.809-3.86c.55-.3.933-.388.951-.342"
                                            transform="translate(-34.335 -38.747)"
                                            fill="#ebebeb"
                                        ></path>
                                        <path id="Path_41401" data-name="Path 41401" d="M334.08,369.68a13.138,13.138,0,0,1-.489,4.65,13.134,13.134,0,0,1,.489-4.65" transform="translate(-34.984 -38.777)" fill="#ebebeb"></path>
                                        <path
                                            id="Path_41402"
                                            data-name="Path 41402"
                                            d="M337.327,369.6c.027-.043.335.081.684.469a3.681,3.681,0,0,1,.831,1.816,6.621,6.621,0,0,1,.012,1.971c-.069.494-.149.792-.207.789s-.081-.314-.09-.806a12.3,12.3,0,0,0-.128-1.88,4.571,4.571,0,0,0-.652-1.709c-.259-.4-.49-.6-.45-.65"
                                            transform="translate(-35.383 -38.768)"
                                            fill="#ebebeb"
                                        ></path>
                                        <rect id="Rectangle_15839" data-name="Rectangle 15839" width="71.9" height="8.422" transform="translate(262.217 371.563)" fill="#ebebeb"></rect>
                                        <path id="Path_41403" data-name="Path 41403" d="M346.974,325.167v10.845H300.341a5.423,5.423,0,0,1,0-10.845" transform="translate(-30.935 -34.108)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41404"
                                            data-name="Path 41404"
                                            d="M350.906,334.006H335.133a2.731,2.731,0,0,1-2.732-2.732v-.835a2.732,2.732,0,0,1,2.732-2.732h15.773Z"
                                            transform="translate(-34.867 -34.375)"
                                            fill="#ebebeb"
                                        ></path>
                                        <path id="Path_41405" data-name="Path 41405" d="M346.974,313.052V323.9H300.341a5.423,5.423,0,0,1,0-10.845Z" transform="translate(-30.935 -32.837)" fill="#ebebeb"></path>
                                        <path
                                            id="Path_41406"
                                            data-name="Path 41406"
                                            d="M350.906,321.89H335.133a2.732,2.732,0,0,1-2.732-2.732v-.834a2.731,2.731,0,0,1,2.732-2.732h15.773Z"
                                            transform="translate(-34.867 -33.104)"
                                            fill="#f5f5f5"
                                        ></path>
                                        <path id="Path_41407" data-name="Path 41407" d="M314.581,293.618l-7.406,17.4h4.766l3.29-9.291Z" transform="translate(-32.221 -30.799)" fill="#e0e0e0"></path>
                                        <path id="Path_41408" data-name="Path 41408" d="M338.042,276.031l2.861,33.138H316.7l-2.659-33.138Z" transform="translate(-32.941 -28.954)" fill="#f5f5f5"></path>
                                        <path id="Path_41409" data-name="Path 41409" d="M336.09,278.949,338.6,306.7l-18.17.239-2.454-28.156Z" transform="translate(-33.353 -29.243)" fill="#fafafa"></path>
                                        <path id="Path_41410" data-name="Path 41410" d="M332.737,283.26l1.425,19.1h-9.691l-1.711-19.1Z" transform="translate(-33.856 -29.712)" fill="#e0e0e0"></path>
                                    </g>
                                </g>
                                <g id="Group_17340" data-name="Group 17340" transform="translate(807 12422.699)">
                                    <g id="Group_17339" data-name="Group 17339" clip-path="url(#clip-path)">
                                        <path
                                            id="Path_41411"
                                            data-name="Path 41411"
                                            d="M395.2,447.965c0,.129-84.153.233-187.936.233-103.821,0-187.955-.1-187.955-.233s84.135-.233,187.955-.233c103.783,0,187.936.1,187.936.233"
                                            transform="translate(-2.026 -46.964)"
                                            fill="#263238"
                                        ></path>
                                    </g>
                                </g>
                                <g id="Group_17345" data-name="Group 17345" transform="translate(807 12422.699)">
                                    <g id="Group_17344" data-name="Group 17344" clip-path="url(#clip-path)">
                                        <path
                                            id="Path_41412"
                                            data-name="Path 41412"
                                            d="M432.312,221.211c-10.577,5.479-18.688,14.912-24.52,25.3s-9.591,21.783-13.314,33.1l-3.258,58.356c12.308-20.937,22.185-45.55,24.854-69.69l-8.19-.73c5.491-.838,10.1-4.817,13.034-9.535s4.442-10.158,5.916-15.514l-9.992,1.486a37.032,37.032,0,0,0,15.47-22.771"
                                            transform="translate(-41.037 -23.204)"
                                            fill="#dbdbdb"
                                        ></path>
                                        <path
                                            id="Path_41414"
                                            data-name="Path 41414"
                                            d="M386.084,351.073s-26.714-31.973-26.4-62.5h10.79s-11.721-7.708-10.793-12.025,1.236-20.656,1.236-20.656l9.866,2.466s-7.4-3.7-8.324-9.557,2.158-32.99,2.158-32.99,12.024,12.641,15.724,25.59,13.41,28.056,10.559,67.521-4.811,42.148-4.811,42.148"
                                            transform="translate(-37.722 -22.638)"
                                            fill="#d3d3d3"
                                        ></path>
                                        <path
                                            id="Path_41415"
                                            data-name="Path 41415"
                                            d="M404.314,358.17s28.941-19.28,35.371-43.887l-8.675-2.36s11.11-3.632,11.309-7.306,3.526-16.878,3.526-16.878l-8.472-.175s6.759-1.356,8.784-5.863,5.483-26.995,5.483-26.995-12.432,7.532-18.24,17.133-16.92,19.622-23.262,51.974-5.822,34.357-5.822,34.357"
                                            transform="translate(-42.409 -26.717)"
                                            fill="#d3d3d3"
                                        ></path>
                                        <path
                                            id="Path_41416"
                                            data-name="Path 41416"
                                            d="M373.349,246.959a1.891,1.891,0,0,1,.094.332l.232.985c.2.893.482,2.167.844,3.794.369,1.648.8,3.667,1.265,6.02s1.028,5.024,1.569,7.994c1.142,5.928,2.348,13.017,3.59,20.9,1.2,7.891,2.406,16.585,3.475,25.735,1.047,9.155,1.86,17.9,2.489,25.855.59,7.962,1.033,15.139,1.273,21.171.151,3.015.222,5.745.3,8.142s.125,4.461.141,6.149c.019,1.667.033,2.971.044,3.887,0,.425,0,.76,0,1.011a.173.173,0,1,1-.047,0c-.012-.251-.027-.585-.046-1.01-.031-.915-.075-2.218-.132-3.884-.044-1.687-.113-3.751-.22-6.145s-.194-5.123-.366-8.136c-.282-6.028-.759-13.2-1.372-21.152-.652-7.952-1.477-16.687-2.524-25.835-1.068-9.144-2.257-17.834-3.436-25.724-1.217-7.883-2.389-14.973-3.489-20.906-.52-2.972-1.051-5.649-1.5-8s-.846-4.381-1.188-6.034c-.325-1.634-.58-2.914-.758-3.811-.078-.419-.14-.747-.186-.994a1.841,1.841,0,0,1-.047-.342"
                                            transform="translate(-39.162 -25.905)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41417"
                                            data-name="Path 41417"
                                            d="M378.625,380.054s-24.446-27.738-32.036-44.5l5.73-2.448c-4.153.686-8.409-1.1-11.629-3.81s-5.585-6.276-7.9-9.79l7.548-1.276A28.066,28.066,0,0,1,323.84,305.45c8.908,1.464,16.967,6.358,23.608,12.472a117.51,117.51,0,0,1,14.3,16.576,56.453,56.453,0,0,1,5.556,9.134c4.108,8.492,11.331,26.236,11.317,36.423"
                                            transform="translate(-33.969 -32.04)"
                                            fill="#dbdbdb"
                                        ></path>
                                        <path
                                            id="Path_41418"
                                            data-name="Path 41418"
                                            d="M439.31,272.742a1.439,1.439,0,0,1-.115.282c-.095.2-.22.469-.377.8l-1.491,3.076c-1.312,2.662-3.17,6.534-5.418,11.341s-4.85,10.565-7.638,17c-2.763,6.447-5.707,13.577-8.636,21.124-2.912,7.557-5.53,14.814-7.823,21.445-2.268,6.639-4.226,12.648-5.788,17.719s-2.8,9.184-3.62,12.036c-.414,1.4-.737,2.5-.967,3.279l-.262.849a1.481,1.481,0,0,1-.1.286,1.448,1.448,0,0,1,.059-.3c.055-.218.127-.5.218-.862.209-.784.5-1.89.883-3.3.766-2.868,1.949-7,3.479-12.083s3.449-11.109,5.7-17.761c2.273-6.643,4.881-13.911,7.8-21.474,2.931-7.554,5.889-14.684,8.676-21.127,2.812-6.433,5.439-12.184,7.733-16.972s4.192-8.644,5.555-11.282l1.569-3.037.419-.785a1.461,1.461,0,0,1,.157-.26"
                                            transform="translate(-41.65 -28.609)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41419"
                                            data-name="Path 41419"
                                            d="M385.264,396.52a2.2,2.2,0,0,1-.114-.51c-.062-.388-.141-.875-.235-1.472-.093-.641-.211-1.423-.38-2.327s-.321-1.939-.567-3.069c-.438-2.271-1.065-4.953-1.865-7.9-.826-2.942-1.839-6.147-3.076-9.45-1.256-3.3-2.614-6.373-3.938-9.127-1.349-2.743-2.651-5.17-3.824-7.164-.562-1.011-1.128-1.89-1.6-2.677s-.9-1.455-1.253-2c-.323-.513-.587-.93-.8-1.261a.262.262,0,1,1,.078-.054c.228.32.516.721.87,1.214.378.527.829,1.18,1.321,1.958s1.084,1.646,1.667,2.65c1.213,1.978,2.549,4.4,3.926,7.142,1.352,2.755,2.727,5.84,3.989,9.152,1.242,3.317,2.248,6.541,3.054,9.5.78,2.968,1.377,5.668,1.774,7.954.226,1.138.361,2.18.5,3.09s.237,1.7.3,2.343c.061.6.11,1.095.149,1.486a2.208,2.208,0,0,1,.021.521"
                                            transform="translate(-38.534 -36.619)"
                                            fill="#263238"
                                        ></path>
                                        <rect id="Rectangle_15843" data-name="Rectangle 15843" width="53.503" height="10.914" transform="translate(325.484 353.376)" fill="#dbdbdb"></rect>
                                        <path id="Path_41420" data-name="Path 41420" d="M369.322,406.98l5.787,36.71h32.33l5.395-36.71Z" transform="translate(-38.74 -42.69)" fill="#ebebeb"></path>
                                        <path
                                            id="Path_41421"
                                            data-name="Path 41421"
                                            d="M414.434,406.953c0,.129-10.121.233-22.6.233s-22.606-.1-22.606-.233,10.119-.233,22.606-.233,22.6.1,22.6.233"
                                            transform="translate(-38.729 -42.663)"
                                            fill="#263238"
                                        ></path>
                                    </g>
                                </g>
                                <g id="Group_17350" data-name="Group 17350" transform="translate(807 12422.699)">
                                    <g id="Group_17349" data-name="Group 17349" clip-path="url(#clip-path)">
                                        <path
                                            id="Path_41422"
                                            data-name="Path 41422"
                                            d="M131.574,95.073c.871-4.367,3.96-6.694,8.071-8.407a13.889,13.889,0,0,1,12.776,1.216c2.483,1.643,4.51,4.137,7.381,4.927,4.729,1.3,9.918-2.519,14.487-.738a6.327,6.327,0,0,1-2.192,12.221c3.09.9,4.313,5.143,2.728,7.945s-5.138,4.056-8.334,3.675-6.075-2.112-8.606-4.1-4.833-4.276-7.514-6.057-5.875-3.052-9.07-2.667c-4.327.522-7.836,4.041-9.513,8.064s-1.83,8.5-1.784,12.856.261,8.777-.75,13.015c-.119.5-.312,1.059-.79,1.242-.69.263-1.339-.446-1.732-1.071a63.973,63.973,0,0,1-8.862-23.243c-.809-4.778-.984-9.343,1.393-13.566s8.863-7.649,12.312-5.31"
                                            transform="translate(-12.307 -8.984)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41423"
                                            data-name="Path 41423"
                                            d="M125.35,116.479l.914,44.489c.171,8.307,4.342,16.9,17.464,16.031,11.329-1.613,11.625-9.557,11.569-19.41h0s12.412-1.425,13.057-13.753c.312-5.957-.046-18.28-.5-29.424a22.994,22.994,0,0,0-22.064-22.029l-1.19-.047c-12.863.237-19.846,11.293-19.253,24.144"
                                            transform="translate(-13.145 -9.685)"
                                            fill="#ffbe9d"
                                        ></path>
                                        <path id="Path_41424" data-name="Path 41424" d="M156.951,164.6a29.818,29.818,0,0,1-15.87-5.389s3.5,9.719,15.851,9.1Z" transform="translate(-14.799 -16.701)" fill="#eb996e"></path>
                                        <path
                                            id="Path_41425"
                                            data-name="Path 41425"
                                            d="M167.549,130.653a1.762,1.762,0,0,1-1.77,1.709,1.685,1.685,0,0,1-1.752-1.66,1.764,1.764,0,0,1,1.768-1.711,1.688,1.688,0,0,1,1.754,1.662"
                                            transform="translate(-17.206 -13.53)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41426"
                                            data-name="Path 41426"
                                            d="M168.8,123.409c-.227.221-1.523-.82-3.418-.891-1.892-.1-3.322.822-3.519.582-.1-.107.142-.513.765-.93a4.84,4.84,0,0,1,2.829-.749,4.643,4.643,0,0,1,2.709,1c.565.47.746.893.634.992"
                                            transform="translate(-16.976 -12.736)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41427"
                                            data-name="Path 41427"
                                            d="M147.926,129.794a1.763,1.763,0,0,1-1.77,1.709,1.685,1.685,0,0,1-1.752-1.66,1.765,1.765,0,0,1,1.768-1.711,1.687,1.687,0,0,1,1.754,1.662"
                                            transform="translate(-15.147 -13.44)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41428"
                                            data-name="Path 41428"
                                            d="M147.967,122.973c-.229.221-1.525-.82-3.42-.891-1.891-.1-3.322.822-3.519.582-.1-.107.141-.513.766-.929a4.834,4.834,0,0,1,2.828-.75,4.649,4.649,0,0,1,2.709,1c.563.471.746.894.636.993"
                                            transform="translate(-14.791 -12.69)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41429"
                                            data-name="Path 41429"
                                            d="M155.81,137.362a12.518,12.518,0,0,1,3.1-.432c.486-.03.948-.108,1.043-.436a2.466,2.466,0,0,0-.266-1.447q-.612-1.784-1.284-3.742c-1.778-5.327-3.044-9.7-2.829-9.768s1.831,4.191,3.609,9.518q.64,1.97,1.224,3.762a2.808,2.808,0,0,1,.175,1.91,1.212,1.212,0,0,1-.823.675,3.321,3.321,0,0,1-.827.082,12.344,12.344,0,0,1-3.12-.121"
                                            transform="translate(-16.316 -12.748)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41430"
                                            data-name="Path 41430"
                                            d="M148.643,114.747c-.209.508-2.09.188-4.325.367-2.238.134-4.058.714-4.333.24-.124-.226.209-.7.953-1.169a7.548,7.548,0,0,1,6.6-.462c.8.362,1.2.782,1.108,1.024"
                                            transform="translate(-14.681 -11.871)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41431"
                                            data-name="Path 41431"
                                            d="M168.323,117.238c-.351.417-1.638-.081-3.208-.166-1.566-.139-2.911.174-3.2-.289-.125-.224.1-.646.7-1.031a4.653,4.653,0,0,1,5.163.367c.537.464.7.915.546,1.119"
                                            transform="translate(-16.981 -12.077)"
                                            fill="#263238"
                                        ></path>
                                        <path id="Path_41432" data-name="Path 41432" d="M125.083,129.5c-.208-.1-8.376-2.845-8.442,5.6s8.422,6.769,8.438,6.527,0-12.125,0-12.125" transform="translate(-12.235 -13.531)" fill="#ffbe9d"></path>
                                        <path
                                            id="Path_41433"
                                            data-name="Path 41433"
                                            d="M122.777,138.721c-.037-.027-.148.1-.4.214a1.471,1.471,0,0,1-1.1.013c-.889-.335-1.628-1.756-1.658-3.278a4.865,4.865,0,0,1,.429-2.1,1.7,1.7,0,0,1,1.115-1.121.749.749,0,0,1,.865.41c.112.237.056.405.1.421.023.021.183-.141.117-.49a.937.937,0,0,0-.328-.532,1.112,1.112,0,0,0-.811-.222,2.068,2.068,0,0,0-1.547,1.3,4.991,4.991,0,0,0-.529,2.35c.04,1.7.9,3.3,2.116,3.663a1.574,1.574,0,0,0,1.347-.213c.263-.206.309-.395.28-.41"
                                            transform="translate(-12.486 -13.849)"
                                            fill="#eb996e"
                                        ></path>
                                        <path
                                            id="Path_41434"
                                            data-name="Path 41434"
                                            d="M168.3,102.7a16.1,16.1,0,0,0-4.94-6.171A27.48,27.48,0,0,0,147.652,90.2a22.388,22.388,0,0,0-15.929,5.3,23.629,23.629,0,0,0-6.966,11.661,34.718,34.718,0,0,0-.627,13.674,10.431,10.431,0,0,0,2.068,5.59c.833.943,2.3,1.6,3.332.876a3.365,3.365,0,0,0,1.059-1.907c1.882-6.442,3.763-13.375,1.63-19.738a19.36,19.36,0,0,1,6.021-5.106,10.027,10.027,0,0,1,7.7-.742c3.714,1.308,5.883,5.056,8.781,7.72a17.828,17.828,0,0,0,15.683,4.2Z"
                                            transform="translate(-12.979 -9.458)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41435"
                                            data-name="Path 41435"
                                            d="M156.2,144.907a8.432,8.432,0,0,1-.943,2.2,2.833,2.833,0,0,1-1.93,1.3,2.535,2.535,0,0,1-2.218-1.026,4.06,4.06,0,0,1-.76-2.4c-.015-.771.276-1.711,1.032-1.851a1.92,1.92,0,0,1,.942.144l4.12,1.361"
                                            transform="translate(-15.77 -15.011)"
                                            fill="#eb996e"
                                        ></path>
                                        <path
                                            id="Path_41436"
                                            data-name="Path 41436"
                                            d="M154.753,148.268a5.818,5.818,0,0,1-2.158-.123,3.068,3.068,0,0,1-1.715-1.363,3.231,3.231,0,0,1-.226-2.621,2.853,2.853,0,0,1,.311-.623c.149-.177.119-.167.294-.153.166.033.439.14.66.209l.677.225c.882.291,1.679.542,2.352.745a7.3,7.3,0,0,0,2.228.513,7.35,7.35,0,0,0-2.059-.992c-.653-.263-1.433-.565-2.3-.89l-.668-.248a7.5,7.5,0,0,0-.754-.253.938.938,0,0,0-.593.056,1.106,1.106,0,0,0-.42.38,3.508,3.508,0,0,0-.4.79,3.767,3.767,0,0,0,.335,3.2,3.438,3.438,0,0,0,2.146,1.512,3.249,3.249,0,0,0,1.743-.047c.392-.132.569-.28.552-.319"
                                            transform="translate(-15.709 -14.965)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41437"
                                            data-name="Path 41437"
                                            d="M178.48,94.993a2.226,2.226,0,0,1,.087.568,5.566,5.566,0,0,1-.175,1.643,7.731,7.731,0,0,1-3.725,4.667c-2.267,1.33-5.583,1.526-8.833.55-3.3-.935-6.436-3.026-9.749-4.971-3.3-1.942-6.782-3.43-10.1-3.294A13.219,13.219,0,0,0,138,97.342a17.654,17.654,0,0,0-3.855,4.5c-.713,1.217-1,1.95-1.056,1.927a2.192,2.192,0,0,1,.182-.543,14.243,14.243,0,0,1,.689-1.489,16.757,16.757,0,0,1,3.791-4.69,13.44,13.44,0,0,1,8.218-3.393c3.472-.168,7.069,1.367,10.392,3.324,3.341,1.962,6.423,4.029,9.617,4.96,3.152.974,6.327.816,8.5-.4a7.664,7.664,0,0,0,3.708-4.386,8.442,8.442,0,0,0,.294-2.154"
                                            transform="translate(-13.96 -9.822)"
                                            fill="#455a64"
                                        ></path>
                                        <path
                                            id="Path_41438"
                                            data-name="Path 41438"
                                            d="M119.025,113.649a5.941,5.941,0,0,1,.647-2.244,14.386,14.386,0,0,1,3.218-4.636,14.218,14.218,0,0,1,2.47-1.918,5.279,5.279,0,0,1,2.441-.872,2.8,2.8,0,0,1,1.7.439c.346.244.457.457.431.476a3.214,3.214,0,0,0-2.1-.529c-1.35.149-3.012,1.344-4.561,2.8a16.708,16.708,0,0,0-3.248,4.407c-.651,1.256-.909,2.106-1,2.079"
                                            transform="translate(-12.484 -10.906)"
                                            fill="#455a64"
                                        ></path>
                                        <path
                                            id="Path_41439"
                                            data-name="Path 41439"
                                            d="M120.349,121.939a6.407,6.407,0,0,1,.791-2.215,15.615,15.615,0,0,1,8.3-7.493,6.486,6.486,0,0,1,2.284-.562,21.936,21.936,0,0,1-2.136.919,17.92,17.92,0,0,0-8.109,7.32,22.913,22.913,0,0,1-1.133,2.031"
                                            transform="translate(-12.623 -11.712)"
                                            fill="#455a64"
                                        ></path>
                                        <path id="Path_41440" data-name="Path 41440" d="M188.174,259.356l44.907,18.086-7.159,12.828L175,282.46Z" transform="translate(-18.356 -27.205)" fill="#ffbe9d"></path>
                                        <path
                                            id="Path_41441"
                                            data-name="Path 41441"
                                            d="M177.819,197.257c.23,12.637-.175,43.067-.175,43.067l7.2,11.311-12.6,16.968-14.554,2.049-1.446,11.286s-25.5,11.413-45.895,4.493c-15.872-5.383-34.421,12.718-34.421,12.718s-1.694-2.956,1.057-28.487c2.624-24.334,7.211-64.5,7.211-64.5l14.671-36.693,22.034-3.822c9.227,15.689,27.68,15.777,29.162,6.242l14.649,6.1a20.809,20.809,0,0,1,13.107,19.264"
                                            transform="translate(-7.91 -17.376)"
                                            fill="#ed1c24"
                                        ></path>
                                        <path
                                            id="Path_41442"
                                            data-name="Path 41442"
                                            d="M174.767,205.261c.128.014-1.421,14.508-3.459,32.368s-3.793,32.332-3.921,32.318,1.421-14.505,3.459-32.371,3.793-32.329,3.921-32.315"
                                            transform="translate(-17.557 -21.531)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41443"
                                            data-name="Path 41443"
                                            d="M163.716,241.806c.07.108-7.129,4.86-16.076,10.613s-16.26,10.33-16.329,10.221,7.127-4.859,16.077-10.613,16.259-10.33,16.329-10.221"
                                            transform="translate(-13.774 -25.364)"
                                            fill="#263238"
                                        ></path>
                                        <path id="Path_41444" data-name="Path 41444" d="M137.18,441.324h-8.462l-4.834-56.9h13.3Z" transform="translate(-12.995 -40.324)" fill="#aaa"></path>
                                        <path id="Path_41445" data-name="Path 41445" d="M63.535,441.324H55.073l-4.834-56.9h13.3Z" transform="translate(-5.27 -40.324)" fill="#aaa"></path>
                                        <path id="Path_41446" data-name="Path 41446" d="M241.666,441.324H233.2l-4.834-56.9h13.3Z" transform="translate(-23.955 -40.324)" fill="#aaa"></path>
                                        <path
                                            id="Path_41447"
                                            data-name="Path 41447"
                                            d="M81.961,313.319l8.061-123.362H13.951a9.258,9.258,0,0,0-9.1,10.944l30.6,165.245c9.735-.137,187.21,0,187.21,0V313.319Z"
                                            transform="translate(-0.492 -19.925)"
                                            fill="#d3d3d3"
                                        ></path>
                                        <path
                                            id="Path_41448"
                                            data-name="Path 41448"
                                            d="M208.269,366.46c0,.129-16.863.233-37.658.233s-37.662-.1-37.662-.233,16.859-.233,37.662-.233,37.658.1,37.658.233"
                                            transform="translate(-13.946 -38.415)"
                                            fill="#263238"
                                        ></path>
                                        <path id="Path_41449" data-name="Path 41449" d="M289.406,398.553l5.476,26.117s28.386,3.205,29.868,7.933l-50.258,12.437-10.2-40.342Z" transform="translate(-27.722 -41.806)" fill="#6f6f6f"></path>
                                        <path
                                            id="Path_41450"
                                            data-name="Path 41450"
                                            d="M280.382,429.566a2.114,2.114,0,0,0-.84,2.693,2.032,2.032,0,0,0,2.662.856,2.23,2.23,0,0,0,.875-2.857,2.108,2.108,0,0,0-2.868-.583"
                                            transform="translate(-29.302 -45.033)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41451" data-name="Path 41451" d="M275.824,449.855l-.993-3.908,48.409-11.654s2.478.42,2.615,2.059Z" transform="translate(-28.828 -45.555)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41452"
                                            data-name="Path 41452"
                                            d="M298.845,427.208c.053.247-1.147.662-2.159,1.75-1.041,1.062-1.4,2.279-1.65,2.238-.239.008-.235-1.549,1.013-2.846s2.793-1.38,2.8-1.142"
                                            transform="translate(-30.935 -44.8)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41453"
                                            data-name="Path 41453"
                                            d="M305.493,428.191c.115.224-.844.9-1.421,2.148-.613,1.227-.546,2.4-.792,2.452-.221.1-.747-1.3,0-2.833s2.151-2,2.214-1.767"
                                            transform="translate(-31.772 -44.909)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41454"
                                            data-name="Path 41454"
                                            d="M310.813,433.868c-.21.107-.855-1.034-.558-2.534s1.313-2.319,1.468-2.14c.188.167-.379,1.073-.6,2.308-.254,1.229-.068,2.282-.306,2.366"
                                            transform="translate(-32.536 -45.017)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41455"
                                            data-name="Path 41455"
                                            d="M296.569,420.674c-.047.249-1.257.189-2.621.627-1.373.41-2.337,1.142-2.517.964-.186-.142.644-1.312,2.257-1.8s2.955-.009,2.881.214"
                                            transform="translate(-30.567 -44.081)"
                                            fill="#263238"
                                        ></path>
                                        <g id="Group_17348" data-name="Group 17348" transform="translate(235.775 356.214)" opacity="0.3">
                                            <g id="Group_17347" data-name="Group 17347">
                                                <g id="Group_17346" data-name="Group 17346" clip-path="url(#clip-path-6)">
                                                    <path id="Path_41456" data-name="Path 41456" d="M289.406,398.553l5.476,26.117s28.386,3.205,29.868,7.933l-50.032,13.5L264.289,404.7Z" transform="translate(-264.289 -398.553)"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <path
                                            id="Path_41457"
                                            data-name="Path 41457"
                                            d="M247.235,307.591l31.816,92.364-27.476,10.162-50.633-101.25-84.117-13.159,50.488-13.581,72.01,18.191a11.294,11.294,0,0,1,7.913,7.273"
                                            transform="translate(-12.254 -29.593)"
                                            fill="#263238"
                                        ></path>
                                        <path id="Path_41458" data-name="Path 41458" d="M289.172,387.09l18.171,19.955s26.386-11.767,30.1-8.406L300.018,435.26l-29.587-29.931Z" transform="translate(-28.367 -40.603)" fill="#6f6f6f"></path>
                                        <path
                                            id="Path_41459"
                                            data-name="Path 41459"
                                            d="M296.935,420.11a2.138,2.138,0,0,0,.65,2.778,2.054,2.054,0,0,0,2.759-.62,2.255,2.255,0,0,0-.7-2.939,2.133,2.133,0,0,0-2.8.963"
                                            transform="translate(-31.119 -43.965)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path id="Path_41460" data-name="Path 41460" d="M303.98,437.34l-2.87-2.9,36.218-34.99s2.376-.9,3.336.453Z" transform="translate(-31.585 -41.869)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41461"
                                            data-name="Path 41461"
                                            d="M311.906,408.505c.173.189-.66,1.165-.984,2.633-.363,1.459-.052,2.7-.291,2.8-.2.129-1-1.23-.576-3,.407-1.773,1.726-2.636,1.85-2.429"
                                            transform="translate(-32.51 -42.847)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41462"
                                            data-name="Path 41462"
                                            d="M318.176,406.029c.215.136-.272,1.221-.137,2.6.095,1.384.756,2.373.567,2.543-.143.2-1.318-.75-1.454-2.47s.849-2.846,1.024-2.675"
                                            transform="translate(-33.266 -42.588)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41463"
                                            data-name="Path 41463"
                                            d="M325.687,408.31c-.128.2-1.276-.463-1.786-1.923s-.045-2.7.182-2.618c.25.049.22,1.129.658,2.322.408,1.2,1.11,2.023.946,2.219"
                                            transform="translate(-33.951 -42.353)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41464"
                                            data-name="Path 41464"
                                            d="M306.506,403.932c.087.242-1,.81-1.963,1.89-.986,1.062-1.451,2.195-1.7,2.131-.235-.029-.112-1.473,1.042-2.73s2.571-1.523,2.621-1.292"
                                            transform="translate(-31.756 -42.362)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41465"
                                            data-name="Path 41465"
                                            d="M103.4,335.209l73.349-.31,81.4,75.8,25.306-23.566s-69.118-78-77.108-86.048-84.93-13.41-84.93-13.41L75.166,307.767l1.049,5.248A27.6,27.6,0,0,0,103.4,335.209"
                                            transform="translate(-7.884 -30.175)"
                                            fill="#263238"
                                        ></path>
                                        <path id="Path_41466" data-name="Path 41466" d="M186.737,329.667a44.289,44.289,0,0,1,1.115,9,44.137,44.137,0,0,1-1.115-9" transform="translate(-19.583 -34.58)" fill="#455a64"></path>
                                        <path
                                            id="Path_41467"
                                            data-name="Path 41467"
                                            d="M295.405,388.282a8.106,8.106,0,0,1-.91,1.065c-.608.665-1.5,1.612-2.621,2.77-2.236,2.317-5.38,5.468-8.934,8.861s-6.852,6.385-9.272,8.51c-1.209,1.063-2.2,1.912-2.89,2.488a8.058,8.058,0,0,1-1.106.859,8,8,0,0,1,.986-.994l2.791-2.6c2.361-2.187,5.617-5.213,9.17-8.6s6.728-6.5,9.022-8.756l2.726-2.666a8.108,8.108,0,0,1,1.04-.938"
                                            transform="translate(-28.287 -40.728)"
                                            fill="#455a64"
                                        ></path>
                                        <path
                                            id="Path_41468"
                                            data-name="Path 41468"
                                            d="M239.021,385.813s.17.137.487.422l1.4,1.273,5.368,4.938,19.8,18.333h-.224l25.274-23.6-.017.289c-10.663-12.433-23.435-26.051-36.817-40.535-5.917-6.395-11.687-12.644-17.2-18.733S226.3,316.182,221.5,310.354a47.922,47.922,0,0,0-7.6-7.89,19.811,19.811,0,0,0-4.508-2.624,28.771,28.771,0,0,0-4.854-1.49c-3.266-.705-6.49-1.115-9.564-1.616l-8.854-1.377-26.712-4.183-7.259-1.161-1.886-.314c-.424-.073-.64-.123-.64-.123s.221.018.648.076l1.893.268,7.272,1.074,26.735,4.037,8.858,1.348c3.076.491,6.293.89,9.592,1.593a28.986,28.986,0,0,1,4.924,1.5,20.24,20.24,0,0,1,4.6,2.666,48.284,48.284,0,0,1,7.684,7.944c4.808,5.812,10.078,11.727,15.593,17.812s11.29,12.329,17.207,18.723c13.382,14.484,26.142,28.113,36.8,40.581l.13.152-.147.137-25.337,23.533-.112.1-.112-.1-19.7-18.44-5.308-5-1.37-1.307c-.306-.3-.455-.456-.455-.456"
                                            transform="translate(-15.694 -30.375)"
                                            fill="#455a64"
                                        ></path>
                                        <path
                                            id="Path_41469"
                                            data-name="Path 41469"
                                            d="M167.669,274.194l-22.126,7.457L104.8,265.082,83.052,285.3l58.113,10.429a12.724,12.724,0,0,0,5.865-.419l17.133-5.382s5.6,6.326,6.767,6.42,3.53-.068,2.406-2.156a55.573,55.573,0,0,0-4-5.727s7.867,6.49,8.759,5.622.535-2.876-.859-4.516-6.02-6.946-6.02-6.946,9.7,8.029,10.617,6.811,1.378-3.138-2.506-6.863c-2.551-2.447-6.479-5.937-8.544-7.757a3.169,3.169,0,0,0-3.11-.626"
                                            transform="translate(-8.712 -27.806)"
                                            fill="#ffbe9d"
                                        ></path>
                                        <path
                                            id="Path_41470"
                                            data-name="Path 41470"
                                            d="M151.673,283.813a15.6,15.6,0,0,1-2.113,2.612,15.648,15.648,0,0,1-2.312,2.439,17.049,17.049,0,0,1,4.425-5.051"
                                            transform="translate(-15.445 -29.77)"
                                            fill="#eb996e"
                                        ></path>
                                        <path
                                            id="Path_41471"
                                            data-name="Path 41471"
                                            d="M187.118,291.649a9.134,9.134,0,0,1-1.865-1.91c-1.068-1.253-2.481-3.032-4.079-4.957-1.632-1.842-3-3.943-4.769-3.6a3.79,3.79,0,0,0-1.779.54c-.382.235-.565.416-.593.389s.118-.243.49-.538a3.584,3.584,0,0,1,1.857-.72,3.891,3.891,0,0,1,1.4.117,2.33,2.33,0,0,1,.736.348,7.53,7.53,0,0,1,.623.532,31.965,31.965,0,0,1,2.4,2.633c1.606,1.935,2.978,3.745,3.978,5.048l1.186,1.539c.277.365.448.548.422.578"
                                            transform="translate(-18.255 -29.458)"
                                            fill="#eb996e"
                                        ></path>
                                        <path
                                            id="Path_41472"
                                            data-name="Path 41472"
                                            d="M171.114,286.466c-.018-.018.132-.223.514-.464a3.412,3.412,0,0,1,1.833-.468,3.593,3.593,0,0,1,1.316.255,3.245,3.245,0,0,1,1.17,1.011c.328.42.608.891.917,1.346.3.44.683.906,1.034,1.379,2.88,3.787,5.022,7.026,4.828,7.144-.032.013-.162-.184-.422-.533l-1.105-1.473-3.674-4.856c-.356-.483-.712-.919-1.04-1.405s-.583-.942-.881-1.342a2.932,2.932,0,0,0-.993-.92,3.438,3.438,0,0,0-1.165-.276,4.083,4.083,0,0,0-2.334.6"
                                            transform="translate(-17.949 -29.951)"
                                            fill="#eb996e"
                                        ></path>
                                        <path
                                            id="Path_41473"
                                            data-name="Path 41473"
                                            d="M189.794,284.165a11.13,11.13,0,0,1-1.8-1.421c-1.07-.921-2.525-2.216-4.113-3.669l-2.227-2.062a6.984,6.984,0,0,0-1.91-1.465,3.939,3.939,0,0,0-2.162-.315c-.014-.028.185-.151.59-.216a3.32,3.32,0,0,1,1.7.227,5.2,5.2,0,0,1,1.045.581c.348.26.673.557,1.021.867l2.253,2.036c1.59,1.454,3.011,2.789,4.024,3.773a11.163,11.163,0,0,1,1.574,1.663"
                                            transform="translate(-18.628 -28.845)"
                                            fill="#eb996e"
                                        ></path>
                                        <path
                                            id="Path_41474"
                                            data-name="Path 41474"
                                            d="M79.839,275.859s-8.268-9.286-7.748-21.675,4.075-48.248,5.655-58.089c1.564-9.732,8.981-23.26,20.769-26.188,8.622-2.142,10.4,23.937,10.4,23.937l-6.511,57.565,12.977,7.537-12.112,20.517Z"
                                            transform="translate(-7.559 -17.809)"
                                            fill="#ed1c24"
                                        ></path>
                                        <path
                                            id="Path_41475"
                                            data-name="Path 41475"
                                            d="M110.5,191.4c-.09.01-.2-1.259-.741-3.22a22.549,22.549,0,0,0-1.233-3.342,22.531,22.531,0,0,0-5.084-7.024,22.621,22.621,0,0,0-2.789-2.215c-1.692-1.131-2.864-1.628-2.827-1.711a3.307,3.307,0,0,1,.843.3,8.07,8.07,0,0,1,.95.448,13.676,13.676,0,0,1,1.212.685,20.017,20.017,0,0,1,2.9,2.177,21.2,21.2,0,0,1,5.184,7.163,20.061,20.061,0,0,1,1.161,3.436,13.387,13.387,0,0,1,.272,1.366,8.192,8.192,0,0,1,.129,1.042,3.269,3.269,0,0,1,.021.9"
                                            transform="translate(-10.261 -18.24)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41476"
                                            data-name="Path 41476"
                                            d="M104.414,261.019a16.038,16.038,0,0,1-2.049,1.2,46.271,46.271,0,0,0-4.777,3.094,50.54,50.54,0,0,0-4.352,3.674,15.383,15.383,0,0,1-1.757,1.6A9.939,9.939,0,0,1,93,268.751a34.378,34.378,0,0,1,4.305-3.815,32.413,32.413,0,0,1,4.9-3.011,9.63,9.63,0,0,1,2.2-.906"
                                            transform="translate(-9.595 -27.379)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41477"
                                            data-name="Path 41477"
                                            d="M200.263,246.1l-14.237,51.7H252.5l16.2-49.256a3,3,0,0,0-2.81-3.93l-62.708-.716a3,3,0,0,0-2.921,2.2"
                                            transform="translate(-19.513 -25.584)"
                                            fill="#e0e0e0"
                                        ></path>
                                        <path
                                            id="Path_41478"
                                            data-name="Path 41478"
                                            d="M205,243.921c.124.034-3.1,12.126-7.2,27s-7.53,26.917-7.653,26.883,3.1-12.123,7.2-27.006,7.529-26.914,7.653-26.88"
                                            transform="translate(-19.945 -25.586)"
                                            fill="#263238"
                                        ></path>
                                        <path id="Path_41479" data-name="Path 41479" d="M235.4,272.894a2.806,2.806,0,1,0,3.89-1.66,3,3,0,0,0-3.89,1.66" transform="translate(-24.655 -28.425)" fill="#fff"></path>
                                        <path id="Path_41480" data-name="Path 41480" d="M180.813,303.675H136.328a3.806,3.806,0,0,1,3.806-3.806h42.329Z" transform="translate(-14.3 -31.454)" fill="#e0e0e0"></path>
                                        <path
                                            id="Path_41481"
                                            data-name="Path 41481"
                                            d="M72.087,258.434a2.518,2.518,0,0,1,.027.419c.006.3.015.705.026,1.223a18.773,18.773,0,0,0,.135,1.978c.044.783.221,1.67.385,2.671A33.76,33.76,0,0,0,74.9,271.74a35.2,35.2,0,0,0,5.073,8.25l-.106-.057,23.439,3.559-.226.107,9.433-16,2.671-4.523.083.32-12.972-7.546-.122-.072.013-.14c1.19-13.177,2.213-24.508,2.941-32.575.379-4,.679-7.187.89-9.4.109-1.074.2-1.912.256-2.508.031-.267.056-.48.075-.645a.976.976,0,0,1,.038-.218,1,1,0,0,1,0,.222c-.01.166-.022.38-.038.649-.044.6-.1,1.437-.184,2.513-.179,2.22-.438,5.412-.761,9.416-.687,8.07-1.652,19.406-2.776,32.589l-.109-.21,12.983,7.527.2.117-.119.2-2.669,4.524-9.45,15.989-.077.131-.149-.023-23.425-3.649-.068-.01-.038-.047a34.845,34.845,0,0,1-7.238-15.466,26.341,26.341,0,0,1-.341-2.694,17.239,17.239,0,0,1-.087-1.99c.011-.519.019-.926.025-1.226a2.451,2.451,0,0,1,.026-.417"
                                            transform="translate(-7.555 -22.058)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41482"
                                            data-name="Path 41482"
                                            d="M34.888,282.127s78.621,9.951,81.426,12.707c2.465,2.421,5.608,66.277,6.31,65.967l-73.37-2.781Z"
                                            transform="translate(-3.66 -29.593)"
                                            fill="#dbdbdb"
                                        ></path>
                                        <path
                                            id="Path_41483"
                                            data-name="Path 41483"
                                            d="M106.546,376.936c-.128.011-1.765-18.407-3.656-41.132S99.57,294.64,99.7,294.629s1.765,18.4,3.657,41.135,3.319,41.161,3.191,41.171"
                                            transform="translate(-10.457 -30.905)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41484"
                                            data-name="Path 41484"
                                            d="M17.617,189.958a1.589,1.589,0,0,1,.09.305c.055.227.128.527.219.907.19.826.458,2,.8,3.495.681,3.068,1.656,7.458,2.859,12.872,2.375,10.9,5.645,25.918,9.257,42.5.9,4.152,1.771,8.205,2.616,12.122q.631,2.936,1.24,5.764.152.706.3,1.405a7.478,7.478,0,0,0,.354,1.335,4.1,4.1,0,0,0,1.711,1.966,4.226,4.226,0,0,0,1.207.482c.414.09.879.132,1.318.194l2.631.345,5.03.661,9.026,1.194,13.067,1.761,3.549.5.921.142a1.591,1.591,0,0,1,.312.064,1.544,1.544,0,0,1-.318-.017l-.927-.1-3.561-.415-13.086-1.614L47.2,274.7l-5.032-.638-2.632-.334c-.448-.064-.884-.1-1.36-.2A4.69,4.69,0,0,1,36.847,273a4.539,4.539,0,0,1-1.9-2.17,7.993,7.993,0,0,1-.38-1.408q-.152-.7-.305-1.4-.614-2.824-1.251-5.762c-.848-3.915-1.726-7.968-2.625-12.12-3.56-16.6-6.784-31.623-9.124-42.532-1.141-5.427-2.067-9.828-2.714-12.9-.306-1.5-.545-2.683-.714-3.513-.073-.383-.131-.687-.175-.917a1.594,1.594,0,0,1-.044-.315"
                                            transform="translate(-1.848 -19.925)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41485"
                                            data-name="Path 41485"
                                            d="M127.175,301.995c.128-.011,1.629,16.974,3.351,37.931s3.015,37.961,2.887,37.972-1.628-16.97-3.351-37.935-3.015-37.958-2.887-37.969"
                                            transform="translate(-13.339 -31.677)"
                                            fill="#263238"
                                        ></path>
                                    </g>
                                </g>
                                <rect id="Rectangle_15847" data-name="Rectangle 15847" width="182.311" height="159.646" transform="translate(1011.692 12448.921)" fill="#fff"></rect>
                                <rect id="Rectangle_15848" data-name="Rectangle 15848" width="181.866" height="86.397" transform="translate(1012.137 12522.169)" fill="#ebebeb"></rect>
                                <g id="Group_17352" data-name="Group 17352" transform="translate(807 12422.699)">
                                    <g id="Group_17351" data-name="Group 17351" clip-path="url(#clip-path)">
                                        <path
                                            id="Path_41486"
                                            data-name="Path 41486"
                                            d="M381.532,88.643c0,.129-24.951.233-55.721.233s-55.728-.1-55.728-.233,24.946-.233,55.728-.233,55.721.1,55.721.233"
                                            transform="translate(-28.33 -9.274)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41487"
                                            data-name="Path 41487"
                                            d="M410.046,48.562c0,.129-40.381.233-90.182.233-49.818,0-90.19-.1-90.19-.233s40.372-.233,90.19-.233c49.8,0,90.182.1,90.182.233"
                                            transform="translate(-24.091 -5.069)"
                                            fill="#263238"
                                        ></path>
                                        <path id="Path_41488" data-name="Path 41488" d="M242.148,38.254a2.766,2.766,0,1,1-2.766-2.766,2.766,2.766,0,0,1,2.766,2.766" transform="translate(-24.82 -3.722)" fill="#263238"></path>
                                        <path id="Path_41489" data-name="Path 41489" d="M252.488,38.254a2.766,2.766,0,1,1-2.766-2.766,2.765,2.765,0,0,1,2.766,2.766" transform="translate(-25.904 -3.722)" fill="#263238"></path>
                                        <path id="Path_41490" data-name="Path 41490" d="M262.828,38.254a2.766,2.766,0,1,1-2.766-2.766,2.765,2.765,0,0,1,2.766,2.766" transform="translate(-26.989 -3.722)" fill="#263238"></path>
                                        <path id="Path_41491" data-name="Path 41491" d="M268.043,87.266a7.277,7.277,0,1,1-7.277-7.276,7.277,7.277,0,0,1,7.277,7.276" transform="translate(-26.589 -8.39)" fill="#ed1c24"></path>
                                        <path id="Path_41492" data-name="Path 41492" d="M262.638,84.043v7.046h-1.63V85.351H259.6V84.043Z" transform="translate(-27.23 -8.816)" fill="#fff"></path>
                                        <path
                                            id="Path_41493"
                                            data-name="Path 41493"
                                            d="M340.985,87.129a20.822,20.822,0,0,0-.419-2.564,10.559,10.559,0,0,0-3.865-5.724,10.4,10.4,0,0,0-9.844-1.458A10.4,10.4,0,0,0,322.045,81a10.328,10.328,0,0,0,0,12.251,10.408,10.408,0,0,0,4.812,3.622,10.4,10.4,0,0,0,9.845-1.458,10.56,10.56,0,0,0,3.864-5.725,20.8,20.8,0,0,0,.419-2.564,3.7,3.7,0,0,1,.013.678,4.768,4.768,0,0,1-.061.822,7.364,7.364,0,0,1-.2,1.109,10.675,10.675,0,0,1-8.358,7.987,10.8,10.8,0,0,1-5.672-.444,10.8,10.8,0,0,1-5.034-3.756,10.744,10.744,0,0,1,0-12.792,10.8,10.8,0,0,1,5.033-3.754,10.783,10.783,0,0,1,5.671-.445,10.677,10.677,0,0,1,8.359,7.987,7.345,7.345,0,0,1,.2,1.109,4.764,4.764,0,0,1,.061.821,3.7,3.7,0,0,1-.013.678"
                                            transform="translate(-33.521 -8.008)"
                                            fill="#ff725e"
                                        ></path>
                                        <path
                                            id="Path_41494"
                                            data-name="Path 41494"
                                            d="M409.1,87.244c-.055,0-.022-.648-.316-1.754a7.255,7.255,0,0,0-2.658-3.9,7.088,7.088,0,0,0-6.709-.978,6.984,6.984,0,0,0-3.27,2.466,7.026,7.026,0,0,0,0,8.332,6.982,6.982,0,0,0,3.271,2.467,7.1,7.1,0,0,0,6.71-.979,7.246,7.246,0,0,0,2.658-3.9c.294-1.105.261-1.758.316-1.754a1.724,1.724,0,0,1,.023.467,5.755,5.755,0,0,1-.163,1.331,7.239,7.239,0,0,1-2.634,4.117,7.344,7.344,0,0,1-3.124,1.424,7.474,7.474,0,0,1-3.931-.3,7.382,7.382,0,0,1-3.493-2.6,7.449,7.449,0,0,1,0-8.873,7.425,7.425,0,0,1,10.548-1.48,7.247,7.247,0,0,1,2.634,4.117,5.768,5.768,0,0,1,.163,1.333,1.719,1.719,0,0,1-.023.466"
                                            transform="translate(-41.361 -8.368)"
                                            fill="#263238"
                                        ></path>
                                        <rect id="Rectangle_15849" data-name="Rectangle 15849" width="70.693" height="1.281" transform="translate(240.457 78.571)" fill="#ed1c24"></rect>
                                        <path id="Path_41495" data-name="Path 41495" d="M338.084,87.266a7.277,7.277,0,1,1-7.277-7.276,7.277,7.277,0,0,1,7.277,7.276" transform="translate(-33.936 -8.39)" fill="#ed1c24"></path>
                                        <path
                                            id="Path_41496"
                                            data-name="Path 41496"
                                            d="M334.066,89.746v1.328h-5.325V90.018l2.718-2.567c.624-.594.735-.956.735-1.3,0-.553-.383-.875-1.128-.875a1.723,1.723,0,0,0-1.459.7l-1.188-.765a3.272,3.272,0,0,1,2.8-1.308c1.57,0,2.617.8,2.617,2.083a2.812,2.812,0,0,1-1.177,2.224l-1.621,1.531Z"
                                            transform="translate(-34.449 -8.801)"
                                            fill="#fff"
                                        ></path>
                                        <path
                                            id="Path_41497"
                                            data-name="Path 41497"
                                            d="M405.133,88.935c0,1.188-.916,2.275-2.92,2.275a4.85,4.85,0,0,1-2.688-.755l.635-1.248a3.426,3.426,0,0,0,2.013.634c.815,0,1.319-.332,1.319-.906,0-.533-.393-.866-1.319-.866h-.745V86.992l1.449-1.641h-3V84.043h4.932V85.1l-1.591,1.813a2,2,0,0,1,1.913,2.023"
                                            transform="translate(-41.908 -8.816)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41498"
                                            data-name="Path 41498"
                                            d="M371.555,62.5c0,.129-17.7.233-39.538.233s-39.542-.1-39.542-.233,17.7-.233,39.542-.233,39.538.1,39.538.233"
                                            transform="translate(-30.679 -6.532)"
                                            fill="#263238"
                                        ></path>
                                        <path id="Path_41499" data-name="Path 41499" d="M326.233,111.42,331.7,104l5.465,7.417Z" transform="translate(-34.22 -10.909)" fill="#ebebeb"></path>
                                        <path
                                            id="Path_41500"
                                            data-name="Path 41500"
                                            d="M410.962,188.912c0-1.658-.079-63.587-.2-159.646l.2.2L228.668,29.5h-.016l.233-.234c-.01,58-.02,112.631-.028,159.646l-.2-.206,182.311.206-182.311.206h-.206v-.206c-.007-47.015-.017-101.641-.027-159.646v-.233h.25l182.295.036h.2v.2c-.118,96.058-.2,157.99-.2,159.646"
                                            transform="translate(-23.96 -3.045)"
                                            fill="#263238"
                                        ></path>
                                        <path
                                            id="Path_41501"
                                            data-name="Path 41501"
                                            d="M276.529,131.942c0,.129-5.563.233-12.424.233s-12.424-.1-12.424-.233,5.561-.233,12.424-.233,12.424.1,12.424.233"
                                            transform="translate(-26.4 -13.815)"
                                            fill="#ff725e"
                                        ></path>
                                        <path id="Path_41502" data-name="Path 41502" d="M301.695,152.886h-46.96a6.367,6.367,0,0,1,0-12.735h46.96a6.367,6.367,0,1,1,0,12.735" transform="translate(-26.052 -14.701)" fill="#fafafa"></path>
                                        <path
                                            id="Path_41503"
                                            data-name="Path 41503"
                                            d="M373.765,131.942c0,.129-5.271.233-11.772.233s-11.774-.1-11.774-.233,5.27-.233,11.774-.233,11.772.1,11.772.233"
                                            transform="translate(-36.736 -13.815)"
                                            fill="#ff725e"
                                        ></path>
                                        <path
                                            id="Path_41504"
                                            data-name="Path 41504"
                                            d="M275.955,170.714c0,.129-5.271.233-11.772.233s-11.774-.1-11.774-.233,5.27-.233,11.774-.233,11.772.1,11.772.233"
                                            transform="translate(-26.476 -17.882)"
                                            fill="#ff725e"
                                        ></path>
                                        <path id="Path_41505" data-name="Path 41505" d="M396.97,152.886H350.01a6.367,6.367,0,0,1,0-12.735h46.96a6.367,6.367,0,1,1,0,12.735" transform="translate(-36.046 -14.701)" fill="#fafafa"></path>
                                        <path id="Path_41506" data-name="Path 41506" d="M388.758,192.246H255.122a6.367,6.367,0,0,1,0-12.734H388.758a6.367,6.367,0,1,1,0,12.734" transform="translate(-26.093 -18.83)" fill="#fafafa"></path>
                                    </g>
                                </g>
                                <rect id="Rectangle_15853" data-name="Rectangle 15853" width="409.229" height="404.301" transform="translate(807 12422.699)" fill="none"></rect>
                            </g>
                        </svg> -->
                    </div>
                </div>
                <p class="manageUlipFunds-desc">
                If you are waiting for the ideal time to buy ULIP, the right time is now. Your chances of reaching your objectives are increased the earlier you begin investing in ULIPs.
                </p>
                <div class="manageUlipFunds-cta">
                    <a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=powerofcomp">Leveraging the power of compounding</a>
                </div>
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
                        <p class="typesOfUlipCharge-subDesc">
                            These fees are imposed by the insurer to provide death coverage to the insured and are calculated after taking into account age, health conditions, and the insurer's mortality table.
                        </p>
                    </div>
                    <div class="typesOfUlipCharge-card">
                        <h3 class="typesOfUlipCharge-subTitle">Switching Charges</h3>
                        <p class="typesOfUlipCharge-subDesc">
                            Investors are permitted a set number of free-fund switches each year without incurring any fees. After this, every switch is subject to fees ranging from ₹100 to ₹500, depending on your insurer.
                        </p>
                    </div>
                </div>
                <div class="typesOfUlipCharge-flexB">
                    <p>Embrace the potential of long-term wealth creation with Kotak e-Invest.</p>
                    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=typesofcharges">Invest now</a>
                </div>
            </div>
        </section>
        <section class="hid" id="whatIsUlipNav">
            <div class="midWrapper">
                <h2 class="whatIsUlipNav-title">What is ULIP NAV?</h2>
                <p class="whatIsUlipNav-desc">
               <a class="inline-links" href="https://www.kotaklife.com/ulip-plans/ulip-nav"> ULIP NAV </a>stands for Unit Linked Insurance Plan Net Asset Value. It is the price per unit of a ULIP investment. In simpler terms, it shows the current value of the underlying assets (stocks, bonds, etc.) in your ULIP plan, minus the liabilities (expenses).

                </p>
                <br />
                <p class="whatIsUlipNav-desc">
                Like you, several other investors pay the insurance company the premium for a ULIP. The insurer then gathers the premium from each of these investors to produce a single investment sum. This sum is invested in various market schemes. 

                </p>
                <br />
                <p class="whatIsUlipNav-desc">
                The number of units that each investor receives depends on the premium they pay. Net Asset Value, or NAV, is the measure of each unit's value. Each investor's portion of the total investment is represented by the number of units they own. The proceeds are then divided based on the number of units.

                </p>
                <div class="whatIsUlipNav-cta"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=ulipnav">Invest now</a></div>
            </div>
        </section>
        <section id="testimonial" class="test-slick">
            <div class="midWrapper">
                <div class="testimonial-bg">
                    <h3 class="testimonial-title">Testimonials</h3>
                    <div class="saving-testimonial savetest">
                        <div>
                            <div class="custom-review">
                                <p>
                                    When I was planning for my child's future, my friends recommended me about investing in ULIP. The benefits that ULIP offer were very well aligned with my requirements. This is why I started researching
                                    and came to know about Kotak e-Invest plan. I went through their online portal and got to know the premiums, returns and everything. I realized that Kotak ULIP plans was the best plan for me, and I bought
                                    it.
                                </p>
                                <p class="stes-head">-Mr. Ambadas Sulakhe</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                    ULIPs are new-age investment instruments that offer tax benefits and market-linked returns. I read about it online and started to think about my investments. I thought this could be a good addition to my
                                    financial portfolio. They offer market-linked returns with no Capital gain taxes. And I could easily optimize my returns by choosing the funds wisely. So, I decided to start my Kotak ULIP plan.
                                </p>
                                <p class="stes-head">- Mr. Darpan V Mehta</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                    Investments have always helped me achieve my difficult life goals. So, I make sure that every month I invest in the right instruments. Just when I was looking for a new investment option, I came across
                                    Kotak ULIP plan. They have various plan options; premium payment mode is flexible which is perfect for me. The plan aligned with my requirements and offered excellent returns which makes this one a best
                                    ULIP plan for me.
                                </p>
                                <p class="stes-head">- Ms Munera Janvekar</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                    Kotak ULIP plan is one of the best investment instruments I decided to invest my hard-earned money in. It gives me various fund options that help me manage my portfolio and make sure that my investment is
                                    optimized all the time. This way, I can gain returns when the market is high and go for debt funds when the markets go down. A win-win. If you are looking for such a plan, I recommend you to invest in
                                    Kotak ULIP plan.
                                </p>
                                <p class="stes-head">- Mr Sujitbhai Ashokbhai Kanjariya</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                    I was looking for investing a sum of amount that can give me good returns over the long term. I came across Kotak ULIP plan and decided to give it a try. I logged in to understand the plan and their call
                                    center executive helped me understand everything about the plan. I went ahead with the plan and the plan is giving me good returns and I can monitor them year on year. If you are looking for a long term
                                    investment with solid returns, I recommend you to invest in Kotak ULIP plan.
                                </p>
                                <p class="stes-head">- Ms Neeti Garg</p>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <p>
                                    My friends recommended me to invest in an ULIP plan when they came to know that I am planning to buy a house in the future. I went online, spoke to my friends and came across Kotak ULIP plan. I registered
                                    on their portal where they showed me all plans, premiums and returns upfront. I completed the application process upload documents and made my payment. I was happy to make this decision as I can now
                                    monitor my returns and make a fund switching decision when required.
                                </p>
                                <p class="stes-head">- Mr Santosh Kumar</p>
                            </div>
                        </div>
                    </div>
                    <span class="pagingInfo-review-tes d-flex playfair_font justify-content-center"></span>
                </div>
            </div>
        </section>
        <section class="hid" id="howToFindBestUlipPlan">
            <div class="midWrapper">
                <h2 class="bestUlipPlan-title">How to Find the Best ULIP Plans?</h2>
                <p class="bestUlipPlan-desc">
                Finding the best ULIP plan can be difficult with so many options in the market. Here are some essential factors to consider when looking for the best ULIP plans:
                    </p>
                <div class="bestUlipPlan-flex">
                    <div class="bestUlipPlan-card">
                        <div class="bu-card-icon buci1"></div>
                        <h3 class="bestUlipPlan-subTitle">Understand the Features and Benefits</h3>
                        <p class="bestUlipPlan-subDesc">
                        Features and perks offered by various different plans can be different. You must have a clear understanding of the features and benefits provided by the options accessible in the market. This will help you achieve your financial goals.

                        </p>
                    </div>
                    <div class="bestUlipPlan-card">
                        <div class="bu-card-icon buci2"></div>
                        <h3 class="bestUlipPlan-subTitle">Identify the Objectives</h3>
                        <p class="bestUlipPlan-subDesc">No plan is going to work if the objective is not clear. Same with ULIPs, you should know what you are aiming for while investing. This aim could be buying a home, funding your child’s education or having a comfortable life after retirement.</p>
                    </div>
                    <div class="bestUlipPlan-card">
                        <div class="bu-card-icon buci3"></div>
                        <h3 class="bestUlipPlan-subTitle">Decide Your Goals</h3>
                        <p class="bestUlipPlan-subDesc">
                            Before deciding which ULIP plan to purchase; it is essential to evaluate your investing objectives. The availability of numerous fund options enables investors to investigate and evaluate their investment horizon
                            and insurance goals for selecting the optimum strategy.
                        </p>
                    </div>
                    <div class="bestUlipPlan-card">
                        <div class="bu-card-icon buci4"></div>
                        <h3 class="bestUlipPlan-subTitle">Claim Settlement Ratio</h3>
                        <p class="bestUlipPlan-subDesc">One of the most important factors while searching for the best ULIP plan is claim settlement ratio. It is the measure of claims received by the insurer that were resolved by them. Higher claim settlement ratio means insurers can be trusted.
                        </p>
                    </div>
                </div>
                <div class="bestUlipPlan-cta"><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bestulip">Buy ULIP Online</a></div>
            </div>
        </section>
        <section class="hid" id="whyInvestinUlip">
            <div class="greyBg">
                <div class="midWrapper">
                    <div class="whyInvestinUlip-grid">
                        <div class="whyInvestinUlip-img">
                            <div class=" ulipsprite-image piggybank"></div>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="357" height="357" viewBox="0 0 357 357">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="1.113" y1="0.471" x2="0.362" y2="0.507" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#fff" stop-opacity="0.102" />
                                        <stop offset="0.35" stop-color="#999fbb" stop-opacity="0.2" />
                                        <stop offset="0.99" stop-color="#38447a" stop-opacity="0.302" />
                                    </linearGradient>
                                    <clipPath id="clip-path"><rect id="Rectangle_15238" data-name="Rectangle 15238" width="245.753" height="282.218" fill="none" /></clipPath>
                                    <clipPath id="clip-path-3"><rect id="Rectangle_15234" data-name="Rectangle 15234" width="21.553" height="21.401" fill="none" /></clipPath>
                                    <clipPath id="clip-path-4"><rect id="Rectangle_15235" data-name="Rectangle 15235" width="17.126" height="17.291" fill="none" /></clipPath>
                                    <clipPath id="clip-path-5"><rect id="Rectangle_15253" data-name="Rectangle 15253" width="316.459" height="150.597" fill="none" /></clipPath>
                                    <clipPath id="clip-path-7"><rect id="Rectangle_15243" data-name="Rectangle 15243" width="35.201" height="18.3" fill="#ababab" /></clipPath>
                                    <clipPath id="clip-path-8"><rect id="Rectangle_15244" data-name="Rectangle 15244" width="33.545" height="18.151" fill="#ababab" /></clipPath>
                                    <clipPath id="clip-path-9"><rect id="Rectangle_15247" data-name="Rectangle 15247" width="15.71" height="22.814" fill="#7a7a7a" /></clipPath>
                                    <clipPath id="clip-path-10"><rect id="Rectangle_15248" data-name="Rectangle 15248" width="9.819" height="15.138" fill="#ababab" /></clipPath>
                                    <clipPath id="clip-path-11"><rect id="Rectangle_15250" data-name="Rectangle 15250" width="3.472" height="33.684" fill="#c8c8c8" /></clipPath>
                                    <clipPath id="clip-path-12"><rect id="Rectangle_15251" data-name="Rectangle 15251" width="34.078" height="8.325" fill="#ababab" /></clipPath>
                                </defs>
                                <g id="Group_17129" data-name="Group 17129" transform="translate(-138 -2970)">
                                    <path id="Path_83137" data-name="Path 83137" d="M178.5,0A178.5,178.5,0,1,1,0,178.5,178.5,178.5,0,0,1,178.5,0Z" transform="translate(138 2970)" fill="#fff" />
                                    <g id="Group_16463" data-name="Group 16463" transform="translate(-639 851.208)">
                                        <rect id="Rectangle_2128" data-name="Rectangle 2128" width="49.61" height="8.875" rx="4.437" transform="translate(813.895 2392.135)" fill="url(#linear-gradient)" />
                                        <path
                                            id="Path_8123"
                                            data-name="Path 8123"
                                            d="M189.809,351.371s-1.514,4.333-14.5,16.25-18.472,26.389-23.111,46.374c-1.986,8.556-2.611,19.527-2.68,29.166h-1.986c0-13.375,0-31.847.1-51.666.263-38.957-24.681-55.846-24.681-55.846,1.292,9.347-2.861,12.5-2.43,21.3s9.958,8.334,8.138,18.708.265,8.055,3.9,12.208-2.778,10.737,2.777,14.027,8.695,3.126,10,12.5c.652,4.721.125,17.416-.569,28.819H131.7c-2.57,0-4.5,2.778-3.986,5.834l4.722,27.916c.889,5.263,4.764,9.055,9.264,9.055H153.31c4.5,0,8.333-3.792,9.263-9.055l4.514-26.653.139-.861c.555-3.249-1.528-6.291-4.305-6.291H151.172c.208-9.389,2.139-18.625,8.583-23.263,12.194-8.777,6.472-15.708,10.4-18.055a14,14,0,0,0,6.4-10.959c.153-3.916-3.764-6.861,5.013-13.6s8.236-25.916,8.236-25.916Z"
                                            transform="translate(680.181 1913.739)"
                                            fill="#231f20"
                                            stroke="#231f20"
                                            stroke-width="1.427"
                                            opacity="0.1"
                                        />
                                        <path
                                            id="Path_8124"
                                            data-name="Path 8124"
                                            d="M185.013,352.184s.569,19.194-8.208,25.93-4.861,9.722-5.013,13.6a14,14,0,0,1-6.4,10.958c-3.944,2.362,1.791,9.291-10.4,18.055s-8.223,33.986-7.028,45.569l-2.486.25s-2.6-32.167,1.945-51.736c4.638-19.972,10.124-34.458,23.11-46.374s14.486-16.25,14.486-16.25Zm-66.888-15.722s25,16.889,24.68,55.846,0,72.735,0,72.735H138.39s3.375-40.527,2.083-49.874-4.487-9.179-10-12.5.9-9.861-2.778-14.028-5.722-1.82-3.9-12.209-7.708-9.874-8.138-18.707S119.417,345.809,118.126,336.462Z"
                                            transform="translate(680.31 1913.717)"
                                            fill="#fff"
                                        />
                                        <path
                                            id="Path_8125"
                                            data-name="Path 8125"
                                            d="M118.194,336.327a26.5,26.5,0,0,1,6.306,17.264c0,10.694,2.611,9.555,7.277,15.027s2.611,6.264,2.958,14.68,7.4,14.569,7.736,23.792,4.778-3.069,4.778-3.069l-8-64.083L125.36,331.4l-7.166,4.93Z"
                                            transform="translate(680.242 1913.852)"
                                            fill="rgba(212,212,212,0)"
                                        />
                                        <path
                                            id="Path_8126"
                                            data-name="Path 8126"
                                            d="M185.776,352.528s-2.139,11.208-7.6,17.222-10.9,6.014-11.847,12.791.458,9.056-5.444,14.181c-3.514,3.056-3.208,5-4.166,11.027s-10.4,14.027-11.417,22.362c-.487,3.972-2.1-7.32.306-27.056,1.723-14.111,9.723-38.361,9.723-38.361l28.777-15.277,1.694,2.444"
                                            transform="translate(679.547 1913.373)"
                                            fill="rgba(212,212,212,0)"
                                        />
                                        <path
                                            id="Path_8127"
                                            data-name="Path 8127"
                                            d="M137.056,489.741h11.611c4.5,0,8.333-3.792,9.264-9.055l4.514-26.625c.625-3.694-1.737-7.153-4.89-7.153H127c-2.57,0-4.5,2.778-3.986,5.834l4.737,27.944c.944,5.263,4.818,9.055,9.306,9.055Z"
                                            transform="translate(680.116 1910.783)"
                                            fill="#c9c9c9"
                                        />
                                    </g>
                                    <g id="Group_16419" data-name="Group 16419" transform="translate(198.628 2970)">
                                        <g id="Group_16418" data-name="Group 16418" clip-path="url(#clip-path)">
                                            <rect id="Rectangle_15232" data-name="Rectangle 15232" width="0.682" height="81.331" transform="translate(217.167 30)" fill="#c7c7c7" />
                                            <path id="Path_38673" data-name="Path 38673" d="M299.568,136.693,277.452,152l2.272,4.993H331.67L333.935,152,311.82,136.693Z" transform="translate(-88.185 -13.446)" fill="#ebebeb" />
                                            <path id="Path_38674" data-name="Path 38674" d="M307.622,115.073l1.535,14.748h12.252l1.535-14.748Z" transform="translate(-97.774 -6.575)" fill="#dbdbdb" />
                                            <path id="Path_38675" data-name="Path 38675" d="M277.456,159.136l2.272,4.994h51.947l2.265-4.994Z" transform="translate(-88.186 -20.58)" fill="#dbdbdb" />
                                            <rect id="Rectangle_15233" data-name="Rectangle 15233" width="0.682" height="65.222" transform="translate(170.529 9)" fill="#c7c7c7" />
                                            <path id="Path_38676" data-name="Path 38676" d="M188.559,128.385l2.272,4.993h51.947l2.265-4.993-22.116-15.308H210.675Z" transform="translate(-45.932 -26.941)" fill="#ebebeb" />
                                            <path id="Path_38677" data-name="Path 38677" d="M218.729,91.458l1.535,14.748h12.252l1.535-14.748Z" transform="translate(-55.521 -20.069)" fill="#dbdbdb" />
                                            <path id="Path_38678" data-name="Path 38678" d="M188.563,135.521l2.272,4.993h51.947l2.265-4.993Z" transform="translate(-45.933 -34.074)" fill="#dbdbdb" />
                                            <g id="Group_16417" data-name="Group 16417">
                                                <g id="Group_16416" data-name="Group 16416" clip-path="url(#clip-path)">
                                                    <path
                                                        id="Path_38679"
                                                        data-name="Path 38679"
                                                        d="M153.276,320.99s-.007.034-.02.1c-.007.02-.007.041-.014.068-.007.055-.02.109-.034.184l-.02.123a2.1,2.1,0,0,0-.048.266c-.014.061-.02.123-.034.191q-.031.2-.082.45c-.048.259-.1.553-.157.88-.089.484-.191,1.037-.307,1.664-.034.177-.068.368-.1.566-.048.259-.1.532-.15.812-.055.307-.109.628-.171.962a.025.025,0,0,0-.007.02c-.041.232-.089.471-.13.716-.13.73-.266,1.508-.423,2.34a.2.2,0,0,0-.014.061c-.164.928-.341,1.924-.532,2.967-.048.273-.1.546-.157.819s-.109.573-.157.859c0,.007-.007.014,0,.02-.027.177-.061.362-.1.546v.014q-.389,2.18-.839,4.611c-.1.546-.2,1.1-.3,1.658-.2,1.091-.4,2.21-.614,3.363-.055.266-.1.532-.143.8q-.46,2.507-.948,5.212c-.041.184-.068.368-.1.553-.157.846-.314,1.7-.464,2.572a1.086,1.086,0,0,0-.041.2c-.075.409-.15.825-.225,1.242q-.45,2.5-.928,5.109c-.082.43-.164.866-.239,1.31-.157.88-.321,1.767-.484,2.66-.2,1.112-.409,2.231-.614,3.37s-.409,2.278-.621,3.431c-.109.58-.211,1.16-.321,1.74-.123.7-.252,1.392-.375,2.094H84.473c7.272-30.213,13.4-54.559,13.4-54.559Z"
                                                        transform="translate(-26.849 -102.023)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38680"
                                                        data-name="Path 38680"
                                                        d="M167.722,330.9q-4.431,23.882-8.95,47.758h-.819c3.131-15.956,6.358-31.884,9.571-47.819.027-.13.218-.068.2.061"
                                                        transform="translate(-50.204 -105.13)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38681"
                                                        data-name="Path 38681"
                                                        d="M164.463,320.99s-.007.034-.014.1c-.007.02-.007.041-.014.068-.014.048-.02.109-.034.184l-.02.123a2.107,2.107,0,0,0-.048.266c-.014.061-.02.123-.034.191q-.041.2-.082.45c-.048.259-.1.553-.157.88-.1.484-.191,1.037-.307,1.664-.034.177-.068.368-.1.566-.048.259-.1.532-.15.812-.055.307-.109.628-.171.962a.025.025,0,0,0-.007.02c-.041.232-.089.471-.13.716-.136.73-.273,1.508-.423,2.34a.2.2,0,0,0-.014.061c-.171.928-.348,1.91-.539,2.954-.055.273-.1.553-.15.832s-.109.573-.157.859c0,.007-.007.014,0,.02-.041.177-.068.362-.1.546v.014c-.266,1.446-.546,2.988-.839,4.611-.1.546-.2,1.1-.3,1.658-.2,1.091-.409,2.21-.614,3.363-.055.266-.1.532-.143.8q-.471,2.517-.948,5.212c-.041.184-.068.368-.1.553-.157.846-.314,1.7-.464,2.572a1.086,1.086,0,0,0-.041.2c-.075.409-.15.825-.225,1.242q-.46,2.5-.928,5.109c-.082.43-.164.866-.239,1.31-.164.88-.321,1.767-.484,2.66-.2,1.112-.409,2.231-.614,3.37s-.416,2.278-.621,3.431c-.109.58-.211,1.16-.321,1.74-.123.7-.252,1.392-.382,2.094H125.028l-2.367-24.23-.082-.86-.1-.928v-.007l-.464-4.741v-.007l-.4-4.107-1.924-19.68Z"
                                                        transform="translate(-38.043 -102.023)"
                                                        fill="#455a64"
                                                    />
                                                    <path
                                                        id="Path_38682"
                                                        data-name="Path 38682"
                                                        d="M193.572,375.549H129.987c-.109-5.853-.225-11.515-.368-16.856v-.007c-.007-.13-.007-.259-.014-.389a101.824,101.824,0,0,1-11.419-7.838,14.119,14.119,0,0,1-1.869-1.855c0-.007,0-.007-.007-.014l-.007-.007c-2.558-3.261-5.123-15.8-10.43-27.593h77.766c12.661,24.585,11.774,44.265,9.932,54.559"
                                                        transform="translate(-33.651 -102.023)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38683"
                                                        data-name="Path 38683"
                                                        d="M118.387,360.233a58.2,58.2,0,0,1,10.543,6.226c3.489,2.385,6.687,5.141,10.044,7.7.129.1.007.311-.136.22-3.538-2.259-7.242-4.245-10.741-6.571a68.581,68.581,0,0,1-9.881-7.3c-.117-.112.013-.34.17-.276"
                                                        transform="translate(-37.56 -114.493)"
                                                        fill="#455a64"
                                                    />
                                                    <path
                                                        id="Path_38684"
                                                        data-name="Path 38684"
                                                        d="M117.67,328.13c.45,2.421,1.038,4.818,1.56,7.225.49,2.258.851,4.562,1.448,6.794a11.565,11.565,0,0,0,3.165,5.695c.886.823,1.862,1.552,2.806,2.306.509.406,1.059.8,1.589,1.208-.069-.319-.124-.645-.182-.974q-.241-1.376-.471-2.756-.514-3.058-.982-6.126c-.614-4.017-1.179-8.077-2.018-12.055a.129.129,0,0,1,.25-.063c1,3.942,2.107,7.841,2.978,11.816.428,1.95,1.953,11.575,2.021,12.256.07.7.129,1.409.153,2.115a8.4,8.4,0,0,1,0,2.161c-.042.176-.253.147-.328.029l-.01.007a8.488,8.488,0,0,1-.613-2.091c-.176-.687-.332-1.384-.455-2.083-.045-.252-.08-.51-.116-.767-.948-.576-1.83-1.338-2.716-1.98-.956-.692-1.928-1.366-2.832-2.126a10.849,10.849,0,0,1-3.457-5.4,39.41,39.41,0,0,1-1.134-6.917c-.306-2.736-.529-5.485-.911-8.21-.023-.162.22-.229.25-.063"
                                                        transform="translate(-37.32 -104.262)"
                                                        fill="#455a64"
                                                    />
                                                    <path
                                                        id="Path_38685"
                                                        data-name="Path 38685"
                                                        d="M201.6,345.429c-1.014-.53-4.945.41-12.1-.815a8.157,8.157,0,0,1-3.862-1.567,20.263,20.263,0,0,1-4.4-6.064,31.3,31.3,0,0,1-3.083-7.487c-.036-.158-.265-.082-.237.071.265,1.482.413,2.961.8,4.426a27.2,27.2,0,0,0,1.479,4.019c1.082,2.429,2.346,5.036,4.523,6.677,2.285,1.722,5.472,2.043,8.24,2.236,1.6.112,7.882-.057,8.726-.954a.35.35,0,0,0-.084-.542"
                                                        transform="translate(-56.545 -104.699)"
                                                        fill="#455a64"
                                                    />
                                                    <path
                                                        id="Path_38686"
                                                        data-name="Path 38686"
                                                        d="M85.879,184.962c-6.55,9.681-52.035,67.981-58.624,69.17-16.774,3.026-32.135-2.731-25.8-17.174,7.382-16.819,48.443-50.175,75.789-64.942,19.59-10.579,15.094,3.393,8.631,12.946"
                                                        transform="translate(0 -53.471)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38687"
                                                        data-name="Path 38687"
                                                        d="M76.748,216.737l-35.68-16.384S74.077,177.4,89.535,170.421c16.111-7.279,22.625-3.027,8.863,15.91-13.558,18.656-21.649,30.406-21.649,30.406"
                                                        transform="translate(-13.053 -53.101)"
                                                        fill="#ed1c24"
                                                    />
                                                    <path
                                                        id="Path_38688"
                                                        data-name="Path 38688"
                                                        d="M61.68,197.26a2.41,2.41,0,0,0-.218.143l27.757,13.548c.048-.061.089-.13.136-.191ZM54.006,202.3a2.241,2.241,0,0,0-.211.136l30.8,15.035c.041-.061.082-.123.13-.184ZM46.44,207.39c-.075.048-.143.1-.211.143L80,224.014c.034-.061.082-.123.123-.184Z"
                                                        transform="translate(-14.693 -62.697)"
                                                        fill="#fff"
                                                    />
                                                    <path
                                                        id="Path_38689"
                                                        data-name="Path 38689"
                                                        d="M81.277,223.461c-.8-.486-1.68-.864-2.523-1.274q-1.3-.632-2.6-1.273c-1.755-.862-3.526-1.692-5.3-2.514-3.545-1.641-7.083-3.3-10.655-4.879-.982-.435-1.966-.866-2.959-1.276-1.044-.43-2.12-.785-3.161-1.217-.065-.027-.1.07-.037.1.864.432,1.7.939,2.56,1.376q1.329.672,2.675,1.311,2.649,1.256,5.317,2.469c3.5,1.591,7,3.2,10.536,4.712.987.424,1.978.838,2.965,1.261,1.031.442,2.063.951,3.132,1.3.055.018.1-.061.049-.093"
                                                        transform="translate(-17.167 -67.072)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38690"
                                                        data-name="Path 38690"
                                                        d="M109.706,186.7C96.151,205.355,88.057,217.1,88.057,217.1l-11.4-5.24,39.1-43.633c2.971,2.025,1.557,8.006-6.043,18.468"
                                                        transform="translate(-24.363 -53.47)"
                                                        fill="#b72026"
                                                    />
                                                    <path
                                                        id="Path_38691"
                                                        data-name="Path 38691"
                                                        d="M95.543,284.11h92.023S173.508,196.3,139.589,166.276c-4.192-3.711-13.648-2.868-19.817.2-2.2,1.1-10.111,12.158-12.368,22.618C105.163,199.541,95.3,283.8,95.543,284.11"
                                                        transform="translate(-30.366 -52.068)"
                                                        fill="#ed1c24"
                                                    />
                                                    <path
                                                        id="Path_38692"
                                                        data-name="Path 38692"
                                                        d="M199.167,247.361,158.333,166.15a7.107,7.107,0,0,1,1.214.866c19.251,17.04,32.1,52.69,39.62,80.345"
                                                        transform="translate(-50.324 -52.809)"
                                                        fill="#b72026"
                                                    />
                                                    <path
                                                        id="Path_38693"
                                                        data-name="Path 38693"
                                                        d="M135.66,164.445h-9.325c.437-.082.866-.157,1.3-.225h6.951c.368.061.723.136,1.071.225m9.618,7.667H115.106c-.048.075-.1.15-.15.225h30.513c-.061-.075-.13-.15-.191-.225m6.105,7.893H110.666l-.1.225h40.971c-.048-.075-.1-.15-.15-.225m4.966,7.893H107.773c-.027.075-.041.15-.061.225h48.775c-.048-.075-.089-.15-.136-.225m4.257,7.893H106.361c-.007.075-.02.15-.034.225h54.4c-.041-.075-.082-.15-.116-.225m3.731,7.893H105.256c-.014.075-.02.15-.027.225h59.2c-.027-.075-.061-.15-.1-.225m3.336,7.9H104.206c-.007.075-.02.15-.027.218h63.584c-.034-.075-.061-.15-.089-.218m3.008,7.893H103.2c-.014.075-.02.143-.027.218h67.589c-.02-.075-.048-.143-.075-.218m2.749,7.893H102.207c-.014.075-.02.15-.027.225H173.5c-.02-.075-.041-.15-.068-.225m2.517,7.893H101.231c-.007.075-.02.15-.027.225h74.813c-.02-.075-.048-.15-.068-.225m2.319,7.893H100.276c-.014.075-.02.15-.027.225h78.08Zm2.142,7.893H99.328c-.007.075-.02.15-.027.225h81.164c-.02-.075-.041-.15-.055-.225m1.971,7.893H98.394c-.007.075-.02.15-.027.225h84.07c-.02-.075-.034-.15-.055-.225m1.815,7.893H97.473c-.007.075-.014.15-.027.225h86.8c-.014-.075-.027-.15-.048-.225m1.664,7.893H96.572c-.007.075-.014.15-.027.225H185.9l-.041-.225m1.487,7.893H95.719l-.02.225h91.682c-.007-.075-.02-.15-.034-.225"
                                                        transform="translate(-30.417 -52.196)"
                                                        fill="#fff"
                                                    />
                                                    <path
                                                        id="Path_38694"
                                                        data-name="Path 38694"
                                                        d="M174.6,169.636c23.2,8.574,80.305,31.335,83.207,44.652,2.132,9.788-41.446,15.871-42.686,14.286-.981-1.254-41.441-32.774-55.707-49.74-12.392-14.737,7.771-11.938,15.186-9.2"
                                                        transform="translate(-49.417 -53.221)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38695"
                                                        data-name="Path 38695"
                                                        d="M191.267,209.144l30.555-21.172s-36.509-16.832-52.949-21.011c-17.133-4.354-22.805.97-5.948,17.213a365.766,365.766,0,0,0,28.342,24.97"
                                                        transform="translate(-48.562 -52.604)"
                                                        fill="#ed1c24"
                                                    />
                                                    <path
                                                        id="Path_38696"
                                                        data-name="Path 38696"
                                                        d="M209.846,183.941l-23.685,17.815c.058.051.11.1.168.147l23.757-17.865-.24-.1m8.378,3.57-25.993,19.553c.059.058.11.1.169.153l26.063-19.6c-.08-.032-.159-.071-.239-.1m8.286,3.641-28.065,21.12c.059.051.117.1.176.141l28.121-21.15c-.08-.032-.153-.071-.232-.11"
                                                        transform="translate(-59.169 -58.464)"
                                                        fill="#fff"
                                                    />
                                                    <path
                                                        id="Path_38697"
                                                        data-name="Path 38697"
                                                        d="M230.256,196.346c-.823.45-1.59,1.02-2.367,1.544q-1.2.808-2.4,1.61c-1.626,1.086-3.233,2.2-4.833,3.324-3.2,2.242-6.405,4.474-9.566,6.77-.868.632-1.736,1.266-2.588,1.92-.9.688-1.743,1.441-2.638,2.125-.056.042.012.119.068.082.808-.531,1.663-1,2.476-1.525q1.247-.812,2.476-1.656,2.414-1.663,4.8-3.362c3.133-2.231,6.277-4.452,9.362-6.75.862-.642,1.716-1.291,2.578-1.933.9-.671,1.858-1.308,2.693-2.059.043-.039,0-.12-.057-.089"
                                                        transform="translate(-65.423 -62.404)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38698"
                                                        data-name="Path 38698"
                                                        d="M193.1,215.265c-.856-.727-1.659-1.517-2.492-2.271s-1.689-1.491-2.531-2.24c-1.644-1.462-3.306-2.9-4.955-4.362q-5.011-4.436-9.977-8.921c-1.877-1.7-3.716-3.459-5.651-5.1-.028-.023-.07.012-.043.04,1.519,1.647,3.156,3.191,4.776,4.739-.342-.214-.679-.436-1.008-.669-.365-.257-.724-.524-1.076-.8s-.7-.593-1.074-.857c-.061-.042-.118.042-.078.093a9.078,9.078,0,0,0,2.146,1.847,13.753,13.753,0,0,0,1.226.727c.149.078.3.147.456.215q2.168,2.063,4.364,4.1c3.277,3.023,6.611,5.987,10.02,8.861.941.793,1.894,1.572,2.846,2.351.975.8,2.008,1.526,2.981,2.327.046.038.114-.042.068-.081"
                                                        transform="translate(-53.221 -61.142)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38699"
                                                        data-name="Path 38699"
                                                        d="M131.048,175.149c5.41.7,13.625-8.32,16.52-15.231.2-.475-.986-5.126-2.154-10.848-.7-3.474-1.388-7.359-1.764-10.95-.073-.737-21.948,7.828-21.948,7.828a57.551,57.551,0,0,1,3.618,13.559,8.107,8.107,0,0,1,0,1.49c0,.068-.012.152-.008.248-.163,2.847.507,13.228,5.735,13.9"
                                                        transform="translate(-38.682 -43.886)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38700"
                                                        data-name="Path 38700"
                                                        d="M127.639,161.161a13.612,13.612,0,0,1-2.323.119c0-.1.005-.175.006-.248a7.646,7.646,0,0,0,0-1.488,57.682,57.682,0,0,0-3.613-13.555s17.754-6.955,21.326-7.8c-.262,4.222-2.141,21.283-15.393,22.968"
                                                        transform="translate(-38.683 -43.923)"
                                                        fill="#c5865f"
                                                    />
                                                    <path
                                                        id="Path_38701"
                                                        data-name="Path 38701"
                                                        d="M134.7,93.548c4.536,7.064,6.744,30.539,2.65,37.065-5.936,9.462-18.788,13.827-27.617,5.975-8.559-7.611-10.9-38.254-6.03-44.508,7.166-9.211,24.3-8.966,31,1.468"
                                                        transform="translate(-32.164 -27.154)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38702"
                                                        data-name="Path 38702"
                                                        d="M128.951,127.376c.006-.061.131.063.135.128.106,1.585.5,3.384,1.978,3.766.046.012.049.092,0,.09-1.77-.073-2.261-2.465-2.108-3.984"
                                                        transform="translate(-40.977 -40.48)"
                                                        fill="#263238"
                                                    />
                                                    <path id="Path_38703" data-name="Path 38703" d="M130.2,124.746c2.523-.445,3.227,4.634.889,5.046-2.3.405-3-4.673-.889-5.046" transform="translate(-40.982 -39.64)" fill="#263238" />
                                                    <path
                                                        id="Path_38704"
                                                        data-name="Path 38704"
                                                        d="M114.232,129.028c-.02-.059-.113.091-.1.156.267,1.566.311,3.4-1.04,4.124-.042.023-.027.1.025.086,1.7-.485,1.621-2.925,1.116-4.366"
                                                        transform="translate(-35.937 -41.006)"
                                                        fill="#263238"
                                                    />
                                                    <path id="Path_38705" data-name="Path 38705" d="M111.589,126.91c-2.557.159-2.051,5.26.317,5.113,2.331-.145,1.826-5.246-.317-5.113" transform="translate(-34.927 -40.336)" fill="#263238" />
                                                    <path
                                                        id="Path_38706"
                                                        data-name="Path 38706"
                                                        d="M131.248,119.411a20.159,20.159,0,0,1-2.063-.42,3.4,3.4,0,0,1-2.022-.83,1.085,1.085,0,0,1-.008-1.324,2.689,2.689,0,0,1,2.646-.647,3.949,3.949,0,0,1,2.489,1.38,1.157,1.157,0,0,1-1.042,1.84"
                                                        transform="translate(-40.345 -36.904)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38707"
                                                        data-name="Path 38707"
                                                        d="M108.279,121.82a19.837,19.837,0,0,0,1.946-.8,3.4,3.4,0,0,0,1.828-1.2,1.083,1.083,0,0,0-.244-1.3,2.69,2.69,0,0,0-2.72-.134,3.955,3.955,0,0,0-2.182,1.826,1.157,1.157,0,0,0,1.373,1.61"
                                                        transform="translate(-33.934 -37.531)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38708"
                                                        data-name="Path 38708"
                                                        d="M132.379,147.744c-.326.42-.632.98-1.2,1.107a4.193,4.193,0,0,1-1.746-.162.055.055,0,0,0-.057.09,2.137,2.137,0,0,0,2.115.577,1.69,1.69,0,0,0,1.044-1.562c.012-.095-.113-.112-.161-.05"
                                                        transform="translate(-41.118 -46.947)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38709"
                                                        data-name="Path 38709"
                                                        d="M125.87,133.682a5.407,5.407,0,0,1-3.245,2.879,6.805,6.805,0,0,1-1.914.355,1.974,1.974,0,0,1-.374.008c-.117,0-.222,0-.352,0a.4.4,0,0,1-.365-.308V136.6a.767.767,0,0,1-.008-.163v-.012l-.016-.138c-.2-1.207-.338-3.065-.338-3.065-.412.283-2.527,1.611-2.58.973-.413-5.281-.872-11.155-.168-16.5a.147.147,0,0,1,.293,0c.6,5.06.3,10.192.821,15.284a9.494,9.494,0,0,1,2.422-1.118c.179.026.2,3.6.336,4.132a.2.2,0,0,0,.018.056c2.07-.022,3.519-.849,5.306-2.49.1-.106.244-.016.166.121"
                                                        transform="translate(-36.915 -37.366)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38710"
                                                        data-name="Path 38710"
                                                        d="M123.762,143.695a6.419,6.419,0,0,0,2.818,1.619,2.888,2.888,0,0,0,1.751-.132c1.211-.5,1.083-1.662.715-2.616a6.883,6.883,0,0,0-.772-1.432,8.307,8.307,0,0,1-4.512,2.561"
                                                        transform="translate(-39.336 -44.858)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38711"
                                                        data-name="Path 38711"
                                                        d="M127.892,145.981a2.885,2.885,0,0,0,1.75-.132c1.211-.5,1.083-1.662.715-2.616a2.981,2.981,0,0,0-2.465,2.748"
                                                        transform="translate(-40.648 -45.525)"
                                                        fill="#ff98b9"
                                                    />
                                                    <path
                                                        id="Path_38712"
                                                        data-name="Path 38712"
                                                        d="M134.084,109.252c-4.132,1.061-6.924-8.974-6.924-8.974s-6.543.875-12.293-6.639c0,0-6.352,7.552-13.417,8.483C90.379,103.582,86.3,89.9,89.321,85.874c4.286-5.706,16.006-3.165,16.006-3.165s13.619-8.97,21.321-.284a8.058,8.058,0,0,1,9.59,5.369c2.826,7.221.925,20.667-2.154,21.458"
                                                        transform="translate(-28.083 -24.994)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38713"
                                                        data-name="Path 38713"
                                                        d="M141.025,106.6a14.47,14.47,0,0,1-9.187-1.76c-2.845-1.717-5.223-4.994-5.322-8.389,0-.185-.306-.159-.288.028.368,3.694,1.712,7.18,4.849,9.39a10.084,10.084,0,0,0,10.018,1.038c.153-.074.117-.329-.072-.307"
                                                        transform="translate(-40.12 -30.616)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38714"
                                                        data-name="Path 38714"
                                                        d="M152.948,84.89c-2.9-1.95-6.174-1.347-9.247-.241-.177.063-.066.347.1.27,2.946-1.333,6.684-.28,9.082,1.712,2.351,1.953,2.99,5.158,3.229,8.071a22.846,22.846,0,0,1-4.518,15.729.072.072,0,0,0,.113.091,22.82,22.82,0,0,0,5.184-17.3c-.383-3.021-1.275-6.535-3.946-8.335"
                                                        transform="translate(-45.645 -26.577)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38715"
                                                        data-name="Path 38715"
                                                        d="M105.892,83.941a10.725,10.725,0,0,0-7.159-2.557,12.846,12.846,0,0,0-8.4,3.671,7.244,7.244,0,0,0-1.733,7.04c.724,2.893,2.9,5.134,5.217,6.84a.064.064,0,0,0,.079-.1,12.766,12.766,0,0,1-4.389-6.326,6.67,6.67,0,0,1,1.934-6.82c3.677-3.285,10.057-4.987,14.27-1.524a.142.142,0,0,0,.176-.223"
                                                        transform="translate(-28.079 -25.866)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38716"
                                                        data-name="Path 38716"
                                                        d="M151.059,123.532s3.187-8.58,6.952-7.626,2.685,12.468-.807,14.913a4.063,4.063,0,0,1-5.82-.743Z"
                                                        transform="translate(-48.012 -36.816)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38717"
                                                        data-name="Path 38717"
                                                        d="M158.637,120.766a.055.055,0,0,1,.048.1c-2.426,1.8-3.2,4.689-3.521,7.556.545-1.213,1.5-2.048,3.094-1.438.083.032.044.16-.036.164a2.5,2.5,0,0,0-2.443,1.537,12.072,12.072,0,0,0-.714,2.485c-.064.276-.535.259-.516-.044,0-.023,0-.046.005-.069-.967-3.439.461-8.976,4.082-10.289"
                                                        transform="translate(-49.03 -38.383)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38718"
                                                        data-name="Path 38718"
                                                        d="M264.226,313.216c-6.485,22.632-25.045,41.022-28.847,43.433-3.233,2.065-4.918,3.1-4.918,3.1-5.727,3.816-9.675,2.782-9.675,2.782s-5.324,6.361-9.7,3.783c-4.919-2.878,3.519-11.248,5.345-18.689,4.183-17.049,5.36-42.452,6.078-47.489Z"
                                                        transform="translate(-66.607 -95.394)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38719"
                                                        data-name="Path 38719"
                                                        d="M238.567,348.005a112.978,112.978,0,0,1-4.508,14.719c-2.195,5.251-5.186,9.937-8.114,14.783a.137.137,0,0,0,.223.158A59.843,59.843,0,0,0,239,348.1c.031-.248-.37-.349-.437-.1"
                                                        transform="translate(-71.807 -110.563)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38720"
                                                        data-name="Path 38720"
                                                        d="M253.694,349.5c-1.565,4.787-4.368,13.181-13.7,25.783-.03.041.03.106.07.065a53.686,53.686,0,0,0,14.107-25.674c.073-.308-.372-.491-.476-.173"
                                                        transform="translate(-76.277 -111.033)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38721"
                                                        data-name="Path 38721"
                                                        d="M216.145,326.76c-.335-2.436-1.615-2.276-3.824,1.495-2.243,3.811-7.751,20.576-13.449,18.147-5.723-2.426,2.461-26.023,6.621-32.022s12.99-14.246,12.99-14.246c-.669,4.911-1.151,16.976-2.338,26.627"
                                                        transform="translate(-62.585 -95.394)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38722"
                                                        data-name="Path 38722"
                                                        d="M280.861,234.434c4.553,14.287-7.453,46.159-10.772,56.754-1.447,4.617-43.616-7.719-42.038-12.646,3.234-10.093,11.6-28.458,10.125-29.823-1.171-1.08,38.546-27.272,42.686-14.286"
                                                        transform="translate(-72.47 -73.367)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38723"
                                                        data-name="Path 38723"
                                                        d="M254.571,244.452c-.555.224-1.118.394-1.659.656-.558.27-1.126.525-1.67.824a21.787,21.787,0,0,0-2.972,2,27.947,27.947,0,0,0-2.675,2.373c-.434.441-.859.892-1.26,1.364a8.3,8.3,0,0,0-1.063,1.439.17.17,0,0,0,0,.169c.006.009.023.042.038.048.183.077.284-.069.412-.184.215-.193.426-.39.639-.587.455-.421.889-.864,1.345-1.284.912-.84,1.863-1.649,2.845-2.406s1.992-1.467,3.017-2.162c.512-.347,1.014-.71,1.538-1.04s1.027-.692,1.561-.991c.118-.066.03-.272-.1-.22"
                                                        transform="translate(-77.315 -77.694)"
                                                        fill="#263238"
                                                    />
                                                    <path id="Path_38724" data-name="Path 38724" d="M25.189,234.173c-6.85,4.755-27.6,23.373-23.406,33.542s20.175,9.915,42.536,5.87Z" transform="translate(-0.391 -74.429)" fill="#eeb08a" />
                                                    <path
                                                        id="Path_38725"
                                                        data-name="Path 38725"
                                                        d="M35.444,227.077c9.165-7.63,22.476-16.906,27.922-16.611,5.716.309,25.767,2.2,30.284,4.143s17.507,14.573,18.836,18.764c1.063,3.356-5.528,6.519-13.893,1.138-7.822-5.032-9.444-6.62-12-7.5-2.6-.9-12.606,1.055-13.821,4.848-.716,2.235,2.186,8.27,6.214,9.58s8.178-1.119,13.868-.812,11.143,5.875,10.06,7.731-3.644.849-11.4,3.444c-4.987,1.669-10.9,4.671-19.352,9.639-8.645,5.081-21.147,4.992-21.147,4.992Z"
                                                        transform="translate(-11.265 -66.892)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38726"
                                                        data-name="Path 38726"
                                                        d="M122.033,246.843c13.651,4.273,7.344,24.5-6.329,20.219-13.651-4.273-7.344-24.5,6.329-20.219"
                                                        transform="translate(-34.356 -78.269)"
                                                        fill="#ffc727"
                                                    />
                                                    <g id="Group_16409" data-name="Group 16409" transform="translate(73.736 167.983)" opacity="0.1">
                                                        <g id="Group_16408" data-name="Group 16408">
                                                            <g id="Group_16407" data-name="Group 16407" clip-path="url(#clip-path-3)">
                                                                <path
                                                                    id="Path_38727"
                                                                    data-name="Path 38727"
                                                                    d="M122.033,246.843c13.651,4.273,7.344,24.5-6.329,20.219-13.651-4.273-7.344-24.5,6.329-20.219"
                                                                    transform="translate(-108.092 -246.251)"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <path
                                                        id="Path_38728"
                                                        data-name="Path 38728"
                                                        d="M120.367,246.278c13.01,4.073,6.7,24.3-6.329,20.219-13.009-4.073-6.7-24.3,6.329-20.219"
                                                        transform="translate(-33.972 -78.105)"
                                                        fill="#ffc727"
                                                    />
                                                    <g id="Group_16412" data-name="Group 16412" transform="translate(74.671 169.83)" opacity="0.1">
                                                        <g id="Group_16411" data-name="Group 16411">
                                                            <g id="Group_16410" data-name="Group 16410" clip-path="url(#clip-path-4)">
                                                                <path
                                                                    id="Path_38729"
                                                                    data-name="Path 38729"
                                                                    d="M109.517,256.83a8.1,8.1,0,0,0,5.88,8.972c10.814,3.386,16.05-13.4,5.253-16.781-.071-.022-.141-.044-.214-.062,10.1,3.384,5.073,19.261-5.238,16.033a7.742,7.742,0,0,1-5.681-8.162"
                                                                    transform="translate(-109.462 -248.959)"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <path
                                                        id="Path_38731"
                                                        data-name="Path 38731"
                                                        d="M76.376,209.61c6.744-1.83,21.006-3.216,30.5.493,6.417,2.507,15.525,25.383,12.2,28.076s-6.131.159-9.821-4.1c-1.345-1.553-6.712-11.681-9.6-11.246-4.144.626-14.112,6.584-14.112,6.584Z"
                                                        transform="translate(-24.275 -66.036)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38732"
                                                        data-name="Path 38732"
                                                        d="M137.642,242.328c1.028-5.191-1.789-11.025-4.926-16.464-.048-.085-.183-.014-.134.07.8,1.386,4.984,11.265,4.963,16.4,0,.058.087.043.1-.009"
                                                        transform="translate(-42.137 -71.776)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38733"
                                                        data-name="Path 38733"
                                                        d="M76.376,209.61c6.744-1.83,21.006-3.216,30.5.493,6.417,2.507,10.076,24.5,6.749,27.192s-7.569-.716-10.6-6.3c-.98-1.806-2.706-9.574-5.588-9.139-4.145.626-14.346,2.257-14.346,2.257Z"
                                                        transform="translate(-24.275 -66.036)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38734"
                                                        data-name="Path 38734"
                                                        d="M95.052,223.207c1.072-.281,1.444-.383,2.523-.646s2.152-.507,3.241-.69a8.4,8.4,0,0,1,2.876-.21,4.252,4.252,0,0,1,2.315,1.4c1.409,1.544,1.909,3.789,2.533,5.727.7,2.164,2.484,6.275,5.023,8.14a6.163,6.163,0,0,0,2.28,1.169,3.872,3.872,0,0,0,1.89.123c2.556-.79,3.072-3.878,3.044-6.423-.053-4.743-1.574-9.534-3.3-13.9-.424-1.074-.875-2.136-1.326-3.2a9.336,9.336,0,0,0-2.077-3.361c-1.6-1.477-5.723-2.243-6.993-2.495-.1-.019-.05-.162.044-.145,1.551.284,5.83.51,8.307,3.006a11.006,11.006,0,0,1,1.875,3.37c.548,1.215,1.059,2.449,1.54,3.692a49.592,49.592,0,0,1,2.283,7.435,20.765,20.765,0,0,1,.564,7.512,6.116,6.116,0,0,1-3.936,4.889c-1.785.534-3.557-.561-4.333-1.1a10.342,10.342,0,0,1-2.031-1.885,43.916,43.916,0,0,1-3.266-5.354c-.9-1.842-1.3-3.946-2.352-5.7a3.666,3.666,0,0,0-2.225-1.776,9.775,9.775,0,0,0-2.873,0,29.87,29.87,0,0,0-5.454.721c-.49.118-.617-.175-.168-.292"
                                                        transform="translate(-30.123 -66.331)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38735"
                                                        data-name="Path 38735"
                                                        d="M68.768,207.587c1.8-1.067,12.078-7.518,16.113-8.637s19.824-3.322,22.984.274c3.972,4.519-7.889,8.29-13.192,9.462s-9.989,7.1-9.989,7.1Z"
                                                        transform="translate(-21.857 -62.694)"
                                                        fill="#eeb08a"
                                                    />
                                                    <path
                                                        id="Path_38736"
                                                        data-name="Path 38736"
                                                        d="M110.358,210.346c-1.768.29-3.546.777-5.276,1.241a35.063,35.063,0,0,0-4.938,1.453,15.487,15.487,0,0,0-4.178,2.855c-.619.563-1.2,1.158-1.762,1.772-.618.67-1.176,1.4-1.8,2.061-.067.07.033.181.1.111a39.019,39.019,0,0,1,3.817-3.228,21.136,21.136,0,0,1,4.431-2.64c3.141-1.375,6.534-2.062,9.687-3.407.128-.055.046-.239-.079-.219"
                                                        transform="translate(-29.361 -66.856)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38737"
                                                        data-name="Path 38737"
                                                        d="M129.744,250.992a7.67,7.67,0,0,0,4.027,1.308,2.949,2.949,0,0,0,2.4-1.283,1.468,1.468,0,0,0,.355-.952c-.018-.093.132-.085.108,0a4.809,4.809,0,0,0-.054.587,2.161,2.161,0,0,1-.136.478,2.5,2.5,0,0,1-.527.822,3.177,3.177,0,0,1-1.891.933,5.292,5.292,0,0,1-4.349-1.8.059.059,0,0,1,.072-.091"
                                                        transform="translate(-41.21 -79.459)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38738"
                                                        data-name="Path 38738"
                                                        d="M84.012,227.515a60.971,60.971,0,0,0-4.019,6.688,26.968,26.968,0,0,0-2.407,7.305,46.555,46.555,0,0,0-.142,8.24,24.159,24.159,0,0,1-.153,3.936,14.869,14.869,0,0,1-5.426,9.551c-.076.065.027.19.11.136a15.83,15.83,0,0,0,6.751-11.6c.248-2.823-.228-5.655-.006-8.482a30.231,30.231,0,0,1,1.7-7.549,47.671,47.671,0,0,1,3.69-8.174c.035-.06-.057-.109-.093-.052"
                                                        transform="translate(-22.833 -72.305)"
                                                        fill="#263238"
                                                    />
                                                    <path
                                                        id="Path_38739"
                                                        data-name="Path 38739"
                                                        d="M37.514,221.247A123.2,123.2,0,0,0,22.419,232.1,82.447,82.447,0,0,0,9.441,245.374a56.282,56.282,0,0,0-5.5,8.86.054.054,0,0,0,.094.052A69.285,69.285,0,0,1,9.3,246.678a82.345,82.345,0,0,1,6.079-6.871,124.909,124.909,0,0,1,14.11-12.112c2.809-2.111,5.39-4.131,8.192-6.25.269-.2.13-.381-.17-.2"
                                                        transform="translate(-1.251 -70.297)"
                                                        fill="#263238"
                                                    />
                                                    <path id="Path_38740" data-name="Path 38740" d="M168.63,412.472c-.048.28-.1.559-.157.846.048-.28.1-.566.15-.846Z" transform="translate(-53.547 -131.1)" fill="#ebebeb" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Group_16461" data-name="Group 16461" transform="translate(164.541 3170.772)">
                                        <g id="Group_16460" data-name="Group 16460" clip-path="url(#clip-path-5)">
                                            <g id="Group_16421" data-name="Group 16421">
                                                <g id="Group_16420" data-name="Group 16420" clip-path="url(#clip-path-5)">
                                                    <path
                                                        id="Path_38741"
                                                        data-name="Path 38741"
                                                        d="M144.874,153.885c0,2.959-32.431,5.357-72.437,5.357S0,156.843,0,153.885s32.431-5.358,72.437-5.358,72.437,2.4,72.437,5.358"
                                                        transform="translate(83.792 -16.99)"
                                                        fill="#dcdcdc"
                                                    />
                                                </g>
                                            </g>
                                            <g id="Group_16459" data-name="Group 16459">
                                                <g id="Group_16462" data-name="Group 16462">
                                                    <path
                                                        id="Path_38742"
                                                        data-name="Path 38742"
                                                        d="M98.456,51.506c.282-1.449.455-2.755.6-4.146a40.429,40.429,0,0,0,.21-4.171,23.776,23.776,0,0,0-.382-4.337,10.368,10.368,0,0,0-1.933-4.568,5.9,5.9,0,0,0-3.779-2.179,6.917,6.917,0,0,0-1.367-.061A8.24,8.24,0,0,0,87.186,33.9a12.792,12.792,0,0,0-2.953,3.381,11.691,11.691,0,0,0-1.621,4.18,5.1,5.1,0,0,0,.209,2.66,2.939,2.939,0,0,0,1.067,1.35,3.077,3.077,0,0,0,1.55.512,2.855,2.855,0,0,0,1.63-.393,3.393,3.393,0,0,0,1.053-1.04,6.081,6.081,0,0,0,.825-2.223,12.258,12.258,0,0,0-.039-4.231,10.1,10.1,0,0,0-1.5-3.931,4.763,4.763,0,0,0-1.625-1.523,3.468,3.468,0,0,0-2.227-.37,6.775,6.775,0,0,0-3.542,2.079A22.391,22.391,0,0,0,75.84,41a22.124,22.124,0,0,1,4.608-6.189,5.836,5.836,0,0,1,3.221-1.583,2.748,2.748,0,0,1,2.611,1.652,8.642,8.642,0,0,1,.929,3.439,10.4,10.4,0,0,1-.3,3.544,3.93,3.93,0,0,1-.647,1.373.988.988,0,0,1-.358.289.439.439,0,0,1-.253,0c-.119-.03-.257-.092-.271-.133a.5.5,0,0,1-.076-.2,2.722,2.722,0,0,1,.088-1.2,9.767,9.767,0,0,1,3.886-5.21,4.475,4.475,0,0,1,2.6-.813,3.084,3.084,0,0,1,.578.09,1.778,1.778,0,0,1,1.1.816,6.351,6.351,0,0,1,.778,2.681,19.292,19.292,0,0,1,0,3.461,35.322,35.322,0,0,1-.492,3.611c-.222,1.19-.505,2.453-.816,3.542Z"
                                                        transform="translate(-10.894 -4.601)"
                                                        fill="#c1c1c1"
                                                    />
                                                    <path
                                                        id="Path_38744"
                                                        data-name="Path 38744"
                                                        d="M107.319,129.079c3.777,5.337,3.009,21.628,5.292,23.912s25.722,2.042,27.3.7.832-7.1,2.6-8.048c.692-.37-35.2-16.565-35.2-16.565"
                                                        transform="translate(-15.416 -18.541)"
                                                        fill="#d6d6d6"
                                                    />
                                                    <path
                                                        id="Path_38746"
                                                        data-name="Path 38746"
                                                        d="M218.534,129.384c-4.717,6.811-2.168,21.368-4.451,23.651s-25.722,2.042-27.3.7-.857-7.411-1.79-8.565c-.493-.611,33.541-15.786,33.541-15.786"
                                                        transform="translate(-26.572 -18.585)"
                                                        fill="#d6d6d6"
                                                    />
                                                    <g id="Group_16433" data-name="Group 16433" transform="translate(91.906 110.541)" opacity="0.3">
                                                        <g id="Group_16432" data-name="Group 16432">
                                                            <g id="Group_16431" data-name="Group 16431" clip-path="url(#clip-path-7)">
                                                                <path
                                                                    id="Path_38748"
                                                                    data-name="Path 38748"
                                                                    d="M142.513,145.646a2.572,2.572,0,0,0-1,1.737,111.375,111.375,0,0,1-31.383-8.442c-.541-3.972-1.324-7.759-2.8-9.858,0,0,35.889,16.194,35.191,16.564"
                                                                    transform="translate(-107.322 -129.082)"
                                                                    fill="#ababab"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="Group_16436" data-name="Group 16436" transform="translate(158.418 110.797)" opacity="0.3">
                                                        <g id="Group_16435" data-name="Group 16435">
                                                            <g id="Group_16434" data-name="Group 16434" clip-path="url(#clip-path-8)">
                                                                <path
                                                                    id="Path_38749"
                                                                    data-name="Path 38749"
                                                                    d="M218.536,129.382c-1.758,2.541-2.513,6.164-2.876,9.816a106.547,106.547,0,0,1-30.145,8.335,5.256,5.256,0,0,0-.52-2.363c-.5-.612,33.54-15.788,33.54-15.788"
                                                                    transform="translate(-184.991 -129.382)"
                                                                    fill="#ababab"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <path
                                                        id="Path_38750"
                                                        data-name="Path 38750"
                                                        d="M152.975,14.06c-47.142,0-65.181,36.9-65.181,58.494,0,21.3,13.7,57.514,65.181,57.514s68.557-30.674,68.557-58-20.936-58-68.557-58"
                                                        transform="translate(-12.611 -2.02)"
                                                        fill="#d6d6d6"
                                                    />
                                                    <path id="Path_38752" data-name="Path 38752" d="M179.44,14.707S200.966-1.805,224.285.163c8.03.677-5.3,18.074-5.545,31.663Z" transform="translate(-25.775 0)" fill="#c1c1c1" />
                                                    <g id="Group_16445" data-name="Group 16445" transform="translate(183.97 5.965)" opacity="0.3">
                                                        <g id="Group_16444" data-name="Group 16444">
                                                            <g id="Group_16443" data-name="Group 16443" clip-path="url(#clip-path-9)">
                                                                <path
                                                                    id="Path_38754"
                                                                    data-name="Path 38754"
                                                                    d="M214.832,26.176c-.134.86,7.294,4.044,8.062,3.554s1.544-11.194,7.608-22.6c.892-1.679-14.233,9.848-15.67,19.045"
                                                                    transform="translate(-214.829 -6.966)"
                                                                    fill="#7a7a7a"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="Group_16448" data-name="Group 16448" transform="translate(182.749 54.247)" opacity="0.3">
                                                        <g id="Group_16447" data-name="Group 16447">
                                                            <g id="Group_16446" data-name="Group 16446" clip-path="url(#clip-path-10)">
                                                                <path
                                                                    id="Path_38755"
                                                                    data-name="Path 38755"
                                                                    d="M219.3,76.68a3.827,3.827,0,0,0,3.091-2.7,5.7,5.7,0,0,1-2.509,4.273c-.1.069-.051.265.086.223,4.119-1.55,3.674-7.365,2.227-11.073-.077-.206-.154-.411-.248-.608-.925-2.149-2.535-3.708-4.556-3.417-6.654.959-4.256,14.19,1.91,13.3"
                                                                    transform="translate(-213.403 -63.346)"
                                                                    fill="#ababab"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <path
                                                        id="Path_38756"
                                                        data-name="Path 38756"
                                                        d="M238.1,56.912c1.029,3.095,10.378.585,12.736,2.542,3.708,3.077,2.683,41.265-.71,44.342-1.9,1.726-12.5-.093-15.483,2S238.1,56.912,238.1,56.912"
                                                        transform="translate(-33.591 -8.175)"
                                                        fill="#c1c1c1"
                                                    />
                                                    <g id="Group_16454" data-name="Group 16454" transform="translate(214.266 55.679)" opacity="0.3">
                                                        <g id="Group_16453" data-name="Group 16453">
                                                            <g id="Group_16452" data-name="Group 16452" clip-path="url(#clip-path-11)">
                                                                <path
                                                                    id="Path_38758"
                                                                    data-name="Path 38758"
                                                                    d="M253.678,81.861c0,9.3-.777,16.842-1.736,16.842s-1.736-7.54-1.736-16.842.778-16.842,1.736-16.842,1.736,7.54,1.736,16.842"
                                                                    transform="translate(-250.206 -65.019)"
                                                                    fill="#c8c8c8"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="Group_16457" data-name="Group 16457" transform="translate(120.323 15.952)" opacity="0.3">
                                                        <g id="Group_16456" data-name="Group 16456">
                                                            <g id="Group_16455" data-name="Group 16455" clip-path="url(#clip-path-12)">
                                                                <path
                                                                    id="Path_38759"
                                                                    data-name="Path 38759"
                                                                    d="M142.273,26.953c.158-.052,16.047-5.219,30.838-1.177l1.473-5.389c-16.458-4.5-33.366,1.028-34.078,1.266l1.769,5.3-.885-2.65Z"
                                                                    transform="translate(-140.506 -18.628)"
                                                                    fill="#ababab"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <path
                                                        id="Path_38760"
                                                        data-name="Path 38760"
                                                        d="M113.608,113.14c-21.234-24.4-8.242-52.73-7.65-53.945a3.492,3.492,0,0,0-6.27-3.076,58.9,58.9,0,0,0-5.007,20.343c-1.023,15.515,4.11,29.767,16.256,39.465,3.663,2.925,5.4.349,2.671-2.787"
                                                        transform="translate(-13.582 -7.781)"
                                                        fill="#fff"
                                                    />
                                                    <path id="Path_38761" data-name="Path 38761" d="M106.013,46.754a3.8,3.8,0,1,0,3.8-3.8,3.8,3.8,0,0,0-3.8,3.8" transform="translate(-15.228 -6.171)" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg> -->
                        </div>
                        <div>
                            <h2 class="whyInvestinUlip-title">Why Should You Invest in ULIPs?</h2>
                            <p class="whyInvestinUlip-desc">
                                Unit Linked Insurance Plans offer superior returns in multiple asset groups than the majority of insurance products. Depending on the performance of the fund, the policyholder can switch between debt and
                                equity to ensure that the returns are positive and beneficial.
                            </p>
                            <br />
                            <p class="whyInvestinUlip-desc">
                                In case of ULIPs, the life cover provided is ten times the amount of annual premium payments, which in turn, makes the insured unsusceptible to market volatility. The insured gets liquidity benefits,
                                transparency, returns, etc., which works in their favor. Therefore, investing in a ULIP makes for a smart decision!
                            </p>
                            <div class="whyInvestinUlip-cta"><a href="">Invest in ULIP</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="whichUlipfundsAreBest">
            <div class="midWrapper">
                <h2 class="whichUlipfundsAreBest-title">Which ULIP Funds are Best Suited for You?</h2>
                <p class="whichUlipfundsAreBest-desc">
                Choosing the best ULIP funds depends on several factors, including your risk tolerance, investment horizon, and financial goals. Here are some categories of ULIP funds and their suitability:
                </p>
                <div class="whichUlipfundsAreBest-flex">
                    <div class="wfa-icon"></div>
                    <div>
                        <h3 class="whichUlipfundsAreBest-subTitle">Equity</h3>
                        <p class="whichUlipfundsAreBest-subDesc">
                            <a href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-are-equity-mutual-funds" class="inline-links">Equity funds</a>are for Investors with a high-risk tolerance and a long-term investment horizon (5-10 years or more). Their performance is based on the ups and downs of the market. You can opt for equity funds if you have a good risk appetite and want to create some wealth in the long term.

                    </div>
                </div>
                <div class="whichUlipfundsAreBest-flex">
                    <div class="wfa-icon"></div>
                    <div>
                        <h3 class="whichUlipfundsAreBest-subTitle">Debt</h3>
                        <p class="whichUlipfundsAreBest-subDesc">
                            Investments made using borrowed money ULIPs are geared toward debt instruments. Debentures, government bonds,
                            <a href="https://www.kotaklife.com/insurance-guide/wealth-creation/corporate-bonds-types-and-benefits" class="inline-links">corporate bonds,</a>and fixed-income bonds fall under this category. These devices are
                            safer since they carry low to moderate risk.
                        </p>
                    </div>
                </div>
                <div class="whichUlipfundsAreBest-flex">
                    <div class="wfa-icon"></div>
                    <div>
                        <h3 class="whichUlipfundsAreBest-subTitle">Cash funds</h3>
                        <p class="whichUlipfundsAreBest-subDesc">
                            Funds which invest in bank-owned money market funds are called as cash funds. These instruments have a very low-risk profile. As a result, of all ULIP categories, they offer the lowest returns. Risk-averse
                            investors have the option of choosing cash funds ULIPs.
                        </p>
                    </div>
                </div>
                <div class="whichUlipfundsAreBest-flex">
                    <div class="wfa-icon"></div>
                    <div>
                        <h3 class="whichUlipfundsAreBest-subTitle">Balanced funds</h3>
                        <p class="whichUlipfundsAreBest-subDesc">
                            ULIPs give investors the choice to invest in both equities and debt instruments in order to balance risk and profit. The remainder of the fund is invested in equity, while a portion is assigned to debt
                            instruments with set interest rates.
                        </p>
                    </div>
                </div>
                <div class="whichUlipfundsAreBest-flexR">
                    <p>Multiply your wealth with Kotak e-Invest.</p>
                    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=suitedulip">Invest today</a>
                </div>
            </div>
        </section>
        <section class="hid ulip-fact-slider newslickulip" id="variousFactorsConsiderBuyingUlip">
            <div class="midWrapper position-relative mb-50">
                <h2 class="factorsConsiderUlip-title">What are the various factors to consider before buying ULIPs?</h2>
                <p class="factorsConsiderUlip-desc">ULIPs are life insurance products that are not the same as conventional insurance policies. Here are some factors that must be considered before choosing a Unit Linked Insurance Plan.</p>
                <span class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>
                <div class="factorsslick mt20">
                    <div>
                        <div class="factorsConsiderUlip-card">
                            <h3 class="factorsConsiderUlip-subTitle">Financial Objectives</h3>
                            <p class="factorsConsiderUlip-subDesc">
                            Before buying ULIPs, it is essential to identify your financial goals. Different ULIPs cater to different goals, such as wealth creation, tax planning, or income generation. Carefully evaluate the plan's features, to ensure they complement your financial objectives.

                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="factorsConsiderUlip-card">
                            <h3 class="factorsConsiderUlip-subTitle">Risk Appetite</h3>
                            <p class="factorsConsiderUlip-subDesc">
                            Considering your risk tolerance is an essential step before buying ULIPs. As ULIPs are market-related products and are impacted by market fluctuations, you must consider your risk appetite. This will help you determine how to allocate funds within your ULIP plan.

                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="factorsConsiderUlip-card">
                            <h3 class="factorsConsiderUlip-subTitle">Charges and Fees</h3>
                            <p class="factorsConsiderUlip-subDesc">
                            There are certain charges associated with ULIPs such as premium allocation charges, und management charges, mortality charges and policy administration charges. Go through these charges before finalizing any plan and see how they can impact your returns. 

                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="factorsConsiderUlip-card">
                            <h3 class="factorsConsiderUlip-subTitle">Fund Performance and Track Record</h3>
                            <p class="factorsConsiderUlip-subDesc">
                            Analyzing the track record and performance underlying ULIP funds is important for policy buyers. If a fund does not perform well in the past, there could be chances it might not work for you as well. In this case you should invest in another fund for better returns.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="factorsConsiderUlip-card">
                            <h3 class="factorsConsiderUlip-subTitle">Flexibility and Liquidity</h3>
                            <p class="factorsConsiderUlip-subDesc">
                            Consider the flexibility and liquidity options provided by the ULIP. Look for features such as the ability to switch between funds, change the premium payment frequency, or increase or decrease the sum assured. 


                            </p>
                        </div>
                    </div>
                </div>
                <div class="factorsConsiderUlip-cta">
                    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=factors">Invest now</a>
                </div>
            </div>
        </section>
        <!-- <section class="hid" id="stepsToBuyUlip">
            <div class="greyBg">
                <div class="midWrapper">
                    <h2 class="stepsToBuyUlip-title">Steps to Buy ULIP Online</h2>
                    <p class="stepsToBuyUlip-desc">To purchase unit-linked insurance plans online, follow these simple steps:</p>
                    <div class="stepsToBuyUlip-img mobNone"><div class="ulipsprite-image number"></div></div>
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
                                <p>
                                    Once you click on the check returns, it will redirect you to another page to select your fund strategy, personal details like annual income, occupation, PAN card number and other details and also know
                                    your maturity value.
                                </p>
                            </li>
                            <li>
                                <p class="mb-10">Step</p>
                                <p class="stepsToBuyUlipSpan">05</p>
                                <p>Fill in the necessary details, submit the documents required, and pay the premium.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="stepsToBuyUlip-cta">
                        <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=steps2buy">Buy ULIP online</a>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="hid" id="stepsToBuyUlip">
                  <div class="midWrapper">
                             <div>
                                  <h2 class="whatareulips-title"> Steps to Buy ULIP Online
                                  </h2>
                                  <p class="whatareulips-desc">To purchase unit-linked insurance plans online, follow these simple steps:

                                      </p>
                              </div>

                               <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Visit insurance comparison websites or the official websites of insurance providers.

                                           </h3>
                                          
                                       </div>
                                 </div>

                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Select a ULIP plan that aligns with your financial goals, risk tolerance, and investment horizon.
                                           </h3>
                                           
                                       </div>
                                 </div>

                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Use the online premium calculator available on the insurer's website to determine the premium amount based on your chosen sum assured and investment preferences.
                                           </h3>
                                           <!-- <p class="whichUlipfundsAreBest-subDesc">
                                           Unlike traditional insurance plans, where the investment component is not transparent, unit-linked insurance plans offer complete transparency in terms of where your money is being invested. You have the freedom to track the investment performance and make changes to your fund allocation as your requirement. This level of control empowers you to optimize your returns and mitigate risks effectively. </p> -->
                                       </div>
                                 </div>
      
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Complete the online application form with personal details, contact information, and nominee details.
                                           </h3>

                                         </div>
                                 </div>
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle"> Choose the funds you want to invest in (equity, debt, balanced) based on your risk appetite.

                                           </h3>
                                         
                                       </div>
                                 </div>
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Upload required documents such as identity proof, address proof, and age proof and pay the premium amount online using available payment methods.

                                           </h3>
                                       </div>
                                 </div>
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">Complete the online verification process (if required by insurer), which may include a video KYC (Know Your Customer) procedure.


                                           </h3>
                                       </div>
                                 </div>
                                 <div class="whichUlipfundsAreBest-flex">
                                       <div class="wfa-icon"></div>
                                       <div>
                                           <h3 class="whichUlipfundsAreBest-subTitle">After verification and approval, the policy document will be issued and sent to your registered email address.



                                           </h3>
                                       </div>
                                 </div>
                                
      
      
      
      
      
                  </div>
          </section>

     


        <section class="hid" id="typesOfUlipCharge">
            <div class="midWrapper">
                <h2 class="typesOfUlipCharge-title">What are the Documents Required to Buy ULIPs?</h2>
                <p class="typesOfUlipCharge-desc mb-30">If you Are considering purchasing a ULIP, it Is essential to understand the documentation required to initiate the process. Here is a list of the commonly required documents:
                </p>
                <div class="typesOfUlipCharge-flex flex-new">
                    <div class="typesOfUlipCharge-card min-heigt-space">
                        <h3 class="typesOfUlipCharge-subTitle">1. Identity Proof</h3>
                                        <ul class="manageUlipFunds-list">
                                            <li>Aadhaar Card </li>
                                            <li>PAN Card</li>
                                            <li>Passport </li>
                                            <li>Voter ID Card</li>
                                            <li>Driving License</li>
                                         </ul>
                    </div>
                    <div class="typesOfUlipCharge-card min-heigt-space">
                        <h3 class="typesOfUlipCharge-subTitle">2. Address Proof </h3>
                                       <ul class="manageUlipFunds-list">
                                            <li>Aadhaar Card </li>
                                            <li>Passport </li>
                                            <li>Utility Bills (electricity, water, gas) not older than 3 months </li>
                                            <li>Bank Statement with a valid address not older than 3 months </li>
                                            <li>Voter ID Card</li>
                                              <li>Driving License</li>
                                              <li>Ration Card </li>
                                          </ul>
                    </div>
                    <div class="typesOfUlipCharge-card min-heigt-space">
                        <h3 class="typesOfUlipCharge-subTitle">3. Age Proof </h3>
                                       <ul class="manageUlipFunds-list">
                                            <li>Birth Certificate </li>
                                            <li>School or College Leaving Certificate   </li>
                                            <li>PAN Card  </li>
                                            <li>Passport  </li>
                                            <li>Aadhaar Card </li>
                                            <li>Voter ID Card</li>
                                              <li>Driving License</li>
                                             
                                          </ul>
                    </div>
                    <div class="typesOfUlipCharge-card min-heigt-space">
                        <h3 class="typesOfUlipCharge-subTitle"> 4. Income Proof (For Higher Sum Assured Plans) </h3>
                                       <ul class="manageUlipFunds-list">
                                            <li>Salary Slips (last 3-6 months)
                                            </li>
                                            <li>Income Tax Returns (ITR) for the past 2-3 years</li>
                                            <li>Bank Statements (last 6 months)
                                            </li>
                                            <li>Form 16 (for salaried individuals)
                                            </li>
                                          </ul>
                    </div>
                    <div class="typesOfUlipCharge-card min-heigt-space">
                        <h3 class="typesOfUlipCharge-subTitle">5. Photographs</h3>
                                        <ul class="manageUlipFunds-list">
                                            <li>Recent passport-sized photographs as specified by the insurer.

                                            </li>
                                            
                                          </ul>
                    </div>
                    <div class="typesOfUlipCharge-card min-heigt-space">
                        <h3 class="typesOfUlipCharge-subTitle">6. Bank Account Proof </h3>
                                          <ul class="manageUlipFunds-list">
                                            <li>Canceled cheque with your name printed on it</li>
                                            <li>Bank passbook or statement showing the account holder's name, account number, and bank details    </li>
                                            
                                          </ul>
                       
                    </div>
                   
                </div>
               
            </div>
        </section>
        <!-- <section class="ulip-docq docreq p0 hid hide" id="documentsRequiredForUlip">
            <div class="midWrapper">
                <h2 class="documentsRequiredForUlip-title">What are the Documents Required to Buy ULIPs?</h2>
                <p class="documentsRequiredForUlip-desc">Before purchasing a ULIP, the following documents must be kept handy -</p>
                <div class="roww mt20">
                    <div class="coll-40 align-self-center documentsRequiredForUlip-img"><img src="assets/images/ulip-plan/documentsRequired.svg" alt="Documents Required to buy Ulip" /></div>
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
        </section> -->
        <section class="hid" id="ulipVsMutualFunds">
            <div class="midWrapper">
                <h2 class="ulipVsMf-title">ULIP vs Mutual Funds(MF) vs Fixed Deposits(FD)</h2>
                <p class="ulipVsMf-desc">
                The popular choices often compared are Unit Linked Insurance Plans (ULIPs) and other traditional investment instruments. Let’s compare the features and benefits of ULIPs compared to mutual funds & fixed deposits. 
                </p>
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
                            <li class="ulipVsMf-ulipList">ULIP<span class="geen-tick"></span></li>
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
                <p class="ulipWealthCreation-desc">
                    When an individual invests in a ULIP, the insurance provider allocates units based on the prevailing Net Asset Value (NAV) of the fund. The NAV changes with the performance of the underlying assets, reflecting the fund's
                    growth.
                </p>
                <h3 class="ulipWealthCreation-subtitle">Benefits of ULIP for wealth creation</h3>
                <div class="ulipWealthCreation-flex">
                    <div class="ulipWealthCreation-card">
                        <div class="uwc-icon uwc1"></div>
                        <h3 class="ulipWealthCreation-subTitle">Diversification</h3>
                        <p class="ulipWealthCreation-subDesc">
                            ULIPs provide access to various asset classes, including equities, bonds, and money market instruments. This diversification reduces the risk associated with investing in a single asset class and enhances the
                            potential for higher returns.
                        </p>
                    </div>
                    <div class="ulipWealthCreation-card">
                        <div class="uwc-icon uwc2"></div>
                        <h3 class="ulipWealthCreation-subTitle">Flexibility</h3>
                        <p class="ulipWealthCreation-subDesc">
                        ULIPs provide the flexibility to switch between different funds based on market conditions and changing financial goals. For instance, during market volatility, one can switch from equity funds to debt funds to protect gains.

                        </p>
                    </div>
                    <div class="ulipWealthCreation-card">
                        <div class="uwc-icon uwc3"></div>
                        <h3 class="ulipWealthCreation-subTitle">Tax Benefits</h3>
                        <p class="ulipWealthCreation-subDesc">
                        ULIPs offer tax benefits under Section 80C of the Income Tax Act, allowing individuals to claim deductions on the premiums paid, up to a specified limit. Moreover, the maturity proceeds received on the policy are tax-free under Section 10(10D) of the Income Tax Act.
                        </p>
                    </div>
                    <div class="ulipWealthCreation-card">
                        <div class="uwc-icon uwc4"></div>
                        <h3 class="ulipWealthCreation-subTitle">Long-Term Wealth Accumulation</h3>
                        <p class="ulipWealthCreation-subDesc">
                            The<a href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-is-lock-in-period-in-ulip" class="inline-links">lock-in period of ULIPs</a>encourages long-term investing, which is a crucial element in
                            building substantial wealth. Staying invested for an extended period enables compounding to work its magic and generate significant returns.
                        </p>
                    </div>
                    <div class="ulipWealthCreation-card">
                        <div class="uwc-icon uwc5"></div>
                        <h3 class="ulipWealthCreation-subTitle">Life Insurance Coverage</h3>
                        <p class="ulipWealthCreation-subDesc">
                            Apart from being an investment vehicle, ULIPs also provide life insurance coverage, which ensures financial protection for the policyholder's family in case of any unfortunate eventuality.
                        </p>
                    </div>
                    <div class="ulipWealthCreation-staticCard">
                        <div class="ulipsprite-image moneybag"></div>
                        <!-- <svg id="Group_28651" data-name="Group 28651" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="214" height="163.588" viewBox="0 0 214 163.588">
                            <defs>
                                <clipPath id="clip-path"><rect id="Rectangle_20083" data-name="Rectangle 20083" width="214" height="163.588" fill="none" /></clipPath>
                                <clipPath id="clip-path-3"><rect id="Rectangle_19990" data-name="Rectangle 19990" width="214" height="8.346" fill="none" /></clipPath>
                                <clipPath id="clip-path-5"><rect id="Rectangle_19993" data-name="Rectangle 19993" width="18.355" height="18.5" fill="none" /></clipPath>
                                <clipPath id="clip-path-6"><rect id="Rectangle_19994" data-name="Rectangle 19994" width="12.508" height="20.307" fill="none" /></clipPath>
                                <clipPath id="clip-path-7"><rect id="Rectangle_19995" data-name="Rectangle 19995" width="37.802" height="64.928" fill="none" /></clipPath>
                                <clipPath id="clip-path-8"><rect id="Rectangle_19999" data-name="Rectangle 19999" width="34.935" height="11.91" fill="none" /></clipPath>
                                <clipPath id="clip-path-9"><rect id="Rectangle_19996" data-name="Rectangle 19996" width="5.788" height="11.468" fill="none" /></clipPath>
                                <clipPath id="clip-path-10"><rect id="Rectangle_19997" data-name="Rectangle 19997" width="2.995" height="6.528" fill="none" /></clipPath>
                                <clipPath id="clip-path-11"><rect id="Rectangle_19998" data-name="Rectangle 19998" width="4.685" height="11.91" fill="none" /></clipPath>
                                <clipPath id="clip-path-12"><rect id="Rectangle_20000" data-name="Rectangle 20000" width="8.655" height="10.189" fill="none" /></clipPath>
                                <clipPath id="clip-path-13"><rect id="Rectangle_20002" data-name="Rectangle 20002" width="6.686" height="3.827" fill="none" /></clipPath>
                                <clipPath id="clip-path-25"><rect id="Rectangle_20062" data-name="Rectangle 20062" width="6.687" height="3.827" fill="none" /></clipPath>
                                <clipPath id="clip-path-29"><rect id="Rectangle_20081" data-name="Rectangle 20081" width="17.026" height="17.161" fill="none" /></clipPath>
                            </defs>
                            <g id="Group_28650" data-name="Group 28650" clip-path="url(#clip-path)">
                                <g id="Group_28572" data-name="Group 28572" transform="translate(0 0)">
                                    <g id="Group_28571" data-name="Group 28571" clip-path="url(#clip-path)">
                                        <g id="Group_28570" data-name="Group 28570" transform="translate(0 155.242)" opacity="0.4" style="mix-blend-mode: multiply; isolation: isolate;">
                                            <g id="Group_28569" data-name="Group 28569">
                                                <g id="Group_28568" data-name="Group 28568" clip-path="url(#clip-path-3)">
                                                    <path
                                                        id="Path_84040"
                                                        data-name="Path 84040"
                                                        d="M214,1050.243c0,2.3-47.906,4.173-107,4.173s-107-1.868-107-4.173,47.906-4.173,107-4.173,107,1.869,107,4.173"
                                                        transform="translate(0 -1046.07)"
                                                        fill="#999"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <path id="Path_84041" data-name="Path 84041" d="M276.733,407.181l-18.028,22.034h8.68V505h18.7V429.215h8.68Z" transform="translate(-220.312 -346.753)" fill="#f54746" />
                                <path id="Path_84042" data-name="Path 84042" d="M148.577,651.3l-11.351,13.873h5.465v47.716h11.771V665.178h5.465Z" transform="translate(-116.861 -554.648)" fill="#f54746" />
                                <path id="Path_84043" data-name="Path 84043" d="M908.874,407.181,926.9,429.215h-8.68V505h-18.7V429.215h-8.68Z" transform="translate(-758.64 -346.753)" fill="#f54746" />
                                <path id="Path_84044" data-name="Path 84044" d="M1113.66,651.3l11.351,13.873h-5.465v47.716h-11.771V665.178h-5.465Z" transform="translate(-938.72 -554.648)" fill="#f54746" />
                                <g id="Group_28649" data-name="Group 28649" transform="translate(0 0)">
                                    <g id="Group_28648" data-name="Group 28648" clip-path="url(#clip-path)">
                                        <path
                                            id="Path_84045"
                                            data-name="Path 84045"
                                            d="M539.519,279.251h-9.785a17.768,17.768,0,0,1-17.768-17.768h9.785A17.768,17.768,0,0,1,539.519,279.251Z"
                                            transform="translate(-435.988 -222.678)"
                                            fill="#e69728"
                                        />
                                        <path
                                            id="Path_84046"
                                            data-name="Path 84046"
                                            d="M697.329,202.071h8.725A15.843,15.843,0,0,0,721.9,186.228h-8.725A15.843,15.843,0,0,0,697.329,202.071Z"
                                            transform="translate(-593.842 -158.591)"
                                            fill="#e69728"
                                        />
                                        <rect id="Rectangle_19992" data-name="Rectangle 19992" width="1.954" height="64.779" transform="translate(102.554 7.329)" fill="#e69728" />
                                        <path id="Path_84047" data-name="Path 84047" d="M637.723,12.744A12.643,12.643,0,1,1,625.081,0a12.693,12.693,0,0,1,12.643,12.743" transform="translate(-521.549 -0.001)" fill="#f9de59" />
                                        <path
                                            id="Path_84048"
                                            data-name="Path 84048"
                                            d="M647.416,24.575a10.64,10.64,0,0,1-10.6,10.681,10.48,10.48,0,0,1-5.617-1.624,10.159,10.159,0,0,1-1.073-.772,10.7,10.7,0,0,1,6.689-18.966,10.462,10.462,0,0,1,5.238,1.4,10.681,10.681,0,0,1,2.982,2.544,10.236,10.236,0,0,1,.766,1.081,10.6,10.6,0,0,1,1.285,3.021,10.734,10.734,0,0,1,.327,2.64"
                                            transform="translate(-533.288 -11.832)"
                                            fill="#e69728"
                                        />
                                        <g id="Group_28575" data-name="Group 28575" transform="translate(92.935 2.061)" opacity="0.8" style="mix-blend-mode: multiply; isolation: isolate;">
                                            <g id="Group_28574" data-name="Group 28574">
                                                <g id="Group_28573" data-name="Group 28573" clip-path="url(#clip-path-5)">
                                                    <path
                                                        id="Path_84049"
                                                        data-name="Path 84049"
                                                        d="M644.577,17.3a10.5,10.5,0,0,0-7.217-2.862A10.7,10.7,0,0,0,629.6,32.394a10.7,10.7,0,0,1,7.217-18.5,10.527,10.527,0,0,1,7.758,3.407"
                                                        transform="translate(-626.222 -13.893)"
                                                        fill="#f2ad00"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                        <path id="Path_84050" data-name="Path 84050" d="M548.381,450.641l.738.4a3.369,3.369,0,1,1-.738-.4" transform="translate(-465.971 -383.552)" fill="#fff" />
                                        <path id="Path_84051" data-name="Path 84051" d="M547.654,450.635a1.927,1.927,0,0,0,1.775.591l-.656-.356a1.94,1.94,0,0,0-1.118-.235" transform="translate(-466.379 -383.751)" />
                                        <path
                                            id="Path_84052"
                                            data-name="Path 84052"
                                            d="M503.873,699.4H470.5v.044H437.135c-2.707,0-4.433-3.642-4.433-7.38a11.277,11.277,0,0,1,.326-2.728,8.026,8.026,0,0,1,1.368-2.943,55.735,55.735,0,0,0,5.326-13.019,72.786,72.786,0,0,0,2.441-15.187c.611-10.919,5.084-20.2,11.388-23.627l31.073-.04,2.833,0c.147.08.295.164.44.25.1.058.194.117.29.177s.191.123.287.186q.214.143.426.295c.14.1.281.206.419.312q.276.214.548.445.135.115.269.234.2.179.4.365.131.125.261.253.261.257.513.527c.064.069.129.139.192.209q.156.172.308.348.123.143.245.289c.081.1.161.2.241.3h0c.065.082.13.164.195.248.029.036.057.073.085.109.05.065.1.132.151.2.108.144.214.29.319.438.045.063.089.126.133.19l.1.14c.041.06.083.121.123.182l.1.147c.057.086.115.174.171.262s.114.177.169.267q.238.381.467.776.1.179.2.36c.068.121.134.243.2.366s.131.247.2.371.129.25.192.378.126.254.188.383a35.352,35.352,0,0,1,2.625,7.736q.1.469.2.945a43.63,43.63,0,0,1,.737,5.941c.592,10.579,3.329,20.518,7.767,28.206,3.3,4.295,1.459,13.051-2.739,13.051"
                                            transform="translate(-368.487 -540.347)"
                                            fill="#036"
                                        />
                                        <g id="Group_28578" data-name="Group 28578" transform="translate(106.29 91.721)" opacity="0.5" style="mix-blend-mode: multiply; isolation: isolate;">
                                            <g id="Group_28577" data-name="Group 28577">
                                                <g id="Group_28576" data-name="Group 28576" clip-path="url(#clip-path-6)">
                                                    <path
                                                        id="Path_84053"
                                                        data-name="Path 84053"
                                                        d="M722.567,618.043l-1.375.974-.858-.427c-4.2,4.907-5.239,10.984-2.886,16.524a1.262,1.262,0,0,0,1.492.634.876.876,0,0,0,.66-1.165,14.019,14.019,0,0,1,2.066-14.354,20.174,20.174,0,0,1,4.4,16.733,1.183,1.183,0,0,0,.86,1.345,1.093,1.093,0,0,0,1.376-.834c1.383-6.7-.708-13.844-5.738-19.431"
                                                        transform="translate(-716.215 -618.043)"
                                                        fill="#1a1a1a"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_28581" data-name="Group 28581" transform="translate(102.017 94.164)" opacity="0.5" style="mix-blend-mode: multiply; isolation: isolate;">
                                            <g id="Group_28580" data-name="Group 28580">
                                                <g id="Group_28579" data-name="Group 28579" clip-path="url(#clip-path-7)">
                                                    <path
                                                        id="Path_84054"
                                                        data-name="Path 84054"
                                                        d="M720.792,699.4H687.423v.044c10.037-1.1,20.136-.9,25.368-3.38a14.727,14.727,0,0,1,2.38-.885c3.467-.961,4.411-8.247,1.39-12.182-4.437-7.688-7.175-17.627-7.767-28.206a39.022,39.022,0,0,0-3.56-14.622,24.293,24.293,0,0,0-3.692-5.649l2.833,0c.147.08.295.164.44.25.1.057.194.117.29.177s.192.123.287.186q.214.143.426.295c.14.1.281.2.419.312q.276.214.548.445c.09.077.18.154.269.234q.2.179.4.365c.087.083.175.167.261.253q.261.257.513.527.1.1.192.209.156.172.308.348c.082.1.164.191.245.289s.161.2.241.3h0c.065.082.13.164.195.248.029.036.057.073.085.109.05.065.1.132.151.2.108.144.214.29.319.438.045.063.089.126.133.19l.1.14c.041.06.083.121.123.182l.1.147c.057.086.115.174.171.262s.114.177.169.267q.238.381.467.776.1.179.2.36c.068.121.134.243.2.366s.131.247.2.371.129.25.192.378.126.254.188.383a35.346,35.346,0,0,1,2.625,7.736q.1.469.2.945a43.6,43.6,0,0,1,.737,5.941c.592,10.579,3.329,20.518,7.767,28.206,3.3,4.295,1.459,13.051-2.739,13.051"
                                                        transform="translate(-687.423 -634.512)"
                                                        fill="#1a1a1a"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                        <path
                                            id="Path_84055"
                                            data-name="Path 84055"
                                            d="M726.074,638.893h0a1.262,1.262,0,0,1-1.492-.634c-2.352-5.54-1.31-11.616,2.886-16.524l1.9.942c-3.822,4.47-4.771,10-2.629,15.05a.876.876,0,0,1-.66,1.165"
                                            transform="translate(-616 -529.467)"
                                            fill="#474747"
                                        />
                                        <path
                                            id="Path_84056"
                                            data-name="Path 84056"
                                            d="M726.074,638.893h0a1.262,1.262,0,0,1-1.492-.634c-2.352-5.54-1.31-11.616,2.886-16.524l1.9.942c-3.822,4.47-4.771,10-2.629,15.05a.876.876,0,0,1-.66,1.165"
                                            transform="translate(-616 -529.467)"
                                            fill="#f54746"
                                        />
                                        <path
                                            id="Path_84057"
                                            data-name="Path 84057"
                                            d="M760.619,638.307h0a1.093,1.093,0,0,0,1.376-.834c1.383-6.7-.708-13.844-5.738-19.431l-1.724,1.222a20.367,20.367,0,0,1,5.227,17.7,1.183,1.183,0,0,0,.86,1.345"
                                            transform="translate(-642.556 -526.323)"
                                            fill="#474747"
                                        />
                                        <path
                                            id="Path_84058"
                                            data-name="Path 84058"
                                            d="M760.619,638.307h0a1.093,1.093,0,0,0,1.376-.834c1.383-6.7-.708-13.844-5.738-19.431l-1.724,1.222a20.367,20.367,0,0,1,5.227,17.7,1.183,1.183,0,0,0,.86,1.345"
                                            transform="translate(-642.556 -526.323)"
                                            fill="#f54746"
                                        />
                                        <path
                                            id="Path_84059"
                                            data-name="Path 84059"
                                            d="M603.246,599.284H571a1.358,1.358,0,0,1-1.358-1.358v-.107A1.358,1.358,0,0,1,571,596.461h32.241a1.358,1.358,0,0,1,1.358,1.358v.107a1.358,1.358,0,0,1-1.358,1.358"
                                            transform="translate(-485.109 -507.943)"
                                            fill="#f54746"
                                        />
                                        <path
                                            id="Path_84060"
                                            data-name="Path 84060"
                                            d="M597.877,618.306H563.369a1.358,1.358,0,0,1-1.358-1.358v-.107a1.358,1.358,0,0,1,1.358-1.358h34.508a1.358,1.358,0,0,1,1.358,1.358v.107a1.358,1.358,0,0,1-1.358,1.358"
                                            transform="translate(-478.606 -524.142)"
                                            fill="#f54746"
                                        />
                                        <path
                                            id="Path_84061"
                                            data-name="Path 84061"
                                            d="M581.748,431.227l-8.086,19.363h-31.4l-6.73-19.013a2,2,0,0,1,1.626-2.648,1.956,1.956,0,0,1,1.205.23l.738.4.511.277a11.269,11.269,0,0,0,1.793.454c.331.057.661.1.992.127a11.651,11.651,0,0,0,6.36-1.272q.175-.09.351-.19c.047-.023.09-.05.134-.077a11.572,11.572,0,0,0,1.365-.928l.344-.274a11.668,11.668,0,0,1,14.2-.2,11.513,11.513,0,0,0,3.182,1.679c.1.037.2.07.307.1a11.541,11.541,0,0,0,3.482.538h.1a11.208,11.208,0,0,0,1.492-.11,11.568,11.568,0,0,0,3.071-.865s.007,0,.007,0a3.273,3.273,0,0,1,1.322-.277l1.2,0a2,2,0,0,1,2.551,1.419,1.971,1.971,0,0,1-.107,1.265"
                                            transform="translate(-455.952 -362.073)"
                                            fill="#036"
                                        />
                                        <g id="Group_28593" data-name="Group 28593" transform="translate(84.461 76.608)" opacity="0.5" style="mix-blend-mode: multiply; isolation: isolate;">
                                            <g id="Group_28592" data-name="Group 28592">
                                                <g id="Group_28591" data-name="Group 28591" clip-path="url(#clip-path-8)">
                                                    <g id="Group_28584" data-name="Group 28584" transform="translate(0 0.441)" opacity="0.5" style="mix-blend-mode: multiply; isolation: isolate;">
                                                        <g id="Group_28583" data-name="Group 28583">
                                                            <g id="Group_28582" data-name="Group 28582" clip-path="url(#clip-path-9)">
                                                                <path id="Path_84062" data-name="Path 84062" d="M572.942,530.651l-3.814-11.468,5.787,11.468Z" transform="translate(-569.128 -519.183)" fill="#1a1a1a" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="Group_28587" data-name="Group 28587" transform="translate(28.058 5.381)" opacity="0.5" style="mix-blend-mode: multiply; isolation: isolate;">
                                                        <g id="Group_28586" data-name="Group 28586">
                                                            <g id="Group_28585" data-name="Group 28585" clip-path="url(#clip-path-10)">
                                                                <path id="Path_84063" data-name="Path 84063" d="M758.192,559l3-6.528L759.668,559Z" transform="translate(-758.192 -552.472)" fill="#1a1a1a" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="Group_28590" data-name="Group 28590" transform="translate(30.25)" opacity="0.5" style="mix-blend-mode: multiply; isolation: isolate;">
                                                        <g id="Group_28589" data-name="Group 28589">
                                                            <g id="Group_28588" data-name="Group 28588" clip-path="url(#clip-path-11)">
                                                                <path id="Path_84064" data-name="Path 84064" d="M772.961,528.12l4.685-11.909-2.941,11.909Z" transform="translate(-772.961 -516.211)" fill="#1a1a1a" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_28596" data-name="Group 28596" transform="translate(81.594 94.164)" opacity="0.5" style="mix-blend-mode: multiply; isolation: isolate;">
                                            <g id="Group_28595" data-name="Group 28595">
                                                <g id="Group_28594" data-name="Group 28594" clip-path="url(#clip-path-12)">
                                                    <path id="Path_84065" data-name="Path 84065" d="M555.863,634.505l-6.055,10.189,8.655-10.189Z" transform="translate(-549.809 -634.505)" fill="#1a1a1a" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20001" data-name="Rectangle 20001" width="24.746" height="3.827" transform="translate(52.375 128.299)" fill="#f2d351" />
                                        <g id="Group_28599" data-name="Group 28599" transform="translate(52.417 128.299)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28598" data-name="Group 28598">
                                                <g id="Group_28597" data-name="Group 28597" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84066" data-name="Path 84066" d="M356.466,864.52H353.2v3.827h6.686V864.52Z" transform="translate(-353.201 -864.52)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20003" data-name="Rectangle 20003" width="3.449" height="3.827" transform="translate(72.103 128.299)" fill="#e8a628" />
                                        <rect id="Rectangle_20004" data-name="Rectangle 20004" width="1.579" height="3.827" transform="translate(75.524 128.299)" fill="#e8a628" />
                                        <rect id="Rectangle_20005" data-name="Rectangle 20005" width="24.746" height="0.37" transform="translate(52.375 131.755)" fill="#e58e28" />
                                        <rect id="Rectangle_20006" data-name="Rectangle 20006" width="24.746" height="3.827" transform="translate(49.592 132.151)" fill="#f2d351" />
                                        <g id="Group_28602" data-name="Group 28602" transform="translate(49.634 132.151)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28601" data-name="Group 28601">
                                                <g id="Group_28600" data-name="Group 28600" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84067" data-name="Path 84067" d="M337.718,890.478h-3.265v3.827h6.686v-3.827Z" transform="translate(-334.453 -890.478)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20008" data-name="Rectangle 20008" width="3.449" height="3.827" transform="translate(69.32 132.151)" fill="#e8a628" />
                                        <rect id="Rectangle_20009" data-name="Rectangle 20009" width="1.579" height="3.827" transform="translate(72.741 132.151)" fill="#e8a628" />
                                        <rect id="Rectangle_20010" data-name="Rectangle 20010" width="24.746" height="0.37" transform="translate(49.592 135.608)" fill="#e58e28" />
                                        <rect id="Rectangle_20011" data-name="Rectangle 20011" width="24.746" height="3.827" transform="translate(52.375 136.004)" fill="#f2d351" />
                                        <g id="Group_28605" data-name="Group 28605" transform="translate(52.417 136.004)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28604" data-name="Group 28604">
                                                <g id="Group_28603" data-name="Group 28603" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84068" data-name="Path 84068" d="M356.466,916.437H353.2v3.827h6.686v-3.827Z" transform="translate(-353.201 -916.437)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20013" data-name="Rectangle 20013" width="3.449" height="3.827" transform="translate(72.103 136.004)" fill="#e8a628" />
                                        <rect id="Rectangle_20014" data-name="Rectangle 20014" width="1.579" height="3.827" transform="translate(75.524 136.004)" fill="#e8a628" />
                                        <rect id="Rectangle_20015" data-name="Rectangle 20015" width="24.746" height="0.37" transform="translate(52.375 139.46)" fill="#e58e28" />
                                        <rect id="Rectangle_20016" data-name="Rectangle 20016" width="24.746" height="3.827" transform="translate(49.592 139.856)" fill="#f2d351" />
                                        <g id="Group_28608" data-name="Group 28608" transform="translate(49.634 139.856)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28607" data-name="Group 28607">
                                                <g id="Group_28606" data-name="Group 28606" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84069" data-name="Path 84069" d="M337.718,942.4h-3.265v3.827h6.686V942.4Z" transform="translate(-334.453 -942.396)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20018" data-name="Rectangle 20018" width="3.449" height="3.827" transform="translate(69.32 139.856)" fill="#e8a628" />
                                        <rect id="Rectangle_20019" data-name="Rectangle 20019" width="1.579" height="3.827" transform="translate(72.741 139.856)" fill="#e8a628" />
                                        <rect id="Rectangle_20020" data-name="Rectangle 20020" width="24.746" height="0.37" transform="translate(49.592 143.313)" fill="#e58e28" />
                                        <rect id="Rectangle_20021" data-name="Rectangle 20021" width="24.746" height="3.827" transform="translate(52.375 143.708)" fill="#f2d351" />
                                        <g id="Group_28611" data-name="Group 28611" transform="translate(52.417 143.708)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28610" data-name="Group 28610">
                                                <g id="Group_28609" data-name="Group 28609" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84070" data-name="Path 84070" d="M356.466,968.355H353.2v3.827h6.686v-3.827Z" transform="translate(-353.201 -968.355)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20023" data-name="Rectangle 20023" width="3.449" height="3.827" transform="translate(72.103 143.708)" fill="#e8a628" />
                                        <rect id="Rectangle_20024" data-name="Rectangle 20024" width="1.579" height="3.827" transform="translate(75.524 143.708)" fill="#e8a628" />
                                        <rect id="Rectangle_20025" data-name="Rectangle 20025" width="24.746" height="0.37" transform="translate(52.375 147.165)" fill="#e58e28" />
                                        <rect id="Rectangle_20026" data-name="Rectangle 20026" width="24.746" height="3.827" transform="translate(49.592 147.561)" fill="#f2d351" />
                                        <g id="Group_28614" data-name="Group 28614" transform="translate(49.634 147.561)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28613" data-name="Group 28613">
                                                <g id="Group_28612" data-name="Group 28612" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84071" data-name="Path 84071" d="M337.718,994.313h-3.265v3.827h6.686v-3.827Z" transform="translate(-334.453 -994.313)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20028" data-name="Rectangle 20028" width="3.449" height="3.827" transform="translate(69.32 147.561)" fill="#e8a628" />
                                        <rect id="Rectangle_20029" data-name="Rectangle 20029" width="1.579" height="3.827" transform="translate(72.741 147.561)" fill="#e8a628" />
                                        <rect id="Rectangle_20030" data-name="Rectangle 20030" width="24.746" height="0.37" transform="translate(49.592 151.018)" fill="#e58e28" />
                                        <rect id="Rectangle_20031" data-name="Rectangle 20031" width="24.746" height="3.827" transform="translate(52.375 151.413)" fill="#f2d351" />
                                        <g id="Group_28617" data-name="Group 28617" transform="translate(52.417 151.413)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28616" data-name="Group 28616">
                                                <g id="Group_28615" data-name="Group 28615" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84072" data-name="Path 84072" d="M356.466,1020.272H353.2v3.827h6.686v-3.827Z" transform="translate(-353.201 -1020.272)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20033" data-name="Rectangle 20033" width="3.449" height="3.827" transform="translate(72.103 151.413)" fill="#e8a628" />
                                        <rect id="Rectangle_20034" data-name="Rectangle 20034" width="1.579" height="3.827" transform="translate(75.524 151.413)" fill="#e8a628" />
                                        <rect id="Rectangle_20035" data-name="Rectangle 20035" width="24.746" height="0.37" transform="translate(52.375 154.87)" fill="#e58e28" />
                                        <rect id="Rectangle_20036" data-name="Rectangle 20036" width="24.746" height="3.827" transform="translate(49.592 155.266)" fill="#f2d351" />
                                        <g id="Group_28620" data-name="Group 28620" transform="translate(49.634 155.266)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28619" data-name="Group 28619">
                                                <g id="Group_28618" data-name="Group 28618" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84073" data-name="Path 84073" d="M337.718,1046.231h-3.265v3.827h6.686v-3.827Z" transform="translate(-334.453 -1046.231)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20038" data-name="Rectangle 20038" width="3.449" height="3.827" transform="translate(69.32 155.266)" fill="#e8a628" />
                                        <rect id="Rectangle_20039" data-name="Rectangle 20039" width="1.579" height="3.827" transform="translate(72.741 155.266)" fill="#e8a628" />
                                        <rect id="Rectangle_20040" data-name="Rectangle 20040" width="24.746" height="0.37" transform="translate(49.592 158.722)" fill="#e58e28" />
                                        <rect id="Rectangle_20041" data-name="Rectangle 20041" width="24.746" height="3.827" transform="translate(24.999 143.708)" fill="#f2d351" />
                                        <g id="Group_28623" data-name="Group 28623" transform="translate(25.041 143.708)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28622" data-name="Group 28622">
                                                <g id="Group_28621" data-name="Group 28621" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84074" data-name="Path 84074" d="M172,968.355h-3.265v3.827h6.686v-3.827Z" transform="translate(-168.733 -968.355)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20043" data-name="Rectangle 20043" width="3.449" height="3.827" transform="translate(44.727 143.708)" fill="#e8a628" />
                                        <rect id="Rectangle_20044" data-name="Rectangle 20044" width="1.579" height="3.827" transform="translate(48.148 143.708)" fill="#e8a628" />
                                        <rect id="Rectangle_20045" data-name="Rectangle 20045" width="24.746" height="0.37" transform="translate(24.999 147.165)" fill="#e58e28" />
                                        <rect id="Rectangle_20046" data-name="Rectangle 20046" width="24.746" height="3.827" transform="translate(22.216 147.561)" fill="#f2d351" />
                                        <g id="Group_28626" data-name="Group 28626" transform="translate(22.258 147.561)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28625" data-name="Group 28625">
                                                <g id="Group_28624" data-name="Group 28624" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84075" data-name="Path 84075" d="M153.25,994.313h-3.265v3.827h6.686v-3.827Z" transform="translate(-149.985 -994.313)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20048" data-name="Rectangle 20048" width="3.449" height="3.827" transform="translate(41.944 147.561)" fill="#e8a628" />
                                        <rect id="Rectangle_20049" data-name="Rectangle 20049" width="1.579" height="3.827" transform="translate(45.365 147.561)" fill="#e8a628" />
                                        <rect id="Rectangle_20050" data-name="Rectangle 20050" width="24.746" height="0.37" transform="translate(22.216 151.018)" fill="#e58e28" />
                                        <rect id="Rectangle_20051" data-name="Rectangle 20051" width="24.746" height="3.827" transform="translate(24.999 151.413)" fill="#f2d351" />
                                        <g id="Group_28629" data-name="Group 28629" transform="translate(25.041 151.413)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28628" data-name="Group 28628">
                                                <g id="Group_28627" data-name="Group 28627" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84076" data-name="Path 84076" d="M172,1020.272h-3.265v3.827h6.686v-3.827Z" transform="translate(-168.733 -1020.272)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20053" data-name="Rectangle 20053" width="3.449" height="3.827" transform="translate(44.727 151.413)" fill="#e8a628" />
                                        <rect id="Rectangle_20054" data-name="Rectangle 20054" width="1.579" height="3.827" transform="translate(48.148 151.413)" fill="#e8a628" />
                                        <rect id="Rectangle_20055" data-name="Rectangle 20055" width="24.746" height="0.37" transform="translate(24.999 154.87)" fill="#e58e28" />
                                        <rect id="Rectangle_20056" data-name="Rectangle 20056" width="24.746" height="3.827" transform="translate(22.216 155.266)" fill="#f2d351" />
                                        <g id="Group_28632" data-name="Group 28632" transform="translate(22.258 155.266)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28631" data-name="Group 28631">
                                                <g id="Group_28630" data-name="Group 28630" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84077" data-name="Path 84077" d="M153.25,1046.231h-3.265v3.827h6.686v-3.827Z" transform="translate(-149.985 -1046.231)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20058" data-name="Rectangle 20058" width="3.449" height="3.827" transform="translate(41.944 155.266)" fill="#e8a628" />
                                        <rect id="Rectangle_20059" data-name="Rectangle 20059" width="1.579" height="3.827" transform="translate(45.365 155.266)" fill="#e8a628" />
                                        <rect id="Rectangle_20060" data-name="Rectangle 20060" width="24.746" height="0.37" transform="translate(22.216 158.722)" fill="#e58e28" />
                                        <rect id="Rectangle_20061" data-name="Rectangle 20061" width="24.746" height="3.827" transform="translate(168.89 143.708)" fill="#f2d351" />
                                        <g id="Group_28635" data-name="Group 28635" transform="translate(168.931 143.708)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28634" data-name="Group 28634">
                                                <g id="Group_28633" data-name="Group 28633" clip-path="url(#clip-path-25)">
                                                    <path id="Path_84078" data-name="Path 84078" d="M1141.579,968.355h-3.265v3.827H1145v-3.827Z" transform="translate(-1138.314 -968.355)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20063" data-name="Rectangle 20063" width="3.449" height="3.827" transform="translate(188.617 143.708)" fill="#e8a628" />
                                        <rect id="Rectangle_20064" data-name="Rectangle 20064" width="1.579" height="3.827" transform="translate(192.039 143.708)" fill="#e8a628" />
                                        <rect id="Rectangle_20065" data-name="Rectangle 20065" width="24.746" height="0.37" transform="translate(168.89 147.165)" fill="#e58e28" />
                                        <rect id="Rectangle_20066" data-name="Rectangle 20066" width="24.746" height="3.827" transform="translate(166.107 147.561)" fill="#f2d351" />
                                        <g id="Group_28638" data-name="Group 28638" transform="translate(166.15 147.561)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28637" data-name="Group 28637">
                                                <g id="Group_28636" data-name="Group 28636" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84079" data-name="Path 84079" d="M1122.832,994.313h-3.265v3.827h6.686v-3.827Z" transform="translate(-1119.567 -994.313)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20068" data-name="Rectangle 20068" width="3.449" height="3.827" transform="translate(185.835 147.561)" fill="#e8a628" />
                                        <rect id="Rectangle_20069" data-name="Rectangle 20069" width="1.579" height="3.827" transform="translate(189.256 147.561)" fill="#e8a628" />
                                        <rect id="Rectangle_20070" data-name="Rectangle 20070" width="24.746" height="0.37" transform="translate(166.107 151.018)" fill="#e58e28" />
                                        <rect id="Rectangle_20071" data-name="Rectangle 20071" width="24.746" height="3.827" transform="translate(168.89 151.413)" fill="#f2d351" />
                                        <g id="Group_28641" data-name="Group 28641" transform="translate(168.931 151.413)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28640" data-name="Group 28640">
                                                <g id="Group_28639" data-name="Group 28639" clip-path="url(#clip-path-25)">
                                                    <path id="Path_84080" data-name="Path 84080" d="M1141.579,1020.272h-3.265v3.827H1145v-3.827Z" transform="translate(-1138.314 -1020.272)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20073" data-name="Rectangle 20073" width="3.449" height="3.827" transform="translate(188.617 151.413)" fill="#e8a628" />
                                        <rect id="Rectangle_20074" data-name="Rectangle 20074" width="1.579" height="3.827" transform="translate(192.039 151.413)" fill="#e8a628" />
                                        <rect id="Rectangle_20075" data-name="Rectangle 20075" width="24.746" height="0.37" transform="translate(168.89 154.87)" fill="#e58e28" />
                                        <rect id="Rectangle_20076" data-name="Rectangle 20076" width="24.746" height="3.827" transform="translate(166.107 155.266)" fill="#f2d351" />
                                        <g id="Group_28644" data-name="Group 28644" transform="translate(166.15 155.266)" opacity="0.4" style="mix-blend-mode: screen; isolation: isolate;">
                                            <g id="Group_28643" data-name="Group 28643">
                                                <g id="Group_28642" data-name="Group 28642" clip-path="url(#clip-path-13)">
                                                    <path id="Path_84081" data-name="Path 84081" d="M1122.832,1046.231h-3.265v3.827h6.686v-3.827Z" transform="translate(-1119.567 -1046.231)" fill="#f2d351" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_20078" data-name="Rectangle 20078" width="3.449" height="3.827" transform="translate(185.835 155.266)" fill="#e8a628" />
                                        <rect id="Rectangle_20079" data-name="Rectangle 20079" width="1.579" height="3.827" transform="translate(189.256 155.266)" fill="#e8a628" />
                                        <rect id="Rectangle_20080" data-name="Rectangle 20080" width="24.746" height="0.37" transform="translate(166.107 158.722)" fill="#e58e28" />
                                        <path id="Path_84082" data-name="Path 84082" d="M384.468,715.949a11.728,11.728,0,1,1-11.728-11.82,11.774,11.774,0,0,1,11.728,11.82" transform="translate(-307.437 -599.633)" fill="#f9de59" />
                                        <path
                                            id="Path_84083"
                                            data-name="Path 84083"
                                            d="M393.459,726.924a9.87,9.87,0,0,1-9.83,9.908,9.719,9.719,0,0,1-5.21-1.506,9.391,9.391,0,0,1-1-.716,9.925,9.925,0,0,1,6.2-17.593,9.7,9.7,0,0,1,4.859,1.294,9.911,9.911,0,0,1,2.767,2.36,9.489,9.489,0,0,1,.71,1,9.836,9.836,0,0,1,1.192,2.8,9.96,9.96,0,0,1,.3,2.449"
                                            transform="translate(-318.325 -610.607)"
                                            fill="#e69728"
                                        />
                                        <g id="Group_28647" data-name="Group 28647" transform="translate(55.474 106.409)" opacity="0.8" style="mix-blend-mode: multiply; isolation: isolate;">
                                            <g id="Group_28646" data-name="Group 28646">
                                                <g id="Group_28645" data-name="Group 28645" clip-path="url(#clip-path-29)">
                                                    <path
                                                        id="Path_84084"
                                                        data-name="Path 84084"
                                                        d="M390.825,720.176a9.738,9.738,0,0,0-6.695-2.655,9.923,9.923,0,0,0-7.2,16.655,9.923,9.923,0,0,1,6.695-17.161,9.765,9.765,0,0,1,7.2,3.16"
                                                        transform="translate(-373.799 -717.016)"
                                                        fill="#f2ad00"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                        <path
                                            id="Path_84085"
                                            data-name="Path 84085"
                                            d="M344.716,662.917h0c-.458-1.947-.829-2.318-2.776-2.776h0c1.947-.458,2.318-.829,2.776-2.776h0c.458,1.947.829,2.318,2.776,2.776h0c-1.947.458-2.318.829-2.776,2.776"
                                            transform="translate(-291.194 -559.809)"
                                            fill="#f2f2f2"
                                        />
                                        <path
                                            id="Path_84086"
                                            data-name="Path 84086"
                                            d="M383.795,678.232h0c-.458-1.947-.829-2.318-2.776-2.776h0c1.947-.458,2.318-.829,2.776-2.776h0c.458,1.947.829,2.318,2.776,2.776h0c-1.947.458-2.318.829-2.776,2.776"
                                            transform="translate(-324.474 -572.851)"
                                            fill="#f2f2f2"
                                        />
                                        <path
                                            id="Path_84087"
                                            data-name="Path 84087"
                                            d="M362.369,696.416h0c-.284-1.209-.515-1.44-1.724-1.724h0c1.209-.284,1.44-.515,1.724-1.724h0c.285,1.209.515,1.44,1.724,1.724h0c-1.209.285-1.44.515-1.724,1.724"
                                            transform="translate(-307.123 -590.128)"
                                            fill="#f2f2f2"
                                        />
                                        <path
                                            id="Path_84088"
                                            data-name="Path 84088"
                                            d="M1165.311,943.857h0c-.29-1.234-.526-1.469-1.76-1.76h0c1.234-.29,1.469-.526,1.76-1.76h0c.29,1.234.526,1.469,1.76,1.76h0c-1.234.29-1.469.526-1.76,1.76"
                                            transform="translate(-990.874 -800.787)"
                                            fill="#f2f2f2"
                                        />
                                        <path
                                            id="Path_84089"
                                            data-name="Path 84089"
                                            d="M1190.083,953.565h0c-.29-1.234-.526-1.469-1.76-1.76h0c1.234-.29,1.469-.526,1.76-1.76h0c.29,1.234.526,1.469,1.76,1.76h0c-1.234.29-1.469.526-1.76,1.76"
                                            transform="translate(-1011.97 -809.055)"
                                            fill="#f2f2f2"
                                        />
                                        <path
                                            id="Path_84090"
                                            data-name="Path 84090"
                                            d="M1176.5,965.094h0c-.18-.767-.327-.913-1.093-1.093h0c.766-.18.913-.326,1.093-1.093h0c.18.766.326.913,1.093,1.093h0c-.766.18-.913.326-1.093,1.093"
                                            transform="translate(-1000.972 -820.008)"
                                            fill="#f2f2f2"
                                        />
                                    </g>
                                </g>
                            </g>
                        </svg> -->
                        <div class="ulipWealthCreation-cta">
                            <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=growwealth">Start Growing Your Wealth Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid" id="claimTaxBenefits">
            <div class="greyBg">
                <div class="midWrapper">
                    <h2 class="claimTaxBenefits-title">How to Claim Tax Benefits on ULIPs?</h2>
                    <p class="claimTaxBenefits-desc">
                        Offering a unique combination of investment and insurance, ULIPs provide policyholders with the opportunity to grow their wealth while ensuring financial protection. One of the key advantages of ULIPs is the tax
                        benefits they offer.
                    </p>
                    <div class="claimTaxBenefits-flex">
                        <div class="fund-tick"></div>
                        <div>
                            <h3 class="claimTaxBenefits-subTitle">Deduction Under Section 80C</h3>
                            <p class="claimTaxBenefits-subDesc">
                                ULIP premiums are eligible for a tax deduction under<a class="inline-links" href="https://www.kotaklife.com/insurance-guide/savingstax/income-tax-deductions-list">Section 80C</a>of the Income Tax Act 1961. As
                                per the current tax laws, the maximum deduction allowed under this section is ₹1.5 lakh per financial year. However, it is important to note that the deduction applies to the premium paid and not to the
                                entire amount invested in the ULIP.
                            </p>
                        </div>
                    </div>
                    <div class="claimTaxBenefits-flex">
                        <div class="fund-tick"></div>
                        <div>
                            <h3 class="claimTaxBenefits-subTitle">Tax-Exempt Maturity</h3>
                            <p class="claimTaxBenefits-subDesc">
                                One of the significant advantages of ULIPs is that the maturity proceeds, including the investment gains, are tax-exempt under Section 10(10D) of the Income Tax Act, subject to certain conditions. To avail of
                                this benefit, the annual premium should not exceed 10% of the sum assured. If the premium exceeds this limit, the tax benefit may not be available.
                            </p>
                        </div>
                    </div>
                    <div class="claimTaxBenefits-flex">
                        <div class="fund-tick"></div>
                        <div>
                            <h3 class="claimTaxBenefits-subTitle">Switching of Funds</h3>
                            <p class="claimTaxBenefits-subDesc">
                                ULIPs provide the flexibility to switch between different funds based on market conditions or investment preferences. The best part is that these switches do not attract any tax liability. You can optimize
                                your investment by taking advantage of market movements without incurring tax consequences.
                            </p>
                        </div>
                    </div>
                    <div class="claimTaxBenefits-flex">
                        <div class="fund-tick"></div>
                        <div>
                            <h3 class="claimTaxBenefits-subTitle">Partial Withdrawals</h3>
                            <p class="claimTaxBenefits-subDesc">
                                ULIPs also allow policyholders to make partial withdrawals from their investments, subject to certain terms and conditions. The amount withdrawn is tax-free, provided it does not exceed 20% of the fund value.
                                Any amount above this limit may attract tax liabilities.
                            </p>
                        </div>
                    </div>
                    <div class="claimTaxBenefits-flex">
                        <div class="fund-tick"></div>
                        <div>
                            <h3 class="claimTaxBenefits-subTitle">Continuity of Tax Benefits</h3>
                            <p class="claimTaxBenefits-subDesc">
                            It is crucial to maintain the policy for a minimum period to avail of the tax benefits. If the policy is discontinued within five years from the starting date, the tax benefits already claimed will be added to your taxable income in the year of discontinuation.
                            </p>
                        </div>
                    </div>
                    <div class="claimTaxBenefits-cta">
                        <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=claimtax">Start Saving on Taxes Today</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="hid space" id="mythsOfUlip">
            <div class="midWrapper">
                <h2 class="mythsOfUlip-title">Myths About Investing in ULIPs</h2>
                <p class="mythsOfUlip-desc">
                ULIPs have long been a topic of debate in the world of investments. While some investors hail them as a flexible and efficient investment avenue, others harbor skepticism and believe in several myths associated with ULIPs.
                </p>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 1: ULIPs are Expensive</h3>
                    <p class="mythsOfUlip-subDesc">
                        One of the most common misconceptions about ULIPs is that they are expensive. ULIPs do have charges associated with them. Many other investment options also involve charges, such as mutual funds or
                        <a class="inline-links" href="https://www.kotaklife.com/ulip-plans/importance-of-portfolio-management">portfolio management</a>services.
                    </p>
                </div>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 2: ULIPs Have Poor Returns</h3>
                    <p class="mythsOfUlip-subDesc">
                        Another myth surrounding ULIPs is that they offer poor returns compared to other investment options, such as mutual funds or direct equity. The returns from a ULIP depend on several factors, including your investment
                        horizon, the chosen fund options, and the insurer's track record.
                    </p>
                </div>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 3: ULIPs Lack Transparency</h3>
                    <p class="mythsOfUlip-subDesc">
                        Some investors believe that ULIPs lack transparency, making it difficult to understand where their money is being invested. However, ULIPs are regulated by the IRDAI, which ensures that the insurance companies
                        disclose all relevant information related to the plan.
                    </p>
                </div>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 4: ULIPs Have a Long Lock-in Period</h3>
                    <p class="mythsOfUlip-subDesc">
                        It is true that ULIPs have a minimum lock-in period of five years as per IRDAI regulations, this duration also provides investors with the opportunity to benefit from the power of compounding over the long term.
                    </p>
                </div>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 5: ULIPs are Only for Life Insurance</h3>
                    <p class="mythsOfUlip-subDesc">
                        While ULIPs do provide life insurance coverage, they also serve as investment vehicles. They offer a dual benefit of insurance protection and potential wealth creation through market-linked returns.
                    </p>
                </div>
                <div class="mt20">
                    <h3 class="mythsOfUlip-subTitle">Myth 6:ULIPs are Risky </h3>
                    <p class="mythsOfUlip-subDesc">
                    One of the common myths surrounding ULIPs is that they are inherently risky investment products. While it's true that ULIPs carry investment risk associated with market fluctuations, the level of risk depends on the fund option chosen by the investor. Equity-based ULIPs may exhibit higher volatility due to their exposure to the stock market, but they also offer the potential for higher returns over the long term. On the other hand, debt-based ULIPs provide stability and capital preservation, making them suitable for conservative investors. By diversifying across different fund options and staying invested for the long term, investors can manage risk effectively and maximize the potential returns from ULIPs.
                    </p>
                </div>
            </div>
        </section>
        <section class="hid" class="what-policy-period how-buy-cat" id="ulip-faqs">
            <div class="midWrapper">
                <h2 class="mb-20 term-tags fnt-24">Unit Linked Insurance Plans (ULIP) FAQs</h2>
                <div class="accordion-div accordion-btns accordion-btns-gsp mt-mob-15">
                    <div class="bor">
                        <div class="accordion bor-top-zero" role="heading" aria-level="3">
                            <span>1.</span>
                            <h3>Which is the best ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <p>Determining the best ULIP (Unit Linked Insurance Plan) depends on various factors, such as your investment goals, risk tolerance, and financial needs. It is important to compare different ULIP offerings, considering factors like fund performance, charges, flexibility, and customer service.</p>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>2.</span>
                            <h3>Is ULIP better than Mutual Funds? </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                ULIPs offer both insurance coverage and investment components, while Mutual Funds are purely investment vehicles. ULIPs provide life insurance protection along with potential market-linked returns, but they may have higher charges. Mutual Funds, on the other hand, focus solely on investments and typically have lower charges.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>3.</span>
                            <h3>Are ULIPs a good investment?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                ULIPs can be a good investment option for individuals who want a combination of insurance coverage and investment growth potential. They offer the opportunity to participate in the market while providing life insurance protection. ULIPs also offer flexibility in choosing investment funds based on risk appetite and investment goals.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>4.</span>
                            <h3>Are ULIPs suitable for the long term?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                ULIPs are designed for long-term investment horizons. They typically have a lock-in period of five years, during which it is advisable to stay invested to maximize potential returns. ULIPs offer the benefit of compounding returns over time, allowing your investments to grow. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>5.</span>
                            <h3>Can I cancel/surrender my ULIP plan?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                Yes, it is possible to cancel or surrender a ULIP plan before the completion of the lock-in period. However, surrendering a ULIP before the lock-in period may result in charges and penalties, which can significantly impact the surrender value. After the completion of the lock-in period, you can surrender the ULIP without incurring any charges.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>6.</span>
                            <h3>When can I withdraw ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                You can withdraw from a ULIP plan after the completion of the lock-in period, which is usually five years from the date of purchase. Once the lock-in period is over, you have the option to make partial withdrawals or fully surrender the ULIP without any charges or penalties.                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>7.</span>
                            <h3>What is the expiry date of the lock-in period? </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                The lock-in period for a ULIP plan is typically five years from the date of purchase. After the completion of the lock-in period, you have the flexibility to withdraw funds partially or fully without incurring any charges or penalties.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>8.</span>
                            <h3>What are the charges in ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                ULIPs have various charges associated with them. Some common charges include:
                                <ul class="listdisc">
                                    <li>Premium allocation charges  </li>
                                    <li>Policy administration charges </li>
                                    <li>Mortality charges</li>
                                    <li>Fund management charges</li>
                                    <li>Surrender charges</li>
                                </ul>

                                </p>
                                <p>                                It is important to carefully review the policy documents to understand the specific charges applicable to your ULIP plan, as they can vary between insurance providers and policies.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>9.</span>
                            <h3>How is the fund value calculated in ULIP? </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                The NAV is calculated by dividing the total net assets of the fund by the number of units outstanding. The fund value of your ULIP plan is determined by multiplying the number of units held in each fund with the respective NAV of those units.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>10.</span>
                            <h3>What is ULIP interest rate?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                ULIP stands for Unit Linked Insurance Plan. It is a type of insurance product that combines life insurance coverage with investment options. ULIPs do not offer a fixed interest rate like traditional savings accounts or fixed deposits. The returns on a ULIP are linked to the performance of these investment funds, which can fluctuate based on market conditions. 

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>11.</span>
                            <h3>What is the advantage of ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                ULIPs offer several advantages that make them a popular choice for individuals seeking both insurance coverage and investment opportunities:
                                    <ul class="listdisc">
                                    <li>Dual Benefit</li>
                                    <li>Flexibility</li>
                                    <li>Tax Benefits</li>
                                    <li>Long-Term Wealth Creation</li>
                                    <li>SPartial Withdrawals</li>
                                    <li>Transparency</li>
                                </ul>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>12.</span>
                            <h3>How Can I Reduce Risk on my ULIP Investment?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                You can reduce risk on your ULIP investment by considering the following strategies:
                                <ul class="listdisc">
                                    <li>Diversify your funds</li>
                                    <li>Regularly review and rebalance your portfolio
                                    </li>
                                    <li>Opt for a balanced or conservative investment strategy
                                    </li>
                                    <li>Stay invested for the long term
                                    </li>
                                    <li>Seek advice from a financial advisor
                                    </li>
                                    
                                </ul>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>13.</span>
                            <h3>How is ULIP different from Traditional Plans? </h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                A: ULIPs (Unit Linked Insurance Plans) and Traditional Plans differ in various aspects:
                                    <ul class="listdisc">
                                    <li>Insurance and investment components</li>
                                    <li>Transparency and flexibility

                                    </li>
                                    <li>Market-linked returns

                                    </li>
                                    <li>Charges and fees

                                    </li>
                                    
                                </ul>
                                </p>
                                <p> It is important to evaluate your financial goals, risk tolerance, and preferences before deciding between ULIPs and Traditional Plans.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>14.</span>
                            <h3>Is interest in ULIP taxable?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                The tax treatment of ULIPs (Unit Linked Insurance Plans) depends on various factors, including the premium amount, policy term, and applicable tax laws in your country. ULIPs enjoy tax benefits under income tax laws. The premiums paid towards a ULIP may be eligible for tax deductions under specific sections of the income tax act.
                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>15.</span>
                            <h3>What is the minimum premium amount for ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                The minimum premium amount for ULIPs (Unit Linked Insurance Plans) varies depending on the insurance company and the specific ULIP product. Different ULIPs have different premium payment options.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>16.</span>
                            <h3>Can I switch between different funds in ULIPs?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                Yes, ULIPs offer the flexibility to switch between different funds based on your investment goals and risk appetite. Most ULIPs allow policyholders to switch their investments between the available funds offered by the insurance company. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>17.</span>
                            <h3>Can I take a loan against my ULIP policy?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                Yes, some ULIPs offer the option to take a loan against the policy. The availability of this feature may vary among insurance companies and specific ULIP products. The loan amount that can be availed is typically a percentage of the fund value of the ULIP.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>18.</span>
                            <h3>is a ULIP taxable at maturity?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                ULIP proceeds received at maturity, including the fund value and any additional benefits, are tax-free under Section 10(10D) of the Income Tax Act, subject to certain conditions. However, it's essential to consult with a tax advisor to understand the tax implications based on individual circumstances.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>19.</span>
                            <h3>What is the difference between a ULIP & SIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                ULIP (Unit Linked Insurance Plan) is a financial product that combines insurance coverage with investment options, allowing policyholders to invest in various funds. SIP (Systematic Investment Plan) is an investment strategy that involves investing a fixed amount regularly in mutual funds over a period to benefit from rupee-cost averaging and compound returns. While ULIPs offer insurance coverage along with investment benefits, SIPs focus solely on investment and do not provide insurance protection.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion">
                            <span>20.</span>
                            <h3>How Does ULIP Work?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>
                                ULIP works by pooling the premiums paid by policyholders into a common fund, which is then invested in equity, debt, or a combination of both based on the chosen fund option. The returns generated from these investments are reflected in the policyholder's fund value, which fluctuates with market performance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="rating-section ratingHtml"></section>
        <section class="terms new-terms how-much ulip-terms" id="terms_conditions">
            <div class="midWrapper">
                <button type="button" name="tax-benefits" class="collapsible terms-txt whitespace-initial">Read about Tax benefits &amp; Plan Disclaimer</button>
                <div class="content-col mb-0 tab-align li-disc terms-para">
                    <div type="" class="terms-conditions">Terms and Conditions for ULIPs</div>
                    <div class="ulipterms">
                        <p>
                            You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is
                            advised to take an independent view from tax consultant.
                        </p>
                        <p>
                            The calculation is generated on the basis of information provided and does not constitute an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the advised to go through
                            the sales brochure before conducting any sale.
                        </p>
                        <h3 class="fw-bold up-grace" style="font-weight: 700 !important;">Grace Period</h3>
                        <ul>
                            <li>There is a Grace Period of 30 days for the annual, half-yearly and quarterly mode, and 15 days for the monthly mode from the due date for payment of premium.</li>
                            <li>The policy stays in force during the Grace Period.</li>
                        </ul>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight: 700 !important;">Partial Withdrawals</h3>
                        <p>Some ULIP instruments offer you an option of partial withdrawals. There are various conditions under which this can be done, but it varies from product to product.</p>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight: 700 !important;">Rider Details</h3>
                        <p>Applicable Rider Charges will be deducted from the Fund value if the Riders are chosen. There are different rider options that can enhance your protection and it is recommended that you check them out.</p>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight: 700 !important;">Free Look Period</h3>
                        <p>
                            If the policyholder does not agree to the terms and conditions mentioned in the policy document, he/she can always return the policy. This can only be done within 15-30 days of accepting the policy depending on
                            the channel through which the policy was bought. This period is called free-look period and the insurance company should refund the premium to the policyholder.
                        </p>
                    </div>
                    <div class="ulipterms"><p class="fw-bold new" style="font-weight: 700 !important;">There are a few charges which can be deducted before the refund-</p></div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight: 700 !important;">Goods and Services Tax and Cess</h3>
                        <p>
                        The premium figures are net of Goods and Services Tax and Cess, as applicable. Goods and Services Tax and Cess rates are subject to change from time to time as per the prevailing tax laws and/or any other laws.
                        </p>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight: 700 !important;">Tax Benefit</h3>
                        <p>Tax benefits are subject to conditions specified under the Income-tax Act, 1961. Tax laws are subject to amendments from time to time. Customer is advised to take an independent view from tax consultant.</p>
                    </div>
                    <div class="ulipterms">
                        <h3 class="fw-bold" style="font-weight: 700 !important;">Risk Factors:</h3>
                        <p>
                       <b> The Unit Linked Insurance Products do not offer any liquidity during the first five years of the contract. The policyholder will not be able to surrender /withdraw the monies invested in Unit Linked Insurance Products completely or partially till the end of the fifth year from inception.</b> Unit Linked Life Insurance products are different from the traditional insurance products and are subject to the risk factors. Please know the associated risks and the applicable charges (along with the possibility of increase in charges), from your Insurance agent / Corporate Agent / Insurance Broker / Intermediary or policy document of the insurer. The premium paid in Unit Linked Life Insurance policies are subject to investment risks associated with capital markets and the NAVs of the units may go up or down based on the performance of fund and factors influencing the capital market and the insured is responsible for his/her decisions. All benefits payable under the Policy are subject to the Tax Laws and other financial enactments, as they exist from time to time.

                        </p>
                        <p>This website content is not a brochure and only gives the salient features of the plan.
                        </p>
                        <p>
                            <b>Kotak e-Invest</b>UIN - 107L121V01, Form No. - L121. Kotak Accidental Death Benefit Rider (Linked) UIN - 107A017V01 Form No: A017, Kotak Permanent Disability Benefit Rider (Linked) UIN -107A018V01 Form No:
                            A018. This is an individual Unit-linked Non-participating Endowment Life Insurance Plan. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. For
                            more details on riders, please read the Rider Brochure.
                        </p>
                        <p><b>Kotak Invest Maxima</b> UIN No.: 107L073V05, Form No: L073. This is an individual, unit linked non-par life insurance plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>

                       <p><b>Kotak Single Invest Plus</b> UIN No.: 107L075V04, Form No.: L075. This is a savings oriented unit linked endowment plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.
                       </P>
                       <p><b>Kotak Single Invest Advantage</b> UIN No.: 107L065V05, Form No.: L065. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.
                       </p>
                       <p><b>Kotak Platinum</b> UIN No.: 107L067V07, Form No.: L067. Kotak Accidental Death Benefit Rider (Linked) UIN No.: 107A017V01 Form No.: A017. Kotak Permanent Disability Benefit Rider (Linked) UIN No.: 107A018V01 Form No.: A018. This is an individual, Unit-linked, Non-par, Endowment Life Insurance Plan. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. For details on riders please read rider brochure.</P>

                       <p><b>Kotak Ace Investment</b> UIN No.: 107L064V06, Form No.: L064. Kotak Accidental Death Benefit Rider (Linked) UIN No.: 107A017V01 Form No.: A017. Kotak Permanent Disability Benefit Rider (Linked) UIN No.: 107A018V01 Form No.: A018. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.
                       </p>
                       <p><b>Kotak Wealth Optima Plan </b>UIN: 107L118V03, Form No: L118, Kotak Accidental Death Benefit Rider (Linked) UIN – 107A017V01 Form No: A017, Kotak Permanent Disability Benefit Rider (Linked) UIN – 107A018V01 Form No: A018. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the rider brochure.
                       </p>
                       <p>The assumed non-guaranteed rates of return chosen in the illustration are 4% p.a. and 8% p.a. These assumed rates of return are not guaranteed and they are not the upper or lower limits of what you might get back as the value of your policy is dependent on a number of factors including future investment performance. The actual experience may be different from the illustrated.  Please note that Bonuses are NOT guaranteed and may be as declared by the Company from time to time.
                       </p>



                    </div>
                    <div class="">
                        <p class="fw-bold" style="font-weight: 700 !important;">Section 41-</p>
                        <p class="mtb-16" style="margin-bottom: 16px !important;">
                            Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: (1) No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or
                            continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall
                            any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. (2) Any person making
                            default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.
                        </p>
                        <p class="fw-bold" style="font-weight: 700 !important;">Section 45-</p>
                        <p class="mtb-16" style="margin-bottom: 16px !important;">
                            Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details:
                            <a href="https://www.kotaklife.coassets/images/ulip-plan/images/uploads/why_kotak/section-38-39-45-of-insurance-act-1938.pdf" target="_blank" title="section38_39_45_of_insurance_act_1938">
                                Read more about section38_39_45_of_insurance_act_1938
                            </a>
                        </p>
                        <p class="fw-bold" style="font-weight: 700 !important;">BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/ FRAUDULENT OFFERS</p>
                        <p class="mtb-16" style="margin-bottom: 16px !important;">
                            IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.<br />
                            <br />
                            Regd. Office: Kotak Mahindra Life Insurance Company Ltd. Reg No. 107; CIN : U66030MH2000PLC128503; Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Website: www.kotaklife.com |
                            WhatsApp: 9321003007 | Toll Free: 1800 209 8800 | ARN No. KLI/24-25/E-WEB/652
                            <br />
                            <br />
                            Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<input type="hidden" id="pageNo" name="pageNo" value="0" /> <input type="hidden" id="sortType" name="sortType" value="recent" /> <input type="hidden" id="pageLimit" name="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>" />
<input type="hidden" id="searchArticle" name="searchArticle" value="" /> <input type="hidden" id="pageType" name="pageType" value="topic" /> <input type="hidden" id="topicSlug" name="topicSlug" value="wealth-creation" />
<input type="hidden" id="url" name="url" value="<?php echo $this->uri->segment('1'); ?>/<?php echo $this->uri->segment('2'); ?>" />
<script src="assets/js/jquery-3.6.0.min.js"></script>
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
    const url = "https://www.youtube.com/embed/tO9MPZ0ODjI?list=PLpZlPRDtZqPIlr6Pb8o0b56DmkuJRTPWB";

    function openUrlInFrame(url) {
        const iframe = document.getElementById("kotakVideo");
        iframe.src = url;
    }

    function onLoadAction() {}
    document.getElementById("kotakVideo").addEventListener("load", function () {
        setTimeout(onLoadAction, 3000);
    });
    openUrlInFrame(url);
</script>
<script>
    var rating = "";
    setTimeout(function () {
        $(".submitBtn").on("click", function () {
            $("input[name=rating]:checked").val() && (rating = $("input[name=rating]:checked").val()),
                $.ajax({
                    url: "<?=base_url()?>site/feedbackrating",
                    type: "post",
                    data: { rating: rating, pagename: "ulip_plan", fixed: "24800" },
                    success: function (a) {
                        var t = $.parseJSON(a);
                        $(".votedCount").html(t.feedbackratingdetailscount + " "),
                            localStorage.setItem("ulip_rating", rating),
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
            url: "<?=base_url()?>site/ratingRetrieve",
            type: "post",
            data: { rating: localStorage.getItem("ulip_rating"), pagename: "ulip_plan", fixed: "24800", ratingCount1: "4.4" },
            success: function (a) {
                var t = $.parseJSON(a);
                console.log(t), $(".ratingHtml").html(t.ratingHtml);
            },
        });
</script>
<script>
    setTimeout(function () {
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

            $(".contenttable").toggleClass("show-more-height");
        });

        // const observer = new IntersectionObserver((entries) => {
        //     entries.forEach((entry) => {
        //         if (entry.isIntersecting) {
        //             entry.target.classList.add("show");
        //         } else {
        //             entry.target.classList.remove("show");
        //         }
        //     });
        // });

        // const hiddenElement = document.querySelectorAll(".hid");
        // hiddenElement.forEach((el) => {
        //     observer.observe(el);
        // });
    }, 2000);
</script>
<script>
    setTimeout(function() {
    $('#saving-blogs').slick({
  infinite: false,
  arrows: true,
  dots: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1,

          },
          breakpoint: 768,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,

          }
        },


   ]

});
    },2000);
</script>