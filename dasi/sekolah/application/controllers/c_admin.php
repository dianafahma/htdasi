<?php
	class C_admin extends CI_Controller {
	
	function __construct(){
	parent::__construct();
		$this->load->helper(array('form'));
		$this->load->model('m_admin','',TRUE);

	}
	public function view() {
	echo "dsdsndnsndnds";
	$data['list_daftar']=$this->m_admin->get_list_data();
	$this->load->view('admin_page',$data);
		}
		
	function daftar(){
		if($this->input->post('submit'))
		{
		  $this->m_admin->insertdata();
		  redirect ('c_icm/admin_page');
		}
		$this->load->view('daftar_by_admin');
		}
	
//function listpendaftar
	function pendaftar(){
		$data['list_daftar']=$this->m_admin->get_list_data();
		$this->load->view('pendaftar_by_admin',$data);
		}
//function view detail
	function view_detail(){
	
		$id_daftar = "mdndndndn";
		$data['row_data'] = $this->m_admin->get_detail($id_daftar);
		$this->load->view('detail.php',$data);
		
		}
	/*function view_detail(){
		$id_daftar = $this->uri->segment(3);
		$data['row_data'] = $this->m_admin->get_detail_data($id_daftar);
		$this->load->view('detail.php',$data);
		
		}*/
//function delete data
	function delete_data(){
		$vid_daftar = $this->uri->segment(3);
		$this->m_admin->delete_data($vid_daftar);
		redirect('c_admin/pendaftar');
	}
//function update
	function display_form_update(){
	$vid_daftar = $this->uri->segment(3);
	$data['row_data'] = $this->m_admin->get_update_data($vid_daftar);
	$data['content_view'] = "update.php";
	}
	function update_data_db(){
	$vid_daftar=$this->uri->segment(3);
	$this->m_admin->update_data_db($vid_daftar);
	redirect('c_admin/pendaftar');
	}
//function search
	function search(){
	$data['list_daftar']=$this->m_admin->search();
	$data['content_view'] ="pendaftar_by_admin.php";
	$this->load->view('pendaftar_by_admin.php',$data);
	}
}
?>	
