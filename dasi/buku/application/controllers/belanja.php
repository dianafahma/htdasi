<?php 
 class belanja extends CI_controller {
 function __construct(){
	parent::__construct();
	$this->load->helper('form');
	$this->load->model('membeli','',TRUE);
	$this->load->library('session');
	}

	// tampilan pertama kali
	public function index()
	{
		$data['list_brg']=$this->membeli->get_list_data();
		$this->load->view('home',$data);
	}

	function search(){
	$data['list_brg']=$this->membeli->search();
	$this->load->view('home',$data);
	}
		function cat_buku(){
		$data['list_brg']=$this->membeli->cat_bukutulis();
		$this->load->view('home',$data);
		}
		function cat_alat(){
		$data['list_brg']=$this->membeli->cat_alattulis();
		$this->load->view('home',$data);
		}
		
	//menampilkan detail barang
	public function view_detail(){
	$vid = $this->uri->segment(3);
	$data['row_data'] = $this->membeli->get_detail_data($vid);
	$this->load->view('detail',$data);
	}

	//confirmasi pesanan yang masuk daftar

	// berhubungan dengan session
	// barang dipilih dengan session untuk dipesan
	function frontend_pesan($vid=""){
		if(!empty($vid)){ //Jika $vid tidak kosong
			$barang = $this->membeli->get_detail_data($vid);
			if(!($this->session->userdata('pesanan'))){//jika variabel pesanan masih kosong
				$newdata = array('pesanan' => array(array($barang->id_buku,$barang->nama_buku,$barang->harga,1)) );
				$this->session->set_userdata($newdata);
			}else{//jika variabel session pesanan sudah pernah terisi dengan data pesanan sebelumnya
				$pesanan = $this->session->userdata('pesanan');

				//check apakah id yang baru sudah ada pada shopping cart
				$status_sama=0;//0 berarti : tidak ada duplikasi data barang
				$pesanan = $this->session->userdata('pesanan');
				$i=1;
				foreach ($pesanan as $index => $data) {
					if ($vid==$pesanan[$index][0])
						{
							$status_sama=1;
						}
				}
				if ($status_sama==0){//tidak ada barang di shopping cart yang sama dengan barang yang baru dipikih -->tambahkan data ke shopping cart
					array_push($pesanan,array($barang->id_buku,$barang->nama_buku,$barang->harga,1) );
						$newdata = array('pesanan' => $pesanan );
					$this->session->set_userdata($newdata);
				}
				// echo $barang->kode_barang; #ini keluar 1 item saja
				}
		}
		$data['pesanan']=$this->session->userdata('pesanan');
		$this->load->view
		('shopping_cart',$data);
	}

	function transaksi(){
	session_start();
		$this->input->post('submit');
		$m=count($_SESSION['vname']);
		$i=1;
		while ($i<=$m){
		$vkode = $_SESSION['vkode'][$i];
		$vname =  $_SESSION['vname'][$i];
		$vharga = $_SESSION['vharga'][$i];
		$vjml= 1* $vharga;
		// $this->membeli->input_trx($vkode,$vname,$vharga,$vjml);
		$i=$i+1;
		}

		$this->load->view('transaksi');
	}

	function proses_beli(){
session_start();
		$this->input->post('submit');
		$total;
		$m=count($_SESSION['vname']);
		$i=1;
		while ($i<=$m){	
			$vharga = $_SESSION['vharga'][$i];
			$vjml= 1* $vharga;
			$i=$i+1;
		}

		$this->membeli->proses_trx($total);
		$this->load->view('transaksi');
		redirect('belanja');
	}

	function destroy(){		
		session_start();
		$i=1;
		$pesanan = $this->session->userdata('pesanan');
		unset($pesanan[$i]);
		$this->session->set_userdata('pesanan',$pesanan);		
		redirect ('belanja/frontend_pesan','refresh');
	}


	//menghapus semua data session
	function destroyall(){
		session_start();

		$this->session->unset_userdata('pesanan',0);
		session_destroy();
			redirect ('belanja/','refresh');
	}

}
?>
