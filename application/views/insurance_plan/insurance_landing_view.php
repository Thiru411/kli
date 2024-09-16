<?php 
	//GA code Variables
	$categoryGA = '';
	if(get_cookie('kotak_customer_type')){
		if(get_cookie('kotak_customer_type') == 'new_customer') {
			$categoryGA = "new customers";
		} elseif (get_cookie('kotak_customer_type') == 'existing_customer') {
			$categoryGA = "existing customers";
		}
	}else{
		$categoryGA = "new customers";
	}
	$actionGA = isset($mainPlanType) ? strtolower($mainPlanType) : '';
	//GA code Variables
?>
<style>
@media only screen (min-width:1024px){
	.nw-st-new a.redBtn{right:10px;width:128px!important;bottom:-9px!important;}
	.mid img{}

}
<?php if($mainPlanType == 'Insurance Plans' || $mainPlanType ==  'Online Plans') {
	?>
.landingUL-cta li:nth-child(2){}
.landingUL-cta li:nth-child(2) a.link-ins{width:100% !important;}
.landingUL-cta li:nth-child(2) .nw-st-new{margin-top:260px;}
.landingUL-cta li:nth-child(2) p{margin-bottom:0 !important;}
.landingUL-cta li:nth-child(2) .nw-st-new a{ right:auto; width:83% !important; left:50px}
.landingUL-cta li:nth-child(3) .link-ins{ width:auto !important;}
.boxInfo .mid h3{width:auto !important; margin:50px 40px !important;}
.landingUL-cta li:nth-child(4) .boxInfo a.link-ins{width:auto !important;}

@media screen and (max-width:480px) {
.landingUL-cta li:nth-child(2) .nw-st-new a{font-size:11px !important; left:20px;}
.landingUL-cta li:nth-child(2) a.link-ins{width:90% !important;}
    .breadcrumb{display: block !important;}
    .plans-breadcrumb{margin-top: 0;}
    .newinsurance-plan .insurance-plans{margin:0 !important;}
    .newinsurance-plan.plan-cards ul.landingUL li{border-radius: 10px;}
}
    
    
    
.boxInfo {
  min-height: 300px;
  display: flex !important;
  flex-direction: column;
  justify-content: center;
  text-align: left;
}

.termUrl {
  font-size: 22px;
  font-weight: normal;
  color: #083160;
  text-decoration: none;
  letter-spacing: 0.3px;
  position: relative;
}

.prodDescription {
  color: #000 !important;
  font-size: 18px !important;
  font-weight: normal;
  letter-spacing: 0.3px;
  margin: 5px 0;
}
   .plansTitle a {    text-transform: initial !important;}
    .newinsurance-plan .headDesc p{width: 100%;}
.savingsBox {
  margin-top: -35px;
}

.insurance-plans {
  display: grid;
  grid-template-columns: 50% 50%;
  align-items: center;
  width: 100%;
}

.plansTitle {
  height: 100% !important;
  background: #fff;
  box-shadow: 0 1px 30px -2px #c1c1c1;
  display: flex;
  align-items: flex-start;
  text-align: left;
  flex-direction: column;
  justify-content: center;
  padding: 25px 10%;
}
    .newinsurance-plan h1{font-family: 'Lato-Regular'; width: 100%;}
.plansTitle h2 {
  margin: 5px 0;
  display: inline-block;
 font-family: 'Lato-Regular';
}

.plans-img,
.plans-img img {
  width: 100%;
  height: 100%;
}

.redBtn {
  margin: 10px 1px !important;
  position: relative !important;
  overflow: hidden;
  text-transform: capitalize !important;
  font-weight: 600;
}

.mb50 {
  margin-bottom: 50px !important;
}

.fr {
  float: right;
}

.termUrl .fr:before {
  width: 0;
  height: 0;
  content: '';
  display: block;
  position: absolute;
  right: -20px;
  bottom: 10px;
  border: 2px solid #083160;
  border-color: transparent #083160 #083160 transparent;
  padding: 4px;
  margin-top: -4px;
  transition: all ease .3s;
  -webkit-transition: all ease .3s;
  -moz-transition: all ease .3s;
  -o-transition: all ease .3s;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
}

.termUrl:after {
  display: block;
  content: "";
  border-bottom: solid 2px #ea2129;
  transform: scaleX(0);
  transition: transform 250ms ease-in-out;
}

.termUrl:hover:after {
  transform: scaleX(1);
}

.termUrl:hover {
  color: #083160 !important;
}

.redBtn::before {
  position: absolute;
  content: '';
  display: inline-block;
  top: -180px;
  left: 0;
  width: 15px;
  height: 100%;
  background-color: #fff;
  animation: shiny-btn1 4s ease-in-out infinite;
}
    .newinsurance-plan .headDesc01 p{font-family: 'Lato-Light';}

/* Media Query */
@media only screen and (max-width:480px) {
  .insurance-plans {
    display: grid;
    grid-template-columns: 100%;
    margin: 15px 0;
  }
  .plans-img {
    display: none;
  }
  .plansTitle {
    margin: 15px 0;
    box-shadow: none;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 25px 25px 25px 15px;
  }
  .redBtn {
    font-size: 12px !important;
  }
}

/* Below all Animations */
@keyframes shiny-btn1 {
  0% {
    -webkit-transform: scale(0) rotate(45deg);
    opacity: 0;
  }

  80% {
    -webkit-transform: scale(0) rotate(45deg);
    opacity: 0.5;
  }

  81% {
    -webkit-transform: scale(4) rotate(45deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: scale(50) rotate(45deg);
    opacity: 0;
  }
}

@-webkit-keyframes shiny-btn1 {
  0% {
    -webkit-transform: scale(0) rotate(45deg);
    opacity: 0;
  }

  80% {
    -webkit-transform: scale(0) rotate(45deg);
    opacity: 0.5;
  }

  81% {
    -webkit-transform: scale(4) rotate(45deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: scale(50) rotate(45deg);
    opacity: 0;
  }
}
    
<?php } ?>
<?php  if($mainPlanType == 'Online Plans') {?>
.landingUL-cta li:nth-child(2) p{margin-bottom:0 !important;}
.landingUL-cta li:nth-child(2) .nw-st{margin-top:0 !important;}
.landingUL-cta li:nth-child(2) .nw-st a{width:69% !important; right:9rem; bottom:-4rem;}
.landingUL-cta li:nth-child(4) .redBtn{width:90%;text-align:center; margin-left:2px;}
.landingUL-cta li:nth-child(4) .nw-st{margin-top:60px}
.landingUL-cta li:nth-child(4) .nw-st .redBtn{width:74%!important;right:10rem!important}
.landingUL-cta li:nth-child(3) div:nth-child(3){display:none;}
.boxInfo .mid h3{width:auto !important; margin:50px 40px !important;}
.landingUL-cta li:nth-child(4) p{margin-bottom:0 !important;}
@media screen and (max-width:1366px) {
	.landingUL-cta li:nth-child(2) .nw-st a{width:79% !important; right:5rem; bottom:-5rem;}
}
@media screen and (min-width:768px) {
	.boxInfo a.link-ins{margin-top:20px; width:44% !important;}
}
@media screen and (max-width:480px) {
	.landingUL-cta li:nth-child(4) p{margin-bottom:20px !important;}
.landingUL-cta li:nth-child(4) .redBtn{font-size:11px !important; left:20px; width:100%; padding-left:0; padding-right:0;  width:88% !important;}
.landingUL-cta li:nth-child(4) a.link-ins{width:90% !important;}
.landingUL-cta li:nth-child(2) .nw-st a{width:69% !important; right:3.5rem; bottom:0rem;  font-size:11px;}
.landingUL-cta li:nth-child(2) .redBtn{font-size:11px; padding-left:10px; padding-right:10px; position:relative; top:20px; left:0;}
.landingUL-cta li:nth-child(2) .boxInfo{padding-bottom:8rem;}
 .landingUL-cta li:nth-child(4) .mob-four .redBtn{left:0 !important;}
}
<?php }?>
<?php if($mainPlanType == 'Group Plans') {?>
    .group-plan-banner{    width: 50%;display: inline-block;}
     .group-plan-banner img{    width: 100%;  max-width: 100%; }
    .headDesc p{margin-top:2rem; text-align: center;}
    ul.landingUL li .boxInfo img{width: 100px}
   .mid p{display: none;}
    .buttonClick, a.link{clear: left; margin-top: 5rem;}
    ul.landingUL li .img, ul.landingUL li .boxInfo{width: 50%;}
    ul.landingUL li .img img{    height: 100%;object-fit: cover;}
    .business-top-sec{display: flex; margin-bottom: 5rem; align-items: center;}
    .bancont-pera{width: 50%;}
    .bancont-pera  p{width: 90%;}
    .group-title{font-size: 20px; width: 100%; display: inline-block;}
	.plan-cards .nw-st{margin-top:0;}
    @media screen and (max-width:480px) {
       ul.landingUL li .img, ul.landingUL li .boxInfo{width: 100%;}  
        ul.landingUL li{height: 200px !important;}
        ul.landingUL li .boxInfo{display: block !important;}
        ul.landingUL li .mid{display: inline-block !important;}
        .business-top-sec{display: block; margin-bottom: 2rem;}
        .bancont-pera, .group-plan-banner{width: 100%;}
        ul.landingUL li .boxInfo img{ width: 70px; height: auto; margin-top: 1rem;}
    }
    <?php }?>

    ul.bullet{float: none; display: inline-block;}
    .whiteBg h2{font-weight: 600;}
	 .landingUL-cta li .mob-four .redBtn{left:0 !important;}
	
</style>
<!-- Section Start -->
<section class="plans-breadcrumb"> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
		<?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>        
  <!-- breadcrumb End --> 
         
         <?php if($mainPlanType == 'Insurance Plans') { ?>
         
    <!-- Insurance New Code-->
      <article class="plan-cards newinsurance-plan">
      <div class="midWrapper">
        <div class="headDesc headDesc01">
          <h1>Life Insurance, Health Insurance and Annuity Plans</h1>
          <p>
            Enjoying the best that life has to offer is what you’ve always desired – be it for your family, your current
            life or your life after retirement. That’s why we present to you a spectrum of plans to ensure your life is
            filled
            with special moments that you will cherish forever.
          </p>
          <!--img class="lazy" data-src="https://www.kotaklife.com/assets/images/insurance-plan-hd.png"-->
        </div>
        <!-- Vinoth All Changes below this -->
        <div class="insurance-plans">
          <div class="plansTitle">
            <h2>
              <a class="termUrl"
                href="https://www.kotaklife.com/term-insurance?utm_source=organic&utm_medium=website&utm_campaign=insuranceplanspage&utm_content=atext">
                Term Insurance Plans <span class="fr"></span>
              </a>
            </h2>
            <p class="prodDescription">Safeguard your family's financial future with term insurance.</p>
            <a rel="follow"
              href=" https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=insuranceplanspage"
              target="_blank" class="redBtn"
              onclick="dataLayer.push({&#39;event&#39;: &#39;event insurance plan&#39;, &#39;category&#39;: &#39;Life_Insurance&#39;, &#39;action&#39;: &#39;Life Insurance Plan&#39;, &#39;label&#39;: &#39;buy online1&#39;});">
              Buy Kotak e-Term
            </a>
          </div>
          <div class="plans-img">
            <img class=""
              data-src="assets/images/uploads/insurance-plans/landing-protection-plan1.jpg"
              alt="Term Insurance Plans" src="assets/images/uploads/insurance-plans/landing-protection-plan1.jpg" />
          </div>
        </div>

        <div class="insurance-plans">
          <div class="plans-img">
            <img src="assets/images/Savings-Plans-Online.png" src="assets/images/Savings-Plans-Online.PNG" alt="Savings Plan" />
          </div>
          <div class="plansTitle">
            <h2>
              <a class="termUrl"
                href="https://www.kotaklife.com/savings-plan?utm_source=organic&utm_medium=website&utm_campaign=insuranceplanspage&utm_content=atext">
                Savings Plan <span class="fr"></span>
              </a>
            </h2>
            <p class="prodDescription">Plans that provide guaranteed returns. </p>
            <a rel="follow"
              href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=insuranceplanspage"
              target="_blank" class="redBtn"
              onclick="dataLayer.push({&#39;event&#39;: &#39;event insurance plan&#39;, &#39;category&#39;: &#39;Life_Insurance&#39;, &#39;action&#39;: &#39;Life Insurance Plan&#39;, &#39;label&#39;: &#39;buy online1&#39;});">
              Buy Kotak Assured Savings Plan
            </a>
          </div>
        </div>

        <div class="insurance-plans">
          <div class="plansTitle">
            <h2>
              <a class="termUrl"
                href="https://www.kotaklife.com/ulip-plans?utm_source=organic&utm_medium=website&utm_campaign=insuranceplanspage&utm_content=atext">
                ULIP Plans <span class="fr"></span>
              </a>
            </h2>
            <p class="prodDescription">Get safe, market-linked returns.</p>
            <a rel="follow"
              href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=insuranceplanspage"
              target="_blank" class="redBtn"
              onclick="dataLayer.push({&#39;event&#39;: &#39;event insurance plan&#39;, &#39;category&#39;: &#39;Life_Insurance&#39;, &#39;action&#39;: &#39;Life Insurance Plan&#39;, &#39;label&#39;: &#39;buy online1&#39;});">
              Buy Kotak e-Invest
            </a>
          </div>
          <div class="plans-img">
            <img class=""
              data-src="assets/images/uploads/insurance-plans/landing-protection-plan1.jpg" src="assets/images/uploads/insurance-plans/landing-protection-plan1.jpg"
              alt="Term Insurance Plans" src="./Insurance Plans_files/landing-protection-plan1.jpg" />
          </div>
        </div>

        <div class="insurance-plans ">
          <div class="plans-img">
            <img data-src="/assets/images/uploads/insurance-plans/landing-retirement3.jpg" src="assets/images/uploads/insurance-plans/landing-retirement3.jpg" alt="Retirement and Annuity Plans" />
          </div>
          <div class="plansTitle">
            <h2>
              <a class="termUrl"
                href="https://www.kotaklife.com/insurance-plans/retirement-plans?utm_source=organic&utm_medium=website&utm_campaign=insuranceplanspage&utm_content=atext">
                Retirement Plans <span class="fr"></span>
              </a>
            </h2>
            <p class="prodDescription">Enjoy a stress-free retired life.</p>
            <a rel="follow"
              href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=insuranceplanspage"
              target="_blank" class="redBtn"
              onclick="dataLayer.push({&#39;event&#39;: &#39;event insurance plan&#39;, &#39;category&#39;: &#39;Life_Insurance&#39;, &#39;action&#39;: &#39;Life Insurance Plan&#39;, &#39;label&#39;: &#39;buy online1&#39;});">
              Buy Kotak Lifetime Income Plan
            </a>
          </div>
        </div>

        <div class="insurance-plans mb50">
          <div class="plansTitle">
            <h2>
              <a class="termUrl"
                href="https://www.kotaklife.com/insurance-plans/health-plans?utm_source=organic&utm_medium=website&utm_campaign=insuranceplanspage&utm_content=atext">
                Health Plans <span class="fr"></span>
              </a>
            </h2>
            <p class="prodDescription">Beat medical inflation with the right health plan.</p>
            <a rel="follow" href="https://www.kotaklife.com/insurance-plans/health-plans?utm_source=organic&utm_medium=website&utm_campaign=insuranceplanspage&utm_content=atext" target="_blank" class="redBtn"
              onclick="dataLayer.push({&#39;event&#39;: &#39;event insurance plan&#39;, &#39;category&#39;: &#39;Life_Insurance&#39;, &#39;action&#39;: &#39;Life Insurance Plan&#39;, &#39;label&#39;: &#39;buy online1&#39;});">
              Know More
            </a>
          </div>
          <div class="plans-img">
            <img class="lazy"
              data-src="https://www.kotaklife.com/assets/images/uploads/insurance-plans/landing-protection-plan1.jpg"
              alt="Health Plans" />
          </div>
        </div>
        <!-- Vinoth changes end here -->

        <!-- Riders Box Start -->
        <div class="ridersBox">
          <div class="img"><img class="lazy" data-src="assets/images/insurance-rider-plan.png" /></div>
          <div class="cont">
            <h3>Insurance plan riders</h3>
            <p>Choose additional riders at nominal costs to enhance the benefits provided by your basic policy.</p>
            <a href="https://www.kotaklife.com/insurance-plans/insurance-plan-riders" class="link"
              onclick="dataLayer.push({&#39;event&#39;: &#39;event insurance plan riders&#39;, &#39;category&#39;: &#39;new customers&#39;, &#39;action&#39;: &#39;insurance plans&#39;, &#39;label&#39;: &#39;know more|insurance plan riders&#39;});">
              Know More
            </a>
          </div>
        </div>
        <!-- Riders Box Start -->
      </div>
    </article>
    <!-- End Insurance New Code-->
         
         <?php } else if ($mainPlanType == 'Online Plans') { ?>
 <!-- Vinoth Edits starts here -->
    <article class="plan-cards newinsurance-plan">
      <div class="midWrapper">
        <div class="headDesc headDesc01">
          <h1>Online Plans</h1>
          <p>You may aim to make the most of your earning years and invest your money thoughtfully, or you may wish to
            continue your lifestyle even after you have retired. Or you may want your family to be protected and
            provided for even in your absence. For all these requirements, we have created online plans that are easy to
            invest in and provide flexibility for your different needs.
          </p>
          <!--img class="lazy" data-src="https://www.kotaklife.com/assets/images/online-plan-hd.png"-->
        </div>
        <ul class="landingUL landingUL-cta">
          <li>
            <div class="insurance-plans">
              <div class="plansTitle">
                <h2>
                  <a class="termUrl"
                    href="https://www.kotaklife.com/term-insurance">
                    Term Insurance Plans <span class="fr"></span>
                  </a>
                </h2>
                <p class="prodDescription">Safeguard your family's financial future with term insurance.</p>
                <a rel="follow"
                  href="https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&amp;utm_medium=cta&amp;utm_campaign=online_planspage"
                  target="_blank" class="redBtn"
                  onclick="dataLayer.push({&#39;event&#39;: &#39;event insurance plan&#39;, &#39;category&#39;: &#39;Life_Insurance&#39;, &#39;action&#39;: &#39;Life Insurance Plan&#39;, &#39;label&#39;: &#39;buy online1&#39;});"
                  style="">Buy Kotak e-term</a>
              </div>
              <div class="plans-img">
                <img class=""
                  data-src="https://www.kotaklife.com/assets/images/uploads/insurance-plans/landing-online-protection-plan1.jpg"
                  alt="Online Term Insurance Plans"
                  src="https://www.kotaklife.com/assets/images/uploads/insurance-plans/landing-online-protection-plan1.jpg">
              </div>
            </div>
          </li>
          <li>
            <div class="insurance-plans">
              <div class="plans-img">
                <img data-src="assets/images/Savings-Plans-Online.png"
                  src="assets/images/Savings-Plans-Online.png"
                  alt="Savings Plan">
              </div>
              <div class="plansTitle">
                <h2>
                  <a class="termUrl"
                    href="https://www.kotaklife.com/savings-plan">
                    Savings Plan <span class="fr"></span>
                  </a>
                </h2>
                <p class="prodDescription">Plans that provide guaranteed returns.</p>
                <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&amp;utm_medium=website&amp;utm_campaign=online_planspage"
                  target="_blank" class="redBtn"
                  onclick="dataLayer.push({&#39;event&#39;: &#39;event insurance plan&#39;, &#39;category&#39;: &#39;Life_Insurance&#39;, &#39;action&#39;: &#39;Life Insurance Plan&#39;, &#39;label&#39;: &#39;buy online1&#39;});"
                  style="">Invest in Kotak Guaranteed Fortune Builder</a>
              </div>
            </div>
          </li>

          <li>
            <div class="insurance-plans">
              <div class="plansTitle">
                <h2>
                  <a class="termUrl" href="https://www.kotaklife.com/ulip-plans">ULIP Plan <span class="fr"></span></a>
                </h2>
                <p class="prodDescription">Plans that provide guaranteed returns.</p>
                <a href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&amp;utm_medium=website&amp;utm_campaign=online_planspage"
                  target="_blank" class="redBtn savvvv"
                  onclick="dataLayer.push({&#39;event&#39;: &#39;event insurance plan&#39;, &#39;category&#39;: &#39;Life_Insurance&#39;, &#39;action&#39;: &#39;Life Insurance Plan&#39;, &#39;label&#39;: &#39;buy online1&#39;});"
                  style="">Buy Kotak e-Invest </a>
              </div>
              <div class="plans-img">
                <img class=""
                  data-src="https://www.kotaklife.com/assets/images/uploads/insurance-plans/ULIP_Plans_Online1.png"
                  alt="ULIP Plan"
                  src="https://www.kotaklife.com/assets/images/uploads/insurance-plans/ULIP_Plans_Online1.png">
              </div>
            </div>
          </li>

          <li>
            <div class="insurance-plans mob-four">
              <div class="plans-img">
                <img 
                  src="https://www.kotaklife.com/assets/images/uploads/insurance-plans/landing-retirement3.jpg"
                  alt="Retirement and Pension Plans">
              </div>
              <div class="plansTitle">
                <h2>
                  <a class="termUrl" href="https://www.kotaklife.com/insurance-plans/retirement-plans">
                    Retirement Plans <span class="fr"></span>
                  </a>
                </h2>
                <p class="prodDescription">Enjoy a stress-free retired life.</p>
                <a href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=online_planspage" rel="follow" class="redBtn"
                  onclick="dataLayer.push({&#39;event&#39;: &#39;event online plans know more&#39;, &#39;category&#39;: &#39;new customers&#39;, &#39;action&#39;: &#39;online plans&#39;, &#39;label&#39;: &#39;know more|retirement and pension plans&#39;});">
                  Buy Kotak Lifetime Income Plan
                </a>
              </div>
            </div>
          </li>

          <li>
            <div class="insurance-plans">
              <div class="plansTitle">
                <h2>
                  <a class="termUrl" href="https://www.kotaklife.com/insurance-plans/health-plans">
                    Health Plans <span class="fr"></span>
                  </a>
                </h2>
                <p class="prodDescription">Beat medical inflation with the right health plan.</p>
                <a href="https://www.kotaklife.com/insurance-plans/health-plans" rel="follow" class="redBtn"
                  onclick="dataLayer.push({&#39;event&#39;: &#39;event insurance plans know more&#39;, &#39;category&#39;: &#39;new customers&#39;, &#39;action&#39;: &#39;insurance plans&#39;, &#39;label&#39;: &#39;know more|health plans&#39;});">Know
                  more</a>
              </div>
              <div class="plans-img">
                <img class=""
                  data-src="https://www.kotaklife.com//assets/images/uploads/insurance-plans/landing-protection-plan1.jpg"
                  alt="Health Plans"
                  src="https://www.kotaklife.com//assets/images/uploads/insurance-plans/landing-protection-plan1.jpg">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </article>
    <!-- Vinoth edit ends here -->

		 
		<?php }  else { ?>

         
  <!-- midWrapper Start -->
  <article class="plan-cards">
    <div class="midWrapper">
      <div class="headDesc headDesc01">
      	<?php if($mainPlanType == 'Insurance Plans') { $imgName="insurance-plan-hd.png"; ?>
	        <h1>Life Insurance, Health Insurance and Annuity Plans</h1>
	        <p>Enjoying the best that life has to offer is what you’ve always desired – be it for your family, your current life or your life after retirement. That’s why we present to you a spectrum of plans to ensure your life is filled with special moments that you will cherish forever.</p>
        <?php } elseif ($mainPlanType == 'Online Plans') { $imgName="online-plan-hd.png"; ?>
        	<h1>Online Plans</h1>
        	<p>You may aim to make the most of your earning years and invest your money thoughtfully, or you may wish to continue your lifestyle even after you have retired. Or you may want your family to be protected and provided for even in your absence. For all these requirements, we have created online plans that are easy to invest in and provide flexibility for your different needs.</p>
        <?php } elseif ($mainPlanType == 'Group Plans') { $imgName="group-plan-hd.png"; ?>
        	<h1>Business Solutions</h1>
        	<!--<p>When people are brought together, camaraderie and loyalty keeps them bound to each other. Our Group Plans ensure that this loyalty is rewarded by the promise of taking care of your employees’ family in case of death or permanent disability of the employee.</p>
        -->
		<div class="business-top-sec">
        	<div class="bancont-pera">
        	    <!--p>When people are brought together, camaraderie and loyalty keeps them bound to each other. Our Group Plans ensure that this loyalty is rewarded by the promise of taking care of your employees’ family in case of death or permanent disability of the employee.</p-->
        	    <p>When individuals are united, a sense of camaraderie and loyalty strengthens their bonds. Our Business Solutions guarantee that this loyalty is acknowledged through the assurance of providing for your employees' families in the event of the employee's death or permanent disability.</p>
        	</div>
        	<div class="group-plan-banner">
        	    <img src="assets/images/group-plans/group-plans.png">
        	</div>
        </div>
		<?php } ?>
        <!--img class="lazy" data-src="<?php echo base_url() ?>assets/images/<?php echo $imgName;?>"--> 
      </div>
		<?php if(sizeof($plans) > 0) { ?>
		<ul class="landingUL landingUL-cta">
		<?php 
		$count = 0;
		foreach($plans as $detail) {
			$count++;
			$description = isset($detail->insurance_type_description) ? strip_tags($detail->insurance_type_description) : '';
			$description = strlen($description) > 120 ? substr($description,0,120)."..." : $description;
		?>
        <li>
		  <?php if(isset($detail->plan_type_big_image) && $detail->plan_type_big_image != '' && !($count % 2 == 1)) { ?>
		   
		  <?php  if($detail->title=='Savings Plan'){?>
		   <div class="img">
			<img src="assets/images/Savings-Plans-Online.png" alt="<?php echo isset($detail->title) ? $detail->title : '' ?>">
		  </div>
		
		   <?php } else { ?>
		  <div class="img">
			<img src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_big_image) ?>" alt="<?php echo isset($detail->title) ? $detail->title : '' ?>">
		  </div>
		   <?php } ?>
		  
		  
		  <?php } ?> 

		  
          <div class="boxInfo position-relative ">
            <div class="mid">
				
				<?php if(isset($detail->plan_type_small_image) && $detail->plan_type_small_image != '') {
					//var_dump($detail->title);?>
				<?php if($detail->title=='Health Plans'){?>
				<img alt="Group Gratuity Policy/Leave Encashment Plans Icon" title="Group Gratuity Policy/Leave Encashment Plans Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">
				<?php }else if($detail->title=='Term Insurance Plans'){  ?>
				<img alt="Term Insurance Protection Plan Icon 1" title="Term Insurance Protection Plan Icon 1"  src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">
				<?php } else if ($detail->title=='Savings Plans'){?>
									<img alt="Savings and Investment Plans Icon" title="Savings and Investment Plans Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">

				<?php }
				else if($detail->title=='Retirement Plans'){?>
									<img alt="Retirement Plans Icon" title="Retirement Plans Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">

				<?php }
				else if($detail->title=='ULIP Plans'){?>
									<img alt="Child Insurance Plan Icon" title="Child Insurance Plan Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">

				<?php }
				else if($detail->title=='Online Term Insurance Plans'){?>
									<img alt="Group Gratuity Policy/Leave Encashment Plans Icon" title="Group Gratuity Policy/Leave Encashment Plans Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">
				<?php }
				else if($detail->title=='Retirement and Pension Plans'){?>
									<img alt="Retirement Plans Icon" title="Retirement Plans Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">
				<?php }
				else if($detail->title=='ULIP Plan'){?>
									<img alt="Group Gratuity Policy/Leave Encashment Plans Icon" title="Group Gratuity Policy/Leave Encashment Plans Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">
				<?php }
				else if($detail->title=='Savings Plan'){?>
									<img alt="Group Gratuity Policy/Leave Encashment Plans Icon" title="Group Gratuity Policy/Leave Encashment Plans Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">
				<?php }
				else if($detail->title=='Group Gratuity Policy/Leave Encashment Plans'){?>
									<img alt="Retirement Plans Icon" title="Retirement Plans Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">
									<h4 class="group-title">Group Gratuity Policy/Leave Encashment Plans</h4>
				<?php }
				else if($detail->title=='Group Superannuation Plans'){?>
									<img alt="Group Plan - Group Superannuation Icon" title="Group Plan - Group Superannuation Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">
									<h4 class="group-title">Group Superannuation</h4>
				<?php }
				else if($detail->title=='Group Term Life Insurance Plans'){?>
									<img alt="Group Plan - Group Term Icon" title="Group Plan - Group Term Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">
<h4 class="group-title">Group Term</h4>
				<?php }
				else if($detail->title=='Group Credit Life Insurance Plans'){?>
									<img alt="Group Plan - Group Credit Icon" title="Group Plan - Group Credit Icon" src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_small_image) ?>">
<h4 class="group-title">Group Credit</h4>
				<?php }
				}
				?>
				
				<?php if($detail->title=='Online Term Insurance Plans'){?>
				<h3><a href="<?=base_url()?>term-insurance"><?php echo isset($detail->title) ? $detail->title : '' ?></a></h3>
				<?php }else if($detail->title=='Retirement and Pension Plans'){?>
				<h3><a href="<?=base_url()?>insurance-plans/retirement-plans"><?php echo isset($detail->title) ? $detail->title : '' ?></a></h3>
				<?php }else if($detail->title=='ULIP Plan'){?>
				<h3><a href="<?=base_url()?>ulip-plans"><?php echo isset($detail->title) ? $detail->title : '' ?></a></h3>
				<?php }else if($detail->title=='Savings Plan'){?>
				<h3><a href="<?=base_url()?>savings-plan"><?php echo isset($detail->title) ? $detail->title : '' ?></a></h3>
				<?php }else if($detail->title=='Health Plans'){?>
				<h3><a href="<?=base_url()?>insurance-plans/health-plans"><?php echo isset($detail->title) ? $detail->title : '' ?></a></h3>
				<?php }else if($detail->title=='Term Insurance Plans'){?>
				<h3><a href="<?=base_url()?>term-insurance"><?php echo isset($detail->title) ? $detail->title : '' ?></a></h3>
				<?php }else if($detail->title=='Savings Plans'){?>
				<h3><a href="<?=base_url()?>savings-plan"><?php echo isset($detail->title) ? $detail->title : '' ?></a></h3>
			<?php }else if($detail->title=='Retirement Plans'){?>
				<h3><a href="<?=base_url()?>insurance-plans/retirement-plans"><?php echo isset($detail->title) ? $detail->title : '' ?></a></h3>
				<?php }else if($detail->title=='ULIP Plans'){?>
				<h3><a href="<?=base_url()?>ulip-plans"><?php echo isset($detail->title) ? $detail->title : '' ?></a></h3>
				<?php }?>
				<p><?php echo $description; ?></p>
				<?php
					//GA code Variables
					$eventGA = isset($mainPlanType) ? 'event ' . strtolower($mainPlanType) . ' know more' : '';
					$labelGA =  isset($detail->title) ? 'know more|' . strtolower($detail->title) : '';
					//GA code Variables
				?>
				
				
				<?php if($mainPlanType == 'Insurance Plans'){ ?>
				<a  href="<?php echo $detail->btn_url;?>" rel="follow" class="link link-ins" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});"><?php echo $detail->btn_title;?></a>
				<?php }else{ ?>
				<?php if($detail->title=='Retirement and Pension Plans'){?>
					<a  href="<?=base_url()?>insurance-plans/retirement-plans" rel="follow" class="link link-ins" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know more</a>
				<?php }else if($detail->title=='ULIP Plan'){?>
				<a  href="<?=base_url()?>ulip-plans" rel="follow" class="link link-ins" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know more</a>
					<?php }else if($detail->title=='Savings Plan'){?>
				<a  href="<?=base_url()?>buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=online_planspage" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Invest in kotak guarantee Saving Plan</a>
				<?php }else if($detail->title=='Online Term Insurance Plans'){ ?>
					<a  href="<?=base_url()?>term-insurance" rel="follow" class="link link-ins" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know more</a>

				<?php 
				}else{
					$onclicktitle='';
					if($detail->url_title=='group-gratuity-leave-encashment'){
						 $onclicktitle="groupGratuityPolicy";
					}else if($detail->url_title=='group-credit'){
												 $onclicktitle="groupCreditLifeInsurancePlan";

					}else if($detail->url_title=='group-term'){
												 $onclicktitle="groupTermLifeInsurancePlan";

	
					}else if($detail->url_title=='group-superannuation'){
												 $onclicktitle="groupSuperannuationPlans";

	
					}



					?>
				<a  onclick="buttonClick('<?php echo $onclicktitle?>')" href="<?php echo isset($detail->url_title) ? ($mainPlanURL.'/'.$detail->url_title) : '' ?>" rel="follow" class="link link-ins" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know more</a>
				<?php } } ?>
				
				<?php if($this->uri->segment(1)=='online-plans'){?>
							
							
 <div class="nw-st nw-st-new">
					 
<?php if($detail->title=="Online Term Insurance Plans"){?>
	<a  rel="follow" href="<?=base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=cta&utm_campaign=online_planspage" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Calculate Premium</a>
<?php } ?>
	<!--<a   href="<?=base_url()?>buy-annuity-plan/#/landing?utm_source=organic&utm_medium=cta&utm_campaign=online_planspage" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Buy Online</a>-->
<?php  if($detail->title=="ULIP Plan"){?>
	<a   href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=online_planspage" target="_blank" class="redBtn savvvv" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Invest In ULIP </a>
<?php } if($detail->title=="Savings Plan"){?>
	<a  href="<?=base_url()?>buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=online_planspage" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Invest in kotak assured Saving Plan</a>
<?php } ?>

 </div>
				<?php } ?>
				 
				 
				 
				
				
				
							
 <div class="nw-st nw-st-new">
					 
<?php if($detail->title=="Term Insurance Protection Plans"){?>
	<a href="#" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Calculate Premium</a>
<?php } if($detail->title=="Savings Plans"){?>
	<a rel="follow" href="<?=base_url()?>buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=insuranceplanspage
" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Invest In Kotak Guaranteed Savings Plan</a>
<?php } if($detail->title=="Retirement Plans"){?>
	<!--<a rel="follow" href="<?=base_url()?>buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=Insurance_plansofflinepage" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Buy Online</a>-->
<?php } if($detail->title=="ULIP Plans"){?>
	<a href="<?=base_url()?>buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=insuranceplanspage" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Invest in ULIP</a>
<?php } if($detail->title=="Health Plans"){?>
	<!--<a href="<?=base_url()?>buy-health-insurance-online/#/landing?utm_source=Health_organic&utm_medium=website&utm_campaign=insuranceplanspage" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Invest In Health Plan</a>-->
<?php } ?>

 </div>
		
		
		
				
				       
				</div>
				<?php if($detail->title=="Term Insurance Plans"){?>
				
 <div class="nw-st nw-st-new">
<a rel="follow"  href="<?=base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=insuranceplanspage" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="
    /* margin-top: 91px; */
">Buy Online</a>


</div>
<?php } ?>
				
          </div>
		  <?php if(isset($detail->plan_type_big_image) && $detail->plan_type_big_image != '' && ($count % 2 == 1)) { ?>
		  <div class="img">
			<img class="lazy" data-src="<?php echo str_replace('{filedir_10}', base_url().'assets/images/uploads/insurance-plans/', $detail->plan_type_big_image) ?>" alt="<?php echo isset($detail->title) ? $detail->title : '' ?>">
		  </div>
		  <?php } ?>
		  
        </li>
		<?php } ?>
		
		
		
		
		<?php if($HealthPlanDetails){//var_dump($HealthPlanDetails);
			foreach($HealthPlanDetails as $h_info){
				if($h_info->url_title=='health-plans'){
				
				$image = $detail->plan_type_big_image;
			} } ?>
		<li>
		 <div class="boxInfo position-relative">
            <div class="mid">
			
				<img alt="Term Insurance Protection Plan Icon 2" title="Term Insurance Protection Plan Icon 2" src="<?=base_url()?>assets/images/uploads/insurance-plans/insurance-protection-plan2.png">
				<h3><a href="<?=base_url()?>insurance-plans/health-plans">Health Plans </a></h3>
				<p></p>
				<a href="<?=base_url()?>insurance-plans/health-plans" rel="follow" class="link link-ins" onclick="dataLayer.push({'event': 'event insurance plans know more', 'category': 'new customers', 'action': 'insurance plans', 'label': 'know more|health plans'});">Know more</a>
				<!--<div class="nw-st nw-st-new">					 
					<a href="<?=base_url()?>buy-health-insurance-online/#/landing?utm_source=organic&utm_medium=cta&utm_campaign=online_planspage" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event insurance plan', 'category': 'Life_Insurance', 'action': 'Life Insurance Plan', 'label': 'buy online1'});" style="">Invest in Health Plan</a>
				</div>-->
			</div>			
         </div>
		  	<div class="img">
			<img class="" data-src="<?=base_url()?>assets/images/uploads/insurance-plans/landing-protection-plan1.jpg" alt="Health Plans" src="<?=base_url()?>assets/images/uploads/insurance-plans/landing-protection-plan1.jpg">
		  </div>  
        </li>
			<?php } ?>
		</ul>
		
		<?php } ?>


		<?php if($mainPlanType == 'Insurance Plans') { ?>
		<!-- Riders Box Start -->
		<div class="ridersBox">
			<div class="img"><img class="lazy" data-src="assets/images/insurance-rider-plan.png"></div>
			<div class="cont">
				<h3>Insurance plan riders</h3>
			    <p>Choose additional riders at nominal costs to enhance the benefits provided by your basic policy.</p>
			    <?php
					//GA code Variables
					$eventGA = 'event insurance plan riders';
					$labelGA =  'know more|insurance plan riders';
					//GA code Variables
				?>
			    <a href="<?php echo (IP_MODULE_LINK) ?>/insurance-plan-riders" class="link" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know More</a>
			</div>
		</div>
      	<!-- Riders Box Start -->
      	<?php } ?>

    </div>
  </article>
  <?php } ?>
  <!-- midWrapper End --> 
  <!---------------accordin starts here-------------->
