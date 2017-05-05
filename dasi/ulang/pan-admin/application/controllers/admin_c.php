<?php 
class admin_C extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin_m','',TRUE);
		$this->load->helper('form');
		$this->load->database();
	}
	function index(){
	$data['list_item']=$this->admin_m->get_list_data();
		$this->load->view('index',$data);
	}
	/*
	*/
	function input_item(){
		$data=$this->admin_m->insert_data();
		$this->load->view('input_artikel',$data);
	}

}
?>
