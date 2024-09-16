<!-- Section Start -->
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
		<p>Kotak Mahindra Life Insurance Company Ltd. is one of the fastest growing insurance companies in India, covering over 41.4 million lives nationwide (as of July 31 <sup>st</sup>, 2022).</p>
        <!--<p>Kotak Life Insurance is one of the fastest growing insurance companies in India, covering over 32.8 million lives nationwide (as on 31 <sup>st</sup> August 2021).</p>-->
		<a class="kliBack" href="<?=base_url()?>why-kotak-life/"><span>Back</span></a>
      </div>
	  </div>
	  </article>
	    <!-- Banner Start -->
  <article class="innerbanner"> 
	  <img src="<?php echo base_url();?>assets/images/why_kotak.jpg"       alt="The Kotak Life Insurance Team "   title="The Kotak Life Insurance Team " />
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
				<div class="img">
			 
				<?php if($dt->missionTitle=='Our Core Purpose'){ ?>
				<img title="Icon for value creation" alt="Icon for value creation" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->photo) ?>">
				<?php }else if($dt->missionTitle=='Our Mission'){ ?>
				<img alt="Icon for trusted partnership" title="Icon for trusted partnership" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->photo) ?>">
				<?php }else if($dt->missionTitle=='Our Vision'){?>
				<img title="Enriching careers at Kotak Life Insurance" alt="Enriching careers at Kotak Life Insurance" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->photo) ?>">
				<?php }?>
					
				</div>
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
		
			<?php foreach($aboutUsBoardOfDirectors as $dt){
               
			  

				?>
					<?php if($dt->boardofDirectorsName=='Mr. Uday Kotak'){?>
					<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr Uday Kotak" title="Mr Uday Kotak" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				<?php }else if($dt->boardofDirectorsName=='Mr. Shivaji Dam'){?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr. Shivaji Dam" title="Mr. Shivaji Dam" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
				<?php }else if($dt->boardofDirectorsName=='Mr. G. Murlidhar'){?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr. G. Murlidhar" title="Mr. G. Murlidhar" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
			
				<?php }else if($dt->boardofDirectorsName=='Ms. Anita Ramachandran'){?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Ms. Anita Ramachandran" title="Ms. Anita Ramachandran" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				<?php break;?>
				<?php }else if($dt->boardofDirectorsName==' Ms. Farida Khambata'){ ?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Ms. Farida Khambata" title="Ms. Farida Khambata" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
				<?php }else if($dt->boardofDirectorsName=='Mr. Dipak Gupta'){?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr. Dipak Gupta" title="Mr. Dipak Gupta" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
				<?php }else if($dt->boardofDirectorsName=='Mr. Gaurang Shah'){?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr. Gaurang Shah" title="Mr. Gaurang Shah" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
				<?php }else if($dt->boardofDirectorsName=='Mr. Mahesh Balasubramanian'){?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr. Mahesh Balasubramanian" title="Mr. Mahesh Balasubramanian" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
				<?php }else if($dt->boardofDirectorsName=='Mr. Prakash Apte'){ ?>
				
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr. Prakash Apte" title="Mr. Prakash Apte" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
					<?php }	?>
				
				
				
				
				
				
				<!--<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<?php if($dt->boardofDirectorsName=='Mr. Uday Kotak'){?>
					<img alt="Mr Uday Kotak" title="Mr Uday Kotak" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
					<?php }else if($dt->boardofDirectorsName=='Mr. Shivaji Dam'){?>
					<img alt="Mr Shivaji Dam" title="Mr Shivaji Dam" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
					<?php }else if($dt->boardofDirectorsName=='Mr. G. Murlidhar'){?>
					<img alt="G. Murlidhar - Closeup Image" title="G. Murlidhar - Closeup Image" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
					<?php }else if($dt->boardofDirectorsName=='Ms. Anita Ramachandran'){?>
					
					<img alt="Ms Anita Ramchandran" title="Ms Anita Ramchandran" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
					
					<?php }else if($dt->boardofDirectorsName==' Ms. Farida Khambata'){ ?>
					<img alt="Farida Khambata" title="Farida Khambata" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
				
					
					<?php }else if($dt->boardofDirectorsName=='Mr. Dipak Gupta'){?>
					<img alt="Mr Dipak Gupta" title="Mr Dipak Gupta" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
					<?php }else if($dt->boardofDirectorsName=='Mr. Gaurang Shah'){?>
					<img alt="Mr Gaurang Shah" title="Mr Gaurang Shah" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
					<?php }else if($dt->boardofDirectorsName=='Mr. Mahesh Balasubramanian'){?>
					<img alt="Mr. Mahesh Balasubramanium" title="Mr. Mahesh Balasubramanium" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
					<?php }else if($dt->boardofDirectorsName=='Mr. Prakash Apte'){ ?>
					<img alt="Mr Prakash Apte" title="Mr Prakash Apte" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
					<?php }	?>
					
					</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>-->
			  
			<?php } ?>
			
			<?php foreach( array_reverse($aboutUsBoardOfDirectors) as $dt){
               
			  

				?>
				<?php if($dt->boardofDirectorsName==' Ms. Farida Khambata'){ ?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Ms. Farida Khambata" title="Ms. Farida Khambata" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
				<?php }else if($dt->boardofDirectorsName=='Mr. Dipak Gupta'){?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr. Dipak Gupta" title="Mr. Dipak Gupta" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
				<?php }else if($dt->boardofDirectorsName=='Mr. Gaurang Shah'){?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr. Gaurang Shah" title="Mr. Gaurang Shah" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
				
				
				<?php }else if($dt->boardofDirectorsName=='Mr. G. Murlidhar'){?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr. G. Murlidhar" title="Mr. G. Murlidhar" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				
			
				<?php }	?>
				
				
		
				<?php }?>
				
				<?php foreach($aboutUsBoardOfDirectors as $dt){
					
					
					
					?>
				<?php if($dt->boardofDirectorsName=='Mr. Mahesh Balasubramanian'){?>
				<li><a onClick="dataLayer.push({'event':'event board of directors', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'board|<?php echo $dt->boardofDirectorsName; ?>'});" href="javascript:;">
                	<div class="img">
					<img alt="Mr. Mahesh Balasubramanian" title="Mr. Mahesh Balasubramanian" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->boardofDirectorsPhoto) ?>" />
						</div>
                    <div class="plusIcon"><span> plus</span> </div>
                		<h3><?php echo $dt->boardofDirectorsName; ?></h3>
                        <p><?php echo $dt->boardofDirectorsDesignation; ?></p>
                	</a>
                </li>
				 
				
				<?php } }?>
			<?php } ?>
            </ul>
            
          <div class="testiDescriptionWrap"> 
			<?php if(sizeof($aboutUsBoardOfDirectors) > 0) { ?>
				<?php foreach($aboutUsBoardOfDirectors as $dts){ ?>
				<div class="descriptionWrap">
					<div class="imgSrc">
						<div class="img"><img src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dts->boardofDirectorsPhoto) ?>"></div>
					</div>
					<div class="desc">
						<h3><?php echo $dts->boardofDirectorsName; ?><span><?php echo $dts->boardofDirectorsCompanyName; if($dts->boardofDirectorsCompanyName !=""){ ?> | <?php } echo $dts->boardofDirectorsDesignation; ?></span></h3>
						<p><?php echo $dts->boardofDirectorsIntro; ?></p>
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
  
  <article class="bodWrapper ourPeople">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Our Management Team</h2>
		<!--p>At Kotak Life Insurance, we look for individuals with a passion to serve in our Advisor Promotion Programme: Pragati. Our Executive Advisors with their experience, knowledge and expertise can assess our customers' needs and offer an ideal plan from our diverse product portfolio. It is this dedication to customers that has played a big part in their success.</p-->
      </div>
      
      <div class="bodWrap">
      		<ul class="planUL bodUL mgmtTeam">
			<?php if(sizeof($aboutUsKeyPeople) > 0) { ?>
				<?php foreach($aboutUsKeyPeople as $dt){ ?>
				
				<li><a onClick="dataLayer.push({'event':'event key people', 'category':'<?php echo $gaCat;?>', 'action':'about us','label':'key|<?php echo $dt->keyPeopleName; ?>'});" href="javascript:;">
						<div class="img">
						<img alt="<?=$dt->keyPeopleName?>" title="<?=$dt->keyPeopleName?>" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->keyPeoplePhoto) ?>" />
						</div>
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
						<div class="img">
						
						<?php if($dt->keyPeoplePhoto=='Mr. Shivaji Dam'){?>
						<img alt="Mr Shivaji Dam" title="Mr Shivaji Dam" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->keyPeoplePhoto) ?>"></div>
						<?php } ?>
						
						
						<?php if($dt->keyPeoplePhoto==''){?>
						<img alt="" title="" src="<?php echo str_replace('{filedir_9}', base_url().'assets/images/uploads/why_kotak/', $dt->keyPeoplePhoto) ?>"></div>
						<?php } ?>
						
						
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