<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
	<form method="POST">
		
		<p>Pantai</p>
		<select id="destinasi-1">
			<option>Choose Destination</option>
			<option name="sumatera">Sumatera</option>
			<option name="jawa">Jawa</option>
		</select>
		<select id="destinasi-2">
			<option>Choose City</option>
			<option name="sumatera">Sumatera</option>
			<option name="jawa">Jawa</option>
		</select>
		<select id="kategori">
			<option>Choose Category</option>
			<option value="pantai" ="pantai">Pantai</option>
			<option name="kuliner" value="kuliner">Kuliner</option>
		</select>
		<input type="submit" value="Search"/>
	</form>

		<div id="item">

<?php
/*
echo form_open('awal/index');
//echo form_submit('submit','Cari','id="submit"');
form_close();
*/
?>
			 <?php
				foreach($list_item->result()as $row)
				{
			?>
		<table border="1">
			<tr>
				<td> ID kota </td>
				<td> Nama Kota </td>
				<td> Jumlah Penduduk </td>
				
			</tr>
			<tr align="center">
			<td><?php echo $row->id_kota; ?></td>
			<td><?php echo $row->nama_kota; ?></td>
			<td><?php echo $row->penduduk; ?></td>
<!--			<td><?php  echo anchor('awal/view_detail/'.$row->id_kota,'detail');?> </td>-->

			</tr>
		</table><br/>
			<?php
			}
			?>

			<td><?php echo anchor('awal/view_detail','defk'); ?></td>

			
		</div>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>