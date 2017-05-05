<?php
class C_login extends CI_controller{
	 public function __construct(){
		parent:: __construct();
		 $this->load->library(array('session'));
		 $this->load->helper(array('url','form'));
		 $this->load->model(array('m_login'));
		 $this->load->database();
	 }
	 public function display_login(){ //ini gunanya apa
			$this->load->view('v_login');
	 }

	public function login(){
			$vusername = $this->input->post('username');
			$vpassword = md5($this->input->post('password'));
			$login_status = $this->m_login->validasi($vusername,$vpassword);
			
			if ($login_status){
				
				$this->session->set_userdata('ses_username',$vusername);
				$this->session->set_userdata('ses_login_status',$login_status);
					}
				//$data['content_view']="v_home_page";
			$this->load->view('v_list_barang');
/*	
				if($vusername =="admin")
				{
					$data['content_view']="v_tentang";
				$this->load->view('v_login_page',$data);
				}else{
						$data['content_view']="v_list_barangx";
				$this->load->view('v_login_tamu',$data);
				}
					
			}else{
				redirect('c_login/display_login');
			}*/
	 }

	 public function logout(){
		$this->session->unset_userdata('ses_login_status');
		$this->session->unset_userdata('ses_username');
		redirect('c_login/display_login');
	 }
	 
}
?>