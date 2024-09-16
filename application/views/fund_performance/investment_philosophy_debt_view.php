
<?php
  //GA code Variables
  $categoryGA = '';
  if(get_cookie('kotak_customer_type')){
    if(get_cookie('kotak_customer_type') == 'new_customer') {
      $categoryGA = "new customers";
    } elseif (get_cookie('kotak_customer_type') == 'existing_customer') {
      $categoryGA = "existing customers";
    } elseif (get_cookie('kotak_customer_type') == 'life_advisor') {
      $categoryGA = "life advisor";
    }
  }else{
    $categoryGA = "new customers";
  }
  $moduleName = str_replace('-', ' ', $this->uri->segment(1));
  $eventGA = 'event tab';
  $actionGA = 'investment philosphy';
  $labelGA = 'tab|equity';
  //GA code Variables
?>

<style>

 </style>

<!-- Section Start -->
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
        <h1>Investment Philosophy</h1>
        <a href="<?php echo base_url(FP_MODULE_LINK); ?>" class="kliBack"><span>Back</span></a>
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
  <!-- Insurance Guide Start -->
  <div  class="tabWrap">
    <ul class="fundTabUL fundTabUL01">
      <li><a href="<?php echo base_url(FP_MODULE_LINK.'/investment-philosophy'); ?>" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Equity</a></li>
      <li><a href="javascript:void(0);"  class="selected">Debt</a></li>
    </ul>
  </div>
  <article class="navWrapper">
    <div class="midWrapper"> 
      
      <!-- TAB Start -->
      <div class="claimWrapper fpWrapper"> 
        <ul class="planUL fpMIdUL fpMIdUL01">
          <li>
            <div class="midBoxCont">
              <div class="rowCnt">
                <h4>Safety</h4>
                <p>Principal and Interest</p>
              </div>
              <div class="rowCnt">
                <p>Credit Risk Analysis by the credit committee</p>
              </div>
              <div class="rowCnt">
                <p>Analysis of the Different rating category universe</p>
              </div>
              <div class="rowCnt">
                <p>Quarterly analysis of the results</p>
              </div>
            </div>
          </li>
          <li>
            <div class="midBoxCont">
              <div class="rowCnt">
                <h4>Liquidity</h4>
                <p>Liquidity managed as per the interest rate view and the investment objective</p>
              </div>
            </div>
          </li>
          <li>
         
            <div class="midBoxCont">
              <div class="rowCnt">
                <h4>Returns</h4>
                <p><strong>Objective</strong>: Beating benchmarks & being in top quartile against comparable peer group</p>
              </div>
              <div class="rowCnt">
                <p>Key value add: Active tactical trading in addition to partial duration calls and credit deals</p>
              </div>
              
            </div>
          </li>
        </ul>
      </div>
      <!-- TAB End --> 
      
    </div>
  </article>
  <!-- Insurance Guide End --> 
  
  <!-- midWrapper Start -->
  <article class="riskManagementWrapper">
    <div class="midWrapper">
      <div class="boxWrap visionWrap01">
        <div class="topHeading">
          <h2>Risk Management</h2>
        </div>
        
        <!--Carousel Start -->
        <ul class="innerUL visionUL">
          <li>
            <div class="img"><img class="lazy" data-src="assets/images/risk-management-icon01.png"></div>
            <p>System Based (Investment  system, Attribution system) approach from front office to back office. </p>
          </li>
          <li>
            <div class="img"><img class="lazy" data-src="assets/images/risk-management-icon02.png"></div>
            <p>Periodic Review by Investment Committee.</p>
          </li>
          <li>
            <div class="img"><img class="lazy" data-src="assets/images/risk-management-icon03.png"></div>
            <p>Emphasis on regulatory as well as internal mandates like stock exposure, sector exposure, issuer limits, maturity limits.</p>
          </li>
        </ul>
        <!--Carousel End --> 
        
      </div>
    </div>
  </article>
  <!-- midWrapper End --> 
  
      <!-- midWrapper Start -->
  <article class="planWrap bodWrapper">
    <div class="midWrapper">
      <div class="topDesc">
        <h2>Investment Team</h2>
        
      </div>

      <?php 
            //GA code Variables
            $eventGA = 'event invest team';
            //GA code Variables

            $investment_teams = array(
             /* array(  'name' => 'Mr. Sudhakar Shanbhag',
                      'profile_name' => 'Chief Investment Officer',
                      //'company_name' => 'Assistant vice president 01',
                      'profile_image_name' => 'sudhakar-shanbag.png',
                      'profile_description' => '<p>Mr. Shanbhag has been part of the Kotak Group in varying capacities for close to a two decades. Prior to Kotak Life Insurance, Mr. Shanbhag was part of the Treasury team at Kotak Mahindra Bank. He has also been an integral part of the Kotak Prime team for 11 years, serving first as a Chief Financial Officer and then taking over as Chief Operating Officer.</p> <p>Mr. Shanbhag, a widely quoted knowledge leader in the investment domain, has close to two and half decades of work experience. Mr. Shanbhag is a qualified Chartered Accountant<p>'),*/
            /*  array(  'name' => 'Mr. Hemant Kanawala',
                      'profile_name' => 'Head Equities',
                      //'company_name' => 'Assistant vice president 02',
                      'profile_image_name' => 'hemant-kanavala.png',
                      'profile_description' => '<p>Mr. Kanawala has over 20 years of experience in capital markets, of which 15 years has been with Kotak Group. While in Kotak he has managed Funds in PMS, Offshore and Life Insurance.</p> <p>Mr. Hemant has done PGDBM, IIM Lucknow (1995) and is a BE, Mumbai University (1993)</p>'),*/
              /*array(  'name' => 'Mr. Rohit Agarwal',
                      'profile_name' => 'Equity Fund Manager',
                      //'company_name' => 'Assistant vice president 03',
                      'profile_image_name' => 'rohit-agarwal.png',
                      'profile_description' => '<p>Mr. Agarwal has over 10 years of experience in capital markets. Before joining Kotak in 2011, Mr. Agarwal was associated with JP Morgan for about 6 years.</p> <p>Mr. Agarwal is a Bachelor of Commerce (2001) and has done PGDBM, Symbiosis Pune (2005).</p>'),*/
              array(  'name' => 'Mr. Churchil H Bhatt',
                      'profile_name' => 'Executive Vice President & Debt Fund Manager',
					  'company_name' => 'Kotak Mahindra Life Insurance Company Ltd. ',
                      'profile_image_name' => 'churchil.JPG',
                      'profile_description' => '<p>Churchil Bhatt is the Executive Vice President at Kotak Mahindra Life Insurance Company (Kotak Life) with over 15 years of experience in the financial markets. In his current role, he is responsible for fund management for Kotak Life with expertise in fixed income and forex markets. 
<br><br>He joined Kotak Mahindra Group in 2007 and his last stint was with Kotak Mahindra Bank as Senior VP for Primary Dealership where he was the investment banker to Government of India’s debt issuances. He has been a part of Kotak Life since September 2020. 
<br><br>Churchil holds a B.E. degree in Information Technology from Gujarat University and is a silver medalist in MBA from VGSOM, II Kharagpur School of Management. <br>His hobbies range from reading to playing cricket and video games.
<br>.</p>'),
              
			  array(  'name' => 'Ms. Radhavi Deshpande',
                      'profile_name' => 'Chief Investment Officer',
                      'company_name' => 'Kotak Mahindra Life Insurance Company Ltd.',
                      'profile_image_name' => 'radhavi.JPG',
                      'profile_description' => '<p>Radhavi Deshpande is the Joint President and Chief Investment Officer (CIO) at Kotak Mahindra Life Insurance Company (Kotak Life) since April 2021.<br><br>


Prior to this role, Radhavi was heading the proprietary trading vertical at Kotak Mahindra Bank’s treasury department with expertise in Fixed Income and Equity Trading.<br><br>

She started her career with Kotak in 1996 and has rich experience in Proprietary Trading and Fixed Income sales.<br><br>

An MBA from Institute of Management Education Pune, Radhavi is an avid traveller and a yoga enthusiast. Her other interests include playing sports.</p>'),
            
			array(  
			'name' => 'Mr. Manoj Bharadwaj',
                      'profile_name' => 'Senior Vice President & Debt Fund Manager',
                      'company_name' => 'Kotak Mahindra Life Insurance Company Ltd.',
                      'profile_image_name' => 'manoj1.png',
                      'profile_description' => '<p>Manoj Bharadwaj has over 18 years of experience in financial markets. Prior to joining Kotak Life in March 2022, he worked with ICICI Bank for over 15 years. Over the past decade, he was involved in trading various instruments in the fixed income space. 
						At Kotak Life, his key responsibilities include management of fixed income portfolios in Unit Linked portfolios. 
						He has completed his B.Com from Mumbai University and MMS in Finance from SIES College of Management Studies.</p>'),
			/*'name' => 'Mr. Gajendra Manavalan',
                      'profile_name' => 'Senior Vice President & Debt Fund Manager',
                      'company_name' => 'Kotak Mahindra Life Insurance Company Ltd.',
                      'profile_image_name' => 'gajendra.JPG',
                      'profile_description' => '<p>Gajendra Manavalan is the Fund Manager – Debt for Kotak Mahindra Life Insurance Company. He joined the Kotak Mahindra Group in 2012 as debt fund manager of Kotak Mahindra Life Insurance. In 2015, he was appointed as Chief Investment Officer of Kotak Mahindra General Insurance Co. In March 2020, he came back to Kotak Life, making this his second stint with the company. <br><br>Gajendra has more than 17 years of work experience in the Debt Market. Prior to joining Kotak, he worked as Chief Manager – Investments at MetLife India Insurance Ltd.  From 2007 to 2012. Before that, he was with JM Morgan Stanley handling fixed income dealing and research. 
<br><br>With an MBA in Finance from ICFAI Business School, Gajendra has completed his Mechanical Engineering from Bangalore University.
<br><br>He is a member of Chembur Fine Arts Society and loves playing indoor games with his son.</p>'),
			/*array(  'name' => 'Mr. Kunal Shah',
                      'profile_name' => 'Debt Fund Manager',
                      //'company_name' => 'Assistant vice president 04',
                      'profile_image_name' => 'kunal-shah.png',
                      'profile_description' => '<p>Mr. Shah has over 12 years of experience in debt capital markets. of which last 8 years have been with Kotak Life Insurance.</p> <p>Mr. Shah is a Bachelor of Commerce (2001) , MBA (Finance), Sinhgad Institute, Pune (2004) and CFA (CFA Institute, USA)</p>')*/
            );
            $investment_teams = json_decode(json_encode($investment_teams));
            if(count($investment_teams)):
          ?>
      
      <div class="bodWrap">
          <ul class="planUL bodUL">             
              <?php foreach ($investment_teams as $team_member): ?>
                <li>
                  <a href="javascript:;" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo 'team|'.strtolower($team_member->name); ?>'});">
                  <div class="img">
				 <?php if($team_member->name=='Mr. Churchil H Bhatt') { ?>
					 <img alt="Mr. Churchil H Bhatt" title="Mr. Churchil H Bhatt" class="img_heigth" src="assets/images/<?php echo $team_member->profile_image_name; ?>" />
				 <?php }else if($team_member->name=='Ms. Radhavi Deshpande'){ ?>
					  <img alt="Ms. Radhavi Deshpande" title="Ms. Radhavi Deshpande" class="img_heigth" src="assets/images/<?php echo $team_member->profile_image_name; ?>" />
					 <?php }else if ($team_member->name=='Mr. Manoj Bharadwaj'){?>
					 <img title="Mr. Manoj Bharadwaj" alt="Mr. Manoj Bharadwaj" class="img_heigth" src="assets/images/<?php echo $team_member->profile_image_name; ?>" />
					 <?php } ?>
				 </div>
                    <div class="plusIcon"><span> plus</span> </div>
                    <h3><?php echo $team_member->name; ?></h3>
                    <p><?php echo $team_member->profile_name; ?></p>
                  </a>
                </li> 
                <?php endforeach;?>             
            </ul>
            
          <!--  BOD Description Start -->
          <div class="testiDescriptionWrap">
            <?php $i = 1; foreach ($investment_teams as $team_member): ?>

              <!--  BOD 0<?php echo $i; ?> Start -->
              <div class="descriptionWrap">
                <div class="imgSrc">
                  <div class="img"><img src="assets/images/<?php echo $team_member->profile_image_name; ?>"></div>
                </div>
                <div class="desc">
                  <h3><?php echo $team_member->name; ?> <span><?php echo $team_member->profile_name; ?></span></h3>
                  <?php echo $team_member->profile_description; ?>
                  <a href="javascript:" class="closePopup"><span>Close</span></a> </div>
              </div>
              <!--  BOD 0<?php echo $i; ?> End --> 

            <?php $i++; endforeach;?>  
            <!-- Controls Start -->
            <div class="controls">
              <a href="javascript:;" class="prevData">Prev</a>
              <a href="javascript:;" class="nextData">Next</a>
            </div>
            <!-- Controls End -->
            
          </div>
          <!--  BOD Description End --> 
          
            
      </div>
    <?php endif;?>  
       
    </div>
  </article>
  <!-- midWrapper End --> 
  
</section>
<!-- Section End --> 