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
?> <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How is ULIP calculator helpful for online or offline purchases?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "An online <b>ULIP calculator</b> saves you a lot of time, making it easier and flexible to access at any time. The <b>ULIP calculator</b> is more profitable with its easily available tools for online purchases, along with making a quick comparison."
            }
        }, {
            "@type": "Question",
            "name": "How is ULIP calculated?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You’ll find two different ways to check your ULIP returns:

                Absolute returns: This is the percentage increase in the total value of the ULIP.The total value is measured once expenses like operating fees and management charges are deducted.
                Absolute returns = [(Current value - Value at the time of purchase) / Value at the time of purchase] x 100

                CAGR(Compound Annual Growth Rate): The CAGR method helps in evaluating the annual growth of your investment during a specific period.This,
                in turn,
                assist you to determine the rate of
                return you can receive from your plan year after year.
                CAGR = {
                    [(Current value / Value at the time of purchase) ^ (1 / number of years)] - 1
                }
                x 100 "
            }
        }, {
            "@type": "Question",
            "name": "Can I withdraw ULIP after 5 years?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "ULIP is a long-term investment game. You can exit from ULIP after 5 years; though, it is not advisable even after lock-in period ends. To gain the benefits, you should continue and stay invested for a long period of 15-20 years. If you think that the funds are not performing well, you can switch your funds. You can always cross-examine the returns with the aid of an ULIP maturity amount calculator."
            }
        }, {
            "@type": "Question",
            "name": "How much return does ULIP give?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Financial experts’ advice, that you should stay invested in the ULIP policy for at least 10 years, and reap an annual return of 10-12%, even if your ULIP plan is an average one. This makes ULIPs an ideal investment when it comes to long-term investing. When you invest for a longer tenure like 10 years, any short-term market losses can be absorbed by this policy. This eventually, brings and produces higher returns in the long run which you can examine via a ULIP return calculator."
            }
        }, {
            "@type": "Question",
            "name": "What is the minimum and maximum premium payment term available in ULIP?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can choose to pay either for a limited period or regularly. For the Limited Pay option, the premium payment term is limited to 5, 7, and 10 years. For the Regular Pay option, the premium payment term is the same as the policy term. In addition, for the Whole Life option, you can only choose to pay for a limited period of 7, 10, and 15 years."
            }
        }, {
            "@type": "Question",
            "name": "How ULIP NAV is calculated?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "ULIP Net Asset Value (NAV) is calculated by adding up the total ULIP fund holdings on a particular date or else on all the passable expenses (operating cost, management fees, marketing, and other charges and expenses). The net amount will be divided by the number of units held in the ULIP plan to arrive at a net asset value (NAV) per unit."
            }
        }, {
            "@type": "Question",
            "name": "How to calculate ULIP manually in Excel?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You’ll find two different ways to check your ULIP returns:

                Absolute returns: This is the percentage increase in the total value of the ULIP.The total value is measured once expenses like operating fees and management charges are deducted.
                Absolute returns = [(Current value - Value at the time of purchase) / Value at the time of purchase] x 100

                CAGR(Compound Annual Growth Rate): The CAGR method helps in evaluating the annual growth of your investment during a specific period.This,
                in turn,
                assist you to determine the rate of
                return you can receive from your plan year after year.
                CAGR = {
                    [(Current value / Value at the time of purchase) ^ (1 / number of years)] - 1
                }
                x 100 "
            }
        }]
    }

</script>
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/investment.css">
<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">
<link rel="stylesheet" href="assets/css/fd-calculator.css">
<style>
    .calc-list {
        padding-left: 16px
    }

    .calc-list li {
        font-size: 1.6rem;
        list-style: disc
    }

    .invest-cal {
        padding-top: 0
    }

    .breadcrumb-ulip {
        margin-top: 20px;
        padding-bottom: 1rem
    }

    #HowtouseCalc {
        padding-top: 0
    }

