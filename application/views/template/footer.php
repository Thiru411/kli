<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @media (max-width: 767px) {
        .mobilechat {
            right: 0px !important;
            bottom: 18px !important;
        }

        .f-s-logo {
            display: block !important;
        }

        .gl-logo {
            margin: 2rem auto;
        }

        .gl-logo img {
            margin-top: 2rem;
        }
    }

    @media only screen and (max-width: 1280px) {
        .add-download p {
            font-size: 11px;

        }
    }


    .custom-icon {
        padding-bottom: 0px !important;
        padding-right: 0 !important;
        filter: drop-shadow(0 0 10px #333);
        right: 100px;
        bottom: 22px;
        cursor: pointer;
    }

    .w-130 {
        width: 130px;
    }

    .term-pnnn .polular-searches {
        border-bottom: 1px solid #707070;
        margin-bottom: 20px;
        border-top: none;
    }

    .f-s-logo {
        display: flex;
        justify-content: space-between;
    }

    .gl-logo {
        width: 100px;
    }

    .social-medias {
        margin: 0 !important;
    }

    .new_logo_align {
        display: flex;
        clear: both;
    }

    .new_logo_align .gl-logo {
        width: 110px;
    }
</style>
<?php $actual_link1 = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if ($actual_link1 == base_url() . '/assets/images/uploads/insurance-plans/Sales_Literature_-_Kotak_Saral_Jeevan_Bima_-_17th_March_2021_(1).pdf') {
    $redirectURL = base_url() . "/assets/images/uploads/insurance-plans/kotak-saral-jeevan-bima-17-march-2021.pdf";
    redirect($redirectURL);
} ?>

<footer class="new-footer">
    <!--popular searches v-->
    
 <div class="popular_list">
       <div class="pop-search">
        <div class="midWrapper">
            <div class="polular-searches">
                <h6 class="popular-title">popular searches</h6>
                <div class="popular-search-anc">
                    <ul>
                        <?php $this->load->model('site_model');
                        $page = $this->uri->segment(1);
                        $popularsearches = $this->site_model->getPopularSearches($page);
                        if (!empty($popularsearches)) {

                            $populartext = $popularsearches->field_id_400;

                            $populartextexplode = explode(',', $populartext);
                            if (count($populartextexplode) > 0) {
                                for ($i = 0; $i < count($populartextexplode); $i++) {

                                    $populartextexplodein = explode(':', $populartextexplode[$i]); ?>
                                    <li><a href="<?= base_url() . $populartextexplodein[1] ?>"><?= $populartextexplodein[0] ?></a></li>
                            <?php   }
                            }
                        } else { ?>
                            <li><a href="<?= base_url() ?>term-insurance/critical-illness">Critical illness</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/government-schemes/what-is-sukanya-samriddhi-yojana">Sukanya samriddhi yojana</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/income-tax-deductions-list">Income tax slab</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/what-is-tds-tax-deducted-at-source">Tds</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/about-life-insurance/types-of-insurance-policies">Types of insurance</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/how-to-claim-a-tax-refund">Tds refund</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/what-is-itr-1-form-and-how-to-download-it">Itr 1</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/section-80-d-deduction-of-income-tax-act">80d deduction</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/what-is-tds-tax-deducted-at-source">What is tds</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/protection/term-insurance-vs-life-insurance">Term insurance vs life insurance</a></li>
                            <li><a href="<?= base_url() ?>ulip-plans/what-is-ulip-plan">Ulip meaning</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/about-life-insurance/role-of-irda-in-insurance-sector-in-india">Irdai full form</a></li>
                            <li><a href="<?= base_url() ?>term-insurance/one-crore-term-insurance">1 crore term insurance</a></li>
                            <li><a href="<?= base_url() ?>">Life insurance</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/wealth-creation/how-to-invest-money-in-ulip">Invest in ulip</a></li>
                            <li><a href="<?= base_url() ?>ulip-plans">Ulip</a></li>
                            <li><a href="<?= base_url() ?>term-insurance/what-is-term-insurance">What is term insurance</a></li>
                            <li><a href="<?= base_url() ?>insurance-plans/retirement-plans">Retirement plan</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/income-tax-deductions-list">80c deduction list</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/government-schemes/pmjjby-application-status-certificate-download-and-claim-check">Pmjjby certificate download</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/what-is-income-tax-return-itr-how-to-file-income-tax-returns">What is itr</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/section-80-d-deduction-of-income-tax-act">Section 80d of income tax act</a></li>
                            <li><a href="<?= base_url() ?>insurance-plans/insurance-plan-riders">Insurance riders</a></li>
                            <li><a href="<?= base_url() ?>term-insurance">Term insurance</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/what-is-hra-and-how-hra-exemption-is-calculated">Hra full form</a></li>
                            <li><a href="<?= base_url() ?>savings-plan">Savings plans</a></li>
                            <li><a href="<?= base_url() ?>ulip-plans/importance-of-portfolio-management">Importance of portfolio</a></li>
                            <li><a href="<?= base_url() ?>savings-plan/kotak-guaranteed-savings-plan-online">Guaranteed savings plan</a></li>
                            <li><a href="<?= base_url() ?>savings-plan/kotak-assured-savings-plan">Assured savings plan</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/what-is-endowment-plan">Endowment meaning</a></li>
                            <li><a href="<?= base_url() ?>insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction">Section 80C tax benefits</a></li>
                        <?php  } ?>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>

   
    <!--End popular searches ^-->


    <div class="footer-menu">
        <div class="midWrapper">
            <div class="plans roww">


                <div class="incurance w-footer-20">
                    <h6 class="footer-title"><a href="<?= base_url() ?>insurance-plans">Life Insurance Plans</a></h6>
                    <ul class="plan-list">
                        <!-- <h6>Quick Buy Links </h6>-->

                        <li> <a href="<?= base_url() ?>term-insurance/">Term Insurance Plans </a>
                            <ul class="footer-sub-menu">
                                <li>
                                    <a href="<?= base_url() ?>term-insurance/kotak-e-term" target="_blank">Kotak e-Term</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/kotak-gen2gen-protect" target="_blank">Kotak Gen2Gen Protect</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>term-insurance/kotak-protect-india" target="_blank">Kotak Protect India</a>
                                </li>
                                
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
                        <!--
                        <li> <a href="<?= base_url() ?>ulip-plans">ULIP Plan </a>
                            <ul class="footer-sub-menu sub-bot-2">
                                <li>
                                    <a href="<?= base_url() ?>online-plans/ulip-plan/kotak-e-invest">Kotak e-Invest</a>
                                </li>
                            </ul>
                        </li>-->

                        <!-- <li> <a href="<?= base_url() ?>buy-health-insurance-online ">Health Insurance Quote </a></li>

          <li> <a href=" https://www.kotaklife.com/buy-annuity-plan ">Pension Planner </a></li>-->
                    </ul>


                </div>
                <div class="incurance w-footer-20">

                    <ul class="plan-list desk-margin">
                        <!-- <h6>Quick Buy Links </h6>-->

                        <li> <a href="<?= base_url() ?>savings-plan">Savings Plans</a>
                            <ul class="footer-sub-menu mobile-margin-0">

                                <li>
                                    <a href="<?= base_url() ?>savings-plan/kotak-guaranteed-savings-plan-online">Kotak Guaranteed Savings Plan</a>
                                </li>
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
                        <!-- <h6>Quick Buy Links </h6>-->
                        <li> <a href="<?= base_url() ?>ulip-plans">ULIP Plan </a>
                            <ul class="footer-sub-menu sub-bot-2">
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/kotak-e-invest">Kotak e-Invest</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/kotak-tulip"> Kotak T.U.L.I.P</a>
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
                        <!-- <li> <a href="<?= base_url() ?>insurance-plans/retirement-plans">Retirement Plans</a> </li>

                        <li> <a href="<?= base_url() ?>insurance-guide/health-insurance">Health Insurance Plans</a></li>
                        <li> <a href="<?= base_url() ?>insurance-plans/child-plans">Child Plan</a></li>-->
                    </ul>
                </div>
                <div class="incurance w-footer-20 desktop-show">

                    <ul class="plan-list desk-margin">
                        <!-- <h6>Quick Buy Links </h6>-->
                        <li> <a href="<?= base_url() ?>ulip-plans">ULIP Plan </a>
                            <ul class="footer-sub-menu sub-bot-2">
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/kotak-e-invest">Kotak e-Invest</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>ulip-plans/kotak-tulip">Kotak T.U.L.I.P</a>
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
                        <!--<li> <a href="<?= base_url() ?>insurance-plans/retirement-plans">Retirement Plans</a> </li>

                        <li> <a href="<?= base_url() ?>insurance-guide/health-insurance">Health Insurance Plans</a></li>
                        <li> <a href="<?= base_url() ?>insurance-plans/child-plans">Child Plan</a></li>-->
                    </ul>


                </div>
                <div class="incurance w-footer-20">
                    <h6 class="footer-title"><a href="<?= base_url() ?>financial-tools-calculators">CALCULATORS</a></h6>
                    <ul class="plan-list fnt-14">
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/ulip-calculator">ULIP Calculator </a> </li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/compound-interest-calculator">Compound Interest Calculator</a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/retirement-calculator">Retirement Planing Calculator </a></li>
                        <!--li> <a href="<?= base_url() ?>financial-tools-calculators/income-tax-calculator">Income Tax Calculator</a></li-->
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/sip-calculator">SIP Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/bmi-calculator">BMI Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/hra-calculator">HRA Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/fd-calculator">FD Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/rd-calculator">RD Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/gratuity-calculator">Gratuity Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/ppf-calculator">PPF Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/dass-21-calculator">DASS 21 Calculator </a></li>
                        <li> <a href="<?= base_url() ?>financial-tools-calculators/term-insurance-calculator">Term insurance Calculator </a></li>








                    </ul>
                </div>
                <div class="incurance w-footer-20">
                    <h6 class="footer-title">Buy Online</h6>
                    <ul class="plan-list fnt-14">
                        <li> <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=footer" target="_blank">Buy Term Insurance Online</a> </li>
                        <li> <a href=" https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=footer" target="_blank">Buy Kotak Gen2Gen Protect</a> </li>
                        <li> <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=footer" target="_blank">Invest in ULIP Plan</a></li>
                        <li> <a href="https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=kgsp_organic&utm_medium=website&utm_campaign=footer" target="_blank">Invest in Guaranteed Savings Plan</a></li>
                        <li> <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=footer" target="_blank">Invest in Assured Savings Plan </a></li>
                        <!-- <li> <a href="<?= base_url() ?>buy-kotak-protect-india/#/landing">Kotak Protect India</a></li> -->
                        <!-- <li> <a href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=footer">Invest in Lifetime Income Plan</a></li> -->
                        <li> <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=footer">Invest in Kotak Guaranteed Fortune Builder</a></li>
                        <li><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=footer">Buy Kotak Assured Pension</a></li>
                        <li><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=footer">Buy Kotak T.U.L.I.P</a></li>
                    </ul>
                </div>
                <div class="incurance w-footer-20 n-mar">
                    <ul class="plan-list">
                        <li> <a href="<?= base_url() ?>retirement-and-pension-plans">Retirement Plans</a>
                            <ul class="footer-sub-menu sub-bot-2">
                                <li>
                                    <a href="retirement-and-pension-plans/kotak-lifetime-income-plan">Kotak Lifetime Income Plan</a>
                                </li>
                                <li><a href="retirement-and-pension-plans/kotak-assured-pension">Kotak Assured Pension</a></li>
                                <li><a href="<?=base_url()?>retirement-and-pension-plans/annuity-in-nps">Annuity in NPS</a></li>
                                <li><a href="<?=base_url()?>retirement-and-pension-plans/1-crore-retirement-plan">1 Crore Retirement Plan</a></li>
                                <li><a href="<?=base_url()?>retirement-and-pension-plans/10-year-retirement-plan">10 Year Retirement Plan</a></li>
                                <li><a href="<?=base_url()?>retirement-and-pension-plans/5-year-retirement-plan">5 Year Retirement Plan</a></li>





                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="incurance w-footer-20 n-mar">
                    <ul class="plan-list">
                        <li> <a href="<?= base_url() ?>insurance-guide/health-insurance">Health Insurance Plans</a></li>
                    </ul>
                </div>
                <div class="incurance w-footer-20 n-mar">
                    <ul class="plan-list">
                        <li> <a href=" https://www.kotaklife.com/guaranteed-wealth-builder/">Guaranteed Wealth Builder Plans</a>
                            <ul class="footer-sub-menu sub-bot-2">
                                <li>
                                    <a href="<?= base_url() ?>savings-plan/kotak-assured-savings-plan">Kotak Assured Savings Plan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>savings-plan/kotak-guaranteed-fortune-builder">Kotak Guaranteed Fortune Builder</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="incurance w-footer-20 n-mar">
                    <ul class="plan-list">
                        <li> <a href="<?= base_url() ?>investment-plans">Investment Plans</a>
                            <ul class="footer-sub-menu sub-bot-2">
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
                <!-- <div class="incurance w-footer-20 n-mar">
                    <ul class="plan-list">
                        <li> <a href="<?= base_url() ?>insurance-plans/child-plans">Child Plan</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>

    <div class="footer-menu footer-menu-list f-sec">
        <div class="midWrapper">
            <div class="plans roww">


                <div class="incurance w-footer-20">
                    <h6 class="footer-title"><a href="<?= base_url() ?>insurance-guide">Insurance Guide</a></h6>
                    <ul class="plan-list">
                        <!-- <h6>Quick Buy Links </h6>-->

                        <li> <a href="<?= base_url() ?>insurance-guide/about-life-insurance">About Life Insurance</a></li>
                        <li><a href="<?= base_url() ?>insurance-guide/protection">Term Insurance Guide</a></li>
                        <li><a href="<?= base_url() ?>insurance-guide/wealth-creation">Wealth Creation</a></li>
                        <li><a href="<?= base_url() ?>insurance-guide/retirement">Retirement</a></li>
                        <li><a href="<?= base_url() ?>insurance-guide/savingstax">Savings & Tax</a></li>
                        <li><a href="<?= base_url() ?>insurance-guide/government-schemes">Government Schemes</a></li>
                        <li><a href="<?= base_url() ?>insurance-guide/health-insurance">Health Insurance</a></li>
                        <li><a href="<?= base_url() ?>insurance-guide/glossary">Glossary</a></li>
                    </ul>
                </div>
                <div class="incurance w-footer-20">
                    <h6 class="footer-title">HOW DO I?</h6>
                    <ul class="plan-list">
                        <li> <a href="<?= base_url() ?>how-do-i/pay-my-premium">Pay My Premium</a></li>
                        <li><a rel="nofollow" href="https://customer.kotaklifeinsurance.com/ocm">File a Claim</a></li>
                        <li><a href="<?= base_url() ?>how-do-i/manage-my-policy">Manage My Policy</a></li>
                        <li><a href="<?= base_url() ?>how-do-i/download-application-form">Download Application Form</a></li>
                        <li><a href="<?= base_url() ?>how-do-i/get-policy-brochure">Get Product Brochure</a></li>
                        <li><a href="<?= base_url() ?>how-do-i/check-policy-document-specimen">Check Policy Document Specimen</a></li>
                        <li><a href="<?= base_url() ?>how-do-i/fund-update">Fund Updatee</a></li>
                        <li><a href="<?= base_url() ?>how-do-i/locate-kotak-branches">Locate a Kotak Life Branch</a></li>
                        <li><a href="<?= base_url() ?>how-do-i/understand-stages-of-application">Understand the Stages of My Application</a></li>
                    </ul>
                </div>

                <div class="incurance w-footer-20">
                    <h6 class="footer-title">Group Plans</h6>
                    <ul class="plan-list">
                        <li> <a href="<?= base_url() ?>business-solutions/group-gratuity-leave-encashment">Group Gratuity/Leave
                                Encashment </a></li>
                        <li><a href="<?= base_url() ?>group-plans/group-superannuation">Group Superannuation


                            </a></li>
                        <li><a href="<?= base_url() ?>group-plans/group-term">Group Term</a></li>
                        <li><a href="<?= base_url() ?>group-plans/group-credit">Group Credit</a></li>
                    </ul>
                </div>

                <div class="incurance w-footer-20">
                    <h6 class="footer-title">About Us</h6>
                    <ul class="plan-list">
                        <li> <a href="<?= base_url() ?>why-kotak-life/corporate-governance">Corporate Governance</a></li>
                        <li><a href="<?= base_url() ?>why-kotak-life/csr">CSR </a></li>
                        <li><a href="<?= base_url() ?>why-kotak-life/media-center">Media Center</a></li>
                        <li><a href="<?= base_url() ?>why-kotak-life/career">Career</a></li>
                        <li><a href="<?= base_url() ?>why-kotak-life/contact-us">Contact Us</a></li>
                    </ul>
                </div>

                <div class="incurance w-footer-20 mobile-hide">
                    <h6 class="footer-title">Quick Links</h6>
                    <ul class="plan-list">
                        <li> <a href="<?= base_url() ?>term-insurance/what-is-term-insurance" target="_blank">What is Term Insurance
                            </a></li>
                        <li><a href="<?= base_url() ?>ulip-plans/what-is-ulip-plan" target="_blank">What is ULIP</a></li>
                        <li><a href="<?= base_url() ?>insurance-guide/savingstax/what-is-hra-and-how-hra-exemption-is-calculated" target="_blank">HRA Deductions </a></li>
                        <li><a href="<?= base_url() ?>insurance-guide/savingstax/new-income-tax-slabs-in-india" target="_blank">Tax Slabs</a></li>
                        <li><a href="<?= base_url() ?>term-insurance/critical-illness" target="_blank">What is Critical Illness Insurance? </a></li>
                        <li><a href="<?= base_url() ?>insurance-guide/about-life-insurance/what-is-life-insurance" target="_blank">What is Life Insurance </a></li>
                        <li><a href="<?= base_url() ?>term-insurance/term-plan-with-return-of-premium" target="_blank">Term Plan with Return of Premium</a></li>
                        <li><a href="<?= base_url() ?>term-insurance/claim-settlement-ratio" target="_blank">Claim Settlement Ratio</a></li>
                        <li><a href="<?= base_url() ?>insurance-plans/insurance-plan-riders" target="_blank">Insurance Riders</a></li>
                        <li><a href="<?= base_url() ?>happyyou/" target="_blank">HappyYou by Kotak</a></li>

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
                            <li><a rel="nofollow" href="https://twitter.com/Kotak_Life?utm_source=website&utm_medium=TW_icon&utm_campaign=HR_session" class="twitter" target="_blank"><i class="fa-brands fa-x-twitter"></i>
                                    <svg class="new-twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1">
                                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                    </svg>
                                </a></li>
                            <li><a rel="nofollow" href="https://www.linkedin.com/company/kotak_life/" class="linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a rel="nofollow" href="https://www.youtube.com/kotaklifeinsuranceofficial" class="youtube" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a rel="nofollow" href="https://www.instagram.com/kotak.lifeinsurance/?utm_source=website&utm_medium=IG_icon&utm_campaign=HR_session" class="instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>

                        <div class="topspace">
                            <div>
                                <p class="w-auto so-cont">Awards</p>
                            </div>


                            <div class="marginspace">
                                <div class="award-store "></div>
                                <div class="award-store1 "></div>
                            </div>



                        </div>


                    </div>

                    <div class="glogo">
                        <div class="glogo-group">
                            <div class="add-download">
                                <p>Download the HappyYou by Kotak Mobile App
                                </p>
                                <a rel="nofollow" class="apple-store" href="https://apps.apple.com/in/app/happyyou/id6448199779?utm_source=KLI&utm_medium=KLI+website&utm_campaign=HY+appstore&utm_id=Website-+HY+App+store" target='_blanck'><!--<img src="<?php echo base_url() ?>assets/images/ios-app.svg">--></a>
                                <a rel="nofollow" class="google-store" href="https://play.google.com/store/apps/details?id=com.wyh.happyyou&referrer=utm_source%3DKLI%26utm_medium%3DKLI%2BWebsite%26utm_campaign%3DHY%2BPlaystore" target='_blanck'><!--<img src="<?php echo base_url() ?>assets/images/google-play-app.svg">--></a>
                            </div>
                            <div class="g20">
                                <!--<img src="<?php echo base_url() ?>assets/images/g20-logo.svg">-->
                            </div>
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
                    <li><a onclick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Service TATs'});" class="secondLI " href="<?= base_url() ?>grievance-redressal/service-tat">Service TATs</a></li>
                    <li><a onclick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'customer-bulletin'});" class="" href="<?= base_url() ?>grievance-redressal/customer-bulletin">Customer Bulletin</a></li>
                    <li><a onclick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'fatca'});" class="" href="<?= base_url() ?>grievance-redressal/fatca">FATCA</a></li>
                    <li><a onclick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'aml-guidelines'});" class="" href="<?= base_url() ?>grievance-redressal/aml-guidelines"> AML Guidelines</a></li>
                </ul>
                <ul class="footerLinksUL footerLinksUL02">
                    <li><a onclick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Sitemap'});" href="<?= base_url() ?>sitemap">Sitemap</a></li>
                    <li><a onclick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Website Feedback'});" href="<?= base_url() ?>website-feedback"> Website Feedback</a></li>
                </ul>
            </div>
            <div class="btmDesc new-beware">
                <h6 class="footer-title">BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS / FRADULENT OFFERS</h6>

                <p> IRDAI or its officials do not involve in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.
                </p>
                <p>Beware of spurious emails with fictitious/fraudulent offers. Persons receiving such emails mentioning Kotak Life are requested to highlight the same immediately to <a href="mailto:kli.riskcontrol@kotak.com" class="f-mail">kli.riskcontrol@kotak.com </a> with "Spurious Email" in the subject line.</p>

            </div>
            <div class="btmDesc new-trades">
                <p>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
                <p>Kotak Mahindra Life Insurance Company Ltd. Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai - 400 051. Website: www.kotaklife.com I Email:kli.in/WECARE I Toll Free No.: 1800 209 8800. Registered with Insurance Regulatory & Development Authority (IRDAI) as Life Insurance Company. Regn. No. 107. CIN : U66030MH2000PLC128503
                </p>
            </div>
        </div>

    </div>
    <div class="new-desclaimer">
        <div class="midWrapper">
            <ul class="btmlinks">
                <li class="<?php check_menu_active(2, 'corporate-governance') ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Public Disclosure'});" href="<?php echo base_url(WKL_MODULE_LINK . '/corporate-governance') ?>">Public Disclosure</a></li>
                <li><a rel="nofollow" onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Unclaimed Amount Due to Policyholders'});" href="https://customer.kotaklifeinsurance.com/CP/customerunclaimamount.aspx" target="_blank">Unclaimed Amount Due to Policyholders</a></li>
                <li class="<?php check_menu_active(1, 'disclaimer', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Disclaimer'});" href="<?php echo base_url(); ?>disclaimer">Disclaimer</a></li>
                <li class="<?php check_menu_active(1, 'privacy-policy', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Privacy Policy'});" href="<?php echo base_url(); ?>privacy-policy">Privacy Policy</a></li>

                <!--<li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'IRDAI'});" href="https://www.policyholder.gov.in/"  target="_blank">IRDAI</a></li>www.policyholder.gov.in/-->

                <li><a rel="nofollow" onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'IRDAI Customer Education'});" href="https://www.policyholder.gov.in/" target="_blank">IRDAI Customer Education</a></li>
                <!--www.policyholder.gov.in/-->

                <li><a rel="nofollow" onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'IRDAI'});" href="https://www.irdai.gov.in/" target="_blank">IRDAI</a></li>
                <!--www.policyholder.gov.in/-->

                <li><a rel="nofollow" onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Insurance Ombudsman'});" href="https://www.cioins.co.in/Ombudsman" target="_blank">Insurance Ombudsman</a></li>
                <li><a rel="nofollow" onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Kotak Mahindra Bank'});" href="https://www.kotak.com/" target="_blank">Kotak Mahindra Bank</a></li>
                <li><a rel="nofollow" onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Life Insurance Council'});" href="https://www.lifeinscouncil.org/code/Default.aspx" target="_blank">Life Insurance Council</a></li>
                <!--<li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Commission Deferment Policy'});" href="<?php echo base_url(); ?>assets/images/uploads/why_kotak/commission_deferment.pdf" target="_blank">Commission Deferment Policy</a></li>-->
                <li class="<?php check_menu_active(1, 'corporate-partners', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Corporate Partners'});" href="<?php echo base_url(); ?>corporate-partners">Corporate Partners</a></li>
                <li><a rel="nofollow" onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Corporate Partners Login'});" href="https://cp.mykotaklife.com/Login/LoginCPR.aspx" target="_blank">Corporate Partners Login</a></li>
                <li class="<?php check_menu_active(1, 'do-not-call-registry', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Do Not Call Registry'});" href="<?php echo base_url(); ?>do-not-call-registry">Do Not Call Registry</a></li>
                <!--<li class="<?php check_menu_active(1, 'customer-notice-archives', 1) ?>"><a href="<?php echo base_url(); ?>customer-notice-archives">Customer Notice Archives</a></li>-->
                <li class="<?php check_menu_active(1, 'agents-terminated-due-malpractices', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Agents Terminated'});" href="<?php echo base_url(); ?>agents-terminated-due-malpractices">Agents Terminated</a></li>
                <li><a rel="nofollow" onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Grievance Redressal System'});" href="https://customer.kotaklifeinsurance.com/KGMSUI/Grievance/Information.aspx" target="_blank">Grievance Redressal System</a></li>
                <!--<li><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Accredited Training Institute Complaints'});" href="https://customer.kotaklifeinsurance.com/policymanager/ComplaintRegistration/ComplaintRegistration.aspx" target="_blank">Accredited Training Institute Complaints</a></li>-->
                <!--<li><a href="javascript:;">Monthly unit reconciliation of ULIP portfolio</a></li>-->
                <li><a rel="nofollow" onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Bima Bharosa'});" href="https://bimabharosa.irdai.gov.in" target="_blank">Bima Bharosa</a></li>
                <li><a rel="nofollow" onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'IRDAIs Call Centre Feedback Survey'});" href="https://www.mygov.in/mygov-survey/irdais-call-centre-feedback-survey/" target="_blank">IRDAI's Call Centre Feedback Survey</a></li>

                <li class="<?php check_menu_active(1, 'key-persons', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Key Persons'});" href="<?php echo base_url(); ?>key-persons">Key Persons</a></li>
                <li class="<?php check_menu_active(1, 'key-persons', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'List of our GST registration numbers'});" href="<?php echo base_url(); ?>assets/images/uploads/why_kotak/list-of-our-gstin-registration-numbers.pdf" target="_blank">List of our GST registration numbers</a></li>
                <li class="<?php check_menu_active(1, 'regional-forms', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Policy Servicing Forms in Regional Languages'});" href="<?php echo base_url(); ?>regional-forms">Policy Servicing Forms in Regional Languages</a></li>
                <li class="<?php check_menu_active(1, 'happyyou-privacy-policy', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'HappyYou Privacy Policy'});" href="<?php echo base_url(); ?>happyyou-privacy-policy">HappyYou by Kotak Privacy Policy</a></li>
                <li class="<?php check_menu_active(1, 'Account-Aggregator', 1) ?>"><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Account Aggregator'});" href="<?php echo base_url(); ?>account-aggregator">Account Aggregator</a></li>

            </ul>

        </div>
    </div>
    <div class="new-copyright">
        <div class="midWrapper">
            <p class="copyright">© <?php echo date("Y"); ?> Kotak Mahindra Group. All rights reserved.</p>
        </div>
    </div>

    <?php

    $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $basename = pathinfo($url_path, PATHINFO_BASENAME);

    $pageLink_url = "";
    $page_temp = array();
    $page_temp = explode("/", $url_path);
    if ($page_temp[1] != '')
        $pageLink_url = $page_temp[1];

    //if($basename=="about-life-insurance")
    if ($pageLink_url == "insurance-guide") { ?>
        <!-- <div style="width: 50%; padding-top: 100px;">
        <div style="max-width: 7000px; margin: 0 auto; padding: 0 40px; text-align: left;">
            <div id="cancel" class="pauseee--text custom-icon play-left letschat-btn" style="display:none;"><i class="fa fa-pause-circle" aria-hidden="true"></i></div>
            <div id="start" class="custom-icon letschat-btn  play-left"> <i class="fa fa-play-circle" aria-hidden="true"></i></div>
            <img alt="" src="https://haptikappimg.haptikapi.com/uploads/e7e7a63b44e3412e7a2932c6f4428a9f.png" onClick="openChat()" class="custom-icon letschat-btn">
        </div>
    </div> -->
    <?php } ?>

    <!--
