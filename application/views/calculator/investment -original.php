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
<script type="application/ld+json">
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
  },{
    "@type": "Question",
    "name": "How is ULIP calculated?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You’ll find two different ways to check your ULIP returns:

Absolute returns: This is the percentage increase in the total value of the ULIP. The total value is measured once expenses like operating fees and management charges are deducted.
Absolute returns = [(Current value - Value at the time of purchase)/Value at the time of purchase] x 100

CAGR (Compound Annual Growth Rate): The CAGR method helps in evaluating the annual growth of your investment during a specific period. This, in turn, assist you to determine the rate of return you can receive from your plan year after year.
CAGR = {[(Current value/Value at the time of purchase) ^ (1/number of years)]-1} x 100"
    }
  },{
    "@type": "Question",
    "name": "Can I withdraw ULIP after 5 years?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "ULIP is a long-term investment game. You can exit from ULIP after 5 years; though, it is not advisable even after lock-in period ends. To gain the benefits, you should continue and stay invested for a long period of 15-20 years. If you think that the funds are not performing well, you can switch your funds. You can always cross-examine the returns with the aid of an ULIP maturity amount calculator."
    }
  },{
    "@type": "Question",
    "name": "How much return does ULIP give?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Financial experts’ advice, that you should stay invested in the ULIP policy for at least 10 years, and reap an annual return of 10-12%, even if your ULIP plan is an average one. This makes ULIPs an ideal investment when it comes to long-term investing. When you invest for a longer tenure like 10 years, any short-term market losses can be absorbed by this policy. This eventually, brings and produces higher returns in the long run which you can examine via a ULIP return calculator."
    }
  },{
    "@type": "Question",
    "name": "What is the minimum and maximum premium payment term available in ULIP?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You can choose to pay either for a limited period or regularly. For the Limited Pay option, the premium payment term is limited to 5, 7, and 10 years. For the Regular Pay option, the premium payment term is the same as the policy term. In addition, for the Whole Life option, you can only choose to pay for a limited period of 7, 10, and 15 years."
    }
  },{
    "@type": "Question",
    "name": "How ULIP NAV is calculated?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "ULIP Net Asset Value (NAV) is calculated by adding up the total ULIP fund holdings on a particular date or else on all the passable expenses (operating cost, management fees, marketing, and other charges and expenses). The net amount will be divided by the number of units held in the ULIP plan to arrive at a net asset value (NAV) per unit."
    }
  },{
    "@type": "Question",
    "name": "How to calculate ULIP manually in Excel?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You’ll find two different ways to check your ULIP returns:

Absolute returns: This is the percentage increase in the total value of the ULIP. The total value is measured once expenses like operating fees and management charges are deducted.
Absolute returns = [(Current value - Value at the time of purchase)/Value at the time of purchase] x 100

CAGR (Compound Annual Growth Rate): The CAGR method helps in evaluating the annual growth of your investment during a specific period. This, in turn, assist you to determine the rate of return you can receive from your plan year after year.
CAGR = {[(Current value/Value at the time of purchase) ^ (1/number of years)]-1} x 100"
    }
  }]
}
</script>
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/investment.css">
<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">
<style>
    .calc-list {
        padding-left: 16px;
    }

    .calc-list li {
        font-size: 1.6rem;
        list-style: disc;
    }
	.invest-cal{padding-top:0;}
	.breadcrumb-ulip{margin-top:20px; padding-bottom:1rem;}
