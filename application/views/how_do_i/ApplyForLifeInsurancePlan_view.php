<section>
	<article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
	<article class="locateWrap">
		<div class="midWrapper">
			<div class="headDesc">
				<h1>Apply for a Life Insurance Plan</h1>
				<p>You can request a life advisor to choose and apply for a life insurance plan that suits you the best.</p>
				<a href="<?=base_url()?>how-do-i/" class="kliBack"><span>Back</span></a> 
			</div>
			<a   href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=website&utm_campaign=howtoapply&utm_content=kotak_eterm" target="_blank" class="redBtn" onclick="dataLayer.push({'event': 'buy online', 'category': 'How do i', 'action': 'Apply for life insurance plan', 'label': 'buy online1'});">Buy Online</a> 
			<div class="topDesc">
			  <h2>Why Do I Need Life Advisor?</h2>
			  <p>You can approach our Life Advisors to apply for Kotak Life Insurance plans. Our personnel are experienced to understand your needs and are trained to help you choose the right plan</p>
			</div>
		</div>
	</article>
	 <?php $this->load->view('common/need_help_buying_a_plan', array('actionGA' => "Apply for a Life Insurance Plan")); ?>	
</section>
<script>

var formType = "Apply For Life Insurance Plan";
var gaCat = <?php echo json_encode($gaCat);?>;
	var jsonDataAppForm = "";
	var jsonDataFaqs = "";
	var form_flag = "";

	var annualFundPer = "";
	var fundPerformance = "";
</script>