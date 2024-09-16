<section>
	<article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
	<article>
		<div class="midWrapper">
			<div class="headDesc">
				<h1>Contact Us</h1>
				<p>Get in touch with us through any of the following modes.</p>
				<a class="kliBack" href="<?=base_url()?>why-kotak-life/">
					<span>Back</span>
				</a>
			</div>
		</div>
	</article>
	<!-- Banner Start -->
  <article class="innerbanner"> 
	  <img class="lazy" data-src="<?php echo base_url();?>assets/images/Insidepage-Contact-Us-01.jpg" alt="About us" />
  </article>
  <!-- Banner End --> 
	<!--<article class="planWrap feedbackWrap">
		<div class="midWrapper">
			<div class="midWrap01"> <img src="<?=base_url()?>assets/images/feedback_img.png" class="img50" />
				<div class="div50">
					<form id="contact_us_form" name="contact_us_form" onsubmit="return false" autocomplete="off">
						<p>Enter your details below and we will get back to you at the earliest.</p>
						<p class="mandatoryTxt">* All fields mandatory</p>
						<ul class="feedbackUL">
							<li>
								<div class="selectbg">
									<div class="selectedvalue feedbackSel">Select Options</div>
									<select id="generalFeedback" name="generalFeedback" class="">
										<option value="">Select Options</option>
										<?php 
										$years = $generalFeedbackDD->field_list_items;
										$pieces = preg_split('/[\n]+/', $years);
										foreach($pieces as $date){echo "<option value='$date'>$date</option>";}
										?>
									</select>
								</div>
								<div id="generalFeedback_error" class="input_error errorMsg"></div>
							</li>
							<li>
							<input type="text" class="" placeholder="Full Name"  id="fullName" name="fullName"  maxlength="20"/>
							<div id="fullName_error" class="input_error errorMsg"></div>
							</li>
							<li>
							<input type="text" class="" placeholder="Email ID"  id="emailID" name="emailID"  maxlength="40"/>
							<div id="emailID_error" class="input_error errorMsg"></div>
							</li>
							<li>
							<input type="text" placeholder="Contact Number"  id="contactNumber" name="contactNumber" class="" maxlength="10" />
							<div id="contactNumber_error" class="input_error errorMsg"></div>
							</li>
							<li><span class="smallTxt">Character Limit - 260</span>
								<textarea placeholder="Please type here" id="feedback" name="feedback" class=""></textarea>
								<div id="feedback_error" class="input_error errorMsg"></div>
							</li>
							<li><div id="contactFormCaptcha"></div><div id="g-recaptcha-response_error" class="input_error errorMsg"></div></li>
							<li class="checkbx">
							 <label>
							  <input type="checkbox" name="ndncReg">
							  By submitting this form, you hereby allow us to contact you even
							  if you are registered under NDNC.<span></span></label>
									<div id="ndncReg_error" class="input_error errorMsg"></div>
							</li>
							<li><input type="submit" class="buttonClick" id="contactSubmit" value="Submit"/><a href="javascript:;" class="link" id="contactClear">Clear</a></li>
						</ul>
					</form>

						<div class="thankyouBox" id="thanksMsgContactUs">
							<h4>Thank you</h4>
							<p>Thank you. Our representative will respond to you at the earliest.</p>
							 <div class="linkWrap"> <a id="contactUsBack" class="buttonClick" href="javascript:;">Back</a></div>
						</div>
					<p id="contactSubmitMsg"></p>
				</div>
			</div>
		</div>
	</article>-->
	
	<article>
		<div class="topDesc"><h2>Visit our Branches</h2></div>
		<?php $this->load->view('common/visit_kotak_branches');?>
	</article>	
	
	<?php $this->load->view('common/need_help_buying_a_plan',array('actionGA' => "contact us"));?>  
</section>

<input type="hidden" id="base_url_hdn" name="base_url_hdn" value="<?php echo base_url();?>" />
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPSQ9MyzaDxMrpiQ4KoxffTgqE-QFaxAk&sensor=false" type="text/javascript"></script>