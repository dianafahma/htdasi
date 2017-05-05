<?php
class C_cms extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_cms','',TRUE);
		$this->load->database();
	}
		function beranda(){
		$this->load->view('beranda');
	}
	
	function berita(){
	$this->load->view('berita.php');
	}	
	function display_visi_misi(){
		$this->load->view('visi-misi.php');
	}

	function display_murid(){
		//$data="v_mahasiswa.php";
		//$this->load->view($data);
		$data['list_murid']=$this->m_cms->get_murid();
		$data['content_view']='v_loadpage';
		$this->load->view('v_murid',$data);
		//$data['list_prodi']=$this->m_akademik->get_prodi();
		//$this->load->view('v_program_studi',$data);
	}
		function sort_nama(){
		$data['list_murid']=$this->m_cms->sort_nama_a();
		$this->load->view('v_murid',$data);
	}
			function sort_nama1(){
		$data['list_murid']=$this->m_cms->sort_nama_d();
		$this->load->view('v_murid',$data);
	}
			function sort_un(){
		$data['list_murid']=$this->m_cms->sort_un_a();
		$this->load->view('v_murid',$data);
	}
			function sort_un1(){
		$data['list_murid']=$this->m_cms->sort_un_d();
		$this->load->view('v_murid',$data);
	}


	function insert(){
	if($this->input->post('submit')){
		$this->m_cms->insert();
		redirect ('c_cms/display_murid');
	}
	$this->load->view('v_murid_add');
	}

	function search(){
			$data['list_murid']=$this->m_cms->search_murid();
		$this->load->view('v_murid',$data);
		
	}
	function delete(){
	$kode= $this->uri->segment(3);
	$this->m_cms->del_murid($kode);
		redirect ('c_cms/display_murid');
	}
	
	function view_edit(){
		
		$kode= $this->uri->segment(3);
		$data['row_data']=$this->m_cms->get_edit_murid($kode);
		$this->load->view('v_murid_edit',$data);
	}
	function update_edit(){
		$kode= $this->uri->segment(3);
		$this->m_cms->update_edit($kode);
		redirect ('c_cms/display_murid');
	}








	function display(){
		$data['content_view']="beranda.php";
		$this->load->view('v_loadpage.php',$data);
	}
	function display_profil(){
		$this->load->view('profil.php');
	}
	function display_berita(){
		$data['content_view']="beranda.php";
		$this->load->view('v_loadpage.php',$data);
	}
	function display_galeri(){
		$data['content_view']="beranda.php";
		$this->load->view('v_loadpage.php',$data);
	}
	function display_kontak(){
		$data['content_view']="kontak.php";
		$this->load->view('v_loadpage.php',$data);
	}

	
	function display_prodi(){
		$data['list_prodi']=$this->m_akademik->get_prodi();
		$this->load->view('v_program_studi',$data);
	}
	

}
?>
