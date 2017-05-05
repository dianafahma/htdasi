<?php 
/**
* this is control for admin page
*/
class home_admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form','text','url');
		$this->load->model('model_admin','',TRUE);
		$this->load->library('pagination'); //memanggil paging
	}
	function tini(){
		$this->load->view('tini.php');
	}
	public function index(){
		$data['list_job']=$this->model_admin->get_all_job();
		$data['page_content']="list_jobs";
		$this->load->view('template.php',$data);
	}

	/*function display_job(){
		$data['list_job']=$this->model_admin->get_all_job();
		$data['page_content']="list_jobs";
		$this->load->view('template.php',$data);
	}

	$data['content_view']="v_mahasiswa_detail.php";
	$vnim= $this->uri->segment(3); //menangkap segment ke 3 dihutng dari index
	$data['row_data'] = $this->m_mahasiswa->get_detail_data($vnim);
	$this->load->view('v_templete_display',$data);
*/
	function detail_job(){
		$vid= $this->uri->segment(3);
		$data['row_data']=$this->model_admin->get_detail($vid);
		$data['page_content']="details_job";
		$this->load->view('template.php',$data);
	}

	function tambah(){
		# Autonumber Id  #
		/*
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
		*/
		$data["page_content"] = "input_data_form";
		$this->load->view("template",$data);
	}
	function proses_tambah(){
		$this->load->library('upload');
		
		$this->input->post('submit') ;
		$this->input->post('id');
			$config['upload_path']   =   "upload/";
			$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
			$config['max_size']      =   "50000000";
			$config['overwrite']     =   FALSE;
			$config['max_width']     =   "1907";
			$config['max_height']    =   "1280";
			$this->upload->initialize($config);

		// if(! $this->upload->do_upload()){
		// 	$this->model_admin->get_all_job();
		// 	redirect ('home_admin/');
		// }
		// else{
		// 	$file=$this->upload->data();
		// 	#$vnamafile=$file['file_name'];
		// 	$vjob=$this->input->post('job');
		// 	$vcompany=$this->input->post('company');
		// 	$vcontact=$this->input->post('contact');
		// 	$vadd=$this->input->post('address');
		// 	$vnamafile=$file['file_name'];
		// 	$vdes=$this->input->post('description');
		// 	$this->model_admin->insert($vjob,$vcompany,$vcontact,$vadd,$vnamafile,$vdes);
		// 	redirect ('home_admin/');
		// }
			if($this->upload->do_multi_upload('files'))
			{
				$file = $this->upload->get_multi_upload_data();
				$ctFile = count($file);
				for($i=0 ; $i<$ctFile ; $i++){
					$path = $config['upload_path'].$file[$i]['file_name'];
					$this->model_admin->insert($path,$file);
				}
				$this->m_berita->insert();
				redirect ('home_admin/');
			}
			else{
				$file = $this->upload->get_multi_upload_data();
				$ctFile = count($file);
				for($i=0 ; $i<$ctFile ; $i++){
					$path = $config['upload_path'].$file[$i]['file_name'];
					$this->model_admin->insert($path,$file);
				}
				$this->model_admin->insert();
				redirect ('home_admin/');
			}			
		
	}
}
?>