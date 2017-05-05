<?php
if(! defined('BASEPATH')) exit ('No direct script access allowed');
	class Product extends CI_Controller {
		function __construct(){
		parent::__construct();
			$this->load->helper('form','url');
			$this->load->model('m_product','',TRUE);
			$this->load->database();
			$this->load->library('pagination','session');		
	}


	//<!--PRIA--->
	function atasan_pria(){
		//count the total rows 
		$query=$this->db->query("SELECT tbl_product.kode_produk, tbl_product.nama_produk, tbl_product.harga, tbl_sub_category.sub_category_id, tbl_sub_category.sub_category_name, tbl_category.category_id, tbl_category.category_name FROM tbl_product INNER JOIN tbl_sub_category ON tbl_sub_category.sub_category_id=tbl_product.sub_category_id AND tbl_sub_category.sub_category_id = '1' INNER JOIN tbl_category ON tbl_category.category_id=tbl_sub_category.category_id AND tbl_category.category_id='1'");
	     $n = $query->num_rows();
		$config['base_url'] = base_url().'index.php/product/atasan_pria/'; 
			$config['total_rows'] = $n;
			$config['per_page'] = $n;
			$config['uri_segment'] = 3;
			$config['num_links'] = 9;

			$config['full_tag_open'] = '<div>';
			$config['full_tag_close'] = '</div>';

			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';

			$config['prev_link'] = 'Previous';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li class="active"><a href="">';
			$config['cur_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li class="page">';
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			//$data['list_product'] = $this->m_product->get_all_pagination($config['per_page'],$this->uri->segment(3));
		$data['total_rows'] = $n;
		//$data['total_rows'] = $this->db->count_all('tbl_product INNER JOIN tbl_category WHERE tipe_produk="atasan" AND category_id="1"');
		$data['produk'] = $this->m_product->get_atasan_pria($config['per_page'],$this->uri->segment(3));
		$data['content_view'] = "product/product-display.php";
		$this->load->view('template',$data);
	}

	function bawahan_pria(){
		//count the total rows 
		$query=$this->db->query("SELECT tbl_product.kode_produk, tbl_product.nama_produk, tbl_product.harga, tbl_sub_category.sub_category_id, tbl_sub_category.sub_category_name, tbl_category.category_id, tbl_category.category_name FROM tbl_product INNER JOIN tbl_sub_category ON tbl_sub_category.sub_category_id=tbl_product.sub_category_id AND tbl_sub_category.sub_category_id = '2' INNER JOIN tbl_category ON tbl_category.category_id=tbl_sub_category.category_id AND tbl_category.category_id='1'");
	     $n = $query->num_rows();
		$config['base_url'] = base_url().'index.php/product/bawahan_pria/'; 
			$config['total_rows'] = $n;
			$config['per_page'] = $n;
			$config['uri_segment'] = 3;
			$config['num_links'] = 9;

			$config['full_tag_open'] = '<div>';
			$config['full_tag_close'] = '</div>';

			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';

			$config['prev_link'] = 'Previous';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li class="active"><a href="">';
			$config['cur_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li class="page">';
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			//$data['list_product'] = $this->m_product->get_all_pagination($config['per_page'],$this->uri->segment(3));
		$data['total_rows'] = $n;
		//$data['total_rows'] = $this->db->count_all('tbl_product WHERE kategori="bawahan pria"');
		$data['produk'] = $this->m_product->get_bawahan_pria($config['per_page'],$this->uri->segment(3));
		$data['content_view'] = "product/product-display.php";
		$this->load->view('template',$data);
	}

	// //<!--WANITA-->
	function atasan_wanita(){
		//count the total rows 
		 $query=$this->db->query("SELECT tbl_product.kode_produk, tbl_product.nama_produk, tbl_product.harga, tbl_sub_category.sub_category_id, tbl_sub_category.sub_category_name, tbl_category.category_id, tbl_category.category_name FROM tbl_product INNER JOIN tbl_sub_category ON tbl_sub_category.sub_category_id=tbl_product.sub_category_id AND tbl_sub_category.sub_category_id = '9' INNER JOIN tbl_category ON tbl_category.category_id=tbl_sub_category.category_id AND tbl_category.category_id='2'");
	     $n = $query->num_rows();
		$config['base_url'] = base_url().'index.php/product/atasan_wanita/'; 
			$config['total_rows'] = $n;
			$config['per_page'] = $n;
			$config['uri_segment'] = 3;
			$config['num_links'] = 9;

			$config['full_tag_open'] = '<div>';
			$config['full_tag_close'] = '</div>';

			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';

			$config['prev_link'] = 'Previous';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li class="active"><a href="">';
			$config['cur_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li class="page">';
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			//$data['list_product'] = $this->m_product->get_all_pagination($config['per_page'],$this->uri->segment(3));

		$data['total_rows'] = $n;
		$data['produk'] = $this->m_product->get_atasan_wanita($config['per_page'],$this->uri->segment(3));
		$data['content_view'] = "product/product-display.php";
		$this->load->view('template',$data);
	}

	function product_detail(){
		$vkode_produk = $this->uri->segment(3);
		$data['p'] = $this->m_product->get_detail_data($vkode_produk);
		$data['content_view'] = "product/product-detail.php";
		$this->load->view('template',$data);
	}

	function add_to_cart($vkode_produk=""){
		if(!empty($vkode_produk)){ //Jika $vid tidak kosong
			$barang = $this->m_product->get_detail_data($vkode_produk);
			if(!($this->session->userdata('pesanan'))){//jika variabel pesanan masih kosong
				$new_data = array('pesanan' => array(array($barang->kode_produk,$barang->gbr_kecil,$barang->nama_produk,$barang->harga)));
				$this->session->set_userdata($new_data);
			}else{//jika variabel session pesanan sudah pernah terisi dengan data pesanan sebelumnya
				$pesanan = $this->session->userdata('pesanan');
				//check apakah id yang baru sudah ada pada shopping cart
				$status_sama=0;//0 berarti : tidak ada duplikasi data barang
				$status = $this->session->userdata('pesanan');
				foreach ($pesanan as $index => $data) {
					if ($vkode_produk==$pesanan[$index][0])
						{
							$status_sama=1;
						}
				}
				if ($status_sama==0){//tidak ada barang di shopping cart yang sama dengan barang yang baru dipikih -->tambahkan data ke shopping cart
					array_push($pesanan,array($barang->kode_produk,$barang->gbr_kecil,$barang->nama_produk,$barang->harga) );
					$new_data = array('pesanan' => $pesanan );
					$this->session->set_userdata($new_data);
				}
			}
		}

		$data['content_view'] = "product/shoppingcart-display.php";
		$data['pesanan'] = $this->session->userdata('pesanan');
		$this->load->view('template',$data);
	}

	function show_cart(){
		$data['pesanan'] = $this->session->userdata('pesanan');
		$data['content_view'] = "product/shoppingcart-display.php";
		$this->load->view('template', $data);
	}

	function empty_cart($vkode_produk="") {
		$this->session->sess_destroy();
		$data['content_view'] = "product/shoppingcart-display.php";
	    redirect('product/show_cart');
  	}

  	// public function _remap($method){
  	// 	$method = str_replace('-','_', $method);
  	// 	$foo_member = array('atasan_pria','bawahan_pria','atasan_wanita','product_detail','show_cart','empty_cart','add_to_cart');
  	// 	in_array($method, $foo_member) ?$this->$method() : show_404();
  	// }
  	function order(){
		$data['pesanan'] = $this->session->userdata('pesanan');
		$data['content_view'] = "product/order.php";
		$this->load->view('template', $data);
	}
}