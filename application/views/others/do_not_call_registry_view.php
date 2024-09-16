<section>
  <article class="breadcrumb">
    <div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
  </article>
<!-- midWrapper Start -->
<article>
<div class="midWrapper">
<div class="headDesc">
<h1>Do Not Call Registry</h1>
<p>At Kotak Life Insurance, it is our philosophy to provide you innovative and pragmatic financial solutions. In this context, we might send you information on our latest product and service offerings via phone, SMS or email.</p>
<p>In case you do not wish to be contacted by us, we understand and respect your privacy. To get your number unlisted from our database, we request you to fill the Do Not Call form below. The details you enter in the form will remain confidential.</p>
<p>Please allow us 15 working days to get the number marked off our telemarketing lists.</p>
<a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a> </div>
</div>
</article>
<!-- midWrapper End --> 

<!-- midWrapper Start -->
<article class="planWrap feedbackWrap">
	<div class="midWrapper">
		<div class="midWrap01"> <img alt="Stay away from spam, do not call registery" title="Stay away from spam, do not call registery" src="<?php echo base_url();?>assets/images/do-not-call-registry.png" class="img50" />
			<div class="div50">
				<form name="doNotCallRegistryForm" id="doNotCallRegistryForm" onsubmit="return false"  autocomplete="off">
			
			<p class="mandatoryTxt">* All fields mandatory</p>
				<ul class="feedbackUL buyFormWrap">
					<li>
						<input type="text" class="" placeholder="Your Name" id="dnd_full_name" name="dnd_full_name" maxlength="30"/>
						<div id="dnd_full_name_error" class="input_error errorMsg"></div>
					</li>
					<li>
						<input type="text" class="" placeholder="Contact Number" id="dnd_mobile_number" name="dnd_mobile_number" maxlength="10"/>
						<div id="dnd_mobile_number_error" class="input_error errorMsg"></div>
					</li>
					<li>
						<input type="text" class="" placeholder="Email ID" id="dnd_email_id" name="dnd_email_id" maxlength="30"/>
						<div id="dnd_email_id_error" class="input_error errorMsg"></div>
					</li>
					<li><div class="selectbg"><div class="selectedvalue">Select City</div><select  id="dnd_city" name="dnd_city">
						<option value="">Select City</option>
						 <?php foreach($lifeAdvisorCities as $detail) { ?>
								<option value="<?php echo $detail->title ?>"><?php echo $detail->title ?></option>
						<?php } ?>
						</select>
						</div>
						<div id="dnd_city_error" class="input_error errorMsg"></div>
					</li>
					<li>
						<div id="dndCallRegistry"></div>
						<div id="g-recaptcha-response_error" class="input_error errorMsg"></div>
					</li>
					<!--<li class="checkbx">
						<label>
						<input type="checkbox" id="allowCallsDND" name="allowCallsDND">
						By submitting this form, you hereby allow us to contact you even if you are 
						registered under NDNC. <span></span></label>
						<div id="allowCallsDND_error" class="input_error errorMsg"></div>
					</li>-->
					<li>
						<input type="submit" class="buttonClick btn-life" style="cursor:pointer;" id="dndCallRegistrySubmit" value="Submit" />
						<a href="javascript:;" id="dndCallRegistryClear" class="link">Clear</a> 
					</li>
				</ul>
				</form>
				<div class="midBoxWrap thankyouBox">	
					<h4>We have received your request</h4>
					<p>Please allow us 15 working days to get the number marked off our telemarketing lists. </br>
					If you do not want to receive marketing calls from any other company, we urge you to register your phone number/s 9898989898 / 02256565656 with National Do Not Call (NDNC) Registry of Telecom Regulatory Authority of India (TRAI). For details and registration, log on to <a href="http://www.ndncregistry.gov.in" target="_blank">www.ndncregistry.gov.in</a></p>
					 <div class="linkWrap"> <a id="dndBack" class="buttonClick" href="javascript:;">Back</a></div>
				</div>
			</div>
		</div>
	</div>
</article>
</section>

<script>
var agentsJson = "";

var formsJson = "";
var formsJsonLmt = "";

var jsonSucessStories = "";
var resLimit = "";

var jsonExeAdvisors = "";
var resExeAdvLimit= "";

var jsonFaqs = "";
var resFaqsLimit= "";
</script>