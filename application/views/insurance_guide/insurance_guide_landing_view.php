<?php
  //GA code Variables
  /*$categoryGA = '';
  if(get_cookie('kotak_customer_type')){
    if(get_cookie('kotak_customer_type') == 'new_customer') {
      $categoryGA = "new customers";
    } else if (get_cookie('kotak_customer_type') == 'existing_customer') {
      $categoryGA = "existing customers";
    } else if (get_cookie('kotak_customer_type') == 'life_advisor') {
      $categoryGA = "life advisor";
     }else{
    $categoryGA = "new customers";
  }

  $moduleName = str_replace('-', ' ', $this->uri->segment(1));
  $eventGA = 'event '.$moduleName.' articles';
  $actionGA = $moduleName;*/
  //GA code Variables
  
?>


<?php 
	//GA code Variables
	$categoryGA = '';
	if(get_cookie('kotak_customer_type')){
		if(get_cookie('kotak_customer_type') == 'new_customer') {
			$categoryGA = "new customers";
		} elseif (get_cookie('kotak_customer_type') == 'existing_customer') {
			$categoryGA = "existing customers";
		}
	}else{
		$categoryGA = "new customers";
	}
	$moduleName = str_replace('-', ' ', $this->uri->segment(1));
  $eventGA = 'event '.$moduleName.' articles';
  $actionGA = $moduleName;
	//GA code Variables
?>

<style>
.tabcontent{display:block !important;}
.imgSrc img{opacity:1 !important;}
    .glossary-score{display: none;}
    #trending-blogs, #policyFaq, #topPicks{padding-right: 80px;}
    
 </style>
