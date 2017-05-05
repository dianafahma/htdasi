<?php
if(! defined('BASEPATH')) exit ('No direct script access allowed');
	class Orders extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->helper('form','url');
			$this->load->model('m_order','',TRUE);
			$this->load->database();
			$this->load->library(array('pagination','session'));		
	}



  	function bayar(){
  		
	  	$data['pesanan'] = $this->session->userdata('pesanan');
  // 				$i=1;

		// $this->input->post('submit');
		// $m=count($_SESSION['vnama']);

		// while ($i <= $m) {
		// 	$vkode=$_SESSION['vkode'][$i];
		// 	$vnama=$_SESSION['vnama'][$i];
		// 	$vharga=$_SESSION['vharga'][$i];
		// 	$i=$i+1;
		// $this->m_order->insert_ke_tbl_pesan();
		// 	}

			$data['content_view'] = "product/order.php";
		$this->load->view('template', $data);
	}

	function bayar1(){
		session_start();
	$this->input->post('submit');

		$m=count($_SESSION['vnama']);
	$i=1;
	while ($i <= $m) {
		$vkode=$_SESSION['vkode'][$i];
		$vnama=$_SESSION['vnama'][$i];
		$vharga=$_SESSION['vharga'][$i];
		$i=$i+1;
	  $this->m_order->insert_ke_tbl_pemesanan($vnama,$vharga,$vkode);
			}
	  redirect ('home/display_home');
	$data['content_view'] = "product/order.php";
	$this->load->view('template', $data);
	}


}