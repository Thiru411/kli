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
	.ulip-blogs #articles-div li{height:376px !important;}
@media only screen and (max-width:480px) {
	.ulip-blogs #articles-div li{height:auto !important;}
}
</style>
	   <link rel="stylesheet" href="assets/css/global.css">
	   <link rel="stylesheet" href="assets/css/sip-calculator.css">
		
		<link rel="stylesheet" href="assets/css/retirement.css">
		<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">

     <div class="interactionWrap investment">
      <div class="pageWrapper">
        <section id="sip_calculator">
          <div class="container">
            <ul class="breadcrumb-ulip">
              <li><a href="https://www.kotaklife.com/">Home&gt;</a></li>
              <li><a href="/financial-tools-calculators">Financial Tool Calculator &gt;</a></li>
              <li class="active"><a href="javascript:void(0);">SIP Calculator</a></li>
            </ul>
            <p class="invest-cal ulipfnt">In ULIP, the investment risk in the investment portfolio is borne by the policyholder
            </p>
            <div class="headSection ulip-head">
              <h1 class="sipHeadTitle">SIP (Systematic Investment Plan) Calculator</h1>
              <p class="sipDesc">You can now calculate SIP returns on investment that you make in various funds using SIP calculator. Also, SIP investments should be made with 100% individual research or through financial advisors so you don’t invest in wrong funds or play your own losses.<span id="dots">...</span><span id="morecont">In such cases, if you calculate returns on SIP and then make one, it helps making informed, data-led decisions.</span><span style="color: #ED3237 ;cursor: pointer;font-weight: 600; font-size:17px" onclick="readMoreFD()" id="myBtn"> Read more</span></p>
            </div>
            <div class="row cal-margin">
              <div class="col-lg-12 m-no-padding">
                <div class="sipCard">
                  <div>
                    <div class="range-wrap">
                      <div class="goal-wrap">
                        <p class="goal-title">Investment Amount <span class="sublabel sublableMonthly">(Monthly)</span></p>
                        <div class="input-wrap w11rem"><span class="rupee">₹&nbsp;</span>
                          <input id="textValue" name="monthly" type="text" value="25,000" min="1000" max="100000"  class="sipForm" oninput="setInvestmentValue(this)" />
                        </div>
                      </div>
                      <div class="slider-wrap">
                        <input title="Tooltip on top" value="25000" min="1000" max="100000" step="500" type="range"
                          class="form-range" id="investment" />
                          <div class="invest-amt" style="margin-top: -15px;justify-content: space-between;">
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                          </div>
                        <span id="showValue" class="hide-span">25000</span>
                      </div>
                      <div class="value-wrap">
                        <div class="min"><span class="rupee">₹&nbsp;</span><span class="amount">1 k</span></div>
                        <div class="max"><span class="rupee">₹&nbsp;</span><span class="amount">1 lakh</span></div>
                      </div>
                    </div>

                    <div class="range-wrap">
                      <div class="goal-wrap">
                        <p class="goal-title">Interest Rate <span class="sublabel sublableMonthly">(P.A)</span></p>
                        <div class="input-wrap year-wrap">
                          <input id="textValue2" name="monthly" type="text" value="12" 
                            onkeyup="setVoltValue()" /><span>&nbsp; %</span>
                        </div>
                      </div>
                      <div class="slider-wrap">
                        <input title="Tooltip on top" value="4" min="1" max="30" step="1" type="range" class="form-range"
                          id="rateofInterest" />
                          <div class="invest-amt" style="margin-top: -15px;justify-content: space-between;">
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                          </div>
                        <span id="showValue2" class="hide-span">4</span>
                      </div>
                      <div class="value-wrap">
                        <div class="min"><span class="rupee">&nbsp;</span><span class="amount">1%</span></div>
                        <div class="max"><span class="rupee">&nbsp;</span><span class="amount">30%</span></div>
                      </div>
                    </div>

                    <div class="range-wrap">
                      <div class="goal-wrap">
                        <p class="goal-title">Investment Tenure <span class="sublabel sublableMonthly">(Years)</span></p>
                        <div class="input-wrap year-wrap">
                          <input id="textValue3" name="years" type="text" value="10" onkeyup="setYearValue()"
                            class="form-control"><span>Years</span>
                        </div>
                      </div>
                      <div class="slider-wrap">
                        <input title="Tooltip on top" value="10" min="0" max="30" step="1" type="range" class="form-range"
                          id="years" />
                          <div class="invest-amt" style="margin-top: -15px;justify-content: space-between;">
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                            <div class="amt-slot fwbold">|</div>
                          </div>
                        <span id="showValue3" class="hide-span">10</span>
                      </div>
                      <div class="value-wrap">
                        <div class="min"><span class="rupee">&nbsp;</span><span class="amount">1 Year</span></div>
                        <div class="max"><span class="rupee">&nbsp;</span><span class="amount">30 Year</span></div>
                      </div>
                    </div>
                    <!-- <hr class="seperator"> -->

                  </div>
                  <div class="sipGraph">
                    <div class="chart-container" style="position: relative; height:235px; width:235px;margin: 0 auto;">
                      <canvas id="myChart"></canvas>
                    </div>
                    <div class="investMent-section">
                      <div class="investAmt">
                        <div class="totalValuetxt">Invested Amount</div>
                        <div class="totalInvestReturns" id="showInvested">1,20,000</div>
                      </div>
                      <div class="totalReturns">
                        <div class="totalValuetxt">Total returns</div>
                        <div class="totalInvestReturns" id="showReturn">1,20,000</div>
                      </div>
                      <div class="totalAmt">
                        <div class="totalValuetxt">Total Value</div>
                        <div class="totalValue" id="showAmps">1,20,000</div>
                      </div>
                    </div>
                    <a target="_blank"
                      href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=sipcalculator&utm_content=investnow"
                      class="productCard-invest">Invest Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="sipCalc2">
          <div class="container">
            <div class="sipCalc-grid sipCalc-flexMob">
              <div class="sipCalc-img">
                <img src="assets/images/calculator/sip-calculator/How_to_calculate_SIP.png" alt="SIP Calculator" />
              </div>
              <div>
                <h2 class="sipTitle">What is a SIP Calculator?</h2>
                <p class="sipDesc">A SIP calculator, short for Systematic Investment Plan calculator, is an online financial tool that aids investors in estimating the potential returns on their SIP investments. SIP, a popular investment strategy, allows individuals to invest small, regular amounts at fixed intervals in mutual funds, ULIPs and similar financial instruments. The calculator takes into account various parameters such as the investment amount, duration, and expected returns to provide a projection of your wealth accumulation over time.
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="sipCalc">
          <div class="container">
            <h2 class="sipTitle">How can a SIP Return Calculator help you?</h2>
            <p class="sipDesc">Investors often want to know the potential returns on their SIP investments before committing to a particular plan. This is where a SIP return calculator comes into play. By using this calculator, you can::
            </p>
            <div class="sipReturn">
              <div class="sipReturnCard">
                <h3>Set Realistic Financial Goals:</h3>
                <p>A SIP return calculator helps you set achievable <a href="https://www.kotaklife.com/insurance-guide/wealth-creation/planning-financial-goals-and-objectives-of-financial-planning" class="inline-links">financial goals</a> by estimating the returns you can expect from your investments. Whether it's planning for your child's education, buying a house, or building a retirement corpus, having a clear financial target is crucial.
                </p>
              </div>
              <div class="sipReturnCard">
                <h3> Compare Investment Options:</h3>
                <p>With SIP return calculator, you can compare the potential returns of different SIP schemes like ULIPs or <a class="inline-links" href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-are-mutual-funds">mutual funds.</a> This allows you to make an informed choice and select the investment plan that aligns with your objectives and risk tolerance.
                </p>
              </div>
              <div class="sipReturnCard">
                <h3>Monitor Progress:</h3>
                <p>Once you start your SIP, you can periodically use the calculator to track your investment's performance. This helps you stay on course and make necessary adjustments to meet your goals.Take a step ahead for building your wealth!                   
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="sipCalc">
          <div class="container">
            <h2 class="sipTitle">How do SIP Calculators work?</h2>
            <p class="sipDesc">SIP calculators use a simple yet powerful formula to estimate returns. The formula takes into account the following parameters:
            </p>
            <div class="sipWork">
              <h3><span>Investment Amount:</span> The monthly or yearly amount you plan to invest.</h3>
              <h3><span>Investment Tenure:</span> The duration for which you intend to invest.</h3>
              <h3><span>Expected Rate of Return: </span> The anticipated annual return on your investment.</h3>
              <p class="sipDesc pt10">Using these inputs, the calculator calculates the future value of your investment, factoring in the power of compounding. The compounding effect is what makes SIP investments particularly lucrative over the long term
              </p>
              <br>
              <p class="sipDesc pt10">You can now calculate returns on SIP investment that you make in various funds using SIP calculator. Also, SIP investments should be made with 100% individual research or through financial advisors so you don’t invest in wrong funds or play your own losses. In such cases, if you calculate returns on SIP and then make one, it helps making informed, data-led decisions. </p>
            </div>
          </div>
        </section>

        <section id="sipCalc">
          <div class="container">
            <div class="sipCalc-grid">
              <div class="sipCalc-img">
                <img src="assets/images/calculator/sip-calculator/SIP_calculator_by_Kotak_Life.png" alt="SIP Working" />
              </div>
              <div>
                <h2 class="sipTitle">How to use Kotak Life’s SIP Calculator?</h2>
                <p class="sipDesc pt10">Using Kotak Life's SIP calculator is a straightforward process:</p>
                <p class="sipDesc pt10">Enter Your Details: Input the necessary information, including your monthly or yearly SIP investment amount, the investment tenure (in years), and your expected rate of return.
                </p>
                <p class="sipDesc pt10">Get Your Estimate: Once you've filled in the details, the calculator will provide you with an estimated future value of your investment. This projection can be a powerful motivator to stay committed to your investment plan.
                </p>
              </div>
            </div>
          </div>
        </section>

        <section id="sipCalc">
          <div class="container">
            <h2 class="sipTitle">Advantages of using Kotak Life SIP Calculator</h2>
            <p class="sipDesc">Kotak Life's SIP calculator offers several advantages:</p>
            <div class="sipCalc-grid">
              <div>
                <div class="sipHelp">
                  <h3><span>1.</span>Accuracy:</h3>
                  <p>The calculator employs a robust algorithm to provide precise estimates, helping you make well-informed investment decisions.
                  </p>
                </div>
                <div class="sipHelp">
                  <h3><span>2.</span>User-Friendly:</h3>
                  <p>The tool is designed to be user-friendly, making it accessible to both novice and experienced investors.
                  </p>
                </div>
                <div class="sipHelp">
                  <h3><span>3.</span>Speed and Convenience:</h3>
                  <p>You can get instant results, allowing you to quickly assess different investment scenarios.</p>
                </div>
                <div class="sipHelp">
                  <h3><span>4.</span>Goal-Based Planning:</h3>
                  <p>Kotak Life's SIP calculator can help you set specific financial goals and determine the SIP amount required to achieve them.
                  </p>
                </div>
                <div class="sipHelp">
                  <h3><span>5.</span>Realistic Expectations:</h3>
                  <p>By providing a realistic estimate of your future wealth, the calculator helps you set achievable financial goals and manage your expectations.
                  </p>
                </div>
              </div>
              <div class="sipCalc-img">
                <img src="assets/images/calculator/sip-calculator/Advantages_of_SIP_calculator.png" alt="Sip Working" />
              </div>
            </div>
          </div>
        </section>
