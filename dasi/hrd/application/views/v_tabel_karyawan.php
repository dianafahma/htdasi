
	<?php 
	echo form_open('c_hrd/list_karyawan');
	echo form_close();?>
	<div>
		<table border="1">
		<tr>
		  <th colspan="7"> Tabel Data Karyawan</th>
		</tr>
		<tr>
		  <td>No</td>
		  <td>Id Karyawan</td>
		  <td>Nama Karyawan</td>
		  <td>Id KTP</td>
		  <td>Jabatan</td>
		  <td>Gaji</td>
		  <td>Aksi</td>
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
		  <td><?php echo anchor('c_hrd/detail_karyawan/','Detail'); echo " | ";
		  echo anchor('c_hrd/hapus_karyawan/','Hapus');?></td>
<?php		}?>
		</tr>
		</table>
		<div><?php echo "belum berhasil login";?></div>
	</div>