<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    public function __construct() {
 		parent::__construct();
 		$this->load->library('auth');
    }



    public function profile() {
		$data = array();
		$data['title'] = "Car Rental- User Profile";
		master_view($this, 'profile_edit' , $data);    	
    }


}