<?php 
  
  $page_title="";  
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  
  $temp=array();
  $temp=explode("/",$actual_link);
  $page_title=$temp[3];
      
          if($page_title=="insurance-plans")
          { ?>
          <article class="faqsWrap" id="faqsWrapDiv">
			<div class="midWrapper para-p">
			 	<h2 class="h2bold paraa-p">What is life insurance?</h2>
         <p><a href="<?=base_url()?>">Life insurance</a> is a financial cover for unforeseen events related to human life. It is a legally binding agreement between you and the insurance provider. In this contract, you undertake to pay a specified premium for a fixed period in exchange for life coverage. The insurer, in turn, agrees to provide monetary benefits to your beneficiaries if any of the unfortunate incidents covered under the agreement occurs. Such benefits are demarcated in the contract terms, called the policy document.</p>
         <p class="paraa-p">Kotak Life offers a range of life insurance products that satisfy a range of insurance needs. From pure life protection of a Term Insurance Plans to the dual benefits of insurance and investment in Savings Plans, you can choose from a range of life insurance products from Kotak Life to ensure that your family is well taken care of, even in your absence.</p>
         <p class="paraa-p">Thus, alife insurance policyensures that the loss of your income does not hamper your family’s financial standing. You can use savings-based life insurance products as investment tools to create wealth and fund long-term financial goals. Many such products can also act as a secondary source of income. Tax savings on the premiums paid is another perquisite of buying such insurance policies.</p>
         <h2 class="h2bold paraa-p">Some important features of life insurance that everyone must know</h2>
         <p>There are different types ofriders in insurance. Some of the popular ones include:</p> 
        	<ul class="bullet">
					<li><b>Life insurance cover: </b>The monetary sum that can substitute the loss of future income.</li>
					<li><b>Sum assured: </b>The amount that the insurer guarantees to pay in the event of a loss.</li>
					<li><b>Maturity benefits: </b>The lump sum paid at the end of the policy term in traditional and market-linked life insurance policies.</li>
					<li><b>Policy term: </b>The duration for which the life cover stays in place. The insurer pays the benefit if any loss occurs during this time.</li>
					<li><b>Premium payment term: </b>The period for which you have to pay the premium for your life cover.</li>
					<li><b>Premium payment frequency: </b>The interval at which you have to pay the premium, e.g. monthly, quarterly, half-yearly or annually.</li>
					<li><b>Fixed premium:</b>The premium amount as determined at the time of purchase. It remains fixed throughout the payment term.</li>
					<li><b>Surrender value:</b>The amount payable on your exit from the policy before the maturity date but after the lock-in period. It is not applicable for term insurance.</li>
					<li><b>Cash value: </b>The savings component of your investment insurance that accumulates over time. Insurers invest a part of your investment insurance premium into conservative-yield ventures. The profits earned build the cash value.</li>
					<li><b>Paid-up value: </b>The reduced sum assured payable at maturity after premiums are paid beyond a defined period but not to full term.<br/>
					Paid-up Value = (Number of Premiums Paid / Total number of Premiums Payable) X Sum Assured
					</li>
					<li><b>Loan on policy:</b>Borrowing against your traditionallife insurance policyusing the cash value as collateral. The insurer sanctions a percentage of the surrender value as loan.</li>
					<li><b>Multiple payout options:</b>Choice of claim settlement through a lump sum or as regular payments.</li>
					<li><b>Mortality charge:</b> The cost of insuring your life based on your age, gender, and prevalent life expectancy ratio.</li>
					<li><b>Loyalty additions:</b> Financial rewards from the insurer in favour of staying invested for a long duration.</li>
					<li><b>Wealth boosters:</b> Increments to your insurance benefits that the insurer pays with some policies.</li>
					<li><b>Bonus:</b> Share of profits earned through investments made with the premium amount, passed on to investors as dividends.</li>
					<li><b>Annuity/ Income:</b> Monthly or yearly incomes offered in some investment insurance plans.</li>
					<li><b>Riders:</b> Optional add-ons to your life coverage at nominal rates over the base premium. Examples include accidental death benefits, waiver of premium, critical illness cover etc.</li>
					<li><b>Accidental death benefit:</b> Extra payout over the base sum assured in case of accidents.</li>
					<li><b>Waiver of premium:</b> Rider that allows you to not pay future premiums following any permanent disability or after the death of the guardian paying for a minor’s insurance cover. The insurer bears the premiums, and thelife insurance covercontinues throughout the policy term.</li>
					<li><b>Critical illness cover:</b> The option to obtain payouts on the first detection of medical conditions listed under the scope of the rider.</li> 
				</ul>

        <h2 class="h2bold paraa-p">What are the types of life insurance offered by Kotak Life?</h2>
		<ul class="bullet">
					<li>Protection plans </li>
					<ul class="bullet">
					 <li>Term insurance</li>
						<p>These are pure risk protection plans that pay a pre-defined sum to your beneficiary if an unfortunate event occurs during the policy tenure.</p>
						<p>Kotak Life Insurance offers the convenience of buying such term plans online. Life coverage starts at less than Rs.23 per day* and multiple payout options from lump sum to regular income suit every family’s needs. You can also add to your coverage or reduce it at different stages of your life.
					</ul> 
					<li>Savings and investment plans</li>
					<ul class="bullet"> 
					<li><b>Child plans</b>
						Kotak Life offerslife insurance for childrenthat help build an adequate corpus for their future.</li>
						<li><b>Retirement plans</b>
						Kotak Life’s  pension plans ensure financial independence even after you cease working for wages. You can assemble comprehensive retirement funds through guaranteed additions and bonuses during your peak working years. After retirement, you can instate that capital into annuity funds and enjoy a regular income.</li>
						<li><b>Whole life insurance</b>
						Such plans offer risk protection throughout your life. Kotak Life offers policies with 99 years as the maximum age of entry. These policies can provide for your spouse’s old age needs.</li>
						<li><b>Endowment plans</b>
							Such plans combine risk cover with investment. The life cover protects your family from financial distress. Moreover, if you survive the policy tenure, you get your outlay back along with returns and bonuses, reaping profits.</li>
					</ul>
		</ul>
		<p class="paraa-p">Kotak Life offers different types of savings and investmentlife insurance plans:</p>

		<ul class="bullet paraa-p">
			<li><b> A) Unit-linked life insurance policies(ULIP)</b>
			These savings schemes allow you to speculate in the capital market. You can choose the funds, debts, or equity, or a balanced combination of both types, according to your capacity for handling risks. The option to move your money among the various asset types protects your capital and helps you maximize your profits.</li>
			<li><b>B) Participating ‘with-profits’ plans</b>
			Kotak Life shares parts of its surplus earnings with the investors through dividends on such policies. Thus, these plans ensure capital appreciation, along with life insurance.</li>
			<li><b>C) Non-participating non-linked plans– </b> specified maturity proceeds, Kotak Life guarantees the investment benefit in such schemes.</li>	 
		</ul>
		<p class="paraa-p">Policies that fall under participating or non-participating categories can further be classified as follows:</p>
		<ul class="bullet paraa-p">
			<li><b>Money-back plans–</b> receive parts of your sum assured at regular intervals throughout the policy period. The balance sum, or assembled bonuses, is disbursed at maturity.</li>
			<li><b>Income plans– </b> Life offers alternative sources of earnings through policies that pay guaranteed monthly or yearly incomes. Some programs even increase the income year on year. Moreover, accrued bonuses paid at maturity augment your savings.</li>
			<li><b>Guaranteed savings plans –</b> Life guarantees the benefits on such policies, providing certainty of returns.</li>
		</ul>

		<p class="paraa-p"><b>Insurance riders</b></p>
		<p class="paraa-p">Kotak Life enables you to personalize the protection as per your individual needs through riders. Some examples of such riders include:</p>
		<ul class="bullet paraa-p">
			<li>Critical Illness cover</li>
			<li>Accidental Death Benefit</li>
			<li>Waiver of Premium on permanent disability</li>
		</ul>
		<h2 class="h2bold">How does a life insurance policy work?</h2>

			<ul class="bullet">
				<li><b>What is life insurance:</b>It is the pledge from your insurance provider to pay a specified amount to your beneficiary in case of an unfortunate incidence. In return, you pay a pre-decided premium to the insurance provider. Paying premiums on a regular basis or all at once at the time of purchase is essential to keep the policy in force.</li>
				<li><b>How the insurers decide the premium:</b> Through the process of underwriting, the insurer assesses risks involved in insuring your life. They ensure that the cost of the life cover they propose matches the risk they face in providing the coverage. For this reason, they put forward a detailed questionnaire about your health status and your workplace conditions. You may have to undergo a medical examination as well. The insurers set thebest life insurancepremium for you accordingly. Also, life risks amplify with age and premiums cost more when your age increases.</li>
				<li><b>When to pay the premium:</b>You can opt to pay the premium upfront when youbuy life insurance.You can also pay on a monthly, yearly, half-yearly, or quarterly basis depending on the terms of your policy.</li>
				<li><b>How your beneficiary receives the benefits:</b>If an unwanted event happens, your nominated recipient must file a claim with a duly filled intimation form and the original policy document. The insurance company verifies the claim validity in line with the policy terms. If everything is in order, the insurer releases the stipulated payout.</li>
				<li><b>When insurers can reject claims:</b> Suppressed or false information in the application form or a lapsed policy can be causes for refusal.</li>
				<li><b>How term insurance works:</b> The life cover lasts for the period defined at purchase. Your nominee receives the sum stated in the policy when you meet an untoward outcome. There is no cash value, and if you survive the policy term, the insurer makes no payment. It is the most inexpensive form of life insurance providing sizeable life coverage at premiums that fit your budget.</li>
				<li><b>How traditional life insurance works: </b>The sum assured is defined at inception. However, such policies acquire a cash value with time since a part of the premium earns interest, and the insurer shares the profit with you. You can access this amount as regular incomes during the policy period or let it accumulate up to maturity. If an unwanted event occurs, your family received the death benefits.</li>
				<li><b>How unit-linked life insurance works:</b> The sum assured is not fixed. The insurer invests your premium in the capital market. You can choose the funds where your money goes based on your risk appetite, and market performance decides the final yields. Thus, suchlife insurance planspresent the potential for substantial profits. Moreover, your nominee receives a payout in case of an untimely loss.</li>
			</ul>
