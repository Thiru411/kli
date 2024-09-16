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
  $moduleName = str_replace('-', ' ', $this->uri->segment(1)); $eventGA = 'event '.$moduleName.' articles'; $actionGA = $moduleName; //GA code Variables ?> <link rel="stylesheet" href="assets/css/global.css" />
<link rel="stylesheet" href="assets/css/investment.css" /><link rel="stylesheet" href="assets/css/vendor/rangeslider.css" />
<style>
    .calc-list {
        padding-left: 16px;
    }
    .calc-list li {
        font-size: 1.6rem;
        list-style: disc;
    }
    .invest-cal {
        padding-top: 0;
    }
    .breadcrumb-ulip {
        margin-top: 20px;
        padding-bottom: 1rem;
    }
    #HowtouseCalc {
        padding-top: 0;
    }
    @media only screen and (min-width: 1280px) {
    .buy-online-links{padding-left: 10rem !important;}
    }
</style>
<div class="interactionWrap investment">
    <div class="pageWrapper">
        <section id="investment_calculator">
            <div class="container">
                <ul class="breadcrumb-ulip">
                    <li><a href="https://www.kotaklife.com/">Home></a></li>
                    <li><a href="/financial-tools-calculators">Financial Tool Calculator ></a></li>
                    <li class="active"><a href="javascript:void(0);">ULIP Calculator</a></li>
                </ul>
                <p class="invest-cal">In ULIP, the investment risk in the investment portfolio is borne by the policyholder</p>
                <h1 class="section_heading">ULIP Calculator</h1>
                <div class="retirement_div ulipspace">
                    <p class="retirement_text">
                        ULIP stands for Unit Linked Insurance Plan. It is a type of investment product that combines life insurance coverage with investment opportunities. Unit Linked Insurance Plans are one of the popular investment
                        options for individuals who want to invest in equity and debt markets while also securing life insurance.<span id="dots">...</span>
                        <span class="retirement_text" id="more">
                            With a<a class="keyTakeAwayURL" href="https://www.kotaklife.com/insurance-guide/wealth-creation/what-is-lock-in-period-in-ulip">lock-in period</a>of 5 years, it offers excellent returns. To measure the returns,
                            you can use a ULIP calculator. The ULIP calculator enables comprehensive risk assessment, allowing individuals to gauge potential returns and benefits amidst market uncertainties.
                        </span>
                        <span style="color: #ed3237; cursor: pointer; font-weight: 600; font-size: 17px;" onclick="readMoreFD()" id="myBtn">Read more</span>
                    </p>
                </div>
                <div class="row cal-margin">
                    <div class="col-lg-7 m-no-padding">
                        <div class="card">
                            <div class="text_center">
                                <div class="radio_tabs">
                                    <input id="regularInvestment" type="radio" value="regularInvestment" name="investmentTabs" checked="checked" class="radio_tab" /><label for="regularInvestment">Regular Investment</label>
                                    <input id="oneTimeInvestment" type="radio" value="oneTimeInvestment" name="investmentTabs" class="radio_tab" /><label for="oneTimeInvestment">One-time Investment</label>
                                </div>
                            </div>
                            <div class="range-wrap">
                                <div class="goal-wrap">
                                    <p class="goal-title">Investment Amount<span class="sublabel sublableMonthly">(Monthly)</span></p>
                                    <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="amtInvestInput" name="monthly" type="text" value="1,00,000" maxlength="11" class="form-control comma" /></div>
                                </div>
                                <div class="slider-wrap"><input id="amtInvestRange" name="range" type="range" value="100000" min="1000" max="10000000" class="range-control" /></div>
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
                                    <div class="min"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 k</span></div>
                                    <div class="max"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 Cr</span></div>
                                </div>
                            </div>
                            <div class="range-wrap">
                                <div class="goal-wrap">
                                    <p class="goal-title">Investment Tenure<span class="sublabel">(Years)</span></p>
                                    <div class="input-wrap year-wrap"><input id="yearsInvestInput" name="years" type="text" value="10" maxlength="2" class="form-control" /><span>Years</span></div>
                                </div>
                                <div class="slider-wrap"><input id="yearsInvestRange" name="range" type="range" value="10" min="1" max="30" class="range-control" /></div>
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
                                    <div class="min"><span class="amount">1&nbsp;</span><span>Year</span></div>
                                    <div class="max"><span class="amount">30&nbsp;</span><span>Years</span></div>
                                </div>
                            </div>
                            <div class="range-wrap">
                                <div class="goal-wrap">
                                    <p class="goal-title">Interest Rate<span class="sublabel">(P.A.)</span></p>
                                    <div class="input-wrap percent-wrap"><input id="interestrateInput" name="intrest" type="text" value="8" maxlength="5" class="form-control" /><span>%</span></div>
                                </div>
                                <div class="slider-wrap"><input id="interestrateRange" name="rate" type="range" step="0.01" value="9" min="1" max="15" class="range-control" /></div>
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
                                    <div class="min"><span class="amount">1&nbsp;</span><span>%</span></div>
                                    <div class="max"><span class="amount">15&nbsp;</span><span>%</span></div>
                                </div>
                                <p class="note">Sensex has given 10% return from 2010 - 2020</p>
                            </div>
                            <div id="periodic_investment" class="range-wrap">
                                <div class="goal-wrap">
                                    <p class="goal-title">Existing Investment<span class="sublabel">(optional)</span></p>
                                    <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="periodicInput" name="investment" type="text" value="0" maxlength="11" class="form-control comma" /></div>
                                </div>
                                <div class="slider-wrap"><input id="periodicRange" name="range" type="range" value="0" min="0" max="10000000" class="range-control" /></div>
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
                                    <div class="min"><span class="rupee">&#8377;&nbsp;</span><span class="amount">0</span></div>
                                    <div class="max"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 Cr</span></div>
                                </div>
                            </div>
                            <div id="existing_investment" class="range-wrap">
                                <div class="goal-wrap">
                                    <p class="goal-title">Periodic Investment<span class="sublabel">(optional)</span></p>
                                    <div class="input-wrap">
                                        <span class="rupee">&#8377;&nbsp;</span><input id="extistingInvestmentInput" name="extistingInvestmentInput" type="text" value="0" maxlength="11" class="form-control comma" />
                                    </div>
                                </div>
                                <div class="slider-wrap"><input id="extistingInvestmentRange" name="extistingInvestmentRange" type="range" value="0" min="0" max="10000000" class="range-control" /></div>
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
                                    <div class="min"><span class="rupee">&#8377;&nbsp;</span><span class="amount">0</span></div>
                                    <div class="max"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 Cr</span></div>
                                </div>
                            </div>
                            <button id="calculate" name="calculate" class="btn_block btn_primary">Calculate</button>
                        </div>
                    </div>
                    <div class="col-lg-5 m-no-padding">
                        <div class="card card_middle">
                            <div class="card_body">
                                <h2 class="card_title">
                                    You may get<br />
                                    <span class="amt_return">&#8377;&nbsp;<span id="yourReturn"></span></span>
                                </h2>
                                <div class="investment_result">
                                    <p class="mb-0">
                                        If you invest&nbsp;<span class="invested_val"><b>&#8377;&nbsp;</b><span id="totalInvested"></span></span>&nbsp;<br />
                                    </p>
                                    <p class="oneTimeResult"><span class="regular_span">for&nbsp;</span><span class="years_val"></span>&nbsp;Years at&nbsp;<span id="percent_val"></span>% p.a.</p>
                                </div>
                                <div id="legend" class="legend_text"></div>
                                <canvas id="investment_chart" height="240" class="investment_chart"></canvas>
                                <a
                                    target="_blank"
                                    href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=calculators&utm_campaign=ulip&utm_content=investnow"
                                    class="btn_primary"
                                >
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="whatisulipsection">
            <div class="container">
                <div class="whatisulip">
                    <h2 class="ulip-title">What is the ULIP Calculator?</h2>
                    <p class="ulip-mainDesc a-ulip">
                        A ULIP calculator is a tool provided by insurance companies or financial institutions to help potential customers estimate the returns and benefits they can expect from investing in a ULIP. A ULIP or
                        <b>Unit Linked Insurance Plan calculator</b>is a valuable tool that aids in estimating the returns and benefits individuals can expect from investing in a ULIP. It is essential to comprehend the functionalities and
                        advantages of a ULIP calculator, particularly in risk assessment. It offers clarity on investment strategies, and tax planning insights, and aids in setting realistic expectations.
                    </p>
                </div>
            </div>
        </section>
        <section id="calculateUlip">
            <div class="calculateUlip_bg mb-30">
                <div class="container">
                    <h2 class="calculate_title">How to calculate your ULIP Investment Returns Online?</h2>
                    <p class="calculate_desc a-ulip">
                        Unit Linked Insurance Plans are one of the popular investment options for individuals who want to invest in equity and debt markets while also securing
                        <a class="keyTakeAwayURL" href="https://www.kotaklife.com/">life insurance.</a>However, understanding how to calculate ULIP investment returns can be a bit tricky, especially for those who are new to the investment
                        world. Here are the steps to follow to calculate ULIP returns online.
                    </p>
                    <div class="ulip_cards">
                        <div class="ulip_card">
                            <div class="ulipCard_head"><div class="ulipCard_steps">Step 1</div></div>
                            <div class="ulipCard_body">
                                <div class="ulipCard_title">Gather the Required Information</div>
                                <p class="ulipCard_desc">Before you start calculating your ULIP investment returns, you need to gather some essential information. The following are the details you need to have:</p>
                                <ul class="ul-lists">
                                    <li>The amount of premium paid</li>
                                    <li>The frequency of premium payment</li>
                                    <li>The total number of premiums paid</li>
                                    <li>The investment duration</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ulip_card">
                            <div class="ulipCard_head"><div class="ulipCard_steps">Step 2</div></div>
                            <div class="ulipCard_body">
                                <div class="ulipCard_title">Understand the Calculation Methodology</div>
                                <p class="ulipCard_desc">
                                    The returns on ULIPs are calculated based on the Net Asset Value (NAV) of the fund. The NAV is the value of the assets held by the fund minus its liabilities divided by the total number of units held by
                                    the investors.
                                </p>
                            </div>
                        </div>
                        <div class="ulip_card">
                            <div class="ulipCard_head"><div class="ulipCard_steps">Step 3</div></div>
                            <div class="ulipCard_body">
                                <div class="ulipCard_title ulipCard_title-mobile">Use Online Calculators</div>
                                <p class="ulipCard_body-desc">The calculator will then display the returns generated by the ULIP investment during the chosen period.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="hraTaxExemption">
            <div class="container">
                <h2 class="hraTaxExemption-title">Formula to Calculate ULIP Returns</h2>
                <p class="hraTaxExemption-desc">A<b>ULIP policy return calculator</b>is a useful tool for policyholders. There are two methods to measure your returns on the sum assured in ULIP:</p>
                <br />
                <h3 class="paraulip">1. Absolute returns</h3>
                <p class="hraTaxExemption-desc">This is the percentage increase in the total value of the ULIP, calculated after deducting expenses like management fees and operating charges.</p>
                <p class="paraulip">Absolute returns = [(Current value - Value at the time of purchase) / Value at the time of purchase] x 100</p>
                <p class="hraTaxExemption-desc">
                    For instance, if the value of your ULIP at the time of purchase was ₹250/-, and one year later it becomes ₹350/-, in this case, your absolute return is 40% in a year. This method is useful for a plan with a short tenure.
                </p>
                <h3 class="paraulip">2. CAGR (Compound Annual Growth Rate)</h3>
                <p class="hraTaxExemption-desc">The CAGR method helps evaluate the annual growth of your investment during a specific period. It assists in determining the rate of return received from your plan year on year.</p>
                <p class="paraulip">CAGR = {[(Current value / Value at the time of purchase) ^ (1 / number of years)] - 1} x 100</p>
                <p class="hraTaxExemption-desc">For instance, if the value of your ULIP at the time of purchase was ₹250/-, and after five years its value is ₹ 350/-, in this case, the CAGR is 6.96%.</p>
                <p class="hraTaxExemption-desc">Alternatively, you can also utilize an online ULIP plan returns calculator to, ease your earnings.</p>
            </div>
        </section>
        <section id="HowtouseCalc">
            <div class="container">
                <div class="secWarp">
                    <div class="leftSec">
                        <h2 class="ulip-title">How to Use the Kotak Life's Online ULIP Calculator?</h2>
                        <p class="ulip-mainDesc">Here is a breakdown of how to use Kotak Life's online ULIP calculator:</p>
                        <div class="Steps">
                            <div class="stepsCont">
                                <span><div class="investcalsprite investcaltick"></div></span>
                                <div class="stepWarp">
                                    <h3 class="ulip-steps">Step 1.</h3>
                                    <p class="ulip-desc">Visit the Kotak Life Website: Head to Kotak Life ULIP Calculator.</p>
                                </div>
                            </div>
                            <div class="stepsCont">
                                <span><div class="investcalsprite investcaltick"></div></span>
                                <div class="stepWarp">
                                    <h3 class="ulip-steps">Step 2.</h3>
                                    <p class="ulip-desc">Choose Your ULIP plan.</p>
                                </div>
                            </div>
                            <div class="stepsCont">
                                <span><div class="investcalsprite investcaltick"></div></span>
                                <div class="stepWarp">
                                    <h3 class="ulip-steps">Step 3.</h3>
                                    <p class="ulip-desc">Enter the amount you plan to invest regularly (monthly). And choose the desired duration of your ULIP policy (investment period). Adjust the interest rate.</p>
                                </div>
                            </div>
                            <div class="stepsCont">
                                <span><div class="investcalsprite investcaltick"></div></span>
                                <div class="stepWarp">
                                    <h3 class="ulip-steps">Step 4.</h3>
                                    <p class="ulip-desc once">
                                        Once you have entered your desired information, click the "Calculate" button. The calculator will provide an estimated maturity value based on your input, representing the total value of your
                                        investment at the end of the policy term, including potential growth. Always remember that a ULIP calculator provides an estimate. Actual returns may vary depending on market performance and chosen
                                        ULIP plan features. For a more personalized assessment, consider contacting Kotak Life or a financial advisor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rightSec">
                        <picture>
                            <source media="(min-width:767px)" srcset="assets/images/undraw-calculator.webp" />
                            <div class="investcalsprite investcal"></div>
                        </picture>
                    </div>
                </div>
                <div class="keyTakeAwaydesc">
                    <p class="keyTakeAway_text">
                        <a href="https://www.kotaklife.com/ulip-plans" class="keyTakeAwayURL">Unit Linked Insurance Plans,</a>popularly known as ULIPs, are a type of investment instrument that combines the features of both insurance and
                        investment. ULIPs are an attractive option for investors as they offer the twin benefits of life insurance coverage and long-term wealth creation.
                    </p>
                    <br />
                    <p class="keyTakeAway_text a-ulip">
                        However, one of the key challenges faced by investors is to choose the right ULIP plan that meets their investment objectives and risk appetite. This is where a ULIP calculator comes in handy. A ULIP calculator is an
                        online tool that helps investors calculate their premium payments and expected returns based on their investment horizon, risk, and financial goals.
                    </p>
                </div>
            </div>
        </section>
        <section class="whatisulipsection">
            <div class="container">
                <div class="whatisulipnew">
                    <h2 class="ulip-title">How Does ULIP Calculator Work?</h2>
                    <p class="ulip-mainDesc a-ulip">
                        ULIPs are a unique product that allows policyholders to invest in a variety of funds while also receiving life insurance coverage. ULIPs can be customized to suit an individual's investment goals and risk appetite.
                        However, before investing in a ULIP, it is essential to understand how the ULIP calculator works.
                    </p>
                    <p class="ulip-mainDesc">The ULIP calculator works in the following manner:</p>
                    <div>
                        <div class="ulipWork_steps">
                            <div class="ulipWork-step">
                                <div class="ulipWork_stepText">Step</div>
                                <div class="ulipWork_number">1</div>
                            </div>
                            <div class="ulipWork-stepContent">
                                <div class="ulipWork_stepTitle">Choosing the type of ULIP investment</div>
                                <div class="ulipWork_stepDesc">
                                    The first step in using the ULIP calculator is to select the type of ULIP investment that you wish to go ahead with. There are various types of ULIPs available, you can pick between regular or one-time
                                    investment. Each fund has its investment strategy and risk profile. You can choose the fund that best suits your investment goals and risk appetite.
                                </div>
                            </div>
                        </div>
                        <div class="ulipWork_steps">
                            <div class="ulipWork-step">
                                <div class="ulipWork_stepText">Step</div>
                                <div class="ulipWork_number">2</div>
                            </div>
                            <div class="ulipWork-stepContent">
                                <div class="ulipWork_stepTitle">Entering the premium amount</div>
                                <div class="ulipWork_stepDesc">
                                    Once you have selected the type of ULIP, the next step is to enter the premium amount that you wish to invest. The premium amount is the amount that you will pay regularly for the duration of the policy.
                                </div>
                            </div>
                        </div>
                        <div class="ulipWork_steps">
                            <div class="ulipWork-step">
                                <div class="ulipWork_stepText">Step</div>
                                <div class="ulipWork_number">3</div>
                            </div>
                            <div class="ulipWork-stepContent">
                                <div class="ulipWork_stepTitle">Enter interest rate</div>
                                <div class="ulipWork_stepDesc">Add the interest rate per annum</div>
                            </div>
                        </div>
                        <div class="ulipWork_steps">
                            <div class="ulipWork-step">
                                <div class="ulipWork_stepText">Step</div>
                                <div class="ulipWork_number">4</div>
                            </div>
                            <div class="ulipWork-stepContent">
                                <div class="ulipWork_stepTitle">Input investment tenure</div>
                                <div class="ulipWork_stepDesc">Enter the term or tenure for which you wish to opt the ULIP policy for.</div>
                            </div>
                        </div>
                        <div class="ulipWork_steps">
                            <div class="ulipWork-step">
                                <div class="ulipWork_stepText">Step</div>
                                <div class="ulipWork_number">5</div>
                            </div>
                            <div class="ulipWork-stepContent">
                                <div class="ulipWork_stepTitle">Estimating the returns</div>
                                <div class="ulipWork_stepDesc">
                                    The ULIP calculator or<b>ULIP maturity amount calculator</b>will use the premium amount, policy term, and other factors to estimate the returns on your investment. The returns will depend on the fund's
                                    performance and market conditions. The ULIP return calculator will provide a detailed analysis of the returns, including the expected return on investment.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="featureOfUlip">
            <div class="featureOfUlip_bg">
                <div class="container">
                    <h3 class="featureUlipTitle">Features of the ULIP Calculator</h3>
                    <p class="featureOfUlipDesc">ULIP calculator is a powerful tool that helps investors calculate the returns on their investments based on different parameters. Here are some features of the ULIP calculator:</p>
                    <div class="featureUlip_steps">
                        <div class="featureUlip_img"><div class="investcalsprite investcalamount"></div></div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Flexibility in Choosing Investment Amount</h3>
                            <div class="featureUlip_stepDesc">
                                Unit-linked insurance plan calculator provides flexibility in choosing the investment amount. Investors can input their preferred investment amount, and the calculator will help them determine the expected
                                returns based on the investment period and the rate of returns. Features
                            </div>
                        </div>
                    </div>
                    <div class="featureUlip_steps">
                        <div class="featureUlip_img"><div class="investcalsprite investcalease"></div></div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Ease of Use</h3>
                            <div class="featureUlip_stepDesc a-ulip">
                                The ULIP calculator is user-friendly and easy to use. Investors can simply input the necessary details, and the calculator will provide the expected returns in a matter of seconds. The calculator requires
                                basic details such as the investment amount, investment tenure, and the expected rate of returns.
                            </div>
                        </div>
                    </div>
                    <div class="featureUlip_steps">
                        <div class="featureUlip_img"><div class="investcalsprite investcaltenure"></div></div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Customizable Investment Tenure</h3>
                            <div class="featureUlip_stepDesc a-ulip">
                                ULIP calculator provides the option to choose the investment tenure. Investors can input their preferred investment period, and the calculator will provide the expected returns based on the investment tenure.
                            </div>
                        </div>
                    </div>
                    <div class="featureUlip_steps">
                        <div class="featureUlip_img"><div class="investcalsprite investcalreal"></div></div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Real-time Calculations</h3>
                            <div class="featureUlip_stepDesc">
                                ULIP calculator provides real-time calculations of expected returns. Investors can input different parameters such as investment amount, investment tenure, and expected rate of returns, and the calculator
                                will instantly provide the expected returns.
                            </div>
                        </div>
                    </div>
                    <div class="featureUlip_steps">
                        <div class="featureUlip_img"><div class="investcalsprite investcalplan"></div></div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Comparative Analysis</h3>
                            <div class="featureUlip_stepDesc a-ulip">
                                It also provides the option to compare different ULIP plans. Investors can input the details of different ULIP plans, and the calculator will provide a comparative analysis of the returns on investment for
                                each plan.
                            </div>
                        </div>
                    </div>
                    <div class="featureUlip_steps">
                        <div class="featureUlip_img"><div class="investcalsprite investcalplangoal"></div></div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Goal-based Planning</h3>
                            <div class="featureUlip_stepDesc">
                                With a ULIP calculator, you can compare the returns of your investments, which makes it easier to know how much you can gain by investing a certain amount in a particular investment. If you have decided to
                                buy a home after 8 years, a ULIP calculator will let you know the value of your investment after 8 years so that you can plan the purchase of your home easily.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="benefitsUlip">
            <div class="container">
                <h2 class="benefitsUlip-title">Benefits of a ULIP Calculator</h2>
                <p class="benefitsUlip-desc">
                    The<a href="https://www.kotaklife.com/ulip-plans/benefits-of-ulip" class="keyTakeAwayURL">benefits of ULIP</a>plans include the opportunity to grow their wealth while also protecting their loved ones in the event of an
                    unforeseen event. With the introduction of ULIP calculators, it has become easier for investors to determine the potential returns on their investments.
                </p>
                <div class="benefitsUlip-cards">
                    <div class="benefitsUlip-card">
                        <div class="benefitsUlip-img">
                            <div class="investcalsprite investaccurate"></div>
                            <h3 class="benefitsUlip-CardTitle">Accurate Calculation of Premiums</h3>
                            <div class="benefitsUlip-CardSubTitle">
                                One of the key benefits of using a ULIP calculator is that it allows individuals to calculate the premiums they need to pay accurately. This helps them plan their finances better and ensures that they do not
                                fall short of funds when it comes to paying their premiums.
                            </div>
                        </div>
                    </div>
                    <div class="benefitsUlip-card">
                        <div class="benefitsUlip-img">
                            <div class="investcalsprite investreturn"></div>
                            <h3 class="benefitsUlip-CardTitle">Understanding the Potential Returns</h3>
                            <div class="benefitsUlip-CardSubTitle a-ulip">
                                Another important benefit of using a ULIP return calculator is that it allows individuals to understand the potential returns on their investments. By inputting the investment amount, the investment period,
                                and the expected rate of return, investors can get an idea of the returns they can expect from their ULIP.
                            </div>
                        </div>
                    </div>
                    <div class="benefitsUlip-card">
                        <div class="benefitsUlip-img">
                            <div class="investcalsprite investdiff"></div>
                            <h3 class="benefitsUlip-CardTitle">Comparing Different ULIP Plans</h3>
                            <div class="benefitsUlip-CardSubTitle">
                                ULIP calculators also allow individuals to compare different ULIP plans offered by different insurers. By inputting the relevant details of each plan, investors can compare the premiums, returns, and charges
                                associated with each plan and choose the one that best suits their needs.
                            </div>
                        </div>
                    </div>
                    <div class="benefitsUlip-card">
                        <div class="benefitsUlip-img">
                            <div class="investcalsprite investcustom"></div>
                            <h3 class="benefitsUlip-CardTitle">Customization</h3>
                            <div class="benefitsUlip-CardSubTitle a-ulip">
                                ULIP return calculators also offer customization options, allowing investors to tweak the inputs to see how they will impact their potential returns. This helps investors to make an informed decision
                                regarding their investment.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="whyUseUlip">
            <div class="whyUseUlip_bg">
                <div class="container">
                    <h2 class="whyUseUlip-title">Why Use ULIP Calculator?</h2>
                    <p class="whyUseUlip-desc a-ulip">
                        Potential policyholders use a ULIP calculator to calculate the returns on their investments based on their financial goals and risks. The calculator takes into account various factors, such as the policyholder's age,
                        investment horizon, premium amount, fund allocation, and expected rate of return, to provide an estimate of the maturity value of the policy. The following are some reasons why you should use a
                        <b>ULIP calculator online</b>before investing in a ULIP.
                    </p>
                    <div class="whyUseUlip-cards">
                        <div class="whyUseUlip-card">
                            <div class="whyUseUlip-img"><div class="investcalsprite investright"></div></div>
                            <h3 class="whyUseUlip-CardTitle">Helps in Choosing the Right Plan</h3>
                            <div class="whyUseUlip-CardSubTitle">
                                By using the ULIP calculator, you can compare different plans offered by various insurance providers and choose the one that best fits your investment goals. The calculator also helps you understand the
                                impact of fund allocation on your investment returns, which can help you make informed decisions.
                            </div>
                        </div>
                        <div class="whyUseUlip-card">
                            <div class="whyUseUlip-img"><div class="investcalsprite investvalue"></div></div>
                            <h3 class="whyUseUlip-CardTitle">Provides Clarity on the Maturity Value</h3>
                            <div class="whyUseUlip-CardSubTitle">
                                A<b>ULIP calculator online</b>provides an estimate of the maturity value of the policy, which helps you plan your finances better. By knowing the approximate amount you will receive at the end of the policy
                                term, you can plan your investment strategy accordingly. This also helps you determine the premium amount that you can afford to pay and choose the policy term accordingly.
                            </div>
                        </div>
                        <div class="whyUseUlip-card">
                            <div class="whyUseUlip-img"><div class="investcalsprite investrisk"></div></div>
                            <h3 class="whyUseUlip-CardTitle">Helps in Tax Planning</h3>
                            <div class="whyUseUlip-CardSubTitle">
                                <a class="keyTakeAwayURL" href="ULIP plans">ULIP plans</a>offer tax benefits under Section 80C of the Income Tax Act. By using a ULIP return calculator, you can calculate the tax benefits you can avail of
                                based on the premium amount and policy term. This helps you plan your tax-saving investments more effectively.
                            </div>
                        </div>
                        <div class="whyUseUlip-card">
                            <div class="whyUseUlip-img"><div class="investcalsprite investallow"></div></div>
                            <h3 class="whyUseUlip-CardTitle">Allows for Realistic Expectations</h3>
                            <div class="whyUseUlip-CardSubTitle">
                                A ULIP calculator provides an estimate of the returns based on the expected rate of return on the investment. This helps you set realistic expectations about the returns you can expect from the policy. It is
                                important to note that ULIPs are market-linked and subject to market risks. Therefore, it is important to keep realistic expectations about the returns and invest accordingly.
                            </div>
                        </div>
                        <div class="whyUseUlip-card">
                            <div class="whyUseUlip-img"><div class="investcalsprite investrisk1"></div></div>
                            <h3 class="whyUseUlip-CardTitle">Helps in Risk Assessment</h3>
                            <div class="whyUseUlip-CardSubTitle">
                                One of the most critical aspects of using a ULIP calculator is its role in risk assessment. A ULIP calculator helps you assess your risk tolerance by allowing you to adjust parameters such as the type of
                                funds (equity, debt, or balanced) and the expected rate of return. Based on the results, you can decide whether the investment aligns with your risk tolerance or not. By simulating various market scenarios
                                and changing the parameters, you can stress-test your investment. This means you can see how your investment would perform in adverse market conditions.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="ulipCharges">
            <div class="container">
                <h2 class="ulipChargesTitle">ULIP charges you should know</h2>
                <p class="ulipChargesDesc">
                    ULIPs have gained popularity in recent years as they offer investors the opportunity to earn market-linked returns while also providing life insurance coverage. However, investors must be aware of the charges associated
                    with ULIPs. Here are some of the essential ULIP charges you should know before investing.
                </p>
                <div class="ulipCharges_steps">
                    <div class="ulipCharges_img"><div class="investcalsprite investcalease"></div></div>
                    <div class="ulipCharges-stepContent">
                        <h3 class="ulipCharges_stepTitle">Premium allocation charge</h3>
                        <div class="ulipCharges_stepDesc a-ulip">
                            A premium allocation charge is a fee deducted from the premium paid by the investor. This fee covers the initial expenses of the insurance company, including commissions paid to agents and the costs of issuing
                            the policy. This fee is usually a percentage of the premium paid, and it can range from 2% to 5% of the premium amount.
                        </div>
                    </div>
                </div>
                <div class="ulipCharges_steps">
                    <div class="ulipCharges_img"><div class="investcalsprite investfund"></div></div>
                    <div class="ulipCharges-stepContent">
                        <h3 class="ulipCharges_stepTitle">Fund management charge</h3>
                        <div class="ulipCharges_stepDesc a-ulip">
                            Fund management charges are fees charged by the insurance company to manage the funds invested in ULIPs. This fee is levied as a percentage of the total assets under management and is typically between 1% to 2.5%
                            per annum. This charge covers the cost of managing the funds, including research, administration, and fund management.
                        </div>
                    </div>
                </div>
                <div class="ulipCharges_steps">
                    <div class="ulipCharges_img"><div class="investcalsprite investcharge"></div></div>
                    <div class="ulipCharges-stepContent">
                        <h3 class="ulipCharges_stepTitle">Policy administration charge</h3>
                        <div class="ulipCharges_stepDesc a-ulip">
                            The insurance company levies policy administration charges to cover the expenses of maintaining the policy. This charge includes the cost of issuing premium notices, maintaining records, and providing customer
                            service. Policy administration charges are usually a fixed amount and can range from ₹100 to ₹250 per month.
                        </div>
                    </div>
                </div>
                <div class="ulipCharges_steps">
                    <div class="ulipCharges_img"><div class="investcalsprite investmorality"></div></div>
                    <div class="ulipCharges-stepContent">
                        <h3 class="ulipCharges_stepTitle">Mortality charge</h3>
                        <div class="ulipCharges_stepDesc a-ulip">
                            Mortality charges are fees charged by the insurance company to provide life insurance coverage. This fee is calculated based on the age, gender, and health of the policyholder. Mortality charges are usually
                            higher for older policyholders and those with pre-existing medical conditions.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="conclusion">
            <div class="conclusion_bg">
                <div class="container">
                    <h2 class="conclusion_title">Wrapping Up</h2>
                    <p class="conclusion_text a-ulip">
                        ULIP calculator is a powerful tool that can assist investors in making informed decisions when it comes to investing in ULIPs. This tool can help investors determine the amount of premium they need to pay, the
                        expected returns, and the potential risks involved. With a ULIP return calculator, investors can compare various ULIP plans and choose the one that best suits their financial goals and risk appetite.
                    </p>
                    <p class="conclusion_text a-ulip">
                        However, it is important to note that the results provided by the ULIP return calculator are based on certain assumptions and past performance and may not be an accurate representation of the future performance of
                        the ULIP plan.
                    </p>
                    <p class="conclusion_text a-ulip">
                        Therefore, investors should exercise caution and conduct thorough research before investing in ULIPs. Ultimately, the ULIP calculator can be a helpful tool to assist investors in making informed investment decisions,
                        but it should be used in conjunction with other research and analysis tools to make the best investment decision possible.
                    </p>
                </div>
            </div>
        </section>
        <section class="mt-30 mb-30">
            <div class="container">
                <h2 class="conclusion_title">Kotak Life &#39;s ULIP Plans</h2>
                <p class="conclusion_text a-ulip">
                    As one of the most popular insurance providers in the market, Kotak Life offers ULIP plans designed for growth, providing the potential for attractive returns alongside valuable life insurance coverage.
                </p>
            </div>
        </section>
        <section id="planningCalc">
            <div class="planningCalc_bg1">
                <div class="container">
                    <div class="secWarp secwrap-justify">
                        <div class="buy-slick-card buy-slick-card-br">
                            <div class="d-flex">
                                <div class="mr-14"><div class="buy-imgs3"></div></div>
                                <div class="">
                                    <p class="p-txt">
                                        <a class="anchor" href="https://www.kotaklife.com/ulip-plans/kotak-e-invest"><span class="buy-tit">Kotak e-Invest</span><span class="buy-arrow"></span></a>
                                    </p>
                                    <p class="lcthree paramargin">Insurance and Investment in one plan.</p>
                                    <div class="d-flex buy-online-links">
                                        <div>
                                            <a
                                                href="https://www.kotaklife.com/life-insurance-plans/#/buy-e-invest-ulip-plan-online?utm_source=ulip_organic&utm_medium=website&utm_campaign=ulip-calculator&utm_content=get-your-term-plan-now"
                                                class="term-anc"
                                            >
                                                Get Your Term Plan Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buy-slick-card buy-slick-card">
                            <div class="d-flex">
                                <div class="mr-14"><div class="buy-imgs"></div></div>
                                <div class="mb-10">
                                    <p class="p-txt">
                                        <a class="anchor" href="https://www.kotaklife.com/ulip-plans/kotak-tulip"><span class="buy-tit">Kotak T.U.L.I.P</span><span class="buy-arrow"></span></a>
                                    </p>
                                    <p class="lcthree paramargin">A plan that works like a term plan, and Earns like ULIP Plan.</p>
                                    <div class="d-flex buy-online-links">
                                        <div>
                                            <a
                                                class="term-anc"
                                                href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-tulip/landing?utm_source=tulip_organic&utm_medium=website&utm_campaign=ulip-calculator&utm_content=get-kotak-tulip-now"
                                            >
                                                Get Kotak T.U.L.I.P Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="otherCalc">
            <div class="midWrapper">
                <div class="otherCalcCard">
                    <h3 class="otherClass">Check Out Our Other Calculators</h3>
                    <p class="otherClassDesc">Financial well-being starts with a plan. You can check out more financial tools and calculators to get a head start in your financial journey.</p>
                    <span class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>
                    <ul class="calculatorCardList ulipslick">
                        <li>
                            <a href="https://www.kotaklife.com/financial-tools-calculators/hra-calculator">
                                <div class="menu-icon c7"></div>
                                HRA<br />
                                Calculator
                            </a>
                        </li>
                        <li>
                            <a href="https://www.kotaklife.com/financial-tools-calculators/sip-calculator">
                                <div class="menu-icon c5"></div>
                                SIP<br />
                                Calculator
                            </a>
                        </li>
                        <li>
                            <a href="https://www.kotaklife.com/financial-tools-calculators/retirement-calculator">
                                <div class="menu-icon c4"></div>
                                Retirement<br />
                                Calculator
                            </a>
                        </li>
                        <li>
                            <a href="https://www.kotaklife.com/financial-tools-calculators/bmi-calculator">
                                <div class="menu-icon c6"></div>
                                BMI<br />
                                Calculator
                            </a>
                        </li>
                        <li class="secondCard">
                            <a href="https://www.kotaklife.com/financial-tools-calculators/rd-calculator">
                                <div class="menu-icon c9"></div>
                                RD<br />
                                Calculator
                            </a>
                        </li>
                        <li class="secondCard">
                            <a href="https://www.kotaklife.com/financial-tools-calculators/compound-interest-calculator">
                                <div class="menu-icon c3"></div>
                                Compound<br />
                                Interest Calculator
                            </a>
                        </li>
                        <li>
                            <a href="https://www.kotaklife.com/financial-tools-calculators/fd-calculator">
                                <div class="menu-icon c8"></div>
                                FD<br />
                                Calculator
                            </a>
                        </li>
                        <li>
                            <a href="https://www.kotaklife.com/financial-tools-calculators/gratuity-calculator">
                                <div class="menu-icon c10"></div>
                                Gratuity<br />
                                Calculator
                            </a>
                        </li>
                        <li>
                            <a href="https://www.kotaklife.com/financial-tools-calculators/ppf-calculator">
                                <div class="menu-icon c11"></div>
                                PPF<br />
                                Calculator
                            </a>
                        </li>
                        <li>
                            <a href="https://www.kotaklife.com/financial-tools-calculators/dass-21-calculator">
                                <div class="menu-icon c12"></div>
                                DASS 21<br />
                                Calculator
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="comppundFaq">
            <div class="container">
                <div class="accordSec">
                    <h2 class="accordTitle">FAQs on ULIP Calculator</h2>
                    <div class="accordList">
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3>
                                    <a href="javascript:void(0);"><span>1</span>Can I purchase a ULIP offline after using the online ULIP calculator?</a>
                                </h3>
                            </div>
                            <span class="icon"></span>
                            <div class="accordDesc" style="display: none;"><p>Yes, you can purchase a Unit Linked Insurance Plan (ULIP) offline after using the online ULIP calculator.</p></div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3>
                                    <a href="javascript:void(0);"><span>2</span>Are ULIPs a good investment?</a>
                                </h3>
                            </div>
                            <span class="icon"></span>
                            <div class="accordDesc" style="display: none;">
                                <p>
                                    ULIPs can be a good investment option for individuals seeking to combine insurance coverage with market-linked investment opportunities. They offer flexibility, tax benefits, and the potential for higher
                                    returns.
                                </p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3>
                                    <a href="javascript:void(0);"><span>3</span>How is the Net Asset Value of a ULIP calculated?</a>
                                </h3>
                            </div>
                            <span class="icon"></span>
                            <div class="accordDesc" style="display: none;">
                                <p>
                                    ULIP Net Asset Value (NAV) is calculated by adding up the total ULIP fund holdings on a particular date or else on all the passable expenses (operating cost, management fees, marketing, and other charges
                                    and expenses). The net amount will be divided by the number of units held in the ULIP plan to arrive at a net asset value (NAV) per unit.
                                </p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3>
                                    <a href="javascript:void(0);"><span>4</span>Will the ULIP calculator also calculate the rider premiums?</a>
                                </h3>
                            </div>
                            <span class="icon"></span>
                            <div class="accordDesc" style="display: none;">
                                <p>
                                    Some ULIP calculators may include the option to factor in rider premiums when calculating the total cost and benefits of a ULIP policy. In these cases, the calculator would typically ask the user to input
                                    the details of the desired rider, such as the type of rider, the sum assured, and the term, and then calculate the additional premium required to add the rider to the policy.
                                </p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3>
                                    <a href="javascript:void(0);"><span>5</span>Does the ULIP investment calculator also calculate the life insurance coverage?</a>
                                </h3>
                            </div>
                            <span class="icon"></span>
                            <div class="accordDesc" style="display: none;">
                                <p>
                                    Yes, the ULIP investment calculator typically calculates the life insurance cover in addition to the investment returns. A ULIP (Unit Linked Insurance Plan) is a financial product that combines both
                                    investment and insurance features.
                                </p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3>
                                    <a href="javascript:void(0);"><span>6</span>Is the mortality charge deducted for the entire duration of the plan?</a>
                                </h3>
                            </div>
                            <span class="icon"></span>
                            <div class="accordDesc" style="display: none;">
                                <p>
                                    It depends on the specific insurance plan and its terms and conditions. A mortality charge is a fee that life insurance companies charge to cover the cost of providing coverage based on the probability of
                                    the insured person's death. This charge is calculated based on various factors such as age, gender, health status, and lifestyle habits of the insured.
                                </p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3>
                                    <a href="javascript:void(0);"><span>7</span>Is ULIP Investment Tax-Free?</a>
                                </h3>
                            </div>
                            <span class="icon"></span>
                            <div class="accordDesc" style="display: none;">
                                <p>
                                    ULIP investments are not entirely tax-free; only the maturity benefits are tax-exempt under Section 10(10D) of the Income Tax Act, subject to certain conditions. However, premium payments up to ₹1.5 lakh
                                    are eligible for tax deductions under Section 80C.
                                </p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3>
                                    <a href="javascript:void(0);"><span>8</span>Are ULIP Investments Risky?</a>
                                </h3>
                            </div>
                            <span class="icon"></span>
                            <div class="accordDesc" style="display: none;">
                                <p>
                                    ULIP investments carry market risks as they are linked to the market. However, they provide life cover along with investment opportunities. Risk varies based on the type of funds chosen—equity, debt, or
                                    balanced—allowing investors to tailor their investments to their risk appetite.
                                </p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks">
                                <h3>
                                    <a href="javascript:void(0);"><span>9</span>What is the meaning of ULIP Fund Value?</a>
                                </h3>
                            </div>
                            <span class="icon"></span>
                            <div class="accordDesc" style="display: none;">
                                <p>
                                    The ULIP fund value represents the total value of your investment in the funds chosen under ULIP, reflecting market performance and deductions for charges. It indicates the current worth of your
                                    investment portfolio, offering a clear insight into your investment's performance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="term-blog ulip-blogs" id="ulip_blog">
            <div class="midWrapper">
                <div class="term-blog">
                    <h2 class="mb-20 term-tags fnt-24">Wealth Creation Related Blogs</h2>
                    <?php
        //GA code Variables
        $eventGA  =   'event '.$moduleName.' most';
        //$labelGA  =   'read more|glossary';
        //GA code Variables
      ?>
                    <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div"></ul>
                    <?php
        //GA code Variables
        $eventGA  =   'event '.$moduleName.' load';
        $labelGA  =   'load more';
        //GA code Variables
      ?>
                    <div class="noRecord"></div>
                    <div class="innerLoader"><img src="assets/images/loader.gif" alt="Kotak Loader" /></div>
                </div>
            </div>
        </section>
        <section class="terms new-terms" id="terms_conditions">
            <div class="midWrapper">
                <button type="button" name="disclaimer" class="collapsible terms-txt whitespace-initial">Read about Tax benefits &amp; Plan Disclaimer</button>
                <div class="content-col mb-0 tab-align li-disc terms-para">
                    <h3 class="terms-conditions">Disclaimers-</h3>
                    <div class="disclamier-pera pt-0">
                        <p class="pl-0">
                            You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is
                            advised to take an independent view from tax consultant
                        </p>
                        <br />
                        <p class="pl-0">
                            The calculation is generated on the basis of information provided and does not constitute an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the advised to go through
                            the sales brochure before conducting any sale. ARN No:KLI/24-25/E-WB/639
                        </p>
                        <br />
                        <p class="pl-0">
                            The Linked Insurance Products do not offer any liquidity during the first five years of the contract. The policyholder will not be able to surrender/withdraw the monies invested in Linked Insurance Products
                            completely or partially till the end of the fifth year
                        </p>
                        <br />
                        <p class="pl-0">Linked Life Insurance products are different from the traditional insurance products and are subject to the risk factors.</p>
                        <br />
                        <p class="pl-0">
                            The premiums paid in Linked Life Insurance policies are subject to investment risks associated with capital markets and the NAVs of the units may go up or down based on the performance of fund and factors
                            influencing the capital market and the insured is responsible for his/her decisions. Please know the associated risks and the applicable charges (along with the possibility of increase in charges), from your
                            Insurance agent or the Intermediary or policy document of the insurer.
                        </p>
                        <br />
                        <br />
                        <p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS/FRADULENT OFFERS</b></p>
                        <p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
                        <p class="pl-0 mt-10">
                            Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN : U66030MH2000PLC128503, Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400 051. Website: https://www.kotaklife.com,
                            |Whatsapp:9321003007 |Toll free No: 1800 209 8800. https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800.
                        </p>
                        <p class="pl-0 mt-10">For Educational purpose only.</p>
                        <p class="pl-0 mt-10">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Limited under license</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<input type="hidden" id="pageNo" value="0" /> <input type="hidden" id="url" value="<?=$_SERVER['REQUEST_URI']?>" /> <input type="hidden" id="sortType" value="recent" />
