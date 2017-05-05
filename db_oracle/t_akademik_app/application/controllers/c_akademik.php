<?php
class C_akademik extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_akademik','',TRUE);
		$this->load->database();
	}
	
	function display(){
		$data="v_akademik.php";
		$this->load->view($data);
	}
	//function display_mahasiswa(){
	
	//
	function display_mahasiswa(){
		//$data="v_mahasiswa.php";
		//$this->load->view($data);
		$data['query']=$this->m_akademik->get_maha();
		$this->load->view('v_mahasiswa',$data);
	}
	
	function display_prodi(){
		$data['list_prodi']=$this->m_akademik->get_prodi();
		$this->load->view('v_program_studi',$data);
	}
	
	function insert(){
	if($this->input->post('submit')){
		$this->m_akademik->insert();
		redirect ('c_akademik/display_prodi');
	}
	$this->load->view('v_prodi_add');
	}
	function search(){
			$data['list_prodi']=$this->m_akademik->search_prodi();
		$this->load->view('v_program_studi',$data);
		
	}
	
	//edit atau update data
	function view_edit(){
		
		$kode= $this->uri->segment(3);
		$data['row_data']=$this->m_akademik->get_edit_prodi($kode);
		$this->load->view('v_prodi_display_edit',$data);
	}
	function update_edit(){
		$kode= $this->uri->segment(3);
		$this->m_akademik->update_edit($kode);
		redirect ('c_akademik/display_prodi');
	}
	
	function batal(){
		redirect ('c_akademik/display_prodi');
	}
	
	function delete(){
	$kode= $this->uri->segment(3);
	$this->m_akademik->del_prodi($kode);
		redirect ('c_akademik/display_prodi');
	}
	
}
?>
