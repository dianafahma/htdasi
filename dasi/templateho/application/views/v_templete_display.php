<html>
<head>
<link href="<?php echo base_url();?>media/css/frontend/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<center>
<table border="1" width="1100px" align="center">
<tr class="header" align="center" bgcolor="#cc22ff">
	<td height="20" >Header
	<img src="media/css/anime4.jpg" width="50px" heigh="50px" alt="anime"/>
	<img src="application/views/anime4_7.jpg" width="50px" heigh="50px" alt="anime"/>
	</td>
</tr>
<tr class="menu" align="center">
	<td> <?php echo anchor ('c_home/display','Home')?>|
	<?php echo anchor ('c_berita/display','Berita')?>|	<?php echo anchor ('c_mahasiswa_dis/display','Mahasiswa')?>| <?php echo ('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pencarian Nama  ');?>
	<?php echo anchor ('c_berita/display','Berita')?>|	<?php echo anchor ('c_mahasiswa_dis/display_pagination','Mahasiswa_p')?>;
	echo form_input ('keyword');
	echo form_submit ('submit', '**Cari**', 'id="submit"');?></td>
</tr>
<tr align="center" class="content">
	<td height="300px"> <?php $this->load->view($content_view) ?></td>
</tr>
<tr class="footer">
	<td>Footer </td>
</tr>
</table>
</center>
</body>
</html>