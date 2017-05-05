<?php
class Ct_sembako extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_sembako','',TRUE);
		$this->load->library('pagination');
		//$this->load->library('upload');
		//$this->load->helper('string');
	}
	function display_tbarang(){
		$data['content_view']="vt_list_barang";
		$query=$this->db->query("select * from barangs");
		$n = $query->num_rows();
		$config['base_url'] = base_url().'index.php/ct_sembako/display_tbarang/';
		$config['total_rows'] = $n;
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 3;
		// config pagination ke bootstrap
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		
		$this->pagination->initialize($config);
		$data['content_view']="vt_list_barang";
		$data['list_barang']=$this->m_sembako->get_list_barang($config['per_page'],$this->uri->segment(3));
		$this->load->view('v_login_tamu',$data);
	}
	function display_ttoko(){
		$query=$this->db->query("select * from tokos");
		$n = $query->num_rows();
		$config['base_url'] = base_url().'index.php/ct_sembako/display_ttoko/';
		$config['total_rows'] = $n;
		$config['per_page'] = '10';
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config);
		$data['content_view']="vt_list_toko";
		$data['list_toko']=$this->m_sembako->get_list_toko($config['per_page'],$this->uri->segment(3));
		$this->load->view('v_login_tamu',$data);
	}

	function display_tkontak(){
		$data['content_view']="vt_kontak";
		$this->load->view('v_login_tamu',$data);
	}

	function display_ttentang(){
		$data['content_view']="vt_tentang";
		$this->load->view('v_login_tamu',$data);
	}
	


	function tampil_detail_toko(){
		$data['vid']=$this->uri->segment(3);
		$vid=$this->uri->segment(3);
		$data['content_view']="vtampil_detail_ttoko";
		$row = $this->m_sembako->get_detail_toko($vid);
		$data['row'] = $row;
		$this->load->view('v_login_tamu',$data);
	}
		function tampil_detail_barang(){
		$data['vid']=$this->uri->segment(3);
		$vid=$this->uri->segment(3);
		$data['content_view']="vtampil_detail_tbarang";
		$row = $this->m_sembako->get_detail_barang($vid);
		$data['row'] = $row;
		$this->load->view('v_login_tamu',$data);
	}

	function cari_barang(){
		$data['content_view']="vt_list_barang";
		$data['list_barang']=$this->m_sembako->search_barang();
		$this->load->view('v_login_tamu',$data);
	}
		function cari_toko(){
		$data['content_view']="vt_list_toko";
		$data['list_toko']=$this->m_sembako->search_toko();
		$this->load->view('v_login_tamu',$data);
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

	function do_upload(){
		$config['upload_path']='./uploads/';
		$config['allowed_types']= 'gif|bmp|jpg|png|doc|docx|php|xls|xlsx|pdf';
		$config['max_size'] = '1000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$this->load->library('upload',$config);
		
		if(! $this->upload->do_upload()){
			$data['content_view']="v_home_page";
			$data['list_unggah']=$this->m_sembako->get_list_unggah();
			$this->load->view('v_login_page',$data);
		}
		else{
			$data['content_view']="v_home_page";
			$file=$this->upload->data();
			$vnamafile=$file['file_name'];
			$vdeskripsi=$this->input->post('deskripsi');
			$this->m_sembako->insertdata($vnamafile,$vdeskripsi);
			$data['list_unggah']=$this->m_sembako->get_list_unggah();
			$this->load->view('v_login_page',$data);
		}
	}
function beranda(){
	$data['content_view']="vt_beranda";
		$this->load->view('v_login_tamu',$data);
}	
}
?>