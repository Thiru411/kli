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
?> <style>.breadcrumb-ulip{margin-top:20px;padding-bottom:1rem}</style><link rel="stylesheet" href="assets/css/global.css"><link rel="stylesheet" href="assets/css/investment.css"><link rel="stylesheet" href="assets/css/vendor/rangeslider.css"><link rel="stylesheet" as="style" href="assets/css/fd-calculator.css"><link href="assets/css/slick.css" rel="stylesheet" onload='this.onload=null,this.rel="stylesheet"' type="text/css"><div class="interactionWrap investment"><div class="pageWrapper"><section id="investment_calculator" style="background-color:#fff"><div class="container"><ul class="breadcrumb-ulip"><li><a href="<?=base_url()?>">Home&gt;</a></li><li><a href="/financial-tools-calculators">Financial Tool Calculator &gt;</a></li><li class="active"><a href="javascript:void(0);">FD Calculator</a></li></ul><div class="headSection"><h1 class="section_heading">Fixed Deposit (FD) Calculator</h1><p class="fdDesc">An FD is a safe and secure investment option offered by banks and financial institutions. You deposit a lump sum for a fixed period (tenure) and earn interest on that amount.<span id="dots">...</span><span id="more">Compared to savings accounts, FDs offer guaranteed returns, making them ideal for growing your savings for specific goals like a down payment, education, or retirement.  To make the most of your deposits, there is a FD Calculator (Fixed Deposit Calculator), also known as FD Interest Calculator.</span><span style="color:#ed3237;cursor:pointer;font-weight:600" onclick="readMoreFD()" id="myBtn">Read more</span></p></div><div class="row cal-margin"><div class="col-lg-12 m-no-padding"><div class="fdGrid"><div class="fdCard"><div><div class="range-wrap"><div class="goal-wrap"><p class="goal-title"><span>Total Investment Amount</span></p><div class="input-wrap w11rem"><span class="rupee">₹&nbsp;</span><input id="totalInvestment" name="yearly" type="number" value="100000" class="sipForm" oninput='updateInputValue("totalInvestmentRange","totalInvestment")' onchange='updateSliderValue("totalInvestmentRange")'></div></div><div class="slider-wrap"><input class="form-range" type="range" id="totalInvestmentRange" min="1000" max="1000000" step="1000" value="100000" oninput='updateSliderValue("totalInvestmentRange")' onchange='updateInputValue("totalInvestmentRange","totalInvestment")'><div class="invest-amt" style="margin-top:-15px;justify-content:space-between"><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div></div></div><div class="value-wrap"><div class="min"><span class="rupee">₹&nbsp;</span><span class="amount">1 lakh</span></div><div class="max"><span class="rupee">₹&nbsp;</span><span class="amount">10 lakh</span></div></div></div><div class="range-wrap"><div class="goal-wrap"><p class="goal-title">Interest Rate<span class="sublabel sublableMonthly">(P.A)</span></p><div class="input-wrap year-wrap"><input type="number" id="interestRate" value="7" oninput='updateInputValue("interestRateRange","interestRate")' onchange='updateSliderValue("interestRateRange")'><span>&nbsp; %</span></div></div><div class="slider-wrap"><input type="range" class="form-range" id="interestRateRange" min="1" max="20" step="0.1" value="7" oninput='updateSliderValue("interestRateRange")' onchange='updateInputValue("interestRateRange","interestRate")'><div class="invest-amt" style="margin-top:-15px;justify-content:space-between"><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div></div></div><div class="value-wrap"><div class="min"><span class="rupee">&nbsp;</span><span class="amount">1%</span></div><div class="max"><span class="rupee">&nbsp;</span><span class="amount">20%</span></div></div></div><div class="range-wrap"><div class="goal-wrap"><p class="goal-title">Investment Tenure<span class="sublabel sublableMonthly">(Years)</span></p><div class="input-wrap year-wrap"><input type="number" id="timeDuration" value="2" oninput='updateInputValue("timeDurationRange","timeDuration")' onchange='updateSliderValue("timeDurationRange")'><span>Years</span></div></div><div class="slider-wrap"><input type="range" class="form-range" id="timeDurationRange" min="1" max="10" step="1" value="2" oninput='updateSliderValue("timeDurationRange")' onchange='updateInputValue("timeDurationRange","timeDuration")'><div class="invest-amt" style="margin-top:-15px;justify-content:space-between"><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div><div class="amt-slot fwbold">|</div></div></div><div class="value-wrap"><div class="min"><span class="rupee">&nbsp;</span><span class="amount">1 Year</span></div><div class="max"><span class="rupee">&nbsp;</span><span class="amount">10 Year</span></div></div></div></div><div class="fdGraph"><div class="chart-container" style="position:relative;height:200px;width:200px;margin:0 auto"><canvas id="fdChart"></canvas></div></div></div><div class="resultBox"><div id="fdMaturityAmount" class="fDinvestMent-section"></div><a target="_blank" href="https://www.kotaklife.com/life-insurance-plans/#/buy-kotak-guaranteed-fortune-builder?utm_source=kgfb_organic&utm_medium=website&utm_campaign=fdcalculator&utm_content=investnow" class="productCard-invest">Invest Now</a></div></div></div></div></div></section><section id="whyUseFd"><div class="midWrapper"><div class="whyUseFd-grid"><div><h2 class="whyUseFd-title">Why use an FD calculator?</h2><p class="whyUseFd-desc">Planning your finances shouldn't be a guessing game. FD is one of the options you should consider when you are looking for investments to complete your short-term goals.</p><br><p class="whyUseFd-desc">An FD is a great investment to build your emergency fund, plan for motorcycle or a car down payment and so on. But, if you are someone who wants to know how much returns can FD give, our FD calculator empowers you with knowledge by:</p><div class="whyUseFd-list"><div class="whyUseFd-flex"><img src="./assets/images/calculator/fd-calcuator/arrow.svg" alt="List"><div>Estimating your future earnings: See how much your FD can grow based on your principal amount, interest rate, and chosen tenure.</div></div><div class="whyUseFd-flex"><img src="./assets/images/calculator/fd-calcuator/arrow.svg" alt="List"><div>Making informed decisions: Compare different FD options and choose the one that aligns with your financial goals.</div></div><div class="whyUseFd-flex"><img src="./assets/images/calculator/fd-calcuator/arrow.svg" alt="List"><div>Understanding the variables: Gain clarity on key factors like interest rate, tenure, and how they impact your returns.</div></div></div></div><div class="whyUseFd-img"><img src="./assets/images/calculator/fd-calcuator/fdCalculator.jpg" alt="Why Use FD"></div></div></div></section><section id="calculateReturns"><div class="midWrapper"><h2 class="calculateReturns-title">Calculate Your Future Earnings with Ease</h2><p class="calculateReturns-desc">Our user-friendly FD calculator makes planning a breeze. Simply enter:</p><div class="timeline line"><div class="list"><div class="timestamp"><span class="date">1</span></div><div class="status"><p><b>Principal amount:</b><br>The lump sum you're investing.</p></div></div><div class="list"><div class="timestamp"><span class="date">2</span></div><div class="status"><p><b>Interest rate:</b><br>The annual interest rate offered by the FD.</p></div></div><div class="list"><div class="timestamp"><span class="date">3</span></div><div class="status"><p><b>Tenures:</b><br>The duration for which you invest (months or years).</p></div></div></div></div></section><section id="underStandingKeyfactor"><div class="midWrapper"><h2 class="underStandingKeyfactor-title">Understanding the Key Factors of FD Calculators</h2><p class="underStandingKeyfactor-desc">When it comes to understanding FD returns, you have first understand the various terms used when people talk about FDs in general. Check them out below to make the most out of the FD calculator and predicting FD returns effectively.</p><div class="underStandingKeyfactor-list"><ul><li><img src="./assets/images/calculator/fd-calcuator/listIcon.svg" alt="List"><p><b>Interest rate:</b>The higher the rate, the more you earn. Compare rates across different FDs to find the best deal.</p></li><li><img src="./assets/images/calculator/fd-calcuator/listIcon.svg" alt="List"><p><b>Tenure:</b>Longer tenures generally offer higher interest rates but limit your access to the funds. Choose a tenure that aligns with your goals.</p></li><li><img src="./assets/images/calculator/fd-calcuator/listIcon.svg" alt="List"><p><b>Principal amount:</b>The more you invest, the higher your returns. Start small and gradually increase your investments as your finances grow.</p></li><li><img src="./assets/images/calculator/fd-calcuator/listIcon.svg" alt="List"><p><b>Compound interest:</b>The magic of compounding lets your interest earn interest, boosting your overall returns. Opt for compounding whenever possible.</p></li><li><img src="./assets/images/calculator/fd-calcuator/listIcon.svg" alt="List"><p><b>Simple interest:</b>While it offers stability, the returns are lower compared to compounding. Choose simple interest for shorter tenures or specific needs.</p></li></ul></div></div></section><section id="proTipFD"><div class="midWrapper"><h2 class="proTipFD-title">Pro Tips for Smart Investors</h2><div class="proTipFD-list"><div><img src="./assets/images/calculator/fd-calcuator/List_1.svg" alt="List">Maximize interest rates: Research and compare rates offered by different banks and financial institutions. Consider special FD schemes for senior citizens or specific investment needs.</div><div><img src="./assets/images/calculator/fd-calcuator/List_2.svg" alt="List">Optimize tenure: Match your tenure with your goals. Short-term goals might benefit from shorter tenures, while long-term goals can leverage longer tenures for higher returns.</div><div><img src="./assets/images/calculator/fd-calcuator/List_3.svg" alt="List">Compounding is your friend: Choose FDs with compounding options to maximize your returns.</div><div><img src="./assets/images/calculator/fd-calcuator/List_4.svg" alt="List">Explore reinvestment options: Consider reinvesting your matured FD at a higher interest rate for even greater growth.</div></div></div></section><section id="otherCalc"><div class="midWrapper"><div class="otherCalcCard"><h3 class="otherClass">Check Out Our Other Calculators</h3><p class="otherClassDesc">Financial well-being starts with a plan. You can check out more financial tools and calculators to get a head start in your financial journey.</p><span class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span><ul class="calculatorCardList fdslick"><li><a href="https://www.kotaklife.com/financial-tools-calculators/ulip-calculator"><div class="menu-icon c1"></div>ULIP<br>Calculator</a></li><li><a href="https://www.kotaklife.com/financial-tools-calculators/hra-calculator"><div class="menu-icon c7"></div>HRA<br>Calculator</a></li><li><a href="https://www.kotaklife.com/financial-tools-calculators/sip-calculator"><div class="menu-icon c5"></div>SIP<br>Calculator</a></li><li><a href="https://www.kotaklife.com/financial-tools-calculators/retirement-calculator"><div class="menu-icon c4"></div>Retirement<br>Calculator</a></li><li><a href="https://www.kotaklife.com/financial-tools-calculators/bmi-calculator"><div class="menu-icon c6"></div>BMI<br>Calculator</a></li><li class="secondCard"><a href="https://www.kotaklife.com/financial-tools-calculators/rd-calculator"><div class="menu-icon c9"></div>RD<br>Calculator</a></li><li class="secondCard"><a href="https://www.kotaklife.com/financial-tools-calculators/compound-interest-calculator"><div class="menu-icon c3"></div>Compound<br>Interest Calculator</a></li>

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
                
