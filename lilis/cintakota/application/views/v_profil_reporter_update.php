<div align="center">
<h3> UPDATE DATA </h3>
</div>
<?php echo form_open('c_reporter/update_data_db/'.$row_data->username.''); ?>
<table align="center" class="font">
<tr>
	<td> Username </td>
	<td> : </td>
	<td><?php echo form_input(array('id'=>'username','name'=>'username', 'class'=>'form-control'),$row_data->username); ?></td>
</tr>

<tr>
	<td> Password </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'password','name'=>'password', 'class'=>'form-control'),$row_data->password); ?></td>
</tr>

<tr>
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'nama','name'=>'nama', 'class'=>'form-control'),$row_data->nama); ?></td>
</tr>

<tr>
	<td> Jenis Kelamin </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'jk','name'=>'jk', 'class'=>'form-control'),$row_data->jk); ?></td>
</tr>

<tr>
	<td> Alamat </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'alamat','name'=>'alamat', 'class'=>'form-control'),$row_data->alamat); ?></td>
</tr>

<tr>
	<td><?php echo form_submit('submit','UPDATE','class="btn btn-success"'); ?> </td>
</tr>

</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
