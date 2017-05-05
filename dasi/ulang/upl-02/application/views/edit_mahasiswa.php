<h2>
Edit Data Mahasiswa
</h2>
<?php echo form_open_multipart('test_c/edit_mahasiswa/'.$row->id);
?>
<div style="float:left;margin-right:30px">
<input type="file" name="userfile" size="20"/><br/>
<img height="120px" width="100px" src="<?php echo base_url().'unggah/'.$row->foto;?>"/>
</div>
<div>
<?php echo form_input('nim',$row->nim); ?> <br/>
<?php echo form_input('nama',$row->nama); ?><br/>
<?php echo form_input('umur',$row->umur); ?><br/>
<?php
echo form_submit('submit','Simpan');
echo "</div>"; 
echo form_close();?>