<div class="w3-modal-content modal-sm">
          <div class="w3-container">
             <span   class="close-btn">&times;</span> 
            <div class="center-text">
                <img alt="" class="pic" src="<?php echo base_url() ?>assets/images/kaya.png">
                <h3 class="name">Kaya is online  <span class="green-dot"></span></h3>
                
                <div class="btn-chat">
                    <a href="javascript:void(0)"  onClick="openChat()">Open Chat</a>
                </div>
            </div> 
          </div>
        </div>-->

    <?php
    $chatbot_hide = "";
    if (get_cookie('kotak_customer_type')) {
        $cusType = get_cookie('kotak_customer_type');
        $mobcusType = get_cookie('kotak_customer_type');
    } else {
        $cusType = "new_customer";
        $mobcusType = "new_customer";
    }
    if ($cusType == "new_customer") {
        if (strpos($_SERVER['REQUEST_URI'], "insurance-guide") !== false  ||  strpos($_SERVER['REQUEST_URI'], "happy-you") !== false || strpos($_SERVER['REQUEST_URI'], "term-insurance") !== false  || strpos($_SERVER['REQUEST_URI'], "ulip-plans") !== false  || strpos($_SERVER['REQUEST_URI'], "retirement-and-pension-plans") !== false  || strpos($_SERVER['REQUEST_URI'], "savings-plan") !== false) {
            $chatbot_hide = "display:none";
        }
    }

    ?>
    <div style="">
        <div style="max-width: 7000px; margin: 0 auto; padding: 0 40px; text-align: left;">
            <!-- <img src="https://haptikappimg.haptikapi.com/uploads/e7e7a63b44e3412e7a2932c6f4428a9f.png" onClick="openChat()" class="custom-icon"> -->
            <img style="<?= $chatbot_hide ?>" src="assets/images/chatexit.gif" onClick="openChat()" class="custom-icon mobilechat w-130">
        </div>
    </div>

    <!-- <div style="width: 50%; padding-top: 100px;">
    <div style="max-width: 7000px; margin: 0 auto; padding: 0 40px; text-align: left;">
	<img src="assets/images/lets-chatgif.gif" onClick="openChat()" class="custom-icon">
    </div>
  </div>  -->

