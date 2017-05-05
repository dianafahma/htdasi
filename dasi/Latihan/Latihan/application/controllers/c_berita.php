<?php
	class C_berita extends CI_controller {
	
	function display(){
	$data['content_view'] = "v_berita.php";
	$this->load->view('v_template',$data);
	}
}
?>