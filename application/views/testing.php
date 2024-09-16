<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NH7ZFB6');</script>

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
<a onClick="dataLayer.push({'event':'event banner', 'category':'banner|<?php echo $gaCat;?>', 'action':'Simplified Claims','label':'Know more'});" href=<?=base_url?>."/assets/images/uploads/why_kotak/Simplified-Claims-Notification.pdf" target="_blank" class="link">Know more</a>
</body>
</html>