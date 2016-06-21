<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function __construct() {
 		parent::__construct();
 		$this->load->library('auth');
    }


	public function index()
	{
		$data = array();
		$data['title'] = "Car Rental";
		master_view($this, 'index' , $data);
	}


	public function test() {
		/*		
		echo $this->auth->ver();
		$this->auth->login("admin@admin.nz","test",true);
		echo $this->auth->get_error();
		if( $this->auth->has_role("admin"))
			echo "<br>true";
		else
			echo "<br>false";
			*/
	}


	public function login() {
		$data = array();
		$data['title'] = "Car Rental - login page";
		$data['error'] = false;
		$data['error_msg'] = "";
		$data['email'] = input_post("email","");
		$password = input_post("password", "");
		$remember = input_post("remember","");
		if($data['email'] != "") {
			if($this->auth->login($data['email'],$password,$remember)) {
				redirect("http://".base_url().'home', 'refresh');
			} else {
				$data['error'] = true;
				$data['error_msg'] = $this->auth->get_error();
			}
		}


		master_view($this, 'login' , $data);		
	}


	public function logout() {
		$this->auth->logout();
		redirect("http://".base_url().'home/login', 'refresh');
	}

	public function register() {
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('full_name', 'Full Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('driver_licence', 'Driver Licence', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required|numeric');
		$this->form_validation->set_rules('gender', 'Gender', 'required');

		$data = array();
		$data['title'] = "Car Rental - register page";


		$user['full_name'] = input_post("full_name","");
		$user['email'] = input_post("email","");
		$user['password'] = input_post("pasword","");
		$user['driver_licence'] = input_post("driver_licence","");
		$user['age'] = input_post("age","");
		$user['gender'] = input_post("gender","");
		$action = input_post("action","");
		$data['error'] = false;
		$data['error_msg'] = "";

		if($action == "submit") {
			if ($this->form_validation->run() == FALSE) {
				$data['error'] = true;
			} else {
				$user['password'] = md5($user['password']);
				$user['created_at'] = date("Y-m-d H:i:s",strtotime("NOW"));
				$user['role_id'] = "3";
				$user['active'] = "1";
				$this->db->insert('users', $user);
				redirect("http://".base_url().'home/login', 'refresh');
			}
		}

		$data += $user;

		master_view($this, 'register' , $data);		
	}


}
