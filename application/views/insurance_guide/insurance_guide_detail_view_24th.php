 <style>
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
	.kotak-eterm-plan-popup{margin:2rem 0;}
	
		
		@media screen and (max-width: 768px) {
		.blog-body-content .feats-sec li{margin-bottom:8px !important;}
		.blog-body-content .feature-want-more a{width:91% !important; padding:9px 0 !important; }
		}
		
		@media screen and (max-width: 480px) {
			.blog-body-content .kotak-e-term-plan{display:none;}
				#topic1 p{width:100%; float:left;}
		}
		
    </style> 
 <section class="best-invest">

		
         <div class="blog-bradcrumb clearfix">
         <?php include_once("insurance_guide_detail_breadcrum.php");?>
		</div>
           <section class="blog-head">
		   <div class="midWrapper">
       <div class="kotak-eterm-plan-popup">
            <a href="JavaScript:void(0)" class="popup-term-btn pop-cont"><img src="assets/images/window.png"> Why Kotak e-Term Plan</a>
            <div class="modal-popups-btns pop-up blog-aside">
              <div class="kotak-e-term-plan">
                        <div class="d-flex bg-eterm">
                            <div>
                                <h2>Kotak e-Term Plan</h2>
                            </div>
                            <div class="ml-auto tooltip">
                                <!--https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_e-Term_Plan_Brochure_-_Online_-_20th_Jan_2022.pdf-->




                                <a href="<?=base_url?>/assets/images/uploads/insurance-plans/Kotak_E_Invest_-_Brochure_-_20th_Jan_2022.pdf?utm_source=organic&amp;utm_medium=website&amp;utm_campaign=l2category_page&amp;utm_content=banner" download="Brochure">
                                    <button class="broch-btn want-to-btn"> <img src="assets/images/down-broch.svg" class=""></button>
                                </a>
                               <!-- <span class="tooltiptext">Download Brochure</span>-->
                            </div>
                        </div>
                        <div class="feats-sec">
                            <h3>Features</h3>
                            <ul>
                                <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Nominal Cost</span></li>
                                <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Multiple Plan Options</span></li>
                                <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Flexible Payout Options</span></li>
                                <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Critical Illness Rider</span></li>
                                <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Savings</span></li>
                                <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Long term Coverage</span></li>
                            </ul>

                            <div class="feats-want blog-term-btn">
                                <a href="<?=base_url?>/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance?utm_source=organic&amp;utm_medium=website&amp;utm_campaign=product_card">Want to Know More?</a>
                            </div>




                            <div class="feats-buy">
                                <!--https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=card-->
                                <a href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=organic&amp;utm_medium=website&amp;utm_campaign=product_card&amp;utm_content=10-ways-to-mentally-refresh-after-a-stressful-day">BUY NOW</a>
                            </div>
                            <div class="d-flex mt-20">
                                <div>
                                    <p class="p-ref">Ref. No. KLI/22-23/E-BB/492</p>
                                </div>
                                <div class="ml-auto">
                                    <!---->
                                    <p class="p-tc"> <a target="_blank" href="https://dev.codebele.com/KLIUAT/insurance-guide/protection/termsconditions">T&amp;C</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
		    <div class="best-card">
			<div class="midWrapper">
			<div class="text-center">
                          <h1><?php echo $articlesInfo->article_title; ?></h1>
						  <p><?php echo $articlesInfo->short_description; ?></p>
                          <div class="views-blogs">
                        <div class="b-view">
                           <ul class="d-flex blogs-ul">
                              <li><?php echo date(BLOG_DATE_FORMAT, $articlesInfo->posted_date); ?> <span class="mr-ten">  </span></li>
                        <!--      <li> <img src="assets/images/blog-eye.svg" class=""></li>-->
                              <li><?php echo number_format($articlesInfo->viewed_count); ?> Views</li><!-- <span class="mr-ten"> | </span>-->
                              <!--<li> <img src="assets/images/blog-like.svg" class=""></li>
                              <li>155</li>-->
                          </ul>
                              </div>
                          </div>
                           <!--div class="">
						   <?php //if($articlesInfo->button_text!=""){?>
						   <a href="<?=$articlesInfo->button_url?>" target="_blank" onclick="dataLayer.push({'event': 'event about life insurance', 'category': 'new customers', 'action': 'about life insurance', 'label': 'about life insurance'});"><?=$articlesInfo->button_text?></a>
						   <?php //} ?>
						  
							 
                          </div-->
						  
						  <?php $article_title1 = ltrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-');
							$article_title = rtrim($article_title1);?>
                          <div class="">
                              <?php if ($CategoryName == "Savings & Tax ") { ?>
                                 <!-- <a href=<?=base_url?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Invest in Savings Plan</a>-->
								 <div class="">
                                 <div class="dd-btn-flex blog-detail">
                                  <!--<a href="<?=base_url?>/buy-kotak-assured-savings-plan-online?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta" target="_blank" class="redBtn ksap-btn detbtn">Invest in Kotak Assured Savings Plan</a>-->
                                  
								  
								  <?php if($this->uri->segment(3)=='tax-benefits-of-ulip-for-nri' || $this->uri->segment(3)=='tax-exemptions-in-ulip-old-and-new'){ ?>
								  <a href="<?=base_url?>/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});" class="fs-one redBtn  detbtn">INVEST IN ULIP</a>
	
								  <?php } else { ?>
								  
								  							  	    <div class="dd-btn-flex savebtns <?php echo $articlesInfo->article_title;?>">
																	<?php if($articlesInfo->article_title=='What is Salary Protection Insurance and Why You Need It'){ ?>
																	<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																	
																	<?php }else if($articlesInfo->article_title=='What is HRA (House Rent Allowance) and How is HRA Exemption Calculated? '){?>
																	<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																	<?php } else if ($articlesInfo->article_title=='Form 16, Form 16A, and Form 16B?'){?>
																<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																<?php  //} else if ($articlesInfo->article_title=='Section 80D - Medical and Health Insurance Tax Benefits Under Section 80D'){?>
																<!--<a rel="follow" href="<?=base_url?>/buy-health-insurance-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Invest in Health Insurance</a>-->
																 
																

																<?php }else if($articlesInfo->article_title=='भारत में जीवन बीमा पॉलिसियों के प्रकार '){?>
																<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																
																 <?php }else if($articlesInfo->article_title=='कोविड  -19  बूस्टर खुराक के दुष्प्रभाव'){?>
																 <a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																 
																 <?php }else if($articlesInfo->article_title=='Types of Income Tax Return (ITR) Forms'){?>
																 
																 	<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																 <?php }else if($articlesInfo->article_title=='Difference Between Gross Income & Total Income in Calculating Income Tax'){?>
																<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																 <?php }else if($articlesInfo->article_title=='Section 80G of the Income Tax Act'){?>
																<a rel="follow" href=<?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Invest in Savings Plan</a>
																 <?php }else if($articlesInfo->article_title=='Section 44AD of Income Tax Act for AY 2021-22'){?>
																<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																 <?php }else if($articlesInfo->article_title=='How to Claim TDS Refund for Excess TDS Deduction?'){?>
																<a rel="follow" href=<?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Invest in Savings Plan</a>
																
																 <?php }else if($articlesInfo->article_title=='Impact of GST on Life Insurance in India'){?>
																<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																
																<?php }else if($articlesInfo->article_title=='Everything You Need to Know About Tax Benefits of National Pension Scheme (NPS)'){?>
																<a  rel="follow"  href="<?=base_url?>/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" class="redBtn ksap-btn online-dnone">Invest in ULIP</a>
																<?php }else if($articlesInfo->article_title=='52 Weeks Savings Plan: Daily Savings Plans for a Better Tomorrow'){?>
																
																<a rel="follow" href=<?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Invest in Savings Plan</a>
																<?php }else if($articlesInfo->article_title=='What are the Different Types of Taxes in India?'){?>
												          <a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																
																<?php }else if($articlesInfo->article_title=='सुकन्या समृद्धि योजना (SSY) के कर लाभ क्या हैं?'){?>
																<a rel="follow" href=<?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">अभी निवेश करें</a>
																<?php }else if($articlesInfo->article_title=='Income-Tax Liability- The Difference Between Gross Income & Total Income in Calculating Income Tax'){?>
																<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																<?php }else if($articlesInfo->article_title=='What is ITR & How to File Income Tax Return? '){?>
																<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Calculate Term Insurance Premium</a>
																<?php }else if($articlesInfo->article_title=='Chooosing Heal'){?>
																<a rel="follow" href="<?=base_url?>/buy-health-insurance-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Calculate Health Insurance Premium</a>
																<?php }else if($articlesInfo->article_title=='How to File Income Tax Return - Everything You Need to Know '){?>
															 <a rel="follow" href=<?=base_url?>/online-plans/savings-plan/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Invest in Savings Plan</a>
															<?php }else if($articlesInfo->article_title=='प्रत्यक्ष कर और अप्रत्यक्ष कर में क्या अंतर है?'){?>
															 <a rel="follow" href=<?=base_url?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">कोटक गारंटीड सेविंग प्लान</a>
															<?php }else if($articlesInfo->article_title=='भारत में महिलाओं के लिए सरकारी योजना' || $articlesInfo->article_title=='इनकम टैक्स रिटर्न कैसे फाइल करें?'){?>
															 <a rel="follow" href=<?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">कोटक एश्योर्ड सेविंग प्लान</a>
															<?php }else if($articlesInfo->article_title=='आयकर रिटर्न (आईटीआर) फॉर्म के प्रकार'){?>
															<a rel="follow" href=<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">टर्म इंश्योरेंस प्रीमियम की गणना करें</a>
															<?php }else if($articlesInfo->article_title=="Pradhan Mantri Suraksha Bima Yojana"){?>
															
															<a rel="follow" href=<?=base_url?>/online-plans/savings-plan' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">View Savings Plan Online</a>
															<?php }else if($articlesInfo->article_title=="Section 80C Deductions as per Income Tax Act, 1961"){?>
															<a rel="follow" href=<?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Invest in Assured Savings Plan</a>
															<?php }else if($articlesInfo->article_title=="Section 80C Deductions as per Income Tax Act, 1961 " || $articlesInfo->article_title=="Interest Imposed Under Sections 234A, 234B and 234C" || $articlesInfo->article_title=="Income Tax Deductions & Exemptions under Sections 80C, 80D & 80DDB for FY  2021-22 & 2022-23" || $articlesInfo->article_title=='Section 80D - Medical and Health Insurance Tax Benefits Under Section 80D' || $articlesInfo->article_title=='What are Deferred Savings Plans? '){?>
															 <a rel="follow" href="<?=base_url?>/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Buy Kotak Assured Savings Plan</a>
                                                             <a rel="follow" href="<?=base_url?>/online-plans/savings-plan/kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" class="redBtn">Buy Kotak Guaranteed Savings Plan</a>
															
															<?php }else if($articlesInfo->article_title=="8 Things to Help You Select a Savings Investment plan"){ ?>
															<a rel="follow" href="<?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Buy Kotak Assured Savings Plan Online</a>
                                                             <a rel="follow" href="<?=base_url?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" class="redBtn">Buy Kotak Guaranteed Savings Plan Online</a>
															<?php }else if($articlesInfo->article_title=="What is Section 195 of the Income Tax Act? TDS on Non-Residents of India" || $articlesInfo->article_title=="ITR 2 Form – Complete Guide" || $articlesInfo->article_title=="Section 16 of the Income Tax Act (ITA), 1961" || $articlesInfo->article_title=="What is a savings plan? "  || $articlesInfo->article_title=="Challan 280 - How to Use Challan 280 to Pay Income Tax"
															|| $articlesInfo->article_title=="How to Calculate returns on an assured savings plan?" || $articlesInfo->article_title=="Excess TDS Deduction – Claim TDS Refund" || $articlesInfo->article_title=="Difference Between Guaranteed and Assured Returns"  || $articlesInfo->article_title=="What is the Maximum Maturity Benefit in Assured Savings Plans?" || $articlesInfo->article_title=="Should one prefer a guaranteed savings plan over monthly income schemes?"){ ?>
															<a rel="follow" href="<?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Invest in Assured Savings Plan</a>
                                                           <a rel="follow" href="<?=base_url?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" class="redBtn"> Invest in Guaranteed Savings Plan</a>
				                                          <?php }else{?>
															<a rel="follow" href="<?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Invest in Kotak Assured Savings Plan</a>
															<a rel="follow" href="<?=base_url?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" class="redBtn"> Invest in Kotak Guaranteed Savings Plan</a>
															<?php }?>
	  </div>
								 <!-- <a href="<?=base_url?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});" class="redBtn  detbtn">Invest in Kotak Guaranteed Savings Plan</a>-->
                                  <?php } ?>
								  
                                  </div>
                                                            </div>
                              <?php } else if ($CategoryName == "About Life Insurance") { ?>
							  <?php if($articlesInfo->article_title=="What are the Benefits of Endowment Policy?"){?>
                                  <a rel="follow" href="<?=base_url?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event about life insurance', 'category': 'new customers', 'action': 'about life insurance', 'label': 'about life insurance'});">Invest In Endowment Savings plan</a>
                              <?php }else if($articlesInfo->article_title=="क्या जीवन बीमा एक निवेश है?"){?>
							<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event about life insurance', 'category': 'new customers', 'action': 'about life insurance', 'label': 'about life insurance'});">जीवन बीमा में निवेश करें</a>
							<?php }else if($articlesInfo->article_title=="What are the Benefits of Endowment Policy? "){?>
						 <a rel="follow" href=<?=base_url?>/online-plans/savings-plan/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Invest in Savings Plan</a>
							<?php }else if($articlesInfo->article_title=="जीवन बीमा क्या है?" || $articlesInfo->article_title=="जीवन बीमा पर ऋण" || $articlesInfo->article_title=="भारत में सर्वश्रेष्ठ टर्म प्लान कैसे चुनें?" || $articlesInfo->article_title=="वरिष्ठ नागरिकों के लिए ऑनलाइन टर्म इंश्योरेंस प्लान खरीदने के लिए गाइड"){?>
							<a rel="follow" href=<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">टर्म इंश्योरेंस प्रीमियम की गणना करें</a>
							<?php }else if($articlesInfo->article_title=="How To Choose The Right Life Insurance " || $articlesInfo->article_title=="Benefits of Buying Term Insurance Plan for Senior Citizens in India " || $articlesInfo->article_title=="Important Features of a Term Insurance Plan" || $articlesInfo->article_title=="Term Plan with Return of Premium (TROP)" || $articlesInfo->article_title=="What is Insurance Coverage? Overview, Types, and Examples"){?>
							<a rel="follow" href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">Buy Term Insurance Online</a>
							<?php }else{?>
							   <a rel="follow" href="<?=base_url?>/buy-online-term-insurance/#/landing?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event about life insurance', 'category': 'new customers', 'action': 'about life insurance', 'label': 'about life insurance'});">Calculate Term Insurance Premium</a>
							  <?php }?>
							  <?php } else if ($CategoryName == "Wealth Creation") { ?>
                                
                                    <?php if($articlesInfo->article_title=="What are the Best Short-Term Investment Plans with High Returns?"){?>
									 <a href=<?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Invest in Savings Plan</a>
									<?php }else if($articlesInfo->article_title=="Long Term Savings Plan - Best Savings Investment Plans in India" || $articlesInfo->article_title=="Best One-Time Investment Plans in India" || $articlesInfo->article_title=="What are the Best Investment Options For Females?" || $articlesInfo->article_title=="Types of Annuity Plan | Annuity Definition - Meaning & Key Benefits"){?>
									 <a href=<?=base_url?>/buy-e-invest-ulip-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>' target="_blank" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Invest in ULIP Online</a>
									<?php }else if($articlesInfo->article_title=="What are the Best Investment Options for Students in India?" || $articlesInfo->article_title=="Which is Better – FD, Mutual Fund, SIP, or ULIP?" || $articlesInfo->article_title=="How to Plan Your Child's Education - A Step-by-Step Guide" || $articlesInfo->article_title=="How To Diversify Portfolio In 2022?" || $articlesInfo->article_title=="Importance of Portfolio Management" || $articlesInfo->article_title=="ULIPs Investment – A Boon or Bane?"){ ?>
									<a style="color:#fff" rel="follow"  href="<?=base_url?>/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event wealth creation', 'category': 'new customers', 'action': 'wealth creation', 'label': 'wealth creation'});">Invest in ULIP online</a>
                                   <?php }else if($articlesInfo->article_title=="उच्च रिटर्न प्राप्त करने के लिए सर्वश्रेष्ठ इन्वेस्टमेंट विकल्प"){?>
                                   <a style="color:#fff" rel="follow"  href="<?=base_url?>/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event wealth creation', 'category': 'new customers', 'action': 'wealth creation', 'label': 'wealth creation'});">यूलिप में निवेश करें</a>

                                <?php }else if($articlesInfo->article_title==" What is the Importance of Saving Money? "){?>
									<a style="color:#fff" rel="follow"  href="<?=base_url?>/online-plans/savings-plan" target="_blank" onclick="dataLayer.push({'event': 'event wealth creation', 'category': 'new customers', 'action': 'wealth creation', 'label': 'wealth creation'});">View Our Savings Plan</a>
									<?php }else{?>

								<a style="color:#fff" rel="follow"  href="<?=base_url?>/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event wealth creation', 'category': 'new customers', 'action': 'wealth creation', 'label': 'wealth creation'});">Invest in ULIP</a>
									<?php }?>
							 <?php } else if ($CategoryName == "Protection") { ?>
							 
							       <?php if($articlesInfo->article_title=="टर्म इंश्योरेंस क्या है? टर्म इंश्योरेंस का मतलब"){?>
								   <a rel="follow" href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">टर्म इंश्योरेंस में निवेश करें</a>
								   <?php }else if($articlesInfo->article_title=="भारत में गृहणियों के लिए टर्म इंश्योरेंस" || $articlesInfo->article_title=="जीवन बीमा पॉलिसी लेने की प्रक्रिया क्या है?" || $articlesInfo->article_title=="भारत में जीवन बीमा कितने प्रकार के होते हैं?" || $articlesInfo->article_title=="जीवन बीमा पॉलिसी लेने की प्रक्रिया क्या है?"){?>
								  <a rel="follow" href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">टर्म इंश्योरेंस में निवेश करें</a>
								   <?php }else if($articlesInfo->article_title=="Difference Between Term Insurance and Endowment Plan" || $articlesInfo->article_title=="Term Insurance: What Happens When You Don’t Pay Your Premiums?" || $articlesInfo->article_title=="Eligibility Criteria for Buying Term Insurance in India" || $articlesInfo->article_title=="Term Insurance Age Limit – Term Plan for All Age Groups" || $articlesInfo->article_title=="Term Insurance vs Life Insurance: Understand the Difference and Benefits" || $articlesInfo->article_title=="What is Term Insurance? Term Plan Meaning and Definition" || $articlesInfo->article_title=="How Much Term Life Insurance Cover Do I Need?"){?>
								 <a rel="follow" href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">Buy Term Insurance Online</a>
								 <?php }else if($articlesInfo->article_title=="What is Critical Illness Policy?"){?>
                                   <a rel="follow" href="<?=base_url?>/insurance-plans/health-plans" target="_blank" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">View Health Plans Online</a>
                                 <?php }else if($articlesInfo->article_title=="Why You Must Include In Your Financial Planning?" || $articlesInfo->article_title=="What Types of Deaths Are Covered in a Term Insurance Plan?"){?>
							 <a rel="follow" href="<?=base_url?>/online-plans/online-term-insurance-plans/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">Invest in Term Insurance</a>
							<?php }else{?>
                                  <a rel="follow" href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">Calculate Term Insurance Premium</a>
								   <?php }?>
							 <?php } else if ($CategoryName == "Retirement") { ?>
                                    <?php if($articlesInfo->article_title=="Is it possible to live a financially independent life, even after you retire?" || $articlesInfo->article_title=="What is an Annuity Plan, and How Does Annuity Plan Work?" || $articlesInfo->article_title=="How To Calculate The Present Value And Future Value Of Annuities?"){?>
                                  <!-- <a style="color:#fff" href="<?=base_url?>/nps/kotak-lifetime-income-plan/#/landing?utm_source=NPSORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Retirement" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event retirement', 'category': 'new customers', 'action': 'retirement', 'label': 'retirement'});">View Plans</a>-->
							 <a  rel="follow" href="<?=base_url?>/insurance-plans/retirement-plans/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event retirement', 'category': 'new customers', 'action': 'retirement', 'label': 'retirement'});">View Retirement Plans</a>
							 <?php }else if($articlesInfo->article_title=="Here's Why it's a Good Time to Explore ULIPs as an Investment"){?>
 <a  rel="follow" href="<?=base_url?>/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event retirement', 'category': 'new customers', 'action': 'retirement', 'label': 'retirement'});">INVEST IN ULIP online</a>
							<?php }else {?>
								  <a  rel="follow" href="<?=base_url?>/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event retirement', 'category': 'new customers', 'action': 'retirement', 'label': 'retirement'});">INVEST IN ULIP</a>
							 <?php }?>
							 <?php } else if ($CategoryName == "Health Insurance") { 
							   if($articlesInfo->article_title=="Health Insurance Plan for Family"){?>
                                 <a rel="follow" href="<?=base_url?>/buy-health-insurance-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=insuranceguide" target="_blank" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Calculate Health Insurance Premium</a>
							   <?php }else if($articlesInfo->article_title=="Health Insurance for Personal Accidents"){?>
							    <a rel="follow" href="<?=base_url?>/insurance-plans/health-plans" target="_blank" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">View Health Plans Online</a>
							   <?php }else if($articlesInfo->article_title=="How to Buy ₹1 Crore Life Insurance Policy Without Medical Test?"){?>
                                       <a rel="follow" href="<?=base_url?>/https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Calculate Term Insurance Premium</a>
							 <?php }else {?>

								<!-- <a rel="follow" href="<?=base_url?>/buy-health-insurance-online/#/landing?utm_source=Health_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Invest in Health Plan Online</a>-->
								
								 <a rel="follow" href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Calculate Term Insurance Premium</a>
								 
							   <?php }?>
							  <?php } else if ($CategoryName == "Government Schemes") { 
							       if($articlesInfo->article_title=="How to Apply, Check Status, Download Certificate and Claim of PMJJBY?" || $articlesInfo->article_title=="What is National Savings Certificate?"){
							  
							  ?>
							  
							   <a rel="follow"  href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Calculate Premium Online</a>
								   <?php }else if($articlesInfo->article_title=="What are Government Bonds in India?"){?>
                             <a rel="follow"  href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Buy Term Insurance Online</a>
								  <?php }else { ?>
                                  <a rel="follow"  href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?php echo $article_title?>" target="_blank" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Calculate Premium</a>
                              <?php }  }?>
                          </div>
                         </div>
			</div>
			<div class="d-flex p-20 blog-social-meida">
                     
                         
                          <div class="ml-auto">
                              <div class="hide-desktop share-ul">
                                  <a href="#"> <img src="assets/images/send-icon.svg" class=""></a>
                              </div>
                               <ul class="social__icons share-ul d-flex hide-mobile">
                                 
                                  <li><a class="fb" href="https://www.facebook.com/sharer.php?t=[title]" data-title="Think About Life Insurance Sooner than Later" data-image="https://kotaklife.com/assets/images/uploads/insurance-guides/articles/Be-prepared-against-death-disability-and-disease4.jpg" data-desc="Getting life insurance early gives many benefits like lower premium, provides a reliable asset, tax benefits and helps your family in uncertain times. Click here to know more why you should buy life insurance now"><span class="fa f_b fa-facebook"></span></a></li>
                                  <li><a class="twt" href="https://twitter.com/share?text=[title]&url=[url]&via=KLI" data-title="Think About Life Insurance Sooner than Later" data-desc="Getting life insurance early gives many benefits like lower premium, provides a reliable asset, tax benefits and helps your family in uncertain times. Click here to know more why you should buy life insurance now"><span class="fa twit fa-twitter"></span></a></li>
                                  <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.kotaklife.com/insurance-guide/about-life-insurance/what-is-insurance-coverage"><span class="fa linkedin fa-linkedin"></span></a></li>
                                  <li><a href="https://api.whatsapp.com/send?text=http://www.kotaklife.com/insurance-guide/about-life-insurance/what-is-insurance-coverage/&t=What Is Insurance Coverage?" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                              </ul>
                          </div>
                      </div>
			</div>
		   </section>
		   <section class="blog-body-content">
              <div class="midWrapper">
          <div class="row brdr_bttm">
              <div class="col-md-7 pr-blog">
                  <span id="topic1"><?php echo $articlesInfo->description; ?></span>
              </div>
              <div class="col-md-6">

                  <?php foreach($alsoReadArticlesInfo as $article) {
                        $category = $article->topic_url_title;
                    }
					
					
                    if (($category == 'about-life-insurance') || ($category == 'protection') || ($category == 'government-schemes')) {
                        $title = 'Kotak e-Term Plan';
                        $brochure_link = <?=base_url?>/assets/images/uploads/insurance-plans/Kotak_e-Term_Plan_Brochure_-_Online_-_20th_Jan_2022.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Nominal Cost</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Multiple Plan Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Flexible Payout Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Critical Illness Rider</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Savings</span></li>
							  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Long term Coverage</span></li>
                          </ul>';
                        $know_more_link = <?=base_url?>/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link = <?=base_url?>/buy-online-term-insurance/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/492';
                    }
                    else if ($category == 'wealth-creation') {
                        $title = 'Kotak e-Invest';

                        $brochure_link = <?=base_url?>/assets/images/uploads/insurance-plans/Kotak_E_Invest_-_Brochure_-_20th_Jan_2022.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Return of Mortality Charges*<sup>$</sup></span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Enhanced Protection</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Multiple Plan Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Zero Premium Allocation Charges</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Savings^</span></li>
                          </ul>';
                        $know_more_link = <?=base_url?>/online-plans/ulip-plan/kotak-e-invest?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link = <?=base_url?>/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/521';
                    }
                     if ($category == 'retirement') {
                        $title = 'Kotak e-Invest';

                        $brochure_link = <?=base_url?>/assets/images/uploads/insurance-plans/Kotak_E_Invest_-_Brochure_-_20th_Jan_2022.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Return of Mortality Charges*<sup>$</sup></span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Enhanced Protection</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Multiple Plan Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Zero Premium Allocation Charges</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Savings^</span></li>
                          </ul>';
                        $know_more_link = <?=base_url?>/online-plans/ulip-plan/kotak-e-invest?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link = <?=base_url?>/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/521';
                    }
                     if ($category == 'savingstax') {
                        //$title = 'Kotak e-Invest';
                        $sapimg_link = ' <img src="assets/images/assurlogo.svg" class="w-161">';
                        $brochure_link = <?=base_url?>/assets/images/uploads/insurance-plans/kotak-assured-savings-plan-brochure-23-june-2022.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Increasing Life Cover*</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Guaranteed^ Maturity Benefits</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Enhanced Protection Through Riders</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Benefits</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Dual Benefits: Guaranteed^Maturity +
                              Death benefits</span></li>
				
                          </ul>';
                          $know_more_linkprot = <?=base_url?>/insurance-plans/savings-and-investments-plans/kotak-assured-savings-plan';
                        $buy_plan_link = <?=base_url?>/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-');
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/999';
                     


                        $sapimg_link1 = ' <img src="assets/images/gspimg.svg" class="">';
                        $brochure_link1 = <?=base_url?>/assets/images/uploads/insurance-plans/kotak-guaranteed-savings-plan-brochure.pdf';
                        $features1 = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Enhanced Protection Through Riders</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Life Cover</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Savings</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Multiple Premium Payment Terms</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Guaranteed <sup>@</sup> Loyalty Addion</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Accrued Guaranteed <sup>@</sup> Additions</span></li>
				
                          </ul>';
                          $know_more_linkprot1 = <?=base_url?>/online-plans/savings-plan/kotak-guaranteed-savings-plan-online?utm_source=gsp_organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link1 = <?=base_url?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no1 = 'Ref. No. KLI/22-23/E-BB/490';
                        // $title = 'Kotak Guaranteed Savings Plan';
                        // $brochure_link = <?=base_url?>/assets/images/uploads/insurance-plans/Kotak-Guaranteed-Savings-Plan-Brochure-Guaranteed-Savings-Plan.pdf';
                        // $features = '<ul>
                        //       <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Enhanced Protection Through Riders</span></li>
                        //       <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Life Cover</span></li>
						// 	  <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Tax Savings</span></li>
                        //       <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Multiple Premium Payment Terms</span></li>
                        //       <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span><sup>@</sup> Guaranteed Loyalty Additions</span></li>
                        //       <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Accrued Guaranteed<sup>@</sup> Additions</span></li>
                        //   </ul>';
                        // $know_more_link = <?=base_url?>/online-plans/savings-plan/kotak-guaranteed-savings-plan-online?utm_source=organic&utm_medium=website&utm_campaign=l2category_page';
                        // $buy_plan_link = <?=base_url?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=organic&utm_medium=website&utm_campaign=l2category_page';
                        // $ref_no = 'Ref. No. KLI/22-23/E-BB/490';
                    }
                     if ($category == 'health-insurance') {
                       /* $title = 'Kotak Health Shield';
                        $brochure_link = <?=base_url?>/assets/images/uploads/insurance-plans/Kotak-Life-Health-Shield-Brochure-Feb-2022.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>4 Critical Illness Covered^</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>5 Plan options available</span></li>
							  <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Extension for spouse coverage</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Inbuilt wellness benefit</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Benefits*</span></li>
                          </ul>';
                        $know_more_link = <?=base_url?>/insurance-plans/health-plans/kotak-health-shield?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link = <?=base_url?>/buy-health-insurance-online/#/landing?utm_source=Health_organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/491';*/
						
						$title = 'Kotak e-Term Plan';
                        $brochure_link = <?=base_url?>/assets/images/uploads/insurance-plans/Kotak_e-Term_Plan_Brochure_-_Online_-_20th_Jan_2022.pdf';
                        $features = '<ul>
                              <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Nominal Cost</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>Multiple Plan Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Flexible Payout Options</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Critical Illness Rider</span></li>
                              <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Tax Savings</span></li>
							  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Long term Coverage</span></li>
                          </ul>';
                        $know_more_link = <?=base_url?>/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance?utm_source=organic&utm_medium=website&utm_campaign=product_card';
                        $buy_plan_link = <?=base_url?>/buy-online-term-insurance/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content='.rtrim((strtolower(str_replace(' ','-',str_replace('?','',$articlesInfo->article_title)))),'-') ;
                        $ref_no = 'Ref. No. KLI/22-23/E-BB/492';
                    } ?>


                  <div class="kotak-e-term-plan new_kotak_eterm">
                      <div class="d-flex bg-eterm">
                          <div>
                              <h2><?php echo $title ?></h2>
							  <?php echo $sapimg_link ?>
							  <?php if($title=='Kotak e-Invest'){?>
							  <p style="font-size:14px;max-width:236px;">In this policy, the investment risk in the investment portfolio is borne by the policyholder.</p>
							  <?php } ?>
							  
                          </div>
                          <div class="ml-auto tooltip">
                              <!--https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_e-Term_Plan_Brochure_-_Online_-_20th_Jan_2022.pdf-->
                              <a href="<?php echo $brochure_link ?>" download="Brochure">
                                  <button class="broch-btn want-to-btn"> <img src="assets/images/down-broch.svg" class=""></button>
                              </a>
							  <span class="tooltiptext">Download Brochure</span>
                          </div>
                      </div>
                      <div class="feats-sec feature-group">
                          <h3>Features</h3>
                          <?php echo $features; ?>
                         <!-- <div class="feats-want">-->
                              <!--https://www.kotaklife.com/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance-->
                            <!--  <a target="_blank" href="<?php echo $know_more_link ?>">Want to Know More?</a>
                          </div>-->
						  
						    <?php if ($category != 'savingstax') { ?>
                          <div class="feats-want feature-want-more">
                              <a target="_blank" href="<?php echo $know_more_link?>">Want to Know More?</a>
                          </div>
                          <?php }else{ ?>
						   <div class="feats-want featassur">
                          <a target="_blank" href="<?php echo $know_more_linkprot?>?utm_source=kasp_organic&utm_medium=website&utm_campaign=product_card">VIEW KOTAK ASSURED SAVINGS PLAN</a>
                          </div>
						  
						  <?php }?>
                   
                        
                          
                          <div class="feats-buy">
                              <!--https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=card-->
                              <a rel="follow" target="_blank" href="<?php echo $buy_plan_link ?>">BUY NOW</a>
                          </div>
                          <div class="d-flex mt-20">
                              <div>
                                  <p class="p-ref"><?php echo $ref_no; ?></p>
                              </div>
                              <div class="ml-auto">
                                  <!--<?php //echo base_url(IG_MODULE_LINK.'/'.$category.'/insurance_guide_article_details'); 
                                        ?>-->
										<?php if($category == 'retirement'){ ?>
										  <p class="p-tc"> <a target="_blank" href="<?=base_url?>/insurance-guide/wealth-creation/termsconditions">T&C</a></p>
										
										<?php } else{?>
                                  <p class="p-tc"> <a target="_blank" href="<?=base_url?>/insurance-guide/<?php echo $category ?>/termsconditions">T&C</a></p>
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
                          <h3>Features</h3>
                          <?php echo $features1; ?>
                        
                          <div class="feats-want featassur">
                              <a href="<?php echo $know_more_linkprot1 ?>">View Kotak Guaranteed Savings Plan?</a> 
                          </div>
                          <div class="feats-buy">
                             
                              <a href="<?php echo $buy_plan_link1 ?>">BUY NOW</a>
                          </div>
                          <div class="d-flex mt-20">
                              <div>
                                  <p class="p-ref"><?php echo $ref_no1; ?></p>
                              </div>
                              <div class="ml-auto">
                            
                                  <p class="p-tc"> <a target="_blank" href="<?=base_url?>/insurance-guide/<?php echo $category ?>/termsconditions?g=1">T&C</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php } ?>

                  <?php if (count($alsoReadArticlesInfo)) { ?>
                      <div class="also-read">
                          <h3>Also read</h3>
                          <ul>
                              <?php foreach ($alsoReadArticlesInfo as $article) { ?>
                                  <li> <a href="<?php echo base_url(IG_MODULE_LINK . '/' . $article->topic_url_title . '/' . $article->url_title); ?>"><?php echo $article->article_title; ?></a></li>
                              <?php } ?>
                          </ul>
                      </div>
                  <?php } ?>

              </div>
          </div>
		  </section>
      </div>
  </section>


  <section class="consumer hide-mobile">
      <div class="midWrapper">
          <h3 class="ls1"> - A Consumer Education Initiative series by Kotak Life</h3>
          <h3 class="ls1 simi-txt"> Similar Articles</h3>
		  
				  <?php if(count($alsoReadArticlesInfoAll)>3){ ?>
				  <div class="blogs-new-slick">
				  <?php }  else{ ?>
				   <div class="">
				  <?php } ?>
		  
		  
              <?php foreach($alsoReadArticlesInfoAll as $article) { ?>
                  <div>
                      <a href="<?php echo base_url(IG_MODULE_LINK . '/' . $article->topic_url_title . '/' . $article->url_title); ?>" target="_blank">
                          <div class="consumer-slick">
                              
							  
											   
						  <?php if(count($alsoReadArticlesInfoAll)>3){ ?>
						  <div class="consumer-slick-card">
						   <h3 class="slick-card-after">
						  <?php }  else{ ?>
						  <div class="consumer-slick-card slick-card-one-mar">
							<h3 class="slick-card slick-card-one-pad">
						  <?php } ?>
							  
                                 <?php echo $article->article_title; ?></h3>
                              </div>
                          </div>
                      </a>
                  </div>
              <?php } ?>
          </div>
      </div>
  </section>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script>
var popupContainer = document.getElementsByClassName('pop-cont')[0],
    popupBox = document.getElementsByClassName('pop-up')[0],
    newblock = document.getElementsByTagName('body')[0]


popupContainer.onclick = function () {
    if (popupBox.style.display === 'block') {
        popupBox.style.display = 'none';
         newblock.className = "";
    } else {
        popupBox.style.display = 'block';
         newblock.className = "blogpopup";
    }
};
  </script>