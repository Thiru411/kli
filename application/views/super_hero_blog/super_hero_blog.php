<?php
//GA code Variables
$categoryGA = '';
if (get_cookie('kotak_customer_type')) {
	if (get_cookie('kotak_customer_type') == 'new_customer') {
		$categoryGA = "new customers";
	} elseif (get_cookie('kotak_customer_type') == 'existing_customer') {
		$categoryGA = "existing customers";
	} elseif (get_cookie('kotak_customer_type') == 'life_advisor') {
		$categoryGA = "life advisor";
	}
} else {
	$categoryGA = "new customers";
}
$moduleName = str_replace('-', ' ', $this->uri->segment(1));
$eventGA = 'event ' . $moduleName . ' articles';
$actionGA = $moduleName;
//GA code Variables
?>
<link rel="stylesheet" href="assets/css/super_hero.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">




<!-- Adding slick css and js below -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


<div>

    <section class="super_hero">
        <div class="hero-bg" >
            <div class="container">
                <!-- Please add Breadcumbs here as I dont have styling we just need to copy from other pages below this is -->
              <div class="mainBlog">
              <div class="mainBlog_1">
                <!-- I have done breadcrumbs not as KLI Please check this once  -->
                <ol class="arrows">
                <?php echo $this->breadcrumb->output(); ?>

                </ol>
                <h1 class="mainBlog_title dispDesk">Insurance Stories</h1>
                <p class="mainBlog_desc">Let's explore some life insurance stories witnessing the profound impact of protection and financial security, where Indian life insurance plans are the super heroes safeguarding the families.</p>
              </div>
            </div>
                <!--div class="mainBlog-cards">-->
                <div class="" id="story-slider">

                    <?php
         if($storyInfo){
            for($i=0;$i<count($storyInfo);$i++){
          // foreach($storyInfo as $row){
              
                     $story_title=$storyInfo[$i]->title; 
                   $edit_date=$storyInfo[$i]->field_id_404; 
                   $view_count_one=$storyInfo[$i]->field_id_403;
                   $url_title=$storyInfo[$i]->url_title; 
    $image=	str_replace('{filedir_27}','assets/images/uploads/insurance-stories/', $storyInfo[$i]->field_id_407);

              ?>
                 <div>
                  <div class="mainBlog-card">
                    <a href="<?=base_url()?>insurance-stories/<?=$url_title?>/Episode-1" target="_blank">
                    <div class="mainBlog-cardDesc">
                        <h2 class="blogs-cardTitle"><?=$story_title?></h2>
                        
                        <p class="blogs-carddate"><?php echo date(BLOG_DATE_FORMAT, $edit_date); ?><span><?=$view_count_one?> Views</span></p>
                      </div>
                      <img src="<?=$image?>" alt="<?=$story_title?>">
                      
                    </a>
                  </div>
                 </div>
                <!--End New code-->
                  
                    <?php }}?>

                    </div>


            </div>
        </div>
    </section>
    
   <!-- New code-->
      <section class="growthPower" style="display:none">
        <div class="container">
          <div class="growthFulled-grid">
            <div class="settle-score">
              <img src="assets/images/super-hero/claim-ratio.png" alt="why kotak life">
              <div class="growthKotak">
                  <img src="assets/images/super-hero/growthKotak.png" alt="why kotak life">
              </div>
            </div>
            <div class="growthFulled-sec">
              <h3 class="growthPower-title">Growth powered by families like you</h3>
              <div class="growthFulled-card">
                <div class="growthFulled-cards">
                  <img src="assets/images/super-hero/win.svg" alt="Happy Life Secured" />
                  <h4 class="growthFulled_1">4.54 crore <sup>∞</sup></h4>
                  <p class="growthFulled_1-txt">happy life secured</p>
                </div>

                <div class="growthFulled-cards">
                  <img src="assets/images/super-hero/win.svg" alt="Happy Life Secured" />
                  <h4 class="growthFulled_1">1 lakh + <sup>θ</sup></h4>
                  <p class="growthFulled_1-txt">trusted Agent</p>
                </div>

                <div class="growthFulled-cards">
                  <img src="assets/images/super-hero/win.svg" alt="Happy Life Secured" />
                  <h4 class="growthFulled_1">285 </h4>
                  <p class="growthFulled_1-txt">branches as on 30th September 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
   <!--End New code-->
    <!-- <section class="growthPower">
        Just copied from glossary section Please check once all before copy 
        <div class="container">
            <div class="growthPower-sec">
                <div class="growthPower_1">
                    <div class="settle-score">
                        <img src="assets/images/super-hero/growthPower.png" alt="why kotak life">
                        <div class="growthKotak">
                            <img src="assets/images/super-hero/growthKotak.png" alt="why kotak life">
                        </div>
                    </div>
                </div>
                 <div class="growthPower_2">
                    <div class="kotak-branches">
                        <h3 class="growthPower-title">Growth powered by families like you</h3>
                        <div class="dispDesk">
                            <div class="growthPower-list">
                                <h4>NUMBER OF LIVES INSURED</h4>
                                <h3>4.54 crore<sup>#</sup></h3>
                                <p>as on 31<sup>st</sup> Jan 2023</p>
                            </div>
                            <div class="growthPower-list">
                                <h4>More than</h4>
                                <h3>1 lakh<sup>@</sup></h3>
                                <p>trusted agents</p>
                            </div>
                            <div class="growthPower-list">
                                <h4>BRANCHES</h4>
                                <h3>288</h3>
                                <p>as on February 28, 2023</p>
                            </div>
                            <div class="growthPower-list">
                                <h4>CLAIM SETTLEMENT RATIO</h4>
                                <h3>98.82%<sup>*</sup></h3>
                                <p>For FY 2021 - 2022</p>
                            </div>
                        </div>
                        <div class="dispMob">
                            <p class="growthPower-mob">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                                text of the printing and typesetting done. Lorem Ipsum is simply dummy text of the
                                printing and
                                typesetting industry.</p>
                            <div class="growthPower-mobDesc">
                                <div class="growthPower-header">3.2 crore <br> <span class="growthPower-subheader">happy
                                        life
                                        secured</span></div>
                                <div class="growthPower-header">1 lakh + <br> <span
                                        class="growthPower-subheader">trusted Agent</span>
                                </div>
                                <div class="growthPower-header">300 + <br> <span
                                        class="growthPower-subheader">300</span></div>
                            </div>
                        </div>
                        <p class="growthPower-reg dispDesk">Ref. No. KLI/23 - 24 / E-WEB/184</p>
                    </div>
                </div> 
            </div>
        </div>
    </section> -->
    <section class="popularArticle">
        <div class="container">
            <h2 class="popularArticle-title">Popular & Recent Articles</h2>
            <div class="popularArticle-cards">
                <?php if($articles){
        foreach($articles as $article){
          $article_image=	str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $article->article_image); 
          ?>
                <div class="popularArticleContent">
                   <div class="gradient">
                   <a href="<?=base_url()?>insurance-guide/<?php echo $article->topic_url_title.'/'.$article->titlename?>"> 

                    <div class="image">
                    
                        <img src="<?=$article_image?>" alt="Popular Article" />
                    </div>
        </a>
        
                    <div class="figCaption">
                    <a href="<?=base_url()?>insurance-guide/<?php echo $article->topic_url_title.'/'.$article->titlename?>"> 

                        <h3><?=$article->title?></h3>
        </a>
                        <div class="date_search">
                        <a href="<?=base_url()?>insurance-guide/<?php echo $article->topic_url_title.'/'.$article->titlename?>"> 

                            <p class="popularArticle-date"><?=date('F j, Y',$article->posted_date)?> <span>
                                    <?=$article->viewed_count?> Views</span></p>
        </a>
                            <!-- <div class="share_box">s</div> -->
                            <ul class="menu bottomRight">
                                <li class="share top">
                                    <i class="fa fa-share-alt"></i>
                                    <ul class="submenu">
                                        <li><a href="https://www.facebook.com/sharer.php?t=<?=$article->titlename?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/share?text=<?=$article->titlename?>&url=<?=base_url()?>insurance-guide/<?php echo $article->topic_url_title.'/'.$article->titlename?>&via=KLI" class="twitter"><i class="fa"><svg class="new-twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1">
 <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
</svg></i></a></li>
                                        <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?=base_url()?>insurance-guide/<?php echo $article->topic_url_title.'/'.$article->titlename?>" class="googlePlus"><i class="fa linkedin fa-linkedin"></i></a></li>
                                        <li><a href="https://api.whatsapp.com/send?text=<?=base_url()?>insurance-guide/<?php echo $article->topic_url_title.'/'.$article->titlename?>&t=<?=$article->title?>" class="instagram"><i class=" fa whatsap fa-whatsapp"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <?php  }
      }?>



            </div>
        </div>
    </section>

    <section class="secureFamily">
        <div class="container">
            <div class="secureFamily-sec">
                <div class="secureFamily_1">
                    <h2 class="secureFamily-title">Secure your family's financial future with Kotak e-Term</h2>
                    <div class="secureFamily-list">
                        <ul>
                            <li>Life Cover till 85 years for Life & Life Secure Option</li>
                            <li>Option to exit the policy with premium refund at the age of 60<sup>*</sup></li>
                            <li>3 Plans & Payout Options</li>
                            <li>Special Rates for Non-Tobacco Users</li>
                            <li>Special Rates for Women</li>
                            <li>Free Medical Check Up every 5th year<sup>**</sup></li>
                        </ul>
                    </div>
                    <div class="text-left mt20">
                        <a class="secureFamily-view" href="https://kli-uat.irepo.in/assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf">Download Brochure<!--<span class="ml5"><i class="fa fa-download"></i></span>--> <img src="assets/images/super-hero/download-btn.png" class="d-btn"></a> 
                    </div> 
                    <div class="secureFamily-btns">
                        <a class="secureFamily-calc" href="buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=insurancestories&utm_content=productcard">Calculate Term Premium</a>
                        <a class="secureFamily-dwnload" href="term-insurance/kotak-term-plan">View Kotak e-Term
                            
                        </a>
                       
                    </div>
                    <div class="d-flex">
                     <p class="refno-hero w-30">ARN No.: KLI/23-24/E-WB/2550</p>
                     <p class="terms-tc w-30 mt-20"> <a target="_blank" href="<?=base_url()?>insurance-stories/termsconditions" class="ins-tc"> T&amp;C </a></p>
                     </div>
                </div>
                <div class="secureFamily_2">
                    <div class="secureFamily-img text-right">
                        <img src="assets/images/super-hero/secureFamily.png" alt="Secure Family" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customerReviews">
        <div class="bgContainer">
            <div class="customerReviews-bg">
                <div class="container">
                   <div class="rating-redbg">
                    <div class="slickClass">
                       <div>
                        <div class="text-center customerReviews-sec">
                            <h2 class="customerReviews-title">Customer Reviews</h2>
                           
                            <p>Faster Policy Issuance</p>
                            <div class="customerReviews-text">
                                <p>
                                     My experience with Kotak e-Term  from filling the proposal form to policy issuance has been smoother. Uploading document is generally challenging, but it was quite easier with Kotak Life. Their portal is responsive and intuitive. Keep up the good work!
                                    
                                </p>
                                <p class="customerReviews-name">Mukund Solanke</p>
                                <div class="customerReviews-star">
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/halfStar.svg" alt="Star" />
                                </div>
                            </div>
                        </div>
