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
  $actionGA = isset($planInfo->title) ? strtolower($planInfo->title) : '';
  //GA code Variables
?>
<style>
.paraa-p a, .faqsWrap p a{color: #08315F;}
ul.bullet{width:initial!important;float:initial!important;}
ul.accordUL{position:relative; z-index:9;}
.taxx{font-size:16px;}
.two-bb{display:flex;}
.get-button {
	margin:0 5px 0 0;
	text-align:center;
	display:inline;
}
.two-bb .get-button:only-child{
	width:100%;
}

.buttons11 {
  width: 960px;
  margin: 0 auto;
}

.action_btn {
  display: inline-block;
  width: calc(50% - 4px);
  margin: 0 auto;
  font-size:16px;
  color:red;
  text-decoration:none;
}

.reqir-table tr th, .reqir-table tr td{font-size:16px;}
.reqir-table tr th{padding-left:20px;}
<?php
if ($_SERVER['REQUEST_URI']=="/insurance-plans/child-plans")  {
?>
#v{display:none;}
.faqsWrap .term-blog{top:0;}
.faqsWrap .term-blog #articles-div li{margin-bottom:40px;}
.loadmores{width:100%; text-align:center;}
.loadmores #load-more-articles{display:inline-block !important; margin:7rem; 0 0 !important;}

@media only screen and (max-width: 480px){
	.faqsWrap .term-blog #articles-div li{margin-bottom:10px; height:auto !important;}
}
<?php } ?>
.kli-boost{font-family:'Lato-Regular';}
.kli-sub-boost{text-align:center;}
.app-download-boost{}
.app-downpera{font-family:'Lato-Regular'; font-size:20px; margin-bottom:2rem; font-weight:600;}
.app-download-boost{text-align:center;}
.add-download{justify-content: center; padding-right:0;}
.kli-boost-top{top:110px;}
@media only screen and (max-width: 480px){
	.add-download{display:inline-flex !important;}
.kli-boost-top{top:0; margin-top:0;}
.kli-boost-top .breadcrumb{display:block;}
}

</style>
<!-- Section Start -->
<section class="kli-boost-top"> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
    <ul>
        <li><a href="<?=base_url()?>">Life Insurance</a></li> 
        <li class="activeLink"><a href="<?=base_url()?>kli-boost">KLI Boost</a></li> 
    </ul>
    </div>
  </article>
  <!-- breadcrumb End --> 
  
  <!-- midWrapper Start -->
  <article>
    <div class="midWrapper">
      <div class="headDesc pt-0">
        <h1 class="kli-boost mb-0">KLI BOOST</h1>
        <p class="kli-sub-boost">Kotak Mahindra Life Insurance Company Limited</p>
		
       <p> The KLI Boost App – is a best in class mobile App designed especially for KLI’s sales force.
It is a one stop mobility solution for all KLI’s agents and partners enabling them to perform their day to day tasks and activities in a faster, simpler and smarter way!
       </p>
       <p>If you are a Kotak Life agent/partner download Boost now to get:</p>
       <ul class="li_font">
         <li>Business Performance</li>
         <li>Real time proposal tracker</li>
         <li>Policy & customer portfolio</li>
         <li>Renewals & Persistency & much more</li>
         <li>View and Update basic advisor details</li>
        </ul>
       
      </div>
      <div class="app-download-boost">
	   <p class="app-downpera">Download the App</p>
    <div class="add-download">
        
            <a href="https://apps.apple.com/in/app/kli-boost/id1501295010" target="_blanck"><img src="<?=base_url()?>assets/images/ios-app.svg"></a>
            <a href="https://play.google.com/store/apps/details?id=com.kotak.leap&hl=en_IN&gl=US" target="_blanck"><img src="<?=base_url()?>assets/images/google-play-app.svg"></a>
    </div>
    </div>
	</div>
  </article>
  <!-- midWrapper End --> 
  
  <script>
      
       var OSName = "Unknown OS";
 if (navigator.userAgent.indexOf("Win") != -1) OSName = "Windows";
 if (navigator.userAgent.indexOf("Mac") != -1) OSName = "Macintosh";
 if (navigator.userAgent.indexOf("Linux") != -1) OSName = "Linux";
 if (navigator.userAgent.indexOf("Android") != -1) OSName = "Android";
 if (navigator.userAgent.indexOf("like Mac") != -1) OSName = "iOS";
      
    if(OSName == "Android"){
   const url = "https://play.google.com/store/apps/details?id=com.kotak.leap&hl=en_IN&gl=US";
   window.location.replace(url);

}else if(OSName == "iOS"){
   const url = "https://apps.apple.com/in/app/kli-boost/id1501295010";
   window.location.replace(url);
}
    </script>
   
   
    