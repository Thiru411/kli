<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'third_party/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }

    //Page header
	public function Header() {
		// Logo
		$image_file = base_url('assets/images/KotakLifelogo_Background_White.jpg');
		$this->Image($image_file, 15, 10, 30, 19.5, 'JPG', 'http://stage2.22feetlabs.com/kotak-stage/', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
		$this->SetFont('helvetica', '', 12);
		// Title
/*
		MultiCell($w, $h, $txt, $border=0, $align='J', $fill=false, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0, $valign='T', $fitcell=false) 
		Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')*/
		$this->MultiCell(0, 15, '<b>'.$this->title.'</b><br>'.$this->subject, '', 'C',false, 1, '','',true, 0,true) ;

		//$this->Ln();

		// Set font
		//$this->SetFont('helvetica', '', 12);
		// Sub Title
		//$this->Cell(0, 15, $this->subject, 0, false, 'C', 0, '', 0, false, 'M', 'M');
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */