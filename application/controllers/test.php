<?php 
   class Test extends CI_Controller {
  
      /*public function index() { 
         echo "Hello World!"; 
      }
	  public function mysqltest() {
		  $this->load->database();
		  echo 'query started at : '. date('Y-m-d H:i:s'); echo '<br>';
		  error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
		  $result =  $this->db->select('kotak_channel_titles.entry_id as entry_id, title, url_title, field_id_41 as insurance_type_description, field_id_47 as plan_type_small_image, field_id_48 as plan_type_big_image, field_id_252 as plan_main_type')
					->from('kotak_channel_titles')
					->join('kotak_channel_data', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(array('kotak_channel_titles.channel_id'		=>		INSURANCE_PLANS_TYPE_CHANNEL_ID, 
								  'kotak_channel_titles.site_id'		=>		SITE_ID,
								  'kotak_channel_titles.status'			=>		'open',
								  'kotak_channel_data.field_id_252'		=>		'Insurance Plans'))
					->get()->result();
		if($result) {
			echo 'query executed sucessfully'; echo '<br>';
			$logFile ='D:/kotak/apache/htdocs/kotak-stage/mysqltest.log';
$fh = fopen($logFile, (file_exists($logFile)) ? 'a' : 'w');
fwrite($fh, '-Query SUccess '.date('Y-m-d H:i:s').PHP_EOL);
		} else {
			echo 'No result found'; echo '<br>';
			$logFile ='D:/kotak/apache/htdocs/kotak-stage/mysqltest.log';
			$fh = fopen($logFile, (file_exists($logFile)) ? 'a' : 'w');
fwrite($fh, '-Query empty '.date('Y-m-d H:i:s').PHP_EOL);
		}
		echo 'query ended at : '. date('Y-m-d H:i:s'); echo '<br>';
	  }*/
   } 
?>