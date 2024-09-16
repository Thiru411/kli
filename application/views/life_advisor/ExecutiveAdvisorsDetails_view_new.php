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
  //GA code Variables
?>
<!-- Section Start -->
<section>
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
  </article>
  <!-- breadcrumb End -->
    <!-- midWrapper Start -->
  <article class="">
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Our Executive Advisors </h1>
        <p>Discipline. Drive. Determination. The 3 Ds of success. These are the qualities that we look for in individuals in our Advisor Promotion Programme: Pragati. Our Executive Advisors have always utilised knowledge, experience and expertise to correctly assess our customers' needs and suggest the ideal plan from our diverse product portfolio. It is this dedication to customers that has played a big part in their success. We are sure that they will continue to improve upon their performance, which will help them reach even higher levels within the organisation.</p>
        <a href="javascript:;" class="kliBack" onclick="goBack();"><span>Back</span></a> </div>
    </div>
  </article>
  <!-- midWrapper End --> 
   <!-- midWrapper Start -->
  <article class="searchWrapper">
    <div class="midWrapper">
      <div class="searchBox searchBox01">
         <input type="text" name="search" placeholder="Search our Executive Advisors" data-action="our-executive-advisors" id="search-exeutive-keyword" />
        <a href="javascript:;" id="search-executive-advisor">Search</a> </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
 <!-- Executive Advisor Details Start --> 
  <article class="planWrap bodWrapper executiveAdvisorWrap">
    <div class="midWrapper">
      <p class="hd">Or search alphabetically</p>
      <ul class="executiveAdvisorUL">
          <?php 
              $alphabets = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

              if(count($alphabets)){
                  $eventGA = 'event advisor alphabets';
                  $actionGA = 'advisor alphabets';
                foreach ($alphabets as $value) {
                  $labelGA = strtolower($value);

                  if($value == 'A'){
                     echo '<li><a href="javascript:;" class="selected ga_track" data-event="event advisor alphabets" data-action="advisor alphabets" data-label="'.$labelGA.'" >'.$value.'</a></li>';
                  } else {
                    echo '<li><a href="javascript:;" class="ga_track" data-event="event advisor alphabets" data-action="advisor alphabets" data-label="'.$labelGA.'">'.$value.'</a></li>';
                  }

                }
              }

          ?>
      </ul>
	   <div class="bodWrap">
      <ul class="planUL bodUL" id="advisor-div">
      </ul>
	  </div>
      <?php
        //GA code Variables
        $eventGA  =   'event advisor load more';
        $actionGA =   'advisor';
        $labelGA  =   'load more click';
        //GA code Variables
      ?>
	  <div class="likeWrap">
      <a href="javascript:;" class="link" id="load-more-advisor" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Load More</a>
	  </div>
      <div class="noRecord"></div>
      <div class="innerLoader">
        <img src="assets/images/loader.gif" alt="Kotak Loader" />
      </div>
    </div>
  </article>
  <!-- Executive Advisor Details End --> 
 <input type="hidden" id="ourexepageNo" value="0">
 <input type="hidden" id="ourexekeyword" value="A">
 <input type="hidden" id="ourexepageLimit" value="<?php echo EXECUTIVEADVISOR_LIMIT; ?>">
 
</section>
<!-- Section End -->
<script>
var formsJson ="";
var formsJsonLmt = "";

var gaCat = <?php echo json_encode($gaCat);?>;
var agentsJson = "";

var jsonSucessStories = "";
var resLimit = "";

var jsonExeAdvisors = "";
var resExeAdvLimit= "";

var jsonFaqs = "";
var resFaqsLimit= "";
</script> 