</footer>


<!--Side menu popup-->

<!--End Side menu popup-->


<!--Footer End -->
<script>
    var base_url = '<?php echo base_url(); ?>';
    var google_recaptcha_key = '<?php echo GOOGLE_RECAPTHA_KEY; ?>';
</script>
<?php $home_load = false;
if (isset($JS_FILES) && sizeof($JS_FILES) > 0) {
    $scripcount = 0;
    foreach ($JS_FILES as $jsfile) {
        $scripcount++;
        if ($scripcount == 2) {
            if ($_SERVER['REQUEST_URI'] == "/financial-tools-calculators/ulip-calculator") { ?>
                <script defer src="assets/js/cal-jquery-3.6.0.js"></script>
                <script defer src="assets/js/vendor/rangeslider.min.js"></script>
                <!--script defer src="assets/js/global.js"></script>
			<script defer src="assets/js/vendor/tipso.min.js"></script>
			<script defer src="https://cdn.jsdelivr.net/gh/formulajs/formulajs@2.5.0/dist/formula.min.js"></script-->
                <script defer src="assets/js/vendor/chart.js"></script>
                <script defer src="assets/js/investment.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script async="" src="assets/js/sip-calculator.js"></script>
            <?php } ?>
            <?php
            if ($_SERVER['REQUEST_URI'] == "/financial-tools-calculators/retirement-calculator") {
            ?>
                <script src="assets/js/cal-jquery-3.6.0.js"></script>
                <script defer src="assets/js/vendor/rangeslider.min.js"></script>
                <!--script defer src="assets/js/global.js"></script>
			<script defer src="assets/js/vendor/tipso.min.js"></script>
			<script src="https://cdn.jsdelivr.net/gh/formulajs/formulajs@2.5.0/dist/formula.min.js"></script-->
                <script defer src="assets/js/retirement.js"></script>
            <?php } ?>
            <?php
            if ($_SERVER['REQUEST_URI'] == "/financial-tools-calculators/income-tax-calculator") {
            ?>
                <script src="assets/js/cal-jquery-3.6.0.js"></script>
                <script defer src="assets/js/vendor/rangeslider.min.js"></script>
                <!--script defer src="assets/js/global.js"></script>
			<script defer src="assets/js/vendor/tipso.min.js"></script-->
                <script defer src="assets/js/vendor/chart.js"></script>
                <script defer src="assets/js/income-tax.js"></script>
            <?php } ?>
            <?php if ($_SERVER['REQUEST_URI'] == "/financial-tools-calculators/compound-interest-calculator") {
            ?>
                <script defer src="assets/js/cal-jquery-3.6.0.js"></script>
                <script defer src="assets/js/vendor/rangeslider.min.js"></script>
                <!--script defer src="assets/js/global.js"></script>
			<script defer src="assets/js/vendor/tipso.min.js"></script-->
                <script defer src="assets/js/vendor/chart.js"></script>
                <script defer src="assets/js/compound-interest.js"></script>
            <?php } ?>

            <?php if ($_SERVER['REQUEST_URI'] == "/financial-tools-calculators/sip-calculator") {
            ?>
                <script defer src="assets/js/cal-jquery-3.6.0.js"></script>
                <script defer src="assets/js/vendor/rangeslider.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script async="" src="assets/js/sip-calculator.js"></script>
            <?php } ?>

            <?php if ($_SERVER['REQUEST_URI'] == "/ulip-plans") { ?>

                <script defer src="assets/js/vendor/rangeslider.min.js"></script>
                <!--script defer src="assets/js/global.js"></script>
			<script defer src="assets/js/vendor/tipso.min.js"></script>
			<script defer src="https://cdn.jsdelivr.net/gh/formulajs/formulajs@2.5.0/dist/formula.min.js"></script-->
                <script defer src="assets/js/vendor/chart.js"></script>
                <script defer src="assets/js/investment.js"></script>
            <?php } ?>
            <?php     }
        if ($_SERVER['REQUEST_URI'] == "/") {
            if ($jsfile == "assets/js/common.js") {
                $jsfile = "assets/js/common-home.js";
            }
            if ($jsfile == "assets/js/g-recaptcha.js" || $jsfile == "assets/js/jquery.mousewheel.js" || $jsfile == "assets/js/need_base_ca.js") {
                $jsfile = "";
            }
            if ($home_load == false) { ?>
                <script>
                    setInterval(function() {
                        $(".blur").remove();
                        $("#myHomeBanner").show();
                    }, 8000);
                </script>
        <?php $home_load = true;
            }
        } ?>
        <?php
        if ($_SERVER['REQUEST_URI'] == "/online-plans/online-term-insurance-plans") {
            if ($jsfile == "assets/js/g-recaptcha.js" || $jsfile == "assets/js/jquery.mousewheel.js" || $jsfile == "assets/js/bootstrapValidator.min.js" || $jsfile == "assets/js/jquery.validate.min.js") {
                $jsfile = "";
            }
        }
        if ($_SERVER['REQUEST_URI'] == "/term-insurance") {
            if ($jsfile == "assets/js/g-recaptcha.js" || $jsfile == "assets/js/jquery.mousewheel.js" || $jsfile == "assets/js/bootstrapValidator.min.js" || $jsfile == "assets/js/jquery.validate.min.js") {
                $jsfile = "";
            }
        }
        if ($_SERVER['REQUEST_URI'] == "/ulip-plans") {
            if ($jsfile == "assets/js/g-recaptcha.js" || $jsfile == "assets/js/jquery.mousewheel.js" || $jsfile == "assets/js/bootstrapValidator.min.js" || $jsfile == "https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js") {
                $jsfile = "";
            }
        }
        ?>

        <?php
        if (strpos($_SERVER["REQUEST_URI"], "insurance-guide") != false) {
            //	if($jsfile=="assets/js/common.js"){$jsfile="assets/js/common-home.js";}
            if (
                $jsfile == "assets/js/g-recaptcha.js" || $jsfile == "assets/js/jquery.mousewheel.js" || $jsfile == "assets/js/need_base_ca.js" || $jsfile == "assets/js/jpreloader.js"
                || $jsfile == "assets/js/common-dev.js" || $jsfile == "assets/js/hammer.js"  || $jsfile == "assets/js/owl.carousel.min.js" || $jsfile == "assets/js/jquery.jscrollpane.min.js"
                || $jsfile == "assets/js/js/bootstrapValidator.min.js"
                || $jsfile == "assets/js/jquery.validate.min.js"
            ) {
                $jsfile = "";
            }
        }
        if ($jsfile != "") {
        ?>
            <script src="<?php echo $jsfile ?>" language="javascript"></script>
<?php    }
    }
} ?>
<div class="overlay"></div>
<?php
$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$basename = pathinfo($url_path, PATHINFO_BASENAME);
if ($basename == "career-as-life-advisor") { ?>
    <script src="https://www.youtube.com/player_api"></script>
<?php } ?>
<script defer src="assets/js/loader.js"></script>
<script>
    var ulip_rating = term_rating = savings_rating =investment_rating ='';

    function retrieveRating() {
        ulip_rating = localStorage.getItem('ulip_rating');
        term_rating = localStorage.getItem('term_rating');
        savings_rating = localStorage.getItem('savings_rating');
        investment_rating = localStorage.getItem('investment_rating');

    }

    function setRating() {
        localStorage.setItem("ulip_rating", ulip_rating);
        localStorage.setItem("term_rating", term_rating);
        localStorage.setItem("savings_rating", savings_rating);
        localStorage.setItem("investment_rating", investment_rating);

    }

    function clearOldRef() {
        var arr = [];
        for (var i = 0; i < localStorage.length; i++) {
            if (localStorage.key(i).indexOf('SAVED_TASKS') == -1) {
                arr.push(localStorage.key(i));
            }
        }
        retrieveRating();

        for (var i = 0; i < arr.length; i++) {
            localStorage.removeItem(arr[i]);
        }
        setRating();
        var cookies = document.cookie.split(";");
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
    }

    clearOldRef();
    var haptikInitSettings = {
        'primary-color': '#da251c',
        'secondary-color': '#f4f4f4',
        'widget-positioning': 'bottom-right',
        'font-sizes': {
            'primary': 14,
            'secondary': 18
        },
        'typography': 'Lato',
        'header-text': {
            'text': 'Kaya',
            'status-text': true
        },
        'composer-placeholder': 'Type your message...',
        'header-icon': 'https://haptikappimg.haptikapi.com/uploads/c438367db350eb514589257c20384663.png?w=1991&h=1962',
        'business-id': 978,
        'client-id': '763005ee8f30a91f3ab9ab35d15411315c256e46',
        'base-url': 'https://kli.haptikapi.com',
        'session-timeout': 360000000,
        'custom-button': true,
        'ignore-storage': true,
        'match-view-height': true,
        'chat-bubble-text-desktop': "I'm Online",
        'chat-bubble-text-mobile': "_NONE_",

        sdkEvents: event => {
            console.log('📣 from SDK: ', JSON.stringify(event));
        }
    };

    function openChat(input) {
        //alert(1)
        HaptikSDK.expandWidget();

        let st = $(input).attr('data-tag');
        lmSMTObj.track("chatBotClick", {
            "products": [{
                "name": st
            }, ]
        }, function() {});
    }
