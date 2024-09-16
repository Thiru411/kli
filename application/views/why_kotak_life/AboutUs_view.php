<!-- Section Start -->
<style>
.just-intro{
	text-align:justify;
}
</style>
<section>
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper"><ul><?php echo $this->breadcrumb->output(); ?></ul></div>
  </article> 
  <!-- breadcrumb End --> 
   
  <!-- midWrapper Start -->
  <article>
    <div class="midWrapper">
      <div class="headDesc">
        <h1>About Us</h1>
        <p>Kotak Life Insurance is one of the fastest growing insurance companies in India, covering over 50 million lives nationwide (as on 30 <sup>th</sup> June 2024).</p>
		<a class="kliBack" href="<?=base_url()?>why-kotak-life/"><span>Back</span></a>
      </div>
	  </div>
	  </article>
	    <!-- Banner Start -->
  <article class="innerbanner"> 
	  <img src="<?php echo base_url();?>assets/images/why_kotak.jpg" alt="About us" />
  </article>
  <!-- Banner End --> 
      
	    <!-- midWrapper Start -->
  <article class="midDescWrap">
    <div class="midWrapper">  
      <div class="boxWrap visionWrap">
	  <div class="topHeading">
        <h2>Our Vision and Mission </h2>
        <!--<p>We believe in the vision of a better tomorrow that will always bind us together and fortify our bond.</p>-->
		</div>
        <!--Carousel Start -->
        <ul class="innerUL visionUL">
			<?php if(sizeof($aboutUsVisionMission) > 0) { ?>
			<?php foreach($aboutUsVisionMission as $dt){ ?>
			  <li>
				<div class="img"><img src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->photo) ?>"></div>
				<h4><?php echo $dt->missionTitle; ?></h4>
				<p><?php echo $dt->missionDescription; ?></p>
			  </li>
			<?php } ?>
			<?php } ?>
        </ul>
        <!--Carousel End -->
        
      </div>
      
      <div class="boxWrap visionWrap01">
	  <div class="topHeading">
        <h2>Our Values</h2>
		<p>We are driven by our strong values that have held us together over the years:</p>
		</div>
        <!--Carousel Start -->
        <ul class="innerUL">
			<?php if(sizeof($aboutUsOurValues) > 0) { ?>
			<?php foreach($aboutUsOurValues as $dt){ ?>
			  <li>
				<h4><?php echo $dt->ourvaluesTitle; ?></h4>
				<p><?php echo $dt->ourvaluesDescription; ?></p>
			  </li>
			<?php } ?>
			<?php } ?>
        </ul>
        <!--Carousel End -->
      </div>
      
	  
		<?php 
			if(get_cookie('kotak_customer_type')){
				$cusType = get_cookie('kotak_customer_type');
			}else{
				$cusType = "new_customer";
			}
			
			if($cusType=="life_advisor"){
		?>
		  <div class="boxWrap growthStory">
			<div class="topHeading">
				<h2>The Growth Story</h2>
				<p>Since its inception as a small business of bill discounting in 1985, the firm has come a long way to be a leading financial conglomerate with its presence across all the spectrum of banking and financial sector.</p>
			</div>
			<div class="chartBox" id="chartContainer">
				
			</div>
		  </div>
		<?php } ?>
    </div>
  </article>
  <!-- midWrapper End --> 
  
    <!-- midWrapper Start -->
  <article class="planWrap bodWrapper">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Our Board of Directors</h2>
		<p>Our experienced leaders form a strong foundation that steers our company to be the leader in the industry. </p>
		</div>
      
