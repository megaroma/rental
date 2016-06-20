<?php
function asset_url($name){
   return "http://".base_url().'assets/'.$name;
}



function master_view($controller, $name , $data) {

	$content = $controller->load->view($name.".view.php",$data,true);
	$data['content'] = $content;

	$controller->load->view("master.view.php",$data);
}



function input_post($name, $default) {
	return isset($_POST[$name]) ? $_POST[$name] : $default;
}