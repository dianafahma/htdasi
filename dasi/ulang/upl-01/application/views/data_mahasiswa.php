
	Tabel Mahasiswa
	<table border=".5">
		<tr>
		  <td>Nim</td>
		  <td>Nama</td>
		  <td>Umur</td>
		  <td>Action</td>
		</tr>
		<?php  foreach($list_mahasiswa as $row) 
		{
		$foto=$row['foto'];
		?>
		<tr>
		  <td><?php  echo $row['nim']?>
		  </td>
		  <td><?php  echo $row['nama']?>
		  </td>
		  <td><?php  echo $row['umur']?></td>
		  <td><?php  echo anchor('test_c/detail_mahasiswa/'.$row['id'],'Detail')?> # <?php  echo anchor('test_c/delete_mahasiswa/'.$row['id'],'Hapus')?> # <?php  echo anchor('test_c/get_edit_mahasiswa/'.$row['id'],'Edit')?></td>
		  <!--<td><img src="<?php echo base_url().'aset/'.$foto?>"></td>-->
		</tr>
		<?php  } ?>
	</table>