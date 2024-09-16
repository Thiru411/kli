
<!-- Section Start -->
<section class="pay-breadcumb">
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul><?php echo $this->breadcrumb->output(); ?></ul>
    </div>
  </article>

  <!-- midWrapper Start -->
  <article class="pay-prem-bg newpay-prem">
    <div class="midWrapper">
      <div class="payment">
        <h1>Pay My Premium</h1>
        <!-- <p class="premium">Pay My Premium</p> -->
         <div class="pay" style="margin-left: 40px;align-self:center;">
                <a href="" class="btn-red mt-0 mb-30">PAY ONLINE</a>
              </div>
    <!--    <div class="two-premium">
          <div class="column">
            <div class="card pay-card " style="display:flex;max-width:800px;">
              <p class="online_pay">Multiple ways to pay premiums online using Net Banking, Credit Card, Debit Card, UPI, wallets, Bill Pay along with various offline and auto payment options.</p>

             
            </div>

          </div>
        

        </div>-->
        <h5 class="kotak1">Kotak Life Insurance simplifies your premium payment process to ensure that your payments are on time. Choose the most convenient payment option for you and pay with a few clicks.</h5>
        <p class="choose">Choose from the following options:</p>
        

        <!-- Tab links -->
        <div class="tab_tab">
        <?php  $i=1; if($payPremium){ foreach($payPremium as $dt){ 
                 $active='';
              if($i==1){
                $active='active';
              }
               $i++;
              ?>
          <a class="tablinks_tablinks tabtn <?=$active?>" onclick="tabFunction(event, '<?=$dt->paymentMode?>')" id="defaultOpen">
          <?php 
              $image=	str_replace('{filedir_7}', 'assets/images/paymypremeium/', $dt->premium_image); 
          ?>
              <img src="<?=$image?>" alt="image">
              <p><?=$dt->paymentMode?></p>
            
          </a>
          <?php }}?>
        <!--  <a class="tablinks_tablinks tabtn" onclick="tabFunction(event, 'online_pay')">
            <div>
              <img src="<?=base_url()?>assets/images/paymypremeium/Group15109.svg" alt="image">
              <p>ONLINE PAYMENT</p>
            </div>
          </a>
          <a class="tablinks_tablinks tabtn" onclick="tabFunction(event, 'branch')">
            <div>
              <img src="<?=base_url()?>assets/images/paymypremeium/Group15111.svg" alt="image">
              <p>BRANCH OFFICES</p>
            </div>
          </a>-->
        </div>
        
         </div>
    </div>
    </article>
