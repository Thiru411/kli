<?php 
function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if (isMobile()) {
    // Do something for only mobile users
} else {
    $actual_link1 = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $temp = array();
    $temp = explode("/", $actual_link1);

    if ($temp[3] == "main") {
        redirect(base_url());
    }
    // Do something for only desktop users
}
$actual_link=base_url."/online-plans/online-term-insurance-plans";
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/path/to/dist/css/image-zoom.css" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
<style>
    /* .fancybox__caption{display: none;} */
    .fancybox__caption {
        display: none;
    }-->



    .d--flex {
        display: flex;
    }

    .splash-close img {
        height: 20px;
        opacity: 0.2;
        cursor: pointer;
        transition: 0.6s;
    }

    .splash-close img:hover {
        opacity: unset;
        transition: 0.6s;
    }

    .splash-close {
        width: 30px;
        margin: 0 0 0 auto;
    }

    .splash p {
        margin: 0;
    }

    .splash-content {
        width: 65%;
        font-size: 18px;
        margin: 0 auto;
        background-color: #fff;
        padding: 16px 18px;
        border-radius: 11px;
        margin-top: 201px;
    }

    .overlay-black {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.2);
        z-index: -1;
    }

    #splash {
        position: fixed;
        top: 0;
        z-index: 10;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, .5);
    }

    #splash a {
        color: red
    }

    @media (max-width: 640px) {
        .mt-102 {
            /*margin-top: 45px !important;*/
            top: 0;
        }
    }

    @media screen and (max-width: 768px) {

        /*.splash{display: none;}*/
        .splash {
            display: block;
        }

        .splash-content {
            width: 85%;
            font-size: 15px;
            margin: 0 auto;
            background-color: #fff;
            padding: 16px 18px;
            border-radius: 11px;
            margin-top: 30px;
        }
    }

    @media screen and (min-width: 768px) {
        .splash {
            display: block;
        }
    }

    @media only screen and (max-width: 1024px) {
        section {
            margin-top: 0px;
        }
    }

    /*

.position-relative{position:relative!important;}
.new-know{position:absolute!important;top:335px!important;}


@media screen and (max-width:425px){
.new-know {
    top: -63px!important;
}
}
@media screen and (min-width:428px) and (max-width:1024px){
.new-know {
    top: 240px!important;
}
}
*/



    .get-btn {
        padding: 3px 30px 3px 29px;
        border-radius: 15px;
        background-color: #00387e !important;
        color: #fff !important;
        font-size: 22px;
        font-weight: 100;
        position: absolute;
        bottom: 40px;
        right: 315px;
    }

    .position-relative {
        position: relative !important;
    }
	@media only screen and (max-width: 1024px){.mt-102 {margin-top:102px;}}
@media only screen and (max-width: 426px){.mt-102 {margin-top:0px!important;}}

	 .related-blogs-gsp .likeWrap ul.reportUL {
	 margin: 0 0 40px 0!important;}
	 ul.reportUL_new li{height:307px!important;margin-bottom:35px;}
 @media (max-width: 767px) {
	 ul.reportUL_new li{height:auto!important;}
 }
</style>

