<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
    <meta name="description" content="">
    <meta name="author" content="">
    <title>INSAN CENDEKIA MADANI</title>
    <!-- Bootstrap Core CSS
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'assets/css/style.css'?>"/> -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'media/css/bootstrap.min.css'?>"/>
	
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'media/css/modern-business.css'?>"/>
    <!-- Custom Fonts -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'media/font-awesome/css/font-awesome.min.css'?>"/>
</head>
<body>
    <!-- Navigation -->
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
				<li><?php echo anchor ('c_cms/display_murid','Pendaftar')?>
				</li>
				<li><a href="<?php echo base_url();?>index.php/c_cms/insert" >Mendaftar</a>
						</li>
			</ul>
		</div>
            <!-- /.navbar-collapse -->
    </div>
        <!-- /.container -->
    </nav>

<div class="row">
            <div class="col-lg-8">
			<center>
<h2>Form Pendaftaran Murid Baru 2016/2017</h2>
	<br/>
	<?php 
	echo form_open('c_cms/insert');
	?>
	<table>
		<tr>
			<td>No Pendaftaran</td>
			<td>: </td>
			<td>
			<input type="text" class="form-control" id="inputKode" name="kode_daftar" placeholder="No. Pendaftaran "required/>
			</td>
		</tr>
		<tr>
			<td>Nama Murid</td>
			<td>: </td>
			<td><input type="text" class="form-control" id="inputNama" name="nama_murid" placeholder="Nama Murid " required/>
			</td>
		</tr>
		<tr>
			<td>Asal Sekolah</td>
			<td>: </td>
			<td><input type="text" class="form-control" id="inputSekolah" name="asal_sekolah" placeholder="Asal Sekolah ">
			</td>
		</tr>
				<tr>
			<td>Rata-Rata Nilai Ujian Nasional</td>
			<td>: </td>
			<td><input type="text" class="form-control" id="inputUn" name="nilai_un" placeholder="Nilai Ujian Nasional">
			</td>
		</tr>
				<tr>
			<td>Rata-Rata Nilai Ujian Sekolah</td>
			<td>: </td>
			<td><input type="text" class="form-control" id="inputUs" name="nilai_us" placeholder="Nilai Ujian Sekolah">
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td >
			<br/>
			<?php echo form_submit('submit','simpan','class="tambah"');?> &nbsp;&nbsp;
			<button class="tambah" onclick="javascript:location='<?php echo base_url();?>index.php/c_cms/display_murid'">Batal</button>
			</td>
		</tr>
		<?php echo form_close();?>
	</table>
	</center>
</div>
</div>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center><p><b>Copyright &copy; ADP-CCDP 2015/2016</b></p></center>
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