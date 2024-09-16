
<style>
.btn-life{
    padding: 0px 30px ! important;
    background: #da251c ! important;
    font-size: 1.4em ! important;
    text-transform: uppercase ! important;
    border-radius: 30px ! important;
     border:none !important;
    display: table ! important;
    color: #fff ! important;
    letter-spacing: 1px ! important;
    transition: all ease 0.5s;
    -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    -o-transition: all ease 0.5s;
    line-height: 50px ! important;
    height: 50px ! important;}
    .btn-life:hover{background: #fc453c !important;}
</style>
<?php 
	if(get_cookie('kotak_customer_type')){
		$cusType = get_cookie('kotak_customer_type');
	}else{
		$cusType = "new_customer";
	}

	$arrDaf = array("download-application-form","policy-servicing-forms","major-revival-policy-forms","application-form-riders");
	$arrGpb = array("get-policy-brochure","brochure-savings-and-investments","brochure-child-plans","brochure-retirement-plans");
	$arrCpd = array("check-policy-document-specimen","check-policy-document-specimen-savings-and-investments","check-policy-document-specimen-retirement-plans","check-policy-document-specimen-child-plans","check-policy-document-specimen-group-plans","check-policy-document-specimen-riders");
	$arrCla = array("career-as-life-advisor","our-executive-advisors");
	
	if($cusType == "new_customer"){
		$gaCat = "New Customer";
	}else if($cusType == "existing_customer"){
		$gaCat = "Existing Customer";
	}else if($cusType == "life_advisor"){
		$gaCat = "Life Advisors";
	}
	 //  echo $cusType."====Testing".$gaCat;
?>
<header>

  <div class="logoW">
    <div class="vCenterWrap"> <a href="<?php echo base_url() ?>" class="logo" onClick="dataLayer.push({'event':'event top nav logo', 'category':'top nav', 'action':'logo click','label':'<?php echo current_url(); ?>'});"><img src="<?=base_url()?>assets/images/kotak-logo.png" alt="Kotak Life Insurance - Logo" title="Kotak Life Insurance - Logo" ></a> </div>
  </div>
  <div class="navWrap">
    <nav>
      <div class="topNavMenu">
        <div class="vCenterWrap"> <a href="<?php echo base_url()?>switch-customer" class="switchCust">Switch customer type</a><a href="javascript:;" class="closeMenu">Close menu</a></div>
      </div>
      
	  <ul class="navUL">
        <li><a href="javascript:;" data-customer-type="new_customer"  class="customer-type <?php echo ($cusType == 'new_customer') ? 'selected' : '' ?>" onClick="dataLayer.push({'event':'event top menu', 'category':'New Customers', 'action':'top nav click','label':'<?php echo current_url(); ?>'});">New Customers</a>
		  <?php if($cusType=="new_customer"){ ?>
          <div class="second_navWrap">
            <ul class="second_navUL">
              <li class="<?php is_home() ?>"><a itemprop="url" href="<?php echo base_url() ?>" class=""><span itemprop="name">Home</span></a></li>
              <li class="thirdLevel <?php check_menu_active(1, WKL_MODULE_LINK) ?> ">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="why kotak life?" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK) ?>" ><span itemprop="name">Why Kotak Life?</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL">
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/about-us') ?>" class="<?php check_menu_active(2, 'about-us') ?>"><img src="<?php echo base_url()?>assets/images/menu-AboutKLI.png"><span itemprop="name">About Us</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/corporate-governance') ?>" class="<?php check_menu_active(2, 'corporate-governance') ?>"><img src="<?php echo base_url()?>assets/images/menu-CorporateGovernance.png"><span itemprop="name">Corporate Governance</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/media-center') ?>" class="<?php check_menu_active(2, 'media-center') ?>"><img src="<?php echo base_url()?>assets/images/menu-MediaCenter.png"><span itemprop="name">Media Center</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/career') ?>" class="<?php check_menu_active(2, 'career') ?>"><img src="<?php echo base_url()?>assets/images/menu-Career.png"><span itemprop="name">Career</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/contact-us') ?>" class="<?php check_menu_active(2, 'contact-us') ?>"><img src="<?php echo base_url()?>assets/images/menu-Contact.png"><span itemprop="name">Contact Us</span></a></li>
                  </ul>
                </div>
				
              </li>
			  
			  
			   
			   
              <li class="thirdLevel <?php check_menu_active(1, IG_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="insurance guide" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(IG_MODULE_LINK); ?>"><span itemprop="name">Insurance Guide</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL4">
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/about-life-insurance'); ?>" class="<?php check_menu_active(2, 'about-life-insurance') ?>"><img src="<?php echo base_url()?>assets/images/menu-AboutLifeInsurance.png"><span itemprop="name"> About Life Insurance</span></a></li>
					<!--<li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/family'); ?>" class="<?php check_menu_active(2, 'family') ?>"><img src="<?php echo base_url()?>assets/images/menu-Family.png"><span itemprop="name">Family</span> </a></li> -->
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/wealth-creation'); ?>" class="<?php check_menu_active(2, 'wealth-creation') ?>"><img title="Icon for wealth creation" alt="Icon for wealth creation" src="<?php echo base_url()?>assets/images/menu-WealthCreation.png"><span itemprop="name">Wealth Creation</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/protection'); ?>" class="<?php check_menu_active(2, 'protection') ?>"><img src="<?php echo base_url()?>assets/images/menu-ProtectionPlan.png"><span itemprop="name">Protection</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/retirement'); ?>" class="<?php check_menu_active(2, 'retirement') ?>"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"><span itemprop="name">Retirement</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/savingstax'); ?>" class="<?php check_menu_active(2, 'savingstax') ?>"><img src="<?php echo base_url()?>assets/images/Menu-Saving-Tax-m.png"><span itemprop="name">Savings & Tax</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/health-insurance'); ?>" class="<?php check_menu_active(2, 'health-insurance') ?>"><img src="<?php echo base_url()?>assets/images/menu-Family.png"><span itemprop="name">Health Insurance</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/policy-faqs'); ?>" class="<?php check_menu_active(2, 'policy-faqs') ?>"><img src="<?php echo base_url()?>assets/images/menu-FAQs.png"><span itemprop="name">Policy FAQs</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/glossary'); ?>" class="<?php check_menu_active(2, 'glossary') ?>"><img src="<?php echo base_url()?>assets/images/menu-Glossary.png"><span itemprop="name">Glossary</span></a></li>
					
                  </ul>
                </div> 
              </li>
			  
			  
			   <li class=""><a itemprop="url" target='_blank' href="<?php echo base_url() ?>OnlineTermInsurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_menu&utm_content=sticky_eterm&lead_group=kotak_organic" class=""><span itemprop="name">Term Insurance</span></a></li>
			   
              <li class="thirdLevel <?php check_menu_active(1, OP_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="online plans" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(OP_MODULE_LINK); ?>"><span itemprop="name">Online Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL third_navUL03">
                    <li>
						<a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-term-insurance-plans') ?>" class="<?php check_menu_active(2, 'online-term-insurance-plans') ?>"><img src="<?php echo base_url()?>assets/images/menu-ProtectionPlan.png"> <span itemprop="name">Term Insurance Plan</span></a>
						<ul class="third_navUL_subnav">
							<li><a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-term-insurance-plans/kotak-e-term-plan-online') ?>" class="<?php check_menu_active(3, 'kotak-e-term-plan-online') ?>"><span itemprop="name">Kotak e-Term Plan</span></a></li>
						</ul>
                    </li>
					<li>
						<a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/retirement-pension-plans') ?>" class="<?php check_menu_active(2, 'online-retirement-plans') ?>"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Retirement Plan</span></a>
						<ul class="third_navUL_subnav">
							<li><a itemprop="url"  href="<?php echo base_url('online-plans/retirement-pension-plans/kotak-lifetime-income-plan') ?>" class="<?php check_menu_active(3, 'kotak-lifetime-income-plan') ?>"><span itemprop="name">Kotak Lifetime Income Plan</span></a></li>
						</ul>
                    </li>
                    <!--<li><a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-savings-plans') ?>" class="<?php check_menu_active(2, 'online-savings-plans') ?>"><img src="assets/images/menu-SavingAndRetirnmentPlan.png"> <span itemprop="name">Savings Plan</span></a>
                      
					  <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-savings-plans/kotak-e-assured-savings-plan') ?>" class="<?php check_menu_active(3, 'kotak-e-assured-savings-plan') ?>"><span itemprop="name">Kotak e-Assured Savings Plan</span></a></li>
                      </ul>
					  
                    </li>-->
					<li>
						<a itemprop="url" href="<?php echo base_url() ?>kotakWebBI/" target="_blank"><img title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="<?php echo base_url()?>assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools & Calculators</span> </a>
						<ul class="third_navUL_subnav">
							<li><a rel="follow" itemprop="url"  href="<?php echo base_url() ?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=navigation_link&utm_content=term_insurance _calculator&lead_group=kotak_organic" target="_blank" class=""><span itemprop="name">Term Insurance Calculator</span></a></li>
                            <li><a itemprop="url"  href="<?php echo base_url() ?>einsurance/Loginpage.aspx?PID=EAS" target="_blank" class=""><span itemprop="name">Savings Insurance Calculator</span></a></li>
						</ul>
                    </li>
                    <!--<li>
                      <a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-retirement-plans') ?>" class="<?php check_menu_active(2, 'online-retirement-plans') ?>"><img src="assets/images/menu-ReirementPlan.png"> <span itemprop="name">Retirement Plan</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-retirement-plans/kotak-e-lifetime-income-plan') ?>" class="<?php check_menu_active(3, 'kotak-e-lifetime-income-plan') ?>"><span itemprop="name">Kotak e-Lifetime Income Plan</span></a></li>
                      </ul>
                    </li>-->
					<!--<li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/health-plans') ?>"  class="<?php check_menu_active(2, 'health-plans') ?>"><img src="<?php echo base_url()?>assets/images/menu-ProtectionPlan.png"><span itemprop="name">Health Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/health-plans/kotak-health-shield') ?>" class="<?php check_menu_active(3, 'kotak-health-shield') ?>"><span itemprop="name">Kotak Health Shield</span></a></li>
                       </ul>
                     
					</li>-->
                  </ul>
                </div>
              </li>
			  
              <li class="thirdLevel <?php check_menu_active(1, IP_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="insuance plans" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK); ?>"><span itemprop="name">Insurance Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL3">
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans') ?>"  class="<?php check_menu_active(2, 'protection-plans') ?>"><img src="<?php echo base_url()?>assets/images/menu-ProtectionPlan.png"><span itemprop="name">Protection Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans/kotak-e-term-plan') ?>" class="<?php check_menu_active(3, 'kotak-e-term-plan') ?>"><span itemprop="name">Kotak e-Term Plan</span></a></li>
						<!-- <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans/kotak-income-protection-plan') ?>"  class="<?php check_menu_active(3, 'kotak-income-protection-plan') ?>"><span itemprop="name">Kotak Income Protection plan</span> </a></li> -->
                       </ul>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans') ?>" class="viewAll"><span itemprop="name">View all protection plans</span></a> 
					</li>
                    <li>
                      <a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|savings and investment plans" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans') ?>"  class="ga_track <?php check_menu_active(2, 'savings-and-investments-plans') ?>"><img src="<?php echo base_url()?>assets/images/menu-SavingAndRetirnmentPlan.png"><span itemprop="name">Savings and Investment Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-premier-life-plan') ?>" class="<?php check_menu_active(3, 'kotak-premier-life-plan') ?>"><span itemprop="name">Kotak Premier Life Plan</span> </a></li>
                        <li><a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|kotak single invest plus" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-single-invest-plus') ?>" class="ga_track <?php check_menu_active(3, 'kotak-single-invest-plus') ?>"><span itemprop="name">Kotak Single Invest Plus</span></a></li>
                      </ul>
                      <a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|view all saving and investment plans" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans') ?>" class="viewAll ga_track"><span itemprop="name">View all saving and investment plans</span></a> 
					</li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans') ?>"  class="<?php check_menu_active(2, 'retirement-plans') ?>"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"><span itemprop="name">Retirement Plans</span></a>
                      <ul class="third_navUL_subnav">
                       <!-- <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans/kotak-premier-pension-plan') ?>" class="<?php check_menu_active(3, 'kotak-premier-pension-plan') ?>"><span itemprop="name">Kotak Premier Pension Plan</span> </a></li>
						 <li><a itemprop="url"  href="<?php //echo base_url(IP_MODULE_LINK.'/retirement-plans/kotak-lifetime-income-plan') ?>" class="<?php //check_menu_active(3, 'kotak-lifetime-income-plan') ?>"><span itemprop="name">Kotak Lifetime Income Plan</span></a></li>-->
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans/kotak-saral-pension') ?>" class="<?php check_menu_active(3, 'kotak-saral-pension') ?>"><span itemprop="name">Kotak Saral Pension</span></a></li>
						 <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans/kotak-assured-pension') ?>" class="<?php check_menu_active(3, 'kotak-assured-pension') ?>"><span itemprop="name">Kotak Assured Pension</span></a></li>
                      </ul>
					  <a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|view all Retirement plans" href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans') ?>" class="viewAll ga_track"><span itemprop="name">View all retirement plans</span></a> 
					</li>
                     <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/health-plans') ?>"  class="<?php check_menu_active(2, 'health-plans') ?>"><img src="<?php echo base_url()?>assets/images/menu-ProtectionPlan.png"><span itemprop="name">Health Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/health-plans/kotak-health-shield') ?>" class="<?php check_menu_active(3, 'kotak-health-shield') ?>"><span itemprop="name">Kotak Health Shield</span></a></li>
                       </ul>
                      <!-- <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans') ?>" class="viewAll"><span itemprop="name">View all protection plans</span></a>  -->
					</li>
                    <!-- 
					
					<li class="borderNoneLI">
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/child-plans') ?>"  class="<?php check_menu_active(2, 'child-plans') ?>"><img src="assets/images/menu-ChildPlan.png"><span itemprop="name">Child Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/child-plans/kotakheadstart-child-assure') ?>" class="<?php check_menu_active(3, 'kotakheadstart-child-assure') ?>"><span itemprop="name">Kotak Headstart Child Assure</span></a></li>
                      </ul></li>
					-->
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/insurance-plan-riders') ?>" class="<?php check_menu_active(2, 'insurance-plan-riders') ?>"><img src="<?php echo base_url()?>assets/images/menu-InsuranceRider.png"><span itemprop="name">Our Rider Solutions</span> </a>
                      </li>
                    <li>
                      <a href="<?php echo base_url() ?>/kotakWebBI/" target="_blank"><img  title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="<?php echo base_url()?>assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools & Calculators</span> </a>
                    </li>
                  </ul>
                </div>
              </li>
			  
              <li class="thirdLevel <?php check_menu_active(1, GP_MODULE_LINK); ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="group plans" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(GP_MODULE_LINK); ?>"><span itemprop="name">Group Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL03">
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment') ?>"  class="<?php check_menu_active(2, 'group-gratuity-leave-encashment') ?>"><img src="<?php echo base_url()?>assets/images/Menu-group-gratuity.png"><span itemprop="name">Group Gratuity/Leave Encashment</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment/kotak-gratuity-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-gratuity-group-plan') ?>"><span itemprop="name">Kotak Gratuity Group Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-leave-encashment-group-plan') ?>"><span itemprop="name">Kotak Leave Encashment Group Plan</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment') ?>" class="viewAll"><span itemprop="name">View all Group Gratuity/Leave Encashment plans</span></a> 
					  </li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation') ?>"  class="<?php check_menu_active(2, 'group-superannuation') ?>"><img src="<?php echo base_url()?>assets/images/Menu-group-superannuation.png"><span itemprop="name">Group Superannuation</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation/kotak-secure-return-superannuation-plan') ?>" class="<?php check_menu_active(3, 'kotak-secure-return-superannuation-plan') ?>"><span itemprop="name">Kotak Secure Return Superannuation Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation/kotak-superannuation-group-plan-ii') ?>" class="<?php check_menu_active(3, 'kotak-superannuation-group-plan-ii') ?>"><span itemprop="name">Kotak Superannuation Group Plan – II</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation') ?>" class="viewAll"><span itemprop="name">View all Group Superannuation plans</span></a> </li>
                     
                    <li>
                    
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term') ?>"  class="<?php check_menu_active(2, 'group-term') ?>"><img src="<?php echo base_url()?>assets/images/Menu-group-team.png"><span itemprop="name">Group Term</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term/kotak-term-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-term-group-plan') ?>"><span itemprop="name">Kotak Term Group Plan</span></a></li>
                        <!-- <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term/kotak-group-secure') ?>" class="<?php check_menu_active(3, 'kotak-group-secure') ?>"><span itemprop="name">Kotak Group Secure</span></a></li> -->
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term') ?>" class="viewAll"><span itemprop="name">View all Group Term plans</span></a> </li>
                    
                    <li>
                    
                      <a itemprop="url" href="<?php echo base_url(GP_MODULE_LINK.'/group-credit') ?>"  class="<?php check_menu_active(2, 'group-credit') ?>"><img src="<?php echo base_url()?>assets/images/Menu-group-credit.png"><span itemprop="name">Group Credit</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit/kotak-complete-cover-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-complete-cover-group-plan') ?>"><span itemprop="name">Kotak Complete Cover Group Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit/kotak-group-assure') ?>" class="<?php check_menu_active(3, 'kotak-group-assure') ?>"><span itemprop="name">Kotak Group Assure</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit') ?>" class="viewAll"><span itemprop="name">View all Group Credit plans</span></a> </li>
                     
                  </ul>
                </div>
              </li>
			  
              <li class="thirdLevel <?php check_menu_active(1, HDI_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="how do i?" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK) ?>"><span itemprop="name">How Do I?</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL third_navUL03">
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/pay-my-premium') ?>" class="<?php check_menu_active(2, 'pay-my-premium') ?>" ><img src="<?php echo base_url()?>assets/images/menu-PayMyPremium.png"><span itemprop="name">Pay My Premium</span></a></li>
                    <li><a itemprop="url"  target="blank" href="https://customer.kotaklifeinsurance.com/ocm" rel="nofollow" class="<?php check_menu_active(2, 'file-claim') ?>"><img src="<?php echo base_url()?>assets/images/menu-FileAClaim.png"><span itemprop="name">File a Claim</span></a></li>
                    <li><a itemprop="url"   href="<?php echo base_url(HDI_MODULE_LINK.'/manage-my-policy') ?>" class="<?php check_menu_active(2, 'manage-my-policy') ?>"><img src="<?php echo base_url()?>assets/images/menu-ManageMyPolicy.png"><span itemprop="name">Manage My Policy</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"   href="<?php echo base_url(HDI_MODULE_LINK.'/download-application-form') ?>" class="<?php foreach($arrDaf as $dt){ check_menu_active(2, $dt); }?>"><img src="<?php echo base_url()?>assets/images/menu-DownloadApplicationForm.png"><span itemprop="name">Download Application Forms</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/get-policy-brochure') ?>" class="<?php foreach($arrGpb as $dts){ check_menu_active(2, $dts); }?>"><img src="<?php echo base_url()?>assets/images/menu-GetPolicyBrochure.png"><span itemprop="name">Get Policy Brochure</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/check-policy-document-specimen') ?>" class="<?php foreach($arrCpd as $d){ check_menu_active(2, $d); }?>"><img src="<?php echo base_url()?>assets/images/menu-Check-Policy-Document-Specimen.png"><span itemprop="name">Check Policy Document Specimen</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"   href="<?php echo base_url(HDI_MODULE_LINK.'/fund-update') ?>" class="<?php check_menu_active(2, 'fund-update') ?>"><img src="<?php echo base_url()?>assets/images/menu-Fund-Update.png"><span itemprop="name">Browse Fund Updates</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK.'/understand-stages-of-application') ?>" class="<?php check_menu_active(2, 'understand-stages-of-application') ?>"><img src="<?php echo base_url()?>assets/images/menu-Understand-the-Stages-of-My-Application.png"><span itemprop="name">Understand the Stages of My Application</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/apply-for-life-insurance-plan') ?>" class="<?php check_menu_active(2, 'apply-for-life-insurance-plan') ?>"><img alt="Apply for a line insurance plan online at Kotak Life" title="Apply for a line insurance plan online at Kotak Life" src="<?php echo base_url()?>assets/images/menu-Apply-For-A-Life-Insurance-Plan.png"><span itemprop="name">Apply for a Life Insurance Plan</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/locate-kotak-branches') ?>" class="<?php check_menu_active(2, 'locate-kotak-branches') ?>"><img src="<?php echo base_url()?>assets/images/menu-Locate-a-Kotak-Life-Branch.png"><span itemprop="name">Locate a Kotak Life branch</span></a></li>
					<li><a itemprop="url"  href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" rel="nofollow" class="<?php check_menu_active(2, 'apply-for-life-insurance-plan') ?>" target="blank"><img src="<?php echo base_url()?>assets/images/Menu-Download-Statement.png"><span itemprop="name">Download statements</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/'.LA_SEARCH_LINK)?>" class="<?php check_menu_active(2, 'verify-life-advisor') ?>"><img src="<?php echo base_url()?>assets/images/Menu-KnowYourAdvisor.png"><span itemprop="name">Verify My Life Advisor</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/registerfor-ecs')?>" class="<?php check_menu_active(2, 'registerfor-ecs') ?>"><img src="<?php echo base_url()?>assets/images/menu-Check-Policy-Document-Specimen.png"><span itemprop="name">Register for ECS</span></a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
		  <?php } ?>
        </li>
		
        <li><a href="javascript:;"  data-customer-type="existing_customer"  class="customer-type <?php echo ($cusType == 'existing_customer') ? 'selected' : '' ?>" onClick="dataLayer.push({'event':'event top menu', 'category':'Existing Customers', 'action':'top nav click','label':'<?php echo current_url(); ?>'});">Existing Customers</a>
			 <?php if($cusType=="existing_customer"){ ?>
			 <div class="second_navWrap">
            <ul class="second_navUL">
              <li class="<?php is_home() ?>"><a itemprop="url" href="<?php echo base_url() ?>" class=""><span itemprop="name">Home</span></a></li>
			  <li class="thirdLevel <?php check_menu_active(1, HDI_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="how do i?" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK) ?>"><span itemprop="name">How Do I?</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL third_navUL03">
                    <li><a itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK.'/pay-my-premium') ?>" class="<?php check_menu_active(2, 'pay-my-premium') ?>" ><img src="<?php echo base_url()?>assets/images/menu-PayMyPremium.png"><span itemprop="name">Pay My Premium</span></a></li>
                    <li><a itemprop="url"  target="_blank" href="https://customer.kotaklifeinsurance.com/ocm" rel="nofollow" class="<?php check_menu_active(2, 'file-claim') ?>"><img src="<?php echo base_url()?>assets/images/menu-FileAClaim.png"><span itemprop="name">File a Claim</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/manage-my-policy') ?>" class="<?php check_menu_active(2, 'manage-my-policy') ?>"><img src="<?php echo base_url()?>assets/images/menu-ManageMyPolicy.png"><span itemprop="name">Manage My Policy</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/download-application-form') ?>" class="<?php foreach($arrDaf as $dt){ check_menu_active(2, $dt); }?>"><img src="<?php echo base_url()?>assets/images/menu-DownloadApplicationForm.png"><span itemprop="name">Download Application Forms</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK.'/get-policy-brochure') ?>" class="<?php foreach($arrGpb as $dts){ check_menu_active(2, $dts); }?>"><img src="<?php echo base_url()?>assets/images/menu-GetPolicyBrochure.png"><span itemprop="name">Get Policy Brochure</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/check-policy-document-specimen') ?>" class="<?php foreach($arrCpd as $d){ check_menu_active(2, $d); }?>"><img src="<?php echo base_url()?>assets/images/menu-Check-Policy-Document-Specimen.png"><span itemprop="name">Check Policy Document Specimen</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK.'/fund-update') ?>" class="<?php check_menu_active(2, 'fund-update') ?>"><img src="<?php echo base_url()?>assets/images/menu-Fund-Update.png"><span itemprop="name">Browse Fund Updates</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/understand-stages-of-application') ?>" class="<?php check_menu_active(2, 'understand-stages-of-application') ?>"><img src="<?php echo base_url()?>assets/images/menu-Understand-the-Stages-of-My-Application.png"><span itemprop="name">Understand the Stages of My Application</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/apply-for-life-insurance-plan') ?>" class="<?php check_menu_active(2, 'apply-for-life-insurance-plan') ?>"><img alt="Apply for a line insurance plan online at Kotak Life" title="Apply for a line insurance plan online at Kotak Life" src="<?php echo base_url()?>assets/images/menu-Apply-For-A-Life-Insurance-Plan.png"><span itemprop="name">Apply for a Life Insurance Plan</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/locate-kotak-branches') ?>" class="<?php check_menu_active(2, 'locate-kotak-branches') ?>"><img src="<?php echo base_url()?>assets/images/menu-Locate-a-Kotak-Life-Branch.png"><span itemprop="name">Locate a Kotak Life branch</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/'.LA_SEARCH_LINK)?>" class="<?php check_menu_active(2, 'verify-life-advisor') ?>"><img src="<?php echo base_url()?>assets/images/Menu-KnowYourAdvisor.png"><span itemprop="name">Verify My Life Advisor</span></a></li>
					<li><a itemprop="url"  href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" rel="nofollow"><img src="<?php echo base_url()?>assets/images/Menu-Download-Statement.png"><span itemprop="name">Download statements</span></a></li>
					<!--<li><a itemprop="url"  href="https://ekyc.mykotaklife.com/DemographicAadhaarAuthentication/DemographicAadhaarAuthentication"><img src="assets/images/menu-Glossary.png"><span itemprop="name">Update my Aadhaar Number</span></a></li> -->
                    </ul>
                </div>
              </li>
			  
              <li class="thirdLevel <?php check_menu_active(1, OP_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="online plans" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(OP_MODULE_LINK); ?>"><span itemprop="name">Online Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL third_navUL03">
                    <li>
                      <a itemprop="url" href="<?php echo base_url(OP_MODULE_LINK.'/online-term-insurance-plans') ?>" class="<?php check_menu_active(2, 'online-term-insurance-plans') ?>"><img src="assets/images/menu-ProtectionPlan.png"> <span itemprop="name">Protection Plan</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-term-insurance-plans/kotak-e-term-plan-online') ?>" class="<?php check_menu_active(3, 'kotak-e-term-plan-online') ?>"><span itemprop="name">Kotak e-Term Plan</span></a></li>
                      </ul>
                     </li>
					 
                     <!--<li>
                      <a href="<?php echo base_url(OP_MODULE_LINK.'/online-savings-plans') ?>" class="<?php check_menu_active(2, 'online-savings-plans') ?>"><img src="assets/images/menu-SavingAndRetirnmentPlan.png"><span itemprop="name">Savings Plan</span></a>
                     
					  <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-savings-plans/kotak-e-assured-savings-plan') ?>" class="<?php check_menu_active(3, 'kotak-e-assured-savings-plan') ?>"><span itemprop="name">Kotak e-Assured Savings Plan</span></a></li>
                      </ul>
					  
                     </li>-->
					 <li>
						<a itemprop="url" href="<?php echo base_url() ?>/kotakWebBI/" target="_blank"><img title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="<?php echo base_url()?>assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools & Calculators</span> </a>
						<ul class="third_navUL_subnav">
							<li><a rel="follow" itemprop="url"  href="<?php echo base_url() ?>/OnlineTermInsurance/?utm_source=organic&utm_medium=website&utm_campaign=navigation_link&utm_content=term_insurance _calculator&lead_group=kotak_organic" target="_blank" class=""><span itemprop="name">Term Insurance Calculator</span></a></li>
                            <li><a itemprop="url"  href="<?php echo base_url() ?>/einsurance/Loginpage.aspx?PID=EAS" target="_blank" class=""><span itemprop="name">Savings Insurance Calculator</span></a></li>
						</ul>
                    </li>
                   <li>
						<a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/retirement-pension-plans') ?>" class="<?php check_menu_active(2, 'online-retirement-plans') ?>"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Retirement Plan</span></a>
						<ul class="third_navUL_subnav">
							<li><a itemprop="url"  href="<?php echo base_url('online-plans/retirement-pension-plans/kotak-lifetime-income-plan') ?>" class="<?php check_menu_active(3, 'kotak-lifetime-income-plan') ?>"><span itemprop="name">Kotak Lifetime Income Plan</span></a></li>
						</ul>
                    </li>
					 
					 
                  </ul>
                </div>
              </li>
              
              <li class="thirdLevel <?php check_menu_active(1, IP_MODULE_LINK); ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="insurance guide" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK); ?>"><span itemprop="name">Insurance Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL3">
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans') ?>"  class="<?php check_menu_active(2, 'protection-plans') ?>"><img src="assets/images/menu-ProtectionPlan.png"><span itemprop="name">Protection Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans/kotak-e-term-plan') ?>" class="<?php check_menu_active(3, 'kotak-e-term-plan') ?>"><span itemprop="name">Kotak e-Term Plan</span></a></li>
						<li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans/kotak-income-protection-plan'); ?>"  class="<?php check_menu_active(3, 'kotak-income-protection-plan') ?>"><span itemprop="name">Kotak Income Protection plan</span> </a></li>
                       </ul>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans'); ?>" class="viewAll"><span>View all protection plans</span></a> </li>
                    <li>
                      <a itemprop="url"  data-action="insurance plans" data-event="event sub menu items" data-label="click|savings and investment plans" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans'); ?>"  class="ga_track <?php check_menu_active(2, 'savings-and-investments-plans') ?>"><img src="assets/images/menu-SavingAndRetirnmentPlan.png"><span itemprop="name">Savings and Investment Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-premier-life-plan') ?>" class="<?php check_menu_active(3, 'kotak-premier-life-plan') ?>"><span itemprop="name">Kotak Premier Life Plan</span> </a></li>
                        <li><a itemprop="url"  data-action="insurance plans" data-event="event sub menu items" data-label="click|kotak single invest plus" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-single-invest-plus') ?>" class="ga_track <?php check_menu_active(3, 'kotak-single-invest-plus') ?>"><span itemprop="name">Kotak Single Invest Plus</span></a></li>
                      </ul>
                      <a itemprop="url"  data-action="insurance plans" data-event="event sub menu items" data-label="click|view all saving and investment plans" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans') ?>" class="viewAll ga_track"><span itemprop="name">View all saving and investment plans</span></a> </li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans') ?>"  class="<?php check_menu_active(2, 'retirement-plans') ?>"><img src="assets/images/menu-ReirementPlan.png"><span itemprop="name">Retirement Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans/kotak-premier-pension-plan') ?>" class="<?php check_menu_active(3, 'kotak-premier-pension-plan') ?>"><span itemprop="name">Kotak Premier Pension Plan</span> </a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans/kotak-lifetime-income-plan-online') ?>" class="<?php check_menu_active(3, 'kotak-lifetime-income-plan') ?>"><span itemprop="name">Kotak Lifetime Income Plan</span></a></li>
                      </ul> </li>
                      
                    <li class="borderNoneLI">
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/child-plans') ?>"  class="<?php check_menu_active(2, 'child-plans') ?>"><img src="assets/images/menu-ChildPlan.png"><span itemprop="name">Child Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/child-plans/kotakheadstart-child-assure') ?>" class="<?php check_menu_active(3, 'kotakheadstart-child-assure') ?>"><span itemprop="name">Kotak Headstart Child Assure</span></a></li>
                      </ul></li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/insurance-plan-riders') ?>" class="<?php check_menu_active(2, 'insurance-plan-riders') ?>"><img src="assets/images/menu-InsuranceRider.png"><span itemprop="name">Our Rider Solutions</span> </a>
                      </li>
                    <li>
                      <a itemprop="url" href="<?php echo base_url() ?>/kotakWebBI/" target="_blank"><img title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools & Calculators</span> </a>
                    </li>
					
                  </ul>
                </div>
                <!-- Third NAV Wrapper End -->                
                
              </li>
              <li class="thirdLevel <?php check_menu_active(1, GP_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="group plans" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(GP_MODULE_LINK); ?>"><span itemprop="name">Group Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL03">
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment') ?>"  class="<?php check_menu_active(2, 'group-gratuity-leave-encashment') ?>"><img src="assets/images/Menu-group-gratuity.png"><span itemprop="name">Group Gratuity/Leave Encashment</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment/kotak-gratuity-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-gratuity-group-plan') ?>"><span itemprop="name">Kotak Gratuity Group Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-leave-encashment-group-plan') ?>"><span itemprop="name">Kotak Leave Encashment Group Plan</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment') ?>" class="viewAll"><span itemprop="name">View all Group Gratuity/Leave Encashment plans</span></a> 
					</li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation') ?>"  class="<?php check_menu_active(2, 'group-superannuation') ?>"><img src="assets/images/Menu-group-superannuation.png"><span itemprop="name">Group Superannuation</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation/kotak-secure-return-superannuation-plan') ?>" class="<?php check_menu_active(3, 'kotak-secure-return-superannuation-plan') ?>"><span itemprop="name">Kotak Secure Return Superannuation Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation/kotak-superannuation-group-plan-ii') ?>" class="<?php check_menu_active(3, 'kotak-superannuation-group-plan-ii') ?>"><span itemprop="name">Kotak Superannuation Group Plan – II</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation') ?>" class="viewAll"><span itemprop="name">View all Group Superannuation plans</span></a> 
					</li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term') ?>"  class="<?php check_menu_active(2, 'group-term') ?>"><img src="assets/images/Menu-group-team.png"><span itemprop="name">Group Term</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term/kotak-term-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-term-group-plan') ?>"><span itemprop="name">Kotak Term Group Plan</span></a></li>
                        <!-- <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term/kotak-group-secure') ?>" class="<?php check_menu_active(3, 'kotak-group-secure') ?>"><span itemprop="name">Kotak Group Secure</span></a></li> -->
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term') ?>" class="viewAll"><span itemprop="name">View all Group Term plans</span></a>
					</li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit') ?>"  class="<?php check_menu_active(2, 'group-credit') ?>"><img src="assets/images/Menu-group-credit.png"><span itemprop="name">Group Credit</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit/kotak-complete-cover-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-complete-cover-group-plan') ?>"><span itemprop="name">Kotak Complete Cover Group Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit/kotak-group-assure') ?>" class="<?php check_menu_active(3, 'kotak-group-assure') ?>"><span itemprop="name">Kotak Group Assure</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit') ?>" class="viewAll"><span itemprop="name">View all Group Credit plans</span></a>
					</li>
                  </ul>
                </div>
              </li> 
			  
			  <li class="thirdLevel <?php check_menu_active(1, FP_MODULE_LINK) ?> ">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="fund performance" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK) ?>" ><span itemprop="name">Fund Performance</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL">
