<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fund_performance extends CI_Controller {
	public $DB2;

	//data variable
	private $data = array();
	
	function __construct() {
		parent::__construct();
		$this->DB2= $this->load->database("second_db", TRUE);

		//Load Libraries
		$this->load->database();
		$this->load->helper('security'); //for xss clean up
		$this->load->helper('common'); //for checking menu active
		$this->load->model('fund_performance_model');
		
		//Load Initial Breadcrumbs
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Life Insurance', site_url());
		
		//Load the common CSS files
		$this->data['CSS_FILES'] = unserialize(CSS_FILES);
		//Load module specific CSS File
		//array_push($this->data['CSS_FILES'], 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css');
		
		//Load the common JS files
		$this->data['JS_FILES'] = unserialize(JS_FILES);
		//Load module specific JS File
		array_push($this->data['JS_FILES'], 'https://code.highcharts.com/highcharts.js', 'assets/js/need-help-buying-a-plan.js', 'assets/js/jqueryui_1.11.4_jquery-ui.min.js', 'assets/js/fund-performance.js');
	}
	
	//Insurance Guide Landing
	public function landing() {
		
		// Get Most Recent articles of the Week
		$this->data['moduleInfo'] = $this->fund_performance_model->get_all_modules();

		/* Life Advisor */
		$this->load->model('requestlifeadvisor_model');
		$this->data['lifeAdvisorCities'] = $this->requestlifeadvisor_model->get_cities(); //get Cities
		$this->data['lifeAdvisorCustomers'] = unserialize(CUSTOMERS); //get Customers from contants.php
		$choiceOfPlans = $this->requestlifeadvisor_model->get_plans(); //get Plans
		$this->data['lifeAdvisorPlans'] = explode("\n", $choiceOfPlans->field_list_items);
			
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Fund Performance');
		
		//Set template Title
		$this->template->set('title', 'Fund Performance');
		
		//Load the view file
		$this->template->load('template/template', 'fund_performance/landing_view', $this->data);
			
	}
	//NAV Performance Landing
	public function nav_performance_landing($slug = '', $startDate = 0, $endDate = 0) {
        set_time_limit(300);
	//	array_push($this->data['JS_FILES'], 'https://code.highcharts.com/highcharts.js', 'assets/js/need-help-buying-a-plan.js', 'assets/js/jqueryui_1.11.4_jquery-ui.min.js', 'assets/js/fund-performance.js');

		$this->data['latest_nav_data']=0;
		$latest_nav_data=0;
		$slug = secure_input_data($slug);
		$startDate = secure_input_data($startDate);
		$endDate = secure_input_data($endDate);
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Fund Performance', base_url(FP_MODULE_LINK));
		$this->breadcrumb->add_crumb('NAV Performance');
		
		//Set template Title
		$this->template->set('title', 'Fund Performance - NAV Performance');

		// Get Module Info
		$moduleCode = $this->uri->segment(2);
		$this->data['moduleInfo'] = $this->fund_performance_model->get_module_details($moduleCode);

		// Redirect to Landing Page if Module not exists
		if(count((array)$this->data['moduleInfo']) == 0) {
			redirect(base_url(FP_MODULE_LINK), 'refresh');
		}

		/* Latest NAV Scheme Section */
		// $srecentdata	=	$this->fund_performance_model->get_nav_recent_date('scheme');
		// $fundRecords	=	array();
		// $sLastDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT, time());
		// $sNextDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT, time());
		// if(count($srecentdata)){
		// 	$recent_date 	= 	$srecentdata->fp_date;
		// 	$start 			= 	strtotime(date('Y-m-d 00:00:00', $recent_date));
		// 	$end 			= 	strtotime(date('Y-m-d 23:59:59', $recent_date));
		// 	$schemeRecords	=	$this->fund_performance_model->get_latest_nav_reports('scheme', $start, $end);
		// 	$sLastDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT,  $recent_date);
		// 	$sNextDate 		= 	!empty($srecentdata->next_fp_date)? date(FUND_PERFORMANCE_DATE_FORMAT, $srecentdata->next_fp_date) : '';
		// }
		// $this->data['schemeRecords']= 	$schemeRecords;
		// $this->data['sLastDate']	= 	$sLastDate;
		// $this->data['sNextDate']	= 	$sNextDate;

		$this->data['pdfReportURL']	=	base_url(FP_MODULE_LINK.'/nav-performance/pdf-report/'.$slug.'/'.$startDate.'/'.$endDate);


		/* Latest NAV Fund Section */
		// $frecentdata	=	$this->fund_performance_model->get_nav_recent_date('fund');
		// $fundRecords	=	array();
		// $fLastDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT, time());
		// $fNextDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT, time());
		// if(count($frecentdata)){
		// 	$recent_date 	= 	$frecentdata->fp_date;
		// 	$start 			= 	strtotime(date('Y-m-d 00:00:00', $recent_date));
		// 	$end 			= 	strtotime(date('Y-m-d 23:59:59', $recent_date));
		// 	$fundRecords	=	$this->fund_performance_model->get_latest_nav_reports('fund', $start, $end);
		// 	$fLastDate 		=	date(FUND_PERFORMANCE_DATE_FORMAT,  $recent_date);
		// 	$fNextDate 		= 	!empty($frecentdata->next_fp_date)? date(FUND_PERFORMANCE_DATE_FORMAT, $frecentdata->next_fp_date) : '';
		// }
		// $this->data['fundRecords']	= 	$fundRecords;
		// $this->data['fLastDate']	= 	$fLastDate;
		// $this->data['fNextDate']	= 	$fNextDate;

		// $latest_nav_data = array(	'schemeRecords' => $schemeRecords,
		// 							'sLastDate' => $sLastDate,
		// 							'sNextDate' => $sNextDate,
		// 							'fundRecords' => $fundRecords,
		// 							'fLastDate' => $fLastDate,
		// 							'fNextDate' => $fNextDate);


		/* Previous Nav Section */
		
		$schemeSlug = 	(!empty($slug))? $slug : '';
		$startDate	=	$startDate? date(DATE_PICKER_FORMAT, strtotime($startDate)) : '';
		$endDate	=	$endDate? date(DATE_PICKER_FORMAT, strtotime($endDate)) : '';
		$disable_graph_view	=	0;
			
		$nav_performances = array();
		$table_view 	= 	array();
		$date_values	=	array();
		$nifty_values	=	array();
		$nav_values		=	array();
		$gtable_view 	=	array();
		//if(!empty($startDate) && !empty($endDate)) {

			$schemes = $this->fund_performance_model->get_scheme_details($slug);
			$scheme_name = '';
			$scheme_type = '';
			if($schemes){
				$scheme_name =	$schemes->title;
				$scheme_type =	$schemes->scheme_type;
			}
			$schemes = $this->fund_performance_model->get_all_schemes();
			$this->data['schemes'] = array(""=>"Select Scheme or Fund");
			foreach ($schemes as $scheme) {
				$this->data['schemes'][$scheme->url_title] = ucwords($scheme->title).' ('.ucwords($scheme->scheme_id).')';
				if(($schemeSlug == $scheme->url_title) && ($scheme->type == 'fund')){
					$disable_graph_view = 1;
				}
			}

			$this->data['startDate']	=	$startDate;
			$this->data['endDate']		=	$endDate;
			$this->data['schemeSlug']	=	$schemeSlug;

			$this->data['disable_graph_view']	=	$disable_graph_view;


			$start 		=	strtotime(date('Y-m-d 00:00:00', strtotime($startDate)));
			$end 		=	strtotime(date('Y-m-d 23:59:59', strtotime($endDate)));
			//$start 		=	strtotime(date('d-m-Y 00:00:00', strtotime($startDate)));
		    //$end 		=	strtotime(date('d-m-Y 23:59:59', strtotime($endDate)));
			$nav_performances = $this->fund_performance_model->get_latest_nav_reports($schemeSlug, $start, $end);

			$syear 	= date('Y', $start);
			$smonth = date('m', $start);
			$eyear 	= date('Y', $end);
			$emonth	= date('m', $end);

			$ydiff 	=	$eyear - $syear;
			$mdiff 	=	$emonth - $smonth;

			$diff = abs(strtotime($endDate) - strtotime($startDate));

			$ydiff = floor($diff / (365*60*60*24));
			$mdiff = floor(($diff - $ydiff * 365*60*60*24) / (30*60*60*24));
			//$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));		

			if(count($nav_performances)){
				$i 				=	0;
				foreach ($nav_performances as $np) {
					$fp_date 	=	date(DATE_PICKER_FORMAT, $np->fp_date);
					$table_view[$i]['nifty_value']	=	number_format($np->nifty_value,1);
					$table_view[$i]['nav_value']	=	$scheme_type == 'fund'? number_format($np->nav_value, 2) : number_format($np->nav_value, 4);
					$table_view[$i]['date_value']	=	$fp_date;

					$tdate_values[$i]	=	$fp_date;
					$tnifty_values[$i]	=	floatval($np->nifty_value);
					$tnav_values[$i]	=	floatval($np->nav_value);

					$i++;
				}

				//Set Start Value
				$gtable_view[0]['title']		=	'Start';
				$gtable_view[0]['nifty_value']	=	number_format($tnifty_values[0],1);
				$gtable_view[0]['nav_value']	=	number_format($tnav_values[0], 4);
				$gtable_view[0]['date_value']	=	$tdate_values[0];

				//Set High Value
				$hi 							=	array_search(max($tnav_values), $tnav_values);
				$gtable_view[1]['title']		=	'High';
				$gtable_view[1]['nifty_value']	=	number_format($tnifty_values[$hi],1);
				$gtable_view[1]['nav_value']	=	number_format($tnav_values[$hi], 4);
				$gtable_view[1]['date_value']	=	$tdate_values[$hi];

				//Set Low Value
				$li 							=	array_search(min($tnav_values), $tnav_values);
				$gtable_view[2]['title']		=	'Low';
				$gtable_view[2]['nifty_value']	=	number_format($tnifty_values[$li], 1);
				$gtable_view[2]['nav_value']	=	number_format($tnav_values[$li],4);
				$gtable_view[2]['date_value']	=	$tdate_values[$li];


				// Set End Value 
				$ci 							=	count($tnifty_values) - 1;
				$gtable_view[3]['title']		=	'End';
				$gtable_view[3]['nifty_value']	=	number_format($tnifty_values[$ci],1);
				$gtable_view[3]['nav_value']	=	number_format($tnav_values[$ci],4);
				$gtable_view[3]['date_value']	=	$tdate_values[$ci];
			
				// Set First & Last Value 
				$fstart =	(int) date('Ymd', strtotime($startDate));
				$lstart =	(int) date('Ymd', strtotime($endDate));
				$i 		=	0;
				foreach ($nav_performances as $key => $np) {

					$fp_date = (int) date('Ymd', $np->fp_date);
					if($fstart == $fp_date){
						$date_values[$i]	=	date(DATE_PICKER_FORMAT, $np->fp_date);
						$nifty_values[$i]	=	floatval($np->nifty_value);
						$nav_values[$i]		=	floatval($np->nav_value);
						unset($nav_performances[$key]);
						$i++;
					} else {
						//echo ' NO  NP Date => '.$fp_date.'<br>';
					}
				}
				
				$nav_performance_count = count($nav_performances);
				if($ydiff == 0){ // Less than one year
					if($mdiff == 0 || $nav_performance_count <= 25){
						foreach ($nav_performances as $np) {
							$date_values[$i]	=	date(DATE_PICKER_FORMAT, $np->fp_date);
							$nifty_values[$i]	=	floatval($np->nifty_value);
							$nav_values[$i]		=	floatval($np->nav_value);
							$i++;
						}
					} else if($mdiff >= 1 AND $mdiff <= 3){
						$nth_date = 10;
						$j = 1;
						foreach ($nav_performances as $np) {
							if($j == $nth_date){
								$date_values[$i]	=	date(DATE_PICKER_FORMAT, $np->fp_date);
								$nifty_values[$i]	=	floatval($np->nifty_value);
								$nav_values[$i]		=	floatval($np->nav_value);
								$i++;
								$j = 1;
							} else {
								$j++;
							}
						}

					} else if($mdiff >= 4 AND $mdiff <= 9){

						$nth_date = 15;
						$j = 1;
						foreach ($nav_performances as $np) {
							if($j == $nth_date){
								$date_values[$i]	=	date(DATE_PICKER_FORMAT, $np->fp_date);
								$nifty_values[$i]	=	floatval($np->nifty_value);
								$nav_values[$i]		=	floatval($np->nav_value);
								$i++;
								$j = 1;
							} else {
								$j++;
							}
						}

					} else if($mdiff >= 10 AND $mdiff <= 12){
						$day_months = array();
						foreach ($nav_performances as $np) {
							$day_date = (int) date('m', $np->fp_date);
							if (!in_array($day_date, $day_months)) {
								$date_values[$i]	=	date(DATE_PICKER_FORMAT, $np->fp_date);
								$nifty_values[$i]	=	floatval($np->nifty_value);
								$nav_values[$i]		=	floatval($np->nav_value);
								$i++;
								array_push($day_months, $day_date);
							}
						}

					}
				} else if($ydiff == 1 OR $ydiff == 2){  //Greater than 1 Year and less than equal to 2 Years
					$day_months = array();
					foreach ($nav_performances as $np) {
						$day_date = (int) date('m', $np->fp_date);
						$day_dates = (int) date('Ym', $np->fp_date);
						$day_date_3 = ($day_date % 3);
						if ($day_date_3 == 0 && !in_array($day_dates, $day_months)) {
							$date_values[$i]	=	date(DATE_PICKER_FORMAT, $np->fp_date);
							$nifty_values[$i]	=	floatval($np->nifty_value);
							$nav_values[$i]		=	floatval($np->nav_value);
							$i++;
							array_push($day_months, $day_dates);
						}
					}
				} else if($ydiff >= 3) { //Greater than 2 Years 
					$day_months = array();
					foreach ($nav_performances as $np) {
						$day_date = (int) date('m', $np->fp_date);
						$day_dates = (int) date('Ym', $np->fp_date);
						$day_date_6 = ($day_date % 6);
						if ($day_date_6 == 0 && !in_array($day_dates, $day_months)) {
							$date_values[$i]	=	date(DATE_PICKER_FORMAT, $np->fp_date);
							$nifty_values[$i]	=	floatval($np->nifty_value);
							$nav_values[$i]		=	floatval($np->nav_value);
							$i++;
							array_push($day_months, $day_dates);
						}
					}
				} else { // Wrong year diff value

				}

				foreach ($nav_performances as $key => $np) {
					$fp_date = (int) date('Ymd', $np->fp_date);
					$lbdate  = (int) date('Ymd', strtotime($date_values[count($date_values)-1])); 
					if($lstart == $fp_date && $lstart != $lbdate){
						$date_values[$i]	=	date(DATE_PICKER_FORMAT, $np->fp_date);
						$nifty_values[$i]	=	floatval($np->nifty_value);
						$nav_values[$i]		=	floatval($np->nav_value);
						unset($nav_performances[$key]);
						$i++;
					}
				}
			}
		//}


		$this->data['table_view']		=	$table_view;
		$this->data['nifty_values']		=	json_encode($nifty_values, true);
		$this->data['nav_values']		=	json_encode($nav_values, true);
		$this->data['date_values']		=	json_encode($date_values, true);
		$this->data['latest_nav_data']	=	json_encode($latest_nav_data, true);
		$this->data['gtable_view']		=	$gtable_view;

		//Load the view file
		$this->template->load('template/template', 'fund_performance/nav_performance_landing_view', $this->data);
			
	}
	
		// Generate PDF File 
	public function common_pdf_file($schemeSlug, $startDate, $endDate){
		
         set_time_limit(300);
		$schemeSlug = secure_input_data($schemeSlug);
		$startDate = secure_input_data($startDate);
		$endDate = secure_input_data($endDate);


		$this->data['startDate']	=	$startDate;
		$this->data['endDate']		=	$endDate;
		$this->data['schemeSlug']	=	$schemeSlug;

		$schemes = $this->fund_performance_model->get_scheme_details($schemeSlug);
		$scheme_name = '';
		$scheme_type = '';
		if(count($schemes)){
			$scheme_name =	$schemes->title;
			$scheme_type =	$schemes->scheme_type;
		}
		

		//$start 		=	strtotime(date('Y-m-d 00:00:00', strtotime($startDate)));
		//$end 		=	strtotime(date('Y-m-d 23:59:59', strtotime($endDate)));
		
		$start 		=	strtotime(date('d-m-Y 00:00:00', strtotime($startDate)));
		$end 		=	strtotime(date('d-m-Y 23:59:59', strtotime($endDate)));

		$nav_performances = $this->fund_performance_model->get_latest_nav_reports($schemeSlug, $start, $end);

		$table_view 	= 	array();

		if(count($nav_performances)){			
			$i 				=	0;
			foreach ($nav_performances as $np) {
				$fp_date 	=	date(DATE_PICKER_FORMAT, $np->fp_date);
				//$table_view[$i]['nifty_value']	=	number_format($np->nifty_value,1);/*commented for nifty*/
				$table_view[$i]['nifty_value']="";
				$table_view[$i]['nav_value']	=	$scheme_type == 'fund'? number_format($np->nav_value, 2) : number_format($np->nav_value, 4);
				$table_view[$i]['date_value']	=	date('jS M Y ', strtotime($fp_date));
				$i++;
			}
		}

		$page_title = 'NAV Performance Analysis for '.$scheme_name;
		
		if(count($table_view)){
			$this->load->library('pdf');
			$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

			$subtitle = '('.date('jS M Y', strtotime($startDate)).' to '.date('jS M Y', strtotime($endDate)).')';

			// set document information
			$pdf->SetCreator(PDF_CREATOR);
			$pdf->SetAuthor('Kotak Insurance Team');
			$pdf->SetTitle($page_title);
			$pdf->SetSubject($subtitle);
			if($scheme_type == 'fund'){
				$pdf->SetKeywords('Policy Account Value, Date');
			} else {
				$pdf->SetKeywords('NIFTY, NAV, Report Date');
			}

			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

			// set margins
			$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
			$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
			$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

			// set auto page breaks
			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

			// set image scale factor
			$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

			// add a page
			$pdf->AddPage();

			// set font
			$pdf->SetFont('helvetica', '', 12);

			// column titles
			if($scheme_type == 'fund'){
				$header = array('S.No.', 'Date', 'Policy Account Value');
			} else {
				//$header = array('S.No.', 'Date', 'NAV', 'NIFTY');
				$header = array('S.No.', 'Date', 'NAV'); /*commented for nifty*/
			}

			$pdf->Ln();
			// print colored table
			//$this->ColoredTable($header, $table_view);

			// Colors, line width and bold font
        	// Header
			$pdf->SetFillColor(218, 37, 28);
			$pdf->SetTextColor(255);
			$pdf->SetDrawColor(9,55,104);
			$pdf->SetLineWidth(0.3);
			$pdf->SetFont('', 'B');
			// Header
			if($scheme_type == 'fund'){
				$w = array(40, 70, 70);
			} else {
				//$w = array(40, 47, 48, 45);/*commented for nifty*/
				$w = array(40, 70, 70);
			}
			

			//Undo adding the row.
            $pdf->rollbackTransaction(true);
            //Adds a bottom line onto the current page. 
            //Note: May cause page break itself.
            $pdf->Cell(array_sum($w), 0, '', 'T');

            $pdf->Ln();

			$num_headers = count($header);
			for($i = 0; $i < $num_headers; ++$i) {
				$pdf->Cell($w[$i], 15, $header[$i], 1, 0, 'C', 1);
			}
			$pdf->Ln();
			// Color and font restoration
			$pdf->SetFillColor(224, 235, 255);
			$pdf->SetTextColor(0);
			$pdf->SetFont('');
			// Data
			$fill = 0;
			$j = 1;
			foreach($table_view as $row) {
				//Get current number of pages.
	        	$num_pages = $pdf->getNumPages();
            	$pdf->startTransaction();	
	          if($scheme_type == 'fund'){
				$pdf->Cell($w[0], 10, $j, 'LR', 0, 'C', $fill);
				$pdf->Cell($w[1], 10, $row['date_value'], 'LR', 0, 'C', $fill);
				$pdf->Cell($w[2], 10, $row['nav_value'], 'LR', 0, 'C', $fill);
				$pdf->Ln();
			 } else {
			 	$pdf->Cell($w[0], 10, $j, 'LR', 0, 'C', $fill);
				$pdf->Cell($w[1], 10, $row['date_value'], 'LR', 0, 'C', $fill);
				$pdf->Cell($w[2], 10, $row['nav_value'], 'LR', 0, 'C', $fill);
				//$pdf->Cell($w[3], 10, $row['nifty_value'], 'LR', 0, 'C', $fill);	/*commented for nifty*/		
				$pdf->Ln();
			 }

				//If old number of pages is less than the new number of pages,
	            //we hit an automatic page break, and need to rollback.
	            if($num_pages < $pdf->getNumPages())
	            {
	                //Undo adding the row.
	                $pdf->rollbackTransaction(true);
	                //Adds a bottom line onto the current page. 
	                //Note: May cause page break itself.
	                $pdf->Cell(array_sum($w), 0, '', 'T');

	                $pdf->Ln();

	                //Draw the header.	                
	                // Colors, line width and bold font
		        	// Header
					$pdf->SetFillColor(218, 37, 28);
					$pdf->SetTextColor(255);
					$pdf->SetDrawColor(9,55,104);
					$pdf->SetLineWidth(0.3);
					$pdf->SetFont('', 'B');
					// Header
					//$w = array(40, 47, 48, 45);
					$num_headers = count($header);
					for($i = 0; $i < $num_headers; ++$i) {
						$pdf->Cell($w[$i], 15, $header[$i], 1, 0, 'C', 1);
					}
					$pdf->Ln();
					// Color and font restoration
					$pdf->SetFillColor(224, 235, 255);
					$pdf->SetTextColor(0);
					$pdf->SetFont('');


	                //Re-do the row.
	                 if($scheme_type == 'fund'){
						$pdf->Cell($w[0], 10, $j, 'LR', 0, 'C', $fill);
						$pdf->Cell($w[1], 10, $row['date_value'], 'LR', 0, 'C', $fill);
						$pdf->Cell($w[2], 10, $row['nav_value'], 'LR', 0, 'C', $fill);
						$pdf->Ln();
					 } else {
					 	$pdf->Cell($w[0], 10, $j, 'LR', 0, 'C', $fill);
						$pdf->Cell($w[1], 10, $row['date_value'], 'LR', 0, 'C', $fill);
						$pdf->Cell($w[2], 10, $row['nav_value'], 'LR', 0, 'C', $fill);
						//$pdf->Cell($w[3], 10, $row['nifty_value'], 'LR', 0, 'C', $fill);/*commented for nifty*/	
						$pdf->Ln();			
					 }
	            }
	            else
	            {
	                //Otherwise we are fine with pdf row, discard undo history.
	                $pdf->commitTransaction();
	            }

				$fill=!$fill;
				$j++;
			}
			$pdf->Cell(array_sum($w), 0, '', 'T');


			$pdf->SetTitle('Kotak Insurance NAV Performance Analysis');
			$pdf->SetPrintHeader(false);
			$pdf->SetPrintFooter(false);
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('Kotak Insurance Team');
			$pdf->SetDisplayMode('real', 'default');
			$filename = $page_title.'_'.date('d-m-Y', strtotime($startDate)).'_to_'.date('d-m-Y', strtotime($endDate)).'.pdf';
			$pdf->Output($filename, 'I');
		} else {
			echo NO_RECORDS_FOUND; die;
		}

	}
	
	// Generate PDF File 
	public function generate_pdf_file($schemeSlug, $startDate, $endDate){
		set_time_limit(500);
	   $schemeSlug = secure_input_data($schemeSlug);
	   $startDate = secure_input_data($startDate);
	   $endDate = secure_input_data($endDate);


	   $this->data['startDate']	=	$startDate;
	   $this->data['endDate']		=	$endDate;
	   $this->data['schemeSlug']	=	$schemeSlug;

	   $schemes = $this->fund_performance_model->get_scheme_details($schemeSlug);
	   $scheme_name = '';
	   $scheme_type = '';
	   if(($schemes)){
		   $scheme_name =	$schemes->title;
		   $scheme_type =	$schemes->scheme_type;
	   }
	   

	   //$start 		=	strtotime(date('Y-m-d 00:00:00', strtotime($startDate)));
	   //$end 		=	strtotime(date('Y-m-d 23:59:59', strtotime($endDate)));
	   
	   $start 		=	strtotime(date('d-m-Y 00:00:00', strtotime($startDate)));
	   $end 		=	strtotime(date('d-m-Y 23:59:59', strtotime($endDate)));

	   $nav_performances = $this->fund_performance_model->get_latest_nav_reports($schemeSlug, $start, $end);

	   $table_view 	= 	array();

	   if($nav_performances){			
		   $i 				=	0;
		   foreach ($nav_performances as $np) {
			   $fp_date 	=	date(DATE_PICKER_FORMAT, $np->fp_date);
			   //$table_view[$i]['nifty_value']	=	number_format($np->nifty_value,1);/*commented for nifty*/
			   $table_view[$i]['nifty_value']="";
			   $table_view[$i]['nav_value']	=	$scheme_type == 'fund'? number_format($np->nav_value, 2) : number_format($np->nav_value, 4);
			   $table_view[$i]['date_value']	=	date('jS M Y ', strtotime($fp_date));
			   $i++;
		   }
	   }

	   $page_title = 'NAV Performance Analysis for '.$scheme_name;
	   if($table_view){
		
		   $this->load->library('pdf');
		   
		   $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		   $subtitle = '('.date('jS M Y', strtotime($startDate)).' to '.date('jS M Y', strtotime($endDate)).')';

		   // set document information
		   $pdf->SetCreator(PDF_CREATOR);
		   $pdf->SetAuthor('Kotak Insurance Team');
		   $pdf->SetTitle($page_title);
		   $pdf->SetSubject($subtitle);
		   if($scheme_type == 'fund'){
			   $pdf->SetKeywords('Policy Account Value, Date');
		   } else {
			   $pdf->SetKeywords('NIFTY, NAV, Report Date');
		   }

		   // set header and footer fonts
		   $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		   $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		   // set default monospaced font
		   $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		   // set margins
		   $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		   $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		   $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		   // set auto page breaks
		   $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		   // set image scale factor
		   $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		   // add a page
		   $pdf->AddPage();

		   // set font
		   $pdf->SetFont('helvetica', '', 12);

		   // column titles
		   if($scheme_type == 'fund'){
			   $header = array('S.No.', 'Date', 'Policy Account Value');
		   } else {
			   //$header = array('S.No.', 'Date', 'NAV', 'NIFTY');
			   $header = array('S.No.', 'Date', 'NAV'); /*commented for nifty*/
		   }

		   $pdf->Ln();
		   // print colored table
		   //$this->ColoredTable($header, $table_view);

		   // Colors, line width and bold font
		   // Header
		   $pdf->SetFillColor(218, 37, 28);
		   $pdf->SetTextColor(255);
		   $pdf->SetDrawColor(9,55,104);
		   $pdf->SetLineWidth(0.3);
		   $pdf->SetFont('', 'B');
		   // Header
		   if($scheme_type == 'fund'){
			   $w = array(40, 70, 70);
		   } else {
			   //$w = array(40, 47, 48, 45);/*commented for nifty*/
			   $w = array(40, 70, 70);
		   }
		   

		   //Undo adding the row.
		   $pdf->rollbackTransaction(true);
		   //Adds a bottom line onto the current page. 
		   //Note: May cause page break itself.
		   $pdf->Cell(array_sum($w), 0, '', 'T');

		   $pdf->Ln();

		   $num_headers = count($header);
		   for($i = 0; $i < $num_headers; ++$i) {
			   $pdf->Cell($w[$i], 15, $header[$i], 1, 0, 'C', 1);
		   }
		   $pdf->Ln();
		   // Color and font restoration
		   $pdf->SetFillColor(224, 235, 255);
		   $pdf->SetTextColor(0);
		   $pdf->SetFont('');
		   // Data
		   $fill = 0;
		   $j = 1;
		   foreach($table_view as $row) {
			   //Get current number of pages.
			   $num_pages = $pdf->getNumPages();
			   $pdf->startTransaction();	
			 if($scheme_type == 'fund'){
			   $pdf->Cell($w[0], 10, $j, 'LR', 0, 'C', $fill);
			   $pdf->Cell($w[1], 10, $row['date_value'], 'LR', 0, 'C', $fill);
			   $pdf->Cell($w[2], 10, $row['nav_value'], 'LR', 0, 'C', $fill);
			   $pdf->Ln();
			} else {
				$pdf->Cell($w[0], 10, $j, 'LR', 0, 'C', $fill);
			   $pdf->Cell($w[1], 10, $row['date_value'], 'LR', 0, 'C', $fill);
			   $pdf->Cell($w[2], 10, $row['nav_value'], 'LR', 0, 'C', $fill);
			   //$pdf->Cell($w[3], 10, $row['nifty_value'], 'LR', 0, 'C', $fill);	/*commented for nifty*/		
			   $pdf->Ln();
			}

			   //If old number of pages is less than the new number of pages,
			   //we hit an automatic page break, and need to rollback.
			   if($num_pages < $pdf->getNumPages())
			   {
				   //Undo adding the row.
				   $pdf->rollbackTransaction(true);
				   //Adds a bottom line onto the current page. 
				   //Note: May cause page break itself.
				   $pdf->Cell(array_sum($w), 0, '', 'T');

				   $pdf->Ln();

				   //Draw the header.	                
				   // Colors, line width and bold font
				   // Header
				   $pdf->SetFillColor(218, 37, 28);
				   $pdf->SetTextColor(255);
				   $pdf->SetDrawColor(9,55,104);
				   $pdf->SetLineWidth(0.3);
				   $pdf->SetFont('', 'B');
				   // Header
				   //$w = array(40, 47, 48, 45);
				   $num_headers = count($header);
				   for($i = 0; $i < $num_headers; ++$i) {
					   $pdf->Cell($w[$i], 15, $header[$i], 1, 0, 'C', 1);
				   }
				   $pdf->Ln();
				   // Color and font restoration
				   $pdf->SetFillColor(224, 235, 255);
				   $pdf->SetTextColor(0);
				   $pdf->SetFont('');


				   //Re-do the row.
					if($scheme_type == 'fund'){
					   $pdf->Cell($w[0], 10, $j, 'LR', 0, 'C', $fill);
					   $pdf->Cell($w[1], 10, $row['date_value'], 'LR', 0, 'C', $fill);
					   $pdf->Cell($w[2], 10, $row['nav_value'], 'LR', 0, 'C', $fill);
					   $pdf->Ln();
					} else {
						$pdf->Cell($w[0], 10, $j, 'LR', 0, 'C', $fill);
					   $pdf->Cell($w[1], 10, $row['date_value'], 'LR', 0, 'C', $fill);
					   $pdf->Cell($w[2], 10, $row['nav_value'], 'LR', 0, 'C', $fill);
					   //$pdf->Cell($w[3], 10, $row['nifty_value'], 'LR', 0, 'C', $fill);/*commented for nifty*/	
					   $pdf->Ln();			
					}
			   }
			   else
			   {
				   //Otherwise we are fine with pdf row, discard undo history.
				   $pdf->commitTransaction();
			   }

			   $fill=!$fill;
			   $j++;
		   }
		   $pdf->Cell(array_sum($w), 0, '', 'T');


		   $pdf->SetTitle('Kotak Insurance NAV Performance Analysis');
		   $pdf->SetPrintHeader(false);
		   $pdf->SetPrintFooter(false);
		   $pdf->SetHeaderMargin(30);
		   $pdf->SetTopMargin(20);
		   $pdf->setFooterMargin(20);
		   $pdf->SetAutoPageBreak(true);
		   $pdf->SetAuthor('Kotak Insurance Team');
		   $pdf->SetDisplayMode('real', 'default');
		   $filename = $page_title.'_'.date('d-m-Y', strtotime($startDate)).'_to_'.date('d-m-Y', strtotime($endDate)).'.pdf';
		   $pdf->Output($filename, 'I');
	   } else {
		   echo NO_RECORDS_FOUND; die;
	   }

   }

	// Colored table
	public function ColoredTable($header,$data) {
		// Colors, line width and bold font
		$this->SetFillColor(255, 0, 0);
		$this->SetTextColor(255);
		$this->SetDrawColor(128, 0, 0);
		$this->SetLineWidth(0.3);
		$this->SetFont('', 'B');
		// Header
		$w = array(40, 35, 40, 45);
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
		}
		$this->Ln();
		// Color and font restoration
		$this->SetFillColor(224, 235, 255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = 0;
		foreach($data as $row) {
			$this->Cell($w[0], 6, $row[0], 'LR', 0, 'L', $fill);
			$this->Cell($w[1], 6, $row[1], 'LR', 0, 'L', $fill);
			$this->Cell($w[2], 6, number_format($row[2]), 'LR', 0, 'R', $fill);
			$this->Cell($w[3], 6, number_format($row[3]), 'LR', 0, 'R', $fill);
			$this->Ln();
			$fill=!$fill;
		}
		$this->Cell(array_sum($w), 0, '', 'T');
	}

	//Fund Update Landing
	public function fund_update_landing($year = '2024') {
		$this->data['moduleInfo']=0;
		$year = secure_input_data($year);
		
		if($year == 0){
			$year = date('Y') - 1;
		}

		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Fund Performance', base_url(FP_MODULE_LINK));
		$this->breadcrumb->add_crumb('Fund Update');
		
		//Set template Title
		$this->template->set('title', 'Fund Performance - Fund Update');

		// Get Module Info
		$moduleCode = $this->uri->segment(2);
		$this->data['moduleInfo'] = $this->fund_performance_model->get_module_details($moduleCode);

		// Redirect to Landing Page if Module not exists
		if(count((array)$this->data['moduleInfo']) == 0) {
			redirect(base_url(FP_MODULE_LINK), 'refresh');
		}

		$this->data['year']	=	$year;
		$this->data['years']=	array();
		for($i = date('Y'); $i >= 2014 ; $i--){
			$this->data['years'][$i] = $i;
		}

		$this->data['yearRecord']	=	$this->fund_performance_model->get_fp_updates($year, 'year');
		$this->data['monthRecords']	=	$this->fund_performance_model->get_fp_updates($year, 'month');
		
		//Load the view file
		$this->template->load('template/template', 'fund_performance/fund_update_landing_view', $this->data);
			
	}

	//Investment Fund FAQ Landing
	/*
	public function investment_fund_faqs_landing() {
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Fund Performance', base_url(FP_MODULE_LINK));
		$this->breadcrumb->add_crumb('Investment Fund FAQs');
		
		//Set template Title
		$this->template->set('title', 'Fund Performance - Investment Fund FAQs');
		
		//Load the view file
		$this->template->load('template/template', 'fund_performance/fund_faqs_landing_view', $this->data);
			
	}
	*/

	//Investment Philosophy Landing
	public function investment_philosophy_landing() {
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Fund Performance', base_url(FP_MODULE_LINK));
		$this->breadcrumb->add_crumb('Investment Philosophy (Equity)');
		
		//Set template Title
		$this->template->set('title', 'Fund Performance - Investment Philosophy - Equity');
		
		//Load the view file
		$this->template->load('template/template', 'fund_performance/investment_philosophy_landing_view', $this->data);
			
	}

	//Investment Philosophy Debt Landing
	public function investment_philosophy_debt_landing() {
		
		//Add the Breadcrumbs
		$this->breadcrumb->add_crumb('Fund Performance', base_url(FP_MODULE_LINK));
		$this->breadcrumb->add_crumb('Investment Philosophy (Debt)');
		
		//Set template Title
		$this->template->set('title', 'Fund Performance - Investment Philosophy - Debt');
		
		//Load the view file
		$this->template->load('template/template', 'fund_performance/investment_philosophy_debt_view', $this->data);
			
	}


public function getexceldata(){
		
		 $sdate=$this->input->post('sdate');
		 $tdate=$this->input->post('tdate');
		 $urltype=$this->input->post('urltype');
		 $schemeSlug="scheme";
		 
		 $start 	=	strtotime(date('d-m-Y 00:00:00', strtotime($sdate)));
		 $end 		=	strtotime(date('d-m-Y 23:59:59', strtotime($tdate)));
		 
		 $nav_performances = $this->fund_performance_model->get_latest_nav_reports_excel($urltype,$schemeSlug, $start, $end);
		 
		 $table_view 	= 	array();
$scheme_type='';
		if(count($nav_performances)){			
			$i 				=	0;
			foreach ($nav_performances as $np) {
				$fp_date 	=	date(DATE_PICKER_FORMAT, $np->fp_date);
				//$table_view[$i]['nifty_value']	=	number_format($np->nifty_value,1);/*commented for nifty*/
				$table_view[$i]['nifty_value']="";
				$table_view[$i]['nav_value']	=	$scheme_type == 'fund'? number_format($np->nav_value, 2) : number_format($np->nav_value, 4);
				$table_view[$i]['date_value']	=	date('jS M Y ', strtotime($fp_date));
				$i++;
			}
		}
		
		$dataTable = '';
$dataTable .='<thead>
                       <tr>
                            <th>S.No</th>
                            <th>NAV</th>
                            <th>Date</th>
                           
                        </tr>
                    </thead>
                    <tbody>';
					 
					//var_dump($table_view); exit;
					
					 if($table_view){
		 
		 		$j=1;

		 		 foreach($table_view as $rr){


				     $dataTable .='
				            <tr>
				                <td>'.$j.'</td>
				                <td>'.$rr['nav_value'].'</td>
				                <td>'.$rr['date_value'].'</td>
				            </tr>';
		 		 $j++; }
		 }
		 $dataTable .= '  </tbody>';

   $filename = "exported-data-".date('d-m-Y H:i:s').".xls";
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename='.$filename);
    echo $dataTable;
		// var_dump($table_view); exit;
		
	}
	
}