<!-- Section Start -->
<div class="term-design">
    <section class="term-design-banner top-161 bg-f2 mt-102 mtt-102">
        <div class="midWrapper">
            <div class="roww flex-wrap-initial">
                <div class="coll-md-7 w-term-55">
                    <h1 class="mob-nowwrap">Term Insurance</h1>
                    <p>Promises are kept when they are planned for. Ensure a good lifestyle for your family by securing them financially with Kotak e-Term Plan.</p>
                    <div class="roww">
                        <div class="coll-md-8 w-mob-ban-100 mr-20">
                            <a href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance" class="want-to-knw banner-knw mb-mob-20">Know More</a>
							
                        </div>
                        <div class="coll-md-4   mr-mob-0 w-mob-ban-100">
                            <a href=base_url."/buy-online-term-insurance?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=security" class="in-buy banner-buy mb-0">Get Quote</a>
                        </div>


                    </div>
                </div>
                <div class="coll-md-5  w-term-45 my-auto">
                    <img alt="Term Insurance" title="Term Insurance" src="assets/images/term-new-banner.svg" class="">
                </div>
            </div>
        </div>

        <!-- <div class="position-relative">
            <img src="assets/images/term-banner.jpeg" class="online-banner hide-mobile">
            <img src="assets/images/term-banner-mobile.jpg" class="hide-desktop">
            <div class="pos-online-ab banner-txt">

                <p class="mb-5">Term Insurance Plans</p>
                <div class="banner-txt-spac mx-775">
                    <h1>Promises are kept when they are planned for.
                        Ensure a good lifestyle for your family by securing them financially with Kotak e-Term Plan.</h1>
                </div>

                <a href="#">Know More</a>

            </div>
        </div> -->

 
    </section>

    <section class="what-ulips">

        <div class="midWrapper">
            <!---->
            <ul class="breadcrumb-ulip">
                <li><a href="">Life Insurance></a></li>
                <li><a href="online-plans">Insurance Plans></a></li>
               <!-- <li class="active"><a href="javascript:void(0)">Term Insurance Plans</li>-->
	<li class="active term-breadcrump">Term Insurance Plans</li>
            </ul>
            <!---->
            <div class="what-ulip-tabs">
                <div class="tab tb but_flex">
                    <a href="<?php echo $actual_link?>#what_is_a_term_insurance_plan" class="tablinks btn-what but s">What is a Term Insurance Plan? </a>
					<a href="<?php echo $actual_link?>#who_should_buy_a_term_insurance_policy" class="tablinks but btn-8 s">Who Should Buy a Term Insurance Policy? </a>
					<a href="<?php echo $actual_link?>#why_should_you_buy_term_insurance_plan" class="btn-why tablinks but s">Why Should You Buy Term Insurance Plan? </a>
                   


                    <button class="tablinks btn-inv more-clk">More <i class="fa fa-angle-down" aria-hidden="true"></i></button>



                    <ul class="hidden-links d-none">
                        <!--<li><a cust-href="#term-insurance-benefits" class="btn-feat hide-desktop s">What are the features of Term Plan? </a></li>
                        <li><a cust-href="#term-insurance-benefits" class="btn-why s">Why Should You Buy Term Insurance Plan? </a></li>
                        <li><a cust-href="#term-insurance-types" class="btn-eterm s">Kotak e-Term Plan</a></li>
                        <li><a cust-href="#how-much-cover" class="btn-6 s">Difference between Term Insurance and Life Insurance </a></li>
                        <li><a cust-href="#buy-term-insurance-online" class="btn-7 s">Types of Term Insurance Plans </a></li>
                        <li><a cust-href="#why-do-need-term-insurance" class="btn-8 s">Who Should Buy a Term Insurance Policy? </a></li>
                        <li><a cust-href="#how-to-choose-best-term" class="btn-9 s">How to Choose the Best Term Insurance Plan? </a></li>
                        <li><a cust-href="#why-choose-out-top-selling" class="btn-10 s">How to Buy Term Insurance Plan Online? </a></li>
                        <li><a cust-href="#term-insurance-reviews" class="btn-11 s">How Much Term Insurance Plan Cover Do You Need? </a></li>
                        <li><a cust-href="#term-insurance-reviews" class="btn-12 s">What Policy Period should you opt for? </a></li>
                        <li><a cust-href="#how-much-should-term-insurance-policy s" class="btn-13"> Term & Conditions</a></li>-->
						<li><a href="<?php echo $actual_link?>#how_to_choose_the_best_term_insurance_plan" class="btn-9 s">How to Choose the Best Term Insurance Plan? </a></li>
					<li> <a href="<?php echo $actual_link?>#benefits_of_term_insurance" class="btn-bene">Benefits of Term Insurance</a></li>
                    <li><a href="<?php echo $actual_link?>#what_are_the_features_of_term_plan"  class="btn-feat hide-mobile">What are the features of Term Plan? </a></li>
						<li><a cust-href="#term-insurance-benefits" class="btn-feat hide-desktop s">What are the features of Term Plan? </a></li>
						 <li><a href="<?php echo $actual_link?>#difference_between_term_insurance_and_life_insurance" class="btn-6 s">Difference between Term Insurance and Life Insurance </a></li>
						<!--<li><a href="<?php echo $actual_link?>#why_should_you_buy_term_insurance_plan" class="btn-why s">Why Should You Buy Term Insurance Plan? </a></li>-->
                        <li><a href="<?php echo $actual_link?>#kotak_e-term_plan" class="btn-eterm s">Kotak e-Term Plan</a></li>
                       
                        <li><a href="<?php echo $actual_link?>#types_of_term_insurance_plans" class="btn-7 s">Types of Term Insurance Plans </a></li>
                       <!-- <li><a href="<?php echo $actual_link?>#who_should_buy_a_term_insurance_policy" class="btn-8 s">Who Should Buy a Term Insurance Policy? </a></li>-->
                       <!-- <li><a href="<?php echo $actual_link?>#how_to_choose_the_best_term_insurance_plan" class="btn-9 s">How to Choose the Best Term Insurance Plan? </a></li>-->
                        <li><a href="<?php echo $actual_link?>#how_to_buy_term_insurance_plan_online" class="btn-10 s">How to Buy Term Insurance Plan Online? </a></li>
                        <li><a href="<?php echo $actual_link?>#how_much_term_insurance_plan_cover_do_you_need" class="btn-11 s">How Much Term Insurance Plan Cover Do You Need? </a></li>
                        <li><a href="<?php echo $actual_link?>#what_policy_period_should_you_opt_for" class="btn-12 s">What Policy Period should you opt for? </a></li>
                        <li><a href="<?php echo $actual_link?>#term_insurance_faqs" > Term Insurance FAQs</a></li>
						<!--<li><a href="<?php echo $actual_link?>#term_insurance_faqs" class="btn-13"> Term & Conditions</a></li>-->

                    </ul>

                </div>

                <div id="" class="what" id="what_is_a_term_insurance_plan">
                    <div class="roww term-spacg m-0 what-spac bg-f2">
                        <div class="coll-md-5 align-self-center text-center">
                            <img alt="Term Insurance Plans" title="Term Insurance Plans" src="assets/images/what-term-img-term.svg" class="term-plan-mobile">
                        </div>
                        <div class="coll-md-7">
                            <h2 class="mb-35 term-mob-spac term-tags">What is a Term Insurance Plan? </h2>
                                <p class="mb-20 mx-603">
                                    Term insurance is a pure life insurance product which provides financial coverage to the policyholder and their nominees in exchange for a specified premium amount. In case of an unfortunate demise of the policyholder during this timeframe, the insurer provides a guaranteed payout to the nominee to secure their lifestyle and manage their expenses.
                                </p>

                                <p class="mx-603">
                                    When you buyterm insurance, you can be assured that your family and dependents will be financially secure in your absence. This helps your family fulfil their future needs like higher education, marriage, buying a house etc
                                </p>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </section>
	<section class="who-buy who-buy-chg" id="who_should_buy_a_term_insurance_policy">
    <div class="midWrapper">
        <h2 class="mb-35 mb-mob-20 term-tags">Who Should Buy a Term Insurance Policy? </h2>
        <div class="roww mb-mob-25">
            <div class="coll-md-7">
                <p class="mx-621">Any individual who has financial dependents or wants to leave their family a legacy should avail a term insurance policy. This would generally include parents, single women, or men that have senior parents, professionals with debts or loans, persons that are nearing retirement, etc., can buy online term insurance. The best term plan benefit is that when you buy term insurance plans, you also get tax benefits under <a href=base_url."/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction" class="sec-anc"> Section 80C </a>and <a href=base_url."/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know" class="sec-anc">Section 10 (10D)</a> of the Income Tax Act, 1961, thus reducing your taxable income. Here is a detailed version of who should buy term plan:</p>
            </div>
            <div class="coll-md-5 align-self-center">
                <img alt="Term Insurance Policy" title="Term Insurance Policy" src="assets/images/who-buy-img.svg" class="mt-neg-7">
            </div>
        </div>

        <h3>Parents </h3>
        <p>As parents, you have the dependency of your spouse, children, and your own parents. With the help of the sum assured payout, you can ensure the future of your children and also provide aid to your parents. You can be worry-free about the financial condition of your loved ones after getting a term life insurance plan.</p>

        <h3>Professionals </h3>
        <p>You may have availed a certain education loan to go abroad and study. But if something were to happen to you, your parents shouldn’t bear the brunt of the debt. The sum assured of the term plan can be used to clear off your study loan.</p>

        <h3>Retirees </h3>
        <p>If you are going to retire soon and have dependents or debts, term insurance is the perfect way to safeguard your interests. The death benefit would be enough to pay off any debts and also provide financial assistance to the dependent members.</p>

        <h3>Taxpayers </h3>
        <p>Individuals who are looking for some tax-savings that give beneficial returns can opt for term insurance. Investing in a term plan is the perfect way to get tax benefits and earn a life cover.</p>
    </div>

