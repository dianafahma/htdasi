<?php
	class C_mahasiswa extends CI_Controller {
	
	function __construct(){
	parent::__construct();
		$this->load->model('m_mahasiswa','',TRUE);
	
	}
	
	function display(){
	$data['list_mhsw']=$this->m_mahasiswa->get_list_data();
	$data['content_view'] = "v_mahasiswa_display.php";
	$this->load->view('v_template',$data);
	
	}
	
	function view_detail(){
	$vnim = $this->uri->segment(3);
	$data['row_data'] = $this->m_mahasiswa->get_detail_data($vnim);
	$data['content_view'] = "v_mahasiswa_detail.php";
	$this->load->view('v_template',$data);
	}
	
	}
?>