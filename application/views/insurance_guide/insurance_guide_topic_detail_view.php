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
  $moduleName = str_replace('-', ' ', $this->uri->segment(1));
  $actionGA = '';

  //GA code Variables
?>
<style>
	.new_article_cards{display:flex; flex-wrap:wrap;}
	.new_article_cards .reportBox img{height:150px; width:100%; object-fit:cover;}
@media screen and (min-width: 768px) {
	ul.reportUL_new>li{height:auto !important;}
}

 </style>

<!-- Section Start -->
<section> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb wed">
    <div class="midWrapper">
     <ul>
        <?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <!-- breadcrumb End --> 
  
  <!-- midWrapper Start -->
  <!--<article>
    <div class="midWrapper">
      <div class="headDesc">
        <?php if($topicInfo) { ?> 
          <h1><?php  $topicInfo->title; ?></h1>
          <?php $actionGA = strtolower(trim($topicInfo->title)); ?>
		  
		  <?php if($topicInfo->title=="Savings & Tax "){?>
		  <a href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_menu&utm_content=sticky_eterm&lead_group=kotak_organic" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Save Tax Now</a>
		  <?php } ?>
		  
		  <?php if($topicInfo->title=="About Life Insurance"){?>
		  <a href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_menu&utm_content=sticky_eterm&lead_group=kotak_organic" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event about life insurance', 'category': 'new customers', 'action': 'about life insurance', 'label': 'about life insurance'});">Buy Life Insurance Now</a>
		  <?php } ?>
	 
		  <?php if($topicInfo->title=="Family"){?>
		  <a href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_menu&utm_content=sticky_eterm&lead_group=kotak_organic" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event family insurance plans', 'category': 'new customers', 'action': 'family', 'label': 'view insurance plans'});">View Insurance Plans</a>
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Wealth Creation"){?>
		  <?php } ?>
		  
		  <?php if($topicInfo->title=="Protection"){?>
		  <a href="<?=base_url?>/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=homepage_menu&utm_content=sticky_eterm&lead_group=kotak_organic" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">Buy Term Plan Now</a>
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Retirement"){?>
		  <a href="<?=base_url?>/insurance-plans/retirement-plans/kotak-lifetime-income-plan-online??utm_source=NPSORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Retirement" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event retirement', 'category': 'new customers', 'action': 'retirement', 'label': 'retirement'});">View Plans</a>
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Health Insurance"){?>
		  <a href="<?=base_url?>/healthshield/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Health_Insurance_Health_Shield_Page" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Buy Health Insurance Now</a>
          <?php } ?>
		  
		  <p><?php echo $topicInfo->topic_description; ?></p>
          <a href="<?php echo base_url(IG_MODULE_LINK); ?>" class="kliBack"><span>Back</span></a>
        <?php } ?>
      </div>
    </div>
  </article>-->
  
  <article class="bg-gray">
    <div class="midWrapper">
      <div class="headDesc pb-mob-30">
        <?php if($topicInfo) { ?> 
          <h1 class="mb-0"><?php echo $topicInfo->title; ?></h1>
		  <p class="fs-16 text_center"><?php echo $topicInfo->topic_description; ?></p>
          <?php $actionGA = strtolower(trim($topicInfo->title)); ?>
		  
		  
		  
		  <?php if($topicInfo->title=="About Life Insurance"){?>
		  <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=blogcategory" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event about life insurance', 'category': 'new customers', 'action': 'about life insurance', 'label': 'about life insurance'});">Calculate Premium</a>
		  <?php } ?>
		  
		   <?php if($topicInfo->title=="Protection"){?>
		  <a  rel="follow" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=blogcategory" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">Calculate Premium</a>
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Wealth Creation"){?>
		  <a href="<?=base_url()?>/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=blogcategory" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event wealth creation', 'category': 'new customers', 'action': 'wealth creation', 'label': 'wealth creation'});">Invest in ULIP</a>
		  <?php } ?>
		  
		 
		  <?php if($topicInfo->title=="Retirement"){?>
		  <!-- <a  rel="follow" href="<?=base_url()?>/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=blogcategory " target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event retirement', 'category': 'new customers', 'action': 'retirement', 'label': 'retirement'});">Buy Kotak Lifetime Income Plan</a> -->
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Savings & Tax "){?>
		    <div class="dd-btn-flex">
        
		  <a href=" https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&amp;utm_medium=website&amp;utm_campaign=blog_cta&amp;utm_content==insuranceguide" target="_blank" class="redBtn ksap-btn online-dnone">Get Guaranteed Regular Income</a>
      <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/#/landing?utm_source=kasp_organic&amp;utm_medium=website&amp;utm_campaign=blog_cta&amp;utm_content==insuranceguide" class="redBtn">Get Guaranteed Lumpsum Returns</a>
      </div>
		  <!--<a href="<?=base_url?>/buy-kotak-guaranteed-savings-plan-online/#/landing?utm_source=gsp_organic&utm_medium=website&utm_campaign=blog_cta&utm_content=blogcategory" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Invest in Savings Plan</a>-->
		  <?php } ?>
		  
		   <?php if($topicInfo->title=="Government Schemes"){?>
		  <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=blogcategory" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Calculate Premium</a>
		  <?php } ?>
		  
		  <?php if($topicInfo->title=="Health Insurance"){?>
		  <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?=$topicInfo->title?>" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Calculate Term Insurance Premium</a>
          <?php } ?>
      
          <?php if($topicInfo->title=="Book Summary"){?>
		  <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?=$topicInfo->title?>" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Buy Term Plan</a>
          <?php } ?>
          
          <?php if($topicInfo->title=="Current Affairs"){?>
            <a href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=<?=$topicInfo->title?>" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Buy Term Plan</a>
          <?php } ?>
		  
      
		  
          <a href="<?php echo base_url(IG_MODULE_LINK); ?>" class="kliBack"><span>Back</span></a>
        <?php } ?>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
   <!-- midWrapper Start -->
  <article class="searchWrapper">
    <div class="midWrapper d-none">
      <div class="searchBox searchBox01">
        <input type="text" name="search" placeholder="Search for article" data-action="<?php echo $topicInfo->title; ?>" id="search-article" />
        <a href="javascript:;" id="search-article-btn">Search</a> </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  
  <!-- Insurance Guide Start -->
  <article class="likeWrap likeWrap-mob">
    <div class="midWrapper">
      <?php
        //GA code Variables
        $eventGA  =   'event '.$moduleName.' most';
        //$labelGA  =   'read more|glossary';
        //GA code Variables
      ?>
      <ul class="mostVisited">
        <li><a href="javascript:;" class="mRecent selected" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': 'most recent'});">Most Recent</a></li>
        <li><a href="javascript:;" class="mViewed" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': 'most viewed'});">Most Viewed</a></li>
      </ul>
      <!--<ul class="reportUL reportUL_img" id="articles-div">
      </ul>-->
	   <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck hgfgf" id="articles-div">
      
      </ul>
     
       <?php
        //GA code Variables
        $eventGA  =   'event '.$moduleName.' load';
        $labelGA  =   'load more';
        //GA code Variables
      ?>
      <!-- <a href="javascript:;" class="link" id="load-more-articles" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Load More</a> -->
      <div class="noRecord"></div>
      <div class="innerLoader">
        <img src="assets/images/loader.gif" alt="Kotak Loader" />
      </div>
    </div>
    <?php if($topicInfo->title=="Savings & Tax "){?>
		 <!-- <a href="<?=base_url?>/OnlineTermInsurance/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Saving_and_Tax" rel="follow" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event saving and tax', 'category': 'new customers', 'action': 'saving and tax', 'label': 'saving and tax'});">Save Tax Now</a>-->
		  <?php } ?>
		  
		  <?php if($topicInfo->title=="About Life Insurance"){?>
		  <a href="<?=base_url?>/OnlineTermInsurance/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=About_Life_Insurance" rel="follow" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event about life insurance', 'category': 'new customers', 'action': 'about life insurance', 'label': 'about life insurance'});">Buy Life Insurance Now</a>
		  <?php } ?>
	 
		  <?php if($topicInfo->title=="Family"){?>
		  <a href="<?=base_url?>/OnlineTermInsurance/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Family" rel="follow" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event family insurance plans', 'category': 'new customers', 'action': 'family', 'label': 'view insurance plans'});">View Insurance Plans</a>
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Wealth Creation"){?>
		  <!--<a rel="follow" href="<?=base_url?>/OnlineTermInsurance/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Wealth_Creation" rel="follow" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event wealth creation', 'category': 'new customers', 'action': 'wealth creation', 'label': 'wealth creation'});">Invest Now</a>-->
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Protection"){?>
		  <a href="<?=base_url?>/buy-online-term-insurance/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Protection" rel="follow" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event protection', 'category': 'new customers', 'action': 'protection', 'label': 'protection'});">Buy Term Plan Now</a>
          <?php } ?>
		  
		  <?php if($topicInfo->title=="Retirement"){?>
		  <!-- <a href="<?=base_url?>/nps/kotak-lifetime-income-plan/#/landing?utm_source=NPSORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Retirement" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event retirement', 'category': 'new customers', 'action': 'retirement', 'label': 'retirement'});">View Plans</a>-->
		  <a href="<?=base_url?>insurance-plans/retirement-plans" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event retirement', 'category': 'new customers', 'action': 'retirement', 'label': 'retirement'});">View Retirement Plans</a>
          <?php } ?>
		  
		  <!-- <?php if($topicInfo->title=="Health Insurance"){?>
		  <a href="<?=base_url?>/healthshield/?utm_source=ORGANIC&utm_medium=Website&utm_campaign=Contextual_CTA&utm_content=Health_Insurance_Health_Shield_Page" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'event health insurance', 'category': 'new customers', 'action': 'health insurance', 'label': 'health insurance'});">Buy Health Insurance Now</a>
          <?php } ?> -->
  <?php         $addingclass="";
  $dblock='';
  $pagenumber=round($articlescount/12); 
  if($pagenumber < 2){
    $dblock="d-none";
  }
  $page=0;$href=$href1='';$pageadd=$pageminus=0;
  if(isset($_GET['page'])){
    $page=$_GET['page'];
  }
  $paginationleft='pagintaion-disbled';
  $paginationright='';
  $pageadd=2;
  if($articlescount){ ?>
	 <div class="pagination <?=$dblock?>">
  <ul id="pagination" class="headDesc">
 <?php if($page!=''){ 
                     if(($page > 1)  && ($page < (round($articlescount/12)-1))){
                      $paginationleft='';
                      $paginationright='';  
                      $pageadd=$page+1;  
                      $pageminus=$page-1;                  
                    }else if($page >= (round($articlescount/12))){ 
                         $paginationleft='';
                         $paginationright='pagintaion-disbled';
                         $pageadd=$page+1; 
                         $pageminus=$page-1;  
                    }else if($page==1){
                      $paginationleft='pagintaion-disbled';
                      $pageadd=$page+1; 
                      $pageminus=$page-1;                  
                      $paginationright='';
                    }else{
                          $paginationleft='';
                          $paginationright='';
                          $pageadd=$page+1; 
                          $pageminus=$page-1;                  
                   

                    }
                  
             }
             $href= "insurance-guide/$topicSlug?page=$pageminus";
             $href1= "insurance-guide/$topicSlug?page=$pageadd";
 ?>
 
    <li class="page-left"><a class="kliBack first-left <?=$paginationleft?>" href="<?=$href?>"></a></li>
    
      <?php  for($i=1;$i<=round($articlescount/12);$i++){
        $active='';
       if($i==$page){
         $active="active";
       }else if($page=='' && $i==1){
        $active="active";
       }
        ?>
        <li><a href="insurance-guide/<?=$topicSlug?>?page=<?=$i?>" class="pagination-class<?=$i?> pagi-nation <?=$active?>"><?=$i?></a></li>
    
     <?php  } 
    ?>
    <li class="page-right"><a class="kliBack last-right <?=$paginationright?>" href="<?=$href1?>" ></a></li>
    
  </ul> 
  </div>
  <?php } ?>
		 
	
  </article>
  
  
  <!-- Insurance Guide End --> 
  
  <!-- Insurance Guide Start -->
  <article class="planWrap">
    <div class="midWrapper">
      <div class="headDesc headDesc02">
        <p>You can access other categories here</p>
      </div>
      <ul class="reportUL reportUL_img reportUL_img2">
        <?php 
            if(count($randomTopicInfo)) { 
              foreach ($randomTopicInfo as $boxInfo) { 
			   $alt_icon_title="";
			   if($boxInfo->topic_icon=="{filedir_6}blog-retirment.png")
			   {
				   $alt_icon_title="Icon for retirment topic";
			   }
			   else if($boxInfo->topic_icon=="{filedir_6}blog-protection.png")
			   {
				   $alt_icon_title="icon for protection topic";
			   }
			   else if($boxInfo->topic_icon=="{filedir_6}blog-wealthCreation.png")
			   {
				   $alt_icon_title="icon for wealth Creation topic";
			   }else if($boxInfo->topic_icon=="{filedir_6}books-summary.png"){
          $alt_icon_title="icon for book summary topic";

         }else if($boxInfo->topic_icon=="{filedir_6}current-affairs.png"){
          $alt_icon_title="icon for current affairs topic";

         }else{
			   $alt_icon_title = "Topic Icon";
			   }
         
			   
			   ?>

                <li>
                  <div class="reportBox">
                    <div class="img">
                      <img src="<?php echo str_replace('{filedir_6}', 'assets/images/uploads/insurance-guides/topics/icons/', $boxInfo->topic_icon) ?>" alt="<?=$alt_icon_title?>">
                    </div>
                    <div class="detail">
                      <h3><?php echo $boxInfo->title; ?></h3>
					  
                      <p><?php echo read_more_description($boxInfo->short_description);?></p>
                      <?php
                        //GA code Variables
                        $eventGA  =   'event '.$moduleName.' categories';
                        $labelGA  =   isset($boxInfo->title) ? 'read more|' . strtolower($boxInfo->title) : '';
                        //GA code Variables
                      ?>
                      <a href="<?php echo site_url( IG_MODULE_LINK.'/'.$boxInfo->url_title); ?>" class="links" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Read more</a> </div>
                  </div>
                </li>
            
            <?php }  } ?>
      </ul>
    </div>
  </article>
  <!-- MidWraaper End --> 
  
  <input type="hidden" id="url" value="<?=base_url()?>">
  <?php if($page==0){$page=0;}else{$page=$page-1;}?>
  <input type="hidden" id="pageNo" value="<?php echo $page?>">
  <input type="hidden" id="sortType" value="recent">
  <input type="hidden" id="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>">
  <input type="hidden" id="searchArticle" value="">
  <input type="hidden" id="pageType" value="topic">
  <input type="hidden" id="topicSlug" value="<?php echo $this->uri->segment(2);?>">