</style>
<div class="interactionWrap investment">
    <div class="pageWrapper">
        <section id="investment_calculator">
            <div class="container">
                <ul class="breadcrumb-ulip">
                    <li><a href="<?=base_url()?>">Home></a></li>
                    <li><a href="javascript:void(0);">Financial Tool Calculator ></a></li>
                    <li class="active"><a href="javascript:void(0);">ULIP Calculator</a></li>
                </ul>
                <p class="invest-cal">In ULIP, the investment risk in the investment portfolio is borne by the policyholder</p>
                <h1 class="section_heading">Investment Calculator</h1>
                <div class="row cal-margin">
                    <div class="col-lg-7 m-no-padding">
                        <div class="card">
                            <div class="text_center">
                                <div class="radio_tabs"><input id="regularInvestment" type="radio" value="regularInvestment" name="investmentTabs" checked="checked" class="radio_tab"><label for="regularInvestment">Regular Investment</label><input id="oneTimeInvestment" type="radio" value="oneTimeInvestment" name="investmentTabs" class="radio_tab"><label for="oneTimeInvestment">One-time Investment</label></div>
                            </div>
                            <div class="range-wrap">
                                <div class="goal-wrap">
                                    <p class="goal-title">Investment Amount<span class="sublabel sublableMonthly">(Monthly)</span></p>
                                    <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="amtInvestInput" name="monthly" type="text" value="1,00,000" maxlength="11" class="form-control comma"></div>
                                </div>
                                <div class="slider-wrap"><input id="amtInvestRange" name="range" type="range" value="100000" min="1000" max="10000000" class="range-control"></div>
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
                                    <div class="input-wrap year-wrap"><input id="yearsInvestInput" name="years" type="text" value="10" maxlength="2" class="form-control"><span>Years</span></div>
                                </div>
                                <div class="slider-wrap"><input id="yearsInvestRange" name="range" type="range" value="10" min="1" max="30" class="range-control"></div>
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
                                    <div class="input-wrap percent-wrap"><input id="interestrateInput" name="intrest" type="text" value="8" maxlength="5" class="form-control"><span>%</span></div>
                                </div>
                                <div class="slider-wrap"><input id="interestrateRange" name="rate" type="range" step="0.01" value="9" min="1" max="15" class="range-control"></div>
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
                                    <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="periodicInput" name="investment" type="text" value="0" maxlength="11" class="form-control comma"></div>
                                </div>
                                <div class="slider-wrap"><input id="periodicRange" name="range" type="range" value="0" min="0" max="10000000" class="range-control"></div>
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
                                    <div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span><input id="extistingInvestmentInput" name="extistingInvestmentInput" type="text" value="0" maxlength="11" class="form-control comma"></div>
                                </div>
                                <div class="slider-wrap"><input id="extistingInvestmentRange" name="extistingInvestmentRange" type="range" value="0" min="0" max="10000000" class="range-control"></div>
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
                            </div><button id="calculate" name="calculate" class="btn_block btn_primary">Calculate</button>
                        </div>
                    </div>
                    <div class="col-lg-5 m-no-padding">
                        <div class="card card_middle">
                            <div class="card_body">
                                <h2 class="card_title">You may get<br><span class="amt_return">&#8377;&nbsp;<span id="yourReturn"></span></span></h2>
                                <div class="investment_result">
                                    <p class="mb-0">If you invest&nbsp;<span class="invested_val"><b>&#8377;&nbsp;</b><span id="totalInvested"></span></span>&nbsp;<br></p>
                                    <p class="oneTimeResult"><span class="regular_span">for&nbsp;</span><span class="years_val"></span>&nbsp;Years at&nbsp;<span id="percent_val"></span>% p.a.</p>
                                </div>
                                <div id="legend" class="legend_text"></div><canvas id="investment_chart" height="240" class="investment_chart"></canvas><a target="_blank" href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=calculators&utm_campaign=ulip&utm_content=investnow" class="btn_primary">Invest Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="HowtouseCalc">
            <div class="container">
                <div class="secWarp">
                    <div class="leftSec">
                        <h2 class="ulip-title">How to Use ULIP Calculator?</h2>
                        <p class="ulip-mainDesc">ULIPs come with different features and benefits, making it difficult for individuals to select the right plan. This is where a ULIP calculator comes in handy. Here are the steps to use a unit-linked insurance plan calculator.
