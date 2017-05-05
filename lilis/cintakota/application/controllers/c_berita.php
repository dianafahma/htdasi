<?php
class C_berita extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('form','text');
		$this->load->model('m_berita','',TRUE);
		$this->load->library(array('upload','form_validation',''));
		$this->load->library('pagination'); //memanggil paging
		$this->load->library('table');
		$this->load->library(array('upload','form_validation',''));
		}
	public function index()
	{
		// $this->form_validation->set_rules('kgr_judul', 'kgr_judul', 'required');
        // $this->form_validation->set_rules('judul', 'judul', 'required');
        // $this->form_validation->set_rules('isi', 'isi', 'required');
		// if ($this->form_validation->run() == FALSE)
        // {
            // $this->load->view('form_input');
        // }
        // else
        // {
            // echo 'validasi sukses!';
        // }
		
		if($this->session->userdata('ses_login_status')==true) {
			$this->display_berang_page();
		} else {
			$this->login();
		}
	}
	function display(){
		$data['content_view'] = "v_berita.php";
		$data['list_berita']=$this->m_berita->kategori1();
		// $data['list_hiburan']=$this->m_berita->kategori1();
		// $data['list_politik']=$this->m_berita->kategor2();
		// $data['list_kriminal']=$this->m_berita->kategori3(7);
		// $data['list_internasional']=$this->m_berita->kategori4(7);
		// $data['list_teknologi']=$this->m_berita->kategori5(7);
		// $data['list_bisnis']=$this->m_berita->kategori6(7);
		$data['list_populer']=$this->m_berita->get_list_data(7);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template.php',$data);
	}
	function display1(){
		if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		$data['content_view'] = "v_berita_reporter.php";
		$data['list_berita']=$this->m_berita->get_list_data_rep($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
		}
	}
	function kelolarep(){
		if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		
		$data['content_view'] = "v_kelola_rep.php";
		$data['list_berita']=$this->m_berita->get_list_data_rep($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
	}
	}
	function kelolared(){
		$data['content_view'] = "v_kelola_red.php";
		$data['list_berita']=$this->m_berita->get_list_data();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	function kategori(){
		$data['content_view'] = "v_kategori.php";
		$data['list_berita']=$this->m_berita->k_hiburan();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
	}
	function kategorired(){
		$data['content_view'] = "v_kategori2.php";
		$data['list_berita']=$this->m_berita->get_list_data();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	function display2(){
		$data['content_view'] = "v_berita_reduktur.php";
		$data['list_berita']=$this->m_berita->get_list_data();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	function tambah(){
		# Autonumber Id  #
		$this->db->select_max('id');
		$id = $this->db->get('berita')->row()->id;
		$strno = substr($id,8);
		$no = (int)$strno;
		$no_baru = $no+1;
		$pjg = strlen($no_baru);
		
		date_default_timezone_set("Asia/Jakarta");
		$year = date('Y');
		$month = date('m');
		$date = date('d');
		
		if($pjg==1)
		{
			$data['id'] = $year.$month.$date."00".$no_baru;
		}
		if($pjg==2)
		{
			$data['id'] = $year.$month.$date."0".$no_baru;
		}
		if($pjg==3)
		{
			$data['id'] = $year.$month.$date.$no_baru;
		}		
		
		$data["content_view"] = "v_berita_add.php";
		$this->load->view("v_template1",$data);
	}
	function proses_tambah(){
		$this->load->library('upload');
		
		if($this->input->post('submit') && $this->input->post('id') !=''){
			$config['upload_path']   =   "images/";
			$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
			$config['max_size']      =   "50000000";
			$config['overwrite']     =   FALSE;
			$config['max_width']     =   "1907";
			$config['max_height']    =   "1280";
			$this->upload->initialize($config);

			if($this->upload->do_multi_upload('files'))
			{
				$file = $this->upload->get_multi_upload_data();
				$ctFile = count($file);
				for($i=0 ; $i<$ctFile ; $i++){
					$path = $config['upload_path'].$file[$i]['file_name'];
					$this->m_berita->insert_gambar($path,$i);
				}
				$this->m_berita->insert();
				redirect ('c_berita/display1');
			}
			else{
				$file = $this->upload->get_multi_upload_data();
				$ctFile = count($file);
				for($i=0 ; $i<$ctFile ; $i++){
					$path = $config['upload_path'].$file[$i]['file_name'];
					$this->m_berita->insert_gambar($path,$i);
				}
				$this->m_berita->insert();
				redirect ('c_berita/display1');
			}			
		} 
	}
	function view_detail(){
		$data ['content_view'] = "v_berita_detail.php";
		$vid = $this->uri->segment(3);
		$data ['detail_berita'] = $this->m_berita->get_detail_data($vid);
		$data ['detail_berita2'] = $this->m_berita->get_list_data(10);
		$data ['list_gambar'] = $this->m_berita->get_detail_gambar($vid);
		$this->load->view('v_template.php', $data);
	}
	function view_detailreporter(){
		$data['content_view'] = "v_berita_detail.php";
		$vid = $this->uri->segment(3);
		$data ['list_berita'] = $this->m_berita->get_detail_data($vid);
		$this->load->view('v_template1.php', $data);
	}
	function view_detailreduktur(){
		$data['content_view'] = "v_berita_detail_reduktur.php";
		$vid = $this->uri->segment(3);
		$this->m_berita->change_status($vid, 1);
		$this->m_berita->status_edit($vid, 1);
		$data ['list_berita'] = $this->m_berita->get_detail_data($vid);
		$data ['list_gambar'] = $this->m_berita->get_detail_gambar($vid);
		$this->load->view('v_template2.php', $data);
	}
	function view_detailreduktur2(){
		$data['content_view'] = "v_berita_detail_reduktur.php";
		$vid = $this->uri->segment(3);
		$this->m_berita->change_status($vid, 1);
		$this->m_berita->status_edit($vid, 0);
		$data ['list_berita'] = $this->m_berita->get_detail_data($vid);
		$data ['list_gambar'] = $this->m_berita->get_detail_gambar($vid);
		$this->load->view('v_template2.php', $data);
	}
	function display_form_update(){
		$data['content_view'] = "v_berita_update.php";
		$vid = $this->uri->segment(3);
		$this->m_berita->status_edit($vid, 1);
		$data['list_berita'] = $this->m_berita->get_detail_data($vid);
		$this->load->view('v_template2.php', $data);
	}
	function display_form_update2(){
		$data['content_view'] = "v_berita_update.php";
		$vid = $this->uri->segment(3);
		$this->m_berita->status_edit($vid, 0);
		$data['list_berita'] = $this->m_berita->get_detail_data($vid);
		$this->load->view('v_template2.php', $data);
	}
	function display_update_reporter(){
		$data['content_view'] = "v_berita_update_reporter.php";
		$vid = $this->uri->segment(3);
		$data['list_berita'] = $this->m_berita->get_detail_data($vid);
		$this->load->view('v_template1.php', $data);
	}
	function update(){
		$vid = $this->uri->segment(3);
		$this->m_berita->update($vid);
		// $this->m_berita->change_status($vid, 1);
		redirect ('c_berita/display2');
	}
	function delete(){
		$vid = $this->uri->segment(3);
		$this->m_berita->delete($vid);
		redirect('c_berita/kelolared');
	}
	function search(){
		$data['content_view'] = "v_berita.php";
		$data['list_berita']=$this->m_berita->search();
		$data['list_foto']=$this->m_berita->get_list_data(1);
		$data['list_populer']=$this->m_berita->get_list_data(7);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template.php',$data);
	}
	 
	// function search_admin(){
		// $data['content_view'] = "v_berita_reporter.php";
		// $data['list_berita']=$this->m_berita->search();
		// $this->load->view('v_template1.php', $data);
	// }
	// function search_admin2(){
		// $data['content_view'] = "v_berita_reduktur.php";
		// $data['list_berita']=$this->m_berita->search();
		// $this->load->view('v_template2.php', $data);
	// }
	public function login(){
		$password = md5($this->input->post('password'));
		$this->load ->view('v_form_login');
		$username = $this->input->post('username');
		$login_status = $this->m_berita->validasi($username,$password);
		if($login_status){
			$this->session->set_userdata('ses_username',$username);
			$this->session->set_userdata('ses_login_type',"reporter");
			$this->session->set_userdata('ses_login_status',$login_status);
			redirect('c_home/display1');
		}
		$login_status = $this->m_berita->validasi2($username,$password);
		if($login_status){
			$this->session->set_userdata('ses_username',$username);
			$this->session->set_userdata('ses_login_type',"redaksi");
			$this->session->set_userdata('ses_login_status',$login_status);
			redirect('c_home/display2');
		}
	}
	public function logout(){
		$this->session->unset_userdata('ses_login_status');
		$this->session->unset_userdata('ses_username');
		redirect('c_berita/index');
	}
	
	function aktif($vid) {
		$data['content_view'] = "v_berita_detail_reduktur.php";
		$vid = $this->uri->segment(3);
		$data ['list_berita'] = $this->m_berita->get_detail_data($vid);
		$data ['list_gambar'] = $this->m_berita->get_detail_gambar($vid);
		$this->load->view('v_template2.php', $data);
		$this->m_berita->change_status($vid, 1);
	}
	//function nonaktif($vid) {
		//$this->m_berita->change_status($vid, 0);
		//redirect('c_berita/display2','refresh');
	//}
	
	function publish($vid) {
		$this->m_berita->change_publish($vid, 1);
		// $this->m_berita->change_status($vid, 0);
		redirect('c_berita/kelolared','refresh');
	}
	function nonpublish($vid) {
		$this->m_berita->change_publish($vid, 0);
		redirect('c_berita/display2','refresh');
	}
	function selanjutnya() {
	$id=$this->uri->segment(3);
	$data['content_view'] = "v_berita.php";
	$data['list_berita']=$this->m_berita->per_id($id);
	$this->load->view('v_template',$data);
	}
	
// KATEGORI !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	function kategori1(){
		$data['content_view'] = "v_berita.php";
		$data['list_berita']=$this->m_berita->kategori1();
		$data['list_foto']=$this->m_berita->kategori1(1);
		$data['list_populer']=$this->m_berita->get_list_data(7);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template.php',$data);
	}
	function kategori2(){
		$data['content_view'] = "v_berita.php";
		$data['list_berita']=$this->m_berita->kategori2();
		$data['list_foto']=$this->m_berita->kategori2(1);
		$data['list_populer']=$this->m_berita->get_list_data(7);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template.php',$data);
	}
	function kategori3(){
		$data['content_view'] = "v_berita.php";
		$data['list_berita']=$this->m_berita->kategori3();
		$data['list_foto']=$this->m_berita->kategori3(1);
		$data['list_populer']=$this->m_berita->get_list_data(7);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template.php',$data);
	}
	function kategori4(){
		$data['content_view'] = "v_berita.php";
		$data['list_berita']=$this->m_berita->kategori4();
		$data['list_foto']=$this->m_berita->kategori4(1);
		$data['list_populer']=$this->m_berita->get_list_data(7);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template.php',$data);
	}
	function kategori5(){
		$data['content_view'] = "v_berita.php";
		$data['list_berita']=$this->m_berita->kategori5();
		$data['list_foto']=$this->m_berita->kategori5(1);
		$data['list_populer']=$this->m_berita->get_list_data(7);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template.php',$data);
	}
	function kategori6(){
		$data['content_view'] = "v_berita.php";
		$data['list_berita']=$this->m_berita->kategori6();
		$data['list_foto']=$this->m_berita->kategori6(1);
		$data['list_populer']=$this->m_berita->get_list_data(7);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template.php',$data);
	}
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// ----------------------REPORTER----------------------- //
	function terpublis(){
		if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		$data['content_view'] = "v_berita_reporter.php";
		$data['list_berita']=$this->m_berita->terpublis($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
	}
	}
	function arsip(){
		if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		$data['content_view'] = "v_berita_reporter.php";
		$data['list_berita']=$this->m_berita->arsip($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
	}
	}
	function k_hiburan(){
		if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		$data['content_view'] = "v_kategori.php";
		$data['list_berita']=$this->m_berita->k_hiburan($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
		}
	}
	function k_politik(){
		if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		
		$data['content_view'] = "v_kategori.php";
		$data['list_berita']=$this->m_berita->k_politik($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
	}
	}
	function k_kriminal(){
		if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		
		$data['content_view'] = "v_kategori.php";
		$data['list_berita']=$this->m_berita->k_kriminal($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
	}
	}
	function k_inter(){
		if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		
		$data['content_view'] = "v_kategori.php";
		$data['list_berita']=$this->m_berita->k_inter($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
	}
	}
	function k_teknologi(){
		if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		
		$data['content_view'] = "v_kategori.php";
		$data['list_berita']=$this->m_berita->k_teknologi($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
	}
	}
	function k_bisnis(){
		if($this->session->userdata('ses_login_status')) {
		$username = $this->session->userdata('ses_username');
		
		$data['content_view'] = "v_kategori.php";
		$data['list_berita']=$this->m_berita->k_bisnis($username);
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template1.php',$data);
	}
	}
// ----------------------REDAKSI----------------------- //
	function terpublis2(){
		$data['content_view'] = "v_berita_reduktur.php";
		$data['list_berita']=$this->m_berita->terpublis2();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	
	function arsip2(){
		$data['content_view'] = "v_berita_reduktur.php";
		$data['list_berita']=$this->m_berita->arsip2();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	
	function k_hiburan2(){
		$data['content_view'] = "v_kategori2.php";
		$data['list_berita']=$this->m_berita->k_hiburan2();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	
	function k_politik2(){
		$data['content_view'] = "v_kategori2.php";
		$data['list_berita']=$this->m_berita->k_politik2();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	
	function k_kriminal2(){
		$data['content_view'] = "v_kategori2.php";
		$data['list_berita']=$this->m_berita->k_kriminal2();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	
	function k_inter2(){
		$data['content_view'] = "v_kategori2.php";
		$data['list_berita']=$this->m_berita->k_inter2();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	
	function k_teknologi2(){
		$data['content_view'] = "v_kategori2.php";
		$data['list_berita']=$this->m_berita->k_teknologi2();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	
	function k_bisnis2(){
		$data['content_view'] = "v_kategori2.php";
		$data['list_berita']=$this->m_berita->k_bisnis2();
		$idBerita=$this->m_berita->get_list_data()->result();
		$i=1;
		foreach($idBerita as $cek){
			$data['list_gambar'][$i]=$this->m_berita->get_detail_gambar($cek->id)->row();
			$i++;
		}		
		$this->load->view('v_template2.php',$data);
	}
	
// ----------------------REDAKSI----------------------- //
	public function display_reporter_profile() {
			if($this->session->userdata('ses_login_status')) {
				$username = $this->session->userdata('ses_username');
				//echo $email;
				$data['list_mhsw'] = $this->m_reporter->member_profile($username);
				$data['content_view']='v_reporter_profil';
				$this->load->view('v_template1',$data);
			} else {
				redirect(base_url());
			}
		}
}
?>