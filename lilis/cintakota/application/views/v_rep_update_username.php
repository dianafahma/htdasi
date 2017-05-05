<div align="center">
<h3> UPDATE DATA </h3>
</div>
<!--<?php echo form_open('c_reporter/update_jk/'.$row_data->username.''); ?>-->
<table align="center" class="font">
<tr>
	<td> Username </td>
	<td> : </td>
	<td><?php echo form_input(array('id'=>'username','name'=>'username', 'class'=>'form-control', 'disabled'=>'disabled'),$row_data->username); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
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
	<td> Password </td>
	<td> : </td>
	<!--<td> <?php echo form_input(array('id'=>'password','name'=>'password', 'class'=>'form-control')); ?> -->
	<td> <?php echo form_input(array('id'=>'password','name'=>'password', 'class'=>'form-control','type'=>'password', 'disabled'=>'disabled' ),$row_data->password); ?> 
	</td><td> &nbsp;<?php echo anchor ('c_reporter/edit_pass/'.$row_data->username, '<button type="button" class="btn btn-sm btn-primary">Ubah</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'nama','name'=>'nama', 'class'=>'form-control', 'disabled'=>'disabled'),$row_data->nama); ?></td>
	<td> &nbsp;<?php echo anchor ('c_reporter/edit_nama/'.$row_data->username, '<button type="button" class="btn btn-sm btn-primary">Ubah</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Jenis Kelamin </td>
	<td> : </td>
	<td><select <?php echo form_input(array('id'=>'jk','name'=>'jk', 'class'=>'form-control', 'disabled'=>'disabled' ),$row_data->jk); ?>>
		   <option value="L" <?php if($row_data->jk=='L') echo 'selected' ?>>Laki-Laki</option>
		   <option value="P" <?php if($row_data->jk=='P') echo 'selected' ?>>Perempuan</option>
		</select></td>
		</td><td> &nbsp;<?php echo anchor ('c_reporter/edit_jk/'.$row_data->username, '<button type="button" class="btn btn-sm btn-primary">Ubah</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
<tr>
	<td> Alamat </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'alamat','name'=>'alamat', 'class'=>'form-control', 'disabled'=>'disabled'),$row_data->alamat); ?></td>
	</td><td> &nbsp;<?php echo anchor ('c_reporter/edit_alamat/'.$row_data->username, '<button type="button" class="btn btn-sm btn-primary">Ubah</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>

</table>