<li><a itemprop="url" href="<?php echo base_url(FP_MODULE_LINK.'/nav-performance') ?>" class="<?php check_menu_active(2, 'nav-performance') ?>"><img src="<?php echo base_url()?>assets/images/menu-NAV-Performance.png"><span itemprop="name">NAV Performance</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(FP_MODULE_LINK.'/fund-update') ?>" class="<?php check_menu_active(2, 'fund-update') ?>"><img src="<?php echo base_url()?>assets/images/menu-Fund-Update.png"><span itemprop="name">Fund Update</span></a></li>
					<li><a itemprop="url" href="<?php echo base_url(FP_MODULE_LINK.'/investment-philosophy') ?>" class="<?php check_menu_active(2, 'investment-philosophy'); check_menu_active(2, 'investment-philosophy-debt'); ?>"><img src="<?php echo base_url()?>assets/images/Menu-Investment-Philosophy.png"><span itemprop="name">Investment Philosophy</span></a></li>
					<li><a itemprop="url" href="<?php echo base_url(FP_MODULE_LINK.'/investment-fund-faqs') ?>" class="<?php check_menu_active(2, 'investment-fund-faqs') ?>"><img src="<?php echo base_url()?>assets/images/Menu-Investment-Fund-FAQs.png"><span itemprop="name">Investment Fund FAQs</span></a></li>
                  </ul>
                </div>
              </li>
			  
              <li class="thirdLevel <?php check_menu_active(1, WKL_MODULE_LINK) ?> ">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="why kotak life?" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK) ?>" ><span itemprop="name">Why Kotak Life?</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL">
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/about-us') ?>" class="<?php check_menu_active(2, 'about-us') ?>"><img src="<?php echo base_url()?>assets/images/menu-AboutKLI.png"><span itemprop="name">About Us</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(WKL_MODULE_LINK.'/corporate-governance') ?>" class="<?php check_menu_active(2, 'corporate-governance') ?>"><img src="<?php echo base_url()?>assets/images/menu-CorporateGovernance.png"><span itemprop="name">Corporate Governance</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(WKL_MODULE_LINK.'/media-center') ?>" class="<?php check_menu_active(2, 'media-center') ?>"><img src="<?php echo base_url()?>assets/images/menu-MediaCenter.png"><span itemprop="name">Media Center</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(WKL_MODULE_LINK.'/career') ?>" class="<?php check_menu_active(2, 'career') ?>"><img src="<?php echo base_url()?>assets/images/menu-Career.png"><span itemprop="name">Career</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(WKL_MODULE_LINK.'/contact-us') ?>" class="<?php check_menu_active(2, 'contact-us') ?>"><img src="<?php echo base_url()?>assets/images/menu-Contact.png"><span itemprop="name">Contact Us</span></a></li>
                  </ul>
                </div>
              </li>
			  
              <li class="thirdLevel <?php check_menu_active(1, IG_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="insurance guide" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(IG_MODULE_LINK); ?>"><span itemprop="name">Insurance Guide</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL4">
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/about-life-insurance'); ?>" class="<?php check_menu_active(2, 'about-life-insurance') ?>"><img src="<?php echo base_url()?>assets/images/menu-AboutLifeInsurance.png"><span itemprop="name">About Life Insurance</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/family'); ?>" class="<?php check_menu_active(2, 'family') ?>"><img src="<?php echo base_url()?>assets/images/menu-Family.png"><span itemprop="name">Family</span> </a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/wealth-creation'); ?>" class="<?php check_menu_active(2, 'wealth-creation') ?>"><img src="<?php echo base_url()?>assets/images/menu-WealthCreation.png"><span itemprop="name">Wealth Creation</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/protection'); ?>" class="<?php check_menu_active(2, 'protection') ?>"><img src="<?php echo base_url()?>assets/images/menu-ProtectionPlan.png"><span itemprop="name">Protection</span></a></li>
                    
                    <li class="borderNoneLI"><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/retirement'); ?>" class="<?php check_menu_active(2, 'retirement') ?>"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"><span itemprop="name">Retirement</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/savingstax'); ?>" class="<?php check_menu_active(2, 'savingstax') ?>"><img src="<?php echo base_url()?>assets/images/Menu-Saving-Tax-m.png"><span itemprop="name">Savings & Tax</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(IG_MODULE_LINK.'/policy-faqs'); ?>" class="<?php check_menu_active(2, 'policy-faqs') ?>"><img src=<?php echo base_url()?>"assets/images/menu-FAQs.png"><span itemprop="name">Policy FAQs</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/glossary'); ?>" class="<?php check_menu_active(2, 'glossary') ?>"><img src="<?php echo base_url()?>assets/images/menu-Glossary.png"><span itemprop="name">Glossary</span></a></li>
					
                  </ul>
                </div>
              </li>
			  
            </ul>
			</div>
			  <?php } ?>
		</li>
        <li>
		<!--<a href="http://advisor.mykotaklife.com/kliwebportal/" target="_blank">Life Advisor</a>-->
		<a itemprop="url"  href="javascript:;"  data-customer-type="life_advisor" class="customer-type <?php echo ($cusType == 'life_advisor') ? 'selected' : '' ?>" onClick="dataLayer.push({'event':'event top menu', 'category':'Life Advisor', 'action':'top nav click','label':'<?php echo current_url(); ?>'});">Life Advisors</a>
		<?php if($cusType=="life_advisor"){ ?>
			<div class="second_navWrap">
				<ul class="second_navUL">
				  <li class="<?php is_home() ?>"><a itemprop="url" href="<?php echo base_url() ?>" class=""><span itemprop="name">Home</span></a></li>
				  <li class="thirdLevel <?php check_menu_active(1, WKL_MODULE_LINK) ?> ">
					<div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="why kotak life?" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK) ?>" ><span itemprop="name">Why Kotak Life?</span></a></span><div class="mobNavArrow"></div></div>
					<div class="third_navWrap">
					  <ul class="third_navUL">
						<li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/about-us') ?>" class="<?php check_menu_active(2, 'about-us') ?>"><img src="<?php echo base_url()?>assets/images/menu-AboutKLI.png"><span itemprop="name">About Us</span></a></li>
						<li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/corporate-governance') ?>" class="<?php check_menu_active(2, 'corporate-governance') ?>"><img src="<?php echo base_url()?>assets/images/menu-CorporateGovernance.png"><span itemprop="name">Corporate Governance</span></a></li>
						<li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/media-center') ?>" class="<?php check_menu_active(2, 'media-center') ?>"><img src="<?php echo base_url()?>assets/images/menu-MediaCenter.png"><span itemprop="name">Media Center</span></a></li>
						<li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/contact-us') ?>" class="<?php check_menu_active(2, 'contact-us') ?>"><img src="<?php echo base_url()?>assets/images/menu-Contact.png"><span itemprop="name">Contact Us</span></a></li>
					  </ul>
					</div>
				  </li>
				  <li class="<?php foreach($arrCla as $dt){ check_menu_active(1, $dt); }?>"><a class="ga_track" data-action="career as a life advisor" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(CAREER_AS_LIFE_ADVISOR) ?>"><span itemprop="name">Career as a Life Advisor</span></a></li>
				  <li class="<?php check_menu_active(1, HIRING_PROCESS_LINK) ?>"><a class="ga_track" data-action="hiring process" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(HIRING_PROCESS_LINK) ?>"><span itemprop="name">Hiring Process</span></a></li>
				  <li class="<?php check_menu_active(1, LA_FAQS_LINK) ?>"><a class="ga_track" data-action="faqs" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(LA_FAQS_LINK) ?>" class=""><span itemprop="name">FAQ'S</span></a></li>
				  <li class="<?php check_menu_active(1, HDI_MODULE_LINK) ?>"><a class="ga_track" data-action="verify-life-advisor" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/'.LA_SEARCH_LINK) ?>" class=""><span itemprop="name">Know Our Life Advisors</span></a></li>
				  <li class="thirdLevel <?php check_menu_active(1, FP_MODULE_LINK) ?> ">
					<div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="fund performance" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK) ?>" ><span itemprop="name">Fund Performance</span></a></span><div class="mobNavArrow"></div></div>
					<div class="third_navWrap">
					  <ul class="third_navUL">
						<!--<li><a itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK.'/nav-performance') ?>" class="<?php check_menu_active(2, 'nav-performance') ?>"><img src="assets/images/menu-NAV-Performance.png"><span itemprop="name">NAV Performance</span></a></li>-->
						<li><a itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK.'/fund-update') ?>" class="<?php check_menu_active(2, 'fund-update') ?>"><img src="<?php echo base_url()?>assets/images/menu-Fund-Update.png"><span itemprop="name">Fund Update</span></a></li>
						<li><a itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK.'/investment-philosophy') ?>" class="<?php check_menu_active(2, 'investment-philosophy'); check_menu_active(2, 'investment-philosophy-debt'); ?>"><img src="<?php echo base_url()?>assets/images/Menu-Investment-Philosophy.png"><span itemprop="name">Investment Philosophy</span></a></li>
						<li><a itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK.'/investment-fund-faqs') ?>" class="<?php check_menu_active(2, 'investment-fund-faqs') ?>"><img src="<?php echo base_url()?>assets/images/Menu-Investment-Fund-FAQs.png"><span itemprop="name">Investment Fund FAQs</span></a></li>
					  </ul>
					</div>
				  </li>
				</ul>
			</div>
		<?php } ?>
		</li>
      </ul>
    </nav>
  </div>
   <?php if(isset($mainPlanType) && !empty($mainPlanType)){
                    if($mainPlanType =="Group Plans"){
                        $tollfreeNumber="1800 120 7856";
                    }else{
                        $tollfreeNumber="Send Hi to 9321003007";//"1800 209 8800";
                        $tollfreeNumber1="9321003007";
                    }                    
                }else{
                     $tollfreeNumber="Send Hi to 9321003007";//"1800 209 8800";
                     $tollfreeNumber1="9321003007";
                }
