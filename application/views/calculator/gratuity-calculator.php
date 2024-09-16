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

 

   
	   <link rel="stylesheet" href="assets/css/global.css">
	 
		
		<link rel="stylesheet" href="assets/css/retirement.css">
    
		<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">
		
    <link rel="stylesheet" href="assets/css/gratuity-calculator.css">

     <div class="interactionWrap investment">
      <div class="pageWrapper">
        <!-- New Content Update end from here -->
        <section id="investment_calculator" style="background-color: #FFF;">
          <div class="container">
            <ul class="breadcrumb-ulip">
              <li><a href="https://www.kotaklife.com/">Home&gt;</a></li>
              <li><a href="/financial-tools-calculators">Financial Tool Calculator &gt;</a></li>
              <li class="active"><a href="javascript:void(0);">Gratuity Calculator</a></li>
            </ul>
            <div class="headSection">
              <h1 class="section_heading">Gratuity Calculator</h1>
              <p class="gratuityDesc">If you are employed in a private company that offers EPF benefits, you are eligible to receive a gratuity after 5 years. In case of an accident or illness, you might be eligible for gratuity even before 5 years.  
                 <span id="dots">...</span><span id="more"><a href="https://www.kotaklife.com/" class="inline-links">Kotak Life Insurance</a> offers an online gratuity calculator to help you figure out how much your company owes you. The gratuity calculator is an essential tool for employees to estimate their potential gratuity payout and plan for their future. </span>
                 <span style="color: #ED3237 ;cursor: pointer;font-weight: 600;" onclick="readMoreFD()" id="myBtn"> Read more</span>
              </p>
            </div>
            <div class="row cal-margin">
              <div class="col-lg-12 m-no-padding">
                <div class="gratuityGrid">
                  <div class="gratuityCard">
                    <div>
                      <div class="range-wrap">
                        <div class="goal-wrap">
                          <p class="goal-title"><span>Monthly Salary (Basic + DA)</span></p>
                          <div class="input-wrap w11rem"><span class="rupee">₹&nbsp;</span>
                            <input class="sipForm" type="number" id="monthlySalary" min="10000" max="1000000" value="50000">
                          </div>
                        </div>
                        <div class="slider-wrap">
                          <input class="form-range" type="range" id="monthlySalaryRange" min="10000" max="1000000" value="50000" step="1000">
                            <div class="invest-amt" style="margin-top: -15px;justify-content: space-between;">
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                            </div>
                        </div>
                        <div class="value-wrap">
                          <div class="min"><span class="rupee">₹&nbsp;</span><span class="amount">10 K</span></div>
                          <div class="max"><span class="rupee">₹&nbsp;</span><span class="amount">10 lakh</span></div>
                        </div>
                      </div>

                      <div class="range-wrap">
                        <div class="goal-wrap">
                          <p class="goal-title">No. of Years Of Service</p>
                          <div class="input-wrap year-wrap">
                            <input type="number" id="yearsOfService" min="5" max="30" value="6" style="width: 3rem;">
                          </div>
                        </div>
                        <div class="slider-wrap">
                          <input type="range" class="form-range" id="yearsOfServiceRange" min="5" max="30" value="6" step="1">
                            <div class="invest-amt" style="margin-top: -15px;justify-content: space-between;">
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                              <div class="amt-slot fwbold">|</div>
                            </div>
                        </div>
                        <div class="value-wrap">
                          <div class="min"><span class="rupee">&nbsp;</span><span class="amount">5 Year</span></div>
                          <div class="max"><span class="rupee">&nbsp;</span><span class="amount">30 Year</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="resultBox">
                    <label for="gratuityAmount">Gratuity Amount</label>
                    <input class="outputBox" type="text" id="gratuityAmount" readonly>
                    <!-- <a target="_blank" href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=website&utm_campaign=gratuitycalculator" class="gratuityCard-invest">Invest Now</a> -->
                  </div>
              </div>
              </div>
            </div>
          </div>
        </section>

        <section id="whatIsGratuity">
          <div class="midWrapper">
            <h2 class="whatIsGratuity-title">What is a Gratuity Calculator? </h2>
            <p class="whatIsGratuity-desc">A Gratuity calculator is a tool used to determine the amount of gratuity payable to an employee based on various factors such as the length of service and the last drawn salary. The calculation of gratuity for private employees is important for future planning of retirement and keeps their finances on track even after they are not working. You can use this calculator in your retirement calculator to measure the amount of gratuity.</p>

          </div>
        </section>

        <section id="formulaOfGratuity">
          <div class="midWrapper">
            <div class="formulaOfGratuity-grid">
              <div>
                <h2 class="formulaOfGratuity-title">What is the Formula for Gratuity Calculation? </h2>
                <p class="formulaOfGratuity-desc">It is important to calculate your gratuity amount so that you can get a fair estimate of the amount expected. The formula for calculating gratuity varies depending on whether the employee is covered under the Gratuity Act or not.</p>
                <p class="formulaOfGratuity-desc">Employees covered under the Act</p>
                <div class="formulaOfGratuity-formula">Gratuity = (n x b x 15/26)</div>
                <ul class="formulaOfGratuity-list">
                  <li>n= tenure of service completed in the company</li>
                  <li>b= last drawn basic salary + dearness allowance</li>
                  <li>26 = the projected number of working days in a month, and </li>
                </ul>
                <p class="formulaOfGratuity-desc">The gratuity calculation is accounted for at the rate of 15 days' wages.</p>
                <p class="formulaOfGratuity-desc">For employers not covered under the Gratuity Act</p>
              </div>
              <div class="formulaOfGratuity-img">
                <img src="./assets/images/calculator/gratuity-images/GratuityCalculator.svg" alt="Gratuity Calculator" />
              </div>
            </div>
            <div class="formulaOfGratuity-formula gratuity">Gratuity = (Last drawn salary × 1/2) × Number of years of completed service</div>
            <p class="formulaOfGratuity-desc">In both cases, "last drawn salary" refers to the average of the basic salary, dearness allowance, and commission received (if any) during the last ten months of employment.</p>
            <p class="formulaOfGratuity-desc">It is important to note that the maximum amount of gratuity payable is currently capped at ₹20 lakhs in India.</p>
          </div>
        </section>

        <section id="whatisGratuity">
          <div class="midWrapper">
            <h2 class="whatisGratuity-title">What is Gratuity?</h2>
            <p class="whatisGratuity-desc">A gratuity is a form of monetary benefit provided by an employer to an employee in recognition of the employee's long and meritorious service. It is typically paid upon retirement, resignation, or death and is governed by specific laws and regulations in many countries, including India, where the Payment of Gratuity Act 1972 governs it. </p>
          </div>
        </section>

        <section id="eligiblityCriteria">
          <div class="midWrapper">
            <h2 class="eligiblityCriteria-title">What are the Eligibility Criteria for Payment of Gratuity? </h2>
            <p class="eligiblityCriteria-desc">Gratuity is an important aspect of employee benefits and is designed to provide financial security and recognition for long-term service rendered by employees. Eligibility Criteria for Payment of Gratuity:</p>
            <ul class="eligiblityCriteria-list">
              <li><span>Completion of Service:</span> The employee must have completed a minimum period of service with the employer, usually five years.</li>
              <li><span>Termination of Employment:</span> Gratuity is payable upon termination of employment due to retirement, resignation, death, or disablement (due to accident or illness).</li>
              <li><span>Covered Establishments:</span> The Payment of Gratuity Act applies to establishments with 10 or more employees, though some states in India have reduced this threshold to establishments with as few as five employees.</li>
            </ul>
          </div>
        </section>

        <section id="howToUse">
          <div class="midWrapper">
            <h2 class="howToUse-title">How to Use the Kotak Life's Gratuity Calculator?</h2>
            <p class="howToUse-desc">Kotak Life’s Gratuity Calculator is an easy-to-use calculator. You can use it without anyone's help. You can use the Kotak Life’s Gratuity Calculator by following these steps:</p>
            <div class="howToUse-steps">
              <div class="howToUse-step pt10">
                <!-- <img src="./assets/images/calculator/gratuity-images/arrow.svg" alt="Gratuity" width="20" height="20" /> -->
                <div class="benefitsOfRetirement-img gratuity_arrow"></div>

                <p class="howToUse-desc">Input your basic salary and dearness allowance (if applicable) using the slider.</p>
              </div>
              <div class="howToUse-step pt10">
              <div class="benefitsOfRetirement-img gratuity_arrow"></div>
                <p class="howToUse-desc">Enter the number of years you have served with the company.</p>
              </div>
              <div class="howToUse-step pt10">
               <div class="benefitsOfRetirement-img gratuity_arrow"></div>
                <p class="howToUse-desc">The calculator will compute the total gratuity amount owed to you.</p>
              </div>
              <div class="howToUse-step pt10">
               <div class="benefitsOfRetirement-img gratuity_arrow"></div>
                <p class="howToUse-desc">You can also adjust the input anytime to recalculate the gratuity.</p>
              </div>
              <div class="howToUse-step pt10">
               <div class="benefitsOfRetirement-img gratuity_arrow"></div>
                <p class="howToUse-desc">Instant gratuity calculation occurs as you move the sliders.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="benefitsOfUsing">
          <div class="midWrapper">
            <h2 class="benefitsOfUsing-title">Benefits of Using the Kotak Life's Gratuity Calculator</h2>
            <p class="benefitsOfUsing-desc">With advanced techniques, online calculators have become popular. To calculate gratuity online, you can use Kotak Life’s gratuity calculator. This calculator offers several benefits for both employers and employees, helping you mitigate financial complexities when calculating gratuity amount:</p>
            <div class="benefitsOfUsing-cards">
              <div class="benefitsOfUsing-card">
                <h3 class="benefitsOfUsing-subTitle">Accuracy</h3>
                <p class="benefitsOfUsing-desc f15">Gratuity calculations can be complex, involving various factors such as years of service, last drawn salary, and applicable rules and exemptions. The Kotak Life’s Gratuity Calculator ensures accurate and precise calculations, reducing the likelihood of errors.</p>
              </div>
              <div class="benefitsOfUsing-card">
                <h3 class="benefitsOfUsing-subTitle">Time-Saving</h3>
                <p class="benefitsOfUsing-desc f15">By using Kotak Life’s Gratuity Calculator, employers and employees can save time by quickly obtaining accurate results without the need for manual computations.</p>
              </div>
              <div class="benefitsOfUsing-card">
                <h3 class="benefitsOfUsing-subTitle">Convenience</h3>
                <p class="benefitsOfUsing-desc f15">Kotak Life’s Gratuity Calculator is user-friendly and accessible online. Employees can easily determine their gratuity entitlement by entering basic information, such as years of service and last drawn salary, without the need for specialized knowledge or assistance.</p>
              </div>
              <div class="benefitsOfUsing-card">
                <h3 class="benefitsOfUsing-subTitle">Transparency</h3>
                <p class="benefitsOfUsing-desc f15">Standing by its core principle of transparency, Kotak Life’s Gratuity Calculator provides transparent and standardized calculations based on established rules and formulas. This promotes transparency in the gratuity payment process, ensuring that both employers and employees understand how the gratuity amount is determined.</p>
              </div>
              <div class="benefitsOfUsing-card">
                <h3 class="benefitsOfUsing-subTitle">Scenario Analysis</h3>
                <p class="benefitsOfUsing-desc f15">Kotak Life’s Gratuity Calculator allows users to perform scenario analysis by inputting different variables such as years of service and expected salary increments. This enables employees to assess the impact of various factors on their gratuity entitlement and plan accordingly.</p>
              </div>
              <div class="benefitsOfUsing-card">
                <h3 class="benefitsOfUsing-subTitle">Compliance</h3>
                <p class="benefitsOfUsing-desc f15">By using Kotak Life’s Gratuity Calculator, you can ensure compliance with statutory requirements regarding gratuity payments. This helps mitigate the risk of non-compliance and potential legal consequences.</p>
              </div>
              <div class="benefitsOfUsing-card">
                <h3 class="benefitsOfUsing-subTitle">Employee Empowerment</h3>
                <p class="benefitsOfUsing-desc f15">Providing employees access to Kotak’s Gratuity Calculator empowers them to manage their financial planning and retirement goals proactively. Employees can estimate their gratuity benefits and make informed decisions about their careers and financial future.</p>
              </div>
              <div class="benefitsOfUsing-card">
                <h3 class="benefitsOfUsing-subTitle">Cost-effective</h3>
                <p class="benefitsOfUsing-desc f15">Kotak Life’s Gratuity Calculator is available free of charge. Employers can leverage these tools to streamline the gratuity calculation process without incurring significant expenses.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="taxationRules">
          <div class="midWrapper">
            <h2 class="taxationRules-title">What are the Taxation Rules for Gratuity? </h2>
            <p class="taxationRules-desc">In India, the taxation rules for gratuity are governed by the Income Tax Act of 1961. Here are the key points regarding the taxation of gratuity:</p>
            <div class="taxationRules-sec">
              <h3 class="taxationRules-subTitle">Exemption Limit</h3>
              <p class="taxationRules-desc">Gratuity received by an employee is exempt from income tax up to a certain limit. The exemption limit is determined based on the provisions of Section 10(10) of the Income Tax Act.</p>
            </div>
            <div class="taxationRules-sec">
              <h3 class="taxationRules-subTitle">Applicability of Gratuity Act</h3>
              <p class="taxationRules-desc">The exemption is applicable to gratuity received by employees covered under the Payment of Gratuity Act, 1972, as well as those not covered under the Act but who receive gratuity as per the terms of their employment contract.</p>
            </div>
            <div class="taxationRules-sec">
              <h3 class="taxationRules-subTitle">Exemption Calculation</h3>
              <p class="taxationRules-desc">The exemption limit for gratuity is calculated based on the following formula, whichever is the least:</p>
              <p class="taxationRules-formula"> Gratuity = (Last Drawn Salary + Dearness Allowance) × 10 × 15 / 26</p>
            </div>
            <div class="taxationRules-sec">
              <h3 class="taxationRules-subTitle">Exemption on Actual gratuity</h3>
              <p class="taxationRules-desc">Actual gratuity is calculated on the fifteen days of salary based on the last drawn salary for each completed year of service or part thereof more than six months, subject to a maximum of ₹20 lakhs (effective from 29th March 2018, amended from the previous limit of ₹10 lakhs).</p>
            </div>
            <div class="taxationRules-sec">
              <h3 class="taxationRules-subTitle">Calculation on Salary</h3>
              <p class="taxationRules-desc">If gratuity is received during the service period (for reasons other than retirement, death, or resignation), the entire amount is taxable as income under the head "Salaries".</p>
            </div>
            <div class="taxationRules-sec">
              <h3 class="taxationRules-subTitle">Taxation of Excess Gratuity</h3>
              <p class="taxationRules-desc">Any gratuity amount exceeding the exempted limit is taxable as per the employee's income tax slab rate in the year of receipt.</p>
            </div>
            <div class="taxationRules-sec">
              <h3 class="taxationRules-subTitle">Government Employees</h3>
              <p class="taxationRules-desc">Gratuity received by government employees, including those working in Public Sector Undertakings (PSUs) and statutory corporations, is fully exempt from income tax.</p>
            </div>
            <div class="taxationRules-sec">
              <h3 class="taxationRules-subTitle">Tax Deducted at Source (TDS) </h3>
              <p class="taxationRules-desc">If the gratuity amount exceeds the exemption limit, the employer is required to deduct TDS at the time of payment as per the applicable income tax rates.</p>
            </div>
            <div class="taxationRules-sec">
              <h3 class="taxationRules-subTitle">Tax Planning</h3>
              <p class="taxationRules-desc">Employees may plan their gratuity receipts strategically to minimize tax liability, considering factors such as the timing of receipt and the overall taxable income in the relevant financial year.</p>
            </div>
          </div>
        </section>

        <section id="investmentOptions">
          <div class="midWrapper">
            <h2 class="investmentOptions-title">Gratuity Amount Investment Options</h2>
            <p class="investmentOptions-desc">Once an individual receives gratuity, they may consider various investment options in India to utilize the funds effectively and meet their financial goals. Here are some investment options that can be considered:</p>
            <div class="investmentOptions-sec">
              <div class="benefitsOfRetirement-img tick_arrow"></div>

              <div class="investmentOptions-box">
                <h3 class="investmentOptions-subTitle">Fixed Deposits (FDs) </h3>
                <p class="investmentOptions-desc">Fixed deposits offer a stable and predictable return on investment. They are considered relatively safe and can be opened with banks or non-banking financial companies (NBFCs). FDs offer various tenures and interest rates, allowing investors to choose based on their preferences.</p>
              </div>
            </div>
            <div class="investmentOptions-sec">
              <div class="benefitsOfRetirement-img tick_arrow"></div>

              <div class="investmentOptions-box">
                <h3 class="investmentOptions-subTitle">Public Provident Fund (PPF) </h3>
                <p class="investmentOptions-desc">PPF is a long-term investment option with a lock-in period of 15 years. It offers attractive interest rates and tax benefits under Section 80C of the Income Tax Act, and the investment is backed by the government.</p>
              </div>
            </div>
            <div class="investmentOptions-sec">
               <div class="benefitsOfRetirement-img tick_arrow"></div>

              <div class="investmentOptions-box">
                <h3 class="investmentOptions-subTitle">Equity Mutual Funds</h3>
                <p class="investmentOptions-desc">Equity mutual funds invest in stocks, offering the potential for higher returns over the long term. Investors can choose funds based on their risk appetite and investment horizon. Systematic Investment Plans (SIPs) allow regular investing with smaller amounts.</p>
              </div>
            </div>
            <div class="investmentOptions-sec">
               <div class="benefitsOfRetirement-img tick_arrow"></div>

              <div class="investmentOptions-box">
                <h3 class="investmentOptions-subTitle">National Pension System (NPS) </h3>
                <p class="investmentOptions-desc">NPS is a voluntary pension scheme regulated by the Pension Fund Regulatory and Development Authority (PFRDA). It offers tax benefits under Section 80CCD of the Income Tax Act and provides an option to invest in equity, corporate bonds, and government securities.</p>
              </div>
            </div>
            <div class="investmentOptions-sec">
                   <div class="benefitsOfRetirement-img tick_arrow"></div>

              <div class="investmentOptions-box">
                <h3 class="investmentOptions-subTitle">Debt Mutual Funds</h3>
                <p class="investmentOptions-desc">Debt mutual funds invest in fixed-income securities such as bonds, government securities, and corporate debentures. They offer relatively stable returns and are suitable for investors seeking capital preservation and regular income.</p>
              </div>
            </div>
            <div class="investmentOptions-sec">
                  <div class="benefitsOfRetirement-img tick_arrow"></div>

              <div class="investmentOptions-box">
                <h3 class="investmentOptions-subTitle">Post Office Monthly Income Scheme (POMIS) </h3>
                <p class="investmentOptions-desc">POMIS offers a fixed monthly income to investors for a tenure of 5 years. It provides a guaranteed return and can be a suitable option for investors seeking regular income.</p>
              </div>
            </div>
            <div class="investmentOptions-sec">
                  <div class="benefitsOfRetirement-img tick_arrow"></div>

              <div class="investmentOptions-box">
                <h3 class="investmentOptions-subTitle">Real Estate</h3>
                <p class="investmentOptions-desc">Investing in real estate can offer capital appreciation and rental income over the long term. However, it requires substantial initial investment, and investors should consider factors such as location, market trends, and legal aspects before investing.</p>
              </div>
            </div>
            <div class="investmentOptions-sec">
               <div class="benefitsOfRetirement-img tick_arrow"></div>

              <div class="investmentOptions-box">
                <h3 class="investmentOptions-subTitle">Gold</h3>
                <p class="investmentOptions-desc">Gold can be considered as a hedge against inflation and economic uncertainties. Investors can invest in physical gold (such as jewelry or coins) or gold Exchange Traded Funds (ETFs) that track the price of gold.</p>
              </div>
            </div>
            <div class="investmentOptions-sec">
             <div class="benefitsOfRetirement-img tick_arrow"></div>

              <div class="investmentOptions-box">
                <h3 class="investmentOptions-subTitle">Sovereign Gold Bonds (SGBs)</h3>
                <p class="investmentOptions-desc">SGBs are issued by the Government of India and offer a fixed interest rate along with the potential for capital appreciation linked to the price of gold. They have a tenure of 8 years and provide tax benefits.</p>
              </div>
            </div>
            <div class="investmentOptions-sec">
              <div class="benefitsOfRetirement-img tick_arrow"></div>

              <div class="investmentOptions-box">
                <h3 class="investmentOptions-subTitle">Senior Citizen Savings Scheme (SCSS) </h3>
                <p class="investmentOptions-desc">SCSS is a government-backed savings scheme designed for senior citizens. It offers regular interest income and tax benefits under Section 80C of the Income Tax Act.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="paymentOfGratuity">
          <div class="midWrapper">
            <h2 class="paymentOfGratuity-title">Payment of Gratuity</h2>
            <p class="paymentOfGratuity-desc">The employer typically does the payment of gratuity to the eligible employee upon the occurrence of certain events specified under the Payment of Gratuity Act, 1972. Here's how the payment process generally works:</p>
            <div class="paymentOfGratuity-cards">
              <div class="paymentOfGratuity-card">
                <h3 class="paymentOfGratuity-subTitle">Eligibility Determination</h3>
                <p class="paymentOfGratuity-desc f15">According to the Gratuity Act, an employee becomes eligible for gratuity if they have completed at least five years of continuous service with the same employer. </p>
              </div>
              <div class="paymentOfGratuity-card">
                <h3 class="paymentOfGratuity-subTitle">Calculation of Gratuity Amount</h3>
                <p class="paymentOfGratuity-desc f15">The gratuity amount is calculated based on the employee's last drawn salary and the length of their continuous service. The formula for calculating gratuity is usually: (Last drawn salary × 15/26) × number of years of completed service.</p>
              </div>
              <div class="paymentOfGratuity-card">
                <h3 class="paymentOfGratuity-subTitle">Issuance of Notice</h3>
                <p class="paymentOfGratuity-desc f15">When an employee becomes eligible for gratuity, the employer typically issues a notice informing them about their eligibility and the amount of gratuity payable. The notice also specifies the date and mode of payment.</p>
              </div>
              <div class="paymentOfGratuity-card">
                <h3 class="paymentOfGratuity-subTitle">Payment Processing</h3>
                <p class="paymentOfGratuity-desc f15">After the notice is issued and the gratuity amount is calculated, the employer initiates the payment process. The payment can be made either in cash, by cheque, or through electronic transfer, depending on the employer's policies and the employee's preference.</p>
              </div>
              <div class="paymentOfGratuity-card">
                <h3 class="paymentOfGratuity-subTitle">Timing of Payment</h3>
                <p class="paymentOfGratuity-desc f15">The Payment of Gratuity Act stipulates that the gratuity amount must be paid within 30 days from the date it becomes payable. If there is any delay in payment beyond this period, the employer may be liable to pay interest on the delayed amount.</p>
              </div>
              <div class="paymentOfGratuity-card">
                <h3 class="paymentOfGratuity-subTitle">Receipt Acknowledgment</h3>
                <p class="paymentOfGratuity-desc f15">Once the gratuity payment is made, the employer typically obtains a receipt acknowledgment from the employee confirming the receipt of the gratuity amount. This acknowledgment serves as proof of payment and helps in maintaining records.</p>
              </div>
              <!-- <div class="new_div"> -->
                  <div class="paymentOfGratuity-card">
                    <h3 class="paymentOfGratuity-subTitle">Tax Deduction</h3>
                    <p class="paymentOfGratuity-desc f15">If the gratuity amount exceeds the exempted limit under the Income Tax Act, the employer is required to deduct tax at source (TDS) at the time of payment as per the applicable income tax rates.</p>
                  </div>
                  <div class="paymentOfGratuity-card new-card">
                    <h3 class="paymentOfGratuity-subTitle">Record-Keeping</h3>
                    <p class="paymentOfGratuity-desc f15">Both the employer and the employee should maintain records related to the payment of gratuity, including calculation details, payment receipts, and any correspondence exchanged regarding the gratuity payment.</p>
                  </div>
              <!-- </div> -->

            </div>
          </div>
        </section>

        <section id="eligibleGratuity">
          <div class="midWrapper">
            <h2 class="eligibleGratuity-title">Organizations Eligible for Gratuity</h2>
            <p class="eligibleGratuity-desc">In India, the Payment of Gratuity Act 1972 specifies the organizations and establishments that are eligible to provide gratuity to their employees. The Act covers a wide range of establishments, including:</p>
            <div class="eligibleGratuity-sec">
            <div class="benefitsOfRetirement-img original_arrow"></div>
              <div>
                <h3 class="eligibleGratuity-subTitle">Factories</h3>
                <p class="eligibleGratuity-desc">Any premises including precincts where manufacturing processes are carried out, with the aid of power or without the aid of power, where the number of employees regularly employed exceeds ten.</p>
              </div>
            </div>
            <div class="eligibleGratuity-sec">
             <div class="benefitsOfRetirement-img original_arrow"></div>
              <div>
                <h3 class="eligibleGratuity-subTitle">Mines</h3>
                <p class="eligibleGratuity-desc">Any premises including precincts where operations relating to the extraction of any mineral are carried out, with the aid of power or without the aid of power, and where the number of employees regularly employed exceeds ten.</p>
              </div>
            </div>
            <div class="eligibleGratuity-sec">
             <div class="benefitsOfRetirement-img original_arrow"></div>
              <div>
                <h3 class="eligibleGratuity-subTitle">Oilfields</h3>
                <p class="eligibleGratuity-desc">Any premises including precincts where operations related to the exploration or production of mineral oil are carried out, with the aid of power or without the aid of power, and where the number of employees regularly employed exceeds ten.</p>
              </div>
            </div>
            <div class="eligibleGratuity-sec">
             <div class="benefitsOfRetirement-img original_arrow"></div>
              <div>
                <h3 class="eligibleGratuity-subTitle">Plantations</h3>
                <p class="eligibleGratuity-desc">Any agricultural or horticultural operation that includes the cultivation of tea, coffee, rubber, cinchona, cardamom, vines, or any other plant and where the number of employees regularly employed exceeds ten.</p>
              </div>
            </div>
            <div class="eligibleGratuity-sec">
              <div class="benefitsOfRetirement-img original_arrow"></div>
              <div>
                <h3 class="eligibleGratuity-subTitle">Ports and Docks</h3>
                <p class="eligibleGratuity-desc">Any premises where loading, unloading, movement, or storage of goods in or on any vessel is carried out and where the number of employees regularly employed exceeds ten.</p>
              </div>
            </div>
            <div class="eligibleGratuity-sec">
             <div class="benefitsOfRetirement-img original_arrow"></div>
              <div>
                <h3 class="eligibleGratuity-subTitle">Railway Companies</h3>
                <p class="eligibleGratuity-desc">Any establishment or administrative or other department of a railway company (as defined in the Railways Act, 1989) where the number of employees regularly employed exceeds ten.</p>
              </div>
            </div>
            <div class="eligibleGratuity-sec">
              <div class="benefitsOfRetirement-img original_arrow"></div>
              <div>
                <h3 class="eligibleGratuity-subTitle">Shops and Establishments</h3>
                <p class="eligibleGratuity-desc">Any commercial, trading, banking, insurance, or any other establishment where individuals are employed or engaged for hire or reward and where the number of employees regularly employed exceeds ten.</p>
              </div>
            </div>
            <div class="eligibleGratuity-sec">
             <div class="benefitsOfRetirement-img original_arrow"></div>
              <div>
                <h3 class="eligibleGratuity-subTitle">Educational Institutions</h3>
                <p class="eligibleGratuity-desc">Any educational institution, including schools, colleges, universities, or other educational establishments, whether conducted by the government, a local authority, or any other person and where the number of employees regularly employed exceeds ten.</p>
              </div>
            </div>
            <div class="eligibleGratuity-sec">
             <div class="benefitsOfRetirement-img original_arrow"></div>
              <div>
                <h3 class="eligibleGratuity-subTitle">Other Establishments</h3>
                <p class="eligibleGratuity-desc">Any other establishments or class of establishments employing ten or more persons as may be notified by the appropriate Government on this behalf. <br> It's important to note that the applicability of the Payment of Gratuity Act depends on the number of employees regularly employed in the establishment. Once an organization meets the criteria specified under the Act, it becomes obligated to provide gratuity to its eligible employees as per the provisions of the Act.</p>
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
              <h2 class="accordTitle">People also ask </h2>
              <div class="accordList">
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>1</span>Can I apply for a gratuity before the completion of 5 years?</a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>No, you typically need to complete at least 5 years of continuous service to be eligible for gratuity.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>2</span>When is gratuity payable? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Gratuity is usually payable upon retirement, resignation after 5 years, death while employed (paid to the nominee), or permanent disability.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>3</span>If I have spent 7 years and 10 months, for how many years will I receive gratuity? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Generally, gratuity is calculated in completed years of service. In this case, you would receive a gratuity for 7 years.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>4</span>Is the employer liable to pay gratuity to contractual or temporary employees? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>No, the Payment of Gratuity Act 1972 typically applies to employees working for wages for more than a month in an establishment with at least 10 employees.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>5</span>My employer has a five-day working week. Does that have any bearing on the calculation of gratuity?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>No, the number of working days per week doesn't affect gratuity calculation. It's based on your monthly salary.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>6</span>Can an employer refuse to give gratuity? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>No, as per the constitutional laws, an employer cannot refuse gratuity if you meet the eligibility criteria under the Act.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>7</span>Is the gratuity amount taxable for government employees? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The gratuity amount for government employees is taxable, but there are exemptions up to a certain limit.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>8</span>Is there a maximum limit on the Gratuity amount that you will receive? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, there is a maximum limit on the gratuity amount. You can find the latest limit for your region.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>9</span>Will you lose the Gratuity amount if my employer turns bankrupt? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, there is a possibility of losing gratuity if the company goes bankrupt.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>10</span>How much time does it take for an employer to release the Gratuity amount? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The timeframe for releasing gratuity can vary depending on your location and company policy. It is generally within a month after leaving the company.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>11</span>What kind of employees does the Gratuity Act, 1972 cover? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The Act covers employees working for wages in establishments with at least 10 employees for more than a month.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>12</span>How do I nominate someone to receive my Gratuity in case of my death? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>You can typically nominate someone by submitting a nomination form to your employer.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>13</span>Is the gratuity calculator free for use?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Many calculators like Kotak Life's Gratuity Calculator are available online for free. You can use them for calculating your gratuity.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>14</span>How many times can I use the calculator? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>You can use a gratuity calculator as many times as you need.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>15</span>Can I also calculate ex gratia payment using this calculator? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>No, gratuity calculators typically calculate the amount mandated by law. Ex-gratia payments are discretionary and not calculated.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>16</span>How to calculate gratuity?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>You can calculate gratuity using the formula: Gratuity = (Last drawn monthly salary * 15/26 * Number of completed years of service).</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>17</span>What is the rule of gratuity calculation? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The general rule is 15 days' salary for every completed year of service.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>18</span>Are 4.8 years eligible for gratuity? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>No, gratuity is usually paid after spending a minimum of 5 years in a company. So, 4.8 years would not qualify for additional gratuity. </p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>19</span>Where should I invest my gratuity amount?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The investment of the gratuity amount depends on your financial goals, risk tolerance, and investment horizon. Consider consulting a financial advisor to determine the best investment options suitable for your needs.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>20</span>How much is gratuity in 5 years? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The gratuity amount in 5 years depends on the employee's last drawn salary and the calculation formula mentioned earlier.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>21</span>What are the income tax limitations for Gratuity? </a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Gratuity received by an employee is subject to tax limitations set by the Income Tax Act. As of now, the maximum tax-exempt gratuity amount is ₹20 lakhs, applicable for both government and non-government employees. Any amount exceeding this limit is taxable as per the individual's income tax slab rates.</p>
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
                <br> -->
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
                <p  class="pl-0 mt-10">For Educational purpose only.</p>
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
    <script async="" src="assets/js/gratuity-calculator.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.2.1/rangeslider.min.js"></script>
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

