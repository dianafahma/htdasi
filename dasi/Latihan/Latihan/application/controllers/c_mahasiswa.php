 <?php
	class C_mahasiswa extends CI_controller {
	
	function __construct(){
	parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_mahasiswa','',TRUE);
		$this->load->library('pagination'); // call pagination library 
		
	}
//function display
	function display(){
	$data['list_mhsw']=$this->m_mahasiswa->get_list_data();
	$data['content_view'] = "v_mahasiswa_display.php";
	$this->load->view('v_template',$data);
	}
//function view detail
	function view_detail(){
	$vnim = $this->uri->segment(3);
	$data['row_data'] = $this->m_mahasiswa->get_detail_data($vnim);
	$data['content_view'] = "v_mahasiswa_detail.php";
	$this->load->view('v_template',$data);
	}
//function delete data
	function delete_data(){
	$vnim = $this->uri->segment(3);
	$this->m_mahasiswa->delete_data($vnim);
	redirect('c_mahasiswa/display');
	}
//function update
	function display_form_update(){
	$vnim = $this->uri->segment(3);
	$data['row_data'] = $this->m_mahasiswa->get_update_data($vnim);
	$data['content_view'] = "v_mahasiswa_update.php";
	$this->load->view('v_template',$data);
	}
	function update_data_db(){
	$vnim=$this->uri->segment(3);
	$this->m_mahasiswa->update_data_db($vnim);
	redirect('c_mahasiswa/display');
	}
//function search
	function search(){
	$data['list_mhsw']=$this->m_mahasiswa->search();
	$data['content_view'] ="v_mahasiswa_display.php";
	$this->load->view('v_template',$data);
	}
//function insert data
	function tambah(){
		if($this->input->post('submit'))
		{
		$this->m_mahasiswa->insertdata();
		redirect('c_mahasiswa/display');
		}
	  $data['content_view'] ="v_mahasiswa_add.php";
	  $this->load->view('v_template',$data);
	}
//function pagination
	function display_pagination() {
	//count the total rows
	$query=$this->db->query("select * from ccdp");
	$n=$query->num_rows();
	
	$config['base_url'] = base_url().'index.php/c_mahasiswa/display/';
	$config['total_rows'] = $n;
	$config['per_page'] = '3';
	$config['uri_segment'] = 3;
	$config['full_tag_open'] = '[';
	$config['full_tag_close'] = ']';
	
	$this->pagination->initialize($config); //initialize pagination
     $data['title'] = 'Daftar Mahasiswa';
     $data['list_mhsw'] = $this->m_mahasiswa->get_all_pagination($config['per_page'], $this->uri->segment(3));
	 $data['content_view'] ="v_mahasiswa_display.php";
	 $this->load->view('v_template',$data);
	}
}
?>