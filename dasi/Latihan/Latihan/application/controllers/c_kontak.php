<?php
	class C_kontak extends CI_controller{
	
	function display(){
	$data['content_view'] = "v_kontak.php";
	$this->load->view('v_template',$data);
	}
}
?>