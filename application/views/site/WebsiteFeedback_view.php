<section>
	<article class="breadcrumb">
		<div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
	</article>
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Website Feedback</h1>
        <p>Thank you for taking the time to share your feedback with us. This questionnaire will not take more than 2 minutes of your time .Your feedback will be imperative in the improvement of this website.</p>
		<a href="javascript:;" class="kliBack" onclick="goBack()"><span>Back</span></a> </div>
    </div>
  </article>
  
  <article class="feedbackWrapper">
  <form id="feedback_form" name="feedback_form" onsubmit="return false" autocomplete="off">
    <div class="midWrapper">
      <ul class="feedbackWrapUL">
        <li>
          <h3>Overall, how well does our website meet your needs?</h3>
          <ul class="optionBox">
            <li><label><input type="radio" name="rd_question1" value="Extremely well"><span>Extremely well </span></label></li>
            <li><label><input type="radio" name="rd_question1" value="Very well"><span>Very well </span></label></li>
            <li><label><input type="radio" name="rd_question1" value="Okay"><span>Okay </span></label></li>
            <li><label><input type="radio" name="rd_question1" value="Not so well"><span>Not so well </span></label></li>
            <li><label><input type="radio" name="rd_question1" value="Not at all well"><span>Not at all well</span></label></li>
          </ul>
        </li>
        <li>
          <h3>How easy was it to find what you were looking for on our website?</h3>
          <ul class="optionBox">
            <li><label><input type="radio" name="rd_question2" value="Not at all easy"><span>Not at all easy</span></label></li>
            <li><label><input type="radio" name="rd_question2" value="Not so easy"><span>Not so easy </span></label></li>
            <li><label><input type="radio" name="rd_question2" value="Somewhat easy"><span>Somewhat easy </span></label></li>
            <li><label><input type="radio" name="rd_question2" value="Very easy"><span>Very easy </span></label></li>
            <li><label><input type="radio" name="rd_question2" value="Extremely easy"><span>Extremely easy</span></label></li>
          </ul>
        </li>
        <li>
          <h3>Did it take you more or less time than you expected to find what you were looking for on our website?</h3>
          <ul class="optionBox">
            <li><label><input type="radio" name="rd_question3" value="A lot less time"><span>A lot less time </span></label></li>
            <li><label><input type="radio" name="rd_question3" value="A little less time"><span>A little less time </span></label></li>
            <li><label><input type="radio" name="rd_question3" value="About what I expected"><span>About what I expected </span></label></li>
            <li><label><input type="radio" name="rd_question3" value="A little more time"><span>A little more time </span></label></li>
            <li><label><input type="radio" name="rd_question3" value="A lot more time"><span>A lot more time</span></label></li>
          </ul>
        </li>
        <li>
          <h3>How visually appealing is our website?</h3>
          <ul class="optionBox">
            <li><label><input type="radio" name="rd_question4" value="Not at all appealing"><span>Not at all appealing </span></label></li>
            <li><label><input type="radio" name="rd_question4" value="Not so appealing"><span>Not so appealing </span></label></li>
            <li><label><input type="radio" name="rd_question4" value="Somewhat appealing"><span>Somewhat appealing </span></label></li>
            <li><label><input type="radio" name="rd_question4" value="Very appealing"><span>Very appealing </span></label></li>
            <li><label><input type="radio" name="rd_question4" value="Extremely appealing"><span>Extremely appealing</span></label></li>
          </ul>
        </li>
        <li>
          <h3>How easy is it to understand the information on our website?</h3>
          <ul class="optionBox">
            <li><label><input type="radio" name="rd_question5" value="Extremely easy"><span>Extremely easy </span></label></li>
            <li><label><input type="radio" name="rd_question5" value="Very easy"><span>Very easy </span></label></li>
            <li><label><input type="radio" name="rd_question5" value="Somewhat easy"><span>Somewhat easy </span></label></li>
            <li><label><input type="radio" name="rd_question5" value="Not so easy"><span>Not so easy </span></label></li>
            <li><label><input type="radio" name="rd_question5" value="Not at all easy"><span>Not at all easy </span></label></li>
          </ul>
        </li>
        <li>
          <h3>How likely is it that you would recommend our website to your friends / relatives / colleagues?</h3>
          <ul class="optionBox optionBoxUL">
            <li><a href="javascript:;" alt="0">0</a></li>
            <li><a href="javascript:;" alt="1">1</a></li>
            <li><a href="javascript:;" alt="2">2</a></li>
            <li><a href="javascript:;" alt="3">3</a></li>
            <li><a href="javascript:;" alt="4">4</a></li>
            <li><a href="javascript:;" alt="5">5</a></li>
            <li><a href="javascript:;" alt="6">6</a></li>
            <li><a href="javascript:;" alt="7">7</a></li>
            <li><a href="javascript:;" alt="8">8</a></li>
            <li><a href="javascript:;" alt="9">9</a></li>
            <li><a href="javascript:;" alt="10">10</a></li>
          </ul>
		  <input type="hidden" name="feedback_ratings" id="feedback_ratings" value="" />
        </li>
        <li>
          <h3>Do you have any other comments about how we can improve our website?</h3>
          <textarea placeholder="Please type here" id="feedback_comments_to_improve" name="feedback_comments_to_improve"></textarea>
        </li>
        <li>
          <h3>Your personal information will be safe with us, we need it for monitoring purpose only : </h3>
          <div class="buyFormWrap">
            <div class="row">
              <input type="text" placeholder="Your Name" id="feedback_name" name="feedback_name" maxlength="50" />
              <div id="feedback_name_error" class="input_error errorMsg"></div>
            </div>
            <div class="row">
              <input type="text" placeholder="Email ID" id="feedback_email" name="feedback_email" maxlength="150"/>
              <div id="feedback_email_error" class="input_error errorMsg"></div>
            </div>
            <div class="row">
              <input type="text" placeholder="Mobile Number" id="feedback_mobile_number" name="feedback_mobile_number"  maxlength="10"/>
            </div>
            <div class="row">
              <!--<input type="text" placeholder="Mobile Number" id="feedback_mobile_number" name="feedback_mobile_number"  maxlength="10"/>
			  <input type="text" id="feedback_city"  Name="feedback_city" placeholder="City" maxlength="40" class="form-control txt-auto"/>-->
			  <div class="selectbg">
			  <div class="selectedvalue feedback_city">Select city</div>
                <select name="feedback_city" id="feedback_city">
					<option value="">Select city</option>
					<?php if(isset($lifeAdvisorCities) && sizeof($lifeAdvisorCities) > 0) { ?>
					<?php foreach($lifeAdvisorCities as $detail) { ?>
					<option value="<?php echo $detail->title ?>"><?php echo $detail->title ?></option>
					<?php } } ?>
                </select>
				</div>
            </div>
            <!--<div class="row">
              <div class="selectbg">
                <div class="selectedvalue feedback_city">Select city</div>
                <select name="feedback_city" id="feedback_city">
                  <option selected="">Select city</option>
                  <option>City 1</option>
                  <option>City 2</option>
                </select>
              </div>
            </div>-->
			<div class="row">
              <div id="feedbackFormCaptcha"></div><div id="g-recaptcha-response_error" class="input_error errorMsg"></div>
            </div>
            <div class="row checkbx">
              <label>
				  <input type="checkbox" name="ndncReg">
				  By submitting this form, you hereby allow us to contact you even
				  if you are registered under NDNC.<span></span></label>
						<div id="ndncReg_error" class="input_error errorMsg"></div>
            </div>
          </div>
        </li>
      </ul>
      <div class="linkWrap"> 
	  <input type="submit" class="buttonClick" id="feedbackSubmit" value="Submit" style="cursor: pointer;"/>
	  <a class="link" href="javascript:;" id="feedbackClear" >Clear</a> </div>
		<p id="feedbackMsg"></p>
    </div>
	</form>
      <div class="thankyouBox" id="thanksMsgWebsiteFeedback">
        <p>Thank you for your valuable feedback.</p>
         <div class="linkWrap"> <a id="websiteFeedbackBack" class="buttonClick" href="javascript:;">Back</a></div>
      </div>
  </article>
</section>

<script>
var gaCat = <?php echo json_encode($gaCat);?>;
</script>