#HowtouseCalc{padding-top:0;}
</style>
<div class="interactionWrap investment">

    <div class="pageWrapper">
        <section id="investment_calculator">
            <div class="container">
			  <ul class="breadcrumb-ulip">
                    <li><a href="https://www.kotaklife.com/">Home></a></li>
                    <li><a href="javascript:void(0);">Financial Tool Calculator ></a></li>
                    <li class="active"><a href="javascript:void(0);">ULIP Calculator</a></li>
                </ul>
               <p class="invest-cal">In ULIP, the investment risk in the investment portfolio is borne by the policyholder</p>
                <h1 class="section_heading">Investment Calculator</h1>
                <div class="row cal-margin">
							<div class="col-lg-7 m-no-padding"> 
								<div class="card">    
									<div class="text_center"> 
										<div class="radio_tabs">
											<input id="regularInvestment" type="radio" value="regularInvestment" name="investmentTabs" checked="checked" class="radio_tab"/>
											<label for="regularInvestment">Regular Investment</label>
											<input id="oneTimeInvestment" type="radio" value="oneTimeInvestment" name="investmentTabs" class="radio_tab"/>
											<label for="oneTimeInvestment">One-time Investment</label>
										</div>
									</div>
									<div class="range-wrap">
										<div class="goal-wrap">
											<p class="goal-title">Investment Amount <span class="sublabel sublableMonthly">(Monthly)</span></p>
											<div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span>
												<input id="amtInvestInput" name="monthly" type="text" value="1,00,000" maxlength="11" class="form-control comma"/>
											</div>
										</div>
										<div class="slider-wrap">
											<input id="amtInvestRange" name="range" type="range" value="100000" min="1000" max="10000000" class="range-control"/>
										</div>
										<div class="invest-amt">
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">| </div>
										</div>
										<div class="value-wrap">
											<div class="min"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 k</span></div>
											<div class="max"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 Cr</span></div>
										</div>
									</div>
									<div class="range-wrap">
										<div class="goal-wrap">
											<p class="goal-title">Investment Tenure <span class="sublabel">(Years)</span></p>
											<div class="input-wrap year-wrap">
												<input id="yearsInvestInput" name="years" type="text" value="10" maxlength="2" class="form-control"/><span>Years</span>
											</div>
										</div>
										<div class="slider-wrap">
											<input id="yearsInvestRange" name="range" type="range" value="10" min="1" max="30" class="range-control"/>
										</div>
										<div class="invest-amt">
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">| </div>
										</div>
										<div class="value-wrap">
											<div class="min"><span class="amount">1&nbsp;</span><span>Year</span></div>
											<div class="max"><span class="amount">30&nbsp;</span><span>Years</span></div>
										</div>
									</div>
									<div class="range-wrap">
										<div class="goal-wrap">
											<p class="goal-title">Interest Rate <span class="sublabel">(P.A.)</span></p>
											<div class="input-wrap percent-wrap">
												<input id="interestrateInput" name="intrest" type="text" value="8" maxlength="5" class="form-control"/><span>%</span>
											</div>
										</div>
										<div class="slider-wrap">
											<input id="interestrateRange" name="rate" type="range" step="0.01" value="9" min="1" max="15" class="range-control"/>
										</div>
										<div class="invest-amt">
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">| </div>
										</div>
										<div class="value-wrap">
											<div class="min"><span class="amount">1&nbsp;</span><span>%</span></div>
											<div class="max"><span class="amount">15&nbsp;</span><span>%</span></div>
										</div>
										<p class="note">Sensex has given 10% return from 2010 - 2020</p>
									</div>
									<div id="periodic_investment" class="range-wrap">
										<div class="goal-wrap">
											<p class="goal-title">Existing Investment <span class="sublabel">(optional)</span></p>
											<div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span>
												<input id="periodicInput" name="investment" type="text" value="0" maxlength="11" class="form-control comma"/>
											</div>
										</div>
										<div class="slider-wrap">
											<input id="periodicRange" name="range" type="range" value="0" min="0" max="10000000" class="range-control"/>
										</div>
										<div class="invest-amt">
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">| </div>
										</div>
										<div class="value-wrap">
											<div class="min"><span class="rupee">&#8377;&nbsp;</span><span class="amount">0</span></div>
											<div class="max"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 Cr</span></div>
										</div>
									</div>
									<div id="existing_investment" class="range-wrap">
										<div class="goal-wrap">
											<p class="goal-title">Periodic Investment <span class="sublabel">(optional)</span></p>
											<div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span>
												<input id="extistingInvestmentInput" name="extistingInvestmentInput" type="text" value="0" maxlength="11" class="form-control comma"/>
											</div>
										</div>
										<div class="slider-wrap">
											<input id="extistingInvestmentRange" name="extistingInvestmentRange" type="range" value="0" min="0" max="10000000" class="range-control"/>
										</div>
										<div class="invest-amt">
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">|</div>
											<div class="amt-slot">| </div>
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
										<h2 class="card_title">You may get<br/><span class="amt_return">&#8377;&nbsp;<span id="yourReturn"></span></span></h2>
										<div class="investment_result">
											<p class="mb-0">If you invest&nbsp;<span class="invested_val"><b>&#8377;&nbsp;</b><span id="totalInvested"></span></span> &nbsp;<br/></p>
											<p class="oneTimeResult"> <span class="regular_span">for&nbsp;</span><span class="years_val"> </span>&nbsp;Years at&nbsp;<span id="percent_val"> </span>% p.a. </p>
										</div>
										<div id="legend" class="legend_text"></div>
										<canvas id="investment_chart" height="240" class="investment_chart"></canvas><a target="_blank" href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=calculators&utm_campaign=ulip&utm_content=investnow" class="btn_primary">Invest Now</a>
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
                        <h2 class="Title">How to use the Unit Linked Insurance Plan (ULIP) Calculator?</h2>
                        <p class="Desc">Calculate the amount of income tax you can save on your insurance policies.</p>
                        <div class="Steps">
                            <div class="stepsCont"><span> 
							<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="18.5" cy="18" r="18" fill="#F3F3F3"/>
