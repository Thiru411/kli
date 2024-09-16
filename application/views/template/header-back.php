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


<!-- Meta Configuration Start Here -->
<?php
	$meta_data = seo_configuration();
	if(count($meta_data)) {
?>
<title><?php echo $meta_data['meta_title']; ?></title>
<meta name="description" content="<?php echo $meta_data['meta_description'] ?>" />
<meta name="keywords" content="<?php echo $meta_data['meta_keywords'] ?>" />
<link rel="canonical" href="<?php echo $meta_data['meta_canonical_url'] ?>" />
<?php } else { ?>
<title>Kotak - Life Insurance - <?php echo ucwords($title); ?></title>
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
<link id="fav" rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" />
<base href="<?php echo base_url()?>"/>
<link rel="preload" href="<?php echo base_url()?>assets/css/reset.css" as="style"/>
<?php 
	if (isset($CSS_FILES) && sizeof($CSS_FILES) > 0) { 	
		foreach ($CSS_FILES as $cssfile) {
?>
<link href="<?php echo $cssfile ?>" rel="stylesheet" type="text/css" />
<?php			
		}
	}
?>
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
<script src="assets/js/g-recaptcha.js"></script>
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
<?php if (($this->config->item("lemnisk_enable"))) { ?>
<script src="https://cdn25.lemnisk.co/ssp/KotakLife/sw/sw_registration.js"></script>
<script type="text/javascript">
(function() {
    try {
        var viz = document.createElement("script");
        viz.type = "text/javascript";
        viz.async = true;
        viz.src = ("https:" == document.location.protocol ?"https://cdn12.lemnisk.co" : "http://cdn12.lemnisk.co")+ "/analyze/pixel.php?account_id=VIZVRM5984";

        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(viz, s);
        viz.onload = function() {
            try {
                pixel.parse();
            } catch (i) {
            }
        };
        viz.onreadystatechange = function() {
            if (viz.readyState == "complete" || viz.readyState == "loaded") {
                try {
                    pixel.parse();
                } catch (i) {
                }
            }
        };
    } catch (i) {
    }
})();
</script>

  <?php } ?>
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NH7ZFB6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->