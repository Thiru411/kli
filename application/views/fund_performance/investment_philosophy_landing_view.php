
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
  $labelGA = 'tab|debt';
  //GA code Variables
?>

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
      <li><a href="javascript:void(0);" class="selected">Equity</a></li>
      <li><a href="<?php echo base_url(FP_MODULE_LINK.'/investment-philosophy-debt'); ?>" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Debt</a></li>
    </ul>
  </div>
  <article class="navWrapper">
    <div class="midWrapper"> 
      
      <!-- TAB Start -->
      <div class="claimWrapper fpWrapper"> 
      <img class="lazy" data-src="assets/images/equity-portfolio.png" alt="Equity Portfolio" />
      <div class="clearfix"></div>
        <p class="redTxt"><span>BMV model</span> : Sustainable <span>B</span>usiness with Prudent <span>M</span>anagement at Reasonable <span>V</span>aluation</p>
        <ul class="bmwModelUL">
          <li>
            <p>Investment Universe</p>
          </li>
          <li>
            <p>Business</p>
          </li>
          <li>
            <p>Management</p>
          </li>
          <li>
            <p>Valuation</p>
          </li>
        </ul>
        <ul class="planUL fpMIdUL">
          <li>
            <h3><span>B</span>usiness</h3>
            <div class="midBoxCont">
              <div class="rowCnt">
                <h4>Scalability</h4>
                <p>Low competitive intensity with potential to gain market share</p>
              </div>
              <div class="rowCnt">
                <h4>Predictability</h4>
                <p>Low regulatory intervention</p>
              </div>
              <div class="rowCnt">
                <h4>Sustainability</h4>
                <p>High return on capital (ROCE & ROE) and cash flow</p>
              </div>
            </div>
          </li>
          <li>
            <h3><span>M</span>anagement</h3>
            <div class="midBoxCont">
              <div class="rowCnt">
                <h4>Corporate Governance</h4>
                <p>Fairness towards minority shareholders</p>
              </div>
              <div class="rowCnt">
                <h4>Capital Allocation</h4>
                <p>Efficient deployment of surplus funds</p>
              </div>
              <div class="rowCnt">
                <h4>Growth Orientation</h4>
                <p>Focus on profitable growth</p>
              </div>
            </div>
          </li>
          <li>
            <h3><span>V</span>aluation</h3>
            <div class="midBoxCont">
              <div class="rowCnt">
                <h4>Intrinsic Valuation</h4>
                <p>Growth at reasonable price</p>
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
                      'profile_description' => '<p>Mr. Shanbhag has been part of the Kotak Group in varying capacities for close to a two decades. Prior to Kotak Life Insurance, Mr. Shanbhag was part of the Treasury team at Kotak Mahindra Bank. He has also been an integral part of the Kotak Prime team for 11 years, serving first as a Chief Financial Officer and then taking over as Chief Operating Officer.</p> <p>Mr. Shanbhag, a widely quoted knowledge leader in the investment domain, has close to two and half decades of work experience. Mr. Shanbhag is a qualified Chartered Accountant</p>'),*/
              array(  'name' => 'Mr. Hemant Kanawala',
                      'profile_name' => 'Senior Executive Vice President & Head - Equity',
                      'company_name' => 'Kotak Mahindra Life Insurance Company Ltd.',
                      'profile_image_name' => 'hemanth.JPG',
                      'profile_description' => '<p>Hemant Kanawala heads the Equity investment division at Kotak Mahindra Life Insurance Co. Ltd. (Kotak Life) and is responsible for managing equity assets of the company. In addition to delivering consistent fund performance, he also helped design the investment philosophy and risk management framework for the company.
					  <br><br>Hemant brings with him over 25 years of experience in equity management. He joined the Kotak Mahindra Group in 2000 as equity fund manager in the PMS division of Kotak Securities. He also briefly worked with Kotak Mutual Fund before moving to Kotak Life in the year 2010 as an equity fund manager.
					  <br><br>A Bachelor of Engineering from VJTI, Mumbai University, Hemant holds a Post graduate Diploma in Management from IIM Lucknow.
					  <br><br>In his free time, Hemant likes to read books on subjects ranging from business leadership and motivation to philosophy.<br><br></p>'),
              array(  'name' => 'Mr. Rohit Agarwal',
                      'profile_name' => 'Executive Vice President & Senior Fund Manager - Equity',
                      'company_name' => 'Kotak Mahindra Life Insurance Company Ltd.',
                      'profile_image_name' => 'rohith.JPG',
                      'profile_description' => '<p>Rohit Agarwal is the Senior Fund Manager - Equity at Kotak Mahindra Life Insurance Company (Kotak Life). He has been instrumental in designing the investment framework of the Funds and is actively involved in product innovation.
					  <br><br>He joined the company in 2011 as a Fund Manager and brings with him nearly 20 years of experience in the financial sector, managing money in the Indian Equity market. Prior to joining Kotak Life, Rohit worked with JP Morgan India in the Asset Management team.
					  <br><br>Having completed his B.Com from Kolkata University, Rohit went on to do his MBA in Finance from Symbiosis, Pune.
					  <br><br>Rohit is a sports enthusiast and likes to play cricket in his free time.<br><br></p>'),
					   array(  'name' => 'Ms. Radhavi Deshpande',
                      'profile_name' => 'Chief Investment Officer',
                      'company_name' => 'Kotak Mahindra Life Insurance Company Ltd.',
                      'profile_image_name' => 'radhavi.JPG',
                      'profile_description' => '<p>Radhavi Deshpande is the Joint President and Chief Investment Officer (CIO) at Kotak Mahindra Life Insurance Company (Kotak Life) since April 2021.<br><br>


Prior to this role, Radhavi was heading the proprietary trading vertical at Kotak Mahindra Bank’s treasury department with expertise in Fixed Income and Equity Trading.<br><br>

She started her career with Kotak in 1996 and has rich experience in Proprietary Trading and Fixed Income sales.<br><br>

An MBA from Institute of Management Education Pune, Radhavi is an avid traveller and a yoga enthusiast. Her other interests include playing sports.</p>'),
              //array(  'name' => 'Mr. Kunal Shah',
                      //'profile_name' => 'Debt Fund Manager',
                      //'company_name' => 'Assistant vice president 04',
                      //'profile_image_name' => 'kunal-shah.png',
                      //'profile_description' => '<p>Mr. Shah has over 12 years of experience in debt capital markets. of which last 8 years have been with Kotak Life Insurance.</p> <p>Mr. Shah is a Bachelor of Commerce (2001) , MBA (Finance), Sinhgad Institute, Pune (2004) and CFA (CFA Institute, USA)</p>')
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
				  <?php if($team_member->name=='Mr. Hemant Kanawala'){?>
				  <img alt="Mr. Hemanth Kanwala" title="Mr. Hemanth Kanwala" class="img_heigth" src="assets/images/<?php echo $team_member->profile_image_name; ?>" />
				  <?php }else if($team_member->name=="Ms. Radhavi Deshpande"){?>
				  <img alt="Mr. Radhavi Deshpande" title="Mr. Radhavi Deshpande" class="img_heigth" src="assets/images/<?php echo $team_member->profile_image_name; ?>" />
				   <?php }else if($team_member->name=="Mr. Rohit Agarwal"){?>
				   <img alt="Mr. Rohit Agarwal" title="Mr. Rohit Agarwal" class="img_heigth" src="assets/images/<?php echo $team_member->profile_image_name; ?>" />
				   <?php }?>
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
                  <div class="img"><img class="lazy" data-src="assets/images/<?php echo $team_member->profile_image_name; ?>"></div>
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