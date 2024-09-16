<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome-4.7.0.min.css">
<?php $actual_link_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  ?>
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
	#topic1 .suggestion p a{color: #da251c !important;}
    #topic1 .suggestion p a:hover{ color: #da251c !important;}
    .feats-want, .feats-buy, .p-ref, .p-tc, .tooltip {display: none !important;}
    .blog-body-content .feats-sec li{align-items: baseline;}

		
		@media screen and (max-width: 768px) {
		.blogaside .feats-sec li{margin-bottom:6px !important;}
		.blog-body-content .feature-want-more a{width:91% !important; padding:9px 0 !important; }
            #topic1 .suggestion{width: 100%;}
		}
		
		@media screen and (max-width: 480px) {
			.blog-body-content .kotak-e-term-plan{display:none;}
			 #topic1 p{width:100%; float:left;}
				.blogaside .feats-sec li .fa-size{padding:5px 0px 0 7px; min-width:26px; min-height:26px; position: relative;
    top: 4px;}
				.blogaside .feats-sec li .fa-check:before{font-size:12px;}
				.blogaside .feats-sec h3{text-align:left;}
				.blogaside .feats-sec{padding-left:20px !important;}
				.blogaside .feats-sec li{text-align:left; align-items: baseline;}
				.blogaside .feats-sec a{width:100% !important;}
				.blogaside .feats-want a{text-transform:capitalize !important;}
				.guaranteedplan:before{right:90px; content:'';}
				.assutedplan:before{left:90px; content:'';}
            .bg-eterm{padding-bottom: 0 !important;}
            .articleDate{text-align: center; width: 100%}
				
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
                            $title = 'HappyYou';$title1 = 'Happyyou';
                            $features = '<ul>
                                  <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span><b>Face Scan</b> – Vitals like BP, SpO2, Heart rate in few minutes</span></li>
                                  <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span><b>Health Score</b> – To know your current health status</span></li>
                                  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span><b>Tribes</b> – Invite your loved ones, track their health, challenge teams and drive positive behaviour</span></li>
                                  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span><b> Happy Mart</b> – For exclusive benefits like Tele-consultations and other health services</span></li>
                                  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span><b>ICE</b> – In Case of Emergency, Be prepared to handle emergencies</span></li>
                                  <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span><b>Unwind</b> – De-stress anywhere anytime, Express yourself through My Diary, Rattle your brains with quizzes and riddles</span></li><li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span><b>Celebrate</b> – Positive behaviour and achievement milestones</span></li>
                              </ul>';
                         


					?>

           <section class="blog-head">
		   <div class="midWrapper">
       <div class="kotak-eterm-plan-popup">
	   <?php //if ( ($category == 'wealth-creation') || ($category == 'retirement') || ($category == 'savingstax') || ($category == 'government-schemes') || ($category == 'health-insurance')) {?>
	    <div class="mobile-tab">
            <a href="JavaScript:void(0)" id="assutedplan" onclick="savingTab(event, 'assutedplan')" class="mobile-product mobprod pop-cont"><?php echo $title1 ?></a>
            </div>
			
			
			
				 
				 
            <div class="modal-popups-btns pop-up blogaside  assutedplan"  id="assutedplanbox">
              <div class="kotak-e-term-plan">
                        <div class="d-flex bg-eterm">
                            <div>
                                <h2><?php echo $title ?></h2>
                            </div>
                        </div>
                        <div class="feats-sec">
                            <h3>Features</h3>
                            <?php echo $features; ?> 
                           
                        </div>
                    </div>

                    
                
                
                
                
	   </div>
	   <?php /*} */?>
		
			
			
			
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
                              <!-- <li><?php echo date(BLOG_DATE_FORMAT, $articlesInfo->edit_date); ?> <span class="mr-ten">  </span></li> -->
                        <!--      <li> <img src="assets/images/blog-eye.svg" class=""></li>-->
                              <li><?php echo number_format($articlesInfo->viewed_counts); ?> Views</li><!-- <span class="mr-ten"> | </span>-->
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
                          <div class="ulip-btn">
                          <?php if($articlesInfo->button_text_1!=''){?>
                              <a rel="follow" href="<?=$articlesInfo->button_text_url1?>" class="redBtn" target="_blank"> <?=$articlesInfo->button_text_1?></a>
                              <?php }?>

                              <?php if($articlesInfo->button_text_2!=''){?>
                              <a rel="follow" href="<?=$articlesInfo->button_text_url2?>" class="redBtn" target="_blank"> <?=$articlesInfo->button_text_2?></a>
                                <?php }?>
                                  
							  
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
                   <?php  if($articlesInfo->reviewwritten=='Yes'){
                   if($writters){?>
                 <div class="authorBox authornew">
              <div class="authorDetails">
              <?php 
                foreach($writters as $writter){
                  
                    $image=	str_replace('{filedir_7}', 'assets/images/insurance-guide/', $writter->image); 

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
                <div class="vSeperation"></div>


               <?php  }}
                $dateModified=$articlesInfo->edit_date;
               //if($dateModified!=''){
                if(!empty((int)$dateModified)){
                ?>
                <div class="article-date">
                <!-- <p class="articleDate">Updated on : <?=date('F j, Y',$dateModified)?> </p> -->
                <p class="articleDate">Updated on : <?php echo date(BLOG_DATE_FORMAT, $dateModified); ?> </p>
                
              </div>
              <?php }?>
               </div>
               </div>
                <?php
              }?>
                 <!--End New code -- 26/09/23 -->
                 
                 
                  <span id="topic1">
                     <?php if($writters==false){ if(!empty((int)$dateModified)){?>
                <div class="article-date">
                <p class="articleDate">Updated on : <?php echo date(BLOG_DATE_FORMAT, $dateModified); ?> </p>
              </div>
             

              <?php }} echo $articlesInfo->description; ?></span>

                   <div class="consumer consumer-text hide-mobile pb-0">
     
          <h3 class="ls1"> - A Consumer Education Initiative series by Kotak Life</h3>
                  </div>
              </div>
            
			  
                <div class="col-md-6">

                 

                  <div class="kotak-e-term-plan new_kotak_eterm">
                      <div class="d-flex bg-eterm">
                          <div>
                              <p class="product_head"><?php echo $title ?></p>
                          </div>
                        
                      </div>
                      <div class="feats-sec feature-group">
                      
                          <p class="feature_head">Features</p>
                          
                          <?php echo $features; ?>
                       
                        
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

              </div>
			  <?php //}?>
          </div>
		  </section>
      </div>
  </section>


 
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
