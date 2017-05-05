<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* This is control for online shop
*/
class shop_control extends CI_Controller
{
	
	function __construct()
	{
 		parent::__construct();
 		$this->load->model('shopping','',TRUE);
 		$this->load->helper('url');
	}

	public function index(){
		$data['list_item']=$this->shopping->get_list_item();
		$this->load->view('index',$data);
	}

	public function contact(){
		$this->load->view('contact');
	}

	public function register(){
		$this->load->view('register');
	}

	public function details(){
		$this->load->view('details');
	}

	public function women(){
		$this->load->view('women');
	}
	public function checkout(){
		$this->load->view('checkout');
	}

		public function send_db(){
			$this->input->post('submit');
			$this->input->post('nama_pemesan');
				$this->shopping->input_trx();
				redirect('shop_control/');
			
		}


	public function join(){
		$data['list_barang']=$this->shopping->get_list_pesan();
		$this->load->view('join',$data);
	}
	function admin_page(){
		$data['list_pesan']=$this->shopping->get_list_pesanan();
		$this->load->view('admin_page',$data);	
	}
}
?>
ch