</div>
                       <div>
                        <div class="text-center customerReviews-sec">
                            <h2 class="customerReviews-title">Customer Reviews</h2>
                            
                            <p>Excellent experience</p>
                            <div class="customerReviews-text">
                                <p>
                                     Buying a term was long due for me. I found Kotak Life, logged in on their website and I got a call from their agent. I checked my eligibility through their portal, got a quote for the premium and I was in. My family’s financial security was now in my hands. Now my life is stress-free. 
                                    
                                </p>
                                <p class="customerReviews-name">Rahul Gupta</p>
                                <div class="customerReviews-star">
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/halfStar.svg" alt="Star" />
                                </div>
                            </div>
                        </div>
</div>
                     <div>
                        <div class="text-center customerReviews-sec">
                            <h2 class="customerReviews-title">Customer Reviews</h2>
                            
                            <p>Wonderful Journey</p>
                            <div class="customerReviews-text">
                                <p>
                                    Buying a term plan online sounded like a challenge as I am not used to buying critical insurance plans online. I came across Kotak Life when someone at work recommended to buy their Kotak e-Term. The plan is very simple, offered me plan options and I knew exactly that this was the right plan for me. 
                                    
                                </p>
                                <p class="customerReviews-name">Pranjal Gusain</p>
                                <div class="customerReviews-star">
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/halfStar.svg" alt="Star" />
                                </div>
                            </div>
                        </div>
