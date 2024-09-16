<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_stories_model extends CI_Model  {
	
	function __construct() {
        parent::__construct();
    }
	
	public function get_stories_details($storylug){
	return  $this->db->select('*')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id') 					
					->join('kotak_channel_titles as ktct', 'ktct.entry_id = kcd.entry_id')
					->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
					->where(array('kct.channel_id'	=>	INSURANCE_STORIES_CHANNEL_ID, 
								  'kct.site_id'		=>	SITE_ID,
								  'kct.url_title'	=>	$storylug,
								  'kct.status'		=>	'open'))
					->get()->row();	
					
}
public function get_stories_all(){
	$query=  $this->db->select('*')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id') 					
					->join('kotak_channel_titles as ktct', 'ktct.entry_id = kcd.entry_id')
					->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
					->where(array('kct.channel_id'	=>	INSURANCE_STORIES_CHANNEL_ID, 
								  'kct.site_id'		=>	SITE_ID,
								  'kct.status'		=>	'open'))
					->get();
								  return $result = $query->result();
					


}
function getarticles(){
	return  $this->db->select('kct.entry_id as entry_id, kct.title, kct.url_title as titlename, kcd.field_id_157 as article_description, kcd.field_id_159 as article_image, kcd.field_id_162 as viewed_count, kcd.field_id_163 as posted_date, ktcd.field_id_138 as topic_icon, ktct.url_title as topic_url_title, ktct.title as topic_name')
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
	public function get_episodes($entryId,$get_episodes) {
		if($get_episodes!=''){
			$entryId = secure_input_data( $entryId );
		return  $this->db->select('col_id_55 as image, col_id_52 as title, col_id_54 as description, col_id_53 as short_description')
					->from('kotak_channel_grid_field_405')
					->where(array('entry_id'	=>	$entryId,'col_id_52'=>$get_episodes))
					->order_by("row_order", "asc")
					->get()->result();
		}else{
			$entryId = secure_input_data( $entryId );
			return  $this->db->select('col_id_55 as image, col_id_52 as title, col_id_54 as description, col_id_53 as short_description')
						->from('kotak_channel_grid_field_405')
						->where(array('entry_id'	=>	$entryId))
						->order_by("row_order", "asc")
						->limit(4)
						->get()->result();	
		}
		
	}
	public function update_view_count_stories($entry_id, $viewed_count){
		$this->db->update('kotak_channel_data', array('field_id_403' => $viewed_count), array('entry_id' =>	$entry_id, 'channel_id' =>INSURANCE_STORIES_CHANNEL_ID ));
		return $this->db->affected_rows();
	}
}
	 