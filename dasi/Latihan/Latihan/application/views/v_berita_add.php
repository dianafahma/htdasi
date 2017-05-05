<div align="center">
	<h3>PAGE GAMBAR CCDP</h3>
	<?php echo form_open('c_gambar/insert'); ?>
	
<table>
	<tr>
		<td>ID GAMBAR</td>
		<td>:</td>
		<td><input type="text" name="id"></td>
	</tr>
	<tr>
		<td>FILE</td>
		<td>:</td>
		<td><input type="file" name="file"></td>
	</tr>
</table>
<table>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><?php echo form_submit('submit','Simpan','id="submit"'); ?></td>
		
<?php echo form_close();
	  echo form_open('c_berita/display'); ?>
	 
		<td><?php echo form_submit('submit','Kembali','id="submit"');?></td>
		<?php echo form_close(); ?>
	</tr>
</table>
</div>