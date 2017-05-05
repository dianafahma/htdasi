<?php 
class cart_c extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		//$this->load->model('cart_m','',TRUE);
		$this->load->database();
	}
	function display(){
		$this->load->view('index.html');
	}
	
}
?>