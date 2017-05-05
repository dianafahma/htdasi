<?php
if(! defined('BASEPATH')) exit ('No direct script access allowed');
	class Verifylogin extends CI_Controller {
		function __construct(){
		parent::__construct();
			// $this->load->helper('form','url','session');
			$this->load->model('admin/user','',TRUE);
			$this->load->library('form_validation');
			//$this->load->database();
			//$this->load->library('pagination');		
		}

		function index(){
			//aksi untuk validasi
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

			if ($this->form_validation->run() == FALSE) {
				//jika validasi gagal user akan di arahkan kembali ke form login
				$this->load->view('admin/admin-login');
			}else{
				//jika berhasil user akan di arahkan ke admin page
				redirect('admin/home');
			}
		}

		function check_database($password){
			//validasi field terhadap database
			$username = $this->input->post('username');
			//query ke database
			$result = $this->user->login($username, $password);

			if ($result) {
				$sess_array = array();
				foreach ($result as $row) {
					$sess_array = array(
						'username' => $row->username,
						'password' => $row->password
						);
					$this->session->set_userdata('logged_in', $sess_array);
				}
				return true;
			}else{
				$this->form_validation->set_message('check_database', 'Invalid username or password');
				return false;
			}
		}

}
?>