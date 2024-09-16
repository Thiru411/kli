<style>
.vCenterWrap{vertical-align:top !important;}
</style>
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
  $eventGA = 'event fund download';
  $actionGA = 'fund update';
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
      <?php if(!empty($moduleInfo)) { ?> 
          <h1><?php echo $moduleInfo->title; ?></h1>
          <?php echo $moduleInfo->description; ?>
		      <a href="<?php echo $this->uri->segment(1) == FP_MODULE_LINK ? FP_MODULE_LINK : HDI_MODULE_LINK; ?>" class="kliBack"><span>Back</span></a>
        <?php } ?>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 

   <!-- Banner Start -->
   <?php if(!empty($moduleInfo) && isset($moduleInfo->inside_banner_image) && !empty($moduleInfo->inside_banner_image)) { ?> 
      <article class="innerbanner"> 
          <img class="lazy" data-src="<?php echo str_replace('{filedir_14}', 'assets/images/uploads/fund-performance/banners/', $moduleInfo->inside_banner_image); ?>" alt="<?php echo $moduleInfo->title; ?>" />
      </article>
    <?php } ?>
  <!-- Banner End -->   
  
   <!-- midWrapper Start -->
  <article class="searchWrapper">
    <div class="midWrapper">
      <div class="annualFund">
	  <!--<p><a href="funds-performance/fund-update/oct-2020/kotakLifeIndividualOctober2020.pdf" target="_blank">Click to view October 2020 Fund Update</a></p><br>-->
	  <!-- funds-performance/fund-update/sep-2020-->
      	<p>Select for annual and monthly fund performance</p>
        	
              <div class="selectbg">
                <div class="selectedvalue"><?php echo $year; ?></div>
                <select id="years-dd">
                    <?php foreach($years as $dyear){
                        if($dyear == '2024'){
                            echo '<option selected>'.$dyear.'</option>';
                        } else {
                            echo '<option>'.$dyear.'</option>';
                        }
                    } ?>
                </select>
              </div>
        </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  
  <!-- Insurance Guide Start -->
  <article class="fundPWrap">
    <div class="midWrapper">
    
        <div class="headDesc">
            <h2>Fund Performance <?php echo $year; ?></h2>
        </div>
        <?php  if(!empty($yearRecord)) { ?>
            <ul class="reportUL reportUL_img fund100" >
                <li>
                    <div class="reportBox">
                    <div class="img">
                        <img class="lazy" data-src="<?php echo str_replace('{filedir_15}', 'assets/images/uploads/fund-performance/report-images/', $yearRecord->thumb_image); ?>" alt="<?php echo $yearRecord->title; ?>" />
                    </div>
                    <div class="detail">
                        <h3>Annual fund performance <span>Year <?php echo $year; ?></span></h3>
                        <p><?php echo $yearRecord->title; ?></p>
                        <?php
                          //GA code Variables
                          $labelGA = isset($yearRecord->title)? 'download|'.strtolower($yearRecord->title) : 'download';
                          //GA code Variables
                        ?>
                        <?php if($yearRecord->pdf_file!=""){?><a href="<?php echo str_replace('{filedir_16}', 'assets/images/uploads/fund-performance/pdfs/', $yearRecord->pdf_file); ?>" target="_blank" class="pdfIcon" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Download</a><?php } ?> 
						<?php if($yearRecord->pdf_file_link!=""){?><a class="view-pdf pdfIcon" href="<?php echo $yearRecord->pdf_file_link?>">View</a><?php } ?>
						</div>
                  </div>
                </li>        
            </ul>
			
        <?php } if(!empty($monthRecords)) {  ?>      
            <ul class="reportUL fundUL display__flex">
                <?php foreach ($monthRecords as $record) { ?>
                    <li>
                        <div class="reportBox">
                            <img class="img-pdf-height lazy" data-src="<?php echo str_replace('{filedir_15}', 'assets/images/uploads/fund-performance/report-images/', $record->thumb_image); ?>" alt="<?php echo $record->title; ?>" />
                            <div class="detail">    
                                <div class="vCenterWrap">
                                    <h3><?php echo $record->title; ?></h3>
                                    <?php
                                      //GA code Variables
                                      $labelGA = isset($record->title)? 'download|'.strtolower($record->title) : 'download';
                                      //GA code Variables
                                    ?>
                                    <?php $viewpdf=""; if($record->pdf_file==""){$viewpdf="viewpdfcls";} if($record->pdf_file!=""){ ?><a href="<?php echo str_replace('{filedir_16}', 'assets/images/uploads/fund-performance/pdfs/', $record->pdf_file); ?>" target="_blank" class="pdfIcon" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Download</a><?php } ?>
									<?php if($record->pdf_file_link!=""){ ?><a class="view-pdf <?php echo $viewpdf; ?>" href="<?php echo $record->pdf_file_link?>">View</a><?php } ?>
                                </div>
                            </div>
                        </div>
                    </li>            
                <?php } ?>
            </ul>
        <?php } else { ?>
        	<div class="noRecordDiv">Oops. <br>We do not have any records matching your selection. <br>Kindly change your selection and try again.</div>
        <?php } ?>
      </div>
  </article>
  
  <!-- Insurance Guide End --> 
  <input type="hidden" id="nifty-values" value='' >
  <input type="hidden" id="nav-values" value='' >
  <input type="hidden" id="date-values" value='' >
  <input type="hidden" id="latest-nav-values" value='' >
  <input type="hidden" id="method-url" value="">
  <input type="hidden" id="current_URL"  value="<?php echo base_url(FP_MODULE_LINK.'/fund-update/'); ?>">
  <input type="hidden" id="seleted-year"  value="<?php echo $year; ?>">
  
</section>
<!-- Section End --> 