<section id="otherCalc">
          <div class="midWrapper">
            <div class="otherCalcCard">
              <h3 class="otherClass">Check Out Our Other Calculators</h3>
              
              <p class="otherClassDesc">Financial well-being starts with a plan. You can check out more financial tools and calculators to get a head start in your financial journey.</p>
              <span  class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>
             
              <ul class="calculatorCardList ulipslick">
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
                <li class="secondCard">
                  <a href="https://www.kotaklife.com/financial-tools-calculators/rd-calculator">
                     <div class="menu-icon c9"></div>
                    RD <br>Calculator</a>
                </li>
                <li class="secondCard">
                  <a href="https://www.kotaklife.com/financial-tools-calculators/compound-interest-calculator">
                     <div class="menu-icon c3"></div>
                    Compound <br> Interest  Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/fd-calculator">
                   <div class="menu-icon c8"></div>
                    FD <br> Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/gratuity-calculator">
                   <div class="menu-icon c10"></div>
                    Gratuity <br> Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/ppf-calculator">
                   <div class="menu-icon c11"></div>
                    PPF <br> Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/dass-21-calculator">
                   <div class="menu-icon c12"></div>
                    DASS 21 <br> Calculator</a>
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
                    <h3> <a href="javascript:void(0);"> <span>1</span>What is the interest rate of SIP? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The interest rate on SIP investments can vary depending on the mutual fund or financial instrument you choose. It's essential to research and select an investment option that aligns with your financial goals and risk tolerance.
                    </p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>2</span>How much can I invest in a SIP?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The minimum and maximum SIP investment amounts can vary from one mutual fund or financial institution to another. Typically, SIPs allow you to start with a relatively low minimum investment amount, making it accessible to a wide range of investors.
                    </p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>3</span>What is the maximum tenure of a SIP?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The maximum tenure of a SIP can also vary depending on the mutual fund or financial institution. Some SIPs may have a specific maximum tenure, while others may allow you to continue investing for an extended period.
                    </p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>4</span>Can I modify my SIP amount?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, you can typically modify your SIP amount by contacting your mutual fund or financial institution. This flexibility is one of the advantages of SIP investments.
                    </p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>5</span>Can I renew a SIP?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>SIPs are typically set for a specific tenure, but you can start a new SIP or continue investing in the same SIP after the initial tenure expires. Renewing or starting a new SIP allows you to continue building wealth systematically.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- New Retirement also need to be added -->
        <section class="term-blog ulip-blogs" id="ulip_blog">
          <div class="midWrapper">
            <div class="term-blog ">
              <h2 class="mb-20 term-tags fnt-24">Savings & Tax Related Blogs </h2>
              <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div">
                
              </ul>
              <!--<div class="loadmores">
                <a href="javascript:;" class="link" id="load-more-articles"
                  onclick="dataLayer.push({&#39;event&#39;: &#39;event financial tools calculators load&#39;, &#39;category&#39;: &#39;new customers&#39;, &#39;action&#39;: &#39;financial tools calculators&#39;, &#39;label&#39;: &#39;load more&#39;});"
                  style="display: table;">Load More</a>
              </div>-->
              <div class="noRecord" style="display: none;"></div>
             
            </div>
          </div>
        </section>
        <!-- Blogs ending here -->
        <section class="terms new-terms pt-0" id="terms_conditions">
          <div class="midWrapper">
            <button type="button" name="disclaimer" class="collapsible terms-txt whitespace-initial">Read about Tax
            benefits &amp; Plan Disclaimer</button>
            <div class="content-col mb-0 tab-align li-disc terms-para">
              <h3 class="  terms-conditions">Disclaimers-</h3>
              <div class="disclamier-pera pt-0">
                <p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act,
                  1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax
                  laws. Customer is advised to take an independent view from tax consultant
                </p>
                <br>
                <p class="pl-0">The calculation is generated on the basis of information provided and does not constitute
                  an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the
                  advised to go through the sales brochure before conducting any sale. ARN No.: KLI/23-24/Comp/E-WEB/235.
                </p>
                <br>
                <p class="pl-0">The Linked Insurance Products do not offer any liquidity during the first five years of
                  the contract. The policyholder will not be able to surrender/withdraw the monies invested in Linked
                  Insurance Products completely or partially till the end of the fifth year
                </p>
                <br>
                <p class="pl-0">Linked Life Insurance products are different from the traditional insurance products and
                  are subject to the risk factors.
                </p>
                <br>
                <p class="pl-0">The premiums paid in Linked Life Insurance policies are subject to investment risks
                  associated with capital markets and the NAVs of the units may go up or down based on the performance of
                  fund and factors influencing the capital market and the insured is responsible for his/her decisions.
                  Please know the associated risks and the applicable charges (along with the possibility of increase in
                  charges), from your Insurance agent or the Intermediary or policy document of the insurer.
                </p>
                <br>
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
			<input name="pageNo" type="hidden" id="pageNo" value="0">
  <input name="url" type="hidden" id="url" value="<?=$_SERVER['REQUEST_URI']?>">

  <input name="sortType" type="hidden" id="sortType" value="recent">
  <input name="pageLimit" type="hidden" id="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>">
  <input name="searchArticle" type="hidden" id="searchArticle" value="">
  <input name="pageType" type="hidden" id="pageType" value="topic">
  <input name="topicSlug" type="hidden" id="topicSlug" value="savingstax">
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
	      <script async="" src="assets/js/global.js"></script>
  	 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script async="" src="assets/js/sip-calculator.js"></script>
       <script  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" language="javascript" ></script>
       <script>
       function readMoreFD() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("morecont");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
    moreText.classList.remove("active");
      
  } else {
    dots.style.display = "none";
    btnText.innerHTML = " Read less";
    moreText.style.display = "inline";
        moreText.classList.add("active");
  }
}
</script>
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
$('.ulipslick').slick({
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
/*btn  slick ^*/
/*slick counter gsp v*/
if ($(window).width() > 768) {
  var $statusgspnew11 = $('.pagingInfo-facslick');
  var $slickElementgspnew11 = $('.ulipslick');
  $slickElementgspnew11.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
      var i = (currentSlide ? currentSlide : 0) + 1;
      $statusgspnew11.html('<span class="finished_count">' + (i + 3) + '</span>' + '<span class="total_count">' + '/' + slick.slideCount + '</span>');
  });
}

