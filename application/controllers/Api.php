<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('common');
        $this->load->database();
        $this->load->library('common');

    }
function index(){
    
}
    public function eterm_campaign_submit() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        $this->load->library('form_validation');
        $this->load->helper('security'); // to xss_clean  
        $this->load->model('api_model');          
        
        $this->form_validation->set_rules('name', 'Your Name', 'trim|required|xss_clean|callback_name_format_check|max_length[30]');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|xss_clean|numeric|exact_length[10]');
        //$this->form_validation->set_rules('dnd_email_id', 'Email ID', 'required|xss_clean|valid_email|max_length[256]');
        $this->form_validation->set_rules('city', 'City', 'trim|required|xss_clean|callback_name_format_check|max_length[20]');
        //$this->form_validation->set_rules('g-recaptcha-response', 'Captcha Check', 'required|xss_clean|callback__check_recaptcha');
        if ($this->form_validation->run() == FALSE) {
            foreach ($this->form_validation->error_array() as $field_name => $error_message) {
                $data['inputerror'][] = $field_name;
                $data['error_string'][] = $error_message;
            }
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        } else {
            $postData = array(
                'cust_name' => (!empty($this->input->post('name'))) ? secure_input_data($this->input->post('name')) : '',
                'cust_mobile' => (!empty($this->input->post('mobile'))) ? secure_input_data($this->input->post('mobile')) : '',
                'cust_city' => (!empty($this->input->post('city'))) ? secure_input_data($this->input->post('city')) : '',
                'cust_email' => (!empty($this->input->post('email'))) ? secure_input_data($this->input->post('email')) : '',
                'cust_terms' => (!empty($this->input->post('chk'))) ? secure_input_data($this->input->post('chk')) : '',
                'campaign_source' => (!empty($this->input->post('source'))) ? secure_input_data($this->input->post('source')) : '',
                'utm_source' => (!empty($this->input->post('utm_source'))) ? secure_input_data($this->input->post('utm_source')) : '',
                'utm_campaign' => (!empty($this->input->post('utm_campaign'))) ? secure_input_data($this->input->post('utm_campaign')) : '',
                'utm_medium' => (!empty($this->input->post('utm_medium'))) ? secure_input_data($this->input->post('utm_medium')) : ''
            );

            $insertId = $this->api_model->insert_request($postData);
            if (isset($insertId) && $insertId > 0 && $insertId) {
                $data['status_message'] = 'We have received your contact details. A Kotak Life representative will get in touch with you shortly.';
                $data['status'] = TRUE;
            } else {
                $data['status_message'] = 'Something went wrong. Please try again later!';
                $data['status'] = FALSE;
            }
            echo json_encode($data);
            exit();
        }
    }

    public function name_format_check($str, $param) {
        if (!preg_match("/^[a-z .A-Z0-9' _-]*$/", $str)) {
            $this->form_validation->set_message('name_format_check', 'The %s field may only contain alpha-numeric characters and white space.');
            return false;
        }
        return true;
    }
	
	 public function thatswhy_campaign_submit() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        $this->load->library('form_validation');
        $this->load->helper('security'); // to xss_clean  
        $this->load->model('api_model');

        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_name_format_check|max_length[80]');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|xss_clean|numeric|exact_length[10]');
        $this->form_validation->set_rules('city', 'City', 'trim|required|xss_clean|max_length[20]');
        $this->form_validation->set_rules('email', 'Email ID', 'required|xss_clean|valid_email|max_length[256]');
        $this->form_validation->set_rules('terms', 'Privacy Policy', 'required|xss_clean');
      //  $this->form_validation->set_rules('g-recaptcha-response', 'Captcha Check', 'required|xss_clean|callback__check_recaptcha');
        if ($this->form_validation->run() == FALSE) {
            foreach ($this->form_validation->error_array() as $field_name => $error_message) {
                $data['inputerror'][] = $field_name;
                $data['error_string'][] = $error_message;
            }
            $data['status'] = FALSE;
            $data['validation_failed'] = TRUE;
            echo json_encode($data);
            exit();
        } else {
            $postData = array(
                'cust_name' => (!empty($this->input->post('name'))) ? secure_input_data($this->input->post('name')) : '',
                'cust_mobile' => (!empty($this->input->post('mobile'))) ? secure_input_data($this->input->post('mobile')) : '',
                'cust_city' => (!empty($this->input->post('city'))) ? secure_input_data($this->input->post('city')) : '',
                'cust_email' => (!empty($this->input->post('email'))) ? secure_input_data($this->input->post('email')) : '',
                'cust_terms' => (!empty($this->input->post('terms'))) ? secure_input_data($this->input->post('terms')) : '',
                'campaign_source' => (!empty($this->input->post('source'))) ? secure_input_data($this->input->post('source')) : '',
                'utm_source' => (!empty($this->input->post('utm_source'))) ? secure_input_data($this->input->post('utm_source')) : '',
                'utm_campaign' => (!empty($this->input->post('utm_campaign'))) ? secure_input_data($this->input->post('utm_campaign')) : '',
                'utm_medium' => (!empty($this->input->post('utm_medium'))) ? secure_input_data($this->input->post('utm_medium')) : '',
				'utm_keyword' => (!empty($this->input->post('utm_keyword'))) ? secure_input_data($this->input->post('utm_keyword')) : '',
				'device' => (!empty($this->input->post('device'))) ? secure_input_data($this->input->post('device')) : '',
				'campaign_type' => (!empty($this->input->post('campaign_type'))) ? secure_input_data($this->input->post('campaign_type')) : ''
            );

            $insertId = $this->api_model->insert_request($postData);
			//$insertId =1;

            if (isset($insertId) && $insertId > 0 && $insertId) {
				//echo $this->input->post('campaign_type');die;
				if($this->input->post('campaign_type') == 0){
					//CURL  call
					$ip = ($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'127.0.0.1';
					//$ip = '127.0.0.1';
					$data = array();
					$data['cid'] = "FylvGt6Yyb6n-zTXcJHwjBawOY_w3QSZxF7rdUJLqhA.";
					$data['cpid'] = "FylvGt6Yyb6n-zTXcJHwjBawOY_w3QSZxF7rdUJLqhA.";
					$data['first_name'] = (!empty($this->input->post('name'))) ? secure_input_data($this->input->post('name')) : '';
					$data['mobile'] = (!empty($this->input->post('mobile'))) ? secure_input_data($this->input->post('mobile')) : '';
					$data['city'] = (!empty($this->input->post('city'))) ? secure_input_data($this->input->post('city')) : '';
					$data['email'] = (!empty($this->input->post('email'))) ? secure_input_data($this->input->post('email')) : '';
					$data['returnUrl'] = "1";
					$data['ip'] = $ip;
					$data['product_code'] = "K92";
					$data['lead_group'] = "Corporates";
					$data['utm_source'] = (!empty($this->input->post('utm_source'))) ? secure_input_data($this->input->post('utm_source')) : '';
					$data['utm_campaign'] = (!empty($this->input->post('utm_campaign'))) ? secure_input_data($this->input->post('utm_campaign')) : '';
					$data['utm_medium'] = (!empty($this->input->post('utm_medium'))) ? secure_input_data($this->input->post('utm_medium')) : '';
					//echo "<pre>";print_r($data);die;
					$curl = curl_init();
					curl_setopt_array($curl, array(
					  CURLOPT_URL => "https://onlineinsurance.mykotaklife.com/klilms/Api/receive",
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_SSL_VERIFYPEER => FALSE,
					  CURLOPT_ENCODING => "",
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 30,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => "POST",
					  CURLOPT_POSTFIELDS => $data,
					  CURLOPT_HTTPHEADER => array(
						"cache-control: no-cache"
					  ),
					));

					$response = curl_exec($curl);
					$err = curl_error($curl);

					curl_close($curl);

					if ($err) {
					  //echo "cURL Error #:" . $err;
					} else {
					  //echo $response;die;
					}
					
					$data['status_message'] = 0;
					$data['status'] = TRUE;
				}else{
					$data['status_message'] = 'We have received your contact details. A Kotak Life representative will get in touch with you shortly.';
					$data['status'] = TRUE;
				}
                
            } else {
                $data['status_message'] = 'Something went wrong. Please try again later!';
                $data['status'] = FALSE;
            }
            echo json_encode($data);
            exit();
        }
    }

	
