<?php
class C_mahasiswa_dis extends CI_Controller {

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
	  redirect ('c_mahasiswa_dis/display');
	}
	$data['content_view']="v_mahasiswa_add";
	$this->load->view('v_templete_display',$data);
	}
function display(){
	$data['content_view']="v_mahasiswa_display";
	$data['list_mhsw']=$this->m_mahasiswa->get_list_data();
	$this->load->view('v_templete_display',$data);
	}
	
	function view_detail(){
	$data['content_view']="v_mahasiswa_detail.php";
	$vnim= $this->uri->segment(3); //menangkap segment ke 3 dihutng dari index
	$data['row_data'] = $this->m_mahasiswa->get_detail_data($vnim);
	$this->load->view('v_templete_display',$data);
	}
		
	function display_form_update(){
	$data['content_view']="v_mahasiswa_display.php";
	$vnim=$this->uri->segment(3);
		
	$data['row_data'] = $this->m_mahasiswa->get_update_data($vnim);
	$this->load->view('v_templete_display',$data);
	}
		
	function search(){
		$data['content_view']="v_mahasiswa_display";
		$data['list_mhsw']=$this->m_mahasiswa->search();
		$this->load->view('v_templete_display',$data);
	}
	
	
	function update_data_db(){
		$vnim=$this->uri->segment(3);
		$this->m_mahasiswa->update_data_db($vnim);
			
		redirect('C_mahasiswa_dis/display');
	}
	function delete_data(){
		$vnim = $this->uri->segment(3);
		$this->m_mahasiswa->delete_data($vnim);
		redirect('C_mahasiswa_dis/display');
		}
		
		
		
		//pagination
		/*
		function display_pagination(){
		//count the totals rows
		$query=$this->db->query("select * from mahasiswa");
		$n=$query->num_rows();
		$config['base_url']=base_url().'index.php/c_mahasiswa_dis/display_pagination/';
		$config['total_rows']=$n;
		$config['per_page']='3';
		$config['uri_segment']=3;
		$config['full_tag_open']='[';
		$config['full_tag_close']=']';
		
		$this->pagination->initialize($config);//inisialisasi pagination
		$data['title']='Daftar Mahasiswa';
		$data['list_mhsw']=$this->m_mahasiswa->get_all_pagination($config['per_page'],this->uri->segment(3));
		$this->load->view('v_mahasiswa',$data);
		
		}*/
}
?>