<h2 class="h2bold">How to choose the perfect life insurance policy and coverage for you?</h2>
<ul class="bullet">
	<li><b>Work out the coverage type best suitable for you.</b>Before buying, it is vital to determine the goals that you plan to achieve through this financial tool. Once you identify the needs, it will be simpler to choose thebest life insurance policythat covers the essential aspects.</li>
	<ul class="buleet">
		<li>If you need coverage that generates liquidity, you can consider an investment insurance policy that acquires surrender value. You can take loans or partially withdraw funds from it.</li>
		<li>A money-back plan may work well for you if you have specific time frames for your short-term life goals.</li>
		<li>An income plan can act as a source of income after your regular wages stop.</li>
		<li>Those who are in the lookout for quick profits and do not have hefty financial liabilities can invest in market-linked insurance.</li>
		<li>If you wish to protect your retirement corpus and make decent profits, you can buy non-participating policies with guaranteed returns.</li>
		<li>In case your primary goal involves protecting your family from financial duress, term insurance can be thebest life insurance plansfor you.</li>
	</ul>
	<li><b>Determine how long you need life protection.</b></li>
	<p>The duration for which your family will need financial assistance should be your ideal policy term. For example:</p>
	<ul class="bullet">
		<li>You may need insurance for a defined period, for instance, until the time your children acquire financial independence or for the duration of your home loan. In this case, term insurance would be appropriate.</li>
		<li>Otherwise, if you have to provide for financial dependents up to an advanced age, you can consider wholelife insurance. It can act as a source of income for your spouse.</li>
		<li>For pension planning, you can count the number of years until your retirement and select a limited premium payment term accordingly.</li>
	</ul>
	<li><b>Calculate your ideal sum assured.</b></li>
		<p>You can estimate this value through the following steps:</p>
		<ul class="bullet">
			<li>Review your family’s current living costs</li>
			<li>Gauge how long your dependents may require income replacement</li>
			<li>Multiply the two values</li>
			<li>Add your outstanding debts, e.g. house mortgage, car loans, existing student loans, credit card dues, etc. to the product</li>
			<li>Include the expected expenses for your children’s education or other long-term expenditure you can foresee.</li>
			<li>Deduct the value of your existing investments</li>
		</ul>
		<p>You will arrive at a ballpark figure for the coverage you need.</p>
		<p>Do keep in mind that inflation may erode your money’s worth. Nevertheless, insurance plans with investment elements, especially policies linked to the capital market can deliver inflation-beating revenues. Another economical option is to opt for term insurance that offers the flexibility to upgrade the life cover with changing circumstances.</p>
		<li><b>Select according to your budget.</b></li>
