<?php
class C_loginhrd extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->helper(array('form','url')); 
	$this->load->model(array('m_loginhrd'));
	$this->load->library(array('session'));
	$this->load->database();
	}
	
	function masuk(){
		$this->load->view('form_login.php');
	}
	function masuk_app(){
		$vuser = $this->input->post('username');
		$vpass = md5($this->input->post('password'));
		//$vposs = $this->input->post('posisi');		
		$login_stat = $this->m_loginhrd->validasi($vuser,$vpass);
		//please check that you have so many condition for each page
		if($login_stat){
			$this->session->set_userdata('ses_username',$vuser);
			//$this->session->set_userdata('ses_username',$vposs);
			$this->session->set_userdata('ses_login_stat',$login_stat);
			$this->load->view('leader_page.php');
		}else{
			redirect('c_loginhrd/masuk');
		}		
		/*	if ($vposs=='manager'){
				$this->load->view('leader_page.php');
			}else if($vposs=='owner'){
				$this->load->view('owner_page.php');
			}else if($vposs=='staff'){
				$this->load->view('user_page.php');
			}
		else{
			$this->load->view('admin_page.php');
		}*/
	}
	function keluar_app(){
		$this->session->unset_userdata('ses_login_stat');
		$this->session->unset_userdata('ses_username');
		redirect('c_loginhrd/masuk');
	}
}
?>














