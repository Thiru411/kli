<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site_Model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	/*public function get_category(){
		return  $this->db->select('sk_category_id, category_name, category_status, created_date, created_time, tran_date_time')
				->from('kotak_tv_category')
				->where(array('category_status'	=>	1))
				//->order_by("sk_category_id", "asc")
				->get()->result();
}*/
public function get_category(){
	/* 	return  $this->db->select('sk_category_id, category_name, category_status, created_date, created_time, tran_date_time')
				->from('kotak_tv_category')
				->where(array('category_status'	=>	1))
				//->order_by("sk_category_id", "asc")
				->get()->result(); */
				$limit=8;$offset=0;
				return $this->db->select('DISTINCT(kct.category_name), kct.sk_category_id, kct.category_status, kct.created_date, kct.created_time, kct.tran_date_time')
				->from('kotak_tv_category as kct')
				->join('kotak_tv_product as kr', 'kct.sk_category_id = kr.category_id')  
				//->where(array('kct.category_status'=>1,'kr.product_status'=>1))
				->where(array('kct.category_status'=>1))
				->order_by("sk_category_id", "asc")
				->limit($limit,$offset)
				->get()->result(); 

}
public function get_productBycategory($category_id){
	$order_by='kr.sk_product_id';
		 return $this->db->select('kct.category_name,kr.sk_product_id,kr.views,kr.category_id,kr.video_link,kr.description,kr.created_date,kr.created_time,kr.author_name,kr.author_photo,kr.time_in_sec,kr.product_status,kr.tran_date_time')
					->from('kotak_tv_product as kr')
					->join('kotak_tv_category as kct', 'kct.sk_category_id = kr.category_id') 
					//->where(array("kr.product_status=1 and kct.category_name=$category_id"))
					->where(array('kr.product_status'=>'1','kct.category_name'=>$category_id))
					->order_by($order_by, "asc")
					->get()->result();
}

