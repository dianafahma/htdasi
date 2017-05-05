<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'aset/theme/bootstrap.css'?>"/>
</head>
<body>
<h2><i><b>Detail Negara</b></i></h2>
<table class="form-horizontal lead">
		<form class="form-horizontal">
		<tr>
			<td class="panel-heading">Id Negara</td><td class="panel panel-body">: <?php echo $row->id_negara;?></td></tr><tr>
			<td class="panel-heading">Nama Negara</td><td class="panel panel-body">: <?php echo $row->nama_negara;?></td></tr><tr>
			<td class="panel-heading">Jumlah Penduduk</td><td class="panel panel-body">: <?php echo $row->jml_penduduk;?></td>	</tr>
			</form>
	</table>
	<?php echo anchor('c_negara/view','Balik','class="btn btn-info"') ?>
</body>
</body>
</html>