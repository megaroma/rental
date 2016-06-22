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
		$action = input_post("action","");

		if($action == "request") {
 			if(!$this->auth->check()) {
 				redirect("http://".base_url().'home/login', 'refresh');
 			}			

			$fd = input_post("dt_from","");
			$td = input_post("dt_till","");
			$comment = input_post("comment","");

			if(($fd != "") && ($td != "")) {
				$this->cars_m->save_order($id,$fd,$td,$comment);
				$data['request_form'] = false;
			}


		}



		master_view($this, 'car' , $data);

	}




}
