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
<center>
	<table border="1" width="1100px">
		<tr height="80px"class="header">
			<td> Header
				<div style="float:right;">
				
				 <p>Halo,  <?php echo $this->session->userdata('ses_username'); ?> | 
				 <?php 
				
				echo anchor('c_login/logout','Logout')?></p></div >
			</td>
		</tr>
		<tr>
			<td> 
				<div class="nav">

					<ul>
						<li ><?php echo anchor ('c_sembako/display_home','Beranda'); ?></li>
						<li> <?php echo anchor ('c_sembako/display_barang','Gudang Sembako'); ?></li>
						<li><?php echo anchor ('c_sembako/display_toko','Pemasok')?></li>
						<li> <?php echo anchor ('c_sembako/display_tentang','Tentang Kita')?></li>
						<li> <?php echo anchor ('c_sembako/display_kontak','Kontak')?></li>
					</ul>
					
				</div>
			</td>
		</tr>
		<tr class="content" >
			<td> <?php $this->load->view($content_view)?>
			</td>
		</tr>
		<tr class="footer" align="center">
			<td>SembakoGampang | 2015 copyright
			</td>
		</tr>
	</table>
</center>
</body>
</html>