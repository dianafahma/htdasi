<?php
class C_input extends CI_controller{
	 public function __construct(){
		parent:: __construct();
		 $this->load->library(array('session'));
		 $this->load->helper(array('url','form'));
		 $this->load->model(array('m_login'));
		 $this->load->database();
	 }
	 public function display(){ //ini gunanya apa
			$this->load->view('v_input');
	 }
	
	 
}
?>