</section>
<section class="why-buy btn-whys" id="why_should_you_buy_term_insurance_plan">
    <div class="midWrapper">
        <div class="roww">
            <div class="coll-md-6 align-self-center mb-mob-34">
                <!-- <img src="assets/images/why-buy-img.svg" class=""> -->
                <img alt="Buy Term Insurance Plans" title="Buy Term Insurance Plans" src="assets/images/whyy-imgg.svg" class="">
            </div>
            <div class="coll-md-6">
                <h2 class="term-tags mx-371">Why Should You Buy Term Insurance Plan? </h2>
                <div class="">
                    <p>Life is uncertain and cannot be predicted at any point. You never know when an unfortunate incidence may occur and leave your loved ones without any financial security. Such a situation can result in your family’s dependency on a close relative or may lead your spouse and children to hunt for new jobs to make ends meet. In order to avoid such a situation, a term insurance policy is a crucial element to secure the future of your loved ones.
                    </p>
                    <p class="moretext">
                        For example: You are the only earning member of the family with a monthly income of Rs. 50,000. Your family consists of your spouse, who is a homemaker, and two children, of which one is completing their primary education and the other will soon begin college. Your family is living a comfortable life with all their basic necessities being met without any financial issues.
                    </p>

                    <p class="moretext">Now, if you were to pass away, your family would still require Rs.35, 000-40,000 to manage their expenses. But due to a lack of financial backup, they would have to depend on someone else. In this case, if you had bought a term insurance policy, your family would have been self-sufficient, and your children could complete their education without any worries.</p>
                    <p class="moretext">Term plans give out a lump sum amount to safeguard your loved ones and take care of all their needs. May it be the education of your children or paying off any loans, the death benefit amount assists you to take care of such payments.</p>
                </div>
                <button class="moreless-button">Read more</button>
                <!-- <p class="mx-494">Life is uncertain and cannot be predicted at any point. You never know when an unfortunate incidence may occur and leave your loved ones without any financial security. Such a situation can result in your family’s dependency on a close relative or may lead <span id="dots"></span><span id="more">your spouse and children to hunt for new jobs to make ends meet. In order to avoid such situation, a term insurance policy is a crucial element to secure the future of your loved ones. -->
                <!-- For example: You are the only earning member of the family with a monthly income of Rs. 50,000. Your family consists of your spouse, who is a homemaker, and two children, of which one is completing their primary education and the other will soon begin college. Your family is living a comfortable life with all their basic necessities being met without any financial issues. -->
                <!-- Now, if you were to pass away, your family would still require Rs.35, 000-40,000 to manage their expenses. But due to a lack of financial backup, they would have to depend on someone else. In this case, if you had bought a term insurance policy, your family would have been self-sufficient, and your children could complete their education without any worries. -->
                <!-- Term plans give out a lump sum amount to safeguard your loved ones and take care of all their needs. May it be the education of your children or paying off any loans, the death benefit amount assists you to take care of such payments. </span></p> -->
                <!-- <button onclick="myFunction()" id="myBtn">Read more</button> -->
            </div>
        </div>
    </div>
</section>

<section class="how-choose bg-f2"  id="how_to_choose_the_best_term_insurance_plan">
    <div class="midWrapper">
        <h2 class="mb-20 term-tags">How to Choose the Best Term Insurance Plan? </h2>
        <p class="fst-18 mx-1021 mb-32">There are several factors that you need to check and compare before opting for a term insurance policy from a particular insurer. Here are some that you need to consider before buying a policy:</p>

        <div class="roww">
            <div class="coll-md-6">
                <div class="type-card mr-16">
                    <h3>Claim Settlement Ratio </h3>
                    <p>Claim Settlement Ratio tells you how many claims have been settled from the number of claims filed for that particular year.
                    </p>
                </div>
            </div>
            <div class="coll-md-6">
                <div class="type-card">
                    <h3> Solvency Ratio </h3>
                    <p>Solvency ratio* shows if your insurer will be financially able to settle your claim if there were a requirement. The IRDAI (Insurance Regulatory and Development Authority of India) demands all insurance providers have a solvency ratio of 1.5.</p>

                </div>
            </div>
            <div class="coll-md-6">
                <div class="type-card mr-16">
                    <h3>Rider Benefits </h3>
                    <p>It is important that the insurer is providing you with rider benefits. Insurance riders like critical illness, accidental death, and permanent disability, among others, should be available to be added to your term life insurance plan.</p>
                </div>
            </div>
            <div class="coll-md-6">
                <div class="type-card">
                    <h3>Product Details </h3>
                    <p>While buying a product, you need to check if the features and benefits of the product complement your requirements. You should always go through the terms and conditions, benefits, etc., of the policy from various insurers to find the best term insurance plan for you.</p>
                </div>
            </div>
        </div>

    </div>
</section>



    <section class="benefits bene term-bene position-relative" id="benefits_of_term_insurance">
        <div class="midWrapper">
            <h2 class="mb-35 mb-mob-34 term-tags">Benefits of Term Insurance</h2>
                <!--slick counter html v-->
               <span class="pagingInfo d-flex playfair_font justify-content-center"></span>
                <!--slick counter html ^-->
                <div class="bene-slick term-bene-slick">
                    <div>
                        <div class="roww bene-para">
                            <div class="coll-md-1">
                                <img alt="Term Insurance Benefits:high coverage at Affordable Premiums" title="Term Insurance Benefits:high coverage" src="assets/images/bene-1.svg" class="">
                            </div>
                            <div class="coll-md-11">
                                <h3>High Coverage at Affordable Premiums
            </h3>
            <p>Term insurance is crucial for your financial portfolio as it protects your family with a death benefit at very affordable premiums. </p>
        </div>
</div>
</div>

<div>
    <div class="roww bene-para">
        <div class="coll-md-1">
            <img alt="Term Insurance Benefits:Financial security" title="Term Insurance Benefits:Financial security" src="assets/images/benee-2.svg" class="">
        </div>
        <div class="coll-md-11">
            <h3>Financial Security </h3>
                <p>Term insurance offers death benefit as a lump sum amount to the family of the policyholder in case of their untimely demise. They can use this amount to secure their child’s future or pay off any loans that might act as liabilities in the future. </p>
        </div>
    </div>
</div>

<div>
    <div class="roww bene-para">
        <div class="coll-md-1">
            <img alt="Term Insurance Benefits:Long term insurance coverage" title="Term Insurance Benefits:Long term insurance coverage" src="assets/images/bene-2.svg" class="">
        </div>
        <div class="coll-md-11">
            <h3>Long-Term Insurance Coverage </h3>
                <p>Term insurance offers long term protection that starts from 5 years and extends till 75 years. It is recommended that you opt for a term insurance at an early age since the premium amount is lower at an early age, and offers extended protection.</p>
        </div>
    </div>
</div>

<div>
    <div class="roww bene-para">
        <div class="coll-md-1">
            <img alt="Term Insurance Benefits:Tax Saving" title="Term Insurance Benefits:Tax Saving" src="assets/images/bene-3.svg" class="">
        </div>
        <div class="coll-md-11">
            <h3> Tax saving </h3>
                <p>All term insurance premiums are eligible for tax exemptions under section 80C and the death benefit is eligible under Section 10 (10D). </p>
        </div>
    </div>
</div>

<div>
    <div class="roww bene-para">
        <div class="coll-md-1">
            <!-- <img src="assets/images/bene-new-5.png" class=""> -->
            <img alt="Term Insurance Benefits:Cover for Major Illness" title="Term Insurance Benefits:Cover for Major Illness" src="assets/images/cover-img.svg" class="">
        </div>
        <div class="coll-md-11">
            <h3>Cover for Major Illness </h3>
                <p>Critical illnesses like cancer, brain tumor, blindness and loss of limbs can be very emotionally and financially difficult for both the individual and their family members. With Kotak Critical Illness Plus Benefit Rider, you are eligible for a lump sum pay-out if you are diagnosed with any critical illness. </p>
        </div>
    </div>
