<!-- Section Start -->
<section> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
        <?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <!-- breadcrumb End --> 
  
  

    
  <!-- midWrapper Start -->
  <article class="bg-gray">
    <div class="midWrapper">
      <div class="headDesc pb-mob-30">
        <?php if(count($tagInfo)) { ?> 
          <h1 class="mb-0"><?php echo $tagInfo->title; ?></h1>
		  
		    <!--<p class="fs-16 text_center">Some text</p>
			<a href="#" class="redBtn">Buy Online</a>-->
          <a href="<?php echo base_url(IG_MODULE_LINK); ?>" class="kliBack"><span>Back</span></a>
        <?php } ?>
		
		 
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
   <!-- midWrapper Start 
  <article class="searchWrapper">
    <div class="midWrapper">
      <div class="searchBox searchBox01">
        <input type="text" name="search" placeholder="Search for article" data-action="<?php echo $tagInfo->title; ?>" id="search-article" />
        <a href="javascript:;" id="search-article-btn">Search</a> </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
 
  <!-- Insurance Guide Start -->
  <article class="likeWrap">
    <div class="midWrapper">
      <ul class="mostVisited">
        <li><a href="javascript:;" class="mRecent selected">Most Recent</a></li>
        <li><a href="javascript:;" class="mViewed">Most Viewed</a></li>
      </ul>
      <ul class="reportUL reportUL_img" id="articles-div">
      </ul>
      <a href="javascript:;" class="link" id="load-more-articles">Load More</a>
      <div class="noRecord"></div>
      <div class="innerLoader">
        <img src="assets/images/loader.gif" alt="Kotak Loader" />
      </div>
    </div>
  </article>
  <!-- Insurance Guide End --> 
  <input type="hidden" id="pageNo" value="0">
  <input type="hidden" id="sortType" value="recent">
  <input type="hidden" id="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>">
  <input type="hidden" id="searchArticle" value="">
  <input type="hidden" id="pageType" value="tag">
  <input type="hidden" id="topicSlug" value="<?php echo $this->uri->segment(3);?>">

</section>
<!-- Section End -->