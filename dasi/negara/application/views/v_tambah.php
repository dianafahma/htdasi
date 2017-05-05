<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'aset/theme/bootstrap.css'?>"/>
</head>
<body>
<?php echo form_open('c_negara/tambah');?>
<form class="form-horizontal">
  <fieldset>
    <legend><u>Input Data Negara</u></legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ID Negara</label>
      <div class="col-lg-5">
        <input type="text" class="form-control"  name="id_negara" placeholder="Id Negara">	
	  </div>
      <label for="inputEmail" class="col-lg-2 control-label">Nama Negara</label>
      <div class="col-lg-5">
        <input type="text" class="form-control"  name="nama_negara" placeholder="Nama Negara">
      </div>
      <label for="inputEmail" class="col-lg-2 control-label">Jumlah Penduduk</label>
      <div class="col-lg-5">
        <input type="text" class="form-control"  name="jml_penduduk" placeholder="Jumlah Penduduk"><br/>
      </div>
    </div>
  </fieldset>
    <?php echo form_submit('submit','Simpan','class="btn btn-primary"'); echo '&nbsp;';	echo anchor('/c_negara/view','Kembali','class="btn btn-default"')?>
	<?php
	echo form_close();?></td>
	</tr>
</table>
</body>
</html>