<table border="1">
	<tr>
		<td>Kode Supplier </td>
		<td>Nama Supplier <?php echo anchor('c_supplier/nama_supplier','Sort Nama ');
		  echo anchor('c_supplier/supplier_nama','Sort Nama D');
		?></td>
		<td>Alamat Supplier</td>
		<td>Opsi</td>
	</tr>
	<?php 
	echo form_open('c_supplier/data_supplier');
		foreach($list_supplier->result()as $row)
	{
	?>
	<tr>
		<td><?php echo $row->id_supplier; ?></td>
		<td><?php echo $row->nama_supplier; ?></td>
		<td><?php echo $row->alamat_supplier; ?></td>
		<td width="1000"><?php //echo anchor('c_kota/frontend_pesan/'.$row->id_kota, 'Pesan'); ?></td>
		<td width="5000"><?php echo anchor('C_supplier/select_data/'.$row->id_supplier, 'Select'); ?></td>
	</tr>
	<?php } ?>
</table>
