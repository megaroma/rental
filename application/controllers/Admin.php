<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function __construct() {
 		parent::__construct();
 		$this->load->library('auth');
 		if(($this->auth->check()) &&
 			(($this->auth->has_role("admin")) || ($this->auth->has_role("staff")))
 		) {
 			

 		} else {
 			redirect("http://".base_url().'home/login', 'refresh');
 		}
    }


	public function index()
	{
		$data = array();
		$data['title'] = "Car Rental - Admin page";

		admin_view($this, 'index' , $data);
	}


}
