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
  $eventGA = 'event '.$moduleName.' articles';
  $actionGA = $moduleName;
  //GA code Variables
?>
 
<style> 
	.breadcrumb-ulip{margin-top:20px; padding-bottom:1rem;}
</style>
         
	   <link rel="stylesheet" href="<?=base_url()?>assets/css/global.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/investment.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/vendor/rangeslider.css">
 <link rel="stylesheet" as="style" href="<?=base_url()?>assets/css/rd-calculator.css">
     <div class="interactionWrap investment">
      <div class="pageWrapper">
        <!-- New Content Update end from here -->
        <section id="investment_calculator" style="background-color: #FFF;">
          <div class="container">
            <ul class="breadcrumb-ulip">
              <li><a href="https://www.kotaklife.com/">Home&gt;</a></li>
              <li><a href="javascript:void(0);">Financial Tool Calculator &gt;</a></li>
              <li class="active"><a href="javascript:void(0);">RD Calculator</a></li>
            </ul>
            <div class="headSection">
              <h1 class="section_heading">Recurring deposits (RD) Calculator</h1>
              <p class="rdDesc">Recurring Deposits (RDs) offer you a simple, disciplined approach to saving and accumulate wealth over time, making them ideal for investors of all experience levels.
                 <span id="dots">...</span><span id="more">However, maximizing the returns on your RD requires more than just setting up an account. Understanding recurring deposit interest rates, exploring available options, and calculating potential returns are crucial steps. This is where RD calculators become your invaluable allies</span>
                 <span style="color: #ED3237 ;cursor: pointer;font-weight: 600;" onclick="readMoreRD()" id="myBtn"> Read more</span>
              </p>
            </div>
            <div class="row cal-margin">
              <div class="col-lg-12 m-no-padding">
                <div class="rdGrid">
                  <div class="rdCard">
                    <div>
                      <div class="range-wrap">
                        <div class="goal-wrap">
                          <p class="goal-title"><span>Monthly Investment</span></p>
                          <div class="input-wrap w11rem"><span class="rupee">₹&nbsp;</span>
                            <input id="monthlyInvestment" name="yearly" type="number" value="10000" class="sipForm" oninput="updateRdInputValue('monthlyInvestmentRange', 'monthlyInvestment')" onchange="updateRdSliderValue('monthlyInvestmentRange')" />
                          </div>
                        </div>
                        <div class="slider-wrap">
                          <!-- <input class="form-range" type="range" id="monthlyInvestmentRange" min="1000" max="1000000" step="1000" value="10000" oninput="updateRdInputValue('monthlyInvestmentRange', 'monthlyInvestment')" onchange="updateRdSliderValue('monthlyInvestmentRange')" /> -->
                          <input class="form-range" type="range" id="monthlyInvestmentRange" min="5000" max="100000" step="1000" value="10000" oninput="updateRdSliderValue('monthlyInvestmentRange')" onchange="updateInputValue('monthlyInvestmentRange', 'monthlyInvestment')" />
                          
                          <div class="invest-amt" style="margin-top: -15px;justify-content: space-between;">
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                          </div>
                        </div>
                        <div class="value-wrap">
                          <div class="min"><span class="rupee">₹&nbsp;</span><span class="amount">5 k</span></div>
                          <div class="max"><span class="rupee">₹&nbsp;</span><span class="amount">1 lakh</span></div>
                        </div>
                      </div>

                      <div class="range-wrap">
                        <div class="goal-wrap">
                          <p class="goal-title">Interest Rate <span class="sublabel sublableMonthly">(P.A)</span></p>
                          <div class="input-wrap year-wrap">
                            <input type="number" id="rdinterestRate" value="7" oninput="updateRdInputValue('rdinterestRateRange', 'rdinterestRate')" onchange="updateRdSliderValue('rdinterestRateRange')" /><span>&nbsp; %</span>
                          </div>
                        </div>
                        <div class="slider-wrap">
                            <input type="range" class="form-range" id="rdinterestRateRange" min="1" max="20" step="0.1" value="7" oninput="updateRdSliderValue('rdinterestRateRange')" onchange="updateRdInputValue('rdinterestRateRange', 'rdinterestRate')" />
                            <div class="invest-amt" style="margin-top: -15px;justify-content: space-between;">
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                            </div>
                        </div>
                        <div class="value-wrap">
                          <div class="min"><span class="rupee">&nbsp;</span><span class="amount">1%</span></div>
                          <div class="max"><span class="rupee">&nbsp;</span><span class="amount">20%</span></div>
                        </div>
                      </div>

                      <div class="range-wrap">
                        <div class="goal-wrap">
                          <p class="goal-title">Investment Tenure <span class="sublabel sublableMonthly">(Years)</span></p>
                          <div class="input-wrap year-wrap">
                            <input type="number" id="rdduration" value="2" oninput="updateRdInputValue('rddurationRange', 'rdduration')" onchange="updateRdSliderValue('rddurationRange')" /><span>Years</span>
                          </div>
                        </div>
                        <div class="slider-wrap">
                          <input type="range" class="form-range" id="rddurationRange" min="1" max="20" step="1" value="2" oninput="updateRdSliderValue('rddurationRange')" onchange="updateRdInputValue('rddurationRange', 'rdduration')" />
                            <div class="invest-amt" style="margin-top: -15px;justify-content: space-between;">
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                            </div>
                        </div>
                        <div class="value-wrap">
                          <div class="min"><span class="rupee">&nbsp;</span><span class="amount">1 Year</span></div>
                          <div class="max"><span class="rupee">&nbsp;</span><span class="amount">10 Year</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="rdGraph">
                      <div class="chart-container" style="position: relative; height:200px; width:200px;margin: 0 auto;">
                        <canvas id="rdChart"></canvas>
                      </div>
                    </div>
                  </div>

                  <div class="resultBox">
                    <div id="rdMaturityAmount" class="fDinvestMent-section"></div>
                    <a target="_blank" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-savings-plan-online/landing?utm_source=kasp_organic&utm_medium=website&utm_campaign=rdcalculator&utm_content=investnow" class="productCard-invest">Invest Now</a>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </section>

        <section id="whyUseRd">
          <div class="midWrapper">
            <div class="whyUseRd-grid">
              <div>
                <h2 class="whyUseRd-title">What is RD Calculator?</h2>
                <p class="whyUseRd-desc">Financial calculators help you test the waters before actually jumping in and making an investment. These calculators are designed to help you realize the returns on your investment basis the information you supply. RD calculator is no different. </p>
                <br>
                <p class="whyUseRd-desc">An RD calculator can help you understand how the calculation works basis the various factors mentioned below: </p>
              
                <div class="whyUseRd-list">
                  <div class="whyUseRd-flex">
                    <img src="<?=base_url()?>assets/images/calculator/rd-calculator/arrow.svg" alt="List" />
                    <div><b>Monthly Investment:</b> Your monthly contribution towards RD</div>
                  </div>
                  <div class="whyUseRd-flex">
                    <img src="<?=base_url()?>assets/images/calculator/rd-calculator/arrow.svg" alt="List" />
                    <div><b>Tenure:</b> The time interval for which you will stay invested</div>
                  </div>
                  <div class="whyUseRd-flex">
                    <img src="<?=base_url()?>assets/images/calculator/rd-calculator/arrow.svg" alt="List" />
                    <div><b>Interest Rate:</b> The rate of interest on your investment</div>
                  </div>
                  <div class="whyUseRd-flex">
                    <img src="<?=base_url()?>assets/images/calculator/rd-calculator/arrow.svg" alt="List" />
                    <div><b>Compounding Frequency:</b> How often the interest earned joins the chorus, enriching the overall sound.</div>
                  </div>
                  <div class="whyUseRd-flex">
                    <img src="<?=base_url()?>assets/images/calculator/rd-calculator/arrow.svg" alt="List" />
                    <div><b>Maturity Amount: </b>The final amount you receive after investing for a specific time period. </div>
                  </div>
                  <div class="whyUseRd-flex">
                    <img src="<?=base_url()?>assets/images/calculator/rd-calculator/arrow.svg" alt="List" />
                    <div><b>Total Interest Earned: </b>The amount you actually earned on your principle. </div>
                  </div>
                </div>
              </div>
              <div class="whyUseRd-img">
                <img src="<?=base_url()?>assets/images/calculator/rd-calculator/rdCalculator.jpg" alt="Why Use RD" />
              </div>
            </div>
          </div>
        </section>

        <section id="leveraging-rd">
          <div class="midWrapper">
            <h2 class="leveraging-title">Leveraging RD Calculators for a Flawless Performance</h2>
            <p class="leveraging-desc">Remember, an RD calculator is not just a number cruncher; it's your financial confidante, your trusted advisor in the investment portfolio. Use it to:</p>
            <div class="leveraging-list">
              <ul>
                <li><img src="<?=base_url()?>assets/images/calculator/rd-calculator/listIcon.svg" alt="List" /><p><b>Set Realistic Goals:</b>Understand how much you need to invest regularly to achieve your desired financial crescendo.</p></li>
                <li><img src="<?=base_url()?>assets/images/calculator/rd-calculator/listIcon.svg" alt="List" /><p><b>Compare and Choose Wisely:</b>Analyse different RD options and select the one that offers the best returns based on your risk tolerance and investment horizon.</p></li>
                <li><img src="<?=base_url()?>assets/images/calculator/rd-calculator/listIcon.svg" alt="List" /><p><b>Plan for Fiscal Harmony:</b>Factor in potential tax implications to avoid taxes at maturity</p></li>
                <li><img src="<?=base_url()?>assets/images/calculator/rd-calculator/listIcon.svg" alt="List" /><p><b>Track Your Progress:</b>Regularly use the calculator to monitor your investment growth and stay motivated throughout your financial journey.</p></li>
              </ul>
            </div>
            <p class="otherClassDesc">By embracing RD calculators and adopting a thoughtful approach, you can transform your RD into a powerful wealth-building instrument. Remember, knowledge is the key to unlocking the full potential of your investments, and informed decisions pave the path to financial success. So, start calculating, explore your options, and invest wisely for a financially fulfilling future!</p>
          </div>
        </section>

        <section id="otherCalc">
          <div class="midWrapper">
            <div class="otherCalcCard">
              <h3 class="otherClass">Check Out Our Other Calculators</h3>
              <p class="otherClassDesc">Financial well-being starts with a plan. You can check out more financial tools and calculators to get a head start in your financial journey.</p>
              <span  class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>

              <ul class="calculatorCardList rdslick">
                 <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/ulip-calculator">
                   <div class="menu-icon c1"></div>
                    ULIP <br> Calculator</a>
                </li>
               <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/hra-calculator">
                 <div class="menu-icon c7"></div>
                    HRA <br> Calculator</a>
                </li>
                
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/retirement-calculator">
                   <div class="menu-icon c4"></div>
                    Retirement <br> Calculator</a>
                </li>
               <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/bmi-calculator">
                   <div class="menu-icon c6"></div>
                    BMI <br> Calculator</a>
                </li>
                 <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/sip-calculator">
                   <div class="menu-icon c5"></div>
                    SIP <br> Calculator</a>
                </li>
                <li class="secondCard">
                  <a href="https://www.kotaklife.com/financial-tools-calculators/compound-interest-calculator">
                     <div class="menu-icon c3"></div>
                    Compound <br> Interest  Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/fd-calculator">
                   <div class="menu-icon c9"></div>
                    FD <br> Calculator</a>
                </li> 
               
              </ul>
            </div>
          </div>
        </section>
        
        <section id="comppundFaq">
          <div class="container">
            <div class="accordSec">
              <h2 class="accordTitle">Frequently Asked Questions </h2>
              <div class="accordList">
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>1</span>What is an RD calculator?</a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>An RD calculator is a tool that helps you estimate the maturity amount and total interest earned on a Recurring Deposit (RD) account.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>2</span>How does it work?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>You input the monthly deposit amount, tenure (duration), and interest rate. The calculator uses the compound interest formula to calculate the maturity value and interest earned.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>3</span>Who can use an RD calculator?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Anyone considering opening an RD account or anyone with an existing RD can use an RD calculator to plan their finances and track their progress.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>4</span>Is it accurate?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>As long as you input the correct information, the calculator will provide accurate results. However, keep in mind that actual returns may vary slightly due to rounding or bank-specific policies.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>5</span>What information do I need to use the calculator?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>You need three main pieces of information: monthly deposit amount, tenure, and interest rate. Some calculators may also ask for additional details like compounding frequency or penalty charges.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>6</span>What is the minimum/maximum deposit amount I can enter?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>This varies depending on the bank and type of RD account. Most calculators allow you to input any amount within reasonable limits.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>7</span>What is the range of tenures I can choose from?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Typically, RD tenures range from 6 months to 10 years. Some calculators may allow shorter or longer terms depending on the bank's offerings.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>8</span>What interest rate should I use?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>You can find the current interest rates offered by different banks on their websites or by using a comparison tool.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- New Section ended here -->

        <section class="term-blog ulip-blogs" id="ulip_blog">
          <div class="midWrapper">
            <div class="term-blog ">
              <h2 class="mb-20 term-tags fnt-24">Wealth Creation Related Blogs </h2>
              <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div">
              
              </ul>
              <!-- <div class="loadmores">
                <a href="javascript:;" class="link" id="load-more-articles" onclick="dataLayer.push({&#39;event&#39;: &#39;event financial tools calculators load&#39;, &#39;category&#39;: &#39;new customers&#39;, &#39;action&#39;: &#39;financial tools calculators&#39;, &#39;label&#39;: &#39;load more&#39;});" style="display: table;">Load More</a>
              </div> -->
              <div class="noRecord" style="display: none;"></div>
              <div class="innerLoader" style="display: none;">
                <img src="<?=base_url()?>assets/images/loader.gif" alt="Kotak Loader">
              </div>
            </div>
          </div>
        </section>
        <!-- Blogs ending here -->
        <section class="terms new-terms pt-0" id="terms_conditions">
          <div class="midWrapper">
            <button type="button" name="disclaimer" class="collapsible terms-txt whitespace-initial mt-30 readmt">Read about Tax
            benefits &amp; Plan Disclaimer</button>
            <div class="content-col mb-0 tab-align li-disc terms-para">
              <h3 class="  terms-conditions">Disclaimers-</h3>
              <div class="disclamier-pera pt-0">
                <p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant</p>
                <br>
                <p class="pl-0">The calculation is generated on the basis of information provided and does not constitute
                  an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the
                  advised to go through the sales brochure before conducting any sale.
                </p>
                <br>
               
                <p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS/FRADULENT OFFERS</b></p>
                <p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing
                  bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police
                  complaint.
                </p>
                <p class="pl-0 mt-10">Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN :
                  U66030MH2000PLC128503, Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400
                  051. Website: https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800.
                  https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800. 
                </p>
                <p class="pl-0 mt-10">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by
                  Kotak Mahindra Life Insurance Company Limited under license
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <input type="hidden" id="pageNo" value="1">
    <input type="hidden" id="sortType" value="recent">
    <input type="hidden" id="pageLimit" value="4">
    <input type="hidden" id="searchArticle" value="">
    <input type="hidden" id="pageType" value="topic">
    <input type="hidden" id="topicSlug" value="wealth-creation">
    <input type="hidden" id="url" value="<?=$_SERVER['REQUEST_URI']?>">
    <script  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" language="javascript" ></script>
    <script defer src="<?=base_url()?>assets/js/global.js"></script>
			<script defer src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.2.1/rangeslider.min.js"></script>
			<script defer src="https://cdnjs.cloudflare.com/ajax/libs/tipso/1.0.5/tipso.min.js"></script>
			<script src="https://cdn.jsdelivr.net/gh/formulajs/formulajs@2.5.0/dist/formula.min.js"></script> 
			<script src="<?=base_url()?>assets/js/insurance-guide.js"></script> 
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script async="" src="<?=base_url()?>assets/js/rd-calculator.js"></script> 


 
	<script>
      
        var acc = document.getElementsByClassName("collapsible");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
		 document.addEventListener("DOMContentLoaded", function() {
        const imageObserver = new IntersectionObserver((entries, imgObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                }
            })
        });
        const arr = document.querySelectorAll('img.lzy_img')
        arr.forEach((v) => {
            imageObserver.observe(v);
        })
    });
</script>

<script>

setTimeout(function() {
$('.rdslick').slick({
  infinite: false,
  arrows: true,
  dots: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1,

          },
          breakpoint: 768,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,

          }
        },


   ]

});
},1000 );
/*btn  slick ^*/
/*slick counter gsp v*/
if ($(window).width() > 768) {
  var $statusgspnew11 = $('.pagingInfo-facslick');
  var $slickElementgspnew11 = $('.rdslick');
  $slickElementgspnew11.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
      var i = (currentSlide ? currentSlide : 0) + 1;
      $statusgspnew11.html('<span class="finished_count">' + (i + 3) + '</span>' + '<span class="total_count">' + '/' + slick.slideCount + '</span>');
  });
}

if ($(window).width() < 768) {
  var $statusgspnew11 = $('.pagingInfo-facslick');
  var $slickElementgspnew11 = $('.rdslick');
  $slickElementgspnew11.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
      var i = (currentSlide ? currentSlide : 0) + 1;
      $statusgspnew11.html('<span class="finished_count">' + (i + 0) + '</span>' + '<span class="total_count">' + '/' + slick.slideCount + '</span>');
  });
}
 
/*slick counter gsp ^*/
</script>
 
 