?>



  <div class="rhsNav">
    <div class="vCenterWrap">
      <ul class="navRhs">
        <li class="mobile-sm"><a href="https://api.whatsapp.com/send/?phone=919321003007&text=Hi" class="whatsBtn-sm" onClick="dataLayer.push({'event':'event top nav WhatsApp', 'category':'top nav', 'action':'<?php echo $tollfreeNumber;?>','label':'<?php echo current_url(); ?>'});"><?php echo $tollfreeNumber1;?></a></li>
        <!-- <li><a href="javascript:;" class="telBtn" onClick="dataLayer.push({'event':'event top nav phone', 'category':'top nav', 'action':'<?php echo $tollfreeNumber;?>','label':'<?php echo current_url(); ?>'});"><?php echo $tollfreeNumber;?></a></li> 
		<li><a href="javascript:;" class="telBtn" onClick="dataLayer.push({'event':'event top nav phone', 'category':'top nav', 'action':'<?php echo $tollfreeNumber;?>','label':'<?php echo current_url(); ?>'});"><?php echo $tollfreeNumber;?></a></li>-->
        <li class="mobile-md"><a href="javascript:;" class="whatsBtn" onClick="dataLayer.push({'event':'event top nav WhatsApp', 'category':'top nav', 'action':'<?php echo $tollfreeNumber;?>','label':'<?php echo current_url(); ?>'});"><?php echo $tollfreeNumber;?></a></li>
       
		
		
        <li class="searchicon"><a href="javascript:;" class="searchBtn" onClick="dataLayer.push({'event':'event top nav search', 'category':'top nav', 'action':'search icon click','label':'<?php echo current_url(); ?>'});"><span>Search</span></a></li>
        <li class="mobileMenu "><a href="javascript:;"><span>Menu</span></a></li>
      </ul>
    </div>
  </div>