</p>
                        <div class="Steps">
                            <div class="stepsCont">
                                <span>
                                    <img src="assets/images/calculator/ulip/tick.svg" width="36px" height="36" alt="tick">
                                </span>
                                <div class="stepWarp">
                                    <h3 class="ulip-steps">Visit the Website</h3>
                                    <p class="ulip-desc">To use a ULIP calculator online, the first step is to visit the website for the ULIP calculator option.</p>
                                </div>
                            </div>
                            <div class="stepsCont">
                                <span>
                                    <img src="assets/images/calculator/ulip/tick.svg" width="36px" height="36" alt="tick">
                                </span>
                                <div class="stepWarp">
                                    <h3 class="ulip-steps">Enter Basic Details</h3>
                                    <p class="ulip-desc">The next step is to enter your basic details and the premium amount you are willing to invest.</p>
                                </div>
                            </div>
                            <div class="stepsCont">
                                <span>
                                    <img src="assets/images/calculator/ulip/tick.svg" width="36px" height="36" alt="tick">
                                </span>
                                <div class="stepWarp">
                                    <h3 class="ulip-steps">Click Calculate</h3>
                                    <p class="ulip-desc">Finally, its time to check your result. You can use the calculator again to view different results with varied amounts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rightSec">
                        <picture>
                            <source media="(min-width:767px)" srcset="assets/images/undraw-calculator.webp">
                            <img src="assets/images/undraw-calculator.webp" alt="ulip calculator online" title="ulip calculator"  width="100%" height="100%">
                        </picture>
                    </div>
                </div>
                <div class="keyTakeAwaydesc">
                    <p class="keyTakeAway_text"><a href="https://www.kotaklife.com/ulip-plans" class="keyTakeAwayURL">Unit Linked Insurance Plans,</a> popularly known as ULIPs, are a type of investment instrument that combines the features of both insurance and investment. ULIPs are an attractive option for investors as they offer the twin benefits of life insurance coverage and long-term wealth creation. </p>
                    <br>
                    <p class="keyTakeAway_text">However, one of the key challenges faced by investors is to choose the right ULIP plan that meets their investment objectives and risk appetite. This is where a ULIP calculator comes in handy. A ULIP calculator is an online tool that helps investors calculate their premium payments and expected returns based on their investment horizon, risk, and financial goals.</p>
                </div>
            </div>
        </section>
        <!--<section id="keyTakeAway">
        <div class="container">
          <div class="secWarp">
            <div class="leftSec">
              <picture>
              <source media="(min-width:767px)" srcset="./assets/ulip-takeaway.svg">
              <img src="./assets/ulip-takeaway.svg" alt="compundImg">
            </picture>
            </div>
            <div class="rightSec">
              <h2 class="takeAwayTitle">Key takeaways</h2>
              <ul>
                <li>A ULIP calculator is an online tool that helps potential policyholders calculate the returns on their investment based on their financial goals and risk appetite.</li>
                <li>A ULIP calculator online provides an estimate of the maturity value of the policy, which helps you plan your finances better.</li>
                <li>ULIPs offer tax benefits under Section 80C of the Income Tax Act along with a wide range of benefits and flexibility that make them an attractive investment option.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>-->
        <section id="calculateUlip">
            <div class="calculateUlip_bg">
                <div class="container">
                    <h2 class="calculate_title">How to calculate your ULIP Investment Returns Online?</h2>
                    <p class="calculate_desc">Unit Linked Insurance Plans are one of the popular investment options for individuals who want to invest in equity and debt markets while also securing <a class="keyTakeAwayURL" href="https://www.kotaklife.com/">life insurance.</a> However, understanding how to calculate ULIP investment returns can be a bit tricky, especially for those who are new to the investment world. Here are the steps to follow to calculate ULIP returns online. 
