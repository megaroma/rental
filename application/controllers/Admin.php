<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function __construct() {
 		parent::__construct();
 		$this->load->library('auth');
 		$this->load->library('grocery_CRUD');  
 		$this->load->database();
		$this->load->helper('url');
 		if(($this->auth->check()) &&
 			(($this->auth->has_role("admin")) || ($this->auth->has_role("staff")))
 		) {
 			

 		} else {
 			redirect("http://".base_url() , 'refresh');
 		}
    }


	public function index()
	{
		$data = array();
		$data['title'] = "Car Rental - Admin page";
		$this->grocery_crud->set_table('users');
		admin_view($this, 'index' , $data);
	}


	public function users() {
		$data = array();
		$this->grocery_crud->set_table('users');
		$this->grocery_crud->set_subject("Manage Users");
		$this->grocery_crud->set_crud_url_path(site_url('admin/users'));
		$this->grocery_crud->columns("full_name","age","driver_licence","gender","email","active");
		admin_view($this, 'users' , $data);
	}

}