<p>The cost of the coverage is another vital consideration that affects your policy choice. You can research online for thebest life insurancequotes.</p>

<li><b>Customize your coverage with riders.</b></li>
<p> For a nominal cost, you can club with your basic sum assured extra coverage against financial exigencies.
For example, if you work in a high-risk profession, an accidental death benefit can be useful. It will provide extra payouts to your family if you meet an accident.
Likewise, if you have a family history of critical ailments, you can buy a critical illness rider. It offers payouts if you contract a life-threatening health condition covered under the plan.</p>
<li><b>Consult a life insurance advisor.</b></li>
<p>An expert can help you analyze the potential worth of your preferred policies and guide you towards thebest life insurancepolicyfor your needs. Reputed insurance companies offer the assistance of in-house advisors. You can discuss your requirements with them before making the final selection.</p><br>
 
</ul>
<h2 class="h2bold">What are the Documents Required to Buy Life Insurance?</h2>
<ul class="bullet">
	<li><b>Admission of age</b></li>
			<ul class="bullet"><li>Driving License</li>
			<li>Birth certificate</li>
			<li>School leaving certificate</li>
			<li>Passport</li>
			<li>PAN card</li>
			<li>Driving license</li>
			<li>Aadhaar Card</li>
			</ul>

	<li><b>Photo ID Proof</b></li>
	<ul class="bullet">
		<li>Passport</li>
		<li>PAN card</li>
		<li>Driving license</li>
		<li>Election Photo Identity Card (EPIC)</li>
		<li>Aadhaar Card</li>
	</ul>
	<li><b>Residence proof</b></li>
	<ul class="bullet">
		<li>Passport</li>
		<li>Driving License</li>
		<li>Aadhaar Card</li>
		<li>Voter ID</li>
		<li>Updated bank account statement/ passbook</li>
		<li>Utility bills of electricity, gas, or telephone</li>
		<li>Ration card</li>
		<li>Rental agreement</li>
	</ul>
	<li><b>Income documents</b></li>
	<ul class="bullet">
		<li>Latest salary slips</li>
		<li>Current Form 16</li>
		<li>Previous 3 years’ Income Tax Returns</li>
		<li>Audited profit/loss statements</li>
		<li>Employer’s certificate</li>
		<li>Last 6 months’ bank statement</li>
	</ul>
	<li><b>Passport-sized photographs</b></li>
	<li><b>Medical records</b></li>
	<ul class="bullet"><li>As specified by the insurer</li></ul>
