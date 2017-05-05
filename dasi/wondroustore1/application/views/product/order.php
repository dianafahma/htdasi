<style type="text/css">
	.order{
		width: 100%;
		text-align: center;
		
	}
	.header-list-product{
		background-color: rgb(128, 13, 13);
		color: #ffffff;
	}
	.total{
		background-color: rgb(128, 13, 13);
		color: #ffffff;
		width: 110%;

	}
</style>
<head>
	<script src="<?php echo base_url();?>media/frontend/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>media/frontend/js/jquery-2.1.1.js"></script>
</head>
<!-- content -->
<div class="container">
<div class="main">
<form role="form" class="form-horizontal" method="POST" role="form" class="form-horizontal" action="<?php echo base_url();?>orders/bayar1/">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2><span>Masukkan Data Anda</span></h2>
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		<?php 

		$date = date( 'Y' ); // Tahun
		$get3number = substr( $date,-3 ); // mengambil 3 angka dari sebelah kanan pada tahun sekarang

		// Membuat fungsi acak huruf
		function random_char( $panjang ) { 
		$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		$string = ''; 
		for ( $i = 0; $i < $panjang; $i++ ) { 
		$pos = rand( 0, strlen( $karakter ) - 1 ); 
		$string .= $karakter{$pos}; 
		} 
		return $string;
		}

		$get_data = $this->m_order->ambildata();
		$query=$this->db->query("SELECT * FROM tbl_pemesanan");
		$n = $query->num_rows();
		$check = $n = $query->num_rows(); // untuk mengecek apakah di table barang "no/ kode" sudah ada atau belum

		$kd = ''; // mendefinisikan variable kd ( $kd ) dengan value null/ kosong. Hal ini sangatlah penting jika pada suatu kondisi tertentu nilai variable blm di definisikan, maka akan menimbulkan munculnya error/ notice

		if ( empty( $check ) ) { // Jk kode blm ada maka
		$kd = 1; // kode dimulai dr 1
		} else { // jk sudah ada maka
		$kd = $check + 1; // kode sebelumnya ditambah 1.
		}

		?>
		

		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form">
			<div>
					<label>
						<input type="text" id="no_pemesanan" name="no_pemesanan" value="<?php echo random_char(3) . $get3number . '-' . $kd;  ?>" readonly>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="nama depan" id="nama_depan" name="nama_depan" type="text" tabindex="1" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="nama belakang" id="nama_belakang" name="nama_belakang" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="email" id="email" name="email" type="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="no telepon/hp" id="no_hp" name="no_hp" type="text" tabindex="4" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="alamat lengkap" id="alamat" name="alamat" type="text" tabindex="5" required autofocus>
					</label>
				</div>


				<!-- <div class="sky-form">
					<div class="sky_form1">
						<ul>
							<li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Male</label></li>
							<li><label class="radio"><input type="radio" name="radio"><i></i>Female</label></li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<label>
						<input placeholder="retype password" type="password" tabindex="4" required>
					</label>
				</div> -->	
				<div>
					<input type="submit" id="submit" name="submit">
				</div>
				<!-- <div class="sky-form">
					<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to shoppe.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
				</div> -->
			</form>
			<!-- /Form -->
		</div>
	</div>
	<div class="registration_left">
		<h2>Produk yang Anda beli</h2>
		 <div class="registration_form">
			<table class="table table-condensed order">
			<tr class="header-list-product">
				<td>Produk</td>
				<td class="harga" id="harga" name="harga">Harga</td>
				<td class="jumlah">Qty</td>
				<td colspan="2">Sub Total</td>
			</tr>
		<?php

session_start();
			$harga = 'data[3]';
			$i=1;
			$jumlah = 1;

			$total = 0;

			if(!empty($pesanan))
				foreach($pesanan as $index => $data)

			{

				$_SESSION['vkode'][$i]=$data[0];
				$_SESSION['vnama'][$i]=$data[2];
				$_SESSION['vharga'][$i]=$data[3];
				$i=$i+1;
		?>
			<tr>
				<td><?php echo $data[2]; ?></td>
				<td>IDR. <?php echo $data[3]; ?></td>
				<td id="jumlah" name="jumlah">1</td>
				<td>
				<?php 
				echo $subtotal = $data[3] * $jumlah; ?></td>

			</tr>
		
		<?php


			$total = $total + $subtotal;
			}
		?>
			<tr>
				<td></td>
				<td></td>
				<td class="total" id="total" name="total">Total</td>
				<td><?php echo $total;?></td>
			</tr>
			</table>
			</div>


	</div>
	<div class="clearfix"></div>
</form>
	</div>
	<!-- end registration -->
</div>
