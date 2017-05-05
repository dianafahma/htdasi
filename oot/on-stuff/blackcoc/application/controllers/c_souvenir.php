<?php
class C_souvenir extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_souvenir','',TRUE);
		$this->load->library('pagination');
		//$this->load->library('upload');
		//$this->load->helper('string');
	}
	function cari_souvenir(){
		$data['list_souvenir']=$this->m_souvenir->search_souvenir();
		$this->load->view('v_list_souvenir',$data);
	}
	function display_souvenir(){
		$query=$this->db->query("select * from souvenir");
		$n = $query->num_rows();
		$config['base_url'] = base_url().'index.php/C_souvenir/display_souvenir/';
		$config['total_rows'] = $n;
		$config['per_page'] = '10';
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '[';
		$config['full_tag_close'] = ']';
		$this->pagination->initialize($config);
		$data['list_souvenir']=$this->m_souvenir->get_list_souvenir($config['per_page'],$this->uri->segment(3));
		$this->load->view('v_list_souvenir',$data);
	}

	function valid_souvenir(){
		//$data['kode']=$this->uri->segment(3);
		$kode= $this->uri->segment(3);
			$this->m_souvenir->valid($kode);
		//$this->load->view('v_list_souvenir');
				redirect ('c_souvenir/display_souvenir');


	}
	function view_edit_souvenir(){
		$data['kode']=$this->uri->segment(3);
		$kode= $this->uri->segment(3);
		$row_data=$this->m_souvenir->get_edit_souvenir($kode);
		$data['row_data'] = $row_data;
		$this->load->view('view_edit_souvenir',$data);
	}
			function update_souvenir(){
				$kode= $this->uri->segment(3);
				$this->m_souvenir->edit_souvenir($kode);
				redirect ('c_souvenir/display_souvenir');
			}
	function tambah(){
		if($this->input->post('submit'))
		{
			$this->m_souvenir->insert_souvenir();
			redirect ('C_souvenir/display_souvenir');
		}
		$this->load->view('vtambah_souvenir');
	}

	//Tidak termasuk Souvenir
	function display_barang(){
		$data['content_view']="v_list_barang";
		$query=$this->db->query("select * from barangs");
		$n = $query->num_rows();
		$config['base_url'] = base_url().'index.php/c_sembako/display_barang/';
		$config['total_rows'] = $n;
		$config['per_page'] = '10';
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '[';
		$config['full_tag_close'] = ']';
		$this->pagination->initialize($config);
		$data['content_view']="v_list_barang";
		$data['list_barang']=$this->m_sembako->get_list_barang($config['per_page'],$this->uri->segment(3));
		$this->load->view('v_login_page',$data);
	}
	

	function display_admin(){
		//$data['content_view']="";
		$this->load->view('admin_page');
	}
	function display_general(){
		//$data['content_view']="";
		$this->load->view('general');
	}
	function display_basic(){
		//$data['content_view']="";
		$this->load->view('basic_form');
	}
	function display_simple(){
		//$data['content_view']="";
		$this->load->view('simple_page');
	}

	function display_tentang(){
		$data['content_view']="v_tentang";
		$this->load->view('v_login_page',$data);
	}
	
	
	function view_edit_toko(){
		$data['kode']=$this->uri->segment(3);
		$kode= $this->uri->segment(3);
		$data['content_view']="v_edit_toko";
		$row_data=$this->m_sembako->get_edit_toko($kode);
		$data['row_data'] = $row_data;
		$this->load->view('v_login_page',$data);
	}
	function update_toko(){
	$kode= $this->uri->segment(3);
		$this->m_sembako->edit_toko($kode);
		redirect ('c_sembako/display_toko');
	}


	function tambah_barang(){
		if($this->input->post('submit'))
		{
			$this->m_sembako->insert_barang();
			redirect ('c_sembako/display_barang');
		}
		$data['content_view']="vtambah_barang";
		$this->load->view('v_login_page',$data);
	}

	function tampil_detail_toko(){
		$data['vid']=$this->uri->segment(3);
		$vid=$this->uri->segment(3);
		$data['content_view']="vtampil_detail_toko";
		//$data['row_data']= $this->m_sembako->get_detail_toko($vid);
		$row = $this->m_sembako->get_detail_toko($vid);
		$data['row'] = $row;
		$this->load->view('v_login_page',$data);
	}
		function tampil_detail_barang(){
		$data['vid']=$this->uri->segment(3);
		$vid=$this->uri->segment(3);
		$data['content_view']="vtampil_detail_barang";
		$row = $this->m_sembako->get_detail_barang($vid);
		$data['row'] = $row;
		$this->load->view('v_login_page',$data);
	}

	
		function cari_toko(){
		$data['content_view']="v_list_toko";
		$data['list_toko']=$this->m_sembako->search_toko();
		$this->load->view('v_login_page',$data);
	}

	function hapus_toko(){
		$vid = $this->uri->segment(3);
		$this->m_sembako->del_toko($vid);
		redirect('c_sembako/display_toko');
	}
	function hapus_barang(){
		$vkode = $this->uri->segment(3);
		$this->m_sembako->del_barang($vkode);
		redirect('c_sembako/display_barang');
	}
}
?>