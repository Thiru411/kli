<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_guide_model extends CI_Model  {
	
	function __construct() {
        parent::__construct();
    }
	
	// Get recently posted articles
	public function get_recent_articles(){
		return  $this->db->select('kct.entry_id as entry_id, kct.title, kct.url_title, kcd.field_id_157 as article_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date, ktcd.field_id_138 as topic_icon, ktct.url_title as topic_url_title, ktct.title as topic_name')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->join('kotak_relationships as kr', 'kr.parent_id = kct.entry_id')					
					->join('kotak_channel_titles as ktct', 'ktct.entry_id = kr.child_id')
					->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
					->where(array('kct.channel_id'	=>		INSURANCE_GUIDE_CHANNEL_ID, 
								  'kct.site_id'		=>		SITE_ID,
								  'kct.status'		=>		'open',
								  'kr.field_id'		=>		INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
					->order_by("kcd.field_id_163", "desc")
					->limit(RECENT_ARTICLES_LIMIT)
					->get()->result();
	}

	// Get all insurance guide topics
	public function get_all_topics(){
		return  $this->db->select('kct.title, kct.url_title, kcd.field_id_136 as short_description, kcd.field_id_138 as topic_icon, kcd.field_id_139 as topic_image')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'	=>		INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
								  'kct.site_id'		=>		SITE_ID,
								  'kct.status'		=>		'open'))
					->order_by("kcd.entry_id", "asc")
					->get()->result();
	}


	// Get topic details
	public function get_guide_topic_details($topicSlug){
		return  $this->db->select('kct.title, kcd.field_id_137 as topic_description')
						->from('kotak_channel_titles as kct')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
						->where(array('kct.channel_id'	=>	INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
									  'kct.site_id'		=>	SITE_ID,
									  'kct.url_title'	=>	$topicSlug,
									  'kct.status'		=>	'open'))
						->get()->row();	
	}

	// Get other random topics
	public function get_other_random_topics($topicSlug){
		return  $this->db->select('kct.title, kct.url_title, kcd.field_id_136 as short_description, kcd.field_id_138 as topic_icon')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'		=>		INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
								  'kct.site_id'			=>		SITE_ID,
								  'kct.url_title != '	=>		$topicSlug, 
								  'kct.status'			=>		'open'))
					->order_by("kct.url_title", "RANDOM")
					->limit(RANDOM_TOPICS_LIMIT)
					->get()->result();
	}

	// Get articles list based on topic slug
	public function get_articles_by_topic($topicSlug, $offset = 0, $order_by = 'kcd.entry_id', $searchArticle = '',$ARTICLES_LIMIT) {

		$this->db->select('ktct.title,kcd.entry_id, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date')
					->from('kotak_channel_titles as ktct')
					->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
					->where(array('ktct.channel_id'		=>		INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
								  'ktct.site_id'		=>		SITE_ID,
								  'ktct.url_title'		=>		$topicSlug, 
								  'ktct.status'			=>		'open',
								   'kct.status'			=>		'open',
								  'kr.field_id'			=>		INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
					->order_by($order_by, "desc")
					->limit($ARTICLES_LIMIT, $offset);
		if(!empty($searchArticle)){
			$this->db->where(" ( kct.title LIKE '%$searchArticle%' ESCAPE '!' OR kcd.field_id_157 LIKE '%$searchArticle%' ESCAPE '!') ");
		}
		
		return  $this->db->get()->result();
	}
	
	public function get_articles_for_glossary($offset = 0, $order_by ,$ARTICLES_LIMIT) {

		$this->db->select('ktct.title,kcd.entry_id, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date,kcd.field_id_356 as updated_on')
					->from('kotak_channel_titles as ktct')
					->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
					->where(array('ktct.channel_id'		=>		INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
								  'ktct.site_id'		=>		SITE_ID,
								  'ktct.status'			=>		'open',
								   'kct.status'			=>		'open',
								  'kr.field_id'			=>		INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
					->order_by($order_by, "desc")
					->limit($ARTICLES_LIMIT, $offset);
		
		
		return  $this->db->get()->result();
	}


public function get_articles_by_topic_knowledgevault($topicSlug) {

		$this->db->select('ktct.title, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date, kcd.field_id_338 as knowledgevault')
					->from('kotak_channel_titles as ktct')
					->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
					->where(array('ktct.channel_id'		=>		INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
								  'ktct.site_id'		=>		SITE_ID,
								  'ktct.url_title'		=>		$topicSlug, 
								  'ktct.status'			=>		'open',
								  'kr.field_id'			=>		INSURANCE_GUIDE_TOPIC_RELATIONSHIP,
								  'kcd.field_id_338!='    =>      'None'));
					
		return  $this->db->get()->result();
	}

public function get_articles_by_topic_plan($topicSlug, $offset = 0, $order_by = 'kcd.entry_id', $searchArticle = '') {

		$this->db->select('ktct.title, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date')
					->from('kotak_channel_titles as ktct')
					->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
					->where(array('ktct.channel_id'		=>		INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
								  'ktct.site_id'		=>		SITE_ID,
								  'ktct.url_title'		=>		$topicSlug, 
								  'ktct.status'			=>		'open',
								  'kr.field_id'			=>		INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
					->order_by($order_by, "desc")
					->limit(4, $offset);
		if(!empty($searchArticle)){
			$this->db->where(" ( kct.title LIKE '%$searchArticle%' ESCAPE '!' OR kcd.field_id_157 LIKE '%$searchArticle%' ESCAPE '!') ");
		}
		
		return  $this->db->get()->result();
	}

	// Get articles list based on tag slug
	public function get_articles_by_tag($tagSlug, $offset = 0, $order_by = 'kcd.entry_id', $searchArticle = '') {

		$this->db->select('kctt.title, kctt.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date')
					->from('kotak_channel_titles as ktct')
					->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
					->join('kotak_relationships as krt', 'krt.parent_id = kct.entry_id')
					->join('kotak_channel_titles as kctt', 'kctt.entry_id = krt.child_id')
					->where(array('ktct.channel_id'		=>		INSURANCE_GUIDE_TAGS_CHANNEL_ID, 
								  'ktct.site_id'		=>		SITE_ID,
								  'ktct.url_title'		=>		$tagSlug, 
								  'ktct.status'			=>		'open',
								  'kr.field_id'			=>		INSURANCE_GUIDE_TAG_RELATIONSHIP,
								  'krt.field_id'		=>		INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
					->order_by($order_by, "desc")
					->limit(ARTICLES_LIMIT, $offset);
		if(!empty($searchArticle)){
			$this->db->where(" ( kct.title LIKE '%$searchArticle%' ESCAPE '!' OR kcd.field_id_157 LIKE '%$searchArticle%' ESCAPE '!') ");
		}
		
		return  $this->db->get()->result();
	}

	// Get Tag Details
	public function get_guide_tag_details($tagSlug){
		return  $this->db->select('kct.title')
						->from('kotak_channel_titles as kct')
						->where(array('kct.channel_id'	=>	INSURANCE_GUIDE_TAGS_CHANNEL_ID, 
									  'kct.site_id'		=>	SITE_ID,
									  'kct.url_title'	=>	$tagSlug,
									  'kct.status'		=>	'open'))
						->get()->row();	
	}

	// Get article details
	public function get_article_details($articleSlug){
		return  $this->db->select('kct.entry_id as entry_id, kct.entry_date as entry_date, kct.edit_date as edit_date, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_158 as description, kcd.field_id_159 as article_image, kcd.field_id_317 as article_share_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date, ktcd.field_id_138 as topic_icon, ktct.url_title as topic_url_title, ktct.title as topic_title, kcd.field_id_331 as breadcrumb, kcd.field_id_348 as summary,kcd.field_id_342 as button_1_text,kcd.field_id_343 as button_1_url, kcd.field_id_346 as button_2_text, kcd.field_id_347 as button_2_url, kcd.field_id_354 as also_read_blogs,kcd.field_id_356 as updated_on,kcd.field_id_358 as reviewwritten,kcd.field_id_447 as utmurls')
						->from('kotak_channel_titles as kct')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
						->join('kotak_relationships as kr', 'kr.parent_id = kct.entry_id')					
						->join('kotak_channel_titles as ktct', 'ktct.entry_id = kr.child_id')
						->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
						->where(array('kct.channel_id'	=>	INSURANCE_GUIDE_CHANNEL_ID, 
									  'kct.site_id'		=>	SITE_ID,
									  'kct.url_title'	=>	$articleSlug,
									  'kct.status'		=>	'open',
									  'kr.field_id'		=>	INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
						->get()->row();	
	}

	public function getutmParameters($utm_for){
		return  $this->db->select('utm_id, utm_source, utm_medium, utm_campaign, utm_content, utm_for')
						->from('kotak_utm_parameters as kup')
						->where(array('kup.utm_for'	=>	$utm_for))
						->get()->row();	
	}
	
	// Get next or previous article details
	public function get_prev_next_article($topicSlug, $entry_id, $type = 'previous'){
		$this->db->select('kcd.entry_id, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title')
						->from('kotak_channel_titles as ktct')
						->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
						->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id');
		if($type == 'previous') {
			$this->db->where(array( 'ktct.channel_id'	=>	INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
									'ktct.site_id'		=>	SITE_ID,
									'ktct.url_title'	=>	$topicSlug,
									'kcd.entry_id > '	=>	$entry_id,
									 'kct.status'			=>		'open',
									'ktct.status'		=>	'open',
									'kr.field_id'		=>	INSURANCE_GUIDE_TOPIC_RELATIONSHIP));
		} else {
			$this->db->where(array( 'ktct.channel_id'	=>	INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
									'ktct.site_id'		=>	SITE_ID,
									'ktct.url_title'	=>	$topicSlug,
									'kcd.entry_id < '	=>	$entry_id,
									'kct.status'			=>		'open',
									'ktct.status'		=>	'open',
									'kr.field_id'		=>	INSURANCE_GUIDE_TOPIC_RELATIONSHIP));
		}
		
		return $this->db->get()->row();	
	}

	// Get also article details
	public function get_also_read_articles($topicSlug, $entry_id){
		return $this->db->select('ktct.title as topic_title, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date')
						->from('kotak_channel_titles as ktct')
						->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
						->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
						->where(array( 	'ktct.channel_id'	=>	INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
										'ktct.site_id'		=>	SITE_ID,
										'ktct.url_title'	=>	$topicSlug,
										'kcd.entry_id != '	=>	$entry_id,
										'kct.status'			=>	'open',
										'ktct.status'		=>	'open',
										'kr.field_id'		=>	INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
						->order_by("kct.url_title", "RANDOM")
						->limit(ALSO_READ_LIMIT)
						->get()->result();	
	}


	// Get article tags list
	public function get_article_tags($entry_id){
		return $this->db->select('kct.title as tag_title, kct.url_title as tag_url_title')
						->from('kotak_relationships as kr')
						->join('kotak_channel_titles as kct', 'kct.entry_id = kr.child_id')
						->where(array( 	'kct.channel_id'=>	INSURANCE_GUIDE_TAGS_CHANNEL_ID, 
										'kct.site_id'	=>	SITE_ID,
										'kr.parent_id'	=>	$entry_id,
										'kr.field_id'	=>	172,
										'kct.status'	=>	'open'))
						->order_by("kct.entry_date", "asc")
						->get()->result();
	}

	// Get article tags list
	public function get_article_related_plans($entry_id){
		return $this->db->select('kct.entry_id,kct.title as plan_title,kct.url_title as plan_url_title,kctp.url_title as plan_type_url_title,kcd.field_id_39 as short_description,kcd.field_id_14 as plan_type,kcd.field_id_40 as plan_image')
						->from('kotak_relationships as kr')
						->join('kotak_channel_titles as kct', 'kct.entry_id = kr.child_id')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
						->join('kotak_relationships as krp', 'kcd.entry_id = krp.parent_id')
						->join('kotak_channel_titles as kctp', 'kctp.entry_id = krp.child_id')
						->where(array( 	'kct.channel_id'=>	INSURANCE_PLANS_CHANNEL_ID, 
										'kct.site_id'	=>	SITE_ID,
										'kr.parent_id'	=>	$entry_id,
										'kr.field_id'	=>	INSURANCE_GUIDE_RELATIONSHIP,
										'krp.field_id'	=>	INSURANCE_PLANS_TYPE_RELATIONSHIP,
										'kct.status'	=>	'open'))
						->order_by("kct.entry_date", "asc")
						->get()->result();
	}

//In Related Plans Get Eterm plan online details
public function get_article_related_eterm_plans($entry_id)
{ 
	
	return $this->db->select('kct.entry_id,kct.title as plan_title,kct.url_title as plan_url_title,kctp.url_title as plan_type_url_title,kcd.field_id_39 as short_description,kcd.field_id_14 as plan_type,kcd.field_id_40 as plan_image')
	->from('kotak_relationships as kr')
	->join('kotak_channel_titles as kct', 'kct.entry_id = kr.child_id')
	->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
	->join('kotak_relationships as krp', 'kcd.entry_id = krp.parent_id')
	->join('kotak_channel_titles as kctp', 'kctp.entry_id = krp.child_id')
	->where(array( 	
	'kct.url_title'=>'kotak-e-term-plan-online',
			'kct.channel_id'=>	INSURANCE_PLANS_CHANNEL_ID,
			'kct.site_id'	=>	SITE_ID,
			//'kr.parent_id'	=>	$entry_id,
			'kr.field_id'	=>	INSURANCE_GUIDE_RELATIONSHIP,
			'krp.field_id'	=>	INSURANCE_PLANS_TYPE_RELATIONSHIP,
			'kct.status'	=>	'open'))
			->order_by("kct.entry_date", "asc")
			->limit(1)
			->get()->result();
}

	//Get glossary lists
	public function get_glossaries($keyword = 'a', $offset = 0) {
		$this->db->select('kct.title, kcd.field_id_165 as description')
						->from('kotak_channel_titles as kct')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
						->where(array( 	'kct.channel_id'=>	INSURANCE_GUIDE_GLOSSARY_CHANNEL_ID, 
										'kct.site_id'	=>	SITE_ID,
										'kct.status'	=>	'open'))
						->order_by("kct.title", "asc")
						->limit(GLOSSARY_LIMIT, $offset);
		if(strlen($keyword) > 1){
			$this->db->where(" ( kct.title LIKE '%$keyword%' ESCAPE '!' OR kcd.field_id_165 LIKE '%$keyword%' ESCAPE '!') ");
		}
		else {
			$this->db->like('kct.title', $keyword, 'after');
		}
		
		return $this->db->get()->result();
	}

	//Get faqs lists
	/* public function get_faqs($keyword = '', $offset = 0){
		$this->db->select('kct.title, kcd.field_id_175 as description, kcd.entry_id')
						->from('kotak_channel_titles as kct')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
						->where(array( 	'kct.channel_id'=>	INSURANCE_GUIDE_FAQS_CHANNEL_ID, 
										'kct.site_id'	=>	SITE_ID,
										'kct.status'	=>	'open'))
						->order_by("kct.entry_id", "asc")
						->limit(FAQS_LIMIT, $offset);
		if(!empty($keyword)){
			$this->db->where(" ( kct.title LIKE '%$keyword%' ESCAPE '!' OR kcd.field_id_175 LIKE '%$keyword%' ESCAPE '!') ");
		}

		return $this->db->get()->result();
	}*/
	
	public function get_faqs($keyword = '', $offset = 0){
		$this->db->select('kct.title, kcd.field_id_175 as description, kcd.field_id_337 as faqs_type, kcd.entry_id')
		->from('kotak_channel_titles as kct')
		->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
		->where(array( 'kct.channel_id'=>	INSURANCE_GUIDE_FAQS_CHANNEL_ID,
				'kct.site_id'	=>	SITE_ID,
				'kct.status'	=>	'open',
				'kcd.field_id_337'=>'Policy Related FAQ',
				'kcd.field_id_337!='=>''))
				->order_by("kct.entry_id", "asc")
				->limit(FAQS_LIMIT, $offset);
		if(!empty($keyword)){
			$this->db->where(" ( kct.title LIKE '%$keyword%' ESCAPE '!' OR kcd.field_id_175 LIKE '%$keyword%' ESCAPE '!') ");
		}
	
		return $this->db->get()->result();
	}
	public function get_faqs_general($keyword = '', $offset = 0){
		$this->db->select('kct.title, kcd.field_id_175 as description, kcd.field_id_337 as faqs_type, kcd.entry_id')
		->from('kotak_channel_titles as kct')
		->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
		->where(array( 'kct.channel_id'=>	INSURANCE_GUIDE_FAQS_CHANNEL_ID,
				'kct.site_id'	=>	SITE_ID,
				'kct.status'	=>	'open',
				'kcd.field_id_337'=>'General FAQ',
				'kcd.field_id_337!='=>''))
				->order_by("kct.entry_id", "asc")
				->limit(FAQS_LIMIT, $offset);
		if(!empty($keyword)){
			$this->db->where(" ( kct.title LIKE '%$keyword%' ESCAPE '!' OR kcd.field_id_175 LIKE '%$keyword%' ESCAPE '!') ");
		}
	
		return $this->db->get()->result();
	}

	// Get total channel data count
	public function get_total_channel_data_count($where, $keyword){		
		$this->db->select('kct.entry_id')
				 ->from('kotak_channel_titles as kct')
				 ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
				 ->where($where);
		if(!empty($keyword)){
			$this->db->like('kct.title', $keyword, 'both');
		}

		return $this->db->count_all_results();
	}


	// To update the view count for the visited Article
	public function update_view_count($entry_id, $viewed_count){
		$this->db->update('kotak_channel_data', array('field_id_162' => $viewed_count), array('entry_id' =>	$entry_id, 'channel_id' => INSURANCE_GUIDE_CHANNEL_ID));
		return $this->db->affected_rows();
	}
	
	
	
		public function get_articles_by_topic_count($topicSlug) {

$this->db->select('*')
					->from('kotak_channel_titles as ktct')
					->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
					->where(array('ktct.channel_id'		=>		INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
								  'ktct.site_id'		=>		SITE_ID,
								  'ktct.url_title'		=>		$topicSlug, 
								  'ktct.status'			=>		'open',
								   'kct.status'			=>		'open',
								  'kr.field_id'			=>		INSURANCE_GUIDE_TOPIC_RELATIONSHIP));

		return  $this->db->get()->result();
}

	
	 
	/********New Blog Page****/
	public function get_also_read_articles_new($topicSlug, $entry_id){
		return $this->db->select('ktct.title as topic_title, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date')
						->from('kotak_channel_titles as ktct')
						->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
						->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
						->where(array( 	'ktct.channel_id'	=>	INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
										'ktct.site_id'		=>	SITE_ID,
										'ktct.url_title'	=>	$topicSlug,
										'kcd.entry_id != '	=>	$entry_id,
										'ktct.status'		=>	'open',
										'kr.field_id'		=>	INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
						->order_by("kct.url_title", "RANDOM")
						->limit(4)
						->get()->result();	
	}
	public function get_also_read_articles_all($topicSlug, $entry_id){
		return $this->db->select('ktct.title as topic_title, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date')
						->from('kotak_channel_titles as ktct')
						->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
						->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
						->where(array( 	'ktct.channel_id'	=>	INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
										'ktct.site_id'		=>	SITE_ID,
										'ktct.url_title'	=>	$topicSlug,
										'kcd.entry_id != '	=>	$entry_id,
										'ktct.status'		=>	'open',
										'kr.field_id'		=>	INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
						->order_by("kct.url_title", "RANDOM")
						->get()->result();	
	}



/********New Blog Page****/

	// Get articles list based on topic slug
	public function get_articles_by_topics($topicSlug, $order_by = 'kcd.entry_id', $searchArticle = '') {

		$this->db->select('ktct.title, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date')
					->from('kotak_channel_titles as ktct')
					->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
					->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
					->where(array('ktct.channel_id'		=>		INSURANCE_GUIDE_TOPICS_CHANNEL_ID, 
								  'ktct.site_id'		=>		SITE_ID,
								  'ktct.url_title'		=>		$topicSlug, 
								  'ktct.status'			=>		'open',
								  'kr.field_id'			=>		INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
					->order_by($order_by, "desc")
					->limit(4,0);
		if(!empty($searchArticle)){
			$this->db->where(" ( kct.title LIKE '%$searchArticle%' ESCAPE '!' OR kcd.field_id_157 LIKE '%$searchArticle%' ESCAPE '!') ");
		}
		
		return  $this->db->get()->result();
	}
	
	     public function get_reviewdetails($blog_name) {
	return  $this->db->select('col_id_48 as asfield,col_id_50 as name,col_id_51 as description,col_id_49 as image')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->join('kotak_channel_grid_field_357 as kcg357', 'kcg357.entry_id = kct.entry_id')
					->where(array('kct.channel_id'	=>		75, 
								  'kct.site_id'		=>		SITE_ID,
								  'kcg357.col_id_56'=>$blog_name,
								  'kct.status'		=>		'open'))
					->order_by("kcd.entry_id", "asc")
					->get()->result();
}


    public function get_articles_for_ulip($storylug){
	return  $this->db->select('kct.entry_id as entry_id, kct.entry_date as entry_date, kct.edit_date as edit_date, kct.title as article_title, kct.url_title, kcd.field_id_359 as short_description, kcd.field_id_360 as description, kcd.field_id_361 as article_image, kcd.field_id_364 as viewed_counts, kcd.field_id_362 as posted_date, kcd.field_id_365 as button_text_1,kcd.field_id_366 as button_text_url1,kcd.field_id_367 as button_text_2,kcd.field_id_368 as button_text_url2,kcd.field_id_369 as summary,kcd.field_id_370 as reviewwritten,kcd.field_id_443 as updated_on')
	->from('kotak_channel_titles as kct')
		->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id') 					
		->join('kotak_channel_titles as ktct', 'ktct.entry_id = kcd.entry_id')
		->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
		->where(array('kct.channel_id'	=>	ULIP_PLANS_CHANNEL_ID, 
					  'kct.site_id'		=>	SITE_ID,
					  'kct.url_title'	=>	$storylug,
					  'kct.status'		=>	'open'))
		->get()->row();	
		
}



public function update_view_count_ulip($entry_id, $viewed_count){
		$this->db->update('kotak_channel_data', array('field_id_364' => $viewed_count), array('entry_id' =>	$entry_id, 'channel_id' => ULIP_PLANS_CHANNEL_ID));
		return $this->db->affected_rows();
	}
	
	
	
	 public function get_articles_for_term_insurance($storylug){
	return  $this->db->select('kct.entry_id as entry_id, kct.entry_date as entry_date, kct.edit_date as edit_date, kct.title as article_title, kct.url_title, kcd.field_id_371 as short_description, kcd.field_id_372 as description, kcd.field_id_373 as article_image, kcd.field_id_376 as viewed_counts, kcd.field_id_374 as posted_date, kcd.field_id_378 as button_text_1,kcd.field_id_380 as button_text_url1,kcd.field_id_382 as button_text_2,kcd.field_id_383 as button_text_url2,kcd.field_id_384 as summary,kcd.field_id_386 as reviewwritten,kcd.field_id_441 as updated_on')
	->from('kotak_channel_titles as kct')
		->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id') 					
		->join('kotak_channel_titles as ktct', 'ktct.entry_id = kcd.entry_id')
		->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
		->where(array('kct.channel_id'	=>	TERM_PLANS_CHANNEL_ID, 
					  'kct.site_id'		=>	SITE_ID,
					  'kct.url_title'	=>	$storylug,
					  'kct.status'		=>	'open'))
		->get()->row();	
		
}

public function get_articles_for_rp_insurance($storylug){
	return  $this->db->select('kct.entry_id as entry_id, kct.entry_date as entry_date, kct.edit_date as edit_date, kct.title as article_title, kct.url_title, kcd.field_id_482 as short_description, kcd.field_id_483 as description, kcd.field_id_486 as article_image, kcd.field_id_488 as viewed_counts, kcd.field_id_485 as posted_date, kcd.field_id_489 as button_text_1,kcd.field_id_490 as button_text_url1,kcd.field_id_491 as button_text_2,kcd.field_id_492 as button_text_url2,kcd.field_id_493 as summary,kcd.field_id_494 as reviewwritten,kcd.field_id_496 as updated_on')
	->from('kotak_channel_titles as kct')
		->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id') 					
		->join('kotak_channel_titles as ktct', 'ktct.entry_id = kcd.entry_id')
		->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
		->where(array('kct.channel_id'	=>	RP_PLANS_CHANNEL_ID, 
					  'kct.site_id'		=>	SITE_ID,
					  'kct.url_title'	=>	$storylug,
					  'kct.status'		=>	'open'))
		->get()->row();	
		
}

public function update_view_count_rp_insurance($entry_id, $viewed_count){
	$this->db->update('kotak_channel_data', array('field_id_488' => $viewed_count), array('entry_id' =>	$entry_id, 'channel_id' => RP_PLANS_CHANNEL_ID));
	return $this->db->affected_rows();
}


public function update_view_count_term_insurance($entry_id, $viewed_count){
		$this->db->update('kotak_channel_data', array('field_id_376' => $viewed_count), array('entry_id' =>	$entry_id, 'channel_id' => TERM_PLANS_CHANNEL_ID));
		return $this->db->affected_rows();
	}
	
	
	 public function get_articles_for_savings_plan($storylug){
	return  $this->db->select('kct.entry_id as entry_id, kct.entry_date as entry_date, kct.edit_date as edit_date, kct.title as article_title, kct.url_title, kcd.field_id_377 as short_description, kcd.field_id_379 as description, kcd.field_id_385 as article_image, kcd.field_id_388 as viewed_counts, kcd.field_id_381 as posted_date, kcd.field_id_389 as button_text_1,kcd.field_id_390 as button_text_url1,kcd.field_id_391 as button_text_2,kcd.field_id_392 as button_text_url2,kcd.field_id_393 as summary,kcd.field_id_394 as reviewwritten,kcd.field_id_442 as updated_on')
	->from('kotak_channel_titles as kct')
		->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id') 					
		->join('kotak_channel_titles as ktct', 'ktct.entry_id = kcd.entry_id')
		->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
		->where(array('kct.channel_id'	=>	SAVINGS_PLAN_CHANNEL_ID, 
					  'kct.site_id'		=>	SITE_ID,
					  'kct.url_title'	=>	$storylug,
					  'kct.status'		=>	'open'))
		->get()->row();	
		
}

public function update_view_count_savings_plan($entry_id, $viewed_count){
		$this->db->update('kotak_channel_data', array('field_id_388' => $viewed_count), array('entry_id' =>	$entry_id, 'channel_id' => SAVINGS_PLAN_CHANNEL_ID));
		return $this->db->affected_rows();
	}
	
	
	
	
	
	
	/*happy you*/
public function get_articles_for_happy_you($storylug){

	return $this->db->select('kct.entry_id as entry_id, kct.entry_date as entry_date, kct.edit_date as edit_date, kct.title as article_title, kct.url_title, kcd.field_id_426 as short_description, kcd.field_id_427 as description, kcd.field_id_428 as article_image, kcd.field_id_432 as viewed_counts, kcd.field_id_429 as posted_date, kcd.field_id_433 as button_text_1,kcd.field_id_434 as button_text_url1,kcd.field_id_435 as button_text_2,kcd.field_id_436 as button_text_url2,kcd.field_id_437 as summary,kcd.field_id_440 as reviewwritten,kcd.field_id_444 as updated_on')
	->from('kotak_channel_titles as kct')
		->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id') 					
		->join('kotak_channel_titles as ktct', 'ktct.entry_id = kcd.entry_id')
		->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
		->where(array('kct.channel_id'	=>	HAPPY_YOU_CHANNEL_ID, 
					  'kct.site_id'		=>	SITE_ID,
					  'kct.url_title'	=>	$storylug,
					  'kct.status'		=>	'open'))
		->get()->row();	
		
}


public function update_view_count_happy_you($entry_id, $viewed_count){

	$this->db->update('kotak_channel_data', array('field_id_432' => $viewed_count), array('entry_id' =>	$entry_id, 'channel_id' => HAPPY_YOU_CHANNEL_ID));
	return $this->db->affected_rows();
}
// Get articles list based on topic slug
	public function get_articles_by_topic_for_happy($topicSlug, $offset = 0, $order_by = 'kcd.entry_id', $searchArticle = '',$article_limit) {

		  $this->db->select('ktct.title,ktct.status as status, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_426 as short_description, kcd.field_id_427 as description, kcd.field_id_428 as article_image, kcd.field_id_432 as viewed_counts, kcd.field_id_429 as posted_date')
		->from('kotak_channel_titles as kct')
			->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id') 					
			->join('kotak_channel_titles as ktct', 'ktct.entry_id = kcd.entry_id')
			->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
			->where(array('kct.channel_id'	=>	HAPPY_YOU_CHANNEL_ID, 
						  'kct.site_id'		=>	SITE_ID,
						  'kct.status'		=>	'open'))
    ->order_by($order_by, "desc")
    ->limit($article_limit, $offset);

		
		return  $this->db->get()->result();
	}
	
	
	
	public function get_also_read_articles_newhappy($topicSlug, $entry_id){
		return $this->db->select('ktct.title as topic_title, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_426 as short_description, kcd.field_id_427 as description, kcd.field_id_428 as article_image, kcd.field_id_432 as viewed_counts, kcd.field_id_429 as posted_date')
						->from('kotak_channel_titles as ktct')
						->join('kotak_relationships as kr', 'ktct.entry_id = kr.child_id')
						->join('kotak_channel_data as kcd', 'kcd.entry_id = kr.parent_id')
						->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
						->where(array( 	'ktct.channel_id'	=>	HAPPY_YOU_CHANNEL_ID, 
										'ktct.site_id'		=>	SITE_ID,
										'ktct.url_title'	=>	$topicSlug,
										'kcd.entry_id != '	=>	$entry_id,
										'ktct.status'		=>	'open',
										'kr.field_id'		=>	INSURANCE_GUIDE_TOPIC_RELATIONSHIP))
						->order_by("kct.url_title", "RANDOM")
						->limit(4)
						->get()->result();	
	}
	
	 public function get_articles_for_investment_plans($storylug){
	return  $this->db->select('kct.entry_id as entry_id, kct.entry_date as entry_date, kct.edit_date as edit_date, kct.title as article_title, kct.url_title, kcd.field_id_445 as short_description, kcd.field_id_446 as description, kcd.field_id_447 as article_image, kcd.field_id_450 as viewed_counts, kcd.field_id_448 as posted_date, kcd.field_id_451 as button_text_1,kcd.field_id_452 as button_text_url1,kcd.field_id_453 as button_text_2,kcd.field_id_354 as button_text_url2,kcd.field_id_455 as summary,kcd.field_id_457 as reviewwritten,kcd.field_id_459 as updated_on')
	->from('kotak_channel_titles as kct')
		->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id') 					
		->join('kotak_channel_titles as ktct', 'ktct.entry_id = kcd.entry_id')
		->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
		->where(array('kct.channel_id'	=>	84, 
					  'kct.site_id'		=>	SITE_ID,
					  'kct.url_title'	=>	$storylug,
					  'kct.status'		=>	'open'))
		->get()->row();	
		
}
public function update_view_count_investment_plans($entry_id, $viewed_count){
		$this->db->update('kotak_channel_data', array('field_id_450' => $viewed_count), array('entry_id' =>	$entry_id, 'channel_id' => 84));
		return $this->db->affected_rows();
	}
}
