<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rss_model extends CI_Model {
    function __construct(){
        parent::__construct();

    }
    public function get_articles_by_topic($topicSlug) {

		$query= $this->db->select('ktct.title,kcd.entry_id, ktct.url_title as topic_url_title, kct.title as article_title, kct.url_title, kcd.field_id_157 as short_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date')
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
					->order_by("entry_id", "desc")
                    ->get();
                    return $query->result();
		
		
	}
}
