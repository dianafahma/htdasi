<?php
	class Home extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->helper('url','form');
			$this->load->model('m_home','',TRUE);
			// $this->load->database();
			//$this->load->library(array('cart','table'));
	}
	function display_home(){
	//$data['produk'] = $this->db->get("tbl_produk");
	$data['content_view'] = "v_home.php";
	$this->load->view('template',$data);
	}

	// function menu(){
	// $data['menu_view'] = "v_menu.php";
	// $this->load->view('v_template',$data);
	// }


  	function registrasi(){
	if($this->input->post('submit'))
	{
	  $this->m_home->insertdata();
	  redirect ('home/display_home');
	}
	$data['content_view'] = "v_registrasi.php";
	$this->load->view('template', $data);
	}
 
}