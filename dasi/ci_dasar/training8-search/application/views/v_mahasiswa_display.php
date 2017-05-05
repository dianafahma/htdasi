<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/theme/bootstrap.css"/>
    </head>
<body class="container">
<h2>Data Mahasiswa Seadanya</h2>
<center>
<?php
echo form_open ('c_mahasiswa/search','Insert');
echo form_open('c_mahasiswa/tambah');?>
<input type="text" class="form-control col-lg-8" placeholder="Search" name="keyword">
<?php //echo form_input ('keyword'); ?>
<?php
echo form_submit ('submit', 'Pencarian', 'class="btn btn-info" type="button"');?>
&nbsp;&nbsp;&nbsp;
<?php
echo anchor ('c_mahasiswa/tambah','<button class="btn btn-info" type="button">Insert</button>');
form_close();
?>

</center><!--
<form class="form-horizontal">
  <fieldset>
    <legend>Input Data Langsung</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">NIM</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="nim"placeholder="Masukkan NIM ">
      </div>
	  <label for="inputEmail" class="col-lg-2 control-label">Nama</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="nama" placeholder="Masukkan Nama Mahasiswa ">
      </div>
	  <label for="inputEmail" class="col-lg-2 control-label">Umur</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="umur" placeholder="Masukkan Umur ">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-default" href="<?php echo ('c_mahasiswa/display')?>">Cancel</button>
		
		
        <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_submit('submit','simpan','class="btn btn-success"'); ?></td>
<?php
echo form_close();
?>		
      </div>
    </div>
  </fieldset>
</form>-->


<table  class="table table-striped table-hover " align="center">
<tr class="info">
	<td style="color:blue" >NIM</td>
	<td>NAMA</td>
	<td>UMUR</td>
	<td colspan="2">AKSI</td>
</tr>
<?php
	foreach($list_mhsw->result()as $row)
	{
?>
<tr>
	<td><?php echo $row->nim; ?></td>
	<td><?php echo $row->nama; ?></td>
	<td><?php echo $row->umur; ?></td>
	<td><?php echo anchor('C_mahasiswa/view_detail/'.$row->nim, '<button  class="btn btn-primary" type="button">View detail</button>'); ?></td>
	<td><?php echo anchor('C_mahasiswa/delete_data/'.$row->nim, '<button  class="btn btn-primary" type="button">Delete</button>'); ?></td>
</tr>
<?php
	}
	echo form_close();
?>
</table>
</body>
</html>
