<?php
/**
* 
*/
class C_negara extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_negara','',TRUE);
			//$this->load->library('pagination');
			# code...{}
	}
	function home(){
		$data['content']='home.php';
		$this->load->view('template.php',$data);
	}
	function error(){
		$data['content']='error.php';
		$this->load->view('template.php',$data);
	}
	function search(){
		$data['content']='v_tabel.php';
		$data['list_negara']=$this->m_negara->search_negara();
		$this->load->view('template.php',$data);		
	}
	function view() {
		$data['list_negara']=$this->m_negara->get_negara();
		$data['content']='v_tabel.php';
		$this->load->view('template.php',$data);
	}

	function tambah(){
		if($this->input->post('submit'))
		{
			$this->m_negara->tambah_data();
			redirect('c_negara/view');
		}
		$data['content']='v_tambah.php';
		$this->load->view('template.php',$data);
	}

	function detail(){
		$data['$vid']=$this->uri->segment(3);
		$vid=$this->uri->segment(3);
		$row =$this->m_negara->get_detail($vid);
		$data['row']=$row;
		$data['content']='v_detail.php';
		$this->load->view('template.php',$data);
		
	}

}

?>