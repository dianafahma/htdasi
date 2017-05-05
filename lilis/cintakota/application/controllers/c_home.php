<?php
class C_home extends CI_Controller{
function __construct(){
		parent::__construct();
		$this->load->helper('form','text');
		$this->load->model('m_berita','',TRUE);
		$this->load->model('m_home','',TRUE);
		$this->load->library(array('upload','form_validation',''));
		$this->load->library('pagination'); //memanggil paging
		$this->load->library(array('upload','form_validation',''));
	}

	function display(){
		$data['content_view'] = "v_home.php";
		$data['list_berita']=$this->m_berita->get_list_data(3);
		$data['list_breaking']=$this->m_berita->get_list_data(1);
		$data['list_hiburan']=$this->m_berita->kategori1(3);
		$data['list_politik']=$this->m_berita->kategori2(3);
		$data['list_bisnis']=$this->m_berita->kategori6(3);
		$data['list_kriminal']=$this->m_berita->kategori3(3);
		$data['list_teknologi']=$this->m_berita->kategori5(4);
		$data['list_internasional']=$this->m_berita->kategori4(3);
		$data['list_populer']=$this->m_berita->get_list_data(5);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}
		$this->load->view('v_template',$data);
	}
	function display1(){
		// if($this->session->userdata('ses_login_status')) {
		// $username = $this->session->userdata('ses_username');
		
		$data['content_view'] = "v_home_reporter.php";
		// $data['list_reporter']=$this->m_home->get_detail_rep($username);
		$this->load->view('v_template1',$data);
	// }
	}
	function display2(){
		$data['content_view'] = "v_home_reduktur.php";
		$this->load->view('v_template2',$data);
	}
	function displaykontak(){
		$data['content_view'] = "v_kontak.php";
		$this->load->view('v_template',$data);
	}
	function displayProfil(){
		$data['content_view'] = "v_profil.php";
		$this->load->view('v_template',$data);
	}
}
?>