</ul>
<h2 class="h2bold">How to buy the perfect life insurance policies for you?</h2>
<ul class="bullet">
	<li><b>Calculate the premium:</b> After you decide on thelife insurance coveryou need, use online premium calculators to compute the required premium. Compare policies and select the one that offers adequate coverage at an affordable premium.</li>
	<li><b>Analyze the benefits: </b> for the following</li>
	<ul class="bullet">
		<li>any guarantee on the returns</li>
		<li>financial rewards like loyalty additions or assured wealth boosts</li>
		<li>the flexibility of investment, e.g. fund switch, increase in coverage</li>
		<li>associated charges</li>
		<li>availability of loans or partial withdrawal options</li>
	</ul>

	<li><b>Check the provider’s credibility:</b>Ensure that the insurance company has a claim settlement ratio as the proof of reliability. Also, a high solvency ratio indicates sufficient cash flow for honouring claims. These checks will ascertain hassle-free claim settlement.</li>
	<li><b>Fill up the proposal form:</b> After you pick thebest life insuranceplan for your needs, fill up the application form. Mention relevant details about your age, health, personal habits, and profession. Take care not to conceal any vital fact or furnish false information to avoid claim rejections later.</li>
	<li><b>Select a convenient premium payment option and term:</b> Consider your finances before making long-term financial commitments. Single premium and limited pay options can work well for individuals with fluctuating incomes. With a regular payment scheme, select the frequency that best matches your flow of funds.</li>
	<li><b>Name a nominee:</b> Specify the person whom you intend to benefit with the proceeds from yourlife insuranceto avoid future disputes.</li>
	<li><b>Buy insurance online:</b>You can avoid delays and elaborate paperwork through online purchases.</li>
	<li><b>Utilize the free-look period:</b> Go through the policy documents carefully and understand the exclusions. You can return the policy within this phase if you find the stipulations do not align with your requirements.</li>

