<title>Update Password</title>
<div align="center">

<?php
	$foto=$row_data->gambar;
?><p>
<div class="world-news">
<div class="">
	<img src="<?php echo base_url().$foto; ?>" class="img-circle" width="320" height="320">
	<tr><p></tr>
	</div></div>
<?php echo form_open('c_reporter/update_pass_red/'.$row_data->username.''); ?>
<table align="center" class="font">
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td> * Digunakan Hanya Ketika Kata Sandi Eror !!! / Darurat !!!</td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Password </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'password','name'=>'password', 'type'=>'password', 'class'=>'form-control','placeholder'=>'Masukkan Password Baru')); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>

<tr>
<td> </td><td> </td><br>
	<td>
	<?php echo anchor ('c_reporter/index/', '<button type="button" class="btn btn-danger">Batal</button>'); ?>
	<?php echo anchor ('c_reporter/update_pass_red/'.$row_data->username, '<button type="submit" class="btn btn-sm btn-success">Simpan Perubahan</button>'); ?></td>
</tr>
<tr>
<b>
<td>-------------------</td>
<td>-</td>
<td>----------------------------------------------------------------------------</td></b>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input(array('class'=>'form-control', 'disabled'=>'disabled'),$row_data->nama); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Jenis Kelamin </td>
	<td> : </td>
	<td><select <?php echo form_input(array('class'=>'form-control', 'disabled'=>'disabled'),$row_data->jk); ?>>
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
	<td> <?php echo form_input(array('class'=>'form-control', 'disabled'=>'disabled'),$row_data->alamat); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>

</table>
