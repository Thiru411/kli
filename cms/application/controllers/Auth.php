<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public $CI = NULL; 
	public function __construct(){
        parent::__construct();   
		$this->load->library('common');     
        $this->load->model('CommonModel','cm',TRUE);
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper("jwt_helper");
	   $this->CI = & get_instance();
    }

	 /****************Common Data*********************/
	 public function common_data()
	 {
		 date_default_timezone_set('Asia/Kolkata');
		 $post_date = date('Y-m-d');
		 $timestamp = date("Y-m-d H:i:s");
		 $data["post_date"] = $post_date;
		 $data["timestamp"] = $timestamp;
		 $data["menu_open"]="";		
		 $data["menu_active"]="";
		 
		 if($this->session->userdata("employee_session_id")=="" || $this->session->userdata("employee_session_id")==null){
		//	 redirect("auth");
		 }
		
		 $data['employee_session_id']="";
		 $data['employee_session_email']= "";
		 $data['employee_session_type'] = "";
		 $data['employee_session_id']= $this->session->userdata("employee_session_id");
		 $data['employee_session_email'] = $this->session->userdata("employee_session_email");
		 $data['employee_session_type'] = $this->session->userdata("employee_session_type");
		 $data['employee_session_name'] = $this->session->userdata("employee_session_name");
		
		 
		 return $data;
	 }
	 /****************Common Data*********************/
	 
    
	public function index() {
		$this->load->view('auth/login');
	}

	public function login() {
		$data=$this->common_data();
		$email = trim($this->input->post('email'));
$pass = trim($this->input->post('password'));

// Sanitize email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Sanitize password (strip tags, escape special characters)
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass, ENT_QUOTES, 'UTF-8');
    
		$data_save=array('email'=>$email,'password'=>md5($pass));
		$admin_exist=$this->cm->getRecords($data_save,'kotak_cms_user');
		if($admin_exist!=false){
			foreach($admin_exist as $info){
			$data['employee_session_id']= $this->session->set_userdata("employee_session_id",$info->sk_admin_id);
			$data['employee_session_email'] = $this->session->set_userdata("employee_session_email",$info->email);
			$data['employee_session_name'] = $this->session->set_userdata("employee_session_name",$info->name);
			}
			redirect('dashboard');
		}else{
		redirect('/');

		}
	}else{
		redirect('/');

	}		
	}

	public function dashboard() {

		$data=$this->common_data();
		if($this->session->userdata("employee_session_id")=="" || $this->session->userdata("employee_session_id")==null){
            redirect("/");
         }
		 
		 $data['menu_open'] = "";
		$data['menu_active'] = "dashboard";
	
		$this->load->view('dashboard',$data);
	}
	
	public function blogs() {

		$data=$this->common_data();
		if($this->session->userdata("employee_session_id")=="" || $this->session->userdata("employee_session_id")==null){
            redirect("/");
         }
		 $data['menu_open'] = "blogs";
		$data['menu_active'] = "blogs-list";
		$output='';
		$i=1;
		$blogslist=$this->cm->getRecords(array(),'kotak_cms_blogs');
		if($blogslist){
		
			foreach($blogslist as $info){
				$sk_blog_id=$info->sk_blog_id;

				$bodycontenturl=$info->bodycontenturl;
						$pageTitle=$info->pagetitle;
						$metadescription=$info->metadescription;
						$page_url=$info->pageurl;
						$page_schema=$info->pageschema;
						$breadcrumbs=$info->breadcumbs;
						$added_by=$info->addedby;
						$added_on=$info->addedon;
						$updated_by=$info->updatedby;
						$updated_on=$info->updatedon;
						$additional_data=$info->additionaldata;
						$datetime=date('Y-m-d H:i:s',strtotime($info->datetime));

						$edit_url="";
						if($info->blogstatus==1){
							$inactivate_url=base_url()."blog-inactive/".base64_encode($sk_blog_id);
							$edit_url="<a href='$inactivate_url'><i class='fa fa-trash'></i></a>";
						}
						else {
							$activate_url=base_url()."blog-active/".base64_encode($sk_blog_id);
							$edit_url="<a href='$activate_url'><i class='fa fa-check'></i></a>";
						}

						$output=$output."<tr>
						<td>$i</td>
						<td>$bodycontenturl</td>
						<td>$page_url</td>
						<td>$datetime</td>
						<td>$edit_url</td>
						</tr>";
						$i++;
			}
		}
		$data['output']=$output;
		$this->load->view('blogslist',$data);
	}

	public function blogs_add() {

		$data=$this->common_data();
		if($this->session->userdata("employee_session_id")=="" || $this->session->userdata("employee_session_id")==null){
            redirect("/");
         }
		$data['menu_open'] = "blogs";
		$data['menu_active'] = "blogs-add";
	
		$this->load->view('blogAdd',$data);
	}
	public function blogsinsert(){
		//echo "ghj";exit();
		$data=$this->common_data();
		if($this->session->userdata("employee_session_id")=="" || $this->session->userdata("employee_session_id")==null){
            redirect("/");
         }
		 $bodyContent = htmlspecialchars(trim($this->input->post('bodyContent')), ENT_QUOTES, 'UTF-8');
$last_segment = basename(parse_url($bodyContent, PHP_URL_PATH));  // Safe to process as it's already sanitized

$pageTitle = htmlspecialchars(trim($this->input->post('pageTitle')), ENT_QUOTES, 'UTF-8');
$metaFDesc = htmlspecialchars(trim($this->input->post('metaFDesc')), ENT_QUOTES, 'UTF-8');
$page_url = filter_var(trim($this->input->post('page_url')), FILTER_SANITIZE_URL);  // URL-specific sanitization
$page_schema = htmlspecialchars(trim($this->input->post('page_schema')), ENT_QUOTES, 'UTF-8');
$breadcrumbs = htmlspecialchars(trim($this->input->post('breadcrumbs')), ENT_QUOTES, 'UTF-8');  // Since it's a JSON string, better to escape special chars

// Retrieve session variables
$added_by = htmlspecialchars($this->session->userdata("employee_session_name"), ENT_QUOTES, 'UTF-8');
$added_on = date("Y-m-d H:i:s");
$updated_by = $added_by;
$updated_on = $added_on;
$additional_data = htmlspecialchars(trim($this->input->post('additional_data')), ENT_QUOTES, 'UTF-8');

// Session ID (consider further validation if needed)
$session_id = intval($this->session->userdata("employee_session_id"));

// Example array to store sanitized data
$data = array(
    'bodyContent' => $bodyContent,
    'last_segment' => $last_segment,
    'pageTitle' => $pageTitle,
    'metaFDesc' => $metaFDesc,
    'page_url' => $page_url,
    'page_schema' => $page_schema,
    'breadcrumbs' => $breadcrumbs,
    'added_by' => $added_by,
    'added_on' => $added_on,
    'updated_by' => $updated_by,
    'updated_on' => $updated_on,
    'additional_data' => $additional_data,
    'session_id' => $session_id
);

		//var_dump($breadcrumbs); // Debugging: check the raw JSON string
		$data =array(
			'bodycontenturl' => $bodyContent,
			'pagetitle' => $pageTitle,
			'metadescription' => $metaFDesc,
			'pageurl' => $page_url,
			'pageschema' => $page_schema,
			'breadcumbs' => $breadcrumbs, // Save as JSON string
			'addedby'=>$added_by,
			'addedon'=>$added_on,
			'updatedby'=>$updated_by,
			'updatedon'=>$updated_on,
			'additionaldata'=>$additional_data,
			'loggedinuser'=>$session_id,
			'last_segment'=>$last_segment,
			'blogstatus'=>1

		);
	
		$id=$this->cm->Save($data,'kotak_cms_blogs');
		if($id>0){
			redirect('blogs');
		}else{
			redirect('blogs-add');
		}


	}

	public function logout() { 
        $this->session->sess_destroy();
         $this->session->unset_userdata('logged_in');       
         redirect(base_url());
    }


	public function blog_edit(){
		$data=$this->common_data();
		if($this->session->userdata("employee_session_id")=="" || $this->session->userdata("employee_session_id")==null){
            redirect("/");
         }
		 $blogs_id=$this->uri->segment(2);
		$data['blogseditdetails']=$this->cm->getRecords(array('blogs_id'=>base64_decode($blogs_id)),'kotak_cms_blogs');
		$this->load->view('blogs-edit',$data);
	}
	public function blog_inactive(){
		$data=$this->common_data();
		if($this->session->userdata("employee_session_id")=="" || $this->session->userdata("employee_session_id")==null){
            redirect("/");
         }
		$blogs_id=$this->uri->segment(2);
		 $where=array('sk_blog_id'=>base64_decode($blogs_id));
		 $updateData=array('blogstatus'=>0);
		 $responseactive = $this->cm->updateRecords($updateData,$where,'kotak_cms_blogs');
		 redirect('blogs');
		
	}
	public function blog_active(){
		$data=$this->common_data();
		if($this->session->userdata("employee_session_id")=="" || $this->session->userdata("employee_session_id")==null){
            redirect("/");
         }
		$blogs_id=$this->uri->segment(2);
		 $where=array('sk_blog_id'=>base64_decode($blogs_id));
		 $updateData=array('blogstatus'=>1);
		 $responseactive = $this->cm->updateRecords($updateData,$where,'kotak_cms_blogs');
		 redirect('blogs');
	}
}
?>