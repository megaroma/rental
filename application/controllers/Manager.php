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
		$crud->set_field_upload('photo','assets/imgs/cars');
		$crud->callback_edit_field('status',array($this,'edit_status_callback'));

		admin_view($this, 'crud' , $data);

	}

	public function orders() {
		$data = array();
		$crud = $this->grocery_crud;
		$crud->set_table('orders');		
		$crud->set_crud_url_path("http://".base_url().'manager/orders');
		$crud->set_relation('user_id','users','full_name');
		$crud->set_relation('status_id','statuses','name');
		$crud->set_relation('car_id','cars','{brand} {model}');


		admin_view($this, 'crud' , $data);

	}


//call backs

	public function edit_status_callback($value, $primary_key) {
		$statuses = array("available", "hidden");
		$output = "<select class=\"form-control\" name=\"status\">";
		foreach($statuses as $status) {
			$output .= "<option ".(($status == $value)? "selected" : "").">".$status."</option>";
		}
		$output .= "</select>";
		return $output;
	}


}



/*

<div class="text-left"><a href="rental.nteconlinecourses.tk/assets/imgs/cars/01-2011-bugatt-super-sport.jpg" class="image-thumbnail"><img src="rental.nteconlinecourses.tk/assets/imgs/cars/01-2011-bugatt-super-sport.jpg" height="50px"></a></div>
*/