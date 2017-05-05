<?php 
class C_supplier extends CI_Controller{
/*
	*/
function __construct(){
	parent::__construct();
	$this->load->helper('form');
	$this->load->model('m_supplier','',TRUE);
	}
	function data_supplier(){
		$data['list_supplier']=$this->m_supplier->get_list_supplier();
		$this->load->view('v_list_supplier',$data);
	}
				function nama_supplier(){
					$data['list_supplier']=$this->m_supplier->get_nama_supplier();
					$this->load->view('v_list_supplier',$data);
				}
				function supplier_nama(){
					$data['list_supplier']=$this->m_supplier->get_supplier_nama();
					$this->load->view('v_list_supplier',$data);
				}
	function select_data(){
		$vid = $this->uri->segment(3);
		$data['row_data']=$this->m_supplier->get_detail_supplier($vid);
		$this->load->view('v_select_supplier',$data);
		
		if($this->input->post('submit')){
			$data['row_data'] = $this->m_supplier->get_update_data($vid);
			redirect ('c_supplier/data_supplier');
		}
	}
	function tambah(){
		if($this->input->post('submit')){
			$this->m_supplier->insert_supplier();
			redirect ('c_supplier/data_supplier');

		}
		$this->load->view('v_add_supplier');
	}
	
	function ubah_supplier(){
			$vid = $this->uri->segment(3);
					$this->m_supplier->get_ubah_supplier($vid);
			redirect ('c_supplier/data_supplier');
		//$this->load->view('v_select_supplier');
	}
	function hapus_supplier(){
		$vid = $this->uri->segment(3);
		$this->m_supplier->delete_data($vid);
		redirect ('c_supplier/data_supplier');
	}
	
}
?>