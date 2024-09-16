<!doctype html>
<html lang="en">
<head>
<!-- Google Tag Manager - dataLayer Object Place this code just before </head> tag -->
<script>
dataLayer = [];
</script>
<!-- End dataLayer Object -->
<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NH7ZFB6');</script>

<!-- End Google Tag Manager (noscript) -->
<?php

		if(get_cookie('kotak_customer_type')){
		$customerType = get_cookie('kotak_customer_type');
	}else{
		$customerType = "new_customer";
	}
		/*if(!isset($_COOKIE['kotak_customer_type'])){
			$customerType="";
		}else{
			$customerType = get_cookie('kotak_customer_type');
		}*/
	 // echo $customerType."====Testing";?>
<?php
$actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 /* echo "mamatha".$actual_link_url;*/
 if($actual_link_url==base_url."/online-plans/online-protection-plans")
 {
	 $redirectURL = base_url."/online-plans/online-term-insurance-plans/";
	 redirect("$redirectURL");
 }
if($actual_link_url==base_url."/online-plans/online-protection-plans/kotak-e-term-plan-online")
 {
	 $redirectURL = base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-online";
	 redirect($redirectURL);
 }   ?>

<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="canonical" href=base_url."">
  <link rel="preload" href="<?php echo base_url()?>assets/mobile/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,700&display=swap" rel="stylesheet">
<link rel="preload" href="<?php echo base_url()?>assets/mobile/css/bootstrap-select.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="<?php echo base_url()?>assets/mobile/css/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="<?php echo base_url()?>assets/mobile/css/slick-theme.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

<link rel="preload" href="<?php echo base_url()?>assets/mobile/css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

  <title>Kotak Life</title>
  <style>
