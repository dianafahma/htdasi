<title>Detail Berita</title>
<br>
<h2 align="center">
	<div class="judul" >	
		<h4 class="jdl_detail"><?php echo $list_berita->judul;?></h4><p class="p-border"></p>
	</div>
</h2>
<br>
<div class="isi" >	
	<?php 
		foreach($list_gambar->result() as $row){
	?>
		<center><img class="textwrap3" src="<?php  echo base_url().$row->path_folder ; ?>" width="300" height="230"></center>
	<?php } ?>
	<br><br>
		<br><center>
			<div class="paragraf" align="justify">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo $list_berita->isi; ?> 
			</div><br>
	</center>
	<br><br><br>
	<center>
	<?php echo anchor('c_berita/kelolared','<b class="btn btn-twitter btn-lg"><i class="icon-twitter icon-large"></i>KELOLA BERITA</b>')?>
	<br><br><br>
