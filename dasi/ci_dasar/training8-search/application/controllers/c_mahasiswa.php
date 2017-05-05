<?php
class C_mahasiswa extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->helper('form'); // untuk input
	$this->load->model('m_mahasiswa','',TRUE);
	$this->load->library('pagination'); // call pagination library
	
	}
	function tambah(){
	
	if($this->input->post('submit'))
	
	{
	  $this->m_mahasiswa->insertdata();
	  redirect ('c_mahasiswa/display');
	}
	$this->load->view('v_mahasiswa_add');
	}
function display(){
	$data['list_mhsw']=$this->m_mahasiswa->get_all_pagination();
	$this->load->view('v_mahasiswa_display',$data);
	}
	
	function view_detail(){
	$vnim= $this->uri->segment(3); //menangkap segment ke 3 dihutng dari index
	$data['row_data'] = $this->m_mahasiswa->get_detail_data($vnim);
	$this->load->view('v_mahasiswa_detail.php',$data);
	}
	
		function delete_data(){
		$vnim = $this->uri->segment(3);
		$this->m_mahasiswa->delete_data($vnim);
		redirect('C_mahasiswa/display');
		}
		
	function search(){
		$data['list_mhsw']=$this->m_mahasiswa->search();
		$this->load->view('v_mahasiswa_display',$data);
	}
	
	
			//pagination
		/*
		function display_pagination(){
		//count the totals rows
		$query=$this->db->query("select * from mahasiswa");
		$n=$query->num_rows();
		$config['base_url']=base_url().'index.php/c_mahasiswa/display_pagination/';
		$config['total_rows']=$n;
		$config['per_page']='3';
		$config['uri_segment']=3;
		$config['full_tag_open']='[';
		$config['full_tag_close']=']';
		
		$this->pagination->initialize($config);//inisialisasi pagination
		$data['title']='Daftar Mahasiswa';
		$data['list_mhsw']=$this->m_mahasiswa->get_all_pagination($config['per_page'],this->uri->segment(3));
		$this->load->view('v_mahasiswa_pagination',$data);
		
		}*/
}
?>