</script>
<?php $meta_data = seo_configuration();
if (count($meta_data)) {
    $url_schema = $meta_data['url_schema'];
    if ($url_schema != "") { ?>
        <script type="application/ld+json">
            <?php echo str_replace(' &apos; ', "'", str_replace("'", '"', $url_schema)); ?>
        </script>
<?php }
} ?>

<?php
$actual_link_urls = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if ($actual_link_urls == "https://kli-uat.irepo.in/" || $actual_link_urls == "https://kli-uat.irepo.in/why-kotak-life/contact-us#contact-us-main") {
?>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "InsuranceAgency",
            "name": "Kotak Life Insurance",
            "url": "<?= base_url() ?>",
            "email": "kli.in/WECARE",
            "telephone": "1800 209 8800",
            "openingHours": [
                "Mo-Su 10:00-19:00"
            ],
            "sameAs": [
                "https://www.facebook.com/kotaklife/",
                "https://www.linkedin.com/company/kotak_life",
                "https://twitter.com/Kotak_Life",
                "https://www.youtube.com/kotaklifeinsuranceofficial",
                "https://www.instagram.com/kotak.lifeinsurance/",
                "https://en.wikipedia.org/wiki/Kotak_Life_Insurance"
            ],
            "image": "<?= base_url() ?>assets/images/fb-share.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "1800 209 8800",
                "contactType": "customer service",
                "contactOption": "TollFree",
                "areaServed": "India"
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": ["C- 12, G- Block, BKC,"],
                "addressLocality": [
                    " Bandra (E)", " Mumbai"
                ],
                "addressRegion": "Maharashtra",
                "addressCountry": "India",
                "postalcode": "400051"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Kotak Life Insurance",
            "legalName": "Kotak Mahindra Life Insurance Company Ltd",
            "url": "<?= base_url() ?>",
            "foundingDate": "2001",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "C- 12, G- Block, BKC",
                "addressLocality": "Bandra East",
                "addressRegion": "Mumbai",
                "postalCode": "400051",
                "addressCountry": "India"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer support",
                "telephone": "[1800209800]",
                "email": "kli.in/WECARE"
            },
            "sameAs": [
                "https://www.facebook.com/kotaklife/",
                "https://www.linkedin.com/company/kotak_life",
                "https://twitter.com/Kotak_Life",
                "https://www.youtube.com/kotaklifeinsuranceofficial",
                "https://www.instagram.com/kotak.lifeinsurance/",
                "https://en.wikipedia.org/wiki/Kotak_Life_Insurance"
            ]
        }

        $(document).ready(function() {
            $(".btn-chat,.close-btn").click(function() {
                $(".modal-sm").hide();
            });
        });

        $(window).ready(function() {
            setInterval(function() {
                $('.modal-sm').addClass("d--block")
            }, 6500);
        });
        $(document).ready(function() {
            $(".letschat-btn").click(function() {
                $(".modal-sm").hide();
            });
        });
    </script>
