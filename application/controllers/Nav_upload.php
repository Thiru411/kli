<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nav_upload extends CI_Controller {
	
	public $DB2;
	
	function __construct(){
		parent::__construct();

		//Load Libraries
		$this->load->database();
        $this->DB2= $this->load->database("second_db", TRUE);

		$this->load->model('nav_upload_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
	}
	
	
	public function index(){
        if ($this->session->userdata('logged_in')) {
            redirect('nav-upload/navupload'); // Redirect to dashboard if logged in
        } else {
            $this->load->view('nav-upload/index');
        }
        
	}
    public function navupload() {
      
            // Validation passed, attempt to authenticate
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            

            if ($username=='navupdate' && $password=='Kotakuat@2024') {
                // Authentication successful, set session data and redirect to dashboard
                $this->session->set_userdata('logged_in', TRUE);
                $this->session->set_userdata('member_id', 8);
                $this->session->set_userdata('username', 'navupdate');
                $this->load->view('nav-upload/navfileupload');
            } else {
                // Authentication failed, reload the login form with an error message
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect('nav-upload'); // Redirect to dashboard if logged in
            }
    }
    
    
   
  
    public function addcsv(){
        $success 		= 	FALSE;
		$getdata 		= 	array();
		$message 		= 	"Some Technical Error has Occurred. Please Try Again!";
		$data 			= 	json_decode(file_get_contents("php://input"));
     $appendmissing=' ';
        $member_id=8;
        $totatuploadedentries=0;

                if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
                    $upload_dir = 'assets/images/uploads/fund-performance/reports/';
        
                    if (!file_exists($upload_dir)) {
                        mkdir($upload_dir, 0777, true);
                    }
        
                    $tmp_file = $_FILES['file']['tmp_name'];
        
                    $original_name = $_FILES['file']['name'];
                   
        // Extract the date part from the filename
$datePart = explode('_',$original_name);
$datePart=explode('.',$datePart[2]);
// Extract day, month, and year from the date part
  $day1 = substr($datePart[0], 0, 2);
  $month1 = substr($datePart[0], 2, 2);
  $year1 = substr($datePart[0], 4, 4);

// Create a DateTime object

// Format the date
  $formattedDate = date('d-M-y',strtotime($day1.'-'.$month1.'-'.$year1));
                   
        
                    if (move_uploaded_file($tmp_file, $upload_dir . $original_name)) {
                        
                        $message= "File uploaded successfully: $original_name";
        $selectedDate=$this->input->post('selectedDate');
                        // Insert file information into the database
                        $fileuploaded_date = date('Y-m-d'); // Current date
                        $dataarray = array(
                            'filename' => $original_name,
                            'fileuploaded_date' => $fileuploaded_date,
                            'memberid' => '11',
                            'dateoffile'=>$selectedDate
                        );
                        $inserted_id = $this->nav_upload_model->insert_file_record($dataarray,'kotak_nav_file');
                        $message="File record inserted with ID: " . $inserted_id;
                    } else {
                        $message = "Failed to open file";
                    }
                    // Read CSV file data
        $csv_file = fopen($upload_dir . $original_name, 'r');
        $month=$currentday=$date=$head1=$head2=$head3=$head4=$head5=$head6='';
        if ($csv_file !== false) {
            // Assuming the CSV file has a header row
            while (($data1 = fgetcsv($csv_file)) !== false) {
                if(preg_match('/^\d{2}-[A-Za-z]{3}-\d{1,2}$/', $data1[4]) ){
                 $date = $data1[4];
                $date1 = $data1[5];

                $currentday = strtotime($date);
                $year=date('Y',$currentday);$month=date('m',$currentday);$day=date('d',$currentday);
                $nextupdateday = strtotime($date1);


            }
        }
        fclose($csv_file);
if($date==$formattedDate){
            $sql="DELETE from kotak_channel_titles where day='$day' and month='$month' and year='$year' and site_id='1' and channel_id='18'";
            $this->nav_upload_model->getRecordsQuery($sql);
            $start 			= 	strtotime(date('Y-m-d 00:00:00', $currentday));
            $end 			= 	strtotime(date('Y-m-d 23:59:59', $currentday));
            $sql="DELETE from kotak_channel_data where field_id_194 BETWEEN '$start' AND '$end' and field_id_190='scheme' and site_id='1' and channel_id='18'";
            $this->nav_upload_model->getRecordsQuery($sql);
            $csv_file = fopen($upload_dir . $original_name, 'r');

            $header = fgetcsv($csv_file); // Read the header row

            while (($data = fgetcsv($csv_file)) !== false) {
                $matching1=$matching2=$matching3=$matching4=$matching5=$matching6=1;
               
                   
                if (!preg_match('/^([A-Za-z\s-]+)\s(\d{1,2}-[A-Za-z]{3}-\d{4})$/', $data[0])){

                        $head1='Title';
    if($data[0]==''){
        $data[0]='Empty';
    }
                        $appendmissing=$appendmissing.' '.$head1.': '.$data[0].' ';

                    $matching1=0;
                }
                if(!preg_match('/^[a-zA-Z\s]+$/', $data[1])){
                    $matching2=0;

                        $head2='Scheme name';
                        if($data[1]==''){
                            $data[1]='Empty';
                        }
                        $appendmissing=$appendmissing.' '.$head2.': '.$data[1].' ';

                }
                    if(!is_numeric($data[2])){
                        if($data[2]==''){
                            $data[2]='Empty';
                        }
                            $head5='NAV';
        
                        $matching3=0;
                        $appendmissing=$appendmissing.$head5.':'.$data[2].' ';

                    }
                    if(!is_numeric($data[3])){
                        if($data[3]==''){
                            $data[3]='Empty';
                        }
                            $head6='Nifty';
                            
                            $appendmissing=$appendmissing.$head6.' :'.$data[3].' ';

                        $matching4=0;

                    }
                    if(!preg_match('/^\d{2}-[A-Za-z]{3}-\d{1,2}$/', $data[5])){
                        if($data[5]==''){
                            $data[5]='Empty';
                        }
                            $head4='Next Update Date';
        
                            $appendmissing=$appendmissing.''.$head4.' :'.$data[5].' ';

                        $matching5=0;

                    }
                    if(!preg_match('/^\d{2}-[A-Za-z]{3}-\d{1,2}$/', $data[4])){
                        if($data[4]==''){
                            $data[4]='Empty';
                        }
                            $head3='Key Date';
                            $appendmissing=$appendmissing.' '.$head3.':'.$data[4].' ';

                        $matching6=0;

                    }
                if($matching1==1 && $matching2==1 && $matching3==1 && $matching4==1 && $matching5==1 && $matching6==1){
                    $schemanav = $data[1];
                    $dataarraynav=array('title'=>$schemanav);
                    $dataarraynav1=array('title'=>$schemanav,'channel_id'=>12);
                    $schemenavdetailsexist=$this->nav_upload_model->getRecords($dataarraynav1,'kotak_channel_titles');
    if($schemenavdetailsexist){   
                    $totatuploadedentries=$totatuploadedentries+1;

                    $title = $data[0];
                $textslug = $data[0];
                $textslug = strtolower($textslug);
                $textslug = str_replace(' ', '-', $textslug);
                $textslug = preg_replace('/[^a-z0-9\-]/', '', $textslug);
                
                $navvalue = $data[2];
                $niftyval = $data[3];
                $date = $data[4];
                $currentday = strtotime($date);
                $date1=$data[5];
                $nextupdateday = strtotime($date1);
                $entry_date = strtotime('now');
                 $year=date('Y',$currentday);$month=date('m',$currentday);$day=date('d',$currentday);
               
                $sql="INSERT INTO `kotak_channel_titles` (`site_id`, `channel_id`, `author_id`, `forum_topic_id`, `ip_address`, `title`, `url_title`, `status`, `versioning_enabled`, `view_count_one`, `view_count_two`, `view_count_three`, `view_count_four`, `allow_comments`, `sticky`, `entry_date`, `year`, `month`, `day`, `expiration_date`, `comment_expiration_date`, `edit_date`, `recent_comment_date`, `comment_total`) VALUES
                (1, 18, $member_id, NULL, '103.252.147.211', '$title', '$textslug', 'open', 'y', 0, 0, 0, 0, 'y', 'n', '$entry_date', '$year', '$month', '$day', 0, 0, '$entry_date', NULL, 0)";
                
 $entry_id = $this->nav_upload_model->getRecordsQuery($sql);
       
 $sql1="INSERT INTO `kotak_channel_data` (`entry_id`, `site_id`, `channel_id`, `field_id_14`, `field_ft_14`, `field_id_15`, `field_ft_15`, `field_id_16`, `field_ft_16`, `field_id_17`, `field_ft_17`, `field_id_18`, `field_ft_18`, `field_id_19`, `field_ft_19`, `field_id_20`, `field_ft_20`, `field_id_21`, `field_ft_21`, `field_id_22`, `field_ft_22`, `field_id_23`, `field_ft_23`, `field_id_24`, `field_ft_24`, `field_id_25`, `field_ft_25`, `field_id_26`, `field_ft_26`, `field_id_28`, `field_ft_28`, `field_id_29`, `field_ft_29`, `field_id_30`, `field_ft_30`, `field_id_31`, `field_ft_31`, `field_id_32`, `field_ft_32`, `field_id_33`, `field_ft_33`, `field_id_34`, `field_ft_34`, `field_id_35`, `field_ft_35`, `field_id_36`, `field_ft_36`, `field_id_37`, `field_ft_37`, `field_id_38`, `field_ft_38`, `field_id_39`, `field_ft_39`, `field_id_40`, `field_ft_40`, `field_id_41`, `field_ft_41`, `field_id_42`, `field_ft_42`, `field_id_43`, `field_ft_43`, `field_id_44`, `field_ft_44`, `field_id_45`, `field_ft_45`, `field_id_46`, `field_ft_46`, `field_id_47`, `field_ft_47`, `field_id_48`, `field_ft_48`, `field_id_51`, `field_ft_51`, `field_id_52`, `field_ft_52`, `field_id_53`, `field_ft_53`, `field_id_58`, `field_ft_58`, `field_id_59`, `field_ft_59`, `field_id_60`, `field_ft_60`, `field_id_61`, `field_ft_61`, `field_id_62`, `field_ft_62`, `field_id_63`, `field_ft_63`, `field_id_64`, `field_ft_64`, `field_id_65`, `field_ft_65`, `field_id_66`, `field_ft_66`, `field_id_67`, `field_ft_67`, `field_id_68`, `field_ft_68`, `field_id_70`, `field_ft_70`, `field_id_71`, `field_ft_71`, `field_id_73`, `field_ft_73`, `field_id_74`, `field_ft_74`, `field_id_75`, `field_ft_75`, `field_id_76`, `field_ft_76`, `field_id_77`, `field_ft_77`, `field_id_78`, `field_ft_78`, `field_id_79`, `field_ft_79`, `field_id_80`, `field_ft_80`, `field_id_81`, `field_ft_81`, `field_id_82`, `field_ft_82`, `field_id_83`, `field_ft_83`, `field_id_84`, `field_ft_84`, `field_id_85`, `field_ft_85`, `field_id_86`, `field_ft_86`, `field_id_87`, `field_ft_87`, `field_id_88`, `field_ft_88`, `field_id_89`, `field_ft_89`, `field_id_90`, `field_ft_90`, `field_id_91`, `field_ft_91`, `field_id_92`, `field_ft_92`, `field_id_93`, `field_ft_93`, `field_id_94`, `field_ft_94`, `field_id_95`, `field_ft_95`, `field_id_96`, `field_ft_96`, `field_id_97`, `field_ft_97`, `field_id_98`, `field_ft_98`, `field_id_99`, `field_ft_99`, `field_id_100`, `field_ft_100`, `field_id_101`, `field_ft_101`, `field_id_102`, `field_ft_102`, `field_id_103`, `field_ft_103`, `field_id_104`, `field_ft_104`, `field_id_105`, `field_ft_105`, `field_id_106`, `field_ft_106`, `field_id_107`, `field_ft_107`, `field_id_108`, `field_ft_108`, `field_id_109`, `field_ft_109`, `field_id_110`, `field_ft_110`, `field_id_111`, `field_ft_111`, `field_id_112`, `field_ft_112`, `field_id_113`, `field_ft_113`, `field_id_114`, `field_ft_114`, `field_id_115`, `field_ft_115`, `field_id_116`, `field_ft_116`, `field_id_117`, `field_ft_117`, `field_id_118`, `field_ft_118`, `field_id_119`, `field_ft_119`, `field_id_120`, `field_ft_120`, `field_id_121`, `field_ft_121`, `field_id_122`, `field_ft_122`, `field_id_123`, `field_ft_123`, `field_id_124`, `field_ft_124`, `field_id_125`, `field_ft_125`, `field_id_126`, `field_ft_126`, `field_id_127`, `field_ft_127`, `field_id_128`, `field_ft_128`, `field_id_129`, `field_ft_129`, `field_id_130`, `field_ft_130`, `field_id_131`, `field_ft_131`, `field_id_132`, `field_ft_132`, `field_id_133`, `field_ft_133`, `field_id_134`, `field_ft_134`, `field_id_135`, `field_ft_135`, `field_id_136`, `field_ft_136`, `field_id_137`, `field_ft_137`, `field_id_138`, `field_ft_138`, `field_id_139`, `field_ft_139`, `field_id_140`, `field_ft_140`, `field_id_141`, `field_ft_141`, `field_id_142`, `field_ft_142`, `field_id_143`, `field_ft_143`, `field_id_144`, `field_ft_144`, `field_id_145`, `field_ft_145`, `field_id_146`, `field_ft_146`, `field_id_147`, `field_ft_147`, `field_id_148`, `field_ft_148`, `field_id_150`, `field_ft_150`, `field_id_151`, `field_ft_151`, `field_id_152`, `field_ft_152`, `field_id_153`, `field_ft_153`, `field_id_154`, `field_ft_154`, `field_id_157`, `field_ft_157`, `field_id_158`, `field_ft_158`, `field_id_159`, `field_ft_159`, `field_id_161`, `field_ft_161`, `field_id_162`, `field_ft_162`, `field_id_163`, `field_dt_163`, `field_ft_163`, `field_id_164`, `field_ft_164`, `field_id_165`, `field_ft_165`, `field_id_166`, `field_ft_166`, `field_id_167`, `field_ft_167`, `field_id_168`, `field_ft_168`, `field_id_169`, `field_ft_169`, `field_id_171`, `field_ft_171`, `field_id_172`, `field_ft_172`, `field_id_173`, `field_ft_173`, `field_id_174`, `field_ft_174`, `field_id_175`, `field_ft_175`, `field_id_176`, `field_ft_176`, `field_id_177`, `field_ft_177`, `field_id_178`, `field_dt_178`, `field_ft_178`, `field_id_179`, `field_ft_179`, `field_id_180`, `field_ft_180`, `field_id_181`, `field_ft_181`, `field_id_182`, `field_ft_182`, `field_id_183`, `field_ft_183`, `field_id_184`, `field_ft_184`, `field_id_185`, `field_ft_185`, `field_id_186`, `field_ft_186`, `field_id_187`, `field_ft_187`, `field_id_188`, `field_ft_188`, `field_id_189`, `field_ft_189`, `field_id_190`, `field_ft_190`, `field_id_191`, `field_ft_191`, `field_id_192`, `field_ft_192`, `field_id_193`, `field_ft_193`, `field_id_194`, `field_dt_194`, `field_ft_194`, `field_id_195`, `field_ft_195`, `field_id_196`, `field_ft_196`, `field_id_197`, `field_ft_197`, `field_id_198`, `field_ft_198`, `field_id_199`, `field_ft_199`, `field_id_200`, `field_ft_200`, `field_id_201`, `field_ft_201`, `field_id_202`, `field_ft_202`, `field_id_203`, `field_ft_203`, `field_id_205`, `field_ft_205`, `field_id_208`, `field_ft_208`, `field_id_209`, `field_ft_209`, `field_id_210`, `field_ft_210`, `field_id_211`, `field_ft_211`, `field_id_212`, `field_ft_212`, `field_id_213`, `field_ft_213`, `field_id_214`, `field_ft_214`, `field_id_215`, `field_ft_215`, `field_id_216`, `field_ft_216`, `field_id_217`, `field_ft_217`, `field_id_218`, `field_ft_218`, `field_id_219`, `field_ft_219`, `field_id_220`, `field_ft_220`, `field_id_221`, `field_ft_221`, `field_id_222`, `field_ft_222`, `field_id_223`, `field_ft_223`, `field_id_224`, `field_ft_224`, `field_id_225`, `field_ft_225`, `field_id_226`, `field_ft_226`, `field_id_227`, `field_ft_227`, `field_id_228`, `field_ft_228`, `field_id_229`, `field_ft_229`, `field_id_230`, `field_ft_230`, `field_id_231`, `field_ft_231`, `field_id_232`, `field_ft_232`, `field_id_233`, `field_ft_233`, `field_id_234`, `field_ft_234`, `field_id_235`, `field_ft_235`, `field_id_236`, `field_ft_236`, `field_id_237`, `field_ft_237`, `field_id_238`, `field_ft_238`, `field_id_239`, `field_ft_239`, `field_id_240`, `field_ft_240`, `field_id_241`, `field_ft_241`, `field_id_242`, `field_ft_242`, `field_id_243`, `field_ft_243`, `field_id_244`, `field_ft_244`, `field_id_245`, `field_ft_245`, `field_id_246`, `field_ft_246`, `field_id_247`, `field_ft_247`, `field_id_248`, `field_ft_248`, `field_id_249`, `field_ft_249`, `field_id_250`, `field_ft_250`, `field_id_251`, `field_dt_251`, `field_ft_251`, `field_id_252`, `field_ft_252`, `field_id_253`, `field_ft_253`, `field_id_254`, `field_ft_254`, `field_id_255`, `field_ft_255`, `field_id_256`, `field_ft_256`, `field_id_257`, `field_ft_257`, `field_id_258`, `field_ft_258`, `field_id_259`, `field_ft_259`, `field_id_260`, `field_ft_260`, `field_id_261`, `field_ft_261`, `field_id_262`, `field_ft_262`, `field_id_263`, `field_ft_263`, `field_id_264`, `field_ft_264`, `field_id_265`, `field_ft_265`, `field_id_266`, `field_ft_266`, `field_id_267`, `field_ft_267`, `field_id_268`, `field_ft_268`, `field_id_269`, `field_ft_269`, `field_id_270`, `field_ft_270`, `field_id_271`, `field_ft_271`, `field_id_272`, `field_ft_272`, `field_id_273`, `field_ft_273`, `field_id_274`, `field_ft_274`, `field_id_275`, `field_ft_275`, `field_id_276`, `field_ft_276`, `field_id_277`, `field_ft_277`, `field_id_278`, `field_ft_278`, `field_id_279`, `field_ft_279`, `field_id_280`, `field_ft_280`, `field_id_281`, `field_ft_281`, `field_id_282`, `field_ft_282`, `field_id_283`, `field_ft_283`, `field_id_284`, `field_ft_284`, `field_id_285`, `field_ft_285`, `field_id_286`, `field_ft_286`, `field_id_287`, `field_ft_287`, `field_id_288`, `field_ft_288`, `field_id_289`, `field_ft_289`, `field_id_290`, `field_ft_290`, `field_id_291`, `field_ft_291`, `field_id_292`, `field_ft_292`, `field_id_293`, `field_ft_293`, `field_id_294`, `field_ft_294`, `field_id_295`, `field_ft_295`, `field_id_296`, `field_ft_296`, `field_id_297`, `field_ft_297`, `field_id_298`, `field_ft_298`, `field_id_299`, `field_ft_299`, `field_id_300`, `field_ft_300`, `field_id_301`, `field_ft_301`, `field_id_302`, `field_ft_302`, `field_id_303`, `field_ft_303`, `field_id_304`, `field_ft_304`, `field_id_305`, `field_ft_305`, `field_id_306`, `field_ft_306`, `field_id_307`, `field_ft_307`, `field_id_308`, `field_ft_308`, `field_id_309`, `field_ft_309`, `field_id_310`, `field_ft_310`, `field_id_311`, `field_ft_311`, `field_id_312`, `field_ft_312`, `field_id_313`, `field_ft_313`, `field_id_314`, `field_ft_314`, `field_id_315`, `field_ft_315`, `field_id_316`, `field_ft_316`, `field_id_317`, `field_ft_317`, `field_id_318`, `field_ft_318`, `field_id_319`, `field_ft_319`, `field_id_320`, `field_ft_320`, `field_id_321`, `field_ft_321`, `field_id_322`, `field_ft_322`, `field_id_323`, `field_ft_323`, `field_id_324`, `field_ft_324`, `field_id_325`, `field_ft_325`, `field_id_326`, `field_ft_326`, `field_id_327`, `field_ft_327`, `field_id_328`, `field_ft_328`, `field_id_329`, `field_ft_329`, `field_id_330`, `field_ft_330`, `field_id_331`, `field_ft_331`, `field_id_333`, `field_ft_333`, `field_id_334`, `field_ft_334`, `field_id_335`, `field_ft_335`, `field_id_336`, `field_ft_336`, `field_id_337`, `field_ft_337`, `field_id_338`, `field_ft_338`, `field_id_339`, `field_ft_339`, `field_id_340`, `field_ft_340`, `field_id_341`, `field_ft_341`, `field_id_342`, `field_ft_342`, `field_id_343`, `field_ft_343`, `field_id_344`, `field_ft_344`, `field_id_345`, `field_ft_345`, `field_id_346`, `field_ft_346`, `field_id_347`, `field_ft_347`, `field_id_348`, `field_ft_348`, `field_id_349`, `field_ft_349`, `field_id_350`, `field_ft_350`, `field_id_351`, `field_ft_351`, `field_id_352`, `field_ft_352`, `field_id_354`, `field_ft_354`, `field_id_355`, `field_ft_355`, `field_id_356`, `field_dt_356`, `field_ft_356`, `field_id_357`, `field_ft_357`, `field_id_358`, `field_ft_358`, `field_id_359`, `field_ft_359`, `field_id_360`, `field_ft_360`, `field_id_361`, `field_ft_361`, `field_id_362`, `field_dt_362`, `field_ft_362`, `field_id_363`, `field_ft_363`, `field_id_364`, `field_ft_364`, `field_id_365`, `field_ft_365`, `field_id_366`, `field_ft_366`, `field_id_367`, `field_ft_367`, `field_id_368`, `field_ft_368`, `field_id_369`, `field_ft_369`, `field_id_370`, `field_ft_370`, `field_id_371`, `field_ft_371`, `field_id_372`, `field_ft_372`, `field_id_373`, `field_ft_373`, `field_id_374`, `field_dt_374`, `field_ft_374`, `field_id_375`, `field_ft_375`, `field_id_376`, `field_ft_376`, `field_id_377`, `field_ft_377`, `field_id_378`, `field_ft_378`, `field_id_379`, `field_ft_379`, `field_id_380`, `field_ft_380`, `field_id_381`, `field_dt_381`, `field_ft_381`, `field_id_382`, `field_ft_382`, `field_id_383`, `field_ft_383`, `field_id_384`, `field_ft_384`, `field_id_385`, `field_ft_385`, `field_id_386`, `field_ft_386`, `field_id_387`, `field_ft_387`, `field_id_388`, `field_ft_388`, `field_id_389`, `field_ft_389`, `field_id_390`, `field_ft_390`, `field_id_391`, `field_ft_391`, `field_id_392`, `field_ft_392`, `field_id_393`, `field_ft_393`, `field_id_394`, `field_ft_394`, `field_id_395`, `field_ft_395`, `field_id_396`, `field_ft_396`, `field_id_397`, `field_ft_397`, `field_id_398`, `field_ft_398`, `field_id_399`, `field_ft_399`, `field_id_400`, `field_ft_400`, `field_id_401`, `field_ft_401`, `field_id_402`, `field_ft_402`, `field_id_403`, `field_ft_403`, `field_id_404`, `field_dt_404`, `field_ft_404`, `field_id_405`, `field_ft_405`, `field_id_406`, `field_ft_406`, `field_id_407`, `field_ft_407`, `field_id_408`, `field_ft_408`, `field_id_409`, `field_ft_409`, `field_id_410`, `field_ft_410`, `field_id_411`, `field_ft_411`, `field_id_412`, `field_ft_412`, `field_id_413`, `field_ft_413`, `field_id_414`, `field_ft_414`, `field_id_415`, `field_ft_415`, `field_id_416`, `field_ft_416`, `field_id_417`, `field_ft_417`, `field_id_418`, `field_ft_418`, `field_id_419`, `field_ft_419`, `field_id_423`, `field_ft_423`, `field_id_424`, `field_ft_424`, `field_id_425`, `field_ft_425`, `field_id_426`, `field_ft_426`, `field_id_427`, `field_ft_427`, `field_id_428`, `field_ft_428`, `field_id_429`, `field_dt_429`, `field_ft_429`, `field_id_431`, `field_ft_431`, `field_id_432`, `field_ft_432`, `field_id_433`, `field_ft_433`, `field_id_434`, `field_ft_434`, `field_id_435`, `field_ft_435`, `field_id_436`, `field_ft_436`, `field_id_437`, `field_ft_437`, `field_id_440`, `field_ft_440`) VALUES
('$entry_id', 1, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '$navvalue', 'none', '$niftyval', 'none', '$currentday', NULL, 'xhtml', '', 'xhtml', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'none', '', 'none', '', 'none', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$nextupdateday', NULL, 'xhtml', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
// Loop through the fields to check for non-null values
$executed=$this->nav_upload_model->getRecordsQuery($sql1);
$dataarraynav=array('title'=>$schemanav);
$schemenavdetails=$this->nav_upload_model->getRecords($dataarraynav,'kotak_channel_titles');
if($schemenavdetails){
$schemenavdetailsentryid=$schemenavdetails[0]->entry_id;
$sql2="INSERT INTO `kotak_relationships` (`parent_id`, `child_id`, `field_id`, `grid_field_id`, `grid_col_id`, `grid_row_id`, `order`) VALUES
('$entry_id', '$schemenavdetailsentryid', 195, 0, 0, 0, 0)";
$executed=$this->nav_upload_model->getRecordsQuery($sql2);
}
            }
        }else{
            $appendmissing=$appendmissing.' '.$head2.': '.$data[1].' Not exist ';

        }
        }
            fclose($csv_file);
            
            
          
	

			// Load Model
			$this->load->model('fund_performance_model');

			/* Latest NAV Scheme Section */
				$schemeRecords	=	$this->fund_performance_model->get_latest_nav_reports('scheme', $start, $end);
                $appendmissing='Missing Details are: '.ltrim($appendmissing);
$sLastDate=$sNextDate='';
                if(!empty($schemeRecords)){
                    $sLastDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT,  $currentday);
				$sNextDate 		= 	date(FUND_PERFORMANCE_DATE_FORMAT, $nextupdateday);
			$getdata = array(	'schemeRecords' => $schemeRecords,
										'sLastDate' => $sLastDate,
										'sNextDate' => $sNextDate,
                                        'countrecords'=>$totatuploadedentries,
                                        'missingDetails'=>$appendmissing
                                        );
                                        $message = "Records loaded successfully.";

                                    }
                                else{
            $getdata = array(	'schemeRecords' => $schemeRecords,
										'sLastDate' => $sLastDate,
										'sNextDate' => $sNextDate,
                                        'countrecords'=>$totatuploadedentries,
                                        'missingDetails'=>$appendmissing
                                        );
                                        $message = "Records loaded successfully.";

                                    
				$message = NO_RECORDS_FOUND;
                                    }
			$success = TRUE;
    }else{
        $message = "File name date and inside file Key Date is not matched";

    }
        }else{
            $message = "Upload file is failed";

  
        }
}
$response = array('success' => $success, 'message' => $message, 'data'=>$getdata);
echo json_encode($response); die;	
}
    
    
    
public function logout() {
    $this->session->sess_destroy();
    
    redirect('nav-upload');
}

public function existingData(){
    $currentDate = date('Y-m-d'); // Format: YYYY-MM-DD
    $response=array();
    $success=false;
    $this->load->model('fund_performance_model');

    $message='Already have Previous day data Please contact administrator';
$uploadedfiledate='';
$sLastDate=date('Y-m-d'); // Format: YYYY-MM
$srecentdata	=	$this->fund_performance_model->get_nav_recent_date('scheme');
if(count((array)$srecentdata)!=0){
    $recent_date 	= 	$srecentdata->fp_date;
    $sLastDate 		=	date('Y-m-d',  $recent_date);
    $success=true;
    $message='Enabled Previous date';
}

   
    $response = array('success' => $success, 'message' => $message,'uploadedfiledate'=>$sLastDate);
    echo json_encode($response); die;	

}

public function uploadedtimes(){
    if ($this->session->userdata('logged_in')) {
        redirect('nav-upload/navupload'); // Redirect to dashboard if logged in
    } else {
        $sql="SELECT count(sk_file_id),dateoffile FROM `kotak_nav_file` group by dateoffile order by dateoffile desc";
      $data['records']=$this->nav_upload_model->getRecordsquerysql($sql);
      $this->load->view('nav-upload/navtimechanges',$data);
    }

}
    }
        
        
        
        

