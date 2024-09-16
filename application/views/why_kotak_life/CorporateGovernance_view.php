<!-- Section Start -->
<section>  
 <!-- midWrapper Start -->
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
		<?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <!-- breadcrumb End  --> 
  
  <article>
    <div class="midWrapper">
      <div class="headDesc">
	    <h1>Corporate Governance</h1>
		<p>Browse through the year wise Public disclosures for Kotak Life Insurance below:</p>
		<a class="kliBack" href="<?=base_url()?>why-kotak-life/">
			<span>Back</span>
		</a>
      </div>
	  
    </div>
  </article>
	  <article class="innerbanner"> 
		  <img class="lazy" data-src="<?php echo base_url();?>assets/images/Insidepage-Corporate-Governance.jpg" alt="About us" />
	  </article>
	 
  <article class="publicWrapper">
    <div class="midWrapper"> 
      <div class="midWrap01">
	  <div class="topDesc">
        <h2>Public Disclosures</h2>
      </div>
        
        <div class="selectbg">
		<?php
		$years = $publicDisFinancialYear->field_list_items;
		$pieces = preg_split('/[\s]+/', $years);
		?>
          <div class="selectedvalue"><?php echo (!empty($pieces[0]) ? $pieces[0] : 'Select Financial year') ?></div>
          <select id="publicDisDD">
            <option value="">Select Financial Year</option>			
			 <?php
				 $public_discloure = 0;
				 foreach ($pieces as $date) {
				  $selectClass = (($public_discloure == 0) ? 'seelcted' : '');
				  echo "<option value='$date' $selectClass>$date</option>";
				  $public_discloure++;
				 }
			?>
          </select>
        </div>
        <img class="lazy" data-src="<?=base_url();?>assets/images/corporate-governance.png" class="img50" />
        <div class="div50">
          <ul class="reportUL" id="publicDisData">
			
			<!-- Appending Dynamically from Jquery -->
		  
          </ul>
        </div>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  <article class="planWrap eventsWrap">
    <div class="midWrapper">
      <div class="midWrap01">
        <div class="topDesc">
          <h2>Disclosures of the Company</h2>
		  <p>Know more about Kotak Life Insurance's corporate governance announcements below</p>
        </div>
        <div class="selectbg">
		<?php 
		
			$years = $publicDisFinancialYear->field_list_items;
				$pieces = preg_split('/[\s]+/', $years);
				
		?>
          <div class="selectedvalue"  value=""><?php echo (!empty($pieces[0]) ? $pieces[0] : 'Select year') ?></div>
          <select id="publicDisNewsEventsDD">
            <option selected value="">Select Financial year</option>
            <?php 
				$years = $publicDisFinancialYear->field_list_items;
				$pieces = preg_split('/[\s]+/', $years);
				foreach($pieces as $date){
					echo "<option value='$date'>$date</option>";
				}
			?>
          </select>
        </div>
        <ul class="reportUL" id="publicDisNewsEvents">
			
        </ul>
      </div>
    </div>
  </article>
  <!-- midWrapper Start -->
  <article class="planWrap">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Annual Report</h2>
      </div>
      <div class="midWrap">
        <div class="div30">
          <p>To view our Annual Reports, please choose the year from the dropdown below:</p>
          <div class="selectbg">
		  <?php
$years = $publicDisFinancialYearAnnualReport->field_list_items;
$pieces = preg_split('/[\n]+/', $years);
$datelable1=explode(' ',$pieces[0]);