</section> 
<!-- Section End -->
<script>
function pagination(i){
  if(i=='previous'){
    pageNo1=$('.pagi-nation.active').text();
    pageNo1--;
    pageNo=String(pageNo1);
      
   
  }else if(i=='next'){
    pageNo1=$('.pagi-nation.active').text();
    pageNo1++;
    pageNo=String(pageNo1);

    
  } else{ 
         var pageNo = i;
  }
  
	url = $('#url').val(),
        sortType = $('#sortType').val(),
        pageLimit = $('#pageLimit').val(),
        topicSlug = $('#topicSlug').val(),
        searchArticle = $('#searchArticle').val(),
        baseurl = $('base').attr('href'),
        pageType = $('#pageType').val(), 
        href = pageType == 'topic' ? url + 'insurance-guide/articles/load-more' : url + 'insurance-guide/tag-articles/load-more',
        post_data = { page: pageNo, sortType: sortType, topicSlug: topicSlug, searchArticle: searchArticle,url: url};
    $('.noRecord').text('').css("display", "none");
    $('#load-more-articles').css("display", "none");
    $('.innerLoader').css("display", "block");
    $.ajax({
        url: href,
        type: 'post',
        contentType: "application/json; charset=UTF-8",
        data: JSON.stringify(post_data),
        dataType: "json",
        success: function(data) {
            var newdata = data, 
                nextDataCount = newdata.nextDataCount;
            if (newdata.success) {
                var arraydata = newdata.data,
                    article_title = '',
                    short_description = '',
                    simpletext = new RegExp(searchArticle, "gi"),
                    newhtmldata = '',
                    eventGA = 'event insurance guide read more',
                    actionGA = '',
                    labelGA = '',
                    topic_name = '';
                if (arraydata.length) {
					newhtmldata=newdata.newhtmldata; 
                 

              
                $('.innerLoader').css("display", "none");
                gridBox01();
                $('.pagi-nation').removeClass('active');
                
                if((pageNo > 1)  && (pageNo < <?=round($articlescount/12)-1?>)){
                  $('.first-left').removeClass('pagintaion-disbled');
                  $('.last-right').removeClass('pagintaion-disbled');
                }
                else if(pageNo >= <?=round($articlescount/12)-1?>){ 
                     $('.last-right').addClass('pagintaion-disbled');
                     $('.first-left').removeClass('pagintaion-disbled');
                }else if(pageNo>=1){
                  $('.first-left').addClass('pagintaion-disbled');
                  $('.last-right').removeClass('pagintaion-disbled');
                }else{
                      $('.first-left').removeClass('pagination-disabled');
                      $('.last-right').removeClass('pagination-disabled');
                }
$("#articles-div").html(newhtmldata);
$('.pagination-class'+pageNo).addClass('active')
            }
          }
        }
    });
}
</script>