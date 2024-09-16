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
    <link rel="stylesheet" href="assets/css/investment.css">
    <link rel="stylesheet" href="assets/css/rangeslider.css">
  <link rel="stylesheet" href="assets/css/hra.css">
  <link rel="stylesheet" href="assets/css/fd-calculator.css">
 <div class="interactionWrap investment">
      <div class="pageWrapper">
        <section id="investment_calculator">
          <div class="container">
            <ul class="breadcrumb-ulip">
              <li><a href="https://www.kotaklife.com/">Home&gt;</a></li>
              <li><a href="javascript:void(0);">Financial Tool Calculator &gt;</a></li>
              <li class="active"><a href="javascript:void(0);">HRA Calculator</a></li>
            </ul>
            <div class="headSection">
              <h1 class="section_heading">HRA Calculator</h1>
              <p class="hraDesc">An HRA Calculator is a handy tool that simplifies the process of determining HRA exemptions for tax purposes, offering accurate calculations based on input parameters received.
                 <span id="dots">...</span><span id="more"> House Rent Allowance (HRA) stands out as a significant avenue for individuals to reduce their tax liability. However, navigating the complexities of HRA exemptions can often prove challenging, requiring meticulous calculations and careful consideration of various factors. The HRA calculator is a powerful tool designed to simplify the process of determining HRA exemptions and maximizing tax savings. </span>
                 <span style="color: #ED3237 ;cursor: pointer;font-weight: 600;" onclick="readMoreHra()" id="myBtn"> Read more</span>
              </p>
            </div>
            <div class="row cal-margin">
              <div class="col-lg-12 m-no-padding">
                <div class="hraCard">
                  <form>
                    <div class="hraCard-grid">
                      <div class="hraCard-img">
                        <img src="assets/images/calculator/hra/hra_important.svg" alt="Hra Calculator" />
                      </div>
                      
                      <div class="hra-fields">
                        <div class="formGroup formLabel w100">
                          <label for="basicSalary">Basic Salary (p.a): <span class="hraTooltip" data-tooltip="Enter your annual basic salary amount. This is the fixed amount paid before any additional benefits or bonuses." data-tooltip-pos="right" data-tooltip-length="large">?</span></label>
                          <input type="number" class="form-control " id="basicSalary" placeholder="Enter Basic Salary" required>
                        </div>
                          
                        <div class="formGroup formLabel w100">
                          <label for="dearnessAllowance">Dearness Allowance (p.a): <span class="hraTooltip" data-tooltip="Enter the dearness allowance amount if applicable. This allowance is paid to government employees and pensioners to offset the impact of inflation on living expenses. If not applicable, enter '0'." data-tooltip-pos="right" data-tooltip-length="large">?</span></label>
                          <input type="number" class="form-control " id="dearnessAllowance" placeholder="Enter Dearness Allowance" required>
                        </div>
                        
                        <div class="formGroup formLabel w100">
                          <label for="hraReceived">HRA Received (p.a): <span class="hraTooltip" data-tooltip="Enter the portion of your salary designated by the company to cover your housing rental costs." data-tooltip-pos="right" data-tooltip-length="large">?</span> </label>
                          <input type="number" class="form-control " id="hraReceived" placeholder="Enter HRA Received" required>
                        </div>
                          
                        <div class="formGroup formLabel w100">
                          <label for="totalRentPaid">Total Rent Paid (p.a): </label>
                          <input type="number" class="form-control " id="totalRentPaid" placeholder="Enter Total Rent Paid" required>
                        </div>
                        <div class="w100">
                          <div class="metroCity formLabel">
                            <label style="font-size: 15px;" for="isMetroCity">Do you live in metro city like Delhi, Mumbai, Kolkata or Chennai?*</label>
                            <div class="switch-field">
                              <input type="radio" id="isMetroCity" name="cityType" value="metro" checked>
                              <label for="isMetroCity">Yes</label>
                              <input type="radio" id="isNotMetroCity" name="cityType" value="notMetro">
                              <label for="isNotMetroCity">No</label>
                            </div>
                          </div>
                          <button type="button" class="calculator-submit" onclick="calculateHRA()">Calculate HRA Exemption</button>
                        </div>
                      </div>
                      
                      <div id="result">
                        <div class="resultBox">
                          <div class="resultText">Exempted HRA <span id="exemptedHRA"> -- </span></div>
                          <div class="resultText2">Taxable HRA<span id="taxableHRA"> -- </span></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="hraImportant">
          <div class="midWrapper">
            <div class="hraImportant-grid">
              <div>  
                <h2 class="hraImportant-title">What is HRA?</h2>
                <p class="hraImportant-desc">House Rent Allowance (HRA) is a component of an employee's salary package provided by the employer to cover the cost of renting accommodation. It is a part of the employee's overall salary structure and is typically included in the monthly salary payment. A simple tool such as HRA calculator makes the calculation for HRA easy.</p>
                <!-- <br> 
                <p class="hraImportant-desc">Additionally, HRA offers tax benefits, allowing employees to save on income tax. Employers use HRA as a means to attract and retain talent, as it is a valuable component of the overall compensation package.</p> -->
              </div>
              <div class="hraImportant-img">
                <img src="assets/images/calculator/hra/hra_calculator.jpg" alt="Why is HRA important?" />
              </div>
            </div>
          </div>
        </section>

        <section id="hraCalculation">
          <div class="midWrapper">
            <h2 class="hraCalculation-title">Understanding the HRA Calculation</h2>
            <p class="hraCalculation-desc">To better understand how HRA is calculated, let's explore its components and the methods used for calculation.</p>
            <h3 class="hraCalculation-subTile">Components of HRA Calculation</h3>
            <div class="hraCalculation-list">
              <div class="hraCalculation-flex">
                <img src="assets/images/calculator/hra/arrow.svg" alt="List" />
                <div>
                  <h4 class="hraCalculation-innerTitle">Basic Salary and HRA Calculation</h4>
                  <p class="hraCalculation-subDesc">The HRA calculation is based on the employee's basic salary and the percentage of the basic salary designated as HRA. Typically, employers set the HRA percentage to ensure it aligns with the employee's housing needs and the prevailing rental rates in the area.</p>
                  <br>
                  <p class="hraCalculation-subDesc">For example, if an employee's basic salary is ₹50,000 per month, and the employer designates 40% of the basic salary as HRA, the HRA component would be ₹20,000 per month</p>
                </div>
              </div>
              <div class="hraCalculation-flex">
                <img src="assets/images/calculator/hra/arrow.svg" alt="List" />
                <div>
                  <h4 class="hraCalculation-innerTitle">Actual HRA Calculation</h4>
                  <p class="hraCalculation-subDesc">The actual HRA calculation involves considering multiple factors, such as the actual rent paid by the employee, the HRA received from the employer, and the employee's salary structure. The lowest of the following three amounts is considered for HRA exemption:</p>
                  <ol class="hraCalculation-ordered">
                    <li>Actual rent paid minus 10% of the basic salary</li>
                    <li>50% of the basic salary for employees residing in metro cities (40% for non-metro cities)</li>
                    <li>Actual HRA received from the employer</li>
                  </ol>
                  <p class="hraCalculation-subDesc">Expanding on the actual HRA calculation, let's take a closer look at how each of these factors contributes to determining the HRA exemption.</p>
                  <br>
                  <p class="hraCalculation-subDesc">The first factor, "actual rent paid minus 10% of the basic salary," allows employees to claim an exemption on the portion of rent that exceeds 10% of their basic salary. This factor ensures that employees are not taxed on a substantial portion of their rental expenses.</p>
                  <br>
                  <p class="hraCalculation-subDesc">The second factor, "50% of the basic salary for employees residing in metro cities (40% for non-metro cities)," provides a benchmark for HRA exemption based on the employee's location. In metro cities, where the cost of living is generally higher, employees can claim a higher percentage of their basic salary as HRA exemption compared to non-metro cities.</p>
                  <br>
                  <p class="hraCalculation-subDesc">The third factor, "actual HRA received from the employer," takes into account the HRA amount provided by the employer. This factor ensures that employees receive the intended financial assistance for their housing needs.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="hraTaxExemption">
          <div class="midWrapper">
            <h2 class="hraTaxExemption-title">How to Calculate HRA tax exemption?</h2>
            <p class="hraTaxExemption-desc">Calculating HRA involves understanding different aspects, such as HRA deduction, house rent allowance calculation, and HRA calculation for income tax purposes.</p>
            <div class="hraTaxExemption-list">
              <div class="hraCalculation-flex">
                <img src="assets/images/calculator/hra/List_1.svg" alt="List" />
                <div>
                  <h4 class="hraTaxExemption-innerTitle">Calculate HRA Deduction</h4>
                  <p class="hraTaxExemption-subDesc">To calculate HRA deduction, you need the following information:</p>
                  <ol class="hraTaxExemption-ordered">
                    <li>Basic salary</li>
                    <li>HRA received from the employer</li>
                    <li>Actual rent paid</li>
                    <li>City classification (metro or non-metro)</li>
                  </ol>
                  <p class="hraTaxExemption-subDesc">Using this information, you can compute the HRA deduction using the formula provided by the income tax department.</p>
                </div>
              </div>
              <div class="hraCalculation-flex">
                <img src="assets/images/calculator/hra/List_2.svg" alt="List" />
                <div>
                  <h4 class="hraTaxExemption-innerTitle">Calculate House Rent Allowance</h4>
                  <p class="hraTaxExemption-subDesc">To understand the calculation of HRA in salary, you should know the HRA percentage and the employee's basic salary. Multiply the basic salary by the HRA percentage to determine the monthly HRA amount.</p>
                </div>
              </div>
              <div class="hraCalculation-flex">
                <img src="assets/images/calculator/hra/List_3.svg" alt="List" />
                <div>
                  <h4 class="hraTaxExemption-innerTitle">Calculate HRA for Income Tax</h4>
                  <p class="hraTaxExemption-subDesc">Calculating HRA for income tax purposes involves taking into account the actual rent paid, the HRA received, and the salary structure. By comparing these amounts, you can determine the HRA component that will be considered for tax exemption.</p>
                  <p class="hraTaxExemption-subDesc">Expanding on the calculation of HRA for income tax purposes, let's delve into the different factors that influence the HRA exemption.</p>
                  <p class="hraTaxExemption-subDesc">The first factor is "actual rent paid minus 10% of the basic salary." This factor allows employees to claim an exemption on the portion of rent that exceeds 10% of their basic salary. </p>
                  <div class="codeBox">
                    <p class="hraTaxExemption-subDesc">For example, if an employee's actual rent paid is ₹25,000 and their basic salary is ₹50,000, the amount eligible for exemption would be: </p>
                    <p class="hraTaxExemption-value">[₹25,000 - (₹50,000 * 10%)] = ₹15,000.</p>
                    <p class="hraTaxExemption-subDesc">The second factor is "50% of the basic salary for employees residing in metro cities (40% for non-metro cities)." This factor provides a benchmark for HRA exemption based on the employee's location. If an employee resides in a metro city and their basic salary is ₹50,000, the amount eligible for exemption would be: </p>
                    <p class="hraTaxExemption-value">[₹50,000 * 50%] = ₹25,000.</p>
                    <p class="hraTaxExemption-subDesc">The third factor is "actual HRA received from the employer." This factor takes into account the HRA amount provided by the employer. If the employee receives an HRA of ₹20,000, this amount would be considered for tax exemption.</p>
                    <p class="hraTaxExemption-subDesc">By comparing these amounts, the lowest value among the three will be considered for HRA exemption.</p>
                  </div>
                </div>
              </div>
            </div>  
          </div> 
        </section>
          
        <section id="hraRules">
          <div class="midWrapper">  
            <h2 class="hraRules-title">HRA Rules for Self-Employed Individuals</h2>
            <p class="hraRules-desc">While HRA is typically associated with salaried individuals, self-employed individuals can also benefit from HRA under specific conditions. We'll explore the unique rules and considerations for those who are their own bosses.</p>
            <div class="hraRules-list">
              <div class="hraRules-flex">
                <img src="assets/images/calculator/hra/arrow.svg" alt="List" />
                <div>
                  <h3 class="hraRules-innerTitle">Section 80GG Deduction</h3>
                  <p class="hraRules-subDesc">Self-employed individuals can claim a deduction for the rent paid under Section 80GG of the Income Tax Act.</p>
                  <br>
                  <p class="hraRules-subDesc">This deduction is available to individuals who do not receive HRA and do not own a residential property in the location where they reside or carry on their business.</p>
                </div>
              </div>
              <div class="hraRules-flex">
                <img src="assets/images/calculator/hra/arrow.svg" alt="List" />
                <div>
                  <h3 class="hraRules-innerTitle">Conditions for Claiming Deduction</h3>
                  <p class="hraRules-subDesc">To claim the deduction, the taxpayer should not own a residential house at the place where he/she resides or carries on business.</p>
                  <br>
                  <p class="hraRules-subDesc">The taxpayer, spouse, or minor child should not own a residential house in the city where the self-employed individual is employed or carrying on business.</p>
                  <br>
                  <p class="hraRules-subDesc">The taxpayer must file a declaration in Form 10BA to claim the deduction.</p>
                </div>
              </div>
              <div class="hraRules-flex">
                <img src="assets/images/calculator/hra/arrow.svg" alt="List" />
                <div>
                  <h3 class="hraRules-innerTitle">Amount of Deduction</h3>
                  <p class="hraRules-subDesc">The deduction under Section 80GG is the least of the following:</p>
                  <ol class="hraRules-ordered">
                    <li>Rent paid minus 10% of total income.</li>
                    <li>₹5,000 per month.</li>
                    <li>25% of total income.</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="documentReqd">
          <div class="midWrapper">
            <h2 class="documentReqd-title">Documents Required for HRA Exemption Claim</h2>
            <p class="documentReqd-desc">To claim HRA exemption, you need to be diligent about maintaining proper documentation. We'll provide a comprehensive list of documents required, emphasizing the importance of record-keeping for a smooth claim process.</p>
            <div class="documentReqd-list">
              <div class="documentReqd-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="documentReqd-innerTitle">Rent Receipts</h3>
                  <p class="documentReqd-subDesc">Rent receipts are essential for HRA claims. They should include details such as the landlord's name, address, the amount of rent paid, and the period for which the rent is paid.</p>
                  <br>
                  <p class="documentReqd-subDesc">The receipts should be signed by the landlord and ideally have revenue stamps affixed (though it's not mandatory).</p>
                </div>
              </div>
              <div class="documentReqd-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="documentReqd-innerTitle">Rent Agreement</h3>
                  <p class="documentReqd-subDesc">A formal rent agreement between the tenant and the landlord is a crucial document. It outlines the terms and conditions of the rent, including the rent amount, duration of the agreement, and any other terms agreed upon.</p>
                </div>
              </div>

              <div class="documentReqd-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="documentReqd-innerTitle">Cancelled Rent Cheques or Bank Statements</h3>
                  <p class="documentReqd-subDesc">Cancelled rent cheques or evidence of electronic fund transfers can serve as proof of payment. Bank statements reflecting the rent transactions can also be submitted.</p>
                </div>
              </div>
              <div class="documentReqd-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="documentReqd-innerTitle">Landlord's PAN (Permanent Account Number)</h3>
                  <p class="documentReqd-subDesc">Providing the PAN details of the landlord is mandatory if the annual rent paid exceeds ₹1,00,000. This is a requirement introduced to prevent tax evasion.</p>
                </div>
              </div>
              <div class="documentReqd-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="documentReqd-innerTitle">Declaration Form (if required)</h3>
                  <p class="documentReqd-subDesc">Employers may ask employees to fill out a declaration form stating that they are paying rent and do not own a property in the specified location.</p>
                </div>
              </div>
              <div class="documentReqd-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="documentReqd-innerTitle">Form 10BA (if required)</h3>
                  <p class="documentReqd-subDesc">In certain cases, individuals may need to fill out Form 10BA, declaring that they are paying rent and not receiving HRA benefits. This is mostly done for self-employed individuals. </p>
                </div>
              </div>
              <div class="documentReqd-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="documentReqd-innerTitle">Rental Agreement Utility Bills</h3>
                  <p class="documentReqd-subDesc">Utility bills such as electricity or water bills in the tenant's name can provide additional proof of residence at the rented property.</p>
                </div>
              </div>
              <div class="documentReqd-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="documentReqd-innerTitle">Occupancy Certificate (if applicable)</h3>
                  <p class="documentReqd-subDesc">In some cases, especially in newer constructions, providing an occupancy certificate may be required to validate the legality of the residence.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="conditionForHRA">
          <div class="midWrapper">
            <h2 class="conditionForHRA-title">Conditions for Claiming HRA Exemption</h2>
            <p class="conditionForHRA-desc">Claiming HRA exemption comes with specific conditions. We'll outline these conditions and highlight common pitfalls to avoid, ensuring you meet all the necessary criteria for a successful exemption claim.</p>
            <div class="conditionForHRA-list">
              <div class="conditionForHRA-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="conditionForHRA-innerTitle">Salary Component</h3>
                  <p class="conditionForHRA-subDesc">The taxpayer must receive HRA as a part of their salary package from their employer.</p>
                </div>
              </div>
              <div class="conditionForHRA-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="conditionForHRA-innerTitle">Rent Payment</h3>
                  <p class="conditionForHRA-subDesc">The taxpayer must actually incur expenses towards payment of rent for a residential accommodation.</p>
                </div>
              </div>
              <div class="conditionForHRA-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="conditionForHRA-innerTitle">Residential Accommodation</h3>
                  <p class="conditionForHRA-subDesc">The rented accommodation should be used for residential purposes.</p>
                </div>
              </div>
              <div class="conditionForHRA-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="conditionForHRA-innerTitle">Own House</h3>
                  <p class="conditionForHRA-subDesc">The taxpayer or their spouse or minor child should not own a residential property in the city where they are employed or carry on business. However, if the taxpayer lives in a different city, ownership of property in that city does not affect HRA eligibility.</p>
                </div>
              </div>
              <div class="conditionForHRA-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="conditionForHRA-innerTitle">Rent Agreement</h3>
                  <p class="conditionForHRA-subDesc">It is advisable to have a formal rent agreement with the landlord, specifying the terms and conditions of the rent, such as the rent amount, duration of the agreement, and any other relevant terms.</p>
                </div>
              </div>
              <div class="conditionForHRA-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="conditionForHRA-innerTitle">Rent Receipts</h3>
                  <p class="conditionForHRA-subDesc">Rent receipts should be obtained from the landlord for each month. These receipts should contain details such as the landlord's name, address, the amount of rent paid, and the period for which the rent is paid.</p>
                </div>
              </div>
              <div class="conditionForHRA-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>  
                  <h3 class="conditionForHRA-innerTitle">PAN of Landlord</h3>
                  <p class="conditionForHRA-subDesc">If the annual rent paid exceeds ₹1,00,000, the landlord's PAN (Permanent Account Number) needs to be provided as proof. This is a mandatory requirement.</p>
                </div>
              </div>
              <div class="conditionForHRA-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="conditionForHRA-innerTitle">City Classification</h3>
                  <p class="conditionForHRA-subDesc">The amount of HRA exemption depends on whether the taxpayer is residing in a metro city or a non-metro city. The definition of metro cities for HRA purposes may vary, but it typically includes cities with higher living costs.</p>
                </div>
              </div>
              <div class="conditionForHRA-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="conditionForHRA-innerTitle">Amount of HRA Exemption</h3>
                  <p class="conditionForHRA-subDesc">The HRA exemption is the minimum of the following three amounts:</p>
                  <ol class="conditionForHRA-ordered">
                    <li>Actual HRA received</li>
                    <li>50% of the basic salary (for employees in metro cities) or 40% of the basic salary (for employees in non-metro cities)</li>
                    <li>Rent paid minus 10% of basic salary</li>
                  </ol>
                </div>
              </div>
              <div class="conditionForHRA-flex">
                <img src="assets/images/calculator/hra/listIcon.svg" alt="List" />
                <div>
                  <h3 class="conditionForHRA-innerTitle">Declaration</h3>
                  <p class="conditionForHRA-subDesc">Employees may need to provide a declaration to their employer stating that they are paying rent for a residential accommodation and do not own a house in the specified location.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
 
<!-- <section id="otherCalc">
          <div class="midWrapper">
            <div class="otherCalcCard">
           <p class="otherClass">Check Out Our Other Calculators</p>
              <ul class="calculatorList">
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/ulip-calculator">
                    <img src="assets/images/calculator/bmi-calculator/Investment-Calculator.svg" />
                    ULIP Calculator</a>
                </li>
                
                <li class="secondCard">
                  <a href="https://www.kotaklife.com/financial-tools-calculators/compound-interest-calculator">
                    <img src="assets/images/calculator/bmi-calculator/Compound-Interest-Calculator.svg" />
                    Compound Interest Calculator</a>
                </li>
                <li class="secondCard">
                  <a href="https://www.kotaklife.com/financial-tools-calculators/retirement-calculator">
                  <img src="assets/images/calculator/bmi-calculator/Retirement-Planning-Calculator.svg" />
                    Retirement Calculator</a>
                </li>
                 <li class="secondCard">
                  <a href="https://www.kotaklife.com/financial-tools-calculators/sip-calculator">
                  <img src="assets/images/calculator/bmi-calculator/sip-icon.svg" />
                    SIP Calculator</a>
                </li>
                 
				
              </ul>
            </div>
          </div>
        </section> -->


        <section id="otherCalc">
          <div class="midWrapper">
            <div class="otherCalcCard">
              <h3 class="otherClass">Check Out Our Other Calculators</h3>
              
              <p class="otherClassDesc">Financial well-being starts with a plan. You can check out more financial tools and calculators to get a head start in your financial journey.</p>
              <span  class="pagingInfo-facslick d-flex playfair_font justify-content-center"></span>
             
              <ul class="calculatorCardList hraslick">
                
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/ulip-calculator">
                   <div class="menu-icon c1"></div>
                    ULIP <br> Calculator</a>
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
                    <h3> <a href="javascript:void(0);"> <span>1</span>Can I get a tax rebate if I am staying in my own house?</a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>Generally, tax rebates are not applicable if you stay in your own house. However, exceptions may exist.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>2</span>Can I get both an HRA tax exemption and a tax rebate on my home loan?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, it's possible to claim both HRA exemption and a tax rebate on your home loan, provided you meet the eligibility criteria for each.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>3</span>Can I claim HRA by paying rent to parents?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, you can claim HRA by paying rent to your parents, but certain conditions must be met.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>4</span>What should I do if I forgot to submit the rent receipts to my employer?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Promptly submit the receipts to your employer and communicate any oversight to ensure timely processing.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>5</span>Can I claim HRA if I am also claiming home loan deductions?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, you can simultaneously claim HRA and home loan deductions, as they serve different purposes under the tax code.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>6</span>What should I do if my landlord doesn't give me his PAN?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>If your landlord does not provide PAN for HRA claims, your employer can deny your HRA claim. However, you can always claim the excess tax deducted at the end of the year tax filing. </p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>7</span>How much of my HRA is exempt from tax?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>To calculate HRA tax exemption, you take the minimum of three amounts: actual HRA received, 50% of the basic salary (for employees in metro cities) or 40% of the basic salary (for employees in non-metro cities), and rent paid minus 10% of basic salary. The resulting figure is the HRA exempt from income tax.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>8</span>How much tax will I save on HRA?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The amount of tax saved on HRA depends on various factors, including your salary, the actual HRA received, and the rent paid. To estimate the tax savings, you can use the HRA exemption formula: Actual HRA received - Exempt HRA.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>9</span>How do I claim maximum HRA?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>*To claim the maximum HRA, ensure that you:</p>
                    <p>•	Provide accurate details of rent paid, rent receipts, and rent agreement</p>
                    <p>•	Communicate any change in rent or rental accommodation to your employer</p>
                    <p>•	Provide your landlord's PAN if the annual rent exceeds ₹1,00,000</p>
                    <p>•	Understand and apply the HRA calculation formula correctly to maximize the exempt HRA</p>
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
        <section class="consumer mb-30">
      <div class="midWrapper">
          <h3 class="ls1"> - A Consumer Education Initiative series by Kotak Life</h3>
          
      </div>
  </section>
         <section class="terms new-terms pt-0" id="terms_conditions">
          <div class="midWrapper">
            <button type="button" name="disclaimer" class="collapsible terms-txt whitespace-initial">Read about Tax
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
    <input type="hidden" id="pageNo" value="1">
    <input type="hidden" id="sortType" value="recent">
    <input type="hidden" id="pageLimit" value="4">
    <input type="hidden" id="searchArticle" value="">
    <input type="hidden" id="pageType" value="topic">
    <input type="hidden" id="topicSlug" value="savingstax">
    <input type="hidden" id="url" value="<?=$_SERVER['REQUEST_URI']?>">
    <script async="" src="assets/js/hra.js"></script>
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

setTimeout(function(){
$('.hraslick').slick({
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
  var $slickElementgspnew11 = $('.hraslick');
  $slickElementgspnew11.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
      var i = (currentSlide ? currentSlide : 0) + 1;
      $statusgspnew11.html('<span class="finished_count">' + (i + 3) + '</span>' + '<span class="total_count">' + '/' + slick.slideCount + '</span>');
  });
}

if ($(window).width() < 768) {
  var $statusgspnew11 = $('.pagingInfo-facslick');
  var $slickElementgspnew11 = $('.hraslick');
  $slickElementgspnew11.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
      var i = (currentSlide ? currentSlide : 0) + 1;
      $statusgspnew11.html('<span class="finished_count">' + (i + 0) + '</span>' + '<span class="total_count">' + '/' + slick.slideCount + '</span>');
  });
}
    },2000);
/*slick counter gsp ^*/
</script>