</div>
                       <div>
                        <div class="text-center customerReviews-sec">
                            <h2 class="customerReviews-title">Customer Reviews</h2>
                            
                            <p>Excellent Assistance </p>
                            <div class="customerReviews-text">
                                <p>
                                    I have a good financial portfolio but there was one thing missing, a term plan. I wanted to buy term plan was to ensure my spouse’s financial future and keep her ready for any financial liabilities in my absence. After considering different plans, I finalized Kotak e-Term since it aligned perfectly with what I was looking for. 
                                    
                                </p>
                                <p class="customerReviews-name">Shehzan Merchant</p>
                                <div class="customerReviews-star">
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/halfStar.svg" alt="Star" />
                                </div>
                            </div>
                        </div>
</div>
                     <div>
                        <div class="text-center customerReviews-sec">
                            <h2 class="customerReviews-title">Customer Reviews</h2>
                            
                            <p>Smooth and hassle-free experience  </p>
                            <div class="customerReviews-text">
                                <p>
                                    Be it my family’s financial future or my little one’s happiness, Kotak e-Term helped me secure all of it in one insurance plan. They have affordable premiums, good life cover and some rider options that helped me manage many things at once. I strongly recommend you to buy a Kotak e-Term asap. 
                                    
                                </p>
                                <p class="customerReviews-name">Apurva Amod Gadikar</p>
                                <div class="customerReviews-star">
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/halfStar.svg" alt="Star" />
                                </div>
                            </div>
                        </div>
