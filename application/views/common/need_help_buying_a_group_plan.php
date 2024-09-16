
<!-- midWrapper Start -->
  <article class="buyPlan">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Need help buying a plan?</h2>
      </div>
      <div class="buyForm">
        <h3>Request a Relationship Manager</h3>
        <div class="buyFormWrap">
		<form name="relationshipManager" id="relationshipManagerForm" autocomplete="off">
		  <div class="row">
           <p id="relationshipManagerFormStatusMessage"></p>
      </div>
      <div class="row">
          <input type="text" name="customer_name" placeholder="Your Name"/>
			    <div id="customer_name_error" class="input_error errorMsg"></div>
      </div>
      <div class="row">
          <input type="text" name="mobile_number" placeholder="Mobile Number" maxlength="10"/>
			    <div id="mobile_number_error" class="input_error errorMsg"></div>
      </div>
      <div class="row">
          <input type="text" name="email" placeholder="Email ID"/>
          <div id="email_error" class="input_error errorMsg"></div>
      </div>
      <div class="row">
          <input type="text" name="company_name" placeholder="Company Name"/>
          <div id="company_name_error" class="input_error errorMsg"></div>
      </div>
		  
      <?php if(isset($relationshipManagerCities) && sizeof($relationshipManagerCities) > 0) { ?>
          <div class="row">
            <div class="selectbg">
              <div class="selectedvalue">Select City</div>
              <select name="city">
                <option selected>Select City</option>
				<?php foreach($relationshipManagerCities as $detail) { ?>
                <option value="<?php echo $detail->title ?>"><?php echo $detail->title ?></option>
				<?php } ?>
              </select>
            </div>
			    <div id="city_error" class="input_error errorMsg"></div>
          </div>
        <?php } ?>

      <?php if(isset($relationshipManagerEmployeeCount) && sizeof($relationshipManagerEmployeeCount) > 0) { ?>
      <div class="row">
            <div class="selectbg">
      <?php
        $selectedValue = 'Select Member Count';
        $selectOptions = '';
        $isSelected = false;
        foreach($relationshipManagerEmployeeCount as $employeeCount) {
          if(isset($planType) && $planType == $employeeCount) {
            $isSelected = true;
            $selectedValue = $employeeCount;
            $selectOptions .= '<option selected value="'. $employeeCount .'">'. $employeeCount .'</option>';
          } else {
            $selectOptions .= '<option value="'. $employeeCount .'">'. $employeeCount .'</option>';
          }
        }
      ?>
              <div class="selectedvalue"><?php echo $selectedValue; ?></div>
              <select name="employee_count">
                <option <?php echo !($isSelected) ? 'selected' : '' ?>>Select Member Count</option>
        <?php echo $selectOptions ?>
              </select>
            </div>
      <div id="employee_count_error" class="input_error errorMsg"></div>
          </div>
      <?php } ?>

      <?php if(isset($relationshipManagerPlans) && sizeof($relationshipManagerPlans) > 0) { ?>
		  <div class="row">
            <div class="selectbg">
			<?php
				$selectedValue = 'Select Plan';
				$selectOptions = '';
				$isSelected = false;
				foreach($relationshipManagerPlans as $plan) {
					if(isset($planType) && $planType == $plan) {
						$isSelected = true;
						$selectedValue = $plan;
						$selectOptions .= '<option selected value="'. $plan .'">'. $plan .'</option>';
					} else {
						$selectOptions .= '<option value="'. $plan .'">'. $plan .'</option>';
					}
				}
			?>
              <div class="selectedvalue"><?php echo $selectedValue; ?></div>
              <select name="plan_selected">
                <option <?php echo !($isSelected) ? 'selected' : '' ?>>Select Plan</option>
				<?php echo $selectOptions ?>
              </select>
            </div>
			<div id="plan_selected_error" class="input_error errorMsg"></div>
          </div>
		  <?php } ?>

          <div class="row">
            <!--<div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>-->
			<div id="requestarelationshipManager"></div>
			<div id="g-recaptcha-response_error" class="input_error errorMsg"></div>
          </div>
          <div class="row checkbx">
            <label>
              <input type="checkbox" name="terms">
              By submitting this form, you hereby allow us to contact you even
              if you are registered under NDNC.<span></span></label>
			  <div id="terms_error" class="input_error errorMsg"></div>
          </div><!-- onclick="gtag_report_conversion(base_url.'/group-plans/group-gratuity-leave-encashment')" -->
          <div class="linkWrap"> <a class="buttonClick" id="submitrelationshipManager"   href="javascript:;" >Submit</a> <a class="link" id="clearrelationshipManager" href="javascript:;">Clear</a> </div>
		  </form>
        </div>
        <!-- Thank You Start -->
        <div class="thankyouBox" style="display:none">
          <h4>Thank you</h4>
          <p id="thankyou-message"></p>
           <div class="linkWrap"><a class="buttonClick" id="relationshipManagerFormBack" href="javascript:;">Back</a></div>
        </div>
        <!-- Thank You End -->
      </div>
      <div class="tollFree">
      	<!--<div class="needBox">
            <h3 class="callon">Call on toll free number <a href="javascript:;">1800 120 7856</a><span>(10:00 am &nbsp;and&nbsp; 06:00 pm)</span></h3>
            <p>Call our toll free number and our representative will help you buy the most suitable plan.</p>
        </div>-->
      	<div class="needBox">
            <h3 class="mailus">Mail us on <a class="ga_track" href="mailTo:corporate.solutions@kotak.com" data-event="event need help email"  data-action="<?php echo (!empty($actionGA)?$actionGA:'') ?>" data-label="email click">corporate.solutions@kotak.com</a></h3>
            <p>Mail your queries to us and we will answer them at the earliest.</p>
        </div>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  <!--<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-320263349/1yeFCNC12eUCELWp25gB',
      'event_callback': callback
  });
  return false;
}
</script>-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11038110538"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11038110538');
</script>

<script>
function gtag_report_conversion(url) {
	//alert();
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-11038110538/dsHFCKm9qIQYEMrmsI8p',
      'event_callback': callback
  });
  return false;
}
</script>
<script type="text/javascript">
_linkedin_partner_id = "3868225";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3868225&fmt=gif" />
</noscript>