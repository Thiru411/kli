<?php 
if(!isset($_COOKIE['kotak_customer_type'])) {
	$customerType="";
}else{
	$customerType = get_cookie('kotak_customer_type');
}
//echo $customerType;die;
?>
<style>
    .f-width {
        width: 100% !important;
        padding-left: 0 !important;
    }

    .sub-title {
        font-size: 20px;
        text-align: center;
        padding: 4rem 0;
        font-weight: 600;
    }
   /* .footerUL_01 li:last-child{margin-bottom: 3rem;}*/
  
  
    .sitemapWrap .headDesc h1{margin-bottom: 0;}
    .sitemapWrap ul.footerUL_01>li, .sitemapWrap ul.footerUL>li>a{margin-bottom: 5px;}
    .sitemapWrap .sub-title{padding: 3rem 0;}
    .sitemapWrap .no-margin .footerUL_01{margin-top: 0;}
    .no-mar{margin-bottom: 0;}
    .f-width .footerUL{margin-bottom: 0;}
    .slink{margin-top: 10px !important;}
      @media only screen and (min-width: 768px) {  .sitemap-bread{top:120px} }
</style>
<section class="sitemap-bread">
    <article class="breadcrumb">
        <div class="midWrapper">
            <ul><?php echo $this->breadcrumb->output(); ?></ul>
        </div>
    </article>

    <article class="sitemapWrap">
        <div class="midWrapper">
            <div class="headDesc">
                <h1>Sitemap</h1>
                <a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a>
            </div>
            <!--<?=$customerType?>-->
            <div class="rowEle">
                <ul class="footerUL">
                    


                    <li><a href="<?php echo base_url(WKL_MODULE_LINK);?>">Why Kotak Life?</a>
                        <ul class="footerUL_01">
                            <li><a href="<?php echo base_url(WKL_MODULE_LINK.'/about-us'); ?>">About Us</a></li>
                            <li><a href="<?php echo base_url(WKL_MODULE_LINK.'/corporate-governance') ?>">Corporate Governance</a></li>
                            <li><a href="<?php echo base_url(WKL_MODULE_LINK.'/csr') ?>">CSR</a></li>
                            <li><a href="<?php echo base_url(WKL_MODULE_LINK.'/media-center') ?>">Media Center</a></li>
                            <li><a href="<?php echo base_url(WKL_MODULE_LINK.'/career') ?>">Career</a></li>
                            <li><a href="<?php echo base_url(WKL_MODULE_LINK.'/contact-us') ?>">Contact Us</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url(IG_MODULE_LINK);?>">Insurance Guide</a>
                        <ul class="footerUL_01">
                            <li> <a href="<?php echo base_url(IG_MODULE_LINK.'/about-life-insurance'); ?>">About Life Insurance</a></li>
                            <li> <a href="<?php echo base_url(IG_MODULE_LINK.'/government-schemes'); ?>">Government Schemes</a></li>
                            <li> <a href="<?php echo base_url(IG_MODULE_LINK.'/savingstax'); ?>">Savings & Tax</a></li>
                            <li> <a href="<?php echo base_url(IG_MODULE_LINK.'/protection'); ?>">Term Insurance</a></li>
                            <li> <a href="<?php echo base_url(IG_MODULE_LINK.'/wealth-creation'); ?>">ULIP</a></li>
                            <li> <a href="<?php echo base_url(IG_MODULE_LINK.'/retirement'); ?>">Retirement</a></li>
                            <li> <a href="<?php echo base_url(IG_MODULE_LINK.'/health-insurance'); ?>">Health Insurance</a></li>
                            <li> <a href="<?php echo base_url(IG_MODULE_LINK.'/glossary'); ?>">Glossary</a></li>
                        </ul>
                    </li>

                    <li><a href="<?=base_url()?>fund-performance">Fund Performance</a>
                        <ul class="footerUL_01">
                            <li> <a href="<?=base_url()?>fund-performance/fund-update">Fund Update</a></li>
                            <li> <a href="<?=base_url()?>fund-performance/investment-philosophy">Investment Philosophy</a></li>
                        </ul>
                        <a class="f-width fnt-16" href="<?=base_url()?>hiring-process">Hiring Process</a>
                        <a class="f-width fnt-16" href="<?=base_url()?>insurance-guide/policy-faqs">Policy FAQs</a>
                    </li>
                   <!-- <li><a href="<?=base_url()?>hiring-process">Hiring Process</a> </li>
                    <li><a href="<?=base_url()?>insurance-guide/policy-faqs">Policy FAQs</a> </li>-->
                    <li class="f-width">
                        <h6 class="sub-title">LIFE INSURANCE PLANS </h6>
                        <ul class="footerUL">

                            <li><a href="<?=base_url()?>term-insurance">Term Insurance Plans</a>
                                <ul class="footerUL_01">
                                <li>
                                <a href="https://www.kotaklife.com/term-insurance/kotak-gen2gen-protect" target="_blank">Kotak Gen2Gen Protect</a>
