<?php 
 class C_kota extends CI_controller {
 
 function __construct(){
	parent::__construct();
	$this->load->helper('form');
	$this->load->model('m_kota','',TRUE);
	$this->load->library('session');
	}


	function display(){
	$data['list_brg']=$this->m_kota->get_list_data();
	$this->load->view('v_kota_display',$data);
	}


	
	function tambah(){
	if($this->input->post('submit'))
	 {
	  $this->m_kota->insertdata();
	  redirect('c_kota/display');
	 }
	  $this->load->view('v_kota_add');
	}
	
	function view_detail(){
	$vnim = $this->uri->segment(3);
	$data['row_data'] = $this->m_kota->get_detail_data($vnim);
	$this->load->view('v_kota_detail.php',$data);
	}
	
	function delete_data(){
	$vid_kota = $this->uri->segment(3);
	$this->m_kota->delete_data($vid_kota);
	redirect('c_kota/display');
	}
	
	function search(){
	$data['list_kota']=$this->m_kota->search();
	$this->load->view('v_kota_display',$data);
	}
	
	function display_form_update(){
	$vid_kota = $this->uri->segment(3);
	$data['row_data'] = $this->m_kota->get_update_data($vid_kota);
	$this->load->view('v_kota_update.php',$data);
	}
	function update_data_db(){
	$vnim=$this->uri->segment(3);
	$this->m_kota->update_data_db($vid_kota);
	redirect('c_kota/display');
	}
			
		function destroyall(){
			$this->session->unset_userdata('pesanan',0);
			session_destroy();
				redirect ('c_kota/frontend_pesan','refresh');
		}

function destroy(){
	$pesanan = $this->session->userdata('pesanan');
unset($pesanan[2]);
$this->session->set_userdata('pesanan',$pesanan);
	/*
	$this->session->unset_userdata('pesanan',0);
	session_destroy();
*/
	redirect ('c_kota/frontend_pesan','refresh');
}

	function frontend_pesan($vid=""){
		if(!empty($vid)){ //Jika $vid tidak kosong
			$barang = $this->m_kota->get_detail_data($vid);
			if(!($this->session->userdata('pesanan'))){//jika variabel pesanan masih kosong
				$newdata = array('pesanan' => array(array($barang->kode_barang,$barang->nama_barang,$barang->gambar_i,1)) );
				$this->session->set_userdata($newdata);
			}else{//jika variabel session pesanan sudah pernah terisi dengan data pesanan sebelumnya
				$pesanan = $this->session->userdata('pesanan');

				//check apakah id yang baru sudah ada pada shopping cart
				$status_sama=0;//0 berarti : tidak ada duplikasi data barang
				$pesanan = $this->session->userdata('pesanan');
				foreach ($pesanan as $index => $data) {
					if ($vid==$pesanan[$index][0])
						{
							$status_sama=1;
						}
				}
				if ($status_sama==0){//tidak ada barang di shopping cart yang sama dengan barang yang baru dipikih -->tambahkan data ke shopping cart
					array_push($pesanan,array($barang->kode_barang,$barang->nama_barang,$barang->gambar_i,1) );
					$newdata = array('pesanan' => $pesanan );
					$this->session->set_userdata($newdata);
				}

			}
		}
		$data['pesanan']=$this->session->userdata('pesanan');
		$this->load->view('v_shopping_cart.php',$data);
	}

	function pesan(){
		$kodel=$this->input->post('kode_barang');
		echo $kodel;
	}
	function transaksi(){
		if($this->input->post('submit'))
	 {
	  $this->m_kota->input_trx();
	  redirect('c_kota/frontend_pesan');
	 }
	  $this->load->view('transaksi');
	}



	function manual(){
		$i=1;
			$kode[1]="BB01";
			$kode[2]="BB02";
			$kode[3]="BB03";
			$kode[4]="BB04";

			//nama barang
			$nama[1]="Pensil";
			$nama[2]="Buku";
			$nama[3]="Pena";
			$nama[4]="Spidol";

			//harga
			$harga[1]="4000";
			$harga[2]="3000";
			$harga[3]="8000";
			$harga[4]="1000";

			//jumlah Belu
			$jmlb[1]="2";
			$jmlb[2]="3";
			$jmlb[3]="4";
			$jmlb[4]="5";

			//menampilkan ke database
			$n=4;
			$i=1;
			while ($i<= $n) {
				#echo $kode[$i].$nama[$i].'<br/>';
				$vkode=$kode[$i];
				$vnama=$nama[$i];
				$vharga=$harga[$i];
				$vjmlb=$jmlb[$i];
				$total=$jmlb[$i]*$vharga[$i];
				 // echo $kode[$i];
				 // echo $nama[$i];
				 // break;
				// echo $total;
				// break;
				$this->m_kota->test($vkode,$vnama,$vharga,$vjmlb);	
				$i=$i+1;
			}
			
			 echo $total;
			 break;
		#$this->load->view('manual_aray');
	}


	function manual2(){
		
			$kode[1]="BB05";
			$kode[2]="BB02";
			$kode[3]="BB03";
			$kode[4]="BB04";

			//nama barang
			$nama[1]="Pensil";
			$nama[2]="Buku";
			$nama[3]="Pena";
			$nama[4]="Spidol";

			//harga
			$harga[1]=4000; #16
			$harga[2]=3000; #12
			$harga[3]=8000; #32
			$harga[4]=1000; #4

			//jumlah Belu
			$jmlb[1]=2;
			$jmlb[2]=3;
			$jmlb[3]=4;
			$jmlb[4]=1;


			//menampilkan ke database
			$n=4;
			$i=1;
			$total=0;
			while ($i<= $n) {
				$vkode=$kode[$i];
				$vnama=$nama[$i];
				$vharga=$harga[$i];
				$vjmlb=$jmlb[$i];
				$subtotal=$jmlb[$i]*$vharga[$i];
// echo $vharga;
// break;

				$this->m_kota->test1($vkode,$vnama,$vharga,$vjmlb,$subtotal);	
				$i=$i+1;
			}

	$n=4;
			$i=1;
			while ($i<= $n) {
				$vkode=$kode[$i];
				$vnama=$nama[$i];
				$vharga=$harga[$i];
				$vjmlb=$jmlb[$i];
				$this->m_kota->test2($vkode,$vnama,$vharga,$vjmlb);	
				$i=$i+1;
			}
	$n=4;
			$i=1;
			while ($i<= $n) {
				$vkode=$kode[$i];
				$vnama=$nama[$i];
				$vharga=$harga[$i];
				$vjmlb=$jmlb[$i];
				$this->m_kota->test3($vkode,$vnama,$vharga,$vjmlb);	
				$i=$i+1;
			}
							echo $subtotal;
// break;
			//pemesanan = insert , pesan = insert , barang = update
			//pemesanan

	}
}
?>