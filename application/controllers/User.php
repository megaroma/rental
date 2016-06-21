<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    public function __construct() {
 		parent::__construct();
 		$this->load->library('auth');
 		if(!$this->auth->check()) {
 			redirect("http://".base_url().'home/login', 'refresh');
 		}
    }



    public function profile() {
		$data = array();
		$data['title'] = "Car Rental- User Profile";

		$user = (array) $this->auth->get_user();


		$data += $user;
		master_view($this, 'profile_edit' , $data);    	
    }


}