<article class="white-bg pad-bot-10">
       <div class="midWrapper">
        <!-- Tab content -->
        <?php $i=1; if($payPremium){ foreach($payPremium as $dt){ 
                 $active='';
              if($i==1){
                $active='active';
              }
               $i++;
               ?>

        <div id="<?=$dt->paymentMode?>" class="tabcontent_tabcontent tabcontent <?=$active?>">
         <!-- <p style="margin-bottom: 26px; ">-Electronic Clearing Service (ECS) is a convenient payment option that automatically debits your premium
            amount from your bank account on the due date</p>
          <p>Benefits of ECS </p>
          <ul>
            <li class="no_need">No need to remember your premium due dates</li>
            <li class="no_need">Ensures that your policy does not lapse due to non-payment</li>
          </ul>
          <div class="ecs-reg" style="display:flex;margin-bottom:20px;">
            <div class="ecslist" style="padding-right: 57px;">
              <p>To register for ECS please click here:</p>
              <a href="#" class="register">https://enach.mykotaklife.com/MandateDetails/ActivateECS</a>
            </div>
            <div>
              <p>To know more about ECS, you may write to us at</p>
              <a href="#" class="register">https://care.kotaklifeinsurance.com/webform</a>
            </div>
          </div>
          <p style="margin-bottom:15px;">Please ensure that your policy is active (in force) at the time this facility is activated.</p>
          <p style="margin-bottom:15px;">-Standing Instruction on Kotak Bank Credit Card:</p>
          <p style="margin-bottom:15px;">You can avail of the Standing Instruction facility on your Kotak Bank credit card by submitting the below documents at the nearest Kotak Life branch. To locate your nearest branch please click <a href="#" class="register">https://kli.in/TUPZTC</a></p>
          <p>1. Kotak Credit Card debit Authorization form 2. Policy holders credit card statement</p>
        </div>-->
       <?=$dt->paymentInfo?>
       </div>

<?php }}?>
      

          </div>
  </article>
  <!-- midWrapper End -->

  <!-- FAQs Start -->
  <article class="faqsWrap faqsWrap01 evenfaq">
    <div class="midWrapper">


      <h2>Pay Premium FAQs</h2>
      <div class="headDesc">
        <p>Get answers to all your Premium Payment related questions right here.</p>
      </div>
      <!-- Accord Start -->
      <ul class="accordUL" id="payMyPremiumFaqs">
        <?php //if($payPremiumFAQ){ foreach($payPremiumFAQ as $dt){ 
        ?>
        <!--<li>
          <h3><span><?php //echo $dt->faqQuestion;
                    ?></span></h3>
          <div class="accordDesc">
            <?php //echo $dt->faqAnswer;
            ?>
          </div>
        </li>-->
        <?php //}} 
        ?>

      </ul>
      <!-- Accord End -->
      <a onClick="dataLayer.push({'event':'event load faq', 'category':'<?php echo $gaCat; ?>', 'action':'pay my premium','label':'load more pay premium faqs'});" href="javascript:;" class="link" alt="pmpFAQ" id="load_more">Load more Pay premium FAQs <span></span><span></span><span></span></a>
    </div>
  </article>
  <!-- FAQs End -->

  <!-- midWrapper Start -->
  <article class="buyPlan buyPlan01">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Need help for paying premium?</h2>
      </div>
      <div class="tollFree ">
        <div class="needBox">
          <h3 class="callon">Call on toll free number <a href="javascript:;">1800 209 8800</a><span>(8:00 am to 10:00pm)</span></h3>
          <p>Call the toll free number for help regarding premium payments.</p>
        </div>
        <div class="needBox">
          <h3 class="whatsapp-chat">Get details of your policy on WhatsAp</h3>
          <p>Send a "Hi" to 93210 03007, from your registered mobile number.<br></p>
        </div>
        <div class="needBox">
          <h3 class="customer_service_contact"> Get in touch with our Customer Care team</h3>
          <p><a class="customer_service_btn customer_service" href="https://care.kotaklifeinsurance.com/webform" target="_blank">Click Here</a></p>
        </div>
      </div>
    </div>
  </article>
  <!-- midWrapper End -->

</section>
<!-- Section End -->
<script>
  var formType = "Pay My Premium";
  var gaCat = <?php echo json_encode($gaCat); ?>;
  var jsonDataFaqs = <?php echo json_encode($payPremiumFAQ); ?>;
  var jsonDataAppForm = "";
  var form_flag = "pmpFAQ";

  var annualFundPer = "";
  var fundPerformance = "";
</script>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<!--<script>
  $(document).on("click", ".active", function() {
    setTimeout(function() {
      $('.active').removeClass();
      $('.accordDesc').hide();

    }, 500);

  });
</script>-->
<script>
 /* function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent_tabcontent, tablinks_tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent_tabcontent = document.getElementsByClassName("tabcontent_tabcontent");
    for (i = 0; i < tabcontent_tabcontent.length; i++) {
      tabcontent_tabcontent[i].style.display = "none";
    
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks_tablinks = document.getElementsByClassName("tablinks_tablinks");
    for (i = 0; i < tablinks_tablinks.length; i++) {
      tablinks_tablinks[i].className = tablinks_tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }*/
  //document.getElementById("defaultOpen").click();
    
      function tabFunction(evt, tabs, vid) {
        var i, tabconts, tabtn, vid, active;
        tabconts = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabconts.length; i++) {
            tabconts[i].style.display = "none";
            tabconts[i].classList.remove("active");

        }

        tabtn = document.getElementsByClassName("tabtn");
        for (i = 0; i < tabtn.length; i++) {
            tabtn[i].className = tabtn[i].className.replace(" active", "");
        }
        document.getElementById(tabs).classList.add("active");
        document.getElementById(tabs).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>