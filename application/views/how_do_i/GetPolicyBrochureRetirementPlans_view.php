<section> 
  <article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Get Policy Brochure</h1>
		<p>Know everything about your life insurance policy before applying for it. Download detailed brochures below.</p>
        <a href="<?=base_url()?>how-do-i/" class="kliBack"><span>Back</span></a> </div>
    </div>
  </article>
  <div class="tabWrap">
    <ul class="fundTabUL fundTabUL01">
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy brochure','label':'tab|Protection Plans'});" href="<?=base_url()?>how-do-i/get-policy-brochure">Protection Plans</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy brochure','label':'tab|Savings & Investments Plans'});" href="<?=base_url()?>how-do-i/brochure-savings-and-investments">Savings & Investments Plans</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy brochure','label':'tab|Child Plans'});" href="<?=base_url()?>how-do-i/brochure-child-plans">Child Plans</a></li>
      <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy brochure','label':'tab|Retirement Plans'});" href="<?=base_url()?>how-do-i/brochure-retirement-plans" class="selected">Retirement Plans</a></li>
	  <li><a onClick="dataLayer.push({'event':'event tab', 'category':'<?php echo $gaCat;?>', 'action':'get policy brochure','label':'tab|Health Plans'});" href="<?=base_url()?>how-do-i/brochure-health-plans">Health Plans</a></li>
    </ul>
  </div>
  <article class="navWrapper">
    <div class="midWrapper">
      <div class="claimWrapper">
        <div class="topDesc">
          <h2>Retirement Plans</h2>
        </div>
       
		<ul class="reportUL" id="daf_proposalForm">
		
        </ul>
         <a href="javascript:;" data-event="event download forms" data-action="Load More" data-label="button|<?php echo strtolower('Get Policy Brochure|Retirement Plans'); ?>" class="link ga_track" id="load_more" alt="dafPolicyServicing">Load more</a></div>
    </div>
  </article>
</section>
<script>
var formType = "Get Policy Brochure";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataAppForm = <?php echo json_encode($downloadBrochure); ?>;
var jsonDataFaqs = "";
var form_flag = "dafProposalForm";

var annualFundPer = "";
var fundPerformance = "";
</script>