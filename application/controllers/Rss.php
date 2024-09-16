<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rss extends CI_Controller {
    private $data = array();

    public function __construct() {
		parent::__construct();
		
		//Load Libraries
		$this->load->helper('common');

		$this->load->database();

	}
    public function index() {
        $this->load->model('rss_model'); // Load the RSS model
        $this->data['articlesInfo'] 	= 	$this->rss_model->get_articles_by_topic("current-affairs");
        header("Content-Type: application/rss+xml");
        $this->load->view('rss/rss_view', $this->data); // Load the RSS view
    }
}