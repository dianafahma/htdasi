<?php echo form_open('c_supplier/ubah_supplier/'.$row_data->id_supplier.'');?>
<table align="center" border="1">
	<tr>
	<td>ID Supplier</td> :
	<td> <input type="text" name="id_supplier" value="<?php echo $row_data->id_supplier; ?>" </td>
	</tr>
	
	<tr>
	<td>Nama Supplier</td>:
	<td> <input type="text" name="nama_supplier"  value="<?php echo $row_data->nama_supplier; ?>" </td>
	</tr>
	
	<tr>
	<td>Alamat Supplier</td>:
	<td> <input type="text" name="alamat_supplier"  value="<?php echo $row_data->alamat_supplier; ?>" </td>
	</tr>
	<tr>
		<td colspan="2"> <?php echo anchor('c_supplier/data_supplier','Cancel'); echo "&nbsp;&nbsp;&nbsp;";	
		//echo anchor('c_supplier/ubah_supplier/'.$row_data->id_supplier,'Ubah'); 
		echo form_submit('submit','Update','id="submit"');
		echo "&nbsp;&nbsp;&nbsp;";	
		echo anchor('c_supplier/hapus_supplier/'.$row_data->id_supplier,'Hapus'); ?> 
		</td>
	</tr>
</table>