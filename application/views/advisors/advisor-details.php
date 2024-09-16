 
  

     <link rel="stylesheet" href="<?php echo base_url()?>assets/advisor/css/jquery.rateyo.min.css"/>
     <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
     <link rel="stylesheet" href="<?php echo base_url()?>assets/advisor/css/responsive.css"/>
    
    





<!-- Section Start -->
 <div>
       <h1 class="heading-know">Know your Life Advisor</h1>  
           
        </div>
		 
<section class="know-life section-top">
   
       
        <div class="details-sec">
            <div>
                   
                    <div class="agent_details">
                        <img class="profile__pic" src="<?php echo base_url()?>assets/advisor/images/know-life.png">
                        <h5>Mrs. Plabita Priyadarshi</h5>

                         <div class="mb-3 d-flex">
                          
                          <div class="starrating mr-2 jq-ry-container" data-rateyo-rating="5 data-rateyo-num-stars="5" data-rateyo-score="5"></div>
                          </div>

                        <h6>Chief Advisor</h6>
                        <h6>Speaks: English, Hindi</h6>
                        <h6>Location: Mumbai</h6>
                        <p>Qualified for Million Dollar Round Conference for 15 times (4-Top of the tables, 7-Court Tables, 4-MDRT)</p>
                    </div>
                </div>
                <div>
                    <div class="contact__agent">
                        <p>Contact: Plabita Priyadarshi</p>
                        <p class="num-text">Call: (646) 555-0367</p>
                        <form class="msg_to_agent formvalidation" autocomplete="off" id="lifeAdvisorForm"> 
                        <div class="row" style="position: relative">
                           <input type="email" name="customer_email"  placeholder="Your Email" class="form-control text_fields" />
                           <div id="customer_email_error" class="input_error errorMsg"></div>
                        </div>
                        <div class="row" style="position: relative;">
                                    <input type="text" name="customer_name" placeholder="Your Name" class="form-control text_fields"/>
                                    <div id="customer_name_error" class="input_error errorMsg"></div>
                        </div>
                       
                         <!-- <div class="linkWrap"> <a class=" msg_submit" id="submitLifeAdvisor" href="javascript:;"><span class="btn-text">Submit</span></a> </div> -->
                            <button type="submit" id="submitLifeAdvisor" class="btn msg_submit">Submit</button>
                        </form>
                        <ul class="list-unstyled agent__icons">
                            <li><a href="#"><i class="fa fa-facebook"></i> <span>Facebook Profile</span></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i> <span>Follow @Plabita Priyadarshi</span></a></li>
                            <li><a href="#"><i class="fa fa-print"></i> <span>Print</span></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i> <span>Share on Facebook</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="<?php echo base_url()?>assets/advisor/js/jquery-3.5.1.slim.js"></script>
    <script src="<?php echo base_url()?>assets/advisor/js/popper.min.js"></script>
   <script src="<?php echo base_url()?>assets/advisor/js/bootstrapValidator.min.js"></script>
      <script src="<?php echo base_url()?>assets/advisor/js/jquery.rateyo.min.js"></script>
	  

       
<script>
  /* Star rating */
$(".starrating").rateYo({ readOnly: 1,})
$(".starrating-read").rateYo({ }).on("rateyo.change", function (e, data) {
  var rating = data.rating;
  $('.review-rating-value').text(rating+" Stars")
});
/* Star rating */
</script>
<script>
  $('.formvalidation')
  .bootstrapValidator({
  }).on('success.form.bv', function (e) {
    // Prevent form submission
    e.preventDefault();
    var $form = $(e.target);
    fv = $form.data('formValidation');
    if ($form.attr('action') != undefined) {
      $form.unbind('submit');
      $form.submit();
    }
  });

</script>

    