?>                        

           
            <div class="selectedvalue" value=""><?php echo (!empty($pieces[0]) ? $datelable1[1] : 'Select year') ?></div>
            <select id="publicDisAnnualReportDD">
            <option selected value="">Select year</option>
              <?php
 $annual_report = 0;
 foreach ($pieces as $date) {
	  $datelabel=explode(' ',$date);
  $selectClass = (($annual_report == 0) ? 'seelcted' : '');
  echo "<option value='$date' $selectClass>$datelabel[1]</option>";
  $annual_report++;
 }
 ?>
            </select>
          </div>
        </div>
        <div class="div70" id="publicDisAnnualReport">
			
        </div>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  <!-- midWrapper Start -->
  <article>
    <div class="midWrapper">
     
	 <div class="topDesc">
        <h2>Policies and Codes</h2>
		<p>Click on the links below to go through our policies and codes.</p>
      </div>
      <ul class="reportUL reportUL01">
		<?php if(sizeof($publicDisPoliciesCodes) > 0) { ?>
		<?php foreach($publicDisPoliciesCodes as $dt){ ?>
				<li>
				  <div class="reportBox">
					<h3><?php 
					$polTtl = $dt->policies_title;
					if(strlen($polTtl) > 35){ $policiesTtl = substr($polTtl, 0, 35)."..."; }else{$policiesTtl = $polTtl;}
					echo $policiesTtl;
					?></h3>
					<a class="ga_track" data-action="corporate governance" data-label="download|policies and codes|<?php echo str_replace('{filedir_9}','', $dt->policies_pdf_url) ?>" data-event="event downloads" target="_blank" href="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->policies_pdf_url) ?>">Download</a> </div>					
				</li>
		<?php } } ?>
      </ul>
    </div>
  </article>
  <!-- midWrapper End --> 
  <!-- midWrapper Start -->
  <article class="planWrap eventsWrap">
    <div class="midWrapper">
      <div class="midWrap01">
        <div class="topDesc">
          <h2>News and Events</h2>
		  <p>Know more about Kotak Life Insurance's corporate governance announcements below</p>
        </div>
        <div class="selectbg">
		<?php 
		
			$years = $publicDisFinancialYear->field_list_items;
				$pieces = preg_split('/[\s]+/', $years);
				
		?>
          <div class="selectedvalue"  value=""><?php echo (!empty($pieces[0]) ? $pieces[0] : 'Select year') ?></div>
          <select id="publicDisNewsEventsDD">
            <option selected value="">Select Financial year</option>
            <?php 
				$years = $publicDisFinancialYear->field_list_items;
				$pieces = preg_split('/[\s]+/', $years);
				foreach($pieces as $date){
					echo "<option value='$date'>$date</option>";
				}
			?>
          </select>
        </div>
        <ul class="reportUL" id="publicDisNewsEvents">
			
        </ul>
      </div>
    </div>
  </article>
  
 
  <article class="">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Annual Return</h2>
      </div>
      <div class="midWrap">
        <div class="div30">
          <p>To view our Annual Return, please choose the year from the dropdown below:</p>
          <div class="selectbg">
		  <?php
$years = $publicDisFinancialYearAnnualReturn->field_list_items;
$pieces = preg_split('/[\n]+/', $years);
$datelable1=explode(' ',$pieces[0]);
?>                        

            <div class="selectedvalue" value=""><?php echo (!empty($pieces[0]) ? $datelable1[1] : 'Select year') ?></div>
            <select id="publicDisAnnualReturnDD">
            <option selected value="">Select year</option>
              <?php
 $annual_return = 0;
 foreach ($pieces as $date) {
	 $datelabel=explode(' ',$date);
  $selectClass = (($annual_return == 0) ? 'seelcted' : '');
  echo "<option value='$date' $selectClass>$datelabel[1]</option>";
  $annual_return++;
 }
 ?>
            </select>
          </div>
        </div>
        <div class="div70 aretune" id="publicDisAnnualReturn">
			
        </div>
      </div>
    </div>
  </article>
  <!-- midWrapper End -->
</section>
<!-- Section End --> 
<input type="hidden" id="base_url_hdn" name="base_url_hdn" value="<?php echo base_url();?>" />

<script>
var gaCat = <?php echo json_encode($gaCat);?>;
var cg_json = <?php echo json_encode($publicDisData); ?>;
var cg_json1 = <?php echo json_encode($annualReports); ?>;
var cg_json3 = <?php echo json_encode($annualReturns); ?>;
var cg_json2 = <?php echo json_encode($newsEvents); ?>;
var cb_json = "";
var irdai_json = "";
</script>
<!--<script type="text/javascript" src="<?php //echo base_url();?>/assets/js/corporate-governance.js"></script>-->