</div>

<div>
    <div class="roww bene-para">
        <div class="coll-md-1">
            <img alt="Term Insurance Benefits:Protection from Disability" title="Term Insurance Benefits:Protection from Disability" src="assets/images/bene-5.svg" class="">
        </div>
        <div class="coll-md-11">
            <h3>Protection from Disability </h3>
                <p>Disability of any form might cause loss of income for an extended period of time. In such cases, it becomes difficult to manage financial responsibilities. Therefore, by opting for Kotak e-Term Plan Life Secure option, the nominee can keep the policy in force by waiving off future premiums for the insured in case of such a scenario. </p>
        </div>
    </div>
</div>

<div>
    <div class="roww bene-para">
        <div class="coll-md-1">
            <img alt="Term Insurance Benefits:Flexibility in Paying Premiums" title="Term Insurance Benefits:Flexibility in Paying Premiums" src="assets/images/bene-6.svg" class="">
        </div>
        <div class="coll-md-11">
            <h3>Flexibility in Paying Premiums </h3>
                <p>You can choose premium payment options based on your requirements and financial commitments. You can go for monthly and yearly premiums. If you have a bigger corpus for investment you can go for limited pay premium option. </p>
        </div>
    </div>
</div>

<div>

    <div class="roww bene-para mb-0">
        <div class="coll-md-1">
            <img alt="Term Insurance Benefits:Secure Yourself against Accidental Death" title="Term Insurance Benefits:Secure Yourself against Accidental Death" src="assets/images/bene-7.svg" class="">
        </div>
        <div class="coll-md-11">
            <h3>Secure Yourself against Accidental Death </h3>
                <p>Accidents have become one of the major reasons for human deaths over the last few years. It is better to opt for protection against accidental death so your family is secured financially even after you. You can opt for Kotak e-Term Plan with Life Plus Option that offers both the sum assured and an additional death benefit in case of accidents. </p>
        </div>
    </div>
</div>

</div>


</div>

</section>





<section class="ensure term-insure">
    <div class="midWrapper">
        <div class="roww">
            <div class="coll-md-10 move align-self-center">
                <h2 class="term-tags">Ensure Financial Security For your Family With Term Plan </h2>
            </div>
            <div class="coll-md-2 ml-auto mr-auto mt-auto mb-auto ml-mob-initial w-mob-150">
                <a href=base_url."/buy-online-term-insurance?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=security" class="knw-btn-terms en-btn mt-12" rel="follow">Buy Now</a>
            </div>
        </div>

    </div>
</section>

<section class="features feat" id="what_are_the_features_of_term_plan">
    <div class="midWrapper">

        <div class="roww bor-fet-mob">
            <div class="coll-md-6 align-self-center">
                <div class="tab-detail mb-0 text-main tab-align">
                    <h2 class="mb-29 term-tags">What are the features of Term plan?</h2>
                    <p class="pl-0 mx-444">Term Plan comes with a good set of advantages and features. In case you are looking forward to buying a term plan, these features can help you make a decision.</p>

                </div>
            </div>
            <div class="coll-md-6 mt-mob-25 mob-full-width pr-80">
                <div class="position-relative">
                    <!--<img src="assets/images/kotak-term-plan.jpg" class="prod-img1">
					
                   <a data-fancybox="" href="https://www.youtube.com/embed/cq1k0nYDe3Q" class="js-video-btn video-circle video-circle--lg">
                        <div class="video-circle__button play-btn">
                            <img src="assets/images/play-ulip.png" class="prod-img1">
                        </div>
                    </a>-->
					<iframe alt="What are the features of Term plan?" title="What are the features of Term plan?" width="100%" height="385" src="https://www.youtube.com/embed/cq1k0nYDe3Q" title="Basics of Term Insurance for Beginners | Insurance Fundamentals" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					
                </div>

            </div>

        </div>

    </div>
</section>

<!-- <section class="invest_upis inv">
        <div class="midWrapper">
            <div class="tab-detail mb-0 tab-align">
                <h4>Why should you invest in Term Plan?</h4>
                <p class="mb-0 pl-0">A term insurance plan is for everybody, especially those with financial dependents. Term insurance plans can be purchased by individuals across segments who derive one or more of the fundamental benefits of term insurance plans, namely, protection, tax saving, and affordable premiums.</p>
                <div class="text-center mt-30">
                    <a href="#" class="invest-btn">Calculate Premium</a>

                </div>
            </div>
        </div>
    </section> -->



<section class="e-invest bg-f2 btn-eterms bg-mob-white"  id="kotak_e-term_plan">
    <div class="midWrapper">

        <div class="d-flex">
            <div>
                <h2 class="term-tags">Kotak e-Term Plan</h2>
            </div>
            <div class="ml-auto hide-mobile mll-auto">
                <a href=<?=base_url?>/assets/images/uploads/insurance-plans/Kotak_e-Term_Plan_Brochure.pdf' download="Brochure"><button class="broch-btn want-to-btn"> <i class="fa fa-download mrr-5" aria-hidden="true"></i>Download Brochure</button></a>
            </div>
        </div>

        <div class="roww">
            <div class="coll-md-6">
                <div class="">
                    <p class="mt-25">Features</p>
                    <div class="roww m-0">
                        <div class="coll-md-6 w-50 w-mob-100">

                            <ul>
                                <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Nominal Cost</span></li>
                                <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Multiple Plan Options</span></li>
                                <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Flexible Payouts</span></li>
                            </ul>

                        </div>
                        <div class="coll-md-6 w-50 w-mob-100">
                            <ul>
                                <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Critical Illness Riders </span></li>
                                <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Savings</span></li>
                                <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Long Term Coverage</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class="text-align-end hide-desktop mt-mob-25">
                        <a href=<?=base_url?>/assets/images/uploads/insurance-plans/Kotak_e-Term_Plan_Brochure_-_Online_-_20th_Jan_2022.pdf' download="Brochure"><button class="broch-btn want-to-btn"> <i class="fa fa-download mrr-5" aria-hidden="true"></i>Download Brochure</button></a>
                    </div>


                    <div class="roww roww-mob-block mt-20 want-mob no-gutters">
                        <div class="coll-md-6">
						<div class="mx-240">
                            <a href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance" class="want-to-knw e-want e-want-term">Want to Know More?</a>
</div>                       
					   </div>
                        <div class="coll-md-6 ml-mob-auto">
                            <a href=" https://www.kotaklife.com/buy-online-term-insurance?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=card" class="in-buy wnt-buy">Get Quote</a>
                        </div>
                    </div>





                </div>
            </div>
            <div class="coll-md-6 align-self-center hide-mobile">
                <img alt="Kotak e-term Insurance" title="Kotak e-term Insurance" src="assets/images/ee-term-new.svg" class="">
            </div>
        </div>



    </div>


</section>

