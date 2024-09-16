<style>
.btn-life{
    padding: 0px 30px ! important;
    background: #da251c ! important;
    font-size: 1.4em ! important;
    text-transform: uppercase ! important;
    border-radius: 30px ! important;
     border:none !important;
    display: table ! important;
    color: #fff ! important;
    letter-spacing: 1px ! important;
    transition: all ease 0.5s;
    -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    -o-transition: all ease 0.5s;
    line-height: 50px ! important;
    height: 50px ! important;}
    .btn-life:hover{background: #fc453c !important;}
</style>

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
	
		
		<?php $this->load->view('common/need_help_buying_a_plan',array('actionGA' => "contact us"));?>  
	
	<article>
		<div class="topDesc"><h2>Visit our Branches</h2></div>
	
	<?php $this->load->view('common/visit_kotak_branches');?>
	</article>	
	     <?php
    if (!empty($srGroups)) {       
        ?>
        <article class="planWrap feedbackWrap" id="contact-us-main" style="display: none;">
            <div class="midWrapper">
                <div class="midWrap01"> <img class="lazy" data-src="<?php echo base_url() ?>assets/images/feedback_img.png" class="img50" />
                    <div class="div50">
					 <?php
                        if (!empty($this->session->flashdata('success'))) {
                        echo '<div class="thankyouBox" id="thanksMsgContactUs">';
                        echo '<h4>Thank you</h4>';                       
                        echo '<p>' . $this->session->flashdata('success') . '</p>';
						//$this->session->set_flashdata('success',"");
                        echo '</div>';
                         }
                        ?>
                        <?php
                        if (!empty($this->session->flashdata('error'))) {
                            echo '<div id="contactSubmitMsg">' . $this->session->flashdata('error') . '</div>';
							//$this->session->set_flashdata('error',"");
                        }
                        ?>
                        <form method="post" id="contact_us_form" name="contact_us_form" action="<?php echo base_url(WKL_MODULE_LINK . '/contact-us/save') ?>" autocomplete="off" enctype="multipart/form-data">
                            <p>Enter your query details below and we will get back to you at the earliest.</p>
                            <p class="mandatoryTxt">* All fields mandatory</p>
							<?php
								if (!empty($this->session->flashdata('error'))) {
								if (isset($this->session->userdata['srsession_data'])) {
								if (!empty($this->session->userdata['srsession_data']['customer_policyno'])) {
								$userpolicyno = $this->session->userdata['srsession_data']['customer_policyno'];
								} else {
								$userploicyno = "";
								}
								if (!empty($this->session->userdata['srsession_data']['customer_dob'])) {
								$userdob = $this->session->userdata['srsession_data']['customer_dob'];
								} else {
								$userdob = "";
								}
								if (!empty($this->session->userdata['srsession_data']['customer_contactno'])) {
								$usercontactno = $this->session->userdata['srsession_data']['customer_contactno'];
								} else {
								$usercontactno = "";
								}
								if (!empty($this->session->userdata['srsession_data']['customer_emailid'])) {
								$useremailid = $this->session->userdata['srsession_data']['customer_emailid'];
								} else {
								$useremailid = "";
								}
								if (!empty($this->session->userdata['srsession_data']['customer_feedback'])) {
								$userfeedback = $this->session->userdata['srsession_data']['customer_feedback'];
								} else {
								$userfeedback = "";
								}
								}
								$contact_session_data = array(
								'customer_policyno' => '',
								'customer_dob' => '',
								'customer_contactno' => '',
								'customer_emailid' => '',
								'customer_feedback' => '',
								);
								$this->session->unset_userdata('srsession_data', $contact_session_data);
								//$this->session->set_flashdata('error', "");
								}
								?>

                            <ul class="feedbackUL contactusUL_">
                                <li>
                                    <input type="text" name="customer_policyno" placeholder="Policy Number" maxlength="8" value="<?php echo!empty($userpolicyno) ? $userpolicyno : ""; ?>"/>
                                    <?php echo form_error('customer_policyno', '<div class="input_error errorMsg1">', '</div>'); ?>
									<div id="customer_policyno_error" class="input_error errorMsg"></div>
                                    <span class="mandatory_">*</span>  
                                </li>
                                <li>
                                    <input type="text" name="customer_dob" id="customerDOB" placeholder="Date of Birth" class="dateFormat" value="<?php echo!empty($userdob) ? $userdob : ""; ?>"/>
                                    <?php echo form_error('customer_dob', '<div class="input_error errorMsg1">', '</div>'); ?>  
                                     <div id="customer_dob_error" class="input_error errorMsg"></div>
                                    <span class="mandatory_">*</span>
                                </li>
                                <li>
                                    <input type="text" name="customer_contactno" placeholder="Contact Number" maxlength="10" value="<?php echo!empty($usercontactno) ? $usercontactno : ""; ?>"/>                                   
                                    <?php echo form_error('customer_contactno', '<div class="input_error errorMsg1">', '</div>'); ?> 
                                        <div id="customer_contactno_error" class="input_error errorMsg"></div>									
                                    <span class="mandatory_">*</span>
                                </li>
                                <li>
                                    <input type="text" name="customer_emailid" placeholder="Email ID" maxlength="40" value="<?php echo!empty($useremailid) ? $useremailid : ""; ?>"/>
                                    <?php echo form_error('customer_emailid', '<div class="input_error errorMsg1">', '</div>'); ?> 
                                  <div id="customer_emailid_error" class="input_error errorMsg"></div>									
                                    <span class="mandatory_">*</span>
                                </li>
                                <li>
                                    <div class="selectbg">
                                        <div class="selectedvalue feedbackSel">Select Options</div>
                                        <select id="srgroups" name="srgroups" class="">
                                            <option value="">Select Options</option>
                                            <?php
                                            foreach ($srGroups as $srgroup) {
                                                echo "<option  value='$srgroup->entry_id'>$srgroup->srgroups</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <?php echo form_error('srgroups', '<div class="input_error errorMsg1">', '</div>'); ?> 
  									<div id="srgroup_error" class="input_error errorMsg"></div>
                                    <span class="mandatory_">*</span>
									<div id="srgroup-knowmore"></div> 
                                </li>

                                <li>
                                    <div class="selectbg">
                                        <div class="selectedvalue feedbackSel">Select Options</div>
                                        <select id="srtypes" name="srtypes" class="">                                          
                                        </select>
                                    </div>
                                    <?php echo form_error('srtypes', '<div class="input_error errorMsg1">', '</div>'); ?> 
                                     <div id="srtypes_error" class="input_error errorMsg"></div>									
                                    <span class="mandatory_">*</span>
									<div id="srtype-knowmore"></div> 
                                </li>

                                <li>                                    
                                    <textarea placeholder="Please enter your query here" id="feedback" name="feedback" class="" maxlength="2000"><?php echo!empty($userfeedback) ? $userfeedback : ""; ?></textarea>
                                    <?php echo form_error('feedback', '<div class="input_error errorMsg1">', '</div>'); ?>   
                                    <div id="feedback_error" class="input_error errorMsg"></div>								
                                    <span class="mandatory_">*</span>
									<span class="smallTxt">Character Limit - 2000</span>
                                </li>

                               <li>
                                    <div class="uploadBtn">
                                        <input type="file" name="customerDocument" id="customerDocument"/>
                                        <span class="filePath">Upload document</span>
                                        <a href="javascript:;">Browse</a>
                                    </div>
                                    <?php echo form_error('customerDocument', '<div class="input_error errorMsg1">', '</div>'); ?>  
									<div id="customerdocument_error" class="input_error errorMsg"></div>
									<span class="smallTxt">Only .jpg, .jpeg, .doc, .docx, .png, .pdf formats allowed to a max size of 2 MB.</span>
                                </li>
                                <li>
									<div id="contactFormCaptcha"></div>
									<?php echo form_error('g-recaptcha-response', '<div class="input_error errorMsg1">', '</div>'); ?> 
									<div id="contactformcaptcha_error" class="input_error errorMsg"></div>
								</li>


                                <li class="checkbx">
                                    <label>
                                        <input type="checkbox" name="ndncReg" checked="checked">
                                        By submitting this form, you hereby allow us to contact you even
                                        if you are registered under NDNC.<span></span></label>
                                    <?php echo form_error('ndncReg', '<div class="input_error errorMsg1">', '</div>'); ?>  
                                     <div id="ndncReg_error" class="input_error errorMsg"></div>									
                                </li>

                                <li>                                    
                                    <input type="submit" class="buttonClick btn-life" id="contactSubmit" value="Submit"/>
                                    <a href="javascript:;" class="link" id="contactClear">Clear</a>
                                </li>
                            </ul>
                        </form>

                       <!-- <div class="thankyouBox" id="thanksMsgContactUs">
                            <h4>Thank you</h4>
                            <p>Thank you. Our representative will respond to you at the earliest.</p>
                            <div class="linkWrap"> <a id="contactUsBack" class="buttonClick" href="javascript:;">Back</a></div>
                        </div>
                        <p id="contactSubmitMsg"></p>-->

                    </div>
                </div>
            </div>
        </article>
    <?php } ?>	
	
</section>

<input type="hidden" id="base_url_hdn" name="base_url_hdn" value="<?php echo base_url();?>" />
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKslFz9Bwv_TlsQGDiA1yBbHNLBLZJzus" rel="nofollow" type="text/javascript"></script>
<script>
    var sucessNotification = false;
    var failureNotification = false;
</script>
<?php if (!empty($this->session->flashdata('success'))) { ?>
    <script>
        sucessNotification = true;        
    </script>
    <?php
	$this->session->set_flashdata('success',"");
}
if (!empty($this->session->flashdata('error'))) {
    ?>
    <script>
        failureNotification = true;        
    </script>
<?php 
$this->session->set_flashdata('error', "");
}
?>