<!-- Section Start -->
<section>
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
  </article>
  <!-- breadcrumb End -->
  <!-- midWrapper Start -->
  <article class="">
    <div class="midWrapper">
      <div class="headDesc">
        <h1>A career as a Life Advisor who Earns From Home</h1>
        <p>At Kotak Life, we nurture your entrepreneurial spirit to enable you to set up your own business right from the comfort of your home. As a Life Advisor, you will experience a work culture which is informal, flexible and economically stable. You will get the opportunity to earn from home at every stage, enhance your learning opportunities and enjoy multiple avenues for lateral and vertical career growth.</p>
        <a href="javascript:;" class="kliBack"><span>Back</span></a> </div>
      <div class="midWrap">
        <div class="topHeading">
          <h2>Who can become a Life Advisor?</h2>
          <p>Can you face challenges with confidence and go out of your way to achieve your dreams? If yes, then you’re on the right path to become a successful Life Advisor. Watch the video to know more.</p>
        </div>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 

  <article class="videobanner">
    <div class="midWrapper">
      <div class="videoBox">
        <div class="videoTv">
          <div id="player"></div>
          <div id="player1"></div>
          <div id="player2"></div>
          <div id="player3"></div>
        </div>
        <div class="videoList">
          <ul>
			<?php if($homeVideos){foreach($homeVideos as $dt){ ?>
            <li rel="<?php echo $dt->youtube_video_id;?>">
              <div class="videoThum"> <a onClick="dataLayer.push({'event':'event life advisor video', 'category':'life advisor', 'action':'career as life advisor','label':'video played|<?php echo $dt->title;?>'});" href="javascript:;"  rel="https://www.youtube.com/embed/<?php echo $dt->youtube_video_id;?>" class="youTubeVideo" ><img src="https://img.youtube.com/vi/<?php echo $dt->youtube_video_id;?>/0.jpg"/></a></div>
              <div class="videoInfo">
                <h3><?php echo $dt->title;?></h3>
                <p><?php echo $dt->shortDescription;?></p>
              </div>
            </li>
			<?php }} ?>
          </ul>
        </div>
      </div>
    </div>
  </article>
  <!-- Banner End --> 
  
  <!-- midWrapper Start -->
  <article class="bodWrapper ourPeople" >
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Why become a Life Advisor?</h2>
        <p>Being a Life Advisor is your first step towards a bright and fulfilling career. It not only offers you abundant earning potential, but also lets you build a stable and successful career.</p>
      </div>
      <div class="bodWrap lifeAdv">
        <ul class="planUL bodUL howdoUL">
          <li><a onClick="dataLayer.push({'event':'event why become section', 'category':'life advisor', 'action':'career as life advisor','label':'why become|be your own boss'});" href="javascript:;" class="beBoss"><span>Be your own <br>
            Boss </span><i class="arow"></i></a></li>
          <li><a onClick="dataLayer.push({'event':'event why become section', 'category':'life advisor', 'action':'career as life advisor','label':'why become|Get high income with zero investment'});" href="javascript:;" class="zeroInvest"><span>Get high income  <br>
            with zero investment</span><i class="arow"></i></a></li>
          <li><a onClick="dataLayer.push({'event':'event why become section', 'category':'life advisor', 'action':'career as life advisor','label':'why become|Empower your self with training and support'});" href="javascript:;" class="trainingSupp"><span>Empower your self <br>
            with training and support </span><i class="arow"></i></a></li>
          <li><a onClick="dataLayer.push({'event':'event why become section', 'category':'life advisor', 'action':'career as life advisor','label':'why become|Choose an alternate career path'});" href="javascript:;" class="careerPath"><span>Choose an alternate<br>
             career path</span><i class="arow"></i></a></li>
          <li><a onClick="dataLayer.push({'event':'event why become section', 'category':'life advisor', 'action':'career as life advisor','label':'why become|Enjoy rewards and Recognition'});" href="javascript:;" class="rewardsRecog"><span>Enjoy rewards <br>
            and Recognition</span><i class="arow"></i></a></li>
        </ul>
        
        <!--  BOD Description Start -->
        <div class="testiDescriptionWrap"> 
          <!--  BOD 01 Start -->
          <div class="descriptionWrap">
            <div class="imgSrc">
              <div class="img"><img class="lazy" data-src="<?php echo base_url();?>assets/images/lifeadvisor_img1.jpg"></div>
            </div>
            <div class="desc">
              <h3>Be your own Boss</h3>
              <p>There is no greater satisfaction than working on your own terms. As a Life Advisor, you have the flexibility to work whenever you like from wherever you like. You can choose to work full-time or part-time as per your needs. Moreover, if you wish to make a good living while spending ample time with your friends and family, working at Kotak Life Insurance is a good decision. Your time and performance will shape your insurance career in the long term.</p>
              <a href="javascript:" class="closePopup"><span>Close</span></a> </div>
          </div>
          <!--  BOD 01 End --> 
          <!--  BOD 02 Start -->
          <div class="descriptionWrap">
            <div class="imgSrc">
              <div class="img"><img class="lazy" alt="Perfomance of Balanced Fund" title="Perfomance of Balanced Fund" data-src="<?php echo base_url();?>assets/images/lifeadvisor_img2.jpg"></div>
            </div>
            <div class="desc">
              <h3>Get high income with zero investment</h3>
              <p>For a successful life insurance career the only investment required is time. No start-up capital is necessary. One can get started easily to explore limitless earning potential. You will earn an attractive commission with every policy sold, and also earn royalties in the form of renewal commissions every year. Here’s an illustration to depict what you could be earning.</p>
              <a href="javascript:" class="closePopup"><span>Close</span></a> </div>
          </div>
          <!--  BOD 02 End --> 
          <!--  BOD 03 Start -->
          <div class="descriptionWrap">
            <div class="imgSrc">
              <div class="img"><img class="lazy" alt="Performance of Frontline Equity Fund" title="Performance of Frontline Equity Fund" data-src="<?php echo base_url();?>assets/images/lifeadvisor_img3.jpg"></div>
            </div>
            <div class="desc">
              <h3>Empower your self with training and support</h3>
              <p>You don't have to be an expert in finance to be a successful Life Advisor. Once you embark on the journey, we will help you achieve your goals. Our training programmes will equip your with sound knowledge of the domain. You can trust our experienced facilitators to give you continuous support at every step of your learning process. If you need a place to meet your clients, you can utilise our office premises to clinch the deal.</p>
              <a href="javascript:" class="closePopup"><span>Close</span></a> </div>
          </div>
          <!--  BOD 03 End --> 
          <!--  BOD 04 Start -->
          <div class="descriptionWrap">
            <div class="imgSrc">
              <div class="img"><img class="lazy" alt="Performance of Kotak Opportunities fund in Equity" title="Performance of Kotak Opportunities fund in Equity" data-src="<?php echo base_url();?>assets/images/lifeadvisor_img4.jpg"></div>
            </div>
            <div class="desc">
              <h3>Choose an alternate career path</h3>
              <p>Our emphasis on cultivating an entrepreneurial spirit provides you with multiple avenues for lateral growth. Successful advisors who wish to change their career path can also switch to other full-time job functions such as Sales, Operations or Training. By joining Kotak Life Insurance, you can be assured of a career that lets you identify new opportunities in different arena, explore new avenues and grow professionally.</p>
              <a href="javascript:" class="closePopup"><span>Close</span></a> </div>
          </div>
          <!--  BOD 04 End --> 
          <!--  BOD 05 Start -->
          <div class="descriptionWrap">
            <div class="imgSrc">
              <div class="img"><img class="lazy" alt="Performance of Kotak Aggressive Growth Fund" title="Performance of Kotak Aggressive Growth Fund" data-src="<?php echo base_url();?>assets/images/lifeadvisor_img5.jpg"></div>
            </div>
            <div class="desc">
              <h3>Enjoy rewards and Recognition</h3>
              <p>Being a Life Advisor comes with many add-on benefits. Your performance can take you on tours across the country and the world. The regional, national and international sales meets will let you interact and network with fellow colleagues and potential clients. You may also be rewarded with fabulous gifts like vacations, cars and home appliances, along with your regular commission earnings. </p>
              <a href="javascript:" class="closePopup"><span>Close</span></a> </div>
          </div>
          <!--  BOD 05 End --> 
          
          <!-- Controls Start -->
          <div class="controls"> <a href="javascript:;" class="prevData">Prev</a> <a href="javascript:;" class="nextData">Next</a> </div>
          <!-- Controls End --> 
          
        </div>
        <!--  BOD Description End --> 
        
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- midWrapper Start -->
  <article class="planWrap ">
    <div class="midWrapper">
      <div class="midWrap">
        <div class="topDesc">
          <h2>KLI's Support to build your career</h2>
          <p>Kotak Life Insurance offers you ample opportunities to let you achieve your career goals.</p>
        </div>
        <ul class="reportUL careerLAUL">
          <li>
            <div class="reportBox">
              <div class="detail">
                <h3>Best-in class products</h3>
                <ul class="bullet">
                  <li>Offer a wide range of products to suit all stages of life</li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="reportBox">
              <div class="detail">
                <h3>Simple process</h3>
                <ul class="bullet">
                  <li>Enjoy smooth process for login and remuneration, and efficient claim settlement</li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="reportBox">
              <div class="detail">
                <h3>Customer support</h3>
                <ul class="bullet">
                  <li>Benefit from dedicated client service desk and online portal</li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="reportBox">
              <div class="detail">
                <h3>IT assistance</h3>
                <ul class="bullet">
                  <li>Get dedicated Partner Portal and Genie sales automation tool</li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="reportBox">
              <div class="detail">
                <h3>Marketing & promotion</h3>
                <ul class="bullet">
                  <li>Boost your sales with marketing collaterals</li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="reportBox">
              <div class="detail">
                <h3>Expert training</h3>
                <ul class="bullet">
                  <li>Attend customised training modules and certification programs</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- Success stories Start -->
  <article class="testimonialsWrapper successStoriesWrapper">
    <div class="midWrapper">
      <div class="midWrap">
        <h2>Success stories</h2>
        <div class="testimonialWrap">
          <ul class="testimonialUL testimonialUL02" id="successStrRes">
            
          </ul>
          <?php if(count($successStories) > 3){?>
			<a href="javascript:;" class="link" id="moreSuccessStories">More success stories</a>
          <?php } ?>
          <!--  Testimonials Description Start -->
          <div class="testiDescriptionWrap"> 
            <!--  Testimonials 01 Start -->
			<?php if(isset($successStories)){ foreach($successStories as $dt){ ?>
            <div class="descriptionWrap">
              <div class="imgSrc">
                <div class="img"><img class="lazy" data-src="<?php echo str_replace('{filedir_21}', base_url().'assets/images/uploads/life_advisor/', $dt->profile_img) ?>"></div>
              </div>
              <div class="desc">
                <h3><?php echo $dt->name; ?> <span><?php echo $dt->company_name; ?><?php //echo " | ". $dt->designation; ?></span></h3>
                <p><?php echo $dt->description; ?></p>
                <a href="javascript:" class="closePopup"><span>Close</span></a> </div>
            </div>
           <?php } } ?>
            <div class="controls"> <a href="javascript:;" class="prevData">Prev</a> <a href="javascript:;" class="nextData">Next</a> </div>
          </div>
        </div>
      </div>
    </div>
  </article>
  
  <article class="planWrap bodWrapper executiveWrapper">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Our Executive Advisors </h2>
      </div>
      <div class="bodWrap">
		<?php //$executiveAdvisors = array('1','2','3','4'); ?>
        <ul class="planUL bodUL" id="advisorsRes">
			<?php //$executiveAdvisors = array('1','2','3','4'); if($executiveAdvisors){ foreach($executiveAdvisors as $dt){ ?>
				<!--<li>
					<div class="img"><img src="<?php //echo base_url();?>assets/images/testimonial_img01.png" /></div>
					<h3><?php //echo $dt->name; ?> Name</h3>
				</li>-->
			<?php //}} ?>
        </ul>
      </div>
      <a data-event="event exec advisor view more" data-action="career as life advisor" data-label="executive advisors|view more" href="<?php echo base_url();?>our-executive-advisors" class="link ga_track">View more</a></div>
  </article>
  <!-- midWrapper End --> 
  
</section>
<!-- Section End --> 


<script>

var gaCat = <?php echo json_encode($gaCat);?>;
var agentsJson ="";

var formsJson = "";
var formsJsonLmt = "";

var jsonSucessStories = <?php echo json_encode($successStories);?>;
var resLimit = 3;

var jsonExeAdvisors = <?php echo json_encode($executiveAdvisors);?>;
var resExeAdvLimit= 5;

var jsonFaqs = "";
var resFaqsLimit= "";
</script>
<!--script src="https://www.youtube.com/player_api"></script-->