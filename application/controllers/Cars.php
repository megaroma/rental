<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cars extends CI_Controller {


    public function __construct() {
 		parent::__construct();
 		$this->load->library('auth');
    }


	public function index()
	{
		$data = array();
		$data['title'] = "Car Rental";
		master_view($this, 'cars' , $data);
	}


}
