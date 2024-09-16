




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
      <div class="headDesc headDesc01">
        <h1>Fund Performance</h1>
        <p>A fund's performance is expressed in terms of its total return, which is the sum of the change in a fund's net asset value(NAV), its dividends and its capital gains distributions over a given period of time.</p>
        <img class="lazy" data-src="assets/images/fundpf-hd.png"> 
	    <!-- <a href="javascript:;" class="kliBack"><span>Back</span></a> -->
		
		
        </div>
      <ul class="landingUL">
      <?php if(count($moduleInfo)) { 
            $i = 0;
              foreach ($moduleInfo as $module) {
                
                //GA code Variables
                $eventGA = 'event '.$moduleName.' know more';
                $actionGA = $moduleName;
                $labelGA =  isset($module->title) ? 'know more|' . strtolower($module->title) : '';
                //GA code Variables

                if(($i%2) == 0) {

      ?>
        <li>
          <div class="boxInfo">
            <div class="mid"> <img class="lazy" data-src="<?php echo str_replace('{filedir_13}', 'assets/images/uploads/fund-performance/icons/', $module->icon_image); ?>" alt="<?php echo $module->title; ?>">
              <h3><?php echo $module->title; ?></h3>
              <p><?php echo $module->short_description; ?></p>
              <a href="<?php echo site_url(FP_MODULE_LINK.'/'.$module->url_title); ?>" class="link"  onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know more</a> </div>
          </div>
          <div class="img"><img class="lazy" data-src="<?php echo str_replace('{filedir_14}', 'assets/images/uploads/fund-performance/banners/', $module->banner_image); ?>" alt="<?php echo $module->title; ?>"></div>
        </li>
        <?php } else { ?>
        <li>
          <div class="img"><img class="lazy" data-src="<?php echo str_replace('{filedir_14}', 'assets/images/uploads/fund-performance/banners/', $module->banner_image); ?>" alt="<?php echo $module->title; ?>"></div>
          <div class="boxInfo">
            <div class="mid"> <img class="lazy" data-src="<?php echo str_replace('{filedir_13}', 'assets/images/uploads/fund-performance/icons/', $module->icon_image); ?>" alt="<?php echo $module->title; ?>">
              <h3><?php echo $module->title; ?></h3>
              <p><?php echo $module->short_description; ?></p>
              <?php if($module->url_title=='investment-fund-faqs'){?>
                <a href="<?php echo site_url("how-do-i/fund-update"); ?>" class="link"  onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know more</a> </div>
             <?php  }else{?>
              <a href="<?php echo site_url(FP_MODULE_LINK.'/'.$module->url_title); ?>" class="link"  onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Know more</a> </div>
          <?php } ?>
          </div>
        </li>
       <?php } $i++; } } ?>
      </ul>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <?php //Need Help Buying A Plan Block
        $eventGA = 'event need help email';
        $actionGA = $moduleName;
        $labelGA = 'email click';
        $this->load->view('common/need_help_buying_a_plan', array('eventGA' => $eventGA, 'labelGA' => $labelGA, 'actionGA' => $actionGA, 'categoryGA' => $categoryGA));
 
  ?>
</section>
<!-- Section End --> 