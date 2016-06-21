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


		$data += $user;

		master_view($this, 'register' , $data);		
	}


}
