<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome-4.7.0.min.css">
<?php $actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
$fullurl=$actual_link_url;
$fullurl1 =$latest_slug; //substr($fullurl, strrpos( $fullurl, '/' )+1);
 ?>
<style>
 .best-invest #topic1 a{color:#da251c !important;}
 .blog-faq{margin-top:5rem !important;}
   .bor-top-zero p{float: left; width: 20px !important; margin-left: 0;}
      .bor p{margin: 0 !important;}
      .bor .tab-detail p{margin-left:  20px !important;}
      .bor .tab-detail p:last-child{ padding-bottom: 20px !important;}
      .accordion.bor-top-zero{border-top: 1px solid #c7c7c7 !important;  padding:10px 0;}
      .accordion-btns span{font-weight: 600;}
	  .bor:last-child{margin-bottom:3rem;}
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
	.best-invest{top:160px;}
	.blog-detail{margin-top:2rem;}
	.blog-body-content #topic1 ul{background:none; border-left:0; padding:0;}
	.blog-body-content #topic1 .bullet-pink{background-color:#fff7f6; padding:20px; border-left:1px solid #ed3237;}
	.blog-body-content #topic1 .bullet-blue{background-color:#eff8ff; padding:20px;}
	
	.blog-body-content .feats-want a{text-decoration:none;}
	.blog-body-content .bg-eterm{align-items:inherit;}
	.blog-body-content .bg-eterm .broch-btn{top:18px}
	.blog-body-content  .w-161{width:161px; margin-bottom:10px;}
	.blog-body-content p{margin-bottom:20px;}
	.protectiongsp .bg-eterm {padding-top:20px;}
	.protectiongsp .bg-eterm img{width:161px;}
	.protectiongsp .bg-eterm .broch-btn img{width:100% !important;}
	.protectiongsp .feats-sec {padding-left:28px !important;}
	.protectiongsp .feats-sec ul{padding-top:0;}
	#topic1 a.redBtn{font-size:14px; color:#fff;}
	#topic1 a.redBtn:hover{color:#fff;}
	#topic1 h3{text-transform:capitalize;}
	#topic1 h4{font-size:16px;padding-bottom:8px;}
	.kotak-eterm-plan-popup{margin:2rem 0;}
	#topic1 h2 .space, #topic1 h3 .space, #topic1 h4 .space{padding-right:5px;}
	#topic1 table tr p{margin-bottom:0 !important;}

		
		@media screen and (max-width: 768px) {
		.blogaside .feats-sec li{margin-bottom:6px !important;}
		.blog-body-content .feature-want-more a{width:91% !important; padding:9px 0 !important; }
		}
		
		@media screen and (max-width: 480px) {
          
			.blog-body-content .kotak-e-term-plan{display:none;}
			 #topic1 p{width:100%; float:left;}
				.blogaside .feats-sec li .fa-size{padding:4px 1px 0 6px; width:24px; height:24px;}
				.blogaside .feats-sec li .fa-check:before{font-size:12px;}
				.blogaside .feats-sec h3{text-align:left;}
				.blogaside .feats-sec{padding-left:20px !important;}
				.blogaside .feats-sec li{text-align:left;}
				.blogaside .feats-sec a{width:100% !important;}
				.blogaside .feats-want a{text-transform:capitalize !important;}
				.guaranteedplan:before{right:90px; content:'';}
				.assutedplan:before{left:90px; content:'';}
				
		}
		 .mobile-tab{display: flex;     border-radius: 12px;  width: 100%; background-color: #e3e3e3;
  }
      .mobile-product{color: #000; font-size: 15px;font-weight: 600; padding: 10px 25px; width:100%; border-right:1px solid #bfbebe;}
	  .mobile-product:focus{color: #000; }
      .mobile-product.active{background: #ed3237; color: #fff; border-radius: 10px;}
	   .mobile-product:last-child{border-right:none;}
	   .best-invest #topic1 li, .best-invest #topic1 p{margin-bottom:10px;}
	   .best-invest #topic1 p img{margin-top:20px; margin-bottom:10px;}
	   .best-invest #topic1 p .space{padding-right:5px;}
	   .best-invest #topic1 h3, .best-invest #topic1 h4{margin-top:20px;}
	  .best-invest #topic1 tr td{padding-top:10px !important; padding-bottom:10px !important;}
	  .best-invest #topic1 table{margin-top:20px;}


      /* ashwini reddy mobile buy onlie sticky button css */
      @media screen and (max-width: 480px) {
            .buysticky{position: fixed;
        bottom: 0;
        font-size: 25px;font-family: Lato-Regular, Arial, Helvetica, sans-serif;
        display: block;color:#fff;font-weight: 400;
        width: 100%;
        background:#da251c ;}
        .reddiv{text-align: center;}
        .rhsFixed_nav{display: none;}
      }



      #bottomStickyProduct {
  z-index: 2;
}

.bottomNavProduct {
  background-color: #FFF;
  width: 100%;
  margin: 0 auto;
  padding: 5px 20px;
  border-radius: 10px 10px 0px 0px;
  box-shadow: 0px 3px 99px #00000029;
  text-align: center;
  transform: translate(-50%, 0);
  display: none;
}

.fixed-bottom {
  position: fixed;
  bottom: 0;
  left: 50%;
  display: block;
}

.bottomNavProduct h3 {
  font-size: 18px;
  font-weight: 500;
  color: #003366;
  letter-spacing: 0.3px;
}

.productPage-cta a {
  border: 1px solid #003366;
  color: #003366;
  padding: 8px 30px !important;
  border-radius: 25px;
  display: inline-block;
  text-align: center;
  width: auto;
  font-weight: 500;
  margin-top: 2rem;font-family: 'Lato-Regular';
  font-size: 16px;
  position: relative;
  overflow: hidden;
  letter-spacing: 0.3px;
  transition: all .3s ease-in-out;
}

.productPage-cta a:hover {
  color: #FFF;
  background-color: #003366;
}

.productPage-cta1 a {
  background: transparent linear-gradient(90deg, #82772D 0%, #C1CD23 100%) 0% 0% no-repeat padding-box;
  color: #FFF;
  padding: 8px 30px !important;
  border-radius: 25px;
  display: inline-block;
  text-align: center;
  width: auto;
  font-weight: 500;
  margin-top: 2rem;
  font-size: 16px;
  position: relative;font-family: 'Lato-Regular';
  overflow: hidden;
  letter-spacing: 0.3px;
}

.productPage-cta1 a::before {
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

.productSticky-grid {
  display: grid;
  grid-template-columns: 50% 50%;
  align-items: center;
  max-width: 1150px;
  margin: 0 auto;
}

.customerCare p {
  font-size: 16px;
  font-weight: 500;
  color: #000;
  text-align: left;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;font-family: 'Lato-Regular';
    font-weight: 400;
}

.customerCare p img {
  width: 35px;
  height: 35px;
}

.customerCare p a {
  color: #003366;
  text-decoration: underline;
  text-underline-offset: 3px; font-family: 'Lato-Bold';
}

.customerCare p .downloadBrochure {
  color: #C41425 !important;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;font-family: 'Lato-Regular';
}

.dflexP {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
}

.dflexS {
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 25px;
}

@media only screen and (max-width:480px) {
  #bottomStickyProduct {
    display: none;
  }
}
        /* ashwini reddy mobile buy onlie sticky button css */

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
.new-termsspace{padding: 204px 0 0 !important;}
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

.check-bg ul li a:before {
    position: absolute;
    content: '';
    background-repeat: no-repeat;
    background-size: contain;
    width: 19px;
    height: 42px;
    top: 15px;
    right: 0;
    background-image: url('assets/images/rightarrowblack.svg') !important;
}
.check-bg ul li:hover a:before {
    background-image: url('assets/images/red-rightarrowblack-svg.svg') !important;
}

    </style> 
 <section class="best-invest">

		
         <div class="blog-bradcrumb clearfix">
         <?php include_once("insurance_guide_detail_breadcrum.php");?>
		</div>

        <?php $know_more_linkprot =$title=''; foreach($alsoReadArticlesInfo as $article) {
                        $category = $article->topic_url_title;
                    }
					$blogTitles =$article_titles="";
						$blogTitle1 = ltrim((strtolower(str_replace(' ','-',str_replace('?','',$blogTitle)))),'-');
							$blogTitles = $article_titles=rtrim($blogTitle1);
					?>

           <section class="blog-head">
		  
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
                              <li><?php echo number_format($articlesInfo->viewed_counts); ?> Views | Updated on: <?php echo date(BLOG_DATE_FORMAT, $dateModified); ?></li>
                           
                          </ul>
                              </div>
                          </div>
                         
						  
						  <?php $article_title1 = ltrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-');
							$article_title = rtrim($article_title1);?>
                          <div class="ulip-btn">
                          <?php $buttonurl='';$fulllanding=$utm_source=''; if($articlesInfo->button_text_1!=''){
                         $fulllanding=$buttonurl = $articlesInfo->button_text_url1;

if (strpos($buttonurl, 'buy-online-term-insurance') !== false) {
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
    $utm_source="kasp";
    $explodecta=explode('utm_source=', $buttonurl);
    $fulllanding=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
} elseif (strpos($buttonurl, 'buy-kotak-guaranteed-fortune-builder/#/landing') !== false) {
    $buttonurl = str_replace('buy-kotak-guaranteed-fortune-builder/#/landing', 'life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder', $buttonurl);
    $utm_source="kgfb";
    $explodecta=explode('utm_source=', $buttonurl);
    $fulllanding=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
} elseif (strpos($buttonurl, 'buy-annuity-plan/#/landing') !== false) {
    $buttonurl = str_replace('buy-annuity-plan/#/landing', 'buy-annuity-plan/#/landing', $buttonurl);
    $utm_source="Annuity_organic";
    $explodecta=explode('utm_source=', $buttonurl);
    $fulllanding=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
}

?>

<a class="redBtn" href='<?=$fulllanding?>' target="_blank" onclick="dataLayer.push({'event': 'event <?=$CategoryName?>', 'category': 'new customers', 'action': '<?=$CategoryName?>', 'label': '<?=$CategoryName?>'});"><?=$articlesInfo->button_text_1?></a>
<?php 
        }
         $buttonurl1=$fulllanding1=''; if($articlesInfo->button_text_2!=''){
          $fulllanding1=$buttonurl1 = $articlesInfo->button_text_url2;

          if (strpos($buttonurl, 'buy-online-term-insurance') !== false) {
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
            $buttonurl1 = str_replace('buy-annuity-plan/#/landing', 'buy-annuity-plan/#/landing', $buttonurl1);
            $utm_source="Annuity_organic";
            $explodecta=explode('utm_source=', $buttonurl);
            $fulllanding1=$explodecta[0]."utm_source=$utm_source&utm_medium=website&utm_campaign=blog_cta&utm_content=$fullurl1";
        }

?>
<a class="redBtn" href='<?=$fulllanding1?>' target="_blank" onclick="dataLayer.push({'event': 'event <?=$CategoryName?>', 'category': 'new customers', 'action': '<?=$CategoryName?>', 'label': '<?=$CategoryName?>'});"><?=$articlesInfo->button_text_2?></a>
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
                               <ul class="social__icons share-ul d-flex hide-mobile">
                                 
                                  <li><a class="fb" href="https://www.facebook.com/sharer.php?t=<?=$article_titles?>" data-title="Think About Life Insurance Sooner than Later" data-image="https://kotaklife.com/assets/images/uploads/insurance-guides/articles/Be-prepared-against-death-disability-and-disease4.jpg" data-desc="Getting life insurance early gives many benefits like lower premium, provides a reliable asset, tax benefits and helps your family in uncertain times. Click here to know more why you should buy life insurance now"><span class="fa f_b fa-facebook"></span></a></li>
                                  <li><a class="twt" href="https://twitter.com/share?text=<?=$article_titles?>&url=<?=$actual_link_url?>&via=KLI" data-title="Think About Life Insurance Sooner than Later" data-desc="Getting life insurance early gives many benefits like lower premium, provides a reliable asset, tax benefits and helps your family in uncertain times. Click here to know more why you should buy life insurance now"><span class="fa twit fa-twitter"></span></a></li>
                                  <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?=$actual_link_url?>"><span class="fa linkedin fa-linkedin"></span></a></li>
                                  <li><a href="https://api.whatsapp.com/send?text=<?=$actual_link_url?>&t=<?=$article_titles?>" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                              </ul>
                          </div>
                      </div>
			</div>
		   </section>
		   <section class="blog-body-content">
              <div class="midWrapper">
          <div class="row brdr_bttm">
          <div class="col-md-7 pr-blog">
                 
                 <!--End New code -- 26/09/23 -->
                 
                 
                  <span id="topic1">
                     <?php echo $articlesInfo->description; ?></span>

                   <div class="consumer consumer-text hide-mobile pb-0">
     
          <h3 class="ls1"> - A Consumer Education Initiative series by Kotak Life</h3>
                  </div>
                  <?php  if($articlesInfo->reviewwritten=='Yes'){
                   if($writters){?>
                 <div class="authorBox authornew">
              <div class="authorDetails">
              <?php 
                foreach($writters as $writter){
                  
                    $image=	str_replace('{filedir_7}', 'themes/ee/site/default/asset/img/common/_thumbs/', $writter->image); 

                  ?>
                  <div class="blogsTooltip">
                  <div class="authorName">
                    <div class="authorImg">
                      <img src="<?=$image?>" alt="Amit Raje" />
                    </div>
                    <div class="nameTitle">
                      <div>
                        <!--<img src="assets/images/contract.png" alt="Written By" />-->
                       <?=$writter->asfield?> : <br>
                      </div>
                      <b class="nameTag"> <?=$writter->name?> </b>
                    </div>
                  </div>
                  <span class="tooltiptext">
                    <?=$writter->description?>
                  </span>
                </div>


               <?php  }}?>
             
               </div>
               </div>
                <?php
              }?>
              </div>
            
			  
                <div class="col-md-6">

                 

                  <div class="kotak-e-term-plan new_kotak_eterm">
                      <div class="d-flex bg-eterm">
                          <div>
                          <?php $title = 'Kotak e-Term ';$title1 = 'Kotak e-Term';
                        $brochure_link = base_url().'assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Life Cover till 85 years for Life & Life Secure Option</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>3 Payout Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Women</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Option to exit the policy with premium refund at the age of 60*</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Non-Tobacco Users</span></li>
							  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Free Medical Check Up every 5th year**</span></li>
                          </ul>';
                        $know_more_link = base_url().'online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance/kotak-e-term?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link = 'https://www.kotaklife.com/life-insurance-plans/buy-kotak-eterm/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.$blogTitles;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/2435';?>
                              <p class="product_head"><?php echo $title ?></p>
							  
							  
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
                       
                          
                          <?php echo $features; ?>
                     
                          <div class="feats-want feature-want-more">
                              <a target="_blank" href="<?php echo $know_more_link?>" >Want to Know More?</a>
                          </div>
                          <div class="feats-buy text-center">
                              <!--https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=card-->
                              <a  target="_blank" href="<?php echo $buy_plan_link ?>" >Invest NOW</a>
                          </div>
                        
            
                          <div class="d-flex mt-20">
                              <div>
                                  <p class="p-ref"><?php echo $ref_no; ?></p>
                              </div>
                              <div class="ml-auto">
                                  <!--<?php //echo base_url(IG_MODULE_LINK.'/'.$category.'/insurance_guide_article_details'); 
                                        ?>-->
										  <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/protection/termsconditions">T&C</a></p>
										
							 </div>
                          </div>
                      </div>
                  </div>


				  
                  <div class="kotak-e-term-plan mb-100 protectiongsp">
               
                      <div class="d-flex bg-eterm">
                          <div>
                           <?php                                 $title2 = 'Kotak Gen2Gen Protect';
                    $brochure_link1 = base_url().'assets/images/uploads/insurance-plans/Kotak_Gen2Gen_Protect.pdf';
                        $features1 = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Get Return of Premium</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Two Plan Options: Life ROP Option and Legacy ROP Option</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Dual Generation Plan: Cover two generations under one single plan with Transfer of
                  Life Cover under Legacy ROP Option</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Additional Death Benefit of 5% applicable for Female Lives</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Enhanced Protection with Riders</span></li>
				
                          </ul>';
                       
                          $know_more_linkprot1 = base_url().'term-insurance/kotak-gen2gen-protect';
                        
                        $buy_plan_link1 = base_url()."life-insurance-plans/#/buy-kotak-gen2gen-protect?utm_source=organic&utm_medium=website&utm_campaign=product_card";
                        $ref_no1 = 'Ref. No. KLI/22-23/E-BB/490';
                       ?>
                              <p class="product_head"><?php echo $title2 ?></p>
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
                          <div class="feats-want feature-want-more">
                              <a target="_blank" href="<?php echo $know_more_linkprot1?>" >Want to Know More?</a>
                          </div>
                         
                          <div class="feats-buy">
                             
                              <a href="<?php echo $buy_plan_link1 ?>" >BUY NOW</a>
                          </div>
                          <div class="d-flex mt-20">
                              <div>
                                  <p class="p-ref"><?php echo $ref_no1; ?></p>
                              </div>
                              <div class="ml-auto">
                            
                                  <p class="p-tc"> <a target="_blank" href="<?=base_url()?>insurance-guide/gen2gen/termsconditions">T&C</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  
                  <?php 
                 
                  if (count($alsoReadArticlesInfo)) { ?>
                    <div class="also-read">
                        <h3>Also read</h3>
                        <ul class="alsoRead-list">
                            <?php foreach ($alsoReadArticlesInfo as $article) { ?>
                                <li> <a href="<?php echo base_url(IG_MODULE_LINK . '/' . $article->topic_url_title . '/' . $article->url_title); ?>"><?php echo $article->article_title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?> 

                <!--NEW SECTION-->

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
                 <div  class="check-calculators">
                    <div class="check-bg">
                      <h3 class="check">Term Insurance Bookmarks</h3>
                      <ul>
                        <li><a href="https://www.kotaklife.com/term-insurance">Term Insurance</a></li>
                      <li><a href="https://www.kotaklife.com/term-insurance/what-is-term-insurance">What is Term Insurance?</a></li>
                      <li><a href="https://www.kotaklife.com/term-insurance/1-crore-term-insurance">1 Crore Term Insurance</a></li>
                      <li><a href="https://www.kotaklife.com/term-insurance/term-plan-with-return-of-premium">Term Plan with Return  of Premium</a></li>
                      <li><a href="https://www.kotaklife.com/term-insurance/claim-settlement-ratio">Claim Settlement Ratio</a></li>
                      <li><a href="https://www.kotaklife.com/term-insurance/75-lakh-term-insurance">75 Lakh Term Insurance</a></li>
                      <li><a href="	https://www.kotaklife.com/term-insurance/50-lakh-term-insurance">50 Lakh Term Insurance</a></li>
                      <li><a href="https://www.kotaklife.com/term-insurance/20-year-term-insurance">20 Year Term Insurance</a></li>
                      <li><a href="https://www.kotaklife.com/term-insurance/term-insurance-for-smokers">Term Insurance for Smokers</a></li>
                      <li><a href="https://www.kotaklife.com/term-insurance/zero-cost-term-insurance">Zero Cost Term Insurance</a></li>
                      <li><a href="https://www.kotaklife.com/term-insurance/whole-life-insurance">Whole Life Insurance</a></li>
                      <li><a href="https://www.kotaklife.com/term-insurance/critical-illness">Critical Illness Term Insurance</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/protection/term-insurance-vs-life-insurance">Term Insurance vs Life Insurance</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/protection/what-is-joint-term-insurance-plan-key-benefits-of-joint-term-plan">Joint Term Insurance</a></li>
                      <li><a href="	https://www.kotaklife.com/term-insurance/term-insurance-benefits">Term Insurance Benefits</a></li>

                      </ul>


                    </div>
                  </div>

                  <div  class="check-calculators">
                    <div class="check-bg">
                      <h3 class="check">ULIP Bookmarks</h3>
                      <ul>
                        <li><a href="https://www.kotaklife.com/ulip-plans/what-is-ulip-plan">What is ULIP</a></li>
                      <li><a href="https://www.kotaklife.com/ulip-plans">ULIP Plans</a></li>
                      <li><a href="https://www.kotaklife.com/ulip-plans/ulip-returns-in-5-years">ULIP Returns in 5 Years</a></li>
                      <li><a href="https://www.kotaklife.com/ulip-plans/how-ulip-works">How ULIP Works</a></li>
                      <li><a href="https://www.kotaklife.com/ulip-plans/ulip-vs-mutual-fund">ULIP Vs Mutual Fund</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/wealth-creation/charges-in-ulip-you-must-know">ULIP Charges</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/wealth-creation/ulip-tax-benefits">ULIP Tax Benefits</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/wealth-creation/advantages-and-disadvantages-of-ulip">ULIP Advantages And Disadvantages</a></li>

                      </ul>
                    </div>
                  </div>

                  <div  class="check-calculators">
                    <div class="check-bg">
                      <h3 class="check">Savings Bookmarks</h3>
                      <ul>
                        <li><a href="https://www.kotaklife.com/savings-plan/what-is-savings-plan">What is a savings plan?</a></li>
                      <li><a href="https://www.kotaklife.com/savings-plan">Savings Plan</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/1-crore-investment-plan">1 crore savings plan</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/15-lakh-investment-plan">15 lakh savings plan</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/savingstax/tax-savings-investment-schemes-and-options-in-india">Tax Saving Investment</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/savingstax/popular-tax-saving-schemes-in-india">Tax Saving Schemes</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/savingstax/interest-on-savings-account-taxable">Tax on Savings Account Interest</a></li>

                      </ul>
                    </div>
                  </div>
                  <div  class="check-calculators">
                    <div class="check-bg">
                      <h3 class="check">Retirement and Pension Bookmarks</h3>
                      <ul>
                        <li><a href="https://www.kotaklife.com/insurance-guide/retirement/types-of-retirement-plans">Types of Retirement Plans</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/retirement/what-is-annuity">What is Annuity</a></li>
                      <li><a href="https://www.kotaklife.com/retirement-and-pension-plans">Retirement and Pension Plans</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/retirement/importance-of-retirement-planning">Importance of Retirement Planning</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/retirement/how-to-build-a-tax-free-pension-income-for-retirement">Types of Pension Plans</a></li>
                      <li><a href="https://www.kotaklife.com/retirement-and-pension-plans/annuity-in-nps">Annuity in NPS</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/retirement/what-is-superannuation-its-benefits">What is Superannuation</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/retirement/what-is-ppo">What is PPO</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/retirement/how-does-nps-work">How does NPS work</a></li>
                      <li><a href="https://www.kotaklife.com/insurance-guide/retirement/a-beginners-guide-to-understanding-401k-retirement-plan">401(k) Retirement Plan</a></li>




                      </ul>
                    </div>
                  </div>
                  <div  class="check-calculators">
                    <div class="check-bg">
                      <h3 class="check">Investment Bookmarks</h3>
                      <ul>
                        <li><a href="https://www.kotaklife.com/investment-plans/5-years-investment-plan">5 Year Investment Plan</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/10-year-investment-plan">10 Year Investment Plan</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/1-crore-investment-plan">1 Crore Investment Plan</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/10-lakh-investment-plan">10 Lakh Investment Plan</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans">Investment Plans</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/recurring-deposit">Recurring Deposit</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/money-back-policy">Money Back Policy</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/one-time-investment-plan">One Time Investment Plan</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/new-fund-offering">New Fund Offering</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/short-term-investment-plans">Short Term Investment Plans</a></li>
                      <li><a href="https://www.kotaklife.com/investment-plans/long-term-investment-plans">Long Term Investment Plans</a></li>





                      </ul>
                    </div>
                  </div>

                <!---END-->

              </div>
			  <?php //}?>
          </div>
		  </section>

          
      </div>
  </section>

  <div class="reddiv">
    <a href="https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=bottom_banner" class="buysticky">Buy Online</a>
  </div>

  
  <section id="bottomStickyProduct">
        <div class="midWrapper">
          <div class="bottomNavProduct">
            <div class="productSticky-grid">
              <div class="dflexS">
                <div class="customerCare">
                  <p> 
                    <img src="/assets/images/stickybuttonimg/call.svg" alt="Customer Care" /> Customer Care:  <a href="tel:022-45811311">022-45811311</a>
                  </p>
                </div>
                <div class="customerCare">
                  <p><a class="downloadBrochure" href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf"><img src="/assets/images/stickybuttonimg/Download.svg" alt="Download" /> Download Brochure</a> </p>
                </div>
              </div>
              <div class="dflexP">
                <div class="productPage-cta" style="text-align: center;">
                  <a href="https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=productpagecta&utm_content=kotak-e-term" id="stickyTitleProduct-url" href="" style="margin: 5px 0;">Calculate Premium</a>
                </div>
                <div class="productPage-cta1" style="text-align: center;">
                  <a href="https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=productpagecta&utm_content=kotak-e-term" id="stickyTitleProduct-url" href="" style="margin: 5px 0;">Buy Term Online</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



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
      


 
  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <script>

setTimeout(function(){

var i,
      acc = document.getElementsByClassName("collapsible");
  for (i = 0; i < acc.length; i++)
      acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          var e = this.nextElementSibling;
          "block" === e.style.display ? (e.style.display = "none") : (e.style.display = "block");
      });
    },2000);

  
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 200) {
      $('.bottomNavProduct').addClass('fixed-bottom');
    } else {
      $('.bottomNavProduct').removeClass('fixed-bottom');
    }
  });
});
</script>

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
         popupBoxTwo.style.display = 'none';
           assutedPlan.classList.add('active');
        guaranteedPlan.classList.remove('active');
    }
	
}


var guaranteedPlan = document.getElementById('guaranteedplan'),
    popupBoxTwo = document.getElementById('guaranteedplanbox'),
    newblock = document.getElementsByTagName('body'); 
guaranteedPlan.onclick = function () {
    if (popupBoxTwo.style.display === 'block') {
        popupBoxTwo.style.display = 'none';
        guaranteedPlan.classList.remove('active');
       
    } else {
        popupBoxTwo.style.display = 'block';
         popupBox.style.display = 'none';
          assutedPlan.classList.remove('active');
          guaranteedPlan.classList.add('active');
    }
}




//}    




</script>