<div class="bodWrap">
      		<ul class="planUL bodUL">
			<?php if(sizeof($aboutUsBoardOfDirectors) > 0) { ?>
			<?php 
			$board_directors = [];
			foreach($aboutUsBoardOfDirectors as $dt){ ?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $dt->gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName;?>'});" href="javascript:;">
				<div class="img"><img alt="<?php echo $dt->boardofDirectorsName; ?>" title="<?php echo $dt->boardofDirectorsName; ?>" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" /></div>
				<div class="plusIcon"><span> plus</span> </div>
					<h3><?php echo $dt->boardofDirectorsName; ?></h3>
					<p><?php echo $dt->boardofDirectorsDesignation; ?></p>
				</a>
			</li>
			
			<?php 
			
			 }}?>
			
			
			
            </ul>
            
          <div class="testiDescriptionWrap"> 
		  <?php if(sizeof($aboutUsBoardOfDirectors) > 0) { ?>
			<?php 
			$board_directors = [];
			foreach($aboutUsBoardOfDirectors as $dt){ ?>
		  <div class="descriptionWrap">
					<div class="imgSrc">
						<div class="img"><img src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>"></div>
					</div>
					<div class="desc">
						<h3><?php echo $dt->boardofDirectorsName; ?><span><?php echo $dt->boardofDirectorsCompanyName; if($dt->boardofDirectorsCompanyName !=""){ ?> | <?php } echo $dt->boardofDirectorsDesignation ?></span></h3>
						<p class="just-intro"><?php echo $dt->boardofDirectorsIntro; ?></p>
						<a href="javascript:" class="closePopup"><span>Close</span></a> 
					</div>
				</div>
				<?php } }?>
		
			
			<!-- Controls Start -->
            <div class="controls">
            	<a href="javascript:;" class="prevData">Prev</a>
            	<a href="javascript:;" class="nextData">Next</a>
            </div>
            <!-- Controls End -->
			
          </div>
      </div>       
    </div>
  </article>
  
  <article class="bodWrapper ourPeople">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Our Management Team</h2>
		<!--p>At Kotak Life Insurance, we look for individuals with a passion to serve in our Advisor Promotion Programme: Pragati. Our Executive Advisors with their experience, knowledge and expertise can assess our customers' needs and offer an ideal plan from our diverse product portfolio. It is this dedication to customers that has played a big part in their success.</p-->
      </div>
      
      <div class="bodWrap">
      		<ul class="planUL bodUL mgmtTeam">
			<?php if(sizeof($aboutUsKeyPeople) > 0) { ?>
				<?php foreach($aboutUsKeyPeople as $dt){ 
				$alt_name = $dt->keyPeopleName;
				
				
				?>
				  <li><a onClick="dataLayer.push({'event':'event key people', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'key|<?php echo $dt->keyPeopleName; ?>'});" href="javascript:;">
						<div class="img"><img alt="<?=$alt_name ?>" title="<?=$alt_name ?>" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->keyPeoplePhoto) ?>" /></div>
						<div class="plusIcon"><span> plus</span> </div>
							<h3><?php echo $dt->keyPeopleName; ?></h3>
							<p><?php echo $dt->keyPeopleDesignation; ?></p>
						</a>
					</li>
				<?php } ?>
			<?php } ?>
            </ul>
            
          <div class="testiDescriptionWrap">
			<?php if(sizeof($aboutUsKeyPeople) > 0) { ?>
				<?php foreach($aboutUsKeyPeople as $dt){ ?>
				<div class="descriptionWrap">
					<div class="imgSrc">
						<div class="img"><img src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->keyPeoplePhoto) ?>"></div>
					</div>
					<div class="desc">
						<h3><?php echo $dt->keyPeopleName; ?><span><?php echo $dt->keyPeopleCompanyName; ?> | <?php echo $dt->keyPeopleDesignation; ?></span></h3>
						<p><?php echo $dt->keyPeopleIntro; ?></p>
						<a href="javascript:" class="closePopup"><span>Close</span></a> 
					</div>
				</div>
				<?php } ?>
			<?php } ?>
			
			<!-- Controls Start -->
            <div class="controls">
            	<a href="javascript:;" class="prevData">Prev</a>
            	<a href="javascript:;" class="nextData">Next</a>
            </div>
            <!-- Controls End -->
			
          </div>
      </div>
       
    </div>
  </article>
</section>

<script>
var chartData = <?php echo json_encode($growthChart);?>;
</script>