<?php } ?>
<?php
if (substr($actual_link1, -1) == '/' && $actual_link1 != base_url()) {
    //  $redirect_url = rtrim($actual_link1, '/');
    // redirect("$redirect_url");
}     ?>
<script>
    function open_online() {
        alert("test");
        $(".rhsBoxDetailWraps").toggleClass("activate"), $(".buyOnline").toggleClass("selected"), $(".overlay").show();
      
    }
 
    
    function playButtonClick(e) {
        let t = $(e).attr("data-tag");
        lmSMTObj.track("playButtonClick", {
            products: [{
                name: t
            }]
        }, (function() {}))
    }
    document.addEventListener("DOMContentLoaded", (function() {
        var e;
        if ("IntersectionObserver" in window) {
            e = document.querySelectorAll(".lazy");
            var t = new IntersectionObserver((function(e, n) {
                e.forEach((function(e) {
                    if (e.isIntersecting) {
                        var n = e.target;
                        n.src = n.dataset.src, n.classList.remove("lazy"), t.unobserve(n)
                    }
                }))
            }));
            e.forEach((function(e) {
                t.observe(e)
            }))
        } else {
            var n;

            function o() {
                n && clearTimeout(n), n = setTimeout((function() {
                    var t = window.pageYOffset;
                    e.forEach((function(e) {
                        e.offsetTop < window.innerHeight + t && (e.src = e.dataset.src, e.classList.remove("lazy"))
                    })), 0 == e.length && (document.removeEventListener("scroll", o), window.removeEventListener("resize", o), window.removeEventListener("orientationChange", o))
                }), 20)
            }
            e = document.querySelectorAll(".lazy"), document.addEventListener("scroll", o), window.addEventListener("resize", o), window.addEventListener("orientationChange", o)
        }
    }));

    // $("ul.fixedUL li a.buyOnline_login").click(function () {
    // alert("Login");
    //   $(".rhsBoxDetailWrap_login").toggleClass("activate");
    // $(".rhsBoxDetailWrap_login").addClass("activate");
    //$(".rhsBoxDetails .rhsboxWrap").eq(a).fadeIn().siblings(".rhsboxWrap").hide()
    //})
