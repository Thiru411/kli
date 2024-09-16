<style>
  .dd-none {display: none;}
  .dd-block {
    display: block !important;
  }
  @media screen and (max-width:1024px) {
    .only-mob {
      display: block !important;
    }
    .only-desktop{display: none!important;}
    .only-mob {height: calc(100vh - 66px);
    background: #fff;
    overflow-y: scroll;
    width: 100%;
    display: block;
    background: #fff;}
  }
  .accordion-section-title {
    width: 100%;
    padding: 15px;
  }
  .accordion-section-title.active {background-color: #fff;}
  .accordion-section-title {
    margin: 0;
    background: #dfdfe0;
    border-bottom: 1px solid #fff;
    color: #08315f;
    font-size: 13px;
    float: left;
    font-family: Lato-Bold;
    padding: 20px 0;
    font-weight: 300;
    letter-spacing: .01em;
    line-height: 1.0;
    padding: 15px 14px;
    transition: all linear 0.5s;
    text-decoration: none;
  }
  .accordion-section:last-child .accordion-section-title {
    border-bottom: none;
  }
  .accordion-section-content {
    padding: 15px;
    display: none;
  }
  .accordion-section-title {
    position: relative !important;
  }
  .accordion-section-title a {
    color: #08315f;
  }
  .accordion-section-title a:hover {
    color: #da251c;
  }
  .accordion-section-title:before {
    width: 10px;
    height: 1px;
    background: #08315f;
    content: '';
    display: block;
    position: absolute;
    right: 19px;
    top: 57%;
    -webkit-transform: rotate(-48deg);
    -webkit-transition: all ease .5s;
  }

  .accordion-section-title:after {
    width: 10px;
    height: 1px;
    background: #08315f;
    content: '';
    display: block;
    position: absolute;
    right: 25px;
    top: 57%;
    -webkit-transform: rotate(50deg);
    -webkit-transition: all ease .5s;
  }
  .accordion-section-title.active:before {
    width: 10px;
    height: 1px;
    background: #08315f;
    content: '';
    display: block;
    position: absolute;
    right: 19px;
    top: 57%;
    -webkit-transform: rotate(50deg);
    -webkit-transition: all ease .5s;
  }

  .accordion-section-title.active:after {
    width: 10px;
    height: 1px;
    background: #08315f;
    content: '';
    display: block;
    position: absolute;
    right: 25px;
    top: 57%;
    -webkit-transform: rotate(130deg);
    -webkit-transition: all ease .5s;
  }
  .accordion-section-title:hover {
    color: #da251c;
  }
  .accordion:before {
    display: none;
  }
  .accordion:after {
    display: none;
  }
  .why-anc-menu a {
    color: #5e6061;
    font-size: 1.4em;
    font-family: Lato-Bold;
    font-weight: 400;
    margin: 0;
    float: left;
    width: 100%;
    padding: 10px 0px;
    border-top: 1px solid #dfdfe0;
  }
  .why-anc-menu a:hover {
    color: #da251c;
  }
  .why-anc-menu img {
    display: none;
  }
  .term-acc:hover {
    background-color: #fff;
  }
  .term-acc:after {
    display: none;
  }
  .term-acc:before {
    display: none;
  } 
      .custom-icon {
  padding-bottom: 0px!important;
  padding-right: 0!important;
  filter: drop-shadow(0 0 10px #333);
  right: 30px;
    bottom: 65px;
    cursor:pointer;
}
</style>
<!--dropdowns ^-->
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
	btn-life{
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
	.rhsFixed_nav-new{bottom: -22px;}
	ul.fixedUL-new li{height: 0px!important; }
  .tv-pad{    position: absolute;
  right: 10px;
  top: 2px;} 
  .tv-pad-mobile{position: absolute;
  right: 14px;
  top: bottom;
  bottom: 20%;
  left: 44%;}
  .tv-pad-footer{
    position: absolute;
    right: 36%;
    top: 58%;
    transform: translate(-50%, -50%);
  }  
  	   .dd-block{display: block!important;}
    .dis-none{display: none;}
    .rem-buy-cal a.link {
    padding: 12px 20px;
    text-transform: uppercase;
    color: #da251c;
    font-size: 12px;
    border: 1px solid #da251c;
    border-radius: 50px;
    margin: 0 10px 0 0;
    text-align: center;
    height: 50px;
	line-height:revert;
}
.cross-red{border:1px solid #da2516; border-radius:100%;padding:5px;}
.rem-buy-cal{    padding: 10px 15px 65px 15px;
    -webkit-transition: all ease .5s;
}
.btn-link {
    padding: 12px 15px;
    color: #08315f!important;
    font-size: 13px;
    text-decoration: none!important;
    font-weight: 600;
    background: #dfdfe0;
    border-bottom: 1px solid #fff;
	display:block;
	width:100%;
}
.acc-cal-bef::before{display:none!important;}
.acc-cal-bef::after{display:none!important;}
.now {
    color: #5e6061;
    padding: 15px 0;
    font-weight: 400;
    font-size: 15px;
    opacity: .7;
    border-bottom: 1px solid #ccc;
}
.buy-text {
    color: #5e6061;
    font-weight: 400;
    font-size: 22px;
    padding-top: 220px;
}
.kotak-e {
    color: #5e6061;
    font-size: 17px;
    font-weight: 400;
    padding-left: 10px;
    margin-top: 15px;
}
.plan-pure {
    color: #5e6061;
    font-size: 15px;
    font-weight: 400;
    margin: 15px 0;
    padding-left: 10px;
}
.kotak-plan{margin:20px 0;}
/*buy online pop up new v*/
  @media screen and (min-width:767px) {
    .rhsBoxDetailWrap {
      height: 0px;
      top: 98%;
    }

    .rhsBoxDetailWrap {
      width: 98%;
      right: -1400px;
    }

    .rhsBoxDetails {
      background: #ffff;
      height: 395px !important;
      bottom: 50px;

    }

    .rhsBoxDetailWrap.activate .rhsboxWrap {
      left: 0;
      width: 100%;
    }
  }

  /*buy online pop up new ^*/
  .rhsBoxDetailWrap.activate .rhsboxWrap{display:block!important;overflow-x:hidden;left:0px;width:100%;overflow-y:hidden;}
    @media (max-width:767px){
  .rhsboxWrap{padding-top:30px!important;}
  }
</style>
<?php 
	if(get_cookie('kotak_customer_type')){
		$cusType = get_cookie('kotak_customer_type');
		$mobcusType = get_cookie('kotak_customer_type');
	}else{
		$cusType = "new_customer";
		$mobcusType = "new_customer";
	}
//echo $cusType."==testing";
//setcookie('kotak_customer_type',$cusType,time()+(86400*10),"/");
//echo "testing1".$_COOKIE['kotak_customer_type'];
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
	
	/*$cookie_name='kotak_customer_type';	
echo '===',$cookie_value=$cusType;	
setcookie($cookie_name,$cookie_value,time()+(86400*10),"/");

echo $_COOKIE['kotak_customer_type']=$cookie_value.'testing';
/*$_COOKIE['kotak_customer_type']=$cookie_value;
if(!isset($_COOKIE['kotak_customer_type'])){ 
$cusType='';
 }else{ $cusType = $_COOKIE[$cookie_name]; }
 echo $cusType.'testing';*/
?>
<header>
  <div class="logoW">
    <div class="vCenterWrap"> <a href="<?php echo base_url() ?>" class="logo" onClick="dataLayer.push({'event':'event top nav logo', 'category':'top nav', 'action':'logo click','label':'<?php echo current_url(); ?>'});"><img  src="<?=base_url()?>assets/images/kotak-logo.png" alt="Kotak Life Insurance - Logo" title="Kotak Life Insurance - Logo"></a> </div>
  </div>
  <div class="navWrap">
    <nav>
      <div class="topNavMenu">
        <div class="vCenterWrap"> <a href="<?php echo base_url()?>switch-customer" class="switchCust">Switch customer type</a><a href="javascript:;" class="closeMenu">Close menu</a></div>
      </div>
		  <div class="only-mob dd-none">
 <?php if($mobcusType=="new_customer" || $mobcusType==""){ ?>
        <div class="accordion">
          <div class="accorfion-section">
            <div class="accordion-section-title" href="#accordion-1">
              <a data-customer-type="new_customer" class="customer-type" href="<?php echo base_url()?>why-kotak-life">Why Kotak Life?</a>
            </div>
            <div id="accordion-1" class="accordion-section-content">
              <ul class="why-anc-menu">
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/about-us" data-customer-type="new_customer" class="customer-type" >About Us</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/corporate-governance" data-customer-type="new_customer" class="customer-type">Corporate Governance</span></a></li>
				
				 <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/csr" data-customer-type="new_customer" class="customer-type">CSR</span></a></li>
				<!--<li><a itemprop="url" href="https://dev.codebele.com/KLIUAT/site/csr" class="<?php check_menu_active(2, 'corporate-governance') ?>"><img alt="Icon for corporate governance" src="assets/images/menu-CorporateGovernance.png"><span itemprop="name">CSR</span></a></li>-->
				
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/media-center" data-customer-type="new_customer" class="customer-type">Media Center</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/career" data-customer-type="new_customer" class="customer-type">Career</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/contact-us" data-customer-type="new_customer" class="customer-type">Contact Us</span></a></li>
              </ul>
            </div>
            <div class="accordion-section-title" href="#accordion-3">
              <a data-customer-type="new_customer" class="customer-type" href="<?php echo base_url()?>online-plans">Online Plans</a>
            </div>
            <div id="accordion-3" class="accordion-section-content">
              <ul class="third_navUL third_navUL03">
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>online-plans/online-term-insurance-plans" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-ProtectionPlan.png"> <span itemprop="name">Term Insurance Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" onclick="productClick(this)" data-tag="kotak-e-term-plan-online" href="<?php echo base_url()?>online-plans/online-term-insurance-plans/kotak-e-term-plan-online" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak e-Term Plan</span></a>
					 <a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
					</li>
                  </ul>
                </li>				
			
				<li>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/health-plans" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-ProtectionPlan.png"><span itemprop="name">Health Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/health-plans/kotak-health-shield" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Health Shield</span></a>
					<a href=base_url."/buy-health-insurance-online/#/landing?utm_source=health_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a> 
					</li>
                  </ul>
                  <!-- <a itemprop="url"  href="<?php echo base_url()?>insurance-plans/protection-plans" class="viewAll"><span itemprop="name">View all protection plans</span></a>  -->
                </li>
				
					 <li>
                  <a itemprop="url" href="<?php echo base_url()?>online-plans/retirement-pension-plans" data-customer-type="new_customer" class="customer-type"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Retirement Plan</span></a>
                  <ul class="third_navUL_subnav">
                   <!-- <li><a itemprop="url" href="<?php echo base_url()?>online-plans/retirement-pension-plans/kotak-lifetime-income-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Lifetime Income Plan</span></a>
					<a href=base_url."/buy-annuity-plan/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
					</li>-->
                  </ul>
                </li>
				   <!--sindhu-->
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>online-plans/ulip-plan" data-customer-type="new_customer" class="customer-type"><img title="Icon for wealth creation" alt="Icon for wealth creation" src="assets/images/menu-WealthCreation.png"><span itemprop="name">ULIP Plan</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href=base_url."/insurance-plans/savings-and-investments-plans/kotak-e-invest" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak e-Invest Plan</span></a>
					<a href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
					</li>
                  </ul>
                </li>
				<li>
                  <a itemprop="url" href="<?php echo base_url()?>online-plans/savings-plan" data-customer-type="new_customer" class="customer-type"><img title="Icon for wealth creation" alt="Icon for wealth creation" src="assets/images/menu-WealthCreation.png"><span itemprop="name">Savings Plan</span></a>
                  <ul class="third_navUL_subnav">
				  	<li><a data-customer-type="new_customer" class="customer-type" href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings Plan</a>
						<a href=base_url."/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy online-dnone">Buy Online</a>
						</li>
                    <li><a itemprop="url" href=base_url."/online-plans/savings-plan/kotak-guaranteed-savings-plan-online" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Guaranteed Savings Plan</span></a>
					<a href=base_url."/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
					</li>
                  </ul>
                </li>
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>kotakWebBI/" target="_blank"><img title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools &amp; Calculators</span> </a>
                  <ul class="third_navUL_subnav">
                    <li><a rel="follow" itemprop="url" href="<?php echo base_url()?>buy-online-term-insurance/?utm_source=organic&amp;utm_medium=website&amp;utm_campaign=navigation_link&amp;utm_content=term_insurance _calculator&amp;lead_group=kotak_organic" target="_blank" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Term Insurance Calculator</span></a></li>
                    <!--<li><a itemprop="url"  href="<?php echo base_url()?>einsurance/Loginpage.aspx?PID=EAS" target="_blank" class=""><span itemprop="name">Savings Insurance Calculator</span></a></li>-->
                  </ul>
                </li>
              </ul>
            </div>
            <a data-customer-type="new_customer" class="customer-type accordion-section-title term-acc" href="<?php echo base_url()?>online-plans/online-term-insurance-plans">Term Insurance</a>
			<div class="">
			<a class="btn btn-link btn-block text-left collapsed only-option calc-click mt-0 accordion-section-title acc-cal-bef">Calculate Premium</a>
          <div class="rem-buy-cal dis-none">
      <div class="float-right">
        <img src=base_url."/assets/mobile/images/cancel.png" class="img-fluid cross-red dis-red">
      </div>
      <div>
        <h2 class="buy-text">Buy a Life Insurance Plan in a few clicks</h2>
        <p class="now">
          Now you can buy life insurance plans completely online right here.
        </p>
      </div>
      <div class="kotak-plan pt-10">
        <div>
          <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" src=base_url."/assets/images/Kotak-Preferred-e-term.png" class="img-fluid">
        </div>
        <h3 class="kotak-e">Kotak e-Term Plan</h3>
        <p class="plan-pure">Kotak e-Term Plan is a pure term plan that provides a high level of protection to your loved ones in your absence.</p>
        <div class="d-flex">
          <div>
            <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance" class="link">Know more</a>
          </div>
          <div>
            <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href=base_url."/kotak/buy-online-term-insurance/?utm_source=organic&amp;utm_medium=website&amp;utm_campaign=sticky_buy_online&amp;utm_content=sticky_eterm" target="_blank" class="link onlineBuy buy-hover">Buy online</a>
          </div>
        </div>
      </div>
      <div class="kotak-plan pt-40">
        <div>
          <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" src=base_url."/assets/images/Kotak-Preferred-e-term.png" class="img-fluid">
        </div>
        <h3 class="kotak-e">Kotak Health Shield</h3>
        <p class="plan-pure">The Kotak Health Shield Plan helps secure your finances in times of sudden medical expenses related to illness such as Cardiac, Liver, Neuro and Cancer (all early and major stages of illness /conditions of Cancer); along with offering protection for Personal Accident - in case of accidental death or disability.</p>
        <div class="d-flex">
          <div>
            <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Assured Savings Plan'});" href=base_url."/kotak/insurance-plans/health-plans/kotak-health-shield" class="link">Know more</a>
          </div>
          <div>
            <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Assured Savings Plan'});" href=base_url."/kotak/buy-health-insurance-online/#/landing?utm_source=Health_organic&amp;utm_medium=website&amp;utm_campaign=sticky_buy_online&amp;utm_content=sticky_health" target="_blank" class="link onlineBuy buy-hover">Buy online</a>
          </div>
        </div>
      </div>
     <!-- <div class="kotak-plan pt-40">
        <div>
          <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" src=base_url."/assets/images/Kotak-Preferred-e-term.png" class="img-fluid">
        </div>
        <h3 class="kotak-e">Kotak Lifetime Income Plan</h3>
        <p class="plan-pure">Kotak Lifetime Income Plan gives you the assurance of your income continuing throughout your life and in your absence throughout the lifetime of your spouse!</p>
        <div class="d-flex">
          <div>
            <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Lifetime Income Plan'});" href=base_url."/online-plans/retirement-pension-plans/kotak-lifetime-income-plan" class="link">Know more</a>
          </div>
          <div>
            <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak Lifetime Income Plan'});" href=base_url."/kotak/buy-annuity-plan/#/landing?utm_source=Annuity_organic&amp;utm_medium=website&amp;utm_campaign=sticky_buy_online&amp;utm_content=sticky_annuity" target="_blank" class="link onlineBuy buy-hover">Buy online</a>
          </div>
        </div>
      </div>-->
    </div>
	</div>
    <div class="accordion-section-title" href="#accordion-2">
              <a href="<?php echo base_url()?>insurance-guide" data-customer-type="new_customer" class="customer-type">Insurance Guide</a>
            </div>
            <div id="accordion-2" class="accordion-section-content">
              <ul class="why-anc-menu">
                <li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/about-life-insurance" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-AboutLifeInsurance.png"><span itemprop="name"> About Life Insurance</span></a></li>
               <li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/protection" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-ProtectionPlan.png"><span itemprop="name">Protection</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/wealth-creation" data-customer-type="new_customer" class="customer-type"><img title="Icon for wealth creation" alt="Icon for wealth creation" src="assets/images/menu-WealthCreation.png"><span itemprop="name">Wealth Creation</span></a></li>
                <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url()?>insurance-guide/retirement" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-ReirementPlan.png"><span itemprop="name">Retirement</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/savingstax" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/Menu-Saving-Tax-m.png"><span itemprop="name">Savings &amp; Tax</span></a></li>
				<li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/health-insurance" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-Family.png"><span itemprop="name">Health Insurance</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/policy-faqs" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-FAQs.png"><span itemprop="name">Policy FAQs</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/glossary" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-Glossary.png"><span itemprop="name">Glossary</span></a></li>
				<li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/knowledgevault" data-customer-type="new_customer" class="customer-type" target="blank"><img alt="" src="assets/images/knowledgevault.png"><span itemprop="name">Knowledge Vault</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/government-schemes" data-customer-type="new_customer" class="customer-type" target="blank"><img alt="" src="assets/images/knowledgevault.png"><span itemprop="name">Government Schemes</span></a></li>             
              </ul>
            </div>
            <div class="accordion-section-title" href="#accordion-4">
              <a data-customer-type="new_customer" class="customer-type" href="<?php echo base_url()?>insurance-plans">Insurance Plans</a>
            </div>
            <div id="accordion-4" class="accordion-section-content">
              <ul class="third_navUL third_navUL3">
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/protection-plans" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-ProtectionPlan.png"><span itemprop="name">Protection Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/protection-plans/kotak-e-term-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak e-Term Plan</span></a></li>
					 <li><a itemprop="url" href=base_url."/insurance-plans/protection-plans/kotak-term-plan"><span itemprop="name">Kotak Term Plan</span></a></li>
                     <li><a itemprop="url" href=base_url."/insurance-plans/protection-plans/kotak-saral-jeevan-bima"><span itemprop="name">Kotak Saral Jeevan Bima</span></a></li>
                     <!--<li><a itemprop="url"  href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-lifetime-income-plan"  class=""><span itemprop="name">Kotak Lifetime Income plan</span> </a></li> -->
                  </ul>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/protection-plans" data-customer-type="new_customer" class="customer-type viewAll"><span itemprop="name">View all protection plans</span></a>
                </li>
                <li>
                  <a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|savings and investment plans" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans" data-customer-type="new_customer" class="customer-type ga_track "><img alt="" src="assets/images/menu-SavingAndRetirnmentPlan.png"><span itemprop="name">Savings and Investment Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-fortune-maximiser" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Fortune Maximiser</span> </a></li>
                    <li><a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|kotak single invest plus" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-single-invest-plus" data-customer-type="new_customer" class="customer-type ga_track "><span itemprop="name">Kotak Single Invest Plus</span></a></li>
                  </ul>
                  <a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|view all saving and investment plans" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans" data-customer-type="new_customer" class="customer-type viewAll ga_track"><span itemprop="name">View all saving and investment plans</span></a>
                </li>
          
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/health-plans" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-ProtectionPlan.png"><span itemprop="name">Health Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/health-plans/kotak-health-shield" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Health Shield</span></a></li>
                  </ul>
                  <!-- <a itemprop="url"  href="<?php echo base_url()?>insurance-plans/protection-plans" class="viewAll"><span itemprop="name">View all protection plans</span></a>  -->
                </li>
				      <li>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/retirement-plans" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-ReirementPlan.png"><span itemprop="name">Retirement Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <!-- <li><a itemprop="url"  href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-premier-pension-plan" class=""><span itemprop="name">Kotak Premier Pension Plan</span> </a></li>
						 <li><a itemprop="url"  href="" class=""><span itemprop="name">Kotak Lifetime Income Plan</span></a></li>-->
                    <li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-saral-pension" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Saral Pension</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-assured-pension" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Assured Pension</span></a></li>
					<li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-lifetime-income-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Lifetime Income Plan</span></a></li>
                  </ul>
                  <a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|view all Retirement plans" href="<?php echo base_url()?>insurance-plans/retirement-plans" data-customer-type="new_customer" class="customer-type viewAll ga_track"><span itemprop="name">View all retirement plans</span></a>
                </li>
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/insurance-plan-riders" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-InsuranceRider.png"><span itemprop="name">Our Rider Solutions</span> </a>
                </li>
                <li>
                  <a href="<?php echo base_url()?>/kotakWebBI/" target="_blank"><img title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools &amp; Calculators</span> </a>
                </li>
              </ul>
            </div>
            <div class="accordion-section-title" href="#accordion-5">
              <a href="<?php echo base_url()?>group-plans" data-customer-type="new_customer" class="customer-type">Group Plans</a>
            </div>
            <div id="accordion-5" class="accordion-section-content">
              <ul class="third_navUL third_navUL03">
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/Menu-group-gratuity.png"><span itemprop="name">Group Gratuity/Leave Encashment</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment/kotak-gratuity-group-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Gratuity Group Plan</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Leave Encashment Group Plan</span></a></li>
                  </ul>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment" data-customer-type="new_customer" class="customer-type viewAll"><span itemprop="name">View all Group Gratuity/Leave Encashment plans</span></a>
                </li>
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-superannuation" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/Menu-group-superannuation.png"><span itemprop="name">Group Superannuation</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-superannuation/kotak-secure-return-superannuation-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Secure Return Superannuation Plan</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-superannuation/kotak-superannuation-group-plan-ii" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Superannuation Group Plan – II</span></a></li>
                  </ul>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-superannuation" data-customer-type="new_customer" class="customer-type viewAll"><span itemprop="name">View all Group Superannuation plans</span></a>
                </li>
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-term" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/Menu-group-team.png"><span itemprop="name">Group Term</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-term/kotak-term-group-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Term Group Plan</span></a></li>
                    <!-- <li><a itemprop="url"  href="<?php echo base_url()?>group-plans/group-term/kotak-group-secure" class=""><span itemprop="name">Kotak Group Secure</span></a></li> -->
                  </ul>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-term" data-customer-type="new_customer" class="customer-type viewAll"><span itemprop="name">View all Group Term plans</span></a>
                </li>
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-credit" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/Menu-group-credit.png"><span itemprop="name">Group Credit</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-credit/kotak-complete-cover-group-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Complete Cover Group Plan</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-credit/kotak-group-assure" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Group Assure</span></a></li>
                  </ul>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-credit" data-customer-type="new_customer" class="customer-type viewAll"><span itemprop="name">View all Group Credit plans</span></a>
                </li>
              </ul>
            </div>
            <div class="accordion-section-title" href="#accordion-6">
              <a data-customer-type="new_customer" class="customer-type" href="<?php echo base_url()?>how-do-i">How Do I?</a>
            </div>
            <div id="accordion-6" class="accordion-section-content">
              <ul class="third_navUL third_navUL03">
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/pay-my-premium" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-PayMyPremium.png"><span itemprop="name">Pay My Premium</span></a></li>
                <li><a itemprop="url" target="blank" href="https://customer.kotaklifeinsurance.com/ocm" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-FileAClaim.png"><span itemprop="name">File a Claim</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/manage-my-policy" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-ManageMyPolicy.png"><span itemprop="name">Manage My Policy</span></a></li>
                <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url()?>how-do-i/download-application-form" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-DownloadApplicationForm.png"><span itemprop="name">Download Application Forms</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/get-policy-brochure" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-GetPolicyBrochure.png"><span itemprop="name">Get Policy Brochure</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-Check-Policy-Document-Specimen.png"><span itemprop="name">Check Policy Document Specimen</span></a></li>
                <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url()?>how-do-i/fund-update" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-Fund-Update.png"><span itemprop="name">Browse Fund Updates</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/understand-stages-of-application" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-Understand-the-Stages-of-My-Application.png"><span itemprop="name">Understand the Stages of My Application</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/apply-for-life-insurance-plan" data-customer-type="new_customer" class="customer-type"><img alt="Apply for a line insurance plan online at Kotak Life" title="Apply for a line insurance plan online at Kotak Life" src="assets/images/menu-Apply-For-A-Life-Insurance-Plan.png"><span itemprop="name">Apply for a Life Insurance Plan</span></a></li>
                <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url()?>how-do-i/locate-kotak-branches" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-Locate-a-Kotak-Life-Branch.png"><span itemprop="name">Locate a Kotak Life branch</span></a></li>
                <li><a itemprop="url" href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" data-customer-type="new_customer" class="customer-type" target="blank"><img alt="" src="assets/images/Menu-Download-Statement.png"><span itemprop="name">Download statements</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/verify-life-advisor" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/Menu-KnowYourAdvisor.png"><span itemprop="name">Verify My Life Advisor</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/registerfor-ecs" data-customer-type="new_customer" class="customer-type"><img alt="" src="assets/images/menu-Check-Policy-Document-Specimen.png"><span itemprop="name">Register for ECS</span></a></li>
              </ul>
            </div>
			</div>
          </div>       
		<?php }  ?>
		<!--Mobile New Customer End-->
		
		<!--Mobile Existing Customer Start-->
		<?php if($mobcusType=="existing_customer"){ ?>		
            <div class="accordion">
          <div class="accorfion-section"> 
			<!--<a data-customer-type="existing_customer" class="customer-type accordion-section-title term-acc" href="<?php echo base_url()?>">Home</a>-->
			<div class="accordion-section-title" href="#accordion-1">
              <a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url()?>how-do-i">How Do I?</a>
            </div>
            <div id="accordion-1" class="accordion-section-content">
			<ul class="third_navUL third_navUL03">
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/pay-my-premium" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-PayMyPremium.png"><span itemprop="name">Pay My Premium</span></a></li>
                <li><a itemprop="url" target="blank" href="https://customer.kotaklifeinsurance.com/ocm" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-FileAClaim.png"><span itemprop="name">File a Claim</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/manage-my-policy" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-ManageMyPolicy.png"><span itemprop="name">Manage My Policy</span></a></li>
                <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url()?>how-do-i/download-application-form" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-DownloadApplicationForm.png"><span itemprop="name">Download Application Forms</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/get-policy-brochure" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-GetPolicyBrochure.png"><span itemprop="name">Get Policy Brochure</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-Check-Policy-Document-Specimen.png"><span itemprop="name">Check Policy Document Specimen</span></a></li>
                <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url()?>how-do-i/fund-update" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-Fund-Update.png"><span itemprop="name">Browse Fund Updates</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/understand-stages-of-application" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-Understand-the-Stages-of-My-Application.png"><span itemprop="name">Understand the Stages of My Application</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>how-do-i/apply-for-life-insurance-plan" data-customer-type="existing_customer" class="customer-type"><img alt="Apply for a line insurance plan online at Kotak Life" title="Apply for a line insurance plan online at Kotak Life" src="assets/images/menu-Apply-For-A-Life-Insurance-Plan.png"><span itemprop="name">Apply for a Life Insurance Plan</span></a></li>
                <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url()?>how-do-i/locate-kotak-branches" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-Locate-a-Kotak-Life-Branch.png"><span itemprop="name">Locate a Kotak Life branch</span></a></li>
				<li><a itemprop="url" href="<?php echo base_url()?>how-do-i/verify-life-advisor" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/Menu-KnowYourAdvisor.png"><span itemprop="name">Verify My Life Advisor</span></a></li>
                <li><a itemprop="url" href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" data-customer-type="existing_customer" class="customer-type" target="blank"><img alt="" src="assets/images/Menu-Download-Statement.png"><span itemprop="name">Download statements</span></a></li>
             </ul>
            </div>			
				<div class="accordion-section-title" href="#accordion-6">
              <a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url()?>fund-performance">Fund Performance</a>
            </div>
			<div id="accordion-6" class="accordion-section-content">
			<ul class="third_navUL third_navUL03">
                <li><a itemprop="url" href="<?php echo base_url()?>fund-performance/nav-performance" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-PayMyPremium.png"><span itemprop="name">NAV Performance</span></a></li>
                <li><a itemprop="url" target="blank" href="<?php echo base_url()?>fund-performance/fund-update" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-FileAClaim.png"><span itemprop="name">Fund Update</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>fund-performance/investment-philosophy" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-ManageMyPolicy.png"><span itemprop="name">Investment Philosophy</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>fund-performance/investment-fund-faqs" data-customer-type="existing_customer" class="customer-type" target="blank"><img alt="" src="assets/images/Menu-Download-Statement.png"><span itemprop="name">Investment Fund FAQs</span></a></li>
             </ul>
			 </div>			
			 <div class="accordion-section-title" href="#accordion-8">
              <a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url()?>insurance-guide">Insurance Guide</a>
            </div>
		    <div id="accordion-8" class="accordion-section-content">
			<ul class="third_navUL third_navUL03">
                <li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/about-life-insurance" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-PayMyPremium.png"><span itemprop="name">About Life Insurance</span></a></li>
                <li><a itemprop="url" target="blank" href="<?php echo base_url()?>insurance-guide/protection" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-FileAClaim.png"><span itemprop="name">Protection</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/wealth-creation" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-ManageMyPolicy.png"><span itemprop="name">Wealth Creation</span></a></li>
                <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url()?>insurance-guide/retirement" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-DownloadApplicationForm.png"><span itemprop="name">Retirement</span></a></li>
                <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url()?>insurance-guide/savingstax" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-Locate-a-Kotak-Life-Branch.png"><span itemprop="name">Savings & Tax</span></a></li>
				<li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/policy-faqs" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/Menu-KnowYourAdvisor.png"><span itemprop="name">Policy FAQs</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>insurance-guide/glossary" data-customer-type="existing_customer" class="customer-type" target="blank"><img alt="" src="assets/images/Menu-Download-Statement.png"><span itemprop="name">Glossary</span></a></li>
			 </div>
			<!--existing online plans newv -->
			  <div class="accordion-section-title" href="#accordion-3">
              <a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url()?>online-plans">Online Plans</a>
            </div>
            <div id="accordion-3" class="accordion-section-content">
              <ul class="third_navUL third_navUL03">
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>online-plans/online-term-insurance-plans" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-ProtectionPlan.png"> <span itemprop="name">Term Insurance Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" onclick="productClick(this)" data-tag="kotak-e-term-plan-online" href="<?php echo base_url()?>online-plans/online-term-insurance-plans/kotak-e-term-plan-online" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak e-Term Plan</span></a></li>
                  </ul>
                </li>				
				 <li>
                  <a itemprop="url" href="<?php echo base_url()?>online-plans/retirement-pension-plans" data-customer-type="existing_customer" class="customer-type"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Retirement Plan</span></a>
                  <ul class="third_navUL_subnav">
                    <!--<li><a itemprop="url" href="<?php echo base_url()?>online-plans/retirement-pension-plans/kotak-lifetime-income-plan" data-customer-type="existing_customer" class="customer-type"><span itemprop="name">Kotak Lifetime Income Plan</span></a></li>
                  --></ul>
                </li>
				<li>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/health-plans" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-ProtectionPlan.png"><span itemprop="name">Health Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/health-plans/kotak-health-shield" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Health Shield</span></a></li>
                  </ul>
                  <!-- <a itemprop="url"  href="<?php echo base_url()?>insurance-plans/protection-plans" class="viewAll"><span itemprop="name">View all protection plans</span></a>  -->
                </li>
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>online-plans/ulip-plan" data-customer-type="existing_customer" class="customer-type"><img title="Icon for wealth creation" alt="Icon for wealth creation" src="assets/images/menu-WealthCreation.png"><span itemprop="name">ULIP Plan</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href=base_url."/insurance-plans/savings-and-investments-plans/kotak-e-invest" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak e-Invest Plan</span></a></li>
                  </ul>
                </li>
				<li>
                  <a itemprop="url" href="<?php echo base_url()?>online-plans/savings-plan" data-customer-type="existing_customer" class="customer-type"><img title="Icon for wealth creation" alt="Icon for wealth creation" src="assets/images/menu-WealthCreation.png"><span itemprop="name">Savings Plan</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href=base_url."/online-plans/savings-plan/kotak-guaranteed-savings-plan-online" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Guaranteed Savings Plan</span></a></li>
                  </ul>
                </li>               
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>kotakWebBI/" target="_blank"><img title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools &amp; Calculators</span> </a>
                  <ul class="third_navUL_subnav">
                    <li><a rel="follow" itemprop="url" href="<?php echo base_url()?>buy-online-term-insurance/?utm_source=organic&amp;utm_medium=website&amp;utm_campaign=navigation_link&amp;utm_content=term_insurance _calculator&amp;lead_group=kotak_organic" target="_blank" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Term Insurance Calculator</span></a></li>
                    <!--<li><a itemprop="url"  href="<?php echo base_url()?>einsurance/Loginpage.aspx?PID=EAS" target="_blank" class=""><span itemprop="name">Savings Insurance Calculator</span></a></li>-->
                  </ul>
                </li>
                <!--<li>
                      <a itemprop="url"  href="<?php echo base_url()?>online-plans/online-retirement-plans" class=""><img alt="" src="assets/images/menu-ReirementPlan.png"> <span itemprop="name">Retirement Plan</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url()?>online-plans/online-retirement-plans/kotak-e-lifetime-income-plan" class=""><span itemprop="name">Kotak e-Lifetime Income Plan</span></a></li>
                      </ul>
                    </li>-->
              </ul>
            </div>
			<!--existing online plans new ^-->
			<div class="accordion-section-title" href="#accordion-4">
              <a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url()?>insurance-plans">Insurance Plans</a>
            </div>
			 <div id="accordion-4" class="accordion-section-content">
              <ul class="third_navUL third_navUL03">
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/protection-plans" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-ProtectionPlan.png"> <span itemprop="name">Protection Plans </a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" onclick="productClick(this)" data-tag="kotak-e-term-plan-online" href="<?php echo base_url()?>insurance-plans/protection-plans/kotak-e-term-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak e-Term Plan</span></a></li>
					<!--<li><a itemprop="url" onclick="productClick(this)" data-tag="kotak-e-term-plan-online" href="<?php echo base_url()?>insurance-plans/protection-plans/kotak-income-protection-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Income Protection Plan</span></a></li>-->
					<a itemprop="url"  href="<?php echo base_url()?>insurance-plans/protection-plans" class="viewAll"><span itemprop="name">View all protection plans</span></a>
                  </ul>
                </li>
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans" data-customer-type="existing_customer" class="customer-type"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Savings and Investment Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-premier-life-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Premier Life Plan</span></a></li>
					<li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-single-invest-plus" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Single Invest Plus</span></a></li>
					<a itemprop="url"  href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans" class="viewAll"><span itemprop="name">View all savings and investment plans</span></a>
                  </ul>
                </li>
				<li>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/retirement-plans" data-customer-type="existing_customer" class="customer-type"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Retirement Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/kotak-premier-pension-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Premier Pension Plan</span></a></li>
					<li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/kotak-lifetime-income-plan-online" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Lifetime Income Plan</span></a></li>
				 </ul>
                </li>
				<li>
                  <a itemprop="url" href="<?php echo base_url()?>insurance-plans/child-plans" data-customer-type="existing_customer" class="customer-type"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Child Plans</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/child-plans/kotakheadstart-child-assure" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Headstart Child Assure</span></a></li>
                  </ul>
                </li>
                <li>
				<li><a itemprop="url" href="<?php echo base_url()?>insurance-plans/insurance-plan-riders" target="_blank" data-customer-type="existing_customer" class="customer-type"><span itemprop="name">Our Rider Solutions</span></a></li>
				<li><a itemprop="url" href="<?php echo base_url()?>kotakWebBI"><span itemprop="name">Tools & Calculators</span></a></li>
                </li>
              </ul>
            </div>
			<div class="accordion-section-title" href="#accordion-5">
              <a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url()?>group-plans">Group Plans</a>
            </div>
			<div id="accordion-5" class="accordion-section-content">
              <ul class="third_navUL third_navUL03">
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-ProtectionPlan.png"> <span itemprop="name">Group Gratuity/Leave Encashment</a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" onclick="productClick(this)" data-tag="kotak-e-term-plan-online" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment/kotak-gratuity-group-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Gratuity Group Plan</span></a></li>
					<li><a itemprop="url" onclick="productClick(this)" data-tag="kotak-e-term-plan-online" href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan" data-customer-type="new_customer" class="customer-type"><span itemprop="name">Kotak Leave Encashment Group Plan</span></a></li>
					<a itemprop="url"  href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment" class="viewAll"><span itemprop="name">View all Group/Gratuity Leave Encashment Plans</span></a>
                  </ul>
                </li>
                <li>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-superannuation" data-customer-type="existing_customer" class="customer-type"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Group Superannuation</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-superannuation/kotak-secure-return-superannuation-plan" data-customer-type="existing_customer" class="customer-type"><span itemprop="name">Kotak Secure Return Superannuation Plan</span></a></li>
					<li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-superannuation/kotak-superannuation-group-plan-ii" data-customer-type="existing_customer" class="customer-type"><span itemprop="name">Kotak Superannuation Group Plan - II</span></a></li>
					<a itemprop="url"  href="<?php echo base_url()?>group-plans/group-superannuation" class="viewAll"><span itemprop="name">View all Group Superannuation Plans</span></a>
                  </ul>
                </li>
				<li>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-term" data-customer-type="existing_customer" class="customer-type"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Group Term</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-term/kotak-term-group-plan" data-customer-type="existing_customer" class="customer-type"><span itemprop="name">Kotak Term Group Plan</span></a></li>
					<a itemprop="url"  href="<?php echo base_url()?>group-plans/group-term" class="viewAll"><span itemprop="name">View all Group Term Plans</span></a>
                  </ul>
                </li>				
				<li>
                  <a itemprop="url" href="<?php echo base_url()?>group-plans/group-term" data-customer-type="existing_customer" class="customer-type"><img src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Group Credit</span></a>
                  <ul class="third_navUL_subnav">
                    <li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-credit/kotak-complete-cover-group-plan" data-customer-type="existing_customer" class="customer-type"><span itemprop="name">Kotak Complete Cover Group Plan</span></a></li>
					<li><a itemprop="url" href="<?php echo base_url()?>group-plans/group-credit/kotak-group-assure" data-customer-type="existing_customer" class="customer-type"><span itemprop="name">Kotak Group Assure</span></a></li>
					<a itemprop="url"  href="<?php echo base_url()?>group-plans/group-credit" class="viewAll"><span itemprop="name">View all Group Credit Plans</span></a>
                  </ul>
                </li>                
              </ul>
            </div>			
			<div class="accordion-section-title" href="#accordion-7">
              <a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url()?>why-kotak-life">Why Kotak Life</a>
            </div>
			<div id="accordion-7" class="accordion-section-content">
			<ul class="third_navUL third_navUL03">
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/about-us" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-PayMyPremium.png"><span itemprop="name">About Us</span></a></li>
                <li><a itemprop="url" target="blank" href="<?php echo base_url()?>why-kotak-life/corporate-governance" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-FileAClaim.png"><span itemprop="name">Corporate Governance</span></a></li>
                
				<li><a itemprop="url" target="blank" href="<?php echo base_url()?>why-kotak-life/csr" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-FileAClaim.png"><span itemprop="name">CSR</span></a></li>
				<li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/media-center" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-ManageMyPolicy.png"><span itemprop="name">Media Center</span></a></li>
                <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/career" data-customer-type="existing_customer" class="customer-type"><img alt="" src="assets/images/menu-DownloadApplicationForm.png"><span itemprop="name">Career</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/contact-us" data-customer-type="existing_customer" class="customer-type" target="blank"><img alt="" src="assets/images/Menu-Download-Statement.png"><span itemprop="name">Contact Us</span></a></li>
             </ul>
			 </div>
			</div>
			</div>
		<?php }  ?>
		<!--Mobile Existing Customer End-->
		
		<!--Mobile Life Advisor Start-->
		<?php if($mobcusType=="life_advisor"){ ?>		
            <div class="accordion">
          <div class="accorfion-section"> 		  
			<!--<a data-customer-type="life_advisor" class="customer-type accordion-section-title term-acc" href="<?php //echo base_url()?>">Home</a>-->
			<div class="accordion-section-title" href="#accordion-1">
              <a data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url()?>why-kotak-life">Why Kotak Life?</a>
            </div>
            <div id="accordion-1" class="accordion-section-content">
              <ul class="why-anc-menu">
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/about-us" data-customer-type="life_advisor" class="customer-type" >About Us</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/corporate-governance" data-customer-type="life_advisor" class="customer-type">Corporate Governance</span></a></li>
				<li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/csr" data-customer-type="life_advisor" class="customer-type">CSR</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/media-center" data-customer-type="life_advisor" class="customer-type">Media Center</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>why-kotak-life/contact-us" data-customer-type="life_advisor" class="customer-type">Contact Us</span></a></li>
              </ul>
            </div>           
			<a data-customer-type="life_advisor" class="customer-type accordion-section-title term-acc" href="<?php echo base_url()?>career-as-life-advisor">Career as a Life Advisor</a>
			<a data-customer-type="life_advisor" class="customer-type accordion-section-title term-acc" href="<?php echo base_url()?>hiring-process">Hiring Process</a>
			<a data-customer-type="life_advisor" class="customer-type accordion-section-title term-acc" href="<?php echo base_url()?>verify-life-advisor">Know Our Life Advisors</a>
			<a data-customer-type="life_advisor" class="customer-type accordion-section-title term-acc" href="<?php echo base_url()?>life-advisor-faqs">FAQ'S</a>
			<div class="accordion-section-title" href="#accordion-2">
              <a data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url()?>fund-performance">Fund Performance</a>
            </div>
            <div id="accordion-2" class="accordion-section-content">
              <ul class="why-anc-menu">
                <li><a itemprop="url" href="<?php echo base_url()?>fund-performance/fund-update" data-customer-type="life_advisor" class="customer-type" >Fund Update</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>fund-performance/investment-philosophy" data-customer-type="life_advisor" class="customer-type">Investment Philosophy</span></a></li>
                <li><a itemprop="url" href="<?php echo base_url()?>fund-performance/investment-fund-faqs" data-customer-type="life_advisor" class="customer-type">Investment Fund FAQs</span></a></li>
               </ul>
            </div>
			</div>
			</div>
		<?php }  ?>
		<!--Mobile Life Advisor End-->
      </div>
      
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <!--Desktop New Customer Menu Start-->	  
	  <ul class="navUL only-desktop">
        <li><a href="javascript:;" data-customer-type="new_customer"  class="customer-type <?php echo ($cusType == 'new_customer') ? 'selected' : '' ?>" onClick="dataLayer.push({'event':'event top menu', 'category':'New Customers', 'action':'top nav click','label':'<?php echo current_url(); ?>'});">New Customers</a>
		  <?php if($cusType=="new_customer"){ ?>
          <div class="second_navWrap">
            <ul class="second_navUL second_navUL_new">
              <li class="thirdLevel <?php check_menu_active(1, WKL_MODULE_LINK) ?> ">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="why kotak life?" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK) ?>" ><span itemprop="name">Why Kotak Life?</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL">
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/about-us') ?>" class="<?php check_menu_active(2, 'about-us') ?>"><img alt="A group of diversed individuals" src="assets/images/menu-AboutKLI.png" title="A group of diversed individuals"><span itemprop="name">About Us</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/corporate-governance') ?>" class="<?php check_menu_active(2, 'corporate-governance') ?>"><img alt="Icon for corporate governance" src="assets/images/menu-CorporateGovernance.png"><span itemprop="name">Corporate Governance</span></a></li>
                     <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/csr') ?>" class="<?php check_menu_active(2, 'csr') ?>"><img alt="Icon for corporate governance" src="assets/images/menu-CorporateGovernance.png"><span itemprop="name">CSR</span></a></li>                   
				   <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/media-center') ?>" class="<?php check_menu_active(2, 'media-center') ?>"><img alt="Icon for announcement and media centre" src="assets/images/menu-MediaCenter.png"><span itemprop="name">Media Center</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/career') ?>" class="<?php check_menu_active(2, 'career') ?>"><img alt="Icon for jobs at Kotak Life Insurance" src="assets/images/menu-Career.png"><span itemprop="name">Career</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/contact-us') ?>" class="<?php check_menu_active(2, 'contact-us') ?>"><img alt="Contact Us Icon" src="assets/images/menu-Contact.png"><span itemprop="name">Contact Us</span></a></li>
                  </ul>
                </div>				
              </li>
			    <li class="thirdLevel <?php check_menu_active(1, OP_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="online plans" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(OP_MODULE_LINK); ?>"><span itemprop="name">Online Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL third_navUL03">
                    <li>
						<a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-term-insurance-plans') ?>" class="<?php check_menu_active(2, 'online-term-insurance-plans') ?>"><img alt="Icon for Protection Plan" src="assets/images/menu-ProtectionPlan.png"> <span itemprop="name">Term Insurance Plans <!--Protection Plan--></span></a>
						<ul class="third_navUL_subnav">
							<li><a itemprop="url" onclick="productClick(this)" data-tag="kotak-e-term-plan-insurance" href="<?php echo base_url(OP_MODULE_LINK.'/online-term-insurance-plans/kotak-e-term-plan-insurance') ?>" class="<?php check_menu_active(3, 'kotak-e-term-plan-online') ?>"><span itemprop="name">Kotak e-Term Plan</span></a>
							 <a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
							</li>
						</ul>						
                    </li>					
									
					
						<li>
                      <a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/savings-plan') ?>"  class="<?php check_menu_active(2, 'savings-plan') ?>"><img alt="" src="assets/images/menu-SavingAndRetirnmentPlan.png"><span itemprop="name">Savings Plan</span></a>
                      <ul class="third_navUL_subnav">
                        
						<li><a itemprop="url"  href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="<?php check_menu_active(3, 'kotak-guaranteed-savings-plan-online') ?>"><span itemprop="name">Kotak Assured Savings Plan</span></a>
						<a href=base_url."/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy online-dnone">Buy Online</a> 
						</li>
						<li><a itemprop="url"  href="<?=base_url()?>online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="<?php check_menu_active(3, 'kotak-guaranteed-savings-plan-online') ?>"><span itemprop="name">Kotak Guaranteed Savings Plan</span></a>
						<a href=base_url."/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                       </ul>
					</li>
					
					
	<li>
						<a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/retirement-pension-plans') ?>" class="<?php check_menu_active(2, 'online-retirement-plans') ?>"><img alt="Icon for Retirement Plan" src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Retirement Plan</span></a>
						<ul class="third_navUL_subnav">
							<!--<li><a itemprop="url"  href="<?php echo base_url()?>online-plans/retirement-pension-plans/kotak-lifetime-income-plan" class="<?php check_menu_active(3, 'kotak-lifetime-income-plan') ?>"><span itemprop="name">Kotak Lifetime Income Plan</span></a>
							<a href=base_url."/buy-annuity-plan/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
							</li>-->
						</ul>
                    </li>					
					<li>
                      <a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/ulip-plan') ?>"  class="<?php check_menu_active(2, 'ulip-plan') ?>"><img title="Icon for wealth creation" alt="Icon for wealth creation" src="assets/images/menu-WealthCreation.png"><span itemprop="name">ULIP Plan</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?=base_url()?>online-plans/ulip-plan/kotak-e-invest" class="<?php check_menu_active(3, 'kotak-e-invest') ?>"><span itemprop="name">Kotak e-Invest Plan</span></a>
						<a href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                       </ul>
					</li>
					<li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/health-plans') ?>"  class="<?php check_menu_active(2, 'health-plans') ?>"><img alt="Icon for Family" src="assets/images/menu-Family.png"><span itemprop="name">Health Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/health-plans/kotak-health-shield') ?>" class="<?php check_menu_active(3, 'kotak-health-shield') ?>"><span itemprop="name">Kotak Health Shield</span></a>
						<a href=base_url."/buy-health-insurance-online/#/landing?utm_source=health_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                       </ul>
					</li>
					<li>
						<a itemprop="url" href="<?php echo base_url() ?>kotakWebBI/" target="_blank"><img title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools & Calculators</span> </a>
						<ul class="third_navUL_subnav">
							<li><a rel="follow" itemprop="url"  href="<?php echo base_url() ?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=navigation_link&utm_content=term_insurance _calculator&lead_group=kotak_organic" target="_blank" class=""><span itemprop="name">Term Insurance Calculator</span></a></li>
                         </ul>
                    </li>					
                  </ul>				  
                </div>
              </li>
			   <li class=""><a itemprop="url" target='_blank' href="<?php echo base_url()?>online-plans/online-term-insurance-plans" class=""><span itemprop="name">Term Insurance</span></a></li>
			   <li class=""><a rel="follow" itemprop="url" onclick="open_online()" class="open_online"  data='Buy Online'><span itemprop="name">Calculate Premium</span></a></li>
			    <li class="thirdLevel <?php check_menu_active(1, IG_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="insurance guide" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(IG_MODULE_LINK); ?>"><span itemprop="name">Insurance Guide</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL4">
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/about-life-insurance'); ?>" class="<?php check_menu_active(2, 'about-life-insurance') ?>"><img alt="Icon for life insurance information" src="assets/images/menu-AboutLifeInsurance.png"><span itemprop="name"> About Life Insurance</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/protection'); ?>" class="<?php check_menu_active(2, 'protection') ?>"><img alt="Icon for Protection Plan" src="assets/images/menu-ProtectionPlan.png"><span itemprop="name">Protection</span></a></li>
					<!--<li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/family'); ?>" class="<?php check_menu_active(2, 'family') ?>"><img alt="Icon for Family" src="assets/images/menu-Family.png"><span itemprop="name">Family</span> </a></li>-->
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/wealth-creation'); ?>" class="<?php check_menu_active(2, 'wealth-creation') ?>"><img title="Icon for wealth creation" alt="Icon for wealth creation" src="assets/images/menu-WealthCreation.png"><span itemprop="name">Wealth Creation</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/retirement'); ?>" class="<?php check_menu_active(2, 'retirement') ?>"><img alt="
					Icon for Retirement Plan" src="assets/images/menu-ReirementPlan.png"><span itemprop="name">Retirement</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/savingstax'); ?>" class="<?php check_menu_active(2, 'savingstax') ?>"><img alt="Icon for tax and savings" src="assets/images/Menu-Saving-Tax-m.png"><span itemprop="name">Savings & Tax</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/government-schemes'); ?>" class="<?php check_menu_active(2, 'government-schemes') ?>"><img alt="Icon for knowledgevault and definitions" src="assets/images/government-schemes.png" class="wh-40"><span itemprop="name">Government Schemes</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/health-insurance'); ?>" class="<?php check_menu_active(2, 'health-insurance') ?>"><img alt="Icon for Family" src="assets/images/menu-Family.png"><span itemprop="name">Health Insurance</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/policy-faqs'); ?>" class="<?php check_menu_active(2, 'policy-faqs') ?>"><img alt="Icon for FAQs" src="assets/images/menu-FAQs.png"><span itemprop="name">Policy FAQs</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/glossary'); ?>" class="<?php check_menu_active(2, 'glossary') ?>"><img alt="Icon for glossary and definitions" src="assets/images/menu-Glossary.png"><span itemprop="name">Glossary</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/knowledgevault'); ?>" class="<?php check_menu_active(2, 'knowledgevault') ?>"><img alt="Icon for knowledgevault and definitions" src="assets/images/knowledgevault.png" class="wh-40"><span itemprop="name">Knowledge Vault</span></a></li>
                  </ul>
                </div> 
              </li>
              <li class="thirdLevel <?php check_menu_active(1, IP_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="insuance plans" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK); ?>"><span itemprop="name">Insurance Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL3">
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans') ?>"  class="<?php check_menu_active(2, 'term-insurance-plans') ?>"><img alt="Icon for Prtotection plan" src="assets/images/menu-ProtectionPlan.png"><span itemprop="name">Protection Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans/kotak-e-term-plan') ?>" class="<?php check_menu_active(3, 'kotak-e-term-plan') ?>"><span itemprop="name">Kotak e-Term Plan</span></a>
						 <a href="" class="menu-buy">Buy Online</a></li>
						 <li><a itemprop="url" href=base_url."/insurance-plans/protection-plans/kotak-term-plan"><span itemprop="name">Kotak Term Plan</span></a>
						 
						 </li>
 <li><a itemprop="url" href=base_url."/insurance-plans/protection-plans/kotak-saral-jeevan-bima"><span itemprop="name">Kotak Saral Jeevan Bima</span></a></li>
						<!-- <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans/kotak-income-protection-plan') ?>"  class="<?php check_menu_active(3, 'kotak-income-protection-plan') ?>"><span itemprop="name">Kotak Income Protection plan</span> </a></li> -->
                       </ul>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans') ?>" class="viewAll"><span itemprop="name">View all protection plans</span></a> 
					</li>
                    <li>
                      <a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|savings and investment plans" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans') ?>" rel="follow"  class="ga_track <?php check_menu_active(2, 'savings-and-investments-plans') ?>"><img alt="Icon for savings" src="assets/images/menu-SavingAndRetirnmentPlan.png"><span itemprop="name">Savings and Investment Plans</span></a>
                      <ul class="third_navUL_subnav">
					  <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-fortune-maximiser') ?>" class="<?php check_menu_active(3, 'kotak-fortune-maximiser') ?>"><span itemprop="name">Kotak Fortune Maximiser</span> </a></li>
                        <!--<li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-premier-life-plan') ?>" class="<?php check_menu_active(3, 'kotak-premier-life-plan') ?>"><span itemprop="name">Kotak Premier Life Plan</span> </a></li>-->
                        <li><a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|kotak single invest plus" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-single-invest-plus') ?>" class="ga_track <?php check_menu_active(3, 'kotak-single-invest-plus') ?>"><span itemprop="name">Kotak Single Invest Plus</span></a></li>
                      </ul>
                      <a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|view all saving and investment plans" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans') ?>" rel="follow" class="viewAll ga_track"><span itemprop="name">View all saving and investment plans</span></a> 
					</li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans') ?>"  class="<?php check_menu_active(2, 'retirement-plans') ?>"><img alt="Icon for Retirement Plan" src="assets/images/menu-ReirementPlan.png"><span itemprop="name">Retirement Plans</span></a>
                      <ul class="third_navUL_subnav">
                       <!-- <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans/kotak-premier-pension-plan') ?>" class="<?php check_menu_active(3, 'kotak-premier-pension-plan') ?>"><span itemprop="name">Kotak Premier Pension Plan</span> </a></li>-->
						<!-- <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-pension-plans/kotak-lifetime-income-plan') ?>" class="<?php check_menu_active(3, 'kotak-lifetime-income-plan') ?>"><span itemprop="name">Kotak Lifetime Income Planssssssss</span></a></li>-->
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans/kotak-saral-pension') ?>" class="<?php check_menu_active(3, 'kotak-saral-pension') ?>"><span itemprop="name">Kotak Saral Pension</span></a></li>
						 <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans/kotak-assured-pension') ?>" class="<?php check_menu_active(3, 'kotak-assured-pension') ?>"><span itemprop="name">Kotak Assured Pension</span></a></li>
                      </ul>
					  <a itemprop="url" data-action="insurance plans" data-event="event sub menu items" data-label="click|view all Retirement plans" href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans') ?>" class="viewAll ga_track"><span itemprop="name">View all retirement plans</span></a> 
					</li>
                     <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/health-plans') ?>"  class="<?php check_menu_active(2, 'health-plans') ?>"><img alt="Icon for Family" src="assets/images/menu-Family.png"><span itemprop="name">Health Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/health-plans/kotak-health-shield') ?>" class="<?php check_menu_active(3, 'kotak-health-shield') ?>"><span itemprop="name">Kotak Health Shield</span></a></li>
                       </ul>
                      <!-- <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans') ?>" class="viewAll"><span itemprop="name">View all protection plans</span></a>  -->
					</li>
                    <!-- 
					
					<li class="borderNoneLI">
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/child-plans') ?>"  class="<?php check_menu_active(2, 'child-plans') ?>"><img alt="" src="assets/images/menu-ChildPlan.png"><span itemprop="name">Child Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/child-plans/kotakheadstart-child-assure') ?>" class="<?php check_menu_active(3, 'kotakheadstart-child-assure') ?>"><span itemprop="name">Kotak Headstart Child Assure</span></a></li>
                      </ul></li>
					-->
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/insurance-plan-riders') ?>" class="<?php check_menu_active(2, 'insurance-plan-riders') ?>"><img alt="Rider for Insurance Rider" src="assets/images/menu-InsuranceRider.png"><span itemprop="name">Our Rider Solutions</span> </a>
                      </li>
                    <li>
                      <a href="<?php echo base_url() ?>/kotakWebBI/" target="_blank"><img title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools & Calculators</span> </a>
                    </li>
                  </ul>
                </div>
              </li>
			  
              <li class="thirdLevel <?php check_menu_active(1, GP_MODULE_LINK); ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="group plans" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(GP_MODULE_LINK); ?>"><span itemprop="name">Group Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL03">
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment') ?>"  class="<?php check_menu_active(2, 'group-gratuity-leave-encashment') ?>"><img alt="Icon for growth" src="assets/images/Menu-group-gratuity.png"><span itemprop="name">Group Gratuity/Leave Encashment</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment/kotak-gratuity-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-gratuity-group-plan') ?>"><span itemprop="name">Kotak Gratuity Group Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-leave-encashment-group-plan') ?>"><span itemprop="name">Kotak Leave Encashment Group Plan</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment') ?>" class="viewAll"><span itemprop="name">View all Group Gratuity/Leave Encashment plans</span></a> 
					  </li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation') ?>"  class="<?php check_menu_active(2, 'group-superannuation') ?>"><img alt="Icon for Recurring Income" src="assets/images/Menu-group-superannuation.png"><span itemprop="name">Group Superannuation</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation/kotak-secure-return-superannuation-plan') ?>" class="<?php check_menu_active(3, 'kotak-secure-return-superannuation-plan') ?>"><span itemprop="name">Kotak Secure Return Superannuation Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation/kotak-superannuation-group-plan-ii') ?>" class="<?php check_menu_active(3, 'kotak-superannuation-group-plan-ii') ?>"><span itemprop="name">Kotak Superannuation Group Plan – II</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation') ?>" class="viewAll"><span itemprop="name">View all Group Superannuation plans</span></a> </li>
                     
                    <li>
                    
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term') ?>"  class="<?php check_menu_active(2, 'group-term') ?>"><img alt="Icon for Group Insurance plan" src="assets/images/Menu-group-team.png"><span itemprop="name">Group Term</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term/kotak-term-group-plan') ?>" class="<?php check_menu_active(3, 'kotak-term-group-plan') ?>"><span itemprop="name">Kotak Term Group Plan</span></a></li>
                        <!-- <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term/kotak-group-secure') ?>" class="<?php check_menu_active(3, 'kotak-group-secure') ?>"><span itemprop="name">Kotak Group Secure</span></a></li> -->
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term') ?>" class="viewAll"><span itemprop="name">View all Group Term plans</span></a> </li>
                    
                    <li>
                    
                      <a itemprop="url" href="<?php echo base_url(GP_MODULE_LINK.'/group-credit') ?>"  class="<?php check_menu_active(2, 'group-credit') ?>"><img alt="Icon for group progress" src="assets/images/Menu-group-credit.png"><span itemprop="name">Group Credit</span></a>
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
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/pay-my-premium') ?>" class="<?php check_menu_active(2, 'pay-my-premium') ?>" ><img alt="Icon for Insurance Premium Payment" src="assets/images/menu-PayMyPremium.png"><span itemprop="name">Pay My Premium</span></a></li>
                    <li><a itemprop="url"  target="blank" href="https://customer.kotaklifeinsurance.com/ocm"  rel="follow" class="<?php check_menu_active(2, 'file-claim') ?>"><img alt="Icon for filing an insurance claim" src="assets/images/menu-FileAClaim.png"><span itemprop="name">File a Claim</span></a></li>
                    <li><a itemprop="url"   href="<?php echo base_url(HDI_MODULE_LINK.'/manage-my-policy') ?>" class="<?php check_menu_active(2, 'manage-my-policy') ?>"><img alt="Icon for Manage My Policy - Kotak Life" src="assets/images/menu-ManageMyPolicy.png"><span itemprop="name">Manage My Policy</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"   href="<?php echo base_url(HDI_MODULE_LINK.'/download-application-form') ?>" class="<?php foreach($arrDaf as $dt){ check_menu_active(2, $dt); }?>"><img alt="Icon for downloading application form" src="assets/images/menu-DownloadApplicationForm.png"><span itemprop="name">Download Application Forms</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/get-policy-brochure') ?>" class="<?php foreach($arrGpb as $dts){ check_menu_active(2, $dts); }?>"><img alt="Downloadable PDF icon" src="assets/images/menu-GetPolicyBrochure.png"><span itemprop="name">Get Policy Brochure</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/check-policy-document-specimen') ?>" class="<?php foreach($arrCpd as $d){ check_menu_active(2, $d); }?>"><img alt="Icon for checking policy documents" src="assets/images/menu-Check-Policy-Document-Specimen.png"><span itemprop="name">Check Policy Document Specimen</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"   href="<?php echo base_url(HDI_MODULE_LINK.'/fund-update') ?>" class="<?php check_menu_active(2, 'fund-update') ?>"><img alt="Icon for Fund Performance" src="assets/images/menu-Fund-Update.png"><span itemprop="name">Browse Fund Updates</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK.'/understand-stages-of-application') ?>" class="<?php check_menu_active(2, 'understand-stages-of-application') ?>"><img alt="Icon for Application Tracker" src="assets/images/menu-Understand-the-Stages-of-My-Application.png"><span itemprop="name">Understand the Stages of My Application</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/apply-for-life-insurance-plan') ?>" class="<?php check_menu_active(2, 'apply-for-life-insurance-plan') ?>"><img alt="Apply for a line insurance plan online at Kotak Life" title="Apply for a line insurance plan online at Kotak Life" src="assets/images/menu-Apply-For-A-Life-Insurance-Plan.png"><span itemprop="name">Apply for a Life Insurance Plan</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/locate-kotak-branches') ?>" class="<?php check_menu_active(2, 'locate-kotak-branches') ?>"><img alt="Kotak Life Insurance branch Locator" src="assets/images/menu-Locate-a-Kotak-Life-Branch.png"><span itemprop="name">Locate a Kotak Life branch</span></a></li>
					<li><a itemprop="url"  href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx"  rel="nofollow" class="<?php check_menu_active(2, 'apply-for-life-insurance-plan') ?>" target="blank"><img alt="Icon for downloading Insurance Policy Form" src="assets/images/Menu-Download-Statement.png"><span itemprop="name">Download statements</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/'.LA_SEARCH_LINK)?>" class="<?php check_menu_active(2, 'verify-life-advisor') ?>"><img alt="Icon for Life insurance consultant at Kotak" src="assets/images/Menu-KnowYourAdvisor.png"><span itemprop="name">Verify My Life Advisor</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/registerfor-ecs')?>" class="<?php check_menu_active(2, 'registerfor-ecs') ?>"><img alt="Icon for checking policy documents" src="assets/images/menu-Check-Policy-Document-Specimen.png"><span itemprop="name">Register for ECS</span></a></li>
                  </ul>				  
                </div>
              </li>
            </ul>
			<a href=base_url."/kotak-tv" data-action="KLI-TV" data-label="KLI-TV" data-category="KLI-TV" data-event="KLI-TV" class="tv-pad hide-mobile"><img src="assets/images/ktk-img.png"></a>
		    <a href=base_url."/kotak-tv" data-action="KLI-TV" data-label="KLI-TV" data-category="KLI-TV" data-event="KLI-TV" class="tv-pad-mobile hide-mobile hide-desktop"><img src="assets/images/ktk-img.png"></a>
          </div>
		  <?php } ?>
        </li>
		<!--Desktop New Customer Menu Start-->
		
	
		
		<!--Desktop Existing Customer Menu Start-->
        <li><a href="javascript:;" data-customer-type="existing_customer" class="customer-type <?php echo ($cusType == 'existing_customer') ? 'selected' : '' ?>" onClick="dataLayer.push({'event':'event top menu', 'category':'Existing Customers', 'action':'top nav click','label':'<?php echo current_url(); ?>'});">Existing Customers</a>
			<?php if($cusType=="existing_customer"){ ?>
			 <div class="second_navWrap">


		
		   <ul class="second_navUL">
            <!--  <li class="<?php is_home() ?>"><a itemprop="url" href="<?php echo base_url() ?>" data-customer-type="existing_customer" class="customer-type"><span itemprop="name">Home</span></a></li>-->
			  <li class="thirdLevel <?php check_menu_active(1, HDI_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a data-customer-type="existing_customer" class="customer-type ga_track" data-action="how do i?" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK) ?>"><span itemprop="name">How Do I?</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL third_navUL03">
                    <li><a itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK.'/pay-my-premium') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'pay-my-premium') ?>" ><img alt="Icon for Insurance Premium Payment" src="assets/images/menu-PayMyPremium.png"><span itemprop="name">Pay My Premium</span></a></li>
                    <li><a itemprop="url"  target="_blank" href="https://customer.kotaklifeinsurance.com/ocm"  rel="nofollow" class="<?php check_menu_active(2, 'file-claim') ?>"><img alt="Icon for filing an insurance claim" src="assets/images/menu-FileAClaim.png"><span itemprop="name">File a Claim</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/manage-my-policy') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'manage-my-policy') ?>"><img alt="Icon for Manage My Policy - Kotak Life" src="assets/images/menu-ManageMyPolicy.png"><span itemprop="name">Manage My Policy</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/download-application-form') ?>" data-customer-type="existing_customer" class="customer-type <?php foreach($arrDaf as $dt){ check_menu_active(2, $dt); }?>"><img alt="Icon for downloading application form" src="assets/images/menu-DownloadApplicationForm.png"><span itemprop="name">Download Application Forms</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK.'/get-policy-brochure') ?>" data-customer-type="existing_customer" class="customer-type <?php foreach($arrGpb as $dts){ check_menu_active(2, $dts); }?>"><img alt="Downloadable PDF icon" src="assets/images/menu-GetPolicyBrochure.png"><span itemprop="name">Get Policy Brochure</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/check-policy-document-specimen') ?>" data-customer-type="existing_customer" class="customer-type <?php foreach($arrCpd as $d){ check_menu_active(2, $d); }?>"><img alt="Icon for checking policy documents" src="assets/images/menu-Check-Policy-Document-Specimen.png"><span itemprop="name">Check Policy Document Specimen</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url" href="<?php echo base_url(HDI_MODULE_LINK.'/fund-update') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'fund-update') ?>"><img alt="Icon for Fund Performance" src="assets/images/menu-Fund-Update.png"><span itemprop="name">Browse Fund Updates</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/understand-stages-of-application') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'understand-stages-of-application') ?>"><img alt="Icon for Application Tracker" src="assets/images/menu-Understand-the-Stages-of-My-Application.png"><span itemprop="name">Understand the Stages of My Application</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/apply-for-life-insurance-plan') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'apply-for-life-insurance-plan') ?>"><img alt="Apply for a line insurance plan online at Kotak Life" title="Apply for a line insurance plan online at Kotak Life" src="assets/images/menu-Apply-For-A-Life-Insurance-Plan.png"><span itemprop="name">Apply for a Life Insurance Plan</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/locate-kotak-branches') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'locate-kotak-branches') ?>"><img alt="Kotak Life Insurance branch Locator" src="assets/images/menu-Locate-a-Kotak-Life-Branch.png"><span itemprop="name">Locate a Kotak Life branch</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/'.LA_SEARCH_LINK)?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'verify-life-advisor') ?>"><img alt="Icon for Life insurance consultant at Kotak" src="assets/images/Menu-KnowYourAdvisor.png"><span itemprop="name">Verify My Life Advisor</span></a></li>
					<li><a itemprop="url" data-customer-type="existing_customer" class="customer-type" href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx"><img alt="Icon for downloading Insurance Policy Form" src="assets/images/Menu-Download-Statement.png"><span itemprop="name">Download statements</span></a></li>
					</ul>
                </div>
              </li>
			  <li class="thirdLevel <?php check_menu_active(1, FP_MODULE_LINK) ?> ">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a class="ga_track" data-action="fund performance" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK) ?>" ><span itemprop="name">Fund Performance</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL">