</div>
                    <div>
                        <div class="text-center customerReviews-sec">
                            <h2 class="customerReviews-title">Customer Reviews</h2>
                            
                            <p>Excellent policy servicing </p>
                            <div class="customerReviews-text">
                                <p>
                                    I was looking for a term plan when I came across Kotak e-Term  and used their portal to calculate premium. They have a simple portal where you enter the information and get a quote. Beyond that, I just enjoyed the fact that their journey is easy to follow and their call centre team assists if you are stuck somewhere.
                                    
                                </p>
                                <p class="customerReviews-name">Anil Kumar G</p>
                                <div class="customerReviews-star">
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/halfStar.svg" alt="Star" />
                                </div>
                            </div>
                        </div>
</div>
                     <div>
                        <div class="text-center customerReviews-sec">
                            <h2 class="customerReviews-title">Customer Reviews</h2>
                            
                            <p>Fast and easy</p>
                            <div class="customerReviews-text">
                                <p>
                                    Kotak e-Term was one of the recommended term plan while I was researching about the same. The service by the call centre agents was good. Also, their online portal is perfect. The Kotak e-Term helped me to become stress-free about any financial liability that might fall on my family, after me.
                                   
                                </p>
                                <p class="customerReviews-name">Apurva Amod Gadikar</p>
                                <div class="customerReviews-star">
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/halfStar.svg" alt="Star" />
                                </div>
                            </div>
                        </div>
</div>
                   <div>
                        <div class="text-center customerReviews-sec">
                            <h2 class="customerReviews-title">Customer Reviews</h2>
                            
                            <p>Good service</p>
                            <div class="customerReviews-text">
                                <p>
                                    Kotak e-Term was a term plan I came across in an ad while surfing social media. I could not find a better term plan. It is affordable and they have good service centre agents who help you with everything kindly and patiently. Buy a term plan if you want to live a stress-free life, save taxes and ensure your family’s finance is in good hands. 
                                   
                                </p>
                                <p class="customerReviews-name">Rajaganesh Rj</p>
                                <div class="customerReviews-star">
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/halfStar.svg" alt="Star" />
                                </div>
                            </div>
                        </div>
</div>
                     <div>
                        <div class="text-center customerReviews-sec">
                            <h2 class="customerReviews-title">Customer Reviews</h2>
                            
                            <p>Recommended to everyone</p>
                            <div class="customerReviews-text">
                                <p>
                                    A term plan is one of the insurance policies everyone should have, as per me. I bought Kotak e-Term and paying premiums for a year or more. The best part is it offered me flexible premium payment options that aligned with my financial commitments. Plus, they have different plan options that makes it easier for choosing the right cover as per your needs.
                                    
                                </p>
                                <p class="customerReviews-name">Jayant Mohanrao Gaikwad</p>
                                <div class="customerReviews-star">
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/star-1.svg" alt="Star" />
                                    <img src="assets/images/super-hero/halfStar.svg" alt="Star" />
                                </div>
                            </div>
                        </div>
</div>
                    </div>
                    </div>
                    <span class="pagingInfo-review-tes d-flex playfair_font justify-content-center"></span>
                </div>
            </div>
        </div>
    </section>


</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>

    
    $("#story-slider").slick({
  dots:false,
  infinite: true,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
  slidesToScroll: 1,
             responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                },
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }],
});


</script>