</script>
<input type="hidden" min="0.1" max="10" value="2.2" id="rate" step="1.1" />
<input type="hidden" min="0" max="2" value="1.1" step="0.1" id="pitch" />
<?php if ($_SERVER['REQUEST_URI'] != '/tax-saving-solutions') { ?>
    <select id="voices" style="display:none;">
        <option value="2" selected>2</option>
    </select>
<?php } ?>
<script defer src="./assets/js/speechtotext/textToSpeech.js"></script>
<?php if (($this->uri->segment('2') == 'savings-plan') || ($this->uri->segment('2') == 'online-term-insurance-plans') || ($this->uri->segment('2') == 'ulip-plan') || ($this->uri->segment('1') == 'term-insurance')) { ?>
    <script defer src="./assets/js/insurance-guide.js"></script>
<?php } ?>
<script>
    function productClick(e) {
        let t = $(e).attr("data-tag");
        lmSMTObj.track("productClick", {
            products: [{
                name: t
            }]
        }, (function() {}))
    }

    function validateEmail(e) {
        return 0 == /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(e.value) ? (document.getElementById("emails-error").innerHTML = "Please enter a valid email address.", document.getElementById("emails-error").classList.add("mystyle"), alert("Invalid Email Address"), !1) : (document.getElementById("emails-error").innerHTML = "", document.getElementById("emails-error").classList.remove("mystyle"), !0)
    }

    function valid_numbers() {
        let e = /^[6-9][0-9]{9}$/,
            t = document.getElementById("phone").value;
        10 == t.toString().length && (e.test(t) ? document.getElementById("phone-errors").innerHTML = "" : document.getElementById("phone-errors").innerHTML = "Please enter a valid phone number.")
    };
    $(document).ready((function() {
        $(".close-modal").on("click", (function() {
            alert("testing")
        }))
    }));