<!-- Section Start -->
<section class="insurance-guide"> 
  <!-- breadcrumb Start -->
  <article class="breadcrumb">
    <div class="midWrapper">
      <ul>
        <?php echo $this->breadcrumb->output(); ?>
      </ul>
    </div>
  </article>
  <!-- breadcrumb End --> 
 
    <article>
      <div class="midWrapper">
        <div class="headDesc">
          <h1 class="insuranceGuide-title">Insurance Guide</h1>
          <!-- <p id="i1">Kotak Life Insurance helps you understand the various benefits of life insurance for you, your family, wealth creation, protection, retirement and savings. Find out how you can make the most of every plan.</p> -->
        </div>
      </div>
    </article>

    <article>
      <div class="midWrapper">
        <div class="head-section">
          <div class="search-box">
            <p class="selectCategory-text">Select Category</p>
            <!-- Commenting Below Search Bar -->
            <!-- <div class="search-bar"> 
              <input type="text" placeholder="search" class="selectCategory-input" />
              <span class="search-img"><img src="assets\images\insurance-guide/search.svg" alt="Search" /></span>
            </div> -->
            <div class="guide-list">
              <ul>
                <li class="guideList hideDesktop"> All Category <span class="fr"></span></li>
                <div id="hiddenGuideList" class="mobileList-hide">
                  <li id="defaultOpen" class="tablinks guide-active" onclick="openTab(event, 'aboutLifeInsurance')">About Life
                    Insurance <span class="fr"></span></li>
                  <!--Please add ">" icon here -->
                  <li id="termInsurance" class="tablinks" onclick="openTab(event, 'termInsurance')">Term Insurance <span
                      class="fr"></span></li>
                  <li id="ulip" class="tablinks" onclick="openTab(event, 'ulip')">ULIP <span class="fr"></span></li>
                  <li id="savings" class="tablinks" onclick="openTab(event, 'savings')">Savings & Tax <span class="fr"></span></li>
                  <li id="govtScheme" class="tablinks" onclick="openTab(event, 'govtScheme')">Government Schemes <span
                      class="fr"></span></li> 
                  <li id="healthInsurance" class="tablinks" onclick="openTab(event, 'healthInsurance')">Health Insurance <span
                      class="fr"></span></li>
                  <li id="retirement" class="tablinks" onclick="openTab(event, 'retirement')">Retirement <span class="fr"></span></li>
                </div>
              </ul>
            </div>
          </div>
          <div id="aboutLifeInsurance" class="tabcontent">
            <?php echo $article_details; ?>             
          </div> 
        </div>
      </div>
    </article>

    <section class="glossary-score"> <!-- Just copied from glossary section Please check once all before copy -->
      <div class="midWrapper">
        <div class="score-gls">
          <div class="roww">
            <div class="coll-md-6">
              <div class="settle-score">
                <h3 class="branch-title mobile-kot-life">Why Kotak Life?</h3>
                <img src="assets\images\insurance-guide/whyKotakBanner.png" alt="why kotak life">
                <div class="settle-content">
                  <div class="settcont">
                    <ul class="list-set">
                      <li><span>22 years </span> of legacy &amp; <br> trusted brand</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="coll-md-6">
              <div class="kotak-branches">
                <h3 class="branch-title desktop-brans">Why Kotak Life?</h3>
                <div class="brances-list">
                  <h4>NUMBER OF LIVES INSURED</h4>
                  <h3>4.54 crore<sup>#</sup></h3>
                  <p>as on 31<sup>st</sup> Jan 2023</p>
                </div>
                <div class="brances-list">
                  <h4>More than</h4>
                  <h3>1 lakh<sup>@</sup></h3>
                  <p>trusted agents</p>
                </div>
                <div class="brances-list">
                  <h4>BRANCHES</h4>
                  <!-- <p>More than</p>-->
                  <h3>288</h3>
                  <p>as on February 28, 2023</p>
                </div>
                <div class="brances-list">
                  <h4>CLAIM SETTLEMENT RATIO</h4>
                  <!--     <p>Net worth</p>-->
                  <h3>98.82%<sup>*</sup></h3>
                  <p>For FY 2021 - 2022</p>
                </div>
                <p class="glossary-reg">Ref. No. KLI/23 - 24 / E-WEB/184</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="trending-blogs">
      <div class="midWrapper">
        <h2 class="trending-blogstitle"><span>Trending Blogs</span></h2>
        <div class="trending-blog">
          <div class="trending-blogsLeft">
            <ul>
              <li>
                <div class="tblogContent">
                  <div class="tblog-img">
				   <a  href="https://www.kotaklife.com/insurance-guide/savingstax/what-is-hra-and-how-hra-exemption-is-calculated">
                    <img
                      src="assets\images\insurance-guide/real-estate-broker-agent-presenting-consult-customer-decision-making-sign-insurance-form-agreement.png"
                      alt="Trending Blogs" />
					  </a>
                  </div>
                  <div class="tblog-content">
				    <a  href="https://www.kotaklife.com/insurance-guide/savingstax/what-is-hra-and-how-hra-exemption-is-calculated">
                    <h3 class="tblog-title">What is HRA (House Rent Allowance) and How is HRA Exemption Calculated?</h3>
					</a>
                    <p class="tblog-date">Jun 29, 2023 <span> 404,976 Views</span></p>
                    <p class="tblog-desc">HRA is a portion of the salary aspect provided by the employer as a rental
                      housing allowance. Be aware of the HRA ... calculation, ...maximum, and the HRA exemption from
                      income tax.</p>
                    <a class="tblog-readMore"
                      href="https://www.kotaklife.com/insurance-guide/savingstax/what-is-hra-and-how-hra-exemption-is-calculated">Read
                      More</a>
                  </div>
                </div>
              </li>
              <li>s
                <div class="tblogContent">
                  <div class="tblog-img">
				  <a  href="https://www.kotaklife.com/insurance-guide/savingstax/income-tax-deductions-list">
                    <img src="assets\images\insurance-guide/tblogs-2.png" alt="Trending Blogs" />
					</a>
                  </div>
                  <div class="tblog-content">
				   <a  href="https://www.kotaklife.com/insurance-guide/savingstax/income-tax-deductions-list">
                    <h3 class="tblog-title">Income Tax Deductions & Exemptions under Sections 80C, 80D & 80DDB for FY
                      2021-22 & 2022-23</h3>
					  </a>
                    <p class="tblog-date">Jun 16, 2023 <span> 551,185 Views</span></p>
                    <p class="tblog-desc">A complete guide on income tax deductions and exemptions under Section 80C,
                      80CCC, 80D, and 80DDB. In detail, find out the deductions and other sections of the Income Tax Act
                      of 1961.</p>
                    <a class="tblog-readMore"
                      href="https://www.kotaklife.com/insurance-guide/savingstax/income-tax-deductions-list">Read
                      More</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="trending-blogsRight">
            <ul class="tblogs-right">
              <li>
                <a href="https://www.kotaklife.com/insurance-guide/savingstax/section-10d-of-the-income-tax-act-what-you-must-know"
                  target="_blank">
                  <h3 class="tblog-rightTitle">Section 10 (10d) of Income Tax Act, 1961 on Payouts of Life Insurance
                    Policy</h3>
                </a>
                <p class="tblog-date">Dec 20, 2017 <span> 427,944 Views</span></p>
              </li>
              <li>
                <a href="https://www.kotaklife.com/insurance-guide/savingstax/what-is-section-16-of-the-income-tax-act" target="_blank">
                  <h3 class="tblog-rightTitle">Section 16 of the Income Tax Act (ITA), 1961</h3>
                </a>
                <p class="tblog-date">Jun 16, 2022 <span> 84,914 Views</span></p>
              </li>
              <li>
                <a href="https://www.kotaklife.com/insurance-guide/savingstax/how-to-claim-a-tax-refund" target="_blank">
                  <h3 class="tblog-rightTitle">Excess TDS Deduction - Claim TDS Refund</h3>
                </a>
                <p class="tblog-date">Oct 10, 2019 <span> 184,691 Views</span></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="policyFaq">
      <div class="midWrapper">
        <div class="FaqGlossary-section">
          <div class="faqPolicy">
            <div class="faqPolicy-img">
              <img src="assets\images\insurance-guide/question.svg" alt="Faqs" />
            </div>
            <h3 class="faqPlicy-title">Policy FAQs</h3>
            <p class="faqPlicy-desc">Get all your questions answered <br> right here.</p>
            <a href="https://www.kotaklife.com/insurance-guide/policy-faqs" class="faqPolicy-knowMore">Know More</a>
          </div>
          <div class="glossary-sec">
            <div class="glossary-card">
              <div class="glossary-img">
                <img src="assets\images\insurance-guide/glossaryGuide.svg" alt="Glossary" />
              </div>
              <h3 class="glossary-title">Glossary</h3>
              <p class="glossary-desc">Get acquainted with all life insurance <br> related terms.</p>
              <a href="https://www.kotaklife.com/insurance-guide/glossary" class="glossary-knowMore">Visit Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="topPicks">
      <div class="midWrapper">
        <h2 class="topPicks-title"><span>Top picks for you</span></h2>
        <div class="topPicks-section">
          <div class="topPicks-left">
            <ul class="topPicks-leftCards">
              <li>
                <a href="https://www.kotaklife.com/insurance-guide/wealth-creation/fd-vs-mutual-fund-vs-sip-vs-ulip">
                  <div class="topPicks-leftCard">
                    <img
                      src="assets\images\insurance-guide/little-girl-pile-coin-saving-money-saving-concept-girl-mother-putting-coins-into-glass-bottle-have-good-future-both-education-finance-this-is-start-in.png"
                      alt="Top Picks" />
                    <h3 class="topPicks-subtitle">Which is Better - FD, Mutual Fund, SIP, or ULIP?</h3>
                  </div>
                </a>
              </li>
              <li>
                <a href="https://www.kotaklife.com/term-insurance/1-crore-term-insurance">
                  <div class="topPicks-leftCard">
                    <img src="assets\images\insurance-guide/creative-illustration-family-day-generative-ai.png" alt="Top Picks" />
                    <h3 class="topPicks-subtitle">How to Buy ₹1 Crore Life Insurance <br> Policy without Medical Test?
                    </h3>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="topPicks-center">
            <ul class="topPicks-centerCards">
              <li>
                <div class="topPicks-centerCard">
				<a  href="https://www.kotaklife.com/insurance-guide/government-schemes/pradhan-mantri-suraksha-bima-yojana">
                  <img src="assets\images\insurance-guide/group-kids-friends-arm-around-sitting-together (1).png" alt="Top Picks" />
				  </a>
                  <div class="topPicks-centerDesc">
				  <a  href="https://www.kotaklife.com/insurance-guide/government-schemes/pradhan-mantri-suraksha-bima-yojana">
                    <h3 class="topPicks-centertitle">Pradhan mantri suraksha <br> bima yojna</h3></a>
                    <div class="topPicks-dateReadmore">
                      <p class="tblog-date">Mar 11, 2023 <span>10,639 Views</span></p>
                      <a class="tblog-readMore" href="https://www.kotaklife.com/insurance-guide/government-schemes/pradhan-mantri-suraksha-bima-yojana">Read More</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="topPicks-right">
            <ul class="topPicks-rightCards">
              <li>
                <a href="https://www.kotaklife.com/insurance-guide/savingstax/how-to-save-tax-for-salary-above-20-lakhs">
                  <div class="topPicks-rightCard">
                    <img src="assets\images\insurance-guide/businessman-protection-money-table-with-tree (1).png" alt="Top Picks" />
                    <h3 class="topPicks-subtitle">Maximize Your Savings: Tax Tips for <br> Salaries above ₹20 Lakhs</h3>
                  </div>
                </a>
              </li>
              <li>
                <a href="https://www.kotaklife.com/insurance-guide/protection/difference-between-term-insurance-and-endowment-plan">
                  <div class="topPicks-rightCard">
                    <img src="assets\images\insurance-guide/swhite-umbrella-protecting-gold-coin-security-businessman (1).png"
                      alt="Top Picks" />
                    <h3 class="topPicks-subtitle">Difference between Term Insurance <br> and Endowment Plan</h3>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  <!-- midWrapper End --> 
