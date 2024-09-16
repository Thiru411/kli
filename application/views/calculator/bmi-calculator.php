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
.ulip-blogs #articles-div li{height:376px !important;}
@media only screen and (max-width:480px) {
	.ulip-blogs #articles-div li{height:auto !important;}
}

.form-control::placeholder{font-family:Lato-Regular !important;font-size:14px ! important;font-weight:400 ! important; color:#a0a0a0 ! important;}
/* ashwini reddy css start */
.healthRisk-subTitle {
  font-size: 20px;
  font-weight: 600;
  color: #000;
  letter-spacing: 0.3px;
}
.disc{list-style:disc ;}
.healthRisk-list {
 
  grid-template-columns:unset !important;
}
#idealBmi {
  margin: 20px 0;
}

.bmi-table {
  width: 100%;
}

.mt10 {
  margin-top: 10px;
}

.healthRisk-subtitle {
  font-size: 17px;
  font-weight: 600;
  color: #000;
  letter-spacing: 0.3px;
  padding: 5px 0;
  margin-top: 10px;
}

.disc {
  list-style: disc;
}

.bmiUseGrid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  align-items: start;
  gap: 18px;
}
.bmi-table {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  margin: 20px 0 0;
}



.bmi-table tr td {
  color: #000;
  font-size: 16px;
  font-weight: 500;
  padding: 10px !important;
}

.bmi-table th {
  color: #FFF;
  font-size: 16px;
  font-weight: 800;
  text-align: center;
  background-color: #003366 !important;
}

.bmi-table tr:nth-child(even) {
  background-color: #eff8ff;
}
.healthRisk-listG {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  padding-bottom: 10px;
}
.healthRisk-listG li {
  font-size: 18px;
  font-weight: 400;
  letter-spacing: 0.3px;
  color: #000;
}

.space-move{margin-left: 20px; margin-top: 2rem;}

    .fonticon:before{padding: 0 11px 0 0; font-weight: 700;display: block;}
    .healthRisk-subTitle{padding-bottom: 10px;}
   
/* ashwini reddy css end*/

 