<section class="difference-bwn">




    <!--modal ^-->
    <div class="midWrapper" id="difference_between_term_insurance_and_life_insurance">
        <div class="d-flex">
            <div>
                <h2 class="term-tags"> Difference between Term Insurance and Life Insurance</h2>
            </div>
            <div class="ml-auto mll-auto">
                <!-- <button type="button" class="inf">Infographic View</button> -->
                <!---->

                <!-- <button id="modal_btn" class="modalbtn inf hide-mobile">Infographic View</button> -->
                <!-- <a id="show-fancybox" class="modalbtn inf hide-mobile" href="assets/images/termm.png">Infographic View</a>  -->

                <a href="assets/images/termm.png" data-alt="Difference between term insurance and life insurance" data-title="Term insurance and Life insurance" class="modalbtn inf hide-mobile inf-dif inf-diff" data-fancybox="gallery" data-caption="Optional caption">
                    Infographic View
                </a>



                <!-- <a id="show-fancybox" class="modalbtn inf hide-mobile" href="assets/images/kotak-term-plan.jpg">Infographic View</a> -->
                <!-- <a id="show-fancybox" class="modalbtn inf hide-mobile" href="assets/images/info-img.svg">Infographic View</a>  -->
                <!-- <a id="show-fancybox" class="modalbtn inf hide-mobile" href="assets/images/how-much-img.svg">Infographic View</a>  -->
                <!-- Creating the container for the modal -->
                <!-- <div id="modal" class="modal">
                        <div class="modalcontent">
                         
                            <span id="close_btn" class="closebtn">x</span>
                            <img src="assets/images/info-img.png" class="">
       
                        </div>
                    </div> -->


                <!---->
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
                    <td>The tenure of a term insurance ranges from 5-30 years.
                        Kotak e-Term Plan covers for a maximum of 57 years.</td>
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

<section class="term-types"  id="types_of_term_insurance_plans">
    <div class="midWrapper">
        <h2 class="term-tags">Types of Term Insurance Plans</h2>
        <p class="fst-18 mtb-20">There are four types of term insurance plan options available while opting for a pure life cover policy:</p>
        <div class="roww">
            <div class="coll-md-6">
                <div class="type-card mr-16">
                    <h3>Basic Term Insurance Policy </h3>
                    <p>The basic term policy provides you with a pure life cover wherein the beneficiary will get the death benefit in the event of your untimely death. You do not get any maturity benefits if you survive the policy term.</p>
                </div>
            </div>
            <div class="coll-md-6">
                <div class="type-card">
                    <h3> Increasing Term Insurance Plan </h3>
                    <p>Increasing term insurance is a plan where the sum assured amount keeps on growing as the years go on. The death benefit may have a maximum cap on the amount to which the sum assured can increase. Such a policy also has no maturity benefit and grants you with a life cover. </p>
                </div>
            </div>
            <div class="coll-md-6">
                <div class="type-card mr-16">
                    <h3>Decreasing Term Insurance Plan </h3>
                    <p>In decreasing term plan, the amount of death benefit keeps on decreasing as the policy term comes closer to expiry. The premiums of such a plan are lower as such a policy is bought to cover certain debts or loans.</p>
                </div>
            </div>
            <div class="coll-md-6">
                <div class="type-card">
                    <h3>Term Policy with Return of Premium (TROP) </h3>
                    <p>In return of premium plan, the premiums paid throughout the policy term are refunded to you after the plan expires. The policy gives you a life cover and also returns all of your premiums upon term survival as a maturity benefit.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="how-buy position-relative"  id="how_to_buy_term_insurance_plan_online">
    <div class="midWrapper">

        <h2 class="mb-20 term-tags">How to Buy Term Insurance Plan Online? </h2>
        <p class="fst-18 mx-1021 mb-35">There are several factors that you need to check and compare before opting for a term insurance policy from a particular insurer. Here are some that you need to consider before buying a policy:</p>
        <!--slick counter html v-->
       <span class="pagingInfo_How d-flex playfair_font justify-content-center"></span> 
        <!--slick counter html ^-->

        <div class="how-slick">
            <div>
                <div class="roww">
                    <div class="coll-md-1 text-center">
                        <p class="mb-10">Step</p>
                        <p class="fst-18 steps-number">1</p>

                    </div>
                    <div class="coll-md-11 mt-mob-24">
                        <h3>Estimate the Premium </h3>
                        <p>You can visit the term insurance calculator page to understand the premium amount that you can pay on a regular basis. This will also allow you to calculate the requisite sum assured against the premium to be paid.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="roww">
                    <div class="coll-md-1 text-center">
                        <p class="mb-10">Step</p>
                        <p class="fst-18 steps-number">2</p>

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
                        <p class="fst-18 steps-number">3</p>

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
                        <p class="fst-18 steps-number">4</p>

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
                        <p class="fst-18 steps-number">5</p>

                    </div>
                    <div class="coll-md-11 mt-mob-24">
                        <h3>Make Payment </h3>
                        <p>After you have selected the payment frequency, you will be able to see the premium you would need to pay regularly. Proceed to the final page and make the payment and submit the documents that are required by the insurer.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-mob-125">
            <a href=base_url."/buy-online-term-insurance?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=estimate" class="estimate-btn">Estimate the Premium </a>
        </div>

    </div>
</section>

<section class="how-much bg-f2"  id="how_much_term_insurance_plan_cover_do_you_need">

    <div class="midWrapper">
        <h2 class="mb-20 term-tags">How Much Term Insurance Plan Cover Do You Need? </h2>
        <div class="roww">
            <div class="coll-md-7 mb-mob-30 w-mob-100">
                <p class="mx-632 fst-18">You can calculate the amount of coverage you require with the concept of Human Life Value (HLV). HLV calculates the economic loss your family will suffer in case of an unfortunate incident. It considers certain aspects like your current age and proposed retirement age, present total savings, monthly expenses, future expenditure like buying a home, higher education for your children, etc., and debts like home loans, etc. Such a concept is beneficial in determining the life insurance coverage that would be needed to ensure your family’s financial security in your absence. You can also use the insurance coverage calculator by entering your details and proceeding to estimate the sum assured for your policy.</p>
            </div>
            <div class="coll-md-5 align-self-center text-center w-mob-100">
                <img alt="Term insurance cover" title="Term insurance cover" src="assets/images/how-much-img.svg" class="mt-neg-7">
            </div>
        </div>
    </div>
