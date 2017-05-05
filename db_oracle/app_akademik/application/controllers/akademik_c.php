<?php
class akademik_c extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('akademik_m','',TRUE);
		
	}
	
	function index(){
		$this->load->view('akademik.php');

	}
	function prodi(){
		$data['list_prodi']=$this->akademik_m->prodi_data();
		$this->load->view('prodi_display',$data);
	}
		function mahasiswa(){
		$this->load->view('mahasiswa.php');

	}
}
?>
