<!DOCTYPE HTML>
<html>
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
$actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  
 /* echo "mamatha".$actual_link_url;*/
 if($actual_link_url=="https://insurance.kotak.com/online-plans/online-protection-plans")
 { 
	 $redirectURL = "https://insurance.kotak.com/online-plans/online-term-insurance-plans/";  
	 redirect("$redirectURL"); 
 }
if($actual_link_url=="https://insurance.kotak.com/online-plans/online-protection-plans/kotak-e-term-plan-online")
 { 
	 $redirectURL = "https://insurance.kotak.com/online-plans/online-term-insurance-plans/kotak-e-term-plan-online";  
	 redirect($redirectURL); 
 }   ?>


 
<!-- Meta Configuration Start Here -->
<?php
$PageName="";
	$meta_data = seo_configuration();
	if(count($meta_data)) {
		$PageName=$meta_data['meta_title'];
?>
<title><?php echo $meta_data['meta_title']; ?></title>

<meta name="robots" content="noindex" />

<meta name="description" content="<?php echo $meta_data['meta_description'] ?>" />
<meta name="keywords" content="<?php echo $meta_data['meta_keywords'] ?>" />
<link rel="canonical" href="<?php echo $meta_data['meta_canonical_url'] ?>" />
<?php } else { ?>
<title><?php echo ucwords($title); ?></title>
<?php } ?>
<!-- Meta Configuration End Here -->
<meta property="og:title" content="<?php echo (!empty($meta_data['meta_title'])?$meta_data['meta_title']:"Kotak Life Insurance: Your plan for future")?>"/>
<meta property="og:description" content="<?php echo (!empty($meta_data['meta_description'])?$meta_data['meta_description']:"Life is full of surprises. Empower yourself to take care of your loved ones and secure their future with a range of Life Insurance plans.") ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="<?php echo (!empty($shareImageURL)?base_url().$shareImageURL:base_url().'assets/images/fb-share.png') ?>"/>
<meta property="og:url" content="<?php echo (!empty($meta_data['meta_canonical_url'])?$meta_data['meta_canonical_url']:base_url()) ?>"/>
<meta property='fb:app_id' content="1940090586308141" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<!--  <link rel="stylesheet" href="https://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">-->
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
 <!-- <link rel="stylesheet" href="https://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">-->
  <style>
    .custom-icon {
      position: fixed;
      right: 10px;
      bottom: 0;
      padding-right: 8%;
	  padding-bottom: 25px;
      width: 60px;
      cursor: pointer;
    }
  </style>
<link id="fav" rel="shortcut icon" href=base_url."/assets/images/favicon.png" />
<base href="https://kotaklife.com/"/>
<link rel="preload" href=base_url."/assets/css/reset.css" as="style"/>
<?php 
	/*if (isset($CSS_FILES) && sizeof($CSS_FILES) > 0) { 	
		foreach ($CSS_FILES as $cssfile) {
?>
<link href="<?php echo $cssfile ?>" rel="stylesheet" type="text/css" />
<?php			
		}
	}*/
?>


<link href=base_url."/assets/css/reset.css" rel="stylesheet" type="text/css" />
<link href=base_url."/assets/css/style.css" rel="stylesheet" type="text/css" />
<link href=base_url."/assets/css/media.css" rel="stylesheet" type="text/css" />
<link href=base_url."/assets/css/jquery.jscrollpane.css" rel="stylesheet" type="text/css" />
<!-- css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href=base_url."/assets/eterm/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href=base_url."/assets/eterm/css/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href=base_url."/assets/eterm/css/main.css">
    <link rel="stylesheet" type="text/css" href=base_url."/assets/eterm/css/responsive.css">
	 
<!--[if IE 8]> 
<link href="<?php echo 'assets/css/IE8.css' ?>" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" language="javascript">
document.createElement('header');
document.createElement('nav');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('footer');
</script>
<script src=base_url."/assets/js/g-recaptcha.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
<?php if(isset($convonixSettings)) { ?>
<script type="application/ld+json">
<?php echo $convonixSettings; ?>
</script>
<?php } ?>
<?php if (isset($meta_data['bread_crumb_schema']) && !empty($meta_data['bread_crumb_schema'])) { ?>
            <script type="application/ld+json">
    <?php echo $meta_data['bread_crumb_schema']; ?>
            </script>
        <?php } ?>
