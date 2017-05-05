<?php
/**
* this is controller for login to admin page
*/
class login extends CI_COntroller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form','text');
		$this->load->model('validasi','',TRUE);
		$this->load->library(array('upload','form_validation',''));
	}
	public function display_login(){
		$this->load->view('login_form');
	}

	function logins(){
		$v_username = $this->input->post('username');
		$v_password = md5($this->input->post('password'));
		$login_status = $this->validasi->validate($v_username,$v_password);
		
		if ($login_status){
			$this->session->set_userdata('ses_username',$v_username);
			$this->session->set_userdata('ses_login_status',$login_status);
			redirect ('home_admin/index');
			#$this->load->view('template');

		}else
		{
			redirect ('login/display_login');
		}
	}
	public function logout(){
		$this->session->unset_userdata('ses_login_status');
		$this->session->unset_userdata('ses_username');
		redirect ('login/display_login');
	}

/*
		#if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		$data['content_view'] = "v_berita_reporter.php";
		$data['list_berita']=$this->m_berita->get_list_data_rep($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
		}
		#} */




}
?>