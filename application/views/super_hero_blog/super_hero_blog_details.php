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
$currenturl= $_SERVER['REQUEST_URI'];
$moduleName = str_replace('-', ' ', $this->uri->segment(1));
$eventGA = 'event ' . $moduleName . ' articles';
$actionGA = $moduleName;
//GA code Variables
?>
<link rel="stylesheet" href="<?=base_url()?>assets/css/super-hero-story.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Adding slick css and js below -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<div>
<?php  $numberofepisodes=count($episodes); 
  $episodeprev="display:none";
  $episodenext="display:none";  
  $prevurl="";
  $nexturl="";  
   if($episodenumber!=''){
            if($episodenumber==1){
                $episodeprev="display:none";
                $episodenext="display:block"; 
                $prevurl="";
                $nexturl=$episodenumber+1;
            }else if($numberofepisodes==$episodenumber){
                $episodeprev="display:block";
                $episodenext="display:none"; 
                $prevurl=$episodenumber-1;
                $nexturl="";
            }else if($numberofepisodes>$episodenumber){
                $episodeprev="display:block";
               $episodenext="display:block"; 
               $prevurl=$episodenumber-1;
                $nexturl=$episodenumber+1;

            }elseif($numberofepisodes<$episodenumber){
                 $prevurl=$episodenumber-1;
                $nexturl=$episodenumber+1;
                $episodeprev="display:block";
                $episodenext="display:block"; 

              
            }?>                
    <?php }else{
         $episodeprev="display:none";
         $episodenext="display:block"; 
         $prevurl="";
         $nexturl=1;
        

        }?>
   
   <!--New code-->
   <?php     $image=	str_replace('{filedir_27}', 'assets/images/uploads/insurance-stories/',$storyInfo->field_id_406); ?>
   <?php     $imagemobile=	str_replace('{filedir_27}', 'assets/images/uploads/insurance-stories/',$storyInfo->field_id_481); ?>

    <section class="super-hero-details">
        <div class="storyHero-bg" style="background-image:url(<?=$image?>); ">
        <style>
             @media only screen and (max-width:480px){
                 .storyHero-bg{background-image:url(<?=$imagemobile?>) !important; height: 90vh;}}
            </style>
        <?php  $cssstories=$cssstories='display:none !important';$previousRecordurl=''; if(!empty($previousRecord)){
            $previousRecordurl=$previousRecord->url_title;
            $cssstories='display:block !important';
            }    ?>     

          <div class="container">
           <div class="breadcrms">
            <ol class="arrows">
            <?php echo $this->breadcrumb->output(); ?>

            </ol>
         </div>

            <div class="storyBlog">
              <div class="storyBlog_1">
              <?php  $cssstories=$cssstories='display:none !important';$previousRecordurl=''; if(!empty($previousRecord)){
            $previousRecordurl=$previousRecord->url_title;
            $cssstories='display:block !important';
            }?>
             
                <h1 class="story_title"><?=$episodesingle[0]->short_description?></h1>
             <?php $edit_date=$storyInfo->field_id_404; 
               $view_count_one=$storyInfo->field_id_403;?>
               <div class="storedts">
                <p class="mainBlog_desc"><?=$episodesingle[0]->lines?></p> 
                <p class="story-carddate"><?php echo date(BLOG_DATE_FORMAT, $edit_date); ?><span><?=$view_count_one?> Views</span></p>
                 
                 <div class="mobile-ul">
                 <ul class="episode-mobile">
                     <li><a href="<?=base_url()?>insurance-stories" class="home-bg"><img src="assets/images/insurance-story-home.png"></a></li>
                     <li><a href="<?=$currenturl?>#readstory" class="read-epi">Read Episode</a></li>
                     <?php $modifiedStringUrl=''; if($episodes){
           foreach($episodes as $episodesrow){
            $modifiedStringUrl = str_replace(' ', '-', $episodesrow->title);
            }}?>
                     <?php $url=$_SERVER['REQUEST_URI'];
                $explodedurl=explode('/',$url);
                 if($explodedurl[3]!='Episode-4'){?>
                     <li><a href="<?=base_url()?>insurance-stories/<?=$storyInfo->url_title;?>/<?=$modifiedStringUrl?>" class="next-epi">Next Episode <i class="arrow-right arr"></i></a></li>
                     <?php }else{
                        if($previousRecordurl!=''){?>
                        <li><a href="<?=base_url()?>insurance-stories/<?=$previousRecordurl?>/Episode-1" class="next-epi">Next Story<i class="arrow-right arr"></i></a></li>
                         <?php }else{
                             if(!empty($nextRecord)){
                             $nextRecordurl=$nextRecord->url_title;

                             ?>
                            <li><a href="<?=base_url()?>insurance-stories/<?=$nextRecordurl?>/Episode-1" class="next-epi">Next Story<i class="arrow-right arr"></i></a></li>
   
                         <?php }}?>
                     <?php }?>
                 
                 </ul>
                  </div>
              </div>
            </div>
            <div class="storyBlog-cards">
            <?php $modifiedStringUrl=''; if($episodes){
           foreach($episodes as $episodesrow){
            $modifiedStringUrl = str_replace(' ', '-', $episodesrow->title);
            $image=	str_replace('{filedir_27}', 'assets/images/uploads/insurance-stories/', $episodesrow->image); 

            ?>
              <a href="<?=base_url()?>insurance-stories/<?=$storyInfo->url_title;?>/<?=$modifiedStringUrl?>">
                <div class="storyBlog-card">
                  <img src="<?=$image?>" alt="Blogs">
                  <div class="storyBlog-cardDesc">
                   <h2 class="epi_no"><?=$episodesrow->title?></h2>
                    <h2 class="blogs-cardTitle"><?=$episodesrow->short_description?></h2>
                  </div>
                </div>
              </a>
              
             <?php }} ?>
              
            </div>
          </div>
             <div class="next-prew">
                <a href="<?=base_url()?>insurance-stories" class="prevurl">
                   <span class="epi-prev">Insurance Stories </span>
                </a>
                <?php $url=$_SERVER['REQUEST_URI'];
                $explodedurl=explode('/',$url);
                 if($explodedurl[3]!='Episode-4'){?>
                <a href="<?=base_url()?>insurance-stories/<?=$storyInfo->url_title?>/Episode-<?=$nexturl?>" class="nexturl" style="<?=$episodenext?>">
                      <span class="epi-next">Next Episode</span> 
                </a>
                <?php } else {
                              if($previousRecordurl!=''){?>
                                <a href="<?=base_url()?>insurance-stories/<?=$previousRecordurl?>/Episode-1" class="nexturl">
                                <span class="epi-next">Next story</span> 

                              </a>
                             <?php  }else {
                    if(!empty($nextRecord)){
                             $nextRecordurl=$nextRecord->url_title;

                             ?>
                                <a href="<?=base_url()?>insurance-stories/<?=$nextRecordurl?>/Episode-1" class="nexturl">
                                <span class="epi-next">First story</span> 
                </a>   
                <?php }}}?>
            </div>
        </div>
    
    <section class="storyContent">
        <div class="container">
            <div class="story-blogs">
            <div class="storyContent-desc" id="readstory">
                <?=$episodesingle[0]->description?>
        </div>
                <div class="blogsSearch">
                    <p>
                      

                    </p>

                    <div class="blogsSearch-recentPost">
                        <p class="recentPost-title"><span>Recent posts </span></p>
                        <ul>

                            <?php if($articles){
    foreach($articles as $article){
      $article_image=	str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $article->article_image); ?>
                            <li>
                            <a href="<?=base_url()?>insurance-guide/<?php echo $article->topic_url_title.'/'.$article->titlename?>">
                                <div class="recentPost-content">
                                    <div class="recentPost-img">
                                        <p> <img src="<?=$article_image?>" alt="Story"></p>

                                    </div>

                                    <div class="recent-title"> <p class="recentPost-text"><?=$article->title?></p>
                                    <p class="recentPost-carddate"><?=date('F j, Y',$article->posted_date)?> <span>
                                            <?=$article->viewed_count?> Views</span></p>
                                    </div>

                                    

                                </div>

    </a>
                            </li>
                            <?php  }
  }?>

                        </ul>

                    </div>

                    <p>
                        <!-- Card -->
                    </p>
                    <div class="storyCard">
                        <div class="storyCard-flex">
                            <h2>Kotak Guaranteed Fortune Builder </h2>
                        <div class="ml-auto tooltip">
                             
                              <a href="<?=base_url()?>assets/images/uploads/insurance-plans/Kotak_Guaranteed_Fortune_Builder_Brochure_Online.pdf" download="Brochure">
                                  <button class="broch-btn want-to-btn"> <img src="<?=base_url()?>assets/images/down-broch.svg" class=""></button>
                              </a>
							 
                          </div>
                        </div>

                        <div class="storyCard-features">
                            <p class="kgfb_pera">Pay 10,000/month for 10 years,
