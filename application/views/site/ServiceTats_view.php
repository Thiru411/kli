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
        <a class="kliBack" href="javascript:;" onclick="goBack()">
			<span>Back</span>
		</a></div>
    </div>
  </article>
      <div class="tabWrap">
        <ul class="fundTabUL fundTabUL01">
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|service tat'});" href="<?=base_url()?>grievance-redressal/service-tat" class="<?php check_menu_active(2, 'service-tat') ?>">service tat<span>s</span></a></li>
          <!-- <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|irdai handbook'});" href="<?=base_url()?>grievance-redressal/irdai-handbook">irdai handbook</a></li> -->
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|customer bulletin'});" href="<?=base_url()?>grievance-redressal/customer-bulletin">customer bulletin</a></li>
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|fatca'});" href="<?=base_url()?>grievance-redressal/fatca">fatca</a></li>
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|aml guidelines'});" href="<?=base_url()?>grievance-redressal/aml-guidelines">aml guidelines</a></li>
        </ul>
      </div>
    
  <article class="navWrapper">
    <div class="midWrapper"> 
      <div class="claimWrapper">
        <p>We are committed to offer you the best services with maximum convenience. Browse through the list below for services and the maximum time which we would take to respond to those service requests as prescribed by IRDAI.</p>
			<div class="serviceTableBox">
			<?php
			/*echo "<pre>";
			print_r($serviceTats);
			die;*/
			if($serviceTats){ foreach($serviceTats as $dt){
				$tblres = preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1', $dt->serviceTatsHtml);
				echo htmlspecialchars_decode($tblres);
			}}?>
			</div>
       </div>
    </div>
  </article>
</section>

<script>
var cg_json = "";
var cg_json1 = "";
var cg_json2 = "";
var cb_json = "";
var irdai_json = "";
</script>