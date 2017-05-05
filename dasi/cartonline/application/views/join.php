<?php echo anchor('shop_control/admin_page/','admin')?>
<table border="1" align="center" width="400" height="30">
	<tr bgcolor="lime" align="center">
		<td> ID pesan </td>
		<td> Nama barang </td>
		<td> harga </td>
		<td> Jumlah pesan </td>
		<td colspan=4 width="500"> Aksi </td>
	</tr>

 <?php
 foreach ($list_barang->result() as $pp)
 	{
 
?>
<tr align="center">
	<td><?php echo $pp->no_pesan; ?></td>
	<td><?php echo $pp->nama_barang; ?></td>
	<td><?php echo $pp->harga_satuan; ?></td>
	<td><?php echo $pp->jml_pesan; ?></td>
	<!-- <td width="1000"><?php echo anchor('c_kota/frontend_pesan/'.$row->id_kota, 'Pesan'); ?></td>
	<td width="5000"><?php echo anchor('C_kota/view_detail/'.$row->id_kota, 'view detail'); ?></td>
	<td width="1000"><?php echo anchor('C_kota/delete_data/'.$row->id_kota, 'delete'); ?></td>
	<td width="1000"><?php echo anchor('C_kota/display_form_update/'.$row->id_kota, 'Update'); ?></td> -->
</tr>
	<?php
	}
?>
</table>