<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cars extends CI_Controller {


    public function __construct() {
 		parent::__construct();
 		$this->load->library('auth');
 		$this->load->model('cars_m');
    }


	public function index()
	{
		$data = array();
		$data['title'] = "Car Rental";
		$data['cars'] = $this->cars_m->all_available();
		master_view($this, 'cars' , $data);
	}

	public function open($id) {
		$data = array();
		$data['title'] = "Car Rental";
		$data['car'] = $this->cars_m->get_car($id);
		$data['request_form'] = true;
		master_view($this, 'car' , $data);

	}




}
