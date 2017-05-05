<?php 
class C_member extends CI_controller {

	public function __construct(){
		parent:: __construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url','form'));
		$this->load->model(array('m_member'));
		$this->load->database();
	}
	public function display_form_login(){
		$this->load->view('v_form_login');
	}
	public function login(){
		//$this->load->view('v_form_login');
		$v_username = $this->input->post('username');
		$v_password = md5($this->input->post('password'));
		$login_status = $this->m_member->validasi($v_username,$v_password);
		
		if ($login_status){
			$this->session->set_userdata('ses_username',$v_username);
			$this->session->set_userdata('ses_login_status',$login_status);
			$this->load->view('v_member_page');
		}else
		{
			redirect ('c_member/display_member_page');
		}
	}
	public function logout(){
		$this->session->unset_userdata('ses_login_status');
		$this->session->unset_userdata('ses_username');
		redirect ('c_member/display_form_login');
	}
}
?>
