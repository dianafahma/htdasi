
	<?php 
	//short by tgl
	echo form_open('c_hrd/list_dreport');
	echo form_close();?>
	<div>
		<table border="1">
		<tr>
		  <th colspan="7"> Tabel Nilai Pekerja </th>
		</tr>
		<tr>
		  <td>No</td>
		  <td>Id Karyawan</td>
		  <td>Job/s Desk</td>
		  <td>Action</td>
		  <td>Pihak</td>
		  <td>Nilai</td>
		  <td>Status</td>
		  <td>Aksi</td>
		</tr>
		<?php 
		foreach($list_dreport as $row)
		{
		$i=0;		$i++;
		?>
		<tr>
		  <td><?php echo $row['no'];?></td>
		  <td><?php echo $row['id_kar'];?></td>
		  <td><?php echo $row['job_desk'];?></td>
		  <td><?php echo $row['action'];?></td>
		  <td><?php echo $row['durasi'];?></td>
		  <td><?php echo $row['pihak'];?></td>
		  <td><?php echo anchor('c_hrd/detail_karyawan/','Detail'); echo " | ";
		  echo anchor('c_hrd/hapus_karyawan/','Hapus');?></td>
<?php		}?>
		</tr>
		</table>
		<div><?php echo "belum berhasil login";?></div>
	</div>