</ul></div></div></section><section id="comppundFaq"><div class="container"><div class="accordSec"><h2 class="accordTitle">People also ask</h2><div class="accordList"><div class="accordItem"><div class="accordLinks"><h3><a href="javascript:void(0);"><span>1</span>What is the FD calculator?</a></h3></div><span class="icon"></span><div class="accordDesc" style="display:none"><p>An FD calculator is an online tool that helps you calculate the maturity amount and interest earned on your fixed deposit (FD) investment. It takes into account factors like principal amount, interest rate, tenure, and compounding frequency to provide an estimated result.</p></div></div><div class="accordItem"><div class="accordLinks"><h3><a href="javascript:void(0);"><span>2</span>What factors affect FD interest rates?</a></h3></div><span class="icon"></span><div class="accordDesc" style="display:none"><p>Several factors influence FD interest rates, including RBI policies, bank competition, investment tenure, and deposit amount.</p></div></div><div class="accordItem"><div class="accordLinks"><h3><a href="javascript:void(0);"><span>3</span>What is the best FD tenure to choose?</a></h3></div><span class="icon"></span><div class="accordDesc" style="display:none"><p>The ideal tenure depends on your financial goals and risk tolerance. Shorter tenures offer higher liquidity, while longer tenures generally offer higher interest rates.</p></div></div><div class="accordItem"><div class="accordLinks"><h3><a href="javascript:void(0);"><span>4</span>Are there any alternatives to FD calculators?</a></h3></div><span class="icon"></span><div class="accordDesc" style="display:none"><p>Yes, you can find FD information on bank websites or consult a financial advisor. However, calculators offer a quicker and more convenient way to compare and estimate returns.</p></div></div></div></div></div></section><section class="term-blog ulip-blogs" id="ulip_blog"><div class="midWrapper"><div class="term-blog"><h2 class="mb-20 term-tags fnt-24">Wealth Creation Related Blogs</h2><ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div"></ul><!--<div class="loadmores"><a href="javascript:;" class="link" id="load-more-articles" onclick="dataLayer.push({&#39;event&#39;: &#39;event financial tools calculators load&#39;, &#39;category&#39;: &#39;new customers&#39;, &#39;action&#39;: &#39;financial tools calculators&#39;, &#39;label&#39;: &#39;load more&#39;});" style="display:table">Load More</a></div>--><div class="noRecord" style="display:none"></div><div class="innerLoader" style="display:none"><img src="assets/images/loader.gif" alt="Kotak Loader"></div></div></div></section><section class="terms new-terms pt-0" id="terms_conditions"><div class="midWrapper"><button type="button" name="disclaimer" class="collapsible terms-txt whitespace-initial">Read about Tax benefits &amp; Plan Disclaimer</button><div class="content-col mb-0 tab-align li-disc terms-para"><h3 class="terms-conditions">Disclaimers-</h3><div class="disclamier-pera pt-0"><p class="pl-0">You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant</p><br><p class="pl-0">The calculation is generated on the basis of information provided and does not constitute an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the advised to go through the sales brochure before conducting any sale.</p><br><br><p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS/FRADULENT OFFERS</b></p><p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p><p class="pl-0 mt-10">Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN : U66030MH2000PLC128503, Regd. Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400 051. Website: https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800. https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800.</p><p class="pl-0 mt-10">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Limited under license</p></div></div></div></section></div></div><input type="hidden" id="pageNo" value="0"><input type="hidden" id="url" value="<?=$_SERVER['REQUEST_URI']?>"><input type="hidden" id="sortType" value="recent"> <input type="hidden" id="pageLimit" value="4"> <input type="hidden" id="searchArticle" value=""> <input type="hidden" id="pageType" value="topic"> <input type="hidden" id="topicSlug" value="wealth-creation"> <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script src="assets/js/global.js"></script><script src="https://cdn.jsdelivr.net/npm/chart.js"></script><script async="" src="assets/js/fd-calculator.js"></script><script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" language="javascript"></script><script>var acc = document.getElementsByClassName("collapsible");
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
    });</script><script>var ulip_rating = term_rating = savings_rating = '';
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
     </script><script>setTimeout(function(){if($(".fdslick").slick({infinite:!1,arrows:!0,dots:!1,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1},breakpoint:768,settings:{slidesToShow:1,slidesToScroll:1}}]}),768<$(window).width()){var a=$(".pagingInfo-facslick");$(".fdslick").on("init reInit afterChange",function(s,i,n,o){var t=(n||0)+1;a.html('<span class="finished_count">'+(t+3)+'</span><span class="total_count">/'+i.slideCount+"</span>")})}if($(window).width()<768){a=$(".pagingInfo-facslick");$(".fdslick").on("init reInit afterChange",function(s,i,n,o){var t=(n||0)+1;a.html('<span class="finished_count">'+(t+0)+'</span><span class="total_count">/'+i.slideCount+"</span>")})}},2e3)</script>