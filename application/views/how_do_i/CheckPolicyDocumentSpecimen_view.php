<section> 
  <article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Check Policy Document Specimen</h1>
		<p>Filling a policy document is fairly easy. Yet, have a look at the specimen to help you fill the form correctly.</p>
        <a href="<?php echo base_url()?>how-do-i/" class="kliBack"><span>Back</span></a> </div>
    </div>
  </article>
  
  <div class="midWrapper">
  <div class="tabWrap">
    <ul class="fundTabUL fundTabUL01 fundTabUL012 w-tab-100">
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy document speciman','label':'tab|Protection Plans'});" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen" class="selected">Protection Plans</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy document speciman','label':'tab|Savings & Investment Plans'});" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen-savings-and-investments">Savings & Investment Plans</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy document speciman','label':'tab|Retirement Plans'});" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen-retirement-plans">Retirement Plans</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy document speciman','label':'tab|Child Plans'});" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen-child-plans">Child Plans</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy document speciman','label':'tab|Group Plans'});" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen-group-plans">Group Plans</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy document speciman','label':'tab|Riders'});" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen-riders">Riders</a></li>
	  <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy document speciman','label':'tab|Withdrawn Products'});" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen-withdrawn-products">Withdrawn Products</a></li>
	  <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy document speciman','label':'tab|Health Plans'});" href="<?php echo base_url()?>how-do-i/check-policy-document-specimen-health-plans">Health PLans</a></li>
    </ul>
  </div>
  </div>
  <article class="navWrapper">
    <div class="midWrapper">
      <div class="claimWrapper">
        <div class="topDesc">
          <h2>Protection Plans</h2>
        </div>
        <ul class="reportUL" id="daf_proposalForm">
		
        </ul>
         <a href="javascript:;" data-event="event download forms" data-action="Load More" data-label="button|<?php echo strtolower('Check Policy Document Specimen|Protection Plans'); ?>" class="link ga_track" id="load_more" alt="dafPolicyServicing">Load more</a></div> 
    </div>
  </article>
</section>
<script>
var formType = "Check Policy Document Specimen";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataAppForm = <?php echo json_encode($policyDocSpecimen); ?>;
var jsonDataFaqs = "";
var form_flag = "dafProposalForm";

var annualFundPer = "";
var fundPerformance = "";
</script>