Get 1,65,805/Year* for next 15 years.</p>
                            <ul>
                                <li class=" d-flex"> <i class="fa fa-check checkIcon" aria-hidden="true"></i> <span>Guaranteed<sup>@</sup> Income Benefit for upto 25 years</span> </li>

                                <li class="d-flex"> <i class="fa fa-check checkIcon " aria-hidden="true"></i> <span>
Flexibility to choose income period</span> </li>

                                <li class="d-flex"> <i class="fa fa-check checkIcon" aria-hidden="true"></i>
                                    <span>Premium break for females on child birth or any listed specific illnesses</span> </li>

                                <li class="d-flex"> <i class="fa fa-check checkIcon" aria-hidden="true"></i>
                                    <span>Life cover for the premium payment period</span> </li>

                                <li class="d-flex"> <i class="fa fa-check checkIcon" aria-hidden="true"></i>
                                    <span>Enhance your life cover with rider offerings</span> </li>

                                <li class="d-flex"> <i class="fa fa-check checkIcon" aria-hidden="true"></i> <span>Free
                                        Medical Check Up every 5th year**</span> </li>
                            </ul>

                            <div class="storyCard-knowMore">
                                <p> <a target="_blank" href="online-plans/savings-plan/kotak-guaranteed-fortune-builder-online">View Kotak Guaranteed Fortune Builder</a></p>

                            </div>

                            <div class="storyCard-buy">
                                <p> <a target="_blank" rel="follow" href="https://www.kotaklife.com/buy-kotak-guaranteed-fortune-builder/#/landing?utm_source=kgfb_organic&amp;utm_medium=website&amp;utm_campaign=product_card&amp;utm_content=benefits-of-gst-on-household-appliances,-phones-&amp;-daily-consumer-goods=">INVEST NOW</a></p>

                            </div>

                            <div class="d-flex">
                                <div>
                                    <p class="p-ref">ARN. No. KLI/23-24/E-BB/1201</p>

                                </div>

                                <div class="ml-auto">
                                    <p class="p-tc"> <a target="_blank" href="insurance-guide/savingstax/termsconditions?g=1">T&amp;C</a> </p>

                                </div>

                            </div>

                        </div>

                    </div>

                   

                </div>

            </div>

        </div>

    </section>
</div>