<!--<?php if (($this->config->item("lemnisk_enable"))) { ?>-->
<?php if($meta_data['page_schema']!=""){ ?>
<script type="application/ld+json">
<?php echo $meta_data['page_schema'];?> 
</script>
  <?php  }} ?>
  
  <script src='//cdnt.netcoresmartech.com/smartechclient.js'></script>
<script>smartech('create','ADGMOT35CHFLVDHBJNIG50K96AJCF13KHOR2VLE8SMI05KBMC6GG','tin');
smartech('register', '36f581d81527588f40d0fef16a0e6df8');
smartech('identify','');
smartech('dispatch',1,{});
</script> 
<style>
   .modal-sm{width: 400px;position: fixed;bottom: 10px;right: 90px;padding: 0 15px;background-color: #fff;box-shadow: 0px 0 18px -5px #333;border-radius: 10px;display:none;}
   .modal-sm .pic{height:50px;width: 50px;border-radius: 50%;}
   .center-text{text-align: center;padding-top: 25px;}
   .modal-sm .name{font-size: 20px;font-weight: 600;margin:0;}
   .green-dot{background-color: green;height: 7px;width: 7px;display: inline-block;border-radius: 50%;}
   .modal-sm .center-text p{margin: 0;font-weight: 400;    display: contents;}
   .btn-chat{margin: 22px 0;}
   .btn-chat a{background: #da251c;text-decoration: none;color: #fff;font-size: 16px;padding: 7px 0px;border-radius: 5px;width: 100%;display: block;}
   @media only screen and (max-width: 600px) {
        .modal-sm{right: 10px;width:89%;}
    }
   .d--block{display:block;}
.close-btn{float:right;font-size:23px;cursor:pointer;};
@media only screen and (max-width: 375px) {
        .modal-sm{width: 84%;}
    }
.letschat-btn{cursor: pointer;}

.prof-img{width: 140px !important;height: 180px !important;object-fit:cover;}
    
   @media only screen and (max-width: 767px) {
 .searchAdvisorsWrapper .searchAdvisorsResult, .searchAdvisorsWrapper .resultNotfound{margin: 10px 0 40px 0;}
}
 @media only screen and (max-width: 640px) {
  ul.advisorsList {margin-top: 30px !important;}
  .advisorsImg.verified-txt{bottom: 42% !important;}
}
@media only screen and (max-width: 425px) { 
  .advisorsImg.verified-txt{bottom: 51% !important;left:48px !important;top:unset !important;}
}
@media only screen and (max-width: 414px) { 
  .advisorsImg.verified-txt{bottom: 51% !important;left:48px !important;top:unset !important;}
}
@media only screen and (max-width: 375px) { 
  .advisorsImg.verified-txt{bottom: 51% !important;left:48px !important;top:unset !important;}
}
</style>
<script src="//assets.adobedtm.com/7a6d0b1a3787/280dce85a1d6/launch-7c12b9f3f594.min.js" async></script>
<script type="text/javascript">

//var dataLayer = {};

dataLayer.page = {};

var digitalData = {};

digitalData.page = [];

digitalData.page.pageinfo = [];

var pagename = "<?=$PageName?>";

digitalData.page.pageinfo.pageName = pagename;

digitalData.page.category = [];

var category = '';

digitalData.page.category.primaryCategory = category;

digitalData.website = [];

var language;

language = "English";

digitalData.website.language = language;

digitalData.web = [];

digitalData.web.identifier = "kli-website";

dataLayer.page.title = pagename;

if (window._satellite && _satellite.getVisitorId() && _satellite.getVisitorId().getMarketingCloudVisitorID()){

dataLayer.visitorId = _satellite.getVisitorId().getMarketingCloudVisitorID();

}

</script>
</head>
<body>

<!-- Google Tag Manager -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NH7ZFB6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->