<li><a itemprop="url" href="<?php echo base_url(FP_MODULE_LINK.'/nav-performance') ?>" data-customer-type="existing_customer" class="customer-type class="<?php check_menu_active(2, 'nav-performance') ?>"><img alt="" src="assets/images/menu-NAV-Performance.png"><span itemprop="name">NAV Performance</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(FP_MODULE_LINK.'/fund-update') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'fund-update') ?>"><img alt="Icon for Fund Performance" src="assets/images/menu-Fund-Update.png"><span itemprop="name">Fund Update</span></a></li>
					<li><a itemprop="url" href="<?php echo base_url(FP_MODULE_LINK.'/investment-philosophy') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'investment-philosophy'); check_menu_active(2, 'investment-philosophy-debt'); ?>"><img alt="" src="assets/images/Menu-Investment-Philosophy.png"><span itemprop="name">Investment Philosophy</span></a></li>
					<li><a itemprop="url" href="<?php echo base_url(FP_MODULE_LINK.'/investment-fund-faqs') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'investment-fund-faqs') ?>"><img alt="" src="assets/images/Menu-Investment-Fund-FAQs.png"><span itemprop="name">Investment Fund FAQs</span></a></li>
                  </ul>
                </div>
              </li>
		     <li class="thirdLevel <?php check_menu_active(1, IG_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a data-customer-type="existing_customer" class="customer-type ga_track" data-action="insurance guide" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(IG_MODULE_LINK); ?>"><span itemprop="name">Insurance Guide</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL4">
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/about-life-insurance'); ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'about-life-insurance') ?>"><img alt="Icon for life insurance information" src="assets/images/menu-AboutLifeInsurance.png"><span itemprop="name">About Life Insurance</span></a></li>
					<li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/protection'); ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'protection') ?>"><img alt="Icon for Protection Plan" src="assets/images/menu-ProtectionPlan.png"><span itemprop="name">Protection</span></a></li>
					<!-- <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/family'); ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'family') ?>"><img alt="" src="assets/images/menu-Family.png"><span itemprop="name">Family</span> </a></li> -->
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/wealth-creation'); ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'wealth-creation') ?>"><img title="Icon for wealth creation" alt="Icon for wealth creation" src="assets/images/menu-WealthCreation.png"><span itemprop="name">Wealth Creation</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/retirement'); ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'retirement') ?>"><img alt="Icon for Retirement Plan" src="assets/images/menu-ReirementPlan.png"><span itemprop="name">Retirement</span></a></li>
                    <li class="borderNoneLI"><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/savingstax'); ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'savingstax') ?>"><img alt="Icon for tax and savings" src="assets/images/Menu-Saving-Tax-m.png"><span itemprop="name">Savings & Tax</span></a></li>
                    <li><a itemprop="url" href="<?php echo base_url(IG_MODULE_LINK.'/policy-faqs'); ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'policy-faqs') ?>"><img alt="Icon for FAQs" src="assets/images/menu-FAQs.png"><span itemprop="name">Policy FAQs</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(IG_MODULE_LINK.'/glossary'); ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'glossary') ?>"><img alt="Icon for glossary and definitions" src="assets/images/menu-Glossary.png"><span itemprop="name">Glossary</span></a></li>
					</ul>
                </div>
              </li> 
              <!--online plans desktop new v-->			    			  
			    <li class="thirdLevel <?php check_menu_active(1, OP_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a data-customer-type="existing_customer" class="customer-type ga_track" data-action="online plans" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(OP_MODULE_LINK); ?>"><span itemprop="name">Online Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL third_navUL03">
                    <li>
						<a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-term-insurance-plans') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'online-term-insurance-plans') ?>"><img alt="Icon for Protection Plan" src="assets/images/menu-ProtectionPlan.png"> <span itemprop="name">Term Insurance Plans <!--Protection Plan--></span></a>
						<ul class="third_navUL_subnav">
							<li><a data-customer-type="existing_customer" itemprop="url" onclick="productClick(this)" data-tag="kotak-e-term-plan-insurance" href="<?php echo base_url(OP_MODULE_LINK.'/online-term-insurance-plans/kotak-e-term-plan-insurance') ?>" class="<?php check_menu_active(3, 'kotak-e-term-plan-online') ?>"><span itemprop="name">Kotak e-Term Plan</span>
							</a>
							 <a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
							</li>
						</ul>						
                    </li>					
				
                    <!--<li><a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-savings-plans') ?>" class="<?php check_menu_active(2, 'online-savings-plans') ?>"><img alt="" src="assets/images/menu-SavingAndRetirnmentPlan.png"> <span itemprop="name">Savings Plan</span></a>
                      
					  <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-savings-plans/kotak-e-assured-savings-plan') ?>" class="<?php check_menu_active(3, 'kotak-e-assured-savings-plan') ?>"><span itemprop="name">Kotak e-Assured Savings Plan</span></a></li>
                      </ul>
					  
                    </li>-->
					
                    <!--<li>
                      <a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-retirement-plans') ?>" class="<?php check_menu_active(2, 'online-retirement-plans') ?>"><img alt="Icon for Retirement Plan" src="assets/images/menu-ReirementPlan.png"> <span itemprop="name">Retirement Plan</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/online-retirement-plans/kotak-e-lifetime-income-plan') ?>" class="<?php check_menu_active(3, 'kotak-e-lifetime-income-plan') ?>"><span itemprop="name">Kotak e-Lifetime Income Plan</span></a></li>
                      </ul>
                    </li>-->
						
					<li>
                      <a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/savings-plan') ?>"  class="<?php check_menu_active(2, 'savings-plan') ?>"><img alt="" src="assets/images/menu-SavingAndRetirnmentPlan.png"><span itemprop="name">Savings Plan</span></a>
                      <ul class="third_navUL_subnav">
					<li><a itemprop="url"  href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="<?php check_menu_active(3, 'kotak-guaranteed-savings-plan-online') ?>"><span itemprop="name">Kotak Assured Savings Plan</span></a>
						<a href=base_url."/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy online-dnone">Buy Online</a> 
						</li>
                        <li><a itemprop="url"  href="<?=base_url()?>online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="<?php check_menu_active(3, 'kotak-guaranteed-savings-plan-online') ?>"><span itemprop="name">Kotak Guaranteed Savings Plan</span></a>
						<a href=base_url."/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a> 
						</li>
						
						
						
                       </ul>
					</li>
						<li>
						<a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/retirement-pension-plans') ?>" class="<?php check_menu_active(2, 'online-retirement-plans') ?>"><img alt="Icon for Retirement Plan" src="<?php echo base_url()?>assets/images/menu-ReirementPlan.png"> <span itemprop="name">Retirement Plan</span></a>
						<ul class="third_navUL_subnav">
							<!--<li><a itemprop="url"  href="<?php echo base_url('online-plans/retirement-pension-plans/kotak-lifetime-income-plan') ?>" class="<?php check_menu_active(3, 'kotak-lifetime-income-plan') ?>"><span itemprop="name">Kotak Lifetime Income Plan</span></a>
							 <a href=base_url."/buy-annuity-plan/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a> 
							</li>-->
						</ul>
                    </li>
				
					
					
					
					<li>
                      <a itemprop="url"  href="<?php echo base_url(OP_MODULE_LINK.'/ulip-plan') ?>"  class="<?php check_menu_active(2, 'ulip-plan') ?>"><img title="Icon for wealth creation" alt="Icon for wealth creation" src="assets/images/menu-WealthCreation.png"><span itemprop="name">ULIP Plan</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?=base_url()?>online-plans/ulip-plan/kotak-e-invest" class="<?php check_menu_active(3, 'kotak-health-shield') ?>"><span itemprop="name">Kotak e-Invest Plan</span></a>
						<a href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                       </ul>
					</li>
					
				
					
						<li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/health-plans') ?>"  class="<?php check_menu_active(2, 'health-plans') ?>"><img alt="Icon for Family" src="assets/images/menu-Family.png"><span itemprop="name">Health Plans</span>
					  
					  </a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/health-plans/kotak-health-shield') ?>" class="<?php check_menu_active(3, 'kotak-health-shield') ?>"><span itemprop="name">Kotak Health Shield</span></a>
						<a href=base_url."/buy-health-insurance-online/#/landing?utm_source=health_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a> 
						</li>
                       </ul>
                      <!-- <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans') ?>" class="viewAll"><span itemprop="name">View all protection plans</span></a>  -->
					</li>
					 
				
				
					<li>
						<a itemprop="url" href="<?php echo base_url() ?>kotakWebBI/" target="_blank"><img title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools & Calculators</span> </a>
						<ul class="third_navUL_subnav">
							<li><a rel="follow" itemprop="url"  href="<?php echo base_url() ?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=navigation_link&utm_content=term_insurance _calculator&lead_group=kotak_organic" target="_blank" class=""><span itemprop="name">Term Insurance Calculator</span></a></li>
                            <!--<li><a itemprop="url"  href="<?php echo base_url() ?>einsurance/Loginpage.aspx?PID=EAS" target="_blank" class=""><span itemprop="name">Savings Insurance Calculator</span></a></li>-->
						</ul>
                    </li>
					
                  </ul>
				  
                </div>
              </li>
			  <!--online plans desktop new ^-->
              <li class="thirdLevel <?php check_menu_active(1, IP_MODULE_LINK); ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a data-customer-type="existing_customer" class="customer-type ga_track" data-action="insurance guide" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK); ?>"><span itemprop="name">Insurance Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL3">
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans') ?>"  data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'online-term-insurance-plans') ?>"><img alt="Icon for Protection Plan" src="assets/images/menu-ProtectionPlan.png"><span>Protection Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans/kotak-e-term-plan') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-e-term-plan') ?>"><span itemprop="name">Kotak e-Term Plan</span></a></li>
						 <li><a itemprop="url" href=base_url."/insurance-plans/protection-plans/kotak-term-plan"><span itemprop="name">Kotak Term Plan</span></a></li>
                          <li><a itemprop="url" href=base_url."/insurance-plans/protection-plans/kotak-saral-jeevan-bima"><span itemprop="name">Kotak Saral Jeevan Bima</span></a></li>
						<!--<li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans/kotak-income-protection-plan'); ?>"  data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-income-protection-plan') ?>"><span itemprop="name">Kotak Income Protection plan</span> </a></li>-->
                       </ul>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/protection-plans'); ?>" data-customer-type="existing_customer" class="customer-type viewAll"><span>View all protection plans</span></a> </li>
                    <li>
                      <a itemprop="url"  data-action="insurance plans" data-event="event sub menu items" data-label="click|savings and investment plans" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans'); ?>"  data-customer-type="existing_customer" class="customer-type ga_track <?php check_menu_active(2, 'savings-and-investments-plans') ?>"><img alt="Icon for savings" src="assets/images/menu-SavingAndRetirnmentPlan.png"><span itemprop="name">Savings and Investment Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-premier-life-plan') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-premier-life-plan') ?>"><span itemprop="name">Kotak Premier Life Plan</span> </a></li>
                        <li><a itemprop="url"  data-action="insurance plans" data-event="event sub menu items" data-label="click|kotak single invest plus" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans/kotak-single-invest-plus') ?>" data-customer-type="existing_customer" class="customer-type ga_track <?php check_menu_active(3, 'kotak-single-invest-plus') ?>"><span itemprop="name">Kotak Single Invest Plus</span></a></li>
                      </ul>
                      <a itemprop="url"  data-action="insurance plans" data-event="event sub menu items" data-label="click|view all saving and investment plans" href="<?php echo base_url(IP_MODULE_LINK.'/savings-and-investments-plans') ?>" data-customer-type="existing_customer" class="customer-type viewAll ga_track"><span itemprop="name">View all saving and investment plans</span></a> </li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans') ?>"  data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'retirement-plans') ?>"><img alt="Icon for Retirement Plan" src="assets/images/menu-ReirementPlan.png"><span itemprop="name">Retirement Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/retirement-plans/kotak-premier-pension-plan') ?>" data-customer-type="existing_customer" class="customer-type class="<?php check_menu_active(3, 'kotak-premier-pension-plan') ?>"><span itemprop="name">Kotak Premier Pension Plan</span> </a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(P_MODULE_LINK.'/retirement-plans/kotak-lifetime-income-plan-online') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-lifetime-income-plan') ?>"><span itemprop="name">Kotak Lifetime Income Plan</span></a></li>
                      </ul> </li>
                      
                    <li class="borderNoneLI">
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/child-plans') ?>"  data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'child-plans') ?>"><img alt="" src="assets/images/menu-ChildPlan.png"><span itemprop="name">Child Plans</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/child-plans/kotakheadstart-child-assure') ?>" class="customer-type <?php check_menu_active(3, 'kotakheadstart-child-assure') ?>"><span itemprop="name">Kotak Headstart Child Assure</span></a></li>
                      </ul></li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(IP_MODULE_LINK.'/insurance-plan-riders') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'insurance-plan-riders') ?>"><img alt="Rider for Insurance Rider" src="assets/images/menu-InsuranceRider.png"><span itemprop="name">Our Rider Solutions</span> </a>
                      </li>
                    <li>
                      <a itemprop="url" href="<?php echo base_url() ?>/kotakWebBI/" target="_blank"><img title="Tools and calculators for life insurance plan" alt="Tools and calculators for life insurance plan" src="assets/images/Menu-Tools-Calculators-m.png"><span itemprop="name">Tools & Calculators</span> </a>
                    </li>
					
                  </ul>
                </div>
                <!-- Third NAV Wrapper End -->                
                
              </li>
              <li class="thirdLevel <?php check_menu_active(1, GP_MODULE_LINK) ?>">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a data-customer-type="existing_customer" class="customer-type ga_track" data-action="group plans" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(GP_MODULE_LINK); ?>"><span itemprop="name">Group Plans</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap ">
                  <ul class="third_navUL third_navUL03">
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment') ?>"  data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'group-gratuity-leave-encashment') ?>"><img alt="Icon for growth" src="assets/images/Menu-group-gratuity.png"><span itemprop="name">Group Gratuity/Leave Encashment</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment/kotak-gratuity-group-plan') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-gratuity-group-plan') ?>"><span itemprop="name">Kotak Gratuity Group Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-leave-encashment-group-plan') ?>"><span itemprop="name">Kotak Leave Encashment Group Plan</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-gratuity-leave-encashment') ?>" data-customer-type="existing_customer" class="customer-type viewAll"><span itemprop="name">View all Group Gratuity/Leave Encashment plans</span></a> 
					</li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation') ?>"  data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'group-superannuation') ?>"><img alt="Icon for Recurring Income" src="assets/images/Menu-group-superannuation.png"><span itemprop="name">Group Superannuation</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation/kotak-secure-return-superannuation-plan') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-secure-return-superannuation-plan') ?>"><span itemprop="name">Kotak Secure Return Superannuation Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation/kotak-superannuation-group-plan-ii') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-superannuation-group-plan-ii') ?>"><span itemprop="name">Kotak Superannuation Group Plan – II</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-superannuation') ?>" data-customer-type="existing_customer" class="customer-type viewAll"><span itemprop="name">View all Group Superannuation plans</span></a> 
					</li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'group-term') ?>"><img alt="Icon for Group Insurance plan" src="assets/images/Menu-group-team.png"><span itemprop="name">Group Term</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term/kotak-term-group-plan') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-term-group-plan') ?>"><span itemprop="name">Kotak Term Group Plan</span></a></li>
                        <!-- <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term/kotak-group-secure') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-group-secure') ?>"><span itemprop="name">Kotak Group Secure</span></a></li> -->
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-term') ?>" data-customer-type="existing_customer" class="customer-type viewAll"><span itemprop="name">View all Group Term plans</span></a>
					</li>
                    <li>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit') ?>"  data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'group-credit') ?>"><img alt="Icon for group progress" src="assets/images/Menu-group-credit.png"><span itemprop="name">Group Credit</span></a>
                      <ul class="third_navUL_subnav">
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit/kotak-complete-cover-group-plan') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-complete-cover-group-plan') ?>"><span itemprop="name">Kotak Complete Cover Group Plan</span></a></li>
                        <li><a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit/kotak-group-assure') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(3, 'kotak-group-assure') ?>"><span itemprop="name">Kotak Group Assure</span></a></li>
                      </ul>
                      <a itemprop="url"  href="<?php echo base_url(GP_MODULE_LINK.'/group-credit') ?>" data-customer-type="existing_customer" class="customer-type viewAll"><span itemprop="name">View all Group Credit plans</span></a>
					</li>
                  </ul>
                </div>
              </li> 
			  
			 

			  
              <li class="thirdLevel <?php check_menu_active(1, WKL_MODULE_LINK) ?> ">
                <div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a data-customer-type="existing_customer" class="customer-type ga_track" data-action="why kotak life?" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK) ?>" ><span itemprop="name">Why Kotak Life?</span></a></span><div class="mobNavArrow"></div></div>
                <div class="third_navWrap">
                  <ul class="third_navUL">
                    <li><a itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/about-us') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'about-us') ?>"><img alt="A group of diversed individuals" src="assets/images/menu-AboutKLI.png"><span itemprop="name">About Us</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(WKL_MODULE_LINK.'/corporate-governance') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'corporate-governance') ?>"><img alt="Icon for corporate governance" src="assets/images/menu-CorporateGovernance.png"><span itemprop="name">Corporate Governance</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(WKL_MODULE_LINK.'/csr') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'csr') ?>"><img alt="Icon for corporate governance" src="assets/images/menu-CorporateGovernance.png"><span itemprop="name">CSR</span></a></li>
					
					<li><a itemprop="url"  href="<?php echo base_url(WKL_MODULE_LINK.'/media-center') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'media-center') ?>"><img alt="Icon for announcement and media centre" src="assets/images/menu-MediaCenter.png"><span itemprop="name">Media Center</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(WKL_MODULE_LINK.'/career') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'career') ?>"><img alt="Icon for jobs at Kotak Life Insurance" src="assets/images/menu-Career.png"><span itemprop="name">Career</span></a></li>
                    <li><a itemprop="url"  href="<?php echo base_url(WKL_MODULE_LINK.'/contact-us') ?>" data-customer-type="existing_customer" class="customer-type <?php check_menu_active(2, 'contact-us') ?>"><img alt="" src="assets/images/menu-Contact.png"><span itemprop="name">Contact Us</span></a></li>
                  </ul>
                </div>
              </li>
			  
    
			  
            </ul>
			<a href=base_url."/kotak-tv" data-action="KLI-TV" data-label="KLI-TV" data-category="KLI-TV" data-event="KLI-TV" class="tv-pad hide-mobile"><img src="assets/images/ktk-img.png"></a>
		    <a href=base_url."/kotak-tv" data-action="KLI-TV" data-label="KLI-TV" data-category="KLI-TV" data-event="KLI-TV" class="tv-pad-mobile hide-desktop"><img src="assets/images/ktk-img.png"></a>
			</div>
			  <?php } ?>
		</li>
       


	   <li>
	   <!--DesktopExisting customer Menu End-->
	   
	   <!--Desktop Life Advisor Menu Start-->
		<!--<a href="http://advisor.mykotaklife.com/kliwebportal/" target="_blank">Life Advisor</a>-->
		<a itemprop="url"  href="javascript:;" data-customer-type="life_advisor" class="customer-type <?php echo ($cusType == 'life_advisor') ? 'selected' : '' ?>" onClick="dataLayer.push({'event':'event top menu', 'category':'Life Advisor', 'action':'top nav click','label':'<?php echo current_url(); ?>'});">Life Advisors</a>
		
		<?php if($cusType=="life_advisor"){ ?>
			<div class="second_navWrap"> 
				<ul class="second_navUL">
				<!--  <li class="<?php is_home() ?>"><a data-customer-type="life_advisor" itemprop="url" href="<?php echo base_url() ?>" class="customer-type"><span itemprop="name">Home</span></a></li>-->
				  <li class="thirdLevel <?php check_menu_active(1, WKL_MODULE_LINK) ?> ">
					<div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a data-customer-type="life_advisor" class="ga_track customer-type" data-action="why kotak life?" data-label="click" data-event="event sub menu" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK) ?>" ><span itemprop="name">Why Kotak Life?</span></a></span><div class="mobNavArrow"></div></div>
					<div class="third_navWrap">
					  <ul class="third_navUL">
						<li><a data-customer-type="life_advisor" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/about-us') ?>" class="customer-type <?php check_menu_active(2, 'about-us') ?>"><img alt="A group of diversed individuals" src="assets/images/menu-AboutKLI.png"><span itemprop="name">About Us</span></a></li>
						<li><a data-customer-type="life_advisor" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/corporate-governance') ?>" class="customer-type <?php check_menu_active(2, 'corporate-governance') ?>"><img alt="Icon for corporate governance" src="assets/images/menu-CorporateGovernance.png"><span itemprop="name">Corporate Governance</span></a></li>
						<li><a data-customer-type="life_advisor" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/csr') ?>" class="customer-type <?php check_menu_active(2, 'csr') ?>"><img alt="Icon for corporate governance" src="assets/images/menu-CorporateGovernance.png"><span itemprop="name">CSR</span></a></li>
						
						<li><a data-customer-type="life_advisor" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/media-center') ?>" class="customer-type <?php check_menu_active(2, 'media-center') ?>"><img alt="Icon for announcement and media centre" src="assets/images/menu-MediaCenter.png"><span itemprop="name">Media Center</span></a></li>
						<li><a data-customer-type="life_advisor" itemprop="url" href="<?php echo base_url(WKL_MODULE_LINK.'/contact-us') ?>" class="customer-type <?php check_menu_active(2, 'contact-us') ?>"><img alt="" src="assets/images/menu-Contact.png"><span itemprop="name">Contact Us</span></a></li>
					  </ul>
					</div>
				  </li>
				  
				  
				  <li class="<?php foreach($arrCla as $dt){ check_menu_active(1, $dt); }?>"><a data-customer-type="life_advisor" class="customer-type ga_track" data-action="career as a life advisor" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(CAREER_AS_LIFE_ADVISOR) ?>"><span itemprop="name">Career as a Life Advisor</span></a></li>
				  <li class="<?php check_menu_active(1, HIRING_PROCESS_LINK) ?>"><a data-customer-type="life_advisor" class="customer-type ga_track" data-action="hiring process" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(HIRING_PROCESS_LINK) ?>"><span itemprop="name">Hiring Process</span></a></li>

				  <li class="<?php check_menu_active(1, HDI_MODULE_LINK) ?>"><a data-customer-type="life_advisor" class="customer-type ga_track" data-action="verify-life-advisor" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(HDI_MODULE_LINK.'/'.LA_SEARCH_LINK) ?>" class=""><span itemprop="name">Know Our Life Advisors</span></a></li>
				 				  <li class="<?php check_menu_active(1, LA_FAQS_LINK) ?>"><a data-customer-type="life_advisor" class="customer-type ga_track" data-action="faqs" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(LA_FAQS_LINK) ?>" class=""><span itemprop="name">FAQ'S</span></a></li>


				 <li class="thirdLevel <?php check_menu_active(1, FP_MODULE_LINK) ?> ">
					<div class="linkAcrd"><span itemscope="" itemtype="http://schema.org/SiteNavigationElement"><a data-customer-type="life_advisor" class="customer-type ga_track" data-action="fund performance" data-label="click" data-event="event sub menu" itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK) ?>" ><span itemprop="name">Fund Performance</span></a></span><div class="mobNavArrow"></div></div>
					<div class="third_navWrap">
					  <ul class="third_navUL">
						<!--<li><a itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK.'/nav-performance') ?>" class="<?php check_menu_active(2, 'nav-performance') ?>"><img alt="" src="assets/images/menu-NAV-Performance.png"><span itemprop="name">NAV Performance</span></a></li>-->
						<li><a itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK.'/fund-update') ?>" data-customer-type="life_advisor" class="customer-type <?php check_menu_active(2, 'fund-update') ?>"><img alt="Icon for Fund Performance" src="assets/images/menu-Fund-Update.png"><span itemprop="name">Fund Update</span></a></li>
						<li><a itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK.'/investment-philosophy') ?>" data-customer-type="life_advisor" class="customer-type <?php check_menu_active(2, 'investment-philosophy'); check_menu_active(2, 'investment-philosophy-debt'); ?>"><img alt="" src="assets/images/Menu-Investment-Philosophy.png"><span itemprop="name">Investment Philosophy</span></a></li>
						<li><a itemprop="url"  href="<?php echo base_url(FP_MODULE_LINK.'/investment-fund-faqs') ?>" data-customer-type="life_advisor" class="customer-type <?php check_menu_active(2, 'investment-fund-faqs') ?>"><img alt="" src="assets/images/Menu-Investment-Fund-FAQs.png"><span itemprop="name">Investment Fund FAQs</span></a></li>
					  </ul>

					</div>
				  </li>
				</ul>
				
			<a href=base_url."/kotak-tv" data-action="KLI-TV" data-label="KLI-TV" data-category="KLI-TV" data-event="KLI-TV"class="tv-pad hide-mobile"><img src="assets/images/ktk-img.png"></a>
		    <a href=base_url."/kotak-tv"data-action="KLI-TV" data-label="KLI-TV" data-category="KLI-TV" data-event="KLI-TV" class="tv-pad-mobile hide-desktop"><img src="assets/images/ktk-img.png"></a>
			</div>
		<?php } ?>
		</li>
      </ul>
    </nav>
	
  </div>
   <?php if(isset($mainPlanType) && !empty($mainPlanType)){
                    if($mainPlanType =="Group Plans"){
                        $tollfreeNumber1="1800 120 7856";
						$tollfreeNumber="1800 120 7856";
						$tollfreeNumberIcon="telBtn";
						$tollfreeNumberIcon1="telBtn";
						$tollLink="javascript:";
						$tollLink1="javascript:";
						$tolltext="Phone";
                    }else{
						$tollLink="https://api.whatsapp.com/send/?phone=919321003007&text=Hi";
						$tollLink1="https://api.whatsapp.com/send/?phone=919321003007&text=Hi";
						$tollfreeNumberIcon="whatsBtn-sm";
						$tollfreeNumberIcon1="whatsBtn";
                        $tollfreeNumber="Send Hi to 9321003007";//"1800 209 8800";
                        $tollfreeNumber1="9321003007";
						$tolltext="WhatsApp";
                    }                    
                }else{
					$tollLink="https://api.whatsapp.com/send/?phone=919321003007&text=Hi";
						$tollLink1="https://api.whatsapp.com/send/?phone=919321003007&text=Hi";
						$tolltext="WhatsApp";
						
					$tollfreeNumberIcon1="whatsBtn";
					$tollfreeNumberIcon="whatsBtn-sm";
                     $tollfreeNumber="Send Hi to 9321003007";//"1800 209 8800";
                     $tollfreeNumber1="9321003007";
                }