</section>


















  <!--Related Articles-->
        <section class="related-blogs-gsp" id="related_blogs">
        <article class="likeWrap ">
            <div class="midWrapper pb-0 pt-0">
      <?php //$eventGA  =   'event '.$moduleName.' most';
        //$labelGA  =   'read more|glossary';?> 
       <h2 class="mb-37 term-tags mb-0">Term Insurance Related Blogs</h2>
      <ul class="mostVisited">
        <li></li>
        <li></li>
      </ul>	    
      <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div"></ul>
       <?php  $eventGA  =   'event '.$moduleName.' load'; $labelGA  =   'load more'; ?>
      <a href="javascript:;" class="link" id="load-more-articles" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Load More</a>
      <div class="noRecord"></div>
      <div class="innerLoader">
        <img src="assets/images/loader.gif" alt="Kotak Loader" />
      </div>
    </div>
	 
		  <!--<?php if($topicInfo->title=="Savings & Tax "){?>
		  <a href=base_url."/OnlineTermInsurance/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Saving_and_Tax" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Save Tax Now</a>
		  <?php } ?>
		  
		  <?php if($topicInfo->title=="About Life Insurance"){?>
		  <a href=base_url."/OnlineTermInsurance/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=About_Life_Insurance" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event about life insurance', 'category': 'new customers', 'action': 'about life insurance', 'label': 'about life insurance'});">Buy Life Insurance Now</a>
		  <?php } ?>
	 
		  <?php if($topicInfo->title=="Family"){?>
		  <a href=base_url."/OnlineTermInsurance/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Family" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event family insurance plans', 'category': 'new customers', 'action': 'family', 'label': 'view insurance plans'});">View Insurance Plans</a>
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Wealth Creation"){?>
		  <?php } ?>
		  
		  <?php if($topicInfo->title=="Protection"){?>
		  <a href=base_url."/OnlineTermInsurance/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Protection" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">Buy Term Plan Now</a>
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Retirement"){?>
		  <a href=base_url."/insurance-plans/retirement-plans/kotak-lifetime-income-plan-online??utm_source=NPSORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Retirement" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event retirement', 'category': 'new customers', 'action': 'retirement', 'label': 'retirement'});">View Plans</a>
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Health Insurance"){?>
		  <a href=base_url."/healthshield/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Health_Insurance_Health_Shield_Page" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Buy Health Insurance Now</a>
          <?php } ?>-->
	 
        </article>
    </section>
<!--Related Articles-->















<section class="what-policy-period"  id="what_policy_period_should_you_opt_for">

    <div class="midWrapper">
        <h2 class="mb-20 term-tags">What Policy Period should you opt for? </h2>
        <p class="fst-18 mx-1030 mb-27">A term insurance policy tenure starts from 5 years to a maximum of 40-45 years to cover you from unforeseen incidents. Some insurers also provide a life cover that is valid until you reach 99 years of age if you have dependents that would need financial aid in your absence. While deciding your policy period, you should consider the number of dependents you have, any debts or loans present in your name, etc. After this, you should consider how many years it would take for your dependents to become self-sufficient and the repayment tenure of your debts. You will be able to come up with the policy term you should choose to secure your loved ones.</p>
        <h2 class="mb-20 term-tags" id="term_insurance_faqs">Term Insurance Frequently Asked Questions</h2>
        <!---->
        <div class="accordion-div accordion-btns mt-mob-15">




            <div class="bor">
                <div class="accordion bor-top-zero" role="heading" aria-level="3">
                    <span>1</span>
                    <h3>What is a term insurance plan? What are its benefits</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align">
                    <p>
                        Term insurance Plan is a policy which provides pure protection to your family in the event of your death. It is the most basic type of life insurance plan that is available in the market. You are able to avail higher life coverage at an affordable premium and also add riders to maximize your coverage. Read more about <a href=base_url."/insurance-guide/protection/what-is-term-insurance" class="sec-anc">term life insurance plans and its features.</a>
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

                        <p>A major advantage of investing in the best term insurance plan is the tax benefit offered by the Income Tax Act, 1961. The ITA offers numerous exemptions and deductions, thus reducing taxpayers’ liability where the insurance premiums can be <a href=base_url."/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction" class="sec-anc"> claimed under Sections 80C </a> and the death benefit can be availed as tax-free <a href=base_url."/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know" class="sec-anc">under Section 10 (10D).</a> Read more to know about term <a href=base_url."/insurance-guide/savingstax/tax-benefit-of-investing-in-term-plan" class="sec-anc"> insurance related income tax deductions </a> you can claim.</p>

                    </div>
                </div>
            </div>

            <div class="bor">
                <div class="accordion">
                    <span>3</span>
                    <h3>How does term insurance policy work?</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align">
                    <div class="">
                        <p>
                            Term insurance operates on principles of pure insurance. While being simple and low-cost, it is a very effectual mode of insurance wherein the assured person is covered against the risks of mortality. The premium depends upon the sum assured and the age of the assured person. The younger the person, the lower the premium because the insurance company perceives the risk of mortality, i.e. death of a young and healthy person to be very less. Know more about <a href=base_url."/insurance-guide/protection/how-does-term-life-insurance-work-learn-the-benefits" class="sec-anc">how a term life insurance plan works.</a>
                        </p>
                    </div>
                </div>

            </div>

            <div class="bor">
                <div class="accordion">
                    <span>4</span>
                    <h3>Is buying term life insurance plan worth it?</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align">
                    <div class="">
                        <p>Yes, a term policy is worth it as the plan provides you with a life cover at an affordable premium when compared to other policies. You are also able to add rider benefits to maximize your coverage and secure yourself from certain unfortunate conditions. Know more about the <a href=base_url."/insurance-guide/protection/is-it-worth-investing-in-insurance" class="sec-anc">pros of buying term life insurance online.</a></p>

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
                        <p>The premium of a term insurance plan depends on various factors like age, gender, health reports, past medical history, and lifestyle habits, among others. After you add riders to your plan, select the sum assured, choose the payment frequency, and the tenure of your policy, you will get the final premium payable. Know much to pay by calculating the premium for term life insurance online. </p>

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
                        <p>You can pay your term insurance plan premium online modes via net banking, debit/credit card, among others. Read more about <a href=base_url."/how-do-i/pay-my-premium" class="sec-anc">online premium payment options.</a></p>

                    </div>
                </div>

            </div>

            <div class="bor">
                <div class="accordion">
                    <span>7</span>
                    <h3>How much should be the ideal coverage for term life insurance plan?</h3>
                </div>
                <div class="panel tab-detail mb-0 tab-align">
                    <div class="">
                        <p> The amount of coverage varies from person to person and depends on how many dependents you have. Before you assign a vague number to your sum assured,<a href=base_url."/insurance-guide/about-life-insurance/what-is-human-life-value-and-a-human-life-value-calculator" class="sec-anc">know how much coverage you need.</a> </p>

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
                        <p> If you are a smoker, then you are not only spending money on cigarettes, but you are also increasing your chances of an early demise. One thing that insurance providers know is that smoking habits can have different effects on different people. Therefore, the term insurance plan for smokers comes in three different categories. Know more about the <a href=base_url."/insurance-guide/about-life-insurance/how-do-term-insurance-plans-differ-for-smokers" class="sec-anc">term plan for smokers.</a></p>

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
                        <p>While opting for a term plan, it is important to know the kind of deaths that don’t get covered in your plan in order to ensure that your family’s insurance claim is not rejected. Some of them are suicide, death during childbirth, death due to certain dangerous activity, etc. Get detailed information about the <a href=base_url."/insurance-guide/about-life-insurance/different-kind-of-deaths-that-are-not-covered-in-a-term-insurance-plan" class="sec-anc">deaths not covered under term life insurance plan. </a></p>

                    </div>
                </div>

            </div>
            <div class="span-mar">
                <div class="bor">
                    <div class="accordion">
                        <span>10</span>
                        <h3> Does term insurance plan pay for suicidal death in India?</h3>
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
                        <h3>Between term insurance and traditional life insurance, which plan is beneficial? </h3>  
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <p>Traditional life insurances provide you with a maturity benefit along with a life cover whereas term insurance plans give you pure life cover at affordable premiums. To compare the two plans better and choose between them, read about <a href=base_url."/insurance-guide/about-life-insurance/what-should-one-consider-buying-term-insurance-or-traditional-life-insuranc" class="sec-anc">‘Term Insurance v/s Traditional Life Insurance’. </a></p>

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
                            <p>  A term insurance calculator determines the premium rate that you will have to pay regularly to secure a term plan. The premium amount to be paid depends on several factors like your age, health

                                records, the sum assured, and the policy term. The term insurance premium calculator helps you learn the future needs of your family and choose the best term plan available in the market to fit your budget. Read all about <a href=base_url."/insurance-guide/protection/all-about-term-insurance-calculator" class="sec-anc">term life insurance calculator and its benefits.</a></p>

                        </div>
                    </div>

                </div>

                <div class="bor">
                    <div class="accordion">
                        <span>13</span>
                        <h3>What are riders in term insurance plan?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <p><a href=base_url."/insurance-plans/insurance-plan-riders" class="sec-anc">Riders in insurance</a> are basically contingent add-ons or supplementary benefits granted over and above a primary term policy in the event of an unforeseen incidence. They aim at expanding or amending the basic life insurance coverage at an additional cost. This means that they offer extended financial cover above the primary sum assured in a life insurance policy. You can avail a critical illness rider, accidental death rider, and a permanent disability rider with Kotak e-Term. Read more about the <a href=base_url."/insurance-guide/protection/what-are-insurance-riders-and-how-to-choose-them-in-a-term-plan" class="sec-anc">different types of insurance riders. </a></p>

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
                            <p>When it comes to identifying the best term plan, one must always consider and evaluate several factors like solvency ratio, claim settlement ratio, and insurance riders. Learn how to choose the right policy here and get the best term insurance plan. Read more about <a href=base_url."/insurance-guide/protection/how-to-identify-term-insurance-according-to-your-needs" class="sec-anc">how to choose the best term policy </a> and get the best term life insurance plan</p>

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
                            <p>Once you have decided that you want to buy online term insurance policy, you need to choose the right policy term. The policy period should be as long as the period your family will require to gain financial independence. Read more to know <a href=base_url."/insurance-guide/protection/how-to-identify-term-insurance-according-to-your-needs" class="sec-anc">how to pick the right policy tenure. </a></p>

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
                            <p>The right time to buy a term life insurance is when you are younger. In your early twenties and thirties, the premiums are cheaper due to younger age and a healthier lifestyle. Know the benefits of <a href=base_url."/insurance-guide/about-life-insurance/why-one-must-buy-term-insurance-before-25-years" class="sec-anc">buying a term plan before 25. </a></p>

                        </div>
                    </div>

                </div>

                <div class="bor">
                    <div class="accordion">
                        <span>18</span>
                        <h3>What are the payment options in term insurance plan? </h3>
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
                        <h3> Should I buy term insurance plan online or offline?</h3>
                    </div>
                    <div class="panel tab-detail mb-0 tab-align">
                        <div class="">
                            <p>You can buy term insurance plan via both online and offline mode. To purchase a term plan online, you can visit and proceed to  buy term insurance online by submitting your details. For offline mode, you can visit the nearest Kotak Life branch and connect with the concerned person. </p>

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
                            <!-- <ul>
                                <li>Death certificate </li>

                                <li>Age proof of the insured </li>

                                <li>Cancelled cheque by the beneficiary </li>

                                <li>KYC of the beneficiary </li>

                                <li> Cause-of-death certificate </li>

                                <li>Post-mortem report and Police FIR for unnatural deaths </li>

                                <li>Hospital records and confirmation for death due to illness </li>
                                <li>Original policy documents </li>
                            </ul> -->
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
                            <p>Affected families or the nominee can <a href="https://customer.kotaklifeinsurance.com/ocm" rel="nofollow" class="sec-anc"> file an online term plan claim </a>with minimal documentation as listed below: 1. Original policy documents 2. Death certificate 3. Age proof of the insured 4. Cancelled cheque by the beneficiary 5. KYC of the beneficiary 6. Cause-of-death certificate 7. Post-mortem report and Police FIR for unnatural deaths 8. Hospital records and confirmation for death due to illness</p>
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
                            <p> Yes. Most insurance plans offer lower premium rates to women than men.
                            </p>

                        </div>
                    </div>

                </div>
            </div>



            <!---->


        </div>
    </div>