</section>
<!-- Section End --> 

  <script>
  setTimeout(function (){
     document.getElementById("defaultOpen").click();

      // This js is not working here please copy in proper js file and it will work tested in browser the code is working 
	  
      $(".guideList").click(function (e) {
	
        $("#hiddenGuideList").toggleClass('mobileList-hide');
        $(".guideList").toggleClass('tooglearrow');
		
      });
	 
  },3000 );
   </script>
<script> // This js is not working here please copy in proper js file and it will work tested in browser the code is working 
  
      function openTab(evt, category) {
        
        var category1=""; 
        if(category=="aboutLifeInsurance"){category1="about-life-insurance";category="defaultOpen";}
        if(category=="termInsurance"){category1="protection";}
        if(category=="ulip"){category1="wealth-creation";}
        if(category=="savings"){category1="savingstax";}
        if(category=="govtScheme"){category1="government-schemes";}
        if(category=="healthInsurance"){category1="health-insurance";}
        if(category=="retirement"){category1="retirement";}
        //alert("category==="+category+"=====category1==="+category1);
        $.ajax({
        method:'post',
        url:"insurance_guide/insurance_guide_landing_view", 
        data:{category1:category1},
        cache : false,
        success:function(response) {  
          //console.log(response);
          $(".tabcontent").html(response);
          $(".tabcontent").addClass('d-block'); 
          
          tablinks = document.getElementsByClassName("tablinks");

          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" guide-active", "");
          }
          $("#"+category).addClass(' guide-active'); 

        //   tablinks = document.getElementsByClassName("tablinks");

        //  for (i = 0; i < tablinks.length; i++) {
        //    tablinks[i].className = tablinks[i].className.replace(" guide-active", "");
        //  }
        //  document.getElementById(category).style.display = "block";
        // evt.currentTarget.className += " guide-active";



        //   var i, tabcontent, tablinks;
        // tabcontent = document.getElementsByClassName("tabcontent");
        // for (i = 0; i < tabcontent.length; i++) {
        //   tabcontent[i].style.display = "none";

        // }
        // tablinks = document.getElementsByClassName("tablinks");
        // for (i = 0; i < tablinks.length; i++) {
        //   tablinks[i].className = tablinks[i].className.replace(" guide-active", "");
        // }
        // document.getElementById(category).style.display = "block";
        // evt.currentTarget.className += " guide-active";
        }
    });  
       
      }
	  
    
    </script>
 