</style>
   
	   <link rel="stylesheet" href="assets/css/global.css">
	 
		
		<link rel="stylesheet" href="assets/css/retirement.css">
		<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">
		<link rel="stylesheet" href="assets/css/bmi-calculator.css">

     <div class="interactionWrap investment">
      <div class="pageWrapper">
        <section id="investment_calculator">
          <div class="container">
            <ul class="breadcrumb-ulip">
              <li><a href="https://www.kotaklife.com/">Home&gt;</a></li>
              <li><a href="/financial-tools-calculators">Financial Tool Calculator &gt;</a></li>
              <li class="active"><a href="javascript:void(0);">ULIP Calculator</a></li>
            </ul>
            <div class="headSection ulip-head">
              <h1 class="bmiHeadTitle">BMI Calculator</h1>
              <p class="bmiDesc">A BMI calculator (Body Mass Index calculator) is an essential tool, that helps individuals quickly determine their BMI based on their weight and height inputs. When it comes to managing your health, apart from buying <a class="inline-links" href="https://www.kotaklife.com/insurance-plans/health-plans">health insurance plans </a>you must also take care of your lifestyle habits. Regularly reviewing your health and BMI index is the first step toward it.
                 <span id="dots">...</span><span id="morecont">BMI, or Body Mass Index, serves as a fundamental metric in assessing an individual's weight in relation to their height. It acts as a compass guiding individuals toward understanding their weight status, providing a quick picture of whether they fall within the spectrum of underweight, normal weight, overweight, or obese.</span><span style="color: #ED3237 ;cursor: pointer;font-weight: 600;" onclick="readMoreBmi()" id="myBtn"> Read more</span>
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
                <h2 class="bodyMassIndex-title">What is a BMI Calculator</h2>
                <p class="bodyMassIndex-desc">A BMI calculator or Body Mass Index calculator is a tool, often available online or as a mobile application, that helps individuals quickly determine their Body Mass Index (BMI) based on their weight and height. Users input their weight (in kilograms) and height (in feet and inches), and the calculator computes the BMI using the standard formula: weight divided by the square of height.</p>
                <br>
                <p class="bodyMassIndex-desc">BMI calculators are widely accessible and user-friendly, providing an instant assessment of an individual's weight status. They typically categorize the BMI result into ranges such as underweight, normal weight, overweight, or obese, helping users interpret the significance of their BMI value.</p>
              </div>
              <div class="bodyMassIndex-img">
              <img src="assets/images/calculator/bmi-calculator/BMI-calculator.png" alt="BMI Calculator" />
              </div>
            </div>
          </div>
        </section>

        <section id="bmiChildren">
          <div class="midWrapper">
          <h2 class="bmiChildren-title">What is BMI (Body Mass Index)?</h2>
            <p class="bmiChildren-desc">Body Mass Index (BMI) is a measurement used to assess an individual's body weight relative to their height. The BMI calculator is a widely used tool to quickly evaluate whether someone is underweight, normal weight, overweight, or obese. The calculation for BMI is straightforward: it's the weight of an individual in kilograms divided by the square of their height in meters.</p>
          </div>
        </section>

        <section id="whyUse">
          <div class="container">
            <!-- <h2 class="whyUse-title">Why Use Our BMI Calculator?</h2>
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
                    <td> &lt; 16</td>
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
                    <td> 30 &lt; </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="whyUse-center">
              <p>Credit : <a class="inline-links" rel="nofollow" href="https://www.calculator.net/bmi-calculator.html">https://www.calculator.net/bmi-calculator.html</a></p>
            </div>
            <p class="whyUse-desc">The above chart is recommended by the World Health Organization (WHO) to calculate BMI for adults. </p>-->
            <h2 class="whyUse-title">How to Calculate BMI?</h2>
            <p class="whyUse-desc">Calculating BMI (Body Mass Index) is an easy process to assess whether a person has a healthy weight in relation to their height. Here is how you do it yourself:</p>
            <ul class="whyUse-list">
              <li class=" disc">	You need to know your weight in kilograms (kg) and your height in feet/ inches. If you have your weight in pounds (lbs) and your height in inches (in), you can convert them to kg and meters respectively.</li>
              <li class=" disc"> Multiply your height in meters by itself (height * height). For example, if you are 1.75 meters tall, you would calculate 1.75 * 1.75 = 3.0625.	</li>
              <li class=" disc">	Divide your weight in kilograms by the result from step 2. For instance, if you weigh 70 kg, you would divide 70 by 3.0625, resulting in approximately 22.82.</li>
              <li>After performing the calculation, you can interpret your BMI:</li>
              <li>
                <ul class="whyUse-list" style="padding-top: 0;padding-left: 0;">
                  <li class="disc">A BMI below 18.5 suggests you may be underweight.</li>
                  <li class="disc">A BMI between 18.5 and 24.9 indicates a healthy weight range.</li>
                  <li class="disc">A BMI between 25 and 29.9 suggests you may be overweight.</li>
                  <li class="disc">A BMI of 30 or higher indicates obesity.</li>
                </ul>
              </li>
            </ul>
          </div>
        </section>

        <section id="healthRisk">
          <div class="container">
            <h2 class="healthRisk-title">BMI Calculator Formula</h2>
            <p class="healthRisk-desc">The formula to calculate BMI (Body Mass Index) is:</p>
            <p class="whyUse-formula">BMI = weight (kg) ÷ height<sup>2</sup> (m)</p>
            <p class="healthRisk-desc">Where</p>
            <!-- <ul class="healthRisk-list">
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
             -->
            <ul class="healthRisk-list">
              <li class="disc">Weight is the person's weight in kilograms (kg),</li>
              <li class="disc">Height is the person's height in meters (m).</li>
            </ul>
            <p class="healthRisk-desc">This formula divides a person's weight (in kilograms) by the square of their height (in meters) to calculate their BMI.</p> 
          </div>
        </section>

        <section id="healthRisk">
          <div class="container">
          
             <h2 class="healthRisk-title">BMI Categories Chart</h2>
            <p class="healthRisk-desc">A BMI categories chart is a visual representation that categorizes individuals into different weight classifications based on their Body Mass Index (BMI) scores. BMI categories typically included in BMI calculator online are:</p>
            <h3 class="healthRisk-subTitle mt-20 "><i class="fa fa-angle-right fonticon" aria-hidden="true"></i>Underweight (BMI &lt; 18.5)</h3>
            <ul class="healthRisk-list">
              <li class="disc">Individuals with a BMI below 18.5 are classified as underweight.</li>
              <li class="disc">Being underweight may indicate that a person is not consuming enough calories to meet their energy needs or could be due to certain medical conditions.   </li>
            </ul>
            <br>
            <h3 class="healthRisk-subTitle"><i class="fa fa-angle-right fonticon" aria-hidden="true"></i>Normal Weight (BMI 18.5 - 24.9)</h3>
            <ul class="healthRisk-list">
              <li class="disc">A BMI falling within the range of 18.5 to 24.9 is considered normal or healthy weight.</li>
              <li class="disc">Individuals within this range typically have a balanced ratio of body fat to muscle mass.</li>
            </ul>
            <br>
            <h3 class="healthRisk-subTitle"><i class="fa fa-angle-right fonticon" aria-hidden="true"></i>Overweight (BMI 25.0 - 29.9)</h3>
            <ul class="healthRisk-list">
              <li class="disc">Individuals with a BMI between 25.0 and 29.9 are classified as overweight.</li>
              <li class="disc">Overweight individuals have excess body weight compared to their height.</li>
            </ul>
            <br>
            <h3 class="healthRisk-subTitle mb-10"><i class="fa fa-angle-right fonticon" aria-hidden="true"></i>Obesity (BMI ≥ 30.0)</h3>
            <p class="healthRisk-desc">Obesity is characterized by excessive accumulation of body fat, which significantly increases the risk of developing various health conditions. Obesity is further divided into three subcategories:</p>
            <ul class="healthRisk-list">
              <li class="disc">Obesity Class I (BMI 30.0 - 34.9): Individuals in this category are considered moderately obese.</li>
              <li class="disc">Obesity Class II (BMI 35.0 - 39.9): Individuals in this category are considered severely obese.</li>
              <li class="disc">Obesity Class III (BMI ≥ 40.0): Individuals in this category are considered very severely or morbidly obese.</li>
            </ul>
          </div>
        </section>



        <section id="idealBmi">
          <div class="midWrapper">
            <h2 class="healthRisk-title">What is the Ideal BMI For Men, Women, and Children?</h2>
            <p class="healthRisk-desc">The ideal BMI can vary slightly based on factors such as age, sex, and other individual characteristics. Here are general guidelines for ideal BMI ranges for men, women, and children:</p>
            <div class="bmi-table">
              <table>
                <tbody>
                  <tr>
                    <th>BMI for Men</th>
                    <th>BMI for Women</th>
                    <th>BMI for Children</th>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Ideal BMI Range: 18.5 - 24.9</td>
                    <td>Ideal BMI Range: 18.5 - 24.9</td>
                    <td>The ideal BMI range for children and adolescents varies with age.</td>
                  </tr>
                  <tr>
                    <td>A BMI falling within this range is considered a normal or healthy weight for adult men.</td>
                    <td>A BMI between 18.5 and 24.9 is considered a normal or healthy weight for adult women.</td>
                    <td>Children with BMI-for-age percentiles between the 5th and 85th percentiles are typically considered to have a healthy weight.</td>
                  </tr>
                  <tr>
                    <td>Individual factors such as muscle mass, bone density, and overall health should also be considered.</td>
                    <td>Factors like bone density, and overall health, play a role, and consultation with a healthcare provider is recommended for personalized guidance.</td>
                    <td>Children with BMI-for-age percentiles below the 5th percentile may be classified as underweight, while those above the 85th percentile may be classified as overweight or obese.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>





        <section id="healthRisk">
          <div class="midWrapper">
            <h2 class="healthRisk-title">What are the Health Risks Related to Being Overweight?</h2>
            <p class="healthRisk-desc">Being overweight is associated with various health risks, including:</p>
            <ul class="healthRisk-listG space-move">
              <li class="disc"> Heart conditions</li>
              <li class="disc"> Type 2 Diabetes</li>
              <li class="disc"> Increased chances of heart attacks</li>
              <li class="disc"> High blood pressure</li>
              <li class="disc"> Insulin resistance</li>
              <li class="disc"> Gallbladder disease, fatty liver.</li>
              <li class="disc"> Depression, anxiety.</li>
              <li class="disc"> Kidney Disease.</li>
              <li class="disc"> Stroke.</li>
              <li class="disc"> Liver Disease: Non-alcoholic fatty liver disease.</li>
              <li class="disc"> Hernia</li>
              <li class="disc"> Quality of Life: Reduced mobility, societal discrimination.</li>
            </ul>
          </div>
        </section>


        
        <section id="healthRisk">
          <div class="midWrapper">
            <h2 class="healthRisk-title">What are the health risks related to being underweight?</h2>
            <p class="healthRisk-desc">Being underweight carries health risks such as:</p>
            <ul class="healthRisk-listG space-move">
              <li class="disc"> Nutritional deficiencies</li>
              <li class="disc"> Weakened immune system</li>
              <li class="disc"> Osteoporosis</li>
              <li class="disc"> Muscle atrophy</li>
              <li class="disc"> Menstrual irregularities</li>
              <li class="disc"> Fertility issues</li>
              <li class="disc"> Gastrointestinal problems</li>
              <li class="disc"> Cardiovascular complications</li>
              <li class="disc"> Cognitive and psychological issues</li>
              <li class="disc"> Impaired growth and development</li>
              <li class="disc"> Compromised wound healing</li>
              <li class="disc"> Reduced energy levels</li>
            </ul>
            <p class="healthRisk-desc">We live in a fast-paced world where stress, increased pollution, and fast food have become a part pf our routine in some way or the other. Therefore, taking care of little things and improving the way of living is the only thing in our hands. To do that, BMI calculators can help you take charge of yourself.</p>
          </div>
        </section>

        <section id="healthRisk">
          <div class="midWrapper">
            <h2 class="healthRisk-title">Is the BMI Calculator Reliable?</h2>
            <p class="healthRisk-desc">While the BMI Calculator can provide a general indication of whether someone falls within a healthy weight range, its reliability and accuracy have some limitations:</p>
            <ul class="healthRisk-list">
              <li class="disc">Does not Account for Body Composition</li>
              <li class="disc">Variations by Age and Gender</li>
              <li class="disc">Does not Consider Waist Circumference or Distribution of Fat</li>
              <li class="disc">Limited in Certain Populations</li>
              <li class="disc">Does not Capture Health Status or Lifestyle Factors</li>
              <li class="disc">Not a Diagnostic Tool</li>
            </ul>
          </div>
        </section>

        <section id="healthRisk">
          <div class="midWrapper">
            <h2 class="healthRisk-title">Drawbacks of Using an Online BMI Calculator</h2>
            <p class="healthRisk-desc">Certainly, let us break down the drawbacks and considerations for using an online BMI calculator separately for adults and young adults/children:</p>
            <div class="mt10">
              <h3 class="healthRisk-subTitle"><i class="fa fa-angle-right fonticon" aria-hidden="true"></i>Considerations for Adults</h3>
              <ul class="healthRisk-list">
                <li class="disc">
                  <h4 class="healthRisk-subtitle">Limited Information</h4>
                  <p class="healthRisk-desc">Online BMI calculators typically only require height and weight, which may provide a partial picture of an adult's health status. Additional factors such as age, gender, waist circumference, muscle mass, and bone density are essential for a comprehensive assessment using a BMI Calculator.</p>
                </li>
                <li class="disc">
                  <h4 class="healthRisk-subtitle">Misinterpretation</h4>
                  <p class="healthRisk-desc">Adults may need to consider overall health and well-being to interpret BMI results using a BMI Calculator and place excessive emphasis on achieving a specific BMI category. This can lead to unhealthy behaviors, such as extreme dieting or excessive exercise, in pursuit of an arbitrary numerical goal.</p>
                </li>
                <li class="disc">
                  <h4 class="healthRisk-subtitle">Limited Scope of Health Assessment</h4>
                  <p class="healthRisk-desc">BMI is a screening tool for weight status and does not capture other important aspects of adult health, such as fitness level, dietary habits, metabolic health, or risk factors for chronic diseases. Relying solely on the BMI Calculator may overlook important health considerations.</p>
                </li>
              </ul>
            </div>
            <div class="mt10">
              <h3 class="healthRisk-subTitle"><i class="fa fa-angle-right fonticon" aria-hidden="true"></i>Considerations for Young Adults and Children</h3>
              <ul class="healthRisk-list">
                <li class="disc">
                  <h4 class="healthRisk-subtitle">Growth and Development</h4>
                  <p class="healthRisk-desc">BMI-for-age percentiles are used for children and adolescents, taking into account growth and developmental stages. Online BMI calculators for young adults and children should consider age and sex-specific growth patterns for accurate assessments.</p>
                </li>
                <li class="disc">
                  <h4 class="healthRisk-subtitle">Interpretation for Growth</h4>
                  <p class="healthRisk-desc">BMI results for children and adolescents should be interpreted in the context of growth charts and percentiles rather than absolute values. Children with BMI-for-age percentiles below the 5th percentile may be categorized as underweight, while those above the 85th percentile may be categorized as overweight or obese.</p>
                </li>
                <li class="disc">
                  <h4 class="healthRisk-subtitle">Nutritional Status</h4>
                  <p class="healthRisk-desc">BMI calculators alone may not provide enough information about the nutritional status of young adults and children. Additional assessments of dietary intake, growth patterns, and physical development are necessary for a comprehensive evaluation of health and nutritional status.</p>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <section id="healthRisk">
          <div class="midWrapper">
            <h2 class="healthRisk-title">Alternate Measures to Determine Weight-Related Health Risks</h2>
            <p class="healthRisk-desc">Here are three alternate measures to determine weight-related health risks:</p>
            <div class="mt10">
              <h3 class="healthRisk-subTitle"><i class="fa fa-angle-right fonticon" aria-hidden="true"></i>Measuring Waist Circumference</h3>
              <p class="healthRisk-desc">Waist circumference measures the size of a person's waist, which is an indicator of abdominal fat accumulation. Excess abdominal fat, particularly visceral fat surrounding internal organs, is associated with an increased risk of cardiovascular disease, type 2 diabetes, and other metabolic disorders. Generally, for adults:</p>
              <ul class="healthRisk-list">
                <li class="disc">	Men: Increased risk if waist circumference is greater than 102 cm (40 inches).</li>
                <li class="disc">	Women: Increased risk if waist circumference is greater than 88 cm (35 inches).</li>
              </ul>
            </div>
            
            <div class="mt10">
              <h3 class="healthRisk-subTitle"><i class="fa fa-angle-right fonticon" aria-hidden="true"></i>Measuring Waist-to-Hip Ratio</h3>
              <p class="healthRisk-desc">Waist-to-hip ratio compares the circumference of the waist to that of the hips, providing an indicator of fat distribution and body shape. A high waist-to-hip ratio indicates central or abdominal obesity, which is associated with an increased risk of cardiovascular disease, type 2 diabetes, and mortality.</p>
              <br>
              <p class="healthRisk-desc">For adults, a waist-to-hip ratio of 0.90 or above for men and 0.85 or above for women indicates increased health risks related to central obesity.</p>
            </div>

            <div class="mt10">
              <h3 class="healthRisk-subTitle"><i class="fa fa-angle-right fonticon" aria-hidden="true"></i>Measuring Waist-to-Height Ratio</h3>
              <p class="healthRisk-desc">The waist-to-height ratio compares waist circumference to height, providing a simple indicator of overall fat distribution and abdominal obesity. A high waist-to-height ratio is associated with an increased risk of cardiovascular disease, type 2 diabetes, and mortality. For adults and children alike, a waist-to-height ratio of:</p>
              <ul class="healthRisk-list">
                <li class="disc">	0.5 or less is generally associated with a lower risk of metabolic complications.</li>
                <li class="disc">	Ratios above 0.5 indicate increased health risks associated with abdominal obesity.</li>
              </ul>
            </div>
          </div>
        </section>

        <section id="healthRisk">
          <div class="midWrapper">
            <h2 class="healthRisk-title">Steps Towards Improving Better Health</h2>
            <p class="healthRisk-desc">Apart from regularly monitoring your BMI, one should also adapt to healthy lifestyle habits. Some steps towards improving overall health and well-being. Let's break down each step further:</p>
            <div class="mt10">
              <ul class="healthRisk-list">
                <li class="disc">
                  <h3 class="healthRisk-subTitle">Stay Hydrated</h3>
                  <p class="healthRisk-desc">Drink plenty of water throughout the day to stay hydrated, as water is essential for various bodily functions, including digestion, circulation, and temperature regulation. Aim for at least 8 glasses of water per day, and adjust based on factors like activity level, climate, and individual hydration needs.</p>
                </li>
                <li class="disc mt10">
                  <h3 class="healthRisk-subTitle">Incorporate Regular Exercise</h3>
                  <p class="healthRisk-desc">Engage in regular physical activity to improve cardiovascular health, strengthen muscles and bones, and boost mood and energy levels. Try to move your body on a daily basis.</p>
                </li>
                <li class="disc mt10"> 
                  <h3 class="healthRisk-subTitle">Follow a Nutritious Diet</h3>
                  <p class="healthRisk-desc">Eat a balanced diet rich in fruits, vegetables, whole grains, lean proteins, and healthy fats. Limit intake of processed foods, sugary snacks, and unhealthy fats, and prioritize nutrient-dense foods that provide essential vitamins, minerals, and antioxidants.</p>
                </li>
                <li class="disc mt10"> 
                  <h3 class="healthRisk-subTitle">Avoid Overeating</h3>
                  <p class="healthRisk-desc">Practice portion control by using smaller plates, measuring servings, and being mindful of portion sizes when dining out. Be aware of emotional eating triggers and find alternative coping strategies for stress, boredom, or other emotional triggers.</p>
                </li>
                <li class="disc mt10"> 
                  <h3 class="healthRisk-subTitle">Get Adequate Sleep</h3>
                  <p class="healthRisk-desc">Aim for 7-9 hours of sleep per night for adults, and ensure children and adolescents get the recommended amount of sleep based on their age. Create a conducive sleep environment by minimizing noise, light, and electronic devices in the bedroom.</p>
                </li>
                <li class="disc mt10"> 
                  <h3 class="healthRisk-subTitle">Manage Stress Effectively</h3>
                  <p class="healthRisk-desc">Practice stress management techniques such as deep breathing, meditation, yoga, mindfulness, or progressive muscle relaxation. Prioritize self-care activities that promote relaxation and well-being, such as hobbies, spending time in nature, or connecting with loved ones.</p>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <section id="healthRisk">
          <div class="midWrapper">
            <h2 class="healthRisk-title">Why Use Kotak Life's Online BMI Calculator?</h2>
            <p class="healthRisk-desc">There are a few reasons why using an online BMI calculator can be a handy tool:</p>
            <div class="mt10 bmiUseGrid">
              <div>
                <h3 class="healthRisk-subTitle">Convenience and Speed</h3>
                <p class="healthRisk-desc">Compared to manual calculation, Kotak Life’s online BMI Calculators is much faster and easier. You simply input your height and weight, and the calculator provides your BMI and weight category in seconds.</p>
              </div>
              <div>
                <h3 class="healthRisk-subTitle">Readily Available</h3>
                <p class="healthRisk-desc">Online BMI calculator is easily available online. This makes it easy to find and use whenever you want.</p>
              </div>
              <div>
                <h3 class="healthRisk-subTitle">Initial Health Assessment</h3>
                <p class="healthRisk-desc">While BMI is not a perfect measure of health, BMI Calculators can give you a general idea of whether you fall within a healthy weight range for your height. This can be a helpful starting point for discussions with your doctor about your weight and overall health.</p>
              </div>
              <div>
                <h3 class="healthRisk-subTitle">Tracking Progress</h3>
                <p class="healthRisk-desc">If you are trying to lose weight or gain muscle, you can use an online BMI calculator to track your progress over time. This can help you stay motivated and see how your weight changes are affecting your BMI.</p>
              </div>
            </div>

         <!--   <h2  class="healthRisk-title">Conclusion</h2>
            <p class="healthRisk-desc">BMI has emerged as a vital tool in the pursuit of a healthier lifestyle. It offers insights into their weight status and catalyzes transformative change. By embracing the simplicity of a BMI Calculator, along with proactive measures such as hydration, regular exercise, balanced nutrition, and the incorporation of alternative health assessments, individuals can move toward holistic well-being. With online BMI calculators, individuals can embark on a journey toward self-awareness, empowerment, and the realization of their full health potential.
