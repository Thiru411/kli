<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome-4.7.0.min.css">
<?php $actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
$fullurl=$actual_link_url;
$fullurl1 = substr($fullurl, strrpos( $fullurl, '/' )+1);
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
                        $know_more_link = base_url().'online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance';
                        $buy_plan_link = 'https://www.kotaklife.com/life-insurance-plans/buy-kotak-eterm/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.$blogTitles;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/2435';
						 
					}else if($category == 'protection'){
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
                        $know_more_link = base_url().'online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance/kotak-e-term?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link = 'https://www.kotaklife.com/life-insurance-plans/buy-kotak-eterm/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.$blogTitles;
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
                        $know_more_link = base_url().'online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance';
                        $buy_plan_link = 'https://www.kotaklife.com/life-insurance-plans/buy-kotak-eterm/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.$blogTitles;
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
                        $buy_plan_link = 'https://www.kotaklife.com/life-insurance-plans/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/521';
                    }
                     if ($category == 'retirement') {
                        $title = 'Kotak Life Time Income Plan';$title1 = 'Kotak Life Time Income Plan';

                        $brochure_link = base_url().'assets/images/uploads/insurance-plans/kotak-lifetime-income-plan-brochure.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>6 Plan Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Tax benefits<sup> ^ </sup></span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Higher annuity rates for higher purchase price</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>
4 Annuity Modes</span></li>
                             
                          </ul>';
                        $know_more_link = base_url().'online-plans/retirement-pension-plans/kotak-lifetime-income-plan';
                        $buy_plan_link = base_url().'buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no = 'Ref. No. KLI/23-24/E-BB/1052';
                    }
                    $sapimg_link='';
                     if ($category == 'savingstax') {
                        //$title = 'Kotak e-Invest';
                        $title1 = 'Kotak Assured Savings Plan';$title2 = 'Kotak Guaranteed Savings Plan';
                        $sapimg_link = ' <img src="assets/images/assurlogo.svg" class="w-161">';
                        $brochure_link = base_url().'assets/images/uploads/insurance-plans/kotak-assured-savings-plan-brochure-23-june-2022.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Increasing Life Cover*</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Guaranteed^ Maturity Benefits</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Enhanced Protection Through Riders</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Benefits</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Dual Benefits: Guaranteed^Maturity +
                              Death benefits</span></li>
				
                          </ul>';
                          $know_more_linkprot = base_url().'insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan';
                        $buy_plan_link = base_url().'buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-');
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/999';
                     


                        $sapimg_link1 = ' <img src="assets/images/gspimg.svg" class="">';
                        $brochure_link1 = base_url().'assets/images/uploads/insurance-plans/kotak-guaranteed-savings-plan-brochure.pdf';
                        $features1 = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Enhanced Protection Through Riders</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Life Cover</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Savings</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Multiple Premium Payment Terms</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Guaranteed <sup>@</sup> Loyalty Addion</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Accrued Guaranteed <sup>@</sup> Additions</span></li>
				
                          </ul>';
                          if($articlesInfo->article_title=="3 Tips to Buy Guaranteed Savings Plan"){
                        $know_more_linkprot1="savings-plan/kotak-guaranteed-savings-plan-online";
                          }else{
                          $know_more_linkprot1 = base_url().'online-plans/savings-plan/kotak-guaranteed-savings-plan-online?utm_source=gsp_organic&utm_medium=website&utm_campaign=product_card';
                          }
                        $buy_plan_link1 = base_url().'buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no1 = 'Ref. No. KLI/22-23/E-BB/490';
                         
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
                        $buy_plan_link = 'https://www.kotaklife.com/life-insurance-plans/buy-kotak-eterm/?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.$blogTitles;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/2435';
                    }


					?>

           <section class="blog-head">
		   <div class="midWrapper">
       <div class="kotak-eterm-plan-popup">
	   <?php //if ( ($category == 'wealth-creation') || ($category == 'retirement') || ($category == 'savingstax') || ($category == 'government-schemes') || ($category == 'health-insurance')) {?>
	    <!-- <div class="mobile-tab">
            <a href="JavaScript:void(0)" id="assutedplan" onclick="savingTab(event, 'assutedplan')" class="mobile-product mobprod pop-cont"><?php echo $title1 ?></a>
           <?php if ($category == 'savingstax') { ?> <a href="JavaScript:void(0)"  id="guaranteedplan"  onclick="savingTab(event, 'guaranteedplan')" class="mobile-product mobprod pop-cont"><?php echo $title2 ?></a><?php } ?>
            </div> -->
			
			
			
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
                                <h2><?php echo $title ?></h2>
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
                            <h3>Features</h3>
                            <?php echo $features; ?> 
                            <?php if ($category != 'savingstax' && ($category != 'about-life-insurance') && ($category != 'protection')  && ($category !='health-insurance')) { ?>
                            <div class="feats-want blog-term-btn">
                                <a href="<?php echo $know_more_link?>">Want to Know More?</a>
                            </div>
                            <?php }else{ ?>
                                <div class="feats-want blog-term-btn">
                                <a href="<?php echo $know_more_linkprot?>?utm_source=kasp_organic&utm_medium=website&utm_campaign=product_card">View Kotak Assured Saving Plan</a>
                            </div>
                            <?php }?>

                            <div class="feats-buy">
                                <a href="<?php echo $buy_plan_link ?>">BUY NOW</a>
                            </div>
                            <div class="d-flex mt-20">
                                <div>
                                    <p class="p-ref">Ref. No. KLI/22-23/E-BB/492</p>
                                </div>
                                <div class="ml-auto">
                                    <!---->
                                    <?php if($category == 'retirement'){ ?>
										  <p class="p-tc"> <a target="_blank" href="https://www.kotaklife.com//insurance-guide/wealth-creation/termsconditions">T&C</a></p>
										<?php } else{?>
                                  <p class="p-tc"> <a target="_blank" href="https://www.kotaklife.com//insurance-guide/<?php echo $category ?>/termsconditions">T&C</a></p>
										<?php  }?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    
                
                
                
                
	   </div>
	   <?php /*} */?>
			<?php if ($category == 'savingstax') { ?> 
			<div class="modal-popups-btns pop-up blogaside  guaranteedplan"  id="guaranteedplanbox">
			<div class="kotak-e-term-plan">
                        <div class="d-flex bg-eterm">
                            <div>
							 
                                <h2><?php echo $title ?></h2>
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
                            <h3>Features</h3>
                            <?php echo $features1; ?> 
                            
                            <div class="feats-want blog-term-btn">
                                <a href="<?php echo $know_more_linkprot1?>">View Kotak Guaranteed Savings Plan?</a>
                            </div>
                             

                            <div class="feats-buy">
                                <a href="<?php echo $buy_plan_link1 ?>">BUY NOW</a>
                            </div>
                            <div class="d-flex mt-20">
                                <div>
                                    <p class="p-ref"><?php echo $ref_no1?></p>
                                </div>
                                <div class="ml-auto">
                                <p class="p-tc"> <a target="_blank" href="https://www.kotaklife.com//insurance-guide/<?php echo $category ?>/termsconditions?g=1">T&C</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
			
			</div>
			
			<?php } ?>
			
			
			
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
                            <div class="feats-buy text-center">
                              <!--https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=card-->
                              <a  target="_blank" href="<?php echo $buy_plan_link ?>">Invest NOW</a>
                          </div>
                      
                          <?php } else if ($category != 'savingstax') { ?>
                          <div class="feats-want feature-want-more">
                              <a target="_blank" href="<?php echo $know_more_link?>" >Want to Know More?</a>
                          </div>
                          <?php }else{ ?>
						   <div class="feats-want featassur">
                          <a target="_blank" href="online-plans/savings-plan/kotak-guaranteed-fortune-builder-online" >View Kotak Guaranteed Fortune Builder</a>
                          </div>
						  
						  <?php }?>
                   
                        
              <?php if ($category == 'health-insurance') { ?>
                <div class="feats-want feature-want-more">
                              <a target="_blank" href="<?php echo $know_more_link?>" >Want to Know More?</a>
                          </div>
                         
                          <?php }else{?>
                            <div class="feats-buy text-center">
                              <!--https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=card-->
                              <a  target="_blank" href="<?php echo $buy_plan_link ?>">Invest NOW</a>
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
                              <a href="<?php echo $know_more_linkprot1 ?>" >View Kotak Assured Savings Plan?</a> 
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

              </div>
			  <?php //}?>
          </div>
		  </section>
      </div>
  </section>

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
  <a href="https://www.kotaklife.com/buy-kotak-guaranteed-fortune-builder/#/landing?utm_source=kgfb_organic&utm_medium=website&utm_campaign=blogtoken&utm_content=<?php echo $articleTiitles?>"
    class="tokensInvest" target="_blank">Invest Now</a>
</div>

<div class="tokens">
  <div class="tokenImg">
    <img class="showFill" src="assets/images/blogs/kotak_assured_savings_plan_fill.svg" alt="Kotak Assured Savings Plan" />
    <img class="showUnfill" src="assets/images/blogs/kotak_assured_savings_plan.svg" alt="Kotak Assured Savings Plan" />
  </div>
  <h4>Kotak Assured Savings  Plan</h4>
  <p>Guaranteed Lumpsum returns for achieving life goals </p>
  <a href="https://www.kotaklife.com/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blogtoken&utm_content=<?php echo $articleTiitles;?>" class="tokensInvest" target="_blank">Invest Now</a>
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
 
  <script src="assets/js/jquery-3.6.0.min.js"></script>

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