<path d="M24.633 14.8904L16.9053 22.8202C16.8104 22.919 16.6973 22.9975 16.5726 23.051C16.4479 23.1046 16.3141 23.1321 16.1789 23.1321C16.0437 23.1321 15.9099 23.1046 15.7852 23.051C15.6605 22.9975 15.5474 22.919 15.4525 22.8202L11.8463 19.1196C11.6536 18.9219 11.5454 18.6538 11.5454 18.3742C11.5454 18.0947 11.6536 17.8265 11.8463 17.6288C12.0389 17.4311 12.3002 17.3201 12.5727 17.3201C12.8451 17.3201 13.1064 17.4311 13.2991 17.6288L16.1789 20.5787L23.1802 13.3996C23.3728 13.2019 23.6341 13.0908 23.9066 13.0908C24.179 13.0908 24.4403 13.2019 24.633 13.3996C24.8256 13.5973 24.9338 13.8654 24.9338 14.145C24.9338 14.4246 24.8256 14.6927 24.633 14.8904Z" fill="#ED1C24"/>
</svg>
							</span>
                                <div class="stepWarp">
                                    <h4 class="stepTitle">Step 1</h4>
                                    <p class="stepDesc">Calculate the amount of income tax you can save on your insurance policies.</p>
                                </div>
                            </div>
                            <div class="stepsCont"><span><svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="18.5" cy="18" r="18" fill="#F3F3F3"/>
<path d="M24.633 14.8904L16.9053 22.8202C16.8104 22.919 16.6973 22.9975 16.5726 23.051C16.4479 23.1046 16.3141 23.1321 16.1789 23.1321C16.0437 23.1321 15.9099 23.1046 15.7852 23.051C15.6605 22.9975 15.5474 22.919 15.4525 22.8202L11.8463 19.1196C11.6536 18.9219 11.5454 18.6538 11.5454 18.3742C11.5454 18.0947 11.6536 17.8265 11.8463 17.6288C12.0389 17.4311 12.3002 17.3201 12.5727 17.3201C12.8451 17.3201 13.1064 17.4311 13.2991 17.6288L16.1789 20.5787L23.1802 13.3996C23.3728 13.2019 23.6341 13.0908 23.9066 13.0908C24.179 13.0908 24.4403 13.2019 24.633 13.3996C24.8256 13.5973 24.9338 13.8654 24.9338 14.145C24.9338 14.4246 24.8256 14.6927 24.633 14.8904Z" fill="#ED1C24"/>
</svg></span>
                                <div class="stepWarp">
                                    <h4 class="stepTitle">Step 2</h4>
                                    <p class="stepDesc">With a ULIP calculator, you can also check how much you need to invest in an ULIP-linked policy. Enter your details correctly to obtain an accurate result.</p>
                                </div>
                            </div>
                            <div class="stepsCont"><span> 
							<svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="18.5" cy="18" r="18" fill="#F3F3F3"/>
