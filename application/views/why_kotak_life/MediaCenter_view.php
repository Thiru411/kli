
<style>
    ul.reportUL>li .reportBox{height: 200px;}
    td{padding: 0 !important;}
</style>
 <section>
  <article class="breadcrumb">
    <div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
  </article>
  <article class="">
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Media Center</h1>
        <p>Browse through the various media related information about Kotak Life Insurance.</p>
		<a class="kliBack" href="<?=base_url()?>why-kotak-life/">
			<span>Back</span>
		</a>
      </div>
	 
    </div>
  </article> 
	  
	    <article class="innerbanner"> 
		  <img class="lazy" data-src="<?php echo base_url();?>assets/images/Insidepage-Media-Center.jpg" alt="About us" />
	  </article>
	  
    
    
	  
  <article class="kliNewWrap" style="display:none">
    <div class="midWrapper">
      <div class="midWrap01">
	  <div class="topHeading">
	    
        <h2>KLI in News</h2>
		<p>We are covered by several renowned publications for our products and services. Have a look at a few below:</p>
		
		</div>
        <div class="kliNewsWrap">
          <div class="kli_Left">
          <img class="lazy" data-src="<?=base_url();?>assets/images/media-center.png" class="img50" />
          <div class="div50">
            <h3>Latest News</h3>
            <ul class="reportUL">
				
			<?php if(sizeof($kliInNews) > 0) { $cnt = 0; ?>
				<?php foreach($kliInNews as $dt){ 
					if($cnt==4){break;}
					if($dt->kli_pdf_url != ""){
						$readMore = str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->kli_pdf_url);
					}else{
						$readMore = $dt->urlLink;
					}
				?>
					  <li>
						<div class="reportBox">
						  <h3><?php 
						  $ttl = $dt->kli_title;
						  if(strlen($ttl) > 50){ $updatedTtl = substr($ttl, 0, 50)."..."; }else{$updatedTtl = $ttl;}
							echo $updatedTtl;
						  ?></h3>
						  <p><?php echo $dt->kli_date;?></p>
						  <a rel="nofollow" data-action="media center" data-label="news|<?php echo $updatedTtl;?>"  data-event="event media center news" href="<?php echo $readMore;?>" target="_blank" class="newsIcon ga_track">Read more</a></div>
					  </li>
			<?php $cnt++; }	} ?>
            </ul>
            <div class="checkOut">
              <p>Checkout here <a href="javascript:;"><span>Previous years Archive</span></a></p>
            </div>
          </div>
          </div>
          <div class="kliNewsDetails">
          	<div class="midKLI">
            <div class="filterKLI">
              <div class="dateSelect">
                <div class="selectDate"> <span>From</span>
                  <input type="text" class="dateFormat datepicker" id="calFrom" placeholder="From Date" />
                </div>
                <div class="selectDate"> <span>To</span>
                  <input type="text" class="dateFormat" id="calTo" placeholder="To Date" />
                </div>
              </div>
              <div class="keyWordWrap">
                <input placeholder="Search for keyword" type="text" id="txtKeyword"/>
                <div class="selectbg">
                  <div class="selectedvalue">Publication Name</div>
                  <select id="publicationName">
						<option value="">Publication Name</option>
						<?php 
							$years = $kliNewsPublications->field_list_items;
							$pieces = preg_split('/[\n]+/', $years);
							foreach($pieces as $date){
								echo "<option value='$date'>$date</option>";
							}
						?>
                  </select>
                </div>
                <a href="javascript:;" class="link" id="btnSerach">Search</a> </div>
            </div>
            <ul class="reportUL" id="resUL">
				
            </ul>
            <ul class="paginationUL" id="resPg">
			
            </ul>
				<a class="kliBack" href="javascript:;"><span>Back to Latest News</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
  <article class="planWrap eventsWrap ">
    <div class="midWrapper">
      <div class="midWrap01">
        <div class="topDesc">
          <h2>Press Releases</h2>
		  <p>Find below the Press Releases issued by Kotak Life Insurance.</p>
        </div>
        <div class="selectbg">
          <div class="selectedvalue" >Select year</div>
          <select  id="pressReleaseDD">
            <option selected value="">Select year</option>
            <?php 
				$years = $pressReleasesDD->field_list_items;
				$pieces = preg_split('/[\s]+/', $years);
				foreach($pieces as $date){
					echo "<option value='$date'>$date</option>";
				}
			?>
          </select>
        </div>
        <ul class="reportUL reportUL01 noDateFormat" id="pressReleaseUL">
			<!-- Dynamic  --> 
        </ul>
      </div>
    </div>
  </article>
  <article class="eventsWrap">
    <div class="midWrapper">
      <div class="midWrap01">
        <div class="topDesc">
          <h2>Our Campaigns</h2>
		  <p>Over the years, we have launched a number of campaigns to promote our products and services. Have a look at a few here:</p>
        </div>
        <div class="selectbg">
          <div class="selectedvalue">Select year</div>
          <select id="ourCampaignDD">
            <option selected value="">Select year</option>
            <?php 
				$years = $ourCampaignsDD->field_list_items;
				$pieces = preg_split('/[\s]+/', $years);
				foreach($pieces as $date){
					echo "<option value='$date'>$date</option>";
				}
			?>
          </select>
        </div>
        <ul class="reportUL ourCampaignUL ourCampVideo" id="ourCampaignUL">
			
        </ul>
      </div>
    </div>
  </article>
  
   <article class="planWrap mediaKitW">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Media Kit</h2>
        <p>Get access to the relevant images related to Kotak Life Insurance.</p>
      </div>
      <a onClick="dataLayer.push({'event':'event media kit download', 'category':'<?php echo $gaCat;?>', 'action':'media center','label':'download|mediakit'});" href="<?php echo base_url();?>assets/images/image_library.zip" class="link">Download</a> </div>
  </article>
  
</section>
<input type="hidden" id="base_url_hdn" name="base_url_hdn" value="<?php echo base_url();?>" />
<div class="videoPlay">
    <iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
	<a href="javascript:;" class="closeSearch"><span>Close</span></a>
</div>
<script>
var gaCat = <?php echo json_encode($gaCat);?>;
var json1 = <?php echo json_encode($pressReleases); ?>;
var json2 = <?php echo json_encode($ourCampaigns); ?>;
var jsonData = <?php echo json_encode($kliInNewsArchive); ?>;
var cb_json = "";
</script>
<!--<script type="text/javascript" src="<?php // echo base_url();?>/assets/js/media-center.js"></script>-->