</script>

<script defer src="assets/js/global.js"></script>
<!--<script defer src="assets/js/vendor/rangeslider.min.js"></script>-->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.2.1/rangeslider.min.js"></script>
<!--<script defer src="assets/js/vendor/tipso.min.js"></script>-->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/tipso/1.0.5/tipso.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/formulajs/formulajs@2.5.0/dist/formula.min.js"></script>
<script>
    window.onload = function() {
        // Get the current URL
        var currentURL = window.location.href;
        // Clean the URL
        var cleanedURL = removeSpecialCharactersFromEnd(currentURL);

        // Update the URL if necessary
        if (cleanedURL !== currentURL) {
            // You may want to handle how you want to update the URL here, 
            // for example, redirect to the cleaned URL or update the href of links
            console.log("Original URL:", currentURL);
            console.log("Cleaned URL:", cleanedURL);
            window.location.href = cleanedURL;

        }
    };

    function removeSpecialCharactersFromEnd(url) {
        // Define the regex pattern to match special characters at the end of the URL
        var pattern = /[^\w\d\/#]+$/;;

        // Remove special characters from the end of the URL
        return url.replace(pattern, '');
    }
</script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 200) {
                $('.bottomNavProduct').addClass('fixed-bottom');
            } else {
                $('.bottomNavProduct').removeClass('fixed-bottom');
            }
        });
    });
    
    
</script>
<?php if ($_SERVER['REQUEST_URI'] == '/term-insurance' || $_SERVER['REQUEST_URI'] == '/ulip-plans' || $_SERVER['REQUEST_URI'] == '/savings-plan' || $_SERVER['REQUEST_URI'] == '/retirement-and-pension-plans') { ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var hash = window.location.hash;
                if (hash) {
                    var className = hash.substring(1); // Remove the '#' from the hash to get the class name
                    var element = document.querySelector('.' + className);
                    if (element) {
                        element.scrollIntoView();
                    }
                }
            }, 2000); // Adjust the timeout duration as needed
        });
    </script>

<?php } ?>
</body>

</html>