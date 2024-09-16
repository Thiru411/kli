<?php defined('BASEPATH') OR exit('No direct script access allowed');

class HowDoI_model extends CI_Model  {
	
	function __construct(){
        parent::__construct();
    }
	
	/*Stages of My Application*/
	public function get_StagesOfApplications($channel_id){
		return  $this->db->select('kcd.field_id_202 as videoTitle, kcd.field_id_203 as videoLink')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'=>$channel_id, 'kct.site_id'=>SITE_ID,'kct.status' => 'open'))
					->get()->result();
	}
	/*Stages of My Application*/
	
	/*Fund Performance*/
	public function bind_yearDD(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>208))
					->get()->row();
	}
	
	public function get_AnnaulFundPerformance($channel_id){
		return  $this->db->select('kcd.field_id_208 as fundPerformanceYear, kcd.field_id_209 as fundDescription, kcd.field_id_210 as downloadPDF, kcd.field_id_211 as smallImage')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'=>$channel_id, 'kct.site_id'=>SITE_ID,'kct.status' => 'open'))
					->get()->result();
	}
	
	public function get_FundPerformance($channel_id){
		return  $this->db->select('kcd.field_id_204 as fundPerformanceYear, kcd.field_id_205 as fundMonthYear, kcd.field_id_207 as downloadPDF, kcd.field_id_206 as smallImage')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'=>$channel_id, 'kct.site_id'=>SITE_ID,'kct.status' => 'open'))
					->get()->result();
	}
	/*Fund Performance*/
	
	/*Pay My Premium*/
	public function get_payMyPremium($channel_id){
		return  $this->db->select('kcd.field_id_110 as paymentMode, kcd.field_id_200 as paymentInfo,kcd.field_id_398 as premium_image')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'=>$channel_id, 'kct.site_id'=>SITE_ID,'kct.status' => 'open'))
					->get()->result();
	}
	
	public function get_payMyPremiumFAQ($channel_id){
		return  $this->db->select('kcd.field_id_128 as faqQuestion, kcd.field_id_201 as faqAnswer')
		            ->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'=>$channel_id, 'kct.site_id'=>SITE_ID,'kct.status' => 'open'))
					->get()->result();
	}
	/*Pay My Premium*/
	
	/*Download Application Forms*/
	public function bind_applicationFormTab(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>212))
					->get()->row();
	}
	
	public function get_applicationForms($channel_id, $form_type) {
        return $this->db->select('kcd.field_id_213 as formTitle, kcd.field_id_212 as formType, kcd.field_id_214 as formPDF')                       
                        ->from('kotak_channel_titles as kct')
                        ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                        ->where(array('kct.channel_id' => $channel_id, 'kcd.field_id_212' => $form_type, 'kct.site_id' => SITE_ID, 'kct.status' => 'open'))
						->order_by("kcd.entry_id", "desc")
                        ->get()->result();
    }

	/*Download Application Forms*/
	
	/*Get Policy Brochure*/
	public function bind_policyBrochureTab(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>215))
					->get()->row();
	}
	
	public function get_policyBrochure($channel_id,$form_type){
		return  $this->db->select('kcd.field_id_216 as formTitle, kcd.field_id_215 as formType, kcd.field_id_217 as formPDF')
		            ->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')				
					->where(array('kct.channel_id'=>$channel_id,'kcd.field_id_215'=>$form_type, 'kct.site_id'=>SITE_ID,'kct.status' => 'open'))
					->order_by("kcd.entry_id", "desc")
					->get()->result();
	}
	/*Get Policy Brochure*/
	
	/*Get Policy Document Specimen*/
	public function bind_policyDocumentSpecimenTab(){
		return  $this->db->select('field_list_items')
					->from('kotak_channel_fields')
					->where(array('field_id'=>218))
					->get()->row();
	}
	
	public function get_policyDocumnetSpecimen($channel_id,$form_type){		
					
		 return $this->db->select('kcd.field_id_219 as formTitle, kcd.field_id_218 as formType, kcd.field_id_220 as formPDF')                      
                        ->from('kotak_channel_titles as kct')
                        ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                        ->where(array('kct.channel_id' => $channel_id, 'kcd.field_id_218' => $form_type, 'kct.site_id' => SITE_ID, 'kct.status' => 'open'))
                        ->get()->result();
	}
	/*Get Policy Document Specimen*/
	
	/*File Claim*/
	public function get_fileClaimFAQs($channel_id,$claimType){
		return  $this->db->select('kcd.field_id_221 as claimType, kcd.field_id_222 as faqQuestion, kcd.field_id_223 as faqAnswer')					
					  ->from('kotak_channel_titles as kct')
					  ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					  ->where(array('kct.channel_id'=>$channel_id,'kcd.field_id_221'=>$claimType, 'kct.site_id'=>SITE_ID,'kct.status' => 'open'))
					  ->get()->result();
	}
	
	public function get_claimList($channel_id,$claimSection){
		return  $this->db->select('kcd.field_id_224 as claimSection, kcd.field_id_225 as smallImg, kcd.field_id_226 as claimType, kcd.field_id_227 as claimShortDesc,kcd.entry_id')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'=>$channel_id,'kcd.field_id_224'=>$claimSection, 'kct.site_id'=>SITE_ID,'kct.status' => 'open'))					
					->get()->result();
	}
	
	public function get_claimDetails($channel_id,$entry_id){
		return  $this->db->select('kcd.field_id_224 as claimSection, kcd.field_id_225 as smallImg, kcd.field_id_226 as claimType, kcd.field_id_227 as claimShortDesc,kcd.field_id_228 as claimDescription,kcd.field_id_229 as claimDocumentsToSubmit,kcd.field_id_231 as additionalInfo')
					->from('kotak_channel_titles as kct')
					->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
					->where(array('kct.channel_id'=>$channel_id,'kcd.entry_id'=>$entry_id,'kct.site_id'=>SITE_ID,'kct.status' => 'open'))					
					->get()->result();
	}
	
	public function get_plan_eligibility_info($entryId) {
		return  $this->db->select('col_id_30 as pdfTitle, col_id_31 as pdfUrl, col_id_32 as pdfUrl2, col_id_33 as note')
					->from('kotak_channel_grid_field_230')
					->where(array('entry_id'	=>	$entryId))
					->order_by("row_order", "asc")
					->get()->result();
	}
	/*File Claim*/
	
	public function get_applicationForms_surrender($channel_id, $form_type) {
        return $this->db->select('kcd.field_id_424 as formTitle, kcd.field_id_423 as formType, kcd.field_id_425 as formPDF')                       
                        ->from('kotak_channel_titles as kct')
                        ->join('kotak_channel_data as kcd', 'kcd.entry_id = kct.entry_id')
                        ->where(array('kct.channel_id' => $channel_id, 'kcd.field_id_423' => $form_type, 'kct.site_id' => SITE_ID, 'kct.status' => 'open'))
						->order_by("kcd.entry_id", "desc")
                        ->get()->result();
    }
}