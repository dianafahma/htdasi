<?php
	class C_home extends CI_controller {
	
	function display(){
	$data['content_view'] = "v_home.php";
	$this->load->view('v_template',$data);
	}
}
?>