</p>
                    <div class="ulip_cards">
                        <div class="ulip_card">
                            <div class="ulipCard_head">
                                <div class="ulipCard_steps">Step 1</div>
                               
                            </div>
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
                            <div class="ulipCard_head">
                                <div class="ulipCard_steps">Step 2</div>
                                
                            </div>
                            <div class="ulipCard_body">
                                <div class="ulipCard_title">Understand the Calculation Methodology</div>
                                <p class="ulipCard_desc">The returns on ULIPs are calculated based on the Net Asset Value (NAV) of the fund. The NAV is the value of the assets held by the fund minus its liabilities divided by the total number of units held by the investors.</p>
                            </div>
                        </div>
                        <div class="ulip_card">
                            <div class="ulipCard_head">
                                <div class="ulipCard_steps">Step 3</div>
                               
                            </div>
                            <div class="ulipCard_body">
                                <div class="ulipCard_title ulipCard_title-mobile">Use Online Calculators</div>
                                
                                <p class="ulipCard_body-desc">The calculator will then display the returns generated by the ULIP investment during the chosen period.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="ulipWork">
            <div>
                <div class="container">
                    <h2 class="ulipWork_title">How does the ULIP calculator work?</h2>
                    <p class="ulipWork-desc">ULIPs are a unique product that allows policyholders to invest in a variety of funds while also receiving life insurance coverage. ULIPs can be customized to suit an individual's investment goals and risk appetite. However, before investing in a ULIP, it is essential to understand how the ULIP calculator works.</p>
                    <br>
                    <p class="ulipWork-desc">The ULIP calculator works in the following manner:</p>
                    <div class="ulipWork_steps">
                        <div class="ulipWork-step">
                            <div class="ulipWork_stepText">Step</div>
                            <div class="ulipWork_number">1</div>
                        </div>
                        <div class="ulipWork-stepContent">
                            <div class="ulipWork_stepTitle">Choosing the type of ULIP</div>
                            <div class="ulipWork_stepDesc">The first step in using the ULIP calculator is to select the type of ULIP that you wish to invest in. There are various <a target="_blank" class="keyTakeAwayURL" href="https://www.kotaklife.com/insurance-guide/wealth-creation/type-of-ulip-investments-in-india">types of ULIPs</a> available. Each fund has its own investment strategy and risk profile. You can choose the fund that best suits your investment goals and risk appetite.</div>
                        </div>
                    </div>
                    <div class="ulipWork_steps">
                        <div class="ulipWork-step">
                            <div class="ulipWork_stepText">Step</div>
                            <div class="ulipWork_number">2</div>
                        </div>
                        <div class="ulipWork-stepContent">
                            <div class="ulipWork_stepTitle">Entering the premium amount</div>
                            <div class="ulipWork_stepDesc">Once you have selected the type of ULIP, the next step is to enter the premium amount that you wish to invest. The premium amount is the amount that you will pay regularly, either monthly, quarterly, or annually, for the duration of the policy.</div>
                        </div>
                    </div>
                    <div class="ulipWork_steps">
                        <div class="ulipWork-step">
                            <div class="ulipWork_stepText">Step</div>
                            <div class="ulipWork_number">3</div>
                        </div>
                        <div class="ulipWork-stepContent">
                            <div class="ulipWork_stepTitle">Selecting the policy term</div>
                            <div class="ulipWork_stepDesc">The policy term is the duration for which the policy will be in force. The ULIP calculator will take into account the policy term to estimate the returns on your investment.</div>
                        </div>
                    </div>
                    <div class="ulipWork_steps">
                        <div class="ulipWork-step">
                            <div class="ulipWork_stepText">Step</div>
                            <div class="ulipWork_number">4</div>
                        </div>
                        <div class="ulipWork-stepContent">
                            <div class="ulipWork_stepTitle">Choosing the sum assured</div>
                            <div class="ulipWork_stepDesc">The sum assured is the amount that the insurance company will pay to the nominee in case of the policyholder's death. The sum assured is usually a multiple of the premium amount. The ULIP calculator will help you determine the sum assured based on your investment goals and risk appetite.</div>
                        </div>
                    </div>
                    <div class="ulipWork_steps">
                        <div class="ulipWork-step">
                            <div class="ulipWork_stepText">Step</div>
                            <div class="ulipWork_number">5</div>
                        </div>
                        <div class="ulipWork-stepContent">
                            <div class="ulipWork_stepTitle">Estimating the returns</div>
                            <div class="ulipWork_stepDesc">The ULIP calculator will use the premium amount, policy term, sum assured, and other factors to estimate the returns on your investment. The returns will depend on the fund's performance and market conditions. The ULIP return calculator will provide a detailed analysis of the returns, including the expected return on investment, the maturity amount, and the value of the fund at different points in time</div>
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
                        <div class="featureUlip_img">
                            <img src="assets/images/calculator/ulip/Group 17650.svg" width="45px" height="59px" alt="Features" />
                        </div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Flexibility in Choosing Investment Amount</h3>
                            <div class="featureUlip_stepDesc">Unit-linked insurance plan calculator provides flexibility in choosing the investment amount. Investors can input their preferred investment amount, and the calculator will help them determine the expected returns based on the investment period and the rate of returns.</div>
                        </div>
                    </div>
                    <div class="featureUlip_steps">
                        <div class="featureUlip_img">
                            <img src="assets/images/calculator/ulip/easy-use-1.svg" width="45px" height="59px" alt="Features" />
                        </div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Ease of Use</h3>
                            <div class="featureUlip_stepDesc">The ULIP calculator is user-friendly and easy to use. Investors can simply input the necessary details, and the calculator will provide the expected returns in a matter of seconds. The calculator requires basic details such as the investment amount, investment tenure, and the expected rate of returns.</div>
                        </div>
                    </div>
                    <div class="featureUlip_steps">
                        <div class="featureUlip_img">
                            <img src="assets/images/calculator/ulip/time.svg" width="45px" height="59px" alt="Features" />
                        </div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Customizable Investment Tenure</h3>
                            <div class="featureUlip_stepDesc">ULIP calculator provides the option to choose the investment tenure. Investors can input their preferred investment period, and the calculator will provide the expected returns based on the investment tenure.</div>
                        </div>
                    </div>
                    <div class="featureUlip_steps">
                        <div class="featureUlip_img">
                            <img src="assets/images/calculator/ulip/Calculator.svg" width="45px" height="59px" alt="Features" />
                        </div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Real-time Calculations</h3>
                            <div class="featureUlip_stepDesc">ULIP calculator provides real-time calculations of expected returns. Investors can input different parameters such as investment amount, investment tenure, and expected rate of returns, and the calculator will instantly provide the expected returns.</div>
                        </div>
                    </div>
                    <div class="featureUlip_steps">
                        <div class="featureUlip_img">
                            <img src="assets/images/calculator/ulip/Group 17651.svg" width="45px" height="59px" alt="Features" />
                        </div>
                        <div class="featureUlip-stepContent">
                            <h3 class="featureUlip_stepTitle">Comparative Analysis</h3>
                            <div class="featureUlip_stepDesc">ULIP calculator also provides the option to compare different ULIP plans. Investors can input the details of different ULIP plans, and the calculator will provide a comparative analysis of the returns on investment for each plan.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="benefitsUlip">
            <div class="container">
                <h2 class="benefitsUlip-title">Benefits of a ULIP Calculator</h2>
                <p class="benefitsUlip-desc">A Unit-Linked Insurance Plan (ULIP) offers investors the opportunity to grow their wealth while also providing protection to their loved ones in the event of an unforeseen event. With the introduction of ULIP calculators, it has become easier for investors to determine the potential returns on their investments.</p>
                <div class="benefitsUlip-cards">
                    <div class="benefitsUlip-card">
                        <div class="benefitsUlip-img">
                            <img src="assets/images/calculator/ulip/Group 19924.svg" width="80px" height="80px" alt="benefitsUlip" />
                            <h3 class="benefitsUlip-CardTitle">Accurate Calculation of Premiums</h3>
                            <div class="benefitsUlip-CardSubTitle">One of the key benefits of using a ULIP calculator is that it allows individuals to accurately calculate the premiums they need to pay. This helps them to plan their finances better and ensures that they do not fall short of funds when it comes to paying their premiums.</div>
                        </div>
                    </div>
                    <div class="benefitsUlip-card">
                        <div class="benefitsUlip-img">
                            <img src="assets/images/calculator/ulip/Group 19925.svg" width="80px" height="80px"  alt="benefitsUlip" />
                            <h3 class="benefitsUlip-CardTitle">Understanding the Potential Returns</h3>
                            <div class="benefitsUlip-CardSubTitle">Another important benefit of using a ULIP return calculator is that it allows individuals to understand the potential returns on their investments. By inputting the investment amount, the investment period, and the expected rate of return, investors can get an idea of the returns they can expect from their ULIP.</div>
                        </div>
                    </div>
                    <div class="benefitsUlip-card">
                        <div class="benefitsUlip-img">
                            <img src="assets/images/calculator/ulip/Group 19926.svg" width="80px" height="80px"  alt="benefitsUlip" />
                            <h3 class="benefitsUlip-CardTitle">Comparing Different ULIP Plans</h3>
                            <div class="benefitsUlip-CardSubTitle">ULIP calculators also allow individuals to compare different ULIP plans offered by different insurers. By inputting the relevant details of each plan, investors can compare the premiums, returns, and charges associated with each plan and choose the one that best suits their needs.</div>
                        </div>
                    </div>
                    <div class="benefitsUlip-card">
                        <div class="benefitsUlip-img">
                            <img src="assets/images/calculator/ulip/Group 19927.svg" width="80px" height="80px"  alt="benefitsUlip" />
                            <h3 class="benefitsUlip-CardTitle">Customization</h3>
                            <div class="benefitsUlip-CardSubTitle">ULIP return calculators also offer customization options, allowing investors to tweak the inputs to see how they will impact their potential returns. This helps investors to make an informed decision regarding their investment.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="whyUseUlip">
            <div class="whyUseUlip_bg">
                <div class="container">
                    <h2 class="whyUseUlip-title">Why Use ULIP Calculator?</h2>
                    <p class="whyUseUlip-desc">A ULIP calculator is used by potential policyholders to calculate the returns on their investments based on their financial goals and risk. The calculator takes into account various factors, such as the policyholder's age, investment horizon, premium amount, fund allocation, and expected rate of return, to provide an estimate of the maturity value of the policy. The following are some reasons why you should use a ULIP calculator online before investing in a ULIP.</p>
                    <div class="whyUseUlip-cards">
                       <div class="whyUseUlip-card">
                            <div class="whyUseUlip-img">
                                <img src="assets/images/calculator/ulip/Group 19939.svg" width="80px" height="80px"  alt="whyUseUlip" />
                            </div>
                            <h3 class="whyUseUlip-CardTitle">Helps in Choosing the Right Plan</h3>
                            <div class="whyUseUlip-CardSubTitle">By using the ULIP calculator, you can compare different plans offered by various insurance providers and choose the one that best fits your investment goals. The calculator also helps you understand the impact of fund allocation on your investment returns, which can help you make informed decisions.
                            </div>
                        </div>
                        <div class="whyUseUlip-card">
                            <div class="whyUseUlip-img">
                                <img src="assets/images/calculator/ulip/Group 19936.svg" width="80px" height="80px"  alt="whyUseUlip" />
                            </div>
                            <h3 class="whyUseUlip-CardTitle">Provides Clarity on the Maturity Value </h3>
                            <div class="whyUseUlip-CardSubTitle">A ULIP calculator online provides an estimate of the maturity value of the policy, which helps you plan your finances better. By knowing the approximate amount, you will receive at the end of the policy term, you can plan your investment strategy accordingly. This also helps you determine the premium amount that you can afford to pay and choose the policy term accordingly.
