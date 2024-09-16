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
  $eventGA = 'event load more faq';
  $actionGA = 'policy faqs';
  $labelGA = 'load more faqs click';
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
        <h1>Policy FAQs</h1>
        <p>Get answers to all your policy related questions right here.</p>
        <a href="<?php echo base_url(IG_MODULE_LINK); ?>" class="kliBack"><span>Back</span></a>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  
  <div class="tabWrap">
    <ul class="fundTabUL fundTabUL01 fundTabUL012">
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $categoryGA;?>', 'action':'get policy faqs','label':'tab|Policy Faqs'});" href="<?php echo base_url()?>insurance-guide/policy-faqs" class="selected">General FAQs</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $categoryGA;?>', 'action':'get policy related faqs','label':'tab|Policy Related Faqs'});" href="<?php echo base_url()?>insurance-guide/policy-related-faqs">Policy Related FAQs</a></li>
    </ul>
  </div>
  
  
  <!-- midWrapper Start -->
  <article class="searchWrapper">
    <div class="midWrapper">
      <div class="searchBox searchBox01">
        <input type="text" name="search" placeholder="Search by your question" id="search-question" data-action="policy faqs" />
        <a href="javascript:;" id="search-question-btn">Search</a> </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- FAQs Start -->
  <article class="faqsWrap" id="faqsWrapDiv">
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

  <input type="hidden" id="faqType" value="1">
  <input type="hidden" id="pageNo" value="0">
  <input type="hidden" id="searchQues" value="">
  <input type="hidden" id="pageLimit" value="<?php echo FAQS_LIMIT; ?>">
  
</section>
<!-- Section End -->