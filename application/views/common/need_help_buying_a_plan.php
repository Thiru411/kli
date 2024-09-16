<!-- midWrapper Start -->
<style>
  .for-nri:after {
    background-image: unset !important;
  }

  .nritt {
    margin-top: 10px;font-weight: 600 !important;
  }
</style>
<article class="buyPlan">
  <div class="midWrapper">
    <div class="topDesc">
      <h2>Need help with life insurance?</h2>
    </div>
    <div class="buyForm">
      <h3>Request a Life Advisor</h3>
      <div class="buyFormWrap">
        <form name="lifeAdvisor" id="lifeAdvisorForm" autocomplete="off">
          <div class="row">
            <p id="lifeAdvisorFormStatusMessage"></p>
          </div>


          <?php if (isset($lifeAdvisorPlans) && sizeof($lifeAdvisorPlans) > 0) { ?>
            <div class="row">
              <div class="selectbg">
                <?php
                $selectedValue = 'Select Plan';
                $selectOptions = '';
                $isSelected = false;
                foreach ($lifeAdvisorPlans as $plan) {
                  if (isset($planType) && $planType == $plan) {
                    $isSelected = true;
                    $selectedValue = $plan;
                    $selectOptions .= '<option selected value="' . $plan . '">' . $plan . '</option>';
                  } else {
                    $selectOptions .= '<option value="' . $plan . '">' . $plan . '</option>';
                  }
                }
                ?>
                <div class="selectedvalue"><?php echo $selectedValue; ?></div>
                <select name="plan_selected" id="plan_selected" onchange="getSegmentPlan()">
                  <option <?php echo !($isSelected) ? 'selected' : '' ?>>Select Plan</option>
                  <?php echo $selectOptions ?>
                </select>
              </div>
              <div id="plan_selected_error" class="input_error errorMsg"></div>
            </div>
          <?php } ?>


          <div class="row">
            <input type="text" name="customer_name" id="customer_name" placeholder="Your Name" />
            <div id="customer_name_error" class="input_error errorMsg"></div>
          </div>
          <div class="row">
            <input type="text" name="mobile_number" id="mobile_number" placeholder="Mobile Number" maxlength="10" />
            <div id="mobile_number_error" class="input_error errorMsg"></div>
          </div>
          <?php if (isset($lifeAdvisorCities) && sizeof($lifeAdvisorCities) > 0) { ?>
            <div class="row">
              <div class="selectbg">
                <div class="selectedvalue">Select City</div>
                <select name="city">
                  <option selected>Select City</option>
                  <?php foreach ($lifeAdvisorCities as $detail) { ?>
                    <option value="<?php echo $detail->title ?>"><?php echo $detail->title ?></option>
                  <?php } ?>
                </select>
              </div>
              <div id="city_error" class="input_error errorMsg"></div>
            </div>
          <?php } ?>

          <?php
          if (get_cookie('kotak_customer_type')) {
            $cusTypeCookie = get_cookie('kotak_customer_type');
            if ($cusTypeCookie == 'existing_customer') {
              $cusType = 'Existing';
            } else {
              $cusType = 'New';
            }
          } else {
            $cusType = 'New';
          }
          ?>

          <?php if (isset($lifeAdvisorCustomers) && sizeof($lifeAdvisorCustomers) > 0) { ?>
            <div class="row">
              <div class="selectbg">
                <?php
                $selectedValue = 'Select Customer';
                $selectOptions = '';
                $isSelected = false;
                foreach ($lifeAdvisorCustomers as $customer) {
                  if (isset($customer) && $customer == $cusType) {
                    $isSelected = true;
                    $selectedValue = $customer;
                    $selectOptions .= '<option selected value="' . $customer . '">' . $customer . '</option>';
                  } else {
                    $selectOptions .= '<option value="' . $customer . '">' . $customer . '</option>';
                  }
                }
                ?>
                <div class="selectedvalue"><?php echo $selectedValue; ?></div>
                <select name="customer">
                  <option <?php echo !($isSelected) ? 'selected' : '' ?>>Select Customer</option>
                  <?php echo $selectOptions ?>
                </select>
              </div>
              <div id="customer_error" class="input_error errorMsg"></div>
            </div>
          <?php } ?>


          <div class="row">
            <input type="text" name="pincode" id="Pincode" placeholder="Pincode" />
            <div id="pincode_error" class="input_error errorMsg"></div>
          </div>



          <div class="row">
            <!--<div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>-->
            <div id="requestalifeadvisor"></div>
            <div id="g-recaptcha-response_error" class="input_error errorMsg"></div>
          </div>


          <div class="row checkbx">
            <label>
              <input type="checkbox" name="terms">
              By submitting this form, you hereby allow us to contact you even
              if you are registered under NDNC.<span></span></label>
            <div id="terms_error" class="input_error errorMsg"></div>
          </div>




          <div class="linkWrap"> <a class="buttonClick" onclick="submitLifeAdvisor()" id="submitLifeAdvisor" href="javascript:;">Submit</a> <a class="link" id="clearLifeAdvisor" href="javascript:;">Clear</a> </div>
        </form>
      </div>
      <!-- Thank You Start -->
      <div class="thankyouBox" style="display:none">
        <h4>Thank you</h4>
        <p id="thankyou-message"></p>
        <div class="linkWrap"><a class="buttonClick" id="lifeAdvisorFormBack" href="javascript:;">Back</a></div>
      </div>
      <!-- Thank You End -->
    </div>
    <div class="tollFree">
      <div class="needBox">
        <h3 class="whatsapp-chat">Get details of your policy on WhatsApp</h3>
        <p>Send a "Hi" to 93210 03007, from your registered mobile number.<br></p>
      </div>

      <div class="needBox">
        <h3 class="customer_service_contact"> Get in touch with our Customer Care team</h3>
        <p><a class="customer_service_btn customer_service" href="https://care.kotaklifeinsurance.com/webform" target="_blank">Click Here</a></p>
      </div>

      <div class="needBox">
        <h3 class="callon">Call on retail toll free number <a href="javascript:;">1800 209 8800 <br>
            Timings : 08:00 AM to 10:00 PM (Monday to Saturday) (excluding public holidays)</a></h3>
        <!--	<h3 class="callon">Call on toll free number for Group plans  <a href="javascript:;">1800 120 7856  -  10:00 AM to 6:00 PM (Monday to Friday)</a></h3>-->

        <p>Call our toll free number and our representatives will assist you with all your queries.</p>
        <p></p>


        <h3 class="for-nri nritt" id="nritext">For NRI Customers</h3>


        <p id="nricont">Contact No: +912267775000</p><br>
        <p id="nriimp">Important Information:</p>
        <p id="nricall">*Call Charges Apply</p>

        <p id="nritime">Call Center Timings- 8am to 10pm(Monday to Saturday as per IST)</p>

      </div>


      <div class="needBox">
        <h3 class="customer_service_faq"> Get Answers to the commonly asked questions</h3><!--Get in touch with our Customer Care team-->
        <p><a class="customer_service_btn customer_service" href="<?php echo base_url() ?>insurance-guide/policy-faqs" target="_blank">Policy FAQs</a></p>
      </div>

      <!--<div class="needBox">needBoxLast
            <h3 class="mailus">Mail us on <a class="ga_track" href="mailTo:kli.in/WECARE" data-event="event need help email"  data-action="<?php echo (!empty($actionGA) ? $actionGA : '') ?>" data-label="email click">kli.in/WECARE</a></h3>
            <p>Mail your queries to us and we will answer them at the earliest.</p>
        </div>-->
    </div>
  </div>
