<?php
class C_nilai extends CI_Controller {
	function __construct(){
	parent::__construct();
	
	$this->load->model('m_nilai','',TRUE);
	}
	function display(){
	//$data['list_nilai']=$this->m_nilai->get_list_data();
	$this->load->view('v_nilai_display.php');
	}
}
?>