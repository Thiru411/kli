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

     <div class="interactionWrap investment">
      <div class="pageWrapper">
        <section id="investment_calculator">
          <div class="container">
            <ul class="breadcrumb-ulip">
              <li><a href="https://www.kotaklife.com/">Home&gt;</a></li>
              <li><a href="javascript:void(0);">Financial Tool Calculator &gt;</a></li>
              <li class="active"><a href="javascript:void(0);">BMI Calculator</a></li>
            </ul>
            <div class="headSection">
              <h1 class="bmiHeadTitle">BMI Calculator</h1>
              <p class="bmiDesc">Body Mass Index (BMI) is a metric acts as an indicator of the body fat content. It is calculated to assess your body weight in relation to your height. BMI is a useful tool to gauge your overall health and determine if you're within a healthy weight range. 
                 <span id="dots">...</span><span id="more"> Our weight is not enough to decide if you are healthy or not. There are other metrics too. If your weight is high, does not always mean that you might be overweight. Your weight should be suitable to your height. These numbers can vary for men and women. 
                  BMI solves this issue and helps you with the right weight and height by assessing your body weight in relation to your height. </span><span style="color: #ED3237 ;cursor: pointer;font-weight: 600;" onclick="readMoreBmi()" id="myBtn"> Read more</span>
              </p>
            </div>
            <div class="row cal-margin">
              <div class="col-lg-8 m-no-padding">
                <div class="bmiCard">
                  <div class="bmiCard-flex">
                    <div class="formGroup formLabel" style="padding-left: 0px;">
                      <label for="weight">Weight (KG)</label>
                      <input type="number" id="weight" class="form-control" placeholder="Enter Weight in Kg" required />
                      <span id="weightErrorMessage" style="color: transparent;display: block;"></span>
                    </div>

                    <div class="formGroup formLabel" style="padding-left: 0px;">
                      <label for="feet">Height in feet:</label>
                      <input type="number" id="feet" class="form-control" placeholder="Enter height in feet" required />
                      <span id="feetErrorMessage" style="color: transparent;display: block;"></span>
                    </div>

                    <div class="formGroup formLabel" style="padding-left: 0px;">
                      <label for="inches">Inches:</label>
                      <input type="number" id="inches" class="form-control" placeholder="Enter height in inch" required />
                      <span id="inchesErrorMessage" style="color: transparent;display: block;"></span>
                    </div>
                  </div>

                  <div class="result-btnGrid">
                    <div class="text-center">
                      <button type="submit" class="calculator-submit" id="calculate">Calculate BMI</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 m-no-padding">
                <div class="bmiCard">
                  <div id="imcContainer">
                    <span class="yellow"></span>
                    <span class="green"></span>
                    <span class="orange"></span>
                    <span class="red"></span>
                    <div id="IMCbar"></div>
                  </div>
                  <div class="flexB mt20">
                    <div class="result">
                      <div class="bmi-value">
                        Your BMI is: 
                        <div class="message" id="bmi">--</div>
                      </div>
                    </div>
                    <div class="category">
                      Category: 
                      <div id="category" class="message">--</div>
                    </div>
                  </div>
                  <div class="bmiInfo-text">
                    <p>Healthy BMI range: 18.5  - 25 kg/m2</p>
                  </div>
                  <!-- <div class="bmiChart">
                    <canvas id="chartJSContainer" width="300" height="200"></canvas>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </section>

        

        <section id="bodyMassIndex">
          <div class="container">
            <div class="bodyMassIndex-grid">
              <div>
                <h2 class="bodyMassIndex-title">What is Body Mass Index?</h2>
                <p class="bodyMassIndex-desc">BMI is a numerical value calculated using an individual's weight and height. It's a standardized formula that helps classify individuals into different categories, such as underweight, normal weight, overweight, and obese. The formula is straightforward:</p>
                <p class="bodyMassIndex-desc ptb10"><b>BMI= weight (kg)/height (m2)</b></p>
                <p class="bodyMassIndex-desc">Here is a list that you can use to interpret the BMI value:</p>
                <ul class="bodyMassIndex-list">
                  <li>•	BMI 18.5 - Underweight </li>
                  <li>•	BMI between 18.5 and 24.9 - Normal Weight</li>
                  <li>•	BMI between 25 and 29.9 -- Overweight</li>
                  <li>•	BMI of 30 or higher - Obese</li>
                </ul>
                <p class="bodyMassIndex-desc">If your BMI is under 18.5 and above 25, you will have to start taking the right steps. If you are underweight, you need more food, nutrition, balanced diet to enhance your weight as per the directions given by your physician. </p>
                <br>
                <p class="bodyMassIndex-desc">For overweight or obese, you will have to reduce the intake of fat, excessive oily stuff and include exercising in your daily routine.</p>
                <br>
                <p class="bodyMassIndex-desc">Our BMI calculator can help you understand this better and in a faster manner. All you got to do is enter the expected details and press on “Calculate”.</p>
              </div>
              <div class="bodyMassIndex-img">
                <img src="assets/images/calculator/bmi-calculator/BMI-calculator.png" alt="BMI Calculator" />
              </div>
            </div>
          </div>
        </section>

        <section id="bmiChildren">
          <div class="midWrapper">
            <h2 class="bmiChildren-title">BMI for Children</h2>
            <p class="bmiChildren-desc">Body Mass Index (BMI) is a measure used to assess body fat based on an individual's weight and height. For children, BMI is calculated similarly to adults, but the interpretation of the results is adjusted for age and gender. The BMI-for-age percentile is commonly used for children and adolescents. It determines the child's weight status compared to children of the same gender and age.</p>
          </div>
        </section>

        <section id="whyUse">
          <div class="container">
            <h2 class="whyUse-title">Why Use Our BMI Calculator?</h2>
            <p class="whyUse-desc">Our BMI Calculator provides a quick and easy way to assess your body weight status. Here are some reasons to use our calculator:</p>
            <ul class="whyUse-list">
              <li>•	Health Assessment: It's an excellent tool for a preliminary assessment of your health and fitness.</li>
              <li>•	Risk Identification: BMI can help identify potential health risks associated with weight, such as heart disease, diabetes, and more.</li>
              <li>•	Risk Identification: BMI can help identify potential health risks associated with weight, such as heart disease, diabetes, and more.</li>
            </ul>
            <p class="whyUse-desc">You can calculate BMI using BMI Calculator: </p>
            <div class="whyUse-formula">BMI = Weight (kg) / [Height(m)]<sup>2</sup></div>
            <p class="whyUse-desc">In order to understand where you stand, you can simply use the above BMI formula to calculate your BMI. To understand where you stand, you can refer to the following chart: </p>
            <div class="whyUse-table">
              <table>
                <th>Classification</th>
                <th>BMI range - kg/m2</th>
                <tbody>
                  <tr>
                    <td>Severe Thinness</td>
                    <td> < 16</td>
                  </tr>
                  <tr>
                    <td>Moderate Thinness</td>
                    <td> 16 - 17</td>
                  </tr>
                  <tr>
                    <td>Mild Thinness</td>
                    <td> 17 - 18.5</td>
                  </tr>
                  <tr>
                    <td>Normal</td>
                    <td> 18.5 - 25</td>
                  </tr>
                  <tr>
                    <td>Overweight</td>
                    <td> 25 - 30</td>
                  </tr>
                  <tr>
                    <td>Obese </td>
                    <td> 30 < </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="whyUse-center">
              <p>Credit : <a class="inline-links" rel="nofollow" href="https://www.calculator.net/bmi-calculator.html">https://www.calculator.net/bmi-calculator.html</a></p>
            </div>
            <p class="whyUse-desc">The above chart is recommended by the World Health Organization (WHO) to calculate BMI for adults. </p>
          </div>
        </section>

        <section id="healthRisk">
          <div class="container">
            <h2 class="healthRisk-title">What are the health risks related to being overweight?</h2>
            <p class="healthRisk-desc">Being overweight is associated with various health risks, including:</p>
            <ul class="healthRisk-list">
              <li>•	Heart conditions</li>
              <li>•	Type 2 Diabetes.</li>
              <li>•	Increased chances of heart attacks</li>
              <li>•	High blood pressure</li>
              <li>•	Insulin resistance</li>
              <li>•	Gallbladder disease, fatty liver.</li>
              <li>•	Depression, anxiety.</li>
              <li>•	Kidney Disease.</li>
              <li>•	Stroke.</li>
              <li>•	Liver Disease: Non-alcoholic fatty liver disease.</li>
              <li>•	Hernia</li>
              <li>•	Quality of Life: Reduced mobility, societal discrimination.</li>
            </ul>
          </div>
        </section>

        <section id="healthRisk">
          <div class="container">
            <h2 class="healthRisk-title">What are the health risks related to being underweight?</h2>
            <p class="healthRisk-desc">Being underweight carries health risks such as:</p>
            <ul class="healthRisk-list">
              <li>•	Nutritional deficiencies</li>
              <li>•	Weakened immune system</li>
              <li>•	Osteoporosis</li>
              <li>•	Muscle atrophy</li>
              <li>•	Menstrual irregularities</li>
              <li>•	Fertility issues</li>
              <li>•	Gastrointestinal problems</li>
              <li>•	Cardiovascular complications</li>
              <li>•	Cognitive and psychological issues</li>
              <li>•	Impaired growth and development</li>
              <li>•	Compromised wound healing</li>
              <li>•	Reduced energy levels</li>
            </ul>
            <p class="healthRisk-desc">We live in a fast-paced world where stress, increased pollution and fast food has become a part pf our routine in some way or the other. Therefore, taking care of little things and improving the way of living is the only thing in our hands. To do that, BMI calculators can help you take charge of yourself. </p>
            <br>
            <p class="healthRisk-desc">As per your BMI, you can take the necessary steps to stay healthy and visit your physician for the next steps. Although, there are online BMI calculators to help you get the accurate results, it is always recommended to not rely on these completely, and take an opinion from your doctor to make an informed decision. </p>
          </div>
        </section>
