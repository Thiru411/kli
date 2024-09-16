<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kotaktv extends CI_Controller {

    var $data = array();
    
    public function __construct(){
        parent::__construct();
        $this->load->model('CommonModel','cm',TRUE);
        $this->load->library('session');
        $this->load->library('common');
        $this->load->helper('url');
    }
    
    /* ====================Common Data==================== */
    public function index() {
        echo "Hi version 1 in index method";
        }
        
        public function encryption($payload) {
            return $encryptedId = JWT::encode(2,pkey);
        }
        public function decryption($cipher) {
            return $encryptedId = JWT::decode($cipher,pkey);
        } 
    
        public function common_data() {
            date_default_timezone_set('Asia/Kolkata');
            $data["date"]=date('Y-m-d');
            $data["time"]=date("h:i:sa");
            $data['date_india']=date('d-m-y');
            
            return $data;
        }
        

        function createTempSession() {
            $randomString = mt_rand(1000000,9999000);
            return $randomString;
        }
        
        public function access_control() {
            header("access-control-allow-credentials:true");
            header("access-control-allow-headers:Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token");
            header("access-control-allow-methods:POST, GET, OPTIONS");
            //header("access-control-allow-origin:".$_SERVER['HTTP_ORIGIN']);
            header("access-control-expose-headers:AMP-Redirect-To,AMP-Access-Control-Allow-Source-Origin");
            // header("amp-access-control-allow-source-origin:".$_SERVER['HTTP_ORIGIN']);
            header("Content-Type: application/json");
            header("AMP-Same-Origin: true");
        
            header("Access-Control-Max-Age: 600");    // cache for 10 minutes
        
            if(isset($_SERVER["HTTP_ORIGIN"]))
            {
                // You can decide if the origin in $_SERVER['HTTP_ORIGIN'] is something you want to allow, or as we do here, just allow all
                header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            }
            else
            {
                //No HTTP_ORIGIN set, so we allow any. You can disallow if needed here
                header("Access-Control-Allow-Origin: *");
            }
        
            if($_SERVER["REQUEST_METHOD"] == "OPTIONS") {
                if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_METHOD"]))
                    header("access-control-allow-methods:POST, GET, OPTIONS"); //Make sure you remove those you do not want to support
        
                if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_HEADERS"]))
        
                    header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        
                //Just exit with 200 OK with the above headers for OPTIONS method
                exit(0);
            }
        }
        /* =======================Common Methods====================== */
        public function category(){
			echo "hi";exit;
            $this->access_control();
            $commonData=$this->common_data();
            $access_token = false;
            $row=$this->input->request_headers();
            if(isset($row['accesstoken'])) { $access_token = $row['accesstoken']; }
			echo $access_token;
            $data=array();$ret=array();$category=array();
            if($access_token)
            {
                try{
                    $category_id=$category_status='';
                    if(isset($row['sk_category_id']))
                    {
                        if($row['sk_category_id']=="All")
                        {
                            $category_id ="All";
                        }
                        else{
                            $category_id = $row['sk_category_id'];
                        }
                    }
                    if(isset($row['category_status']))
                    {
                        if($row['category_status']=="All")
                        {
                            $category_status ="All";
                        }
                        else
                        {
                            $category_status = $row['category_status'];
                        }
                    }
                    if($category_id=="All")
					{
						if($category_status=="All")
                        {
                            $where=array();
                        }
                        else
                        {
                            $where=array("category_status"=>$category_status);
                        }						
					}else
					{
						if($category_status=="All"){$where=array('sk_category_id'=>$category_id);}
						else{$where=array('sk_category_id'=>$category_id,"category_status"=>$category_status);}
					}
                    $category_details=$this->cm->getRecordsDetails($where,'kotak_tv_category'); 
                    // var_dump(($category_details));
                    // $category_details['category_name']= $category_details['created_date']=$category_details['created_time']="";
                    if($category_details!=false)
                    {
                       
                        foreach($category_details as $info1)
                        {  
                            $category['sk_category_id']=$info1->sk_category_id;
                            $category['category_name']=$info1->category_name;
                            $category['created_date']=$info1->created_date;
                            $category['created_time']=$info1->created_time;
                            $temp[]=$category;
                        }
                        $category12['category_details']=$temp;
                        $ret=$this->common->response(200,true,'Category Details',$category12);
                }
                else{
                    $ret=$this->common->response(400,false,'No Data Available',array());
                }
                    }catch (Exception $e) {
                    $ret=$this->common->response(400, false, 'Invalid Access Token', array());
                }


            }else{
                    $ret=$this->common->response(400,false,'Invalid Access Token - please check access token both key and value1',new stdClass());
                }
                echo json_encode($ret);
        }
        public function product(){
                $this->access_control();
                $commonData=$this->common_data();
                $access_token = false;
                $row=$this->input->request_headers();
                if(isset($row['accesstoken'])) { $access_token = $row['accesstoken']; }
                $data=array();$ret=array();$product=array();
                if($access_token)
                {
                    try{
                        $product_id=$product_status=$category_type='';
                        if(isset($row['sk_product_id']))
                        {
                            if($row['sk_product_id']=="All")
                            {
                                $product_id ="All";
                            }
                            else{
                                $product_id = $row['sk_product_id'];
                            }
                        }
                        if(isset($row['product_status']))
                        {
                            if($row['product_status']=="All")
                            {
                                $product_status ="All";
                            }
                            else
                            {
                                $product_status = $row['product_status'];
                            }
                        }
                        if(isset($row['category_type']))
                        {
                            if($row['category_type']=="All")
                            {
                                $category_type ="All";
                            }
                            else
                            {
                                $category_type = $row['category_type'];
                            }
                        }
                       /*  if($product_id=="All")
                        {
                            if($product_status=="All")
                            {
                                $where=array();
                            }
                            else
                            {
                                $where=array("product_status"=>$product_status);
                            }						
                        }else
                        {
                            if($product_status=="All"){$where=array('sk_product_id '=>$product_id );}
                            else{$where=array('sk_product_id'=>$product_id ,"product_status"=>$product_status);}
                        } */

                        if($category_type=="All" && $product_id=="All" && $product_status==1){
                       // $product_details=$this->cm->getRecordsDetails($where,'kotak_tv_product'); 
                       $sql="";$binds=array();
                       $sql="SELECT kotak_tv_product.*,kotak_tv_category.category_name FROM kotak_tv_product,kotak_tv_category WHERE kotak_tv_product.category_id=kotak_tv_category.sk_category_id";
                       $product_details=$this->cm->getRecords($sql,$binds);                        
                    }
                    else  if($category_type!="All" && $product_id=="All" && $product_status==1){
                        $sql="";$binds=array();
                        $sql="SELECT kotak_tv_product.*,kotak_tv_category.category_name FROM kotak_tv_product,kotak_tv_category WHERE kotak_tv_product.category_id=kotak_tv_category.sk_category_id and kotak_tv_category.category_name='$category_type'";
                       $product_details=$this->cm->getRecords($sql,$binds); 
                    }
                    else{
                        $sql="";$binds=array();
                        $sql="SELECT kotak_tv_product.*,kotak_tv_category.category_name FROM kotak_tv_product,kotak_tv_category WHERE kotak_tv_product.category_id=kotak_tv_category.sk_category_id and kotak_tv_product.product_status=1";
                       $product_details=$this->cm->getRecords($sql,$binds); 
                    }
                        if($product_details!=false)
                        {
                           
                            foreach($product_details as $info1)
                            {  
                                $product['sk_product_id ']=$info1->sk_product_id ;
                                $product['category_id']=$info1->category_id;
                                $product['video_link']=$info1->video_link;
                                $product['description']=$info1->description;
                                $product['author_name']=$info1->author_name;
                                $product['author_photo']=$info1->author_photo;
                                $product['time_in_sec']=$info1->time_in_sec;
                                $product['created_date']=$info1->created_date;
                                $product['product_status']=$info1->product_status;
                                $product['category_name']=$info1->category_name;
                                $temp[]=$product;
                            }
                            $products['product_details']=$temp;
                            $ret=$this->common->response(200,true,'Product Details',$products);
                    }
                    else{
                        $ret=$this->common->response(400,false,'No Data Available',array());
                    }
                        }catch (Exception $e) {
                        $ret=$this->common->response(400, false, 'Invalid Access Token', array());
                    }
    
    
                }else{
                        $ret=$this->common->response(400,false,'Invalid Access Token - please check access token both key and value1',new stdClass());
                    }
                    echo json_encode($ret);
            }
 public function kotak_tv()
{ 
        $this->load->model('site_model');       

        array_push($this->data['JS_FILES'], 'assets/js/need_base_cal.js');    

        $this->template->set('title', 'Home');

        $this->load->helper('form');     

		$login_access_token_header = array('Content-Type:application/json','accesstoken:'.globalAccessToken,"sk_category_id:All","category_status:1");

		 $data['categoryDetails']=$categoryDetails="";
		 echo apiendpoint;
		 echo $makecall = $this->callAPI('GET', apiendpoint . "category", array(), $login_access_token_header);
		 	exit;
			$result = json_decode($makecall);
			$status=$result->status;  
			if($status==200)
			{
				if($result->data!="")
				{
					 $categoryDetails=$result->data->category_details;
				}
			}
			 
			$this->data['categoryDetails']=$categoryDetails;

        //$this->template->load('template/template', 'site/kotak-tv', $this->data);

         

    }         
}