</div>
                        </div>
                        <div class="whyUseUlip-card">
                            <div class="whyUseUlip-img">
                                <img src="assets/images/calculator/ulip/Group 19938.svg" width="80px" height="80px"  alt="whyUseUlip" />
                            </div>
                            <h3 class="whyUseUlip-CardTitle">Helps in Tax Planning</h3>
                            <div class="whyUseUlip-CardSubTitle">ULIPs offer tax benefits under <a target="_blank" class="keyTakeAwayURL" href="https://www.kotaklife.com/insurance-guide/savingstax/section-80c-life-insurance-premium-amount-and-deduction"> Section 80C </a> of the Income Tax Act. By using a ULIP return calculator, you can calculate the tax benefits you can avail of based on the premium amount and policy term. This helps you plan your tax-saving investments more effectively.
</div>
                        </div>
                        <div class="whyUseUlip-card">
                            <div class="whyUseUlip-img">
                                <img src="assets/images/calculator/ulip/Group 19953.svg" width="80px" height="80px"  alt="whyUseUlip" />
                            </div>
                            <h3 class="whyUseUlip-CardTitle">Allows for Realistic Expectations</h3>
                            <div class="whyUseUlip-CardSubTitle">A ULIP calculator provides an estimate of the returns based on the expected rate of return on the investment. This helps you set realistic expectations about the returns you can expect from the policy. It is important to note that ULIPs are market-linked and subject to market risks. Therefore, it is important to keep realistic expectations about the returns and invest accordingly.