<!-- 
        <section id="otherCalc">
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
             
              <ul class="calculatorCardList bmislick">
                
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
                  <a href="https://www.kotaklife.com/financial-tools-calculators/retirement-calculator">
                   <div class="menu-icon c4"></div>
                    Retirement <br> Calculator</a>
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
                    <h3> <a href="javascript:void(0);"> <span>1</span>How do I calculate my BMI? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The formula for BMI is straightforward. It's calculated by dividing your weight in kilograms by the square of your height in meters.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>2</span>What is the ideal BMI range?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The ideal BMI range is generally considered to be between 18.5 and 24.9. However, individual health factors and body composition should also be taken into account.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>3</span>What is the formula for BMI?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The formula for BMI is BMI = weight (kg) / (height (m))2. It is a simple ratio of weight to height commonly used to assess body weight in relation to health.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>4</span>What does BMI indicate?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI is an indicator of body fatness and is often used to assess whether an individual is underweight, normal weight, overweight, or obese. It provides a general estimate of body fat.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>5</span>What are the BMI Categories?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI categories are as follows:</p>
                    <ul class="gspnewlis">
                      <li>
                        <p>Underweight: BMI less than 18.5</p>
                      </li>
                      <li>
                        <p>Normal weight: BMI 18.5 to 24.9</p>
                      </li>
                      <li>
                        <p>Overweight: BMI 25 to 29.9</p>
                      </li>
                      <li>
                        <p>Obese: BMI 30 or greater</p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>6</span>Is BMI an accurate measure of body fat percentage?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI is a useful screening tool, but it does not directly measure body fat percentage. Athletes or individuals with high muscle mass may have a higher BMI without having excess body fat.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>7</span>Should everyone use BMI to assess their health?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>While BMI is a widely used measure, it may not be suitable for everyone. Factors like muscle mass, age, and distribution of fat can influence the accuracy of BMI.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>8</span>Can BMI be used for children?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI can be used for children, but the interpretation differs based on age and sex. Paediatric growth charts and percentiles are often used for a more accurate assessment in children.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>9</span>What BMI range is considered healthy?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>A BMI between 18.5 and 24.9 is generally considered healthy for adults. However, other health indicators and individual circumstances should also be considered.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>10</span>Can BMI be influenced by factors other than weight and height?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI is influenced solely by weight and height and does not consider other factors like muscle mass or distribution of fat. As a result, it may not provide a complete picture of an individual's health.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>11</span>Should I rely solely on BMI for weight management?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI is a valuable tool, but it should be considered alongside other health assessments. Individualized approaches, including diet, physical activity, and overall well-being, are crucial for effective weight management.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>12</span>How often should I check my BMI?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Checking your BMI periodically is advisable, but it should not be the only metric for assessing health. Factors like changes in physical activity, diet, and overall well-being should also be considered.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>13</span>Can BMI help determine health risks?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI can provide an indication of potential health risks associated with weight, but it does not account for other factors such as genetics, lifestyle, or overall fitness. A comprehensive health assessment is recommended.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>14</span>Is BMI the same for men and women?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The BMI formula is the same for both men and women. However, the interpretation of BMI values may differ based on sex and age, especially in children and adolescents.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>15</span>Can I use online BMI calculators?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, online BMI calculators are widely available and can provide a quick and convenient way to calculate your BMI. Ensure that you input accurate weight and height values for an accurate result.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- New Content Update end from here -->

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
              </div>
            </div>
          </div>
        </section>
        <!-- Blogs ending here -->
       <section class="consumer">
      <div class="midWrapper">
          <h3 class="ls1"> - A Consumer Education Initiative series by Kotak Life</h3>
          
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
  <input name="topicSlug" type="hidden" id="topicSlug" value="health-insurance">
  	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script async="" src="assets/js/bmi-calculator.js"></script>
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
    
    function readMoreBmi() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = " Read less";
    moreText.style.display = "inline";
  }
}
</script>

<script>

setTimeout(function(){
$('.bmislick').slick({
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
  var $slickElementgspnew11 = $('.bmislick');
  $slickElementgspnew11.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
      var i = (currentSlide ? currentSlide : 0) + 1;
      $statusgspnew11.html('<span class="finished_count">' + (i + 3) + '</span>' + '<span class="total_count">' + '/' + slick.slideCount + '</span>');
  });
}

if ($(window).width() < 768) {
  var $statusgspnew11 = $('.pagingInfo-facslick');
  var $slickElementgspnew11 = $('.bmislick');
  $slickElementgspnew11.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
      var i = (currentSlide ? currentSlide : 0) + 1;
      $statusgspnew11.html('<span class="finished_count">' + (i + 0) + '</span>' + '<span class="total_count">' + '/' + slick.slideCount + '</span>');
  });
}
    },2000);
/*slick counter gsp ^*/
</script>