?>



  <div class="rhsNav">
    <div class="vCenterWrap">
      <ul class="navRhs">
	  

        <li class="mobile-sm"><a href="<?=$tollLink?>" class="<?php echo $tollfreeNumberIcon?>" onClick="dataLayer.push({'event':'event top nav <?=$tolltext?>', 'category':'top nav', 'action':'<?php echo $tollfreeNumber;?>','label':'<?php echo current_url(); ?>'});"><?php echo $tollfreeNumber1;?></a></li>
        <!-- <li><a href="javascript:;" class="telBtn" onClick="dataLayer.push({'event':'event top nav phone', 'category':'top nav', 'action':'<?php echo $tollfreeNumber;?>','label':'<?php echo current_url(); ?>'});"><?php echo $tollfreeNumber;?></a></li> 
		<li><a href="javascript:;" class="telBtn" onClick="dataLayer.push({'event':'event top nav phone', 'category':'top nav', 'action':'<?php echo $tollfreeNumber;?>','label':'<?php echo current_url(); ?>'});"><?php echo $tollfreeNumber;?></a></li>-->
        <li class="mobile-md"><a href="<?=$tollLink1?>;" class="<?php echo $tollfreeNumberIcon1?>" onClick="dataLayer.push({'event':'event top nav <?=$tolltext?>', 'category':'top nav', 'action':'<?php echo $tollfreeNumber;?>','label':'<?php echo current_url(); ?>'});"><?php echo $tollfreeNumber;?></a></li>
       
		
		
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
		
		   <li><a href="<?php echo base_url().'why-kotak-life/contact-us#contact-us-main'?>" data='Contact Us'  class="getCall" onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Contact Us','label':'click'});">Contact Us</a></li>
	<a href=base_url."/kotak-tv" data-action="KLI-TV" data-label="KLI-TV" data-category="KLI-TV" data-event="KLI-TV" class="hide-desktop tv-pad-footer"><img src="assets/images/ktk-img.png"></a>
		<li class="bg-buy-red"><a rel="follow"  href="javascript:;"  data='Buy Online' class="buyOnline"  onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Buy online','label':'click'});">Buy Online</a></li>

		<!--
		<li><a href="javascript:;" data='Buy Online' class="buyOnline"  onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Buy online','label':'click'});">Buy Online</a></li>
		
		  <li><a href="<?php echo base_url().'why-kotak-life/contact-us#contact-us-main'?>" data='Contact Us'  class="getCall" onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Contact Us','label':'click'});">Contact Us</a></li>
		
		-->
		<?php } else if($cusType=="existing_customer"){ /*$gaCat = "Existing Customer";*/ ?>
			<li><a onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Login','label':'<?php echo current_url(); ?>'});" target="_blank" data='Login' href="http://customer.kotaklifeinsurance.com/kliportal/Selectlogin.aspx?__utma=159160096.1147431455.1472017196.1479721288.1479978416.11&__utmb=159160096.1.10.1479978416&__utmc=159160096&__utmx=-&__utmz=159160096.1479978416.11.8.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided)&__utmv=-&__utmk=235117121" class="login">Login</a></li>
			<li><a onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Buy Online','label':'click'});" href="javascript:;" data='Buy Online'  class="buyOnline">Buy online</a></li>
			<!-- <li><a href="<?php echo base_url().'why-kotak-life/contact-us#contact-us-main'?>" onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Contact Us','label':'<?php echo current_url(); ?>'});" href="javascript:;" data='Contact Us'  class="getCall">Contact Us</a></li> -->
			<li><a href="https://care.kotaklifeinsurance.com/webform" onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Contact Us','label':'<?php echo current_url(); ?>'});" href="javascript:;" data='Contact Us'  class="getCall" target="_blank">Customer Service</a></li>
		<?php } else if($cusType=="life_advisor"){ /*$gaCat = "Life Advisor";*/ ?>
			<li><a onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Login','label':'<?php echo current_url(); ?>'});" target="_blank" data='Login'  href="http://advisor.mykotaklife.com/kliwebportal/" class="login">Login</a></li>
			<li><a onClick="dataLayer.push({'event':'event right side menu', 'category':'<?php echo $gaCat;?>', 'action':'Join Us','label':'click'});" href="javascript:;" data='Join Us' class="joinusIcon">Join Us</a></li>
		<?php } ?>
    </ul>
  </div>
  <div class="rhsBoxDetailWrap">
    <div class="rhsBoxDetails"> 
      <!-- Buy Online detail start -->
	  <?php if($cusType=="new_customer" || $cusType=="existing_customer"){  ?>
      <div class="rhsboxWrap buy-online-change buy-online-new-sec">
	  <a onclick="dataLayer.push({'event':'event side menu buy online close', 'category':'New Customer', 'action':'buy online','label':'close'});close_popup();" href="javascript:;" class="closePopup"><span>Close</span></a>
<!--new buy online code v-->
          <div class="buy-life-new">
            <h2 class="">Buy a Life Insurance Plan in a few clicks</h2>
            <h2 class="now-txt hide-mobile">Now you can buy life insurance plan online. </h2>
            <div class="buy-life-slick">
              <div>
                <div class="buy-slick-card buy-slick-card-br">
                  <div class="d-flex">
                    <div class="mr-14">
                      <div class="buy-imgs">

                      </div>
                      <!-- <img alt="" src="assets/images/buy-life-img1.svg"> -->
                    </div>
                    <div class="">
                      <p class="p-txt">Kotak e-Term Plan</p>
                      <p class="lcthree">Protect Your family’s financial future with Kotak e-Term Plan.
                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance" class="hide-desktop knw-mobile">Know more</a>
                      </p>
                      <div class="d-flex buy-online-links">
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance" class="hide-mobile">Know More</a>
                        </div>
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_eterm" class="term-anc">Calculate Premium</a>
                        </div>
                      </div>
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
                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href=base_url."/savings-plan/buy-kotak-assured-savings-plan" class="hide-desktop knw-mobile">Know more</a>
                      </p>
                      <div class="d-flex buy-online-links">
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href=base_url."/savings-plan/buy-kotak-assured-savings-plan" class="hide-mobile">Know More</a>
                        </div>
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href=base_url."/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_kasp" class="term-anc">Calculate Premium</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div>
                <div class="buy-slick-card buy-slick-card-br">
                  <div class="d-flex">
                    <div class="mr-14">
                      <div class="buy-imgs2">

                      </div>
                    </div>
                    <div class="">
                      <p class="p-txt">Kotak Guaranteed Savings Plan </p>
                      <p class="lcthree">A plan that offers long term savings and insurance in one premium.
                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Guaranteed Savings Plan'});" href=base_url."/online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="hide-desktop knw-mobile">Know more</a>
                      </p>




                      <div class="d-flex buy-online-links">
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak Guaranteed Savings Plan'});" href=base_url."/online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="hide-mobile">Know More</a>
                        </div>
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak Guaranteed Savings Plan'});" href=base_url."/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_gsp" class="term-anc">Invest in Savings Plan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div>
                <div class="buy-slick-card buy-slick-card-br">
                  <div class="d-flex">
                    <div class="mr-14">
                      <div class="buy-imgs3">

                      </div>
                    </div>
                    <div class="">
                      <p class="p-txt">Kotak e-Invest</p>
                      <p class="lcthree">Insurance and investment in one plan with Kotak e-Invest.
                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href=base_url."/online-plans/ulip-plan/kotak-e-invest" class="hide-desktop knw-mobile">Know more</a>
                      </p>
                      <div class="d-flex buy-online-links">
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href=base_url."/online-plans/ulip-plan/kotak-e-invest" class="hide-mobile">Know More</a>
                        </div>
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Invest Plan'});" href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_ulip" class="term-anc">Invest in ULIP</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div>
                <div class="buy-slick-card buy-slick-card-br buyhealth">
                  <div class="d-flex">
                    <div class="mr-14">
                      <div class="buy-imgs4">

                      </div>
                    </div>
                    <div class="">
                      <p class="p-txt">Kotak Health Shield</p>
                      <p class="lcthree">Insurance against medical expenses related to heart, brain, liver and Cancer.
                        <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Assured Savings Plan'});" href=base_url."/insurance-plans/health-plans/kotak-health-shield" class="hide-desktop knw-mobile">Know more</a>
                      </p>
                      <div class="d-flex buy-online-links">
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Assured Savings Plan'});" href=base_url."/insurance-plans/health-plans/kotak-health-shield" class="hide-mobile">Know More</a>
                        </div>
                        <div>
                          <a onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Assured Savings Plan'});" href=base_url."/buy-health-insurance-online/#/landing?utm_source=Health_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_health" class="term-anc">Invest in Health Plan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>








            </div>
          </div>
          <!--new buy online code ^-->
      </div>
	  <?php } ?>
      <!-- Buy Online detail End --> 
      

    </div>
  </div>
</div>
<!-- RHS Fixed Menu End --> 
<!-- Header End -->

<?php //echo "CUST==".$cusType?>

