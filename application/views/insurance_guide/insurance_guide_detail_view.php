<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php $actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  
 $fullurl=$actual_link_url;
 $fullurl1 = substr($fullurl, strrpos( $fullurl, '/' )+1);

?>

 <style>
    .cta_class{display:none;}

     footer{top:0}
 .best-invest #topic1 a{color:#da251c !important;}
 .blog-faq{margin-top:5rem !important;}
   .bor-top-zero p{float: left; width: 20px !important; margin-left: 0;}
      .bor p{margin: 0 !important;}
      .bor .tab-detail p{margin-left:  20px !important;}
      .bor .tab-detail p:last-child{ padding-bottom: 20px !important;}
      .accordion.bor-top-zero{border-top: 1px solid #c7c7c7 !important;  padding:10px 0;}
      .accordion-btns span{font-weight: 600;}
	  .bor:last-child{/*margin-bottom:3rem;*/}
	  .bor div.accordion span{padding:0 !important;}
        .tooltip {
        position: relative;
        display: inline-block;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 100px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        right: 33px;
        top: -2px;

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }
	.best-invest{top:110px;}
	.blog-detail{margin-top:2rem;}
	.blog-body-content #topic1 ul{background:none; border-left:0; padding:0;}
	.blog-body-content #topic1 .bullet-pink{background-color:#fff7f6; padding:20px; border-left:1px solid #ed3237;}
	.blog-body-content #topic1 .bullet-blue{background-color:#eff8ff; padding:20px;}
     .blog-body-content #topic1 .bullet-pink.sub-list{    border: none;  background: none; padding: 0px;  margin-left: 23px;}
     .blog-body-content #topic1 h3{font-family: 'Lato-Bold' !important; font-size: 16px; margin-left: 30px !important;}
     .consumer-text h3{width: 100%;}
     .best-invest #topic1 li{list-style: none !important; position: relative; margin-left: 20px; padding-left: 10px;}
     .best-invest #topic1 li:before{ content: '';  width: 6px; height: 6px; background: #000; border-radius: 50px; top: 9px; position: absolute; left: -9px; }
     .h3-bullet{position: relative; padding-left: 10px; margin-left: 40px !important; margin-bottom: 1rem !important;}
     .h3-bullet:before{ content: '';  width: 6px; height: 6px; background: #000; border-radius: 50px; top: 8px; position: absolute; left: -9px; }
     .mar-left{margin-left: 50px !important;}
     .mar-left1{margin-left: 30px !important;}
     ul.bullet{margin-left: 20px;}
     .blog-body-content #topic1 .bullet-pink.sub-list li:before{background: none !important;  border:1px solid #000 !important;}
     
	.blog-body-content .feats-want a{text-decoration:none;}
	.blog-body-content .bg-eterm{align-items:inherit;}
	.blog-body-content .bg-eterm .broch-btn{top:12px;}
	.blog-body-content  .w-161{width:161px; margin-bottom:10px;}
	.blog-body-content p{margin-bottom:20px;}
	.protectiongsp .bg-eterm {padding-top:20px;}
	.protectiongsp .bg-eterm img{width:161px;}
	.protectiongsp .bg-eterm .broch-btn img{width:100% !important;}
	.protectiongsp .feats-sec {padding-left:28px !important; padding-right: 25px !important;}
	.protectiongsp .feats-sec ul{padding-top:0;}
	#topic1 a.redBtn{font-size:14px; color:#fff;}
	#topic1 a.redBtn:hover{color:#fff;}
	#topic1 h3{text-transform:capitalize;}
	#topic1 h4{font-size:16px;padding-bottom:8px;}
	.kotak-eterm-plan-popup{margin:2rem 0; display: none}
	#topic1 h2 .space, #topic1 h3 .space, #topic1 h4 .space{padding-right:5px;}
	#topic1 table tr p{margin-bottom:0 !important;}
     /*08-08*/
    #topic1 .no-space li{margin-bottom: 0 !important;}
    #topic1 .blog-number li{list-style: auto !important;}
     #topic1 .blog-number li:before{content: none !important;}

		
		@media screen and (max-width: 768px) {
		.blogaside .feats-sec li{margin-bottom:6px !important;}
		.blog-body-content .feature-want-more a{width:91% !important; padding:9px 0 !important; }
		}
		
		@media screen and (max-width: 480px) {
			.blog-body-content .kotak-e-term-plan{display:none;}
			 #topic1 p{width:100%; float:left;}
				.blogaside .feats-sec li .fa-size{padding:4px 0; text-align: center;width:24px; height:24px;}
				.blogaside .feats-sec li .fa-check:before{font-size:12px;}
				.blogaside .feats-sec h3{text-align:left;}
				.blogaside .feats-sec{padding-left:20px !important;}
				.blogaside .feats-sec li{text-align:left;}
				.blogaside .feats-sec a{width:100% !important; border-radius: 30px !important;}
				.blogaside .feats-want a{text-transform:capitalize !important;}
				.guaranteedplan:before{right:90px; content:'';}
				.assutedplan:before{left:90px; content:'';}
            header.scrollActive{top: 0;}
            .bg-eterm p{text-align: left;}
            .accordion-div .accordion{z-index: 0}
            .blog-head{z-index: 9;}
            footer{z-index: -1}
            .btnLink a:first-child{margin-bottom: 0 !important;}
		}
		 .mobile-tab{display: flex;     border-radius: 12px;  width: 100%; background-color: #e3e3e3;  }
      .mobile-product{color: #000; font-size: 15px;font-weight: 600; padding: 10px 15px; width:100%; border-right:1px solid #bfbebe;}
	  .mobile-product:focus{color: #000; }
      .mobile-product.active{background: #ed3237; color: #fff; border-radius: 10px;}
	   .mobile-product:last-child{border-right:none;}
	   .best-invest #topic1 li, .best-invest #topic1 p{margin-bottom:10px;}
     
	   .best-invest #topic1 p img{margin-top:20px; margin-bottom:10px;}
	   .best-invest #topic1 p .space{padding-right:5px;}
	   .best-invest #topic1 h3, .best-invest #topic1 h4{margin-top:20px; margin-left: 10px;}
	  .best-invest #topic1 tr td{padding-top:10px !important; padding-bottom:10px !important;}
	  .best-invest #topic1 table{margin-top:20px;}
     .consumer{margin-top: 5rem; display: inline-block;}
     .faq{margin-top: 5rem !important;}
     .suggestion{display: inline-block; width: 100%; margin-top: 3rem;}
     .suggestion p span{display: inline-block; margin-right: 10px;}
     .tab-detail .bullet li:before{left: -18px !important; }
     
<?php	if($_SERVER['REQUEST_URI']=="/insurance-guide/savingstax/union-budget-2023-impact-on-life-insurance")  {?>

@media only screen and (min-width: 768px) {
.consumer .midWrapper{width:740px;} 
.consumer .consumer-slick h3{padding-left:0; padding-right:0;}
.consumer .slick-next{right:-30px; top:19%;}
.consumer .slick-prev{top:15%;}
}
	@media screen and (min-width: 1280px) {
		.consumer{width:740px; margin:-32rem 0 0 11rem;}
	}
		@media screen and (min-width: 1400px) {
			.consumer{width:740px; margin:-43rem 0 0 15rem;}
		}
<?php } ?>
<?php	if($_SERVER['REQUEST_URI']=="/insurance-guide/savingstax/union-budget-2023-and-tax-exemption-on-life-insurance-premium-over-5-lakhs")  {?>
@media only screen and (min-width: 768px) {
.consumer .midWrapper{width:740px;} 
.consumer .consumer-slick h3{padding-left:0; padding-right:0;}
.consumer .slick-next{right:-30px; top:19%;} 
.consumer .slick-prev{top:15%;}
}
	@media only screen and (min-width: 1280px) {
		.consumer{width:740px; margin:-42rem 0 0 11rem;}
	}
		@media screen and (min-width: 1400px) {
			.consumer{width:740px; margin:-56rem 0 0 15rem;}
		}
<?php } ?>
     
     
     @media only screen and (max-width:480px) {
  .mobile-product {
    color: #FFF !important;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 30px 10px 23px;
    width: 100% !important;
    text-align: center !important;
    background-color: #0b396b !important;
    border-radius: 12px !important;
    display: block !important;
      position: relative;
      
  }
         
  .mobile-tab {
    background-color: transparent !important;
    justify-content: center;
  }
  .mobile-product-fixed {
    position: fixed !important;
    top: 60px;
    left: 0;
    width: 100% !important;
    z-index: 9999;
      background: #fff;
  }
  .mobile-product-fixed a {
    border-radius: 0 !important;
          padding: 10px 50px 10px 23px;
  }
  .blog-body-content {
    position: static !important;
  }
  .mobile-tab {
    position: relative !important;
  }
  .termPopup {
    position: absolute !important;
    top: 105% !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    min-height: 575px !important;
    z-index: 99999 !important;
  }
  /* .helloTrial {
    display: none;
    background-color: lightcyan;
    position: absolute !important;
    top: 105% !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    min-height: 575px !important;
    z-index: 99999 !important;
  } */
           .mobile-product:before { transition-duration: 3s, 5s; font-family:FontAwesome;content:'\f175'; font-size: 22px; font-weight:lighter; position: absolute; right: 6px;/* background: url(assets/images/blog-down-arrow.jpg) no-repeat ;*/width: 20px; height: 40px; top: 50%;   transform: translate(0px, -50%);  transition: all 1s; 
  }
     .mobile-product.active:before{ font-family:FontAwesome;content:'\f176'; font-size: 22px; font-weight:lighter;  transition: all 1s; transform: rotate(0deg); top:23%; }
         .mobile-tab .mobile-product img{position: relative; top:50%; left: -8px;   transform: translate(0px, -40%); width: 23px; height: 23px;}
         .singletabs .mobile-product:before{ transform: translate(0px, -40%) !important; top: 50%;     right: 26px;}
         .singletabs .mobile-product{padding: 10px 30px 12px 23px;}
         .kotak-e-term-plan h2{text-align: left; margin-bottom: 0 !important;}
         .feats-sec ul{padding-bottom: 10px !important;}
         .singletabs a span{margin-top: -10px;}
         .p-ref, .p-tc{padding-bottom: 10px;}
         .bg-eterm .broch-btn{float: right;}
}
     
        <?php if ($category == 'savingstax') { ?>
     .product_head{display: none;}
     <?php } ?>
     .redBtn{    text-transform: capitalize !important;
    font-size: 15px !important;
    font-weight: 500 !important;
    position: relative !important;
    overflow: hidden !important;}
  .redBtn::before {position: absolute !important;
    content: '' !important;
    display: inline-block !important;
    top: -180px !important;
    left: 0 !important;
    width: 15px !important;
    height: 100% !important;
    background-color: #fff !important;
    animation: shiny-btn1 4s ease-in-out infinite !important;
}
.healthAlsoRead{
    display: none;
}
/* ashwini reddy  check new calculator css start */
.check-calculators{margin-top: 20px;}
.check-bg{background-color: #F6F6F6; padding: 24px 20px;border-radius: 10px;}
.check{font-size: 17px; font-weight: 400; font-family:'Lato-Regular'; color: #000000;border-bottom: 1px solid #ED1C24;margin: 0! important;
    padding-bottom: 20px;}
    .check-bg ul li{font-size: 16px;font-weight: 400; font-family:'Lato-Regular'; color: #000000;    border-bottom: 1px solid #B8B8B8;padding: 10px 0;position: relative;} 
    .check-bg ul li:last-child{border-bottom: 0;}
    .check-bg ul li:hover a{color: #ED1C24; width: 100%; display: block;}
    .check-bg ul li a{color: #000000;}
    .check-bg ul {padding: 0;}
    .check-bg ul li a:before{position: absolute;content: ''; background-repeat: no-repeat;background-size: contain; width: 19px;height: 42px;top: 15px;right: 0;background-image: url('assets/images/rightarrowblack.svg');}
     .check-bg ul li:hover a:before{background-image: url('assets/images/red-rightarrowblack-svg.svg');}


/* ashwini reddy  check new calculator css start */
/* neww disclaimer css ashwini */
.terms-txt {
    text-align: initial;
    border: 1px solid #c2c2c2;
    background-color: #f6f6f6;
    text-transform: capitalize;
    width: 100%;
    height: auto;
    display: block;
    position: relative;
    padding: 16px 34px;
    color: #000;
    font-family: Lato-Regular;
    font-size: 16px;
    font-weight: 700;
    font-style: normal;
    letter-spacing: .32px;
    line-height: 24px;
    top: -166px;
}
.terms p {
    font-size: 16px !important;
    font-weight: 400 !important;
    line-height: 26px !important;
    letter-spacing: .32px !important;
    color: #000 !important;
}
.new-termsspace{padding: 40px 0 0 !important;}
section {
    width: 100%;
    float: left;
    position: relative;
    top: 2px;
    z-index: auto ;
}
.terms-txt {
    text-align: initial;
    border: 1px solid #c2c2c2;
    background-color: #f6f6f6;
    text-transform: capitalize;
    width: 100%;
    height: auto;
    display: block;
    position: relative;
    padding: 16px 34px;
    color: #000;
    font-family: Lato-Regular;
    font-size: 16px;
    font-weight: 700;
    font-style: normal;
    letter-spacing: .32px;
    line-height: 24px;
    top: -16px;
}
/* .termmargin{margin-top: -146px;} */

/* css for sticky button  only for mobile */
@media only screen and (max-width:480px) {
.rhsFixed_nav{display: none !important;}

.reddiv {
        text-align: center;
        background: #fff;
        position: fixed;
        z-index: 2;display: block !important;
        width: 100%;
        bottom: 0;

        height: 70px;
        margin: auto;
        overflow: hidden;
        box-shadow: 0px -1px 6px 5px #cac4c4bf;
    }

    .buysticky {
        position: fixed;
        bottom: 10px;
        font-size: 18px;
        font-family: Lato-Regular, Arial, Helvetica, sans-serif;
        display: block;
        color: #fff;
        font-weight: 400;
        width: 90%;
        background: transparent linear-gradient(90deg, #82772D 0%, #C1CD23 100%) 0% 0% no-repeat padding-box;
        overflow:hidden;
        left:5%;
    }

}

.reddiv{display: none;}
/* css for sticky button  only for mobile */

    </style> 
 <section class="best-invest">

		
         <div class="blog-bradcrumb clearfix">
         <?php include_once("insurance_guide_detail_breadcrum.php");?>
		</div>
        
        <ul class="menu bottomRight">
                                <li class="share top">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="submenu">
                                        <li><a href="https://www.facebook.com/sharer.php?t=" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/share?text=&url=<?=base_url()?>insurance-guide/&via=KLI" class="twitter"><i class="fa"><svg class="new-twitter twitterdiv" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1">
 <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
</svg></i></a></li>
                                        <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?=base_url()?>insurance-guide/" class="googlePlus"><i class="fa linkedin fa-linkedin"></i></a></li>
                                        <li><a href="https://api.whatsapp.com/send?text=<?=base_url()?>insurance-guide" class="instagram"><i class=" fa whatsap fa-whatsapp"></i></a></li>
                                    </ul>
                                </li>
                            </ul>

        
        

        <?php $title=''; foreach($alsoReadArticlesInfo as $article) {
                        $category = $article->topic_url_title;
                    }
					$blogTitles ="";
						$blogTitle1 = ltrim((strtolower(str_replace(' ','-',str_replace('?','',$blogTitle)))),'-');
							$blogTitles = rtrim($blogTitle1);
					if($category == 'about-life-insurance'){
                        

						$title = 'Kotak e-Term ';$title1 = 'Kotak e-Term';
                        $brochure_link = base_url().'assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Life Cover till 85 years for Life & Life Secure Option</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>3 Payout Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Women</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Option to exit the policy with premium refund at the age of 60*</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Non-Tobacco Users</span></li>
							  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Free Medical Check Up every 5th year**</span></li>
                          </ul>';
                        $know_more_link = base_url().'term-insurance/kotak-e-term?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link = 'https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.$blogTitles;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/2435';
						 
					}else if($category == 'protection' || $category == 'book-summary' || $category == 'current-affairs'){
                    	$title = 'Kotak e-Term ';$title1 = 'Kotak e-Term';
                        $brochure_link = base_url().'assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Life Cover till 85 years for Life & Life Secure Option</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>3 Payout Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Women</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Option to exit the policy with premium refund at the age of 60*</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Non-Tobacco Users</span></li>
							  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Free Medical Check Up every 5th year**</span></li>
                          </ul>';
                        $know_more_link = base_url().'term-insurance/kotak-e-term?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link ='https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.$blogTitles;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/2435';
					}				
						
                    else if (($category == 'government-schemes')) {
                         
						$title = 'Kotak e-Term ';$title1 = 'Kotak e-Term';
                        $brochure_link = base_url().'assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Life Cover till 85 years for Life & Life Secure Option</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>3 Payout Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Women</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Option to exit the policy with premium refund at the age of 60*</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Non-Tobacco Users</span></li>
							  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Free Medical Check Up every 5th year**</span></li>
                          </ul>';
                        $know_more_link = base_url().'term-insurance/kotak-e-term?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link = 'https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.$blogTitles;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/2435';
                    }
                    else if ($category == 'wealth-creation') {
                        $title = 'Kotak e-Invest';$title1 = 'Kotak e-Invest';

                        $brochure_link = base_url().'assets/images/uploads/insurance-plans/Kotak_E_Invest_-_Brochure.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Return of Mortality Charges*<sup>$</sup></span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Enhanced Protection</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Multiple Plan Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Zero Premium Allocation Charges</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Savings^</span></li>
                          </ul>';
                        $know_more_link = base_url().'ulip-plans/kotak-e-invest?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link = 'https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/521';
                    }
                     if ($category == 'retirement') {
                        $title = 'Kotak Life Time Income Plan';$title1 = 'Kotak Life Time Income Plan';
                         $redbutton="style='display:none'";
                        $brochure_link = base_url().'assets/images/uploads/insurance-plans/kotak-lifetime-income-plan-brochure.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>6 Plan Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Tax benefits<sup> ^ </sup></span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Higher annuity rates for higher purchase price</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>
4 Annuity Modes</span></li>
                             
                          </ul>';
                        $know_more_link = base_url().'online-plans/retirement-pension-plans/kotak-lifetime-income-plan';
                       // $buy_plan_link = base_url().'buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no = 'Ref. No. KLI/23-24/E-BB/1052';
                    }
                    $sapimg_link='';
                     if ($category == 'savingstax') {
                        //$title = 'Kotak e-Invest';
                        $title2 = 'Kotak Assured Savings Plan';$title1 = 'Kotak Guaranteed Fortune Builder';
                        $sapimg_link1 = ' <img src="assets/images/assurlogo.svg" class="w-161">';
                        $brochure_link1 = base_url().'assets/images/uploads/insurance-plans/kotak-assured-savings-plan-brochure-23-june-2022.pdf';
                        $features1 = '<ul class="saving_assured">
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Increasing Life Cover*</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Guaranteed^ Maturity Benefits</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Enhanced Protection Through Riders</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Benefits</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Dual Benefits: Guaranteed^Maturity +
                              Death benefits</span></li>
				
                          </ul>';
                          $know_more_linkprot1 = base_url().'savings-plan/kotak-guaranteed-fortune-builder';
                        $buy_plan_link1 = base_url().'life-insurance-plans/#/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-');
                        $ref_no1 = 'Ref. No. KLI/22-23/E-BB/999';
                     

                         
                        $sapimg_link = '<p class="product_head saving-tax">Kotak Guaranteed Fortune Builder</p>';
                        $brochure_link = base_url().'assets/images/uploads/insurance-plans/Kotak_Guaranteed_Fortune_Builder_Brochure_Online.pdf';
                        $features = '<p class="kgfb_pera">Pay 10,000/month for 10 years, <span class="get_st">Get 1,65,805/Year* for next 15 years.</span> </p><ul class="saving-second-product">
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Guaranteed<sup>@</sup> Income Benefit for upto 25 years</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Flexibility to choose income period</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Premium break for females on child birth or any listed specific illnesses</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Life cover for the premium payment period</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Enhance your life cover with rider offerings</span></li>
                          </ul>';
                          if($articlesInfo->article_title=="3 Tips to Buy Guaranteed Savings Plan"){
                        $know_more_linkprot="savings-plan/kotak-guaranteed-savings-plan-online";
                          }else{
                          $know_more_linkprot = base_url().'online-plans/savings-plan/kotak-guaranteed-savings-plan-online?utm_source=gsp_organic&utm_medium=website&utm_campaign=product_card';
                          }
                        $buy_plan_link ='https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no = 'ARN. No. KLI/23-24/E-BB/1201';
                         
                    }
                     if ($category == 'health-insurance') { 
						$title = 'Kotak e-Term ';$title1 = 'Kotak e-Term';
                        $brochure_link = base_url().'assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Life Cover till 85 years for Life & Life Secure Option</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>3 Payout Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Women</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Option to exit the policy with premium refund at the age of 60*</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Non-Tobacco Users</span></li>
							  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Free Medical Check Up every 5th year**</span></li>
                          </ul>';
                        $know_more_link = base_url().'online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance';
                        $buy_plan_link = 'https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.$blogTitles;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/2435';
                    }


					?>
<?php if($category == 'health-insurance'){$health_also_read="healthAlsoRead";}else{$health_also_read="";}?>
           <section class="blog-head">
		   <div class="midWrapper">
       <div class="kotak-eterm-plan-popup">
	   <?php //if ( ($category == 'wealth-creation') || ($category == 'retirement') || ($category == 'savingstax') || ($category == 'government-schemes') || ($category == 'health-insurance')) {?>
	   
	    <div id="assutedplanSticky">
         <?php if ($category == 'savingstax') { ?>
         <div class="mobile-tab" >
            
            <a href="JavaScript:void(0)" id="assutedplan" onclick="savingTab(event, 'assutedplan')" class="mobile-product mobprod pop-cont"> <?php echo $title1 ?></a>
          <a href="JavaScript:void(0)"  id="guaranteedplan"  onclick="savingTab(event, 'guaranteedplan')" class="mobile-product mobprod pop-cont"> <?php echo $title2 ?></a>
			  </div>
         <?php } else { ?>
          <!-- <div class="mobile-tab singletabs" >
           
            <a href="JavaScript:void(0)" id="assutedplan" onclick="savingTab(event, 'assutedplan')" class="mobile-product mobprod pop-cont"><img src="assets/images/metro-icon.svg" alt=""> <span><?php echo $title1 ?></span></a>
          
          
			  </div> -->
			  <?php } ?>
			
			
          <!-- <a href="JavaScript:void(0)" class="popup-term-btn pop-cont"><img src="assets/images/window.png">  <?php echo $title1 ?></a> -->
            <?php if ($category == 'savingstax') { ?><!--<a href="JavaScript:void(0)" class="popup-term-btn pop-cont"><img src="assets/images/window.png"><?php echo $title2 ?></a>-->
                 <?php } ?>
				 
				 
            <div class="modal-popups-btns pop-up blogaside  assutedplan"  id="assutedplanbox">
              <div class="kotak-e-term-plan">
                        <div class="d-flex bg-eterm">
                            <div>
							<?php if($title=='Kotak e-Invest'){?>
							  <p style="font-size:12px;max-width:236px;padding-bottom:15px;">In this policy, the investment risk in the investment portfolio is borne by the policyholder.</p>
							  <?php } ?>
                                <p class="product_head"><?php echo $title ?></p>
                                <?php echo $sapimg_link ?>
                                
                            </div>
                            <div class="ml-auto tooltip">
                                <!--https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf-->




                                <a href="<?php echo $brochure_link ?>" download="Brochure">
                                    <button class="broch-btn want-to-btn"> <img src="assets/images/down-broch.svg" class=""></button>
                                </a>
                               <!-- <span class="tooltiptext">Download Brochure</span>-->
                            </div>
                        </div>
                        <div class="feats-sec">
                            <?php if ($category != 'savingstax') { ?>
                             <p class="feature_head">Features</p>
                            <?php } else {?>
                            <?php } ?>
                           
                            <?php echo $features; ?> 
                            <?php if ($category != 'savingstax') { ?>
                            <div class="feats-want blog-term-btn ">
                                <a href="<?php echo $know_more_link?>">Want to Know More?</a>
                            </div>
                            <?php }else{ ?>
                                <div class="feats-want blog-term-btn">
                                <a href="online-plans/savings-plan/kotak-guaranteed-fortune-builder-online">View Kotak Guaranteed Fortune Builder</a>
                            </div>
                            <?php }?>

                            <div class="feats-buy <?php echo $cta?>">
                                <a href="<?php echo $buy_plan_link ?>">Invest NOW</a>
                            </div>
                            <div class="d-flex mt-20">
                                <div>
                                   	<?php if($category == 'savingstax'){ ?>
                                    <p class="p-ref">ARN. No. KLI/23-24/E-BB/1201</p>
                                    <?php } else{?>
                                     <p class="p-ref">Ref. No. KLI/22-23/E-BB/492</p>
                                    	<?php  }?>
                                </div>
                                <div class="ml-auto">
                                    <!---->
                                    <?php if($category == 'retirement'){ ?>
										  <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/wealth-creation/termsconditions">T&C</a></p>
										  	<?php } else if($category == 'savingstax'){ ?>
										  <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/savingstax/termsconditions?g=1">T&C</a></p>
										<?php } else{?>
                                  <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/<?php echo $category ?>/termsconditions">T&C</a></p>
										<?php  }?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    
                
                
                
                
	   </div>
	   <?php /*} */?>
			<?php if ($category == 'savingstax') { ?> 
			<div class="modal-popups-btns pop-up blogaside  guaranteedplan savingspopup"  id="guaranteedplanbox">
			<div class="kotak-e-term-plan">
                        <div class="d-flex bg-eterm">
                            <div>
							 
                                <p class="product_head"><?php echo $title ?></p>
                                <?php echo $sapimg_link1 ?>
                                
                            </div>
                            <div class="ml-auto tooltip"> 
                                <a href="<?php echo $brochure_link1 ?>" download="Brochure">
                                    <button class="broch-btn want-to-btn"> <img src="assets/images/down-broch.svg" class=""></button>
                                </a>
                               <!-- <span class="tooltiptext">Download Brochure</span>-->
                            </div>
                        </div>
                        <div class="feats-sec">
                            <p class="feature_head">Features</p>
                            <?php echo $features1; ?> 
                            
                            <div class="feats-want blog-term-btn">
                                <a href="<?php echo $know_more_linkprot1?>">View Kotak Assured Savings Plan?</a>
                            </div>
                             

                            <div class="feats-buy">
                                <a href="<?php echo $buy_plan_link1 ?>" >BUY NOW</a>
                            </div>
                            <div class="d-flex mt-20">
                                <div>
                                    <p class="p-ref"><?php echo $ref_no1?></p>
                                </div>
                                <div class="ml-auto">
                                <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/<?php echo $category ?>/termsconditions">T&C</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
			
			</div>
			
			<?php } ?>
			
			
			  </div>
			
        </div>
        </div>
		    <div class="best-card">
			<div class="midWrapper">
			<div class="text-center">
                          <h1><?php echo $articlesInfo->article_title; ?></h1>
						  <!--<p><?php echo $articlesInfo->short_description; ?></p>-->
						  <p><?php if($articlesInfo->summary!=""){ echo $articlesInfo->summary;}else{echo $articlesInfo->short_description;} ?></p>
						  
                          <div class="views-blogs">
                        <div class="b-view">
                           <ul class="d-flex blogs-ul">
                          <?php  
                          if($dateModified){
                            $dateModified=$dateModified;
                          }else{
                            $dateModified=$articlesInfo->posted_date;
                          }
                          ?>
                              <li><?php echo number_format($articlesInfo->viewed_count); ?> Views | Updated on: <?php echo date(BLOG_DATE_FORMAT, $dateModified); ?></li>
                           
                          </ul>
                              </div>
                          </div>
                            
						  
						  <?php $article_title1 = ltrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-');
							$article_title = rtrim($article_title1);?>

                           
                                  
								 <div class="btnLink">
                            <div class="dd-btn-flex blog-detail sd">                                
                                  
                            <?php $buttonurl='';$fulllanding=$utm_source=$cta=''; if($articlesInfo->button_1_text!=''){
                         $fulllanding=$buttonurl = $articlesInfo->button_1_url;
                         if (strpos($buttonurl, 'onlinetermInsurance') !== false) {
                            $buttonurl = str_replace('onlinetermInsurance', 'life-insurance-plans/#/buy-kotak-eterm', $buttonurl);
                            $utm_source="organic";
                            $explodecta=explode('utm_source=', $buttonurl);
                        $fulllanding=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
                        } 
elseif (strpos($buttonurl, 'buy-online-term-insurance') !== false) {
    $buttonurl = str_replace('buy-online-term-insurance', 'life-insurance-plans/#/buy-kotak-eterm', $buttonurl);
    $utm_source="organic";
    $explodecta=explode('utm_source=', $buttonurl);
$fulllanding=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
} elseif (strpos($buttonurl, 'buy-e-invest-ulip-plan-online/') !== false) {
    $buttonurl = str_replace('buy-e-invest-ulip-plan-online/#/landing', 'life-insurance-plans/#/buy-e-invest-ulip-plan-online', $buttonurl);
    $utm_source="ulip_organic";
    $explodecta=explode('utm_source=', $buttonurl);
    $fulllanding=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
} elseif (strpos($buttonurl, 'buy-kotak-assured-savings-plan-online/#/landing') !== false) {
    $buttonurl = str_replace('buy-kotak-assured-savings-plan-online/#/landing', 'life-insurance-plans/#/buy-kotak-assured-savings-plan-online/landing', $buttonurl);
    $utm_source="kasp_organic";
    $explodecta=explode('utm_source=', $buttonurl);
    $fulllanding=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
} elseif (strpos($buttonurl, 'buy-kotak-guaranteed-fortune-builder/#/landing') !== false) {
    $buttonurl = str_replace('buy-kotak-guaranteed-fortune-builder/#/landing', 'life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder', $buttonurl);
    $utm_source="kgfb_organic";
    $explodecta=explode('utm_source=', $buttonurl);
    $fulllanding=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
} elseif (strpos($buttonurl, 'buy-annuity-plan/#/landing') !== false) {
   // $buttonurl = str_replace('buy-annuity-plan/#/landing', 'buy-annuity-plan/#/landing', $buttonurl);
       //$utm_source="Annuity_organic";
   $buttonurl = str_replace('buy-annuity-plan/#/landing', 'life-insurance-plans/#/buy-kotak-assured-pension', $buttonurl);
    $utm_source="kap_organic";
    $explodecta=explode('utm_source=', $buttonurl);
    $fulllanding=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
$cta="style='display:none'";
}

?>

<a class="kli-class" href='<?=$fulllanding?>' target="_blank" onclick="dataLayer.push({'event': 'event <?=$CategoryName?>', 'category': 'new customers', 'action': '<?=$CategoryName?>', 'label': '<?=$CategoryName?>'});"><?=$articlesInfo->button_1_text?></a>
<?php 
        }
         $buttonurl1=$fulllanding1=''; if($articlesInfo->button_2_text!=''){
          $fulllanding1=$buttonurl1 = $articlesInfo->button_2_url;
          if (strpos($buttonurl, 'onlinetermInsurance') !== false) {
            $buttonurl = str_replace('onlinetermInsurance', 'life-insurance-plans/#/buy-kotak-eterm', $buttonurl);
            $utm_source="organic";
            $explodecta=explode('utm_source=', $buttonurl);
        $fulllanding=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
        } 
else  if (strpos($buttonurl, 'buy-online-term-insurance') !== false) {
            $buttonurl1 = str_replace('buy-online-term-insurance', 'life-insurance-plans/#/buy-kotak-eterm', $buttonurl1);
            $utm_source="organic";
            $explodecta=explode('utm_source=', $buttonurl1);
        $fulllanding1=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
        } elseif (strpos($buttonurl, 'buy-e-invest-ulip-plan-online/') !== false) {
            $buttonurl1 = str_replace('buy-e-invest-ulip-plan-online/#/landing', 'life-insurance-plans/#/buy-e-invest-ulip-plan-online', $buttonurl1);
            $utm_source="ulip_organic";
            $explodecta=explode('utm_source=', $buttonurl1);
            $fulllanding1=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
        } elseif (strpos($buttonurl, 'buy-kotak-assured-savings-plan-online/#/landing') !== false) {
            $buttonurl1 = str_replace('buy-kotak-assured-savings-plan-online/#/landing', 'life-insurance-plans/#/buy-kotak-assured-savings-plan-online/landing', $buttonurl1);
            $utm_source="kasp";
            $explodecta=explode('utm_source=', $buttonurl1);
            $fulllanding1=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
        } elseif (strpos($buttonurl, 'buy-kotak-guaranteed-fortune-builder/#/landing') !== false) {
            $buttonurl1 = str_replace('buy-kotak-guaranteed-fortune-builder/#/landing', 'life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder', $buttonurl1);
            $utm_source="kgfb";
            $explodecta=explode('utm_source=', $buttonurl);
            $fulllanding1=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
        } elseif (strpos($buttonurl, 'buy-annuity-plan/#/landing') !== false) {
          //  $buttonurl1 = str_replace('buy-annuity-plan/#/landing', 'buy-annuity-plan/#/landing', $buttonurl1);
           // $utm_source="Annuity_organic";
           $buttonurl = str_replace('buy-annuity-plan/#/landing', 'life-insurance-plans/#/buy-kotak-assured-pension', $buttonurl);
           $utm_source="kap_organic";
            $explodecta=explode('utm_source=', $buttonurl);
            $fulllanding1=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
        }

?>
<a href='<?=$fulllanding1?>' target="_blank" onclick="dataLayer.push({'event': 'event <?=$CategoryName?>', 'category': 'new customers', 'action': '<?=$CategoryName?>', 'label': '<?=$CategoryName?>'});"><?=$articlesInfo->button_2_text?></a>
<?php 
}
                     
?>

                            </div> 
                </div>
                                                             
			</div>
			<div class="d-flex p-20 blog-social-meida">
                     
                         
                          <div class="ml-auto">
                              <div class="hide-desktop share-ul">
                                  <a href="#"> <img src="assets/images/send-icon.svg" class=""></a>
                              </div>
                               <ul class="social__icons share-ul d-flex hide-mobile social__icons_hide">
                                 
                                  <li><a class="fb" href="https://www.facebook.com/sharer.php?t=<?=$articlesInfo->article_title?>" data-title="Think About Life Insurance Sooner than Later" data-image="https://kotaklife.com/assets/images/uploads/insurance-guides/articles/Be-prepared-against-death-disability-and-disease4.jpg" data-desc="Getting life insurance early gives many benefits like lower premium, provides a reliable asset, tax benefits and helps your family in uncertain times. Click here to know more why you should buy life insurance now"><span class="fa f_b fa-facebook"></span></a></li>
                                  <li><a class="twt" href="https://twitter.com/share?text=<?=$articlesInfo->article_title?>&url=<?=$actual_link_url?>&via=KLI" data-title="Think About Life Insurance Sooner than Later" data-desc="Getting life insurance early gives many benefits like lower premium, provides a reliable asset, tax benefits and helps your family in uncertain times. Click here to know more why you should buy life insurance now"><span class="fa twit fa-twitter"></span></a></li>
                                  <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?=$actual_link_url?>"><span class="fa linkedin fa-linkedin"></span></a></li>
                                  <li><a href="https://api.whatsapp.com/send?text=<?=$actual_link_url?>" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                              </ul>
                          </div>
                      </div>
			</div>
		   </section>
		   <section class="blog-body-content">
              <div class="midWrapper midwrappercss ">
          <div class="row brdr_bttm">
                 
                 <!--New code -- 26/09/23 -->
               
                  <div class="col-md-7 pr-blog">
                 
                 <!--End New code -- 26/09/23 -->
                 
                 
                  <span id="topic1">
               
             

              <?php echo $articlesInfo->description; ?>
              
                  </span>
                   <div class="consumer consumer-text hide-mobile pb-0">
     
          <h3 class="ls1"> - A Consumer Education Initiative series by Kotak Life</h3>
          </div> 

          <?php  if($articlesInfo->reviewwritten=='Yes'){
                   if($writters){?>
                 <div class="authorBox authornew">
              <div class="authorDetails">
              <?php 
                foreach($writters as $writter){
                  
                  $image=	str_replace('{filedir_24}', 'themes/ee/site/default/asset/img/common/_thumbs/', $writter->image); 

                  ?>
                  <div class="blogsTooltip">
                  <div class="authorName">
                    <div class="authorImg">
                      <img src="<?=$image?>" alt="Amit Raje" />
                    </div>
                    <div class="nameTitle">
                      <div>
                        <!-- <img src="assets/images/contract.png" alt="Written By" /> -->
                       <?=$writter->asfield?> : <br>
                      </div>
                      <b class="nameTag"> <?=$writter->name?> </b>
                    </div>
                  </div>
                  <span class="tooltiptext">
                    <?=$writter->description?>
                  </span>
                </div>


               <?php  }} ?>
                
           
               </div> 
               </div>
                <?php
              }?>
              </div>
             
			  
			  <?php //if ( ($category == 'wealth-creation') || ($category == 'retirement') || ($category == 'savingstax') || ($category == 'government-schemes') || ($category == 'health-insurance')) {?>
              <div class="col-md-6">

                 
                        <?php if($category == 'health-insurance'){$health_sticky="health-sticky";}else{$health_sticky="";}?>

                  <div class="kotak-e-term-plan new_kotak_eterm <?=$health_sticky?>">
                      <div class="d-flex bg-eterm">
                          <div>
						  <?php if($title=='Kotak e-Invest'){?>
							  <p style="font-size:12px;max-width:236px;padding-top:15px;">In this policy, the investment risk in the investment portfolio is borne by the policyholder.</p>
							  <?php } ?>
                              <p class="product_head"><?php echo $title ?></p>
							  <?php echo $sapimg_link ?>
							  
							  
                          </div>
                          <div class="ml-auto tooltip">
                              <!--https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf-->
                              <a href="<?php echo $brochure_link ?>" download="Brochure">
                                  <button class="broch-btn want-to-btn"> <img src="assets/images/down-broch.svg" class=""></button>
                              </a>
							  <span class="tooltiptext">Download Brochure</span>
                          </div>
                      </div>
                      <div class="feats-sec feature-group">
                          <?php if ($category != 'savingstax' && $category!='health-insurance') { ?>
                          <p class="feature_head">Features</p>
                           <?php } else { ?>
                           <?php } ?>
                          
                          <?php echo $features; ?>
                         <!-- <div class="feats-want">-->
                              <!--https://www.kotaklife.com/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance-->
                            <!--  <a target="_blank" href="<?php echo $know_more_link ?>">Want to Know More?</a>
                          </div>-->
                          <?php if ($category == 'health-insurance') { ?>
                            <div class="feats-buy text-center <?php echo $cta?>">
                              <!--https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=card-->
                              <a  target="_blank" href="<?php echo $buy_plan_link ?>">Invest NOW</a>
                          </div>
                      
                          <?php } else if ($category != 'savingstax') { ?>
                          <div class="feats-want feature-want-more ">
                              <a target="_blank" href="<?php echo $know_more_link?>" >Want to Know More?</a>
                          </div>
                          <?php }else{ ?>
						   <div class="feats-want featassur">
                          <a target="_blank" href="online-plans/savings-plan/kotak-guaranteed-fortune-builder-online">View Kotak Guaranteed Fortune Builder</a>
                          </div>
						  
						  <?php }?>
                   
                        
              <?php if ($category == 'health-insurance') { ?>
                <div class="feats-want feature-want-more">
                              <a target="_blank" href="<?php echo $know_more_link?>" >Want to Know More?</a>
                          </div>
                         
                          <?php }else{?>
                            <!-- <div class="feats-buy text-center <?php echo $cta?>"> -->
                            <?php if($category == 'retirement'){$cta_class="cta_class"; }else{ $cta_class="";}?>
                            <div class="feats-buy text-center <?=$cta_class?>">
                              <!--https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=card-->
                              <a  target="_blank" href="<?php echo $buy_plan_link ?>" >Invest NOW</a>
                          </div>
                           <?php  }?>
                          <div class="d-flex mt-20">
                              <div>
                                  <p class="p-ref"><?php echo $ref_no; ?></p>
                              </div>
                              <div class="ml-auto">
                                  <!--<?php //echo base_url(IG_MODULE_LINK.'/'.$category.'/insurance_guide_article_details'); 
                                        ?>-->
										<?php if($category == 'retirement'){ ?>
										  <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/retirement/termsconditions">T&C</a></p>
										<?php } else if($category == 'savingstax'){ ?>
										  <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/savingstax/termsconditions?g=1">T&C</a></p>
										
										
										<?php } else if($category=="book-summary" || $category=="current-affairs") {
                      ?>
                      <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/protection/termsconditions">T&C</a></p>
                      <?php }else{?>
                                  <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/<?php echo $category ?>/termsconditions">T&C</a></p>
										<?php  }?>
							 </div>
                          </div>
                      </div>
                  </div>


                  <!--a target="_blank" href="<?php echo base_url() ?>insurance-guide/knowledgevault/<?php if($category=='savingstax'){echo "savings-&-tax";}else if(($category=='health-insurance') || $category=='government-schemes'){$category='';}else if($category=='protection'){echo $category='term-insurance';}else{echo $category;} ?>">
                      <div class="browse-our">
                          <div class="d-flex">
                              <div>
                                  <img src="assets/images/browse-img.svg" class="">
                              </div>
                              <div>
                                  <h3>Browse our library of resources</h3>
                              </div>
                              <div>
                                  <img src="assets/images/two-arr.svg" class="">
                              </div>
                          </div>
                      </div>
                  </a-->
				  
				   <?php if ($category == 'savingstax') { ?>
                  <div class="kotak-e-term-plan mb-100 protectiongsp">
               
                      <div class="d-flex bg-eterm">
                          <div>
                           
                              <?php echo $sapimg_link1 ?>
                          </div>
                          <div class="ml-auto tooltip">
                              <a href="<?php echo $brochure_link1 ?>" download="Brochure">
                                  <button class="broch-btn want-to-btn"> <img src="assets/images/down-broch.svg" class=""></button>
                              </a>
                              <span class="tooltiptext">Download Brochure</span>
                          </div>
                      </div>
                      <div class="feats-sec">
                          <p class="feature_head">Features</p>
                          <?php echo $features1; ?>
                        
                          <div class="feats-want featassur">
                              <a href="<?php echo $know_more_linkprot1 ?>">View Kotak Assured Savings Plan?</a> 
                          </div>
                          <div class="feats-buy">
                             
                              <a href="<?php echo $buy_plan_link1 ?>" >BUY NOW</a>
                          </div>
                          <div class="d-flex mt-20">
                              <div>
                                  <p class="p-ref"><?php echo $ref_no1; ?></p>
                              </div>
                              <div class="ml-auto">
                            
                                  <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/<?php echo $category ?>/termsconditions">T&C</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php } ?>
                  
                  
                  <?php 
                 
                  if($articlesInfo->also_read_blogs!=""){
                    $arr = json_decode($articlesInfo->also_read_blogs,TRUE); 
                   // $arr =json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $articlesInfo->also_read_blogs), true ); 
                    ?>
                    
                    <div class="also-read <?=$health_also_read?>">
                    <div class="alsoRead-bg">
                          <h3 class="alsoRead-h3">Also read</h3>
                          <ul class="alsoRead-list">
                              <?php foreach($arr as $key=>$value){?>
                                  <li> <a href="<?php echo base_url($value); ?>"><?=$key?></a></li>
                              <?php } ?>
                          </ul>
                      </div>
                      </div>
                <?php }else if (count($alsoReadArticlesInfo)) { ?>
                      <div class="also-read <?=$health_also_read?>">
                      <div class="alsoRead-bg">
                          <h3 class="alsoRead-h3">Also read</h3>
                          <ul class="alsoRead-list">
                              <?php foreach ($alsoReadArticlesInfo as $article) { ?>
                                  <li> <a href="<?php echo base_url(IG_MODULE_LINK . '/' . $article->topic_url_title . '/' . $article->url_title); ?>"><?php echo $article->article_title; ?></a></li>
                              <?php } ?>
                          </ul>
                      </div>
                      </div>
                  <?php } ?>
                  <div  class="check-calculators">
                    <div class="check-bg">
                      <h3 class="check">Calculator Bookmarks</h3>
                      <ul>
                        <li><a href="https://www.kotaklife.com/financial-tools-calculators/ulip-calculator">ULIP Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/compound-interest-calculator">Compound Interest Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/retirement-calculator">Retirement Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/sip-calculator">SIP Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/bmi-calculator">BMI Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/hra-calculator">HRA Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/fd-calculator">FD Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/rd-calculator">RD Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/gratuity-calculator">Gratuity Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/ppf-calculator">PPF Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/dass-21-calculator">DASS Calculator</a></li>

                      </ul>


                    </div>
                  </div>

              </div>
			  <?php //}?>
          </div>
	
      </div>
     
  </section>


  <!-- <section class="terms new-terms pt-0 newaccordian" id="terms_conditions">
      <div class="midWrapper">

        <button type="button" class="collapsible terms-txt whitespace-initial"><span>Read about Tax benefits &amp; Plan
          Disclaimer</span></button>
        <div class="content-col mb-0 tab-align li-disc terms-para">
          <h3 class="  terms-conditions"> Disclaimers</h3>
          <div class="disclamier-pera pt-0">
            <p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p> <br>

            <p class="pl-0">The calculation is generated on the basis of information provided and does not constitute an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the advised to go through the sales brochure before conducting any sale. REF No: KLI/23-24/E-WEB/241</p>
            <br>

            <p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS/FRADULENT OFFERS</b></p>
            <p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing bonus
              or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.
            </p>
            <p class="pl-0 mt-10">Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN :
              U66030MH2000PLC128503, Regd.
              Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400 051. Website:
              https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800. </p>
            <p class="pl-0 mt-10">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak
              Mahindra Life Insurance Company Limited under license </p>
          </div>
        </div>
      </div>
    </section> -->
    <section class="terms new-termsspace " id="terms-conditions">
            <div class="midWrapper"><button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits and Plan Disclaimer</button>
                <div class="content-col mb-0 tab-align li-disc terms-para termmargin">
                    <p class="pl-0">Tax Benefits and Disclaimers</p>
                    <p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p>
                    <p class="pl-0 space-2"><b>Claim Settlement and Solvency ratio<sup>*</sup>disclaimer:</b></p>
                    <p><sup>^</sup>Figures arrived are basis the company’s latest annual audited figures for Individual Policy Claims for 2022-23</p><a class="mb-15" href="https://www.kotak.com/content/dam/Kotak/investor-relation/Financial-Result/QuarterlyReport/FY-2023/q4/Investor-Presentation/Q4FY23-Investor-Presentation.pdf">*https://www.kotak.com/content/dam/Kotak/investor-relation/Financial-Result/QuarterlyReport/FY-2023/q4/Investor-Presentation/Q4FY23-Investor-Presentation.pdf</a>
                    <p class="pl-0 space-2"><b>Get 1.5 Crore Life Cover @₹25/day<sup>*</sup>Disclaimer:</b></p>
                    <p class="pl-0">*The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.1.5 Crore. The per day premium is Rs.25 [Rs. 9,150 Annualized Premium / 365 days = Rs. 25.07].</p>
                    <p class="pl-0 space-2"><b>Get 2 Crore Life Cover @₹33/day<sup>*</sup>Disclaimer:</b></p>
                    <p class="pl-0">≈The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.2 Crore. The per day premium is Rs.33 [Rs. 12,200 Annualized Premium / 365 days = Rs. 33.42].</p>
                    <p class="pl-0 space-2"><b>Get ₹2 Crore Life Cover @₹30/day* Disclaimer:</b></p>
                    <p class="pl-0">≈The above illustration is for an 18-year-old healthy male, non-smoker who has opted for the Life Option with a 40-year policy term with regular premium payment mode, Level Recurring Payout Option and Sum Assured on Death of Rs.3 Crore. The per day premium is Rs.35 [Rs. 12,900 Annualized Premium / 365 days = Rs. 35.34].</p>
                    <p class="pl-0">The Above premium figures are exclusive of Goods and Services Tax and cess. Goods and Services Tax and Cess thereon, shall be charged as per the prevalent tax laws over and above the said premiums. The channel selected is Online.</p>
                    <p class="pl-0"><b>Kotak e-Term:</b>UIN:107N129V02, Form No: N104, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No: B002, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form No: B020. This is a non-participating pure protection plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
                    <p class="pl-0"><b>Kotak Protect India</b>- UIN: 107N130V01, Form No: N130. This is a non-participating, pure protection, life insurance plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                    <p class="pl-0"><b>Kotak Term Plan:</b>UIN:107N005V06, Form No: N005, Kotak Accidental Death Benefit Rider UIN: 107B001V03, Form No: B001, Kotak Permanent Disability Benefit Rider UIN: 107B002V03, Form No: B002, Kotak Critical Illness Plus Benefit Rider UIN: 107B020V01, Form No: B020. This is a non-unit linked, non-participating, term plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale. For more details on riders please read the Rider Brochure.</p>
                    <p class="pl-0"><b>Kotak Saral Jeevan Bima:</b>UIN:107N120V01, Form No: N120. This is a Non-Linked Non-participating Individual Pure Risk Premium Life Insurance Plan. For more details on risk factors, terms and conditions, please read sales brochure carefully before concluding a sale.</p>
                    <p class="pl-0 space-2"><b>Terms and Conditions:</b></p>
                    <p class="pl-0">The Above premium figures are exclusive of Goods and Services Tax and cess. Goods and Services Tax and Cess thereon, shall be charged as per the prevalent tax laws over and above the said premiums.</p>
                    <p>*Get your premiums back through Special Exit Value, under your policy, if your policy term is:</p>
                    <p>40 years: Earlier of 25th policy year OR during the policy year, when you attain 60 years</p>
                    <p>> 40 years: Earlier of 30th policy year OR during the policy year, when you attain 60 years</p>
                    <p>5% Dsicount on Salary Infographic Disclaimer:</p>
                    <p>The 5% discount is only on the first year of the policy</p>
                    <p>**Free Medical Checkup every 5th year starting from 5th policy year onwards</p>
                    <p>Tax benefit is applicable as per the Income Tax Act, 1961. Tax laws are subject to amendments from time to time. Customer is advised to take an independent view from tax consultant.</p>
                    <p class="pl-0 space-2"><b>Section 41-</b></p>
                    <p class="pl-0">Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: (1) No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. (2) Any person making default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.</p>
                    <p class="pl-0 space-2"><b>Section 45-</b></p>
                    <p class="pl-0">Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details: Read more about section38_39_45_of_insurance_act_1938.</p>
                    <p class="pl-0 space-2"><b>Regd. Office:</b></p>
                    <p class="pl-0">Kotak Mahindra Life Insurance Company Ltd. Reg No. 107 | CIN: U66030MH2000PLC1285038th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai – 400051 | Toll Free: 1800 209 8800 (8 am to 10 pm) | Website: https://www.kotaklife.com | Email: kli.in/WECARE Ref No: KLI/23-24/E-WEB/1958</p>
                    <p class="pl-0 space-2"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS /FRAUDULENT OFFERS</b></p>
                    <p class="pl-0">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
                    <p class="pl-0">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Ltd. under license.</p>
                </div>
            </div>
        </section>


        <?php if($actual_link_url=='https://kli-uat.irepo.in/insurance-guide/protection/term-insurance-maturity-benefits'){?>
  <div class="reddiv">
    <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm/?utm_source=organic&utm_medium=website&utm_campaign=blog_nudge&utm_content=what-happens-to-term-insurance-after-maturity" class="buysticky">Secure Your Future Now!</a>
  </div>
       <?php  }else if($actual_link_url=='https://kli-uat.irepo.in/insurance-guide/protection/what-happens-to-term-insurance-after-maturity'){?>
           <div class="reddiv">
           <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm/?utm_source=organic&utm_medium=website&utm_campaign=blog_nudge&utm_content=what-happens-to-term-insurance-after-maturity" class="buysticky">Plan Ahead with Kotak e-Term</a>
         </div>
     <?php  }?>

			

  
 <?php  if ($category != 'savingstax') { ?>
  
          <?php }else{ ?>
           
		   <section class="consumer saving-token top-0">
      <div class="midWrapper">
         <h3 class="ls1 simi-txt desktop-hide">- A Consumer Education Initiative series by Kotak Life</h3>
		    <div class="product-tokens">
        <div class="tokens"> 
          <div class="tokenImg">
            <img class="showFill" src="assets/images/blogs/kotak_gurantee_fortune_builder_fill.svg" alt="Kotak Guaranteed Fortune Builder" />
            <img class="showUnfill" src="assets/images/blogs/kotak_gurantee_fortune_builder.svg" alt="Kotak Guaranteed Fortune Builder" />
          </div>
          <h4>Kotak Guaranteed  Fortune Builder</h4>
          <p>Guaranteed Income for bright  financial future</p>
          <?php 
          $articleTiitles="";
          $articleTitle = ltrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-');
          $articleTiitles = rtrim($articleTitle);
          ?>
          <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=blogtoken&utm_content=<?php echo $articleTiitles?>"
            class="tokensInvest" target="_blank">Invest Now</a>
        </div>

        <div class="tokens">
          <div class="tokenImg">
            <img class="showFill" src="assets/images/blogs/kotak_assured_savings_plan_fill.svg" alt="Kotak Assured Savings Plan" />
            <img class="showUnfill" src="assets/images/blogs/kotak_assured_savings_plan.svg" alt="Kotak Assured Savings Plan" />
          </div>
          <h4>Kotak Assured Savings  Plan</h4>
          <p>Guaranteed Lumpsum returns for achieving life goals </p>
          <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blogtoken&utm_content=<?php echo $articleTiitles;?>" class="tokensInvest" target="_blank">Invest Now</a>
        </div>

        <div class="tokens">
          <div class="tokenImg">
            <img class="showFill" src="assets/images/blogs/kotak_gurantee_savings_plan_fill.svg" alt="Kotak Guaranteed Savings Plan" />
            <img class="showUnfill" src="assets/images/blogs/kotak_gurantee_savings_plan.svg" alt="Kotak Guaranteed Savings Plan" />
          </div>
          <h4>Kotak Guaranteed Savings Plan</h4>
          <p>Achieve your long-term  goals and get life cover </p>
          <!-- <a href="https://www.kotaklife.com/buy-kotak-guaranteed-fortune-builder/#/landing?utm_source=kgfb_organic&utm_medium=website&utm_campaign=blogtoken&utm_content=<?php echo $articleTiitles;?>" class="tokensInvest" target="_blank">Invest Now</a> -->
          <a href="https://www.kotaklife.com/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blogtoken&utm_content=<?php echo $articleTiitles;?>" class="tokensInvest" target="_blank">Invest Now</a>
           
        </div>
      </div>
               </div>
                 </section>

                 <?php }?>
                  
          <!-- Vinoth new end code-->
          
 
  <script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js"></script>

  <script>
/*function savingTab(evt, prodCard){
    var i, blogaside, mobprod;
    blogaside = document.getElementsByClassName('blogaside');
    for(i=0; i<blogaside.length; i++){
        blogaside[i].style.display="none";
		
    }
    
    mobprod = document.getElementsByClassName('mobprod');
   
    for(i=0; i<mobprod.length; i++){
        mobprod[i].className = mobprod[i].className.replace(" active", "");
    }

	
    document.getElementById(prodCard).style.display = "block";
    evt.currentTarget.className += " active";
 

}      */




//function savingTab(evt, prodCard){
/*    var i, blogaside, mobprod, active;
    blogaside = document.getElementsByClassName('blogaside');
    for(i=0; i<blogaside.length; i++){
        blogaside[i].style.display="none";
    }
    
    mobprod = document.getElementsByClassName('mobprod');
    
    for(i=0; i<mobprod.length; i++){
        mobprod[i].className = mobprod[i].className.replace(" active", "");
    }
    
    
    document.getElementById(prodCard).style.display = "block";
    evt.currentTarget.className += " active";*/
    
 
    
var assutedPlan = document.getElementById('assutedplan'),
    popupBox = document.getElementById('assutedplanbox'),
    newblock = document.getElementsByTagName('body');

assutedPlan.onclick = function () {
    if (popupBox.style.display === 'block') {
        popupBox.style.display = 'none';
        assutedPlan.classList.remove('active');
    } else {
        popupBox.style.display = 'block';
           assutedPlan.classList.add('active');
        guaranteedPlan.classList.remove('active');
         popupBoxTwo.style.display = 'none';
    }
	
}


var guaranteedPlan = document.getElementById('guaranteedplan'),
    popupBoxTwo = document.getElementById('guaranteedplanbox'),
    newblock = document.getElementsByTagName('body'); 
guaranteedPlan.onclick = function () {
    if (popupBoxTwo.style.display === 'block') {
        popupBoxTwo.style.display = 'none';
        guaranteedPlan.classList.remove('active');
         assutedPlan.classList.remove('active');
       
    } else {
        popupBoxTwo.style.display = 'block';
          assutedPlan.classList.remove('active');
          guaranteedPlan.classList.add('active');
         popupBox.style.display = 'none';
    }
}
//}    
$(document).ready(function() {
    // Validate the form
    $("#myform").validate({
        rules: {
            name: {
                required: true,
                pattern: /^[a-zA-Z](?!.*\s{2})[a-zA-Z\s.]{0,28}[a-zA-Z.]$/
            },
            number: {
                required: true,
                pattern: /^[0-9]{10}$/
            },
            email: {
                required: true,
                pattern: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
            },
            state: {
                required: true
            },
            date: {
                required: true
            },
            gender: {
                required: true
            },
            tobacco: {
                required: true
            },
            checkbox: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter a valid name",
                pattern: "Please enter full name"
            },
            state: "Please select a state",
            date: "Please enter a valid date of birth",
            number: {
                required: "Please enter a valid mobile number",
                pattern: "Please enter a valid mobile number"
            },
            email: {
                required: "Enter your email address",
                pattern: "Enter a valid email address"
            },
            gender: "Please select your gender",
            tobacco: "Please select the field",
            checkbox: "Please check this box"
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") == "checkbox") {
                error.appendTo("#checkbox-error-container");
            } else if (element.attr("name") == "gender") {
                error.appendTo("#gender-error-container");
            } else if (element.attr("name") == "tobacco") {
                error.appendTo("#tobacco-error-container");
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            // Get user-entered data
            var name = $("#name").val();
            var number = $("#number").val();
            var email = $("#email").val();
            var state = $("#state").val();
            var date = $("#date").val();
            var gender = $("input[name='gender']:checked").val();
            var tobacco = $("input[name='tobacco']:checked").val();
            var annual_income = $("#annual_income").val();
            var quote_id = getDynamicQuoteId(); // Implement logic to get dynamic quote_id
            var prospect_id = getDynamicProspectId(); // Implement logic to get dynamic prospect_id
            var premium = getDynamicPremium(); // Implement logic to get dynamic premium

            // Push the first dataLayer event
            dataLayer.push({
                event: 'KLI Gen2Gen-Protect Marketing Page',
                age: calculateAge(date), // Calculate age from date of birth
                gender: gender,
                tobacco: tobacco,
                annual_income: annual_income,
                quote_id: quote_id,
                prospect_id: prospect_id,
                category: 'KLI Gen2Gen-Protect Marketing',
                action: 'Proceed',
                label: 'Lead'
            });

            // Push the second dataLayer event
            dataLayer.push({
                event: "add_to_cart",
                ecommerce: {
                    currency: "INR",
                    value: premium,
                    items: [
                        {
                            item_id: "1234", // Replace with actual item ID
                            item_name: "Gen2Gen-Protect Marketing",
                            item_category: "Term Insurance",
                            item_category2: "Gen2Gen-Protect Marketing"
                        }
                    ]
                },
                price: premium,
                quote_id: quote_id,
                gender: gender,
                age: calculateAge(date),
                tobacco_user: tobacco,
                city: "Mumbai", // Replace with actual city if available
                annual_income: annual_income
            });

            form.submit();
        }
    });

    // Helper function to calculate age from date of birth
    function calculateAge(date) {
        var birthDate = new Date(date);
        var age = new Date().getFullYear() - birthDate.getFullYear();
        var monthDifference = new Date().getMonth() - birthDate.getMonth();
        if (monthDifference < 0 || (monthDifference === 0 && new Date().getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    }

    // Helper functions to get dynamic data
    function getDynamicQuoteId() {
        // Implement logic to get dynamic quote_id
        return "some_quote_id";
    }

    function getDynamicProspectId() {
        // Implement logic to get dynamic prospect_id
        return "some_prospect_id";
    }

    function getDynamicPremium() {
        // Implement logic to get dynamic premium
        return 12000;
    }
});


    // Trigger validation on input change for the number field
    $('#number').on('input', function () {
        $('#myform').validate().element($(this));
    });

    // Trigger validation on change for other fields if needed
    $('.single-select, #date').on('change', function () {
        var elementName = $(this).attr('name');
        $('#myform').validate().element("[name='" + elementName + "']");
    });
});
</script>
<script>
var scrollAmount = 95;

$(window).on("scroll", function () {
  if ($(window).scrollTop() >= scrollAmount && !$("#assutedplanSticky").hasClass("mobile-product-fixed")) {
    $("#assutedplanSticky").addClass("mobile-product-fixed");
  } else if (
    $(window).scrollTop() < scrollAmount &&
    $("#assutedplanSticky").hasClass("mobile-product-fixed")
  ) {
    $("#assutedplanSticky").removeClass("mobile-product-fixed");
      
  }
}); 

 
    
</script>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        var acc = document.getElementsByClassName("collapsible");
        for (var i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }

        const imageObserver = new IntersectionObserver((entries, imgObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                }
            });
        });
        const arr = document.querySelectorAll('img.lzy_img');
        arr.forEach((v) => {
            imageObserver.observe(v);
        });
    });
</script>
