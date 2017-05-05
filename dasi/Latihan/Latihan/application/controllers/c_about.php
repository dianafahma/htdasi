<?php
	class C_about extends CI_controller {
	
	function display(){
	$data['content_view'] = "v_about.php";
	$this->load->view('v_template',$data);
	}
}
?>