</header>

<!-- Search Wrapper Start -->
<div class="searchBox">
  <input type="text" name="searchTxt" id="searchTxt" placeholder="Search here"/>
    <a href="javascript:;" id="searchResBtn" name="searchResBtn">Search</a>
	</div>
	<a class="closeSearch" href="javascript:;"><span>Close</span></a> 
<!-- Search Wrapper End -->

<!-- RHS Fixed Menu Start -->
<div class="rhsFixed_Wrapper">
  <div class="rhsFixed_nav">
  <?php 
	$cls = "";
	if($cusType=="existing_customer"){
		$cls = "existingFixedUL";
	}else if($cusType=="life_advisor"){
		$cls = "existingFixedUL joinFixedUL";
	}else{
		$cls = "";
	}
  ?>
    <ul class="fixedUL <?php echo $cls;?>">
		<?php if($cusType=="new_customer"){ /*$gaCat = "New Customer";*/ ?>
<!--		  <li><a class="removeOverley" onClick="dataLayer.push({'event':'event side menu buy online', 'category':'<?php echo $gaCat;?>', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href="<?=base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_eterm" >Buy online</a></li>
		  <li><a href="<?php echo base_url().'why-kotak-life/contact-us#contact-us-main'?>" data='Contact Us'  class="getCall" onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Contact Us','label':'click'});">Contact Us</a></li>
		  -->
		  <li><a href="javascript:;" data='Buy Online' class="buyOnline"  onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Buy online','label':'click'});">Buy Online</a></li>
		
		  <li><a href="<?php echo base_url().'why-kotak-life/contact-us#contact-us-main'?>" data='Contact Us'  class="getCall" onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Contact Us','label':'click'});">Contact Us</a></li>
		
		<?php } else if($cusType=="existing_customer"){ /*$gaCat = "Existing Customer";*/ ?>
			<li><a onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Login','label':'<?php echo current_url(); ?>'});" target="_blank" data='Login' href="http://customer.kotaklifeinsurance.com/kliportal/Selectlogin.aspx?__utma=159160096.1147431455.1472017196.1479721288.1479978416.11&__utmb=159160096.1.10.1479978416&__utmc=159160096&__utmx=-&__utmz=159160096.1479978416.11.8.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided)&__utmv=-&__utmk=235117121"  rel="follow" class="login">Login</a></li>
			<li><a onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Buy Online','label':'click'});" href="javascript:;" data='Buy Online'  class="buyOnline">Buy online</a></li>
			<!-- <li><a href="<?php echo base_url().'why-kotak-life/contact-us#contact-us-main'?>" onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Contact Us','label':'<?php echo current_url(); ?>'});" href="javascript:;" data='Contact Us'  class="getCall">Contact Us</a></li> -->
			<li><a href="https://care.kotaklifeinsurance.com/webform" rel="follow" onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Contact Us','label':'<?php echo current_url(); ?>'});" href="javascript:;" data='Contact Us'  class="getCall" target="_blank">Customer Service</a></li>
		<?php } else if($cusType=="life_advisor"){ /*$gaCat = "Life Advisor";*/ ?>
			<li><a onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Login','label':'<?php echo current_url(); ?>'});" target="_blank" data='Login' rel="follow"  href="http://advisor.mykotaklife.com/kliwebportal/" class="login">Login</a></li>
			<li><a onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Join Us','label':'click'});" href="javascript:;" data='Join Us' class="joinusIcon">Join Us</a></li>
		<?php } ?>
    </ul>
  </div>
  
  </div>
</div>
<!-- RHS Fixed Menu End --> 
<!-- Header End -->
