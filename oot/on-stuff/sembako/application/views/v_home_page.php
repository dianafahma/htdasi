<html>
<head>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
</head>
<style>
body
{
	margin:0px;
	padding:0px;
}
.nav {
	line-hight:20px;
	background-color:#;
	height:300px;
	width:250px;
	float:left;
	margin-left:22px;
	margin-bottom: 20px;
	padding-top: 5px;
	text-align:center;
	padding-left: 10px;
	padding-right: 10px;
	border: 1px solid #a1a1a1;
	border-radius: 5px;
	
}
.contain{
	width:1100px;
	height:auto;
	margin:auto;
}
</style>
<body >
<div class="contain">
		<?php
		echo form_open_multipart('c_ghouse/do_upload');
		?>
		<br/>
		<table>
		<tr>
			<td class="col-lg-3 control-label">Nama Member</td>
			<td class="col-lg-3 control-label"> : </td>
			<td><input type="text" class="form-control" name="deskripsi" required/></td>
		</tr>
		<tr>
			<td colspan="3" >
			<input type="file" name="userfile" size="20" />
			</td>
		</tr>
		<tr>
			<td colspan="3" style="padding-left:150px;">
			<input type="submit" class="btn btn-danger btn-xs"  value="upload" /></td>
		</tr>
		</table>
		</form>
		<h2>Daftar Nama Perwakilan Toko</h2>
		<!--<table class="table table-striped table-hover " style="max-width:500px">
			<tr class="danger">
				<td> Nama Tugas </td>
				<td> Nama File</td>
				<td> File Gambar</td>
				<td> Tanggal Upload </td>
			</tr>-->
			<?php 
			foreach($list_unggah->result()as $row){
			$foto=$row->gambar;
			?>
			<!--<tr>
				<td><?php echo $row->judul;?> </td>
				<td><a href="<?php echo base_url();?>uploads/<?php echo $row->file;?>">
				<?php echo $row->file?></a></td>
				<td>
				<img src="<?php echo base_url(); echo $row->gambar; ?>" height=150px; width=200px; >
				</td>
				<td><?php echo $row->tanggal;?> </td>
			</tr>-->
			<?php } ?>
		<!--</table>-->
		<div style="">
				<table>
				<tr >
				<?php 
					foreach($list_unggah->result()as $row){
					$foto=$row->gambar;
					?>
					<td class="nav" style="max-weight:500; max-height:900px;"> <img src="<?php echo base_url().$foto; ?>" width="200" height="180" class="img-circle">
					</br>
					<?php echo "</br>";
					echo "Nama : ".$row->judul?></br>
					</td>
					
					<?php }?>
				</tr>
				</table>
		</div>
		<!--<table class="table table-striped table-hover " style="max-width:500px">
			<tr class="danger">
				<td> Nama Tugas </td>
				<td> Nama File</td>
				<td> Tanggal Upload </td>
				<!--<td> File Gambar</td>
			</tr>
			</table>-->
</div>
</body>
</html>