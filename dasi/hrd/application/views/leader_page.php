<?php if (! $this->session->userdata('ses_login_stat')){
redirect ('c_loginhrd/masuk_app');
}?>
<html>
<head>
</head>
<body>
	<?php 
	echo form_open('c_hrd/list_karyawan');
	echo form_close();?>
	<div>
		<table border="1">
		<tr>
		  <th colspan="6"> Tabel Data Karyawan</th>
		</tr>
		<tr>
		  <td>No</td>
		  <td>Id Karyawan</td>
		  <td>Nama Karyawan</td>
		  <td>Id KTP</td>
		  <td>Jabatan</td>
		  <td>Gaji</td>
		</tr>
		<?php 
		foreach($list_karyawan as $row)
		{
		$i=0;		$i++;
		?>
		<tr>
		  <td><?php echo $i;?></td>
		  <td><?php echo $row['id_kar'];?></td>
		  <td><?php echo $row['nama_kar'];?></td>
		  <td><?php echo $row['ktp'];?></td>
		  <td><?php echo $row['jabatan'];?></td>
		  <td><?php echo $row['gaji'];?></td>
<?php		}?>
		</tr>
		</table>
		<div><?php echo "belum berhasil login";?></div>
	</div>
</body>
</html>