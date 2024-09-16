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
    .breadcrumb-ulip {
        margin-top: 20px;
        padding-bottom: 1rem
    }

    .card {
        height: auto;
    }

</style>
<link rel="stylesheet" href="assets/css/terminsurance-calculator.css">

<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/retirement.css">
<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">


<div class="interactionWrap retirement">
    <div class="pageWrapper">
        <section id="retirement_calculator" class="bg_light">
            <div class="container">
                <ul class="breadcrumb-ulip">
                    <li><a href="https://www.kotaklife.com/">Home></a></li>
                    <li><a href="/financial-tools-calculators">Financial Tool Calculator ></a></li>
                    <li class="active"><a href="javascript:void(0);">Term Insurance Calculator</a></li>
                </ul>
                <h1 class="section_heading">Term Insurance Calculator</h1>
                <div class="retirement_div">
                        <p class="retirement_text">Understanding the intricacies of term life insurance is crucial for individuals seeking to protect their loved ones' financial futures in financial planning and insurance. A term insurance calculator is a vital tool in this process,<span id="dots">...</span>
                        <span class="retirement_text"  id="more">offering a straightforward means to estimate the coverage needs and premium costs associated with term insurance policies. </span> <span style="color: #ED3237 ;cursor: pointer;font-weight: 600; font-size:17px" onclick="readMoreFD()" id="myBtn"> Read more</span>
                    </p>
                    </div>

                    <a href=" https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-eterm?utm_source=organic&utm_medium=calculators&utm_campaign=term&utm_content=investnow" class="redBtn">Calculate Premium</a>
                <!-- <div class="row cal-margin">
                    <div class="col-lg-7 m-no-padding">
                        <div class="card retirement_card">
                            <div class="range-wrap">
                                <div class="goal-wrap">
                                    <p class="goal-title">Current Monthly Expenses</p>
                                    <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="monthlyExpensesInput" type="text" value="30,000" maxlength="11" class="form-control comma"></div>
                                </div>
                                <div class="slider-wrap"><input id="monthlyExpensesRange" type="range" value="30000" min="10000" max="1000000" class="range-control"></div>
                                <div class="invest-amt">
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                </div>
                                <div class="value-wrap">
                                    <div class="min"><span class="rupee">&#8377;&nbsp;</span><span class="amount">10 k</span></div>
                                    <div class="max"><span class="rupee">&#8377;&nbsp;</span><span class="amount">10 Lac</span></div>
                                </div>
                            </div>
                            <div class="row mobile-grid">
                                <div class="col-4">
                                    <div class="form_group curntAge"><label for="currentAge">Current Age</label><input id="currentAge" type="text" value="35" maxlength="2" class="form-control"></div>
                                </div>
                                <div class="col-4 pl-0">
                                    <div class="form_group curntAge"><label for="retirementAge">Desired Retirement Age</label><input id="retirementAge" type="text" value="60" maxlength="2" class="form-control"></div>
                                </div>
                                <div class="form_group col-4"><label for="lifeExpectancy">Life Expected&nbsp;<span class="sublabel">(Age )</span></label><input id="lifeExpectancy" type="text" value="80" maxlength="2" class="form-control"></div>
                            </div>
                            <div class="range-wrap">
                                <div class="goal-wrap percent-inputs">
                                    <p class="goal-title">What<span class="hidden_xs"> percentage&nbsp;</span><span class="hidden_lg"> %&nbsp;</span>of your expected expenses can be your retirement expenses?</p>
                                    <div class="input-wrap percent-wrap"><input id="retirementExpensesInput" type="text" value="75" maxlength="3" class="form-control comma"><span>%</span></div>
                                </div>
                                <div class="slider-wrap"><input id="retirementExpensesRange" type="range" value="75" min="10" max="100" class="range-control"></div>
                                <div class="invest-amt">
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                </div>
                                <div class="value-wrap">
                                    <div class="min"><span class="amount">10%</span></div>
                                    <div class="max"><span class="amount">100%</span></div>
                                </div>
                            </div>
                            <div class="range-wrap">
                                <div class="goal-wrap">
                                    <p class="goal-title">Expected Inflation Rate&nbsp;<span class="sublabel">(Optional)</span></p>
                                    <div class="input-wrap percent-wrap"><input id="inflationRateInput" type="text" value="7" maxlength="5" class="form-control"><span>%</span></div>
                                </div>
                                <div class="slider-wrap"><input id="inflationRateRange" type="range" step="0.01" value="7" min="1" max="15" class="range-control"></div>
                                <div class="invest-amt">
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                </div>
                                <div class="value-wrap">
                                    <div class="min"><span class="amount">1%</span></div>
                                    <div class="max"><span class="amount">15%</span></div>
                                </div>
                            </div>
                            <div class="range-wrap">
                                <div class="goal-wrap">
                                    <p class="goal-title">Expected Return During Retirement&nbsp;<span class="sublabel">(Optional)</span></p>
                                    <div class="input-wrap percent-wrap"><input id="expectadeReturnInput" type="text" value="8" maxlength="5" class="form-control"><span>%</span></div>
                                </div>
                                <div class="slider-wrap"><input id="expectadeReturnRange" type="range" step="0.01" value="8" min="1" max="15" class="range-control"></div>
                                <div class="invest-amt">
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                    <div class="amt-slot">|</div>
                                </div>
                                <div class="value-wrap">
                                    <div class="min"><span class="amount">1%</span></div>
                                    <div class="max"><span class="amount">15%</span></div>
                                </div>
                            </div><button id="calculate" class="btn_block btn_primary">Calculate</button>
                        </div>
                    </div>
                    <div class="col-lg-5 m-no-padding">
                        <div class="card text_center p-0">
                            <h2 class="card_title"><span class="text_secondary">Estimated Retirement Fund</span><span class="amt_return">&#8377;&nbsp;<span id="requiredRetirementFundOutput" class="addCommaDefault"></span></span></h2>
                        </div>
                        <div class="card text_center p-0">
                            <div class="radio-toggle"><input id="monthlySavings" type="radio" name="required-savings" checked="" value="monthly"><label for="goal-monthly">Monthly</label><input id="yearlySavings" type="radio" name="required-savings" value="yearly"><label for="lumpsum-monthly">Yearly</label><span class="toggle-outside"><span class="toggle-inside"></span></span></div>
                            <p class="mb-0">Required<span id="monthYear" class="text_secondary">Monthly</span>&nbsp;Savings</p>
                            <p class="reqSavings">&#8377;&nbsp;<span id="savingsPerMonthlyOutput" class="addCommaDefault">23,743</span><span id="savingsPerYearOutput" class="addCommaDefault">23,743</span></p><img data-src="assets/images/pic-retirement.png" src="assets/images/pic-retirement.png" alt="" width="125px" height="100%" class="retirement_pic lzy_img"><a href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&utm_medium=calculators&utm_campaign=retirement&utm_content=planretirement" target="_blank" class="btn_primary btn_block">Plan your retirement</a>
                        </div>
                    </div>
                   
                </div> -->
            </div>
        </section>
        <section id="retirementPlanning">
            <div class="retirementPlanning_bg">
                <div class="container">
                    <div class="retirementPlan-section">
                        <!-- <div class="retirementImg"><img width="100%" height="100%" data-src="./assets/images/calculator/retirement/Group 19934.svg" src="./assets/images/calculator/retirement/Group 19934.svg" width="100%" height="100%" class="lzy_img" alt="Planning"></div> -->
                        <div class="retirement-text">
                            <h2 class="retirementTitle">What is a Term Insurance Calculator?</h2>
                            <p class="retirementDesc">A term insurance calculator is an online tool designed to help individuals estimate the amount of life insurance coverage they need based on various factors such as age, income, liabilities, and financial goals. By inputting these details into the calculator, users can quickly determine the appropriate sum assured for a term insurance policy that would adequately protect their family's financial future in case of the policyholder's demise during the policy term.</p>
                            <p class="retirementDesc">These calculators often provide insights into premium amounts and policy durations, aiding
                              individuals in making informed decisions about their life insurance needs without requiring
                              extensive manual calculations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="planningCalc">
            <div class="planningCalc_bg">
                <div class="container">
                    <div class="secWarp">
                        <div class="leftSec">
                            <h2 class="planningCalcTitle">What is a Retirement Planning Calculator?</h2>
                            <p class="planningCalcDesc">A calculator for retirement or retirement calculator is a tool that helps individuals estimate how much money they will need to save for retirement and how much income they can expect to receive from their savings. <a href="" class="retirementLink"> Retirement planning</a> calculators also help individuals estimate the amount of money they can expect to receive from their savings during retirement.</p><br>
                            <p class="planningCalcDesc">Another critical feature of retirement calculators is the ability to incorporate other retirement-related expenses into the calculation. These expenses can include healthcare costs, travel expenses, and other costs associated with maintaining a standard of living post-retirement. By factoring in these expenses, individuals can get a more accurate estimate of their retirement savings needs using a retirement calculator.</p>
                        </div>
                        <div class="rightSec">
                            <picture>
                                <source media="(min-width:767px)" srcset="./assets/images/calculator/retirement/Group 20132.svg"><img data-src="./assets/images/calculator/retirement/Group 20132.svg" src="./assets/images/calculator/retirement/Group 20132.svg" class="lzy_img" alt="compundImg">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section id="useRetirementCalc">
            <div class="container">
                <h2 class="useRetirementCalc_title">How Does a Term Insurance Calculator Work?</h2>
                <p class="useRetirementCalc-desc">A term insurance calculator works by taking inputs such as age, desired coverage amount, and policy duration to estimate the premium you would pay for term life insurance. It calculates premiums based on actuarial tables and insurance company algorithms to provide personalized quotes quickly and accurately. Here’s how they work.</p><br>
                <!-- <p class="useRetirementCalc-desc">Here's how you can use a retirement calculator:</p> -->
                <div class="useRetirementCalc_steps">
                    <div class="useRetirementCalc-step">
                        <div class="useRetirementCalc_stepText">Step</div>
                        <div class="useRetirementCalc_number">1</div>
                    </div>
                    <div class="useRetirementCalc-stepContent">
                        <div class="useRetirementCalc_stepTitle">Input Your Personal Details</div>
                        <div class="useRetirementCalc_stepDesc">To use the term insurance premium calculator effectively, the policy buyer must provide personal information such as date of birth, gender, marital status, annual income, number of children, desired life cover, and possibly details about smoking habits. It's crucial to note that annual income reflects earning capacity, which significantly influences the premium rates of the term insurance policy. </div>
                    </div>
                </div>
                <div class="useRetirementCalc_steps">
                    <div class="useRetirementCalc-step">
                        <div class="useRetirementCalc_stepText">Step</div>
                        <div class="useRetirementCalc_number">2</div>
                    </div>
                    <div class="useRetirementCalc-stepContent">
                        <div class="useRetirementCalc_stepTitle">Specify the Desired Sum Assured </div>
                        <div class="useRetirementCalc_stepDesc">Next, indicate the amount of sum assured desired and the duration for which coverage is needed. Additionally, decide whether you prefer your family to receive a lump sum payout or monthly income. Simply input these details and await the calculation results.  </div>
                    </div>
                </div>
                <div class="useRetirementCalc_steps">
                    <div class="useRetirementCalc-step">
                        <div class="useRetirementCalc_stepText">Step</div>
                        <div class="useRetirementCalc_number">3</div>
                    </div>
                    <div class="useRetirementCalc-stepContent">
                        <div class="useRetirementCalc_stepTitle">Compare Plans  </div>
                        <div class="useRetirementCalc_stepDesc">Following input, the online term insurance premium calculator will suggest suitable term insurance plans based on your provided information. Conduct a systematic comparison of the recommended plans to identify the most suitable option. Once decided, proceed with purchasing the chosen <a class="retirementLink" href="https://www.kotaklife.com/term-insurance">term insurance plan</a></div>
                    </div>
                </div>
                <!-- <div class="useRetirementCalc_steps">
                    <div class="useRetirementCalc-step">
                        <div class="useRetirementCalc_stepText">Step</div>
                        <div class="useRetirementCalc_number">4</div>
                    </div>
                    <div class="useRetirementCalc-stepContent">
                        <div class="useRetirementCalc_stepTitle">Estimate Your Retirement Expenses</div>
                        <div class="useRetirementCalc_stepDesc">Retirement expenses may include housing, healthcare, transportation, and other living expenses. Estimating your retirement expenses is crucial to determine how much money you'll need to save for retirement. The retirement calculator will ask you to input your estimated monthly expenses, and it will use that information to calculate your retirement needs.</div>
                    </div>
                </div> -->
                <!-- <div class="useRetirementCalc_steps">
                    <div class="useRetirementCalc-step">
                        <div class="useRetirementCalc_stepText">Step</div>
                        <div class="useRetirementCalc_number">5</div>
                    </div>
                    <div class="useRetirementCalc-stepContent">
                        <div class="useRetirementCalc_stepTitle">Determine Your Retirement Savings</div>
                        <div class="useRetirementCalc_stepDesc">Once you've entered all the necessary information, the retirement calculator will provide you with an estimate of how much you need to save for retirement. It will also tell you how long your savings will last based on your expected rate of return on your investments and the expected inflation rate.</div>
                    </div>
                </div> -->
                <!-- <div class="useRetirementCalc_steps">
                    <div class="useRetirementCalc-step">
                        <div class="useRetirementCalc_stepText">Step</div>
                        <div class="useRetirementCalc_number">6</div>
                    </div>
                    <div class="useRetirementCalc-stepContent">
                        <div class="useRetirementCalc_stepTitle">Adjust Your Plan</div>
                        <div class="useRetirementCalc_stepDesc">If the retirement calculator indicates that you need to save more money for retirement than you're currently saving, it's time to adjust your plan. You may need to cut back on expenses, increase your income, or find ways to save more money.</div>
                    </div>
                </div> -->
                <!-- <div class="useRetirementCalc_steps">
                    <div class="useRetirementCalc-step">
                        <div class="useRetirementCalc_stepText">Step</div>
                        <div class="useRetirementCalc_number">7</div>
                    </div>
                    <div class="useRetirementCalc-stepContent">
                        <div class="useRetirementCalc_stepTitle">Monitor Your Progress</div>
                        <div class="useRetirementCalc_stepDesc">Once you have a retirement plan in place, it's essential to monitor your progress regularly. You may need to adjust your plan if your circumstances change, such as a job loss or unexpected expenses. Keep track of your savings and adjust your plan as necessary to ensure that you're on track to meet your retirement goals.</div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- <section id="retirementCalcWork">
            <div class="retirementCalcWork_bg">
                <div class="container">
                    <h2 class="retirementCalcWork-title">How Does a Retirement Planning Calculator Work?</h2>
                    <p class="retirementCalcWork-desc">A <a class="retirementLink" href=""> retirement plan </a> is a crucial aspect of financial management that individuals need to prioritize for their long-term well-being. As life expectancy increases and the cost of living goes up, it becomes essential to plan and save for retirement.</p>
                    <p class="retirementCalcWork-Desc">Here's how a retirement calculator works:</p>
                    <div class="Steps">
                        <div class="stepsCont"><span class="ulipsprite ulipimg"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Entering Personal Information</h3>
                                <p class="ulip-desc">The first step is to enter personal information such as age, income, retirement age, and expected retirement expenses. This information helps the retirement calculator understand an individual's current financial situation, financial goals, and desired retirement lifestyle.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite ulipimg"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Calculating the Retirement Corpus</h3>
                                <p class="ulip-desc">The retirement calculator will then calculate the retirement corpus, which is the amount of money an individual needs to save for their retirement. This calculation is based on various factors such as the current age of the individual, expected retirement age, expected rate of inflation, expected expenses during retirement, and current income.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite ulipimg"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Click on Calculate</h3>
                                <p class="ulip-desc">Finally, the retirement planning calculator will analyze the retirement plan and provide a report that outlines the individual's retirement goals, savings requirements, and investment strategies. This report will help individuals understand how much they need to save, how much they can expect to receive in retirement income, and whether they are on track to meet their retirement goals.</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section> -->


        <section id=" calculatingretirement">
            <div class="retirementCalcWork_bg1">
                <div class="container">

                <h2 class="retirementCalcWork-title how-space"> How Does a Term Plan Calculator Help You? </h2>
                    <p class="retirementCalcWork-desc a-space">A term insurance premium calculator assists in determining the necessary insurance coverage to financially safeguard your family members and calculate the corresponding premium amount. According to a general guideline, the coverage should adequately meet your family's financial needs in the event of an unexpected occurrence. Using this tool ensures that your insurance choices are grounded in clarity, accuracy, and foresight, ultimately providing peace of mind for you and financial protection for your loved ones in times of need.</p>
                </div>
            </div>
        </section>
        <!-- <section id=" calculatingretirement">
            <div class="retirementCalcWork_bg1">
                <div class="container">

                    <h2 class="compoundInterestWorks-title how-space">How to Calculate Your Retirement Corpus?</h2>
                    <p class="compoundInterestWorks-desc">Calculating your retirement corpus involves determining the total amount of savings needed to fund your desired lifestyle throughout retirement. To do this, you can follow these steps:</p>
                    
                    <div>
                       
                        <ul class="listTerms estimatespace">
                           
                            <li class="listTerms-lists light"><b>Estimate your retirement expenses:</b> Calculate your anticipated expenses during retirement, including housing, healthcare, leisure activities, and other necessities.</li>
                            <li class="listTerms-lists light"><b>Determine your retirement age and life expectancy:</b> Decide at what age you plan to retire and estimate your life expectancy to determine how long your retirement savings will need to last.</li>
                            <li class="listTerms-lists light"><b>Consider inflation:</b> Account for the impact of inflation on your future expenses by adjusting your estimated retirement expenses accordingly.</li>
                            <li class="listTerms-lists light"><b>Calculate your desired retirement income:</b> Determine the amount of income you will need annually during retirement to maintain your desired lifestyle.</li>
                            <li class="listTerms-lists light"><b>Assess your income sources:</b> Consider sources of retirement income such as pensions, Social Security benefits, and other investments.</li>
                            <li class="listTerms-lists light"><b>Use a retirement calculator:</b> Input your financial and personal details into a retirement calculator to estimate the total amount of savings needed to fund your retirement lifestyle, taking into account factors such as expected rate of return on investments and the number of years in retirement.</li>
                            <li class="listTerms-lists light"><b>Adjust your savings plan:</b> Based on the results from the retirement calculator, adjust your savings plan as needed to meet your retirement goals and ensure a financially secure future.</li>
                           
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section> -->

        
        <section id="benefitRetirement">
            <div class="container">
                <h2 class="benefitRetirementTitle">Benefits of a Term Plan Premium Calculator? </h2>
                <p class="benefitRetirementDesc">Term Plan Premium Calculator offers a range of benefits that simplify selecting the right coverage while ensuring financial prudence. Here are the key benefits of using a term plan premium calculator:  </p><br>
            
                <div class="benefitRetirement_steps">
                    <div class="benefitRetirement_img">
                        <div class="bent-icon bi1"></div>
                    </div>
                    <div class="benefitRetirement-stepContent">
                        <h3 class="benefitRetirement_stepTitle">Convenience </h3>
                        <div class="benefitRetirement_stepDesc">One of the primary benefits of a term plan premium calculator is the convenience it offers. Calculating the necessary coverage and premium manually can be complex and time-consuming. A term life insurance calculator streamlines this process by allowing you to input your details and instantly receive accurate estimates. You can explore different coverage options and premium amounts from the comfort of your home without visiting multiple insurance providers or spending hours researching. </div>
                    </div>
                </div>
                <div class="benefitRetirement_steps">
                    <div class="benefitRetirement_img">
                        <div class="bent-icon bi2"></div>
                    </div>
                    <div class="benefitRetirement-stepContent">
                        <h3 class="benefitRetirement_stepTitle">Comparison </h3>
                        <div class="benefitRetirement_stepDesc">You can quickly generate quotes from various insurance providers by entering your details into the calculator. This lets you compare premium amounts, coverage benefits, and additional features. The ability to compare multiple options helps you make an informed decision, ensuring you choose a policy that offers the best value for money and meets your needs. </div>
                    </div>
                </div>
                <div class="benefitRetirement_steps">
                    <div class="benefitRetirement_img">
                        <div class="bent-icon bi3"></div>
                    </div>
                    <div class="benefitRetirement-stepContent">
                        <h3 class="benefitRetirement_stepTitle">Financial Planning </h3>
                        <div class="benefitRetirement_stepDesc">Effective financial planning is crucial for ensuring the long-term security of your family. A term plan premium calculator assists in this by providing a clear picture of the costs associated with different insurance policies. It helps you understand how much coverage you can afford and the monthly premiums, allowing you to budget accordingly. This clarity ensures you choose a term plan that fits your overall financial strategy without compromising on necessary coverage. </div>
                    </div>
                </div>
                <div class="benefitRetirement_steps">
                    <div class="benefitRetirement_img">
                        <div class="bent-icon bi4"></div>
                    </div>
                    <div class="benefitRetirement-stepContent">
                        <h3 class="benefitRetirement_stepTitle">Customization</h3>
                        <div class="benefitRetirement_stepDesc">Every individual’s insurance needs are unique, and a one-size-fits-all approach rarely works. A term life insurance calculator allows for customization based on your specific circumstances. You can adjust variables such as the sum assured, policy term, and additional riders to see how they affect the premium. This flexibility helps you tailor your insurance policy to your exact requirements, ensuring that you get comprehensive coverage that aligns with your financial goals and obligations.   </div>
                    </div>
                </div>
                
            </div>
        </section>


        <!-- <section id=" calculatingretirement">
            <div class="retirementCalcWork_bg1">
                <div class="container">

                    <h2 class="compoundInterestWorks-title how-space"> Impact of Inflation on Retirement Savings</h2>
                    <p class="compoundInterestWorks-desc">Inflation can have a significant impact on retirement savings, eroding the purchasing power of money over time. It essential for retirees to account for inflation when planning their financial future. Failure to do so can result in a shortfall of funds during retirement, potentially leading to financial insecurity and an inability to maintain one's desired standard of living. Let us see how inflation affects retirement savings:</p>
                    
                    <div>
                       
                        <ul class="listTerms estimatespace">
                           
                            <li class="listTerms-lists light"><b>Reduces purchasing power:</b>  Inflation erodes the value of money over time, meaning the same amount of money will buy fewer goods and services in the future.</li>
                            <li class="listTerms-lists light"><b>Increases cost of living:</b> As prices rise due to inflation, retirees may need more money to cover their living expenses, healthcare, and other necessities.</li>
                            <li class="listTerms-lists light"><b>Diminishes real returns:</b>  Inflation can eat into the real returns of retirement savings, especially if the returns on investments don't outpace the inflation rate.</li>
                            <li class="listTerms-lists light"><b>Requires higher savings:</b>  Retirees may need to save more to maintain their standard of living in retirement, factoring in the impact of inflation over the long term.</li>
                           
                           
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section> -->


        <!-- <section id=" calculatingretirement">
            <div class="retirementCalcWork_bg1">
                <div class="container">
                    <h2 class="retirementCalcWork-title"> How to use the Kotak Life's Retirement Planning Calculator?</h2>
                    <p class="retirementCalcWork-desc">Kotak Life’s retirement calculator is one of the best retirement planning calculators that is easily accessible and can be used by anyone willing to calculate retirement income.</p>
                    <p class="retirementCalcWork-Desc">Here are the easy steps you can follow to use this calculator:</p>
                    <div class="Steps">
                        <div class="stepsCont"><span class="ulipsprite"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Step 1</h3>
                                <p class="ulip-desc">The first step is to enter your current monthly expenses in the retirement calculator.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Step 2</h3>
                                <p class="ulip-desc">For the next step, you need to fill in your personal information like current age, desired retirement age, and expected age for your retirement corpus.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Step 3</h3>
                                <p class="ulip-desc">For the third step, the retirement calculator will ask you to select the percentage of your expected expenses that can be your retirement expenses.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Step 4</h3>
                                <p class="ulip-desc">The calculator also takes into account the expected inflation rate so that your retirement income does not get depleted due to inflation.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Step 5</h3>
                                <p class="ulip-desc">For the last step, you have to enter the expected amount of your retirement returns in the retirement calculator. </p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Step 6</h3>
                                <p class="ulip-desc">After completing all these steps, click on the “calculate” button and your estimated retirement fund will be displayed on the screen. This return can be seen on a monthly or yearly basis.</p>
                            </div>
                        </div>
                      
                    </div>


                   
                </div>
            </div>
        </section> -->
        <!-- <section id="saveUp">
            <div class="saveUp_bg">
                <div class="container">
                    <h2 class="saveUp-title">How Much to Save Up for Retirement?</h2>
                    <p class="saveUp-desc">Retirement planning is one of the most important financial goals that one can set for oneself. It involves saving and investing money over a long period of time to build a nest egg that will provide income during one's golden years. The question that often arises is how much to save up for retirement. The answer depends on a number of factors, such as one's lifestyle, expenses, and expected retirement age.</p>
                    <div class="saveUp-cards">
                        <div class="saveUp-card">
                            <div class="saveUp-img">
                                <div class="retire-ben rbi1"></div>
                                <div class="saveUp-CardTitle">10% Rule</div>
                                <div class="saveUp-CardSubTitle">One common guideline is the 10% rule, which suggests saving 10% of your income annually for retirement. While this can provide a starting point for savings, it may not be sufficient for everyone, depending on individual circumstances and retirement goals.</div>
                            </div>
                        </div>
                        <div class="saveUp-cards">
                            <div class="saveUp-card">
                                <div class="saveUp-img">
                                    <div class="retire-ben rbi2"></div>
                                    <div class="saveUp-CardTitle">80% Rule</div>
                                    <div class="saveUp-CardSubTitle">Another approach is the 80% rule, which recommends aiming to replace around 80% of your pre-retirement income during retirement. This accounts for reduced expenses in some areas but may require higher savings for others, such as healthcare and leisure activities.</div>
                                </div>
                            </div>
                        </div>
                        <div class="saveUp-cards">
                            <div class="saveUp-card">
                                <div class="saveUp-img">
                                    <div class="retire-ben rbi3"></div>
                                    <div class="saveUp-CardTitle">4% Rule</div>
                                    <div class="saveUp-CardSubTitle">The 4% rule is a popular retirement planning strategy that suggests withdrawing 4% of your retirement savings annually during retirement, adjusting for inflation. This rule aims to provide a sustainable income stream throughout retirement while preserving the longevity of savings. However, it's important to consider individual factors and consult with a financial advisor to determine the appropriate withdrawal rate for your specific situation.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <!-- <section id=" calculatingretirement">
            <div class="retirementCalcWork_bg1">
                <div class="container">
                    <h2 class="retirementCalcWork-title">Strategies to Invest for Early Retirement?</h2>
                    <p class="retirementCalcWork-desc">It is always important to start early investment to maximize your returns. Let us take a closer at some of the best strategies to invest for early retirement:</p>
                   
                    <div class="Steps">
                        <div class="stepsCont"><span class="ulipsprite ulipimgarrow"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Invest in Diversified Assets</h3>
                                <p class="ulip-desc">Spread your investments across a mix of asset classes such as stocks, bonds, real estate, and alternative investments to reduce risk and maximize returns over the long term.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite ulipimgarrow"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">Focus on Growth</h3>
                                <p class="ulip-desc">Prioritize investments with growth potential, such as stocks and equity funds, to build wealth faster and achieve your retirement goals sooner.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite ulipimgarrow"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps"> Consider Geographic Differences</h3>
                                <p class="ulip-desc">Take advantage of lower living costs in different geographic regions to stretch your retirement savings further and potentially retire earlier.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite ulipimgarrow"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps"> Pursue Passive Income Streams</h3>
                                <p class="ulip-desc">Invest in income-generating assets such as rental properties, dividend-paying stocks, or online businesses to supplement your retirement income and accelerate your path to early retirement.</p>
                            </div>
                        </div>
                        
                      
                    </div>


                   
                </div>
            </div>
        </section> -->

        <!-- <section id=" calculatingretirement">
            <div class="retirementCalcWork_bg1">
                <div class="container">
                    <h2 class="retirementCalcWork-title"> Factors to Consider if Your Calculated Retirement Savings Are Sufficient</h2>
                    <p class="retirementCalcWork-desc">It is important to know If your calculated retirement savings are sufficient enough to survive you through old days. Here are some factors to understand if your savings are sufficient: </p>
                   
                    <div class="Steps">
                        <div class="stepsCont"><span class="ulipsprite ulipimgarrow"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps"> Lifestyle Goals</h3>
                                <p class="ulip-desc">Using a retirement calculator, evaluate whether your retirement savings can support your desired lifestyle, including travel, hobbies, and other discretionary expenses.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite ulipimgarrow"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps"> Market Volatility</h3>
                                <p class="ulip-desc">Account for market fluctuations and economic uncertainties that could impact the growth of your retirement savings over time, and ensure you have a diversified portfolio to mitigate risk.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite ulipimgarrow"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps"> Inflation</h3>
                                <p class="ulip-desc">Factor in the impact of inflation on your purchasing power during retirement and adjust your savings accordingly to maintain your standard of living.</p>
                            </div>
                        </div>
                        <div class="stepsCont"><span class="ulipsprite ulipimgarrow"></span>
                            <div class="stepWarp">
                                <h3 class="ulip-steps">  Withdrawal Strategy</h3>
                                <p class="ulip-desc">Develop a sustainable withdrawal strategy for your retirement savings, such as the 4% rule, to ensure you can meet your income needs throughout retirement without depleting your savings too quickly. </p>
                            </div>
                        </div>
                        
                      
                    </div>


                   
                </div>
            </div>
        </section> -->

        <!-- <section id="planningCalc">
            <div class="planningCalc_bg1">
                <div class="container">
                    <div class="secWarp secwrap-justify">
                          <div class="buy-slick-card buy-slick-card-br">
                              <div class="d-flex">
                                <div class="mr-14">
                                  <div class="buy-imgs8">
            
                                  </div>
                                </div>
                                <div class="">
                                  <p class="p-txt"><a class="anchor" href="https://www.kotaklife.com/retirement-and-pension-plans/kotak-assured-pension"><span class="buy-tit">Kotak Assured Pension</span> <span class="buy-arrow"> </span></a></p>
                                  <p class="lcthree paramargin">A plan that offers immediate or deferred stream of income
            
                                  </p>
                                 
                                </div>
                              </div>
			            	   <div class="d-flex buy-online-links">
                                  
                                    <div>
                                      <a  href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-assured-pension" class="term-anc">Get Steady Income</a>
                                    </div>
                                  </div>
                            </div>
                              

                              <div class="buy-slick-card buy-slick-card-br">
                              <div class="d-flex">
                                <div class="mr-14">
                                  <div class="buy-imgs5">
            
                                  </div>
                                </div>
                                <div class="">
                                  <p class="p-txt"><a class="anchor" href="https://www.kotaklife.com/online-plans/retirement-pension-plans/kotak-lifetime-income-plan"><span class="buy-tit">Kotak Lifetime Income Plan</span> <span class="buy-arrow"> </span></a></p>
                                  <p class="lcthree paramargin">Retirement years are the golden years of life.
            
                                  </p>
                                 
                                </div>
                              </div>
			            	   <div class="d-flex buy-online-links">
                                  
                                    <div>
                                      <a href="https://www.kotaklife.com/buy-annuity-plan/#/landing" class="term-anc">Get Lifetime Income Now</a>
                                    </div>
                                  </div>
                            </div>


                    
                        
                    </div>
                </div>
            </div>
        </section> -->


        
        <!-- <section id="retirementConclusion">
            <div class="retirementConclusion_bg">
                <div class="container">
                    <h2 class="retirementConclusion_title">Wrapping up</h2>
                    <p class="retirementConclusion_text">Using a retirement calculator can also help individuals identify areas where they need to make adjustments to their current financial situation in order to achieve their retirement goals. For example, if the calculator indicates that they are not saving enough, they may choose to increase their savings rate or adjust their spending habits.</p><br>
                    <p class="retirementConclusion_text">It is important to note that a retirement calculator is just one tool in the retirement planning process. Other considerations, such as inflation, market fluctuations, and unforeseen expenses, can impact the accuracy of the calculations, so it is important to regularly revisit and adjust the calculations as circumstances change.</p><br>
                    <p class="retirementConclusion_text">Overall, a retirement calculator can provide individuals with a starting point for their retirement planning and help them make informed decisions about their financial future.</p>
                </div>
            </div>
        </section> -->
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
                  <a href="https://www.kotaklife.com/financial-tools-calculators/sip-calculator">
                   <div class="menu-icon c5"></div>
                    SIP <br> Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/bmi-calculator">
                   <div class="menu-icon c6"></div>
                    BMI <br> Calculator</a>
                </li>
                <li class="secondCard">
                  <a href="https://www.kotaklife.com/financial-tools-calculators/compound-interest-calculator">
                     <div class="menu-icon c3"></div>
                    Compound <br> Interest  Calculator</a>
                </li>
                <li class="secondCard">
                  <a href="https://www.kotaklife.com/financial-tools-calculators/rd-calculator">
                     <div class="menu-icon c8"></div>
                    RD <br>Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/fd-calculator">
                   <div class="menu-icon c9"></div>
                    FD <br> Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/gratuity-calculator">
                   <div class="menu-icon c10"></div>
                    Gratuity <br> Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/fd-calculator">
                   <div class="menu-icon c11"></div>
                    PPF <br> Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/dass-21-calculator">
                   <div class="menu-icon c9"></div>
                    DASS 21 <br> Calculator</a>
                </li>
               
              </ul>
             
            </div>
          </div>
        </section> 
        <section id="comppundFaq">
            <div class="container">
                <div class="accordSec">
                    <h2 class="accordTitle"> FAQs on Term Insurance Calculator</h2>
                    <div class="accordList">
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3><a href="javascript:void(0);"><span>1</span>What is a term insurance calculator?  </a></h3>
                            </div><span class="icon"></span>
                            <div class="accordDesc" style="display:none">
                                <p>A term insurance calculator is an online tool designed to help you determine the required coverage amount based on your specific needs. Easy to use, this calculator is highly beneficial when purchasing a term insurance plan.</p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3><a href="javascript:void(0);"><span>2</span> How accurate does a term insurance calculator provide the estimates? </a></h3>
                            </div><span class="icon"></span>
                            <div class="accordDesc" style="display:none">
                                <p>Term policy calculators provide fairly accurate estimates based on the input data. However, the final premium may vary slightly depending on the insurance provider's specific underwriting process.  </p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3><a href="javascript:void(0);"><span>3</span>Do I need to provide personal information to use a term insurance calculator? </a></h3>
                            </div><span class="icon"></span>
                            <div class="accordDesc" style="display:none">
                                <p>You typically need to input basic personal information such as age, gender, annual income, and number of dependents to get an accurate estimate.</p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3><a href="javascript:void(0);"><span>4</span>How does my age affect the premium calculated by the term insurance calculator?</a></h3>
                            </div><span class="icon"></span>
                            <div class="accordDesc" style="display:none">
                                <p>Your age is a significant factor; younger individuals usually get lower premiums since they are considered lower risk, while older individuals may have higher premiums due to increased risk. </p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3><a href="javascript:void(0);"><span>5</span>Can I include riders in my term insurance calculation? </a></h3>
                            </div><span class="icon"></span>
                            <div class="accordDesc" style="display:none">
                                <p>Yes, many term insurance calculators allow you to include riders, such as critical illness or accidental death benefits, to see how they affect your premium.  </p>
                                
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3><a href="javascript:void(0);"><span>6</span>Do term insurance calculators account for inflation?</a></h3>
                            </div><span class="icon"></span>
                            <div class="accordDesc" style="display:none">
                                <p>Typically, basic term insurance calculators do not directly account for inflation. However, some advanced calculators may offer options to factor in inflation or recommend increasing coverage over time.</p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3><a href="javascript:void(0);"><span>7</span> How frequently can I use the term insurance calculator? </a></h3>
                            </div><span class="icon"></span>
                            <div class="accordDesc" style="display:none">
                                <p>You can use the term policy calculator as often as you like. It’s available online 24/7, allowing you to run multiple scenarios to find the best coverage and premium that fit your needs.</p>
                            </div>
                        </div>
                       
                       
                       
                       
                    </div>
                </div>
            </div>
        </section>
      
    </div>
    <section class="terms new-terms pt-0" id="terms_conditions">
        <div class="midWrapper"><button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits &amp; Plan Disclaimer</button>
            <div class="content-col mb-0 tab-align li-disc terms-para">
                <h3 class="terms-conditions">Disclaimers</h3>
                <div class="disclamier-pera pt-0">
                    <p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS/FRADULENT OFFERS</b></p>
                    <p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
                    <p class="pl-0 mt-10">Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN : U66030MH2000PLC128503, Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400 051. Website: https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800.. https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800 | ARN No.: KLI/24-25/Comp/E-WEB/67</p>
                    <p class="pl-0 mt-10">Tax Benefits:</p>
                    <p>You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p>
                    <p class="pl-0 mt-10">Section 41-</p>
                    <p class="pl-0 mt-10">Extract of Section 41 of the Insurance Act, 1938 as amended from time to time states: (1) No person shall allow or offer to allow, either directly or indirectly, as an inducement to any person to take or renew or continue an insurance in respect of any kind of risk relating to lives or property in India, any rebate of the whole or part of the commission payable or any rebate of the premium shown on the policy, nor shall any person taking out or renewing or continuing a policy accept any rebate, except such rebate as may be allowed in accordance with the published prospectuses or tables of the insurer. (2) Any person making default in complying with the provisions of this section shall be liable for a penalty which may extend to ten lakhs rupees.</p>
                    <p class="pl-0 mt-10">Section 45-</p>
                    <p class="pl-0 mt-10"> Fraud and Misstatement would be dealt with in accordance with provisions of Section 45 of the Insurance Act, 1938 as amended from time to time. Please visit our website for more details: Read more about section38_39_45_of_insurance_act_1938. </p>
                    <p class="pl-0 mt-10">For Educational purpose only.</p>
                    <p class="pl-0 mt-10">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Limited under license</p>
                </div>
            </div>
        </div>
    </section>
</div><input name="pageNo" type="hidden" id="pageNo" value="0"> <input name="url" type="hidden" id="url" value="<?=$_SERVER['REQUEST_URI']?>"> <input name="sortType" type="hidden" id="sortType" value="recent"> <input name="pageLimit" type="hidden" id="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>"> <input name="searchArticle" type="hidden" id="searchArticle" value=""> <input name="pageType" type="hidden" id="pageType" value="topic"> <input name="topicSlug" type="hidden" id="topicSlug" value="retirement">
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

setTimeout(function(){
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
    },2000);
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

</script>
<script>
    
    function readMoreFD() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
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