</li>
                                    <li> <a href="<?=base_url()?>online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance">Kotak e-Term</a></li>
                                    <!-- <li> <a href="<?=base_url()?>online-plans/online-term-insurance-plans/kotak-protect-india">Kotak Protect India</a></li> -->
                                    <li> <a href="<?=base_url()?>term-insurance/kotak-term-plan">Kotak Term Plan</a></li>
                                    <li> <a href="<?=base_url()?>insurance-plans/protection-plans/kotak-saral-jeevan-bima">Kotak Saral Jeevan Bima</a></li>
                                </ul>
                                <a class="slink" href="<?=base_url()?>insurance-plans/retirement-plans">Retirement Plans</a>
                                <ul class="footerUL_01">
                                    <li> <a href="<?=base_url()?>insurance-plans/retirement-plans/kotak-saral-pension">Kotak Saral Pension</a></li>
                                    <li> <a href="<?=base_url()?>insurance-plans/retirement-plans/kotak-assured-pension">Kotak Assured Pension</a></li>
                                    <li> <a href="<?=base_url()?>online-plans/retirement-pension-plans/kotak-lifetime-income-plan">Kotak Lifetime Income Plan</a></li>
                                    <li> <a href="<?=base_url()?>insurance-plans/retirement-plans/kotak-premier-pension-plan">Kotak Premier Pension Plan</a></li>
                                </ul>
                                <a class="slink" href="<?=base_url()?>insurance-plans/health-plans">Health Plans</a>
                                <ul class="footerUL_01">
                                    <li> <a href="<?=base_url()?>insurance-plans/health-plans/kotak-health-shield">Kotak Health Shield</a></li>
                                </ul>
                            </li>
                            <li><a href="<?=base_url()?>savings-plan">Savings Plans</a>
                                <ul class="footerUL_01">
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-assured-savings-plan">Kotak Assured Savings plan</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-guaranteed-savings-plan-online">Kotak Guaranteed Savings Plan</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-guaranteed-fortune-builder">Kotak Guaranteed Fortune Builder</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-fortune-maximiser">Kotak Fortune Maximiser</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-assured-income-accelerator">Kotak Assured Income Accelerator</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-premier-endowment-plan">Kotak Premier Endowment Plan</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-premier-moneyback-plan">Kotak Premier Moneyback Plan</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-classic-endowment-plan">Kotak Classic Endowment Plan</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-smartlife-plan">Kotak SmartLife Plan</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-premier-income-plan">Kotak Premier Income Plan</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-pos-bachat-bima">POS Bachat Bima Plan</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-sampoorn-bima-micro-insurance-plan">Kotak Sampoorn Bima Micro-Insurance Plan</a></li>
                                    <li> <a href="<?=base_url()?>savings-plan/kotak-premier-life-plan">Kotak Premier Life Plan</a></li>
                                </ul>
                                <a class="no-mar" href="<?=base_url()?>insurance-plans/insurance-plan-riders">Our Rider Solutionsans</a>
                            </li>


                            <li><a href="<?=base_url()?>ulip-plans">ULIP Plan</a>
                                <ul class="footerUL_01">
                                    <li> <a href="<?=base_url()?>ulip-plans/kotak-e-invest">Kotak e-Invest</a></li>
                                    <li> <a href="<?=base_url()?>ulip-plans/kotak-invest-maxima">Kotak Invest Maxima</a></li>
                                    <li> <a href="<?=base_url()?>ulip-plans/kotak-single-invest-plus">Kotak Single Invest Plus</a></li>
                                    <li> <a href="<?=base_url()?>ulip-plans/kotak-single-invest-advantage">Kotak Single Invest Advantage</a></li>
                                    <li> <a href="<?=base_url()?>ulip-plans/kotak-platinum-plan">Kotak Platinum Plan</a></li>
                                    <li> <a href="<?=base_url()?>ulip-plans/kotak-ace-investment-plan">Kotak Ace Investment</a></li>
                                    <li> <a href="<?=base_url()?>ulip-plans/kotak-wealth-optima-plan">Kotak Wealth Optima Plan</a></li>

                                </ul>
                                <a class="slink" href="#">Tools & Calculators</a>
                                <ul class="footerUL_01">
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/ulip-calculator">ULIP Calculator</a></li>
                                    <!--li> <a href="<?=base_url()?>financial-tools-calculators/income-tax-calculator">Income Tax Calculator</a></li-->
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/compound-interest-calculator">Compound Interest Calculator</a></li>
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/retirement-calculator">Retirement Calculator</a></li>
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/sip-calculator">SIP Calculator</a></li>
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/bmi-calculator">BMI Calculator</a></li>
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/hra-calculator">HRA Calculator</a></li>
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/fd-calculator">FD Calculator</a></li>
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/rd-calculator">RD Calculator</a></li>
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/gratuity-calculator">Gratuity Calculator</a></li>
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/ppf-calculator">PPF Calculator</a></li>
                                    <li> <a href="<?=base_url()?>financial-tools-calculators/dass-21-calculator">DASS 21 Calculator</a></li>







                                </ul>

                            </li>

                            <!--   
                     <li><a href="<?php echo base_url(OP_MODULE_LINK); ?>">Online Plans</a>
            <ul class="footerUL_01">
              <li> <a href="javascript:;">Protection Plan</a>
                <ul class="footerUL_02">
                  <li> <a href="<?php echo base_url(OP_MODULE_LINK.'/online-term-insurance-plans/kotak-preferred-e-term-plan');?>">Kotak Preferred e-Term Plan</a></li>
                </ul>
              </li>
              <li> <a href="javascript:;">Saving Plan</a>
                <ul class="footerUL_02">
                  <li> <a href="<?php echo base_url(OP_MODULE_LINK.'/online-savings-plans/kotak-e-assured-savings-plan');?>">Kotak e-Assured Savings Plan</a></li>
                </ul>
              </li>
              <li> <a href="javascript:;">Retirement Plan</a>
                <ul class="footerUL_02">
                  <li> <a href="<?php echo base_url(OP_MODULE_LINK.'/online-retirement-plans/kotak-e-lifetime-income-plan');?>">Kotak e-Lifetime Income Plan</a></li>
                </ul>
              </li>
            </ul>
          </li>-->
                        </ul>
                    </li>
                    
                        <li class="f-width">
                        <h6 class="sub-title">PURCHASE ONLINE </h6>
                        <ul class="footerUL no-margin">

                            <li>
                                <ul class="footerUL_01">
                                <li> <a   href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=sitemap" target="_blank">Buy Kotak Gen2Gen Protect</a> </li>

                                    <li> <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=sitemap">Buy Kotak e-Term</a></li>
                                    <!-- <li> <a href="https://www.kotaklife.com/buy-kotak-protect-india">Buy Kotak Protect India</a></li> -->
                                    <li> <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=sitemap">Get Kotak Guaranteed Fortune Builder</a></li>

                                </ul>
                            </li>
                             <li>
                                <ul class="footerUL_01">
                                    <li> <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=sitemap">Buy Kotak Assured Savings Plan</a></li>
                                    <li> <a href="https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=sitemap">Invest in Kotak Guaranteed Savings Plan</a></li>
                                   
                                </ul>
                            </li>
                             <li>
                                <ul class="footerUL_01">
                                    <li> <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=sitemap">Buy Kotak e-Invest</a></li>
                                    <!-- <li> <a href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=sitemap">Invest in Kotak Lifetime Income Plan</a></li> -->
                                     <li> <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=sitemap">Buy Kotak Assured Pension</a></li>
                                    
                                </ul>
                            </li>
                            </ul>
                    </li>
                    
                    <li class="f-width">
                        <h6 class="sub-title">GROUP INSURANCE PLANS </h6>
                        <ul class="footerUL">

                            <li><a href="<?=base_url()?>business-solutions/group-gratuity-leave-encashment">Group Gratuity/Leave Encashment</a>
                                <ul class="footerUL_01">
                                    <li> <a href="<?=base_url()?>business-solutions/group-gratuity-leave-encashment/kotak-corporate-benefit-plan">Kotak Corporate Benefit Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan">Kotak Leave Encashment Group Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-gratuity-leave-encashment/kotak-gratuity-plus-group-plan">Kotak Gratuity Plus Group Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-gratuity-leave-encashment/kotak-secure-return-employee-benefit-plan">Kotak Secure Return Employee Benefit Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-gratuity-leave-encashment/kotak-group-secure-capitalplan">Kotak Group Secure Capital Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-gratuity-leave-encashment/kotak-gratuity-group-plan">Kotak Gratuity Group Plan</a></li>
                                </ul>
                                <a class="slink" href="<?=base_url()?>business-solutions/group-term">Group Term</a>
                                <ul class="footerUL_01">
                                    <li> <a href="<?=base_url()?>business-solutions/group-term/kotak-pradhan-mantri-jeevan-jyoti-bima-yojana">Kotak Pradhan Mantri Jeevan Jyoti Bima Yojana</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-term/kotak-term-group-plan">Kotak Term Group Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-term/kotak-raksha-group-micro-insurance-plan">Kotak Raksha Group Micro Insurance Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-term/kotak-group-secure-one">Kotak Group Secure One</a></li>
                                </ul>
                            </li>
                             <li><a href="<?=base_url()?>business-solutions/group-superannuation">Group Superannuation Plans</a>
                                <ul class="footerUL_01">
                                    <li> <a href="<?=base_url()?>business-solutions/group-superannuation/kotak-corporate-benefit-plan-">Kotak Corporate Benefit Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-superannuation/kotak-secure-return-superannuation-plan">Kotak Secure Return Superannuation Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-superannuation/kotak-superannuation-group-plan-ii">Kotak Superannuation Group Plan – II</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-superannuation/kotak-group-secure-capital-plan">Kotak Group Secure Capital Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-superannuation/kotak-assured-return-employee-benefitplan">Kotak Assured Return Employee Benefit Plan</a></li>
                                   
                                </ul>
                                <a class="slink" href="<?=base_url()?>business-solutions/group-credit">Group Credit</a>
                                <ul class="footerUL_01">
                                    <li> <a href="<?=base_url()?>business-solutions/group-credit/kotak-credit-term-group-plan">Kotak Credit Term Group Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-credit/kotak-complete-cover-group-plan">Kotak Complete Cover Group Plan</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-credit/kotak-group-assure">Kotak Group Assure</a></li>
                                    <li> <a href="<?=base_url()?>business-solutions/group-credit/kotak-group-shield">Kotak Group Shield</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li><a href="<?=base_url()?>how-do-i">HOW DO I?</a>
                                <ul class="footerUL_01">
                                    <li> <a href="<?=base_url()?>how-do-i/pay-my-premium">Pay My Premium</a></li>
                                    <li> <a href="https://customer.kotaklifeinsurance.com/ocm">File a Claim</a></li>
                                    <li> <a href="<?=base_url()?>how-do-i/manage-my-policy">Manage My Policy</a></li>
                                    <li> <a href="<?=base_url()?>how-do-i/registerfor-ecs">Register For ECS/Autodebit</a></li>
                                    <li> <a href="<?=base_url()?>how-do-i/download-application-form">Download Application Forms</a></li>
                                    <li> <a href="<?=base_url()?>how-do-i/get-policy-brochure">Get Policy Brochure</a></li>
                                    <li> <a href="<?=base_url()?>how-do-i/check-policy-document-specimen">Check Policy Document Specimen</a></li>
                                    <li> <a href="<?=base_url()?>how-do-i/fund-update">Browse Fund Updates</a></li>
                                    <li> <a href="<?=base_url()?>how-do-i/understand-stages-of-application">Understand the Stages of My Application</a></li>
                                    <li> <a href="<?=base_url()?>how-do-i/apply-for-life-insurance-plan">Apply for a Life Insurance Plan</a></li>
                                    <li> <a href="<?=base_url()?>how-do-i/locate-kotak-branches">Locate a Kotak Life branch</a></li>
                                    <li> <a href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx">Download statements</a></li>
                                    <li> <a href="<?=base_url()?>how-do-i/verify-life-advisor">Verify My Life Advisor</a></li>
                                </ul>
                                
                            </li>
                            
                            
                            
                        </ul>
                    </li>


                   
                </ul>
            </div>


        </div>
    </article>
</section>
