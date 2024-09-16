<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php $actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  ?>

 <style>

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
     
     .product_head{display: none;}
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


    </style> 
 <section class="best-invest">

		
         <div class="blog-bradcrumb clearfix">
         <?php include_once("insurance_guide_detail_breadcrum.php");?>
		</div>

       
         <?=$contents?>
		
  </section>


 
