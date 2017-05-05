<title>Update Reporter</title>
<div align="center">

<?php
	$foto=$row_data->gambar;
?><p>
<div class="world-news">
<div class="">
	<img src="<?php echo base_url().$foto; ?>" class="img-circle" width="320" height="320">
	<tr><p></tr>
	</div></div>
<?php echo form_open('c_reporter/update_data_db/'.$row_data->username.''); ?>
<table align="center" class="font">
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Password </td>
	<td> : </td>
	<!--<td> <?php echo form_input(array('id'=>'password','name'=>'password', 'class'=>'form-control')); ?> -->
	<td> &nbsp;<?php echo anchor ('c_reporter/edit_pass_red/'.$row_data->username, '<button type="button" class="btn btn-sm btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ubah Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>'); ?></td>
</tr>
</tr>
<p>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'nama','name'=>'nama', 'class'=>'form-control'),$row_data->nama); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Jenis Kelamin </td>
	<td> : </td>
	<td><select <?php echo form_input(array('id'=>'jk','name'=>'jk', 'class'=>'form-control'),$row_data->jk); ?>>
		   <option value="L" <?php if($row_data->jk=='L') echo 'selected' ?>>Laki-Laki</option>
		   <option value="P" <?php if($row_data->jk=='P') echo 'selected' ?>>Perempuan</option>
		</select></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Alamat </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'alamat','name'=>'alamat', 'class'=>'form-control'),$row_data->alamat); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td> </td><td> </td><br>
	<td>
	<?php echo anchor ('c_reporter/index/', '<button type="button" class="btn btn-danger">Batal</button>'); ?>
	<?php echo form_submit('submit','SIMPAN PERUBAHAN','class="btn btn-success"'); ?> </td>
</tr>

</table>