if ($(window).width() < 768) {
  var $statusgspnew11 = $('.pagingInfo-facslick');
  var $slickElementgspnew11 = $('.ulipslick');
  $slickElementgspnew11.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
      var i = (currentSlide ? currentSlide : 0) + 1;
      $statusgspnew11.html('<span class="finished_count">' + (i + 0) + '</span>' + '<span class="total_count">' + '/' + slick.slideCount + '</span>');
  });
}

/*slick counter gsp ^*/
</script>
 <script>
      var ulip_rating = term_rating = savings_rating = '';
      function retrieveRating() {
        ulip_rating = localStorage.getItem('ulip_rating');
        term_rating = localStorage.getItem('term_rating');
        savings_rating = localStorage.getItem('savings_rating');
      
      }
      function setRating() {
        localStorage.setItem("ulip_rating", ulip_rating);
        localStorage.setItem("term_rating", term_rating);
        localStorage.setItem("savings_rating", savings_rating);
      }
      function clearOldRef() {
        var arr = [];
        for (var i = 0; i < localStorage.length; i++) {
          if (localStorage.key(i).indexOf('SAVED_TASKS') == -1) {
            arr.push(localStorage.key(i));
          }
        }
        retrieveRating();
      
        for (var i = 0; i < arr.length; i++) {
          localStorage.removeItem(arr[i]);
        }
        setRating();
        var cookies = document.cookie.split(";");
        for (var i = 0; i < cookies.length; i++) {
          var cookie = cookies[i];
          var eqPos = cookie.indexOf("=");
          var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
          document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
      }
      clearOldRef();
      var haptikInitSettings = {
        'primary-color': '#da251c',
        'secondary-color': '#f4f4f4',
        'widget-positioning': 'bottom-right',
        'font-sizes': { 'primary': 14, 'secondary': 18 },
        'typography': 'Lato',
        'header-text': { 'text': 'Kaya', 'status-text': true },
        'composer-placeholder': 'Type your message...',
        'header-icon': 'https://haptikappimg.haptikapi.com/uploads/c438367db350eb514589257c20384663.png?w=1991&h=1962',
        'business-id': 978,
        'client-id': '763005ee8f30a91f3ab9ab35d15411315c256e46',
        'base-url': 'https://kli.haptikapi.com',
        'session-timeout': 360000000,
        <!--'mode': 'fsm',-->
        'custom-button': true,
        'match-view-height': true,
        'ignore-storage': true,
        'chat-bubble-text-desktop': "I'm Online",
        'chat-bubble-text-mobile': "_NONE_",
      
        sdkEvents: event => {
          console.log('📣 from SDK: ', JSON.stringify(event));
        }
      };
      
  
    </script>
   