<section>
	<article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Browse Fund Update</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet dolor vitae tellus congue, eget maximus nisl posuere. Duis felis libero, dictum in lorem vel, rutrum tempus leo.</p>
	    <a href="<?=base_url()?>how-do-i/" class="kliBack"><span>Back</span></a> </div>
      </div>
  </article>
  <!-- midWrapper End --> 
  
   <!-- midWrapper Start -->
  <article class="searchWrapper">
    <div class="midWrapper">
      <div class="annualFund">
      	<p>Select for annual and monthly fund performance</p>
              <div class="selectbg">
                <div class="selectedvalue">Choose fund year</div>
                <select id="fundupdateYear">
                  <option selected value="">Choose fund year</option>
					<?php 
					$years = $fpYearDD->field_list_items;
					$pieces = preg_split('/[\n]+/', $years);
					foreach($pieces as $date){
						if($date > "2013"){
							echo "<option value='$date'>$date</option>";
						}
					}
					?>
                </select>
              </div>
        </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  
  <!-- Insurance Guide Start -->
  <article class="fundPWrap">
    <div class="midWrapper">
    <div id="annualFundRes">
	
	  </div>
      <ul class="reportUL fundUL" id="fundPerformanceMonthly">
		
       
      </ul>
      </div>
  </article>
</section>

<script>
var formType = "";
var gaCat = <?php echo json_encode($gaCat);?>;
var jsonDataAppForm = "";
var jsonDataFaqs = "";
var form_flag = "";

var annualFundPer = <?php echo json_encode($annualFundPerformance); ?>;
var fundPerformance = <?php echo json_encode($fundPerformance); ?>;
</script>