</ul>
<h2 class="h2bold">What are the benefits of buying life insurance policies?</h2>
<ul class="bullet">
<li><b>Life coverage</b>
Life insurance shields your loved ones against financial exigencies when your income can no longer support them.</li>
<li><b>Tax savings</b>
A valuable aspect oflife insurance of Indiais that it entitles you to deductions against premiums paid under Section 80C of the Income Tax Act, 1961. Such rebates reduce your taxable income, enabling you to save on taxes. The returns are also tax-exempt subject to the provisions of Section 10(10D).</li>
<li><b>Wealth creation</b>
Life insurance planswith investment features help you stockpile funds for your long-term financial goals, e.g. child’s education.</li>
<li><b>Emergency funds through loans</b>
You can avail of low-interest loans against your traditional endowment policy and access funds at short notice.</li>
<li><b>Extra perks</b>
Additional life cover in accidents and waiver or premiums in permanent disabilities are the addedbenefits of life insuranceriders.</li>
<li><b>Retirement planning</b>
You can park your savings in life insurance and ensure consistent income after retirement.</li>
<li><b>Infirmity protection</b>
You can add critical illness riders with yourlife insurance policyand arrange long-term healthcare funds for dangerous diseases.</li>

</ul>


<h2 class="h2bold paraa-p">FAQs</h2>
				<!-- Accord Start -->
				<ul class="accordUL" id="faqs-div">
					<li class="ga_track">
						<h3 class=""><span>Is it necessary to buy life insurance?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>If you have financial dependents and liabilities, it is crucial to buy life insurance. In case of an unwanted upshot, your loved ones can suffer from a lack of adequate funds. Besides, if you have loans, your family can lose the asset if they default on the repayment. Thus, to protect your family from unpleasant circumstances, you canbuy life insurance onlinefrom reputed insurers.</p>
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>How does life insurance work?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>You procure life insurance in exchange for a payment known as premium. Parts of the premium provide the administrative charges of the insurer and the life coverage costs. In savings plans, the insurer invests another part into profit-making schemes. This portion earns revenues, which the insurer passes on to you as benefits.</p>
							
								
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>Who can buy a life insurance policy?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>If you are a wage earner and have relatives to sustain, you can buylife insurance for the family. Even homemakers need life insurance because their contribution has an economic value. Children need it as well to avoid risks on their future income potential. Retirees can also invest in pension plans as an alternative source of income. Thus, anyone can buy a life insurance policy. The age bracket for purchasinglife insurance in Indiais usually between 18 and 65 years. You can check the criteria like minimum and maximum age of entry on your insurer’s website.</p>
							
							
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>What is the ideal life cover that I need?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Several factors govern the ideal amount for your life coverage:</p>
							
							<ul class="bullet">
								<li>The number of your financial dependents</li>
								<li>The kind of lifestyle you want to ensure for them and the money necessary for meeting such living costs</li>
								<li>The amount needed to cover your children’s expenses and your existing loans</li>
								<li>Your current age and annual income</li>
								<li>The premium you can afford</li>
								<li>Your investment goals</li>
							</ul>
                            <p>You can take the help of experienced life advisors to identify thebest life insurancecover in keeping with your needs.</p>							
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>What is the right age to buy a life insurance plan?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>The moment you acquire the responsibility for the financial wellbeing of your retired parents, spouse, or children, becomes the correct time for buying life insurance. Even if you have just started to earn, you need to assemble funds for future goals and old age expenses. Life insurance costs increase with age. Thus, delaying the purchase of alife insurance policywill raise the premium you have to pay. However, the amount remains fixed throughout the policy tenure. Therefore, buying early will help you save on the premium outgo.</p>
														 		
						</div>
					</li>
					<li class="ga_track">
						<h3 class=""><span>How to pay the premium for my life insurance?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Online life insurance payment channels:</p>
							  <ul class="bullet">
								<li>NEFT through your bank’s net banking platform</li>
								<li>Payment from your insurance company’s website with approved credit or debit cards</li>
								<li>Internet banking</li>
								<li>Electronic bill payment services of your bank</li>
								<li>Bill Desk</li>
								<li>Mobile Immediate Payment Service (IMPS) with MMID</li>
							</ul>
							<p>Offline avenues</p>
                                  <ul class="bullet">
								<li>Cheque drop boxes at selected ATMs</li>
								<li>Cash/ cheque/demand draft/ credit card payment at your insurance provider’s branch offices</li>
							</ul>
                           <p>Electronic fund transfer</p>	
                                	<ul class="bullet">
								<li>Standing instruction to debit your bank account automatically</li>
								<li>Direct debit from your bank account through Electronic Clearance Service (ECS)</li>
							</ul>					   
						</div>
					</li>
					
					
					
					<li class="ga_track">
						<h3 class=""><span>What will happen to my life insurance policy if I cancel it?</span></h3>
						<div class="accordDesc" style="display: none;">
							<ul class="bullet">
								<li>If it is a plan with cash value, you will receive the surrender value provided the policy has completed the lock-in period. You can obtain the surrender value of your policy from your insurance provider.</li>
								<li>Your life cover will cease to exist, and your family will no longer receive thebenefits of life insuranceif anything regrettable happens.</li>
							    <li>If you cancel your policy during the free-look period, you will get a refund of your premium minus the stamp duty and medical expenses incurred by your insurer.</li>
								</ul>						 		
						</div>
					</li>
					
					
					
					<li class="ga_track">
						<h3 class=""><span>How do I choose a nominee?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>You can appoint as your nominee anyone you want to benefit from the life insurance funds. The general practice is to assign your close relatives like children, spouse, or parents. But, to secure your family’s finances, you need to evaluate the accountability of the person you choose. You can select multiple beneficiaries as well.</p>
							<p>Moreover, if you want to nominate children below age 18, you have to appoint a custodian. The appointee will receive the payout unless the minor attains adulthood.</p>
							<p>However, nominating an unrelated person who will not suffer any hardship from the loss of your income can be hazardous. Thus, insurance companies may refuse such a nominee.</p>
						</div>
					</li>
					
					
					
					<li class="ga_track">
						<h3 class=""><span>Can I change the beneficiary/nominee for my life insurance policy?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>You can change the nominee for your activelife insurance policyany time during your policy term. Multiple nomination changes are permissible, and the latest nominee supersedes the previous ones. You can fill up the relevant amendment form mentioning the details of your new nominee and submit it to the insurer. The forms are available on the insurance provider’s website and branch offices.</p> 
						</div>
					</li>
					
					
					<li class="ga_track">
						<h3 class=""><span>How will my family receive the life insurance claim?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Filing a claim is a straightforward process and involves the following steps:</p>
                                <ul class="bullet">
								<li>Filling up the claim form online or at a branch office of the insurance company</li>
								<li>Submitting a copy of the death certificate and the original policy bond</li>
							    <li>Furnishing documents like hospital certificate, police FIR report, postmortem report, discharge summary and other medical records in case of an accidental death</li>
								<li>Furnishing KYC papers of the legal heir like the succession certificate in the absence of a nominee</li>
								</ul>
                             <p>The insurer will scrutinize the documents and verify the validity of the claim. Once satisfied, they will settle the payment. Your family will receive the benefits as a lump sum, a fixed, or increasing incomes as stated in the policy.</p>								
                               							
						</div>
					</li>
					
					
					
					<li class="ga_track">
						<h3 class=""><span>Why should I buy a life insurance policy?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>Reasons for buying life insurance include:</p>
                                  <ul class="bullet">
								<li>Protecting your loved ones from the financial losses resulting from an eventuality</li>
								<li>Shielding your family from the challenges of repaying your due credits</li>
							    <li>Financing your children’s higher education and other long-term goals</li>
								<li>Securing a constant income after retirement</li>
								<li>Saving tax</li>
								<li>Increasing your monetary assets through disciplined savings and judicious investments</li>
								</ul>     							
						</div>
					</li>
					
					
					<li class="ga_track">
						<h3 class=""><span>What are the tax benefits available with life insurance?</span></h3>
						<div class="accordDesc" style="display: none;">
							<p>You can avail deductions up to ₹1.5 lakhs per financial year for your life insurance premiums, under <a href="<?=base_url()?>insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction">Section 80C</a> of the Income Tax Act, 1961. However, if your policy was issued before March 31, 2012, you can apply for such deductions when the total premium does not exceed 20% of the sum assured. For policies issued later, the total premium must not surpass 10% of the sum assured to be eligible for deductions.</p>
                            <p>Moreover, <a href="<?=base_url()?>insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know">Section 10(10D)</a> makes the maturity benefit tax-free if the total premium amount does not go beyond 10% of the sum assured. Besides, the death benefit paid to the nominee is exempt from taxes.</p>       							
						</div>
					</li>
					
					 
				</ul>
			 
								<!-- Accord End --> 
			</div>
		  </article>
				 
  
         <?php  }   ?> 
		 <script>
		  function buttonClick(input){
	 //alert(input);
	// console.log('Test PAge='+input);
    //let st = $(input).attr('data-tag');
	 lmSMTObj.track(input, {
			"products": [
			{
		"name": input
			}
		],
		"labelType": "Click",
		"label": input+" Know More"}
			);
		//lmSMTObj.track(input)
		 }
		 </script>
		 </script>
		 
		<script type="application/ld+json">

