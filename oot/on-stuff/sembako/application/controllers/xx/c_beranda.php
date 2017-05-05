<?php
class c_beranda extends CI_controller{
	function display(){
		$data['$content_view']="v_beranda";
		$this->load->view('v_login_page',$data);
	}
}
?>