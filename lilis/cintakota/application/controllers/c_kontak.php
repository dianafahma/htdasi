<?php
class C_kontak extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->helper('form');
	$this->load->model('m_kontak','',TRUE);
	$this->load->library('pagination'); //memanggil paging
	$this->load->library(array('upload','form_validation',''));
	}
	
	function insert(){
			$data['content_view']='v_kontak.php';
			$this->load->view('v_template_kontak.php',$data);
		}
		function display1() {
			$data['content_view']='v_tabel_message.php';
			$data['list_kontak']=$this->m_kontak->get_list_data();	
			$this->load->view('v_template2',$data);
		}
		function tambah(){
		if($this->input->post('submit'))
		{
			$this->m_kontak->insertdata();
			redirect('c_kontak/display');
		}
		$data['content_view']='v_kontak.php';
		$this->load->view('v_template_kontak',$data);
		// $this->load->view('v_kontak');
		}
		
		function display() {
			$data['content_view']='v_kontak.php';
			echo 'Pesan Terkirim';
			$this->load->view('v_template_kontak',$data);
		}
		function delete_data(){
			$vid = $this->uri->segment(3);
			$this->m_kontak->delete_data($vid);
			redirect ('c_kontak/display1');
		}
}
?>