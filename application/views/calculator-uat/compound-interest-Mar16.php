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
    "name": "What is compounding?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Compounding is a process in which one can generate additional earnings over time from either their asset’s gains or interest."
    }
  },{
    "@type": "Question",
    "name": "What is compound interest?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Compound Interest usually refers to the interest affiliated with a bank account, loan, or investment that accumulates over time rather than directly. A Compound Interest calculator is a great tool to calculate your returns."
    }
  },{
    "@type": "Question",
    "name": "How is compound interest calculated?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Compound Interest is calculated on the primary capital funds, which also includes all of the interest earned from the prior period on any deposit or a loan. You can find a Compound Interest calculator online to quickly run the numbers."
    }
  },{
    "@type": "Question",
    "name": "What is the difference between simple interest and compound interest?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Simple Interest is the interest paid only on the principal amount of capital investment or capital deposited. Whereas, Compound Interest pays “interest on interest”."
    }
  },{
    "@type": "Question",
    "name": "What is power of compounding?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Growing your wealth exponentially and adding the profits earned back to the primary amount. This entire sum can be reinvested to gain momentum in the profit earning process. This idea of growing wealth is known as power of compounding."
    }
  },{
    "@type": "Question",
    "name": "What is the formula for calculating compound interest?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Compound Interest is calculated, after accounting for the total amount over a period of time, the rate of interest, and the initial assets. A = P (1+ r/n)nt.
In addition, one can calculate Compound Interest by subtracting the principal from the amount. You can calculate the compound interest using this formula: CI = P (1+ r/n)nt - P
Here,
A is the final amount.
P is the principal amount.
r is the rate of interest.
n is the number of times the interest is increased yearly.
t is the overall tenure.
Calculating Compound Interest online is very convenient with the help of the Compound Interest rate calculator."
    }
  },{
    "@type": "Question",
    "name": "What is the difference between Cumulative and Compound Interest?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The total interest one pays over time is called Cumulative Interest. Whereas, Compound Interest is a way the interest is calculated. Compound Interest is gained by applying both the principal and past interest."
    }
  }]
}
</script>
		<link href="assets/images/favicon.ico" type="image/ico/gif" sizes="16x16" rel="shortcut icon"/>
	<link rel="stylesheet" href="assets/css/global.css">
		<link rel="stylesheet" href="assets/css/compound-interest.css">
		<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">
	
	
			<style>
            .calc-list{padding-left: 16px;}
            .calc-list li{font-size: 1.6rem; list-style: disc;}
			.breadcrumb-ulip{margin-top:20px; padding-bottom:1rem;}
</style>

