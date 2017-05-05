<div align="center">
<title>Update Password Profil</title>
<h3> UPDATE PASSWORD PROFIL</h3><br>

<?php echo form_open('c_reporter/update_pass/'.$row_data->username.''); ?>
<table align="center" class="font">
<?php
	$foto=$row_data->gambar;
?><p>
<div class="world-news">
	<img src="<?php echo base_url().$foto; ?>" class="img-circle" width="320" height="320">
	<tr><p></tr>
<table align="center" class="font">
<!--
<tr>
	<td> Username </td>
	<td> : </td>
	<td><?php echo form_input(array('id'=>'username','name'=>'username', 'class'=>'form-control', 'disabled'=>'disabled'),$row_data->username); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
-->
<tr>
<b>
<td>=============</td>
<td>=</td>
<td>==========================================</td>
<td>=====</td></b>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>

	<td> Password </td>
	<td> : </td>
	<!--<td> <?php echo form_input(array('id'=>'password','name'=>'password','placeholder'=>'Password lama', 'class'=>'form-control')); ?> -->
	<td> <?php echo form_input(array('id'=>'password','name'=>'password_lama', 'placeholder'=>'Password lama', 'type'=>'password','class'=>'form-control')); ?></td>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
	<td></td>
	<td></td>
	<td> <?php echo form_input(array('id'=>'password','name'=>'password_baru','placeholder'=>'Password baru','type'=>'password', 'class'=>'form-control')); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
	</tr>
<tr>
<td> </td><td> </td><br>
	<td><?php echo anchor ('c_reporter/display_reporter_profile/'.$row_data->username, '<button type="button" class="btn btn-sm btn-danger">Batal</button>'); ?>
	<?php echo anchor ('c_reporter/update_pass/'.$row_data->username, '<button type="submit" class="btn btn-sm btn-success">Simpan Perubahan</button>'); ?></td>
</tr>
<tr>
	<tr>
	<td colspan="3">&nbsp;</td>
	</tr><td></td>
	<td colspan="3">&nbsp;<?php if($this->uri->segment(4)=="error_password") echo "<b><i>*Password lama tidak sesuai</i></b>" ?></b>
	<br><br>
	</td>
</tr>
	</div>
	</div>
</table>
</table>
