
	<?php 
	//short by tgl
	echo form_open('c_hrd/list_absen');
	echo form_close();?>
	<div>
		<table border="1">
		<tr>
		  <th colspan="7"> Tabel Absensi Pekerja</th>
		</tr>
		<tr>
		  <td>No</td>
		  <td>Id Karyawan</td>
		  <td>Job/s Desk</td>
		  <td>Pihak</td>
		  <td>Aksi</td>
		</tr>
		<?php 
		foreach($list_absen as $row)
		{
		$i=0;		$i++;
		?>
		<tr>
		  <td><?php echo $i;?></td>
		  <td><?php echo $row['id_kar'];?></td>
		  <td><?php echo $row['tgl_kerja'];?></td>
		  <td><?php echo $row['hadir'];?></td>
		  <td><?php echo anchor('c_hrd/detail_karyawan/','Detail'); echo " | ";
		  echo anchor('c_hrd/hapus_karyawan/','Hapus');?></td>
<?php		}?>
		</tr>
		</table>
		<div><?php echo "belum berhasil login";?></div>
	</div>