public function product_detailsByLimit($category_id,$page,$language){ 
/*$order_by="asc";
if(($category_id=="Market Outlook") || ($category_id=='Events') || ($category_id=='Products'))
{
	$order_by="desc";
}
else
{
	$order_by="asc";
}*/
$order_by="desc";
	$limit=12;$offset=0;
						if($page!="All"){
							if($page==1){ $offset=0*$limit; }else{ $offset=($page-1)*$limit; }
						}
						else{ $offset=0*$limit; }
if($language!=''){
	return $this->db->select('kct.category_name,kr.sk_product_id,kr.views,kr.category_id,kr.video_link,kr.description,kr.created_date,kr.created_time,kr.author_name,kr.author_photo,kr.time_in_sec,kr.product_status,kr.tran_date_time')
			   ->from('kotak_tv_product as kr')
			   ->join('kotak_tv_category as kct', 'kct.sk_category_id = kr.category_id') 
			   ->where(array('kr.language'=>$language,'kr.product_status'=>1,'kct.category_name'=>$category_id))
			   ->order_by("kr.sk_product_id", $order_by)
			    ->limit($limit,$offset)
			   ->get()->result();
}else{
	return $this->db->select('kct.category_name,kr.sk_product_id,kr.views,kr.category_id,kr.video_link,kr.description,kr.created_date,kr.created_time,kr.author_name,kr.author_photo,kr.time_in_sec,kr.product_status,kr.tran_date_time')
			   ->from('kotak_tv_product as kr')
			   ->join('kotak_tv_category as kct', 'kct.sk_category_id = kr.category_id') 
			   ->where(array('kr.product_status'=>1,'kct.category_name'=>$category_id))
			   ->order_by("kr.sk_product_id", $order_by)
			    ->limit($limit,$offset)
			   ->get()->result();
}
}
	// Save channel entry 
	public function save_channel_enty($data) {		
		$this->load->helper('text');
		$data['entry_date'] = $data['edit_date'] = time();
		$channel_id = $data['channel_id'] ? $data['channel_id'] : 0;
		$meta = array(
			'channel_id' => $channel_id,
			'author_id' => AUTHOR_ID,
			'site_id' => SITE_ID,
			'ip_address' => $this->input->ip_address(),
			'title' => $data['title'],
			'url_title' => $data['url_title'],
			'entry_date' => $data['entry_date'],
			'edit_date' => date('YmdHis', $data['edit_date']),
			'versioning_enabled' => VERSIONING_ENABLED,
			'year' => date('Y', $data['entry_date']),
			'month' => date('m', $data['entry_date']),
			'day' => date('d', $data['entry_date']),
			'expiration_date' => isset($data['expiration_date']) ? $data['expiration_date'] : 0,
			'comment_expiration_date' => isset($data['comment_expiration_date']) ? $data['comment_expiration_date'] : 0,
			'sticky' => (isset($data['sticky']) && $data['sticky'] == 'y') ? 'y' : 'n',
			'status' => isset($data['status']) ? $data['status'] : 'open',
			'allow_comments' => isset($data['allow_comments']) ? $data['allow_comments'] : 'n',
		);

		$insert_id = $this->_insert_entry($meta, $data);
		return $insert_id;
	}

	// --------------------------------------------------------------------

	/**
	 * Insert Entry
	 *
	 * Creates primary data for a new entry
	 *
	 * @access	private
	 * @param	mixed
	 * @param	mixed
	 * @return	void
	 */
	public function _insert_entry($meta, $data) {

		$successful = TRUE;

		$this->db->insert('kotak_channel_titles', $meta);
		$entry_id = $this->db->insert_id();
		if ($entry_id) {

			// Insert custom field data
			$cust_fields = array('entry_id' => $entry_id, 'channel_id' => $data['channel_id'], 'site_id' => SITE_ID);

			foreach ($data as $key => $val) {
				if (strncmp($key, 'field_offset_', 13) == 0) {
					unset($data[$key]);
					continue;
				}

				if (strncmp($key, 'field', 5) == 0) {
					if (strncmp($key, 'field_id_', 9) == 0 && !empty($val)) {
						$cust_fields[$key] = $val;
					}
					// set missing defaults here.
					// $data['field_ft_'.$row['field_id']] = 'none';
				}
			}

			// Check that data complies with mysql strict mode rules
			$all_fields = $this->db->field_data('kotak_channel_data');

			foreach ($all_fields as $field) {
				if (strncmp($field->name, 'field_id_', 9) == 0) {
					if ($field->type == 'text' OR $field->type == 'blob') {
						if (!isset($cust_fields[$field->name]) OR $cust_fields[$field->name] == '') {
							$cust_fields[$field->name] = '';
						}
					} elseif ($field->type == 'int' && isset($cust_fields[$field->name]) && $cust_fields[$field->name] === '') {
						unset($cust_fields[$field->name]);
					} elseif ($field->type == 'real' && isset($cust_fields[$field->name])) {
						$cust_fields[$field->name] = (float) $cust_fields[$field->name];
					}
				}
			}
		}
		$centry_id = $this->db->insert('kotak_channel_data', $cust_fields);

		// Check to see if the file_id is valid
		$successful = $centry_id ? $entry_id : FALSE;
		return $successful;
	}
	
	public function agentsTerminated(){
			return  $this->db->select('field_id_305 as agentName, field_id_306 as dateofTermination')
					->from('kotak_channel_data')
					->where(array('channel_id'=>AGENTS_TERMINATED,'site_id'=>SITE_ID))
					->get()->result();
	}
	
	public function get_factaQA(){
			return  $this->db->select('col_id_38 as factaQuestion, col_id_39 as factaAnswer')
					->from('kotak_channel_grid_field_237')
					->where(array('entry_id'	=>	235))
					->order_by("row_order", "asc")
					->get()->result();
	}
	
	public function get_pdfContent($entry_id){
			$entry_id = secure_input_data($entry_id);
			return  $this->db->select('col_id_34 as pdfTitle, col_id_35 as pdfDate, col_id_36 as pdfURL, col_id_37 as pdfyear')
					->from('kotak_channel_grid_field_236')
					->where(array('entry_id'	=>	$entry_id))
					->order_by("row_order", "asc")
					->get()->result();
	}
	
	public function get_customerBulletinDD(){
			return  $this->db->select('col_settings as years')
					->from('kotak_grid_columns')
					->where(array('field_id'	=>	236, 'col_id' => 37))
					->get()->row();
	}
	
	public function get_ServiceTats($channel_id){
		$channel_id = secure_input_data($channel_id);
		return  $this->db->select('field_id_205 as serviceTatsHtml')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id,'entry_id'=>229, 'site_id'=>SITE_ID))
					->get()->result();
	}
	
	/*Need base calculator*/
	public function bind_needDD(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>243))
					->get()->row();
	}
	public function bind_needDD_mobile(){echo 1;
		/*return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>243))
					->get()->row();*/
	}
	
	public function bind_ageGroupDD(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>244))
					->get()->row();
	}
	
	public function get_needBaseResult($ageGroup,$needSegment){
		
		/*return  $this->db->select('kotak_channel_titles.title, kotak_channel_titles.url_title,kotak_channel_titles.url_title as url_title, field_id_39 as plan_description, field_id_40 as plan_image, field_id_14 as insurance_type`')
		//kct.entry_id,kcd.field_id_14 as plan_type,kcd.field_id_40 as plan_image
					->from('kotak_channel_data')
					->join('kotak_relationships', 'kotak_relationships.child_id = kotak_channel_data.entry_id')
					->join('kotak_channel_titles', 'kotak_channel_titles.entry_id = kotak_relationships.child_id')
					->where(" kotak_channel_data.entry_id IN (SELECT b.child_id 
								FROM kotak_channel_data a 
								JOIN kotak_relationships b 
								ON a.entry_id=b.parent_id 
								WHERE a.field_id_243='{$needSegment}' and a.field_id_244='{$ageGroup}')", NULL, FALSE)
					->get()->result();
		*/
		
		return $this->db->distinct()->select('kct.entry_id,kct.title as plan_title,kct.url_title as plan_url_title,kctp.url_title as plan_type_url_title,kcd.field_id_39 as plan_description,kcd.field_id_14 as plan_type,kcd.field_id_40 as plan_image')
						->from('kotak_relationships as kr')
						->join('kotak_channel_titles as kct', 'kct.entry_id = kr.child_id')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
						->join('kotak_relationships as krp', 'kcd.entry_id = krp.parent_id')
						->join('kotak_channel_titles as kctp', 'kctp.entry_id = krp.child_id')
						->where(" kr.field_id=245 and kct.status='open' and krp.field_id=176 and kcd.entry_id IN (SELECT b.child_id 
								FROM kotak_channel_data a 
								JOIN kotak_relationships b 
								ON a.entry_id=b.parent_id 
								WHERE a.field_id_243='{$needSegment}' and a.field_id_244='{$ageGroup}')", NULL, FALSE)
						->get()->result();
						
						/*->where(array( 	'kct.channel_id'=>	INSURANCE_PLANS_CHANNEL_ID, 
										'kct.site_id'	=>	SITE_ID,
										'kr.field_id'	=>	245,
										'krp.field_id'	=>	INSURANCE_PLANS_TYPE_RELATIONSHIP,
										'kct.status'	=>	'open',
										//'kcd.field_id_243'	=>	$needSegment,
										//'kcd.field_id_244'	=>	$ageGroup
										"'kcd.entry_id' IN (SELECT b.child_id 
											FROM kotak_channel_data a 
											JOIN kotak_relationships b 
											ON a.entry_id=b.parent_id 
											WHERE a.field_id_243='{$needSegment}' and a.field_id_244='{$ageGroup}')"
										))
						->order_by("kct.entry_date", "asc")
						->get()->result();*/
		
		/*return  $this->db->select('kotak_channel_titles.title, kotak_channel_titles.url_title, field_id_39 as plan_description, field_id_40 as plan_image')
					->from('kotak_channel_data')
					->join('kotak_channel_titles', 'kotak_channel_data.entry_id = kotak_channel_titles.entry_id')
					->where(" kotak_channel_data.entry_id IN (SELECT b.child_id 
								FROM kotak_channel_data a 
								JOIN kotak_relationships b 
								ON a.entry_id=b.parent_id 
								WHERE a.field_id_243='{$needSegment}' and a.field_id_244='{$ageGroup}')", NULL, FALSE)
					->get()->result();*/
					
		
	}
	
	public function insert_needBaseDetails($postData,$postDataChannelTitle){
		$insertedChannelEntryId = $this->_insert_channel_title($postDataChannelTitle);
		if(isset($insertedChannelEntryId) && $insertedChannelEntryId != null && $insertedChannelEntryId > 0) {
			$postData['entry_id'] = $insertedChannelEntryId;
			$this->db->insert('kotak_channel_data', $postData);
			return $this->db->affected_rows() > 0;
		} else {
			return FALSE;
		}
	}
	
	public function insert_getACallDetails($postData,$postDataChannelTitle){
		$insertedChannelEntryId = $this->_insert_channel_title($postDataChannelTitle);
		//echo $this->db->last_query();die;
		if(isset($insertedChannelEntryId) && $insertedChannelEntryId != null && $insertedChannelEntryId > 0) {
			$postData['entry_id'] = $insertedChannelEntryId;
			$this->db->insert('kotak_channel_data', $postData);
			return $this->db->affected_rows() > 0;
		} else {
			return FALSE;
		}
	}
	
	public function insert_request_contactUs($postData, $postDataChannelTitle) {
		$insertedChannelEntryId = $this->_insert_channel_title($postDataChannelTitle);
		if(isset($insertedChannelEntryId) && $insertedChannelEntryId != null && $insertedChannelEntryId > 0) {
			$postData['entry_id'] = $insertedChannelEntryId;
			$this->db->insert('kotak_channel_data', $postData);
			return $this->db->affected_rows() > 0;
		} else {
			return FALSE;
		}
	}
	
	public function _insert_channel_title($postDataChannelTitle) {
		$this->db->insert('kotak_channel_titles', $postDataChannelTitle);
		return $this->db->insert_id();
	}
	/*Need base calculator*/
	
	/*Footer*/
	public function bind_languages(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>302))
					->get()->row();
	}
	
	public function getFormsByLanguage(){
		return  $this->db->select('field_id_302 as language, field_id_303 as title, field_id_304 as pdfPath')
					->from('kotak_channel_data')
					->where(array('channel_id'=>67, 'site_id'=>SITE_ID))
					->get()->result();
	}

	public function getSEOInformation($uri = ''){
		
		$where_array = array('channel_id'=>SEO_CHANNEL_ID, 'site_id'=>SITE_ID);
		if(!empty($uri)){
			$where_array['field_id_313'] = $uri;
		}
		
		return  $this->db->select('field_id_314 as meta_title, field_id_315 as meta_description, field_id_316 as meta_keywords,field_id_327 as page_schema,field_id_339 as meta_canonical_url,field_id_350 as page_lan_link')
					->from('kotak_channel_data')
					->where($where_array)
					->get()->row();
	}
	/*Footer*/
	
	public function updateviewcount($views_count,$v_link){
		
		
		$values = array('views'=>$views_count);
		$where_array = array('video_link'=>$v_link);
		return $this->db->update('kotak_tv_product',$values,$where_array);
				
	}
	function save($data,$table)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	public function getRecordsDetails($where,$table) {

		//$this->db->select("*");
		$query = $this->db->get_where($table, $where);
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	} 
	
	public function getPopularSearches($page){
			return  $this->db->select('*')
							->from('kotak_channel_titles as kct')
							->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id') 					
							->join('kotak_channel_titles as ktct', 'ktct.entry_id = kcd.entry_id')
							->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
							->where(array('kct.channel_id'	=>	POPULAR_SEARCHES_ID, 
										  'kct.site_id'		=>	SITE_ID,
										  'kcd.field_id_399'	=>	$page,
										  'kct.status'		=>	'open'))
							->get()->row();	
							

	} 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function get_States(){
		return  $this->db->select('distinct(field_id_411) as states')
					->from('kotak_channel_data')
					->where(array('channel_id'=>81, 'site_id'=>SITE_ID))
					->order_by("field_id_411", "asc")
					->get()->result();
	}
	public function get_locationdetails_for_map(){
		return  $this->db->select('field_id_411 as states,field_id_418 as latitude,field_id_419 as longitude,field_id_413 as brnchaddress1,field_id_412 as brnchcity,field_id_414 as brnchpincode,field_id_415 as stdcode,field_id_416 as phonenumber')
		->from('kotak_channel_data as kcd')
		->where(array('kcd.channel_id' => 81, 'kcd.site_id' => SITE_ID))
					->order_by("field_id_411", "asc")
					->get()->result();
	}
	
	
	
	public function get_MapResult($city){
		return  $this->db->select('field_id_411 as states,field_id_418 as latitude,field_id_419 as longitude,field_id_413 as brnchaddress1,field_id_412 as brnchcity,field_id_414 as brnchpincode,field_id_415 as stdcode,field_id_416 as phonenumber')
					->from('kotak_channel_data as kcd')
					->where(array('kcd.channel_id' => 81, 'kcd.site_id' => SITE_ID,'kcd.field_id_412'=>$city))
                    ->order_by("kcd.entry_id", "asc")					
					->get()->result();
					
	}
	public function get_MapResultByPincode($pincode){
		return  $this->db->select('field_id_411 as states,field_id_418 as latitude,field_id_419 as longitude,field_id_413 as brnchaddress1,field_id_412 as brnchcity,field_id_414 as brnchpincode,field_id_415 as stdcode,field_id_416 as phonenumber')
					->from('kotak_channel_data as kcd')
					->where(array('kcd.channel_id' => 81, 'kcd.site_id' => SITE_ID, 'kcd.field_id_414'=>$pincode))
                    ->order_by("kcd.entry_id", "asc")					
					->get()->result();
					
	}
	
	public function get_Citiesdetails($state){
		return  $this->db->select('distinct(field_id_412) as cities')
		->from('kotak_channel_data as kcd')
					->where(array('kcd.channel_id'=>81, 'kcd.site_id'=>SITE_ID, 'kcd.field_id_411'=>$state))
					->order_by("field_id_412", "asc")
					->get()->result();
	}
}