</section>



<section class="terms new-terms"  id="">
    <div class="midWrapper">

        <button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits & Plan Disclaimer</button>
        <div class="content-col mb-0 tab-align li-disc terms-para">


            <p class="pl-0"> Tax Benefits & Disclaimers</p>
            <p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p>



            <p class="pl-0"> Solvency Ratio Disclaimer:</p>
            <a rel="nofollow" class="mb-15" href="https://www.irdai.gov.in/admincms/cms/uploadedfiles/annual%20reports/Annual%20Report%202020-21.pdf "> *https://www.irdai.gov.in/admincms/cms/uploadedfiles/annual%20reports/Annual%20Report%202020-21.pdf </a>

            <p class="pl-0"> Terms & Conditions:</p>
        
            <p class="pl-0"> This is a non-participating, pure protection oriented plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure. Kotak e-Term Plan UIN No.: 107N104V02, Form No. N104, Kotak Critical Illness Plus Benefit Rider UIN No.: 107B020V01, Form No.: B020. Ref. No: KLI/22-23/E-WEB/294</p>
			<p class="p1-0">Section 41-<br/>

Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: (1) No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. (2) Any person making default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.
</p><p class="p1-0">
 

Section 45-<br/>

Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details:
 <a href="<?=base_url()?>assets/images/uploads/why_kotak/section38_39_45_of_insurance_act_1938.pdf" target="_blank">Read more about section38_39_45_of_insurance_act_1938</a></p>  
            <p class="pl-0"> Regd. Office:</p>

            <p class="pl-0"> Kotak Mahindra Life Insurance Company Ltd. Reg No. 107 | CIN: U66030MH2000PLC128503</p>
            <p class="pl-0"> 8<sup>th</sup> Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Toll Free: 1800 209 8800 (8 am to 10 pm) | Website:  <a href=base_url.""> https://www.kotaklife.com </a> | Email: kli.in/WECARE </p>

            <p class="pl-0">BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS /FRAUDULENT OFFERS</p>
            <p class="pl-0">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
            <p class="pl-0">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>





            <!---
                <h2 class="text-upper"> BEWARE of SPURIOUS PHONE CALLS AND FICTITIOUS /FRAUDULENT OFFERS</h2>



                <p class="pl-0"> IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>

                <p class="pl-0">Kotak e-Term Plan UIN No.: 107N104V02, Form No. N104, Kotak Critical Illness Plus Benefit Rider UIN No.: 107B020V01, Form No.: B020. This is an individual non-linked non-par pure protection life insurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders, please read the Rider Brochure.<span class="font-italic">*The above illustration is for an 18-year old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.1 Crore. The per day premium is Rs.15 [Rs.5,400 Annualised Premium / 365 days = Rs.14.794]. The premium is assuming the policy is bought Online and the customer has not purchased any policy from Kotak Life Insurance. The above premium figure is exclusive of Goods and Services Tax and Cess. Goods and Services Tax and Cess thereon shall be charged as per the prevalent tax laws over and above the said premium. For substandard lives, extra premium may be charged based on Kotak Life Insurance underwriting policy.</span></p>
                <p class="pl-0 mb-35">Kotak Mahindra Life Insurance Company Ltd. Regn. No.:107, CIN: U66030MH2000PLC128503; Regd. Office: 8<sup>th</sup> Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Website: https://www.kotaklife.com | WhatsApp: 9321003007 | Toll Free No: 1800-209-8800</p>
                <h2 class="mb-35">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</h2>
                <!---->

        </div>

    </div>
