<section>
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
		<?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  
  <!-- midWrapper Start -->
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Policy Servicing Forms in Regional Languages</h1>
        <p>Now you can apply for a Policy through forms in regional languages. Talk to our executives at the branch to know more.</p>
	    <a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a>
      </div>
    </div>
  </article>
  
  <article class="searchWrapper">
    <div class="midWrapper">
      <div class="annualFund">
      	<p>Select regional languages</p>
		  <div class="selectbg">
			<div class="selectedvalue">Bengali</div>
			<select id="languageForms">
				<!--<option value="">Select Language</option>-->
				<?php 
					if($languagesDD){
						$lan = $languagesDD->field_list_items;
						$pieces = preg_split('/[\n]+/', $lan);
						foreach($pieces as $ln){
							echo "<option value='{$ln}'>$ln</option>";
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
      <div class="claimWrapper">
        <ul class="reportUL regionalUL" id="policyServingForms">
			
        </ul>
        <a href="javascript:;" class="link galoadmore" id="loadMoreForms" data-category="policy serving" data-label="load more forms" data-event="event regional forms">Load more Forms</a> </div>
      </div>
  </article>
  <!-- Insurance Guide End --> 
</section>
<!-- Section End --> 
<script>
var gaCat = <?php echo json_encode($gaCat);?>;
var agentsJson = "";

var formsJson = <?php echo json_encode($formData); ?>;
var formsJsonLmt = 10;

var jsonSucessStories = "";
var resLimit = "";

var jsonExeAdvisors = "";
var resExeAdvLimit= "";

var jsonFaqs = "";
var resFaqsLimit= "";
</script>