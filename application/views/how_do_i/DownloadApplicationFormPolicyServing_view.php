<section> 
  <article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Download Policy Servicing Forms</h1>
		<p>Browse through the list below and download forms that suit your requirements.</p>
        <a href="<?=base_url()?>how-do-i/" class="kliBack"><span>Back</span></a> </div>
    </div>
  </article>
  <div class="tabWrap">
    <ul class="fundTabUL fundTabUL01">
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'download application form','label':'tab|proposal forms'});"  href="<?=base_url()?>how-do-i/download-application-form">proposal form</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'download application form','label':'tab|policy servicing'});"  href="<?=base_url()?>how-do-i/policy-servicing-forms" class="selected">policy servicing forms </a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'download application form','label':'tab|request for major revival of policy forms'});"  href="<?=base_url()?>how-do-i/major-revival-policy-forms">request for major revival of policy forms</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'download application form','label':'tab|riders'});"  href="<?=base_url()?>how-do-i/application-form-riders">riders</a></li>
    </ul>
  </div>
  <article class="navWrapper downloadAppWrap">
    <div class="midWrapper">
      <div class="claimWrapper">
        <div class="topDesc">
          <h2>Policy Servicing Forms</h2>
        </div>
        <ul class="reportUL" id="daf_proposalForm">
		
        </ul>
		<a href="javascript:;" data-event="event download forms" data-action="Load More" data-label="button|<?php echo strtolower('Download Application Form|Policy Servicing Forms'); ?>" class="ga_track link" id="load_more" alt="dafPolicyServicing">Load more</a></div>
    </div>
  </article>
</section>
<script>
var formType = "Download Application Form";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataAppForm = <?php echo json_encode($applicationForms); ?>;
var jsonDataFaqs = "";
var form_flag = "dafProposalForm";

var annualFundPer = "";
var fundPerformance = "";
</script>