</section>
</div>
<!-- Section End -->

<!-- Splash Message starts -->
<!-- 
<div id="splashs" class="splash d--flex">
        <div class="overlay-black"></div>
        <div class="splash-content">
            <div class="splash-close">
                <img alt="Close buttom - Splash" title="Close buttom - Splash" src="<?php echo base_url() ?>assets/images/splash-close.png">
            </div>
            <p class="">
            In light of COVID-19, we're operating with a limited team and it may take longer than usual to address your requests. Please note, a few of our branches are temporarily closed for your safety. You can view the  list of open branches <a href=base_url."/pdf/KotakLifeBranchList20thSep2021.pdf">here</a>. Kindly call your local branch to check their timings before visiting. <br>
			
			Kindly call your local branch to check their timings before visiting. You can also call us directly on our toll free number <a href="tel:9321003007">1800-209-8800</a> for immediate assistance.
            </p>
        </div>
    </div>
-->

<!-- Splash Message End -->

<!-- Splash Message End -->
 <input type="hidden" id="pageNo" value="0">
  <input type="hidden" id="sortType" value="recent">
  <input type="hidden" id="pageLimit" value="4">
  <input type="hidden" id="searchArticle" value="">
  <input type="hidden" id="pageType" value="topic">
  <input type="hidden" id="topicSlug" value="protection">
  <input type="hidden" id="url" value="<?php echo $this->uri->segment('1')?>/<?php echo $this->uri->segment('2')?>">



<script defer src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script>
    var cg_json = "";
    var cg_json1 = "";
    var cg_json2 = "";
    var cb_json = "";
</script>


<script>
    function getSegment() {
        var needSegment = $("#needSegment").val();
        if (needSegment == "Term Insurance Protection Plans") {
            /*$('#needSegment').prop('selectedIndex',0);
            $(".rhsBoxDetailWrap").addClass("activate");
            $(".rhsboxWrap").show();
            $(".steps.step01").removeClass("selected");*/
            //window.location=base_url."/OnlineTermInsurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=homepage&lead_group=kotak_organic";
             $target_url = "<?=base_url?>"+"/OnlineTermInsurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=homepage";
            window.open($target_url, '_blank');
        }
    }

    function close_popup() {
        $(".steps.step01").addClass("selected");

    }


    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "inline-block";
        evt.currentTarget.className += " active";
    }



    /*collapse v*/
    // var coll = document.getElementsByClassName("collapsible");
    // var i;

    // for (i = 0; i < coll.length; i++) {
    //     coll[i].addEventListener("click", function() {
    //         this.classList.toggle("active");
    //         var content = this.nextElementSibling;
    //         if (content.style.display === "block") {
    //             content.style.display = "none";
    //         } else {
    //             content.style.display = "block";
    //         }
    //     });
    // }
    /*collapse ^*/
</script>

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


    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }






    //If the button to open the modal is clicked, then
    //it should open the modal. ids are used to refer to the HTML elements
    document.getElementById("modal_btn").onclick = function() {
        document.getElementById("modal").style.display = 'block';
    }
    // If the close button on the modal is clicked, then
    // the modal should close. ids are used to refer to the HTML elements
    document.getElementById("close_btn").onclick = function() {
        document.getElementById("modal").style.display = 'none';
    }
	
	$("[data-fancybox]").fancybox({
  afterLoad: function (instance, slide) {
     slide.$slide.find('img').attr("alt", slide.opts.$orig.data('alt'));
  }
});
</script>
<script type="application/ld+json">{"@context": "https://schema.org","@type": "FAQPage","mainEntity": [{"@type": "Question","name": "How much should be the ideal insurance coverage for a term life insurance?","acceptedAnswer": {"@type": "Answer","text": "The amount of coverage varies from person to person and depends on how many dependents you have. Before you assign a vague number to your sum assured, know how much coverage you need."}},{"@type": "Question","name": "What kinds of deaths are not covered in a term life insurance policy?","acceptedAnswer": {"@type": "Answer","text": "While opting for a term plan, it is important to know the kind of deaths that don’t get covered in your plan in order to ensure that your family’s insurance claim is not rejected. Some of them are suicide, death during childbirth, death due to certain dangerous activities, etc. Get detailed information about the deaths not covered under a term life insurance plan."}},{"@type": "Question","name": "Does term insurance plan pay for sucidal death in India?","acceptedAnswer": {"@type": "Answer","text": "Suicidal death is not covered in the first year of the policy term and starts getting included in the cover after the second year. If the policy holder commits suicide in the first year, then the claim gets rejected and no death benefit is paid out."}},{"@type": "Question","name": "Is there a term insurance plan for smokers?","acceptedAnswer": {"@type": "Answer","text": "If you are a smoker, then you are not only spending money on cigarettes, but you are also increasing your chances of an early demise. One thing that insurance providers know is that smoking habits can have different effects on different people. Therefore, the term insurance plan for smokers comes in three different categories. Know more about the term plan for smokers."}},{"@type": "Question","name": "What are the tax benefits of a term insurance policy?","acceptedAnswer": {"@type": "Answer","text": "A major advantage of investing in the best term insurance plan is the tax benefit offered by the Income Tax Act, 1961. The ITA offers numerous exemptions and deductions, thus reducing taxpayers’ liability where the insurance premiums can be claimed up to Rs. 1,50,000 under Sections 80C and the death benefit can be availed as tax-free under Section 10(10D). Read more to know about term insurance-related income tax deductions you can claim."}},{"@type": "Question","name": "What are riders in term insurance plan?","acceptedAnswer": {"@type": "Answer","text": "Riders in insurance are basically contingent add-ons or supplementary benefits granted over and above a primary term policy in the event of an unforeseen incidence. They aim at expanding or amending the basic life insurance coverage at an additional cost."}}]}</script>