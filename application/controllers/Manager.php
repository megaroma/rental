<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	public $home_url;

    public function __construct() {
 		parent::__construct();
 		$this->load->library('auth');
 		$this->load->library('grocery_CRUD');  
 		$this->load->database();
		$this->load->helper('url');
 		if(($this->auth->check()) &&
 			(($this->auth->has_role("admin")) || ($this->auth->has_role("staff")))
 		) {
 			
 			$this->home_url =  "http://".base_url()."manager";
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



	public function cars() {
		$data = array();
		$crud = $this->grocery_crud;
		$crud->set_table('cars');
		$crud->set_crud_url_path("http://".base_url().'manager/cars');
		admin_view($this, 'crud' , $data);

	}

}