<input type="hidden" id="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>" /> <input type="hidden" id="searchArticle" value="" /> <input type="hidden" id="pageType" value="topic" />
<input type="hidden" id="topicSlug" value="wealth-creation" /> <input type="hidden" id="url" value="<?php echo $this->uri->segment('1'); ?>/<?php echo $this->uri->segment('2'); ?>" />
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" language="javascript"></script>
<script>
    var acc = document.getElementsByClassName("collapsible");
    var i;
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    //lazy load
    document.addEventListener("DOMContentLoaded", function () {
        const imageObserver = new IntersectionObserver((entries, imgObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target;
                    // console.log("lazy loading ", lazyImage);
                    lazyImage.src = lazyImage.dataset.src;
                }
            });
        });
        const arr = document.querySelectorAll("img.lzy_img");
        arr.forEach((v) => {
            imageObserver.observe(v);
        });
    });
</script>
<script>
    setTimeout(function () {
        if (
            ($(".ulipslick").slick({
                infinite: !1,
                arrows: !0,
                dots: !1,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{ breakpoint: 1024, settings: { slidesToShow: 2, slidesToScroll: 1 }, breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } }],
            }),
            768 < $(window).width())
        ) {
            var l = $(".pagingInfo-facslick");
            $(".ulipslick").on("init reInit afterChange", function (s, i, n, o) {
                var t = (n || 0) + 1;
                l.html('<span class="finished_count">' + (t + 3) + '</span><span class="total_count">/' + i.slideCount + "</span>");
            });
        }
        $(window).width() < 768 &&
            ((l = $(".pagingInfo-facslick")),
            $(".ulipslick").on("init reInit afterChange", function (s, i, n, o) {
                var t = (n || 0) + 1;
                l.html('<span class="finished_count">' + (t + 0) + '</span><span class="total_count">/' + i.slideCount + "</span>");
            }));
    }, 2e3);
</script>
<script>
    function readMoreFD() {
        var e = document.getElementById("dots"),
            n = document.getElementById("more"),
            t = document.getElementById("myBtn");
        "none" === e.style.display
            ? ((e.style.display = "inline"), (t.innerHTML = "Read more"), (n.style.display = "none"), n.classList.remove("active"))
            : ((e.style.display = "none"), (t.innerHTML = " Read less"), (n.style.display = "inline"), n.classList.add("active"));
    }
</script>
