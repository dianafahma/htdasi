<center>
<?php
echo form_open('c_kota/search');
echo form_input('keyword');
echo form_submit('submit','Cari','id="submit"');
form_close();
echo '<br/>';
echo anchor('c_kota/tambah','Insert');
echo '<br/>';
echo anchor('c_supplier/data_supplier','Barang');
echo '<br/>';
echo anchor('c_supplier/tambah','Input Barang');
?>

</center>

<table border="1" align="center" width="400" height="30">
	<tr bgcolor="lime" align="center">
		<td> Kode Barang </td>
		<td> Nama Barang </td>
		<td> Gambar</td>
		<td> Harga</td>
		<td colspan=4 width="500"> Aksi </td>
	</tr>

 <?php
	foreach($list_brg->result()as $row)
	{
?>
<tr align="center">
	<td><?php echo $row->kode_barang; ?></td>
	<td><?php echo $row->nama_barang; ?></td>
	<td><?php echo $row->gambar_i; ?></td>
	<td><?php echo $row->harga_barang; ?></td>
	<td width="1000"><?php echo anchor('c_kota/frontend_pesan/'.$row->kode_barang, 'Pesan'); ?></td>
	<td width="5000"><?php echo anchor('C_kota/view_detail/'.$row->kode_barang, 'view detail'); ?></td>
	<td width="1000"><?php echo anchor('C_kota/display_form_update/'.$row->kode_barang, 'Update'); ?></td>
</tr>
	<?php
	}
?>
</table>