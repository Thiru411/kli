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
        ? 'http'
        : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$temp = [];
$temp = explode('/', $actual_link);

if ($temp[3] == 'main') {
    redirect(base_url());
}
    // Do something for only mobile users
} else {
    $actual_link =
        (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
            ? 'http'
            : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $temp = [];
    $temp = explode('/', $actual_link);

    if ($temp[3] == 'main') {
        redirect(base_url());
    }
    // Do something for only desktop users
}
$eventGA=$categoryGA=$actionGA=$labelGA='';
?>
<link rel="stylesheet" href="assets/css/fancybox-4.0.css">
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/investment.css">
<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">
<style>


    .rating-section{top:0;}
    .get-btn {
        padding: 3px 30px 3px 29px;
        border-radius: 15px;
        background-color: #00387e !important;
        color: #fff !important;
        font-size: 22px;
        font-weight: 100;
        position: absolute;
        bottom: 40px;
        right: 315px
    }

    .position-relative {
        position: relative !important
    }

    .related-blogs-gsp .likeWrap ul.reportUL {
        margin: 0 0 40px 0 !important
    }

    .parttxt {
        color: #fff !important;
        font-size: 21px !important;
        font-weight: 600 !important;
        letter-spacing: .42px !important;
        line-height: 24px !important;
        text-transform: uppercase !important
    }

    @media (min-width:768px) {
        .breadcrumb-ulip {
            padding-bottom: 0;
            padding-top: 10px
        }

        .fw-bold {
            font-weight: 700 !important;
            display: inline
        }

        .cat-knw {
            color: #da251c !important;
            border: 1px solid #da251c !important;
            max-width: 100%
        }

        .in-buy {
            display: inline-block;
            text-align: center;
            max-width: 100%
        }

        .what {
            margin: 0 0 30px 0
        }

        .mb-35 {
            margin-bottom: 15px !important
        }

        .features {
            padding: 22px 0 64px 0
        }

        .mx-539 {
            margin-bottom: 15px
        }

        .gsp-design .bene-slick h3 {
            color: #404040 !important;
            font-size: 18px !important;
            font-weight: 700 !important;
            letter-spacing: .36px !important;
            line-height: 26px !important;
            margin-bottom: 5px !important
        }

        .mg-30 {
            margin: 15px 0
        }

        .accelcard .gspview {
            border: 1px solid #ed3237;
            padding: 10px 40px;
            border-radius: 35px;
            margin-top: 25px
        }

        .accelcard {
            max-width: 722px;
            margin-left: auto;
            height: 90%
        }

        .accelcard .gspview:hover {
            background-color: #ed3237 !important;
            color: #fff !important
        }

        .what-policy-period {
            padding-top: 0
        }

        .fs-ach-20 {
            font-size: 20px !important
        }
    }

    @media (max-width:1340px) {
        .btnsticky {
            max-width: 1090px
        }
    }

    .tooltip {
        position: relative;
        display: inline-block
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 100px;
        background-color: #000;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        right: 33px;
        top: -2px;
        position: absolute;
        z-index: 1
    }

    .tooltip:hover .tooltiptext {
        visibility: visible
    }

    .gspwhattxt {
        font-size: 24px !important;
        color: #404040 !important
    }

    .mx-469 {
        max-width: 469px !important
    }

    .kotak-e-term-plan {
        margin-top: 6px;
        margin-bottom: 60px
    }

    .onlinegsp li {
        cursor: pointer;
        color: #404040;
        font-size: 18px;
        border-bottom: 1px solid #dbdbdb;
        min-height: unset;
        padding: 17px 27px 17px 40px;
        line-height: normal;
        max-height: unset
    }

    .op2:before {
        top: 81px
    }

    .op3:before {
        top: 146px
    }

    .op4:before {
        top: 209px
    }

    .op5:before {
        bottom: 85px;
        top: initial
    }

    .op6:before {
        bottom: 22px;
        top: initial
    }

    .gspnewterms li {
        margin-bottom: 24px;
        list-style-type: disc
    }

    .savingsfeat p {
        color: #404040;
        font-size: 16px;
        font-weight: 400;
        letter-spacing: .32px;
        line-height: 22px;
        max-height: 257px;
        min-height: 257px;
        -webkit-line-clamp: 9
    }

    .some-text {
        display: none
    }

    @media (min-width:768px) {
        .mx-464 {
            max-width: 464px !important
        }

        .accelcard {
            max-width: 722px;
            margin-left: auto;
            height: 93%
        }

        .accelcard:first-child {
            height: 83%
        }

        .mr-37 {
            margin-right: 37px
        }

        .gsp-design .mx-464 {
            max-width: 464px !important
        }

        .gsp-buy .mx-536 {
            max-width: 536px !important
        }

        .features {
            padding: 22px 0 22px 0
        }
    }

    .mb-mob-36 {
        margin-bottom: 36px
    }

    .accordion-btns-gsp button {
        margin-bottom: 0 !important;
        padding: 15px 0 15px 0 !important
    }

    .accordion-btns p {
        margin-left: 34px;
        padding-top: 5px
    }

    .invest-cal {
        font-size: 18px;
        text-align: center;
        padding-top: 3rem
    }

    .ulip-calculator .section_heading {
        text-align: center;
        padding: 1rem 0 2rem
    }

    footer {
        top: 0
    }

    #investment_calculator .btn_primary:focus {
        color: #fff !important
    }

    @media only screen and (max-width:480px) {
        .mrow-0 {
            margin: 0
        }

        .m-p-0 {
            padding-left: 0;
            padding-right: 0
        }
        .grey-bg{}
    }

    .in-buy:focus {
        color: #fff
    }

    html {
        scroll-behavior: smooth
    }

</style>
<section>
    <div class="midWrapper">
        <ul class="breadcrumb-ulip">
            <li><a href="<?=base_url()?>" title="Life Insurance&gt">Life Insurance&gt;</a></li>
            <li class="active"><a href="javascript:void(0)" title="ULIP Plans">ULIP Plans</a></li>
        </ul>
    </div>
</section>
<div class="ulip-sections">
    <div class="term-design">
        <section class="term-design-banner bannerr top-161 mtt-102 ulip-cat-mt gspbox">
            <div class="midWrapper">
                <div class="roww flex-wrap-initial">
                    <div class="coll-md-7 w-term-55 on-mob-50 w-mob-100">
                        <p class="top-ban-text">In ULIP, The investment risk in investment portfolio is borne by the policyholder</p>
                        <div class="onlinetxt">
                            <div><svg xmlns="http://www.w3.org/2000/svg" class="img-wid" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Group_16344" x="0px" y="0px" viewBox="0 0 195 95" style="enable-background:new 0 0 195 95" xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            enable-background: new
                                        }

                                        .st1 {
                                            fill: #e51828
                                        }

                                        .st2 {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #e51828
                                        }

                                        .st3 {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #9d0d1a
                                        }

                                        .st4 {
                                            clip-path: url(#SVGID_00000120560858982039017940000011831801116053029808_)
                                        }

                                        .st5 {
                                            fill: #036
                                        }

                                        .st6 {
                                            clip-path: url(#SVGID_00000041285517485646100080000004913663611981390995_)
                                        }

                                        .st7 {
                                            fill: url(#Rectangle_15226_00000177443658873028428640000013731063805934342813_)
                                        }

                                    </style>
                                    <g>
                                        <g class="st0">
                                            <path class="st1" d="M80.4,72.9h28.6v10.8H67V18.3h13.5V72.9z" />
                                            <path class="st1" d="M131.1,83.7h-13.5V18.3h13.5V83.7z" />
                                            <path class="st1" d="M157.1,60.6v23h-13.5V18.3h25.5c4.9,0,9.2,0.9,13,2.7s6.6,4.4,8.6,7.7c2,3.3,3,7.1,3,11.3    c0,6.4-2.2,11.5-6.6,15.2c-4.4,3.7-10.5,5.5-18.2,5.5H157.1z M157.1,49.7h12c3.6,0,6.3-0.8,8.2-2.5c1.9-1.7,2.8-4.1,2.8-7.2    c0-3.2-0.9-5.8-2.8-7.8s-4.5-3-7.8-3.1h-12.4V49.7z" />
                                        </g>
                                        <path id="Path_38623" class="st2" d="M25,64.1C27.1,75,35.6,83.5,46.5,85.5c9-4.6,14.6-13.9,14.6-24V25.4l0,0v-3.2   c0-1-0.8-1.8-1.8-1.8c-1,0-1.8,0.8-1.8,1.8v10.3c0,1-0.8,1.8-1.8,1.8c-1,0-1.8-0.8-1.8-1.8V18.4c0-1-0.8-1.8-1.8-1.8   c-1,0-1.8,0.8-1.8,1.8v19.5c0,1-0.8,1.8-1.8,1.8c-1,0-1.8-0.8-1.8-1.8v-7.1c0-1-0.8-1.8-1.8-1.8h0h0h0h0l0,0l0,0l0,0l0,0l0,0l0,0   l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0   l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0c0,0,0,0,0,0v0v0c0,0,0,0,0,0s0,0,0,0s0,0,0,0v30.8   c0,5.2-4.2,9.5-9.4,9.5C29.9,71,26.2,68.2,25,64.1" />
                                        <path id="Path_38624" class="st2" d="M43.6,24.6c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8V13.9c0-1-0.8-1.8-1.8-1.8   c-1,0-1.8,0.8-1.8,1.8V24.6z" />
                                        <path id="Path_38625" class="st3" d="M25,64.1C27.1,75,35.6,83.5,46.5,85.5c-7.2-2.6-13-8.1-15.9-15.2l0,0   C27.9,69.2,25.8,66.9,25,64.1" />
                                        <g id="Group_16341">
                                            <g>
                                                <defs>
                                                    <path id="SVGID_1_" d="M15.9,2.8L8.5,13.3L1.1,23.8h6v37.7c0,14.9,12.1,27,27,27c4.3,0,8.6-1,12.4-3C35.6,83.5,27.1,75,25,64.1      c-0.2-0.8-0.4-1.7-0.4-2.6V23.8h6l-7.4-10.5L15.9,2.8z" />
                                                </defs>
                                                <clipPath id="SVGID_00000115490453037167918760000005150608028171987859_">
                                                    <use xlink:href="#SVGID_1_" style="overflow:visible" />
                                                </clipPath>
                                                <g id="Group_16340" style="clip-path:url(#SVGID_00000115490453037167918760000005150608028171987859_)">
                                                    <rect id="Rectangle_15225" x="1.1" y="2.8" class="st5" width="45.4" height="85.7" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_16343" transform="translate(23.888 61.304)">
                                            <g>
                                                <defs>
                                                    <path id="SVGID_00000022552492816541460770000010919694272279534990_" d="M22.6,24.2C11.7,22.2,3.2,13.7,1.1,2.8      C2.4,14.1,11.4,22.9,22.6,24.2" />
                                                </defs>
                                                <clipPath id="SVGID_00000127727128379229971770000010229610613965254541_">
                                                    <use xlink:href="#SVGID_00000022552492816541460770000010919694272279534990_" style="overflow:visible" />
                                                </clipPath>
                                                <g id="Group_16342" style="clip-path:url(#SVGID_00000127727128379229971770000010229610613965254541_)">
                                                    <radialGradient id="Rectangle_15226_00000038381255985491430410000012472893153791622041_" cx="-533.3417" cy="187.5336" r="0.692" gradientTransform="matrix(25.3778 6.7516 -6.7533 25.3842 14861.1719 -1054.5594)" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" style="stop-color:#fe0" />
                                                        <stop offset="1" style="stop-color:#e50019" />
                                                    </radialGradient>
                                                    <polygon id="Rectangle_15226" style="fill:url(#Rectangle_15226_00000038381255985491430410000012472893153791622041_)" points="      -4.2,22.8 2.6,-2.5 27.9,4.2 21.2,29.5     " />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg></div>
                            <div class="ulip-banner-heading">
                                <h1>Unit Linked Insurance Plans(ULIP)</h1>
                            </div>
                        </div>
                        <!--div class="coll d-block d-md-none"><svg xmlns="http://www.w3.org/2000/svg" class="ulipmobbanner" width="391" height="357" viewBox="0 0 391 357">
                                <defs>
                                    <linearGradient id="kzk5a" x1="247.43" x2="257.77" y1="260.21" y2="258.77" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#f77c74" />
                                        <stop offset="1" stop-color="#cc542c" />
                                    </linearGradient>
                                    <linearGradient id="kzk5b" x1="256.93" x2="256.93" y1="290.13" y2="318.03" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#f77c74" />
                                        <stop offset="1" stop-color="#cc542c" />
                                    </linearGradient>
                                    <linearGradient id="kzk5c" x1="286.71" x2="271.1" y1="266.66" y2="265.97" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#f77c74" />
                                        <stop offset="1" stop-color="#cc542c" />
                                    </linearGradient>
                                    <radialGradient id="kzk5d" cx="348.35" cy="339.76" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5e" cx="361.39" cy="341.73" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5f" cx="350.94" cy="335.33" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5g" cx="363.98" cy="337.3" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5h" cx="348.35" cy="330.27" r="53.09" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5i" cx="361.39" cy="332.22" r="20.67" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5j" cx="350.94" cy="326.02" r="53.09" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5k" cx="363.98" cy="327.99" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5l" cx="348.35" cy="320.97" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5m" cx="361.39" cy="322.91" r="20.67" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5n" cx="348.35" cy="315.26" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5o" cx="361.39" cy="317.23" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5p" cx="350.94" cy="310.83" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5q" cx="363.98" cy="312.8" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5r" cx="348.35" cy="305.77" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5s" cx="361.39" cy="307.74" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5t" cx="350.94" cy="301.52" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5u" cx="363.98" cy="303.49" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5v" cx="348.35" cy="296.46" r="53.09" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5w" cx="361.39" cy="298.41" r="20.67" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5x" cx="352.03" cy="292.34" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5y" cx="365.06" cy="294.31" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5z" cx="354.62" cy="287.91" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5A" cx="367.65" cy="289.88" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5B" cx="352.03" cy="282.85" r="53.09" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5C" cx="326.25" cy="337.82" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5D" cx="339.28" cy="339.79" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5E" cx="325.16" cy="332.76" r="53.09" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5F" cx="338.19" cy="334.73" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5G" cx="324.57" cy="328.03" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5H" cx="337.6" cy="329.97" r="20.67" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5I" cx="327.16" cy="323.59" r="53.09" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5J" cx="340.19" cy="325.54" r="20.67" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5K" cx="324.57" cy="318.54" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5L" cx="337.6" cy="320.51" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5M" cx="327.16" cy="314.29" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5N" cx="340.19" cy="316.23" r="20.67" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5O" cx="324.57" cy="309.23" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5P" cx="337.56" cy="344.41" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5Q" cx="350.59" cy="346.38" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5R" cx="340.15" cy="339.98" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5S" cx="353.18" cy="341.93" r="20.67" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5T" cx="337.56" cy="334.92" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5U" cx="350.59" cy="336.89" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5V" cx="340.15" cy="330.67" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5W" cx="353.18" cy="332.64" r="20.57" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5X" cx="337.56" cy="325.61" r="53.02" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                    <radialGradient id="kzk5Y" cx="315.91" cy="319.53" r="49.64" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fbe034" />
                                        <stop offset=".15" stop-color="#fac63e" />
                                        <stop offset=".32" stop-color="#f8af46" />
                                        <stop offset=".5" stop-color="#f89f4c" />
                                        <stop offset=".71" stop-color="#f79650" />
                                        <stop offset="1" stop-color="#f79351" />
                                    </radialGradient>
                                </defs>
                                <g>
                                    <g>
                                        <g>
                                            <path fill="#f2f2f2" d="M0 178.5C0 79.917 79.917 0 178.5 0S357 79.917 357 178.5 277.083 357 178.5 357 0 277.083 0 178.5z" />
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path fill="#e5e5e5" d="M83.668 343.706c0-1.848 24.644-3.347 55.043-3.347 30.4 0 55.043 1.499 55.043 3.347 0 1.848-24.643 3.346-55.043 3.346s-55.043-1.498-55.043-3.346z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#8e8e8e" d="M267.791 337.535c2.65-1.135 3.73-4.642 2.454-7.974l-42.134-110.208-17.396 7.455 49.572 106.928c1.515 3.265 4.831 4.944 7.504 3.8z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#676767" d="M166.58 337.75c2.657 1.116 5.93-.546 7.44-3.777l49.936-106.9-17.452-7.324-42.408 109.966c-1.295 3.36-.197 6.91 2.484 8.035z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M194.568 32.864s-3.214 2.3-4.773 10.211c-.767 3.89.493 11.804.493 11.804s-10.566 15.946-8.961 24.99c1.604 9.042 19.289 3.574 19.289 3.574l5.9-14.201-5.283-13.162z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#8e8e8e" d="M250.343 78.094s45.827 23.283 38.592 86.526c-6.645 58.09-60.19 77.29-100.062 63.62-39.874-13.668-26.82-53.764-26.82-53.764z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ffb192" d="M139.405 63.162l-2.071 10.014 13.223-.977.002-4.966z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ffb192" d="M163.719 96.113l-5.336-22.66-20.59 1.73s-12.627 52.406 6.867 61.387c18.008 8.295 32.548-8.664 32.548-8.664z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fff" d="M166.324 138.81h-62.259l-17.78-40.22h59.804a3.77 3.77 0 0 1 3.448 2.245z" />
                                                        </g>
                                                    </g>
                                                    <g opacity=".36">
                                                        <g opacity=".36">
                                                            <path fill="#fff" d="M184.206 197.69c0-3.897 14.032-7.055 31.341-7.055 17.31 0 31.342 3.158 31.342 7.055 0 3.896-14.032 7.055-31.342 7.055-17.309 0-31.341-3.159-31.341-7.055z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#8e8e8e" d="M160.847 138.81h-62.26L82.72 102.915c-.901-2.036.591-4.325 2.817-4.325h57.53z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fff" d="M127.075 119.097a5.288 5.288 0 1 1-10.572.002 5.288 5.288 0 0 1 10.572-.002z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M224.34 39.55s5.355-.942 10.94 4.057c5.584 5 4.521 12.869 4.521 12.869s9.458 2.775 12.75 13.156c3.293 10.38-4.61 15.072-4.61 15.072l-27.943-1.866-8.713-34.247 7.272-10.576z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ffa98f" d="M146.304 289.418l-1.599 23.888h30.255v-23.888z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ffa98f" d="M85.464 221.743l-16.366 17.479 23.62 19.303 15.118-18.499z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#d6d6d6" d="M271.01 191.929a.488.488 0 0 0 .369-.166c9.194-10.343 9.34-28.767 9.34-28.952a.492.492 0 1 0-.986 0c0 .181-.148 18.236-9.092 28.298a.491.491 0 0 0 .369.82z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#263238" d="M135.194 228.188v63.958h51.69l9.638-88.262-41.178-4.609z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#263238" d="M72.945 212.563s42.053-49.939 67.461-57.824c25.408-7.885 104.26-5.257 104.26-5.257s7.885 36.797-13.143 46.435c-21.028 9.638-61.613 7.885-68.479 11.39-6.868 3.505-48.92 44.683-48.92 44.683z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ff3035" d="M258.368 111.58s-3.929-39.504-23.525-44.347c-19.599-4.843-33.205-.757-44.175 3.919-10.603 4.52-25.307 21.528-25.307 21.528l8.449 37.602 10.885-2.044-.18 14.367 57.718 1.54 7.327-30.112z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#1e4679" d="M84.372 155.603h179.736a4.874 4.874 0 0 0 0-9.746H84.372a4.872 4.872 0 1 0 0 9.746z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ffb192" d="M253.314 118.575s3.962 17.223-.491 26.224c-6.35 12.831-59.51 6.005-59.51 6.005l-3.597-15.004 29.942-9.27-.099-.602s11.8-3.109 33.755-7.353z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path fill="#ffb192" d="M216.348 54.877l1.707 12.405s-1.747 3.874-8.922 5.463c-5.346 1.183-7.414.223-7.414.223l-.11-6.387-.101-6.23 12.707-4.685z" />
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M214.185 55.668c.016.343-.06.76-.195 1.246-1.922 6.578-9.329 8.959-12.412 9.669l-.1-6.23z" />
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path fill="#ffb192" d="M194.873 32.458s-4.37 16.45-.613 24.737c3.757 8.287 11.438 5.715 15.902 3.316 4.465-2.4 6.212-5.63 6.212-5.63s4.64.818 6.96-3.736c2.32-4.553-.218-8.985-2.901-9.677-2.685-.692-5.4 1.585-5.4 1.585l1.66-4.84c-.004-.001-13.37-21.254-21.82-5.755z" />
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M198.323 51.938a.494.494 0 0 0 .442-.712c-1.33-2.689.297-6.1.315-6.134a.492.492 0 1 0-.885-.432c-.077.156-1.86 3.875-.314 7.004.085.173.26.274.442.274z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M216.816 50.174a.494.494 0 0 0 .408-.215l3.474-5.104a.492.492 0 1 0-.814-.554l-3.474 5.104a.492.492 0 0 0 .406.769z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M218.1 48.301l2.97-.026a.493.493 0 0 0-.005-.985l-2.969.025a.493.493 0 0 0 .004.986z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M206.205 52.606c-.242.631-.682 1.421-1.449 1.971-.814.586-1.79.345-2.446.054zm-2.59 3.32c.562 0 1.155-.144 1.717-.546 1.816-1.305 2.121-3.574 2.135-3.669a.491.491 0 0 0-.716-.499l-5.7 2.967a.492.492 0 0 0-.068.832c.07.051 1.258.915 2.632.915z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M206.246 39.146a.496.496 0 0 0 .291-.094.496.496 0 0 0 .107-.69c-1.337-1.816-4.562-1.102-4.698-1.069a.495.495 0 0 0-.37.59.488.488 0 0 0 .59.37c.754-.171 2.893-.382 3.681.692a.491.491 0 0 0 .399.201z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M193.994 39.274a.49.49 0 0 0 .42-.234c.077-.12.773-1.138 2.24-.517a.494.494 0 0 0 .384-.909c-1.83-.772-3.067.257-3.464.91a.495.495 0 0 0 .42.75z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#565656" d="M136.755 231.417a.498.498 0 0 0 .362-.158c.2-.214 19.845-21.455 26.086-22.853 6.362-1.425 32.777-3.755 33.043-3.779a.493.493 0 0 0 .448-.534.505.505 0 0 0-.535-.447c-1.088.094-26.746 2.357-33.172 3.796-6.541 1.467-25.78 22.264-26.595 23.15a.492.492 0 0 0 .363.825z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#565656" d="M160.067 195.103c.071 0 .118.024.148.041 1.163.602 1.924 5.622 2.2 9.857-2.188-3.73-4.331-8.68-2.66-9.78.139-.092.239-.118.312-.118zm2.935 12.273a.495.495 0 0 0 .493-.51c-.061-1.89-.485-11.387-2.825-12.6-.321-.168-.832-.283-1.453.125-3.374 2.222 2.673 11.686 3.373 12.759a.485.485 0 0 0 .412.226z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#565656" d="M125.573 241.894a.494.494 0 0 0 .349-.842L95.56 210.586a.493.493 0 1 0-.7.696l30.363 30.466a.49.49 0 0 0 .351.146z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#565656" d="M150.266 283.755h36.66a.493.493 0 0 0 0-.986h-36.66a.493.493 0 0 0 0 .986z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path fill="#1e4679" d="M137.766 307.554s1.818-9.959 6.545-10.434c4.725-.475 11.498 10.434 11.498 10.434s18.463-1.423 19.768 0c1.305 1.423 1.305 32.723 0 33.196-1.305.475-77.881.475-81.362 0-3.482-.475 1.498-16.598 8.364-19.444 6.864-2.845 14.256-2.855 14.256-2.855z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path fill="#1e4679" d="M68.167 230.672s7.513-6.775 11.44-4.323c3.926 2.452 2.444 15.116 2.444 15.116s15.082 9.923 15.214 11.827c.132 1.905-19.08 26.617-20.375 26.208-1.295-.406-60.227-46.22-62.614-48.676-2.387-2.457 11.341-12.208 18.37-10.348 7.03 1.861 12.725 6.277 12.725 6.277z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M187.455 145.658H99.553a2.54 2.54 0 1 1 0-5.082h87.902a2.54 2.54 0 1 1 0 5.082z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ffb192" d="M188.983 136.776s-8.618 1.354-13.824 2.9c-5.206 1.547-13.287 3.335-16.699 2.44-3.412-.895-3.771.536-2.872 2.527.897 1.991 4.847 3.052 4.847 3.052s-4.13 16.535-2.513 17.887c1.616 1.355 6.284-3.867 6.284-3.867s.897 1.16 2.155 1.354c1.258.193 3.051-.58 3.051-.58s.478 1.548 2.664 1.934c2.184.387 3.62-.772 3.62-.772s1.259 2.767 2.694 2.156c1.437-.611 7.9-2.545 7.54-4.477-.359-1.933-5.746-1.547-5.746-1.547l-.718-3.286s5.567 4.254 10.773 1.354c5.206-2.9 4.656-10.154 4.656-10.154z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M164.044 162.495a.493.493 0 0 0 .379-.808c-3.817-4.583 1.113-13.507 1.164-13.596a.493.493 0 0 0-.86-.483c-.218.39-5.312 9.608-1.06 14.712a.485.485 0 0 0 .377.175z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M169.305 163.532a.492.492 0 0 0 .386-.8c-2.29-2.876-.573-7.318-.558-7.36a.493.493 0 0 0-.916-.366c-.081.203-1.946 5.015.703 8.339.097.124.241.187.385.187z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M175.658 164.796a.494.494 0 0 0 .308-.88c-2.452-1.965-2.12-6.288-2.115-6.331a.492.492 0 0 0-.45-.532c-.234-.016-.508.175-.532.449-.018.2-.384 4.889 2.482 7.187.09.071.199.107.307.107z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#1e4679" d="M128.192 69.494V40.331h22.305v29.163z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fff" d="M150.495 40.333c0 .708-4.994 1.281-11.152 1.281-6.158 0-11.151-.573-11.151-1.281s4.993-1.281 11.151-1.281c6.158-.002 11.152.571 11.152 1.281z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path fill="#40507f" d="M157.002 56.464c0 4.851-2.855 8.798-6.366 8.798-3.509 0-6.365-3.947-6.365-8.798s2.856-8.798 6.365-8.798c3.511-.002 6.366 3.947 6.366 8.798zm1.97 0c0-5.94-3.737-10.77-8.336-10.77-4.597 0-8.336 4.833-8.336 10.77 0 5.94 3.74 10.77 8.336 10.77 4.6 0 8.337-4.83 8.337-10.77z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ffb192" d="M158.365 70.022s1.995-12.667 1.04-15.107c-1.296-3.31-8.728-3.31-8.728-3.31v8.492s-4.01 4.978-2.201 13.026c1.807 8.051 9.89-3.1 9.89-3.1z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ffb192" d="M142.462 52.322c-.702-.95-1.671-1.662-2.734-2.182-3.594-1.756-14.534-4.895-17.13-1.553-2.486 3.201 3.536 5.133 3.536 5.133s-5.165-.586-4.36 3.071c.672 3.054 3.988 3.588 3.988 3.588s-5.431-.095-2.835 4.03c2.596 4.123 14.142 6.384 18.151 5.647 4.01-.737.351-5.585.351-5.585s4.219-1.366 3.852-3.763c-.388-2.539-3.936-2.984-3.936-2.984s3.644-1.98 1.117-5.402z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fff" d="M140.035 58.102a.494.494 0 0 0 .134-.968l-13.895-3.889a.49.49 0 0 0-.607.341.494.494 0 0 0 .34.607l13.896 3.89c.044.013.089.02.132.02z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fff" d="M139.754 64.603a.494.494 0 0 0 .128-.97l-13.99-3.731a.493.493 0 1 0-.254.952l13.99 3.732a.464.464 0 0 0 .126.017z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fff" d="M148.423 73.618a.492.492 0 0 0 .463-.66c-2.184-6.036 2.103-12.52 2.147-12.583a.494.494 0 0 0-.818-.55c-.19.282-4.615 6.957-2.258 13.47.075.199.265.323.466.323z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ff5458" d="M202.889 73.854c1.685 0 4.185-.199 7.629-.946 7.327-1.59 9.235-6.186 9.312-6.379a.491.491 0 0 0-.274-.639.491.491 0 0 0-.64.273c-.018.04-1.822 4.309-8.607 5.783-6.902 1.5-9.894.712-9.925.706a.493.493 0 0 0-.268.948c.066.018.936.254 2.773.254z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M204.442 45.076a.496.496 0 0 0 .493-.509l-.094-2.93a.486.486 0 0 0-.144-.33l-1.422-1.431a.493.493 0 1 0-.7.696l1.284 1.293.087 2.734a.501.501 0 0 0 .496.477z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M195.717 45.758a.494.494 0 0 0 .493-.499l-.04-2.93a.49.49 0 0 0-.12-.314l-1.246-1.451a.493.493 0 1 0-.747.645l1.13 1.314.037 2.752a.492.492 0 0 0 .493.483z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M215.108 45.478s-4.934-1.918-7.217-5.255c-2.285-3.34-2.202-6.785-2.202-6.785s-2.644 2.351-6.858 2.3c-4.217-.051-7.105-3.943-6.744-7.27.18-1.658 3.192-1.445 3.192-1.445s2.52-4.327 7.851-4.335c5.33-.006 7.073 2.896 7.073 2.896s4.199-.629 7.653 1.234c3.453 1.86 4.098 6.608 4.098 6.608s2.661.978 3.07 3.473c.407 2.496-1.434 7.57-1.434 7.57s-4.325-4.767-8.482 1.01z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ff5458" d="M184.655 134.65c.272 0 .492-.22.492-.492v-13.28a.48.48 0 0 0-.025-.158c-.02-.056-1.914-5.743-2.622-13.914-.7-8.076 5.22-17.619 5.28-17.716a.495.495 0 0 0-.837-.524c-.252.402-6.154 9.922-5.427 18.323.673 7.773 2.411 13.344 2.644 14.065v13.202a.495.495 0 0 0 .495.495z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#ff5458" d="M218.52 114.093c.464.42.598 4.31.434 8.425-.956-3.367-1.64-7.343-.536-8.35.067-.064.102-.075.102-.075zm.777 11.618c.298-.037.475-.224.49-.457.3-4.19.577-11.327-.935-12.058-.203-.095-.617-.197-1.102.244-2.344 2.143.723 10.949 1.08 11.946a.505.505 0 0 0 .467.325z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#8e8e8e" d="M212.777 340.078l1.001-.44a3.252 3.252 0 0 0 1.672-4.287l-76.468-174.27-6.96 3.053 76.467 174.27a3.255 3.255 0 0 0 4.288 1.674z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#fea7a7" d="M262.888 262.111c.166-.213.26-.473.355-.733.402-1.16.994-2.272 1.727-3.265.166-.213.332-.426.426-.687.237-.615-.047-1.3-.378-1.892-1.775-3.005-4.992-4.85-8.281-6.057-2.224-.804-4.566-1.396-6.932-1.301-.946.047-1.916.213-2.673.733-.758.545-1.23 1.396-1.467 2.319-.237.899-.237 1.845-.213 2.768.07 2.65.355 5.347 1.372 7.784.284.662.615 1.325 1.112 1.821.497.521 1.207.876 1.916.828.734-.023 1.373-.449 2.011-.804a13.767 13.767 0 0 1 5.773-1.656c.946-.047 1.964-.047 2.91.19.757.236 1.727.685 2.342-.048z" />
                                            </g>
                                            <g>
                                                <path fill="url(#kzk5a)" d="M255.057 264.548c-2.484 1.467-3.288 3.62-4.802 6.624-1.586-1.443-2.508-3.549-3.289-5.536-1.562-4.022-3.123-8.328-2.248-12.563.355-1.75 1.325-3.572 3.005-4.164 1.254-.45 2.65-.118 3.856.473 2.46 1.16 4.33 3.265 6.128 5.3.946 1.088 1.916 2.153 2.744 3.312.616.852 2.532 2.887 2.461 3.999-.095 1.159-2.626.567-3.596.733-1.562.213-2.91 1.041-4.259 1.822z" />
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fa8780" d="M297.454 351.257c-7.784-.378-10.434-2.791-10.718-4.731l-1.443-15.284c0-.946 2.2-.994 3.147-.994h19.21c.947 0 2.556.734 2.556 1.68l-.852 14.598c-.118 2.531-5.796 5.015-11.9 4.731z" />
                                                </g>
                                                <g>
                                                    <path fill="#fa8780" d="M339.756 344.728c7.287-1.136 9.534-3.667 9.63-5.537l1.702-26.758c-.094-.899-3.832-2.886-4.731-2.791l-18.336 16.3c-.899.095-2.342.947-2.248 1.846l2.248 13.675c.426 2.39 6.01 4.164 11.735 3.265z" />
                                                </g>
                                                <g>
                                                    <path fill="#fa8780" d="M272.139 343.332c-7.05-.331-9.44-2.532-9.724-4.283l-1.301-13.864c0-.851 2.01-.899 2.863-.899h17.412c.852 0 2.32.663 2.32 1.514l-.782 13.25c-.118 2.294-5.252 4.542-10.788 4.282z" />
                                                </g>
                                                <g>
                                                    <path fill="#f0756e" d="M307.65 330.225h-.85l-.829 14.313c-.142 2.555-5.796 5.04-11.924 4.732-2.744-.142-4.826-.52-6.412-1.04 1.325 1.442 4.259 2.743 9.819 3.004 6.104.307 11.782-2.2 11.924-4.732l.852-14.597c-.024-.947-1.633-1.68-2.58-1.68z" />
                                                </g>
                                                <g>
                                                    <path fill="#f0756e" d="M346.38 309.642l-.165.141c.78.497 1.372 1.018 1.396 1.373l-1.68 26.758c-.095 1.869-2.342 4.4-9.63 5.536-2.389.379-4.755.284-6.718-.118 2.105 1.325 6.127 2.034 10.197 1.42 7.286-1.136 9.534-3.668 9.629-5.537l1.703-26.758c-.094-.9-3.833-2.91-4.732-2.815z" />
                                                </g>
                                                <g>
                                                    <path fill="#f0756e" d="M281.39 324.263h-1.728l-.71 12.279c-.118 2.295-5.252 4.566-10.811 4.282-2.2-.118-3.951-.402-5.324-.804.923 1.49 3.597 3.004 9.346 3.288 5.536.26 10.693-1.987 10.812-4.282l.78-13.249c-.047-.852-1.514-1.514-2.365-1.514z" />
                                                </g>
                                                <g>
                                                    <path fill="#fa8780" d="M316.263 341.51c-6.578-.331-8.825-2.531-9.062-4.282l-1.23-13.864c0-.852 1.87-.9 2.674-.9h16.253c.804 0 2.177.663 2.177 1.515l-.71 13.249c-.142 2.295-4.945 4.542-10.102 4.282z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fa8780" d="M362.374 291.424c0 26.877-13.084 47.98-59.928 48.95-38.493.781-58.674-21.813-58.674-48.69 0-26.876 28.65-50.275 61.087-50.18 42.468.166 57.515 23.044 57.515 49.92z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#f0756e" d="M333.084 278.152c-.946.686-1.443 1.821-1.632 2.957-.45 2.673.567 5.347 1.159 7.997.591 2.65.639 5.772-1.278 7.689-1.75 1.727-4.519 1.916-6.506 3.336-2.319 1.68-3.17 4.968-2.295 7.689.852 2.72 3.194 4.826 5.891 5.82 2.674.993 5.655.97 8.446.355 1.751-.379 3.502-1.018 4.756-2.272 1.656-1.656 2.176-4.092 3.028-6.293a19.71 19.71 0 0 1 3.975-6.293c1.396-1.467 3.004-2.744 4.211-4.377 3.052-4.187 2.697-10.173.308-14.763-.592-1.136-1.325-2.248-2.366-2.957-2.224-1.49-5.158-.876-7.76-.213-1.822.473-3.242.733-5.087.662-1.632-.047-3.454-.331-4.85.663z" />
                                                </g>
                                                <g>
                                                    <path fill="#f0756e" d="M310.277 315.864c-2.91.615-5.725 2.39-6.814 5.157-.544 1.42-.52 3.218.592 4.212.946.851 2.342.899 3.596.899h9.156c.71 0 1.443 0 2.082-.308 1.703-.804 1.94-3.147 3.099-4.637.71-.923 1.893-1.703 1.75-2.863-.094-.804-.827-1.396-1.537-1.774-3.005-1.585-8.683-1.372-11.924-.686z" />
                                                </g>
                                                <g>
                                                    <path fill="#f0756e" d="M314.086 305.43c-.331-.118-.686-.213-1.041-.189-1.278.142-1.845 1.75-2.981 2.342-.639.331-1.514.426-1.798 1.089-.166.402-.024.875.237 1.23.686.993 2.01 1.348 3.217 1.301 1.207-.047 2.366-.45 3.549-.662 1.183-.213 2.484-.213 3.501.473.379.26.9.615 1.254.307a.674.674 0 0 0 .19-.33c.378-1.018-.071-2.201-.852-2.91-.852-.758-1.846-.734-2.815-1.16-.876-.402-1.538-1.136-2.461-1.49z" />
                                                </g>
                                                <g>
                                                    <path fill="#f0756e" d="M352.84 271.125c-.687-.19-1.42-.355-2.083-.118-.662.236-1.135 1.112-.733 1.68.45.638 1.49.402 2.105.899.355.26.497.71.781 1.064.284.331.852.52 1.136.19a7.75 7.75 0 0 1 .236-3.124c.071-.236.142-.496-.047-.71a.644.644 0 0 0-.497-.212c-.378 0-.686.213-.97.426" />
                                                </g>
                                                <g>
                                                    <path fill="#f0756e" d="M327.855 318.372c-.378.591-.757 1.254-.733 1.94.024.686.71 1.42 1.396 1.183.733-.237.828-1.302 1.49-1.751.355-.26.828-.26 1.23-.426.403-.166.758-.662.521-1.017a7.6 7.6 0 0 1-2.91-1.16c-.142-.094-.284-.213-.473-.213-.308-.023-.568.284-.615.592-.047.307.047.615.165.9" />
                                                </g>
                                                <g>
                                                    <path fill="#f0756e" d="M298.779 323.766c-.52.095-1.065.213-1.396.615-.331.402-.284 1.136.213 1.301.142.048.284.024.426.071.355.095.662.544 1.017.426.45-.142.284-.828.497-1.254.07-.142.213-.26.26-.402.142-.379-.402-.804-.733-.568" />
                                                </g>
                                                <g>
                                                    <path fill="#f0756e" d="M327.643 291.14c-.52.095-1.065.213-1.396.615-.331.403-.284 1.136.213 1.302.142.047.284.023.426.07.354.095.662.545 1.017.427.45-.142.284-.829.497-1.254.07-.142.213-.26.26-.403.142-.378-.402-.804-.734-.567" />
                                                </g>
                                            </g>
                                            <g>
                                                <path fill="#f0756e" d="M272.541 296.771c0-2.247 1.706-4.07 3.81-4.07 2.103 0 3.808 1.823 3.808 4.07 0 2.248-1.705 4.07-3.809 4.07-2.103 0-3.809-1.822-3.809-4.07z" />
                                            </g>
                                            <g>
                                                <path fill="url(#kzk5b)" d="M253.377 290.194c-.78-.047-2.957-.095-5.086-.071v27.917c1.798-.023 3.596-.165 4.779-.118 7.098.355 12.137-6.222 12.492-13.651.355-7.429-5.087-13.722-12.185-14.077z" />
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fea7a7" d="M293.881 269.35c-.52-2.886-1.514-5.654-2.839-8.28-.828-1.609-1.703-3.241-2.886-4.613-1.467-1.68-3.454-2.982-5.63-3.478a5.52 5.52 0 0 0-2.154-.497c-.639 0-1.301.118-1.845.426-.592.33-1.065.851-1.49 1.372-2.508 3.123-4.07 6.885-5.49 10.623a2.52 2.52 0 0 0-.094 1.561c.307 1.136 1.065.828 1.845.876.9.047 1.775.33 2.603.733 1.75.852 3.43 1.964 4.542 3.549 2.981 4.306 2.224 8.564 2.224 8.47 0 0 .047.567.284.71 1.301.78 3.36.094 4.708-.545 2.65-1.254 5.323-3.1 6.175-5.914.52-1.586.355-3.336.047-4.992z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#d8592f" d="M324.07 250.116c-.142 0-.284-.024-.45-.071-18.004-5.513-30.78-.639-30.922-.592a1.484 1.484 0 0 1-1.94-.851 1.483 1.483 0 0 1 .852-1.94c.568-.213 13.888-5.3 32.886.497a1.51 1.51 0 0 1 .994 1.869 1.484 1.484 0 0 1-1.42 1.088z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fa8780" d="M363.817 267.056c.45-.142.946-.284 1.49-.426.923-.26 1.728-.142 2.39.307 1.301.876 1.964 2.934 2.082 4.117.19 1.703-.568 3.407-1.822 4.117-.45.26-.97.33-1.277.189-2.91-1.396-3.076-4.59-2.958-6.885v-.568c-.023-.26.024-.544.095-.851zm4.542 10.622c.284-.094.545-.213.828-.33 2.13-1.207 3.36-3.834 3.052-6.53-.189-1.87-1.135-4.543-3.123-5.892a5.009 5.009 0 0 0-3.24-.851 11.856 11.856 0 0 1 3.808-2.556c.616-.26.9-.993.64-1.608-.261-.615-.995-.9-1.61-.64a14.968 14.968 0 0 0-5.63 4.212 9.519 9.519 0 0 0-1.113 1.633c-.97.354-1.869.757-2.957 1.23-.331.142-.662.284-1.017.45-1.42.615-3.052 1.395-4.212 2.815-1.395 1.68-1.68 3.998-.71 5.63a1.21 1.21 0 0 0 1.68.426c.592-.354.781-1.088.426-1.68-.496-.851-.141-2.058.497-2.815.828-.993 2.153-1.609 3.312-2.129.355-.166.71-.308 1.018-.45.45-.212.875-.402 1.277-.567v.047c0 .071-.023.166-.023.284-.237 4.637 1.23 7.736 4.353 9.227.804.378 1.798.402 2.744.094z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g transform="rotate(-79.17 250.5 280.5)">
                                                    <path fill="#a64424" d="M246.527 280.808c0-1.02 1.769-1.846 3.951-1.846 2.182 0 3.951.827 3.951 1.846 0 1.02-1.769 1.845-3.95 1.845-2.183 0-3.952-.826-3.952-1.845z" />
                                                </g>
                                                <g>
                                                    <path fill="#7a321b" d="M250.018 284.681c-.994-.189-1.49-2.081-1.065-4.234.379-1.94 1.349-3.407 2.248-3.526-.994-.165-2.13 1.396-2.532 3.526-.402 2.153.071 4.022 1.065 4.234a.575.575 0 0 0 .284 0c.024 0 0 0 0 0z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g transform="rotate(-79.17 265.5 284.5)">
                                                    <path fill="#a64424" d="M261.508 284.41c0-1.071 1.853-1.94 4.14-1.94s4.14.869 4.14 1.94c0 1.072-1.853 1.94-4.14 1.94s-4.14-.868-4.14-1.94z" />
                                                </g>
                                                <g>
                                                    <path fill="#7a321b" d="M265.16 288.467c-1.041-.19-1.562-2.177-1.112-4.424.378-2.035 1.395-3.573 2.365-3.715-1.04-.165-2.223 1.467-2.65 3.715-.425 2.247.072 4.235 1.113 4.424a.675.675 0 0 0 .307 0h-.023z" />
                                                </g>
                                            </g>
                                            <g transform="rotate(-87.207 248 304)">
                                                <path fill="#fea7a7" d="M233.987 304.055c0-6.742 6.229-12.208 13.912-12.208 7.683 0 13.91 5.466 13.91 12.208s-6.228 12.207-13.91 12.207c-7.683 0-13.912-5.465-13.912-12.207z" />
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#d8592f" d="M240.318 303.183c0-2.156.794-3.904 1.774-3.904s1.775 1.748 1.775 3.904c0 2.156-.795 3.903-1.775 3.903-.98 0-1.774-1.747-1.774-3.903z" />
                                                </g>
                                                <g>
                                                    <path fill="#fff" d="M242.613 299.42c.662.592 1.135 2.036 1.135 3.763 0 1.727-.473 3.17-1.135 3.761.733-.473 1.443-1.963 1.443-3.738 0-1.798-.71-3.288-1.443-3.785z" />
                                                </g>
                                                <g>
                                                    <path fill="#a64424" d="M240.744 303.3c0-2.152.804-3.903 1.774-3.903a.885.885 0 0 0-.426-.118c-.97 0-1.774 1.75-1.774 3.904 0 2.153.78 3.903 1.774 3.903-.78-.402-1.348-1.94-1.348-3.785z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#d8592f" d="M247.7 305.17c0-2.156.794-3.904 1.774-3.904s1.774 1.748 1.774 3.904c0 2.156-.794 3.904-1.774 3.904s-1.775-1.748-1.775-3.904z" />
                                                </g>
                                                <g>
                                                    <path fill="#fff" d="M249.97 301.408c.663.592 1.136 2.035 1.136 3.762 0 1.727-.473 3.17-1.135 3.762.733-.474 1.42-1.988 1.42-3.762 0-1.798-.687-3.289-1.42-3.762z" />
                                                </g>
                                                <g>
                                                    <path fill="#a64424" d="M248.102 305.288c0-2.153.804-3.903 1.774-3.903a.885.885 0 0 0-.426-.119c-.97 0-1.774 1.751-1.774 3.904s.78 3.904 1.774 3.904c-.78-.402-1.348-1.94-1.348-3.786z" />
                                                </g>
                                            </g>
                                            <g>
                                                <path fill="url(#kzk5c)" d="M280.207 271.977c1.585 2.484 2.27 5.441 2.507 8.398 2.627-4.305 3.455-9.463 4.046-14.479.331-2.791.592-5.678-.308-8.351-.899-2.674-3.264-5.04-6.056-5.063-.639 0-1.301.118-1.846.426-.591.33-1.064.851-1.49 1.372-2.342 2.934-3.88 6.459-5.229 9.96-.284.71-.544 1.49-.33 2.224.307 1.112 1.064.828 1.844.876.9.047 1.775.33 2.603.733 1.703.875 3.194 2.271 4.258 3.904z" />
                                            </g>
                                            <g>
                                                <path fill="#ee7460" d="M355.087 263.389c2.768 5.82 4.164 12.208 4.164 18.903 0 26.876-20.489 48.666-69.415 49.612-11.806.237-21.956-1.561-30.402-4.85 9.842 8.518 24.274 13.699 43.035 13.32 46.821-.946 59.928-22.073 59.928-48.95-.023-10.291-2.224-19.968-7.31-28.035z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M248.173 291.803c.615-.024 1.253.07 1.869.213.615.142 1.206.355 1.798.615a11.5 11.5 0 0 1 1.656.946c.118.095.26.19.378.284l.379.308.355.33c.118.12.213.237.331.332.426.473.828.97 1.183 1.514.047.071.095.142.118.213l.118.213c.071.142.166.284.237.426.142.284.284.568.402.875.473 1.183.781 2.414.876 3.644-.355-1.207-.757-2.366-1.302-3.454a6.26 6.26 0 0 0-.212-.403l-.213-.402c-.071-.142-.166-.26-.237-.378l-.118-.19c-.048-.07-.095-.118-.119-.189l-.26-.378-.284-.355-.284-.355-.142-.166c-.047-.047-.094-.118-.165-.165a8.196 8.196 0 0 0-1.349-1.207c-.473-.379-.993-.686-1.514-.994-.07-.047-.142-.07-.19-.118l-.212-.095a5.81 5.81 0 0 0-.402-.189c-.142-.07-.284-.118-.426-.19-.142-.046-.284-.117-.426-.165a11.433 11.433 0 0 0-1.845-.52z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M285.861 254.895c.213.118.402.26.568.426.165.165.331.355.473.544.284.378.52.804.71 1.23.378.876.591 1.822.71 2.745.094.946.094 1.892.023 2.815-.094.923-.26 1.845-.52 2.745.023-.947.047-1.87.047-2.769 0-.922-.047-1.821-.142-2.72-.094-.9-.26-1.798-.544-2.65a8.257 8.257 0 0 0-.52-1.254c-.237-.402-.474-.78-.805-1.112z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M250.538 248.507c.19-.024.379 0 .568.024.095 0 .19.023.284.023.095 0 .19.024.284.048.379.07.733.189 1.088.307.71.26 1.373.64 1.988 1.065l.45.331.425.355c.142.118.284.237.426.379l.402.402.095.094.094.095.19.213.355.426c.118.142.212.307.33.45.095.141.214.307.308.473-.284-.237-.544-.497-.828-.734l-.426-.355c-.142-.118-.26-.236-.402-.355-.284-.236-.544-.473-.852-.686-.141-.118-.283-.213-.425-.33l-.45-.309a18.18 18.18 0 0 0-1.845-1.112 12.676 12.676 0 0 0-.994-.449 8.025 8.025 0 0 0-1.065-.355z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M333.628 249.572c.923.307 1.822.686 2.697 1.112.876.426 1.751.851 2.58 1.348l.638.355c.213.119.426.26.615.379l.615.378.615.402a42.862 42.862 0 0 1 2.366 1.704c.78.591 1.514 1.23 2.248 1.869.355.331.733.662 1.064.994.166.165.355.33.52.52l.498.52c.165.166.33.355.496.545.166.189.332.355.497.544.308.378.64.733.947 1.112a23.983 23.983 0 0 1 1.703 2.366c-.639-.734-1.254-1.467-1.94-2.177a55.672 55.672 0 0 0-2.035-2.058c-.686-.663-1.42-1.301-2.129-1.94-.378-.308-.733-.615-1.112-.923-.378-.307-.757-.591-1.135-.899-1.538-1.16-3.1-2.271-4.732-3.288-.402-.26-.828-.497-1.23-.758-.213-.118-.426-.236-.616-.378l-.638-.355a28.728 28.728 0 0 0-2.532-1.372z" />
                                            </g>
                                        </g>
                                        <g transform="rotate(19 313 229.5)">
                                            <g>
                                                <g>
                                                    <path fill="#f5b104" d="M316.333 245.987c.378-.048.71-.119.993-.213 4.898-1.798 6.034-9.156 6.034-16.325 0-7.098-1.846-14.1-6.53-16.254-1.396-.638-4.093-.307-5.607-.307-6.696 0-12.137 7.429-12.137 16.585 0 8.848 5.063 16.064 11.45 16.537h5.797z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path fill="#fffea3" d="M303.297 232.217c-.048-.307-.071-.615-.095-.923l-4.022.213c.024.308.071.615.095.923z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fffea3" d="M304.196 236.24l-.284-.924-3.975.213.284.923z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fffea3" d="M306.018 240.214c-.166-.237-.308-.497-.45-.757l-3.927.213c.142.26.307.52.45.757z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fffea3" d="M308.857 243.526c-.213-.19-.426-.379-.64-.591l-3.832.213c.213.212.45.402.686.591z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fffea3" d="M311.625 245.277c-.213-.095-.402-.19-.592-.284l-3.643.19c.213.094.45.188.662.283z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fffea3" d="M303.652 224.575c.047-.26.118-.52.189-.78l-3.998-.19c-.071.26-.142.52-.19.757z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fffea3" d="M304.882 220.837c.118-.26.237-.52.355-.757l-3.928-.213c-.118.237-.26.497-.378.757z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fffea3" d="M303.084 217.123l3.88.213c.166-.213.331-.402.497-.592l-3.857-.213c-.165.19-.354.403-.52.592z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fffea3" d="M306.514 214.165l3.715.19.497-.284-3.667-.19c-.19.071-.355.166-.545.284z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fffea3" d="M303.131 228.597c0-.307.024-.615.048-.922h-4.046c-.024.307-.047.615-.047.922z" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#ffd000" d="M303.131 229.449c0-9.16 5.434-16.585 12.137-16.585s12.137 7.425 12.137 16.585-5.434 16.585-12.137 16.585-12.137-7.425-12.137-16.585z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g opacity=".54">
                                                    <g opacity=".54">
                                                        <path fill="#fff" d="M317.374 213.124l-14.006 19.637c.19 1.278.497 2.484.875 3.644l15.828-22.169a9.558 9.558 0 0 0-2.697-1.112z" />
                                                    </g>
                                                </g>
                                                <g opacity=".54">
                                                    <g opacity=".54">
                                                        <path fill="#fff" d="M327.05 225.545a21.732 21.732 0 0 0-.946-3.548l-16.017 22.452c.828.52 1.703.946 2.626 1.206z" />
                                                    </g>
                                                </g>
                                                <g opacity=".54">
                                                    <g opacity=".54">
                                                        <path fill="#fff" d="M327.405 229.449c0-.591-.023-1.16-.07-1.727l-13.037 18.265c.308.023.639.047.947.047.26 0 .496 0 .733-.024l11.404-15.97c.023-.212.023-.402.023-.591z" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#ffbf00" d="M306.87 229.449c0-6.337 3.76-11.474 8.398-11.474 4.639 0 8.4 5.137 8.4 11.474 0 6.337-3.761 11.475-8.4 11.475-4.638 0-8.399-5.138-8.399-11.475z" />
                                                </g>
                                            </g>
                                            <g>
                                                <path fill="#d9891a" d="M307.84 229.378c0-5.891 3.24-10.741 7.428-11.403h-.023c-4.638 0-8.4 5.133-8.4 11.474 0 6.34 3.762 11.475 8.4 11.475.33 0 .638-.024.97-.071-4.614-.024-8.376-5.158-8.376-11.475z" />
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#f2ae00" d="M323.525 229.449c0 6.246-3.714 11.333-8.257 11.333-4.566 0-8.257-5.087-8.257-11.333s3.715-11.333 8.257-11.333c4.543 0 8.257 5.087 8.257 11.333zm-8.257 11.617c4.708 0 8.541-5.205 8.565-11.617 0-6.412-3.857-11.616-8.565-11.616-4.732 0-8.564 5.205-8.564 11.616 0 6.412 3.856 11.617 8.564 11.617z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fff" d="M317.28 245.797c-.474.119-.97.213-1.491.26-.26.024-.497.048-.757.024h-.379c-.118 0-.26-.023-.379-.023a8.39 8.39 0 0 1-1.514-.237c-.118-.024-.236-.071-.378-.095-.119-.047-.237-.07-.355-.118-.237-.095-.473-.166-.71-.284a2.385 2.385 0 0 1-.355-.166l-.331-.189c-.237-.118-.45-.26-.662-.402-.119-.071-.213-.142-.308-.213l-.308-.213-.307-.236-.142-.119-.071-.047-.071-.071a14.082 14.082 0 0 1-2.082-2.2c-1.23-1.61-2.13-3.454-2.744-5.395a21.263 21.263 0 0 1-.994-5.962c-.024-1.017 0-2.01.118-3.028.095-.994.284-2.01.52-2.98a19.245 19.245 0 0 1 2.32-5.584 16.481 16.481 0 0 1 1.868-2.414 13.09 13.09 0 0 1 2.343-1.94l.33-.189c.12-.07.237-.118.332-.165l.166-.095.094-.047.095-.048.355-.142.355-.142.355-.118.354-.095c.119-.023.237-.07.379-.094.237-.047.497-.118.733-.142a2.07 2.07 0 0 1 .379-.047l.378-.024c.26-.024.497-.024.758-.024h.189l.19.024.378.024H315.174c-.26.023-.497.023-.734.07l-.378.048-.355.07a7.876 7.876 0 0 0-.71.19 2.081 2.081 0 0 0-.355.118l-.355.119-.331.142c-.118.047-.237.094-.331.142l-.331.165-.071.048-.071.047-.166.094c-.095.071-.213.119-.308.19l-.307.213c-.213.118-.402.284-.615.402l-.284.213-.284.236-.284.237c-.095.071-.19.166-.284.237l-.26.26-.142.118c-.047.047-.095.095-.118.142-.687.71-1.278 1.514-1.822 2.342-1.065 1.68-1.798 3.55-2.271 5.465-.237.97-.403 1.94-.497 2.934-.095.994-.142 1.988-.095 2.981.071 1.988.379 3.975.994 5.844a17.617 17.617 0 0 0 2.673 5.276 13.47 13.47 0 0 0 2.035 2.153 11.36 11.36 0 0 0 2.484 1.585c.213.118.45.213.662.307.119.048.237.095.355.119.119.047.237.07.355.118.473.142.947.26 1.443.308.119.023.237.047.379.047l.379.024c.236.023.496.023.757.023.378.071.875.024 1.348-.07z" />
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5d)" d="M370.735 345.598a106.892 106.892 0 0 0-9.253-.058l-11.769-.074c-.203-.1-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M384.732 345.686c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M384.145 345.686c0 1.78-8.367 3.224-18.687 3.224s-18.686-1.443-18.686-3.224c0-1.781 8.367-3.225 18.686-3.225 10.32 0 18.687 1.444 18.687 3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M383.646 345.686c0 1.604-8.143 2.904-18.189 2.904-10.044 0-18.188-1.3-18.188-2.904 0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.19 1.3 18.19 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5e)" d="M368.73 345.267c-.511 0-.908.022-1.195.067a2.814 2.814 0 0 0-.794.238 7.402 7.402 0 0 1-.775.318 7.084 7.084 0 0 1-.98.25c-.386.073-.845.132-1.376.174-.538.042-1.174.064-1.902.064-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133v-.388l2.421-.133c.362-.174 1.002-.033 1.827-.122.8-.087 1.756-.518 2.887-.518l.015.467-.186.311c-.748 0-1.322.025-1.73.073-.414.05-.66.117-.731.204-.073.087.025.158.298.208.278.052.699.078 1.26.078.52 0 .947-.026 1.277-.076.325-.05.662-.14 1.003-.267.327-.121.623-.218.89-.291.262-.072.55-.13.866-.178.31-.047.663-.08 1.057-.105.39-.023.85-.035 1.377-.035.987 0 1.828.044 2.542.136.74.095 1.12-.07 1.464.114l2.466.167v.388h-1.983c.137.236-.147.432-.885.579-.771.152-1.945.231-3.495.231l-.258-.566c.014-.192-.041-.182 0-.388.626-.01 1.502.344 1.826.288.38-.065.517-.156.419-.271-.079-.092-.288-.163-.624-.214a8.428 8.428 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M368.73 344.879c-.511 0-.908.022-1.195.067a2.822 2.822 0 0 0-.794.238c-.249.119-.507.225-.775.318a7.119 7.119 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.042-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.301 1.783-.39.8-.087 1.756-.13 2.887-.13l-.171.39c-.747 0-1.322.024-1.73.073-.414.049-.66.117-.73.203-.074.088.024.158.297.21.278.05.7.077 1.26.077.52 0 .946-.026 1.277-.076.325-.05.662-.14 1.003-.267a10.3 10.3 0 0 1 .891-.291c.261-.072.55-.13.865-.178.31-.046.663-.081 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.282.231 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.827 0 1.437-.033 1.826-.1.38-.065.517-.156.419-.271-.079-.092-.288-.163-.624-.214a8.35 8.35 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5f)" d="M373.325 341.166a106.307 106.307 0 0 0-9.253-.058l-11.77-.073c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M387.323 341.255c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444s8.629-3.444 19.274-3.444c10.645 0 19.275 1.542 19.275 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M386.734 341.254c0 1.782-8.366 3.225-18.686 3.225s-18.686-1.443-18.686-3.225c0-1.78 8.365-3.224 18.686-3.224 10.32 0 18.686 1.443 18.686 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M386.236 341.255c0 1.603-8.142 2.903-18.188 2.903-10.045 0-18.188-1.3-18.188-2.903 0-1.604 8.143-2.904 18.188-2.904 10.045 0 18.188 1.3 18.188 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5g)" d="M371.32 340.836c-.511 0-.908.022-1.195.067a2.802 2.802 0 0 0-.794.238 7.44 7.44 0 0 1-.775.318 7.08 7.08 0 0 1-.98.25c-.386.073-.845.132-1.376.174a24.19 24.19 0 0 1-1.902.064c-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.31-.745-.512h-2.132v-.388l2.42-.134c.363-.173 1.002-.032 1.828-.122.799-.086 1.755-.517 2.886-.517l.015.467-.186.311c-.747 0-1.322.024-1.73.073-.414.05-.659.117-.73.203-.074.089.024.158.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.277-.076a5.1 5.1 0 0 0 1.004-.267c.327-.121.623-.218.89-.291.262-.072.55-.13.866-.178.31-.046.662-.08 1.056-.105.391-.023.85-.035 1.378-.035.986 0 1.828.045 2.542.136.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.579-.772.152-1.945.231-3.496.231l-.257-.566c.014-.192-.041-.183 0-.388.626-.01 1.502.343 1.825.288.381-.065.518-.156.42-.27-.08-.093-.289-.164-.624-.215a8.4 8.4 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M371.32 340.448c-.511 0-.908.022-1.195.067a2.842 2.842 0 0 0-.794.237c-.248.12-.507.226-.775.318a7.013 7.013 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.173.065-1.902.065-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132l.391-.253h2.073c.363-.173.958-.301 1.784-.39.799-.087 1.755-.13 2.886-.13l-.17.39c-.748 0-1.323.024-1.73.072-.415.05-.66.117-.732.204-.073.088.025.158.298.209.278.051.7.078 1.26.078.52 0 .947-.026 1.277-.077.326-.05.662-.14 1.004-.266.327-.122.623-.218.89-.292a7.5 7.5 0 0 1 .866-.177c.31-.046.662-.082 1.056-.105.391-.024.85-.036 1.378-.036.986 0 1.828.045 2.542.137.739.095 1.281.231 1.625.415h1.91l.395.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.496.232l-.257-.566c.826 0 1.437-.034 1.825-.1.38-.065.518-.156.42-.271-.08-.092-.289-.163-.624-.214a8.362 8.362 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5h)" d="M370.735 336.11a106.353 106.353 0 0 0-9.253-.058l-11.769-.074c-.203-.1-3.489 0-3.489 0l-.04 3.444c0 1.903 8.63 3.444 19.275 3.444 10.644 0 19.274-1.541 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M384.732 336.198c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M346.772 336.198c0-1.78 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224c0 1.781-8.367 3.225-18.687 3.225s-18.686-1.444-18.686-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M383.646 336.198c0 1.604-8.143 2.904-18.189 2.904-10.044 0-18.188-1.3-18.188-2.904 0-1.603 8.143-2.903 18.188-2.903 10.046 0 18.19 1.3 18.19 2.903z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5i)" d="M368.73 335.78c-.511 0-.908.022-1.195.067a2.806 2.806 0 0 0-.794.238c-.249.119-.507.225-.775.317a7.118 7.118 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.137-.866-.31-.745-.512h-2.133v-.389l2.421-.133c.362-.173 1.002-.033 1.827-.122.8-.087 1.756-.517 2.887-.517l.015.467-.186.31c-.748 0-1.322.025-1.73.073-.414.05-.66.117-.731.204-.073.088.025.158.298.209.278.051.699.077 1.26.077.52 0 .947-.025 1.277-.076.325-.049.662-.14 1.003-.266.327-.122.623-.218.89-.291.262-.072.55-.131.866-.178.31-.047.663-.081 1.057-.105.39-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.12-.07 1.464.114l2.466.167v.388h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.567c.014-.191-.041-.182 0-.388.626-.01 1.502.344 1.826.289.38-.065.517-.156.419-.27-.079-.094-.288-.164-.624-.215a8.355 8.355 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M368.73 335.392c-.511 0-.908.022-1.195.067a2.83 2.83 0 0 0-.794.238c-.249.119-.507.225-.775.318a7.19 7.19 0 0 1-.98.25c-.386.073-.845.131-1.376.173-.538.043-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.137-.866-.31-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.302 1.783-.39.8-.088 1.756-.13 2.887-.13l-.171.39c-.747 0-1.322.024-1.73.073-.414.049-.66.116-.73.203-.074.088.024.159.297.209.278.051.7.078 1.26.078.52 0 .946-.026 1.277-.076.325-.05.662-.14 1.003-.267.328-.122.623-.218.891-.291.261-.072.55-.131.865-.178.31-.046.663-.081 1.057-.105.391-.024.85-.035 1.377-.035.987 0 1.828.044 2.542.136.74.095 1.282.232 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.827 0 1.437-.034 1.826-.1.38-.065.517-.156.419-.27-.079-.094-.288-.165-.624-.215a8.35 8.35 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5j)" d="M373.325 331.86a106.34 106.34 0 0 0-9.253-.058l-11.77-.074c-.203-.102-3.488 0-3.488 0l-.04 3.444c0 1.901 8.63 3.443 19.274 3.443 10.645 0 19.275-1.541 19.275-3.443v-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M387.323 331.946c0 1.902-8.63 3.444-19.274 3.444-10.646 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.543 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M386.734 331.946c0 1.781-8.366 3.225-18.686 3.225s-18.686-1.444-18.686-3.225c0-1.78 8.365-3.224 18.686-3.224 10.32 0 18.686 1.444 18.686 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M386.237 331.946c0 1.604-8.143 2.904-18.188 2.904-10.046 0-18.19-1.3-18.19-2.904 0-1.603 8.144-2.904 18.19-2.904 10.044 0 18.188 1.301 18.188 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5k)" d="M371.32 331.528c-.511 0-.908.022-1.195.066a2.85 2.85 0 0 0-.794.239c-.248.119-.507.225-.775.317-.276.096-.603.18-.98.25-.386.074-.845.132-1.376.174-.538.043-1.173.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.388l2.42-.133c.362-.174 1.002-.033 1.827-.122.8-.087 1.756-.518 2.887-.518l.015.467-.186.311c-.747 0-1.322.024-1.73.073-.414.049-.659.117-.73.203-.074.088.024.158.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.277-.076.326-.05.662-.14 1.004-.267.327-.121.622-.218.89-.29.261-.073.55-.132.865-.179.311-.046.663-.081 1.058-.105.39-.024.848-.036 1.376-.036.987 0 1.828.045 2.543.137.738.095 1.12-.07 1.464.115l2.466.165v.39h-1.984c.138.236-.146.431-.884.577-.772.154-1.946.232-3.496.232l-.257-.566c.014-.192-.042-.183 0-.388.627-.01 1.502.344 1.825.288.38-.065.517-.156.419-.271-.079-.092-.288-.163-.623-.214a8.393 8.393 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M371.32 331.14c-.511 0-.908.022-1.195.067a2.842 2.842 0 0 0-.794.238 7.395 7.395 0 0 1-.775.318 7.115 7.115 0 0 1-.98.25 13.05 13.05 0 0 1-1.376.173 24.32 24.32 0 0 1-1.902.064c-1.257 0-2.222-.073-2.874-.215-.626-.137-.866-.31-.745-.512h-2.132l.391-.253h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.756-.129 2.887-.129l-.17.39c-.748 0-1.323.024-1.73.073-.415.049-.66.116-.732.203-.073.088.025.158.298.208.278.052.7.078 1.26.078.52 0 .947-.026 1.277-.076.326-.049.662-.14 1.004-.266.327-.122.622-.218.89-.292.261-.071.55-.13.865-.177.311-.046.663-.082 1.058-.105.39-.024.848-.036 1.376-.036.987 0 1.828.045 2.543.137.739.095 1.281.23 1.625.415h1.911l.394.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.946.232-3.496.232l-.257-.566c.826 0 1.437-.034 1.825-.1.38-.065.517-.156.419-.272-.079-.091-.288-.163-.623-.213a8.44 8.44 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5l)" d="M370.735 326.802a106.892 106.892 0 0 0-9.253-.058l-11.769-.073c-.203-.102-3.489 0-3.489 0l-.04 3.444c0 1.901 8.63 3.444 19.275 3.444 10.644 0 19.274-1.543 19.274-3.444v-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M384.732 326.89c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M346.772 326.89c0-1.78 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224c0 1.781-8.367 3.225-18.687 3.225s-18.686-1.444-18.686-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M347.27 326.89c0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.189 1.3 18.189 2.904 0 1.604-8.143 2.904-18.189 2.904-10.045 0-18.188-1.3-18.188-2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5m)" d="M368.73 326.473c-.511 0-.908.022-1.195.066a2.83 2.83 0 0 0-.794.238c-.249.12-.507.225-.775.318a7.084 7.084 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.042-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133v-.388l2.421-.133c.362-.173 1.002-.033 1.827-.123.8-.086 1.756-.517 2.887-.517l.015.467-.186.312c-.748 0-1.322.023-1.73.072-.414.05-.66.117-.731.204-.073.088.025.158.298.209.278.05.699.077 1.26.077.52 0 .947-.025 1.277-.076.325-.05.662-.14 1.003-.266.327-.122.623-.218.89-.292a7.4 7.4 0 0 1 .866-.178c.31-.046.663-.081 1.057-.105.39-.023.85-.035 1.377-.035.987 0 1.828.045 2.542.137.74.095 1.12-.07 1.464.114l2.466.166v.389h-1.983c.137.236-.147.431-.885.577-.771.154-1.945.233-3.495.233l-.258-.567c.014-.192-.041-.182 0-.388.626-.01 1.502.344 1.826.288.38-.065.517-.156.419-.271-.079-.092-.288-.162-.624-.214a8.368 8.368 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M368.73 326.084c-.511 0-.908.022-1.195.067a2.83 2.83 0 0 0-.794.238c-.249.119-.507.225-.775.318a7.119 7.119 0 0 1-.98.25c-.386.073-.845.131-1.376.173-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.31-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.301 1.783-.391.8-.087 1.756-.129 2.887-.129l-.171.39c-.747 0-1.322.024-1.73.073-.414.049-.66.117-.73.203-.074.088.024.158.297.209.278.051.7.077 1.26.077.52 0 .946-.025 1.277-.076a5.12 5.12 0 0 0 1.003-.266c.328-.122.623-.218.891-.291.261-.072.55-.13.865-.178.31-.046.663-.081 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.282.231 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.827 0 1.437-.034 1.826-.1.38-.065.517-.156.419-.272-.079-.091-.288-.162-.624-.213a8.32 8.32 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5n)" d="M370.735 321.096a107.414 107.414 0 0 0-9.253-.058l-11.769-.074c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M384.732 321.184c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M346.772 321.184c0-1.781 8.366-3.225 18.686-3.225s18.687 1.444 18.687 3.225c0 1.78-8.367 3.224-18.687 3.224s-18.686-1.443-18.686-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M383.646 321.184c0 1.604-8.143 2.904-18.189 2.904-10.044 0-18.188-1.3-18.188-2.904 0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.19 1.3 18.19 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5o)" d="M368.73 320.765c-.511 0-.908.022-1.195.067a2.822 2.822 0 0 0-.794.238 7.456 7.456 0 0 1-.775.318 7.155 7.155 0 0 1-.98.25c-.386.073-.845.132-1.376.173-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133v-.388l2.421-.134c.362-.173 1.002-.032 1.827-.122.8-.086 1.756-.517 2.887-.517l.015.467-.186.311c-.748 0-1.322.024-1.73.073-.414.049-.66.117-.731.204-.073.087.025.158.298.209.278.05.699.077 1.26.077.52 0 .947-.025 1.277-.076.325-.05.662-.14 1.003-.267.327-.121.623-.218.89-.29.262-.072.55-.132.866-.179.31-.046.663-.08 1.057-.105.39-.023.85-.035 1.377-.035.987 0 1.828.045 2.542.136.74.095 1.12-.07 1.464.115l2.466.166v.388h-1.983c.137.237-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.014-.192-.041-.182 0-.388.626-.01 1.502.343 1.826.288.38-.065.517-.156.419-.27-.079-.093-.288-.164-.624-.215a8.388 8.388 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M368.73 320.377c-.511 0-.908.023-1.195.067a2.814 2.814 0 0 0-.794.238c-.249.12-.507.225-.775.318a7.051 7.051 0 0 1-.98.25c-.386.074-.845.132-1.376.174a24.67 24.67 0 0 1-1.902.065c-1.257 0-2.222-.074-2.874-.216-.626-.137-.866-.31-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.756-.13 2.887-.13l-.171.39c-.747 0-1.322.025-1.73.073-.414.05-.66.117-.73.204-.074.088.024.158.297.208.278.052.7.078 1.26.078.52 0 .946-.026 1.277-.076.325-.05.662-.14 1.003-.266.328-.122.623-.219.891-.292.261-.071.55-.13.865-.178.31-.046.663-.08 1.057-.105.391-.024.85-.035 1.377-.035.987 0 1.828.045 2.542.137.74.095 1.282.231 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.577-.771.154-1.945.233-3.495.233l-.258-.567c.827 0 1.437-.033 1.826-.1.38-.065.517-.156.419-.27-.079-.093-.288-.164-.624-.215a8.288 8.288 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5p)" d="M373.325 316.665a106.824 106.824 0 0 0-9.253-.058l-11.77-.073c-.203-.102-3.489 0-3.489 0l-.04 3.443c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M387.323 316.753c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444s8.629-3.444 19.274-3.444c10.645 0 19.275 1.542 19.275 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M386.734 316.753c0 1.78-8.366 3.224-18.686 3.224s-18.686-1.443-18.686-3.224c0-1.781 8.365-3.225 18.686-3.225 10.32 0 18.686 1.443 18.686 3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M386.236 316.753c0 1.604-8.142 2.904-18.188 2.904-10.045 0-18.188-1.3-18.188-2.904 0-1.604 8.143-2.904 18.188-2.904 10.045 0 18.188 1.3 18.188 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5q)" d="M371.32 316.335c-.511 0-.908.021-1.195.066a2.826 2.826 0 0 0-.794.238 7.334 7.334 0 0 1-.775.318 7.082 7.082 0 0 1-.98.25c-.386.073-.845.132-1.376.173-.538.043-1.173.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.388l2.42-.134c.363-.173 1.002-.033 1.828-.121.799-.087 1.755-.518 2.886-.518l.015.467-.186.31c-.747 0-1.322.026-1.73.074-.414.05-.659.117-.73.203-.074.088.024.158.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.277-.076a5.1 5.1 0 0 0 1.004-.266c.327-.122.623-.219.89-.292.262-.071.55-.13.866-.178.31-.047.662-.08 1.056-.105.391-.024.85-.036 1.378-.036.986 0 1.828.045 2.542.137.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.496.232l-.257-.566c.014-.192-.041-.182 0-.389.626-.008 1.502.344 1.825.289.381-.065.518-.156.42-.271-.08-.092-.289-.163-.624-.214a8.404 8.404 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M371.32 315.946c-.511 0-.908.022-1.195.066a2.833 2.833 0 0 0-.794.238c-.248.12-.507.226-.775.318-.276.095-.602.18-.98.25-.386.074-.845.132-1.376.174-.538.043-1.173.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.136-.866-.309-.745-.512h-2.132l.391-.253h2.073c.363-.173.958-.302 1.784-.391.799-.087 1.755-.129 2.886-.129l-.17.39c-.748 0-1.323.024-1.73.072-.415.05-.66.117-.732.204-.073.088.025.158.298.208.278.052.7.079 1.26.079.52 0 .947-.026 1.277-.077.326-.05.662-.14 1.004-.266.327-.122.623-.218.89-.292.262-.071.55-.13.866-.177.31-.047.662-.082 1.056-.105.391-.024.85-.036 1.378-.036.986 0 1.828.044 2.542.137.739.094 1.281.231 1.625.415h1.91l.395.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.496.232l-.257-.566c.826 0 1.437-.034 1.825-.1.38-.066.518-.157.42-.272-.08-.092-.289-.163-.624-.214a8.435 8.435 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5r)" d="M370.735 311.608a105.84 105.84 0 0 0-9.253-.058l-11.769-.073c-.203-.102-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M384.732 311.696c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.543 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M346.772 311.696c0-1.78 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224c0 1.781-8.367 3.225-18.687 3.225s-18.686-1.444-18.686-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M383.646 311.696c0 1.604-8.143 2.904-18.189 2.904-10.044 0-18.188-1.3-18.188-2.904 0-1.603 8.143-2.903 18.188-2.903 10.046 0 18.19 1.3 18.19 2.903z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5s)" d="M368.73 311.278c-.511 0-.908.022-1.195.067a2.79 2.79 0 0 0-.794.239 7.402 7.402 0 0 1-.775.317 7.114 7.114 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.042-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133v-.388l2.421-.133c.362-.174 1.002-.033 1.827-.122.8-.087 1.756-.517 2.887-.517l.015.466-.186.311c-.748 0-1.322.025-1.73.073-.414.05-.66.117-.731.204-.073.088.025.157.298.208.278.052.699.078 1.26.078.52 0 .947-.025 1.277-.076.325-.05.662-.14 1.003-.266.327-.122.623-.219.89-.292.262-.071.55-.13.866-.177.31-.047.663-.082 1.057-.106.39-.023.85-.035 1.377-.035.987 0 1.828.045 2.542.136.74.095 1.12-.07 1.464.114l2.466.167v.388h-1.983c.137.236-.147.433-.885.579-.771.153-1.945.232-3.495.232l-.258-.567c.014-.192-.041-.183 0-.388.626-.01 1.502.344 1.826.288.38-.064.517-.156.419-.27-.079-.093-.288-.164-.624-.215a8.355 8.355 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M368.73 310.89c-.511 0-.908.022-1.195.066a2.83 2.83 0 0 0-.794.239 7.296 7.296 0 0 1-.775.317 7.114 7.114 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.136-.866-.31-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.756-.129 2.887-.129l-.171.39c-.747 0-1.322.024-1.73.073-.414.049-.66.116-.73.203-.074.088.024.158.297.209.278.051.7.077 1.26.077.52 0 .946-.025 1.277-.076.325-.05.662-.14 1.003-.266.328-.122.623-.218.891-.292.261-.071.55-.13.865-.177.31-.046.663-.082 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.282.231 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.827 0 1.437-.034 1.826-.1.38-.065.517-.156.419-.272-.079-.091-.288-.163-.624-.213a8.388 8.388 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5t)" d="M373.325 307.357a104.606 104.606 0 0 0-9.253-.057l-11.77-.075c-.203-.1-3.488 0-3.488 0l-.04 3.445c0 1.902 8.63 3.444 19.274 3.444 10.645 0 19.275-1.542 19.275-3.444v-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M387.323 307.445c0 1.902-8.63 3.444-19.274 3.444-10.646 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.541 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M386.734 307.445c0 1.78-8.366 3.224-18.686 3.224s-18.686-1.443-18.686-3.224c0-1.781 8.365-3.225 18.686-3.225 10.32 0 18.686 1.444 18.686 3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M386.237 307.445c0 1.604-8.143 2.904-18.188 2.904-10.046 0-18.19-1.3-18.19-2.904 0-1.604 8.144-2.904 18.19-2.904 10.044 0 18.188 1.3 18.188 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5u)" d="M371.32 307.026c-.511 0-.908.022-1.195.067a2.842 2.842 0 0 0-.794.238c-.248.12-.507.225-.775.318a7.115 7.115 0 0 1-.98.25c-.386.073-.845.131-1.376.174a24.42 24.42 0 0 1-1.902.064c-1.257 0-2.222-.073-2.874-.215-.626-.137-.866-.31-.745-.513h-2.132v-.388l2.42-.134c.362-.173 1.002-.032 1.827-.122.8-.086 1.756-.516 2.887-.516l.015.466-.186.311c-.747 0-1.322.024-1.73.073-.414.05-.659.116-.73.203-.074.088.024.158.297.21.278.05.7.077 1.26.077a8.7 8.7 0 0 0 1.277-.076c.326-.05.662-.14 1.004-.267.327-.121.622-.218.89-.29.261-.072.55-.132.865-.179.311-.046.663-.081 1.058-.105.39-.024.848-.035 1.376-.035.987 0 1.828.044 2.543.137.738.094 1.12-.07 1.464.113l2.466.167v.389h-1.984c.138.236-.146.431-.884.578-.772.153-1.946.232-3.496.232l-.257-.567c.014-.192-.042-.182 0-.388.627-.01 1.502.344 1.825.289.38-.066.517-.157.419-.272-.079-.092-.288-.163-.623-.214a8.432 8.432 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M371.32 306.638c-.511 0-.908.022-1.195.067a2.834 2.834 0 0 0-.794.238 7.343 7.343 0 0 1-.775.318 7.08 7.08 0 0 1-.98.25 12.97 12.97 0 0 1-1.376.173c-.538.043-1.173.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132l.391-.253h2.073c.362-.173.958-.302 1.783-.39.8-.087 1.756-.13 2.887-.13l-.17.39c-.748 0-1.323.024-1.73.073-.415.049-.66.116-.732.203-.073.088.025.159.298.209.278.051.7.078 1.26.078.52 0 .947-.026 1.277-.076a5.1 5.1 0 0 0 1.004-.267c.327-.122.622-.218.89-.291.261-.072.55-.13.865-.178.311-.046.663-.081 1.058-.105.39-.024.848-.036 1.376-.036.987 0 1.828.045 2.543.137.739.095 1.281.231 1.625.415h1.911l.394.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.946.232-3.496.232l-.257-.566c.826 0 1.437-.033 1.825-.1.38-.065.517-.156.419-.271-.079-.092-.288-.163-.623-.214a8.397 8.397 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5v)" d="M370.735 302.301a105.324 105.324 0 0 0-9.253-.058l-11.769-.074c-.203-.1-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M384.732 302.388c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.543 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M384.145 302.388c0 1.781-8.367 3.225-18.687 3.225s-18.686-1.444-18.686-3.225c0-1.78 8.367-3.224 18.686-3.224 10.32 0 18.687 1.444 18.687 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M347.27 302.388c0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.189 1.3 18.189 2.904 0 1.604-8.143 2.904-18.189 2.904-10.045 0-18.188-1.3-18.188-2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5w)" d="M368.73 301.97c-.511 0-.908.023-1.195.067a2.822 2.822 0 0 0-.794.238c-.249.12-.507.226-.775.318a7.049 7.049 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.043-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133v-.388l2.421-.133c.362-.174 1.002-.033 1.827-.122.8-.087 1.756-.518 2.887-.518l.015.467-.186.311c-.748 0-1.322.024-1.73.073-.414.05-.66.117-.731.203-.073.089.025.159.298.21.278.05.699.077 1.26.077.52 0 .947-.026 1.277-.076.325-.05.662-.14 1.003-.266.327-.123.623-.219.89-.292.262-.071.55-.13.866-.178.31-.046.663-.081 1.057-.105.39-.024.85-.035 1.377-.035.987 0 1.828.044 2.542.136.74.095 1.12-.07 1.464.114l2.466.167v.388h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.014-.192-.041-.182 0-.388.626-.01 1.502.343 1.826.288.38-.065.517-.156.419-.271-.079-.092-.288-.163-.624-.214a8.462 8.462 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M368.73 301.582c-.511 0-.908.022-1.195.066a2.838 2.838 0 0 0-.794.239 7.3 7.3 0 0 1-.775.317 7.048 7.048 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.137-.866-.31-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.756-.129 2.887-.129l-.171.39c-.747 0-1.322.024-1.73.072-.414.05-.66.117-.73.204-.074.088.024.158.297.209.278.051.7.077 1.26.077.52 0 .946-.025 1.277-.076.325-.05.662-.14 1.003-.266.328-.122.623-.218.891-.292.261-.071.55-.13.865-.177.31-.046.663-.081 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.282.231 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.567c.827 0 1.437-.033 1.826-.1.38-.065.517-.156.419-.27-.079-.093-.288-.164-.624-.214a8.432 8.432 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5x)" d="M374.411 298.177a106.892 106.892 0 0 0-9.253-.058l-11.769-.074c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M388.409 298.264c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444 0-1.901 8.63-3.443 19.274-3.443 10.645 0 19.275 1.542 19.275 3.443z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M387.82 298.264c0 1.782-8.366 3.225-18.686 3.225s-18.686-1.443-18.686-3.224c0-1.781 8.366-3.225 18.686-3.225s18.687 1.444 18.687 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M387.323 298.265c0 1.604-8.143 2.904-18.188 2.904-10.046 0-18.189-1.3-18.189-2.904 0-1.604 8.143-2.904 18.189-2.904 10.045 0 18.188 1.3 18.188 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5y)" d="M372.406 297.846c-.51 0-.907.022-1.195.067a2.814 2.814 0 0 0-.794.238 7.359 7.359 0 0 1-.775.317 7.05 7.05 0 0 1-.98.251c-.386.073-.845.131-1.376.173-.538.043-1.173.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.389l2.42-.133c.363-.173 1.002-.033 1.828-.122.799-.087 1.755-.517 2.886-.517l.016.467-.187.311c-.747 0-1.321.024-1.73.073-.414.05-.659.116-.73.203-.073.088.024.158.297.209.278.051.7.078 1.26.078.52 0 .947-.026 1.277-.076a5.08 5.08 0 0 0 1.004-.267c.327-.122.622-.218.89-.291.261-.072.55-.131.865-.178.31-.047.663-.081 1.057-.105.392-.024.85-.035 1.378-.035.986 0 1.828.044 2.542.136.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.578-.772.153-1.946.232-3.496.232l-.257-.566c.014-.193-.041-.183 0-.388.626-.01 1.502.343 1.825.288.381-.065.518-.156.42-.271-.08-.092-.289-.163-.624-.214a8.433 8.433 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M372.406 297.458c-.51 0-.907.022-1.195.067a2.846 2.846 0 0 0-.794.238 7.26 7.26 0 0 1-.775.318 7.09 7.09 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.043-1.173.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.137-.866-.31-.745-.513h-2.132l.392-.252h2.073c.362-.173.957-.302 1.783-.392.799-.086 1.755-.128 2.886-.128l-.17.39c-.748 0-1.322.023-1.73.072-.415.05-.66.117-.731.203-.073.089.024.159.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.277-.076.326-.05.663-.14 1.004-.266.327-.122.622-.219.89-.292.261-.072.55-.13.865-.178.31-.046.663-.081 1.057-.105.392-.024.85-.035 1.378-.035.986 0 1.828.044 2.542.136.739.095 1.281.232 1.625.416h1.911l.394.253h-1.984c.138.236-.146.432-.884.578-.772.154-1.946.232-3.495.232l-.258-.566c.826 0 1.437-.033 1.825-.1.381-.065.518-.156.42-.271-.08-.092-.289-.163-.624-.214a8.26 8.26 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5z)" d="M377 293.746a106.899 106.899 0 0 0-9.253-.058l-11.768-.074c-.203-.101-3.49 0-3.49 0l-.039 3.444c0 1.902 8.63 3.444 19.274 3.444 10.646 0 19.275-1.542 19.275-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M391 293.834c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444s8.629-3.444 19.274-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M390.41 293.834c0 1.78-8.365 3.224-18.685 3.224-10.32 0-18.687-1.443-18.687-3.224 0-1.781 8.366-3.225 18.687-3.225 10.32 0 18.686 1.443 18.686 3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M389.913 293.834c0 1.603-8.144 2.904-18.189 2.904s-18.188-1.3-18.188-2.904c0-1.604 8.143-2.904 18.188-2.904 10.045 0 18.189 1.3 18.189 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5A)" d="M374.996 293.415c-.511 0-.908.022-1.195.067a2.813 2.813 0 0 0-.794.238 7.219 7.219 0 0 1-.775.317c-.276.095-.603.18-.98.25-.386.074-.845.132-1.376.174-.538.043-1.173.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.625-.136-.866-.31-.745-.512h-2.132v-.389l2.42-.133c.363-.173 1.003-.033 1.828-.122.8-.086 1.755-.517 2.887-.517l.014.467-.185.311c-.748 0-1.323.024-1.73.073-.415.049-.66.116-.731.203-.074.088.024.158.297.209.278.051.7.078 1.26.078.52 0 .947-.026 1.277-.076.326-.05.663-.14 1.004-.267.327-.122.623-.218.89-.292.261-.071.55-.13.866-.177.31-.046.662-.081 1.057-.105.39-.024.849-.035 1.377-.035.986 0 1.828.044 2.542.136.739.095 1.121-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.496.232l-.257-.566c.014-.193-.041-.183 0-.389.627-.009 1.502.344 1.825.289.38-.065.517-.156.42-.271-.08-.093-.288-.164-.624-.214a8.44 8.44 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M374.996 293.027c-.511 0-.908.022-1.195.067a2.821 2.821 0 0 0-.794.238 7.22 7.22 0 0 1-.775.317 7.041 7.041 0 0 1-.98.25c-.386.074-.845.132-1.376.174a24.45 24.45 0 0 1-1.902.064c-1.257 0-2.222-.073-2.874-.215-.625-.137-.866-.31-.745-.512h-2.132l.392-.253h2.073c.361-.173.958-.302 1.783-.39.8-.087 1.755-.13 2.887-.13l-.171.39c-.748 0-1.323.024-1.73.073-.415.049-.66.116-.731.203-.074.088.024.158.297.209.278.051.7.078 1.26.078.52 0 .947-.026 1.278-.077.325-.049.662-.14 1.003-.266.327-.122.623-.218.89-.292.261-.07.55-.13.866-.177.31-.046.662-.081 1.057-.105.39-.024.849-.036 1.377-.036.986 0 1.828.045 2.542.137.739.095 1.282.232 1.625.415h1.911l.394.254h-1.984c.138.236-.146.432-.885.578-.771.153-1.944.232-3.495.232l-.257-.566c.826 0 1.437-.034 1.825-.1.38-.065.517-.156.42-.271-.08-.092-.288-.163-.624-.214a8.405 8.405 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5B)" d="M374.411 288.69a106.363 106.363 0 0 0-9.253-.058l-11.769-.074c-.203-.102-3.489 0-3.489 0l-.04 3.443c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M388.409 288.777c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444s8.63-3.444 19.274-3.444c10.645 0 19.275 1.542 19.275 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M387.82 288.777c0 1.781-8.366 3.225-18.686 3.225s-18.686-1.444-18.686-3.225c0-1.78 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M387.323 288.777c0 1.604-8.143 2.904-18.188 2.904-10.046 0-18.189-1.3-18.189-2.904 0-1.604 8.143-2.904 18.189-2.904 10.045 0 18.188 1.3 18.188 2.904z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5C)" d="M348.626 343.654a106.336 106.336 0 0 0-9.253-.058l-11.77-.073c-.203-.102-3.488 0-3.488 0l-.04 3.444c0 1.902 8.63 3.444 19.274 3.444 10.645 0 19.275-1.542 19.275-3.444v-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M362.624 343.742c0 1.902-8.63 3.445-19.275 3.445-10.645 0-19.274-1.543-19.274-3.445s8.63-3.444 19.274-3.444c10.645 0 19.275 1.542 19.275 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M362.036 343.742c0 1.78-8.366 3.224-18.687 3.224-10.32 0-18.686-1.443-18.686-3.224 0-1.78 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M361.538 343.742c0 1.604-8.144 2.904-18.19 2.904-10.044 0-18.188-1.3-18.188-2.904 0-1.603 8.144-2.903 18.189-2.903 10.046 0 18.189 1.3 18.189 2.903z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5D)" d="M346.62 343.325c-.51 0-.907.021-1.194.066a2.822 2.822 0 0 0-.794.238 7.33 7.33 0 0 1-.775.318 7.101 7.101 0 0 1-.98.25c-.386.074-.845.131-1.376.174a24.41 24.41 0 0 1-1.902.064c-1.256 0-2.222-.074-2.874-.216-.626-.136-.865-.309-.745-.512h-2.132v-.388l2.42-.133c.363-.174 1.003-.033 1.828-.122.799-.087 1.755-.517 2.886-.517l.015.466-.186.312c-.747 0-1.322.024-1.73.072-.414.05-.659.117-.73.204-.074.088.024.158.297.209.278.05.7.077 1.26.077.52 0 .947-.025 1.277-.076a5.11 5.11 0 0 0 1.004-.266c.327-.122.622-.219.89-.292.261-.071.55-.13.866-.178.31-.046.662-.08 1.056-.105.391-.023.85-.035 1.377-.035.987 0 1.828.045 2.543.137.738.095 1.12-.07 1.464.114l2.466.166v.389h-1.984c.138.236-.147.431-.884.578-.772.152-1.946.232-3.496.232l-.257-.567c.014-.192-.042-.182 0-.388.626-.01 1.502.344 1.825.288.381-.064.517-.155.419-.27-.079-.093-.288-.164-.623-.215a8.303 8.303 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M346.62 342.936c-.51 0-.907.022-1.194.067a2.814 2.814 0 0 0-.794.238c-.248.119-.507.225-.775.317a7.103 7.103 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.173.064-1.902.064-1.256 0-2.222-.073-2.874-.215-.626-.136-.865-.31-.745-.513h-2.132l.392-.252h2.073c.362-.173.958-.302 1.783-.391.799-.087 1.755-.129 2.886-.129l-.17.39c-.748 0-1.323.024-1.73.072-.415.05-.66.117-.732.203-.073.089.025.159.298.21.278.051.7.077 1.26.077.52 0 .947-.025 1.277-.076.326-.05.663-.14 1.004-.266.327-.122.622-.218.89-.292.261-.071.55-.13.866-.178.31-.046.662-.08 1.056-.105.391-.023.85-.035 1.377-.035.987 0 1.828.045 2.543.137.738.095 1.281.231 1.625.415h1.911l.394.254h-1.984c.138.236-.147.431-.884.578-.772.152-1.946.232-3.496.232l-.257-.566c.826 0 1.436-.034 1.825-.1.381-.066.517-.157.419-.272-.079-.092-.288-.163-.623-.214a8.482 8.482 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5E)" d="M347.54 338.599a104.606 104.606 0 0 0-9.252-.058l-11.77-.074c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M361.537 338.686c0 1.902-8.629 3.445-19.274 3.445-10.645 0-19.275-1.543-19.275-3.445s8.63-3.444 19.275-3.444c10.646 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M360.95 338.687c0 1.781-8.366 3.224-18.686 3.224s-18.687-1.443-18.687-3.224c0-1.781 8.367-3.225 18.687-3.225s18.686 1.444 18.686 3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M360.452 338.686c0 1.604-8.143 2.904-18.189 2.904-10.045 0-18.188-1.3-18.188-2.904 0-1.603 8.143-2.903 18.188-2.903 10.045 0 18.189 1.3 18.189 2.903z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5F)" d="M345.534 338.268c-.51 0-.907.022-1.194.066a2.82 2.82 0 0 0-.794.238 7.36 7.36 0 0 1-.775.318 7.09 7.09 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.137-.865-.31-.745-.512h-2.132v-.389l2.42-.133c.362-.173 1.002-.033 1.828-.122.799-.086 1.755-.517 2.886-.517l.015.467-.186.31c-.747 0-1.322.025-1.73.073-.414.05-.66.117-.73.204-.074.088.024.158.297.209.278.051.7.077 1.26.077.52 0 .947-.025 1.277-.075a5.05 5.05 0 0 0 1.004-.268c.327-.12.622-.217.89-.29.26-.072.55-.131.865-.178.31-.047.663-.081 1.058-.106.39-.023.849-.035 1.376-.035.987 0 1.828.045 2.542.137.74.095 1.121-.07 1.465.114l2.466.166v.389h-1.984c.138.236-.146.432-.885.578-.771.153-1.945.232-3.495.232l-.257-.566c.013-.193-.042-.183 0-.389.626-.01 1.502.344 1.825.289.38-.066.517-.157.419-.271-.08-.092-.287-.163-.623-.215a8.44 8.44 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M345.534 337.88c-.51 0-.907.021-1.194.066a2.836 2.836 0 0 0-.794.238c-.248.12-.507.226-.775.318a7.09 7.09 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.042-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.137-.865-.31-.745-.513h-2.132l.392-.253h2.072c.362-.173.958-.3 1.784-.39.799-.087 1.755-.13 2.886-.13l-.17.39c-.748 0-1.323.024-1.73.073-.415.05-.66.117-.732.203-.073.089.025.158.298.209.278.052.7.078 1.26.078.52 0 .947-.026 1.277-.076.326-.05.663-.14 1.004-.266.327-.122.622-.219.89-.292.26-.072.55-.13.865-.178.31-.046.663-.081 1.058-.105.39-.024.849-.035 1.376-.035.987 0 1.828.044 2.542.136.74.096 1.282.232 1.626.415h1.911l.394.254h-1.984c.138.236-.146.432-.885.578-.771.153-1.945.233-3.495.233l-.257-.566c.826 0 1.436-.035 1.825-.1.38-.066.517-.157.419-.272-.08-.092-.287-.163-.624-.214a8.438 8.438 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5G)" d="M346.952 333.862a104.023 104.023 0 0 0-5.276-.132c-1.364 0-2.693.026-3.977.074l-11.769-.074c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M360.95 333.95c0 1.902-8.63 3.444-19.274 3.444-10.646 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M360.362 333.95c0 1.78-8.366 3.224-18.686 3.224s-18.687-1.444-18.687-3.225c0-1.78 8.366-3.224 18.687-3.224 10.32 0 18.686 1.443 18.686 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M359.864 333.95c0 1.604-8.144 2.903-18.189 2.903s-18.188-1.3-18.188-2.903 8.143-2.904 18.188-2.904c10.045 0 18.189 1.3 18.189 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5H)" d="M344.946 333.531c-.51 0-.907.022-1.194.067a2.815 2.815 0 0 0-.794.238 7.305 7.305 0 0 1-.775.318 7.067 7.067 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.042-1.174.064-1.902.064-1.256 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.388l2.42-.134c.362-.173 1.002-.033 1.828-.122.799-.086 1.755-.517 2.886-.517l.015.467-.186.311c-.747 0-1.322.024-1.73.073-.414.05-.659.116-.73.203-.074.088.024.158.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.278-.076.325-.05.662-.14 1.003-.267.327-.121.622-.218.89-.291.261-.072.55-.13.865-.178.311-.047.663-.081 1.058-.105.39-.024.849-.035 1.376-.035.987 0 1.828.044 2.543.136.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.578-.772.153-1.946.232-3.495.232l-.258-.566c.014-.192-.042-.182 0-.389.626-.009 1.502.344 1.825.29.381-.066.518-.157.419-.272-.079-.092-.287-.163-.623-.214a8.479 8.479 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M344.946 333.143c-.51 0-.907.022-1.194.067a2.824 2.824 0 0 0-.794.237c-.248.12-.508.226-.775.318-.276.095-.603.18-.98.25-.386.074-.845.132-1.376.174-.538.043-1.174.065-1.902.065-1.256 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.513h-2.132l.392-.252h2.072c.362-.173.958-.302 1.784-.391.799-.087 1.755-.129 2.886-.129l-.17.39c-.748 0-1.323.024-1.73.072-.415.05-.66.117-.732.204-.073.088.025.158.298.209.278.051.7.077 1.26.077.52 0 .947-.025 1.278-.076a5.07 5.07 0 0 0 1.003-.266c.327-.122.622-.218.89-.291.261-.072.55-.131.865-.178.311-.047.663-.082 1.058-.105.39-.024.849-.036 1.376-.036.987 0 1.828.045 2.543.137.739.095 1.281.231 1.625.415h1.911l.394.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.495.232l-.258-.566c.826 0 1.437-.034 1.825-.1.381-.066.518-.157.42-.272-.08-.092-.288-.162-.624-.214a8.45 8.45 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5I)" d="M349.542 329.43a104.605 104.605 0 0 0-9.253-.057l-11.769-.074c-.203-.102-3.489 0-3.489 0l-.04 3.443c0 1.903 8.63 3.445 19.275 3.445 10.645 0 19.274-1.542 19.274-3.445v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M363.54 329.518c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M325.58 329.518c0-1.78 8.365-3.224 18.686-3.224 10.32 0 18.686 1.443 18.686 3.224 0 1.78-8.366 3.225-18.686 3.225s-18.687-1.444-18.687-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M362.454 329.519c0 1.604-8.143 2.903-18.189 2.903-10.045 0-18.188-1.3-18.188-2.903 0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.19 1.3 18.19 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5J)" d="M347.536 329.1c-.51 0-.907.022-1.194.066a2.845 2.845 0 0 0-.794.239 7.329 7.329 0 0 1-.775.317c-.276.095-.602.18-.98.25-.386.074-.845.132-1.376.174-.538.043-1.173.064-1.902.064-1.256 0-2.221-.073-2.874-.215-.626-.136-.866-.31-.745-.512h-2.132v-.389l2.42-.133c.363-.173 1.003-.033 1.828-.122.799-.086 1.755-.517 2.886-.517l.015.467-.186.31c-.747 0-1.322.025-1.73.074-.413.05-.659.116-.73.203-.074.088.024.158.297.209.278.051.7.078 1.26.078.52 0 .947-.026 1.278-.077a5.09 5.09 0 0 0 1.003-.266c.327-.122.622-.219.89-.292.261-.071.55-.13.865-.177.311-.047.663-.081 1.058-.105.39-.024.849-.036 1.377-.036.986 0 1.828.045 2.542.137.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.578-.772.153-1.946.232-3.495.232l-.258-.566c.014-.192-.042-.183 0-.389.626-.009 1.502.344 1.826.289.38-.065.517-.156.418-.271-.079-.092-.288-.164-.623-.215a8.538 8.538 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M347.536 328.712c-.51 0-.907.022-1.194.067a2.845 2.845 0 0 0-.794.238 7.278 7.278 0 0 1-.775.317 7.112 7.112 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.173.065-1.902.065-1.256 0-2.221-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132l.392-.253h2.072c.363-.173.959-.301 1.784-.39.799-.088 1.755-.13 2.886-.13l-.17.39c-.748 0-1.323.024-1.73.073-.414.049-.66.116-.732.203-.073.088.025.158.298.209.278.051.7.078 1.26.078.52 0 .947-.026 1.278-.077.325-.05.662-.14 1.003-.266.327-.122.622-.218.89-.291.261-.072.55-.131.865-.178.311-.047.663-.081 1.058-.105.39-.024.849-.035 1.377-.035.986 0 1.828.044 2.542.136.739.095 1.282.231 1.625.415h1.911l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.826 0 1.437-.034 1.826-.1.38-.065.517-.156.418-.271-.079-.092-.287-.163-.623-.214a8.4 8.4 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5K)" d="M346.952 324.374a106.85 106.85 0 0 0-9.253-.058l-11.769-.073c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M360.95 324.462c0 1.902-8.63 3.445-19.274 3.445-10.646 0-19.275-1.543-19.275-3.445s8.63-3.444 19.275-3.444c10.644 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M360.362 324.462c0 1.781-8.366 3.224-18.686 3.224s-18.687-1.443-18.687-3.224c0-1.78 8.366-3.225 18.687-3.225 10.32 0 18.686 1.445 18.686 3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M359.864 324.462c0 1.604-8.144 2.904-18.189 2.904s-18.188-1.3-18.188-2.904c0-1.603 8.143-2.903 18.188-2.903 10.045 0 18.189 1.3 18.189 2.903z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5L)" d="M344.946 324.044c-.51 0-.907.022-1.194.066a2.824 2.824 0 0 0-.794.238 7.408 7.408 0 0 1-.775.318 7.103 7.103 0 0 1-.98.25c-.386.074-.845.132-1.376.174a24.29 24.29 0 0 1-1.902.065c-1.256 0-2.222-.074-2.874-.217-.626-.135-.866-.309-.745-.511h-2.132v-.389l2.42-.133c.362-.173 1.002-.033 1.828-.122.799-.086 1.755-.517 2.886-.517l.015.466-.186.312c-.747 0-1.322.024-1.73.072-.414.05-.659.117-.73.204-.074.088.024.158.297.209.278.051.7.078 1.26.078.52 0 .947-.026 1.278-.076.325-.05.662-.14 1.003-.267.327-.122.622-.218.89-.292.261-.071.55-.13.865-.178.311-.046.663-.08 1.058-.105.39-.023.849-.035 1.376-.035.987 0 1.828.045 2.543.137.739.095 1.12-.07 1.464.114l2.466.166v.389h-1.984c.138.236-.146.431-.884.578-.772.153-1.946.232-3.495.232l-.258-.566c.014-.193-.042-.183 0-.389.626-.009 1.502.344 1.825.289.381-.065.518-.156.419-.271-.079-.093-.287-.163-.623-.215a8.405 8.405 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M344.946 323.656c-.51 0-.907.022-1.194.067a2.832 2.832 0 0 0-.794.238c-.248.119-.508.225-.775.317a7.103 7.103 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.174.065-1.902.065-1.256 0-2.222-.074-2.874-.216-.626-.136-.866-.31-.745-.512h-2.132l.392-.253h2.072c.362-.173.958-.302 1.784-.391.799-.087 1.755-.129 2.886-.129l-.17.39c-.748 0-1.323.024-1.73.073-.415.049-.66.116-.732.203-.073.088.025.158.298.209.278.051.7.077 1.26.077.52 0 .947-.025 1.278-.075.325-.05.662-.14 1.003-.267a10.6 10.6 0 0 1 .89-.292c.261-.071.55-.13.865-.177.311-.047.663-.082 1.058-.105.39-.024.849-.036 1.376-.036.987 0 1.828.045 2.543.137.739.095 1.281.231 1.625.415h1.911l.394.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.495.232l-.258-.566c.826 0 1.437-.034 1.825-.1.381-.065.518-.157.42-.271-.08-.093-.288-.164-.624-.215a8.382 8.382 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5M)" d="M349.542 320.122a106.348 106.348 0 0 0-9.253-.058l-11.769-.074c-.203-.1-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M363.54 320.21c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.543 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M362.952 320.21c0 1.78-8.367 3.224-18.687 3.224s-18.686-1.443-18.686-3.224c0-1.781 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M362.454 320.21c0 1.604-8.143 2.904-18.189 2.904-10.045 0-18.188-1.3-18.188-2.904 0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.19 1.3 18.19 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5N)" d="M347.536 319.792c-.51 0-.907.022-1.194.067a2.822 2.822 0 0 0-.794.238 7.276 7.276 0 0 1-.775.318c-.276.095-.602.179-.98.25-.386.073-.845.131-1.376.173-.538.043-1.173.065-1.902.065-1.256 0-2.221-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.388l2.42-.133c.363-.174 1.003-.033 1.828-.122.799-.087 1.755-.518 2.886-.518l.015.467-.186.311c-.747 0-1.322.024-1.73.073-.413.05-.659.117-.73.204-.074.088.024.157.298.208.277.052.699.078 1.259.078.52 0 .947-.026 1.278-.076.325-.05.662-.14 1.003-.266.327-.123.622-.219.89-.292.261-.072.55-.13.865-.178.311-.046.663-.08 1.058-.105.39-.024.849-.035 1.377-.035.986 0 1.828.045 2.542.137.739.095 1.12-.07 1.464.114l2.466.166v.388h-1.984c.138.237-.146.432-.884.578-.772.153-1.946.233-3.495.233l-.258-.567c.014-.192-.042-.182 0-.388.626-.01 1.502.344 1.826.288.38-.065.517-.156.418-.271-.079-.092-.288-.163-.623-.214a8.26 8.26 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M347.536 319.404c-.51 0-.907.022-1.194.067a2.837 2.837 0 0 0-.794.238 7.28 7.28 0 0 1-.775.317 7.112 7.112 0 0 1-.98.25c-.386.074-.845.132-1.376.175a24.68 24.68 0 0 1-1.902.064c-1.256 0-2.221-.073-2.874-.216-.626-.137-.866-.31-.745-.512h-2.132l.392-.253h2.072c.363-.173.959-.301 1.784-.39.799-.087 1.755-.13 2.886-.13l-.17.39c-.748 0-1.323.024-1.73.073-.414.049-.66.116-.732.203-.073.088.025.158.299.209.277.051.699.077 1.259.077.52 0 .947-.025 1.278-.075.325-.05.662-.14 1.003-.267.327-.122.622-.218.89-.291.261-.072.55-.13.865-.178.311-.046.663-.081 1.058-.105.39-.024.849-.036 1.377-.036.986 0 1.828.045 2.542.137.739.095 1.282.231 1.625.415h1.911l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.826 0 1.437-.034 1.826-.1.38-.065.517-.156.418-.271-.079-.092-.287-.163-.623-.214a8.438 8.438 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5O)" d="M346.952 315.066a106.32 106.32 0 0 0-9.253-.058l-11.769-.073c-.203-.102-3.489 0-3.489 0l-.04 3.443c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M360.95 315.154c0 1.902-8.63 3.444-19.274 3.444-10.646 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M360.362 315.154c0 1.781-8.366 3.224-18.686 3.224s-18.687-1.443-18.687-3.224c0-1.781 8.366-3.224 18.687-3.224 10.32 0 18.686 1.443 18.686 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M359.864 315.154c0 1.604-8.144 2.904-18.189 2.904s-18.188-1.3-18.188-2.904c0-1.604 8.143-2.904 18.188-2.904 10.045 0 18.189 1.3 18.189 2.904z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g opacity=".2">
                                                    <path fill="#1a2326" d="M363.542 329.518v3.225c0 .627-.949 1.215-2.591 1.723v2.707c0 .18-.077.354-.222.524.26.155.466.319.601.483.138.167.209.334.209.507v3.222c0 .193-.093.383-.264.566.435.196.772.402 1 .614.232.209.35.428.35.653v3.224c0 1.904-8.629 3.444-19.274 3.444-4.604 0-8.828-.29-12.14-.772l.02-1.617a.705.705 0 0 1-.036-.2c0-.07.016-.14.042-.212v-.006h.003c.193-.547 1.096-1.058 2.553-1.508l.029-2.504a.609.609 0 0 1-.036-.2c0-.035.01-.07.016-.103-1.655-.508-2.607-1.1-2.607-1.73l.035-3.022a.753.753 0 0 1-.035-.202c0-.07.016-.142.042-.212v-.007h.003c.193-.547 1.1-1.057 2.556-1.508l.026-2.324a.624.624 0 0 1-.036-.2c0-.035.01-.07.016-.106-1.655-.508-2.607-1.096-2.607-1.726l.035-3.023a.752.752 0 0 1-.035-.202c0-.07.016-.141.042-.212v-.006h.003c.633-1.8 9-3.225 19.23-3.225 3.867 0 7.465.202 10.48.553v1.55c0 .035-.008.07-.015.106.826.254 1.479.527 1.926.816.443.29.68.595.68.91z" />
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5P)" d="M359.938 350.243a106.855 106.855 0 0 0-9.253-.058l-11.77-.073c-.203-.101-3.488 0-3.488 0l-.04 3.444c0 1.902 8.63 3.444 19.274 3.444 10.645 0 19.275-1.542 19.275-3.444v-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M373.936 350.331c0 1.903-8.629 3.445-19.274 3.445-10.645 0-19.275-1.542-19.275-3.445 0-1.902 8.63-3.443 19.275-3.443 10.645 0 19.274 1.541 19.274 3.443z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M373.348 350.332c0 1.78-8.366 3.224-18.686 3.224s-18.687-1.444-18.687-3.224c0-1.78 8.367-3.225 18.687-3.225s18.686 1.444 18.686 3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M372.85 350.331c0 1.604-8.143 2.904-18.19 2.904-10.044 0-18.187-1.3-18.187-2.904 0-1.603 8.143-2.903 18.188-2.903 10.046 0 18.189 1.3 18.189 2.903z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5Q)" d="M357.933 349.913c-.51 0-.908.023-1.195.067a2.814 2.814 0 0 0-.794.238 7.327 7.327 0 0 1-.775.318c-.275.095-.602.18-.98.25-.386.073-.845.132-1.376.174-.538.042-1.173.064-1.902.064-1.256 0-2.222-.073-2.874-.216-.625-.136-.865-.309-.745-.511h-2.132v-.39l2.421-.132c.362-.174 1.002-.033 1.827-.122.8-.087 1.755-.517 2.886-.517l.016.466-.186.311c-.748 0-1.322.025-1.73.073-.415.05-.66.117-.731.204-.073.088.024.158.297.208.278.052.7.078 1.26.078.52 0 .947-.026 1.278-.076.325-.05.662-.14 1.003-.266.327-.122.623-.219.89-.292.262-.071.55-.13.866-.177.31-.047.662-.082 1.056-.106.392-.023.85-.035 1.378-.035.986 0 1.828.045 2.542.136.739.095 1.12-.069 1.464.115l2.466.166v.388h-1.984c.138.236-.146.432-.884.579-.772.153-1.946.232-3.495.232l-.258-.566c.014-.193-.042-.183 0-.389.626-.01 1.502.344 1.825.288.38-.065.517-.156.42-.27-.08-.093-.288-.164-.624-.215a8.439 8.439 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M357.933 349.525c-.51 0-.908.023-1.195.067a2.822 2.822 0 0 0-.794.238 7.434 7.434 0 0 1-.775.318 7.092 7.092 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.042-1.173.064-1.902.064-1.256 0-2.222-.073-2.874-.215-.625-.137-.865-.31-.745-.513h-2.132l.392-.252h2.073c.362-.174.958-.302 1.783-.391.8-.087 1.755-.13 2.886-.13l-.17.39c-.748 0-1.322.024-1.73.073-.415.05-.66.117-.731.203-.073.088.024.159.297.21.278.05.7.077 1.26.077.52 0 .947-.025 1.278-.076.325-.05.662-.14 1.003-.267.327-.121.623-.218.89-.291.262-.071.55-.13.866-.178.31-.046.662-.081 1.056-.105.392-.023.85-.035 1.378-.035.986 0 1.828.045 2.542.136.739.095 1.282.232 1.625.416h1.911l.394.253h-1.984c.138.237-.146.432-.884.578-.772.154-1.946.233-3.495.233l-.258-.567c.826 0 1.437-.034 1.825-.1.381-.065.517-.156.42-.27-.08-.093-.288-.164-.624-.215a8.443 8.443 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5R)" d="M362.529 345.812a106.879 106.879 0 0 0-9.253-.058l-11.77-.073c-.203-.101-3.488 0-3.488 0l-.04 3.444c0 1.902 8.629 3.444 19.274 3.444 10.645 0 19.274-1.542 19.274-3.444V345.9z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M376.527 345.9c0 1.903-8.63 3.445-19.275 3.445-10.645 0-19.274-1.543-19.274-3.444 0-1.902 8.63-3.444 19.274-3.444 10.645 0 19.275 1.542 19.275 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M375.938 345.9c0 1.781-8.366 3.225-18.686 3.225s-18.686-1.444-18.686-3.224c0-1.781 8.366-3.225 18.686-3.225s18.686 1.444 18.686 3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M375.44 345.9c0 1.604-8.143 2.904-18.188 2.904-10.045 0-18.189-1.3-18.189-2.904 0-1.603 8.144-2.903 18.189-2.903s18.188 1.3 18.188 2.903z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5S)" d="M360.523 345.482c-.51 0-.907.022-1.195.066a2.84 2.84 0 0 0-.794.239 7.443 7.443 0 0 1-.774.317 7.15 7.15 0 0 1-.98.251c-.386.073-.845.131-1.376.173-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.875-.216-.625-.136-.865-.31-.744-.513h-2.132v-.388l2.42-.133c.362-.173 1.002-.033 1.828-.122.798-.087 1.754-.517 2.886-.517l.015.466-.186.312c-.747 0-1.322.024-1.73.072-.414.05-.66.117-.731.204-.073.088.024.158.298.209.278.051.699.077 1.26.077.52 0 .947-.025 1.277-.075.326-.05.662-.14 1.003-.267.328-.122.623-.218.891-.291.261-.072.55-.131.865-.178.311-.046.663-.082 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.543.137.738.095 1.12-.07 1.464.114l2.466.166v.389h-1.984c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.257-.566c.013-.193-.042-.183 0-.388.626-.01 1.502.343 1.825.288.38-.065.517-.156.419-.271-.079-.093-.288-.163-.623-.214a8.38 8.38 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M360.523 345.094c-.51 0-.907.022-1.195.067a2.83 2.83 0 0 0-.794.238 7.337 7.337 0 0 1-.774.317 7.048 7.048 0 0 1-.98.25 13.1 13.1 0 0 1-1.376.174c-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.875-.216-.625-.136-.865-.31-.744-.513h-2.132l.391-.251h2.073c.362-.174.958-.303 1.784-.392.798-.086 1.754-.129 2.886-.129l-.171.39c-.747 0-1.322.024-1.73.072-.414.05-.66.117-.731.204-.073.088.024.158.298.209.278.052.699.077 1.26.077.52 0 .947-.025 1.277-.076a5.1 5.1 0 0 0 1.003-.266c.328-.122.623-.218.891-.292.261-.07.55-.13.865-.177.311-.047.663-.082 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.543.137.738.095 1.281.231 1.625.415h1.91l.395.254h-1.984c.138.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.257-.566c.826 0 1.437-.034 1.825-.1.38-.065.517-.157.419-.271-.079-.093-.288-.164-.623-.214a8.486 8.486 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5T)" d="M359.938 340.757a106.317 106.317 0 0 0-9.253-.058l-11.77-.074c-.203-.101-3.488 0-3.488 0l-.04 3.444c0 1.902 8.63 3.444 19.274 3.444 10.645 0 19.275-1.542 19.275-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M373.936 340.845c0 1.902-8.629 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M373.348 340.845c0 1.781-8.366 3.224-18.686 3.224s-18.687-1.443-18.687-3.224c0-1.78 8.367-3.225 18.687-3.225s18.686 1.444 18.686 3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M372.85 340.845c0 1.604-8.143 2.904-18.19 2.904-10.044 0-18.187-1.3-18.187-2.904 0-1.603 8.143-2.904 18.188-2.904 10.046 0 18.189 1.3 18.189 2.904z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5U)" d="M357.933 340.426c-.51 0-.908.022-1.195.067a2.822 2.822 0 0 0-.794.238 7.383 7.383 0 0 1-.775.318 7.124 7.124 0 0 1-.98.25c-.386.073-.845.131-1.376.173-.538.043-1.173.065-1.902.065-1.256 0-2.222-.074-2.874-.216-.625-.136-.865-.309-.745-.512h-2.132v-.389l2.421-.133c.362-.173 1.002-.033 1.827-.122.8-.086 1.755-.517 2.886-.517l.016.467-.186.311c-.748 0-1.322.024-1.73.073-.415.05-.66.116-.731.203-.073.088.024.159.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.278-.076.325-.05.662-.14 1.003-.267.327-.121.623-.218.89-.291.262-.072.55-.13.866-.178.31-.046.662-.081 1.056-.105.392-.023.85-.035 1.378-.035.986 0 1.828.045 2.542.136.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.579-.772.152-1.946.231-3.495.231l-.258-.566c.014-.192-.042-.182 0-.388.626-.01 1.502.343 1.825.288.38-.065.517-.156.42-.27-.08-.093-.288-.164-.624-.215a8.481 8.481 0 0 0-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M357.933 340.038c-.51 0-.908.022-1.195.066a2.814 2.814 0 0 0-.794.238 7.382 7.382 0 0 1-.775.318 7.158 7.158 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.173.064-1.902.064-1.256 0-2.222-.073-2.874-.215-.625-.137-.865-.31-.745-.513h-2.132l.392-.252h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.755-.129 2.886-.129l-.17.39c-.748 0-1.322.024-1.73.072-.415.05-.66.117-.731.204-.073.088.024.158.297.209.278.051.7.077 1.26.077.52 0 .947-.025 1.278-.076.325-.05.662-.14 1.003-.266.327-.122.623-.218.89-.292.262-.072.55-.13.866-.177.31-.046.662-.081 1.056-.106.392-.023.85-.035 1.378-.035.986 0 1.828.045 2.542.137.739.095 1.282.231 1.625.415h1.911l.394.254h-1.984c.138.236-.146.431-.884.578-.772.153-1.946.232-3.495.232l-.258-.566c.826 0 1.437-.034 1.825-.1.381-.066.517-.157.42-.271-.08-.092-.288-.164-.624-.215a8.443 8.443 0 0 0-1.23-.074z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5V)" d="M362.529 336.505a106.33 106.33 0 0 0-9.253-.058l-11.77-.074c-.203-.101-3.488 0-3.488 0l-.04 3.444c0 1.902 8.629 3.444 19.274 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M376.527 336.592c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444s8.63-3.443 19.274-3.443c10.645 0 19.275 1.541 19.275 3.443z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M375.938 336.592c0 1.781-8.366 3.225-18.686 3.225s-18.686-1.444-18.686-3.225c0-1.78 8.366-3.224 18.686-3.224s18.686 1.444 18.686 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M339.063 336.593c0-1.604 8.143-2.904 18.189-2.904 10.045 0 18.188 1.3 18.188 2.904 0 1.603-8.143 2.903-18.188 2.903-10.046 0-18.189-1.3-18.189-2.903z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="url(#kzk5W)" d="M360.523 336.174c-.51 0-.908.023-1.195.067a2.84 2.84 0 0 0-.793.238c-.249.119-.508.225-.776.318-.275.094-.602.179-.98.25-.386.073-.844.131-1.375.173-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.388l2.42-.134c.362-.173 1.002-.032 1.827-.122.8-.086 1.755-.517 2.887-.517l.015.467-.186.311c-.747 0-1.322.024-1.73.073-.414.05-.66.117-.731.203-.073.088.024.158.298.21.277.05.699.077 1.26.077.52 0 .946-.026 1.277-.076.325-.05.662-.14 1.003-.266.327-.122.623-.219.891-.292.26-.071.55-.13.865-.177.311-.047.663-.082 1.057-.106.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.138.74.094 1.121-.07 1.465.113l2.466.167v.389h-1.984c.138.235-.147.432-.884.577-.772.154-1.946.233-3.496.233l-.258-.567c.014-.192-.04-.182 0-.388.627-.01 1.503.344 1.826.288.38-.065.517-.156.419-.271-.08-.092-.288-.163-.623-.214-.33-.05-.74-.075-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path fill="#fa9351" d="M360.523 335.786c-.51 0-.908.022-1.195.067a2.824 2.824 0 0 0-.793.238 7.276 7.276 0 0 1-.776.317c-.275.095-.602.18-.98.25-.386.074-.844.132-1.375.174a24.3 24.3 0 0 1-1.902.065c-1.257 0-2.222-.074-2.874-.216-.626-.137-.866-.31-.745-.513h-2.132l.391-.252h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.755-.129 2.887-.129l-.171.39c-.747 0-1.322.024-1.73.072-.414.05-.66.117-.731.204-.073.088.024.158.298.209.277.051.699.077 1.26.077.52 0 .946-.026 1.277-.076.325-.05.662-.14 1.003-.266.327-.122.623-.218.891-.292.26-.071.55-.13.865-.177.311-.046.663-.081 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.282.23 1.626.415h1.91l.395.253h-1.984c.138.237-.147.433-.884.579-.772.153-1.946.231-3.496.231l-.258-.565c.827 0 1.437-.034 1.826-.1.38-.066.517-.156.419-.272-.08-.092-.288-.163-.623-.213-.33-.05-.74-.075-1.23-.075z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5X)" d="M359.938 331.448a104.615 104.615 0 0 0-5.277-.13c-1.363 0-2.692.024-3.976.073l-11.77-.074c-.203-.101-3.488 0-3.488 0l-.04 3.444c0 1.902 8.63 3.444 19.274 3.444 10.645 0 19.275-1.542 19.275-3.444v-3.225z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M373.936 331.536c0 1.902-8.629 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#ffc148" d="M373.348 331.536c0 1.78-8.366 3.225-18.686 3.225s-18.687-1.444-18.687-3.225c0-1.78 8.367-3.224 18.687-3.224s18.686 1.443 18.686 3.224z" />
                                                        </g>
                                                        <g>
                                                            <path fill="#fbe034" d="M372.85 331.536c0 1.604-8.143 2.904-18.19 2.904-10.044 0-18.187-1.3-18.187-2.904 0-1.603 8.143-2.904 18.188-2.904 10.046 0 18.189 1.301 18.189 2.904z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5Y)" d="M317.057 337.772c.243-1.351.54-2.774.891-4.244.263-1.094.542-2.161.834-3.19l2.194-9.456c-.055-.167.671-2.801.671-2.801l3.227.126c1.778.087 1.56 7.088-.487 15.637-2.047 8.55-5.147 15.41-6.926 15.322l-3.014-.148z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M314.447 349.018c1.778.087 4.879-6.772 6.925-15.322 2.047-8.55 2.266-15.55.488-15.638-1.778-.087-4.88 6.773-6.926 15.322-2.047 8.55-2.265 15.55-.487 15.638z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M314.56 348.546c1.665.082 4.623-6.571 6.608-14.86 1.984-8.288 2.243-15.073.579-15.155-1.665-.082-4.623 6.571-6.608 14.86-1.984 8.288-2.243 15.074-.579 15.155z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M314.656 348.146c1.499.074 4.28-6.406 6.211-14.474 1.932-8.068 2.283-14.667.784-14.741-1.5-.074-4.28 6.406-6.212 14.474-1.931 8.068-2.282 14.668-.783 14.741z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg></div-->
                        <p class="clr40 fs-mob-20 fs-ach-20 mx-469 lh-27 mx-555">Create wealth and ensure financial protection for your family with<span class="ban-bld"><b>Kotak e-Invest</b></span></p>
                        <div class="roww">
                            <div class="coll-md-8 mr-20 mr-mob-0 w-mob-ban-100"><a href="ulip-plans/kotak-e-invest" target="_blank" class="want-to-knw banner-knw cat-knw gsp-knw" title="View Kotak e-Invest">View Kotak e-Invest</a></div>
                            <div class="coll-md-4 mr-mob-0 w-mob-ban-100"><a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=headbanner" target="_blank" class="in-buy banner-buy" title="Invest In ULIP">Invest In ULIP</a></div>
                        </div>
                    </div>
                    <div class="coll-md-5 w-term-45 my-auto rem-mob-myauto w-mob-100 d-none d-md-block"><svg xmlns="http://www.w3.org/2000/svg" class="ulipmobbanner" width="391" height="357" viewBox="0 0 391 357">
                            <defs>
                                <linearGradient id="kzk5a" x1="247.43" x2="257.77" y1="260.21" y2="258.77" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#f77c74" />
                                    <stop offset="1" stop-color="#cc542c" />
                                </linearGradient>
                                <linearGradient id="kzk5b" x1="256.93" x2="256.93" y1="290.13" y2="318.03" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#f77c74" />
                                    <stop offset="1" stop-color="#cc542c" />
                                </linearGradient>
                                <linearGradient id="kzk5c" x1="286.71" x2="271.1" y1="266.66" y2="265.97" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#f77c74" />
                                    <stop offset="1" stop-color="#cc542c" />
                                </linearGradient>
                                <radialGradient id="kzk5d" cx="348.35" cy="339.76" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5e" cx="361.39" cy="341.73" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5f" cx="350.94" cy="335.33" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5g" cx="363.98" cy="337.3" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5h" cx="348.35" cy="330.27" r="53.09" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5i" cx="361.39" cy="332.22" r="20.67" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5j" cx="350.94" cy="326.02" r="53.09" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5k" cx="363.98" cy="327.99" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5l" cx="348.35" cy="320.97" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5m" cx="361.39" cy="322.91" r="20.67" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5n" cx="348.35" cy="315.26" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5o" cx="361.39" cy="317.23" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5p" cx="350.94" cy="310.83" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5q" cx="363.98" cy="312.8" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5r" cx="348.35" cy="305.77" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5s" cx="361.39" cy="307.74" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5t" cx="350.94" cy="301.52" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5u" cx="363.98" cy="303.49" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5v" cx="348.35" cy="296.46" r="53.09" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5w" cx="361.39" cy="298.41" r="20.67" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5x" cx="352.03" cy="292.34" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5y" cx="365.06" cy="294.31" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5z" cx="354.62" cy="287.91" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5A" cx="367.65" cy="289.88" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5B" cx="352.03" cy="282.85" r="53.09" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5C" cx="326.25" cy="337.82" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5D" cx="339.28" cy="339.79" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5E" cx="325.16" cy="332.76" r="53.09" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5F" cx="338.19" cy="334.73" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5G" cx="324.57" cy="328.03" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5H" cx="337.6" cy="329.97" r="20.67" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5I" cx="327.16" cy="323.59" r="53.09" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5J" cx="340.19" cy="325.54" r="20.67" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5K" cx="324.57" cy="318.54" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5L" cx="337.6" cy="320.51" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5M" cx="327.16" cy="314.29" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5N" cx="340.19" cy="316.23" r="20.67" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5O" cx="324.57" cy="309.23" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5P" cx="337.56" cy="344.41" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5Q" cx="350.59" cy="346.38" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5R" cx="340.15" cy="339.98" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5S" cx="353.18" cy="341.93" r="20.67" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5T" cx="337.56" cy="334.92" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5U" cx="350.59" cy="336.89" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5V" cx="340.15" cy="330.67" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5W" cx="353.18" cy="332.64" r="20.57" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5X" cx="337.56" cy="325.61" r="53.02" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                                <radialGradient id="kzk5Y" cx="315.91" cy="319.53" r="49.64" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fbe034" />
                                    <stop offset=".15" stop-color="#fac63e" />
                                    <stop offset=".32" stop-color="#f8af46" />
                                    <stop offset=".5" stop-color="#f89f4c" />
                                    <stop offset=".71" stop-color="#f79650" />
                                    <stop offset="1" stop-color="#f79351" />
                                </radialGradient>
                            </defs>
                            <g>
                                <g>
                                    <g>
                                        <path fill="#f2f2f2" d="M0 178.5C0 79.917 79.917 0 178.5 0S357 79.917 357 178.5 277.083 357 178.5 357 0 277.083 0 178.5z" />
                                    </g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path fill="#e5e5e5" d="M83.668 343.706c0-1.848 24.644-3.347 55.043-3.347 30.4 0 55.043 1.499 55.043 3.347 0 1.848-24.643 3.346-55.043 3.346s-55.043-1.498-55.043-3.346z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#8e8e8e" d="M267.791 337.535c2.65-1.135 3.73-4.642 2.454-7.974l-42.134-110.208-17.396 7.455 49.572 106.928c1.515 3.265 4.831 4.944 7.504 3.8z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#676767" d="M166.58 337.75c2.657 1.116 5.93-.546 7.44-3.777l49.936-106.9-17.452-7.324-42.408 109.966c-1.295 3.36-.197 6.91 2.484 8.035z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M194.568 32.864s-3.214 2.3-4.773 10.211c-.767 3.89.493 11.804.493 11.804s-10.566 15.946-8.961 24.99c1.604 9.042 19.289 3.574 19.289 3.574l5.9-14.201-5.283-13.162z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#8e8e8e" d="M250.343 78.094s45.827 23.283 38.592 86.526c-6.645 58.09-60.19 77.29-100.062 63.62-39.874-13.668-26.82-53.764-26.82-53.764z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ffb192" d="M139.405 63.162l-2.071 10.014 13.223-.977.002-4.966z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ffb192" d="M163.719 96.113l-5.336-22.66-20.59 1.73s-12.627 52.406 6.867 61.387c18.008 8.295 32.548-8.664 32.548-8.664z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fff" d="M166.324 138.81h-62.259l-17.78-40.22h59.804a3.77 3.77 0 0 1 3.448 2.245z" />
                                                    </g>
                                                </g>
                                                <g opacity=".36">
                                                    <g opacity=".36">
                                                        <path fill="#fff" d="M184.206 197.69c0-3.897 14.032-7.055 31.341-7.055 17.31 0 31.342 3.158 31.342 7.055 0 3.896-14.032 7.055-31.342 7.055-17.309 0-31.341-3.159-31.341-7.055z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#8e8e8e" d="M160.847 138.81h-62.26L82.72 102.915c-.901-2.036.591-4.325 2.817-4.325h57.53z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fff" d="M127.075 119.097a5.288 5.288 0 1 1-10.572.002 5.288 5.288 0 0 1 10.572-.002z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M224.34 39.55s5.355-.942 10.94 4.057c5.584 5 4.521 12.869 4.521 12.869s9.458 2.775 12.75 13.156c3.293 10.38-4.61 15.072-4.61 15.072l-27.943-1.866-8.713-34.247 7.272-10.576z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ffa98f" d="M146.304 289.418l-1.599 23.888h30.255v-23.888z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ffa98f" d="M85.464 221.743l-16.366 17.479 23.62 19.303 15.118-18.499z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#d6d6d6" d="M271.01 191.929a.488.488 0 0 0 .369-.166c9.194-10.343 9.34-28.767 9.34-28.952a.492.492 0 1 0-.986 0c0 .181-.148 18.236-9.092 28.298a.491.491 0 0 0 .369.82z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#263238" d="M135.194 228.188v63.958h51.69l9.638-88.262-41.178-4.609z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#263238" d="M72.945 212.563s42.053-49.939 67.461-57.824c25.408-7.885 104.26-5.257 104.26-5.257s7.885 36.797-13.143 46.435c-21.028 9.638-61.613 7.885-68.479 11.39-6.868 3.505-48.92 44.683-48.92 44.683z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ff3035" d="M258.368 111.58s-3.929-39.504-23.525-44.347c-19.599-4.843-33.205-.757-44.175 3.919-10.603 4.52-25.307 21.528-25.307 21.528l8.449 37.602 10.885-2.044-.18 14.367 57.718 1.54 7.327-30.112z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#1e4679" d="M84.372 155.603h179.736a4.874 4.874 0 0 0 0-9.746H84.372a4.872 4.872 0 1 0 0 9.746z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ffb192" d="M253.314 118.575s3.962 17.223-.491 26.224c-6.35 12.831-59.51 6.005-59.51 6.005l-3.597-15.004 29.942-9.27-.099-.602s11.8-3.109 33.755-7.353z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path fill="#ffb192" d="M216.348 54.877l1.707 12.405s-1.747 3.874-8.922 5.463c-5.346 1.183-7.414.223-7.414.223l-.11-6.387-.101-6.23 12.707-4.685z" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path d="M214.185 55.668c.016.343-.06.76-.195 1.246-1.922 6.578-9.329 8.959-12.412 9.669l-.1-6.23z" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path fill="#ffb192" d="M194.873 32.458s-4.37 16.45-.613 24.737c3.757 8.287 11.438 5.715 15.902 3.316 4.465-2.4 6.212-5.63 6.212-5.63s4.64.818 6.96-3.736c2.32-4.553-.218-8.985-2.901-9.677-2.685-.692-5.4 1.585-5.4 1.585l1.66-4.84c-.004-.001-13.37-21.254-21.82-5.755z" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M198.323 51.938a.494.494 0 0 0 .442-.712c-1.33-2.689.297-6.1.315-6.134a.492.492 0 1 0-.885-.432c-.077.156-1.86 3.875-.314 7.004.085.173.26.274.442.274z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M216.816 50.174a.494.494 0 0 0 .408-.215l3.474-5.104a.492.492 0 1 0-.814-.554l-3.474 5.104a.492.492 0 0 0 .406.769z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M218.1 48.301l2.97-.026a.493.493 0 0 0-.005-.985l-2.969.025a.493.493 0 0 0 .004.986z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M206.205 52.606c-.242.631-.682 1.421-1.449 1.971-.814.586-1.79.345-2.446.054zm-2.59 3.32c.562 0 1.155-.144 1.717-.546 1.816-1.305 2.121-3.574 2.135-3.669a.491.491 0 0 0-.716-.499l-5.7 2.967a.492.492 0 0 0-.068.832c.07.051 1.258.915 2.632.915z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M206.246 39.146a.496.496 0 0 0 .291-.094.496.496 0 0 0 .107-.69c-1.337-1.816-4.562-1.102-4.698-1.069a.495.495 0 0 0-.37.59.488.488 0 0 0 .59.37c.754-.171 2.893-.382 3.681.692a.491.491 0 0 0 .399.201z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M193.994 39.274a.49.49 0 0 0 .42-.234c.077-.12.773-1.138 2.24-.517a.494.494 0 0 0 .384-.909c-1.83-.772-3.067.257-3.464.91a.495.495 0 0 0 .42.75z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#565656" d="M136.755 231.417a.498.498 0 0 0 .362-.158c.2-.214 19.845-21.455 26.086-22.853 6.362-1.425 32.777-3.755 33.043-3.779a.493.493 0 0 0 .448-.534.505.505 0 0 0-.535-.447c-1.088.094-26.746 2.357-33.172 3.796-6.541 1.467-25.78 22.264-26.595 23.15a.492.492 0 0 0 .363.825z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#565656" d="M160.067 195.103c.071 0 .118.024.148.041 1.163.602 1.924 5.622 2.2 9.857-2.188-3.73-4.331-8.68-2.66-9.78.139-.092.239-.118.312-.118zm2.935 12.273a.495.495 0 0 0 .493-.51c-.061-1.89-.485-11.387-2.825-12.6-.321-.168-.832-.283-1.453.125-3.374 2.222 2.673 11.686 3.373 12.759a.485.485 0 0 0 .412.226z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#565656" d="M125.573 241.894a.494.494 0 0 0 .349-.842L95.56 210.586a.493.493 0 1 0-.7.696l30.363 30.466a.49.49 0 0 0 .351.146z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#565656" d="M150.266 283.755h36.66a.493.493 0 0 0 0-.986h-36.66a.493.493 0 0 0 0 .986z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path fill="#1e4679" d="M137.766 307.554s1.818-9.959 6.545-10.434c4.725-.475 11.498 10.434 11.498 10.434s18.463-1.423 19.768 0c1.305 1.423 1.305 32.723 0 33.196-1.305.475-77.881.475-81.362 0-3.482-.475 1.498-16.598 8.364-19.444 6.864-2.845 14.256-2.855 14.256-2.855z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path fill="#1e4679" d="M68.167 230.672s7.513-6.775 11.44-4.323c3.926 2.452 2.444 15.116 2.444 15.116s15.082 9.923 15.214 11.827c.132 1.905-19.08 26.617-20.375 26.208-1.295-.406-60.227-46.22-62.614-48.676-2.387-2.457 11.341-12.208 18.37-10.348 7.03 1.861 12.725 6.277 12.725 6.277z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M187.455 145.658H99.553a2.54 2.54 0 1 1 0-5.082h87.902a2.54 2.54 0 1 1 0 5.082z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ffb192" d="M188.983 136.776s-8.618 1.354-13.824 2.9c-5.206 1.547-13.287 3.335-16.699 2.44-3.412-.895-3.771.536-2.872 2.527.897 1.991 4.847 3.052 4.847 3.052s-4.13 16.535-2.513 17.887c1.616 1.355 6.284-3.867 6.284-3.867s.897 1.16 2.155 1.354c1.258.193 3.051-.58 3.051-.58s.478 1.548 2.664 1.934c2.184.387 3.62-.772 3.62-.772s1.259 2.767 2.694 2.156c1.437-.611 7.9-2.545 7.54-4.477-.359-1.933-5.746-1.547-5.746-1.547l-.718-3.286s5.567 4.254 10.773 1.354c5.206-2.9 4.656-10.154 4.656-10.154z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M164.044 162.495a.493.493 0 0 0 .379-.808c-3.817-4.583 1.113-13.507 1.164-13.596a.493.493 0 0 0-.86-.483c-.218.39-5.312 9.608-1.06 14.712a.485.485 0 0 0 .377.175z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M169.305 163.532a.492.492 0 0 0 .386-.8c-2.29-2.876-.573-7.318-.558-7.36a.493.493 0 0 0-.916-.366c-.081.203-1.946 5.015.703 8.339.097.124.241.187.385.187z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M175.658 164.796a.494.494 0 0 0 .308-.88c-2.452-1.965-2.12-6.288-2.115-6.331a.492.492 0 0 0-.45-.532c-.234-.016-.508.175-.532.449-.018.2-.384 4.889 2.482 7.187.09.071.199.107.307.107z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#1e4679" d="M128.192 69.494V40.331h22.305v29.163z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fff" d="M150.495 40.333c0 .708-4.994 1.281-11.152 1.281-6.158 0-11.151-.573-11.151-1.281s4.993-1.281 11.151-1.281c6.158-.002 11.152.571 11.152 1.281z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path fill="#40507f" d="M157.002 56.464c0 4.851-2.855 8.798-6.366 8.798-3.509 0-6.365-3.947-6.365-8.798s2.856-8.798 6.365-8.798c3.511-.002 6.366 3.947 6.366 8.798zm1.97 0c0-5.94-3.737-10.77-8.336-10.77-4.597 0-8.336 4.833-8.336 10.77 0 5.94 3.74 10.77 8.336 10.77 4.6 0 8.337-4.83 8.337-10.77z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ffb192" d="M158.365 70.022s1.995-12.667 1.04-15.107c-1.296-3.31-8.728-3.31-8.728-3.31v8.492s-4.01 4.978-2.201 13.026c1.807 8.051 9.89-3.1 9.89-3.1z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ffb192" d="M142.462 52.322c-.702-.95-1.671-1.662-2.734-2.182-3.594-1.756-14.534-4.895-17.13-1.553-2.486 3.201 3.536 5.133 3.536 5.133s-5.165-.586-4.36 3.071c.672 3.054 3.988 3.588 3.988 3.588s-5.431-.095-2.835 4.03c2.596 4.123 14.142 6.384 18.151 5.647 4.01-.737.351-5.585.351-5.585s4.219-1.366 3.852-3.763c-.388-2.539-3.936-2.984-3.936-2.984s3.644-1.98 1.117-5.402z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fff" d="M140.035 58.102a.494.494 0 0 0 .134-.968l-13.895-3.889a.49.49 0 0 0-.607.341.494.494 0 0 0 .34.607l13.896 3.89c.044.013.089.02.132.02z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fff" d="M139.754 64.603a.494.494 0 0 0 .128-.97l-13.99-3.731a.493.493 0 1 0-.254.952l13.99 3.732a.464.464 0 0 0 .126.017z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#fff" d="M148.423 73.618a.492.492 0 0 0 .463-.66c-2.184-6.036 2.103-12.52 2.147-12.583a.494.494 0 0 0-.818-.55c-.19.282-4.615 6.957-2.258 13.47.075.199.265.323.466.323z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ff5458" d="M202.889 73.854c1.685 0 4.185-.199 7.629-.946 7.327-1.59 9.235-6.186 9.312-6.379a.491.491 0 0 0-.274-.639.491.491 0 0 0-.64.273c-.018.04-1.822 4.309-8.607 5.783-6.902 1.5-9.894.712-9.925.706a.493.493 0 0 0-.268.948c.066.018.936.254 2.773.254z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M204.442 45.076a.496.496 0 0 0 .493-.509l-.094-2.93a.486.486 0 0 0-.144-.33l-1.422-1.431a.493.493 0 1 0-.7.696l1.284 1.293.087 2.734a.501.501 0 0 0 .496.477z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M195.717 45.758a.494.494 0 0 0 .493-.499l-.04-2.93a.49.49 0 0 0-.12-.314l-1.246-1.451a.493.493 0 1 0-.747.645l1.13 1.314.037 2.752a.492.492 0 0 0 .493.483z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M215.108 45.478s-4.934-1.918-7.217-5.255c-2.285-3.34-2.202-6.785-2.202-6.785s-2.644 2.351-6.858 2.3c-4.217-.051-7.105-3.943-6.744-7.27.18-1.658 3.192-1.445 3.192-1.445s2.52-4.327 7.851-4.335c5.33-.006 7.073 2.896 7.073 2.896s4.199-.629 7.653 1.234c3.453 1.86 4.098 6.608 4.098 6.608s2.661.978 3.07 3.473c.407 2.496-1.434 7.57-1.434 7.57s-4.325-4.767-8.482 1.01z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ff5458" d="M184.655 134.65c.272 0 .492-.22.492-.492v-13.28a.48.48 0 0 0-.025-.158c-.02-.056-1.914-5.743-2.622-13.914-.7-8.076 5.22-17.619 5.28-17.716a.495.495 0 0 0-.837-.524c-.252.402-6.154 9.922-5.427 18.323.673 7.773 2.411 13.344 2.644 14.065v13.202a.495.495 0 0 0 .495.495z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#ff5458" d="M218.52 114.093c.464.42.598 4.31.434 8.425-.956-3.367-1.64-7.343-.536-8.35.067-.064.102-.075.102-.075zm.777 11.618c.298-.037.475-.224.49-.457.3-4.19.577-11.327-.935-12.058-.203-.095-.617-.197-1.102.244-2.344 2.143.723 10.949 1.08 11.946a.505.505 0 0 0 .467.325z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#8e8e8e" d="M212.777 340.078l1.001-.44a3.252 3.252 0 0 0 1.672-4.287l-76.468-174.27-6.96 3.053 76.467 174.27a3.255 3.255 0 0 0 4.288 1.674z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path fill="#fea7a7" d="M262.888 262.111c.166-.213.26-.473.355-.733.402-1.16.994-2.272 1.727-3.265.166-.213.332-.426.426-.687.237-.615-.047-1.3-.378-1.892-1.775-3.005-4.992-4.85-8.281-6.057-2.224-.804-4.566-1.396-6.932-1.301-.946.047-1.916.213-2.673.733-.758.545-1.23 1.396-1.467 2.319-.237.899-.237 1.845-.213 2.768.07 2.65.355 5.347 1.372 7.784.284.662.615 1.325 1.112 1.821.497.521 1.207.876 1.916.828.734-.023 1.373-.449 2.011-.804a13.767 13.767 0 0 1 5.773-1.656c.946-.047 1.964-.047 2.91.19.757.236 1.727.685 2.342-.048z" />
                                        </g>
                                        <g>
                                            <path fill="url(#kzk5a)" d="M255.057 264.548c-2.484 1.467-3.288 3.62-4.802 6.624-1.586-1.443-2.508-3.549-3.289-5.536-1.562-4.022-3.123-8.328-2.248-12.563.355-1.75 1.325-3.572 3.005-4.164 1.254-.45 2.65-.118 3.856.473 2.46 1.16 4.33 3.265 6.128 5.3.946 1.088 1.916 2.153 2.744 3.312.616.852 2.532 2.887 2.461 3.999-.095 1.159-2.626.567-3.596.733-1.562.213-2.91 1.041-4.259 1.822z" />
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#fa8780" d="M297.454 351.257c-7.784-.378-10.434-2.791-10.718-4.731l-1.443-15.284c0-.946 2.2-.994 3.147-.994h19.21c.947 0 2.556.734 2.556 1.68l-.852 14.598c-.118 2.531-5.796 5.015-11.9 4.731z" />
                                            </g>
                                            <g>
                                                <path fill="#fa8780" d="M339.756 344.728c7.287-1.136 9.534-3.667 9.63-5.537l1.702-26.758c-.094-.899-3.832-2.886-4.731-2.791l-18.336 16.3c-.899.095-2.342.947-2.248 1.846l2.248 13.675c.426 2.39 6.01 4.164 11.735 3.265z" />
                                            </g>
                                            <g>
                                                <path fill="#fa8780" d="M272.139 343.332c-7.05-.331-9.44-2.532-9.724-4.283l-1.301-13.864c0-.851 2.01-.899 2.863-.899h17.412c.852 0 2.32.663 2.32 1.514l-.782 13.25c-.118 2.294-5.252 4.542-10.788 4.282z" />
                                            </g>
                                            <g>
                                                <path fill="#f0756e" d="M307.65 330.225h-.85l-.829 14.313c-.142 2.555-5.796 5.04-11.924 4.732-2.744-.142-4.826-.52-6.412-1.04 1.325 1.442 4.259 2.743 9.819 3.004 6.104.307 11.782-2.2 11.924-4.732l.852-14.597c-.024-.947-1.633-1.68-2.58-1.68z" />
                                            </g>
                                            <g>
                                                <path fill="#f0756e" d="M346.38 309.642l-.165.141c.78.497 1.372 1.018 1.396 1.373l-1.68 26.758c-.095 1.869-2.342 4.4-9.63 5.536-2.389.379-4.755.284-6.718-.118 2.105 1.325 6.127 2.034 10.197 1.42 7.286-1.136 9.534-3.668 9.629-5.537l1.703-26.758c-.094-.9-3.833-2.91-4.732-2.815z" />
                                            </g>
                                            <g>
                                                <path fill="#f0756e" d="M281.39 324.263h-1.728l-.71 12.279c-.118 2.295-5.252 4.566-10.811 4.282-2.2-.118-3.951-.402-5.324-.804.923 1.49 3.597 3.004 9.346 3.288 5.536.26 10.693-1.987 10.812-4.282l.78-13.249c-.047-.852-1.514-1.514-2.365-1.514z" />
                                            </g>
                                            <g>
                                                <path fill="#fa8780" d="M316.263 341.51c-6.578-.331-8.825-2.531-9.062-4.282l-1.23-13.864c0-.852 1.87-.9 2.674-.9h16.253c.804 0 2.177.663 2.177 1.515l-.71 13.249c-.142 2.295-4.945 4.542-10.102 4.282z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#fa8780" d="M362.374 291.424c0 26.877-13.084 47.98-59.928 48.95-38.493.781-58.674-21.813-58.674-48.69 0-26.876 28.65-50.275 61.087-50.18 42.468.166 57.515 23.044 57.515 49.92z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#f0756e" d="M333.084 278.152c-.946.686-1.443 1.821-1.632 2.957-.45 2.673.567 5.347 1.159 7.997.591 2.65.639 5.772-1.278 7.689-1.75 1.727-4.519 1.916-6.506 3.336-2.319 1.68-3.17 4.968-2.295 7.689.852 2.72 3.194 4.826 5.891 5.82 2.674.993 5.655.97 8.446.355 1.751-.379 3.502-1.018 4.756-2.272 1.656-1.656 2.176-4.092 3.028-6.293a19.71 19.71 0 0 1 3.975-6.293c1.396-1.467 3.004-2.744 4.211-4.377 3.052-4.187 2.697-10.173.308-14.763-.592-1.136-1.325-2.248-2.366-2.957-2.224-1.49-5.158-.876-7.76-.213-1.822.473-3.242.733-5.087.662-1.632-.047-3.454-.331-4.85.663z" />
                                            </g>
                                            <g>
                                                <path fill="#f0756e" d="M310.277 315.864c-2.91.615-5.725 2.39-6.814 5.157-.544 1.42-.52 3.218.592 4.212.946.851 2.342.899 3.596.899h9.156c.71 0 1.443 0 2.082-.308 1.703-.804 1.94-3.147 3.099-4.637.71-.923 1.893-1.703 1.75-2.863-.094-.804-.827-1.396-1.537-1.774-3.005-1.585-8.683-1.372-11.924-.686z" />
                                            </g>
                                            <g>
                                                <path fill="#f0756e" d="M314.086 305.43c-.331-.118-.686-.213-1.041-.189-1.278.142-1.845 1.75-2.981 2.342-.639.331-1.514.426-1.798 1.089-.166.402-.024.875.237 1.23.686.993 2.01 1.348 3.217 1.301 1.207-.047 2.366-.45 3.549-.662 1.183-.213 2.484-.213 3.501.473.379.26.9.615 1.254.307a.674.674 0 0 0 .19-.33c.378-1.018-.071-2.201-.852-2.91-.852-.758-1.846-.734-2.815-1.16-.876-.402-1.538-1.136-2.461-1.49z" />
                                            </g>
                                            <g>
                                                <path fill="#f0756e" d="M352.84 271.125c-.687-.19-1.42-.355-2.083-.118-.662.236-1.135 1.112-.733 1.68.45.638 1.49.402 2.105.899.355.26.497.71.781 1.064.284.331.852.52 1.136.19a7.75 7.75 0 0 1 .236-3.124c.071-.236.142-.496-.047-.71a.644.644 0 0 0-.497-.212c-.378 0-.686.213-.97.426" />
                                            </g>
                                            <g>
                                                <path fill="#f0756e" d="M327.855 318.372c-.378.591-.757 1.254-.733 1.94.024.686.71 1.42 1.396 1.183.733-.237.828-1.302 1.49-1.751.355-.26.828-.26 1.23-.426.403-.166.758-.662.521-1.017a7.6 7.6 0 0 1-2.91-1.16c-.142-.094-.284-.213-.473-.213-.308-.023-.568.284-.615.592-.047.307.047.615.165.9" />
                                            </g>
                                            <g>
                                                <path fill="#f0756e" d="M298.779 323.766c-.52.095-1.065.213-1.396.615-.331.402-.284 1.136.213 1.301.142.048.284.024.426.071.355.095.662.544 1.017.426.45-.142.284-.828.497-1.254.07-.142.213-.26.26-.402.142-.379-.402-.804-.733-.568" />
                                            </g>
                                            <g>
                                                <path fill="#f0756e" d="M327.643 291.14c-.52.095-1.065.213-1.396.615-.331.403-.284 1.136.213 1.302.142.047.284.023.426.07.354.095.662.545 1.017.427.45-.142.284-.829.497-1.254.07-.142.213-.26.26-.403.142-.378-.402-.804-.734-.567" />
                                            </g>
                                        </g>
                                        <g>
                                            <path fill="#f0756e" d="M272.541 296.771c0-2.247 1.706-4.07 3.81-4.07 2.103 0 3.808 1.823 3.808 4.07 0 2.248-1.705 4.07-3.809 4.07-2.103 0-3.809-1.822-3.809-4.07z" />
                                        </g>
                                        <g>
                                            <path fill="url(#kzk5b)" d="M253.377 290.194c-.78-.047-2.957-.095-5.086-.071v27.917c1.798-.023 3.596-.165 4.779-.118 7.098.355 12.137-6.222 12.492-13.651.355-7.429-5.087-13.722-12.185-14.077z" />
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#fea7a7" d="M293.881 269.35c-.52-2.886-1.514-5.654-2.839-8.28-.828-1.609-1.703-3.241-2.886-4.613-1.467-1.68-3.454-2.982-5.63-3.478a5.52 5.52 0 0 0-2.154-.497c-.639 0-1.301.118-1.845.426-.592.33-1.065.851-1.49 1.372-2.508 3.123-4.07 6.885-5.49 10.623a2.52 2.52 0 0 0-.094 1.561c.307 1.136 1.065.828 1.845.876.9.047 1.775.33 2.603.733 1.75.852 3.43 1.964 4.542 3.549 2.981 4.306 2.224 8.564 2.224 8.47 0 0 .047.567.284.71 1.301.78 3.36.094 4.708-.545 2.65-1.254 5.323-3.1 6.175-5.914.52-1.586.355-3.336.047-4.992z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#d8592f" d="M324.07 250.116c-.142 0-.284-.024-.45-.071-18.004-5.513-30.78-.639-30.922-.592a1.484 1.484 0 0 1-1.94-.851 1.483 1.483 0 0 1 .852-1.94c.568-.213 13.888-5.3 32.886.497a1.51 1.51 0 0 1 .994 1.869 1.484 1.484 0 0 1-1.42 1.088z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#fa8780" d="M363.817 267.056c.45-.142.946-.284 1.49-.426.923-.26 1.728-.142 2.39.307 1.301.876 1.964 2.934 2.082 4.117.19 1.703-.568 3.407-1.822 4.117-.45.26-.97.33-1.277.189-2.91-1.396-3.076-4.59-2.958-6.885v-.568c-.023-.26.024-.544.095-.851zm4.542 10.622c.284-.094.545-.213.828-.33 2.13-1.207 3.36-3.834 3.052-6.53-.189-1.87-1.135-4.543-3.123-5.892a5.009 5.009 0 0 0-3.24-.851 11.856 11.856 0 0 1 3.808-2.556c.616-.26.9-.993.64-1.608-.261-.615-.995-.9-1.61-.64a14.968 14.968 0 0 0-5.63 4.212 9.519 9.519 0 0 0-1.113 1.633c-.97.354-1.869.757-2.957 1.23-.331.142-.662.284-1.017.45-1.42.615-3.052 1.395-4.212 2.815-1.395 1.68-1.68 3.998-.71 5.63a1.21 1.21 0 0 0 1.68.426c.592-.354.781-1.088.426-1.68-.496-.851-.141-2.058.497-2.815.828-.993 2.153-1.609 3.312-2.129.355-.166.71-.308 1.018-.45.45-.212.875-.402 1.277-.567v.047c0 .071-.023.166-.023.284-.237 4.637 1.23 7.736 4.353 9.227.804.378 1.798.402 2.744.094z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g transform="rotate(-79.17 250.5 280.5)">
                                                <path fill="#a64424" d="M246.527 280.808c0-1.02 1.769-1.846 3.951-1.846 2.182 0 3.951.827 3.951 1.846 0 1.02-1.769 1.845-3.95 1.845-2.183 0-3.952-.826-3.952-1.845z" />
                                            </g>
                                            <g>
                                                <path fill="#7a321b" d="M250.018 284.681c-.994-.189-1.49-2.081-1.065-4.234.379-1.94 1.349-3.407 2.248-3.526-.994-.165-2.13 1.396-2.532 3.526-.402 2.153.071 4.022 1.065 4.234a.575.575 0 0 0 .284 0c.024 0 0 0 0 0z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g transform="rotate(-79.17 265.5 284.5)">
                                                <path fill="#a64424" d="M261.508 284.41c0-1.071 1.853-1.94 4.14-1.94s4.14.869 4.14 1.94c0 1.072-1.853 1.94-4.14 1.94s-4.14-.868-4.14-1.94z" />
                                            </g>
                                            <g>
                                                <path fill="#7a321b" d="M265.16 288.467c-1.041-.19-1.562-2.177-1.112-4.424.378-2.035 1.395-3.573 2.365-3.715-1.04-.165-2.223 1.467-2.65 3.715-.425 2.247.072 4.235 1.113 4.424a.675.675 0 0 0 .307 0h-.023z" />
                                            </g>
                                        </g>
                                        <g transform="rotate(-87.207 248 304)">
                                            <path fill="#fea7a7" d="M233.987 304.055c0-6.742 6.229-12.208 13.912-12.208 7.683 0 13.91 5.466 13.91 12.208s-6.228 12.207-13.91 12.207c-7.683 0-13.912-5.465-13.912-12.207z" />
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#d8592f" d="M240.318 303.183c0-2.156.794-3.904 1.774-3.904s1.775 1.748 1.775 3.904c0 2.156-.795 3.903-1.775 3.903-.98 0-1.774-1.747-1.774-3.903z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M242.613 299.42c.662.592 1.135 2.036 1.135 3.763 0 1.727-.473 3.17-1.135 3.761.733-.473 1.443-1.963 1.443-3.738 0-1.798-.71-3.288-1.443-3.785z" />
                                            </g>
                                            <g>
                                                <path fill="#a64424" d="M240.744 303.3c0-2.152.804-3.903 1.774-3.903a.885.885 0 0 0-.426-.118c-.97 0-1.774 1.75-1.774 3.904 0 2.153.78 3.903 1.774 3.903-.78-.402-1.348-1.94-1.348-3.785z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#d8592f" d="M247.7 305.17c0-2.156.794-3.904 1.774-3.904s1.774 1.748 1.774 3.904c0 2.156-.794 3.904-1.774 3.904s-1.775-1.748-1.775-3.904z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M249.97 301.408c.663.592 1.136 2.035 1.136 3.762 0 1.727-.473 3.17-1.135 3.762.733-.474 1.42-1.988 1.42-3.762 0-1.798-.687-3.289-1.42-3.762z" />
                                            </g>
                                            <g>
                                                <path fill="#a64424" d="M248.102 305.288c0-2.153.804-3.903 1.774-3.903a.885.885 0 0 0-.426-.119c-.97 0-1.774 1.751-1.774 3.904s.78 3.904 1.774 3.904c-.78-.402-1.348-1.94-1.348-3.786z" />
                                            </g>
                                        </g>
                                        <g>
                                            <path fill="url(#kzk5c)" d="M280.207 271.977c1.585 2.484 2.27 5.441 2.507 8.398 2.627-4.305 3.455-9.463 4.046-14.479.331-2.791.592-5.678-.308-8.351-.899-2.674-3.264-5.04-6.056-5.063-.639 0-1.301.118-1.846.426-.591.33-1.064.851-1.49 1.372-2.342 2.934-3.88 6.459-5.229 9.96-.284.71-.544 1.49-.33 2.224.307 1.112 1.064.828 1.844.876.9.047 1.775.33 2.603.733 1.703.875 3.194 2.271 4.258 3.904z" />
                                        </g>
                                        <g>
                                            <path fill="#ee7460" d="M355.087 263.389c2.768 5.82 4.164 12.208 4.164 18.903 0 26.876-20.489 48.666-69.415 49.612-11.806.237-21.956-1.561-30.402-4.85 9.842 8.518 24.274 13.699 43.035 13.32 46.821-.946 59.928-22.073 59.928-48.95-.023-10.291-2.224-19.968-7.31-28.035z" />
                                        </g>
                                        <g>
                                            <path fill="#fff" d="M248.173 291.803c.615-.024 1.253.07 1.869.213.615.142 1.206.355 1.798.615a11.5 11.5 0 0 1 1.656.946c.118.095.26.19.378.284l.379.308.355.33c.118.12.213.237.331.332.426.473.828.97 1.183 1.514.047.071.095.142.118.213l.118.213c.071.142.166.284.237.426.142.284.284.568.402.875.473 1.183.781 2.414.876 3.644-.355-1.207-.757-2.366-1.302-3.454a6.26 6.26 0 0 0-.212-.403l-.213-.402c-.071-.142-.166-.26-.237-.378l-.118-.19c-.048-.07-.095-.118-.119-.189l-.26-.378-.284-.355-.284-.355-.142-.166c-.047-.047-.094-.118-.165-.165a8.196 8.196 0 0 0-1.349-1.207c-.473-.379-.993-.686-1.514-.994-.07-.047-.142-.07-.19-.118l-.212-.095a5.81 5.81 0 0 0-.402-.189c-.142-.07-.284-.118-.426-.19-.142-.046-.284-.117-.426-.165a11.433 11.433 0 0 0-1.845-.52z" />
                                        </g>
                                        <g>
                                            <path fill="#fff" d="M285.861 254.895c.213.118.402.26.568.426.165.165.331.355.473.544.284.378.52.804.71 1.23.378.876.591 1.822.71 2.745.094.946.094 1.892.023 2.815-.094.923-.26 1.845-.52 2.745.023-.947.047-1.87.047-2.769 0-.922-.047-1.821-.142-2.72-.094-.9-.26-1.798-.544-2.65a8.257 8.257 0 0 0-.52-1.254c-.237-.402-.474-.78-.805-1.112z" />
                                        </g>
                                        <g>
                                            <path fill="#fff" d="M250.538 248.507c.19-.024.379 0 .568.024.095 0 .19.023.284.023.095 0 .19.024.284.048.379.07.733.189 1.088.307.71.26 1.373.64 1.988 1.065l.45.331.425.355c.142.118.284.237.426.379l.402.402.095.094.094.095.19.213.355.426c.118.142.212.307.33.45.095.141.214.307.308.473-.284-.237-.544-.497-.828-.734l-.426-.355c-.142-.118-.26-.236-.402-.355-.284-.236-.544-.473-.852-.686-.141-.118-.283-.213-.425-.33l-.45-.309a18.18 18.18 0 0 0-1.845-1.112 12.676 12.676 0 0 0-.994-.449 8.025 8.025 0 0 0-1.065-.355z" />
                                        </g>
                                        <g>
                                            <path fill="#fff" d="M333.628 249.572c.923.307 1.822.686 2.697 1.112.876.426 1.751.851 2.58 1.348l.638.355c.213.119.426.26.615.379l.615.378.615.402a42.862 42.862 0 0 1 2.366 1.704c.78.591 1.514 1.23 2.248 1.869.355.331.733.662 1.064.994.166.165.355.33.52.52l.498.52c.165.166.33.355.496.545.166.189.332.355.497.544.308.378.64.733.947 1.112a23.983 23.983 0 0 1 1.703 2.366c-.639-.734-1.254-1.467-1.94-2.177a55.672 55.672 0 0 0-2.035-2.058c-.686-.663-1.42-1.301-2.129-1.94-.378-.308-.733-.615-1.112-.923-.378-.307-.757-.591-1.135-.899-1.538-1.16-3.1-2.271-4.732-3.288-.402-.26-.828-.497-1.23-.758-.213-.118-.426-.236-.616-.378l-.638-.355a28.728 28.728 0 0 0-2.532-1.372z" />
                                        </g>
                                    </g>
                                    <g transform="rotate(19 313 229.5)">
                                        <g>
                                            <g>
                                                <path fill="#f5b104" d="M316.333 245.987c.378-.048.71-.119.993-.213 4.898-1.798 6.034-9.156 6.034-16.325 0-7.098-1.846-14.1-6.53-16.254-1.396-.638-4.093-.307-5.607-.307-6.696 0-12.137 7.429-12.137 16.585 0 8.848 5.063 16.064 11.45 16.537h5.797z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path fill="#fffea3" d="M303.297 232.217c-.048-.307-.071-.615-.095-.923l-4.022.213c.024.308.071.615.095.923z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fffea3" d="M304.196 236.24l-.284-.924-3.975.213.284.923z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fffea3" d="M306.018 240.214c-.166-.237-.308-.497-.45-.757l-3.927.213c.142.26.307.52.45.757z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fffea3" d="M308.857 243.526c-.213-.19-.426-.379-.64-.591l-3.832.213c.213.212.45.402.686.591z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fffea3" d="M311.625 245.277c-.213-.095-.402-.19-.592-.284l-3.643.19c.213.094.45.188.662.283z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fffea3" d="M303.652 224.575c.047-.26.118-.52.189-.78l-3.998-.19c-.071.26-.142.52-.19.757z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fffea3" d="M304.882 220.837c.118-.26.237-.52.355-.757l-3.928-.213c-.118.237-.26.497-.378.757z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fffea3" d="M303.084 217.123l3.88.213c.166-.213.331-.402.497-.592l-3.857-.213c-.165.19-.354.403-.52.592z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fffea3" d="M306.514 214.165l3.715.19.497-.284-3.667-.19c-.19.071-.355.166-.545.284z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="#fffea3" d="M303.131 228.597c0-.307.024-.615.048-.922h-4.046c-.024.307-.047.615-.047.922z" />
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#ffd000" d="M303.131 229.449c0-9.16 5.434-16.585 12.137-16.585s12.137 7.425 12.137 16.585-5.434 16.585-12.137 16.585-12.137-7.425-12.137-16.585z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g opacity=".54">
                                                <g opacity=".54">
                                                    <path fill="#fff" d="M317.374 213.124l-14.006 19.637c.19 1.278.497 2.484.875 3.644l15.828-22.169a9.558 9.558 0 0 0-2.697-1.112z" />
                                                </g>
                                            </g>
                                            <g opacity=".54">
                                                <g opacity=".54">
                                                    <path fill="#fff" d="M327.05 225.545a21.732 21.732 0 0 0-.946-3.548l-16.017 22.452c.828.52 1.703.946 2.626 1.206z" />
                                                </g>
                                            </g>
                                            <g opacity=".54">
                                                <g opacity=".54">
                                                    <path fill="#fff" d="M327.405 229.449c0-.591-.023-1.16-.07-1.727l-13.037 18.265c.308.023.639.047.947.047.26 0 .496 0 .733-.024l11.404-15.97c.023-.212.023-.402.023-.591z" />
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#ffbf00" d="M306.87 229.449c0-6.337 3.76-11.474 8.398-11.474 4.639 0 8.4 5.137 8.4 11.474 0 6.337-3.761 11.475-8.4 11.475-4.638 0-8.399-5.138-8.399-11.475z" />
                                            </g>
                                        </g>
                                        <g>
                                            <path fill="#d9891a" d="M307.84 229.378c0-5.891 3.24-10.741 7.428-11.403h-.023c-4.638 0-8.4 5.133-8.4 11.474 0 6.34 3.762 11.475 8.4 11.475.33 0 .638-.024.97-.071-4.614-.024-8.376-5.158-8.376-11.475z" />
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#f2ae00" d="M323.525 229.449c0 6.246-3.714 11.333-8.257 11.333-4.566 0-8.257-5.087-8.257-11.333s3.715-11.333 8.257-11.333c4.543 0 8.257 5.087 8.257 11.333zm-8.257 11.617c4.708 0 8.541-5.205 8.565-11.617 0-6.412-3.857-11.616-8.565-11.616-4.732 0-8.564 5.205-8.564 11.616 0 6.412 3.856 11.617 8.564 11.617z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#fff" d="M317.28 245.797c-.474.119-.97.213-1.491.26-.26.024-.497.048-.757.024h-.379c-.118 0-.26-.023-.379-.023a8.39 8.39 0 0 1-1.514-.237c-.118-.024-.236-.071-.378-.095-.119-.047-.237-.07-.355-.118-.237-.095-.473-.166-.71-.284a2.385 2.385 0 0 1-.355-.166l-.331-.189c-.237-.118-.45-.26-.662-.402-.119-.071-.213-.142-.308-.213l-.308-.213-.307-.236-.142-.119-.071-.047-.071-.071a14.082 14.082 0 0 1-2.082-2.2c-1.23-1.61-2.13-3.454-2.744-5.395a21.263 21.263 0 0 1-.994-5.962c-.024-1.017 0-2.01.118-3.028.095-.994.284-2.01.52-2.98a19.245 19.245 0 0 1 2.32-5.584 16.481 16.481 0 0 1 1.868-2.414 13.09 13.09 0 0 1 2.343-1.94l.33-.189c.12-.07.237-.118.332-.165l.166-.095.094-.047.095-.048.355-.142.355-.142.355-.118.354-.095c.119-.023.237-.07.379-.094.237-.047.497-.118.733-.142a2.07 2.07 0 0 1 .379-.047l.378-.024c.26-.024.497-.024.758-.024h.189l.19.024.378.024H315.174c-.26.023-.497.023-.734.07l-.378.048-.355.07a7.876 7.876 0 0 0-.71.19 2.081 2.081 0 0 0-.355.118l-.355.119-.331.142c-.118.047-.237.094-.331.142l-.331.165-.071.048-.071.047-.166.094c-.095.071-.213.119-.308.19l-.307.213c-.213.118-.402.284-.615.402l-.284.213-.284.236-.284.237c-.095.071-.19.166-.284.237l-.26.26-.142.118c-.047.047-.095.095-.118.142-.687.71-1.278 1.514-1.822 2.342-1.065 1.68-1.798 3.55-2.271 5.465-.237.97-.403 1.94-.497 2.934-.095.994-.142 1.988-.095 2.981.071 1.988.379 3.975.994 5.844a17.617 17.617 0 0 0 2.673 5.276 13.47 13.47 0 0 0 2.035 2.153 11.36 11.36 0 0 0 2.484 1.585c.213.118.45.213.662.307.119.048.237.095.355.119.119.047.237.07.355.118.473.142.947.26 1.443.308.119.023.237.047.379.047l.379.024c.236.023.496.023.757.023.378.071.875.024 1.348-.07z" />
                                            </g>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5d)" d="M370.735 345.598a106.892 106.892 0 0 0-9.253-.058l-11.769-.074c-.203-.1-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M384.732 345.686c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M384.145 345.686c0 1.78-8.367 3.224-18.687 3.224s-18.686-1.443-18.686-3.224c0-1.781 8.367-3.225 18.686-3.225 10.32 0 18.687 1.444 18.687 3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M383.646 345.686c0 1.604-8.143 2.904-18.189 2.904-10.044 0-18.188-1.3-18.188-2.904 0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.19 1.3 18.19 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5e)" d="M368.73 345.267c-.511 0-.908.022-1.195.067a2.814 2.814 0 0 0-.794.238 7.402 7.402 0 0 1-.775.318 7.084 7.084 0 0 1-.98.25c-.386.073-.845.132-1.376.174-.538.042-1.174.064-1.902.064-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133v-.388l2.421-.133c.362-.174 1.002-.033 1.827-.122.8-.087 1.756-.518 2.887-.518l.015.467-.186.311c-.748 0-1.322.025-1.73.073-.414.05-.66.117-.731.204-.073.087.025.158.298.208.278.052.699.078 1.26.078.52 0 .947-.026 1.277-.076.325-.05.662-.14 1.003-.267.327-.121.623-.218.89-.291.262-.072.55-.13.866-.178.31-.047.663-.08 1.057-.105.39-.023.85-.035 1.377-.035.987 0 1.828.044 2.542.136.74.095 1.12-.07 1.464.114l2.466.167v.388h-1.983c.137.236-.147.432-.885.579-.771.152-1.945.231-3.495.231l-.258-.566c.014-.192-.041-.182 0-.388.626-.01 1.502.344 1.826.288.38-.065.517-.156.419-.271-.079-.092-.288-.163-.624-.214a8.428 8.428 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M368.73 344.879c-.511 0-.908.022-1.195.067a2.822 2.822 0 0 0-.794.238c-.249.119-.507.225-.775.318a7.119 7.119 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.042-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.301 1.783-.39.8-.087 1.756-.13 2.887-.13l-.171.39c-.747 0-1.322.024-1.73.073-.414.049-.66.117-.73.203-.074.088.024.158.297.21.278.05.7.077 1.26.077.52 0 .946-.026 1.277-.076.325-.05.662-.14 1.003-.267a10.3 10.3 0 0 1 .891-.291c.261-.072.55-.13.865-.178.31-.046.663-.081 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.282.231 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.827 0 1.437-.033 1.826-.1.38-.065.517-.156.419-.271-.079-.092-.288-.163-.624-.214a8.35 8.35 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5f)" d="M373.325 341.166a106.307 106.307 0 0 0-9.253-.058l-11.77-.073c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M387.323 341.255c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444s8.629-3.444 19.274-3.444c10.645 0 19.275 1.542 19.275 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M386.734 341.254c0 1.782-8.366 3.225-18.686 3.225s-18.686-1.443-18.686-3.225c0-1.78 8.365-3.224 18.686-3.224 10.32 0 18.686 1.443 18.686 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M386.236 341.255c0 1.603-8.142 2.903-18.188 2.903-10.045 0-18.188-1.3-18.188-2.903 0-1.604 8.143-2.904 18.188-2.904 10.045 0 18.188 1.3 18.188 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5g)" d="M371.32 340.836c-.511 0-.908.022-1.195.067a2.802 2.802 0 0 0-.794.238 7.44 7.44 0 0 1-.775.318 7.08 7.08 0 0 1-.98.25c-.386.073-.845.132-1.376.174a24.19 24.19 0 0 1-1.902.064c-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.31-.745-.512h-2.132v-.388l2.42-.134c.363-.173 1.002-.032 1.828-.122.799-.086 1.755-.517 2.886-.517l.015.467-.186.311c-.747 0-1.322.024-1.73.073-.414.05-.659.117-.73.203-.074.089.024.158.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.277-.076a5.1 5.1 0 0 0 1.004-.267c.327-.121.623-.218.89-.291.262-.072.55-.13.866-.178.31-.046.662-.08 1.056-.105.391-.023.85-.035 1.378-.035.986 0 1.828.045 2.542.136.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.579-.772.152-1.945.231-3.496.231l-.257-.566c.014-.192-.041-.183 0-.388.626-.01 1.502.343 1.825.288.381-.065.518-.156.42-.27-.08-.093-.289-.164-.624-.215a8.4 8.4 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M371.32 340.448c-.511 0-.908.022-1.195.067a2.842 2.842 0 0 0-.794.237c-.248.12-.507.226-.775.318a7.013 7.013 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.173.065-1.902.065-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132l.391-.253h2.073c.363-.173.958-.301 1.784-.39.799-.087 1.755-.13 2.886-.13l-.17.39c-.748 0-1.323.024-1.73.072-.415.05-.66.117-.732.204-.073.088.025.158.298.209.278.051.7.078 1.26.078.52 0 .947-.026 1.277-.077.326-.05.662-.14 1.004-.266.327-.122.623-.218.89-.292a7.5 7.5 0 0 1 .866-.177c.31-.046.662-.082 1.056-.105.391-.024.85-.036 1.378-.036.986 0 1.828.045 2.542.137.739.095 1.281.231 1.625.415h1.91l.395.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.496.232l-.257-.566c.826 0 1.437-.034 1.825-.1.38-.065.518-.156.42-.271-.08-.092-.289-.163-.624-.214a8.362 8.362 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5h)" d="M370.735 336.11a106.353 106.353 0 0 0-9.253-.058l-11.769-.074c-.203-.1-3.489 0-3.489 0l-.04 3.444c0 1.903 8.63 3.444 19.275 3.444 10.644 0 19.274-1.541 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M384.732 336.198c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M346.772 336.198c0-1.78 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224c0 1.781-8.367 3.225-18.687 3.225s-18.686-1.444-18.686-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M383.646 336.198c0 1.604-8.143 2.904-18.189 2.904-10.044 0-18.188-1.3-18.188-2.904 0-1.603 8.143-2.903 18.188-2.903 10.046 0 18.19 1.3 18.19 2.903z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5i)" d="M368.73 335.78c-.511 0-.908.022-1.195.067a2.806 2.806 0 0 0-.794.238c-.249.119-.507.225-.775.317a7.118 7.118 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.137-.866-.31-.745-.512h-2.133v-.389l2.421-.133c.362-.173 1.002-.033 1.827-.122.8-.087 1.756-.517 2.887-.517l.015.467-.186.31c-.748 0-1.322.025-1.73.073-.414.05-.66.117-.731.204-.073.088.025.158.298.209.278.051.699.077 1.26.077.52 0 .947-.025 1.277-.076.325-.049.662-.14 1.003-.266.327-.122.623-.218.89-.291.262-.072.55-.131.866-.178.31-.047.663-.081 1.057-.105.39-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.12-.07 1.464.114l2.466.167v.388h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.567c.014-.191-.041-.182 0-.388.626-.01 1.502.344 1.826.289.38-.065.517-.156.419-.27-.079-.094-.288-.164-.624-.215a8.355 8.355 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M368.73 335.392c-.511 0-.908.022-1.195.067a2.83 2.83 0 0 0-.794.238c-.249.119-.507.225-.775.318a7.19 7.19 0 0 1-.98.25c-.386.073-.845.131-1.376.173-.538.043-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.137-.866-.31-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.302 1.783-.39.8-.088 1.756-.13 2.887-.13l-.171.39c-.747 0-1.322.024-1.73.073-.414.049-.66.116-.73.203-.074.088.024.159.297.209.278.051.7.078 1.26.078.52 0 .946-.026 1.277-.076.325-.05.662-.14 1.003-.267.328-.122.623-.218.891-.291.261-.072.55-.131.865-.178.31-.046.663-.081 1.057-.105.391-.024.85-.035 1.377-.035.987 0 1.828.044 2.542.136.74.095 1.282.232 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.827 0 1.437-.034 1.826-.1.38-.065.517-.156.419-.27-.079-.094-.288-.165-.624-.215a8.35 8.35 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5j)" d="M373.325 331.86a106.34 106.34 0 0 0-9.253-.058l-11.77-.074c-.203-.102-3.488 0-3.488 0l-.04 3.444c0 1.901 8.63 3.443 19.274 3.443 10.645 0 19.275-1.541 19.275-3.443v-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M387.323 331.946c0 1.902-8.63 3.444-19.274 3.444-10.646 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.543 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M386.734 331.946c0 1.781-8.366 3.225-18.686 3.225s-18.686-1.444-18.686-3.225c0-1.78 8.365-3.224 18.686-3.224 10.32 0 18.686 1.444 18.686 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M386.237 331.946c0 1.604-8.143 2.904-18.188 2.904-10.046 0-18.19-1.3-18.19-2.904 0-1.603 8.144-2.904 18.19-2.904 10.044 0 18.188 1.301 18.188 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5k)" d="M371.32 331.528c-.511 0-.908.022-1.195.066a2.85 2.85 0 0 0-.794.239c-.248.119-.507.225-.775.317-.276.096-.603.18-.98.25-.386.074-.845.132-1.376.174-.538.043-1.173.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.388l2.42-.133c.362-.174 1.002-.033 1.827-.122.8-.087 1.756-.518 2.887-.518l.015.467-.186.311c-.747 0-1.322.024-1.73.073-.414.049-.659.117-.73.203-.074.088.024.158.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.277-.076.326-.05.662-.14 1.004-.267.327-.121.622-.218.89-.29.261-.073.55-.132.865-.179.311-.046.663-.081 1.058-.105.39-.024.848-.036 1.376-.036.987 0 1.828.045 2.543.137.738.095 1.12-.07 1.464.115l2.466.165v.39h-1.984c.138.236-.146.431-.884.577-.772.154-1.946.232-3.496.232l-.257-.566c.014-.192-.042-.183 0-.388.627-.01 1.502.344 1.825.288.38-.065.517-.156.419-.271-.079-.092-.288-.163-.623-.214a8.393 8.393 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M371.32 331.14c-.511 0-.908.022-1.195.067a2.842 2.842 0 0 0-.794.238 7.395 7.395 0 0 1-.775.318 7.115 7.115 0 0 1-.98.25 13.05 13.05 0 0 1-1.376.173 24.32 24.32 0 0 1-1.902.064c-1.257 0-2.222-.073-2.874-.215-.626-.137-.866-.31-.745-.512h-2.132l.391-.253h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.756-.129 2.887-.129l-.17.39c-.748 0-1.323.024-1.73.073-.415.049-.66.116-.732.203-.073.088.025.158.298.208.278.052.7.078 1.26.078.52 0 .947-.026 1.277-.076.326-.049.662-.14 1.004-.266.327-.122.622-.218.89-.292.261-.071.55-.13.865-.177.311-.046.663-.082 1.058-.105.39-.024.848-.036 1.376-.036.987 0 1.828.045 2.543.137.739.095 1.281.23 1.625.415h1.911l.394.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.946.232-3.496.232l-.257-.566c.826 0 1.437-.034 1.825-.1.38-.065.517-.156.419-.272-.079-.091-.288-.163-.623-.213a8.44 8.44 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5l)" d="M370.735 326.802a106.892 106.892 0 0 0-9.253-.058l-11.769-.073c-.203-.102-3.489 0-3.489 0l-.04 3.444c0 1.901 8.63 3.444 19.275 3.444 10.644 0 19.274-1.543 19.274-3.444v-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M384.732 326.89c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M346.772 326.89c0-1.78 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224c0 1.781-8.367 3.225-18.687 3.225s-18.686-1.444-18.686-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M347.27 326.89c0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.189 1.3 18.189 2.904 0 1.604-8.143 2.904-18.189 2.904-10.045 0-18.188-1.3-18.188-2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5m)" d="M368.73 326.473c-.511 0-.908.022-1.195.066a2.83 2.83 0 0 0-.794.238c-.249.12-.507.225-.775.318a7.084 7.084 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.042-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133v-.388l2.421-.133c.362-.173 1.002-.033 1.827-.123.8-.086 1.756-.517 2.887-.517l.015.467-.186.312c-.748 0-1.322.023-1.73.072-.414.05-.66.117-.731.204-.073.088.025.158.298.209.278.05.699.077 1.26.077.52 0 .947-.025 1.277-.076.325-.05.662-.14 1.003-.266.327-.122.623-.218.89-.292a7.4 7.4 0 0 1 .866-.178c.31-.046.663-.081 1.057-.105.39-.023.85-.035 1.377-.035.987 0 1.828.045 2.542.137.74.095 1.12-.07 1.464.114l2.466.166v.389h-1.983c.137.236-.147.431-.885.577-.771.154-1.945.233-3.495.233l-.258-.567c.014-.192-.041-.182 0-.388.626-.01 1.502.344 1.826.288.38-.065.517-.156.419-.271-.079-.092-.288-.162-.624-.214a8.368 8.368 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M368.73 326.084c-.511 0-.908.022-1.195.067a2.83 2.83 0 0 0-.794.238c-.249.119-.507.225-.775.318a7.119 7.119 0 0 1-.98.25c-.386.073-.845.131-1.376.173-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.31-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.301 1.783-.391.8-.087 1.756-.129 2.887-.129l-.171.39c-.747 0-1.322.024-1.73.073-.414.049-.66.117-.73.203-.074.088.024.158.297.209.278.051.7.077 1.26.077.52 0 .946-.025 1.277-.076a5.12 5.12 0 0 0 1.003-.266c.328-.122.623-.218.891-.291.261-.072.55-.13.865-.178.31-.046.663-.081 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.282.231 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.827 0 1.437-.034 1.826-.1.38-.065.517-.156.419-.272-.079-.091-.288-.162-.624-.213a8.32 8.32 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5n)" d="M370.735 321.096a107.414 107.414 0 0 0-9.253-.058l-11.769-.074c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M384.732 321.184c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M346.772 321.184c0-1.781 8.366-3.225 18.686-3.225s18.687 1.444 18.687 3.225c0 1.78-8.367 3.224-18.687 3.224s-18.686-1.443-18.686-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M383.646 321.184c0 1.604-8.143 2.904-18.189 2.904-10.044 0-18.188-1.3-18.188-2.904 0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.19 1.3 18.19 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5o)" d="M368.73 320.765c-.511 0-.908.022-1.195.067a2.822 2.822 0 0 0-.794.238 7.456 7.456 0 0 1-.775.318 7.155 7.155 0 0 1-.98.25c-.386.073-.845.132-1.376.173-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133v-.388l2.421-.134c.362-.173 1.002-.032 1.827-.122.8-.086 1.756-.517 2.887-.517l.015.467-.186.311c-.748 0-1.322.024-1.73.073-.414.049-.66.117-.731.204-.073.087.025.158.298.209.278.05.699.077 1.26.077.52 0 .947-.025 1.277-.076.325-.05.662-.14 1.003-.267.327-.121.623-.218.89-.29.262-.072.55-.132.866-.179.31-.046.663-.08 1.057-.105.39-.023.85-.035 1.377-.035.987 0 1.828.045 2.542.136.74.095 1.12-.07 1.464.115l2.466.166v.388h-1.983c.137.237-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.014-.192-.041-.182 0-.388.626-.01 1.502.343 1.826.288.38-.065.517-.156.419-.27-.079-.093-.288-.164-.624-.215a8.388 8.388 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M368.73 320.377c-.511 0-.908.023-1.195.067a2.814 2.814 0 0 0-.794.238c-.249.12-.507.225-.775.318a7.051 7.051 0 0 1-.98.25c-.386.074-.845.132-1.376.174a24.67 24.67 0 0 1-1.902.065c-1.257 0-2.222-.074-2.874-.216-.626-.137-.866-.31-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.756-.13 2.887-.13l-.171.39c-.747 0-1.322.025-1.73.073-.414.05-.66.117-.73.204-.074.088.024.158.297.208.278.052.7.078 1.26.078.52 0 .946-.026 1.277-.076.325-.05.662-.14 1.003-.266.328-.122.623-.219.891-.292.261-.071.55-.13.865-.178.31-.046.663-.08 1.057-.105.391-.024.85-.035 1.377-.035.987 0 1.828.045 2.542.137.74.095 1.282.231 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.577-.771.154-1.945.233-3.495.233l-.258-.567c.827 0 1.437-.033 1.826-.1.38-.065.517-.156.419-.27-.079-.093-.288-.164-.624-.215a8.288 8.288 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5p)" d="M373.325 316.665a106.824 106.824 0 0 0-9.253-.058l-11.77-.073c-.203-.102-3.489 0-3.489 0l-.04 3.443c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M387.323 316.753c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444s8.629-3.444 19.274-3.444c10.645 0 19.275 1.542 19.275 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M386.734 316.753c0 1.78-8.366 3.224-18.686 3.224s-18.686-1.443-18.686-3.224c0-1.781 8.365-3.225 18.686-3.225 10.32 0 18.686 1.443 18.686 3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M386.236 316.753c0 1.604-8.142 2.904-18.188 2.904-10.045 0-18.188-1.3-18.188-2.904 0-1.604 8.143-2.904 18.188-2.904 10.045 0 18.188 1.3 18.188 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5q)" d="M371.32 316.335c-.511 0-.908.021-1.195.066a2.826 2.826 0 0 0-.794.238 7.334 7.334 0 0 1-.775.318 7.082 7.082 0 0 1-.98.25c-.386.073-.845.132-1.376.173-.538.043-1.173.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.388l2.42-.134c.363-.173 1.002-.033 1.828-.121.799-.087 1.755-.518 2.886-.518l.015.467-.186.31c-.747 0-1.322.026-1.73.074-.414.05-.659.117-.73.203-.074.088.024.158.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.277-.076a5.1 5.1 0 0 0 1.004-.266c.327-.122.623-.219.89-.292.262-.071.55-.13.866-.178.31-.047.662-.08 1.056-.105.391-.024.85-.036 1.378-.036.986 0 1.828.045 2.542.137.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.496.232l-.257-.566c.014-.192-.041-.182 0-.389.626-.008 1.502.344 1.825.289.381-.065.518-.156.42-.271-.08-.092-.289-.163-.624-.214a8.404 8.404 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M371.32 315.946c-.511 0-.908.022-1.195.066a2.833 2.833 0 0 0-.794.238c-.248.12-.507.226-.775.318-.276.095-.602.18-.98.25-.386.074-.845.132-1.376.174-.538.043-1.173.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.136-.866-.309-.745-.512h-2.132l.391-.253h2.073c.363-.173.958-.302 1.784-.391.799-.087 1.755-.129 2.886-.129l-.17.39c-.748 0-1.323.024-1.73.072-.415.05-.66.117-.732.204-.073.088.025.158.298.208.278.052.7.079 1.26.079.52 0 .947-.026 1.277-.077.326-.05.662-.14 1.004-.266.327-.122.623-.218.89-.292.262-.071.55-.13.866-.177.31-.047.662-.082 1.056-.105.391-.024.85-.036 1.378-.036.986 0 1.828.044 2.542.137.739.094 1.281.231 1.625.415h1.91l.395.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.496.232l-.257-.566c.826 0 1.437-.034 1.825-.1.38-.066.518-.157.42-.272-.08-.092-.289-.163-.624-.214a8.435 8.435 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5r)" d="M370.735 311.608a105.84 105.84 0 0 0-9.253-.058l-11.769-.073c-.203-.102-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M384.732 311.696c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.543 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M346.772 311.696c0-1.78 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224c0 1.781-8.367 3.225-18.687 3.225s-18.686-1.444-18.686-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M383.646 311.696c0 1.604-8.143 2.904-18.189 2.904-10.044 0-18.188-1.3-18.188-2.904 0-1.603 8.143-2.903 18.188-2.903 10.046 0 18.19 1.3 18.19 2.903z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5s)" d="M368.73 311.278c-.511 0-.908.022-1.195.067a2.79 2.79 0 0 0-.794.239 7.402 7.402 0 0 1-.775.317 7.114 7.114 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.042-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133v-.388l2.421-.133c.362-.174 1.002-.033 1.827-.122.8-.087 1.756-.517 2.887-.517l.015.466-.186.311c-.748 0-1.322.025-1.73.073-.414.05-.66.117-.731.204-.073.088.025.157.298.208.278.052.699.078 1.26.078.52 0 .947-.025 1.277-.076.325-.05.662-.14 1.003-.266.327-.122.623-.219.89-.292.262-.071.55-.13.866-.177.31-.047.663-.082 1.057-.106.39-.023.85-.035 1.377-.035.987 0 1.828.045 2.542.136.74.095 1.12-.07 1.464.114l2.466.167v.388h-1.983c.137.236-.147.433-.885.579-.771.153-1.945.232-3.495.232l-.258-.567c.014-.192-.041-.183 0-.388.626-.01 1.502.344 1.826.288.38-.064.517-.156.419-.27-.079-.093-.288-.164-.624-.215a8.355 8.355 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M368.73 310.89c-.511 0-.908.022-1.195.066a2.83 2.83 0 0 0-.794.239 7.296 7.296 0 0 1-.775.317 7.114 7.114 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.136-.866-.31-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.756-.129 2.887-.129l-.171.39c-.747 0-1.322.024-1.73.073-.414.049-.66.116-.73.203-.074.088.024.158.297.209.278.051.7.077 1.26.077.52 0 .946-.025 1.277-.076.325-.05.662-.14 1.003-.266.328-.122.623-.218.891-.292.261-.071.55-.13.865-.177.31-.046.663-.082 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.282.231 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.827 0 1.437-.034 1.826-.1.38-.065.517-.156.419-.272-.079-.091-.288-.163-.624-.213a8.388 8.388 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5t)" d="M373.325 307.357a104.606 104.606 0 0 0-9.253-.057l-11.77-.075c-.203-.1-3.488 0-3.488 0l-.04 3.445c0 1.902 8.63 3.444 19.274 3.444 10.645 0 19.275-1.542 19.275-3.444v-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M387.323 307.445c0 1.902-8.63 3.444-19.274 3.444-10.646 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.541 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M386.734 307.445c0 1.78-8.366 3.224-18.686 3.224s-18.686-1.443-18.686-3.224c0-1.781 8.365-3.225 18.686-3.225 10.32 0 18.686 1.444 18.686 3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M386.237 307.445c0 1.604-8.143 2.904-18.188 2.904-10.046 0-18.19-1.3-18.19-2.904 0-1.604 8.144-2.904 18.19-2.904 10.044 0 18.188 1.3 18.188 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5u)" d="M371.32 307.026c-.511 0-.908.022-1.195.067a2.842 2.842 0 0 0-.794.238c-.248.12-.507.225-.775.318a7.115 7.115 0 0 1-.98.25c-.386.073-.845.131-1.376.174a24.42 24.42 0 0 1-1.902.064c-1.257 0-2.222-.073-2.874-.215-.626-.137-.866-.31-.745-.513h-2.132v-.388l2.42-.134c.362-.173 1.002-.032 1.827-.122.8-.086 1.756-.516 2.887-.516l.015.466-.186.311c-.747 0-1.322.024-1.73.073-.414.05-.659.116-.73.203-.074.088.024.158.297.21.278.05.7.077 1.26.077a8.7 8.7 0 0 0 1.277-.076c.326-.05.662-.14 1.004-.267.327-.121.622-.218.89-.29.261-.072.55-.132.865-.179.311-.046.663-.081 1.058-.105.39-.024.848-.035 1.376-.035.987 0 1.828.044 2.543.137.738.094 1.12-.07 1.464.113l2.466.167v.389h-1.984c.138.236-.146.431-.884.578-.772.153-1.946.232-3.496.232l-.257-.567c.014-.192-.042-.182 0-.388.627-.01 1.502.344 1.825.289.38-.066.517-.157.419-.272-.079-.092-.288-.163-.623-.214a8.432 8.432 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M371.32 306.638c-.511 0-.908.022-1.195.067a2.834 2.834 0 0 0-.794.238 7.343 7.343 0 0 1-.775.318 7.08 7.08 0 0 1-.98.25 12.97 12.97 0 0 1-1.376.173c-.538.043-1.173.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132l.391-.253h2.073c.362-.173.958-.302 1.783-.39.8-.087 1.756-.13 2.887-.13l-.17.39c-.748 0-1.323.024-1.73.073-.415.049-.66.116-.732.203-.073.088.025.159.298.209.278.051.7.078 1.26.078.52 0 .947-.026 1.277-.076a5.1 5.1 0 0 0 1.004-.267c.327-.122.622-.218.89-.291.261-.072.55-.13.865-.178.311-.046.663-.081 1.058-.105.39-.024.848-.036 1.376-.036.987 0 1.828.045 2.543.137.739.095 1.281.231 1.625.415h1.911l.394.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.946.232-3.496.232l-.257-.566c.826 0 1.437-.033 1.825-.1.38-.065.517-.156.419-.271-.079-.092-.288-.163-.623-.214a8.397 8.397 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5v)" d="M370.735 302.301a105.324 105.324 0 0 0-9.253-.058l-11.769-.074c-.203-.1-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M384.732 302.388c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.543 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M384.145 302.388c0 1.781-8.367 3.225-18.687 3.225s-18.686-1.444-18.686-3.225c0-1.78 8.367-3.224 18.686-3.224 10.32 0 18.687 1.444 18.687 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M347.27 302.388c0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.189 1.3 18.189 2.904 0 1.604-8.143 2.904-18.189 2.904-10.045 0-18.188-1.3-18.188-2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5w)" d="M368.73 301.97c-.511 0-.908.023-1.195.067a2.822 2.822 0 0 0-.794.238c-.249.12-.507.226-.775.318a7.049 7.049 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.043-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.133v-.388l2.421-.133c.362-.174 1.002-.033 1.827-.122.8-.087 1.756-.518 2.887-.518l.015.467-.186.311c-.748 0-1.322.024-1.73.073-.414.05-.66.117-.731.203-.073.089.025.159.298.21.278.05.699.077 1.26.077.52 0 .947-.026 1.277-.076.325-.05.662-.14 1.003-.266.327-.123.623-.219.89-.292.262-.071.55-.13.866-.178.31-.046.663-.081 1.057-.105.39-.024.85-.035 1.377-.035.987 0 1.828.044 2.542.136.74.095 1.12-.07 1.464.114l2.466.167v.388h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.014-.192-.041-.182 0-.388.626-.01 1.502.343 1.826.288.38-.065.517-.156.419-.271-.079-.092-.288-.163-.624-.214a8.462 8.462 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M368.73 301.582c-.511 0-.908.022-1.195.066a2.838 2.838 0 0 0-.794.239 7.3 7.3 0 0 1-.775.317 7.048 7.048 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.137-.866-.31-.745-.512h-2.133l.392-.253h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.756-.129 2.887-.129l-.171.39c-.747 0-1.322.024-1.73.072-.414.05-.66.117-.73.204-.074.088.024.158.297.209.278.051.7.077 1.26.077.52 0 .946-.025 1.277-.076.325-.05.662-.14 1.003-.266.328-.122.623-.218.891-.292.261-.071.55-.13.865-.177.31-.046.663-.081 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.282.231 1.626.415h1.91l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.567c.827 0 1.437-.033 1.826-.1.38-.065.517-.156.419-.27-.079-.093-.288-.164-.624-.214a8.432 8.432 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5x)" d="M374.411 298.177a106.892 106.892 0 0 0-9.253-.058l-11.769-.074c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M388.409 298.264c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444 0-1.901 8.63-3.443 19.274-3.443 10.645 0 19.275 1.542 19.275 3.443z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M387.82 298.264c0 1.782-8.366 3.225-18.686 3.225s-18.686-1.443-18.686-3.224c0-1.781 8.366-3.225 18.686-3.225s18.687 1.444 18.687 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M387.323 298.265c0 1.604-8.143 2.904-18.188 2.904-10.046 0-18.189-1.3-18.189-2.904 0-1.604 8.143-2.904 18.189-2.904 10.045 0 18.188 1.3 18.188 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5y)" d="M372.406 297.846c-.51 0-.907.022-1.195.067a2.814 2.814 0 0 0-.794.238 7.359 7.359 0 0 1-.775.317 7.05 7.05 0 0 1-.98.251c-.386.073-.845.131-1.376.173-.538.043-1.173.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.389l2.42-.133c.363-.173 1.002-.033 1.828-.122.799-.087 1.755-.517 2.886-.517l.016.467-.187.311c-.747 0-1.321.024-1.73.073-.414.05-.659.116-.73.203-.073.088.024.158.297.209.278.051.7.078 1.26.078.52 0 .947-.026 1.277-.076a5.08 5.08 0 0 0 1.004-.267c.327-.122.622-.218.89-.291.261-.072.55-.131.865-.178.31-.047.663-.081 1.057-.105.392-.024.85-.035 1.378-.035.986 0 1.828.044 2.542.136.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.578-.772.153-1.946.232-3.496.232l-.257-.566c.014-.193-.041-.183 0-.388.626-.01 1.502.343 1.825.288.381-.065.518-.156.42-.271-.08-.092-.289-.163-.624-.214a8.433 8.433 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M372.406 297.458c-.51 0-.907.022-1.195.067a2.846 2.846 0 0 0-.794.238 7.26 7.26 0 0 1-.775.318 7.09 7.09 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.043-1.173.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.137-.866-.31-.745-.513h-2.132l.392-.252h2.073c.362-.173.957-.302 1.783-.392.799-.086 1.755-.128 2.886-.128l-.17.39c-.748 0-1.322.023-1.73.072-.415.05-.66.117-.731.203-.073.089.024.159.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.277-.076.326-.05.663-.14 1.004-.266.327-.122.622-.219.89-.292.261-.072.55-.13.865-.178.31-.046.663-.081 1.057-.105.392-.024.85-.035 1.378-.035.986 0 1.828.044 2.542.136.739.095 1.281.232 1.625.416h1.911l.394.253h-1.984c.138.236-.146.432-.884.578-.772.154-1.946.232-3.495.232l-.258-.566c.826 0 1.437-.033 1.825-.1.381-.065.518-.156.42-.271-.08-.092-.289-.163-.624-.214a8.26 8.26 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5z)" d="M377 293.746a106.899 106.899 0 0 0-9.253-.058l-11.768-.074c-.203-.101-3.49 0-3.49 0l-.039 3.444c0 1.902 8.63 3.444 19.274 3.444 10.646 0 19.275-1.542 19.275-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M391 293.834c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444s8.629-3.444 19.274-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M390.41 293.834c0 1.78-8.365 3.224-18.685 3.224-10.32 0-18.687-1.443-18.687-3.224 0-1.781 8.366-3.225 18.687-3.225 10.32 0 18.686 1.443 18.686 3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M389.913 293.834c0 1.603-8.144 2.904-18.189 2.904s-18.188-1.3-18.188-2.904c0-1.604 8.143-2.904 18.188-2.904 10.045 0 18.189 1.3 18.189 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5A)" d="M374.996 293.415c-.511 0-.908.022-1.195.067a2.813 2.813 0 0 0-.794.238 7.219 7.219 0 0 1-.775.317c-.276.095-.603.18-.98.25-.386.074-.845.132-1.376.174-.538.043-1.173.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.625-.136-.866-.31-.745-.512h-2.132v-.389l2.42-.133c.363-.173 1.003-.033 1.828-.122.8-.086 1.755-.517 2.887-.517l.014.467-.185.311c-.748 0-1.323.024-1.73.073-.415.049-.66.116-.731.203-.074.088.024.158.297.209.278.051.7.078 1.26.078.52 0 .947-.026 1.277-.076.326-.05.663-.14 1.004-.267.327-.122.623-.218.89-.292.261-.071.55-.13.866-.177.31-.046.662-.081 1.057-.105.39-.024.849-.035 1.377-.035.986 0 1.828.044 2.542.136.739.095 1.121-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.496.232l-.257-.566c.014-.193-.041-.183 0-.389.627-.009 1.502.344 1.825.289.38-.065.517-.156.42-.271-.08-.093-.288-.164-.624-.214a8.44 8.44 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M374.996 293.027c-.511 0-.908.022-1.195.067a2.821 2.821 0 0 0-.794.238 7.22 7.22 0 0 1-.775.317 7.041 7.041 0 0 1-.98.25c-.386.074-.845.132-1.376.174a24.45 24.45 0 0 1-1.902.064c-1.257 0-2.222-.073-2.874-.215-.625-.137-.866-.31-.745-.512h-2.132l.392-.253h2.073c.361-.173.958-.302 1.783-.39.8-.087 1.755-.13 2.887-.13l-.171.39c-.748 0-1.323.024-1.73.073-.415.049-.66.116-.731.203-.074.088.024.158.297.209.278.051.7.078 1.26.078.52 0 .947-.026 1.278-.077.325-.049.662-.14 1.003-.266.327-.122.623-.218.89-.292.261-.07.55-.13.866-.177.31-.046.662-.081 1.057-.105.39-.024.849-.036 1.377-.036.986 0 1.828.045 2.542.137.739.095 1.282.232 1.625.415h1.911l.394.254h-1.984c.138.236-.146.432-.885.578-.771.153-1.944.232-3.495.232l-.257-.566c.826 0 1.437-.034 1.825-.1.38-.065.517-.156.42-.271-.08-.092-.288-.163-.624-.214a8.405 8.405 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5B)" d="M374.411 288.69a106.363 106.363 0 0 0-9.253-.058l-11.769-.074c-.203-.102-3.489 0-3.489 0l-.04 3.443c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M388.409 288.777c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444s8.63-3.444 19.274-3.444c10.645 0 19.275 1.542 19.275 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M387.82 288.777c0 1.781-8.366 3.225-18.686 3.225s-18.686-1.444-18.686-3.225c0-1.78 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M387.323 288.777c0 1.604-8.143 2.904-18.188 2.904-10.046 0-18.189-1.3-18.189-2.904 0-1.604 8.143-2.904 18.189-2.904 10.045 0 18.188 1.3 18.188 2.904z" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5C)" d="M348.626 343.654a106.336 106.336 0 0 0-9.253-.058l-11.77-.073c-.203-.102-3.488 0-3.488 0l-.04 3.444c0 1.902 8.63 3.444 19.274 3.444 10.645 0 19.275-1.542 19.275-3.444v-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M362.624 343.742c0 1.902-8.63 3.445-19.275 3.445-10.645 0-19.274-1.543-19.274-3.445s8.63-3.444 19.274-3.444c10.645 0 19.275 1.542 19.275 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M362.036 343.742c0 1.78-8.366 3.224-18.687 3.224-10.32 0-18.686-1.443-18.686-3.224 0-1.78 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M361.538 343.742c0 1.604-8.144 2.904-18.19 2.904-10.044 0-18.188-1.3-18.188-2.904 0-1.603 8.144-2.903 18.189-2.903 10.046 0 18.189 1.3 18.189 2.903z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5D)" d="M346.62 343.325c-.51 0-.907.021-1.194.066a2.822 2.822 0 0 0-.794.238 7.33 7.33 0 0 1-.775.318 7.101 7.101 0 0 1-.98.25c-.386.074-.845.131-1.376.174a24.41 24.41 0 0 1-1.902.064c-1.256 0-2.222-.074-2.874-.216-.626-.136-.865-.309-.745-.512h-2.132v-.388l2.42-.133c.363-.174 1.003-.033 1.828-.122.799-.087 1.755-.517 2.886-.517l.015.466-.186.312c-.747 0-1.322.024-1.73.072-.414.05-.659.117-.73.204-.074.088.024.158.297.209.278.05.7.077 1.26.077.52 0 .947-.025 1.277-.076a5.11 5.11 0 0 0 1.004-.266c.327-.122.622-.219.89-.292.261-.071.55-.13.866-.178.31-.046.662-.08 1.056-.105.391-.023.85-.035 1.377-.035.987 0 1.828.045 2.543.137.738.095 1.12-.07 1.464.114l2.466.166v.389h-1.984c.138.236-.147.431-.884.578-.772.152-1.946.232-3.496.232l-.257-.567c.014-.192-.042-.182 0-.388.626-.01 1.502.344 1.825.288.381-.064.517-.155.419-.27-.079-.093-.288-.164-.623-.215a8.303 8.303 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M346.62 342.936c-.51 0-.907.022-1.194.067a2.814 2.814 0 0 0-.794.238c-.248.119-.507.225-.775.317a7.103 7.103 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.173.064-1.902.064-1.256 0-2.222-.073-2.874-.215-.626-.136-.865-.31-.745-.513h-2.132l.392-.252h2.073c.362-.173.958-.302 1.783-.391.799-.087 1.755-.129 2.886-.129l-.17.39c-.748 0-1.323.024-1.73.072-.415.05-.66.117-.732.203-.073.089.025.159.298.21.278.051.7.077 1.26.077.52 0 .947-.025 1.277-.076.326-.05.663-.14 1.004-.266.327-.122.622-.218.89-.292.261-.071.55-.13.866-.178.31-.046.662-.08 1.056-.105.391-.023.85-.035 1.377-.035.987 0 1.828.045 2.543.137.738.095 1.281.231 1.625.415h1.911l.394.254h-1.984c.138.236-.147.431-.884.578-.772.152-1.946.232-3.496.232l-.257-.566c.826 0 1.436-.034 1.825-.1.381-.066.517-.157.419-.272-.079-.092-.288-.163-.623-.214a8.482 8.482 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5E)" d="M347.54 338.599a104.606 104.606 0 0 0-9.252-.058l-11.77-.074c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M361.537 338.686c0 1.902-8.629 3.445-19.274 3.445-10.645 0-19.275-1.543-19.275-3.445s8.63-3.444 19.275-3.444c10.646 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M360.95 338.687c0 1.781-8.366 3.224-18.686 3.224s-18.687-1.443-18.687-3.224c0-1.781 8.367-3.225 18.687-3.225s18.686 1.444 18.686 3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M360.452 338.686c0 1.604-8.143 2.904-18.189 2.904-10.045 0-18.188-1.3-18.188-2.904 0-1.603 8.143-2.903 18.188-2.903 10.045 0 18.189 1.3 18.189 2.903z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5F)" d="M345.534 338.268c-.51 0-.907.022-1.194.066a2.82 2.82 0 0 0-.794.238 7.36 7.36 0 0 1-.775.318 7.09 7.09 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.137-.865-.31-.745-.512h-2.132v-.389l2.42-.133c.362-.173 1.002-.033 1.828-.122.799-.086 1.755-.517 2.886-.517l.015.467-.186.31c-.747 0-1.322.025-1.73.073-.414.05-.66.117-.73.204-.074.088.024.158.297.209.278.051.7.077 1.26.077.52 0 .947-.025 1.277-.075a5.05 5.05 0 0 0 1.004-.268c.327-.12.622-.217.89-.29.26-.072.55-.131.865-.178.31-.047.663-.081 1.058-.106.39-.023.849-.035 1.376-.035.987 0 1.828.045 2.542.137.74.095 1.121-.07 1.465.114l2.466.166v.389h-1.984c.138.236-.146.432-.885.578-.771.153-1.945.232-3.495.232l-.257-.566c.013-.193-.042-.183 0-.389.626-.01 1.502.344 1.825.289.38-.066.517-.157.419-.271-.08-.092-.287-.163-.623-.215a8.44 8.44 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M345.534 337.88c-.51 0-.907.021-1.194.066a2.836 2.836 0 0 0-.794.238c-.248.12-.507.226-.775.318a7.09 7.09 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.042-1.174.064-1.902.064-1.257 0-2.222-.073-2.874-.215-.626-.137-.865-.31-.745-.513h-2.132l.392-.253h2.072c.362-.173.958-.3 1.784-.39.799-.087 1.755-.13 2.886-.13l-.17.39c-.748 0-1.323.024-1.73.073-.415.05-.66.117-.732.203-.073.089.025.158.298.209.278.052.7.078 1.26.078.52 0 .947-.026 1.277-.076.326-.05.663-.14 1.004-.266.327-.122.622-.219.89-.292.26-.072.55-.13.865-.178.31-.046.663-.081 1.058-.105.39-.024.849-.035 1.376-.035.987 0 1.828.044 2.542.136.74.096 1.282.232 1.626.415h1.911l.394.254h-1.984c.138.236-.146.432-.885.578-.771.153-1.945.233-3.495.233l-.257-.566c.826 0 1.436-.035 1.825-.1.38-.066.517-.157.419-.272-.08-.092-.287-.163-.624-.214a8.438 8.438 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5G)" d="M346.952 333.862a104.023 104.023 0 0 0-5.276-.132c-1.364 0-2.693.026-3.977.074l-11.769-.074c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M360.95 333.95c0 1.902-8.63 3.444-19.274 3.444-10.646 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M360.362 333.95c0 1.78-8.366 3.224-18.686 3.224s-18.687-1.444-18.687-3.225c0-1.78 8.366-3.224 18.687-3.224 10.32 0 18.686 1.443 18.686 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M359.864 333.95c0 1.604-8.144 2.903-18.189 2.903s-18.188-1.3-18.188-2.903 8.143-2.904 18.188-2.904c10.045 0 18.189 1.3 18.189 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5H)" d="M344.946 333.531c-.51 0-.907.022-1.194.067a2.815 2.815 0 0 0-.794.238 7.305 7.305 0 0 1-.775.318 7.067 7.067 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.042-1.174.064-1.902.064-1.256 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.388l2.42-.134c.362-.173 1.002-.033 1.828-.122.799-.086 1.755-.517 2.886-.517l.015.467-.186.311c-.747 0-1.322.024-1.73.073-.414.05-.659.116-.73.203-.074.088.024.158.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.278-.076.325-.05.662-.14 1.003-.267.327-.121.622-.218.89-.291.261-.072.55-.13.865-.178.311-.047.663-.081 1.058-.105.39-.024.849-.035 1.376-.035.987 0 1.828.044 2.543.136.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.578-.772.153-1.946.232-3.495.232l-.258-.566c.014-.192-.042-.182 0-.389.626-.009 1.502.344 1.825.29.381-.066.518-.157.419-.272-.079-.092-.287-.163-.623-.214a8.479 8.479 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M344.946 333.143c-.51 0-.907.022-1.194.067a2.824 2.824 0 0 0-.794.237c-.248.12-.508.226-.775.318-.276.095-.603.18-.98.25-.386.074-.845.132-1.376.174-.538.043-1.174.065-1.902.065-1.256 0-2.222-.073-2.874-.216-.626-.136-.866-.309-.745-.513h-2.132l.392-.252h2.072c.362-.173.958-.302 1.784-.391.799-.087 1.755-.129 2.886-.129l-.17.39c-.748 0-1.323.024-1.73.072-.415.05-.66.117-.732.204-.073.088.025.158.298.209.278.051.7.077 1.26.077.52 0 .947-.025 1.278-.076a5.07 5.07 0 0 0 1.003-.266c.327-.122.622-.218.89-.291.261-.072.55-.131.865-.178.311-.047.663-.082 1.058-.105.39-.024.849-.036 1.376-.036.987 0 1.828.045 2.543.137.739.095 1.281.231 1.625.415h1.911l.394.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.495.232l-.258-.566c.826 0 1.437-.034 1.825-.1.381-.066.518-.157.42-.272-.08-.092-.288-.162-.624-.214a8.45 8.45 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5I)" d="M349.542 329.43a104.605 104.605 0 0 0-9.253-.057l-11.769-.074c-.203-.102-3.489 0-3.489 0l-.04 3.443c0 1.903 8.63 3.445 19.275 3.445 10.645 0 19.274-1.542 19.274-3.445v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M363.54 329.518c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M325.58 329.518c0-1.78 8.365-3.224 18.686-3.224 10.32 0 18.686 1.443 18.686 3.224 0 1.78-8.366 3.225-18.686 3.225s-18.687-1.444-18.687-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M362.454 329.519c0 1.604-8.143 2.903-18.189 2.903-10.045 0-18.188-1.3-18.188-2.903 0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.19 1.3 18.19 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5J)" d="M347.536 329.1c-.51 0-.907.022-1.194.066a2.845 2.845 0 0 0-.794.239 7.329 7.329 0 0 1-.775.317c-.276.095-.602.18-.98.25-.386.074-.845.132-1.376.174-.538.043-1.173.064-1.902.064-1.256 0-2.221-.073-2.874-.215-.626-.136-.866-.31-.745-.512h-2.132v-.389l2.42-.133c.363-.173 1.003-.033 1.828-.122.799-.086 1.755-.517 2.886-.517l.015.467-.186.31c-.747 0-1.322.025-1.73.074-.413.05-.659.116-.73.203-.074.088.024.158.297.209.278.051.7.078 1.26.078.52 0 .947-.026 1.278-.077a5.09 5.09 0 0 0 1.003-.266c.327-.122.622-.219.89-.292.261-.071.55-.13.865-.177.311-.047.663-.081 1.058-.105.39-.024.849-.036 1.377-.036.986 0 1.828.045 2.542.137.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.578-.772.153-1.946.232-3.495.232l-.258-.566c.014-.192-.042-.183 0-.389.626-.009 1.502.344 1.826.289.38-.065.517-.156.418-.271-.079-.092-.288-.164-.623-.215a8.538 8.538 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M347.536 328.712c-.51 0-.907.022-1.194.067a2.845 2.845 0 0 0-.794.238 7.278 7.278 0 0 1-.775.317 7.112 7.112 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.173.065-1.902.065-1.256 0-2.221-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132l.392-.253h2.072c.363-.173.959-.301 1.784-.39.799-.088 1.755-.13 2.886-.13l-.17.39c-.748 0-1.323.024-1.73.073-.414.049-.66.116-.732.203-.073.088.025.158.298.209.278.051.7.078 1.26.078.52 0 .947-.026 1.278-.077.325-.05.662-.14 1.003-.266.327-.122.622-.218.89-.291.261-.072.55-.131.865-.178.311-.047.663-.081 1.058-.105.39-.024.849-.035 1.377-.035.986 0 1.828.044 2.542.136.739.095 1.282.231 1.625.415h1.911l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.826 0 1.437-.034 1.826-.1.38-.065.517-.156.418-.271-.079-.092-.287-.163-.623-.214a8.4 8.4 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5K)" d="M346.952 324.374a106.85 106.85 0 0 0-9.253-.058l-11.769-.073c-.203-.101-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M360.95 324.462c0 1.902-8.63 3.445-19.274 3.445-10.646 0-19.275-1.543-19.275-3.445s8.63-3.444 19.275-3.444c10.644 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M360.362 324.462c0 1.781-8.366 3.224-18.686 3.224s-18.687-1.443-18.687-3.224c0-1.78 8.366-3.225 18.687-3.225 10.32 0 18.686 1.445 18.686 3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M359.864 324.462c0 1.604-8.144 2.904-18.189 2.904s-18.188-1.3-18.188-2.904c0-1.603 8.143-2.903 18.188-2.903 10.045 0 18.189 1.3 18.189 2.903z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5L)" d="M344.946 324.044c-.51 0-.907.022-1.194.066a2.824 2.824 0 0 0-.794.238 7.408 7.408 0 0 1-.775.318 7.103 7.103 0 0 1-.98.25c-.386.074-.845.132-1.376.174a24.29 24.29 0 0 1-1.902.065c-1.256 0-2.222-.074-2.874-.217-.626-.135-.866-.309-.745-.511h-2.132v-.389l2.42-.133c.362-.173 1.002-.033 1.828-.122.799-.086 1.755-.517 2.886-.517l.015.466-.186.312c-.747 0-1.322.024-1.73.072-.414.05-.659.117-.73.204-.074.088.024.158.297.209.278.051.7.078 1.26.078.52 0 .947-.026 1.278-.076.325-.05.662-.14 1.003-.267.327-.122.622-.218.89-.292.261-.071.55-.13.865-.178.311-.046.663-.08 1.058-.105.39-.023.849-.035 1.376-.035.987 0 1.828.045 2.543.137.739.095 1.12-.07 1.464.114l2.466.166v.389h-1.984c.138.236-.146.431-.884.578-.772.153-1.946.232-3.495.232l-.258-.566c.014-.193-.042-.183 0-.389.626-.009 1.502.344 1.825.289.381-.065.518-.156.419-.271-.079-.093-.287-.163-.623-.215a8.405 8.405 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M344.946 323.656c-.51 0-.907.022-1.194.067a2.832 2.832 0 0 0-.794.238c-.248.119-.508.225-.775.317a7.103 7.103 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.174.065-1.902.065-1.256 0-2.222-.074-2.874-.216-.626-.136-.866-.31-.745-.512h-2.132l.392-.253h2.072c.362-.173.958-.302 1.784-.391.799-.087 1.755-.129 2.886-.129l-.17.39c-.748 0-1.323.024-1.73.073-.415.049-.66.116-.732.203-.073.088.025.158.298.209.278.051.7.077 1.26.077.52 0 .947-.025 1.278-.075.325-.05.662-.14 1.003-.267a10.6 10.6 0 0 1 .89-.292c.261-.071.55-.13.865-.177.311-.047.663-.082 1.058-.105.39-.024.849-.036 1.376-.036.987 0 1.828.045 2.543.137.739.095 1.281.231 1.625.415h1.911l.394.254h-1.984c.138.236-.146.432-.884.578-.772.153-1.945.232-3.495.232l-.258-.566c.826 0 1.437-.034 1.825-.1.381-.065.518-.157.42-.271-.08-.093-.288-.164-.624-.215a8.382 8.382 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5M)" d="M349.542 320.122a106.348 106.348 0 0 0-9.253-.058l-11.769-.074c-.203-.1-3.489 0-3.489 0l-.04 3.444c0 1.902 8.63 3.444 19.275 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M363.54 320.21c0 1.902-8.63 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.543 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M362.952 320.21c0 1.78-8.367 3.224-18.687 3.224s-18.686-1.443-18.686-3.224c0-1.781 8.366-3.224 18.686-3.224s18.687 1.443 18.687 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M362.454 320.21c0 1.604-8.143 2.904-18.189 2.904-10.045 0-18.188-1.3-18.188-2.904 0-1.604 8.143-2.904 18.188-2.904 10.046 0 18.19 1.3 18.19 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5N)" d="M347.536 319.792c-.51 0-.907.022-1.194.067a2.822 2.822 0 0 0-.794.238 7.276 7.276 0 0 1-.775.318c-.276.095-.602.179-.98.25-.386.073-.845.131-1.376.173-.538.043-1.173.065-1.902.065-1.256 0-2.221-.073-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.388l2.42-.133c.363-.174 1.003-.033 1.828-.122.799-.087 1.755-.518 2.886-.518l.015.467-.186.311c-.747 0-1.322.024-1.73.073-.413.05-.659.117-.73.204-.074.088.024.157.298.208.277.052.699.078 1.259.078.52 0 .947-.026 1.278-.076.325-.05.662-.14 1.003-.266.327-.123.622-.219.89-.292.261-.072.55-.13.865-.178.311-.046.663-.08 1.058-.105.39-.024.849-.035 1.377-.035.986 0 1.828.045 2.542.137.739.095 1.12-.07 1.464.114l2.466.166v.388h-1.984c.138.237-.146.432-.884.578-.772.153-1.946.233-3.495.233l-.258-.567c.014-.192-.042-.182 0-.388.626-.01 1.502.344 1.826.288.38-.065.517-.156.418-.271-.079-.092-.288-.163-.623-.214a8.26 8.26 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M347.536 319.404c-.51 0-.907.022-1.194.067a2.837 2.837 0 0 0-.794.238 7.28 7.28 0 0 1-.775.317 7.112 7.112 0 0 1-.98.25c-.386.074-.845.132-1.376.175a24.68 24.68 0 0 1-1.902.064c-1.256 0-2.221-.073-2.874-.216-.626-.137-.866-.31-.745-.512h-2.132l.392-.253h2.072c.363-.173.959-.301 1.784-.39.799-.087 1.755-.13 2.886-.13l-.17.39c-.748 0-1.323.024-1.73.073-.414.049-.66.116-.732.203-.073.088.025.158.299.209.277.051.699.077 1.259.077.52 0 .947-.025 1.278-.075.325-.05.662-.14 1.003-.267.327-.122.622-.218.89-.291.261-.072.55-.13.865-.178.311-.046.663-.081 1.058-.105.39-.024.849-.036 1.377-.036.986 0 1.828.045 2.542.137.739.095 1.282.231 1.625.415h1.911l.394.254h-1.983c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.258-.566c.826 0 1.437-.034 1.826-.1.38-.065.517-.156.418-.271-.079-.092-.287-.163-.623-.214a8.438 8.438 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5O)" d="M346.952 315.066a106.32 106.32 0 0 0-9.253-.058l-11.769-.073c-.203-.102-3.489 0-3.489 0l-.04 3.443c0 1.902 8.63 3.444 19.275 3.444 10.644 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M360.95 315.154c0 1.902-8.63 3.444-19.274 3.444-10.646 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.644 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M360.362 315.154c0 1.781-8.366 3.224-18.686 3.224s-18.687-1.443-18.687-3.224c0-1.781 8.366-3.224 18.687-3.224 10.32 0 18.686 1.443 18.686 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M359.864 315.154c0 1.604-8.144 2.904-18.189 2.904s-18.188-1.3-18.188-2.904c0-1.604 8.143-2.904 18.188-2.904 10.045 0 18.189 1.3 18.189 2.904z" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g opacity=".2">
                                                <path fill="#1a2326" d="M363.542 329.518v3.225c0 .627-.949 1.215-2.591 1.723v2.707c0 .18-.077.354-.222.524.26.155.466.319.601.483.138.167.209.334.209.507v3.222c0 .193-.093.383-.264.566.435.196.772.402 1 .614.232.209.35.428.35.653v3.224c0 1.904-8.629 3.444-19.274 3.444-4.604 0-8.828-.29-12.14-.772l.02-1.617a.705.705 0 0 1-.036-.2c0-.07.016-.14.042-.212v-.006h.003c.193-.547 1.096-1.058 2.553-1.508l.029-2.504a.609.609 0 0 1-.036-.2c0-.035.01-.07.016-.103-1.655-.508-2.607-1.1-2.607-1.73l.035-3.022a.753.753 0 0 1-.035-.202c0-.07.016-.142.042-.212v-.007h.003c.193-.547 1.1-1.057 2.556-1.508l.026-2.324a.624.624 0 0 1-.036-.2c0-.035.01-.07.016-.106-1.655-.508-2.607-1.096-2.607-1.726l.035-3.023a.752.752 0 0 1-.035-.202c0-.07.016-.141.042-.212v-.006h.003c.633-1.8 9-3.225 19.23-3.225 3.867 0 7.465.202 10.48.553v1.55c0 .035-.008.07-.015.106.826.254 1.479.527 1.926.816.443.29.68.595.68.91z" />
                                            </g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5P)" d="M359.938 350.243a106.855 106.855 0 0 0-9.253-.058l-11.77-.073c-.203-.101-3.488 0-3.488 0l-.04 3.444c0 1.902 8.63 3.444 19.274 3.444 10.645 0 19.275-1.542 19.275-3.444v-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M373.936 350.331c0 1.903-8.629 3.445-19.274 3.445-10.645 0-19.275-1.542-19.275-3.445 0-1.902 8.63-3.443 19.275-3.443 10.645 0 19.274 1.541 19.274 3.443z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M373.348 350.332c0 1.78-8.366 3.224-18.686 3.224s-18.687-1.444-18.687-3.224c0-1.78 8.367-3.225 18.687-3.225s18.686 1.444 18.686 3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M372.85 350.331c0 1.604-8.143 2.904-18.19 2.904-10.044 0-18.187-1.3-18.187-2.904 0-1.603 8.143-2.903 18.188-2.903 10.046 0 18.189 1.3 18.189 2.903z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5Q)" d="M357.933 349.913c-.51 0-.908.023-1.195.067a2.814 2.814 0 0 0-.794.238 7.327 7.327 0 0 1-.775.318c-.275.095-.602.18-.98.25-.386.073-.845.132-1.376.174-.538.042-1.173.064-1.902.064-1.256 0-2.222-.073-2.874-.216-.625-.136-.865-.309-.745-.511h-2.132v-.39l2.421-.132c.362-.174 1.002-.033 1.827-.122.8-.087 1.755-.517 2.886-.517l.016.466-.186.311c-.748 0-1.322.025-1.73.073-.415.05-.66.117-.731.204-.073.088.024.158.297.208.278.052.7.078 1.26.078.52 0 .947-.026 1.278-.076.325-.05.662-.14 1.003-.266.327-.122.623-.219.89-.292.262-.071.55-.13.866-.177.31-.047.662-.082 1.056-.106.392-.023.85-.035 1.378-.035.986 0 1.828.045 2.542.136.739.095 1.12-.069 1.464.115l2.466.166v.388h-1.984c.138.236-.146.432-.884.579-.772.153-1.946.232-3.495.232l-.258-.566c.014-.193-.042-.183 0-.389.626-.01 1.502.344 1.825.288.38-.065.517-.156.42-.27-.08-.093-.288-.164-.624-.215a8.439 8.439 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M357.933 349.525c-.51 0-.908.023-1.195.067a2.822 2.822 0 0 0-.794.238 7.434 7.434 0 0 1-.775.318 7.092 7.092 0 0 1-.98.25c-.386.073-.845.131-1.376.174-.538.042-1.173.064-1.902.064-1.256 0-2.222-.073-2.874-.215-.625-.137-.865-.31-.745-.513h-2.132l.392-.252h2.073c.362-.174.958-.302 1.783-.391.8-.087 1.755-.13 2.886-.13l-.17.39c-.748 0-1.322.024-1.73.073-.415.05-.66.117-.731.203-.073.088.024.159.297.21.278.05.7.077 1.26.077.52 0 .947-.025 1.278-.076.325-.05.662-.14 1.003-.267.327-.121.623-.218.89-.291.262-.071.55-.13.866-.178.31-.046.662-.081 1.056-.105.392-.023.85-.035 1.378-.035.986 0 1.828.045 2.542.136.739.095 1.282.232 1.625.416h1.911l.394.253h-1.984c.138.237-.146.432-.884.578-.772.154-1.946.233-3.495.233l-.258-.567c.826 0 1.437-.034 1.825-.1.381-.065.517-.156.42-.27-.08-.093-.288-.164-.624-.215a8.443 8.443 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5R)" d="M362.529 345.812a106.879 106.879 0 0 0-9.253-.058l-11.77-.073c-.203-.101-3.488 0-3.488 0l-.04 3.444c0 1.902 8.629 3.444 19.274 3.444 10.645 0 19.274-1.542 19.274-3.444V345.9z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M376.527 345.9c0 1.903-8.63 3.445-19.275 3.445-10.645 0-19.274-1.543-19.274-3.444 0-1.902 8.63-3.444 19.274-3.444 10.645 0 19.275 1.542 19.275 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M375.938 345.9c0 1.781-8.366 3.225-18.686 3.225s-18.686-1.444-18.686-3.224c0-1.781 8.366-3.225 18.686-3.225s18.686 1.444 18.686 3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M375.44 345.9c0 1.604-8.143 2.904-18.188 2.904-10.045 0-18.189-1.3-18.189-2.904 0-1.603 8.144-2.903 18.189-2.903s18.188 1.3 18.188 2.903z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5S)" d="M360.523 345.482c-.51 0-.907.022-1.195.066a2.84 2.84 0 0 0-.794.239 7.443 7.443 0 0 1-.774.317 7.15 7.15 0 0 1-.98.251c-.386.073-.845.131-1.376.173-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.875-.216-.625-.136-.865-.31-.744-.513h-2.132v-.388l2.42-.133c.362-.173 1.002-.033 1.828-.122.798-.087 1.754-.517 2.886-.517l.015.466-.186.312c-.747 0-1.322.024-1.73.072-.414.05-.66.117-.731.204-.073.088.024.158.298.209.278.051.699.077 1.26.077.52 0 .947-.025 1.277-.075.326-.05.662-.14 1.003-.267.328-.122.623-.218.891-.291.261-.072.55-.131.865-.178.311-.046.663-.082 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.543.137.738.095 1.12-.07 1.464.114l2.466.166v.389h-1.984c.137.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.257-.566c.013-.193-.042-.183 0-.388.626-.01 1.502.343 1.825.288.38-.065.517-.156.419-.271-.079-.093-.288-.163-.623-.214a8.38 8.38 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M360.523 345.094c-.51 0-.907.022-1.195.067a2.83 2.83 0 0 0-.794.238 7.337 7.337 0 0 1-.774.317 7.048 7.048 0 0 1-.98.25 13.1 13.1 0 0 1-1.376.174c-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.875-.216-.625-.136-.865-.31-.744-.513h-2.132l.391-.251h2.073c.362-.174.958-.303 1.784-.392.798-.086 1.754-.129 2.886-.129l-.171.39c-.747 0-1.322.024-1.73.072-.414.05-.66.117-.731.204-.073.088.024.158.298.209.278.052.699.077 1.26.077.52 0 .947-.025 1.277-.076a5.1 5.1 0 0 0 1.003-.266c.328-.122.623-.218.891-.292.261-.07.55-.13.865-.177.311-.047.663-.082 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.543.137.738.095 1.281.231 1.625.415h1.91l.395.254h-1.984c.138.236-.147.432-.885.578-.771.153-1.945.232-3.495.232l-.257-.566c.826 0 1.437-.034 1.825-.1.38-.065.517-.157.419-.271-.079-.093-.288-.164-.623-.214a8.486 8.486 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5T)" d="M359.938 340.757a106.317 106.317 0 0 0-9.253-.058l-11.77-.074c-.203-.101-3.488 0-3.488 0l-.04 3.444c0 1.902 8.63 3.444 19.274 3.444 10.645 0 19.275-1.542 19.275-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M373.936 340.845c0 1.902-8.629 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M373.348 340.845c0 1.781-8.366 3.224-18.686 3.224s-18.687-1.443-18.687-3.224c0-1.78 8.367-3.225 18.687-3.225s18.686 1.444 18.686 3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M372.85 340.845c0 1.604-8.143 2.904-18.19 2.904-10.044 0-18.187-1.3-18.187-2.904 0-1.603 8.143-2.904 18.188-2.904 10.046 0 18.189 1.3 18.189 2.904z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5U)" d="M357.933 340.426c-.51 0-.908.022-1.195.067a2.822 2.822 0 0 0-.794.238 7.383 7.383 0 0 1-.775.318 7.124 7.124 0 0 1-.98.25c-.386.073-.845.131-1.376.173-.538.043-1.173.065-1.902.065-1.256 0-2.222-.074-2.874-.216-.625-.136-.865-.309-.745-.512h-2.132v-.389l2.421-.133c.362-.173 1.002-.033 1.827-.122.8-.086 1.755-.517 2.886-.517l.016.467-.186.311c-.748 0-1.322.024-1.73.073-.415.05-.66.116-.731.203-.073.088.024.159.297.21.278.05.7.077 1.26.077.52 0 .947-.026 1.278-.076.325-.05.662-.14 1.003-.267.327-.121.623-.218.89-.291.262-.072.55-.13.866-.178.31-.046.662-.081 1.056-.105.392-.023.85-.035 1.378-.035.986 0 1.828.045 2.542.136.739.095 1.12-.07 1.464.114l2.466.167v.388h-1.984c.138.236-.146.432-.884.579-.772.152-1.946.231-3.495.231l-.258-.566c.014-.192-.042-.182 0-.388.626-.01 1.502.343 1.825.288.38-.065.517-.156.42-.27-.08-.093-.288-.164-.624-.215a8.481 8.481 0 0 0-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M357.933 340.038c-.51 0-.908.022-1.195.066a2.814 2.814 0 0 0-.794.238 7.382 7.382 0 0 1-.775.318 7.158 7.158 0 0 1-.98.25c-.386.074-.845.132-1.376.174-.538.043-1.173.064-1.902.064-1.256 0-2.222-.073-2.874-.215-.625-.137-.865-.31-.745-.513h-2.132l.392-.252h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.755-.129 2.886-.129l-.17.39c-.748 0-1.322.024-1.73.072-.415.05-.66.117-.731.204-.073.088.024.158.297.209.278.051.7.077 1.26.077.52 0 .947-.025 1.278-.076.325-.05.662-.14 1.003-.266.327-.122.623-.218.89-.292.262-.072.55-.13.866-.177.31-.046.662-.081 1.056-.106.392-.023.85-.035 1.378-.035.986 0 1.828.045 2.542.137.739.095 1.282.231 1.625.415h1.911l.394.254h-1.984c.138.236-.146.431-.884.578-.772.153-1.946.232-3.495.232l-.258-.566c.826 0 1.437-.034 1.825-.1.381-.066.517-.157.42-.271-.08-.092-.288-.164-.624-.215a8.443 8.443 0 0 0-1.23-.074z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5V)" d="M362.529 336.505a106.33 106.33 0 0 0-9.253-.058l-11.77-.074c-.203-.101-3.488 0-3.488 0l-.04 3.444c0 1.902 8.629 3.444 19.274 3.444 10.645 0 19.274-1.542 19.274-3.444v-3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M376.527 336.592c0 1.902-8.63 3.444-19.275 3.444-10.645 0-19.274-1.542-19.274-3.444s8.63-3.443 19.274-3.443c10.645 0 19.275 1.541 19.275 3.443z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M375.938 336.592c0 1.781-8.366 3.225-18.686 3.225s-18.686-1.444-18.686-3.225c0-1.78 8.366-3.224 18.686-3.224s18.686 1.444 18.686 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M339.063 336.593c0-1.604 8.143-2.904 18.189-2.904 10.045 0 18.188 1.3 18.188 2.904 0 1.603-8.143 2.903-18.188 2.903-10.046 0-18.189-1.3-18.189-2.903z" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="url(#kzk5W)" d="M360.523 336.174c-.51 0-.908.023-1.195.067a2.84 2.84 0 0 0-.793.238c-.249.119-.508.225-.776.318-.275.094-.602.179-.98.25-.386.073-.844.131-1.375.173-.538.043-1.174.065-1.902.065-1.257 0-2.222-.074-2.874-.216-.626-.136-.866-.309-.745-.512h-2.132v-.388l2.42-.134c.362-.173 1.002-.032 1.827-.122.8-.086 1.755-.517 2.887-.517l.015.467-.186.311c-.747 0-1.322.024-1.73.073-.414.05-.66.117-.731.203-.073.088.024.158.298.21.277.05.699.077 1.26.077.52 0 .946-.026 1.277-.076.325-.05.662-.14 1.003-.266.327-.122.623-.219.891-.292.26-.071.55-.13.865-.177.311-.047.663-.082 1.057-.106.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.138.74.094 1.121-.07 1.465.113l2.466.167v.389h-1.984c.138.235-.147.432-.884.577-.772.154-1.946.233-3.496.233l-.258-.567c.014-.192-.04-.182 0-.388.627-.01 1.503.344 1.826.288.38-.065.517-.156.419-.271-.08-.092-.288-.163-.623-.214-.33-.05-.74-.075-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path fill="#fa9351" d="M360.523 335.786c-.51 0-.908.022-1.195.067a2.824 2.824 0 0 0-.793.238 7.276 7.276 0 0 1-.776.317c-.275.095-.602.18-.98.25-.386.074-.844.132-1.375.174a24.3 24.3 0 0 1-1.902.065c-1.257 0-2.222-.074-2.874-.216-.626-.137-.866-.31-.745-.513h-2.132l.391-.252h2.073c.362-.173.958-.302 1.783-.391.8-.087 1.755-.129 2.887-.129l-.171.39c-.747 0-1.322.024-1.73.072-.414.05-.66.117-.731.204-.073.088.024.158.298.209.277.051.699.077 1.26.077.52 0 .946-.026 1.277-.076.325-.05.662-.14 1.003-.266.327-.122.623-.218.891-.292.26-.071.55-.13.865-.177.311-.046.663-.081 1.057-.105.391-.024.85-.036 1.377-.036.987 0 1.828.045 2.542.137.74.095 1.282.23 1.626.415h1.91l.395.253h-1.984c.138.237-.147.433-.884.579-.772.153-1.946.231-3.496.231l-.258-.565c.827 0 1.437-.034 1.826-.1.38-.066.517-.156.419-.272-.08-.092-.288-.163-.623-.213-.33-.05-.74-.075-1.23-.075z" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="url(#kzk5X)" d="M359.938 331.448a104.615 104.615 0 0 0-5.277-.13c-1.363 0-2.692.024-3.976.073l-11.77-.074c-.203-.101-3.488 0-3.488 0l-.04 3.444c0 1.902 8.63 3.444 19.274 3.444 10.645 0 19.275-1.542 19.275-3.444v-3.225z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M373.936 331.536c0 1.902-8.629 3.444-19.274 3.444-10.645 0-19.275-1.542-19.275-3.444s8.63-3.444 19.275-3.444c10.645 0 19.274 1.542 19.274 3.444z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#ffc148" d="M373.348 331.536c0 1.78-8.366 3.225-18.686 3.225s-18.687-1.444-18.687-3.225c0-1.78 8.367-3.224 18.687-3.224s18.686 1.443 18.686 3.224z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fbe034" d="M372.85 331.536c0 1.604-8.143 2.904-18.19 2.904-10.044 0-18.187-1.3-18.187-2.904 0-1.603 8.143-2.904 18.188-2.904 10.046 0 18.189 1.301 18.189 2.904z" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path fill="url(#kzk5Y)" d="M317.057 337.772c.243-1.351.54-2.774.891-4.244.263-1.094.542-2.161.834-3.19l2.194-9.456c-.055-.167.671-2.801.671-2.801l3.227.126c1.778.087 1.56 7.088-.487 15.637-2.047 8.55-5.147 15.41-6.926 15.322l-3.014-.148z" />
                                                </g>
                                                <g>
                                                    <path fill="#fbe034" d="M314.447 349.018c1.778.087 4.879-6.772 6.925-15.322 2.047-8.55 2.266-15.55.488-15.638-1.778-.087-4.88 6.773-6.926 15.322-2.047 8.55-2.265 15.55-.487 15.638z" />
                                                </g>
                                                <g>
                                                    <path fill="#ffc148" d="M314.56 348.546c1.665.082 4.623-6.571 6.608-14.86 1.984-8.288 2.243-15.073.579-15.155-1.665-.082-4.623 6.571-6.608 14.86-1.984 8.288-2.243 15.074-.579 15.155z" />
                                                </g>
                                                <g>
                                                    <path fill="#fbe034" d="M314.656 348.146c1.499.074 4.28-6.406 6.211-14.474 1.932-8.068 2.283-14.667.784-14.741-1.5-.074-4.28 6.406-6.212 14.474-1.931 8.068-2.282 14.668-.783 14.741z" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg></div>
                </div>
            </div>
        </section>
        <section class="whyinvest" id="united-linked-insurance-plan">
            <div class="midWrapper">
                <div class="roww m-0">
                    <div class="coll-md-4 text-center mright-1"><svg width="468" height="407" viewBox="0 0 468 407" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="468" height="407" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_1_2" transform="scale(0.00213675 0.002457)" />
                                </pattern>
                                <image id="image0_1_2" width="468" height="407" xlink:href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAeAB4AAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAGXAdQDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9U6KKKACiiigAooooAKKKKACiiigAooooAKKKyPFHivSfBeh3mr6zfQ2FhaRNNLLM4ACqMk+9AGvRX5b/ABs/4KfeMNc1m5s/h5bW+g6NGxWO+uYhLczAfxYPyqD6YNcf4L/4KWfFvw7pesW+q3Nn4jubmDbZ3V3brG1rLkfPhAocY3fKe+Oa09mzL2kT9eKK/DtP2xvjP/wkA1f/AIWBqrXW/f5ZZfJPt5WNmPwr9S/2Of2jG/aO+F39q30Mdvr2nS/ZNQji4RnxkOo7BhziiUHHUcaik7HvNFRyXCR9Tz6Cq73x/hGPrWZoXKY0qL1YCs9pnfqxplAF5rxB0y1RtfHsn5mqtFAE5vJPYfhTTcyH+KoqKAJPPk/vn86POk/vt+dR1HcXUNrGXnlSFP70jBR+tA0m3ZFjz5P75pftUn96uS1D4oeFdMYpPrdoHHVVfcf0rNHxu8HFsf2un12HFc0sVQi7Oa+9HpQyvHVFzQoSa/wv/I9BF5IPQ/hT1vj3T8jXI6b8SPDGrMFttatHf+6ZAD+tdFFNHOgeN1kQ9GU5FaxqQqawdzkrYeth3atBxfmmjRW8jbrlakWVH6MDWZRWhzmtRWaszp0Y1Ml8f4l/KgC5RUcc6SdDzUlABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAfFv7dX7bF58FboeCPBhj/AOEpmhWW7v5BuFkjDKqo7uRzz0BHevzL8VfErxX43u57nXvEWparLOSZPtNy7K2evy5x+lejftoXV1eftP8AxCa7bc6anJGn/XNeEH/fIFcR8GdC0rxP8VPDGk62jyaZeX0cMyI23cCcYJ9PWui6pwcn0OZKVWooLq7FXwb8LPFvxCfHh7QL3VFzgyxR4jB9C5wv61L46+EfjD4Z+SfE2g3WlxzHCSuA0bH03KSM+2c1+tuk6PY6Bp0Fjp1rDZWcCBI4YUCqqjoMCqnizwnpHjjQLvRtbso9Q026TZJDIPyIPUEdQRyCK+X/ALclz6w938T7P/VuHs9Kj5/w/wAz8cvMCqFUf8CxzXR+F/iJ4r8E2U9toWu3+j2tw4mlS0mMYdgMAnHWvcPi9+xD4v8ABuoXF14TgbxTobEtHHGQLuEf3WTjf6ZXr6CvB/EPgXxL4Xj83WtA1LSYg2zdeWkkS59MsOtfSUsTRrpOEkz5CthK+Gk41INf13P03/4J0fHnxP8AF7wf4j0rxRdyandaFLB5OoTffkjlD4Vj3KmM8+jCvr+vj/8A4Jg2dtF8Ar+5j05bW5m1eZZboA7rkKqbWJPZcleOOD3zX2BSl8TKh8KCiiioLCiiigAqpqmrWei2Ml3fXEdrbRjLSSNgVS8WeK9P8G6LNqWpS+XCnCqvLSN2VR3Jr5L8f/EfVPiBqRmu3MNmhPkWaH5Ix/U+9eTjswhg1beT6f5n12Q8O186nzt8tJby/Ref5Hpvjb9pKRne28NwBEHH2y4GSfdV7fjXjmteKtX8RTNJqOoXF0W6q7nb+XSsae4itYXlmkWKJBlncgAD1JrhtR+KsU0pt9A0+TWJc4E7ExQfgcFm/BcH1r4yriMTjXeT0+5H7bhcuyzJIpU4JS77yf6/dod5RXnGfiBrHz+fFpiHotvAikfXzC5P5Cl/4R3xwvzDX5S31h/kY8Vz+xXWa/H/ACPS+uyfw0Zfh/mejVu6D431zwzMr6fqU8GP4N5Kn2wa8abUvHehfNOkOpxLyfOgG4j/AHoiAPqVP0rT0b4pWF3IsGqQPo9wTgNI2+En2kwMf8CC1Sp1IPmpO/o/6ZnPE4auvZYmFk+klp+q/E+u/Av7R8N00dp4jhFu54F5CPk/4Evb8K9ttLyC/to7i2lSeCQbkkjYFWHqDXwWrB1DKQynkEdDXefDP4r6j8P75YyzXekSN++tGPT/AGk9G/Q/qPcwWcSi1DE6rv1+Z8FnnBdKtF18tXLL+Xo/Ts/w9D69oqjoeuWXiLS4NQ0+dbi1mXcrr/IjsR6Ver7JNSV1sfi04SpycJqzW6CpY7l4++R6GoqKZBfjukk4Pyn3qesmpYrh4+hyPQ0AaNFRRXCy9Dg+lS0AFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUVHLMsK5PX0oA/JH/gpd8MJvBnx8fxDHCy6b4kt1uUkx8vnIAkq59cgN/wACFfOHwrkeP4k+GXTIcahCRjr98V+s/wC3d8Kn+MPwPu7Sxto7nxHYXEd3pkWVV3bcFkQEkYyjE/VRX5rfBf4T+ItN/aI8MeH9Z0m40++tbuO6nhlXpEnzFgRkEYHUHFOdaCpyTeqTCnQqOrCSi7NrXpufof8AEjwzpWvafFNreuajpGnWxy62V6bVZCf7xX5j9AaveA7nQ5NAit9Av31Cyt/kEk1w80mevzM5LH8a3bqzgvVVLiGOdVbcFkUMAR0PNcx4RvfENx4l8SwaroNnpelQTIum3dvIGe7jwcs47Y4/M1+eXcqbV9j9VcVGqpW38v16Il8dX0w8MNcWGryaYWZcXFrafapGycbUTPUn614V8bvCur/E74MpoiXGqajq7axarG2q2AtZQHYrnaBgjnOfavdtBkbSde1bRCcK2dQst3TY5/eL/wABkOfpIBWj8H7fxPHep/wmUmn3d0L92tvsaYVYcnZnP8QFdmFn7OpF9mv6/pnn4yDrUprXWL9NPn92h6p8JPhrpfwj+HujeF9Ih8m1sYFVj3eQjLufctkn6119FFfbH50FFFFABUdxcR2tvJNM4jijUu7N0AAyTUleS/tEeMW0PwzFpVu+251A4fB5EY6/ma5sRWWHpSqy6HpZbgZ5li6eFhvJ/cur+SPGPix8Qp/HniKR0dl0y3JS2i7Y7sfc15zrmuWnh3TZb68k2RRjoOrHsoHcmr9cFZ25+IHiV9Rmy2hadIYrSM/dnlBw0nuAeB9Ce9fnDk8ROVWq/X/I/piNOGX0KeEwkbdF+rf5vu35lS30LVPiNcLe61us9IB3Qaep6+jP6n68Cu803R7PSYRHaQJEMYyByfqauKoVQAMAdAKKyqVXPTZdjroYaFH3t5Pdvd/12CiiisTrCsjXPCun69GwnhVZSMeaowfx9fxrXoqlJxd0RKEai5ZK6PMYZNU+Gd2sbh7zRGP3Bk+WPVPT/d/KvR7G+g1K0iuraVZoJV3I6ngii+sYdStZLedA8bjBB/nXBeH5pvA3ig6LcsTpt8+bdz0SQ9Pwbp/vY9a6Xaum/tL8f+CeZFPAzUb/ALt6f4X/AJfkfSPwS+JD+D9cWwu5T/ZN4wVgx4jc8Bh/WvqpWDKGByCMgivgnpyK+tfgf4wPirwXCk777yyPkSZ6kD7p/KvpMlxbd8NN+a/yPzPjjJ4xtmVFb6S/R/o/kehUUUV9YfkIUUUUALVmG8I4fketVaKANVWDDI5FLWbFM0J46elX4pVlXI/EUAPooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooqC4uBEMDlqAFnuBCvHLelUWYuxJOTSFixyeTSUAee/E+GX7ZYS7Wa3xggDPPP8AiPyrkDawmdbjyk8/bt8zaN2M9M17bcW8V1GY5o1lQ/wuMivO/HVhDY6lAIIlijaL7qjAyCa+WzHBuMpYhPRn2uU4+M4xwrjqr6nNVUutUt7O+tLWZjG91uETNwpZQDtz/eIyQO4VvSrdQX1hb6lbmC6hSeIkNtcZwQcgj0IPIPavBVup9O720M260O4vPEVhqTXUSQ2e/bEkJEjhkKlWffjbnDY29VFdHpcnlalav6Sr/OqiqFUAdBxVixUve26qMsZFA/OrjJ80fIznFckvM9mopF4UZ9KWv0Q/JwooooAK+TPj1rh1j4hXkQOYrNVgUdsgZP8AOvrMnHNfD/jC6a98VavMxyWupOT7MRXzWeVHGjGC6v8AI/TuA8Op42rWf2Y/m/8AgHF+NLq4h0CaCzfyr29dLOCTujSMF3/8BBLf8BrS0nS7fRdNtrC0QR29vGI0UegGKy9Z/wBI8UeH7c/djNxeY90QRj/0d/Kt6vj5aQjHvr+n6H7NTXNXnN9LR/C/43/BBRRRWJ2BRRRQAUUUUAFct8RdDGraBJMmVuLX96jrwwHfB9sA/hXU0yaNZoXjYZVlKkfWrhJwkpIyrU1Wpypy6lDw1qx1zQbG9bHmSxjzAvQOOHA+jA17d+zbrjWPjG409mxFeQHj/aU5H6E/lXzt8Nd0Wj3tsxyLa9kiHtwpP6k1638Jrs2XxF0KQHH7/YfxBH9a7sPL2OLi13/Bng5lS+u5PVhPdwf3pX/NH2VRRRX6UfzEFFFFABRRRQAU5JDG2VODTaKANGGcTD0b0qWspWKnIODV+3uBMuDw1AE1FFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRTJZBEuTQAy4mEK/7R6VQZixyeTSu5kYk9abQAUUUUAFcP8SIvnsZPZlP6V3FfNn7Sn7TGh/DjxJa+HDp8+q6hFGJ7gwyKiwhvuqcjkkc+wx615eZOKw0uZ9vzPpuHcDiswzGFLCQcpWb07W31OmPTjk1Qj1y0Mxhlk+zzDgpL8v69K8HX9snR+/h2+H0nT/CoLz9rTwxqSgXPhq/fHRhImR+Oa+HcuzP2FcMZt9rDv74/5n0bbsLyQJARO56LH8xP5V3PhLwjLBcJe3q7CvKRHrn1NfKPw3/aq8EaP4wsbi503VbCBiY3uJCjpGGGNxAOcDPavtnStWs9c0+C/wBPuYryznQPFNCwZXU9wRX0GVYenW/eTeqe36nwXE2HzHKOWjWpOEZrd9e6utP1LVFFFfWH5qFFFFAAw3KRXw14niaDxJqsbDBW6l/9DNfctfHfxi0g6N8RNWj27Ulk85Powz/jXzGewbpQn2f5n6lwDWUcVWpPdxT+5/8ABPLtT/deMNDlPR4Lq3/E+U/8ozW7WD4w/wBFs7LUx/zDbtLhz6RkGOUn2Ecjt/wGt6vkZawi/l+N/wBT9jpe7VqRfdP5NJfmmFFFFYnWFTTWc9tHFJLEyJKu5GYcMPUVu+DvCMviS63vmOyjP7x/X/ZHvXQ/ECwmvbvT9L060eQQJ0jXhc9BmtFB8vMeZUx0I4iOHXq/I87qxPp9zawxzTQSRRSfcZ1IDfSvTdB8D23h20+2XsLahfAZWJF3BT6Adz7n9Ko6l4T1rxRd/adTnh063HEcOd5QfQcZ/Gn7N2OX+1qMqjSaUFu319Fu/U84orX8T6LHoOpm0jlkmAQMWkTbnPoKxppBHE7noqkms7a2PZp1I1YKpHZnN+Bo9setMBgPqcxH5LXp3wxhM/xA0JF6/alP5c/0rgvDFi1jo0KyLtmlLTSeu5iWwfcAgfhXr37P+kNqXxEtZtuUs43mJ7A42j+ZrtoR9pioJd0eNj6iw2V1py6Ql+Kf+Z9X0UUV+mn8uBRRRQAUUUUAFFFFABSqxVgRwaSigDRgmEy/7XcVLWXHIY2DCtGOQSKGFAD6KKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAQkKMngVnzzGZ89u1TXk38A/GqlABRRRQAUUUUAZXivxLZeDvDWp65qL+XZafbvcSnvhRnA9z0Hua/Inx34wv/AB/4y1fW7x/9L1C4a4lbqEBPyoPoMAewFfe/7eXjB9C+Edro0L7ZNavVjcZ6xR/Ow/768uvzwhj8uPn7x5b618jnFe9RUu35v/gH9OeF+TqngKmYS3qtq/8Adj0Xa8t/8JH9ij7l2PqXP+NOW38v/VuwH91juH61LRXzvNLqz9xWHpR+GNvTR/eH1r2j9n79pjWvgxqKWczPqXhqV/31izcxerx+h9uhrxekZQ3WrpVZ0ZqcHZnLmOX4bNMNLC4uCnCXR/mn0fmfr/4F+IGhfEjQYNX0G/jvbWQAkKfnjP8AdZeoP1roq/HnwX8QPEfw91Qah4c1W40+4VsExPgPjsw6MO3NfX3wh/b+sr1oNN8f2P2G4OF/tSzTKH3ePt9Vz9K+3wWPhiVyy0kfyPxRwVisim6+HvOg9n1Xk/0a38j7IorN8O+JtJ8W6XFqOjajb6nYyDKz20gdfocdD7HmvIvjn+1f4V+Dsc9hBIuueJQCF0+3cbYW/wCmrfw/7o547da9U/OIU51JcsVqeueI/E2l+EdJn1PWL6HT7GFdzzTuFA/xPtXxb8Q/2gPD3xg+IDW+iW0scFrDsS7m+U3OD1C9gPevnH4sfG/xR8XdWa88Q6ixtwxMFjEdsEI9FXufc81x+i6rd6TqVve2aFZIXDBpPlB9R615OYezqUJQm0v8z9F4Yy7F0cbCth6cpyW6iuj3v/wT6ouII7qCSGVA8UilHVhkEEYIrlNP8VWXhm1m0zV71Ip7DEaM5y00WP3be5wMH3HvXl2rfFDXda8xPtIsowcGO2G3t69a5d2MkhdyXc9WY5P518KoqKcZan9GUckxFecasmoWuu7t2stN/M9Y1r41wx7k0qyaY9prg7V/LrWf4F+IWsax440+1v7lGt75/soiChI0diAjev3sDk/xV5tTlZo2VkYq6nIZeCCOhpx5VpbQ9upklL2Eowbc7aNvr00Vla+/kfo94b0kaJottaYAdVy5Hdj1rTrj/hL42X4geAdL1csDdNH5V0o/hmXhvpn730YV1F5f22nQmW5mSCMfxOcV0W5dD+c6qqSqyU1793defUmkDsMIQp9SM1nal5lrC0iSwxMB/wAfFycgfQVyut/FKCHdHpsJmfp50nC/gK4HVdevtakL3dw0noucKPoKwlUitj3cHk+IqNSqe6vPf7v8x/iObz9Wmf7Yb/PWbGM+wHpWHcS+ZMlsn3m+Z/8AZX/6/T86be6gLdlhiXzbpx8sY7D+83oKfZ2v2ZGLt5kzndJIe5/wrn/vM+3irJUo9NyxX0p+zb4VbTfD91rMybZL5tkef+ea9/xOa8N8B+D7nxv4kttNgBCE7ppMcIg6mvs3TNPg0nT7eztkEcECCNFHoBX0eS4VyqPES2W3qfm3HGaRo4dZfTfvT1fklt97/Is0UUV9ofiAUUUUAFFFFABRRRQAUUUUAFTW83lNz909ahooA1evIpaq2c2fkP4VaoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACo5pPLjJ79qkqhdSb5MDotAEJJY5PWkoooAKKKKACiiigD4n/wCCidw7aj4Mg58tYrhx6ZJQH+Qr43r7y/4KD+GftvgPw7rqLlrC+a2cj+7KmQT7Zj/Wvg1s9jg18FmkWsXK/W35H9l+HdaFXhugofZck/Xmb/JoKKjaZYyBJ8mehPSpK8o/SIyUtgqO4lMURI5Y8KPc1JUH+uuv9iL/ANCNVHe7Mq0mo8sd3ov8/ktSWKPy41X0FEkayLtdQw96dRSu73L9nBw9m1dbWNLw74w8SeCPtDeHtevtJWdCky29y8YdfQkH+eaxHhnupGluJyWY7m2nJJ92PWrDKGUqehGKjtGL20THqVFeh9fxPs+Xn/z+8+NfCWSfXPbfV1dq9teXTy267beQsVrFCcqg3f3jyfzNSUUV58pSk7yd2fY0qNOhBU6MVGK6JWX4EE58mZJv4T8j/ieD+f8AOp6SRBJGyMMqwwRUdszeXtc5dPlJ9fenuvQzj+7qtdJa/Pr9+/3ktFbmi+B/EHiKAz6bo15d26nDTxxHy1+rdK7XQfgq7bZNYu9g729t1/Fj/QU3Bx1loebWzjCUm4wlzyXSOtvV7L5u5Z+A3xXvPBdzfaItxFFbX/76N5ufLkUc4ycDK+o/hFeoX3iA6lIbi7vxOx/ieQH8qydM8L6To9sYLTT4I4z97KBi31J5P41IPD2lK24aZZhv732dM/yrOU4ytufntaHNiamIp04pzd/P77dd+hG/ifTFYpHdLcyj/llbAyv/AN8rk0n2jUtS4hh/s2A9Zp8NKR/soDgfVj/wGtSONY1CooRR0VRgCnDJ4HJrPmitkHJOXxy08tPx1/CxVsdPhsFYR7mdjl5ZDl3PqTWzoehX3iTU4NP0+3a4upmwqqP1J7AetdZ4I+DuveMpEk8hrCwJ+a5uARx/sjqa+lfAvw80nwDYGGwi33Dj97dSDMkn49h7V6+Dy2ripc89I9+/ofH51xPhMpg6VBqdXolsvV/puVfhl8ObX4e6IIFKz6hNhrm4A+8f7o/2R/8AXrsaKK+8p040YKEFZI/AcTiauMrSr15XlLVsKKKK0OUKKKKACiiigAooooAKKKKACiiigBVYqwI6itKKQSIGH41mVYs5dr7T0NAF6iiigAooooAKKKKACiiigAooooAKKKKACiiigCK4k8uMnv0FZ9T3km6TaOi1XoAKKKKACiiigAooooA8s/ag8L/8JZ8CfF1qq7pre0+3R+oMJEhx9VVh+NflY10g4XdIfRBn9elftDdWsV9azW86CSCZGjkRujKRgj8q/H7xp4bl8H+L9a0ObPmadeTWpJ77HKg/iBn8a+UzqmlKFW3kf0j4UY6U8PicApW5WprrurO3pZfec6yy3ClXVY4z1HVj/hVeSzuLMbrOTco/5YynI/A9q0KK+b530P3l4aMtZNuXe+v4GXFr8O4xXCtazj+GTp+daEChYhtIbPO4d/eor7T4NQj2TIG9G7j6GufuNI1DR2L2UzvF12r1/FehrRKE1ZOzOCpPE4WXPOPtIrqtGvls/wADqaK5a38XTxfLc26uR1KHafyNaUPiqwkHzM8R9HQ/0zSdGa6XNKea4SpvLlfnp+O34mvUNp8sbr6Ow/Xj9Ks+HYJvF2pJp+iW82q37gsttaRNJIQOpCgZr1zwb+yL8UPFk5KeHJNJt3kAafVmFsE4AztPzkcdlNa08NWqJqMH9xwY7PcqwMo1MRiYRtf7SvZ9ktXquiPIKmtbSe+uI7e2hkuJ5DtSKFC7MfQAck19t+BP+CeumWvlz+MPEk9+/VrLSUEMec9DKwLMMeiqfevpLwP8JvCHw3thD4c0Cz03jDTIm6Z/96Rss34mvWo5NVlrVdvxZ+aZr4qZfh7wy6k6su792P8A8k/uR+f/AMOv2OfiJ48aKe6sF8NacxBNxqmVkK55KxD5s+zba+pvhr+xH4F8FmK61dJPE2pKAWa84hB9oxxj65NfQ9FfQUMvw+H1jG77s/Fc441zrOrxrVeSD+zD3V/m/m2VbPSbLTbNbS1tILe1UYEMUYVMfQVyXiL4N+FfEbPJLpy207cmW2Ow59TjrXb0V2VKVOqrVIpo+Pw+LxGEnz4eo4vydjw7UP2XrJ2JstZniHpNGG/lisz/AIZaut3/ACMEOP8Ar1P/AMVX0JRXnSyrByd+T8X/AJn0kOLc5grKtf1UX+h4jp37L+nxsDe6xcTAfwwoEB/PNd74c+Efhfwyyvbaaks69Jrj943612NFb0sDhqLvCCv9/wCZ5+Kz7M8YuWtXduy0X4WEVQqgKAAOgFLRRXeeAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABS9KSigDShk8yMHv3qSqVnJtYqe9XaACiiigAooooAKKKKACiiigAooooAKa7bFLHsKdVe8fbGF9aAKTMWYk9TSUUUAFFFFABRRRQAUUUUAFfm5+234T/4Rv45Xt4ibYNXtorwYHG7HluPrlM/8Cr9I6+RP+ChXhP7V4a8NeI40y9ncPaSsB/DINwJ/FMf8Crx81p+0wzfbU/UPDjH/UuIKcG9KqcP1X4pHw1RRRXwh/YoUUUUAVLzSrW+/wBbEC394cGsqTwfCzZSd1HoRmugzjk8CoftkR+63mf9cxu/UVrGU18J5+Iw+Em71kr/AHHVfs63J+HPxo8K62t0RFHeLDMCMAo/yHPtzn8K/XtWEihlOVYZBr8XoppNwZUMZU5BJ5B/Cv1r+CfjAeO/hX4a1rcHluLNBLjtIo2uPwYGvqMnrOXPSk/M/nnxSymlRWGx9CNk7we/qt/mdvRRRX0x+ABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQA5WKsCO1aasGUEdDWVV+zfdFjutAE9FFFABRRRQAUUUUAFFFFABRRRQAVQvG3TY9KvVmSNucn1NADaKKKACiiigAooooAKKKKACvLf2nfCf8AwmXwR8T2apvmht/tUQA53xkOAPyr1KoNQs01CxuLWQZjmjaNgfQjFZ1IKpCUH1R35fipYHF0sVDeElL7nc/GbOOtRNdRKxXdub+6o3H8hW/488M/8Iv4z1rR5o8Gyu5IQrf3Qx28fTFYiqFUBQAPQV+aNKLs9z++4VJ14RqUmuVpNPfR/cQ+dK/3ICPeRto/qaPJnk+/PsHpEoH6nP8ASp6KXN2RXseb45N/O35W/G5CLOHqy+YfWQlv59KmoopOTe5rCnCn8EUgr71/4J++Mv7U8A634clk3S6XdiaNc9IpRnH/AH2r/nXwVX0B+xH4y/4Rf43WlhLJsttatpLJsnjzAPMjP1ym0f71ejl1X2WJi++n3nwvHWXf2lkGIgleUFzr/t3V/wDkt0fpBRRRX6AfxQFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABVizbbIR6iq9PjbbIp9DQBp0UUUAFFFFABRRRQAUUUUAFFFFAEczbYmPtWbV+8bEP1NUKACiiigAooooAKKKKACiiigAooooA/N39tjwn/wAI58bLy8RNsGqwJdA46tja38hXgNfc/wDwUH8I/avDXh3xFGmXtJ2tZWx0Vxlf1Br4Yr8+zGn7LEzXfX7z+2uB8f8A2hkGGm3rFcr/AO3dPysFFFFeafdhRQSB1OKha8i3EBt7dwgLH9KpRb2RnOrCn8ckiatTwvr1x4W8S6VrNqcXOn3UV1H/ALyOGH8qxfOlb7sOPeRgP5ZpyrKfvOoHoq/1/wDrU1eLvcylKFaLg4tp6PS2j9bH7M6Pqlvrmk2WpWrb7W8gS4ib1R1DKfyIq3XiX7HXjL/hLvgXo0cknmXOlM+nyk9cIcp/44yj8K9tr9Ko1FVpxqLqj+B80wMstx1bBy3pya+56P5rUKKKK2PLCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDTjbdGp9qfUNq2YRU1ABRRRQAUUUUAFFFFABRRRQBVvj8qj3qnVq++8oqrQAUUUUAFFFFABRRRQAUUUUAFFFFAHhP7aqq3wF1TcoOLiEjPY5PNfmk06L1bJ9ua/Sn9txnX4C6htAIN3AGz6ZNfmyAB0GK+Lzi31hX7H9X+FvN/Yc+V/8vJflEhM0jfciP1c4pPLnk+/KEHpGP6mp6K8Pmtsj9e9jzfHJv8AD8rEIs4urgyn/poc/p0qZVCgADA9BRTZJkhXdI6xr/eY4FK8paFRhSopySS8/wDMdRWRdeLNJs8772Nj6R/N/Kse6+JNlHkQW8sx/wBrCj+tdtPA4mr8FN/l+Z81jeLMiy+/1jFwTXRPmf3Ruz7t/wCCe/jL7L4g8R+GZZMJdwreQqT/ABocMB9Q2f8AgNfcVfml/wAE4r618bfGLVJ7kyWl5penm5tlifiQMwjcN68PX6W19ngKNXD0FTrLVH8n8aZjl+bZvPG5bJyhNK9017y06+SQUUUV6J8KFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAF2xP7th71ZqpY/x1boAKKKKACiiigAooooAKKKKAKV9/rF+lVqs33+sX6VWoAKKKKACiiigAooooAKKKKACiiigDwj9tSCW6+Bd9FBE80jXkACRqWJ5PYV+ZWraxZ6HdS21/OttcxNtkhfO9SOxXqK/atlDYyAcHIyK/Jr/AIKR/Dn/AIQ34/PrUMWyy8RWqXgYDjzV+SQfXKhv+BV5WIyyGMrc85NadD9LyHjzFcNZc8FhaEZNycuaTfVJbK3bueNXXxG02HIhjmuD6hdo/Wse6+Jl0+Rb2kUQ9ZCWP9K42iumnk+Dp/Zv6s4sb4kcSYy6VdU12hFL8Xd/ibV14x1i7yGvHjX0iAT9RzWTNcS3DbpZXkb1diTUdFenTo0qX8OKXoj4TGZnjswd8XXlU/xSb/NhRRRWx5h9Q/8ABOPxF/Yf7S2mWzNsi1KzuLZvc7Cyj/vpRX66V+HX7MPiP/hFfj94F1Itsjj1SFZD/ss2CP1r9xa56m51UtgooorI2CiiigAooooAKKKKACiio5riK3GZJFT/AHjigCSisybxJp0HW4Vj6LzVWTxlYL93zG/4DigDdornf+E2tP8AnlJ+lOXxpZN95JF/DNAHQUVjx+LNOk481k/3lxV2HVrO4/1dzG3/AALFAFuigHPI5FFABRRRQAUUUUAFFFFABRRRQAUUUUAWrH7zfSrlU7H7zfSrlABRRRQAUUUUAFFFFABRRRQBTvvvL9Kq1bvv4TVSgAooooAKKKKACiiigAooooAKKKKACvnD9uv4BzfG74OyzaTb+f4l0BmvrGNFy86bf3sI92UAgd2QDvX0fRTTs7iaurH89bKUYqwKsDgg9RSV+hv7dH7Eb3FxqPxI8AWe6SQtcavo8C9W6tPEB3PVl9ckd6/PNlKsQRgjgg11xlzK6OKUXF2YlFFFMkKKKKANDw/qB0rXtNvQ2029zHLu9NrA/wBK/fXw5qg1vw9peog5F3axXAI/20Df1r+fqv3D/Zd8R/8ACVfs++BdRLbmfTY429imVx/47WNTob0t2epUUUVgdIUUUUAFFFY2reJIbHdHDiaYdeflX6n+lAGvJKkMZeRlRB1ZjgVh33iyCHItkM5/vn5U/M9a5XUNYmv5N0r+YR03fdH0Xp+eaos7SNliWPvQBsXvie8uiR5/lr/diGB+dcfr3jbStFZhf6gom/55Al3/ACHT8a1q53xV4E0zxZGTcR+RdgYS6hwHHoD/AHh7H8MUActqXxusosrY2Ms57NMwQfkM1gXXxr1eXIhtbaAdjgsf1NdRp/wS0OHab24vL0/xIJBEh/75G4f99Vu2/wAOvCOmpk+H9Pkx/wAtb2Pz2H/ApM0AeSXHxv1iN9j6hZwt/dZUB/Wkj+OOrDrqVk/4JXvGnWdhYxAWFnZW8fb7PbxqP0FXfOP92P8A79r/AIUAeEWPxz1ORuPsV2O4X/6xrpNH+NkM11HHqFl9njY4M0TEhffHpXo99pen6pj7bptneY6edbo39KxL74a+FNQOX0SC2Pf7GWgB+oQjP40AdTp2uTeTHPZ3ZeFxuVkfKsK6Cy8bTx4W5iWVf7y8GvOPDvg2LwnO62GoXTWEmSbO4IdVPYqcAg+vJz+tdDQB6TYa5Z6jgRSgSf8APN+Gq/XlSSFMdx6Gug0nxTPb7UkJuIv7rffH0PegDtaKr2OoQahEJIHDDuO4+oqxQAUUUUAFFFFABRRRQBbserVbqrYj5WPvVqgAooooAKKKKACiiigAooooArXo/dg+9Uq0bld0LVnUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUADKGUgjIPBBr8wP+CjX7OekfDfXNO8beHbb7HZa1M8d5axjEcc4Gdyjtu9PWv0/r53/b68OWWv8A7MXiia7GJNO8q8gbHPmBwuPyY1cHZkTV4n45UUUV1HEFFFFABX64/wDBOHxH/bf7Ntlas26XTr2e3I9FyCv86/I6v0f/AOCUviPzfDXjbQmbLQ3UN2q+isu0/qKzqfCa0/iPvavP/iN8Vk8E3UdnbWq3l2V3uGbaqA9PxNegV80/Gfd/wm1+T0Z1A+gjT/E1zHWdHD+0ZeKwM2ixMnfypTn9RXSaN+0J4b1BljvFuNNkP/PVdyj8RXz5UU1ukw+Yc+tAH03qHj601pTFpV2ksPeSNvmb/AVivIX69PSvnTbcafIJIZHQjkMhINdPoHxK1WzuIYbl1u4WYKfMHzAE+tAHsVFIrblB9RmloAKKKo61rEWiWDXMoLtkJHEv3pHPRR7n+QJ7UAVfEniWDw7aqzKZrqT5YbdfvOf6D3ryzW9QudYlZ9RnM7npbqf3UY9Mdz9afqmpTXV5NcTSCW9l4eRTlY1/55p7D171m0AUJrrUvDrC+0i6mhEfMlqrEoy9yq9AfbvXrXw/8fQ+MLPZIVjvkXLKp4cf3hXmlc1b3Fx4W14SWjmIqfOhI9CeV+gP86APp+isXwl4mg8VaRHdxECUfLLH3Rq2qACiiigApaSigC7Y6hLazCRH8uQfxdj7Gu30XXY9UXYw8q5UfNH6+4rzup7e5eF0ZXKOpyrjt/8AWoA9RorK0HWl1W32vhbhPvr6+4rVoAKKKKACiiigC9ZjEOferFR267YVHtUlABRRRQAUUUUAFFFFABRRRQA1l3KR7VmGtWs24XbMw/GgCOiiigAooooAKKKKACiiigAooooAKKKKACvnf9vy8+x/sv8AikZx5zQxfm4P9K+iK+Wv+Ckl59k/ZmvFzgzanax/qx/pVR3RMvhZ+R9FFFdZwhRRRQAV9m/8EufEf9nfGjXNILYGpaWW2+pjcH/2avjKve/2GfEn/CN/tOeD3LbI7ySSzc+zocfqBUy1TKj8SP2ar52+O8Hk+LVbH+sTf+gH9K+ia8F/aEhP9vWEvbyNv6muQ7jyeiinwW8l1KscSNJI3RVGTQAyrGl+FbjXrxFtUZBuG+QD5V967Pw/8Oi22bU22jqIFPP4mu6tbWGyhWKCNYo16KoxQA+NTHGqk5KgDNOoooASSRYo2d2CooyWPQCvKPFXiFtWvzKpIRQUgX+4h6t/vN+gx6mvT9RsY9Ts5LaVmWOThthwSPSuYuPhrZSsWW5mQn1waAPNaK7yb4Xn/llff99pVOb4Z36fcnhk/MUAcfWR4ktfMtFnUfPA276r0IrupvAGsRdIUf8A3XFUbjwhqqoyyWMhVhg4waAOX8FeLJvCerpcKS9rJ8s0Y/iX1+or6JtbhLy3iniO6ORQ6n1BGRXhnhT4X6jqepKt5A1rYxP87OMFgOwr3WKNYY0jQbUUYAHYUAOooooAKbJMkQy7BaceBWHNKZpCxNAGxHcxynCuCakrA6cir9nfnISQ/RqANixvpLC6jnjOGU/mPSvSLC+j1C1jnjPysOnofSvL66Pwfqn2e6Nq5/dy8r7NQB2tFFNdfMXGce4oAdSqNzAVFbyGSP5vvKSp+oq1arumX25oAvgYAFLRRQAUUUUAFFFFABRRRQAUUUUAFVL5eVb8Kt1FcR+ZEw79RQBnUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAV8e/8FP7zyfgNp1vn/XatEf++VY/1r7Cr4g/4KqXvk/DHwfb5/12pyHH+7GD/Wrj8SIn8LPzJooorqOIKKKKACus+EuvHwz8UfCWqhtgtNVtpGb/AGRIu79M1ydKrFGDKSrA5BHagD+hG3mFxBHKv3XUMPxGa8S/aJwb7SNvUI+78xj+tejfCjxCPFnwy8K6ypDC+0y3uMj/AGowa5zxdb22q64ZZ4lmaBvk3DIU9K4j0Dx3QPA97rG2WUG1tTzvYfM30FejaP4fstDi220QDd5G5Y/jWjRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFYMiGORlPY4rerO1K3wwlA4PBoAoUUUUAa2n3Hmx7T95auxSNDIkiHDKQQaxLGTy7hfQ8GtlVLMAOpoA9Da5S9tbO4kBNq4zIOwOOCfYHP6U0Xlta3UaWkizCUEeTEwbkDOfaqXg/UB/ZjQsrsYnONqk8Hn+ea2443lm86RdgUYROpHqT70APto2iiAY5cnc2PU1o2K8M34VTrThTy41FAD6KKKACiiigAooooAKKKKACiiigAooooAzZ4/LkI7dRUdXbyPcgYdRVKgAooooAKKKKACiiigAooooAKKKKACvgL/gq9ef8AEk8BWmf+Xi4lx/wECvv2vzY/4Kp+JrG98YeENEgu45r2ztZJriBDlot7fLu9MgVcPiM6nwnwjRRRXUcYUUUUAFFFFAH7Xfsc3Es37MfgB5zkrpiKP90ZC/oBWpdP5lzK2c5Y/wA6r/sq2Zsf2aPh7GV2ltDt5CP96MH+tPrje53x2QVreGtD/t7UDCz+XGi73YdcdMCsmr2j6tPot4LiDBbG1lbow9KQzc8VeEYtHtFuraRjGCFZX9+9crW5r3iq51yNYmRYYVOdq9z71h0AFFFFABW14d8Mza+ZGVxFDGcFyM5PoKxa6Hwr4pGgrLFLEZYJDu+U8g0AU9f0CbQbhUkYSI4yrjvWVW34n8RHX7iMrH5UMYwoJyTnuaxKACiiigAooooAKKKKACmyRiRCp6GnUUAYUsZikZT1BplXdUTbMrf3hVKgBVO1ga343+VWB561z9bdqc28Z9qAOw8Fyhb68jHCsocD6H/69dbXEeCT/wATaT/rif5iu3oAlt4/MlHoOa0ar2ce2Pd3arFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFACMNykHpWbIhjcqa06rXkW5d46igClRRRQAUUUUAFFFFABRRRQAUUVn+IvEOneE9Cv9Z1a6jsdNsYWnuLiU4VEUZJoA89/aO+O+lfs/8Aw3vfEN8yy37gw6fZZw1xOR8o+g6k+gr8VvGnjDVfH/ijUvEOt3TXmqahM000rHuew9ABwB6CvS/2p/2iNQ/aI+JFxqrGSDQLMtBpVkx/1cWfvsP77dT+A7V41XVCPKjjnLmYUUUVZmFFFFABRRWn4X0/+1/E2kWGN32q8hgx67nC/wBaAP3W+FOj/wBhfC/wrppXb9m0u3hx6YjArk7pktDJ5jqioSCzHAr0GXUrfw34dt5bnO2KKONY1GWdsAKijuSa81ks/tl7JeXqrJK7l0t87o4cnIAH8R9z+FcZ3kC6pJdDNlZy3KHpK2I4/qC2Mj6ZpcatJwRZ2/8AtKzTfphf51oMxY5JyaSkMy5v7ZhU+Utjdn/pozw/yD1gal401nQsvqPhuTyF6z2c4mX69AR+OK7OigDkNI+Keg6qwRp2s5T/AA3C7f16V1sciTIHRg6HkMpyDXD+OPhnaa7BJc2EaWuoKM4UYST2I7H3rzTw74x1bwXfNAxdoY22y2svQY649DQB9C1ynj7xJqPh+1g+wW+/zCd05XcE9Bj1PvWz4f8AEFr4k02O8tHyrcMp6qfQ1pEBhgjIoA8Ut/iB4lWYN9pabn/VtCuD+Qr1zQr641HSre4uoDbTuuWjParaWsMbblhjVvVVANSUAFFFFABRRRQAUUUUAFFFFAGdqv3k9cVQq1qEnmXBA6LxVWgArbtOLaP6VjRqZHCjqTW9FH9xB7CgDpfBMf8AxMp29IcfmRXbQx+ZIF/OuV8Ew5W8nxwzBB+GT/UV2tpFsTcerUATjgYFLRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUlLRQBnXEXlSY7HpUVaU0QmQjv2rOZSpIPWgBKKKKACiiigAooooAK/Mr/gof8AtT/8JprUnw18MXm7Q9OlzqlzC3y3Vwp/1YI6oh/NvoK+i/27P2o0+C/gtvDeg3IHi/WYmRGQ/NZwnhpPZj0H51+S0kjzSNI7F3YlmZjkknqTW1OPVnPUl9lDaKKK3OcKKKKACiiigAr0P9nnQz4j+OXgWwUbt+r27keyOHP6LXnlfRP7AWg/25+1B4YfbuFik14f+AoVz/4/Sew46tH6j+Kr46j4idM/6Pp48qNexkZQXf8AAEKPT5/Ws2ibP9oakD2vbjH/AH9akrjO88RvvGmrW/j3ylvZRbi9WHyc/LtLhen417dXzdrUobxtJIp4W/VvykB/pX0grblB9RmgDxT4n+JNV0vxdOkF9NFFGiMkcbEAcZ/nXsWk3DXelWU7nLywo5PuVBrwz4yf8jbef9cF/wDQa9s8Nnd4d0s/9OsX/oAoA0a8h+NHh1Le4ttWhXb5x8qbHdgOD+X9K9erivi+qt4NmLfeEse386APOfhf4kfRPEUVu7/6Ldny3XsGP3T+fH4173Xy1pzMuoWpT74lUj65FfUcefLXPXAoAdRRRQAUUUUAFFFFABRRRQAUkjbUY+gpaGG5SD0NAGAzbmJ9aSrU2nyRsdo3r2xSwafJIwLjYv60ASabb7m809BwK1Yvl3P/AHR+pqJEEahVGAK09L05tRvrezUZ3Hc/sO9AHb+ENO8jSoAwwW/eN+PT9MV0tR28K28Soo4AqSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACq11BuG9everNFAGTRVm6t9p3qPl71WoAKKKKACvP/AI6fGTR/gX8O9R8T6vIp8pdlrbZ+a4mI+VF/Hr6AGu41LUrXR9Our++uI7SytYmnnuJmCpHGoJZmJ6AAEk1+N37YP7S11+0R8RJJLOSSLwlpjNDpds2RvGcGdh/efHTsMD1q4x5mZzlyo8q+JXxD1j4qeNNT8Ta7cNcahfSlzzwi/wAKL6ADiuYoorqOMKKKltbWa9uYre3ieeeZxHHFGpZnYnAAA6kmgC/4X8Map408Q2Gh6LZyahql9KsNvbwjLOx/p3J7AE16r+0/8B4/2eta8L+HJLkXmrXGkLfahMp+TznkcbV/2VCge/Jr79/Yd/ZFh+Cfh5PFPiS2STxtqUX3GAP9nwnny1/2z/ER9O3PyT/wUv1P7d+0ibfORaaRbRfQku3/ALMKzUrysjVx5Y3Z8n0UUVoZBX2j/wAEttB+3fGTxBqu3P2DS9m708xwP/Za+Lq/Rj/glHoO3RfHWtFcF54bQN6gKW/rUT+E0p/Ej628Rae2n63dDGIp289D67vvf+PZ/MVnV6Vq+jw6xb+XL8rLykg6qa4LU9Jn0mcxzL8v8Ljo1cp2Hy/fWssnjRrQRsZ5L7aExzgv1x6Ac19JIu1FX0GKZ9ni8zzPKTzP7+0Z/OpKAPn74vCT/hMb0MrZdEEYxy3ygcevNe4+HoWttB02J1KultGrKeoO0ZFXJLeKVgzxI7DozKCRUlABXknxo8SJLJb6NCwYxnzZ8dj/AAr/AF/Kul8dfEm18NxyWlm63OqEY2rysPu3v/s/n7+QaToup+MNVdYEe4nkbfLM3Rc9SxoAv/DrQX17xNajbmC3YTSN246D86+hqwvCHhO28JaaLeL95M3Ms2OWP+FbtABRRRQAUUUUAFFFFABRRRQAUUUUAFFMnuI7WF5ZpFiiQZZ3OAB9a8/1/wCJYmaS30j5Yk/1l644A/2R6+maAPSIlC5kboOg9TXoPgnQzY2pvJh+/mGRnstcD8FdHk8RaHBqF3uNssjbd5yXOe57+9eygBQABgUALRUV0xW1mYHBCEg/hXwTffErxOdeEMniHUriLztpVrtwCPJVscEdya8/F4yOEtzK9z6PKMkq5xz+ymly23v1v/kffdFfnvH8VtdNjcSG8vCyWZnH+nXH3suP7/sKLr4ka7LLJGmpX0OLtYQy3sxO0wq/dz3NcP8AbFH+VnvLgzGO3vx1P0Ior87l+JWvx6egOp38krW/mea17NnO8L0DY6H0pz+PPEial5I1/VNn2lY8fa3+6Yi3r6ik84o/ysqPBeMl/wAvI9O/X5H6H0V+c7/EjxQtq8g8Q6puFtPIP9KfqrgDv6V7R+zX421/WviRJY3+sXt5aIswEM87OvCKRwT6mtKea06lSNNRersc+J4RxOFoTryqxair9e1+x9YUUUV7Z8IFFFFABRRRQAUUUUAFFFFABRRRQAh54PSqNxb+Wcj7v8qv0hAYYIyKAMqip7i3MfzLyv8AKqs00dtDJNK6xxRqWd2OAoHJJoA+Uv8Ago1a+Or34K+T4aeFPDxmB1pVl23EqZHloo/iTdyQDk4HGAa/JtlKMVYFSOCDX6KftMfG+T4oeJDp2nSsPDunuVhUHid+hkP9Pb618/fFf4Gi3uo1uhDaalNCs6TW7BlcHON2K1hO2jMZwctUfNdFamveG7/w3dGC9hKf3ZByrfQ1l10HKABJwBk1+jv7Af7Hv9jxWnxL8Z2X+nON+j6fOv8AqlP/AC3YH+I/wjt1rzT9g39kBviRqVv4+8XWbDwvZybrG0lXH26VT94j/nmp/M8V+oUcawxqiKERRtVVGAAOgFYzl0R0U4dWLX4/f8FD5vN/am8RL/zztrRP/IKn+tfsDX40/t5aguoftV+OCpyIntof++baLP65qae5VX4TwCiiiug5Qr9YP+CZug/2Z+zy9+V2vqGpzP8AULhQa/J+v2n/AGLdB/4R79mfwRCV2STWhuHH+07E/wAsVnU2NqXxHt1R3FvFdRmOVFkQ9VYZqSiuY6jm7zwTbyktbytCf7rfMKxLrwlqcLERQLcD+8sij+ZFd/RQB5NrOl+IdPtzJDo4kx1aS5RVH/fOT+lcHq2j+NfEG6N7+z0m2brHasxYj0L4z+WK+lHRZFKsAyngg18++ONcvPhv4wmtLmJrvR7n99bsPvxqeoHqAaB2MPR/grp9qyvqF1JeEc+Wg2L+J6n9K77T9NtdJtlt7O3jtoV6LGuPxPqar6L4gsPEFv5tjcrMB95ejL9R1FaNAgopskixRs7sFRRksegFc/efEDQrPIN6JWH8MSlqAOiorgbz4vWMeRbWksx7FiFFYt18XtQkyIbSGL0Jy1AHrFFZPhXVJda0G0vJwolkUltowOCR/StagAooooAKKKKACue8S+NtP8OIVd/PuscQxnn8fSpfGsl7D4bvJbCQxTxruJUc7R97H4V4S0jSSF3JkYnJLHJNAG5rnia/8USGS7m8m0U5WJPuj6Duax7i58xRGg8uFeQvqfU+pqKSRpCNxzjp7U2gD7C+Aq7fhfpPv5h/8fNeg1wfwNXb8LdD90c/+RGrvKAPN/j5481X4deA31fSUtZJhOIpFukZ12FGzgBhzkDv618Nyqsd0zpeYdZ5ODaZG4Rgn/lr6V9xfH7wDq/xI8Cro+jmEXDXKyP5z7V2BHHXHqVr4b8UWd74e1y+sHszcTwXTxv5cgA3EGPjPupr5HNef2yutLaX2P2PhH2H1KSjK07623tra/42KFwlzDC0cVxGyyW8ac238LuVx/rPVjWZJJ4p+3vGBppP2zbko33hbhs/f/ugUs2vXfmLGdEudyqkf31P+qkDH+dR/wDCYTvdeeNDu/mnS5A3Do8XlKOnqK8f3n0X4H2f7uNk5y3Xfzv0CNvEclrl30xVWAceW/QuOPvetasMetSXMckt1YB2vDH8sDn5lRhn7/oKyo9evJLbYNDucNGY8+Yo+424/wAq0o9Wvd0RbSZExOLr5pl6OWUD82pSUuy/A0puGmsun839bD4/tAsI5JZoXSSxeUqsJXhipIzvPc19Yfsv/DaOP/isBfN5vmzQNa+VwTtUbt2f0xXyeq3UlrDbG0VWS2ez/wBcOq7ST09q+nf2bPjNb2sNh4SfS5TcXlz5ouFlUqokUEZGM/w12YD2axEXV26et9NjxOIFiZZbUhhU7u1/8Nnzb+Xz7H1DRRRX3Z+ABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFACVx/xI8K3PiXw3c2NqQ0UwKzQZwZExyoPauxooA/M34qfBe/8ETz3lnHLcaYrHzFZT5lv7MPT3/OvM5JnkwXdnIGBuJPHpX6seLvAtj4qgYsqw3eMCUD7w9GHcV8VfGv9m+78P3c97pFr5TZLPZp9xx/eiP/ALL/APqoA4H4Afs/aX+0J4iuF1yKRNF0zDXCEGOSXPRFPoe5rpz/AMEubOD4vWNzHrv2j4d7jPcWcpIvBgjEAYDBVv7/AAQARjODXD/CD4kXnwg+Illq8121rpe4QX9sVxvjJwc57g8/hX6WabqFvq2n297aSrPa3EayxSKchlIyCKpSa2IcVLcZpOk2eg6Xa6dp1tFZ2NrGsMFvCoVI0UYCgDoAKt0UVJYV+Jv7Yc3nftN/ENv+okV/JFH9K/bKvjH9vDwf4fW+8M3I0LTReXRuHnuBZx+ZKRs5ZsZY896uMuVmc48yPy4or6g/4VLZXujS6qvh2FtPjbY9wkW1QfwrAuvhj4duI2C6esTkcOrvx+G6tfaIx9kzwO1t2u7qGBPvyuqL9ScV+9Pwv0VfDfw38MaYq7Psum28ZX/aEa5/XNfFv7LH7Ffw48feCP8AhINZgv5dStdUZYnhu9g2oI2AK4IPJNffCqI1CqNqqMADtUTkpbGlOLjuLRRRWRsFFFFABXm3x38I/wDCReD3vIU3XennzRgclP4h/X8DXpNNmiSeJ4pFDxupVlYZBB4INIadmfC8E0trMs0ErwTL92SNirD8RXZ6L8V9U09Vjvok1KIcb8+XIPxAwfyH1rN+Ifhd/B/i6/04g+Sr74WP8Ubcqf6fUVzdMGrM9q034kaBrKeTLcGyeQbTFeDYDnjG7lf1ryXxBpv9k6xdWwIZFfKMDkMp5U/kRTvDUnk+ItKk/u3cTfk4r139orwfDarp2vWdvHCkhMFz5SBQWOWVjjufmGfYUCPEKKKKAPcvh3/yJ+n/AEb/ANDNdHVH4Z+FdTvvBOmTwG0EToxXzJGDfePUBTXUr4J1ZuGezQf3lkdsfhtH86AMSiuij+Ht3n95q0ZHfZaYP4Euf5V4H8Tv+Ei8K+KLvS59avXtM+bblSsRaM9DuRVORyDz1BoA9TvL620+EzXdxFbQjrJM4RR+JrldS+KmiWZKWzyahL0HkKQn/fZwCPcZrxl0Ek3nSFpp+80rF3P1Y8mnA4OaBrfU+tLH4fS38AbVLzEci821oCBgjoXPJ/ALXzP428NyeE/FWo6W6kLDKfLz3Q8qfyIr7b0+2WO2hY8tsH8q8H/ag8KYfTvEEKdR9mnIH4qT+o/GgR4BRRRQB9m/BZdnwv0Af9MWP/kRq7auP+EK7PhroA/6d8/+PGuwoAw/F/jbRfAelpqGu3n2GzeQRCTynk+YgtjCKT0U/lXwD8QvE9nqnjLU72ETmza+3xyi2l+dfMkbONuRww4NfVn7XzJ/wqGVWXdK90qxcdG8uQ/yB/Ovj+YmO4l3MF/0wnk448ta+Szas3VVJ7I/YuD8FCOFeLjfmk7a7aX22/MxU8YaNDe7nvCo3TnmGT+Mrt/h74NVo/F2jqiIbw7hHaIR5Mn3kYsw+72BBrVk8qWGMOY3/dW4+bB/5b8/pUjWOntq5YwWpX7fnJRfu/ZR/WvD9xX0f/DfI+7/AHrtZrXyfXTv5GS3jLRmhQC95DXBP7qT+IED+H1NTSeKtJuGQR3Zc+Xbx4ET/eSTcw+76VKtrZxwttit1PkyD5VUc+d/hWnDJGs8IDoAL4ngjp5bUPl6J/18gj7WWjktbdH2t3KlrqlrcXKvG0rIZJ5Q3kSY2sAAfu9K9b/Z58J60fHmg6kulX0mnRvBG92tu5iRkQhgXxgYyPzrySSQf2RZjzF3DSpFPP8AFiL/AOvX2v8AszapZR/DnynvLdJTey4RpVBPC9s124Giq1eMW7W1+5niZ9jJ4PATqRXM3p/4FFp/ceyUUUV94fz6FFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFRtMq9Qx+iE/0oAkqlq2j2mt2jW15CssZ6Z6g+oPapGvlX/lnMfpE3+FRtqir/AMu9yfpC1AHyp8fP2XVvll1TS0UTg7hKF4b2cev+1W7+yT44v5dJv/BGuI8WqaKA8Ak6vbk449Qp4z6EV9EyatGylWsrx1PBH2diDXAzeC9Os/Glj4h07TryCaLekqC1cfIykEAjtnB2njIB7UAd1RWdJrXl8/2dqJHr9laov+EiT/oH6j/4CtQBrV8hft5P/wATDwan/TK6P6xV9T/8JGn/AED9R/8AAVq86+KXgu0+I91Yy3Ohvdi1RlX7XaPldxGcYU+g/KgD4Aj8QajDo8mlJeSLp8jb2twflJ9azZE8yNkyV3AjcvUfSvs6f9nXRpOvhr/v3DKv9Kz5/wBmbRZM/wDFN3oP+wZh/WgD5l8CfE7xX8K1SLwpqbWMDSb5YZP3kbepKnqTivqP4a/twaXqt4mmeK9Ok02ZEG/UIPmhJPqvUevFY837LemP9zRdWj/3S5/nVGX9k+0fOyz12P8A3VU/zWmI+udA8SaV4psFvdIv7fULVuklu4YD2PofY1pV8l+DfgT4h+Huqpf+HdR1/T5gfmQwK8cg9GXGGH1r6N0bxVetp8Q1PSb5bxRhzDatsY+oHb6UhnT0Vjf8JQn/AEDNU/8AARqT/hKE/wCgZqn/AICNQBtUVi/8JSn/AEC9U/8AARqT/hKU/wCgXqn/AICNQI86/aM8I/2loNvrsCZnsD5c2OpiY9fwYj/vo185V9lahrVtqljcWdzpGqS29xG0UiG0blSMEV5+PhT4NBB/sHXT/wBs5P8AGkXdNHz/AKY/lalaP02zIf8Ax4V9g+NPDq+LPBd9ppA3zQZiJ7SDlT+YFcTqHw+8Jajf/a5PD+spL8v+rhkUcAAcZ9q7tfFEcaqo0rVsAYH+htRrcG1ayPjGSNoZGjdSrqSrKeoI6ikVGZSwUlV6kDgV9Iap8OfCerajc3s2ha4JriQyPshkUbicnA+tXNN8F+F9L0q/sIvD+rNDegCUyW7s3HTB7UyTf+EC7fhvoY/6Y5/8eNdjXLaHqNn4f0m206z0nVltrdNiBrVicfWr3/CUp/0C9U/8A2oA268t+P8A4M/t/wALjVbePN7puXOBy0J+8Pw4b8D613kfiDzOf7K1UD/rzarH9uW8kLxyaTqkiupVg1m3IPUUWGnZnxBRX003wd8EsxP9g64uTnGyX/GrWo/C3wbqTQtJ4e1iMxRLEPLikXIHTPPWlqGnc9S0ab7RpFlL13wo35qKyviB4aTxb4R1LTWXLyREx+zjkH86dZ67BYWcNtDpmqCKFBGgNqxOAMCpv+EoT/oGan/4CNTBtX0PhmeF7eaSKRdskbFWX0IODTcHGccdM19R6t8K/B+s6lc30+h60s1w5kcRxSKuT1wO1W1+HfhJfDZ0T/hHtUNqZvtHmfZ383f0zu69OKBHU/Ctdnw70Af9Oqn+ddXXNaPqFroel2un2umaotvbxiOMNbMTge9Xf+ElT/oHal/4CNQBoX2n2upQiK8tYbuIHcEnjDqD0zgjrya+EP2jtNtE+Kuv26WsaQIoKxxqFUfInQD619v/APCSp/0DtS/8BGrgPEnwu8E+LtZudV1Tw3qtxe3H+skCzKDwB0DYHAFeXmGFnioRVO10z6vh7NqOV1pzxF3FxtZa63T2bXY+DpPCOmS6gq+QyKbiNMK5HBhLH9aqp4J01nOVm+5eH/Wn+CZVX9DX3X/wo34eeYH/AOEW1XduD5zP1AwD970oX4F/DvPHhbVBw46z/wAZy38XcivE/srF/wAy+9/5H3L4tyh3/dy/8Bj3X94+F7fwdpivFmF2zJADukPRgc1M2gafBpsUiWih/slw+7JJ3KBg9a+5Y/gL8O+CPDOpLgqRl5/4en8VSf8ADPvw6kjEZ8OX2wI0YBkn+63Ufep/2Xir/Evvf+Qf625Sk0qcv/AY9/8AEfFVxp9tb30iR20aqPsmBt/vSsG/StvwJhfGGjKqKo+2dlA6SjFfYDfs9/DyaQu2g3m47OTLP/CSV/i7EmrWn/s++ANPvILq30a4jnhfzEYzz8Nndnk+tTHKMRpdr73/AJGk+MctafLCfXou/wDiPUKKRW3dM/iMUtfYH4uFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFRSW6SdsH1FS0UAUZLN16fMKgZSvUYrVpGUNwRmgDKoq+1pG3T5fpULWLD7pzQBWoqVreRf4ajKleoIoASiiigAooooAKKKKACiilClugJoASipVt5G/hxUq2LfxNigCrTlUt0GauraRr1GT71MqhegxQBSjs2b7x2irMdukfQZPqalooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkx7UUUANMSHqo/Km/Zo/7tFFACfZIvT9aT7HH6H86KKAF+yRf3f1pRbRj+GiigBwiReigfhTqKKAFooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAP/2Q==" />
                            </defs>
                        </svg></div>
                    <div class="coll-md-7">
                        <h2 class="mb-35 term-tags savtxt mt-mob-28 gspwhattxt" name="">What are ULIPs or Unit Linked Insurance Plans?</h2>
                        <div class="gsp-buy">
                            <p>ULIP stands for Unit Linked Insurance Plans, which are financial products that allow you to build wealth while maintaining the security of a life insurance policy. In ULIPs, a portion of your premium is allocated to your life cover, while the remainder is allocated to a shared pool of money, known as a fund. This fund is then invested in equities, debts, or a combination of the two. The performance of the fund you choose determines the returns on your investments.</p>
                            <div class="coll-md-4 mr-mob-0 w-mob-ban-100 mt-30"><a rel="nofollow" href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=whatareulips" target="_blank" class="in-buy banner-buy" title="invest in ULIP">invest in ULIP</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="investment_calculator" class="ulip-calculator">
            <div class="container">
                <h2 class="section_heading mt-20 fnt-24">Calculate your ULIP Investment Returns</h2>
                <div class="row mrow-0">
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
                                <p class="note">Sensex has given 10% return from 2010 - 2020</p>
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
                        <div class="card card_middle">
                            <div class="card_body">
                                <h2 class="card_title">You may get<br><span class="amt_return">&#8377;&nbsp;<span id="yourReturn"></span></span></h2>
                                <div class="investment_result">
                                    <p class="mb-0">If you invest&nbsp;<span class="invested_val"><b>&#8377;&nbsp;</b><span id="totalInvested"></span></span>&nbsp;<br></p>
                                    <p class="oneTimeResult"><span class="regular_span">for&nbsp;</span><span class="years_val"></span>&nbsp;Years at&nbsp;<span id="percent_val"></span>% p.a.</p>
                                </div>
                                <div id="legend" class="legend_text"></div><canvas id="investment_chart" height="240" class="investment_chart"></canvas><a rel="nofollow" target="_blank" href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=calculators&utm_campaign=l2category_page&utm_content=investnow" class="btn_primary" title="Investment Return">Invest Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="varfac mt-30 mb-35 best-term-plan ulip-factor top-0 pt-50" id="ulip-work">
            <div class="midWrapper position-relative mt-50 pt-50">
                <h2 class="mb-0 term-tags fnt-24">How does ULIP plan Work?</h2><span class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>
                <div class="factorsslick best-term-plan ulip-number">
                    <div>
                        <div class="typescard">
                            <div class="slide-line">
                                <p class="slidnum">1</p>
                            </div>
                            <p>Choose the level of life insurance, premium payment option, premium amount, and policy duration to match your financial security and savings goals before participating in ULIPs.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="slide-line">
                                <p class="slidnum">2</p>
                            </div>
                            <p>Your nominee will receive the sum assured in the event of an unfortunate event during the policy term to realize their ambitions.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="slide-line">
                                <p class="slidnum">3</p>
                            </div>
                            <p>Depending on your selections, the remainder of your premium is invested in the stock market using equity, debt, or hybrid funds.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="slide-line">
                                <p class="slidnum">4</p>
                            </div>
                            <p>Equity invests your funds in stocks. Debt funds invest your money in safer instruments like bonds. With the stability of debt funds and high return potential of equities, hybrid funds strike a compromise.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="slide-line">
                                <p class="slidnum">5</p>
                            </div>
                            <p>Your choice of an upfront, lump sum payment or recurring payments on an annual, half-yearly, quarterly or monthly basis, as well as the frequency of the premium instalments, can be made at your convenience.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="slide-line">
                                <p class="slidnum">6</p>
                            </div>
                            <p>Your life insurance is paid for in part with your premium.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="slide-line">
                                <p class="slidnum">7</p>
                            </div>
                            <p>The value of your coverage is determined by the capital put in these funds. Your possibilities of earning bigger returns increase as you invest over a longer period of time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefits bene position-relative ulip-benefits top-0" id="benefits-of-ulip">
            <div class="midWrapper">
                <h2 class="mb-35 mb-mob-15 term-tags">What are the benefits of ULIPs?</h2>
                <div class="bene-para">
                    <p class="mx-100">Building a corpus to ensure a safe and secure future for your loved ones and yourself holds critical importance, and Unit Linked Insurance Plans have the potential to help you with that. They have several advantages as mentioned below:</p>
                </div><span class="pagingInfo d-flex playfair_font justify-content-center"></span>
                <div class="bene-slick unslick gspbene">
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <div class="bene-icon b1"></div>
                            </div>
                            <div class="coll-md-11">
                                <h3>Flexibility to choose a cover amount</h3>
                                <p>You can choose your Life Cover amount as you desire in Unit Linked Insurance Policies. Most ULIPs offer a life cover of 10 times your yearly premium which is minimum. You can choose the life cover value of up to 40 times your yearly premium depending on the type of plan you choose.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <div class="bene-icon b2"></div>
                            </div>
                            <div class="coll-md-11">
                                <h3 class="flex-choose-left fnt-20">Flexibility to choose the type of investment</h3>
                                <p>There are three fundamental types of funds –</p>
                                <div class="uben">
                                    <ul class="gspnewlis uliplis fw-bold">
                                        <li>Equity Funds<p>If you think you can take risks, go for equity funds where the returns can also be high. These investments are done in stock market</p>
                                        </li>
                                        <li>Debt Funds<p>Debt funds invest in fixed returns instruments like corporate bond, Government bonds etc. These are for people who are looking for secured returns.</p>
                                        </li>
                                        <li>Balanced Funds (combination of<span class="equ-space">equity and debt fund)</span>
                                            <p>Balanced funds, invest in both equities and debt funds in equal proportions.<br>Depending on your financial objectives and risk tolerance, ULIPs allow you to invest in a variety of funds. For example, if you want to expand your wealth and don't mind taking risk on your investment, equity is a good option to go for. Similarly, debt funds can be an ideal choice if you want consistent returns on your money.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <div class="bene-icon b3"></div>
                            </div>
                            <div class="coll-md-11">
                                <h3>Liquidation of funds</h3>
                                <p>Partial withdrawal of funds is an option available with Unit Linked Insurance Policies that allow you to remove a portion of your invested money. It enables you to pay for quick financial needs such as your child's fees, a family vacation, or even in a situation of emergency.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <div class="bene-icon b4"></div>
                            </div>
                            <div class="coll-md-11">
                                <h3>Financial goal plans</h3>
                                <p>ULIPs are designed to help you achieve your financial objectives, such as increasing your wealth, planning for retirement, or preparing for your child's future education plans. These plans also provide you with the assurance that your premium payments are contributing to the achievement of your long-term monetary objectives.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <div class="bene-icon b5"></div>
                            </div>
                            <div class="coll-md-11"> 
                                <h3 class="fnt-20">Tax Advantages</h3>
                                <p class="mb-24">At different stages of your<a href="javascript:void(0)" target="_blank" title="life insurance"> life insurance </a> policy, you may be eligible for <a href="insurance-guide/savingstax/income-tax-deductions-list" target="_blank" title="tax benefits as per the Income Tax Act of 1961"> tax benefits as per the Income Tax Act of 1961. </a></p>
                                <ul class="gspnewlis uliplis">
                                    <li>Advantage of Entry: <a href="insurance-guide/savingstax/income-tax-deductions-list" target="_blank" title="Under Sections 80C "> Under Sections 80C </a>, you gain tax savings on your premium payments.</li>
                                    <li>Advantage of Exit: You can also get a tax exempt Maturity Benefit if you meet the<a href="insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know" target="_blank" title="Section 10 (10D)"> Section 10 (10D) </a> requirements.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ensure term-insure ulip-insure top-0" id="ensure">
            <div class="midWrapper">
                <div class="roww">
                    <div class="coll-md-10 align-self-center mr-32 txt-mob-center">
                        <h2 class="parttxt" style="color:#fff!important;letter-spacing:.42px!important;font-weight:700!important">Life cover or wealth creation? Get both in one plan.</h2>
                    </div>
                    <div class="coll-md-2 mt-auto mb-auto ml-mob-initial mll-mob-initial w-mob-150 txt-mob-center"><a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner" target="_blank" class="en-btn mt-12 inknw" title="Invest in Kotak e-Invest">Invest in Kotak e-Invest</a></div>
                </div>
            </div>
        </section>
        <section class="features feat bg-eb gspfeatnew ulip-feature top-0" id="features-of-ulip">
            <div class="midWrapper">
                <h2 class="mb-35 mb-mob-22 term-tags u-f-h2 fnt-24">What are some key features of ULIPs?</h2>
                <div class="">
                    <div>
                        <div class="roww">
                            <div class="coll-30">
                                <div class="savingsfeat">
                                    <div class="save-icon s1"></div>
                                    <h3>Allocation of Premium</h3>
                                    <p>ULIPs allow you to choose investment channels based on your risk tolerance. You can go aggressive with equities, cautious with debt funds, or mix it up with balanced funds to get the best of both worlds. You can also allocate your premiums towards funds of your preference and depending on your risk appetite.</p>
                                </div>
                            </div>
                            <div class="coll-30">
                                <div class="savingsfeat">
                                    <div class="save-icon s2"></div>
                                    <h3>Switching of Funds</h3>
                                    <p>You can move or switch from one fund to another if the performance of your chosen funds does not meet your expectations, or if the market conditions change. As a result, you can ensure that your returns are well-balanced even when one part of the market is not performing well. You can beat volatility.</p>
                                </div>
                            </div>
                            <div class="coll-30">
                                <div class="savingsfeat">
                                    <div class="save-icon s3"></div>
                                    <h3>Withdrawal Options</h3>
                                    <p>You can make portion withdrawals from your funds after the five-year lock-in term if necessary. The insurance providers set the maximum withdrawal amount and the number of withdrawals that are permitted.</p>
                                </div>
                            </div>
                            <div class="coll-30">
                                <div class="savingsfeat">
                                    <div class="save-icon s4"></div>
                                    <h3>Additional Top-ups</h3>
                                    <p class="para-height-less">You can add additional money in the form of Top-Up Premiums over and above your existing premium which will give you an additional Top-Up Sum Assured.</p>
                                </div>
                            </div>
                            <div class="coll-30">
                                <div class="savingsfeat">
                                    <div class="bene-icon b5"></div>
                                    <h3>Tax savings</h3>
                                    <p class="para-height-less">ULIPs are like other life insurance instruments with a difference that you get to invest and secure your family financially both under one plan. Since it is a life insurance product, you also get tax benefits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="whyinvest top-0" id="invest-in-ulip">
            <div class="midWrapper">
                <div class="roww m-0">
                    <div class="coll-md-5 text-center"><svg xmlns="http://www.w3.org/2000/svg" class="mt-mob-23" width="357" height="357" viewBox="0 0 357 357" foxified="">
                            <defs>
                                <linearGradient id="qut3a" x1="92.1" x2="54.85" y1="277.52" y2="277.84" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fff" stop-opacity=".1" />
                                    <stop offset=".35" stop-color="#999fbb" stop-opacity=".2" />
                                    <stop offset=".99" stop-color="#38447a" stop-opacity=".3" />
                                </linearGradient>
                                <clipPath id="qut3b">
                                    <path d="M60.628 282.218V0H306.38v282.218z" />
                                </clipPath>
                                <clipPath id="qut3c">
                                    <path d="M60.628 282.218V0H306.38v282.218z" />
                                </clipPath>
                                <clipPath id="qut3d">
                                    <path d="M134.364 189.384v-21.401h21.553v21.4z" />
                                </clipPath>
                                <clipPath id="qut3e">
                                    <path d="M135.299 187.121v-17.29h17.125v17.29z" />
                                </clipPath>
                                <clipPath id="qut3f">
                                    <path d="M26.541 351.37V200.772H343V351.37z" />
                                </clipPath>
                                <clipPath id="qut3g">
                                    <path d="M26.541 351.37V200.772H343V351.37z" />
                                </clipPath>
                                <clipPath id="qut3h">
                                    <path d="M118.447 329.614v-18.3h35.201v18.3z" />
                                </clipPath>
                                <clipPath id="qut3i">
                                    <path d="M184.96 329.72v-18.15h33.545v18.15z" />
                                </clipPath>
                                <clipPath id="qut3j">
                                    <path d="M210.511 229.552v-22.814h15.71v22.814z" />
                                </clipPath>
                                <clipPath id="qut3k">
                                    <path d="M209.29 270.158v-15.139h9.82v15.139z" />
                                </clipPath>
                                <clipPath id="qut3l">
                                    <path d="M240.807 290.136v-33.684h3.471v33.684z" />
                                </clipPath>
                                <clipPath id="qut3m">
                                    <path d="M146.864 225.05v-8.325h34.078v8.324z" />
                                </clipPath>
                            </defs>
                            <g>
                                <g>
                                    <g>
                                        <path fill="#f2f2f2" d="M0 178.5C0 79.917 79.917 0 178.5 0S357 79.917 357 178.5 277.083 357 178.5 357 0 277.083 0 178.5z" />
                                    </g>
                                    <g>
                                        <g>
                                            <path fill="url(#qut3a)" d="M40.895 282.218a4 4 0 0 1-4-4v-.875a4 4 0 0 1 4-4h41.61a4 4 0 0 1 4 4v.875a4 4 0 0 1-4 4z" />
                                        </g>
                                        <g opacity=".1">
                                            <path fill="#231f20" d="M92.99 146.318s-1.513 4.333-14.499 16.25c-12.986 11.916-18.472 26.388-23.111 46.374-1.986 8.555-2.611 19.527-2.68 29.166h-1.986c0-13.375 0-31.847.097-51.666.263-38.957-24.681-55.846-24.681-55.846 1.292 9.347-2.86 12.499-2.43 21.305.43 8.805 9.959 8.333 8.138 18.708-1.82 10.375.265 8.055 3.904 12.208 3.638 4.152-2.779 10.737 2.777 14.027 5.555 3.292 8.695 3.126 10 12.5.652 4.722.125 17.417-.57 28.82H34.88c-2.57 0-4.5 2.778-3.986 5.833l4.722 27.916c.889 5.264 4.764 9.055 9.264 9.055h11.611c4.5 0 8.333-3.791 9.264-9.055l4.513-26.652.14-.862c.555-3.25-1.529-6.291-4.306-6.291h-11.75c.21-9.389 2.14-18.625 8.584-23.263 12.194-8.778 6.472-15.709 10.403-18.055a14 14 0 0 0 6.402-10.96c.153-3.916-3.764-6.86 5.013-13.596 8.779-6.736 8.236-25.916 8.236-25.916z" />
                                            <path fill="none" stroke="#231f20" stroke-miterlimit="20" stroke-width="1.43" d="M92.99 146.318v0s-1.513 4.333-14.499 16.25c-12.986 11.916-18.472 26.388-23.111 46.374-1.986 8.555-2.611 19.527-2.68 29.166h-1.986c0-13.375 0-31.847.097-51.666.263-38.957-24.681-55.846-24.681-55.846 1.292 9.347-2.86 12.499-2.43 21.305.43 8.805 9.959 8.333 8.138 18.708-1.82 10.375.265 8.055 3.904 12.208 3.638 4.152-2.779 10.737 2.777 14.027 5.555 3.292 8.695 3.126 10 12.5.652 4.722.125 17.417-.57 28.82H34.88c-2.57 0-4.5 2.778-3.986 5.833l4.722 27.916c.889 5.264 4.764 9.055 9.264 9.055h11.611c4.5 0 8.333-3.791 9.264-9.055l4.513-26.652v0l.14-.862c.555-3.25-1.529-6.291-4.306-6.291h-11.75c.21-9.389 2.14-18.625 8.584-23.263 12.194-8.778 6.472-15.709 10.403-18.055a14 14 0 0 0 6.402-10.96c.153-3.916-3.764-6.86 5.013-13.596 8.779-6.736 8.236-25.916 8.236-25.916v0z" />
                                        </g>
                                        <g>
                                            <path fill="#fff" d="M21.436 131.387s25 16.89 24.68 55.846c-.32 38.958 0 72.735 0 72.735H41.7s3.375-40.527 2.083-49.874c-1.292-9.347-4.487-9.18-10-12.498-5.514-3.32.902-9.861-2.778-14.029-3.68-4.166-5.722-1.82-3.903-12.209 1.82-10.388-7.708-9.874-8.138-18.707-.431-8.834 3.764-11.917 2.472-21.264zm66.887 15.722s.57 19.194-8.208 25.93c-8.777 6.737-4.861 9.722-5.013 13.597a14 14 0 0 1-6.403 10.958c-3.944 2.362 1.791 9.292-10.402 18.056-12.195 8.764-8.223 33.985-7.028 45.57l-2.487.25s-2.597-32.168 1.945-51.737c4.639-19.972 10.124-34.457 23.11-46.374 12.986-11.917 14.486-16.25 14.486-16.25z" />
                                        </g>
                                        <g>
                                            <path fill="#d4d4d4" d="M21.436 131.387a26.5 26.5 0 0 1 6.306 17.264c0 10.694 2.61 9.555 7.277 15.027 4.667 5.473 2.61 6.264 2.958 14.68.348 8.418 7.403 14.57 7.736 23.792.333 9.222 4.778-3.07 4.778-3.07l-8-64.082-13.889-8.541-7.166 4.93z" />
                                        </g>
                                        <g>
                                            <path fill="#d4d4d4" d="M88.323 147.11s-2.139 11.207-7.597 17.221c-5.458 6.014-10.902 6.014-11.846 12.791-.945 6.778.457 9.056-5.445 14.181-3.514 3.056-3.208 5-4.166 11.027-.96 6.029-10.403 14.027-11.418 22.362-.486 3.971-2.096-7.32.306-27.056 1.723-14.11 9.723-38.36 9.723-38.36l28.776-15.278 1.694 2.444" />
                                        </g>
                                        <g>
                                            <path fill="#c9c9c9" d="M40.172 281.732h11.61c4.501 0 8.333-3.791 9.265-9.055l4.514-26.625c.625-3.694-1.737-7.153-4.89-7.153H30.116c-2.57 0-4.5 2.778-3.986 5.834l4.737 27.944c.944 5.264 4.818 9.055 9.306 9.055z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <g />
                                            <g clip-path="url(#qut3b)">
                                                <path fill="#c7c7c7" d="M277.795 111.331V30h.682v81.331z" />
                                            </g>
                                            <g clip-path="url(#qut3b)">
                                                <path fill="#ebebeb" d="M272.011 123.247l-22.116 15.308 2.271 4.993h51.947l2.265-4.993-22.115-15.308z" />
                                            </g>
                                            <g clip-path="url(#qut3b)">
                                                <path fill="#dbdbdb" d="M270.476 108.498l1.535 14.749h12.251l1.535-14.749z" />
                                            </g>
                                            <g clip-path="url(#qut3b)">
                                                <path fill="#dbdbdb" d="M249.897 138.556l2.272 4.995h51.946l2.265-4.995z" />
                                            </g>
                                            <g clip-path="url(#qut3b)">
                                                <path fill="#c7c7c7" d="M231.157 74.222V9h.682v65.222z" />
                                            </g>
                                            <g clip-path="url(#qut3b)">
                                                <path fill="#ebebeb" d="M203.256 101.445l2.271 4.993h51.947l2.265-4.993-22.116-15.308h-12.252z" />
                                            </g>
                                            <g clip-path="url(#qut3b)">
                                                <path fill="#dbdbdb" d="M223.836 71.389l1.535 14.748h12.252l1.535-14.748z" />
                                            </g>
                                            <g clip-path="url(#qut3b)">
                                                <path fill="#dbdbdb" d="M203.258 101.447l2.272 4.994h51.946l2.265-4.994z" />
                                            </g>
                                            <g clip-path="url(#qut3b)">
                                                <g>
                                                    <g />
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M187.055 218.967l-.02.095c-.007.02-.007.041-.014.069-.007.054-.02.109-.034.184l-.02.122c-.021.076-.035.164-.049.267-.013.06-.02.122-.034.19-.02.137-.047.287-.082.45-.047.26-.102.553-.156.88l-.307 1.665c-.035.178-.069.369-.103.566-.048.26-.095.533-.15.812-.054.307-.109.628-.17.962-.007.007-.007.014-.007.02-.041.232-.089.471-.13.717-.13.73-.266 1.507-.423 2.34a472.272 472.272 0 0 1-.546 3.029c-.047.272-.102.545-.156.818-.055.286-.11.573-.157.86 0 .006-.007.013 0 .02a8.458 8.458 0 0 1-.103.546v.013c-.259 1.453-.539 2.988-.839 4.612-.102.545-.197 1.098-.3 1.657-.198 1.092-.402 2.21-.614 3.363-.054.266-.102.533-.143.805-.307 1.672-.62 3.411-.948 5.212-.041.184-.068.368-.103.553a197.01 197.01 0 0 0-.463 2.571c-.02.069-.035.137-.041.205l-.225 1.242c-.3 1.664-.608 3.37-.928 5.109-.082.43-.164.866-.239 1.31-.157.88-.32 1.767-.484 2.66a799.81 799.81 0 0 0-.614 3.37c-.205 1.132-.41 2.278-.621 3.431-.11.58-.211 1.16-.32 1.74-.123.696-.253 1.391-.376 2.094h-58.884a5938.044 5938.044 0 0 1 13.405-54.56z" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M178.146 225.768a12772.962 12772.962 0 0 1-8.95 47.758h-.819c3.131-15.956 6.358-31.884 9.571-47.82.027-.13.218-.068.198.062" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#455a64" d="M187.048 218.967s-.007.034-.014.095c-.006.02-.006.041-.013.069-.014.047-.02.109-.034.184l-.02.122c-.021.076-.035.164-.049.267-.013.06-.02.122-.034.19-.027.137-.054.287-.082.45-.047.26-.102.553-.156.88-.096.485-.191 1.038-.307 1.665-.035.178-.069.369-.103.566-.048.26-.095.533-.15.812-.054.307-.109.628-.17.962-.007.007-.007.014-.007.02-.041.232-.089.471-.13.717-.136.73-.273 1.507-.423 2.34-.007.02-.013.04-.013.061-.17.928-.348 1.91-.54 2.954-.054.273-.102.552-.15.832-.054.286-.109.573-.156.86 0 .006-.007.013 0 .02-.041.177-.068.362-.103.546v.013c-.266 1.447-.545 2.988-.839 4.612-.102.545-.197 1.098-.3 1.657-.204 1.092-.41 2.21-.614 3.363-.054.266-.102.533-.143.805a665.621 665.621 0 0 0-.948 5.212c-.041.184-.068.368-.103.553-.156.846-.313 1.698-.463 2.571-.02.069-.035.137-.041.205l-.225 1.242c-.307 1.664-.614 3.37-.928 5.109-.082.43-.164.866-.239 1.31-.164.88-.32 1.767-.484 2.66-.205 1.112-.41 2.23-.614 3.37-.205 1.132-.416 2.278-.621 3.431-.11.58-.211 1.16-.32 1.74-.123.696-.253 1.391-.383 2.094h-29.517l-2.367-24.23-.082-.86-.095-.928v-.006l-.464-4.741v-.007l-.402-4.107-1.924-19.68z" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M220.549 273.526h-63.584a2092.08 2092.08 0 0 0-.369-16.856v-.007c-.006-.13-.006-.26-.013-.389 0 0-7.422-4.393-11.42-7.838-.777-.662-1.425-1.296-1.869-1.855 0-.007 0-.007-.007-.014l-.006-.007c-2.559-3.26-5.123-15.799-10.43-27.593h77.766c12.66 24.585 11.774 44.265 9.932 54.559" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#455a64" d="M141.455 245.74c3.784 1.547 7.185 3.93 10.544 6.226 3.489 2.386 6.687 5.141 10.044 7.7.129.097.007.31-.136.219-3.538-2.259-7.243-4.245-10.74-6.57-3.398-2.26-6.932-4.457-9.882-7.298-.116-.112.013-.34.17-.277" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#455a64" d="M140.978 223.868c.45 2.421 1.037 4.818 1.56 7.225.49 2.258.851 4.562 1.448 6.794.58 2.165 1.5 4.15 3.164 5.695.887.823 1.862 1.552 2.807 2.306.509.406 1.06.797 1.589 1.208-.07-.319-.125-.644-.182-.974a431.85 431.85 0 0 1-1.452-8.882c-.615-4.017-1.18-8.077-2.019-12.055-.034-.162.21-.224.25-.062 1.002 3.941 2.107 7.84 2.978 11.815.428 1.95 1.953 11.575 2.02 12.257.071.703.13 1.41.154 2.115.026.697.164 1.477.003 2.161-.041.176-.253.147-.328.029l-.01.007c-.35-.613-.438-1.414-.612-2.092a27.835 27.835 0 0 1-.455-2.083c-.045-.251-.08-.51-.116-.767-.948-.576-1.83-1.338-2.716-1.98-.956-.691-1.929-1.365-2.832-2.126-1.73-1.457-2.812-3.242-3.457-5.401-.669-2.24-.876-4.604-1.134-6.917-.306-2.736-.53-5.485-.91-8.21-.024-.162.219-.229.25-.063" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#455a64" d="M205.679 240.73c-1.014-.53-4.945.41-12.103-.815-1.381-.236-2.756-.663-3.863-1.567-1.865-1.524-3.277-3.97-4.404-6.065-1.24-2.302-2.497-4.928-3.083-7.486-.036-.158-.265-.082-.237.07.265 1.482.413 2.961.804 4.426.368 1.378.9 2.719 1.48 4.02 1.081 2.429 2.345 5.036 4.523 6.677 2.285 1.721 5.471 2.043 8.24 2.236 1.601.112 7.883-.058 8.726-.955.15-.159.116-.437-.083-.541" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M146.507 131.491c-6.55 9.68-52.035 67.982-58.623 69.17-16.775 3.026-32.136-2.73-25.796-17.174 7.382-16.819 48.443-50.175 75.788-64.942 19.59-10.579 15.095 3.393 8.631 12.946" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#ed1c24" d="M124.323 163.636l-35.68-16.384s33.009-22.948 48.467-29.932c16.11-7.279 22.625-3.027 8.862 15.91-13.558 18.656-21.649 30.406-21.649 30.406" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#fff" d="M126.06 161.133c-.04.062-.089.123-.123.184l-33.773-16.48a5.66 5.66 0 0 1 .211-.144zm4.598-6.542c-.048.062-.089.123-.13.184l-30.8-15.034a2.24 2.24 0 0 1 .212-.137zm4.632-6.528c-.048.061-.089.13-.137.191l-27.757-13.548c.068-.054.143-.095.218-.143z" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M124.738 156.389c-.802-.486-1.68-.864-2.523-1.274-.867-.421-1.733-.848-2.599-1.273a261.192 261.192 0 0 0-5.3-2.513c-3.544-1.642-7.083-3.297-10.655-4.88a125.81 125.81 0 0 0-2.959-1.275c-1.044-.43-2.12-.785-3.161-1.217-.065-.027-.097.07-.037.1.864.433 1.696.939 2.56 1.376.886.448 1.779.886 2.676 1.311 1.766.837 3.537 1.66 5.317 2.47 3.501 1.59 7 3.196 10.536 4.712.987.423 1.977.837 2.964 1.26 1.032.442 2.063.951 3.132 1.296.055.018.103-.06.05-.093" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#b72026" d="M145.97 133.229c-13.555 18.655-21.648 30.405-21.648 30.405l-11.404-5.24 39.096-43.633c2.971 2.025 1.557 8.005-6.044 18.468" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#ed1c24" d="M125.805 232.042h92.023s-14.057-87.81-47.977-117.834c-4.191-3.71-13.648-2.868-19.817.198-2.204 1.095-10.111 12.158-12.368 22.618-2.24 10.449-12.108 94.706-11.861 95.018" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#b72026" d="M209.47 194.552l-40.834-81.211c.444.252.846.539 1.215.866 19.25 17.04 32.102 52.69 39.62 80.345" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#fff" d="M216.071 222.528l.041.225h-89.356c.014-.075.02-.15.027-.225zm-1.664-7.893c.02.075.034.15.048.225h-86.799c.014-.075.02-.15.028-.225zm-1.76-7.667h-84.07c.007-.075.02-.15.028-.225h83.987c.02.075.034.15.055.225zm-2.026-8.118c.013.075.034.15.054.225h-81.163c.007-.075.02-.15.027-.225zm-2.08-7.668h-78.08c.006-.075.013-.15.026-.225h77.992zm-2.382-8.117c.02.075.048.15.069.225h-74.813c.007-.075.02-.15.027-.225zm-2.517-7.893c.028.075.048.15.068.225h-71.32c.007-.075.014-.15.028-.225zm-2.749-7.892c.027.075.055.143.075.218H133.38c.007-.075.013-.143.027-.218zm-3.008-7.893c.027.068.054.143.089.218h-63.585c.007-.068.02-.143.028-.218zm-3.336-7.9c.034.076.068.15.096.226H135.44c.007-.075.013-.15.027-.226zm-3.731-7.892c.034.075.075.15.116.225h-54.396a2.56 2.56 0 0 0 .034-.225zm-4.257-7.893c.048.075.089.15.136.225h-48.774c.02-.075.034-.15.061-.225zm-4.966-7.892c.048.075.102.15.15.225h-40.97l.102-.225zm-6.105-7.893c.06.075.13.15.19.225h-30.513c.055-.075.103-.15.15-.225zm42.068 110.503h-91.627l-.021.225h91.682c-.006-.075-.02-.15-.034-.225m-51.687-118.17h-9.325c.436-.082.866-.157 1.303-.226h6.951c.368.062.723.137 1.071.226" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M185.813 116.416c23.204 8.574 80.305 31.335 83.206 44.652 2.133 9.788-41.446 15.87-42.685 14.286-.981-1.255-41.442-32.775-55.708-49.74-12.392-14.738 7.772-11.939 15.187-9.198" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#ed1c24" d="M203.333 156.54l30.556-21.173s-36.509-16.832-52.95-21.01c-17.132-4.354-22.804.97-5.947 17.213 16.606 16.002 28.341 24.97 28.341 24.97" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#fff" d="M219.683 129.048L193.69 148.6c.058.058.11.102.169.153l26.063-19.603c-.08-.032-.159-.07-.24-.103m8.286 3.64l-28.065 21.12c.058.051.117.096.176.14l28.121-21.15c-.08-.032-.153-.07-.232-.11m-16.663-7.21l-23.685 17.814c.058.051.11.102.168.147l23.757-17.865-.24-.097" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M225.46 133.942c-.822.45-1.59 1.02-2.367 1.543-.8.54-1.602 1.074-2.404 1.61a254.65 254.65 0 0 0-4.833 3.324c-3.199 2.243-6.406 4.474-9.566 6.77-.869.632-1.736 1.266-2.588 1.92-.896.687-1.743 1.44-2.638 2.125-.056.042.011.118.067.082.809-.531 1.663-.997 2.476-1.525.831-.542 1.658-1.094 2.476-1.656a371.27 371.27 0 0 0 4.802-3.362c3.133-2.231 6.277-4.453 9.362-6.75.861-.642 1.716-1.291 2.578-1.933.9-.67 1.857-1.308 2.692-2.059.043-.039-.001-.12-.057-.09" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M200.51 154.123c-.856-.727-1.659-1.517-2.491-2.27-.835-.756-1.69-1.492-2.531-2.24-1.644-1.462-3.307-2.904-4.955-4.363-3.34-2.957-6.673-5.923-9.976-8.92-1.877-1.705-3.716-3.46-5.651-5.097-.028-.023-.07.011-.043.04 1.519 1.647 3.155 3.191 4.775 4.739a22.047 22.047 0 0 1-1.008-.669 26.156 26.156 0 0 1-1.076-.798c-.36-.282-.7-.594-1.073-.857-.061-.042-.118.041-.078.093.567.734 1.382 1.335 2.146 1.847.395.265.806.504 1.226.726.149.079.303.147.456.215a386.822 386.822 0 0 0 4.365 4.097 298.863 298.863 0 0 0 10.02 8.86c.941.794 1.894 1.573 2.846 2.352.975.798 2.008 1.526 2.98 2.326.047.039.115-.042.068-.08" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M152.994 131.263c5.41.696 13.625-8.32 16.52-15.23.196-.476-.986-5.127-2.154-10.849-.696-3.474-1.388-7.359-1.764-10.95-.073-.737-21.948 7.829-21.948 7.829s3.002 7.295 3.618 13.56a8.107 8.107 0 0 1 0 1.489c0 .068-.011.152-.007.248-.163 2.846.507 13.227 5.735 13.903" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#c5865f" d="M149.584 117.238c-.84.107-1.608.15-2.322.119-.004-.096.005-.175.006-.248a7.645 7.645 0 0 0-.004-1.489c-.616-6.259-3.613-13.555-3.613-13.555s17.754-6.955 21.326-7.795c-.262 4.222-2.14 21.283-15.393 22.968" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M163.16 66.394c4.536 7.064 6.745 30.539 2.65 37.065-5.936 9.461-18.788 13.826-27.617 5.975-8.559-7.611-10.895-38.255-6.03-44.508 7.167-9.21 24.298-8.966 30.998 1.468" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M148.601 86.896c.007-.061.131.063.135.128.107 1.585.496 3.383 1.978 3.766.046.012.05.092-.005.09-1.77-.073-2.261-2.464-2.108-3.984" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M149.85 85.106c2.522-.445 3.226 4.634.888 5.046-2.3.405-3.004-4.674-.889-5.046" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M138.923 88.022c-.02-.059-.113.091-.102.155.268 1.567.311 3.405-1.04 4.125-.042.022-.026.1.026.086 1.703-.485 1.62-2.925 1.116-4.366" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M137.29 86.574c-2.556.159-2.05 5.26.318 5.113 2.33-.144 1.826-5.246-.317-5.113" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M151.531 82.507c-.715-.079-1.363-.27-2.063-.42-.79-.17-1.436-.224-2.021-.83-.315-.325-.294-.99-.008-1.324.669-.78 1.687-.813 2.646-.647 1.04.18 1.797.585 2.489 1.38.67.771-.1 1.944-1.043 1.84" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M134.973 84.29c.688-.213 1.287-.524 1.945-.804.744-.317 1.368-.492 1.828-1.198.248-.379.102-1.027-.243-1.301-.804-.64-1.81-.478-2.72-.134-.988.374-1.654.915-2.183 1.826-.512.884.465 1.89 1.373 1.61" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M151.89 100.797c-.327.42-.632.98-1.196 1.107-.541.121-1.217-.036-1.746-.162-.052-.012-.096.048-.057.09.492.547 1.404.807 2.116.577.694-.222.96-.886 1.043-1.562.012-.095-.113-.112-.16-.05" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M149.584 96.316c-.691 1.487-1.882 2.412-3.245 2.878a6.805 6.805 0 0 1-1.914.356 1.974 1.974 0 0 1-.374.008 4.105 4.105 0 0 1-.352-.005c-.189-.001-.31-.139-.365-.308l-.002-.012c-.006-.058-.012-.104-.007-.163l-.001-.011-.017-.139c-.2-1.207-.338-3.065-.338-3.065-.412.283-2.528 1.61-2.58.973-.413-5.281-.873-11.155-.169-16.498.015-.178.285-.175.294 0 .597 5.06.301 10.192.821 15.284.682-.373 1.787-1.042 2.422-1.118.18.026.202 3.597.336 4.132 0 0 .003.023.018.056 2.07-.022 3.52-.85 5.306-2.49.105-.106.244-.016.167.122" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M145.054 98.837s1.274 1.3 2.818 1.62c.568.119 1.162.115 1.75-.133 1.211-.505 1.083-1.662.716-2.616a6.882 6.882 0 0 0-.773-1.432s-1.596 1.972-4.511 2.56" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#ff98b9" d="M147.872 100.456c.568.12 1.161.116 1.75-.132 1.21-.505 1.083-1.662.715-2.616-1.326.325-2.534 1.424-2.465 2.748" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M166.629 84.258c-4.132 1.061-6.924-8.973-6.924-8.973s-6.543.875-12.293-6.64c0 0-6.351 7.552-13.416 8.484-11.072 1.459-15.154-12.223-12.13-16.249 4.286-5.705 16.006-3.164 16.006-3.164s13.62-8.97 21.321-.285c0 0 6.763-1.851 9.59 5.37 2.826 7.22.925 20.667-2.154 21.457" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M161.532 75.985c-3.159.367-6.43-.097-9.186-1.76-2.845-1.717-5.223-4.995-5.322-8.39-.004-.185-.306-.159-.288.028.368 3.694 1.712 7.18 4.85 9.39 2.874 2.025 6.803 2.591 10.018 1.039.154-.075.117-.33-.072-.307" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M167.93 58.312c-2.895-1.95-6.174-1.347-9.247-.24-.177.063-.066.346.103.27 2.946-1.333 6.684-.28 9.082 1.712 2.351 1.953 2.99 5.158 3.23 8.071.458 5.591-1.095 11.266-4.518 15.73-.057.073.053.162.112.09 3.976-4.78 5.969-11.103 5.184-17.298-.383-3.021-1.275-6.535-3.946-8.335" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M138.44 58.076c-2.102-1.69-4.482-2.634-7.158-2.558-3.08.089-6.202 1.511-8.396 3.671-1.86 1.832-2.368 4.503-1.733 7.04.725 2.893 2.904 5.134 5.217 6.84.067.05.144-.046.08-.1-1.967-1.686-3.73-3.743-4.39-6.326-.654-2.559-.002-5.09 1.935-6.82 3.676-3.286 10.057-4.987 14.27-1.524.143.117.32-.107.176-.223" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M163.674 86.716s3.188-8.58 6.952-7.626c3.765.953 2.685 12.468-.807 14.914-3.492 2.445-5.82-.743-5.82-.743z" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M170.235 82.383c.06-.02.095.062.048.098-2.426 1.804-3.2 4.69-3.521 7.556.545-1.213 1.5-2.048 3.094-1.438.083.032.045.16-.036.164-1.173.05-1.924.452-2.443 1.537-.367.768-.523 1.659-.714 2.485-.064.275-.535.259-.516-.044l.006-.069c-.968-3.439.46-8.976 4.082-10.289" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M258.247 217.822c-6.485 22.632-25.045 41.022-28.848 43.433a343.184 343.184 0 0 1-4.918 3.097c-5.727 3.816-9.675 2.782-9.675 2.782s-5.324 6.361-9.703 3.783c-4.919-2.878 3.52-11.248 5.345-18.69 4.183-17.048 5.36-42.45 6.078-47.488z" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M227.388 237.442c-1.33 4.992-2.508 9.931-4.508 14.719-2.195 5.251-5.187 9.937-8.114 14.783-.092.15.109.293.223.158 6.688-7.933 11.557-19.286 12.837-29.563.03-.248-.37-.348-.438-.097" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M238.045 238.471c-1.565 4.787-4.368 13.18-13.7 25.783-.03.041.03.106.069.065 7.147-7.376 11.765-15.763 14.107-25.675.073-.307-.372-.49-.476-.173" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M214.188 231.366c-.334-2.436-1.615-2.277-3.824 1.494-2.243 3.812-7.75 20.576-13.449 18.147-5.722-2.426 2.462-26.023 6.622-32.022 4.145-6.01 12.99-14.246 12.99-14.246-.67 4.91-1.152 16.976-2.339 26.627" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M269.02 161.068c4.553 14.286-7.453 46.159-10.773 56.754-1.447 4.617-43.616-7.72-42.038-12.646 3.234-10.093 11.604-28.458 10.125-29.822-1.17-1.08 38.546-27.273 42.685-14.286" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M237.884 166.758c-.555.224-1.118.394-1.659.656-.558.27-1.126.525-1.67.824-1.04.57-2.04 1.267-2.972 2.001-.939.74-1.839 1.52-2.676 2.373-.433.441-.858.892-1.26 1.364-.379.446-.79.92-1.062 1.439a.17.17 0 0 0 .004.17c.006.008.022.041.038.048.183.077.284-.07.412-.185.215-.193.426-.39.64-.586.454-.421.888-.864 1.344-1.284.912-.84 1.863-1.65 2.844-2.406a60.52 60.52 0 0 1 3.018-2.162c.512-.347 1.013-.71 1.537-1.04.519-.327 1.027-.692 1.56-.991.119-.067.03-.273-.098-.22" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M85.427 159.744c-6.85 4.755-27.598 23.373-23.406 33.541 4.192 10.17 20.175 9.916 42.536 5.87z" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M84.806 160.185c9.165-7.63 22.476-16.906 27.923-16.611 5.715.309 25.766 2.2 30.283 4.143 4.518 1.942 17.507 14.573 18.836 18.764 1.064 3.356-5.528 6.52-13.893 1.138-7.821-5.032-9.443-6.62-11.996-7.497-2.604-.896-12.606 1.054-13.82 4.848-.716 2.235 2.185 8.27 6.214 9.58 4.03 1.311 8.178-1.12 13.868-.812 5.688.309 11.143 5.875 10.06 7.731-1.085 1.856-3.645.85-11.398 3.444-4.987 1.669-10.898 4.671-19.352 9.64-8.645 5.08-21.147 4.991-21.147 4.991z" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#ffc727" d="M148.305 168.574c13.651 4.273 7.344 24.5-6.33 20.219-13.65-4.273-7.344-24.499 6.33-20.219" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)" opacity=".1">
                                                        <g opacity=".1">
                                                            <g opacity=".1">
                                                                <g opacity=".1" />
                                                                <g clip-path="url(#qut3d)" opacity=".1">
                                                                    <path d="M148.305 168.574c13.651 4.273 7.344 24.5-6.33 20.219-13.65-4.273-7.344-24.499 6.33-20.219" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#ffc727" d="M147.023 168.173c13.01 4.073 6.702 24.298-6.33 20.219-13.009-4.073-6.7-24.298 6.33-20.219" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)" opacity=".1">
                                                        <g opacity=".1">
                                                            <g opacity=".1">
                                                                <g opacity=".1" />
                                                                <g clip-path="url(#qut3e)" opacity=".1">
                                                                    <path d="M135.354 177.7c-.395 3.697 1.3 7.54 5.88 8.973 10.813 3.386 16.05-13.4 5.253-16.78-.071-.023-.141-.045-.214-.063 10.098 3.384 5.073 19.26-5.238 16.033-4.206-1.317-5.879-4.76-5.681-8.162" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M112.729 143.574c6.743-1.83 21.006-3.217 30.5.492 6.417 2.507 15.524 25.383 12.197 28.077-3.326 2.693-6.13.159-9.82-4.104-1.346-1.554-6.713-11.682-9.596-11.246-4.144.625-14.112 6.583-14.112 6.583z" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M156.134 170.552c1.028-5.19-1.79-11.025-4.926-16.464-.048-.085-.183-.014-.134.07.798 1.386 4.983 11.265 4.962 16.403 0 .058.088.043.098-.01" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M112.729 143.574c6.743-1.83 21.006-3.217 30.5.492 6.417 2.507 10.076 24.5 6.749 27.193-3.327 2.693-7.57-.717-10.601-6.304-.98-1.806-2.707-9.574-5.589-9.14-4.144.626-14.346 2.258-14.346 2.258z" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M125.557 156.876c1.072-.281 1.444-.384 2.522-.646a45.598 45.598 0 0 1 3.241-.69c.94-.157 1.923-.385 2.876-.21.914.167 1.698.725 2.315 1.402 1.41 1.544 1.91 3.789 2.533 5.727.695 2.164 2.484 6.276 5.023 8.14.7.513 1.424.98 2.28 1.17.556.123 1.284.31 1.89.123 2.556-.79 3.073-3.879 3.044-6.424-.053-4.743-1.574-9.534-3.3-13.904-.424-1.074-.876-2.136-1.326-3.199-.514-1.21-1.078-2.437-2.078-3.36-1.599-1.478-5.723-2.244-6.992-2.495-.097-.02-.05-.163.043-.146 1.551.284 5.83.51 8.307 3.007.906.913 1.35 2.209 1.874 3.37a72.99 72.99 0 0 1 1.54 3.691c.935 2.42 1.738 4.896 2.283 7.435.515 2.4.966 5.064.564 7.512-.35 2.122-1.819 4.255-3.936 4.89-1.785.533-3.558-.562-4.333-1.105a10.342 10.342 0 0 1-2.032-1.885c-.629-.753-2.56-3.905-3.265-5.354-.897-1.843-1.3-3.947-2.352-5.705-.503-.84-1.253-1.542-2.226-1.776-.902-.217-1.958-.063-2.873.003-2.07.15-3.428.235-5.454.72-.49.119-.617-.174-.168-.291" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#eeb08a" d="M107.539 144.893c1.8-1.067 12.077-7.518 16.112-8.637 4.036-1.119 19.825-3.322 22.984.274 3.972 4.519-7.888 8.29-13.192 9.462-5.304 1.172-9.989 7.103-9.989 7.103z" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M141.624 143.49c-1.768.29-3.546.777-5.276 1.241-1.64.44-3.378.774-4.938 1.453-1.567.683-2.92 1.712-4.178 2.855a28.419 28.419 0 0 0-1.762 1.772c-.618.67-1.176 1.404-1.804 2.062-.066.07.034.18.103.111 1.16-1.168 2.516-2.221 3.816-3.228a21.136 21.136 0 0 1 4.432-2.64c3.14-1.375 6.533-2.062 9.686-3.406.128-.055.047-.24-.079-.22" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M149.162 171.533c1.216.689 2.59 1.382 4.028 1.308.608-.031 1.215-.207 1.71-.574.26-.193.5-.444.685-.709.172-.247.417-.64.354-.952-.018-.093.132-.085.108 0-.052.189-.026.395-.054.587a2.16 2.16 0 0 1-.135.478c-.122.31-.297.58-.527.822-.499.526-1.177.837-1.891.933-1.695.231-3.182-.657-4.35-1.802-.047-.046.015-.124.072-.091" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M121.807 155.21c-1.4 2.191-2.906 4.329-4.019 6.688-1.099 2.332-2.007 4.75-2.406 7.305-.43 2.753-.2 5.472-.142 8.24.028 1.317.032 2.63-.154 3.936a15.81 15.81 0 0 1-.865 3.329c-.913 2.426-2.606 4.55-4.56 6.222-.077.065.027.19.11.136 3.834-2.54 6.349-7.048 6.75-11.6.248-2.823-.228-5.654-.006-8.481.2-2.556.847-5.135 1.695-7.549.987-2.808 2.192-5.603 3.69-8.174.035-.06-.056-.11-.093-.052" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#263238" d="M96.89 150.95c-5.374 3.275-10.274 6.82-15.094 10.85-4.76 3.98-9.23 8.334-12.979 13.277a56.282 56.282 0 0 0-5.497 8.86c-.031.062.06.111.094.052 1.558-2.65 3.364-5.19 5.264-7.608 1.889-2.405 3.933-4.689 6.08-6.87 4.354-4.426 9.145-8.381 14.11-12.113 2.81-2.11 5.39-4.13 8.192-6.25.269-.203.13-.38-.17-.198" />
                                                    </g>
                                                    <g clip-path="url(#qut3c)">
                                                        <path fill="#ebebeb" d="M175.71 281.372c-.047.28-.102.56-.156.846.047-.28.102-.566.15-.846z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <g />
                                            <g clip-path="url(#qut3f)">
                                                <g>
                                                    <g />
                                                    <g clip-path="url(#qut3g)">
                                                        <path fill="#dcdcdc" d="M255.208 337.667c0 2.96-32.431 5.358-72.437 5.358s-72.438-2.399-72.438-5.358c0-2.958 32.432-5.357 72.438-5.357s72.437 2.399 72.437 5.357" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g clip-path="url(#qut3f)">
                                                <g>
                                                    <g>
                                                        <path fill="#c1c1c1" d="M114.104 247.677a45.04 45.04 0 0 0 .596-4.146c.136-1.373.217-2.759.21-4.171-.01-1.411-.098-2.85-.382-4.338-.303-1.473-.749-3.066-1.933-4.567-.596-.734-1.419-1.408-2.361-1.788a5.985 5.985 0 0 0-1.418-.39 6.916 6.916 0 0 0-1.366-.062c-1.833.1-3.402.901-4.617 1.857-1.225.972-2.184 2.126-2.953 3.38-.758 1.264-1.363 2.61-1.62 4.18-.109.787-.174 1.657.208 2.66.191.491.564 1.017 1.067 1.35.514.346 1.026.472 1.55.512a2.855 2.855 0 0 0 1.63-.393c.472-.29.807-.669 1.053-1.04.48-.753.686-1.499.825-2.223.255-1.451.196-2.856-.039-4.232-.25-1.366-.675-2.725-1.497-3.93-.41-.596-.94-1.154-1.624-1.523a3.468 3.468 0 0 0-2.227-.37c-1.47.263-2.6 1.142-3.542 2.08-1.85 1.937-3.136 4.26-4.177 6.646 1.222-2.29 2.704-4.495 4.608-6.189.952-.813 2.074-1.513 3.221-1.583 1.142-.097 2.066.628 2.611 1.652.56 1.016.83 2.235.93 3.44.09 1.206.009 2.447-.3 3.544-.153.54-.382 1.051-.647 1.372a.988.988 0 0 1-.358.29.439.439 0 0 1-.254.004c-.119-.03-.256-.092-.27-.133a.498.498 0 0 1-.076-.198c-.063-.232-.043-.716.088-1.2.553-2.008 2.137-4.08 3.886-5.21.882-.567 1.813-.864 2.604-.812.198.012.396.043.578.09.173.043.316.108.446.178.258.14.452.344.652.638.395.597.67 1.6.778 2.681.113 1.09.095 2.27 0 3.46a35.322 35.322 0 0 1-.491 3.612 40.162 40.162 0 0 1-.816 3.542z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#d6d6d6" d="M118.444 311.31c3.778 5.337 3.01 21.628 5.293 23.912 2.284 2.283 25.721 2.042 27.3.7 1.578-1.34.832-7.1 2.604-8.047.692-.37-35.197-16.565-35.197-16.565" />
                                                    </g>
                                                    <g>
                                                        <path fill="#d6d6d6" d="M218.503 311.571c-4.717 6.812-2.168 21.368-4.451 23.651-2.284 2.284-25.722 2.043-27.3.7-1.579-1.34-.857-7.41-1.79-8.565-.493-.61 33.54-15.786 33.54-15.786" />
                                                    </g>
                                                    <g opacity=".3">
                                                        <g opacity=".3">
                                                            <g opacity=".3">
                                                                <g opacity=".3">
                                                                    <path fill="#ababab" d="M118.447 329.614v-18.3h35.201v18.3z" />
                                                                </g>
                                                                <g clip-path="url(#qut3h)" opacity=".3">
                                                                    <path fill="#ababab" d="M153.638 327.876c-.498.263-.797.912-1.004 1.737-13.937-1.751-24.464-5.36-31.382-8.442-.542-3.972-1.324-7.758-2.805-9.858 0 0 35.889 16.193 35.191 16.563" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g opacity=".3">
                                                        <g opacity=".3">
                                                            <g opacity=".3">
                                                                <g opacity=".3">
                                                                    <path fill="#ababab" d="M184.96 329.72v-18.15h33.545v18.15z" />
                                                                </g>
                                                                <g clip-path="url(#qut3i)" opacity=".3">
                                                                    <path fill="#ababab" d="M218.505 311.57c-1.759 2.54-2.513 6.164-2.876 9.815-7.346 3.303-17.475 6.712-30.145 8.335-.085-1.088-.22-1.986-.52-2.363-.498-.612 33.54-15.787 33.54-15.787" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <path fill="#d6d6d6" d="M166.905 212.813c-47.142 0-65.181 36.901-65.181 58.494 0 21.305 13.703 57.514 65.18 57.514 51.478 0 68.557-30.674 68.557-58.004s-20.936-58.004-68.556-58.004" />
                                                    </g>
                                                    <g>
                                                        <path fill="#c1c1c1" d="M180.206 215.48s21.526-16.513 44.845-14.545c8.03.678-5.302 18.074-5.545 31.663z" />
                                                    </g>
                                                    <g opacity=".3">
                                                        <g opacity=".3">
                                                            <g opacity=".3">
                                                                <g opacity=".3">
                                                                    <path fill="#7a7a7a" d="M210.511 229.552v-22.814h15.71v22.814z" />
                                                                </g>
                                                                <g clip-path="url(#qut3j)" opacity=".3">
                                                                    <path fill="#7a7a7a" d="M210.514 225.948c-.135.86 7.294 4.043 8.062 3.554.768-.49 1.544-11.195 7.608-22.6.892-1.679-14.233 9.848-15.67 19.046" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g opacity=".3">
                                                        <g opacity=".3">
                                                            <g opacity=".3">
                                                                <g opacity=".3">
                                                                    <path fill="#ababab" d="M209.29 270.158v-15.139h9.82v15.139z" />
                                                                </g>
                                                                <g clip-path="url(#qut3k)" opacity=".3">
                                                                    <path fill="#ababab" d="M215.185 268.354c1.567-.223 2.57-1.276 3.092-2.698-.24 1.764-.976 3.288-2.51 4.273-.102.069-.05.266.086.223 4.12-1.55 3.674-7.365 2.227-11.073-.077-.205-.154-.41-.249-.608-.924-2.15-2.534-3.708-4.555-3.417-6.654.96-4.256 14.19 1.91 13.3" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <path fill="#c1c1c1" d="M231.046 249.51c1.03 3.094 10.378.584 12.736 2.541 3.708 3.077 2.683 41.265-.71 44.342-1.903 1.726-12.504-.093-15.483 2.005-2.98 2.098 3.457-48.889 3.457-48.889" />
                                                    </g>
                                                    <g opacity=".3">
                                                        <g opacity=".3">
                                                            <g opacity=".3">
                                                                <g opacity=".3">
                                                                    <path fill="#c8c8c8" d="M240.807 290.136v-33.684h3.471v33.684z" />
                                                                </g>
                                                                <g clip-path="url(#qut3l)" opacity=".3">
                                                                    <path fill="#c8c8c8" d="M244.278 273.294c0 9.302-.776 16.842-1.735 16.842-.959 0-1.736-7.54-1.736-16.842s.777-16.842 1.736-16.842 1.735 7.54 1.735 16.842" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g opacity=".3">
                                                        <g opacity=".3">
                                                            <g opacity=".3">
                                                                <g opacity=".3">
                                                                    <path fill="#ababab" d="M146.864 225.05v-8.325h34.078v8.324z" />
                                                                </g>
                                                                <g clip-path="url(#qut3m)" opacity=".3">
                                                                    <path fill="#ababab" d="M148.631 225.05c.158-.053 16.047-5.22 30.838-1.177l1.473-5.39c-16.458-4.5-33.366 1.03-34.078 1.266l1.77 5.3-.885-2.65z" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <path fill="#fff" d="M126.567 306.13c-21.234-24.396-8.242-52.73-7.65-53.944a3.494 3.494 0 0 0-1.602-4.668 3.49 3.49 0 0 0-4.668 1.592c-.172.351-4.243 8.74-5.007 20.342-1.024 15.516 4.11 29.767 16.256 39.466 3.663 2.925 5.4.348 2.67-2.787" />
                                                    </g>
                                                    <g>
                                                        <path fill="#fff" d="M117.326 241.356a3.795 3.795 0 1 0 7.59 0 3.795 3.795 0 0 0-7.59 0" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg></div>
                    <div class="coll-md-7">
                        <h2 class="mb-35 term-tags savtxt mt-mob-28 gspwhattxt" name="">Why should you invest in ULIPs?</h2>
                        <div class="gsp-buy">
                            <p>Unit Linked Insurance Plans offer superior returns in multiple asset groups than the majority of insurance products. Depending on the performance of the fund, the policyholder can switch between debt and equity to ensure that the returns are positive and beneficial. Every earning individual is generally advised to get an insurance plan that provides a cover amount worth an income of ten years. In the case of ULIPs, the life cover provided is ten times the amount of annual premium payments, which in turn, makes the insured unsusceptible to market volatility. The insured gets liquidity benefits, transparency, returns, etc., which works in their favour. Therefore, investing in a ULIP makes for a smart decision!</p>
                            <div class="coll-md-4 mr-mob-0 w-mob-ban-100 mt-30"><a rel="nofollow" href="buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=whyinvestinulip" target="_blank" class="in-buy banner-buy" title="invest in ULIP">invest in ULIP</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="who-buy ulip-merge top-0" id="manage-ulip-funds">
            <div class="midWrapper" id="who-should-buy-a-term-insurance-policy">
                <h2 class="mb-35 mb-mob-20 term-tags fnt-24">How to manage ULIP funds?</h2>
                <p class="ulip-marge-pera">Do you have trouble managing your ULIP funds? Or do you not know how to handle them in the best way possible? The following are some important considerations with regard to the management of ULIP funds:</p>
                <div class="roww mb-mob-25">
                    <div class="coll-md-7">
                        <ul class="mx-621 plan-works">
                            <li>Numerous ULIPs permit routine transfers of funds from debt to equity ULIPs. If you pay an annual premium, you can begin investing in a debt fund and then choose to switch to an equity fund gradually. It would resemble Systematic Transfer Plans (STP), which have grown to be incredibly popular. You should absolutely think about adopting it to reduce your investment risk.</li>
                            <li>You must get ready for a long-term investment because ULIPs have a five-year lock-in period.</li>
                            <li>The performance and future prospects of ULIP funds must be reviewed on a regular basis. If an asset class in your ULIP fund has underperformed or is overvalued, you should change it. You would need to migrate from an equity ULIP fund to a debt ULIP fund in order to achieve the same. There won't be any taxes to pay. There might be some fees but bear in mind that many ULIPs give investors a set number of free switches each year.</li>
                            <li>There are several ULIPs that have a lifecycle-based strategy. Based on the investor's age, this method automatically distributes their funds between equity and debt. If you decide to invest in ULIPs for your retirement, you may easily adopt this method.</li>
                        </ul>
                    </div>
                    <div class="coll-md-5 align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="410" height="405" viewBox="0 0 410 405" foxified="">
                            <defs>
                                <clipPath id="c4o3a">
                                    <path d="M0 405V.7h409.229V405z" />
                                </clipPath>
                                <clipPath id="c4o3b">
                                    <path d="M0 405V.7h409.229V405z" />
                                </clipPath>
                                <clipPath id="c4o3c">
                                    <path d="M10.323 34.745v-.293H13.1v.293z" />
                                </clipPath>
                                <clipPath id="c4o3d">
                                    <path d="M0 405V.7h409.229V405z" />
                                </clipPath>
                                <clipPath id="c4o3e">
                                    <path d="M0 405V.7h409.229V405z" />
                                </clipPath>
                                <clipPath id="c4o3f">
                                    <path d="M0 405V.7h409.229V405z" />
                                </clipPath>
                                <clipPath id="c4o3g">
                                    <path d="M235.775 404.467v-47.553h60.461v47.553z" />
                                </clipPath>
                                <clipPath id="c4o3h">
                                    <path d="M0 405V.7h409.229V405z" />
                                </clipPath>
                            </defs>
                            <g>
                                <g>
                                    <g>
                                        <g />
                                        <g clip-path="url(#c4o3a)">
                                            <path fill="#ebebeb" d="M.247 134.724V18.95h89.28v115.774z" />
                                        </g>
                                        <g clip-path="url(#c4o3a)">
                                            <g>
                                                <g />
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M6.335 106.82s.162-.047.445.067c.27.114.65.438.777 1.011.066.277.048.628-.127.94-.165.314-.47.59-.858.736a1.652 1.652 0 0 1-1.299-.042c-.431-.198-.792-.577-1.021-1.04-.484-.941-.302-2.202.343-3.205.323-.507.77-.978 1.365-1.263a2.09 2.09 0 0 1 .978-.212c.345.013.687.132.981.322.587.392.975 1.012 1.23 1.667.255.664.378 1.373.427 2.1a7.8 7.8 0 0 1-1.029 4.331c-.763 1.345-1.785 2.446-2.672 3.557-.89 1.107-1.66 2.263-2.022 3.505-.352 1.232-.298 2.538.228 3.546.5 1.031 1.572 1.57 2.528 1.551.478-.01.93-.15 1.276-.403.346-.255.583-.6.676-.967a2.367 2.367 0 0 0-.341-1.877c-.296-.464-.707-.66-.98-.718a1.105 1.105 0 0 0-.324-.03.357.357 0 0 1-.115-.009c0-.005.037-.012.112-.021a.955.955 0 0 1 .337.002c.29.04.738.233 1.063.71a2.47 2.47 0 0 1 .406 1.984c-.093.402-.35.795-.724 1.077-.375.283-.866.442-1.381.46a3.042 3.042 0 0 1-1.552-.391c-.499-.266-.918-.723-1.196-1.254-.571-1.076-.633-2.444-.273-3.734.371-1.3 1.163-2.49 2.058-3.609.892-1.125 1.901-2.218 2.641-3.523a7.54 7.54 0 0 0 .997-4.171c-.043-.698-.163-1.391-.4-2.015-.238-.621-.604-1.197-1.118-1.542a1.69 1.69 0 0 0-1.702-.102c-.537.25-.963.687-1.27 1.159-.619.948-.793 2.12-.361 2.984.206.43.53.78.915.962.38.19.809.185 1.162.057.357-.125.637-.37.794-.65.163-.279.188-.588.136-.85-.1-.535-.443-.855-.69-.98-.26-.124-.423-.102-.42-.12" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M7.118 96.284s-.162.047-.446-.066c-.27-.116-.65-.44-.777-1.013a1.33 1.33 0 0 1 .126-.94c.167-.314.471-.59.86-.735a1.652 1.652 0 0 1 1.298.042c.432.198.793.576 1.022 1.039.483.942.301 2.202-.343 3.205-.323.507-.77.979-1.365 1.263a2.09 2.09 0 0 1-.978.213 1.975 1.975 0 0 1-.981-.323c-.588-.392-.975-1.012-1.231-1.666-.254-.665-.379-1.373-.426-2.101a7.8 7.8 0 0 1 1.028-4.33c.764-1.345 1.786-2.446 2.672-3.558.89-1.106 1.66-2.263 2.023-3.505.352-1.232.297-2.538-.228-3.546-.5-1.032-1.573-1.57-2.529-1.55-.477.01-.929.15-1.275.402a1.76 1.76 0 0 0-.676.968c-.183.74.038 1.439.34 1.877.296.464.707.66.98.718.14.034.25.033.325.03.074 0 .114.004.115.008 0 .005-.037.013-.112.021a.956.956 0 0 1-.338-.001c-.29-.04-.737-.233-1.062-.711a2.47 2.47 0 0 1-.407-1.984c.093-.401.351-.794.724-1.076.376-.282.867-.443 1.382-.46.515-.008 1.06.11 1.552.39.498.267.917.723 1.196 1.255.57 1.076.632 2.443.273 3.733-.372 1.3-1.163 2.49-2.058 3.61-.894 1.124-1.902 2.217-2.642 3.522a7.54 7.54 0 0 0-.997 4.172c.043.698.164 1.39.401 2.014.237.622.603 1.197 1.117 1.543a1.69 1.69 0 0 0 1.703.102c.537-.25.963-.688 1.269-1.16.62-.947.794-2.119.362-2.984-.206-.43-.531-.778-.915-.962-.38-.19-.81-.184-1.163-.056-.356.124-.636.37-.793.649-.164.279-.189.589-.137.85.101.535.443.856.69.981.26.124.424.101.42.12" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M7.632 101.343a.907.907 0 1 1-1.815.001.907.907 0 0 1 1.815 0" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M8.027 77.156a.908.908 0 1 1-1.815 0 .908.908 0 0 1 1.815 0" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M6.73 47.399c-.002-.02.162.004.421-.12.248-.126.59-.448.69-.984a1.218 1.218 0 0 0-.137-.852 1.46 1.46 0 0 0-.794-.652 1.484 1.484 0 0 0-1.164.058c-.384.185-.708.536-.913.967-.43.867-.256 2.04.363 2.99.305.472.732.912 1.27 1.163.53.265 1.192.247 1.705-.105.512-.347.878-.926 1.115-1.55.236-.624.356-1.319.399-2.018a7.573 7.573 0 0 0-.996-4.178c-.74-1.31-1.75-2.406-2.642-3.534-.895-1.121-1.686-2.315-2.058-3.617-.36-1.292-.298-2.662.27-3.741.277-.533.695-.992 1.195-1.259a3.032 3.032 0 0 1 1.553-.394c.516.017 1.009.178 1.384.46.373.283.63.676.724 1.08a2.479 2.479 0 0 1-.406 1.987c-.324.48-.772.674-1.062.715a.915.915 0 0 1-.338 0c-.076-.008-.113-.016-.112-.02 0-.005.04-.007.114-.008.075.002.185.004.325-.03.274-.059.685-.256.98-.722.303-.44.523-1.139.34-1.882a1.759 1.759 0 0 0-.675-.969c-.348-.254-.8-.394-1.278-.405-.957-.018-2.03.525-2.53 1.562-.522 1.01-.577 2.318-.224 3.552.362 1.244 1.132 2.404 2.023 3.513.886 1.115 1.908 2.219 2.672 3.567a7.832 7.832 0 0 1 1.027 4.338c-.047.73-.17 1.44-.425 2.104-.254.656-.64 1.28-1.227 1.673a1.952 1.952 0 0 1-.983.325 2.053 2.053 0 0 1-.979-.212c-.596-.283-1.044-.757-1.367-1.265-.643-1.006-.826-2.267-.344-3.211.229-.464.588-.845 1.02-1.043.431-.21.917-.193 1.3-.045.39.146.694.424.86.738.174.312.192.665.127.942-.127.573-.506.9-.777 1.015-.283.113-.446.067-.446.067" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M7.003 57.962c.002.019-.163-.005-.421.12-.248.126-.59.448-.69.984-.052.262-.027.573.137.853.157.28.436.526.793.651.354.128.785.134 1.166-.058.383-.184.707-.536.912-.967.43-.867.258-2.04-.363-2.99-.306-.473-.733-.911-1.27-1.163a1.688 1.688 0 0 0-1.705.106c-.513.347-.877.925-1.114 1.548-.237.625-.357 1.32-.4 2.02a7.572 7.572 0 0 0 .996 4.178c.741 1.309 1.749 2.405 2.642 3.533.895 1.121 1.686 2.315 2.057 3.618.36 1.291.3 2.661-.27 3.74-.277.533-.695.991-1.194 1.259a3.031 3.031 0 0 1-1.552.395c-.517-.018-1.01-.178-1.384-.461a1.93 1.93 0 0 1-.724-1.08 2.474 2.474 0 0 1 .405-1.988c.324-.478.773-.673 1.062-.713a.965.965 0 0 1 .338-.003c.075.01.114.017.112.023 0 .004-.04.007-.114.008a1.108 1.108 0 0 0-.325.03c-.274.058-.684.255-.98.72a2.38 2.38 0 0 0-.34 1.882c.093.367.33.714.677.97.345.254.797.394 1.276.404.958.019 2.03-.524 2.529-1.56.524-1.01.578-2.318.225-3.553-.362-1.244-1.133-2.404-2.023-3.513-.886-1.115-1.909-2.219-2.671-3.567a7.834 7.834 0 0 1-1.029-4.339c.048-.728.171-1.438.426-2.104.255-.655.64-1.278 1.227-1.673a1.97 1.97 0 0 1 .983-.325c.345-.012.684.068.979.211.596.286 1.043.76 1.366 1.267.644 1.006.828 2.267.346 3.21-.23.465-.589.846-1.021 1.044a1.65 1.65 0 0 1-1.3.045 1.619 1.619 0 0 1-.861-.738 1.345 1.345 0 0 1-.126-.942c.128-.574.506-.9.778-1.015.281-.114.445-.067.445-.067" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M8.027 52.89a.91.91 0 0 0-.907-.911.91.91 0 0 0 0 1.82.909.909 0 0 0 .907-.91" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M81.69 106.82s.162-.047.446.067c.27.114.65.438.777 1.011a1.33 1.33 0 0 1-.126.94c-.167.314-.47.59-.86.736a1.652 1.652 0 0 1-1.299-.042c-.431-.198-.792-.577-1.02-1.04-.484-.941-.303-2.202.342-3.205.323-.507.77-.978 1.365-1.263.295-.142.633-.225.978-.212.345.013.687.132.981.322.588.392.975 1.012 1.231 1.667.254.664.379 1.373.426 2.1a7.792 7.792 0 0 1-1.028 4.331c-.764 1.345-1.786 2.446-2.672 3.557-.89 1.107-1.66 2.263-2.023 3.505-.352 1.232-.297 2.538.228 3.546.5 1.031 1.573 1.57 2.529 1.551.477-.01.929-.15 1.275-.403.347-.255.583-.6.676-.967a2.367 2.367 0 0 0-.34-1.877c-.296-.464-.707-.66-.981-.718a1.105 1.105 0 0 0-.324-.03.357.357 0 0 1-.115-.009c0-.005.037-.012.112-.021a.955.955 0 0 1 .338.002c.29.04.737.233 1.062.71a2.47 2.47 0 0 1 .407 1.984c-.093.402-.351.795-.725 1.077-.374.283-.866.442-1.38.46a3.044 3.044 0 0 1-1.553-.391c-.498-.266-.917-.723-1.196-1.254-.57-1.076-.632-2.444-.273-3.734.372-1.3 1.163-2.49 2.058-3.609.894-1.125 1.902-2.218 2.642-3.523a7.54 7.54 0 0 0 .997-4.171c-.043-.698-.164-1.391-.401-2.015-.237-.621-.604-1.197-1.117-1.542a1.69 1.69 0 0 0-1.703-.102c-.537.25-.963.687-1.27 1.159-.618.948-.793 2.12-.36 2.984.205.43.53.78.914.962.38.19.81.185 1.163.057.356-.125.636-.37.793-.65.164-.279.189-.588.137-.85-.101-.535-.443-.855-.69-.98-.26-.124-.424-.102-.421-.12" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M82.473 96.284s-.162.047-.445-.066c-.27-.116-.65-.44-.777-1.013a1.326 1.326 0 0 1 .127-.94c.165-.314.47-.59.858-.735a1.652 1.652 0 0 1 1.299.042c.431.198.792.576 1.021 1.039.484.942.302 2.202-.343 3.205-.323.507-.77.979-1.365 1.263a2.093 2.093 0 0 1-.978.213 1.972 1.972 0 0 1-.981-.323c-.587-.392-.976-1.012-1.23-1.666-.255-.665-.379-1.373-.427-2.101a7.8 7.8 0 0 1 1.029-4.33c.763-1.345 1.785-2.446 2.671-3.558.89-1.106 1.66-2.263 2.023-3.505.352-1.232.298-2.538-.228-3.546-.5-1.032-1.573-1.57-2.529-1.55-.477.01-.929.15-1.275.402a1.76 1.76 0 0 0-.676.968c-.182.74.039 1.439.341 1.877.296.464.706.66.98.718.14.034.25.033.324.03.075 0 .114.004.115.008 0 .005-.037.013-.112.021a.956.956 0 0 1-.337-.001c-.29-.04-.738-.233-1.063-.711a2.47 2.47 0 0 1-.406-1.984c.093-.401.35-.794.724-1.076.375-.282.866-.443 1.381-.46.516-.008 1.06.11 1.552.39.499.267.918.723 1.196 1.255.571 1.076.633 2.443.273 3.733-.371 1.3-1.163 2.49-2.058 3.61-.892 1.124-1.902 2.217-2.641 3.522a7.54 7.54 0 0 0-.997 4.172c.042.698.163 1.39.4 2.014.238.622.604 1.197 1.118 1.543a1.69 1.69 0 0 0 1.702.102c.537-.25.963-.688 1.27-1.16.619-.947.793-2.119.361-2.984-.206-.43-.53-.778-.915-.962-.38-.19-.809-.184-1.163-.056-.356.124-.636.37-.793.649-.163.279-.188.589-.137.85.102.535.444.856.69.981.26.124.424.101.421.12" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M82.987 101.343a.907.907 0 1 1-1.814.001.907.907 0 0 1 1.814 0" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M83.383 77.156a.908.908 0 1 1-1.816 0 .908.908 0 0 1 1.816 0" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M82.086 47.399c-.003-.02.162.004.42-.12.248-.126.59-.448.69-.984a1.218 1.218 0 0 0-.136-.852 1.46 1.46 0 0 0-.794-.652 1.484 1.484 0 0 0-1.165.058c-.384.185-.708.536-.913.967-.43.867-.256 2.04.363 2.99.306.472.733.912 1.27 1.163.53.265 1.192.247 1.705-.105.513-.347.878-.926 1.115-1.55s.356-1.319.4-2.018a7.573 7.573 0 0 0-.997-4.178c-.74-1.31-1.749-2.406-2.641-3.534-.895-1.121-1.687-2.315-2.058-3.617-.36-1.292-.3-2.662.27-3.741.277-.533.695-.992 1.194-1.259a3.032 3.032 0 0 1 1.553-.394c.517.017 1.009.178 1.384.46.373.283.631.676.724 1.08a2.479 2.479 0 0 1-.405 1.987c-.324.48-.773.674-1.063.715a.915.915 0 0 1-.338 0c-.075-.008-.113-.016-.112-.02 0-.005.04-.007.115-.008.075.002.184.004.325-.03.273-.059.684-.256.98-.722.302-.44.522-1.139.34-1.882a1.756 1.756 0 0 0-.677-.969c-.346-.254-.798-.394-1.276-.405-.958-.018-2.03.525-2.53 1.562-.523 1.01-.576 2.318-.225 3.552.362 1.244 1.133 2.404 2.023 3.513.887 1.115 1.909 2.219 2.672 3.567a7.832 7.832 0 0 1 1.028 4.338c-.048.73-.171 1.44-.425 2.104-.255.656-.641 1.28-1.228 1.673a1.952 1.952 0 0 1-.982.325 2.053 2.053 0 0 1-.98-.212c-.596-.283-1.043-.757-1.366-1.265-.644-1.006-.827-2.267-.345-3.211.23-.464.588-.845 1.02-1.043.432-.21.917-.193 1.301-.045.39.146.694.424.86.738.174.312.192.665.126.942-.127.573-.505.9-.777 1.015-.282.113-.445.067-.445.067" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M82.359 57.962c.002.019-.162-.005-.421.12-.248.126-.59.448-.69.984-.052.262-.027.573.137.853.156.28.437.526.794.651.353.128.783.134 1.164-.058.384-.184.708-.536.913-.967.43-.867.257-2.04-.363-2.99-.305-.473-.732-.911-1.27-1.163a1.688 1.688 0 0 0-1.705.106c-.512.347-.878.925-1.115 1.548-.236.625-.356 1.32-.399 2.02a7.573 7.573 0 0 0 .996 4.178c.74 1.309 1.75 2.405 2.642 3.533.895 1.121 1.686 2.315 2.058 3.618.36 1.291.298 2.661-.27 3.74-.277.533-.695.991-1.195 1.259a3.032 3.032 0 0 1-1.553.395c-.516-.018-1.009-.178-1.384-.461a1.935 1.935 0 0 1-.724-1.08 2.481 2.481 0 0 1 .406-1.988c.324-.478.772-.673 1.062-.713a.96.96 0 0 1 .338-.003c.076.01.113.017.112.023 0 .004-.04.007-.114.008a1.111 1.111 0 0 0-.325.03c-.274.058-.685.255-.98.72a2.38 2.38 0 0 0-.34 1.882c.093.367.329.714.676.97.347.254.799.394 1.277.404.957.019 2.03-.524 2.53-1.56.522-1.01.576-2.318.224-3.553-.362-1.244-1.132-2.404-2.023-3.513-.886-1.115-1.908-2.219-2.672-3.567a7.833 7.833 0 0 1-1.027-4.339c.047-.728.17-1.438.425-2.104.254-.655.64-1.278 1.227-1.673a1.97 1.97 0 0 1 .983-.325c.345-.012.684.068.979.211.596.286 1.044.76 1.367 1.267.643 1.006.826 2.267.344 3.21-.229.465-.588.846-1.02 1.044a1.65 1.65 0 0 1-1.3.045 1.612 1.612 0 0 1-.86-.738 1.336 1.336 0 0 1-.127-.942c.127-.574.506-.9.776-1.015.284-.114.447-.067.447-.067" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M83.383 52.89a.91.91 0 0 0-.908-.911.91.91 0 0 0 0 1.82.909.909 0 0 0 .908-.91" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M38.686 128.264c-.018.003.005-.162-.12-.42-.126-.248-.448-.59-.984-.69a1.219 1.219 0 0 0-.852.136c-.28.157-.527.437-.652.794-.128.354-.133.785.058 1.165.185.384.536.708.967.913.867.43 2.04.256 2.99-.363.473-.306.912-.733 1.163-1.27a1.688 1.688 0 0 0-.105-1.705c-.348-.513-.926-.878-1.549-1.115-.625-.236-1.32-.356-2.02-.4a7.573 7.573 0 0 0-4.178.997c-1.308.74-2.405 1.749-3.533 2.641-1.121.895-2.314 1.687-3.618 2.058-1.291.36-2.66.3-3.74-.27-.533-.277-.991-.695-1.259-1.194a3.032 3.032 0 0 1-.394-1.553c.017-.517.178-1.009.46-1.384a1.935 1.935 0 0 1 1.08-.724 2.478 2.478 0 0 1 1.987.405c.48.324.674.773.714 1.063a.934.934 0 0 1 .002.337c-.009.076-.016.114-.021.113a.393.393 0 0 1-.008-.115 1.11 1.11 0 0 0-.03-.325c-.059-.274-.257-.684-.721-.98a2.379 2.379 0 0 0-1.882-.34 1.76 1.76 0 0 0-.97.677c-.253.346-.394.798-.404 1.277-.02.957.525 2.03 1.56 2.529 1.011.523 2.319.576 3.553.225 1.244-.362 2.404-1.133 3.513-2.023 1.116-.886 2.22-1.909 3.567-2.672a7.833 7.833 0 0 1 4.339-1.028c.729.048 1.438.171 2.103.424.657.256 1.28.642 1.674 1.229.192.294.31.636.325.982.013.346-.068.684-.212.98-.285.596-.758 1.043-1.266 1.366-1.006.644-2.267.827-3.21.345-.465-.23-.845-.588-1.044-1.02a1.646 1.646 0 0 1-.044-1.301c.145-.39.423-.694.738-.86.312-.174.664-.192.941-.126.573.127.9.505 1.015.777.114.282.068.445.068.445" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M64.089 127.992s.045.163-.068.446c-.115.271-.44.65-1.015.777a1.333 1.333 0 0 1-.941-.126 1.608 1.608 0 0 1-.739-.86c-.15-.384-.165-.87.045-1.301.199-.432.58-.791 1.044-1.02.943-.482 2.204-.3 3.21.344.507.323.98.77 1.266 1.367.144.295.225.634.212.98a1.969 1.969 0 0 1-.325.982c-.395.586-1.018.973-1.673 1.227-.665.254-1.375.378-2.105.425a7.836 7.836 0 0 1-4.338-1.027c-1.347-.764-2.451-1.786-3.566-2.672-1.11-.89-2.27-1.661-3.514-2.023-1.234-.353-2.542-.298-3.552.225-1.035.5-1.58 1.571-1.56 2.53.01.477.15.93.403 1.276.256.347.603.583.97.676a2.379 2.379 0 0 0 1.882-.34c.465-.295.662-.706.72-.98.035-.14.034-.25.03-.325.002-.074.005-.114.009-.114.005-.001.013.036.022.111a.988.988 0 0 1-.002.339c-.04.29-.236.738-.714 1.062a2.48 2.48 0 0 1-1.987.406 1.934 1.934 0 0 1-1.08-.724c-.283-.375-.443-.868-.461-1.384a3.032 3.032 0 0 1 .395-1.553c.267-.5.726-.918 1.259-1.195 1.079-.569 2.448-.63 3.739-.27 1.304.372 2.497 1.163 3.619 2.058 1.128.893 2.223 1.901 3.533 2.642a7.574 7.574 0 0 0 4.179.996c.698-.043 1.394-.163 2.017-.4.623-.236 1.203-.602 1.55-1.115.353-.513.37-1.174.105-1.704-.252-.538-.69-.965-1.162-1.27-.952-.62-2.123-.794-2.992-.363-.43.205-.782.529-.965.913-.193.38-.188.81-.059 1.164.126.357.372.637.651.794.28.164.592.189.853.137.536-.1.859-.442.984-.69.125-.259.101-.423.12-.42" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M44.177 126.967a.91.91 0 0 0-.91.908.91.91 0 0 0 1.82 0 .91.91 0 0 0-.91-.908" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M72.95 126.967a.91.91 0 0 0-.911.908.91.91 0 0 0 1.82 0 .91.91 0 0 0-.91-.908" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M16.827 126.967a.91.91 0 1 0 0 1.819.91.91 0 0 0 0-1.819" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M38.686 25.715c-.018.002.005-.162-.12-.421-.126-.248-.448-.59-.984-.69a1.219 1.219 0 0 0-.852.137c-.28.156-.527.437-.652.794-.128.353-.133.783.058 1.163.185.385.536.71.967.914.867.43 2.04.256 2.99-.363.473-.306.912-.732 1.163-1.27a1.687 1.687 0 0 0-.105-1.704c-.348-.513-.926-.879-1.549-1.116-.625-.236-1.32-.356-2.02-.399a7.573 7.573 0 0 0-4.178.996c-1.308.74-2.405 1.75-3.533 2.642-1.121.895-2.314 1.686-3.618 2.058-1.291.36-2.66.299-3.74-.27-.533-.277-.991-.695-1.259-1.195a3.032 3.032 0 0 1-.394-1.553c.017-.516.178-1.009.46-1.384a1.935 1.935 0 0 1 1.08-.724 2.478 2.478 0 0 1 1.987.406c.48.324.674.772.714 1.062a.934.934 0 0 1 .002.338c-.009.076-.016.113-.021.112a.393.393 0 0 1-.008-.114 1.11 1.11 0 0 0-.03-.325c-.059-.275-.257-.685-.721-.98a2.379 2.379 0 0 0-1.882-.34c-.367.093-.715.329-.97.675-.253.348-.394.8-.404 1.278-.02.958.525 2.03 1.56 2.53 1.011.522 2.319.576 3.553.224 1.244-.362 2.404-1.132 3.513-2.023 1.116-.886 2.22-1.908 3.567-2.672a7.833 7.833 0 0 1 4.339-1.027c.729.047 1.438.17 2.103.424.657.255 1.28.642 1.674 1.228.192.294.31.636.325.983.013.345-.068.684-.212.979-.285.596-.758 1.044-1.266 1.366-1.006.644-2.267.827-3.21.345-.465-.229-.845-.589-1.044-1.02a1.646 1.646 0 0 1-.044-1.3c.145-.39.423-.694.738-.86.312-.174.664-.192.941-.127.573.127.9.506 1.015.776.114.284.068.447.068.447" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M64.089 25.442s.045.163-.068.445c-.115.272-.44.65-1.015.777a1.333 1.333 0 0 1-.941-.126 1.605 1.605 0 0 1-.739-.86c-.15-.384-.165-.87.045-1.3.199-.433.58-.792 1.044-1.021.943-.482 2.204-.299 3.21.345.507.323.98.77 1.266 1.366.144.296.225.634.212.98a1.969 1.969 0 0 1-.325.983c-.395.586-1.018.973-1.673 1.227-.665.254-1.375.377-2.105.425a7.836 7.836 0 0 1-4.338-1.028c-1.347-.763-2.451-1.785-3.566-2.672-1.11-.89-2.27-1.66-3.514-2.023-1.234-.351-2.542-.298-3.552.225-1.035.5-1.58 1.572-1.56 2.53.01.478.15.93.403 1.276.256.347.603.584.97.677a2.379 2.379 0 0 0 1.882-.34c.465-.296.662-.706.72-.98.035-.141.034-.25.03-.325.002-.075.005-.114.009-.115.005 0 .013.037.022.113a.982.982 0 0 1-.002.337c-.04.29-.236.739-.714 1.063a2.48 2.48 0 0 1-1.987.405 1.934 1.934 0 0 1-1.08-.724c-.283-.375-.443-.867-.461-1.384a3.032 3.032 0 0 1 .395-1.553c.267-.5.726-.917 1.259-1.195 1.079-.568 2.448-.629 3.739-.27 1.304.372 2.497 1.164 3.619 2.059 1.128.892 2.223 1.901 3.533 2.641a7.574 7.574 0 0 0 4.179.996c.698-.042 1.394-.162 2.017-.399.623-.237 1.203-.602 1.55-1.115a1.69 1.69 0 0 0 .105-1.704c-.252-.538-.69-.965-1.162-1.27-.952-.62-2.123-.794-2.992-.364-.43.205-.782.53-.965.914-.193.38-.188.81-.059 1.164.126.357.372.637.651.794.28.163.592.188.853.137.536-.1.859-.443.984-.69.125-.26.101-.424.12-.421" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M44.177 24.418a.91.91 0 0 0-.91.907.91.91 0 0 0 1.82 0 .91.91 0 0 0-.91-.907" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M72.95 24.418a.91.91 0 0 0-.911.907.91.91 0 0 0 1.82 0 .909.909 0 0 0-.91-.907" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M16.827 24.418a.909.909 0 1 0-.002 1.817.909.909 0 0 0 .002-1.817" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M76.602 122.121s-.005-.15-.008-.437l-.008-1.272-.015-4.937-.036-18.58c-.016-15.923-.04-38.51-.066-65.193l.133.133c-19.222.005-40.774.01-63.472.014h-.007l.147-.147-.029 90.42-.118-.119 46.176.062 12.788.03 3.358.014c.76.004 1.157.012 1.157.012s-.38.01-1.132.013l-3.335.013-12.763.03c-11.059.016-26.94.036-46.249.062h-.118v-.118l-.028-90.419v-.146h.153l63.472.013h.134v.133l-.067 65.28-.035 18.55-.016 4.91-.008 1.259c-.002.28-.008.42-.008.42" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M89.503 19.024c.025.063-.972.355-2.328 1.29-1.36.925-3.039 2.483-4.678 4.395-1.656 1.9-3.03 3.731-4.079 5.015a28.182 28.182 0 0 1-1.281 1.491c-.33.329-.52.501-.535.487-.014-.015.148-.215.45-.563.289-.36.705-.882 1.204-1.543 1.006-1.313 2.353-3.168 4.02-5.08 1.65-1.923 3.374-3.48 4.786-4.373.34-.242.68-.41.975-.56l.412-.21c.13-.055.255-.095.364-.135.44-.157.684-.233.69-.214" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M89.809 135.26c-.016.013-.191-.18-.492-.54l-1.277-1.515a82.161 82.161 0 0 0-4.43-4.797 82.335 82.335 0 0 0-4.813-4.415c-.607-.508-1.115-.935-1.52-1.272-.36-.3-.553-.474-.54-.49.012-.016.229.127.61.4.384.27.925.68 1.582 1.202a60.063 60.063 0 0 1 9.271 9.24c.524.656.936 1.196 1.208 1.578.273.381.417.597.4.61" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M.002 135.092c-.017-.011.113-.234.36-.628a27.75 27.75 0 0 1 1.12-1.625 40.078 40.078 0 0 1 4.277-4.904 40.13 40.13 0 0 1 5.019-4.145 27.69 27.69 0 0 1 1.654-1.074c.401-.239.627-.361.638-.344.01.017-.195.173-.575.44-.382.263-.93.653-1.596 1.146a48.91 48.91 0 0 0-4.936 4.186 49.09 49.09 0 0 0-4.317 4.82c-.511.654-.916 1.19-1.19 1.565-.276.373-.437.574-.454.563" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M.223 19.024c.014-.014.204.156.534.475l1.396 1.35c1.179 1.137 2.839 2.675 4.681 4.368 1.843 1.695 3.486 3.26 4.63 4.439a41.56 41.56 0 0 1 1.332 1.418c.305.343.467.539.452.552-.015.014-.205-.155-.535-.474-.372-.36-.839-.811-1.394-1.35-1.18-1.137-2.84-2.676-4.684-4.37-1.842-1.693-3.484-3.26-4.628-4.437a40.84 40.84 0 0 1-1.332-1.418c-.305-.343-.466-.539-.452-.553" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M85.992 21.693c.08 0 .147 24.545.147 54.815 0 30.28-.067 54.819-.147 54.819-.08 0-.147-24.539-.147-54.82 0-30.27.066-54.814.147-54.814" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M84.729 21.44c0 .081-18.324.147-40.922.147-22.605 0-40.926-.066-40.926-.147 0-.08 18.321-.146 40.926-.146 22.598 0 40.922.065 40.922.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M3.135 129.559c-.08 0-.147-24.148-.147-53.93 0-29.792.066-53.936.147-53.936.08 0 .146 24.144.146 53.936 0 29.782-.066 53.93-.146 53.93" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M85.992 131.579c0 .08-18.097.147-40.416.147-22.327 0-40.42-.067-40.42-.147 0-.08 18.093-.147 40.42-.147 22.319 0 40.416.066 40.416.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.105 124.111s-.005-.157-.008-.456l-.009-1.332-.02-5.165-.052-19.457-.122-68.386.131.132-68.663-.245.147-.147v.103l.279 95.145-.12-.12 49.761-.076 13.801-.008 3.625.002c.821.003 1.25.01 1.25.01s-.412.01-1.224.016l-3.603.024-13.774.07-49.834.2-.12.002v-.12l-.334-95.144v-.103l-.001-.147h.148l68.664.273h.133v.133l-.01 68.472-.02 19.427-.01 5.14-.008 1.317c-.002.294-.007.44-.007.44" />
                                                </g>
                                                <g clip-path="url(#c4o3b)" opacity=".2">
                                                    <g opacity=".2">
                                                        <g opacity=".2">
                                                            <g opacity=".2" />
                                                            <g clip-path="url(#c4o3c)" opacity=".2">
                                                                <path fill="#e0e0e0" d="M13.1 34.598c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M16.03 124.287c-.085.01-.169-.478-.146-1.061.023-.585.07-1.046.146-1.054.086-.009.17.478.146 1.062-.022.584-.07 1.045-.146 1.053" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.8 124.316c-.085.009-.168-.478-.146-1.062.023-.584.07-1.045.147-1.053.086-.01.169.478.146 1.061-.023.585-.07 1.046-.146 1.054" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M18.558 124.193c-.08.002-.162-.453-.181-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.182 1.015.02.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M20.873 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.111-1.024.08-.003.162.45.182 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M23.187 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.082-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M25.502 124.193c-.081.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M27.816 124.193c-.08.002-.162-.453-.181-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.182 1.015.02.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M30.131 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.082-.003.163.45.183 1.015.02.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M32.446 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.082-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M34.76 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M37.074 124.193c-.08.002-.162-.453-.181-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.182 1.015.02.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M39.39 124.193c-.081.002-.163-.453-.183-1.016-.02-.563.03-1.022.11-1.024.082-.003.163.45.183 1.015.02.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M41.704 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.082-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M44.019 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M46.333 124.193c-.08.002-.163-.453-.182-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.182 1.015.021.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M48.647 124.193c-.08.002-.162-.453-.181-1.016-.02-.563.029-1.022.11-1.024.081-.003.163.45.182 1.015.02.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M50.962 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.082-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M53.277 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.111-1.024.08-.003.162.45.182 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M55.59 124.193c-.08.002-.161-.453-.181-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M57.905 124.193c-.08.002-.162-.453-.181-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.182 1.015.02.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M60.22 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.111-1.024.08-.003.162.45.182 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M62.535 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.082-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M64.85 124.193c-.081.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M67.164 124.193c-.081.002-.163-.453-.182-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.182 1.015.02.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M69.478 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.082-.003.163.45.183 1.015.02.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M71.793 124.193c-.08.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.082-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M74.108 124.193c-.081.002-.162-.453-.182-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.183 1.015.02.563-.03 1.022-.111 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M76.422 124.193c-.08.002-.162-.453-.181-1.016-.02-.563.03-1.022.11-1.024.081-.003.163.45.182 1.015.02.563-.03 1.022-.11 1.025" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 121.507c0 .08-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.067 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 118.93c0 .08-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.067 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 116.354c0 .08-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.067 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 113.777c0 .082-.547.147-1.22.147-.676 0-1.222-.065-1.222-.147 0-.08.546-.146 1.221-.146.674 0 1.221.066 1.221.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 111.2c0 .082-.547.148-1.22.148-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 108.625c0 .08-.547.147-1.22.147-.676 0-1.222-.067-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 106.048c0 .08-.547.147-1.22.147-.676 0-1.222-.067-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 103.472c0 .08-.547.147-1.22.147-.676 0-1.222-.067-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 100.896c0 .08-.547.146-1.22.146-.676 0-1.222-.066-1.222-.146 0-.081.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 98.319c0 .08-.547.146-1.22.146-.676 0-1.222-.066-1.222-.146 0-.081.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 95.742c0 .081-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.146 1.221-.146.674 0 1.221.066 1.221.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 93.165c0 .082-.547.147-1.22.147-.676 0-1.222-.065-1.222-.147 0-.08.546-.145 1.221-.145.674 0 1.221.065 1.221.145" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 90.59c0 .08-.547.146-1.22.146-.676 0-1.222-.065-1.222-.147 0-.08.546-.146 1.221-.146.674 0 1.221.066 1.221.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 88.013c0 .08-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.067 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 85.436c0 .08-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.067 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 82.86c0 .08-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.067 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 80.283c0 .082-.547.147-1.22.147-.676 0-1.222-.065-1.222-.147 0-.08.546-.146 1.221-.146.674 0 1.221.066 1.221.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 77.707c0 .08-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 75.13c0 .081-.547.148-1.22.148-.676 0-1.222-.067-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 72.554c0 .08-.547.147-1.22.147-.676 0-1.222-.067-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 69.978c0 .08-.547.147-1.22.147-.676 0-1.222-.067-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 67.402c0 .08-.547.146-1.22.146-.676 0-1.222-.066-1.222-.146 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 64.825c0 .08-.547.146-1.22.146-.676 0-1.222-.066-1.222-.146 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 62.248c0 .081-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.146 1.221-.146.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 59.671c0 .082-.547.147-1.22.147-.676 0-1.222-.065-1.222-.147 0-.08.546-.145 1.221-.145.674 0 1.221.065 1.221.145" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 57.095c0 .082-.547.147-1.22.147-.676 0-1.222-.065-1.222-.147 0-.08.546-.146 1.221-.146.674 0 1.221.066 1.221.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 54.52c0 .08-.547.146-1.22.146-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.067 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 51.942c0 .08-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.067 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 49.366c0 .08-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.067 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 46.79c0 .08-.547.146-1.22.146-.676 0-1.222-.065-1.222-.147 0-.08.546-.146 1.221-.146.674 0 1.221.066 1.221.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 44.213c0 .08-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 41.637c0 .08-.547.147-1.22.147-.676 0-1.222-.067-1.222-.147 0-.08.546-.146 1.221-.146.674 0 1.221.065 1.221.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 39.06c0 .08-.547.147-1.22.147-.676 0-1.222-.067-1.222-.147 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 36.484c0 .081-.547.147-1.22.147-.676 0-1.222-.066-1.222-.147 0-.08.546-.146 1.221-.146.674 0 1.221.065 1.221.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 33.908c0 .08-.547.146-1.22.146-.676 0-1.222-.066-1.222-.146 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M79.025 31.33c0 .081-.547.147-1.22.147-.676 0-1.222-.066-1.222-.146 0-.08.546-.147 1.221-.147.674 0 1.221.066 1.221.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M76.236 31.7c-.08 0-.147-.54-.147-1.207s.067-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M73.78 31.7c-.08 0-.146-.54-.146-1.207s.066-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.067 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M71.327 31.7c-.081 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .146.539.146 1.206 0 .668-.066 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M68.872 31.7c-.08 0-.147-.54-.147-1.207s.067-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M66.418 31.7c-.082 0-.148-.54-.148-1.207s.066-1.206.148-1.206c.08 0 .146.539.146 1.206 0 .668-.067 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M63.962 31.7c-.08 0-.146-.54-.146-1.207s.066-1.206.146-1.206c.081 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M61.508 31.7c-.08 0-.147-.54-.147-1.207s.067-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M59.054 31.7c-.08 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.067 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M56.598 31.7c-.08 0-.146-.54-.146-1.207s.066-1.206.146-1.206c.081 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M54.144 31.7c-.08 0-.147-.54-.147-1.207s.067-1.206.147-1.206c.08 0 .146.539.146 1.206 0 .668-.065 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M51.69 31.7c-.08 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .146.539.146 1.206 0 .668-.066 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M49.235 31.7c-.08 0-.147-.54-.147-1.207s.067-1.206.147-1.206c.08 0 .146.539.146 1.206 0 .668-.066 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M46.78 31.7c-.08 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M44.326 31.7c-.08 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .146.539.146 1.206 0 .668-.066 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M41.871 31.7c-.08 0-.147-.54-.147-1.207s.067-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M39.416 31.7c-.08 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M36.962 31.7c-.081 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .146.539.146 1.206 0 .668-.066 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M34.507 31.7c-.08 0-.147-.54-.147-1.207s.067-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M32.052 31.7c-.08 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M29.598 31.7c-.081 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .146.539.146 1.206 0 .668-.066 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M27.143 31.7c-.08 0-.147-.54-.147-1.207s.067-1.206.147-1.206c.08 0 .146.539.146 1.206 0 .668-.065 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M24.689 31.7c-.08 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.067 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M22.234 31.7c-.081 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .146.539.146 1.206 0 .668-.066 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M19.78 31.7c-.081 0-.148-.54-.148-1.207s.067-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.066 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M17.325 31.7c-.08 0-.147-.54-.147-1.207s.066-1.206.147-1.206c.08 0 .147.539.147 1.206 0 .668-.067 1.207-.147 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M14.87 31.7c-.081 0-.147-.54-.147-1.207s.066-1.206.146-1.206c.081 0 .147.539.147 1.206 0 .668-.066 1.207-.146 1.207" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 32.546c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.067 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 36.65c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.067 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 38.703c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 40.754c0 .082-.621.147-1.388.147-.768 0-1.389-.065-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 42.807c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 44.86c0 .08-.621.146-1.388.146-.768 0-1.389-.066-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.067 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 46.912c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 48.963c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 51.016c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 53.068c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.067 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 55.12c0 .081-.621.148-1.388.148-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 57.172c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 59.225c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 61.277c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.067 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 63.329c0 .081-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.065 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 65.381c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 67.434c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.065 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 69.486c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 71.538c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 73.59c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 75.643c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 77.695c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 79.747c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 81.8c0 .08-.621.146-1.388.146-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 83.852c0 .08-.621.147-1.388.147-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 85.903c0 .082-.621.147-1.388.147-.768 0-1.389-.065-1.389-.147 0-.08.621-.145 1.389-.145.767 0 1.388.065 1.388.145" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 87.956c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 90.008c0 .081-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 92.06c0 .081-.621.148-1.388.148-.768 0-1.389-.067-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 94.112c0 .081-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 96.165c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 98.217c0 .081-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 100.269c0 .081-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.065 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 102.322c0 .08-.621.146-1.388.146-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 104.374c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.065 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 106.426c0 .081-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 108.478c0 .081-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.065 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 110.53c0 .081-.621.147-1.388.147-.768 0-1.389-.066-1.389-.146 0-.081.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 112.583c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.065 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 114.635c0 .081-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.066 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 116.687c0 .08-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.147 1.389-.147.767 0 1.388.066 1.388.147" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 118.74c0 .08-.621.146-1.388.146-.768 0-1.389-.066-1.389-.146 0-.081.621-.146 1.389-.146.767 0 1.388.065 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M13.1 120.792c0 .081-.621.147-1.388.147-.768 0-1.389-.066-1.389-.147 0-.08.621-.146 1.389-.146.767 0 1.388.065 1.388.146" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#fff" d="M13.188 122.172V31.705h63.048v90.467z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#f5f5f5" d="M13.05 41.854c10.7 12.733 23.315 26.103 33.572 39.196L13.1 90.008z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#fafafa" d="M13.15 88.497l.038 33.676 63.407-.489-.24-46.852A2546.48 2546.48 0 0 0 13.15 88.497" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M123.98 66.803V.718h63.395v66.085z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#455a64" d="M119.686 66.803V.718h63.395v66.085z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#f5f5f5" d="M119.666 66.822V.698H183.1v66.124z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#fff" d="M128.208 57.92V9.603h46.351V57.92z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M128.208 58.241c.037.044-.404.549-1.144 1.33-.74.782-1.78 1.839-2.947 2.987a132.04 132.04 0 0 1-3.027 2.899c-.791.725-1.3 1.155-1.34 1.115-.04-.04.397-.543 1.138-1.324a127.89 127.89 0 0 1 2.953-2.993 130.194 130.194 0 0 1 3.033-2.904c.79-.726 1.297-1.153 1.334-1.11" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M174.56 58.122c.042-.037.548.404 1.33 1.144a129 129 0 0 1 2.986 2.946 131.48 131.48 0 0 1 2.899 3.029c.726.79 1.155 1.299 1.115 1.339-.04.04-.543-.398-1.324-1.138-.781-.74-1.841-1.783-2.993-2.953a130.173 130.173 0 0 1-2.904-3.033c-.726-.79-1.153-1.297-1.11-1.334" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M174.433 9.73c-.037-.042.404-.548 1.144-1.33.74-.78 1.78-1.838 2.946-2.986a131.767 131.767 0 0 1 3.028-2.899c.791-.726 1.3-1.155 1.34-1.115.04.04-.398.543-1.138 1.324-.74.781-1.783 1.841-2.953 2.993a130.213 130.213 0 0 1-3.033 2.904c-.79.726-1.297 1.153-1.334 1.11" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M128.08 9.85c-.042.037-.548-.404-1.33-1.144-.78-.74-1.838-1.78-2.986-2.946a127.915 127.915 0 0 1-2.899-3.029c-.726-.79-1.155-1.299-1.115-1.339.04-.04.542.397 1.324 1.138.781.74 1.841 1.783 2.993 2.953a130.24 130.24 0 0 1 2.904 3.033c.726.79 1.153 1.297 1.11 1.334" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M174.433 57.92a1.996 1.996 0 0 1-.01-.235 949.05 949.05 0 0 1-.01-.675l-.021-2.608-.047-9.847-.091-34.952.179.178-46.22.027h-.004l.205-.205c-.011 17.734-.02 34.324-.03 48.317l-.175-.177 33.469.09 9.4.046 2.488.021.643.01c.145.004.22.006.224.01a1.48 1.48 0 0 1-.204.01l-.624.01-2.454.02-9.36.046-33.582.09h-.177v-.176l-.03-48.317v-.206h.21l46.22.027h.18v.179l-.091 35.067-.047 9.806-.02 2.574-.011.655a1.642 1.642 0 0 1-.01.215" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#f5f5f5" d="M142.838 46.855c-3.497-3.503-3.708-9.755-.455-13.487 1.288-1.479 3.001-2.557 4.194-4.114 2.583-3.37 2.548-8.676 6.143-10.934 2.624-1.647 6.391-.707 8.306 1.728 1.916 2.435 2.075 5.971.832 8.809-.918 2.094-2.514 3.874-3.17 6.066-.669 2.24-.286 4.695-.982 6.928-.84 2.697-3.693 4.401-6.342 5.382-2.648.981-6.053.748-8.526-.378" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M155.876 24.597c.026.01-.135.464-.449 1.277-.31.814-.798 1.976-1.437 3.395-1.277 2.841-3.226 6.688-5.73 10.733-2.509 4.044-5.086 7.502-7.062 9.91a65.388 65.388 0 0 1-2.401 2.798c-.587.643-.922.99-.944.97-.022-.02.272-.401.82-1.075.554-.67 1.34-1.653 2.295-2.877a115.05 115.05 0 0 0 6.938-9.945 114.845 114.845 0 0 0 5.816-10.638c.672-1.4 1.201-2.541 1.556-3.335.36-.79.57-1.224.598-1.213" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M146.287 32.97c.053-.006.19.918.372 2.443s.41 3.651.644 6.052l-.31-.158 1-.586a337.922 337.922 0 0 1 5.963-3.407c1.536-.854 2.501-1.357 2.53-1.307.03.05-.883.642-2.382 1.56-1.5.92-3.585 2.162-5.901 3.515l-1.001.582-.28.163-.03-.323c-.223-2.401-.4-4.532-.509-6.065-.11-1.531-.149-2.464-.096-2.47" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M158.462 29.394c.025.052-.574.383-1.562.875a134.421 134.421 0 0 1-4.37 2.063l-.248.113-.043-.27a121.653 121.653 0 0 1-.558-3.916c-.122-.995-.17-1.606-.115-1.615.053-.008.2.587.393 1.57.196.984.439 2.354.69 3.896l-.291-.155.476-.219c1.53-.699 2.925-1.311 3.944-1.735 1.018-.424 1.66-.66 1.684-.607" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#ebebeb" d="M253.984 401.214v-43.65h9.25v43.65z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#ebebeb" d="M332.583 401.214v-43.65h9.249v43.65z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#ebebeb" d="M238.684 313.481v-10.794H355.37v10.794z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#ebebeb" d="M350.72 358.112l-104.933.227v-44.857h104.934z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M355.37 313.481c0 .116-26.123.21-58.34.21-32.228 0-58.346-.094-58.346-.21 0-.116 26.118-.21 58.345-.21 32.218 0 58.34.094 58.34.21" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M350.336 358.339c0 .116-23.32.21-52.08.21-28.768 0-52.083-.094-52.083-.21 0-.117 23.315-.21 52.083-.21 28.76 0 52.08.093 52.08.21" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M342.068 349.249s-.009-.179-.014-.516l-.014-1.489-.034-5.74-.076-21.364.138.138-87.622.072h-.006l.21-.21-.007 29.109-.203-.203 62.674.094 18.314.057 4.92.026 1.278.013c.288.005.442.013.442.013s-.136.009-.417.013l-1.253.013-4.876.026-18.269.057-62.813.094h-.203v-.203l-.007-29.109v-.21h.216c35.098.03 66.578.054 87.622.072h.14l-.002.138-.075 21.446-.034 5.71-.014 1.465c-.006.328-.015.488-.015.488" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M257.913 345.43c.085.08-.596.948-1.522 1.941-.924.993-1.743 1.734-1.828 1.654-.084-.079.596-.947 1.521-1.94.925-.993 1.744-1.733 1.83-1.655" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M257.913 323.96c-.086.077-.933-.712-1.891-1.765-.959-1.052-1.667-1.969-1.581-2.047.086-.079.933.712 1.891 1.764.959 1.053 1.667 1.97 1.581 2.048" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M342.224 320.231c.09.086-.748 1.024-1.908 2.022-1.16.997-2.106 1.778-2.184 1.705-.09-.086.748-1.024 1.908-2.021 1.158-.998 2.106-1.779 2.184-1.706" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M342.07 349.252c-.08.083-1.027-.704-2.114-1.758-1.088-1.055-1.903-1.977-1.823-2.06.081-.083 1.028.705 2.115 1.758 1.086 1.054 1.903 1.976 1.822 2.06" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M338.132 345.432s-.008-.131-.013-.377l-.013-1.092-.032-4.213-.07-15.792.128.128-80.216.082h-.005l.21-.21-.005 21.474-.205-.205 57.242.093 16.848.059 4.54.027 1.18.013c.267.004.41.013.41.013s-.125.01-.383.014c-.274.002-.657.007-1.156.013l-4.495.027-16.8.058-57.386.093h-.205v-.205l-.004-21.474v-.21h.214l80.216.082h.129l-.001.128-.071 15.868-.031 4.185-.014 1.068c-.004.239-.012.353-.012.353" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M305.97 332.694c-.66-.441-1.397-.736-2.154-.98a6.93 6.93 0 0 0-2.13-.33h-5.905c-1.739 0-3.444.618-4.703 1.818-.313.298-.56.592-.705.852-.506.908-.529 2.175.23 2.886.76.712 2.31.366 2.438-.667-.037 1.364 1.358 2.506 2.719 2.414 1.361-.092 2.52-1.21 2.904-2.519-.015 1.158.975 2.24 2.13 2.327 1.155.088 2.297-.831 2.457-1.979.729.95 1.807 1.836 3.052 1.433.71-.23 1.234-.854 1.413-1.579.37-1.496-.55-2.875-1.746-3.676" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#ebebeb" d="M296.834 331.356c.061.113-1.361.73-2.425 2.22-1.092 1.471-1.24 3.014-1.367 2.991-.05-.003-.087-.392.033-1.01.117-.614.428-1.446.995-2.227.568-.78 1.265-1.332 1.814-1.632.55-.305.932-.389.95-.342" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#ebebeb" d="M299.096 331.602c.115.018.098 1.069-.036 2.347s-.336 2.31-.453 2.303c-.115-.006-.099-1.056.036-2.347.135-1.29.338-2.32.453-2.303" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#ebebeb" d="M301.944 331.534c.027-.043.335.08.684.469.354.381.697 1.04.83 1.816s.076 1.478.012 1.971c-.068.494-.149.792-.206.789-.059-.005-.082-.314-.09-.807-.01-.49-.006-1.164-.128-1.88-.123-.712-.39-1.316-.651-1.708-.26-.396-.49-.598-.45-.65" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#ebebeb" d="M262.217 380.684v-8.422h71.9v8.422z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M316.039 291.758v10.845h-46.634a5.422 5.422 0 0 1 0-10.845" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#ebebeb" d="M316.039 300.33h-15.773a2.731 2.731 0 0 1-2.732-2.731v-.835a2.732 2.732 0 0 1 2.732-2.732h15.773z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#ebebeb" d="M316.039 280.914v10.845h-46.634a5.422 5.422 0 0 1 0-10.845z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#f5f5f5" d="M316.039 289.485h-15.773a2.732 2.732 0 0 1-2.732-2.731v-.835a2.731 2.731 0 0 1 2.732-2.731h15.773z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M282.36 263.519l-7.406 17.395h4.767l3.29-9.291z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#f5f5f5" d="M305.102 247.776l2.86 33.138h-24.205l-2.66-33.138z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#fafafa" d="M302.737 250.405l2.506 27.756-18.17.239-2.454-28.156z" />
                                                </g>
                                                <g clip-path="url(#c4o3b)">
                                                    <path fill="#e0e0e0" d="M298.882 254.247l1.425 19.1h-9.692l-1.71-19.1z" />
                                                </g>
                                            </g>
                                        </g>
                                        <g clip-path="url(#c4o3a)">
                                            <g>
                                                <g />
                                                <g clip-path="url(#c4o3d)">
                                                    <path fill="#263238" d="M393.178 401.7c0 .128-84.153.232-187.936.232-103.821 0-187.956-.104-187.956-.232 0-.13 84.135-.233 187.956-.233 103.783 0 187.936.104 187.936.233" />
                                                </g>
                                            </g>
                                        </g>
                                        <g clip-path="url(#c4o3a)">
                                            <g>
                                                <g />
                                                <g clip-path="url(#c4o3e)">
                                                    <path fill="#dbdbdb" d="M391.275 198.707c-10.577 5.478-18.688 14.912-24.52 25.299-5.832 10.386-9.59 21.783-13.313 33.099l-3.259 58.356c12.308-20.938 22.186-45.55 24.855-69.69l-8.19-.73c5.491-.838 10.1-4.817 13.033-9.535s4.443-10.158 5.916-15.514l-9.992 1.486c7.825-5.223 13.497-13.572 15.47-22.772" />
                                                </g>
                                                <g clip-path="url(#c4o3e)">
                                                    <path fill="#d3d3d3" d="M348.362 329.134s-26.714-31.973-26.405-62.496h10.79s-11.72-7.708-10.793-12.025c.928-4.316 1.237-20.656 1.237-20.656l9.865 2.466s-7.4-3.7-8.324-9.557c-.925-5.859 2.158-32.99 2.158-32.99s12.024 12.64 15.724 25.59c3.7 12.95 13.41 28.056 10.559 67.52-2.85 39.465-4.811 42.148-4.811 42.148" />
                                                </g>
                                                <g clip-path="url(#c4o3e)">
                                                    <path fill="#d3d3d3" d="M361.905 332.152s28.941-19.28 35.37-43.887l-8.675-2.36s11.11-3.632 11.31-7.306c.198-3.673 3.525-16.878 3.525-16.878l-8.472-.175s6.759-1.356 8.784-5.863c2.025-4.507 5.482-26.995 5.482-26.995s-12.432 7.532-18.24 17.133c-5.808 9.601-16.92 19.623-23.262 51.975-6.341 32.351-5.822 34.356-5.822 34.356" />
                                                </g>
                                                <g clip-path="url(#c4o3e)">
                                                    <path fill="#263238" d="M334.187 221.754c.008-.002.04.11.094.332l.232.984.844 3.795c.369 1.648.8 3.667 1.265 6.02.474 2.35 1.027 5.024 1.569 7.994 1.142 5.929 2.348 13.017 3.59 20.902a744.843 744.843 0 0 1 3.475 25.735 745.317 745.317 0 0 1 2.49 25.855c.589 7.962 1.032 15.14 1.272 21.171.151 3.015.222 5.745.297 8.142.082 2.396.125 4.461.141 6.15.02 1.666.034 2.97.044 3.886v1.01c-.003.23-.009.345-.017.345-.008 0-.018-.116-.031-.343l-.046-1.01-.131-3.884c-.044-1.687-.113-3.75-.22-6.145-.1-2.395-.195-5.122-.367-8.135-.281-6.028-.759-13.198-1.372-21.153a808.625 808.625 0 0 0-2.524-25.835 809.659 809.659 0 0 0-3.436-25.725c-1.218-7.883-2.39-14.973-3.49-20.906-.52-2.971-1.05-5.649-1.5-8.004-.442-2.356-.845-4.38-1.187-6.034l-.758-3.81-.187-.995c-.04-.225-.055-.34-.047-.342" />
                                                </g>
                                                <g clip-path="url(#c4o3e)">
                                                    <path fill="#dbdbdb" d="M344.656 348.714s-24.446-27.738-32.036-44.505l5.73-2.448c-4.154.686-8.409-1.1-11.63-3.81-3.22-2.712-5.585-6.277-7.904-9.79l7.548-1.276c-6.864-1.926-12.912-6.611-16.493-12.776 8.908 1.465 16.967 6.358 23.608 12.473 5.377 4.952 9.932 10.702 14.304 16.575 2.134 2.866 4 5.918 5.556 9.134 4.108 8.492 11.331 26.236 11.317 36.423" />
                                                </g>
                                                <g clip-path="url(#c4o3e)">
                                                    <path fill="#263238" d="M397.66 244.832c.007.004-.032.1-.115.282l-.377.805-1.49 3.076a641.184 641.184 0 0 0-5.419 11.341c-2.256 4.803-4.85 10.565-7.638 17.003a660.064 660.064 0 0 0-8.636 21.123 658.241 658.241 0 0 0-7.823 21.445c-2.268 6.64-4.226 12.648-5.788 17.72-1.57 5.068-2.8 9.183-3.62 12.035l-.966 3.278-.263.85c-.061.19-.096.287-.104.285-.008-.002.012-.103.059-.298l.217-.862.883-3.303c.766-2.868 1.948-6.998 3.479-12.083 1.523-5.086 3.449-11.109 5.697-17.76a600.175 600.175 0 0 1 7.795-21.474 599.968 599.968 0 0 1 8.676-21.127c2.812-6.433 5.439-12.184 7.733-16.972 2.288-4.792 4.192-8.644 5.555-11.282l1.57-3.037.418-.785c.097-.176.15-.263.157-.26" />
                                                </g>
                                                <g clip-path="url(#c4o3e)">
                                                    <path fill="#263238" d="M346.73 360.6c-.016.002-.055-.174-.114-.51l-.235-1.473a56.34 56.34 0 0 0-.38-2.327c-.164-.904-.322-1.939-.567-3.07-.438-2.27-1.065-4.952-1.865-7.901a118.232 118.232 0 0 0-3.075-9.45 118.147 118.147 0 0 0-3.939-9.127c-1.349-2.743-2.651-5.17-3.824-7.164-.562-1.01-1.127-1.89-1.602-2.677-.47-.79-.9-1.456-1.253-1.997-.323-.513-.587-.93-.797-1.261-.177-.291-.265-.449-.251-.459.013-.009.126.131.33.405.228.32.516.72.87 1.214.377.527.828 1.18 1.32 1.958.497.775 1.085 1.646 1.667 2.65 1.213 1.978 2.55 4.398 3.926 7.142a108.727 108.727 0 0 1 3.989 9.151 108.826 108.826 0 0 1 3.054 9.502c.78 2.968 1.377 5.668 1.774 7.954.226 1.137.36 2.18.5 3.09.144.909.238 1.698.302 2.343l.15 1.486c.028.34.036.519.02.52" />
                                                </g>
                                                <g clip-path="url(#c4o3e)">
                                                    <path fill="#dbdbdb" d="M325.484 364.99v-10.915h53.503v10.914z" />
                                                </g>
                                                <g clip-path="url(#c4o3e)">
                                                    <path fill="#ebebeb" d="M330.582 364.99l5.787 36.71h32.33l5.395-36.71z" />
                                                </g>
                                                <g clip-path="url(#c4o3e)">
                                                    <path fill="#263238" d="M375.705 364.99c0 .128-10.121.232-22.605.232-12.486 0-22.605-.104-22.605-.233 0-.128 10.119-.232 22.605-.232 12.484 0 22.605.104 22.605.232" />
                                                </g>
                                            </g>
                                        </g>
                                        <g clip-path="url(#c4o3a)">
                                            <g>
                                                <g />
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M119.267 86.789c.871-4.368 3.96-6.694 8.072-8.407 4.11-1.713 9.06-1.243 12.776 1.215 2.483 1.644 4.51 4.138 7.38 4.927 4.73 1.3 9.918-2.519 14.488-.737 2.705 1.054 4.442 4.154 3.93 7.012-.513 2.857-3.22 5.16-6.122 5.208 3.09.902 4.312 5.144 2.728 7.945-1.584 2.802-5.138 4.056-8.334 3.676-3.196-.38-6.075-2.113-8.607-4.102-2.53-1.989-4.832-4.276-7.513-6.057-2.681-1.781-5.875-3.052-9.07-2.666-4.327.521-7.836 4.041-9.514 8.064-1.676 4.021-1.83 8.499-1.784 12.856.047 4.357.262 8.777-.75 13.015-.119.498-.312 1.059-.79 1.241-.69.264-1.34-.445-1.732-1.071a63.973 63.973 0 0 1-8.862-23.243c-.81-4.778-.984-9.343 1.392-13.566 2.378-4.224 8.864-7.65 12.312-5.31" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#ffbe9d" d="M112.205 107.493l.914 44.489c.171 8.307 4.342 16.9 17.464 16.031 11.33-1.613 11.625-9.557 11.57-19.41 0 0-.018.379 0 0 0 0 12.411-1.425 13.057-13.753.311-5.957-.046-18.28-.498-29.424-.486-11.969-10.096-21.552-22.064-22.03l-1.19-.047c-12.863.237-19.846 11.292-19.253 24.143" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#eb996e" d="M142.153 148.603s-7.794.146-15.87-5.389c0 0 3.498 9.72 15.85 9.1z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M150.344 117.822c-.004.931-.796 1.695-1.77 1.709-.97.013-1.756-.729-1.752-1.66.005-.932.797-1.698 1.768-1.711.972-.014 1.758.731 1.754 1.662" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M151.82 111.373c-.227.22-1.522-.82-3.418-.89-1.892-.098-3.321.82-3.518.581-.097-.107.142-.513.765-.93.614-.415 1.648-.801 2.828-.75 1.181.054 2.157.529 2.71.997.565.47.746.893.634.992" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M132.78 117.053c-.005.931-.798 1.695-1.77 1.709-.97.013-1.757-.729-1.752-1.66.004-.931.796-1.697 1.768-1.711.973-.013 1.758.731 1.753 1.662" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M133.177 110.983c-.23.22-1.526-.82-3.42-.891-1.892-.098-3.322.822-3.52.582-.096-.108.141-.513.767-.93.613-.415 1.647-.801 2.828-.75 1.18.054 2.156.529 2.709.996.563.47.746.894.636.993" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M139.493 125.313c-.004-.108 1.182-.265 3.101-.432.486-.03.948-.108 1.043-.436.128-.345-.054-.875-.266-1.447-.408-1.19-.835-2.436-1.285-3.743-1.777-5.327-3.044-9.698-2.829-9.768.216-.07 1.831 4.19 3.61 9.517.426 1.314.834 2.565 1.223 3.763.16.557.45 1.194.174 1.91-.144.356-.51.604-.823.675-.314.082-.587.077-.827.082-1.926.026-3.118-.012-3.12-.12" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M133.962 103.575c-.208.507-2.09.188-4.325.367-2.237.134-4.057.714-4.333.24-.123-.227.209-.699.953-1.17.739-.469 1.904-.896 3.245-.991 1.341-.092 2.556.168 3.352.53.803.361 1.199.782 1.108 1.024" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M151.343 105.86c-.351.417-1.638-.082-3.208-.166-1.566-.138-2.911.174-3.199-.289-.125-.224.1-.646.698-1.031.589-.383 1.56-.677 2.637-.6 1.077.076 1.997.503 2.526.967.537.464.701.915.546 1.119" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#ffbe9d" d="M112.848 116.666c-.208-.1-8.376-2.845-8.442 5.598-.069 8.442 8.422 6.768 8.438 6.527.018-.242.004-12.125.004-12.125" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#eb996e" d="M110.291 125.571c-.036-.027-.147.102-.397.214-.244.11-.66.182-1.1.013-.889-.334-1.628-1.756-1.658-3.278-.015-.768.152-1.499.429-2.102.263-.616.666-1.045 1.115-1.12a.75.75 0 0 1 .865.41c.112.236.056.405.101.42.023.02.183-.14.117-.49a.937.937 0 0 0-.328-.531c-.202-.167-.498-.253-.811-.222-.652.04-1.243.634-1.547 1.297a4.99 4.99 0 0 0-.529 2.35c.04 1.7.899 3.3 2.116 3.662.593.16 1.09-.015 1.347-.213.263-.206.309-.395.28-.41" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M155.319 93.945c-1-2.467-2.88-4.483-4.94-6.17-4.44-3.641-9.975-6.018-15.707-6.335-5.731-.317-11.624 1.506-15.929 5.304-3.444 3.039-5.782 7.22-6.966 11.66-1.184 4.438-1.256 9.124-.627 13.674.276 1.996.734 4.077 2.067 5.59.834.944 2.304 1.602 3.332.876.605-.428.85-1.195 1.059-1.906 1.882-6.442 3.763-13.375 1.63-19.738 1.695-2.037 3.652-3.919 6.021-5.106 2.37-1.188 5.204-1.622 7.703-.742 3.714 1.308 5.882 5.057 8.78 7.72 4.144 3.808 10.192 5.427 15.684 4.198z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#eb996e" d="M140.427 130.595c-.245.762-.494 1.535-.944 2.197-.45.66-1.135 1.206-1.93 1.297-.846.096-1.698-.352-2.217-1.026-.521-.675-.742-1.545-.76-2.396-.016-.77.275-1.71 1.032-1.851.316-.06.636.043.941.144l4.12 1.361" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M139.043 134.002c-.03-.124-.887.292-2.158-.123-.616-.202-1.303-.636-1.715-1.363a3.23 3.23 0 0 1-.227-2.62c.074-.226.193-.436.311-.624.149-.177.12-.167.294-.153.166.033.44.14.66.21l.676.224c.882.291 1.68.543 2.352.745 1.347.404 2.195.607 2.228.513.033-.093-.756-.466-2.058-.992a98.885 98.885 0 0 0-2.304-.89l-.667-.248c-.242-.08-.427-.173-.754-.253a.938.938 0 0 0-.593.057c-.206.1-.33.252-.42.38-.162.25-.305.506-.4.79a3.767 3.767 0 0 0 .334 3.201c.552.886 1.422 1.348 2.146 1.512a3.25 3.25 0 0 0 1.743-.047c.392-.132.57-.28.552-.319" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#455a64" d="M164.52 85.87c.02-.001.049.192.087.569.007.374.015.942-.175 1.642-.333 1.382-1.448 3.361-3.725 4.667-2.267 1.33-5.582 1.526-8.833.55-3.3-.935-6.435-3.026-9.75-4.97-3.296-1.943-6.781-3.43-10.1-3.295-3.31.093-6.08 1.6-7.985 3.186a17.653 17.653 0 0 0-3.855 4.5c-.713 1.217-1.004 1.95-1.056 1.927-.018-.007.045-.193.182-.543.124-.355.366-.853.689-1.49a16.757 16.757 0 0 1 3.79-4.69c1.918-1.662 4.757-3.266 8.219-3.394 3.472-.168 7.068 1.367 10.392 3.325 3.34 1.962 6.423 4.029 9.617 4.96 3.151.974 6.327.816 8.501-.404 2.2-1.204 3.326-3.068 3.709-4.386.403-1.348.221-2.156.293-2.154" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#455a64" d="M106.54 103.442c-.056-.013.072-.91.648-2.244.56-1.333 1.613-3.09 3.218-4.636a14.219 14.219 0 0 1 2.47-1.918c.82-.506 1.679-.841 2.441-.872.763-.035 1.363.2 1.704.44.345.244.456.457.431.476-.034.079-.712-.683-2.103-.529-1.35.15-3.012 1.344-4.562 2.796a16.708 16.708 0 0 0-3.248 4.408c-.65 1.256-.91 2.106-.998 2.08" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#455a64" d="M107.726 110.926c-.057-.018.144-.904.791-2.215.642-1.31 1.797-3.01 3.457-4.515 1.668-1.5 3.478-2.474 4.845-2.978 1.37-.51 2.273-.62 2.285-.562.023.09-.838.332-2.136.919a18.377 18.377 0 0 0-4.626 3.027 18.3 18.3 0 0 0-3.483 4.293c-.719 1.232-1.048 2.063-1.133 2.031" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#ffbe9d" d="M169.818 232.85l44.907 18.086-7.16 12.828-50.922-7.81z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#ed1c24" d="M169.909 180.58c.23 12.638-.175 43.068-.175 43.068l7.199 11.311-12.599 16.968-14.553 2.049-1.447 11.286s-25.495 11.413-45.894 4.494c-15.873-5.384-34.422 12.717-34.422 12.717s-1.694-2.955 1.057-28.487c2.624-24.334 7.211-64.496 7.211-64.496l14.671-36.693 22.034-3.822c9.227 15.689 27.68 15.777 29.162 6.242l14.649 6.1c4.268 1.775 7.932 4.82 10.254 8.814 1.57 2.7 2.773 6.156 2.853 10.45" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M157.21 184.43c.128.014-1.42 14.507-3.459 32.367-2.038 17.866-3.793 32.333-3.921 32.318-.128-.015 1.42-14.505 3.459-32.37 2.037-17.86 3.793-32.33 3.921-32.315" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M149.943 217.141c.07.109-7.129 4.86-16.076 10.613-8.95 5.755-16.26 10.33-16.33 10.222-.07-.109 7.127-4.859 16.077-10.614 8.948-5.752 16.259-10.33 16.329-10.22" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#aaa" d="M124.185 401.7h-8.462l-4.835-56.901h13.297z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#aaa" d="M58.265 401.7h-8.462l-4.834-56.901h13.296z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#aaa" d="M217.712 401.7h-8.463l-4.834-56.901h13.297z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#d3d3d3" d="M81.469 294.093L89.53 170.73H13.46c-5.789 0-10.157 5.252-9.103 10.943l30.6 165.246c9.736-.137 187.21 0 187.21 0v-52.827z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M194.324 328.744c0 .129-16.863.233-37.658.233-20.803 0-37.663-.104-37.663-.233s16.86-.233 37.663-.233c20.795 0 37.658.104 37.658.233" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#6f6f6f" d="M261.683 357.446l5.477 26.117s28.385 3.205 29.867 7.933l-50.258 12.437-10.202-40.343z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#e0e0e0" d="M251.08 385.231c-.907.507-1.309 1.767-.84 2.694.47.927 1.747 1.346 2.662.855.916-.49 1.445-1.988.875-2.857-.57-.868-2.097-1.279-2.868-.582" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#e0e0e0" d="M246.996 405l-.993-3.908 48.409-11.655s2.478.42 2.615 2.06z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M267.91 383.106c.053.247-1.146.663-2.158 1.75-1.041 1.062-1.401 2.28-1.65 2.238-.24.008-.236-1.55 1.013-2.845 1.237-1.306 2.793-1.38 2.796-1.143" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M273.722 383.982c.115.224-.844.904-1.422 2.148-.613 1.227-.546 2.402-.792 2.452-.221.095-.747-1.3 0-2.833.732-1.54 2.15-2 2.214-1.767" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M278.277 389.55c-.21.108-.855-1.034-.558-2.534.287-1.502 1.313-2.319 1.468-2.14.188.167-.379 1.073-.604 2.308-.254 1.23-.068 2.282-.306 2.366" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M266.002 377.293c-.047.248-1.257.189-2.62.626-1.374.41-2.338 1.142-2.518.964-.186-.142.644-1.312 2.257-1.804 1.61-.505 2.955-.01 2.881.214" />
                                                </g>
                                                <g clip-path="url(#c4o3f)" opacity=".3">
                                                    <g opacity=".3">
                                                        <g opacity=".3">
                                                            <g opacity=".3" />
                                                            <g clip-path="url(#c4o3g)" opacity=".3">
                                                                <path d="M260.892 356.913l5.476 26.117s28.386 3.205 29.868 7.933l-50.032 13.504-10.429-41.41z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M234.98 278.697l31.816 92.364-27.476 10.162-50.633-101.25-84.117-13.159 50.487-13.581 72.01 18.191a11.294 11.294 0 0 1 7.914 7.273" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#6f6f6f" d="M260.805 347.186l18.17 19.955s26.387-11.767 30.104-8.406l-37.428 36.62-29.587-29.93z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#e0e0e0" d="M265.816 376.843c-.53.907-.234 2.211.65 2.779.884.567 2.213.277 2.759-.62.547-.898.24-2.474-.703-2.94-.943-.464-2.484-.038-2.8.964" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#e0e0e0" d="M272.395 396.17l-2.87-2.898 36.218-34.99s2.376-.905 3.336.453z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M279.396 366.358c.172.189-.66 1.165-.984 2.633-.363 1.46-.052 2.705-.29 2.797-.204.129-1-1.23-.576-3 .407-1.774 1.725-2.637 1.85-2.43" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M284.91 364.14c.215.136-.272 1.22-.137 2.602.095 1.384.757 2.373.567 2.543-.143.197-1.318-.75-1.454-2.47-.15-1.717.85-2.845 1.024-2.675" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M291.737 366.657c-.128.201-1.276-.463-1.786-1.923-.521-1.457-.045-2.695.181-2.618.25.05.22 1.129.658 2.322.409 1.201 1.11 2.023.947 2.219" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M274.75 362.27c.087.24-.999.81-1.963 1.89-.986 1.061-1.45 2.194-1.7 2.13-.234-.028-.112-1.472 1.042-2.73 1.144-1.265 2.57-1.523 2.621-1.29" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M95.515 305.733l73.35-.31 81.401 75.8 25.306-23.566s-69.118-78.002-77.108-86.049c-7.989-8.047-84.93-13.41-84.93-13.41L67.281 278.29l1.049 5.248c2.587 12.948 13.981 22.249 27.184 22.194" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#455a64" d="M167.154 295.786c.128-.016.48 1.986.788 4.471.308 2.486.454 4.513.327 4.53-.128.016-.481-1.987-.79-4.473-.307-2.484-.453-4.512-.325-4.528" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#455a64" d="M267.118 348.253c.024.022-.302.4-.91 1.065-.608.665-1.503 1.612-2.62 2.77a316.257 316.257 0 0 1-8.935 8.86 315.244 315.244 0 0 1-9.272 8.51 147.787 147.787 0 0 1-2.89 2.488c-.693.577-1.085.884-1.107.86-.021-.025.33-.377.986-.995l2.79-2.597a853.89 853.89 0 0 0 9.17-8.602 831.3 831.3 0 0 0 9.023-8.756l2.725-2.665c.648-.625 1.017-.96 1.04-.938" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#455a64" d="M223.326 356.138s.17.137.487.421l1.401 1.273 5.368 4.938 19.795 18.333h-.224l25.275-23.6-.017.289c-10.663-12.433-23.435-26.051-36.817-40.535-5.917-6.395-11.687-12.644-17.203-18.733-5.512-6.091-10.78-12.017-15.586-17.845-2.393-2.907-4.77-5.738-7.6-7.89a19.81 19.81 0 0 0-4.509-2.625c-1.585-.668-3.226-1.123-4.854-1.49-3.266-.706-6.49-1.116-9.564-1.616l-8.853-1.377-26.712-4.183-7.26-1.16-1.885-.315c-.425-.072-.64-.123-.64-.123s.22.018.648.076l1.893.268 7.272 1.074c6.327.956 15.455 2.335 26.735 4.037l8.858 1.348c3.076.49 6.292.89 9.592 1.593 1.643.367 3.308.823 4.924 1.5a20.24 20.24 0 0 1 4.603 2.665c2.882 2.186 5.284 5.04 7.684 7.945 4.807 5.811 10.078 11.726 15.592 17.811 5.519 6.083 11.29 12.33 17.207 18.723 13.382 14.484 26.142 28.114 36.795 40.58l.13.153-.147.137-25.337 23.533-.112.105-.112-.105-19.695-18.44-5.308-5.003-1.369-1.307c-.306-.295-.455-.455-.455-.455" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#ffbe9d" d="M158.957 247.088l-22.126 7.457-40.742-16.57-21.749 20.223 58.113 10.429c1.961.32 3.97.176 5.865-.42l17.133-5.381s5.6 6.325 6.767 6.42c1.167.093 3.53-.069 2.406-2.157-1.124-2.087-4.003-5.727-4.003-5.727s7.867 6.49 8.76 5.622c.892-.868.535-2.876-.86-4.516-1.395-1.64-6.02-6.946-6.02-6.946s9.696 8.03 10.617 6.811c.92-1.218 1.378-3.138-2.506-6.862-2.551-2.448-6.48-5.938-8.544-7.757a3.17 3.17 0 0 0-3.11-.626" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#eb996e" d="M136.229 254.743c.093.093-.898 1.222-2.113 2.612-1.219 1.388-2.208 2.518-2.313 2.439-.1-.076.732-1.345 1.963-2.746 1.227-1.404 2.374-2.395 2.463-2.305" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#eb996e" d="M168.864 262.89c-.05.058-.812-.646-1.866-1.91-1.068-1.253-2.481-3.032-4.079-4.957-1.632-1.842-3-3.943-4.769-3.6a3.79 3.79 0 0 0-1.779.54c-.382.235-.564.416-.592.389-.019-.016.118-.243.49-.538.366-.294 1-.631 1.857-.72a3.891 3.891 0 0 1 1.396.117c.243.056.497.19.736.349.205.169.432.335.623.531.803.762 1.588 1.67 2.396 2.634 1.606 1.935 2.978 3.745 3.978 5.048l1.186 1.539c.277.365.448.548.423.578" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#eb996e" d="M153.165 257.214c-.018-.018.132-.223.514-.463.38-.234 1.016-.484 1.833-.469.411.011.844.062 1.316.256.463.212.848.59 1.17 1.01.327.42.608.89.917 1.346.305.44.683.906 1.034 1.38 2.88 3.787 5.023 7.025 4.828 7.144-.032.013-.162-.185-.421-.534l-1.106-1.473-3.673-4.856c-.356-.484-.712-.92-1.04-1.406-.316-.476-.583-.941-.881-1.341-.294-.402-.623-.735-.993-.92a3.438 3.438 0 0 0-1.164-.276c-1.535-.095-2.303.685-2.334.602" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#eb996e" d="M171.167 256.02c-.044.048-.727-.498-1.797-1.42a193.541 193.541 0 0 1-4.113-3.67l-2.227-2.062c-.673-.664-1.282-1.184-1.91-1.465-1.259-.586-2.163-.244-2.162-.315-.014-.028.186-.151.59-.216.401-.064 1.015-.044 1.702.227a5.2 5.2 0 0 1 1.044.581c.349.26.673.557 1.022.868l2.253 2.036c1.59 1.454 3.01 2.79 4.024 3.773 1.012.984 1.617 1.616 1.574 1.663" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#ed1c24" d="M72.28 258.75s-8.268-9.287-7.748-21.676c.52-12.389 4.074-48.248 5.655-58.088 1.564-9.732 8.982-23.26 20.77-26.189 8.62-2.142 10.4 23.937 10.4 23.937l-6.51 57.565 12.977 7.537-12.112 20.517z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M100.238 173.864c-.09.01-.196-1.26-.74-3.22-.265-.981-.682-2.12-1.234-3.342a24.784 24.784 0 0 0-2.2-3.758 24.732 24.732 0 0 0-2.884-3.266c-.989-.906-1.94-1.658-2.79-2.216-1.691-1.13-2.864-1.628-2.826-1.71.012-.03.311.079.843.3.268.107.592.25.95.448.36.195.783.397 1.212.685.887.532 1.878 1.27 2.902 2.177a22.97 22.97 0 0 1 2.97 3.308c.92 1.286 1.65 2.61 2.214 3.854.542 1.257.934 2.429 1.16 3.437.141.497.2.963.273 1.366.077.402.111.753.129 1.042.045.574.054.892.021.895" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M94.819 234.34c.03.065-.778.479-2.05 1.197a46.272 46.272 0 0 0-4.777 3.094 50.54 50.54 0 0 0-4.352 3.674c-1.063 1.002-1.705 1.644-1.757 1.596-.043-.038.513-.76 1.526-1.83a34.378 34.378 0 0 1 4.305-3.814 32.413 32.413 0 0 1 4.9-3.011c1.323-.65 2.181-.958 2.205-.906" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#e0e0e0" d="M180.75 221.218l-14.237 51.702h66.479l16.196-49.256a2.995 2.995 0 0 0-2.81-3.93l-62.708-.716a2.995 2.995 0 0 0-2.92 2.2" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M185.056 219.034c.124.034-3.102 12.126-7.204 27.004-4.103 14.883-7.53 26.917-7.653 26.883-.124-.035 3.1-12.124 7.204-27.007 4.102-14.878 7.529-26.914 7.653-26.88" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#fff" d="M210.75 245.168c-.765 1.585-.266 3.411 1.117 4.079 1.382.669 3.124-.075 3.89-1.66.766-1.586.265-3.412-1.117-4.08-1.383-.668-3.125.076-3.89 1.66" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#e0e0e0" d="M166.513 272.92h-44.485a3.806 3.806 0 0 1 3.806-3.806h42.329z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M64.532 237.075c.009 0 .018.143.027.42l.026 1.222c-.014.538.062 1.198.135 1.978.044.783.22 1.67.385 2.671a33.76 33.76 0 0 0 2.235 7.015c1.156 2.617 2.787 5.496 5.072 8.25l-.105-.057 23.439 3.559-.227.107 9.433-15.999c.9-1.522 1.79-3.032 2.671-4.523l.083.32-12.972-7.546-.121-.072.012-.14 2.942-32.574c.378-3.998.679-7.187.89-9.404.108-1.074.194-1.912.255-2.508l.075-.645c.02-.145.033-.219.039-.219.006.001.006.076 0 .222l-.039.65c-.043.596-.104 1.436-.184 2.513-.179 2.22-.438 5.411-.76 9.415l-2.776 32.59-.11-.211c4.09 2.371 8.454 4.9 12.983 7.527l.202.117-.119.201-2.669 4.524-9.45 15.99-.077.13-.15-.023-23.424-3.65-.068-.01-.039-.047c-4.596-5.685-6.503-11.478-7.237-15.465-.15-1.01-.313-1.905-.341-2.695-.057-.785-.118-1.449-.087-1.99l.025-1.226c.008-.275.017-.417.026-.417" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#dbdbdb" d="M31.228 253.233s78.621 9.95 81.426 12.707c2.466 2.42 5.608 66.277 6.31 65.966l-73.37-2.78z" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M96.089 346.73c-.128.01-1.765-18.407-3.656-41.132-1.891-22.733-3.32-41.164-3.192-41.175.13-.01 1.765 18.403 3.657 41.136 1.89 22.726 3.319 41.16 3.19 41.171" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M15.77 170.732c.007-.002.038.102.09.305l.219.907.8 3.494 2.859 12.872 9.257 42.503 2.617 12.122 1.24 5.764c.1.47.202.94.302 1.405.105.473.178.928.353 1.335a4.1 4.1 0 0 0 1.71 1.966c.377.222.787.385 1.208.482.414.09.88.132 1.319.194l2.63.345 5.03.66 9.026 1.195 13.067 1.76 3.55.502.92.143c.208.034.314.055.313.063-.001.008-.11.003-.318-.017l-.927-.095-3.561-.416-13.086-1.614-9.034-1.136-5.032-.639c-.865-.109-1.743-.22-2.632-.334-.447-.063-.884-.095-1.36-.196a4.69 4.69 0 0 1-1.33-.527 4.54 4.54 0 0 1-1.898-2.17c-.198-.462-.277-.952-.38-1.408l-.306-1.404-1.251-5.762-2.625-12.12-9.124-42.531-2.714-12.903-.714-3.514-.175-.916c-.037-.207-.052-.313-.044-.315" />
                                                </g>
                                                <g clip-path="url(#c4o3f)">
                                                    <path fill="#263238" d="M113.836 271.017c.128-.011 1.63 16.974 3.351 37.93 1.723 20.965 3.015 37.962 2.887 37.973-.128.01-1.628-16.97-3.351-37.935-1.722-20.957-3.015-37.958-2.887-37.968" />
                                                </g>
                                            </g>
                                        </g>
                                        <g clip-path="url(#c4o3a)">
                                            <path fill="#fff" d="M204.692 186.566V26.92h182.31v159.646z" />
                                        </g>
                                        <g clip-path="url(#c4o3a)">
                                            <path fill="#ebebeb" d="M205.137 186.566V100.17h181.866v86.397z" />
                                        </g>
                                        <g clip-path="url(#c4o3a)">
                                            <g>
                                                <g />
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#263238" d="M353.202 80.068c0 .13-24.951.233-55.722.233-30.781 0-55.727-.104-55.727-.233s24.946-.232 55.727-.232c30.77 0 55.722.103 55.722.232" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#263238" d="M385.954 44.192c0 .128-40.38.232-90.181.232-49.818 0-90.19-.104-90.19-.232 0-.13 40.372-.233 90.19-.233 49.8 0 90.181.104 90.181.233" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#263238" d="M217.328 35.23a2.766 2.766 0 1 1-5.532 0 2.766 2.766 0 0 1 5.532 0" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#263238" d="M226.584 35.23a2.765 2.765 0 1 1-5.531.002 2.765 2.765 0 0 1 5.53-.001" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#263238" d="M235.839 35.23a2.765 2.765 0 1 1-5.53.002 2.765 2.765 0 0 1 5.53-.001" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#ed1c24" d="M241.454 79.575a7.277 7.277 0 1 1-14.555 0 7.277 7.277 0 0 1 14.555 0" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#fff" d="M235.407 75.926v7.047h-1.63v-5.738h-1.41v-1.309z" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#ff725e" d="M307.464 79.82c-.065.006-.003-.944-.418-2.564a10.56 10.56 0 0 0-3.866-5.724c-1.183-.881-2.673-1.629-4.39-1.927-1.703-.288-3.626-.23-5.454.468-.92.321-1.807.805-2.622 1.417a9.749 9.749 0 0 0-2.19 2.204c-1.274 1.697-1.992 3.878-2.012 6.125.02 2.248.737 4.429 2.012 6.127a9.731 9.731 0 0 0 2.19 2.204 9.745 9.745 0 0 0 2.622 1.417c1.829.7 3.75.756 5.456.468 1.716-.298 3.205-1.045 4.39-1.926a10.56 10.56 0 0 0 3.864-5.725c.415-1.62.353-2.57.418-2.564.017 0 .02.233.013.678.002.224-.008.5-.06.822-.042.323-.081.699-.196 1.109-.364 1.628-1.402 4.047-3.84 5.942-1.208.926-2.74 1.717-4.519 2.045-1.765.316-3.763.27-5.672-.444-.961-.33-1.888-.83-2.742-1.464a10.146 10.146 0 0 1-2.292-2.292c-1.335-1.768-2.09-4.05-2.11-6.397.02-2.347.776-4.628 2.111-6.395.646-.898 1.43-1.67 2.292-2.292a10.104 10.104 0 0 1 2.741-1.462c1.91-.716 3.906-.761 5.672-.445 1.777.327 3.31 1.119 4.518 2.044 2.44 1.895 3.477 4.315 3.841 5.943.115.41.154.785.195 1.109.053.322.063.598.061.82.007.447.004.68-.013.68" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#263238" d="M367.74 79.575c-.056.005-.023-.648-.317-1.754a7.255 7.255 0 0 0-2.658-3.9c-.81-.597-1.826-1.104-2.995-1.304-1.162-.194-2.47-.152-3.714.326a6.984 6.984 0 0 0-3.27 2.466c-.867 1.155-1.353 2.637-1.369 4.165.015 1.529.502 3.011 1.368 4.167a6.982 6.982 0 0 0 3.27 2.467c1.244.478 2.553.518 3.715.325 1.17-.2 2.185-.707 2.995-1.304a7.246 7.246 0 0 0 2.658-3.9c.294-1.105.261-1.758.316-1.754.016 0 .024.16.023.467.007.306-.034.761-.163 1.331-.242 1.125-.951 2.801-2.634 4.117a7.344 7.344 0 0 1-3.124 1.424c-1.223.22-2.606.192-3.931-.303a7.382 7.382 0 0 1-3.493-2.599c-.926-1.226-1.452-2.809-1.465-4.438.013-1.628.539-3.21 1.465-4.435a7.39 7.39 0 0 1 3.493-2.6c1.325-.494 2.708-.524 3.93-.302 1.231.23 2.29.78 3.125 1.422 1.683 1.318 2.392 2.993 2.634 4.117.13.57.17 1.027.163 1.333.001.307-.007.466-.023.466" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#ed1c24" d="M240.457 80.55v-1.28h70.693v1.28z" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#ed1c24" d="M304.148 79.575a7.277 7.277 0 1 1-14.555 0 7.277 7.277 0 0 1 14.555 0" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#fff" d="M299.617 81.644v1.328h-5.325v-1.056l2.718-2.567c.623-.595.734-.956.734-1.3 0-.552-.383-.875-1.127-.875-.604 0-1.117.232-1.46.705l-1.187-.765c.543-.795 1.53-1.308 2.798-1.308 1.57 0 2.617.804 2.617 2.083 0 .684-.191 1.308-1.177 2.224l-1.621 1.53z" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#263238" d="M363.225 80.818c0 1.188-.916 2.276-2.92 2.276-.985 0-2.002-.272-2.688-.756l.635-1.248c.533.402 1.278.634 2.013.634.815 0 1.32-.332 1.32-.906 0-.533-.394-.865-1.32-.865h-.745v-1.077l1.45-1.64h-3v-1.31h4.933v1.057l-1.59 1.812c1.268.202 1.912.987 1.912 2.023" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#263238" d="M340.876 56.67c0 .128-17.704.232-39.538.232-21.841 0-39.542-.104-39.542-.233s17.7-.232 39.542-.232c21.834 0 39.538.103 39.538.232" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#ebebeb" d="M292.013 101.21l5.464-7.417 5.464 7.417z" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#263238" d="M387.003 186.566c-.002-1.658-.08-63.587-.197-159.646l.197.198-182.295.036h-.016l.233-.234-.028 159.646-.205-.206 182.31.206-182.31.206h-.206v-.206l-.028-159.646v-.232h.25l182.295.036h.197v.196c-.119 96.059-.196 157.99-.197 159.646" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#ff725e" d="M250.13 118.825c0 .13-5.564.233-12.425.233-6.863 0-12.424-.104-12.424-.233 0-.128 5.561-.232 12.424-.232 6.861 0 12.424.104 12.424.232" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#fafafa" d="M275.643 138.884h-46.96a6.368 6.368 0 0 1 0-12.735h46.96a6.367 6.367 0 1 1 0 12.735" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#ff725e" d="M337.029 118.825c0 .13-5.271.233-11.773.233-6.503 0-11.774-.104-11.774-.233 0-.128 5.27-.232 11.774-.232 6.502 0 11.773.104 11.773.232" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#ff725e" d="M249.479 153.53c0 .13-5.272.233-11.773.233-6.504 0-11.774-.104-11.774-.233 0-.128 5.27-.232 11.774-.232 6.501 0 11.773.104 11.773.232" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#fafafa" d="M360.924 138.884h-46.96a6.368 6.368 0 0 1 0-12.735h46.96a6.367 6.367 0 1 1 0 12.735" />
                                                </g>
                                                <g clip-path="url(#c4o3h)">
                                                    <path fill="#fafafa" d="M362.665 174.115H229.029a6.367 6.367 0 1 1 0-12.734h133.636a6.366 6.366 0 1 1 0 12.734" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg></div>
                </div>
                <p class="ulip-marge-pera">If you're waiting for the ideal moment to buy ULIP, you should be aware that this moment never comes. Your chances of reaching your objectives are enhanced the earlier you begin investing in ULIPs.</p>
            </div>
        </section>
        <section class="term-types ulip-plan-feat top-0">
            <div class="midWrapper" id="find-best-ulip-plans">
                <h2 class="term-tags fnt-24">How to find the best ULIP plans?</h2>
                <div class="roww">
                    <div class="coll-md-6 ulip-pol-plan">
                        <div class="type-card">
                            <div class="ulip-icon u1"></div>
                            <h3>Understand the features and benefits</h3>
                            <p>Features and perks offered by various different plans vary. To choose the plan that best helps them achieve their financial objectives, one should be well-versed in the features and benefits provided by the ones accessible on the market. It is simpler to select the plan that best meets your needs if you are aware of the benefits and drawbacks of various plans.</p>
                        </div>
                    </div>
                    <div class="coll-md-6 ulip-pol-plan">
                        <div class="type-card">
                            <div class="ulip-icon u2"></div>
                            <h3>Identify the insurance objectives</h3>
                            <p>Since ULIPs are long-term investments, you should decide which plan will best help you achieve your insurance goals. Understanding different plans is crucial if you want to get the most out of a unit-linked insurance plan. The choice of plan that fulfils your financial ambitions and offer financial security to your family depends on the clarity of your investing and insurance objectives.</p>
                        </div>
                    </div>
                    <div class="coll-md-6 ulip-pol-plan">
                        <div class="type-card">
                            <div class="ulip-icon u3"></div>
                            <h3>Decide your goals</h3>
                            <p>Before deciding which ULIP plan to purchase, it is essential to evaluate your investing objectives. The availability of numerous fund options enables investors to investigate and evaluate their investment horizon and insurance goals for selecting the optimum strategy.</p>
                        </div>
                    </div>
                    <div class="coll-md-6 ulip-pol-plan">
                        <div class="type-card">
                            <div class="ulip-icon u4"></div>
                            <h3>Claim settlement ratio</h3>
                            <p>The claim settlement ratio of the insurance provider is one of the most important elements to take into account when selecting a ULIP plan. The claim settlement ratio shows what portion of all claims received by a company were ultimately resolved. The credibility of the insurance increases with the percentage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="e-invest btn-eterms cat-e-invest pb-0 top-0" id="best-ulip-plan">
            <div class="midWrapper">
                <h2>Best ULIP (Unit Linked Insurance Plans) Plans from Kotak Life</h2>
                <p class="fnt-16 fnt-400">In this policy, the investment risk in the investment portfolio is borne by the policyholder.</p><span class="onlineplan">Online plan</span>
                <div class="kotak-e-term-plan">
                    <div class="feats-sec kotat-online">
                        <div class="d-flex neweterm">
                            <h3>Kotak e-Invest</h3>
                            <div class="ml-auto tooltip"><a href="assets/images/uploads/insurance-plans/Kotak_E_Invest_-_Brochure.pdf" title="Brochure" download="Brochure"><button class="broch-btn want-to-btn sep-btn" name="e-invest"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" foxified="">
                                            <defs>
                                                <mask id="d63ib" width="2" height="2" x="-1" y="-1">
                                                    <path fill="#fff" d="M8 5h44v44H8z" />
                                                    <path d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" />
                                                </mask>
                                                <filter id="d63ia" width="80" height="83" x="-10" y="-13" filterUnits="userSpaceOnUse">
                                                    <feOffset dy="3" in="SourceGraphic" result="FeOffset4175Out" />
                                                    <feGaussianBlur in="FeOffset4175Out" result="FeGaussianBlur4176Out" stdDeviation="3.2 3.2" />
                                                </filter>
                                                <clipPath id="d63ic">
                                                    <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" />
                                                </clipPath>
                                            </defs>
                                            <g>
                                                <g>
                                                    <g filter="url(#d63ia)">
                                                        <path fill="none" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" mask="url(&quot;#d63ib&quot;)" />
                                                        <path fill="red" fill-opacity=".27" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" />
                                                    </g>
                                                    <path fill="#fff" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" />
                                                    <path fill="none" stroke="#ed3237" stroke-miterlimit="20" stroke-width="2" d="M8 27C8 14.85 17.85 5 30 5s22 9.85 22 22-9.85 22-22 22S8 39.15 8 27z" clip-path="url(&quot;#d63ic&quot;)" />
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" d="M37.5 26.773v5.334c0 .736-.672 1.333-1.5 1.333H24c-.828 0-1.5-.597-1.5-1.333v-5.334 0" />
                                                    </g>
                                                    <g>
                                                        <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M30 20.56v10.76" />
                                                    </g>
                                                    <g>
                                                        <path fill="none" stroke="#ed3237" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="20" d="M26.415 28.393v0l3.083 2.734a.818.818 0 0 0 1.057 0l3-2.667v0" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></button></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30 kotaksavcard list-1">
                            <div class="coll-md-6">
                                <div class="ds-flex side">
                                    <ol class="ulip-kotak-life ulip-ol">
                                        <li class="spec-wid spec-wid-2">Return of Mortality Charges*$</li>
                                        <li class="spec-wid">Enhanced Protection</li>
                                        <li class="spec-wid">Multiple Plan Options</li>
                                    </ol>
                                    <ol class="side-1 ulip-kotak-life">
                                        <li class="spec-wid spec-wid-2 mar-top-sec">Zero Premium Allocation Charges</li>
                                        <li class="spec-wid-2">Tax Savings<sup>^</sup></li>
                                    </ol>
                                </div>
                                <div class="feats-buy d-flex ktm-btm"><a class="kot-btn" target="_blank" href="ulip-plans/kotak-e-invest" title="View Kotak e-Invest">View Kotak e-Invest</a><a rel="nofollow" target="_blank" href="buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card" title="invest in ULIP">invest in ULIP</a></div>
                            </div>
                            <div class="coll-md-5 mar-side-left"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="519.279" height="310.394" viewBox="0 0 519.279 310.394">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_15427" data-name="Rectangle 15427" width="518.483" height="310.393" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-2">
                                            <path id="Path_40705" data-name="Path 40705" d="M15.889,256.25c0,3.543.094,7.063.243,10.57h495.86c.149-3.507.242-7.027.242-10.57,0-136.121-111.11-246.468-248.172-246.468S15.889,120.129,15.889,256.25" transform="translate(-15.889 -9.782)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-3">
                                            <rect id="Rectangle_15432" data-name="Rectangle 15432" width="8.287" height="8.287" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-7">
                                            <rect id="Rectangle_15437" data-name="Rectangle 15437" width="61.689" height="2.139" fill="#fff" />
                                        </clipPath>
                                        <clipPath id="clip-path-13">
                                            <rect id="Rectangle_15448" data-name="Rectangle 15448" width="20.53" height="23.614" fill="none" stroke="#acacac" stroke-width="1" />
                                        </clipPath>
                                        <clipPath id="clip-path-14">
                                            <path id="Path_40723" data-name="Path 40723" d="M96.389,357.386v8.676c0,3.008,16.06,5.446,35.872,5.446s35.87-2.438,35.87-5.446v-8.676Z" transform="translate(-96.389 -357.386)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-16">
                                            <path id="Path_40728" data-name="Path 40728" d="M89.285,343.982v8.676c0,3.008,16.06,5.446,35.871,5.446s35.872-2.438,35.872-5.446v-8.676Z" transform="translate(-89.285 -343.982)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-18">
                                            <path id="Path_40733" data-name="Path 40733" d="M97.256,330.49v8.676c0,3.009,16.06,5.446,35.871,5.446S169,342.174,169,339.166V330.49Z" transform="translate(-97.256 -330.49)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-20">
                                            <path id="Path_40738" data-name="Path 40738" d="M100.707,316.825V325.5c0,3.009,16.061,5.446,35.872,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-100.707 -316.825)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-22">
                                            <path id="Path_40743" data-name="Path 40743" d="M89,303.338v8.676c0,3.007,16.06,5.446,35.872,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-88.998 -303.338)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-24">
                                            <path id="Path_40748" data-name="Path 40748" d="M98.466,289.845v8.676c0,3.008,16.061,5.446,35.872,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-98.466 -289.845)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-26">
                                            <path id="Path_40753" data-name="Path 40753" d="M89.969,276.353v8.676c0,3.008,16.06,5.446,35.87,5.446s35.872-2.438,35.872-5.446v-8.676Z" transform="translate(-89.969 -276.353)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-28">
                                            <rect id="Rectangle_15650" data-name="Rectangle 15650" width="80.304" height="81.141" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-29">
                                            <path id="Path_40759" data-name="Path 40759" d="M96.389,357.386v8.676c0,3.008,16.06,5.446,35.872,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-96.389 -357.386)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-30">
                                            <path id="Path_40765" data-name="Path 40765" d="M89.284,343.982v8.676c0,3.008,16.06,5.446,35.871,5.446s35.872-2.438,35.872-5.446v-8.676Z" transform="translate(-89.284 -343.982)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-31">
                                            <path id="Path_40771" data-name="Path 40771" d="M97.256,330.49v8.676c0,3.008,16.06,5.446,35.871,5.446S169,342.174,169,339.166V330.49Z" transform="translate(-97.256 -330.49)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-32">
                                            <path id="Path_40777" data-name="Path 40777" d="M100.708,316.826V325.5c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-100.708 -316.826)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-33">
                                            <path id="Path_40783" data-name="Path 40783" d="M89,303.338v8.676c0,3.008,16.06,5.446,35.872,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-88.998 -303.338)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-34">
                                            <path id="Path_40789" data-name="Path 40789" d="M98.466,289.845v8.676c0,3.008,16.06,5.446,35.872,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-98.466 -289.845)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-35">
                                            <path id="Path_40795" data-name="Path 40795" d="M89.968,276.352v8.676c0,3.008,16.06,5.446,35.872,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-89.968 -276.352)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-36">
                                            <path id="Path_40800" data-name="Path 40800" d="M40.579,363.882v8.676c0,3.008,16.06,5.447,35.871,5.447s35.871-2.439,35.871-5.447v-8.676Z" transform="translate(-40.579 -363.882)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-38">
                                            <path id="Path_40805" data-name="Path 40805" d="M47.685,350.478v8.676c0,3.008,16.06,5.446,35.871,5.446s35.872-2.438,35.872-5.446v-8.676Z" transform="translate(-47.685 -350.478)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-40">
                                            <path id="Path_40810" data-name="Path 40810" d="M39.712,336.985v8.676c0,3.008,16.061,5.446,35.871,5.446s35.872-2.438,35.872-5.446v-8.676Z" transform="translate(-39.712 -336.985)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-42">
                                            <path id="Path_40815" data-name="Path 40815" d="M36.261,323.322V332c0,3.008,16.06,5.446,35.871,5.446S108,335.006,108,332v-8.676Z" transform="translate(-36.261 -323.322)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-44">
                                            <path id="Path_40820" data-name="Path 40820" d="M47.97,309.833v8.677c0,3.008,16.06,5.445,35.872,5.445s35.87-2.438,35.87-5.445v-8.677Z" transform="translate(-47.97 -309.833)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-46">
                                            <path id="Path_40825" data-name="Path 40825" d="M38.5,296.341v8.676c0,3.007,16.06,5.446,35.872,5.446s35.87-2.438,35.87-5.446v-8.676Z" transform="translate(-38.502 -296.341)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-48">
                                            <path id="Path_40830" data-name="Path 40830" d="M47,282.848v8.676c0,3.008,16.06,5.447,35.871,5.447s35.872-2.439,35.872-5.447v-8.676Z" transform="translate(-47.001 -282.848)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-50">
                                            <rect id="Rectangle_15742" data-name="Rectangle 15742" width="72.381" height="77.699" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-51">
                                            <path id="Path_40836" data-name="Path 40836" d="M37.345,368.847l6.937,1.649c18.474,4.249,37.385-9.421,42.24-30.532s-6.185-41.669-24.658-45.918l-6.949-1.6Z" transform="translate(-37.345 -292.447)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-53">
                                            <rect id="Rectangle_15756" data-name="Rectangle 15756" width="77.571" height="39.396" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-54">
                                            <path id="Path_40846" data-name="Path 40846" d="M193.124,358.1v8.676c0,3.008,16.06,5.447,35.871,5.447s35.87-2.439,35.87-5.447V358.1Z" transform="translate(-193.124 -358.104)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-56">
                                            <path id="Path_40851" data-name="Path 40851" d="M186.018,344.7v8.677c0,3.008,16.06,5.446,35.871,5.446s35.872-2.438,35.872-5.446V344.7Z" transform="translate(-186.018 -344.699)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-58">
                                            <path id="Path_40856" data-name="Path 40856" d="M193.99,331.207v8.677c0,3.008,16.06,5.445,35.871,5.445s35.871-2.438,35.871-5.445v-8.677Z" transform="translate(-193.99 -331.207)" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-59">
                                            <rect id="Rectangle_15796" data-name="Rectangle 15796" width="9.599" height="11.697" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-60">
                                            <rect width="5.27" height="73.553" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-61">
                                            <rect id="Rectangle_15807" data-name="Rectangle 15807" width="29.067" height="0.247" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-62">
                                            <rect id="Rectangle_15808" data-name="Rectangle 15808" width="29.067" height="0.248" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-63">
                                            <rect id="Rectangle_15809" data-name="Rectangle 15809" width="29.066" height="0.247" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-66">
                                            <rect id="Rectangle_15814" data-name="Rectangle 15814" width="29.066" height="0.35" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-67">
                                            <rect id="Rectangle_15815" data-name="Rectangle 15815" width="29.067" height="0.35" fill="none" />
                                        </clipPath>
                                        <clipPath id="clip-path-69">
                                            <rect id="Rectangle_15817" data-name="Rectangle 15817" width="29.067" height="0.351" fill="none" />
                                        </clipPath>
                                    </defs>
                                    <g id="Group_17096" data-name="Group 17096" transform="translate(-4506 -3642)">
                                        <g id="Group_16905" data-name="Group 16905" transform="translate(4506 3642)">
                                            <g id="Group_16904" data-name="Group 16904" clip-path="url(#clip-path)">
                                                <path id="Path_40704" data-name="Path 40704" d="M511.992,266.819c.149-3.507.242-7.028.242-10.57,0-136.121-111.111-246.468-248.172-246.468S15.89,120.128,15.89,256.249c0,3.542.093,7.064.242,10.57Z" transform="translate(-4.272 -2.63)" fill="#f2f2f2" />
                                            </g>
                                        </g>
                                        <path id="Path_40706" data-name="Path 40706" d="M85.737,165.234V288.683H510.183" transform="translate(4482.949 3597.575)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" />
                                        <line id="Line_130" data-name="Line 130" y2="112.977" transform="translate(4662.582 3772.972)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" />
                                        <line id="Line_131" data-name="Line 131" y2="57.786" transform="translate(4744.57 3828.163)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" />
                                        <line id="Line_132" data-name="Line 132" y2="60.558" transform="translate(4819.796 3825.391)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" />
                                        <line id="Line_133" data-name="Line 133" y2="154.938" transform="translate(4902.629 3731.011)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" />
                                        <path id="Path_40707" data-name="Path 40707" d="M70.812,221.285s58.321-72.69,103.119-72.69,59.248,66.774,123.291,66.774c66.631,0,141.267-148.762,141.267-148.762" transform="translate(4486.962 3624.092)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" />
                                        <g id="Group_16922" data-name="Group 16922" transform="translate(4659.763 3771.077)" opacity="0.38" style="mix-blend-mode:multiply;isolation:isolate">
                                            <g id="Group_16921" data-name="Group 16921" transform="translate(0 0)">
                                                <g id="Group_16920" data-name="Group 16920" clip-path="url(#clip-path-3)">
                                                    <path id="Path_40708" data-name="Path 40708" d="M218.592,180.686a4.144,4.144,0,1,1-4.143-4.144,4.143,4.143,0,0,1,4.143,4.144" transform="translate(-210.305 -176.542)" fill="#d8a979" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_16925" data-name="Group 16925" transform="translate(4742.027 3826.252)" opacity="0.38" style="mix-blend-mode:multiply;isolation:isolate">
                                            <g id="Group_16924" data-name="Group 16924" transform="translate(0 0)">
                                                <g id="Group_16923" data-name="Group 16923" clip-path="url(#clip-path-3)">
                                                    <path id="Path_40709" data-name="Path 40709" d="M331.109,256.149a4.144,4.144,0,1,1-4.143-4.144,4.143,4.143,0,0,1,4.143,4.144" transform="translate(-322.821 -252.006)" fill="#d8a979" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_16928" data-name="Group 16928" transform="translate(4817.084 3824.512)" opacity="0.38" style="mix-blend-mode:multiply;isolation:isolate">
                                            <g id="Group_16927" data-name="Group 16927" transform="translate(0 0)">
                                                <g id="Group_16926" data-name="Group 16926" clip-path="url(#clip-path-3)">
                                                    <path id="Path_40710" data-name="Path 40710" d="M433.765,253.77a4.144,4.144,0,1,1-4.144-4.144,4.144,4.144,0,0,1,4.144,4.144" transform="translate(-425.478 -249.626)" fill="#d8a979" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_16931" data-name="Group 16931" transform="translate(4899.846 3728.329)" opacity="0.38" style="mix-blend-mode:multiply;isolation:isolate">
                                            <g id="Group_16930" data-name="Group 16930" transform="translate(0 0)">
                                                <g id="Group_16929" data-name="Group 16929" clip-path="url(#clip-path-3)">
                                                    <path id="Path_40711" data-name="Path 40711" d="M546.961,122.218a4.144,4.144,0,1,1-4.143-4.144,4.143,4.143,0,0,1,4.143,4.144" transform="translate(-538.674 -118.075)" fill="#d8a979" />
                                                </g>
                                            </g>
                                        </g>
                                        <path id="Path_40712" data-name="Path 40712" d="M216.592,178.686a4.144,4.144,0,1,1-4.143-4.144,4.143,4.143,0,0,1,4.143,4.144" transform="translate(4449.996 3595.073)" fill="#fff" />
                                        <path id="Path_40713" data-name="Path 40713" d="M329.108,254.149a4.144,4.144,0,1,1-4.143-4.144,4.143,4.143,0,0,1,4.143,4.144" transform="translate(4419.744 3574.784)" fill="#fff" />
                                        <path id="Path_40714" data-name="Path 40714" d="M431.765,251.77a4.144,4.144,0,1,1-4.144-4.144,4.144,4.144,0,0,1,4.144,4.144" transform="translate(4392.145 3575.423)" fill="#fff" />
                                        <path id="Path_40715" data-name="Path 40715" d="M544.961,120.218a4.144,4.144,0,1,1-4.143-4.144,4.143,4.143,0,0,1,4.143,4.144" transform="translate(4361.71 3610.792)" fill="#fff" />
                                        <g id="Group_16934" data-name="Group 16934" transform="translate(4742.027 3711.085)" opacity="0.75">
                                            <g id="Group_16933" data-name="Group 16933" transform="translate(0 0)">
                                                <g id="Group_16932" data-name="Group 16932" clip-path="url(#clip-path-7)">
                                                    <rect id="Rectangle_15436" data-name="Rectangle 15436" width="61.688" height="2.139" transform="translate(0.001 0)" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_16937" data-name="Group 16937" transform="translate(4742.027 3715.471)" opacity="0.75">
                                            <g id="Group_16936" data-name="Group 16936" transform="translate(0 0)">
                                                <g id="Group_16935" data-name="Group 16935" clip-path="url(#clip-path-7)">
                                                    <rect id="Rectangle_15438" data-name="Rectangle 15438" width="61.688" height="2.139" transform="translate(0.001)" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_16940" data-name="Group 16940" transform="translate(4742.027 3719.857)" opacity="0.75">
                                            <g id="Group_16939" data-name="Group 16939" transform="translate(0 0)">
                                                <g id="Group_16938" data-name="Group 16938" clip-path="url(#clip-path-7)">
                                                    <rect id="Rectangle_15440" data-name="Rectangle 15440" width="61.688" height="2.139" transform="translate(0.001)" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_16943" data-name="Group 16943" transform="translate(4742.027 3724.243)" opacity="0.75">
                                            <g id="Group_16942" data-name="Group 16942" transform="translate(0 0)">
                                                <g id="Group_16941" data-name="Group 16941" clip-path="url(#clip-path-7)">
                                                    <rect id="Rectangle_15442" data-name="Rectangle 15442" width="61.688" height="2.139" transform="translate(0.001 -0.001)" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_16946" data-name="Group 16946" transform="translate(4742.027 3728.629)" opacity="0.75">
                                            <g id="Group_16945" data-name="Group 16945" transform="translate(0 0)">
                                                <g id="Group_16944" data-name="Group 16944" clip-path="url(#clip-path-7)">
                                                    <rect id="Rectangle_15444" data-name="Rectangle 15444" width="61.688" height="2.139" transform="translate(0.001)" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_16949" data-name="Group 16949" transform="translate(4742.027 3733.015)" opacity="0.75">
                                            <g id="Group_16948" data-name="Group 16948" transform="translate(0 0)">
                                                <g id="Group_16947" data-name="Group 16947" clip-path="url(#clip-path-7)">
                                                    <rect id="Rectangle_15446" data-name="Rectangle 15446" width="61.688" height="2.139" transform="translate(0.001)" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                        <path id="Path_40716" data-name="Path 40716" d="M387.06,71.411A22.621,22.621,0,1,1,364.439,48.79,22.621,22.621,0,0,1,387.06,71.411" transform="translate(4345.372 3642.585)" fill="#fff" />
                                        <path id="Path_40717" data-name="Path 40717" d="M372.757,48.789V71.41l21.09-11.983-3.572-10.638Z" transform="translate(4337.054 3642.586)" fill="#f2f2f2" />
                                        <g id="Group_16952" data-name="Group 16952" transform="translate(4711.562 3686.878)" opacity="0.38" style="mix-blend-mode:multiply;isolation:isolate">
                                            <g id="Group_16951" data-name="Group 16951" transform="translate(0 0)">
                                                <g id="Group_16950" data-name="Group 16950" clip-path="url(#clip-path-13)">
                                                    <path id="Path_40718" data-name="Path 40718" d="M395.317,54.586a22.606,22.606,0,0,0-19.666-11.447V65.76Z" transform="translate(-375.286 -42.773)" fill="none" stroke="#acacac" stroke-miterlimit="10" stroke-width="1" />
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_15449" data-name="Rectangle 15449" width="5.613" height="5.613" transform="translate(4742.688 3697.595)" fill="#fff" />
                                        <rect id="Rectangle_15450" data-name="Rectangle 15450" width="10.617" height="3.159" transform="translate(4750.351 3700.049)" fill="#fff" />
                                        <rect id="Rectangle_15451" data-name="Rectangle 15451" width="5.613" height="5.613" transform="translate(4773.475 3697.947)" fill="#fff" />
                                        <rect id="Rectangle_15452" data-name="Rectangle 15452" width="10.617" height="3.159" transform="translate(4781.137 3700.401)" fill="#fff" />
                                        <rect id="Rectangle_15453" data-name="Rectangle 15453" width="7.327" height="7.327" transform="translate(4742.027 3744.141)" fill="#fff" />
                                        <rect id="Rectangle_15454" data-name="Rectangle 15454" width="51.685" height="4.123" transform="translate(4752.031 3747.346)" fill="#fff" />
                                        <rect id="Rectangle_15455" data-name="Rectangle 15455" width="7.327" height="7.327" transform="translate(4742.027 3755.072)" fill="#fff" />
                                        <rect id="Rectangle_15456" data-name="Rectangle 15456" width="51.685" height="4.123" transform="translate(4752.031 3758.276)" fill="#fff" />
                                        <rect id="Rectangle_15457" data-name="Rectangle 15457" width="7.327" height="7.327" transform="translate(4742.027 3765.65)" fill="#fff" />
                                        <rect id="Rectangle_15458" data-name="Rectangle 15458" width="51.685" height="4.123" transform="translate(4752.031 3768.854)" fill="#fff" />
                                        <rect id="Rectangle_15459" data-name="Rectangle 15459" width="7.327" height="7.327" transform="translate(4742.027 3776.271)" fill="#fff" />
                                        <rect id="Rectangle_15460" data-name="Rectangle 15460" width="51.685" height="4.123" transform="translate(4752.031 3779.476)" fill="#fff" />
                                        <path id="Path_40719" data-name="Path 40719" d="M430.605,233.082a18.076,18.076,0,0,0-9.756,3.262c-2.925,1.856-5.863,4.108-7.626,7.153a9.911,9.911,0,0,0-.6,9.391,14.1,14.1,0,0,0,7,6.452,14.882,14.882,0,0,0,17.175-3.883c2.121-2.484,3.291-5.68,2.157-8.879a11.9,11.9,0,0,0-6.738-6.589c-6.871-3.024-15.7-2.533-21.923,1.806a.3.3,0,0,0,.306.523,25.187,25.187,0,0,1,17.909-2.732,14.955,14.955,0,0,1,7.949,4.317,7.69,7.69,0,0,1,.974,9.082,13.872,13.872,0,0,1-15.282,6.166,14.048,14.048,0,0,1-7.257-4.669,8.839,8.839,0,0,1-1.636-8.829c1.266-3.5,4.262-6,7.214-8.086,3-2.114,6.381-3.877,10.13-3.913a.286.286,0,0,0,0-.571" transform="translate(4395.725 3579.334)" fill="#fff" />
                                        <path id="Path_40720" data-name="Path 40720" d="M446.831,212.206a69.042,69.042,0,0,0,10.952-12.088,49.143,49.143,0,0,0,6.988-14.972,44.752,44.752,0,0,0,1.576-10.207c.022-.631-.891-.6-.96,0a58.91,58.91,0,0,1-4.19,16.908,55.043,55.043,0,0,1-8.443,13.419,74.592,74.592,0,0,1-6.311,6.553c-.26.241.125.621.388.388" transform="translate(4385.993 3595.09)" fill="#fff" />
                                        <path id="Path_40721" data-name="Path 40721" d="M461.807,181.18a8.362,8.362,0,0,0,1.314-.461,11.527,11.527,0,0,0,1.326-.847,23.418,23.418,0,0,0,2.217-1.784,32.022,32.022,0,0,0,4.02-4.5H469.5c1.835,3.046,3.542,6.172,5.29,9.269.412.731,1.453.089,1.109-.649a82.448,82.448,0,0,0-5.215-9.313.7.7,0,0,0-1.184,0,27.64,27.64,0,0,1-3.666,4.36c-.647.625-1.309,1.241-2,1.825-.341.291-.69.572-1.028.869-.4.354-.692.755-1.057,1.137-.036.037,0,.11.053.091" transform="translate(4381.857 3595.604)" fill="#fff" />
                                        <path id="Path_40722" data-name="Path 40722" d="M96.389,357.386v8.676c0,3.007,16.06,5.446,35.871,5.446s35.871-2.439,35.871-5.446v-8.676Z" transform="translate(4480.085 3545.914)" fill="#fd9f00" />
                                        <rect id="Rectangle_15475" data-name="Rectangle 15475" width="518.483" height="310.393" transform="translate(4506 3642)" fill="none" />
                                        <g id="Group_16956" data-name="Group 16956" transform="translate(4576.474 3903.3)">
                                            <g id="Group_16955" data-name="Group 16955" transform="translate(0)" clip-path="url(#clip-path-14)">
                                                <rect id="Rectangle_15476" data-name="Rectangle 15476" width="1.698" height="19.889" transform="translate(0.785 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15477" data-name="Rectangle 15477" width="1.698" height="19.889" transform="translate(5.189 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15478" data-name="Rectangle 15478" width="1.698" height="19.889" transform="translate(10.216 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15479" data-name="Rectangle 15479" width="1.699" height="19.889" transform="translate(16.489 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15480" data-name="Rectangle 15480" width="1.698" height="19.889" transform="translate(23.385 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15481" data-name="Rectangle 15481" width="1.699" height="19.889" transform="translate(30.903 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15482" data-name="Rectangle 15482" width="1.698" height="19.889" transform="translate(69.26 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15483" data-name="Rectangle 15483" width="1.698" height="19.889" transform="translate(64.856 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15484" data-name="Rectangle 15484" width="1.699" height="19.889" transform="translate(59.829 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15485" data-name="Rectangle 15485" width="1.698" height="19.889" transform="translate(53.556 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15486" data-name="Rectangle 15486" width="1.699" height="19.889" transform="translate(46.66 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15487" data-name="Rectangle 15487" width="1.698" height="19.889" transform="translate(39.142 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_16958" data-name="Group 16958" transform="translate(4506 3642)">
                                            <g id="Group_16957" data-name="Group 16957" clip-path="url(#clip-path)">
                                                <path id="Path_40724" data-name="Path 40724" d="M168.132,355.162c0,3.008-16.06,5.446-35.871,5.446S96.39,358.17,96.39,355.162s16.06-5.446,35.871-5.446,35.871,2.439,35.871,5.446" transform="translate(-25.915 -94.024)" fill="#fac61b" />
                                                <path id="Path_40725" data-name="Path 40725" d="M163.482,355.452c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.132-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.132,28.517,2.528" transform="translate(-28.62 -94.887)" fill="#fd9f00" />
                                                <path id="Path_40726" data-name="Path 40726" d="M107.677,356.186c3.553-1.037,14.423-1.793,27.288-1.793s23.736.755,27.288,1.793c.8-.232,1.228-.48,1.228-.735,0-1.4-12.767-2.528-28.517-2.528s-28.516,1.132-28.516,2.528c0,.255.432.5,1.228.735" transform="translate(-28.62 -94.887)" fill="#e38601" />
                                                <path id="Path_40727" data-name="Path 40727" d="M89.284,343.982v8.676c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-24.005 -92.483)" fill="#fd9f00" />
                                            </g>
                                        </g>
                                        <g id="Group_16960" data-name="Group 16960" transform="translate(4571.28 3893.499)">
                                            <g id="Group_16959" data-name="Group 16959" transform="translate(0 0)" clip-path="url(#clip-path-16)">
                                                <rect id="Rectangle_15489" data-name="Rectangle 15489" width="1.698" height="19.888" transform="translate(0.785 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15490" data-name="Rectangle 15490" width="1.698" height="19.888" transform="translate(5.188 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15491" data-name="Rectangle 15491" width="1.698" height="19.888" transform="translate(10.215 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15492" data-name="Rectangle 15492" width="1.698" height="19.888" transform="translate(16.488 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15493" data-name="Rectangle 15493" width="1.698" height="19.888" transform="translate(23.383 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15494" data-name="Rectangle 15494" width="1.699" height="19.888" transform="translate(30.902 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15495" data-name="Rectangle 15495" width="1.698" height="19.888" transform="translate(69.259 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15496" data-name="Rectangle 15496" width="1.698" height="19.888" transform="translate(64.855 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15497" data-name="Rectangle 15497" width="1.698" height="19.888" transform="translate(59.828 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15498" data-name="Rectangle 15498" width="1.698" height="19.888" transform="translate(53.555 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15499" data-name="Rectangle 15499" width="1.698" height="19.888" transform="translate(46.659 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15500" data-name="Rectangle 15500" width="1.698" height="19.888" transform="translate(39.141 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_16962" data-name="Group 16962" transform="translate(4506 3642)">
                                            <g id="Group_16961" data-name="Group 16961" clip-path="url(#clip-path)">
                                                <path id="Path_40729" data-name="Path 40729" d="M161.026,341.758c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-24.005 -90.421)" fill="#fac61b" />
                                                <path id="Path_40730" data-name="Path 40730" d="M156.376,342.048c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.132-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.131,28.517,2.528" transform="translate(-26.709 -91.283)" fill="#fd9f00" />
                                                <path id="Path_40731" data-name="Path 40731" d="M100.572,342.782c3.552-1.038,14.423-1.793,27.288-1.793s23.736.755,27.288,1.793c.8-.233,1.228-.48,1.228-.736,0-1.4-12.767-2.528-28.517-2.528s-28.517,1.132-28.517,2.528c0,.256.432.5,1.229.736" transform="translate(-26.709 -91.283)" fill="#e38601" />
                                                <path id="Path_40732" data-name="Path 40732" d="M97.256,330.49v8.676c0,3.008,16.06,5.446,35.871,5.446S169,342.174,169,339.166V330.49Z" transform="translate(-26.148 -88.855)" fill="#fd9f00" />
                                            </g>
                                        </g>
                                        <g id="Group_16964" data-name="Group 16964" transform="translate(4577.108 3883.635)">
                                            <g id="Group_16963" data-name="Group 16963" transform="translate(0 0)" clip-path="url(#clip-path-18)">
                                                <rect id="Rectangle_15502" data-name="Rectangle 15502" width="1.698" height="19.888" transform="translate(0.785 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15503" data-name="Rectangle 15503" width="1.698" height="19.888" transform="translate(5.188 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15504" data-name="Rectangle 15504" width="1.698" height="19.888" transform="translate(10.215 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15505" data-name="Rectangle 15505" width="1.699" height="19.888" transform="translate(16.488 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15506" data-name="Rectangle 15506" width="1.699" height="19.888" transform="translate(23.384 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15507" data-name="Rectangle 15507" width="1.698" height="19.888" transform="translate(30.902 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15508" data-name="Rectangle 15508" width="1.698" height="19.888" transform="translate(69.259 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15509" data-name="Rectangle 15509" width="1.698" height="19.888" transform="translate(64.856 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15510" data-name="Rectangle 15510" width="1.698" height="19.888" transform="translate(59.829 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15511" data-name="Rectangle 15511" width="1.699" height="19.888" transform="translate(53.556 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15512" data-name="Rectangle 15512" width="1.698" height="19.888" transform="translate(46.66 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15513" data-name="Rectangle 15513" width="1.698" height="19.888" transform="translate(39.142 -3.604)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_16966" data-name="Group 16966" transform="translate(4506 3642)">
                                            <g id="Group_16965" data-name="Group 16965" clip-path="url(#clip-path)">
                                                <path id="Path_40734" data-name="Path 40734" d="M169,328.265c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446S169,325.257,169,328.265" transform="translate(-26.148 -86.793)" fill="#fac61b" />
                                                <path id="Path_40735" data-name="Path 40735" d="M164.348,328.555c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.131-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.131,28.517,2.528" transform="translate(-28.853 -87.655)" fill="#fd9f00" />
                                                <path id="Path_40736" data-name="Path 40736" d="M108.543,329.29c3.552-1.038,14.423-1.793,27.288-1.793s23.736.755,27.288,1.793c.8-.233,1.228-.48,1.228-.736,0-1.4-12.767-2.528-28.517-2.528s-28.517,1.132-28.517,2.528c0,.256.432.5,1.229.736" transform="translate(-28.852 -87.655)" fill="#e38601" />
                                                <path id="Path_40737" data-name="Path 40737" d="M100.708,316.826V325.5c0,3.007,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-27.076 -85.182)" fill="#fd9f00" />
                                            </g>
                                        </g>
                                        <g id="Group_16968" data-name="Group 16968" transform="translate(4579.631 3873.644)">
                                            <g id="Group_16967" data-name="Group 16967" transform="translate(0 0)" clip-path="url(#clip-path-20)">
                                                <rect id="Rectangle_15515" data-name="Rectangle 15515" width="1.698" height="19.888" transform="translate(0.785 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15516" data-name="Rectangle 15516" width="1.698" height="19.888" transform="translate(5.189 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15517" data-name="Rectangle 15517" width="1.699" height="19.888" transform="translate(10.216 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15518" data-name="Rectangle 15518" width="1.698" height="19.888" transform="translate(16.489 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15519" data-name="Rectangle 15519" width="1.698" height="19.888" transform="translate(23.385 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15520" data-name="Rectangle 15520" width="1.699" height="19.888" transform="translate(30.903 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15521" data-name="Rectangle 15521" width="1.699" height="19.888" transform="translate(69.26 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15522" data-name="Rectangle 15522" width="1.699" height="19.888" transform="translate(64.856 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15523" data-name="Rectangle 15523" width="1.698" height="19.888" transform="translate(59.829 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15524" data-name="Rectangle 15524" width="1.698" height="19.888" transform="translate(53.557 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15525" data-name="Rectangle 15525" width="1.698" height="19.888" transform="translate(46.661 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15526" data-name="Rectangle 15526" width="1.698" height="19.888" transform="translate(39.142 -3.602)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_16970" data-name="Group 16970" transform="translate(4506 3642)">
                                            <g id="Group_16969" data-name="Group 16969" clip-path="url(#clip-path)">
                                                <path id="Path_40739" data-name="Path 40739" d="M172.45,314.6c0,3.007-16.06,5.446-35.871,5.446s-35.871-2.439-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-27.076 -83.119)" fill="#fac61b" />
                                                <path id="Path_40740" data-name="Path 40740" d="M167.8,314.891c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.131-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.132,28.517,2.528" transform="translate(-29.781 -83.982)" fill="#fd9f00" />
                                                <path id="Path_40741" data-name="Path 40741" d="M112,315.626c3.553-1.038,14.423-1.793,27.288-1.793s23.735.755,27.288,1.793c.8-.233,1.228-.48,1.228-.735,0-1.4-12.767-2.528-28.516-2.528s-28.517,1.132-28.517,2.528c0,.255.432.5,1.228.735" transform="translate(-29.781 -83.982)" fill="#e38601" />
                                                <path id="Path_40742" data-name="Path 40742" d="M89,303.338v8.676c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-23.928 -81.555)" fill="#fd9f00" />
                                            </g>
                                        </g>
                                        <g id="Group_16972" data-name="Group 16972" transform="translate(4571.07 3863.783)">
                                            <g id="Group_16971" data-name="Group 16971" transform="translate(0 0)" clip-path="url(#clip-path-22)">
                                                <rect id="Rectangle_15528" data-name="Rectangle 15528" width="1.698" height="19.888" transform="translate(0.785 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15529" data-name="Rectangle 15529" width="1.698" height="19.888" transform="translate(5.189 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15530" data-name="Rectangle 15530" width="1.698" height="19.888" transform="translate(10.215 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15531" data-name="Rectangle 15531" width="1.698" height="19.888" transform="translate(16.489 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15532" data-name="Rectangle 15532" width="1.699" height="19.888" transform="translate(23.384 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15533" data-name="Rectangle 15533" width="1.698" height="19.888" transform="translate(30.903 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15534" data-name="Rectangle 15534" width="1.698" height="19.888" transform="translate(69.26 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15535" data-name="Rectangle 15535" width="1.698" height="19.888" transform="translate(64.856 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15536" data-name="Rectangle 15536" width="1.698" height="19.888" transform="translate(59.829 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15537" data-name="Rectangle 15537" width="1.698" height="19.888" transform="translate(53.556 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15538" data-name="Rectangle 15538" width="1.698" height="19.888" transform="translate(46.66 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15539" data-name="Rectangle 15539" width="1.699" height="19.888" transform="translate(39.142 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_16974" data-name="Group 16974" transform="translate(4506 3642)">
                                            <g id="Group_16973" data-name="Group 16973" clip-path="url(#clip-path)">
                                                <path id="Path_40744" data-name="Path 40744" d="M160.741,301.113c0,3.008-16.06,5.446-35.871,5.446S89,304.121,89,301.113s16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-23.928 -79.493)" fill="#fac61b" />
                                                <path id="Path_40745" data-name="Path 40745" d="M156.09,301.4c0,1.4-12.767,2.528-28.517,2.528S99.057,302.8,99.057,301.4s12.767-2.528,28.517-2.528,28.517,1.131,28.517,2.528" transform="translate(-26.632 -80.356)" fill="#fd9f00" />
                                                <path id="Path_40746" data-name="Path 40746" d="M100.286,302.138c3.553-1.037,14.423-1.793,27.288-1.793s23.735.755,27.288,1.793c.8-.232,1.228-.48,1.228-.735,0-1.4-12.767-2.528-28.516-2.528s-28.517,1.131-28.517,2.528c0,.255.432.5,1.228.735" transform="translate(-26.633 -80.356)" fill="#e38601" />
                                                <path id="Path_40747" data-name="Path 40747" d="M98.466,289.845v8.676c0,3.007,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-26.473 -77.927)" fill="#fd9f00" />
                                            </g>
                                        </g>
                                        <g id="Group_16976" data-name="Group 16976" transform="translate(4577.993 3853.918)">
                                            <g id="Group_16975" data-name="Group 16975" transform="translate(0 0)" clip-path="url(#clip-path-24)">
                                                <rect id="Rectangle_15541" data-name="Rectangle 15541" width="1.698" height="19.888" transform="translate(0.785 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15542" data-name="Rectangle 15542" width="1.698" height="19.888" transform="translate(5.189 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15543" data-name="Rectangle 15543" width="1.698" height="19.888" transform="translate(10.215 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15544" data-name="Rectangle 15544" width="1.698" height="19.888" transform="translate(16.489 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15545" data-name="Rectangle 15545" width="1.698" height="19.888" transform="translate(23.384 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15546" data-name="Rectangle 15546" width="1.698" height="19.888" transform="translate(30.903 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15547" data-name="Rectangle 15547" width="1.698" height="19.888" transform="translate(69.26 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15548" data-name="Rectangle 15548" width="1.699" height="19.888" transform="translate(64.856 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15549" data-name="Rectangle 15549" width="1.698" height="19.888" transform="translate(59.829 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15550" data-name="Rectangle 15550" width="1.698" height="19.888" transform="translate(53.556 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15551" data-name="Rectangle 15551" width="1.698" height="19.888" transform="translate(46.66 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15552" data-name="Rectangle 15552" width="1.698" height="19.888" transform="translate(39.142 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_16978" data-name="Group 16978" transform="translate(4506 3642)">
                                            <g id="Group_16977" data-name="Group 16977" clip-path="url(#clip-path)">
                                                <path id="Path_40749" data-name="Path 40749" d="M170.209,287.621c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-26.474 -75.865)" fill="#fac61b" />
                                                <path id="Path_40750" data-name="Path 40750" d="M165.558,287.911c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.132-28.517-2.528,12.768-2.528,28.517-2.528,28.517,1.132,28.517,2.528" transform="translate(-29.178 -76.728)" fill="#fd9f00" />
                                                <path id="Path_40751" data-name="Path 40751" d="M109.754,288.645c3.553-1.038,14.423-1.793,27.288-1.793s23.736.755,27.288,1.793c.8-.233,1.228-.479,1.228-.735,0-1.4-12.767-2.528-28.517-2.528s-28.517,1.132-28.517,2.528c0,.256.432.5,1.229.735" transform="translate(-29.178 -76.728)" fill="#e38601" />
                                                <path id="Path_40752" data-name="Path 40752" d="M89.968,276.352v8.676c0,3.008,16.06,5.445,35.871,5.445s35.871-2.438,35.871-5.445v-8.676Z" transform="translate(-24.189 -74.3)" fill="#fd9f00" />
                                            </g>
                                        </g>
                                        <g id="Group_16980" data-name="Group 16980" transform="translate(4571.78 3844.053)">
                                            <g id="Group_16979" data-name="Group 16979" transform="translate(0 0)" clip-path="url(#clip-path-26)">
                                                <rect id="Rectangle_15554" data-name="Rectangle 15554" width="1.698" height="19.888" transform="translate(0.785 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15555" data-name="Rectangle 15555" width="1.698" height="19.888" transform="translate(5.188 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15556" data-name="Rectangle 15556" width="1.698" height="19.888" transform="translate(10.215 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15557" data-name="Rectangle 15557" width="1.698" height="19.888" transform="translate(16.488 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15558" data-name="Rectangle 15558" width="1.698" height="19.888" transform="translate(23.383 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15559" data-name="Rectangle 15559" width="1.699" height="19.888" transform="translate(30.902 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15560" data-name="Rectangle 15560" width="1.698" height="19.888" transform="translate(69.258 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15561" data-name="Rectangle 15561" width="1.698" height="19.888" transform="translate(64.855 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15562" data-name="Rectangle 15562" width="1.698" height="19.888" transform="translate(59.828 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15563" data-name="Rectangle 15563" width="1.698" height="19.888" transform="translate(53.555 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15564" data-name="Rectangle 15564" width="1.698" height="19.888" transform="translate(46.659 -3.604)" fill="#e38601" />
                                                <rect id="Rectangle_15565" data-name="Rectangle 15565" width="1.698" height="19.888" transform="translate(39.141 -3.604)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_16999" data-name="Group 16999" transform="translate(4506 3642)">
                                            <g id="Group_16998" data-name="Group 16998" clip-path="url(#clip-path)">
                                                <path id="Path_40754" data-name="Path 40754" d="M161.712,274.127c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-24.189 -72.237)" fill="#fac61b" />
                                                <path id="Path_40755" data-name="Path 40755" d="M157.06,274.418c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.131-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.132,28.517,2.528" transform="translate(-26.893 -73.1)" fill="#fd9f00" />
                                                <path id="Path_40756" data-name="Path 40756" d="M101.256,275.152c3.553-1.038,14.423-1.793,27.288-1.793s23.735.755,27.288,1.793c.8-.233,1.229-.48,1.229-.736,0-1.4-12.768-2.528-28.517-2.528s-28.517,1.132-28.517,2.528c0,.256.432.5,1.228.736" transform="translate(-26.893 -73.1)" fill="#e38601" />
                                                <g id="Group_16997" data-name="Group 16997" transform="translate(65.07 196.444)" opacity="0.2" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_16996" data-name="Group 16996">
                                                        <g id="Group_16995" data-name="Group 16995" clip-path="url(#clip-path-28)">
                                                            <path id="Path_40757" data-name="Path 40757" d="M96.389,357.386v8.676c0,3.007,16.06,5.446,35.871,5.446s35.871-2.439,35.871-5.446v-8.676Z" transform="translate(-90.985 -292.531)" />
                                                            <path id="Path_40758" data-name="Path 40758" d="M96.389,357.386v8.676c0,3.007,16.06,5.446,35.871,5.446s35.871-2.439,35.871-5.446v-8.676Z" transform="translate(-90.985 -292.531)" />
                                                            <g id="Group_16982" data-name="Group 16982" transform="translate(5.404 64.855)">
                                                                <g id="Group_16981" data-name="Group 16981" clip-path="url(#clip-path-29)">
                                                                    <rect id="Rectangle_15566" data-name="Rectangle 15566" width="1.698" height="19.889" transform="translate(0.785 -3.603)" />
                                                                    <rect id="Rectangle_15567" data-name="Rectangle 15567" width="1.698" height="19.889" transform="translate(5.189 -3.603)" />
                                                                    <rect id="Rectangle_15568" data-name="Rectangle 15568" width="1.698" height="19.889" transform="translate(10.216 -3.603)" />
                                                                    <rect id="Rectangle_15569" data-name="Rectangle 15569" width="1.699" height="19.889" transform="translate(16.489 -3.603)" />
                                                                    <rect id="Rectangle_15570" data-name="Rectangle 15570" width="1.698" height="19.889" transform="translate(23.385 -3.603)" />
                                                                    <rect id="Rectangle_15571" data-name="Rectangle 15571" width="1.699" height="19.889" transform="translate(30.903 -3.603)" />
                                                                    <rect id="Rectangle_15572" data-name="Rectangle 15572" width="1.698" height="19.889" transform="translate(69.26 -3.603)" />
                                                                    <rect id="Rectangle_15573" data-name="Rectangle 15573" width="1.698" height="19.889" transform="translate(64.856 -3.603)" />
                                                                    <rect id="Rectangle_15574" data-name="Rectangle 15574" width="1.699" height="19.889" transform="translate(59.829 -3.603)" />
                                                                    <rect id="Rectangle_15575" data-name="Rectangle 15575" width="1.698" height="19.889" transform="translate(53.556 -3.603)" />
                                                                    <rect id="Rectangle_15576" data-name="Rectangle 15576" width="1.699" height="19.889" transform="translate(46.66 -3.603)" />
                                                                    <rect id="Rectangle_15577" data-name="Rectangle 15577" width="1.698" height="19.889" transform="translate(39.142 -3.603)" />
                                                                </g>
                                                            </g>
                                                            <path id="Path_40760" data-name="Path 40760" d="M168.132,355.162c0,3.008-16.06,5.446-35.871,5.446S96.39,358.17,96.39,355.162s16.06-5.446,35.871-5.446,35.871,2.439,35.871,5.446" transform="translate(-90.986 -290.469)" />
                                                            <path id="Path_40761" data-name="Path 40761" d="M163.482,355.452c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.132-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.132,28.517,2.528" transform="translate(-93.69 -291.331)" />
                                                            <path id="Path_40762" data-name="Path 40762" d="M107.677,356.186c3.553-1.037,14.423-1.793,27.288-1.793s23.736.755,27.288,1.793c.8-.232,1.228-.48,1.228-.735,0-1.4-12.767-2.528-28.517-2.528s-28.516,1.132-28.516,2.528c0,.255.432.5,1.228.735" transform="translate(-93.69 -291.331)" />
                                                            <path id="Path_40763" data-name="Path 40763" d="M89.284,343.982v8.676c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-89.075 -288.927)" />
                                                            <path id="Path_40764" data-name="Path 40764" d="M89.284,343.982v8.676c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-89.075 -288.927)" />
                                                            <g id="Group_16984" data-name="Group 16984" transform="translate(0.209 55.055)">
                                                                <g id="Group_16983" data-name="Group 16983" clip-path="url(#clip-path-30)">
                                                                    <rect id="Rectangle_15578" data-name="Rectangle 15578" width="1.698" height="19.888" transform="translate(0.785 -3.603)" />
                                                                    <rect id="Rectangle_15579" data-name="Rectangle 15579" width="1.698" height="19.888" transform="translate(5.189 -3.603)" />
                                                                    <rect id="Rectangle_15580" data-name="Rectangle 15580" width="1.698" height="19.888" transform="translate(10.215 -3.603)" />
                                                                    <rect id="Rectangle_15581" data-name="Rectangle 15581" width="1.698" height="19.888" transform="translate(16.489 -3.603)" />
                                                                    <rect id="Rectangle_15582" data-name="Rectangle 15582" width="1.698" height="19.888" transform="translate(23.384 -3.603)" />
                                                                    <rect id="Rectangle_15583" data-name="Rectangle 15583" width="1.699" height="19.888" transform="translate(30.902 -3.603)" />
                                                                    <rect id="Rectangle_15584" data-name="Rectangle 15584" width="1.698" height="19.888" transform="translate(69.26 -3.603)" />
                                                                    <rect id="Rectangle_15585" data-name="Rectangle 15585" width="1.698" height="19.888" transform="translate(64.856 -3.603)" />
                                                                    <rect id="Rectangle_15586" data-name="Rectangle 15586" width="1.698" height="19.888" transform="translate(59.829 -3.603)" />
                                                                    <rect id="Rectangle_15587" data-name="Rectangle 15587" width="1.698" height="19.888" transform="translate(53.556 -3.603)" />
                                                                    <rect id="Rectangle_15588" data-name="Rectangle 15588" width="1.698" height="19.888" transform="translate(46.66 -3.603)" />
                                                                    <rect id="Rectangle_15589" data-name="Rectangle 15589" width="1.698" height="19.888" transform="translate(39.142 -3.603)" />
                                                                </g>
                                                            </g>
                                                            <path id="Path_40766" data-name="Path 40766" d="M161.026,341.758c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-89.075 -286.865)" />
                                                            <path id="Path_40767" data-name="Path 40767" d="M156.376,342.048c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.132-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.131,28.517,2.528" transform="translate(-91.779 -287.727)" />
                                                            <path id="Path_40768" data-name="Path 40768" d="M100.572,342.782c3.552-1.038,14.423-1.793,27.288-1.793s23.736.755,27.288,1.793c.8-.233,1.228-.48,1.228-.736,0-1.4-12.767-2.528-28.517-2.528s-28.517,1.132-28.517,2.528c0,.256.432.5,1.229.736" transform="translate(-91.779 -287.727)" />
                                                            <path id="Path_40769" data-name="Path 40769" d="M97.256,330.49v8.676c0,3.008,16.06,5.446,35.871,5.446S169,342.174,169,339.166V330.49Z" transform="translate(-91.218 -285.3)" />
                                                            <path id="Path_40770" data-name="Path 40770" d="M97.256,330.49v8.676c0,3.008,16.06,5.446,35.871,5.446S169,342.174,169,339.166V330.49Z" transform="translate(-91.218 -285.3)" />
                                                            <g id="Group_16986" data-name="Group 16986" transform="translate(6.038 45.19)">
                                                                <g id="Group_16985" data-name="Group 16985" clip-path="url(#clip-path-31)">
                                                                    <rect id="Rectangle_15590" data-name="Rectangle 15590" width="1.698" height="19.888" transform="translate(0.785 -3.604)" />
                                                                    <rect id="Rectangle_15591" data-name="Rectangle 15591" width="1.698" height="19.888" transform="translate(5.188 -3.604)" />
                                                                    <rect id="Rectangle_15592" data-name="Rectangle 15592" width="1.698" height="19.888" transform="translate(10.215 -3.604)" />
                                                                    <rect id="Rectangle_15593" data-name="Rectangle 15593" width="1.699" height="19.888" transform="translate(16.488 -3.604)" />
                                                                    <rect id="Rectangle_15594" data-name="Rectangle 15594" width="1.699" height="19.888" transform="translate(23.384 -3.604)" />
                                                                    <rect id="Rectangle_15595" data-name="Rectangle 15595" width="1.698" height="19.888" transform="translate(30.902 -3.604)" />
                                                                    <rect id="Rectangle_15596" data-name="Rectangle 15596" width="1.698" height="19.888" transform="translate(69.259 -3.604)" />
                                                                    <rect id="Rectangle_15597" data-name="Rectangle 15597" width="1.698" height="19.888" transform="translate(64.856 -3.604)" />
                                                                    <rect id="Rectangle_15598" data-name="Rectangle 15598" width="1.698" height="19.888" transform="translate(59.829 -3.604)" />
                                                                    <rect id="Rectangle_15599" data-name="Rectangle 15599" width="1.699" height="19.888" transform="translate(53.556 -3.604)" />
                                                                    <rect id="Rectangle_15600" data-name="Rectangle 15600" width="1.698" height="19.888" transform="translate(46.66 -3.604)" />
                                                                    <rect id="Rectangle_15601" data-name="Rectangle 15601" width="1.698" height="19.888" transform="translate(39.142 -3.604)" />
                                                                </g>
                                                            </g>
                                                            <path id="Path_40772" data-name="Path 40772" d="M169,328.265c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446S169,325.257,169,328.265" transform="translate(-91.218 -283.237)" />
                                                            <path id="Path_40773" data-name="Path 40773" d="M164.348,328.555c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.131-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.131,28.517,2.528" transform="translate(-93.923 -284.1)" />
                                                            <path id="Path_40774" data-name="Path 40774" d="M108.543,329.29c3.552-1.038,14.423-1.793,27.288-1.793s23.736.755,27.288,1.793c.8-.233,1.228-.48,1.228-.736,0-1.4-12.767-2.528-28.517-2.528s-28.517,1.132-28.517,2.528c0,.256.432.5,1.229.736" transform="translate(-93.923 -284.1)" />
                                                            <path id="Path_40775" data-name="Path 40775" d="M100.708,316.826V325.5c0,3.007,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-92.146 -281.626)" />
                                                            <path id="Path_40776" data-name="Path 40776" d="M100.708,316.826V325.5c0,3.007,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-92.146 -281.626)" />
                                                            <g id="Group_16988" data-name="Group 16988" transform="translate(8.562 35.2)">
                                                                <g id="Group_16987" data-name="Group 16987" clip-path="url(#clip-path-32)">
                                                                    <rect id="Rectangle_15602" data-name="Rectangle 15602" width="1.698" height="19.888" transform="translate(0.785 -3.603)" />
                                                                    <rect id="Rectangle_15603" data-name="Rectangle 15603" width="1.698" height="19.888" transform="translate(5.188 -3.603)" />
                                                                    <rect id="Rectangle_15604" data-name="Rectangle 15604" width="1.699" height="19.888" transform="translate(10.215 -3.603)" />
                                                                    <rect id="Rectangle_15605" data-name="Rectangle 15605" width="1.698" height="19.888" transform="translate(16.488 -3.603)" />
                                                                    <rect id="Rectangle_15606" data-name="Rectangle 15606" width="1.698" height="19.888" transform="translate(23.384 -3.603)" />
                                                                    <rect id="Rectangle_15607" data-name="Rectangle 15607" width="1.699" height="19.888" transform="translate(30.902 -3.603)" />
                                                                    <rect id="Rectangle_15608" data-name="Rectangle 15608" width="1.699" height="19.888" transform="translate(69.259 -3.603)" />
                                                                    <rect id="Rectangle_15609" data-name="Rectangle 15609" width="1.699" height="19.888" transform="translate(64.855 -3.603)" />
                                                                    <rect id="Rectangle_15610" data-name="Rectangle 15610" width="1.698" height="19.888" transform="translate(59.829 -3.603)" />
                                                                    <rect id="Rectangle_15611" data-name="Rectangle 15611" width="1.698" height="19.888" transform="translate(53.556 -3.603)" />
                                                                    <rect id="Rectangle_15612" data-name="Rectangle 15612" width="1.698" height="19.888" transform="translate(46.66 -3.603)" />
                                                                    <rect id="Rectangle_15613" data-name="Rectangle 15613" width="1.698" height="19.888" transform="translate(39.142 -3.603)" />
                                                                </g>
                                                            </g>
                                                            <path id="Path_40778" data-name="Path 40778" d="M172.45,314.6c0,3.007-16.06,5.446-35.871,5.446s-35.871-2.439-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-92.146 -279.564)" />
                                                            <path id="Path_40779" data-name="Path 40779" d="M167.8,314.891c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.131-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.132,28.517,2.528" transform="translate(-94.851 -280.426)" />
                                                            <path id="Path_40780" data-name="Path 40780" d="M112,315.626c3.553-1.038,14.423-1.793,27.288-1.793s23.735.755,27.288,1.793c.8-.233,1.228-.48,1.228-.735,0-1.4-12.767-2.528-28.516-2.528s-28.517,1.132-28.517,2.528c0,.255.432.5,1.228.735" transform="translate(-94.851 -280.426)" />
                                                            <path id="Path_40781" data-name="Path 40781" d="M89,303.338v8.676c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-88.998 -278)" />
                                                            <path id="Path_40782" data-name="Path 40782" d="M89,303.338v8.676c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-88.998 -278)" />
                                                            <g id="Group_16990" data-name="Group 16990" transform="translate(0 25.338)">
                                                                <g id="Group_16989" data-name="Group 16989" clip-path="url(#clip-path-33)">
                                                                    <rect id="Rectangle_15614" data-name="Rectangle 15614" width="1.698" height="19.888" transform="translate(0.785 -3.603)" />
                                                                    <rect id="Rectangle_15615" data-name="Rectangle 15615" width="1.698" height="19.888" transform="translate(5.189 -3.603)" />
                                                                    <rect id="Rectangle_15616" data-name="Rectangle 15616" width="1.698" height="19.888" transform="translate(10.215 -3.603)" />
                                                                    <rect id="Rectangle_15617" data-name="Rectangle 15617" width="1.698" height="19.888" transform="translate(16.489 -3.603)" />
                                                                    <rect id="Rectangle_15618" data-name="Rectangle 15618" width="1.699" height="19.888" transform="translate(23.384 -3.603)" />
                                                                    <rect id="Rectangle_15619" data-name="Rectangle 15619" width="1.698" height="19.888" transform="translate(30.903 -3.603)" />
                                                                    <rect id="Rectangle_15620" data-name="Rectangle 15620" width="1.698" height="19.888" transform="translate(69.26 -3.603)" />
                                                                    <rect id="Rectangle_15621" data-name="Rectangle 15621" width="1.698" height="19.888" transform="translate(64.856 -3.603)" />
                                                                    <rect id="Rectangle_15622" data-name="Rectangle 15622" width="1.698" height="19.888" transform="translate(59.829 -3.603)" />
                                                                    <rect id="Rectangle_15623" data-name="Rectangle 15623" width="1.698" height="19.888" transform="translate(53.556 -3.603)" />
                                                                    <rect id="Rectangle_15624" data-name="Rectangle 15624" width="1.698" height="19.888" transform="translate(46.66 -3.603)" />
                                                                    <rect id="Rectangle_15625" data-name="Rectangle 15625" width="1.699" height="19.888" transform="translate(39.142 -3.603)" />
                                                                </g>
                                                            </g>
                                                            <path id="Path_40784" data-name="Path 40784" d="M160.741,301.113c0,3.008-16.06,5.446-35.871,5.446S89,304.121,89,301.113s16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-88.998 -275.937)" />
                                                            <path id="Path_40785" data-name="Path 40785" d="M156.09,301.4c0,1.4-12.767,2.528-28.517,2.528S99.057,302.8,99.057,301.4s12.767-2.528,28.517-2.528,28.517,1.131,28.517,2.528" transform="translate(-91.703 -276.8)" />
                                                            <path id="Path_40786" data-name="Path 40786" d="M100.286,302.138c3.553-1.037,14.423-1.793,27.288-1.793s23.735.755,27.288,1.793c.8-.232,1.228-.48,1.228-.735,0-1.4-12.767-2.528-28.516-2.528s-28.517,1.131-28.517,2.528c0,.255.432.5,1.228.735" transform="translate(-91.703 -276.8)" />
                                                            <path id="Path_40787" data-name="Path 40787" d="M98.466,289.845v8.676c0,3.007,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-91.544 -274.372)" />
                                                            <path id="Path_40788" data-name="Path 40788" d="M98.466,289.845v8.676c0,3.007,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446v-8.676Z" transform="translate(-91.544 -274.372)" />
                                                            <g id="Group_16992" data-name="Group 16992" transform="translate(6.922 15.473)">
                                                                <g id="Group_16991" data-name="Group 16991" clip-path="url(#clip-path-34)">
                                                                    <rect id="Rectangle_15626" data-name="Rectangle 15626" width="1.698" height="19.888" transform="translate(0.785 -3.603)" />
                                                                    <rect id="Rectangle_15627" data-name="Rectangle 15627" width="1.698" height="19.888" transform="translate(5.189 -3.603)" />
                                                                    <rect id="Rectangle_15628" data-name="Rectangle 15628" width="1.698" height="19.888" transform="translate(10.215 -3.603)" />
                                                                    <rect id="Rectangle_15629" data-name="Rectangle 15629" width="1.698" height="19.888" transform="translate(16.489 -3.603)" />
                                                                    <rect id="Rectangle_15630" data-name="Rectangle 15630" width="1.698" height="19.888" transform="translate(23.384 -3.603)" />
                                                                    <rect id="Rectangle_15631" data-name="Rectangle 15631" width="1.698" height="19.888" transform="translate(30.903 -3.603)" />
                                                                    <rect id="Rectangle_15632" data-name="Rectangle 15632" width="1.698" height="19.888" transform="translate(69.26 -3.603)" />
                                                                    <rect id="Rectangle_15633" data-name="Rectangle 15633" width="1.699" height="19.888" transform="translate(64.856 -3.603)" />
                                                                    <rect id="Rectangle_15634" data-name="Rectangle 15634" width="1.698" height="19.888" transform="translate(59.829 -3.603)" />
                                                                    <rect id="Rectangle_15635" data-name="Rectangle 15635" width="1.698" height="19.888" transform="translate(53.556 -3.603)" />
                                                                    <rect id="Rectangle_15636" data-name="Rectangle 15636" width="1.698" height="19.888" transform="translate(46.66 -3.603)" />
                                                                    <rect id="Rectangle_15637" data-name="Rectangle 15637" width="1.698" height="19.888" transform="translate(39.142 -3.603)" />
                                                                </g>
                                                            </g>
                                                            <path id="Path_40790" data-name="Path 40790" d="M170.209,287.621c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-91.544 -272.31)" />
                                                            <path id="Path_40791" data-name="Path 40791" d="M165.558,287.911c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.132-28.517-2.528,12.768-2.528,28.517-2.528,28.517,1.132,28.517,2.528" transform="translate(-94.248 -273.172)" />
                                                            <path id="Path_40792" data-name="Path 40792" d="M109.754,288.645c3.553-1.038,14.423-1.793,27.288-1.793s23.736.755,27.288,1.793c.8-.233,1.228-.479,1.228-.735,0-1.4-12.767-2.528-28.517-2.528s-28.517,1.132-28.517,2.528c0,.256.432.5,1.229.735" transform="translate(-94.248 -273.172)" />
                                                            <path id="Path_40793" data-name="Path 40793" d="M89.968,276.352v8.676c0,3.008,16.06,5.445,35.871,5.445s35.871-2.438,35.871-5.445v-8.676Z" transform="translate(-89.259 -270.744)" />
                                                            <path id="Path_40794" data-name="Path 40794" d="M89.968,276.352v8.676c0,3.008,16.06,5.445,35.871,5.445s35.871-2.438,35.871-5.445v-8.676Z" transform="translate(-89.259 -270.744)" />
                                                            <g id="Group_16994" data-name="Group 16994" transform="translate(0.709 5.608)">
                                                                <g id="Group_16993" data-name="Group 16993" clip-path="url(#clip-path-35)">
                                                                    <rect id="Rectangle_15638" data-name="Rectangle 15638" width="1.698" height="19.888" transform="translate(0.785 -3.603)" />
                                                                    <rect id="Rectangle_15639" data-name="Rectangle 15639" width="1.698" height="19.888" transform="translate(5.189 -3.603)" />
                                                                    <rect id="Rectangle_15640" data-name="Rectangle 15640" width="1.698" height="19.888" transform="translate(10.215 -3.603)" />
                                                                    <rect id="Rectangle_15641" data-name="Rectangle 15641" width="1.698" height="19.888" transform="translate(16.489 -3.603)" />
                                                                    <rect id="Rectangle_15642" data-name="Rectangle 15642" width="1.698" height="19.888" transform="translate(23.384 -3.603)" />
                                                                    <rect id="Rectangle_15643" data-name="Rectangle 15643" width="1.699" height="19.888" transform="translate(30.903 -3.603)" />
                                                                    <rect id="Rectangle_15644" data-name="Rectangle 15644" width="1.698" height="19.888" transform="translate(69.259 -3.603)" />
                                                                    <rect id="Rectangle_15645" data-name="Rectangle 15645" width="1.698" height="19.888" transform="translate(64.856 -3.603)" />
                                                                    <rect id="Rectangle_15646" data-name="Rectangle 15646" width="1.698" height="19.888" transform="translate(59.829 -3.603)" />
                                                                    <rect id="Rectangle_15647" data-name="Rectangle 15647" width="1.698" height="19.888" transform="translate(53.556 -3.603)" />
                                                                    <rect id="Rectangle_15648" data-name="Rectangle 15648" width="1.698" height="19.888" transform="translate(46.66 -3.603)" />
                                                                    <rect id="Rectangle_15649" data-name="Rectangle 15649" width="1.698" height="19.888" transform="translate(39.142 -3.603)" />
                                                                </g>
                                                            </g>
                                                            <path id="Path_40796" data-name="Path 40796" d="M161.712,274.127c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-89.259 -268.682)" />
                                                            <path id="Path_40797" data-name="Path 40797" d="M157.06,274.418c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.131-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.132,28.517,2.528" transform="translate(-91.963 -269.545)" />
                                                            <path id="Path_40798" data-name="Path 40798" d="M101.256,275.152c3.553-1.038,14.423-1.793,27.288-1.793s23.735.755,27.288,1.793c.8-.233,1.229-.48,1.229-.736,0-1.4-12.768-2.528-28.517-2.528s-28.517,1.132-28.517,2.528c0,.256.432.5,1.228.736" transform="translate(-91.964 -269.544)" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <path id="Path_40799" data-name="Path 40799" d="M112.321,363.882v8.676c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446v-8.676Z" transform="translate(-10.91 -97.833)" fill="#ffb127" />
                                            </g>
                                        </g>
                                        <g id="Group_17001" data-name="Group 17001" transform="translate(4535.669 3908.049)">
                                            <g id="Group_17000" data-name="Group 17000" transform="translate(0 0)" clip-path="url(#clip-path-36)">
                                                <rect id="Rectangle_15652" data-name="Rectangle 15652" width="1.698" height="19.888" transform="translate(69.26 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15653" data-name="Rectangle 15653" width="1.698" height="19.888" transform="translate(64.856 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15654" data-name="Rectangle 15654" width="1.698" height="19.888" transform="translate(59.829 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15655" data-name="Rectangle 15655" width="1.698" height="19.888" transform="translate(53.556 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15656" data-name="Rectangle 15656" width="1.698" height="19.888" transform="translate(46.66 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15657" data-name="Rectangle 15657" width="1.699" height="19.888" transform="translate(39.141 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15658" data-name="Rectangle 15658" width="1.698" height="19.888" transform="translate(0.785 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15659" data-name="Rectangle 15659" width="1.698" height="19.888" transform="translate(5.189 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15660" data-name="Rectangle 15660" width="1.698" height="19.888" transform="translate(10.216 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15661" data-name="Rectangle 15661" width="1.698" height="19.888" transform="translate(16.489 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15662" data-name="Rectangle 15662" width="1.699" height="19.888" transform="translate(23.384 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15663" data-name="Rectangle 15663" width="1.698" height="19.888" transform="translate(30.903 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17003" data-name="Group 17003" transform="translate(4506 3642)">
                                            <g id="Group_17002" data-name="Group 17002" clip-path="url(#clip-path)">
                                                <path id="Path_40801" data-name="Path 40801" d="M40.579,361.657c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446-16.06-5.446-35.871-5.446-35.871,2.438-35.871,5.446" transform="translate(-10.91 -95.771)" fill="#fac61b" />
                                                <path id="Path_40802" data-name="Path 40802" d="M50.638,361.948c0,1.4,12.767,2.528,28.517,2.528s28.517-1.132,28.517-2.528S94.9,359.42,79.155,359.42s-28.517,1.131-28.517,2.528" transform="translate(-13.614 -96.633)" fill="#fd9f00" />
                                                <path id="Path_40803" data-name="Path 40803" d="M106.443,362.682c-3.553-1.037-14.424-1.793-27.288-1.793s-23.736.755-27.288,1.793c-.8-.232-1.228-.479-1.228-.735,0-1.4,12.767-2.528,28.517-2.528s28.517,1.131,28.517,2.528c0,.256-.433.5-1.229.735" transform="translate(-13.615 -96.633)" fill="#e38601" />
                                                <path id="Path_40804" data-name="Path 40804" d="M119.427,350.478v8.676c0,3.009-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446v-8.676Z" transform="translate(-12.821 -94.229)" fill="#ffb127" />
                                            </g>
                                        </g>
                                        <g id="Group_17005" data-name="Group 17005" transform="translate(4540.864 3898.249)">
                                            <g id="Group_17004" data-name="Group 17004" transform="translate(0 0)" clip-path="url(#clip-path-38)">
                                                <rect id="Rectangle_15665" data-name="Rectangle 15665" width="1.698" height="19.888" transform="translate(69.259 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15666" data-name="Rectangle 15666" width="1.698" height="19.888" transform="translate(64.855 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15667" data-name="Rectangle 15667" width="1.698" height="19.888" transform="translate(59.829 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15668" data-name="Rectangle 15668" width="1.698" height="19.888" transform="translate(53.555 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15669" data-name="Rectangle 15669" width="1.698" height="19.888" transform="translate(46.66 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15670" data-name="Rectangle 15670" width="1.698" height="19.888" transform="translate(39.141 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15671" data-name="Rectangle 15671" width="1.698" height="19.888" transform="translate(0.785 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15672" data-name="Rectangle 15672" width="1.698" height="19.888" transform="translate(5.188 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15673" data-name="Rectangle 15673" width="1.698" height="19.888" transform="translate(10.215 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15674" data-name="Rectangle 15674" width="1.698" height="19.888" transform="translate(16.488 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15675" data-name="Rectangle 15675" width="1.698" height="19.888" transform="translate(23.384 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15676" data-name="Rectangle 15676" width="1.698" height="19.888" transform="translate(30.902 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17007" data-name="Group 17007" transform="translate(4506 3642)">
                                            <g id="Group_17006" data-name="Group 17006" clip-path="url(#clip-path)">
                                                <path id="Path_40806" data-name="Path 40806" d="M47.684,348.253c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446-16.06-5.446-35.871-5.446-35.871,2.438-35.871,5.446" transform="translate(-12.82 -92.167)" fill="#fac61b" />
                                                <path id="Path_40807" data-name="Path 40807" d="M57.743,348.544c0,1.4,12.767,2.528,28.517,2.528s28.517-1.132,28.517-2.528-12.767-2.528-28.517-2.528-28.517,1.131-28.517,2.528" transform="translate(-15.525 -93.03)" fill="#fd9f00" />
                                                <path id="Path_40808" data-name="Path 40808" d="M113.548,349.278c-3.552-1.037-14.423-1.793-27.288-1.793s-23.736.755-27.288,1.793c-.8-.233-1.229-.48-1.229-.736,0-1.4,12.768-2.528,28.517-2.528s28.517,1.132,28.517,2.528c0,.256-.432.5-1.229.736" transform="translate(-15.525 -93.029)" fill="#e38601" />
                                                <path id="Path_40809" data-name="Path 40809" d="M111.455,336.985v8.676c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446v-8.676Z" transform="translate(-10.677 -90.601)" fill="#ffb127" />
                                            </g>
                                        </g>
                                        <g id="Group_17009" data-name="Group 17009" transform="translate(4535.035 3888.383)">
                                            <g id="Group_17008" data-name="Group 17008" transform="translate(0 0)" clip-path="url(#clip-path-40)">
                                                <rect id="Rectangle_15678" data-name="Rectangle 15678" width="1.698" height="19.888" transform="translate(69.26 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15679" data-name="Rectangle 15679" width="1.698" height="19.888" transform="translate(64.856 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15680" data-name="Rectangle 15680" width="1.698" height="19.888" transform="translate(59.829 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15681" data-name="Rectangle 15681" width="1.699" height="19.888" transform="translate(53.556 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15682" data-name="Rectangle 15682" width="1.698" height="19.888" transform="translate(46.661 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15683" data-name="Rectangle 15683" width="1.698" height="19.888" transform="translate(39.142 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15684" data-name="Rectangle 15684" width="1.698" height="19.888" transform="translate(0.786 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15685" data-name="Rectangle 15685" width="1.698" height="19.888" transform="translate(5.189 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15686" data-name="Rectangle 15686" width="1.699" height="19.888" transform="translate(10.215 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15687" data-name="Rectangle 15687" width="1.699" height="19.888" transform="translate(16.488 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15688" data-name="Rectangle 15688" width="1.698" height="19.888" transform="translate(23.385 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15689" data-name="Rectangle 15689" width="1.698" height="19.888" transform="translate(30.903 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17011" data-name="Group 17011" transform="translate(4506 3642)">
                                            <g id="Group_17010" data-name="Group 17010" clip-path="url(#clip-path)">
                                                <path id="Path_40811" data-name="Path 40811" d="M39.713,334.76c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446-16.06-5.446-35.871-5.446-35.871,2.438-35.871,5.446" transform="translate(-10.677 -88.539)" fill="#fac61b" />
                                                <path id="Path_40812" data-name="Path 40812" d="M49.772,335.051c0,1.4,12.768,2.528,28.517,2.528s28.517-1.131,28.517-2.528-12.767-2.528-28.517-2.528-28.517,1.131-28.517,2.528" transform="translate(-13.382 -89.402)" fill="#fd9f00" />
                                                <path id="Path_40813" data-name="Path 40813" d="M105.576,335.785c-3.553-1.037-14.423-1.793-27.288-1.793s-23.735.755-27.288,1.793c-.8-.233-1.228-.48-1.228-.735,0-1.4,12.767-2.528,28.516-2.528s28.517,1.131,28.517,2.528c0,.255-.431.5-1.228.735" transform="translate(-13.382 -89.402)" fill="#e38601" />
                                                <path id="Path_40814" data-name="Path 40814" d="M108,323.321V332c0,3.008-16.06,5.445-35.871,5.445S36.261,335.005,36.261,332v-8.676Z" transform="translate(-9.749 -86.928)" fill="#ffb127" />
                                            </g>
                                        </g>
                                        <g id="Group_17013" data-name="Group 17013" transform="translate(4532.512 3878.394)">
                                            <g id="Group_17012" data-name="Group 17012" transform="translate(0 0)" clip-path="url(#clip-path-42)">
                                                <rect id="Rectangle_15691" data-name="Rectangle 15691" width="1.698" height="19.889" transform="translate(69.259 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15692" data-name="Rectangle 15692" width="1.698" height="19.889" transform="translate(64.855 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15693" data-name="Rectangle 15693" width="1.698" height="19.889" transform="translate(59.829 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15694" data-name="Rectangle 15694" width="1.698" height="19.889" transform="translate(53.556 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15695" data-name="Rectangle 15695" width="1.698" height="19.889" transform="translate(46.66 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15696" data-name="Rectangle 15696" width="1.699" height="19.889" transform="translate(39.141 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15697" data-name="Rectangle 15697" width="1.698" height="19.889" transform="translate(0.785 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15698" data-name="Rectangle 15698" width="1.699" height="19.889" transform="translate(5.188 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15699" data-name="Rectangle 15699" width="1.698" height="19.889" transform="translate(10.215 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15700" data-name="Rectangle 15700" width="1.698" height="19.889" transform="translate(16.488 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15701" data-name="Rectangle 15701" width="1.698" height="19.889" transform="translate(23.384 -3.605)" fill="#e38601" />
                                                <rect id="Rectangle_15702" data-name="Rectangle 15702" width="1.698" height="19.889" transform="translate(30.902 -3.605)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17015" data-name="Group 17015" transform="translate(4506 3642)">
                                            <g id="Group_17014" data-name="Group 17014" clip-path="url(#clip-path)">
                                                <path id="Path_40816" data-name="Path 40816" d="M36.261,321.1c0,3.007,16.06,5.446,35.871,5.446S108,324.1,108,321.1s-16.06-5.446-35.871-5.446-35.871,2.438-35.871,5.446" transform="translate(-9.749 -84.866)" fill="#fac61b" />
                                                <path id="Path_40817" data-name="Path 40817" d="M46.32,321.387c0,1.4,12.767,2.528,28.517,2.528s28.517-1.132,28.517-2.528-12.768-2.528-28.517-2.528-28.517,1.132-28.517,2.528" transform="translate(-12.454 -85.728)" fill="#fd9f00" />
                                                <path id="Path_40818" data-name="Path 40818" d="M102.125,322.121c-3.553-1.038-14.424-1.793-27.289-1.793s-23.736.755-27.287,1.793c-.8-.233-1.228-.479-1.228-.735,0-1.4,12.766-2.528,28.515-2.528s28.517,1.132,28.517,2.528c0,.256-.432.5-1.228.735" transform="translate(-12.454 -85.728)" fill="#e38601" />
                                                <path id="Path_40819" data-name="Path 40819" d="M119.713,309.834v8.676c0,3.008-16.06,5.445-35.871,5.445s-35.871-2.438-35.871-5.445v-8.676Z" transform="translate(-12.897 -83.302)" fill="#ffb127" />
                                            </g>
                                        </g>
                                        <g id="Group_17017" data-name="Group 17017" transform="translate(4541.073 3868.532)">
                                            <g id="Group_17016" data-name="Group 17016" transform="translate(0 0)" clip-path="url(#clip-path-44)">
                                                <rect id="Rectangle_15704" data-name="Rectangle 15704" width="1.698" height="19.888" transform="translate(69.26 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15705" data-name="Rectangle 15705" width="1.698" height="19.888" transform="translate(64.856 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15706" data-name="Rectangle 15706" width="1.698" height="19.888" transform="translate(59.829 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15707" data-name="Rectangle 15707" width="1.698" height="19.888" transform="translate(53.556 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15708" data-name="Rectangle 15708" width="1.698" height="19.888" transform="translate(46.66 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15709" data-name="Rectangle 15709" width="1.698" height="19.888" transform="translate(39.142 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15710" data-name="Rectangle 15710" width="1.698" height="19.888" transform="translate(0.785 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15711" data-name="Rectangle 15711" width="1.699" height="19.888" transform="translate(5.188 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15712" data-name="Rectangle 15712" width="1.699" height="19.888" transform="translate(10.215 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15713" data-name="Rectangle 15713" width="1.698" height="19.888" transform="translate(16.489 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15714" data-name="Rectangle 15714" width="1.698" height="19.888" transform="translate(23.384 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15715" data-name="Rectangle 15715" width="1.699" height="19.888" transform="translate(30.902 -3.602)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17019" data-name="Group 17019" transform="translate(4506 3642)">
                                            <g id="Group_17018" data-name="Group 17018" clip-path="url(#clip-path)">
                                                <path id="Path_40821" data-name="Path 40821" d="M47.97,307.609c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446-16.06-5.446-35.871-5.446S47.97,304.6,47.97,307.609" transform="translate(-12.897 -81.239)" fill="#fac61b" />
                                                <path id="Path_40822" data-name="Path 40822" d="M58.029,307.9c0,1.4,12.767,2.528,28.517,2.528s28.517-1.132,28.517-2.528-12.767-2.528-28.517-2.528S58.029,306.5,58.029,307.9" transform="translate(-15.602 -82.102)" fill="#fd9f00" />
                                                <path id="Path_40823" data-name="Path 40823" d="M113.834,308.634c-3.552-1.038-14.423-1.793-27.288-1.793s-23.735.755-27.288,1.793c-.8-.233-1.228-.48-1.228-.735,0-1.4,12.767-2.528,28.516-2.528s28.517,1.132,28.517,2.528c0,.255-.432.5-1.228.735" transform="translate(-15.602 -82.102)" fill="#e38601" />
                                                <path id="Path_40824" data-name="Path 40824" d="M110.244,296.341v8.676c0,3.007-16.06,5.446-35.871,5.446S38.5,308.025,38.5,305.017v-8.676Z" transform="translate(-10.352 -79.674)" fill="#ffb127" />
                                            </g>
                                        </g>
                                        <g id="Group_17021" data-name="Group 17021" transform="translate(4534.151 3858.667)">
                                            <g id="Group_17020" data-name="Group 17020" transform="translate(0 0)" clip-path="url(#clip-path-46)">
                                                <rect id="Rectangle_15717" data-name="Rectangle 15717" width="1.699" height="19.888" transform="translate(69.259 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15718" data-name="Rectangle 15718" width="1.698" height="19.888" transform="translate(64.856 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15719" data-name="Rectangle 15719" width="1.698" height="19.888" transform="translate(59.829 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15720" data-name="Rectangle 15720" width="1.698" height="19.888" transform="translate(53.556 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15721" data-name="Rectangle 15721" width="1.698" height="19.888" transform="translate(46.66 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15722" data-name="Rectangle 15722" width="1.698" height="19.888" transform="translate(39.142 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15723" data-name="Rectangle 15723" width="1.698" height="19.888" transform="translate(0.785 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15724" data-name="Rectangle 15724" width="1.698" height="19.888" transform="translate(5.189 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15725" data-name="Rectangle 15725" width="1.698" height="19.888" transform="translate(10.215 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15726" data-name="Rectangle 15726" width="1.698" height="19.888" transform="translate(16.488 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15727" data-name="Rectangle 15727" width="1.698" height="19.888" transform="translate(23.384 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15728" data-name="Rectangle 15728" width="1.698" height="19.888" transform="translate(30.902 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17023" data-name="Group 17023" transform="translate(4506 3642)">
                                            <g id="Group_17022" data-name="Group 17022" clip-path="url(#clip-path)">
                                                <path id="Path_40826" data-name="Path 40826" d="M38.5,294.116c0,3.008,16.06,5.446,35.871,5.446s35.871-2.438,35.871-5.446-16.06-5.446-35.871-5.446S38.5,291.108,38.5,294.116" transform="translate(-10.352 -77.612)" fill="#fac61b" />
                                                <path id="Path_40827" data-name="Path 40827" d="M48.562,294.406c0,1.4,12.767,2.528,28.517,2.528S105.6,295.8,105.6,294.406s-12.768-2.527-28.517-2.527-28.517,1.131-28.517,2.527" transform="translate(-13.056 -78.474)" fill="#fd9f00" />
                                                <path id="Path_40828" data-name="Path 40828" d="M104.366,295.141c-3.553-1.037-14.423-1.793-27.288-1.793s-23.736.755-27.288,1.793c-.8-.232-1.228-.479-1.228-.735,0-1.4,12.767-2.528,28.517-2.528s28.517,1.131,28.517,2.528c0,.256-.432.5-1.229.735" transform="translate(-13.056 -78.474)" fill="#e38601" />
                                                <path id="Path_40829" data-name="Path 40829" d="M118.743,282.848v8.676c0,3.008-16.06,5.446-35.871,5.446S47,294.532,47,291.524v-8.676Z" transform="translate(-12.637 -76.046)" fill="#ffb127" />
                                            </g>
                                        </g>
                                        <g id="Group_17025" data-name="Group 17025" transform="translate(4540.364 3848.802)">
                                            <g id="Group_17024" data-name="Group 17024" transform="translate(0 0)" clip-path="url(#clip-path-48)">
                                                <rect id="Rectangle_15730" data-name="Rectangle 15730" width="1.698" height="19.888" transform="translate(69.259 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15731" data-name="Rectangle 15731" width="1.699" height="19.888" transform="translate(64.854 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15732" data-name="Rectangle 15732" width="1.699" height="19.888" transform="translate(59.828 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15733" data-name="Rectangle 15733" width="1.698" height="19.888" transform="translate(53.555 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15734" data-name="Rectangle 15734" width="1.698" height="19.888" transform="translate(46.659 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15735" data-name="Rectangle 15735" width="1.698" height="19.888" transform="translate(39.141 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15736" data-name="Rectangle 15736" width="1.698" height="19.888" transform="translate(0.785 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15737" data-name="Rectangle 15737" width="1.699" height="19.888" transform="translate(5.187 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15738" data-name="Rectangle 15738" width="1.698" height="19.888" transform="translate(10.215 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15739" data-name="Rectangle 15739" width="1.698" height="19.888" transform="translate(16.488 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15740" data-name="Rectangle 15740" width="1.698" height="19.888" transform="translate(23.383 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15741" data-name="Rectangle 15741" width="1.698" height="19.888" transform="translate(30.902 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17030" data-name="Group 17030" transform="translate(4506 3642)">
                                            <g id="Group_17029" data-name="Group 17029" clip-path="url(#clip-path)">
                                                <path id="Path_40831" data-name="Path 40831" d="M47,280.623c0,3.007,16.06,5.446,35.871,5.446s35.871-2.439,35.871-5.446-16.06-5.446-35.871-5.446S47,277.615,47,280.623" transform="translate(-12.636 -73.984)" fill="#fac61b" />
                                                <path id="Path_40832" data-name="Path 40832" d="M57.06,280.914c0,1.4,12.767,2.528,28.517,2.528s28.517-1.132,28.517-2.528-12.767-2.528-28.517-2.528-28.517,1.132-28.517,2.528" transform="translate(-15.341 -74.847)" fill="#ffb127" />
                                                <path id="Path_40833" data-name="Path 40833" d="M112.864,281.648c-3.552-1.038-14.423-1.793-27.288-1.793s-23.736.755-27.288,1.793c-.8-.233-1.228-.48-1.228-.735,0-1.4,12.767-2.528,28.517-2.528s28.516,1.132,28.516,2.528c0,.255-.432.5-1.228.735" transform="translate(-15.341 -74.846)" fill="#e38601" />
                                                <g id="Group_17028" data-name="Group 17028" transform="translate(36.68 215.358)" opacity="0.5" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17027" data-name="Group 17027">
                                                        <g id="Group_17026" data-name="Group 17026" clip-path="url(#clip-path-50)">
                                                            <path id="Path_40834" data-name="Path 40834" d="M120.428,361.269q-2.494-1.784-5.05-3.482a22.928,22.928,0,0,0-7.384-3.637c-2.969-.676-6.059-.223-9.1-.124-.694.023-1.4.031-2.115.046a47.881,47.881,0,0,0,3.3-15.033c1-23.177-10.074-38.643-28.547-42.892l-6.949-1.6-14.407,62.6c6.533,1.342,7.651,14.583,12.225,13.667,2.721-.545,13.457-4.674,21.708-7.93a3.581,3.581,0,0,0,.045.4c.491,2.741.511,6.129,3.419,7.212a32.94,32.94,0,0,0,5.52,1.524,7.685,7.685,0,0,0,3.218.08,3.085,3.085,0,0,0,2.316-2.044c.42-1.608-.9-3.077-1.772-4.488a8.366,8.366,0,0,1-1.3-4.515,1.1,1.1,0,0,1,.254-.814,1.192,1.192,0,0,1,.726-.232l6.191-.554a6.2,6.2,0,0,1,2.128.056c1.622.426,2.608,2.044,4.013,2.96.8.518,1.722.806,2.525,1.311,1.2.752,2.067,1.945,3.246,2.729a5.981,5.981,0,0,0,6.091.241,3.14,3.14,0,0,0,1.823-2.744c-.089-1.192-1.144-2.05-2.116-2.745" transform="translate(-50.168 -294.55)" fill="#b5905c" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <path id="Path_40835" data-name="Path 40835" d="M61.864,294.045l-6.949-1.6-17.569,76.4,6.937,1.65c18.474,4.248,37.385-9.422,42.24-30.533s-6.185-41.67-24.658-45.918" transform="translate(-10.041 -78.627)" fill="#fd9f00" />
                                            </g>
                                        </g>
                                        <g id="Group_17032" data-name="Group 17032" transform="translate(4533.305 3855.82)">
                                            <g id="Group_17031" data-name="Group 17031" transform="translate(0 0)" clip-path="url(#clip-path-51)">
                                                <rect id="Rectangle_15744" data-name="Rectangle 15744" width="1.948" height="46.682" transform="translate(0.476 77.61) rotate(-77.054)" fill="#e38601" />
                                                <rect id="Rectangle_15745" data-name="Rectangle 15745" width="1.948" height="46.682" transform="matrix(0.224, -0.975, 0.975, 0.224, 1.608, 72.687)" fill="#e38601" />
                                                <rect id="Rectangle_15746" data-name="Rectangle 15746" width="1.948" height="46.682" transform="matrix(0.224, -0.975, 0.975, 0.224, 2.9, 67.069)" fill="#e38601" />
                                                <rect id="Rectangle_15747" data-name="Rectangle 15747" width="1.948" height="46.681" transform="translate(4.513 60.057) rotate(-77.054)" fill="#e38601" />
                                                <rect id="Rectangle_15748" data-name="Rectangle 15748" width="1.948" height="46.682" transform="translate(6.285 52.35) rotate(-77.054)" fill="#e38601" />
                                                <rect id="Rectangle_15749" data-name="Rectangle 15749" width="1.948" height="46.682" transform="translate(8.218 43.946) rotate(-77.054)" fill="#e38601" />
                                                <rect id="Rectangle_15750" data-name="Rectangle 15750" width="1.948" height="46.682" transform="translate(18.078 1.072) rotate(-77.048)" fill="#e38601" />
                                                <rect id="Rectangle_15751" data-name="Rectangle 15751" width="1.948" height="46.682" transform="matrix(0.224, -0.975, 0.975, 0.224, 16.946, 5.994)" fill="#e38601" />
                                                <rect id="Rectangle_15752" data-name="Rectangle 15752" width="1.948" height="46.682" transform="translate(15.653 11.615) rotate(-77.054)" fill="#e38601" />
                                                <rect id="Rectangle_15753" data-name="Rectangle 15753" width="1.948" height="46.682" transform="matrix(0.224, -0.975, 0.975, 0.224, 14.041, 18.624)" fill="#e38601" />
                                                <rect id="Rectangle_15754" data-name="Rectangle 15754" width="1.948" height="46.682" transform="translate(12.268 26.333) rotate(-77.054)" fill="#e38601" />
                                                <rect id="Rectangle_15755" data-name="Rectangle 15755" width="1.948" height="46.681" transform="translate(10.336 34.737) rotate(-77.054)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17037" data-name="Group 17037" transform="translate(4506 3642)">
                                            <g id="Group_17036" data-name="Group 17036" clip-path="url(#clip-path)">
                                                <path id="Path_40837" data-name="Path 40837" d="M68.043,337.612c-4.855,21.111-23.766,34.782-42.24,30.533S-3.711,343.339,1.144,322.228s23.766-34.782,42.24-30.533S72.9,316.5,68.043,337.612" transform="translate(0 -78.217)" fill="#ffd454" />
                                                <path id="Path_40838" data-name="Path 40838" d="M2.179,323.756c4.855-21.111,23.766-34.781,42.24-30.533A31.545,31.545,0,0,1,63.03,305.909a31.8,31.8,0,0,0-19.645-14.214C24.912,287.446,6,301.116,1.146,322.227c-2.831,12.309-.252,24.422,6.047,33.233a41.631,41.631,0,0,1-5.013-31.7" transform="translate(-0.001 -78.217)" fill="#fde571" />
                                                <path id="Path_40839" data-name="Path 40839" d="M31.17,364.014C17.41,360.85,9.283,344.939,13.053,328.545s18.031-27.155,31.791-23.991S66.73,323.63,62.96,340.022,44.929,367.178,31.17,364.014" transform="translate(-3.261 -81.734)" fill="#fde571" />
                                                <path id="Path_40840" data-name="Path 40840" d="M30.962,362.855C17.2,359.691,9.075,343.78,12.845,327.386s18.031-27.155,31.791-23.99,21.886,19.075,18.116,35.468S44.721,366.02,30.962,362.855" transform="translate(-3.205 -81.422)" fill="#ffb127" />
                                                <path id="Path_40841" data-name="Path 40841" d="M33.98,362.134c-13.759-3.164-21.886-19.075-18.116-35.468,2.544-11.056,9.859-19.543,18.575-22.932-10.012,2.444-18.762,11.58-21.594,23.892-3.77,16.394,4.358,32.3,18.117,35.469a22.374,22.374,0,0,0,13.216-1.059,21.988,21.988,0,0,1-10.2.1" transform="translate(-3.205 -81.661)" fill="#e38601" />
                                                <g id="Group_17035" data-name="Group 17035" transform="translate(129.458 236.55)" opacity="0.2" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17034" data-name="Group 17034">
                                                        <g id="Group_17033" data-name="Group 17033" clip-path="url(#clip-path-53)">
                                                            <path id="Path_40844" data-name="Path 40844" d="M177.063,338.848c0-1.1,2.155-2.116,5.829-2.971v-6.732h.054c-.011-.054-.054-.107-.054-.162,0-3.008,16.06-5.446,35.871-5.446s35.871,2.438,35.871,5.446c0,.055-.043.108-.054.162h.054v8.676c0,1.1-2.155,2.115-5.829,2.971v5.044c3.275.821,5.2,1.782,5.2,2.812,0,.055-.044.107-.054.162H254v8.676c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446V350.5c-3.276-.822-5.2-1.782-5.2-2.813V339.01h.054c-.011-.055-.054-.107-.054-.162" transform="translate(-177.063 -323.536)" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <path id="Path_40845" data-name="Path 40845" d="M193.124,358.1v8.676c0,3.008,16.06,5.446,35.871,5.446s35.87-2.438,35.87-5.446V358.1Z" transform="translate(-51.923 -96.28)" fill="#fd9f00" />
                                            </g>
                                        </g>
                                        <g id="Group_17039" data-name="Group 17039" transform="translate(4647.201 3903.825)">
                                            <g id="Group_17038" data-name="Group 17038" transform="translate(0 0)" clip-path="url(#clip-path-54)">
                                                <rect id="Rectangle_15758" data-name="Rectangle 15758" width="1.699" height="19.888" transform="translate(0.785 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15759" data-name="Rectangle 15759" width="1.698" height="19.888" transform="translate(5.188 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15760" data-name="Rectangle 15760" width="1.698" height="19.888" transform="translate(10.215 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15761" data-name="Rectangle 15761" width="1.698" height="19.888" transform="translate(16.488 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15762" data-name="Rectangle 15762" width="1.699" height="19.888" transform="translate(23.383 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15763" data-name="Rectangle 15763" width="1.698" height="19.888" transform="translate(30.902 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15764" data-name="Rectangle 15764" width="1.698" height="19.888" transform="translate(69.259 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15765" data-name="Rectangle 15765" width="1.698" height="19.888" transform="translate(64.855 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15766" data-name="Rectangle 15766" width="1.698" height="19.888" transform="translate(59.828 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15767" data-name="Rectangle 15767" width="1.698" height="19.888" transform="translate(53.555 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15768" data-name="Rectangle 15768" width="1.699" height="19.888" transform="translate(46.659 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15769" data-name="Rectangle 15769" width="1.698" height="19.888" transform="translate(39.141 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17041" data-name="Group 17041" transform="translate(4506 3642)">
                                            <g id="Group_17040" data-name="Group 17040" clip-path="url(#clip-path)">
                                                <path id="Path_40847" data-name="Path 40847" d="M264.865,355.88c0,3.008-16.059,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-51.923 -94.217)" fill="#fac61b" />
                                                <path id="Path_40848" data-name="Path 40848" d="M260.215,356.17c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.133-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.131,28.517,2.528" transform="translate(-54.627 -95.08)" fill="#fd9f00" />
                                                <path id="Path_40849" data-name="Path 40849" d="M204.411,356.9c3.552-1.037,14.423-1.793,27.288-1.793s23.736.755,27.288,1.793c.8-.232,1.228-.479,1.228-.735,0-1.4-12.767-2.528-28.517-2.528s-28.517,1.132-28.517,2.528c0,.256.432.5,1.229.735" transform="translate(-54.627 -95.08)" fill="#e38601" />
                                                <path id="Path_40850" data-name="Path 40850" d="M186.018,344.7v8.676c0,3.007,16.06,5.446,35.871,5.446s35.871-2.439,35.871-5.446V344.7Z" transform="translate(-50.013 -92.676)" fill="#fd9f00" />
                                            </g>
                                        </g>
                                        <g id="Group_17043" data-name="Group 17043" transform="translate(4642.005 3894.024)">
                                            <g id="Group_17042" data-name="Group 17042" transform="translate(0 0)" clip-path="url(#clip-path-56)">
                                                <rect id="Rectangle_15771" data-name="Rectangle 15771" width="1.698" height="19.888" transform="translate(0.785 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15772" data-name="Rectangle 15772" width="1.698" height="19.888" transform="translate(5.189 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15773" data-name="Rectangle 15773" width="1.698" height="19.888" transform="translate(10.215 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15774" data-name="Rectangle 15774" width="1.698" height="19.888" transform="translate(16.489 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15775" data-name="Rectangle 15775" width="1.698" height="19.888" transform="translate(23.384 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15776" data-name="Rectangle 15776" width="1.698" height="19.888" transform="translate(30.903 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15777" data-name="Rectangle 15777" width="1.698" height="19.888" transform="translate(69.26 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15778" data-name="Rectangle 15778" width="1.698" height="19.888" transform="translate(64.856 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15779" data-name="Rectangle 15779" width="1.698" height="19.888" transform="translate(59.829 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15780" data-name="Rectangle 15780" width="1.698" height="19.888" transform="translate(53.556 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15781" data-name="Rectangle 15781" width="1.698" height="19.888" transform="translate(46.66 -3.602)" fill="#e38601" />
                                                <rect id="Rectangle_15782" data-name="Rectangle 15782" width="1.698" height="19.888" transform="translate(39.142 -3.602)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17045" data-name="Group 17045" transform="translate(4506 3642)">
                                            <g id="Group_17044" data-name="Group 17044" clip-path="url(#clip-path)">
                                                <path id="Path_40852" data-name="Path 40852" d="M257.76,342.475c0,3.008-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-50.013 -90.613)" fill="#fac61b" />
                                                <path id="Path_40853" data-name="Path 40853" d="M253.11,342.765c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.132-28.517-2.528,12.767-2.528,28.517-2.528,28.517,1.132,28.517,2.528" transform="translate(-52.717 -91.476)" fill="#fd9f00" />
                                                <path id="Path_40854" data-name="Path 40854" d="M197.306,343.5c3.553-1.037,14.423-1.793,27.288-1.793s23.736.755,27.288,1.793c.8-.233,1.229-.48,1.229-.735,0-1.4-12.768-2.528-28.517-2.528s-28.516,1.132-28.516,2.528c0,.255.431.5,1.228.735" transform="translate(-52.717 -91.476)" fill="#e38601" />
                                                <path id="Path_40855" data-name="Path 40855" d="M193.99,331.207v8.677c0,3.008,16.06,5.445,35.871,5.445s35.871-2.438,35.871-5.445v-8.677Z" transform="translate(-52.156 -89.048)" fill="#fd9f00" />
                                            </g>
                                        </g>
                                        <g id="Group_17047" data-name="Group 17047" transform="translate(4647.834 3884.159)">
                                            <g id="Group_17046" data-name="Group 17046" transform="translate(0)" clip-path="url(#clip-path-58)">
                                                <rect id="Rectangle_15784" data-name="Rectangle 15784" width="1.698" height="19.888" transform="translate(0.785 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15785" data-name="Rectangle 15785" width="1.699" height="19.888" transform="translate(5.188 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15786" data-name="Rectangle 15786" width="1.698" height="19.888" transform="translate(10.215 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15787" data-name="Rectangle 15787" width="1.699" height="19.888" transform="translate(16.488 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15788" data-name="Rectangle 15788" width="1.699" height="19.888" transform="translate(23.383 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15789" data-name="Rectangle 15789" width="1.698" height="19.888" transform="translate(30.902 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15790" data-name="Rectangle 15790" width="1.698" height="19.888" transform="translate(69.259 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15791" data-name="Rectangle 15791" width="1.698" height="19.888" transform="translate(64.855 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15792" data-name="Rectangle 15792" width="1.698" height="19.888" transform="translate(59.829 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15793" data-name="Rectangle 15793" width="1.698" height="19.888" transform="translate(53.556 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15794" data-name="Rectangle 15794" width="1.698" height="19.888" transform="translate(46.66 -3.603)" fill="#e38601" />
                                                <rect id="Rectangle_15795" data-name="Rectangle 15795" width="1.698" height="19.888" transform="translate(39.142 -3.603)" fill="#e38601" />
                                            </g>
                                        </g>
                                        <g id="Group_17094" data-name="Group 17094" transform="translate(4536.017 3647.89)">
                                            <g id="Group_17095" data-name="Group 17095" transform="translate(0 0)">
                                                <path id="Path_40857" data-name="Path 40857" d="M265.732,328.982c0,3.007-16.06,5.446-35.871,5.446s-35.871-2.438-35.871-5.446,16.06-5.446,35.871-5.446,35.871,2.438,35.871,5.446" transform="translate(-82.173 -92.876)" fill="#fac61b" />
                                                <path id="Path_40858" data-name="Path 40858" d="M261.082,329.273c0,1.4-12.767,2.528-28.517,2.528s-28.517-1.132-28.517-2.528,12.768-2.528,28.517-2.528,28.517,1.132,28.517,2.528" transform="translate(-84.877 -93.738)" fill="#fd9f00" />
                                                <path id="Path_40859" data-name="Path 40859" d="M205.277,330.007c3.553-1.038,14.423-1.793,27.288-1.793s23.735.755,27.288,1.793c.8-.233,1.228-.479,1.228-.735,0-1.4-12.767-2.528-28.516-2.528s-28.517,1.132-28.517,2.528c0,.256.432.5,1.228.735" transform="translate(-84.877 -93.738)" fill="#e38601" />
                                                <path id="Path_40860" data-name="Path 40860" d="M102.638,368.292l1.133-3.034,6.882,1.944-1.212,4.657-2.528,4.578s-5.525-1.369-5.541-1.491.094-5.817.094-5.817Z" transform="translate(-57.271 -104.093)" fill="#fac6a7" />
                                                <path id="Path_40861" data-name="Path 40861" d="M101.7,369.389s-1.1,1.217-.719,2.32,1.084-.071,3.2-.144,4.373.969,4.839,2.06.434,3.343.442,5.8,1.9,5.2,1.827,6.847a11.884,11.884,0,0,1-.462,3.677c-.344.767-5.386,2.066-11.575-1.648,0,0-1.213-.706.238-3.958s-1.809-3.2-1.592-7.039,2.688-8.515,3.8-7.915" transform="translate(-56.334 -105.189)" fill="#dd7d26" />
                                                <path id="Path_40862" data-name="Path 40862" d="M98.077,377.489a10.35,10.35,0,0,0,1.081,2.9c.673.99,1.915,2.118,1.971,3.228s-1,2.455-1.144,3.512,1.249,2.6,3.669,3.418,6.3.761,7.394.158c0,0-.146,2.054-.6,2.462s-1.941.621-5.624.3-6.431-2.234-6.514-3.459,1.222-4.444,1.145-5.291-1.925-3-1.94-3.649.031-2.955.564-3.577" transform="translate(-56.234 -107.381)" fill="#a35211" />
                                                <path id="Path_40863" data-name="Path 40863" d="M125.077,368.038l-2.743-6.154,7.593-3.106,2.7,7.82.869,5.158s-5.177,2.365-5.266,2.28-3.546-4.614-3.546-4.614Z" transform="translate(-62.908 -102.351)" fill="#fac6a7" />
                                                <path id="Path_40864" data-name="Path 40864" d="M125.884,370.636s.244,2.047,1.232,2.672.209-2.221,1.819-3.593,4.23-1.865,5.313-.315c.679.972,2.2,3.08,3.738,5s4.94,2.153,5.907,3.492a6.887,6.887,0,0,1,1.176,3.1c.208.814-.711,5.114-7.867,6.056a4.634,4.634,0,0,1-4.058-3.246c-1.278-3.323-3.095-1.453-5.316-4.6s-3.192-8.338-1.945-8.564" transform="translate(-63.714 -104.949)" fill="#dd7d26" />
                                                <path id="Path_40865" data-name="Path 40865" d="M138.714,387.471c-.79.085-2.794.3-4.377-2.8-1.619-3.17-3.23-1.12-5.769-4.013a14.86,14.86,0,0,1-3.2-6.638,15.082,15.082,0,0,0,2.469,6.681c2.221,3.143,4.038,1.274,5.316,4.6,1.249,3.246,3.44,3.311,4.736,3.226,4.972-.326,6.229-2.88,6.9-4.479a8.488,8.488,0,0,1-6.081,3.428" transform="translate(-63.724 -106.448)" fill="#a35211" />
                                                <path id="Path_40866" data-name="Path 40866" d="M87.323,215.153S76.9,231.859,74.085,237.773c-2.53,5.306-6.353,16.854-2.23,23.407s8.043,6.626,8.043,6.626,6.441,22.844,8.49,27.94a164.105,164.105,0,0,0,7.725,16.359L93.962,323.76s1.483,3.466,4.805,4.178a10.89,10.89,0,0,0,5.874-.593l.991-3.024L107.4,326.6s4.981-.031,7.007-1.212a15.927,15.927,0,0,0,4.075-3.755L115.062,310.6s20.4-42.53,21.236-49.535a53.458,53.458,0,0,0-4.081-27.712c-.433-1.089-11.308-18.2-11.308-18.2s-22.472,3.445-33.586,0" transform="translate(-48.846 -63.736)" fill="#263238" />
                                                <path id="Path_40867" data-name="Path 40867" d="M98.669,116.128s-12.031-.328-15.233,13.161c-1,4.037-6.025,11.177-11.156,11.958s-13.5,6.248-11.6,16.4c.67,4.128-2.454,7.474-9.037,12.718s-14.95,31.35,19.19,31.685c16.511.558,36.056-1.815,48.086-1.815,20.438,0,23.568-12.861,14.177-28.963-3.5-6,2.965-8.818-5.476-16.3-5.61-4.974-4.574-8.7-5.021-13.054s-7.586-7.078-8.59-9.842.564-16.251-15.336-15.945" transform="translate(-42.298 -37.111)" fill="#1a1a25" />
                                                <path id="Path_40868" data-name="Path 40868" d="M141.062,198.95a36.735,36.735,0,0,0,6.971-1.113,18.763,18.763,0,0,0,6.333-2.9,11.1,11.1,0,0,0,4.051-5.476,14.811,14.811,0,0,0,.455-6.873,27.85,27.85,0,0,0-1.946-6.737,42.628,42.628,0,0,0-3.285-6.251,8.7,8.7,0,0,1-1.318-3.311,16.5,16.5,0,0,1-.06-3.561,9.509,9.509,0,0,0-.354-3.457,9.057,9.057,0,0,0-1.716-3,18.8,18.8,0,0,0-2.506-2.448l-1.361-1.152c-.426-.421-.876-.818-1.263-1.281a11.964,11.964,0,0,1-2.008-3,12.513,12.513,0,0,1-.967-3.486c-.173-1.189-.241-2.373-.383-3.533a6.318,6.318,0,0,0-.35-1.644,5.729,5.729,0,0,0-.847-1.434c-1.438-1.774-3.48-3.019-5.377-4.448a14.823,14.823,0,0,1-1.391-1.167,4.181,4.181,0,0,1-1.091-1.566c-.374-1.213-.5-2.355-.749-3.509a16.74,16.74,0,0,0-2.566-6.434,10.945,10.945,0,0,0-5.552-4,19.712,19.712,0,0,0-6.964-.816l0-.067a19.072,19.072,0,0,1,7.069.569,11.349,11.349,0,0,1,5.842,4.032,17.275,17.275,0,0,1,2.8,6.584c.284,1.146.431,2.37.761,3.416a6.417,6.417,0,0,0,2.26,2.411c1.858,1.408,3.966,2.628,5.511,4.571a6.426,6.426,0,0,1,.932,1.617,7,7,0,0,1,.375,1.813c.133,1.189.19,2.368.347,3.522a12.371,12.371,0,0,0,.881,3.335,11.388,11.388,0,0,0,1.859,2.906c.363.454.794.85,1.2,1.269l1.322,1.166a19.2,19.2,0,0,1,2.507,2.552,9.384,9.384,0,0,1,1.731,3.142,9.8,9.8,0,0,1,.317,3.563,16.331,16.331,0,0,0,.005,3.515,8.045,8.045,0,0,0,1.306,3.22c2.517,3.988,4.778,8.279,5.583,13.028a14.848,14.848,0,0,1-.446,7.145,11.669,11.669,0,0,1-4.3,5.7,18.594,18.594,0,0,1-6.55,2.824,34.3,34.3,0,0,1-7.055.839Z" transform="translate(-61.423 -37.127)" fill="#1a1a25" />
                                                <path id="Path_40869" data-name="Path 40869" d="M96.07,116.479a15.521,15.521,0,0,0-10.289,4.888,17.471,17.471,0,0,0-3.121,4.855,21.572,21.572,0,0,0-.978,2.732,14.1,14.1,0,0,1-1.106,2.806,23.319,23.319,0,0,1-3.439,4.91,16.14,16.14,0,0,1-4.757,3.733,8.937,8.937,0,0,1-2.968.862,12.729,12.729,0,0,0-2.726.74,15.368,15.368,0,0,0-4.8,3,12.724,12.724,0,0,0-3.183,4.6,12.954,12.954,0,0,0-.848,5.528c.015.471.079.946.133,1.421a7.3,7.3,0,0,1,.02,1.608,7.6,7.6,0,0,1-1,3.008,18.469,18.469,0,0,1-4.024,4.537c-1.508,1.306-3.1,2.476-4.7,3.633a13.884,13.884,0,0,0-3.653,4.322,21.349,21.349,0,0,0-2.957,11.063,14.485,14.485,0,0,0,1.259,5.615,14.078,14.078,0,0,0,3.415,4.638,22.928,22.928,0,0,0,10.425,5,51.321,51.321,0,0,0,11.65,1.211A84.754,84.754,0,0,0,80.1,199.977c7.742-1.277,15.4-3.042,23.016-4.972q11.424-2.868,22.717-6.245l-.494.6a174.16,174.16,0,0,0,.675-21.394c-.085-1.776-.222-3.547-.467-5.293a18.791,18.791,0,0,0-1.281-5,7.26,7.26,0,0,0-.626-1.078c-.246-.382-.5-.755-.738-1.147-.478-.774-.944-1.561-1.358-2.382a18.11,18.11,0,0,1-1.822-5.233,25.3,25.3,0,0,1-.3-2.734l-.08-1.348a5.175,5.175,0,0,0-.159-1.214,9.474,9.474,0,0,0-2.969-4.036c-1.3-1.2-2.745-2.262-4.006-3.664a5.3,5.3,0,0,1-.82-1.219,5.826,5.826,0,0,1-.362-1.407c-.146-.9-.268-1.774-.443-2.641a17.454,17.454,0,0,0-1.7-4.967,12.065,12.065,0,0,0-3.414-3.934,14.356,14.356,0,0,0-4.771-2.242,23.557,23.557,0,0,0-5.289-.755l0-.135a23.787,23.787,0,0,1,5.364.581,14.753,14.753,0,0,1,4.984,2.143,12.22,12.22,0,0,1,3.7,4.018,18.168,18.168,0,0,1,1.9,5.128c.2.886.347,1.783.51,2.653a5.122,5.122,0,0,0,.325,1.186,4.451,4.451,0,0,0,.7.986c1.165,1.251,2.659,2.288,4.008,3.505a17.079,17.079,0,0,1,1.945,1.976,7.218,7.218,0,0,1,1.4,2.526,6.345,6.345,0,0,1,.216,1.442l.1,1.336a24.216,24.216,0,0,0,.325,2.607,16.859,16.859,0,0,0,1.775,4.862c.4.775.864,1.527,1.339,2.271.23.375.488.737.733,1.1a8.7,8.7,0,0,1,.739,1.237,19.574,19.574,0,0,1,1.421,5.38c.26,1.806.4,3.614.5,5.42.176,3.612.146,7.217.025,10.816s-.339,7.186-.688,10.779l-.045.472-.447.129c-15.14,4.352-30.416,8.292-46.017,10.656-1.952.276-3.908.531-5.874.706s-3.939.306-5.919.3a55.322,55.322,0,0,1-11.756-1.345,29.909,29.909,0,0,1-5.617-1.905,19.8,19.8,0,0,1-5.009-3.194,14.559,14.559,0,0,1-3.573-4.763,15.883,15.883,0,0,1-1.4-5.8,22.047,22.047,0,0,1,2.8-11.518,14.757,14.757,0,0,1,3.817-4.7c1.565-1.179,3.1-2.392,4.562-3.667A17.43,17.43,0,0,0,56,160.6a6.427,6.427,0,0,0,.833-2.553,6.127,6.127,0,0,0-.026-1.335c-.061-.5-.132-1-.153-1.513a13.581,13.581,0,0,1,.957-6.032,13.865,13.865,0,0,1,3.512-4.991A16.443,16.443,0,0,1,66.3,141a13.739,13.739,0,0,1,2.963-.775,7.873,7.873,0,0,0,2.676-.747,15.836,15.836,0,0,0,4.527-3.433,22.494,22.494,0,0,0,3.412-4.655,13.2,13.2,0,0,0,1.109-2.648,22.289,22.289,0,0,1,1.059-2.8,17.433,17.433,0,0,1,3.36-4.934,15.6,15.6,0,0,1,10.661-4.668Z" transform="translate(-41.055 -37.17)" fill="#1a1a25" />
                                                <path id="Path_40870" data-name="Path 40870" d="M157.154,200.011s5.519,23.171-8,27.268-12.592-24.388-12.592-24.388L155.106,190.9Z" transform="translate(-66.728 -57.215)" fill="#fac6a7" />
                                                <path id="Path_40871" data-name="Path 40871" d="M141.2,161.319a15.868,15.868,0,0,1,10.376,8.256c3.273,6.843,7.735,20.677,7.735,20.677a21.945,21.945,0,0,1-13.537,3.868c-7.586-.6-4.574-32.8-4.574-32.8" transform="translate(-67.821 -49.262)" fill="#ed1c24" />
                                                <path id="Path_40872" data-name="Path 40872" d="M129.377,177.009s.457,39.876,1.2,52.073c-7.587,1.636-23.731,6.642-47.086-1.837.6-16.065.069-50.237.069-50.237l3.57-13.57s22.872-.706,23.485-.706,15.228-1.413,15.228-1.413Z" transform="translate(-52.465 -49.262)" fill="#ed1c24" />
                                                <path id="Path_40873" data-name="Path 40873" d="M129.1,157.719c-.271,2.987-2.248,5.142-5.2,6.6-.19.092-.381.184-.577.272-6.709,2.991-17.834,2.714-25.714.564-.2-.052-.386-.1-.576-.162-4.675-1.347-8.1-3.377-8.565-5.758,1.187-.772,4.876-1.85,8.565-2.789l.576-.15c1.995-.5,3.955-.963,5.476-1.3,4.387-.986,1.867-9.038,1.781-9.315l10.266,4.075s-.668,2.9.479,3.794c.7.548,4.23,1.434,7.712,2.38.191.058.387.11.577.162,1.983.547,3.9,1.107,5.2,1.63" transform="translate(-53.802 -45.057)" fill="#fac6a7" />
                                                <path id="Path_40874" data-name="Path 40874" d="M121.012,152.192a8.069,8.069,0,0,1,.15-2.438L110.9,145.679a19.618,19.618,0,0,1,.744,3.764c1.1,1.607,2.792,2.607,5.493,3.269a6.531,6.531,0,0,0,3.879-.52" transform="translate(-59.832 -45.057)" fill="#eaa481" />
                                                <path id="Path_40875" data-name="Path 40875" d="M100.758,160.2v8.86c-.2-.052-.386-.1-.576-.162V160.35Z" transform="translate(-56.952 -48.961)" fill="#1a1c1c" />
                                                <path id="Path_40876" data-name="Path 40876" d="M136.716,159.857v8.231c-.19.092-.38.184-.576.271V159.7c.19.058.386.11.576.162" transform="translate(-66.619 -48.825)" fill="#1a1c1c" />
                                                <path id="Path_40877" data-name="Path 40877" d="M125.4,131.8s.887,15.575-8.675,14.689c-4.14-.789-6.014-2.465-7.1-5.915-1.774-.394-4.72-2.575-2.76-5.225a1.8,1.8,0,0,1,2.859.3c.69-2.267,4.535-8.108,4.535-8.108l4.461-.814,4.412.74Z" transform="translate(-58.576 -39.961)" fill="#fac6a7" />
                                                <path id="Path_40878" data-name="Path 40878" d="M124.538,129.125a4.585,4.585,0,0,0-2.09-.8,3.751,3.751,0,0,0-.68-2.819,4.7,4.7,0,0,1,.046,2.72,23.654,23.654,0,0,0-3.705-.134,4.775,4.775,0,0,0-.665-2.586,4.049,4.049,0,0,1-.111,2.7,11.325,11.325,0,0,0-3.06.562,3.4,3.4,0,0,0-.787-2.517,6.049,6.049,0,0,1,.072,2.743c-1.268.428-2.322.894-2.624,1.027-.776,2.548-2.98.317-2.98.317s-7.818-.674-3.969-7.934c3.52-6.637,11.379-6.838,15.08-5.8,7.088,1.99,5.77,12.564,5.472,12.526" transform="translate(-57.688 -37.113)" fill="#1a1a25" />
                                                <path id="Path_40879" data-name="Path 40879" d="M111.126,143.193s-1.087-5.119-3.173-3.3c-1.316,1.146.887,2.777,1.806,2.219l1.236-1.165" transform="translate(-58.931 -43.396)" fill="#eaa481" />
                                                <path id="Path_40880" data-name="Path 40880" d="M113.086,134.882s.074,7.246,2.144,8.429a5.781,5.781,0,0,1-2.735.518,8.4,8.4,0,0,1-.591-3.254,11.415,11.415,0,0,0,.345,3.267l-.616.035a16.1,16.1,0,0,1-.616-6.8c.2-1.976.739-2.785.936-2.834s1.134.64,1.134.64" transform="translate(-59.838 -41.981)" fill="#1a1a25" />
                                                <path id="Path_40881" data-name="Path 40881" d="M121.131,144.885l4.32-.3s-.063,2.21-1.443,2.65-2.621-.3-2.876-2.347" transform="translate(-62.584 -44.762)" fill="#fff" />
                                                <path id="Path_40882" data-name="Path 40882" d="M124.327,141.678c1.565-.2-.363-3.262-.363-3.262-.234-.513-.605-.434-.6.823s-.232,2.592.961,2.438" transform="translate(-63.181 -43.025)" fill="#eaa481" />
                                                <path id="Path_40883" data-name="Path 40883" d="M118.764,137.478a1.029,1.029,0,1,1-1.088.967,1.029,1.029,0,0,1,1.088-.967" transform="translate(-61.655 -42.852)" fill="#1a1a25" />
                                                <path id="Path_40884" data-name="Path 40884" d="M128.222,136.854a1.029,1.029,0,1,1-1.088.967,1.03,1.03,0,0,1,1.088-.967" transform="translate(-64.198 -42.684)" fill="#1a1a25" />
                                                <path id="Path_40885" data-name="Path 40885" d="M116.718,136.157a1.906,1.906,0,0,1,1.109-.687,1.983,1.983,0,0,1,.654-.034,3.219,3.219,0,0,0,.658.127.134.134,0,0,0,.114-.2.952.952,0,0,0-.72-.3,2.344,2.344,0,0,0-.8.058,2.268,2.268,0,0,0-1.3.867c-.124.173.158.33.282.165" transform="translate(-61.313 -42.201)" fill="#1a1a25" />
                                                <path id="Path_40886" data-name="Path 40886" d="M126.664,135a2.1,2.1,0,0,1,1.131-.561,1.251,1.251,0,0,1,.545.065c.176.067.327.181.5.253.116.048.2-.086.184-.184a.777.777,0,0,0-.526-.514,1.462,1.462,0,0,0-.717-.087,2.058,2.058,0,0,0-1.32.824.144.144,0,0,0,.2.2" transform="translate(-64.007 -41.907)" fill="#1a1a25" />
                                                <path id="Path_40887" data-name="Path 40887" d="M66.8,204.769s-2.38,26.627,17.256,27.073c8.33-.3,21.232,16.535,25.649-13.365" transform="translate(-47.951 -60.944)" fill="#fac6a7" />
                                                <path id="Path_40888" data-name="Path 40888" d="M82.124,164.218c-4.165,1.822-14.875,10.45-17.256,30.383,4.611,2.231,10.859,6.1,22.76,2.528.3-8.181,0-15.731,0-15.731Z" transform="translate(-47.457 -50.042)" fill="#ed1c24" />
                                                <path id="Path_40889" data-name="Path 40889" d="M84.775,173.141a.824.824,0,1,1-.823-.823.824.824,0,0,1,.823.823" transform="translate(-52.367 -52.219)" fill="#fff" />
                                                <path id="Path_40890" data-name="Path 40890" d="M86.432,189.068a.824.824,0,1,1-.823-.823.823.823,0,0,1,.823.823" transform="translate(-52.812 -56.501)" fill="#fff" />
                                                <path id="Path_40891" data-name="Path 40891" d="M73.859,187.942a.824.824,0,1,1-.823-.824.823.823,0,0,1,.823.824" transform="translate(-49.432 -56.198)" fill="#fff" />
                                                <path id="Path_40892" data-name="Path 40892" d="M71.493,202.145a.824.824,0,1,1-.823-.823.823.823,0,0,1,.823.823" transform="translate(-48.796 -60.017)" fill="#fff" />
                                                <path id="Path_40893" data-name="Path 40893" d="M99.27,178.122a.824.824,0,1,1-.825-.823.824.824,0,0,1,.825.823" transform="translate(-56.263 -53.559)" fill="#fff" />
                                                <path id="Path_40894" data-name="Path 40894" d="M105.525,194.229a.824.824,0,1,1-.824-.823.824.824,0,0,1,.824.823" transform="translate(-57.945 -57.889)" fill="#fff" />
                                                <path id="Path_40895" data-name="Path 40895" d="M116.213,184.611a.824.824,0,1,1-.823-.823.824.824,0,0,1,.823.823" transform="translate(-60.819 -55.303)" fill="#fff" />
                                                <path id="Path_40896" data-name="Path 40896" d="M143.672,194a.824.824,0,1,1-.823-.823.823.823,0,0,1,.823.823" transform="translate(-68.202 -57.826)" fill="#fff" />
                                                <path id="Path_40897" data-name="Path 40897" d="M125.083,198.615a.824.824,0,1,1-.824-.824.823.823,0,0,1,.824.824" transform="translate(-63.204 -59.068)" fill="#fff" />
                                                <path id="Path_40898" data-name="Path 40898" d="M154.815,179.248a.824.824,0,1,1-.823-.823.823.823,0,0,1,.823.823" transform="translate(-71.198 -53.861)" fill="#fff" />
                                                <path id="Path_40899" data-name="Path 40899" d="M131.136,190.736a.824.824,0,1,1-.824-.823.823.823,0,0,1,.824.823" transform="translate(-64.831 -56.95)" fill="#fff" />
                                                <path id="Path_40900" data-name="Path 40900" d="M141.132,235.488a.824.824,0,1,1-.824-.823.824.824,0,0,1,.824.823" transform="translate(-67.518 -68.982)" fill="#fff" />
                                                <path id="Path_40901" data-name="Path 40901" d="M129.514,249.941a.824.824,0,1,1-.823-.824.823.823,0,0,1,.823.824" transform="translate(-64.395 -72.867)" fill="#fff" />
                                                <path id="Path_40902" data-name="Path 40902" d="M115.174,243.626a.824.824,0,1,1-.823-.823.823.823,0,0,1,.823.823" transform="translate(-60.54 -71.17)" fill="#fff" />
                                                <path id="Path_40903" data-name="Path 40903" d="M99.27,253.709a.824.824,0,1,1-.825-.824.824.824,0,0,1,.825.824" transform="translate(-56.263 -73.88)" fill="#fff" />
                                                <path id="Path_40904" data-name="Path 40904" d="M82.886,246.562a.824.824,0,1,1-.823-.824.823.823,0,0,1,.823.824" transform="translate(-51.859 -71.959)" fill="#fff" />
                                                <path id="Path_40905" data-name="Path 40905" d="M129.972,179.289a.824.824,0,1,1-.823-.823.824.824,0,0,1,.823.823" transform="translate(-64.518 -53.872)" fill="#fff" />
                                                <path id="Path_40906" data-name="Path 40906" d="M155.941,247.688a.824.824,0,1,1-.824-.823.823.823,0,0,1,.824.823" transform="translate(-71.5 -72.262)" fill="#fff" />
                                                <path id="Path_40907" data-name="Path 40907" d="M142.258,173.141a.824.824,0,1,1-.823-.823.824.824,0,0,1,.823.823" transform="translate(-67.822 -52.219)" fill="#fff" />
                                                <path id="Path_40908" data-name="Path 40908" d="M159.542,194.694a.824.824,0,1,1-.823-.823.824.824,0,0,1,.823.823" transform="translate(-72.468 -58.014)" fill="#fff" />
                                                <path id="Path_40909" data-name="Path 40909" d="M86.517,205.212a21.627,21.627,0,0,1,.181-3.81c.141-1.265.371-2.517.621-3.761s.546-2.48.891-3.7.7-2.441,1.143-3.634c-.212,1.255-.463,2.495-.711,3.736l-.759,3.716-.749,3.713c-.235,1.24-.459,2.481-.617,3.742" transform="translate(-53.271 -57.055)" fill="#fff" />
                                                <path id="Path_40910" data-name="Path 40910" d="M147.893,188.844c.33,1.038.6,2.088.858,3.139s.487,2.109.708,3.169.413,2.124.576,3.2.328,2.142.424,3.227c-.331-1.036-.6-2.086-.858-3.138s-.486-2.11-.707-3.169-.413-2.125-.575-3.2-.328-2.142-.425-3.226" transform="translate(-69.779 -56.662)" fill="#fff" />
                                                <g id="Group_17050" data-name="Group 17050" transform="translate(32.584 144.912)" opacity="0.5" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17049" data-name="Group 17049">
                                                        <g id="Group_17048" data-name="Group 17048" clip-path="url(#clip-path-59)">
                                                            <path id="Path_40911" data-name="Path 40911" d="M85.621,217.953c.7-1.052,1.445-2.071,2.2-3.084s1.542-2,2.321-2.992c.8-.972,1.606-1.949,2.445-2.893a36.2,36.2,0,0,1,2.632-2.728c-.812.968-1.6,1.949-2.39,2.932l-2.367,2.948-2.394,2.928c-.805.971-1.611,1.941-2.447,2.889" transform="translate(-85.621 -206.256)" fill="#ce727d" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <path id="Path_40912" data-name="Path 40912" d="M137.247,241.738H73.315V200.475a1.752,1.752,0,0,1,1.752-1.753H135.5a1.752,1.752,0,0,1,1.752,1.753Z" transform="translate(-49.728 -59.318)" fill="#c2c2c2" />
                                                <rect id="Rectangle_15797" data-name="Rectangle 15797" width="63.932" height="2.001" transform="translate(23.587 182.42)" fill="#fff" />
                                                <path id="Path_40913" data-name="Path 40913" d="M120.9,225.89a6.118,6.118,0,1,1-6.118-6.118,6.118,6.118,0,0,1,6.118,6.118" transform="translate(-59.233 -64.978)" fill="#fff" />
                                                <path id="Path_40914" data-name="Path 40914" d="M82.938,284.919a15.415,15.415,0,0,1-1.385-3.251,15.251,15.251,0,0,1-.7-3.465,15.23,15.23,0,0,1,1.385,3.251,15.413,15.413,0,0,1,.7,3.465" transform="translate(-51.756 -80.687)" fill="#1b2327" />
                                                <path id="Path_40915" data-name="Path 40915" d="M106.108,347.838a58.023,58.023,0,0,1,4.637,5.655c.711.983,1.424,1.962,2.111,2.96l2.061,3.022a16.478,16.478,0,0,1-2.732-2.487,34.938,34.938,0,0,1-2.326-2.844c-.716-.991-1.409-2-2.037-3.048a26.3,26.3,0,0,1-1.715-3.259" transform="translate(-58.545 -99.409)" fill="#1b2327" />
                                                <path id="Path_40916" data-name="Path 40916" d="M79.238,260.174s13.912-8.918,20.465-1.167c4.586,5.423,16.558,58.981,16.558,58.981" transform="translate(-51.321 -74.675)" fill="#263238" />
                                                <path id="Path_40917" data-name="Path 40917" d="M144.58,260.714s-13.437-4.756-18.869.484c-3.951,3.811-8.207,19.6-8.207,19.6" transform="translate(-61.609 -75.454)" fill="#1b2327" />
                                                <path id="Path_40918" data-name="Path 40918" d="M80.539,259.351a32.244,32.244,0,0,1,4.656-2.228,26.89,26.89,0,0,1,4.986-1.427,14.033,14.033,0,0,1,5.232-.023,8.362,8.362,0,0,1,4.614,2.585,6.613,6.613,0,0,1,.809,1.1c.221.388.426.779.61,1.176.374.791.7,1.593,1.023,2.4.618,1.618,1.168,3.254,1.7,4.893,1.059,3.281,2.027,6.584,2.967,9.895,1.834,6.634,3.507,13.306,5.1,20l2.286,10.059c.71,3.365,1.443,6.724,2.087,10.1l-2.636-9.971-2.6-9.977c-1.72-6.653-3.46-13.3-5.3-19.915-.9-3.312-1.835-6.616-2.856-9.888-.509-1.636-1.046-3.262-1.628-4.866-.288-.8-.589-1.6-.926-2.373a7.835,7.835,0,0,0-1.227-2.12,7.647,7.647,0,0,0-4.168-2.469,14.348,14.348,0,0,0-5.021-.129,32.08,32.08,0,0,0-9.715,3.18" transform="translate(-51.671 -74.567)" fill="#1b2327" />
                                                <path id="Path_40919" data-name="Path 40919" d="M143.272,260.225a64.747,64.747,0,0,0-9.791-.672,19.788,19.788,0,0,0-4.755.6,6.906,6.906,0,0,0-2.07.929,6.274,6.274,0,0,0-1.478,1.7,31.531,31.531,0,0,0-2.267,4.272c-.689,1.477-1.3,2.995-1.916,4.513q-1.8,4.574-3.491,9.22a86.181,86.181,0,0,1,2.666-9.525,43.186,43.186,0,0,1,4.082-9.095,7.3,7.3,0,0,1,1.779-1.969,7.422,7.422,0,0,1,2.423-1.049,18.693,18.693,0,0,1,5.028-.454,42.275,42.275,0,0,1,9.79,1.529" transform="translate(-61.609 -75.44)" fill="#1b2327" />
                                                <rect id="Rectangle_15798" data-name="Rectangle 15798" width="60.033" height="65.574" transform="translate(273.836 213.046)" fill="#c2c2c2" />
                                                <rect id="Rectangle_15799" data-name="Rectangle 15799" width="51.028" height="65.574" transform="translate(273.836 213.046)" fill="#d6d6d6" />
                                                <path id="Path_41050" data-name="Path 41050" d="M0,0H60.033V41.086H0Z" transform="translate(200.832 237.533)" fill="#c2c2c2" />
                                                <rect id="Rectangle_15801" data-name="Rectangle 15801" width="51.028" height="41.086" transform="translate(200.832 237.533)" fill="#d6d6d6" />
                                                <rect id="Rectangle_15802" data-name="Rectangle 15802" width="60.032" height="83.501" transform="translate(346.839 195.118)" fill="#c2c2c2" />
                                                <rect id="Rectangle_15803" data-name="Rectangle 15803" width="51.028" height="83.501" transform="translate(346.839 195.118)" fill="#d6d6d6" />
                                                <rect id="Rectangle_15804" data-name="Rectangle 15804" width="60.032" height="122.601" transform="translate(419.843 156.019)" fill="#c2c2c2" />
                                                <rect id="Rectangle_15805" data-name="Rectangle 15805" width="51.028" height="122.601" transform="translate(419.843 156.019)" fill="#d6d6d6" />
                                                <path id="Path_40920" data-name="Path 40920" d="M315.744,275.6h50.879l18.364-24.366h45.4l30.786-23.586h52.417l20.578-41.014H577.2L598.116,159.9" transform="translate(-114.908 -48.881)" fill="none" stroke="#c2c2c2" stroke-miterlimit="10" stroke-width="6" />
                                                <path id="Path_40921" data-name="Path 40921" d="M686.36,158.751l12.436-1,2.054,12.984" transform="translate(-214.551 -48.301)" fill="none" stroke="#c2c2c2" stroke-miterlimit="10" stroke-width="6" />
                                                <path id="Path_40922" data-name="Path 40922" d="M559.839,412.244c0,4.211-6.517,7.331-31.7,7.331s-37.251-2.129-37.251-6.34c0-2.378,10.9-5.152,36.656-6.737,25.137-1.547,32.3,1.535,32.3,5.746" transform="translate(-161.996 -115.071)" fill="#d6d6d6" />
                                                <path id="Path_40923" data-name="Path 40923" d="M470.89,22.146a6.937,6.937,0,0,0,5.281.685,5.457,5.457,0,0,0,2.855-2.207c3.129-3.857-.928-8.109-.928-8.109l-8.229-1.138a9.253,9.253,0,0,0-.747,8.728,6.482,6.482,0,0,0,1.768,2.04" transform="translate(-155.941 -8.949)" fill="#ec8e7a" />
                                                <path id="Path_40924" data-name="Path 40924" d="M476.39,8.062c-1.063-.1-1.043,1.045-1.456.974-.542-.094-1.489-.29-1.935.107a5.854,5.854,0,0,0-.782.876,1.539,1.539,0,0,0-1.584-.01c-.768.509-.409,5.434.714,6.3.812.629,2.064.8,1.814-1.23,0,0,.981,1.4,1.945.809a1.775,1.775,0,0,0,.621-1.474s.779,1.836,1.407,1.265.086-1.815.086-1.815,3.333,2.695,1.985-.552c-.477-1.148-1.558-5.138-2.816-5.253" transform="translate(-156.441 -8.056)" fill="#ec8e7a" />
                                                <path id="Path_40925" data-name="Path 40925" d="M481.729,19.612a17.063,17.063,0,0,0,2.28-3.912c.148-.651-2.188-4.469-2.908-4.857s-5.019,1.305-4.429,2.34,3.124.469,3.124.469Z" transform="translate(-158.16 -8.79)" fill="#ec8e7a" />
                                                <path id="Path_40926" data-name="Path 40926" d="M470.436,14.721a4.188,4.188,0,0,0,.669,2.766,2.51,2.51,0,0,0,1.064.895,1.564,1.564,0,0,0,1.372-.143,1.468,1.468,0,0,1-1.448.368,2.558,2.558,0,0,1-1.239-.94,3.382,3.382,0,0,1-.418-2.946" transform="translate(-156.454 -9.848)" fill="#d66759" />
                                                <path id="Path_40927" data-name="Path 40927" d="M470.267,16.331a1.113,1.113,0,0,1-.091.512,1.1,1.1,0,0,1-.319.41.782.782,0,0,1,.41-.922" transform="translate(-156.333 -10.281)" fill="#d66759" />
                                                <path id="Path_40928" data-name="Path 40928" d="M472.931,10.831A6,6,0,0,1,474,13.889c.107,1.083.147,2.148.273,3.223a14.556,14.556,0,0,1-.581-3.187,9.226,9.226,0,0,0-.757-3.094" transform="translate(-157.169 -8.802)" fill="#d66759" />
                                                <path id="Path_40929" data-name="Path 40929" d="M477.672,14.607a1.384,1.384,0,0,1,.026,1.271,1.343,1.343,0,0,1-.167-.632,1.362,1.362,0,0,1,.142-.639" transform="translate(-158.405 -9.817)" fill="#d66759" />
                                                <path id="Path_40930" data-name="Path 40930" d="M477.046,9.667a1.366,1.366,0,0,1,.431.926,3.131,3.131,0,0,1-.029,1.013,3.115,3.115,0,0,1-.277-.967,7.047,7.047,0,0,0-.125-.972" transform="translate(-158.275 -8.489)" fill="#d66759" />
                                                <path id="Path_40931" data-name="Path 40931" d="M479.727,11.019a9.972,9.972,0,0,1-1.609.775,6.892,6.892,0,0,0-1.573.762,2.947,2.947,0,0,1,1.46-1.049,9.53,9.53,0,0,1,1.721-.488" transform="translate(-158.141 -8.853)" fill="#d66759" />
                                                <path id="Path_40932" data-name="Path 40932" d="M476.552,13.12a1.477,1.477,0,0,0,.593.723,3.692,3.692,0,0,0,.844.426,6.524,6.524,0,0,0,1.886.417,3.235,3.235,0,0,1-2-.129,3.061,3.061,0,0,1-.881-.529,1.205,1.205,0,0,1-.444-.907" transform="translate(-158.142 -9.417)" fill="#d66759" />
                                                <path id="Path_40933" data-name="Path 40933" d="M481,14.41a2.692,2.692,0,0,1,.143,2.207,7.713,7.713,0,0,1-.142-1.1,7.894,7.894,0,0,1,0-1.108" transform="translate(-159.333 -9.764)" fill="#d66759" />
                                                <path id="Path_40934" data-name="Path 40934" d="M479.382,17.289a2.223,2.223,0,0,0-.768-.026,4.262,4.262,0,0,0-.752.124,4.626,4.626,0,0,0-1.387.582,5.018,5.018,0,0,0-1.946,2.287,3.917,3.917,0,0,1,1.784-2.549,4.278,4.278,0,0,1,1.5-.552,2.837,2.837,0,0,1,1.566.135" transform="translate(-157.598 -10.49)" fill="#d66759" />
                                                <path id="Path_40935" data-name="Path 40935" d="M470.737,25.51c1.644.183,4.967.224,6.612.391l-.036.453c.013,1.4-.075,3.42-.214,5.8l-7.606-1.311c.4-1.829.813-3.62,1.243-5.329" transform="translate(-156.245 -12.749)" fill="#ec8e7a" />
                                                <path id="Path_40936" data-name="Path 40936" d="M527.035,389.3a15.442,15.442,0,0,0,1.065,6.822l-.863,5.077-2.894.833-6.765-7.773a36.882,36.882,0,0,1,.2-3.833Z" transform="translate(-169.172 -110.558)" fill="#ec8e7a" />
                                                <path id="Path_40937" data-name="Path 40937" d="M522.932,409.091c-.662.794-6.691.481-8.269,1.119s-5.263,2.53-8.9,2.634-9.1-.905-10.158-2.078.137-3.177.137-3.177-.122-1.337.556-1.83,4.153-1.427,6.595-2.96,6.139-5.653,8.349-6.667a4.85,4.85,0,0,1,2.737.412c1.884.676,2.223,3.082,3.819,4.037a2.515,2.515,0,0,0,3.416-.5c.45-.651.738-2.657,1.292-2.427s1.3,5.028.738,8.113c0,0,.351,2.516-.314,3.319" transform="translate(-163.148 -112.38)" fill="#bf6f4c" />
                                                <path id="Path_40938" data-name="Path 40938" d="M522.932,412.648c-.662.794-6.691.481-8.269,1.119s-5.263,2.53-8.9,2.634-9.1-.905-10.158-2.078.137-3.177.137-3.177,1.025,1.914,8.162,1.793,8.1-1.708,10.5-2.31,6.979-1.457,8.842-1.3c0,0,.351,2.516-.314,3.319" transform="translate(-163.148 -115.937)" fill="#531214" />
                                                <path id="Path_40939" data-name="Path 40939" d="M555.439,319.471a15.3,15.3,0,0,0,6.478,2.186l4.064,3.08-.592,2.922-9.919,2.386a36.526,36.526,0,0,1-3.273-1.933Z" transform="translate(-178.479 -91.783)" fill="#ec8e7a" />
                                                <path id="Path_40940" data-name="Path 40940" d="M573.259,326.6c.395.945-2.638,6.1-2.8,7.773s-.186,5.778-1.758,9.02-4.956,7.575-6.471,7.971-2.727-1.575-2.727-1.575-1.23-.5-1.353-1.324.646-4.3.417-7.145-2.157-7.977-2.036-10.381a4.8,4.8,0,0,1,1.614-2.215c1.456-1.346,3.723-.543,5.293-1.508a2.489,2.489,0,0,0,1.127-3.227c-.366-.693-2-1.863-1.54-2.245s5.01,1.16,7.462,3.063c0,0,2.37.843,2.771,1.793" transform="translate(-179.644 -92.378)" fill="#bf6f4c" />
                                                <path id="Path_40941" data-name="Path 40941" d="M574.354,327.742c.395.945-2.638,6.1-2.8,7.773s-.186,5.778-1.758,9.02-4.956,7.575-6.471,7.971-2.727-1.575-2.727-1.575,2.15-.024,5.308-6.347,2.205-7.893,2.774-10.277,1.913-6.794,2.9-8.359c0,0,2.37.843,2.771,1.793" transform="translate(-180.739 -93.524)" fill="#531214" />
                                                <path id="Path_40942" data-name="Path 40942" d="M551.818,70.26s-1.737-.245-1.717.8a10.1,10.1,0,0,0,1.625,4.319c.907,1.4,1.656.923,2.584,1.176.817.224-.211-3.061-.211-3.061l-.983-1.809" transform="translate(-177.917 -24.773)" fill="#d66759" />
                                                <path id="Path_40943" data-name="Path 40943" d="M558.641,83.727s.146-5.361-.241-6.3a6.712,6.712,0,0,1-2.142-2.008c-2.052.383-2.559-.791-2.829-1.448a4.971,4.971,0,0,1-.318-1.234,2.52,2.52,0,0,1-.632-1.728,3.941,3.941,0,0,1-.6-2.223c-.227-1.212-.451-1.893.374-2.7,1.363-1.331,5.753-4.258,8.666-1.331s2.58,7.036,2.693,9.669,1.986,6.376,1.986,6.376Z" transform="translate(-178.337 -22.962)" fill="#ec8e7a" />
                                                <path id="Path_40944" data-name="Path 40944" d="M534.224,289.978a8.721,8.721,0,0,1-.249,2.144c-.655,2.784-2.784,8.844-5.712,10.776-.949-.47-52.169-15.409-58.719-23.045-5.088-5.918,4.711-36.368,4.746-36.453,3.942-12.373,8.645-25.2,8.645-25.2s-.3-3.677,29.543,4a179.283,179.283,0,0,1-9.748,24.525c-4.643,9.594-8.953,16.349-11.185,20.1,19.932,8.586,42.678,23.148,42.678,23.148" transform="translate(-155.864 -64.319)" fill="#263238" />
                                                <path id="Path_40945" data-name="Path 40945" d="M515.622,219.39a.025.025,0,0,1-.009.017c-.068-.008.009-.017.009-.017" transform="translate(-168.637 -64.875)" fill="#e05b58" />
                                                <path id="Path_40946" data-name="Path 40946" d="M541.624,239.474c-3.976,22.249-12.28,40.865-11.912,43.764,3.78,21.754-1.282,62-1.282,62a3.436,3.436,0,0,1-1.653.618c-2.647.331-8.508.708-12.576-.438.017-1.069-5.687-54.384-6.422-65.834-.736-11.313,5.575-59.062,5.72-60.173.265.086,2.95.341,23.584,1.12,1.556.06,3.215.119,4.985.188a61.382,61.382,0,0,1-.444,18.752" transform="translate(-166.522 -64.882)" fill="#263238" />
                                                <path id="Path_40947" data-name="Path 40947" d="M511.478,239.881q-.729,6.935-1.387,13.875c-.459,4.624-.9,9.25-1.271,13.881-.357,4.63-.737,9.262-.841,13.891-.016,1.156-.012,2.31.048,3.452.086,1.154.169,2.31.273,3.466l.638,6.939,2.651,27.758,1.3,13.884c.394,4.631.832,9.26,1.169,13.9-.476-4.623-1.052-9.236-1.585-13.854l-1.538-13.859c-1.01-9.242-1.941-18.491-2.848-27.745l-.6-6.951c-.1-1.159-.174-2.321-.254-3.485-.056-1.179-.053-2.35-.03-3.518.143-4.665.505-9.3.965-13.933s.964-9.25,1.51-13.868q.859-6.92,1.8-13.83" transform="translate(-166.379 -70.384)" />
                                                <path id="Path_40948" data-name="Path 40948" d="M532.787,164.351c-.632,1.548-2.155,4.72-2.215,6.208s-5.943,1.727-9.851,1.8c-.154,0-.308.008-.471,0-6.96.086-23.754-.753-32.006-2.5a33.12,33.12,0,0,1-6.234-1.445c-.257-1.334-2.087-2.394-1.788-5.567,1.129-11.825,4.387-36.427,2.762-48.672-10.766-22.9-16.718-39.548-16.718-39.548-2.275-6.379-1.274-33.306,1.711-43.166,0,0,.41-.077,1.1-.162a22.347,22.347,0,0,1,7.4.265c.2.47.676,3.839,1.309,8.371s1.4,10.219,2.18,15.341c0,0,2.984,11.8,7.773,17.7,3.66,4.532,7.354,9.449,9.817,12.535a12.837,12.837,0,0,0,3.626,2.993l12.57,2.968a19.786,19.786,0,0,1,13.416,9.834c1.616,2.83,1.984,11.1,1.967,19.026-.009,3.411-.094,6.764-.171,9.585A92.453,92.453,0,0,0,532.59,156.4c.556,1.958.967,6.071.2,7.953" transform="translate(-155.043 -14.256)" fill="#ed1c24" />
                                                <g id="Repeat_Grid_1" data-name="Repeat Grid 1" transform="translate(342.779 83.401)" clip-path="url(#clip-path-60)">
                                                    <g transform="translate(-509.882 -122.125)">
                                                        <path id="Path_40949" data-name="Path 40949" d="M517.09,122.125q-1.122,6.224-1.976,12.487-.921,6.254-1.647,12.53c-.979,8.367-1.774,16.755-2.273,25.161-.522,8.406-.681,16.827-.576,25.246.177,4.2.233,8.419.646,12.611.213,4.211.839,8.378,1.341,12.565-.633-4.164-1.393-8.322-1.74-12.529-.5-4.195-.622-8.415-.876-12.63-.236-8.438-.07-16.884.389-25.312.569-8.421,1.353-16.826,2.467-25.19s2.482-16.692,4.245-24.939" fill="#fff" />
                                                    </g>
                                                </g>
                                                <path id="Path_40950" data-name="Path 40950" d="M528.488,85.451a4.162,4.162,0,0,0-1.494,1.62c.067-2.791.137-6.733.328-8.035-2.688-.516-8.263-1.713-9.107-2.762-2.921-.2-5.687-1.05-5.886-4.018s2.154-7.308,4.352-7.559,1.943,1.182,1.943,1.182-1.519-1.029-1.523.8c-.038.621,2.2.208,2.067-1.255.021,1.037.118,1.288-.418,1.855.509.458,1.968-.073,3.054-.287a7,7,0,0,1,5.04,1.478c1.3-1.026,7.779-.131,8.8,5.51.272,1.059,3.132,1.033,3.123,5.606s-3.4,15.329-11.466,14.259a6.144,6.144,0,0,1-3.574-2.695l2.552-1.829Z" transform="translate(-167.758 -23.277)" fill="#21254b" />
                                                <path id="Path_40951" data-name="Path 40951" d="M516.179,113.674c4.2,1.772,7.724-.368,10.741-3.194-2.051-1.943.507-8.844.507-8.844s-9.121,1.834-11.822,3.221c-.047.294-.091.557-.139.781-.215,1.045-.463,1.457-.73,1.654a1.19,1.19,0,0,1-.476.178s-2.291,4.43,1.918,6.2" transform="translate(-168.113 -33.216)" fill="#ec8e7a" />
                                                <path id="Path_40952" data-name="Path 40952" d="M512.6,80.271q-.216.655-.451,1.437c-.231.773-.461,1.629-.676,2.534-.044.175-.091.36-.13.543-1.143,5.118-1.554,11.581,2.738,13.988,4.692,2.213,12.319-3.708,12.523-3.781.567.525,4.086.59,4.32-2.552.209-2.77-3.232-2.149-3.232-2.149.666-1.46,2.239-6.59,2.239-6.59l-5.916-6.775-10.529.912s-.392.938-.888,2.434" transform="translate(-167.29 -26.572)" fill="#ec8e7a" />
                                                <path id="Path_40953" data-name="Path 40953" d="M532.59,99.072a.211.211,0,0,1,.007-.127,8.545,8.545,0,0,1,.616-1.749,1.242,1.242,0,0,1,1.6-.806,2.126,2.126,0,0,1,.778.312c.994.7.178,2.055-.663,2.476a2.494,2.494,0,0,1-2.258-.023.18.18,0,0,1-.078-.083" transform="translate(-173.207 -31.79)" fill="#d66759" />
                                                <path id="Path_40954" data-name="Path 40954" d="M516.113,95.39c-1.685-.018-.019-3.507-.019-3.507.185-.572.588-.534.736.8s.568,2.721-.717,2.707" transform="translate(-168.576 -30.499)" fill="#d66759" />
                                                <path id="Path_40955" data-name="Path 40955" d="M518.169,99.429l-3.414-.239s.05,1.747,1.141,2.1,2.071-.24,2.273-1.856" transform="translate(-168.414 -32.558)" fill="#fff" />
                                                <path id="Path_40956" data-name="Path 40956" d="M522.022,89.718a1,1,0,1,0,1.323-.75,1.082,1.082,0,0,0-1.323.75" transform="translate(-170.346 -29.796)" fill="#21254b" />
                                                <path id="Path_40957" data-name="Path 40957" d="M512.381,87.948A1,1,0,1,0,513.7,87.2a1.082,1.082,0,0,0-1.323.749" transform="translate(-167.754 -29.321)" fill="#21254b" />
                                                <path id="Path_40958" data-name="Path 40958" d="M521.625,84.106a5.177,5.177,0,0,0,1.124,1.6c.143.088,3.826.116,4.609,2.152-.217-1.4-.277-3.836-5.733-3.754" transform="translate(-170.261 -28.502)" fill="#21254b" />
                                                <path id="Path_40959" data-name="Path 40959" d="M513.177,81.5q-.216.655-.45,1.437a13.392,13.392,0,0,1,1.942.6,4.915,4.915,0,0,0,1.574-.966,7.371,7.371,0,0,0-3.066-1.069" transform="translate(-167.868 -27.803)" fill="#21254b" />
                                                <path id="Path_40960" data-name="Path 40960" d="M513.041,75.914c1.012,2.525,6.3,3.938,10.52,2.908,1.874-.388,4.464-.1,4.183,2.391-.126.945-2.389,8,.611,7.708s4.026-4.944,4.026-4.944.207-3.834.247-4.242-3.316-4.617-3.316-4.617l-4.287-2.163-3.592-1.124-8.02,3.739s-.42.227-.372.344" transform="translate(-167.952 -25.202)" fill="#21254b" />
                                                <path id="Path_40961" data-name="Path 40961" d="M526.047,92.432a.143.143,0,1,0,.183-.086.143.143,0,0,0-.183.086" transform="translate(-171.447 -30.716)" fill="#111" />
                                                <path id="Path_40962" data-name="Path 40962" d="M515.141,108.042c4.827.715,7.257-.6,9.465-3.612-3.1,3.385-7.9,2.2-8.735,1.959-.215,1.045-.463,1.456-.73,1.653" transform="translate(-168.517 -33.967)" fill="#d66759" />
                                                <path id="Path_40963" data-name="Path 40963" d="M540.031,137.878s27.845,9.057,32.074,3.07.721-17.829.721-17.829-33.949-8.281-41.147-9.445l2.652,10.4" transform="translate(-172.964 -36.452)" fill="#ed1c24" />
                                                <path id="Path_40964" data-name="Path 40964" d="M572.682,133.275c-.53.718-1.77,1.222-3.5,1.557h-.009c-10.62,2.086-39.856-2.087-39.856-2.087l25.7-13.8s-1.453-8.363-1.847-11.279c-1.111-8.192-2.2-21.446-2.2-21.446l6.525-1.351,2.052-.419s20.728,38.608,13.134,48.826" transform="translate(-172.329 -28.595)" fill="#ed1c24" />
                                                <path id="Path_40965" data-name="Path 40965" d="M518.357,114.514l-3.066,2.537.263,2.092a10.446,10.446,0,0,0,2.832.936l1.146-1.529Z" transform="translate(-168.558 -36.678)" fill="#e29127" />
                                                <path id="Path_40966" data-name="Path 40966" d="M529.327,112.907s-1.147-2.189-1.627-3.164a10.129,10.129,0,0,1-8.217,3.488l.634,4.758a10.359,10.359,0,0,0,3.815-.773c4.422-1.6,5.394-4.309,5.394-4.309" transform="translate(-169.685 -35.395)" fill="#fff2e6" />
                                                <path id="Path_40967" data-name="Path 40967" d="M517.379,112.777l-2.922,3.692s-3.988-2.371-2.457-8.417l2.721.115a4.023,4.023,0,0,0,2.658,4.61" transform="translate(-167.579 -34.941)" fill="#fff2e6" />
                                                <path id="Path_40968" data-name="Path 40968" d="M511.233,120.845s-14.912,18.037-11.507,37.133c1.706,9.571,9.708,18.111,11.715,20.128a1.415,1.415,0,0,0,1.089.413l8.271-.472a1.428,1.428,0,0,0,1.345-1.5l-.4-8.32a1.425,1.425,0,0,0-.917-1.264A19.677,19.677,0,0,1,510.21,157.4c-6.008-12.613,3.855-35.616,3.855-35.616Z" transform="translate(-164.237 -38.38)" fill="#fff" />
                                                <path id="Path_40969" data-name="Path 40969" d="M558.543,76.05a2.019,2.019,0,0,1,1.665.787.832.832,0,0,1,.116.545,1,1,0,0,1-.255.486,2.624,2.624,0,0,1-.794.56,5.123,5.123,0,0,1-1.794.464,4.609,4.609,0,0,1-1.814-.191,7.385,7.385,0,0,0,3.428-.645c.485-.243,1.065-.619.816-1.069a1.265,1.265,0,0,0-.561-.566,3.919,3.919,0,0,0-.806-.372" transform="translate(-179.413 -26.337)" fill="#d66759" />
                                                <path id="Path_40970" data-name="Path 40970" d="M554.173,75.592a4.651,4.651,0,0,1,1.126-1.321,6.583,6.583,0,0,1,1.48-.937,7.091,7.091,0,0,1,1.668-.521c.284-.063.577-.075.863-.112.29-.008.58-.01.867.005-.562.138-1.117.247-1.655.418a12.712,12.712,0,0,0-1.57.586,9.832,9.832,0,0,0-2.779,1.88" transform="translate(-179.011 -25.435)" fill="#d66759" />
                                                <path id="Path_40971" data-name="Path 40971" d="M553.258,72.339a4.585,4.585,0,0,1,1.16-1.262,6.874,6.874,0,0,1,1.49-.877,7.528,7.528,0,0,1,1.657-.477c.281-.056.57-.067.853-.1.287,0,.572-.007.856.01-.556.136-1.1.243-1.638.4a14.777,14.777,0,0,0-1.565.548,10.145,10.145,0,0,0-2.813,1.757" transform="translate(-178.765 -24.608)" fill="#d66759" />
                                                <path id="Path_40972" data-name="Path 40972" d="M552.328,69.514a4.585,4.585,0,0,1,1.16-1.262,6.875,6.875,0,0,1,1.49-.877,7.528,7.528,0,0,1,1.657-.477c.281-.056.57-.067.853-.1.287-.005.572-.007.856.009-.556.136-1.1.243-1.638.4a14.79,14.79,0,0,0-1.565.548,10.145,10.145,0,0,0-2.813,1.757" transform="translate(-178.515 -23.848)" fill="#d66759" />
                                                <path id="Path_40973" data-name="Path 40973" d="M557.464,76.78a5.2,5.2,0,0,1,.87-.608,7.38,7.38,0,0,1,.949-.461,5.789,5.789,0,0,1,2.064-.45c-.319.167-.639.3-.956.437s-.636.265-.954.4-.641.254-.97.365-.656.23-1,.318" transform="translate(-179.896 -26.125)" fill="#d66759" />
                                                <path id="Path_40974" data-name="Path 40974" d="M561,108.473c.324,1.573.594,3.15.859,4.728l.753,4.739,1.363,9.5c-.474-1.535-.811-3.105-1.13-4.675s-.564-3.155-.824-4.736c-.213-1.588-.445-3.172-.615-4.766s-.327-3.186-.406-4.79" transform="translate(-180.847 -35.054)" fill="#f8d2a3" />
                                                <path id="Path_40975" data-name="Path 40975" d="M583.043,133.275c-.53.718-1.77,1.222-3.5,1.557.188-.077,2.685-1.223,2.12-9.56-.6-8.671-13.81-40.4-13.81-40.4l2.052-.419s20.728,38.608,13.134,48.826" transform="translate(-182.69 -28.595)" fill="#d21e25" />
                                                <path id="Path_40976" data-name="Path 40976" d="M553.1,197.049c-.632,1.548-2.155,4.72-2.215,6.208s-5.943,1.727-9.851,1.8c-.154,0-.308.008-.471,0,1.813-.043,4.4-1.163,6.08-1.9,1.71-.752,4.173-3.207,3.95-8.551-.2-5.345-3.2-11.972-4.275-19.565-1.061-7.585-.09-22.311-.09-22.311l3.228.3c-.009,3.411-.094,6.764-.171,9.585A92.451,92.451,0,0,0,552.9,189.1c.556,1.958.967,6.071.2,7.953" transform="translate(-175.351 -46.955)" fill="#d21e25" />
                                                <path id="Path_40977" data-name="Path 40977" d="M482.986,114.209c-10.766-22.9-16.718-39.548-16.718-39.548-2.274-6.379-1.274-33.306,1.711-43.166a21.167,21.167,0,0,1,2.319-.279s-3.967,20.487-1.935,40.9c1.113,11.173,13.708,33.16,14.623,42.1" transform="translate(-155.042 -14.283)" fill="#d21e25" />
                                                <path id="Path_40978" data-name="Path 40978" d="M537.836,304.476a78.294,78.294,0,0,1,1.319,9.725c.121,1.631.211,3.266.229,4.9a34.615,34.615,0,0,1-.223,4.914c-.127-1.636-.306-3.255-.444-4.88l-.414-4.873c-.238-3.253-.462-6.508-.467-9.791" transform="translate(-174.619 -87.751)" />
                                                <rect id="Rectangle_15806" data-name="Rectangle 15806" width="27.848" height="12.621" transform="translate(120.468 222.974)" fill="#eddfd6" />
                                                <path id="Path_40979" data-name="Path 40979" d="M251.6,321.318v1.261h1.1v3.062H243.91v-12.62H252.7v8.3Z" transform="translate(-95.594 -90.049)" fill="#ad9384" />
                                                <g id="Group_17053" data-name="Group 17053" transform="translate(119.591 227.879)" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17052" data-name="Group 17052">
                                                        <g id="Group_17051" data-name="Group 17051" clip-path="url(#clip-path-61)">
                                                            <line id="Line_134" data-name="Line 134" x1="29.067" transform="translate(0 0.123)" fill="none" stroke="#d6b78e" stroke-miterlimit="10" stroke-width="0.338" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Group_17056" data-name="Group 17056" transform="translate(119.859 229.161)" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17055" data-name="Group 17055">
                                                        <g id="Group_17054" data-name="Group 17054" clip-path="url(#clip-path-62)">
                                                            <line id="Line_135" data-name="Line 135" x1="29.067" transform="translate(0 0.124)" fill="none" stroke="#d6b78e" stroke-miterlimit="10" stroke-width="0.338" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Group_17059" data-name="Group 17059" transform="translate(120.468 231.776)" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17058" data-name="Group 17058">
                                                        <g id="Group_17057" data-name="Group 17057" clip-path="url(#clip-path-63)">
                                                            <line id="Line_136" data-name="Line 136" x1="29.067" transform="translate(0 0.124)" fill="none" stroke="#d6b78e" stroke-miterlimit="10" stroke-width="0.338" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <rect id="Rectangle_15813" data-name="Rectangle 15813" width="27.848" height="25.381" transform="translate(116.515 197.723)" fill="#fffaf8" />
                                                <g id="Group_17062" data-name="Group 17062" transform="translate(120.468 234.391)" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17061" data-name="Group 17061">
                                                        <g id="Group_17060" data-name="Group 17060" clip-path="url(#clip-path-63)">
                                                            <line id="Line_137" data-name="Line 137" x1="29.067" transform="translate(0 0.124)" fill="none" stroke="#d6b78e" stroke-miterlimit="10" stroke-width="0.338" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Group_17065" data-name="Group 17065" transform="translate(126.976 225.243)" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17064" data-name="Group 17064">
                                                        <g id="Group_17063" data-name="Group 17063" clip-path="url(#clip-path-63)">
                                                            <line id="Line_138" data-name="Line 138" x1="29.067" transform="translate(0 0.124)" fill="none" stroke="#d6b78e" stroke-miterlimit="10" stroke-width="0.338" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <rect id="Rectangle_15812" data-name="Rectangle 15812" width="1.238" height="1.26" transform="translate(156.49 226.742)" fill="#f8d2a3" />
                                                <path id="Path_40980" data-name="Path 40980" d="M250.71,295.166V297.7h1.741v6.157H238.5V278.48H252.45v16.686Z" transform="translate(-94.141 -80.762)" fill="#ccb2a2" />
                                                <g id="Group_17068" data-name="Group 17068" transform="translate(115.638 207.659)" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17067" data-name="Group 17067">
                                                        <g id="Group_17066" data-name="Group 17066" clip-path="url(#clip-path-66)">
                                                            <line id="Line_139" data-name="Line 139" x1="29.067" transform="translate(0 0.175)" fill="none" stroke="#e8bfa3" stroke-miterlimit="10" stroke-width="0.479" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Group_17071" data-name="Group 17071" transform="translate(115.906 210.238)" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17070" data-name="Group 17070">
                                                        <g id="Group_17069" data-name="Group 17069" clip-path="url(#clip-path-67)">
                                                            <line id="Line_140" data-name="Line 140" x1="29.067" transform="translate(0 0.175)" fill="none" stroke="#e8bfa3" stroke-miterlimit="10" stroke-width="0.479" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Group_17074" data-name="Group 17074" transform="translate(116.515 215.497)" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17073" data-name="Group 17073">
                                                        <g id="Group_17072" data-name="Group 17072" clip-path="url(#clip-path-67)">
                                                            <line id="Line_141" data-name="Line 141" x1="29.067" transform="translate(0 0.175)" fill="none" stroke="#e8bfa3" stroke-miterlimit="10" stroke-width="0.479" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Group_17077" data-name="Group 17077" transform="translate(116.515 220.756)" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17076" data-name="Group 17076">
                                                        <g id="Group_17075" data-name="Group 17075" clip-path="url(#clip-path-69)">
                                                            <line id="Line_142" data-name="Line 142" x1="29.067" transform="translate(0 0.175)" fill="none" stroke="#e8bfa3" stroke-miterlimit="10" stroke-width="0.479" />
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Group_17080" data-name="Group 17080" transform="translate(123.023 202.358)" style="mix-blend-mode:multiply;isolation:isolate">
                                                    <g id="Group_17079" data-name="Group 17079">
                                                        <g id="Group_17078" data-name="Group 17078" clip-path="url(#clip-path-67)">
                                                            <line id="Line_143" data-name="Line 143" x1="29.067" transform="translate(0 0.175)" fill="none" stroke="#e8bfa3" stroke-miterlimit="10" stroke-width="0.479" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <rect id="Rectangle_15824" data-name="Rectangle 15824" width="518.483" height="310.393" transform="translate(4506 3642)" fill="none" />
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                </div>
                <div class="roww bestsavgsp">
                    <div class="coll-md-3"><span class="onlineplan">Offline plan</span>
                        <ul class="onlinegsp h-361">
                            <li class="opc1 accelclr">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Invest Maxima</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc2">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Single Invest Plus</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc3">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Single Invest Advantage</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc4">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Platinum Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc5">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Ace Investment</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                            <li class="opc6">
                                <div class="d-flex align-center accordioncard">
                                    <div>Kotak Wealth Optima Plan</div>
                                    <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="coll-md-9">
                        <div class="kotaksavcard accelcard op1 accelblock">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Invest Maxima</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/KotakInvestMaxima.pdf" download="Brochure" title="Kotak Invest Maxima"><img src="assets/images/gspdownload.svg" class="Kotak Invest Maxima" alt="Kotak Invest Maxima" title="Kotak Invest Maxima"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-30">
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
                            <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-invest-maxima" class="gspview" title="View Kotak Invest Maxima">View Kotak Invest Maxima</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op2">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Single Invest Plus</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn" href="assets/images/uploads/how_do_i/KotakSingleInvestPlus.pdf" title="Kotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest PlusKotak Single Invest Plus" download="Brochure"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Single Invest Plus" title="Kotak Single Invest Plus"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-30">
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
                            <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-single-invest-plus" class="gspview" title="View Kotak Single Invest Plus">View Kotak Single Invest Plus</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op3">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Single Invest Advantage</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf" title="Kotak Single Invest Advantage" download="Brochure"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Single Invest Advantage" title="Kotak Single Invest Advantage"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-30">
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
                            <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-single-invest-advantage" class="gspview" title="View Kotak Single Invest Advantage">View Kotak Single Invest Advantage</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op4">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Platinum Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-platinum-sales-brochure.pdf" title="Kotak Platinum Plan" download="Brochure"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Platinum Plan" title="Kotak Platinum Plan"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
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
                            <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-platinum-plan" class="gspview" title="View Kotak Platinum Plan">View Kotak Platinum Plan</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op5">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Ace Investment</h3>
                                </div>
                                <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-ace-investment-brochure.pdf" title="Kotak Ace Investment" download="Brochure"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Ace Investment" title="Kotak Ace Investment"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
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
                            <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-ace-investment-plan" class="gspview" title="View Kotak Ace Investment">View Kotak Ace Investment</a></div>
                        </div>
                        <div class="kotaksavcard accelcard op6">
                            <div class="d-flex">
                                <div>
                                    <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Wealth Optima Plan</h3>
                                </div>
                                <div class="ml-auto tooltip"><a target="_blank" class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/Kotak-Wealth-Optima-Plan-Brochure-Unit-Linked-Insurance-Plan.pdf" title="Kotak Wealth Optima Plan" download="Brochure"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Wealth Optima Plan" title="Kotak Wealth Optima Plan"></a><span class="tooltiptext">Download Brochure</span></div>
                            </div>
                            <div class="roww mg-30">
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Choice of two investment strategies</li>
                                    </ul>
                                </div>
                                <div class="coll-md-6">
                                    <ul>
                                        <li>Options to be covered till 99 years</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-wealth-optima-plan" class="gspview" title="View Kotak Wealth Optima Plan">View Kotak Wealth Optima Plan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mobile-feat gspmobile-feat hide-desktop mb-mob-36 top-0" id="">
            <div class="midWrapper"><span class="onlineplan">Offline plan</span>
                <div class="gspaccbor">
                    <div class="accordion-div acc-div-mob accordion-btns mt-mob-15">
                        <div class="bor"><button class="accordion bor-top-zero" name="invest-maxima" role="heading" aria-level="3">
                                <h3 class="bor-top-rad">Kotak Invest Maxima</h3>
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
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/KotakInvestMaxima.pdf" title="Kotak Invest Maxima" download="Brochure"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Invest Maxima" title="Kotak Invest Maxima"></a><span class="tooltiptext">Download Brochure</span></div>
                                        </div>
                                        <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-invest-maxima" class="gspview" title="View Kotak Invest Maxima ">View Kotak Invest Maxima</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button class="accordion" name="invest-plus">
                                <h3 class="">Kotak Single Invest Plus</h3>
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
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Loyalty Additions to enhance fund growth</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/how_do_i/KotakSingleInvestPlus.pdf" download="Brochure" title="Kotak Single Invest Plus"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Single Invest Plus" title="Kotak Single Invest Plus"></a><span class="tooltiptext">Download Brochure</span></div>
                                        </div>
                                        <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-single-invest-plus" class="gspview" title="View Kotak Single Invest Plus">View Kotak Single Invest Plus</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button class="accordion" name="invest-advantage">
                                <h3>Kotak Single Invest Advantage</h3>
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
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Loyalty Additions to give boost to your wealth</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/Kotak_Single_Invest_Advantage_-_Brochure.pdf" title="Kotak Single Invest Plus"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Single Invest Plus" title="Kotak Single Invest Plus"></a><span class="tooltiptext">Download Brochure</span></div>
                                        </div>
                                        <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-single-invest-advantage" class="gspview" title="View Kotak Single Invest Advantage ">View Kotak Single Invest Advantage</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button class="accordion" name="platinum-plan">
                                <h3>Kotak Platinum Plan</h3>
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
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-platinum-sales-brochure.pdf" title="Kotak Platinum Plan" download="Brochure"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Platinum Plan" title="Kotak Platinum Plan"></a><span class="tooltiptext">Download Brochure</span></div>
                                        </div>
                                        <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-platinum-plan" title="View Kotak Platinum Plan" class="gspview">View Kotak Platinum Plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button class="accordion" name="ace-investment">
                                <h3>Kotak Ace Investment</h3>
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
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-ace-investment-brochure.pdf" title="" download="Brochure"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Ace Investment" title="Kotak Ace Investment"></a><span class="tooltiptext">Download Brochure</span></div>
                                        </div>
                                        <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-ace-investment-plan" class="gspview" title="View Kotak Ace Investment">View Kotak Ace Investment</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bor"><button class="accordion" name="wealth-plan">
                                <h3 class="bor-bot-rad">Kotak Wealth Optima Plan</h3>
                            </button>
                            <div class="panel tab-detail mb-0 tab-align" style="">
                                <div id="six" class="tabcontent">
                                    <div class="kotaksavcard accelcard accelcardacc">
                                        <div class="d-flex">
                                            <div class="roww mg-30">
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Choice of two investment strategies</li>
                                                    </ul>
                                                </div>
                                                <div class="coll-md-6">
                                                    <ul>
                                                        <li>Options to be covered till 99 years</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/Kotak-Wealth-Optima-Plan-Brochure-Unit-Linked-Insurance-Plan.pdf" title="Kotak Wealth Optima Plan" download="Brochure"><img src="assets/images/gspdownload.svg" class="" alt="Kotak Wealth Optima Plan" title="Kotak Wealth Optima Plan"></a><span class="tooltiptext">Download Brochure</span></div>
                                        </div>
                                        <div class=""><a target="_blank" href="insurance-plans/savings-and-investments-plans/kotak-wealth-optima-plan" class="gspview" title="View Kotak Wealth Optima Plan<">View Kotak Wealth Optima Plan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefits bene position-relative ulip-fund mt-30 top-0" id="ulip-funds">
            <div class="midWrapper">
                <h2 class="mb-35 mb-mob-15 term-tags">Which ULIP funds are suited for you?</h2><span class="pagingInfo d-flex playfair_font justify-content-center"></span>
                <div class="bene-slick unslick gspbene">
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <div class="ufunds-icon uf1"></div>
                            </div>
                            <div class="coll-md-11">
                                <h3>Equity</h3>
                                <p>Equity funds are for people who have high-risk appetite. Equity funds and their performance is based on the ups and downs of the market. You can opt for equity funds if you have a good risk-appetite and want to create some wealth in long term.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <div class="ufunds-icon uf2"></div>
                            </div>
                            <div class="coll-md-11">
                                <h3>Liquid funds</h3>
                                <p>Investment made in Liquid funds frequently have strong credit ratings, making them trustworthy choices. It is perfect for those looking for safer solutions because it has a low risk component. Treasury bills and certificates of deposit (CDs), two highly liquid market vehicles, are where the money invested in this kind of ULIP is placed. The maturity time for liquid funds ULIPs is also brief, lasting only a few weeks to months. Thus, they are excellent for short-term objectives.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <div class="ufunds-icon uf3"></div>
                            </div>
                            <div class="coll-md-11">
                                <h3>Debt</h3>
                                <p>Investments made using borrowed money ULIPs are geared for debt instruments. Debentures, government bonds, corporate bonds, and fixed-income bonds fall under this category. These devices are safer since they carry low to moderate risk. However, the returns from them are similarly moderate and typically lower than those from equities ULIPs.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <div class="ufunds-icon uf4"></div>
                            </div>
                            <div class="coll-md-11">
                                <h3>Cash funds</h3>
                                <p>Cash payments ULIPs invest in bank-owned money market funds. These instruments have a very low risk profile. As a result, of all ULIP categories, they offer the lowest returns. Risk-averse investors have the option of choosing cash funds ULIPs.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <div class="ufunds-icon uf5"></div>
                            </div>
                            <div class="coll-md-11">
                                <h3>Balanced funds</h3>
                                <p>ULIPs give investors the choice to invest in both equities and debt instruments in order to balance risk and profit. The remainder of the fund is invested in equity, while a portion is assigned to debt instruments with set interest rates. By doing this, the danger of investing exclusively in stock is essentially reduced. This maintains the fund's stability, producing consistent returns.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="varfac ulip-various-fact top-0" id="various-factors-consider-buying-ulip">
            <div class="midWrapper position-relative mb-50">
                <h2 class="mb-20 term-tags fnt-24">What are the various factors to consider before buying ULIPs?</h2>
                <p>ULIPs are life insurance products that are not the same as conventional insurance policies. Here are some factors that must be considered before choosing a Unit Linked Insurance Plan.</p><span class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>
                <div class="factorsslick">
                    <div>
                        <div class="typescard">
                            <div class="factor-icon bene-icon fs1"></div>
                            <h3>Objective</h3>
                            <p>Before you buy a ULIP, you should have a long-term goal (retirement, wealth creation, etc.) in mind. It is recommended because ULIPs provide higher returns over a long period of time.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="factor-icon bene-icon fs2"></div>
                            <h3>Premium Payment/Lock-in Period</h3>
                            <p>It's crucial to understand your ULIP policy's premium payment and lock-in periods. The total number of years for which you will pay the premium to the insurer is called the premium payment period/term. The lock-in period for ULIPs is five years.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="factor-icon bene-icon fs3"></div>
                            <h3>Charges Involved</h3>
                            <p>There are a number of charges (policy administration, premium allocation, etc.) that are deducted from the premium. Knowing these charges and what they imply can help you choose the best coverage for your long-term goals.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="factor-icon bene-icon fs4"></div>
                            <h3>Monthly Expenditure</h3>
                            <p>You should go for a plan wherein you’re sure of making regular premium payments. This will depend on the prior knowledge of all the other expenditures that you have in a month.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="factor-icon bene-icon fs5"></div>
                            <h3>Knowledge of Funds</h3>
                            <p>Your ULIP premium is split up and invested in a variety of funds. Debt funds, income funds, and equity funds are the most common types. You need to understand how these funds perform and the risks involved.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="factor-icon bene-icon fs6"></div>
                            <h3>Inflation</h3>
                            <p>When choosing an insurance plan, you must keep inflation in mind because the cost of everyday necessities will definitely rise in the future.</p>
                        </div>
                    </div>
                    <div>
                        <div class="typescard">
                            <div class="factor-icon bene-icon fs7"></div>
                            <h3>Risk Factors</h3>
                            <p>If you have a high-risk appetite, you can invest in equity. If you feel the markets are influenced and not performing, you can opt for fund switching to balanced funds to secure your returns.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ensure term-insure ulip-insure top-0" id="ensure-plns">
            <div class="midWrapper">
                <div class="roww">
                    <div class="coll-md-10 align-self-center mr-32 txt-mob-center">
                        <h2 class="parttxt" style="color:#fff!important;font-size:21px!important;letter-spacing:.42px!important;font-weight:700!important;text-transform:initial!important">Insurance and investment in one plan with Kotak e-Invest.</h2>
                    </div>
                    <div class="coll-md-2 mt-auto mb-auto ml-mob-initial mll-mob-initial w-mob-150 txt-mob-center"><a rel="nofollow" href="https://www.kotaklife.com/life-insurance-plans/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=bluebanner2" target="_blank" class="en-btn mt-12 inknw" title="Invest in ULIP">Invest in ULIP</a></div>
                </div>
            </div>
        </section>
        <section class="docreq ulip-docq top-0" id="documents-required">
            <div class="midWrapper">
                <div class="roww">
                    <div class="coll-40 align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="355" height="470" viewBox="0 0 355 470">
                            <g>
                                <g>
                                    <g>
                                        <path fill="#ebebeb" d="M12.145 433.642v-.315h41.782v.315z" />
                                    </g>
                                    <g>
                                        <path fill="#ebebeb" d="M235.035 429.693v-.315h16.261v.315z" />
                                    </g>
                                    <g>
                                        <path fill="#ebebeb" d="M138.59 431.03v-.315h34.237v.316z" />
                                    </g>
                                    <g>
                                        <path fill="#ebebeb" d="M55.19 421.935v-.315h70.786v.315z" />
                                    </g>
                                    <g>
                                        <path fill="#ebebeb" d="M251.448.252a6.9 6.9 0 0 1 6.888 6.888v342.42a6.9 6.9 0 0 1-6.888 6.888H7.844a6.9 6.9 0 0 1-6.888-6.888V7.14A6.9 6.9 0 0 1 7.844.252zM7.844 356.764h243.604a7.216 7.216 0 0 0 7.203-7.203V7.14A7.216 7.216 0 0 0 251.448 0H7.844A7.203 7.203 0 0 0 .666 7.14v342.42c0 3.969 3.21 7.19 7.178 7.204z" />
                                    </g>
                                    <g>
                                        <path fill="#e6e6e6" d="M245.53 304.523c2.524-7.253 22.443 2.612 30.53 14.634 5.387 7.999 8.68 16.552 10.206 28.032-.177-13.095-.391-27.174-.593-40.458-1.64-3.305-5.374-10.937-8.049-16.993-8.97-20.184-30.277-27.754-37.632-40.445-9.65-16.703-9.587-41.744-1.387-50.79 7.14-7.846 30.769 45.265 33.43 51.194a157.694 157.694 0 0 1 13.537 50.235c-.202-12.477-.391-23.97-.543-32.8-.504-28.827-1.122-38.1-1.413-40.95-.984-1.388-2.144-3.015-2.825-3.886-5.715-7.355-18.406-16.122-24.74-26.82-9.259-15.63-7.77-34.327-1.26-41.29 6.786-7.28 18.796 9.928 25.167 26.971 6.37 17.044 3.646 33.368 5.437 47.535.366 2.776.757 13.322 1.11 27.956 1.943-15.744 5.79-26.29 12.931-36.118 8.83-12.085 16.4-26.808 23.578-24.903 7.178 1.905 3.343 21.37-2.384 35.046-5.046 12.186-30.277 24.322-33.935 34.125.441 19.831.832 44.96 1.11 68.35 1.98-12.086.618-13.095 8.742-31.602 4.82-11 24.613-24.562 26.972-17.005 2.359 7.556-1.262 21.837-8.692 31.841-6.03 8.074-19.403 8.061-22.493 13.07-.732 1.173-3.116 5.651-4.479 8.225.328 28.561.467 53.78.303 62.37l-1.262.089c0-2.22-.1-16.754-.353-35.98-3.255-10.23-25.117-16.198-31.866-26.845-7.103-11.089-12.187-24.083-9.147-32.788z" />
                                    </g>
                                    <g>
                                        <path fill="#f0f0f0" d="M266.08 413.028h41.96a4.82 4.82 0 0 0 4.73-3.86l2.978-14.684h-57.375l2.99 14.684a4.807 4.807 0 0 0 4.718 3.86z" />
                                    </g>
                                    <g>
                                        <path fill="#f0f0f0" d="M257.174 400.173h59.772a2.813 2.813 0 0 0 2.8-2.523l1.262-10.862a2.826 2.826 0 0 0-2.8-3.128h-62.22a2.814 2.814 0 0 0-2.787 3.128l1.261 10.862a2.8 2.8 0 0 0 2.712 2.523z" />
                                    </g>
                                    <g>
                                        <path fill="#f0f0f0" d="M33.945 407.768V236.312h40.18v171.456z" />
                                    </g>
                                    <g>
                                        <path fill="#f0f0f0" d="M36.658 413.028v-5.26h208.18v5.26z" />
                                    </g>
                                    <g>
                                        <path fill="#f5f5f5" d="M74.139 407.768V236.31h173.399v171.457z" />
                                    </g>
                                    <g>
                                        <path fill="#f0f0f0" d="M89.933 340.2v-36.307h141.81V340.2z" />
                                    </g>
                                    <g>
                                        <path fill="#f0f0f0" d="M89.933 386.927V350.62h141.81v36.307z" />
                                    </g>
                                    <g>
                                        <path fill="#f5f5f5" d="M144 310.15a3 3 0 0 1-3-3v-1.835a3 3 0 0 1 3-3h33.676a3 3 0 0 1 3 3v1.835a3 3 0 0 1-3 3z" />
                                    </g>
                                    <g>
                                        <path fill="#f0f0f0" d="M89.933 293.472v-36.307h141.81v36.307z" />
                                    </g>
                                    <g>
                                        <path fill="#f5f5f5" d="M176.751 263.422h-31.828a3.936 3.936 0 0 1-3.924-3.91 3.936 3.936 0 0 1 3.924-3.924h31.828a3.936 3.936 0 0 1 3.924 3.924 3.936 3.936 0 0 1-3.924 3.91z" />
                                    </g>
                                    <g>
                                        <path fill="#f5f5f5" d="M176.751 356.877h-31.828a3.923 3.923 0 0 1-3.924-3.91 3.936 3.936 0 0 1 3.924-3.924h31.828a3.936 3.936 0 0 1 3.924 3.923 3.923 3.923 0 0 1-3.924 3.911z" />
                                    </g>
                                    <g>
                                        <path fill="#f0f0f0" d="M74.138 236.311v-4.894h176.97v4.894z" />
                                    </g>
                                    <g>
                                        <path fill="#e6e6e6" d="M30.136 236.325v-4.895h44.002v4.895z" />
                                    </g>
                                    <g>
                                        <path fill="#e6e6e6" d="M48.604 183.075V32.574h160.884v150.501z" />
                                    </g>
                                    <g>
                                        <path fill="#f5f5f5" d="M50.952 183.075V32.574h163.546v150.501z" />
                                    </g>
                                    <g>
                                        <path fill="#e6e6e6" d="M48.604 189.231v-6.156h160.884v6.156z" />
                                    </g>
                                    <g>
                                        <path fill="#f5f5f5" d="M66.341 189.231v-6.156h152.621v6.156z" />
                                    </g>
                                    <g transform="rotate(90 132.5 107.5)">
                                        <path fill="#fafafa" d="M66.803 182.602V33.034h131.844v149.568z" />
                                    </g>
                                    <g transform="rotate(90 207 107.5)">
                                        <path fill="#e6e6e6" d="M141.076 108.328v-.996h131.843v.996z" />
                                    </g>
                                    <g>
                                        <path fill="#fff" d="M82.742 173.74l25.862-131.844H142.5L116.64 173.74z" />
                                    </g>
                                    <g>
                                        <path fill="#fff" d="M122.128 173.74l25.861-131.844h15.303L137.43 173.74z" />
                                    </g>
                                    <g transform="rotate(90 63.5 97)">
                                        <path fill="#ebebeb" d="M-6.632 97.8V96.2h140.738V97.8z" />
                                    </g>
                                    <g opacity=".5">
                                        <path fill="#e6e6e6" d="M45.891 49.654V26.62h172.264v23.035z" />
                                    </g>
                                    <g>
                                        <path fill="#e0e0e0" d="M45.891 29.483v-2.864h172.264v2.864z" />
                                    </g>
                                    <g>
                                        <path fill="#ebebeb" d="M45.942 27.88a.87.87 0 0 1-.87-.87v-.77c0-.48.39-.87.87-.87h172.15c.481 0 .87.39.87.87v.77c0 .48-.389.87-.87.87z" />
                                    </g>
                                    <g>
                                        <path fill="#fff" d="M218.37 50.26H45.678a.593.593 0 0 1-.593-.606c0-.327.265-.593.593-.593H218.37c.33 0 .598.264.605.593a.606.606 0 0 1-.605.606z" />
                                    </g>
                                    <g>
                                        <g>
                                            <path fill="#f5f5f5" d="M19.728 455.72c0-7.888 68.029-14.281 151.946-14.281 83.918 0 151.946 6.393 151.946 14.28S255.592 470 171.674 470c-83.917 0-151.946-6.394-151.946-14.28z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path fill="#ababab" d="M288.622 157.823l1.123-3.153a10.16 10.16 0 0 1 10.758-6.68l44.708 5.23c5.578.654 9.569 5.705 8.916 11.282l-12.723 108.8a6.97 6.97 0 0 1-7.737 6.119l-159.972-18.71a6.97 6.97 0 0 1-6.137-7.737l11.039-94.057a6.97 6.97 0 0 1 7.727-6.118l92.896 10.87a8.897 8.897 0 0 0 9.402-5.846z" />
                                        </g>
                                        <g transform="rotate(-168.73 302.5 150.5)">
                                            <path fill="#dbdbdb" d="M276.723 185.868v-71.006h51.537v71.006z" />
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#fff" d="M290.905 127.241l31.134 6.212a2.807 2.807 0 0 0 3.283-2.19 2.807 2.807 0 0 0-2.189-3.283l-31.152-6.184a2.807 2.807 0 0 0-3.284 2.19 2.807 2.807 0 0 0 2.208 3.255z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M288.613 138.776l31.134 6.24a2.806 2.806 0 0 0 3.274-2.19 2.807 2.807 0 0 0-2.19-3.274l-31.133-6.202a2.807 2.807 0 0 0-3.274 2.189 2.807 2.807 0 0 0 2.189 3.237z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M286.32 150.292l31.135 6.202a2.807 2.807 0 0 0 3.274-2.189 2.807 2.807 0 0 0-2.19-3.274l-31.133-6.212a2.806 2.806 0 0 0-3.274 2.19 2.806 2.806 0 0 0 2.189 3.283z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M284.02 161.855l31.133 6.202a2.806 2.806 0 0 0 3.284-2.189 2.806 2.806 0 0 0-2.19-3.283l-31.133-6.203a2.807 2.807 0 0 0-3.284 2.19 2.806 2.806 0 0 0 2.19 3.283z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M290.24 175.018l22.621 4.509a2.807 2.807 0 0 0 3.275-2.19 2.807 2.807 0 0 0-2.19-3.283l-22.62-4.51a2.806 2.806 0 0 0-3.274 2.19 2.807 2.807 0 0 0 2.189 3.284z" />
                                            </g>
                                        </g>
                                        <g transform="rotate(-172.21 233 136)">
                                            <path fill="#dbdbdb" d="M207.09 171.26v-71.005h51.538v71.005z" />
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#fff" d="M219.89 113.395l31.452 4.304a2.807 2.807 0 0 0 3.143-2.386 2.806 2.806 0 0 0-2.385-3.143l-31.452-4.303a2.807 2.807 0 0 0-3.143 2.385 2.807 2.807 0 0 0 2.385 3.143z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M218.3 125.024l31.452 4.303a2.807 2.807 0 0 0 3.143-2.385 2.807 2.807 0 0 0-2.386-3.134l-31.451-4.304a2.807 2.807 0 0 0-3.144 2.377 2.807 2.807 0 0 0 2.386 3.143z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M239.499 139.777l8.662 1.188a2.807 2.807 0 0 0 3.144-2.386 2.807 2.807 0 0 0-2.386-3.143l-8.672-1.188a2.807 2.807 0 0 0-3.134 2.386 2.807 2.807 0 0 0 2.386 3.143z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M222.687 137.476l8.673 1.188a2.807 2.807 0 0 0 3.134-2.386 2.807 2.807 0 0 0-2.386-3.143l-8.663-1.179a2.807 2.807 0 0 0-3.143 2.376 2.807 2.807 0 0 0 2.385 3.144z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M215.12 148.29l31.451 4.303a2.807 2.807 0 0 0 3.143-2.385 2.807 2.807 0 0 0-2.385-3.134l-31.452-4.313a2.807 2.807 0 0 0-3.144 2.386 2.807 2.807 0 0 0 2.386 3.143z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M222.117 161.097l22.864 3.125a2.807 2.807 0 0 0 3.134-2.376 2.807 2.807 0 0 0-2.377-3.144l-22.864-3.124a2.807 2.807 0 0 0-3.133 2.376 2.807 2.807 0 0 0 2.376 3.143z" />
                                            </g>
                                        </g>
                                        <g transform="rotate(-175.02 283 145)">
                                            <path fill="#ededed" d="M257.142 180.463v-71.006h51.538v71.006z" />
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#fff" d="M268.864 123.274l31.63 2.75a2.807 2.807 0 0 0 3.022-2.534 2.807 2.807 0 0 0-2.536-3.013l-31.63-2.806a2.807 2.807 0 0 0-3.021 2.535 2.807 2.807 0 0 0 2.535 3.068z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M267.845 134.968l31.63 2.807a2.807 2.807 0 0 0 3.02-2.535 2.807 2.807 0 0 0-2.534-3.022l-31.63-2.807a2.807 2.807 0 0 0-3.022 2.536 2.807 2.807 0 0 0 2.536 3.021z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M266.825 146.662l31.63 2.807a2.807 2.807 0 0 0 3.021-2.535 2.806 2.806 0 0 0-2.535-3.022l-31.63-2.807a2.807 2.807 0 0 0-3.021 2.536 2.807 2.807 0 0 0 2.535 3.021z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M265.786 158.356l31.63 2.807a2.807 2.807 0 0 0 3.022-2.536 2.807 2.807 0 0 0-2.535-3.021l-31.63-2.75a2.807 2.807 0 0 0-3.022 2.535 2.807 2.807 0 0 0 2.535 2.965z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M273.43 170.808l22.985 2.002a2.807 2.807 0 0 0 3.05-2.535 2.807 2.807 0 0 0-2.535-3.022l-22.986-2.002a2.807 2.807 0 0 0-3.022 2.535 2.806 2.806 0 0 0 2.508 3.022z" />
                                            </g>
                                        </g>
                                        <g transform="rotate(-177.24 222 140.5)">
                                            <path fill="#e5e5e5" d="M196.021 176.123v-71.006h51.538v71.006z" />
                                        </g>
                                        <g>
                                            <g>
                                                <path fill="#fff" d="M206.905 119.476l31.705 1.534a2.807 2.807 0 0 0 2.919-2.647 2.807 2.807 0 0 0-2.648-2.919l-31.714-1.534a2.807 2.807 0 0 0-2.919 2.647 2.807 2.807 0 0 0 2.657 2.92z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M206.335 131.208l31.713 1.524a2.807 2.807 0 0 0 2.92-2.647 2.807 2.807 0 0 0-2.658-2.919l-31.704-1.534a2.807 2.807 0 0 0-2.919 2.657 2.807 2.807 0 0 0 2.648 2.919z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M228.74 144.08l8.738.421a2.807 2.807 0 0 0 2.919-2.647 2.807 2.807 0 0 0-2.648-2.92l-8.738-.43a2.806 2.806 0 0 0-2.918 2.657 2.806 2.806 0 0 0 2.647 2.92z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M211.798 143.22l8.738.42a2.807 2.807 0 0 0 2.918-2.647 2.807 2.807 0 0 0-2.647-2.919l-8.738-.42a2.807 2.807 0 0 0-2.919 2.647 2.807 2.807 0 0 0 2.648 2.919z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M205.203 154.66l31.713 1.526a2.807 2.807 0 0 0 2.92-2.648 2.807 2.807 0 0 0-2.658-2.919l-31.704-1.534a2.807 2.807 0 0 0-2.919 2.657 2.807 2.807 0 0 0 2.648 2.919z" />
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M213.304 166.804l23.042 1.113a2.807 2.807 0 0 0 2.919-2.647 2.807 2.807 0 0 0-2.648-2.92l-23.042-1.112a2.807 2.807 0 0 0-2.918 2.647 2.807 2.807 0 0 0 2.647 2.919z" />
                                            </g>
                                        </g>
                                        <g>
                                            <path fill="#c5c5c5" d="M274.346 159.834l.824-3.078a9 9 0 0 1 10.019-6.548l44.708 5.23a11.226 11.226 0 0 1 9.86 11.095l-2.535 106.508a6.146 6.146 0 0 1-7.082 5.968L170.168 260.3a7.69 7.69 0 0 1-6.764-7.587l2.189-92.073a6.155 6.155 0 0 1 7.091-5.969l92.887 10.862a7.868 7.868 0 0 0 8.775-5.698z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path fill="#ffc3bd" d="M179.805 167.924c.933 4.68 1.93 9.297 3.053 13.877 1.123 4.579 2.22 9.209 3.444 13.788l1.867 6.85.24.883c.113.379.24.757.39 1.148.323.86.747 1.677 1.262 2.435a8.83 8.83 0 0 0 2.36 2.397 7.569 7.569 0 0 0 3.443 1.262 9.878 9.878 0 0 0 5.387-1.148 19.743 19.743 0 0 0 3.507-2.435 30.554 30.554 0 0 0 5.135-5.79l-3.596-3.13a43.98 43.98 0 0 1-5.424 3.609c-.824.467-1.695.843-2.6 1.123-.769.252-1.45.214-1.45.088s.126 0 .19 0c.062 0 0 0 0-.214 0-.215-.152-.442-.24-.77l-.29-1.4-1.464-6.888-2.965-13.776c-.958-4.592-1.993-9.197-2.99-13.739z" />
                                        </g>
                                        <g>
                                            <path fill="#ed1c24" d="M183.993 153.504c10.761 8.238 10.32 23.768 10.32 23.768l-19.239 4.604s-5.916-15.618-3.52-21.332c2.498-5.955 6.371-11.682 12.44-7.04z" />
                                        </g>
                                        <g>
                                            <path fill="#ffc3bd" d="M205.338 198.251l7.078-7.077 3.784 11.076s-5.98 3.217-11.694.177z" />
                                        </g>
                                        <g>
                                            <path fill="#ffc3bd" d="M222.218 190.076l1.3 8.755-7.28 3.42-3.822-11.077z" />
                                        </g>
                                        <g>
                                            <path fill="#ffc3bd" d="M121.623 446.409l10.824 1.06 11.265-25.774-10.824-1.06z" />
                                        </g>
                                        <g>
                                            <path fill="#ffc3bd" d="M51.885 408.31l8.137 7.633 17.548-19.29-8.137-7.632z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M63.743 412.284l-6.106-11a.896.896 0 0 0-1.11-.417l-9.398 3.583a1.792 1.792 0 0 0-.87 2.523c2.194 3.785 3.443 5.526 6.13 10.37 1.653 2.977 4.87 9.802 7.153 13.877 2.284 4.075 6.472 2.081 5.892.164-2.612-8.604-2.12-13.385-1.388-17.17a2.902 2.902 0 0 0-.303-1.93z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M133.885 444.125h-13.297c-.492.001-.921.333-1.047.808l-2.889 10.509a1.652 1.652 0 0 0 1.615 2.106H148.884c4.87 0 5.88-4.907 3.873-5.361-9.02-1.993-14.205-4.744-16.993-7.368a2.75 2.75 0 0 0-1.88-.694z" />
                                        </g>
                                        <g opacity=".2">
                                            <path d="M143.7 421.708l-5.804 13.284h-11.29l6.27-14.344z" />
                                        </g>
                                        <g opacity=".2">
                                            <path d="M69.433 389.034l8.137 7.632-9.058 9.941-8.137-7.645z" />
                                        </g>
                                        <g>
                                            <path fill="#ed1c24" d="M180.738 151.915s4.87 2.132-11.454 66.723l-45.34-3.924c2.346-18.38 3.356-29.76-2.183-68.4a133.489 133.489 0 0 1 19.466-.871 145.21 145.21 0 0 1 20.588 1.779 192.007 192.007 0 0 1 18.923 4.693z" />
                                        </g>
                                        <g>
                                            <path fill="#fff" d="M141.227 145.077h-5.601c-1.83 2.813 4.1 15.139 13.877 23.2a24.851 24.851 0 0 1 7.884-11.43z" />
                                        </g>
                                        <g>
                                            <path fill="#fff" d="M161.815 147.058s1.148.164 3.886.795c1.83 2.813 4.92 14.835-.467 20.966a24.196 24.196 0 0 0-7.809-11.87z" />
                                        </g>
                                        <g>
                                            <path fill="#ffc3bd" d="M145.276 122.432c.72 6.737.972 18.924-4.05 23.011 0 0 5.363 5.475 16.2 11.505 7.884-5.45 4.39-9.726 4.39-9.726-7.23-2.397-6.56-7.86-4.832-12.906z" />
                                        </g>
                                        <g>
                                            <path fill="#464646" d="M157.614 156.986s-6.648-7.241-10.092-5.853c-3.444 1.387-.782 3.872-.48 6.206.303 2.334-1.337 8.54 3.268 6.926 4.605-1.615 7.304-7.279 7.304-7.279z" />
                                        </g>
                                        <g>
                                            <path fill="#464646" d="M157.88 156.835s3.14-5.551 6.534-4.807c3.394.745 1.375 2.687 1.072 4.781-.39 2.675 2.435 7.822-1.652 6.308-4.088-1.514-5.955-6.282-5.955-6.282z" />
                                        </g>
                                        <g opacity=".2">
                                            <g opacity=".2">
                                                <path d="M159.62 155.636a7.204 7.204 0 0 1-.63 3.255 15.14 15.14 0 0 1-1.098-2.044 15.273 15.273 0 0 1 1.602-2.233c.104.33.147.677.126 1.022z" />
                                            </g>
                                            <g opacity=".2">
                                                <path d="M155.192 154.64a34.103 34.103 0 0 1 2.41 2.346 17.201 17.201 0 0 1-1.262 2.183 4.34 4.34 0 0 1-1.261-2.864 2.99 2.99 0 0 1 .113-1.665z" />
                                            </g>
                                        </g>
                                        <g>
                                            <path fill="#ed1c24" d="M157.69 159.257c.946 0 1.526-1.022 1.59-3.457.063-2.435-1.804-1.085-1.804-1.085s-2.524-1.261-2.07 1.653c.329 2.309 1.313 2.889 2.284 2.889z" />
                                        </g>
                                        <g opacity=".2">
                                            <path d="M150.045 127.29l6.926 7.026a22.264 22.264 0 0 0-.946 3.596c-2.788-.644-6.825-3.545-6.863-6.523.045-1.408.344-2.797.883-4.1z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M155.987 99.662s7.57 10.483 8.83 15.138c5.148 3.003 6.182-11.77 3.457-20.878-8.502 5.336-12.287 5.74-12.287 5.74z" />
                                        </g>
                                        <g>
                                            <path fill="#ffc3bd" d="M139.347 111.911c2.813 10.761 3.785 15.378 10.37 19.882 9.928 6.787 22.531.984 22.998-10.408.416-10.243-4.251-26.126-15.77-28.359a15.138 15.138 0 0 0-17.598 18.885z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M133.494 107.61s5.412 8.767 6.143 12.615c3.924 2.662 5.576-9.02 3.924-16.4-1.804-6.573-10.067 3.784-10.067 3.784z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M135.65 101.516c1.565 1.186 3.218-3.192 1.666-6.547 2.99.189 6.585-1.59 5.816-4.479 5.891 1.98 8.074-4.011 7.392-8.162-.82-5.046-5.21-6.118-7.796-4.794 0-2.258-5.702-6.963-7.872-3.28-4.024-1.425-10.508-.984-10.37 3.961-2.662.076-10.521 3.091-7.569 10.093-3.47.202-5.349 4.604-3.419 7.935a5.362 5.362 0 0 0-1.097 8.704c-1.602 3.331 3.254 8.289 5.84 7.696 1.969 3.015 4.984 5.286 6.952 2.712 3.784 2.788 8.137-.757 7.165-3.482 4.29-.656 8.667-7.809 3.293-10.357z" />
                                        </g>
                                        <g>
                                            <path fill="#ed1c24" d="M129.242 90.92c-2.825 4.717-2.586 10.092.518 11.92 3.103 1.83 7.935-.44 10.76-5.159 2.826-4.718 2.6-10.092-.517-11.922-3.116-1.829-7.935.455-10.76 5.16z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M155.482 98.4c.164 1.35 3.886.997 4.958-1.388 1.54 1.615 5.16 2.448 6.396.694 2.094 3.936 6.308 2.902 7.393 1.022 1.085-1.88 1.804-5.374-.379-6.068 1.262-1.085.883-6.194-2.422-5.55-1.388-2.726-5.185-5.816-7.96-3.407-1.514-1.261-7.57-3.885-10.017.921a4.302 4.302 0 0 0-6.446 2.019c-3.924-1.022-5.627 1.955-5.614 3.57-2.788.757-2.977 5.576-1.262 6.61-.668 2.435-.315 5.046 2.246 4.82.492 3.28 4.882 3.784 5.917 2.005 2.85 1.83 8.666-1.35 7.19-5.248z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M162.143 89.09c-3.191-4.415-14.836-6.308-24.915.366-9.083 5.967-8.49 19.831-1.262 19.087 7.229-.744 14.37-9.21 14.37-9.21z" />
                                        </g>
                                        <g>
                                            <path fill="#ffc3bd" d="M138.464 121.625a8.15 8.15 0 0 0 4.769 3.961c2.737.82 4.15-1.602 3.444-4.213-.644-2.347-2.826-5.601-5.589-5.273a3.646 3.646 0 0 0-2.624 5.525z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M169.284 218.638s15.34 67.87 5.046 115.72c-6.863 32.044-31.539 96.774-31.539 96.774l-19.352-.492s18.734-67.934 22.607-94.616c6.623-45.693-9.966-120.212-9.966-120.212z" />
                                        </g>
                                        <g opacity=".2">
                                            <path d="M151.597 232.35l-9.638 15.253a467.914 467.914 0 0 1 5.538 54.624c13.561-24.347 7.077-56.996 4.1-69.876z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M145.516 432.14l-23.893-.617 1.375-7.33 24.385 1.148z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M159.368 217.919s-8.995 71.97-28.51 111.267c-15.758 31.74-57.805 76.954-57.805 76.954l-10.748-11.076s28.397-49.1 40.104-70.18c28.726-51.723 5.248-91.146 21.535-110.132z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M74.138 407.591l-13.877-13.523 4.605-6.27 14.722 14.684z" />
                                        </g>
                                        <g>
                                            <path fill="#888" d="M123.49 212.002l-2.397 3.885c-.19.29.164.644.681.694l47.56 4.113c.404 0 .757-.139.807-.391l.757-4.024c.063-.278-.277-.543-.719-.58l-45.92-3.975a.807.807 0 0 0-.77.278z" />
                                        </g>
                                        <g>
                                            <path fill="#dbdbdb" d="M129.217 217.666l-1.261-.1c-.24 0-.417-.165-.392-.316l1.035-5.223c0-.164.252-.265.505-.24l1.261.101c.252 0 .429.164.391.316l-1.034 5.223c-.038.15-.265.264-.505.24z" />
                                        </g>
                                        <g>
                                            <path fill="#407bff" d="M165.84 220.833l-1.262-.101c-.24 0-.416-.164-.391-.316l1.034-5.222a.454.454 0 0 1 .505-.24l1.262.1c.252 0 .428.165.39.316l-1.034 5.223c-.038.177-.265.265-.504.24z" />
                                        </g>
                                        <g>
                                            <path fill="#dbdbdb" d="M147.522 219.256l-1.262-.114c-.252 0-.428-.164-.39-.315l1.034-5.223c0-.151.252-.265.492-.24l1.261.114c.24 0 .417.164.391.315l-1.034 5.223c-.025.151-.24.252-.492.24z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M157.564 111.545c.177.883.782 1.514 1.362 1.4.58-.113.909-.933.745-1.816-.164-.883-.795-1.514-1.375-1.4-.58.113-.909.92-.732 1.816z" />
                                        </g>
                                        <g transform="rotate(-101.12 168.5 109)">
                                            <path fill="#263238" d="M167.02 109.353c0-.592.735-1.072 1.64-1.072.906 0 1.64.48 1.64 1.072 0 .593-.734 1.073-1.64 1.073-.905 0-1.64-.48-1.64-1.073z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M168.073 107.862l2.018-1.035" />
                                        </g>
                                        <g>
                                            <path fill="#ed847e" d="M164.15 111.785a23.973 23.973 0 0 0 4.263 5.046 3.86 3.86 0 0 1-3.04 1.262z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M161.273 122.256a7.392 7.392 0 0 1-5.046-1.918.227.227 0 1 1 .328-.302 7.19 7.19 0 0 0 6.307 1.627.214.214 0 0 1 .253.177.202.202 0 0 1-.177.252 7.72 7.72 0 0 1-1.665.164z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M151.546 108.101a.442.442 0 0 1-.378-.669 5.16 5.16 0 0 1 3.999-2.522.442.442 0 1 1 .025.883 4.29 4.29 0 0 0-3.267 2.157.442.442 0 0 1-.379.151z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M170.369 104.544a.48.48 0 0 1-.215 0 4.327 4.327 0 0 0-3.91-.252.442.442 0 0 1-.404-.783 5.147 5.147 0 0 1 4.756.265c.206.121.278.384.163.593a.416.416 0 0 1-.39.177z" />
                                        </g>
                                        <g>
                                            <path fill="#ffc3bd" d="M119.831 156.633a41.25 41.25 0 0 0-2.12 2.233c-.668.744-1.26 1.476-1.866 2.22a75.12 75.12 0 0 0-3.42 4.617 76.035 76.035 0 0 0-5.65 9.98 64.654 64.654 0 0 0-3.924 10.81 69.566 69.566 0 0 0-1.262 5.64 12.086 12.086 0 0 0 .87 7.973 10.534 10.534 0 0 0 2.814 3.355 14.218 14.218 0 0 0 3.293 1.893 23.845 23.845 0 0 0 6.307 1.488c3.834.368 7.696.318 11.518-.151 7.318-.851 14.54-2.384 21.573-4.58l-1.161-4.579c-3.431.568-6.964 1.098-10.446 1.463-3.482.366-6.989.694-10.433.77a54.649 54.649 0 0 1-9.978-.555 15.82 15.82 0 0 1-4.113-1.262 3.47 3.47 0 0 1-1.855-1.652 2.522 2.522 0 0 1-.15-.909 4.429 4.429 0 0 1 0-.68c0-.253.087-.48.201-.947.353-1.627.82-3.23 1.325-4.819a66.009 66.009 0 0 1 3.784-9.235 67.56 67.56 0 0 1 5.147-8.616 67.962 67.962 0 0 1 2.977-4.037c.518-.656 1.06-1.261 1.59-1.905.53-.643 1.135-1.261 1.552-1.715z" />
                                        </g>
                                        <g>
                                            <path fill="#ffc3bd" d="M143.914 198.226l8.83-4.68.405 11.694s-6.308.404-9.916-2.523z" />
                                        </g>
                                        <g>
                                            <path fill="#ededed" d="M159.406 261.139l-7.292-79.237 15.58-11.935 47.56-4.377 8.263 89.645z" />
                                        </g>
                                        <g>
                                            <path fill="#dbdbdb" d="M152.114 181.902l15.58-11.935-4.087 14.281z" />
                                        </g>
                                        <g>
                                            <path fill="#dbdbdb" d="M198.513 249.659c0-10.73 8.699-19.428 19.428-19.428 10.73 0 19.428 8.698 19.428 19.428s-8.698 19.428-19.428 19.428-19.428-8.698-19.428-19.428z" />
                                        </g>
                                        <g transform="rotate(-141.69 218 250)">
                                            <path fill="#fff" d="M202.452 249.645c0-8.556 6.936-15.492 15.492-15.492 8.556 0 15.492 6.936 15.492 15.492 0 8.555-6.936 15.491-15.492 15.491-8.556 0-15.492-6.936-15.492-15.491z" />
                                        </g>
                                        <g>
                                            <path fill="#dbdbdb" d="M208.366 248.296l6.838-.794-.795-6.838 4.895-.58.794 6.837 6.838-.807.58 4.907-6.837.808.807 6.825-4.907.58-.795-6.837-6.838.807z" />
                                        </g>
                                        <g>
                                            <path fill="#fff" d="M163.745 198.327a5.298 5.298 0 0 0 5.766 4.794l34.692-3.192a5.311 5.311 0 0 0 4.794-5.765 5.299 5.299 0 0 0-5.765-4.794l-34.693 3.192a5.298 5.298 0 0 0-4.794 5.765z" />
                                        </g>
                                        <g>
                                            <path fill="#fff" d="M175.566 212.645a5.298 5.298 0 0 0 5.765 4.794l24.247-2.233a5.298 5.298 0 0 0 4.794-5.765 5.298 5.298 0 0 0-5.765-4.794l-24.247 2.246a5.311 5.311 0 0 0-4.794 5.752z" />
                                        </g>
                                        <g>
                                            <path fill="#ffc3bd" d="M158.144 194.24l-1.324 8.742-3.659 2.258-.404-11.694z" />
                                        </g>
                                        <g>
                                            <path fill="#ed1c24" d="M121.774 146.339c-5.563.984-13.36 16.93-13.36 16.93l14.016 12.615s11.152-12.161 10.56-19.403c-.518-6.118-4.151-11.404-11.216-10.142z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M63.453 414.19c1.224.693 3.305 2.043 3.305 2.9a.404.404 0 0 1-.202.392 1.022 1.022 0 0 1-.996.227c-.757-.252-1.552-1.552-2.17-3.52zm2.46 4.01c.353.002.696-.118.971-.34a.82.82 0 0 0 .379-.782c-.114-1.4-3.671-3.305-4.075-3.507a.19.19 0 0 0-.24 0 .24.24 0 0 0-.075.227c.403 1.426 1.274 3.886 2.611 4.34.14.04.284.06.429.063z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M63.58 413.735l.051.022c-.018.01-.035.02-.052.028zm.051.022c.823-.447 2.657-1.225 3.657-.867.258.08.464.275.555.53.152.34.038.492-.076.593-.646.547-2.923.248-4.136-.256zm2.837.987c.56.046 1.12-.096 1.59-.404a.883.883 0 0 0 .201-1.084 1.261 1.261 0 0 0-.832-.783c-1.514-.542-4.327 1.01-4.44 1.073a.202.202 0 0 0-.114.189c0 .076.037.147.1.19a8.01 8.01 0 0 0 3.495.82z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M142.438 444.1c.098.061.149.177.126.29-.02.362-.195.697-.48.921-1.097.82-3.746.467-5.172.202 2.006-.883 4.857-1.88 5.526-1.413zm-2.662 2.17a4.314 4.314 0 0 0 2.624-.593c.407-.292.65-.76.656-1.261a.706.706 0 0 0-.315-.682c-1.211-.857-6.043 1.4-6.585 1.666a.214.214 0 0 0 0 .403c1.187.281 2.4.438 3.62.467z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M139.688 441.325c.492.05.492.227.492.29.139.77-2.07 2.75-3.646 3.583.328-1.11 1.3-3.886 2.977-3.886zm-3.368 4.529c1.45-.606 4.49-2.99 4.327-4.252-.026-.264-.215-.58-.87-.668-2.65-.303-3.785 4.453-3.785 4.655a.215.215 0 0 0 .063.227c.049.015.102.015.151 0z" />
                                        </g>
                                        <g>
                                            <path fill="#263238" d="M158.056 109.83l2.006-1.035" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg></div>
                    <div class="coll-60">
                        <h2 class="mb-20 term-tags fnt-24">What are the documents required to buy ULIPs?</h2>
                        <p class="mb-30 bef-cat">Before purchasing a ULIP, the following documents must be kept handy -</p>
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
        <section class="how-buy position-relative stepnumber-term bg-none ulip-steps top-0">
            <div class="midWrapper mb-50" id="steps-buy-ulip-online">
                <h2 class="mb-20 term-tags fnt-24">Steps to Buy ULIP Online</h2>
                <p class="fst-18 mx-1021 mb-35">To purchase unit-linked insurance plans online, follow these simple steps:</p>
                <div class="how-slicks">
                    <div>
                        <div class="roww">
                            <div class="coll-md-1 text-center">
                                <p class="fst-18 steps-number color-white">1</p>
                            </div>
                            <div class="coll-md-11 mt-mob-24">
                                <h3>Examine Different Types</h3>
                                <p>Numerous ULIPs offer lifelong investing, a variety of premium payment options, and the ability to switch funds. Look for ULIPs that provide the strategies best suited to achieving your goals. Before buying the policy, you should research the insurance company to see if it will be able to pay claims in the future. The ability of the corporation to fulfil its obligations is improved by a higher solvency ratio.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww">
                            <div class="coll-md-1 text-center">
                                <p class="fst-18 steps-number color-white">2</p>
                            </div>
                            <div class="coll-md-11 mt-mob-24">
                                <h3>Understand Your Risk Appetite</h3>
                                <p>You must ascertain your level of risk tolerance before making an investment in a ULIP. Depending on your needs and level of risk tolerance, this plan offers a wide range of funds from which to choose. Risk-averse investors should allocate more of their cash to debt funds, while risk-loving investors should place their money in equities. With ULIPs, you are able to select the fund that best suits your risk tolerance. Equity funds are appropriate for investors with a high appetite for risk, while debt funds are suitable for investors with a moderate appetite for risk.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww">
                            <div class="coll-md-1 text-center">
                                <p class="fst-18 steps-number color-white">3</p>
                            </div>
                            <div class="coll-md-11 mt-mob-24">
                                <h3>Examine Your Premium Payment Options</h3>
                                <p>There are three ways to make payments: single, limited, and regular. The single payment option requires that you pay the entire premium amount at the commencement of the policy. It is a one-time investment. Unit-linked insurance plans demand premium payment, just like any other type of insurance. Your life insurance premium is split into a portion paid to the insurance company and a portion invested in investment using a variety of qualified funds. After that, depending on how well the funds you choose performed, you would earn returns. You can choose from a wide range of investment alternatives, including debt, shares, hybrid funds, and others.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww">
                            <div class="coll-md-1 text-center">
                                <p class="fst-18 steps-number color-white">4</p>
                            </div>
                            <div class="coll-md-11 mt-mob-24">
                                <h3>Stay Current with the Market</h3>
                                <p>Keeping up with market trends and economic conditions is a smart idea because it will help you come to more informed conclusions. For instance, if you invested in equity funds but the market has since inflated and grown expensive due to shifting market patterns, you can withdraw from equity funds and rejoin them once the market has stabilized.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="roww">
                            <div class="coll-md-1 text-center">
                                <p class="fst-18 steps-number color-white">5</p>
                            </div>
                            <div class="coll-md-11 mt-mob-24">
                                <h3>Purchase ULIP for you</h3>
                                <p>ULIPs offer large returns on investment over a lengthy period of time and have a 5-year lock-in term. With a ULIP investment plan, you can change between assets. Equity funds, which are appropriate for risk-takers, are just one example of an asset with their own unique set of features. Despite being riskier than other funds, it offers higher returns. Conversely, debt funds offer the lowest returns while also carrying the lowest risk. For those who prefer not to take risks, it is perfect. Your financial portfolios must be balanced as a result.</p>
                            </div>
                        </div>
                        <div class="text-center ulip-step-buy"><a rel="nofollow" href="buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=steps2buy" target="_blank" class="en-btn mt-12 inknw" title="Buy ULIP">Buy ULIP</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="varfac ulip-various-fact top-0" id="type-ulip-changes">
            <div class="midWrapper position-relative mb-50">
                <h2 class="mb-20 term-tags fnt-24">Types of ULIP charges</h2>
                <div class="factorsslicks">
                    <div class="ulip-changes">
                        <div class="typescard">
                            <h3>Premium Allocation</h3>
                            <p>These charges are a percentage of the premiums. The net premium is then allocated at the Net Asset Value (NAV) prevailing on the date of receipt of premium.</p>
                        </div>
                    </div>
                    <div class="ulip-changes">
                        <div class="typescard">
                            <h3>Policy Administrative Fees</h3>
                            <p>A fee is charged for the policy's management. This charge is applicable each month, and it depends on the premium band.</p>
                        </div>
                    </div>
                    <div class="ulip-changes">
                        <div class="typescard">
                            <h3>Fund Management</h3>
                            <p>These fees are imposed as a percentage of the fund value and are capped by IRDAI at 1.5% annually. These go toward administering your funds.</p>
                        </div>
                    </div>
                    <div class="ulip-changes">
                        <div class="typescard">
                            <h3>Discontinuance or Surrender</h3>
                            <p>If the ULIP plan is terminated early within the first four years, a discontinuation fee is assessed. There are no surrender fees assessed after the fifth year.</p>
                        </div>
                    </div>
                    <div class="ulip-changes">
                        <div class="typescard">
                            <h3>Partial Withdrawal Charge</h3>
                            <p>Investors have the opportunity to exit ULIP plan early after the first five years if necessary. Partial withdrawal is subject to penalties per the terms of the policy.</p>
                        </div>
                    </div>
                    <div class="ulip-changes">
                        <div class="typescard">
                            <h3>Mortality Chanrge</h3>
                            <p>These fees are imposed by the insurer to provide death coverage to the insured and are calculated after taking into account age, health conditions, and the insurer mortality table.</p>
                        </div>
                    </div>
                    <div class="ulip-changes">
                        <div class="typescard">
                            <h3>Switching Charges</h3>
                            <p>Investors are permitted a set number of free-fund switches each year without incurring any fees. After this, every switch is subject to fees ranging from ₹100 to ₹500.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ensure term-insure ulip-cutom-review top-0" id="ulip-customer">
            <div class="midWrapper position-relative">
                <div class="roww">
                    <h2 class="fnt-24 clr-fff mb-20">Customer Reviews for ULIP</h2><span class="pagingInfo-review d-flex playfair_font justify-content-center"></span>
                    <div class="reviewslick">
                        <div>
                            <div class="custom-review">
                                <h3>Best Plan for me</h3>
                                <p>When I was planning for my child’s future, my friends recommended me about investing in ULIP. The benefits that ULIP offer were very well aligned with my requirements. This is why I started researching and came to know about Kotak e-Invest plan. I went through their online portal and got to know the premiums, returns and everything. I realized that Kotak e-Invest is the best plan for me and I bought it.</p>
                                <div class="custom-rating float-right d-flex mt-30">
                                    <div class="p-img"><img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="Mr Ambadas Sulakhe" title="Mr Ambadas Sulakhe"></div>
                                    <div class="c-name">
                                        <h3 class="fnt-17">Mr Ambadas Sulakhe</h3><img src="assets/images/online-term-insurance-plan/rating.png" alt="4.5 Stars out of 5" title="4.5 Stars out of 5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <h3>Tax benefits and good returns</h3>
                                <p>ULIPs are a new age investment instruments that offer tax benefit and market-linked returns. I read about it online and started to think about my investments. I thought this can be a good add to my financial portfolio. They offer market-linked returns with no Capital gain taxes. And, I could easily optimize my returns by choosing the funds wisely. So, I decided to start my Kotak e-Invest plan.</p>
                                <div class="custom-rating float-right d-flex mt-30">
                                    <div class="p-img"><img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="Mr Darpan V Mehta" title="Mr Darpan V Mehta"></div>
                                    <div class="c-name">
                                        <h3 class="fnt-17">Mr Darpan V Mehta</h3><img src="assets/images/online-term-insurance-plan/rating.png" alt="4.5 Stars out of 5" title="4.5 Stars out of 5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <h3>Excellent Returns</h3>
                                <p>Investments have always helped me achieve my difficult life goals. So, I make sure that every month I invest in the right instruments. Just when I was looking for a new investment option, I came across Kotak e-Invest plan. They have various plan options; premium payment mode is flexible which is perfect for me. The plan aligned with my requirements and offered excellent returns which makes this one a best ULIP plan for me.</p>
                                <div class="custom-rating float-right d-flex mt-30">
                                    <div class="p-img"><img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="Ms Munera Janvekar" title="Ms Munera Janvekar"></div>
                                    <div class="c-name">
                                        <h3 class="fnt-17">Ms Munera Janvekar</h3><img src="assets/images/online-term-insurance-plan/rating.png" alt="4.5 Stars out of 5" title="4.5 Stars out of 5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <h3>One of the best investment instruments</h3>
                                <p>Kotak e-invest is one of the best investment instruments I decided to invest my hard-earned money in. It gives me various fund options that help me manage my portfolio and make sure that my investment is optimized all the time. This way, I can gain returns when the market is high and go for debt funds when the markets go down. A win-win. If you are looking for such a plan, I recommend you to invest in Kotak e-Invest.</p>
                                <div class="custom-rating float-right d-flex mt-30">
                                    <div class="p-img"><img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="Mr Sujitbhai Ashokbhai Kanjariya" title="Mr Sujitbhai Ashokbhai Kanjariya"></div>
                                    <div class="c-name">
                                        <h3 class="fnt-17">Mr Sujitbhai Ashokbhai Kanjariya</h3><img src="assets/images/online-term-insurance-plan/rating.png" alt="4.5 Stars out of 5" title="5 Stars out of 5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <h3>Good returns</h3>
                                <p>I was looking for investing a sum of amount that can give me good returns over the long term. I came across Kotak e-Invest and decided to give it a try. I logged in to understand the plan and their call center executive helped me understand everything about the plan. I went ahead with the plan and the plan is giving me good returns and I can monitor them year on year. If you are looking for a long term investment with solid returns, I recommend you to invest in Kotak e-Invest.</p>
                                <div class="custom-rating float-right d-flex mt-30">
                                    <div class="p-img"><img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="Ms Neeti Garg" title="Ms Neeti Garg"></div>
                                    <div class="c-name">
                                        <h3 class="fnt-17">Ms Neeti Garg</h3><img src="assets/images/online-term-insurance-plan/rating.png" alt="4.5 Stars out of 5" title="4.5 Stars out of 5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-review">
                                <h3>Happy to make this decision</h3>
                                <p>My friends recommended me to invest in an ULIP plan when they came to know that I am planning to buy a house in the future. I went online, spoke to my friends and came across Kotak e-Invest plan. I registered on their portal where they showed me all plans, premiums and returns upfront. I completed the application process, upload documents and made my payment. I was happy to make this decision as I can now monitor my returns and make a fund switching decision when required.</p>
                                <div class="custom-rating float-right d-flex mt-30">
                                    <div class="p-img"><img src="assets/images/online-term-insurance-plan/profile-photo.png" alt="Mr Santosh Kumar" title="Mr Santosh Kumar"></div>
                                    <div class="c-name">
                                        <h3 class="fnt-17">Mr Santosh Kumar</h3><img src="assets/images/online-term-insurance-plan/rating.png" alt="4.5 Stars out of 5" title="4.5 Stars out of 5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
        <section class="ulip-nav mt-50 mb-30 top-0" id="ulip-nav">
            <div class="midWrapper">
                <h2 class="mb-20 term-tags fnt-24">What is ULIP NAV?</h2>
                <p>A fund's net asset value (NAV) is calculated as the asset value per unit less the liability value. You can monitor the performance of your fund using this value. A fundamental understanding of ULIP operation is necessary to comprehend NAV.</p>
                <p>Like you, several other investors pay the insurance company the premium for a ULIP. The insurer then gathers the funds from each of these investors to produce a single sizable investment sum that is invested in a range of market instruments. Good returns are aided by sizable and varied investments.</p>
                <p>The number of units that each investor receives depends on the premium they pay.<a class="clr-blu" href="insurance-guide/retirement/what-is-nav-in-ulip-how-is-it-calculated" title="Net Asset Value, or NAV"> Net Asset Value, or NAV, </a>is the measure of each unit's value. Each investor's portion of the total investment is represented by the number of units they own. The proceeds are then divided based on the quantity of units.</p>
            </div>
        </section>
        <section class="term-blog ulip-blogs top-0" id="ulip-blog">
            <div class="midWrapper">
                <div class="term-blog">
                    <h2 class="mb-20 term-tags fnt-24">ULIP Related Blogs</h2>
                    <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div"></ul>
                    <div class="text-center"><a href="javascript:void(0);" class="link" title="Load More" id="load-more-articles" onclick="dataLayer.push({'event': ' <?php echo $eventGA; ?>', 'category': ' <?php echo $categoryGA; ?>', 'action': ' <?php echo $actionGA; ?>', 'label': ' <?php echo $labelGA; ?>'});">Load More</a></div>
                    <div class="noRecord"></div>
                    <div class="innerLoader"><img src="assets/images/loader.gif" alt="Kotak Loader" title="Kotak Loader"></div>
                </div>
            </div>
        </section>
        
        <section class="what-policy-period how-buy-cat top-0" id="ulip-faqs">
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
                                <p>The <a href="insurance-guide/retirement/what-are-the-maturity-benefits-in-a-ulip-plan" title="ULIP maturity benefit" class="clr-blu"> ULIP maturity benefit </a> is the sum paid by the insurance company to the insured if he or she lives through the policy's maturity period. The maturity benefit amount is equal to the fund value.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>3.</span>
                            <h3>What is the death benefit for ULIPs?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The <a class="clr-blu" href="insurance-guide/wealth-creation/what-is-the-death-claim-payable-in-the-case-of-ulip" title="death benefit in ULIP"> death benefit in ULIP </a> is the sum paid to the policyholder's nominee in the unfortunate event of the policyholder's death during the policy<term class=""></term>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>4.</span>
                            <h3>How can one cancel a ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>By submitting a surrender request to your insurer and paying certain charges, you can <a class="clr-blu" href="insurance-guide/wealth-creation/how-to-cancel-ulip-policy" title="cancel your ULIP policy"> cancel your ULIP policy. </a> When you surrender the policy, you will be offered the surrender value on the surrender date. However, you will not receive this money until your policy's five-year lock-in period has ended, if surrender is done within the lock-in period. Though you can terminate the coverage at any time throughout the policy's term, experts suggest investing for at least 10 years to get a decent corpus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>5.</span>
                            <h3>What is the fund value in ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Every policyholder has the choice of investing in one of several funds, depending on their risk tolerance and market trends. The <a class="clr-blu" href="insurance-guide/wealth-creation/what-is-fund-value-in-ulip" title="fund value in ULIP"> fund value in ULIP </a> is the total monetary value of the units owned by the policyholder. On any given day, it can be calculated by multiplying the net asset value (NAV) of each unit by the number of units held by the policyholder. Further, the fund's value can fluctuate depending on the daily NAV.</p>
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
                                <p>Since there is a five-year lock-in term, it is advisable to assess your personal financial situation and ambitions because the insurance provider would charge if the plan is cancelled before the lock-in time has expired. <a class="clr-blu" href="insurance-guide/wealth-creation/how-safe-is-it-to-invest-in-ulip-plans" title="ULIPS are thus only a safe choice for long-term investments."> ULIPS are thus only a safe choice for long-term investments. </a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>8.</span>
                            <h3>In ULIP plans, can I do partial withdrawal?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Only when the first five policy years are complete and not before are <a class="clr-blu" href="insurance-guide/wealth-creation/what-is-partial-withdrawal-in-ulips" title="partial withdrawals in ULIP plans"> partial withdrawals in ULIP plans </a> permitted. Only when all past-due premiums have been paid on time and the policy is still in effect is partial withdrawal permitted. For partial withdrawals, there is a minimum restriction of ₹10,000.</p>
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
                                <p> <a class="clr-blu" href="insurance-guide/retirement/what-happens-if-i-stop-paying-ulip-premium-after-first-premium" title="If you fall behind on the premium payments"> If you fall behind on the premium payments, </a> your ULIP provider won't impose any penalties during the lock-in period. The only restriction is that you are unable to withdraw the funds until the lock-in term of five years has elapsed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>11.</span>
                            <h3>What is the right time to invest in ULIPs?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>When you are working toward your objectives, whatever they may be, and have a reliable income and few responsibilities, it is an<a class="clr-blu" href="insurance-guide/wealth-creation/is-this-the-right-time-to-invest-in-ulip" title="excellent time to invest in ULIPs"> excellent time to invest in ULIPs. </a>You aren't required to invest the same amount each year, and you can even change your premium allocation each year.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>12.</span>
                            <h3>How do I maximize my ULIP return?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>The greatest method to increase the<a class="clr-blu" href="insurance-guide/wealth-creation/tips-to-improve-ulip-gains" title="profits on your ULIP investments"> profits on your ULIP investments </a>is to diversify your holdings across various asset classes. This will assist you in building a diverse portfolio so that, in the event of a loss in one asset class, it can be offset by gains in a different asset class.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>13.</span>
                            <h3>Is there a lock-in period for ULIP?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p>Plans for unit-linked insurance include a 5-year lock-in term. After the<a class="clr-blu" href="insurance-guide/retirement/what-is-lock-in-period-in-ulip" title="lock-in period"> lock-in period, </a>it is usually advisable to keep the investment in ULIPs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bor">
                        <div class="accordion"><span>14.</span>
                            <h3>How can I track my ULIP funds?</h3>
                        </div>
                        <div class="panel tab-detail mb-0 tab-align">
                            <div class="">
                                <p><a class="clr-blu" href="insurance-guide/wealth-creation/how-to-track-ulip-performance" title="Calculating profits from a ULIP investment"> Calculating profits from a ULIP investment </a>requires investors to take into account the premium and the duration for which the premium is paid. Investors must compare the starting NAV and the current NAV of the scheme in order to compute absolute return, also known as point-to-point return. The steps to calculate the absolute return are listed below.</p>
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
        <section class="rating-section ratingHtml">
  
    
</section>
        
        <section class="terms new-terms how-much gspnewterms top-0" id="terms_conditions">
            <div class="midWrapper"><button type="button" name="tax-benefits" class="collapsible terms-txt whitespace-initial">Read about Tax benefits & Plan Disclaimer</button>
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
                        <h3 class="fw-bold" style="font-weight:700!important">There are a few charges which can be deducted before the refund-</h3>
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
                        <p><b>Kotak e-Invest</b>UIN - 107L121V01, Form No. - L121. Kotak Accidental Death Benefit Rider (Linked) UIN - 107A017V01 Form No: A017, Kotak Permanent Disability Benefit Rider (Linked) UIN -107A018V01 Form No: A018. This is an individual Unit-linked Non-participating Endowment Life Insurance Plan. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure.</p>
                        <p><b>Kotak Invest Maxima</b>UIN No.: 107L073V04, Form No: L073. This is an individual, unit linked non-par life insurance plan. This website content is not a brochure and only gives the salient features of the plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
                        <p><b>Kotak Single Invest Plus</b>UIN No.: 107L075V02, Form No.: L075. This is a savings oriented unit linked endowment plan. This website content only gives the salient features of the plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
                        <p><b>Kotak Single Invest Advantage</b>UIN No.: 107L065V04, Form No.: L065. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions please read the sales brochure carefully before concluding a sale.</p>
                        <p><b>Kotak Platinum</b>UIN No.: 107L067V06, Form No.: L067. Kotak Accidental Death Benefit Rider (Linked) UIN No.: 107A017V01 Form No.: A017. Kotak Permanent Disability Benefit Rider (Linked) UIN No.: 107A018V01 Form No.: A018. This is an individual, Unit-linked, Non-par, Endowment Life Insurance Plan. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. For details on riders please read rider brochure.</p>
                        <p><b>Kotak Ace Investment</b>UIN No.: 107L064V05, Form No.: L064. Kotak Accidental Death Benefit Rider (Linked) UIN No.: 107A017V01 Form No.: A017. Kotak Permanent Disability Benefit Rider (Linked) UIN No.: 107A018V01 Form No.: A018. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
                        <p><b>Kotak Wealth Optima Plan</b>UIN: 107L118V02, Form No: L118, Kotak Accidental Death Benefit Rider (Linked) UIN – 107A017V01 Form No: A017, Kotak Permanent Disability Benefit Rider (Linked) UIN – 107A018V01 Form No: A018. This is a unit linked non-participating endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the rider brochure.</p>
                    </div>
                    <div class="">
                        <p class="fw-bold" style="font-weight:700!important">Section 41-</p>
                        <p class="mtb-16" style="margin-bottom:16px!important">Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: (1) No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. (2) Any person making default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.</p>
                        <p class="fw-bold" style="font-weight:700!important">Section 45-</p>
                        <p class="mtb-16" style="margin-bottom:16px!important">Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details:<a href="<?=base_url()?>assets/images/uploads/why_kotak/section-38-39-45-of-insurance-act-1938.pdf" target="_blank" title="section38_39_45_of_insurance_act_1938">Read more about section38_39_45_of_insurance_act_1938</a></p>
                        <p class="fw-bold" style="font-weight:700!important">BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/ FRAUDULENT OFFERS</p>
                        <p class="mtb-16" style="margin-bottom:16px!important">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.<br><br>Regd. Office: Kotak Mahindra Life Insurance Company Ltd. Reg No. 107; CIN : U66030MH2000PLC128503; Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Website: www.kotaklife.com | WhatsApp: 9321003007 | Toll Free: 1800 209 8800 | Ref. No. KLI/22-23/E-WEB/2513<br><br>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="what-ulips cat-what-ulip" id="what_are_ulips">
            <div class="btnstickybg">
                <div class="btnsticky hide-mobile" id="">
                    <div class="btn-slick">
                        <div><a href="<?php echo $actual_link ?>#united-linked-insurance-plan" class="btnanc ulipwhats" title="What are ULIPs">What are ULIPs</a></div>
                        <div><a href="<?php echo $actual_link ?>#ulip-work" class="btnanc ulipworks" title="How does ULIP plan Work?">How does ULIP plan Work?</a></div>
                        <div><a href="<?php echo $actual_link ?>#benefits-of-ulip" class="btnanc ulipbenes" title="What are the Benefits of ULIP?">What are the Benefits of ULIP?</a></div>
                        <div><a href="<?php echo $actual_link ?>#features-of-ulip" class="btnanc ulipfeatbtns" title="Features of ULIP? ">Features of ULIP?</a></div>
                        <div><a href="<?php echo $actual_link ?>#invest-in-ulip" class="btnanc ulipinvests" title="Why should you invest in ULIPs?">Why should you invest in ULIPs?</a></div>
                        <div><a href="<?php echo $actual_link ?>#manage-ulip-funds" class="btnanc ulipfinds" title="How to manage ULIP funds?">How to manage ULIP funds?</a></div>
                        <div><a href="<?php echo $actual_link ?>#find-best-ulip-plans" class="btnanc ulipbestplans" title="How to find the best ULIP plans?">How to find the best ULIP plans?</a></div>
                        <div><a href="<?php echo $actual_link ?>#best-ulip-plan" class="btnanc ulipbests" title="Best ULIP Plans from Kotak Life">Best ULIP Plans from Kotak Life</a></div>
                        <div><a href="<?php echo $actual_link ?>#ulip-funds" class="btnanc uliptypes" title="Which ULIP funds are suited for you?">Which ULIP funds are suited for you?</a></div>
                        <div><a href="<?php echo $actual_link ?>#various-factors-consider-buying-ulip" class="btnanc ulipvarious" title="Various factors">Various factors</a></div>
                        <div><a href="<?php echo $actual_link ?>#documents-required" class="btnanc ulipdocs" title="Documents Required">Documents Required</a></div>
                        <div><a href="<?php echo $actual_link ?>#steps-buy-ulip-online" class="btnanc ulipsteps" title="Steps to Buy ULIP Online">Steps to Buy ULIP Online</a></div>
                        <div><a href="<?php echo $actual_link ?>#type-ulip-changes" class="btnanc uliptypes" title="Types of ULIP charges">Types of ULIP charges</a></div>
                        <div><a href="<?php echo $actual_link ?>#ulip-customer" class="btnanc uliptypes" title="Customer Reviews for ULIP">Customer Reviews for ULIP</a></div>
                        <div><a href="<?php echo $actual_link ?>#ulip-nav" class="btnanc uliptypes" title="What is ULIP NAV?">What is ULIP NAV?</a></div>
                        <div><a href="<?php echo $actual_link ?>#ulip-blog" class="btnanc uliprels" title="ULIP Related Blogs">ULIP Related Blogs</a></div>
                        <div><a href="<?php echo $actual_link ?>#ulip-faqs" class="btnanc ulipfaqs" title="Frequently Asked Questions">Frequently Asked Questions</a></div>
                        <div><a href="<?php echo $actual_link ?>#terms-conditions" class="btnanc ulipreads" title="Terms & Conditions ">Terms & Conditions</a></div>
                    </div>
                </div>
            </div>
        </section>
       
    </div><input type="hidden" id="pageNo" name="pageNo" value="0"> <input type="hidden" id="sortType" name="sortType" value="recent"> <input type="hidden" id="pageLimit" name="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>"> <input type="hidden" id="searchArticle" name="searchArticle" value=""> <input type="hidden" id="pageType" name="pageType" value="topic"> <input type="hidden" id="topicSlug" name="topicSlug" value="wealth-creation"> <input type="hidden" id="url" name="url" value="<?php echo $this->uri->segment('1'); ?>/<?php echo $this->uri->segment('2'); ?>">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/fancybox.umd.js"></script>
    <script>
        var cg_json = "",
            cg_json1 = "",
            cg_json2 = "",
            cb_json = "";

        function getSegment() {
            "Term Insurance Protection Plans" == $("#needSegment").val() && ($target_url ="<?=base_url()?>"+
                "/OnlineTermInsurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=homepage", window.open($target_url, "_blank"))
        }

        function close_popup() {
            $(".steps.step01").addClass("selected")
        }

        function openCity(e, t) {
            var l, a, n;
            for (a = document.getElementsByClassName("tabcontent"), l = 0; l < a.length; l++) a[l].style.display = "none";
            for (n = document.getElementsByClassName("tablinks"), l = 0; l < n.length; l++) n[l].className = n[l].className.replace(" active", "");
            document.getElementById(t).style.display = "inline-block", e.currentTarget.className += " active"
        }
        var loadArticleData = function(e) {
                console.log("Ulip Testing");
                var s = parseInt($("#pageNo").val()),
                    t = $("#url").val(),
                    l = $("#sortType").val(),
                    i = $("#pageLimit").val(),
                    a = $("#topicSlug").val(),
                    o = $("#searchArticle").val(),
                    n = $("base").attr("href"),
                    c = "topic" == $("#pageType").val() ? n + "insurance-guide/articles/load-more" : n + "insurance-guide/tag-articles/load-more",
                    r = {
                        page: s,
                        sortType: l,
                        topicSlug: a,
                        searchArticle: o,
                        url: t
                    };
                $(".noRecord").text("").css("display", "none"), $("#load-more-articles").css("display", "none"), $(".innerLoader").css("display", "block"), $.ajax({
                    url: c,
                    type: "post",
                    contentType: "application/json; charset=UTF-8",
                    data: JSON.stringify(r),
                    dataType: "json",
                    success: function(e) {
                        console.log(e);
                        var t = e,
                            l = t.nextDataCount;
                        if (console.log("nextDataCount==" + l), t.success) {
                            var a = t.data,
                                n = (new RegExp(o, "gi"), "");
                            a.length && ($("#pageNo").val(parseInt(s) + 1), n = t.newhtmldata, console.log(t.newhtmldata), $("#articles-div").append(n)), a.length < i || 0 == l ? (0 == s && 0 == a.length && $(".noRecord").text("").text(t.message).css("display", "block"), $("#load-more-articles").css("display", "none")) : $("#load-more-articles").css("display", "table"), $(".innerLoader").css("display", "none"), gridBox01()
                        }
                    }
                })
            },
            acc = document.getElementsByClassName("collapsible");
        for (i = 0; i < acc.length; i++) acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var e = this.nextElementSibling;
            "block" === e.style.display ? e.style.display = "none" : e.style.display = "block"
        });
        1 == $("section").find("ul#articles-div").length && loadArticleData(), $("ul.mostVisited li a").click(function() {
            $("ul.mostVisited li a").removeClass("selected"), $(this).addClass("selected");
            var e = "Most Recent" == $(this).text() ? "recent" : "viewed";
            $("#sortType").val("").val(e), $("#search-article, #searchArticle").val(""), $("#pageNo").val(0), $("#articles-div li").remove(), $("#load-more-articles").text("").text("Load More").css("display", "table"), loadArticleData()
        }), $("#load-more-articles").click(function() {
            loadArticleData()
        });
        var i, gridBox01 = function() {
            $("ul.reportUL > li").removeAttr("style");
            for (var e, t = $("ul.reportUL").length, l = 0, a = 0; a < t; a++) {
                maxDivWid = parseInt($("ul.reportUL").eq(a).css("width")), divWid = parseInt($("ul.reportUL").eq(a).find("li").css("width"));
                var n = $("ul.reportUL").eq(a).find("li").length,
                    s = Math.round(maxDivWid / divWid);
                Math.ceil(n / s);
                for (h = 0; h < n; h++) {
                    for (var i = h; i < s + h; i++) l < (e = parseInt($("ul.reportUL").eq(a).find(" > li").eq(i).css("height"))) && (l = e);
                    for (var o = h; o < s + h; o++) $("ul.reportUL").eq(a).find(" > li").eq(o).css("height", l);
                    h += s - 1, l = 0
                }
            }
        };
        acc = document.getElementsByClassName("collapsible");
        for (i = 0; i < acc.length; i++) acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var e = this.nextElementSibling;
            "block" === e.style.display ? e.style.display = "none" : e.style.display = "block"
        });

        function myFunction() {
            var e = document.getElementById("dots"),
                t = document.getElementById("more"),
                l = document.getElementById("myBtn");
            "none" === e.style.display ? (e.style.display = "inline", l.innerHTML = "Read more", t.style.display = "none") : (e.style.display = "none", l.innerHTML = "Read less", t.style.display = "inline")
        }

        function ChangeUrl(e, t) {
            if (void 0 !== history.pushState) {
                var l = {
                    Title: e,
                    Url: t
                };
                history.pushState(l, l.Title, l.Url)
            } else alert("Browser does not support HTML5.")
        }
        document.getElementById("modal_btn").onclick = function() {
            document.getElementById("modal").style.display = "block"
        }, document.getElementById("close_btn").onclick = function() {
            document.getElementById("modal").style.display = "none"
        }

    </script>
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
      var rating='';
        //end lazy
        setTimeout(function () {

$('.submitBtn').on("click", function () {
  if($('input[name=rating]:checked').val()){
   rating=$('input[name=rating]:checked').val()
  }
    $.ajax({
      url: "<?=base_url()?>site/feedbackrating",
      type: "post",
      data: {rating:rating,pagename:"ulip_plan",fixed:"24800"},
      success: function(response) {
          var resp1 = $.parseJSON(response);
          var voteCount = $('.votedCount').html(resp1.feedbackratingdetailscount+' ')
         // localstorate.ulip_rating=rating;
        localStorage.setItem( 'ulip_rating', rating ); 
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
      data: {rating:localStorage.getItem('ulip_rating'),pagename:"ulip_plan",fixed:"24800"},
      success: function(response) {
          var resp1 = $.parseJSON(response);
          console.log(resp1)
         $('.ratingHtml').html(resp1.ratingHtml);
      }
  });
 


    </script>

