<!doctype html>
<html lang="en">
<head>
	<!--<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'assets/css/style.css'?>"/>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'assets/css/style.css'?>"/>-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'media/css/bootstrap.min.css'?>"/>
	
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'media/css/modern-business.css'?>"/>
    <!-- Custom Fonts -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'media/font-awesome/css/font-awesome.min.css'?>"/>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">INSAN CENDEKIA MADANI</a>
            </div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li ><?php echo anchor ('c_cms/beranda','Home')?></li>
						<li> <?php echo anchor ('c_cms/display_prodi','Program Studi')?></li>
						<li> <?php echo anchor ('c_cms/display_profil','Profil')?></li>
						<li> <?php echo anchor ('c_cms/display_galeri','Galeri')?></li>
						<li> <?php echo anchor ('c_cms/display_visi_misi','Visi Misi')?></li>
						<li><?php echo anchor ('c_cms/display_murid','Pendaftar')?></li>
						<li><a href="<?php echo base_url();?>index.php/c_cms/insert" >Mendaftar</a></li>
			</ul>
		</div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="content">
<center><h2>Tabel List Pendaftar Calon Murid INSAN CENDEKIA MADANI</h2></center>
<br/>
		<!--<button class="btn-warning"onclick="location.href='<?php echo base_url();?>index.php/c_cms/insert'" >Tambah Data</button>-->
		<?php
		echo form_open ('c_cms/search');
		//echo form_input ('keyword');
		?>
		<!--<button class ="tambah" onclick="location.href='<?php echo base_url();?>index.php/c_cms/search'"><img src="<?php echo base_url().'assets/images/search.png';?>"/>Search</button></td>
		<br/>
		<button class ="" onclick="location.href='<?php echo base_url();?>index.php/c_cms/sort_nama1'"><img src="<?php echo base_url().'assets/images/search.png';?>"/>Sort DEsc</button>-->
		<!--<?php //echo  anchor ('c_cms/sort_nama','sort')?>-->
	<?php	form_close();
	?>
<center>
	<table class="table table-striped table-hover " style="max-width:1100px;">
	<tr><td colspan="6"><button class="btn-warning" onclick="location.href='<?php echo base_url();?>index.php/c_cms/sort_un1'">Desc</button>&nbsp;&nbsp;&nbsp;<button class="btn-warning" ><?php echo  anchor ('c_cms/sort_un','Asc','style="text-decoration:none;"')?></button></td>
	<td ><input type="text" style="max-width:100px;"id="keyword" name="keyword" placeholder="Search" /><button class ="btn-info" onclick="location.href='<?php echo base_url();?>index.php/c_cms/search'"><img src="<?php echo base_url().'assets/images/search.png';?>"/>&nbsp;</button></td>
	</tr>
		<tr  class="warning"height="30px" align="center"><b>
			<td width="20px" ><b>No</b></td>
			<td width="200px" ><b>Kode Pendaftar</b></td>
			<td><b>Nama Murid</b></td>
			<td><b>Asal Sekolah</b></td>
			<td><b>Nilai UN</b></td>
			<td><b>Nilai US</b></td>
			<td width="200px"><b>Aksi</b></td>
		</tr>
		<?php 
		$i=1;
		foreach($list_murid->result() as $rows ){
		?>
		<tr class="danger" align="center">
			<td width="70px"><?php  echo  $i++; ?></td>
			<td width="150px"><?php echo $rows->KODE_DAFTAR; ?></td>
			<td width= "350px"><?php echo $rows->NAMA_MURID; ?></td>
			<td width= "350px"><?php echo $rows->ASAL_SEKOLAH; ?></td>
			<td width= "350px"><?php echo $rows->NILAI_UN; ?></td>
			<td width= "350px"><?php echo $rows->NILAI_US; ?></td>
			<td width="70px"> <a href="<?php echo base_url('index.php/C_cms/view_edit/'.$rows->KODE_DAFTAR,''); ?>"> <img src="<?php echo base_url().'assets/images/edit.png';?>"/></a>
			&nbsp;&nbsp;
			<a href="<?php echo base_url('index.php/C_cms/delete/'.$rows->KODE_DAFTAR,''); ?>" onclick="javascript: return confirm('Data akan Terhapus!!')"> <img src="<?php echo base_url().'assets/images/delete.png';?>"/></a></td>
		</tr>
		<?php } ?>
<table>
</center>
</div>
      <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; ADP-CCDP 2015/2016</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="<?php echo base_url();?>media/js/jquery.js"></script>
    <script src="<?php echo base_url();?>media/js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>