function _check_recaptcha($g_recaptcha_response) {
		//your site secret key
        $secret = GOOGLE_RECAPTHA_SECRET; //'6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
		$options=array(
			'ssl'=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
		),
		/*	'ssl'=>array(
				'cafile'            => 'D:/kotak/apache/conf/kotak.pem',
				'verify_peer'       => true,
				'verify_peer_name'  => true,
			),*/
			'http' => array(
					'proxy' => '192.168.201.77:8080',
					'request_fulluri' => true,
			)
		);
		$context = stream_context_create( $options );
        //get verify response data
        //$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$g_recaptcha_response);
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$g_recaptcha_response,  FILE_TEXT, $context);
		$responseData = json_decode($verifyResponse);
        if($responseData->success) {
			return TRUE;
		} else {
			$this->form_validation->set_message('_check_recaptcha', 'Robot verfication failed. Please try again.');
			return FALSE;
		}
	}
    public function term_life_insurance_plan_for_smokers_vs_non_smokers(){
		$access_token = false;
		$row=$this->input->request_headers();   
		$data=array();$ret=array();
				$userAll=array();
					if ($this->input->server('REQUEST_METHOD') === 'GET')
					{
						
                      
								 $user['content']='<section class="blog-head">
                 <div class="midWrapper">
                 <div class="kotak-eterm-plan-popup">
                        <div id="assutedplanSticky">
                          <!-- <div class="mobile-tab singletabs" >
                     
                      <a href="JavaScript:void(0)" id="assutedplan" onclick="savingTab(event, "assutedplan")" class="mobile-product mobprod pop-cont"><img src="assets/images/metro-icon.svg" alt=""> <span>Kotak e-Term</span></a>
                    
                    
                  </div>-->
                        
                
                
                    <!-- <a href="JavaScript:void(0)" class="popup-term-btn pop-cont"><img src="assets/images/window.png">  Kotak e-Term</a> -->
                               
                   
                      <div class="modal-popups-btns pop-up blogaside  assutedplan"  id="assutedplanbox">
                        <div class="kotak-e-term-plan">
                                  <div class="d-flex bg-eterm">
                                      <div>
                                                        <p class="product_head">Kotak e-Term </p>
                                                                          
                                      </div>
                                      <div class="ml-auto tooltip">
                                          <!--https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_e-Term_Plan_Brochure_-_Online_-_20th_Jan_2022.pdf-->
          
          
          
          
                                          <a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf" download="Brochure">
                                              <button class="broch-btn want-to-btn"> <img src="assets/images/down-broch.svg" class=""></button>
                                          </a>
                                         <!-- <span class="tooltiptext">Download Brochure</span>-->
                                      </div>
                                  </div>
                                  <div class="feats-sec">
                                                                    <p class="feature_head">Features</p>
                                                                  <ul>
                                        <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Life Cover till 85 years for Life & Life Secure Option</span></li>
                                        <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>3 Payout Options</span></li>
                                        <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Women</span></li>
                                        <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Option to exit the policy with premium refund at the age of 60*</span></li>
                                        <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Non-Tobacco Users</span></li>
                          <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Free Medical Check Up every 5th year**</span></li>
                                    </ul> 
                                                                  <div class="feats-want blog-term-btn">
                                          <a href="https://www.kotaklife.com/term-insurance/kotak-e-term?utm_source=organic&utm_medium=website&utm_campaign=product_card">Want to Know More?</a>
                                      </div>
                                      
                                      <div class="feats-buy">
                                            <a href="https://www.kotaklife.com/buy-online-term-insurance/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content=term-life-insurance-plan-for-smokers-vs-non-smokers" rel="nofollow">Buy Now</a>
                                                  </div>
                                      <div class="d-flex mt-20">
                      
                                          <div>
                                                 <p class="p-ref">Ref. No. KLI/22-23/E-BB/492</p>
                                                              </div>
                                          <div class="ml-auto">
                                              <!---->
                                                                                <p class="p-tc"> <a target="_blank" href="https://www.kotaklife.com/insurance-guide/protection/termsconditions">T&C</a></p>
                              
                                              
                                          </div>
                                      </div>
                                  </div>
                              </div>
          
                              
                          
                          
                          
                          
               </div>
                           
                
                </div>
                  </div>
                  </div>
                  <div class="best-card">
                <div class="midWrapper">
                <div class="text-center">
                                    <h1>Term Life Insurance Plan for Smokers vs Non-Smokers</h1>
                        <!--<p>Smoking need not deter a person from availing term plans as they cover both smokers and non-smokers in India, with variable premiums. To Know more, Visit Now</p>-->
                        <p>Insurance premiums for smokers are affected by the increased health risks, shorter life expectancy, and higher medical costs.</p>
                        
                                    <div class="views-blogs">
                                  <div class="b-view">
                                     <ul class="d-flex blogs-ul">
                                       <!-- <li>Apr 15, 2024 <span class="mr-ten">  </span></li>-->
                                  <!--      <li> <img src="assets/images/blog-eye.svg" class=""></li>-->
                                        <li>5,866 Views | Updated on: Apr 15, 2024</li><!-- <span class="mr-ten"> | </span>-->
                                        <!--<li> <img src="assets/images/blog-like.svg" class=""></li>
                                        <li>155</li>-->
                                    </ul>
                                        </div>
                                    </div>
                                     <!--div class="">
                                        <a href="" target="_blank" onclick="dataLayer.push({"event": "event about life insurance", "category": "new customers", "action": "about life insurance", "label": "about life insurance"});"></a>
                                       
                         
                                    </div-->
                        
          
                        
                                                  <div class="btnLink">
                                                       
                                             <!--?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=term-life-insurance-plan-for-smokers-vs-non-smokers-->
                                          <a href="buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=blog_cta&utm_content=term-life-insurance-plan-for-smokers-vs-non-smokers" target="_blank" onclick="dataLayer.push({"event": "event saving and tax", "category": "new customers", "action": "saving and tax", "label": "saving and tax"});">Know About Term Plan</a>
                                                                                  </div>
                                   </div>
                </div>
                <div class="d-flex p-20 blog-social-meida">
                               
                                   
                                    <div class="ml-auto">
                                        <div class="hide-desktop share-ul">
                                            <a href="#"> <img src="assets/images/send-icon.svg" class=""></a>
                                        </div>
                                         <ul class="social__icons share-ul d-flex hide-mobile">
                                           
                                             <li><a class="fb" href="https://www.facebook.com/sharer.php?t=Term Life Insurance Plan for Smokers vs Non-Smokers" data-title="Think About Life Insurance Sooner than Later" data-image="https://kotaklife.com/assets/images/uploads/insurance-guides/articles/Be-prepared-against-death-disability-and-disease4.jpg" data-desc="Getting life insurance early gives many benefits like lower premium, provides a reliable asset, tax benefits and helps your family in uncertain times. Click here to know more why you should buy life insurance now"><span class="fa f_b fa-facebook"></span></a></li>
                                            <li><a class="twt" href="https://twitter.com/share?text=Term Life Insurance Plan for Smokers vs Non-Smokers&url=https://www.kotaklife.com/insurance-guide/protection/term-life-insurance-plan-for-smokers-vs-non-smokers&via=KLI" data-title="Think About Life Insurance Sooner than Later" data-desc="Getting life insurance early gives many benefits like lower premium, provides a reliable asset, tax benefits and helps your family in uncertain times. Click here to know more why you should buy life insurance now"><span class="fa twit fa-twitter"></span></a></li>
                                            <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=https://www.kotaklife.com/insurance-guide/protection/term-life-insurance-plan-for-smokers-vs-non-smokers"><span class="fa linkedin fa-linkedin"></span></a></li>
                                            <li><a href="https://api.whatsapp.com/send?text=https://www.kotaklife.com/insurance-guide/protection/term-life-insurance-plan-for-smokers-vs-non-smokers&t=Term Life Insurance Plan for Smokers vs Non-Smokers" target="_blank"><span class=" fa whatsap fa-whatsapp"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                </div>
                 </section>
                 <section class="blog-body-content">
                        <div class="midWrapper midwrappercss">
                    <div class="row brdr_bttm">
                      <div class="col-md-7 pr-blog">
                         
                           <!--End New code -- 26/09/23 -->
                           
                           
                            <span id="topic1">
                             <p><b>O</b>ne of the biggest myths in the insurance and health field is that smokers cannot avail the benefits of life insurance. Contrary to this popular belief, life insurance companies offer life insurance to smokers with a different set of terms and conditions than non-smokers. While smoking can be dangerous to your health, it can also make you churn out extra money to buy term life insurance.</p>
          
           <h2><b>Key Takeaways</b></h2>
          <ul>
              <li> As per insurance providers, a smoker is an individual who consumes tobacco or nicotine in any form, including cigarettes and other tobacco substances.</li>
              <li>Insurance companies categorize smokers into different groups, such as typical smokers, preferred smokers, and table-rate Smokers.</li>
              <li>Increased health risks associated with smoking-related illnesses are one of the main reasons for higher premium rates of life insurance plans.</li>
              <li>Non-smokers often qualify for lower premiums and may be eligible for discounts based on healthy lifestyle habits.</li>
          </ul>
          
           <p>Smoking, in any form, significantly impacts insurance premiums and coverage options. Life insurance providers assess an applicant’s smoking habits to estimate the associated risk and determine appropriate terms accurately. From the definition of smokers to the categorization of non-smokers and various smoker types, insurers employ a structured approach to underwriting policies. </p>
          
           <h2>Difference Between the Life Insurance for a Smoker vs. Non-smoker</h2>
          
           <p>Both smokers as well as non-smokers are eligible for term life insurance. However, smokers’ classification into different categories enables insurance companies to decide the premium amount for various individuals depending on their smoking habits. Here is the comparison for buying life insurance for smokers and non-smokers:</p>
          
           <table class="mar-left1"> <colgroup></colgroup><tbody>
              <tr><td><p><b>Feature</b></p>
          
           </td>
          
           <td><p><b>Smoker</b></p>
          
           </td>
          
           <td><p><b>Non-Smoker</b></p>
          
           </td></tr>
              <tr><td><p>Premium Cost</p>
          
           </td>
          
           <td><p>Higher (1.5-2 times more expensive)</p>
          
           </td>
          
           <td><p>Lower</p>
          
           </td></tr>
              <tr><td><p>Reason for Cost Difference</p>
          
           </td>
          
           <td><p>Increased risk of death due to smoking-related illnesses</p>
          
           </td>
          
           <td><p>Lower risk of death</p>
          
           </td></tr>
              <tr><td><p>Life Expectancy</p>
          
           </td>
          
           <td><p>Lower</p>
          
           </td>
          
           <td><p>Higher</p>
          
           </td></tr>
              <tr><td><p>Health Requirements</p>
          
           </td>
          
           <td><p>May require additional medical tests</p>
          
           </td>
          
           <td><p>Typically fewer medical tests required</p>
          
           </td></tr>
              <tr><td><p>Eligibility for Discounts</p>
          
           </td>
          
           <td><p>Some insurers offer discounts for quitting smoking (after a waiting period)</p>
          
           </td>
          
           <td><p>May be eligible for discounts based on healthy lifestyle habits</p>
          
           </td></tr>
          </tbody>
          </table>
          
          
           <h2><b> How Insurers Define Smokers?</b></h2>
          
           <p>According to <a href="https://www.kotaklife.com/" title="">life insurance</a> providers, a smoker is an individual who consumes tobacco or nicotine in any form. The said individual might consume tobacco/nicotine in the form of cigarettes and other tobacco substances.</p>
          
           <p>Life insurance providers have different ways to ask an individual whether or not he smokes. Some of the most common questions posed by them are:</p>
          
           <ul class="mar-left1">     <li> Do you consume any nicotine/tobacco products?</li>
              <li>When was the last time you did smoking?</li>
              <li>How many cigarettes do you smoke in a day?</li>
              <li>How frequently do you smoke?</li>
          </ul>
          
           <p>It is also common for insurance companies to ask for your past medical records as a routine part of life insurance applications.</p>
          
           <h2>How Insurers Categorize Smokers and Non-Smokers?</h2>
          
           <p>The smoking habits among insurers vary, leading some insurance providers to classify smokers into distinct categories. Let us take a look at the categories insurance companies prefer for smokers and non-smokers:</p>
          
           <h3>Non-smoker</h3>
          
           <p class="mar-left1">Individuals who have not used tobacco or nicotine products within a specified period, typically ranging from the past 12 months to several years, depending on the insurer. Non-smokers typically qualify for the lowest premiums since they are considered to have the lowest risk of developing smoking-related health issues.</p>
          
           <h3>Preferred Smoker</h3>
          
           <p class="mar-left1">Some insurers might have a category for individuals who smoke occasionally or have recently quit smoking but still use nicotine products. Preferred smokers may have slightly higher premiums compared to non-smokers but lower premiums than typical or table-rate smokers.</p>
          
           <h3>Typical Smoker</h3>
          
           <p class="mar-left1">This category typically includes individuals who smoke regularly and use tobacco or nicotine products on a daily basis. They are considered to have a higher risk of health problems related to smoking, and thus, they usually face higher insurance premiums compared to non-smokers and preferred smokers.</p>
          
           <h3>Table-rate Smoker</h3>
          
           <p class="mar-left1">Table-rate smokers are individuals who may have a history of smoking-related health issues, such as respiratory problems or cardiovascular diseases. They are considered high-risk by insurers and are often placed in a separate category with significantly higher premiums compared to non-smokers and other smoker categories.</p>
          
           <p class="mar-left1">These categories help insurers accurately assess the risk associated with insuring individuals who use tobacco or nicotine products and determine appropriate premium rates accordingly. Applicants need to disclose their smoking habits truthfully during the underwriting process to ensure they receive the appropriate coverage and premiums.</p>
          
           <h2>Why Smokers Pay Higher Premium Charge Than Non-Smokers?</h2>
          
           <p>Term life insurance for smokers has higher premiums than non-smokers because of the increased risk they pose to insurance companies. Here are some of the reasons:</p>
          
           <h3>Higher Health Risks</h3>
          
           <p class="mar-left1">Smoking is a well-documented risk factor for numerous health problems, including cancer, heart disease, and respiratory illnesses. These conditions are not only expensive to treat, but they can also lead to premature death. Since insurance companies pay out claims upon death, smokers statistically have a higher chance of requiring a payout sooner, leading to higher costs for the insurer.</p>
          
           <h3>Life Expectancy</h3>
          
           <p class="mar-left1">Smokers generally have a lower life expectancy compared to non-smokers. This means the insurance company is more likely to have to pay out a death benefit sooner for a smoker. To account for this higher risk, they charge a higher premium.</p>
          
           <h3>Medical Costs</h3>
          
           <p class="mar-left1">Smokers typically require more medical care throughout their lives due to smoking-related illnesses. This translates to higher costs for the insurance company, which they reimburse through higher premiums for smokers.</p>
          
           <h2>Which Term Plan to Choose Whether You are a Smoker or Non-Smoker?</h2>
          
           <p>If you are a chain smoker with a heavy smoking habit, it would be advisable for you to choose a term life insurance plan that offers a large sum assured at a nominal premium charge, which would be an economical way to provide an adequate level of financial protection to your family in case of your unfortunate demise tomorrow.</p>
          
           <p>If you are a complete non-smoker, the credit goes to you for choosing to keep yourself healthy. Nevertheless, it is never a bad idea to secure the life of your loved ones with a term life insurance plan. Even though you would keep yourself away from harmful habits of smoking and maintain the best diet, you are bound to fall into the health complication trap someday. Hence, it would be best to stay prepared for tomorrow’s uncertainties with reliable term life insurance.</p>
          
           <h2>Concluding Thoughts</h2>
          
           <p>Whether you are a smoker or not, you always have to be honest with your insurer while purchasing a term life insurance plan. It would enable your term insurance provider to find the best <a href="https://www.kotaklife.com/insurance-guide/protection/online-vs-offline-term-insurance-which-is-the-better-option-to-buy" title="">term policy</a> with the ideal premium charges for you based on your smoking habits and health conditions. As a smoker, having term insurance will help you cope with financial difficulties smoothly.</p>
          
           <h2 class="faq">FAQs</h2>
          
           <div class="accordion-div accordion-btns mt-mob-15"><p> </p>
          
           <p> <br>
           <!--FAQ q&a ends ---> </p>
          
          <div class="bor"> <p> </p>
          
          <div class="accordion bor-top-zero" role="heading" aria-level="3"><p><span>1</span></p>
          
          <h3>Are there any specific medical tests required for smokers?</h3>
          
          </div>
          
          <div class="panel tab-detail mb-0 tab-align"><p> </p>
          
          <p>Smokers may require additional medical tests during the underwriting process to assess health risks accurately.</p>
          
           </div>
          
           <p> </p>
          
           </div>
          
           <p> <br>
           <!--FAQ q&a ends ---> <br>
           <!--FAQ q&a ends ---> </p>
          
          <div class="bor"> <p> </p>
          
          <div class="accordion bor-top-zero" role="heading" aria-level="3"><p><span>2</span></p>
          
          <h3>Can I switch from smoker to non-smoker rates if I quit smoking?</h3>
          
          </div>
          
          <div class="panel tab-detail mb-0 tab-align"><p> </p>
          
          <p>Some insurers offer the possibility to transition to non-smoker rates after a certain period of being smoke-free. Check with your insurer for eligibility criteria.</p>
          
           </div>
          
           <p> </p>
          
           </div>
          
           <p> <br>
           <!--FAQ q&a ends ---> <br>
           <!--FAQ q&a ends ---></p>
          
          <div class="bor"> <p> </p>
          
          <div class="accordion bor-top-zero" role="heading" aria-level="3"><p><span>3</span></p>
          
          <h3>Can I customize my term life insurance plan as a smoker?</h3>
          
          </div>
          
          <div class="panel tab-detail mb-0 tab-align"><p> </p>
          
          <p>Yes, many insurers offer customizable term life insurance plans for smokers, allowing you to tailor coverage and benefits to your needs.</p>
          
           </div>
          
          </div>
          
           <p><!--FAQ q&a ends ---> <br>
           <!--FAQ q&a ends ---></p>
          
          <div class="bor"> <p> </p>
          
          <div class="accordion bor-top-zero" role="heading" aria-level="3"><p><span>4</span></p>
          
          <h3>What happens if I misrepresent my smoking status?</h3>
          
          </div>
          
          <div class="panel tab-detail mb-0 tab-align"><p> </p>
          
          <p>Misrepresentation of smoking status can result in policy cancellation or denial of benefits. It is crucial to provide accurate information during the application process.</p>
          
           </div>
          
          </div>
          
           </div>
          
           <div class="suggestion"><h2>Suggested Readings</h2>
          
           <p><b><span>1.</span> <a href="https://www.kotaklife.com/insurance-guide/protection/online-vs-offline-term-insurance-which-is-the-better-option-to-buy" title="">Online vs Offline Term Insurance - A Comparison</a><br>
           </b></p>
          
           <p> </p>
          
          <p><b><span>2.</span><a href="https://www.kotaklife.com/insurance-guide/protection/how-can-you-avoid-term-insurance-policy-lapse" title="">How Can You Avoid Term Insurance Policy Lapse?</a></b></p>
          
           <p> </p>
          
           </div></span>
          
                <div class="consumer consumer-text hide-mobile pb-0">
          
              <h3 class="ls1"> - A Consumer Education Initiative series by Kotak Life</h3>
          </div>
            
                                     <div class="authorBox authornew">
                        <div class="authorDetails">
                                          <div class="blogsTooltip">
                            <div class="authorName">
                              <div class="authorImg">
                                <img src="assets/images/uploads/insurance-guides/reviews/_thumbs/amit_raje.png" alt="Amit Raje" />
                              </div>
                              <div class="nameTitle">
                                <div>
                                  <!--<img src="assets/images/contract.png" alt="Written By" />-->
                                 Written By : <br>
                                </div>
                                <b class="nameTag"> Amit Raje </b>
                              </div>
                            </div>
                            <span class="tooltiptext">
                              <p><b>Amit Raje</b> is an experienced marketer who has worked in various Fintechs and leading Financial companies in India. With focused experience in Digital, Amit has pioneered multiple digital commerce in India. Now, close to two decades later, he is the vice president and head of the D2C business department. He masters the skill of strategic management, also being certified in it from IIMA. He has challenged his challenges and contributed his efforts in this journey of digital transformation.</p>
          
           <p><a href="https://in.linkedin.com/in/amit-raje-digitalexpert" class="linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></p>                  </span>
                          </div>
           
          
                                           <div class="blogsTooltip">
                            <div class="authorName">
                              <div class="authorImg">
                                <img src="assets/images/uploads/insurance-guides/reviews/_thumbs/prasad.png" alt="Amit Raje" />
                              </div>
                              <div class="nameTitle">
                                <div>
                                  <!--<img src="assets/images/contract.png" alt="Written By" />-->
                                 Reviewed By : <br>
                                </div>
                                <b class="nameTag"> Prasad Pimple </b>
                              </div>
                            </div>
                            <span class="tooltiptext">
                              <p><b>Prasad Pimple</b> has a decade-long experience in the Life insurance sector and as EVP, Kotak Life heads Digital Business. He is responsible for developing user friendly product journeys, creating consumer awareness and helping consumers in identifying need for life insurance solutions. He has 20+ years of experience in creating and building business verticals across Insurance, Telecom and Banking sectors</p>
          
           <p><a href="https://in.linkedin.com/in/prasad-pimple-54ba489" class="linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></p>                  </span>
                          </div>
           
          
                                        
                         </div>
                         </div>
                                  </div>
                                <div class="col-md-6">
          
                           
          
                            <div class="kotak-e-term-plan new_kotak_eterm ">
                                <div class="d-flex bg-eterm">
                                    <div>
                                                      <p class="product_head">Kotak e-Term </p>
                                          
                          
                                    </div>
                                    <div class="ml-auto tooltip">
                                        <!--https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak_e-Term_Plan_Brochure_-_Online_-_20th_Jan_2022.pdf-->
                                        <a href="https://www.kotaklife.com/assets/images/uploads/insurance-plans/Kotak-e-Term-Plan-Brochure.pdf" download="Brochure">
                                            <button class="broch-btn want-to-btn"> <img src="assets/images/down-broch.svg" class=""></button>
                                        </a>
                          <span class="tooltiptext">Download Brochure</span>
                                    </div>
                                </div>
                                  <div class="feats-sec feature-group">
                                                              <p class="feature_head">Features</p>
                                                               
                                    <ul>
                                        <li class="li-hover li-hover1 d-flex"> <i class="fa fa-check fa-size fa-size1 faa" aria-hidden="true"></i><span>Life Cover till 85 years for Life & Life Secure Option</span></li>
                                        <li class="d-flex"> <i class="fa fa-check fa-size faa " aria-hidden="true"></i><span>3 Payout Options</span></li>
                                        <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Women</span></li>
                                        <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Option to exit the policy with premium refund at the age of 60*</span></li>
                                        <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Special Rates for Non-Tobacco Users</span></li>
                          <li class="d-flex"> <i class="fa fa-check fa-size faa" aria-hidden="true"></i><span>Free Medical Check Up every 5th year**</span></li>
                                    </ul>                         <!-- <div class="feats-want">-->
                                        <!--https://www.kotaklife.com/online-plans/online-term-insurance-plans/kotak-e-term-plan-insurance-->
                                      <!--  <a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-e-term?utm_source=organic&utm_medium=website&utm_campaign=product_card">Want to Know More?</a>
                                    </div>-->
                                                              <div class="feats-want feature-want-more">
                                        <a target="_blank" href="https://www.kotaklife.com/term-insurance/kotak-e-term?utm_source=organic&utm_medium=website&utm_campaign=product_card">Want to Know More?</a>
                                    </div>
                                                       
                                  
                                                    <div class="feats-buy text-center">
                                        <!--https://www.kotaklife.com/buy-online-term-insurance/?utm_source=organic&utm_medium=website&utm_campaign=l2category_page&utm_content=card-->
                                        <a target="_blank" href="https://www.kotaklife.com/buy-online-term-insurance/#/landing?utm_source=organic&utm_medium=website&utm_campaign=product_card&utm_content=term-life-insurance-plan-for-smokers-vs-non-smokers" rel="nofollow">Invest NOW</a>
                                    </div>
                                                               <div class="d-flex mt-20">
                                        <div>
                                            <p class="p-ref">Ref. No. KLI/22-23/E-BB/2435</p>
                                        </div>
                                        <div class="ml-auto">
                                            <!---->
                                                                <p class="p-tc"> <a target="_blank" href="https://www.kotaklife.com/insurance-guide/protection/termsconditions">T&C</a></p>
                                             </div>
                                    </div>
                                </div>
                            </div>
          
          
                            <!--a target="_blank" href="https://www.kotaklife.com/insurance-guide/knowledgevault/term-insurance">
                                <div class="browse-our">
                                    <div class="d-flex">
                                        <div>
                                            <img src="assets/images/browse-img.svg" class="">
                                        </div>
                                        <div>
                                            <h3>Browse our library of resources</h3>
                                        </div>
                                        <div>
                                            <img src="assets/images/two-arr.svg" class="">
                                        </div>
                                    </div>
                                </div>
                            </a-->
                    
                     
          
            
                                                  <div class="also-read ">
                                    <h3 class="alsorea-h3">Also read</h3>
                                    <ul class="alsoRead-list">
                                                                          <li> <a href="https://www.kotaklife.com/insurance-guide/protection/how-to-choose-the-right-sum-assured-under-a-term-plan">How To Choose the Right Sum Assured Under a Term Plan?</a></li>
                                                                          <li> <a href="https://www.kotaklife.com/insurance-guide/protection/which-term-insurance-to-choose-lump-sum-or-staggered-pay-out-plan">Term life insurance: Should you opt for lump sum payout or staggered payout?</a></li>
                                                                          <li> <a href="https://www.kotaklife.com/insurance-guide/protection/term-insurance-what-happens-when-you-dont-pay-your-premiums">Term Insurance: What Happens When You Don’t Pay Your Premiums?</a></li>
                                                                  </ul>
                                </div>
                            <div  class="check-calculators">
                              <div class="check-bg">
                                <h3 class="check">Check out our Calculators</h3>
                                <ul>
                                  <li><a href="https://www.kotaklife.com/financial-tools-calculators/ulip-calculator">ULIP Calculator</a></li>
                                <li><a href="https://www.kotaklife.com/financial-tools-calculators/compound-interest-calculator">Compound Interest Calculator</a></li>
                                <li><a href="https://www.kotaklife.com/financial-tools-calculators/retirement-calculator">Retirement Calculator</a></li>
                                <li><a href="https://www.kotaklife.com/financial-tools-calculators/sip-calculator">SIP Calculator</a></li>
                                <li><a href="https://www.kotaklife.com/financial-tools-calculators/bmi-calculator">BMI Calculator</a></li>
                                <li><a href="https://www.kotaklife.com/financial-tools-calculators/hra-calculator">HRA Calculator</a></li>
                                <li><a href="https://www.kotaklife.com/financial-tools-calculators/fd-calculator">FD Calculator</a></li>
                                <li><a href="https://www.kotaklife.com/financial-tools-calculators/rd-calculator">RD Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/gratuity-calculator">Gratuity Calculator</a></li>
                      <li><a href="https://www.kotaklife.com/financial-tools-calculators/ppf-calculator">PPF Calculator</a></li>
                                </ul>
          
          
                              </div>
                            </div>
                        </div>
                            </div>
                </section>
                </div>
            
          
             
           
          
            <!--script> 
          
            
            
              if($(window).width() < 480){
             var assutedPlan = document.getElementById("assutedplan"),
          
              popupBox = document.getElementById("assutedplanbox"),
              newblock = document.getElementsByTagName("body");
          
          assutedPlan.onclick = function () {
              if (popupBox.style.display === "block") {
                  popupBox.style.display = "none";
                  assutedPlan.classList.remove("active");
              } else {
                  popupBox.style.display = "block";
                     assutedPlan.classList.add("active");
                  guaranteedPlan.classList.remove("active");
                   popupBoxTwo.style.display = "none";
              }
            
          };
          };
            
              if($(window).width() < 480){
          var guaranteedPlan = document.getElementById("guaranteedplan"),
              popupBoxTwo = document.getElementById("guaranteedplanbox"),
              newblock = document.getElementsByTagName("body"); 
          guaranteedPlan.onclick = function () {
              if (popupBoxTwo.style.display === "block") {
                  popupBoxTwo.style.display = "none";
                  guaranteedPlan.classList.remove("active");
                   assutedPlan.classList.remove("active");
                 
              } else {
                  popupBoxTwo.style.display = "block";
                    assutedPlan.classList.remove("active");
                    guaranteedPlan.classList.add("active");
                   popupBox.style.display = "none";
              }
          }
              };
          
          
          
          
          </script-->
          <script>
          var scrollAmount = 95;
            document.addEventListener("DOMContentLoaded", function(){
          $(window).on("scroll", function () {
            if ($(window).scrollTop() >= scrollAmount && !$("#assutedplanSticky").hasClass("mobile-product-fixed")) {
              $("#assutedplanSticky").addClass("mobile-product-fixed");
            } else if (
              $(window).scrollTop() < scrollAmount &&
              $("#assutedplanSticky").hasClass("mobile-product-fixed")
            ) {
              $("#assutedplanSticky").removeClass("mobile-product-fixed");
                
            }
          }); 
            });
          
           
              
          </script>
          
          
          
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <style>
            @media (max-width: 767px){.mobilechat{right: -17px!important;bottom: 18px!important;}
            .f-s-logo{display:block !important;}
            .gl-logo{margin:2rem auto;}
            .gl-logo img{margin-top:2rem;}
            }
          .custom-icon{padding-bottom: 0px!important;padding-right: 0!important;filter: drop-shadow(0 0 10px #333);right: 100px;bottom: 22px;cursor:pointer;}.w-130{width:130px;}.term-pnnn .polular-searches{border-bottom:1px solid #707070;margin-bottom:20px;border-top:none;}.f-s-logo{display:flex; justify-content: space-between;}.gl-logo{width:100px;}.social-medias{margin:0 !important;}.new_logo_align{display: flex;clear: both;}.new_logo_align .gl-logo{width: 110px;}
          </style>
          
            </section>
          
          
           
            <script src="assets/js/jquery-3.6.0.min.js"></script>
          
            <script>
              
          var assutedPlan = document.getElementById("assutedplan"),
              popupBox = document.getElementById("assutedplanbox"),
              newblock = document.getElementsByTagName("body");
          
          assutedPlan.onclick = function () {
              if (popupBox.style.display === "block") {
                  popupBox.style.display = "none";
                  assutedPlan.classList.remove("active");
              } else {
                  popupBox.style.display = "block";
                   popupBoxTwo.style.display = "none";
                     assutedPlan.classList.add("active");
                  guaranteedPlan.classList.remove("active");
              }
            
          }
          
          
          var guaranteedPlan = document.getElementById("guaranteedplan"),
              popupBoxTwo = document.getElementById("guaranteedplanbox"),
              newblock = document.getElementsByTagName("body"); 
          guaranteedPlan.onclick = function () {
              if (popupBoxTwo.style.display === "block") {
                  popupBoxTwo.style.display = "none";
                  guaranteedPlan.classList.remove("active");
                 
              } else {
                  popupBoxTwo.style.display = "block";
                   popupBox.style.display = "none";
                    assutedPlan.classList.remove("active");
                    guaranteedPlan.classList.add("active");
              }
          }
          
          
          
          //}    
          
          
          
          
          
          
          
          </script>';
                              		
                                $userAll[]=$user;

                                $user1["user_details"]=$userAll;
						
                                $ret=$this->common->response(200,true,'content',$user1);
                            }
								
						
						
						
                
			
        
		
		echo json_encode($ret);
	}
    public function ulip_calculator(){
		$access_token = false;
		$row=$this->input->request_headers();   
		$data=array();$ret=array();
				$userAll=array();
					if ($this->input->server('REQUEST_METHOD') === 'GET')
					{
						
                      
								 $user['content']='
<link rel="stylesheet" as="style" href="https://fonts.googleapis.com/css?family=Roboto:300,400,300italic,700,700italic" font-display="swap">

<link rel="stylesheet" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="assets/css/reset.css" rel="stylesheet" type="text/css" />
<link href="assets/css/owl.theme.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.0.20/style/jquery.jscrollpane.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="assets/css/media.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/investment.css">
<link rel="stylesheet" href="assets/css/vendor/rangeslider.css">
<script type="text/javascript" src=https://prod-anuvadak.reverieinc.com/api/snippet/bundle/file></script>
<script defer src="assets/js/g-recaptcha.js"></script>
<script defer src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
<script src="//cdnt.netcoresmartech.com/smartechclient.js"></script>

<script defer src="https://code.jquery.com/jquery-3.6.0.min.js" language="javascript"></script>
<script defer src="assets/js/cal-jquery-3.6.0.js"></script>
<script defer src="assets/js/vendor/rangeslider.min.js"></script>
<script defer src="assets/js/global.js"></script>
<script defer src="assets/js/vendor/tipso.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/gh/formulajs/formulajs@2.5.0/dist/formula.min.js"></script>
<script defer src="assets/js/vendor/chart.js"></script>
<script defer src="assets/js/investment.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" language="javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js" language="javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" language="javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.10/jquery.mousewheel.min.js" language="javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.0.20/script/jquery.jscrollpane.min.js" language="javascript"></script>
<script defer src="assets/js/jpreloader.js" language="javascript"></script>
<script defer src="assets/js/owl.carousel.min.js" language="javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" language="javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js" language="javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js" language="javascript"></script>
<script defer src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" language="javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" language="javascript"></script>
<script defer src="assets/js/common.js" language="javascript"></script>
<script defer src="assets/js/common-dev.js" language="javascript"></script>
<script defer src="assets/js/insurance-guide.js" language="javascript"></script>
<script defer src="assets/js/social-share.js" language="javascript"></script>

<script defer src="assets/js/loader.js"></script><div class="greyBg"><div class="midWrapper"><h2 class="ulipCalculator-title">What is a ULIP Calculator?</h2><p class="ulipCalculator-desc">ULIP calculator is an online tool provided by insurance companies to estimate potential returns and policy premiums based on various investment scenarios. It helps individuals assess and compare different ULIP plans offered by insurers.</p><br><p class="ulipCalculator-desc">ULIPs come with different features and benefits, making it complicated for individuals to select the right plan. This is where a ULIP calculator comes in handy. Here are the steps to use a unit-linked insurance plan calculator.</p><div class="row mrow-0 mt20"><div class="col-lg-7 m-p-0"><div class="card"><div class="text_center"><div class="radio_tabs"><input id="regularInvestment" type="radio" value="regularInvestment" name="investmentTabs" checked="checked" class="radio_tab"><label for="regularInvestment">Regular Investment</label><input id="oneTimeInvestment" type="radio" value="oneTimeInvestment" name="investmentTabs" class="radio_tab"><label for="oneTimeInvestment">One-time Investment</label></div></div><div class="range-wrap"><div class="goal-wrap"><p class="goal-title">Investment Amount<span class="sublabel sublableMonthly">(Monthly)</span></p><div class="input-wrap"><span class="rupee">₹&nbsp;</span><input id="amtInvestInput" name="amtInvestInput" type="text" value="1,00,000" maxlength="11" class="form-control comma"></div></div><div class="slider-wrap"><input id="amtInvestRange" name="amtInvestRange" type="range" value="100000" min="1000" max="10000000" class="range-control" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-0"><div class="rangeslider__fill" style="width: 15.4554px;"></div><div class="rangeslider__handle" style="left: 5.45545px;"></div></div></div><div class="invest-amt"><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div></div><div class="value-wrap"><div class="min"><span class="rupee">₹&nbsp;</span><span class="amount">1 k</span></div><div class="max"><span class="rupee">₹&nbsp;</span><span class="amount">1 Cr</span></div></div></div><div class="range-wrap"><div class="goal-wrap"><p class="goal-title">Investment Tenure<span class="sublabel">(Years)</span></p><div class="input-wrap year-wrap"><input id="yearsInvestInput" name="yearsInvestInput" type="text" value="10" maxlength="2" class="form-control"><span>Years</span></div></div><div class="slider-wrap"><input id="yearsInvestRange" name="yearsInvestRange" type="range" value="10" min="1" max="30" class="range-control" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-1"><div class="rangeslider__fill" style="width: 181px;"></div><div class="rangeslider__handle" style="left: 171px;"></div></div></div><div class="invest-amt"><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div></div><div class="value-wrap"><div class="min"><span class="amount">1&nbsp;</span><span>Year</span></div><div class="max"><span class="amount">30&nbsp;</span><span>Years</span></div></div></div><div class="range-wrap"><div class="goal-wrap"><p class="goal-title">Interest Rate<span class="sublabel">(P.A.)</span></p><div class="input-wrap percent-wrap"><input id="interestrateInput" name="interestrateInput" type="text" value="9" maxlength="2" class="form-control"><span>%</span></div></div><div class="slider-wrap"><input id="interestrateRange" name="interestrateRange" type="range" value="9" min="1" max="15" class="range-control" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-2"><div class="rangeslider__fill" style="width: 324.857px;"></div><div class="rangeslider__handle" style="left: 314.857px;"></div></div></div><div class="invest-amt"><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div></div><div class="value-wrap"><div class="min"><span class="amount">1&nbsp;</span><span>%</span></div><div class="max"><span class="amount">15&nbsp;</span><span>%</span></div></div><p class="note sublabel">Sensex has given 10% return from 2010 - 2020</p></div><div id="periodic_investment" class="range-wrap"><div class="goal-wrap"><p class="goal-title">Existing Investment<span class="sublabel">(optional)</span></p><div class="input-wrap"><span class="rupee">₹&nbsp;</span><input id="periodicInput" name="periodicInput" type="text" value="0" maxlength="11" class="form-control comma"></div></div><div class="slider-wrap"><input id="periodicRange" name="periodicRange" type="range" value="0" min="0" max="10000000" class="range-control" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-3"><div class="rangeslider__fill" style="width: 10px;"></div><div class="rangeslider__handle" style="left: 0px;"></div></div></div><div class="invest-amt"><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div></div><div class="value-wrap"><div class="min"><span class="rupee">₹&nbsp;</span><span class="amount">0</span></div><div class="max"><span class="rupee">₹&nbsp;</span><span class="amount">1 Cr</span></div></div></div><div id="existing_investment" class="range-wrap"><div class="goal-wrap"><p class="goal-title">Periodic Investment<span class="sublabel">(optional)</span></p><div class="input-wrap"><span class="rupee">₹&nbsp;</span><input id="extistingInvestmentInput" name="extistingInvestmentInput" type="text" value="0" maxlength="11" class="form-control comma"></div></div><div class="slider-wrap"><input id="extistingInvestmentRange" name="extistingInvestmentRange" type="range" value="0" min="0" max="10000000" class="range-control" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-4"><div class="rangeslider__fill" style="width: 10px;"></div><div class="rangeslider__handle" style="left: 0px;"></div></div></div><div class="invest-amt"><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div></div><div class="value-wrap"><div class="min"><span class="rupee">₹&nbsp;</span><span class="amount">0</span></div><div class="max"><span class="rupee">₹&nbsp;</span><span class="amount">1 Cr</span></div></div></div><button id="calculate" name="calculate" class="btn_block btn_primary">Calculate</button></div></div><div class="col-lg-5 m-p-0"><div class="card card_middle new"><div class="card_body"><p class="card_title">You may get<br><span class="amt_return">₹&nbsp;<span id="yourReturn">1,93,51,428</span></span></p><div class="investment_result"><p class="mb-0">If you invest&nbsp;<span class="invested_val"><b>₹&nbsp;</b><span id="totalInvested">1,00,000</span></span>&nbsp;<br></p><p class="oneTimeResult"><span class="regular_span">for&nbsp;</span><span class="years_val">10</span>&nbsp;Years at&nbsp;<span id="percent_val">9</span>% p.a.</p></div><div id="legend" class="legend_text"><ul style="display: flex; flex-direction: row; margin: 0px; padding: 0px;"><li class="legends_li"><span class="legend_box" style="background: rgb(237, 28, 36);"></span><p class="legend_text" style="color: rgb(102, 102, 102);">Invested Amount</p></li><li class="legends_li"><span class="legend_box" style="background: rgb(0, 74, 143);"></span><p class="legend_text" style="color: rgb(102, 102, 102);">Your Returns</p></li></ul></div><canvas id="investment_chart" height="240" class="investment_chart" width="375" style="display: block; box-sizing: border-box; height: 240px; width: 375px;"></canvas><a rel="nofollow" target="_blank" href="https://www.kotaklife.com/buy-e-invest-ulip-plan-online/#/landing?utm_source=ulip_organic&amp;utm_medium=calculators&amp;utm_campaign=l2category_page&amp;utm_content=investnow" class="btn_primary" title="Investment Return">Invest Now</a></div></div></div></div><div class="readMoreTxt">Read more about -<a href="https://www.kotaklife.com/financial-tools-calculators/ulip-calculator" class="inline-links">ULIP Calculator</a></div></div></div>';
                              		
                                $userAll[]=$user;

                                $user1["user_details"]=$userAll;
						
                                $ret=$this->common->response(200,true,'content',$user1);
                            }
								
						
						
						
                
			
        
		
		echo json_encode($ret);
	}
    
    public function retirement_calculator(){
		$access_token = false;
		$row=$this->input->request_headers();   
		$data=array();$ret=array();
				$userAll=array();
					if ($this->input->server('REQUEST_METHOD') === 'GET')
					{
						
                      
								 $user['content']='
<div class="greyBg"><div class="midWrapper"><h2 class="calculateRetirement-title">Calculate Your Retirement Now</h2><p class="calculateRetirement-desc">To ensure a comfortable retirement, it is essential to plan ahead and assess your financial readiness. That's where a<a href="https://www.kotaklife.com/financial-tools-calculators/retirement-calculator" class="inline-links">retirement planning calculator</a>comes in handy. By following a few simple steps, you can calculate your retirement needs and determine how close you are to achieving your goals.</p><h2 class="section_heading newcolor">Retirement Calculator</h2><div class="row cal-margin"><div class="col-lg-7 m-no-padding"><div class="card retirement_card"><div class="range-wrap"><div class="goal-wrap"><p class="goal-title">Current Monthly Expenses</p><div class="input-wrap"><span class="rupee">₹&nbsp;</span><input id="monthlyExpensesInput" type="text" value="30,000" maxlength="11" class="form-control comma"></div></div><div class="slider-wrap"><input id="monthlyExpensesRange" type="range" value="30000" min="10000" max="1000000" class="range-control" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-0"><div class="rangeslider__fill" style="width: 21.1313px;"></div><div class="rangeslider__handle" style="left: 11.1313px;"></div></div></div><div class="invest-amt"><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div></div><div class="value-wrap"><div class="min"><span class="rupee">₹&nbsp;</span><span class="amount">10 k</span></div><div class="max"><span class="rupee">₹&nbsp;</span><span class="amount">10 Lac</span></div></div></div><div class="row mobile-grid"><div class="col-4"><div class="form_group curntAge"><label class="newcurrent" for="currentAge">Current Age</label><input id="currentAge" type="text" value="35" maxlength="2" class="form-control"></div></div><div class="col-4 pl-0"><div class="form_group curntAge"><label for="retirementAge">Desired Retirement Age</label><input id="retirementAge" type="text" value="60" maxlength="2" class="form-control"></div></div><div class="form_group col-4"><label for="lifeExpectancy">Life Expected&nbsp;<span class="sublabel">(Age )</span></label><input id="lifeExpectancy" type="text" value="80" maxlength="2" class="form-control"></div></div><div class="range-wrap"><div class="goal-wrap percent-inputs"><p class="goal-title">What<span class="hidden_xs">percentage&nbsp;</span><span class="hidden_lg">%&nbsp;</span>of your expected expenses can be your retirement expenses?</p><div class="input-wrap percent-wrap"><input id="retirementExpensesInput" type="text" value="75" maxlength="3" class="form-control comma"><span>%</span></div></div><div class="slider-wrap"><input id="retirementExpensesRange" type="range" value="75" min="10" max="100" class="range-control" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-1"><div class="rangeslider__fill" style="width: 407.944px;"></div><div class="rangeslider__handle" style="left: 397.944px;"></div></div></div><div class="invest-amt"><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div></div><div class="value-wrap"><div class="min"><span class="amount">10%</span></div><div class="max"><span class="amount">100%</span></div></div></div><div class="range-wrap"><div class="goal-wrap"><p class="goal-title">Expected Inflation Rate&nbsp;<span class="sublabel">(Optional)</span></p><div class="input-wrap percent-wrap"><input id="inflationRateInput" type="text" value="7" maxlength="5" class="form-control"><span>%</span></div></div><div class="slider-wrap"><input id="inflationRateRange" type="range" step="0.01" value="7" min="1" max="15" class="range-control" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-2"><div class="rangeslider__fill" style="width: 246.143px;"></div><div class="rangeslider__handle" style="left: 236.143px;"></div></div></div><div class="invest-amt"><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div></div><div class="value-wrap"><div class="min"><span class="amount">1%</span></div><div class="max"><span class="amount">15%</span></div></div></div><div class="range-wrap"><div class="goal-wrap"><p class="goal-title">Expected Return During Retirement&nbsp;<span class="sublabel">(Optional)</span></p><div class="input-wrap percent-wrap"><input id="expectadeReturnInput" type="text" value="8" maxlength="5" class="form-control"><span>%</span></div></div><div class="slider-wrap"><input id="expectadeReturnRange" type="range" step="0.01" value="8" min="1" max="15" class="range-control" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"><div class="rangeslider rangeslider--horizontal" id="js-rangeslider-3"><div class="rangeslider__fill" style="width: 285.5px;"></div><div class="rangeslider__handle" style="left: 275.5px;"></div></div></div><div class="invest-amt"><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div><div class="amt-slot">|</div></div><div class="value-wrap"><div class="min"><span class="amount">1%</span></div><div class="max"><span class="amount">15%</span></div></div></div><button id="calculate" class="btn_block btn_primary">Calculate</button></div></div><div class="col-lg-5 m-no-padding"><div class="card text_center p-0"><h2 class="card_title"><span class="text_secondary">Estimated Retirement Fund</span><span class="amt_return">₹&nbsp;<span id="requiredRetirementFundOutput" class="addCommaDefault">2,66,19,080</span></span></h2></div><div class="card text_center p-0"><div class="radio-toggle"><input id="monthlySavings" type="radio" name="required-savings" checked="" value="monthly"><label for="goal-monthly">Monthly</label><input id="yearlySavings" type="radio" name="required-savings" value="yearly"><label for="lumpsum-monthly">Yearly</label><span class="toggle-outside"><span class="toggle-inside"></span></span></div><p class="mb-0">Required<span id="monthYear" class="text_secondary">Monthly</span>&nbsp;Savings</p><p class="reqSavings">₹&nbsp;<span id="savingsPerMonthlyOutput" class="addCommaDefault">27,990</span><span id="savingsPerYearOutput" class="addCommaDefault">3,64,117</span></p><img data-src="assets/images/pic-retirement.png" src="assets/images/pic-retirement.png" alt="" width="125px" height="100%" class="retirement_pic lzy_img"><a href="https://www.kotaklife.com/buy-annuity-plan/#/landing?utm_source=Annuity_organic&amp;utm_medium=calculators&amp;utm_campaign=retirement&amp;utm_content=planretirement" target="_blank" class="btn_primary btn_block">Plan your retirement</a></div></div><div class="retirement_div"><p class="retirement_text">A retirement calculator is a tool that helps individuals estimate how much money they will need to save for their retirement. It takes into account various factors such as the individual's age, income, expenses, and investment returns. With this information, the calculator then projects how much money the individual will have at retirement and whether it will be enough to meet their retirement needs.</p></div></div><div class="calculateRetirement-cta"><a href="https://www.kotaklife.com/financial-tools-calculators/retirement-calculator">Calculate Premium Now</a></div></div></div>';
                              		
                                $userAll[]=$user;

                                $user1["user_details"]=$userAll;
						
                                $ret=$this->common->response(200,true,'content',$user1);
                            }
								
						
						
						
                
			
        
		
		echo json_encode($ret);
	}

}
