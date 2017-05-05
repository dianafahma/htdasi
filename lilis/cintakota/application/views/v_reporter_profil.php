<title> Update Profil </title> </h3>
<div class="content" align="center">
<div class="left"> 
<?php
	$foto=$list_mhsw->gambar;
?><p>
<div class="world-news">
<div class="">
	<img src="<?php echo base_url().$foto; ?>" class="img-circle" width="320" height="320">
	<tr><p></tr>
	</div>
<table align="center" class="font">
<!--
<tr>
	<td> Username </td>
	<td> : </td>
	<td><?php echo form_input(array('id'=>'username','name'=>'username', 'class'=>'form-control', 'disabled'=>'disabled'),$list_mhsw->username); ?></td>
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
	<td> &nbsp;<?php echo anchor ('c_reporter/edit_pass/'.$list_mhsw->username, '<button type="button" class="btn btn-sm btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ubah Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'nama','name'=>'nama', 'class'=>'form-control', 'disabled'=>'disabled'),$list_mhsw->nama); ?></td>
	<td> &nbsp;<?php echo anchor ('c_reporter/edit_nama/'.$list_mhsw->username, '<button type="button" class="btn btn-sm btn-primary">Ubah</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Jenis Kelamin </td>
	<td> : </td>
	<td><select <?php echo form_input(array('id'=>'jk','name'=>'jk', 'class'=>'form-control', 'disabled'=>'disabled' ),$list_mhsw->jk); ?>>
		   <option value="L" <?php if($list_mhsw->jk=='L') echo 'selected' ?>>Laki-Laki</option>
		   <option value="P" <?php if($list_mhsw->jk=='P') echo 'selected' ?>>Perempuan</option>
		</select></td>
		</td><td> &nbsp;<?php echo anchor ('c_reporter/edit_jk/'.$list_mhsw->username, '<button type="button" class="btn btn-sm btn-primary">Ubah</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
<tr>
	<td> Alamat </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'alamat','name'=>'alamat', 'class'=>'form-control', 'disabled'=>'disabled'),$list_mhsw->alamat); ?></td>
	</td><td> &nbsp;<?php echo anchor ('c_reporter/edit_alamat/'.$list_mhsw->username, '<button type="button" class="btn btn-sm btn-primary">Ubah</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>

</table>
</div>

<?php
?>
</div>
<!--<div class="pagination">
<?php echo $this->pagination->create_links(); ?>
</div>-->
