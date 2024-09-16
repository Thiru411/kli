<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class WhyKotakLife extends CI_Controller {
	private $data = array();
	function __construct(){
		parent::__construct();
	
		//Load Libraries
		$this->load->database();
		$this->load->helper('common'); //for checking menu active
		$this->load->model('WhyKotakLife_model');
		$this->load->model('requestlifeadvisor_model');
		
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Life Insurance', base_url());
		$this->data['CSS_FILES'] = unserialize(CSS_FILES);
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		
		//array_push($this->data['CSS_FILES'], 'assets/css/jquery-ui.css');
		
		//array_push($this->data['CSS_FILES'], 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css');
		//array_push($this->data['JS_FILES'], 'https://code.highcharts.com/highcharts.js');
		array_push($this->data['JS_FILES'], 'assets/js/need-help-buying-a-plan.js');
		array_push($this->data['JS_FILES'], 'assets/js/jquery.validate.js');
		//array_push($this->data['JS_FILES'], 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js');
		array_push($this->data['JS_FILES'], 'assets/js/moment.js');
		
		$this->data['cities'] = $this->requestlifeadvisor_model->get_cities();
		
		if(get_cookie('kotak_customer_type')){
			$cusType = get_cookie('kotak_customer_type');
		}else{
			$cusType = "new_customer";
		}
		
		if($cusType == "new_customer"){
			$gaCat = "New Customer";
		}else if($cusType == "existing_customer"){
			$gaCat = "Existing Customer";
		}else if($cusType == "life_advisor"){
			//array_push($this->data['JS_FILES'], 'assets/js/growth_chart.js');
			$gaCat = "Life Advisor";
		}
		$this->data['gaCat'] = $gaCat;
	}
	
	public function main_page(){
		$pgtitle = 'Why Kotak Life';
		$this->breadcrumb->add_crumb($pgtitle);
		$this->template->set('title', $pgtitle);
		$this->data['WhyKotakLife']['title'] = $pgtitle;
		
		$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
		$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
		$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
		$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
		$this->data['whyKotakHome'] = $this->WhyKotakLife_model->get_WhyKotakHome(WKL_HOME);
		
		$this->template->load('template/template', 'why_kotak_life/WhyKotakLife_view', $this->data);
	}
	
	/*Contact Us Start*/
	public function Contactnew(){
		//$this->load->helper('form');
        //$this->load->library('session');
        //$this->load->library('form_validation');
		array_push($this->data['JS_FILES'], 'assets/js/why-kotak-life.js');
		$urlSlug = $this->uri->segment(2);
		switch ($urlSlug){
			case "contact-us-new":
				$pageType = 'Contact Us';
				break;
			default:
				show_404();
		}
		
		//Convonix Seo Stuff
		$convonixSettingsArray = array(
            "@context" => ORG_CONTEXT,
            "@type" => ORG_AGENCY_TYPE,
            "address" => array("@type" => "PostalAddress",
                "addressLocality" => "Mumbai, India",
                "postalCode" => "400051",
                "streetAddress" => "C- 12, G- Block, BKC, Bandra (E)"),
            "email" => "clientservicedesk(at)kotak.com",
            "faxNumber" => "+91 22 67425650",
            "image" => ORG_IMG_URL,
            "priceRange" => "100 to 1000000",
            "alumni" => [
                array("@type" => "Person",
                    "name" => "Uday Kotak",
                    "disambiguatingDescription" => "Founder & Chairman of Kotak Mahindra Bank",
                    "sameAs" => "https://en.wikipedia.org/wiki/Uday_Kotak"),
                array("@type" => "Person",
                    "name" => "Shailesh Devchand",
                    "disambiguatingDescription" => "Vice Chairman of Kotak Mahindra Bank"
                )
            ],
            //"url" => ORG_WEBSITE_URL,
            "name" => ORG_NAME,
            "telephone" => "1800 209 8800"
        );
        $this->data['convonixSettings'] = json_encode($convonixSettingsArray, JSON_UNESCAPED_SLASHES);
		
		$this->data['generalFeedbackDD'] = $this->WhyKotakLife_model->get_contactUs_generalFeedbackDD();
		$this->data['bindStates'] = $this->WhyKotakLife_model->get_States(WKL_CONTACTUS_ADDRESS_FOR_MAP);
		
		$this->data['srGroups'] = $this->WhyKotakLife_model->get_SRgroups(SR_GROUP_CHANNEL_ID);
		
		$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
		$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
		
		$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
		$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
		
		
		$this->breadcrumb->add_crumb('Why Kotak Life', base_url('why-kotak-life'));
		$this->breadcrumb->add_crumb($pageType);
		$this->template->set('title', 'Contact us');
		$this->template->load('template/template', 'why_kotak_life/ContactUs_view', $this->data);
	}
	
	public function Contact(){		
		$this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
		array_push($this->data['JS_FILES'], 'assets/js/why-kotak-life.js');
		$urlSlug = $this->uri->segment(2);
		switch ($urlSlug){
			case "contact-us":
				$pageType = 'Contact Us';
				break;
			default:
				show_404();
		}
		
		//Convonix Seo Stuff
		$convonixSettingsArray = array(
            "@context" => ORG_CONTEXT,
            "@type" => ORG_AGENCY_TYPE,
            "address" => array("@type" => "PostalAddress",
                "addressLocality" => "Mumbai, India",
                "postalCode" => "400051",
                "streetAddress" => "C- 12, G- Block, BKC, Bandra (E)"),
            "email" => "clientservicedesk(at)kotak.com",
            "faxNumber" => "+91 22 67425650",
            "image" => ORG_IMG_URL,
            "priceRange" => "100 to 1000000",
            "alumni" => [
                array("@type" => "Person",
                    "name" => "Uday Kotak",
                    "disambiguatingDescription" => "Founder & Chairman of Kotak Mahindra Bank",
                    "sameAs" => "https://en.wikipedia.org/wiki/Uday_Kotak"),
                array("@type" => "Person",
                    "name" => "Shailesh Devchand",
                    "disambiguatingDescription" => "Vice Chairman of Kotak Mahindra Bank"
                )
            ],
            //"url" => ORG_WEBSITE_URL,
            "name" => ORG_NAME,
            "telephone" => "1800 209 8800"
        );
        $this->data['convonixSettings'] = json_encode($convonixSettingsArray, JSON_UNESCAPED_SLASHES);
		
		$this->data['generalFeedbackDD'] = $this->WhyKotakLife_model->get_contactUs_generalFeedbackDD();
		//$this->data['bindStates'] = $this->WhyKotakLife_model->get_States(WKL_CONTACTUS_ADDRESS_FOR_MAP);
		//array_push($this->data['JS_FILES'], 'assets/js/insurance-guide.js', 'assets/js/social-share.js');
	
	$this->load->model('site_model');

	$this->data['stateslist'] = $this->site_model->get_locationdetails_for_map();
	$this->data['bindStates'] = $this->site_model->get_States();

		$this->data['srGroups'] = $this->WhyKotakLife_model->get_SRgroups(SR_GROUP_CHANNEL_ID);
		
		$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
		$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
		
		$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
		$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);		
		$this->breadcrumb->add_crumb('Why Kotak Life', base_url('why-kotak-life'));
		$this->breadcrumb->add_crumb($pageType);
		$this->template->set('title', 'Contact us');	       	
		$this->template->load('template/template', 'why_kotak_life/ContactUs_view_new', $this->data);
	}
	
	
	
	public function bindSrtypes() {
        $opt = "";
        $srgroupId = $this->input->post('srgroup');
        if (!empty($srgroupId)) {
            $bindSrtypes = $this->WhyKotakLife_model->get_SRTypes(SR_TYPE_CHANNEL_ID, $srgroupId);
            if (!empty($bindSrtypes)) {
                $opt .= "<option>Select Options</option>";
                foreach ($bindSrtypes as $value) {
                    $opt .= "<option value='$value->srtype_id'>$value->srtype_title</option>";
                }
            }
        }
        echo json_encode($opt);
    }
	
	public function bindCities(){
		$opt = "";
		$state = $this->input->post('stateData');
		$bindCities = $this->WhyKotakLife_model->get_Cities(WKL_CONTACTUS_ADDRESS_FOR_MAP,$state);
		foreach($bindCities as $value){$array1[] = $value->cities;}
		$opt .= "<option>City</option>";
		foreach($array1 as $cities){$opt .= "<option value='$cities'>$cities</option>";}
		echo json_encode($opt);
	}
	
	public function user_image_upload() {
        $errors = array();
        $tmp = explode('.', $_FILES['customerDocument']['name']);
		$doubleExtensions = array("php", "php3", "php4", "phtm", "pl", "py", "jsp", "asp", "htm", "shtml", "sh", "cgi");
        $file_size = $_FILES['customerDocument']['size'];
        $file_ext = strtolower(end($tmp));
        $expensions = array("jpeg", "jpg", "png", "pdf", "doc", "docx");
		$mimetypes = array("image/jpeg", "image/jpg", "image/png", "application/pdf", "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
		
		if (isset($_FILES['customerDocument']['tmp_name'])) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo, $_FILES['customerDocument']['tmp_name']);
            if (in_array($mime, $mimetypes) === false) {
                $this->form_validation->set_message('user_image_upload', "Please upload valid file");
                $errors[] = "Please upload valid file";
                return false;
            }
            finfo_close($finfo);
        }
		
		if (count($tmp) !== 2) {
            if (in_array($tmp[1], $doubleExtensions) === true) {
                //Attempted attack detected
                $this->form_validation->set_message('user_image_upload', "Please upload valid file");
                $errors[] = "Please upload valid file";
                return false;
            }
        } else {
            //All is good upload file
        }
		
        if (in_array($file_ext, $expensions) === false) {
            $this->form_validation->set_message('user_image_upload', "File extension not allowed, please choose a 'png', 'jpg', 'jpeg', 'pdf','doc','docx' file. ");
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            return false;
        }
        if ($file_size > 2097152) {//2MB
            $this->form_validation->set_message('user_image_upload', "The file you are trying to upload is too large (max 2MB)");
            $errors[] = 'File size must be excately 2 MB';
             return false;
        }
        if (empty($errors) == true) {
            return true;
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
	
	public function contactUpdate() {
        $data = array();
        $this->load->library('session');
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
		 $fileUploadError = FALSE;
		$file_name = "";
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('security'); // to xss_clean
        $this->load->model('WhyKotakLife_model');
        $this->form_validation->set_rules('customer_policyno', 'Policy Number', 'trim|required|numeric|xss_clean|max_length[8]');
        $this->form_validation->set_rules('customer_dob', 'Date of Birth', 'trim|required|xss_clean|max_length[15]');
        $this->form_validation->set_rules('customer_contactno', 'Mobile Number', 'trim|required|xss_clean|numeric|exact_length[10]');
        $this->form_validation->set_rules('customer_emailid', 'Email ID', 'trim|required|xss_clean|valid_email|max_length[256]');
        $this->form_validation->set_rules('srgroups', 'Please Select Options', 'trim|required|xss_clean');
        $this->form_validation->set_rules('srtypes', 'Please Select Options', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ndncReg', 'Terms and Conditions', 'trim|required|xss_clean');
        $this->form_validation->set_rules('feedback', 'Feedback', 'trim|required|xss_clean|max_length[2000]');
	//	 $this->form_validation->set_rules('g-recaptcha-response', 'Captcha Check', 'required|xss_clean|callback__check_recaptcha');
        if (!empty($_FILES['customerDocument']['name'])) {
            $file_name1 = $_FILES['customerDocument']['name'];
			$file_name=time().$file_name1;
            $file_size = $_FILES['customerDocument']['size'];
            $file_tmp = $_FILES['customerDocument']['tmp_name'];
            $file_type = $_FILES['customerDocument']['type'];
            $tmp = explode('.', $_FILES['customerDocument']['name']);
            $file_ext = strtolower(end($tmp));
            $this->form_validation->set_rules('customerDocument', 'Document', 'callback_user_image_upload');
        }
		$contact_session_data = array(
				'customer_policyno' => secure_input_data($this->input->post('customer_policyno')),
				'customer_dob' => secure_input_data($this->input->post('customer_dob')),
				'customer_contactno' => secure_input_data($this->input->post('customer_contactno')),
				'customer_emailid' => secure_input_data($this->input->post('customer_emailid')),
				'customer_feedback' => secure_input_data($this->input->post('feedback')),
		);
       
        if ($this->form_validation->run() == FALSE) {           
			$this->session->set_userdata('srsession_data', $contact_session_data);
			$this->session->set_flashdata('error', "Please fill all mandatory fields");
            $this->Contact();
        } else {
            $currentTime = time();
            //file upload 
            if (!empty($_FILES['customerDocument']['name'])) {
                if(move_uploaded_file($file_tmp, "assets/images/uploads/contactus/" . $file_name)){					
					if ($this->config->item('cust_doc_upload_path_enable')) {
					$sourcePath='assets/images/uploads/contactus/'. $file_name;
					   if(copy($sourcePath,'//MUM-BO-S070/SubmitedDocument/'.$file_name)){
						 ;
					   }else{
						 $fileUploadError = TRUE;
					   }					   
                    }
				}else{
					 $fileUploadError = TRUE;
				}
				
				if ($fileUploadError) {
                    ;
                }else{
					$files_data = array("title" => $file_name,
                    "upload_location_id" => CONTACTUS_UPLOAD_DIRECTORY_ID,
                    "mime_type" => $file_type,
                    "file_name" => $file_name,
                    "file_size" => $file_size,
                    "uploaded_by_member_id" => MEMBER_ID,
                    "upload_date" => time(),
                    "modified_by_member_id" => MEMBER_ID,
                    "modified_date" => time());
					
                   $filed_id = $this->WhyKotakLife_model->save_file($files_data);
				}
            }
			
			if ($fileUploadError) {
                $this->session->set_userdata('srsession_data', $contact_session_data);
                $this->session->set_flashdata('error', "Your file is not uploaded, please upload the correct file.");
                redirect(base_url(WKL_MODULE_LINK . '/contact-us'), 'refresh');
            } else {
				$filepath = "";
				if (!empty($file_name)) {
					$filepath = '{filedir_23}' . $file_name;
				} else {
					$filepath = "";
				}
				$inputPolicyno = secure_input_data($this->input->post('customer_policyno'));
				$inputPolicyNewNo = str_pad($inputPolicyno, 8, "0", STR_PAD_LEFT);
							
				$postData = array(
					'site_id' => SITE_ID,
					'channel_id' => CONTACT_US_CHANNEL_ID,
					'field_id_318' => $inputPolicyNewNo,
					'field_id_319' => secure_input_data($this->input->post('customer_dob')),
					'field_id_133' => secure_input_data($this->input->post('customer_contactno')),
					'field_id_132' => secure_input_data($this->input->post('customer_emailid')),
					'field_id_323' => secure_input_data($this->input->post('srgroups')),
					'field_id_324' => secure_input_data($this->input->post('srtypes')),
					'field_id_134' => secure_input_data($this->input->post('feedback')),
					'field_id_325' => $filepath,
					'field_id_326' => "",
				);
				$postDataChannelTitle = array(
					'site_id' => SITE_ID,
					'channel_id' => CONTACT_US_CHANNEL_ID,
					'author_id' => AUTHOR_ID,
					'ip_address' => secure_input_data($this->input->ip_address()),
					'title' => secure_input_data($inputPolicyNewNo),
					'url_title' => str_replace(' ', '-', strtolower($inputPolicyNewNo)),
					'status' => 'open',
					'versioning_enabled' => 'n',
					'allow_comments' => 'n',
					'sticky' => 'n',
					'entry_date' => $currentTime,
					'year' => date('Y', $currentTime),
					'month' => date('m', $currentTime),
					'day' => date('d', $currentTime),
					'expiration_date' => 0,
					'comment_expiration_date' => 0,
					'edit_date' => $currentTime,
				);
				$insertId = $this->WhyKotakLife_model->insert_request_contactUsNew($postData, $postDataChannelTitle);
				
				if (isset($insertId) && $insertId > 0 && $insertId) {
					$clientIdResponse = $this->searchCustomer($postData);
					if (!empty($clientIdResponse['crnid'])) {
						$serviceResponse = $this->corpWebservice($postData, $clientIdResponse['crnid'],$file_name);
						if (!empty($serviceResponse['SRNumber'])) {
							//update the database with SR Number
							$updateData = array(
								'field_id_326' => $serviceResponse['SRNumber'],
							);
							$updateWhere = array(
								'entry_id' => $insertId,
							);
							$updatedId = $this->WhyKotakLife_model->update_table_data("kotak_channel_data", $updateData, $updateWhere);
							 $this->session->set_flashdata('success', "Thank you for writing to us. The response to your query would be sent on your registered email ID shortly.");
							//send mail notification to the customer                    
						} else {
							//send api error mail notification to kotak team
							// $serviceResponse['error_message'] 
							$this->session->set_userdata('srsession_data', $contact_session_data);						
							$this->session->set_flashdata('error', $serviceResponse['error_message']);
						}
					} else {
						//send api error mail notification to kotak team 
						//$clientIdResponse['error_message'] 
							$this->session->set_userdata('srsession_data', $contact_session_data);					
						   $this->session->set_flashdata('error', $clientIdResponse['error_message']);					
					}
				   
				} else {
					$this->session->set_userdata('srsession_data', $contact_session_data);
					$this->session->set_flashdata('error', "Something went wrong. Please try again later!");
				}
				redirect(base_url(WKL_MODULE_LINK . '/contact-us'), 'refresh');
			}
		}
	}
	
	
	
	 public function searchCustomer($data) {
        $searchcustomerApiResponse = array();
        if (!empty($data['field_id_319'])) {
            $customerDob = explode("-", $data['field_id_319']);
            $formatedCustDob = $customerDob[2] . '-' . $customerDob[1] . '-' . $customerDob[0];
        }
        $params = array(
            "Request" => array(
                "RequestInfo" => array(
                    "CreationDate" => date('m-d-Y'),
                    "CreationTime" => date("H:i:s"),
                    "Device_uuid" => "",
                    "LastSyncDate" => "",
                    "RequestorToken" => "",
                    "SourceInfoName" => "web",
                    "TransactionId" => time(),
                    "UserEmail" => "",
                    "UserName" => "Website Queries",
                    "lastSyncDate" => "",
                    "device_uuid" => "",
                    "userEmail" => !empty($data['field_id_132']) ? $data['field_id_132'] : '',
                ),
                "RequestPayload" => array(
                    "Transactions" => [array(
                    "Id" => "",
                    "Key1" => "",
                    "Key10" => "",
                    "Key11" => "",
                    "Key12" => "",
                    "Key13" => "",
                    "Key14" => "",
                    "Key15" => "",
                    "Key16" => "",
                    "Key17" => "",
                    "Key18" => "",
                    "Key19" => "",
                    "Key2" => "",
                    "Key20" => "",
                    "Key21" => "",
                    "Key22" => "",
                    "Key23" => "",
                    "Key24" => "",
                    "Key25" => "",
                    "Key3" => "",
                    "Key4" => "",
                    "Key5" => "",
                    "Key6" => "",
                    "Key7" => "",
                    "Key8" => "",
                    "Key9" => "",
                    "TransTrackingID" => "",
                    "TransactionData" => array(
                        "SearchDetails" => array(
                            "ClientId" => "",
                            "FirstName" => "",
                            "LastName" => "",
                            "PANNo" => "",
                            "Pincode" => "",
                            "PolicyNo" => !empty($data['field_id_318']) ? $data['field_id_318'] : '',
                            "DOB" => !empty($formatedCustDob) ? $formatedCustDob : '',
                            "Mobile" => !empty($data['field_id_133']) ? $data['field_id_133'] : '',
                            "Email" => !empty($data['field_id_132']) ? $data['field_id_132'] : '',
                            "Gender" => "",
                            "Aadhar" => ""
                        )
                    ),
                    "Type" => "SearchCustomer"
                        )]
                )
            ),
            "User_id" => ""
        );

        $data_string = json_encode($params);		
        $customerSearchApiUrl = $this->config->item("customer_search_api");
        $response = get_api_data($customerSearchApiUrl, $data_string, "POST");
		//print_r($response);die;
        if (!empty($response)) {
            $ResponseData = json_decode($response, true);
            if (($ResponseData['Response']['StatusInfo']['StatusCode'] == "200") && (!empty($ResponseData['Response']['ResponsePayload']['Transactions'][0]['TransactionData']['SearchDetails'][0]['ClientId']))) {
                $clientId = $ResponseData['Response']['ResponsePayload']['Transactions'][0]['TransactionData']['SearchDetails'][0]['ClientId'];
                if (!empty($clientId)) {
                    $searchcustomerApiResponse['crnid'] = $clientId;
                    $searchcustomerApiResponse['status'] = TRUE;
                }
            } else {
                //send error notification to kotak team
                $searchcustomerApiResponse['error_message'] = "Invalid Policy Number or Date of Birth";
                $searchcustomerApiResponse['status'] = FALSE;
            }
        } else {
            //send error notification to kotak team
            $searchcustomerApiResponse['error_message'] = "Invalid Policy Number or Date of Birth";
            $searchcustomerApiResponse['status'] = FALSE;
        }
        return $searchcustomerApiResponse;
    }
	public function corpWebservice($data, $customerClientId,$file_name) {
        $corpApiResponse = array();
        // $clientId = "52980913";
        //$policyNo = "01844791";
        $policyNo = !empty($data['field_id_318']) ? $data['field_id_318'] : '';		
        $clientId = $customerClientId;
        $srGroupName = $this->WhyKotakLife_model->get_SRCategoryName(SR_GROUP_CHANNEL_ID, $data['field_id_323']);
        if (!empty($srGroupName[0]->srgroupname)) {
            $KMBCCGroup = $srGroupName[0]->srgroupname;
        }
        $srTypeName = $this->WhyKotakLife_model->get_SRCategoryName(SR_TYPE_CHANNEL_ID, $data['field_id_324']);
        if (!empty($srTypeName[0]->srtypename)) {
            $area = $srTypeName[0]->srtypename;
        }
        if (!empty($KMBCCGroup) && !empty($area)) {
            $feedback = $data['field_id_134'];
            $kotakSRRemark = "ComplaintsCategory: $KMBCCGroup ComplaintsSubCategory: $area COMPLAINT: $feedback POLICY: $policyNo";
            $documentUpload = !empty($data['field_id_325']) ? 'Y' : 'N';
            $documentsUploadedStatus = !empty($data['field_id_325']) ? 'Yes' : 'No';
            $ServiceRequestData = "<?xml version='1.0' encoding='utf-8'?><servicerequest><servicerequestdetails><servicerequesttype>Complaints</servicerequesttype></servicerequestdetails><servicerequestdescription><complaintscategory>$KMBCCGroup</complaintscategory><complaintsubcategory>$area</complaintsubcategory><complaints>$feedback</complaints><policy>$policyNo</policy><isdocuploaded>$documentUpload</isdocuploaded></servicerequestdescription></servicerequest>";
            $callDescription = "ComplaintsCategory:$KMBCCGroup\rComplaintSubCategory:$area\rCOMPLAINT:$feedback\rPOLICY:$policyNo\rIS_DOCUMENT_UPLOADED:$documentUpload";
            $documentUploadPath="";
			if(!empty($data['field_id_325']) && !empty($file_name)){
				$documentUploadPath=$this->config->item('cust_doc_upload_path').$file_name;				
			}
			$params = array(
                "Request" => array(
                    "KMBEnterCRN" => $clientId,
                    "Product" => "Policy",
                    "SRType" => "Request",
                    "KMBCCGroup" => $KMBCCGroup,
                    "Area" => $area,
                    "Priority" => "Low",
                    "OwnerGroup" => "KLI",
                    "KMBSummary" => "Kotak",
                    "Source" => "Portal",
                    "KotakInteractionChannel" => "Website",
                    "KotakSRRemark" => $kotakSRRemark,
                    "KotakStandaloneCheck" => "Service Request",
                    "KMBEnterCRNType" => "I",
                    "Organization" => "KLI",
                    "IntegrationId" => time(),
                    "ContactFinancialAccounts" => $policyNo,
                    "KTKNIRelatedContactFinancialAccounts" => "",
                    "IOPMServiceReqID" => "",
                    "ClientNumber" => $clientId.',Website',
                    "ServiceRequestType" => "Complaints",
                    "PolicyNo" => $policyNo,
                    "Status" => "Open",
                    "CallDescription" => $callDescription,
                    "IsPaymentRequired" => "N",
                    "DocumentsUploadedStatus" => $documentsUploadedStatus,
                    "ServiceRequestDetails" => array(
                        "ServiceRequestData" => $ServiceRequestData
                    ),
                    "ServiceRequestDocumentsList" => [
                        array(
                            "DocumentName" => (!empty($file_name) ? $file_name: ''),
                            "DocumentUploadPath" =>$documentUploadPath
                        )
                    ],
                    "StrMethodName" => "InsertServiceRequest"
                )
            );

            $data_string = json_encode($params);
            //print_r($data_string);die;			
            $corpWebserviceApiUrl = $this->config->item("corpwebservice_api");
            $response = get_api_data($corpWebserviceApiUrl, $data_string, "POST");			
            if (!empty($response)) {
                $responseData = json_decode($response, true);
                if (($responseData['StatusCode'] == "Success") && (!empty($responseData['SRNumber']))) {
                    $corpApiResponse['SRNumber'] = $responseData['SRNumber'];
                    $corpApiResponse['status'] = TRUE;
                } else {
                    $corpApiResponse['error_message'] = "Error in submitting request. Kindly try again.";
                    $corpApiResponse['status'] = FALSE;
                }
            } else {
                $corpApiResponse['error_message'] = "Error in submitting request. Kindly try again.";
                $corpApiResponse['status'] = FALSE;
            }
        } else {
            $corpApiResponse['error_message'] = "Error in submitting request. Kindly try again.";
            $corpApiResponse['status'] = FALSE;
        }
        return $corpApiResponse;
    }
	
	
	
	
	public function getMapResult(){
		$city = $this->input->post('cityData');
		$result = $this->WhyKotakLife_model->get_MapResult(WKL_CONTACTUS_ADDRESS_FOR_MAP,$city);
		$arr = array();
		foreach($result as $cities){
			$address = "{$cities->add1} {$cities->add2} {$cities->city}, {$cities->state}, {$cities->pincode}";
			$lat = "{$cities->latitude}";
			$lng = "{$cities->longitude}";
			$branchArea = "{$cities->branchArea}";
			$stdCode = "{$cities->stdCode}";
			$branchPhone = "{$cities->branchPhone}";
			
			array_push($arr, array('address' => $address,'lat' => $lat,'lng' => $lng,'branchArea' => $branchArea,'stdCode' => $stdCode,'branchPhone' => $branchPhone));
		}
		echo json_encode($arr);
	}
	
	public function getMapResultByPincode(){
		$pincode = $this->input->post('pincode');
		$result = $this->WhyKotakLife_model->get_MapResultByPincode(WKL_CONTACTUS_ADDRESS_FOR_MAP,$pincode);
		$arr = array();
		foreach($result as $cities){
			$address = "{$cities->add1} {$cities->add2} {$cities->city}, {$cities->state}, {$cities->pincode}";
			$lat = "{$cities->latitude}";
			$lng = "{$cities->longitude}";
			//array_push($arr, array('address' => $address,'lat' => $lat,'lng' => $lng));
			$branchArea = "{$cities->branchArea}";
			$stdCode = "{$cities->stdCode}";
			$branchPhone = "{$cities->branchPhone}";
			
			array_push($arr, array('address' => $address,'lat' => $lat,'lng' => $lng,'branchArea' => $branchArea,'stdCode' => $stdCode,'branchPhone' => $branchPhone));
		}
		echo json_encode($arr);
	}
	/*Contact Us End*/
	
	/*About Us Start*/
	public function About(){
		//array_push($this->data['JS_FILES'], 'assets/js/growth_chart.js');
		if($this->data['gaCat'] == "Life Advisor"){
			array_push($this->data['JS_FILES'], 'https://code.highcharts.com/highcharts.js');
			array_push($this->data['JS_FILES'], 'assets/js/growth_chart.js');
		}
		$urlSlug = $this->uri->segment(2);
		switch ($urlSlug){
			case "about-us":
				$pageType = 'About Us';
				break;
			default:
				show_404();
		}
		
		/*echo $this->data['gaCat'];
		if(!isset($_COOKIE['kotak_customer_type'])){
			echo $customerType="";
		}else{
			echo $customerType = get_cookie('kotak_customer_type');
		}*/
		$this->data['aboutUsVisionMission'] = $this->WhyKotakLife_model->get_AboutUs_VisionMission(WKL_ABOUTUS_OUR_VISION_MISSION);
		$this->data['aboutUsOurValues'] = $this->WhyKotakLife_model->get_AboutUs_OurValues(WKL_ABOUTUS_OUR_VALUES);
		$this->data['aboutUsBoardOfDirectors'] = $this->WhyKotakLife_model->get_AboutUs_BoardOfDirectors(WKL_ABOUTUS_BOARD_OF_DIRECTORS);
		$this->data['aboutUsKeyPeople'] = $this->WhyKotakLife_model->get_AboutUs_KeyPeople(WKL_ABOUTUS_OUR_KEY_PEOPLE);
		$this->data['growthChart'] = $this->WhyKotakLife_model->get_growth_chart();
		
		$this->template->set('title', 'About Us');
		$this->breadcrumb->add_crumb('Why Kotak Life', base_url('why-kotak-life'));
		$this->breadcrumb->add_crumb($pageType);
		$this->template->set('title', 'About us');
		$this->template->load('template/template', 'why_kotak_life/AboutUs_view', $this->data);
	}
	/*About Us End*/	
		
		/*CSR*/
		public function csr()
{
	
	$this->template->set('title', 'CSR');
		$this->breadcrumb->add_crumb('Why Kotak Life', base_url('why-kotak-life'));
		$this->breadcrumb->add_crumb($pageType);
		$this->template->set('title', 'CSR');
		
	$this->template->load('template/template', 'why_kotak_life/csr', $this->data);
}

public function csrpdf()
{
	$this->load->model('site_model');
		
	array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');
	
	$this->template->set('title', 'Home');
	$this->load->helper('form');
	
	$this->data['needDD'] = $this->site_model->bind_needDD();
	$this->data['ageGroupDD'] = $this->site_model->bind_ageGroupDD();
	
	if(!isset($_COOKIE['kotak_customer_type'])){
		$customerType="";
	}else{
		$customerType = get_cookie('kotak_customer_type');
	}
	$this->template->load('template/template', 'why_kotak_life/csrpdf', $this->data);
}
/*CSR*/

	/*Career*/
	public function career(){
		$this->data['testimonial'] = $this->WhyKotakLife_model->get_testimonial(WKL_CAREER_TESTIMONIALS);
		$this->data['ourCulture'] = $this->WhyKotakLife_model->get_our_culture(WKL_CAREER_OUR_CULTURE);
		
		$this->data['gallery'] = $this->WhyKotakLife_model->get_great_place_to_work_gallery(WKL_CAREER_GALLERY);
		$this->data['content'] = $this->WhyKotakLife_model->get_great_place_to_work_content(WKL_CAREER_GREAT_PLACE_CONTENT);
		$this->data['bestEmployee'] = $this->WhyKotakLife_model->get_best_employee(WKL_CAREER_BEST_EMPLOYEE);
		$this->data['greatPlaceToWorkTitle'] = $this->WhyKotakLife_model->get_great_place_to_work_title(WKL_CAREER_GREAT_PLACE_TO_WORK);
		
		$this->template->set('title', 'Career');
		$this->breadcrumb->add_crumb('Why Kotak Life', base_url('why-kotak-life'));
		$this->breadcrumb->add_crumb('Career');
		$this->template->load('template/template', 'why_kotak_life/Career_view', $this->data);
	}
	/*Career*/
	
	/*Corporate Governance*/
	public function why_kotak(){
		array_push($this->data['JS_FILES'], 'assets/js/corporate-governance.js');
		
		$urlSlug = $this->uri->segment(2);
		switch ($urlSlug){
			case "corporate-governance":
				$pageType = 'Corporate Governance';
				break;
			default:
				show_404();
		}
		
		$this->data['publicDisFinancialYear'] = $this->WhyKotakLife_model->get_financial_year();
		$this->data['publicDisFinancialYearAnnualReport'] = $this->WhyKotakLife_model->get_financial_year_annual_report();
		
		$this->data['publicDisFinancialYearAnnualReturn'] = $this->WhyKotakLife_model->get_financial_year_annual_return();
		
		$this->data['publicDisData'] = $this->WhyKotakLife_model->get_public_dis(WKL_CORPORATE_GOVERNANCE_PUBLIC_DISCLOUSURE);
		$this->data['publicDisPoliciesCodes'] = $this->WhyKotakLife_model->get_public_dis_policies_codes(WKL_CORPORATE_GOVERNANCE_POLICIES_CODES);
		$this->data['newsEvents'] = $this->WhyKotakLife_model->get_public_dis_news_events(WKL_CORPORATE_GOVERNANCE_NEWS_EVENTS);
		$this->data['annualReports'] = $this->WhyKotakLife_model->get_public_dis_annual_reports(WKL_CORPORATE_GOVERNANCE_ANNUAL_REPORT);
		
		$this->data['annualReturns'] = $this->WhyKotakLife_model->get_public_dis_annual_returns(WKL_CORPORATE_GOVERNANCE_ANNUAL_RETURN);
		
		$this->template->set('title', 'Corporate Governance');
		$this->breadcrumb->add_crumb('Why Kotak Life', base_url('why-kotak-life'));
		$this->breadcrumb->add_crumb($pageType);
		$this->template->load('template/template', 'why_kotak_life/CorporateGovernance_view', $this->data);
	}
	/*Corporate Governance*/
	
	/*Media Center*/
	public function MediaCenter_ind(){
		array_push($this->data['JS_FILES'], 'assets/js/media-center.js');
		$urlSlug = $this->uri->segment(2);
		switch ($urlSlug){
			case "media-center":
				$pageType = 'Media Center';
				break;
			default:
				show_404();
		}
		
		$current_year = date("Y");
		//$this->data['kliInNews'] = $this->WhyKotakLife_model->get_kli_in_news(WKL_MEDIA_CENTER_KLI_IN_NEWS,$current_year,1);
		$this->data['kliInNews'] = $this->WhyKotakLife_model->get_kli_in_newsArchives(WKL_MEDIA_CENTER_KLI_IN_NEWS_ARCHIVES,"","",4);
		$kliInNewsArchive = $this->WhyKotakLife_model->get_kli_in_newsArchives(WKL_MEDIA_CENTER_KLI_IN_NEWS_ARCHIVES);
		
		$arr = array();
		
		foreach($kliInNewsArchive as $dt){
			$rearr=array();
			$rearr['dateNew'] = strtotime($dt->kli_date);
			$rearr['kli_date'] = $dt->kli_date;
			$rearr['kli_title'] = $dt->kli_title;
			$rearr['kli_pdf_url'] = $dt->kli_pdf_url;
			$rearr['month'] = $dt->month;
			$rearr['year'] = $dt->year;
			$rearr['publication'] = $dt->publication;
			$rearr['dateNewF'] = $dt->dateNew;
			$rearr['urlLink'] = $dt->urlLink;
			$rearr['entry_id'] = $dt->entry_id;
			
			array_push($arr,(object)$rearr);
		}
		
		$this->data['kliInNewsArchive'] = $arr;
		
		$this->data['mediaKit'] = $this->WhyKotakLife_model->get_MediaKit(WKL_MEDIA_CENTER_MEDIA_KIT);
		$this->data['ourCampaignsDD'] = $this->WhyKotakLife_model->get_ourCampaignsDD();
		$this->data['ourCampaigns'] = $this->WhyKotakLife_model->get_ourCampaigns(WKL_MEDIA_CENTER_OUR_CAMPAIGNS);
		$this->data['pressReleasesDD'] = $this->WhyKotakLife_model->get_pressReleasesDD();
		$this->data['pressReleases'] = $this->WhyKotakLife_model->get_pressReleases(WKL_MEDIA_CENTER_PRESS_RELEASES);
		$this->data['kliNewsMonths'] = $this->WhyKotakLife_model->get_kliNewsMonths();
		
		$this->data['kliNewsYear'] = $this->WhyKotakLife_model->get_kliNewsYear();
		$this->data['kliNewsPublications'] = $this->WhyKotakLife_model->get_kliNewsPublication();
		
		$this->template->set('title', 'Media Center');
		$this->breadcrumb->add_crumb('Why Kotak Life', base_url('why-kotak-life'));
		$this->breadcrumb->add_crumb($pageType);
		$this->template->set('title', 'Media Center');
		$this->template->load('template/template', 'why_kotak_life/MediaCenter_view', $this->data);
	}
	
	public function MediaCenterDetails_ind($entry_id,$flag){
		array_push($this->data['JS_FILES'], 'assets/js/media-center.js');
		$urlSlug = $this->uri->segment(2);
		switch ($urlSlug){
			case "media-center-details":
				$pageType = 'Media Center Details';
				break;
			default:
				show_404();
		}
		$current_year = date("Y");
		if($flag==1){
			$this->data['kliNewsDetails'] = $this->WhyKotakLife_model->get_mediaCenterNewsDetails($entry_id);
			$this->data['kliInNews'] = $this->WhyKotakLife_model->get_kli_in_news(WKL_MEDIA_CENTER_KLI_IN_NEWS,$current_year,1,$entry_id);
		}else if($flag==2){
			$this->data['kliNewsDetails'] = $this->WhyKotakLife_model->get_mediaCenterNewsDetailsArchives($entry_id);
			$this->data['kliInNews'] = $this->WhyKotakLife_model->get_kli_in_newsArchives(WKL_MEDIA_CENTER_KLI_IN_NEWS_ARCHIVES,$entry_id);
		}else{
			show_404();
		}
		
		$this->template->set('title', 'Media Center Details');
		$this->breadcrumb->add_crumb('Why Kotak Life', base_url('why-kotak-life'));
		$this->breadcrumb->add_crumb('Media Center', base_url('why-kotak-life/media-center'));
		if($this->data['kliNewsDetails']){
			foreach($this->data['kliNewsDetails'] as $dt){$pageType = $dt->kliNewsHeadline;}
		}else{
			show_404();
		}
		$this->breadcrumb->add_crumb($pageType);
		
		$this->template->set('title', $pageType);
		$this->template->load('template/template', 'why_kotak_life/MediaCenterDetails_view', $this->data);
	}
	/*Media Center*/
}