</p>-->
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
                     <div class="menu-icon c9"></div>
                    RD <br>Calculator</a>
                </li>
                <li>
                  <a href="https://www.kotaklife.com/financial-tools-calculators/fd-calculator">
                   <div class="menu-icon c8"></div>
                    FD <br> Calculator</a>
                </li>
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
                    <h3> <a href="javascript:void(0);"> <span>1</span>How do I calculate my BMI? </a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>The formula for BMI is straightforward. It's calculated by dividing your weight in kilograms by the square of your height in meters.</p>
                  </div>
                </div>

                <!-- asdfg -->

                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>2</span>How is BMI calculated</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI is calculated by dividing a person's weight in kilograms by the square of their height in meters</p>
                  </div>
                </div>

                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>3</span>Why is calculating BMI important for your health?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Calculating BMI is important as it helps assess body composition and potential health risks related to weight.</p>
                  </div>
                </div>

                <!-- sdfgh -->



                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>4</span>What is the ideal BMI range?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The ideal BMI range is generally considered to be between 18.5 and 24.9. However, individual health factors and body composition should also be taken into account.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>5</span>What is the formula for BMI?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The formula for BMI is BMI = weight (kg) / (height (m))2. It is a simple ratio of weight to height commonly used to assess body weight in relation to health.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>6</span>What does BMI indicate?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI is an indicator of body fatness and is often used to assess whether an individual is underweight, normal weight, overweight, or obese. It provides a general estimate of body fat.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>7</span>What are the BMI Categories?</a></h3>
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
                    <h3> <a href="javascript:void(0);"> <span>8</span>Is BMI an accurate measure of body fat percentage?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI is a useful screening tool, but it does not directly measure body fat percentage. Athletes or individuals with high muscle mass may have a higher BMI without having excess body fat.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>9</span>Should everyone use BMI to assess their health?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>While BMI is a widely used measure, it may not be suitable for everyone. Factors like muscle mass, age, and distribution of fat can influence the accuracy of BMI.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>10</span>Can BMI be used for children?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI can be used for children, but the interpretation differs based on age and sex. Paediatric growth charts and percentiles are often used for a more accurate assessment in children.</p>
                  </div>
                </div>

                  <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>11</span>What is the ideal BMI value for children and adults?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The ideal BMI value for children and adults varies but typically falls within the range of 18.5 to 24.9.</p>
                  </div>
                </div>



                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>12</span>What BMI range is considered healthy?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>A BMI between 18.5 and 24.9 is generally considered healthy for adults. However, other health indicators and individual circumstances should also be considered.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>13</span>Can BMI be influenced by factors other than weight and height?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI is influenced solely by weight and height and does not consider other factors like muscle mass or distribution of fat. As a result, it may not provide a complete picture of an individual's health.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>14</span>Should I rely solely on BMI for weight management?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI is a valuable tool, but it should be considered alongside other health assessments. Individualized approaches, including diet, physical activity, and overall well-being, are crucial for effective weight management.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>15</span>How often should I check my BMI?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Checking your BMI periodically is advisable, but it should not be the only metric for assessing health. Factors like changes in physical activity, diet, and overall well-being should also be considered.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>16</span>Can BMI help determine health risks?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>BMI can provide an indication of potential health risks associated with weight, but it does not account for other factors such as genetics, lifestyle, or overall fitness. A comprehensive health assessment is recommended.</p>
                  </div>
                </div>
                <!-- <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>14</span>Is BMI the same for men and women?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The BMI formula is the same for both men and women. However, the interpretation of BMI values may differ based on sex and age, especially in children and adolescents.</p>
                  </div>
                </div> -->

                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>17</span>Is BMI the same for men and women?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The BMI formula is the same for both men and women. However, the interpretation of BMI values may differ based on sex and age, especially in children and adolescents.</p>
                  </div>
                </div>

                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>18</span>What is the ideal BMI for a man?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The ideal BMI for a man is generally considered to be between 18.5 and 24.9.</p>
                  </div>
                </div>

                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>19</span>What is the ideal BMI for a woman?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The ideal BMI for a woman is typically within the range of 18.5 to 24.9.</p>
                  </div>
                </div>





                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>20</span>Can I use online BMI calculators?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, online BMI calculators are widely available and can provide a quick and convenient way to calculate your BMI. Ensure that you input accurate weight and height values for an accurate result.</p>
                  </div>
                </div>

                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>21</span>What is the correct BMI for my age?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The correct BMI for your age depends on various factors including gender, height, and muscle mass.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>22</span>Is 20 a good BMI?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>A BMI of 20 falls within the healthy weight range, indicating good overall health for many individuals.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- New Content Update end from here -->
 <section class="consumer bmi-consumer">
      <div class="midWrapper">
          <h3 class="ls1"> - A Consumer Education Initiative series by Kotak Life</h3>
          
      </div>
  </section>
        <section class="term-blog ulip-blogs" id="ulip_blog">
          <div class="midWrapper">
            <div class="term-blog ">
              <h2 class="mb-20 term-tags fnt-24">Health Insurance Related Blogs </h2>
              <ul class="reportUL reportUL_img reportUL_new new_article_cards card-deck" id="articles-div">
