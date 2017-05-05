<?php
if (! $this->session->userdata('ses_login_status')){
	redirect ('c_login/login');
}
?>
<html>
<head>
<title>
</title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/css/style.css'?>"/>
</head
<body>
<h2>Selamat Datang !</h2>
			<p>SembakoGampang akan memudahkan Anda mencari berbagai kebutuhan primer sembako.</p>
			<marquee direction="right">Apa yang kami tahu, Anda akan Tahu</marquee>
<center>
<table border="1"> 
	<tr >
		<td width="220px" rowspan="2">
			<div align="center">
				<?php
				echo form_open_multipart('c_sembako/do_upload');
				?>
				<table>
				<tr>
					<td>Berita Sembako </td>
					<td>:</td>
					<td><input type="text" name="deskripsi" /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="file" name="userfile" size="20" /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" value="upload" /></td>
				</tr>
				</table>
				</form>
				<h2>DAFTAR Berita</h2>
				<table border="1">
					<tr bgcolor="#0033ff">
						<td> Nama Tugas </td>
						<td> Nama File</td>
						<td> Tanggal Upload </td>
					</tr>
					<?php 
					foreach($list_sembako->result() as $row){
					?>
					<tr>
						<td><?php echo $row->judul;?> </td>
						<td><a href="<?php echo base_url();?>upload/<?php echo $row->file;?>">
						<?php echo $row->file?></a></td>
						<td><?php echo $row->tanggal;?> </td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td> </td>
		<td rowspan="2">
		
				<table width="850px" class="header" style="padding-left:5px;">
					<!--<tr >
						<td> Sembako Terbaik <br/>
						<img src="<?php echo base_url().'asset/images/1.jpg';?>"/>
						<img src="<?php echo base_url().'asset/images/2.jpg';?>"/>
						</td>
					</tr>-->
					<tr height="30px"></tr>
					<tr >
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
					</tr>
									<tr >
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
					</tr>
									<tr >
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
					</tr>
									<tr >
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
						<td width="200px" height="150px"> Terbaru!! <br/>
							<button>Cek</button><button>Ubah</button><button>Hapus</button>
						</td>
					</tr>
				</table>
		</td>
	</tr>
</table>
</center>
</body>
</html>