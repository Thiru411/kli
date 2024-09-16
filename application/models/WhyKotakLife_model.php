<?php defined('BASEPATH') OR exit('No direct script access allowed');

class WhyKotakLife_model extends CI_Model  {
	
	function __construct(){
        parent::__construct();
    }
	/*Why Kotak Life Home*/
	public function get_WhyKotakHome($channel_id){
		return  $this->db->select('kct.title, kct.url_Title, kcd.field_id_179 as menuTitle, kcd.field_id_180 as menuDescription, kcd.field_id_181 as menuUrlLink, kcd.field_id_182 as menuSmallImg, kcd.field_id_183 as menuPublicImg, kcd.field_id_184 as menuHeading')
					->from('kotak_channel_data as kcd')
					->join('kotak_channel_titles as kct', 'kct.entry_id = kcd.entry_id')
					->where(array('kcd.channel_id'=>$channel_id, 'kcd.site_id'=>SITE_ID))
					->get()->result();
	}
	/*Why Kotak Life Home*/
	
	/*Contact Us Queries*/
	public function get_contactUs_generalFeedbackDD(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>130))
					->get()->row();
	}
	
	public function get_SRgroups($channel_id) {
        return $this->db->select('distinct(field_id_320) as srgroups,entry_id')
                        ->from('kotak_channel_data')
                        ->where(array('channel_id' => $channel_id, 'site_id' => SITE_ID))
                        ->order_by("field_id_320", "asc")
                        ->get()->result();
    }
	 public function get_SRTypes($channel_id, $srgroupId) {
        return $this->db->select('kct.entry_id as srtype_id,kct.title as srtype_title,kr.relationship_id,ktcd.entry_id as srgroup_id')
                        ->from('kotak_channel_titles as kct')
                        ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                        ->join('kotak_relationships as kr', 'kr.parent_id = kct.entry_id')
                        ->join('kotak_channel_titles as ktct', 'ktct.entry_id = kr.child_id')
                        ->join('kotak_channel_data as ktcd', 'ktcd.entry_id = ktct.entry_id')
                        ->where(array('kct.channel_id' => $channel_id,
                            'kct.site_id' => SITE_ID,
                            'kr.field_id' => SR_GROUP_RELATIOSHIP_ID,
                            //'ktct.title' => $srgroup,
                            'ktcd.entry_id' => $srgroupId,
                            'kct.status' => 'open'))
                        ->order_by("kct.entry_date", "asc")
                        ->get()->result();
    }
	 public function get_SRCategoryName($channel_id, $entry_id) {
        if ($channel_id == SR_GROUP_CHANNEL_ID) {
            $selectFields = 'field_id_320 as srgroupname';
        } else if ($channel_id == SR_TYPE_CHANNEL_ID) {
            $selectFields = 'field_id_321 as srtypename';
        } else {
            $selectFields = "";
        }
        if ($entry_id) {
            $cond = array('entry_id = ' => $entry_id);
        }
        return $this->db->select($selectFields)
                        ->from('kotak_channel_data')
                        ->where(array('channel_id' => $channel_id, 'site_id' => SITE_ID))
                        ->where($cond)
                        ->get()->result();
    }
		
	
	public function get_States($channel_id){
		return  $this->db->select('distinct(field_id_154) as states')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->order_by("field_id_154", "asc")
					->get()->result();
	}
	
	public function get_Cities($channel_id,$state){
		return  $this->db->select('distinct(field_id_148) as cities')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID, 'field_id_154'=>$state))
					->order_by("field_id_148", "asc")
					->get()->result();
	}
	
	public function get_MapResult($channel_id="",$city=""){
		return  $this->db->select('kcd.field_id_145 as branchArea, kcd.field_id_146 as add1, kcd.field_id_147 as add2, kcd.field_id_150 as pincode, kcd.field_id_151 as stdCode, kcd.field_id_152 as branchPhone, kcd.field_id_148 as city, kcd.field_id_154 as state,kcd.field_id_173 as latitude,kcd.field_id_174 as longitude')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')	
					->where(array('kct.channel_id' => $channel_id, 'kct.site_id' => SITE_ID, 'kct.status' => 'open','kcd.field_id_148'=>$city))
                    ->order_by("kcd.entry_id", "asc")					
					->get()->result();
					
	}
	
	public function get_MapResultByPincode($channel_id,$pincode){
		return  $this->db->select('kcd.field_id_145 as branchArea, kcd.field_id_146 as add1, kcd.field_id_147 as add2, kcd.field_id_150 as pincode, kcd.field_id_151 as stdCode, kcd.field_id_152 as branchPhone, kcd.field_id_148 as city, kcd.field_id_154 as state,kcd.field_id_173 as latitude,kcd.field_id_174 as longitude')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')	
					->where(array('kct.channel_id' => $channel_id, 'kct.site_id' => SITE_ID, 'kct.status' => 'open','kcd.field_id_150'=>$pincode))
                    ->order_by("kcd.entry_id", "asc")
					->get()->result();
	}
	
	public function insert_request_contactUsNew($postData, $postDataChannelTitle) {
        $insertedChannelEntryId = $this->_insert_channel_title($postDataChannelTitle);
        if (isset($insertedChannelEntryId) && $insertedChannelEntryId != null && $insertedChannelEntryId > 0) {
            $postData['entry_id'] = $insertedChannelEntryId;
            $this->db->insert('kotak_channel_data', $postData);
            if (isset($insertedChannelEntryId) && $insertedChannelEntryId > 0 && $insertedChannelEntryId) {
                //insert to relation table SR GROUP and SR TYPE
                $srgroup_relation_data = array("parent_id" => $insertedChannelEntryId,
                    "child_id" => $postData['field_id_323'],
                    "field_id" => SR_GROUP_FIELD_ID);
                $srgroupfield_id = $this->db->insert('kotak_relationships', $srgroup_relation_data);
                $srtype_relation_data = array("parent_id" => $insertedChannelEntryId,
                    "child_id" => $postData['field_id_324'],
                    "field_id" => SR_TYPE_FIELD_ID);
                $srtypefield_id = $this->db->insert('kotak_relationships', $srtype_relation_data);
                if ((!empty($srgroupfield_id)) && (!empty($srtypefield_id))) {
                    return $insertedChannelEntryId;
                }
            }
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
	/*Contact Us Queries*/
	
	/*About Us Queries*/
	public function get_AboutUs_VisionMission($channel_id){
		return  $this->db->select('field_id_113 as photo, field_id_114 as missionTitle, field_id_115 as missionDescription')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->get()->result();
	}
	
	public function get_AboutUs_OurValues($channel_id){
		return  $this->db->select('field_id_116 as ourvaluesTitle, field_id_117 as ourvaluesDescription')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->get()->result();
	}
	
	public function get_AboutUs_BoardOfDirectors($channel_id){
		/*return  $this->db->select('field_id_118 as boardofDirectorsPhoto, field_id_119 as boardofDirectorsName, field_id_120 as boardofDirectorsCompanyName, field_id_121 as boardofDirectorsDesignation, field_id_122 as boardofDirectorsIntro')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->get()->result();
	}*/
	return  $this->db->select('kotak_channel_data.field_id_118 as boardofDirectorsPhoto, kotak_channel_data.field_id_119 as boardofDirectorsName, kotak_channel_data.field_id_120 as boardofDirectorsCompanyName, kotak_channel_data.field_id_121 as boardofDirectorsDesignation,kotak_channel_data.field_id_122 as boardofDirectorsIntro,kotak_channel_data.field_id_123 as gaCat')
					->from('kotak_channel_data')
					->join('kotak_channel_titles as kct', 'kct.entry_id=kotak_channel_data.entry_id')
					->where(array('kotak_channel_data.channel_id'=>$channel_id, 'kotak_channel_data.site_id'=>SITE_ID,'kct.status' => 'open'))
					->order_by('kotak_channel_data.field_id_460', 'asc')
					->get()->result();
}
	public function get_AboutUs_KeyPeople($channel_id) {
        return $this->db->select('kcd.field_id_123 as keyPeoplePhoto, kcd.field_id_124 as keyPeopleName, kcd.field_id_125 as keyPeopleCompanyName, kcd.field_id_126 as keyPeopleDesignation, kcd.field_id_127 as keyPeopleIntro')
                        ->from('kotak_channel_titles as kct')
                        ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                        ->where(array('kct.channel_id' => $channel_id, 'kct.site_id' => SITE_ID, 'kct.status' => 'open'))
                        /*->order_by("kcd.entry_id", "desc")*/
                        /*->order_by("kct.entry_date", "desc")*/
						->order_by("kcd.field_id_352", "asc")
						->get()->result();
    }

	
	public function get_growth_chart(){
		return  $this->db->select('field_id_295 as growth_year, field_id_296 as growth_item')
					->from('kotak_channel_data')
					->where(array('channel_id'=>64, 'site_id'=>SITE_ID))
					->get()->result();
	}
	/*About Us Queries*/
	
	public function get_testimonial($channel_id){
		return  $this->db->select('field_id_66 as testimonial_photo, field_id_67 as testimonial_description, field_id_68 as testimonial_name, field_id_267 as department_name, field_id_268 as college_name')
		                 ->from('kotak_channel_titles as kct')
                         ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					     ->where(array('kct.channel_id' => $channel_id, 'kct.site_id' => SITE_ID, 'kct.status' => 'open'))
					     ->order_by("kcd.entry_id", "desc")
					     ->get()->result();
	}
	
	public function get_our_culture($channel_id){
		/*return  $this->db->select('field_id_51 as ourCulture_heading, field_id_52 as ourCulture_description, field_id_53 as ourCulture_image')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->get()->result();*/
		return $this->db->select('kcd.field_id_51 as ourCulture_heading, kcd.field_id_52 as ourCulture_description, kcd.field_id_53 as ourCulture_image')
                        ->from('kotak_channel_titles as kct')
                        ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                        ->where(array('kct.channel_id' => $channel_id, 'kct.site_id' => SITE_ID, 'kct.status' => 'open'))
                        ->order_by("kcd.entry_id", "asc")
                        ->get()->result();
			
	}
	
	public function get_great_place_to_work_title($channel_id){
		return  $this->db->select('field_id_65 as great_place_to_work_title')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->get()->result();
	}
	
	public function get_best_employee($channel_id){
		return  $this->db->select('field_id_58 as best_employee_photo, field_id_59 as best_employee_name, field_id_60 as best_employee_designation')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->get()->result();
	}
	
	public function get_great_place_to_work_content($channel_id){
		return  $this->db->select('field_id_61 as great_place_to_work_content, field_id_62 as great_place_to_work_image')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->get()->result();
	}
	
	public function get_great_place_to_work_gallery($channel_id){
		return  $this->db->select('field_id_63 as great_place_to_work_img_desc, field_id_64 as great_place_to_work_img_url')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->get()->result();
	}
	
	
	/*Corporate Governance Queries*/
	public function get_financial_year(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>25))
					->get()->row();
	}
	
	public function get_financial_year_annual_report(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>29))
					->get()->row();
	}
	public function get_financial_year_annual_return(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>336))
					->get()->row();
	}
	public function get_public_dis($channel_id){
		//field_id_27 as public_disclosure_description,		
		 return $this->db->select('kcd.field_id_25 as financial_year, kcd.field_id_26 as public_disclosure_title,kcd.field_id_28 as public_disclosure_pdf')
                        ->from('kotak_channel_titles as kct')
                        ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                        ->where(array('kct.channel_id' => $channel_id, 'kct.site_id' => SITE_ID, 'kct.status' => 'open'))
                        ->order_by("kcd.entry_id", "desc")
                        ->get()->result();

	}
	
	public function get_public_dis_policies_codes($channel_id){
		/*return $this->db->select('kcd.field_id_33 as policies_title, kcd.field_id_34 as policies_pdf_url')
			->from('kotak_channel_titles as kct')
			->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
			->where(array('kct.channel_id' => $channel_id, 'kct.site_id' => SITE_ID,'kct.status'=>'open'))
			->order_by("kcd.entry_id", "desc")
			->get()->result();*/
		
		return $this->db->select('kcd.field_id_33 as policies_title, kcd.field_id_34 as policies_pdf_url')
                        ->from('kotak_channel_titles as kct')
                        ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                        ->where(array('kct.channel_id' => $channel_id, 'kct.site_id' => SITE_ID, 'kct.status' => 'open'))
                        ->order_by("kcd.entry_id", "desc")
                        ->get()->result();
	}
	
	public function get_public_dis_news_events($channel_id){
		return  $this->db->select('field_id_35 as ne_title, field_id_36 as ne_date, field_id_37 as ne_description, field_id_38 as ne_file_url,field_id_92 as newsEventsyear')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->order_by("entry_id", "desc")
					->get()->result();
	}
	
	public function get_public_dis_annual_reports($channel_id){
		/*return  $this->db->select('field_id_29 as annual_report_year, field_id_30 as annual_report_description, field_id_31 as annual_report_pdfurl, field_id_32 as annual_report_img')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->order_by("entry_id", "desc")
					->get()->result();*/
					
					return $this->db->select('kcd.field_id_29 as annual_report_year, kcd.field_id_30 as annual_report_description,kcd.field_id_31 as annual_report_pdfurl, kcd.field_id_32 as annual_report_img')
                        ->from('kotak_channel_titles as kct')
                        ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                        ->where(array('kct.channel_id' => $channel_id, 'kct.site_id' => SITE_ID, 'kct.status' => 'open'))
                        ->order_by("kct.entry_date", "desc")
                        ->get()->result();

	}
	
	/*Annual Returns*/
	public function get_public_dis_annual_returns($channel_id){
		/*return  $this->db->select('field_id_29 as annual_report_year, field_id_30 as annual_report_description, field_id_31 as annual_report_pdfurl, field_id_32 as annual_report_img')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->order_by("entry_id", "desc")
					->get()->result();*/
					
					return $this->db->select('kcd.field_id_336 as annual_return_year, kcd.field_id_333 as annual_return_description,kcd.field_id_334 as annual_return_pdfurl, kcd.field_id_335 as annual_return_img')
                        ->from('kotak_channel_titles as kct')
                        ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                        ->where(array('kct.channel_id' => $channel_id, 'kct.site_id' => SITE_ID, 'kct.status' => 'open'))
                        ->order_by("kct.entry_date", "desc")
                        ->get()->result();

	}
	
	/*Corporate Governance Queries*/
	
	/*Media Center*/
	public function get_kli_in_news($channel_id,$current_year,$flag,$entry_id=""){
		if($flag==1){$cond = array('field_id_100'=>$current_year);}else{$cond = array('field_id_100 != '=>$current_year);}
		if($entry_id){$cond = array('entry_id != '=>$entry_id);}
		return  $this->db->select('field_id_70 as kli_date, field_id_71 as kli_title, field_id_97 as kli_pdf_url,entry_id')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->where($cond)
					->get()->result();
	}
	
	public function get_kli_in_newsArchives($channel_id,$entry_id="",$year="",$limit = "", $offeset = 0){
		if($entry_id){$cond = array('entry_id != '=>$entry_id);}else{$cond = array();}
		if($year){$cond = array('field_id_107 = '=>$year);}
		$this->db->select('field_id_83 as kli_date, field_id_84 as kli_title, field_id_85 as kli_pdf_url, field_id_106 as month, field_id_107 as year, field_id_108 as publication, field_id_178 as dateNew, field_id_102 as urlLink, entry_id')
		->from('kotak_channel_data')
		->where(array('channel_id' => $channel_id, 'site_id' => SITE_ID))
		->where($cond)
		->order_by("field_id_107 desc");
	
	// Use a CASE statement for ordering by month
	$this->db->order_by("CASE WHEN field_id_106 = 'January' THEN 1 
							   WHEN field_id_106 = 'February' THEN 2 
							   WHEN field_id_106 = 'March' THEN 3 
							   WHEN field_id_106 = 'April' THEN 4 
							   WHEN field_id_106 = 'May' THEN 5 
							   WHEN field_id_106 = 'June' THEN 6 
							   WHEN field_id_106 = 'July' THEN 7 
							   WHEN field_id_106 = 'August' THEN 8 
							   WHEN field_id_106 = 'September' THEN 9 
							   WHEN field_id_106 = 'October' THEN 10 
							   WHEN field_id_106 = 'November' THEN 11 
							   WHEN field_id_106 = 'December' THEN 12 
							   ELSE 99 END", 'desc');
							   $this->db->order_by("field_id_408 desc");
	
	if (!empty($limit)) {
		$this->db->limit($limit, $offeset);
	}
	
	return $this->db->get()->result();
	
	}
	
	public function get_MediaKit($channel_id){
		return  $this->db->select('field_id_79 as mediaKit_description, field_id_80 as mediaKit_PDF')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->get()->result();
	}
	
	public function get_ourCampaigns($channel_id){
		return  $this->db->select('field_id_75 as ourCamp_description, field_id_76 as ourCamp_vediolink, field_id_77 as ourCamp_imgurl, field_id_94 as financialYear')
					->from('kotak_channel_data')
					->where(array('channel_id'=>$channel_id, 'site_id'=>SITE_ID))
					->order_by("entry_id", "desc")
					->get()->result();
	}
	
	public function get_pressReleases($channel_id){
		$results = $this->db->select('field_id_79 as pressRelease_date, field_id_80 as pressRelease_description, field_id_81 as pressRelease_pdf, field_id_93 as financialYear')
		->from('kotak_channel_data')
		->where(array('channel_id' => $channel_id, 'site_id' => SITE_ID))
		->get()
		->result();
		usort($results, function ($a, $b) {
			$dateA = strtotime($a->pressRelease_date);
			$dateB = strtotime($b->pressRelease_date);
		
			return $dateB - $dateA;
		});
		
		return $results;
	}
	
	public function get_ourCampaignsDD(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>94))
					->get()->row();
	}
	
	public function get_pressReleasesDD(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>93))
					->get()->row();
	}
	
	public function get_kliNewsMonths(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>99))
					->get()->row();
	}
	
	public function get_kliNewsYear(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>100))
					->get()->row();
	}
	
	public function get_kliNewsPublication(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>101))
					->get()->row();
	}
	
	public function get_mediaCenterNewsDetails($entry_id){
		return  $this->db->select('field_id_70 as kliNewsDate,field_id_95 as kliNewsHeadline,field_id_96 as kliNewsSource,field_id_97 as kliNewsImage,field_id_98 as kliNewsContent,field_id_99 as kliNewsMonth,field_id_100 as kliNewsYear,field_id_101 as kliNewsPublication,entry_id')
					->from('kotak_channel_data')
					->where(array('site_id'=>SITE_ID,'entry_id'=>$entry_id))
					->order_by("entry_id", "desc")
					->get()->result();
	}
	
	public function get_mediaCenterNewsDetailsArchives($entry_id){
		return  $this->db->select('field_id_83 as kliNewsDate,field_id_102 as kliNewsHeadline,field_id_103 as kliNewsSource,field_id_104 as kliNewsImage,field_id_105 as kliNewsContent,field_id_106 as kliNewsMonth,field_id_107 as kliNewsYear,field_id_108 as kliNewsPublication, entry_id')
					->from('kotak_channel_data')
					->where(array('site_id'=>SITE_ID,'entry_id'=>$entry_id))
					->order_by("entry_id", "desc")
					->get()->result();
	}
	/*Media Center*/
	
		/**
     * Save a file
     *
     * @param array $data Associative array of data to save, if ID exists, the item
     * 	will be updated, not added
     * @return bool|int Either FALSE if something went wrong or the ID of the item
     */
    public function save_file($data = array()) {
        $successful = TRUE;

// Define valid array keys as keys to use in array_intersect_key
        $valid_keys = array(
            'file_id' => '',
            'site_id' => SITE_ID,
            'title' => $data['title'],
            'upload_location_id' => $data['upload_location_id'],
            'mime_type' => $data['mime_type'],
            'file_name' => $data['file_name'],
            'file_size' => $data['file_size'],
            'description' => '',
            'credit' => '',
            'location' => '',
            'uploaded_by_member_id' => MEMBER_ID,
            'upload_date' => time(),
            'modified_by_member_id' => MEMBER_ID,
            'modified_date' => time(),
            'file_hw_original' => '',
        );

// Remove data that can't exist in the database
        $data = array_intersect_key($data, $valid_keys);

        if (isset($data['file_name']) OR isset($data['title'])) {
            $data['title'] = (!isset($data['title'])) ? $data['file_name'] : $data['title'];
        }

        $this->db->insert('files', $data);

// Figure out the file_id
        $file_id = (isset($data['file_id'])) ? $data['file_id'] : $this->db->insert_id();

// Check to see if the file_id is valid
        $successful = (is_numeric($file_id) AND $file_id > 0) ? $file_id : FALSE;

        return $successful;
    }
	
	
	/*
     * Update the Table information
     */

    public function update_table_data($tablename, $data, $where) {
        $this->db->where($where);
        $this->db->update($tablename, $data);
	}
    
}