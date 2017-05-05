<?php 
class test_C extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('test_m','',TRUE);
		$this->load->helper('form');
		$this->load->database();
		$this->load->library(array('session'));
	}
	function display(){
		$this->load->view('template');
	}
	function display_mahasiswa(){
		$data['content_view']="data_mahasiswa.php";
		$data['list_mahasiswa']=$this->test_m->get_list_mahasiswa();
		$this->load->view('template',$data);
	}
	function detail_mahasiswa(){
		$id=$this->uri->segment(3);
		$data['row']=$this->test_m->get_detail_data($id);
		$data['content_view']="detail_mahasiswa.php";
		$this->load->view('template',$data);

	}

	function get_edit_mahasiswa(){
		$id=$this->uri->segment(3);
		$data['row']=$this->test_m->get_edit_data($id);
		$data['content_view']="edit_mahasiswa.php";
		$this->load->view('template',$data);	
	}
	
	function edit_mahasiswa(){
		$id=$this->uri->segment(3);
		if ($this->input->post('submit') && $this->input->post('submit')=="Simpan") {
			$nim=$this->input->post('nim');
			$vnama=$this->input->post('nama');
			$umur=$this->input->post('umur');
			if (!empty($_FILES['userfile']['name'])) {
				$config['upload_path'] = "./unggah/";
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['overwrite']	= true;
				$config['remove_spaces'] = true;
				$config['max_size']	= '1024';
				$config['max_width']  = '2048';
				$config['max_height']  = '2048';
		
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('userfile'))
				{
					//echo '<script>alert('.$this->upload->display_errors().')</script>';
					$data['content_view']="edit_mahasiswa.php";
					$this->load->view("template",$data);
				}
				else
				{
					$file = $this->upload->data(); 
					$vfile = $file['file_name'];
				}
			} else {
				$vfile = '';
			}
			$this->test_m->edit_data($id,$nim,$vnama,$vfile,$umur);
			$this->display_mahasiswa();
			
		} else {
			$data['content_view']="edit_mahasiswa.php";
			$this->load->view("template",$data);

		}
	}

	function delete_mahasiswa(){
		$id=$this->uri->segment(3);
		$data['row']=$this->test_m->delete_data($id);
		redirect ('test_c/display_mahasiswa');
	}
	
	public function do_upload(){
		if ($this->input->post('submit') && $this->input->post('submit')=="upload") {
			$nim=$this->input->post('nim');
			$vnama=$this->input->post('nama');
			$umur=$this->input->post('umur');
			if (!empty($_FILES['userfile']['name'])) {
				$config['upload_path'] = "./unggah/";
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['overwrite']	= true;
				$config['remove_spaces'] = true;
				$config['max_size']	= '1024';
				$config['max_width']  = '2048';
				$config['max_height']  = '2048';
		
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('userfile'))
				{
					echo '<script>alert('.$this->upload->display_errors().')</script>';
					$data['content_view']="input_mahasiswa.php";
					$this->load->view("template",$data);
				}
				else
				{
					$file = $this->upload->data(); 
					$vfile = $file['file_name'];
				}
			} else {
				$vfile = '';
			}
			$this->test_m->insert_dmahasiswa($nim,$vnama,$vfile,$umur);
			$this->display_mahasiswa();
		} else {
			$data['content_view']="input_mahasiswa.php";
			$this->load->view("template",$data);
		}
	}

	
	public function edit_upload(){
		$gnim=$this->uri->segment(3);
		$config['upload_path']='./unggah/';
		$config['allowed_types']='png';
		$this->load->library('upload',$config);

		if(! $this->upload->do_upload()){
			$data['content_view']="update_foto.php";
			$this->load->view("template",$data);
		}else{
			$file=$this->upload->data();
			//$nim=$this->input->post('nim');
			$vnama=$this->input->post('nama');
			$vfile=$file['file_name'];
			$vumur=$this->input->post('umur');
			$this->test_m->update_dmahasiswa($gnim,$vnama,$vfile,$vumur);
			$data['content_view']="edit_mahasiswa";
			$this->load->view("template",$data);

		}
	}
	function search_mahasiswa(){
		$data['content_view']="data_mahasiswa.php";
		$data['list_mahasiswa']=$this->test_m->get_search_mahasiswa();
		$this->load->view('template.php',$data);
	}
	/*function input_mahasiswa(){
		if($this->input->post('submit')){
			$this->test_m->insert_mahasiswa();
		}
		$data['content_view']="input_mahasiswa.php";
		$this->load->view('template.php',$data);
	}
*/
	
}
?>