</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="ulipCharges">
            <div class="container">
                <h2 class="ulipChargesTitle">ULIP charges you should know</h2>
                <p class="ulipChargesDesc">Unit Linked Insurance Plans (ULIPs) have gained popularity in recent years as they offer investors the opportunity to earn market-linked returns while also providing life insurance coverage. However, investors must be aware of the charges associated with ULIPs. Here are some of the essential ULIP charges you should know before investing.</p>
                <div class="ulipCharges_steps">
                    <div class="ulipCharges_img">
                        <img src="assets/images/calculator/ulip/easy-use.svg" width="38px" height="51px"  alt="Features" />
                    </div>
                    <div class="ulipCharges-stepContent">
                        <h3 class="ulipCharges_stepTitle">Premium allocation charge </h3>
                        <div class="ulipCharges_stepDesc">A premium allocation charge is a fee deducted from the premium paid by the investor. This fee covers the initial expenses of the insurance company, including commissions paid to agents and the costs of issuing the policy. This fee is usually a percentage of the premium paid, and it can range from 2% to 5% of the premium amount.
</div>
                    </div>
                </div>
                <div class="ulipCharges_steps">
                    <div class="ulipCharges_img">
                        <img src="assets/images/calculator/ulip/money (10).svg" width="38px" height="51px"  alt="Features" />
                    </div>
                    <div class="ulipCharges-stepContent">
                        <h3 class="ulipCharges_stepTitle">Fund management charge</h3>
                        <div class="ulipCharges_stepDesc">Fund management charges are fees charged by the insurance company to manage the funds invested in ULIPs. This fee is levied as a percentage of the total assets under management and is typically between 1% to 2.5% per annum. This charge covers the cost of managing the funds, including research, administration, and fund management.</div>
                    </div>
                </div>
                <div class="ulipCharges_steps">
                    <div class="ulipCharges_img">
                        <img src="assets/images/calculator/ulip/Group 17664.svg" width="38px" height="51px"  alt="Features" />
                    </div>
                    <div class="ulipCharges-stepContent">
                        <h3 class="ulipCharges_stepTitle">Policy administration charge</h3>
                        <div class="ulipCharges_stepDesc">The insurance company levies policy administration charges to cover the expenses of maintaining the policy. This charge includes the cost of issuing premium notices, maintaining records, and providing customer service. Policy administration charges are usually a fixed amount and can range from ₹100 to ₹250 per month.</div>
                    </div>
                </div>
                <div class="ulipCharges_steps">
                    <div class="ulipCharges_img">
                        <img src="assets/images/calculator/ulip/g4077.svg" width="38px" height="51px"  alt="Features" />
                    </div>
                    <div class="ulipCharges-stepContent">
                        <h3 class="ulipCharges_stepTitle">Mortality charge</h3>
                        <div class="ulipCharges_stepDesc">Mortality charges are fees charged by the insurance company to provide life insurance coverage. This fee is calculated based on the age, gender, and health of the policyholder. Mortality charges are usually higher for older policyholders and those with pre-existing medical conditions.</div>
                    </div>
                </div>
            </div>
        </section>
        <section id="conclusion">
            <div class="conclusion_bg">
                <div class="container">
                    <h2 class="conclusion_title">Wrapping Up</h2>
                    <p class="conclusion_text">ULIP calculator is a powerful tool that can assist investors in making informed decisions when it comes to investing in ULIPs. This tool can help investors determine the amount of premium they need to pay, the expected returns, and the potential risks involved. With a ULIP return calculator, investors can compare various ULIP plans and choose the one that best suits their financial goals and risk appetite.</p>
                    <p class="conclusion_text">However, it's important to note that the results provided by the ULIP return calculator are based on certain assumptions and past performance and may not be an accurate representation of the future performance of the ULIP plan.</p>
                    <p class="conclusion_text">Therefore, investors should exercise caution and conduct thorough research before investing in ULIPs. Ultimately, the ULIP calculator can be a helpful tool to assist investors in making informed investment decisions, but it should be used in conjunction with other research and analysis tools to make the best investment decision possible.</p>
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
                     <div class="menu-icon c8"></div>
                    RD <br>Calculator</a>
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



        <!-- New Content Update end from here -->
     <section id="comppundFaq">
        <div class="container">
          <div class="accordSec">
            <h2 class="accordTitle">Frequently Asked Questions </h2>
            <div class="accordList">
              <div class="accordItem">
                <div class="accordLinks">
                  <h3> <a href="javascript:void(0);"> <span>1</span>Can I purchase a ULIP offline after using the online ULIP calculator? </a></h3>
                </div><span class="icon"> </span>
                <div class="accordDesc" style="display: none;">
                  <p>Yes, you can purchase a Unit Linked Insurance Plan (ULIP) offline after using the online <b>ULIP calculator.</b> The <b>ULIP calculator</b> is a useful tool that helps you estimate the premium amount and returns on investment for different ULIP plans. However, purchasing a ULIP policy online may not always be feasible or desirable for everyone.</p>
                </div>
              </div>
              <div class="accordItem">
                <div class="accordLinks">
                  <h3> <a href="javascript:void(0);"> <span>2</span>Are ULIPs a good investment?</a></h3>
                </div><span class="icon"></span>
                <div class="accordDesc" style="display: none;">
                  <p>One of the primary advantages of ULIPs is that they provide a dual benefit of investment and insurance. Investors can allocate a portion of their premium to an investment fund of their choice, which can be either equity or debt-based, depending on their risk appetite. The remaining amount is used for providing life insurance coverage, which makes it an attractive option for those looking for a combination of investment and insurance. Additionally, ULIPs also provide tax benefits, which can help in reducing the overall tax liability.</p>
                </div>
              </div>
              <div class="accordItem">
                <div class="accordLinks">
                  <h3><a href="javascript:void(0);"> <span>3</span>How is the Net Asset Value of a ULIP calculated?</a></h3>
                </div><span class="icon"></span>
                <div class="accordDesc" style="display: none;">
                    <p><a href="https://www.kotaklife.com/ulip-plans/ulip-nav" class="keyTakeAwayURL">ULIP Net Asset Value (NAV)</a> is calculated by adding up the total ULIP fund holdings on a particular date or else on all the passable expenses (operating cost, management fees, marketing, and other charges and expenses). The net amount will be divided by the number of units held in the ULIP plan to arrive at a net asset value (NAV) per unit.</p>
                </div>
              </div>
              <div class="accordItem">
                <div class="accordLinks">
                  <h3><a href="javascript:void(0);"> <span>4</span>Will the ULIP calculator also calculate the rider premiums?</a></h3>
                </div><span class="icon"></span>
                <div class="accordDesc" style="display: none;">
                  <p>Some ULIP calculators may include the option to factor in rider premiums when calculating the total cost and <a href="https://www.kotaklife.com/ulip-plans/benefits-of-ulip" class="keyTakeAwayURL"> benefits of a ULIP policy.</a> In these cases, the calculator would typically ask the user to input the details of the desired rider, such as the type of rider, the sum assured, and the term, and then calculate the additional premium required to add the rider to the policy.</p>
                </div>
              </div>
              <div class="accordItem">
                <div class="accordLinks">
                  <h3> <a href="javascript:void(0);"> <span>5</span>Does the ULIP investment calculator also calculate the life insurance coverage?</a></h3>
                </div><span class="icon"></span>
                <div class="accordDesc" style="display: none;">
                  <p>Yes, the ULIP investment calculator typically calculates the life insurance cover in addition to the investment returns. A ULIP (Unit Linked Insurance Plan) is a financial product that combines both investment and insurance features.</p>
                </div>
              </div>
              <div class="accordItem">
                <div class="accordLinks">
                  <h3> <a href="javascript:void(0);"> <span>6</span>Is the mortality charge deducted for the entire deduction of plan?</a></h3>
                </div><span class="icon"></span>
                <div class="accordDesc" style="display: none;">
                  <p>It depends on the specific insurance plan and its terms and conditions. A mortality charge is a fee that life insurance companies charge to cover the cost of providing coverage based on the probability of the insured person's death. This charge is calculated based on various factors such as age, gender, health status, and lifestyle habits of the insured.</p>
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
                    <h2 class="mb-20 term-tags fnt-24">Wealth Creation Related Blogs </h2>
            <?php
        //GA code Variables
        $eventGA  =   'event '.$moduleName.' most';
        //$labelGA  =   'read more|glossary';
        //GA code Variables
      ?>
      
      <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div">
      
      </ul>
       <?php
        //GA code Variables
        $eventGA  =   'event '.$moduleName.' load';
        $labelGA  =   'load more';
        //GA code Variables
      ?>
     
	 <!-- <div class="loadmores">
      <a href="javascript:;" class="link" id="load-more-articles" onclick="dataLayer.push({'event': '<?php echo $eventGA; ?>', 'category': '<?php echo $categoryGA; ?>', 'action': '<?php echo $actionGA; ?>', 'label': '<?php echo $labelGA; ?>'});">Load More</a>
