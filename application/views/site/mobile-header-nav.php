<link rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://fonts.googleapis.com/css?family=Roboto:300,400,300italic,700,700italic" font-display="swap"  >

<header class="main_header">
  <nav class="navbar navbar-expand-lg navbar-light p-0" style="width:385px;height:40px">
    <div class="logo"><a class="navbar-brand logo" href="<?php echo base_url() ?>">
        <!--<img data-src="<?php echo base_url() ?>assets/mobile/images/kotak-logo.png" alt="Kotak Life Insurance - Logo" class="img-fluid lzy_img" height="20px" width="90px">--></a></div>
    <div class="whats_search ml-auto d-flex" style="width:217px;height:40px">
      <ul class="d-flex pl-0">
        <li class="align-self-center"><!-- <a  href="" class="whats_app">9321003007</a> -->
          <a rel="nofollow" href="https://api.whatsapp.com/send/?phone=919321003007&amp;text=Hi" class="whats_app" onclick="dataLayer.push({'event':'event top nav WhatsApp', 'category':'top nav', 'action':'Send Hi to 9321003007','label':<?= base_url ?>/search'});">9321003007</a>
        </li>
        <li class="align-self-center"><a href="" class="search_icon" data-toggle="modal" data-target="#exampleModal"><span>search</span></a></li>
      </ul>
      <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse options_list w-100" id="navbarSupportedContent">
      <div class="main_top">
        <div class="d-flex">
          <a href="<?php echo base_url() ?>switch-customer" class="switch">Switch customer type</a>
          <a href="javascript:void(0)" class="close_menu">Close</a>
        </div>
      </div>
      <!--NEW CUSTOMER---->
      <?php if ($customerType == 'new_customer' || $customerType == '') { ?>
        <div class="accordion mobile_options mt-5 pt-3" id="accordionExample">
          <!--<a  href="<?php //echo base_url()
                        ?>" class="btn btn-link btn-block text-left collapsed only-option">Home</a>-->
        
        <div class="card border-0">
            <div class="card-header" id="heading5">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?php echo base_url() ?>insurance-plans">Insurance Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                    <a href="<?php echo base_url() ?>term-insurance" class="li-head">Term Insurance Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                    <li><a itemprop="url" href="term-insurance/kotak-gen2gen-protect" data-customer-type="new_customer" class="arrow"><span itemprop="name">Kotak Gen2Gen Protect</span></a>
                                                <a href=" https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy"  target="_blank" target="_blank">Buy Online</a>
                                            </li>
                      <li><a href="<?php echo base_url() ?>term-insurance/kotak-e-term" class="arrow">Kotak e-Term</a> <a href="https://www.kotaklife.com/life-insurance-plans/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
                    
                      <li><a href="term-insurance/kotak-saral-jeevan-bima" class="arrow">Kotak Saral Jeevan Bima</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>term-insurance" class="pl-3 all_plans">View all Term Insurance Plans</a>
                  </li>




                  <li>
                    <a data-customer-type="new_customer" class="customer-type li-head" itemprop="url" href="javascript:viod(0)" class="<?php check_menu_active(2, 'ulip-plan') ?> li-head">ULIP Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a data-customer-type="new_customer" class="customer-type" href="ulip-plans/kotak-e-invest" class="arrow">Kotak e-Invest Plan</a>
                        <a href="https://www.kotaklife.com/life-insurance-plans/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
                      </li>
                      <li><a data-customer-type="new_customer" class="customer-type" href="ulip-plans/kotak-tulip" class="arrow">kotak T.U.L.I.P</a>
                        <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
                      </li>
                    </ul>
                    <a href="<?php echo base_url() ?>ulip-plans" class="pl-3 all_plans">View all ULIP Plans</a>
                  </li>



                  <li>
                    <a href="<?php echo base_url() ?>savings-plan" class="li-head">Savings Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="savings-plan/kotak-guaranteed-savings-plan-online" class="arrow">Kotak Guaranteed Savings Plan</a><a href="<?= base_url() ?>buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
                      <li><a href="<?php echo base_url('savings-plan/kotak-get-assured-income-now') ?>" class="arrow"><span>Kotak Get Assured Income Now</span></a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>savings-plan" class="pl-3 all_plans">View all Savings Plans</a>
                  </li>


                  <li>
                    <a href="<?php echo base_url() ?>guaranteed-wealth-builder/" class="li-head">Guaranteed Wealth Builder Plans</a>
                    <ul class="pl-0 sub-collapse-option">

                      <li><a href="savings-plan/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings plan</a><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a> </li>
                      <li><a href="savings-plan/kotak-guaranteed-fortune-builder" class="arrow">Kotak Guaranteed Fortune Builder</a><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>

                    </ul>                    <a href="<?php echo base_url()?>guaranteed-wealth-builder/" class="pl-3 all_plans">View all Guaranteed Wealth Builder Plans</a>

                  </li>





                  <li>
                    <a href="<?php echo base_url() ?>insurance-plans/retirement-plans" class="li-head">Retirement Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>insurance-plans/retirement-plans/kotak-saral-pension" class="arrow">Kotak Saral Pension</a></li>
                      <li><a href="<?php echo base_url() ?>insurance-plans/retirement-plans/kotak-assured-pension" class="arrow">Kotak Assured Pension</a>
                        <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online </a>
                      </li>
                      <li><a href="<?php echo base_url() ?>insurance-plans/retirement-plans/kotak-lifetime-income-plan" class="arrow">Kotak Lifetime Income Plan</a>
                        <!-- <a href="buy-annuity-plan/#/landing?utm_source=Annuity_organic&amp;utm_medium=website&amp;utm_campaign=top_menu" class="menu-buy">Buy Online </a> -->
                      </li>
                    </ul>
                    <a href="<?php echo base_url() ?>insurance-plans/retirement-plans" class="pl-3 all_plans">View all Retirement Plans</a>
                  </li>









                  <li>
                    <a href="<?php echo base_url() ?>insurance-plans/health-plans" class="li-head">Health Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>insurance-plans/health-plans/kotak-health-shield" class="arrow">Kotak Health Shield</a><!--<a  href="<?= base_url() ?>buy-health-insurance-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online</a>--></li>
                    </ul>
                    <a href="<?php echo base_url() ?>insurance-plans/health-plans" class="pl-3 all_plans">View all Health Plans</a>

                  </li>

                

                  <li><a href="<?php echo base_url() ?>insurance-plans/insurance-plan-riders" class="li-head pb-0">Our Rider Solutions</a></li>
                  <li><a href="<?php echo base_url() ?>kotakWebBI/" class="li-head pb-0">Tools & Calculators</a>


                  
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <!-- <a href="<?php echo base_url() ?>term-insurance" class="btn btn-link btn-block text-left collapsed only-option">Term Insurance</a> -->
          <div class="card border-0">
            <div class="card-header" id="heading133">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?php echo base_url() ?>term-insurance" class="">Term Insurance</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse133" aria-expanded="false" aria-controls="collapse133">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse133" class="collapse " aria-labelledby="heading133" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                                     <li><a href="https://www.kotaklife.com/term-insurance" target="_blank" class=""><span itemprop="name">Term Life Insurance Plan</span></a></li>
                                    <!--li><a  href="financial-tools-calculators/income-tax-calculator" target="_blank" class=""><span itemprop="name">Income Tax Calculator</span></a></li-->
                                    <li><a href="<?=base_url()?>term-insurance/1-crore-term-insurance" target="_blank" class=""><span itemprop="name">1 Crore Term Insurance</span></a></li>
                                    <li><a href="<?=base_url()?>term-insurance/2-crore-term-insurance" target="_blank" class=""><span itemprop="name">2 Crore Term Insurance</span></a></li>
                                    <li><a href="<?=base_url()?>term-insurance/term-plan-with-return-of-premium" target="_blank" class=""><span itemprop="name">Term Plan with Return of Premium</span></a></li>
                                    <li><a href="<?=base_url()?>term-insurance/term-insurance-for-nri" target="_blank" class=""><span itemprop="name">Term Insurance for NRI</span></a></li>
                                    <li><a href="<?=base_url()?>term-insurance/term-insurance-for-women" target="_blank" class=""><span itemprop="name">Term Insurance for Women</span></a></li>
                                     <li><a href="<?=base_url()?>term-insurance/term-insurance-for-smokers" target="_blank" class=""><span itemprop="name">Term Insurance for Smokers</span></a></li>
                                     <li><a href="<?=base_url()?>term-insurance/term-insurance-for-housewife" target="_blank" class=""><span itemprop="name">Term Insurance for Housewife</span></a></li>
                                     <li><a href="<?=base_url()?>financial-tools-calculators/term-insurance-calculator" target="_blank" class=""><span itemprop="name">Term Insurance Calculator</span></a></li>
                                     <li><a href="<?=base_url()?>term-insurance/claim-settlement-ratio" target="_blank" class=""><span itemprop="name">Claim Settlement Ratio</span></a></li>
                                     <li><a href="<?=base_url()?>term-insurance/whole-life-insurance" target="_blank" class=""><span itemprop="name">Whole Life Insurance</span></a></li>



                </ul>
              </div>
            </div>
          </div>
          <!--calculate premium ^-->
          <div class="card border-0">
            <div class="card-header" id="heading13">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?php echo base_url() ?>insurance-guide">Calculators</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse13" class="collapse " aria-labelledby="heading13" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                <li><a href="financial-tools-calculators/ulip-calculator/" target="_blank" class=""><span itemprop="name">ULIP Calculator</span></a></li>
                                    <!--li><a  href="financial-tools-calculators/income-tax-calculator" target="_blank" class=""><span itemprop="name">Income Tax Calculator</span></a></li-->
                                    <li><a href="financial-tools-calculators/compound-interest-calculator" target="_blank" class=""><span itemprop="name">Compound Interest Calculator</span></a></li>
                                    <li><a href="financial-tools-calculators/retirement-calculator" target="_blank" class=""><span itemprop="name">Retirement Calculator</span></a></li>
                                    <li><a href="financial-tools-calculators/sip-calculator" target="_blank" class=""><span itemprop="name">SIP Calculator</span></a></li>
                                    <li><a href="financial-tools-calculators/bmi-calculator" target="_blank" class=""><span itemprop="name">BMI Calculator</span></a></li>
                                    <li><a href="financial-tools-calculators/hra-calculator" target="_blank" class=""><span itemprop="name">HRA Calculator</span></a></li>
                                     <li><a href="financial-tools-calculators/fd-calculator" target="_blank" class=""><span itemprop="name">FD Calculator</span></a></li>
                                     <li><a href="financial-tools-calculators/rd-calculator" target="_blank" class=""><span itemprop="name">RD Calculator</span></a></li>
                                     <li><a href="financial-tools-calculators/dass-21-calculator" target="_blank" class=""><span itemprop="name">DASS 21 Calculator</span></a></li>
                                     <li><a href="financial-tools-calculators/term-insurance-calculator" target="_blank" class=""><span itemprop="name">Term Insurance Calculator</span></a></li>



                </ul>
              </div>
            </div>
          </div>



          <div class="card border-0">
            <div class="card-header" id="heading3">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?php echo base_url() ?>insurance-guide">Insurance Guide</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                  <li><a href="<?php echo base_url() ?>insurance-guide/about-life-insurance" class="">About Life Insurance</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/protection" class="">Protection</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/wealth-creation" class="">Wealth Creation</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/retirement" class="">Retirement</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/savingstax" class="">Savings &amp; Tax</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/government-schemes" class="">Government Schemes</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/health-insurance" class="">Health Insurance</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/book-summary" class="">Book Summary</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/current-affairs" class="">Current affairs</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/glossary" class="">Glossary</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-stories" class="">Insurance Stories</a></li>


                </ul>
              </div>
            </div>
          </div>
          


          <div class="card border-0">
            <div class="card-header" id="heading6">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?php echo base_url() ?>business-solutions">Group Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse6" class="collapse " aria-labelledby="heading6" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                    <a href="<?php echo base_url() ?>business-solutions/group-gratuity-leave-encashment" class="li-head">Group Gratuity/Leave Encashment</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>business-solutions/group-gratuity-leave-encashment/kotak-gratuity-group-plan" class="arrow">Kotak Gratuity Group Plan</a></li>
                      <li><a href="<?php echo base_url() ?>business-solutions/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan" class="arrow">Kotak Leave Encashment Group Plan</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>business-solutions/group-gratuity-leave-encashment" class="pl-3 all_plans">View all Group Gratuity/Leave Encashment plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>business-solutions/group-superannuation" class="li-head">Group Superannuation</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>business-solutions/group-superannuation/kotak-secure-return-superannuation-plan" class="arrow">Kotak Secure Return Superannuation Plan</a></li>
                      <li><a href="<?php echo base_url() ?>business-solutions/group-superannuation/kotak-superannuation-group-plan-ii" class="arrow">Kotak Superannuation Group Plan - II</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>business-solutions/group-superannuation" class="pl-3 all_plans">View all Group Superannuation plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>business-solutions/group-term" class="li-head">Group Term</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>business-solutions/group-term/kotak-term-group-plan" class="arrow">Kotak Term Group Plan</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>business-solutions/group-term" class="pl-3 all_plans">View all Group Term plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>business-solutions/group-credit" class="li-head">Group Credit</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>business-solutions/group-credit/kotak-complete-cover-group-plan" class="arrow">Kotak Complete Cover Group Plan</a></li>
                      <li><a href="<?php echo base_url() ?>business-solutions/group-credit/kotak-group-assure" class="arrow">Kotak Group Assure</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>business-solutions/group-credit" class="pl-3 all_plans">View all Group Credit plans</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="card border-0">
            <div class="card-header" id="heading7">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a data-customer-type="new_customer" class="customer-type" href="<?php echo base_url() ?>how-do-i">
                    How Do I
                  </a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li><a href="<?php echo base_url() ?>how-do-i/pay-my-premium" data-customer-type="new_customer" class="customer-type">Pay My Premium</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/individual-claim" data-customer-type="new_customer" class="customer-type">File a Claim</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/manage-my-policy" data-customer-type="new_customer" class="customer-type">Manage My Policy</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/download-application-form" data-customer-type="new_customer" class="customer-type">Download Application Forms</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/get-policy-brochure" data-customer-type="new_customer" class="customer-type">Get Policy Brochure</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/check-policy-document-specimen" data-customer-type="new_customer" class="customer-type">Check Policy Document Specimen</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/fund-update" data-customer-type="new_customer" class="customer-type">Browse Fund Updates</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/	understand-stages-of-application" data-customer-type="new_customer" class="customer-type">Understand the Stages of My Application</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/apply-for-life-insurance-plan" data-customer-type="new_customer" class="customer-type">Apply for a Life Insurance Plan</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/locate-kotak-branches" data-customer-type="new_customer" class="customer-type">Locate a Kotak Life branch</a></li>
                  <li><a rel="nofollow" href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" data-customer-type="new_customer" class="customer-type">Download Statements</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/verify-life-advisor" data-customer-type="new_customer" class="customer-type">Verify My Life Advisor</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/registerfor-ecs" data-customer-type="new_customer" class="customer-type">Register For ECS</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/policy-faqs" class="">Policy FAQs</a></li>


                </ul>
              </div>
            </div>
            
            
            <div class="card border-0">
            <!-- <h2 class="mb-0 position-relative"> for test purpose-->
            <h2 class="mb-0 position-relative">
              <div class="card-header" id="headingTwo">
                <div class="position-option"><a href="<?php echo base_url() ?>why-kotak-life">Why Kotak Life?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="ml-auto"><img height="16" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png" alt="arrow" class="lzy_img"></div>
                </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body p-0">
              <ul class="pl-0">
                <li><a href="<?php echo base_url() ?>why-kotak-life/about-us">About Us</a></li>
                <li><a href="<?php echo base_url() ?>why-kotak-life/corporate-governance">Corporate Governance</a></li>
                <li><a href="<?php echo base_url() ?>why-kotak-life/csr">CSR</a></li>
                <li><a href="<?php echo base_url() ?>why-kotak-life/media-center">Media Center</a></li>
                <li><a href="<?php echo base_url() ?>why-kotak-life/career">Career</a></li>
                <li><a href="<?php echo base_url() ?>why-kotak-life/contact-us">Contact Us</a></li>
              </ul>
            </div>
          </div>
            
            
          </div>
          <div class="rem-buy-cal dis-none">
            <div class="float-right">
              <img data-src="<?php echo base_url() ?>assets/mobile/images/cancel.png" alt="arrow" class="lzy_img img-fluid cross-red dis-red">
            </div>
            <div>
              <p class="buy-text">Buy a Life Insurance Plan in a few clicks</p>
              <p class="now">
                Now you can buy life insurance plan online.
              </p>
            </div>
            <div class="kotak-plan pt-10">
              <div>
                <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" data-src="<?= base_url() ?>assets/images/mb/Kotak-Preferred-e-term.webp" class="lzy_img img-fluid">
              </div>
              <p class="kotak-e">Kotak e-Term Plan</p>
              <p class="plan-pure"> Kotak e-Term Plan provides a high level of protection to your loved ones in your absence.</p>
              <div class="d-flex">
                <div>
                  <a target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href="<?php echo base_url() ?>online-plans/online-term-insurance-plans" class="link">Know more</a>
                </div>
                <div>

                  <a target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href="https://www.kotaklife.com/life-insurance-plans/buy-kotak-eterm?utm_source=organic&amp;utm_medium=website&amp;utm_campaign=sticky_buy_online&amp;utm_content=sticky_eterm" target="_blank" class="link onlineBuy buy-hover">Get a FREE Quote</a>
                </div>
              </div>
            </div>

            <div class="kotak-plan pt-40">
              <div>
                <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" data-src="<?= base_url() ?>assets/images/Kotak-Preferred-e-term.png" class="lzy_img img-fluid">
              </div>
              <p class="kotak-e">Kotak Assured Savings Plan</p>
              <p class="plan-pure"> Kotak Assured Savings Plan is an insurance plan that offers you the dual benefit of returns and life cover and ensures that your goals are sorted, while safeguarding your family’s financial future in case of unforeseen incidents.
              <p>
              <div class="d-flex">
                <div>
                  <a target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href="<?php echo base_url() ?>savings-plan/buy-kotak-assured-savings-plan" class="link">Know more</a>
                </div>
                <div>

                  <a target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href="<?= base_url() ?>buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_kasp " target="_blank" class="link onlineBuy buy-hover"> Get a FREE Quote</a>
                </div>
              </div>
            </div>

            <div class="kotak-plan pt-40">
              <div>
                <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" data-src="<?php echo base_url() ?>assets/images/Kotak-Preferred-e-term.png" class="lzy_img img-fluid">
              </div>
              <p class="kotak-e">Kotak E-Invest Plan</p>
              <p class="plan-pure"> Kotak e-Invest plan is a complete Unit-Linked Insurance Plan that can be customized as per your goals and needs.</p>
              <div class="d-flex">
                <div>
                  <a target="_blank" onClick="dataLayer.push({'event':'event side menu buy online', 'category':'<?php echo $gaCat; ?>', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href="ulip-plan/kotak-e-invest" class="link">Know more</a>
                </div>
                <div>
                  <a target="_blank" onClick="dataLayer.push({'event':'event side menu buy online', 'category':'<?php echo $gaCat; ?>', 'action':'buy online','label':'buy online|Kotak e-Invest Plan'});" href="https://www.kotaklife.com/life-insurance-plans/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_ulip" rel="follow" target="_blank" class="link onlineBuy buy-hover">Buy Online</a>
                </div>
              </div>
            </div>

          </div>


        </div>
        <!--NEW CUSTOMER END---->


        <!--EXISTING CUSTOMER START---->
      <?php } else if ($customerType == 'existing_customer') { ?>
        <!--<a  href="<?php //echo base_url() 
                      ?>" class="btn btn-link btn-block text-left collapsed only-option">Home</a>-->
        <div class="accordion mobile_options mt-5 pt-3" id="accordionExample">

          <div class="card border-0">

            <div class="card-header" id="heading70">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?php echo base_url() ?>how-do-i" data-customer-type="existing_customer" class="customer-type">How Do I?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse70" aria-expanded="false" aria-controls="collapse70">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse70" class="collapse " aria-labelledby="heading70" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li><a href="<?php echo base_url() ?>how-do-i/pay-my-premium" data-customer-type="existing_customer" class="customer-type">Pay My Premium</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/individual-claim" data-customer-type="existing_customer" class="customer-type">File a Claim</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/manage-my-policy" data-customer-type="existing_customer" class="customer-type">Manage My Policy</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/download-application-form" data-customer-type="existing_customer" class="customer-type">Download Application Forms</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/get-policy-brochure" data-customer-type="existing_customer" class="customer-type">Get Policy Brochure</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/check-policy-document-specimen" data-customer-type="existing_customer" class="customer-type">Check Policy Document Specimen</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/fund-update" data-customer-type="existing_customer" class="customer-type">Browse Fund Updates</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/understand-stages-of-application" data-customer-type="existing_customer" class="customer-type">Understand the Stages of My Application</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/apply-for-life-insurance-plan" data-customer-type="existing_customer" class="customer-type">Apply for a Life Insurance Plan</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/locate-kotak-branches" data-customer-type="existing_customer" class="customer-type">Locate a Kotak Life branch</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/verify-life-advisor" data-customer-type="existing_customer" class="customer-type">Verify My Life Advisor</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/policy-faqs" class="">Policy FAQs</a></li>

                  <li><a rel="nofollow" href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" data-customer-type="existing_customer" class="customer-type">Download Statements</a></li>

                </ul>
              </div>

            </div>

          </div>

          <!--fund performance v-->

          <div class="card border-0">
            <div class="card-header" id="heading7">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a data-customer-type="existing_customer" class="customer-type" href="<?= base_url() ?>fund-performance">Fund Performance</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li><a href="<?= base_url() ?>fund-performance/nav-performance" data-customer-type="existing_customer" class="customer-type">Nav Performance</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/check-policy-document-specimen" data-customer-type="existing_customer" class="customer-type">Fund Update</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/fund-update" data-customer-type="existing_customer" class="customer-type">Investment Philosophy</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/understand-stages-of-application" data-customer-type="existing_customer" class="customer-type">Investment Fund FAQs</a></li>

                </ul>
              </div>

            </div>

          </div>

          <!--fund performance ^-->
<!--insurance plans v-->
<div class="card border-0">
            <div class="card-header" id="heading5">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?php echo base_url() ?>">Insurance Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                    <a href="<?php echo base_url() ?>term-insurance" class="li-head">Term Insurance Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                    <li><a itemprop="url" href="term-insurance/kotak-gen2gen-protect" data-customer-type="new_customer" class="arrow"><span itemprop="name">Kotak Gen2Gen Protect</span></a>
                                                <a href=" https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=g2g_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy"  target="_blank" target="_blank">Buy Online</a>
                                            </li>
                      <li><a href="<?php echo base_url() ?>term-insurance/kotak-e-term" class="arrow">Kotak e-Term</a> <a href="https://www.kotaklife.com/life-insurance-plans/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Get a FREE Quote</a></li>
                     
                      <li><a href="term-insurance/kotak-saral-jeevan-bima" class="arrow">Kotak Saral Jeevan Bima</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>term-insurance" class="pl-3 all_plans">View all Term Insurance Plans</a>
                  </li>



                  <li>
                    <a data-customer-type="existing_customer" class="customer-type li-head" itemprop="url" href="javascript:viod(0)" class="<?php check_menu_active(2, 'ulip-plan') ?> li-head">ULIP Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a data-customer-type="existing_customer" class="customer-type" href="ulip-plans/kotak-e-invest" class="arrow">Kotak e-Invest Plan</a>
                        <a href="https://www.kotaklife.com/life-insurance-plans/buy-e-invest-ulip-plan-onlineutm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>

                      </li>

                    </ul>
                    <a href="<?php echo base_url() ?>ulip-plans" class="pl-3 all_plans">View all ULIP Plans</a>


                  </li>





                  <li>
                    <a href="<?php echo base_url() ?>savings-plan" class="li-head">Savings Plans</a>
                    <ul class="pl-0 sub-collapse-option">

                      <li><a href="savings-plan/kotak-guaranteed-savings-plan-online" class="arrow">Kotak Guaranteed Savings Plan</a><a href="<?= base_url() ?>buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>

                      <li><a href="<?php echo base_url('savings-plan/kotak-get-assured-income-now') ?>" class="arrow"><span>Kotak Get Assured Income Now</span></a></li>

                    </ul>
                    <a href="<?php echo base_url() ?>savings-plan" class="pl-3 all_plans">View all Savings Plans</a>
                  </li>


                  <li>
                    <a href="<?php echo base_url() ?>guaranteed-wealth-builder/" class="li-head">Guaranteed Wealth Builder Plans</a>
                    <ul class="pl-0 sub-collapse-option">

                      <li><a href="savings-plan/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings plan</a><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a> </li>
                      <li><a href="savings-plan/kotak-guaranteed-fortune-builder" class="arrow">Kotak Guaranteed Fortune Builder</a><a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
                      <li><a href="<?php echo base_url('savings-plan/kotak-get-assured-income-now') ?>" class="arrow"><span>Kotak Get Assured Income Now</span></a></li>

                    </ul>
                    <a href="<?php echo base_url() ?>guaranteed-wealth-builder/" class="pl-3 all_plans">View all Guaranteed Wealth Builder Plans</a>

                  </li>




                  <li>
                    <a href="<?php echo base_url() ?>insurance-plans/retirement-plans" class="li-head">Retirement Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>insurance-plans/retirement-plans/kotak-saral-pension" class="arrow">Kotak Saral Pension</a></li>
                      <li><a href="<?php echo base_url() ?>insurance-plans/retirement-plans/kotak-assured-pension" class="arrow">Kotak Assured Pension</a>
                        <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online </a>
                      </li>
                      <li><a href="<?php echo base_url() ?>insurance-plans/retirement-plans/kotak-lifetime-income-plan" class="arrow">Kotak Lifetime Income Plan</a>
                        <a href="buy-annuity-plan/#/landing?utm_source=Annuity_organic&amp;utm_medium=website&amp;utm_campaign=top_menu" class="menu-buy">Buy Online </a>
                      </li>
                    </ul>
                    <a href="<?php echo base_url() ?>insurance-plans/retirement-plans" class="pl-3 all_plans">View all Retirement Plans</a>
                  </li>





                  <li>
                    <a href="<?php echo base_url() ?>insurance-plans/health-plans" class="li-head">Health Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>insurance-plans/health-plans/kotak-health-shield" class="arrow">Kotak Health Shield</a><!--<a  href="<?= base_url() ?>buy-health-insurance-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online</a>--></li>
                    </ul>
                    <a href="<?php echo base_url() ?>insurance-plans/health-plans" class="pl-3 all_plans">View all Health Plans</a>

                  </li>
                
                  <li><a href="<?php echo base_url() ?>insurance-plans/insurance-plan-riders" class="li-head pb-0">Our Rider Solutions</a></li>
                  <li><a href="<?php echo base_url() ?>kotakWebBI/" class="li-head pb-0">Tools & Calculators</a>


                   
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--insurance plans^-->
           <!--calculate premium ^-->
           <div class="card border-0">
            <div class="card-header" id="heading14">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?php echo base_url() ?>insurance-guide">Calculators</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse14" class="collapse " aria-labelledby="heading14" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                <li><a href="financial-tools-calculators/ulip-calculator/" target="_blank" class=""><span itemprop="name">ULIP Calculator</span></a></li>
                                    <!--li><a  href="financial-tools-calculators/income-tax-calculator" target="_blank" class=""><span itemprop="name">Income Tax Calculator</span></a></li-->
                                    <li><a href="financial-tools-calculators/compound-interest-calculator" target="_blank" class=""><span itemprop="name">Compound Interest Calculator</span></a></li>
                                    <li><a href="financial-tools-calculators/retirement-calculator" target="_blank" class=""><span itemprop="name">Retirement Calculator</span></a></li>
                                    <li><a href="financial-tools-calculators/sip-calculator" target="_blank" class=""><span itemprop="name">SIP Calculator</span></a></li>
                                    <li><a href="financial-tools-calculators/bmi-calculator" target="_blank" class=""><span itemprop="name">BMI Calculator</span></a></li>
                                    <li><a href="financial-tools-calculators/hra-calculator" target="_blank" class=""><span itemprop="name">HRA Calculator</span></a></li>
                                     <li><a href="financial-tools-calculators/fd-calculator" target="_blank" class=""><span itemprop="name">FD Calculator</span></a></li>
                                     <li><a href="financial-tools-calculators/rd-calculator" target="_blank" class=""><span itemprop="name">RD Calculator</span></a></li>
                                     <li><a href="financial-tools-calculators/dass-21-calculator" target="_blank" class=""><span itemprop="name">DASS 21 Calculator</span></a></li>
                                     <li><a href="financial-tools-calculators/term-insurance-calculator" target="_blank" class=""><span itemprop="name">Term Insurance Calculator</span></a></li>


                </ul>
              </div>
            </div>
          </div>
          <!--insurance guide v-->
          <div class="card border-0">
            <div class="card-header" id="heading3">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?php echo base_url() ?>insurance-guide">Insurance Guide</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">

                  <div class="ml-auto"><img class="lzy_img" height="16" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                  <li><a href="<?php echo base_url() ?>insurance-guide/about-life-insurance" class="">About Life Insurance</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/protection" class="">Protection</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/wealth-creation" class="">Wealth Creation</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/retirement" class="">Retirement</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/savingstax" class="">Savings &amp; Tax</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/government-schemes" class="">Government Schemes</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/health-insurance" class="">Health Insurance</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/book-summary" class="">Book Summery</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/glossary" class="">Glossary</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-stories" class="">Insurance Stories</a></li>

                </ul>
              </div>
            </div>
          </div>

      
         
          

          <!--group plans v-->
          <div class="card border-0">
            <div class="card-header" id="heading6">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>business-solutions">Group Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">

                  <div class="ml-auto"><img height="16" class="lzy_img" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png" alt="arrow"></div>
                </button>
              </h2>
            </div>
            <div id="collapse6" class="collapse " aria-labelledby="heading6" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                    <a href="<?php echo base_url() ?>business-solutions/group-gratuity-leave-encashment" data-customer-type="existing_customer" class="customer-type li-head">Group Gratuity/Leave Encashment</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>business-solutions/group-gratuity-leave-encashment/kotak-gratuity-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Gratuity Group Plan</a></li>
                      <li><a href="<?php echo base_url() ?>business-solutions/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Leave Encashment Group Plan</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>business-solutions/group-gratuity-leave-encashment" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Gratuity/Leave Encashment plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>business-solutions/group-superannuation" data-customer-type="existing_customer" class="customer-type li-head">Group Superannuation</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>business-solutions/group-superannuation/kotak-secure-return-superannuation-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Secure Return Superannuation Plan</a></li>
                      <li><a href="<?php echo base_url() ?>business-solutions/group-superannuation/kotak-superannuation-group-plan-ii" data-customer-type="existing_customer" class="customer-type arrow">Kotak Superannuation Group Plan - II</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>business-solutions/group-superannuation" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Superannuation plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>business-solutions/group-term" data-customer-type="existing_customer" class="customer-type li-head">Group Term</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>business-solutions/group-term/kotak-term-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Term Group Plan</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>business-solutions/group-term" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Term plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>business-solutions/group-credit" data-customer-type="existing_customer" class="customer-type li-head">Group Credit</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>business-solutions/group-credit/kotak-complete-cover-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Complete Cover Group Plan</a></li>
                      <li><a href="<?php echo base_url() ?>business-solutions/group-credit/kotak-group-assure" data-customer-type="existing_customer" class="customer-type arrow">Kotak Group Assure</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>business-solutions/group-credit" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Credit plans</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--group plans ^-->



          <div class="card border-0">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life">Why Kotak Life?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                  <div class="ml-auto"><img height="16" class="lzy_img" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>

            </div>
            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                  <li><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/about-us">About Us</a></li>
                  <li><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/corporate-governance">Corporate Governance</a></li>
                  <li><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/csr">CSR</a></li>
                  <li><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/media-center">Media Center</a></li>
                  <li><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/career">Career</a></li>
                  <li><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/contact-us">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>



        <!---Existing CUstomer End--->


      <?php } else if ($customerType == 'life_advisor') { ?>
        <div class="accordion mobile_options mt-5 pt-3" id="accordionExample">

          <!--<a  href="<?php //echo base_url() 
                        ?>" class="btn btn-link btn-block text-left collapsed only-option">Home</a>-->

          <div class="card border-0">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life">Why Kotak Life?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                  <div class="ml-auto"><img height="16" class="lzy_img" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>

            </div>
            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                  <li><a data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/about-us">About Us</a></li>
                  <li><a data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/corporate-governance">Corporate Governance</a></li>
                  <li><a data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/csr">CSR</a></li>
                  <li><a data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/media-center">Media Center</a></li>
                  <li><a data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life/contact-us">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>




          <div class="card border-0">
            <div class="card-header" id="heading4">
              <a href="<?= base_url() ?>career-as-life-advisor" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">Career as a Life Advisor</a>
            </div>
          </div>

          <div class="card border-0">
            <div class="card-header" id="heading4">
              <a href="<?= base_url() ?>hiring-process" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">Hiring Process</a>
            </div>
          </div>


          <div class="card border-0">
            <div class="card-header" id="heading4">
              <a href="<?= base_url() ?>how-do-i/verify-life-advisor" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">Know Our Life Advisors</a>
            </div>
          </div>

          <div class="card border-0">
            <div class="card-header" id="heading4">
              <a href="<?= base_url() ?>life-advisor-faqs" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">FAQ'S</a>
            </div>
          </div>

          <div class="card border-0">
            <div class="card-header" id="heading7">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?= base_url() ?>fund-performance">Fund Performance</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">

                  <div class="ml-auto"><img height="16" class="lzy_img" alt="arrow" data-src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li><a href="<?php echo base_url() ?>how-do-i/check-policy-document-specimen" data-customer-type="life_advisor" class="customer-type">Fund Update</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/fund-update" data-customer-type="life_advisor" class="customer-type">Investment Philosophy</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/understand-stages-of-application" data-customer-type="life_advisor" class="customer-type">Investment Fund FAQs</a></li>

                </ul>
              </div>

            </div>

          </div>


        </div>
      <?php } ?>

    </div>
  </nav>

</header>