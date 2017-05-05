<?php
class C_tsembako extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper(array('form','url'));
		$this->load->model('m_sembako','',TRUE);
		$this->load->library('pagination');
		$this->load->library('upload');
		//$this->load->helper('string');
	}
	function display_home(){
		$data['content_view']="v_home_page";
		$this->load->view('v_login_tamu',$data);
	}
	function display_barang(){
		$data['content_view']="v_list_barangx";

		$query=$this->db->query("select * from barangs");
		$n = $query->num_rows();

		$config['base_url'] = base_url().'index.php/c_tsembako/display_barang/';
		$config['total_rows'] = $n;
		$config['per_page'] = '10';
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '[';
		$config['full_tag_close'] = ']';

		$this->pagination->initialize($config);
		$data['content_view']="v_list_baranx";
		$data['list_barangx']=$this->m_sembako->get_list_barang($config['per_page'],$this->uri->segment(3));
		$this->load->view('v_login_tamu',$data);
	}
	function display_kontak(){
		$data['content_view']="v_kontak";
		$this->load->view('v_login_page',$data);
	}
	function display_tentang(){
		$data['content_view']="v_tentang";
		$this->load->view('v_login_tamu',$data);
	}

	
	function display_toko(){
		$query=$this->db->query("select * from tokos");
		$n = $query->num_rows();

		$config['base_url'] = base_url().'index.php/c_tsembako/display_toko/';
		$config['total_rows'] = $n;
		$config['per_page'] = '10';
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '[';
		$config['full_tag_close'] = ']';

		$this->pagination->initialize($config);
		$data['content_view']="v_list_toko";
		$data['list_toko']=$this->m_sembako->get_list_toko($config['per_page'],$this->uri->segment(3));
		$this->load->view('v_login_tamu',$data);
	}


	function tampil_detail_toko(){
		$data['vid']=$this->uri->segment(3);
		$vid=$this->uri->segment(3);
		$data['content_view']="vtampil_detail_toko";
		//$data['row_data']= $this->m_sembako->get_detail_toko($vid);
		$row = $this->m_sembako->get_detail_toko($vid);
		$data['row'] = $row;
		$this->load->view('v_login_tamu',$data);

	}
		function tampil_detail_barang(){
		
		
		$data['vid']=$this->uri->segment(3);
		$vid=$this->uri->segment(3);
		$data['content_view']="vtampil_detail_barang";
		$row = $this->m_sembako->get_detail_barang($vid);
		$data['row'] = $row;
		$this->load->view('v_login_tamu',$data);

	}
	function tampil_form_update_toko(){

	}
	function update_db(){

	}
	function cari_barang(){
		$data['content_view']="v_list_barangx";
		$data['list_barangx']=$this->m_sembako->search_barang();
		
		$this->load->view('v_login_tamu',$data);
	}




	function hapus_toko(){
		$vid = $this->uri->segment(3);
		$this->m_sembako->del_toko($vid);
		redirect('c_tsembako/display_toko');
	}

	function hapus_barang(){
		$vkode = $this->uri->segment(3);
		$this->m_sembako->del_barang($vkode);
		redirect('c_tsembako/display_barang');
	}

}
?>