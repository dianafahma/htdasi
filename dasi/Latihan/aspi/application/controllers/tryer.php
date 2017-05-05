<?php
class Tryer extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}	


	function index()
	{
		//gunakan untuk halaman utama
		$this->load->view("halaman_pertama");

		
	}
	function view()
	{

		$data['judul']="Kominfo";
		$data['isi']=" isi halaman utama";
		$out = $this->load->view("tampil",$data,true);
		$this->load->model('m_tryer');
$this->m_tryer->get_data();
		echo $out;
	}

}
?>
