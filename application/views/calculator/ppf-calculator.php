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
      .calc-list {
      padding-left: 16px;
      }
      .calc-list li {
      font-size: 1.6rem;
      list-style: disc;
      }
    .bmiCard-flex {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: 20px;
  
}

.bmiCard-flex .formGroup input[type='number'] {
  width: 20rem !important;
  border-radius: 6px;
  padding-bottom: 5px;

}


.form-control::placeholder{font-family:Lato-Regular !important;font-size:14px ! important;font-weight:400 ! important; color:#a0a0a0 ! important;}
 

</style>
   
	   <link rel="stylesheet" href="assets/css/global.css">
	 
		
		<link rel="stylesheet" href="assets/css/retirement.css">
    <link rel="stylesheet" href="assets/css/fd-calculator.css">
		<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">
		<link rel="stylesheet" href="assets/css/bmi-calculator.css">
    <link rel="stylesheet" href="assets/css/ppf-calculator.css">
    <link rel="stylesheet" href="assets/css/ulip-calculator.css">


    <div class="interactionWrap investment">
      <div class="pageWrapper">
        <!-- New Content Update end from here -->
        <section id="investment_calculator" style="background-color: #FFF;">
          <div class="container">
            <ul class="breadcrumb-ulip">
              <li><a href="https://www.kotaklife.com/">Home&gt;</a></li>
              <li><a href="/financial-tools-calculators">Financial Tool Calculator &gt;</a></li>
              <li class="active"><a href="javascript:void(0);">PPF Calculator</a></li>
            </ul>
            <div class="headSection">
              <h1 class="section_heading">PPF Calculator</h1>
              <p class="fdDesc">Planning for your financial future involves making informed decisions about investments and savings. One such tool that many individuals explore is the Public Provident Fund (PPF). The PPF is a popular investment tool in India that offers attractive returns and tax benefits.  
                 <span id="dots">...</span><span id="more">To make the most of your PPF investment, it is crucial to understand how it works and how to maximize your returns. This is where a PPF calculator (public provident fund calculator) comes into play.</span>
                 <span style="color: #ED3237 ;cursor: pointer;font-weight: 600;" onclick="readMorePPF()" id="myBtn"> Read more</span>
              </p>
            </div>
            <div class="row cal-margin">
              <div class="col-lg-12 m-no-padding">
                <div class="ppfGrid">
                  <div class="ppfCard">
                    <div>
                      <div class="range-wrap">
                        <div class="goal-wrap">
                          <p class="goal-title"><span>Yearly Investment</span></p>
                          <div class="input-wrap w11rem"><span class="rupee">₹&nbsp;</span>
                            <input id="yearlyInvestment" name="yearly" type="number" min="1000" max="100000" value="10000" class="sipForm" oninput="updatePpfInputValue('yearlyInvestmentRange', 'yearlyInvestment')" onchange="updatePpfSliderValue('yearlyInvestmentRange')" />
                          </div>
                        </div>
                        <div class="slider-wrap">
                          <input class="form-range" type="range" id="yearlyInvestmentRange" min="1000" max="100000" step="1000" value="10000" oninput="updatePpfSliderValue('yearlyInvestmentRange')" onchange="updatePpfInputValue('yearlyInvestmentRange', 'yearlyInvestment')" />
                            <div class="invest-amt" style="margin-top: -15px;justify-content: space-between;">
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                            </div>
                        </div>
                        <div class="value-wrap">
                          <div class="min"><span class="rupee">₹&nbsp;</span><span class="amount">1000</span></div>
                          <div class="max"><span class="rupee">₹&nbsp;</span><span class="amount">1 lakh</span></div>
                        </div>
                      </div>

                      <div class="range-wrap">
                        <div class="goal-wrap">
                          <p class="goal-title">Time Period <span class="sublabel sublableMonthly">(Years)</span></p>
                          <div class="input-wrap year-wrap">
                            <input type="number" id="ppfTimeDuration" min="15" max="50" value="15" oninput="updatePpfInputValue('ppfTimeDurationRange', 'ppfTimeDuration')" onchange="updatePpfSliderValue('ppfTimeDurationRange')" /><span>Years</span>
                          </div>
                        </div>
                        <div class="slider-wrap">
                          <input type="range" class="form-range" id="ppfTimeDurationRange" min="15" max="50" step="1" value="15" oninput="updatePpfSliderValue('ppfTimeDurationRange')" onchange="updatePpfInputValue('ppfTimeDurationRange', 'ppfTimeDuration')" />
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

                      <div class="range-wrap">
                        <div class="goal-wrap">
                          <p class="goal-title">Interest Rate <span class="sublabel sublableMonthly">(P.A)</span></p>
                          <div class="input-wrap year-wrap">
                            <input type="number" id="ppfRate" value="7.10" style="width: 5rem;" disabled /><span>&nbsp; %</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ppfGraph">
                      <div class="chart-container" style="position: relative; height:200px; width:200px;margin: 0 auto;">
                        <canvas id="ppfChart"></canvas>
                      </div>
                    </div>
                  </div>

                  <div class="resultBox">
                    <div id="ppfMaturityAmount" class="investMent-section"></div>
                    <a target="_blank" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension?utm_source=kap_organic&utm_medium=website&utm_campaign=ppfcalculator" class="productCard-invest">Save Tax</a>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </section>

        <section id="whatIsPPF">
          <div class="midWrapper">
            <h2 class="whatIsPPF-title">What is a PPF Calculator? </h2>
            <p class="whatIsPPF-desc">A PPF calculator online is a financial tool designed to help individuals calculate their potential returns and plan their investments in the Public Provident Fund (PPF). It takes into account various factors such as the investment amount, duration of investment, and prevailing interest rates to provide an estimate of the maturity value of the investment.</p>
          </div>
        </section>

        <section id="whyUsePPFCalculator">
          <div class="midWrapper">
            <h2 class="whyUsePPFCalculator-title">Why Should You Use a PPF Calculator?</h2>
            <p class="whyUsePPFCalculator-desc">With the right tools at your disposal, you can make all the difference in achieving your goals and reducing any complexities of financial planning. One such indispensable tool for investors is the Public Provident Fund (PPF) calculator. Let us understand why you should use a PPF calculator:</p>
            <div class="whyUsePPFCalculator-sec">
              <div class="benefitsOfRetirement-img ppf1_arrow"></div>
              <div>
                <h3 class="whyUsePPFCalculator-subTitle">Accurate Estimations</h3>
                <p class="whyUsePPFCalculator-desc">One of the primary reasons to use a PPF calculator online is to obtain accurate estimations of the potential PPF return calculator on your investment. By putting in relevant details such as the investment amount, duration, and prevailing interest rates, it can calculate the future value of your investment with precision. This helps you understand the growth trajectory of your investment and plan accordingly.</p>
              </div>
            </div>
            <div class="whyUsePPFCalculator-sec">
              <div class="benefitsOfRetirement-img ppf2_arrow"></div>
              <div>
                <h3 class="whyUsePPFCalculator-subTitle">Financial Planning</h3>
                <p class="whyUsePPFCalculator-desc">A PPF calculator serves as a valuable tool for financial planning. It allows you to assess different investment scenarios and determine the most suitable strategy based on your financial goals and risk tolerance. Whether you are planning for retirement, education expenses, or any other long-term goal, a PPF calculator can help you create a roadmap for achieving your objectives.</p>
              </div>
            </div>
            <div class="whyUsePPFCalculator-sec">
              <div class="benefitsOfRetirement-img ppf3_arrow"></div>
              <div>
                <h3 class="whyUsePPFCalculator-subTitle">Comparative Analysis</h3>
                <p class="whyUsePPFCalculator-desc">Using a PPF calculator enables you to compare the potential returns from investing in PPF with other investment options. By evaluating different scenarios and considering factors such as risk, liquidity, and tax implications, you can make informed decisions about where to allocate your funds for maximum growth and stability.</p>
              </div>
            </div>
            <div class="whyUsePPFCalculator-sec">
              <div class="benefitsOfRetirement-img ppf4_arrow"></div>
              <div>
                <h3 class="whyUsePPFCalculator-subTitle">Time-saving</h3>
                <p class="whyUsePPFCalculator-desc">Calculating the potential returns manually can be time-consuming and prone to errors. A PPF calculator automates the process, allowing you to obtain accurate results quickly and efficiently. This saves you time and effort, enabling you to focus on other aspects of your financial planning.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="formulaForPPF">
          <div class="midWrapper">
            <h2 class="formulaForPPF-title">What is the Formula Used for Calculating PPF? </h2>
            <p class="formulaForPPF-desc">PPF provides individuals with a safe and tax-efficient way to build a retirement corpus while earning a fixed rate of interest. Understanding the formula used for calculating PPF can help investors better comprehend how their investments grow over time. Let's explore the formula and how it works:</p>
            <div class="formulaForPPF-formula"><code>F = P [({(1+i) ^n}-1)/i]</code></div>
            <ul class="formulaForPPF-list">
              <li>i- Rate of interest</li>
              <li>F- Maturity of PPF</li>
              <li>2n- Total number of years </li>
              <li>P- Annual instalments</li>
            </ul>
          </div>
        </section>

        <section id="advantageofPPF">
          <div class="midWrapper">
            <h2 class="advantageofPPF-title">What are the Advantages of Using PPF Calculator?</h2>
            <p class="advantageofPPF-desc">Using a PPF calculator online, comes with a number of benefits. Whether you are saving for retirement, or aiming to build a robust investment portfolio, having the right PPF calculator can make all the difference. Here are some of its benefits:</p>
            <div class="advantageofPPF-flex">
              <div class="advantageofPPF-sec">
              <div class="benefitsOfRetirement-img one_arrow"></div>
                <div>
                  <h3 class="advantageofPPF-subTitle">Risk Management</h3>
                  <p class="advantageofPPF-desc">A PPF calculator enables you to assess the impact of various factors, such as changes in interest rates or investment amounts, on the future value of your investment. This helps you identify potential risks and take proactive measures to mitigate them, ensuring that your investment remains on track to meet your financial goals.</p>
                </div>
              </div>
              <div class="advantageofPPF-sec">
              <div class="benefitsOfRetirement-img two_arrow"></div>
                <div>
                  <h3 class="advantageofPPF-subTitle">Risk Management</h3>
                  <p class="advantageofPPF-desc">A PPF calculator enables you to assess the impact of various factors, such as changes in interest rates or investment amounts, on the future value of your investment. This helps you identify potential risks and take proactive measures to mitigate them, ensuring that your investment remains on track to meet your financial goals.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="whatIsPPFund">
          <div class="midWrapper">
            <h2 class="whatIsPPFund-title">What is a Public Provident Fund? </h2>
            <p class="whatIsPPFund-desc">The Public Provident Fund (PPF) is a government-backed savings scheme aimed at promoting long-term savings and retirement planning among Indian citizens. It operates under the authority of the Ministry of Finance, Government of India, and is governed by the Public Provident Fund Act of 1968. The scheme is administered by the Department of Posts and designated branches of authorized banks across the country.</p>
            <br>
            <p class="whatIsPPFund-desc">It is one of the most popular and trusted investment schemes in India, offering individuals a secure and tax-efficient method to save for the long term. The PPF scheme aims to encourage savings and provide financial security to individuals during their retirement years.</p>
          </div>
        </section>

        <section id="benefitsOfInvesting">
          <div class="midWrapper">
            <h2 class="benefitsOfInvesting-title">What are the Benefits of Investing in PPF Scheme? </h2>
            <p class="benefitsOfInvesting-desc">When it comes to financial planning, individuals are often on the lookout for secure and rewarding investment avenues that can pave the way toward a prosperous future. Among the myriad options available, the Public Provident Fund (PPF) scheme offers stability and growth. </p>
            <div class="benefitsOfInvesting-sec">
            <div class="benefitsOfRetirement-img tick_arrow"></div>
              <div>
                <h3 class="benefitsOfInvesting-subTitle">Security</h3>
                <p class="benefitsOfInvesting-desc">One of the primary benefits of investing in the PPF scheme is the high level of security it offers. Backed by the Government of India, the PPF scheme provides a safe and reliable investment avenue for individuals looking to safeguard their hard-earned money. The government's guarantee ensures that investors' funds are protected from market volatility and economic uncertainties, providing peace of mind to investors.</p>
              </div>
            </div>
            <div class="benefitsOfInvesting-sec">
            <div class="benefitsOfRetirement-img tick_arrow"></div>
              <div>
                <h3 class="benefitsOfInvesting-subTitle">Attractive Returns</h3>
                <p class="benefitsOfInvesting-desc">The PPF scheme offers competitive interest rates that are compounded annually, ensuring steady growth of investments over time. As of 2022, the interest rate for PPF accounts is typically higher than that offered by traditional savings accounts, making it an attractive option for individuals seeking to maximize their returns on investment. Moreover, the interest earned on PPF accounts is tax-free, further enhancing the overall returns for investors.</p>
              </div>
            </div>
            <div class="benefitsOfInvesting-sec">
            <div class="benefitsOfRetirement-img tick_arrow"></div>
              <div>
                <h3 class="benefitsOfInvesting-subTitle">Tax Benefits</h3>
                <p class="benefitsOfInvesting-desc">Just like <a href="https://www.kotaklife.com/insurance-plans" class="inline-links"> insurance plans</a>, Investing in the PPF scheme offers significant tax benefits to investors. Contributions made to PPF accounts are eligible for tax deductions under Section 80C of the Income Tax Act up to a maximum limit of ₹1.5 lakh per financial year. Additionally, the interest earned on the PPF accounts calculator and the maturity proceeds are entirely tax-free, making it a tax-efficient investment option for individuals looking to minimize their tax liability and maximize their savings.</p>
              </div>
            </div>
            <div class="benefitsOfInvesting-sec">
            <div class="benefitsOfRetirement-img tick_arrow"></div>
              <div>
                <h3 class="benefitsOfInvesting-subTitle">Long-term Savings</h3>
                <p class="benefitsOfInvesting-desc">The PPF scheme is well-suited for long-term savings goals such as retirement planning, education expenses, or purchasing a home. With a fixed tenure of 15 years, the PPF scheme encourages disciplined and systematic savings habits among investors, allowing them to accumulate a substantial corpus over time to meet their future financial needs and aspirations.</p>
              </div>
            </div>
            <div class="benefitsOfInvesting-sec">
            <div class="benefitsOfRetirement-img tick_arrow"></div>
              <div>
                <h3 class="benefitsOfInvesting-subTitle">Flexibility</h3>
                <p class="benefitsOfInvesting-desc">The PPF scheme offers investors flexibility in terms of investment amount and frequency. Investors can start a PPF account calculator with a minimum contribution of ₹500 per year and can invest up to a maximum of ₹1.5 lakh per financial year. Moreover, investors have the freedom to choose their investment frequency, whether it is monthly, quarterly, or annually, based on their convenience and financial goals.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="howToUsePPF">
          <div class="midWrapper">
            <h2 class="howToUsePPF-title">How to Use a PPF Calculator?</h2>
            <p class="howToUsePPF-desc">To accurately calculate your PPF investments using the PPF calculator, follow these simple steps:</p>
            <div class="howToUsePPF-sec">
              <div class="howToUsePPF-card">
                <h3 class="howToUsePPF-subTitle">Choose Your Investment Frequency</h3>
                <p class="howToUsePPF-desc f15">The frequency of your investments impacts your maturity value. Opt for monthly investments, especially if you receive a monthly salary, for easier management and precise results.</p>
              </div>
              <div class="howToUsePPF-card">
                <h3 class="howToUsePPF-subTitle">Input Your monthly PPF investment</h3>
                <p class="howToUsePPF-desc f15">This is the amount you intend to invest in your PPF account. You can specify a monthly, quarterly, semi-annual, or annual contribution. Ensure your investment does not exceed Rs 12,500 per month or Rs 1.5 lakh annually.</p>
              </div>
              <div class="howToUsePPF-card">
                <h3 class="howToUsePPF-subTitle">Determine your investment duration</h3>
                <p class="howToUsePPF-desc f15">This refers to the period during which you plan to maintain your PPF investment. The minimum duration is 15 years, with the option to extend it in five-year increments thereafter. The calculator assumes consistent investment throughout the maturity period.</p>
              </div>
              <div class="howToUsePPF-card">
                <h3 class="howToUsePPF-subTitle">Review the future value</h3>
                <p class="howToUsePPF-desc f15">After entering the necessary details, the calculator will automatically display the projected maturity amount.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="ppfExample">
          <div class="midWrapper">
            <h2 class="ppfExample-title">PPF Calculator Examples</h2>
            <p class="ppfExample-desc">To grasp the benefits of compounding in PPF calculations, let's examine the table below. It outlines the initial investment, accrued PPF interest, and total maturity value for tenures of 15, 20, and 30 years.</p>
            <div class="ppfExample-table">
              <table>
                <tr>
                  <th>Investment Period</th>
                  <th>Total PPF Investment</th>
                  <th>Total Interest Earned</th>
                  <th>Maturity Value</th>
                </tr>
                <tbody>
                  <tr>
                    <td>15 years</td>
                    <td>₹1.5 lakh</td>
                    <td>₹1.4 lakh</td>
                    <td>₹2.9 lakh</td>
                  </tr>
                  <tr>
                    <td>20 years</td>	
                    <td>₹2 lakh</td>	
                    <td>₹2.88 lakh</td>	
                    <td>₹4.88 lakh</td>
                  </tr>
                  <tr>
                    <td>30 years</td>
                    <td>₹3 lakh</td>
                    <td>₹9 lakh</td>
                    <td>₹12 lakh</td>
                  </tr>
              </table>
            </div>
            <p class="ppfExample-desc">The above illustration demonstrates the compounding effect in PPF investments. By extending your investment period from 15 to 30 years and increasing your total investment by ₹1.5 lakh, your maturity amount grows significantly from ₹2.9 lakh to ₹12 lakhs.</p>
          </div>
        </section>

        <section id="ppfInterestRates">
          <div class="midWrapper">
            <h2 class="ppfInterestRates-title">PPF Interest Rates FY 2023-24</h2>
            <p class="ppfInterestRates-desc">The current PPF account interest rate remains steady at 7.10% per annum for the current quarter of 2023-24, as of April 2024. Interest on the public provident fund is computed monthly based on the lowest balance in the account between the closing of the fifth day and the last day of each month.</p>
            <br>
            <p class="ppfInterestRates-desc">While interest accrues monthly, it is credited to the investor's account annually. Ideally, investors should deposit a fixed sum before the 5th of each month to earn interest for the entire month. This approach ensures that investors maximize their returns on their investments.</p>
          </div>
        </section>

        <section id="alternativeOPtions">
          <div class="midWrapper">
            <h2 class="alternativeOPtions-title">Alternative Investment Options</h2>
            <p class="alternativeOPtions-desc">While the PPF remains a popular choice for long-term savings and investment, diversifying your portfolio with alternative options can enhance your financial strategy and potentially yield higher returns. </p>
            <div class="alternativeOPtions-sec">
            <div class="benefitsOfRetirement-img alt_arrow"></div>
              <div>
                <h3 class="alternativeOPtions-subTitle">Equity Mutual Funds</h3>
                <p class="alternativeOPtions-desc">Equity mutual funds invest primarily in stocks, offering investors the opportunity to participate in the growth potential of the stock market. These funds are managed by professional fund managers who allocate investments across a diversified portfolio of stocks, aiming to maximize returns while managing risks. Equity mutual funds are suitable for investors with a higher risk appetite and a long-term investment horizon.</p>
              </div>
            </div>
            <div class="alternativeOPtions-sec">
            <div class="benefitsOfRetirement-img alt_arrow"></div>
              <div>
                <h3 class="alternativeOPtions-subTitle">Debt Mutual Funds</h3>
                <p class="alternativeOPtions-desc">Debt mutual funds invest in fixed-income securities such as government bonds, corporate bonds, and other debt instruments. These funds offer relatively stable returns and lower volatility compared to equity investments, making them ideal for conservative investors seeking steady income generation. Debt mutual funds are suitable for short to medium-term investment goals and offer liquidity and flexibility.</p>
              </div>
            </div>
            <div class="alternativeOPtions-sec">
            <div class="benefitsOfRetirement-img alt_arrow"></div>
              <div>
                <h3 class="alternativeOPtions-subTitle">Gold</h3>
                <p class="alternativeOPtions-desc">Gold has long been considered a safe haven asset and a hedge against inflation. Investors can invest in gold through various avenues, such as physical gold, gold ETFs (Exchange-Traded Funds), gold mutual funds, and sovereign gold bonds. Gold investments offer diversification, stability during economic uncertainties, and protection against currency depreciation, making them a valuable addition to a well-rounded investment portfolio.</p>
              </div>
            </div>
            <div class="alternativeOPtions-sec">
            <div class="benefitsOfRetirement-img alt_arrow"></div>
              <div>
                <h3 class="alternativeOPtions-subTitle">Direct Equity Investments</h3>
                <p class="alternativeOPtions-desc">Direct equity investments involve purchasing shares of individual companies listed on the stock exchange. While direct equity investments carry higher risks compared to mutual funds, they also offer the potential for higher returns. Investors can conduct thorough research and analysis to identify undervalued stocks with strong growth potential and invest accordingly. Direct equity investments require active monitoring and management but can be rewarding for knowledgeable investors with a long-term perspective.</p>
              </div>
            </div>
            <div class="alternativeOPtions-sec">
            <div class="benefitsOfRetirement-img alt_arrow"></div>
              <div>
                <h3 class="alternativeOPtions-subTitle">Fixed Deposits (FDs) and Bonds</h3>
                <p class="alternativeOPtions-desc">Fixed Deposits (FDs) and bonds are traditional investment options that offer fixed returns over a predetermined period. Banks and financial institutions offer FDs, while bonds are debt instruments issued by governments or corporations. These investments provide stability, guaranteed returns, and regular income, making them suitable for conservative investors looking for capital preservation and steady income generation.</p>
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
                    <img src="<?=base_url()?>assets/images/calculator/rd-calculator/Investment-Calculator.svg" />
                    ULIP <br> Calculator</a>
                </li>
                
               <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/hra-calculator">
                 <div class="menu-icon c7"></div>
                    HRA <br> Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/sip-calculator">
                   <div class="menu-icon c5"></div>
                    SIP <br> Calculator</a>
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
                    Gratuity<br> Calculator</a>
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
              <h2 class="accordTitle">People also ask</h2>
              <div class="accordList">
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>1</span>Can I transfer my PPF account to another branch or office? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, PPF account holders have the option to transfer their accounts from one branch or office to another within the same bank or between different banks. The process involves submitting a transfer application along with the necessary documents to the desired branch or office where you wish to transfer your PPF account.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>2</span>How much interest rate can I get on my PPF account? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The Government of India determines the interest rate on PPF accounts and is subject to periodic revisions. As of 2024, the interest rate for PPF accounts is typically compounded annually and may vary from year to year.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>3</span>When is my investment going to mature? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The maturity period for a PPF account is 15 years from the end of the financial year in which the account was opened. After the completion of the maturity period, the account holder has the option to withdraw the entire maturity amount or extend the account in blocks of five years.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>4</span>How accurate are PPF calculators? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>PPF calculators provide accurate estimations of the potential returns on your investment based on the inputs provided by the user. However, the actual returns may vary depending on factors such as changes in interest rates and investment performance.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>5</span>What factors does a PPF calculator consider? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>PPF calculators consider factors such as the investment amount, duration of investment, prevailing interest rates, and the compounding frequency to calculate the future value of the investment.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>6</span>What are some examples of how to use a PPF calculator? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>Examples of how to use a PPF calculator include estimating the maturity value of your investment, comparing different investment scenarios, and determining the impact of varying investment amounts and durations.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>7</span>Where can I find a PPF calculator? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>PPF calculators are available online on various financial websites, banking portals, and mobile applications. Many banks and financial institutions also provide PPF calculators on their official websites.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>8</span>How often should I use a PPF calculator? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>You can use a PPF calculator as often as needed to plan and track your investments. It is advisable to use the calculator whenever you make changes to your investment strategy or want to assess the potential returns on your investment.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>9</span>What is the PPF interest rate in 2024? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The PPF interest rate for the year 2024 is subject to announcement by the Government of India and may vary from the previous years. It is typically announced before the start of the financial year.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>10</span>How is PPF Interest calculated? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>PPF interest is calculated on the minimum balance in the account between the 5th and the last day of the month. The interest is compounded annually and credited to the account at the end of each financial year.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>11</span>Which is better, PPF or FD? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The choice between PPF and FD depends on factors such as investment goals, risk tolerance, and liquidity requirements. PPF offers tax benefits and higher interest rates compared to FDs but has a longer lock-in period.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>12</span>Can I make partial withdrawals from PPF before 5 years? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>Partial withdrawals from PPF accounts are allowed after the completion of five financial years from the end of the year in which the account was opened, subject to certain conditions and limits.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>13</span>How much do I get after 15 years in PPF?</a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The maturity value of a PPF account after 15 years depends on factors such as the investment amount, prevailing interest rates, and the compounding frequency. You can use a PPF calculator to estimate the maturity value of your investment.s</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>14</span>What is PPF, and how does it work? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>PPF stands for Public Provident Fund, a government-backed savings scheme aimed at promoting long-term savings and retirement planning among Indian citizens. It works by allowing individuals to invest a fixed sum of money for a tenure of 15 years, with attractive interest rates and tax benefits.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>15</span>What are the tax benefits of PPF? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>PPF offers tax benefits under Section 80C of the Income Tax Act, where contributions made to PPF accounts are eligible for tax deductions up to a maximum limit. Additionally, the interest earned and the maturity proceeds are tax-free.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>16</span>How much to invest in PPF? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>Investors can invest a minimum amount of ₹500 per year and a maximum of ₹1.5 lakh per financial year in a PPF account. The investment amount can be made in a lump sum or in installments throughout the year.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>17</span>Does PPF compound interest annually? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, PPF accounts for compound interest annually, meaning that the interest earned on the investment is added to the principal amount at the end of each year, resulting in higher returns over time.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>18</span>What is the PPF Lock-in Period? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The lock-in period for a PPF account is 15 years from the end of the financial year in which the account was opened. During this period, withdrawals from the account are restricted, and premature closure is not allowed.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>19</span>Is the PPF account tax-free? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, PPF accounts offer tax benefits where contributions, interest earned, and maturity proceeds are exempt from income tax, making it a tax-efficient investment option.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>20</span>What is the minimum PPF Lock-in Period?</a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The minimum lock-in period for a PPF account is 15 years from the end of the financial year in which the account was opened. Premature withdrawal or closure is not allowed before the completion of the lock-in period.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>21</span>Can I open more than one PPF account?</a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>No, an individual is allowed to open only one PPF account in their name. Opening multiple PPF accounts is not permitted under the rules governing the scheme.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>22</span>Can I withdraw the full PPF amount after 15 years? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, after the completion of the lock-in period of 15 years, the account holder has the option to withdraw the entire maturity amount or extend the account for a further period of five years.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>23</span>Can I terminate the PPF account before maturity? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>Premature closure of a PPF account is not permitted before the completion of the lock-in period of 15 years, except in specific cases such as the death of the account holder.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>24</span>What is a PPF Account? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>A PPF account is a government-backed savings scheme aimed at promoting long-term savings and retirement planning among Indian citizens. It offers attractive interest rates, tax benefits, and a fixed tenure of 15 years.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>25</span>How much will I get after 15 years in PPF?</a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The maturity value of a PPF account after 15 years depends on factors such as the investment amount, prevailing interest rates, and the compounding frequency. You can use a PPF calculator to estimate the maturity value of your investment.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>26</span>How much interest do we get from PPF? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The interest earned on a PPF account depends on factors such as the investment amount, prevailing interest rates, and the compounding frequency. The interest is calculated annually and added to the principal amount.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>27</span>Which is better - PPF or FD? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The choice between PPF and FD depends on factors such as investment goals, risk tolerance, and liquidity requirements. PPF offers tax benefits and higher interest rates compared to FDs but has a longer lock-in period.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>28</span>What is the minimum lock-in period for PPF? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The minimum lock-in period for a PPF account is 15 years from the end of the financial year in which the account was opened. Premature withdrawal or closure is not allowed before the completion of the lock-in period.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>29</span>Is PPF investment tax-free? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, PPF accounts offer tax benefits where contributions, interest earned, and maturity proceeds are exempt from income tax, making it a tax-efficient investment option.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>30</span>What is the minimum tenure and investment amount to open a PPF account? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The minimum tenure of a PPF account is 15 years, and the minimum investment amount to open an account is ₹500 per year. The investment amount can be made in a lump sum or in installments throughout the year.</p>
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
                <img src="./BMI_Calculator_files/loader.gif" alt="Kotak Loader">
              </div>
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
                <!-- <p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant</p>
                <br>
                <p class="pl-0">The calculation is generated on the basis of information provided and does not constitute
                  an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the
                  advised to go through the sales brochure before conducting any sale. Ref No : KLI/22-23/E-WEB/337
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
                <br> -->
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
                <br>
                <br>
                <p  class="pl-0">For Educational purpose only.</p>
                <p class="pl-0 mt-10">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by
                  Kotak Mahindra Life Insurance Company Limited under license
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <input type="hidden" id="pageNo" value="0">
    <input type="hidden" id="sortType" value="recent">
    <input type="hidden" id="pageLimit" value="4">
    <input type="hidden" id="searchArticle" value="">
    <input type="hidden" id="pageType" value="topic">
    <input type="hidden" id="topicSlug" value="wealth-creation">
    <input type="hidden" id="url" value="<?=$_SERVER['REQUEST_URI']?>">
  	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script async="" src="assets/js/bmi-calculator.js"></script>
    <script async="" src="assets/js/ppf-calculator.js"></script>
    <script  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" language="javascript" ></script>
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
const calculateBtn = document.getElementById("calculate");
const weightInput = document.getElementById("weight");
const feetInput = document.getElementById("feet");
const inchesInput = document.getElementById("inches");
const weightErrorMessage = document.getElementById("weightErrorMessage");
const feetErrorMessage = document.getElementById("feetErrorMessage");
const inchesErrorMessage = document.getElementById("inchesErrorMessage");


calculateBtn.addEventListener("click", calculateBMI);

// Add onkeypress event listeners
weightInput.addEventListener("keypress", validateWeight);
feetInput.addEventListener("keypress", validateFeet);
inchesInput.addEventListener("keypress", validateInches);

function calculateBMI() {
  const imcBar = document.getElementById("IMCbar");

  // Reset border colors
  weightInput.style.borderColor = "";
  weightErrorMessage.style.color = "transparent";
  feetInput.style.borderColor = "";
  feetErrorMessage.style.color = "transparent";
  inchesInput.style.borderColor = "";
  inchesErrorMessage.style.color = "transparent";

  // Validate that the weight, feet, and inches fields are not empty
  const weight = parseFloat(weightInput.value);
  const feet = parseFloat(feetInput.value);
  const inches = parseFloat(inchesInput.value);

  if (isNaN(weight) || isNaN(feet) || isNaN(inches) || weight < 10 || weight > 200) {
    // Set border color and error message for invalid weight
    if (isNaN(weight) || weight < 10 || weight > 200) {
      weightInput.style.borderColor = "red";
      weightErrorMessage.style.color = "red";
      weightErrorMessage.textContent = "Weight must be between 10 and 200";
    }
    if (isNaN(feet) || feet < 4 || feet > 8) {
      feetInput.style.borderColor = "red";
      feetErrorMessage.style.color = "red";
      feetErrorMessage.textContent = "Height(feet) must be between 0 and 10";
    }
    if (isNaN(inches) || inches < 0 || inches > 12) {
      inchesInput.style.borderColor = "red";
      inchesErrorMessage.style.color = "red";
      inchesErrorMessage.textContent = "Height(Inch) must be between 0 and 12";
    }

    return;
  }

  // Remove border color when input is filled
  weightInput.style.borderColor = "";
  weightErrorMessage.style.color = "transparent";
  feetInput.style.borderColor = "";
  feetErrorMessage.style.color = "transparent";
  inchesInput.style.borderColor = "";
  inchesErrorMessage.style.color = "transparent";

  let height = feet * 0.3048 + inches * 0.0254; // Convert to meters

  const bmi = (weight / (height * height)).toFixed(1);

  let category = "";
  if (bmi < 18.5) {
    category = "Underweight";
    $("#category").css("color", "rgb(255, 255, 0)");
  } else if (bmi < 24.9) {
    category = "Normal";
    $("#category").css("color", "rgb(0, 128, 0)");
  } else if (bmi < 29.9) {
    category = "Overweight";
    $("#category").css("color", "rgb(255, 0, 0)");
  } else {
    category = "Obese";
    $("#category").css("color", "rgb(255, 0, 0)");
  }

  if (bmi <= 15) {
    imcBar.style.left = "0%";
  } else if (bmi >= 50) {
    imcBar.style.left = "95%";
  } else {
    imcBar.style.left = ((bmi - 5) * 100) / 35 + "%"; // originally it was 15 and in style it was width
  }
  document.getElementById("category").textContent = category;
  document.getElementById("bmi").textContent = bmi;
}

function validateWeight(event) {
  const charCode = event.which || event.keyCode;
  const inputValue = parseFloat(weightInput.value + String.fromCharCode(charCode));

  if ((charCode < 48 || charCode > 57 || inputValue > 200) && charCode !== 46) {
    event.preventDefault();

    // Set border color and error message for invalid weight
    weightInput.style.borderColor = "red";
    weightErrorMessage.style.color = "red";
    weightErrorMessage.textContent = "Weight must be between 10 and 200";
  } else {
    weightInput.style.borderColor = "";
    weightErrorMessage.style.color = "transparent";
  }
}

function validateFeet(event) {
  const charCode = event.which || event.keyCode;
  const inputValue = parseFloat(feetInput.value + String.fromCharCode(charCode));

  if ((charCode < 48 || charCode > 57 || inputValue < 2 || inputValue > 8 || inputValue % 1 !== 0) && charCode !== 46) {
    event.preventDefault();

    // Set border color and error message for invalid weight
    feetInput.style.borderColor = "red";
    feetErrorMessage.style.color = "red";
    feetErrorMessage.textContent = "Height(feet) must be between 2 and 8";
  } else {
    feetInput.style.borderColor = "";
    feetErrorMessage.style.color = "transparent";
  }
}

function validateInches(event) {
  const charCode = event.which || event.keyCode;
  const inputValue = parseFloat(inchesInput.value + String.fromCharCode(charCode));

  if ((charCode < 48 || charCode > 57 || inputValue < 0 || inputValue > 13) && charCode !== 46) {
    event.preventDefault();

    // Set border color and error message for invalid weight
    inchesInput.style.borderColor = "red";
    inchesErrorMessage.style.color = "red";
    inchesErrorMessage.textContent = "Weight must be between 10 and 200";
  } else {
    inchesInput.style.borderColor = "";
    inchesErrorMessage.style.color = "transparent";
  }
}
    
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