</ul>
              <!--<div class="loadmores">
                <a href="javascript:;" class="link" id="load-more-articles" onclick="dataLayer.push({&#39;event&#39;: &#39;event financial tools calculators load&#39;, &#39;category&#39;: &#39;new customers&#39;, &#39;action&#39;: &#39;financial tools calculators&#39;, &#39;label&#39;: &#39;load more&#39;});" style="display: table;">Load More</a>
              </div>-->
              <div class="noRecord" style="display: none;"></div>
              <div class="innerLoader" style="display: none;">
              </div>
            </div>
          </div>
        </section>
        <!-- Blogs ending here -->
        
        <section class="terms new-terms pt-0" id="terms_conditions">
        <div class="midWrapper">
          <button type="button" class="collapsible terms-txt whitespace-initial">Read about Tax benefits &amp; Plan Disclaimer</button>
          <div class="content-col mb-0 tab-align li-disc terms-para">
            <h3 class="  terms-conditions">Disclaimers-</h3>
            <div class="disclamier-pera pt-0">
              <p class="pl-0 mb-10">The calculation is generated on the basis of information provided and does not constitute an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the advised to go through the sales brochure before conducting any sale.
              </p>
              <br>
              <p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTIOUS/FRADULENT OFFERS</b></p>
              <p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
              <br>
              <p class="pl-0">Kotak Mahindra Life Insurance Company Ltd ; Regn. No.:107, CIN : U66030MH2000PLC128503, Regd.
                Office: 8th Floor, Plot # C- 12, G- Block, BKC, Bandra (E), Mumbai- 400 051. Website:
                https://www.kotaklife.com, |Whatsapp:9321003007 |Toll free No: 1800 209 8800.
              </p>
              <br>
              <p class="pl-0">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Limited under license </p>
            </div>
          </div>
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
  <!--  <script async="" src="assets/js/jquery-3.6.0.min.js"></script>-->
    <!--<script src="assets/js/global.js"></script>-->
    <!--script async="" src="assets/js/bmi-calculator.js"></script-->
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
    
    function readMoreBmi() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("morecont");
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
 <script>
  setTimeout (function(){
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
},2000 );
/*slick counter gsp ^*/
</script>