<path d="M24.633 14.8904L16.9053 22.8202C16.8104 22.919 16.6973 22.9975 16.5726 23.051C16.4479 23.1046 16.3141 23.1321 16.1789 23.1321C16.0437 23.1321 15.9099 23.1046 15.7852 23.051C15.6605 22.9975 15.5474 22.919 15.4525 22.8202L11.8463 19.1196C11.6536 18.9219 11.5454 18.6538 11.5454 18.3742C11.5454 18.0947 11.6536 17.8265 11.8463 17.6288C12.0389 17.4311 12.3002 17.3201 12.5727 17.3201C12.8451 17.3201 13.1064 17.4311 13.2991 17.6288L16.1789 20.5787L23.1802 13.3996C23.3728 13.2019 23.6341 13.0908 23.9066 13.0908C24.179 13.0908 24.4403 13.2019 24.633 13.3996C24.8256 13.5973 24.9338 13.8654 24.9338 14.145C24.9338 14.4246 24.8256 14.6927 24.633 14.8904Z" fill="#ED1C24"/>
</svg>
							</span>
                                <div class="stepWarp">
                                    <h4 class="stepTitle">Step 3</h4>
                                    <p class="stepDesc">Click 'Calculate' to check your result. You can use the calculator again to view different results with varied amounts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rightSec">
                        <picture>
                            <source media="(min-width:767px)" srcset="assets/images/undraw-calculator.webp" /><img src="assets/images/undraw-calculator.webp" width="100%" height="100%" alt="compundImg" />
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <section id="comppundFaq">
            <div class="container">
                <div class="accordSec">
                    <h2 class="accordTitle">Frequently Asked Questions </h2>
                    <div class="accordList">
                        <div class="accordItem">
                            <div class="accordLinks"> <h3> <a href="javascript:void(0);"> <span>1</span>How is ULIP calculator helpful for online or offline purchases?</a></h3></div><span class="icon"> </span>
                            <div class="accordDesc">
                                <p>An online <b>ULIP calculator</b> saves you a lot of time, making it easier and flexible to access at any time. The <b>ULIP calculator</b> is more profitable with its easily available tools for online purchases, along with making a quick comparison.</p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks"><h3> <a href="javascript:void(0);"> <span>2</span>How is ULIP calculated?</a></h3></div><span class="icon"></span>
                            <div class="accordDesc">
                                <p>You’ll find two different ways to check your ULIP returns:</p>
                                <ul class="calc-list">
                                    <li>Absolute returns: This is the percentage increase in the total value of the ULIP. The total value is measured once expenses like operating fees and management charges are deducted. </li>
                                </ul>
                                <P>Absolute returns = [(Current value - Value at the time of purchase)/Value at the time of purchase] x 100</P>
                                <ul class="calc-list">
                                    <li>CAGR (Compound Annual Growth Rate): The CAGR method helps in evaluating the annual growth of your investment during a specific period. This, in turn, assist you to determine the rate of return you can receive from your plan year after year. </li>
                                </ul>
                                <P>CAGR = {[(Current value/Value at the time of purchase) ^ (1/number of years)]-1} x 100</P>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks"> <h3><a href="javascript:void(0);"> <span>3</span>Can I withdraw ULIP after 5 years?</a></h3></div><span class="icon"></span>
                            <div class="accordDesc">
                                <p>ULIP is a long-term investment game. You can exit from ULIP after 5 years; though, it is not advisable even after lock-in period ends. To gain the benefits, you should continue and stay invested for a long period of 15-20 years. If you think that the funds are not performing well, you can switch your funds. You can always cross-examine the returns with the aid of an <b>ULIP maturity amount calculator.</b></p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks"> <h3><a href="javascript:void(0);"> <span>4</span>How much return does ULIP give?</a></h3></div><span class="icon"></span>
                            <div class="accordDesc">
                                <p>Financial experts’ advice, that you should stay invested in the ULIP policy for at least 10 years, and reap an annual return of 10-12%, even if your ULIP plan is an average one. This makes ULIPs an ideal investment when it comes to long-term investing. When you invest for a longer tenure like 10 years, any short-term market losses can be absorbed by this policy. This eventually, brings and produces higher returns in the long run which you can examine via a <b>ULIP return calculator.</b></p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks"><h3> <a href="javascript:void(0);"> <span>5</span>What is the minimum and maximum premium payment term available in ULIP?</a></h3></div><span class="icon"></span>
                            <div class="accordDesc">
                                <p>You can choose to pay either for a limited period or regularly. For the Limited Pay option, the premium payment term is limited to 5, 7, and 10 years. For the Regular Pay option, the premium payment term is the same as the policy term. In addition, for the Whole Life option, you can only choose to pay for a limited period of 7, 10, and 15 years.</p>
                            </div>
                        </div>
                        <div class="accordItem">
                            <div class="accordLinks"><h3> <a href="javascript:void(0);"> <span>6</span>How ULIP NAV is calculated?</a></h3></div><span class="icon"></span>
                            <div class="accordDesc">
                                <p>ULIP Net Asset Value (NAV) is calculated by adding up the total ULIP fund holdings on a particular date or else on all the passable expenses (operating cost, management fees, marketing, and other charges and expenses). The net amount will be divided by the number of units held in the ULIP plan to arrive at a net asset value (NAV) per unit.</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="terms new-terms pt-0" id="terms_conditions">
            <div class="midWrapper">
                <button type="button" name="disclaimer" class="collapsible terms-txt whitespace-initial">Read about Tax benefits & Plan Disclaimer</button>
                <div class="content-col mb-0 tab-align li-disc terms-para">
                    <h3 class="  terms-conditions">Disclaimers-</h3>
                    <div class="disclamier-pera pt-0">
                        <p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p> <br>

                        <p class="pl-0">The calculation is generated on the basis of information provided and does not constitute an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the advised to go through the sales brochure before conducting any sale. Ref No : KLI/22-23/E-WEB/1826</p> <br>
 <p class="pl-0">The Linked Insurance Products do not offer any liquidity during the first five years of the contract. The policyholder will not be able to surrender/withdraw the monies invested in Linked Insurance Products completely or partially till the end of the fifth year </p></br>
  <p class="pl-0">Linked Life Insurance products are different from the traditional insurance products and are subject to the risk factors.</p><br>
    <p class="pl-0">The premiums paid in Linked Life Insurance policies are subject to investment risks associated with capital markets and the NAVs of the units may go up or down based on the performance of fund and factors influencing the capital market and the insured is responsible for his/her decisions.
Please know the associated risks and the applicable charges (along with the possibility of increase in charges), from your Insurance agent or the Intermediary or policy document of the insurer. </p> <br> </br>
                        <p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS/FRADULENT OFFERS</b></p>
                        <p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
                        <p class="pl-0 mt-10">Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN : U66030MH2000PLC128503, Regd. Office: 8th  Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400 051. Website: https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800. 
                            https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800. </p>
                        <p class="pl-0 mt-10">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Limited under license</p>
                    </div>

                </div>

            </div>
        </section>
    </div>
</div>

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
