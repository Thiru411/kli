<!-- Section Start -->
<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />
<section> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
		<?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <!-- breadcrumb End --> 
  
  <!-- midWrapper Start -->
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>Careers for Life</h1>
		<p>Our promise to you, is an enriching journey. One where you contribute to our success story, find yourself in the process and embrace life as you work in a highly motivating and positive environment. We offer, not just a job, but experiences that last a lifetime. Nurturing you to reach your potential and celebrating life along the way. Through constant mentoring and development, we move towards the vision of a successful tomorrow.</p>
		<a class="kliBack" href="<?=base_url()?>why-kotak-life/">
		<a data-event="event career join us" data-action="career" data-label="join us" href="https://kotaklifeinsurance.darwinbox.in/ms/candidate/careers" rel="nofollow" target="_blank" class="redBtn ga_track">Join us</a> 
			<span>Back</span>
		</a>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
    <!-- Banner Start -->
  <article class="innerbanner"> 
	  <img class="lazy" data-src="<?php echo base_url();?>assets/images/banner-career.jpg" alt="Career" />
      <video id="v" controls="false"  loop autoplay>
        <source src="<?php echo base_url();?>assets/images/kma-career.mp4" type="video/mp4"></source>
      </video>
  </article>
  <!-- Banner End --> 
  
  <!-- midWrapper Start -->
  <article class="planWrap">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Our culture</h2>
      </div>
      <ul class="innerUL protPlanUL">
		<?php if(sizeof($ourCulture) > 0) { ?>
		<?php foreach($ourCulture as $dt){ ?>
			<li>
			  <!--<div class="img"><img src="<?php //echo $dt->ourCulture_image;?>"></div>-->
			  <div class="img"><img class="lazy" data-src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->ourCulture_image) ?>" alt="<?php echo $dt->ourCulture_description;?>"></div>
			  <!--<h4><?php //echo $dt->ourCulture_heading;?></h4>-->
			  <p><?php echo $dt->ourCulture_description;?></p>
			</li>
		<?php } } ?>
      </ul>
    </div>
  </article>
  <!-- midWrapper End --> 
  <!-- midWrapper Start -->
  <article class="greatPlaceWrap">
    <div class="midWrapper">
    <div class="midWrap">
      <h2>A great place to work</h2>
      <div class="descW">
            <div class="descL">
            	<p><?php
					if(sizeof($greatPlaceToWorkTitle) > 0) {
					foreach($greatPlaceToWorkTitle as $dt){
						echo $dt->great_place_to_work_title;
					}
					}
				?></p>
            </div>
            <div class="descR">
				<?php
					if(sizeof($bestEmployee) > 0) {
					foreach($bestEmployee as $dt){
						$name = $dt->best_employee_name;
						$des = $dt->best_employee_designation;
						$pic = $dt->best_employee_photo;
					}
					}
				?>
				<!--
            	<img src="<?php //echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $pic) ?><?php //echo $pic;?>">
                <div class="contR">
                	<h3>Best Employee of the year</h3>
                    <h4><?php //echo $name.", ".$des;?></h4>
                </div>
				-->
            </div>
      </div>
      
       <ul class="landingUL">
      	<li>
        	<div class="boxInfo">
            	<div class="mid">
					<?php
					if(sizeof($content) > 0) {
						foreach($content as $dt){
							$great_place_to_work_content = $dt->great_place_to_work_content;
							$great_place_to_work_image = $dt->great_place_to_work_image;
						}
					}
					?>
                    <p><?php echo $great_place_to_work_content;?></p>
                    </div>
            </div>
            <div class="img"><img class="lazy" data-src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $great_place_to_work_image) ?>" alt="<?php echo $great_place_to_work_content;?>"></div>
        </li>
        </ul>
        
        <ul class="workUL">
			<?php if(sizeof($gallery) > 0) { ?>
				<?php foreach($gallery as $dt){ ?>
						<li>
							<img class="lazy" data-src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->great_place_to_work_img_url) ?>" alt="<?php echo $dt->great_place_to_work_img_desc;?>">
							<div class="desc">
								<div class="desc01">
									<p><?php echo $dt->great_place_to_work_img_desc;?></p>
								</div>
							</div>
						</li>
			<?php } }	?>
        </ul>
        </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- midWrapper Start -->
  <article class="planWrap">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Testimonials</h2>
      </div>
      <ul class="testimonialUL testimonialUL01">
		<?php if(sizeof($testimonial) > 0) { ?>
		<?php foreach($testimonial as $dt){ ?>
			<li>
			  <div class="img"> <img class="lazy" data-src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->testimonial_photo) ?><?php //echo $dt->testimonial_photo?>"> </div>
			  <div class="details">
				<p><?php echo $dt->testimonial_description;?></p>
				<h3><?php echo $dt->testimonial_name;?></h3>
				<h3><?php echo $dt->department_name;?></h3>
				<h3><?php echo $dt->college_name;?></h3>
			  </div>
			</li>
		<?php } } ?>
      </ul>
    </div>
  </article>
  <!-- midWrapper End --> 
  
 
  <article class="calcPremium calcPremiumNew">
    <div class="midWrapper">
      <div class="topDesc">
        <p>Browse through the jobs profiles that best suit your interests and explore the world of opportunities with Kotak Life Insurance.</p>
        <!--  https://careers.mykotaklife.com  --> <a data-event="event career join us" data-action="career" data-label="join us" href="https://kotaklifeinsurance.darwinbox.in/ms/candidate/careers" rel="no follow" target="_blank" class="redBtn ga_track">Join us</a> 
		</div>
    </div>
    <img class="lazy" data-src="<?=base_url();?>assets/images/joinus.png" class="join_img" /> </article>
	
	 <article class="followUsWrap followUsWrapNew">
    <div class="midWrapper">
    	<h2>Follow us</h2>
        <ul class="followUL">
        	<li><a data-event="event social media follow buttons" data-action="career" data-label="social|linkedin" href="https://www.linkedin.com/company/13638973" target="_blank" class="linkedIn ga_track">LinkedIn</a></li>
        	<li><a data-event="event social media follow buttons" data-action="career" data-label="social|twitter" href="https://twitter.com/Kotak_Life" rel="no follow" target="_blank" class="twitter ga_track">Twitter</a></li>
        	<li><a data-event="event social media follow buttons" data-action="career" data-label="social|youtube"  href="https://www.youtube.com/channel/UCO_jlEV-Ugm_MSMfg2H1Low" rel="no follow" target="_blank" class="youtube ga_track">Youtube</a></li>
        	<li><a data-event="event social media follow buttons" data-action="career" data-label="social|facebook" href="https://www.facebook.com/kotaklife/"  rel="nofollow" target="_blank" class="facebook ga_track">Facebook</a></li>
        </ul>
        </div>
    </article>
	
</section>
<!--
sample
-->