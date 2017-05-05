<?php
	class C_berita extends CI_Controller {
	
	function display(){
	$data['content_view'] = "v_berita.php";
	$this->load->view('v_template',$data);
	
	}
	}
?>