/*footer home page css v*/
    .plan-list li a {
      position: relative;
      padding-left: 15px;
      color: #000;
      font-size: 12px;
      padding-bottom: 5px;
      padding-bottom: 10px;
      display: block;
    }

    .plan-list h6 {
      font-size: 15px;
      color: #000;
      font-weight: bold;
      padding-bottom: 5px;
      text-transform: uppercase;
      padding-bottom: 10px;
      display: block;
    }

    .roww {
      display: flex;
      flex-wrap: wrap;
    }

    .mtb-0 {
      margin-top: 0;
      margin-bottom: 0;
      padding-left: 0;
      margin-left: 12px;
    }

    .plan-list li a:before {
      left: -4px;
      top: 0;
      content: '';
      background-image: url(assets/images/custom/links-arrow.png);
      height: 15px;
      width: 15px;
      position: absolute;
    }

    .plans ul {
      padding-inline-start: 0 !important;
    }

    @media only screen and (max-width: 767px) {
		.buy-life-slick p {max-width: 100%;min-height: initial;max-height: initial;}
		.home-content{position:static!important;}
/*popular searches v*/
.popular-search-anc li{text-align: center;width: 50%;}
/*popular searches ^*/
      .w-footer-20 {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .w-footer-30 {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .hide-mobile {
        display: none !important;
      }
	  .m-premium{color:#fff; padding:10px 5px 15px; background:#093768; width:100%;}
	  .online-but a{border-right:1px solid #fff;}
.online-but a, button.buy-online{font-size:14px; text-align:center; }
    }





    @media only screen and (max-width: 640px) {



    }

    @media (min-width: 768px) {
      .hide-desktop {
        display: none !important;
      }
    }

    /*footer home page css ^*/

/*popular searches v*/
.polular-searches{padding:20px 0;border-top: 1px solid #707070;}
.polular-searches h6{color: #000000;font-size: 15px;font-weight: 700;font-style: normal;text-transform: uppercase;margin-bottom:20px;}
.popular-search-anc a{color: #000000;font-size: 13px;font-weight: 400;padding:8px 12px 8px 12px;border-radius: 16px;border: 1px solid #bebebe;margin-right:12px;margin-bottom:10px;display: block;line-height: initial;}
.popular-search-anc ul{display: flex;flex-wrap: wrap;align-items: baseline;}
.popular-search-anc a:hover{border: 1px solid #ff0000!important;}
@media (max-width: 767px){
/*popular searches v*/
.popular-search-anc li{text-align: center;width: 50%;}
/*popular searches ^*/
}
/*popular searches ^*/
</style>
  <style type="text/css">
    #personal_information,
    #company_information {
      display: none;
    }

.get-btn{
    padding: 3px 15px 3px 15px;
    border-radius: 15px;
    background-color: #00387e!important;
    color: #fff!important;
    font-size: 12px;
    font-weight: 100;
	position: absolute;
    bottom: -34px;
	z-index:111;
    right: 315px;
	left: 25px;}
	.position-relative{position:relative!important;}

	.custom-icon {position: fixed;right: 0;bottom: 0;padding-right: 8%;padding-bottom: 40px;}
    .tv-pad{    position: absolute;
  right: 14px;
  top: 12px;}
  .tv-pad-mobile{position: absolute;
  right: 14px;
  top: bottom;
  bottom: 26%;
  left: 44%;}
  .tv-pad-footer{position: absolute;
    right: 36%;
    top: 58%;
    translate: (-50%, -50%);
    transform: translate(-50%, -50%);}

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
}
.rem-buy-cal{    padding: 10px 15px 65px 15px;
    -webkit-transition: all ease .5s;
}
.home-content{position:absolute;bottom:211px;}
  </style>

  <style>
/*buy online new v*/
.buy-life {padding: 0px 15px 65px 15px!important;}
.buy-online-new-sec{background-color:#fff;}
.buy-life-new h1{color: #ed3438;font-size: 36px;font-weight: 700;    margin: 0;text-align: initial;padding: 0;}
.now-txt{padding:12px 0 20px 0;color: #4c4c4c;font-size: 24px;font-weight: 400;letter-spacing: 0.67px;line-height: normal;text-align: initial;border-bottom: 1px dashed #707070;}
.buy-life-slick h2{color: #000000;font-size: 20px;font-weight: 700;text-align: initial;margin:0;padding:0;font-family: Lato-Regular;}
.buy-life-slick p{max-width: 292px;color: #3d3d3d;font-size: 16px;font-weight: 400;text-align: initial;    margin: 19px 0 19px 0;
  min-height: 156px;
  max-height: 156px;
  overflow-y: hidden;
  -webkit-line-clamp: 6;}
.buy-online-links a{    display: inline-flex;color: #ed3438;font-size: 12px;font-weight: 400;line-height: normal;text-align: center;border-radius: 36px;border: 1px solid #ed3438;padding:11px 15px;margin-right:6px;}
.term-anc{background-color: #ed3438!important;color:#fff!important;padding:11px 12px!important;}
.buy-life-slick{padding:40px 0 150px  0!important;}
.mr-14{margin-right:14px;}
/* .buy-life-slick .first-child{border-right: 1px dashed #636363;max-width: 400px;} */

.buy-slick-card{max-width: 325px;margin-right: 100px!important;}
.buy-slick-card-br{position: relative;}
/*sindhu commented
.buy-slick-card-br:after{content:"";position: absolute;top:0;right:0;background-image: url(../images/bor-img.svg);background-repeat: no-repeat;    height: 100%;
  width: 100%;
  left: -56px;}
.br-0{border-right:0!important;}
sindhu commented
*/

.buy-life-slick .slick-next{position: absolute;right: 0;bottom:55px;background-image: url(../images/slick-next-arr.svg);background-repeat: no-repeat;height: 45px;width: 45px;padding: 33px 33px}
.buy-life-slick button{background-color: transparent;border: 0;border-radius: 0;color: 0;cursor: pointer;display: inline-block;font-size: 0;}

.buy-life-slick .slick-prev{position: absolute;bottom: 55px;right: 80px;left:unset;background-image:url(../images/slick-prev-arr.svg);background-repeat: no-repeat;height: 45px;width: 45px;padding: 33px 33px;}
.buy-slick-card img{height:50px;width:43px;}
.buy-slick-card .d-flex{width:100%!important;}
.knw-mobile{color: #ed3438;font-size: 15px;font-weight: 400;letter-spacing: 0.24px;line-height: normal;}

@media only screen and (max-width: 767px){
/*buy online new v*/
.buy-slick-card {max-width: 100%!important;border-bottom:1px dashed #636363!important;border-right:0!important;padding: 20px 0 40px 0!important;margin-right:0!important;}
.buy-life-slick h2 {color: #000000;font-size: 20px;}
.buy-slick-card .d-flex{display: block!important;}
.buy-online-links a {display: block;color: #ed3438;width: 100%;text-align: center!important;}
/*dnt add this in server v*/
.rhsBoxDetailWrap.activate .rhsboxWrap {left: 0!important;width: 100%!important;    padding-top: 5px!important;}
/*dnt add this in server ^*/
.buy-life-slick p {max-width: 100%;min-height: initial;max-height: initial;}
.buy-slick-card img { margin-bottom: 6px;}
.moreless-button-buy{font-size: 15px!important;}
.moretext-buy{display: none;}
.best-card {margin-right: 0;}
.best-invest #topic1 p{margin-right:0;}
.best-invest #topic1 li {padding-right: 0;}
.cross-red{margin-top:30px!important;}

.tv-pad-footer{z-index:10;right:34%;}
/*buy online new ^*/
}
/*buy online new ^*/
.dd-none{display:none!important;}
.p-txt{color: #404040!important;font-size: 18px!important;font-weight: 700!important;text-align: initial!important;margin:0!important;padding:0!important;min-height: initial!important;max-height: initial!important;max-width:100%!important;}

  /*buy online menu v*/
.menu-buy{color: #da251c!important;font-family: Lato-Regular!important;font-size: 9px!important;font-weight: 400!important;border-radius: 2px;border: 1px solid #da251c;background-color: #ffffff;padding:0px 5px 0px 5px!important;margin:0px 0 5px 5px!important;}
.menu-buy:after{width:0!important;}
.menu-buy:hover{background-color: #da251c!important;color:#fff!important;}
/*buy online menu ^*/

/*buy online menu v*/
.sub-collapse-option li{display: flex;align-items: baseline;}
.menu-buy{color: #da251c!important;font-family: Lato-Regular!important;font-size: 9px!important;font-weight: 400!important;border-radius: 2px;border: 1px solid #da251c;background-color: #ffffff;padding:5px 5px 5px 5px!important;margin:0px 0 5px 5px!important;}
.menu-buy:after{width:0!important;}
.menu-buy{margin-top:0px!important;display: flex;width:55px;}
/*buy online menu ^*/

.filter-option-inner-inner{padding-top:5px!important;}
.life-need .dropdown-toggle::after{margin-right:11px;}
.bootstrap-select .dropdown-menu li:first-child{display:none;}
    .custom-icon {
  padding-bottom: 0px!important;
  padding-right: 0!important;
  filter: drop-shadow(0 0 10px #333);
  right: 30px;
    bottom: 65px;
    cursor:pointer;
}
/*.online-dnone{display:none!important;}*/

/*buy online new v*/
.buy-slick-card .mr-14{position: relative;width: 86px;}
.buy-imgs{position: absolute;right: 0;top: 0;background-image: url(assets/images/buyeterm.svg);background-repeat: no-repeat;height: 65px;width: 65px;}
.buy-imgs:hover{background-image: url(assets/images/buyetermhover.svg);}

.buy-imgs1{position: absolute;right: 0;top: 0;background-image: url(assets/images/buyasur.svg);background-repeat: no-repeat;height: 65px;width: 65px;}
.buy-imgs1:hover{background-image: url(assets/images/assurhover.svg);}

.buy-imgs2{position: absolute;right: 0;top: 0;background-image: url(assets/images/buygur.svg);background-repeat: no-repeat;height: 65px;width: 65px;}
.buy-imgs2:hover{background-image: url(assets/images/buygurhover.svg);}

.buy-imgs3{position: absolute;right: 0;top: 0;background-image: url(assets/images/einvestt.svg);background-repeat: no-repeat;height: 65px;width: 65px;}
.buy-imgs3:hover{background-image: url(assets/images/einvestthover.svg);}

.buy-imgs4{position: absolute;right: 0;top: 0;background-image: url(assets/images/buyhealth.svg);background-repeat: no-repeat;height: 65px;width: 65px;}
.buy-imgs4:hover{background-image: url(assets/images/buyhealthhover.svg);}

.buy-imgs5{position: absolute;right: 0;top: 0;background-image: url(assets/images/buylife.svg);background-repeat: no-repeat;height: 65px;width: 65px;}
.buy-imgs5:hover{background-image: url(assets/images/buylifehover.svg);}

.buy-slick-card {max-width: 405px!important;margin-right: 53px!important;}
.rhsboxWrap {padding: 42px 85px 40px 35px;}
.buy-life-slick .slick-next{position: absolute;right: 0;bottom:33px;background-image: url(../images/newbuynext.svg);background-repeat: no-repeat;height: 45px;width: 45px;padding: 33px 33px}
.buy-life-slick .slick-prev{position: absolute;bottom: 33px;right: 48px;left:unset;background-image:url(../images/newbuyprev.svg);background-repeat: no-repeat;height: 45px;width: 45px;padding: 33px 33px;}
a.closePopup:after, a.closePopup:before {width: 20px;height: 2px;}
a.closePopup span:after {border: 2px solid #da251c;}
.mr-14{margin-left:0!important;margin-bottom:4px!important;}
a.closePopup:after, a.closePopup:before {width: 10px;height: 1px;}
a.closePopup span:after {border: 1px solid #da251c;height: 25px;width: 25px;left: 1px;top: 5px;}
.buy-life-slick .slick-next:hover {background-image: url(../images/ebackhover.svg);}
/*dnt add in server v*/
.buy-life {padding: 150px 15px 65px 15px;-webkit-transition: all ease .5s;position: fixed;background: #fff;z-index: 1;overflow: scroll;top: 65px;height: 545px;height: 100%;}
.online-but {z-index: 11;}--
/*dnt add in server ^*/

@media (max-width: 767px){
.buy-imgs ,.buy-imgs1,.buy-imgs2,.buy-imgs3,.buy-imgs4,.buy-imgs5{position: static;}
.buy-slick-card {max-width: 100%!important;margin-right: 0!important;border-bottom:0!important;padding-bottom: 20px!important;}
.buy-online-links a {font-size: 15px;}
.now-txt {padding: 12px 0 20px 0;color: #4c4c4c;font-size: 16px;border-bottom: 0;}
.buy-life-new h2 {font-size: 25px;color:#ed3438!important;margin-top: 25px!important;font-weight: bold;}
.buy-life-slick {padding: 5px 0 150px 0!important;}
.online-but{z-index:11111111111111;}
}
/*buy online new ^*/
.w-130{width:130px;}



	@media only screen and (max-width:740px){
	ul.navRhs>li.mobileMenu a {width: 25px;height: 20px;}
	ul.navRhs>li>a.searchBtn:after {width: 23px;height: 23px;background-size: cover !important;}
	.searchicon {padding: 0 0 0 5px!important;}
	ul.navRhs>li>a.whatsBtn-sm {padding-left: 30px;}
	ul.navRhs>li>a.whatsBtn-sm:after {width: 23px;height: 22px;top: 6px;}
    .g2-logo{width:100px; margin:20px auto;}
	.g2-logo img{width:100%;}
	.f-s-logo{display:block !important;}
	
  </style>

<script type= "text/javascript"> 
window.lmSMTObj = window.lmSMTObj || [];
var methods = [
    "init",
    "page",
    "track",
    "identify"
]
for (var i=0; i<methods.length; i++) {
    lmSMTObj[methods[i]] = function(methodName){
        return function(){
            lmSMTObj.push([methodName].concat(Array.prototype.slice.call(arguments)));
        };
    }(methods[i]);

}
lmSMTObj.init("zedwk69067jcajamagoj");

var a = document.createElement("script");
a.type = "text/javascript";
a.async = !0;
a.src = "//cdn25.lemnisk.co/ssp/st/6238.js";
var b = document.getElementsByTagName("script")[0];
b.parentNode.insertBefore(a, b);
</script>

<script>
		let page_name= "Kotak Life Insurance";
		 console.log("PageName"+page_name);
		lmSMTObj.page({
		        "pageProps": {
		            "name": page_name
		        }
		    },
		    function () {}
		);
		 </script>
</head>
<body>
  <header class="main_header">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <div class=" logo">
        <a class="navbar-brand logo" href=""><img data-src="<?php echo base_url()?>assets/mobile/images/kotak-logo.png" alt="Kotak Life Insurance - Logo" title="Kotak Life Insurance - Logo" class="img-fluid lazy" height="20px" width="90px"></a>
      </div>
      <div class="whats_search ml-auto d-flex">
        <ul class="d-flex pl-0">
          <li class="align-self-center"><!-- <a href="" class="whats_app">9321003007</a> -->
          <a href="https://api.whatsapp.com/send/?phone=919321003007&amp;text=Hi" class="whats_app" onclick="dataLayer.push({'event':'event top nav WhatsApp', 'category':'top nav', 'action':'Send Hi to 9321003007','label':base_url.'/search'});">9321003007</a>
          </li>
          <li class="align-self-center"><a href="" class="search_icon" data-toggle="modal" data-target="#exampleModal"><span>search</span></a></li>
        </ul>
        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse options_list w-100" id="navbarSupportedContent">
        <div class="main_top">
          <div class="d-flex">
             <a href="<?php echo base_url()?>switch-customer" class="switch">Switch customer type</a>
            <a href="javascript:void(0)" class="close_menu">Close</a>
          </div>
        </div>


		<!--NEW CUSTOMER---->
		<?php if($customerType=='new_customer' || $customerType==''){?>
        <div class="accordion mobile_options mt-5 pt-3" id="accordionExample">
		  <!--<a href="<?php //echo base_url()?>" class="btn btn-link btn-block text-left collapsed only-option">Home</a>-->
          <div class="card border-0">
              <h2 class="mb-0 position-relative">
              <h2 class="mb-0 position-relative">
            <div class="card-header" id="headingTwo">
              	<div class="position-option"><a href="<?php echo base_url()?>why-kotak-life">Why Kotak Life?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li><a href="<?php echo base_url()?>why-kotak-life/about-us">About Us</a></li>
                  <li><a href="<?php echo base_url()?>why-kotak-life/corporate-governance">Corporate Governance</a></li>
				  <li><a href="<?php echo base_url()?>why-kotak-life/csr">CSR</a></li>
                  <li><a href="<?php echo base_url()?>why-kotak-life/media-center">Media Center</a></li>
                  <li><a href="<?php echo base_url()?>why-kotak-life/career">Career</a></li>
                  <li><a href="<?php echo base_url()?>why-kotak-life/contact-us">Contact Us</a></li>
                </ul>
              </div>
            </div>
		   <div class="card border-0">
            <div class="card-header" id="heading4">
              <h2 class="mb-0 position-relative">
              	<div class="position-option"><a href="<?php echo base_url()?>online-plans">Online Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse4" class="collapse " aria-labelledby="heading4" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                 <li>
                  	<a data-customer-type="new_customer" class="customer-type li-head" href="<?php echo base_url()?>online-plans/online-term-insurance-plans" class="li-head">Term Insurance Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a data-customer-type="new_customer" class="customer-type" href="<?php echo base_url()?>online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance" class="arrow">Kotak e-Term Plan</a>
						<a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  	</ul>

                  </li>
				   <li>
                  	<a data-customer-type="new_customer" class="customer-type li-head" itemprop="url"  href="javascript:viod(0)"  class="<?php check_menu_active(2, 'ulip-plan')?> li-head">ULIP Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a data-customer-type="new_customer" class="customer-type" href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-e-invest" class="arrow">Kotak e-Invest Plan</a>
						<a href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  	</ul>

                  </li>

				  <li>
                  	<a data-customer-type="new_customer" class="customer-type li-head" itemprop="url"  href="javascript:viod(0)"  class="<?php check_menu_active(2, 'savings-plan')?> li-head">Savings Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
					
					<li><a data-customer-type="new_customer" class="customer-type" href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings Plan</a>
						<a href=base_url."/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy online-dnone">Buy Online</a>
						</li>
						
						<li><a data-customer-type="new_customer" class="customer-type" href="<?=base_url()?>online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="arrow">Kotak Guaranteed Savings Plan</a>
						<a href=base_url."/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  		
                  	</ul>

                  </li>

                  <li>
                  	<a data-customer-type="new_customer" class="customer-type li-head" href="<?php echo base_url()?>insurance-plans/retirement-plans" class="li-head">Retirement Plans</a>
                  	<ul class="pl-0 sub-collapse-option">                  		
                  	</ul>

                  </li

				  <li>
                  	<a data-customer-type="new_customer" class="customer-type li-head" href="<?php echo base_url()?>kotakWebBI/" class="li-head">Tools & Calculators</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="follow" data-customer-type="new_customer" class="customer-type" href="<?php echo base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=navigation_link&utm_content=term_insurance%20_calculator&lead_group=kotak_organic" class="arrow">Term Insurance Calculator</a></li>
                  		<!--<li><a href="<?php echo base_url()?>einsurance/Loginpage.aspx?PID=EAS" class="arrow">Savings Insurance Calculator</a></li>-->
						
				
		
                  	</ul>

                  </li>

                </ul>
              </div>
            </div>
          </div>


	          <a href="<?php echo base_url()?>online-plans/online-term-insurance-plans" class="btn btn-link btn-block text-left collapsed only-option">Term Insurance</a>

	    <div class="rem-buy-cal dis-none">
              <div class="float-right">
                  <img src="<?php echo base_url()?>assets/mobile/images/cancel.png" class="img-fluid cross-red dis-red">
              </div>
              <div>
                 <h2 class="buy-text">Buy a Life Insurance Plan in a few clicks</h2>
                 <h2 class="now">
                  Now you can buy life insurance plan online.
                 </h2>
              </div>
              <div class="kotak-plan pt-10">
                   <div>
                    <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" src=base_url."/assets/images/Kotak-Preferred-e-term.png" class="img-fluid">
                   </div>
                   <p class="kotak-e">Kotak e-Term Plan</p>
                   <p class="plan-pure"> Kotak e-Term Plan provides a high level of protection to your loved ones in your absence.</p>
                    <div class="d-flex">
                        <div>
                             <a target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href="<?php echo base_url()?>online-plans/online-term-insurance-plans" class="link">Know more</a>
                        </div>
                        <div>

                             <a target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href="<?php echo base_url()?>buy-online-term-insurance/?utm_source=organic&amp;utm_medium=website&amp;utm_campaign=sticky_buy_online&amp;utm_content=sticky_eterm" target="_blank" class="link onlineBuy buy-hover"> Buy Online</a>
                        </div>
                    </div>
              </div>
			  
			    <div class="kotak-plan pt-40">
                   <div>
                    <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" src=base_url."/assets/images/Kotak-Preferred-e-term.png" class="img-fluid">
                   </div>
                   <p class="kotak-e">Kotak Assured Savings Plan</p>
                   <p class="plan-pure"> Kotak Assured Savings Plan is an insurance plan that offers you the dual benefit of returns and life cover and ensures that your goals are sorted, while safeguarding your family’s financial future in case of unforeseen incidents.<p>
                    <div class="d-flex">
                        <div>
                             <a target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'know more|Kotak e-Term Plan'});" href="<?php echo base_url()?>savings-plan/buy-kotak-assured-savings-plan" class="link">Know more</a>
                        </div>
                        <div>

                             <a target="_blank" onclick="dataLayer.push({'event':'event side menu buy online', 'category':'New Customer', 'action':'buy online','label':'buy online|Kotak e-Term Plan'});" href=base_url."/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_kasp " target="_blank" class="link onlineBuy buy-hover"> Buy Online</a>
                        </div>
                    </div>
              </div>

		   <div class="kotak-plan pt-40">
                <div>
                 <img title="Kotak Life Insurance - E-term insurance plan [Icon]" alt="Kotak Life Insurance - E-term insurance plan [Icon]" src="<?php echo base_url()?>assets/images/Kotak-Preferred-e-term.png" class="img-fluid">
                </div>
                <p class="kotak-e">Kotak E-Invest Plan</p>
                <p class="plan-pure" Kotak e-Invest plan is a complete Unit-Linked Insurance Plan that can be customized as per your goals and needs.</p>
                 <div class="d-flex">
                     <div>
                      <a target="_blank" onClick="dataLayer.push({'event':'event side menu buy online', 'category':'<?php echo $gaCat;?>', 'action':'buy online','label':'know more|Kotak e-Invest Plan'});" href=base_url."/online-plans/ulip-plan/kotak-e-invest" class="link">Know more</a>
                     </div>
                     <div>
                      <a target="_blank" onClick="dataLayer.push({'event':'event side menu buy online', 'category':'<?php echo $gaCat;?>', 'action':'buy online','label':'buy online|Kotak e-Invest Plan'});" href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=sticky_buy_online&utm_content=sticky_ulip" rel="follow" target="_blank" class="link onlineBuy buy-hover">Buy Online</a>
                     </div>
                 </div>
           </div>

            </div>
						<!--calculate premium ^-->
						<div class="card border-0">
            <div class="card-header" id="heading13">
              <h2 class="mb-0 position-relative">
              <div class="position-option"><a href="<?php echo base_url()?>insurance-guide">Calculator</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse13" class="collapse " aria-labelledby="heading13" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                   <li><a href="<?php echo base_url() ?>financial-tools-calculators/ulip-calculator/" target="_blank" class=""><span itemprop="name">ULIP Calculator</span></a></li>
							<li><a  href="<?php echo base_url() ?>financial-tools-calculators/income-tax-calculator" target="_blank" class=""><span itemprop="name">Income Tax Calculator</span></a></li>
							<li><a  href="<?php echo base_url() ?>financial-tools-calculators/compound-interest-calculator" target="_blank" class=""><span itemprop="name">Compound Interest Calculator</span></a></li>
							<li><a  href="<?php echo base_url() ?>financial-tools-calculators/retirement-calculator" target="_blank" class=""><span itemprop="name">Retirement Calculator</span></a></li>

                </ul>
              </div>
            </div>
          </div>
		  
		  
		  
		  <div class="card border-0">
            <div class="card-header" id="heading3">
              <h2 class="mb-0 position-relative">
              <div class="position-option"><a href="<?php echo base_url()?>insurance-guide">Insurance Guide</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                  <li><a href="<?php echo base_url()?>insurance-guide/about-life-insurance" class="">About Life Insurance</a></li>
				  <li><a href="<?php echo base_url()?>insurance-guide/protection" class="">Protection</a></li>
                  <!--<li><a href="<?php echo base_url()?>insurance-guide/family" class="">Family</a></li>-->
                  <li><a href="<?php echo base_url()?>insurance-guide/wealth-creation" class="">Wealth Creation</a></li>
                  <li><a href="<?php echo base_url()?>insurance-guide/retirement" class="">Retirement</a></li>
                  <li><a href="<?php echo base_url()?>insurance-guide/savingstax" class="">Savings &amp; Tax</a></li>
				  <li><a href="<?php echo base_url()?>insurance-guide/government-schemes" class="">Government Schemes</a></li>
                  <li><a href="<?php echo base_url()?>insurance-guide/health-insurance" class="">Health Insurance</a></li>
                  <li><a href="<?php echo base_url()?>insurance-guide/policy-faqs" class="">Policy FAQs</a></li>
                  <li><a href="<?php echo base_url()?>insurance-guide/glossary" class="">Glossary</a></li>
				   <!--<li><a href="<?php echo base_url()?>insurance-guide/knowledgevault" class="">Knowledge vault</a></li>-->

                </ul>
              </div>
            </div>
          </div>
          <div class="card border-0">
            <div class="card-header" id="heading5">
              <h2 class="mb-0 position-relative">
              	<div class="position-option"><a href="<?php echo base_url()?>insurance-plans">Insurance Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                  	<a href="<?php echo base_url()?>insurance-plans/protection-plans" class="li-head">Protection Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a href="<?php echo base_url()?>insurance-plans/protection-plans/kotak-e-term-plan" class="arrow">Kotak e-Term Plan</a> <a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
							<li><a href="<?php echo base_url()?>insurance-plans/protection-plans/kotak-term-plan" class="arrow">Kotak Term Plan</a></li>
								<li><a href="<?php echo base_url()?>insurance-plans/protection-plans/kotak-saral-jeevan-bima" class="arrow">Kotak Saral Jeevan Bima</a></li>
                  	</ul>
                  	<a href="<?php echo base_url()?>insurance-plans/protection-plans" class="pl-3 all_plans">View all protection plans</a>
                  </li>
                  <li>
                  	<a href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans" class="li-head">Savings and Investment Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
					<li><a href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings plan</a><a href=" https://www.kotaklife.com/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a> </li>
					<li><a href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-guaranteed-savings-plan" class="arrow">Kotak Guaranteed Savings Plan</a><a href=base_url."/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
					<li><a href="<?php echo base_url()?>/online-plans/ulip-plan/kotak-e-invest" class="arrow">Kotak E-Invest Plan</a> <a href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
					
                  		<li><a href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-premier-life-plan" class="arrow">Kotak Premier Life Plan</a></li>
                  		<li><a href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-single-invest-plus" class="arrow">Kotak Single Invest Plus</a></li>
                  	</ul>
                  	<a href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans" class="pl-3 all_plans">View all saving and investment plans</a>
                  </li>
                  <li>
                  	<a href="<?php echo base_url()?>insurance-plans/retirement-plans" class="li-head">Retirement Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-saral-pension" class="arrow">Kotak Saral Pension</a></li>
                  		<li><a href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-assured-pension" class="arrow">Kotak Assured Pension</a></li>
						<li><a href="<?php echo base_url()?>insurance-plans/retirement-plans/kotak-lifetime-income-plan" class="arrow">Kotak Lifetime Income Plan</a></li>
                  	</ul>
                  	<a href="<?php echo base_url()?>insurance-plans/retirement-plans" class="pl-3 all_plans">View all retirement plans</a>
                  </li>
                 <li>
                  	<a href="<?php echo base_url()?>insurance-plans/health-plans" class="li-head">Health Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a href="<?php echo base_url()?>insurance-plans/health-plans/kotak-health-shield" class="arrow">Kotak Health Shield</a><!--<a href=base_url."/buy-health-insurance-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online</a>--></li>
                  	</ul>
                  </li>
                  <li><a href="<?php echo base_url()?>insurance-plans/insurance-plan-riders" class="li-head pb-0">Our Rider Solutions</a></li>
                  <li><a href="<?php echo base_url()?>kotakWebBI/" class="li-head pb-0">Tools & Calculators</a>
				  <ul class="pl-0 sub-collapse-option">
				 
				 </ul>
				 </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="card border-0">
            <div class="card-header" id="heading6">
              <h2 class="mb-0 position-relative">
              	<div class="position-option"><a href="<?php echo base_url()?>group-plans">Group Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse6" class="collapse " aria-labelledby="heading6" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                  	<a href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment" class="li-head">Group Gratuity/Leave Encashment</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment/kotak-gratuity-group-plan" class="arrow">Kotak Gratuity Group Plan</a></li>
                  		<li><a href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan" class="arrow">Kotak Leave Encashment Group Plan</a></li>
                  	</ul>
                  	<a href="<?php echo base_url()?>group-plans/group-gratuity-leave-encashment" class="pl-3 all_plans">View all Group Gratuity/Leave Encashment plans</a>
                  </li>
                  <li>
                  	<a href="<?php echo base_url()?>group-plans/group-superannuation" class="li-head">Group Superannuation</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a href="<?php echo base_url()?>group-plans/group-superannuation/kotak-secure-return-superannuation-plan" class="arrow">Kotak Secure Return Superannuation Plan</a></li>
                  		<li><a href="<?php echo base_url()?>group-plans/group-superannuation/kotak-superannuation-group-plan-ii" class="arrow">Kotak Superannuation Group Plan - II</a></li>
                  	</ul>
                  	<a href="<?php echo base_url()?>group-plans/group-superannuation" class="pl-3 all_plans">View all Group Superannuation plans</a>
                  </li>
                  <li>
                  	<a href="<?php echo base_url()?>group-plans/group-term" class="li-head">Group Term</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a href="<?php echo base_url()?>group-plans/group-term/kotak-term-group-plan" class="arrow">Kotak Term Group Plan</a></li>
                  	</ul>
                  	<a href="<?php echo base_url()?>group-plans/group-term" class="pl-3 all_plans">View all Group Term plans</a>
                  </li>
                  <li>
                  	<a href="<?php echo base_url()?>group-plans/group-credit" class="li-head">Group Credit</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a href="<?php echo base_url()?>group-plans/group-credit/kotak-complete-cover-group-plan" class="arrow">Kotak Complete Cover Group Plan</a></li>
                  		<li><a href="<?php echo base_url()?>group-plans/group-credit/kotak-group-assure" class="arrow">Kotak Group Assure</a></li>
                  	</ul>
                  	<a href="<?php echo base_url()?>group-plans/group-credit" class="pl-3 all_plans">View all Group Credit plans</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

		  <div class="card border-0">
            <div class="card-header" id="heading7">
              <h2 class="mb-0 position-relative">
              	<div class="position-option"><a data-customer-type="new_customer" class="customer-type" href="<?php echo base_url()?>how-do-i">
				How Do I
				</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li><a href="<?php echo base_url()?>how-do-i/pay-my-premium"  data-customer-type="new_customer" class="customer-type">Pay My Premium</a></li>
                  <li><a href="https://customer.kotaklifeinsurance.com/ocm" data-customer-type="new_customer" class="customer-type">File a Claim</a></li>
                  <li><a href="<?php echo base_url()?>how-do-i/manage-my-policy" data-customer-type="new_customer" class="customer-type">Manage My Policy</a></li>
                  <li><a href="<?php echo base_url()?>how-do-i/download-application-form" data-customer-type="new_customer" class="customer-type">Download Application Forms</a></li>
                  <li><a href="<?php echo base_url()?>how-do-i/get-policy-brochure" data-customer-type="new_customer" class="customer-type">Get Policy Brochure</a></li>
                  <li><a href="<?php echo base_url()?>how-do-i/check-policy-document-specimen" data-customer-type="new_customer" class="customer-type">Check Policy Document Specimen</a></li>
                  <li><a href="<?php echo base_url()?>how-do-i/fund-update" data-customer-type="new_customer" class="customer-type">Browse Fund Updates</a></li>
                  <li><a href="<?php echo base_url()?>how-do-i/	understand-stages-of-application" data-customer-type="new_customer" class="customer-type">Understand the Stages of My Application</a></li>
                  <li><a href="<?php echo base_url()?>how-do-i/apply-for-life-insurance-plan" data-customer-type="new_customer" class="customer-type">Apply for a Life Insurance Plan</a></li>
                  <li><a href="<?php echo base_url()?>how-do-i/locate-kotak-branches" data-customer-type="new_customer" class="customer-type">Locate a Kotak Life branch</a></li>
                  <li><a href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" data-customer-type="new_customer" class="customer-type">Download Statements</a></li>
                  <li><a href="<?php echo base_url()?>how-do-i/verify-life-advisor" data-customer-type="new_customer" class="customer-type">Verify My Life Advisor</a></li>
                  <li><a href="<?php echo base_url()?>how-do-i/registerfor-ecs" data-customer-type="new_customer" class="customer-type">Register For ECS</a></li>

                </ul>
              </div>
            </div>
          </div>

        </div>
		<!--NEW CUSTOMER END---->


		<!--EXISTING CUSTOMER START---->
		<?php } else if($customerType=='existing_customer'){?>
		 <!--<a href="<?php //echo base_url() ?>" class="btn btn-link btn-block text-left collapsed only-option">Home</a>-->
		 <div class="accordion mobile_options mt-5 pt-3" id="accordionExample">

		 <div class="card border-0">

            <div class="card-header" id="heading70">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a href="<?php echo base_url() ?>how-do-i" data-customer-type="existing_customer" class="customer-type">How Do I?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse70" aria-expanded="false" aria-controls="collapse70">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse70" class="collapse " aria-labelledby="heading70" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li><a href="<?php echo base_url() ?>how-do-i/pay-my-premium" data-customer-type="existing_customer" class="customer-type">Pay My Premium</a></li>
                  <li><a href="https://customer.kotaklifeinsurance.com/ocm" data-customer-type="existing_customer" class="customer-type">File a Claim</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/manage-my-policy" data-customer-type="existing_customer" class="customer-type">Manage My Policy</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/download-application-form" data-customer-type="existing_customer" class="customer-type">Download Application Forms</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/get-policy-brochure" data-customer-type="existing_customer" class="customer-type">Get Policy Brochure</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/check-policy-document-specimen" data-customer-type="existing_customer" class="customer-type">Check Policy Document Specimen</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/fund-update" data-customer-type="existing_customer" class="customer-type">Browse Fund Updates</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/understand-stages-of-application" data-customer-type="existing_customer" class="customer-type">Understand the Stages of My Application</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/apply-for-life-insurance-plan" data-customer-type="existing_customer" class="customer-type">Apply for a Life Insurance Plan</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/locate-kotak-branches" data-customer-type="existing_customer" class="customer-type">Locate a Kotak Life branch</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/verify-life-advisor" data-customer-type="existing_customer" class="customer-type">Verify My Life Advisor</a></li>
                <li><a href="https://customer.kotaklifeinsurance.com/cp/downloadfinancialstatements.aspx" data-customer-type="existing_customer" class="customer-type">Download Statements</a></li>

                </ul>
              </div>

            </div>

          </div>

		            <!--fund performance v-->

<div class="card border-0">
            <div class="card-header" id="heading7">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a data-customer-type="existing_customer" class="customer-type" href=base_url."/fund-performance">Fund Performance</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
				<li><a href=base_url."/fund-performance/nav-performance" data-customer-type="existing_customer" class="customer-type">Nav Performance</a></li>
                   <li><a href="<?php echo base_url() ?>how-do-i/check-policy-document-specimen" data-customer-type="existing_customer" class="customer-type">Fund Update</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/fund-update" data-customer-type="existing_customer" class="customer-type">Investment Philosophy</a></li>
                  <li><a href="<?php echo base_url() ?>how-do-i/understand-stages-of-application" data-customer-type="existing_customer" class="customer-type">Investment Fund FAQs</a></li>

                </ul>
              </div>

            </div>

          </div>

          <!--fund performance ^-->

		  <!--insurance guide v-->
		   <div class="card border-0">
            <div class="card-header" id="heading3">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>insurance-guide">Insurance Guide</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                  <li><a href="<?php echo base_url() ?>insurance-guide/about-life-insurance" data-customer-type="existing_customer" class="customer-type">About Life Insurance</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/protection" data-customer-type="existing_customer" class="customer-type">Protection</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/wealth-creation" data-customer-type="existing_customer" class="customer-type">Wealth Creation</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/retirement" data-customer-type="existing_customer" class="customer-type">Retirement</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/savingstax" data-customer-type="existing_customer" class="customer-type">Savings &amp; Tax</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/policy-faqs" data-customer-type="existing_customer" class="customer-type">Policy FAQs</a></li>
                  <li><a href="<?php echo base_url() ?>insurance-guide/glossary" data-customer-type="existing_customer" class="customer-type">Glossary</a></li>
                </ul>
              </div>
            </div>
          </div>

		  <!--online-plans new v-->
		  	   <div class="card border-0">
            <div class="card-header" id="heading4">
              <h2 class="mb-0 position-relative">
              	<div class="position-option"><a href="<?php echo base_url()?>online-plans">Online Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse4" class="collapse " aria-labelledby="heading4" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                 <li>
                  	<a data-customer-type="existing_customer" href="<?php echo base_url()?>online-plans/online-term-insurance-plans" class="customer-type li-head ">Term Insurance Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a data-customer-type="existing_customer" href="<?php echo base_url()?>online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance/kotak-e-term-plan-insurance" class="customer-type arrow">Kotak e-Term Plan</a>
						<a href=base_url."/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  	</ul>

                  </li>
				   <li>
                  	<a  data-customer-type="existing_customer" class="customer-type li-head"  itemprop="url"  href="javascript:viod(0)"  class="<?php check_menu_active(2, 'ulip-plan')?> li-head">ULIP Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a data-customer-type="existing_customer" class="customer-type" href="<?=base_url()?>insurance-plans/savings-and-investments-plans/kotak-e-invest" class="arrow">Kotak e-Invest Plan</a>
						<a href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  	</ul>

                  </li>

				  <li>
                  	<a data-customer-type="existing_customer" class="customer-type li-head" itemprop="url"  href="javascript:viod(0)"  class="<?php check_menu_active(2, 'savings-plan')?> li-head">Savings Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
				<li><a data-customer-type="existing_customer" class="customer-type" href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings Plan</a>
						<a href=base_url."/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy online-dnone">Buy Online</a>
						</li>
						
                  		<li><a data-customer-type="existing_customer" class="customer-type" href="<?=base_url()?>online-plans/savings-plan/kotak-guaranteed-savings-plan-online" class="arrow">Kotak Guaranteed Savings Plan</a>
						<a href=base_url."/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu" class="menu-buy">Buy Online</a>
						</li>
                  	</ul>

                  </li>

                  <li>
                  	<a data-customer-type="existing_customer" class="customer-type li-head" href="<?php echo base_url()?>insurance-plans/retirement-plans" class="li-head">Retirement Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  	
                  	</ul>

                  </li>

				  <li>
                  	<a data-customer-type="existing_customer" class="customer-type li-head" href="<?php echo base_url()?>kotakWebBI/" class="li-head">Tools & Calculators </a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a rel="follow" data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url()?>buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=navigation_link&utm_content=term_insurance%20_calculator&lead_group=kotak_organic" class="arrow">Term Insurance Calculator</a></li>
                  		
                  	</ul>

                  </li>

                </ul>
              </div>
            </div>
          </div>
		  <!--online plans new ^-->
<!--calculate premium ^-->
						<div class="card border-0">
            <div class="card-header" id="heading14">
              <h2 class="mb-0 position-relative">
              <div class="position-option"><a href="<?php echo base_url()?>insurance-guide">Calculator</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url()?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse14" class="collapse " aria-labelledby="heading14" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">

                   <li><a href="<?php echo base_url() ?>financial-tools-calculators/ulip-calculator/" target="_blank" class=""><span itemprop="name">ULIP Calculator</span></a></li>
							<li><a  href="<?php echo base_url() ?>financial-tools-calculators/income-tax-calculator" target="_blank" class=""><span itemprop="name">Income Tax Calculator</span></a></li>
							<li><a  href="<?php echo base_url() ?>financial-tools-calculators/compound-interest-calculator" target="_blank" class=""><span itemprop="name">Compound Interest Calculator</span></a></li>
							<li><a  href="<?php echo base_url() ?>financial-tools-calculators/retirement-calculator" target="_blank" class=""><span itemprop="name">Retirement Calculator</span></a></li>

                </ul>
              </div>
            </div>
          </div>
		  <!--insurance plans v-->
		  <div class="card border-0">
            <div class="card-header" id="heading5">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>insurance-plans">Insurance Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                    <a href="<?php echo base_url() ?>insurance-plans/protection-plans" data-customer-type="existing_customer" class="customer-type li-head">Protection Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>insurance-plans/protection-plans/kotak-e-term-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak e-Term Plan</a><a class="menu-buy" href=base_url."/buy-online-term-insurance/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans">Buy Online</a></li>
					    <li><a href="<?php echo base_url() ?>insurance-plans/protection-plans/kotak-term-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Term Plan</a></li>
					    <li><a href="<?php echo base_url() ?>insurance-plans/protection-plans/kotak-saral-jeevan-bima" data-customer-type="existing_customer" class="customer-type arrow">Kotak Saral Jeevan Bima</a></li>
					   
                    </ul>
                    <a href="<?php echo base_url() ?>insurance-plans/protection-plans" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all protection plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>insurance-plans/savings-and-investments-plans" data-customer-type="existing_customer" class="customer-type li-head">Savings and Investment Plans</a>
                    <ul class="pl-0 sub-collapse-option">
					<li><a href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="arrow">Kotak Assured Savings plan</a><a href=" https://www.kotaklife.com/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a> </li>
					<li><a href="<?php echo base_url()?>insurance-plans/savings-and-investments-plans/kotak-guaranteed-savings-plan" class="arrow">Kotak Guaranteed Savings Plan</a><a href=base_url."/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
					<li><a href="<?php echo base_url()?>/online-plans/ulip-plan/kotak-e-invest" class="arrow">Kotak E-Invest Plan</a> <a href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online </a></li>
					
                      <li><a href="<?php echo base_url() ?>insurance-plans/savings-and-investments-plans/kotak-premier-life-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Premier Life Plan</a></li>
                      <li><a href="<?php echo base_url() ?>insurance-plans/savings-and-investments-plans/kotak-single-invest-plus" data-customer-type="existing_customer" class="customer-type arrow">Kotak Single Invest Plus</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>insurance-plans/savings-and-investments-plans" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all saving and investment plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>insurance-plans/retirement-plans" data-customer-type="existing_customer" class="customer-type li-head">Retirement Plans</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>insurance-plans/retirement-plans/kotak-saral-pension" data-customer-type="existing_customer" class="customer-type arrow">Kotak Saral Pension</a></li>
                      <li><a href="<?php echo base_url() ?>insurance-plans/retirement-plans/kotak-assured-pension" data-customer-type="existing_customer" class="customer-type arrow">Kotak Assured Pension</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>insurance-plans/retirement-plans" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all retirement plans</a>
                  </li>
                  
				 <li>
                  	<a href="<?php echo base_url()?>insurance-plans/health-plans" class="li-head">Health Plans</a>
                  	<ul class="pl-0 sub-collapse-option">
                  		<li><a href="<?php echo base_url()?>insurance-plans/health-plans/kotak-health-shield" class="arrow">Kotak Health Shield</a><!--<a href=base_url."/buy-health-insurance-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=top_menu&utm_content=insurance_plans" class="menu-buy">Buy Online</a>--></li>
                  	</ul>
                  </li>
                  <li><a href="<?php echo base_url() ?>insurance-plans/insurance-plan-riders" data-customer-type="existing_customer" class="customer-type li-head pb-0">Our Rider Solutions</a></li>
                  <li><a href="<?php echo base_url() ?>kotakWebBI/" data-customer-type="existing_customer" class="customer-type li-head pb-0">Tools & Calculators</a>
				   <ul class="pl-0 sub-collapse-option">
				 
				 </ul>
				  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--insurance plans^-->

           <!--group plans v-->
          <div class="card border-0">
            <div class="card-header" id="heading6">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a data-customer-type="existing_customer" class="customer-type" href="<?php echo base_url() ?>group-plans">Group Plans</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
                </button>
              </h2>
            </div>
            <div id="collapse6" class="collapse " aria-labelledby="heading6" data-parent="#accordionExample">
              <div class="card-body p-0">
                <ul class="pl-0">
                  <li>
                    <a href="<?php echo base_url() ?>group-plans/group-gratuity-leave-encashment" data-customer-type="existing_customer" class="customer-type li-head">Group Gratuity/Leave Encashment</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>group-plans/group-gratuity-leave-encashment/kotak-gratuity-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Gratuity Group Plan</a></li>
                      <li><a href="<?php echo base_url() ?>group-plans/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Leave Encashment Group Plan</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>group-plans/group-gratuity-leave-encashment" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Gratuity/Leave Encashment plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>group-plans/group-superannuation" data-customer-type="existing_customer" class="customer-type li-head">Group Superannuation</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>group-plans/group-superannuation/kotak-secure-return-superannuation-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Secure Return Superannuation Plan</a></li>
                      <li><a href="<?php echo base_url() ?>group-plans/group-superannuation/kotak-superannuation-group-plan-ii" data-customer-type="existing_customer" class="customer-type arrow">Kotak Superannuation Group Plan - II</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>group-plans/group-superannuation" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Superannuation plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>group-plans/group-term" data-customer-type="existing_customer" class="customer-type li-head">Group Term</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>group-plans/group-term/kotak-term-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Term Group Plan</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>group-plans/group-term" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Term plans</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url() ?>group-plans/group-credit" data-customer-type="existing_customer" class="customer-type li-head">Group Credit</a>
                    <ul class="pl-0 sub-collapse-option">
                      <li><a href="<?php echo base_url() ?>group-plans/group-credit/kotak-complete-cover-group-plan" data-customer-type="existing_customer" class="customer-type arrow">Kotak Complete Cover Group Plan</a></li>
                      <li><a href="<?php echo base_url() ?>group-plans/group-credit/kotak-group-assure" data-customer-type="existing_customer" class="customer-type arrow">Kotak Group Assure</a></li>
                    </ul>
                    <a href="<?php echo base_url() ?>group-plans/group-credit" data-customer-type="existing_customer" class="customer-type pl-3 all_plans">View all Group Credit plans</a>
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

                  <div class="ml-auto"><img height="16" src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
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


		<?php } else if($customerType=='life_advisor'){?>
		<div class="accordion mobile_options mt-5 pt-3" id="accordionExample">

        <!--<a href="<?php //echo base_url() ?>" class="btn btn-link btn-block text-left collapsed only-option">Home</a>-->

          <div class="card border-0">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a data-customer-type="life_advisor" class="customer-type" href="<?php echo base_url() ?>why-kotak-life">Why Kotak Life?</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
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
              <a href=base_url."/career-as-life-advisor" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">Career as a Life Advisor</a>
            </div>
          </div>

		   <div class="card border-0">
            <div class="card-header" id="heading4">
              <a href=base_url."/hiring-process" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">Hiring Process</a>
            </div>
          </div>


		   <div class="card border-0">
            <div class="card-header" id="heading4">
              <a href=base_url."/how-do-i/verify-life-advisor" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">Know Our Life Advisors</a>
            </div>
          </div>

		  <div class="card border-0">
            <div class="card-header" id="heading4">
              <a href=base_url."/life-advisor-faqs" data-customer-type="life_advisor" class="customer-type btn btn-link btn-block text-left collapsed only-option">FAQ'S</a>
            </div>
          </div>

  <div class="card border-0">
            <div class="card-header" id="heading7">
              <h2 class="mb-0 position-relative">
                <div class="position-option"><a  href=base_url."/fund-performance">Fund Performance</a></div>
                <button class="btn w-100 btn-link collapsed d-flex" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">

                  <div class="ml-auto"><img height="16" src="<?php echo base_url() ?>assets/mobile/images/down-arrow.png"></div>
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
        <!-- <a href="#" class="tv-pad-mobile hide-desktop"><img src="assets/images/ktk-img.png"></a> -->
      </div>
    </nav>

  </header>



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered search_sec">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body ">
        <div class="searchBox" >
        <input type="text" name="searchTxt" id="searchTxt" placeholder="Search here" class="search_here">
        <a class="search_btn" id="searchResBtn" name="searchResBtn"><img src="<?php echo base_url()?>assets/images/searchIcon.png"></a>
        </div>
      </div>
    </div>
  </div>
</div>

  <!--Akshatha V-->
  <section>
    <div class="online-but d-flex">
	

      <!-- <button type="button" class="buy-online btn-online">Buy online</button>
      <a href=base_url."/why-kotak-life/contact-us#contact-us-main" data="Contact Us" class="contact" onclick="dataLayer.push({'event':'event right side menu', 'category':'New Customer', 'action':'Contact Us','label':'click'});">Contact Us</a>
	  -->
	   <a href=base_url."/how-do-i/pay-my-premium" class="m-premium">Pay Premium</a>
	  <a href=base_url."/why-kotak-life/contact-us#contact-us-main" data="Contact Us" class="contact" onclick="dataLayer.push({'event':'event right side menu', 'category':'New Customer', 'action':'Contact Us','label':'click'});">Contact Us</a>
      <!--a href=base_url."/kotak-tv" data-action="KLI-TV" data-label="KLI-TV" data-category="KLI-TV" data-event="KLI-TV" class="tv-pad-footer hide-desktop"><img src="assets/images/ktk-img.png"></a-->
      <button type="button"  class="buy-online btn-online" onclick="btn_online()">Buy Online</button>
    </div>

    <div class="buy-life dd-none buy-online-new-sec">
              <div class="float-right">
                  <img src="<?php echo base_url()?>assets/mobile/images/cancel.png" class="img-fluid cross-red">
              </div>
            
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
                      
                    </div>
                    <div class="">
                      <p class="p-txt">Kotak e-Term Plan</p>
                      <p>Protect Your family’s financial future with Kotak e-Term Plan.
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
                      <p>A plan that offer guaranteed returns and financial protection for your family.
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
                      <p>A plan that offers long term savings and insurance in one premium.
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
                      <p>Insurance and investment in one plan with Kotak e-Invest.
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

            </div>
          </div>
          <!--new buy online code ^-->

            </div>


  </section>
  <section class="kotak-life">
    <div class="slider">

	<div class="home-header">
	 <div id="bp_6238_DmpSlotId164"></div>       
	 </div>
	 	
	<div class="home-header">
        <div><img data-src="<?php echo base_url()?>assets/images/banner/MobileBanners/KFM-BFM_Mobile-Banner-webp-640x420.webp" class="img-fluid lazy"></div>
        <div class="home-content">

          <a data-action="Kotak Fortune Maximiser" data-label="know more" data-category="banner|new customers" data-event="event banner" target="_blank" href=base_url."/insurance-plans/savings-and-investments-plans/kotak-fortune-maximiser" class="know-more mt-3 pt-1">Know More</a>
        </div>
      </div>

<div class="home-header">
        <div><img data-src="<?php echo base_url()?>assets/images/banner/MobileBanners/term_mobile-webp.webp" class="img-fluid img-width lazy"></div>
        <div class="home-content">
          <p class="cont2">One time payment =  
          <div><span class="cont2-1">53%* Savings. With single premium payment option of Kotak e-Term plan,</span></div>
		  <p class="cont2"><span style="color:#da251c;">pay once and save upto 53% on your premium amount. </span> </p>
		 
          </p>
          <a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" target="_blank" href=base_url."/buy-online-term-insurance/#/landing?utm_source=organic_term&utm_medium=website&utm_campaign=homepagebanner" class="know-more mt-3 pt-1">Buy Now</a>

        </div>
      </div>

<div class="home-header">
        <div><img data-src="<?php echo base_url()?>assets/images/banner/MobileBanners/ULIP_mobile-webp.webp" class="img-fluid img-width lazy"></div>
        <div class="home-content">
          <p class="cont2">Meet your goal at every stage of life. 
          <div><span class="cont2-1">Choose from available plan options - Maximiser,</span></div>
		  <p class="cont2"><span style="color:#da251c;">Retire rich or Rising star with Kotak e-Invest. </span> </p>
		 
          </p>
          <a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" target="_blank" href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=homepagebanner" class="know-more mt-3 pt-1">Buy Now</a>

        </div>
      </div>
 <div class="home-header">
        <div><img data-src="<?php echo base_url()?>assets/images/banner/MobileBanners/KASP_mobile-webp.webp" class="img-fluid img-width lazy"></div>
        <div class="home-content">
          <p class="cont2">Guaranteed@ Returns<br> +<br> LIFE Cover 
          <div><span class="cont2-1">Get Kotak Assured Savings Plan</span></div>
		  <p class="cont2"><span style="color:#da251c;">No more delay, Guru. </span> </p>
		 
          </p>
          <a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" target="_blank" href=base_url."/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=homepagebanner" class="know-more mt-3 pt-1">Buy Now</a>

        </div>
      </div>

	   <div class="home-header">
        <!--<div><img src="<?php echo base_url()?>assets/mobile/images/slick5.png" class="img-fluid"></div>-->
        <div class="home-content">
          <h2 class="vaccinated  mb-2" style="color:#5e6061;font-size:22px;">Wear a mask and get vaccinated against COVID-19 today.</h2>
          <p class="vaccine" style="color:#5e6061;font-size:16px;"> If you are 18+ years, register today to get vaccinated at your
            nearest center.</p>
          <p class="vaccine-header" style="color:#5e6061;font-size:20px;">Follow these 4 simple steps to register:</p>
          <ul class="visit-links" style="list-style-type:disc;">
            <li class="visit-link">Visit www.cowin.gov.in to book your appointment</li>
            <li class="visit-link">Register using your Mobile No. or Aadhar No. or any other identity documents.</li>
            <li class="visit-link">Select your nearby Vaccine Center for vaccination </li>
            <li class="visit-link" > Book your slot to get a Vaccine.</li>
          </ul>
          <div class="d-flex">
           <a data-action="insurance plan riders" data-label="know more" data-category="banner|new customers" data-event="event banner" target="_blank" href="https://www.cowin.gov.in/" class="know-more mt-3 pt-1">Register Now</a>
            <h2 class="book-button" style="color:#5e6061;font-size:16px;">or book your appointment on Arogya Setu App.</h2>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="life-need1 position-relative">
    <form class="form-horizontal" action="" method="POST" id="myform">
      <fieldset id="account_information" class="">
        
        <section class="life-need">
          <div class="container">
            <h2 class="life-header text-center mb-3 pb-1">Know Your Life's Need</h2>
            <p class="life-cont mb-5">Everything you buy today is tailor-made to your needs. Why should your insurance
              policies
              be
              any different?</p>
            <div class="life-box">
              <h3 class="lifetext ">I AM LOOKING</h3>

              <div class="form-group need_group steps">

                <select class="selectpicker" id="needSegment1" title="Choose your need here" required name="needSegment" onchange="getSegment()">
                  <option>Choose your need here</option>
				   <optgroup label="To Buy">
                     <option value="Term Insurance Plan">Term Insurance Plan</option>
                      <option value="ULIP Plan">ULIP Plan</option>
                      <option value="Assured Savings Plan">Assured Savings Plan</option>
                      <option value="Guranteed Savings Plan">Guranteed Savings Plan</option>
                      <!--<option value="Health Insurance Plan">Health Insurance Plan</option> -->
					  
                    </optgroup>

                    <optgroup label="For Information">
                      <option value="About Term Insurance">About Term Insurance</option>
                      <option value="About ULIP Plans">About ULIP Plans</option>
                      <option value="About Savings Plans">About Savings Plans</option>
                      <option value="About Health Insurance">About Health Insurance</option>
                      <option selected value="About Retirement Plans">About Retirement Plans</option>

                    </optgroup>
                </select>
              </div>
             <!-- <a type="submit" class="btn next">NEXT</a>-->
            </div>
          </div>
        </section>
      </fieldset>
      <fieldset id="company_information" class="">
        <div class="number d-flex">
        <li class="number_li" >1</li>
        <li class="number_li" style="color:#5e6061">2</li>
        <li class="number_li">3</li>
        </div>
        <div class="container  mt-5">
          <div class="kotak-click2">
            <div class="prev-step ">
              <a href="javascript:void(0)" class=" prev">Back</a>
            </div>
            <p class="click2-content mb-4">Tell us something about you to suggest proper plan for you.</p>
            <p class="click2-content mb-4">*All fields Mandatory</p>
<form>
            <div class="form-group mb-3  ">
              <input type="text" required class="form-control" title="Name required." id="custName" placeholder="Your Name " name="custName">
            </div>
            <div class="form-group mb-3 age_group">

              <!---- <input type="text" class="form-control input-text " placeholder="Select country " name="name" data-bv-notempty-message="Please enter country" required>
              <label for="exampleFormControlSelect1">Select country</label>-->
              <select required class="selectpicker" id="ageGroup" title="Choose your age group" name="ageGroup">
                <option>Choose your age group</option>
                <?php
							$years = $bind_ageGroupDDMobile->field_list_items;
							$pieces = preg_split('/[\n]+/', $years);
							foreach($pieces as $date){
								if (strpos($date, '-') !== false) {
									$dateV = str_replace('-', 'to', $date);
								}
								if (strpos($date, '&') !== false) {
									$dateV = str_replace('&', 'and', $date);
								}

								echo "<option value='{$dateV}'>$date</option>";
							}
							?>
              </select>
            </div>
            <div class="form-group mb-3">
              <input type="number" required class="form-control" title="Number required." id="custNumber" name="custNumber" placeholder="Mobile Number ">
            </div>
			 <div class="form-group mb-3">
              <input type="text" required class="form-control" title="City required." id="custCity" name="custCity" placeholder="Your City ">
            </div>
			 <div class="form-group mb-3">
              <input type="text" required class="form-control" title="Pincode required." id="pincode" name="pincode" placeholder="Pincode ">
            </div>

            <!--<a type="submit" id="nextResBtn" data-label="next click" data-action="form 1b"  data-event="event I am looking for" class="btn next link">NEXT</a>-->
			<a href="javascript:;" id="nextResBtn" data-label="next click" data-action="form 1b"  data-event="event I am looking for" class="btn next link">Next</a>
            <!-- <a class="btn btn-primary prev">Previous</a>-->
			</form>
			</div>
          </div>
        </div>
      </fieldset>
      <fieldset id="personal_information" class="">
        <div class="number d-flex">
        <li class="number_li" >1</li>
        <li class="number_li" >2</li>
        <li class="number_li" style="color:#5e6061">3</li>
        </div>
        <div class="container  mt-5">
          <div class="kotak-click2">
            <div class="prev-step ">
              <a href="javascript:void(0)" class=" prev">Back</a>
            </div>

                <div class="save-chat" id="success_data">

                      </div>


          </div>
      </fieldset>
    </form>
  </section>
  <section class="kotak-insurance">
    <div class="container">
      <h2 class="insurance-header text-center">Why Kotak Life Insurance?</h2>
      <p class="insurance-content">Kotak Mahindra Life Insurance Company Ltd. is one of the fastest growing insurance companies in India, covering over 34.8 million lives nationwide. It delivers outstanding value to its customers through high customer
        empathy and understanding, lifetime of exceptional service and a suite of insurance products.</p>
      <a href="<?php echo base_url()?>why-kotak-life" class="view-more">View More</a>
      <div class="text-center"><img data-src="<?php echo base_url()?>assets/mobile/images/insurance.png" class="img-fluid insurance-img lazy"></div>
    </div>
  </section>
  <!--Akshatha ^-->

  <!--suma html v-->
    <!--insurance guide v-->
  <section class="insurance">
    <div class="pad-ins">
      <div class="text-center">
        <h2 class="insurance-text">Insurance Guide</h2>
      </div>
      <p class="kotak-ins">Kotak Life Insurance helps you understand the various benefits of life insurance for you,<!-- your family,--> wealth creation, protection, retirement and savings. Find out how you can make the most of every plan.</p>
    </div>

    <div class="slick-num position-relative">
         <!--slick v-->
         <div class="family-slick  bx-sd">
           
		<div>
              <div class="card">
                  <div class="">
                    <div class="text-center mb-15">
                          <img data-src="<?php echo base_url()?>assets/mobile/images/sl-img3.png" class="family-img lazy">
                    </div>
                    <h2 class="family-text">Protection</h2>
                    <p class="kotak-ins">A secure future for your family is of utmost importance to you. That’s why Kotak Life Insurance offers you a choice of plans for your unique needs.</p>
                    <a href="<?php echo base_url()?>insurance-guide/protection" class="links-read">Read more</a>
                  </div>
              </div>
            </div>

            <div>
              <div class="card">
                <div class="">
                    <div class="text-center mb-15">
                          <img data-src="<?php echo base_url()?>assets/mobile/images/sl-img2.png" class="family-img lazy">
                    </div>
                    <h2 class="family-text">Wealth Creation</h2>
                    <p class="kotak-ins">You work hard with commitment to ensure that you and your loved ones achieve your dreams of living in abundance. Here’s how life insurance can help.</p>
                    <a href="<?php echo base_url()?>insurance-guide/wealth-creation" class="links-read">Read more</a>
                </div>
              </div>
            </div>

            <div>
              <div class="card">
                <div class="">
                    <div class="text-center mb-15">
                          <img data-src="<?php echo base_url()?>assets/mobile/images/sl-img4.png" class="family-img lazy">
                    </div>
                    <h2 class="family-text">Retirement</h2>
                    <p class="kotak-ins">After a fulfilling life of working hard, all you look forward to is a comfortable retired life. And Kotak Life Insurance is every ready to help you.</p>
                    <a href="<?php echo base_url()?>insurance-guide/retirement" class="links-read">Read more</a>
                  </div>
              </div>
            </div>
            <div>
                <div class="card">
                  <div class="">
                    <div class="text-center mb-15">
                          <img data-src="<?php echo base_url()?>assets/mobile/images/sl-img5.png" class="family-img lazy">
                    </div>
                    <h2 class="family-text">About Life Insurance</h2>
                    <p class="kotak-ins">Life insurance has multiple benefits for you, your loved ones and your dreams for future. Choose the plans that complement your needs and for a happy life.</p>
                    <a href="<?php echo base_url()?>insurance-guide/about-life-insurance" class="links-read">Read more</a>
                  </div>
                </div>
            </div>
            <div>
              <div class="card">
                <div class="">
                    <div class="text-center mb-15">
                          <img data-src="<?php echo base_url()?>assets/mobile/images/sl-img6.png" class="family-img lazy">
                    </div>
                    <h2 class="family-text">Savings & Tax</h2>
                    <p class="kotak-ins">Payments towards life insurance are eligible for tax redemption. Ensure that you take the right steps to save up on taxes.</p>
                    <a href="<?php echo base_url()?>insurance-guide/savingstax" class="links-read">Read more</a>
                </div>
              </div>
            </div>
         </div>
         <input type="text" class="slick-input" id="txtAcrescimo" />
         <p class="slick-input-six">/6</p>
    </div>
  </section>
   <!--how do i section v-->
    <section class="how">
      <div class="text-center">
                <div>
                       <img data-src="<?php echo base_url()?>assets/mobile/images/how-img.png" class="img-fluid lazy">
                </div>
                <h5 class="how-text">How do I</h5>
                <p class="kotak-life">Kotak Life Insurance has simplified the way you choose a policy, apply for a claim and more. Browse through the links below to know more about each.</p>
                <div class="pay">
                        <div class="row no-gutters mx-250">
                              <div class="col-md-6 col">
                                       <a href="<?php echo base_url()?>how-do-i/pay-my-premium">
                                                 <div class="how-circle">
                                                        <img data-src="<?php echo base_url()?>assets/mobile/images/how-img1.png" class="how-img1 lazy">
                                                        <h6 class="pay-text">Pay <br> My Premium</h6>

                                                 </div>
                                       </a>
                              </div>
                              <div class="col-md-6 col">
                                      <a href="https://customer.kotaklifeinsurance.com/ocm">
                                        <div class="how-circle">
                                              <img data-src="<?php echo base_url()?>assets/mobile/images/how-img2.png" class="how-img1 lazy">
                                              <h6 class="pay-text">File a Claim</h6>

                                        </div>
                                    </a>
                              </div>
                        </div>

                        <div class="row no-gutters mx-250 mb-25">
                          <div class="col-md-6 col">
                                   <a href="<?php echo base_url()?>how-do-i/manage-my-policy">
                                             <div class="how-circle">
                                                    <img data-src="<?php echo base_url()?>assets/mobile/images/how-img3.png" class="how-img1 lazy">
                                                    <h6 class="pay-text">Manage <br> My Policy</h6>

                                             </div>
                                   </a>
                          </div>
                          <div class="col-md-6 col">
                                  <a href="<?php echo base_url()?>how-do-i/locate-kotak-branches">
                                    <div class="how-circle">
                                          <img data-src="<?php echo base_url()?>assets/mobile/images/how-img4.png" class="how-img1 lazy">
                                          <h6 class="pay-text">Locate a Kotak Life Branch</h6>

                                    </div>
                                </a>
                          </div>
                    </div>

                    <a href="<?php echo base_url()?>how-do-i" class="view">View All</a>
                </div>
      </div>
    </section>
<footer>
         <div class="footer-pading">
                 <!--new footer v-->
				  <div class="midWrapper">
      <div class="plans roww">


        <div class="incurance w-footer-20">
        <ul class="plan-list">
            <h6>Quick Buy Links </h6>


			<li> <a rel="follow" href=base_url."/buy-online-term-insurance">Term Insurance Quote </a></li>

          <li> <a href=" https://www.kotaklife.com/buy-e-invest-ulip-plan-online">ULIP Calculator </a></li>

          <!--<li> <a href=base_url."/buy-health-insurance-online">Health Insurance Quote </a></li>-->

          <li> <a href=" https://www.kotaklife.com/buy-annuity-plan">Pension Planner </a></li>
		  <li> <a href=" https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/" rel="follow" >Invest in Guaranteed Savings Plan</a></li>
		    <li> <a rel="follow" href=base_url."/buy-kotak-assured-savings-plan-online/#/landing" >Invest in Kotak Assured Savings Plan</a></li>
          </ul>
		  
		   <ul class="plan-list">
            <h6>Calculators </h6>

            <li> <a href="<?php echo base_url() ?>financial-tools-calculators/income-tax-calculator">Income Tax Calculator</a></li>
          <li> <a href="<?php echo base_url() ?>financial-tools-calculators/income-tax-calculator">ULIP Calculator</a></li>
          <li> <a href="<?php echo base_url() ?>financial-tools-calculators/compound-interest-calculator">Compound Interest Calculator</a></li>
          <li> <a href="<?php echo base_url() ?>financial-tools-calculators/retirement-calculator" >Retirement Planing Calculator</a></li>

			
          </ul>
		  
		  
		  
          <ul class="plan-list">
            <h6>LIFE INSURANCE PLANS </h6>
            <li><a href=base_url."/online-plans/online-term-insurance-plans"> Term Insurance Plan </a></li>
            <li><a href=base_url."/insurance-plans/savings-and-investments-plans/ "> Unit-Linked Insurance Plans </a></li>
            <li><a href=base_url."/online-plans/retirement-pension-plans  "> Retirement Plans </a></li>
            <ul class="mtb-0">
              <li><a href=base_url."/insurance-plans/retirement-plans/kotak-premier-pension-plan">Kotak Premier Pension Plan </a></li>
            </ul>

            <li><a href=base_url."/insurance-plans/health-plans ">Health Insurance Plans </a></li>
            <li><a href=" https://www.kotaklife.com/insurance-plans/savings-and-investments-plans" rel="follow"> Savings & Investment Plans</a></li>
            <ul class="mtb-0">
              <li><a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-premier-life-plan"> Kotak Premier Life Plan </a></li>
              <li><a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-single-invest-advantage "> Kotak Single Invest Plus Plan </a></li>
			  <li class="online-dnone"><a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan">Kotak Assured Savings Plan</a></li>
            </ul>
            <li><a href=" https://www.kotaklife.com/insurance-plans/child-plans "> Child Plan</a></li>
            <li><a href=" https://www.kotaklife.com/insurance-plans/insurance-plan-riders"> Insurance Riders </a></li>
          </ul>

        </div>


        <div class="articles w-footer-30">

          <ul class="plan-list">

            <h6>Online Plans</h6>


            <li> <a href=base_url."/online-plans"> All Online Plans </a></li>

            <li> <a href=base_url."/online-plans/online-term-insurance-plans"> Online Term Insurance </a></li>


            <ul class="mtb-0">
              <li> <a href=" https://www.kotaklife.com/online-plans/online-term-insurance-plans/kotak-e-term-plan-online"> Kotak e-Term Plan</a></li>
            </ul>
            <li> <a href="/ulip-plan"> Online Unit-Linked Insurance Plan(ULIP)</a></li>

            <ul class="mtb-0">


              <li> <a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-e-invest"> Kotak e-Invest Plan </a></li>
            </ul>
          
            <li> <a href=" https://www.kotaklife.com/online-plans/savings-plan"> Online Savings & Investment Plan</a></li>
          <li> <a href=" https://www.kotaklife.com/online-plans/savings-plan/kotak-guaranteed-savings-plan-online" > Kotak Guaranteed Savings Plan</a></li>
		   <li> <a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan"> Kotak Assured Savings Plan</a></li>
		  </ul>

          <ul class="plan-list hide-desktop">
            <h6>How Do I?</h6>

            <li> <a href=base_url."/how-do-i/pay-my-premium"> Pay My Premium </a></li>

            <li> <a href="https://customer.kotaklifeinsurance.com/ocm"> File a Claim</a></li>

            <li> <a href=base_url."/how-do-i/manage-my-policy"> Manage My Policy </a></li>

            <li> <a href=base_url."/how-do-i/download-application-form"> Download Application Form </a></li>

            <li> <a href=base_url."/how-do-i/get-policy-brochure"> Get Product Brochure </a></li>

            <li> <a href=base_url."/how-do-i/check-policy-document-specimen"> Check Policy Document Specimen </a></li>

            <li> <a href=" https://www.kotaklife.com/how-do-i/fund-update"> Fund Update</a></li>

            <li> <a href=base_url."/how-do-i/understand-stages-of-application"> Understand the Stages of My Application </a></li>

            <li> <a href=base_url."/how-do-i/locate-kotak-branches"> Locate a Kotak Life Branch </a></li>

            <li> <a href=base_url."//kotakWebBI/"> Premium Calculator </a></li>
          </ul>
          <ul class="plan-list hide-desktop">
            <h6>Group Plans</h6>

            <li><a href=" https://www.kotaklife.com/group-plans/group-gratuity-leave-encashment"> Group Gratuity/Leave Encashment</a></li>
            <ul class="mtb-0">

              <li><a href=base_url."/group-plans/group-gratuity-leave-encashment/kotak-gratuity-group-plan"> Kotak Gratuity Group Plan </a></li>

              <li><a href=base_url."/group-plans/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan">Kotak Leave Encashment Group Plan </a></li>
            </ul>

            <li><a href=base_url."/group-plans/group-superannuation"> Group Superannuation </a></li>
            <ul class="mtb-0">

              <li><a href=" https://www.kotaklife.com/group-plans/group-superannuation/kotak-secure-return-superannuation-plan"> Kotak Secure Return Superannuation Plan</a></li>

              <li><a href=base_url."/group-plans/group-superannuation/kotak-superannuation-group-plan-ii"> Kotak Superannuation Group Plan – II </a></li>
            </ul>

            <li><a href=base_url."/group-plans/group-term"> Group Term </a></li>

            <ul class="mtb-0">
              <li><a href=base_url."/group-plans/group-term/kotak-term-group-plan"> Kotak Term Group Plan </a></li>

            </ul>
            <li><a href=base_url."/group-plans/group-credit"> Group Credit </a></li>
            <ul class="mtb-0">
              <li><a href=base_url."/group-plans/group-credit/kotak-complete-cover-group-plan"> Kotak Complete Cover Group Plan </a></li>

              <li><a href=base_url."/group-plans/group-credit/kotak-group-assure"> Kotak Group Assure </a></li>
            </ul>
          </ul>

        </div>


        <div class="links w-footer-20">
          <ul class="plan-list hide-mobile">
            <h6>How Do I?</h6>

            <li> <a href=base_url."/how-do-i/pay-my-premium"> Pay My Premium </a></li>

            <li> <a href="https://customer.kotaklifeinsurance.com/ocm"> File a Claim</a></li>

            <li> <a href=base_url."/how-do-i/manage-my-policy"> Manage My Policy </a></li>

            <li> <a href=base_url."/how-do-i/download-application-form"> Download Application Form </a></li>

            <li> <a href=base_url."/how-do-i/get-policy-brochure"> Get Product Brochure </a></li>

            <li> <a href=base_url."/how-do-i/check-policy-document-specimen"> Check Policy Document Specimen </a></li>

            <li> <a href=" https://www.kotaklife.com/how-do-i/fund-update"> Fund Update</a></li>

            <li> <a href=base_url."/how-do-i/understand-stages-of-application"> Understand the Stages of My Application </a></li>

            <li> <a href=base_url."/how-do-i/locate-kotak-branches"> Locate a Kotak Life Branch </a></li>

            <li> <a href=base_url."//kotakWebBI/"> Premium Calculator </a></li>
          </ul>
        </div>

        <div class="group w-footer-30">
          <ul class="plan-list hide-mobile">
            <h6>Group Plans</h6>

            <li><a href=" https://www.kotaklife.com/group-plans/group-gratuity-leave-encashment"> Group Gratuity/Leave Encashment</a></li>
            <ul class="mtb-0">

              <li><a href=base_url."/group-plans/group-gratuity-leave-encashment/kotak-gratuity-group-plan"> Kotak Gratuity Group Plan </a></li>

              <li><a href=base_url."/group-plans/group-gratuity-leave-encashment/kotak-leave-encashment-group-plan">Kotak Leave Encashment Group Plan </a></li>
            </ul>

            <li><a href=base_url."/group-plans/group-superannuation"> Group Superannuation </a></li>
            <ul class="mtb-0">

              <li><a href=" https://www.kotaklife.com/group-plans/group-superannuation/kotak-secure-return-superannuation-plan"> Kotak Secure Return Superannuation Plan</a></li>

              <li><a href=base_url."/group-plans/group-superannuation/kotak-superannuation-group-plan-ii"> Kotak Superannuation Group Plan – II </a></li>
            </ul>

            <li><a href=base_url."/group-plans/group-term"> Group Term </a></li>

            <ul class="mtb-0">
              <li><a href=base_url."/group-plans/group-term/kotak-term-group-plan"> Kotak Term Group Plan </a></li>

            </ul>
            <li><a href=base_url."/group-plans/group-credit"> Group Credit </a></li>
            <ul class="mtb-0">
              <li><a href=base_url."/group-plans/group-credit/kotak-complete-cover-group-plan"> Kotak Complete Cover Group Plan </a></li>

              <li><a href=base_url."/group-plans/group-credit/kotak-group-assure"> Kotak Group Assure </a></li>
            </ul>
          </ul>
        </div>


      </div>
    </div>


  <!--popular searches v-->
  <div class="midWrapper">
  <div class="polular-searches">
      <h6>popular searches</h6>
      <div class="popular-search-anc">
        <ul>
          <li><a href=base_url."/online-plans/online-term-insurance-plans">Term Insurance</a></li>
          <li><a href=base_url."/">Life Insurance</a></li>
          <li><a href=base_url."/ulip-plan">ULIP</a></li>
          <li><a href=base_url."/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance">Kotak e-Term Plan</a></li>
          <li><a href=base_url."/online-plans/ulip-plan/kotak-e-invest">Kotak e-Invest</a></li>
          <li><a href=base_url."/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction">Section 80C Tax Benefits</a></li>
          <li><a href=base_url."/insurance-guide/savingstax/section-80-d-deduction-of-income-tax-act">Section 80D of ITA</a></li>
          <li><a href=base_url."/insurance-guide/savingstax/what-is-tds-tax-deducted-at-source">What is TDS</a></li>
          <li><a href=base_url."/insurance-guide/savingstax/what-is-hra-and-how-hra-exemption-is-calculated">HRA Exemption</a></li>
          <li><a href=base_url."/insurance-guide/protection/what-is-term-insurance">What is Term Insurance</a></li>
          <li><a href=base_url."/insurance-guide/protection/term-insurance-vs.-life-insurance">Term Insurance vs Life Insurance</a></li>
          <li><a href=base_url."/insurance-plans/retirement-plans">Retirement Plan</a></li>
          <li><a href=base_url."/insurance-plans/insurance-plan-riders">Insurance Riders</a></li>
          <li><a rel="follow" href=base_url."/buy-online-term-insurance/">Term Insurance Quote</a></li>
          <!--<li><a href=base_url."/buy-health-insurance-online/">Health Plan Quote</a></li>-->
          <li><a href=base_url."/buy-e-invest-ulip-plan-online/">Invest in ULIP</a></li>
          <li><a href=base_url."/insurance-guide/retirement/what-is-sum-assuredin-a-unit-linked-insurance-plan">ULIP Meaning</a></li>
          <li><a href=base_url."/buy-annuity-plan/">Invest in Retirement Annuity</a></li>
          <li><a href=base_url."/online-plans/savings-plan">Savings Plan</a></li>
          <li><a href=base_url."/online-plans/savings-plan/kotak-guaranteed-savings-plan-online">Kotak Guaranteed Savings Plan</a></li>
          <li><a href=base_url."/buy-kotak-guaranteed-savings-plan-online/">Invest in Savings Plan</a></li>
		   <li><a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan">Kotak Assured Savings Plan</a></li>
		    <li class="online-dnone"><a rel="follow" href=base_url."/buy-kotak-assured-savings-plan-online/#/landing">Invest in Kotak Assured Savings Plan</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--popular searches ^-->
				 <!--new footer ^-->

                 <div class="connect mt-4 as">
                       <ul class="connect d-flex">
                            <li class=""><a href="javascript:void(0);" class=" li-a mr-15 p-0">Connect with us</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'facebook'});" href="https://www.facebook.com/kotaklife/?utm_source=website&utm_medium=FB_icon&utm_campaign=HR_session" class=" li-a mr-15 p-0 connect-img   fb_img"> </a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'twitter'});" href="https://twitter.com/Kotak_Life?utm_source=website&utm_medium=TW_icon&utm_campaign=HR_session" class=" li-a mr-15 p-0 connect-img    twt"> </a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'LinkedIn'});" href="https://www.linkedin.com/company/kotak_life/" class=" li-a mr-15 p-0 connect-img  lk"> </a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'Youtube'});" href="https://www.youtube.com/kotaklifeinsuranceofficial" class=" li-a mr-15 p-0 connect-img  youtube"> </a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer social', 'category':'footer', 'action':'social media icons','label':'Instagram'});" href="https://www.instagram.com/kotak.lifeinsurance/?utm_source=website&utm_medium=IG_icon&utm_campaign=HR_session" class=" li-a mr-15 p-0 connect-img  instagram"> </a></li>


                       </ul>

                     <div class="g2-logo">
					 <img src=base_url."/assets/images/g20_logo_Small.png" data-src=base_url."/assets/images/g20_logo_Small.png">					 </div>

                 </div>

                 <div class="policy">
                        <ul class="service d-flex flex-wrap">
                             <li class="li-a policy-text p-0">Policy Governance</li>
                             <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Service TATs'});" href="<?php echo base_url()?>grievance-redressal/service-tat" class="ser-li position-relative">Services TATs</a></li>
                             <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'irdai-handbook'});" href="<?php echo base_url()?>grievance-redressal/irdai-handbook" class="ser-li position-relative">IRDAI Handbook</a></li>
                             <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'customer-bulletin'});" href="<?php echo base_url()?>grievance-redressal/customer-bulletin" class="ser-li position-relative"> Customer Bulletin </a></li>
                             <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'fatca'});" href="<?php echo base_url()?>grievance-redressal/fatca" class="ser-li position-relative">FATCA</a></li>
                             <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'aml-guidelines'});" href="<?php echo base_url()?>grievance-redressal/aml-guidelines" class="ser-li position-relative rem-before">AML Guidelines</a></li>

                        </ul>
                 </div>

                 <div class="sitemap">
                  <ul class="service d-flex flex-wrap">

                    <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Sitemap'});" href="<?php echo base_url()?>sitemap" class="ser-li position-relative">Sitemap</a></li>
                    <li class=""><a onClick="dataLayer.push({'event':'event footer 1', 'category':'footer', 'action':'footer a','label':'Website Feedback'});" href="<?php echo base_url()?>website-feedback" class="ser-li position-relative rem-before">Website Feedback</a></li>

                   </ul>
                 </div>


                 <div class="beware-sec">
                      <p class="beware-text">
                           <span class="text-upper">BEWARE OF SPURIOUS / FRAUD PHONE CALLS <br> IRDAI </span>
                           is not involved in activities like selling insurance policies,<br> announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.
                      </p>

                      <p class="beware-text mt-10">
                        Beware of spurious emails with ficticious/fraudulent offers. Persons receiving such emails mentioning Kotak Life are requested to highlight the same immediately to kli.riskcontrol@kotak.com with "Spurious Email" in the subject line.
                      </p>

                      <p class="beware-text mt-10">
                        <b>Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</b>
                      </p>

                      <p class="beware-text">
                        Kotak Mahindra Life Insurance Company Limited,<br>
                        Regd. Office: 8<sup>th</sup> Floor, Plot # C- 12, G- Block, BKC, Bandra (E),<br> Mumbai - 400 051. Website: www.www.kotaklife.com I<br> Email:kli.in/WECARE I Toll Free No.: 1800 209 8800.
                        <br>
                        <br>
                        Registered with Insurance Regulatory & Development Authority <br> (IRDAI) as Life Insurance Company. Regn. No. 107. CIN: <br> U66030MH2000PLC128503
                      </p>
                 </div>

                 <div>

                 <ul class="btmlinks">

    </ul>


                      <ul class="public-dis d-flex flex-wrap">
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Public Disclosure'});" href="<?php echo base_url()?>why-kotak-life/corporate-governance" class="public-lis position-relative">Public Disclosure</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Unclaimed Amount Due to Policyholders'});" href="https://customer.kotaklifeinsurance.com/CP/customerunclaimamount.aspx" class="public-lis position-relative">Unclaimed Amount Due to Policyholders</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Disclaimer'});" href="<?php echo base_url()?>disclaimer" class="public-lis position-relative">Disclaimer</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Privacy Policy'});" href="<?php echo base_url()?>privacy-policy" class="public-lis position-relative">Privacy Policy</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'IRDAI Customer Education'});" href="https://www.policyholder.gov.in/" class="public-lis position-relative">IRDAI Customer Education</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'IRDAI'});" href="https://www.irdai.gov.in/" class="public-lis position-relative">IRDAI</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Insurance Ombudsman'});" href="https://www.irdai.gov.in/ADMINCMS/cms/NormalData_Layout.aspx?page=PageNo234&mid=7.2" class="public-lis position-relative">Insurance Ombudsman</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Kotak Mahindra Bank'});" href="https://www.kotak.com/en/home.html" class="public-lis position-relative">Kotak Mahindra Bank</a></li>
							<li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Kotak General'});" href="https://www.kotakgeneral.com" class="public-lis position-relative">Kotak General Insurance</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Life Insurance Council'});" href="https://www.lifeinscouncil.org/code/Default.aspx" class="public-lis position-relative">Life Insurance Council</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Corporate Partners'});" href="<?php echo base_url()?>corporate-partners" class="public-lis position-relative">Corporate Partners</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Corporate Partners Login'});" href="https://cp.mykotaklife.com/Login/LoginCPR.aspx" class="public-lis position-relative">Corporate Partners Login</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Do Not Call Registry'});" href="<?php echo base_url()?>do-not-call-registry" class="public-lis position-relative">Do Not Call Registry</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Agents Terminated'});" href="<?php echo base_url()?>agents-terminated-due-malpractices" class="public-lis position-relative">Agents Terminated</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Grievance Redressal System'});" href="https://customer.kotaklifeinsurance.com/KGMSUI/Grievance/Information.aspx" class="public-lis position-relative">Grievance Redressal System</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Key Persons'});" href="<?php echo base_url()?>key-persons" class="public-lis position-relative">Key Persons</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'List of our GST registration numbers'});" href="<?php echo base_url()?>assets/images/uploads/why_kotak/list-of-our-gstin-registration-numbers.pdf" class="public-lis position-relative">List of our GST registration numbers</a></li>
                            <li class=""><a onClick="dataLayer.push({'event':'event footer 2', 'category':'footer', 'action':'footer b','label':'Policy Servicing Forms in Regional Languages'});" href="<?php echo base_url()?>regional-forms" class="public-lis position-relative">Policy Servicing Forms in Regional Languages</a></li>
                      </ul>
                      <p class="kotak-text">© 2021 Kotak Mahindra Group. All rights reserved.</p>
                 </div>


<div class="lets-chat-pop">
    <div style="max-width: 7000px; margin: 0 auto; padding: 0 40px; text-align: left;">
          <!-- <img src="https://haptikappimg.haptikapi.com/uploads/e7e7a63b44e3412e7a2932c6f4428a9f.png" onClick="openChat()" class="custom-icon letschat-btn">-->
		   <img  src="assets/images/chatexit.gif" onclick="openChat(this)" data-tag="chatBotClick" class="custom-icon mobilechat letschat-btn w-130">
    </div>
  </div>


         </div>
</footer>

 <script defer src="<?php echo base_url()?>assets/mobile/js/jquery-3.6.0.min.js"></script>
  <script defer src="<?php echo base_url()?>assets/mobile/js/bootstrap.bundle.min.js"></script>

  <script defer src="<?php echo base_url()?>assets/mobile/js/bootstrap-select.min.js"></script>
  <script defer src="<?php echo base_url()?>assets/mobile/js/jquery.validate.js"></script>
  <!--<script src="<?php echo base_url()?>assets/mobile/js/slick.js"></script>
		<script async src="<?php echo base_url()?>assets/mobile/js/bootstrapValidator.min.js"></script>-->
  <script defer src="<?php echo base_url()?>assets/mobile/js/slick.min.js"></script>
  <script defer src="<?php echo base_url()?>assets/mobile/js/custom.js"></script>
  <script defer src="<?php echo base_url()?>assets/mobile/js/need_base_cal.js"></script>
  <script defer src="<?php echo base_url()?>assets/js/common-dev.js"></script>



<script>
  $(document).ready(function() {
      $(".cross-red").click(function() {
        $(".buy-life").addClass("dd-none");
      });
    });

  function getSegment() {
    var needSegment1 = $("#needSegment1").val();
   // var needSegment2 = $("#needSegment2").val();
    // $('#selected_val_two').val(needSegment1);alert(needSegment1);
    $('#selected_val_two').val(needSegment1);
   // $('#selected_val_three').val(needSegment2);

    if (needSegment1 == "Term Insurance Plan") {
       $target_url = "<?=base_url?>"+"/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "ULIP Plan") {
       $target_url = "<?=base_url?>"+"/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }
	if (needSegment1 == "Assured Savings Plan") {
       $target_url = "<?=base_url?>"+"/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }
   
    if (needSegment1 == "Guranteed Savings Plan") {
       $target_url = "<?=base_url?>"+"/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "Health Insurance Plan") {
       $target_url = "<?=base_url?>"+"/buy-health-insurance-online/#/landing?utm_source=Health_organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "Retirement Plan") {
       $target_url = "<?=base_url?>"+"/buy-annuity-plan/#/landing?utm_source=organic&utm_medium=website&utm_campaign=homepage_lead&utm_content=lookingforSec";
      window.open($target_url, '_blank');
    }


    if (needSegment1 == "About Term Insurance") {
       $target_url = "<?=base_url?>"+"/online-plans/online-term-insurance-plans/";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "About ULIP Plans") {
       $target_url = "<?=base_url?>"+"/online-plans/ulip-plan/";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "About Savings Plans") {
       $target_url = "<?=base_url?>"+"/online-plans/savings-plan/";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "About Health Insurance") {
       $target_url = "<?=base_url?>"+"/insurance-plans/health-plans/";
      window.open($target_url, '_blank');
    }
    if (needSegment1 == "About Retirement Plans") {
       $target_url = "<?=base_url?>"+"/insurance-plans/retirement-plans/";
      window.open($target_url, '_blank');
    }
  }
 function close_popup()
 {
	 $(".steps.step01").addClass("selected");

}

 </script>
     <script>

	$("#nextResBtn").click(function(){
    var e=$("#custName").val(),
	a=$("#ageGroup").val(),
	t=$("#custNumber").val(),
	s=$("#custCity").val(),
	i=0;
	//$("#needSegment").change(function(){resetvalues()}),
	//$(".link").click(function(){alert()
		var e=$("#needSegment").val(),
		 a=$("#custName").val();
		t=$("#ageGroup").val(),
		s=$("#custNumber").val(),
		i=$("#custCity").val();
		pc=$("#pincode").val();

		datastring="needSegment="+e+"&ageGroup="+t+"&name="+a+"&number="+s+"&custcity="+i+"&pincode="+pc,
		//alert(base_url);
		$.ajax({url:base_url."/need-base-calculator/result",
		type:"POST",data:datastring,
			dataType:"JSON",success:function(e){
				var needSeg = $("#needSegment").val();
				if(needSeg=='Long Term Savings')
				{
					var successdata ='<div>'+
                             '<div> <img alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src=base_url."/assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div>'+
                             '<div class="detail-kotak">'+
                             '<h3 class="kotak-assur">Kotak Assured Savings Plan</h3>'+
                             '<p class="text-kotak">Kotak Assured Savings Plan is an affordable protection plan that enables you to accumulate wealth and strengthens your finances for the future.</p>'+
                             '<a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan" class="links">Know more</a>'+
                             '</div>'+
                        '</div>'+
                         '<div class="mt-40">'+
                             '<div> <img  alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src=base_url."/assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div>'+
                             '<div class="detail-kotak">'+
                             '<h3 class="kotak-assur">Kotak Classic Endowment Plan</h3>'+
                             '<p class="text-kotak">Kotak Classic Endowment Plan is a long term protection cum savings plan that offers protection benefit while earning bonuses during the policy term.</p>'+
                             '<a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-classic-endowment-plan" class="links">Know more</a>'+
                             '</div>'+
                        '</div>'+
                        '<div class="mt-40">'+
                            '<div> <img alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src=base_url."/assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div>'+
                             '<div class="detail-kotak">'+
                             '<h3 class="kotak-assur">Kotak Premier Endowment Plan</h3>'+
                             '<p class="text-kotak">Kotak Premier Endowment Plan offers Guaranteed Additions in the first 5 policy years and also works to provide you a corpus through continued bonuses.</p>'+
                             '<a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-premier-endowment-plan" class="links">Know more</a>'+
                            '</div>'+
                        '</div>'+
                        '<div class="mt-40 mb-20">'+
                            '<div> <img alt="Kotak Assured Savings Plan - icon" title="Kotak Assured Savings Plan - icon" src=base_url."/assets/images/uploads/insurance-plans/Kotak-Assured-Savings-Plan1.png"></div>'+
                             '<div class="detail-kotak">'+
                             '<h3 class="kotak-assur">Kotak Premier Moneyback Plan</h3>'+
                             '<p class="text-kotak">Kotak Premier Moneyback Plan is a limited pay plan that provides lump sum payouts at regular intervals to meet your interim financial requirements and let you offer the best to your family.</p>'+
                             '<a href=base_url."/insurance-plans/savings-and-investments-plans/kotak-premier-moneyback-plan" class="links">Know more</a>'+
                             '</div>'+
                        '</div>';
					$('#success_data').append(successdata);
				}else
				{
					var successdata = "<div><div class='detail-kotak'>Thank you for your details. We do not have any plans matching your selection. Kindly change your selection and again or <a href=base_url.'/insurance-plans' style='color:red' target=_blank>Click here</a> to browse through our plans.</div></div>";
                    $('#success_data').append(successdata);

				}

			}
		});

  });
</script>

  <script>
    $(document).ready(function(){
  $(".calc-click").click(function(){
    $(".rem-buy-cal").addClass("dd-block");
  });
});

$(document).ready(function(){
  $(".dis-red").click(function(){
    $(".rem-buy-cal").removeClass("dd-block");
    $(".rem-buy-cal").addClass("dis-none");
  });
});

   $(document).ready(function() {
      //$(".btn-online").click(function() {
		 // alert(1)
      //  $(".buy-life").toggleClass("dd-none");
      //});
    });
	
	function btn_online(){
		
		//alert(1)
		 $(".buy-life").toggleClass("dd-none");
		
	}
		

    $(document).ready(function() {
      $(".cross-red").click(function() {
        $(".buy-life").addClass("dd-none");
      });
    });
    $(document).ready(function() {
      $(".close_menu").click(function() {
        $(".navbar-collapse").removeClass("show");
      });
    });
    </script>

<script>
 $(document).ready(function(){
let base_url = '<?php echo base_url()?>';
    /*Search Result Start*/
    $("#searchResBtn").click(function() {
        var searchFor = $("#searchTxt").val();
        if (searchFor != "Search here") {
            window.location.href = base_url + "search?q=" + searchFor;
        } else {
            return false;
        }
    });

    $("#searchTxt").keyup(function(event) {
        if (event.keyCode == 13) {
            $("#searchResBtn").click();
        }
    });

    if ($('#searchResBtn404').length >= 1) {
        $("#searchResBtn404").click(function() {
            var searchFor = $("#searchTxt404").val();
            if (searchFor != "Search here") {
				gaSearchTermTracking("event search", "search", '404 page', searchFor.toLowerCase());
                window.location.href = base_url + "search?q=" + searchFor;
            } else {
                return false;
            }
        });

        $("#searchTxt404").keyup(function(event) {
            if (event.keyCode == 13) {
                $("#searchResBtn404").click();
            }
        });
    }
});
    /*Search Result End*/
</script>


<script  type="text/javascript" charset="UTF-8" src="https://toolassets.haptikapi.com/platform/javascript-xdk/production/loader.js"></script>
<script>

function clearOldRef() {
    var arr = [];
    for (var i = 0; i < localStorage.length; i++) {
      if (localStorage.key(i).indexOf('SAVED_TASKS') == -1) {
        arr.push(localStorage.key(i));
      }
    }
    for (var i = 0; i < arr.length; i++) {
      localStorage.removeItem(arr[i]);
    }
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
'font-sizes': { 'primary': 14, 'secondary': 18 },
'typography': 'Lato',
'header-text': { 'text': 'Kaya', 'status-text': true},
'composer-placeholder': 'Type your message...',
'header-icon': 'https://haptikappimg.haptikapi.com/uploads/c438367db350eb514589257c20384663.png?w=1991&h=1962',
'business-id': 978,
'client-id': '763005ee8f30a91f3ab9ab35d15411315c256e46',
'base-url': 'https://kli.haptikapi.com',
'session-timeout': 360000000,
<!--'mode': 'fsm',-->
'custom-button': true,
'ignore-storage': true,
'chat-bubble-text-desktop': "I'm Online",
'chat-bubble-text-mobile': "_NONE_"
 };


function openChat(input) {
	//alert()
HaptikSDK.expandWidget();
let st = $(input).attr('data-tag');
		lmSMTObj.track("chatBotClick", 
			{ 
				"products": [
					{
					"name": st
					},
				]
			}, function () {});  
}

</script>
<script>
      document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;



  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });



    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");

    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }



      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) {
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }



    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})



      </script>


	  <script>
	  $(".close_menu").click(function(){
		  $(".navbar-collapse").removeClass('show');
	  });
	  </script>
	  <script>
		function productClick(input){
			let st = $(input).attr('data-tag');
		lmSMTObj.track("productClick",
			{
				"products": [
					{
					"name": st
					},
				]
			}, function () {});
		}
		</script>

	<!-- <script>$(window).resize(function(){location.reload();});</script>-->
	


</body>

</html>