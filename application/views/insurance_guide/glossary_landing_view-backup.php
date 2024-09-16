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
        <h1>Glossary</h1>
        <p>Know different life insurance related terms to understand the policies better.</p>
        <a href="<?php echo base_url(IG_MODULE_LINK); ?>" class="kliBack"><span>Back</span></a>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- midWrapper Start -->
  <article class="searchWrapper">
    <div class="midWrapper">
      <div class="searchBox searchBox01">
         <input type="text" name="search" placeholder="Search for word" data-action="glossary" id="search-keyword" />
        <a href="javascript:;" id="search-keyword-btn">Search</a> </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- Insurance Guide Start -->
  <article class="likeWrap glossaryWrap">
    <div class="midWrapper">
      <p class="hd">Or search alphabetically</p>
      <ul class="glossaryUL">
          <?php 
              $alphabets = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

              if(count($alphabets)){
                  $eventGA = 'event glossary alphabets';
                  $actionGA = 'glossary alphabets';
                foreach ($alphabets as $value) {
                  $labelGA = strtolower($value);

                  if($value == 'A'){
                     echo '<li><a href="javascript:;" class="selected ga_track" data-event="event glossary alphabets" data-action="glossary alphabets" data-label="'.$labelGA.'" >'.$value.'</a></li>';
                  } else {
                    echo '<li><a href="javascript:;" class="ga_track" data-event="event glossary alphabets" data-action="glossary alphabets" data-label="'.$labelGA.'">'.$value.'</a></li>';
                  }

                }
              }

          ?>
      </ul>
      <ul class="reportUL reportUL_noLink" id="glossary-div">
      </ul>
      <?php
        //GA code Variables
        $eventGA  =   'event glossary load more';
        $actionGA =   'glossary';
        $labelGA  =   'load more click';
        //GA code Variables
      ?>
      <a href="javascript:;" class="link" id="load-more-glossary" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Load More</a>
      <div class="noRecord"></div>
      <div class="innerLoader">
        <img src="assets/images/loader.gif" alt="Kotak Loader" />
      </div>
    </div>
  </article>
  <!-- Insurance Guide End --> 
  
  <!-- Insurance Guide Start -->
  <article class="planWrap writeusWrap">
    <div class="midWrapper">
      <p class="hd"> If there is any specific word you are looking for, please write to us.</p>
      <form method="post" id="users-words-form">
        <ul class="writeusUL">
          <li>
            <ul>
              <li>
                <input type="text" placeholder="Name" id="users-name"/>
                <div class="errorMsg" id="users-name-error"></div>
              </li>
              <li>
                <input type="text" placeholder="Email ID" id="users-email"/>
                <div class="errorMsg" id="users-email-error"></div>
              </li>
            </ul>
            </li>
          <li class="secondLi">
            <ul>
              <li>
                <input type="text" placeholder="Write word here" id="users-keyword"/>
                <div class="errorMsg" id="users-keyword-error"></div>
              </li>
              <li><a href="javascript:;" class="buttonClick" id="user-word-submit">Send</a></li>
            </ul>
          </li>
        </ul>
      </form>
      <div class="successMeg" id="form-success"></div>
      <div class="errorMsg" id="form-error"></div>
    </div>
  </article>
  <!-- MidWraaper End --> 

  <input type="hidden" id="pageNo" value="0">
  <input type="hidden" id="keyword" value="A">
  <input type="hidden" id="pageLimit" value="<?php echo GLOSSARY_LIMIT; ?>">
  
</section>
<!-- Section End -->