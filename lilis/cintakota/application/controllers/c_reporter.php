 <?php
	class C_reporter extends CI_controller {
	
	function __construct(){
	parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_reporter','',TRUE);
		$this->load->library(array('upload','form_validation',''));
		$this->load->library('pagination');
	}
	
//function display
	function display(){
	$data['content_view'] = "v_reporter_display.php";
	$data['list_mhsw']=$this->m_reporter->get_list_data();
	$this->load->view('v_template2',$data);
	}
	// function display1(){
	// $vusername = $this->uri->segment(3);
	// $data['content_view'] = "v_reporter_profil.php";
	// $data['list_mhsw']=$this->m_reporter->get_profil($vusername);
	// $this->load->view('v_template1',$data);
	// }
//function view detail
	function view_detail(){
	$vusername = $this->uri->segment(3);
	$data['row_data'] = $this->m_reporter->get_detail_data($vusername);
	$data['content_view'] = "v_reporter_detail.php";
	$this->load->view('v_template2',$data);
	}
//function delete data 
	function delete_data(){
	$vusername = $this->uri->segment(3);
	$this->m_reporter->delete_data($vusername);
	redirect('c_reporter/display');
	}
//function update
	function display_form_update(){
	$vreporter = $this->uri->segment(3);
	$data['row_data'] = $this->m_reporter->get_update_data($vreporter);
	// $data['content_view'] = "v_reporter_update.php";
	$data['content_view'] = "v_reporter_update.php";
	$this->load->view('v_template2',$data);
	}
	
	function update_nama(){
	$vusername=$this->uri->segment(3);
	$nama= $_POST['nama'];
	$this->m_reporter->update_nama($vusername,$nama);
	redirect('c_reporter/display_reporter_profile');
	}
	
	function update_pass(){
	$vusername=$this->uri->segment(3);
	$password_lama= md5($_POST['password_lama']);
	$password_baru= md5($_POST['password_baru']);
	$result = $this->m_reporter->update_pass($vusername,$password_lama,$password_baru);
	if($result)
	redirect('c_reporter/display_reporter_profile');
	else
	redirect("c_reporter/edit_pass/$vusername/error_password");
	}
	
	function update_pass_red(){
	$vusername=$this->uri->segment(3);
	$password= md5($_POST['password']);
	$this->m_reporter->update_pass_red($vusername,$password);
	redirect('c_reporter/index');
	}

	function update_jk(){
	$vusername=$this->uri->segment(3);
	$jk= $_POST['jk'];
	$this->m_reporter->update_jk($vusername,$jk);
	redirect('c_reporter/display_reporter_profile');
	}
	
	function update_alamat(){
	$vusername=$this->uri->segment(3);
	$alamat= $_POST['alamat'];
	$this->m_reporter->update_alamat($vusername,$alamat);
	redirect('c_reporter/display_reporter_profile');
	}
	
//function search
	function search(){
	$data['list_mhsw']=$this->m_reporter->search();
	$data['content_view'] ="v_reporter_display.php";
	$this->load->view('v_template2',$data);
	}
	
//function insert data
	function tambah(){
		if($this->input->post('submit'))
		{
		$this->m_mahasiswa->insert($data);
		redirect('c_reporter/index');
		}
	  $data['content_view'] ="v_reporter_add.php";
	  $this->load->view('v_template2',$data);
	}
	
	public function insert(){
	$config['upload_path'] ='./images/';
	$config['allowed_types'] = 'jpg|jpeg|png|gif';
	$this->upload->initialize($config);
	
	if(!$this->upload->do_upload('gambar'))
	{
		echo 'upload gagal....';
	}
	else
	{
		$file = $this->upload->data();
		
		$data=array(
		"username" => $this->input->post('username'),
		"password" => md5($this->input->post('password')),
		"nama" => $this->input->post('nama'),
		"jk" => $this->input->post('jk'),
		"alamat" => $this->input->post('alamat'),
		"gambar" => 'images/'.$file['file_name']);
		
		$this->m_reporter->insert($data);
	}
	redirect ('c_reporter/index');	
	}

//function pagination
	function index(){
		$query=$this->db->query("select * from member");
		$n = $query->num_rows();

		$config['base_url'] = base_url().'index.php/c_reporter/index/';
		$config['total_rows'] = $n;
		$config['per_page'] = '5';
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="last-page">';
		$config['first_tag_close'] = '</li>';
		$config['next_link'] = '<span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev-link'] = '<span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		$data['content_view']="v_reporter_display";
		$data['list_reporter']=$this->m_reporter->get_all($config['per_page'],$this->uri->segment(3));
		$this->load->view('v_template2',$data);		
	}
	
	public function display_reporter_profile() {
			if($this->session->userdata('ses_login_status')) {
				$username = $this->session->userdata('ses_username');
				$data['list_mhsw'] = $this->m_reporter->member_profile($username);
				$data['content_view']='v_reporter_profil';
				$this->load->view('v_template1',$data);
			} else {
				redirect(base_url());
			}
		}
		
	// Update Redaksi
	function edit_pass_red(){
	$username=$this->uri->segment(3);
	$data['row_data'] = $this->m_reporter->member_profile($username);
	$data['content_view'] = "v_rep_update_pass2.php";
	$this->load->view('v_template2',$data);
	}
	
	// Update Reporter
	function edit_pass(){
	if($this->session->userdata('ses_login_status')) {
	$vusername = $this->session->userdata('ses_username');
		$data['row_data'] = $this->m_reporter->get_update_data($vusername);
		$data['content_view'] = "v_rep_update_pass.php";
		$this->load->view('v_template1',$data);
		}
	}
	function edit_nama(){
	if($this->session->userdata('ses_login_status')) {
		$vusername = $this->session->userdata('ses_username');
		$data['row_data'] = $this->m_reporter->get_update_data($vusername);
		$data['content_view'] = "v_rep_update_nama.php";
		$this->load->view('v_template1',$data);
		}
	}
	function edit_jk(){
	$vusername = $this->uri->segment(3);
	if($this->session->userdata('ses_login_status')) {
		$vusername = $this->session->userdata('ses_username');
		$data['row_data'] = $this->m_reporter->get_update_data($vusername);
		$data['content_view'] = "v_rep_update_jk.php";
		$this->load->view('v_template1',$data);
		}
	}
	function edit_alamat(){
	if($this->session->userdata('ses_login_status')) {
		$vusername = $this->session->userdata('ses_username');
		$vusername = $this->uri->segment(3);
		$data['row_data'] = $this->m_reporter->get_update_data($vusername);
		$data['content_view'] = "v_rep_update_alamat.php";
		$this->load->view('v_template1',$data);
		}
	}
}
?> 