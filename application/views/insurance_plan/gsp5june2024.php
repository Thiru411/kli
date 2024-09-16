<?php
function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if (isMobile()) {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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

?> <style>
    .save-faq .panel .gspnewlis p {
        padding-bottom: 0;
    }

    .save-faq .panel .gspnewlis li:last-child p {
        padding-bottom: 10px;
    }

    .gspnewlis li {
        margin-bottom: 0;
    }

    header {
        z-index: 4
    }

    .fancybox__caption {
        display: none
    }

    .rhsFixed_Wrapper {
        z-index: 2
    }

    .some-text {
        display: none
    }

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

    .custom-icon {
        bottom: 55px !important
    }

    .panel a {
        text-decoration: underline !important
    }

    @media (max-width:640px) {
        .mt-102 {
            margin-top: 45px !important;
            top: 0
        }
    }

    @media screen and (max-width:768px) {
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

        .parttxt {
            text-align: center !important
        }
    }

    @media screen and (min-width:768px) {
        .splash {
            display: block
        }
    }

    @media only screen and (max-width:1024px) {
        section {
            margin-top: 0
        }
    }

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
        margin: 0 0 40px !important
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
            display: block
        }

        .cat-knw {
            color: #da251c !important;
            border: 1px solid #da251c !important;
            max-width: 185px
        }

        .in-buy {
            display: inline-block;
            text-align: center;
            max-width: 185px
        }

        .what {
            margin: 0 0 30px
        }

        .mb-35 {
            margin-bottom: 15px !important
        }

        .features {
            padding: 22px 0 64px
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

    html {
        scroll-behavior: smooth
    }

    .m-pad-2 {
        margin-top: 7rem
    }

    @media screen and (max-width:480px) {
        .term-design .saving-banners .mx-mob-174 {
            padding-top: 3rem !important
        }
    }

</style>
<section class="save-breadcrumb">
    <div class="midWrapper">
        <ul class="breadcrumb-ulip">
            <li><a href="https://www.kotaklife.com/">Life Insurance&gt;</a></li>
            <li class="active"><a href="javascript:void(0)">Savings Plan</a></li>
        </ul>
    </div>
</section>
<div class="term-design gsp-design">
    <section class="term-design-banner bannerr top-171 mtt-102 ulip-cat-mt gspbox">
        <div class="midWrapper">
            <div class="saving-banners-title">
                <h1 class="banner-head">Savings Plans</h1>
            </div>
            <div class="gspnewslick saving-banners">
                <div class="flex-wrap-initial col-reverse-mob">
                    <div class="roww">
                        <div class="coll-md-5 w-term-45 my-auto rem-mob-myauto w-mob-100 d-block d-md-none m-pad-2"><img src="assets/images/saving-plans/kotak-assured-savingsplan.svg" width="100%" height="100%" class="lyz_img" alt="Savings Plans" title="Savings Plans"></div>
                        <div class="coll-md-7 w-term-55 on-mob-50 w-mob-100">
                            <h2 class="mx-mob-174 clr40 fs-mob-20 fs-ach-20">Achieve your financial goals without risks with<span class="fw-bold blet">Kotak Assured Savings Plan</span></h2>
                            <div class="roww">
                                <div class="coll-md-8 mr-20 mr-mob-0 w-mob-ban-100"><a href="savings-plan/kotak-assured-savings-plan" class="want-to-knw banner-knw cat-knw gsp-knw">Know More</a></div>
                                <div class="coll-md-4 mr-mob-0 w-mob-ban-100"><a href="buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=headbanner" class="in-buy banner-buy">Invest Now</a></div>
                            </div>
                        </div>
                        <div class="coll-md-5 w-term-45 my-auto rem-mob-myauto w-mob-100 d-none d-md-block"><img src="assets/images/saving-plans/kotak-assured-savingsplan.svg" width="100%" height="100%" class="lyz_img" alt="Savings Plans" title="Savings Plans"></div>
                    </div>
                </div>
                <div class="flex-wrap-initial col-reverse-mob">
                    <div class="roww">
                        <div class="coll-md-5 w-term-45 my-auto rem-mob-myauto w-mob-100 d-block d-md-none m-pad-2"><img src="assets/images/saving-plans/kotak-guaranteed-savings-plan..svg" width="100%" height="100%" class="lyz_img" alt="Savings Plans Hero Image" title="Savings Plans Hero Image"></div>
                        <div class="coll-md-7 w-term-55 on-mob-50 w-mob-100">
                            <h2 class="mx-mob-174 clr40 fs-mob-20 fs-ach-20">Enjoy guaranteed<sup>@</sup>returns and tax savings with<span class="fw-bold blet">Kotak Guaranteed Savings Plan.</span></h2>
                            <div class="roww">
                                <div class="coll-md-8 mr-20 mr-mob-0 w-mob-ban-100"><a href="online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="want-to-knw banner-knw cat-knw gsp-knw">Know More</a></div>
                                <div class="coll-md-4 mr-mob-0 w-mob-ban-100"><a href="buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=headbanner" class="in-buy banner-buy">Invest Now</a></div>
                            </div>
                        </div>
                        <div class="coll-md-5 w-term-45 my-auto rem-mob-myauto w-mob-100 d-none d-md-block"><img src="assets/images/saving-plans/kotak-guaranteed-savings-plan..svg" width="100%" height="100%" class="lyz_img" alt="Savings Plans Hero Image" title="Savings Plans Hero Image"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-ulips cat-what-ulip pad-top-bottom" id="what_are_ulips">
        <div class="btnstickybg">
            <div class="btnsticky hide-mobile" id="">
                <div class="btn-slick">
                    <div><a href="<?php echo $actual_link ?>#what-are-savings-plans" class="btnanc gspwhat">What are Savings Plans?</a></div>
                    <div><a href="<?php echo $actual_link ?>#benefits-of-savings-plans" class="btnanc gspbene">What are the Benefits of Savings Plans?</a></div>
                    <div><a href="<?php echo $actual_link ?>#partnering-secure-tomorrow" class="btnanc hide-mobile gspensure">Partnering for a secure tomorrow</a></div>
                    <div><a href="<?php echo $actual_link ?>#features-of-kotak-savings-plans" class="btnanc hide-mobile gspfeat">Features of Kotak Life</a></div>
                    <div><a href="<?php echo $actual_link ?>#consider-investing-savings-plan" class="btnanc hide-mobile gspconst">Considerations to make</a></div>
                    <div><a href="<?php echo $actual_link ?>#need-savings-plan" class="btnanc hide-mobile gspfeats">Why Do You Need a Savings Plan?</a></div>
                    <div><a href="<?php echo $actual_link ?>#best-savings-kotak-life" class="btnanc btnancc1 btnaddc1 gspsave">Best Savings Plans from Kotak Life</a></div>
                    <div><a href="<?php echo $actual_link ?>#steps-buy-savings-plan-online" class="btnanc btnancc1 btnaddc1 gspsteps">Steps to buy Savings Plan online</a></div>
                    <div><a href="<?php echo $actual_link ?>#who-should-buy-savings-plans" class="btnanc btnancc1 btnaddc1 gspbuy">Who Should Buy Savings Plan?</a></div>
                    <div><a href="<?php echo $actual_link ?>#for-how-much-time" class="btnanc btnancc1 btnaddc1 gsptime">For how much time should you</a></div>
                    <div><a href="<?php echo $actual_link ?>#document-required" class="btnanc btnancc1 btnaddc1 gspdocu">Documents required</a></div>
                    <div><a href="<?php echo $actual_link ?>#related-blogs" class="btnanc btnancc1 btnaddc1 gsptime">Realted Blogs</a></div>
                    <div><a href="<?php echo $actual_link ?>#saving-plans-faqs" class="btnanc gspfaq">Savings Plans Frequently Asked Questions</a></div>
                    <div><a href="<?php echo $actual_link ?>#terms-conditions" class="btnanc gspread">Read About Terms & Conditions</a></div>
                </div>
            </div>
        </div>
        <div class="midWrapper">
            <div class="what-ulip-tabs">
                <div class="what gspwhat" id="what-are-savings-plans">
                    <div class="roww m-0">
                        <div class="coll-md-5"><img src="assets/images/saving-plans/what-are-savings-plans.svg" class="mt-mob-23 lyz_img" width="80%" height="100%" alt="What are Savings Plans?" title="What are Savings Plans?"></div>
                        <div class="coll-md-7">
                            <h2 class="mb-35 term-tags savtxt mt-mob-28 gspwhattxt" name="">What are Savings Plans?</h2>
                            <div class="gsp-buy">
                                <p class="mx-539">Life is all about moments- some happy, some sad, some endow us with life lessons and some make us humble. But for a lot of people, it teaches them the importance of planning for the bright future. It is easier to brave the unpredictable highs and lows with a robust financial plan.</p>
                                <p class="mx-539">Hence, a savings plans is critical in your financial portfolio. It combines assured returns after a specific time period based on the type of product you choose. It also adds a term insurance cover ensuring your family’s well-being in case of the policyholder’s death.</p>
                                <p class="mx-539">Savings plans is an instrument that provides an opportunity to grow your hard-earned money combining a great savings plan along with insurance and guaranteed benefits.</p>
                            </div>
                            <div class="what-save clearfix"><a href="buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=whataresp" class="in-buy banner-buy" tabindex="-1">Save Now with Kotak Assured Savings Plan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits bene position-relative" id="benefits-of-savings-plans">
        <div class="midWrapper">
            <h2 class="mb-35 mb-mob-15 term-tags">What are the Benefits of Savings Plans?</h2>
            <div class="bene-para">
                <p class="mx-100">Savings plans have set benefits that can help most of us in not only achieving our financial goals but also securing our family’s future. Check out all the benefits below:</p>
            </div><span class="pagingInfo d-flex playfair_font justify-content-center"></span>
            <div class="bene-slick unslick gspbene">
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-1"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Protection</h3>
                            <p>Security for your family against financial crisis is the primary objective of these policies. Some of these plans also guarantee returns on your investment, thereby protecting your capital.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-2"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Variety</h3>
                            <p>Kotak Life offers a considerable assortment of savings and investment plans to cater to every financial need. You can select the one that best suits your age, budget, and financial horizon.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-3"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Customization</h3>
                            <ul class="benelis">
                                <li>You can augment your coverage with multiple riders and personalize your policy as per your individual needs.</li>
                                <li>Term rider provides additional sum assured over and above the death benefit on the base plan.</li>
                                <li>Accidental death benefit rider offers extra benefit in case of accidents.</li>
                                <li>Permanent disability benefit rider offers rider sum assured as per the defined rider benefit if permanent disability due to an accident occurs.</li>
                                <li>Premium Waiver of future premiums under the base plan in case of death or total disability of the policyholder.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-4"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Multiple premium payment terms</h3>
                            <p>You can choose from monthly, half-yearly, quarterly, and annual modes as per your budget. Single premium and limited payment options are also available.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-5"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Convenience of choosing policy term</h3>
                            <p>You can choose from different policy durations available in the plan according to your financial needs.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-6"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Ease of paying premiums</h3>
                            <p>You can pay your premiums and renew your policy online, without having to wait in queues and wasting time.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-7"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Tax benefits</h3>
                            <p>You can avail tax benefits on the paid premiums and death /maturity benefits under these policies.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-8"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Maturity Benefits</h3>
                            <p>Maturity benefit is the lump sum amount that you receive as a return after the policy term is completed. You can build your own house, plan a vacation with your family or maybe plan your retirement with it.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-9"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Death Benefit</h3>
                            <p>We all love our families, and our families equally love us. If something unfortunate happens to us, our families might have to go through hardships, not only emotionally, but also financially. Death benefit, comes as a lump sum payout for the beneficiary of a life insurance policy.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-10"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Loan Facility</h3>
                            <p>A savings plan permits you to take a loan for your financial requirements, but only when the insurance reaches a surrender value. Once you have surpassed that period, you are eligible for a loan against the policy</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon bsp-11"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Payment Options</h3>
                            <p>Premiums are supposed to help you insure your family and get guaranteed benefits, not to make you feel stressed. Therefore, you can choose between two premium payment modes: one lump sum payment or over a specified duration of time. For example, if you don't want to deal with the stress of long term premium commitment, you can pay them in a single go.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ensure term-insure save-trem" id="partnering-secure-tomorrow">
        <div class="midWrapper">
            <div class="roww">
                <div class="coll-md-10 move align-self-center mr-32 txt-mob-center">
                    <h2 class="parttxt" style="color:#fff!important;font-size:21px!important;letter-spacing:.42px!important">Partnering for a secure tomorrow</h2>
                </div>
            </div>
            <div class="roww">
                <div class="coll-md-6 width-m-100"><a href="buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=minicard">
                        <div class="p-tom first-tom">
                            <div class="part-gal">
                                <h3>Kotak Assured Savings Plan</h3>
                                <p>A plan that offer guaranteed returns and financial protection for your family.</p><button name="invest" class="tom-btn">Invest Now</button>
                            </div>
                            <div class="part_gal"><img class="lzy_img" width="100%" height="100%" data-src="assets/images/saving-plans/guaranteed-plan.svg" src="assets/images/saving-plans/guaranteed-plan.svg" alt="Kotak Assured Savings Plan mini card" title="Kotak Assured Savings Plan mini card"></div>
                        </div>
                    </a></div>
                <div class="coll-md-6 width-m-100"><a href="buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=minicard">
                        <div class="p-tom">
                            <div class="part-gal">
                                <h3>Kotak Guaranteed Savings Plan</h3>
                                <p>A plan that offers long term savings and insurance in one premium.</p><button name="invest" class="tom-btn">Invest Now</button>
                            </div>
                            <div class="part_gal"><img class="lzy_img" width="100%" height="100%" data-src="assets/images/saving-plans/saving-plans.svg" src="assets/images/saving-plans/saving-plans.svg" alt="Kotak Guaranteed Savings Plan mini card" title="Kotak Guaranteed Savings Plan mini card"></div>
                        </div>
                    </a></div>
            </div>
        </div>
    </section>
    <section class="features feat featgspmobile bg-eb gspfeatnew hide-desktop" id="features-of-kotak-savings-plan">
        <div class="midWrapper">
            <h2 class="mb-35 mb-mob-22 term-tags">What are the features of Kotak Life savings plans?</h2><span class="pagingInfo-gsp d-flex playfair_font justify-content-center"></span>
            <div class="gspnewslickmobile">
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-1"></div>
                        <h3>Guaranteed benefit</h3>
                        <p>A savings plan offers a guaranteed<sup>@</sup>sum assured which is pre-decided at the start of the policy based on your premiums. Saving plans offer maturity benefits if the policyholder survives the policy tenure and death benefit is offered to the nominee if the policyholder dies during the policy term.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-2"></div>
                        <h3>Increase in income</h3>
                        <p>Some income plans offer income boosts and enhance the yearly proceeds during the payout phase.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-3"></div>
                        <h3>Bonuses</h3>
                        <p>Participating plans offer bonuses along with the plan benefits at maturity.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-4"></div>
                        <h3>Enhanced sum assured</h3>
                        <p>Women and investors who opt for higher premium amounts can enjoy enhanced sum assured.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-5"></div>
                        <h3>Loyalty additions</h3>
                        <p>Savings plans offer financial rewards as loyalty additions on long-term investments, increasing the plan benefits.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-6"></div>
                        <h3>Limited pay option</h3>
                        <p>Most saving plans also offer the advantage of limited premium payment terms.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-7"></div>
                        <h3>One-time investment options</h3>
                        <p>Some savings plans offer the benefit of one-time payment through a single premium facility.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-8"></div>
                        <h3>Discounts</h3>
                        <p>If you choose a high sum assured, you can get discounts on the premium with some plans.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-9"></div>
                        <h3>Term period</h3>
                        <p>You can select a policy term period that best fits your requirements. You might choose the short-term savings plan if you anticipate you will need your money soon. Also, you can extend your insurance for a higher number of years if you want to save for the long term.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-10"></div>
                        <h3>Premiums</h3>
                        <p>You have the option of paying your premiums over a specified time period or all at once. These choices are available to make the policyholder&#39;s life easier and more convenient. The chosen payment method in no way impacts the assured benefits.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-11"></div>
                        <h3>Free look period</h3>
                        <p>Insurance policies mostly come with a small time frame called free-look period. Savings plan also come with this disclaimer. If a policyholder has some doubts about the policy or he/she is not happy with the clauses put forth, they can return the policy. The policyholder can return the policy in 30 days if the policy is bought online. In case of all other channels, the free look period is 15 days.</p>
                    </div>
                </div>
                <div>
                    <div class="savingsfeat">
                        <div class="saving-bene-icon klsp-12"></div>
                        <h3>Grace time</h3>
                        <p>For annual, half-yearly, and quarterly plans, the grace period indicates that the premium can be paid within 30 days after the premium due date. Kotak Life does not impose any fines or deductions during this time. This privilege is given to the policyholder so the policy does not lapse and they get enough time to arrange the premium amount.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features feat bg-eb gspfeatnew hide-mobile" id="features-of-kotak-savings-plans">
        <div class="midWrapper">
            <h2 class="mb-35 mb-mob-22 term-tags">What are the features of Kotak Life savings plans?</h2><span class="pagingInfo-gspnew d-flex playfair_font justify-content-center"></span>
            <div class="gspnewslick">
                <div>
                    <div class="roww">
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-1"></div>
                                <h3>Guaranteed benefit</h3>
                                <p>
                                <p>A savings plan offers a guaranteed<sup>@</sup>sum assured which is pre-decided at the start of the policy based on your premiums. Saving plans offer maturity benefits if the policyholder survives the policy tenure and death benefit is offered to the nominee if the policyholder dies during the policy term.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-2"></div>
                                <h3>Increase in income</h3>
                                <p>Some income plans offer income boosts and enhance the yearly proceeds during the payout phase.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-3"></div>
                                <h3>Bonuses</h3>
                                <p>Participating plans offer bonuses along with the plan benefits at maturity.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-4"></div>
                                <h3>Enhanced sum assured</h3>
                                <p>Women and investors who opt for higher premium amounts can enjoy enhanced sum assured.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-5"></div>
                                <h3>Loyalty additions</h3>
                                <p>Savings plans offer financial rewards as loyalty additions on long-term investments, increasing the plan benefits.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-6"></div>
                                <h3>Limited pay option</h3>
                                <p>Most saving plans also offer the advantage of limited premium payment terms.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww">
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class=""><img class="lzy_img" width="61px" height="61px" data-src="assets/images/One-time investment options.svg" src="assets/images/One-time investment options.svg" alt="One-time investment options" title="One-time investment options"></div>
                                <h3>One-time investment options</h3>
                                <p>Some savings plans offer the benefit of one-time payment through a single premium facility.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-8"></div>
                                <h3>Discounts</h3>
                                <p>If you choose a high sum assured, you can get discounts on the premium with some plans.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-9"></div>
                                <h3>Term period</h3>
                                <p>You can select a policy term period that best fits your requirements. You might choose the short-term savings plan if you anticipate you will need your money soon. Also, you can extend your insurance for a higher number of years if you want to save for the long term.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-10"></div>
                                <h3>Premiums</h3>
                                <p>You have the option of paying your premiums over a specified time period or all at once. These choices are available to make the policyholder&#39;s life easier and more convenient. The chosen payment method in no way impacts the assured benefits.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-11"></div>
                                <h3>Free look period</h3>
                                <p>Insurance policies mostly come with a small time frame called free-look period. Savings plan also come with this disclaimer. If a policyholder has some doubts about the policy or he/she is not happy with the clauses put forth, they can return the policy. The policyholder can return the policy in 30 days if the policy is bought online. In case of all other channels, the free look period is 15 days.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="saving-bene-icon klsp-12"></div>
                                <h3>Grace time</h3>
                                <p>For annual, half-yearly, and quarterly plans, the grace period indicates that the premium can be paid within 30 days after the premium due date. Kotak Life does not impose any fines or deductions during this time. This privilege is given to the policyholder so the policy does not lapse and they get enough time to arrange the premium amount.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits bene position-relative consider-saving" id="consider-investing-savings-plan">
        <div class="midWrapper">
            <h2 class="mb-35 mb-mob-15 term-tags">Considerations to make before investing in a savings plan</h2>
            <div class="bene-para">
                <p class="mx-100">To prepare for unforeseen events and maintain a stress-free life, sound financial planning is crucial. The most reliable approach to ensuring a secure financial future is to start saving regularly at a young age. A person can create a safe financial bubble for the future and gain several tax benefits by putting their money in a savings plan. However, there are a few things to consider while choosing the optimal savings strategy for you and your family.</p>
            </div><span class="pagingInfo d-flex playfair_font justify-content-center"></span>
            <div class="bene-slick unslick gspbene">
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon csp-1"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Risk capacity and profile</h3>
                            <p>You must first determine your risk tolerance in order to locate and select the optimal savings strategy. The two most crucial factors that might affect how much risk a person can bear are personal preferences and age. Young adults in their 20s and 30s can typically choose investments that carry a high level of risk but also offer a higher rate of return. They can choose more aggressive strategies, such as investing more capital in equities or the stock market than in the debt market.<br>A wise decision is to invest money in a Unit Linked Insurance Plan (ULIP) if you're seeking plans with higher risk and higher rewards. On the other hand, investors who are unwilling to take on a lot of risks should consider a conventional investment or a money-back saving plan, which are both ideally suited to their needs. Investors' returns are guaranteed by these savings plans with modest risk but at a reduced rate of return.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon csp-2"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Investment duration</h3>
                            <p>The length of time the money is invested is yet another crucial consideration when selecting the finest savings strategy. Numerous savings programmes offer investors a long to medium-term investment horizon and additionally function as tax-efficient investment options. Some of these may help you grow your funds throughout your policy term.<br>You can start investing with a small sum and gradually increase your corpus. It is possible to invest a small sum in savings plans because most financial institutions recognise that an individual's income and savings fluctuate with age and provide them with the option to increase or decrease the amount to be invested.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon csp-3"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Ultimate goals</h3>
                            <p>You must be certain of your goals before selecting the most advantageous savings strategy. Knowing your end objective makes it simple to choose options for investments that save on taxes. These objectives can range from building a corpus for your retirement, having enough money set up for your child's higher education or wedding, or even possibly building a home.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon csp-4"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>Savings Plan Highlights</h3>
                            <p>Sometimes in life we have to take loans and at that time, we either try to break our investments or take a loan at a higher interest rate. If you are investing in a savings plan, the chances are that you can use the policy to avail a loan. You can avail up to 50% of your surrender value as loan.<br>Surrender value is the sum you get when you forfeit your life insurance policy before maturity.<br>You can select the greatest savings plan that can offer you security and savings thanks to numerous options and wide coverage. As a result, it is critical to consider all the positive aspects and characteristics of a savings plan before choosing one.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww bene-para">
                        <div class="coll-md-1">
                            <div class="saving-bene-icon csp-5"></div>
                        </div>
                        <div class="coll-md-11">
                            <h3>The flexibility of a savings plan</h3>
                            <p>To achieve all of your long-term objectives, you must pick an adaptable savings strategy. You can take care of your unanticipated short-term needs by doing this. They provide you with much more leeway to renounce the policy if the situation calls for it.<br>To get a better rate of return at maturity, it is preferable to hold onto the tax-saving investment savings plan for longer.</p>
                        </div>
                    </div>
                </div>
                <div class="const-mar"><a href="buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=spconsiderations" class="in-buy banner-buy">Invest in Kotak Guaranteed Savings Plan</a></div>
            </div>
        </div>
    </section>
    <section class="features feat gspfeatnew saving-cat-card" id="need-savings-plan">
        <div class="midWrapper">
            <h2 class="mb-35 mb-mob-22 term-tags fnt-24">Why Do You Need a Savings Plan?</h2>
            <div class="">
                <div>
                    <div class="roww">
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="w-press">
                                    <div class="saving-bene-icon nsp-1"></div>
                                </div>
                                <h3>Aid in the event of a financial crisis</h3>
                                <p>Savings can aid you in a variety of financial situations, the majority of which occur unexpectedly. The current recession is the best illustration when savings have made it possible to keep the household running even in the event of a job loss and to pay for school expenses. Investing in savings plan help you plan for a longer future which might be sometimes hard.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="w-press">
                                    <div class="saving-bene-icon nsp-2"></div>
                                </div>
                                <h3>Wings to pursue your dreams</h3>
                                <p>Money is one of the key resources you need to realise your aspirations. The ability to use your savings to supplement your income in these areas of life will help you become financially secure enough to pursue your goals in life. To learn something new, to start something new, for everything, you need money. Some people also like to call it emergency fund.</p>
                            </div>
                        </div>
                        <div class="coll-30">
                            <div class="savingsfeat">
                                <div class="w-press">
                                    <div class="saving-bene-icon nsp-3"></div>
                                </div>
                                <h3>Long term Security</h3>
                                <p>With the simple habit of saving money, you can cover all of your needs, including those for money, health, and life beyond retirement. All of your hard-earned money will serve as the foundation of your future and offer true long-term security. The ups and downs of the market will influence your compensation, which will impact any potential retirement plans or a steady income to save for the future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="e-invest btn-eterms cat-e-invest" id="best-savings-kotak-life">
        <div class="midWrapper">
            <h2>Best Savings Plans from Kotak Life</h2>
            <p>Kotak Life offers some of the best savings plans that give guaranteed returns. Check out Kotak Life savings plans:</p>
            <div class="roww">
                <div class="coll-md-6"><span class="onlineplan">Online plan</span>
                    <div class="kotaksavcard mr-14">
                        <div class="d-flex">
                            <div><img src="assets/images/gspimg.svg" width="100%" height="100%" class="" alt="Kotak Guaranteed Savings Plan" title="Kotak Guaranteed Savings Plan"></div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-guaranteed-savings-plan-brochure.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>Enhanced Protection Through Riders</li>
                                    <li>Tax Savings</li>
                                    <li>Guaranteed<sup>@</sup>Loyalty* Additions</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Maturity & Death Benefit</li>
                                    <li>Multiple Premium Payment Terms</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center"><a href="online-plans/savings-plan/kotak-guaranteed-savings-plan-online?utm_source=organic&amp;utm_medium=website&amp;utm_campaign=l2category_page" class="gspview">Want to Know More?</a><a href="buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card" class="gspinv">Invest Now</a></div>
                    </div>
                </div>
                <div class="coll-md-6"><span class="onlineplan">Online plan</span>
                    <div class="kotaksavcard ml-14 assur430">
                        <div class="d-flex">
                            <div><img src="assets/images/assurlogo.svg" width="100%" height="100%" class="w-161" alt="Kotak Assured Savings Plan" title="Kotak Assured Savings Plan"></div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-assured-savings-plan-brochure-23-june-2022.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30 h-156">
                            <div class="coll-md-6">
                                <ul>
                                    <li>Guaranteed Yearly Additions to increase life cover</li>
                                    <li>Guaranteed<sup>@</sup>Loyalty Addition at maturity</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul></ul>
                            </div>
                        </div>
                        <div class="text-center"><a href="insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="gspview">View Kotak Assured Savings Plan</a><a href="buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=product_card" class="gspinv">Invest Now</a></div>
                    </div>
                </div>
            </div>
            <div class="roww bestsavgsp">
                <div class="coll-md-3"><span class="onlineplan">Offline plan</span>
                    <ul class="onlinegsp h-361">
                        <li class="opc1 accelclr">
                            <div class="d-flex align-center accordioncard">
                                <div>
                                    <h3>Kotak Assured Income Accelerator</h3>
                                </div>
                                <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </li>
                        <li class="opc2">
                            <div class="d-flex align-center accordioncard">
                                <div>
                                    <h3>Kotak Premier Endowment Plan</h3>
                                </div>
                                <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </li>
                        <li class="opc3">
                            <div class="d-flex align-center accordioncard">
                                <div>
                                    <h3>Kotak Premier Moneyback Plan</h3>
                                </div>
                                <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </li>
                        <li class="opc4">
                            <div class="d-flex align-center accordioncard">
                                <div>
                                    <h3>Kotak Classic Endowment Plan</h3>
                                </div>
                                <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </li>
                        <li class="opc5">
                            <div class="d-flex align-center accordioncard">
                                <div>
                                    <h3>Kotak SmartLife Plan</h3>
                                </div>
                                <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </li>
                        <li class="opc6">
                            <div class="d-flex align-center accordioncard">
                                <div>
                                    <h3>Kotak Premier Income Plan</h3>
                                </div>
                                <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </li>
                        <li class="opc7">
                            <div class="d-flex align-center accordioncard">
                                <div>
                                    <h3>POS Bachat Bima Plan</h3>
                                </div>
                                <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </li>
                        <li class="opc8">
                            <div class="d-flex align-center accordioncard">
                                <div>
                                    <h3>Kotak Fortune Maximiser</h3>
                                </div>
                                <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </li>
                        <li class="opc9">
                            <div class="d-flex align-center accordioncard">
                                <div>
                                    <h3>Kotak Sampoorn Bima Micro-Insurance Plan</h3>
                                </div>
                                <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </li>
                        <li class="opc10">
                            <div class="d-flex align-center accordioncard">
                                <div>
                                    <h3>Kotak Premier Life Plan</h3>
                                </div>
                                <div class="ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="coll-md-9">
                    <div class="kotaksavcard accelcard op1 accelblock">
                        <div class="d-flex">
                            <div>
                                <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Assured Income Accelerator</h3>
                            </div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-assured-income-accelerator-brochure.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>A non-participating life insurance plan</li>
                                    <li>Guaranteed yearly income during the payout phase</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Income boosters to increase yearly returns</li>
                                    <li>Death benefit independent of the income paid</li>
                                </ul>
                            </div>
                        </div>
                        <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-assured-income-accelerator" class="gspview">View Kotak Assured Income Accelerator Plan</a></div>
                    </div>
                    <div class="kotaksavcard accelcard op2">
                        <div class="d-flex">
                            <div>
                                <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Premier Endowment Plan</h3>
                            </div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-premier-endowment-plan-brochure-1.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>Guaranteed additions</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Additional Protection through optional riders</li>
                                </ul>
                            </div>
                        </div>
                        <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-premier-endowment-plan" class="gspview">View Kotak Premier Endowment Plan</a></div>
                    </div>
                    <div class="kotaksavcard accelcard op3">
                        <div class="d-flex">
                            <div>
                                <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Premier Moneyback Plan</h3>
                            </div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/Kotak-Premier-Moneyback-Plan-Savings-and-Investment-Plan.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" class="" width="60px" height="60px" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>Payouts at regular intervals</li>
                                    <li>lump-sum amount at</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Bonus from the first year</li>
                                    <li>Accidental death benefit</li>
                                </ul>
                            </div>
                        </div>
                        <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-premier-moneyback-plan" class="gspview">View Kotak Premier Moneyback Plan</a></div>
                    </div>
                    <div class="kotaksavcard accelcard op4">
                        <div class="d-flex">
                            <div>
                                <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Classic Endowment Plan</h3>
                            </div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-classic-endowment-plan-brochure-1.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>Vested bonuses along with maturity benefits</li>
                                    <li>Discounts on premium with high sum assured</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Choice of policy term options</li>
                                </ul>
                            </div>
                        </div>
                        <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-classic-endowment-plan" class="gspview">View Kotak Classic Endowment Plan</a></div>
                    </div>
                    <div class="kotaksavcard accelcard op5">
                        <div class="d-flex">
                            <div>
                                <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak SmartLife Plan</h3>
                            </div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-smartlife-plan-brochure-11.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>A limited pay non- linked participating plan</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Choice of bonus options</li>
                                </ul>
                            </div>
                        </div>
                        <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-smartlife-plan" class="gspview">View Kotak SmartLife Plan</a></div>
                    </div>
                    <div class="kotaksavcard accelcard op6">
                        <div class="d-flex">
                            <div>
                                <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Premier Income Plan</h3>
                            </div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-premier-income-plan-brochure-1.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>Guaranteed annual income</li>
                                    <li>Enhanced life coverage on higher premiums and for females</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Bonuses throughout the policy period</li>
                                </ul>
                            </div>
                        </div>
                        <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-premier-income-plan" class="gspview">View Kotak Premier Income Plan</a></div>
                    </div>
                    <div class="kotaksavcard accelcard op7">
                        <div class="d-flex">
                            <div>
                                <h3 class="accel" style="color:#036!important;font-size:28px!important">POS Bachat Bima Plan</h3>
                            </div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-poa-bachat-bima-brochure-18-may-2020-1.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>Guaranteed yearly additions</li>
                                    <li>Two plan options – Life and Life Plus</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Double life coverage on accidental death with Life Plus option</li>
                                </ul>
                            </div>
                        </div>
                        <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-pos-bachat-bima" class="gspview">View POS Bachat Bima Plan</a></div>
                    </div>
                    <div class="kotaksavcard accelcard op8">
                        <div class="d-flex">
                            <div>
                                <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Fortune Maximiser</h3>
                            </div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-fortune-maximiser.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>Multiple plan options – Life Goal Maximiser, Bright Future Maximiser, Golden Years Maximiser</li>
                                    <li>Flexibility to choose bonus payout options</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Life cover up to 85 years for you and your spouse</li>
                                    <li>Optional rider support</li>
                                </ul>
                            </div>
                        </div>
                        <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-fortune-maximiser" class="gspview">View Kotak Fortune Maximiser</a></div>
                    </div>
                    <div class="kotaksavcard accelcard op9">
                        <div class="d-flex">
                            <div>
                                <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Sampoorn Bima Micro-Insurance Plan</h3>
                            </div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-sampoorn-bima-micro-insurance-plan-brochure-4-february-2021.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>Short-term, 5-year plan</li>
                                    <li>Fixed premium - ₹200 only</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Guaranteed@ Payout – Both maturity benefit and death benefit</li>
                                    <li>No medicals</li>
                                </ul>
                            </div>
                        </div>
                        <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-sampoorn-bima-micro-insurance-plan" class="gspview">View Kotak Sampoorn Bima Micro-Insurance Plan</a></div>
                    </div>
                    <div class="kotaksavcard accelcard op10">
                        <div class="d-flex">
                            <div>
                                <h3 class="accel" style="color:#036!important;font-size:28px!important">Kotak Premier Life Plan</h3>
                            </div>
                            <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/Kotak_Premier_Life_Plan_-_Brochure.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                        </div>
                        <div class="roww mg-30">
                            <div class="coll-md-6">
                                <ul>
                                    <li>Protection up to the age of 99 years</li>
                                    <li>Receive Bonus payouts or accumulate under the policy</li>
                                </ul>
                            </div>
                            <div class="coll-md-6">
                                <ul>
                                    <li>Enhance protection through optional riders</li>
                                    <li>Tax benefits u/s 80C and 10(10D)</li>
                                </ul>
                            </div>
                        </div>
                        <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-premier-life-plan" class="gspview">View Kotak Premier Life Plan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-feat gspmobile-feat hide-desktop saving-off" id="">
        <div class="midWrapper"><span class="onlineplan">Offline plan</span>
            <div class="gspaccbor">
                <div class="accordion-div acc-div-mob accordion-btns mt-mob-15">
                    <div class="bor"><button name="assured" class="accordion bor-top-zero" role="heading" aria-level="3">
                            <h5 class="bor-top-rad">Kotak Assured Income Accelerator</h5>
                        </button>
                        <div class="panel tab-detail mb-0 tab-align" style="">
                            <div id="London" class="tabcontent">
                                <div class="kotaksavcard accelcard accelcardacc">
                                    <div class="d-flex">
                                        <div class="roww mg-30">
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>A non-participating life insurance plan</li>
                                                    <li>Guaranteed yearly income during the payout phase</li>
                                                </ul>
                                            </div>
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Income boosters to increase yearly returns</li>
                                                    <li>Death benefit independent of the income paid</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-assured-income-accelerator-brochure.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                                    </div>
                                    <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-assured-income-accelerator" class="gspview">View Kotak Assured Income Accelerator</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bor"><button name="premier" class="accordion">
                            <h5>Kotak Premier Endowment Plan</h5>
                        </button>
                        <div class="panel tab-detail mb-0 tab-align" style="">
                            <div id="Paris" class="tabcontent">
                                <div class="kotaksavcard accelcard accelcardacc">
                                    <div class="d-flex">
                                        <div class="roww mg-30">
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Guaranteed additions</li>
                                                    <li>Additional Protection through optional riders</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-premier-endowment-plan-brochure-1.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                                    </div>
                                    <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-premier-endowment-plan" class="gspview">View Kotak Premier Endowment Plan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bor"><button name="Premier" class="accordion">
                            <h5>Kotak Premier Moneyback Plan</h5>
                        </button>
                        <div class="panel tab-detail mb-0 tab-align" style="">
                            <div id="Tokyo" class="tabcontent">
                                <div class="kotaksavcard accelcard accelcardacc">
                                    <div class="d-flex">
                                        <div class="roww mg-30">
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Payouts at regular intervals</li>
                                                    <li>lump-sum amount at maturity</li>
                                                </ul>
                                            </div>
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Bonus from the first year</li>
                                                    <li>Accidental death benefit</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/Kotak-Premier-Moneyback-Plan-Savings-and-Investment-Plan.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                                    </div>
                                    <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-premier-moneyback-plan" class="gspview">View Kotak Premier Moneyback Plan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bor"><button name="accordion" class="accordion">
                            <h5>Kotak Classic Endowment Plan</h5>
                        </button>
                        <div class="panel tab-detail mb-0 tab-align" style="">
                            <div id="four" class="tabcontent">
                                <div class="kotaksavcard accelcard accelcardacc">
                                    <div class="d-flex">
                                        <div class="roww mg-30">
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Vested bonuses along with maturity benefits</li>
                                                    <li>Discounts on premium with high sum assured</li>
                                                    <li>Choice of policy term options</li>
                                                </ul>
                                            </div>
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Choice of policy term options</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-classic-endowment-plan-brochure-1.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                                    </div>
                                    <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-classic-endowment-plan" class="gspview">View Kotak Classic Endowment Plan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bor"><button name="smartlife" class="accordion">
                            <h5>Kotak SmartLife Plan</h5>
                        </button>
                        <div class="panel tab-detail mb-0 tab-align" style="">
                            <div id="five" class="tabcontent">
                                <div class="kotaksavcard accelcard accelcardacc">
                                    <div class="d-flex">
                                        <div class="roww mg-30">
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>A limited pay non- linked participating plan</li>
                                                </ul>
                                            </div>
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Choice of bonus options</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-smartlife-plan-brochure-11.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                                    </div>
                                    <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-smartlife-plan" class="gspview">View Kotak SmartLife plan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bor"><button name="Premier" class="accordion">
                            <h5>Kotak Premier Income Plan</h5>
                        </button>
                        <div class="panel tab-detail mb-0 tab-align" style="">
                            <div id="six" class="tabcontent">
                                <div class="kotaksavcard accelcard accelcardacc">
                                    <div class="d-flex">
                                        <div class="roww mg-30">
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Guaranteed annual income</li>
                                                    <li>Bonuses throughout the policy period</li>
                                                </ul>
                                            </div>
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Enhanced life coverage on higher premiums and for females</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-premier-income-plan-brochure-1.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                                    </div>
                                    <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-premier-income-plan" class="gspview">View Kotak Premier Income Plan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bor"><button name="Bimaplan" class="accordion">
                            <h5 class="bor-bot-rad">POS Bachat Bima Plan</h5>
                        </button>
                        <div class="panel tab-detail mb-0 tab-align" style="">
                            <div id="seven" class="tabcontent">
                                <div class="kotaksavcard accelcard accelcardacc">
                                    <div class="d-flex">
                                        <div class="roww mg-30">
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Guaranteed yearly additions</li>
                                                    <li>Two plan options – Life and Life Plus</li>
                                                </ul>
                                            </div>
                                            <div class="coll-md-6">
                                                <ul>
                                                    <li>Double life coverage on accidental death with Life Plus option</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ml-auto tooltip"><a class="broch-btn want-to-btn" href="assets/images/uploads/insurance-plans/kotak-poa-bachat-bima-brochure-18-may-2020-1.pdf" download="Brochure"><img src="assets/images/gspdownload.svg" width="60px" height="60px" class="" alt="gspdownload"></a><span class="tooltiptext">Download Brochure</span></div>
                                    </div>
                                    <div class=""><a href="insurance-plans/savings-and-investments-plans/kotak-pos-bachat-bima" class="gspview">View POS Bachat Bima Plan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-buy position-relative saving-steps stepsav-plan" id="steps-buy-savings-plan-online">
        <div class="midWrapper" id="how_to_buy_term_insurance_plan_online">
            <h2 class="mb-20 term-tags">Steps to buy Savings Plan online</h2>
            <p class="fst-18 mx-1021 mb-35">Savings plans are life insurance products made to assist you in making regular, disciplined savings and to provide financial security for your family in the event of your untimely death.</p>
            <p class="fst-18 mx-1021 mb-35">Nowadays, you can purchase a savings plan online without having to go to an insurer's or agent's office. You can conduct online research to find the plans that best meet your needs, determine your eligibility for them, upload the required documentation, and make payments. Typically, policies are sent via email, but you can also receive notifications on your phone.</p>
            <p class="fst-18 mx-1021 mb-35">Here are some simple steps you need to buy savings plans online</p>
            <div class="how-slick">
                <div>
                    <div class="roww">
                        <div class="coll-md-1 text-center">
                            <p class="mb-10">Step</p>
                            <p class="fst-18 steps-number color-white">1</p>
                        </div>
                        <div class="coll-md-11 mt-mob-24">
                            <p>Analyze your financial needs and goals. You can determine the amount that needs to be ensured by knowing the approximate amount of money you would need for a large expenditure in the future or the amount needed to support your dependents when you are gone.</p>
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
                            <p>Do a thorough research. On their websites, the majority of insurers describe in full their various savings plans, including any benefits and limits. Before choosing the savings plan, you wish to purchase, carefully read the terms and conditions pertaining to claim settlements and other matters.</p>
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
                            <p>Perform due diligence on the insurance you have chosen to analyse the insurer's financial stability, standing, level of customer service, testimonials, and discounts provided.</p>
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
                            <p>Check the eligibility requirements, such as the minimum and maximum ages at which you can choose the insurance, the income ranges, and the different forms of identification required to purchase an online savings plan.</p>
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
                            <p>Submit the online forms together with any necessary documentation, such as evidence of age, address, and identity.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="roww">
                        <div class="coll-md-1 text-center">
                            <p class="mb-10">Step</p>
                            <p class="fst-18 steps-number color-white">6</p>
                        </div>
                        <div class="coll-md-11 mt-mob-24">
                            <p>Get email copies of the policy materials and text messages with pertinent notifications. So that you may immediately access them in an emergency, keep a folder with a record of all your investments.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="save-step-btn clearfix"><a href="buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=steps2buy" class="in-buy banner-buy">Invest in Kotak Assured Savings Plan</a></div>
        </div>
    </section>
    <section class="term-types saving-buys" id="who-should-buy-savings-plans">
        <div class="midWrapper" id="types_of_term_insurance_plans">
            <h2 class="term-tags">Who Should Buy Savings Plan?</h2>
            <p class="fst-18 mtb-20">Buying a saving plan is a good choice for:</p>
            <div class="roww">
                <div class="coll-md-6">
                    <div class="type-card mr-16">
                        <div class="saving-bene-icon sbsp-1"></div>
                        <h3>Young entrepreneurs</h3>
                        <p>Beginning early gives investors, the chance to take greater risks and increase their chances of earning better returns since they have more time to recover from poor choices without having an impact on their long-term financial objectives. Investors can use compounding, or interest earned on interest, to their advantage.</p>
                    </div>
                </div>
                <div class="coll-md-6">
                    <div class="type-card">
                        <div class="saving-bene-icon sbsp-2"></div>
                        <h3>Recently married couples</h3>
                        <p>A greater potential for wealth building may arise from making the most of the two-fold increase in investment power. Young couples can afford to be less cautious when investing because they have a long time to build their wealth. Consider stock, debt, mutual funds, and real estate as products.</p>
                    </div>
                </div>
                <div class="coll-md-6">
                    <div class="type-card mr-16">
                        <div class="saving-bene-icon sbsp-3"></div>
                        <h3>People on the verge of retirement</h3>
                        <p>It's never too early to start saving when it comes to retirement preparation. Your retirement funds will have more time and opportunity to develop the more you invest and the earlier you start. You might be able to benefit from compound gains by investing early and maintaining your investment.</p>
                    </div>
                </div>
                <div class="coll-md-6">
                    <div class="type-card">
                        <div class="saving-bene-icon sbsp-4"></div>
                        <h3>Parents</h3>
                        <p>There are several tax benefits to take into account while saving money for your child. Plans, including child insurance plans, savings accounts at state-run financial institutions, and tuition costs, are exempt from taxes as long as they adhere to certain guidelines stated in the tax legislation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ensure red-bg" id="for-how-much-time">
        <div class="midWrapper">
            <div class="roww">
                <div class="coll-md-12">
                    <div class="savered-bg">
                        <h2>For how much time should you stay invested in a savings plan?</h2>
                        <p>The duration of your savings plan should depend upon your goals - short-term or long-term goals; it is important to take note of all the aspects of saving plan investing before making a decision. Consider your end goal, what you are investing for and how accessible you need your money to be during an emergency situation.</p>
                        <div class="time-saving"><a href="buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=howmuchtime" class="sav-red-btn">Check Now with Kotak Assured Savings Plan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-buy position-relative saving-online" id="document-required">
        <div class="midWrapper" id="how-to-buy-term-insurance-plan-online">
            <h2 class="mb-20 term-tags">Documents required to buy Savings Plan online</h2>
            <p class="fst-18 mx-1021 mb-35">When you are prepared to buy a savings plan, make sure you have the following paperwork:</p>
            <div class="roww mt-3 mb-0">
                <div class="coll-md-6">
                    <div class="how-slick">
                        <div>
                            <div class="roww">
                                <div class="coll-md-1 text-center"><img src="assets/images/saving-plans/right-btn.svg" class="lyz_img" width="31px" height="31px" alt="Policy Form" title="Policy Form"></div>
                                <div class="coll-md-11 mt-mob-24">
                                    <div class="best-prem">
                                        <h3>Policy Form:</h3>
                                        <p>You must complete an application for a policy. The document gives the organisation details about your financial situation and medical background. Your premium and sum assured will be determined by the company based on your responses.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="roww">
                                <div class="coll-md-1 text-center"><img src="assets/images/saving-plans/right-btn.svg" class="lyz_img" width="31px" height="31px" alt="Income Proof" title="Income Proof"></div>
                                <div class="coll-md-11 mt-mob-24">
                                    <div class="best-prem">
                                        <h3>Income Proof:</h3>
                                        <p>To demonstrate that you have the financial resources to pay your premiums, present your income documentation. Bank statements, prior Income Tax Returns (ITR), and pay stubs are typically required to be shared with the employer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="coll-md-6">
                    <div class="how-slick">
                        <div>
                            <div class="roww">
                                <div class="coll-md-1 text-center"><img src="assets/images/saving-plans/right-btn.svg" class="lyz_img" width="31px" height="31px" alt="Identity Proof" title="Identity Proof"></div>
                                <div class="coll-md-11 mt-mob-24">
                                    <div class="best-prem">
                                        <h3>Identity Proof:</h3>
                                        <p>You must present proof of your identity and address as part of the KYC procedure. You have the option to submit the following paperwork:</p>
                                        <ul class="save-online-list">
                                            <li>Pan card</li>
                                            <li>Passport</li>
                                            <li>Permanent driving license</li>
                                            <li>Voter’s ID card</li>
                                            <li>Aadhar card</li>
                                            <li>Identity card with photo issued by Government department</li>
                                            <li>Bank account statement or updated bank passbook</li>
                                            <li>Documents issued by the Government department</li>
                                            <li>Central KYC identifier</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="save-step-btn clearfix"><a href="buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=l2category_page&utm_content=documentsreq" class="in-buy banner-buy" tabindex="-1">Save Now with Kotak Guaranteed Savings Plan</a></div>
        </div>
    </section>
    <section class="term-blog gsp-blogs" id="related-blogs">
        <article class="likeWrap">
            <div class="midWrapper pb-0 pt-0">
                <h2 class="mb-37 term-tags mb-0">Related Blogs</h2>
                <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div"></ul><a href="javascript:;" class="link" id="load-more-articles" onclick='dataLayer.push({event:"event  load",category:"",action:"",label:"load more"})' style="display:table">Load More</a>
                <div class="noRecord" style="display:none"></div>
                <div class="innerLoader" style="display:none"><img src="assets/images/loader.gif" width="50px" height="50px" alt="Kotak Loader"></div>
            </div>
        </article>
    </section>
    <section class="what-policy-period how-buy-cat mt-30 save-faq" id="saving-plans-faqs">
        <div class="midWrapper">
            <h2 class="mb-20 term-tags">Savings Plans Frequently Asked Questions</h2>
            <div class="accordion-div accordion-btns accordion-btns-gsp mt-mob-15">
                <div class="bor">
                    <div class="accordion bor-top-zero" role="heading" aria-level="3"><span>1.</span>
                        <h3>What are Savings Plans?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <p>A savings plan allows you to make systematic deposits into money-making avenues. Thus, such plans enable you to accumulate a corpus over time that you can utilize for your future financial goals. At the same time, such plans offer the benefit of life coverage, protecting your loved ones against economic hardships in your absence. Endowment policies, ULIPs, and money-back plans are a few examples of such plans.</p>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion"><span>2.</span>
                        <h3>What are Guaranteed Savings Plans? </h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <p>A <a class="clr-blu" href="online-plans/savings-plan/kotak-guaranteed-savings-plan-online"> guaranteed savings plan </a> offers the assurance of higher returns. The sum assured is declared upfront. Thus, such plans offer a fail-safe lump sum at the end of the policy tenure.</p>
                            <ul class="gspnewlis">
                                <li>
                                    <h4><span>a.</span>Are the returns guaranteed?</h4>
                                    <p>Guaranteed savings plans keep their word and deliver on their promise of guaranteed returns. Despite the continued market turmoil and fluctuations, you earn a standard and stable income rate since you are not susceptible to market volatility. This plan provides a safe location to put money for investors who have a low-risk appetite.</p>
                                </li>
                                <li>
                                    <h4><span>b.</span>Does guaranteed savings plan have tax benefits?</h4>
                                    <p>The premiums paid are eligible for a deduction of up to ₹1,50,000 under section 80C of the Income Tax Act, 1961 You can also benefit from a tax-free payout because the maturity benefit is exempt from taxation under Section 10 (10D).</p>
                                </li>
                                <li>
                                    <h4><span>c.</span>How can I compare and choose the best guaranteed savings plan?</h4>
                                    <p>To choose the best guaranteed savings plan, you should look at factors like minimum age criteria, maximum age criteria, policy term period, premium payment methods, yearly premiums, sum assured amount and the additional benefits that are being provided. Once all these factors align with your personal requirements, you will know that it is the ideal plan for you.</p>
                                </li>
                                <li>
                                    <h4><span>d.</span>What happens if I discontinue the guaranteed savings plan?</h4>
                                    <p>If you choose to discontinue the plan, you will only receive the surrender value of the savings plan. However, this clause will only apply if the policy has been in force for more than three years.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion"><span>3.</span>
                        <h3>How to determine the perfect savings plans for your needs?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <ul class="gspnewlis">
                                <li>
                                    <h4><span>a.</span>Identify your financial needs</h4>
                                    <p>Clarity about your immediate and future financial goals is crucial for determining the apt investment plan. You can make a list of objectives like children’s education, retirements planning etc. After that, chalk out specific time frames for meeting such goals. Match the projected returns of your investment plan with your target funds to decide on the plan to buy. Also, choose the policy tenure accordingly.</p>
                                </li>
                                <li>
                                    <h4><span>b.</span>Select the premium payment terms wisely</h4>
                                    <p>Opt for single premium/ limited or regular payment options in keeping with your resources.</p>
                                </li>
                                <li>
                                    <h4><span>c.</span>Consider liquidity</h4>
                                    <p>Choose plans that offer, yearly incomes, regular money-back opportunities, or options to avail of loans to access funds in emergencies</p>
                                </li>
                                <li>
                                    <h4><span>d.</span>Pay attention to the fine print</h4>
                                    <p>Understand all the exclusions, clauses and conditions to be confident about the suitability of the plan.</p>
                                </li>
                                <li>
                                    <h4><span>e.</span>Weigh in tax-savings</h4>
                                    <p>Choose plans that not only help you save tax but also generate tax-exempt income as well.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion"><span>4.</span>
                        <h3>Can I Save Tax with Savings plans?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <p>You can claim tax deductions under Section 80C of the Income Tax Act, 1961 for the premiums paid towards these plans. Moreover, the maturity benefits, as well as the death benefits, are also tax-exempt, subject to the conditions specified in <a href="insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know"> Section 10(10D). </a> </p>
                            <ul class="gspnewlis fw-normal">
                                <li><span>a.</span>Guaranteed income and guaranteed additions lead to capital appreciation in traditional plans.</li>
                            </ul>
                            <p>Therefore, you can remain stay stress-free about your investments with a Kotak savings and investment plan</p>
                        </div>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion"><span>5.</span>
                        <h3>How much money should I save before investing?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <p>Aim to spend no more than 50% of your take-home pay on necessities, set aside 15% of your pre-tax income for retirement savings, and reserve 5% of your take-home pay for short-term savings. Build the fund up to three months' worth of costs, then divide your money between investments and a savings account until you have six to eight months’ worth saved up. Your funds should then be invested in things that generate higher income than a bank account for retirement and other goals.15% of your pre-tax income to retirement savings and 5% of your gross income to short-term savings.</p>
                        </div>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion"><span>6.</span>
                        <h3>How to choose the best savings plan?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <p>The three simple methods listed below will help you locate the best online savings and investing programme in India:</p>
                            <ul class="gspnewlis">
                                <li>
                                    <p>1. Your goal: Understanding the goal of your investment and defining it in these terms is the first step.</p>
                                    <ul>
                                        <li>What amount are you investing?</li>
                                        <li>What timeframe do you want the returns?</li>
                                        <li>Do you require tax benefits on the money you've saved?</li>
                                    </ul>
                                </li>
                                <li>
                                    <p>2. List the savings options that best suit your objectives: You can shortlist several saving plans based on the amount of investment and the amount of time you have until you need the money for a goal. One investment should be made with the intention of continuing to save money until you need it again.</p>
                                </li>
                                <li>
                                    <p>3. Maximize Your Growth: You have the option of investing in fixed income (debt) or equity plans, depending on the amount of time you have available and your level of risk tolerance. You can only choose from the plans that offer a tax benefit on the amount invested if your goal also includes tax savings.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion"><span>7.</span>
                        <h3>What is the right way to begin with a long-term saving plan?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <p>The finest long-term investing strategies for making big returns over a lengthy period of time are stocks. A systematic investing technique can be used to make long-term investments in equities or mutual funds (SIP).</p>
                        </div>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion"><span>8.</span>
                        <h3>Is pairing life insurance and saving plan a good idea?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <p>When you require periodic payouts to plan and handle specific goals while maintaining life coverage, combining protection and savings is an excellent solution. Money back plans, a type of life insurance policy, provide you with recurring payouts that aid in the planning of your financial objectives.</p>
                        </div>
                    </div>
                </div>
                <div class="bor">
                    <div class="accordion"><span>9.</span>
                        <h3>Should I pick a long-term or a short-term savings Investment plan?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <p>If you want to keep your money secure and are happy with small profits, choose short-term investments. However, you should put money into long-term investment opportunities if you want to make more money.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="terms new-terms how-much gspnewterms" id="terms-conditions">
        <div class="midWrapper"><button name="disclaimers" type="button" class="collapsible terms-txt whitespace-initial">Disclaimers-</button>
            <div class="content-col mb-0 tab-align li-disc terms-para">
                <div class="mb-0 save-disc">
                    <p>You may avail of tax benefits as per Income Tax Act, 1961, Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant. Goods and Services Tax and Cess as applicable shall be levied over and above premium amount as per applicable tax laws</p>
                    <p>For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure. @ Guaranteed benefits due under this plan are available provided premiums are paid regularly for the entire premium payment term and the policy is in force. Ref. No. KLI/22-23/E-WEB/1772.</p>
                    <p><b>Kotak Guaranteed Savings Plan</b>UIN: 107N100V03, Form No: N100. Kotak Term Benefit Rider, UIN: 107B003V03, Form No: B003; Kotak Accidental Death Benefit Rider, UIN: 107B001V03, Form No: B001; Kotak Permanent Disability Benefit Rider, UIN: 107B002V03, Form No: B002; Kotak Life Guardian Benefit, UIN: 107B012V02, Form No: B012; Kotak Accidental Disability Guardian Benefit, UIN: 107B011V02, Form No: B011. This is a non-linked, non-participating endowment plan. This is a saving and protection oriented plan. For more details on risk factors, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
                    <p><b>Kotak Assured Savings Plan</b>UIN: 107N081V04, Form No: N081. This is a savings-cum-protection oriented non-participating endowment assurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                    <p><b>Kotak Assured Income Accelerator</b>UIN No.: 107N089V03, Form No.: N089. This is a non-participating guaranteed income anticipated endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                    <p><b>Kotak Premier Endowment Plan</b>UIN: 107N079V02, Form No.: N079, Kotak Term Benefit Rider UIN: 107B003V03, Form No.: B003, Kotak Accidental Death Benefit Rider UIN: 107B001V03, Form No.: B001, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No.: B002, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form No.: B020, Kotak Life Guardian Benefit Rider UIN: 107B012V02, Form No.: B012, Kotak Accidental Disability Guardian Benefit Rider UIN: 107B011V02, Form No: B011. This is a Savings-cum-Protection oriented Participating Endowment Plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure.</p>
                    <p><b>Kotak Premier Moneyback Plan</b>UIN: 107N083V02, Form No: N083. This is a participating anticipated endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                    <p><b>Kotak Classic Endowment Plan</b>UIN:107N082V02, Form No.: N082. This is a Savings-cum-Protection oriented Participating Endowment Plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                    <p><b>Kotak SmartLife Plan</b>UIN: 107N102V02, Form No: N102. This is a Savings-cum-Protection oriented Participating Endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                    <p><b>Kotak Premier Income Plan</b>UIN: 107N099V02, Form No: N099. This is a participating anticipated endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                    <p><b>Kotak POS Bachat Bima</b>; UIN: 107N117V01, Form No: N117. This is a non-linked, non-participating endowment plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                    <p><b>Kotak Sampoorn Bima Micro-Insurance Plan</b>- UIN: 107N092V02, Form No: N092. This is a non linked non-participating endowment assurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.<sup>@</sup>Guaranteed benefits are applicable if all premiums are paid in full and the policy is in force.</p>
                    <p><b>Kotak Premier Life Plan</b>UIN: 107N096V03, Form No: N096. Kotak Term Benefit Rider - 107B003V03, Form No. B003, Kotak Accidental Death Benefit Rider - 107B001V03, Form No. B001, Kotak Permanent Disability Benefit Rider - 107B002V03, Form No. B002, Kotak Life Guardian Benefit Rider - 107B012V02, Form No. B012, Kotak Accidental Disability Guardian Benefit Rider - 107B011V02, Form B011, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form NO.: B020. This is a non-linked participating whole life plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure.</p>
                    <p><b>Kotak Fortune Maximiser</b>UIN: 107N125V01, Form No: N125. Kotak Term Benefit Rider, UIN: 107B003V03, Form No: B003; Kotak Accidental Death Benefit Rider, UIN: 107B001V03, Form No: B001; Kotak Permanent Disability Benefit Rider, UIN: 107B002V03, Form No: B002; Kotak Life Guardian Benefit, UIN: 107B012V02, Form No: B012; Kotak Accidental Disability Guardian Benefit, UIN: 107B011V02, Form No: B011, Kotak Critical Illness Plus Benefit Rider - 107B020V01, Form No.: B020. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure. * Please note that Bonuses are NOT guaranteed and may be as declared by the Company from time to time. Benefits under this plan are dependent upon the performance of the participating Funds.</p>
                </div>
                <div class="sec41">
                    <p class="fw-bold" style="font-weight:700!important">Section 41</p>
                    <p class="mtb-16" style="margin-bottom:16px!important">Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states:</p>
                    <ul>
                        <li>No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer.</li>
                        <li>Any person making default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.</li>
                    </ul>
                </div>
                <div class="sec41">
                    <p class="fw-bold" style="font-weight:700!important">Section 45</p>
                    <p class="mtb-16" style="margin-bottom:16px!important">Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details:</p><a href="assets/images/uploads/why_kotak/section38_39_45_of_insurance_act_1938.pdf" class="panc">assets/images/uploads/why_kotak/section38_39_45_of_insurance_act_1938.pdf</a>
                </div>
                <div class="sec41">
                    <p class="fw-bold" style="font-weight:700!important;margin-bottom:21px!important">Kotak Mahindra Life Insurance Company Ltd.</p>
                    <div class="roww insurcol">
                        <div class="coll-md-4 br-ins">
                            <p>Reg No. 107</p>
                            <p>CIN : U66030MH2000PLC128503</p>
                        </div>
                        <div class="coll-md-4 br-ins">
                            <p>Regd. Office:</p>
                            <p>8th Floor, Plot # C- 12, G- Block, BKC,</p>
                            <p>Bandra (E), Mumbai - 400051</p>
                        </div>
                        <div class="coll-md-4">
                            <p>Toll Free: 1800 209 8800</p>
                            <p>Website: www.kotaklife.com</p>
                            <p>WhatsApp: 9321003007</p>
                        </div>
                    </div>
                </div>
                <div class="sec41">
                    <p class="fw-bold" style="font-weight:700!important">BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/FRAUDULENT OFFERS</p>
                    <p class="mtb-16" style="margin-bottom:16px!important">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
                    <p>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
                </div>
            </div>
        </div>
    </section><input type="hidden" name="pageNo" id="pageNo" value="0"> <input type="hidden" name="sortType" id="sortType" value="recent"> <input type="hidden" name="pageLimit" id="pageLimit" value="4"> <input type="hidden" name="searchArticle" id="searchArticle" value=""> <input type="hidden" name="pageType" id="pageType" value="topic"> <input type="hidden" name="topicSlug" id="topicSlug" value="savingstax"> <input type="hidden" name="url" id="url" value="<?php echo $this->uri->segment('1') ?>/<?php echo $this->uri->segment('2') ?>">
    <script>
        //lazy load

        document.addEventListener("DOMContentLoaded", function() {
            const imageObserver = new IntersectionObserver((entries, imgObserver) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const lazyImage = entry.target;

                        //console.log("lazy loading ", lazyImage);
                        lazyImage.src = lazyImage.dataset.src;
                    }
                })
            });
            const arr = document.querySelectorAll('img.lzy_img')
            arr.forEach((v) => {
                imageObserver.observe(v);
            })
        });

    </script>
    <script>
        import {
            onCLS,
            onFID,
            onLCP
        } from 'web-vitals';

        function sendToAnalytics(metric) {
            const body = JSON.stringify(metric);
            // Use `navigator.sendBeacon()` if available, falling back to `fetch()`.
            (navigator.sendBeacon && navigator.sendBeacon('/analytics', body)) ||
            fetch('/analytics', {
                body,
                method: 'POST',
                keepalive: true
            });
        }

        onCLS(sendToAnalytics);
        onFID(sendToAnalytics);
        onLCP(sendToAnalytics);



        new PerformanceObserver((entryList) => {
            for (const entry of entryList.getEntries()) {
                const delay = entry.processingStart - entry.startTime;
                console.log('FID candidate:', delay, entry);
            }
        }).observe({
            type: 'first-input',
            buffered: true
        });

    </script>
    <script>
        var cg_json = "",
            cg_json1 = "",
            cg_json2 = "",
            cb_json = "";

        function getSegment() {
            "Term Insurance Protection Plans" == $("#needSegment").val() && ($target_url = "https://www.kotaklife.com/OnlineTermInsurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=homepage", window.open($target_url, "_blank"))
        }

        function close_popup() {
            $(".steps.step01").addClass("selected")
        }

        function openCity(e, t) {
            var n, l, s;
            for (l = document.getElementsByClassName("tabcontent"), n = 0; n < l.length; n++) l[n].style.display = "none";
            for (s = document.getElementsByClassName("tablinks"), n = 0; n < s.length; n++) s[n].className = s[n].className.replace(" active", "");
            document.getElementById(t).style.display = "inline-block", e.currentTarget.className += " active"
        }
        var i, acc = document.getElementsByClassName("collapsible");
        for (i = 0; i < acc.length; i++) acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var e = this.nextElementSibling;
            "block" === e.style.display ? e.style.display = "none" : e.style.display = "block"
        });

        function myFunction() {
            var e = document.getElementById("dots"),
                t = document.getElementById("more"),
                n = document.getElementById("myBtn");
            "none" === e.style.display ? (e.style.display = "inline", n.innerHTML = "Read more", t.style.display = "none") : (e.style.display = "none", n.innerHTML = "Read less", t.style.display = "inline")
        }

        function ChangeUrl(e, t) {
            if (void 0 !== history.pushState) {
                var n = {
                    Title: e,
                    Url: t
                };
                history.pushState(n, n.Title, n.Url)
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
                "name": "Savings Plans",
                "url": "https://www.kotaklife.com/online-plans/savings-plan",
                "category": "Savings Plans",
                "description": "Saving Plans helps you achieve your financial goals along wiht Insurance. The online savings plans by Kotak Life Insurance offers you to save & grow your money with guaranteed returns.",
                "brand": "Kotak Life Insurance"
            }
        },

    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "What are Savings Plans?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A savings plan allows you to make systematic deposits into money-making avenues. Thus, such
                    plans enable you to accumulate a corpus over time that you can utilize
                    for your future financial
                    goals.At the same time,
                    such plans offer the benefit of life coverage,
                    protecting your loved ones
                    against economic hardships in your absence.Endowment policies,
                    ULIPs,
                    and money - back plans
                    are a few examples of such plans.
                    "
                }
            }, {
                "@type": "Question",
                "name": "What are Guaranteed Savings Plans?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A guaranteed savings plan offers the assurance of higher returns. The sum assured is declared upfront. Thus, such plans offer a fail-safe lump sum at the end of the policy tenure.
                    a.Are the returns guaranteed ? Guaranteed savings plans keep their word and deliver on their promise of guaranteed returns.Despite the continued market turmoil and fluctuations,
                    you earn a standard and stable income rate since you are not susceptible to market volatility.This plan provides a safe location to put money
                    for investors who have a low - risk appetite.
                    b.Does guaranteed savings plan have tax benefits ? The premiums paid are eligible
                    for a deduction of up to₹ 1,
                    50,
                    000 under section 80 C of the Income Tax Act,
                    1961 You can also benefit from a tax - free payout because the maturity benefit is exempt from taxation under Section 10(10 D).
                    c.How can I compare and choose the best guaranteed savings plan ? To choose the best guaranteed savings plan,
                    you should look at factors like minimum age criteria,
                    maximum age criteria,
                    policy term period,
                    premium payment methods,
                    yearly premiums,
                    sum assured amount and the additional benefits that are being provided.Once all these factors align with your personal requirements,
                    you will know that it is the ideal plan
                    for you.
                    d.What happens
                    if I discontinue the guaranteed savings plan ? If you choose to discontinue the plan,
                    you will only receive the surrender value of the savings plan.However,
                    this clause will only apply
                    if the policy has been in force
                    for more than three years.
                    "
                }
            }, {
                "@type": "Question",
                "name": "How to determine the perfect savings plans for your needs?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "a. Identify your financial needs
                    Clarity about your immediate and future financial goals is crucial
                    for determining the apt investment plan.You can make a list of objectives like children’ s education,
                    retirements planning etc.After that,
                    chalk out specific time frames
                    for meeting such goals.Match the projected returns of your investment plan with your target funds to decide on the plan to buy.Also,
                    choose the policy tenure accordingly.
                    b.Select the premium payment terms wisely
                    Opt
                    for single premium / limited or regular payment options in keeping with your resources.
                    c.Consider liquidity
                    Choose plans that offer,
                    yearly incomes,
                    regular money - back opportunities,
                    or options to avail of loans to access funds in emergencies
                    d.Pay attention to the fine print
                    Understand all the exclusions,
                    clauses and conditions to be confident about the suitability of the plan.
                    e.Weigh in tax - savings
                    Choose plans that not only help you save tax but also generate tax - exempt income as well.
                    "
                }
            }, {
                "@type": "Question",
                "name": "Can I Save Tax with Savings plans?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You can claim tax deductions under Section 80C of the Income Tax Act, 1961 for the premiums paid towards these plans. Moreover, the maturity benefits, as well as the death benefits, are also tax-exempt, subject to the conditions specified in Section 10(10D).
                    a.Guaranteed income and guaranteed additions lead to capital appreciation in traditional plans.
                    Therefore,
                    you can remain stay stress - free about your investments with a Kotak savings and investment plan "
                }
            }, {
                "@type": "Question",
                "name": "How much money should I save before investing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Aim to spend no more than 50% of your take-home pay on necessities, set aside 15% of your pre-tax income for retirement savings, and reserve 5% of your take-home pay for short-term savings. Build the fund up to three months' worth of costs, then divide your money between investments and a savings account until you have six to eight months’ worth saved up. Your funds should then be invested in things that generate higher income than a bank account for retirement and other goals.15% of your pre-tax income to retirement savings and 5% of your gross income to short-term savings."
                }
            }, {
                "@type": "Question",
                "name": "How to choose the best savings plan?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The three simple methods listed below will help you locate the best online savings and investing programme in India:
                    1. Your goal: Understanding the goal of your investment and defining it in these terms is the first step.
                    What amount are you investing ? What timeframe do you want the returns ? Do you require tax benefits on the money you 've saved?
                    2. List the savings options that best suit your objectives : You can shortlist several saving plans based on the amount of investment and the amount of time you have until you need the money
                    for a goal.One investment should be made with the intention of continuing to save money until you need it again.
                    3. Maximize Your Growth: You have the option of investing in fixed income(debt) or equity plans,
                    depending on the amount of time you have available and your level of risk tolerance.You can only choose from the plans that offer a tax benefit on the amount invested
                    if your goal also includes tax savings.
                    "
                }
            }, {
                "@type": "Question",
                "name": "What is the right way to begin with a long-term saving plan?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The finest long-term investing strategies for making big returns over a lengthy period of time are stocks. A systematic investing technique can be used to make long-term investments in equities or mutual funds (SIP)."
                }
            }, {
                "@type": "Question",
                "name": "Is pairing life insurance and saving plan a good idea?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "When you require periodic payouts to plan and handle specific goals while maintaining life coverage, combining protection and savings is an excellent solution. Money back plans, a type of life insurance policy, provide you with recurring payouts that aid in the planning of your financial objectives."
                }
            }, {
                "@type": "Question",
                "name": "Should I pick a long-term or a short-term savings Investment plan?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "If you want to keep your money secure and are happy with small profits, choose short-term investments. However, you should put money into long-term investment opportunities if you want to make more money."
                }
            }]
        }

    </script>
