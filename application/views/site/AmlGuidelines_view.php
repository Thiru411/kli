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
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|customer bulletin'});" href="<?=base_url()?>grievance-redressal/customer-bulletin">customer bulletin</a></li>
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|fatca'});" href="<?=base_url()?>grievance-redressal/fatca">fatca</a></li>
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|aml guidelines'});" href="<?=base_url()?>grievance-redressal/aml-guidelines"  class="<?php check_menu_active(2, 'aml-guidelines') ?>">aml guidelines</a></li>
        </ul>
      </div>
  <article class="navWrapper">
    <div class="midWrapper"> 
      <div class="claimWrapper">
        <p>We strive to make your life simple when it comes to legal protocols as well. Find below an illustrative list of all the acceptable documents as per the AML guidelines.</p>
		<?php if($amlGuidelines){ foreach($amlGuidelines as $dt){ ?>
			<ul class="reportUL grievanceUL01">
			  <li>
				<div class="reportBox">
				  <h3><?php echo $dt->pdfTitle;?></h3>
				  <a onClick="dataLayer.push({'event':'event aml download', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'aml guidelines|<?php echo $dt->pdfTitle;?>'});" href="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->pdfURL) ?>" target="_blank" class="pdfIcon">Download</a> </div>
			  </li>
			</ul>
		<?php }} ?>
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