{

"@context": "https://schema.org",

"@type": "FAQPage",

"mainEntity": [{

"@type": "Question",

"name": "Is it necessary to buy life insurance?",

"acceptedAnswer": {

"@type": "Answer",

"text": "If you have financial dependents and liabilities, it is crucial to buy life insurance. In case of an unwanted upshot, your loved ones can suffer from a lack of adequate funds. Besides, if you have loans, your family can lose the asset if they default on the repayment. Thus, to protect your family from unpleasant circumstances, you can buy life insurance online from reputed insurers."

}

},{

"@type": "Question",

"name": "How does life insurance work?",

"acceptedAnswer": {

"@type": "Answer",

"text": "You procure life insurance in exchange for a payment known as premium. Parts of the premium provide the administrative charges of the insurer and the life coverage costs. In savings plans, the insurer invests another part into profit-making schemes. This portion earns revenues, which the insurer passes on to you as benefits."

}

},{

"@type": "Question",

"name": "Who can buy a life insurance policy?",

"acceptedAnswer": {

"@type": "Answer",

"text": "If you are a wage earner and have relatives to sustain, you can buy life insurance for the family. Even homemakers need life insurance because their contribution has an economic value. Children need it as well to avoid risks on their future income potential. Retirees can also invest in pension plans as an alternative source of income. Thus, anyone can buy a life insurance policy. The age bracket for purchasing life insurance in India is usually between 18 and 65 years. You can check the criteria like minimum and maximum age of entry on your insurer’s website."

}

},{

"@type": "Question",

"name": "What is the ideal life cover that I need?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Several factors govern the ideal amount for your life coverage:The number of your financial dependentsThe kind of lifestyle you want to ensure for them and the money necessary for meeting such living costsThe amount needed to cover your children’s expenses and your existing loansYour current age and annual incomeThe premium you can affordYour investment goalsYou can take the help of experienced life advisors to identify the best life insurance cover in keeping with your needs."

}

},{

"@type": "Question",

"name": "What is the right age to buy a life insurance plan?",

"acceptedAnswer": {

"@type": "Answer",

"text": "The moment you acquire the responsibility for the financial wellbeing of your retired parents, spouse, or children, becomes the correct time for buying life insurance. Even if you have just started to earn, you need to assemble funds for future goals and old age expenses. Life insurance costs increase with age. Thus, delaying the purchase of a life insurance policy will raise the premium you have to pay. However, the amount remains fixed throughout the policy tenure. Therefore, buying early will help you save on the premium outgo."

}

},{

"@type": "Question",

"name": "How to pay the premium for my life insurance?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Online life insurance payment channels:NEFT through your bank’s net banking platformPayment from your insurance company’s website with approved credit or debit cards Internet bankingElectronic bill payment services of your bank Bill DeskMobile Immediate Payment Service (IMPS) with MMIDOffline avenuesCheque drop boxes at selected ATMsCash/ cheque/demand draft/ credit card payment at your insurance provider’s branch offices Electronic fund transferStanding instruction to debit your bank account automaticallyDirect debit from your bank account through Electronic Clearance Service (ECS)"

}

},{

"@type": "Question",

"name": "What will happen to my life insurance policy if I cancel it?",

"acceptedAnswer": {

"@type": "Answer",

"text": "If it is a plan with cash value, you will receive the surrender value provided the policy has completed the lock-in period. You can obtain the surrender value of your policy from your insurance provider.Your life cover will cease to exist, and your family will no longer receive the benefits of life insurance if anything regrettable happens.If you cancel your policy during the free-look period, you will get a refund of your premium minus the stamp duty and medical expenses incurred by your insurer."

}

},{

"@type": "Question",

"name": "How do I choose a nominee?",

"acceptedAnswer": {

"@type": "Answer",

"text": "You can appoint as your nominee anyone you want to benefit from the life insurance funds. The general practice is to assign your close relatives like children, spouse, or parents. But, to secure your family’s finances, you need to evaluate the accountability of the person you choose. You can select multiple beneficiaries as well. Moreover, if you want to nominate children below age 18, you have to appoint a custodian. The appointee will receive the payout unless the minor attains adulthood. However, nominating an unrelated person who will not suffer any hardship from the loss of your income can be hazardous. Thus, insurance companies may refuse such a nominee."

}

},{

"@type": "Question",

"name": "Can I change the beneficiary/nominee for my life insurance policy?",

"acceptedAnswer": {

"@type": "Answer",

"text": "You can change the nominee for your active life insurance policy any time during your policy term. Multiple nomination changes are permissible, and the latest nominee supersedes the previous ones. You can fill up the relevant amendment form mentioning the details of your new nominee and submit it to the insurer. The forms are available on the insurance provider’s website and branch offices."

}

},{

"@type": "Question",

"name": "How will my family receive the life insurance claim?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Filing a claim is a straightforward process and involves the following steps:Filling up the claim form online or at a branch office of the insurance companySubmitting a copy of the death certificate and the original policy bondFurnishing documents like hospital certificate, police FIR report, postmortem report, discharge summary and other medical records in case of an accidental death Furnishing KYC papers of the legal heir like the succession certificate in the absence of a nomineeThe insurer will scrutinize the documents and verify the validity of the claim. Once satisfied, they will settle the payment. Your family will receive the benefits as a lump sum, a fixed, or increasing incomes as stated in the policy."

}

},{

"@type": "Question",

"name": "Why should I buy a life insurance policy?",

"acceptedAnswer": {

"@type": "Answer",

"text": "Why should I buy a life insurance policy?Reasons for buying life insurance include:Protecting your loved ones from the financial losses resulting from an eventualityShielding your family from the challenges of repaying your due creditsFinancing your children’s higher education and other long-term goals Securing a constant income after retirementSaving taxIncreasing your monetary assets through disciplined savings and judicious investments"

}

},{

"@type": "Question",

"name": "What are the tax benefits available with life insurance?",

"acceptedAnswer": {

"@type": "Answer",

"text": "You can avail deductions up to ₹1.5 lakhs per financial year for your life insurance premiums, under Section 80C of the Income Tax Act, 1961. However, if your policy was issued before March 31, 2012, you can apply for such deductions when the total premium does not exceed 20% of the sum assured. For policies issued later, the total premium must not surpass 10% of the sum assured to be eligible for deductions.Moreover, Section 10(10D) makes the maturity benefit tax-free if the total premium amount does not go beyond 10% of the sum assured. Besides, the death benefit paid to the nominee is exempt from taxes."

}

}]

}

</script>


		
        <!---------------------accordin end here-------------->
  <?php 
   
    if ($mainPlanType == 'Online Plans') { 
        //GA code Variables
        $eventGA = 'event email need help premium';
        $labelGA = 'email click';
       //Need help for paying premium
       $this->load->view('common/need_help_paying_premium', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA));
    } 
  ?>

  <?php 
  	if($mainPlanType == 'Insurance Plans') { 
		//GA code Variables
        $eventGA = 'event need help email';
        $labelGA = 'email click';
        //Need Help Buying A Plan Block
	    $this->load->view('common/need_help_buying_a_plan', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA));
	}
  ?>

  <?php 
  	if($mainPlanType == 'Group Plans') { 
		//GA code Variables
	    $eventGA = 'event need help email';
	    $labelGA = 'email click'; 
	    //Need Help Buying A Plan Block
	    $this->load->view('common/need_help_buying_a_group_plan', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA));
	}
  ?>
  
</section>
<!-- Section End -->