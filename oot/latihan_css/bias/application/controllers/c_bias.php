<?php
/**
* main function for bias
*/
class c_bias extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_bias','',TRUE);
		$this->load->library('pagination');
	}
	function display(){
		$this->load->view('halaman_depan');

	}
	function rooms(){
		$data['list_rooms']=$this->m_bias->room_list();
		$this->load->view('rooms',$data);

	}
	function booking(){
		$this->load->view('booking');

	}
	function location(){
		$this->load->view('location');

	}
	function foto(){
		$this->load->view('gallery');

	}
	function profile(){
		$this->load->view('home');

	}
}
?>