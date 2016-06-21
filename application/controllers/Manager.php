<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	public $home_url =  "http://".base_url()."manager";

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
		$data['title'] = "Car Rental - Manager page";
		$this->grocery_crud->set_table('users');
		admin_view($this, 'index' , $data);
	}


	public function users() {
		$data = array();
		$this->grocery_crud->set_table('users');
		//$this->grocery_crud->set_theme('datatables');
		$this->grocery_crud->set_subject("User");
		$this->grocery_crud->set_crud_url_path("http://".base_url().'admin/users');
		$this->grocery_crud->columns("full_name","role_id","age","driver_licence","gender","email","active");
		$this->grocery_crud->set_relation('role_id','roles','name');
		admin_view($this, 'crud' , $data);
	}


	public function roles() {
		$data = array();
		$crud = $this->grocery_crud;
		$crud->set_table('roles');
		$crud->set_crud_url_path("http://".base_url().'admin/roles');
		$crud->unset_add();
		$crud->unset_edit();		
		$crud->unset_delete();
		admin_view($this, 'crud' , $data);

	}

}
