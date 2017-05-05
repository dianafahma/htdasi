<title>Kelola Reporter</title>
<center>
<div class="content" align="center">
<div class="left"> 
<div class="left">
<?php
	echo anchor('c_reporter/tambah','<button type="button" class="btn btn-success">Tambah Reporter Baru +</button>');
?>
</div>

<?php
	foreach($list_reporter as $row)
	{
	$foto=$row['gambar'];
?><p>
<div class="tabel">
	<img src="<?php echo base_url().$foto; ?>" class="img-circle" width="120" height="120">
	<font align="center"><h5><?php echo $row['nama']; ?></h5></font>
	<?php echo anchor('c_reporter/display_form_update/'.$row['username'], '<button type="button" class="btn btn-warning">UPDATE</button>'); ?>
	<span onclick="return confirm('Data akan dihapus! Anda yakin ingin menghapusnya?');">
	<?php echo anchor('c_reporter/delete_data/'.$row['username'], '<button type="button" class="btn btn-danger">DELETE</button>'); ?></span>
</div>

<?php
}
?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<table>
<tr><td align="center">
<div class="pagination" class="tabel">
<?php echo $this->pagination->create_links(); ?>
</div>
</td></tr>
</table>
</center>
