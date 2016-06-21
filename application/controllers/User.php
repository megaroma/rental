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
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('full_name', 'Full Name', 'required');
		$this->form_validation->set_rules('driver_licence', 'Driver Licence', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required|numeric');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$data = array();
		$user_post = array();
		$user_post['full_name'] = input_post("full_name","");
		$user_post['driver_licence'] = input_post("driver_licence","");
		$user_post['age'] = input_post("age","");
		$user_post['gender'] = input_post("gender","");
		$action = input_post("action","");				    	
		$data['error'] = false;

		
		$data['title'] = "Car Rental- User Profile";

		$user = (array) $this->auth->get_user();

		if($action == "submit") {
			$user['full_name'] = $user_post['full_name'];
			$user['driver_licence'] = $user_post['driver_licence'];
			$user['age'] = $user_post['age'];
			$user['gender'] = $user_post['gender'];

			if ($this->form_validation->run() == FALSE) {
				$data['error'] = true;
			} else {
				$user_post['updated_at'] = date("Y-m-d H:i:s",strtotime("NOW"));

				$this->db->where('id', $user['id']);
				$this->db->update('users', $user_post);

			}
		}


		$data += $user;
		master_view($this, 'profile_edit' , $data);    	
    }


}