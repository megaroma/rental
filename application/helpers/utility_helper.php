<?php
function asset_url($name){
   return "http://".base_url().'assets/'.$name;
}



function master_view($controller, $name , $data) {

	$content = $controller->load->view($name.".view.php",$data,true);
	$data['content'] = $content;

	$controller->load->view("master.view.php",$data);
}

function admin_view($controller, $name , $data) {

	$data['crud'] = $controller->grocery_crud->render();

	$content = $controller->load->view("admin_".$name.".view.php",$data,true);

	$data['content'] = $content;

	$controller->load->view("admin_master.view.php",$data);
}



function input_post($name, $default) {
	return isset($_POST[$name]) ? $_POST[$name] : $default;
}