</div>     -->
	<div class="noRecord"></div>
      <div class="innerLoader">
        <img src="assets/images/loader.gif" alt="Kotak Loader" />
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
                        <p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant</p> <br>

                        <p class="pl-0">The calculation is generated on the basis of information provided and does not constitute
                            an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the
                            advised to go through the sales brochure before conducting any sale. Ref No : KLI/23-24/E-WEB/337</p>
                        <br>
                        <p class="pl-0">The Linked Insurance Products do not offer any liquidity during the first five years of
                            the contract. The policyholder will not be able to surrender/withdraw the monies invested in Linked
                            Insurance Products completely or partially till the end of the fifth year </p><br>
                        <p class="pl-0">Linked Life Insurance products are different from the traditional insurance products and
                            are subject to the risk factors.</p><br>
                        <p class="pl-0">The premiums paid in Linked Life Insurance policies are subject to investment risks
                            associated with capital markets and the NAVs of the units may go up or down based on the performance of
                            fund and factors influencing the capital market and the insured is responsible for his/her decisions.
                            Please know the associated risks and the applicable charges (along with the possibility of increase in
                            charges), from your Insurance agent or the Intermediary or policy document of the insurer. </p> <br>
                        <br>
                        <p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS/FRADULENT OFFERS</b></p>
                        <p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing
                            bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police
                            complaint.</p>
                        <p class="pl-0 mt-10">Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN :
                            U66030MH2000PLC128503, Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400
                            051. Website: https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800.
                            https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800. </p>
                        <p class="pl-0 mt-10">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by
                            Kotak Mahindra Life Insurance Company Limited under license</p>
                    </div>

                </div>

            </div>
        </section>
    </div>
</div>
<input type="hidden" id="pageNo" value="0">
		<input type="hidden" id="url" value="<?=$_SERVER['REQUEST_URI']?>">
  <input type="hidden" id="sortType" value="recent">
  <input type="hidden" id="pageLimit" value="<?php echo ARTICLES_LIMIT; ?>">
  <input type="hidden" id="searchArticle" value="">
  <input type="hidden" id="pageType" value="topic">
  <input type="hidden" id="topicSlug" value="wealth-creation">


   
    <input type="hidden" id="url" value="<?php echo $this->uri->segment('1'); ?>/<?php echo $this->uri->segment('2'); ?>">
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
    //lazy load
    document.addEventListener("DOMContentLoaded", function() {
        const imageObserver = new IntersectionObserver((entries, imgObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target;
                    // console.log("lazy loading ", lazyImage);
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
