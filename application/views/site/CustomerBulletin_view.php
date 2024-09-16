<section>
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
		<?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Grievance Redressal</h1>
        <a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a> </div>
    </div>
  </article>
      <div  class="tabWrap">
        <ul class="fundTabUL fundTabUL01">
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|service tat'});" href="<?=base_url()?>grievance-redressal/service-tat">service tat<span>s</span></a></li>
          <!-- <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|irdai handbook'});" href="<?=base_url()?>grievance-redressal/irdai-handbook">irdai handbook</a></li> -->
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|customer bulletin'});" href="<?=base_url()?>grievance-redressal/customer-bulletin" class="<?php check_menu_active(2, 'customer-bulletin') ?>">customer bulletin</a></li>
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|fatca'});" href="<?=base_url()?>grievance-redressal/fatca">fatca</a></li>
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|aml guidelines'});" href="<?=base_url()?>grievance-redressal/aml-guidelines">aml guidelines</a></li>
        </ul>
      </div>
    
	<article class="navWrapper">
	<div class="midWrapper">
	  <div class="claimWrapper">
		<p>As a policyholder, it is important to keep yourself updated on the current IRDAI circulars and updates. Browse through the Customer Bulletin section for our Policyholders.</p>
		<div class="midWrap01 filterGrievance">
			<p>Choose year for Customer Information Bulletin</p><div class="selectbg">
		  <div class="selectedvalue">Select year</div>
		  <select id="customerBulletinYearDD">
			<option value="">Select year</option>
			<?php 
			$pieces = array_reverse(preg_split('/[\n]+/', $years));
			foreach($pieces as $date){
				if($date!=""){
					echo "<option value='$date'>$date</option>";
				}
			}
			?>
		  </select>
		</div>
		</div>
		<ul class="reportUL" id="customerBulltinRes">
		
		</ul>
		<?php if(sizeof($costomerBulletin) > 5){ ?>
			 <a href="javascript:;" class="link ga_track" data-event="event grievance download" data-action="Grievance Redressal" data-label="load more|customer bulletin" id="load_more_cb">Load more</a>
		<?php } ?>
		</div>
	</div>
	</article>
</section>

<input type="hidden" id="base_url_hdn" name="base_url_hdn" value="<?php echo base_url();?>" />

<script>
var gaCat = <?php echo json_encode($gaCat);?>;
var cg_json = "";
var cg_json1 = "";
var cg_json2 = "";
var cg_json3 = "";
var cb_json = <?php echo json_encode($costomerBulletin); ?>;
var irdai_json = "";
</script>