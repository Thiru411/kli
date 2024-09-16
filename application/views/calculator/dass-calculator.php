<link rel="stylesheet" href="assets/css/dass-calculator.css">
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/retirement.css">
<div class="interactionWrap investment">
      <div class="pageWrapper">
     <?php  $moduleName = str_replace('-', ' ', $this->uri->segment(1)); $eventGA = 'event ' . $moduleName . ' articles'; $actionGA = $moduleName; //GA code Variables ?>

        <!-- New Content Update end from here -->
        <section id="investment_calculator" class="p0" style="background-color: #FFF;">
          <div class="midWrapper">
            <ul class="breadcrumb-ulip">
              <li><a href="https://www.kotaklife.com/">Home&gt;</a></li>
              <li><a href="https://kli-uat.irepo.in/financial-tools-calculators">Financial Tool Calculator &gt;</a></li>
              <li class="active"><a href="javascript:void(0);">DASS 21 Calculator </a></li>
            </ul>
            <div class="headSection">
              <h1 class="sectionTitle fs40">DASS 21 Calculator - Depression Anxiety Stress Scale Test</h1>
            </div>
            
            <div class="dassSection">
              <h2 class="dassTitle">What is DASS 21 Calculator?</h2>
              <p class="dassDesc">The DASS 21 calculator is designed to measure and evaluate your mental health using the DASS 21 calculator scale. The Depression Anxiety Stress Scale calculator is a widely recognized self-report instrument that consists of 21 items, divided into three subscales: depression, anxiety, and stress. Each subscale contains seven questions that assess the emotional states associated with each condition over the past week. By using the DASS 21 calculator, individuals can gain a clearer picture of their mental health status, which can be the first step towards seeking appropriate help or making lifestyle changes.</p>
            </div>

            <div class="dassSection">
              <p class="dassDesc">The DASS 21 calculator asks you to respond to the following statements that help understand your emotional state in three areas: depression, anxiety, and stress. </p>
              <div>
                <form id="dass-form">
                  <div id="question-container">
                    <div id="question-0">
                      <div class="question-group">
                        <p class="question">1. I found it hard to wind down.</p>
                        <div class="radio-group"  id="question-0-select">
                          <input type="radio" id="Never0" name="question-0" value="0" required>
                          <label for="Never0">Never</label>

                          <input type="radio" id="Sometimes0" name="question-0" value="1" required>
                          <label for="Sometimes0">Sometimes</label>

                          <input type="radio" id="Often0" name="question-0" value="2" required>
                          <label for="Often0">Often</label>

                          <input type="radio" id="AlmostAlways0" name="question-0" value="3" required>
                          <label for="AlmostAlways0">Almost Always</label>
                        </div>
                      </div>
                    </div>

                    <div id="question-1">
                      <div class="question-group">
                        <p class="question">2. I was aware of dryness of my mouth.</p>
                        <div class="radio-group"  id="question-1-select">
                          <input type="radio" id="Never1" name="question-1" value="0" required>
                          <label for="Never1">Never</label>

                          <input type="radio" id="Sometimes1" name="question-1" value="1" required>
                          <label for="Sometimes1">Sometimes</label>

                          <input type="radio" id="Often1" name="question-1" value="2" required>
                          <label for="Often1">Often</label>

                          <input type="radio" id="AlmostAlways1" name="question-1" value="3" required>
                          <label for="AlmostAlways1">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    
                    <div id="question-2">
                      <div class="question-group">
                        <p class="question">3. I couldn't seem to experience any positive feelings at all.</p>
                        <div class="radio-group"  id="question-2-select">
                          <input type="radio" id="Never2" name="question-2" value="0" required>
                          <label for="Never2">Never</label>

                          <input type="radio" id="Sometimes2" name="question-2" value="1" required>
                          <label for="Sometimes2">Sometimes</label>

                          <input type="radio" id="Often2" name="question-2" value="2" required>
                          <label for="Often2">Often</label>

                          <input type="radio" id="AlmostAlways2" name="question-2" value="3" required>
                          <label for="AlmostAlways2">Almost Always</label>
                        </div>
                      </div>
                    </div>

                    <div id="question-3">
                      <div class="question-group">
                        <p class="question"> 4. I experienced breathing difficulty.

                        </p>
                        <div class="radio-group"  id="question-3-select">
                          <input type="radio" id="Never3" name="question-3" value="0" required>
                          <label for="Never3">Never</label>

                          <input type="radio" id="Sometimes3" name="question-3" value="1" required>
                          <label for="Sometimes3">Sometimes</label>

                          <input type="radio" id="Often3" name="question-3" value="2" required>
                          <label for="Often3">Often</label>

                          <input type="radio" id="AlmostAlways3" name="question-3" value="3" required>
                          <label for="AlmostAlways3">Almost Always</label>
                        </div>
                      </div>
                    </div>

                    <div id="question-4">
                      <div class="question-group">
                        <p class="question">5. I found it difficult to work up the initiative to do things.</p>
                        <div class="radio-group"  id="question-4-select">
                          <input type="radio" id="Never4" name="question-4" value="0" required>
                          <label for="Never4">Never</label>

                          <input type="radio" id="Sometimes4" name="question-4" value="1" required>
                          <label for="Sometimes4">Sometimes</label>

                          <input type="radio" id="Often4" name="question-4" value="2" required>
                          <label for="Often4">Often</label>

                          <input type="radio" id="AlmostAlways4" name="question-4" value="3" required>
                          <label for="AlmostAlways4">Almost Always</label>
                        </div>
                      </div>
                    </div>

                    <div id="question-5">
                      <div class="question-group">
                        <p class="question">6. I tended to overreact to situations.</p>
                        <div class="radio-group"  id="question-5-select">
                          <input type="radio" id="Never5" name="question-5" value="0" required>
                          <label for="Never5">Never</label>

                          <input type="radio" id="Sometimes5" name="question-5" value="1" required>
                          <label for="Sometimes5">Sometimes</label>

                          <input type="radio" id="Often5" name="question-5" value="2" required>
                          <label for="Often5">Often</label>

                          <input type="radio" id="AlmostAlways5" name="question-5" value="3" required>
                          <label for="AlmostAlways5">Almost Always</label>
                        </div>
                      </div>
                    </div>

                    <div id="question-6">
                      <div class="question-group">
                        <p class="question">7. I experienced trembling (e.g., in the hands).</p>
                        <div class="radio-group"  id="question-6-select">
                          <input type="radio" id="Never6" name="question-6" value="0" required>
                          <label for="Never6">Never</label>

                          <input type="radio" id="Sometimes6" name="question-6" value="1" required>
                          <label for="Sometimes6">Sometimes</label>

                          <input type="radio" id="Often6" name="question-6" value="2" required>
                          <label for="Often6">Often</label>

                          <input type="radio" id="AlmostAlways6" name="question-6" value="3" required>
                          <label for="AlmostAlways6">Almost Always</label>
                        </div>
                      </div>
                    </div>

                    <div id="question-7">
                      <div class="question-group">
                        <p class="question">8. I felt that I was using a lot of nervous energy.</p>
                        <div class="radio-group"  id="question-7-select">
                          <input type="radio" id="Never7" name="question-7" value="0" required>
                          <label for="Never7">Never</label>

                          <input type="radio" id="Sometimes7" name="question-7" value="1" required>
                          <label for="Sometimes7">Sometimes</label>

                          <input type="radio" id="Often7" name="question-7" value="2" required>
                          <label for="Often7">Often</label>

                          <input type="radio" id="AlmostAlways7" name="question-7" value="3" required>
                          <label for="AlmostAlways7">Almost Always</label>
                        </div>
                      </div>
                    </div>

                    <div id="question-8">
                      <div class="question-group">
                        <p class="question">9. I was worried about situations where I might panic and make a fool of myself.</p>
                        <div class="radio-group"  id="question-8-select">
                          <input type="radio" id="Never8" name="question-8" value="0" required>
                          <label for="Never8">Never</label>

                          <input type="radio" id="Sometimes8" name="question-8" value="1" required>
                          <label for="Sometimes8">Sometimes</label>

                          <input type="radio" id="Often8" name="question-8" value="2" required>
                          <label for="Often8">Often</label>

                          <input type="radio" id="AlmostAlways8" name="question-8" value="3" required>
                          <label for="AlmostAlways8">Almost Always</label>
                        </div>
                      </div>
                    </div>

                    <div id="question-9">
                      <div class="question-group">
                        <p class="question">10. I felt that I had nothing to look forward to.</p>
                        <div class="radio-group"  id="question-9-select">
                          <input type="radio" id="Never9" name="question-9" value="0" required>
                          <label for="Never9">Never</label>

                          <input type="radio" id="Sometimes9" name="question-9" value="1" required>
                          <label for="Sometimes9">Sometimes</label>

                          <input type="radio" id="Often9" name="question-9" value="2" required>
                          <label for="Often9">Often</label>

                          <input type="radio" id="AlmostAlways10" name="question-9" value="3" required>
                          <label for="AlmostAlways10">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-10">
                      <div class="question-group">
                        <p class="question">11. I found myself getting agitated.</p>
                        <div class="radio-group"  id="question-10-select">
                          <input type="radio" id="Never10" name="question-10" value="0" required>
                          <label for="Never10">Never</label>

                          <input type="radio" id="Sometimes10" name="question-10" value="1" required>
                          <label for="Sometimes10">Sometimes</label>

                          <input type="radio" id="Often10" name="question-10" value="2" required>
                          <label for="Often10">Often</label>

                          <input type="radio" id="AlmostAlways10" name="question-10" value="3" required>
                          <label for="AlmostAlways10">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-11">
                      <div class="question-group">
                        <p class="question">12. I found it difficult to relax.</p>
                        <div class="radio-group"  id="question-11-select">
                          <input type="radio" id="Never11" name="question-11" value="0" required>
                          <label for="Never11">Never</label>

                          <input type="radio" id="Sometimes11" name="question-11" value="1" required>
                          <label for="Sometimes11">Sometimes</label>

                          <input type="radio" id="Often11" name="question-11" value="2" required>
                          <label for="Often11">Often</label>

                          <input type="radio" id="AlmostAlways11" name="question-11" value="3" required>
                          <label for="AlmostAlways11">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-12">
                      <div class="question-group">
                        <p class="question">13. I felt downhearted and blue.</p>
                        <div class="radio-group"  id="question-12-select">
                          <input type="radio" id="Never12" name="question-12" value="0" required>
                          <label for="Never12">Never</label>

                          <input type="radio" id="Sometimes12" name="question-12" value="1" required>
                          <label for="Sometimes12">Sometimes</label>

                          <input type="radio" id="Often12" name="question-12" value="2" required>
                          <label for="Often12">Often</label>

                          <input type="radio" id="AlmostAlways12" name="question-12" value="3" required>
                          <label for="AlmostAlways12">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-13">
                      <div class="question-group">
                        <p class="question">14. I was intolerant of anything that kept me from getting on with what I was doing.</p>
                        <div class="radio-group"  id="question-13-select">
                          <input type="radio" id="Never13" name="question-13" value="0" required>
                          <label for="Never13">Never</label>

                          <input type="radio" id="Sometimes13" name="question-13" value="1" required>
                          <label for="Sometimes13">Sometimes</label>

                          <input type="radio" id="Often13" name="question-13" value="2" required>
                          <label for="Often13">Often</label>

                          <input type="radio" id="AlmostAlways13" name="question-13" value="3" required>
                          <label for="AlmostAlways13">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-14">
                      <div class="question-group">
                        <p class="question">15. I felt I was close to panic.</p>
                        <div class="radio-group"  id="question-14-select">
                          <input type="radio" id="Never14" name="question-14" value="0" required>
                          <label for="Never14">Never</label>

                          <input type="radio" id="Sometimes14" name="question-14" value="1" required>
                          <label for="Sometimes14">Sometimes</label>

                          <input type="radio" id="Often14" name="question-14" value="2" required>
                          <label for="Often14">Often</label>

                          <input type="radio" id="AlmostAlways14" name="question-14" value="3" required>
                          <label for="AlmostAlways14">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-15">
                      <div class="question-group">
                        <p class="question">16. I was unable to become enthusiastic about anything.</p>
                        <div class="radio-group"  id="question-15-select">
                          <input type="radio" id="Never15" name="question-15" value="0" required>
                          <label for="Never15">Never</label>

                          <input type="radio" id="Sometimes15" name="question-15" value="1" required>
                          <label for="Sometimes15">Sometimes</label>

                          <input type="radio" id="Often15" name="question-15" value="2" required>
                          <label for="Often15">Often</label>

                          <input type="radio" id="AlmostAlways15" name="question-15" value="3" required>
                          <label for="AlmostAlways15">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-16">
                      <div class="question-group">
                        <p class="question">17. I felt I wasn’t worth much as a person.</p>
                        <div class="radio-group"  id="question-16-select">
                          <input type="radio" id="Never16" name="question-16" value="0" required>
                          <label for="Never16">Never</label>

                          <input type="radio" id="Sometimes16" name="question-16" value="1" required>
                          <label for="Sometimes16">Sometimes</label>

                          <input type="radio" id="Often16" name="question-16" value="2" required>
                          <label for="Often16">Often</label>

                          <input type="radio" id="AlmostAlways16" name="question-16" value="3" required>
                          <label for="AlmostAlways16">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-17">
                      <div class="question-group">
                        <p class="question">18. I felt that I was rather touchy.</p>
                        <div class="radio-group"  id="question-17-select">
                          <input type="radio" id="Never17" name="question-17" value="0" required>
                          <label for="Never17">Never</label>

                          <input type="radio" id="Sometimes17" name="question-17" value="1" required>
                          <label for="Sometimes17">Sometimes</label>

                          <input type="radio" id="Often17" name="question-17" value="2" required>
                          <label for="Often17">Often</label>

                          <input type="radio" id="AlmostAlways17" name="question-17" value="3" required>
                          <label for="AlmostAlways17">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-18">
                      <div class="question-group">
                        <p class="question">19. I was aware of the action of my heart in the absence of physical exertion.
                        </p>
                        <div class="radio-group"  id="question-18-select">
                          <input type="radio" id="Never18" name="question-18" value="0" required>
                          <label for="Never18">Never</label>

                          <input type="radio" id="Sometimes18" name="question-18" value="1" required>
                          <label for="Sometimes18">Sometimes</label>

                          <input type="radio" id="Often18" name="question-18" value="2" required>
                          <label for="Often18">Often</label>

                          <input type="radio" id="AlmostAlways18" name="question-18" value="3" required>
                          <label for="AlmostAlways18">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-19">
                      <div class="question-group">
                        <p class="question">20. I felt scared without any good reason.</p>
                        <div class="radio-group"  id="question-19-select">
                          <input type="radio" id="Never19" name="question-19" value="0" required>
                          <label for="Never19">Never</label>

                          <input type="radio" id="Sometimes19" name="question-19" value="1" required>
                          <label for="Sometimes19">Sometimes</label>

                          <input type="radio" id="Often19" name="question-19" value="2" required>
                          <label for="Often19">Often</label>

                          <input type="radio" id="AlmostAlways19" name="question-19" value="3" required>
                          <label for="AlmostAlways19">Almost Always</label>
                        </div>
                      </div>
                    </div>
                    <div id="question-20">
                      <div class="question-group">
                        <p class="question">21. I felt that life was meaningless.</p>
                        <div class="radio-group"  id="question-20-select">
                          <input type="radio" id="Never20" name="question-20" value="0" required>
                          <label for="Never20">Never</label>

                          <input type="radio" id="Sometimes20" name="question-20" value="1" required>
                          <label for="Sometimes20">Sometimes</label>

                          <input type="radio" id="Often20" name="question-20" value="2" required>
                          <label for="Often20">Often</label>

                          <input type="radio" id="AlmostAlways20" name="question-20" value="3" required>
                          <label for="AlmostAlways20">Almost Always</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="error-message" class="error-message"></div>
                  
                  <button type="button" id="prev-btn" class="hidden dass-investPrev">Previous</button>
                  <button type="button" id="next-btn" class="dass-invest">Next</button>
                  <button type="submit" id="submit-btn" class="hidden dass-invest">Submit</button>
                </form>
                
                <div id="result-container" class="hidden text-center">
                  <h2 class="resultText">Check Your DASS 21 Scores Below</h2>
                  <div class="resultFlex">
                    <p>Depression Score:<br><span id="depression-result"></span></p>
                    <p>Anxiety Score:<br><span id="anxiety-result"></span></p>
                    <p>Stress Score:<br><span id="stress-result"></span> </p>
                  </div>
                  <button type="button" class="dass-invest" id="retake-btn">Retake</button>
                </div>
              </div>
              <h2 class="dassTitle">How Does DASS 21 Depression Anxiety Stress Scale Test Work?</h2>
              <p class="dassDesc">The DASS 21 calculator is a straightforward and effective way to assess your mental health by evaluating your levels of depression, anxiety, and stress over the past week. The anxiety calculator consists of 21 statements, and you will respond to each one based on how much it applies to you.</p>
              <br>
              <p class="dassDesc">The 21 statements are divided equally into three subscales, with seven questions each focusing on depression, anxiety, and stress. Each subscale receives a score ranging from 0 to 21.</p>
              <ul class="dassList">
                <li>Depression Subscale: This part of the test assesses dysphoria, hopelessness, devaluation of life, self-deprecation, and other related symptoms.</li>
                <li>Anxiety Subscale: This evaluates autonomic arousal, skeletal muscle effects, situational anxiety, and subjective experiences of anxious affect.</li>
                <li>Stress Subscale: It measures difficulty relaxing, nervous arousal, and being easily upset or agitated.</li>
              </ul>
            </div>
            <div class="dassSection">
              <h2 class="dassTitle">DASS-21 Scoring Instructions</h2>
              <p class="dassDesc">In the DASS 21 calculator assessment, each question is assigned a score ranging from 0 to 3.  The DASS 21 calculator evaluation indeed includes three key dimensions: depression, anxiety, and stress reactions. In the depression calculator, respondents typically select from four answer choices to indicate the frequency or intensity of their experiences.</p>
              <ul class="dassList">
                <li>Never: Indicating the statement did not apply at all, receiving 0 points.</li>
                <li>Sometimes: Suggesting a partial connection or occasional occurrence, earning 1 point.</li>
                <li>Often: Signifying a notable degree of association or frequent experience, resulting in 2 points.</li>
                <li>Almost always: Denoting a significant presence or consistent occurrence, accruing 3 points.</li>
              </ul>
              <br>
              <p class="dassDesc">Each dimension receives a cumulative score ranging between 0 and 18 to 24, depending on the number of questions allocated (refer to the section above for details).</p>
              <br>
              <p class="dassDesc">The following table outlines the interpretation of scores of the DASS 21 calculator for each dimension:</p>
              <div class="dassTable">
                <table>
                  <tr>
                    <th>Level/Disorder</th>
                    <th>Depression</th>
                    <th>Anxiety</th>
                    <th>Stress</th>
                  </tr>
                  <tbody>
                    <tr>
                      <td>Normal</td>
                      <td>0 - 4</td>
                      <td>0 - 3</td>
                      <td>0 - 7</td>
                    </tr>
                    <tr>
                      <td>Mild</td>
                      <td>5 - 6</td>
                      <td>4 - 5</td>
                      <td>8 - 9</td>
                    </tr>
                    <tr>
                      <td>Moderate</td>
                      <td>7 - 10</td>
                      <td>6 - 7</td>
                      <td>10 - 12</td>
                    </tr>
                    <tr>
                      <td>Severe</td>
                      <td>11 - 13</td>
                      <td>8 - 9</td>
                      <td>13 - 16</td>
                    </tr>
                    <tr>
                      <td>Extremely severe</td>
                      <td>≥14</td>
                      <td>≥10</td>
                      <td>≥17</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <p class="dassDesc">Understanding your DASS-21 scores empowers you to take proactive steps towards managing your mental health effectively.</p>
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
                  <a href="https://www.kotaklife.com/financial-tools-calculators/compound-interest-calculator">
                     <div class="menu-icon c4"></div>
                    Retirement Calculator</a>
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
               
              </ul>
             
            </div>
          </div>
        </section>

        <section class="m0" id="comppundFaq">
          <div class="midWrapper">
            <div class="accordSec">
              <h2 class="accordTitle">FAQs on DASS 21 Calculator</h2>
              <div class="accordList">
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>1</span>How to calculate DASS-21 score?</a></h3>
                  </div>
                  <span class="icon"> </span>
                  <div class="accordDesc" style="display: none;">
                    <p>To calculate your DASS 21 calculator scores, respond to the 21 statements, assigning points based on your selection. Sum up the points for each dimension: depression, anxiety, and stress.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3> <a href="javascript:void(0);"> <span>2</span>What is the cut-off total score for DASS-21?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Cut-off scores of the DASS 21 online calculator vary by dimension: 0-4 for normal depression, 14+ for extremely severe, 0-3 for normal anxiety, 10+ for extremely severe, 0-7 for normal stress, and 17+ for extremely severe.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>3</span>What is the DASS 21 self-assessment?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>The DASS 21 calculator is a 21-statement tool measuring depression, anxiety, and stress levels over the past week. Users select responses indicating the frequency of experiences.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>4</span>How long should the DASS 21 take?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>On average, the DASS 21 scoring calculator takes 5-10 minutes. Accuracy matters, so take time to reflect on each statement.</p>
                  </div>
                </div>
                <div class="accordItem">
                  <div class="accordLinks">
                    <h3><a href="javascript:void(0);"> <span>5</span>Is online DASS 21 calculator free to use?</a></h3>
                  </div>
                  <span class="icon"></span>
                  <div class="accordDesc" style="display: none;">
                    <p>Yes, many platforms offer the DASS 21 calculator for free. However, to ensure accurate results, ensure you use a reliable source.  </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- New Section ended here -->
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
        <!-- Blogs ending here -->
        <section class="terms new-terms pt-0" id="terms_conditions">
          <div class="midWrapper">
            <button type="button" name="disclaimer" class="collapsible terms-txt whitespace-initial">Read about Tax
            benefits &amp; Plan Disclaimer</button>
            <div class="content-col mb-0 tab-align li-disc terms-para">
              <h3 class="  terms-conditions">Disclaimers-</h3>
              <div class="disclamier-pera pt-0">
                <p class="pl-0">Any and all the content found on our Platform is for informational purposes only and is not intended to replace any professional medical advice/assistance/care; or the relationship between you and your physician/ any other medical practitioner/health care provider.</p>
                <br>
                <p class="pl-0">
                 You may avail of tax benefits under Section 80C and Section 10(10D) of Income Tax Act, 1961 subject to conditions as specified in those sections. Tax benefits are subject to change as per tax laws. Customer is advised to take an independent view from tax consultant.</p>
                <br>
                <p class="pl-0">The calculation is generated on the basis of information provided and does not constitute an offer or solicitation for the purpose of purchase or sale of any product. Further customer is the advised to go through the sales brochure before conducting any sale.

                </p>
                <br>
                <!-- <p class="pl-0">The Linked Insurance Products do not offer any liquidity during the first five years of
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
                <p class="pl-0"><b>BEWARE OF SPURIOUS PHONE CALLS AND FICTITIOUS/FRAUDULENT OFFERS </b></p>
                <p class="pl-0 mt-10">IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.

                </p>
                <p class="pl-0 mt-10">Kotak Mahindra Life Insurance Company Ltd.; Regn. No.: 107, CIN: U66030MH2000PLC128503, Regd. Office: 8th Floor, Plot # C-12, G-Block, BKC, Bandra(E), Mumbai -400 051. Website: www.kotaklife.com | WhatsApp: 9321003007 | Toll-Free No: 1800 209 8800.  
                </p>
                <p class="pl-0 mt-10">For Educational purpose only.</p>
                <p class="pl-0 mt-10">Trade Logo displayed above belongs to Kotak Mahindra Bank Limited and is used by Kotak Mahindra Life Insurance Company Limited under license.

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
   
    <script async="" src="assets/js/dass-calculator.js"></script>

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


