<?php 
if($data){
	foreach($data as $dt){
		$title = $dt->claimType;
		$description = $dt->claimDescription;
		$tblres = $dt->claimDocumentsToSubmit;
		//note
		//$samplePDFs = $dt->;
		$additionalInfo = $dt->additionalInfo;
	}
}
?>
<section> 
  <article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  
  <!-- midWrapper Start -->
  <article class="claimDetailWrap">
    <div class="midWrapper">
      <div class="headDesc">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $description; ?></p>
        <a href="javascript:;" class="kliBack"><span>Back</span></a> </div>
      <div class="claimDetails">
        <div class="claimBox">
        	<div class="claimtable">
	          <?php echo $tblres; ?>
			</div>
        </div>
        
        <!--<div class="claimBox claimBoxLast">
          <div class="box">
            <h3>Natualr/Unnatual Death Claim</h3>
            <ul class="claimBoxUL">
              <li> <a href="javascript:;" class="pdfIcon">Downlad Death <br>Claim Form</a> </li>
              <li> <a href="javascript:;" class="newsIcon">Downlad Death <br>Claim Form</a>
                <p>(Content of this is just for your referance perpose while filling form)</p>
              </li>
            </ul>
          </div>
          <div class="box boxBorder">
            <h3>Claim Under (Without Cover Plan)</h3>
            <ul class="claimBoxUL">
              <li> <a href="javascript:;" class="pdfIcon">Downlad Claim <br>Under Form</a> </li>
              <li> <a href="javascript:;" class="newsIcon">Downlad <br>Sample Form</a>
                <p>(Content of this is just for your referance perpose while filling form)</p>
              </li>
            </ul>
          </div>
        </div>-->
        <h2>Additional Information</h2>
        <?php echo $additionalInfo ;?>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- midWrapper Start -->
  <article class="buyPlan buyPlan01">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Need help for paying premium?</h2>
      </div>
      <div class="tollFree ">
        <div class="needBox">
          <h3 class="callon">Call on toll free number <a href="javascript:;">1800 209 8800</a><span>(8:00 am to 10:00pm)</span></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus odio. Duis vel odio metus. </p>
        </div>
        <div class="needBox">
          <h3 class="mailus">OR Mail to <a href="mailTo:kli.in/WECARE">kli.in/WECARE</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus odio. Duis vel odio metus. </p>
        </div>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
</section>
<!-- Section End --> 
<script>
var formType = "";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataAppForm = "";
var jsonDataFaqs = "";
var form_flag = "";

var annualFundPer = "";
var fundPerformance = "";
</script>