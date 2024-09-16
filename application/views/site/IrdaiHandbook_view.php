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
          <!-- <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|irdai handbook'});" href="<?=base_url()?>grievance-redressal/irdai-handbook" class="<?php check_menu_active(2, 'irdai-handbook') ?>">irdai handbook</a></li> -->
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|customer bulletin'});" href="<?=base_url()?>grievance-redressal/customer-bulletin">customer bulletin</a></li>
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|fatca'});" href="<?=base_url()?>grievance-redressal/fatca">fatca</a></li>
          <li><a onClick="dataLayer.push({'event':'event grievance tab', 'category':'<?php echo $gaCat;?>', 'action':'grievance redressal','label':'tab|aml guidelines'});" href="<?=base_url()?>grievance-redressal/aml-guidelines">aml guidelines</a></li>
        </ul>
      </div>
    
  <article class="navWrapper">
    <div class="midWrapper">
      <div class="claimWrapper">
        <p>When it comes to your money, we encourage absolute transparency. Thus, we urge you go through the IRDA Handbook before you invest.</p>
        <ul class="reportUL" id="handbookRes">
			
		</ul>
		<?php if(sizeof($irdaiHandbooks) > 5){ ?>
		<a href="javascript:;" class="link ga_track" data-event="event grievance download" data-action="Grievance Redressal" data-label="load more|irdai handbook" id="load_more_handbookRes">Load more</a>
		<?php } ?>
        </div>
    </div>
  </article>
</section>

<script>
var gaCat = <?php echo json_encode($gaCat);?>;

var cg_json = "";
var cg_json1 = "";
var cg_json2 = "";
var cb_json = "";
var irdai_json = <?php echo json_encode($irdaiHandbooks); ?>;
</script>