<div class="interactionWrap compoundInterest">
		
			<div class="pageWrapper">
				<section id="ci_calculator">
					<div class="container">
					 <ul class="breadcrumb-ulip">
                    <li><a href=base_url."/">Home></a></li>
                    <li><a href="javascript:void(0);">Financial Tool Calculator ></a></li>
                    <li class="active"><a href="javascript:void(0);">Compound Interest Calculator</a></li>
                </ul>
						<h1 class="section_heading">Compound Interest Calculator</h1>
						<div class="row cal-margin">
							<div class="col-lg-7 m-no-padding">
								<div class="card"> 
									<div class="form_group"> 
										<label class="label-name">Frequency</label>
										<div class="select-wrap"> 
											<select id="compoundFrequency" class="form-control">
												<option value="yearly">Yearly</option>
												<option value="monthly">Monthly</option>
											</select>
										</div>
									</div>
									<div class="range-wrap">  
										<div class="goal-wrap">
											<p class="goal-title">Amount You Would Like To Invest?</p>
											<div class="input-wrap"><span class="rupee">&#8377;&nbsp;</span>
												<input id="amtInvestInput" type="text" value="1,00,000" maxlength="11" class="form-control comma"/>
											</div>
										</div>
										<div class="slider-wrap">
											<input id="amtInvestRange" type="range" value="100000" min="10" max="10000000" step="0.5" class="range-control"/>
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
											<div class="amt-slot">|    </div>
										</div>
										<div class="value-wrap">
											<div class="min"><span class="rupee">&#8377;&nbsp;</span><span class="amount">10</span></div>
											<div class="max"><span class="rupee">&#8377;&nbsp;</span><span class="amount">1 Cr</span></div>
										</div>
									</div>
									<div class="range-wrap">
										<div class="goal-wrap">
											<p class="goal-title">Number Of Years You Want To Invest?</p>
											<div class="input-wrap year-wrap">
												<input id="yearsInvestInput" type="text" value="10" maxlength="2" class="form-control"/><span>Years</span>
											</div>
										</div>
										<div class="slider-wrap">
											<input id="yearsInvestRange" type="range" value="10" min="1" max="30" class="range-control"/>
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
											<p class="goal-title">Number Of Years Stay Invested For?</p>
											<div class="input-wrap year-wrap">
												<input id="stayInvestedInput" type="text" value="12" maxlength="2" class="form-control"/><span>Years</span>
											</div>
										</div>
										<div class="slider-wrap">
											<input id="stayInvestedRange" type="range" value="12" min="1" max="50" class="range-control"/>
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
											<div class="max"><span class="amount">50&nbsp;</span><span>Years</span></div>
										</div>
										<p class="error-text">Years you want to Invest cannot be less than Stay Invested</p>
									</div>
									<div class="range-wrap">
										<div class="goal-wrap">
											<p class="goal-title">Expected Interest Rate (P.A.)</p>
											<div class="input-wrap percent-wrap">
												<input id="rateOfInterestInput" type="text" value="8" maxlength="5" class="form-control"/><span>%</span>
											</div>
										</div>
										<div class="slider-wrap">
											<input id="rateOfInterestRange" type="range" step="0.01" value="8" min="1" max="30" class="range-control"/>
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
											<div class="max"><span class="amount">30&nbsp;</span><span>%</span></div>
										</div>
									</div>
									<button id="calculate" class="btn_block btn_primary">Calculate</button>
								</div>
							</div>
							<div class="col-lg-5 m-no-padding"> 
								<div class="card card_middle p-0">
									<div class="card_body">
										<h2 class="card_title">You may get<br/><span class="amt_return">&#8377;&nbsp;<span id="compoundReturn" class="addCommaDefault"></span></span></h2>
										<p>If you invest&nbsp;<span class="invested_val">&#8377;&nbsp;<span id="totalInvested" class="addCommaDefault"></span></span>&nbsp;for<br/><span class="years_val"> </span>&nbsp;Years at&nbsp;<span class="percent_val"> </span>% <span class="perAnnum">p.a.</span><span class="perMonth">p.m. </span></p>
										<div id="legend" class="legend_text"></div>
										<canvas id="compound_interest_chart" height="220" class="compound_interest_chart"></canvas><a target="_blank" href=base_url."/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&utm_medium=calculators&utm_campaign=compounding&utm_content=investnow" class="btn_primary m-0">Invest Now</a>
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
								<h2 class="Title">How to use Compound Interest Calculator?</h2>
								<p class="Desc">Experience the power of compounding and see how much your wealth can grow with the help our quick Compound Interest Calculator.</p>
								<div class="Steps">
									<div class="stepsCont"><span> <img src="assets/images/tick.svg" alt=""/></span>
										<div class="stepWarp">
											<h4 class="stepTitle">Step 1</h4>
											<p class="stepDesc">Visit the Compound Interest Calculator page to plan for your future goals.</p>
										</div>
									</div>
									<div class="stepsCont"><span> <img src="assets/images/tick.svg" alt=""/></span>
										<div class="stepWarp">
											<h4 class="stepTitle">Step 2</h4>
											<p class="stepDesc">Compound Interest Calculator can be used to calculate future expenses for many goals. Enter your details carefully to ensure an accurate result. </p>
										</div>
									</div>
									<div class="stepsCont"><span> <img src="assets/images/tick.svg" alt=""/></span>
										<div class="stepWarp">
											<h4 class="stepTitle">Step 3</h4>
											<p class="stepDesc">Hit enter and check your amount. You can use this calculator to check different amounts and plan your SIP investments.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="rightSec">
								<picture>
									<source media="(min-width:767px)" srcset="assets/images/undraw-calculator.png"/><img data-src="assets/images/undraw-calculator-mob.png" src="assets/images/undraw-calculator-mob.png" alt="compundImg"/>
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
									<div class="accordLinks"> <h3> <a href="javascript:void(0);"> <span>1</span>What is compounding?</a></h3></div><span class="icon"> </span>
									<div class="accordDesc"> 
										<p>Compounding is a process in which one can generate additional earnings over time from either their asset’s gains or interest.</p>
									</div>
								</div>
								<div class="accordItem"> 
									<div class="accordLinks"><h3> <a href="javascript:void(0);"> <span>2</span>What is compound interest?</a></h3></div><span class="icon"></span>
									<div class="accordDesc"> 
										<p>Compound Interest usually refers to the interest affiliated with a bank account, loan, or investment that accumulates over time rather than directly. A <b>Compound Interest calculator</b> is a great tool to know your earnings.</p>
									</div>
								</div>
								<div class="accordItem"> 
									<div class="accordLinks"><h3> <a href="javascript:void(0);"> <span>3</span>How is compound interest calculated?</a></h3></div><span class="icon"></span>
									<div class="accordDesc"> 
										<p>Compound Interest is calculated on the primary capital funds, which also includes all of the interest earned from the prior period on any deposit or a loan. You can find a <b>Compound calculator</b> online to quickly run the numbers.</p>
									</div>
								</div>
								<div class="accordItem"> 
									<div class="accordLinks"><h3> <a href="javascript:void(0);"> <span>4</span>What is the difference between simple interest and compound interest?</a></h3></div><span class="icon"></span>
									<div class="accordDesc"> 
										<p>Simple Interest is when, interest is paid only on the amount of capital investment or capital deposited. Whereas, Compound Interest pays “interest on interest”.</p>
									</div>
								</div>
								<div class="accordItem"> 
									<div class="accordLinks"> <h3><a href="javascript:void(0);"> <span>5</span>What is power of compounding?</a></h3></div><span class="icon"></span>
									<div class="accordDesc"> 
										<p>Growing your wealth exponentially and adding the profits earned back to the primary amount. This entire sum can be reinvested to gain momentum in the profit earning process. This idea of growing wealth is known as power of compounding.</p>
									</div>
								</div>
								<div class="accordItem"> 
									<div class="accordLinks"><h3> <a href="javascript:void(0);"> <span>6</span>What is the formula for calculating compound interest?</a></h3></div><span class="icon"></span>
									<div class="accordDesc"> 
										<p>Compound Interest is calculated, after accounting for the total amount over a period of time, the rate of interest, and the initial assets. A = P (1+ r/n)<sup>nt</sup></p>
										<p>In addition, one can calculate the Compound Interest by subtracting the principal from the amount. You can calculate the compound interest using this formula: CI = P (1+ r/n)<sup>nt</sup> - P</p>
										<p>Here,
											<ul class="calc-list">
												<li><b>A</b> is the final amount.</li>
												<li><b>P</b> is the principal amount.</li>
												<li><b>r</b> is the rate of interest.</li>
												<li><b>n</b> is the number of times the interest is increased yearly.</li>
												<li><b>t</b> is the overall tenure.</li>
											</ul>
										</p>
										<p><b>Calculating Compound Interest</b> online is very convenient with the help of the <b>Compound Interest rate calculator.</b></p>
									</div>
								</div>
								<div class="accordItem"> 
									<div class="accordLinks"> <h3><a href="javascript:void(0);"> <span>7</span>What is the difference between Cumulative and Compound Interest?</a></h3></div><span class="icon"></span>
									<div class="accordDesc"> 
										<p>The total interest one pays over time is called Cumulative Interest. Whereas, Compound Interest is a way the interest is calculated. Compound Interest is gained by applying both the principal and past interest.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
			</div>
				<section class="terms new-terms pt-0" id="terms_conditions">
            <div class="midWrapper">

                <button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits & Plan Disclaimer</button>
                 <div class="content-col mb-0 tab-align li-disc terms-para">
                     <h3 class="  terms-conditions">Disclaimers-</h3>
                    <div class="disclamier-pera pt-0">
                    <p class="pl-0 mb-10">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws.
Customer is advised to take an independent view from tax consultant.</p> <br>

                    <p class="pl-0">The calculation is generated on the basis of information provided and does not constitute an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the advised to go
through the sales brochure before conducting any sale. Ref No:KLI/22-23/E-WEB/1812.</p> <br>

                    <p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS/FRADULENT OFFERS</b></p>
                    <p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p><br>
                     <p class="pl-0">Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN : U66030MH2000PLC128503, Regd.
Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400 051. Website:
https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800.</p><br>
                        <p class="pl-0">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Limited under license </p>
                     </div>

                </div>

            </div>
        </section> 
			<!-- Start footer scripts-->
			
			<!-- End footer scripts-->
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
</script>	