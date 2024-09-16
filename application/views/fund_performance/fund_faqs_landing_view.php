<?php
  //GA code Variables
  $categoryGA = '';
  if(get_cookie('kotak_customer_type')){
    if(get_cookie('kotak_customer_type') == 'new_customer') {
      $categoryGA = "new customers";
    } elseif (get_cookie('kotak_customer_type') == 'existing_customer') {
      $categoryGA = "existing customers";
    } elseif (get_cookie('kotak_customer_type') == 'life_advisor') {
      $categoryGA = "life advisor";
    }
  }else{
    $categoryGA = "new customers";
  }
  $moduleName = str_replace('-', ' ', $this->uri->segment(1));
  $eventGA = 'event invest fund faq load';
  $actionGA = 'investment fund faqs';
  $labelGA = 'load more click';
  //GA code Variables
?>

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
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Investment Fund FAQs</h1>
        <p>Get answers to all your policy related questions right here.</p>
        <a href="<?php echo base_url(FP_MODULE_LINK); ?>" class="kliBack"><span>Back</span></a>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- midWrapper Start -->
  <article class="searchWrapper">
    <div class="midWrapper">
      <div class="searchBox searchBox01">
        <input type="text" name="search" placeholder="Search by your question" data-action="Investment Fund FAQs" dataid="search-question" id="search-question"/>
        <a href="javascript:;" id="search-question-btn">Search</a> </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- FAQs Start -->
  <article class="faqsWrap">
    <div class="midWrapper">
      <!-- Accord Start -->
        <ul class="accordUL" id="faqs-div">
        </ul>        
      <!-- Accord End -->      
      <a href="javascript:;" class="link" id="load-more-faqs" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Load more FAQs</a>
      <div class="noRecord"></div>
      <div class="innerLoader">
        <img src="assets/images/loader.gif" alt="Kotak Loader" />
      </div>
    </div>
  </article>
  <!-- FAQs End --> 

  <input type="hidden" id="pageNo" value="0">
  <input type="hidden" id="searchQues" value="">
  <input type="hidden" id="pageLimit" value="<?php echo FAQS_LIMIT; ?>">
  
</section>
<!-- Section End -->