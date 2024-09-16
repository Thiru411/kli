<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LifeAdvisor_model extends CI_Model  {
	
	function __construct(){
        parent::__construct();
    }
	/*Life Advisor Landing Page*/
	public function get_SuccessStories(){
		return  $this->db->select('field_id_287 as name, field_id_288 as company_name, field_id_289 as designation, field_id_290 as short_description, field_id_291 as description, field_id_292 as profile_img')
					->from('kotak_channel_data')
					->where(array('channel_id'=>LA_SUCCESS_STORIES, 'site_id'=>SITE_ID))
					->get()->result();
	}
	/*Life Advisor Landing Page*/
	
	public function get_ExecutiveAdvisors(){
		return  $this->db->select('field_id_293 as name, field_id_294 as profile_img')
					->from('kotak_channel_data')
					->where(array('channel_id'=>LA_OUR_EXECUTIVE, 'site_id'=>SITE_ID))
					->get()->result();
	}
	
	public function get_OurExcutiveAdvisors($keyword = 'a', $offset = 0) {        
        $this->db->select('kct.title, kcd.field_id_293 as name,kcd.field_id_294 as profile_img')
                ->from('kotak_channel_titles as kct')
                ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                ->where(array('kct.channel_id' => LA_OUR_EXECUTIVE,
                    'kct.site_id' => SITE_ID,
                    'kct.status' => 'open'))
                ->order_by("name", "asc")
                ->limit(EXECUTIVEADVISOR_LIMIT, $offset);
        if (strlen($keyword) > 1) {
            $this->db->where(" ( kct.title LIKE '%$keyword%' ESCAPE '!' OR kcd.field_id_293 LIKE '%$keyword%' ESCAPE '!') ");
        } else {
            $this->db->like('kcd.field_id_293', $keyword, 'after');
        }
        return $this->db->get()->result();
    }
	
	public function get_LifeAdvisorFAQs(){
		return  $this->db->select('field_id_297 as question, field_id_298 as answer')
					->from('kotak_channel_data')
					->where(array('channel_id'=>LA_FAQs, 'site_id'=>SITE_ID))
					->get()->result();
	}
	
	public function get_HomeVideos(){
		return  $this->db->select('field_id_299 as youtube_video_id, field_id_300 as title, field_id_301 as shortDescription')
					->from('kotak_channel_data')
					->where(array('channel_id'=>66, 'site_id'=>SITE_ID))
					->get()->result();
	}
}