</article>
<!-- midWrapper End -->
<script>
  function getSegmentPlan() {
    var needSegment = $("#plan_selected").val();
    if (needSegment == "Protection Plans") {
      $target_url = base_url + "/OnlineTermInsurance/?utm_source=organic&utm_medium=website&utm_campaign=contact_us&utm_content=contact_us";
      window.open($target_url, '_blank');
    }
  }
</script>
<script>
  function submitLifeAdvisor() {
    let name = $('#customer_name').val();
    let phone = $('#mobile_number').val();
    let plan_selected = $('#plan_selected').val();
    let Pincode = $('#Pincode').val();



    //lmSMTObj.identify('', {
    //	"name": name,
    //	"phone":phone
    //	},function() {});

    //	lmSMTObj.track('requestLifeAdvisor', {
    //	"products": [
    //	{
    //	"category": plan_selected,
    //	"name": "Request A Life Advisor"
    //	}
    //	],
    //	"step": 01,
    //	"stepName": "Request A Life Advisor"
    //	"name": name,
    //	"mobileNumber": phone,
    //	"pincode": Pincode
    //	},
    //	{}, 
    //	function(){});






    lmSMTObj.identify('', {

      "name": name,

      "phone": phone

    }, function() {});



    lmSMTObj.track('requestLifeAdvisor', {

        "products":

        {

          "category": plan_selected,

          "name": "Request A Life Advisor"

        }
      }

      , {

        "step": 01,

        "stepName": "Request A Life Advisor",

        "name": name,

        "mobileNumber": phone,

        "pincode": Pincode

      },
      function() {});
  }
  $(document).ready(function() {
    /* code here */
    var timezone = new Date().toString().match(/\(([A-Za-z\s].*)\)/)[1]
    console.log(timezone)
    if (timezone == 'India Standard Time') {
      document.getElementById("nritext").style.display = "none";
      document.getElementById("nricont").style.display = "none";
      document.getElementById("nriimp").style.display = "none";
      document.getElementById("nricall").style.display = "none";
      document.getElementById("nritime").style.display = "none";

    }

  });
</script>