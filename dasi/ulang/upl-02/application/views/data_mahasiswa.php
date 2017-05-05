
	<h3>Tabel Mahasiswa</h3	>
	<center>
		
	<table  style="padding-left:30px; align="center" ">
		<tr class="thead">
		  <td width="20px">No</td>
		  <td width="50px">Nim</td>
		  <td  width="220px">Nama</td>
		  <td  width="80px">Umur</td>
		  <td width="200px">Action</td>
		</tr>
		<?php 
			$i=0;
		 foreach($list_mahasiswa as $row) 
		{
			$i=$i+1;
			
		$foto=$row['foto'];
		?>
		<tr class="tbody" >
		  <td><?php  echo $i;?>
		  <td><?php  echo $row['nim']?>
		  </td>
		  <td><?php  echo $row['nama']?>
		  </td>
		  <td><?php  echo $row['umur']?></td>
		  <td><?php  echo anchor('test_c/detail_mahasiswa/'.$row['id'],'Detail','id=buttonaction')?>  <?php  echo anchor('test_c/delete_mahasiswa/'.$row['id'],'Hapus','id=buttonaction')?><?php  echo anchor('test_c/get_edit_mahasiswa/'.$row['id'],'Edit','id=buttonaction')?></td>
		  <!--<td><img src="<?php echo base_url().'aset/'.$foto?>"></td>-->
		</tr>
		<?php  } ?>
	</table>
		<?php
		echo $this->pagination->create_links();
		?>
	</center>