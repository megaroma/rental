<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $home_url;

    public function __construct() {
 		parent::__construct();
 		$this->load->library('auth');
 		$this->load->library('grocery_CRUD');  
 		$this->load->database();
		$this->load->helper('url');
 		if(($this->auth->check()) &&
 		   ($this->auth->has_role("admin")) 
 		) {
 			
 			 $this->home_url =  "http://".base_url()."admin";
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
		//$this->grocery_crud->set_theme('datatables');
		$this->grocery_crud->set_subject("User");
		$this->grocery_crud->set_crud_url_path("http://".base_url().'admin/users');
		$this->grocery_crud->columns("full_name","role_id","age","driver_licence","gender","email","active");
		$this->grocery_crud->fields("full_name","role_id","age","driver_licence","gender","email","active","password");
		$this->grocery_crud->callback_edit_field('password',array($this,'set_password_input_to_empty'));
		$this->grocery_crud->callback_add_field('password',array($this,'set_password_input_to_empty'));
 
		$this->grocery_crud->callback_update(array($this,'encrypt_password_and_update'));

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

	//callbacks

public function encrypt_password_and_update($post_array, $primary_key) {
 
if(!empty($post_array['password']))
{

$post_array['password'] = md5($post_array['password']);
}
else
{
unset($post_array['password']);
}
 
return $this->db->update('users',$post_array,array('id' => $primary_key));
}
 
public function set_password_input_to_empty() {
return "<input type='password' class='form-control' name='password' value='' />";
}

}
